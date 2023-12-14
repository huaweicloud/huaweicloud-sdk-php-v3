<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  节点ID
    * name  节点名称
    * status  节点状态
    * subStatus  节点子状态
    * spec  节点规格
    * instCreateType  实例创建类型
    * aliasName  节点别名
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'subStatus' => 'string',
            'spec' => 'string',
            'instCreateType' => 'string',
            'aliasName' => 'string',
            'azCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  节点ID
    * name  节点名称
    * status  节点状态
    * subStatus  节点子状态
    * spec  节点规格
    * instCreateType  实例创建类型
    * aliasName  节点别名
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'subStatus' => null,
        'spec' => null,
        'instCreateType' => null,
        'aliasName' => null,
        'azCode' => null
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
    * id  节点ID
    * name  节点名称
    * status  节点状态
    * subStatus  节点子状态
    * spec  节点规格
    * instCreateType  实例创建类型
    * aliasName  节点别名
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'subStatus' => 'sub_status',
            'spec' => 'spec',
            'instCreateType' => 'inst_create_type',
            'aliasName' => 'alias_name',
            'azCode' => 'az_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  节点ID
    * name  节点名称
    * status  节点状态
    * subStatus  节点子状态
    * spec  节点规格
    * instCreateType  实例创建类型
    * aliasName  节点别名
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'subStatus' => 'setSubStatus',
            'spec' => 'setSpec',
            'instCreateType' => 'setInstCreateType',
            'aliasName' => 'setAliasName',
            'azCode' => 'setAzCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  节点ID
    * name  节点名称
    * status  节点状态
    * subStatus  节点子状态
    * spec  节点规格
    * instCreateType  实例创建类型
    * aliasName  节点别名
    * azCode  可用区编码
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'subStatus' => 'getSubStatus',
            'spec' => 'getSpec',
            'instCreateType' => 'getInstCreateType',
            'aliasName' => 'getAliasName',
            'azCode' => 'getAzCode'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subStatus'] = isset($data['subStatus']) ? $data['subStatus'] : null;
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['instCreateType'] = isset($data['instCreateType']) ? $data['instCreateType'] : null;
        $this->container['aliasName'] = isset($data['aliasName']) ? $data['aliasName'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
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
    *  节点ID
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
    * @param string|null $id 节点ID
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
    *  节点名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 节点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  节点状态
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
    * @param string|null $status 节点状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subStatus
    *  节点子状态
    *
    * @return string|null
    */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
    * Sets subStatus
    *
    * @param string|null $subStatus 节点子状态
    *
    * @return $this
    */
    public function setSubStatus($subStatus)
    {
        $this->container['subStatus'] = $subStatus;
        return $this;
    }

    /**
    * Gets spec
    *  节点规格
    *
    * @return string|null
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string|null $spec 节点规格
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets instCreateType
    *  实例创建类型
    *
    * @return string|null
    */
    public function getInstCreateType()
    {
        return $this->container['instCreateType'];
    }

    /**
    * Sets instCreateType
    *
    * @param string|null $instCreateType 实例创建类型
    *
    * @return $this
    */
    public function setInstCreateType($instCreateType)
    {
        $this->container['instCreateType'] = $instCreateType;
        return $this;
    }

    /**
    * Gets aliasName
    *  节点别名
    *
    * @return string|null
    */
    public function getAliasName()
    {
        return $this->container['aliasName'];
    }

    /**
    * Sets aliasName
    *
    * @param string|null $aliasName 节点别名
    *
    * @return $this
    */
    public function setAliasName($aliasName)
    {
        $this->container['aliasName'] = $aliasName;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区编码
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
    * @param string|null $azCode 可用区编码
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
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

