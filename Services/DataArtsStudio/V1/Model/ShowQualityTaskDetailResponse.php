<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowQualityTaskDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowQualityTaskDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * name  作业名称
    * description  作业描述
    * categoryId  所属目录ID
    * level  SUGGEST:提示, MINOR:一般, MAJOR:严重, FATAL:致命
    * alarmCondition  统一告警条件
    * alarmNotify  是否开启通知告警
    * alarmNotifyType  TRIGGER_ALARM:触发告警, RUN_SUCCESS:运行成功, TRIGGER_ALARM_AND_RUNNING_SUCCESS:触发告警和运行成功
    * alarmNotifyTopic  通知主题名
    * scheduleType  调度类型，ONCE：单次调度，PERIODIC：周期性调度
    * scheduleStartDate  调度开始日期
    * scheduleEndDate  调度结束日期
    * schedulePeriod  调度周期，MINUTE:按分钟调度，HOUR:按小时调度，DAY:按天调度，WEEK:按周调度
    * scheduleInterval  调度间隔，注意：当调度周期为分钟、小时、天时，间隔时间为数字；而当调度周期为周时，调度间隔为星期的英文，如：每周一、周二调度时，schedule_interval为\"MONDAY,TUESDAY\"
    * scheduleStartTime  调度开始时间
    * scheduleEndTime  调度结束时间
    * createTime  最近运行时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * subRules  子规则
    * scheduleCron  调度cron表达式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'description' => 'string',
            'categoryId' => 'int',
            'level' => 'string',
            'alarmCondition' => 'string',
            'alarmNotify' => 'bool',
            'alarmNotifyType' => 'string',
            'alarmNotifyTopic' => 'string',
            'scheduleType' => 'string',
            'scheduleStartDate' => 'string',
            'scheduleEndDate' => 'string',
            'schedulePeriod' => 'string',
            'scheduleInterval' => 'string',
            'scheduleStartTime' => 'string',
            'scheduleEndTime' => 'string',
            'createTime' => 'int',
            'lastRunTime' => 'int',
            'subRules' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityTaskRuleDetailForOpenApi[]',
            'scheduleCron' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * name  作业名称
    * description  作业描述
    * categoryId  所属目录ID
    * level  SUGGEST:提示, MINOR:一般, MAJOR:严重, FATAL:致命
    * alarmCondition  统一告警条件
    * alarmNotify  是否开启通知告警
    * alarmNotifyType  TRIGGER_ALARM:触发告警, RUN_SUCCESS:运行成功, TRIGGER_ALARM_AND_RUNNING_SUCCESS:触发告警和运行成功
    * alarmNotifyTopic  通知主题名
    * scheduleType  调度类型，ONCE：单次调度，PERIODIC：周期性调度
    * scheduleStartDate  调度开始日期
    * scheduleEndDate  调度结束日期
    * schedulePeriod  调度周期，MINUTE:按分钟调度，HOUR:按小时调度，DAY:按天调度，WEEK:按周调度
    * scheduleInterval  调度间隔，注意：当调度周期为分钟、小时、天时，间隔时间为数字；而当调度周期为周时，调度间隔为星期的英文，如：每周一、周二调度时，schedule_interval为\"MONDAY,TUESDAY\"
    * scheduleStartTime  调度开始时间
    * scheduleEndTime  调度结束时间
    * createTime  最近运行时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * subRules  子规则
    * scheduleCron  调度cron表达式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'description' => null,
        'categoryId' => 'int64',
        'level' => null,
        'alarmCondition' => null,
        'alarmNotify' => null,
        'alarmNotifyType' => null,
        'alarmNotifyTopic' => null,
        'scheduleType' => null,
        'scheduleStartDate' => null,
        'scheduleEndDate' => null,
        'schedulePeriod' => null,
        'scheduleInterval' => null,
        'scheduleStartTime' => null,
        'scheduleEndTime' => null,
        'createTime' => 'int64',
        'lastRunTime' => 'int64',
        'subRules' => null,
        'scheduleCron' => null
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
    * id  ID
    * name  作业名称
    * description  作业描述
    * categoryId  所属目录ID
    * level  SUGGEST:提示, MINOR:一般, MAJOR:严重, FATAL:致命
    * alarmCondition  统一告警条件
    * alarmNotify  是否开启通知告警
    * alarmNotifyType  TRIGGER_ALARM:触发告警, RUN_SUCCESS:运行成功, TRIGGER_ALARM_AND_RUNNING_SUCCESS:触发告警和运行成功
    * alarmNotifyTopic  通知主题名
    * scheduleType  调度类型，ONCE：单次调度，PERIODIC：周期性调度
    * scheduleStartDate  调度开始日期
    * scheduleEndDate  调度结束日期
    * schedulePeriod  调度周期，MINUTE:按分钟调度，HOUR:按小时调度，DAY:按天调度，WEEK:按周调度
    * scheduleInterval  调度间隔，注意：当调度周期为分钟、小时、天时，间隔时间为数字；而当调度周期为周时，调度间隔为星期的英文，如：每周一、周二调度时，schedule_interval为\"MONDAY,TUESDAY\"
    * scheduleStartTime  调度开始时间
    * scheduleEndTime  调度结束时间
    * createTime  最近运行时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * subRules  子规则
    * scheduleCron  调度cron表达式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'categoryId' => 'category_id',
            'level' => 'level',
            'alarmCondition' => 'alarm_condition',
            'alarmNotify' => 'alarm_notify',
            'alarmNotifyType' => 'alarm_notify_type',
            'alarmNotifyTopic' => 'alarm_notify_topic',
            'scheduleType' => 'schedule_type',
            'scheduleStartDate' => 'schedule_start_date',
            'scheduleEndDate' => 'schedule_end_date',
            'schedulePeriod' => 'schedule_period',
            'scheduleInterval' => 'schedule_interval',
            'scheduleStartTime' => 'schedule_start_time',
            'scheduleEndTime' => 'schedule_end_time',
            'createTime' => 'create_time',
            'lastRunTime' => 'last_run_time',
            'subRules' => 'sub_rules',
            'scheduleCron' => 'schedule_cron'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * name  作业名称
    * description  作业描述
    * categoryId  所属目录ID
    * level  SUGGEST:提示, MINOR:一般, MAJOR:严重, FATAL:致命
    * alarmCondition  统一告警条件
    * alarmNotify  是否开启通知告警
    * alarmNotifyType  TRIGGER_ALARM:触发告警, RUN_SUCCESS:运行成功, TRIGGER_ALARM_AND_RUNNING_SUCCESS:触发告警和运行成功
    * alarmNotifyTopic  通知主题名
    * scheduleType  调度类型，ONCE：单次调度，PERIODIC：周期性调度
    * scheduleStartDate  调度开始日期
    * scheduleEndDate  调度结束日期
    * schedulePeriod  调度周期，MINUTE:按分钟调度，HOUR:按小时调度，DAY:按天调度，WEEK:按周调度
    * scheduleInterval  调度间隔，注意：当调度周期为分钟、小时、天时，间隔时间为数字；而当调度周期为周时，调度间隔为星期的英文，如：每周一、周二调度时，schedule_interval为\"MONDAY,TUESDAY\"
    * scheduleStartTime  调度开始时间
    * scheduleEndTime  调度结束时间
    * createTime  最近运行时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * subRules  子规则
    * scheduleCron  调度cron表达式
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'categoryId' => 'setCategoryId',
            'level' => 'setLevel',
            'alarmCondition' => 'setAlarmCondition',
            'alarmNotify' => 'setAlarmNotify',
            'alarmNotifyType' => 'setAlarmNotifyType',
            'alarmNotifyTopic' => 'setAlarmNotifyTopic',
            'scheduleType' => 'setScheduleType',
            'scheduleStartDate' => 'setScheduleStartDate',
            'scheduleEndDate' => 'setScheduleEndDate',
            'schedulePeriod' => 'setSchedulePeriod',
            'scheduleInterval' => 'setScheduleInterval',
            'scheduleStartTime' => 'setScheduleStartTime',
            'scheduleEndTime' => 'setScheduleEndTime',
            'createTime' => 'setCreateTime',
            'lastRunTime' => 'setLastRunTime',
            'subRules' => 'setSubRules',
            'scheduleCron' => 'setScheduleCron'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * name  作业名称
    * description  作业描述
    * categoryId  所属目录ID
    * level  SUGGEST:提示, MINOR:一般, MAJOR:严重, FATAL:致命
    * alarmCondition  统一告警条件
    * alarmNotify  是否开启通知告警
    * alarmNotifyType  TRIGGER_ALARM:触发告警, RUN_SUCCESS:运行成功, TRIGGER_ALARM_AND_RUNNING_SUCCESS:触发告警和运行成功
    * alarmNotifyTopic  通知主题名
    * scheduleType  调度类型，ONCE：单次调度，PERIODIC：周期性调度
    * scheduleStartDate  调度开始日期
    * scheduleEndDate  调度结束日期
    * schedulePeriod  调度周期，MINUTE:按分钟调度，HOUR:按小时调度，DAY:按天调度，WEEK:按周调度
    * scheduleInterval  调度间隔，注意：当调度周期为分钟、小时、天时，间隔时间为数字；而当调度周期为周时，调度间隔为星期的英文，如：每周一、周二调度时，schedule_interval为\"MONDAY,TUESDAY\"
    * scheduleStartTime  调度开始时间
    * scheduleEndTime  调度结束时间
    * createTime  最近运行时间,13位时间戳(精确到毫秒)
    * lastRunTime  最近运行时间,13位时间戳(精确到毫秒)
    * subRules  子规则
    * scheduleCron  调度cron表达式
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'categoryId' => 'getCategoryId',
            'level' => 'getLevel',
            'alarmCondition' => 'getAlarmCondition',
            'alarmNotify' => 'getAlarmNotify',
            'alarmNotifyType' => 'getAlarmNotifyType',
            'alarmNotifyTopic' => 'getAlarmNotifyTopic',
            'scheduleType' => 'getScheduleType',
            'scheduleStartDate' => 'getScheduleStartDate',
            'scheduleEndDate' => 'getScheduleEndDate',
            'schedulePeriod' => 'getSchedulePeriod',
            'scheduleInterval' => 'getScheduleInterval',
            'scheduleStartTime' => 'getScheduleStartTime',
            'scheduleEndTime' => 'getScheduleEndTime',
            'createTime' => 'getCreateTime',
            'lastRunTime' => 'getLastRunTime',
            'subRules' => 'getSubRules',
            'scheduleCron' => 'getScheduleCron'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['alarmCondition'] = isset($data['alarmCondition']) ? $data['alarmCondition'] : null;
        $this->container['alarmNotify'] = isset($data['alarmNotify']) ? $data['alarmNotify'] : null;
        $this->container['alarmNotifyType'] = isset($data['alarmNotifyType']) ? $data['alarmNotifyType'] : null;
        $this->container['alarmNotifyTopic'] = isset($data['alarmNotifyTopic']) ? $data['alarmNotifyTopic'] : null;
        $this->container['scheduleType'] = isset($data['scheduleType']) ? $data['scheduleType'] : null;
        $this->container['scheduleStartDate'] = isset($data['scheduleStartDate']) ? $data['scheduleStartDate'] : null;
        $this->container['scheduleEndDate'] = isset($data['scheduleEndDate']) ? $data['scheduleEndDate'] : null;
        $this->container['schedulePeriod'] = isset($data['schedulePeriod']) ? $data['schedulePeriod'] : null;
        $this->container['scheduleInterval'] = isset($data['scheduleInterval']) ? $data['scheduleInterval'] : null;
        $this->container['scheduleStartTime'] = isset($data['scheduleStartTime']) ? $data['scheduleStartTime'] : null;
        $this->container['scheduleEndTime'] = isset($data['scheduleEndTime']) ? $data['scheduleEndTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastRunTime'] = isset($data['lastRunTime']) ? $data['lastRunTime'] : null;
        $this->container['subRules'] = isset($data['subRules']) ? $data['subRules'] : null;
        $this->container['scheduleCron'] = isset($data['scheduleCron']) ? $data['scheduleCron'] : null;
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
    * Gets id
    *  ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id ID
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
    *  作业名称
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
    * @param string|null $name 作业名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  作业描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 作业描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets categoryId
    *  所属目录ID
    *
    * @return int|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param int|null $categoryId 所属目录ID
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets level
    *  SUGGEST:提示, MINOR:一般, MAJOR:严重, FATAL:致命
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level SUGGEST:提示, MINOR:一般, MAJOR:严重, FATAL:致命
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets alarmCondition
    *  统一告警条件
    *
    * @return string|null
    */
    public function getAlarmCondition()
    {
        return $this->container['alarmCondition'];
    }

    /**
    * Sets alarmCondition
    *
    * @param string|null $alarmCondition 统一告警条件
    *
    * @return $this
    */
    public function setAlarmCondition($alarmCondition)
    {
        $this->container['alarmCondition'] = $alarmCondition;
        return $this;
    }

    /**
    * Gets alarmNotify
    *  是否开启通知告警
    *
    * @return bool|null
    */
    public function getAlarmNotify()
    {
        return $this->container['alarmNotify'];
    }

    /**
    * Sets alarmNotify
    *
    * @param bool|null $alarmNotify 是否开启通知告警
    *
    * @return $this
    */
    public function setAlarmNotify($alarmNotify)
    {
        $this->container['alarmNotify'] = $alarmNotify;
        return $this;
    }

    /**
    * Gets alarmNotifyType
    *  TRIGGER_ALARM:触发告警, RUN_SUCCESS:运行成功, TRIGGER_ALARM_AND_RUNNING_SUCCESS:触发告警和运行成功
    *
    * @return string|null
    */
    public function getAlarmNotifyType()
    {
        return $this->container['alarmNotifyType'];
    }

    /**
    * Sets alarmNotifyType
    *
    * @param string|null $alarmNotifyType TRIGGER_ALARM:触发告警, RUN_SUCCESS:运行成功, TRIGGER_ALARM_AND_RUNNING_SUCCESS:触发告警和运行成功
    *
    * @return $this
    */
    public function setAlarmNotifyType($alarmNotifyType)
    {
        $this->container['alarmNotifyType'] = $alarmNotifyType;
        return $this;
    }

    /**
    * Gets alarmNotifyTopic
    *  通知主题名
    *
    * @return string|null
    */
    public function getAlarmNotifyTopic()
    {
        return $this->container['alarmNotifyTopic'];
    }

    /**
    * Sets alarmNotifyTopic
    *
    * @param string|null $alarmNotifyTopic 通知主题名
    *
    * @return $this
    */
    public function setAlarmNotifyTopic($alarmNotifyTopic)
    {
        $this->container['alarmNotifyTopic'] = $alarmNotifyTopic;
        return $this;
    }

    /**
    * Gets scheduleType
    *  调度类型，ONCE：单次调度，PERIODIC：周期性调度
    *
    * @return string|null
    */
    public function getScheduleType()
    {
        return $this->container['scheduleType'];
    }

    /**
    * Sets scheduleType
    *
    * @param string|null $scheduleType 调度类型，ONCE：单次调度，PERIODIC：周期性调度
    *
    * @return $this
    */
    public function setScheduleType($scheduleType)
    {
        $this->container['scheduleType'] = $scheduleType;
        return $this;
    }

    /**
    * Gets scheduleStartDate
    *  调度开始日期
    *
    * @return string|null
    */
    public function getScheduleStartDate()
    {
        return $this->container['scheduleStartDate'];
    }

    /**
    * Sets scheduleStartDate
    *
    * @param string|null $scheduleStartDate 调度开始日期
    *
    * @return $this
    */
    public function setScheduleStartDate($scheduleStartDate)
    {
        $this->container['scheduleStartDate'] = $scheduleStartDate;
        return $this;
    }

    /**
    * Gets scheduleEndDate
    *  调度结束日期
    *
    * @return string|null
    */
    public function getScheduleEndDate()
    {
        return $this->container['scheduleEndDate'];
    }

    /**
    * Sets scheduleEndDate
    *
    * @param string|null $scheduleEndDate 调度结束日期
    *
    * @return $this
    */
    public function setScheduleEndDate($scheduleEndDate)
    {
        $this->container['scheduleEndDate'] = $scheduleEndDate;
        return $this;
    }

    /**
    * Gets schedulePeriod
    *  调度周期，MINUTE:按分钟调度，HOUR:按小时调度，DAY:按天调度，WEEK:按周调度
    *
    * @return string|null
    */
    public function getSchedulePeriod()
    {
        return $this->container['schedulePeriod'];
    }

    /**
    * Sets schedulePeriod
    *
    * @param string|null $schedulePeriod 调度周期，MINUTE:按分钟调度，HOUR:按小时调度，DAY:按天调度，WEEK:按周调度
    *
    * @return $this
    */
    public function setSchedulePeriod($schedulePeriod)
    {
        $this->container['schedulePeriod'] = $schedulePeriod;
        return $this;
    }

    /**
    * Gets scheduleInterval
    *  调度间隔，注意：当调度周期为分钟、小时、天时，间隔时间为数字；而当调度周期为周时，调度间隔为星期的英文，如：每周一、周二调度时，schedule_interval为\"MONDAY,TUESDAY\"
    *
    * @return string|null
    */
    public function getScheduleInterval()
    {
        return $this->container['scheduleInterval'];
    }

    /**
    * Sets scheduleInterval
    *
    * @param string|null $scheduleInterval 调度间隔，注意：当调度周期为分钟、小时、天时，间隔时间为数字；而当调度周期为周时，调度间隔为星期的英文，如：每周一、周二调度时，schedule_interval为\"MONDAY,TUESDAY\"
    *
    * @return $this
    */
    public function setScheduleInterval($scheduleInterval)
    {
        $this->container['scheduleInterval'] = $scheduleInterval;
        return $this;
    }

    /**
    * Gets scheduleStartTime
    *  调度开始时间
    *
    * @return string|null
    */
    public function getScheduleStartTime()
    {
        return $this->container['scheduleStartTime'];
    }

    /**
    * Sets scheduleStartTime
    *
    * @param string|null $scheduleStartTime 调度开始时间
    *
    * @return $this
    */
    public function setScheduleStartTime($scheduleStartTime)
    {
        $this->container['scheduleStartTime'] = $scheduleStartTime;
        return $this;
    }

    /**
    * Gets scheduleEndTime
    *  调度结束时间
    *
    * @return string|null
    */
    public function getScheduleEndTime()
    {
        return $this->container['scheduleEndTime'];
    }

    /**
    * Sets scheduleEndTime
    *
    * @param string|null $scheduleEndTime 调度结束时间
    *
    * @return $this
    */
    public function setScheduleEndTime($scheduleEndTime)
    {
        $this->container['scheduleEndTime'] = $scheduleEndTime;
        return $this;
    }

    /**
    * Gets createTime
    *  最近运行时间,13位时间戳(精确到毫秒)
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
    * @param int|null $createTime 最近运行时间,13位时间戳(精确到毫秒)
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastRunTime
    *  最近运行时间,13位时间戳(精确到毫秒)
    *
    * @return int|null
    */
    public function getLastRunTime()
    {
        return $this->container['lastRunTime'];
    }

    /**
    * Sets lastRunTime
    *
    * @param int|null $lastRunTime 最近运行时间,13位时间戳(精确到毫秒)
    *
    * @return $this
    */
    public function setLastRunTime($lastRunTime)
    {
        $this->container['lastRunTime'] = $lastRunTime;
        return $this;
    }

    /**
    * Gets subRules
    *  子规则
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityTaskRuleDetailForOpenApi[]|null
    */
    public function getSubRules()
    {
        return $this->container['subRules'];
    }

    /**
    * Sets subRules
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\QualityTaskRuleDetailForOpenApi[]|null $subRules 子规则
    *
    * @return $this
    */
    public function setSubRules($subRules)
    {
        $this->container['subRules'] = $subRules;
        return $this;
    }

    /**
    * Gets scheduleCron
    *  调度cron表达式
    *
    * @return string|null
    */
    public function getScheduleCron()
    {
        return $this->container['scheduleCron'];
    }

    /**
    * Sets scheduleCron
    *
    * @param string|null $scheduleCron 调度cron表达式
    *
    * @return $this
    */
    public function setScheduleCron($scheduleCron)
    {
        $this->container['scheduleCron'] = $scheduleCron;
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

