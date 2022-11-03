<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class ListenerProtocol
{
    /**
     * Possible values of this enum
     */
    const TCP = 'TCP';
    const UDP = 'UDP';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TCP,
            self::UDP,
        ];
    }
}

