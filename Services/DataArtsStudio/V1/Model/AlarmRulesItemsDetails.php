<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmRulesItemsDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmRulesItemsDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  作业名称。
    * id  ID，与业务无关。
    * nodeId  作业ID/节点任务ID。
    * remindType  通知类型，0:完成;1:运行异常;3:未完成; 4:资源繁忙; 5-11基线相关的告警。
    * topicName  租户创建的smn服务的topic名称。
    * urn  topic对应URN。
    * notifyType  节点类型，1:作业; 2: 节点任务; 3: 基线任务。
    * displayNumber  责任人电话。
    * calleeNumber  被叫方的电话。
    * completeTime  完成时间。
    * createTime  创建时间。
    * useFlag  开关。
    * createUser  创建人。
    * ruleName  规则名称。
    * alarmPeriods  任务告警信息。
    * jobDirectory  作业目录信息。
    * nodeIdList  作业ID/节点任务ID。
    * nodeNameList  作业名称/作业名称.节点任务名称。
    * addMode  添加类型。
    * subjectType  告警对象类型。
    * notifyMethod  告警方式。
    * protocol  终端协议。
    * otherPersons  抄送人。
    * maxSendTimes  最大通知次数。
    * sendInterval  最小通知间隔，单位分钟。
    * dutyScheduleId  值班表id。
    * smnConfigId  smn配置id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'int',
            'nodeId' => 'int',
            'remindType' => 'int',
            'topicName' => 'string',
            'urn' => 'string',
            'notifyType' => 'int',
            'displayNumber' => 'string',
            'calleeNumber' => 'string',
            'completeTime' => 'string',
            'createTime' => 'int',
            'useFlag' => 'int',
            'createUser' => 'string',
            'ruleName' => 'string',
            'alarmPeriods' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlarmPeriod[]',
            'jobDirectory' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\DirectoryDTO[]',
            'nodeIdList' => 'int[]',
            'nodeNameList' => 'string[]',
            'addMode' => 'string',
            'subjectType' => 'string',
            'notifyMethod' => 'string',
            'protocol' => 'string',
            'otherPersons' => 'string',
            'maxSendTimes' => 'int',
            'sendInterval' => 'int',
            'dutyScheduleId' => 'int',
            'smnConfigId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  作业名称。
    * id  ID，与业务无关。
    * nodeId  作业ID/节点任务ID。
    * remindType  通知类型，0:完成;1:运行异常;3:未完成; 4:资源繁忙; 5-11基线相关的告警。
    * topicName  租户创建的smn服务的topic名称。
    * urn  topic对应URN。
    * notifyType  节点类型，1:作业; 2: 节点任务; 3: 基线任务。
    * displayNumber  责任人电话。
    * calleeNumber  被叫方的电话。
    * completeTime  完成时间。
    * createTime  创建时间。
    * useFlag  开关。
    * createUser  创建人。
    * ruleName  规则名称。
    * alarmPeriods  任务告警信息。
    * jobDirectory  作业目录信息。
    * nodeIdList  作业ID/节点任务ID。
    * nodeNameList  作业名称/作业名称.节点任务名称。
    * addMode  添加类型。
    * subjectType  告警对象类型。
    * notifyMethod  告警方式。
    * protocol  终端协议。
    * otherPersons  抄送人。
    * maxSendTimes  最大通知次数。
    * sendInterval  最小通知间隔，单位分钟。
    * dutyScheduleId  值班表id。
    * smnConfigId  smn配置id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => 'int64',
        'nodeId' => 'int64',
        'remindType' => 'int32',
        'topicName' => null,
        'urn' => null,
        'notifyType' => 'int32',
        'displayNumber' => null,
        'calleeNumber' => null,
        'completeTime' => null,
        'createTime' => 'int64',
        'useFlag' => 'int32',
        'createUser' => null,
        'ruleName' => null,
        'alarmPeriods' => null,
        'jobDirectory' => null,
        'nodeIdList' => 'int64',
        'nodeNameList' => null,
        'addMode' => null,
        'subjectType' => null,
        'notifyMethod' => null,
        'protocol' => null,
        'otherPersons' => null,
        'maxSendTimes' => 'int32',
        'sendInterval' => 'int32',
        'dutyScheduleId' => 'int64',
        'smnConfigId' => null
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
    * name  作业名称。
    * id  ID，与业务无关。
    * nodeId  作业ID/节点任务ID。
    * remindType  通知类型，0:完成;1:运行异常;3:未完成; 4:资源繁忙; 5-11基线相关的告警。
    * topicName  租户创建的smn服务的topic名称。
    * urn  topic对应URN。
    * notifyType  节点类型，1:作业; 2: 节点任务; 3: 基线任务。
    * displayNumber  责任人电话。
    * calleeNumber  被叫方的电话。
    * completeTime  完成时间。
    * createTime  创建时间。
    * useFlag  开关。
    * createUser  创建人。
    * ruleName  规则名称。
    * alarmPeriods  任务告警信息。
    * jobDirectory  作业目录信息。
    * nodeIdList  作业ID/节点任务ID。
    * nodeNameList  作业名称/作业名称.节点任务名称。
    * addMode  添加类型。
    * subjectType  告警对象类型。
    * notifyMethod  告警方式。
    * protocol  终端协议。
    * otherPersons  抄送人。
    * maxSendTimes  最大通知次数。
    * sendInterval  最小通知间隔，单位分钟。
    * dutyScheduleId  值班表id。
    * smnConfigId  smn配置id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'nodeId' => 'node_id',
            'remindType' => 'remind_type',
            'topicName' => 'topic_name',
            'urn' => 'urn',
            'notifyType' => 'notify_type',
            'displayNumber' => 'display_number',
            'calleeNumber' => 'callee_number',
            'completeTime' => 'complete_time',
            'createTime' => 'create_time',
            'useFlag' => 'use_flag',
            'createUser' => 'create_user',
            'ruleName' => 'rule_name',
            'alarmPeriods' => 'alarm_periods',
            'jobDirectory' => 'job_directory',
            'nodeIdList' => 'node_id_list',
            'nodeNameList' => 'node_name_list',
            'addMode' => 'add_mode',
            'subjectType' => 'subject_type',
            'notifyMethod' => 'notify_method',
            'protocol' => 'protocol',
            'otherPersons' => 'other_persons',
            'maxSendTimes' => 'max_send_times',
            'sendInterval' => 'send_interval',
            'dutyScheduleId' => 'duty_schedule_id',
            'smnConfigId' => 'smn_config_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  作业名称。
    * id  ID，与业务无关。
    * nodeId  作业ID/节点任务ID。
    * remindType  通知类型，0:完成;1:运行异常;3:未完成; 4:资源繁忙; 5-11基线相关的告警。
    * topicName  租户创建的smn服务的topic名称。
    * urn  topic对应URN。
    * notifyType  节点类型，1:作业; 2: 节点任务; 3: 基线任务。
    * displayNumber  责任人电话。
    * calleeNumber  被叫方的电话。
    * completeTime  完成时间。
    * createTime  创建时间。
    * useFlag  开关。
    * createUser  创建人。
    * ruleName  规则名称。
    * alarmPeriods  任务告警信息。
    * jobDirectory  作业目录信息。
    * nodeIdList  作业ID/节点任务ID。
    * nodeNameList  作业名称/作业名称.节点任务名称。
    * addMode  添加类型。
    * subjectType  告警对象类型。
    * notifyMethod  告警方式。
    * protocol  终端协议。
    * otherPersons  抄送人。
    * maxSendTimes  最大通知次数。
    * sendInterval  最小通知间隔，单位分钟。
    * dutyScheduleId  值班表id。
    * smnConfigId  smn配置id。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'nodeId' => 'setNodeId',
            'remindType' => 'setRemindType',
            'topicName' => 'setTopicName',
            'urn' => 'setUrn',
            'notifyType' => 'setNotifyType',
            'displayNumber' => 'setDisplayNumber',
            'calleeNumber' => 'setCalleeNumber',
            'completeTime' => 'setCompleteTime',
            'createTime' => 'setCreateTime',
            'useFlag' => 'setUseFlag',
            'createUser' => 'setCreateUser',
            'ruleName' => 'setRuleName',
            'alarmPeriods' => 'setAlarmPeriods',
            'jobDirectory' => 'setJobDirectory',
            'nodeIdList' => 'setNodeIdList',
            'nodeNameList' => 'setNodeNameList',
            'addMode' => 'setAddMode',
            'subjectType' => 'setSubjectType',
            'notifyMethod' => 'setNotifyMethod',
            'protocol' => 'setProtocol',
            'otherPersons' => 'setOtherPersons',
            'maxSendTimes' => 'setMaxSendTimes',
            'sendInterval' => 'setSendInterval',
            'dutyScheduleId' => 'setDutyScheduleId',
            'smnConfigId' => 'setSmnConfigId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  作业名称。
    * id  ID，与业务无关。
    * nodeId  作业ID/节点任务ID。
    * remindType  通知类型，0:完成;1:运行异常;3:未完成; 4:资源繁忙; 5-11基线相关的告警。
    * topicName  租户创建的smn服务的topic名称。
    * urn  topic对应URN。
    * notifyType  节点类型，1:作业; 2: 节点任务; 3: 基线任务。
    * displayNumber  责任人电话。
    * calleeNumber  被叫方的电话。
    * completeTime  完成时间。
    * createTime  创建时间。
    * useFlag  开关。
    * createUser  创建人。
    * ruleName  规则名称。
    * alarmPeriods  任务告警信息。
    * jobDirectory  作业目录信息。
    * nodeIdList  作业ID/节点任务ID。
    * nodeNameList  作业名称/作业名称.节点任务名称。
    * addMode  添加类型。
    * subjectType  告警对象类型。
    * notifyMethod  告警方式。
    * protocol  终端协议。
    * otherPersons  抄送人。
    * maxSendTimes  最大通知次数。
    * sendInterval  最小通知间隔，单位分钟。
    * dutyScheduleId  值班表id。
    * smnConfigId  smn配置id。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'nodeId' => 'getNodeId',
            'remindType' => 'getRemindType',
            'topicName' => 'getTopicName',
            'urn' => 'getUrn',
            'notifyType' => 'getNotifyType',
            'displayNumber' => 'getDisplayNumber',
            'calleeNumber' => 'getCalleeNumber',
            'completeTime' => 'getCompleteTime',
            'createTime' => 'getCreateTime',
            'useFlag' => 'getUseFlag',
            'createUser' => 'getCreateUser',
            'ruleName' => 'getRuleName',
            'alarmPeriods' => 'getAlarmPeriods',
            'jobDirectory' => 'getJobDirectory',
            'nodeIdList' => 'getNodeIdList',
            'nodeNameList' => 'getNodeNameList',
            'addMode' => 'getAddMode',
            'subjectType' => 'getSubjectType',
            'notifyMethod' => 'getNotifyMethod',
            'protocol' => 'getProtocol',
            'otherPersons' => 'getOtherPersons',
            'maxSendTimes' => 'getMaxSendTimes',
            'sendInterval' => 'getSendInterval',
            'dutyScheduleId' => 'getDutyScheduleId',
            'smnConfigId' => 'getSmnConfigId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['remindType'] = isset($data['remindType']) ? $data['remindType'] : null;
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['notifyType'] = isset($data['notifyType']) ? $data['notifyType'] : null;
        $this->container['displayNumber'] = isset($data['displayNumber']) ? $data['displayNumber'] : null;
        $this->container['calleeNumber'] = isset($data['calleeNumber']) ? $data['calleeNumber'] : null;
        $this->container['completeTime'] = isset($data['completeTime']) ? $data['completeTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['useFlag'] = isset($data['useFlag']) ? $data['useFlag'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['alarmPeriods'] = isset($data['alarmPeriods']) ? $data['alarmPeriods'] : null;
        $this->container['jobDirectory'] = isset($data['jobDirectory']) ? $data['jobDirectory'] : null;
        $this->container['nodeIdList'] = isset($data['nodeIdList']) ? $data['nodeIdList'] : null;
        $this->container['nodeNameList'] = isset($data['nodeNameList']) ? $data['nodeNameList'] : null;
        $this->container['addMode'] = isset($data['addMode']) ? $data['addMode'] : null;
        $this->container['subjectType'] = isset($data['subjectType']) ? $data['subjectType'] : null;
        $this->container['notifyMethod'] = isset($data['notifyMethod']) ? $data['notifyMethod'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['otherPersons'] = isset($data['otherPersons']) ? $data['otherPersons'] : null;
        $this->container['maxSendTimes'] = isset($data['maxSendTimes']) ? $data['maxSendTimes'] : null;
        $this->container['sendInterval'] = isset($data['sendInterval']) ? $data['sendInterval'] : null;
        $this->container['dutyScheduleId'] = isset($data['dutyScheduleId']) ? $data['dutyScheduleId'] : null;
        $this->container['smnConfigId'] = isset($data['smnConfigId']) ? $data['smnConfigId'] : null;
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
    * Gets name
    *  作业名称。
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
    * @param string|null $name 作业名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  ID，与业务无关。
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
    * @param int|null $id ID，与业务无关。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nodeId
    *  作业ID/节点任务ID。
    *
    * @return int|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param int|null $nodeId 作业ID/节点任务ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets remindType
    *  通知类型，0:完成;1:运行异常;3:未完成; 4:资源繁忙; 5-11基线相关的告警。
    *
    * @return int|null
    */
    public function getRemindType()
    {
        return $this->container['remindType'];
    }

    /**
    * Sets remindType
    *
    * @param int|null $remindType 通知类型，0:完成;1:运行异常;3:未完成; 4:资源繁忙; 5-11基线相关的告警。
    *
    * @return $this
    */
    public function setRemindType($remindType)
    {
        $this->container['remindType'] = $remindType;
        return $this;
    }

    /**
    * Gets topicName
    *  租户创建的smn服务的topic名称。
    *
    * @return string|null
    */
    public function getTopicName()
    {
        return $this->container['topicName'];
    }

    /**
    * Sets topicName
    *
    * @param string|null $topicName 租户创建的smn服务的topic名称。
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
        return $this;
    }

    /**
    * Gets urn
    *  topic对应URN。
    *
    * @return string|null
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string|null $urn topic对应URN。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets notifyType
    *  节点类型，1:作业; 2: 节点任务; 3: 基线任务。
    *
    * @return int|null
    */
    public function getNotifyType()
    {
        return $this->container['notifyType'];
    }

    /**
    * Sets notifyType
    *
    * @param int|null $notifyType 节点类型，1:作业; 2: 节点任务; 3: 基线任务。
    *
    * @return $this
    */
    public function setNotifyType($notifyType)
    {
        $this->container['notifyType'] = $notifyType;
        return $this;
    }

    /**
    * Gets displayNumber
    *  责任人电话。
    *
    * @return string|null
    */
    public function getDisplayNumber()
    {
        return $this->container['displayNumber'];
    }

    /**
    * Sets displayNumber
    *
    * @param string|null $displayNumber 责任人电话。
    *
    * @return $this
    */
    public function setDisplayNumber($displayNumber)
    {
        $this->container['displayNumber'] = $displayNumber;
        return $this;
    }

    /**
    * Gets calleeNumber
    *  被叫方的电话。
    *
    * @return string|null
    */
    public function getCalleeNumber()
    {
        return $this->container['calleeNumber'];
    }

    /**
    * Sets calleeNumber
    *
    * @param string|null $calleeNumber 被叫方的电话。
    *
    * @return $this
    */
    public function setCalleeNumber($calleeNumber)
    {
        $this->container['calleeNumber'] = $calleeNumber;
        return $this;
    }

    /**
    * Gets completeTime
    *  完成时间。
    *
    * @return string|null
    */
    public function getCompleteTime()
    {
        return $this->container['completeTime'];
    }

    /**
    * Sets completeTime
    *
    * @param string|null $completeTime 完成时间。
    *
    * @return $this
    */
    public function setCompleteTime($completeTime)
    {
        $this->container['completeTime'] = $completeTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets useFlag
    *  开关。
    *
    * @return int|null
    */
    public function getUseFlag()
    {
        return $this->container['useFlag'];
    }

    /**
    * Sets useFlag
    *
    * @param int|null $useFlag 开关。
    *
    * @return $this
    */
    public function setUseFlag($useFlag)
    {
        $this->container['useFlag'] = $useFlag;
        return $this;
    }

    /**
    * Gets createUser
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建人。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名称。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets alarmPeriods
    *  任务告警信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlarmPeriod[]|null
    */
    public function getAlarmPeriods()
    {
        return $this->container['alarmPeriods'];
    }

    /**
    * Sets alarmPeriods
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlarmPeriod[]|null $alarmPeriods 任务告警信息。
    *
    * @return $this
    */
    public function setAlarmPeriods($alarmPeriods)
    {
        $this->container['alarmPeriods'] = $alarmPeriods;
        return $this;
    }

    /**
    * Gets jobDirectory
    *  作业目录信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DirectoryDTO[]|null
    */
    public function getJobDirectory()
    {
        return $this->container['jobDirectory'];
    }

    /**
    * Sets jobDirectory
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\DirectoryDTO[]|null $jobDirectory 作业目录信息。
    *
    * @return $this
    */
    public function setJobDirectory($jobDirectory)
    {
        $this->container['jobDirectory'] = $jobDirectory;
        return $this;
    }

    /**
    * Gets nodeIdList
    *  作业ID/节点任务ID。
    *
    * @return int[]|null
    */
    public function getNodeIdList()
    {
        return $this->container['nodeIdList'];
    }

    /**
    * Sets nodeIdList
    *
    * @param int[]|null $nodeIdList 作业ID/节点任务ID。
    *
    * @return $this
    */
    public function setNodeIdList($nodeIdList)
    {
        $this->container['nodeIdList'] = $nodeIdList;
        return $this;
    }

    /**
    * Gets nodeNameList
    *  作业名称/作业名称.节点任务名称。
    *
    * @return string[]|null
    */
    public function getNodeNameList()
    {
        return $this->container['nodeNameList'];
    }

    /**
    * Sets nodeNameList
    *
    * @param string[]|null $nodeNameList 作业名称/作业名称.节点任务名称。
    *
    * @return $this
    */
    public function setNodeNameList($nodeNameList)
    {
        $this->container['nodeNameList'] = $nodeNameList;
        return $this;
    }

    /**
    * Gets addMode
    *  添加类型。
    *
    * @return string|null
    */
    public function getAddMode()
    {
        return $this->container['addMode'];
    }

    /**
    * Sets addMode
    *
    * @param string|null $addMode 添加类型。
    *
    * @return $this
    */
    public function setAddMode($addMode)
    {
        $this->container['addMode'] = $addMode;
        return $this;
    }

    /**
    * Gets subjectType
    *  告警对象类型。
    *
    * @return string|null
    */
    public function getSubjectType()
    {
        return $this->container['subjectType'];
    }

    /**
    * Sets subjectType
    *
    * @param string|null $subjectType 告警对象类型。
    *
    * @return $this
    */
    public function setSubjectType($subjectType)
    {
        $this->container['subjectType'] = $subjectType;
        return $this;
    }

    /**
    * Gets notifyMethod
    *  告警方式。
    *
    * @return string|null
    */
    public function getNotifyMethod()
    {
        return $this->container['notifyMethod'];
    }

    /**
    * Sets notifyMethod
    *
    * @param string|null $notifyMethod 告警方式。
    *
    * @return $this
    */
    public function setNotifyMethod($notifyMethod)
    {
        $this->container['notifyMethod'] = $notifyMethod;
        return $this;
    }

    /**
    * Gets protocol
    *  终端协议。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 终端协议。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets otherPersons
    *  抄送人。
    *
    * @return string|null
    */
    public function getOtherPersons()
    {
        return $this->container['otherPersons'];
    }

    /**
    * Sets otherPersons
    *
    * @param string|null $otherPersons 抄送人。
    *
    * @return $this
    */
    public function setOtherPersons($otherPersons)
    {
        $this->container['otherPersons'] = $otherPersons;
        return $this;
    }

    /**
    * Gets maxSendTimes
    *  最大通知次数。
    *
    * @return int|null
    */
    public function getMaxSendTimes()
    {
        return $this->container['maxSendTimes'];
    }

    /**
    * Sets maxSendTimes
    *
    * @param int|null $maxSendTimes 最大通知次数。
    *
    * @return $this
    */
    public function setMaxSendTimes($maxSendTimes)
    {
        $this->container['maxSendTimes'] = $maxSendTimes;
        return $this;
    }

    /**
    * Gets sendInterval
    *  最小通知间隔，单位分钟。
    *
    * @return int|null
    */
    public function getSendInterval()
    {
        return $this->container['sendInterval'];
    }

    /**
    * Sets sendInterval
    *
    * @param int|null $sendInterval 最小通知间隔，单位分钟。
    *
    * @return $this
    */
    public function setSendInterval($sendInterval)
    {
        $this->container['sendInterval'] = $sendInterval;
        return $this;
    }

    /**
    * Gets dutyScheduleId
    *  值班表id。
    *
    * @return int|null
    */
    public function getDutyScheduleId()
    {
        return $this->container['dutyScheduleId'];
    }

    /**
    * Sets dutyScheduleId
    *
    * @param int|null $dutyScheduleId 值班表id。
    *
    * @return $this
    */
    public function setDutyScheduleId($dutyScheduleId)
    {
        $this->container['dutyScheduleId'] = $dutyScheduleId;
        return $this;
    }

    /**
    * Gets smnConfigId
    *  smn配置id。
    *
    * @return string|null
    */
    public function getSmnConfigId()
    {
        return $this->container['smnConfigId'];
    }

    /**
    * Sets smnConfigId
    *
    * @param string|null $smnConfigId smn配置id。
    *
    * @return $this
    */
    public function setSmnConfigId($smnConfigId)
    {
        $this->container['smnConfigId'] = $smnConfigId;
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

