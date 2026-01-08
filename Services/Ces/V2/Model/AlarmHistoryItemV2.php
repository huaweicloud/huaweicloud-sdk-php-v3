<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmHistoryItemV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmHistoryItemV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 以al开头，后跟22位的字母或数字。
    * name  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为[1,128]个字符。
    * status  **参数解释**： 告警规则状态 **取值范围**： 枚举值。 - ok：正常 - alarm：告警 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 手动恢复
    * level  **参数解释**： 告警记录的告警级别。 **取值范围**： 值为1,2,3,4 - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * type  **参数解释**： 告警规则类型。 **取值范围**： 枚举值 - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * actionEnabled  **参数解释**： 是否发送通知 **取值范围**： - true：发送通知 - false：不发送通知
    * beginTime  **参数解释**： 产生时间,UTC时间 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间，UTC时间 **取值范围**： 不涉及。
    * firstAlarmTime  **参数解释**： 第一次告警时间，UTC时间 **取值范围**： 不涉及。
    * lastAlarmTime  **参数解释**： 最后一次告警时间，UTC时间。 **取值范围**： 不涉及。
    * alarmRecoveryTime  **参数解释**： 告警恢复时间，UTC时间。 **取值范围**： 不涉及。
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * dataPoints  **参数解释**： 计算出该条告警记录的资源监控数据上报时间和监控数值。
    * maskStatus  **参数解释**： 告警屏蔽状态。 **取值范围**： - MASKED：已屏蔽 - UN_MASKED：未屏蔽
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordId' => 'string',
            'alarmId' => 'string',
            'name' => 'string',
            'status' => 'string',
            'level' => 'int',
            'type' => 'string',
            'actionEnabled' => 'bool',
            'beginTime' => '\DateTime',
            'endTime' => '\DateTime',
            'firstAlarmTime' => '\DateTime',
            'lastAlarmTime' => '\DateTime',
            'alarmRecoveryTime' => '\DateTime',
            'metric' => '\HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2Metric',
            'condition' => '\HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2Condition',
            'additionalInfo' => '\HuaweiCloud\SDK\Ces\V2\Model\AdditionalInfo',
            'alarmActions' => '\HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2AlarmActions[]',
            'okActions' => '\HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2AlarmActions[]',
            'dataPoints' => '\HuaweiCloud\SDK\Ces\V2\Model\DataPointInfo[]',
            'maskStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 以al开头，后跟22位的字母或数字。
    * name  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为[1,128]个字符。
    * status  **参数解释**： 告警规则状态 **取值范围**： 枚举值。 - ok：正常 - alarm：告警 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 手动恢复
    * level  **参数解释**： 告警记录的告警级别。 **取值范围**： 值为1,2,3,4 - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * type  **参数解释**： 告警规则类型。 **取值范围**： 枚举值 - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * actionEnabled  **参数解释**： 是否发送通知 **取值范围**： - true：发送通知 - false：不发送通知
    * beginTime  **参数解释**： 产生时间,UTC时间 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间，UTC时间 **取值范围**： 不涉及。
    * firstAlarmTime  **参数解释**： 第一次告警时间，UTC时间 **取值范围**： 不涉及。
    * lastAlarmTime  **参数解释**： 最后一次告警时间，UTC时间。 **取值范围**： 不涉及。
    * alarmRecoveryTime  **参数解释**： 告警恢复时间，UTC时间。 **取值范围**： 不涉及。
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * dataPoints  **参数解释**： 计算出该条告警记录的资源监控数据上报时间和监控数值。
    * maskStatus  **参数解释**： 告警屏蔽状态。 **取值范围**： - MASKED：已屏蔽 - UN_MASKED：未屏蔽
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordId' => null,
        'alarmId' => null,
        'name' => null,
        'status' => null,
        'level' => 'int32',
        'type' => null,
        'actionEnabled' => null,
        'beginTime' => 'date-time',
        'endTime' => 'date-time',
        'firstAlarmTime' => 'date-time',
        'lastAlarmTime' => 'date-time',
        'alarmRecoveryTime' => 'date-time',
        'metric' => null,
        'condition' => null,
        'additionalInfo' => null,
        'alarmActions' => null,
        'okActions' => null,
        'dataPoints' => null,
        'maskStatus' => null
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
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 以al开头，后跟22位的字母或数字。
    * name  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为[1,128]个字符。
    * status  **参数解释**： 告警规则状态 **取值范围**： 枚举值。 - ok：正常 - alarm：告警 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 手动恢复
    * level  **参数解释**： 告警记录的告警级别。 **取值范围**： 值为1,2,3,4 - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * type  **参数解释**： 告警规则类型。 **取值范围**： 枚举值 - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * actionEnabled  **参数解释**： 是否发送通知 **取值范围**： - true：发送通知 - false：不发送通知
    * beginTime  **参数解释**： 产生时间,UTC时间 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间，UTC时间 **取值范围**： 不涉及。
    * firstAlarmTime  **参数解释**： 第一次告警时间，UTC时间 **取值范围**： 不涉及。
    * lastAlarmTime  **参数解释**： 最后一次告警时间，UTC时间。 **取值范围**： 不涉及。
    * alarmRecoveryTime  **参数解释**： 告警恢复时间，UTC时间。 **取值范围**： 不涉及。
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * dataPoints  **参数解释**： 计算出该条告警记录的资源监控数据上报时间和监控数值。
    * maskStatus  **参数解释**： 告警屏蔽状态。 **取值范围**： - MASKED：已屏蔽 - UN_MASKED：未屏蔽
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordId' => 'record_id',
            'alarmId' => 'alarm_id',
            'name' => 'name',
            'status' => 'status',
            'level' => 'level',
            'type' => 'type',
            'actionEnabled' => 'action_enabled',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'firstAlarmTime' => 'first_alarm_time',
            'lastAlarmTime' => 'last_alarm_time',
            'alarmRecoveryTime' => 'alarm_recovery_time',
            'metric' => 'metric',
            'condition' => 'condition',
            'additionalInfo' => 'additional_info',
            'alarmActions' => 'alarm_actions',
            'okActions' => 'ok_actions',
            'dataPoints' => 'data_points',
            'maskStatus' => 'mask_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 以al开头，后跟22位的字母或数字。
    * name  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为[1,128]个字符。
    * status  **参数解释**： 告警规则状态 **取值范围**： 枚举值。 - ok：正常 - alarm：告警 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 手动恢复
    * level  **参数解释**： 告警记录的告警级别。 **取值范围**： 值为1,2,3,4 - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * type  **参数解释**： 告警规则类型。 **取值范围**： 枚举值 - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * actionEnabled  **参数解释**： 是否发送通知 **取值范围**： - true：发送通知 - false：不发送通知
    * beginTime  **参数解释**： 产生时间,UTC时间 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间，UTC时间 **取值范围**： 不涉及。
    * firstAlarmTime  **参数解释**： 第一次告警时间，UTC时间 **取值范围**： 不涉及。
    * lastAlarmTime  **参数解释**： 最后一次告警时间，UTC时间。 **取值范围**： 不涉及。
    * alarmRecoveryTime  **参数解释**： 告警恢复时间，UTC时间。 **取值范围**： 不涉及。
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * dataPoints  **参数解释**： 计算出该条告警记录的资源监控数据上报时间和监控数值。
    * maskStatus  **参数解释**： 告警屏蔽状态。 **取值范围**： - MASKED：已屏蔽 - UN_MASKED：未屏蔽
    *
    * @var string[]
    */
    protected static $setters = [
            'recordId' => 'setRecordId',
            'alarmId' => 'setAlarmId',
            'name' => 'setName',
            'status' => 'setStatus',
            'level' => 'setLevel',
            'type' => 'setType',
            'actionEnabled' => 'setActionEnabled',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'firstAlarmTime' => 'setFirstAlarmTime',
            'lastAlarmTime' => 'setLastAlarmTime',
            'alarmRecoveryTime' => 'setAlarmRecoveryTime',
            'metric' => 'setMetric',
            'condition' => 'setCondition',
            'additionalInfo' => 'setAdditionalInfo',
            'alarmActions' => 'setAlarmActions',
            'okActions' => 'setOkActions',
            'dataPoints' => 'setDataPoints',
            'maskStatus' => 'setMaskStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordId  **参数解释**： 告警流水号。优化告警流水号生成规则，由 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 以al开头，后跟22位的字母或数字。
    * name  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为[1,128]个字符。
    * status  **参数解释**： 告警规则状态 **取值范围**： 枚举值。 - ok：正常 - alarm：告警 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 手动恢复
    * level  **参数解释**： 告警记录的告警级别。 **取值范围**： 值为1,2,3,4 - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    * type  **参数解释**： 告警规则类型。 **取值范围**： 枚举值 - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    * actionEnabled  **参数解释**： 是否发送通知 **取值范围**： - true：发送通知 - false：不发送通知
    * beginTime  **参数解释**： 产生时间,UTC时间 **取值范围**： 不涉及。
    * endTime  **参数解释**： 结束时间，UTC时间 **取值范围**： 不涉及。
    * firstAlarmTime  **参数解释**： 第一次告警时间，UTC时间 **取值范围**： 不涉及。
    * lastAlarmTime  **参数解释**： 最后一次告警时间，UTC时间。 **取值范围**： 不涉及。
    * alarmRecoveryTime  **参数解释**： 告警恢复时间，UTC时间。 **取值范围**： 不涉及。
    * metric  metric
    * condition  condition
    * additionalInfo  additionalInfo
    * alarmActions  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * okActions  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    * dataPoints  **参数解释**： 计算出该条告警记录的资源监控数据上报时间和监控数值。
    * maskStatus  **参数解释**： 告警屏蔽状态。 **取值范围**： - MASKED：已屏蔽 - UN_MASKED：未屏蔽
    *
    * @var string[]
    */
    protected static $getters = [
            'recordId' => 'getRecordId',
            'alarmId' => 'getAlarmId',
            'name' => 'getName',
            'status' => 'getStatus',
            'level' => 'getLevel',
            'type' => 'getType',
            'actionEnabled' => 'getActionEnabled',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'firstAlarmTime' => 'getFirstAlarmTime',
            'lastAlarmTime' => 'getLastAlarmTime',
            'alarmRecoveryTime' => 'getAlarmRecoveryTime',
            'metric' => 'getMetric',
            'condition' => 'getCondition',
            'additionalInfo' => 'getAdditionalInfo',
            'alarmActions' => 'getAlarmActions',
            'okActions' => 'getOkActions',
            'dataPoints' => 'getDataPoints',
            'maskStatus' => 'getMaskStatus'
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
    const STATUS_OK = 'ok';
    const STATUS_ALARM = 'alarm';
    const STATUS_INVALID = 'invalid';
    const STATUS_INSUFFICIENT_DATA = 'insufficient_data';
    const STATUS_OK_MANUAL = 'ok_manual';
    const LEVEL_1 = 1;
    const LEVEL_2 = 2;
    const LEVEL_3 = 3;
    const LEVEL_4 = 4;
    const TYPE_EVENT_SYS = 'EVENT.SYS';
    const TYPE_EVENT_CUSTOM = 'EVENT.CUSTOM';
    const TYPE_DNS_HEALTH_CHECK = 'DNSHealthCheck';
    const TYPE_RESOURCE_GROUP = 'RESOURCE_GROUP';
    const TYPE_MULTI_INSTANCE = 'MULTI_INSTANCE';
    const TYPE_ALL_INSTANCE = 'ALL_INSTANCE';
    const MASK_STATUS_MASKED = 'MASKED';
    const MASK_STATUS_UN_MASKED = 'UN_MASKED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_ALARM,
            self::STATUS_INVALID,
            self::STATUS_INSUFFICIENT_DATA,
            self::STATUS_OK_MANUAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_1,
            self::LEVEL_2,
            self::LEVEL_3,
            self::LEVEL_4,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EVENT_SYS,
            self::TYPE_EVENT_CUSTOM,
            self::TYPE_DNS_HEALTH_CHECK,
            self::TYPE_RESOURCE_GROUP,
            self::TYPE_MULTI_INSTANCE,
            self::TYPE_ALL_INSTANCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMaskStatusAllowableValues()
    {
        return [
            self::MASK_STATUS_MASKED,
            self::MASK_STATUS_UN_MASKED,
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
        $this->container['recordId'] = isset($data['recordId']) ? $data['recordId'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['actionEnabled'] = isset($data['actionEnabled']) ? $data['actionEnabled'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['firstAlarmTime'] = isset($data['firstAlarmTime']) ? $data['firstAlarmTime'] : null;
        $this->container['lastAlarmTime'] = isset($data['lastAlarmTime']) ? $data['lastAlarmTime'] : null;
        $this->container['alarmRecoveryTime'] = isset($data['alarmRecoveryTime']) ? $data['alarmRecoveryTime'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['additionalInfo'] = isset($data['additionalInfo']) ? $data['additionalInfo'] : null;
        $this->container['alarmActions'] = isset($data['alarmActions']) ? $data['alarmActions'] : null;
        $this->container['okActions'] = isset($data['okActions']) ? $data['okActions'] : null;
        $this->container['dataPoints'] = isset($data['dataPoints']) ? $data['dataPoints'] : null;
        $this->container['maskStatus'] = isset($data['maskStatus']) ? $data['maskStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) > 24)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['recordId']) && (mb_strlen($this->container['recordId']) < 24)) {
                $invalidProperties[] = "invalid value for 'recordId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['recordId']) && !preg_match("/^ah([0-9A-Za-z]){22}$/", $this->container['recordId'])) {
                $invalidProperties[] = "invalid value for 'recordId', must be conform to the pattern /^ah([0-9A-Za-z]){22}$/.";
            }
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) > 24)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) < 24)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['alarmId']) && !preg_match("/^al([0-9A-Za-z]){22}$/", $this->container['alarmId'])) {
                $invalidProperties[] = "invalid value for 'alarmId', must be conform to the pattern /^al([0-9A-Za-z]){22}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-){1,128}$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLevelAllowableValues();
                if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && !preg_match("/^(EVENT.SYS|EVENT.CUSTOM|DNSHealthCheck|RESOURCE_GROUP|MULTI_INSTANCE|ALL_INSTANCE)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(EVENT.SYS|EVENT.CUSTOM|DNSHealthCheck|RESOURCE_GROUP|MULTI_INSTANCE|ALL_INSTANCE)$/.";
            }
            $allowedValues = $this->getMaskStatusAllowableValues();
                if (!is_null($this->container['maskStatus']) && !in_array($this->container['maskStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'maskStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['maskStatus']) && (mb_strlen($this->container['maskStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'maskStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['maskStatus']) && (mb_strlen($this->container['maskStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'maskStatus', the character length must be bigger than or equal to 0.";
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
    * Gets recordId
    *  **参数解释**： 告警流水号。优化告警流水号生成规则，由 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。
    *
    * @return string|null
    */
    public function getRecordId()
    {
        return $this->container['recordId'];
    }

    /**
    * Sets recordId
    *
    * @param string|null $recordId **参数解释**： 告警流水号。优化告警流水号生成规则，由 ah1655717086704DEnBrJ999 更改为 ah251222T092004SAD2yARym **取值范围**： 以ah开头，后跟22位由字母或数字组成的字符串，字符串长度为24。
    *
    * @return $this
    */
    public function setRecordId($recordId)
    {
        $this->container['recordId'] = $recordId;
        return $this;
    }

    /**
    * Gets alarmId
    *  **参数解释**： 告警规则ID。 **取值范围**： 以al开头，后跟22位的字母或数字。
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
    * @param string|null $alarmId **参数解释**： 告警规则ID。 **取值范围**： 以al开头，后跟22位的字母或数字。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为[1,128]个字符。
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
    * @param string|null $name **参数解释**： 告警名称。 **取值范围**： 只能包含0-9/a-z/A-Z/_/-或汉字，长度为[1,128]个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 告警规则状态 **取值范围**： 枚举值。 - ok：正常 - alarm：告警 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 手动恢复
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 告警规则状态 **取值范围**： 枚举值。 - ok：正常 - alarm：告警 - invalid：已失效 - insufficient_data: 数据不足 - ok_manual: 手动恢复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 告警记录的告警级别。 **取值范围**： 值为1,2,3,4 - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level **参数解释**： 告警记录的告警级别。 **取值范围**： 值为1,2,3,4 - 1：紧急 - 2：重要 - 3：次要 - 4：提示
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 告警规则类型。 **取值范围**： 枚举值 - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 告警规则类型。 **取值范围**： 枚举值 - ALL_INSTANCE：全部资源指标告警 - RESOURCE_GROUP：资源分组指标告警 - MULTI_INSTANCE：指定资源指标告警 - EVENT.SYS：系统事件告警 - EVENT.CUSTOM：自定义事件告警 - DNSHealthCheck：健康检查告警
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets actionEnabled
    *  **参数解释**： 是否发送通知 **取值范围**： - true：发送通知 - false：不发送通知
    *
    * @return bool|null
    */
    public function getActionEnabled()
    {
        return $this->container['actionEnabled'];
    }

    /**
    * Sets actionEnabled
    *
    * @param bool|null $actionEnabled **参数解释**： 是否发送通知 **取值范围**： - true：发送通知 - false：不发送通知
    *
    * @return $this
    */
    public function setActionEnabled($actionEnabled)
    {
        $this->container['actionEnabled'] = $actionEnabled;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**： 产生时间,UTC时间 **取值范围**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param \DateTime|null $beginTime **参数解释**： 产生时间,UTC时间 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间，UTC时间 **取值范围**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param \DateTime|null $endTime **参数解释**： 结束时间，UTC时间 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets firstAlarmTime
    *  **参数解释**： 第一次告警时间，UTC时间 **取值范围**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getFirstAlarmTime()
    {
        return $this->container['firstAlarmTime'];
    }

    /**
    * Sets firstAlarmTime
    *
    * @param \DateTime|null $firstAlarmTime **参数解释**： 第一次告警时间，UTC时间 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFirstAlarmTime($firstAlarmTime)
    {
        $this->container['firstAlarmTime'] = $firstAlarmTime;
        return $this;
    }

    /**
    * Gets lastAlarmTime
    *  **参数解释**： 最后一次告警时间，UTC时间。 **取值范围**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getLastAlarmTime()
    {
        return $this->container['lastAlarmTime'];
    }

    /**
    * Sets lastAlarmTime
    *
    * @param \DateTime|null $lastAlarmTime **参数解释**： 最后一次告警时间，UTC时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLastAlarmTime($lastAlarmTime)
    {
        $this->container['lastAlarmTime'] = $lastAlarmTime;
        return $this;
    }

    /**
    * Gets alarmRecoveryTime
    *  **参数解释**： 告警恢复时间，UTC时间。 **取值范围**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getAlarmRecoveryTime()
    {
        return $this->container['alarmRecoveryTime'];
    }

    /**
    * Sets alarmRecoveryTime
    *
    * @param \DateTime|null $alarmRecoveryTime **参数解释**： 告警恢复时间，UTC时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmRecoveryTime($alarmRecoveryTime)
    {
        $this->container['alarmRecoveryTime'] = $alarmRecoveryTime;
        return $this;
    }

    /**
    * Gets metric
    *  metric
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2Metric|null
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2Metric|null $metric metric
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
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2Condition|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2Condition|null $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets additionalInfo
    *  additionalInfo
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AdditionalInfo|null
    */
    public function getAdditionalInfo()
    {
        return $this->container['additionalInfo'];
    }

    /**
    * Sets additionalInfo
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AdditionalInfo|null $additionalInfo additionalInfo
    *
    * @return $this
    */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->container['additionalInfo'] = $additionalInfo;
        return $this;
    }

    /**
    * Gets alarmActions
    *  **参数解释**： 告警触发时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2AlarmActions[]|null
    */
    public function getAlarmActions()
    {
        return $this->container['alarmActions'];
    }

    /**
    * Sets alarmActions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2AlarmActions[]|null $alarmActions **参数解释**： 告警触发时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
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
    *  **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2AlarmActions[]|null
    */
    public function getOkActions()
    {
        return $this->container['okActions'];
    }

    /**
    * Sets okActions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\AlarmHistoryItemV2AlarmActions[]|null $okActions **参数解释**： 告警恢复时，通知组/主题订阅的信息。结构如下：  {  \"type\": \"notification\", \"notification_list\": [\"urn:smn:southchina:68438a86d98e427e907e0097b7e35d47:sd\"]  }
    *
    * @return $this
    */
    public function setOkActions($okActions)
    {
        $this->container['okActions'] = $okActions;
        return $this;
    }

    /**
    * Gets dataPoints
    *  **参数解释**： 计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\DataPointInfo[]|null
    */
    public function getDataPoints()
    {
        return $this->container['dataPoints'];
    }

    /**
    * Sets dataPoints
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\DataPointInfo[]|null $dataPoints **参数解释**： 计算出该条告警记录的资源监控数据上报时间和监控数值。
    *
    * @return $this
    */
    public function setDataPoints($dataPoints)
    {
        $this->container['dataPoints'] = $dataPoints;
        return $this;
    }

    /**
    * Gets maskStatus
    *  **参数解释**： 告警屏蔽状态。 **取值范围**： - MASKED：已屏蔽 - UN_MASKED：未屏蔽
    *
    * @return string|null
    */
    public function getMaskStatus()
    {
        return $this->container['maskStatus'];
    }

    /**
    * Sets maskStatus
    *
    * @param string|null $maskStatus **参数解释**： 告警屏蔽状态。 **取值范围**： - MASKED：已屏蔽 - UN_MASKED：未屏蔽
    *
    * @return $this
    */
    public function setMaskStatus($maskStatus)
    {
        $this->container['maskStatus'] = $maskStatus;
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

