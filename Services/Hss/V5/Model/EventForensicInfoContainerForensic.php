<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoContainerForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_container_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： 不涉及
    * podUid  **参数解释**： pod uid **取值范围**： 不涉及
    * podName  **参数解释**： pod name **取值范围**： 不涉及
    * namespace  **参数解释**： 命名空间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群id **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * imageId  **参数解释**： 镜像ID **取值范围**： 不涉及
    * imageName  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * priviledged  **参数解释**： 容器特权开放 **取值范围**： 不涉及
    * pidMode  **参数解释**： 容器pid命名空间模式 **取值范围**： 不涉及
    * ipcMode  **参数解释**： 容器ipc命名空间模式 **取值范围**： 不涉及
    * networkMode  **参数解释**： 容器网络命名空间模式 **取值范围**： 不涉及
    * publishAllports  **参数解释**： 容器开放所有端口 **取值范围**： 不涉及
    * capabilities  **参数解释**： 容器权限 **取值范围**： 不涉及
    * securityOpts  **参数解释**： 容器安全选项 **取值范围**： 不涉及
    * ports  **参数解释**： 容器开放端口 **取值范围**： 不涉及
    * mounts  **参数解释**： 容器挂载目录 **取值范围**： 不涉及
    * sysCall  **参数解释**： 系统调用 **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'containerId' => 'string',
            'containerStatus' => 'string',
            'podUid' => 'string',
            'podName' => 'string',
            'namespace' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'imageId' => 'string',
            'imageName' => 'string',
            'priviledged' => 'bool',
            'pidMode' => 'string',
            'ipcMode' => 'string',
            'networkMode' => 'string',
            'publishAllports' => 'bool',
            'capabilities' => 'string',
            'securityOpts' => 'string',
            'ports' => 'string',
            'mounts' => 'string',
            'sysCall' => 'string',
            'containerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： 不涉及
    * podUid  **参数解释**： pod uid **取值范围**： 不涉及
    * podName  **参数解释**： pod name **取值范围**： 不涉及
    * namespace  **参数解释**： 命名空间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群id **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * imageId  **参数解释**： 镜像ID **取值范围**： 不涉及
    * imageName  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * priviledged  **参数解释**： 容器特权开放 **取值范围**： 不涉及
    * pidMode  **参数解释**： 容器pid命名空间模式 **取值范围**： 不涉及
    * ipcMode  **参数解释**： 容器ipc命名空间模式 **取值范围**： 不涉及
    * networkMode  **参数解释**： 容器网络命名空间模式 **取值范围**： 不涉及
    * publishAllports  **参数解释**： 容器开放所有端口 **取值范围**： 不涉及
    * capabilities  **参数解释**： 容器权限 **取值范围**： 不涉及
    * securityOpts  **参数解释**： 容器安全选项 **取值范围**： 不涉及
    * ports  **参数解释**： 容器开放端口 **取值范围**： 不涉及
    * mounts  **参数解释**： 容器挂载目录 **取值范围**： 不涉及
    * sysCall  **参数解释**： 系统调用 **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'containerId' => null,
        'containerStatus' => null,
        'podUid' => null,
        'podName' => null,
        'namespace' => null,
        'clusterId' => null,
        'clusterName' => null,
        'imageId' => null,
        'imageName' => null,
        'priviledged' => null,
        'pidMode' => null,
        'ipcMode' => null,
        'networkMode' => null,
        'publishAllports' => null,
        'capabilities' => null,
        'securityOpts' => null,
        'ports' => null,
        'mounts' => null,
        'sysCall' => null,
        'containerName' => null
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
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： 不涉及
    * podUid  **参数解释**： pod uid **取值范围**： 不涉及
    * podName  **参数解释**： pod name **取值范围**： 不涉及
    * namespace  **参数解释**： 命名空间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群id **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * imageId  **参数解释**： 镜像ID **取值范围**： 不涉及
    * imageName  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * priviledged  **参数解释**： 容器特权开放 **取值范围**： 不涉及
    * pidMode  **参数解释**： 容器pid命名空间模式 **取值范围**： 不涉及
    * ipcMode  **参数解释**： 容器ipc命名空间模式 **取值范围**： 不涉及
    * networkMode  **参数解释**： 容器网络命名空间模式 **取值范围**： 不涉及
    * publishAllports  **参数解释**： 容器开放所有端口 **取值范围**： 不涉及
    * capabilities  **参数解释**： 容器权限 **取值范围**： 不涉及
    * securityOpts  **参数解释**： 容器安全选项 **取值范围**： 不涉及
    * ports  **参数解释**： 容器开放端口 **取值范围**： 不涉及
    * mounts  **参数解释**： 容器挂载目录 **取值范围**： 不涉及
    * sysCall  **参数解释**： 系统调用 **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'containerId' => 'container_id',
            'containerStatus' => 'container_status',
            'podUid' => 'pod_uid',
            'podName' => 'pod_name',
            'namespace' => 'namespace',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'priviledged' => 'priviledged',
            'pidMode' => 'pid_mode',
            'ipcMode' => 'ipc_mode',
            'networkMode' => 'network_mode',
            'publishAllports' => 'publish_allports',
            'capabilities' => 'capabilities',
            'securityOpts' => 'security_opts',
            'ports' => 'ports',
            'mounts' => 'mounts',
            'sysCall' => 'sys_call',
            'containerName' => 'container_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： 不涉及
    * podUid  **参数解释**： pod uid **取值范围**： 不涉及
    * podName  **参数解释**： pod name **取值范围**： 不涉及
    * namespace  **参数解释**： 命名空间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群id **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * imageId  **参数解释**： 镜像ID **取值范围**： 不涉及
    * imageName  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * priviledged  **参数解释**： 容器特权开放 **取值范围**： 不涉及
    * pidMode  **参数解释**： 容器pid命名空间模式 **取值范围**： 不涉及
    * ipcMode  **参数解释**： 容器ipc命名空间模式 **取值范围**： 不涉及
    * networkMode  **参数解释**： 容器网络命名空间模式 **取值范围**： 不涉及
    * publishAllports  **参数解释**： 容器开放所有端口 **取值范围**： 不涉及
    * capabilities  **参数解释**： 容器权限 **取值范围**： 不涉及
    * securityOpts  **参数解释**： 容器安全选项 **取值范围**： 不涉及
    * ports  **参数解释**： 容器开放端口 **取值范围**： 不涉及
    * mounts  **参数解释**： 容器挂载目录 **取值范围**： 不涉及
    * sysCall  **参数解释**： 系统调用 **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'containerId' => 'setContainerId',
            'containerStatus' => 'setContainerStatus',
            'podUid' => 'setPodUid',
            'podName' => 'setPodName',
            'namespace' => 'setNamespace',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'priviledged' => 'setPriviledged',
            'pidMode' => 'setPidMode',
            'ipcMode' => 'setIpcMode',
            'networkMode' => 'setNetworkMode',
            'publishAllports' => 'setPublishAllports',
            'capabilities' => 'setCapabilities',
            'securityOpts' => 'setSecurityOpts',
            'ports' => 'setPorts',
            'mounts' => 'setMounts',
            'sysCall' => 'setSysCall',
            'containerName' => 'setContainerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * containerId  **参数解释**： 容器ID **取值范围**： 不涉及
    * containerStatus  **参数解释**： 容器状态 **取值范围**： 不涉及
    * podUid  **参数解释**： pod uid **取值范围**： 不涉及
    * podName  **参数解释**： pod name **取值范围**： 不涉及
    * namespace  **参数解释**： 命名空间 **取值范围**： 不涉及
    * clusterId  **参数解释**： 集群id **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 不涉及
    * imageId  **参数解释**： 镜像ID **取值范围**： 不涉及
    * imageName  **参数解释**： 镜像名称 **取值范围**： 不涉及
    * priviledged  **参数解释**： 容器特权开放 **取值范围**： 不涉及
    * pidMode  **参数解释**： 容器pid命名空间模式 **取值范围**： 不涉及
    * ipcMode  **参数解释**： 容器ipc命名空间模式 **取值范围**： 不涉及
    * networkMode  **参数解释**： 容器网络命名空间模式 **取值范围**： 不涉及
    * publishAllports  **参数解释**： 容器开放所有端口 **取值范围**： 不涉及
    * capabilities  **参数解释**： 容器权限 **取值范围**： 不涉及
    * securityOpts  **参数解释**： 容器安全选项 **取值范围**： 不涉及
    * ports  **参数解释**： 容器开放端口 **取值范围**： 不涉及
    * mounts  **参数解释**： 容器挂载目录 **取值范围**： 不涉及
    * sysCall  **参数解释**： 系统调用 **取值范围**： 不涉及
    * containerName  **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'containerId' => 'getContainerId',
            'containerStatus' => 'getContainerStatus',
            'podUid' => 'getPodUid',
            'podName' => 'getPodName',
            'namespace' => 'getNamespace',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'priviledged' => 'getPriviledged',
            'pidMode' => 'getPidMode',
            'ipcMode' => 'getIpcMode',
            'networkMode' => 'getNetworkMode',
            'publishAllports' => 'getPublishAllports',
            'capabilities' => 'getCapabilities',
            'securityOpts' => 'getSecurityOpts',
            'ports' => 'getPorts',
            'mounts' => 'getMounts',
            'sysCall' => 'getSysCall',
            'containerName' => 'getContainerName'
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
        $this->container['containerStatus'] = isset($data['containerStatus']) ? $data['containerStatus'] : null;
        $this->container['podUid'] = isset($data['podUid']) ? $data['podUid'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['priviledged'] = isset($data['priviledged']) ? $data['priviledged'] : null;
        $this->container['pidMode'] = isset($data['pidMode']) ? $data['pidMode'] : null;
        $this->container['ipcMode'] = isset($data['ipcMode']) ? $data['ipcMode'] : null;
        $this->container['networkMode'] = isset($data['networkMode']) ? $data['networkMode'] : null;
        $this->container['publishAllports'] = isset($data['publishAllports']) ? $data['publishAllports'] : null;
        $this->container['capabilities'] = isset($data['capabilities']) ? $data['capabilities'] : null;
        $this->container['securityOpts'] = isset($data['securityOpts']) ? $data['securityOpts'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['mounts'] = isset($data['mounts']) ? $data['mounts'] : null;
        $this->container['sysCall'] = isset($data['sysCall']) ? $data['sysCall'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['containerId']) && !preg_match("/^.*$/", $this->container['containerId'])) {
                $invalidProperties[] = "invalid value for 'containerId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['containerStatus']) && !preg_match("/^.*$/", $this->container['containerStatus'])) {
                $invalidProperties[] = "invalid value for 'containerStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['podUid']) && !preg_match("/^.*$/", $this->container['podUid'])) {
                $invalidProperties[] = "invalid value for 'podUid', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['podName']) && !preg_match("/^.*$/", $this->container['podName'])) {
                $invalidProperties[] = "invalid value for 'podName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^.*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['clusterName']) && !preg_match("/^.*$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageId']) && !preg_match("/^.*$/", $this->container['imageId'])) {
                $invalidProperties[] = "invalid value for 'imageId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['pidMode']) && !preg_match("/^.*$/", $this->container['pidMode'])) {
                $invalidProperties[] = "invalid value for 'pidMode', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['ipcMode']) && !preg_match("/^.*$/", $this->container['ipcMode'])) {
                $invalidProperties[] = "invalid value for 'ipcMode', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['networkMode']) && !preg_match("/^.*$/", $this->container['networkMode'])) {
                $invalidProperties[] = "invalid value for 'networkMode', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['capabilities']) && !preg_match("/^.*$/", $this->container['capabilities'])) {
                $invalidProperties[] = "invalid value for 'capabilities', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['securityOpts']) && !preg_match("/^.*$/", $this->container['securityOpts'])) {
                $invalidProperties[] = "invalid value for 'securityOpts', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['ports']) && !preg_match("/^.*$/", $this->container['ports'])) {
                $invalidProperties[] = "invalid value for 'ports', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['mounts']) && !preg_match("/^.*$/", $this->container['mounts'])) {
                $invalidProperties[] = "invalid value for 'mounts', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['sysCall']) && !preg_match("/^.*$/", $this->container['sysCall'])) {
                $invalidProperties[] = "invalid value for 'sysCall', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['containerName']) && !preg_match("/^.*$/", $this->container['containerName'])) {
                $invalidProperties[] = "invalid value for 'containerName', must be conform to the pattern /^.*$/.";
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
    *  **参数解释**： 容器ID **取值范围**： 不涉及
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
    * @param string|null $containerId **参数解释**： 容器ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerStatus
    *  **参数解释**： 容器状态 **取值范围**： 不涉及
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
    * @param string|null $containerStatus **参数解释**： 容器状态 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setContainerStatus($containerStatus)
    {
        $this->container['containerStatus'] = $containerStatus;
        return $this;
    }

    /**
    * Gets podUid
    *  **参数解释**： pod uid **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPodUid()
    {
        return $this->container['podUid'];
    }

    /**
    * Sets podUid
    *
    * @param string|null $podUid **参数解释**： pod uid **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPodUid($podUid)
    {
        $this->container['podUid'] = $podUid;
        return $this;
    }

    /**
    * Gets podName
    *  **参数解释**： pod name **取值范围**： 不涉及
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
    * @param string|null $podName **参数解释**： pod name **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPodName($podName)
    {
        $this->container['podName'] = $podName;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**： 命名空间 **取值范围**： 不涉及
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
    * @param string|null $namespace **参数解释**： 命名空间 **取值范围**： 不涉及
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
    *  **参数解释**： 集群id **取值范围**： 不涉及
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
    * @param string|null $clusterId **参数解释**： 集群id **取值范围**： 不涉及
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
    *  **参数解释**： 集群名称 **取值范围**： 不涉及
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
    * @param string|null $clusterName **参数解释**： 集群名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**： 镜像ID **取值范围**： 不涉及
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
    * @param string|null $imageId **参数解释**： 镜像ID **取值范围**： 不涉及
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
    *  **参数解释**： 镜像名称 **取值范围**： 不涉及
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
    * @param string|null $imageName **参数解释**： 镜像名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets priviledged
    *  **参数解释**： 容器特权开放 **取值范围**： 不涉及
    *
    * @return bool|null
    */
    public function getPriviledged()
    {
        return $this->container['priviledged'];
    }

    /**
    * Sets priviledged
    *
    * @param bool|null $priviledged **参数解释**： 容器特权开放 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPriviledged($priviledged)
    {
        $this->container['priviledged'] = $priviledged;
        return $this;
    }

    /**
    * Gets pidMode
    *  **参数解释**： 容器pid命名空间模式 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPidMode()
    {
        return $this->container['pidMode'];
    }

    /**
    * Sets pidMode
    *
    * @param string|null $pidMode **参数解释**： 容器pid命名空间模式 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPidMode($pidMode)
    {
        $this->container['pidMode'] = $pidMode;
        return $this;
    }

    /**
    * Gets ipcMode
    *  **参数解释**： 容器ipc命名空间模式 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getIpcMode()
    {
        return $this->container['ipcMode'];
    }

    /**
    * Sets ipcMode
    *
    * @param string|null $ipcMode **参数解释**： 容器ipc命名空间模式 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIpcMode($ipcMode)
    {
        $this->container['ipcMode'] = $ipcMode;
        return $this;
    }

    /**
    * Gets networkMode
    *  **参数解释**： 容器网络命名空间模式 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getNetworkMode()
    {
        return $this->container['networkMode'];
    }

    /**
    * Sets networkMode
    *
    * @param string|null $networkMode **参数解释**： 容器网络命名空间模式 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setNetworkMode($networkMode)
    {
        $this->container['networkMode'] = $networkMode;
        return $this;
    }

    /**
    * Gets publishAllports
    *  **参数解释**： 容器开放所有端口 **取值范围**： 不涉及
    *
    * @return bool|null
    */
    public function getPublishAllports()
    {
        return $this->container['publishAllports'];
    }

    /**
    * Sets publishAllports
    *
    * @param bool|null $publishAllports **参数解释**： 容器开放所有端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPublishAllports($publishAllports)
    {
        $this->container['publishAllports'] = $publishAllports;
        return $this;
    }

    /**
    * Gets capabilities
    *  **参数解释**： 容器权限 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
    * Sets capabilities
    *
    * @param string|null $capabilities **参数解释**： 容器权限 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCapabilities($capabilities)
    {
        $this->container['capabilities'] = $capabilities;
        return $this;
    }

    /**
    * Gets securityOpts
    *  **参数解释**： 容器安全选项 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSecurityOpts()
    {
        return $this->container['securityOpts'];
    }

    /**
    * Sets securityOpts
    *
    * @param string|null $securityOpts **参数解释**： 容器安全选项 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSecurityOpts($securityOpts)
    {
        $this->container['securityOpts'] = $securityOpts;
        return $this;
    }

    /**
    * Gets ports
    *  **参数解释**： 容器开放端口 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param string|null $ports **参数解释**： 容器开放端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
        return $this;
    }

    /**
    * Gets mounts
    *  **参数解释**： 容器挂载目录 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getMounts()
    {
        return $this->container['mounts'];
    }

    /**
    * Sets mounts
    *
    * @param string|null $mounts **参数解释**： 容器挂载目录 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setMounts($mounts)
    {
        $this->container['mounts'] = $mounts;
        return $this;
    }

    /**
    * Gets sysCall
    *  **参数解释**： 系统调用 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSysCall()
    {
        return $this->container['sysCall'];
    }

    /**
    * Sets sysCall
    *
    * @param string|null $sysCall **参数解释**： 系统调用 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSysCall($sysCall)
    {
        $this->container['sysCall'] = $sysCall;
        return $this;
    }

    /**
    * Gets containerName
    *  **参数解释**： 容器名称 **取值范围**： 不涉及
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
    * @param string|null $containerName **参数解释**： 容器名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
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

