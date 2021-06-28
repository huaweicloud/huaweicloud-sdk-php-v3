<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConditionGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConditionGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conditions  **参数说明**：规则的条件列表，单个规则最多支持设置10个条件。
    * logic  **参数说明**：规则条件列表中多个条件之间的逻辑关系，默认值：and。 **取值范围**： - and：逻辑且。 - or：逻辑或。
    * timeRange  timeRange
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conditions' => '\HuaweiCloud\SDK\IoTDA\V5\Model\RuleCondition[]',
            'logic' => 'string',
            'timeRange' => '\HuaweiCloud\SDK\IoTDA\V5\Model\TimeRange'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conditions  **参数说明**：规则的条件列表，单个规则最多支持设置10个条件。
    * logic  **参数说明**：规则条件列表中多个条件之间的逻辑关系，默认值：and。 **取值范围**： - and：逻辑且。 - or：逻辑或。
    * timeRange  timeRange
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conditions' => null,
        'logic' => null,
        'timeRange' => null
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
    * conditions  **参数说明**：规则的条件列表，单个规则最多支持设置10个条件。
    * logic  **参数说明**：规则条件列表中多个条件之间的逻辑关系，默认值：and。 **取值范围**： - and：逻辑且。 - or：逻辑或。
    * timeRange  timeRange
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conditions' => 'conditions',
            'logic' => 'logic',
            'timeRange' => 'time_range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conditions  **参数说明**：规则的条件列表，单个规则最多支持设置10个条件。
    * logic  **参数说明**：规则条件列表中多个条件之间的逻辑关系，默认值：and。 **取值范围**： - and：逻辑且。 - or：逻辑或。
    * timeRange  timeRange
    *
    * @var string[]
    */
    protected static $setters = [
            'conditions' => 'setConditions',
            'logic' => 'setLogic',
            'timeRange' => 'setTimeRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conditions  **参数说明**：规则的条件列表，单个规则最多支持设置10个条件。
    * logic  **参数说明**：规则条件列表中多个条件之间的逻辑关系，默认值：and。 **取值范围**： - and：逻辑且。 - or：逻辑或。
    * timeRange  timeRange
    *
    * @var string[]
    */
    protected static $getters = [
            'conditions' => 'getConditions',
            'logic' => 'getLogic',
            'timeRange' => 'getTimeRange'
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
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['logic'] = isset($data['logic']) ? $data['logic'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logic']) && !preg_match("/(and|or)/", $this->container['logic'])) {
                $invalidProperties[] = "invalid value for 'logic', must be conform to the pattern /(and|or)/.";
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
    * Gets conditions
    *  **参数说明**：规则的条件列表，单个规则最多支持设置10个条件。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\RuleCondition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\RuleCondition[]|null $conditions **参数说明**：规则的条件列表，单个规则最多支持设置10个条件。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets logic
    *  **参数说明**：规则条件列表中多个条件之间的逻辑关系，默认值：and。 **取值范围**： - and：逻辑且。 - or：逻辑或。
    *
    * @return string|null
    */
    public function getLogic()
    {
        return $this->container['logic'];
    }

    /**
    * Sets logic
    *
    * @param string|null $logic **参数说明**：规则条件列表中多个条件之间的逻辑关系，默认值：and。 **取值范围**： - and：逻辑且。 - or：逻辑或。
    *
    * @return $this
    */
    public function setLogic($logic)
    {
        $this->container['logic'] = $logic;
        return $this;
    }

    /**
    * Gets timeRange
    *  timeRange
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\TimeRange|null
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\TimeRange|null $timeRange timeRange
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
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

