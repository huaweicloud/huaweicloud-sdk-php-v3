<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceControlReleaseReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceControlReleaseReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * controlId  控制id
    * serviceId  服务id，可选
    * priority  调度计划优先级。
    * properties  控制释放的属性数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'controlId' => 'string',
            'serviceId' => 'string',
            'priority' => 'int',
            'properties' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * controlId  控制id
    * serviceId  服务id，可选
    * priority  调度计划优先级。
    * properties  控制释放的属性数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'controlId' => null,
        'serviceId' => null,
        'priority' => 'int32',
        'properties' => null
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
    * controlId  控制id
    * serviceId  服务id，可选
    * priority  调度计划优先级。
    * properties  控制释放的属性数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'controlId' => 'control_id',
            'serviceId' => 'service_id',
            'priority' => 'priority',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * controlId  控制id
    * serviceId  服务id，可选
    * priority  调度计划优先级。
    * properties  控制释放的属性数组
    *
    * @var string[]
    */
    protected static $setters = [
            'controlId' => 'setControlId',
            'serviceId' => 'setServiceId',
            'priority' => 'setPriority',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * controlId  控制id
    * serviceId  服务id，可选
    * priority  调度计划优先级。
    * properties  控制释放的属性数组
    *
    * @var string[]
    */
    protected static $getters = [
            'controlId' => 'getControlId',
            'serviceId' => 'getServiceId',
            'priority' => 'getPriority',
            'properties' => 'getProperties'
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
        $this->container['controlId'] = isset($data['controlId']) ? $data['controlId'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['controlId'] === null) {
            $invalidProperties[] = "'controlId' can't be null";
        }
            if ((mb_strlen($this->container['controlId']) > 128)) {
                $invalidProperties[] = "invalid value for 'controlId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['controlId']) < 1)) {
                $invalidProperties[] = "invalid value for 'controlId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['controlId'])) {
                $invalidProperties[] = "invalid value for 'controlId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['serviceId']) && !preg_match("/^[一-龥a-zA-Z0-9_?\/'#().,&%@!-]{0,64}$/", $this->container['serviceId'])) {
                $invalidProperties[] = "invalid value for 'serviceId', must be conform to the pattern /^[一-龥a-zA-Z0-9_?\/'#().,&%@!-]{0,64}$/.";
            }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
            if (($this->container['priority'] > 16)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 16.";
            }
            if (($this->container['priority'] < 1)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 1.";
            }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
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
    * Gets controlId
    *  控制id
    *
    * @return string
    */
    public function getControlId()
    {
        return $this->container['controlId'];
    }

    /**
    * Sets controlId
    *
    * @param string $controlId 控制id
    *
    * @return $this
    */
    public function setControlId($controlId)
    {
        $this->container['controlId'] = $controlId;
        return $this;
    }

    /**
    * Gets serviceId
    *  服务id，可选
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId 服务id，可选
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets priority
    *  调度计划优先级。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 调度计划优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets properties
    *  控制释放的属性数组
    *
    * @return string[]
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param string[] $properties 控制释放的属性数组
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

