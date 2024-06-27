<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmParamForV4Db implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmParamForV4Db';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmCreateTime  告警规则创建时间。
    * alarmUpdateTime  告警规则修改时间。
    * alarmRuleName  告警规则名称。
    * alarmRuleId  告警规则id。
    * enterpriseProjectId  企业项目id。
    * promInstanceId  Prometheus实例id。
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleStatus  告警状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * metricAlarmSpec  metricAlarmSpec
    * eventAlarmSpec  eventAlarmSpec
    * alarmNotifications  alarmNotifications
    * userId  用户id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmCreateTime' => 'int',
            'alarmUpdateTime' => 'int',
            'alarmRuleName' => 'string',
            'alarmRuleId' => 'int',
            'enterpriseProjectId' => 'string',
            'promInstanceId' => 'string',
            'alarmRuleDescription' => 'string',
            'alarmRuleEnable' => 'bool',
            'alarmRuleStatus' => 'string',
            'alarmRuleType' => 'string',
            'metricAlarmSpec' => '\HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmSpec',
            'eventAlarmSpec' => '\HuaweiCloud\SDK\Aom\V2\Model\EventAlarmSpec',
            'alarmNotifications' => '\HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification',
            'userId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmCreateTime  告警规则创建时间。
    * alarmUpdateTime  告警规则修改时间。
    * alarmRuleName  告警规则名称。
    * alarmRuleId  告警规则id。
    * enterpriseProjectId  企业项目id。
    * promInstanceId  Prometheus实例id。
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleStatus  告警状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * metricAlarmSpec  metricAlarmSpec
    * eventAlarmSpec  eventAlarmSpec
    * alarmNotifications  alarmNotifications
    * userId  用户id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmCreateTime' => 'int64',
        'alarmUpdateTime' => 'int64',
        'alarmRuleName' => null,
        'alarmRuleId' => 'int64',
        'enterpriseProjectId' => null,
        'promInstanceId' => null,
        'alarmRuleDescription' => null,
        'alarmRuleEnable' => null,
        'alarmRuleStatus' => null,
        'alarmRuleType' => null,
        'metricAlarmSpec' => null,
        'eventAlarmSpec' => null,
        'alarmNotifications' => null,
        'userId' => null
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
    * alarmCreateTime  告警规则创建时间。
    * alarmUpdateTime  告警规则修改时间。
    * alarmRuleName  告警规则名称。
    * alarmRuleId  告警规则id。
    * enterpriseProjectId  企业项目id。
    * promInstanceId  Prometheus实例id。
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleStatus  告警状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * metricAlarmSpec  metricAlarmSpec
    * eventAlarmSpec  eventAlarmSpec
    * alarmNotifications  alarmNotifications
    * userId  用户id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmCreateTime' => 'alarm_create_time',
            'alarmUpdateTime' => 'alarm_update_time',
            'alarmRuleName' => 'alarm_rule_name',
            'alarmRuleId' => 'alarm_rule_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'promInstanceId' => 'prom_instance_id',
            'alarmRuleDescription' => 'alarm_rule_description',
            'alarmRuleEnable' => 'alarm_rule_enable',
            'alarmRuleStatus' => 'alarm_rule_status',
            'alarmRuleType' => 'alarm_rule_type',
            'metricAlarmSpec' => 'metric_alarm_spec',
            'eventAlarmSpec' => 'event_alarm_spec',
            'alarmNotifications' => 'alarm_notifications',
            'userId' => 'user_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmCreateTime  告警规则创建时间。
    * alarmUpdateTime  告警规则修改时间。
    * alarmRuleName  告警规则名称。
    * alarmRuleId  告警规则id。
    * enterpriseProjectId  企业项目id。
    * promInstanceId  Prometheus实例id。
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleStatus  告警状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * metricAlarmSpec  metricAlarmSpec
    * eventAlarmSpec  eventAlarmSpec
    * alarmNotifications  alarmNotifications
    * userId  用户id。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmCreateTime' => 'setAlarmCreateTime',
            'alarmUpdateTime' => 'setAlarmUpdateTime',
            'alarmRuleName' => 'setAlarmRuleName',
            'alarmRuleId' => 'setAlarmRuleId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'promInstanceId' => 'setPromInstanceId',
            'alarmRuleDescription' => 'setAlarmRuleDescription',
            'alarmRuleEnable' => 'setAlarmRuleEnable',
            'alarmRuleStatus' => 'setAlarmRuleStatus',
            'alarmRuleType' => 'setAlarmRuleType',
            'metricAlarmSpec' => 'setMetricAlarmSpec',
            'eventAlarmSpec' => 'setEventAlarmSpec',
            'alarmNotifications' => 'setAlarmNotifications',
            'userId' => 'setUserId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmCreateTime  告警规则创建时间。
    * alarmUpdateTime  告警规则修改时间。
    * alarmRuleName  告警规则名称。
    * alarmRuleId  告警规则id。
    * enterpriseProjectId  企业项目id。
    * promInstanceId  Prometheus实例id。
    * alarmRuleDescription  告警规则描述。
    * alarmRuleEnable  是否启用。
    * alarmRuleStatus  告警状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * metricAlarmSpec  metricAlarmSpec
    * eventAlarmSpec  eventAlarmSpec
    * alarmNotifications  alarmNotifications
    * userId  用户id。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmCreateTime' => 'getAlarmCreateTime',
            'alarmUpdateTime' => 'getAlarmUpdateTime',
            'alarmRuleName' => 'getAlarmRuleName',
            'alarmRuleId' => 'getAlarmRuleId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'promInstanceId' => 'getPromInstanceId',
            'alarmRuleDescription' => 'getAlarmRuleDescription',
            'alarmRuleEnable' => 'getAlarmRuleEnable',
            'alarmRuleStatus' => 'getAlarmRuleStatus',
            'alarmRuleType' => 'getAlarmRuleType',
            'metricAlarmSpec' => 'getMetricAlarmSpec',
            'eventAlarmSpec' => 'getEventAlarmSpec',
            'alarmNotifications' => 'getAlarmNotifications',
            'userId' => 'getUserId'
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
    const ALARM_RULE_TYPE_METRIC = 'metric';
    const ALARM_RULE_TYPE_EVENT = 'event';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmRuleTypeAllowableValues()
    {
        return [
            self::ALARM_RULE_TYPE_METRIC,
            self::ALARM_RULE_TYPE_EVENT,
        ];
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
        $this->container['alarmCreateTime'] = isset($data['alarmCreateTime']) ? $data['alarmCreateTime'] : null;
        $this->container['alarmUpdateTime'] = isset($data['alarmUpdateTime']) ? $data['alarmUpdateTime'] : null;
        $this->container['alarmRuleName'] = isset($data['alarmRuleName']) ? $data['alarmRuleName'] : null;
        $this->container['alarmRuleId'] = isset($data['alarmRuleId']) ? $data['alarmRuleId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['promInstanceId'] = isset($data['promInstanceId']) ? $data['promInstanceId'] : null;
        $this->container['alarmRuleDescription'] = isset($data['alarmRuleDescription']) ? $data['alarmRuleDescription'] : null;
        $this->container['alarmRuleEnable'] = isset($data['alarmRuleEnable']) ? $data['alarmRuleEnable'] : null;
        $this->container['alarmRuleStatus'] = isset($data['alarmRuleStatus']) ? $data['alarmRuleStatus'] : null;
        $this->container['alarmRuleType'] = isset($data['alarmRuleType']) ? $data['alarmRuleType'] : null;
        $this->container['metricAlarmSpec'] = isset($data['metricAlarmSpec']) ? $data['metricAlarmSpec'] : null;
        $this->container['eventAlarmSpec'] = isset($data['eventAlarmSpec']) ? $data['eventAlarmSpec'] : null;
        $this->container['alarmNotifications'] = isset($data['alarmNotifications']) ? $data['alarmNotifications'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmCreateTime'] === null) {
            $invalidProperties[] = "'alarmCreateTime' can't be null";
        }
        if ($this->container['alarmUpdateTime'] === null) {
            $invalidProperties[] = "'alarmUpdateTime' can't be null";
        }
        if ($this->container['alarmRuleName'] === null) {
            $invalidProperties[] = "'alarmRuleName' can't be null";
        }
        if ($this->container['alarmRuleId'] === null) {
            $invalidProperties[] = "'alarmRuleId' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['alarmRuleDescription'] === null) {
            $invalidProperties[] = "'alarmRuleDescription' can't be null";
        }
        if ($this->container['alarmRuleEnable'] === null) {
            $invalidProperties[] = "'alarmRuleEnable' can't be null";
        }
        if ($this->container['alarmRuleStatus'] === null) {
            $invalidProperties[] = "'alarmRuleStatus' can't be null";
        }
        if ($this->container['alarmRuleType'] === null) {
            $invalidProperties[] = "'alarmRuleType' can't be null";
        }
            $allowedValues = $this->getAlarmRuleTypeAllowableValues();
                if (!is_null($this->container['alarmRuleType']) && !in_array($this->container['alarmRuleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmRuleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['alarmNotifications'] === null) {
            $invalidProperties[] = "'alarmNotifications' can't be null";
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
    * Gets alarmCreateTime
    *  告警规则创建时间。
    *
    * @return int
    */
    public function getAlarmCreateTime()
    {
        return $this->container['alarmCreateTime'];
    }

    /**
    * Sets alarmCreateTime
    *
    * @param int $alarmCreateTime 告警规则创建时间。
    *
    * @return $this
    */
    public function setAlarmCreateTime($alarmCreateTime)
    {
        $this->container['alarmCreateTime'] = $alarmCreateTime;
        return $this;
    }

    /**
    * Gets alarmUpdateTime
    *  告警规则修改时间。
    *
    * @return int
    */
    public function getAlarmUpdateTime()
    {
        return $this->container['alarmUpdateTime'];
    }

    /**
    * Sets alarmUpdateTime
    *
    * @param int $alarmUpdateTime 告警规则修改时间。
    *
    * @return $this
    */
    public function setAlarmUpdateTime($alarmUpdateTime)
    {
        $this->container['alarmUpdateTime'] = $alarmUpdateTime;
        return $this;
    }

    /**
    * Gets alarmRuleName
    *  告警规则名称。
    *
    * @return string
    */
    public function getAlarmRuleName()
    {
        return $this->container['alarmRuleName'];
    }

    /**
    * Sets alarmRuleName
    *
    * @param string $alarmRuleName 告警规则名称。
    *
    * @return $this
    */
    public function setAlarmRuleName($alarmRuleName)
    {
        $this->container['alarmRuleName'] = $alarmRuleName;
        return $this;
    }

    /**
    * Gets alarmRuleId
    *  告警规则id。
    *
    * @return int
    */
    public function getAlarmRuleId()
    {
        return $this->container['alarmRuleId'];
    }

    /**
    * Sets alarmRuleId
    *
    * @param int $alarmRuleId 告警规则id。
    *
    * @return $this
    */
    public function setAlarmRuleId($alarmRuleId)
    {
        $this->container['alarmRuleId'] = $alarmRuleId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets promInstanceId
    *  Prometheus实例id。
    *
    * @return string|null
    */
    public function getPromInstanceId()
    {
        return $this->container['promInstanceId'];
    }

    /**
    * Sets promInstanceId
    *
    * @param string|null $promInstanceId Prometheus实例id。
    *
    * @return $this
    */
    public function setPromInstanceId($promInstanceId)
    {
        $this->container['promInstanceId'] = $promInstanceId;
        return $this;
    }

    /**
    * Gets alarmRuleDescription
    *  告警规则描述。
    *
    * @return string
    */
    public function getAlarmRuleDescription()
    {
        return $this->container['alarmRuleDescription'];
    }

    /**
    * Sets alarmRuleDescription
    *
    * @param string $alarmRuleDescription 告警规则描述。
    *
    * @return $this
    */
    public function setAlarmRuleDescription($alarmRuleDescription)
    {
        $this->container['alarmRuleDescription'] = $alarmRuleDescription;
        return $this;
    }

    /**
    * Gets alarmRuleEnable
    *  是否启用。
    *
    * @return bool
    */
    public function getAlarmRuleEnable()
    {
        return $this->container['alarmRuleEnable'];
    }

    /**
    * Sets alarmRuleEnable
    *
    * @param bool $alarmRuleEnable 是否启用。
    *
    * @return $this
    */
    public function setAlarmRuleEnable($alarmRuleEnable)
    {
        $this->container['alarmRuleEnable'] = $alarmRuleEnable;
        return $this;
    }

    /**
    * Gets alarmRuleStatus
    *  告警状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    *
    * @return string
    */
    public function getAlarmRuleStatus()
    {
        return $this->container['alarmRuleStatus'];
    }

    /**
    * Sets alarmRuleStatus
    *
    * @param string $alarmRuleStatus 告警状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    *
    * @return $this
    */
    public function setAlarmRuleStatus($alarmRuleStatus)
    {
        $this->container['alarmRuleStatus'] = $alarmRuleStatus;
        return $this;
    }

    /**
    * Gets alarmRuleType
    *  规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    *
    * @return string
    */
    public function getAlarmRuleType()
    {
        return $this->container['alarmRuleType'];
    }

    /**
    * Sets alarmRuleType
    *
    * @param string $alarmRuleType 规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    *
    * @return $this
    */
    public function setAlarmRuleType($alarmRuleType)
    {
        $this->container['alarmRuleType'] = $alarmRuleType;
        return $this;
    }

    /**
    * Gets metricAlarmSpec
    *  metricAlarmSpec
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmSpec|null
    */
    public function getMetricAlarmSpec()
    {
        return $this->container['metricAlarmSpec'];
    }

    /**
    * Sets metricAlarmSpec
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetricAlarmSpec|null $metricAlarmSpec metricAlarmSpec
    *
    * @return $this
    */
    public function setMetricAlarmSpec($metricAlarmSpec)
    {
        $this->container['metricAlarmSpec'] = $metricAlarmSpec;
        return $this;
    }

    /**
    * Gets eventAlarmSpec
    *  eventAlarmSpec
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\EventAlarmSpec|null
    */
    public function getEventAlarmSpec()
    {
        return $this->container['eventAlarmSpec'];
    }

    /**
    * Sets eventAlarmSpec
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\EventAlarmSpec|null $eventAlarmSpec eventAlarmSpec
    *
    * @return $this
    */
    public function setEventAlarmSpec($eventAlarmSpec)
    {
        $this->container['eventAlarmSpec'] = $eventAlarmSpec;
        return $this;
    }

    /**
    * Gets alarmNotifications
    *  alarmNotifications
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification
    */
    public function getAlarmNotifications()
    {
        return $this->container['alarmNotifications'];
    }

    /**
    * Sets alarmNotifications
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\AlarmNotification $alarmNotifications alarmNotifications
    *
    * @return $this
    */
    public function setAlarmNotifications($alarmNotifications)
    {
        $this->container['alarmNotifications'] = $alarmNotifications;
        return $this;
    }

    /**
    * Gets userId
    *  用户id。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户id。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
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

