<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyInfoNodes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyInfo_nodes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库代理节点ID。
    * status  数据库代理节点状态。  取值范围： NORMAL: 表示节点正常。 ABNORMAL: 表示节点节点状态异常。 CREATING: 表示节点正在创建中。 CREATEFAIL: 表示节点创建失败。
    * role  数据库代理节点角色：  master：主节点。  slave：备节点。
    * azCode  数据库代理节点所在可用区。
    * frozenFlag  数据库代理节点是否被冻结。  取值范围：  0：未冻结。  1：冻结。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'role' => 'string',
            'azCode' => 'string',
            'frozenFlag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库代理节点ID。
    * status  数据库代理节点状态。  取值范围： NORMAL: 表示节点正常。 ABNORMAL: 表示节点节点状态异常。 CREATING: 表示节点正在创建中。 CREATEFAIL: 表示节点创建失败。
    * role  数据库代理节点角色：  master：主节点。  slave：备节点。
    * azCode  数据库代理节点所在可用区。
    * frozenFlag  数据库代理节点是否被冻结。  取值范围：  0：未冻结。  1：冻结。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'role' => null,
        'azCode' => null,
        'frozenFlag' => 'int32'
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
    * id  数据库代理节点ID。
    * status  数据库代理节点状态。  取值范围： NORMAL: 表示节点正常。 ABNORMAL: 表示节点节点状态异常。 CREATING: 表示节点正在创建中。 CREATEFAIL: 表示节点创建失败。
    * role  数据库代理节点角色：  master：主节点。  slave：备节点。
    * azCode  数据库代理节点所在可用区。
    * frozenFlag  数据库代理节点是否被冻结。  取值范围：  0：未冻结。  1：冻结。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'role' => 'role',
            'azCode' => 'az_code',
            'frozenFlag' => 'frozen_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库代理节点ID。
    * status  数据库代理节点状态。  取值范围： NORMAL: 表示节点正常。 ABNORMAL: 表示节点节点状态异常。 CREATING: 表示节点正在创建中。 CREATEFAIL: 表示节点创建失败。
    * role  数据库代理节点角色：  master：主节点。  slave：备节点。
    * azCode  数据库代理节点所在可用区。
    * frozenFlag  数据库代理节点是否被冻结。  取值范围：  0：未冻结。  1：冻结。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'role' => 'setRole',
            'azCode' => 'setAzCode',
            'frozenFlag' => 'setFrozenFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库代理节点ID。
    * status  数据库代理节点状态。  取值范围： NORMAL: 表示节点正常。 ABNORMAL: 表示节点节点状态异常。 CREATING: 表示节点正在创建中。 CREATEFAIL: 表示节点创建失败。
    * role  数据库代理节点角色：  master：主节点。  slave：备节点。
    * azCode  数据库代理节点所在可用区。
    * frozenFlag  数据库代理节点是否被冻结。  取值范围：  0：未冻结。  1：冻结。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'role' => 'getRole',
            'azCode' => 'getAzCode',
            'frozenFlag' => 'getFrozenFlag'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['frozenFlag'] = isset($data['frozenFlag']) ? $data['frozenFlag'] : null;
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
    *  数据库代理节点ID。
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
    * @param string|null $id 数据库代理节点ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  数据库代理节点状态。  取值范围： NORMAL: 表示节点正常。 ABNORMAL: 表示节点节点状态异常。 CREATING: 表示节点正在创建中。 CREATEFAIL: 表示节点创建失败。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 数据库代理节点状态。  取值范围： NORMAL: 表示节点正常。 ABNORMAL: 表示节点节点状态异常。 CREATING: 表示节点正在创建中。 CREATEFAIL: 表示节点创建失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets role
    *  数据库代理节点角色：  master：主节点。  slave：备节点。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 数据库代理节点角色：  master：主节点。  slave：备节点。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets azCode
    *  数据库代理节点所在可用区。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 数据库代理节点所在可用区。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets frozenFlag
    *  数据库代理节点是否被冻结。  取值范围：  0：未冻结。  1：冻结。
    *
    * @return int|null
    */
    public function getFrozenFlag()
    {
        return $this->container['frozenFlag'];
    }

    /**
    * Sets frozenFlag
    *
    * @param int|null $frozenFlag 数据库代理节点是否被冻结。  取值范围：  0：未冻结。  1：冻结。
    *
    * @return $this
    */
    public function setFrozenFlag($frozenFlag)
    {
        $this->container['frozenFlag'] = $frozenFlag;
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

