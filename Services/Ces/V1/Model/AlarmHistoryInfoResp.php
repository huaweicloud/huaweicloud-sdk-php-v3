<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmHistoryInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmHistoryInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  **参数解释**： 告警规则的ID，如：al1603131199286dzxpqK3Ez。 **取值范围**： 字符串长度为24
    * alarmName  **参数解释**： 告警规则的名称，如：alarm-test01 **取值范围**： 字符串长度在 1 到 128 之间
    * alarmDescription  **参数解释**： 告警规则的描述 **取值范围**： 字符串长度在 0 到 256 之间
    * metric  metric
    * condition  condition
    * alarmLevel  **参数解释**： 告警记录的告警级别。 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * alarmType  **参数解释**： 告警规则类型 **取值范围**： 枚举值: - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * alarmEnabled  **参数解释**： 告警规则是否被启用 **取值范围**： 值为true或者false - true：开启 - false：关闭
    * alarmActionEnabled  **参数解释**： 是否发送通知 **取值范围**： 值为true或者false - true：发送通知 - false：不发送通知
    * alarmActions  **参数解释**： 告警触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值：notification：通知。autoscaling：弹性伸缩。notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  **参数解释**： 告警恢复触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：notification：通知。notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  **参数解释**： 数据不足触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：数据不足触发告警通知类型，取值为notification。notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000 **取值范围**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID），all_granted_eps（代表所有企业项目ID）
    * triggerTime  **参数解释**： 计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469 **取值范围**： 不涉及
    * alarmStatus  **参数解释**： 告警历史的状态 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效
    * datapoints  **参数解释**： 计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值
    * additionalInfo  additionalInfo
    * notificationManner  **参数解释** 通知方式 **取值范围**： 枚举值： - NOTIFICATION_POLICY：通知策略 - NOTIFICATION_GROUP：通知组 - TOPIC_SUBSCRIPTION：主题订阅
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'alarmName' => 'string',
            'alarmDescription' => 'string',
            'metric' => '\HuaweiCloud\SDK\Ces\V1\Model\MetricInfoResp',
            'condition' => '\HuaweiCloud\SDK\Ces\V1\Model\ConditionResp',
            'alarmLevel' => 'int',
            'alarmType' => 'string',
            'alarmEnabled' => 'bool',
            'alarmActionEnabled' => 'bool',
            'alarmActions' => '\HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]',
            'okActions' => '\HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]',
            'insufficientdataActions' => '\HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]',
            'updateTime' => 'int',
            'enterpriseProjectId' => 'string',
            'triggerTime' => 'int',
            'alarmStatus' => 'string',
            'datapoints' => '\HuaweiCloud\SDK\Ces\V1\Model\DataPointForAlarmHistoryResp[]',
            'additionalInfo' => '\HuaweiCloud\SDK\Ces\V1\Model\AdditionalInfoResp',
            'notificationManner' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  **参数解释**： 告警规则的ID，如：al1603131199286dzxpqK3Ez。 **取值范围**： 字符串长度为24
    * alarmName  **参数解释**： 告警规则的名称，如：alarm-test01 **取值范围**： 字符串长度在 1 到 128 之间
    * alarmDescription  **参数解释**： 告警规则的描述 **取值范围**： 字符串长度在 0 到 256 之间
    * metric  metric
    * condition  condition
    * alarmLevel  **参数解释**： 告警记录的告警级别。 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * alarmType  **参数解释**： 告警规则类型 **取值范围**： 枚举值: - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * alarmEnabled  **参数解释**： 告警规则是否被启用 **取值范围**： 值为true或者false - true：开启 - false：关闭
    * alarmActionEnabled  **参数解释**： 是否发送通知 **取值范围**： 值为true或者false - true：发送通知 - false：不发送通知
    * alarmActions  **参数解释**： 告警触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值：notification：通知。autoscaling：弹性伸缩。notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  **参数解释**： 告警恢复触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：notification：通知。notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  **参数解释**： 数据不足触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：数据不足触发告警通知类型，取值为notification。notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000 **取值范围**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID），all_granted_eps（代表所有企业项目ID）
    * triggerTime  **参数解释**： 计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469 **取值范围**： 不涉及
    * alarmStatus  **参数解释**： 告警历史的状态 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效
    * datapoints  **参数解释**： 计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值
    * additionalInfo  additionalInfo
    * notificationManner  **参数解释** 通知方式 **取值范围**： 枚举值： - NOTIFICATION_POLICY：通知策略 - NOTIFICATION_GROUP：通知组 - TOPIC_SUBSCRIPTION：主题订阅
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
        'additionalInfo' => null,
        'notificationManner' => null
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
    * alarmId  **参数解释**： 告警规则的ID，如：al1603131199286dzxpqK3Ez。 **取值范围**： 字符串长度为24
    * alarmName  **参数解释**： 告警规则的名称，如：alarm-test01 **取值范围**： 字符串长度在 1 到 128 之间
    * alarmDescription  **参数解释**： 告警规则的描述 **取值范围**： 字符串长度在 0 到 256 之间
    * metric  metric
    * condition  condition
    * alarmLevel  **参数解释**： 告警记录的告警级别。 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * alarmType  **参数解释**： 告警规则类型 **取值范围**： 枚举值: - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * alarmEnabled  **参数解释**： 告警规则是否被启用 **取值范围**： 值为true或者false - true：开启 - false：关闭
    * alarmActionEnabled  **参数解释**： 是否发送通知 **取值范围**： 值为true或者false - true：发送通知 - false：不发送通知
    * alarmActions  **参数解释**： 告警触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值：notification：通知。autoscaling：弹性伸缩。notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  **参数解释**： 告警恢复触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：notification：通知。notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  **参数解释**： 数据不足触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：数据不足触发告警通知类型，取值为notification。notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000 **取值范围**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID），all_granted_eps（代表所有企业项目ID）
    * triggerTime  **参数解释**： 计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469 **取值范围**： 不涉及
    * alarmStatus  **参数解释**： 告警历史的状态 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效
    * datapoints  **参数解释**： 计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值
    * additionalInfo  additionalInfo
    * notificationManner  **参数解释** 通知方式 **取值范围**： 枚举值： - NOTIFICATION_POLICY：通知策略 - NOTIFICATION_GROUP：通知组 - TOPIC_SUBSCRIPTION：主题订阅
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
            'additionalInfo' => 'additional_info',
            'notificationManner' => 'notification_manner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  **参数解释**： 告警规则的ID，如：al1603131199286dzxpqK3Ez。 **取值范围**： 字符串长度为24
    * alarmName  **参数解释**： 告警规则的名称，如：alarm-test01 **取值范围**： 字符串长度在 1 到 128 之间
    * alarmDescription  **参数解释**： 告警规则的描述 **取值范围**： 字符串长度在 0 到 256 之间
    * metric  metric
    * condition  condition
    * alarmLevel  **参数解释**： 告警记录的告警级别。 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * alarmType  **参数解释**： 告警规则类型 **取值范围**： 枚举值: - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * alarmEnabled  **参数解释**： 告警规则是否被启用 **取值范围**： 值为true或者false - true：开启 - false：关闭
    * alarmActionEnabled  **参数解释**： 是否发送通知 **取值范围**： 值为true或者false - true：发送通知 - false：不发送通知
    * alarmActions  **参数解释**： 告警触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值：notification：通知。autoscaling：弹性伸缩。notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  **参数解释**： 告警恢复触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：notification：通知。notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  **参数解释**： 数据不足触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：数据不足触发告警通知类型，取值为notification。notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000 **取值范围**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID），all_granted_eps（代表所有企业项目ID）
    * triggerTime  **参数解释**： 计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469 **取值范围**： 不涉及
    * alarmStatus  **参数解释**： 告警历史的状态 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效
    * datapoints  **参数解释**： 计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值
    * additionalInfo  additionalInfo
    * notificationManner  **参数解释** 通知方式 **取值范围**： 枚举值： - NOTIFICATION_POLICY：通知策略 - NOTIFICATION_GROUP：通知组 - TOPIC_SUBSCRIPTION：主题订阅
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
            'additionalInfo' => 'setAdditionalInfo',
            'notificationManner' => 'setNotificationManner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  **参数解释**： 告警规则的ID，如：al1603131199286dzxpqK3Ez。 **取值范围**： 字符串长度为24
    * alarmName  **参数解释**： 告警规则的名称，如：alarm-test01 **取值范围**： 字符串长度在 1 到 128 之间
    * alarmDescription  **参数解释**： 告警规则的描述 **取值范围**： 字符串长度在 0 到 256 之间
    * metric  metric
    * condition  condition
    * alarmLevel  **参数解释**： 告警记录的告警级别。 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * alarmType  **参数解释**： 告警规则类型 **取值范围**： 枚举值: - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * alarmEnabled  **参数解释**： 告警规则是否被启用 **取值范围**： 值为true或者false - true：开启 - false：关闭
    * alarmActionEnabled  **参数解释**： 是否发送通知 **取值范围**： 值为true或者false - true：发送通知 - false：不发送通知
    * alarmActions  **参数解释**： 告警触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值：notification：通知。autoscaling：弹性伸缩。notificationList：告警状态发生变化时，被通知对象的列表。
    * okActions  **参数解释**： 告警恢复触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：notification：通知。notificationList：告警状态发生变化时，被通知对象的列表。
    * insufficientdataActions  **参数解释**： 数据不足触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：数据不足触发告警通知类型，取值为notification。notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000 **取值范围**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID），all_granted_eps（代表所有企业项目ID）
    * triggerTime  **参数解释**： 计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469 **取值范围**： 不涉及
    * alarmStatus  **参数解释**： 告警历史的状态 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效
    * datapoints  **参数解释**： 计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值
    * additionalInfo  additionalInfo
    * notificationManner  **参数解释** 通知方式 **取值范围**： 枚举值： - NOTIFICATION_POLICY：通知策略 - NOTIFICATION_GROUP：通知组 - TOPIC_SUBSCRIPTION：主题订阅
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
            'additionalInfo' => 'getAdditionalInfo',
            'notificationManner' => 'getNotificationManner'
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
    const NOTIFICATION_MANNER_NOTIFICATION_POLICY = 'NOTIFICATION_POLICY';
    const NOTIFICATION_MANNER_NOTIFICATION_GROUP = 'NOTIFICATION_GROUP';
    const NOTIFICATION_MANNER_TOPIC_SUBSCRIPTION = 'TOPIC_SUBSCRIPTION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotificationMannerAllowableValues()
    {
        return [
            self::NOTIFICATION_MANNER_NOTIFICATION_POLICY,
            self::NOTIFICATION_MANNER_NOTIFICATION_GROUP,
            self::NOTIFICATION_MANNER_TOPIC_SUBSCRIPTION,
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
        $this->container['notificationManner'] = isset($data['notificationManner']) ? $data['notificationManner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getNotificationMannerAllowableValues();
                if (!is_null($this->container['notificationManner']) && !in_array($this->container['notificationManner'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notificationManner', must be one of '%s'",
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
    * Gets alarmId
    *  **参数解释**： 告警规则的ID，如：al1603131199286dzxpqK3Ez。 **取值范围**： 字符串长度为24
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
    * @param string|null $alarmId **参数解释**： 告警规则的ID，如：al1603131199286dzxpqK3Ez。 **取值范围**： 字符串长度为24
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
    *  **参数解释**： 告警规则的名称，如：alarm-test01 **取值范围**： 字符串长度在 1 到 128 之间
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
    * @param string|null $alarmName **参数解释**： 告警规则的名称，如：alarm-test01 **取值范围**： 字符串长度在 1 到 128 之间
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
    *  **参数解释**： 告警规则的描述 **取值范围**： 字符串长度在 0 到 256 之间
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
    * @param string|null $alarmDescription **参数解释**： 告警规则的描述 **取值范围**： 字符串长度在 0 到 256 之间
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
    * @return \HuaweiCloud\SDK\Ces\V1\Model\MetricInfoResp|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\MetricInfoResp|null $metric metric
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
    * @return \HuaweiCloud\SDK\Ces\V1\Model\ConditionResp|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\ConditionResp|null $condition condition
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
    *  **参数解释**： 告警记录的告警级别。 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示
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
    * @param int|null $alarmLevel **参数解释**： 告警记录的告警级别。 **取值范围**： 枚举值： - 1：紧急 - 2：重要 - 3：次要 - 4：提示
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
    *  **参数解释**： 告警规则类型 **取值范围**： 枚举值: - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
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
    * @param string|null $alarmType **参数解释**： 告警规则类型 **取值范围**： 枚举值: - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
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
    *  **参数解释**： 告警规则是否被启用 **取值范围**： 值为true或者false - true：开启 - false：关闭
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
    * @param bool|null $alarmEnabled **参数解释**： 告警规则是否被启用 **取值范围**： 值为true或者false - true：开启 - false：关闭
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
    *  **参数解释**： 是否发送通知 **取值范围**： 值为true或者false - true：发送通知 - false：不发送通知
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
    * @param bool|null $alarmActionEnabled **参数解释**： 是否发送通知 **取值范围**： 值为true或者false - true：发送通知 - false：不发送通知
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
    *  **参数解释**： 告警触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值：notification：通知。autoscaling：弹性伸缩。notificationList：告警状态发生变化时，被通知对象的列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]|null
    */
    public function getAlarmActions()
    {
        return $this->container['alarmActions'];
    }

    /**
    * Sets alarmActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]|null $alarmActions **参数解释**： 告警触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }  type取值：notification：通知。autoscaling：弹性伸缩。notificationList：告警状态发生变化时，被通知对象的列表。
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
    *  **参数解释**： 告警恢复触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：notification：通知。notificationList：告警状态发生变化时，被通知对象的列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]|null
    */
    public function getOkActions()
    {
        return $this->container['okActions'];
    }

    /**
    * Sets okActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]|null $okActions **参数解释**： 告警恢复触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：notification：通知。notificationList：告警状态发生变化时，被通知对象的列表。
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
    *  **参数解释**： 数据不足触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：数据不足触发告警通知类型，取值为notification。notificationList：数据不足触发告警通知时，被通知对象的ID列表。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]|null
    */
    public function getInsufficientdataActions()
    {
        return $this->container['insufficientdataActions'];
    }

    /**
    * Sets insufficientdataActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[][]|null $insufficientdataActions **参数解释**： 数据不足触发的动作。结构如下：{  \"type\": \"notification\", \"notificationList\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  } type取值：数据不足触发告警通知类型，取值为notification。notificationList：数据不足触发告警通知时，被通知对象的ID列表。
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
    *  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000 **取值范围**： 不涉及
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
    * @param int|null $updateTime **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒，如：1603131199000 **取值范围**： 不涉及
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
    *  **参数解释**： 企业项目ID **取值范围**： 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID），all_granted_eps（代表所有企业项目ID）
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID **取值范围**： 只能包含小写字母、数字、“-”、“_”，可以自定义企业项目ID，长度为36个字符。也可以为0（代表默认企业项目ID），all_granted_eps（代表所有企业项目ID）
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
    *  **参数解释**： 计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469 **取值范围**： 不涉及
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
    * @param int|null $triggerTime **参数解释**： 计算出该条告警历史的时间，UNIX时间戳，单位毫秒，如：1603131199469 **取值范围**： 不涉及
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
    *  **参数解释**： 告警历史的状态 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效
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
    * @param string|null $alarmStatus **参数解释**： 告警历史的状态 **取值范围**： 枚举值： - ok：正常 - alarm：告警 - insufficient_data：数据不足 - invalid：已失效
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
    *  **参数解释**： 计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\DataPointForAlarmHistoryResp[]|null
    */
    public function getDatapoints()
    {
        return $this->container['datapoints'];
    }

    /**
    * Sets datapoints
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\DataPointForAlarmHistoryResp[]|null $datapoints **参数解释**： 计算出该条告警历史的资源监控数据的一组数据上报时间和监控数值
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
    * @return \HuaweiCloud\SDK\Ces\V1\Model\AdditionalInfoResp|null
    */
    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    /**
    * Sets additionalInfo
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\AdditionalInfoResp|null $additionalInfo additionalInfo
    *
    * @return $this
    */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->container['additionalInfo'] = $additionalInfo;
        return $this;
    }

    /**
    * Gets notificationManner
    *  **参数解释** 通知方式 **取值范围**： 枚举值： - NOTIFICATION_POLICY：通知策略 - NOTIFICATION_GROUP：通知组 - TOPIC_SUBSCRIPTION：主题订阅
    *
    * @return string|null
    */
    public function getNotificationManner()
    {
        return $this->container['notificationManner'];
    }

    /**
    * Sets notificationManner
    *
    * @param string|null $notificationManner **参数解释** 通知方式 **取值范围**： 枚举值： - NOTIFICATION_POLICY：通知策略 - NOTIFICATION_GROUP：通知组 - TOPIC_SUBSCRIPTION：主题订阅
    *
    * @return $this
    */
    public function setNotificationManner($notificationManner)
    {
        $this->container['notificationManner'] = $notificationManner;
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

