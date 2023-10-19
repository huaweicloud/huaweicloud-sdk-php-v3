<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AclAccountResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AclAccountResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  账号ID
    * accountName  账号名
    * accountType  账号类型
    * instanceId  账号所属实例ID
    * status  ACL账号状态 取值范围： - CREATING：账号创建中。 - AVAILABLE：账号可用。 - CREATEFAILED：账号创建失败。 - DELETED：账号已删除。 - DELETEFAILED：账号删除失败。 - DELETING：账号删除中。 - UPDATING：账号更新中。 - ERROR：账号异常。
    * accountRole  账号权限
    * description  账号描述
    * errorCode  错误码（暂未使用，赋值为null）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'accountName' => 'string',
            'accountType' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'accountRole' => 'string',
            'description' => 'string',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  账号ID
    * accountName  账号名
    * accountType  账号类型
    * instanceId  账号所属实例ID
    * status  ACL账号状态 取值范围： - CREATING：账号创建中。 - AVAILABLE：账号可用。 - CREATEFAILED：账号创建失败。 - DELETED：账号已删除。 - DELETEFAILED：账号删除失败。 - DELETING：账号删除中。 - UPDATING：账号更新中。 - ERROR：账号异常。
    * accountRole  账号权限
    * description  账号描述
    * errorCode  错误码（暂未使用，赋值为null）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => 'String',
        'accountName' => null,
        'accountType' => null,
        'instanceId' => 'String',
        'status' => null,
        'accountRole' => null,
        'description' => null,
        'errorCode' => null
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
    * accountId  账号ID
    * accountName  账号名
    * accountType  账号类型
    * instanceId  账号所属实例ID
    * status  ACL账号状态 取值范围： - CREATING：账号创建中。 - AVAILABLE：账号可用。 - CREATEFAILED：账号创建失败。 - DELETED：账号已删除。 - DELETEFAILED：账号删除失败。 - DELETING：账号删除中。 - UPDATING：账号更新中。 - ERROR：账号异常。
    * accountRole  账号权限
    * description  账号描述
    * errorCode  错误码（暂未使用，赋值为null）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'accountName' => 'account_name',
            'accountType' => 'account_type',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'accountRole' => 'account_role',
            'description' => 'description',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  账号ID
    * accountName  账号名
    * accountType  账号类型
    * instanceId  账号所属实例ID
    * status  ACL账号状态 取值范围： - CREATING：账号创建中。 - AVAILABLE：账号可用。 - CREATEFAILED：账号创建失败。 - DELETED：账号已删除。 - DELETEFAILED：账号删除失败。 - DELETING：账号删除中。 - UPDATING：账号更新中。 - ERROR：账号异常。
    * accountRole  账号权限
    * description  账号描述
    * errorCode  错误码（暂未使用，赋值为null）
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'accountName' => 'setAccountName',
            'accountType' => 'setAccountType',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'accountRole' => 'setAccountRole',
            'description' => 'setDescription',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  账号ID
    * accountName  账号名
    * accountType  账号类型
    * instanceId  账号所属实例ID
    * status  ACL账号状态 取值范围： - CREATING：账号创建中。 - AVAILABLE：账号可用。 - CREATEFAILED：账号创建失败。 - DELETED：账号已删除。 - DELETEFAILED：账号删除失败。 - DELETING：账号删除中。 - UPDATING：账号更新中。 - ERROR：账号异常。
    * accountRole  账号权限
    * description  账号描述
    * errorCode  错误码（暂未使用，赋值为null）
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'accountName' => 'getAccountName',
            'accountType' => 'getAccountType',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'accountRole' => 'getAccountRole',
            'description' => 'getDescription',
            'errorCode' => 'getErrorCode'
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
    const ACCOUNT_TYPE_NORMAL = 'normal';
    const ACCOUNT_TYPE__DEFAULT = 'default';
    const STATUS_CREATING = 'CREATING';
    const STATUS_AVAILABLE = 'AVAILABLE';
    const STATUS_CREATEFAILED = 'CREATEFAILED';
    const STATUS_DELETED = 'DELETED';
    const STATUS_DELETEFAILED = 'DELETEFAILED';
    const STATUS_DELETING = 'DELETING';
    const STATUS_UPDATING = 'UPDATING';
    const STATUS_ERROR = 'ERROR';
    const ACCOUNT_ROLE_READ = 'read';
    const ACCOUNT_ROLE_WRITE = 'write';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_NORMAL,
            self::ACCOUNT_TYPE__DEFAULT,
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
            self::STATUS_CREATING,
            self::STATUS_AVAILABLE,
            self::STATUS_CREATEFAILED,
            self::STATUS_DELETED,
            self::STATUS_DELETEFAILED,
            self::STATUS_DELETING,
            self::STATUS_UPDATING,
            self::STATUS_ERROR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccountRoleAllowableValues()
    {
        return [
            self::ACCOUNT_ROLE_READ,
            self::ACCOUNT_ROLE_WRITE,
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
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['accountRole'] = isset($data['accountRole']) ? $data['accountRole'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) > 36)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['accountId']) && (mb_strlen($this->container['accountId']) < 0)) {
                $invalidProperties[] = "invalid value for 'accountId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAccountTypeAllowableValues();
                if (!is_null($this->container['accountType']) && !in_array($this->container['accountType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accountType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAccountRoleAllowableValues();
                if (!is_null($this->container['accountRole']) && !in_array($this->container['accountRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accountRole', must be one of '%s'",
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
    *  账号ID
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
    * @param string|null $accountId 账号ID
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets accountName
    *  账号名
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName 账号名
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets accountType
    *  账号类型
    *
    * @return string|null
    */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
    * Sets accountType
    *
    * @param string|null $accountType 账号类型
    *
    * @return $this
    */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;
        return $this;
    }

    /**
    * Gets instanceId
    *  账号所属实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 账号所属实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  ACL账号状态 取值范围： - CREATING：账号创建中。 - AVAILABLE：账号可用。 - CREATEFAILED：账号创建失败。 - DELETED：账号已删除。 - DELETEFAILED：账号删除失败。 - DELETING：账号删除中。 - UPDATING：账号更新中。 - ERROR：账号异常。
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
    * @param string|null $status ACL账号状态 取值范围： - CREATING：账号创建中。 - AVAILABLE：账号可用。 - CREATEFAILED：账号创建失败。 - DELETED：账号已删除。 - DELETEFAILED：账号删除失败。 - DELETING：账号删除中。 - UPDATING：账号更新中。 - ERROR：账号异常。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets accountRole
    *  账号权限
    *
    * @return string|null
    */
    public function getAccountRole()
    {
        return $this->container['accountRole'];
    }

    /**
    * Sets accountRole
    *
    * @param string|null $accountRole 账号权限
    *
    * @return $this
    */
    public function setAccountRole($accountRole)
    {
        $this->container['accountRole'] = $accountRole;
        return $this;
    }

    /**
    * Gets description
    *  账号描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 账号描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码（暂未使用，赋值为null）
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码（暂未使用，赋值为null）
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
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

