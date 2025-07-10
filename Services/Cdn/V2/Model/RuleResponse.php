<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  规则id
    * name  规则名称
    * status  规则状态，on：开启，off：关闭。
    * priority  此条规则的优先级，数值越大，优先级越高。
    * conditions  conditions
    * actions  满足规则条件后执行的动作列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'name' => 'string',
            'status' => 'string',
            'priority' => 'int',
            'conditions' => '\HuaweiCloud\SDK\Cdn\V2\Model\Conditions',
            'actions' => '\HuaweiCloud\SDK\Cdn\V2\Model\Actions[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  规则id
    * name  规则名称
    * status  规则状态，on：开启，off：关闭。
    * priority  此条规则的优先级，数值越大，优先级越高。
    * conditions  conditions
    * actions  满足规则条件后执行的动作列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'name' => null,
        'status' => null,
        'priority' => null,
        'conditions' => null,
        'actions' => null
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
    * ruleId  规则id
    * name  规则名称
    * status  规则状态，on：开启，off：关闭。
    * priority  此条规则的优先级，数值越大，优先级越高。
    * conditions  conditions
    * actions  满足规则条件后执行的动作列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'name' => 'name',
            'status' => 'status',
            'priority' => 'priority',
            'conditions' => 'conditions',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  规则id
    * name  规则名称
    * status  规则状态，on：开启，off：关闭。
    * priority  此条规则的优先级，数值越大，优先级越高。
    * conditions  conditions
    * actions  满足规则条件后执行的动作列表
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'name' => 'setName',
            'status' => 'setStatus',
            'priority' => 'setPriority',
            'conditions' => 'setConditions',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  规则id
    * name  规则名称
    * status  规则状态，on：开启，off：关闭。
    * priority  此条规则的优先级，数值越大，优先级越高。
    * conditions  conditions
    * actions  满足规则条件后执行的动作列表
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'name' => 'getName',
            'status' => 'getStatus',
            'priority' => 'getPriority',
            'conditions' => 'getConditions',
            'actions' => 'getActions'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleId'] === null) {
            $invalidProperties[] = "'ruleId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
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
    * Gets ruleId
    *  规则id
    *
    * @return string
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string $ruleId 规则id
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
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
    * @param string $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  规则状态，on：开启，off：关闭。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 规则状态，on：开启，off：关闭。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets priority
    *  此条规则的优先级，数值越大，优先级越高。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 此条规则的优先级，数值越大，优先级越高。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets conditions
    *  conditions
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Conditions
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Conditions $conditions conditions
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets actions
    *  满足规则条件后执行的动作列表
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Actions[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Actions[] $actions 满足规则条件后执行的动作列表
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

