<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  RTMP推流地址
    * bitrate  码率。  单位：bps。取值范围：(0,104,857,600]（100Mbps）
    * width  分辨率对应宽的值。取值范围：0 - 4096（4K）
    * height  分辨率对应高的值。取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'bitrate' => 'int',
            'width' => 'int',
            'height' => 'int',
            'enableSnapshot' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  RTMP推流地址
    * bitrate  码率。  单位：bps。取值范围：(0,104,857,600]（100Mbps）
    * width  分辨率对应宽的值。取值范围：0 - 4096（4K）
    * height  分辨率对应高的值。取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'bitrate' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'enableSnapshot' => null
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
    * url  RTMP推流地址
    * bitrate  码率。  单位：bps。取值范围：(0,104,857,600]（100Mbps）
    * width  分辨率对应宽的值。取值范围：0 - 4096（4K）
    * height  分辨率对应高的值。取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'bitrate' => 'bitrate',
            'width' => 'width',
            'height' => 'height',
            'enableSnapshot' => 'enable_snapshot'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  RTMP推流地址
    * bitrate  码率。  单位：bps。取值范围：(0,104,857,600]（100Mbps）
    * width  分辨率对应宽的值。取值范围：0 - 4096（4K）
    * height  分辨率对应高的值。取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'bitrate' => 'setBitrate',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'enableSnapshot' => 'setEnableSnapshot'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  RTMP推流地址
    * bitrate  码率。  单位：bps。取值范围：(0,104,857,600]（100Mbps）
    * width  分辨率对应宽的值。取值范围：0 - 4096（4K）
    * height  分辨率对应高的值。取值范围：0 - 2160（4K）
    * enableSnapshot  描述是否使用该流做截图
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'bitrate' => 'getBitrate',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'enableSnapshot' => 'getEnableSnapshot'
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['enableSnapshot'] = isset($data['enableSnapshot']) ? $data['enableSnapshot'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 1024)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 104857600)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 104857600.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 4096)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2160)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2160.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
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
    * Gets url
    *  RTMP推流地址
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url RTMP推流地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets bitrate
    *  码率。  单位：bps。取值范围：(0,104,857,600]（100Mbps）
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
    * @param int|null $bitrate 码率。  单位：bps。取值范围：(0,104,857,600]（100Mbps）
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets width
    *  分辨率对应宽的值。取值范围：0 - 4096（4K）
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
    * @param int|null $width 分辨率对应宽的值。取值范围：0 - 4096（4K）
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets height
    *  分辨率对应高的值。取值范围：0 - 2160（4K）
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
    * @param int|null $height 分辨率对应高的值。取值范围：0 - 2160（4K）
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets enableSnapshot
    *  描述是否使用该流做截图
    *
    * @return bool|null
    */
    public function getEnableSnapshot()
    {
        return $this->container['enableSnapshot'];
    }

    /**
    * Sets enableSnapshot
    *
    * @param bool|null $enableSnapshot 描述是否使用该流做截图
    *
    * @return $this
    */
    public function setEnableSnapshot($enableSnapshot)
    {
        $this->container['enableSnapshot'] = $enableSnapshot;
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

