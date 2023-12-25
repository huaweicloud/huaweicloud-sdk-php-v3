<?php
/**
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache LICENSE, Version 2.0 (the
 * "LICENSE"); you may not use this file except in compliance
 * with the LICENSE.  You may obtain a copy of the LICENSE at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the LICENSE is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the LICENSE for the
 * specific language governing permissions and limitations
 * under the LICENSE.
 * 
 * Copyright 2018 OpenAPI-Generator Contributors (https://openapi-generator.tech)
 * Copyright 2018 SmartBear Software
 * 
 */

namespace HuaweiCloud\SDK\Core\Utils;

use HuaweiCloud\SDK\Core\Exceptions\SdkException;

class ObjectSerializer
{
    private static $primitiveTypes = ['DateTime', 'bool', 'boolean', 'byte',
        'double', 'float', 'int', 'integer', 'mixed', 'number', 'object',
        'string', 'void', ];

    public static function sanitizeForSerialization($obj,
                                                    $type = null,
                                                    $format = null
    ) {
        if (null === $obj || is_scalar($obj)) {
            return $obj;
        } elseif ($obj instanceof \DateTime) {
            if ('date' === $format) {
                return $obj->format('Y-m-d');
            } else {
                return $obj->format(\DateTime::ATOM);
            }
        } elseif (is_array($obj)) {
            foreach ($obj as $key => $value) {
                $obj[$key] = self::sanitizeForSerialization($value);
            }

            return $obj;
        } elseif (is_object($obj)) {
            $returnValues = [];
            if ($obj instanceof ModelInterface) {
                $formats = $obj::openAPIFormats();
                foreach ($obj::openAPITypes() as $key => $openAPIType) {
                    $getter = $obj::getters()[$key];
                    $value = $obj->$getter();
                    if (null !== $value
                        && !in_array($openAPIType,
                            ObjectSerializer::$primitiveTypes, true)
                        && method_exists($openAPIType, 'getAllowableEnumValues')
                        && !in_array($value, $openAPIType::getAllowableEnumValues(), true)) {
                        $imploded = implode("', '", $openAPIType::getAllowableEnumValues());
                        throw new SdkException("InvalidArgumentException : Invalid value for enum '$openAPIType', must be one of: '$imploded'");
                    }
                    if (null !== $value) {
                        $returnValues[$obj::attributeMap()[$key]] =
                            self::sanitizeForSerialization($value, $openAPIType, $formats[$key]);
                    }
                }
            } else {
                foreach ($obj as $key => $value) {
                    $returnValues[$key] = self::sanitizeForSerialization($value);
                }
            }

            return (object) $returnValues;
        } else {
            return (string) $obj;
        }
    }

    public static function sanitizeFilename($name)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $name, $match)) {
            return $match[1];
        } else {
            return $name;
        }
    }

    public static function deserialize($response, $responseType, $httpHeaders = null)
    {
        if (null === $response) {
            return null;
        } 
        if ('map[' === substr($responseType, 0, 4) &&
            0 === strcasecmp(substr($responseType, -2), '[]')) {
            // 外部是数组类型，内部嵌套了map类型
            $response = is_string($response) ? json_decode($response) : $response;
            settype($response, 'array');
            $subClassType = substr($responseType, 0, -2);
            $returnValues = [];
            foreach ($response as $key => $value) {
                $returnValues[] = self::deserialize($value, $subClassType, null);
            }
            return $returnValues;
        }
        if ('map[' === substr($responseType, 0, 4)) {
            $response = is_string($response) ? json_decode($response) : $response;
            settype($response, 'array');

            $inner = substr($responseType, 4, -1);
            $deserialized = [];
            if (false !== strrpos($inner, ',')) {
                $subClassArray = explode(',', $inner, 2);
                $subClassType = $subClassArray[1];
                foreach ($response as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClassType, null);
                }
            }

            return $deserialized;
        } elseif (0 === strcasecmp(substr($responseType, -2), '[]')) {
            $response = is_string($response) ? json_decode($response) : $response;
            $subClassType = substr($responseType, 0, -2);
            $returnValues = [];
            foreach ($response as $key => $value) {
                $returnValues[] = self::deserialize($value, $subClassType, null);
            }

            return $returnValues;
        } elseif ('object' === $responseType) {
            settype($response, gettype($response));

            return $response;
        } elseif ('\DateTime' === $responseType) {
            return self::getDateTime($response);
        } elseif (in_array($responseType, ObjectSerializer::$primitiveTypes, true)) {
            settype($response, $responseType);

            return $response;
        } elseif (method_exists($responseType, 'getAllowableEnumValues')) {
            if (!in_array($response, $responseType::getAllowableEnumValues(), true)) {
                $imploded = implode("', '", $responseType::getAllowableEnumValues());
                throw new SdkException("InvalidArgumentException : Invalid value for enum '$responseType', must be one of: '$imploded'");
            }

            return $response;
        } else {
            $response = is_string($response) ? json_decode($response) : $response;
            $instance = new $responseType();
            foreach ($instance::openAPITypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];

                if (!isset($propertySetter) || !isset($response->{$instance::attributeMap()[$property]})) {
                    continue;
                }

                $propertyValue = $response->{$instance::attributeMap()[$property]};
                if (isset($propertyValue)) {
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }

            return $instance;
        }
    }

    /**
     * @param $dateStr
     * @return \DateTime|null
     */
    private static function getDateTime($dateStr): ?\DateTime
    {
        if (empty($dateStr)) {
            return null;
        }
        $dateTime = strstr($dateStr, ".", true);
        try {
            // should case to dateTime type in exception handler
            if ($dateTime == false) {
                return new \DateTime($dateStr);
            }
            return new \DateTime($dateTime);
        } catch (\Exception $e) {
            return null;
        }
    }
}
