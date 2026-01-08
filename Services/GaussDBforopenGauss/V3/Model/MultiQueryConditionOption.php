<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiQueryConditionOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiQueryConditionOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 查询字段名称。 **约束限制**： 只支持字符串\"query\"。 **取值范围**： 由英文字母（大小写）、数字或下划线组成，长度为 1 至 128 个字符。 **默认取值**： 不涉及。
    * condition  **参数解释**: 组合条件类型。 **约束限制**: 不涉及。 **取值范围**: 仅限字符串：\"AND\"、\"OR\"。 **默认取值**: 不涉及。
    * isFuzzy  **参数解释**: 多个过滤检索条件内容集合。 **约束限制**: 只支持为true进行模糊查询。 **取值范围**: - true：模糊查询。 - false：精确匹配。  **默认取值**: true
    * values  **参数解释**: 多个过滤检索条件内容集合。由 1 至 5 个字符串组成的列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'condition' => 'string',
            'isFuzzy' => 'bool',
            'values' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 查询字段名称。 **约束限制**： 只支持字符串\"query\"。 **取值范围**： 由英文字母（大小写）、数字或下划线组成，长度为 1 至 128 个字符。 **默认取值**： 不涉及。
    * condition  **参数解释**: 组合条件类型。 **约束限制**: 不涉及。 **取值范围**: 仅限字符串：\"AND\"、\"OR\"。 **默认取值**: 不涉及。
    * isFuzzy  **参数解释**: 多个过滤检索条件内容集合。 **约束限制**: 只支持为true进行模糊查询。 **取值范围**: - true：模糊查询。 - false：精确匹配。  **默认取值**: true
    * values  **参数解释**: 多个过滤检索条件内容集合。由 1 至 5 个字符串组成的列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'condition' => null,
        'isFuzzy' => null,
        'values' => null
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
    * name  **参数解释**： 查询字段名称。 **约束限制**： 只支持字符串\"query\"。 **取值范围**： 由英文字母（大小写）、数字或下划线组成，长度为 1 至 128 个字符。 **默认取值**： 不涉及。
    * condition  **参数解释**: 组合条件类型。 **约束限制**: 不涉及。 **取值范围**: 仅限字符串：\"AND\"、\"OR\"。 **默认取值**: 不涉及。
    * isFuzzy  **参数解释**: 多个过滤检索条件内容集合。 **约束限制**: 只支持为true进行模糊查询。 **取值范围**: - true：模糊查询。 - false：精确匹配。  **默认取值**: true
    * values  **参数解释**: 多个过滤检索条件内容集合。由 1 至 5 个字符串组成的列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'condition' => 'condition',
            'isFuzzy' => 'is_fuzzy',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 查询字段名称。 **约束限制**： 只支持字符串\"query\"。 **取值范围**： 由英文字母（大小写）、数字或下划线组成，长度为 1 至 128 个字符。 **默认取值**： 不涉及。
    * condition  **参数解释**: 组合条件类型。 **约束限制**: 不涉及。 **取值范围**: 仅限字符串：\"AND\"、\"OR\"。 **默认取值**: 不涉及。
    * isFuzzy  **参数解释**: 多个过滤检索条件内容集合。 **约束限制**: 只支持为true进行模糊查询。 **取值范围**: - true：模糊查询。 - false：精确匹配。  **默认取值**: true
    * values  **参数解释**: 多个过滤检索条件内容集合。由 1 至 5 个字符串组成的列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'condition' => 'setCondition',
            'isFuzzy' => 'setIsFuzzy',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 查询字段名称。 **约束限制**： 只支持字符串\"query\"。 **取值范围**： 由英文字母（大小写）、数字或下划线组成，长度为 1 至 128 个字符。 **默认取值**： 不涉及。
    * condition  **参数解释**: 组合条件类型。 **约束限制**: 不涉及。 **取值范围**: 仅限字符串：\"AND\"、\"OR\"。 **默认取值**: 不涉及。
    * isFuzzy  **参数解释**: 多个过滤检索条件内容集合。 **约束限制**: 只支持为true进行模糊查询。 **取值范围**: - true：模糊查询。 - false：精确匹配。  **默认取值**: true
    * values  **参数解释**: 多个过滤检索条件内容集合。由 1 至 5 个字符串组成的列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'condition' => 'getCondition',
            'isFuzzy' => 'getIsFuzzy',
            'values' => 'getValues'
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
    const CONDITION__OR = 'OR';
    const CONDITION__AND = 'AND';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__OR,
            self::CONDITION__AND,
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['isFuzzy'] = isset($data['isFuzzy']) ? $data['isFuzzy'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
            $allowedValues = $this->getConditionAllowableValues();
                if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    *  **参数解释**： 查询字段名称。 **约束限制**： 只支持字符串\"query\"。 **取值范围**： 由英文字母（大小写）、数字或下划线组成，长度为 1 至 128 个字符。 **默认取值**： 不涉及。
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
    * @param string $name **参数解释**： 查询字段名称。 **约束限制**： 只支持字符串\"query\"。 **取值范围**： 由英文字母（大小写）、数字或下划线组成，长度为 1 至 128 个字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets condition
    *  **参数解释**: 组合条件类型。 **约束限制**: 不涉及。 **取值范围**: 仅限字符串：\"AND\"、\"OR\"。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string $condition **参数解释**: 组合条件类型。 **约束限制**: 不涉及。 **取值范围**: 仅限字符串：\"AND\"、\"OR\"。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets isFuzzy
    *  **参数解释**: 多个过滤检索条件内容集合。 **约束限制**: 只支持为true进行模糊查询。 **取值范围**: - true：模糊查询。 - false：精确匹配。  **默认取值**: true
    *
    * @return bool|null
    */
    public function getIsFuzzy()
    {
        return $this->container['isFuzzy'];
    }

    /**
    * Sets isFuzzy
    *
    * @param bool|null $isFuzzy **参数解释**: 多个过滤检索条件内容集合。 **约束限制**: 只支持为true进行模糊查询。 **取值范围**: - true：模糊查询。 - false：精确匹配。  **默认取值**: true
    *
    * @return $this
    */
    public function setIsFuzzy($isFuzzy)
    {
        $this->container['isFuzzy'] = $isFuzzy;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**: 多个过滤检索条件内容集合。由 1 至 5 个字符串组成的列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string[]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[] $values **参数解释**: 多个过滤检索条件内容集合。由 1 至 5 个字符串组成的列表。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

