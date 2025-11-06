<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMetricOrEventAlarmRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMetricOrEventAlarmRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  告警规则名称。
    * limit  用于限制本次返回的结果数据条数。
    * offset  分页查询起始位置，为非负整数。
    * sortBy  根据告警规则名称或者告警创建时间排序。 - alarm_rule_name.asc - alarm_create_time.desc
    * eventSource  事件告警规则事件来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * eventSeverity  事件告警级别。 - “Critical\" - “Major” - “Minor” - “Info”
    * alarmRuleStatus  告警规则状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * promInstanceId  Prometheus实例id。
    * bindNotificationRuleId  绑定的告警行动规则名称。
    * relatedCceClusters  CCE集群id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。 - 查询单个企业项目下实例，填写企业项目id。  - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'sortBy' => 'string',
            'eventSource' => 'string',
            'eventSeverity' => 'string',
            'alarmRuleStatus' => 'string',
            'alarmRuleType' => 'string',
            'promInstanceId' => 'string',
            'bindNotificationRuleId' => 'string',
            'relatedCceClusters' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  告警规则名称。
    * limit  用于限制本次返回的结果数据条数。
    * offset  分页查询起始位置，为非负整数。
    * sortBy  根据告警规则名称或者告警创建时间排序。 - alarm_rule_name.asc - alarm_create_time.desc
    * eventSource  事件告警规则事件来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * eventSeverity  事件告警级别。 - “Critical\" - “Major” - “Minor” - “Info”
    * alarmRuleStatus  告警规则状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * promInstanceId  Prometheus实例id。
    * bindNotificationRuleId  绑定的告警行动规则名称。
    * relatedCceClusters  CCE集群id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。 - 查询单个企业项目下实例，填写企业项目id。  - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'limit' => null,
        'offset' => null,
        'sortBy' => null,
        'eventSource' => null,
        'eventSeverity' => null,
        'alarmRuleStatus' => null,
        'alarmRuleType' => null,
        'promInstanceId' => null,
        'bindNotificationRuleId' => null,
        'relatedCceClusters' => null,
        'enterpriseProjectId' => null
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
    * name  告警规则名称。
    * limit  用于限制本次返回的结果数据条数。
    * offset  分页查询起始位置，为非负整数。
    * sortBy  根据告警规则名称或者告警创建时间排序。 - alarm_rule_name.asc - alarm_create_time.desc
    * eventSource  事件告警规则事件来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * eventSeverity  事件告警级别。 - “Critical\" - “Major” - “Minor” - “Info”
    * alarmRuleStatus  告警规则状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * promInstanceId  Prometheus实例id。
    * bindNotificationRuleId  绑定的告警行动规则名称。
    * relatedCceClusters  CCE集群id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。 - 查询单个企业项目下实例，填写企业项目id。  - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortBy' => 'sort_by',
            'eventSource' => 'event_source',
            'eventSeverity' => 'event_severity',
            'alarmRuleStatus' => 'alarm_rule_status',
            'alarmRuleType' => 'alarm_rule_type',
            'promInstanceId' => 'prom_instance_id',
            'bindNotificationRuleId' => 'bind_notification_rule_id',
            'relatedCceClusters' => 'related_cce_clusters',
            'enterpriseProjectId' => 'Enterprise-Project-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  告警规则名称。
    * limit  用于限制本次返回的结果数据条数。
    * offset  分页查询起始位置，为非负整数。
    * sortBy  根据告警规则名称或者告警创建时间排序。 - alarm_rule_name.asc - alarm_create_time.desc
    * eventSource  事件告警规则事件来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * eventSeverity  事件告警级别。 - “Critical\" - “Major” - “Minor” - “Info”
    * alarmRuleStatus  告警规则状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * promInstanceId  Prometheus实例id。
    * bindNotificationRuleId  绑定的告警行动规则名称。
    * relatedCceClusters  CCE集群id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。 - 查询单个企业项目下实例，填写企业项目id。  - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortBy' => 'setSortBy',
            'eventSource' => 'setEventSource',
            'eventSeverity' => 'setEventSeverity',
            'alarmRuleStatus' => 'setAlarmRuleStatus',
            'alarmRuleType' => 'setAlarmRuleType',
            'promInstanceId' => 'setPromInstanceId',
            'bindNotificationRuleId' => 'setBindNotificationRuleId',
            'relatedCceClusters' => 'setRelatedCceClusters',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  告警规则名称。
    * limit  用于限制本次返回的结果数据条数。
    * offset  分页查询起始位置，为非负整数。
    * sortBy  根据告警规则名称或者告警创建时间排序。 - alarm_rule_name.asc - alarm_create_time.desc
    * eventSource  事件告警规则事件来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    * eventSeverity  事件告警级别。 - “Critical\" - “Major” - “Minor” - “Info”
    * alarmRuleStatus  告警规则状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    * alarmRuleType  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    * promInstanceId  Prometheus实例id。
    * bindNotificationRuleId  绑定的告警行动规则名称。
    * relatedCceClusters  CCE集群id。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。 - 查询单个企业项目下实例，填写企业项目id。  - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortBy' => 'getSortBy',
            'eventSource' => 'getEventSource',
            'eventSeverity' => 'getEventSeverity',
            'alarmRuleStatus' => 'getAlarmRuleStatus',
            'alarmRuleType' => 'getAlarmRuleType',
            'promInstanceId' => 'getPromInstanceId',
            'bindNotificationRuleId' => 'getBindNotificationRuleId',
            'relatedCceClusters' => 'getRelatedCceClusters',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const ALARM_RULE_STATUS_OK = 'OK';
    const ALARM_RULE_STATUS_ALARM = 'alarm';
    const ALARM_RULE_STATUS_EFFECTIVE = 'Effective';
    const ALARM_RULE_STATUS_INVALID = 'Invalid';
    const ALARM_RULE_TYPE_METRIC = 'metric';
    const ALARM_RULE_TYPE_EVENT = 'event';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmRuleStatusAllowableValues()
    {
        return [
            self::ALARM_RULE_STATUS_OK,
            self::ALARM_RULE_STATUS_ALARM,
            self::ALARM_RULE_STATUS_EFFECTIVE,
            self::ALARM_RULE_STATUS_INVALID,
        ];
    }

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['eventSource'] = isset($data['eventSource']) ? $data['eventSource'] : null;
        $this->container['eventSeverity'] = isset($data['eventSeverity']) ? $data['eventSeverity'] : null;
        $this->container['alarmRuleStatus'] = isset($data['alarmRuleStatus']) ? $data['alarmRuleStatus'] : null;
        $this->container['alarmRuleType'] = isset($data['alarmRuleType']) ? $data['alarmRuleType'] : null;
        $this->container['promInstanceId'] = isset($data['promInstanceId']) ? $data['promInstanceId'] : null;
        $this->container['bindNotificationRuleId'] = isset($data['bindNotificationRuleId']) ? $data['bindNotificationRuleId'] : null;
        $this->container['relatedCceClusters'] = isset($data['relatedCceClusters']) ? $data['relatedCceClusters'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAlarmRuleStatusAllowableValues();
                if (!is_null($this->container['alarmRuleStatus']) && !in_array($this->container['alarmRuleStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmRuleStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAlarmRuleTypeAllowableValues();
                if (!is_null($this->container['alarmRuleType']) && !in_array($this->container['alarmRuleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmRuleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  告警规则名称。
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
    * @param string|null $name 告警规则名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets limit
    *  用于限制本次返回的结果数据条数。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 用于限制本次返回的结果数据条数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询起始位置，为非负整数。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 分页查询起始位置，为非负整数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortBy
    *  根据告警规则名称或者告警创建时间排序。 - alarm_rule_name.asc - alarm_create_time.desc
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 根据告警规则名称或者告警创建时间排序。 - alarm_rule_name.asc - alarm_create_time.desc
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets eventSource
    *  事件告警规则事件来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    *
    * @return string|null
    */
    public function getEventSource()
    {
        return $this->container['eventSource'];
    }

    /**
    * Sets eventSource
    *
    * @param string|null $eventSource 事件告警规则事件来源。 - “RDS” - “EVS” - “CCE” - “LTS” - “AOM”
    *
    * @return $this
    */
    public function setEventSource($eventSource)
    {
        $this->container['eventSource'] = $eventSource;
        return $this;
    }

    /**
    * Gets eventSeverity
    *  事件告警级别。 - “Critical\" - “Major” - “Minor” - “Info”
    *
    * @return string|null
    */
    public function getEventSeverity()
    {
        return $this->container['eventSeverity'];
    }

    /**
    * Sets eventSeverity
    *
    * @param string|null $eventSeverity 事件告警级别。 - “Critical\" - “Major” - “Minor” - “Info”
    *
    * @return $this
    */
    public function setEventSeverity($eventSeverity)
    {
        $this->container['eventSeverity'] = $eventSeverity;
        return $this;
    }

    /**
    * Gets alarmRuleStatus
    *  告警规则状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
    *
    * @return string|null
    */
    public function getAlarmRuleStatus()
    {
        return $this->container['alarmRuleStatus'];
    }

    /**
    * Sets alarmRuleStatus
    *
    * @param string|null $alarmRuleStatus 告警规则状态。 - “OK”：正常 - “alarm”：超限阈值 - “Effective”：生效中 - “Invalid”：停用中
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
    *  告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    *
    * @return string|null
    */
    public function getAlarmRuleType()
    {
        return $this->container['alarmRuleType'];
    }

    /**
    * Sets alarmRuleType
    *
    * @param string|null $alarmRuleType 告警规则类型。 - “metric”：指标告警规则 - “event”：事件告警规则
    *
    * @return $this
    */
    public function setAlarmRuleType($alarmRuleType)
    {
        $this->container['alarmRuleType'] = $alarmRuleType;
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
    * Gets bindNotificationRuleId
    *  绑定的告警行动规则名称。
    *
    * @return string|null
    */
    public function getBindNotificationRuleId()
    {
        return $this->container['bindNotificationRuleId'];
    }

    /**
    * Sets bindNotificationRuleId
    *
    * @param string|null $bindNotificationRuleId 绑定的告警行动规则名称。
    *
    * @return $this
    */
    public function setBindNotificationRuleId($bindNotificationRuleId)
    {
        $this->container['bindNotificationRuleId'] = $bindNotificationRuleId;
        return $this;
    }

    /**
    * Gets relatedCceClusters
    *  CCE集群id。
    *
    * @return string|null
    */
    public function getRelatedCceClusters()
    {
        return $this->container['relatedCceClusters'];
    }

    /**
    * Sets relatedCceClusters
    *
    * @param string|null $relatedCceClusters CCE集群id。
    *
    * @return $this
    */
    public function setRelatedCceClusters($relatedCceClusters)
    {
        $this->container['relatedCceClusters'] = $relatedCceClusters;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。 - 查询单个企业项目下实例，填写企业项目id。  - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。 - 查询单个企业项目下实例，填写企业项目id。  - 查询所有企业项目下实例，填写“all_granted_eps”。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

