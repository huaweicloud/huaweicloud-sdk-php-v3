<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteCustomRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteCustomRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则id
    * name  规则名称
    * policyid  策略id
    * description  规则描述
    * status  规则状态，0：关闭，1：开启
    * conditions  匹配条件列表，匹配条件必须同时满足。
    * action  action
    * actionMode  预留参数，可忽略。
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    * timestamp  创建精准防护规则的
    * start  精准防护规则生效的起始时间戳（毫秒）。当time=true，才会返回该参数。
    * terminal  精准防护规则生效的终止时间戳（毫秒）。当time=true，才会返回该参数。
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'policyid' => 'string',
            'description' => 'string',
            'status' => 'int',
            'conditions' => '\HuaweiCloud\SDK\Waf\V1\Model\CustomRuleConditions[]',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\CustomAction',
            'actionMode' => 'bool',
            'priority' => 'int',
            'timestamp' => 'int',
            'start' => 'int',
            'terminal' => 'int',
            'producer' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则id
    * name  规则名称
    * policyid  策略id
    * description  规则描述
    * status  规则状态，0：关闭，1：开启
    * conditions  匹配条件列表，匹配条件必须同时满足。
    * action  action
    * actionMode  预留参数，可忽略。
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    * timestamp  创建精准防护规则的
    * start  精准防护规则生效的起始时间戳（毫秒）。当time=true，才会返回该参数。
    * terminal  精准防护规则生效的终止时间戳（毫秒）。当time=true，才会返回该参数。
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'policyid' => null,
        'description' => null,
        'status' => null,
        'conditions' => null,
        'action' => null,
        'actionMode' => null,
        'priority' => null,
        'timestamp' => 'int64',
        'start' => 'int64',
        'terminal' => 'int64',
        'producer' => null
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
    * id  规则id
    * name  规则名称
    * policyid  策略id
    * description  规则描述
    * status  规则状态，0：关闭，1：开启
    * conditions  匹配条件列表，匹配条件必须同时满足。
    * action  action
    * actionMode  预留参数，可忽略。
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    * timestamp  创建精准防护规则的
    * start  精准防护规则生效的起始时间戳（毫秒）。当time=true，才会返回该参数。
    * terminal  精准防护规则生效的终止时间戳（毫秒）。当time=true，才会返回该参数。
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'policyid' => 'policyid',
            'description' => 'description',
            'status' => 'status',
            'conditions' => 'conditions',
            'action' => 'action',
            'actionMode' => 'action_mode',
            'priority' => 'priority',
            'timestamp' => 'timestamp',
            'start' => 'start',
            'terminal' => 'terminal',
            'producer' => 'producer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则id
    * name  规则名称
    * policyid  策略id
    * description  规则描述
    * status  规则状态，0：关闭，1：开启
    * conditions  匹配条件列表，匹配条件必须同时满足。
    * action  action
    * actionMode  预留参数，可忽略。
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    * timestamp  创建精准防护规则的
    * start  精准防护规则生效的起始时间戳（毫秒）。当time=true，才会返回该参数。
    * terminal  精准防护规则生效的终止时间戳（毫秒）。当time=true，才会返回该参数。
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'policyid' => 'setPolicyid',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'conditions' => 'setConditions',
            'action' => 'setAction',
            'actionMode' => 'setActionMode',
            'priority' => 'setPriority',
            'timestamp' => 'setTimestamp',
            'start' => 'setStart',
            'terminal' => 'setTerminal',
            'producer' => 'setProducer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则id
    * name  规则名称
    * policyid  策略id
    * description  规则描述
    * status  规则状态，0：关闭，1：开启
    * conditions  匹配条件列表，匹配条件必须同时满足。
    * action  action
    * actionMode  预留参数，可忽略。
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    * timestamp  创建精准防护规则的
    * start  精准防护规则生效的起始时间戳（毫秒）。当time=true，才会返回该参数。
    * terminal  精准防护规则生效的终止时间戳（毫秒）。当time=true，才会返回该参数。
    * producer  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'policyid' => 'getPolicyid',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'conditions' => 'getConditions',
            'action' => 'getAction',
            'actionMode' => 'getActionMode',
            'priority' => 'getPriority',
            'timestamp' => 'getTimestamp',
            'start' => 'getStart',
            'terminal' => 'getTerminal',
            'producer' => 'getProducer'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['actionMode'] = isset($data['actionMode']) ? $data['actionMode'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['producer'] = isset($data['producer']) ? $data['producer'] : null;
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
    * Gets id
    *  规则id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 规则id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets policyid
    *  策略id
    *
    * @return string|null
    */
    public function getPolicyid()
    {
        return $this->container['policyid'];
    }

    /**
    * Sets policyid
    *
    * @param string|null $policyid 策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets description
    *  规则描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  规则状态，0：关闭，1：开启
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 规则状态，0：关闭，1：开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets conditions
    *  匹配条件列表，匹配条件必须同时满足。
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CustomRuleConditions[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CustomRuleConditions[]|null $conditions 匹配条件列表，匹配条件必须同时满足。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CustomAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CustomAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets actionMode
    *  预留参数，可忽略。
    *
    * @return bool|null
    */
    public function getActionMode()
    {
        return $this->container['actionMode'];
    }

    /**
    * Sets actionMode
    *
    * @param bool|null $actionMode 预留参数，可忽略。
    *
    * @return $this
    */
    public function setActionMode($actionMode)
    {
        $this->container['actionMode'] = $actionMode;
        return $this;
    }

    /**
    * Gets priority
    *  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets timestamp
    *  创建精准防护规则的
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 创建精准防护规则的
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets start
    *  精准防护规则生效的起始时间戳（毫秒）。当time=true，才会返回该参数。
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 精准防护规则生效的起始时间戳（毫秒）。当time=true，才会返回该参数。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets terminal
    *  精准防护规则生效的终止时间戳（毫秒）。当time=true，才会返回该参数。
    *
    * @return int|null
    */
    public function getTerminal()
    {
        return $this->container['terminal'];
    }

    /**
    * Sets terminal
    *
    * @param int|null $terminal 精准防护规则生效的终止时间戳（毫秒）。当time=true，才会返回该参数。
    *
    * @return $this
    */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;
        return $this;
    }

    /**
    * Gets producer
    *  规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return int|null
    */
    public function getProducer()
    {
        return $this->container['producer'];
    }

    /**
    * Sets producer
    *
    * @param int|null $producer 规则创建对象，该参数为预留参数，用于后续功能扩展，当前请用户忽略该参数
    *
    * @return $this
    */
    public function setProducer($producer)
    {
        $this->container['producer'] = $producer;
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

