<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * format  片源格式
    * size  片源大小
    * videoInfo  videoInfo
    * audioInfo  音频信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'duration' => 'int',
            'durationMs' => 'int',
            'format' => 'string',
            'size' => 'int',
            'videoInfo' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo',
            'audioInfo' => '\HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * format  片源格式
    * size  片源大小
    * videoInfo  videoInfo
    * audioInfo  音频信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'duration' => null,
        'durationMs' => 'int64',
        'format' => null,
        'size' => 'int64',
        'videoInfo' => null,
        'audioInfo' => null
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
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * format  片源格式
    * size  片源大小
    * videoInfo  videoInfo
    * audioInfo  音频信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'duration' => 'duration',
            'durationMs' => 'duration_ms',
            'format' => 'format',
            'size' => 'size',
            'videoInfo' => 'video_info',
            'audioInfo' => 'audio_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * format  片源格式
    * size  片源大小
    * videoInfo  videoInfo
    * audioInfo  音频信息
    *
    * @var string[]
    */
    protected static $setters = [
            'duration' => 'setDuration',
            'durationMs' => 'setDurationMs',
            'format' => 'setFormat',
            'size' => 'setSize',
            'videoInfo' => 'setVideoInfo',
            'audioInfo' => 'setAudioInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * format  片源格式
    * size  片源大小
    * videoInfo  videoInfo
    * audioInfo  音频信息
    *
    * @var string[]
    */
    protected static $getters = [
            'duration' => 'getDuration',
            'durationMs' => 'getDurationMs',
            'format' => 'getFormat',
            'size' => 'getSize',
            'videoInfo' => 'getVideoInfo',
            'audioInfo' => 'getAudioInfo'
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
        $this->container['durationMs'] = isset($data['durationMs']) ? $data['durationMs'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['videoInfo'] = isset($data['videoInfo']) ? $data['videoInfo'] : null;
        $this->container['audioInfo'] = isset($data['audioInfo']) ? $data['audioInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['durationMs']) && ($this->container['durationMs'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'durationMs', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['durationMs']) && ($this->container['durationMs'] < 0)) {
                $invalidProperties[] = "invalid value for 'durationMs', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) > 32)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['format']) && (mb_strlen($this->container['format']) < 0)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
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
    *  片源时长，单位：秒
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
    * @param int|null $duration 片源时长，单位：秒
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
    *  片源时长，单位：毫秒
    *
    * @return int|null
    */
    public function getDurationMs()
    {
        return $this->container['durationMs'];
    }

    /**
    * Sets durationMs
    *
    * @param int|null $durationMs 片源时长，单位：毫秒
    *
    * @return $this
    */
    public function setDurationMs($durationMs)
    {
        $this->container['durationMs'] = $durationMs;
        return $this;
    }

    /**
    * Gets format
    *  片源格式
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
    * @param string|null $format 片源格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets size
    *  片源大小
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
    * @param int|null $size 片源大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets videoInfo
    *  videoInfo
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo|null
    */
    public function getVideoInfo()
    {
        return $this->container['videoInfo'];
    }

    /**
    * Sets videoInfo
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo|null $videoInfo videoInfo
    *
    * @return $this
    */
    public function setVideoInfo($videoInfo)
    {
        $this->container['videoInfo'] = $videoInfo;
        return $this;
    }

    /**
    * Gets audioInfo
    *  音频信息
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo[]|null
    */
    public function getAudioInfo()
    {
        return $this->container['audioInfo'];
    }

    /**
    * Sets audioInfo
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo[]|null $audioInfo 音频信息
    *
    * @return $this
    */
    public function setAudioInfo($audioInfo)
    {
        $this->container['audioInfo'] = $audioInfo;
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

