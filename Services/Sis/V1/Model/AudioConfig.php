<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioFormat  语音的格式。不填写此字段，则默认为auto。注意音频不论何种格式，均要求采样率在16000Hz以上。  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw编码格式）、MP3、M4A、ogg-opus、AMR等格式。推荐使用此取值。  wav  wav格式。  aac  aac格式。  mp3  mp3格式。  amr  amr格式。  m4a  m4a格式。  opus  ogg-opus格式。
    * language  评测语言  en_gb  英语-英式口音。
    * mode  评测模式  word 单词模式  sentence 句子模式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioFormat' => 'string',
            'language' => 'string',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioFormat  语音的格式。不填写此字段，则默认为auto。注意音频不论何种格式，均要求采样率在16000Hz以上。  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw编码格式）、MP3、M4A、ogg-opus、AMR等格式。推荐使用此取值。  wav  wav格式。  aac  aac格式。  mp3  mp3格式。  amr  amr格式。  m4a  m4a格式。  opus  ogg-opus格式。
    * language  评测语言  en_gb  英语-英式口音。
    * mode  评测模式  word 单词模式  sentence 句子模式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioFormat' => null,
        'language' => null,
        'mode' => null
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
    * audioFormat  语音的格式。不填写此字段，则默认为auto。注意音频不论何种格式，均要求采样率在16000Hz以上。  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw编码格式）、MP3、M4A、ogg-opus、AMR等格式。推荐使用此取值。  wav  wav格式。  aac  aac格式。  mp3  mp3格式。  amr  amr格式。  m4a  m4a格式。  opus  ogg-opus格式。
    * language  评测语言  en_gb  英语-英式口音。
    * mode  评测模式  word 单词模式  sentence 句子模式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioFormat' => 'audio_format',
            'language' => 'language',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioFormat  语音的格式。不填写此字段，则默认为auto。注意音频不论何种格式，均要求采样率在16000Hz以上。  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw编码格式）、MP3、M4A、ogg-opus、AMR等格式。推荐使用此取值。  wav  wav格式。  aac  aac格式。  mp3  mp3格式。  amr  amr格式。  m4a  m4a格式。  opus  ogg-opus格式。
    * language  评测语言  en_gb  英语-英式口音。
    * mode  评测模式  word 单词模式  sentence 句子模式
    *
    * @var string[]
    */
    protected static $setters = [
            'audioFormat' => 'setAudioFormat',
            'language' => 'setLanguage',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioFormat  语音的格式。不填写此字段，则默认为auto。注意音频不论何种格式，均要求采样率在16000Hz以上。  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw编码格式）、MP3、M4A、ogg-opus、AMR等格式。推荐使用此取值。  wav  wav格式。  aac  aac格式。  mp3  mp3格式。  amr  amr格式。  m4a  m4a格式。  opus  ogg-opus格式。
    * language  评测语言  en_gb  英语-英式口音。
    * mode  评测模式  word 单词模式  sentence 句子模式
    *
    * @var string[]
    */
    protected static $getters = [
            'audioFormat' => 'getAudioFormat',
            'language' => 'getLanguage',
            'mode' => 'getMode'
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
    const AUDIO_FORMAT_AUTO = 'auto';
    const AUDIO_FORMAT_WAV = 'wav';
    const AUDIO_FORMAT_AAC = 'aac';
    const AUDIO_FORMAT_MP3 = 'mp3';
    const AUDIO_FORMAT_AMR = 'amr';
    const AUDIO_FORMAT_M4A = 'm4a';
    const AUDIO_FORMAT_OPUS = 'opus';
    const LANGUAGE_EN_GB = 'en_gb';
    const MODE_WORD = 'word';
    const MODE_SENTENCE = 'sentence';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioFormatAllowableValues()
    {
        return [
            self::AUDIO_FORMAT_AUTO,
            self::AUDIO_FORMAT_WAV,
            self::AUDIO_FORMAT_AAC,
            self::AUDIO_FORMAT_MP3,
            self::AUDIO_FORMAT_AMR,
            self::AUDIO_FORMAT_M4A,
            self::AUDIO_FORMAT_OPUS,
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
            self::LANGUAGE_EN_GB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_WORD,
            self::MODE_SENTENCE,
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
        $this->container['audioFormat'] = isset($data['audioFormat']) ? $data['audioFormat'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAudioFormatAllowableValues();
                if (!is_null($this->container['audioFormat']) && !in_array($this->container['audioFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
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
    * Gets audioFormat
    *  语音的格式。不填写此字段，则默认为auto。注意音频不论何种格式，均要求采样率在16000Hz以上。  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw编码格式）、MP3、M4A、ogg-opus、AMR等格式。推荐使用此取值。  wav  wav格式。  aac  aac格式。  mp3  mp3格式。  amr  amr格式。  m4a  m4a格式。  opus  ogg-opus格式。
    *
    * @return string|null
    */
    public function getAudioFormat()
    {
        return $this->container['audioFormat'];
    }

    /**
    * Sets audioFormat
    *
    * @param string|null $audioFormat 语音的格式。不填写此字段，则默认为auto。注意音频不论何种格式，均要求采样率在16000Hz以上。  auto  自动判断，系统会自动判断并支持WAV（内部支持pcm/ulaw/alaw编码格式）、MP3、M4A、ogg-opus、AMR等格式。推荐使用此取值。  wav  wav格式。  aac  aac格式。  mp3  mp3格式。  amr  amr格式。  m4a  m4a格式。  opus  ogg-opus格式。
    *
    * @return $this
    */
    public function setAudioFormat($audioFormat)
    {
        $this->container['audioFormat'] = $audioFormat;
        return $this;
    }

    /**
    * Gets language
    *  评测语言  en_gb  英语-英式口音。
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 评测语言  en_gb  英语-英式口音。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets mode
    *  评测模式  word 单词模式  sentence 句子模式
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode 评测模式  word 单词模式  sentence 句子模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

