<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableUserPrivilege implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableUserPrivilege';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAdmin  判断是否为管理用户。
    * object  该用户有权限的对象： “databases.数据库名.tables.表名”，用户在当前表上的权限。 “databases.数据库名.tables.表名.columns.列名”，用户在列上的权限。
    * privileges  该用户在相应object上的权限。
    * userName  拥有该权限的用户名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAdmin' => 'bool',
            'object' => 'string',
            'privileges' => 'string[]',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAdmin  判断是否为管理用户。
    * object  该用户有权限的对象： “databases.数据库名.tables.表名”，用户在当前表上的权限。 “databases.数据库名.tables.表名.columns.列名”，用户在列上的权限。
    * privileges  该用户在相应object上的权限。
    * userName  拥有该权限的用户名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAdmin' => null,
        'object' => null,
        'privileges' => null,
        'userName' => null
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
    * isAdmin  判断是否为管理用户。
    * object  该用户有权限的对象： “databases.数据库名.tables.表名”，用户在当前表上的权限。 “databases.数据库名.tables.表名.columns.列名”，用户在列上的权限。
    * privileges  该用户在相应object上的权限。
    * userName  拥有该权限的用户名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAdmin' => 'is_admin',
            'object' => 'object',
            'privileges' => 'privileges',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAdmin  判断是否为管理用户。
    * object  该用户有权限的对象： “databases.数据库名.tables.表名”，用户在当前表上的权限。 “databases.数据库名.tables.表名.columns.列名”，用户在列上的权限。
    * privileges  该用户在相应object上的权限。
    * userName  拥有该权限的用户名。
    *
    * @var string[]
    */
    protected static $setters = [
            'isAdmin' => 'setIsAdmin',
            'object' => 'setObject',
            'privileges' => 'setPrivileges',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAdmin  判断是否为管理用户。
    * object  该用户有权限的对象： “databases.数据库名.tables.表名”，用户在当前表上的权限。 “databases.数据库名.tables.表名.columns.列名”，用户在列上的权限。
    * privileges  该用户在相应object上的权限。
    * userName  拥有该权限的用户名。
    *
    * @var string[]
    */
    protected static $getters = [
            'isAdmin' => 'getIsAdmin',
            'object' => 'getObject',
            'privileges' => 'getPrivileges',
            'userName' => 'getUserName'
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
        $this->container['isAdmin'] = isset($data['isAdmin']) ? $data['isAdmin'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['privileges'] = isset($data['privileges']) ? $data['privileges'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
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
    * Gets isAdmin
    *  判断是否为管理用户。
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
    * @param bool|null $isAdmin 判断是否为管理用户。
    *
    * @return $this
    */
    public function setIsAdmin($isAdmin)
    {
        $this->container['isAdmin'] = $isAdmin;
        return $this;
    }

    /**
    * Gets object
    *  该用户有权限的对象： “databases.数据库名.tables.表名”，用户在当前表上的权限。 “databases.数据库名.tables.表名.columns.列名”，用户在列上的权限。
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
    * @param string|null $object 该用户有权限的对象： “databases.数据库名.tables.表名”，用户在当前表上的权限。 “databases.数据库名.tables.表名.columns.列名”，用户在列上的权限。
    *
    * @return $this
    */
    public function setObject($object)
    {
        $this->container['object'] = $object;
        return $this;
    }

    /**
    * Gets privileges
    *  该用户在相应object上的权限。
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
    * @param string[]|null $privileges 该用户在相应object上的权限。
    *
    * @return $this
    */
    public function setPrivileges($privileges)
    {
        $this->container['privileges'] = $privileges;
        return $this;
    }

    /**
    * Gets userName
    *  拥有该权限的用户名。
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
    * @param string|null $userName 拥有该权限的用户名。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

