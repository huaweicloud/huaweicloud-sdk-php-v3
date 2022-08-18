<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quality  画质<br/> 4K默认分辨率3840*2160，码率8000kbit/s<br/> 2K默认分辨率2560*1440，码率7000kbit/s<br/> FULL_HD默认分辨率1920*1080，码率3000kbit/s<br/> HD默认分辨率1280*720，码率1000kbit/s<br/> SD默认分辨率854*480，码率600kbit/s<br/> FLUENT默认分辨率480*270，码率300kbit/s<br/>
    * width  视频宽度<br/>
    * height  视频高度<br/>
    * bitrate  码率,单位：kbit/s<br/>
    * frameRate  帧率（默认为0，0代表自适应，单位是帧每秒）<br/>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quality' => 'string',
            'width' => 'int',
            'height' => 'int',
            'bitrate' => 'int',
            'frameRate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quality  画质<br/> 4K默认分辨率3840*2160，码率8000kbit/s<br/> 2K默认分辨率2560*1440，码率7000kbit/s<br/> FULL_HD默认分辨率1920*1080，码率3000kbit/s<br/> HD默认分辨率1280*720，码率1000kbit/s<br/> SD默认分辨率854*480，码率600kbit/s<br/> FLUENT默认分辨率480*270，码率300kbit/s<br/>
    * width  视频宽度<br/>
    * height  视频高度<br/>
    * bitrate  码率,单位：kbit/s<br/>
    * frameRate  帧率（默认为0，0代表自适应，单位是帧每秒）<br/>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quality' => null,
        'width' => null,
        'height' => null,
        'bitrate' => null,
        'frameRate' => null
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
    * quality  画质<br/> 4K默认分辨率3840*2160，码率8000kbit/s<br/> 2K默认分辨率2560*1440，码率7000kbit/s<br/> FULL_HD默认分辨率1920*1080，码率3000kbit/s<br/> HD默认分辨率1280*720，码率1000kbit/s<br/> SD默认分辨率854*480，码率600kbit/s<br/> FLUENT默认分辨率480*270，码率300kbit/s<br/>
    * width  视频宽度<br/>
    * height  视频高度<br/>
    * bitrate  码率,单位：kbit/s<br/>
    * frameRate  帧率（默认为0，0代表自适应，单位是帧每秒）<br/>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quality' => 'quality',
            'width' => 'width',
            'height' => 'height',
            'bitrate' => 'bitrate',
            'frameRate' => 'frame_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quality  画质<br/> 4K默认分辨率3840*2160，码率8000kbit/s<br/> 2K默认分辨率2560*1440，码率7000kbit/s<br/> FULL_HD默认分辨率1920*1080，码率3000kbit/s<br/> HD默认分辨率1280*720，码率1000kbit/s<br/> SD默认分辨率854*480，码率600kbit/s<br/> FLUENT默认分辨率480*270，码率300kbit/s<br/>
    * width  视频宽度<br/>
    * height  视频高度<br/>
    * bitrate  码率,单位：kbit/s<br/>
    * frameRate  帧率（默认为0，0代表自适应，单位是帧每秒）<br/>
    *
    * @var string[]
    */
    protected static $setters = [
            'quality' => 'setQuality',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'bitrate' => 'setBitrate',
            'frameRate' => 'setFrameRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quality  画质<br/> 4K默认分辨率3840*2160，码率8000kbit/s<br/> 2K默认分辨率2560*1440，码率7000kbit/s<br/> FULL_HD默认分辨率1920*1080，码率3000kbit/s<br/> HD默认分辨率1280*720，码率1000kbit/s<br/> SD默认分辨率854*480，码率600kbit/s<br/> FLUENT默认分辨率480*270，码率300kbit/s<br/>
    * width  视频宽度<br/>
    * height  视频高度<br/>
    * bitrate  码率,单位：kbit/s<br/>
    * frameRate  帧率（默认为0，0代表自适应，单位是帧每秒）<br/>
    *
    * @var string[]
    */
    protected static $getters = [
            'quality' => 'getQuality',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'bitrate' => 'getBitrate',
            'frameRate' => 'getFrameRate'
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
    const QUALITY_FULL_HD = 'FULL_HD';
    const QUALITY_HD = 'HD';
    const QUALITY_SD = 'SD';
    const QUALITY_FLUENT = 'FLUENT';
    const QUALITY__2_K = '2K';
    const QUALITY__4_K = '4K';
    const QUALITY_UNKNOW = 'UNKNOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQualityAllowableValues()
    {
        return [
            self::QUALITY_FULL_HD,
            self::QUALITY_HD,
            self::QUALITY_SD,
            self::QUALITY_FLUENT,
            self::QUALITY__2_K,
            self::QUALITY__4_K,
            self::QUALITY_UNKNOW,
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
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quality'] === null) {
            $invalidProperties[] = "'quality' can't be null";
        }
            $allowedValues = $this->getQualityAllowableValues();
                if (!is_null($this->container['quality']) && !in_array($this->container['quality'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'quality', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] > 60)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be bigger than or equal to 0.";
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
    * Gets quality
    *  画质<br/> 4K默认分辨率3840*2160，码率8000kbit/s<br/> 2K默认分辨率2560*1440，码率7000kbit/s<br/> FULL_HD默认分辨率1920*1080，码率3000kbit/s<br/> HD默认分辨率1280*720，码率1000kbit/s<br/> SD默认分辨率854*480，码率600kbit/s<br/> FLUENT默认分辨率480*270，码率300kbit/s<br/>
    *
    * @return string
    */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
    * Sets quality
    *
    * @param string $quality 画质<br/> 4K默认分辨率3840*2160，码率8000kbit/s<br/> 2K默认分辨率2560*1440，码率7000kbit/s<br/> FULL_HD默认分辨率1920*1080，码率3000kbit/s<br/> HD默认分辨率1280*720，码率1000kbit/s<br/> SD默认分辨率854*480，码率600kbit/s<br/> FLUENT默认分辨率480*270，码率300kbit/s<br/>
    *
    * @return $this
    */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;
        return $this;
    }

    /**
    * Gets width
    *  视频宽度<br/>
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
    * @param int|null $width 视频宽度<br/>
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
    *  视频高度<br/>
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
    * @param int|null $height 视频高度<br/>
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets bitrate
    *  码率,单位：kbit/s<br/>
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
    * @param int|null $bitrate 码率,单位：kbit/s<br/>
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets frameRate
    *  帧率（默认为0，0代表自适应，单位是帧每秒）<br/>
    *
    * @return int|null
    */
    public function getFrameRate()
    {
        return $this->container['frameRate'];
    }

    /**
    * Sets frameRate
    *
    * @param int|null $frameRate 帧率（默认为0，0代表自适应，单位是帧每秒）<br/>
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
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

