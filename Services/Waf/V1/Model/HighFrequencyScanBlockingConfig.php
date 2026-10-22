<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HighFrequencyScanBlockingConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HighFrequencyScanBlockingConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  action
    * timeRange  检测时间范围，单位秒
    * triggerThreshold  触发阈值，在检测时间内扫描次数超过该值则触发封禁
    * maxNumTriggeredRules  最大触发规则数，在检测时间内命中不同防护规则的数量达到该值时触发封禁
    * blockingPeriod  封禁周期，单位秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\PolicyAction',
            'timeRange' => 'int',
            'triggerThreshold' => 'int',
            'maxNumTriggeredRules' => 'int',
            'blockingPeriod' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  action
    * timeRange  检测时间范围，单位秒
    * triggerThreshold  触发阈值，在检测时间内扫描次数超过该值则触发封禁
    * maxNumTriggeredRules  最大触发规则数，在检测时间内命中不同防护规则的数量达到该值时触发封禁
    * blockingPeriod  封禁周期，单位秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'timeRange' => null,
        'triggerThreshold' => null,
        'maxNumTriggeredRules' => null,
        'blockingPeriod' => null
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
    * action  action
    * timeRange  检测时间范围，单位秒
    * triggerThreshold  触发阈值，在检测时间内扫描次数超过该值则触发封禁
    * maxNumTriggeredRules  最大触发规则数，在检测时间内命中不同防护规则的数量达到该值时触发封禁
    * blockingPeriod  封禁周期，单位秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'timeRange' => 'time_range',
            'triggerThreshold' => 'trigger_threshold',
            'maxNumTriggeredRules' => 'max_num_triggered_rules',
            'blockingPeriod' => 'blocking_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  action
    * timeRange  检测时间范围，单位秒
    * triggerThreshold  触发阈值，在检测时间内扫描次数超过该值则触发封禁
    * maxNumTriggeredRules  最大触发规则数，在检测时间内命中不同防护规则的数量达到该值时触发封禁
    * blockingPeriod  封禁周期，单位秒
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'timeRange' => 'setTimeRange',
            'triggerThreshold' => 'setTriggerThreshold',
            'maxNumTriggeredRules' => 'setMaxNumTriggeredRules',
            'blockingPeriod' => 'setBlockingPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  action
    * timeRange  检测时间范围，单位秒
    * triggerThreshold  触发阈值，在检测时间内扫描次数超过该值则触发封禁
    * maxNumTriggeredRules  最大触发规则数，在检测时间内命中不同防护规则的数量达到该值时触发封禁
    * blockingPeriod  封禁周期，单位秒
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'timeRange' => 'getTimeRange',
            'triggerThreshold' => 'getTriggerThreshold',
            'maxNumTriggeredRules' => 'getMaxNumTriggeredRules',
            'blockingPeriod' => 'getBlockingPeriod'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['triggerThreshold'] = isset($data['triggerThreshold']) ? $data['triggerThreshold'] : null;
        $this->container['maxNumTriggeredRules'] = isset($data['maxNumTriggeredRules']) ? $data['maxNumTriggeredRules'] : null;
        $this->container['blockingPeriod'] = isset($data['blockingPeriod']) ? $data['blockingPeriod'] : null;
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
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\PolicyAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\PolicyAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets timeRange
    *  检测时间范围，单位秒
    *
    * @return int|null
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param int|null $timeRange 检测时间范围，单位秒
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets triggerThreshold
    *  触发阈值，在检测时间内扫描次数超过该值则触发封禁
    *
    * @return int|null
    */
    public function getTriggerThreshold()
    {
        return $this->container['triggerThreshold'];
    }

    /**
    * Sets triggerThreshold
    *
    * @param int|null $triggerThreshold 触发阈值，在检测时间内扫描次数超过该值则触发封禁
    *
    * @return $this
    */
    public function setTriggerThreshold($triggerThreshold)
    {
        $this->container['triggerThreshold'] = $triggerThreshold;
        return $this;
    }

    /**
    * Gets maxNumTriggeredRules
    *  最大触发规则数，在检测时间内命中不同防护规则的数量达到该值时触发封禁
    *
    * @return int|null
    */
    public function getMaxNumTriggeredRules()
    {
        return $this->container['maxNumTriggeredRules'];
    }

    /**
    * Sets maxNumTriggeredRules
    *
    * @param int|null $maxNumTriggeredRules 最大触发规则数，在检测时间内命中不同防护规则的数量达到该值时触发封禁
    *
    * @return $this
    */
    public function setMaxNumTriggeredRules($maxNumTriggeredRules)
    {
        $this->container['maxNumTriggeredRules'] = $maxNumTriggeredRules;
        return $this;
    }

    /**
    * Gets blockingPeriod
    *  封禁周期，单位秒
    *
    * @return int|null
    */
    public function getBlockingPeriod()
    {
        return $this->container['blockingPeriod'];
    }

    /**
    * Sets blockingPeriod
    *
    * @param int|null $blockingPeriod 封禁周期，单位秒
    *
    * @return $this
    */
    public function setBlockingPeriod($blockingPeriod)
    {
        $this->container['blockingPeriod'] = $blockingPeriod;
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

