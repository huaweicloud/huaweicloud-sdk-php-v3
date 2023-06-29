<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OriginPara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OriginPara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * fileFormat  文件格式
    * video  video
    * audio  audio
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'duration' => 'int',
            'durationMs' => 'int',
            'fileFormat' => 'string',
            'video' => '\HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo',
            'audio' => '\HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * fileFormat  文件格式
    * video  video
    * audio  audio
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'duration' => null,
        'durationMs' => 'int64',
        'fileFormat' => null,
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
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * fileFormat  文件格式
    * video  video
    * audio  audio
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'duration' => 'duration',
            'durationMs' => 'duration_ms',
            'fileFormat' => 'file_format',
            'video' => 'video',
            'audio' => 'audio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * fileFormat  文件格式
    * video  video
    * audio  audio
    *
    * @var string[]
    */
    protected static $setters = [
            'duration' => 'setDuration',
            'durationMs' => 'setDurationMs',
            'fileFormat' => 'setFileFormat',
            'video' => 'setVideo',
            'audio' => 'setAudio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * duration  片源时长，单位：秒
    * durationMs  片源时长，单位：毫秒
    * fileFormat  文件格式
    * video  video
    * audio  audio
    *
    * @var string[]
    */
    protected static $getters = [
            'duration' => 'getDuration',
            'durationMs' => 'getDurationMs',
            'fileFormat' => 'getFileFormat',
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['durationMs'] = isset($data['durationMs']) ? $data['durationMs'] : null;
        $this->container['fileFormat'] = isset($data['fileFormat']) ? $data['fileFormat'] : null;
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
            if (!is_null($this->container['fileFormat']) && (mb_strlen($this->container['fileFormat']) > 16)) {
                $invalidProperties[] = "invalid value for 'fileFormat', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['fileFormat']) && (mb_strlen($this->container['fileFormat']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileFormat', the character length must be bigger than or equal to 0.";
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
    * Gets fileFormat
    *  文件格式
    *
    * @return string|null
    */
    public function getFileFormat()
    {
        return $this->container['fileFormat'];
    }

    /**
    * Sets fileFormat
    *
    * @param string|null $fileFormat 文件格式
    *
    * @return $this
    */
    public function setFileFormat($fileFormat)
    {
        $this->container['fileFormat'] = $fileFormat;
        return $this;
    }

    /**
    * Gets video
    *  video
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo|null
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\VideoInfo|null $video video
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
    *  audio
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo|null
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\AudioInfo|null $audio audio
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

