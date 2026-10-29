<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeywordsAlarmConditions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeywordsAlarmConditions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * condition  **参数解释：** 触发条件，即满足该条件时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * number  **参数解释：** 匹配条数。当关键词搜索结果的日志条数达到设定的条数时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 告警级别。 **约束限制：** 不涉及。 **取值范围：** -   Info：提示 -   Minor：次要 -   Major：重要 -   Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'condition' => 'string',
            'number' => 'int',
            'alarmLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * condition  **参数解释：** 触发条件，即满足该条件时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * number  **参数解释：** 匹配条数。当关键词搜索结果的日志条数达到设定的条数时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 告警级别。 **约束限制：** 不涉及。 **取值范围：** -   Info：提示 -   Minor：次要 -   Major：重要 -   Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'condition' => null,
        'number' => 'int32',
        'alarmLevel' => null
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
    * condition  **参数解释：** 触发条件，即满足该条件时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * number  **参数解释：** 匹配条数。当关键词搜索结果的日志条数达到设定的条数时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 告警级别。 **约束限制：** 不涉及。 **取值范围：** -   Info：提示 -   Minor：次要 -   Major：重要 -   Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'condition' => 'condition',
            'number' => 'number',
            'alarmLevel' => 'alarm_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * condition  **参数解释：** 触发条件，即满足该条件时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * number  **参数解释：** 匹配条数。当关键词搜索结果的日志条数达到设定的条数时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 告警级别。 **约束限制：** 不涉及。 **取值范围：** -   Info：提示 -   Minor：次要 -   Major：重要 -   Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'condition' => 'setCondition',
            'number' => 'setNumber',
            'alarmLevel' => 'setAlarmLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * condition  **参数解释：** 触发条件，即满足该条件时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * number  **参数解释：** 匹配条数。当关键词搜索结果的日志条数达到设定的条数时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 告警级别。 **约束限制：** 不涉及。 **取值范围：** -   Info：提示 -   Minor：次要 -   Major：重要 -   Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'condition' => 'getCondition',
            'number' => 'getNumber',
            'alarmLevel' => 'getAlarmLevel'
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['alarmLevel'] === null) {
            $invalidProperties[] = "'alarmLevel' can't be null";
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
    * Gets condition
    *  **参数解释：** 触发条件，即满足该条件时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    * @param string $condition **参数解释：** 触发条件，即满足该条件时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets number
    *  **参数解释：** 匹配条数。当关键词搜索结果的日志条数达到设定的条数时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param int $number **参数解释：** 匹配条数。当关键词搜索结果的日志条数达到设定的条数时，会触发告警。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  **参数解释：** 告警级别。 **约束限制：** 不涉及。 **取值范围：** -   Info：提示 -   Minor：次要 -   Major：重要 -   Critical：紧急 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string $alarmLevel **参数解释：** 告警级别。 **约束限制：** 不涉及。 **取值范围：** -   Info：提示 -   Minor：次要 -   Major：重要 -   Critical：紧急 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
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

