<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetaAudioInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetaAudioInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * codec  音频编码格式
    * samplingRate  音频采样率
    * bitrate  音频码率，单位：bit/s
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'codec' => 'string',
            'samplingRate' => 'int',
            'bitrate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * codec  音频编码格式
    * samplingRate  音频采样率
    * bitrate  音频码率，单位：bit/s
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'codec' => null,
        'samplingRate' => null,
        'bitrate' => 'int64'
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
    * samplingRate  音频采样率
    * bitrate  音频码率，单位：bit/s
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'codec' => 'codec',
            'samplingRate' => 'sampling_rate',
            'bitrate' => 'bitrate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * codec  音频编码格式
    * samplingRate  音频采样率
    * bitrate  音频码率，单位：bit/s
    *
    * @var string[]
    */
    protected static $setters = [
            'codec' => 'setCodec',
            'samplingRate' => 'setSamplingRate',
            'bitrate' => 'setBitrate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * codec  音频编码格式
    * samplingRate  音频采样率
    * bitrate  音频码率，单位：bit/s
    *
    * @var string[]
    */
    protected static $getters = [
            'codec' => 'getCodec',
            'samplingRate' => 'getSamplingRate',
            'bitrate' => 'getBitrate'
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
        $this->container['samplingRate'] = isset($data['samplingRate']) ? $data['samplingRate'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets samplingRate
    *  音频采样率
    *
    * @return int|null
    */
    public function getSamplingRate()
    {
        return $this->container['samplingRate'];
    }

    /**
    * Sets samplingRate
    *
    * @param int|null $samplingRate 音频采样率
    *
    * @return $this
    */
    public function setSamplingRate($samplingRate)
    {
        $this->container['samplingRate'] = $samplingRate;
        return $this;
    }

    /**
    * Gets bitrate
    *  音频码率，单位：bit/s
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
    * @param int|null $bitrate 音频码率，单位：bit/s
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
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

