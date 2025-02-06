<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceAttachedManagedPolicyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceAttachedManagedPolicyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  IAM系统策略唯一标识
    * roleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'string',
            'roleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  IAM系统策略唯一标识
    * roleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'roleName' => null
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
    * roleId  IAM系统策略唯一标识
    * roleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'roleName' => 'role_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  IAM系统策略唯一标识
    * roleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  IAM系统策略唯一标识
    * roleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName'
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
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 2048)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 20)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['roleId']) && !preg_match("/iam::system:policy\/[\\p{L}\\p{M}\\p{Z}\\p{S}\\p{N}\\p{P}]+/", $this->container['roleId'])) {
                $invalidProperties[] = "invalid value for 'roleId', must be conform to the pattern /iam::system:policy\/[\\p{L}\\p{M}\\p{Z}\\p{S}\\p{N}\\p{P}]+/.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) > 100)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be bigger than or equal to 1.";
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
    * Gets roleId
    *  IAM系统策略唯一标识
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId IAM系统策略唯一标识
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets roleName
    *  IAM系统策略名称
    *
    * @return string|null
    */
    public function getRoleName()
    {
        return $this->container['roleName'];
    }

    /**
    * Sets roleName
    *
    * @param string|null $roleName IAM系统策略名称
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
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

