<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountAssignmentOperationStatusDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountAssignmentOperationStatusDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdDate  创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  操作的实体类型
    * requestId  请求唯一标识
    * status  权限集授权状态
    * targetId  目标实体的唯一标识
    * targetType  实体类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdDate' => 'int',
            'failureReason' => 'string',
            'permissionSetId' => 'string',
            'principalId' => 'string',
            'principalType' => 'string',
            'requestId' => 'string',
            'status' => 'string',
            'targetId' => 'string',
            'targetType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdDate  创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  操作的实体类型
    * requestId  请求唯一标识
    * status  权限集授权状态
    * targetId  目标实体的唯一标识
    * targetType  实体类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdDate' => 'int64',
        'failureReason' => null,
        'permissionSetId' => null,
        'principalId' => null,
        'principalType' => null,
        'requestId' => null,
        'status' => null,
        'targetId' => null,
        'targetType' => null
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
    * createdDate  创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  操作的实体类型
    * requestId  请求唯一标识
    * status  权限集授权状态
    * targetId  目标实体的唯一标识
    * targetType  实体类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdDate' => 'created_date',
            'failureReason' => 'failure_reason',
            'permissionSetId' => 'permission_set_id',
            'principalId' => 'principal_id',
            'principalType' => 'principal_type',
            'requestId' => 'request_id',
            'status' => 'status',
            'targetId' => 'target_id',
            'targetType' => 'target_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdDate  创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  操作的实体类型
    * requestId  请求唯一标识
    * status  权限集授权状态
    * targetId  目标实体的唯一标识
    * targetType  实体类型
    *
    * @var string[]
    */
    protected static $setters = [
            'createdDate' => 'setCreatedDate',
            'failureReason' => 'setFailureReason',
            'permissionSetId' => 'setPermissionSetId',
            'principalId' => 'setPrincipalId',
            'principalType' => 'setPrincipalType',
            'requestId' => 'setRequestId',
            'status' => 'setStatus',
            'targetId' => 'setTargetId',
            'targetType' => 'setTargetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdDate  创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  操作的实体类型
    * requestId  请求唯一标识
    * status  权限集授权状态
    * targetId  目标实体的唯一标识
    * targetType  实体类型
    *
    * @var string[]
    */
    protected static $getters = [
            'createdDate' => 'getCreatedDate',
            'failureReason' => 'getFailureReason',
            'permissionSetId' => 'getPermissionSetId',
            'principalId' => 'getPrincipalId',
            'principalType' => 'getPrincipalType',
            'requestId' => 'getRequestId',
            'status' => 'getStatus',
            'targetId' => 'getTargetId',
            'targetType' => 'getTargetType'
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
    const PRINCIPAL_TYPE_USER = 'USER';
    const PRINCIPAL_TYPE_GROUP = 'GROUP';
    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    const TARGET_TYPE_ACCOUNT = 'ACCOUNT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPrincipalTypeAllowableValues()
    {
        return [
            self::PRINCIPAL_TYPE_USER,
            self::PRINCIPAL_TYPE_GROUP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_FAILED,
            self::STATUS_SUCCEEDED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_ACCOUNT,
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
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['failureReason'] = isset($data['failureReason']) ? $data['failureReason'] : null;
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['principalId'] = isset($data['principalId']) ? $data['principalId'] : null;
        $this->container['principalType'] = isset($data['principalType']) ? $data['principalType'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPrincipalTypeAllowableValues();
                if (!is_null($this->container['principalType']) && !in_array($this->container['principalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'principalType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTargetTypeAllowableValues();
                if (!is_null($this->container['targetType']) && !in_array($this->container['targetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'targetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets createdDate
    *  创建日期
    *
    * @return int|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param int|null $createdDate 创建日期
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets failureReason
    *  失败原因
    *
    * @return string|null
    */
    public function getFailureReason()
    {
        return $this->container['failureReason'];
    }

    /**
    * Sets failureReason
    *
    * @param string|null $failureReason 失败原因
    *
    * @return $this
    */
    public function setFailureReason($failureReason)
    {
        $this->container['failureReason'] = $failureReason;
        return $this;
    }

    /**
    * Gets permissionSetId
    *  权限集唯一标识
    *
    * @return string|null
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string|null $permissionSetId 权限集唯一标识
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
        return $this;
    }

    /**
    * Gets principalId
    *  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    *
    * @return string|null
    */
    public function getPrincipalId()
    {
        return $this->container['principalId'];
    }

    /**
    * Sets principalId
    *
    * @param string|null $principalId IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    *
    * @return $this
    */
    public function setPrincipalId($principalId)
    {
        $this->container['principalId'] = $principalId;
        return $this;
    }

    /**
    * Gets principalType
    *  操作的实体类型
    *
    * @return string|null
    */
    public function getPrincipalType()
    {
        return $this->container['principalType'];
    }

    /**
    * Sets principalType
    *
    * @param string|null $principalType 操作的实体类型
    *
    * @return $this
    */
    public function setPrincipalType($principalType)
    {
        $this->container['principalType'] = $principalType;
        return $this;
    }

    /**
    * Gets requestId
    *  请求唯一标识
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求唯一标识
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets status
    *  权限集授权状态
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
    * @param string|null $status 权限集授权状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets targetId
    *  目标实体的唯一标识
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId 目标实体的唯一标识
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets targetType
    *  实体类型
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 实体类型
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
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

