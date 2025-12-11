<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessEventResourceResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessEventResourceResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  **参数解释**： 租户账号ID **取值范围**： 字符长度1-64位
    * projectId  项目ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * regionName  Region ID
    * vpcId  **参数解释**： VPC ID **取值范围**： 字符长度1-64位
    * cloudId  **参数解释**： 云主机ID **取值范围**： 字符长度1-64位
    * vmName  **参数解释**： 虚拟机名称 **取值范围**： 字符长度1-64位
    * vmUuid  **参数解释**： 虚拟机UUID **取值范围**： 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * imageId  **参数解释**： 镜像ID **取值范围**： 字符长度1-64位
    * imageName  **参数解释**： 镜像名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * hostAttr  **参数解释**： 主机属性 **取值范围**： 字符长度1-64位
    * service  **参数解释**： 业务服务 **取值范围**： 字符长度1-64位
    * microService  **参数解释**： 微服务 **取值范围**： 字符长度1-64位
    * sysArch  **参数解释**： 系统CPU架构 **取值范围**： 字符长度1-64位
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * podUid  **参数解释**： pod uid **取值范围**： 字符长度1-64位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-64位
    * namespace  **参数解释**： 名称空间 **取值范围**： 字符长度1-64位
    * clusterId  集群ID
    * clusterName  集群名称
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * containerStatus  容器状态
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    * agentVersion  agent版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'regionName' => 'string',
            'vpcId' => 'string',
            'cloudId' => 'string',
            'vmName' => 'string',
            'vmUuid' => 'string',
            'containerId' => 'string',
            'imageId' => 'string',
            'imageName' => 'string',
            'hostAttr' => 'string',
            'service' => 'string',
            'microService' => 'string',
            'sysArch' => 'string',
            'osBit' => 'string',
            'osType' => 'string',
            'osName' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'publicIp' => 'string',
            'hostId' => 'string',
            'podUid' => 'string',
            'podName' => 'string',
            'namespace' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'assetValue' => 'string',
            'containerStatus' => 'string',
            'osVersion' => 'string',
            'agentVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  **参数解释**： 租户账号ID **取值范围**： 字符长度1-64位
    * projectId  项目ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * regionName  Region ID
    * vpcId  **参数解释**： VPC ID **取值范围**： 字符长度1-64位
    * cloudId  **参数解释**： 云主机ID **取值范围**： 字符长度1-64位
    * vmName  **参数解释**： 虚拟机名称 **取值范围**： 字符长度1-64位
    * vmUuid  **参数解释**： 虚拟机UUID **取值范围**： 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * imageId  **参数解释**： 镜像ID **取值范围**： 字符长度1-64位
    * imageName  **参数解释**： 镜像名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * hostAttr  **参数解释**： 主机属性 **取值范围**： 字符长度1-64位
    * service  **参数解释**： 业务服务 **取值范围**： 字符长度1-64位
    * microService  **参数解释**： 微服务 **取值范围**： 字符长度1-64位
    * sysArch  **参数解释**： 系统CPU架构 **取值范围**： 字符长度1-64位
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * podUid  **参数解释**： pod uid **取值范围**： 字符长度1-64位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-64位
    * namespace  **参数解释**： 名称空间 **取值范围**： 字符长度1-64位
    * clusterId  集群ID
    * clusterName  集群名称
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * containerStatus  容器状态
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    * agentVersion  agent版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'regionName' => null,
        'vpcId' => null,
        'cloudId' => null,
        'vmName' => null,
        'vmUuid' => null,
        'containerId' => null,
        'imageId' => null,
        'imageName' => null,
        'hostAttr' => null,
        'service' => null,
        'microService' => null,
        'sysArch' => null,
        'osBit' => null,
        'osType' => null,
        'osName' => null,
        'hostName' => null,
        'hostIp' => null,
        'publicIp' => null,
        'hostId' => null,
        'podUid' => null,
        'podName' => null,
        'namespace' => null,
        'clusterId' => null,
        'clusterName' => null,
        'assetValue' => null,
        'containerStatus' => null,
        'osVersion' => null,
        'agentVersion' => null
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
    * domainId  **参数解释**： 租户账号ID **取值范围**： 字符长度1-64位
    * projectId  项目ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * regionName  Region ID
    * vpcId  **参数解释**： VPC ID **取值范围**： 字符长度1-64位
    * cloudId  **参数解释**： 云主机ID **取值范围**： 字符长度1-64位
    * vmName  **参数解释**： 虚拟机名称 **取值范围**： 字符长度1-64位
    * vmUuid  **参数解释**： 虚拟机UUID **取值范围**： 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * imageId  **参数解释**： 镜像ID **取值范围**： 字符长度1-64位
    * imageName  **参数解释**： 镜像名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * hostAttr  **参数解释**： 主机属性 **取值范围**： 字符长度1-64位
    * service  **参数解释**： 业务服务 **取值范围**： 字符长度1-64位
    * microService  **参数解释**： 微服务 **取值范围**： 字符长度1-64位
    * sysArch  **参数解释**： 系统CPU架构 **取值范围**： 字符长度1-64位
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * podUid  **参数解释**： pod uid **取值范围**： 字符长度1-64位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-64位
    * namespace  **参数解释**： 名称空间 **取值范围**： 字符长度1-64位
    * clusterId  集群ID
    * clusterName  集群名称
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * containerStatus  容器状态
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    * agentVersion  agent版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'regionName' => 'region_name',
            'vpcId' => 'vpc_id',
            'cloudId' => 'cloud_id',
            'vmName' => 'vm_name',
            'vmUuid' => 'vm_uuid',
            'containerId' => 'container_id',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'hostAttr' => 'host_attr',
            'service' => 'service',
            'microService' => 'micro_service',
            'sysArch' => 'sys_arch',
            'osBit' => 'os_bit',
            'osType' => 'os_type',
            'osName' => 'os_name',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'publicIp' => 'public_ip',
            'hostId' => 'host_id',
            'podUid' => 'pod_uid',
            'podName' => 'pod_name',
            'namespace' => 'namespace',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'assetValue' => 'asset_value',
            'containerStatus' => 'container_status',
            'osVersion' => 'os_version',
            'agentVersion' => 'agent_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  **参数解释**： 租户账号ID **取值范围**： 字符长度1-64位
    * projectId  项目ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * regionName  Region ID
    * vpcId  **参数解释**： VPC ID **取值范围**： 字符长度1-64位
    * cloudId  **参数解释**： 云主机ID **取值范围**： 字符长度1-64位
    * vmName  **参数解释**： 虚拟机名称 **取值范围**： 字符长度1-64位
    * vmUuid  **参数解释**： 虚拟机UUID **取值范围**： 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * imageId  **参数解释**： 镜像ID **取值范围**： 字符长度1-64位
    * imageName  **参数解释**： 镜像名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * hostAttr  **参数解释**： 主机属性 **取值范围**： 字符长度1-64位
    * service  **参数解释**： 业务服务 **取值范围**： 字符长度1-64位
    * microService  **参数解释**： 微服务 **取值范围**： 字符长度1-64位
    * sysArch  **参数解释**： 系统CPU架构 **取值范围**： 字符长度1-64位
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * podUid  **参数解释**： pod uid **取值范围**： 字符长度1-64位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-64位
    * namespace  **参数解释**： 名称空间 **取值范围**： 字符长度1-64位
    * clusterId  集群ID
    * clusterName  集群名称
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * containerStatus  容器状态
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    * agentVersion  agent版本
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'regionName' => 'setRegionName',
            'vpcId' => 'setVpcId',
            'cloudId' => 'setCloudId',
            'vmName' => 'setVmName',
            'vmUuid' => 'setVmUuid',
            'containerId' => 'setContainerId',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'hostAttr' => 'setHostAttr',
            'service' => 'setService',
            'microService' => 'setMicroService',
            'sysArch' => 'setSysArch',
            'osBit' => 'setOsBit',
            'osType' => 'setOsType',
            'osName' => 'setOsName',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'publicIp' => 'setPublicIp',
            'hostId' => 'setHostId',
            'podUid' => 'setPodUid',
            'podName' => 'setPodName',
            'namespace' => 'setNamespace',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'assetValue' => 'setAssetValue',
            'containerStatus' => 'setContainerStatus',
            'osVersion' => 'setOsVersion',
            'agentVersion' => 'setAgentVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  **参数解释**： 租户账号ID **取值范围**： 字符长度1-64位
    * projectId  项目ID
    * enterpriseProjectId  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    * regionName  Region ID
    * vpcId  **参数解释**： VPC ID **取值范围**： 字符长度1-64位
    * cloudId  **参数解释**： 云主机ID **取值范围**： 字符长度1-64位
    * vmName  **参数解释**： 虚拟机名称 **取值范围**： 字符长度1-64位
    * vmUuid  **参数解释**： 虚拟机UUID **取值范围**： 字符长度1-64位
    * containerId  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    * imageId  **参数解释**： 镜像ID **取值范围**： 字符长度1-64位
    * imageName  **参数解释**： 镜像名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    * hostAttr  **参数解释**： 主机属性 **取值范围**： 字符长度1-64位
    * service  **参数解释**： 业务服务 **取值范围**： 字符长度1-64位
    * microService  **参数解释**： 微服务 **取值范围**： 字符长度1-64位
    * sysArch  **参数解释**： 系统CPU架构 **取值范围**： 字符长度1-64位
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    * hostId  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    * podUid  **参数解释**： pod uid **取值范围**： 字符长度1-64位
    * podName  **参数解释**： pod name **取值范围**： 字符长度1-64位
    * namespace  **参数解释**： 名称空间 **取值范围**： 字符长度1-64位
    * clusterId  集群ID
    * clusterName  集群名称
    * assetValue  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    * containerStatus  容器状态
    * osVersion  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    * agentVersion  agent版本
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'regionName' => 'getRegionName',
            'vpcId' => 'getVpcId',
            'cloudId' => 'getCloudId',
            'vmName' => 'getVmName',
            'vmUuid' => 'getVmUuid',
            'containerId' => 'getContainerId',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'hostAttr' => 'getHostAttr',
            'service' => 'getService',
            'microService' => 'getMicroService',
            'sysArch' => 'getSysArch',
            'osBit' => 'getOsBit',
            'osType' => 'getOsType',
            'osName' => 'getOsName',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'publicIp' => 'getPublicIp',
            'hostId' => 'getHostId',
            'podUid' => 'getPodUid',
            'podName' => 'getPodName',
            'namespace' => 'getNamespace',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'assetValue' => 'getAssetValue',
            'containerStatus' => 'getContainerStatus',
            'osVersion' => 'getOsVersion',
            'agentVersion' => 'getAgentVersion'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['cloudId'] = isset($data['cloudId']) ? $data['cloudId'] : null;
        $this->container['vmName'] = isset($data['vmName']) ? $data['vmName'] : null;
        $this->container['vmUuid'] = isset($data['vmUuid']) ? $data['vmUuid'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['hostAttr'] = isset($data['hostAttr']) ? $data['hostAttr'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['microService'] = isset($data['microService']) ? $data['microService'] : null;
        $this->container['sysArch'] = isset($data['sysArch']) ? $data['sysArch'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['podUid'] = isset($data['podUid']) ? $data['podUid'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['containerStatus'] = isset($data['containerStatus']) ? $data['containerStatus'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domainId']) && !preg_match("/^.*$/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^.*$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) > 128)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['regionName']) && (mb_strlen($this->container['regionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionName']) && !preg_match("/^.*$/", $this->container['regionName'])) {
                $invalidProperties[] = "invalid value for 'regionName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['vpcId']) && !preg_match("/^.*$/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['cloudId']) && !preg_match("/^.*$/", $this->container['cloudId'])) {
                $invalidProperties[] = "invalid value for 'cloudId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['vmName']) && !preg_match("/^.*$/", $this->container['vmName'])) {
                $invalidProperties[] = "invalid value for 'vmName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['vmUuid']) && !preg_match("/^.*$/", $this->container['vmUuid'])) {
                $invalidProperties[] = "invalid value for 'vmUuid', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageId']) && !preg_match("/^.*$/", $this->container['imageId'])) {
                $invalidProperties[] = "invalid value for 'imageId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['imageName']) && !preg_match("/^.*$/", $this->container['imageName'])) {
                $invalidProperties[] = "invalid value for 'imageName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostAttr']) && (mb_strlen($this->container['hostAttr']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostAttr', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostAttr']) && (mb_strlen($this->container['hostAttr']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostAttr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostAttr']) && !preg_match("/^.*$/", $this->container['hostAttr'])) {
                $invalidProperties[] = "invalid value for 'hostAttr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['service']) && !preg_match("/^.*$/", $this->container['service'])) {
                $invalidProperties[] = "invalid value for 'service', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['microService']) && !preg_match("/^.*$/", $this->container['microService'])) {
                $invalidProperties[] = "invalid value for 'microService', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['sysArch']) && (mb_strlen($this->container['sysArch']) > 64)) {
                $invalidProperties[] = "invalid value for 'sysArch', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sysArch']) && (mb_strlen($this->container['sysArch']) < 1)) {
                $invalidProperties[] = "invalid value for 'sysArch', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sysArch']) && !preg_match("/^.*$/", $this->container['sysArch'])) {
                $invalidProperties[] = "invalid value for 'sysArch', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) > 64)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) < 1)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osBit']) && !preg_match("/^.*$/", $this->container['osBit'])) {
                $invalidProperties[] = "invalid value for 'osBit', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 64)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 0)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['containerStatus']) && (mb_strlen($this->container['containerStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'containerStatus', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['containerStatus']) && (mb_strlen($this->container['containerStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && !preg_match("/^.*$/", $this->container['agentVersion'])) {
                $invalidProperties[] = "invalid value for 'agentVersion', must be conform to the pattern /^.*$/.";
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
    * Gets domainId
    *  **参数解释**： 租户账号ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId **参数解释**： 租户账号ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
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
    * @param string|null $enterpriseProjectId 主机所属的企业项目ID。 开通企业项目功能后才需要配置企业项目。 企业项目ID默认取值为“0”，表示默认企业项目。如果需要查询所有企业项目下的主机，请传参“all_granted_eps”。如果您只有某个企业项目的权限，则需要传递该企业项目ID，查询该企业项目下的主机，否则会因权限不足而报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets regionName
    *  Region ID
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName Region ID
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： VPC ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId **参数解释**： VPC ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets cloudId
    *  **参数解释**： 云主机ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getCloudId()
    {
        return $this->container['cloudId'];
    }

    /**
    * Sets cloudId
    *
    * @param string|null $cloudId **参数解释**： 云主机ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setCloudId($cloudId)
    {
        $this->container['cloudId'] = $cloudId;
        return $this;
    }

    /**
    * Gets vmName
    *  **参数解释**： 虚拟机名称 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getVmName()
    {
        return $this->container['vmName'];
    }

    /**
    * Sets vmName
    *
    * @param string|null $vmName **参数解释**： 虚拟机名称 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setVmName($vmName)
    {
        $this->container['vmName'] = $vmName;
        return $this;
    }

    /**
    * Gets vmUuid
    *  **参数解释**： 虚拟机UUID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getVmUuid()
    {
        return $this->container['vmUuid'];
    }

    /**
    * Sets vmUuid
    *
    * @param string|null $vmUuid **参数解释**： 虚拟机UUID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setVmUuid($vmUuid)
    {
        $this->container['vmUuid'] = $vmUuid;
        return $this;
    }

    /**
    * Gets containerId
    *  **参数解释**: 容器ID **取值范围**: 字符长度1-128位
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
    * @param string|null $containerId **参数解释**: 容器ID **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释**： 镜像ID **取值范围**： 字符长度1-64位
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
    * @param string|null $imageId **参数解释**： 镜像ID **取值范围**： 字符长度1-64位
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
    *  **参数解释**： 镜像名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
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
    * @param string|null $imageName **参数解释**： 镜像名称，只有容器类型的告警有 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets hostAttr
    *  **参数解释**： 主机属性 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostAttr()
    {
        return $this->container['hostAttr'];
    }

    /**
    * Sets hostAttr
    *
    * @param string|null $hostAttr **参数解释**： 主机属性 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostAttr($hostAttr)
    {
        $this->container['hostAttr'] = $hostAttr;
        return $this;
    }

    /**
    * Gets service
    *  **参数解释**： 业务服务 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string|null $service **参数解释**： 业务服务 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets microService
    *  **参数解释**： 微服务 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getMicroService()
    {
        return $this->container['microService'];
    }

    /**
    * Sets microService
    *
    * @param string|null $microService **参数解释**： 微服务 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setMicroService($microService)
    {
        $this->container['microService'] = $microService;
        return $this;
    }

    /**
    * Gets sysArch
    *  **参数解释**： 系统CPU架构 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getSysArch()
    {
        return $this->container['sysArch'];
    }

    /**
    * Sets sysArch
    *
    * @param string|null $sysArch **参数解释**： 系统CPU架构 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setSysArch($sysArch)
    {
        $this->container['sysArch'] = $sysArch;
        return $this;
    }

    /**
    * Gets osBit
    *  **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getOsBit()
    {
        return $this->container['osBit'];
    }

    /**
    * Sets osBit
    *
    * @param string|null $osBit **参数解释**： 操作系统位数 **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
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
    * @param string|null $osType **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
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
    *  **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
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
    * @param string|null $osName **参数解释**: 操作系统名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
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
    * @param string|null $publicIp **参数解释**： 弹性公网IP地址 **取值范围**： 字符长度1-256位，支持IPv4或IPv6格式（IPv4长度7-15位，IPv6长度15-39位）
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
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
    * @param string|null $hostId **参数解释**： 服务器（主机）的唯一标识ID **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets podUid
    *  **参数解释**： pod uid **取值范围**： 字符长度1-64位
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
    * @param string|null $podUid **参数解释**： pod uid **取值范围**： 字符长度1-64位
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
    *  **参数解释**： pod name **取值范围**： 字符长度1-64位
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
    * @param string|null $podName **参数解释**： pod name **取值范围**： 字符长度1-64位
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
    *  **参数解释**： 名称空间 **取值范围**： 字符长度1-64位
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
    * @param string|null $namespace **参数解释**： 名称空间 **取值范围**： 字符长度1-64位
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
    * Gets assetValue
    *  **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue **参数解释**： 资产重要性。 **取值范围**： - important ：重要资产。 - common ：一般资产。 - test ：测试资产。
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets containerStatus
    *  容器状态
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
    * @param string|null $containerStatus 容器状态
    *
    * @return $this
    */
    public function setContainerStatus($containerStatus)
    {
        $this->container['containerStatus'] = $containerStatus;
        return $this;
    }

    /**
    * Gets osVersion
    *  **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
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
    * @param string|null $osVersion **参数解释**： 系统版本号 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets agentVersion
    *  agent版本
    *
    * @return string|null
    */
    public function getAgentVersion()
    {
        return $this->container['agentVersion'];
    }

    /**
    * Sets agentVersion
    *
    * @param string|null $agentVersion agent版本
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
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

