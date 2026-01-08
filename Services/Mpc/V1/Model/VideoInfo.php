<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

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
    * width  视频宽度
    * height  视频高度
    * bitrate  视频码率，单位: kbit/s
    * bitrateBps  视频码率，单位: bit/s
    * frameRate  帧率。    取值范围：0或[5,60]，0表示自适应。    单位：帧每秒。    > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codec  视频编码格式
    * duration  视频流时长，单位：秒
    * durationMs  视频流时长，单位：毫秒
    * rotate  视频拍摄时的选择角度，单位：度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'width' => 'int',
            'height' => 'int',
            'bitrate' => 'int',
            'bitrateBps' => 'int',
            'frameRate' => 'int',
            'codec' => 'string',
            'duration' => 'string',
            'durationMs' => 'string',
            'rotate' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * width  视频宽度
    * height  视频高度
    * bitrate  视频码率，单位: kbit/s
    * bitrateBps  视频码率，单位: bit/s
    * frameRate  帧率。    取值范围：0或[5,60]，0表示自适应。    单位：帧每秒。    > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codec  视频编码格式
    * duration  视频流时长，单位：秒
    * durationMs  视频流时长，单位：毫秒
    * rotate  视频拍摄时的选择角度，单位：度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'width' => null,
        'height' => null,
        'bitrate' => null,
        'bitrateBps' => 'int64',
        'frameRate' => null,
        'codec' => null,
        'duration' => null,
        'durationMs' => null,
        'rotate' => 'float'
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
    * width  视频宽度
    * height  视频高度
    * bitrate  视频码率，单位: kbit/s
    * bitrateBps  视频码率，单位: bit/s
    * frameRate  帧率。    取值范围：0或[5,60]，0表示自适应。    单位：帧每秒。    > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codec  视频编码格式
    * duration  视频流时长，单位：秒
    * durationMs  视频流时长，单位：毫秒
    * rotate  视频拍摄时的选择角度，单位：度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'width' => 'width',
            'height' => 'height',
            'bitrate' => 'bitrate',
            'bitrateBps' => 'bitrate_bps',
            'frameRate' => 'frame_rate',
            'codec' => 'codec',
            'duration' => 'duration',
            'durationMs' => 'duration_ms',
            'rotate' => 'rotate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * width  视频宽度
    * height  视频高度
    * bitrate  视频码率，单位: kbit/s
    * bitrateBps  视频码率，单位: bit/s
    * frameRate  帧率。    取值范围：0或[5,60]，0表示自适应。    单位：帧每秒。    > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codec  视频编码格式
    * duration  视频流时长，单位：秒
    * durationMs  视频流时长，单位：毫秒
    * rotate  视频拍摄时的选择角度，单位：度。
    *
    * @var string[]
    */
    protected static $setters = [
            'width' => 'setWidth',
            'height' => 'setHeight',
            'bitrate' => 'setBitrate',
            'bitrateBps' => 'setBitrateBps',
            'frameRate' => 'setFrameRate',
            'codec' => 'setCodec',
            'duration' => 'setDuration',
            'durationMs' => 'setDurationMs',
            'rotate' => 'setRotate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * width  视频宽度
    * height  视频高度
    * bitrate  视频码率，单位: kbit/s
    * bitrateBps  视频码率，单位: bit/s
    * frameRate  帧率。    取值范围：0或[5,60]，0表示自适应。    单位：帧每秒。    > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    * codec  视频编码格式
    * duration  视频流时长，单位：秒
    * durationMs  视频流时长，单位：毫秒
    * rotate  视频拍摄时的选择角度，单位：度。
    *
    * @var string[]
    */
    protected static $getters = [
            'width' => 'getWidth',
            'height' => 'getHeight',
            'bitrate' => 'getBitrate',
            'bitrateBps' => 'getBitrateBps',
            'frameRate' => 'getFrameRate',
            'codec' => 'getCodec',
            'duration' => 'getDuration',
            'durationMs' => 'getDurationMs',
            'rotate' => 'getRotate'
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
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['bitrateBps'] = isset($data['bitrateBps']) ? $data['bitrateBps'] : null;
        $this->container['frameRate'] = isset($data['frameRate']) ? $data['frameRate'] : null;
        $this->container['codec'] = isset($data['codec']) ? $data['codec'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['durationMs'] = isset($data['durationMs']) ? $data['durationMs'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['width']) && ($this->container['width'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['frameRate']) && ($this->container['frameRate'] < 0)) {
                $invalidProperties[] = "invalid value for 'frameRate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['codec']) && (mb_strlen($this->container['codec']) > 64)) {
                $invalidProperties[] = "invalid value for 'codec', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['codec']) && (mb_strlen($this->container['codec']) < 0)) {
                $invalidProperties[] = "invalid value for 'codec', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && (mb_strlen($this->container['duration']) > 128)) {
                $invalidProperties[] = "invalid value for 'duration', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['duration']) && (mb_strlen($this->container['duration']) < 0)) {
                $invalidProperties[] = "invalid value for 'duration', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['durationMs']) && (mb_strlen($this->container['durationMs']) > 128)) {
                $invalidProperties[] = "invalid value for 'durationMs', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['durationMs']) && (mb_strlen($this->container['durationMs']) < 0)) {
                $invalidProperties[] = "invalid value for 'durationMs', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rotate']) && ($this->container['rotate'] > 3.6E+2)) {
                $invalidProperties[] = "invalid value for 'rotate', must be smaller than or equal to 3.6E+2.";
            }
            if (!is_null($this->container['rotate']) && ($this->container['rotate'] < 0)) {
                $invalidProperties[] = "invalid value for 'rotate', must be bigger than or equal to 0.";
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
    * Gets bitrate
    *  视频码率，单位: kbit/s
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
    * @param int|null $bitrate 视频码率，单位: kbit/s
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
    *  视频码率，单位: bit/s
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
    * @param int|null $bitrateBps 视频码率，单位: bit/s
    *
    * @return $this
    */
    public function setBitrateBps($bitrateBps)
    {
        $this->container['bitrateBps'] = $bitrateBps;
        return $this;
    }

    /**
    * Gets frameRate
    *  帧率。    取值范围：0或[5,60]，0表示自适应。    单位：帧每秒。    > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
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
    * @param int|null $frameRate 帧率。    取值范围：0或[5,60]，0表示自适应。    单位：帧每秒。    > 若设置的帧率不在取值范围内，则自动调整为0，若设置的帧率高于片源帧率，则自动调整为片源帧率。
    *
    * @return $this
    */
    public function setFrameRate($frameRate)
    {
        $this->container['frameRate'] = $frameRate;
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
    * Gets duration
    *  视频流时长，单位：秒
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration 视频流时长，单位：秒
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets durationMs
    *  视频流时长，单位：毫秒
    *
    * @return string|null
    */
    public function getDurationMs()
    {
        return $this->container['durationMs'];
    }

    /**
    * Sets durationMs
    *
    * @param string|null $durationMs 视频流时长，单位：毫秒
    *
    * @return $this
    */
    public function setDurationMs($durationMs)
    {
        $this->container['durationMs'] = $durationMs;
        return $this;
    }

    /**
    * Gets rotate
    *  视频拍摄时的选择角度，单位：度。
    *
    * @return float|null
    */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /**
    * Sets rotate
    *
    * @param float|null $rotate 视频拍摄时的选择角度，单位：度。
    *
    * @return $this
    */
    public function setRotate($rotate)
    {
        $this->container['rotate'] = $rotate;
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

