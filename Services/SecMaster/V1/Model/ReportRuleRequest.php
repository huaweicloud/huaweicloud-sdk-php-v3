<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rule  报告发送任务cron表达式
    * ruleEnd  报告发送任务启动截止时间
    * startTime  startTime
    * endTime  endTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rule' => 'string',
            'ruleEnd' => 'string',
            'startTime' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequestStartTime',
            'endTime' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequestEndTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rule  报告发送任务cron表达式
    * ruleEnd  报告发送任务启动截止时间
    * startTime  startTime
    * endTime  endTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rule' => null,
        'ruleEnd' => null,
        'startTime' => null,
        'endTime' => null
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
    * rule  报告发送任务cron表达式
    * ruleEnd  报告发送任务启动截止时间
    * startTime  startTime
    * endTime  endTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rule' => 'rule',
            'ruleEnd' => 'rule_end',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rule  报告发送任务cron表达式
    * ruleEnd  报告发送任务启动截止时间
    * startTime  startTime
    * endTime  endTime
    *
    * @var string[]
    */
    protected static $setters = [
            'rule' => 'setRule',
            'ruleEnd' => 'setRuleEnd',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rule  报告发送任务cron表达式
    * ruleEnd  报告发送任务启动截止时间
    * startTime  startTime
    * endTime  endTime
    *
    * @var string[]
    */
    protected static $getters = [
            'rule' => 'getRule',
            'ruleEnd' => 'getRuleEnd',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['ruleEnd'] = isset($data['ruleEnd']) ? $data['ruleEnd'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['rule']) && (mb_strlen($this->container['rule']) > 256)) {
                $invalidProperties[] = "invalid value for 'rule', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['rule']) && (mb_strlen($this->container['rule']) < 1)) {
                $invalidProperties[] = "invalid value for 'rule', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ruleEnd']) && (mb_strlen($this->container['ruleEnd']) > 256)) {
                $invalidProperties[] = "invalid value for 'ruleEnd', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ruleEnd']) && (mb_strlen($this->container['ruleEnd']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleEnd', the character length must be bigger than or equal to 1.";
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
    * Gets rule
    *  报告发送任务cron表达式
    *
    * @return string|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param string|null $rule 报告发送任务cron表达式
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets ruleEnd
    *  报告发送任务启动截止时间
    *
    * @return string|null
    */
    public function getRuleEnd()
    {
        return $this->container['ruleEnd'];
    }

    /**
    * Sets ruleEnd
    *
    * @param string|null $ruleEnd 报告发送任务启动截止时间
    *
    * @return $this
    */
    public function setRuleEnd($ruleEnd)
    {
        $this->container['ruleEnd'] = $ruleEnd;
        return $this;
    }

    /**
    * Gets startTime
    *  startTime
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequestStartTime|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequestStartTime|null $startTime startTime
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  endTime
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequestEndTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ReportRuleRequestEndTime|null $endTime endTime
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

