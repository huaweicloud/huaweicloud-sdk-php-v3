<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  permission的ID。
    * permission  permission详情。
    * permissionType  终端节点服务白名单类型。
    * createdAt  白名单的添加时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'permission' => 'string',
            'permissionType' => 'string',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  permission的ID。
    * permission  permission详情。
    * permissionType  终端节点服务白名单类型。
    * createdAt  白名单的添加时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'permission' => null,
        'permissionType' => null,
        'createdAt' => null
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
    * id  permission的ID。
    * permission  permission详情。
    * permissionType  终端节点服务白名单类型。
    * createdAt  白名单的添加时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'permission' => 'permission',
            'permissionType' => 'permission_type',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  permission的ID。
    * permission  permission详情。
    * permissionType  终端节点服务白名单类型。
    * createdAt  白名单的添加时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'permission' => 'setPermission',
            'permissionType' => 'setPermissionType',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  permission的ID。
    * permission  permission详情。
    * permissionType  终端节点服务白名单类型。
    * createdAt  白名单的添加时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'permission' => 'getPermission',
            'permissionType' => 'getPermissionType',
            'createdAt' => 'getCreatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
        $this->container['permissionType'] = isset($data['permissionType']) ? $data['permissionType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
    * Gets id
    *  permission的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id permission的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets permission
    *  permission详情。
    *
    * @return string|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param string|null $permission permission详情。
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
        return $this;
    }

    /**
    * Gets permissionType
    *  终端节点服务白名单类型。
    *
    * @return string|null
    */
    public function getPermissionType()
    {
        return $this->container['permissionType'];
    }

    /**
    * Sets permissionType
    *
    * @param string|null $permissionType 终端节点服务白名单类型。
    *
    * @return $this
    */
    public function setPermissionType($permissionType)
    {
        $this->container['permissionType'] = $permissionType;
        return $this;
    }

    /**
    * Gets createdAt
    *  白名单的添加时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 白名单的添加时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

