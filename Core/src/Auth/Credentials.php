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
 */

namespace HuaweiCloud\SDK\Core\Auth;

use HuaweiCloud\SDK\Core\Exceptions\SdkException;
use HuaweiCloud\SDK\Core\SdkRequest;

class Credentials implements ICredentials
{
    protected $ak;
    protected $sk;
    protected $securityToken;

    private static function getCredentialsClass($clientType, $credentialType)
    {
        $credentialPath = "HuaweiCloud\SDK\Core\Auth\\" . $credentialType;
        if (class_exists($credentialPath)) {
            return new $credentialPath();
        } else {
            try {
                $class = new \ReflectionClass($clientType);
            } catch (ReflectionException $e) {
                throw new SdkException($e->getMessage());
            }
            $credentialPath = $class->getNamespaceName().'\\'.
                $credentialType;
            if (class_exists($credentialPath)) {
                return new $credentialPath();
            } else {
                throw new SdkException('Class '.$credentialPath.' not find');
            }
        }
    }

    private static function camelToUnderscore($string)
    {
        return strtolower(preg_replace('/(?<=[a-z])([A-Z])/', '_$1', $string));
    }

    private static function initializeCredentials($credentials)
    {
        foreach ($credentials::setters() as $key => $value) {
            $propertySetter = $credentials::setters()[$key];
            if (!isset($propertySetter)) {
                continue;
            }
            $credentials->$propertySetter(getenv('HUAWEICLOUD_SDK_'.
                strtoupper(Credentials::camelToUnderscore($key))));
        }

        return $credentials;
    }

    private static function loadOptionalParams($credentials)
    {
        return $credentials;
    }

    public static function getCredentialFromEnvironment($clientType,
                                                        $defaultCredentials)
    {
        $credentialsTypeDef = getenv('HUAWEICLOUD_SDK_TYPE');
        if (! $credentialsTypeDef) {
            $credentialsTypeDef = $defaultCredentials;
        }
        $credentialsType = Credentials::getCredentialsClass($clientType,
            $credentialsTypeDef);
        $credentials = Credentials::initializeCredentials($credentialsType);
        $credentials = Credentials::loadOptionalParams($credentials);

        return $credentials;
    }

    public static function setters()
    {
    }

    public static function getters()
    {
    }

    public function getUpdatePathParams()
    {
    }

    public function processAuthRequest(SdkRequest $request)
    {
    }
}
