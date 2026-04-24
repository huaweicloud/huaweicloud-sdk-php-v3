<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaselineV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaselineV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  基线任务ID。
    * name  基线任务名称。
    * version  版本号。
    * createTime  创建时间戳，单位毫秒。
    * lastUpdateTime  最后更新时间戳，单位毫秒。
    * type  基线任务类型。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级。
    * slaMin  天基线承诺分钟。
    * buffer  预警余量。
    * slaHour  天基线承诺小时。
    * expMin  天基线预警分钟。
    * expHour  天基线预警小时。
    * hourExpDetail  小时基线的预警时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * hourSlaDetail  小时基线的承诺时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * enable  是否生效。
    * alarmEnable  报警是否打开。
    * baselineAlarmEnable  基线报警是否打开。
    * smnTopics  SMN主题列表。
    * eventAlarm  事件告警开启类型。
    * eventSmnTopics  事件告警SMN主题列表。
    * signEnable  基线签署是否打开。
    * period  承诺时间周期列表，小时基线时生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'version' => 'int',
            'createTime' => 'int',
            'lastUpdateTime' => 'int',
            'type' => 'string',
            'ownerId' => 'string',
            'ownerName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'projectId' => 'string',
            'instanceId' => 'string',
            'workspaceId' => 'string',
            'slaTaskIds' => 'string[]',
            'priority' => 'int',
            'slaMin' => 'int',
            'buffer' => 'int',
            'slaHour' => 'int',
            'expMin' => 'int',
            'expHour' => 'int',
            'hourExpDetail' => 'string',
            'hourSlaDetail' => 'string',
            'enable' => 'bool',
            'alarmEnable' => 'bool',
            'baselineAlarmEnable' => 'bool',
            'smnTopics' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopic[]',
            'eventAlarm' => 'string[]',
            'eventSmnTopics' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopic[]',
            'signEnable' => 'bool',
            'period' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PeriodSlaTimeV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  基线任务ID。
    * name  基线任务名称。
    * version  版本号。
    * createTime  创建时间戳，单位毫秒。
    * lastUpdateTime  最后更新时间戳，单位毫秒。
    * type  基线任务类型。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级。
    * slaMin  天基线承诺分钟。
    * buffer  预警余量。
    * slaHour  天基线承诺小时。
    * expMin  天基线预警分钟。
    * expHour  天基线预警小时。
    * hourExpDetail  小时基线的预警时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * hourSlaDetail  小时基线的承诺时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * enable  是否生效。
    * alarmEnable  报警是否打开。
    * baselineAlarmEnable  基线报警是否打开。
    * smnTopics  SMN主题列表。
    * eventAlarm  事件告警开启类型。
    * eventSmnTopics  事件告警SMN主题列表。
    * signEnable  基线签署是否打开。
    * period  承诺时间周期列表，小时基线时生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'version' => 'int32',
        'createTime' => 'int64',
        'lastUpdateTime' => 'int64',
        'type' => null,
        'ownerId' => null,
        'ownerName' => null,
        'domainId' => null,
        'domainName' => null,
        'projectId' => null,
        'instanceId' => null,
        'workspaceId' => null,
        'slaTaskIds' => null,
        'priority' => 'int32',
        'slaMin' => 'int32',
        'buffer' => 'int32',
        'slaHour' => 'int32',
        'expMin' => 'int32',
        'expHour' => 'int32',
        'hourExpDetail' => null,
        'hourSlaDetail' => null,
        'enable' => null,
        'alarmEnable' => null,
        'baselineAlarmEnable' => null,
        'smnTopics' => null,
        'eventAlarm' => null,
        'eventSmnTopics' => null,
        'signEnable' => null,
        'period' => null
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
    * id  基线任务ID。
    * name  基线任务名称。
    * version  版本号。
    * createTime  创建时间戳，单位毫秒。
    * lastUpdateTime  最后更新时间戳，单位毫秒。
    * type  基线任务类型。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级。
    * slaMin  天基线承诺分钟。
    * buffer  预警余量。
    * slaHour  天基线承诺小时。
    * expMin  天基线预警分钟。
    * expHour  天基线预警小时。
    * hourExpDetail  小时基线的预警时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * hourSlaDetail  小时基线的承诺时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * enable  是否生效。
    * alarmEnable  报警是否打开。
    * baselineAlarmEnable  基线报警是否打开。
    * smnTopics  SMN主题列表。
    * eventAlarm  事件告警开启类型。
    * eventSmnTopics  事件告警SMN主题列表。
    * signEnable  基线签署是否打开。
    * period  承诺时间周期列表，小时基线时生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'version' => 'version',
            'createTime' => 'create_time',
            'lastUpdateTime' => 'last_update_time',
            'type' => 'type',
            'ownerId' => 'owner_id',
            'ownerName' => 'owner_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'workspaceId' => 'workspace_id',
            'slaTaskIds' => 'sla_task_ids',
            'priority' => 'priority',
            'slaMin' => 'sla_min',
            'buffer' => 'buffer',
            'slaHour' => 'sla_hour',
            'expMin' => 'exp_min',
            'expHour' => 'exp_hour',
            'hourExpDetail' => 'hour_exp_detail',
            'hourSlaDetail' => 'hour_sla_detail',
            'enable' => 'enable',
            'alarmEnable' => 'alarm_enable',
            'baselineAlarmEnable' => 'baseline_alarm_enable',
            'smnTopics' => 'smn_topics',
            'eventAlarm' => 'event_alarm',
            'eventSmnTopics' => 'event_smn_topics',
            'signEnable' => 'sign_enable',
            'period' => 'period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  基线任务ID。
    * name  基线任务名称。
    * version  版本号。
    * createTime  创建时间戳，单位毫秒。
    * lastUpdateTime  最后更新时间戳，单位毫秒。
    * type  基线任务类型。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级。
    * slaMin  天基线承诺分钟。
    * buffer  预警余量。
    * slaHour  天基线承诺小时。
    * expMin  天基线预警分钟。
    * expHour  天基线预警小时。
    * hourExpDetail  小时基线的预警时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * hourSlaDetail  小时基线的承诺时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * enable  是否生效。
    * alarmEnable  报警是否打开。
    * baselineAlarmEnable  基线报警是否打开。
    * smnTopics  SMN主题列表。
    * eventAlarm  事件告警开启类型。
    * eventSmnTopics  事件告警SMN主题列表。
    * signEnable  基线签署是否打开。
    * period  承诺时间周期列表，小时基线时生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'version' => 'setVersion',
            'createTime' => 'setCreateTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'type' => 'setType',
            'ownerId' => 'setOwnerId',
            'ownerName' => 'setOwnerName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'workspaceId' => 'setWorkspaceId',
            'slaTaskIds' => 'setSlaTaskIds',
            'priority' => 'setPriority',
            'slaMin' => 'setSlaMin',
            'buffer' => 'setBuffer',
            'slaHour' => 'setSlaHour',
            'expMin' => 'setExpMin',
            'expHour' => 'setExpHour',
            'hourExpDetail' => 'setHourExpDetail',
            'hourSlaDetail' => 'setHourSlaDetail',
            'enable' => 'setEnable',
            'alarmEnable' => 'setAlarmEnable',
            'baselineAlarmEnable' => 'setBaselineAlarmEnable',
            'smnTopics' => 'setSmnTopics',
            'eventAlarm' => 'setEventAlarm',
            'eventSmnTopics' => 'setEventSmnTopics',
            'signEnable' => 'setSignEnable',
            'period' => 'setPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  基线任务ID。
    * name  基线任务名称。
    * version  版本号。
    * createTime  创建时间戳，单位毫秒。
    * lastUpdateTime  最后更新时间戳，单位毫秒。
    * type  基线任务类型。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级。
    * slaMin  天基线承诺分钟。
    * buffer  预警余量。
    * slaHour  天基线承诺小时。
    * expMin  天基线预警分钟。
    * expHour  天基线预警小时。
    * hourExpDetail  小时基线的预警时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * hourSlaDetail  小时基线的承诺时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    * enable  是否生效。
    * alarmEnable  报警是否打开。
    * baselineAlarmEnable  基线报警是否打开。
    * smnTopics  SMN主题列表。
    * eventAlarm  事件告警开启类型。
    * eventSmnTopics  事件告警SMN主题列表。
    * signEnable  基线签署是否打开。
    * period  承诺时间周期列表，小时基线时生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'version' => 'getVersion',
            'createTime' => 'getCreateTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'type' => 'getType',
            'ownerId' => 'getOwnerId',
            'ownerName' => 'getOwnerName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'workspaceId' => 'getWorkspaceId',
            'slaTaskIds' => 'getSlaTaskIds',
            'priority' => 'getPriority',
            'slaMin' => 'getSlaMin',
            'buffer' => 'getBuffer',
            'slaHour' => 'getSlaHour',
            'expMin' => 'getExpMin',
            'expHour' => 'getExpHour',
            'hourExpDetail' => 'getHourExpDetail',
            'hourSlaDetail' => 'getHourSlaDetail',
            'enable' => 'getEnable',
            'alarmEnable' => 'getAlarmEnable',
            'baselineAlarmEnable' => 'getBaselineAlarmEnable',
            'smnTopics' => 'getSmnTopics',
            'eventAlarm' => 'getEventAlarm',
            'eventSmnTopics' => 'getEventSmnTopics',
            'signEnable' => 'getSignEnable',
            'period' => 'getPeriod'
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
    const TYPE_DAY = 'DAY';
    const TYPE_HOUR = 'HOUR';
    const EVENT_ALARM_ERROR = 'ERROR';
    const EVENT_ALARM_SLOW_DOWN = 'SLOW_DOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DAY,
            self::TYPE_HOUR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventAlarmAllowableValues()
    {
        return [
            self::EVENT_ALARM_ERROR,
            self::EVENT_ALARM_SLOW_DOWN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['slaTaskIds'] = isset($data['slaTaskIds']) ? $data['slaTaskIds'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['slaMin'] = isset($data['slaMin']) ? $data['slaMin'] : null;
        $this->container['buffer'] = isset($data['buffer']) ? $data['buffer'] : null;
        $this->container['slaHour'] = isset($data['slaHour']) ? $data['slaHour'] : null;
        $this->container['expMin'] = isset($data['expMin']) ? $data['expMin'] : null;
        $this->container['expHour'] = isset($data['expHour']) ? $data['expHour'] : null;
        $this->container['hourExpDetail'] = isset($data['hourExpDetail']) ? $data['hourExpDetail'] : null;
        $this->container['hourSlaDetail'] = isset($data['hourSlaDetail']) ? $data['hourSlaDetail'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['alarmEnable'] = isset($data['alarmEnable']) ? $data['alarmEnable'] : null;
        $this->container['baselineAlarmEnable'] = isset($data['baselineAlarmEnable']) ? $data['baselineAlarmEnable'] : null;
        $this->container['smnTopics'] = isset($data['smnTopics']) ? $data['smnTopics'] : null;
        $this->container['eventAlarm'] = isset($data['eventAlarm']) ? $data['eventAlarm'] : null;
        $this->container['eventSmnTopics'] = isset($data['eventSmnTopics']) ? $data['eventSmnTopics'] : null;
        $this->container['signEnable'] = isset($data['signEnable']) ? $data['signEnable'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] > 10000)) {
                $invalidProperties[] = "invalid value for 'version', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] < 0)) {
                $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 64)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 128)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 100)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaMin']) && ($this->container['slaMin'] > 59)) {
                $invalidProperties[] = "invalid value for 'slaMin', must be smaller than or equal to 59.";
            }
            if (!is_null($this->container['slaMin']) && ($this->container['slaMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'slaMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['buffer']) && ($this->container['buffer'] > 86400000)) {
                $invalidProperties[] = "invalid value for 'buffer', must be smaller than or equal to 86400000.";
            }
            if (!is_null($this->container['buffer']) && ($this->container['buffer'] < 0)) {
                $invalidProperties[] = "invalid value for 'buffer', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaHour']) && ($this->container['slaHour'] > 47)) {
                $invalidProperties[] = "invalid value for 'slaHour', must be smaller than or equal to 47.";
            }
            if (!is_null($this->container['slaHour']) && ($this->container['slaHour'] < 0)) {
                $invalidProperties[] = "invalid value for 'slaHour', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expMin']) && ($this->container['expMin'] > 59)) {
                $invalidProperties[] = "invalid value for 'expMin', must be smaller than or equal to 59.";
            }
            if (!is_null($this->container['expMin']) && ($this->container['expMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'expMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expHour']) && ($this->container['expHour'] > 47)) {
                $invalidProperties[] = "invalid value for 'expHour', must be smaller than or equal to 47.";
            }
            if (!is_null($this->container['expHour']) && ($this->container['expHour'] < 0)) {
                $invalidProperties[] = "invalid value for 'expHour', must be bigger than or equal to 0.";
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
    *  基线任务ID。
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
    * @param string|null $id 基线任务ID。
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
    *  基线任务名称。
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
    * @param string|null $name 基线任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  版本号。
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最后更新时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最后更新时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets type
    *  基线任务类型。
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
    * @param string|null $type 基线任务类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ownerId
    *  责任人用户ID。
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 责任人用户ID。
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人用户名称。
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 责任人用户名称。
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets domainId
    *  责任人租户ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 责任人租户ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets domainName
    *  责任人租户名称。
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
    * @param string|null $domainName 责任人租户名称。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  DataArts Studio实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId DataArts Studio实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets slaTaskIds
    *  保障作业ID列表。
    *
    * @return string[]|null
    */
    public function getSlaTaskIds()
    {
        return $this->container['slaTaskIds'];
    }

    /**
    * Sets slaTaskIds
    *
    * @param string[]|null $slaTaskIds 保障作业ID列表。
    *
    * @return $this
    */
    public function setSlaTaskIds($slaTaskIds)
    {
        $this->container['slaTaskIds'] = $slaTaskIds;
        return $this;
    }

    /**
    * Gets priority
    *  优先级。
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 优先级。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets slaMin
    *  天基线承诺分钟。
    *
    * @return int|null
    */
    public function getSlaMin()
    {
        return $this->container['slaMin'];
    }

    /**
    * Sets slaMin
    *
    * @param int|null $slaMin 天基线承诺分钟。
    *
    * @return $this
    */
    public function setSlaMin($slaMin)
    {
        $this->container['slaMin'] = $slaMin;
        return $this;
    }

    /**
    * Gets buffer
    *  预警余量。
    *
    * @return int|null
    */
    public function getBuffer()
    {
        return $this->container['buffer'];
    }

    /**
    * Sets buffer
    *
    * @param int|null $buffer 预警余量。
    *
    * @return $this
    */
    public function setBuffer($buffer)
    {
        $this->container['buffer'] = $buffer;
        return $this;
    }

    /**
    * Gets slaHour
    *  天基线承诺小时。
    *
    * @return int|null
    */
    public function getSlaHour()
    {
        return $this->container['slaHour'];
    }

    /**
    * Sets slaHour
    *
    * @param int|null $slaHour 天基线承诺小时。
    *
    * @return $this
    */
    public function setSlaHour($slaHour)
    {
        $this->container['slaHour'] = $slaHour;
        return $this;
    }

    /**
    * Gets expMin
    *  天基线预警分钟。
    *
    * @return int|null
    */
    public function getExpMin()
    {
        return $this->container['expMin'];
    }

    /**
    * Sets expMin
    *
    * @param int|null $expMin 天基线预警分钟。
    *
    * @return $this
    */
    public function setExpMin($expMin)
    {
        $this->container['expMin'] = $expMin;
        return $this;
    }

    /**
    * Gets expHour
    *  天基线预警小时。
    *
    * @return int|null
    */
    public function getExpHour()
    {
        return $this->container['expHour'];
    }

    /**
    * Sets expHour
    *
    * @param int|null $expHour 天基线预警小时。
    *
    * @return $this
    */
    public function setExpHour($expHour)
    {
        $this->container['expHour'] = $expHour;
        return $this;
    }

    /**
    * Gets hourExpDetail
    *  小时基线的预警时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    *
    * @return string|null
    */
    public function getHourExpDetail()
    {
        return $this->container['hourExpDetail'];
    }

    /**
    * Sets hourExpDetail
    *
    * @param string|null $hourExpDetail 小时基线的预警时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    *
    * @return $this
    */
    public function setHourExpDetail($hourExpDetail)
    {
        $this->container['hourExpDetail'] = $hourExpDetail;
        return $this;
    }

    /**
    * Gets hourSlaDetail
    *  小时基线的承诺时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    *
    * @return string|null
    */
    public function getHourSlaDetail()
    {
        return $this->container['hourSlaDetail'];
    }

    /**
    * Sets hourSlaDetail
    *
    * @param string|null $hourSlaDetail 小时基线的承诺时间配置（JSON格式），key为周期号，value为hh:mm格式。hh的取值范围为[0,47]，mm的取值范围为[0,59]。
    *
    * @return $this
    */
    public function setHourSlaDetail($hourSlaDetail)
    {
        $this->container['hourSlaDetail'] = $hourSlaDetail;
        return $this;
    }

    /**
    * Gets enable
    *  是否生效。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否生效。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets alarmEnable
    *  报警是否打开。
    *
    * @return bool|null
    */
    public function getAlarmEnable()
    {
        return $this->container['alarmEnable'];
    }

    /**
    * Sets alarmEnable
    *
    * @param bool|null $alarmEnable 报警是否打开。
    *
    * @return $this
    */
    public function setAlarmEnable($alarmEnable)
    {
        $this->container['alarmEnable'] = $alarmEnable;
        return $this;
    }

    /**
    * Gets baselineAlarmEnable
    *  基线报警是否打开。
    *
    * @return bool|null
    */
    public function getBaselineAlarmEnable()
    {
        return $this->container['baselineAlarmEnable'];
    }

    /**
    * Sets baselineAlarmEnable
    *
    * @param bool|null $baselineAlarmEnable 基线报警是否打开。
    *
    * @return $this
    */
    public function setBaselineAlarmEnable($baselineAlarmEnable)
    {
        $this->container['baselineAlarmEnable'] = $baselineAlarmEnable;
        return $this;
    }

    /**
    * Gets smnTopics
    *  SMN主题列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopic[]|null
    */
    public function getSmnTopics()
    {
        return $this->container['smnTopics'];
    }

    /**
    * Sets smnTopics
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopic[]|null $smnTopics SMN主题列表。
    *
    * @return $this
    */
    public function setSmnTopics($smnTopics)
    {
        $this->container['smnTopics'] = $smnTopics;
        return $this;
    }

    /**
    * Gets eventAlarm
    *  事件告警开启类型。
    *
    * @return string[]|null
    */
    public function getEventAlarm()
    {
        return $this->container['eventAlarm'];
    }

    /**
    * Sets eventAlarm
    *
    * @param string[]|null $eventAlarm 事件告警开启类型。
    *
    * @return $this
    */
    public function setEventAlarm($eventAlarm)
    {
        $this->container['eventAlarm'] = $eventAlarm;
        return $this;
    }

    /**
    * Gets eventSmnTopics
    *  事件告警SMN主题列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopic[]|null
    */
    public function getEventSmnTopics()
    {
        return $this->container['eventSmnTopics'];
    }

    /**
    * Sets eventSmnTopics
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopic[]|null $eventSmnTopics 事件告警SMN主题列表。
    *
    * @return $this
    */
    public function setEventSmnTopics($eventSmnTopics)
    {
        $this->container['eventSmnTopics'] = $eventSmnTopics;
        return $this;
    }

    /**
    * Gets signEnable
    *  基线签署是否打开。
    *
    * @return bool|null
    */
    public function getSignEnable()
    {
        return $this->container['signEnable'];
    }

    /**
    * Sets signEnable
    *
    * @param bool|null $signEnable 基线签署是否打开。
    *
    * @return $this
    */
    public function setSignEnable($signEnable)
    {
        $this->container['signEnable'] = $signEnable;
        return $this;
    }

    /**
    * Gets period
    *  承诺时间周期列表，小时基线时生效。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PeriodSlaTimeV2[]|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PeriodSlaTimeV2[]|null $period 承诺时间周期列表，小时基线时生效。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
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

