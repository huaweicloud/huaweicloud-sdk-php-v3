<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthorizationPrivilege implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthorizationPrivilege';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * object  授权对象，和赋权API中的“object”对应。
    * isAdmin  判断用户是否为管理员。
    * userName  用户名称，即该用户在当前数据库上有权限。
    * privileges  该用户在数据库上的权限。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'object' => 'string',
            'isAdmin' => 'bool',
            'userName' => 'string',
            'privileges' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * object  授权对象，和赋权API中的“object”对应。
    * isAdmin  判断用户是否为管理员。
    * userName  用户名称，即该用户在当前数据库上有权限。
    * privileges  该用户在数据库上的权限。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'object' => null,
        'isAdmin' => null,
        'userName' => null,
        'privileges' => null
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
    * object  授权对象，和赋权API中的“object”对应。
    * isAdmin  判断用户是否为管理员。
    * userName  用户名称，即该用户在当前数据库上有权限。
    * privileges  该用户在数据库上的权限。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'object' => 'object',
            'isAdmin' => 'is_admin',
            'userName' => 'user_name',
            'privileges' => 'privileges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * object  授权对象，和赋权API中的“object”对应。
    * isAdmin  判断用户是否为管理员。
    * userName  用户名称，即该用户在当前数据库上有权限。
    * privileges  该用户在数据库上的权限。
    *
    * @var string[]
    */
    protected static $setters = [
            'object' => 'setObject',
            'isAdmin' => 'setIsAdmin',
            'userName' => 'setUserName',
            'privileges' => 'setPrivileges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * object  授权对象，和赋权API中的“object”对应。
    * isAdmin  判断用户是否为管理员。
    * userName  用户名称，即该用户在当前数据库上有权限。
    * privileges  该用户在数据库上的权限。
    *
    * @var string[]
    */
    protected static $getters = [
            'object' => 'getObject',
            'isAdmin' => 'getIsAdmin',
            'userName' => 'getUserName',
            'privileges' => 'getPrivileges'
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
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['isAdmin'] = isset($data['isAdmin']) ? $data['isAdmin'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
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
    * Gets object
    *  授权对象，和赋权API中的“object”对应。
    *
    * @return string|null
    */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
    * Sets object
    *
    * @param string|null $object 授权对象，和赋权API中的“object”对应。
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
        return $this;
    }

    /**
    * Gets isAdmin
    *  判断用户是否为管理员。
    *
    * @return bool|null
    */
    public function getIsAdmin()
    {
        return $this->container['isAdmin'];
    }

    /**
    * Sets isAdmin
    *
    * @param bool|null $isAdmin 判断用户是否为管理员。
    *
    * @return $this
    */
    public function setIsAdmin($isAdmin)
    {
        $this->container['isAdmin'] = $isAdmin;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称，即该用户在当前数据库上有权限。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称，即该用户在当前数据库上有权限。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets privileges
    *  该用户在数据库上的权限。
    *
    * @return string[]|null
    */
    public function getPrivileges()
    {
        return $this->container['privileges'];
    }

    /**
    * Sets privileges
    *
    * @param string[]|null $privileges 该用户在数据库上的权限。
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
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

