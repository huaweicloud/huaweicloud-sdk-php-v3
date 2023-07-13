<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codec  音频编码格式
    * sample  音频采样率
    * channels  音频信道
    * bitrate  音频码率，单位: kbit/s
    * bitrateBps  音频码率，单位: bit/s
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codec' => 'string',
            'sample' => 'int',
            'channels' => 'int',
            'bitrate' => 'int',
            'bitrateBps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codec  音频编码格式
    * sample  音频采样率
    * channels  音频信道
    * bitrate  音频码率，单位: kbit/s
    * bitrateBps  音频码率，单位: bit/s
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codec' => null,
        'sample' => null,
        'channels' => null,
        'bitrate' => null,
        'bitrateBps' => 'int64'
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
    * codec  音频编码格式
    * sample  音频采样率
    * channels  音频信道
    * bitrate  音频码率，单位: kbit/s
    * bitrateBps  音频码率，单位: bit/s
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codec' => 'codec',
            'sample' => 'sample',
            'channels' => 'channels',
            'bitrate' => 'bitrate',
            'bitrateBps' => 'bitrate_bps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codec  音频编码格式
    * sample  音频采样率
    * channels  音频信道
    * bitrate  音频码率，单位: kbit/s
    * bitrateBps  音频码率，单位: bit/s
    *
    * @var string[]
    */
    protected static $setters = [
            'codec' => 'setCodec',
            'sample' => 'setSample',
            'channels' => 'setChannels',
            'bitrate' => 'setBitrate',
            'bitrateBps' => 'setBitrateBps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codec  音频编码格式
    * sample  音频采样率
    * channels  音频信道
    * bitrate  音频码率，单位: kbit/s
    * bitrateBps  音频码率，单位: bit/s
    *
    * @var string[]
    */
    protected static $getters = [
            'codec' => 'getCodec',
            'sample' => 'getSample',
            'channels' => 'getChannels',
            'bitrate' => 'getBitrate',
            'bitrateBps' => 'getBitrateBps'
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
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['sample'] = isset($data['sample']) ? $data['sample'] : null;
        $this->container['channels'] = isset($data['channels']) ? $data['channels'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['bitrateBps'] = isset($data['bitrateBps']) ? $data['bitrateBps'] : null;
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
            if (!is_null($this->container['sample']) && ($this->container['sample'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sample', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sample']) && ($this->container['sample'] < 0)) {
                $invalidProperties[] = "invalid value for 'sample', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['channels']) && ($this->container['channels'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'channels', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['channels']) && ($this->container['channels'] < 0)) {
                $invalidProperties[] = "invalid value for 'channels', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bitrateBps']) && ($this->container['bitrateBps'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'bitrateBps', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['bitrateBps']) && ($this->container['bitrateBps'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrateBps', must be bigger than or equal to 0.";
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
    *  音频编码格式
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
    * @param string|null $codec 音频编码格式
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets sample
    *  音频采样率
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
    * @param int|null $sample 音频采样率
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
    *  音频信道
    *
    * @return int|null
    */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
    * Sets channels
    *
    * @param int|null $channels 音频信道
    *
    * @return $this
    */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;
        return $this;
    }

    /**
    * Gets bitrate
    *  音频码率，单位: kbit/s
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
    * @param int|null $bitrate 音频码率，单位: kbit/s
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets bitrateBps
    *  音频码率，单位: bit/s
    *
    * @return int|null
    */
    public function getBitrateBps()
    {
        return $this->container['bitrateBps'];
    }

    /**
    * Sets bitrateBps
    *
    * @param int|null $bitrateBps 音频码率，单位: bit/s
    *
    * @return $this
    */
    public function setBitrateBps($bitrateBps)
    {
        $this->container['bitrateBps'] = $bitrateBps;
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

