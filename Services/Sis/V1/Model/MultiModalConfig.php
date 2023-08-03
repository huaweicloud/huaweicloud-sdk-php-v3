<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiModalConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiModalConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoFormat  视频的封装格式。不填写此字段，则默认为auto。注意不论何种格式，均要求帧率在25fps以上，清晰度在240*240以上。   auto  自动判断，系统会自动判断视频封装格式。  avi  avi封装格式。  mp4  mp4封装格式。  webm  webm封装格式。  mkv  mkv封装格式。  flv  flv封装格式。
    * language  评测语言和口音。  en_gb 英语-英式口音。
    * mode  评测模式。  word 单词模式。  sentence 句子模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoFormat' => 'string',
            'language' => 'string',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoFormat  视频的封装格式。不填写此字段，则默认为auto。注意不论何种格式，均要求帧率在25fps以上，清晰度在240*240以上。   auto  自动判断，系统会自动判断视频封装格式。  avi  avi封装格式。  mp4  mp4封装格式。  webm  webm封装格式。  mkv  mkv封装格式。  flv  flv封装格式。
    * language  评测语言和口音。  en_gb 英语-英式口音。
    * mode  评测模式。  word 单词模式。  sentence 句子模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoFormat' => null,
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
    * videoFormat  视频的封装格式。不填写此字段，则默认为auto。注意不论何种格式，均要求帧率在25fps以上，清晰度在240*240以上。   auto  自动判断，系统会自动判断视频封装格式。  avi  avi封装格式。  mp4  mp4封装格式。  webm  webm封装格式。  mkv  mkv封装格式。  flv  flv封装格式。
    * language  评测语言和口音。  en_gb 英语-英式口音。
    * mode  评测模式。  word 单词模式。  sentence 句子模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoFormat' => 'video_format',
            'language' => 'language',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoFormat  视频的封装格式。不填写此字段，则默认为auto。注意不论何种格式，均要求帧率在25fps以上，清晰度在240*240以上。   auto  自动判断，系统会自动判断视频封装格式。  avi  avi封装格式。  mp4  mp4封装格式。  webm  webm封装格式。  mkv  mkv封装格式。  flv  flv封装格式。
    * language  评测语言和口音。  en_gb 英语-英式口音。
    * mode  评测模式。  word 单词模式。  sentence 句子模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'videoFormat' => 'setVideoFormat',
            'language' => 'setLanguage',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoFormat  视频的封装格式。不填写此字段，则默认为auto。注意不论何种格式，均要求帧率在25fps以上，清晰度在240*240以上。   auto  自动判断，系统会自动判断视频封装格式。  avi  avi封装格式。  mp4  mp4封装格式。  webm  webm封装格式。  mkv  mkv封装格式。  flv  flv封装格式。
    * language  评测语言和口音。  en_gb 英语-英式口音。
    * mode  评测模式。  word 单词模式。  sentence 句子模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'videoFormat' => 'getVideoFormat',
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
    const VIDEO_FORMAT_AUTO = 'auto';
    const VIDEO_FORMAT_AVI = 'avi';
    const VIDEO_FORMAT_MP4 = 'mp4';
    const VIDEO_FORMAT_WEBM = 'webm';
    const VIDEO_FORMAT_MKV = 'mkv';
    const VIDEO_FORMAT_FLV = 'flv';
    const LANGUAGE_EN_GB = 'en_gb';
    const MODE_WORD = 'word';
    const MODE_SENTENCE = 'sentence';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoFormatAllowableValues()
    {
        return [
            self::VIDEO_FORMAT_AUTO,
            self::VIDEO_FORMAT_AVI,
            self::VIDEO_FORMAT_MP4,
            self::VIDEO_FORMAT_WEBM,
            self::VIDEO_FORMAT_MKV,
            self::VIDEO_FORMAT_FLV,
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
        $this->container['videoFormat'] = isset($data['videoFormat']) ? $data['videoFormat'] : null;
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
            $allowedValues = $this->getVideoFormatAllowableValues();
                if (!is_null($this->container['videoFormat']) && !in_array($this->container['videoFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoFormat', must be one of '%s'",
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
    * Gets videoFormat
    *  视频的封装格式。不填写此字段，则默认为auto。注意不论何种格式，均要求帧率在25fps以上，清晰度在240*240以上。   auto  自动判断，系统会自动判断视频封装格式。  avi  avi封装格式。  mp4  mp4封装格式。  webm  webm封装格式。  mkv  mkv封装格式。  flv  flv封装格式。
    *
    * @return string|null
    */
    public function getVideoFormat()
    {
        return $this->container['videoFormat'];
    }

    /**
    * Sets videoFormat
    *
    * @param string|null $videoFormat 视频的封装格式。不填写此字段，则默认为auto。注意不论何种格式，均要求帧率在25fps以上，清晰度在240*240以上。   auto  自动判断，系统会自动判断视频封装格式。  avi  avi封装格式。  mp4  mp4封装格式。  webm  webm封装格式。  mkv  mkv封装格式。  flv  flv封装格式。
    *
    * @return $this
    */
    public function setVideoFormat($videoFormat)
    {
        $this->container['videoFormat'] = $videoFormat;
        return $this;
    }

    /**
    * Gets language
    *  评测语言和口音。  en_gb 英语-英式口音。
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
    * @param string $language 评测语言和口音。  en_gb 英语-英式口音。
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
    *  评测模式。  word 单词模式。  sentence 句子模式。
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
    * @param string $mode 评测模式。  word 单词模式。  sentence 句子模式。
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

