<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecognizeFlashAsrRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecognizeFlashAsrRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串： chinese_8k_common chinese_16k_conversation
    * audioFormat  音频格式，audio_format取值范围： wav,mp3,m4a,aac,opus
    * addPunc  是否加标点， 可以为 yes, 默认no
    * digitNorm  是否将音频中的数字使用阿拉伯数字的形式呈现，取值为yes，no，默认为yes
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为yes，no，默认no
    * vocabularyId  热词表id
    * obsBucketName  obs桶名
    * obsObjectKey  obs对象key，经过urlencode编码，长度不超过1024个字符
    * firstChannelOnly  表示是否在识别中只识别首个声道的音频数据，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'property' => 'string',
            'audioFormat' => 'string',
            'addPunc' => 'string',
            'digitNorm' => 'string',
            'needWordInfo' => 'string',
            'vocabularyId' => 'string',
            'obsBucketName' => 'string',
            'obsObjectKey' => 'string',
            'firstChannelOnly' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串： chinese_8k_common chinese_16k_conversation
    * audioFormat  音频格式，audio_format取值范围： wav,mp3,m4a,aac,opus
    * addPunc  是否加标点， 可以为 yes, 默认no
    * digitNorm  是否将音频中的数字使用阿拉伯数字的形式呈现，取值为yes，no，默认为yes
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为yes，no，默认no
    * vocabularyId  热词表id
    * obsBucketName  obs桶名
    * obsObjectKey  obs对象key，经过urlencode编码，长度不超过1024个字符
    * firstChannelOnly  表示是否在识别中只识别首个声道的音频数据，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'property' => null,
        'audioFormat' => null,
        'addPunc' => null,
        'digitNorm' => null,
        'needWordInfo' => null,
        'vocabularyId' => null,
        'obsBucketName' => null,
        'obsObjectKey' => null,
        'firstChannelOnly' => null
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
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串： chinese_8k_common chinese_16k_conversation
    * audioFormat  音频格式，audio_format取值范围： wav,mp3,m4a,aac,opus
    * addPunc  是否加标点， 可以为 yes, 默认no
    * digitNorm  是否将音频中的数字使用阿拉伯数字的形式呈现，取值为yes，no，默认为yes
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为yes，no，默认no
    * vocabularyId  热词表id
    * obsBucketName  obs桶名
    * obsObjectKey  obs对象key，经过urlencode编码，长度不超过1024个字符
    * firstChannelOnly  表示是否在识别中只识别首个声道的音频数据，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'property' => 'property',
            'audioFormat' => 'audio_format',
            'addPunc' => 'add_punc',
            'digitNorm' => 'digit_norm',
            'needWordInfo' => 'need_word_info',
            'vocabularyId' => 'vocabulary_id',
            'obsBucketName' => 'obs_bucket_name',
            'obsObjectKey' => 'obs_object_key',
            'firstChannelOnly' => 'first_channel_only'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串： chinese_8k_common chinese_16k_conversation
    * audioFormat  音频格式，audio_format取值范围： wav,mp3,m4a,aac,opus
    * addPunc  是否加标点， 可以为 yes, 默认no
    * digitNorm  是否将音频中的数字使用阿拉伯数字的形式呈现，取值为yes，no，默认为yes
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为yes，no，默认no
    * vocabularyId  热词表id
    * obsBucketName  obs桶名
    * obsObjectKey  obs对象key，经过urlencode编码，长度不超过1024个字符
    * firstChannelOnly  表示是否在识别中只识别首个声道的音频数据，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $setters = [
            'property' => 'setProperty',
            'audioFormat' => 'setAudioFormat',
            'addPunc' => 'setAddPunc',
            'digitNorm' => 'setDigitNorm',
            'needWordInfo' => 'setNeedWordInfo',
            'vocabularyId' => 'setVocabularyId',
            'obsBucketName' => 'setObsBucketName',
            'obsObjectKey' => 'setObsObjectKey',
            'firstChannelOnly' => 'setFirstChannelOnly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串： chinese_8k_common chinese_16k_conversation
    * audioFormat  音频格式，audio_format取值范围： wav,mp3,m4a,aac,opus
    * addPunc  是否加标点， 可以为 yes, 默认no
    * digitNorm  是否将音频中的数字使用阿拉伯数字的形式呈现，取值为yes，no，默认为yes
    * needWordInfo  表示是否在识别结果中输出分词结果信息，取值为yes，no，默认no
    * vocabularyId  热词表id
    * obsBucketName  obs桶名
    * obsObjectKey  obs对象key，经过urlencode编码，长度不超过1024个字符
    * firstChannelOnly  表示是否在识别中只识别首个声道的音频数据，取值为“yes”和“no”，默认为“no”。
    *
    * @var string[]
    */
    protected static $getters = [
            'property' => 'getProperty',
            'audioFormat' => 'getAudioFormat',
            'addPunc' => 'getAddPunc',
            'digitNorm' => 'getDigitNorm',
            'needWordInfo' => 'getNeedWordInfo',
            'vocabularyId' => 'getVocabularyId',
            'obsBucketName' => 'getObsBucketName',
            'obsObjectKey' => 'getObsObjectKey',
            'firstChannelOnly' => 'getFirstChannelOnly'
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
    const PROPERTY_CHINESE_8K_COMMON = 'chinese_8k_common';
    const PROPERTY_CHINESE_16K_CONVERSATION = 'chinese_16k_conversation';
    const AUDIO_FORMAT_WAV = 'wav';
    const AUDIO_FORMAT_MP3 = 'mp3';
    const AUDIO_FORMAT_M4A = 'm4a';
    const AUDIO_FORMAT_AAC = 'aac';
    const AUDIO_FORMAT_OPUS = 'opus';
    const ADD_PUNC_YES = 'yes';
    const ADD_PUNC_NO = 'no';
    const DIGIT_NORM_YES = 'yes';
    const DIGIT_NORM_NO = 'no';
    const NEED_WORD_INFO_YES = 'yes';
    const NEED_WORD_INFO_NO = 'no';
    const FIRST_CHANNEL_ONLY_YES = 'yes';
    const FIRST_CHANNEL_ONLY_NO = 'no';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPropertyAllowableValues()
    {
        return [
            self::PROPERTY_CHINESE_8K_COMMON,
            self::PROPERTY_CHINESE_16K_CONVERSATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioFormatAllowableValues()
    {
        return [
            self::AUDIO_FORMAT_WAV,
            self::AUDIO_FORMAT_MP3,
            self::AUDIO_FORMAT_M4A,
            self::AUDIO_FORMAT_AAC,
            self::AUDIO_FORMAT_OPUS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddPuncAllowableValues()
    {
        return [
            self::ADD_PUNC_YES,
            self::ADD_PUNC_NO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDigitNormAllowableValues()
    {
        return [
            self::DIGIT_NORM_YES,
            self::DIGIT_NORM_NO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNeedWordInfoAllowableValues()
    {
        return [
            self::NEED_WORD_INFO_YES,
            self::NEED_WORD_INFO_NO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFirstChannelOnlyAllowableValues()
    {
        return [
            self::FIRST_CHANNEL_ONLY_YES,
            self::FIRST_CHANNEL_ONLY_NO,
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
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['audioFormat'] = isset($data['audioFormat']) ? $data['audioFormat'] : null;
        $this->container['addPunc'] = isset($data['addPunc']) ? $data['addPunc'] : null;
        $this->container['digitNorm'] = isset($data['digitNorm']) ? $data['digitNorm'] : null;
        $this->container['needWordInfo'] = isset($data['needWordInfo']) ? $data['needWordInfo'] : null;
        $this->container['vocabularyId'] = isset($data['vocabularyId']) ? $data['vocabularyId'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['obsObjectKey'] = isset($data['obsObjectKey']) ? $data['obsObjectKey'] : null;
        $this->container['firstChannelOnly'] = isset($data['firstChannelOnly']) ? $data['firstChannelOnly'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['property'] === null) {
            $invalidProperties[] = "'property' can't be null";
        }
            $allowedValues = $this->getPropertyAllowableValues();
                if (!is_null($this->container['property']) && !in_array($this->container['property'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'property', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['audioFormat'] === null) {
            $invalidProperties[] = "'audioFormat' can't be null";
        }
            $allowedValues = $this->getAudioFormatAllowableValues();
                if (!is_null($this->container['audioFormat']) && !in_array($this->container['audioFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAddPuncAllowableValues();
                if (!is_null($this->container['addPunc']) && !in_array($this->container['addPunc'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addPunc', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDigitNormAllowableValues();
                if (!is_null($this->container['digitNorm']) && !in_array($this->container['digitNorm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'digitNorm', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNeedWordInfoAllowableValues();
                if (!is_null($this->container['needWordInfo']) && !in_array($this->container['needWordInfo'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'needWordInfo', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFirstChannelOnlyAllowableValues();
                if (!is_null($this->container['firstChannelOnly']) && !in_array($this->container['firstChannelOnly'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'firstChannelOnly', must be one of '%s'",
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
    * Gets property
    *  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串： chinese_8k_common chinese_16k_conversation
    *
    * @return string
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string $property 所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串： chinese_8k_common chinese_16k_conversation
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets audioFormat
    *  音频格式，audio_format取值范围： wav,mp3,m4a,aac,opus
    *
    * @return string
    */
    public function getAudioFormat()
    {
        return $this->container['audioFormat'];
    }

    /**
    * Sets audioFormat
    *
    * @param string $audioFormat 音频格式，audio_format取值范围： wav,mp3,m4a,aac,opus
    *
    * @return $this
    */
    public function setAudioFormat($audioFormat)
    {
        $this->container['audioFormat'] = $audioFormat;
        return $this;
    }

    /**
    * Gets addPunc
    *  是否加标点， 可以为 yes, 默认no
    *
    * @return string|null
    */
    public function getAddPunc()
    {
        return $this->container['addPunc'];
    }

    /**
    * Sets addPunc
    *
    * @param string|null $addPunc 是否加标点， 可以为 yes, 默认no
    *
    * @return $this
    */
    public function setAddPunc($addPunc)
    {
        $this->container['addPunc'] = $addPunc;
        return $this;
    }

    /**
    * Gets digitNorm
    *  是否将音频中的数字使用阿拉伯数字的形式呈现，取值为yes，no，默认为yes
    *
    * @return string|null
    */
    public function getDigitNorm()
    {
        return $this->container['digitNorm'];
    }

    /**
    * Sets digitNorm
    *
    * @param string|null $digitNorm 是否将音频中的数字使用阿拉伯数字的形式呈现，取值为yes，no，默认为yes
    *
    * @return $this
    */
    public function setDigitNorm($digitNorm)
    {
        $this->container['digitNorm'] = $digitNorm;
        return $this;
    }

    /**
    * Gets needWordInfo
    *  表示是否在识别结果中输出分词结果信息，取值为yes，no，默认no
    *
    * @return string|null
    */
    public function getNeedWordInfo()
    {
        return $this->container['needWordInfo'];
    }

    /**
    * Sets needWordInfo
    *
    * @param string|null $needWordInfo 表示是否在识别结果中输出分词结果信息，取值为yes，no，默认no
    *
    * @return $this
    */
    public function setNeedWordInfo($needWordInfo)
    {
        $this->container['needWordInfo'] = $needWordInfo;
        return $this;
    }

    /**
    * Gets vocabularyId
    *  热词表id
    *
    * @return string|null
    */
    public function getVocabularyId()
    {
        return $this->container['vocabularyId'];
    }

    /**
    * Sets vocabularyId
    *
    * @param string|null $vocabularyId 热词表id
    *
    * @return $this
    */
    public function setVocabularyId($vocabularyId)
    {
        $this->container['vocabularyId'] = $vocabularyId;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  obs桶名
    *
    * @return string|null
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string|null $obsBucketName obs桶名
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets obsObjectKey
    *  obs对象key，经过urlencode编码，长度不超过1024个字符
    *
    * @return string|null
    */
    public function getObsObjectKey()
    {
        return $this->container['obsObjectKey'];
    }

    /**
    * Sets obsObjectKey
    *
    * @param string|null $obsObjectKey obs对象key，经过urlencode编码，长度不超过1024个字符
    *
    * @return $this
    */
    public function setObsObjectKey($obsObjectKey)
    {
        $this->container['obsObjectKey'] = $obsObjectKey;
        return $this;
    }

    /**
    * Gets firstChannelOnly
    *  表示是否在识别中只识别首个声道的音频数据，取值为“yes”和“no”，默认为“no”。
    *
    * @return string|null
    */
    public function getFirstChannelOnly()
    {
        return $this->container['firstChannelOnly'];
    }

    /**
    * Sets firstChannelOnly
    *
    * @param string|null $firstChannelOnly 表示是否在识别中只识别首个声道的音频数据，取值为“yes”和“no”，默认为“no”。
    *
    * @return $this
    */
    public function setFirstChannelOnly($firstChannelOnly)
    {
        $this->container['firstChannelOnly'] = $firstChannelOnly;
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

