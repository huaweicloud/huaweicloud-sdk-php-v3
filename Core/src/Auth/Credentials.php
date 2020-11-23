<?php

namespace HuaweiCloud\SDK\Core\Auth;

use HuaweiCloud\SDK\Core\SdkRequest;
use HuaweiCloud\SDK\Core\Exceptions\SdkException;

class Credentials implements ICredentials
{
    public function getUpdatePathParams()
    {
    }

    public function processAuthRequest(SdkRequest $request)
    {
    }

    private static function getCredentialsClass($iamClient, $credentialType)
    {
        $credentialPath = "HuaweiCloud\SDK\Core\Auth\\" . $credentialType;
        if (class_exists($credentialPath)) {
            return new $credentialPath;
        } else {
            try {
                $class = new \ReflectionClass($iamClient);
            } catch (ReflectionException $e) {
                throw new SdkException($e->getMessage());
            }
            $credentialPath = $class->getNamespaceName() . '\\' .
                $credentialType;
            if (class_exists($credentialPath)) {
                return new $credentialPath;
            } else {
                throw new SdkException('Class ' . $credentialPath . " not find");
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
            $credentials->$propertySetter(getenv( 'HUAWEICLOUD_SDK_' .
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
        if (!isset($credentialsTypeDef)) {
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
        // TODO: Implement setters() method.
    }

    public static function getters()
    {
        // TODO: Implement getters() method.
    }
}