<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerlessAssetBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerlessAssetBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-255位
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-255位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: - Running：运行中。 - Terminated：终止。 - Waiting：等待。
    * workloadId  **参数解释**: 负载id **取值范围**: 字符长度0-255位
    * workloadName  **参数解释**: 负载名称 **取值范围**: 字符长度0-255位
    * workloadType  **参数解释**: 负载类型 **取值范围**: 字符长度0-255位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-64位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * podId  **参数解释**: pod id **取值范围**: 字符长度0-64位
    * podName  **参数解释**: 实例名称 **取值范围**: 字符长度0-255位
    * podIp  **参数解释**: 实例ip **取值范围**: 字符长度0-255位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-255位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-255位
    * createTime  **参数解释**: 创建时间 **取值范围**: 取值0-4071095999000
    * labels  **参数解释**: 标签列表 **取值范围**: 字符长度0-255位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerId' => 'string',
            'containerName' => 'string',
            'containerStatus' => 'string',
            'workloadId' => 'string',
            'workloadName' => 'string',
            'workloadType' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'namespace' => 'string',
            'podId' => 'string',
            'podName' => 'string',
            'podIp' => 'string',
            'imageId' => 'string',
            'imageName' => 'string',
            'createTime' => 'int',
            'labels' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-255位
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-255位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: - Running：运行中。 - Terminated：终止。 - Waiting：等待。
    * workloadId  **参数解释**: 负载id **取值范围**: 字符长度0-255位
    * workloadName  **参数解释**: 负载名称 **取值范围**: 字符长度0-255位
    * workloadType  **参数解释**: 负载类型 **取值范围**: 字符长度0-255位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-64位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * podId  **参数解释**: pod id **取值范围**: 字符长度0-64位
    * podName  **参数解释**: 实例名称 **取值范围**: 字符长度0-255位
    * podIp  **参数解释**: 实例ip **取值范围**: 字符长度0-255位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-255位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-255位
    * createTime  **参数解释**: 创建时间 **取值范围**: 取值0-4071095999000
    * labels  **参数解释**: 标签列表 **取值范围**: 字符长度0-255位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerId' => null,
        'containerName' => null,
        'containerStatus' => null,
        'workloadId' => null,
        'workloadName' => null,
        'workloadType' => null,
        'clusterId' => null,
        'clusterName' => null,
        'namespace' => null,
        'podId' => null,
        'podName' => null,
        'podIp' => null,
        'imageId' => null,
        'imageName' => null,
        'createTime' => 'int64',
        'labels' => null
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
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-255位
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-255位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: - Running：运行中。 - Terminated：终止。 - Waiting：等待。
    * workloadId  **参数解释**: 负载id **取值范围**: 字符长度0-255位
    * workloadName  **参数解释**: 负载名称 **取值范围**: 字符长度0-255位
    * workloadType  **参数解释**: 负载类型 **取值范围**: 字符长度0-255位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-64位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * podId  **参数解释**: pod id **取值范围**: 字符长度0-64位
    * podName  **参数解释**: 实例名称 **取值范围**: 字符长度0-255位
    * podIp  **参数解释**: 实例ip **取值范围**: 字符长度0-255位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-255位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-255位
    * createTime  **参数解释**: 创建时间 **取值范围**: 取值0-4071095999000
    * labels  **参数解释**: 标签列表 **取值范围**: 字符长度0-255位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'containerStatus' => 'container_status',
            'workloadId' => 'workload_id',
            'workloadName' => 'workload_name',
            'workloadType' => 'workload_type',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'namespace' => 'namespace',
            'podId' => 'pod_id',
            'podName' => 'pod_name',
            'podIp' => 'pod_ip',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'createTime' => 'create_time',
            'labels' => 'labels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-255位
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-255位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: - Running：运行中。 - Terminated：终止。 - Waiting：等待。
    * workloadId  **参数解释**: 负载id **取值范围**: 字符长度0-255位
    * workloadName  **参数解释**: 负载名称 **取值范围**: 字符长度0-255位
    * workloadType  **参数解释**: 负载类型 **取值范围**: 字符长度0-255位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-64位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * podId  **参数解释**: pod id **取值范围**: 字符长度0-64位
    * podName  **参数解释**: 实例名称 **取值范围**: 字符长度0-255位
    * podIp  **参数解释**: 实例ip **取值范围**: 字符长度0-255位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-255位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-255位
    * createTime  **参数解释**: 创建时间 **取值范围**: 取值0-4071095999000
    * labels  **参数解释**: 标签列表 **取值范围**: 字符长度0-255位
    *
    * @var string[]
    */
    protected static $setters = [
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'containerStatus' => 'setContainerStatus',
            'workloadId' => 'setWorkloadId',
            'workloadName' => 'setWorkloadName',
            'workloadType' => 'setWorkloadType',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'namespace' => 'setNamespace',
            'podId' => 'setPodId',
            'podName' => 'setPodName',
            'podIp' => 'setPodIp',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'createTime' => 'setCreateTime',
            'labels' => 'setLabels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度0-255位
    * containerName  **参数解释**: 容器名称 **取值范围**: 字符长度0-255位
    * containerStatus  **参数解释**: 容器状态 **取值范围**: - Running：运行中。 - Terminated：终止。 - Waiting：等待。
    * workloadId  **参数解释**: 负载id **取值范围**: 字符长度0-255位
    * workloadName  **参数解释**: 负载名称 **取值范围**: 字符长度0-255位
    * workloadType  **参数解释**: 负载类型 **取值范围**: 字符长度0-255位
    * clusterId  **参数解释**: 集群id **取值范围**: 字符长度0-64位
    * clusterName  **参数解释**: 所属集群 **取值范围**: 字符长度0-64位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    * podId  **参数解释**: pod id **取值范围**: 字符长度0-64位
    * podName  **参数解释**: 实例名称 **取值范围**: 字符长度0-255位
    * podIp  **参数解释**: 实例ip **取值范围**: 字符长度0-255位
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-255位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-255位
    * createTime  **参数解释**: 创建时间 **取值范围**: 取值0-4071095999000
    * labels  **参数解释**: 标签列表 **取值范围**: 字符长度0-255位
    *
    * @var string[]
    */
    protected static $getters = [
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'containerStatus' => 'getContainerStatus',
            'workloadId' => 'getWorkloadId',
            'workloadName' => 'getWorkloadName',
            'workloadType' => 'getWorkloadType',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'namespace' => 'getNamespace',
            'podId' => 'getPodId',
            'podName' => 'getPodName',
            'podIp' => 'getPodIp',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'createTime' => 'getCreateTime',
            'labels' => 'getLabels'
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
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
        $this->container['containerStatus'] = isset($data['containerStatus']) ? $data['containerStatus'] : null;
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
        $this->container['workloadName'] = isset($data['workloadName']) ? $data['workloadName'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['podId'] = isset($data['podId']) ? $data['podId'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['podIp'] = isset($data['podIp']) ? $data['podIp'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 255)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 255)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerStatus']) && (mb_strlen($this->container['containerStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'containerStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['containerStatus']) && (mb_strlen($this->container['containerStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadId']) && (mb_strlen($this->container['workloadId']) > 255)) {
                $invalidProperties[] = "invalid value for 'workloadId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['workloadId']) && (mb_strlen($this->container['workloadId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadName']) && (mb_strlen($this->container['workloadName']) > 255)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['workloadName']) && (mb_strlen($this->container['workloadName']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadType']) && (mb_strlen($this->container['workloadType']) > 255)) {
                $invalidProperties[] = "invalid value for 'workloadType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['workloadType']) && (mb_strlen($this->container['workloadType']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) > 64)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['podId']) && (mb_strlen($this->container['podId']) < 0)) {
                $invalidProperties[] = "invalid value for 'podId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 255)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) > 255)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['podIp']) && (mb_strlen($this->container['podIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'podIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) > 65535)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['labels']) && (mb_strlen($this->container['labels']) < 0)) {
                $invalidProperties[] = "invalid value for 'labels', the character length must be bigger than or equal to 0.";
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
    * Gets containerId
    *  **参数解释**: 容器ID **取值范围**: 字符长度0-255位
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
    * @param string|null $containerId **参数解释**: 容器ID **取值范围**: 字符长度0-255位
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
    *  **参数解释**: 容器名称 **取值范围**: 字符长度0-255位
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
    * @param string|null $containerName **参数解释**: 容器名称 **取值范围**: 字符长度0-255位
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
        return $this;
    }

    /**
    * Gets containerStatus
    *  **参数解释**: 容器状态 **取值范围**: - Running：运行中。 - Terminated：终止。 - Waiting：等待。
    *
    * @return string|null
    */
    public function getContainerStatus()
    {
        return $this->container['containerStatus'];
    }

    /**
    * Sets containerStatus
    *
    * @param string|null $containerStatus **参数解释**: 容器状态 **取值范围**: - Running：运行中。 - Terminated：终止。 - Waiting：等待。
    *
    * @return $this
    */
    public function setContainerStatus($containerStatus)
    {
        $this->container['containerStatus'] = $containerStatus;
        return $this;
    }

    /**
    * Gets workloadId
    *  **参数解释**: 负载id **取值范围**: 字符长度0-255位
    *
    * @return string|null
    */
    public function getWorkloadId()
    {
        return $this->container['workloadId'];
    }

    /**
    * Sets workloadId
    *
    * @param string|null $workloadId **参数解释**: 负载id **取值范围**: 字符长度0-255位
    *
    * @return $this
    */
    public function setWorkloadId($workloadId)
    {
        $this->container['workloadId'] = $workloadId;
        return $this;
    }

    /**
    * Gets workloadName
    *  **参数解释**: 负载名称 **取值范围**: 字符长度0-255位
    *
    * @return string|null
    */
    public function getWorkloadName()
    {
        return $this->container['workloadName'];
    }

    /**
    * Sets workloadName
    *
    * @param string|null $workloadName **参数解释**: 负载名称 **取值范围**: 字符长度0-255位
    *
    * @return $this
    */
    public function setWorkloadName($workloadName)
    {
        $this->container['workloadName'] = $workloadName;
        return $this;
    }

    /**
    * Gets workloadType
    *  **参数解释**: 负载类型 **取值范围**: 字符长度0-255位
    *
    * @return string|null
    */
    public function getWorkloadType()
    {
        return $this->container['workloadType'];
    }

    /**
    * Sets workloadType
    *
    * @param string|null $workloadType **参数解释**: 负载类型 **取值范围**: 字符长度0-255位
    *
    * @return $this
    */
    public function setWorkloadType($workloadType)
    {
        $this->container['workloadType'] = $workloadType;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群id **取值范围**: 字符长度0-64位
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
    * @param string|null $clusterId **参数解释**: 集群id **取值范围**: 字符长度0-64位
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
    *  **参数解释**: 所属集群 **取值范围**: 字符长度0-64位
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
    * @param string|null $clusterName **参数解释**: 所属集群 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
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
    * @param string|null $namespace **参数解释**: 命名空间 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets podId
    *  **参数解释**: pod id **取值范围**: 字符长度0-64位
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
    * @param string|null $podId **参数解释**: pod id **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setPodId($podId)
    {
        $this->container['podId'] = $podId;
        return $this;
    }

    /**
    * Gets podName
    *  **参数解释**: 实例名称 **取值范围**: 字符长度0-255位
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
    * @param string|null $podName **参数解释**: 实例名称 **取值范围**: 字符长度0-255位
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
    *  **参数解释**: 实例ip **取值范围**: 字符长度0-255位
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
    * @param string|null $podIp **参数解释**: 实例ip **取值范围**: 字符长度0-255位
    *
    * @return $this
    */
    public function setPodIp($podIp)
    {
        $this->container['podIp'] = $podIp;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**: 镜像id **取值范围**: 字符长度0-255位
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释**: 镜像id **取值范围**: 字符长度0-255位
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-255位
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-255位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 创建时间 **取值范围**: 取值0-4071095999000
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**: 创建时间 **取值范围**: 取值0-4071095999000
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**: 标签列表 **取值范围**: 字符长度0-255位
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels **参数解释**: 标签列表 **取值范围**: 字符长度0-255位
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
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

