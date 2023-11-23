<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Spec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Spec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  微服务引擎专享版CCE规格ID
    * engineId  微服务引擎专享版ID
    * specType  微服务引擎专享版CCE集群部署类型
    * cluster  微服务引擎专享版CCE集群信息，目前为null
    * clusterId  微服务引擎专享版CCE集群ID
    * clusterNodes  clusterNodes
    * flavor  微服务引擎专享版CCE集群规格
    * region  微服务引擎专享版CCE集群所在region
    * version  微服务引擎专享版CCE集群版本
    * extendParam  微服务引擎专享版CCE集群附加参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'engineId' => 'string',
            'specType' => 'string',
            'cluster' => 'string',
            'clusterId' => 'string',
            'clusterNodes' => '\HuaweiCloud\SDK\Cse\V1\Model\SpecClusterNode',
            'flavor' => 'string',
            'region' => 'string',
            'version' => 'string',
            'extendParam' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  微服务引擎专享版CCE规格ID
    * engineId  微服务引擎专享版ID
    * specType  微服务引擎专享版CCE集群部署类型
    * cluster  微服务引擎专享版CCE集群信息，目前为null
    * clusterId  微服务引擎专享版CCE集群ID
    * clusterNodes  clusterNodes
    * flavor  微服务引擎专享版CCE集群规格
    * region  微服务引擎专享版CCE集群所在region
    * version  微服务引擎专享版CCE集群版本
    * extendParam  微服务引擎专享版CCE集群附加参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'engineId' => null,
        'specType' => null,
        'cluster' => null,
        'clusterId' => null,
        'clusterNodes' => null,
        'flavor' => null,
        'region' => null,
        'version' => null,
        'extendParam' => null
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
    * id  微服务引擎专享版CCE规格ID
    * engineId  微服务引擎专享版ID
    * specType  微服务引擎专享版CCE集群部署类型
    * cluster  微服务引擎专享版CCE集群信息，目前为null
    * clusterId  微服务引擎专享版CCE集群ID
    * clusterNodes  clusterNodes
    * flavor  微服务引擎专享版CCE集群规格
    * region  微服务引擎专享版CCE集群所在region
    * version  微服务引擎专享版CCE集群版本
    * extendParam  微服务引擎专享版CCE集群附加参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'engineId' => 'engineId',
            'specType' => 'specType',
            'cluster' => 'cluster',
            'clusterId' => 'clusterId',
            'clusterNodes' => 'clusterNodes',
            'flavor' => 'flavor',
            'region' => 'region',
            'version' => 'version',
            'extendParam' => 'extendParam'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  微服务引擎专享版CCE规格ID
    * engineId  微服务引擎专享版ID
    * specType  微服务引擎专享版CCE集群部署类型
    * cluster  微服务引擎专享版CCE集群信息，目前为null
    * clusterId  微服务引擎专享版CCE集群ID
    * clusterNodes  clusterNodes
    * flavor  微服务引擎专享版CCE集群规格
    * region  微服务引擎专享版CCE集群所在region
    * version  微服务引擎专享版CCE集群版本
    * extendParam  微服务引擎专享版CCE集群附加参数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'engineId' => 'setEngineId',
            'specType' => 'setSpecType',
            'cluster' => 'setCluster',
            'clusterId' => 'setClusterId',
            'clusterNodes' => 'setClusterNodes',
            'flavor' => 'setFlavor',
            'region' => 'setRegion',
            'version' => 'setVersion',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  微服务引擎专享版CCE规格ID
    * engineId  微服务引擎专享版ID
    * specType  微服务引擎专享版CCE集群部署类型
    * cluster  微服务引擎专享版CCE集群信息，目前为null
    * clusterId  微服务引擎专享版CCE集群ID
    * clusterNodes  clusterNodes
    * flavor  微服务引擎专享版CCE集群规格
    * region  微服务引擎专享版CCE集群所在region
    * version  微服务引擎专享版CCE集群版本
    * extendParam  微服务引擎专享版CCE集群附加参数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'engineId' => 'getEngineId',
            'specType' => 'getSpecType',
            'cluster' => 'getCluster',
            'clusterId' => 'getClusterId',
            'clusterNodes' => 'getClusterNodes',
            'flavor' => 'getFlavor',
            'region' => 'getRegion',
            'version' => 'getVersion',
            'extendParam' => 'getExtendParam'
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
    const SPEC_TYPE_CCE = 'CCE';
    const SPEC_TYPE_CSE = 'CSE';
    const SPEC_TYPE_SPRING_CLOUD = 'SpringCloud';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecTypeAllowableValues()
    {
        return [
            self::SPEC_TYPE_CCE,
            self::SPEC_TYPE_CSE,
            self::SPEC_TYPE_SPRING_CLOUD,
        ];
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
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['specType'] = isset($data['specType']) ? $data['specType'] : null;
        $this->container['cluster'] = isset($data['cluster']) ? $data['cluster'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterNodes'] = isset($data['clusterNodes']) ? $data['clusterNodes'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSpecTypeAllowableValues();
                if (!is_null($this->container['specType']) && !in_array($this->container['specType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  微服务引擎专享版CCE规格ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 微服务引擎专享版CCE规格ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets engineId
    *  微服务引擎专享版ID
    *
    * @return string|null
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string|null $engineId 微服务引擎专享版ID
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets specType
    *  微服务引擎专享版CCE集群部署类型
    *
    * @return string|null
    */
    public function getSpecType()
    {
        return $this->container['specType'];
    }

    /**
    * Sets specType
    *
    * @param string|null $specType 微服务引擎专享版CCE集群部署类型
    *
    * @return $this
    */
    public function setSpecType($specType)
    {
        $this->container['specType'] = $specType;
        return $this;
    }

    /**
    * Gets cluster
    *  微服务引擎专享版CCE集群信息，目前为null
    *
    * @return string|null
    */
    public function getCluster()
    {
        return $this->container['cluster'];
    }

    /**
    * Sets cluster
    *
    * @param string|null $cluster 微服务引擎专享版CCE集群信息，目前为null
    *
    * @return $this
    */
    public function setCluster($cluster)
    {
        $this->container['cluster'] = $cluster;
        return $this;
    }

    /**
    * Gets clusterId
    *  微服务引擎专享版CCE集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 微服务引擎专享版CCE集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterNodes
    *  clusterNodes
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\SpecClusterNode|null
    */
    public function getClusterNodes()
    {
        return $this->container['clusterNodes'];
    }

    /**
    * Sets clusterNodes
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\SpecClusterNode|null $clusterNodes clusterNodes
    *
    * @return $this
    */
    public function setClusterNodes($clusterNodes)
    {
        $this->container['clusterNodes'] = $clusterNodes;
        return $this;
    }

    /**
    * Gets flavor
    *  微服务引擎专享版CCE集群规格
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 微服务引擎专享版CCE集群规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets region
    *  微服务引擎专享版CCE集群所在region
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
    * @param string|null $region 微服务引擎专享版CCE集群所在region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets version
    *  微服务引擎专享版CCE集群版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 微服务引擎专享版CCE集群版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets extendParam
    *  微服务引擎专享版CCE集群附加参数
    *
    * @return string|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param string|null $extendParam 微服务引擎专享版CCE集群附加参数
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

