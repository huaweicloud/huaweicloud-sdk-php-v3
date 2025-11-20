<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class TransferTypeEnum
{
    /**
     * Possible values of this enum
     */
    const TRANSFER_OUT = 'TRANSFER_OUT';
    const TRANSFER_BACK = 'TRANSFER_BACK';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TRANSFER_OUT,
            self::TRANSFER_BACK,
        ];
    }
}

