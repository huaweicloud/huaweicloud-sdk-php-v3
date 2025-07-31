<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ChardMode
{
    /**
     * Possible values of this enum
     */
    const PERIODIC = 'PERIODIC';
    const ONE_TIME = 'ONE_TIME';
    const ON_DEMAND = 'ON_DEMAND';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERIODIC,
            self::ONE_TIME,
            self::ON_DEMAND,
        ];
    }
}

