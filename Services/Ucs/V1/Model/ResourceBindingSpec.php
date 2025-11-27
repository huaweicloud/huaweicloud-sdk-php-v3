<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceBindingSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceBindingSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resource  要传播的Kubernetes资源引用
    * propagateDeps  是否自动传播相关资源
    * replicaRequirements  定义每个副本的需求
    * replicas  要创建的副本数量
    * placement  placement
    * clusters  目标成员集群列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resource' => 'object',
            'propagateDeps' => 'bool',
            'replicaRequirements' => 'object',
            'replicas' => 'int',
            'placement' => '\HuaweiCloud\SDK\Ucs\V1\Model\Placement',
            'clusters' => '\HuaweiCloud\SDK\Ucs\V1\Model\TargetCluster[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resource  要传播的Kubernetes资源引用
    * propagateDeps  是否自动传播相关资源
    * replicaRequirements  定义每个副本的需求
    * replicas  要创建的副本数量
    * placement  placement
    * clusters  目标成员集群列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resource' => null,
        'propagateDeps' => null,
        'replicaRequirements' => null,
        'replicas' => 'int32',
        'placement' => null,
        'clusters' => null
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
    * resource  要传播的Kubernetes资源引用
    * propagateDeps  是否自动传播相关资源
    * replicaRequirements  定义每个副本的需求
    * replicas  要创建的副本数量
    * placement  placement
    * clusters  目标成员集群列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resource' => 'resource',
            'propagateDeps' => 'propagateDeps',
            'replicaRequirements' => 'replicaRequirements',
            'replicas' => 'replicas',
            'placement' => 'placement',
            'clusters' => 'clusters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resource  要传播的Kubernetes资源引用
    * propagateDeps  是否自动传播相关资源
    * replicaRequirements  定义每个副本的需求
    * replicas  要创建的副本数量
    * placement  placement
    * clusters  目标成员集群列表
    *
    * @var string[]
    */
    protected static $setters = [
            'resource' => 'setResource',
            'propagateDeps' => 'setPropagateDeps',
            'replicaRequirements' => 'setReplicaRequirements',
            'replicas' => 'setReplicas',
            'placement' => 'setPlacement',
            'clusters' => 'setClusters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resource  要传播的Kubernetes资源引用
    * propagateDeps  是否自动传播相关资源
    * replicaRequirements  定义每个副本的需求
    * replicas  要创建的副本数量
    * placement  placement
    * clusters  目标成员集群列表
    *
    * @var string[]
    */
    protected static $getters = [
            'resource' => 'getResource',
            'propagateDeps' => 'getPropagateDeps',
            'replicaRequirements' => 'getReplicaRequirements',
            'replicas' => 'getReplicas',
            'placement' => 'getPlacement',
            'clusters' => 'getClusters'
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
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['propagateDeps'] = isset($data['propagateDeps']) ? $data['propagateDeps'] : null;
        $this->container['replicaRequirements'] = isset($data['replicaRequirements']) ? $data['replicaRequirements'] : null;
        $this->container['replicas'] = isset($data['replicas']) ? $data['replicas'] : null;
        $this->container['placement'] = isset($data['placement']) ? $data['placement'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
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
    * Gets resource
    *  要传播的Kubernetes资源引用
    *
    * @return object|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param object|null $resource 要传播的Kubernetes资源引用
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets propagateDeps
    *  是否自动传播相关资源
    *
    * @return bool|null
    */
    public function getPropagateDeps()
    {
        return $this->container['propagateDeps'];
    }

    /**
    * Sets propagateDeps
    *
    * @param bool|null $propagateDeps 是否自动传播相关资源
    *
    * @return $this
    */
    public function setPropagateDeps($propagateDeps)
    {
        $this->container['propagateDeps'] = $propagateDeps;
        return $this;
    }

    /**
    * Gets replicaRequirements
    *  定义每个副本的需求
    *
    * @return object|null
    */
    public function getReplicaRequirements()
    {
        return $this->container['replicaRequirements'];
    }

    /**
    * Sets replicaRequirements
    *
    * @param object|null $replicaRequirements 定义每个副本的需求
    *
    * @return $this
    */
    public function setReplicaRequirements($replicaRequirements)
    {
        $this->container['replicaRequirements'] = $replicaRequirements;
        return $this;
    }

    /**
    * Gets replicas
    *  要创建的副本数量
    *
    * @return int|null
    */
    public function getReplicas()
    {
        return $this->container['replicas'];
    }

    /**
    * Sets replicas
    *
    * @param int|null $replicas 要创建的副本数量
    *
    * @return $this
    */
    public function setReplicas($replicas)
    {
        $this->container['replicas'] = $replicas;
        return $this;
    }

    /**
    * Gets placement
    *  placement
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\Placement|null
    */
    public function getPlacement()
    {
        return $this->container['placement'];
    }

    /**
    * Sets placement
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\Placement|null $placement placement
    *
    * @return $this
    */
    public function setPlacement($placement)
    {
        $this->container['placement'] = $placement;
        return $this;
    }

    /**
    * Gets clusters
    *  目标成员集群列表
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\TargetCluster[]|null
    */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
    * Sets clusters
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\TargetCluster[]|null $clusters 目标成员集群列表
    *
    * @return $this
    */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;
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

