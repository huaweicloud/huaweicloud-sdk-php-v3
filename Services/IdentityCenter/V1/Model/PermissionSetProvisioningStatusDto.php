<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionSetProvisioningStatusDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionSetProvisioningStatusDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  账号的唯一身份标识
    * createdDate  权限集创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * requestId  请求唯一标识
    * status  权限集授权状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'createdDate' => 'string',
            'failureReason' => 'string',
            'permissionSetId' => 'string',
            'requestId' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  账号的唯一身份标识
    * createdDate  权限集创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * requestId  请求唯一标识
    * status  权限集授权状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'createdDate' => null,
        'failureReason' => null,
        'permissionSetId' => null,
        'requestId' => null,
        'status' => null
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
    * accountId  账号的唯一身份标识
    * createdDate  权限集创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * requestId  请求唯一标识
    * status  权限集授权状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'createdDate' => 'created_date',
            'failureReason' => 'failure_reason',
            'permissionSetId' => 'permission_set_id',
            'requestId' => 'request_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  账号的唯一身份标识
    * createdDate  权限集创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * requestId  请求唯一标识
    * status  权限集授权状态
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'createdDate' => 'setCreatedDate',
            'failureReason' => 'setFailureReason',
            'permissionSetId' => 'setPermissionSetId',
            'requestId' => 'setRequestId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  账号的唯一身份标识
    * createdDate  权限集创建日期
    * failureReason  失败原因
    * permissionSetId  权限集唯一标识
    * requestId  请求唯一标识
    * status  权限集授权状态
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'createdDate' => 'getCreatedDate',
            'failureReason' => 'getFailureReason',
            'permissionSetId' => 'getPermissionSetId',
            'requestId' => 'getRequestId',
            'status' => 'getStatus'
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
    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_SUCCEEDED = 'SUCCEEDED';
    

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
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['failureReason'] = isset($data['failureReason']) ? $data['failureReason'] : null;
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountId']) && !preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['accountId'])) {
                $invalidProperties[] = "invalid value for 'accountId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            if (!is_null($this->container['permissionSetId']) && !preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['permissionSetId'])) {
                $invalidProperties[] = "invalid value for 'permissionSetId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['requestId']) && !preg_match("/\\b[0-9a-f]{8}\\b-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-\\b[0-9a-f]{12}\\b/", $this->container['requestId'])) {
                $invalidProperties[] = "invalid value for 'requestId', must be conform to the pattern /\\b[0-9a-f]{8}\\b-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-\\b[0-9a-f]{12}\\b/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets accountId
    *  账号的唯一身份标识
    *
    * @return string|null
    */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
    * Sets accountId
    *
    * @param string|null $accountId 账号的唯一身份标识
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets createdDate
    *  权限集创建日期
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 权限集创建日期
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

