<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowExecutionBrief implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowExecutionBrief';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowId  流程定义ID
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * beginTime  流程实例创建时间，格式：UTC时间戳
    * endTime  流程实例结束时间，格式：UTC时间戳
    * lastUpdateTime  流程实例上次更新时间，格式：UTC时间戳
    * createdBy  流程实例创建者
    * approveUserNameList  审批人列表
    * executionResultList  执行记录
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * workflowEditTime  执行工作流的修改时间，格式：UTC时间戳
    * lastRecordIdWithSnapshot  执行快照
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowId' => 'string',
            'executionId' => 'string',
            'status' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'lastUpdateTime' => 'int',
            'createdBy' => 'string',
            'approveUserNameList' => 'string[]',
            'executionResultList' => '\HuaweiCloud\SDK\Aom\V1\Model\ExecutionResultList[]',
            'projectId' => 'string',
            'workflowEditTime' => 'int',
            'lastRecordIdWithSnapshot' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowId  流程定义ID
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * beginTime  流程实例创建时间，格式：UTC时间戳
    * endTime  流程实例结束时间，格式：UTC时间戳
    * lastUpdateTime  流程实例上次更新时间，格式：UTC时间戳
    * createdBy  流程实例创建者
    * approveUserNameList  审批人列表
    * executionResultList  执行记录
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * workflowEditTime  执行工作流的修改时间，格式：UTC时间戳
    * lastRecordIdWithSnapshot  执行快照
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowId' => null,
        'executionId' => null,
        'status' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'lastUpdateTime' => 'int64',
        'createdBy' => null,
        'approveUserNameList' => null,
        'executionResultList' => null,
        'projectId' => null,
        'workflowEditTime' => 'int64',
        'lastRecordIdWithSnapshot' => null
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
    * workflowId  流程定义ID
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * beginTime  流程实例创建时间，格式：UTC时间戳
    * endTime  流程实例结束时间，格式：UTC时间戳
    * lastUpdateTime  流程实例上次更新时间，格式：UTC时间戳
    * createdBy  流程实例创建者
    * approveUserNameList  审批人列表
    * executionResultList  执行记录
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * workflowEditTime  执行工作流的修改时间，格式：UTC时间戳
    * lastRecordIdWithSnapshot  执行快照
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowId' => 'workflow_id',
            'executionId' => 'execution_id',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'lastUpdateTime' => 'last_update_time',
            'createdBy' => 'created_by',
            'approveUserNameList' => 'approve_user_name_list',
            'executionResultList' => 'execution_result_list',
            'projectId' => 'project_id',
            'workflowEditTime' => 'workflow_edit_time',
            'lastRecordIdWithSnapshot' => 'last_record_id_with_snapshot'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowId  流程定义ID
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * beginTime  流程实例创建时间，格式：UTC时间戳
    * endTime  流程实例结束时间，格式：UTC时间戳
    * lastUpdateTime  流程实例上次更新时间，格式：UTC时间戳
    * createdBy  流程实例创建者
    * approveUserNameList  审批人列表
    * executionResultList  执行记录
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * workflowEditTime  执行工作流的修改时间，格式：UTC时间戳
    * lastRecordIdWithSnapshot  执行快照
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowId' => 'setWorkflowId',
            'executionId' => 'setExecutionId',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'lastUpdateTime' => 'setLastUpdateTime',
            'createdBy' => 'setCreatedBy',
            'approveUserNameList' => 'setApproveUserNameList',
            'executionResultList' => 'setExecutionResultList',
            'projectId' => 'setProjectId',
            'workflowEditTime' => 'setWorkflowEditTime',
            'lastRecordIdWithSnapshot' => 'setLastRecordIdWithSnapshot'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowId  流程定义ID
    * executionId  流程执行实例ID
    * status  流程实例执行状态
    * beginTime  流程实例创建时间，格式：UTC时间戳
    * endTime  流程实例结束时间，格式：UTC时间戳
    * lastUpdateTime  流程实例上次更新时间，格式：UTC时间戳
    * createdBy  流程实例创建者
    * approveUserNameList  审批人列表
    * executionResultList  执行记录
    * projectId  租户从IAM申请到的projectid，一般为32位字符串。
    * workflowEditTime  执行工作流的修改时间，格式：UTC时间戳
    * lastRecordIdWithSnapshot  执行快照
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowId' => 'getWorkflowId',
            'executionId' => 'getExecutionId',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'lastUpdateTime' => 'getLastUpdateTime',
            'createdBy' => 'getCreatedBy',
            'approveUserNameList' => 'getApproveUserNameList',
            'executionResultList' => 'getExecutionResultList',
            'projectId' => 'getProjectId',
            'workflowEditTime' => 'getWorkflowEditTime',
            'lastRecordIdWithSnapshot' => 'getLastRecordIdWithSnapshot'
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
        $this->container['workflowId'] = isset($data['workflowId']) ? $data['workflowId'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['approveUserNameList'] = isset($data['approveUserNameList']) ? $data['approveUserNameList'] : null;
        $this->container['executionResultList'] = isset($data['executionResultList']) ? $data['executionResultList'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workflowEditTime'] = isset($data['workflowEditTime']) ? $data['workflowEditTime'] : null;
        $this->container['lastRecordIdWithSnapshot'] = isset($data['lastRecordIdWithSnapshot']) ? $data['lastRecordIdWithSnapshot'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workflowId']) && (mb_strlen($this->container['workflowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executionId']) && (mb_strlen($this->container['executionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'executionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['executionId']) && (mb_strlen($this->container['executionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['beginTime']) && ($this->container['beginTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['beginTime']) && ($this->container['beginTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'beginTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdBy']) && (mb_strlen($this->container['createdBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdBy', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workflowEditTime']) && ($this->container['workflowEditTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'workflowEditTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['workflowEditTime']) && ($this->container['workflowEditTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'workflowEditTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastRecordIdWithSnapshot']) && (mb_strlen($this->container['lastRecordIdWithSnapshot']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastRecordIdWithSnapshot', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastRecordIdWithSnapshot']) && (mb_strlen($this->container['lastRecordIdWithSnapshot']) < 1)) {
                $invalidProperties[] = "invalid value for 'lastRecordIdWithSnapshot', the character length must be bigger than or equal to 1.";
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
    * Gets workflowId
    *  流程定义ID
    *
    * @return string|null
    */
    public function getWorkflowId()
    {
        return $this->container['workflowId'];
    }

    /**
    * Sets workflowId
    *
    * @param string|null $workflowId 流程定义ID
    *
    * @return $this
    */
    public function setWorkflowId($workflowId)
    {
        $this->container['workflowId'] = $workflowId;
        return $this;
    }

    /**
    * Gets executionId
    *  流程执行实例ID
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId 流程执行实例ID
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets status
    *  流程实例执行状态
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
    * @param string|null $status 流程实例执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  流程实例创建时间，格式：UTC时间戳
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 流程实例创建时间，格式：UTC时间戳
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
    *  流程实例结束时间，格式：UTC时间戳
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
    * @param int|null $endTime 流程实例结束时间，格式：UTC时间戳
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  流程实例上次更新时间，格式：UTC时间戳
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
    * @param int|null $lastUpdateTime 流程实例上次更新时间，格式：UTC时间戳
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
        return $this;
    }

    /**
    * Gets createdBy
    *  流程实例创建者
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
    * @param string|null $createdBy 流程实例创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets approveUserNameList
    *  审批人列表
    *
    * @return string[]|null
    */
    public function getApproveUserNameList()
    {
        return $this->container['approveUserNameList'];
    }

    /**
    * Sets approveUserNameList
    *
    * @param string[]|null $approveUserNameList 审批人列表
    *
    * @return $this
    */
    public function setApproveUserNameList($approveUserNameList)
    {
        $this->container['approveUserNameList'] = $approveUserNameList;
        return $this;
    }

    /**
    * Gets executionResultList
    *  执行记录
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\ExecutionResultList[]|null
    */
    public function getExecutionResultList()
    {
        return $this->container['executionResultList'];
    }

    /**
    * Sets executionResultList
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\ExecutionResultList[]|null $executionResultList 执行记录
    *
    * @return $this
    */
    public function setExecutionResultList($executionResultList)
    {
        $this->container['executionResultList'] = $executionResultList;
        return $this;
    }

    /**
    * Gets projectId
    *  租户从IAM申请到的projectid，一般为32位字符串。
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
    * @param string|null $projectId 租户从IAM申请到的projectid，一般为32位字符串。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workflowEditTime
    *  执行工作流的修改时间，格式：UTC时间戳
    *
    * @return int|null
    */
    public function getWorkflowEditTime()
    {
        return $this->container['workflowEditTime'];
    }

    /**
    * Sets workflowEditTime
    *
    * @param int|null $workflowEditTime 执行工作流的修改时间，格式：UTC时间戳
    *
    * @return $this
    */
    public function setWorkflowEditTime($workflowEditTime)
    {
        $this->container['workflowEditTime'] = $workflowEditTime;
        return $this;
    }

    /**
    * Gets lastRecordIdWithSnapshot
    *  执行快照
    *
    * @return string|null
    */
    public function getLastRecordIdWithSnapshot()
    {
        return $this->container['lastRecordIdWithSnapshot'];
    }

    /**
    * Sets lastRecordIdWithSnapshot
    *
    * @param string|null $lastRecordIdWithSnapshot 执行快照
    *
    * @return $this
    */
    public function setLastRecordIdWithSnapshot($lastRecordIdWithSnapshot)
    {
        $this->container['lastRecordIdWithSnapshot'] = $lastRecordIdWithSnapshot;
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

