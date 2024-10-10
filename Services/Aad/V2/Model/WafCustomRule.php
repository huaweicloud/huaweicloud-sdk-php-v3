<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WafCustomRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WafCustomRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  name
    * time  精准防护规则生效时间。true-自定义生效时间，false-立即生效
    * start  精准防护规则生效的起始时间戳（秒）
    * terminal  精准防护规则生效的终止时间戳（秒）
    * priority  执行该规则的优先级，值越小，优先级越高。取值范围：0到1000。
    * conditions  condition
    * action  action
    * domainName  域名
    * overseasType  防护区域，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'time' => 'bool',
            'start' => 'int',
            'terminal' => 'int',
            'priority' => 'int',
            'conditions' => '\HuaweiCloud\SDK\Aad\V2\Model\WafCustomCondition[]',
            'action' => '\HuaweiCloud\SDK\Aad\V2\Model\WafCustomRuleAction',
            'domainName' => 'string',
            'overseasType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  name
    * time  精准防护规则生效时间。true-自定义生效时间，false-立即生效
    * start  精准防护规则生效的起始时间戳（秒）
    * terminal  精准防护规则生效的终止时间戳（秒）
    * priority  执行该规则的优先级，值越小，优先级越高。取值范围：0到1000。
    * conditions  condition
    * action  action
    * domainName  域名
    * overseasType  防护区域，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'time' => null,
        'start' => 'int64',
        'terminal' => 'int64',
        'priority' => 'int32',
        'conditions' => null,
        'action' => null,
        'domainName' => null,
        'overseasType' => 'int32'
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
    * id  id
    * name  name
    * time  精准防护规则生效时间。true-自定义生效时间，false-立即生效
    * start  精准防护规则生效的起始时间戳（秒）
    * terminal  精准防护规则生效的终止时间戳（秒）
    * priority  执行该规则的优先级，值越小，优先级越高。取值范围：0到1000。
    * conditions  condition
    * action  action
    * domainName  域名
    * overseasType  防护区域，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'time' => 'time',
            'start' => 'start',
            'terminal' => 'terminal',
            'priority' => 'priority',
            'conditions' => 'conditions',
            'action' => 'action',
            'domainName' => 'domain_name',
            'overseasType' => 'overseas_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  name
    * time  精准防护规则生效时间。true-自定义生效时间，false-立即生效
    * start  精准防护规则生效的起始时间戳（秒）
    * terminal  精准防护规则生效的终止时间戳（秒）
    * priority  执行该规则的优先级，值越小，优先级越高。取值范围：0到1000。
    * conditions  condition
    * action  action
    * domainName  域名
    * overseasType  防护区域，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'time' => 'setTime',
            'start' => 'setStart',
            'terminal' => 'setTerminal',
            'priority' => 'setPriority',
            'conditions' => 'setConditions',
            'action' => 'setAction',
            'domainName' => 'setDomainName',
            'overseasType' => 'setOverseasType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  name
    * time  精准防护规则生效时间。true-自定义生效时间，false-立即生效
    * start  精准防护规则生效的起始时间戳（秒）
    * terminal  精准防护规则生效的终止时间戳（秒）
    * priority  执行该规则的优先级，值越小，优先级越高。取值范围：0到1000。
    * conditions  condition
    * action  action
    * domainName  域名
    * overseasType  防护区域，0-大陆，1-海外
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'time' => 'getTime',
            'start' => 'getStart',
            'terminal' => 'getTerminal',
            'priority' => 'getPriority',
            'conditions' => 'getConditions',
            'action' => 'getAction',
            'domainName' => 'getDomainName',
            'overseasType' => 'getOverseasType'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['terminal'] = isset($data['terminal']) ? $data['terminal'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['overseasType'] = isset($data['overseasType']) ? $data['overseasType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
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
    * Gets id
    *  id
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
    * @param string|null $id id
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
    *  name
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
    * @param string|null $name name
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
    *  精准防护规则生效时间。true-自定义生效时间，false-立即生效
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
    * @param bool $time 精准防护规则生效时间。true-自定义生效时间，false-立即生效
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
    *  精准防护规则生效的起始时间戳（秒）
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
    * @param int|null $start 精准防护规则生效的起始时间戳（秒）
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
    *  精准防护规则生效的终止时间戳（秒）
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
    * @param int|null $terminal 精准防护规则生效的终止时间戳（秒）
    *
    * @return $this
    */
    public function setTerminal($terminal)
    {
        $this->container['terminal'] = $terminal;
        return $this;
    }

    /**
    * Gets priority
    *  执行该规则的优先级，值越小，优先级越高。取值范围：0到1000。
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
    * @param int $priority 执行该规则的优先级，值越小，优先级越高。取值范围：0到1000。
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
    *  condition
    *
    * @return \HuaweiCloud\SDK\Aad\V2\Model\WafCustomCondition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\WafCustomCondition[]|null $conditions condition
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
    * @return \HuaweiCloud\SDK\Aad\V2\Model\WafCustomRuleAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Aad\V2\Model\WafCustomRuleAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets domainName
    *  域名
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets overseasType
    *  防护区域，0-大陆，1-海外
    *
    * @return int|null
    */
    public function getOverseasType()
    {
        return $this->container['overseasType'];
    }

    /**
    * Sets overseasType
    *
    * @param int|null $overseasType 防护区域，0-大陆，1-海外
    *
    * @return $this
    */
    public function setOverseasType($overseasType)
    {
        $this->container['overseasType'] = $overseasType;
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

