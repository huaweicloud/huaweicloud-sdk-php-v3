<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountAssignmentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountAssignmentDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountId  账号的唯一标识
    * permissionSetId  权限集唯一标识.
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  绑定的实体类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountId' => 'string',
            'permissionSetId' => 'string',
            'principalId' => 'string',
            'principalType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountId  账号的唯一标识
    * permissionSetId  权限集唯一标识.
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  绑定的实体类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountId' => null,
        'permissionSetId' => null,
        'principalId' => null,
        'principalType' => null
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
    * accountId  账号的唯一标识
    * permissionSetId  权限集唯一标识.
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  绑定的实体类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountId' => 'account_id',
            'permissionSetId' => 'permission_set_id',
            'principalId' => 'principal_id',
            'principalType' => 'principal_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountId  账号的唯一标识
    * permissionSetId  权限集唯一标识.
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  绑定的实体类型
    *
    * @var string[]
    */
    protected static $setters = [
            'accountId' => 'setAccountId',
            'permissionSetId' => 'setPermissionSetId',
            'principalId' => 'setPrincipalId',
            'principalType' => 'setPrincipalType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountId  账号的唯一标识
    * permissionSetId  权限集唯一标识.
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  绑定的实体类型
    *
    * @var string[]
    */
    protected static $getters = [
            'accountId' => 'getAccountId',
            'permissionSetId' => 'getPermissionSetId',
            'principalId' => 'getPrincipalId',
            'principalType' => 'getPrincipalType'
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
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['principalId'] = isset($data['principalId']) ? $data['principalId'] : null;
        $this->container['principalType'] = isset($data['principalType']) ? $data['principalType'] : null;
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
            $allowedValues = $this->getPrincipalTypeAllowableValues();
                if (!is_null($this->container['principalType']) && !in_array($this->container['principalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'principalType', must be one of '%s'",
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
    *  账号的唯一标识
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
    * @param string|null $accountId 账号的唯一标识
    *
    * @return $this
    */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;
        return $this;
    }

    /**
    * Gets permissionSetId
    *  权限集唯一标识.
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
    * @param string|null $permissionSetId 权限集唯一标识.
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
    *  绑定的实体类型
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
    * @param string|null $principalType 绑定的实体类型
    *
    * @return $this
    */
    public function setPrincipalType($principalType)
    {
        $this->container['principalType'] = $principalType;
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

