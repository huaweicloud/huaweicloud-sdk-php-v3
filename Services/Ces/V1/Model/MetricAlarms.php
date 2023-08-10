<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricAlarms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricAlarms';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmName  告警名称。
    * alarmDescription  告警描述。
    * metric  metric
    * condition  condition
    * alarmEnabled  是否启用该条告警。
    * alarmLevel  告警级别，默认为2，级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  告警类型。 仅针对事件告警的参数，枚举类型：EVENT.SYS或者EVENT.CUSTOM
    * alarmActionEnabled  是否启用该条告警触发的动作。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * alarmActionBeginTime  告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmActionEndTime  告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmId  告警规则的ID。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒。
    * alarmState  告警状态，取值说明：  ok，正常 alarm，告警 insufficient_data，数据不足
    * enterpriseProjectId  企业项目ID。 取值为all_granted_eps时，表示所有企业项目; 取值为0时，表示默认的企业项目default。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmName' => 'string',
            'alarmDescription' => 'string',
            'metric' => '\HuaweiCloud\SDK\Ces\V1\Model\MetricInfoForAlarm',
            'condition' => '\HuaweiCloud\SDK\Ces\V1\Model\Condition',
            'alarmEnabled' => 'bool',
            'alarmLevel' => 'int',
            'alarmType' => 'string',
            'alarmActionEnabled' => 'bool',
            'alarmActions' => '\HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]',
            'okActions' => '\HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]',
            'insufficientdataActions' => '\HuaweiCloud\SDK\Ces\V1\Model\AlarmActions[]',
            'alarmActionBeginTime' => 'string',
            'alarmActionEndTime' => 'string',
            'alarmId' => 'string',
            'updateTime' => 'int',
            'alarmState' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmName  告警名称。
    * alarmDescription  告警描述。
    * metric  metric
    * condition  condition
    * alarmEnabled  是否启用该条告警。
    * alarmLevel  告警级别，默认为2，级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  告警类型。 仅针对事件告警的参数，枚举类型：EVENT.SYS或者EVENT.CUSTOM
    * alarmActionEnabled  是否启用该条告警触发的动作。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * alarmActionBeginTime  告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmActionEndTime  告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmId  告警规则的ID。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒。
    * alarmState  告警状态，取值说明：  ok，正常 alarm，告警 insufficient_data，数据不足
    * enterpriseProjectId  企业项目ID。 取值为all_granted_eps时，表示所有企业项目; 取值为0时，表示默认的企业项目default。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmName' => null,
        'alarmDescription' => null,
        'metric' => null,
        'condition' => null,
        'alarmEnabled' => null,
        'alarmLevel' => 'int32',
        'alarmType' => null,
        'alarmActionEnabled' => null,
        'alarmActions' => null,
        'okActions' => null,
        'insufficientdataActions' => null,
        'alarmActionBeginTime' => null,
        'alarmActionEndTime' => null,
        'alarmId' => null,
        'updateTime' => 'int64',
        'alarmState' => null,
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
    * alarmName  告警名称。
    * alarmDescription  告警描述。
    * metric  metric
    * condition  condition
    * alarmEnabled  是否启用该条告警。
    * alarmLevel  告警级别，默认为2，级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  告警类型。 仅针对事件告警的参数，枚举类型：EVENT.SYS或者EVENT.CUSTOM
    * alarmActionEnabled  是否启用该条告警触发的动作。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * alarmActionBeginTime  告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmActionEndTime  告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmId  告警规则的ID。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒。
    * alarmState  告警状态，取值说明：  ok，正常 alarm，告警 insufficient_data，数据不足
    * enterpriseProjectId  企业项目ID。 取值为all_granted_eps时，表示所有企业项目; 取值为0时，表示默认的企业项目default。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmName' => 'alarm_name',
            'alarmDescription' => 'alarm_description',
            'metric' => 'metric',
            'condition' => 'condition',
            'alarmEnabled' => 'alarm_enabled',
            'alarmLevel' => 'alarm_level',
            'alarmType' => 'alarm_type',
            'alarmActionEnabled' => 'alarm_action_enabled',
            'alarmActions' => 'alarm_actions',
            'okActions' => 'ok_actions',
            'insufficientdataActions' => 'insufficientdata_actions',
            'alarmActionBeginTime' => 'alarm_action_begin_time',
            'alarmActionEndTime' => 'alarm_action_end_time',
            'alarmId' => 'alarm_id',
            'updateTime' => 'update_time',
            'alarmState' => 'alarm_state',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmName  告警名称。
    * alarmDescription  告警描述。
    * metric  metric
    * condition  condition
    * alarmEnabled  是否启用该条告警。
    * alarmLevel  告警级别，默认为2，级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  告警类型。 仅针对事件告警的参数，枚举类型：EVENT.SYS或者EVENT.CUSTOM
    * alarmActionEnabled  是否启用该条告警触发的动作。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * alarmActionBeginTime  告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmActionEndTime  告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmId  告警规则的ID。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒。
    * alarmState  告警状态，取值说明：  ok，正常 alarm，告警 insufficient_data，数据不足
    * enterpriseProjectId  企业项目ID。 取值为all_granted_eps时，表示所有企业项目; 取值为0时，表示默认的企业项目default。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmName' => 'setAlarmName',
            'alarmDescription' => 'setAlarmDescription',
            'metric' => 'setMetric',
            'condition' => 'setCondition',
            'alarmEnabled' => 'setAlarmEnabled',
            'alarmLevel' => 'setAlarmLevel',
            'alarmType' => 'setAlarmType',
            'alarmActionEnabled' => 'setAlarmActionEnabled',
            'alarmActions' => 'setAlarmActions',
            'okActions' => 'setOkActions',
            'insufficientdataActions' => 'setInsufficientdataActions',
            'alarmActionBeginTime' => 'setAlarmActionBeginTime',
            'alarmActionEndTime' => 'setAlarmActionEndTime',
            'alarmId' => 'setAlarmId',
            'updateTime' => 'setUpdateTime',
            'alarmState' => 'setAlarmState',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmName  告警名称。
    * alarmDescription  告警描述。
    * metric  metric
    * condition  condition
    * alarmEnabled  是否启用该条告警。
    * alarmLevel  告警级别，默认为2，级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  告警类型。 仅针对事件告警的参数，枚举类型：EVENT.SYS或者EVENT.CUSTOM
    * alarmActionEnabled  是否启用该条告警触发的动作。
    * alarmActions  告警触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： notification：通知。 autoscaling：弹性伸缩。 notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  告警恢复触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：  notification：通知。  notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  数据不足触发的动作。  结构如下：  {  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值： 数据不足触发告警通知类型，取值为notification。 notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * alarmActionBeginTime  告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmActionEndTime  告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    * alarmId  告警规则的ID。
    * updateTime  告警状态变更的时间，UNIX时间戳，单位毫秒。
    * alarmState  告警状态，取值说明：  ok，正常 alarm，告警 insufficient_data，数据不足
    * enterpriseProjectId  企业项目ID。 取值为all_granted_eps时，表示所有企业项目; 取值为0时，表示默认的企业项目default。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmName' => 'getAlarmName',
            'alarmDescription' => 'getAlarmDescription',
            'metric' => 'getMetric',
            'condition' => 'getCondition',
            'alarmEnabled' => 'getAlarmEnabled',
            'alarmLevel' => 'getAlarmLevel',
            'alarmType' => 'getAlarmType',
            'alarmActionEnabled' => 'getAlarmActionEnabled',
            'alarmActions' => 'getAlarmActions',
            'okActions' => 'getOkActions',
            'insufficientdataActions' => 'getInsufficientdataActions',
            'alarmActionBeginTime' => 'getAlarmActionBeginTime',
            'alarmActionEndTime' => 'getAlarmActionEndTime',
            'alarmId' => 'getAlarmId',
            'updateTime' => 'getUpdateTime',
            'alarmState' => 'getAlarmState',
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
    const ALARM_TYPE_EVENT_SYS = 'EVENT.SYS';
    const ALARM_TYPE_EVENT_CUSTOM = 'EVENT.CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlarmTypeAllowableValues()
    {
        return [
            self::ALARM_TYPE_EVENT_SYS,
            self::ALARM_TYPE_EVENT_CUSTOM,
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
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['alarmDescription'] = isset($data['alarmDescription']) ? $data['alarmDescription'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['alarmEnabled'] = isset($data['alarmEnabled']) ? $data['alarmEnabled'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['alarmActionEnabled'] = isset($data['alarmActionEnabled']) ? $data['alarmActionEnabled'] : null;
        $this->container['alarmActions'] = isset($data['alarmActions']) ? $data['alarmActions'] : null;
        $this->container['okActions'] = isset($data['okActions']) ? $data['okActions'] : null;
        $this->container['insufficientdataActions'] = isset($data['insufficientdataActions']) ? $data['insufficientdataActions'] : null;
        $this->container['alarmActionBeginTime'] = isset($data['alarmActionBeginTime']) ? $data['alarmActionBeginTime'] : null;
        $this->container['alarmActionEndTime'] = isset($data['alarmActionEndTime']) ? $data['alarmActionEndTime'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['alarmState'] = isset($data['alarmState']) ? $data['alarmState'] : null;
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
        if ($this->container['alarmName'] === null) {
            $invalidProperties[] = "'alarmName' can't be null";
        }
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
            $allowedValues = $this->getAlarmTypeAllowableValues();
                if (!is_null($this->container['alarmType']) && !in_array($this->container['alarmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'alarmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['alarmId'] === null) {
            $invalidProperties[] = "'alarmId' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['alarmState'] === null) {
            $invalidProperties[] = "'alarmState' can't be null";
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
    * Gets alarmName
    *  告警名称。
    *
    * @return string
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string $alarmName 告警名称。
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
    *  告警描述。
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
    * @param string|null $alarmDescription 告警描述。
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
    * @return \HuaweiCloud\SDK\Ces\V1\Model\MetricInfoForAlarm
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\MetricInfoForAlarm $metric metric
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
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Condition
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Condition $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets alarmEnabled
    *  是否启用该条告警。
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
    * @param bool|null $alarmEnabled 是否启用该条告警。
    *
    * @return $this
    */
    public function setAlarmEnabled($alarmEnabled)
    {
        $this->container['alarmEnabled'] = $alarmEnabled;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警级别，默认为2，级别为1、2、3、4。分别对应紧急、重要、次要、提示。
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
    * @param int|null $alarmLevel 告警级别，默认为2，级别为1、2、3、4。分别对应紧急、重要、次要、提示。
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
    *  告警类型。 仅针对事件告警的参数，枚举类型：EVENT.SYS或者EVENT.CUSTOM
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
    * @param string|null $alarmType 告警类型。 仅针对事件告警的参数，枚举类型：EVENT.SYS或者EVENT.CUSTOM
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets alarmActionEnabled
    *  是否启用该条告警触发的动作。
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
    * @param bool|null $alarmActionEnabled 是否启用该条告警触发的动作。
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
    * Gets alarmActionBeginTime
    *  告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    *
    * @return string|null
    */
    public function getAlarmActionBeginTime()
    {
        return $this->container['alarmActionBeginTime'];
    }

    /**
    * Sets alarmActionBeginTime
    *
    * @param string|null $alarmActionBeginTime 告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    *
    * @return $this
    */
    public function setAlarmActionBeginTime($alarmActionBeginTime)
    {
        $this->container['alarmActionBeginTime'] = $alarmActionBeginTime;
        return $this;
    }

    /**
    * Gets alarmActionEndTime
    *  告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    *
    * @return string|null
    */
    public function getAlarmActionEndTime()
    {
        return $this->container['alarmActionEndTime'];
    }

    /**
    * Sets alarmActionEndTime
    *
    * @param string|null $alarmActionEndTime 告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。
    *
    * @return $this
    */
    public function setAlarmActionEndTime($alarmActionEndTime)
    {
        $this->container['alarmActionEndTime'] = $alarmActionEndTime;
        return $this;
    }

    /**
    * Gets alarmId
    *  告警规则的ID。
    *
    * @return string
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string $alarmId 告警规则的ID。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets updateTime
    *  告警状态变更的时间，UNIX时间戳，单位毫秒。
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 告警状态变更的时间，UNIX时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets alarmState
    *  告警状态，取值说明：  ok，正常 alarm，告警 insufficient_data，数据不足
    *
    * @return string
    */
    public function getAlarmState()
    {
        return $this->container['alarmState'];
    }

    /**
    * Sets alarmState
    *
    * @param string $alarmState 告警状态，取值说明：  ok，正常 alarm，告警 insufficient_data，数据不足
    *
    * @return $this
    */
    public function setAlarmState($alarmState)
    {
        $this->container['alarmState'] = $alarmState;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 取值为all_granted_eps时，表示所有企业项目; 取值为0时，表示默认的企业项目default。
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
    * @param string|null $enterpriseProjectId 企业项目ID。 取值为all_granted_eps时，表示所有企业项目; 取值为0时，表示默认的企业项目default。
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

