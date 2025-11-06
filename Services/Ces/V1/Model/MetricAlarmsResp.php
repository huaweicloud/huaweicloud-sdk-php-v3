<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricAlarmsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricAlarmsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，字符长度为[1,128]。
    * alarmDescription  **参数解释**： 告警描述。 **取值范围**： 长度[0,256]个字符。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **取值范围**： 布尔值。 true:开启。 false:关闭。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  **参数解释**： 告警类型。 **取值范围**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 - EVENT.SYS：针对系统事件的告警类型 - EVENT.CUSTOM：针对自定义事件的告警类型 - RESOURCE_GROUP：针对资源分组的告警类型 - MULTI_INSTANCE：指定资源的告警类型
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否开启告警通知。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * okActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * insufficientdataActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * alarmActionBeginTime  **参数解释**： 告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * alarmActionEndTime  **参数解释**： 告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\" **取值范围**： 长度为[1,16]个字符。
    * alarmId  **参数解释**： 告警规则的ID。 **取值范围**： 以al开头，后跟22个数字或字母。字符长度为24
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒。 **取值范围** 0 - 9999999999999
    * alarmState  **参数解释**： 告警状态。 **取值范围**： 只能为ok、alarm、insufficient_data。字符长度为[0,17] - ok：正常 - alarm：告警 - insufficient_data：数据不足
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmName' => 'string',
            'alarmDescription' => 'string',
            'metric' => '\HuaweiCloud\SDK\Ces\V1\Model\ListAlarmMetricResp',
            'condition' => '\HuaweiCloud\SDK\Ces\V1\Model\ConditionResp',
            'alarmEnabled' => 'bool',
            'alarmLevel' => 'int',
            'alarmType' => 'string',
            'alarmActionEnabled' => 'bool',
            'alarmActions' => '\HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]',
            'okActions' => '\HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]',
            'insufficientdataActions' => '\HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]',
            'alarmActionBeginTime' => 'string',
            'alarmActionEndTime' => 'string',
            'effectiveTimezone' => 'string',
            'alarmId' => 'string',
            'updateTime' => 'int',
            'alarmState' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，字符长度为[1,128]。
    * alarmDescription  **参数解释**： 告警描述。 **取值范围**： 长度[0,256]个字符。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **取值范围**： 布尔值。 true:开启。 false:关闭。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  **参数解释**： 告警类型。 **取值范围**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 - EVENT.SYS：针对系统事件的告警类型 - EVENT.CUSTOM：针对自定义事件的告警类型 - RESOURCE_GROUP：针对资源分组的告警类型 - MULTI_INSTANCE：指定资源的告警类型
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否开启告警通知。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * okActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * insufficientdataActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * alarmActionBeginTime  **参数解释**： 告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * alarmActionEndTime  **参数解释**： 告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\" **取值范围**： 长度为[1,16]个字符。
    * alarmId  **参数解释**： 告警规则的ID。 **取值范围**： 以al开头，后跟22个数字或字母。字符长度为24
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒。 **取值范围** 0 - 9999999999999
    * alarmState  **参数解释**： 告警状态。 **取值范围**： 只能为ok、alarm、insufficient_data。字符长度为[0,17] - ok：正常 - alarm：告警 - insufficient_data：数据不足
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。
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
        'effectiveTimezone' => null,
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
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，字符长度为[1,128]。
    * alarmDescription  **参数解释**： 告警描述。 **取值范围**： 长度[0,256]个字符。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **取值范围**： 布尔值。 true:开启。 false:关闭。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  **参数解释**： 告警类型。 **取值范围**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 - EVENT.SYS：针对系统事件的告警类型 - EVENT.CUSTOM：针对自定义事件的告警类型 - RESOURCE_GROUP：针对资源分组的告警类型 - MULTI_INSTANCE：指定资源的告警类型
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否开启告警通知。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * okActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * insufficientdataActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * alarmActionBeginTime  **参数解释**： 告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * alarmActionEndTime  **参数解释**： 告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\" **取值范围**： 长度为[1,16]个字符。
    * alarmId  **参数解释**： 告警规则的ID。 **取值范围**： 以al开头，后跟22个数字或字母。字符长度为24
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒。 **取值范围** 0 - 9999999999999
    * alarmState  **参数解释**： 告警状态。 **取值范围**： 只能为ok、alarm、insufficient_data。字符长度为[0,17] - ok：正常 - alarm：告警 - insufficient_data：数据不足
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。
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
            'effectiveTimezone' => 'effective_timezone',
            'alarmId' => 'alarm_id',
            'updateTime' => 'update_time',
            'alarmState' => 'alarm_state',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，字符长度为[1,128]。
    * alarmDescription  **参数解释**： 告警描述。 **取值范围**： 长度[0,256]个字符。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **取值范围**： 布尔值。 true:开启。 false:关闭。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  **参数解释**： 告警类型。 **取值范围**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 - EVENT.SYS：针对系统事件的告警类型 - EVENT.CUSTOM：针对自定义事件的告警类型 - RESOURCE_GROUP：针对资源分组的告警类型 - MULTI_INSTANCE：指定资源的告警类型
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否开启告警通知。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * okActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * insufficientdataActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * alarmActionBeginTime  **参数解释**： 告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * alarmActionEndTime  **参数解释**： 告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\" **取值范围**： 长度为[1,16]个字符。
    * alarmId  **参数解释**： 告警规则的ID。 **取值范围**： 以al开头，后跟22个数字或字母。字符长度为24
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒。 **取值范围** 0 - 9999999999999
    * alarmState  **参数解释**： 告警状态。 **取值范围**： 只能为ok、alarm、insufficient_data。字符长度为[0,17] - ok：正常 - alarm：告警 - insufficient_data：数据不足
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。
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
            'effectiveTimezone' => 'setEffectiveTimezone',
            'alarmId' => 'setAlarmId',
            'updateTime' => 'setUpdateTime',
            'alarmState' => 'setAlarmState',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmName  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，字符长度为[1,128]。
    * alarmDescription  **参数解释**： 告警描述。 **取值范围**： 长度[0,256]个字符。
    * metric  metric
    * condition  condition
    * alarmEnabled  **参数解释**： 是否启用该条告警。 **取值范围**： 布尔值。 true:开启。 false:关闭。
    * alarmLevel  **参数解释**： 告警级别。 **取值范围**： 级别为1、2、3、4。分别对应紧急、重要、次要、提示。
    * alarmType  **参数解释**： 告警类型。 **取值范围**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 - EVENT.SYS：针对系统事件的告警类型 - EVENT.CUSTOM：针对自定义事件的告警类型 - RESOURCE_GROUP：针对资源分组的告警类型 - MULTI_INSTANCE：指定资源的告警类型
    * alarmActionEnabled  **参数解释**： 该条告警触发时，是否开启告警通知。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * okActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * insufficientdataActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    * alarmActionBeginTime  **参数解释**： 告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * alarmActionEndTime  **参数解释**： 告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    * effectiveTimezone  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\" **取值范围**： 长度为[1,16]个字符。
    * alarmId  **参数解释**： 告警规则的ID。 **取值范围**： 以al开头，后跟22个数字或字母。字符长度为24
    * updateTime  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒。 **取值范围** 0 - 9999999999999
    * alarmState  **参数解释**： 告警状态。 **取值范围**： 只能为ok、alarm、insufficient_data。字符长度为[0,17] - ok：正常 - alarm：告警 - insufficient_data：数据不足
    * enterpriseProjectId  **参数解释**： 企业项目ID。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。
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
            'effectiveTimezone' => 'getEffectiveTimezone',
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
        $this->container['effectiveTimezone'] = isset($data['effectiveTimezone']) ? $data['effectiveTimezone'] : null;
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
            if (!is_null($this->container['alarmName']) && (mb_strlen($this->container['alarmName']) > 128)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['alarmName']) && (mb_strlen($this->container['alarmName']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmName']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['alarmName'])) {
                $invalidProperties[] = "invalid value for 'alarmName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['alarmDescription']) && (mb_strlen($this->container['alarmDescription']) > 256)) {
                $invalidProperties[] = "invalid value for 'alarmDescription', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] > 4)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] < 1)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmActionBeginTime']) && (mb_strlen($this->container['alarmActionBeginTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'alarmActionBeginTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['alarmActionBeginTime']) && (mb_strlen($this->container['alarmActionBeginTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmActionBeginTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmActionBeginTime']) && !preg_match("/^([01][0-9]|2[0-3]):([0-5][0-9])$/", $this->container['alarmActionBeginTime'])) {
                $invalidProperties[] = "invalid value for 'alarmActionBeginTime', must be conform to the pattern /^([01][0-9]|2[0-3]):([0-5][0-9])$/.";
            }
            if (!is_null($this->container['alarmActionEndTime']) && (mb_strlen($this->container['alarmActionEndTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'alarmActionEndTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['alarmActionEndTime']) && (mb_strlen($this->container['alarmActionEndTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmActionEndTime', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['alarmActionEndTime']) && !preg_match("/^([01][0-9]|2[0-3]):([0-5][0-9])$/", $this->container['alarmActionEndTime'])) {
                $invalidProperties[] = "invalid value for 'alarmActionEndTime', must be conform to the pattern /^([01][0-9]|2[0-3]):([0-5][0-9])$/.";
            }
            if (!is_null($this->container['effectiveTimezone']) && (mb_strlen($this->container['effectiveTimezone']) > 16)) {
                $invalidProperties[] = "invalid value for 'effectiveTimezone', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['effectiveTimezone']) && (mb_strlen($this->container['effectiveTimezone']) < 1)) {
                $invalidProperties[] = "invalid value for 'effectiveTimezone', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['effectiveTimezone']) && !preg_match("/^(GMT[+-](0|0[1-9]|1[0-2]):00)$/", $this->container['effectiveTimezone'])) {
                $invalidProperties[] = "invalid value for 'effectiveTimezone', must be conform to the pattern /^(GMT[+-](0|0[1-9]|1[0-2]):00)$/.";
            }
            if (!is_null($this->container['alarmId']) && !preg_match("/^al([0-9A-Za-z]){22}$/", $this->container['alarmId'])) {
                $invalidProperties[] = "invalid value for 'alarmId', must be conform to the pattern /^al([0-9A-Za-z]){22}$/.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarmState']) && (mb_strlen($this->container['alarmState']) > 17)) {
                $invalidProperties[] = "invalid value for 'alarmState', the character length must be smaller than or equal to 17.";
            }
            if (!is_null($this->container['alarmState']) && (mb_strlen($this->container['alarmState']) < 0)) {
                $invalidProperties[] = "invalid value for 'alarmState', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，字符长度为[1,128]。
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
    * @param string|null $alarmName **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，字符长度为[1,128]。
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
    *  **参数解释**： 告警描述。 **取值范围**： 长度[0,256]个字符。
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
    * @param string|null $alarmDescription **参数解释**： 告警描述。 **取值范围**： 长度[0,256]个字符。
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
    * @return \HuaweiCloud\SDK\Ces\V1\Model\ListAlarmMetricResp|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\ListAlarmMetricResp|null $metric metric
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
    * Gets alarmEnabled
    *  **参数解释**： 是否启用该条告警。 **取值范围**： 布尔值。 true:开启。 false:关闭。
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
    * @param bool|null $alarmEnabled **参数解释**： 是否启用该条告警。 **取值范围**： 布尔值。 true:开启。 false:关闭。
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
    *  **参数解释**： 告警级别。 **取值范围**： 级别为1、2、3、4。分别对应紧急、重要、次要、提示。
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
    * @param int|null $alarmLevel **参数解释**： 告警级别。 **取值范围**： 级别为1、2、3、4。分别对应紧急、重要、次要、提示。
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
    *  **参数解释**： 告警类型。 **取值范围**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 - EVENT.SYS：针对系统事件的告警类型 - EVENT.CUSTOM：针对自定义事件的告警类型 - RESOURCE_GROUP：针对资源分组的告警类型 - MULTI_INSTANCE：指定资源的告警类型
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
    * @param string|null $alarmType **参数解释**： 告警类型。 **取值范围**： 针对事件类型的告警时，告警类型为EVENT.SYS（系统事件）或EVENT.CUSTOM（自定义事件）。 针对资源分组的告警时，告警类型为RESOURCE_GROUP。 针对指定资源的告警时，告警类型为MULTI_INSTANCE。 - EVENT.SYS：针对系统事件的告警类型 - EVENT.CUSTOM：针对自定义事件的告警类型 - RESOURCE_GROUP：针对资源分组的告警类型 - MULTI_INSTANCE：指定资源的告警类型
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
    *  **参数解释**： 该条告警触发时，是否开启告警通知。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。
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
    * @param bool|null $alarmActionEnabled **参数解释**： 该条告警触发时，是否开启告警通知。 **取值范围**： 布尔值。 - true：开启告警通知。 - false：不开启告警通知。
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
    *  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]|null
    */
    public function getAlarmActions()
    {
        return $this->container['alarmActions'];
    }

    /**
    * Sets alarmActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]|null $alarmActions **参数解释**： 告警触发时，通知组/主题订阅的信息。
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
    *  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]|null
    */
    public function getOkActions()
    {
        return $this->container['okActions'];
    }

    /**
    * Sets okActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]|null $okActions **参数解释**： 告警触发时，通知组/主题订阅的信息。
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
    *  **参数解释**： 告警触发时，通知组/主题订阅的信息。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]|null
    */
    public function getInsufficientdataActions()
    {
        return $this->container['insufficientdataActions'];
    }

    /**
    * Sets insufficientdataActions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\NotificationResp[]|null $insufficientdataActions **参数解释**： 告警触发时，通知组/主题订阅的信息。
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
    *  **参数解释**： 告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
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
    * @param string|null $alarmActionBeginTime **参数解释**： 告警规则生效的开始时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
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
    *  **参数解释**： 告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
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
    * @param string|null $alarmActionEndTime **参数解释**： 告警规则生效的结束时间，告警规则仅在生效时间内发送通知消息。例如alarm_action_begin_time为8:00，alarm_action_end_time为20:00时，则对应的告警规则仅在08:00-20:00发送通知消息。 **取值范围**： 只能包含数字、“:”，长度为[1,64]个字符。
    *
    * @return $this
    */
    public function setAlarmActionEndTime($alarmActionEndTime)
    {
        $this->container['alarmActionEndTime'] = $alarmActionEndTime;
        return $this;
    }

    /**
    * Gets effectiveTimezone
    *  **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\" **取值范围**： 长度为[1,16]个字符。
    *
    * @return string|null
    */
    public function getEffectiveTimezone()
    {
        return $this->container['effectiveTimezone'];
    }

    /**
    * Sets effectiveTimezone
    *
    * @param string|null $effectiveTimezone **参数解释**： 时区，形如：\"GMT-08:00\"、\"GMT+08:00\"、\"GMT+0:00\" **取值范围**： 长度为[1,16]个字符。
    *
    * @return $this
    */
    public function setEffectiveTimezone($effectiveTimezone)
    {
        $this->container['effectiveTimezone'] = $effectiveTimezone;
        return $this;
    }

    /**
    * Gets alarmId
    *  **参数解释**： 告警规则的ID。 **取值范围**： 以al开头，后跟22个数字或字母。字符长度为24
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
    * @param string|null $alarmId **参数解释**： 告警规则的ID。 **取值范围**： 以al开头，后跟22个数字或字母。字符长度为24
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
    *  **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒。 **取值范围** 0 - 9999999999999
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
    * @param int|null $updateTime **参数解释**： 告警状态变更的时间，UNIX时间戳，单位毫秒。 **取值范围** 0 - 9999999999999
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
    *  **参数解释**： 告警状态。 **取值范围**： 只能为ok、alarm、insufficient_data。字符长度为[0,17] - ok：正常 - alarm：告警 - insufficient_data：数据不足
    *
    * @return string|null
    */
    public function getAlarmState()
    {
        return $this->container['alarmState'];
    }

    /**
    * Sets alarmState
    *
    * @param string|null $alarmState **参数解释**： 告警状态。 **取值范围**： 只能为ok、alarm、insufficient_data。字符长度为[0,17] - ok：正常 - alarm：告警 - insufficient_data：数据不足
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
    *  **参数解释**： 企业项目ID。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID。 **取值范围**： 只能包含小写字母、数字、“-”、“_”，长度为36个字符。也可取值0或all_granted_eps。0：代表默认企业项目ID，all_granted_eps：代表所有企业项目ID。
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

