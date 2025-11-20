<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class BillResourceType
{
    /**
     * Possible values of this enum
     */
    const _2_D_DIGITAL_HUMAN_BASIC = '2D_DIGITAL_HUMAN_BASIC';
    const _2_D_DIGITAL_HUMAN_ADVANCED = '2D_DIGITAL_HUMAN_ADVANCED';
    const _2_D_DIGITAL_HUMAN_FLEXUS = '2D_DIGITAL_HUMAN_FLEXUS';
    const VOICE_BASIC = 'VOICE_BASIC';
    const VOICE_MIDDLE = 'VOICE_MIDDLE';
    const VOICE_ADVANCE = 'VOICE_ADVANCE';
    const VOICE_THIRD_PARTY = 'VOICE_THIRD_PARTY';
    const VOICE_THIRD_PARTY_LJZN = 'VOICE_THIRD_PARTY_LJZN';
    const VOICE_FLEXUS = 'VOICE_FLEXUS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_2_D_DIGITAL_HUMAN_BASIC,
            self::_2_D_DIGITAL_HUMAN_ADVANCED,
            self::_2_D_DIGITAL_HUMAN_FLEXUS,
            self::VOICE_BASIC,
            self::VOICE_MIDDLE,
            self::VOICE_ADVANCE,
            self::VOICE_THIRD_PARTY,
            self::VOICE_THIRD_PARTY_LJZN,
            self::VOICE_FLEXUS,
        ];
    }
}

