<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebTamperEventContainerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebTamperEventContainerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * clusterId  **参数解释**： 集群ID **取值范围**： 字符长度1-128位
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageName' => 'string',
            'imageVersion' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'podName' => 'string',
            'podIp' => 'string',
            'namespace' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * clusterId  **参数解释**： 集群ID **取值范围**： 字符长度1-128位
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageName' => null,
        'imageVersion' => null,
        'containerId' => null,
        'containerName' => null,
        'podName' => null,
        'podIp' => null,
        'namespace' => null,
        'clusterId' => null,
        'clusterName' => null
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
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * clusterId  **参数解释**： 集群ID **取值范围**： 字符长度1-128位
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'podName' => 'pod_name',
            'podIp' => 'pod_ip',
            'namespace' => 'namespace',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * clusterId  **参数解释**： 集群ID **取值范围**： 字符长度1-128位
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'podName' => 'setPodName',
            'podIp' => 'setPodIp',
            'namespace' => 'setNamespace',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * clusterId  **参数解释**： 集群ID **取值范围**： 字符长度1-128位
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'podName' => 'getPodName',
            'podIp' => 'getPodIp',
            'namespace' => 'getNamespace',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName'
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['podIp'] = isset($data['podIp']) ? $data['podIp'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 256)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
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
    * Gets imageName
    *  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
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
    * @param string|null $containerId **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
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
    * @param string|null $containerName **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets podName
    *  **参数解释**： pod name **取值范围**： 字符长度1-256位
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
    * @param string|null $podName **参数解释**： pod name **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets podIp
    *  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getPodIp()
    {
        return $this->container['podIp'];
    }

    /**
    * Sets podIp
    *
    * @param string|null $podIp **参数解释**： pod ip **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setPodIp($podIp)
    {
        $this->container['podIp'] = $podIp;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
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
    * @param string|null $namespace **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID **取值范围**： 字符长度1-128位
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
    * @param string|null $clusterId **参数解释**： 集群ID **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**： 集群名称 **取值范围**： 字符长度1-256位
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
    * @param string|null $clusterName **参数解释**： 集群名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
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

