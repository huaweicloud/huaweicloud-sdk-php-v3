<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulAffectImageContainersResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulAffectImageContainersResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerName  容器名称
    * containerId  容器ID
    * clusterName  集群名称
    * clusterId  集群ID
    * hostName  节点名称
    * publicIp  公网IP
    * privateIp  私网IP
    * podName  pod名称
    * podId  pod id
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerName' => 'string',
            'containerId' => 'string',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'podName' => 'string',
            'podId' => 'string',
            'namespace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerName  容器名称
    * containerId  容器ID
    * clusterName  集群名称
    * clusterId  集群ID
    * hostName  节点名称
    * publicIp  公网IP
    * privateIp  私网IP
    * podName  pod名称
    * podId  pod id
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerName' => null,
        'containerId' => null,
        'clusterName' => null,
        'clusterId' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'podName' => null,
        'podId' => null,
        'namespace' => null
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
    * containerName  容器名称
    * containerId  容器ID
    * clusterName  集群名称
    * clusterId  集群ID
    * hostName  节点名称
    * publicIp  公网IP
    * privateIp  私网IP
    * podName  pod名称
    * podId  pod id
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerName' => 'container_name',
            'containerId' => 'container_id',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'podName' => 'pod_name',
            'podId' => 'pod_id',
            'namespace' => 'namespace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerName  容器名称
    * containerId  容器ID
    * clusterName  集群名称
    * clusterId  集群ID
    * hostName  节点名称
    * publicIp  公网IP
    * privateIp  私网IP
    * podName  pod名称
    * podId  pod id
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $setters = [
            'containerName' => 'setContainerName',
            'containerId' => 'setContainerId',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'podName' => 'setPodName',
            'podId' => 'setPodId',
            'namespace' => 'setNamespace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerName  容器名称
    * containerId  容器ID
    * clusterName  集群名称
    * clusterId  集群ID
    * hostName  节点名称
    * publicIp  公网IP
    * privateIp  私网IP
    * podName  pod名称
    * podId  pod id
    * namespace  命名空间
    *
    * @var string[]
    */
    protected static $getters = [
            'containerName' => 'getContainerName',
            'containerId' => 'getContainerId',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'podName' => 'getPodName',
            'podId' => 'getPodId',
            'namespace' => 'getNamespace'
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
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
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
    * Gets containerName
    *  容器名称
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName 容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets containerId
    *  容器ID
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId 容器ID
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
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
    * @param string|null $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets hostName
    *  节点名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 节点名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  公网IP
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  私网IP
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 私网IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets podName
    *  pod名称
    *
    * @return string|null
    */
    public function getPodName()
    {
        return $this->container['podName'];
    }

    /**
    * Sets podName
    *
    * @param string|null $podName pod名称
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets podId
    *  pod id
    *
    * @return string|null
    */
    public function getPodId()
    {
        return $this->container['podId'];
    }

    /**
    * Sets podId
    *
    * @param string|null $podId pod id
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets namespace
    *  命名空间
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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

