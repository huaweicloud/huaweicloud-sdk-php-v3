<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunModerationAudioRequestBodyConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunModerationAudioRequestBody_config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * format  支持的语音格式。 枚举值： - pcm16k16bit - pcm8k16bit - ulaw16k8bit - ulaw8k8bit - alaw16k8bit - alaw8k8bit - mp3 - aac - wav - amr - amrwb
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串：   chinese_8k_common   chinese_16k_common
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'format' => 'string',
            'property' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * format  支持的语音格式。 枚举值： - pcm16k16bit - pcm8k16bit - ulaw16k8bit - ulaw8k8bit - alaw16k8bit - alaw8k8bit - mp3 - aac - wav - amr - amrwb
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串：   chinese_8k_common   chinese_16k_common
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'format' => null,
        'property' => null
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
    * format  支持的语音格式。 枚举值： - pcm16k16bit - pcm8k16bit - ulaw16k8bit - ulaw8k8bit - alaw16k8bit - alaw8k8bit - mp3 - aac - wav - amr - amrwb
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串：   chinese_8k_common   chinese_16k_common
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'format' => 'format',
            'property' => 'property'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * format  支持的语音格式。 枚举值： - pcm16k16bit - pcm8k16bit - ulaw16k8bit - ulaw8k8bit - alaw16k8bit - alaw8k8bit - mp3 - aac - wav - amr - amrwb
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串：   chinese_8k_common   chinese_16k_common
    *
    * @var string[]
    */
    protected static $setters = [
            'format' => 'setFormat',
            'property' => 'setProperty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * format  支持的语音格式。 枚举值： - pcm16k16bit - pcm8k16bit - ulaw16k8bit - ulaw8k8bit - alaw16k8bit - alaw8k8bit - mp3 - aac - wav - amr - amrwb
    * property  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串：   chinese_8k_common   chinese_16k_common
    *
    * @var string[]
    */
    protected static $getters = [
            'format' => 'getFormat',
            'property' => 'getProperty'
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
    const FORMAT_PCM16K16BIT = 'pcm16k16bit';
    const FORMAT_PCM8K16BIT = 'pcm8k16bit';
    const FORMAT_ULAW16K8BIT = 'ulaw16k8bit';
    const FORMAT_ULAW8K8BIT = 'ulaw8k8bit';
    const FORMAT_ALAW16K8BIT = 'alaw16k8bit';
    const FORMAT_ALAW8K8BIT = 'alaw8k8bit';
    const FORMAT_MP3 = 'mp3';
    const FORMAT_AAC = 'aac';
    const FORMAT_WAV = 'wav';
    const FORMAT_AMR = 'amr';
    const FORMAT_AMRWB = 'amrwb';
    const PROPERTY_CHINESE_8K_COMMON = 'chinese_8k_common';
    const PROPERTY_CHINESE_16K_COMMON = 'chinese_16k_common';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_PCM16K16BIT,
            self::FORMAT_PCM8K16BIT,
            self::FORMAT_ULAW16K8BIT,
            self::FORMAT_ULAW8K8BIT,
            self::FORMAT_ALAW16K8BIT,
            self::FORMAT_ALAW8K8BIT,
            self::FORMAT_MP3,
            self::FORMAT_AAC,
            self::FORMAT_WAV,
            self::FORMAT_AMR,
            self::FORMAT_AMRWB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPropertyAllowableValues()
    {
        return [
            self::PROPERTY_CHINESE_8K_COMMON,
            self::PROPERTY_CHINESE_16K_COMMON,
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets format
    *  支持的语音格式。 枚举值： - pcm16k16bit - pcm8k16bit - ulaw16k8bit - ulaw8k8bit - alaw16k8bit - alaw8k8bit - mp3 - aac - wav - amr - amrwb
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 支持的语音格式。 枚举值： - pcm16k16bit - pcm8k16bit - ulaw16k8bit - ulaw8k8bit - alaw16k8bit - alaw8k8bit - mp3 - aac - wav - amr - amrwb
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets property
    *  所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串：   chinese_8k_common   chinese_16k_common
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
    * @param string $property 所使用的模型特征串。通常是 “语种_采样率_领域”的形式。 采样率需要与音频采样率保持一致。 当前支持如下模型特征串：   chinese_8k_common   chinese_16k_common
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
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

