<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryWorkspacesApprovalRespJobApplySearchList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryWorkspacesApprovalResp_job_apply_search_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actualApprover  当前审批人。
    * applyId  审批单ID。
    * approvalMsg  审核信息。
    * approvalTime  审批时间。
    * approverName  审批人。
    * changeType  作业或脚本变更类型：修改或者删除。
    * createUser  申请人。
    * objectId  审批对象ID。
    * objectName  作业或者脚本名称。
    * objectType  审批对象类型：作业或者脚本。
    * status  审批状态。
    * submitTime  审批提交时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actualApprover' => 'string',
            'applyId' => 'string',
            'approvalMsg' => 'string',
            'approvalTime' => 'int',
            'approverName' => 'string',
            'changeType' => 'string',
            'createUser' => 'string',
            'objectId' => 'string',
            'objectName' => 'string',
            'objectType' => 'string',
            'status' => 'string',
            'submitTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actualApprover  当前审批人。
    * applyId  审批单ID。
    * approvalMsg  审核信息。
    * approvalTime  审批时间。
    * approverName  审批人。
    * changeType  作业或脚本变更类型：修改或者删除。
    * createUser  申请人。
    * objectId  审批对象ID。
    * objectName  作业或者脚本名称。
    * objectType  审批对象类型：作业或者脚本。
    * status  审批状态。
    * submitTime  审批提交时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actualApprover' => null,
        'applyId' => null,
        'approvalMsg' => null,
        'approvalTime' => 'int32',
        'approverName' => null,
        'changeType' => null,
        'createUser' => null,
        'objectId' => null,
        'objectName' => null,
        'objectType' => null,
        'status' => null,
        'submitTime' => 'int64'
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
    * actualApprover  当前审批人。
    * applyId  审批单ID。
    * approvalMsg  审核信息。
    * approvalTime  审批时间。
    * approverName  审批人。
    * changeType  作业或脚本变更类型：修改或者删除。
    * createUser  申请人。
    * objectId  审批对象ID。
    * objectName  作业或者脚本名称。
    * objectType  审批对象类型：作业或者脚本。
    * status  审批状态。
    * submitTime  审批提交时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actualApprover' => 'actual_approver',
            'applyId' => 'apply_id',
            'approvalMsg' => 'approval_msg',
            'approvalTime' => 'approval_time',
            'approverName' => 'approver_name',
            'changeType' => 'change_type',
            'createUser' => 'create_user',
            'objectId' => 'object_id',
            'objectName' => 'object_name',
            'objectType' => 'object_type',
            'status' => 'status',
            'submitTime' => 'submit_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actualApprover  当前审批人。
    * applyId  审批单ID。
    * approvalMsg  审核信息。
    * approvalTime  审批时间。
    * approverName  审批人。
    * changeType  作业或脚本变更类型：修改或者删除。
    * createUser  申请人。
    * objectId  审批对象ID。
    * objectName  作业或者脚本名称。
    * objectType  审批对象类型：作业或者脚本。
    * status  审批状态。
    * submitTime  审批提交时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'actualApprover' => 'setActualApprover',
            'applyId' => 'setApplyId',
            'approvalMsg' => 'setApprovalMsg',
            'approvalTime' => 'setApprovalTime',
            'approverName' => 'setApproverName',
            'changeType' => 'setChangeType',
            'createUser' => 'setCreateUser',
            'objectId' => 'setObjectId',
            'objectName' => 'setObjectName',
            'objectType' => 'setObjectType',
            'status' => 'setStatus',
            'submitTime' => 'setSubmitTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actualApprover  当前审批人。
    * applyId  审批单ID。
    * approvalMsg  审核信息。
    * approvalTime  审批时间。
    * approverName  审批人。
    * changeType  作业或脚本变更类型：修改或者删除。
    * createUser  申请人。
    * objectId  审批对象ID。
    * objectName  作业或者脚本名称。
    * objectType  审批对象类型：作业或者脚本。
    * status  审批状态。
    * submitTime  审批提交时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'actualApprover' => 'getActualApprover',
            'applyId' => 'getApplyId',
            'approvalMsg' => 'getApprovalMsg',
            'approvalTime' => 'getApprovalTime',
            'approverName' => 'getApproverName',
            'changeType' => 'getChangeType',
            'createUser' => 'getCreateUser',
            'objectId' => 'getObjectId',
            'objectName' => 'getObjectName',
            'objectType' => 'getObjectType',
            'status' => 'getStatus',
            'submitTime' => 'getSubmitTime'
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
        $this->container['actualApprover'] = isset($data['actualApprover']) ? $data['actualApprover'] : null;
        $this->container['applyId'] = isset($data['applyId']) ? $data['applyId'] : null;
        $this->container['approvalMsg'] = isset($data['approvalMsg']) ? $data['approvalMsg'] : null;
        $this->container['approvalTime'] = isset($data['approvalTime']) ? $data['approvalTime'] : null;
        $this->container['approverName'] = isset($data['approverName']) ? $data['approverName'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['submitTime'] = isset($data['submitTime']) ? $data['submitTime'] : null;
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
    * Gets actualApprover
    *  当前审批人。
    *
    * @return string|null
    */
    public function getActualApprover()
    {
        return $this->container['actualApprover'];
    }

    /**
    * Sets actualApprover
    *
    * @param string|null $actualApprover 当前审批人。
    *
    * @return $this
    */
    public function setActualApprover($actualApprover)
    {
        $this->container['actualApprover'] = $actualApprover;
        return $this;
    }

    /**
    * Gets applyId
    *  审批单ID。
    *
    * @return string|null
    */
    public function getApplyId()
    {
        return $this->container['applyId'];
    }

    /**
    * Sets applyId
    *
    * @param string|null $applyId 审批单ID。
    *
    * @return $this
    */
    public function setApplyId($applyId)
    {
        $this->container['applyId'] = $applyId;
        return $this;
    }

    /**
    * Gets approvalMsg
    *  审核信息。
    *
    * @return string|null
    */
    public function getApprovalMsg()
    {
        return $this->container['approvalMsg'];
    }

    /**
    * Sets approvalMsg
    *
    * @param string|null $approvalMsg 审核信息。
    *
    * @return $this
    */
    public function setApprovalMsg($approvalMsg)
    {
        $this->container['approvalMsg'] = $approvalMsg;
        return $this;
    }

    /**
    * Gets approvalTime
    *  审批时间。
    *
    * @return int|null
    */
    public function getApprovalTime()
    {
        return $this->container['approvalTime'];
    }

    /**
    * Sets approvalTime
    *
    * @param int|null $approvalTime 审批时间。
    *
    * @return $this
    */
    public function setApprovalTime($approvalTime)
    {
        $this->container['approvalTime'] = $approvalTime;
        return $this;
    }

    /**
    * Gets approverName
    *  审批人。
    *
    * @return string|null
    */
    public function getApproverName()
    {
        return $this->container['approverName'];
    }

    /**
    * Sets approverName
    *
    * @param string|null $approverName 审批人。
    *
    * @return $this
    */
    public function setApproverName($approverName)
    {
        $this->container['approverName'] = $approverName;
        return $this;
    }

    /**
    * Gets changeType
    *  作业或脚本变更类型：修改或者删除。
    *
    * @return string|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string|null $changeType 作业或脚本变更类型：修改或者删除。
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets createUser
    *  申请人。
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
    * @param string|null $createUser 申请人。
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets objectId
    *  审批对象ID。
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 审批对象ID。
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets objectName
    *  作业或者脚本名称。
    *
    * @return string|null
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string|null $objectName 作业或者脚本名称。
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets objectType
    *  审批对象类型：作业或者脚本。
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType 审批对象类型：作业或者脚本。
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets status
    *  审批状态。
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
    * @param string|null $status 审批状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets submitTime
    *  审批提交时间。
    *
    * @return int|null
    */
    public function getSubmitTime()
    {
        return $this->container['submitTime'];
    }

    /**
    * Sets submitTime
    *
    * @param int|null $submitTime 审批提交时间。
    *
    * @return $this
    */
    public function setSubmitTime($submitTime)
    {
        $this->container['submitTime'] = $submitTime;
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

