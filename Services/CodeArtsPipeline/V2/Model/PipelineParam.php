<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramType  流水线参数类型
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string',
            'description' => 'string',
            'paramType' => 'string',
            'isStatic' => 'bool',
            'isDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramType  流水线参数类型
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'description' => null,
        'paramType' => null,
        'isStatic' => null,
        'isDefault' => null
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
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramType  流水线参数类型
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value',
            'description' => 'description',
            'paramType' => 'param_type',
            'isStatic' => 'is_static',
            'isDefault' => 'is_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramType  流水线参数类型
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue',
            'description' => 'setDescription',
            'paramType' => 'setParamType',
            'isStatic' => 'setIsStatic',
            'isDefault' => 'setIsDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  流水线参数名字
    * value  流水线参数值
    * description  流水线参数描述
    * paramType  流水线参数类型
    * isStatic  是否静态参数
    * isDefault  是否默认参数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue',
            'description' => 'getDescription',
            'paramType' => 'getParamType',
            'isStatic' => 'getIsStatic',
            'isDefault' => 'getIsDefault'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['paramType'] = isset($data['paramType']) ? $data['paramType'] : null;
        $this->container['isStatic'] = isset($data['isStatic']) ? $data['isStatic'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['paramType'] === null) {
            $invalidProperties[] = "'paramType' can't be null";
        }
        if ($this->container['isStatic'] === null) {
            $invalidProperties[] = "'isStatic' can't be null";
        }
        if ($this->container['isDefault'] === null) {
            $invalidProperties[] = "'isDefault' can't be null";
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
    *  流水线参数名字
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 流水线参数名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  流水线参数值
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 流水线参数值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets description
    *  流水线参数描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 流水线参数描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets paramType
    *  流水线参数类型
    *
    * @return string
    */
    public function getParamType()
    {
        return $this->container['paramType'];
    }

    /**
    * Sets paramType
    *
    * @param string $paramType 流水线参数类型
    *
    * @return $this
    */
    public function setParamType($paramType)
    {
        $this->container['paramType'] = $paramType;
        return $this;
    }

    /**
    * Gets isStatic
    *  是否静态参数
    *
    * @return bool
    */
    public function getIsStatic()
    {
        return $this->container['isStatic'];
    }

    /**
    * Sets isStatic
    *
    * @param bool $isStatic 是否静态参数
    *
    * @return $this
    */
    public function setIsStatic($isStatic)
    {
        $this->container['isStatic'] = $isStatic;
        return $this;
    }

    /**
    * Gets isDefault
    *  是否默认参数
    *
    * @return bool
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool $isDefault 是否默认参数
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
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

