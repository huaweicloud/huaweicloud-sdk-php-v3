<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventResourceResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventResourceResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  租户账号ID
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * regionName  Region名称
    * vpcId  VPC ID
    * cloudId  云主机ID
    * vmName  虚拟机名称
    * vmUuid  虚拟机UUID
    * containerId  容器ID
    * containerStatus  容器状态
    * podUid  pod uid
    * podName  pod name
    * namespace  namespace
    * clusterId  集群id
    * clusterName  集群名称
    * imageId  镜像ID
    * imageName  镜像名称
    * hostAttr  主机属性
    * service  业务服务
    * microService  微服务
    * sysArch  系统CPU架构
    * osBit  操作系统位数
    * osType  操作系统类型
    * osName  操作系统名称
    * osVersion  操作系统版本
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
            'containerStatus' => 'string',
            'podUid' => 'string',
            'podName' => 'string',
            'namespace' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'imageId' => 'string',
            'imageName' => 'string',
            'hostAttr' => 'string',
            'service' => 'string',
            'microService' => 'string',
            'sysArch' => 'string',
            'osBit' => 'string',
            'osType' => 'string',
            'osName' => 'string',
            'osVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  租户账号ID
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * regionName  Region名称
    * vpcId  VPC ID
    * cloudId  云主机ID
    * vmName  虚拟机名称
    * vmUuid  虚拟机UUID
    * containerId  容器ID
    * containerStatus  容器状态
    * podUid  pod uid
    * podName  pod name
    * namespace  namespace
    * clusterId  集群id
    * clusterName  集群名称
    * imageId  镜像ID
    * imageName  镜像名称
    * hostAttr  主机属性
    * service  业务服务
    * microService  微服务
    * sysArch  系统CPU架构
    * osBit  操作系统位数
    * osType  操作系统类型
    * osName  操作系统名称
    * osVersion  操作系统版本
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
        'containerStatus' => null,
        'podUid' => null,
        'podName' => null,
        'namespace' => null,
        'clusterId' => null,
        'clusterName' => null,
        'imageId' => null,
        'imageName' => null,
        'hostAttr' => null,
        'service' => null,
        'microService' => null,
        'sysArch' => null,
        'osBit' => null,
        'osType' => null,
        'osName' => null,
        'osVersion' => null
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
    * domainId  租户账号ID
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * regionName  Region名称
    * vpcId  VPC ID
    * cloudId  云主机ID
    * vmName  虚拟机名称
    * vmUuid  虚拟机UUID
    * containerId  容器ID
    * containerStatus  容器状态
    * podUid  pod uid
    * podName  pod name
    * namespace  namespace
    * clusterId  集群id
    * clusterName  集群名称
    * imageId  镜像ID
    * imageName  镜像名称
    * hostAttr  主机属性
    * service  业务服务
    * microService  微服务
    * sysArch  系统CPU架构
    * osBit  操作系统位数
    * osType  操作系统类型
    * osName  操作系统名称
    * osVersion  操作系统版本
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
            'containerStatus' => 'container_status',
            'podUid' => 'pod_uid',
            'podName' => 'pod_name',
            'namespace' => 'namespace',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'hostAttr' => 'host_attr',
            'service' => 'service',
            'microService' => 'micro_service',
            'sysArch' => 'sys_arch',
            'osBit' => 'os_bit',
            'osType' => 'os_type',
            'osName' => 'os_name',
            'osVersion' => 'os_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  租户账号ID
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * regionName  Region名称
    * vpcId  VPC ID
    * cloudId  云主机ID
    * vmName  虚拟机名称
    * vmUuid  虚拟机UUID
    * containerId  容器ID
    * containerStatus  容器状态
    * podUid  pod uid
    * podName  pod name
    * namespace  namespace
    * clusterId  集群id
    * clusterName  集群名称
    * imageId  镜像ID
    * imageName  镜像名称
    * hostAttr  主机属性
    * service  业务服务
    * microService  微服务
    * sysArch  系统CPU架构
    * osBit  操作系统位数
    * osType  操作系统类型
    * osName  操作系统名称
    * osVersion  操作系统版本
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
            'containerStatus' => 'setContainerStatus',
            'podUid' => 'setPodUid',
            'podName' => 'setPodName',
            'namespace' => 'setNamespace',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'hostAttr' => 'setHostAttr',
            'service' => 'setService',
            'microService' => 'setMicroService',
            'sysArch' => 'setSysArch',
            'osBit' => 'setOsBit',
            'osType' => 'setOsType',
            'osName' => 'setOsName',
            'osVersion' => 'setOsVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  租户账号ID
    * projectId  项目ID
    * enterpriseProjectId  企业项目ID
    * regionName  Region名称
    * vpcId  VPC ID
    * cloudId  云主机ID
    * vmName  虚拟机名称
    * vmUuid  虚拟机UUID
    * containerId  容器ID
    * containerStatus  容器状态
    * podUid  pod uid
    * podName  pod name
    * namespace  namespace
    * clusterId  集群id
    * clusterName  集群名称
    * imageId  镜像ID
    * imageName  镜像名称
    * hostAttr  主机属性
    * service  业务服务
    * microService  微服务
    * sysArch  系统CPU架构
    * osBit  操作系统位数
    * osType  操作系统类型
    * osName  操作系统名称
    * osVersion  操作系统版本
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
            'containerStatus' => 'getContainerStatus',
            'podUid' => 'getPodUid',
            'podName' => 'getPodName',
            'namespace' => 'getNamespace',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'hostAttr' => 'getHostAttr',
            'service' => 'getService',
            'microService' => 'getMicroService',
            'sysArch' => 'getSysArch',
            'osBit' => 'getOsBit',
            'osType' => 'getOsType',
            'osName' => 'getOsName',
            'osVersion' => 'getOsVersion'
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
        $this->container['containerStatus'] = isset($data['containerStatus']) ? $data['containerStatus'] : null;
        $this->container['podUid'] = isset($data['podUid']) ? $data['podUid'] : null;
        $this->container['podName'] = isset($data['podName']) ? $data['podName'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['hostAttr'] = isset($data['hostAttr']) ? $data['hostAttr'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['microService'] = isset($data['microService']) ? $data['microService'] : null;
        $this->container['sysArch'] = isset($data['sysArch']) ? $data['sysArch'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
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
            if (!is_null($this->container['projectId']) && !preg_match("/^.*$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['hostAttr']) && !preg_match("/^.*$/", $this->container['hostAttr'])) {
                $invalidProperties[] = "invalid value for 'hostAttr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['service']) && !preg_match("/^.*$/", $this->container['service'])) {
                $invalidProperties[] = "invalid value for 'service', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['microService']) && !preg_match("/^.*$/", $this->container['microService'])) {
                $invalidProperties[] = "invalid value for 'microService', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['sysArch']) && !preg_match("/^.*$/", $this->container['sysArch'])) {
                $invalidProperties[] = "invalid value for 'sysArch', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osBit']) && !preg_match("/^.*$/", $this->container['osBit'])) {
                $invalidProperties[] = "invalid value for 'osBit', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && !preg_match("/^.*$/", $this->container['osType'])) {
                $invalidProperties[] = "invalid value for 'osType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osName']) && !preg_match("/^.*$/", $this->container['osName'])) {
                $invalidProperties[] = "invalid value for 'osName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osVersion']) && !preg_match("/^.*$/", $this->container['osVersion'])) {
                $invalidProperties[] = "invalid value for 'osVersion', must be conform to the pattern /^.*$/.";
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
    *  租户账号ID
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
    * @param string|null $domainId 租户账号ID
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
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
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
    *  Region名称
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
    * @param string|null $regionName Region名称
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
    *  VPC ID
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
    * @param string|null $vpcId VPC ID
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
    *  云主机ID
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
    * @param string|null $cloudId 云主机ID
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
    *  虚拟机名称
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
    * @param string|null $vmName 虚拟机名称
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
    *  虚拟机UUID
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
    * @param string|null $vmUuid 虚拟机UUID
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
    * Gets podUid
    *  pod uid
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
    * @param string|null $podUid pod uid
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
    *  pod name
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
    * @param string|null $podName pod name
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
    *  namespace
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
    * @param string|null $namespace namespace
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
    * Gets imageId
    *  镜像ID
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
    * @param string|null $imageId 镜像ID
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
    * Gets hostAttr
    *  主机属性
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
    * @param string|null $hostAttr 主机属性
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
    *  业务服务
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
    * @param string|null $service 业务服务
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
    *  微服务
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
    * @param string|null $microService 微服务
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
    *  系统CPU架构
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
    * @param string|null $sysArch 系统CPU架构
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
    *  操作系统位数
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
    * @param string|null $osBit 操作系统位数
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
    *  操作系统类型
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
    * @param string|null $osType 操作系统类型
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
    *  操作系统名称
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
    * @param string|null $osName 操作系统名称
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
    *  操作系统版本
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
    * @param string|null $osVersion 操作系统版本
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
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

