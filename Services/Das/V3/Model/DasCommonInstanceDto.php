<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DasCommonInstanceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DasCommonInstanceDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID
    * name  实例名称
    * status  实例状态
    * type  实例类型
    * enterpriseProjectId  企业项目ID
    * engineType  数据库引擎类型
    * engineVersion  实例引擎版本
    * port  实例引擎端口
    * region  区域
    * nodes  实例节点列表
    * networkType  数据库来源类型
    * relatedInstance  相关实例列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'type' => 'string',
            'enterpriseProjectId' => 'string',
            'engineType' => 'string',
            'engineVersion' => 'string',
            'port' => 'string',
            'region' => 'string',
            'nodes' => '\HuaweiCloud\SDK\Das\V3\Model\DasCommonInstanceNodeDto[]',
            'networkType' => 'string',
            'relatedInstance' => '\HuaweiCloud\SDK\Das\V3\Model\RelatedInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID
    * name  实例名称
    * status  实例状态
    * type  实例类型
    * enterpriseProjectId  企业项目ID
    * engineType  数据库引擎类型
    * engineVersion  实例引擎版本
    * port  实例引擎端口
    * region  区域
    * nodes  实例节点列表
    * networkType  数据库来源类型
    * relatedInstance  相关实例列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'type' => null,
        'enterpriseProjectId' => null,
        'engineType' => null,
        'engineVersion' => null,
        'port' => null,
        'region' => null,
        'nodes' => null,
        'networkType' => null,
        'relatedInstance' => null
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
    * id  实例ID
    * name  实例名称
    * status  实例状态
    * type  实例类型
    * enterpriseProjectId  企业项目ID
    * engineType  数据库引擎类型
    * engineVersion  实例引擎版本
    * port  实例引擎端口
    * region  区域
    * nodes  实例节点列表
    * networkType  数据库来源类型
    * relatedInstance  相关实例列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'type' => 'type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'engineType' => 'engine_type',
            'engineVersion' => 'engine_version',
            'port' => 'port',
            'region' => 'region',
            'nodes' => 'nodes',
            'networkType' => 'network_type',
            'relatedInstance' => 'related_instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID
    * name  实例名称
    * status  实例状态
    * type  实例类型
    * enterpriseProjectId  企业项目ID
    * engineType  数据库引擎类型
    * engineVersion  实例引擎版本
    * port  实例引擎端口
    * region  区域
    * nodes  实例节点列表
    * networkType  数据库来源类型
    * relatedInstance  相关实例列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'type' => 'setType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'engineType' => 'setEngineType',
            'engineVersion' => 'setEngineVersion',
            'port' => 'setPort',
            'region' => 'setRegion',
            'nodes' => 'setNodes',
            'networkType' => 'setNetworkType',
            'relatedInstance' => 'setRelatedInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID
    * name  实例名称
    * status  实例状态
    * type  实例类型
    * enterpriseProjectId  企业项目ID
    * engineType  数据库引擎类型
    * engineVersion  实例引擎版本
    * port  实例引擎端口
    * region  区域
    * nodes  实例节点列表
    * networkType  数据库来源类型
    * relatedInstance  相关实例列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'type' => 'getType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'engineType' => 'getEngineType',
            'engineVersion' => 'getEngineVersion',
            'port' => 'getPort',
            'region' => 'getRegion',
            'nodes' => 'getNodes',
            'networkType' => 'getNetworkType',
            'relatedInstance' => 'getRelatedInstance'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['relatedInstance'] = isset($data['relatedInstance']) ? $data['relatedInstance'] : null;
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
    *  实例ID
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
    * @param string|null $id 实例ID
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
    *  实例名称
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
    * @param string|null $name 实例名称
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
    *  实例状态
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
    * @param string|null $status 实例状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  实例类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 实例类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets engineVersion
    *  实例引擎版本
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 实例引擎版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets port
    *  实例引擎端口
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port 实例引擎端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets nodes
    *  实例节点列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\DasCommonInstanceNodeDto[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\DasCommonInstanceNodeDto[]|null $nodes 实例节点列表
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets networkType
    *  数据库来源类型
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType 数据库来源类型
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets relatedInstance
    *  相关实例列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\RelatedInstance[]|null
    */
    public function getRelatedInstance()
    {
        return $this->container['relatedInstance'];
    }

    /**
    * Sets relatedInstance
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\RelatedInstance[]|null $relatedInstance 相关实例列表
    *
    * @return $this
    */
    public function setRelatedInstance($relatedInstance)
    {
        $this->container['relatedInstance'] = $relatedInstance;
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

