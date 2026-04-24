<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBaselineRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBaselineRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID。
    * name  基线任务名称。只能包含：英文字母、数字、中文、中划线、下划线和点号，且长度不超过128位。
    * ownerName  责任人用户名称。
    * type  基线任务类型。取值为 DAY和HOUR。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级，取值范围是1到5。
    * buffer  预警余量。单位毫秒，取值范围在0到86400000之间，且必须是整数分钟级别的毫秒。
    * enable  是否生效，取值为true或者false。默认为true。
    * alarmEnable  报警是否打开，取值为true或者false，默认为true。
    * signEnable  基线签署是否打开，取值为true或者false。默认为false。
    * slaHour  天基线承诺小时。
    * slaMin  天基线承诺分钟。
    * baselineAlarmEnable  基线报警是否打开，取值为true或者false。
    * smnTopics  SMN主题列表。
    * eventSmnTopics  事件报警信息。
    * eventAlarm  事件告警开启类型，取值为ERROR：出错，SLOW_DOWN：变慢。
    * period  当type取值为HOUR时，该值需要填写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'name' => 'string',
            'ownerName' => 'string',
            'type' => 'string',
            'slaTaskIds' => 'string[]',
            'priority' => 'int',
            'buffer' => 'int',
            'enable' => 'bool',
            'alarmEnable' => 'bool',
            'signEnable' => 'bool',
            'slaHour' => 'string',
            'slaMin' => 'string',
            'baselineAlarmEnable' => 'bool',
            'smnTopics' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopicRequest[]',
            'eventSmnTopics' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopicRequest[]',
            'eventAlarm' => 'string[]',
            'period' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\PeriodObject[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID。
    * name  基线任务名称。只能包含：英文字母、数字、中文、中划线、下划线和点号，且长度不超过128位。
    * ownerName  责任人用户名称。
    * type  基线任务类型。取值为 DAY和HOUR。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级，取值范围是1到5。
    * buffer  预警余量。单位毫秒，取值范围在0到86400000之间，且必须是整数分钟级别的毫秒。
    * enable  是否生效，取值为true或者false。默认为true。
    * alarmEnable  报警是否打开，取值为true或者false，默认为true。
    * signEnable  基线签署是否打开，取值为true或者false。默认为false。
    * slaHour  天基线承诺小时。
    * slaMin  天基线承诺分钟。
    * baselineAlarmEnable  基线报警是否打开，取值为true或者false。
    * smnTopics  SMN主题列表。
    * eventSmnTopics  事件报警信息。
    * eventAlarm  事件告警开启类型，取值为ERROR：出错，SLOW_DOWN：变慢。
    * period  当type取值为HOUR时，该值需要填写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'name' => null,
        'ownerName' => null,
        'type' => null,
        'slaTaskIds' => null,
        'priority' => 'int32',
        'buffer' => 'int32',
        'enable' => null,
        'alarmEnable' => null,
        'signEnable' => null,
        'slaHour' => null,
        'slaMin' => null,
        'baselineAlarmEnable' => null,
        'smnTopics' => null,
        'eventSmnTopics' => null,
        'eventAlarm' => null,
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
    * workspaceId  工作空间ID。
    * name  基线任务名称。只能包含：英文字母、数字、中文、中划线、下划线和点号，且长度不超过128位。
    * ownerName  责任人用户名称。
    * type  基线任务类型。取值为 DAY和HOUR。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级，取值范围是1到5。
    * buffer  预警余量。单位毫秒，取值范围在0到86400000之间，且必须是整数分钟级别的毫秒。
    * enable  是否生效，取值为true或者false。默认为true。
    * alarmEnable  报警是否打开，取值为true或者false，默认为true。
    * signEnable  基线签署是否打开，取值为true或者false。默认为false。
    * slaHour  天基线承诺小时。
    * slaMin  天基线承诺分钟。
    * baselineAlarmEnable  基线报警是否打开，取值为true或者false。
    * smnTopics  SMN主题列表。
    * eventSmnTopics  事件报警信息。
    * eventAlarm  事件告警开启类型，取值为ERROR：出错，SLOW_DOWN：变慢。
    * period  当type取值为HOUR时，该值需要填写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'name' => 'name',
            'ownerName' => 'owner_name',
            'type' => 'type',
            'slaTaskIds' => 'sla_task_ids',
            'priority' => 'priority',
            'buffer' => 'buffer',
            'enable' => 'enable',
            'alarmEnable' => 'alarm_enable',
            'signEnable' => 'sign_enable',
            'slaHour' => 'sla_hour',
            'slaMin' => 'sla_min',
            'baselineAlarmEnable' => 'baseline_alarm_enable',
            'smnTopics' => 'smn_topics',
            'eventSmnTopics' => 'event_smn_topics',
            'eventAlarm' => 'event_alarm',
            'period' => 'period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID。
    * name  基线任务名称。只能包含：英文字母、数字、中文、中划线、下划线和点号，且长度不超过128位。
    * ownerName  责任人用户名称。
    * type  基线任务类型。取值为 DAY和HOUR。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级，取值范围是1到5。
    * buffer  预警余量。单位毫秒，取值范围在0到86400000之间，且必须是整数分钟级别的毫秒。
    * enable  是否生效，取值为true或者false。默认为true。
    * alarmEnable  报警是否打开，取值为true或者false，默认为true。
    * signEnable  基线签署是否打开，取值为true或者false。默认为false。
    * slaHour  天基线承诺小时。
    * slaMin  天基线承诺分钟。
    * baselineAlarmEnable  基线报警是否打开，取值为true或者false。
    * smnTopics  SMN主题列表。
    * eventSmnTopics  事件报警信息。
    * eventAlarm  事件告警开启类型，取值为ERROR：出错，SLOW_DOWN：变慢。
    * period  当type取值为HOUR时，该值需要填写。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'name' => 'setName',
            'ownerName' => 'setOwnerName',
            'type' => 'setType',
            'slaTaskIds' => 'setSlaTaskIds',
            'priority' => 'setPriority',
            'buffer' => 'setBuffer',
            'enable' => 'setEnable',
            'alarmEnable' => 'setAlarmEnable',
            'signEnable' => 'setSignEnable',
            'slaHour' => 'setSlaHour',
            'slaMin' => 'setSlaMin',
            'baselineAlarmEnable' => 'setBaselineAlarmEnable',
            'smnTopics' => 'setSmnTopics',
            'eventSmnTopics' => 'setEventSmnTopics',
            'eventAlarm' => 'setEventAlarm',
            'period' => 'setPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID。
    * name  基线任务名称。只能包含：英文字母、数字、中文、中划线、下划线和点号，且长度不超过128位。
    * ownerName  责任人用户名称。
    * type  基线任务类型。取值为 DAY和HOUR。
    * slaTaskIds  保障作业ID列表。
    * priority  优先级，取值范围是1到5。
    * buffer  预警余量。单位毫秒，取值范围在0到86400000之间，且必须是整数分钟级别的毫秒。
    * enable  是否生效，取值为true或者false。默认为true。
    * alarmEnable  报警是否打开，取值为true或者false，默认为true。
    * signEnable  基线签署是否打开，取值为true或者false。默认为false。
    * slaHour  天基线承诺小时。
    * slaMin  天基线承诺分钟。
    * baselineAlarmEnable  基线报警是否打开，取值为true或者false。
    * smnTopics  SMN主题列表。
    * eventSmnTopics  事件报警信息。
    * eventAlarm  事件告警开启类型，取值为ERROR：出错，SLOW_DOWN：变慢。
    * period  当type取值为HOUR时，该值需要填写。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'name' => 'getName',
            'ownerName' => 'getOwnerName',
            'type' => 'getType',
            'slaTaskIds' => 'getSlaTaskIds',
            'priority' => 'getPriority',
            'buffer' => 'getBuffer',
            'enable' => 'getEnable',
            'alarmEnable' => 'getAlarmEnable',
            'signEnable' => 'getSignEnable',
            'slaHour' => 'getSlaHour',
            'slaMin' => 'getSlaMin',
            'baselineAlarmEnable' => 'getBaselineAlarmEnable',
            'smnTopics' => 'getSmnTopics',
            'eventSmnTopics' => 'getEventSmnTopics',
            'eventAlarm' => 'getEventAlarm',
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['slaTaskIds'] = isset($data['slaTaskIds']) ? $data['slaTaskIds'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['buffer'] = isset($data['buffer']) ? $data['buffer'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['alarmEnable'] = isset($data['alarmEnable']) ? $data['alarmEnable'] : null;
        $this->container['signEnable'] = isset($data['signEnable']) ? $data['signEnable'] : null;
        $this->container['slaHour'] = isset($data['slaHour']) ? $data['slaHour'] : null;
        $this->container['slaMin'] = isset($data['slaMin']) ? $data['slaMin'] : null;
        $this->container['baselineAlarmEnable'] = isset($data['baselineAlarmEnable']) ? $data['baselineAlarmEnable'] : null;
        $this->container['smnTopics'] = isset($data['smnTopics']) ? $data['smnTopics'] : null;
        $this->container['eventSmnTopics'] = isset($data['eventSmnTopics']) ? $data['eventSmnTopics'] : null;
        $this->container['eventAlarm'] = isset($data['eventAlarm']) ? $data['eventAlarm'] : null;
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
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ownerName'] === null) {
            $invalidProperties[] = "'ownerName' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['slaTaskIds'] === null) {
            $invalidProperties[] = "'slaTaskIds' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['buffer'] === null) {
            $invalidProperties[] = "'buffer' can't be null";
        }
        if ($this->container['enable'] === null) {
            $invalidProperties[] = "'enable' can't be null";
        }
        if ($this->container['alarmEnable'] === null) {
            $invalidProperties[] = "'alarmEnable' can't be null";
        }
        if ($this->container['signEnable'] === null) {
            $invalidProperties[] = "'signEnable' can't be null";
        }
        if ($this->container['slaHour'] === null) {
            $invalidProperties[] = "'slaHour' can't be null";
        }
        if ($this->container['slaMin'] === null) {
            $invalidProperties[] = "'slaMin' can't be null";
        }
        if ($this->container['baselineAlarmEnable'] === null) {
            $invalidProperties[] = "'baselineAlarmEnable' can't be null";
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
    * Gets workspaceId
    *  工作空间ID。
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets name
    *  基线任务名称。只能包含：英文字母、数字、中文、中划线、下划线和点号，且长度不超过128位。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 基线任务名称。只能包含：英文字母、数字、中文、中划线、下划线和点号，且长度不超过128位。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ownerName
    *  责任人用户名称。
    *
    * @return string
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string $ownerName 责任人用户名称。
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets type
    *  基线任务类型。取值为 DAY和HOUR。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 基线任务类型。取值为 DAY和HOUR。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets slaTaskIds
    *  保障作业ID列表。
    *
    * @return string[]
    */
    public function getSlaTaskIds()
    {
        return $this->container['slaTaskIds'];
    }

    /**
    * Sets slaTaskIds
    *
    * @param string[] $slaTaskIds 保障作业ID列表。
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
    *  优先级，取值范围是1到5。
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 优先级，取值范围是1到5。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets buffer
    *  预警余量。单位毫秒，取值范围在0到86400000之间，且必须是整数分钟级别的毫秒。
    *
    * @return int
    */
    public function getBuffer()
    {
        return $this->container['buffer'];
    }

    /**
    * Sets buffer
    *
    * @param int $buffer 预警余量。单位毫秒，取值范围在0到86400000之间，且必须是整数分钟级别的毫秒。
    *
    * @return $this
    */
    public function setBuffer($buffer)
    {
        $this->container['buffer'] = $buffer;
        return $this;
    }

    /**
    * Gets enable
    *  是否生效，取值为true或者false。默认为true。
    *
    * @return bool
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool $enable 是否生效，取值为true或者false。默认为true。
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
    *  报警是否打开，取值为true或者false，默认为true。
    *
    * @return bool
    */
    public function getAlarmEnable()
    {
        return $this->container['alarmEnable'];
    }

    /**
    * Sets alarmEnable
    *
    * @param bool $alarmEnable 报警是否打开，取值为true或者false，默认为true。
    *
    * @return $this
    */
    public function setAlarmEnable($alarmEnable)
    {
        $this->container['alarmEnable'] = $alarmEnable;
        return $this;
    }

    /**
    * Gets signEnable
    *  基线签署是否打开，取值为true或者false。默认为false。
    *
    * @return bool
    */
    public function getSignEnable()
    {
        return $this->container['signEnable'];
    }

    /**
    * Sets signEnable
    *
    * @param bool $signEnable 基线签署是否打开，取值为true或者false。默认为false。
    *
    * @return $this
    */
    public function setSignEnable($signEnable)
    {
        $this->container['signEnable'] = $signEnable;
        return $this;
    }

    /**
    * Gets slaHour
    *  天基线承诺小时。
    *
    * @return string
    */
    public function getSlaHour()
    {
        return $this->container['slaHour'];
    }

    /**
    * Sets slaHour
    *
    * @param string $slaHour 天基线承诺小时。
    *
    * @return $this
    */
    public function setSlaHour($slaHour)
    {
        $this->container['slaHour'] = $slaHour;
        return $this;
    }

    /**
    * Gets slaMin
    *  天基线承诺分钟。
    *
    * @return string
    */
    public function getSlaMin()
    {
        return $this->container['slaMin'];
    }

    /**
    * Sets slaMin
    *
    * @param string $slaMin 天基线承诺分钟。
    *
    * @return $this
    */
    public function setSlaMin($slaMin)
    {
        $this->container['slaMin'] = $slaMin;
        return $this;
    }

    /**
    * Gets baselineAlarmEnable
    *  基线报警是否打开，取值为true或者false。
    *
    * @return bool
    */
    public function getBaselineAlarmEnable()
    {
        return $this->container['baselineAlarmEnable'];
    }

    /**
    * Sets baselineAlarmEnable
    *
    * @param bool $baselineAlarmEnable 基线报警是否打开，取值为true或者false。
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
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopicRequest[]|null
    */
    public function getSmnTopics()
    {
        return $this->container['smnTopics'];
    }

    /**
    * Sets smnTopics
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopicRequest[]|null $smnTopics SMN主题列表。
    *
    * @return $this
    */
    public function setSmnTopics($smnTopics)
    {
        $this->container['smnTopics'] = $smnTopics;
        return $this;
    }

    /**
    * Gets eventSmnTopics
    *  事件报警信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopicRequest[]|null
    */
    public function getEventSmnTopics()
    {
        return $this->container['eventSmnTopics'];
    }

    /**
    * Sets eventSmnTopics
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SmnTopicRequest[]|null $eventSmnTopics 事件报警信息。
    *
    * @return $this
    */
    public function setEventSmnTopics($eventSmnTopics)
    {
        $this->container['eventSmnTopics'] = $eventSmnTopics;
        return $this;
    }

    /**
    * Gets eventAlarm
    *  事件告警开启类型，取值为ERROR：出错，SLOW_DOWN：变慢。
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
    * @param string[]|null $eventAlarm 事件告警开启类型，取值为ERROR：出错，SLOW_DOWN：变慢。
    *
    * @return $this
    */
    public function setEventAlarm($eventAlarm)
    {
        $this->container['eventAlarm'] = $eventAlarm;
        return $this;
    }

    /**
    * Gets period
    *  当type取值为HOUR时，该值需要填写。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PeriodObject[]|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\PeriodObject[]|null $period 当type取值为HOUR时，该值需要填写。
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

