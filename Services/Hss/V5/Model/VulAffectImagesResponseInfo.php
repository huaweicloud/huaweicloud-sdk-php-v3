<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulAffectImagesResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulAffectImagesResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-256位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：严重
    * containerNum  **参数解释**: 关联容器数 **取值范围**: 取值0-2147483547
    * imageDigest  **参数解释**: 镜像标识 **取值范围**: 字符长度0-256位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128位
    * status  **参数解释**: 漏洞当前状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略
    * firstScanTime  **参数解释**: 首次扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * latestScanTime  **参数解释**: 最近扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - local_image：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 字符长度0-128位
    * organization  **参数解释**: 所属组织 **取值范围**: 字符长度0-256位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor：harbor - Jfrog：jfrog - SwrPrivate：swr私有 - SwrShared：swr共享 - SwrEnterprise：swr企业 - Other：其他仓库
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度0-256位
    * isMultiArch  **参数解释**: 是否为多架构 **取值范围**: - true：是多架构 - false：不是多架构
    * clusterId  **参数解释**: 集群ID **取值范围**: 字符长度0-128位
    * clusterName  **参数解释**: 集群名称 **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'imageName' => 'string',
            'vulId' => 'string',
            'repairNecessity' => 'string',
            'containerNum' => 'int',
            'imageDigest' => 'string',
            'imageVersion' => 'string',
            'agentId' => 'string',
            'status' => 'string',
            'firstScanTime' => 'string',
            'latestScanTime' => 'string',
            'imageType' => 'string',
            'imageSize' => 'string',
            'organization' => 'string',
            'registryType' => 'string',
            'registryName' => 'string',
            'isMultiArch' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-256位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：严重
    * containerNum  **参数解释**: 关联容器数 **取值范围**: 取值0-2147483547
    * imageDigest  **参数解释**: 镜像标识 **取值范围**: 字符长度0-256位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128位
    * status  **参数解释**: 漏洞当前状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略
    * firstScanTime  **参数解释**: 首次扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * latestScanTime  **参数解释**: 最近扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - local_image：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 字符长度0-128位
    * organization  **参数解释**: 所属组织 **取值范围**: 字符长度0-256位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor：harbor - Jfrog：jfrog - SwrPrivate：swr私有 - SwrShared：swr共享 - SwrEnterprise：swr企业 - Other：其他仓库
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度0-256位
    * isMultiArch  **参数解释**: 是否为多架构 **取值范围**: - true：是多架构 - false：不是多架构
    * clusterId  **参数解释**: 集群ID **取值范围**: 字符长度0-128位
    * clusterName  **参数解释**: 集群名称 **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'imageName' => null,
        'vulId' => null,
        'repairNecessity' => null,
        'containerNum' => null,
        'imageDigest' => null,
        'imageVersion' => null,
        'agentId' => null,
        'status' => null,
        'firstScanTime' => null,
        'latestScanTime' => null,
        'imageType' => null,
        'imageSize' => null,
        'organization' => null,
        'registryType' => null,
        'registryName' => null,
        'isMultiArch' => null,
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
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-256位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：严重
    * containerNum  **参数解释**: 关联容器数 **取值范围**: 取值0-2147483547
    * imageDigest  **参数解释**: 镜像标识 **取值范围**: 字符长度0-256位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128位
    * status  **参数解释**: 漏洞当前状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略
    * firstScanTime  **参数解释**: 首次扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * latestScanTime  **参数解释**: 最近扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - local_image：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 字符长度0-128位
    * organization  **参数解释**: 所属组织 **取值范围**: 字符长度0-256位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor：harbor - Jfrog：jfrog - SwrPrivate：swr私有 - SwrShared：swr共享 - SwrEnterprise：swr企业 - Other：其他仓库
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度0-256位
    * isMultiArch  **参数解释**: 是否为多架构 **取值范围**: - true：是多架构 - false：不是多架构
    * clusterId  **参数解释**: 集群ID **取值范围**: 字符长度0-128位
    * clusterName  **参数解释**: 集群名称 **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'imageName' => 'image_name',
            'vulId' => 'vul_id',
            'repairNecessity' => 'repair_necessity',
            'containerNum' => 'container_num',
            'imageDigest' => 'image_digest',
            'imageVersion' => 'image_version',
            'agentId' => 'agent_id',
            'status' => 'status',
            'firstScanTime' => 'first_scan_time',
            'latestScanTime' => 'latest_scan_time',
            'imageType' => 'image_type',
            'imageSize' => 'image_size',
            'organization' => 'organization',
            'registryType' => 'registry_type',
            'registryName' => 'registry_name',
            'isMultiArch' => 'is_multi_arch',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-256位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：严重
    * containerNum  **参数解释**: 关联容器数 **取值范围**: 取值0-2147483547
    * imageDigest  **参数解释**: 镜像标识 **取值范围**: 字符长度0-256位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128位
    * status  **参数解释**: 漏洞当前状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略
    * firstScanTime  **参数解释**: 首次扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * latestScanTime  **参数解释**: 最近扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - local_image：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 字符长度0-128位
    * organization  **参数解释**: 所属组织 **取值范围**: 字符长度0-256位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor：harbor - Jfrog：jfrog - SwrPrivate：swr私有 - SwrShared：swr共享 - SwrEnterprise：swr企业 - Other：其他仓库
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度0-256位
    * isMultiArch  **参数解释**: 是否为多架构 **取值范围**: - true：是多架构 - false：不是多架构
    * clusterId  **参数解释**: 集群ID **取值范围**: 字符长度0-128位
    * clusterName  **参数解释**: 集群名称 **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'imageName' => 'setImageName',
            'vulId' => 'setVulId',
            'repairNecessity' => 'setRepairNecessity',
            'containerNum' => 'setContainerNum',
            'imageDigest' => 'setImageDigest',
            'imageVersion' => 'setImageVersion',
            'agentId' => 'setAgentId',
            'status' => 'setStatus',
            'firstScanTime' => 'setFirstScanTime',
            'latestScanTime' => 'setLatestScanTime',
            'imageType' => 'setImageType',
            'imageSize' => 'setImageSize',
            'organization' => 'setOrganization',
            'registryType' => 'setRegistryType',
            'registryName' => 'setRegistryName',
            'isMultiArch' => 'setIsMultiArch',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  **参数解释**: 镜像id **取值范围**: 字符长度0-256位
    * imageName  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：严重
    * containerNum  **参数解释**: 关联容器数 **取值范围**: 取值0-2147483547
    * imageDigest  **参数解释**: 镜像标识 **取值范围**: 字符长度0-256位
    * imageVersion  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度0-128位
    * status  **参数解释**: 漏洞当前状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略
    * firstScanTime  **参数解释**: 首次扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * latestScanTime  **参数解释**: 最近扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    * imageType  **参数解释**: 镜像类型 **取值范围**: - local_image：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像
    * imageSize  **参数解释**: 镜像大小 **取值范围**: 字符长度0-128位
    * organization  **参数解释**: 所属组织 **取值范围**: 字符长度0-256位
    * registryType  **参数解释**: 镜像仓类型 **取值范围**: - Harbor：harbor - Jfrog：jfrog - SwrPrivate：swr私有 - SwrShared：swr共享 - SwrEnterprise：swr企业 - Other：其他仓库
    * registryName  **参数解释**: 仓库名称 **取值范围**: 字符长度0-256位
    * isMultiArch  **参数解释**: 是否为多架构 **取值范围**: - true：是多架构 - false：不是多架构
    * clusterId  **参数解释**: 集群ID **取值范围**: 字符长度0-128位
    * clusterName  **参数解释**: 集群名称 **取值范围**: 字符长度0-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'imageName' => 'getImageName',
            'vulId' => 'getVulId',
            'repairNecessity' => 'getRepairNecessity',
            'containerNum' => 'getContainerNum',
            'imageDigest' => 'getImageDigest',
            'imageVersion' => 'getImageVersion',
            'agentId' => 'getAgentId',
            'status' => 'getStatus',
            'firstScanTime' => 'getFirstScanTime',
            'latestScanTime' => 'getLatestScanTime',
            'imageType' => 'getImageType',
            'imageSize' => 'getImageSize',
            'organization' => 'getOrganization',
            'registryType' => 'getRegistryType',
            'registryName' => 'getRegistryName',
            'isMultiArch' => 'getIsMultiArch',
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['containerNum'] = isset($data['containerNum']) ? $data['containerNum'] : null;
        $this->container['imageDigest'] = isset($data['imageDigest']) ? $data['imageDigest'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['latestScanTime'] = isset($data['latestScanTime']) ? $data['latestScanTime'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['registryType'] = isset($data['registryType']) ? $data['registryType'] : null;
        $this->container['registryName'] = isset($data['registryName']) ? $data['registryName'] : null;
        $this->container['isMultiArch'] = isset($data['isMultiArch']) ? $data['isMultiArch'] : null;
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
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 512)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairNecessity']) && !preg_match("/^Low|Medium|High|Critical$/", $this->container['repairNecessity'])) {
                $invalidProperties[] = "invalid value for 'repairNecessity', must be conform to the pattern /^Low|Medium|High|Critical$/.";
            }
            if (!is_null($this->container['containerNum']) && ($this->container['containerNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'containerNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['containerNum']) && ($this->container['containerNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'containerNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) > 256)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['imageDigest']) && (mb_strlen($this->container['imageDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageDigest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^vul_status_unfix|vul_status_ignored$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^vul_status_unfix|vul_status_ignored$/.";
            }
            if (!is_null($this->container['firstScanTime']) && (mb_strlen($this->container['firstScanTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['firstScanTime']) && (mb_strlen($this->container['firstScanTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestScanTime']) && (mb_strlen($this->container['latestScanTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['latestScanTime']) && (mb_strlen($this->container['latestScanTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'latestScanTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageType']) && !preg_match("/^local_image|registry|cicd$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^local_image|registry|cicd$/.";
            }
            if (!is_null($this->container['imageSize']) && (mb_strlen($this->container['imageSize']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageSize', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageSize']) && (mb_strlen($this->container['imageSize']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageSize', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) > 256)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['organization']) && (mb_strlen($this->container['organization']) < 0)) {
                $invalidProperties[] = "invalid value for 'organization', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['registryType']) && !preg_match("/^Harbor|Jfrog|SwrPrivate|SwrShared|SwrEnterprise|Other$/", $this->container['registryType'])) {
                $invalidProperties[] = "invalid value for 'registryType', must be conform to the pattern /^Harbor|Jfrog|SwrPrivate|SwrShared|SwrEnterprise|Other$/.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryName']) && (mb_strlen($this->container['registryName']) < 0)) {
                $invalidProperties[] = "invalid value for 'registryName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isMultiArch']) && !preg_match("/^true|false$/", $this->container['isMultiArch'])) {
                $invalidProperties[] = "invalid value for 'isMultiArch', must be conform to the pattern /^true|false$/.";
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
    * Gets imageId
    *  **参数解释**: 镜像id **取值范围**: 字符长度0-256位
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
    * @param string|null $imageId **参数解释**: 镜像id **取值范围**: 字符长度0-256位
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
    *  **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
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
    * @param string|null $imageName **参数解释**: 镜像名称 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞id **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：严重
    *
    * @return string|null
    */
    public function getRepairNecessity()
    {
        return $this->container['repairNecessity'];
    }

    /**
    * Sets repairNecessity
    *
    * @param string|null $repairNecessity **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：严重
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets containerNum
    *  **参数解释**: 关联容器数 **取值范围**: 取值0-2147483547
    *
    * @return int|null
    */
    public function getContainerNum()
    {
        return $this->container['containerNum'];
    }

    /**
    * Sets containerNum
    *
    * @param int|null $containerNum **参数解释**: 关联容器数 **取值范围**: 取值0-2147483547
    *
    * @return $this
    */
    public function setContainerNum($containerNum)
    {
        $this->container['containerNum'] = $containerNum;
        return $this;
    }

    /**
    * Gets imageDigest
    *  **参数解释**: 镜像标识 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getImageDigest()
    {
        return $this->container['imageDigest'];
    }

    /**
    * Sets imageDigest
    *
    * @param string|null $imageDigest **参数解释**: 镜像标识 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setImageDigest($imageDigest)
    {
        $this->container['imageDigest'] = $imageDigest;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
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
    * @param string|null $imageVersion **参数解释**: 镜像版本 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: Agent ID **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**: Agent ID **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 漏洞当前状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略
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
    * @param string|null $status **参数解释**: 漏洞当前状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  **参数解释**: 首次扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getFirstScanTime()
    {
        return $this->container['firstScanTime'];
    }

    /**
    * Sets firstScanTime
    *
    * @param string|null $firstScanTime **参数解释**: 首次扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
        return $this;
    }

    /**
    * Gets latestScanTime
    *  **参数解释**: 最近扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    *
    * @return string|null
    */
    public function getLatestScanTime()
    {
        return $this->container['latestScanTime'];
    }

    /**
    * Sets latestScanTime
    *
    * @param string|null $latestScanTime **参数解释**: 最近扫描时间（时间戳，单位为毫秒） **取值范围**: 字符长度0-32位
    *
    * @return $this
    */
    public function setLatestScanTime($latestScanTime)
    {
        $this->container['latestScanTime'] = $latestScanTime;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**: 镜像类型 **取值范围**: - local_image：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释**: 镜像类型 **取值范围**: - local_image：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets imageSize
    *  **参数解释**: 镜像大小 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param string|null $imageSize **参数解释**: 镜像大小 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets organization
    *  **参数解释**: 所属组织 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string|null $organization **参数解释**: 所属组织 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
        return $this;
    }

    /**
    * Gets registryType
    *  **参数解释**: 镜像仓类型 **取值范围**: - Harbor：harbor - Jfrog：jfrog - SwrPrivate：swr私有 - SwrShared：swr共享 - SwrEnterprise：swr企业 - Other：其他仓库
    *
    * @return string|null
    */
    public function getRegistryType()
    {
        return $this->container['registryType'];
    }

    /**
    * Sets registryType
    *
    * @param string|null $registryType **参数解释**: 镜像仓类型 **取值范围**: - Harbor：harbor - Jfrog：jfrog - SwrPrivate：swr私有 - SwrShared：swr共享 - SwrEnterprise：swr企业 - Other：其他仓库
    *
    * @return $this
    */
    public function setRegistryType($registryType)
    {
        $this->container['registryType'] = $registryType;
        return $this;
    }

    /**
    * Gets registryName
    *  **参数解释**: 仓库名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getRegistryName()
    {
        return $this->container['registryName'];
    }

    /**
    * Sets registryName
    *
    * @param string|null $registryName **参数解释**: 仓库名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setRegistryName($registryName)
    {
        $this->container['registryName'] = $registryName;
        return $this;
    }

    /**
    * Gets isMultiArch
    *  **参数解释**: 是否为多架构 **取值范围**: - true：是多架构 - false：不是多架构
    *
    * @return string|null
    */
    public function getIsMultiArch()
    {
        return $this->container['isMultiArch'];
    }

    /**
    * Sets isMultiArch
    *
    * @param string|null $isMultiArch **参数解释**: 是否为多架构 **取值范围**: - true：是多架构 - false：不是多架构
    *
    * @return $this
    */
    public function setIsMultiArch($isMultiArch)
    {
        $this->container['isMultiArch'] = $isMultiArch;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群ID **取值范围**: 字符长度0-128位
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
    * @param string|null $clusterId **参数解释**: 集群ID **取值范围**: 字符长度0-128位
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
    *  **参数解释**: 集群名称 **取值范围**: 字符长度0-256位
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
    * @param string|null $clusterName **参数解释**: 集群名称 **取值范围**: 字符长度0-256位
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

