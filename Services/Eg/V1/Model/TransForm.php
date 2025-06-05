<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransForm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  转换规则类型
    * value  常量类型规则时，字段为常量内容定义； 变量类型规则时，为变量定义，内容必须为JsonObject字符串。 变量最多支持100个，且不支持嵌套结构定义； 变量名由字母、数字、点、下划线和中划线组成，必须字母或数字开头不能以HC.开头，长度不超过64个字符； 变量值表达式支持常量或JsonPath表达式，字符串长度不超过1024个字符。
    * template  变量类型规则时，规则内容的模板定义，支持对已定义变量的引用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'value' => 'string',
            'template' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  转换规则类型
    * value  常量类型规则时，字段为常量内容定义； 变量类型规则时，为变量定义，内容必须为JsonObject字符串。 变量最多支持100个，且不支持嵌套结构定义； 变量名由字母、数字、点、下划线和中划线组成，必须字母或数字开头不能以HC.开头，长度不超过64个字符； 变量值表达式支持常量或JsonPath表达式，字符串长度不超过1024个字符。
    * template  变量类型规则时，规则内容的模板定义，支持对已定义变量的引用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'value' => null,
        'template' => null
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
    * type  转换规则类型
    * value  常量类型规则时，字段为常量内容定义； 变量类型规则时，为变量定义，内容必须为JsonObject字符串。 变量最多支持100个，且不支持嵌套结构定义； 变量名由字母、数字、点、下划线和中划线组成，必须字母或数字开头不能以HC.开头，长度不超过64个字符； 变量值表达式支持常量或JsonPath表达式，字符串长度不超过1024个字符。
    * template  变量类型规则时，规则内容的模板定义，支持对已定义变量的引用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'value' => 'value',
            'template' => 'template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  转换规则类型
    * value  常量类型规则时，字段为常量内容定义； 变量类型规则时，为变量定义，内容必须为JsonObject字符串。 变量最多支持100个，且不支持嵌套结构定义； 变量名由字母、数字、点、下划线和中划线组成，必须字母或数字开头不能以HC.开头，长度不超过64个字符； 变量值表达式支持常量或JsonPath表达式，字符串长度不超过1024个字符。
    * template  变量类型规则时，规则内容的模板定义，支持对已定义变量的引用。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'value' => 'setValue',
            'template' => 'setTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  转换规则类型
    * value  常量类型规则时，字段为常量内容定义； 变量类型规则时，为变量定义，内容必须为JsonObject字符串。 变量最多支持100个，且不支持嵌套结构定义； 变量名由字母、数字、点、下划线和中划线组成，必须字母或数字开头不能以HC.开头，长度不超过64个字符； 变量值表达式支持常量或JsonPath表达式，字符串长度不超过1024个字符。
    * template  变量类型规则时，规则内容的模板定义，支持对已定义变量的引用。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'value' => 'getValue',
            'template' => 'getTemplate'
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
    const TYPE_ORIGINAL = 'ORIGINAL';
    const TYPE_CONSTANT = 'CONSTANT';
    const TYPE_VARIABLE = 'VARIABLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ORIGINAL,
            self::TYPE_CONSTANT,
            self::TYPE_VARIABLE,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 1024)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['template']) && (mb_strlen($this->container['template']) > 2048)) {
                $invalidProperties[] = "invalid value for 'template', the character length must be smaller than or equal to 2048.";
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
    * Gets type
    *  转换规则类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 转换规则类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  常量类型规则时，字段为常量内容定义； 变量类型规则时，为变量定义，内容必须为JsonObject字符串。 变量最多支持100个，且不支持嵌套结构定义； 变量名由字母、数字、点、下划线和中划线组成，必须字母或数字开头不能以HC.开头，长度不超过64个字符； 变量值表达式支持常量或JsonPath表达式，字符串长度不超过1024个字符。
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
    * @param string|null $value 常量类型规则时，字段为常量内容定义； 变量类型规则时，为变量定义，内容必须为JsonObject字符串。 变量最多支持100个，且不支持嵌套结构定义； 变量名由字母、数字、点、下划线和中划线组成，必须字母或数字开头不能以HC.开头，长度不超过64个字符； 变量值表达式支持常量或JsonPath表达式，字符串长度不超过1024个字符。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets template
    *  变量类型规则时，规则内容的模板定义，支持对已定义变量的引用。
    *
    * @return string|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string|null $template 变量类型规则时，规则内容的模板定义，支持对已定义变量的引用。
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
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

