<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKieReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKieReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  配置项的id。
    * key  配置项的key。
    * labels  配置项的标签
    * value  配置项的值。
    * valueType  配置项value的类型。
    * status  配置项的状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'key' => 'string',
            'labels' => 'object',
            'value' => 'string',
            'valueType' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  配置项的id。
    * key  配置项的key。
    * labels  配置项的标签
    * value  配置项的值。
    * valueType  配置项value的类型。
    * status  配置项的状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'key' => null,
        'labels' => null,
        'value' => null,
        'valueType' => null,
        'status' => null
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
    * id  配置项的id。
    * key  配置项的key。
    * labels  配置项的标签
    * value  配置项的值。
    * valueType  配置项value的类型。
    * status  配置项的状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'key' => 'key',
            'labels' => 'labels',
            'value' => 'value',
            'valueType' => 'value_type',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  配置项的id。
    * key  配置项的key。
    * labels  配置项的标签
    * value  配置项的值。
    * valueType  配置项value的类型。
    * status  配置项的状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'key' => 'setKey',
            'labels' => 'setLabels',
            'value' => 'setValue',
            'valueType' => 'setValueType',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  配置项的id。
    * key  配置项的key。
    * labels  配置项的标签
    * value  配置项的值。
    * valueType  配置项value的类型。
    * status  配置项的状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'key' => 'getKey',
            'labels' => 'getLabels',
            'value' => 'getValue',
            'valueType' => 'getValueType',
            'status' => 'getStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : '$random(6)-$date(yyyy-MM-dd-HH-mm-ss)';
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : '$random(20)';
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : 'text';
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'enabled';
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
    * Gets id
    *  配置项的id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 配置项的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets key
    *  配置项的key。
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
    * @param string|null $key 配置项的key。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets labels
    *  配置项的标签
    *
    * @return object|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param object|null $labels 配置项的标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets value
    *  配置项的值。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 配置项的值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets valueType
    *  配置项value的类型。
    *
    * @return string|null
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string|null $valueType 配置项value的类型。
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets status
    *  配置项的状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 配置项的状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

