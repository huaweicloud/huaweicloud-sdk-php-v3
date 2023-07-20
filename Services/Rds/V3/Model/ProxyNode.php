<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Proxy节点ID。
    * name  Proxy节点名称。
    * role  Proxy节点角色。 - master：主节点。 - slave：备节点。
    * azCode  可用区。
    * status  Proxy节点状态。 - normal：正常。 - abnormal：异常。 - creating：创建中。 - deleted：已删除。
    * frozenFlag  Proxy节点是否被冻结。 - 0：未冻结。 - 1：冻结。 - 2：冻结删除。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'role' => 'string',
            'azCode' => 'string',
            'status' => 'string',
            'frozenFlag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Proxy节点ID。
    * name  Proxy节点名称。
    * role  Proxy节点角色。 - master：主节点。 - slave：备节点。
    * azCode  可用区。
    * status  Proxy节点状态。 - normal：正常。 - abnormal：异常。 - creating：创建中。 - deleted：已删除。
    * frozenFlag  Proxy节点是否被冻结。 - 0：未冻结。 - 1：冻结。 - 2：冻结删除。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'role' => null,
        'azCode' => null,
        'status' => null,
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
    * id  Proxy节点ID。
    * name  Proxy节点名称。
    * role  Proxy节点角色。 - master：主节点。 - slave：备节点。
    * azCode  可用区。
    * status  Proxy节点状态。 - normal：正常。 - abnormal：异常。 - creating：创建中。 - deleted：已删除。
    * frozenFlag  Proxy节点是否被冻结。 - 0：未冻结。 - 1：冻结。 - 2：冻结删除。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'role' => 'role',
            'azCode' => 'az_code',
            'status' => 'status',
            'frozenFlag' => 'frozen_flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Proxy节点ID。
    * name  Proxy节点名称。
    * role  Proxy节点角色。 - master：主节点。 - slave：备节点。
    * azCode  可用区。
    * status  Proxy节点状态。 - normal：正常。 - abnormal：异常。 - creating：创建中。 - deleted：已删除。
    * frozenFlag  Proxy节点是否被冻结。 - 0：未冻结。 - 1：冻结。 - 2：冻结删除。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'role' => 'setRole',
            'azCode' => 'setAzCode',
            'status' => 'setStatus',
            'frozenFlag' => 'setFrozenFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Proxy节点ID。
    * name  Proxy节点名称。
    * role  Proxy节点角色。 - master：主节点。 - slave：备节点。
    * azCode  可用区。
    * status  Proxy节点状态。 - normal：正常。 - abnormal：异常。 - creating：创建中。 - deleted：已删除。
    * frozenFlag  Proxy节点是否被冻结。 - 0：未冻结。 - 1：冻结。 - 2：冻结删除。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'role' => 'getRole',
            'azCode' => 'getAzCode',
            'status' => 'getStatus',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['azCode'] === null) {
            $invalidProperties[] = "'azCode' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['frozenFlag'] === null) {
            $invalidProperties[] = "'frozenFlag' can't be null";
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
    * Gets id
    *  Proxy节点ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id Proxy节点ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  Proxy节点名称。
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
    * @param string $name Proxy节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets role
    *  Proxy节点角色。 - master：主节点。 - slave：备节点。
    *
    * @return string
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string $role Proxy节点角色。 - master：主节点。 - slave：备节点。
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
    *  可用区。
    *
    * @return string
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string $azCode 可用区。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets status
    *  Proxy节点状态。 - normal：正常。 - abnormal：异常。 - creating：创建中。 - deleted：已删除。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status Proxy节点状态。 - normal：正常。 - abnormal：异常。 - creating：创建中。 - deleted：已删除。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets frozenFlag
    *  Proxy节点是否被冻结。 - 0：未冻结。 - 1：冻结。 - 2：冻结删除。
    *
    * @return int
    */
    public function getFrozenFlag()
    {
        return $this->container['frozenFlag'];
    }

    /**
    * Sets frozenFlag
    *
    * @param int $frozenFlag Proxy节点是否被冻结。 - 0：未冻结。 - 1：冻结。 - 2：冻结删除。
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

