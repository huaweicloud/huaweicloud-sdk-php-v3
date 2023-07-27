<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCustomRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCustomRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称
    * time  精准防护规则生效时间:  - “false”：表示该规则立即生效。   - “true”：表示自定义生效时间。
    * start  精准防护规则生效的起始时间戳（秒）。当time=true，才需要填写该参数。
    * terminal  精准防护规则生效的终止时间戳（秒）。当time=true，才需要填写该参数。
    * description  规则描述
    * conditions  匹配条件列表
    * action  action
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'time' => 'bool',
            'start' => 'int',
            'terminal' => 'int',
            'description' => 'string',
            'conditions' => '\HuaweiCloud\SDK\Waf\V1\Model\CustomConditions[]',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\CustomAction',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称
    * time  精准防护规则生效时间:  - “false”：表示该规则立即生效。   - “true”：表示自定义生效时间。
    * start  精准防护规则生效的起始时间戳（秒）。当time=true，才需要填写该参数。
    * terminal  精准防护规则生效的终止时间戳（秒）。当time=true，才需要填写该参数。
    * description  规则描述
    * conditions  匹配条件列表
    * action  action
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'time' => null,
        'start' => 'int64',
        'terminal' => 'int64',
        'description' => null,
        'conditions' => null,
        'action' => null,
        'priority' => null
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
    * name  规则名称
    * time  精准防护规则生效时间:  - “false”：表示该规则立即生效。   - “true”：表示自定义生效时间。
    * start  精准防护规则生效的起始时间戳（秒）。当time=true，才需要填写该参数。
    * terminal  精准防护规则生效的终止时间戳（秒）。当time=true，才需要填写该参数。
    * description  规则描述
    * conditions  匹配条件列表
    * action  action
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'time' => 'time',
            'start' => 'start',
            'terminal' => 'terminal',
            'description' => 'description',
            'conditions' => 'conditions',
            'action' => 'action',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称
    * time  精准防护规则生效时间:  - “false”：表示该规则立即生效。   - “true”：表示自定义生效时间。
    * start  精准防护规则生效的起始时间戳（秒）。当time=true，才需要填写该参数。
    * terminal  精准防护规则生效的终止时间戳（秒）。当time=true，才需要填写该参数。
    * description  规则描述
    * conditions  匹配条件列表
    * action  action
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'time' => 'setTime',
            'start' => 'setStart',
            'terminal' => 'setTerminal',
            'description' => 'setDescription',
            'conditions' => 'setConditions',
            'action' => 'setAction',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称
    * time  精准防护规则生效时间:  - “false”：表示该规则立即生效。   - “true”：表示自定义生效时间。
    * start  精准防护规则生效的起始时间戳（秒）。当time=true，才需要填写该参数。
    * terminal  精准防护规则生效的终止时间戳（秒）。当time=true，才需要填写该参数。
    * description  规则描述
    * conditions  匹配条件列表
    * action  action
    * priority  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'time' => 'getTime',
            'start' => 'getStart',
            'terminal' => 'getTerminal',
            'description' => 'getDescription',
            'conditions' => 'getConditions',
            'action' => 'getAction',
            'priority' => 'getPriority'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
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
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets time
    *  精准防护规则生效时间:  - “false”：表示该规则立即生效。   - “true”：表示自定义生效时间。
    *
    * @return bool
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param bool $time 精准防护规则生效时间:  - “false”：表示该规则立即生效。   - “true”：表示自定义生效时间。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets start
    *  精准防护规则生效的起始时间戳（秒）。当time=true，才需要填写该参数。
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
    * @param int|null $start 精准防护规则生效的起始时间戳（秒）。当time=true，才需要填写该参数。
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
    *  精准防护规则生效的终止时间戳（秒）。当time=true，才需要填写该参数。
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
    * @param int|null $terminal 精准防护规则生效的终止时间戳（秒）。当time=true，才需要填写该参数。
    *
    * @return $this
    */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;
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
    * Gets conditions
    *  匹配条件列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CustomConditions[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CustomConditions[] $conditions 匹配条件列表
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CustomAction
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CustomAction $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets priority
    *  执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
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
    * @param int $priority 执行该规则的优先级，值越小，优先级越高，值相同时，规则创建时间早，优先级越高。取值范围：0到1000。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

