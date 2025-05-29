<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateScheduledTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateScheduledTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * agencyName  委托名称
    * triggerTime  triggerTime
    * versionNo  版本号
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskType  关联任务的类型
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * createdUserName  创建人昵称
    * reviewerUserName  审核人昵称
    * approveStatus  审批状态
    * approveComments  审批意见
    * targetInstances  目标节点json串
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'enterpriseProjectId' => 'string',
            'name' => 'string',
            'agencyName' => 'string',
            'triggerTime' => '\HuaweiCloud\SDK\Coc\V1\Model\TriggerTime',
            'versionNo' => 'string',
            'taskType' => 'object',
            'associatedTaskId' => 'string',
            'associatedTaskName' => 'string',
            'associatedTaskNameEn' => 'string',
            'associatedTaskType' => 'string',
            'runbookInstanceMode' => 'string',
            'riskLevel' => 'string',
            'inputParam' => 'string',
            'enableApprove' => 'bool',
            'reviewerNotification' => '\HuaweiCloud\SDK\Coc\V1\Model\MessageNotification',
            'createdUserName' => 'string',
            'reviewerUserName' => 'string',
            'approveStatus' => 'object',
            'approveComments' => 'string',
            'targetInstances' => 'string',
            'enableMessageNotification' => 'bool',
            'messageNotification' => '\HuaweiCloud\SDK\Coc\V1\Model\MessageNotification'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * agencyName  委托名称
    * triggerTime  triggerTime
    * versionNo  版本号
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskType  关联任务的类型
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * createdUserName  创建人昵称
    * reviewerUserName  审核人昵称
    * approveStatus  审批状态
    * approveComments  审批意见
    * targetInstances  目标节点json串
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'enterpriseProjectId' => null,
        'name' => null,
        'agencyName' => null,
        'triggerTime' => null,
        'versionNo' => null,
        'taskType' => null,
        'associatedTaskId' => null,
        'associatedTaskName' => null,
        'associatedTaskNameEn' => null,
        'associatedTaskType' => null,
        'runbookInstanceMode' => null,
        'riskLevel' => null,
        'inputParam' => null,
        'enableApprove' => null,
        'reviewerNotification' => null,
        'createdUserName' => null,
        'reviewerUserName' => null,
        'approveStatus' => null,
        'approveComments' => null,
        'targetInstances' => null,
        'enableMessageNotification' => null,
        'messageNotification' => null
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
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * agencyName  委托名称
    * triggerTime  triggerTime
    * versionNo  版本号
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskType  关联任务的类型
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * createdUserName  创建人昵称
    * reviewerUserName  审核人昵称
    * approveStatus  审批状态
    * approveComments  审批意见
    * targetInstances  目标节点json串
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'name' => 'name',
            'agencyName' => 'agency_name',
            'triggerTime' => 'trigger_time',
            'versionNo' => 'version_no',
            'taskType' => 'task_type',
            'associatedTaskId' => 'associated_task_id',
            'associatedTaskName' => 'associated_task_name',
            'associatedTaskNameEn' => 'associated_task_name_en',
            'associatedTaskType' => 'associated_task_type',
            'runbookInstanceMode' => 'runbook_instance_mode',
            'riskLevel' => 'risk_level',
            'inputParam' => 'input_param',
            'enableApprove' => 'enable_approve',
            'reviewerNotification' => 'reviewer_notification',
            'createdUserName' => 'created_user_name',
            'reviewerUserName' => 'reviewer_user_name',
            'approveStatus' => 'approve_status',
            'approveComments' => 'approve_comments',
            'targetInstances' => 'target_instances',
            'enableMessageNotification' => 'enable_message_notification',
            'messageNotification' => 'message_notification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * agencyName  委托名称
    * triggerTime  triggerTime
    * versionNo  版本号
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskType  关联任务的类型
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * createdUserName  创建人昵称
    * reviewerUserName  审核人昵称
    * approveStatus  审批状态
    * approveComments  审批意见
    * targetInstances  目标节点json串
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'name' => 'setName',
            'agencyName' => 'setAgencyName',
            'triggerTime' => 'setTriggerTime',
            'versionNo' => 'setVersionNo',
            'taskType' => 'setTaskType',
            'associatedTaskId' => 'setAssociatedTaskId',
            'associatedTaskName' => 'setAssociatedTaskName',
            'associatedTaskNameEn' => 'setAssociatedTaskNameEn',
            'associatedTaskType' => 'setAssociatedTaskType',
            'runbookInstanceMode' => 'setRunbookInstanceMode',
            'riskLevel' => 'setRiskLevel',
            'inputParam' => 'setInputParam',
            'enableApprove' => 'setEnableApprove',
            'reviewerNotification' => 'setReviewerNotification',
            'createdUserName' => 'setCreatedUserName',
            'reviewerUserName' => 'setReviewerUserName',
            'approveStatus' => 'setApproveStatus',
            'approveComments' => 'setApproveComments',
            'targetInstances' => 'setTargetInstances',
            'enableMessageNotification' => 'setEnableMessageNotification',
            'messageNotification' => 'setMessageNotification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * agencyName  委托名称
    * triggerTime  triggerTime
    * versionNo  版本号
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskType  关联任务的类型
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * createdUserName  创建人昵称
    * reviewerUserName  审核人昵称
    * approveStatus  审批状态
    * approveComments  审批意见
    * targetInstances  目标节点json串
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'name' => 'getName',
            'agencyName' => 'getAgencyName',
            'triggerTime' => 'getTriggerTime',
            'versionNo' => 'getVersionNo',
            'taskType' => 'getTaskType',
            'associatedTaskId' => 'getAssociatedTaskId',
            'associatedTaskName' => 'getAssociatedTaskName',
            'associatedTaskNameEn' => 'getAssociatedTaskNameEn',
            'associatedTaskType' => 'getAssociatedTaskType',
            'runbookInstanceMode' => 'getRunbookInstanceMode',
            'riskLevel' => 'getRiskLevel',
            'inputParam' => 'getInputParam',
            'enableApprove' => 'getEnableApprove',
            'reviewerNotification' => 'getReviewerNotification',
            'createdUserName' => 'getCreatedUserName',
            'reviewerUserName' => 'getReviewerUserName',
            'approveStatus' => 'getApproveStatus',
            'approveComments' => 'getApproveComments',
            'targetInstances' => 'getTargetInstances',
            'enableMessageNotification' => 'getEnableMessageNotification',
            'messageNotification' => 'getMessageNotification'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['triggerTime'] = isset($data['triggerTime']) ? $data['triggerTime'] : null;
        $this->container['versionNo'] = isset($data['versionNo']) ? $data['versionNo'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['associatedTaskId'] = isset($data['associatedTaskId']) ? $data['associatedTaskId'] : null;
        $this->container['associatedTaskName'] = isset($data['associatedTaskName']) ? $data['associatedTaskName'] : null;
        $this->container['associatedTaskNameEn'] = isset($data['associatedTaskNameEn']) ? $data['associatedTaskNameEn'] : null;
        $this->container['associatedTaskType'] = isset($data['associatedTaskType']) ? $data['associatedTaskType'] : null;
        $this->container['runbookInstanceMode'] = isset($data['runbookInstanceMode']) ? $data['runbookInstanceMode'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['inputParam'] = isset($data['inputParam']) ? $data['inputParam'] : null;
        $this->container['enableApprove'] = isset($data['enableApprove']) ? $data['enableApprove'] : null;
        $this->container['reviewerNotification'] = isset($data['reviewerNotification']) ? $data['reviewerNotification'] : null;
        $this->container['createdUserName'] = isset($data['createdUserName']) ? $data['createdUserName'] : null;
        $this->container['reviewerUserName'] = isset($data['reviewerUserName']) ? $data['reviewerUserName'] : null;
        $this->container['approveStatus'] = isset($data['approveStatus']) ? $data['approveStatus'] : null;
        $this->container['approveComments'] = isset($data['approveComments']) ? $data['approveComments'] : null;
        $this->container['targetInstances'] = isset($data['targetInstances']) ? $data['targetInstances'] : null;
        $this->container['enableMessageNotification'] = isset($data['enableMessageNotification']) ? $data['enableMessageNotification'] : null;
        $this->container['messageNotification'] = isset($data['messageNotification']) ? $data['messageNotification'] : null;
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
    *  任务ID
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
    * @param string|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets name
    *  任务名称
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
    * @param string|null $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets triggerTime
    *  triggerTime
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\TriggerTime|null
    */
    public function getTriggerTime()
    {
        return $this->container['triggerTime'];
    }

    /**
    * Sets triggerTime
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\TriggerTime|null $triggerTime triggerTime
    *
    * @return $this
    */
    public function setTriggerTime($triggerTime)
    {
        $this->container['triggerTime'] = $triggerTime;
        return $this;
    }

    /**
    * Gets versionNo
    *  版本号
    *
    * @return string|null
    */
    public function getVersionNo()
    {
        return $this->container['versionNo'];
    }

    /**
    * Sets versionNo
    *
    * @param string|null $versionNo 版本号
    *
    * @return $this
    */
    public function setVersionNo($versionNo)
    {
        $this->container['versionNo'] = $versionNo;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型
    *
    * @return object|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param object|null $taskType 任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets associatedTaskId
    *  关联任务ID（脚本ID/作业ID）
    *
    * @return string|null
    */
    public function getAssociatedTaskId()
    {
        return $this->container['associatedTaskId'];
    }

    /**
    * Sets associatedTaskId
    *
    * @param string|null $associatedTaskId 关联任务ID（脚本ID/作业ID）
    *
    * @return $this
    */
    public function setAssociatedTaskId($associatedTaskId)
    {
        $this->container['associatedTaskId'] = $associatedTaskId;
        return $this;
    }

    /**
    * Gets associatedTaskName
    *  关联任务名称（脚本名称/作业名称）
    *
    * @return string|null
    */
    public function getAssociatedTaskName()
    {
        return $this->container['associatedTaskName'];
    }

    /**
    * Sets associatedTaskName
    *
    * @param string|null $associatedTaskName 关联任务名称（脚本名称/作业名称）
    *
    * @return $this
    */
    public function setAssociatedTaskName($associatedTaskName)
    {
        $this->container['associatedTaskName'] = $associatedTaskName;
        return $this;
    }

    /**
    * Gets associatedTaskNameEn
    *  关联任务名称(英文)（脚本名称/作业名称）
    *
    * @return string|null
    */
    public function getAssociatedTaskNameEn()
    {
        return $this->container['associatedTaskNameEn'];
    }

    /**
    * Sets associatedTaskNameEn
    *
    * @param string|null $associatedTaskNameEn 关联任务名称(英文)（脚本名称/作业名称）
    *
    * @return $this
    */
    public function setAssociatedTaskNameEn($associatedTaskNameEn)
    {
        $this->container['associatedTaskNameEn'] = $associatedTaskNameEn;
        return $this;
    }

    /**
    * Gets associatedTaskType
    *  关联任务的类型
    *
    * @return string|null
    */
    public function getAssociatedTaskType()
    {
        return $this->container['associatedTaskType'];
    }

    /**
    * Sets associatedTaskType
    *
    * @param string|null $associatedTaskType 关联任务的类型
    *
    * @return $this
    */
    public function setAssociatedTaskType($associatedTaskType)
    {
        $this->container['associatedTaskType'] = $associatedTaskType;
        return $this;
    }

    /**
    * Gets runbookInstanceMode
    *  作业实例模式
    *
    * @return string|null
    */
    public function getRunbookInstanceMode()
    {
        return $this->container['runbookInstanceMode'];
    }

    /**
    * Sets runbookInstanceMode
    *
    * @param string|null $runbookInstanceMode 作业实例模式
    *
    * @return $this
    */
    public function setRunbookInstanceMode($runbookInstanceMode)
    {
        $this->container['runbookInstanceMode'] = $runbookInstanceMode;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险等级
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel 风险等级
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets inputParam
    *  执行参数，值为json串
    *
    * @return string|null
    */
    public function getInputParam()
    {
        return $this->container['inputParam'];
    }

    /**
    * Sets inputParam
    *
    * @param string|null $inputParam 执行参数，值为json串
    *
    * @return $this
    */
    public function setInputParam($inputParam)
    {
        $this->container['inputParam'] = $inputParam;
        return $this;
    }

    /**
    * Gets enableApprove
    *  是否开启入库人工审核
    *
    * @return bool|null
    */
    public function getEnableApprove()
    {
        return $this->container['enableApprove'];
    }

    /**
    * Sets enableApprove
    *
    * @param bool|null $enableApprove 是否开启入库人工审核
    *
    * @return $this
    */
    public function setEnableApprove($enableApprove)
    {
        $this->container['enableApprove'] = $enableApprove;
        return $this;
    }

    /**
    * Gets reviewerNotification
    *  reviewerNotification
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\MessageNotification|null
    */
    public function getReviewerNotification()
    {
        return $this->container['reviewerNotification'];
    }

    /**
    * Sets reviewerNotification
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\MessageNotification|null $reviewerNotification reviewerNotification
    *
    * @return $this
    */
    public function setReviewerNotification($reviewerNotification)
    {
        $this->container['reviewerNotification'] = $reviewerNotification;
        return $this;
    }

    /**
    * Gets createdUserName
    *  创建人昵称
    *
    * @return string|null
    */
    public function getCreatedUserName()
    {
        return $this->container['createdUserName'];
    }

    /**
    * Sets createdUserName
    *
    * @param string|null $createdUserName 创建人昵称
    *
    * @return $this
    */
    public function setCreatedUserName($createdUserName)
    {
        $this->container['createdUserName'] = $createdUserName;
        return $this;
    }

    /**
    * Gets reviewerUserName
    *  审核人昵称
    *
    * @return string|null
    */
    public function getReviewerUserName()
    {
        return $this->container['reviewerUserName'];
    }

    /**
    * Sets reviewerUserName
    *
    * @param string|null $reviewerUserName 审核人昵称
    *
    * @return $this
    */
    public function setReviewerUserName($reviewerUserName)
    {
        $this->container['reviewerUserName'] = $reviewerUserName;
        return $this;
    }

    /**
    * Gets approveStatus
    *  审批状态
    *
    * @return object|null
    */
    public function getApproveStatus()
    {
        return $this->container['approveStatus'];
    }

    /**
    * Sets approveStatus
    *
    * @param object|null $approveStatus 审批状态
    *
    * @return $this
    */
    public function setApproveStatus($approveStatus)
    {
        $this->container['approveStatus'] = $approveStatus;
        return $this;
    }

    /**
    * Gets approveComments
    *  审批意见
    *
    * @return string|null
    */
    public function getApproveComments()
    {
        return $this->container['approveComments'];
    }

    /**
    * Sets approveComments
    *
    * @param string|null $approveComments 审批意见
    *
    * @return $this
    */
    public function setApproveComments($approveComments)
    {
        $this->container['approveComments'] = $approveComments;
        return $this;
    }

    /**
    * Gets targetInstances
    *  目标节点json串
    *
    * @return string|null
    */
    public function getTargetInstances()
    {
        return $this->container['targetInstances'];
    }

    /**
    * Sets targetInstances
    *
    * @param string|null $targetInstances 目标节点json串
    *
    * @return $this
    */
    public function setTargetInstances($targetInstances)
    {
        $this->container['targetInstances'] = $targetInstances;
        return $this;
    }

    /**
    * Gets enableMessageNotification
    *  是否启用消息通知
    *
    * @return bool|null
    */
    public function getEnableMessageNotification()
    {
        return $this->container['enableMessageNotification'];
    }

    /**
    * Sets enableMessageNotification
    *
    * @param bool|null $enableMessageNotification 是否启用消息通知
    *
    * @return $this
    */
    public function setEnableMessageNotification($enableMessageNotification)
    {
        $this->container['enableMessageNotification'] = $enableMessageNotification;
        return $this;
    }

    /**
    * Gets messageNotification
    *  messageNotification
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\MessageNotification|null
    */
    public function getMessageNotification()
    {
        return $this->container['messageNotification'];
    }

    /**
    * Sets messageNotification
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\MessageNotification|null $messageNotification messageNotification
    *
    * @return $this
    */
    public function setMessageNotification($messageNotification)
    {
        $this->container['messageNotification'] = $messageNotification;
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

