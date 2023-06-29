<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterScalingReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterScalingReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  服务ID，为扩展接口，预留此参数。用户不需要配置。
    * planId  套餐ID，为扩展接口，预留此参数。用户不需要配置。
    * parameters  parameters
    * previousValues  扩展接口，预留此参数。用户不需要配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'planId' => 'string',
            'parameters' => '\HuaweiCloud\SDK\Mrs\V1\Model\ClusterScalingParams',
            'previousValues' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  服务ID，为扩展接口，预留此参数。用户不需要配置。
    * planId  套餐ID，为扩展接口，预留此参数。用户不需要配置。
    * parameters  parameters
    * previousValues  扩展接口，预留此参数。用户不需要配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'planId' => null,
        'parameters' => null,
        'previousValues' => null
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
    * serviceId  服务ID，为扩展接口，预留此参数。用户不需要配置。
    * planId  套餐ID，为扩展接口，预留此参数。用户不需要配置。
    * parameters  parameters
    * previousValues  扩展接口，预留此参数。用户不需要配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'planId' => 'plan_id',
            'parameters' => 'parameters',
            'previousValues' => 'previous_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  服务ID，为扩展接口，预留此参数。用户不需要配置。
    * planId  套餐ID，为扩展接口，预留此参数。用户不需要配置。
    * parameters  parameters
    * previousValues  扩展接口，预留此参数。用户不需要配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'planId' => 'setPlanId',
            'parameters' => 'setParameters',
            'previousValues' => 'setPreviousValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  服务ID，为扩展接口，预留此参数。用户不需要配置。
    * planId  套餐ID，为扩展接口，预留此参数。用户不需要配置。
    * parameters  parameters
    * previousValues  扩展接口，预留此参数。用户不需要配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'planId' => 'getPlanId',
            'parameters' => 'getParameters',
            'previousValues' => 'getPreviousValues'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['previousValues'] = isset($data['previousValues']) ? $data['previousValues'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
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
    * Gets serviceId
    *  服务ID，为扩展接口，预留此参数。用户不需要配置。
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
    * @param string|null $serviceId 服务ID，为扩展接口，预留此参数。用户不需要配置。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets planId
    *  套餐ID，为扩展接口，预留此参数。用户不需要配置。
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId 套餐ID，为扩展接口，预留此参数。用户不需要配置。
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets parameters
    *  parameters
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\ClusterScalingParams
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\ClusterScalingParams $parameters parameters
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets previousValues
    *  扩展接口，预留此参数。用户不需要配置。
    *
    * @return map[string,string]|null
    */
    public function getPreviousValues()
    {
        return $this->container['previousValues'];
    }

    /**
    * Sets previousValues
    *
    * @param map[string,string]|null $previousValues 扩展接口，预留此参数。用户不需要配置。
    *
    * @return $this
    */
    public function setPreviousValues($previousValues)
    {
        $this->container['previousValues'] = $previousValues;
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

