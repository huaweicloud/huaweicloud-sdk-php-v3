<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryPendingItemsRespData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryPendingItemsResp_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deployedVersion  已发布节点版本
    * itemName  任务名称
    * packageFlag  打包状态，0表示未打包。
    * pendingItemId  待发布包ID
    * pendingVersion  待发布包版本
    * projectId  租户id+空间id
    * submitTimestamp  提交时间
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskId  任务id
    * taskType  任务类型，取值为1和2。 1: job 2: script
    * updateType  变更类型，取值为1，2和3. 1: 新增 2: 变更 3: 删除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deployedVersion' => 'int',
            'itemName' => 'string',
            'packageFlag' => 'int',
            'pendingItemId' => 'string',
            'pendingVersion' => 'int',
            'projectId' => 'string',
            'submitTimestamp' => 'int',
            'submitUserId' => 'string',
            'submitUserName' => 'string',
            'taskId' => 'string',
            'taskType' => 'int',
            'updateType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deployedVersion  已发布节点版本
    * itemName  任务名称
    * packageFlag  打包状态，0表示未打包。
    * pendingItemId  待发布包ID
    * pendingVersion  待发布包版本
    * projectId  租户id+空间id
    * submitTimestamp  提交时间
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskId  任务id
    * taskType  任务类型，取值为1和2。 1: job 2: script
    * updateType  变更类型，取值为1，2和3. 1: 新增 2: 变更 3: 删除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deployedVersion' => 'int32',
        'itemName' => null,
        'packageFlag' => 'int32',
        'pendingItemId' => null,
        'pendingVersion' => 'int32',
        'projectId' => null,
        'submitTimestamp' => 'int64',
        'submitUserId' => null,
        'submitUserName' => null,
        'taskId' => null,
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
    * deployedVersion  已发布节点版本
    * itemName  任务名称
    * packageFlag  打包状态，0表示未打包。
    * pendingItemId  待发布包ID
    * pendingVersion  待发布包版本
    * projectId  租户id+空间id
    * submitTimestamp  提交时间
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskId  任务id
    * taskType  任务类型，取值为1和2。 1: job 2: script
    * updateType  变更类型，取值为1，2和3. 1: 新增 2: 变更 3: 删除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deployedVersion' => 'deployed_version',
            'itemName' => 'item_name',
            'packageFlag' => 'package_flag',
            'pendingItemId' => 'pending_item_id',
            'pendingVersion' => 'pending_version',
            'projectId' => 'project_id',
            'submitTimestamp' => 'submit_timestamp',
            'submitUserId' => 'submit_user_id',
            'submitUserName' => 'submit_user_name',
            'taskId' => 'task_id',
            'taskType' => 'task_type',
            'updateType' => 'update_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deployedVersion  已发布节点版本
    * itemName  任务名称
    * packageFlag  打包状态，0表示未打包。
    * pendingItemId  待发布包ID
    * pendingVersion  待发布包版本
    * projectId  租户id+空间id
    * submitTimestamp  提交时间
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskId  任务id
    * taskType  任务类型，取值为1和2。 1: job 2: script
    * updateType  变更类型，取值为1，2和3. 1: 新增 2: 变更 3: 删除
    *
    * @var string[]
    */
    protected static $setters = [
            'deployedVersion' => 'setDeployedVersion',
            'itemName' => 'setItemName',
            'packageFlag' => 'setPackageFlag',
            'pendingItemId' => 'setPendingItemId',
            'pendingVersion' => 'setPendingVersion',
            'projectId' => 'setProjectId',
            'submitTimestamp' => 'setSubmitTimestamp',
            'submitUserId' => 'setSubmitUserId',
            'submitUserName' => 'setSubmitUserName',
            'taskId' => 'setTaskId',
            'taskType' => 'setTaskType',
            'updateType' => 'setUpdateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deployedVersion  已发布节点版本
    * itemName  任务名称
    * packageFlag  打包状态，0表示未打包。
    * pendingItemId  待发布包ID
    * pendingVersion  待发布包版本
    * projectId  租户id+空间id
    * submitTimestamp  提交时间
    * submitUserId  提交人id
    * submitUserName  提交人名称
    * taskId  任务id
    * taskType  任务类型，取值为1和2。 1: job 2: script
    * updateType  变更类型，取值为1，2和3. 1: 新增 2: 变更 3: 删除
    *
    * @var string[]
    */
    protected static $getters = [
            'deployedVersion' => 'getDeployedVersion',
            'itemName' => 'getItemName',
            'packageFlag' => 'getPackageFlag',
            'pendingItemId' => 'getPendingItemId',
            'pendingVersion' => 'getPendingVersion',
            'projectId' => 'getProjectId',
            'submitTimestamp' => 'getSubmitTimestamp',
            'submitUserId' => 'getSubmitUserId',
            'submitUserName' => 'getSubmitUserName',
            'taskId' => 'getTaskId',
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
        $this->container['deployedVersion'] = isset($data['deployedVersion']) ? $data['deployedVersion'] : null;
        $this->container['itemName'] = isset($data['itemName']) ? $data['itemName'] : null;
        $this->container['packageFlag'] = isset($data['packageFlag']) ? $data['packageFlag'] : null;
        $this->container['pendingItemId'] = isset($data['pendingItemId']) ? $data['pendingItemId'] : null;
        $this->container['pendingVersion'] = isset($data['pendingVersion']) ? $data['pendingVersion'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['submitTimestamp'] = isset($data['submitTimestamp']) ? $data['submitTimestamp'] : null;
        $this->container['submitUserId'] = isset($data['submitUserId']) ? $data['submitUserId'] : null;
        $this->container['submitUserName'] = isset($data['submitUserName']) ? $data['submitUserName'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
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
    *  任务名称
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
    * @param string|null $itemName 任务名称
    *
    * @return $this
    */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;
        return $this;
    }

    /**
    * Gets packageFlag
    *  打包状态，0表示未打包。
    *
    * @return int|null
    */
    public function getPackageFlag()
    {
        return $this->container['packageFlag'];
    }

    /**
    * Sets packageFlag
    *
    * @param int|null $packageFlag 打包状态，0表示未打包。
    *
    * @return $this
    */
    public function setPackageFlag($packageFlag)
    {
        $this->container['packageFlag'] = $packageFlag;
        return $this;
    }

    /**
    * Gets pendingItemId
    *  待发布包ID
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
    * @param string|null $pendingItemId 待发布包ID
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
    *  待发布包版本
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
    * @param int|null $pendingVersion 待发布包版本
    *
    * @return $this
    */
    public function setPendingVersion($pendingVersion)
    {
        $this->container['pendingVersion'] = $pendingVersion;
        return $this;
    }

    /**
    * Gets projectId
    *  租户id+空间id
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
    * @param string|null $projectId 租户id+空间id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets submitTimestamp
    *  提交时间
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
    * @param int|null $submitTimestamp 提交时间
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
    * Gets taskId
    *  任务id
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
    * @param string|null $taskId 任务id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型，取值为1和2。 1: job 2: script
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
    * @param int|null $taskType 任务类型，取值为1和2。 1: job 2: script
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
    *  变更类型，取值为1，2和3. 1: 新增 2: 变更 3: 删除
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
    * @param int|null $updateType 变更类型，取值为1，2和3. 1: 新增 2: 变更 3: 删除
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

