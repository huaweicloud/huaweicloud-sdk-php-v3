<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskExtParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskExtParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * delete  是否删除
    * id  参数id
    * name  参数名称
    * sensitiveInfo  是否敏感信息：true-敏感信息，false-非敏感信息
    * value  参数值
    * variableType  参数类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'delete' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'sensitiveInfo' => 'bool',
            'value' => 'string',
            'variableType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * delete  是否删除
    * id  参数id
    * name  参数名称
    * sensitiveInfo  是否敏感信息：true-敏感信息，false-非敏感信息
    * value  参数值
    * variableType  参数类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'delete' => null,
        'id' => null,
        'name' => null,
        'sensitiveInfo' => null,
        'value' => null,
        'variableType' => null
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
    * delete  是否删除
    * id  参数id
    * name  参数名称
    * sensitiveInfo  是否敏感信息：true-敏感信息，false-非敏感信息
    * value  参数值
    * variableType  参数类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'delete' => 'delete',
            'id' => 'id',
            'name' => 'name',
            'sensitiveInfo' => 'sensitiveInfo',
            'value' => 'value',
            'variableType' => 'variableType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * delete  是否删除
    * id  参数id
    * name  参数名称
    * sensitiveInfo  是否敏感信息：true-敏感信息，false-非敏感信息
    * value  参数值
    * variableType  参数类型
    *
    * @var string[]
    */
    protected static $setters = [
            'delete' => 'setDelete',
            'id' => 'setId',
            'name' => 'setName',
            'sensitiveInfo' => 'setSensitiveInfo',
            'value' => 'setValue',
            'variableType' => 'setVariableType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * delete  是否删除
    * id  参数id
    * name  参数名称
    * sensitiveInfo  是否敏感信息：true-敏感信息，false-非敏感信息
    * value  参数值
    * variableType  参数类型
    *
    * @var string[]
    */
    protected static $getters = [
            'delete' => 'getDelete',
            'id' => 'getId',
            'name' => 'getName',
            'sensitiveInfo' => 'getSensitiveInfo',
            'value' => 'getValue',
            'variableType' => 'getVariableType'
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
        $this->container['delete'] = isset($data['delete']) ? $data['delete'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sensitiveInfo'] = isset($data['sensitiveInfo']) ? $data['sensitiveInfo'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['variableType'] = isset($data['variableType']) ? $data['variableType'] : null;
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
    * Gets delete
    *  是否删除
    *
    * @return bool|null
    */
    public function getDelete()
    {
        return $this->container['delete'];
    }

    /**
    * Sets delete
    *
    * @param bool|null $delete 是否删除
    *
    * @return $this
    */
    public function setDelete($delete)
    {
        $this->container['delete'] = $delete;
        return $this;
    }

    /**
    * Gets id
    *  参数id
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
    * @param string|null $id 参数id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  参数名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sensitiveInfo
    *  是否敏感信息：true-敏感信息，false-非敏感信息
    *
    * @return bool|null
    */
    public function getSensitiveInfo()
    {
        return $this->container['sensitiveInfo'];
    }

    /**
    * Sets sensitiveInfo
    *
    * @param bool|null $sensitiveInfo 是否敏感信息：true-敏感信息，false-非敏感信息
    *
    * @return $this
    */
    public function setSensitiveInfo($sensitiveInfo)
    {
        $this->container['sensitiveInfo'] = $sensitiveInfo;
        return $this;
    }

    /**
    * Gets value
    *  参数值
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
    * @param string|null $value 参数值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets variableType
    *  参数类型
    *
    * @return string|null
    */
    public function getVariableType()
    {
        return $this->container['variableType'];
    }

    /**
    * Sets variableType
    *
    * @param string|null $variableType 参数类型
    *
    * @return $this
    */
    public function setVariableType($variableType)
    {
        $this->container['variableType'] = $variableType;
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

