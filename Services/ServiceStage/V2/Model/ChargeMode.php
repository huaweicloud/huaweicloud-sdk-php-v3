<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ChargeMode
{
    /**
     * Possible values of this enum
     */
    const PROVIDED = 'provided';
    const ON_DEMANDED = 'on_demanded';
    const MONTHLY = 'monthly';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROVIDED,
            self::ON_DEMANDED,
            self::MONTHLY,
        ];
    }
}

