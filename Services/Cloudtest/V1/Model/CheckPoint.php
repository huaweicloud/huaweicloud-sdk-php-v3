<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * comparison  运算符
    * description  描述信息
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * property  属性名称
    * value  值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'comparison' => 'string',
            'description' => 'string',
            'functionArg' => 'string',
            'functionType' => 'string',
            'property' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * comparison  运算符
    * description  描述信息
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * property  属性名称
    * value  值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'comparison' => null,
        'description' => null,
        'functionArg' => null,
        'functionType' => null,
        'property' => null,
        'value' => null
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
    * comparison  运算符
    * description  描述信息
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * property  属性名称
    * value  值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'comparison' => 'comparison',
            'description' => 'description',
            'functionArg' => 'function_arg',
            'functionType' => 'function_type',
            'property' => 'property',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * comparison  运算符
    * description  描述信息
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * property  属性名称
    * value  值
    *
    * @var string[]
    */
    protected static $setters = [
            'comparison' => 'setComparison',
            'description' => 'setDescription',
            'functionArg' => 'setFunctionArg',
            'functionType' => 'setFunctionType',
            'property' => 'setProperty',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * comparison  运算符
    * description  描述信息
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * property  属性名称
    * value  值
    *
    * @var string[]
    */
    protected static $getters = [
            'comparison' => 'getComparison',
            'description' => 'getDescription',
            'functionArg' => 'getFunctionArg',
            'functionType' => 'getFunctionType',
            'property' => 'getProperty',
            'value' => 'getValue'
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
    const FUNCTION_TYPE_REGEX = 'REGEX';
    const FUNCTION_TYPE_SUBSTRING = 'SUBSTRING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFunctionTypeAllowableValues()
    {
        return [
            self::FUNCTION_TYPE_REGEX,
            self::FUNCTION_TYPE_SUBSTRING,
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
        $this->container['comparison'] = isset($data['comparison']) ? $data['comparison'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['functionArg'] = isset($data['functionArg']) ? $data['functionArg'] : null;
        $this->container['functionType'] = isset($data['functionType']) ? $data['functionType'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFunctionTypeAllowableValues();
                if (!is_null($this->container['functionType']) && !in_array($this->container['functionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'functionType', must be one of '%s'",
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
    * Gets comparison
    *  运算符
    *
    * @return string|null
    */
    public function getComparison()
    {
        return $this->container['comparison'];
    }

    /**
    * Sets comparison
    *
    * @param string|null $comparison 运算符
    *
    * @return $this
    */
    public function setComparison($comparison)
    {
        $this->container['comparison'] = $comparison;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets functionArg
    *  响应提取时要使用什么方法处理参数
    *
    * @return string|null
    */
    public function getFunctionArg()
    {
        return $this->container['functionArg'];
    }

    /**
    * Sets functionArg
    *
    * @param string|null $functionArg 响应提取时要使用什么方法处理参数
    *
    * @return $this
    */
    public function setFunctionArg($functionArg)
    {
        $this->container['functionArg'] = $functionArg;
        return $this;
    }

    /**
    * Gets functionType
    *  响应提取时要使用什么方法处理参数
    *
    * @return string|null
    */
    public function getFunctionType()
    {
        return $this->container['functionType'];
    }

    /**
    * Sets functionType
    *
    * @param string|null $functionType 响应提取时要使用什么方法处理参数
    *
    * @return $this
    */
    public function setFunctionType($functionType)
    {
        $this->container['functionType'] = $functionType;
        return $this;
    }

    /**
    * Gets property
    *  属性名称
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property 属性名称
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets value
    *  值
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
    * @param string|null $value 值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

