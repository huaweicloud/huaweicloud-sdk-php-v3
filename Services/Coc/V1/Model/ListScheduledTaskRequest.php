<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduledTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduledTaskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目id
    * taskId  任务ID
    * taskName  任务名称
    * scheduledType  定时类型(ONCE,PERIODIC,CRON)
    * taskType  引用任务类型(SCRIPT,RUNBOOK)
    * associatedTaskType  任务类型(CUSTOMIZATION,COMMUNAL)
    * riskLevel  风险等级
    * createdBy  创建人
    * reviewer  审批人ID
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态(PENDING,REJECTED,PASSED)
    * lastExecutionStatus  最近执行状态(READY,PROCESSING,ABNORMAL,FINISHED,PAUSED,CANCELED)
    * lastExecutionStartTime  最近执行时间的查询开始时间
    * lastExecutionEndTime  最近执行时间的查询结束时间
    * marker  上一页数据的最后一条记录的id
    * regionId  区域
    * resourceId  资源ID
    * offset  分页指针
    * limit  每页数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'taskId' => 'string',
            'taskName' => 'string',
            'scheduledType' => 'string',
            'taskType' => 'string',
            'associatedTaskType' => 'string',
            'riskLevel' => 'string',
            'createdBy' => 'string',
            'reviewer' => 'string',
            'reviewerUserName' => 'string',
            'approveStatus' => 'string',
            'lastExecutionStatus' => 'string',
            'lastExecutionStartTime' => 'int',
            'lastExecutionEndTime' => 'int',
            'marker' => 'string',
            'regionId' => 'string',
            'resourceId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目id
    * taskId  任务ID
    * taskName  任务名称
    * scheduledType  定时类型(ONCE,PERIODIC,CRON)
    * taskType  引用任务类型(SCRIPT,RUNBOOK)
    * associatedTaskType  任务类型(CUSTOMIZATION,COMMUNAL)
    * riskLevel  风险等级
    * createdBy  创建人
    * reviewer  审批人ID
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态(PENDING,REJECTED,PASSED)
    * lastExecutionStatus  最近执行状态(READY,PROCESSING,ABNORMAL,FINISHED,PAUSED,CANCELED)
    * lastExecutionStartTime  最近执行时间的查询开始时间
    * lastExecutionEndTime  最近执行时间的查询结束时间
    * marker  上一页数据的最后一条记录的id
    * regionId  区域
    * resourceId  资源ID
    * offset  分页指针
    * limit  每页数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'taskId' => null,
        'taskName' => null,
        'scheduledType' => null,
        'taskType' => null,
        'associatedTaskType' => null,
        'riskLevel' => null,
        'createdBy' => null,
        'reviewer' => null,
        'reviewerUserName' => null,
        'approveStatus' => null,
        'lastExecutionStatus' => null,
        'lastExecutionStartTime' => 'int64',
        'lastExecutionEndTime' => 'int64',
        'marker' => null,
        'regionId' => null,
        'resourceId' => null,
        'offset' => null,
        'limit' => 'int32'
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
    * enterpriseProjectId  企业项目id
    * taskId  任务ID
    * taskName  任务名称
    * scheduledType  定时类型(ONCE,PERIODIC,CRON)
    * taskType  引用任务类型(SCRIPT,RUNBOOK)
    * associatedTaskType  任务类型(CUSTOMIZATION,COMMUNAL)
    * riskLevel  风险等级
    * createdBy  创建人
    * reviewer  审批人ID
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态(PENDING,REJECTED,PASSED)
    * lastExecutionStatus  最近执行状态(READY,PROCESSING,ABNORMAL,FINISHED,PAUSED,CANCELED)
    * lastExecutionStartTime  最近执行时间的查询开始时间
    * lastExecutionEndTime  最近执行时间的查询结束时间
    * marker  上一页数据的最后一条记录的id
    * regionId  区域
    * resourceId  资源ID
    * offset  分页指针
    * limit  每页数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'scheduledType' => 'scheduled_type',
            'taskType' => 'task_type',
            'associatedTaskType' => 'associated_task_type',
            'riskLevel' => 'risk_level',
            'createdBy' => 'created_by',
            'reviewer' => 'reviewer',
            'reviewerUserName' => 'reviewer_user_name',
            'approveStatus' => 'approve_status',
            'lastExecutionStatus' => 'last_execution_status',
            'lastExecutionStartTime' => 'last_execution_start_time',
            'lastExecutionEndTime' => 'last_execution_end_time',
            'marker' => 'marker',
            'regionId' => 'region_id',
            'resourceId' => 'resource_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  企业项目id
    * taskId  任务ID
    * taskName  任务名称
    * scheduledType  定时类型(ONCE,PERIODIC,CRON)
    * taskType  引用任务类型(SCRIPT,RUNBOOK)
    * associatedTaskType  任务类型(CUSTOMIZATION,COMMUNAL)
    * riskLevel  风险等级
    * createdBy  创建人
    * reviewer  审批人ID
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态(PENDING,REJECTED,PASSED)
    * lastExecutionStatus  最近执行状态(READY,PROCESSING,ABNORMAL,FINISHED,PAUSED,CANCELED)
    * lastExecutionStartTime  最近执行时间的查询开始时间
    * lastExecutionEndTime  最近执行时间的查询结束时间
    * marker  上一页数据的最后一条记录的id
    * regionId  区域
    * resourceId  资源ID
    * offset  分页指针
    * limit  每页数量
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'scheduledType' => 'setScheduledType',
            'taskType' => 'setTaskType',
            'associatedTaskType' => 'setAssociatedTaskType',
            'riskLevel' => 'setRiskLevel',
            'createdBy' => 'setCreatedBy',
            'reviewer' => 'setReviewer',
            'reviewerUserName' => 'setReviewerUserName',
            'approveStatus' => 'setApproveStatus',
            'lastExecutionStatus' => 'setLastExecutionStatus',
            'lastExecutionStartTime' => 'setLastExecutionStartTime',
            'lastExecutionEndTime' => 'setLastExecutionEndTime',
            'marker' => 'setMarker',
            'regionId' => 'setRegionId',
            'resourceId' => 'setResourceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  企业项目id
    * taskId  任务ID
    * taskName  任务名称
    * scheduledType  定时类型(ONCE,PERIODIC,CRON)
    * taskType  引用任务类型(SCRIPT,RUNBOOK)
    * associatedTaskType  任务类型(CUSTOMIZATION,COMMUNAL)
    * riskLevel  风险等级
    * createdBy  创建人
    * reviewer  审批人ID
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态(PENDING,REJECTED,PASSED)
    * lastExecutionStatus  最近执行状态(READY,PROCESSING,ABNORMAL,FINISHED,PAUSED,CANCELED)
    * lastExecutionStartTime  最近执行时间的查询开始时间
    * lastExecutionEndTime  最近执行时间的查询结束时间
    * marker  上一页数据的最后一条记录的id
    * regionId  区域
    * resourceId  资源ID
    * offset  分页指针
    * limit  每页数量
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'scheduledType' => 'getScheduledType',
            'taskType' => 'getTaskType',
            'associatedTaskType' => 'getAssociatedTaskType',
            'riskLevel' => 'getRiskLevel',
            'createdBy' => 'getCreatedBy',
            'reviewer' => 'getReviewer',
            'reviewerUserName' => 'getReviewerUserName',
            'approveStatus' => 'getApproveStatus',
            'lastExecutionStatus' => 'getLastExecutionStatus',
            'lastExecutionStartTime' => 'getLastExecutionStartTime',
            'lastExecutionEndTime' => 'getLastExecutionEndTime',
            'marker' => 'getMarker',
            'regionId' => 'getRegionId',
            'resourceId' => 'getResourceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const SCHEDULED_TYPE_ONCE = 'ONCE';
    const SCHEDULED_TYPE_PERIODIC = 'PERIODIC';
    const SCHEDULED_TYPE_CRON = 'CRON';
    const TASK_TYPE_SCRIPT = 'SCRIPT';
    const TASK_TYPE_RUNBOOK = 'RUNBOOK';
    const ASSOCIATED_TASK_TYPE_CUSTOMIZATION = 'CUSTOMIZATION';
    const ASSOCIATED_TASK_TYPE_COMMUNAL = 'COMMUNAL';
    const APPROVE_STATUS_PENDING = 'PENDING';
    const APPROVE_STATUS_REJECTED = 'REJECTED';
    const APPROVE_STATUS_PASSED = 'PASSED';
    const LAST_EXECUTION_STATUS_READY = 'READY';
    const LAST_EXECUTION_STATUS_PROCESSING = 'PROCESSING';
    const LAST_EXECUTION_STATUS_ABNORMAL = 'ABNORMAL';
    const LAST_EXECUTION_STATUS_FINISHED = 'FINISHED';
    const LAST_EXECUTION_STATUS_PAUSED = 'PAUSED';
    const LAST_EXECUTION_STATUS_CANCELED = 'CANCELED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScheduledTypeAllowableValues()
    {
        return [
            self::SCHEDULED_TYPE_ONCE,
            self::SCHEDULED_TYPE_PERIODIC,
            self::SCHEDULED_TYPE_CRON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_SCRIPT,
            self::TASK_TYPE_RUNBOOK,
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
            self::ASSOCIATED_TASK_TYPE_CUSTOMIZATION,
            self::ASSOCIATED_TASK_TYPE_COMMUNAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApproveStatusAllowableValues()
    {
        return [
            self::APPROVE_STATUS_PENDING,
            self::APPROVE_STATUS_REJECTED,
            self::APPROVE_STATUS_PASSED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLastExecutionStatusAllowableValues()
    {
        return [
            self::LAST_EXECUTION_STATUS_READY,
            self::LAST_EXECUTION_STATUS_PROCESSING,
            self::LAST_EXECUTION_STATUS_ABNORMAL,
            self::LAST_EXECUTION_STATUS_FINISHED,
            self::LAST_EXECUTION_STATUS_PAUSED,
            self::LAST_EXECUTION_STATUS_CANCELED,
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['scheduledType'] = isset($data['scheduledType']) ? $data['scheduledType'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['associatedTaskType'] = isset($data['associatedTaskType']) ? $data['associatedTaskType'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['reviewerUserName'] = isset($data['reviewerUserName']) ? $data['reviewerUserName'] : null;
        $this->container['approveStatus'] = isset($data['approveStatus']) ? $data['approveStatus'] : null;
        $this->container['lastExecutionStatus'] = isset($data['lastExecutionStatus']) ? $data['lastExecutionStatus'] : null;
        $this->container['lastExecutionStartTime'] = isset($data['lastExecutionStartTime']) ? $data['lastExecutionStartTime'] : null;
        $this->container['lastExecutionEndTime'] = isset($data['lastExecutionEndTime']) ? $data['lastExecutionEndTime'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getScheduledTypeAllowableValues();
                if (!is_null($this->container['scheduledType']) && !in_array($this->container['scheduledType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scheduledType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) > 32)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAssociatedTaskTypeAllowableValues();
                if (!is_null($this->container['associatedTaskType']) && !in_array($this->container['associatedTaskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'associatedTaskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['associatedTaskType']) && (mb_strlen($this->container['associatedTaskType']) > 32)) {
                $invalidProperties[] = "invalid value for 'associatedTaskType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['associatedTaskType']) && (mb_strlen($this->container['associatedTaskType']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskLevel']) && (mb_strlen($this->container['riskLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['riskLevel']) && (mb_strlen($this->container['riskLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'riskLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reviewer']) && (mb_strlen($this->container['reviewer']) > 128)) {
                $invalidProperties[] = "invalid value for 'reviewer', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['reviewer']) && (mb_strlen($this->container['reviewer']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewer', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reviewerUserName']) && (mb_strlen($this->container['reviewerUserName']) > 32)) {
                $invalidProperties[] = "invalid value for 'reviewerUserName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['reviewerUserName']) && (mb_strlen($this->container['reviewerUserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'reviewerUserName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getApproveStatusAllowableValues();
                if (!is_null($this->container['approveStatus']) && !in_array($this->container['approveStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'approveStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['approveStatus']) && (mb_strlen($this->container['approveStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'approveStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['approveStatus']) && (mb_strlen($this->container['approveStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'approveStatus', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getLastExecutionStatusAllowableValues();
                if (!is_null($this->container['lastExecutionStatus']) && !in_array($this->container['lastExecutionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lastExecutionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['lastExecutionStatus']) && (mb_strlen($this->container['lastExecutionStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'lastExecutionStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['lastExecutionStatus']) && (mb_strlen($this->container['lastExecutionStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastExecutionStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastExecutionStartTime']) && ($this->container['lastExecutionStartTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'lastExecutionStartTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['lastExecutionStartTime']) && ($this->container['lastExecutionStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastExecutionStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastExecutionEndTime']) && ($this->container['lastExecutionEndTime'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'lastExecutionEndTime', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['lastExecutionEndTime']) && ($this->container['lastExecutionEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastExecutionEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 128)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets taskId
    *  任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets scheduledType
    *  定时类型(ONCE,PERIODIC,CRON)
    *
    * @return string|null
    */
    public function getScheduledType()
    {
        return $this->container['scheduledType'];
    }

    /**
    * Sets scheduledType
    *
    * @param string|null $scheduledType 定时类型(ONCE,PERIODIC,CRON)
    *
    * @return $this
    */
    public function setScheduledType($scheduledType)
    {
        $this->container['scheduledType'] = $scheduledType;
        return $this;
    }

    /**
    * Gets taskType
    *  引用任务类型(SCRIPT,RUNBOOK)
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 引用任务类型(SCRIPT,RUNBOOK)
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets associatedTaskType
    *  任务类型(CUSTOMIZATION,COMMUNAL)
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
    * @param string|null $associatedTaskType 任务类型(CUSTOMIZATION,COMMUNAL)
    *
    * @return $this
    */
    public function setAssociatedTaskType($associatedTaskType)
    {
        $this->container['associatedTaskType'] = $associatedTaskType;
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
    * Gets createdBy
    *  创建人
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 创建人
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets reviewer
    *  审批人ID
    *
    * @return string|null
    */
    public function getReviewer()
    {
        return $this->container['reviewer'];
    }

    /**
    * Sets reviewer
    *
    * @param string|null $reviewer 审批人ID
    *
    * @return $this
    */
    public function setReviewer($reviewer)
    {
        $this->container['reviewer'] = $reviewer;
        return $this;
    }

    /**
    * Gets reviewerUserName
    *  审批人昵称
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
    * @param string|null $reviewerUserName 审批人昵称
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
    *  审批状态(PENDING,REJECTED,PASSED)
    *
    * @return string|null
    */
    public function getApproveStatus()
    {
        return $this->container['approveStatus'];
    }

    /**
    * Sets approveStatus
    *
    * @param string|null $approveStatus 审批状态(PENDING,REJECTED,PASSED)
    *
    * @return $this
    */
    public function setApproveStatus($approveStatus)
    {
        $this->container['approveStatus'] = $approveStatus;
        return $this;
    }

    /**
    * Gets lastExecutionStatus
    *  最近执行状态(READY,PROCESSING,ABNORMAL,FINISHED,PAUSED,CANCELED)
    *
    * @return string|null
    */
    public function getLastExecutionStatus()
    {
        return $this->container['lastExecutionStatus'];
    }

    /**
    * Sets lastExecutionStatus
    *
    * @param string|null $lastExecutionStatus 最近执行状态(READY,PROCESSING,ABNORMAL,FINISHED,PAUSED,CANCELED)
    *
    * @return $this
    */
    public function setLastExecutionStatus($lastExecutionStatus)
    {
        $this->container['lastExecutionStatus'] = $lastExecutionStatus;
        return $this;
    }

    /**
    * Gets lastExecutionStartTime
    *  最近执行时间的查询开始时间
    *
    * @return int|null
    */
    public function getLastExecutionStartTime()
    {
        return $this->container['lastExecutionStartTime'];
    }

    /**
    * Sets lastExecutionStartTime
    *
    * @param int|null $lastExecutionStartTime 最近执行时间的查询开始时间
    *
    * @return $this
    */
    public function setLastExecutionStartTime($lastExecutionStartTime)
    {
        $this->container['lastExecutionStartTime'] = $lastExecutionStartTime;
        return $this;
    }

    /**
    * Gets lastExecutionEndTime
    *  最近执行时间的查询结束时间
    *
    * @return int|null
    */
    public function getLastExecutionEndTime()
    {
        return $this->container['lastExecutionEndTime'];
    }

    /**
    * Sets lastExecutionEndTime
    *
    * @param int|null $lastExecutionEndTime 最近执行时间的查询结束时间
    *
    * @return $this
    */
    public function setLastExecutionEndTime($lastExecutionEndTime)
    {
        $this->container['lastExecutionEndTime'] = $lastExecutionEndTime;
        return $this;
    }

    /**
    * Gets marker
    *  上一页数据的最后一条记录的id
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页数据的最后一条记录的id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets regionId
    *  区域
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets offset
    *  分页指针
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页指针
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

