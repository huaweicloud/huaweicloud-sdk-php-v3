<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conditionExpression  **参数解释：** 触发告警的条件表达式。 **约束限制：** - 不支持纯数字。 - 不支持以数字开头的。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 触发的告警级别。 **约束限制：** 不支持纯数字，不支持以数字开头的。 **取值范围：** - Info：提示 - Minor：次要 - Major：重要 - Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conditionExpression' => 'string',
            'alarmLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conditionExpression  **参数解释：** 触发告警的条件表达式。 **约束限制：** - 不支持纯数字。 - 不支持以数字开头的。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 触发的告警级别。 **约束限制：** 不支持纯数字，不支持以数字开头的。 **取值范围：** - Info：提示 - Minor：次要 - Major：重要 - Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conditionExpression' => null,
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
    * conditionExpression  **参数解释：** 触发告警的条件表达式。 **约束限制：** - 不支持纯数字。 - 不支持以数字开头的。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 触发的告警级别。 **约束限制：** 不支持纯数字，不支持以数字开头的。 **取值范围：** - Info：提示 - Minor：次要 - Major：重要 - Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conditionExpression' => 'condition_expression',
            'alarmLevel' => 'alarm_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conditionExpression  **参数解释：** 触发告警的条件表达式。 **约束限制：** - 不支持纯数字。 - 不支持以数字开头的。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 触发的告警级别。 **约束限制：** 不支持纯数字，不支持以数字开头的。 **取值范围：** - Info：提示 - Minor：次要 - Major：重要 - Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'conditionExpression' => 'setConditionExpression',
            'alarmLevel' => 'setAlarmLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conditionExpression  **参数解释：** 触发告警的条件表达式。 **约束限制：** - 不支持纯数字。 - 不支持以数字开头的。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * alarmLevel  **参数解释：** 触发的告警级别。 **约束限制：** 不支持纯数字，不支持以数字开头的。 **取值范围：** - Info：提示 - Minor：次要 - Major：重要 - Critical：紧急 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'conditionExpression' => 'getConditionExpression',
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
        $this->container['conditionExpression'] = isset($data['conditionExpression']) ? $data['conditionExpression'] : null;
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
        if ($this->container['conditionExpression'] === null) {
            $invalidProperties[] = "'conditionExpression' can't be null";
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
    * Gets conditionExpression
    *  **参数解释：** 触发告警的条件表达式。 **约束限制：** - 不支持纯数字。 - 不支持以数字开头的。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getConditionExpression()
    {
        return $this->container['conditionExpression'];
    }

    /**
    * Sets conditionExpression
    *
    * @param string $conditionExpression **参数解释：** 触发告警的条件表达式。 **约束限制：** - 不支持纯数字。 - 不支持以数字开头的。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setConditionExpression($conditionExpression)
    {
        $this->container['conditionExpression'] = $conditionExpression;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  **参数解释：** 触发的告警级别。 **约束限制：** 不支持纯数字，不支持以数字开头的。 **取值范围：** - Info：提示 - Minor：次要 - Major：重要 - Critical：紧急 **默认取值：** 不涉及。
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
    * @param string $alarmLevel **参数解释：** 触发的告警级别。 **约束限制：** 不支持纯数字，不支持以数字开头的。 **取值范围：** - Info：提示 - Minor：次要 - Major：重要 - Critical：紧急 **默认取值：** 不涉及。
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

