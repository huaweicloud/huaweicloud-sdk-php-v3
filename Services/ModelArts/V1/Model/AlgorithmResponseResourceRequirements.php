<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlgorithmResponseResourceRequirements implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlgorithmResponse_resource_requirements';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  资源约束，可选值如下： - 资源类型（flavor_type），对应值可选择CPU、GPU[或Ascend](tag:hc,hk,fcs_super)； - 是否支持多卡训练（device_distributed_mode），对应值可选择支持（multiple）、不支持（singular）； - 是否支持分布式训练（host_distributed_mode），对应值可选择支持（multiple）、不支持（singular）。
    * value  资源约束键对应值。
    * operator  键与值关系，当前只支持in。例如flavor_type in [CPU,GPU]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string[]',
            'operator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  资源约束，可选值如下： - 资源类型（flavor_type），对应值可选择CPU、GPU[或Ascend](tag:hc,hk,fcs_super)； - 是否支持多卡训练（device_distributed_mode），对应值可选择支持（multiple）、不支持（singular）； - 是否支持分布式训练（host_distributed_mode），对应值可选择支持（multiple）、不支持（singular）。
    * value  资源约束键对应值。
    * operator  键与值关系，当前只支持in。例如flavor_type in [CPU,GPU]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null,
        'operator' => null
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
    * key  资源约束，可选值如下： - 资源类型（flavor_type），对应值可选择CPU、GPU[或Ascend](tag:hc,hk,fcs_super)； - 是否支持多卡训练（device_distributed_mode），对应值可选择支持（multiple）、不支持（singular）； - 是否支持分布式训练（host_distributed_mode），对应值可选择支持（multiple）、不支持（singular）。
    * value  资源约束键对应值。
    * operator  键与值关系，当前只支持in。例如flavor_type in [CPU,GPU]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value',
            'operator' => 'operator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  资源约束，可选值如下： - 资源类型（flavor_type），对应值可选择CPU、GPU[或Ascend](tag:hc,hk,fcs_super)； - 是否支持多卡训练（device_distributed_mode），对应值可选择支持（multiple）、不支持（singular）； - 是否支持分布式训练（host_distributed_mode），对应值可选择支持（multiple）、不支持（singular）。
    * value  资源约束键对应值。
    * operator  键与值关系，当前只支持in。例如flavor_type in [CPU,GPU]。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue',
            'operator' => 'setOperator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  资源约束，可选值如下： - 资源类型（flavor_type），对应值可选择CPU、GPU[或Ascend](tag:hc,hk,fcs_super)； - 是否支持多卡训练（device_distributed_mode），对应值可选择支持（multiple）、不支持（singular）； - 是否支持分布式训练（host_distributed_mode），对应值可选择支持（multiple）、不支持（singular）。
    * value  资源约束键对应值。
    * operator  键与值关系，当前只支持in。例如flavor_type in [CPU,GPU]。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue',
            'operator' => 'getOperator'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
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
    * Gets key
    *  资源约束，可选值如下： - 资源类型（flavor_type），对应值可选择CPU、GPU[或Ascend](tag:hc,hk,fcs_super)； - 是否支持多卡训练（device_distributed_mode），对应值可选择支持（multiple）、不支持（singular）； - 是否支持分布式训练（host_distributed_mode），对应值可选择支持（multiple）、不支持（singular）。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 资源约束，可选值如下： - 资源类型（flavor_type），对应值可选择CPU、GPU[或Ascend](tag:hc,hk,fcs_super)； - 是否支持多卡训练（device_distributed_mode），对应值可选择支持（multiple）、不支持（singular）； - 是否支持分布式训练（host_distributed_mode），对应值可选择支持（multiple）、不支持（singular）。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  资源约束键对应值。
    *
    * @return string[]|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string[]|null $value 资源约束键对应值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets operator
    *  键与值关系，当前只支持in。例如flavor_type in [CPU,GPU]。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 键与值关系，当前只支持in。例如flavor_type in [CPU,GPU]。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
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

