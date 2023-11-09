<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class RuntimeType
{
    /**
     * Possible values of this enum
     */
    const TOMCAT8 = 'Tomcat8';
    const JAVA8 = 'Java8';
    const PHP7 = 'Php7';
    const NODEJS8 = 'Nodejs8';
    const DOCKER = 'Docker';
    const PYTHON3 = 'Python3';
    const CUSTOM = 'Custom';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TOMCAT8,
            self::JAVA8,
            self::PHP7,
            self::NODEJS8,
            self::DOCKER,
            self::PYTHON3,
            self::CUSTOM,
        ];
    }
}

