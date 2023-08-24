<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VoiceModelAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VoiceModelAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文  默认UNKNOW。
    * ttsMode  自研TTS运行模式，包括CPU模式和GPU模式。此参数仅内部使用，不对外开放。 * UNKNOW：未知 * TTS_V1：V1版本TTS，运行在CPU上 * TTS_V2：V2版本TTS，运行在GPU上  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'modelType' => 'string',
            'sex' => 'string',
            'language' => 'string',
            'ttsMode' => 'string',
            'externalVoiceMeta' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\ExternalVoiceAssetMeta'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文  默认UNKNOW。
    * ttsMode  自研TTS运行模式，包括CPU模式和GPU模式。此参数仅内部使用，不对外开放。 * UNKNOW：未知 * TTS_V1：V1版本TTS，运行在CPU上 * TTS_V2：V2版本TTS，运行在GPU上  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'modelType' => null,
        'sex' => null,
        'language' => null,
        'ttsMode' => null,
        'externalVoiceMeta' => null
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
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文  默认UNKNOW。
    * ttsMode  自研TTS运行模式，包括CPU模式和GPU模式。此参数仅内部使用，不对外开放。 * UNKNOW：未知 * TTS_V1：V1版本TTS，运行在CPU上 * TTS_V2：V2版本TTS，运行在GPU上  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'modelType' => 'model_type',
            'sex' => 'sex',
            'language' => 'language',
            'ttsMode' => 'tts_mode',
            'externalVoiceMeta' => 'external_voice_meta'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文  默认UNKNOW。
    * ttsMode  自研TTS运行模式，包括CPU模式和GPU模式。此参数仅内部使用，不对外开放。 * UNKNOW：未知 * TTS_V1：V1版本TTS，运行在CPU上 * TTS_V2：V2版本TTS，运行在GPU上  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    *
    * @var string[]
    */
    protected static $setters = [
            'modelType' => 'setModelType',
            'sex' => 'setSex',
            'language' => 'setLanguage',
            'ttsMode' => 'setTtsMode',
            'externalVoiceMeta' => 'setExternalVoiceMeta'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * modelType  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    * sex  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    * language  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文  默认UNKNOW。
    * ttsMode  自研TTS运行模式，包括CPU模式和GPU模式。此参数仅内部使用，不对外开放。 * UNKNOW：未知 * TTS_V1：V1版本TTS，运行在CPU上 * TTS_V2：V2版本TTS，运行在GPU上  默认UNKNOW。
    * externalVoiceMeta  externalVoiceMeta
    *
    * @var string[]
    */
    protected static $getters = [
            'modelType' => 'getModelType',
            'sex' => 'getSex',
            'language' => 'getLanguage',
            'ttsMode' => 'getTtsMode',
            'externalVoiceMeta' => 'getExternalVoiceMeta'
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
    const MODEL_TYPE_COMMON = 'COMMON';
    const MODEL_TYPE__CLONE = 'CLONE';
    const SEX_UNKNOW = 'UNKNOW';
    const SEX_MALE = 'MALE';
    const SEX_FEMALE = 'FEMALE';
    const LANGUAGE_UNKNOW = 'UNKNOW';
    const LANGUAGE_CN = 'CN';
    const LANGUAGE_EN = 'EN';
    const TTS_MODE_UNKNOW = 'UNKNOW';
    const TTS_MODE_TTS_V1 = 'TTS_V1';
    const TTS_MODE_TTS_V2 = 'TTS_V2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelTypeAllowableValues()
    {
        return [
            self::MODEL_TYPE_COMMON,
            self::MODEL_TYPE__CLONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSexAllowableValues()
    {
        return [
            self::SEX_UNKNOW,
            self::SEX_MALE,
            self::SEX_FEMALE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_UNKNOW,
            self::LANGUAGE_CN,
            self::LANGUAGE_EN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTtsModeAllowableValues()
    {
        return [
            self::TTS_MODE_UNKNOW,
            self::TTS_MODE_TTS_V1,
            self::TTS_MODE_TTS_V2,
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
        $this->container['modelType'] = isset($data['modelType']) ? $data['modelType'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['ttsMode'] = isset($data['ttsMode']) ? $data['ttsMode'] : null;
        $this->container['externalVoiceMeta'] = isset($data['externalVoiceMeta']) ? $data['externalVoiceMeta'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModelTypeAllowableValues();
                if (!is_null($this->container['modelType']) && !in_array($this->container['modelType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['modelType']) && (mb_strlen($this->container['modelType']) > 32)) {
                $invalidProperties[] = "invalid value for 'modelType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['modelType']) && (mb_strlen($this->container['modelType']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSexAllowableValues();
                if (!is_null($this->container['sex']) && !in_array($this->container['sex'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sex', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) > 16)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['sex']) && (mb_strlen($this->container['sex']) < 1)) {
                $invalidProperties[] = "invalid value for 'sex', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 16)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTtsModeAllowableValues();
                if (!is_null($this->container['ttsMode']) && !in_array($this->container['ttsMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ttsMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ttsMode']) && (mb_strlen($this->container['ttsMode']) > 16)) {
                $invalidProperties[] = "invalid value for 'ttsMode', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['ttsMode']) && (mb_strlen($this->container['ttsMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'ttsMode', the character length must be bigger than or equal to 1.";
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
    * Gets modelType
    *  音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    *
    * @return string|null
    */
    public function getModelType()
    {
        return $this->container['modelType'];
    }

    /**
    * Sets modelType
    *
    * @param string|null $modelType 音色资产类型。 * COMMON：通用情感模型 * CLONE：语音克隆模型
    *
    * @return $this
    */
    public function setModelType($modelType)
    {
        $this->container['modelType'] = $modelType;
        return $this;
    }

    /**
    * Gets sex
    *  音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 音色性别。 * UNKNOW：中性音色 * MALE：男性音色 * FEMALE：女性音色  默认UNKNOW。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets language
    *  音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文  默认UNKNOW。
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 音色语言。 * UNKNOW：未知 * CN：中文 * EN：英文  默认UNKNOW。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets ttsMode
    *  自研TTS运行模式，包括CPU模式和GPU模式。此参数仅内部使用，不对外开放。 * UNKNOW：未知 * TTS_V1：V1版本TTS，运行在CPU上 * TTS_V2：V2版本TTS，运行在GPU上  默认UNKNOW。
    *
    * @return string|null
    */
    public function getTtsMode()
    {
        return $this->container['ttsMode'];
    }

    /**
    * Sets ttsMode
    *
    * @param string|null $ttsMode 自研TTS运行模式，包括CPU模式和GPU模式。此参数仅内部使用，不对外开放。 * UNKNOW：未知 * TTS_V1：V1版本TTS，运行在CPU上 * TTS_V2：V2版本TTS，运行在GPU上  默认UNKNOW。
    *
    * @return $this
    */
    public function setTtsMode($ttsMode)
    {
        $this->container['ttsMode'] = $ttsMode;
        return $this;
    }

    /**
    * Gets externalVoiceMeta
    *  externalVoiceMeta
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\ExternalVoiceAssetMeta|null
    */
    public function getExternalVoiceMeta()
    {
        return $this->container['externalVoiceMeta'];
    }

    /**
    * Sets externalVoiceMeta
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\ExternalVoiceAssetMeta|null $externalVoiceMeta externalVoiceMeta
    *
    * @return $this
    */
    public function setExternalVoiceMeta($externalVoiceMeta)
    {
        $this->container['externalVoiceMeta'] = $externalVoiceMeta;
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

