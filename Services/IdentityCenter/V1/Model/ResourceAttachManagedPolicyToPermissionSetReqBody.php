<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceAttachManagedPolicyToPermissionSetReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceAttachManagedPolicyToPermissionSetReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * managedRoleId  IAM系统策略唯一标识
    * managedRoleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'managedRoleId' => 'string',
            'managedRoleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * managedRoleId  IAM系统策略唯一标识
    * managedRoleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'managedRoleId' => null,
        'managedRoleName' => null
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
    * managedRoleId  IAM系统策略唯一标识
    * managedRoleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'managedRoleId' => 'managed_role_id',
            'managedRoleName' => 'managed_role_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * managedRoleId  IAM系统策略唯一标识
    * managedRoleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $setters = [
            'managedRoleId' => 'setManagedRoleId',
            'managedRoleName' => 'setManagedRoleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * managedRoleId  IAM系统策略唯一标识
    * managedRoleName  IAM系统策略名称
    *
    * @var string[]
    */
    protected static $getters = [
            'managedRoleId' => 'getManagedRoleId',
            'managedRoleName' => 'getManagedRoleName'
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
        $this->container['managedRoleId'] = isset($data['managedRoleId']) ? $data['managedRoleId'] : null;
        $this->container['managedRoleName'] = isset($data['managedRoleName']) ? $data['managedRoleName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['managedRoleId'] === null) {
            $invalidProperties[] = "'managedRoleId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['managedRoleId'])) {
                $invalidProperties[] = "invalid value for 'managedRoleId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            if (!is_null($this->container['managedRoleName']) && (mb_strlen($this->container['managedRoleName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managedRoleName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managedRoleName']) && (mb_strlen($this->container['managedRoleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managedRoleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managedRoleName']) && !preg_match("/^[\\w+=_.@-]+$/", $this->container['managedRoleName'])) {
                $invalidProperties[] = "invalid value for 'managedRoleName', must be conform to the pattern /^[\\w+=_.@-]+$/.";
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
    * Gets managedRoleId
    *  IAM系统策略唯一标识
    *
    * @return string
    */
    public function getManagedRoleId()
    {
        return $this->container['managedRoleId'];
    }

    /**
    * Sets managedRoleId
    *
    * @param string $managedRoleId IAM系统策略唯一标识
    *
    * @return $this
    */
    public function setManagedRoleId($managedRoleId)
    {
        $this->container['managedRoleId'] = $managedRoleId;
        return $this;
    }

    /**
    * Gets managedRoleName
    *  IAM系统策略名称
    *
    * @return string|null
    */
    public function getManagedRoleName()
    {
        return $this->container['managedRoleName'];
    }

    /**
    * Sets managedRoleName
    *
    * @param string|null $managedRoleName IAM系统策略名称
    *
    * @return $this
    */
    public function setManagedRoleName($managedRoleName)
    {
        $this->container['managedRoleName'] = $managedRoleName;
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

