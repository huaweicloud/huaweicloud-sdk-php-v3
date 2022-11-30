<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddOrRemoveServicePermissionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddOrRemoveServicePermissionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissions  permission列表。 权限格式为iam:domain::6e9dfd51d1124e8d8498dce894923a0d或“*”， “*”表示所有用户的终端节点可连接。 其中6e9dfd51d1124e8d8498dce894923a0d为可连接的用户domian_id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissions  permission列表。 权限格式为iam:domain::6e9dfd51d1124e8d8498dce894923a0d或“*”， “*”表示所有用户的终端节点可连接。 其中6e9dfd51d1124e8d8498dce894923a0d为可连接的用户domian_id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissions' => null
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
    * permissions  permission列表。 权限格式为iam:domain::6e9dfd51d1124e8d8498dce894923a0d或“*”， “*”表示所有用户的终端节点可连接。 其中6e9dfd51d1124e8d8498dce894923a0d为可连接的用户domian_id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissions' => 'permissions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissions  permission列表。 权限格式为iam:domain::6e9dfd51d1124e8d8498dce894923a0d或“*”， “*”表示所有用户的终端节点可连接。 其中6e9dfd51d1124e8d8498dce894923a0d为可连接的用户domian_id。
    *
    * @var string[]
    */
    protected static $setters = [
            'permissions' => 'setPermissions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissions  permission列表。 权限格式为iam:domain::6e9dfd51d1124e8d8498dce894923a0d或“*”， “*”表示所有用户的终端节点可连接。 其中6e9dfd51d1124e8d8498dce894923a0d为可连接的用户domian_id。
    *
    * @var string[]
    */
    protected static $getters = [
            'permissions' => 'getPermissions'
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
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
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
    * Gets permissions
    *  permission列表。 权限格式为iam:domain::6e9dfd51d1124e8d8498dce894923a0d或“*”， “*”表示所有用户的终端节点可连接。 其中6e9dfd51d1124e8d8498dce894923a0d为可连接的用户domian_id。
    *
    * @return string[]|null
    */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
    * Sets permissions
    *
    * @param string[]|null $permissions permission列表。 权限格式为iam:domain::6e9dfd51d1124e8d8498dce894923a0d或“*”， “*”表示所有用户的终端节点可连接。 其中6e9dfd51d1124e8d8498dce894923a0d为可连接的用户domian_id。
    *
    * @return $this
    */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;
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

