<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserAuthorityReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserAuthorityReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 用户名/角色名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： - user：数据库用户 - role：数据库角色  **默认取值**： 不涉及。
    * login  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * password  **参数解释**： 密码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * systemAdmin  **参数解释**： 是否是系统管理员。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * logicalCluster  **参数解释**： 关联的逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * passwordDisable  **参数解释**： 是否允许密码登录。 **约束限制**： 不涉及。 **取值范围**： - true：允许密码登录 - false：不允许密码登录  **默认取值**： false
    * createRole  **参数解释**： 是否允许创建角色。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * createDb  **参数解释**： 是否允许创建数据库。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * inherit  **参数解释**： 是否允许继承权限。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * connLimit  **参数解释**： 连接数限制。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantMembers  **参数解释**： 授权对象信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantList  **参数解释**： 授权列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * desc  **参数解释**： 描述信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'login' => 'bool',
            'password' => 'string',
            'systemAdmin' => 'bool',
            'logicalCluster' => 'string',
            'passwordDisable' => 'bool',
            'createRole' => 'bool',
            'createDb' => 'bool',
            'inherit' => 'bool',
            'connLimit' => 'int',
            'grantMembers' => 'string[]',
            'grantList' => '\HuaweiCloud\SDK\Dws\V2\Model\GrantAuthority[]',
            'desc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 用户名/角色名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： - user：数据库用户 - role：数据库角色  **默认取值**： 不涉及。
    * login  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * password  **参数解释**： 密码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * systemAdmin  **参数解释**： 是否是系统管理员。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * logicalCluster  **参数解释**： 关联的逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * passwordDisable  **参数解释**： 是否允许密码登录。 **约束限制**： 不涉及。 **取值范围**： - true：允许密码登录 - false：不允许密码登录  **默认取值**： false
    * createRole  **参数解释**： 是否允许创建角色。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * createDb  **参数解释**： 是否允许创建数据库。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * inherit  **参数解释**： 是否允许继承权限。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * connLimit  **参数解释**： 连接数限制。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantMembers  **参数解释**： 授权对象信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantList  **参数解释**： 授权列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * desc  **参数解释**： 描述信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'login' => null,
        'password' => null,
        'systemAdmin' => null,
        'logicalCluster' => null,
        'passwordDisable' => null,
        'createRole' => null,
        'createDb' => null,
        'inherit' => null,
        'connLimit' => 'int32',
        'grantMembers' => null,
        'grantList' => null,
        'desc' => null
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
    * name  **参数解释**： 用户名/角色名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： - user：数据库用户 - role：数据库角色  **默认取值**： 不涉及。
    * login  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * password  **参数解释**： 密码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * systemAdmin  **参数解释**： 是否是系统管理员。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * logicalCluster  **参数解释**： 关联的逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * passwordDisable  **参数解释**： 是否允许密码登录。 **约束限制**： 不涉及。 **取值范围**： - true：允许密码登录 - false：不允许密码登录  **默认取值**： false
    * createRole  **参数解释**： 是否允许创建角色。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * createDb  **参数解释**： 是否允许创建数据库。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * inherit  **参数解释**： 是否允许继承权限。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * connLimit  **参数解释**： 连接数限制。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantMembers  **参数解释**： 授权对象信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantList  **参数解释**： 授权列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * desc  **参数解释**： 描述信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'login' => 'login',
            'password' => 'password',
            'systemAdmin' => 'system_admin',
            'logicalCluster' => 'logical_cluster',
            'passwordDisable' => 'password_disable',
            'createRole' => 'create_role',
            'createDb' => 'create_db',
            'inherit' => 'inherit',
            'connLimit' => 'conn_limit',
            'grantMembers' => 'grant_members',
            'grantList' => 'grant_list',
            'desc' => 'desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 用户名/角色名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： - user：数据库用户 - role：数据库角色  **默认取值**： 不涉及。
    * login  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * password  **参数解释**： 密码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * systemAdmin  **参数解释**： 是否是系统管理员。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * logicalCluster  **参数解释**： 关联的逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * passwordDisable  **参数解释**： 是否允许密码登录。 **约束限制**： 不涉及。 **取值范围**： - true：允许密码登录 - false：不允许密码登录  **默认取值**： false
    * createRole  **参数解释**： 是否允许创建角色。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * createDb  **参数解释**： 是否允许创建数据库。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * inherit  **参数解释**： 是否允许继承权限。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * connLimit  **参数解释**： 连接数限制。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantMembers  **参数解释**： 授权对象信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantList  **参数解释**： 授权列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * desc  **参数解释**： 描述信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'login' => 'setLogin',
            'password' => 'setPassword',
            'systemAdmin' => 'setSystemAdmin',
            'logicalCluster' => 'setLogicalCluster',
            'passwordDisable' => 'setPasswordDisable',
            'createRole' => 'setCreateRole',
            'createDb' => 'setCreateDb',
            'inherit' => 'setInherit',
            'connLimit' => 'setConnLimit',
            'grantMembers' => 'setGrantMembers',
            'grantList' => 'setGrantList',
            'desc' => 'setDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 用户名/角色名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * type  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： - user：数据库用户 - role：数据库角色  **默认取值**： 不涉及。
    * login  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * password  **参数解释**： 密码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * systemAdmin  **参数解释**： 是否是系统管理员。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * logicalCluster  **参数解释**： 关联的逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * passwordDisable  **参数解释**： 是否允许密码登录。 **约束限制**： 不涉及。 **取值范围**： - true：允许密码登录 - false：不允许密码登录  **默认取值**： false
    * createRole  **参数解释**： 是否允许创建角色。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * createDb  **参数解释**： 是否允许创建数据库。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * inherit  **参数解释**： 是否允许继承权限。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    * connLimit  **参数解释**： 连接数限制。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantMembers  **参数解释**： 授权对象信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * grantList  **参数解释**： 授权列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * desc  **参数解释**： 描述信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'login' => 'getLogin',
            'password' => 'getPassword',
            'systemAdmin' => 'getSystemAdmin',
            'logicalCluster' => 'getLogicalCluster',
            'passwordDisable' => 'getPasswordDisable',
            'createRole' => 'getCreateRole',
            'createDb' => 'getCreateDb',
            'inherit' => 'getInherit',
            'connLimit' => 'getConnLimit',
            'grantMembers' => 'getGrantMembers',
            'grantList' => 'getGrantList',
            'desc' => 'getDesc'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['systemAdmin'] = isset($data['systemAdmin']) ? $data['systemAdmin'] : null;
        $this->container['logicalCluster'] = isset($data['logicalCluster']) ? $data['logicalCluster'] : null;
        $this->container['passwordDisable'] = isset($data['passwordDisable']) ? $data['passwordDisable'] : null;
        $this->container['createRole'] = isset($data['createRole']) ? $data['createRole'] : null;
        $this->container['createDb'] = isset($data['createDb']) ? $data['createDb'] : null;
        $this->container['inherit'] = isset($data['inherit']) ? $data['inherit'] : null;
        $this->container['connLimit'] = isset($data['connLimit']) ? $data['connLimit'] : null;
        $this->container['grantMembers'] = isset($data['grantMembers']) ? $data['grantMembers'] : null;
        $this->container['grantList'] = isset($data['grantList']) ? $data['grantList'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets name
    *  **参数解释**： 用户名/角色名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 用户名/角色名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： - user：数据库用户 - role：数据库角色  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： - user：数据库用户 - role：数据库角色  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets login
    *  **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
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
    * @param bool|null $login **参数解释**： 类型。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets password
    *  **参数解释**： 密码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password **参数解释**： 密码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets systemAdmin
    *  **参数解释**： 是否是系统管理员。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getSystemAdmin()
    {
        return $this->container['systemAdmin'];
    }

    /**
    * Sets systemAdmin
    *
    * @param bool|null $systemAdmin **参数解释**： 是否是系统管理员。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSystemAdmin($systemAdmin)
    {
        $this->container['systemAdmin'] = $systemAdmin;
        return $this;
    }

    /**
    * Gets logicalCluster
    *  **参数解释**： 关联的逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getLogicalCluster()
    {
        return $this->container['logicalCluster'];
    }

    /**
    * Sets logicalCluster
    *
    * @param string|null $logicalCluster **参数解释**： 关联的逻辑集群名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalCluster($logicalCluster)
    {
        $this->container['logicalCluster'] = $logicalCluster;
        return $this;
    }

    /**
    * Gets passwordDisable
    *  **参数解释**： 是否允许密码登录。 **约束限制**： 不涉及。 **取值范围**： - true：允许密码登录 - false：不允许密码登录  **默认取值**： false
    *
    * @return bool|null
    */
    public function getPasswordDisable()
    {
        return $this->container['passwordDisable'];
    }

    /**
    * Sets passwordDisable
    *
    * @param bool|null $passwordDisable **参数解释**： 是否允许密码登录。 **约束限制**： 不涉及。 **取值范围**： - true：允许密码登录 - false：不允许密码登录  **默认取值**： false
    *
    * @return $this
    */
    public function setPasswordDisable($passwordDisable)
    {
        $this->container['passwordDisable'] = $passwordDisable;
        return $this;
    }

    /**
    * Gets createRole
    *  **参数解释**： 是否允许创建角色。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    *
    * @return bool|null
    */
    public function getCreateRole()
    {
        return $this->container['createRole'];
    }

    /**
    * Sets createRole
    *
    * @param bool|null $createRole **参数解释**： 是否允许创建角色。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    *
    * @return $this
    */
    public function setCreateRole($createRole)
    {
        $this->container['createRole'] = $createRole;
        return $this;
    }

    /**
    * Gets createDb
    *  **参数解释**： 是否允许创建数据库。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    *
    * @return bool|null
    */
    public function getCreateDb()
    {
        return $this->container['createDb'];
    }

    /**
    * Sets createDb
    *
    * @param bool|null $createDb **参数解释**： 是否允许创建数据库。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    *
    * @return $this
    */
    public function setCreateDb($createDb)
    {
        $this->container['createDb'] = $createDb;
        return $this;
    }

    /**
    * Gets inherit
    *  **参数解释**： 是否允许继承权限。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
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
    * @param bool|null $inherit **参数解释**： 是否允许继承权限。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： false
    *
    * @return $this
    */
    public function setInherit($inherit)
    {
        $this->container['inherit'] = $inherit;
        return $this;
    }

    /**
    * Gets connLimit
    *  **参数解释**： 连接数限制。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param int|null $connLimit **参数解释**： 连接数限制。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setConnLimit($connLimit)
    {
        $this->container['connLimit'] = $connLimit;
        return $this;
    }

    /**
    * Gets grantMembers
    *  **参数解释**： 授权对象信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getGrantMembers()
    {
        return $this->container['grantMembers'];
    }

    /**
    * Sets grantMembers
    *
    * @param string[]|null $grantMembers **参数解释**： 授权对象信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGrantMembers($grantMembers)
    {
        $this->container['grantMembers'] = $grantMembers;
        return $this;
    }

    /**
    * Gets grantList
    *  **参数解释**： 授权列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\GrantAuthority[]|null
    */
    public function getGrantList()
    {
        return $this->container['grantList'];
    }

    /**
    * Sets grantList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\GrantAuthority[]|null $grantList **参数解释**： 授权列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGrantList($grantList)
    {
        $this->container['grantList'] = $grantList;
        return $this;
    }

    /**
    * Gets desc
    *  **参数解释**： 描述信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc **参数解释**： 描述信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
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

