<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FunctionRef implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FunctionRef';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * refName  函数引用名称，需要和外层functions中的name对应
    * invokeMode  函数调用模式，目前只支持同步调用
    * arguments  函数执行时的入参，支持引用constants中的常量 定义方式：参数路径 | 常量值/常量路径 参数路径指输入参数的JsonPath路径，如$.a.b[0].c 常量值可以为数字类型，字符串类型(需要用单引号括起来)，布尔类型 常量路径为常量的JsonPath路径，但是根节点需要用$CONST表示，示例：$CONST.a.b
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'refName' => 'string',
            'invokeMode' => 'string',
            'arguments' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * refName  函数引用名称，需要和外层functions中的name对应
    * invokeMode  函数调用模式，目前只支持同步调用
    * arguments  函数执行时的入参，支持引用constants中的常量 定义方式：参数路径 | 常量值/常量路径 参数路径指输入参数的JsonPath路径，如$.a.b[0].c 常量值可以为数字类型，字符串类型(需要用单引号括起来)，布尔类型 常量路径为常量的JsonPath路径，但是根节点需要用$CONST表示，示例：$CONST.a.b
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'refName' => null,
        'invokeMode' => null,
        'arguments' => null
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
    * refName  函数引用名称，需要和外层functions中的name对应
    * invokeMode  函数调用模式，目前只支持同步调用
    * arguments  函数执行时的入参，支持引用constants中的常量 定义方式：参数路径 | 常量值/常量路径 参数路径指输入参数的JsonPath路径，如$.a.b[0].c 常量值可以为数字类型，字符串类型(需要用单引号括起来)，布尔类型 常量路径为常量的JsonPath路径，但是根节点需要用$CONST表示，示例：$CONST.a.b
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'refName' => 'ref_name',
            'invokeMode' => 'invoke_mode',
            'arguments' => 'arguments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * refName  函数引用名称，需要和外层functions中的name对应
    * invokeMode  函数调用模式，目前只支持同步调用
    * arguments  函数执行时的入参，支持引用constants中的常量 定义方式：参数路径 | 常量值/常量路径 参数路径指输入参数的JsonPath路径，如$.a.b[0].c 常量值可以为数字类型，字符串类型(需要用单引号括起来)，布尔类型 常量路径为常量的JsonPath路径，但是根节点需要用$CONST表示，示例：$CONST.a.b
    *
    * @var string[]
    */
    protected static $setters = [
            'refName' => 'setRefName',
            'invokeMode' => 'setInvokeMode',
            'arguments' => 'setArguments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * refName  函数引用名称，需要和外层functions中的name对应
    * invokeMode  函数调用模式，目前只支持同步调用
    * arguments  函数执行时的入参，支持引用constants中的常量 定义方式：参数路径 | 常量值/常量路径 参数路径指输入参数的JsonPath路径，如$.a.b[0].c 常量值可以为数字类型，字符串类型(需要用单引号括起来)，布尔类型 常量路径为常量的JsonPath路径，但是根节点需要用$CONST表示，示例：$CONST.a.b
    *
    * @var string[]
    */
    protected static $getters = [
            'refName' => 'getRefName',
            'invokeMode' => 'getInvokeMode',
            'arguments' => 'getArguments'
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
    const INVOKE_MODE_SYNCHRONIZE = 'synchronize';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvokeModeAllowableValues()
    {
        return [
            self::INVOKE_MODE_SYNCHRONIZE,
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
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['invokeMode'] = isset($data['invokeMode']) ? $data['invokeMode'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['refName'] === null) {
            $invalidProperties[] = "'refName' can't be null";
        }
            if ((mb_strlen($this->container['refName']) > 256)) {
                $invalidProperties[] = "invalid value for 'refName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['refName']) < 0)) {
                $invalidProperties[] = "invalid value for 'refName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getInvokeModeAllowableValues();
                if (!is_null($this->container['invokeMode']) && !in_array($this->container['invokeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invokeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['invokeMode']) && (mb_strlen($this->container['invokeMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'invokeMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['invokeMode']) && (mb_strlen($this->container['invokeMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'invokeMode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['arguments'] === null) {
            $invalidProperties[] = "'arguments' can't be null";
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
    * Gets refName
    *  函数引用名称，需要和外层functions中的name对应
    *
    * @return string
    */
    public function getRefName()
    {
        return $this->container['refName'];
    }

    /**
    * Sets refName
    *
    * @param string $refName 函数引用名称，需要和外层functions中的name对应
    *
    * @return $this
    */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;
        return $this;
    }

    /**
    * Gets invokeMode
    *  函数调用模式，目前只支持同步调用
    *
    * @return string|null
    */
    public function getInvokeMode()
    {
        return $this->container['invokeMode'];
    }

    /**
    * Sets invokeMode
    *
    * @param string|null $invokeMode 函数调用模式，目前只支持同步调用
    *
    * @return $this
    */
    public function setInvokeMode($invokeMode)
    {
        $this->container['invokeMode'] = $invokeMode;
        return $this;
    }

    /**
    * Gets arguments
    *  函数执行时的入参，支持引用constants中的常量 定义方式：参数路径 | 常量值/常量路径 参数路径指输入参数的JsonPath路径，如$.a.b[0].c 常量值可以为数字类型，字符串类型(需要用单引号括起来)，布尔类型 常量路径为常量的JsonPath路径，但是根节点需要用$CONST表示，示例：$CONST.a.b
    *
    * @return object
    */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
    * Sets arguments
    *
    * @param object $arguments 函数执行时的入参，支持引用constants中的常量 定义方式：参数路径 | 常量值/常量路径 参数路径指输入参数的JsonPath路径，如$.a.b[0].c 常量值可以为数字类型，字符串类型(需要用单引号括起来)，布尔类型 常量路径为常量的JsonPath路径，但是根节点需要用$CONST表示，示例：$CONST.a.b
    *
    * @return $this
    */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;
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

