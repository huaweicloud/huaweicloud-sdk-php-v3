<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BotMDefenseLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BotMDefenseLevel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * threshold  **参数解释：** 该防护等级对应的分数门限，达到该分数则触发对应防护动作。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 该防护等级对应的防护动作ID，标识触发后执行的动作（如101表示验证码）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'threshold' => 'int',
            'defenseAction' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * threshold  **参数解释：** 该防护等级对应的分数门限，达到该分数则触发对应防护动作。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 该防护等级对应的防护动作ID，标识触发后执行的动作（如101表示验证码）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'threshold' => 'int32',
        'defenseAction' => 'int32'
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
    * threshold  **参数解释：** 该防护等级对应的分数门限，达到该分数则触发对应防护动作。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 该防护等级对应的防护动作ID，标识触发后执行的动作（如101表示验证码）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'threshold' => 'threshold',
            'defenseAction' => 'defense_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * threshold  **参数解释：** 该防护等级对应的分数门限，达到该分数则触发对应防护动作。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 该防护等级对应的防护动作ID，标识触发后执行的动作（如101表示验证码）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'threshold' => 'setThreshold',
            'defenseAction' => 'setDefenseAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * threshold  **参数解释：** 该防护等级对应的分数门限，达到该分数则触发对应防护动作。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * defenseAction  **参数解释：** 该防护等级对应的防护动作ID，标识触发后执行的动作（如101表示验证码）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'threshold' => 'getThreshold',
            'defenseAction' => 'getDefenseAction'
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
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['defenseAction'] = isset($data['defenseAction']) ? $data['defenseAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets threshold
    *  **参数解释：** 该防护等级对应的分数门限，达到该分数则触发对应防护动作。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold **参数解释：** 该防护等级对应的分数门限，达到该分数则触发对应防护动作。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets defenseAction
    *  **参数解释：** 该防护等级对应的防护动作ID，标识触发后执行的动作（如101表示验证码）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getDefenseAction()
    {
        return $this->container['defenseAction'];
    }

    /**
    * Sets defenseAction
    *
    * @param int|null $defenseAction **参数解释：** 该防护等级对应的防护动作ID，标识触发后执行的动作（如101表示验证码）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDefenseAction($defenseAction)
    {
        $this->container['defenseAction'] = $defenseAction;
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

