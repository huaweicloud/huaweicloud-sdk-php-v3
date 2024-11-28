<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

        class VoiceLanguage
{
    /**
     * Possible values of this enum
     */
    const UNKNOW = 'UNKNOW';
    const CN = 'CN';
    const EN = 'EN';
    const GER = 'GER';
    const FR = 'fr';
    const KR = 'Kr';
    const POR = 'por';
    const JPN = 'JPN';
    const ITA = 'Ita';
    const ESP = 'ESP';
    const DBH = 'DBH';
    const GT = 'GT';
    const GXH = 'GXH';
    const HBH = 'HBH';
    const SXH = 'SXH';
    const SCH = 'SCH';
    const YY = 'YY';
    const RUSSIAN = 'Russian';
    const FILIPINO = 'Filipino';
    const DUTCH = 'Dutch';
    const INDONESIAN = 'Indonesian';
    const VIETNAMESE = 'Vietnamese';
    const ARABIC = 'Arabic';
    const TURKISH = 'Turkish';
    const MALAY = 'Malay';
    const THAI = 'Thai';
    const FINNISH = 'Finnish';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOW,
            self::CN,
            self::EN,
            self::GER,
            self::FR,
            self::KR,
            self::POR,
            self::JPN,
            self::ITA,
            self::ESP,
            self::DBH,
            self::GT,
            self::GXH,
            self::HBH,
            self::SXH,
            self::SCH,
            self::YY,
            self::RUSSIAN,
            self::FILIPINO,
            self::DUTCH,
            self::INDONESIAN,
            self::VIETNAMESE,
            self::ARABIC,
            self::TURKISH,
            self::MALAY,
            self::THAI,
            self::FINNISH,
        ];
    }
}

