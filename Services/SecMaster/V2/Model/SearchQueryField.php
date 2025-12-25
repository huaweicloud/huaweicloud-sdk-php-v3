<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchQueryField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchQueryField';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  字段名
    * type  **参数解释**: 数据类型 - boolean 布尔型 - byte 字节型 - short 短整型 - integer 整型 - long 长整型 - float 单精度浮点型 - half_float 半精度浮点型 - scaled_float 缩放浮点型 - double 双精度浮点型 - keyword 关键字型 - text 文本型 - date 日期型 - ip IP地址型 - binary 二进制型 - object 对象型 - nested 嵌套型  **约束限制** 不涉及 **取值范围**: - boolean - byte - short - integer - long - float - half_float - scaled_float - double - keyword - text - date - ip - binary - object - nested  **默认值** 不涉及
    * alias  字段别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'alias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  字段名
    * type  **参数解释**: 数据类型 - boolean 布尔型 - byte 字节型 - short 短整型 - integer 整型 - long 长整型 - float 单精度浮点型 - half_float 半精度浮点型 - scaled_float 缩放浮点型 - double 双精度浮点型 - keyword 关键字型 - text 文本型 - date 日期型 - ip IP地址型 - binary 二进制型 - object 对象型 - nested 嵌套型  **约束限制** 不涉及 **取值范围**: - boolean - byte - short - integer - long - float - half_float - scaled_float - double - keyword - text - date - ip - binary - object - nested  **默认值** 不涉及
    * alias  字段别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'alias' => null
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
    * name  字段名
    * type  **参数解释**: 数据类型 - boolean 布尔型 - byte 字节型 - short 短整型 - integer 整型 - long 长整型 - float 单精度浮点型 - half_float 半精度浮点型 - scaled_float 缩放浮点型 - double 双精度浮点型 - keyword 关键字型 - text 文本型 - date 日期型 - ip IP地址型 - binary 二进制型 - object 对象型 - nested 嵌套型  **约束限制** 不涉及 **取值范围**: - boolean - byte - short - integer - long - float - half_float - scaled_float - double - keyword - text - date - ip - binary - object - nested  **默认值** 不涉及
    * alias  字段别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'alias' => 'alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  字段名
    * type  **参数解释**: 数据类型 - boolean 布尔型 - byte 字节型 - short 短整型 - integer 整型 - long 长整型 - float 单精度浮点型 - half_float 半精度浮点型 - scaled_float 缩放浮点型 - double 双精度浮点型 - keyword 关键字型 - text 文本型 - date 日期型 - ip IP地址型 - binary 二进制型 - object 对象型 - nested 嵌套型  **约束限制** 不涉及 **取值范围**: - boolean - byte - short - integer - long - float - half_float - scaled_float - double - keyword - text - date - ip - binary - object - nested  **默认值** 不涉及
    * alias  字段别名
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'alias' => 'setAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  字段名
    * type  **参数解释**: 数据类型 - boolean 布尔型 - byte 字节型 - short 短整型 - integer 整型 - long 长整型 - float 单精度浮点型 - half_float 半精度浮点型 - scaled_float 缩放浮点型 - double 双精度浮点型 - keyword 关键字型 - text 文本型 - date 日期型 - ip IP地址型 - binary 二进制型 - object 对象型 - nested 嵌套型  **约束限制** 不涉及 **取值范围**: - boolean - byte - short - integer - long - float - half_float - scaled_float - double - keyword - text - date - ip - binary - object - nested  **默认值** 不涉及
    * alias  字段别名
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'alias' => 'getAlias'
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
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_BYTE = 'byte';
    const TYPE_SHORT = 'short';
    const TYPE_INTEGER = 'integer';
    const TYPE_LONG = 'long';
    const TYPE_FLOAT = 'float';
    const TYPE_HALF_FLOAT = 'half_float';
    const TYPE_SCALED_FLOAT = 'scaled_float';
    const TYPE_DOUBLE = 'double';
    const TYPE_KEYWORD = 'keyword';
    const TYPE_TEXT = 'text';
    const TYPE_DATE = 'date';
    const TYPE_IP = 'ip';
    const TYPE_BINARY = 'binary';
    const TYPE_OBJECT = 'object';
    const TYPE_NESTED = 'nested';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BOOLEAN,
            self::TYPE_BYTE,
            self::TYPE_SHORT,
            self::TYPE_INTEGER,
            self::TYPE_LONG,
            self::TYPE_FLOAT,
            self::TYPE_HALF_FLOAT,
            self::TYPE_SCALED_FLOAT,
            self::TYPE_DOUBLE,
            self::TYPE_KEYWORD,
            self::TYPE_TEXT,
            self::TYPE_DATE,
            self::TYPE_IP,
            self::TYPE_BINARY,
            self::TYPE_OBJECT,
            self::TYPE_NESTED,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
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
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
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

            if ((mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) > 256)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['alias']) && (mb_strlen($this->container['alias']) < 1)) {
                $invalidProperties[] = "invalid value for 'alias', the character length must be bigger than or equal to 1.";
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
    *  字段名
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
    * @param string $name 字段名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 数据类型 - boolean 布尔型 - byte 字节型 - short 短整型 - integer 整型 - long 长整型 - float 单精度浮点型 - half_float 半精度浮点型 - scaled_float 缩放浮点型 - double 双精度浮点型 - keyword 关键字型 - text 文本型 - date 日期型 - ip IP地址型 - binary 二进制型 - object 对象型 - nested 嵌套型  **约束限制** 不涉及 **取值范围**: - boolean - byte - short - integer - long - float - half_float - scaled_float - double - keyword - text - date - ip - binary - object - nested  **默认值** 不涉及
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
    * @param string $type **参数解释**: 数据类型 - boolean 布尔型 - byte 字节型 - short 短整型 - integer 整型 - long 长整型 - float 单精度浮点型 - half_float 半精度浮点型 - scaled_float 缩放浮点型 - double 双精度浮点型 - keyword 关键字型 - text 文本型 - date 日期型 - ip IP地址型 - binary 二进制型 - object 对象型 - nested 嵌套型  **约束限制** 不涉及 **取值范围**: - boolean - byte - short - integer - long - float - half_float - scaled_float - double - keyword - text - date - ip - binary - object - nested  **默认值** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets alias
    *  字段别名
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 字段别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
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

