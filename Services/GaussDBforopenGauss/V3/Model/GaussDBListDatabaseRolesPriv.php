<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GaussDBListDatabaseRolesPriv implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GaussDBListDatabaseRolesPriv';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rolsuper  用户/角色是否具有管理员权限。
    * rolinherit  用户/角色是否自动继承其所属角色的权限。
    * rolcreaterole  用户/角色是否支持创建其他子用户。
    * rolcreatedb  用户/角色是否可以创建数据库。
    * rolcanlogin  用户/角色是否可以登录数据库。
    * rolconnlimit  用户/角色连接实例的最大并发连接数。-1表示没有限制。
    * rolreplication  用户/角色是否属于复制角色。
    * rolbypassrls  用户/角色是否绕过每个行级安全策略。
    * rolpassworddeadline  用户/角色密码过期时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rolsuper' => 'bool',
            'rolinherit' => 'bool',
            'rolcreaterole' => 'bool',
            'rolcreatedb' => 'bool',
            'rolcanlogin' => 'bool',
            'rolconnlimit' => 'int',
            'rolreplication' => 'bool',
            'rolbypassrls' => 'bool',
            'rolpassworddeadline' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rolsuper  用户/角色是否具有管理员权限。
    * rolinherit  用户/角色是否自动继承其所属角色的权限。
    * rolcreaterole  用户/角色是否支持创建其他子用户。
    * rolcreatedb  用户/角色是否可以创建数据库。
    * rolcanlogin  用户/角色是否可以登录数据库。
    * rolconnlimit  用户/角色连接实例的最大并发连接数。-1表示没有限制。
    * rolreplication  用户/角色是否属于复制角色。
    * rolbypassrls  用户/角色是否绕过每个行级安全策略。
    * rolpassworddeadline  用户/角色密码过期时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rolsuper' => null,
        'rolinherit' => null,
        'rolcreaterole' => null,
        'rolcreatedb' => null,
        'rolcanlogin' => null,
        'rolconnlimit' => 'int32',
        'rolreplication' => null,
        'rolbypassrls' => null,
        'rolpassworddeadline' => null
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
    * rolsuper  用户/角色是否具有管理员权限。
    * rolinherit  用户/角色是否自动继承其所属角色的权限。
    * rolcreaterole  用户/角色是否支持创建其他子用户。
    * rolcreatedb  用户/角色是否可以创建数据库。
    * rolcanlogin  用户/角色是否可以登录数据库。
    * rolconnlimit  用户/角色连接实例的最大并发连接数。-1表示没有限制。
    * rolreplication  用户/角色是否属于复制角色。
    * rolbypassrls  用户/角色是否绕过每个行级安全策略。
    * rolpassworddeadline  用户/角色密码过期时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rolsuper' => 'rolsuper',
            'rolinherit' => 'rolinherit',
            'rolcreaterole' => 'rolcreaterole',
            'rolcreatedb' => 'rolcreatedb',
            'rolcanlogin' => 'rolcanlogin',
            'rolconnlimit' => 'rolconnlimit',
            'rolreplication' => 'rolreplication',
            'rolbypassrls' => 'rolbypassrls',
            'rolpassworddeadline' => 'rolpassworddeadline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rolsuper  用户/角色是否具有管理员权限。
    * rolinherit  用户/角色是否自动继承其所属角色的权限。
    * rolcreaterole  用户/角色是否支持创建其他子用户。
    * rolcreatedb  用户/角色是否可以创建数据库。
    * rolcanlogin  用户/角色是否可以登录数据库。
    * rolconnlimit  用户/角色连接实例的最大并发连接数。-1表示没有限制。
    * rolreplication  用户/角色是否属于复制角色。
    * rolbypassrls  用户/角色是否绕过每个行级安全策略。
    * rolpassworddeadline  用户/角色密码过期时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'rolsuper' => 'setRolsuper',
            'rolinherit' => 'setRolinherit',
            'rolcreaterole' => 'setRolcreaterole',
            'rolcreatedb' => 'setRolcreatedb',
            'rolcanlogin' => 'setRolcanlogin',
            'rolconnlimit' => 'setRolconnlimit',
            'rolreplication' => 'setRolreplication',
            'rolbypassrls' => 'setRolbypassrls',
            'rolpassworddeadline' => 'setRolpassworddeadline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rolsuper  用户/角色是否具有管理员权限。
    * rolinherit  用户/角色是否自动继承其所属角色的权限。
    * rolcreaterole  用户/角色是否支持创建其他子用户。
    * rolcreatedb  用户/角色是否可以创建数据库。
    * rolcanlogin  用户/角色是否可以登录数据库。
    * rolconnlimit  用户/角色连接实例的最大并发连接数。-1表示没有限制。
    * rolreplication  用户/角色是否属于复制角色。
    * rolbypassrls  用户/角色是否绕过每个行级安全策略。
    * rolpassworddeadline  用户/角色密码过期时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'rolsuper' => 'getRolsuper',
            'rolinherit' => 'getRolinherit',
            'rolcreaterole' => 'getRolcreaterole',
            'rolcreatedb' => 'getRolcreatedb',
            'rolcanlogin' => 'getRolcanlogin',
            'rolconnlimit' => 'getRolconnlimit',
            'rolreplication' => 'getRolreplication',
            'rolbypassrls' => 'getRolbypassrls',
            'rolpassworddeadline' => 'getRolpassworddeadline'
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
        $this->container['rolsuper'] = isset($data['rolsuper']) ? $data['rolsuper'] : null;
        $this->container['rolinherit'] = isset($data['rolinherit']) ? $data['rolinherit'] : null;
        $this->container['rolcreaterole'] = isset($data['rolcreaterole']) ? $data['rolcreaterole'] : null;
        $this->container['rolcreatedb'] = isset($data['rolcreatedb']) ? $data['rolcreatedb'] : null;
        $this->container['rolcanlogin'] = isset($data['rolcanlogin']) ? $data['rolcanlogin'] : null;
        $this->container['rolconnlimit'] = isset($data['rolconnlimit']) ? $data['rolconnlimit'] : null;
        $this->container['rolreplication'] = isset($data['rolreplication']) ? $data['rolreplication'] : null;
        $this->container['rolbypassrls'] = isset($data['rolbypassrls']) ? $data['rolbypassrls'] : null;
        $this->container['rolpassworddeadline'] = isset($data['rolpassworddeadline']) ? $data['rolpassworddeadline'] : null;
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
    * Gets rolsuper
    *  用户/角色是否具有管理员权限。
    *
    * @return bool|null
    */
    public function getRolsuper()
    {
        return $this->container['rolsuper'];
    }

    /**
    * Sets rolsuper
    *
    * @param bool|null $rolsuper 用户/角色是否具有管理员权限。
    *
    * @return $this
    */
    public function setRolsuper($rolsuper)
    {
        $this->container['rolsuper'] = $rolsuper;
        return $this;
    }

    /**
    * Gets rolinherit
    *  用户/角色是否自动继承其所属角色的权限。
    *
    * @return bool|null
    */
    public function getRolinherit()
    {
        return $this->container['rolinherit'];
    }

    /**
    * Sets rolinherit
    *
    * @param bool|null $rolinherit 用户/角色是否自动继承其所属角色的权限。
    *
    * @return $this
    */
    public function setRolinherit($rolinherit)
    {
        $this->container['rolinherit'] = $rolinherit;
        return $this;
    }

    /**
    * Gets rolcreaterole
    *  用户/角色是否支持创建其他子用户。
    *
    * @return bool|null
    */
    public function getRolcreaterole()
    {
        return $this->container['rolcreaterole'];
    }

    /**
    * Sets rolcreaterole
    *
    * @param bool|null $rolcreaterole 用户/角色是否支持创建其他子用户。
    *
    * @return $this
    */
    public function setRolcreaterole($rolcreaterole)
    {
        $this->container['rolcreaterole'] = $rolcreaterole;
        return $this;
    }

    /**
    * Gets rolcreatedb
    *  用户/角色是否可以创建数据库。
    *
    * @return bool|null
    */
    public function getRolcreatedb()
    {
        return $this->container['rolcreatedb'];
    }

    /**
    * Sets rolcreatedb
    *
    * @param bool|null $rolcreatedb 用户/角色是否可以创建数据库。
    *
    * @return $this
    */
    public function setRolcreatedb($rolcreatedb)
    {
        $this->container['rolcreatedb'] = $rolcreatedb;
        return $this;
    }

    /**
    * Gets rolcanlogin
    *  用户/角色是否可以登录数据库。
    *
    * @return bool|null
    */
    public function getRolcanlogin()
    {
        return $this->container['rolcanlogin'];
    }

    /**
    * Sets rolcanlogin
    *
    * @param bool|null $rolcanlogin 用户/角色是否可以登录数据库。
    *
    * @return $this
    */
    public function setRolcanlogin($rolcanlogin)
    {
        $this->container['rolcanlogin'] = $rolcanlogin;
        return $this;
    }

    /**
    * Gets rolconnlimit
    *  用户/角色连接实例的最大并发连接数。-1表示没有限制。
    *
    * @return int|null
    */
    public function getRolconnlimit()
    {
        return $this->container['rolconnlimit'];
    }

    /**
    * Sets rolconnlimit
    *
    * @param int|null $rolconnlimit 用户/角色连接实例的最大并发连接数。-1表示没有限制。
    *
    * @return $this
    */
    public function setRolconnlimit($rolconnlimit)
    {
        $this->container['rolconnlimit'] = $rolconnlimit;
        return $this;
    }

    /**
    * Gets rolreplication
    *  用户/角色是否属于复制角色。
    *
    * @return bool|null
    */
    public function getRolreplication()
    {
        return $this->container['rolreplication'];
    }

    /**
    * Sets rolreplication
    *
    * @param bool|null $rolreplication 用户/角色是否属于复制角色。
    *
    * @return $this
    */
    public function setRolreplication($rolreplication)
    {
        $this->container['rolreplication'] = $rolreplication;
        return $this;
    }

    /**
    * Gets rolbypassrls
    *  用户/角色是否绕过每个行级安全策略。
    *
    * @return bool|null
    */
    public function getRolbypassrls()
    {
        return $this->container['rolbypassrls'];
    }

    /**
    * Sets rolbypassrls
    *
    * @param bool|null $rolbypassrls 用户/角色是否绕过每个行级安全策略。
    *
    * @return $this
    */
    public function setRolbypassrls($rolbypassrls)
    {
        $this->container['rolbypassrls'] = $rolbypassrls;
        return $this;
    }

    /**
    * Gets rolpassworddeadline
    *  用户/角色密码过期时间。
    *
    * @return string|null
    */
    public function getRolpassworddeadline()
    {
        return $this->container['rolpassworddeadline'];
    }

    /**
    * Sets rolpassworddeadline
    *
    * @param string|null $rolpassworddeadline 用户/角色密码过期时间。
    *
    * @return $this
    */
    public function setRolpassworddeadline($rolpassworddeadline)
    {
        $this->container['rolpassworddeadline'] = $rolpassworddeadline;
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

