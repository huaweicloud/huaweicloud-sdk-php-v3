<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetaData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetaData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  文件大小。
    * durationMs  视频时长，带小数位显示。单位：秒。
    * duration  视频时长。单位：秒。
    * format  文件封装格式。
    * bitrate  总码率。单位：bit/秒
    * video  视频流元数据。
    * audio  音频流元数据。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'int',
            'durationMs' => 'double',
            'duration' => 'int',
            'format' => 'string',
            'bitrate' => 'int',
            'video' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo[]',
            'audio' => '\HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  文件大小。
    * durationMs  视频时长，带小数位显示。单位：秒。
    * duration  视频时长。单位：秒。
    * format  文件封装格式。
    * bitrate  总码率。单位：bit/秒
    * video  视频流元数据。
    * audio  音频流元数据。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => 'int64',
        'durationMs' => 'double',
        'duration' => 'int64',
        'format' => null,
        'bitrate' => 'int64',
        'video' => null,
        'audio' => null
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
    * size  文件大小。
    * durationMs  视频时长，带小数位显示。单位：秒。
    * duration  视频时长。单位：秒。
    * format  文件封装格式。
    * bitrate  总码率。单位：bit/秒
    * video  视频流元数据。
    * audio  音频流元数据。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'durationMs' => 'duration_ms',
            'duration' => 'duration',
            'format' => 'format',
            'bitrate' => 'bitrate',
            'video' => 'video',
            'audio' => 'audio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  文件大小。
    * durationMs  视频时长，带小数位显示。单位：秒。
    * duration  视频时长。单位：秒。
    * format  文件封装格式。
    * bitrate  总码率。单位：bit/秒
    * video  视频流元数据。
    * audio  音频流元数据。
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'durationMs' => 'setDurationMs',
            'duration' => 'setDuration',
            'format' => 'setFormat',
            'bitrate' => 'setBitrate',
            'video' => 'setVideo',
            'audio' => 'setAudio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  文件大小。
    * durationMs  视频时长，带小数位显示。单位：秒。
    * duration  视频时长。单位：秒。
    * format  文件封装格式。
    * bitrate  总码率。单位：bit/秒
    * video  视频流元数据。
    * audio  音频流元数据。
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'durationMs' => 'getDurationMs',
            'duration' => 'getDuration',
            'format' => 'getFormat',
            'bitrate' => 'getBitrate',
            'video' => 'getVideo',
            'audio' => 'getAudio'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['durationMs'] = isset($data['durationMs']) ? $data['durationMs'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['bitrate'] = isset($data['bitrate']) ? $data['bitrate'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['size']) && ($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['durationMs']) && ($this->container['durationMs'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'durationMs', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['durationMs']) && ($this->container['durationMs'] < 0)) {
                $invalidProperties[] = "invalid value for 'durationMs', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) > 16)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) < 0)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['bitrate']) && ($this->container['bitrate'] < 0)) {
                $invalidProperties[] = "invalid value for 'bitrate', must be bigger than or equal to 0.";
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
    * Gets size
    *  文件大小。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 文件大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets durationMs
    *  视频时长，带小数位显示。单位：秒。
    *
    * @return double|null
    */
    public function getDurationMs()
    {
        return $this->container['durationMs'];
    }

    /**
    * Sets durationMs
    *
    * @param double|null $durationMs 视频时长，带小数位显示。单位：秒。
    *
    * @return $this
    */
    public function setDurationMs($durationMs)
    {
        $this->container['durationMs'] = $durationMs;
        return $this;
    }

    /**
    * Gets duration
    *  视频时长。单位：秒。
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
    * @param int|null $duration 视频时长。单位：秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets format
    *  文件封装格式。
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 文件封装格式。
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets bitrate
    *  总码率。单位：bit/秒
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
    * @param int|null $bitrate 总码率。单位：bit/秒
    *
    * @return $this
    */
    public function setBitrate($bitrate)
    {
        $this->container['bitrate'] = $bitrate;
        return $this;
    }

    /**
    * Gets video
    *  视频流元数据。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo[]|null
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo[]|null $video 视频流元数据。
    *
    * @return $this
    */
    public function setVideo($video)
    {
        $this->container['video'] = $video;
        return $this;
    }

    /**
    * Gets audio
    *  音频流元数据。
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo[]|null
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo[]|null $audio 音频流元数据。
    *
    * @return $this
    */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;
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

