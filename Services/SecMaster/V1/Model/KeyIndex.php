<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeyIndex implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeyIndex';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isChineseExist  是否包含中文
    * properties  嵌套结构
    * type  **参数解释**: 字段类型 - text 全文索引字段 - keyword 关键字类型，适用于精确匹配 - long 长整型 - integer 整型 - double 双精度浮点数 - float 单精度浮点数 - date 日期类型  **约束限制** 不涉及 **取值范围**: - text - keyword - long - integer - double - float - date  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isChineseExist' => 'bool',
            'properties' => 'map[string,\HuaweiCloud\SDK\SecMaster\V1\Model\KeyIndex]',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isChineseExist  是否包含中文
    * properties  嵌套结构
    * type  **参数解释**: 字段类型 - text 全文索引字段 - keyword 关键字类型，适用于精确匹配 - long 长整型 - integer 整型 - double 双精度浮点数 - float 单精度浮点数 - date 日期类型  **约束限制** 不涉及 **取值范围**: - text - keyword - long - integer - double - float - date  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isChineseExist' => null,
        'properties' => null,
        'type' => null
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
    * isChineseExist  是否包含中文
    * properties  嵌套结构
    * type  **参数解释**: 字段类型 - text 全文索引字段 - keyword 关键字类型，适用于精确匹配 - long 长整型 - integer 整型 - double 双精度浮点数 - float 单精度浮点数 - date 日期类型  **约束限制** 不涉及 **取值范围**: - text - keyword - long - integer - double - float - date  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isChineseExist' => 'is_chinese_exist',
            'properties' => 'properties',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isChineseExist  是否包含中文
    * properties  嵌套结构
    * type  **参数解释**: 字段类型 - text 全文索引字段 - keyword 关键字类型，适用于精确匹配 - long 长整型 - integer 整型 - double 双精度浮点数 - float 单精度浮点数 - date 日期类型  **约束限制** 不涉及 **取值范围**: - text - keyword - long - integer - double - float - date  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'isChineseExist' => 'setIsChineseExist',
            'properties' => 'setProperties',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isChineseExist  是否包含中文
    * properties  嵌套结构
    * type  **参数解释**: 字段类型 - text 全文索引字段 - keyword 关键字类型，适用于精确匹配 - long 长整型 - integer 整型 - double 双精度浮点数 - float 单精度浮点数 - date 日期类型  **约束限制** 不涉及 **取值范围**: - text - keyword - long - integer - double - float - date  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'isChineseExist' => 'getIsChineseExist',
            'properties' => 'getProperties',
            'type' => 'getType'
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
    const TYPE_TEXT = 'text';
    const TYPE_KEYWORD = 'keyword';
    const TYPE_LONG = 'long';
    const TYPE_INTEGER = 'integer';
    const TYPE_DOUBLE = 'double';
    const TYPE_FLOAT = 'float';
    const TYPE_DATE = 'date';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_KEYWORD,
            self::TYPE_LONG,
            self::TYPE_INTEGER,
            self::TYPE_DOUBLE,
            self::TYPE_FLOAT,
            self::TYPE_DATE,
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
        $this->container['isChineseExist'] = isset($data['isChineseExist']) ? $data['isChineseExist'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets isChineseExist
    *  是否包含中文
    *
    * @return bool|null
    */
    public function getIsChineseExist()
    {
        return $this->container['isChineseExist'];
    }

    /**
    * Sets isChineseExist
    *
    * @param bool|null $isChineseExist 是否包含中文
    *
    * @return $this
    */
    public function setIsChineseExist($isChineseExist)
    {
        $this->container['isChineseExist'] = $isChineseExist;
        return $this;
    }

    /**
    * Gets properties
    *  嵌套结构
    *
    * @return map[string,\HuaweiCloud\SDK\SecMaster\V1\Model\KeyIndex]|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param map[string,\HuaweiCloud\SDK\SecMaster\V1\Model\KeyIndex]|null $properties 嵌套结构
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 字段类型 - text 全文索引字段 - keyword 关键字类型，适用于精确匹配 - long 长整型 - integer 整型 - double 双精度浮点数 - float 单精度浮点数 - date 日期类型  **约束限制** 不涉及 **取值范围**: - text - keyword - long - integer - double - float - date  **默认值** 不涉及
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
    * @param string|null $type **参数解释**: 字段类型 - text 全文索引字段 - keyword 关键字类型，适用于精确匹配 - long 长整型 - integer 整型 - double 双精度浮点数 - float 单精度浮点数 - date 日期类型  **约束限制** 不涉及 **取值范围**: - text - keyword - long - integer - double - float - date  **默认值** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

