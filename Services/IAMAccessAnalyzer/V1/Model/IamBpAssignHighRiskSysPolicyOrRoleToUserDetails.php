<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IamBpAssignHighRiskSysPolicyOrRoleToUserDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IamBpAssignHighRiskSysPolicyOrRoleToUserDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  用户的唯一标识符（ID）。
    * permissionName  权限名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'string',
            'permissionName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  用户的唯一标识符（ID）。
    * permissionName  权限名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => null,
        'permissionName' => null
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
    * userId  用户的唯一标识符（ID）。
    * permissionName  权限名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'permissionName' => 'permission_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  用户的唯一标识符（ID）。
    * permissionName  权限名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'permissionName' => 'setPermissionName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  用户的唯一标识符（ID）。
    * permissionName  权限名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'permissionName' => 'getPermissionName'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['permissionName'] = isset($data['permissionName']) ? $data['permissionName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
            if ((mb_strlen($this->container['userId']) > 36)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['userId'])) {
                $invalidProperties[] = "invalid value for 'userId', must be conform to the pattern /^[\\w-]+$/.";
            }
        if ($this->container['permissionName'] === null) {
            $invalidProperties[] = "'permissionName' can't be null";
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
    * Gets userId
    *  用户的唯一标识符（ID）。
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 用户的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets permissionName
    *  权限名称。
    *
    * @return string
    */
    public function getPermissionName()
    {
        return $this->container['permissionName'];
    }

    /**
    * Sets permissionName
    *
    * @param string $permissionName 权限名称。
    *
    * @return $this
    */
    public function setPermissionName($permissionName)
    {
        $this->container['permissionName'] = $permissionName;
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

