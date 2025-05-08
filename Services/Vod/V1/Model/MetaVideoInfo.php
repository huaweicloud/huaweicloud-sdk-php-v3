<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetaVideoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetaVideoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bitrate  视频码率，单位：bit/s
    * codec  视频编码格式
    * fps  帧率
    * height  视频高度
    * width  视频宽度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bitrate' => 'int',
            'codec' => 'string',
            'fps' => 'int',
            'height' => 'int',
            'width' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bitrate  视频码率，单位：bit/s
    * codec  视频编码格式
    * fps  帧率
    * height  视频高度
    * width  视频宽度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bitrate' => 'int64',
        'codec' => null,
        'fps' => null,
        'height' => null,
        'width' => null
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
    * bitrate  视频码率，单位：bit/s
    * codec  视频编码格式
    * fps  帧率
    * height  视频高度
    * width  视频宽度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bitrate' => 'bitrate',
            'codec' => 'codec',
            'fps' => 'fps',
            'height' => 'height',
            'width' => 'width'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bitrate  视频码率，单位：bit/s
    * codec  视频编码格式
    * fps  帧率
    * height  视频高度
    * width  视频宽度
    *
    * @var string[]
    */
    protected static $setters = [
            'bitrate' => 'setBitrate',
            'codec' => 'setCodec',
            'fps' => 'setFps',
            'height' => 'setHeight',
            'width' => 'setWidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bitrate  视频码率，单位：bit/s
    * codec  视频编码格式
    * fps  帧率
    * height  视频高度
    * width  视频宽度
    *
    * @var string[]
    */
    protected static $getters = [
            'bitrate' => 'getBitrate',
            'codec' => 'getCodec',
            'fps' => 'getFps',
            'height' => 'getHeight',
            'width' => 'getWidth'
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
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['fps'] = isset($data['fps']) ? $data['fps'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
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
    * Gets bitrate
    *  视频码率，单位：bit/s
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
    * @param int|null $bitrate 视频码率，单位：bit/s
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets codec
    *  视频编码格式
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
    * @param string|null $codec 视频编码格式
    *
    * @return $this
    */
    public function setCodec($codec)
    {
        $this->container['codec'] = $codec;
        return $this;
    }

    /**
    * Gets fps
    *  帧率
    *
    * @return int|null
    */
    public function getFps()
    {
        return $this->container['fps'];
    }

    /**
    * Sets fps
    *
    * @param int|null $fps 帧率
    *
    * @return $this
    */
    public function setFps($fps)
    {
        $this->container['fps'] = $fps;
        return $this;
    }

    /**
    * Gets height
    *  视频高度
    *
    * @return int|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int|null $height 视频高度
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets width
    *  视频宽度
    *
    * @return int|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int|null $width 视频宽度
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
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

