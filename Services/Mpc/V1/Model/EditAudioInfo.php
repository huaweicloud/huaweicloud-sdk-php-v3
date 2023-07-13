<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EditAudioInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EditAudioInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codec  音频编码格式,取值有：[AAC, HEAAC, MP3]。
    * bitrate  视频码率，单位: bit/s
    * sample  采样率, 单位: HZ
    * channels  声道数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codec' => 'string',
            'bitrate' => 'int',
            'sample' => 'int',
            'channels' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codec  音频编码格式,取值有：[AAC, HEAAC, MP3]。
    * bitrate  视频码率，单位: bit/s
    * sample  采样率, 单位: HZ
    * channels  声道数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codec' => null,
        'bitrate' => null,
        'sample' => 'int32',
        'channels' => null
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
    * codec  音频编码格式,取值有：[AAC, HEAAC, MP3]。
    * bitrate  视频码率，单位: bit/s
    * sample  采样率, 单位: HZ
    * channels  声道数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codec' => 'codec',
            'bitrate' => 'bitrate',
            'sample' => 'sample',
            'channels' => 'channels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codec  音频编码格式,取值有：[AAC, HEAAC, MP3]。
    * bitrate  视频码率，单位: bit/s
    * sample  采样率, 单位: HZ
    * channels  声道数。
    *
    * @var string[]
    */
    protected static $setters = [
            'codec' => 'setCodec',
            'bitrate' => 'setBitrate',
            'sample' => 'setSample',
            'channels' => 'setChannels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codec  音频编码格式,取值有：[AAC, HEAAC, MP3]。
    * bitrate  视频码率，单位: bit/s
    * sample  采样率, 单位: HZ
    * channels  声道数。
    *
    * @var string[]
    */
    protected static $getters = [
            'codec' => 'getCodec',
            'bitrate' => 'getBitrate',
            'sample' => 'getSample',
            'channels' => 'getChannels'
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
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : 'AAC';
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : 48000;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : '2';
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['codec']) && (mb_strlen($this->container['codec']) > 64)) {
                $invalidProperties[] = "invalid value for 'codec', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['codec']) && (mb_strlen($this->container['codec']) < 0)) {
                $invalidProperties[] = "invalid value for 'codec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 20000000)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 20000000.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] > 96000)) {
                $invalidProperties[] = "invalid value for 'sample', must be smaller than or equal to 96000.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] < 0)) {
                $invalidProperties[] = "invalid value for 'sample', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['channels']) && (mb_strlen($this->container['channels']) > 64)) {
                $invalidProperties[] = "invalid value for 'channels', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['channels']) && (mb_strlen($this->container['channels']) < 0)) {
                $invalidProperties[] = "invalid value for 'channels', the character length must be bigger than or equal to 0.";
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
    * Gets codec
    *  音频编码格式,取值有：[AAC, HEAAC, MP3]。
    *
    * @return string|null
    */
    public function getCodec()
    {
        return $this->container['codec'];
    }

    /**
    * Sets codec
    *
    * @param string|null $codec 音频编码格式,取值有：[AAC, HEAAC, MP3]。
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets bitrate
    *  视频码率，单位: bit/s
    *
    * @return int|null
    */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
    * Sets bitrate
    *
    * @param int|null $bitrate 视频码率，单位: bit/s
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets sample
    *  采样率, 单位: HZ
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
    * @param int|null $sample 采样率, 单位: HZ
    *
    * @return $this
    */
    public function setSample($sample)
    {
        $this->container['sample'] = $sample;
        return $this;
    }

    /**
    * Gets channels
    *  声道数。
    *
    * @return string|null
    */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
    * Sets channels
    *
    * @param string|null $channels 声道数。
    *
    * @return $this
    */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;
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

