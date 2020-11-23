<?php

namespace HuaweiCloud\SDK\Core\Utils;

use HuaweiCloud\SDK\Core\Exceptions\SdkException;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class ObjectSerializer
{
    private static $primitiveTypes = array('DateTime', 'bool', 'boolean', 'byte',
        'double', 'float', 'int', 'integer', 'mixed', 'number', 'object',
        'string', 'void');
    public static function sanitizeForSerialization($obj,
                                                    $type = null,
                                                    $format = null
    ) {
        if ($obj === null || is_scalar($obj)) {
            return $obj;
        } elseif ($obj instanceof \DateTime) {
            if ($format === 'date') {
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
                    if ($value !== null
                        && !in_array($openAPIType,
                            ObjectSerializer::$primitiveTypes, true)
                        && method_exists($openAPIType, 'getAllowableEnumValues')
                        && !in_array($value, $openAPIType::getAllowableEnumValues(), true)) {
                        $imploded = implode("', '", $openAPIType::getAllowableEnumValues());
                        throw new SdkException("InvalidArgumentException : Invalid value for enum '$openAPIType', must be one of: '$imploded'");
                    }
                    if ($value !== null) {
                        $returnValues[$obj::attributeMap()[$key]] =
                            self::sanitizeForSerialization($value, $openAPIType, $formats[$key]);
                    }
                }
            } else {
                foreach($obj as $key => $value) {
                    $returnValues[$key] = self::sanitizeForSerialization($value);
                }
            }
            return (object)$returnValues;
        } else {
            return (string)$obj;
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
        } elseif (substr($responseType, 0, 4) === 'map[') {
            $response = is_string($response) ? json_decode($response) : $response;
            settype($response, 'array');

            $inner = substr($responseType, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClassArray = explode(',', $inner, 2);
                $subClassType = $subClassArray[1];
                foreach ($response as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClassType, null);
                }
            }
            return $deserialized;
        } elseif (strcasecmp(substr($responseType, -2), '[]') === 0) {
            $response = is_string($response) ? json_decode($response) : $response;
            $subClassType = substr($responseType, 0, -2);
            $returnValues = [];
            foreach ($response as $key => $value) {
                $returnValues[] = self::deserialize($value, $subClassType, null);
            }
            return $returnValues;
        } elseif ($responseType === 'object') {
            settype($response, 'array');
            return $response;
        } elseif ($responseType === '\DateTime') {
            if (!empty($response)) {
                return new \DateTime($response);
            } else {
                return null;
            }
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
}
