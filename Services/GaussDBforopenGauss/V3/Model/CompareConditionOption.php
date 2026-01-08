<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareConditionOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareConditionOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**: 查询字段名称，当前仅支持特定的数值字段。 **约束限制**: 不涉及。 **取值范围**: - total_sql_time: 总SQL耗时。 - sql_time：SQL执行次数。  **默认取值**: 不涉及。
    * enableEqual  **参数解释**: 是否使能包含等于，如果为true，则表示包含边界条件（min或max）的取值。 **约束限制**: 不涉及。 **取值范围**: - true - false  **默认取值**: 不涉及。
    * min  **参数解释**: 最小值判断条件对应取值（大于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * max  **参数解释**: 最大值判断条件对应取值（小于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * value  **参数解释**: 等值判断条件对应取值（等于条件）。value的优先级最高，如果value不为空，则忽略min和max的取值设置；value为空时，才使能min和max的条件过滤。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'enableEqual' => 'bool',
            'min' => 'int',
            'max' => 'int',
            'value' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**: 查询字段名称，当前仅支持特定的数值字段。 **约束限制**: 不涉及。 **取值范围**: - total_sql_time: 总SQL耗时。 - sql_time：SQL执行次数。  **默认取值**: 不涉及。
    * enableEqual  **参数解释**: 是否使能包含等于，如果为true，则表示包含边界条件（min或max）的取值。 **约束限制**: 不涉及。 **取值范围**: - true - false  **默认取值**: 不涉及。
    * min  **参数解释**: 最小值判断条件对应取值（大于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * max  **参数解释**: 最大值判断条件对应取值（小于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * value  **参数解释**: 等值判断条件对应取值（等于条件）。value的优先级最高，如果value不为空，则忽略min和max的取值设置；value为空时，才使能min和max的条件过滤。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'enableEqual' => null,
        'min' => 'int64',
        'max' => 'int64',
        'value' => 'int64'
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
    * name  **参数解释**: 查询字段名称，当前仅支持特定的数值字段。 **约束限制**: 不涉及。 **取值范围**: - total_sql_time: 总SQL耗时。 - sql_time：SQL执行次数。  **默认取值**: 不涉及。
    * enableEqual  **参数解释**: 是否使能包含等于，如果为true，则表示包含边界条件（min或max）的取值。 **约束限制**: 不涉及。 **取值范围**: - true - false  **默认取值**: 不涉及。
    * min  **参数解释**: 最小值判断条件对应取值（大于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * max  **参数解释**: 最大值判断条件对应取值（小于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * value  **参数解释**: 等值判断条件对应取值（等于条件）。value的优先级最高，如果value不为空，则忽略min和max的取值设置；value为空时，才使能min和max的条件过滤。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'enableEqual' => 'enable_equal',
            'min' => 'min',
            'max' => 'max',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**: 查询字段名称，当前仅支持特定的数值字段。 **约束限制**: 不涉及。 **取值范围**: - total_sql_time: 总SQL耗时。 - sql_time：SQL执行次数。  **默认取值**: 不涉及。
    * enableEqual  **参数解释**: 是否使能包含等于，如果为true，则表示包含边界条件（min或max）的取值。 **约束限制**: 不涉及。 **取值范围**: - true - false  **默认取值**: 不涉及。
    * min  **参数解释**: 最小值判断条件对应取值（大于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * max  **参数解释**: 最大值判断条件对应取值（小于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * value  **参数解释**: 等值判断条件对应取值（等于条件）。value的优先级最高，如果value不为空，则忽略min和max的取值设置；value为空时，才使能min和max的条件过滤。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'enableEqual' => 'setEnableEqual',
            'min' => 'setMin',
            'max' => 'setMax',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**: 查询字段名称，当前仅支持特定的数值字段。 **约束限制**: 不涉及。 **取值范围**: - total_sql_time: 总SQL耗时。 - sql_time：SQL执行次数。  **默认取值**: 不涉及。
    * enableEqual  **参数解释**: 是否使能包含等于，如果为true，则表示包含边界条件（min或max）的取值。 **约束限制**: 不涉及。 **取值范围**: - true - false  **默认取值**: 不涉及。
    * min  **参数解释**: 最小值判断条件对应取值（大于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * max  **参数解释**: 最大值判断条件对应取值（小于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    * value  **参数解释**: 等值判断条件对应取值（等于条件）。value的优先级最高，如果value不为空，则忽略min和max的取值设置；value为空时，才使能min和max的条件过滤。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'enableEqual' => 'getEnableEqual',
            'min' => 'getMin',
            'max' => 'getMax',
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
        $this->container['enableEqual'] = isset($data['enableEqual']) ? $data['enableEqual'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    *  **参数解释**: 查询字段名称，当前仅支持特定的数值字段。 **约束限制**: 不涉及。 **取值范围**: - total_sql_time: 总SQL耗时。 - sql_time：SQL执行次数。  **默认取值**: 不涉及。
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
    * @param string $name **参数解释**: 查询字段名称，当前仅支持特定的数值字段。 **约束限制**: 不涉及。 **取值范围**: - total_sql_time: 总SQL耗时。 - sql_time：SQL执行次数。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enableEqual
    *  **参数解释**: 是否使能包含等于，如果为true，则表示包含边界条件（min或max）的取值。 **约束限制**: 不涉及。 **取值范围**: - true - false  **默认取值**: 不涉及。
    *
    * @return bool|null
    */
    public function getEnableEqual()
    {
        return $this->container['enableEqual'];
    }

    /**
    * Sets enableEqual
    *
    * @param bool|null $enableEqual **参数解释**: 是否使能包含等于，如果为true，则表示包含边界条件（min或max）的取值。 **约束限制**: 不涉及。 **取值范围**: - true - false  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setEnableEqual($enableEqual)
    {
        $this->container['enableEqual'] = $enableEqual;
        return $this;
    }

    /**
    * Gets min
    *  **参数解释**: 最小值判断条件对应取值（大于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int|null $min **参数解释**: 最小值判断条件对应取值（大于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets max
    *  **参数解释**: 最大值判断条件对应取值（小于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max **参数解释**: 最大值判断条件对应取值（小于条件）。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**: 等值判断条件对应取值（等于条件）。value的优先级最高，如果value不为空，则忽略min和max的取值设置；value为空时，才使能min和max的条件过滤。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param int|null $value **参数解释**: 等值判断条件对应取值（等于条件）。value的优先级最高，如果value不为空，则忽略min和max的取值设置；value为空时，才使能min和max的条件过滤。 **约束限制**: 不涉及。 **取值范围**: [0, 2^63-1] **默认取值**: 不涉及。
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

