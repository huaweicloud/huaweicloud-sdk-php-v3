<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerBaseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerBaseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerId  容器ID
    * containerName  容器名称
    * imageName  镜像名称
    * status  容器状态，包含以下几种： -Running 运行中 -Terminated 终止 -Waiting 等待
    * createTime  创建时间
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * restartCount  重启次数
    * podName  所属pod名称
    * clusterName  所属集群
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * risky  是否有风险
    * lowRisk  低危风险数量
    * mediumRisk  中危风险数量
    * highRisk  高危风险数量
    * fatalRisk  致命风险数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerId' => 'string',
            'containerName' => 'string',
            'imageName' => 'string',
            'status' => 'string',
            'createTime' => 'int',
            'cpuLimit' => 'string',
            'memoryLimit' => 'string',
            'restartCount' => 'int',
            'podName' => 'string',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'clusterType' => 'string',
            'risky' => 'bool',
            'lowRisk' => 'int',
            'mediumRisk' => 'int',
            'highRisk' => 'int',
            'fatalRisk' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerId  容器ID
    * containerName  容器名称
    * imageName  镜像名称
    * status  容器状态，包含以下几种： -Running 运行中 -Terminated 终止 -Waiting 等待
    * createTime  创建时间
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * restartCount  重启次数
    * podName  所属pod名称
    * clusterName  所属集群
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * risky  是否有风险
    * lowRisk  低危风险数量
    * mediumRisk  中危风险数量
    * highRisk  高危风险数量
    * fatalRisk  致命风险数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerId' => null,
        'containerName' => null,
        'imageName' => null,
        'status' => null,
        'createTime' => 'int64',
        'cpuLimit' => null,
        'memoryLimit' => null,
        'restartCount' => 'int32',
        'podName' => null,
        'clusterName' => null,
        'clusterId' => null,
        'clusterType' => null,
        'risky' => null,
        'lowRisk' => 'int32',
        'mediumRisk' => 'int32',
        'highRisk' => 'int32',
        'fatalRisk' => 'int32'
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
    * containerId  容器ID
    * containerName  容器名称
    * imageName  镜像名称
    * status  容器状态，包含以下几种： -Running 运行中 -Terminated 终止 -Waiting 等待
    * createTime  创建时间
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * restartCount  重启次数
    * podName  所属pod名称
    * clusterName  所属集群
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * risky  是否有风险
    * lowRisk  低危风险数量
    * mediumRisk  中危风险数量
    * highRisk  高危风险数量
    * fatalRisk  致命风险数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerId' => 'container_id',
            'containerName' => 'container_name',
            'imageName' => 'image_name',
            'status' => 'status',
            'createTime' => 'create_time',
            'cpuLimit' => 'cpu_limit',
            'memoryLimit' => 'memory_limit',
            'restartCount' => 'restart_count',
            'podName' => 'pod_name',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type',
            'risky' => 'risky',
            'lowRisk' => 'low_risk',
            'mediumRisk' => 'medium_risk',
            'highRisk' => 'high_risk',
            'fatalRisk' => 'fatal_risk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerId  容器ID
    * containerName  容器名称
    * imageName  镜像名称
    * status  容器状态，包含以下几种： -Running 运行中 -Terminated 终止 -Waiting 等待
    * createTime  创建时间
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * restartCount  重启次数
    * podName  所属pod名称
    * clusterName  所属集群
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * risky  是否有风险
    * lowRisk  低危风险数量
    * mediumRisk  中危风险数量
    * highRisk  高危风险数量
    * fatalRisk  致命风险数量
    *
    * @var string[]
    */
    protected static $setters = [
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName',
            'imageName' => 'setImageName',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'cpuLimit' => 'setCpuLimit',
            'memoryLimit' => 'setMemoryLimit',
            'restartCount' => 'setRestartCount',
            'podName' => 'setPodName',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType',
            'risky' => 'setRisky',
            'lowRisk' => 'setLowRisk',
            'mediumRisk' => 'setMediumRisk',
            'highRisk' => 'setHighRisk',
            'fatalRisk' => 'setFatalRisk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerId  容器ID
    * containerName  容器名称
    * imageName  镜像名称
    * status  容器状态，包含以下几种： -Running 运行中 -Terminated 终止 -Waiting 等待
    * createTime  创建时间
    * cpuLimit  cpu限制
    * memoryLimit  内存限制
    * restartCount  重启次数
    * podName  所属pod名称
    * clusterName  所属集群
    * clusterId  集群id
    * clusterType  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    * risky  是否有风险
    * lowRisk  低危风险数量
    * mediumRisk  中危风险数量
    * highRisk  高危风险数量
    * fatalRisk  致命风险数量
    *
    * @var string[]
    */
    protected static $getters = [
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName',
            'imageName' => 'getImageName',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'cpuLimit' => 'getCpuLimit',
            'memoryLimit' => 'getMemoryLimit',
            'restartCount' => 'getRestartCount',
            'podName' => 'getPodName',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType',
            'risky' => 'getRisky',
            'lowRisk' => 'getLowRisk',
            'mediumRisk' => 'getMediumRisk',
            'highRisk' => 'getHighRisk',
            'fatalRisk' => 'getFatalRisk'
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['memoryLimit'] = isset($data['memoryLimit']) ? $data['memoryLimit'] : null;
        $this->container['restartCount'] = isset($data['restartCount']) ? $data['restartCount'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['risky'] = isset($data['risky']) ? $data['risky'] : null;
        $this->container['lowRisk'] = isset($data['lowRisk']) ? $data['lowRisk'] : null;
        $this->container['mediumRisk'] = isset($data['mediumRisk']) ? $data['mediumRisk'] : null;
        $this->container['highRisk'] = isset($data['highRisk']) ? $data['highRisk'] : null;
        $this->container['fatalRisk'] = isset($data['fatalRisk']) ? $data['fatalRisk'] : null;
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
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 255)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) > 64)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memoryLimit']) && (mb_strlen($this->container['memoryLimit']) > 64)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['memoryLimit']) && (mb_strlen($this->container['memoryLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'memoryLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['restartCount']) && ($this->container['restartCount'] > 20)) {
                $invalidProperties[] = "invalid value for 'restartCount', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['restartCount']) && ($this->container['restartCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'restartCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) > 64)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['podName']) && (mb_strlen($this->container['podName']) < 0)) {
                $invalidProperties[] = "invalid value for 'podName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) > 255)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lowRisk']) && ($this->container['lowRisk'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'lowRisk', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['lowRisk']) && ($this->container['lowRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'lowRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mediumRisk']) && ($this->container['mediumRisk'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mediumRisk', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mediumRisk']) && ($this->container['mediumRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'mediumRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['highRisk']) && ($this->container['highRisk'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'highRisk', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['highRisk']) && ($this->container['highRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'highRisk', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fatalRisk']) && ($this->container['fatalRisk'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fatalRisk', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fatalRisk']) && ($this->container['fatalRisk'] < 0)) {
                $invalidProperties[] = "invalid value for 'fatalRisk', must be bigger than or equal to 0.";
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
    * Gets imageName
    *  镜像名称
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
    * @param string|null $imageName 镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets status
    *  容器状态，包含以下几种： -Running 运行中 -Terminated 终止 -Waiting 等待
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
    * @param string|null $status 容器状态，包含以下几种： -Running 运行中 -Terminated 终止 -Waiting 等待
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets cpuLimit
    *  cpu限制
    *
    * @return string|null
    */
    public function getCpuLimit()
    {
        return $this->container['cpuLimit'];
    }

    /**
    * Sets cpuLimit
    *
    * @param string|null $cpuLimit cpu限制
    *
    * @return $this
    */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;
        return $this;
    }

    /**
    * Gets memoryLimit
    *  内存限制
    *
    * @return string|null
    */
    public function getMemoryLimit()
    {
        return $this->container['memoryLimit'];
    }

    /**
    * Sets memoryLimit
    *
    * @param string|null $memoryLimit 内存限制
    *
    * @return $this
    */
    public function setMemoryLimit($memoryLimit)
    {
        $this->container['memoryLimit'] = $memoryLimit;
        return $this;
    }

    /**
    * Gets restartCount
    *  重启次数
    *
    * @return int|null
    */
    public function getRestartCount()
    {
        return $this->container['restartCount'];
    }

    /**
    * Sets restartCount
    *
    * @param int|null $restartCount 重启次数
    *
    * @return $this
    */
    public function setRestartCount($restartCount)
    {
        $this->container['restartCount'] = $restartCount;
        return $this;
    }

    /**
    * Gets podName
    *  所属pod名称
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
    * @param string|null $podName 所属pod名称
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets clusterName
    *  所属集群
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
    * @param string|null $clusterName 所属集群
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
    *  集群id
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
    * @param string|null $clusterId 集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 集群类型，包含以下几种： -k8s 原生集群 -cce CCE集群 -ali 阿里云集群 -tencent 腾讯云集群 -azure 微软云集群 -aws 亚马逊集群 -self_built_hw 华为云自建集群 -self_built_idc IDC自建集群
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets risky
    *  是否有风险
    *
    * @return bool|null
    */
    public function getRisky()
    {
        return $this->container['risky'];
    }

    /**
    * Sets risky
    *
    * @param bool|null $risky 是否有风险
    *
    * @return $this
    */
    public function setRisky($risky)
    {
        $this->container['risky'] = $risky;
        return $this;
    }

    /**
    * Gets lowRisk
    *  低危风险数量
    *
    * @return int|null
    */
    public function getLowRisk()
    {
        return $this->container['lowRisk'];
    }

    /**
    * Sets lowRisk
    *
    * @param int|null $lowRisk 低危风险数量
    *
    * @return $this
    */
    public function setLowRisk($lowRisk)
    {
        $this->container['lowRisk'] = $lowRisk;
        return $this;
    }

    /**
    * Gets mediumRisk
    *  中危风险数量
    *
    * @return int|null
    */
    public function getMediumRisk()
    {
        return $this->container['mediumRisk'];
    }

    /**
    * Sets mediumRisk
    *
    * @param int|null $mediumRisk 中危风险数量
    *
    * @return $this
    */
    public function setMediumRisk($mediumRisk)
    {
        $this->container['mediumRisk'] = $mediumRisk;
        return $this;
    }

    /**
    * Gets highRisk
    *  高危风险数量
    *
    * @return int|null
    */
    public function getHighRisk()
    {
        return $this->container['highRisk'];
    }

    /**
    * Sets highRisk
    *
    * @param int|null $highRisk 高危风险数量
    *
    * @return $this
    */
    public function setHighRisk($highRisk)
    {
        $this->container['highRisk'] = $highRisk;
        return $this;
    }

    /**
    * Gets fatalRisk
    *  致命风险数量
    *
    * @return int|null
    */
    public function getFatalRisk()
    {
        return $this->container['fatalRisk'];
    }

    /**
    * Sets fatalRisk
    *
    * @param int|null $fatalRisk 致命风险数量
    *
    * @return $this
    */
    public function setFatalRisk($fatalRisk)
    {
        $this->container['fatalRisk'] = $fatalRisk;
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

