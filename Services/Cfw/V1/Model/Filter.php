<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Filter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Filter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * field  **参数解释**： 日志字段，如src_ip **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * operator  **参数解释**： 操作符 **约束限制**： 不涉及 **取值范围**： equal 等于 not_equal 不等于 contain 包含 starts_with 以开始 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'field' => 'string',
            'values' => 'string[]',
            'operator' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * field  **参数解释**： 日志字段，如src_ip **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * operator  **参数解释**： 操作符 **约束限制**： 不涉及 **取值范围**： equal 等于 not_equal 不等于 contain 包含 starts_with 以开始 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'field' => null,
        'values' => null,
        'operator' => null
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
    * field  **参数解释**： 日志字段，如src_ip **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * operator  **参数解释**： 操作符 **约束限制**： 不涉及 **取值范围**： equal 等于 not_equal 不等于 contain 包含 starts_with 以开始 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'field' => 'field',
            'values' => 'values',
            'operator' => 'operator'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * field  **参数解释**： 日志字段，如src_ip **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * operator  **参数解释**： 操作符 **约束限制**： 不涉及 **取值范围**： equal 等于 not_equal 不等于 contain 包含 starts_with 以开始 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'field' => 'setField',
            'values' => 'setValues',
            'operator' => 'setOperator'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * field  **参数解释**： 日志字段，如src_ip **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * values  **参数解释**： 值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * operator  **参数解释**： 操作符 **约束限制**： 不涉及 **取值范围**： equal 等于 not_equal 不等于 contain 包含 starts_with 以开始 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'field' => 'getField',
            'values' => 'getValues',
            'operator' => 'getOperator'
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
    const OPERATOR_EQUAL = 'equal';
    const OPERATOR_NOT_EQUAL = 'not_equal';
    const OPERATOR_CONTAIN = 'contain';
    const OPERATOR_STARTS_WITH = 'starts_with';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_EQUAL,
            self::OPERATOR_NOT_EQUAL,
            self::OPERATOR_CONTAIN,
            self::OPERATOR_STARTS_WITH,
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
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
            if ((mb_strlen($this->container['field']) > 64)) {
                $invalidProperties[] = "invalid value for 'field', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['field']) < 1)) {
                $invalidProperties[] = "invalid value for 'field', the character length must be bigger than or equal to 1.";
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
    * Gets field
    *  **参数解释**： 日志字段，如src_ip **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
    * Sets field
    *
    * @param string $field **参数解释**： 日志字段，如src_ip **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setField($field)
    {
        $this->container['field'] = $field;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**： 值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string[]|null $values **参数解释**： 值 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
        return $this;
    }

    /**
    * Gets operator
    *  **参数解释**： 操作符 **约束限制**： 不涉及 **取值范围**： equal 等于 not_equal 不等于 contain 包含 starts_with 以开始 **默认取值**： 不涉及
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
    * @param string $operator **参数解释**： 操作符 **约束限制**： 不涉及 **取值范围**： equal 等于 not_equal 不等于 contain 包含 starts_with 以开始 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
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

