<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InferenceEyeCorrectionMarkInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InferenceEyeCorrectionMarkInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eyeCorrectionStartTime  选取推理数据预处理眼神矫正起始时间。格式：“HH:MM:SS.mmm”。
    * eyeCorrectionEndTime  选取推理数据预处理眼神矫正结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eyeCorrectionStartTime' => 'string',
            'eyeCorrectionEndTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eyeCorrectionStartTime  选取推理数据预处理眼神矫正起始时间。格式：“HH:MM:SS.mmm”。
    * eyeCorrectionEndTime  选取推理数据预处理眼神矫正结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eyeCorrectionStartTime' => null,
        'eyeCorrectionEndTime' => null
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
    * eyeCorrectionStartTime  选取推理数据预处理眼神矫正起始时间。格式：“HH:MM:SS.mmm”。
    * eyeCorrectionEndTime  选取推理数据预处理眼神矫正结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eyeCorrectionStartTime' => 'eye_correction_start_time',
            'eyeCorrectionEndTime' => 'eye_correction_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eyeCorrectionStartTime  选取推理数据预处理眼神矫正起始时间。格式：“HH:MM:SS.mmm”。
    * eyeCorrectionEndTime  选取推理数据预处理眼神矫正结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $setters = [
            'eyeCorrectionStartTime' => 'setEyeCorrectionStartTime',
            'eyeCorrectionEndTime' => 'setEyeCorrectionEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eyeCorrectionStartTime  选取推理数据预处理眼神矫正起始时间。格式：“HH:MM:SS.mmm”。
    * eyeCorrectionEndTime  选取推理数据预处理眼神矫正结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @var string[]
    */
    protected static $getters = [
            'eyeCorrectionStartTime' => 'getEyeCorrectionStartTime',
            'eyeCorrectionEndTime' => 'getEyeCorrectionEndTime'
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
        $this->container['eyeCorrectionStartTime'] = isset($data['eyeCorrectionStartTime']) ? $data['eyeCorrectionStartTime'] : null;
        $this->container['eyeCorrectionEndTime'] = isset($data['eyeCorrectionEndTime']) ? $data['eyeCorrectionEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['eyeCorrectionStartTime']) && (mb_strlen($this->container['eyeCorrectionStartTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'eyeCorrectionStartTime', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['eyeCorrectionStartTime']) && (mb_strlen($this->container['eyeCorrectionStartTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'eyeCorrectionStartTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eyeCorrectionEndTime']) && (mb_strlen($this->container['eyeCorrectionEndTime']) > 12)) {
                $invalidProperties[] = "invalid value for 'eyeCorrectionEndTime', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['eyeCorrectionEndTime']) && (mb_strlen($this->container['eyeCorrectionEndTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'eyeCorrectionEndTime', the character length must be bigger than or equal to 0.";
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
    * Gets eyeCorrectionStartTime
    *  选取推理数据预处理眼神矫正起始时间。格式：“HH:MM:SS.mmm”。
    *
    * @return string|null
    */
    public function getEyeCorrectionStartTime()
    {
        return $this->container['eyeCorrectionStartTime'];
    }

    /**
    * Sets eyeCorrectionStartTime
    *
    * @param string|null $eyeCorrectionStartTime 选取推理数据预处理眼神矫正起始时间。格式：“HH:MM:SS.mmm”。
    *
    * @return $this
    */
    public function setEyeCorrectionStartTime($eyeCorrectionStartTime)
    {
        $this->container['eyeCorrectionStartTime'] = $eyeCorrectionStartTime;
        return $this;
    }

    /**
    * Gets eyeCorrectionEndTime
    *  选取推理数据预处理眼神矫正结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @return string|null
    */
    public function getEyeCorrectionEndTime()
    {
        return $this->container['eyeCorrectionEndTime'];
    }

    /**
    * Sets eyeCorrectionEndTime
    *
    * @param string|null $eyeCorrectionEndTime 选取推理数据预处理眼神矫正结束时间。格式：“HH:MM:SS.mmm”。
    *
    * @return $this
    */
    public function setEyeCorrectionEndTime($eyeCorrectionEndTime)
    {
        $this->container['eyeCorrectionEndTime'] = $eyeCorrectionEndTime;
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

