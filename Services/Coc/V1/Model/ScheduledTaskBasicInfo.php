<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduledTaskBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduledTaskBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * scheduledType  定时类型
    * taskType  引用任务类型
    * associatedTaskType  关联的任务类型
    * riskLevel  风险等级
    * createdBy  创建人
    * updateBy  修改人
    * createdUserName  创建人昵称
    * reviewer  审批人
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态
    * lastExecutionTime  最近执行时间时间戳
    * lastExecutionStatus  最近执行状态
    * executionCount  执行次数
    * enabled  是否启用
    * createdTime  创建时间
    * modifiedTime  更新时间
    * regionId  区域
    * associatedTaskName  脚本/作业名称
    * associatedTaskNameEn  脚本/作业名称(英文)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'enterpriseProjectId' => 'string',
            'name' => 'string',
            'scheduledType' => 'string',
            'taskType' => 'string',
            'associatedTaskType' => 'string',
            'riskLevel' => 'string',
            'createdBy' => 'string',
            'updateBy' => 'string',
            'createdUserName' => 'string',
            'reviewer' => 'string',
            'reviewerUserName' => 'string',
            'approveStatus' => 'object',
            'lastExecutionTime' => 'int',
            'lastExecutionStatus' => 'string',
            'executionCount' => 'int',
            'enabled' => 'bool',
            'createdTime' => 'int',
            'modifiedTime' => 'int',
            'regionId' => 'string',
            'associatedTaskName' => 'string',
            'associatedTaskNameEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * scheduledType  定时类型
    * taskType  引用任务类型
    * associatedTaskType  关联的任务类型
    * riskLevel  风险等级
    * createdBy  创建人
    * updateBy  修改人
    * createdUserName  创建人昵称
    * reviewer  审批人
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态
    * lastExecutionTime  最近执行时间时间戳
    * lastExecutionStatus  最近执行状态
    * executionCount  执行次数
    * enabled  是否启用
    * createdTime  创建时间
    * modifiedTime  更新时间
    * regionId  区域
    * associatedTaskName  脚本/作业名称
    * associatedTaskNameEn  脚本/作业名称(英文)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'enterpriseProjectId' => null,
        'name' => null,
        'scheduledType' => null,
        'taskType' => null,
        'associatedTaskType' => null,
        'riskLevel' => null,
        'createdBy' => null,
        'updateBy' => null,
        'createdUserName' => null,
        'reviewer' => null,
        'reviewerUserName' => null,
        'approveStatus' => null,
        'lastExecutionTime' => 'int64',
        'lastExecutionStatus' => null,
        'executionCount' => 'int32',
        'enabled' => null,
        'createdTime' => 'int64',
        'modifiedTime' => 'int64',
        'regionId' => null,
        'associatedTaskName' => null,
        'associatedTaskNameEn' => null
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
    * scheduledType  定时类型
    * taskType  引用任务类型
    * associatedTaskType  关联的任务类型
    * riskLevel  风险等级
    * createdBy  创建人
    * updateBy  修改人
    * createdUserName  创建人昵称
    * reviewer  审批人
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态
    * lastExecutionTime  最近执行时间时间戳
    * lastExecutionStatus  最近执行状态
    * executionCount  执行次数
    * enabled  是否启用
    * createdTime  创建时间
    * modifiedTime  更新时间
    * regionId  区域
    * associatedTaskName  脚本/作业名称
    * associatedTaskNameEn  脚本/作业名称(英文)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'name' => 'name',
            'scheduledType' => 'scheduled_type',
            'taskType' => 'task_type',
            'associatedTaskType' => 'associated_task_type',
            'riskLevel' => 'risk_level',
            'createdBy' => 'created_by',
            'updateBy' => 'update_by',
            'createdUserName' => 'created_user_name',
            'reviewer' => 'reviewer',
            'reviewerUserName' => 'reviewer_user_name',
            'approveStatus' => 'approve_status',
            'lastExecutionTime' => 'last_execution_time',
            'lastExecutionStatus' => 'last_execution_status',
            'executionCount' => 'execution_count',
            'enabled' => 'enabled',
            'createdTime' => 'created_time',
            'modifiedTime' => 'modified_time',
            'regionId' => 'region_id',
            'associatedTaskName' => 'associated_task_name',
            'associatedTaskNameEn' => 'associated_task_name_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * scheduledType  定时类型
    * taskType  引用任务类型
    * associatedTaskType  关联的任务类型
    * riskLevel  风险等级
    * createdBy  创建人
    * updateBy  修改人
    * createdUserName  创建人昵称
    * reviewer  审批人
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态
    * lastExecutionTime  最近执行时间时间戳
    * lastExecutionStatus  最近执行状态
    * executionCount  执行次数
    * enabled  是否启用
    * createdTime  创建时间
    * modifiedTime  更新时间
    * regionId  区域
    * associatedTaskName  脚本/作业名称
    * associatedTaskNameEn  脚本/作业名称(英文)
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'name' => 'setName',
            'scheduledType' => 'setScheduledType',
            'taskType' => 'setTaskType',
            'associatedTaskType' => 'setAssociatedTaskType',
            'riskLevel' => 'setRiskLevel',
            'createdBy' => 'setCreatedBy',
            'updateBy' => 'setUpdateBy',
            'createdUserName' => 'setCreatedUserName',
            'reviewer' => 'setReviewer',
            'reviewerUserName' => 'setReviewerUserName',
            'approveStatus' => 'setApproveStatus',
            'lastExecutionTime' => 'setLastExecutionTime',
            'lastExecutionStatus' => 'setLastExecutionStatus',
            'executionCount' => 'setExecutionCount',
            'enabled' => 'setEnabled',
            'createdTime' => 'setCreatedTime',
            'modifiedTime' => 'setModifiedTime',
            'regionId' => 'setRegionId',
            'associatedTaskName' => 'setAssociatedTaskName',
            'associatedTaskNameEn' => 'setAssociatedTaskNameEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * enterpriseProjectId  企业项目id
    * name  任务名称
    * scheduledType  定时类型
    * taskType  引用任务类型
    * associatedTaskType  关联的任务类型
    * riskLevel  风险等级
    * createdBy  创建人
    * updateBy  修改人
    * createdUserName  创建人昵称
    * reviewer  审批人
    * reviewerUserName  审批人昵称
    * approveStatus  审批状态
    * lastExecutionTime  最近执行时间时间戳
    * lastExecutionStatus  最近执行状态
    * executionCount  执行次数
    * enabled  是否启用
    * createdTime  创建时间
    * modifiedTime  更新时间
    * regionId  区域
    * associatedTaskName  脚本/作业名称
    * associatedTaskNameEn  脚本/作业名称(英文)
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'name' => 'getName',
            'scheduledType' => 'getScheduledType',
            'taskType' => 'getTaskType',
            'associatedTaskType' => 'getAssociatedTaskType',
            'riskLevel' => 'getRiskLevel',
            'createdBy' => 'getCreatedBy',
            'updateBy' => 'getUpdateBy',
            'createdUserName' => 'getCreatedUserName',
            'reviewer' => 'getReviewer',
            'reviewerUserName' => 'getReviewerUserName',
            'approveStatus' => 'getApproveStatus',
            'lastExecutionTime' => 'getLastExecutionTime',
            'lastExecutionStatus' => 'getLastExecutionStatus',
            'executionCount' => 'getExecutionCount',
            'enabled' => 'getEnabled',
            'createdTime' => 'getCreatedTime',
            'modifiedTime' => 'getModifiedTime',
            'regionId' => 'getRegionId',
            'associatedTaskName' => 'getAssociatedTaskName',
            'associatedTaskNameEn' => 'getAssociatedTaskNameEn'
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
        $this->container['scheduledType'] = isset($data['scheduledType']) ? $data['scheduledType'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['associatedTaskType'] = isset($data['associatedTaskType']) ? $data['associatedTaskType'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['createdUserName'] = isset($data['createdUserName']) ? $data['createdUserName'] : null;
        $this->container['reviewer'] = isset($data['reviewer']) ? $data['reviewer'] : null;
        $this->container['reviewerUserName'] = isset($data['reviewerUserName']) ? $data['reviewerUserName'] : null;
        $this->container['approveStatus'] = isset($data['approveStatus']) ? $data['approveStatus'] : null;
        $this->container['lastExecutionTime'] = isset($data['lastExecutionTime']) ? $data['lastExecutionTime'] : null;
        $this->container['lastExecutionStatus'] = isset($data['lastExecutionStatus']) ? $data['lastExecutionStatus'] : null;
        $this->container['executionCount'] = isset($data['executionCount']) ? $data['executionCount'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['modifiedTime'] = isset($data['modifiedTime']) ? $data['modifiedTime'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['associatedTaskName'] = isset($data['associatedTaskName']) ? $data['associatedTaskName'] : null;
        $this->container['associatedTaskNameEn'] = isset($data['associatedTaskNameEn']) ? $data['associatedTaskNameEn'] : null;
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
    * Gets scheduledType
    *  定时类型
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
    * @param string|null $scheduledType 定时类型
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
    *  引用任务类型
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
    * @param string|null $taskType 引用任务类型
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
    *  关联的任务类型
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
    * @param string|null $associatedTaskType 关联的任务类型
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
    * Gets updateBy
    *  修改人
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 修改人
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
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
    * Gets reviewer
    *  审批人
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
    * @param string|null $reviewer 审批人
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
    * Gets lastExecutionTime
    *  最近执行时间时间戳
    *
    * @return int|null
    */
    public function getLastExecutionTime()
    {
        return $this->container['lastExecutionTime'];
    }

    /**
    * Sets lastExecutionTime
    *
    * @param int|null $lastExecutionTime 最近执行时间时间戳
    *
    * @return $this
    */
    public function setLastExecutionTime($lastExecutionTime)
    {
        $this->container['lastExecutionTime'] = $lastExecutionTime;
        return $this;
    }

    /**
    * Gets lastExecutionStatus
    *  最近执行状态
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
    * @param string|null $lastExecutionStatus 最近执行状态
    *
    * @return $this
    */
    public function setLastExecutionStatus($lastExecutionStatus)
    {
        $this->container['lastExecutionStatus'] = $lastExecutionStatus;
        return $this;
    }

    /**
    * Gets executionCount
    *  执行次数
    *
    * @return int|null
    */
    public function getExecutionCount()
    {
        return $this->container['executionCount'];
    }

    /**
    * Sets executionCount
    *
    * @param int|null $executionCount 执行次数
    *
    * @return $this
    */
    public function setExecutionCount($executionCount)
    {
        $this->container['executionCount'] = $executionCount;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param int|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets modifiedTime
    *  更新时间
    *
    * @return int|null
    */
    public function getModifiedTime()
    {
        return $this->container['modifiedTime'];
    }

    /**
    * Sets modifiedTime
    *
    * @param int|null $modifiedTime 更新时间
    *
    * @return $this
    */
    public function setModifiedTime($modifiedTime)
    {
        $this->container['modifiedTime'] = $modifiedTime;
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
    * Gets associatedTaskName
    *  脚本/作业名称
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
    * @param string|null $associatedTaskName 脚本/作业名称
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
    *  脚本/作业名称(英文)
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
    * @param string|null $associatedTaskNameEn 脚本/作业名称(英文)
    *
    * @return $this
    */
    public function setAssociatedTaskNameEn($associatedTaskNameEn)
    {
        $this->container['associatedTaskNameEn'] = $associatedTaskNameEn;
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

