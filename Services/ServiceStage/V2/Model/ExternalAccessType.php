<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ExternalAccessType
{
    /**
     * Possible values of this enum
     */
    const AUTO_GENERATED = 'AUTO_GENERATED';
    const SPECIFIED = 'SPECIFIED';
    const IP_ADDR = 'IP_ADDR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTO_GENERATED,
            self::SPECIFIED,
            self::IP_ADDR,
        ];
    }
}

