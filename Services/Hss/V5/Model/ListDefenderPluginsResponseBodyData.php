<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDefenderPluginsResponseBodyData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDefenderPluginsResponseBodyData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID **取值范围**： 字符长度为1-128位
    * instanceName  **参数解释**： 实例名称，即智能体应用名称 **取值范围**： 字符长度为1-128位
    * instanceVersion  **参数解释**： 实例版本号，即智能体应用版本号 **取值范围**： 字符长度为1-64位
    * instancePort  **参数解释**： 实例端口，即智能体应用监听端口 **取值范围**： 最小值0，最大值65535
    * agentAppType  **参数解释**： 智能体应用类型 **取值范围**： - openclaw：OpenClaw
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE
    * clusterId  **参数解释**： 集群ID，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-128位
    * clusterType  **参数解释**： 集群类型 **取值范围**： - CCE：云容器引擎
    * clusterName  **参数解释**： 集群名称，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-256位
    * hostName  **参数解释**： 服务器名称 **取值范围**： 字符长度为1-256位
    * publicIp  **参数解释**： 服务器公网IP地址 **取值范围**： 字符长度为1-128位
    * privateIp  **参数解释**： 服务器私有IP地址 **取值范围**： 字符长度为1-128位
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：已关机 - BUILD：创建中 - ERROR：异常 - DELETED：已删除 - REBOOT：重启中
    * hostId  **参数解释**： 服务器ID **取值范围**： 字符长度为1-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux - Windows
    * osName  **参数解释**： 操作系统名称 **取值范围**： - EulerOS 2.9 - CentOS 7.9 - Ubuntu 20.04 - 其他操作系统名称
    * osVersion  **参数解释**： 操作系统版本号 **取值范围**： 字符长度为1-64位
    * kernelVersion  **参数解释**： 操作系统内核版本号 **取值范围**： 字符长度为1-128位
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - online：在线 - offline：离线 - not_installed：未安装 - install_failed：安装失败 - installing：安装中
    * defenderStatus  **参数解释**： 智能体卫士插件状态 **取值范围**： - not_installed：未安装 - install_failed：安装失败 - online：在线 - offline：离线 - installing：安装中
    * failedReason  **参数解释**： 安装或卸载失败原因，仅defender_status为install_failed时返回 **取值范围**： 字符长度为0-1024位
    * containerId  **参数解释**： 容器实例ID **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceVersion' => 'string',
            'instancePort' => 'int',
            'agentAppType' => 'string',
            'agentRuntimeEnv' => 'string',
            'clusterId' => 'string',
            'clusterType' => 'string',
            'clusterName' => 'string',
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'hostStatus' => 'string',
            'hostId' => 'string',
            'osType' => 'string',
            'osName' => 'string',
            'osVersion' => 'string',
            'kernelVersion' => 'string',
            'agentStatus' => 'string',
            'defenderStatus' => 'string',
            'failedReason' => 'string',
            'containerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID **取值范围**： 字符长度为1-128位
    * instanceName  **参数解释**： 实例名称，即智能体应用名称 **取值范围**： 字符长度为1-128位
    * instanceVersion  **参数解释**： 实例版本号，即智能体应用版本号 **取值范围**： 字符长度为1-64位
    * instancePort  **参数解释**： 实例端口，即智能体应用监听端口 **取值范围**： 最小值0，最大值65535
    * agentAppType  **参数解释**： 智能体应用类型 **取值范围**： - openclaw：OpenClaw
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE
    * clusterId  **参数解释**： 集群ID，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-128位
    * clusterType  **参数解释**： 集群类型 **取值范围**： - CCE：云容器引擎
    * clusterName  **参数解释**： 集群名称，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-256位
    * hostName  **参数解释**： 服务器名称 **取值范围**： 字符长度为1-256位
    * publicIp  **参数解释**： 服务器公网IP地址 **取值范围**： 字符长度为1-128位
    * privateIp  **参数解释**： 服务器私有IP地址 **取值范围**： 字符长度为1-128位
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：已关机 - BUILD：创建中 - ERROR：异常 - DELETED：已删除 - REBOOT：重启中
    * hostId  **参数解释**： 服务器ID **取值范围**： 字符长度为1-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux - Windows
    * osName  **参数解释**： 操作系统名称 **取值范围**： - EulerOS 2.9 - CentOS 7.9 - Ubuntu 20.04 - 其他操作系统名称
    * osVersion  **参数解释**： 操作系统版本号 **取值范围**： 字符长度为1-64位
    * kernelVersion  **参数解释**： 操作系统内核版本号 **取值范围**： 字符长度为1-128位
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - online：在线 - offline：离线 - not_installed：未安装 - install_failed：安装失败 - installing：安装中
    * defenderStatus  **参数解释**： 智能体卫士插件状态 **取值范围**： - not_installed：未安装 - install_failed：安装失败 - online：在线 - offline：离线 - installing：安装中
    * failedReason  **参数解释**： 安装或卸载失败原因，仅defender_status为install_failed时返回 **取值范围**： 字符长度为0-1024位
    * containerId  **参数解释**： 容器实例ID **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'instanceVersion' => null,
        'instancePort' => 'int32',
        'agentAppType' => null,
        'agentRuntimeEnv' => null,
        'clusterId' => null,
        'clusterType' => null,
        'clusterName' => null,
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'hostStatus' => null,
        'hostId' => null,
        'osType' => null,
        'osName' => null,
        'osVersion' => null,
        'kernelVersion' => null,
        'agentStatus' => null,
        'defenderStatus' => null,
        'failedReason' => null,
        'containerId' => null
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
    * instanceId  **参数解释**： 实例ID **取值范围**： 字符长度为1-128位
    * instanceName  **参数解释**： 实例名称，即智能体应用名称 **取值范围**： 字符长度为1-128位
    * instanceVersion  **参数解释**： 实例版本号，即智能体应用版本号 **取值范围**： 字符长度为1-64位
    * instancePort  **参数解释**： 实例端口，即智能体应用监听端口 **取值范围**： 最小值0，最大值65535
    * agentAppType  **参数解释**： 智能体应用类型 **取值范围**： - openclaw：OpenClaw
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE
    * clusterId  **参数解释**： 集群ID，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-128位
    * clusterType  **参数解释**： 集群类型 **取值范围**： - CCE：云容器引擎
    * clusterName  **参数解释**： 集群名称，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-256位
    * hostName  **参数解释**： 服务器名称 **取值范围**： 字符长度为1-256位
    * publicIp  **参数解释**： 服务器公网IP地址 **取值范围**： 字符长度为1-128位
    * privateIp  **参数解释**： 服务器私有IP地址 **取值范围**： 字符长度为1-128位
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：已关机 - BUILD：创建中 - ERROR：异常 - DELETED：已删除 - REBOOT：重启中
    * hostId  **参数解释**： 服务器ID **取值范围**： 字符长度为1-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux - Windows
    * osName  **参数解释**： 操作系统名称 **取值范围**： - EulerOS 2.9 - CentOS 7.9 - Ubuntu 20.04 - 其他操作系统名称
    * osVersion  **参数解释**： 操作系统版本号 **取值范围**： 字符长度为1-64位
    * kernelVersion  **参数解释**： 操作系统内核版本号 **取值范围**： 字符长度为1-128位
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - online：在线 - offline：离线 - not_installed：未安装 - install_failed：安装失败 - installing：安装中
    * defenderStatus  **参数解释**： 智能体卫士插件状态 **取值范围**： - not_installed：未安装 - install_failed：安装失败 - online：在线 - offline：离线 - installing：安装中
    * failedReason  **参数解释**： 安装或卸载失败原因，仅defender_status为install_failed时返回 **取值范围**： 字符长度为0-1024位
    * containerId  **参数解释**： 容器实例ID **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceVersion' => 'instance_version',
            'instancePort' => 'instance_port',
            'agentAppType' => 'agent_app_type',
            'agentRuntimeEnv' => 'agent_runtime_env',
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type',
            'clusterName' => 'cluster_name',
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'hostStatus' => 'host_status',
            'hostId' => 'host_id',
            'osType' => 'os_type',
            'osName' => 'os_name',
            'osVersion' => 'os_version',
            'kernelVersion' => 'kernel_version',
            'agentStatus' => 'agent_status',
            'defenderStatus' => 'defender_status',
            'failedReason' => 'failed_reason',
            'containerId' => 'container_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**： 实例ID **取值范围**： 字符长度为1-128位
    * instanceName  **参数解释**： 实例名称，即智能体应用名称 **取值范围**： 字符长度为1-128位
    * instanceVersion  **参数解释**： 实例版本号，即智能体应用版本号 **取值范围**： 字符长度为1-64位
    * instancePort  **参数解释**： 实例端口，即智能体应用监听端口 **取值范围**： 最小值0，最大值65535
    * agentAppType  **参数解释**： 智能体应用类型 **取值范围**： - openclaw：OpenClaw
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE
    * clusterId  **参数解释**： 集群ID，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-128位
    * clusterType  **参数解释**： 集群类型 **取值范围**： - CCE：云容器引擎
    * clusterName  **参数解释**： 集群名称，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-256位
    * hostName  **参数解释**： 服务器名称 **取值范围**： 字符长度为1-256位
    * publicIp  **参数解释**： 服务器公网IP地址 **取值范围**： 字符长度为1-128位
    * privateIp  **参数解释**： 服务器私有IP地址 **取值范围**： 字符长度为1-128位
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：已关机 - BUILD：创建中 - ERROR：异常 - DELETED：已删除 - REBOOT：重启中
    * hostId  **参数解释**： 服务器ID **取值范围**： 字符长度为1-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux - Windows
    * osName  **参数解释**： 操作系统名称 **取值范围**： - EulerOS 2.9 - CentOS 7.9 - Ubuntu 20.04 - 其他操作系统名称
    * osVersion  **参数解释**： 操作系统版本号 **取值范围**： 字符长度为1-64位
    * kernelVersion  **参数解释**： 操作系统内核版本号 **取值范围**： 字符长度为1-128位
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - online：在线 - offline：离线 - not_installed：未安装 - install_failed：安装失败 - installing：安装中
    * defenderStatus  **参数解释**： 智能体卫士插件状态 **取值范围**： - not_installed：未安装 - install_failed：安装失败 - online：在线 - offline：离线 - installing：安装中
    * failedReason  **参数解释**： 安装或卸载失败原因，仅defender_status为install_failed时返回 **取值范围**： 字符长度为0-1024位
    * containerId  **参数解释**： 容器实例ID **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceVersion' => 'setInstanceVersion',
            'instancePort' => 'setInstancePort',
            'agentAppType' => 'setAgentAppType',
            'agentRuntimeEnv' => 'setAgentRuntimeEnv',
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType',
            'clusterName' => 'setClusterName',
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'hostStatus' => 'setHostStatus',
            'hostId' => 'setHostId',
            'osType' => 'setOsType',
            'osName' => 'setOsName',
            'osVersion' => 'setOsVersion',
            'kernelVersion' => 'setKernelVersion',
            'agentStatus' => 'setAgentStatus',
            'defenderStatus' => 'setDefenderStatus',
            'failedReason' => 'setFailedReason',
            'containerId' => 'setContainerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**： 实例ID **取值范围**： 字符长度为1-128位
    * instanceName  **参数解释**： 实例名称，即智能体应用名称 **取值范围**： 字符长度为1-128位
    * instanceVersion  **参数解释**： 实例版本号，即智能体应用版本号 **取值范围**： 字符长度为1-64位
    * instancePort  **参数解释**： 实例端口，即智能体应用监听端口 **取值范围**： 最小值0，最大值65535
    * agentAppType  **参数解释**： 智能体应用类型 **取值范围**： - openclaw：OpenClaw
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE
    * clusterId  **参数解释**： 集群ID，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-128位
    * clusterType  **参数解释**： 集群类型 **取值范围**： - CCE：云容器引擎
    * clusterName  **参数解释**： 集群名称，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-256位
    * hostName  **参数解释**： 服务器名称 **取值范围**： 字符长度为1-256位
    * publicIp  **参数解释**： 服务器公网IP地址 **取值范围**： 字符长度为1-128位
    * privateIp  **参数解释**： 服务器私有IP地址 **取值范围**： 字符长度为1-128位
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：已关机 - BUILD：创建中 - ERROR：异常 - DELETED：已删除 - REBOOT：重启中
    * hostId  **参数解释**： 服务器ID **取值范围**： 字符长度为1-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux - Windows
    * osName  **参数解释**： 操作系统名称 **取值范围**： - EulerOS 2.9 - CentOS 7.9 - Ubuntu 20.04 - 其他操作系统名称
    * osVersion  **参数解释**： 操作系统版本号 **取值范围**： 字符长度为1-64位
    * kernelVersion  **参数解释**： 操作系统内核版本号 **取值范围**： 字符长度为1-128位
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - online：在线 - offline：离线 - not_installed：未安装 - install_failed：安装失败 - installing：安装中
    * defenderStatus  **参数解释**： 智能体卫士插件状态 **取值范围**： - not_installed：未安装 - install_failed：安装失败 - online：在线 - offline：离线 - installing：安装中
    * failedReason  **参数解释**： 安装或卸载失败原因，仅defender_status为install_failed时返回 **取值范围**： 字符长度为0-1024位
    * containerId  **参数解释**： 容器实例ID **取值范围**： 字符长度0-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'instanceVersion' => 'getInstanceVersion',
            'instancePort' => 'getInstancePort',
            'agentAppType' => 'getAgentAppType',
            'agentRuntimeEnv' => 'getAgentRuntimeEnv',
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType',
            'clusterName' => 'getClusterName',
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'hostStatus' => 'getHostStatus',
            'hostId' => 'getHostId',
            'osType' => 'getOsType',
            'osName' => 'getOsName',
            'osVersion' => 'getOsVersion',
            'kernelVersion' => 'getKernelVersion',
            'agentStatus' => 'getAgentStatus',
            'defenderStatus' => 'getDefenderStatus',
            'failedReason' => 'getFailedReason',
            'containerId' => 'getContainerId'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceVersion'] = isset($data['instanceVersion']) ? $data['instanceVersion'] : null;
        $this->container['instancePort'] = isset($data['instancePort']) ? $data['instancePort'] : null;
        $this->container['agentAppType'] = isset($data['agentAppType']) ? $data['agentAppType'] : null;
        $this->container['agentRuntimeEnv'] = isset($data['agentRuntimeEnv']) ? $data['agentRuntimeEnv'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['defenderStatus'] = isset($data['defenderStatus']) ? $data['defenderStatus'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceVersion']) && (mb_strlen($this->container['instanceVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceVersion']) && (mb_strlen($this->container['instanceVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instancePort']) && ($this->container['instancePort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'instancePort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['instancePort']) && ($this->container['instancePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'instancePort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentAppType']) && (mb_strlen($this->container['agentAppType']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentAppType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentAppType']) && (mb_strlen($this->container['agentAppType']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentAppType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentRuntimeEnv']) && (mb_strlen($this->container['agentRuntimeEnv']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentRuntimeEnv', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentRuntimeEnv']) && (mb_strlen($this->container['agentRuntimeEnv']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentRuntimeEnv', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 1)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 128)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 1)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['kernelVersion']) && (mb_strlen($this->container['kernelVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'kernelVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['kernelVersion']) && (mb_strlen($this->container['kernelVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'kernelVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['defenderStatus']) && (mb_strlen($this->container['defenderStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'defenderStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['defenderStatus']) && (mb_strlen($this->container['defenderStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'defenderStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 1024)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
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
    * Gets instanceId
    *  **参数解释**： 实例ID **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**： 实例ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**： 实例名称，即智能体应用名称 **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName **参数解释**： 实例名称，即智能体应用名称 **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceVersion
    *  **参数解释**： 实例版本号，即智能体应用版本号 **取值范围**： 字符长度为1-64位
    *
    * @return string|null
    */
    public function getInstanceVersion()
    {
        return $this->container['instanceVersion'];
    }

    /**
    * Sets instanceVersion
    *
    * @param string|null $instanceVersion **参数解释**： 实例版本号，即智能体应用版本号 **取值范围**： 字符长度为1-64位
    *
    * @return $this
    */
    public function setInstanceVersion($instanceVersion)
    {
        $this->container['instanceVersion'] = $instanceVersion;
        return $this;
    }

    /**
    * Gets instancePort
    *  **参数解释**： 实例端口，即智能体应用监听端口 **取值范围**： 最小值0，最大值65535
    *
    * @return int|null
    */
    public function getInstancePort()
    {
        return $this->container['instancePort'];
    }

    /**
    * Sets instancePort
    *
    * @param int|null $instancePort **参数解释**： 实例端口，即智能体应用监听端口 **取值范围**： 最小值0，最大值65535
    *
    * @return $this
    */
    public function setInstancePort($instancePort)
    {
        $this->container['instancePort'] = $instancePort;
        return $this;
    }

    /**
    * Gets agentAppType
    *  **参数解释**： 智能体应用类型 **取值范围**： - openclaw：OpenClaw
    *
    * @return string|null
    */
    public function getAgentAppType()
    {
        return $this->container['agentAppType'];
    }

    /**
    * Sets agentAppType
    *
    * @param string|null $agentAppType **参数解释**： 智能体应用类型 **取值范围**： - openclaw：OpenClaw
    *
    * @return $this
    */
    public function setAgentAppType($agentAppType)
    {
        $this->container['agentAppType'] = $agentAppType;
        return $this;
    }

    /**
    * Gets agentRuntimeEnv
    *  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE
    *
    * @return string|null
    */
    public function getAgentRuntimeEnv()
    {
        return $this->container['agentRuntimeEnv'];
    }

    /**
    * Sets agentRuntimeEnv
    *
    * @param string|null $agentRuntimeEnv **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE
    *
    * @return $this
    */
    public function setAgentRuntimeEnv($agentRuntimeEnv)
    {
        $this->container['agentRuntimeEnv'] = $agentRuntimeEnv;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-128位
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
    * @param string|null $clusterId **参数解释**： 集群ID，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-128位
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
    *  **参数解释**： 集群类型 **取值范围**： - CCE：云容器引擎
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
    * @param string|null $clusterType **参数解释**： 集群类型 **取值范围**： - CCE：云容器引擎
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**： 集群名称，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-256位
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
    * @param string|null $clusterName **参数解释**： 集群名称，仅agent_runtime_env为CCE时返回 **取值范围**： 字符长度为1-256位
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**： 服务器名称 **取值范围**： 字符长度为1-256位
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
    * @param string|null $hostName **参数解释**： 服务器名称 **取值范围**： 字符长度为1-256位
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
    *  **参数解释**： 服务器公网IP地址 **取值范围**： 字符长度为1-128位
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
    * @param string|null $publicIp **参数解释**： 服务器公网IP地址 **取值范围**： 字符长度为1-128位
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
    *  **参数解释**： 服务器私有IP地址 **取值范围**： 字符长度为1-128位
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
    * @param string|null $privateIp **参数解释**： 服务器私有IP地址 **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：已关机 - BUILD：创建中 - ERROR：异常 - DELETED：已删除 - REBOOT：重启中
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：已关机 - BUILD：创建中 - ERROR：异常 - DELETED：已删除 - REBOOT：重启中
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 服务器ID **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 服务器ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： - Linux - Windows
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释**： 操作系统类型 **取值范围**： - Linux - Windows
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osName
    *  **参数解释**： 操作系统名称 **取值范围**： - EulerOS 2.9 - CentOS 7.9 - Ubuntu 20.04 - 其他操作系统名称
    *
    * @return string|null
    */
    public function getOsName()
    {
        return $this->container['osName'];
    }

    /**
    * Sets osName
    *
    * @param string|null $osName **参数解释**： 操作系统名称 **取值范围**： - EulerOS 2.9 - CentOS 7.9 - Ubuntu 20.04 - 其他操作系统名称
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets osVersion
    *  **参数解释**： 操作系统版本号 **取值范围**： 字符长度为1-64位
    *
    * @return string|null
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string|null $osVersion **参数解释**： 操作系统版本号 **取值范围**： 字符长度为1-64位
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets kernelVersion
    *  **参数解释**： 操作系统内核版本号 **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
    * Sets kernelVersion
    *
    * @param string|null $kernelVersion **参数解释**： 操作系统内核版本号 **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**： Agent状态 **取值范围**： - online：在线 - offline：离线 - not_installed：未安装 - install_failed：安装失败 - installing：安装中
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus **参数解释**： Agent状态 **取值范围**： - online：在线 - offline：离线 - not_installed：未安装 - install_failed：安装失败 - installing：安装中
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets defenderStatus
    *  **参数解释**： 智能体卫士插件状态 **取值范围**： - not_installed：未安装 - install_failed：安装失败 - online：在线 - offline：离线 - installing：安装中
    *
    * @return string|null
    */
    public function getDefenderStatus()
    {
        return $this->container['defenderStatus'];
    }

    /**
    * Sets defenderStatus
    *
    * @param string|null $defenderStatus **参数解释**： 智能体卫士插件状态 **取值范围**： - not_installed：未安装 - install_failed：安装失败 - online：在线 - offline：离线 - installing：安装中
    *
    * @return $this
    */
    public function setDefenderStatus($defenderStatus)
    {
        $this->container['defenderStatus'] = $defenderStatus;
        return $this;
    }

    /**
    * Gets failedReason
    *  **参数解释**： 安装或卸载失败原因，仅defender_status为install_failed时返回 **取值范围**： 字符长度为0-1024位
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**： 安装或卸载失败原因，仅defender_status为install_failed时返回 **取值范围**： 字符长度为0-1024位
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**： 容器实例ID **取值范围**： 字符长度0-128位
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
    * @param string|null $containerId **参数解释**： 容器实例ID **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
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

