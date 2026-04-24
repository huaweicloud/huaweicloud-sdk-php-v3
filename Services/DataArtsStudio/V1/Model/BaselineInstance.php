<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaselineInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaselineInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  基线实例ID。
    * baseline  基线明细。
    * baselineId  基线ID。
    * baselineName  基线任务名称。
    * baselineVersion  版本号。
    * priority  优先级。
    * dag  基线任务实例作业依赖图（包含JOB_ID+JOB名称+版本号+是否为关键路径节点）。
    * status  基线实例状态。
    * buffer  基线实例余量，单位为s。
    * estimateCompleteTime  预计完成时间戳，单位毫秒。
    * expectTime  实例预警时间戳，单位毫秒。
    * finishStatus  基线实例是否完成。
    * startTime  基线实例开始时间戳，单位毫秒。
    * endTime  基线实例结束时间戳，单位毫秒，finish_status（基线实例完成状态）为FINISH（已完成）时，返回基线实例的完成时间戳。
    * executeTime  运行时间戳，单位毫秒。
    * errorCode  错误编码。
    * errorMessage  错误信息。
    * taskInstances  任务实例信息。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * firstAlarmTime  首次告警时间戳，单位毫秒。
    * lastAlarmTime  最后告警时间戳，单位毫秒。
    * slaTime  实例承诺时间戳，单位毫秒。
    * processTime  处理时间戳，单位毫秒。
    * recoverTime  恢复时间戳，单位毫秒。
    * ignoreTime  忽略时间戳，单位毫秒。
    * processBuffer  处理时长，设置处理时间所需要的时间，设置后在该时间段内将暂停事件报警，事件的处理操作记录会被记录。
    * createDay  创建时间的天数，表示一年的第几天。
    * instanceType  实例类型。
    * processUserId  基线处理人用户ID。
    * processUserName  基线处理人用户名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'baseline' => 'object',
            'baselineId' => 'string',
            'baselineName' => 'string',
            'baselineVersion' => 'int',
            'priority' => 'int',
            'dag' => 'string',
            'status' => 'string',
            'buffer' => 'int',
            'estimateCompleteTime' => 'int',
            'expectTime' => 'int',
            'finishStatus' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'executeTime' => 'int',
            'errorCode' => 'string',
            'errorMessage' => 'string',
            'taskInstances' => 'object',
            'ownerId' => 'string',
            'ownerName' => 'string',
            'domainId' => 'string',
            'domainName' => 'string',
            'projectId' => 'string',
            'instanceId' => 'string',
            'workspaceId' => 'string',
            'firstAlarmTime' => 'int',
            'lastAlarmTime' => 'int',
            'slaTime' => 'int',
            'processTime' => 'int',
            'recoverTime' => 'int',
            'ignoreTime' => 'int',
            'processBuffer' => 'int',
            'createDay' => 'int',
            'instanceType' => 'string',
            'processUserId' => 'string',
            'processUserName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  基线实例ID。
    * baseline  基线明细。
    * baselineId  基线ID。
    * baselineName  基线任务名称。
    * baselineVersion  版本号。
    * priority  优先级。
    * dag  基线任务实例作业依赖图（包含JOB_ID+JOB名称+版本号+是否为关键路径节点）。
    * status  基线实例状态。
    * buffer  基线实例余量，单位为s。
    * estimateCompleteTime  预计完成时间戳，单位毫秒。
    * expectTime  实例预警时间戳，单位毫秒。
    * finishStatus  基线实例是否完成。
    * startTime  基线实例开始时间戳，单位毫秒。
    * endTime  基线实例结束时间戳，单位毫秒，finish_status（基线实例完成状态）为FINISH（已完成）时，返回基线实例的完成时间戳。
    * executeTime  运行时间戳，单位毫秒。
    * errorCode  错误编码。
    * errorMessage  错误信息。
    * taskInstances  任务实例信息。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * firstAlarmTime  首次告警时间戳，单位毫秒。
    * lastAlarmTime  最后告警时间戳，单位毫秒。
    * slaTime  实例承诺时间戳，单位毫秒。
    * processTime  处理时间戳，单位毫秒。
    * recoverTime  恢复时间戳，单位毫秒。
    * ignoreTime  忽略时间戳，单位毫秒。
    * processBuffer  处理时长，设置处理时间所需要的时间，设置后在该时间段内将暂停事件报警，事件的处理操作记录会被记录。
    * createDay  创建时间的天数，表示一年的第几天。
    * instanceType  实例类型。
    * processUserId  基线处理人用户ID。
    * processUserName  基线处理人用户名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'baseline' => null,
        'baselineId' => null,
        'baselineName' => null,
        'baselineVersion' => 'int32',
        'priority' => 'int32',
        'dag' => null,
        'status' => null,
        'buffer' => 'int64',
        'estimateCompleteTime' => 'int64',
        'expectTime' => 'int64',
        'finishStatus' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'executeTime' => 'int64',
        'errorCode' => null,
        'errorMessage' => null,
        'taskInstances' => null,
        'ownerId' => null,
        'ownerName' => null,
        'domainId' => null,
        'domainName' => null,
        'projectId' => null,
        'instanceId' => null,
        'workspaceId' => null,
        'firstAlarmTime' => 'int64',
        'lastAlarmTime' => 'int64',
        'slaTime' => 'int64',
        'processTime' => 'int64',
        'recoverTime' => 'int64',
        'ignoreTime' => 'int64',
        'processBuffer' => 'int64',
        'createDay' => 'int32',
        'instanceType' => null,
        'processUserId' => null,
        'processUserName' => null
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
    * id  基线实例ID。
    * baseline  基线明细。
    * baselineId  基线ID。
    * baselineName  基线任务名称。
    * baselineVersion  版本号。
    * priority  优先级。
    * dag  基线任务实例作业依赖图（包含JOB_ID+JOB名称+版本号+是否为关键路径节点）。
    * status  基线实例状态。
    * buffer  基线实例余量，单位为s。
    * estimateCompleteTime  预计完成时间戳，单位毫秒。
    * expectTime  实例预警时间戳，单位毫秒。
    * finishStatus  基线实例是否完成。
    * startTime  基线实例开始时间戳，单位毫秒。
    * endTime  基线实例结束时间戳，单位毫秒，finish_status（基线实例完成状态）为FINISH（已完成）时，返回基线实例的完成时间戳。
    * executeTime  运行时间戳，单位毫秒。
    * errorCode  错误编码。
    * errorMessage  错误信息。
    * taskInstances  任务实例信息。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * firstAlarmTime  首次告警时间戳，单位毫秒。
    * lastAlarmTime  最后告警时间戳，单位毫秒。
    * slaTime  实例承诺时间戳，单位毫秒。
    * processTime  处理时间戳，单位毫秒。
    * recoverTime  恢复时间戳，单位毫秒。
    * ignoreTime  忽略时间戳，单位毫秒。
    * processBuffer  处理时长，设置处理时间所需要的时间，设置后在该时间段内将暂停事件报警，事件的处理操作记录会被记录。
    * createDay  创建时间的天数，表示一年的第几天。
    * instanceType  实例类型。
    * processUserId  基线处理人用户ID。
    * processUserName  基线处理人用户名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'baseline' => 'baseline',
            'baselineId' => 'baseline_id',
            'baselineName' => 'baseline_name',
            'baselineVersion' => 'baseline_version',
            'priority' => 'priority',
            'dag' => 'dag',
            'status' => 'status',
            'buffer' => 'buffer',
            'estimateCompleteTime' => 'estimate_complete_time',
            'expectTime' => 'expect_time',
            'finishStatus' => 'finish_status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'executeTime' => 'execute_time',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message',
            'taskInstances' => 'task_instances',
            'ownerId' => 'owner_id',
            'ownerName' => 'owner_name',
            'domainId' => 'domain_id',
            'domainName' => 'domain_name',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'workspaceId' => 'workspace_id',
            'firstAlarmTime' => 'first_alarm_time',
            'lastAlarmTime' => 'last_alarm_time',
            'slaTime' => 'sla_time',
            'processTime' => 'process_time',
            'recoverTime' => 'recover_time',
            'ignoreTime' => 'ignore_time',
            'processBuffer' => 'process_buffer',
            'createDay' => 'create_day',
            'instanceType' => 'instance_type',
            'processUserId' => 'process_user_id',
            'processUserName' => 'process_user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  基线实例ID。
    * baseline  基线明细。
    * baselineId  基线ID。
    * baselineName  基线任务名称。
    * baselineVersion  版本号。
    * priority  优先级。
    * dag  基线任务实例作业依赖图（包含JOB_ID+JOB名称+版本号+是否为关键路径节点）。
    * status  基线实例状态。
    * buffer  基线实例余量，单位为s。
    * estimateCompleteTime  预计完成时间戳，单位毫秒。
    * expectTime  实例预警时间戳，单位毫秒。
    * finishStatus  基线实例是否完成。
    * startTime  基线实例开始时间戳，单位毫秒。
    * endTime  基线实例结束时间戳，单位毫秒，finish_status（基线实例完成状态）为FINISH（已完成）时，返回基线实例的完成时间戳。
    * executeTime  运行时间戳，单位毫秒。
    * errorCode  错误编码。
    * errorMessage  错误信息。
    * taskInstances  任务实例信息。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * firstAlarmTime  首次告警时间戳，单位毫秒。
    * lastAlarmTime  最后告警时间戳，单位毫秒。
    * slaTime  实例承诺时间戳，单位毫秒。
    * processTime  处理时间戳，单位毫秒。
    * recoverTime  恢复时间戳，单位毫秒。
    * ignoreTime  忽略时间戳，单位毫秒。
    * processBuffer  处理时长，设置处理时间所需要的时间，设置后在该时间段内将暂停事件报警，事件的处理操作记录会被记录。
    * createDay  创建时间的天数，表示一年的第几天。
    * instanceType  实例类型。
    * processUserId  基线处理人用户ID。
    * processUserName  基线处理人用户名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'baseline' => 'setBaseline',
            'baselineId' => 'setBaselineId',
            'baselineName' => 'setBaselineName',
            'baselineVersion' => 'setBaselineVersion',
            'priority' => 'setPriority',
            'dag' => 'setDag',
            'status' => 'setStatus',
            'buffer' => 'setBuffer',
            'estimateCompleteTime' => 'setEstimateCompleteTime',
            'expectTime' => 'setExpectTime',
            'finishStatus' => 'setFinishStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'executeTime' => 'setExecuteTime',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage',
            'taskInstances' => 'setTaskInstances',
            'ownerId' => 'setOwnerId',
            'ownerName' => 'setOwnerName',
            'domainId' => 'setDomainId',
            'domainName' => 'setDomainName',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'workspaceId' => 'setWorkspaceId',
            'firstAlarmTime' => 'setFirstAlarmTime',
            'lastAlarmTime' => 'setLastAlarmTime',
            'slaTime' => 'setSlaTime',
            'processTime' => 'setProcessTime',
            'recoverTime' => 'setRecoverTime',
            'ignoreTime' => 'setIgnoreTime',
            'processBuffer' => 'setProcessBuffer',
            'createDay' => 'setCreateDay',
            'instanceType' => 'setInstanceType',
            'processUserId' => 'setProcessUserId',
            'processUserName' => 'setProcessUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  基线实例ID。
    * baseline  基线明细。
    * baselineId  基线ID。
    * baselineName  基线任务名称。
    * baselineVersion  版本号。
    * priority  优先级。
    * dag  基线任务实例作业依赖图（包含JOB_ID+JOB名称+版本号+是否为关键路径节点）。
    * status  基线实例状态。
    * buffer  基线实例余量，单位为s。
    * estimateCompleteTime  预计完成时间戳，单位毫秒。
    * expectTime  实例预警时间戳，单位毫秒。
    * finishStatus  基线实例是否完成。
    * startTime  基线实例开始时间戳，单位毫秒。
    * endTime  基线实例结束时间戳，单位毫秒，finish_status（基线实例完成状态）为FINISH（已完成）时，返回基线实例的完成时间戳。
    * executeTime  运行时间戳，单位毫秒。
    * errorCode  错误编码。
    * errorMessage  错误信息。
    * taskInstances  任务实例信息。
    * ownerId  责任人用户ID。
    * ownerName  责任人用户名称。
    * domainId  责任人租户ID。
    * domainName  责任人租户名称。
    * projectId  项目ID。
    * instanceId  DataArts Studio实例ID。
    * workspaceId  工作空间ID。
    * firstAlarmTime  首次告警时间戳，单位毫秒。
    * lastAlarmTime  最后告警时间戳，单位毫秒。
    * slaTime  实例承诺时间戳，单位毫秒。
    * processTime  处理时间戳，单位毫秒。
    * recoverTime  恢复时间戳，单位毫秒。
    * ignoreTime  忽略时间戳，单位毫秒。
    * processBuffer  处理时长，设置处理时间所需要的时间，设置后在该时间段内将暂停事件报警，事件的处理操作记录会被记录。
    * createDay  创建时间的天数，表示一年的第几天。
    * instanceType  实例类型。
    * processUserId  基线处理人用户ID。
    * processUserName  基线处理人用户名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'baseline' => 'getBaseline',
            'baselineId' => 'getBaselineId',
            'baselineName' => 'getBaselineName',
            'baselineVersion' => 'getBaselineVersion',
            'priority' => 'getPriority',
            'dag' => 'getDag',
            'status' => 'getStatus',
            'buffer' => 'getBuffer',
            'estimateCompleteTime' => 'getEstimateCompleteTime',
            'expectTime' => 'getExpectTime',
            'finishStatus' => 'getFinishStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'executeTime' => 'getExecuteTime',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage',
            'taskInstances' => 'getTaskInstances',
            'ownerId' => 'getOwnerId',
            'ownerName' => 'getOwnerName',
            'domainId' => 'getDomainId',
            'domainName' => 'getDomainName',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'workspaceId' => 'getWorkspaceId',
            'firstAlarmTime' => 'getFirstAlarmTime',
            'lastAlarmTime' => 'getLastAlarmTime',
            'slaTime' => 'getSlaTime',
            'processTime' => 'getProcessTime',
            'recoverTime' => 'getRecoverTime',
            'ignoreTime' => 'getIgnoreTime',
            'processBuffer' => 'getProcessBuffer',
            'createDay' => 'getCreateDay',
            'instanceType' => 'getInstanceType',
            'processUserId' => 'getProcessUserId',
            'processUserName' => 'getProcessUserName'
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
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['baselineId'] = isset($data['baselineId']) ? $data['baselineId'] : null;
        $this->container['baselineName'] = isset($data['baselineName']) ? $data['baselineName'] : null;
        $this->container['baselineVersion'] = isset($data['baselineVersion']) ? $data['baselineVersion'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['dag'] = isset($data['dag']) ? $data['dag'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['buffer'] = isset($data['buffer']) ? $data['buffer'] : null;
        $this->container['estimateCompleteTime'] = isset($data['estimateCompleteTime']) ? $data['estimateCompleteTime'] : null;
        $this->container['expectTime'] = isset($data['expectTime']) ? $data['expectTime'] : null;
        $this->container['finishStatus'] = isset($data['finishStatus']) ? $data['finishStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['taskInstances'] = isset($data['taskInstances']) ? $data['taskInstances'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['firstAlarmTime'] = isset($data['firstAlarmTime']) ? $data['firstAlarmTime'] : null;
        $this->container['lastAlarmTime'] = isset($data['lastAlarmTime']) ? $data['lastAlarmTime'] : null;
        $this->container['slaTime'] = isset($data['slaTime']) ? $data['slaTime'] : null;
        $this->container['processTime'] = isset($data['processTime']) ? $data['processTime'] : null;
        $this->container['recoverTime'] = isset($data['recoverTime']) ? $data['recoverTime'] : null;
        $this->container['ignoreTime'] = isset($data['ignoreTime']) ? $data['ignoreTime'] : null;
        $this->container['processBuffer'] = isset($data['processBuffer']) ? $data['processBuffer'] : null;
        $this->container['createDay'] = isset($data['createDay']) ? $data['createDay'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['processUserId'] = isset($data['processUserId']) ? $data['processUserId'] : null;
        $this->container['processUserName'] = isset($data['processUserName']) ? $data['processUserName'] : null;
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
    *  基线实例ID。
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
    * @param string|null $id 基线实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets baseline
    *  基线明细。
    *
    * @return object|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param object|null $baseline 基线明细。
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
        return $this;
    }

    /**
    * Gets baselineId
    *  基线ID。
    *
    * @return string|null
    */
    public function getBaselineId()
    {
        return $this->container['baselineId'];
    }

    /**
    * Sets baselineId
    *
    * @param string|null $baselineId 基线ID。
    *
    * @return $this
    */
    public function setBaselineId($baselineId)
    {
        $this->container['baselineId'] = $baselineId;
        return $this;
    }

    /**
    * Gets baselineName
    *  基线任务名称。
    *
    * @return string|null
    */
    public function getBaselineName()
    {
        return $this->container['baselineName'];
    }

    /**
    * Sets baselineName
    *
    * @param string|null $baselineName 基线任务名称。
    *
    * @return $this
    */
    public function setBaselineName($baselineName)
    {
        $this->container['baselineName'] = $baselineName;
        return $this;
    }

    /**
    * Gets baselineVersion
    *  版本号。
    *
    * @return int|null
    */
    public function getBaselineVersion()
    {
        return $this->container['baselineVersion'];
    }

    /**
    * Sets baselineVersion
    *
    * @param int|null $baselineVersion 版本号。
    *
    * @return $this
    */
    public function setBaselineVersion($baselineVersion)
    {
        $this->container['baselineVersion'] = $baselineVersion;
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
    * Gets dag
    *  基线任务实例作业依赖图（包含JOB_ID+JOB名称+版本号+是否为关键路径节点）。
    *
    * @return string|null
    */
    public function getDag()
    {
        return $this->container['dag'];
    }

    /**
    * Sets dag
    *
    * @param string|null $dag 基线任务实例作业依赖图（包含JOB_ID+JOB名称+版本号+是否为关键路径节点）。
    *
    * @return $this
    */
    public function setDag($dag)
    {
        $this->container['dag'] = $dag;
        return $this;
    }

    /**
    * Gets status
    *  基线实例状态。
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
    * @param string|null $status 基线实例状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets buffer
    *  基线实例余量，单位为s。
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
    * @param int|null $buffer 基线实例余量，单位为s。
    *
    * @return $this
    */
    public function setBuffer($buffer)
    {
        $this->container['buffer'] = $buffer;
        return $this;
    }

    /**
    * Gets estimateCompleteTime
    *  预计完成时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getEstimateCompleteTime()
    {
        return $this->container['estimateCompleteTime'];
    }

    /**
    * Sets estimateCompleteTime
    *
    * @param int|null $estimateCompleteTime 预计完成时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setEstimateCompleteTime($estimateCompleteTime)
    {
        $this->container['estimateCompleteTime'] = $estimateCompleteTime;
        return $this;
    }

    /**
    * Gets expectTime
    *  实例预警时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getExpectTime()
    {
        return $this->container['expectTime'];
    }

    /**
    * Sets expectTime
    *
    * @param int|null $expectTime 实例预警时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setExpectTime($expectTime)
    {
        $this->container['expectTime'] = $expectTime;
        return $this;
    }

    /**
    * Gets finishStatus
    *  基线实例是否完成。
    *
    * @return string|null
    */
    public function getFinishStatus()
    {
        return $this->container['finishStatus'];
    }

    /**
    * Sets finishStatus
    *
    * @param string|null $finishStatus 基线实例是否完成。
    *
    * @return $this
    */
    public function setFinishStatus($finishStatus)
    {
        $this->container['finishStatus'] = $finishStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  基线实例开始时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 基线实例开始时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  基线实例结束时间戳，单位毫秒，finish_status（基线实例完成状态）为FINISH（已完成）时，返回基线实例的完成时间戳。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 基线实例结束时间戳，单位毫秒，finish_status（基线实例完成状态）为FINISH（已完成）时，返回基线实例的完成时间戳。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets executeTime
    *  运行时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param int|null $executeTime 运行时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误编码。
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误编码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets taskInstances
    *  任务实例信息。
    *
    * @return object|null
    */
    public function getTaskInstances()
    {
        return $this->container['taskInstances'];
    }

    /**
    * Sets taskInstances
    *
    * @param object|null $taskInstances 任务实例信息。
    *
    * @return $this
    */
    public function setTaskInstances($taskInstances)
    {
        $this->container['taskInstances'] = $taskInstances;
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
    * Gets firstAlarmTime
    *  首次告警时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getFirstAlarmTime()
    {
        return $this->container['firstAlarmTime'];
    }

    /**
    * Sets firstAlarmTime
    *
    * @param int|null $firstAlarmTime 首次告警时间戳，单位毫秒。
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
    *  最后告警时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getLastAlarmTime()
    {
        return $this->container['lastAlarmTime'];
    }

    /**
    * Sets lastAlarmTime
    *
    * @param int|null $lastAlarmTime 最后告警时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setLastAlarmTime($lastAlarmTime)
    {
        $this->container['lastAlarmTime'] = $lastAlarmTime;
        return $this;
    }

    /**
    * Gets slaTime
    *  实例承诺时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getSlaTime()
    {
        return $this->container['slaTime'];
    }

    /**
    * Sets slaTime
    *
    * @param int|null $slaTime 实例承诺时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setSlaTime($slaTime)
    {
        $this->container['slaTime'] = $slaTime;
        return $this;
    }

    /**
    * Gets processTime
    *  处理时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getProcessTime()
    {
        return $this->container['processTime'];
    }

    /**
    * Sets processTime
    *
    * @param int|null $processTime 处理时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setProcessTime($processTime)
    {
        $this->container['processTime'] = $processTime;
        return $this;
    }

    /**
    * Gets recoverTime
    *  恢复时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getRecoverTime()
    {
        return $this->container['recoverTime'];
    }

    /**
    * Sets recoverTime
    *
    * @param int|null $recoverTime 恢复时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setRecoverTime($recoverTime)
    {
        $this->container['recoverTime'] = $recoverTime;
        return $this;
    }

    /**
    * Gets ignoreTime
    *  忽略时间戳，单位毫秒。
    *
    * @return int|null
    */
    public function getIgnoreTime()
    {
        return $this->container['ignoreTime'];
    }

    /**
    * Sets ignoreTime
    *
    * @param int|null $ignoreTime 忽略时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setIgnoreTime($ignoreTime)
    {
        $this->container['ignoreTime'] = $ignoreTime;
        return $this;
    }

    /**
    * Gets processBuffer
    *  处理时长，设置处理时间所需要的时间，设置后在该时间段内将暂停事件报警，事件的处理操作记录会被记录。
    *
    * @return int|null
    */
    public function getProcessBuffer()
    {
        return $this->container['processBuffer'];
    }

    /**
    * Sets processBuffer
    *
    * @param int|null $processBuffer 处理时长，设置处理时间所需要的时间，设置后在该时间段内将暂停事件报警，事件的处理操作记录会被记录。
    *
    * @return $this
    */
    public function setProcessBuffer($processBuffer)
    {
        $this->container['processBuffer'] = $processBuffer;
        return $this;
    }

    /**
    * Gets createDay
    *  创建时间的天数，表示一年的第几天。
    *
    * @return int|null
    */
    public function getCreateDay()
    {
        return $this->container['createDay'];
    }

    /**
    * Sets createDay
    *
    * @param int|null $createDay 创建时间的天数，表示一年的第几天。
    *
    * @return $this
    */
    public function setCreateDay($createDay)
    {
        $this->container['createDay'] = $createDay;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型。
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 实例类型。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets processUserId
    *  基线处理人用户ID。
    *
    * @return string|null
    */
    public function getProcessUserId()
    {
        return $this->container['processUserId'];
    }

    /**
    * Sets processUserId
    *
    * @param string|null $processUserId 基线处理人用户ID。
    *
    * @return $this
    */
    public function setProcessUserId($processUserId)
    {
        $this->container['processUserId'] = $processUserId;
        return $this;
    }

    /**
    * Gets processUserName
    *  基线处理人用户名称。
    *
    * @return string|null
    */
    public function getProcessUserName()
    {
        return $this->container['processUserName'];
    }

    /**
    * Sets processUserName
    *
    * @param string|null $processUserName 基线处理人用户名称。
    *
    * @return $this
    */
    public function setProcessUserName($processUserName)
    {
        $this->container['processUserName'] = $processUserName;
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

