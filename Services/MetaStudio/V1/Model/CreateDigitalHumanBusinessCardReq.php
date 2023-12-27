<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDigitalHumanBusinessCardReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDigitalHumanBusinessCardReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片。
    * cardTempletAssetId  数字人名片模板资产ID。
    * cardTextConfig  cardTextConfig
    * cardImageConfig  cardImageConfig
    * introductionType  自我介绍驱动方式。 * TEXT: 文本驱动，即通过TTS合成语音。文本驱动需要填写introduction_text和voice_asset_id参数。 * AUDIO: 语音驱动，需要在资产库中先上传语音资产。语音驱动需要填写introduction_audio_asset_id参数。
    * introductionText  自我介绍文本，用于驱动数字人口型。
    * voiceAssetId  音色资产ID。
    * introductionAudioAssetId  自我介绍语音资产ID，用于驱动数字人口型。 > * 介绍语音需要作为asset_type=AUDIO资产先上传至资产库。
    * videoAssetName  输出名片视频资产名称。默认取card_name的值
    * gender  性别。 * MALE：男性 * FEMALE：女性
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'businessCardType' => 'string',
            'cardTempletAssetId' => 'string',
            'cardTextConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BusinessCardTextConfig',
            'cardImageConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\BusinessCardImageConfig',
            'introductionType' => 'string',
            'introductionText' => 'string',
            'voiceAssetId' => 'string',
            'introductionAudioAssetId' => 'string',
            'videoAssetName' => 'string',
            'gender' => 'string',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片。
    * cardTempletAssetId  数字人名片模板资产ID。
    * cardTextConfig  cardTextConfig
    * cardImageConfig  cardImageConfig
    * introductionType  自我介绍驱动方式。 * TEXT: 文本驱动，即通过TTS合成语音。文本驱动需要填写introduction_text和voice_asset_id参数。 * AUDIO: 语音驱动，需要在资产库中先上传语音资产。语音驱动需要填写introduction_audio_asset_id参数。
    * introductionText  自我介绍文本，用于驱动数字人口型。
    * voiceAssetId  音色资产ID。
    * introductionAudioAssetId  自我介绍语音资产ID，用于驱动数字人口型。 > * 介绍语音需要作为asset_type=AUDIO资产先上传至资产库。
    * videoAssetName  输出名片视频资产名称。默认取card_name的值
    * gender  性别。 * MALE：男性 * FEMALE：女性
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'businessCardType' => null,
        'cardTempletAssetId' => null,
        'cardTextConfig' => null,
        'cardImageConfig' => null,
        'introductionType' => null,
        'introductionText' => null,
        'voiceAssetId' => null,
        'introductionAudioAssetId' => null,
        'videoAssetName' => null,
        'gender' => null,
        'reviewConfig' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片。
    * cardTempletAssetId  数字人名片模板资产ID。
    * cardTextConfig  cardTextConfig
    * cardImageConfig  cardImageConfig
    * introductionType  自我介绍驱动方式。 * TEXT: 文本驱动，即通过TTS合成语音。文本驱动需要填写introduction_text和voice_asset_id参数。 * AUDIO: 语音驱动，需要在资产库中先上传语音资产。语音驱动需要填写introduction_audio_asset_id参数。
    * introductionText  自我介绍文本，用于驱动数字人口型。
    * voiceAssetId  音色资产ID。
    * introductionAudioAssetId  自我介绍语音资产ID，用于驱动数字人口型。 > * 介绍语音需要作为asset_type=AUDIO资产先上传至资产库。
    * videoAssetName  输出名片视频资产名称。默认取card_name的值
    * gender  性别。 * MALE：男性 * FEMALE：女性
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'businessCardType' => 'business_card_type',
            'cardTempletAssetId' => 'card_templet_asset_id',
            'cardTextConfig' => 'card_text_config',
            'cardImageConfig' => 'card_image_config',
            'introductionType' => 'introduction_type',
            'introductionText' => 'introduction_text',
            'voiceAssetId' => 'voice_asset_id',
            'introductionAudioAssetId' => 'introduction_audio_asset_id',
            'videoAssetName' => 'video_asset_name',
            'gender' => 'gender',
            'reviewConfig' => 'review_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片。
    * cardTempletAssetId  数字人名片模板资产ID。
    * cardTextConfig  cardTextConfig
    * cardImageConfig  cardImageConfig
    * introductionType  自我介绍驱动方式。 * TEXT: 文本驱动，即通过TTS合成语音。文本驱动需要填写introduction_text和voice_asset_id参数。 * AUDIO: 语音驱动，需要在资产库中先上传语音资产。语音驱动需要填写introduction_audio_asset_id参数。
    * introductionText  自我介绍文本，用于驱动数字人口型。
    * voiceAssetId  音色资产ID。
    * introductionAudioAssetId  自我介绍语音资产ID，用于驱动数字人口型。 > * 介绍语音需要作为asset_type=AUDIO资产先上传至资产库。
    * videoAssetName  输出名片视频资产名称。默认取card_name的值
    * gender  性别。 * MALE：男性 * FEMALE：女性
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'businessCardType' => 'setBusinessCardType',
            'cardTempletAssetId' => 'setCardTempletAssetId',
            'cardTextConfig' => 'setCardTextConfig',
            'cardImageConfig' => 'setCardImageConfig',
            'introductionType' => 'setIntroductionType',
            'introductionText' => 'setIntroductionText',
            'voiceAssetId' => 'setVoiceAssetId',
            'introductionAudioAssetId' => 'setIntroductionAudioAssetId',
            'videoAssetName' => 'setVideoAssetName',
            'gender' => 'setGender',
            'reviewConfig' => 'setReviewConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * businessCardType  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片。
    * cardTempletAssetId  数字人名片模板资产ID。
    * cardTextConfig  cardTextConfig
    * cardImageConfig  cardImageConfig
    * introductionType  自我介绍驱动方式。 * TEXT: 文本驱动，即通过TTS合成语音。文本驱动需要填写introduction_text和voice_asset_id参数。 * AUDIO: 语音驱动，需要在资产库中先上传语音资产。语音驱动需要填写introduction_audio_asset_id参数。
    * introductionText  自我介绍文本，用于驱动数字人口型。
    * voiceAssetId  音色资产ID。
    * introductionAudioAssetId  自我介绍语音资产ID，用于驱动数字人口型。 > * 介绍语音需要作为asset_type=AUDIO资产先上传至资产库。
    * videoAssetName  输出名片视频资产名称。默认取card_name的值
    * gender  性别。 * MALE：男性 * FEMALE：女性
    * reviewConfig  reviewConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'businessCardType' => 'getBusinessCardType',
            'cardTempletAssetId' => 'getCardTempletAssetId',
            'cardTextConfig' => 'getCardTextConfig',
            'cardImageConfig' => 'getCardImageConfig',
            'introductionType' => 'getIntroductionType',
            'introductionText' => 'getIntroductionText',
            'voiceAssetId' => 'getVoiceAssetId',
            'introductionAudioAssetId' => 'getIntroductionAudioAssetId',
            'videoAssetName' => 'getVideoAssetName',
            'gender' => 'getGender',
            'reviewConfig' => 'getReviewConfig'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const BUSINESS_CARD_TYPE__2_D_DIGITAL_HUMAN_CARD = '2D_DIGITAL_HUMAN_CARD';
    const INTRODUCTION_TYPE_TEXT = 'TEXT';
    const INTRODUCTION_TYPE_AUDIO = 'AUDIO';
    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBusinessCardTypeAllowableValues()
    {
        return [
            self::BUSINESS_CARD_TYPE__2_D_DIGITAL_HUMAN_CARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIntroductionTypeAllowableValues()
    {
        return [
            self::INTRODUCTION_TYPE_TEXT,
            self::INTRODUCTION_TYPE_AUDIO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['businessCardType'] = isset($data['businessCardType']) ? $data['businessCardType'] : null;
        $this->container['cardTempletAssetId'] = isset($data['cardTempletAssetId']) ? $data['cardTempletAssetId'] : null;
        $this->container['cardTextConfig'] = isset($data['cardTextConfig']) ? $data['cardTextConfig'] : null;
        $this->container['cardImageConfig'] = isset($data['cardImageConfig']) ? $data['cardImageConfig'] : null;
        $this->container['introductionType'] = isset($data['introductionType']) ? $data['introductionType'] : null;
        $this->container['introductionText'] = isset($data['introductionText']) ? $data['introductionText'] : null;
        $this->container['voiceAssetId'] = isset($data['voiceAssetId']) ? $data['voiceAssetId'] : null;
        $this->container['introductionAudioAssetId'] = isset($data['introductionAudioAssetId']) ? $data['introductionAudioAssetId'] : null;
        $this->container['videoAssetName'] = isset($data['videoAssetName']) ? $data['videoAssetName'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['businessCardType'] === null) {
            $invalidProperties[] = "'businessCardType' can't be null";
        }
            $allowedValues = $this->getBusinessCardTypeAllowableValues();
                if (!is_null($this->container['businessCardType']) && !in_array($this->container['businessCardType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'businessCardType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['cardTempletAssetId'] === null) {
            $invalidProperties[] = "'cardTempletAssetId' can't be null";
        }
            if ((mb_strlen($this->container['cardTempletAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cardTempletAssetId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['cardTempletAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'cardTempletAssetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['cardTextConfig'] === null) {
            $invalidProperties[] = "'cardTextConfig' can't be null";
        }
        if ($this->container['cardImageConfig'] === null) {
            $invalidProperties[] = "'cardImageConfig' can't be null";
        }
            $allowedValues = $this->getIntroductionTypeAllowableValues();
                if (!is_null($this->container['introductionType']) && !in_array($this->container['introductionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'introductionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['introductionText']) && (mb_strlen($this->container['introductionText']) > 512)) {
                $invalidProperties[] = "invalid value for 'introductionText', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['introductionText']) && (mb_strlen($this->container['introductionText']) < 1)) {
                $invalidProperties[] = "invalid value for 'introductionText', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['voiceAssetId']) && (mb_strlen($this->container['voiceAssetId']) > 256)) {
                $invalidProperties[] = "invalid value for 'voiceAssetId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['voiceAssetId']) && (mb_strlen($this->container['voiceAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'voiceAssetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['introductionAudioAssetId']) && (mb_strlen($this->container['introductionAudioAssetId']) > 256)) {
                $invalidProperties[] = "invalid value for 'introductionAudioAssetId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['introductionAudioAssetId']) && (mb_strlen($this->container['introductionAudioAssetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'introductionAudioAssetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['videoAssetName']) && (mb_strlen($this->container['videoAssetName']) > 256)) {
                $invalidProperties[] = "invalid value for 'videoAssetName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['videoAssetName']) && (mb_strlen($this->container['videoAssetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'videoAssetName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getGenderAllowableValues();
                if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets businessCardType
    *  数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片。
    *
    * @return string
    */
    public function getBusinessCardType()
    {
        return $this->container['businessCardType'];
    }

    /**
    * Sets businessCardType
    *
    * @param string $businessCardType 数字人名片类型。 * 2D_DIGITAL_HUMAN_CARD：分身数字人名片。
    *
    * @return $this
    */
    public function setBusinessCardType($businessCardType)
    {
        $this->container['businessCardType'] = $businessCardType;
        return $this;
    }

    /**
    * Gets cardTempletAssetId
    *  数字人名片模板资产ID。
    *
    * @return string
    */
    public function getCardTempletAssetId()
    {
        return $this->container['cardTempletAssetId'];
    }

    /**
    * Sets cardTempletAssetId
    *
    * @param string $cardTempletAssetId 数字人名片模板资产ID。
    *
    * @return $this
    */
    public function setCardTempletAssetId($cardTempletAssetId)
    {
        $this->container['cardTempletAssetId'] = $cardTempletAssetId;
        return $this;
    }

    /**
    * Gets cardTextConfig
    *  cardTextConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\BusinessCardTextConfig
    */
    public function getCardTextConfig()
    {
        return $this->container['cardTextConfig'];
    }

    /**
    * Sets cardTextConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\BusinessCardTextConfig $cardTextConfig cardTextConfig
    *
    * @return $this
    */
    public function setCardTextConfig($cardTextConfig)
    {
        $this->container['cardTextConfig'] = $cardTextConfig;
        return $this;
    }

    /**
    * Gets cardImageConfig
    *  cardImageConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\BusinessCardImageConfig
    */
    public function getCardImageConfig()
    {
        return $this->container['cardImageConfig'];
    }

    /**
    * Sets cardImageConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\BusinessCardImageConfig $cardImageConfig cardImageConfig
    *
    * @return $this
    */
    public function setCardImageConfig($cardImageConfig)
    {
        $this->container['cardImageConfig'] = $cardImageConfig;
        return $this;
    }

    /**
    * Gets introductionType
    *  自我介绍驱动方式。 * TEXT: 文本驱动，即通过TTS合成语音。文本驱动需要填写introduction_text和voice_asset_id参数。 * AUDIO: 语音驱动，需要在资产库中先上传语音资产。语音驱动需要填写introduction_audio_asset_id参数。
    *
    * @return string|null
    */
    public function getIntroductionType()
    {
        return $this->container['introductionType'];
    }

    /**
    * Sets introductionType
    *
    * @param string|null $introductionType 自我介绍驱动方式。 * TEXT: 文本驱动，即通过TTS合成语音。文本驱动需要填写introduction_text和voice_asset_id参数。 * AUDIO: 语音驱动，需要在资产库中先上传语音资产。语音驱动需要填写introduction_audio_asset_id参数。
    *
    * @return $this
    */
    public function setIntroductionType($introductionType)
    {
        $this->container['introductionType'] = $introductionType;
        return $this;
    }

    /**
    * Gets introductionText
    *  自我介绍文本，用于驱动数字人口型。
    *
    * @return string|null
    */
    public function getIntroductionText()
    {
        return $this->container['introductionText'];
    }

    /**
    * Sets introductionText
    *
    * @param string|null $introductionText 自我介绍文本，用于驱动数字人口型。
    *
    * @return $this
    */
    public function setIntroductionText($introductionText)
    {
        $this->container['introductionText'] = $introductionText;
        return $this;
    }

    /**
    * Gets voiceAssetId
    *  音色资产ID。
    *
    * @return string|null
    */
    public function getVoiceAssetId()
    {
        return $this->container['voiceAssetId'];
    }

    /**
    * Sets voiceAssetId
    *
    * @param string|null $voiceAssetId 音色资产ID。
    *
    * @return $this
    */
    public function setVoiceAssetId($voiceAssetId)
    {
        $this->container['voiceAssetId'] = $voiceAssetId;
        return $this;
    }

    /**
    * Gets introductionAudioAssetId
    *  自我介绍语音资产ID，用于驱动数字人口型。 > * 介绍语音需要作为asset_type=AUDIO资产先上传至资产库。
    *
    * @return string|null
    */
    public function getIntroductionAudioAssetId()
    {
        return $this->container['introductionAudioAssetId'];
    }

    /**
    * Sets introductionAudioAssetId
    *
    * @param string|null $introductionAudioAssetId 自我介绍语音资产ID，用于驱动数字人口型。 > * 介绍语音需要作为asset_type=AUDIO资产先上传至资产库。
    *
    * @return $this
    */
    public function setIntroductionAudioAssetId($introductionAudioAssetId)
    {
        $this->container['introductionAudioAssetId'] = $introductionAudioAssetId;
        return $this;
    }

    /**
    * Gets videoAssetName
    *  输出名片视频资产名称。默认取card_name的值
    *
    * @return string|null
    */
    public function getVideoAssetName()
    {
        return $this->container['videoAssetName'];
    }

    /**
    * Sets videoAssetName
    *
    * @param string|null $videoAssetName 输出名片视频资产名称。默认取card_name的值
    *
    * @return $this
    */
    public function setVideoAssetName($videoAssetName)
    {
        $this->container['videoAssetName'] = $videoAssetName;
        return $this;
    }

    /**
    * Gets gender
    *  性别。 * MALE：男性 * FEMALE：女性
    *
    * @return string|null
    */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
    * Sets gender
    *
    * @param string|null $gender 性别。 * MALE：男性 * FEMALE：女性
    *
    * @return $this
    */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;
        return $this;
    }

    /**
    * Gets reviewConfig
    *  reviewConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null
    */
    public function getReviewConfig()
    {
        return $this->container['reviewConfig'];
    }

    /**
    * Sets reviewConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null $reviewConfig reviewConfig
    *
    * @return $this
    */
    public function setReviewConfig($reviewConfig)
    {
        $this->container['reviewConfig'] = $reviewConfig;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

