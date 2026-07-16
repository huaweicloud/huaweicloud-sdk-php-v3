<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeSelectorRequirement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeSelectorRequirement';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释**：选择器应用的标签键。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * operator  **参数解释**：表示键与一组值之间的关系。  **约束限制**：有效的运算符包括 In、NotIn、Exists、DoesNotExist、Gt 和 Lt。 **取值范围**： - In：表示键的值必须在给定的值列表中。例如，如果键是 color，值列表是 [\"red\", \"blue\"]，那么 color In [\"red\", \"blue\"] 表示 color 的值必须是 red 或 blue。 - NotIn：表示键的值不能在给定的值列表中。例如，color NotIn [\"red\", \"blue\"] 表示 color 的值不能是 red 或 blue。 - Exists：表示键必须存在，但对其值没有特定要求。例如，color Exists 表示必须存在 color 这个键，无论其值是什么。 - DoesNotExist：表示键不能存在。例如，color DoesNotExist 表示不能存在 color 这个键。 - Gt：表示键的值必须大于给定的值。例如，如果键是 age，age Gt 18 表示 age 的值必须大于 18。 - Lt：表示键的值必须小于给定的值。例如，age Lt 18 表示 age 的值必须小于 18。 **默认取值**：不涉及。
    * values  **参数解释**：一个字符串值数组。 **约束限制**：如果操作符是“In”或“NotIn”，则该值数组不能为空。如果操作符是“Exists”或“DoesNotExist”，则该值数组必须为空。如果操作符是“Gt”或“Lt”，则该值数组必须包含一个元素，该元素将被解释为整数。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'operator' => 'string',
            'values' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释**：选择器应用的标签键。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * operator  **参数解释**：表示键与一组值之间的关系。  **约束限制**：有效的运算符包括 In、NotIn、Exists、DoesNotExist、Gt 和 Lt。 **取值范围**： - In：表示键的值必须在给定的值列表中。例如，如果键是 color，值列表是 [\"red\", \"blue\"]，那么 color In [\"red\", \"blue\"] 表示 color 的值必须是 red 或 blue。 - NotIn：表示键的值不能在给定的值列表中。例如，color NotIn [\"red\", \"blue\"] 表示 color 的值不能是 red 或 blue。 - Exists：表示键必须存在，但对其值没有特定要求。例如，color Exists 表示必须存在 color 这个键，无论其值是什么。 - DoesNotExist：表示键不能存在。例如，color DoesNotExist 表示不能存在 color 这个键。 - Gt：表示键的值必须大于给定的值。例如，如果键是 age，age Gt 18 表示 age 的值必须大于 18。 - Lt：表示键的值必须小于给定的值。例如，age Lt 18 表示 age 的值必须小于 18。 **默认取值**：不涉及。
    * values  **参数解释**：一个字符串值数组。 **约束限制**：如果操作符是“In”或“NotIn”，则该值数组不能为空。如果操作符是“Exists”或“DoesNotExist”，则该值数组必须为空。如果操作符是“Gt”或“Lt”，则该值数组必须包含一个元素，该元素将被解释为整数。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'operator' => null,
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
    * key  **参数解释**：选择器应用的标签键。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * operator  **参数解释**：表示键与一组值之间的关系。  **约束限制**：有效的运算符包括 In、NotIn、Exists、DoesNotExist、Gt 和 Lt。 **取值范围**： - In：表示键的值必须在给定的值列表中。例如，如果键是 color，值列表是 [\"red\", \"blue\"]，那么 color In [\"red\", \"blue\"] 表示 color 的值必须是 red 或 blue。 - NotIn：表示键的值不能在给定的值列表中。例如，color NotIn [\"red\", \"blue\"] 表示 color 的值不能是 red 或 blue。 - Exists：表示键必须存在，但对其值没有特定要求。例如，color Exists 表示必须存在 color 这个键，无论其值是什么。 - DoesNotExist：表示键不能存在。例如，color DoesNotExist 表示不能存在 color 这个键。 - Gt：表示键的值必须大于给定的值。例如，如果键是 age，age Gt 18 表示 age 的值必须大于 18。 - Lt：表示键的值必须小于给定的值。例如，age Lt 18 表示 age 的值必须小于 18。 **默认取值**：不涉及。
    * values  **参数解释**：一个字符串值数组。 **约束限制**：如果操作符是“In”或“NotIn”，则该值数组不能为空。如果操作符是“Exists”或“DoesNotExist”，则该值数组必须为空。如果操作符是“Gt”或“Lt”，则该值数组必须包含一个元素，该元素将被解释为整数。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'operator' => 'operator',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释**：选择器应用的标签键。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * operator  **参数解释**：表示键与一组值之间的关系。  **约束限制**：有效的运算符包括 In、NotIn、Exists、DoesNotExist、Gt 和 Lt。 **取值范围**： - In：表示键的值必须在给定的值列表中。例如，如果键是 color，值列表是 [\"red\", \"blue\"]，那么 color In [\"red\", \"blue\"] 表示 color 的值必须是 red 或 blue。 - NotIn：表示键的值不能在给定的值列表中。例如，color NotIn [\"red\", \"blue\"] 表示 color 的值不能是 red 或 blue。 - Exists：表示键必须存在，但对其值没有特定要求。例如，color Exists 表示必须存在 color 这个键，无论其值是什么。 - DoesNotExist：表示键不能存在。例如，color DoesNotExist 表示不能存在 color 这个键。 - Gt：表示键的值必须大于给定的值。例如，如果键是 age，age Gt 18 表示 age 的值必须大于 18。 - Lt：表示键的值必须小于给定的值。例如，age Lt 18 表示 age 的值必须小于 18。 **默认取值**：不涉及。
    * values  **参数解释**：一个字符串值数组。 **约束限制**：如果操作符是“In”或“NotIn”，则该值数组不能为空。如果操作符是“Exists”或“DoesNotExist”，则该值数组必须为空。如果操作符是“Gt”或“Lt”，则该值数组必须包含一个元素，该元素将被解释为整数。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'operator' => 'setOperator',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释**：选择器应用的标签键。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * operator  **参数解释**：表示键与一组值之间的关系。  **约束限制**：有效的运算符包括 In、NotIn、Exists、DoesNotExist、Gt 和 Lt。 **取值范围**： - In：表示键的值必须在给定的值列表中。例如，如果键是 color，值列表是 [\"red\", \"blue\"]，那么 color In [\"red\", \"blue\"] 表示 color 的值必须是 red 或 blue。 - NotIn：表示键的值不能在给定的值列表中。例如，color NotIn [\"red\", \"blue\"] 表示 color 的值不能是 red 或 blue。 - Exists：表示键必须存在，但对其值没有特定要求。例如，color Exists 表示必须存在 color 这个键，无论其值是什么。 - DoesNotExist：表示键不能存在。例如，color DoesNotExist 表示不能存在 color 这个键。 - Gt：表示键的值必须大于给定的值。例如，如果键是 age，age Gt 18 表示 age 的值必须大于 18。 - Lt：表示键的值必须小于给定的值。例如，age Lt 18 表示 age 的值必须小于 18。 **默认取值**：不涉及。
    * values  **参数解释**：一个字符串值数组。 **约束限制**：如果操作符是“In”或“NotIn”，则该值数组不能为空。如果操作符是“Exists”或“DoesNotExist”，则该值数组必须为空。如果操作符是“Gt”或“Lt”，则该值数组必须包含一个元素，该元素将被解释为整数。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'operator' => 'getOperator',
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
    const OPERATOR_IN = 'In';
    const OPERATOR_NOT_IN = 'NotIn';
    const OPERATOR_EXISTS = 'Exists';
    const OPERATOR_DOES_NOT_EXIST = 'DoesNotExist';
    const OPERATOR_GT = 'Gt';
    const OPERATOR_LT = 'Lt';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_IN,
            self::OPERATOR_NOT_IN,
            self::OPERATOR_EXISTS,
            self::OPERATOR_DOES_NOT_EXIST,
            self::OPERATOR_GT,
            self::OPERATOR_LT,
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
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
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
            $allowedValues = $this->getOperatorAllowableValues();
                if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
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
    * Gets key
    *  **参数解释**：选择器应用的标签键。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string $key **参数解释**：选择器应用的标签键。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释**：表示键与一组值之间的关系。  **约束限制**：有效的运算符包括 In、NotIn、Exists、DoesNotExist、Gt 和 Lt。 **取值范围**： - In：表示键的值必须在给定的值列表中。例如，如果键是 color，值列表是 [\"red\", \"blue\"]，那么 color In [\"red\", \"blue\"] 表示 color 的值必须是 red 或 blue。 - NotIn：表示键的值不能在给定的值列表中。例如，color NotIn [\"red\", \"blue\"] 表示 color 的值不能是 red 或 blue。 - Exists：表示键必须存在，但对其值没有特定要求。例如，color Exists 表示必须存在 color 这个键，无论其值是什么。 - DoesNotExist：表示键不能存在。例如，color DoesNotExist 表示不能存在 color 这个键。 - Gt：表示键的值必须大于给定的值。例如，如果键是 age，age Gt 18 表示 age 的值必须大于 18。 - Lt：表示键的值必须小于给定的值。例如，age Lt 18 表示 age 的值必须小于 18。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string $operator **参数解释**：表示键与一组值之间的关系。  **约束限制**：有效的运算符包括 In、NotIn、Exists、DoesNotExist、Gt 和 Lt。 **取值范围**： - In：表示键的值必须在给定的值列表中。例如，如果键是 color，值列表是 [\"red\", \"blue\"]，那么 color In [\"red\", \"blue\"] 表示 color 的值必须是 red 或 blue。 - NotIn：表示键的值不能在给定的值列表中。例如，color NotIn [\"red\", \"blue\"] 表示 color 的值不能是 red 或 blue。 - Exists：表示键必须存在，但对其值没有特定要求。例如，color Exists 表示必须存在 color 这个键，无论其值是什么。 - DoesNotExist：表示键不能存在。例如，color DoesNotExist 表示不能存在 color 这个键。 - Gt：表示键的值必须大于给定的值。例如，如果键是 age，age Gt 18 表示 age 的值必须大于 18。 - Lt：表示键的值必须小于给定的值。例如，age Lt 18 表示 age 的值必须小于 18。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**：一个字符串值数组。 **约束限制**：如果操作符是“In”或“NotIn”，则该值数组不能为空。如果操作符是“Exists”或“DoesNotExist”，则该值数组必须为空。如果操作符是“Gt”或“Lt”，则该值数组必须包含一个元素，该元素将被解释为整数。 **取值范围**：不涉及。 **默认取值**：不涉及。
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
    * @param string[]|null $values **参数解释**：一个字符串值数组。 **约束限制**：如果操作符是“In”或“NotIn”，则该值数组不能为空。如果操作符是“Exists”或“DoesNotExist”，则该值数组必须为空。如果操作符是“Gt”或“Lt”，则该值数组必须包含一个元素，该元素将被解释为整数。 **取值范围**：不涉及。 **默认取值**：不涉及。
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

