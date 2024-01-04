<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InferenceVideoMarkInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InferenceVideoMarkInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * videoStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * videoEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'videoStartTime' => 'string',
            'videoEndTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * videoStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * videoEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'videoStartTime' => null,
        'videoEndTime' => null
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
    * videoStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * videoEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'videoStartTime' => 'video_start_time',
            'videoEndTime' => 'video_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * videoStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * videoEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $setters = [
            'videoStartTime' => 'setVideoStartTime',
            'videoEndTime' => 'setVideoEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * videoStartTime  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    * videoEndTime  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $getters = [
            'videoStartTime' => 'getVideoStartTime',
            'videoEndTime' => 'getVideoEndTime'
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
        $this->container['videoStartTime'] = isset($data['videoStartTime']) ? $data['videoStartTime'] : null;
        $this->container['videoEndTime'] = isset($data['videoEndTime']) ? $data['videoEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['videoStartTime']) && (mb_strlen($this->container['videoStartTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'videoStartTime', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['videoStartTime']) && (mb_strlen($this->container['videoStartTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoStartTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['videoEndTime']) && (mb_strlen($this->container['videoEndTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'videoEndTime', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['videoEndTime']) && (mb_strlen($this->container['videoEndTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoEndTime', the character length must be bigger than or equal to 0.";
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
    * Gets videoStartTime
    *  选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    *
    * @return string|null
    */
    public function getVideoStartTime()
    {
        return $this->container['videoStartTime'];
    }

    /**
    * Sets videoStartTime
    *
    * @param string|null $videoStartTime 选取推理数据预处理视频起始时间。格式：“HH:MM:SS.mmm”。
    *
    * @return $this
    */
    public function setVideoStartTime($videoStartTime)
    {
        $this->container['videoStartTime'] = $videoStartTime;
        return $this;
    }

    /**
    * Gets videoEndTime
    *  选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @return string|null
    */
    public function getVideoEndTime()
    {
        return $this->container['videoEndTime'];
    }

    /**
    * Sets videoEndTime
    *
    * @param string|null $videoEndTime 选取推理数据预处理视频结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @return $this
    */
    public function setVideoEndTime($videoEndTime)
    {
        $this->container['videoEndTime'] = $videoEndTime;
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

