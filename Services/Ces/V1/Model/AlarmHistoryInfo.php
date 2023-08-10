<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmHistoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmHistoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * alarmName  告警规则的名称，如：alarm-test01。
    * alarmDescription  告警规则的描述。
    * metric  metric
    * condition  condition
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * alarmType  告警类型； 仅针对事件告警的参数，枚举类型：值为EVENT.SYS或者EVENT.CUSTOM
    * alarmEnabled  告警规则是否被启用，值为true或者false。
    * alarmActionEnabled  告警规则的告警触发动作是否被启用，值为true或者false。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000。
    * enterpriseProjectId  企业项目ID。 值为all_granted_eps时，表示所有企业项目；值为0时，表示默认的企业项目default。
    * triggerTime  计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * datapoints  计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值。
    * additionalInfo  additionalInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'alarmName' => 'string',
            'alarmDescription' => 'string',
            'metric' => '\HuaweiCloud\SDK\Ces\V1\Model\MetricInfo',
            'condition' => '\HuaweiCloud\SDK\Ces\V1\Model\Condition',
            'alarmLevel' => 'int',
            'alarmType' => 'string',
            'alarmEnabled' => 'bool',
            'alarmActionEnabled' => 'bool',
            'alarmActions' => '\HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]',
            'okActions' => '\HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]',
            'insufficientdataActions' => '\HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]',
            'updateTime' => 'int',
            'enterpriseProjectId' => 'string',
            'triggerTime' => 'int',
            'alarmStatus' => 'string',
            'datapoints' => '\HuaweiCloud\SDK\Ces\V1\Model\DataPointForAlarmHistory[]',
            'additionalInfo' => '\HuaweiCloud\SDK\Ces\V1\Model\AdditionalInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * alarmName  告警规则的名称，如：alarm-test01。
    * alarmDescription  告警规则的描述。
    * metric  metric
    * condition  condition
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * alarmType  告警类型； 仅针对事件告警的参数，枚举类型：值为EVENT.SYS或者EVENT.CUSTOM
    * alarmEnabled  告警规则是否被启用，值为true或者false。
    * alarmActionEnabled  告警规则的告警触发动作是否被启用，值为true或者false。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000。
    * enterpriseProjectId  企业项目ID。 值为all_granted_eps时，表示所有企业项目；值为0时，表示默认的企业项目default。
    * triggerTime  计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * datapoints  计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值。
    * additionalInfo  additionalInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmId' => null,
        'alarmName' => null,
        'alarmDescription' => null,
        'metric' => null,
        'condition' => null,
        'alarmLevel' => 'int32',
        'alarmType' => null,
        'alarmEnabled' => null,
        'alarmActionEnabled' => null,
        'alarmActions' => null,
        'okActions' => null,
        'insufficientdataActions' => null,
        'updateTime' => 'int64',
        'enterpriseProjectId' => null,
        'triggerTime' => 'int64',
        'alarmStatus' => null,
        'datapoints' => null,
        'additionalInfo' => null
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
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * alarmName  告警规则的名称，如：alarm-test01。
    * alarmDescription  告警规则的描述。
    * metric  metric
    * condition  condition
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * alarmType  告警类型； 仅针对事件告警的参数，枚举类型：值为EVENT.SYS或者EVENT.CUSTOM
    * alarmEnabled  告警规则是否被启用，值为true或者false。
    * alarmActionEnabled  告警规则的告警触发动作是否被启用，值为true或者false。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000。
    * enterpriseProjectId  企业项目ID。 值为all_granted_eps时，表示所有企业项目；值为0时，表示默认的企业项目default。
    * triggerTime  计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * datapoints  计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值。
    * additionalInfo  additionalInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmId' => 'alarm_id',
            'alarmName' => 'alarm_name',
            'alarmDescription' => 'alarm_description',
            'metric' => 'metric',
            'condition' => 'condition',
            'alarmLevel' => 'alarm_level',
            'alarmType' => 'alarm_type',
            'alarmEnabled' => 'alarm_enabled',
            'alarmActionEnabled' => 'alarm_action_enabled',
            'alarmActions' => 'alarm_actions',
            'okActions' => 'ok_actions',
            'insufficientdataActions' => 'insufficientdata_actions',
            'updateTime' => 'update_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'triggerTime' => 'trigger_time',
            'alarmStatus' => 'alarm_status',
            'datapoints' => 'datapoints',
            'additionalInfo' => 'additional_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * alarmName  告警规则的名称，如：alarm-test01。
    * alarmDescription  告警规则的描述。
    * metric  metric
    * condition  condition
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * alarmType  告警类型； 仅针对事件告警的参数，枚举类型：值为EVENT.SYS或者EVENT.CUSTOM
    * alarmEnabled  告警规则是否被启用，值为true或者false。
    * alarmActionEnabled  告警规则的告警触发动作是否被启用，值为true或者false。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000。
    * enterpriseProjectId  企业项目ID。 值为all_granted_eps时，表示所有企业项目；值为0时，表示默认的企业项目default。
    * triggerTime  计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * datapoints  计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值。
    * additionalInfo  additionalInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmId' => 'setAlarmId',
            'alarmName' => 'setAlarmName',
            'alarmDescription' => 'setAlarmDescription',
            'metric' => 'setMetric',
            'condition' => 'setCondition',
            'alarmLevel' => 'setAlarmLevel',
            'alarmType' => 'setAlarmType',
            'alarmEnabled' => 'setAlarmEnabled',
            'alarmActionEnabled' => 'setAlarmActionEnabled',
            'alarmActions' => 'setAlarmActions',
            'okActions' => 'setOkActions',
            'insufficientdataActions' => 'setInsufficientdataActions',
            'updateTime' => 'setUpdateTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'triggerTime' => 'setTriggerTime',
            'alarmStatus' => 'setAlarmStatus',
            'datapoints' => 'setDatapoints',
            'additionalInfo' => 'setAdditionalInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    * alarmName  告警规则的名称，如：alarm-test01。
    * alarmDescription  告警规则的描述。
    * metric  metric
    * condition  condition
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * alarmType  告警类型； 仅针对事件告警的参数，枚举类型：值为EVENT.SYS或者EVENT.CUSTOM
    * alarmEnabled  告警规则是否被启用，值为true或者false。
    * alarmActionEnabled  告警规则的告警触发动作是否被启用，值为true或者false。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000。
    * enterpriseProjectId  企业项目ID。 值为all_granted_eps时，表示所有企业项目；值为0时，表示默认的企业项目default。
    * triggerTime  计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * datapoints  计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值。
    * additionalInfo  additionalInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmId' => 'getAlarmId',
            'alarmName' => 'getAlarmName',
            'alarmDescription' => 'getAlarmDescription',
            'metric' => 'getMetric',
            'condition' => 'getCondition',
            'alarmLevel' => 'getAlarmLevel',
            'alarmType' => 'getAlarmType',
            'alarmEnabled' => 'getAlarmEnabled',
            'alarmActionEnabled' => 'getAlarmActionEnabled',
            'alarmActions' => 'getAlarmActions',
            'okActions' => 'getOkActions',
            'insufficientdataActions' => 'getInsufficientdataActions',
            'updateTime' => 'getUpdateTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'triggerTime' => 'getTriggerTime',
            'alarmStatus' => 'getAlarmStatus',
            'datapoints' => 'getDatapoints',
            'additionalInfo' => 'getAdditionalInfo'
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
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['alarmDescription'] = isset($data['alarmDescription']) ? $data['alarmDescription'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['alarmEnabled'] = isset($data['alarmEnabled']) ? $data['alarmEnabled'] : null;
        $this->container['alarmActionEnabled'] = isset($data['alarmActionEnabled']) ? $data['alarmActionEnabled'] : null;
        $this->container['alarmActions'] = isset($data['alarmActions']) ? $data['alarmActions'] : null;
        $this->container['okActions'] = isset($data['okActions']) ? $data['okActions'] : null;
        $this->container['insufficientdataActions'] = isset($data['insufficientdataActions']) ? $data['insufficientdataActions'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['triggerTime'] = isset($data['triggerTime']) ? $data['triggerTime'] : null;
        $this->container['alarmStatus'] = isset($data['alarmStatus']) ? $data['alarmStatus'] : null;
        $this->container['datapoints'] = isset($data['datapoints']) ? $data['datapoints'] : null;
        $this->container['additionalInfo'] = isset($data['additionalInfo']) ? $data['additionalInfo'] : null;
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
    * Gets alarmId
    *  告警规则的ID，如：al1603131199286dzxpqK3Ez。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警规则的ID，如：al1603131199286dzxpqK3Ez。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets alarmName
    *  告警规则的名称，如：alarm-test01。
    *
    * @return string|null
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string|null $alarmName 告警规则的名称，如：alarm-test01。
    *
    * @return $this
    */
    public function setAlarmName($alarmName)
    {
        $this->container['alarmName'] = $alarmName;
        return $this;
    }

    /**
    * Gets alarmDescription
    *  告警规则的描述。
    *
    * @return string|null
    */
    public function getAlarmDescription()
    {
        return $this->container['alarmDescription'];
    }

    /**
    * Sets alarmDescription
    *
    * @param string|null $alarmDescription 告警规则的描述。
    *
    * @return $this
    */
    public function setAlarmDescription($alarmDescription)
    {
        $this->container['alarmDescription'] = $alarmDescription;
        return $this;
    }

    /**
    * Gets metric
    *  metric
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\MetricInfo|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\MetricInfo|null $metric metric
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Condition|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Condition|null $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    *
    * @return int|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param int|null $alarmLevel 告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets alarmType
    *  告警类型； 仅针对事件告警的参数，枚举类型：值为EVENT.SYS或者EVENT.CUSTOM
    *
    * @return string|null
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param string|null $alarmType 告警类型； 仅针对事件告警的参数，枚举类型：值为EVENT.SYS或者EVENT.CUSTOM
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets alarmEnabled
    *  告警规则是否被启用，值为true或者false。
    *
    * @return bool|null
    */
    public function getAlarmEnabled()
    {
        return $this->container['alarmEnabled'];
    }

    /**
    * Sets alarmEnabled
    *
    * @param bool|null $alarmEnabled 告警规则是否被启用，值为true或者false。
    *
    * @return $this
    */
    public function setAlarmEnabled($alarmEnabled)
    {
        $this->container['alarmEnabled'] = $alarmEnabled;
        return $this;
    }

    /**
    * Gets alarmActionEnabled
    *  告警规则的告警触发动作是否被启用，值为true或者false。
    *
    * @return bool|null
    */
    public function getAlarmActionEnabled()
    {
        return $this->container['alarmActionEnabled'];
    }

    /**
    * Sets alarmActionEnabled
    *
    * @param bool|null $alarmActionEnabled 告警规则的告警触发动作是否被启用，值为true或者false。
    *
    * @return $this
    */
    public function setAlarmActionEnabled($alarmActionEnabled)
    {
        $this->container['alarmActionEnabled'] = $alarmActionEnabled;
        return $this;
    }

    /**
    * Gets alarmActions
    *  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]|null
    */
    public function getAlarmActions()
    {
        return $this->container['alarmActions'];
    }

    /**
    * Sets alarmActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]|null $alarmActions 告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    *
    * @return $this
    */
    public function setAlarmActions($alarmActions)
    {
        $this->container['alarmActions'] = $alarmActions;
        return $this;
    }

    /**
    * Gets okActions
    *  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]|null
    */
    public function getOkActions()
    {
        return $this->container['okActions'];
    }

    /**
    * Sets okActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]|null $okActions 告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    *
    * @return $this
    */
    public function setOkActions($okActions)
    {
        $this->container['okActions'] = $okActions;
        return $this;
    }

    /**
    * Gets insufficientdataActions
    *  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]|null
    */
    public function getInsufficientdataActions()
    {
        return $this->container['insufficientdataActions'];
    }

    /**
    * Sets insufficientdataActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]|null $insufficientdataActions 数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    *
    * @return $this
    */
    public function setInsufficientdataActions($insufficientdataActions)
    {
        $this->container['insufficientdataActions'] = $insufficientdataActions;
        return $this;
    }

    /**
    * Gets updateTime
    *  告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 值为all_granted_eps时，表示所有企业项目；值为0时，表示默认的企业项目default。
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
    * @param string|null $enterpriseProjectId 企业项目ID。 值为all_granted_eps时，表示所有企业项目；值为0时，表示默认的企业项目default。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets triggerTime
    *  计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469。
    *
    * @return int|null
    */
    public function getTriggerTime()
    {
        return $this->container['triggerTime'];
    }

    /**
    * Sets triggerTime
    *
    * @param int|null $triggerTime 计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469。
    *
    * @return $this
    */
    public function setTriggerTime($triggerTime)
    {
        $this->container['triggerTime'] = $triggerTime;
        return $this;
    }

    /**
    * Gets alarmStatus
    *  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    *
    * @return string|null
    */
    public function getAlarmStatus()
    {
        return $this->container['alarmStatus'];
    }

    /**
    * Sets alarmStatus
    *
    * @param string|null $alarmStatus 告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    *
    * @return $this
    */
    public function setAlarmStatus($alarmStatus)
    {
        $this->container['alarmStatus'] = $alarmStatus;
        return $this;
    }

    /**
    * Gets datapoints
    *  计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\DataPointForAlarmHistory[]|null
    */
    public function getDatapoints()
    {
        return $this->container['datapoints'];
    }

    /**
    * Sets datapoints
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\DataPointForAlarmHistory[]|null $datapoints 计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值。
    *
    * @return $this
    */
    public function setDatapoints($datapoints)
    {
        $this->container['datapoints'] = $datapoints;
        return $this;
    }

    /**
    * Gets additionalInfo
    *  additionalInfo
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\AdditionalInfo|null
    */
    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    /**
    * Sets additionalInfo
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\AdditionalInfo|null $additionalInfo additionalInfo
    *
    * @return $this
    */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->container['additionalInfo'] = $additionalInfo;
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

