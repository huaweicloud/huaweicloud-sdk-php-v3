<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActiveControlRspDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActiveControlRspDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * controlType  控制类型，包括control、schedule、local_control
    * controlId  控制id
    * priority  控制的优先级
    * value  此次控制的值
    * endTime  控制的结束时间
    * createTime  记录创建的时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'controlType' => 'string',
            'controlId' => 'string',
            'priority' => 'int',
            'value' => 'object',
            'endTime' => 'int',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * controlType  控制类型，包括control、schedule、local_control
    * controlId  控制id
    * priority  控制的优先级
    * value  此次控制的值
    * endTime  控制的结束时间
    * createTime  记录创建的时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'controlType' => null,
        'controlId' => null,
        'priority' => 'int32',
        'value' => null,
        'endTime' => 'int64',
        'createTime' => 'int64'
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
    * controlType  控制类型，包括control、schedule、local_control
    * controlId  控制id
    * priority  控制的优先级
    * value  此次控制的值
    * endTime  控制的结束时间
    * createTime  记录创建的时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'controlType' => 'control_type',
            'controlId' => 'control_id',
            'priority' => 'priority',
            'value' => 'value',
            'endTime' => 'end_time',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * controlType  控制类型，包括control、schedule、local_control
    * controlId  控制id
    * priority  控制的优先级
    * value  此次控制的值
    * endTime  控制的结束时间
    * createTime  记录创建的时间
    *
    * @var string[]
    */
    protected static $setters = [
            'controlType' => 'setControlType',
            'controlId' => 'setControlId',
            'priority' => 'setPriority',
            'value' => 'setValue',
            'endTime' => 'setEndTime',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * controlType  控制类型，包括control、schedule、local_control
    * controlId  控制id
    * priority  控制的优先级
    * value  此次控制的值
    * endTime  控制的结束时间
    * createTime  记录创建的时间
    *
    * @var string[]
    */
    protected static $getters = [
            'controlType' => 'getControlType',
            'controlId' => 'getControlId',
            'priority' => 'getPriority',
            'value' => 'getValue',
            'endTime' => 'getEndTime',
            'createTime' => 'getCreateTime'
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
        $this->container['controlType'] = isset($data['controlType']) ? $data['controlType'] : null;
        $this->container['controlId'] = isset($data['controlId']) ? $data['controlId'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets controlType
    *  控制类型，包括control、schedule、local_control
    *
    * @return string|null
    */
    public function getControlType()
    {
        return $this->container['controlType'];
    }

    /**
    * Sets controlType
    *
    * @param string|null $controlType 控制类型，包括control、schedule、local_control
    *
    * @return $this
    */
    public function setControlType($controlType)
    {
        $this->container['controlType'] = $controlType;
        return $this;
    }

    /**
    * Gets controlId
    *  控制id
    *
    * @return string|null
    */
    public function getControlId()
    {
        return $this->container['controlId'];
    }

    /**
    * Sets controlId
    *
    * @param string|null $controlId 控制id
    *
    * @return $this
    */
    public function setControlId($controlId)
    {
        $this->container['controlId'] = $controlId;
        return $this;
    }

    /**
    * Gets priority
    *  控制的优先级
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 控制的优先级
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets value
    *  此次控制的值
    *
    * @return object|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param object|null $value 此次控制的值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets endTime
    *  控制的结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 控制的结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets createTime
    *  记录创建的时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 记录创建的时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

