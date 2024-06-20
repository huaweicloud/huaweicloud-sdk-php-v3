<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPackageDetailRespTaskDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPackageDetailResp_task_details';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployedVersion  已发布节点版本
    * itemName  发布任务名称
    * pendingItemId  发布任务ID
    * pendingVersion  节点版本
    * scriptId  具体脚本ID
    * taskId  作业ID
    * startJobStatus  作业启动状态，2：成功，3：失败
    * submitTimestamp  提交时间戳，13位时间戳
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskType  任务类型（1-作业，2-脚本，3-资源）
    * updateType  变更类型，默认值1，（1-新增，2-修改，3-删除）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deployStatus' => 'int',
            'deployedVersion' => 'int',
            'itemName' => 'string',
            'pendingItemId' => 'string',
            'pendingVersion' => 'int',
            'scriptId' => 'string',
            'taskId' => 'string',
            'startJobStatus' => 'int',
            'submitTimestamp' => 'int',
            'submitUserId' => 'string',
            'submitUserName' => 'string',
            'taskType' => 'int',
            'updateType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployedVersion  已发布节点版本
    * itemName  发布任务名称
    * pendingItemId  发布任务ID
    * pendingVersion  节点版本
    * scriptId  具体脚本ID
    * taskId  作业ID
    * startJobStatus  作业启动状态，2：成功，3：失败
    * submitTimestamp  提交时间戳，13位时间戳
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskType  任务类型（1-作业，2-脚本，3-资源）
    * updateType  变更类型，默认值1，（1-新增，2-修改，3-删除）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deployStatus' => 'int32',
        'deployedVersion' => 'int32',
        'itemName' => null,
        'pendingItemId' => null,
        'pendingVersion' => 'int32',
        'scriptId' => null,
        'taskId' => null,
        'startJobStatus' => 'int32',
        'submitTimestamp' => 'int64',
        'submitUserId' => null,
        'submitUserName' => null,
        'taskType' => 'int32',
        'updateType' => 'int32'
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
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployedVersion  已发布节点版本
    * itemName  发布任务名称
    * pendingItemId  发布任务ID
    * pendingVersion  节点版本
    * scriptId  具体脚本ID
    * taskId  作业ID
    * startJobStatus  作业启动状态，2：成功，3：失败
    * submitTimestamp  提交时间戳，13位时间戳
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskType  任务类型（1-作业，2-脚本，3-资源）
    * updateType  变更类型，默认值1，（1-新增，2-修改，3-删除）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deployStatus' => 'deploy_status',
            'deployedVersion' => 'deployed_version',
            'itemName' => 'item_name',
            'pendingItemId' => 'pending_item_id',
            'pendingVersion' => 'pending_version',
            'scriptId' => 'script_id',
            'taskId' => 'task_id',
            'startJobStatus' => 'start_job_status',
            'submitTimestamp' => 'submit_timestamp',
            'submitUserId' => 'submit_user_id',
            'submitUserName' => 'submit_user_name',
            'taskType' => 'task_type',
            'updateType' => 'update_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployedVersion  已发布节点版本
    * itemName  发布任务名称
    * pendingItemId  发布任务ID
    * pendingVersion  节点版本
    * scriptId  具体脚本ID
    * taskId  作业ID
    * startJobStatus  作业启动状态，2：成功，3：失败
    * submitTimestamp  提交时间戳，13位时间戳
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskType  任务类型（1-作业，2-脚本，3-资源）
    * updateType  变更类型，默认值1，（1-新增，2-修改，3-删除）
    *
    * @var string[]
    */
    protected static $setters = [
            'deployStatus' => 'setDeployStatus',
            'deployedVersion' => 'setDeployedVersion',
            'itemName' => 'setItemName',
            'pendingItemId' => 'setPendingItemId',
            'pendingVersion' => 'setPendingVersion',
            'scriptId' => 'setScriptId',
            'taskId' => 'setTaskId',
            'startJobStatus' => 'setStartJobStatus',
            'submitTimestamp' => 'setSubmitTimestamp',
            'submitUserId' => 'setSubmitUserId',
            'submitUserName' => 'setSubmitUserName',
            'taskType' => 'setTaskType',
            'updateType' => 'setUpdateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deployStatus  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    * deployedVersion  已发布节点版本
    * itemName  发布任务名称
    * pendingItemId  发布任务ID
    * pendingVersion  节点版本
    * scriptId  具体脚本ID
    * taskId  作业ID
    * startJobStatus  作业启动状态，2：成功，3：失败
    * submitTimestamp  提交时间戳，13位时间戳
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskType  任务类型（1-作业，2-脚本，3-资源）
    * updateType  变更类型，默认值1，（1-新增，2-修改，3-删除）
    *
    * @var string[]
    */
    protected static $getters = [
            'deployStatus' => 'getDeployStatus',
            'deployedVersion' => 'getDeployedVersion',
            'itemName' => 'getItemName',
            'pendingItemId' => 'getPendingItemId',
            'pendingVersion' => 'getPendingVersion',
            'scriptId' => 'getScriptId',
            'taskId' => 'getTaskId',
            'startJobStatus' => 'getStartJobStatus',
            'submitTimestamp' => 'getSubmitTimestamp',
            'submitUserId' => 'getSubmitUserId',
            'submitUserName' => 'getSubmitUserName',
            'taskType' => 'getTaskType',
            'updateType' => 'getUpdateType'
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
        $this->container['deployStatus'] = isset($data['deployStatus']) ? $data['deployStatus'] : null;
        $this->container['deployedVersion'] = isset($data['deployedVersion']) ? $data['deployedVersion'] : null;
        $this->container['itemName'] = isset($data['itemName']) ? $data['itemName'] : null;
        $this->container['pendingItemId'] = isset($data['pendingItemId']) ? $data['pendingItemId'] : null;
        $this->container['pendingVersion'] = isset($data['pendingVersion']) ? $data['pendingVersion'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['startJobStatus'] = isset($data['startJobStatus']) ? $data['startJobStatus'] : null;
        $this->container['submitTimestamp'] = isset($data['submitTimestamp']) ? $data['submitTimestamp'] : null;
        $this->container['submitUserId'] = isset($data['submitUserId']) ? $data['submitUserId'] : null;
        $this->container['submitUserName'] = isset($data['submitUserName']) ? $data['submitUserName'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['updateType'] = isset($data['updateType']) ? $data['updateType'] : null;
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
    * Gets deployStatus
    *  发布状态，1:待审批,2:成功,3:失败, 5:发布中
    *
    * @return int|null
    */
    public function getDeployStatus()
    {
        return $this->container['deployStatus'];
    }

    /**
    * Sets deployStatus
    *
    * @param int|null $deployStatus 发布状态，1:待审批,2:成功,3:失败, 5:发布中
    *
    * @return $this
    */
    public function setDeployStatus($deployStatus)
    {
        $this->container['deployStatus'] = $deployStatus;
        return $this;
    }

    /**
    * Gets deployedVersion
    *  已发布节点版本
    *
    * @return int|null
    */
    public function getDeployedVersion()
    {
        return $this->container['deployedVersion'];
    }

    /**
    * Sets deployedVersion
    *
    * @param int|null $deployedVersion 已发布节点版本
    *
    * @return $this
    */
    public function setDeployedVersion($deployedVersion)
    {
        $this->container['deployedVersion'] = $deployedVersion;
        return $this;
    }

    /**
    * Gets itemName
    *  发布任务名称
    *
    * @return string|null
    */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
    * Sets itemName
    *
    * @param string|null $itemName 发布任务名称
    *
    * @return $this
    */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;
        return $this;
    }

    /**
    * Gets pendingItemId
    *  发布任务ID
    *
    * @return string|null
    */
    public function getPendingItemId()
    {
        return $this->container['pendingItemId'];
    }

    /**
    * Sets pendingItemId
    *
    * @param string|null $pendingItemId 发布任务ID
    *
    * @return $this
    */
    public function setPendingItemId($pendingItemId)
    {
        $this->container['pendingItemId'] = $pendingItemId;
        return $this;
    }

    /**
    * Gets pendingVersion
    *  节点版本
    *
    * @return int|null
    */
    public function getPendingVersion()
    {
        return $this->container['pendingVersion'];
    }

    /**
    * Sets pendingVersion
    *
    * @param int|null $pendingVersion 节点版本
    *
    * @return $this
    */
    public function setPendingVersion($pendingVersion)
    {
        $this->container['pendingVersion'] = $pendingVersion;
        return $this;
    }

    /**
    * Gets scriptId
    *  具体脚本ID
    *
    * @return string|null
    */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
    * Sets scriptId
    *
    * @param string|null $scriptId 具体脚本ID
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
        return $this;
    }

    /**
    * Gets taskId
    *  作业ID
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
    * @param string|null $taskId 作业ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets startJobStatus
    *  作业启动状态，2：成功，3：失败
    *
    * @return int|null
    */
    public function getStartJobStatus()
    {
        return $this->container['startJobStatus'];
    }

    /**
    * Sets startJobStatus
    *
    * @param int|null $startJobStatus 作业启动状态，2：成功，3：失败
    *
    * @return $this
    */
    public function setStartJobStatus($startJobStatus)
    {
        $this->container['startJobStatus'] = $startJobStatus;
        return $this;
    }

    /**
    * Gets submitTimestamp
    *  提交时间戳，13位时间戳
    *
    * @return int|null
    */
    public function getSubmitTimestamp()
    {
        return $this->container['submitTimestamp'];
    }

    /**
    * Sets submitTimestamp
    *
    * @param int|null $submitTimestamp 提交时间戳，13位时间戳
    *
    * @return $this
    */
    public function setSubmitTimestamp($submitTimestamp)
    {
        $this->container['submitTimestamp'] = $submitTimestamp;
        return $this;
    }

    /**
    * Gets submitUserId
    *  提交人id
    *
    * @return string|null
    */
    public function getSubmitUserId()
    {
        return $this->container['submitUserId'];
    }

    /**
    * Sets submitUserId
    *
    * @param string|null $submitUserId 提交人id
    *
    * @return $this
    */
    public function setSubmitUserId($submitUserId)
    {
        $this->container['submitUserId'] = $submitUserId;
        return $this;
    }

    /**
    * Gets submitUserName
    *  提交人名称
    *
    * @return string|null
    */
    public function getSubmitUserName()
    {
        return $this->container['submitUserName'];
    }

    /**
    * Sets submitUserName
    *
    * @param string|null $submitUserName 提交人名称
    *
    * @return $this
    */
    public function setSubmitUserName($submitUserName)
    {
        $this->container['submitUserName'] = $submitUserName;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型（1-作业，2-脚本，3-资源）
    *
    * @return int|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param int|null $taskType 任务类型（1-作业，2-脚本，3-资源）
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets updateType
    *  变更类型，默认值1，（1-新增，2-修改，3-删除）
    *
    * @return int|null
    */
    public function getUpdateType()
    {
        return $this->container['updateType'];
    }

    /**
    * Sets updateType
    *
    * @param int|null $updateType 变更类型，默认值1，（1-新增，2-修改，3-删除）
    *
    * @return $this
    */
    public function setUpdateType($updateType)
    {
        $this->container['updateType'] = $updateType;
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

