<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteAccountAssignmentReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteAccountAssignmentReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  实体类型.
    * targetId  目标账号身份标识
    * targetType  目标类型.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionSetId' => 'string',
            'principalId' => 'string',
            'principalType' => 'string',
            'targetId' => 'string',
            'targetType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  实体类型.
    * targetId  目标账号身份标识
    * targetType  目标类型.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionSetId' => null,
        'principalId' => null,
        'principalType' => null,
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
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  实体类型.
    * targetId  目标账号身份标识
    * targetType  目标类型.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionSetId' => 'permission_set_id',
            'principalId' => 'principal_id',
            'principalType' => 'principal_type',
            'targetId' => 'target_id',
            'targetType' => 'target_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  实体类型.
    * targetId  目标账号身份标识
    * targetType  目标类型.
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionSetId' => 'setPermissionSetId',
            'principalId' => 'setPrincipalId',
            'principalType' => 'setPrincipalType',
            'targetId' => 'setTargetId',
            'targetType' => 'setTargetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionSetId  权限集唯一标识
    * principalId  IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
    * principalType  实体类型.
    * targetId  目标账号身份标识
    * targetType  目标类型.
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionSetId' => 'getPermissionSetId',
            'principalId' => 'getPrincipalId',
            'principalType' => 'getPrincipalType',
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
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['principalId'] = isset($data['principalId']) ? $data['principalId'] : null;
        $this->container['principalType'] = isset($data['principalType']) ? $data['principalType'] : null;
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
        if ($this->container['permissionSetId'] === null) {
            $invalidProperties[] = "'permissionSetId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['permissionSetId'])) {
                $invalidProperties[] = "invalid value for 'permissionSetId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
        if ($this->container['principalId'] === null) {
            $invalidProperties[] = "'principalId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['principalId'])) {
                $invalidProperties[] = "invalid value for 'principalId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
        if ($this->container['principalType'] === null) {
            $invalidProperties[] = "'principalType' can't be null";
        }
            $allowedValues = $this->getPrincipalTypeAllowableValues();
                if (!is_null($this->container['principalType']) && !in_array($this->container['principalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'principalType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['targetId'] === null) {
            $invalidProperties[] = "'targetId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['targetId'])) {
                $invalidProperties[] = "invalid value for 'targetId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
        if ($this->container['targetType'] === null) {
            $invalidProperties[] = "'targetType' can't be null";
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
    * Gets permissionSetId
    *  权限集唯一标识
    *
    * @return string
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string $permissionSetId 权限集唯一标识
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
    * @return string
    */
    public function getPrincipalId()
    {
        return $this->container['principalId'];
    }

    /**
    * Sets principalId
    *
    * @param string $principalId IAM身份中心中的一个实体身份唯一标识，例如用户或用户组
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
    *  实体类型.
    *
    * @return string
    */
    public function getPrincipalType()
    {
        return $this->container['principalType'];
    }

    /**
    * Sets principalType
    *
    * @param string $principalType 实体类型.
    *
    * @return $this
    */
    public function setPrincipalType($principalType)
    {
        $this->container['principalType'] = $principalType;
        return $this;
    }

    /**
    * Gets targetId
    *  目标账号身份标识
    *
    * @return string
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string $targetId 目标账号身份标识
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
    *  目标类型.
    *
    * @return string
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string $targetType 目标类型.
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

