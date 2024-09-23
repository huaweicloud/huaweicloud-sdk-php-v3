<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'duration' => 'int',
            'audioCodec' => 'string',
            'audioBitRate' => 'int',
            'audioChannels' => 'int',
            'sample' => 'int',
            'errorInfo' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'duration' => null,
        'audioCodec' => null,
        'audioBitRate' => null,
        'audioChannels' => 'int32',
        'sample' => null,
        'errorInfo' => null
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
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'duration' => 'duration',
            'audioCodec' => 'audio_codec',
            'audioBitRate' => 'audio_bit_rate',
            'audioChannels' => 'audio_channels',
            'sample' => 'sample',
            'errorInfo' => 'error_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'duration' => 'setDuration',
            'audioCodec' => 'setAudioCodec',
            'audioBitRate' => 'setAudioBitRate',
            'audioChannels' => 'setAudioChannels',
            'sample' => 'setSample',
            'errorInfo' => 'setErrorInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * duration  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioCodec  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    * audioBitRate  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * audioChannels  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * sample  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    * errorInfo  errorInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'duration' => 'getDuration',
            'audioCodec' => 'getAudioCodec',
            'audioBitRate' => 'getAudioBitRate',
            'audioChannels' => 'getAudioChannels',
            'sample' => 'getSample',
            'errorInfo' => 'getErrorInfo'
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['audioCodec'] = isset($data['audioCodec']) ? $data['audioCodec'] : null;
        $this->container['audioBitRate'] = isset($data['audioBitRate']) ? $data['audioBitRate'] : null;
        $this->container['audioChannels'] = isset($data['audioChannels']) ? $data['audioChannels'] : null;
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 86400)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioCodec']) && (mb_strlen($this->container['audioCodec']) > 32)) {
                $invalidProperties[] = "invalid value for 'audioCodec', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['audioCodec']) && (mb_strlen($this->container['audioCodec']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioCodec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioBitRate']) && ($this->container['audioBitRate'] > 16384)) {
                $invalidProperties[] = "invalid value for 'audioBitRate', must be smaller than or equal to 16384.";
            }
            if (!is_null($this->container['audioBitRate']) && ($this->container['audioBitRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioBitRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['audioChannels']) && ($this->container['audioChannels'] > 100)) {
                $invalidProperties[] = "invalid value for 'audioChannels', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['audioChannels']) && ($this->container['audioChannels'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioChannels', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] > 100000)) {
                $invalidProperties[] = "invalid value for 'sample', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] < 0)) {
                $invalidProperties[] = "invalid value for 'sample', must be bigger than or equal to 0.";
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
    * Gets duration
    *  **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释**： 时长,单位秒。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets audioCodec
    *  **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAudioCodec()
    {
        return $this->container['audioCodec'];
    }

    /**
    * Sets audioCodec
    *
    * @param string|null $audioCodec **参数解释**： 音频编码格式。 **约束限制**： 用户无需填写，系统自行提取。 **取值范围**： 字符长度0-32位。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAudioCodec($audioCodec)
    {
        $this->container['audioCodec'] = $audioCodec;
        return $this;
    }

    /**
    * Gets audioBitRate
    *  **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAudioBitRate()
    {
        return $this->container['audioBitRate'];
    }

    /**
    * Sets audioBitRate
    *
    * @param int|null $audioBitRate **参数解释**： 音频平均码率,单位kbps。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAudioBitRate($audioBitRate)
    {
        $this->container['audioBitRate'] = $audioBitRate;
        return $this;
    }

    /**
    * Gets audioChannels
    *  **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAudioChannels()
    {
        return $this->container['audioChannels'];
    }

    /**
    * Sets audioChannels
    *
    * @param int|null $audioChannels **参数解释**： 音频声道数。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAudioChannels($audioChannels)
    {
        $this->container['audioChannels'] = $audioChannels;
        return $this;
    }

    /**
    * Gets sample
    *  **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getSample()
    {
        return $this->container['sample'];
    }

    /**
    * Sets sample
    *
    * @param int|null $sample **参数解释**： 采样率,HZ。 **约束限制**： 用户无需填写，系统自行提取。 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSample($sample)
    {
        $this->container['sample'] = $sample;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ErrorResponse|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
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

