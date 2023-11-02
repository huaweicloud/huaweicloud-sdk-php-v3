<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiResponsePara implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiResponsePara';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名
    * field  绑定的表字段
    * type  参数类型
    * description  参数描述
    * exampleValue  参数示例值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'field' => 'string',
            'type' => 'string',
            'description' => 'string',
            'exampleValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名
    * field  绑定的表字段
    * type  参数类型
    * description  参数描述
    * exampleValue  参数示例值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'field' => null,
        'type' => null,
        'description' => null,
        'exampleValue' => null
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
    * name  参数名
    * field  绑定的表字段
    * type  参数类型
    * description  参数描述
    * exampleValue  参数示例值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'field' => 'field',
            'type' => 'type',
            'description' => 'description',
            'exampleValue' => 'example_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名
    * field  绑定的表字段
    * type  参数类型
    * description  参数描述
    * exampleValue  参数示例值
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'field' => 'setField',
            'type' => 'setType',
            'description' => 'setDescription',
            'exampleValue' => 'setExampleValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名
    * field  绑定的表字段
    * type  参数类型
    * description  参数描述
    * exampleValue  参数示例值
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'field' => 'getField',
            'type' => 'getType',
            'description' => 'getDescription',
            'exampleValue' => 'getExampleValue'
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
    const TYPE_REQUEST_PARAMETER_TYPE_NUMBER = 'REQUEST_PARAMETER_TYPE_NUMBER';
    const TYPE_REQUEST_PARAMETER_TYPE_STRING = 'REQUEST_PARAMETER_TYPE_STRING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_REQUEST_PARAMETER_TYPE_NUMBER,
            self::TYPE_REQUEST_PARAMETER_TYPE_STRING,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['exampleValue'] = isset($data['exampleValue']) ? $data['exampleValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  参数名
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
    * @param string|null $name 参数名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets field
    *  绑定的表字段
    *
    * @return string|null
    */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
    * Sets field
    *
    * @param string|null $field 绑定的表字段
    *
    * @return $this
    */
    public function setField($field)
    {
        $this->container['field'] = $field;
        return $this;
    }

    /**
    * Gets type
    *  参数类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 参数类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  参数描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 参数描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets exampleValue
    *  参数示例值
    *
    * @return string|null
    */
    public function getExampleValue()
    {
        return $this->container['exampleValue'];
    }

    /**
    * Sets exampleValue
    *
    * @param string|null $exampleValue 参数示例值
    *
    * @return $this
    */
    public function setExampleValue($exampleValue)
    {
        $this->container['exampleValue'] = $exampleValue;
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

