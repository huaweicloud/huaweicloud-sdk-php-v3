<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabasePermissionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabasePermissionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  对象类型 [DATABASE | SCHEMA | TABLE | VIEW | COLUMN | FUNCTION| SEQUENCE | NODEGROUP | ROLE]
    * isGrant  是否授权操作
    * grantList  授权列表 is_grant为true时必填
    * revokeList  撤销权限列表 is_grant为false时必填
    * roleList  被授权角色列表
    * objectList  权限所属对象列表
    * cascade  撤销权限是否级联撤销 默认 true
    * database  数据库名称
    * schema  模式名称
    * table  表名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'isGrant' => 'bool',
            'grantList' => '\HuaweiCloud\SDK\Dws\V2\Model\Grant[]',
            'revokeList' => '\HuaweiCloud\SDK\Dws\V2\Model\Revoke[]',
            'roleList' => 'string[]',
            'objectList' => 'object',
            'cascade' => 'bool',
            'database' => 'string',
            'schema' => 'string',
            'table' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  对象类型 [DATABASE | SCHEMA | TABLE | VIEW | COLUMN | FUNCTION| SEQUENCE | NODEGROUP | ROLE]
    * isGrant  是否授权操作
    * grantList  授权列表 is_grant为true时必填
    * revokeList  撤销权限列表 is_grant为false时必填
    * roleList  被授权角色列表
    * objectList  权限所属对象列表
    * cascade  撤销权限是否级联撤销 默认 true
    * database  数据库名称
    * schema  模式名称
    * table  表名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'isGrant' => null,
        'grantList' => null,
        'revokeList' => null,
        'roleList' => null,
        'objectList' => null,
        'cascade' => null,
        'database' => null,
        'schema' => null,
        'table' => null
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
    * type  对象类型 [DATABASE | SCHEMA | TABLE | VIEW | COLUMN | FUNCTION| SEQUENCE | NODEGROUP | ROLE]
    * isGrant  是否授权操作
    * grantList  授权列表 is_grant为true时必填
    * revokeList  撤销权限列表 is_grant为false时必填
    * roleList  被授权角色列表
    * objectList  权限所属对象列表
    * cascade  撤销权限是否级联撤销 默认 true
    * database  数据库名称
    * schema  模式名称
    * table  表名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'isGrant' => 'is_grant',
            'grantList' => 'grant_list',
            'revokeList' => 'revoke_list',
            'roleList' => 'role_list',
            'objectList' => 'object_list',
            'cascade' => 'cascade',
            'database' => 'database',
            'schema' => 'schema',
            'table' => 'table'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  对象类型 [DATABASE | SCHEMA | TABLE | VIEW | COLUMN | FUNCTION| SEQUENCE | NODEGROUP | ROLE]
    * isGrant  是否授权操作
    * grantList  授权列表 is_grant为true时必填
    * revokeList  撤销权限列表 is_grant为false时必填
    * roleList  被授权角色列表
    * objectList  权限所属对象列表
    * cascade  撤销权限是否级联撤销 默认 true
    * database  数据库名称
    * schema  模式名称
    * table  表名
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'isGrant' => 'setIsGrant',
            'grantList' => 'setGrantList',
            'revokeList' => 'setRevokeList',
            'roleList' => 'setRoleList',
            'objectList' => 'setObjectList',
            'cascade' => 'setCascade',
            'database' => 'setDatabase',
            'schema' => 'setSchema',
            'table' => 'setTable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  对象类型 [DATABASE | SCHEMA | TABLE | VIEW | COLUMN | FUNCTION| SEQUENCE | NODEGROUP | ROLE]
    * isGrant  是否授权操作
    * grantList  授权列表 is_grant为true时必填
    * revokeList  撤销权限列表 is_grant为false时必填
    * roleList  被授权角色列表
    * objectList  权限所属对象列表
    * cascade  撤销权限是否级联撤销 默认 true
    * database  数据库名称
    * schema  模式名称
    * table  表名
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'isGrant' => 'getIsGrant',
            'grantList' => 'getGrantList',
            'revokeList' => 'getRevokeList',
            'roleList' => 'getRoleList',
            'objectList' => 'getObjectList',
            'cascade' => 'getCascade',
            'database' => 'getDatabase',
            'schema' => 'getSchema',
            'table' => 'getTable'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isGrant'] = isset($data['isGrant']) ? $data['isGrant'] : null;
        $this->container['grantList'] = isset($data['grantList']) ? $data['grantList'] : null;
        $this->container['revokeList'] = isset($data['revokeList']) ? $data['revokeList'] : null;
        $this->container['roleList'] = isset($data['roleList']) ? $data['roleList'] : null;
        $this->container['objectList'] = isset($data['objectList']) ? $data['objectList'] : null;
        $this->container['cascade'] = isset($data['cascade']) ? $data['cascade'] : true;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['isGrant'] === null) {
            $invalidProperties[] = "'isGrant' can't be null";
        }
        if ($this->container['roleList'] === null) {
            $invalidProperties[] = "'roleList' can't be null";
        }
        if ($this->container['objectList'] === null) {
            $invalidProperties[] = "'objectList' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
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
    * Gets type
    *  对象类型 [DATABASE | SCHEMA | TABLE | VIEW | COLUMN | FUNCTION| SEQUENCE | NODEGROUP | ROLE]
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
    * @param string $type 对象类型 [DATABASE | SCHEMA | TABLE | VIEW | COLUMN | FUNCTION| SEQUENCE | NODEGROUP | ROLE]
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isGrant
    *  是否授权操作
    *
    * @return bool
    */
    public function getIsGrant()
    {
        return $this->container['isGrant'];
    }

    /**
    * Sets isGrant
    *
    * @param bool $isGrant 是否授权操作
    *
    * @return $this
    */
    public function setIsGrant($isGrant)
    {
        $this->container['isGrant'] = $isGrant;
        return $this;
    }

    /**
    * Gets grantList
    *  授权列表 is_grant为true时必填
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Grant[]|null
    */
    public function getGrantList()
    {
        return $this->container['grantList'];
    }

    /**
    * Sets grantList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Grant[]|null $grantList 授权列表 is_grant为true时必填
    *
    * @return $this
    */
    public function setGrantList($grantList)
    {
        $this->container['grantList'] = $grantList;
        return $this;
    }

    /**
    * Gets revokeList
    *  撤销权限列表 is_grant为false时必填
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Revoke[]|null
    */
    public function getRevokeList()
    {
        return $this->container['revokeList'];
    }

    /**
    * Sets revokeList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Revoke[]|null $revokeList 撤销权限列表 is_grant为false时必填
    *
    * @return $this
    */
    public function setRevokeList($revokeList)
    {
        $this->container['revokeList'] = $revokeList;
        return $this;
    }

    /**
    * Gets roleList
    *  被授权角色列表
    *
    * @return string[]
    */
    public function getRoleList()
    {
        return $this->container['roleList'];
    }

    /**
    * Sets roleList
    *
    * @param string[] $roleList 被授权角色列表
    *
    * @return $this
    */
    public function setRoleList($roleList)
    {
        $this->container['roleList'] = $roleList;
        return $this;
    }

    /**
    * Gets objectList
    *  权限所属对象列表
    *
    * @return object
    */
    public function getObjectList()
    {
        return $this->container['objectList'];
    }

    /**
    * Sets objectList
    *
    * @param object $objectList 权限所属对象列表
    *
    * @return $this
    */
    public function setObjectList($objectList)
    {
        $this->container['objectList'] = $objectList;
        return $this;
    }

    /**
    * Gets cascade
    *  撤销权限是否级联撤销 默认 true
    *
    * @return bool|null
    */
    public function getCascade()
    {
        return $this->container['cascade'];
    }

    /**
    * Sets cascade
    *
    * @param bool|null $cascade 撤销权限是否级联撤销 默认 true
    *
    * @return $this
    */
    public function setCascade($cascade)
    {
        $this->container['cascade'] = $cascade;
        return $this;
    }

    /**
    * Gets database
    *  数据库名称
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database 数据库名称
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets schema
    *  模式名称
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema 模式名称
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets table
    *  表名
    *
    * @return string|null
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string|null $table 表名
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
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

