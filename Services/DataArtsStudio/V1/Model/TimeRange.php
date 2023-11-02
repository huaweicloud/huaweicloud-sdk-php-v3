<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TimeRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TimeRange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeType  可选值：ddlUpdateTime、dataUpdateTime、ddlCreateTime
    * start  开始时间
    * end  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeType' => 'string',
            'start' => 'string',
            'end' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeType  可选值：ddlUpdateTime、dataUpdateTime、ddlCreateTime
    * start  开始时间
    * end  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeType' => null,
        'start' => null,
        'end' => null
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
    * timeType  可选值：ddlUpdateTime、dataUpdateTime、ddlCreateTime
    * start  开始时间
    * end  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeType' => 'time_type',
            'start' => 'start',
            'end' => 'end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeType  可选值：ddlUpdateTime、dataUpdateTime、ddlCreateTime
    * start  开始时间
    * end  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'timeType' => 'setTimeType',
            'start' => 'setStart',
            'end' => 'setEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeType  可选值：ddlUpdateTime、dataUpdateTime、ddlCreateTime
    * start  开始时间
    * end  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'timeType' => 'getTimeType',
            'start' => 'getStart',
            'end' => 'getEnd'
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
        $this->container['timeType'] = isset($data['timeType']) ? $data['timeType'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timeType'] === null) {
            $invalidProperties[] = "'timeType' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
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
    * Gets timeType
    *  可选值：ddlUpdateTime、dataUpdateTime、ddlCreateTime
    *
    * @return string
    */
    public function getTimeType()
    {
        return $this->container['timeType'];
    }

    /**
    * Sets timeType
    *
    * @param string $timeType 可选值：ddlUpdateTime、dataUpdateTime、ddlCreateTime
    *
    * @return $this
    */
    public function setTimeType($timeType)
    {
        $this->container['timeType'] = $timeType;
        return $this;
    }

    /**
    * Gets start
    *  开始时间
    *
    * @return string
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string $start 开始时间
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets end
    *  结束时间
    *
    * @return string
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param string $end 结束时间
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
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

