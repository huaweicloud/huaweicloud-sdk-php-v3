<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduledTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduledTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketInfos  选择的四号提权单信息
    * name  任务名称
    * enterpriseProjectId  企业项目id
    * agencyName  委托名称
    * versionNo  版本号
    * triggerTime  triggerTime
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  关联任务的企业项目ID
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * reviewerUserName  审核人昵称
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketInfos' => '\HuaweiCloud\SDK\Coc\V1\Model\TicketInfo[]',
            'name' => 'string',
            'enterpriseProjectId' => 'string',
            'agencyName' => 'string',
            'versionNo' => 'string',
            'triggerTime' => '\HuaweiCloud\SDK\Coc\V1\Model\TriggerTime',
            'taskType' => 'string',
            'associatedTaskId' => 'string',
            'associatedTaskType' => 'string',
            'associatedTaskName' => 'string',
            'associatedTaskNameEn' => 'string',
            'associatedTaskEnterpriseProjectId' => 'string',
            'runbookInstanceMode' => 'string',
            'riskLevel' => 'string',
            'inputParam' => 'map[string,string]',
            'targetInstances' => '\HuaweiCloud\SDK\Coc\V1\Model\ScheduleInstance[]',
            'enableApprove' => 'bool',
            'reviewerNotification' => '\HuaweiCloud\SDK\Coc\V1\Model\MessageNotification',
            'reviewerUserName' => 'string',
            'enableMessageNotification' => 'bool',
            'messageNotification' => '\HuaweiCloud\SDK\Coc\V1\Model\MessageNotification'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketInfos  选择的四号提权单信息
    * name  任务名称
    * enterpriseProjectId  企业项目id
    * agencyName  委托名称
    * versionNo  版本号
    * triggerTime  triggerTime
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  关联任务的企业项目ID
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * reviewerUserName  审核人昵称
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketInfos' => null,
        'name' => null,
        'enterpriseProjectId' => null,
        'agencyName' => null,
        'versionNo' => null,
        'triggerTime' => null,
        'taskType' => null,
        'associatedTaskId' => null,
        'associatedTaskType' => null,
        'associatedTaskName' => null,
        'associatedTaskNameEn' => null,
        'associatedTaskEnterpriseProjectId' => null,
        'runbookInstanceMode' => null,
        'riskLevel' => null,
        'inputParam' => null,
        'targetInstances' => null,
        'enableApprove' => null,
        'reviewerNotification' => null,
        'reviewerUserName' => null,
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
    * ticketInfos  选择的四号提权单信息
    * name  任务名称
    * enterpriseProjectId  企业项目id
    * agencyName  委托名称
    * versionNo  版本号
    * triggerTime  triggerTime
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  关联任务的企业项目ID
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * reviewerUserName  审核人昵称
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketInfos' => 'ticket_infos',
            'name' => 'name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'agencyName' => 'agency_name',
            'versionNo' => 'version_no',
            'triggerTime' => 'trigger_time',
            'taskType' => 'task_type',
            'associatedTaskId' => 'associated_task_id',
            'associatedTaskType' => 'associated_task_type',
            'associatedTaskName' => 'associated_task_name',
            'associatedTaskNameEn' => 'associated_task_name_en',
            'associatedTaskEnterpriseProjectId' => 'associated_task_enterprise_project_id',
            'runbookInstanceMode' => 'runbook_instance_mode',
            'riskLevel' => 'risk_level',
            'inputParam' => 'input_param',
            'targetInstances' => 'target_instances',
            'enableApprove' => 'enable_approve',
            'reviewerNotification' => 'reviewer_notification',
            'reviewerUserName' => 'reviewer_user_name',
            'enableMessageNotification' => 'enable_message_notification',
            'messageNotification' => 'message_notification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketInfos  选择的四号提权单信息
    * name  任务名称
    * enterpriseProjectId  企业项目id
    * agencyName  委托名称
    * versionNo  版本号
    * triggerTime  triggerTime
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  关联任务的企业项目ID
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * reviewerUserName  审核人昵称
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketInfos' => 'setTicketInfos',
            'name' => 'setName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'agencyName' => 'setAgencyName',
            'versionNo' => 'setVersionNo',
            'triggerTime' => 'setTriggerTime',
            'taskType' => 'setTaskType',
            'associatedTaskId' => 'setAssociatedTaskId',
            'associatedTaskType' => 'setAssociatedTaskType',
            'associatedTaskName' => 'setAssociatedTaskName',
            'associatedTaskNameEn' => 'setAssociatedTaskNameEn',
            'associatedTaskEnterpriseProjectId' => 'setAssociatedTaskEnterpriseProjectId',
            'runbookInstanceMode' => 'setRunbookInstanceMode',
            'riskLevel' => 'setRiskLevel',
            'inputParam' => 'setInputParam',
            'targetInstances' => 'setTargetInstances',
            'enableApprove' => 'setEnableApprove',
            'reviewerNotification' => 'setReviewerNotification',
            'reviewerUserName' => 'setReviewerUserName',
            'enableMessageNotification' => 'setEnableMessageNotification',
            'messageNotification' => 'setMessageNotification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketInfos  选择的四号提权单信息
    * name  任务名称
    * enterpriseProjectId  企业项目id
    * agencyName  委托名称
    * versionNo  版本号
    * triggerTime  triggerTime
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskNameEn  关联任务名称(英文)（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  关联任务的企业项目ID
    * runbookInstanceMode  作业实例模式
    * riskLevel  风险等级
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * enableApprove  是否开启入库人工审核
    * reviewerNotification  reviewerNotification
    * reviewerUserName  审核人昵称
    * enableMessageNotification  是否启用消息通知
    * messageNotification  messageNotification
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketInfos' => 'getTicketInfos',
            'name' => 'getName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'agencyName' => 'getAgencyName',
            'versionNo' => 'getVersionNo',
            'triggerTime' => 'getTriggerTime',
            'taskType' => 'getTaskType',
            'associatedTaskId' => 'getAssociatedTaskId',
            'associatedTaskType' => 'getAssociatedTaskType',
            'associatedTaskName' => 'getAssociatedTaskName',
            'associatedTaskNameEn' => 'getAssociatedTaskNameEn',
            'associatedTaskEnterpriseProjectId' => 'getAssociatedTaskEnterpriseProjectId',
            'runbookInstanceMode' => 'getRunbookInstanceMode',
            'riskLevel' => 'getRiskLevel',
            'inputParam' => 'getInputParam',
            'targetInstances' => 'getTargetInstances',
            'enableApprove' => 'getEnableApprove',
            'reviewerNotification' => 'getReviewerNotification',
            'reviewerUserName' => 'getReviewerUserName',
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
    const TASK_TYPE_RUNBOOK = 'RUNBOOK';
    const TASK_TYPE_SCRIPT = 'SCRIPT';
    const ASSOCIATED_TASK_TYPE_COMMUNAL = 'COMMUNAL';
    const ASSOCIATED_TASK_TYPE_CUSTOMIZATION = 'CUSTOMIZATION';
    const RUNBOOK_INSTANCE_MODE_SAME = 'SAME';
    const RUNBOOK_INSTANCE_MODE_DIFF = 'DIFF';
    const RISK_LEVEL_HIGH = 'HIGH';
    const RISK_LEVEL_MEDIUM = 'MEDIUM';
    const RISK_LEVEL_LOW = 'LOW';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_RUNBOOK,
            self::TASK_TYPE_SCRIPT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssociatedTaskTypeAllowableValues()
    {
        return [
            self::ASSOCIATED_TASK_TYPE_COMMUNAL,
            self::ASSOCIATED_TASK_TYPE_CUSTOMIZATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRunbookInstanceModeAllowableValues()
    {
        return [
            self::RUNBOOK_INSTANCE_MODE_SAME,
            self::RUNBOOK_INSTANCE_MODE_DIFF,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRiskLevelAllowableValues()
    {
        return [
            self::RISK_LEVEL_HIGH,
            self::RISK_LEVEL_MEDIUM,
            self::RISK_LEVEL_LOW,
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
        $this->container['ticketInfos'] = isset($data['ticketInfos']) ? $data['ticketInfos'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['versionNo'] = isset($data['versionNo']) ? $data['versionNo'] : null;
        $this->container['triggerTime'] = isset($data['triggerTime']) ? $data['triggerTime'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['associatedTaskId'] = isset($data['associatedTaskId']) ? $data['associatedTaskId'] : null;
        $this->container['associatedTaskType'] = isset($data['associatedTaskType']) ? $data['associatedTaskType'] : null;
        $this->container['associatedTaskName'] = isset($data['associatedTaskName']) ? $data['associatedTaskName'] : null;
        $this->container['associatedTaskNameEn'] = isset($data['associatedTaskNameEn']) ? $data['associatedTaskNameEn'] : null;
        $this->container['associatedTaskEnterpriseProjectId'] = isset($data['associatedTaskEnterpriseProjectId']) ? $data['associatedTaskEnterpriseProjectId'] : null;
        $this->container['runbookInstanceMode'] = isset($data['runbookInstanceMode']) ? $data['runbookInstanceMode'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['inputParam'] = isset($data['inputParam']) ? $data['inputParam'] : null;
        $this->container['targetInstances'] = isset($data['targetInstances']) ? $data['targetInstances'] : null;
        $this->container['enableApprove'] = isset($data['enableApprove']) ? $data['enableApprove'] : null;
        $this->container['reviewerNotification'] = isset($data['reviewerNotification']) ? $data['reviewerNotification'] : null;
        $this->container['reviewerUserName'] = isset($data['reviewerUserName']) ? $data['reviewerUserName'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['versionNo'] === null) {
            $invalidProperties[] = "'versionNo' can't be null";
        }
            if ((mb_strlen($this->container['versionNo']) > 32)) {
                $invalidProperties[] = "invalid value for 'versionNo', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['versionNo']) < 1)) {
                $invalidProperties[] = "invalid value for 'versionNo', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['triggerTime'] === null) {
            $invalidProperties[] = "'triggerTime' can't be null";
        }
        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['taskType']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['taskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['associatedTaskId'] === null) {
            $invalidProperties[] = "'associatedTaskId' can't be null";
        }
            if ((mb_strlen($this->container['associatedTaskId']) > 256)) {
                $invalidProperties[] = "invalid value for 'associatedTaskId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['associatedTaskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['associatedTaskType'] === null) {
            $invalidProperties[] = "'associatedTaskType' can't be null";
        }
            $allowedValues = $this->getAssociatedTaskTypeAllowableValues();
                if (!is_null($this->container['associatedTaskType']) && !in_array($this->container['associatedTaskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'associatedTaskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['associatedTaskType']) > 32)) {
                $invalidProperties[] = "invalid value for 'associatedTaskType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['associatedTaskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'associatedTaskType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['associatedTaskName'] === null) {
            $invalidProperties[] = "'associatedTaskName' can't be null";
        }
            if ((mb_strlen($this->container['associatedTaskName']) > 256)) {
                $invalidProperties[] = "invalid value for 'associatedTaskName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['associatedTaskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedTaskNameEn']) && (mb_strlen($this->container['associatedTaskNameEn']) > 256)) {
                $invalidProperties[] = "invalid value for 'associatedTaskNameEn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['associatedTaskNameEn']) && (mb_strlen($this->container['associatedTaskNameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskNameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedTaskEnterpriseProjectId']) && (mb_strlen($this->container['associatedTaskEnterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'associatedTaskEnterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['associatedTaskEnterpriseProjectId']) && (mb_strlen($this->container['associatedTaskEnterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskEnterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getRunbookInstanceModeAllowableValues();
                if (!is_null($this->container['runbookInstanceMode']) && !in_array($this->container['runbookInstanceMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runbookInstanceMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['runbookInstanceMode']) && (mb_strlen($this->container['runbookInstanceMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'runbookInstanceMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['runbookInstanceMode']) && (mb_strlen($this->container['runbookInstanceMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'runbookInstanceMode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
        }
            $allowedValues = $this->getRiskLevelAllowableValues();
                if (!is_null($this->container['riskLevel']) && !in_array($this->container['riskLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'riskLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['riskLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['riskLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['inputParam'] === null) {
            $invalidProperties[] = "'inputParam' can't be null";
        }
        if ($this->container['targetInstances'] === null) {
            $invalidProperties[] = "'targetInstances' can't be null";
        }
        if ($this->container['enableApprove'] === null) {
            $invalidProperties[] = "'enableApprove' can't be null";
        }
            if (!is_null($this->container['reviewerUserName']) && (mb_strlen($this->container['reviewerUserName']) > 3200)) {
                $invalidProperties[] = "invalid value for 'reviewerUserName', the character length must be smaller than or equal to 3200.";
            }
            if (!is_null($this->container['reviewerUserName']) && (mb_strlen($this->container['reviewerUserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewerUserName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['enableMessageNotification'] === null) {
            $invalidProperties[] = "'enableMessageNotification' can't be null";
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
    * Gets ticketInfos
    *  选择的四号提权单信息
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\TicketInfo[]|null
    */
    public function getTicketInfos()
    {
        return $this->container['ticketInfos'];
    }

    /**
    * Sets ticketInfos
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\TicketInfo[]|null $ticketInfos 选择的四号提权单信息
    *
    * @return $this
    */
    public function setTicketInfos($ticketInfos)
    {
        $this->container['ticketInfos'] = $ticketInfos;
        return $this;
    }

    /**
    * Gets name
    *  任务名称
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
    * @param string $name 任务名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets versionNo
    *  版本号
    *
    * @return string
    */
    public function getVersionNo()
    {
        return $this->container['versionNo'];
    }

    /**
    * Sets versionNo
    *
    * @param string $versionNo 版本号
    *
    * @return $this
    */
    public function setVersionNo($versionNo)
    {
        $this->container['versionNo'] = $versionNo;
        return $this;
    }

    /**
    * Gets triggerTime
    *  triggerTime
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\TriggerTime
    */
    public function getTriggerTime()
    {
        return $this->container['triggerTime'];
    }

    /**
    * Sets triggerTime
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\TriggerTime $triggerTime triggerTime
    *
    * @return $this
    */
    public function setTriggerTime($triggerTime)
    {
        $this->container['triggerTime'] = $triggerTime;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType 任务类型
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
    * @return string
    */
    public function getAssociatedTaskId()
    {
        return $this->container['associatedTaskId'];
    }

    /**
    * Sets associatedTaskId
    *
    * @param string $associatedTaskId 关联任务ID（脚本ID/作业ID）
    *
    * @return $this
    */
    public function setAssociatedTaskId($associatedTaskId)
    {
        $this->container['associatedTaskId'] = $associatedTaskId;
        return $this;
    }

    /**
    * Gets associatedTaskType
    *  关联任务的类型
    *
    * @return string
    */
    public function getAssociatedTaskType()
    {
        return $this->container['associatedTaskType'];
    }

    /**
    * Sets associatedTaskType
    *
    * @param string $associatedTaskType 关联任务的类型
    *
    * @return $this
    */
    public function setAssociatedTaskType($associatedTaskType)
    {
        $this->container['associatedTaskType'] = $associatedTaskType;
        return $this;
    }

    /**
    * Gets associatedTaskName
    *  关联任务名称（脚本名称/作业名称）
    *
    * @return string
    */
    public function getAssociatedTaskName()
    {
        return $this->container['associatedTaskName'];
    }

    /**
    * Sets associatedTaskName
    *
    * @param string $associatedTaskName 关联任务名称（脚本名称/作业名称）
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
    * Gets associatedTaskEnterpriseProjectId
    *  关联任务的企业项目ID
    *
    * @return string|null
    */
    public function getAssociatedTaskEnterpriseProjectId()
    {
        return $this->container['associatedTaskEnterpriseProjectId'];
    }

    /**
    * Sets associatedTaskEnterpriseProjectId
    *
    * @param string|null $associatedTaskEnterpriseProjectId 关联任务的企业项目ID
    *
    * @return $this
    */
    public function setAssociatedTaskEnterpriseProjectId($associatedTaskEnterpriseProjectId)
    {
        $this->container['associatedTaskEnterpriseProjectId'] = $associatedTaskEnterpriseProjectId;
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
    * @return string
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string $riskLevel 风险等级
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
    * @return map[string,string]
    */
    public function getInputParam()
    {
        return $this->container['inputParam'];
    }

    /**
    * Sets inputParam
    *
    * @param map[string,string] $inputParam 执行参数，值为json串
    *
    * @return $this
    */
    public function setInputParam($inputParam)
    {
        $this->container['inputParam'] = $inputParam;
        return $this;
    }

    /**
    * Gets targetInstances
    *  目标实例信息
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScheduleInstance[]
    */
    public function getTargetInstances()
    {
        return $this->container['targetInstances'];
    }

    /**
    * Sets targetInstances
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScheduleInstance[] $targetInstances 目标实例信息
    *
    * @return $this
    */
    public function setTargetInstances($targetInstances)
    {
        $this->container['targetInstances'] = $targetInstances;
        return $this;
    }

    /**
    * Gets enableApprove
    *  是否开启入库人工审核
    *
    * @return bool
    */
    public function getEnableApprove()
    {
        return $this->container['enableApprove'];
    }

    /**
    * Sets enableApprove
    *
    * @param bool $enableApprove 是否开启入库人工审核
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
    * Gets enableMessageNotification
    *  是否启用消息通知
    *
    * @return bool
    */
    public function getEnableMessageNotification()
    {
        return $this->container['enableMessageNotification'];
    }

    /**
    * Sets enableMessageNotification
    *
    * @param bool $enableMessageNotification 是否启用消息通知
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

