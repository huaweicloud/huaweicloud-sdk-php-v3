<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseUserInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseUserInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * login  **参数解释**： 是否可以登录。 **取值范围**： 不涉及。
    * createrole  **参数解释**： 创建角色权限。 **取值范围**： 不涉及。
    * createdb  **参数解释**： 创建数据库权限。 **取值范围**： 不涉及。
    * systemadmin  **参数解释**： 系统管理员。 **取值范围**： 不涉及。
    * auditadmin  **参数解释**： 审计管理员。 **取值范围**： 不涉及。
    * inherit  **参数解释**： 继承所在组权限。 **取值范围**： 不涉及。
    * useft  **参数解释**： 访问外表权限。 **取值范围**： 不涉及。
    * connLimit  **参数解释**： 连接数限制。 **取值范围**： 不涉及。
    * replication  **参数解释**： 是否允许流复制。 **取值范围**： 不涉及。
    * validBegin  **参数解释**： 角色生效时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * validUntil  **参数解释**： 角色过期时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * lock  **参数解释**： 是否锁定。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'login' => 'bool',
            'createrole' => 'bool',
            'createdb' => 'bool',
            'systemadmin' => 'bool',
            'auditadmin' => 'bool',
            'inherit' => 'bool',
            'useft' => 'bool',
            'connLimit' => 'int',
            'replication' => 'bool',
            'validBegin' => 'string',
            'validUntil' => 'string',
            'lock' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * login  **参数解释**： 是否可以登录。 **取值范围**： 不涉及。
    * createrole  **参数解释**： 创建角色权限。 **取值范围**： 不涉及。
    * createdb  **参数解释**： 创建数据库权限。 **取值范围**： 不涉及。
    * systemadmin  **参数解释**： 系统管理员。 **取值范围**： 不涉及。
    * auditadmin  **参数解释**： 审计管理员。 **取值范围**： 不涉及。
    * inherit  **参数解释**： 继承所在组权限。 **取值范围**： 不涉及。
    * useft  **参数解释**： 访问外表权限。 **取值范围**： 不涉及。
    * connLimit  **参数解释**： 连接数限制。 **取值范围**： 不涉及。
    * replication  **参数解释**： 是否允许流复制。 **取值范围**： 不涉及。
    * validBegin  **参数解释**： 角色生效时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * validUntil  **参数解释**： 角色过期时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * lock  **参数解释**： 是否锁定。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'login' => null,
        'createrole' => null,
        'createdb' => null,
        'systemadmin' => null,
        'auditadmin' => null,
        'inherit' => null,
        'useft' => null,
        'connLimit' => null,
        'replication' => null,
        'validBegin' => null,
        'validUntil' => null,
        'lock' => null
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
    * login  **参数解释**： 是否可以登录。 **取值范围**： 不涉及。
    * createrole  **参数解释**： 创建角色权限。 **取值范围**： 不涉及。
    * createdb  **参数解释**： 创建数据库权限。 **取值范围**： 不涉及。
    * systemadmin  **参数解释**： 系统管理员。 **取值范围**： 不涉及。
    * auditadmin  **参数解释**： 审计管理员。 **取值范围**： 不涉及。
    * inherit  **参数解释**： 继承所在组权限。 **取值范围**： 不涉及。
    * useft  **参数解释**： 访问外表权限。 **取值范围**： 不涉及。
    * connLimit  **参数解释**： 连接数限制。 **取值范围**： 不涉及。
    * replication  **参数解释**： 是否允许流复制。 **取值范围**： 不涉及。
    * validBegin  **参数解释**： 角色生效时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * validUntil  **参数解释**： 角色过期时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * lock  **参数解释**： 是否锁定。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'login' => 'login',
            'createrole' => 'createrole',
            'createdb' => 'createdb',
            'systemadmin' => 'systemadmin',
            'auditadmin' => 'auditadmin',
            'inherit' => 'inherit',
            'useft' => 'useft',
            'connLimit' => 'conn_limit',
            'replication' => 'replication',
            'validBegin' => 'valid_begin',
            'validUntil' => 'valid_until',
            'lock' => 'lock'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * login  **参数解释**： 是否可以登录。 **取值范围**： 不涉及。
    * createrole  **参数解释**： 创建角色权限。 **取值范围**： 不涉及。
    * createdb  **参数解释**： 创建数据库权限。 **取值范围**： 不涉及。
    * systemadmin  **参数解释**： 系统管理员。 **取值范围**： 不涉及。
    * auditadmin  **参数解释**： 审计管理员。 **取值范围**： 不涉及。
    * inherit  **参数解释**： 继承所在组权限。 **取值范围**： 不涉及。
    * useft  **参数解释**： 访问外表权限。 **取值范围**： 不涉及。
    * connLimit  **参数解释**： 连接数限制。 **取值范围**： 不涉及。
    * replication  **参数解释**： 是否允许流复制。 **取值范围**： 不涉及。
    * validBegin  **参数解释**： 角色生效时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * validUntil  **参数解释**： 角色过期时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * lock  **参数解释**： 是否锁定。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'login' => 'setLogin',
            'createrole' => 'setCreaterole',
            'createdb' => 'setCreatedb',
            'systemadmin' => 'setSystemadmin',
            'auditadmin' => 'setAuditadmin',
            'inherit' => 'setInherit',
            'useft' => 'setUseft',
            'connLimit' => 'setConnLimit',
            'replication' => 'setReplication',
            'validBegin' => 'setValidBegin',
            'validUntil' => 'setValidUntil',
            'lock' => 'setLock'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * login  **参数解释**： 是否可以登录。 **取值范围**： 不涉及。
    * createrole  **参数解释**： 创建角色权限。 **取值范围**： 不涉及。
    * createdb  **参数解释**： 创建数据库权限。 **取值范围**： 不涉及。
    * systemadmin  **参数解释**： 系统管理员。 **取值范围**： 不涉及。
    * auditadmin  **参数解释**： 审计管理员。 **取值范围**： 不涉及。
    * inherit  **参数解释**： 继承所在组权限。 **取值范围**： 不涉及。
    * useft  **参数解释**： 访问外表权限。 **取值范围**： 不涉及。
    * connLimit  **参数解释**： 连接数限制。 **取值范围**： 不涉及。
    * replication  **参数解释**： 是否允许流复制。 **取值范围**： 不涉及。
    * validBegin  **参数解释**： 角色生效时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * validUntil  **参数解释**： 角色过期时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    * lock  **参数解释**： 是否锁定。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'login' => 'getLogin',
            'createrole' => 'getCreaterole',
            'createdb' => 'getCreatedb',
            'systemadmin' => 'getSystemadmin',
            'auditadmin' => 'getAuditadmin',
            'inherit' => 'getInherit',
            'useft' => 'getUseft',
            'connLimit' => 'getConnLimit',
            'replication' => 'getReplication',
            'validBegin' => 'getValidBegin',
            'validUntil' => 'getValidUntil',
            'lock' => 'getLock'
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
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['createrole'] = isset($data['createrole']) ? $data['createrole'] : null;
        $this->container['createdb'] = isset($data['createdb']) ? $data['createdb'] : null;
        $this->container['systemadmin'] = isset($data['systemadmin']) ? $data['systemadmin'] : null;
        $this->container['auditadmin'] = isset($data['auditadmin']) ? $data['auditadmin'] : null;
        $this->container['inherit'] = isset($data['inherit']) ? $data['inherit'] : null;
        $this->container['useft'] = isset($data['useft']) ? $data['useft'] : null;
        $this->container['connLimit'] = isset($data['connLimit']) ? $data['connLimit'] : null;
        $this->container['replication'] = isset($data['replication']) ? $data['replication'] : null;
        $this->container['validBegin'] = isset($data['validBegin']) ? $data['validBegin'] : null;
        $this->container['validUntil'] = isset($data['validUntil']) ? $data['validUntil'] : null;
        $this->container['lock'] = isset($data['lock']) ? $data['lock'] : null;
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
    * Gets login
    *  **参数解释**： 是否可以登录。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param bool|null $login **参数解释**： 是否可以登录。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets createrole
    *  **参数解释**： 创建角色权限。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getCreaterole()
    {
        return $this->container['createrole'];
    }

    /**
    * Sets createrole
    *
    * @param bool|null $createrole **参数解释**： 创建角色权限。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreaterole($createrole)
    {
        $this->container['createrole'] = $createrole;
        return $this;
    }

    /**
    * Gets createdb
    *  **参数解释**： 创建数据库权限。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getCreatedb()
    {
        return $this->container['createdb'];
    }

    /**
    * Sets createdb
    *
    * @param bool|null $createdb **参数解释**： 创建数据库权限。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCreatedb($createdb)
    {
        $this->container['createdb'] = $createdb;
        return $this;
    }

    /**
    * Gets systemadmin
    *  **参数解释**： 系统管理员。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getSystemadmin()
    {
        return $this->container['systemadmin'];
    }

    /**
    * Sets systemadmin
    *
    * @param bool|null $systemadmin **参数解释**： 系统管理员。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSystemadmin($systemadmin)
    {
        $this->container['systemadmin'] = $systemadmin;
        return $this;
    }

    /**
    * Gets auditadmin
    *  **参数解释**： 审计管理员。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getAuditadmin()
    {
        return $this->container['auditadmin'];
    }

    /**
    * Sets auditadmin
    *
    * @param bool|null $auditadmin **参数解释**： 审计管理员。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAuditadmin($auditadmin)
    {
        $this->container['auditadmin'] = $auditadmin;
        return $this;
    }

    /**
    * Gets inherit
    *  **参数解释**： 继承所在组权限。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getInherit()
    {
        return $this->container['inherit'];
    }

    /**
    * Sets inherit
    *
    * @param bool|null $inherit **参数解释**： 继承所在组权限。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInherit($inherit)
    {
        $this->container['inherit'] = $inherit;
        return $this;
    }

    /**
    * Gets useft
    *  **参数解释**： 访问外表权限。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getUseft()
    {
        return $this->container['useft'];
    }

    /**
    * Sets useft
    *
    * @param bool|null $useft **参数解释**： 访问外表权限。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUseft($useft)
    {
        $this->container['useft'] = $useft;
        return $this;
    }

    /**
    * Gets connLimit
    *  **参数解释**： 连接数限制。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getConnLimit()
    {
        return $this->container['connLimit'];
    }

    /**
    * Sets connLimit
    *
    * @param int|null $connLimit **参数解释**： 连接数限制。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setConnLimit($connLimit)
    {
        $this->container['connLimit'] = $connLimit;
        return $this;
    }

    /**
    * Gets replication
    *  **参数解释**： 是否允许流复制。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getReplication()
    {
        return $this->container['replication'];
    }

    /**
    * Sets replication
    *
    * @param bool|null $replication **参数解释**： 是否允许流复制。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setReplication($replication)
    {
        $this->container['replication'] = $replication;
        return $this;
    }

    /**
    * Gets validBegin
    *  **参数解释**： 角色生效时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getValidBegin()
    {
        return $this->container['validBegin'];
    }

    /**
    * Sets validBegin
    *
    * @param string|null $validBegin **参数解释**： 角色生效时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValidBegin($validBegin)
    {
        $this->container['validBegin'] = $validBegin;
        return $this;
    }

    /**
    * Gets validUntil
    *  **参数解释**： 角色过期时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getValidUntil()
    {
        return $this->container['validUntil'];
    }

    /**
    * Sets validUntil
    *
    * @param string|null $validUntil **参数解释**： 角色过期时间。格式：yyyy-MM-ddTHH:mm:ssZ。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setValidUntil($validUntil)
    {
        $this->container['validUntil'] = $validUntil;
        return $this;
    }

    /**
    * Gets lock
    *  **参数解释**： 是否锁定。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getLock()
    {
        return $this->container['lock'];
    }

    /**
    * Sets lock
    *
    * @param bool|null $lock **参数解释**： 是否锁定。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLock($lock)
    {
        $this->container['lock'] = $lock;
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

