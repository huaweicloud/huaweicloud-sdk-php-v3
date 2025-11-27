<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebTamperProtectionContainerResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebTamperProtectionContainerResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  description: |   **参数解释**:   防护状态   **取值范围**:   - protected：防护中   - partial_protected：部分防护   - protect_failed：防护失败
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * allDirectoryNums  **参数解释**: 防护总目录数量 **取值范围**: 最小值0，最大值2147483647
    * protectedDirectoryNums  **参数解释**: 防护成功数量 **取值范围**: 最小值0，最大值2147483647
    * hostInfo  hostInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'containerId' => 'string',
            'containerName' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'podName' => 'string',
            'podIp' => 'string',
            'namespace' => 'string',
            'allDirectoryNums' => 'int',
            'protectedDirectoryNums' => 'int',
            'hostInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventHostInfo',
            'clusterInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventClusterInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  description: |   **参数解释**:   防护状态   **取值范围**:   - protected：防护中   - partial_protected：部分防护   - protect_failed：防护失败
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * allDirectoryNums  **参数解释**: 防护总目录数量 **取值范围**: 最小值0，最大值2147483647
    * protectedDirectoryNums  **参数解释**: 防护成功数量 **取值范围**: 最小值0，最大值2147483647
    * hostInfo  hostInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'containerId' => null,
        'containerName' => null,
        'imageName' => null,
        'imageVersion' => null,
        'podName' => null,
        'podIp' => null,
        'namespace' => null,
        'allDirectoryNums' => 'int32',
        'protectedDirectoryNums' => 'int32',
        'hostInfo' => null,
        'clusterInfo' => null
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
    * status  description: |   **参数解释**:   防护状态   **取值范围**:   - protected：防护中   - partial_protected：部分防护   - protect_failed：防护失败
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * allDirectoryNums  **参数解释**: 防护总目录数量 **取值范围**: 最小值0，最大值2147483647
    * protectedDirectoryNums  **参数解释**: 防护成功数量 **取值范围**: 最小值0，最大值2147483647
    * hostInfo  hostInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'podName' => 'pod_name',
            'podIp' => 'pod_ip',
            'namespace' => 'namespace',
            'allDirectoryNums' => 'all_directory_nums',
            'protectedDirectoryNums' => 'protected_directory_nums',
            'hostInfo' => 'host_info',
            'clusterInfo' => 'cluster_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  description: |   **参数解释**:   防护状态   **取值范围**:   - protected：防护中   - partial_protected：部分防护   - protect_failed：防护失败
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * allDirectoryNums  **参数解释**: 防护总目录数量 **取值范围**: 最小值0，最大值2147483647
    * protectedDirectoryNums  **参数解释**: 防护成功数量 **取值范围**: 最小值0，最大值2147483647
    * hostInfo  hostInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'podName' => 'setPodName',
            'podIp' => 'setPodIp',
            'namespace' => 'setNamespace',
            'allDirectoryNums' => 'setAllDirectoryNums',
            'protectedDirectoryNums' => 'setProtectedDirectoryNums',
            'hostInfo' => 'setHostInfo',
            'clusterInfo' => 'setClusterInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  description: |   **参数解释**:   防护状态   **取值范围**:   - protected：防护中   - partial_protected：部分防护   - protect_failed：防护失败
    * containerId  **参数解释**： 容器ID **取值范围**： 字符长度1-256位
    * containerName  **参数解释**： 容器名称 **取值范围**： 字符长度1-256位
    * imageName  **参数解释**： 镜像名称 **取值范围**： 字符长度1-256位
    * imageVersion  **参数解释**： 镜像版本 **取值范围**： 字符长度1-256位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-256位
    * podIp  **参数解释**： pod ip **取值范围**： 字符长度1-256位
    * namespace  **参数解释**： 命名空间 **取值范围**： 字符长度1-256位
    * allDirectoryNums  **参数解释**: 防护总目录数量 **取值范围**: 最小值0，最大值2147483647
    * protectedDirectoryNums  **参数解释**: 防护成功数量 **取值范围**: 最小值0，最大值2147483647
    * hostInfo  hostInfo
    * clusterInfo  clusterInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'podName' => 'getPodName',
            'podIp' => 'getPodIp',
            'namespace' => 'getNamespace',
            'allDirectoryNums' => 'getAllDirectoryNums',
            'protectedDirectoryNums' => 'getProtectedDirectoryNums',
            'hostInfo' => 'getHostInfo',
            'clusterInfo' => 'getClusterInfo'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['podIp'] = isset($data['podIp']) ? $data['podIp'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['allDirectoryNums'] = isset($data['allDirectoryNums']) ? $data['allDirectoryNums'] : null;
        $this->container['protectedDirectoryNums'] = isset($data['protectedDirectoryNums']) ? $data['protectedDirectoryNums'] : null;
        $this->container['hostInfo'] = isset($data['hostInfo']) ? $data['hostInfo'] : null;
        $this->container['clusterInfo'] = isset($data['clusterInfo']) ? $data['clusterInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 256)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['allDirectoryNums']) && ($this->container['allDirectoryNums'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'allDirectoryNums', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['allDirectoryNums']) && ($this->container['allDirectoryNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'allDirectoryNums', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectedDirectoryNums']) && ($this->container['protectedDirectoryNums'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'protectedDirectoryNums', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['protectedDirectoryNums']) && ($this->container['protectedDirectoryNums'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectedDirectoryNums', must be bigger than or equal to 0.";
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
    * Gets status
    *  description: |   **参数解释**:   防护状态   **取值范围**:   - protected：防护中   - partial_protected：部分防护   - protect_failed：防护失败
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
    * @param string|null $status description: |   **参数解释**:   防护状态   **取值范围**:   - protected：防护中   - partial_protected：部分防护   - protect_failed：防护失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets allDirectoryNums
    *  **参数解释**: 防护总目录数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAllDirectoryNums()
    {
        return $this->container['allDirectoryNums'];
    }

    /**
    * Sets allDirectoryNums
    *
    * @param int|null $allDirectoryNums **参数解释**: 防护总目录数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAllDirectoryNums($allDirectoryNums)
    {
        $this->container['allDirectoryNums'] = $allDirectoryNums;
        return $this;
    }

    /**
    * Gets protectedDirectoryNums
    *  **参数解释**: 防护成功数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProtectedDirectoryNums()
    {
        return $this->container['protectedDirectoryNums'];
    }

    /**
    * Sets protectedDirectoryNums
    *
    * @param int|null $protectedDirectoryNums **参数解释**: 防护成功数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProtectedDirectoryNums($protectedDirectoryNums)
    {
        $this->container['protectedDirectoryNums'] = $protectedDirectoryNums;
        return $this;
    }

    /**
    * Gets hostInfo
    *  hostInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventHostInfo|null
    */
    public function getHostInfo()
    {
        return $this->container['hostInfo'];
    }

    /**
    * Sets hostInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventHostInfo|null $hostInfo hostInfo
    *
    * @return $this
    */
    public function setHostInfo($hostInfo)
    {
        $this->container['hostInfo'] = $hostInfo;
        return $this;
    }

    /**
    * Gets clusterInfo
    *  clusterInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventClusterInfo|null
    */
    public function getClusterInfo()
    {
        return $this->container['clusterInfo'];
    }

    /**
    * Sets clusterInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WebTamperEventClusterInfo|null $clusterInfo clusterInfo
    *
    * @return $this
    */
    public function setClusterInfo($clusterInfo)
    {
        $this->container['clusterInfo'] = $clusterInfo;
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

