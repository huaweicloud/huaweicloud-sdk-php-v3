<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCustomFieldsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCustomFieldsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  测试用例自定义字段Id
    * values  测试用例自定义字段值
    * fieldName  自定义字段名，优先取id再取fieldName
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'values' => 'string[]',
            'fieldName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  测试用例自定义字段Id
    * values  测试用例自定义字段值
    * fieldName  自定义字段名，优先取id再取fieldName
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'values' => null,
        'fieldName' => null
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
    * id  测试用例自定义字段Id
    * values  测试用例自定义字段值
    * fieldName  自定义字段名，优先取id再取fieldName
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'values' => 'values',
            'fieldName' => 'field_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  测试用例自定义字段Id
    * values  测试用例自定义字段值
    * fieldName  自定义字段名，优先取id再取fieldName
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'values' => 'setValues',
            'fieldName' => 'setFieldName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  测试用例自定义字段Id
    * values  测试用例自定义字段值
    * fieldName  自定义字段名，优先取id再取fieldName
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'values' => 'getValues',
            'fieldName' => 'getFieldName'
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
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
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
    *  测试用例自定义字段Id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 测试用例自定义字段Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets values
    *  测试用例自定义字段值
    *
    * @return string[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[]|null $values 测试用例自定义字段值
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets fieldName
    *  自定义字段名，优先取id再取fieldName
    *
    * @return string|null
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string|null $fieldName 自定义字段名，优先取id再取fieldName
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
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

