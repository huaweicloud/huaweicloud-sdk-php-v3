<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkLoadInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkLoadInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 工作负载名称 **取值范围**: 字符长度0-65535位
    * workloadId  **参数解释**: 工作负载Id **取值范围**: 字符长度0-65535位
    * workloadType  **参数解释**: 工作负载类型 **取值范围**: 字符长度0-65535位
    * workloadStatus  **参数解释**: 工作负载状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度0-65535位
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * notInstallNum  **参数解释**: 未安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * installFailedNum  **参数解释**: 安装失败实例个数 **取值范围**: 最小值0，最大值2147483647
    * offlineNum  **参数解释**: 离线agent个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例个数 **取值范围**: 最小值0，最大值2147483647
    * runningJobNum  **参数解释**: 运行任务数 **取值范围**: 最小值0，最大值2147483647
    * imageName  **参数解释**: 镜像名称列表 **取值范围**: 最小值0，最大值256
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * instanceInfo  **参数解释**: 实例信息 **取值范围**: 最小值0，最大值65535
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * lastScheduleTime  **参数解释**: 普通任务为完成时间，定时任务类型为最近调度时间 **取值范围**: 最小值0，最大值9223372036854775807
    * schedule  **参数解释**: 定时任务类型 任务触发 **取值范围**: 字符长度0-65535位
    * upgradable  **参数解释**: 是否可升级 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectName' => 'string',
            'workloadName' => 'string',
            'workloadId' => 'string',
            'workloadType' => 'string',
            'workloadStatus' => 'string',
            'namespaceName' => 'string',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'agentVersion' => 'string',
            'installedPodNum' => 'int',
            'notInstallNum' => 'int',
            'installFailedNum' => 'int',
            'offlineNum' => 'int',
            'podNum' => 'int',
            'protectPodNum' => 'int',
            'runningJobNum' => 'int',
            'imageName' => 'string[]',
            'labels' => '\HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]',
            'instanceInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ServerlessInstanceInfo[]',
            'protectStatus' => 'string',
            'createTime' => 'int',
            'lastScheduleTime' => 'int',
            'schedule' => 'string',
            'upgradable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 工作负载名称 **取值范围**: 字符长度0-65535位
    * workloadId  **参数解释**: 工作负载Id **取值范围**: 字符长度0-65535位
    * workloadType  **参数解释**: 工作负载类型 **取值范围**: 字符长度0-65535位
    * workloadStatus  **参数解释**: 工作负载状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度0-65535位
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * notInstallNum  **参数解释**: 未安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * installFailedNum  **参数解释**: 安装失败实例个数 **取值范围**: 最小值0，最大值2147483647
    * offlineNum  **参数解释**: 离线agent个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例个数 **取值范围**: 最小值0，最大值2147483647
    * runningJobNum  **参数解释**: 运行任务数 **取值范围**: 最小值0，最大值2147483647
    * imageName  **参数解释**: 镜像名称列表 **取值范围**: 最小值0，最大值256
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * instanceInfo  **参数解释**: 实例信息 **取值范围**: 最小值0，最大值65535
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * lastScheduleTime  **参数解释**: 普通任务为完成时间，定时任务类型为最近调度时间 **取值范围**: 最小值0，最大值9223372036854775807
    * schedule  **参数解释**: 定时任务类型 任务触发 **取值范围**: 字符长度0-65535位
    * upgradable  **参数解释**: 是否可升级 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectName' => null,
        'workloadName' => null,
        'workloadId' => null,
        'workloadType' => null,
        'workloadStatus' => null,
        'namespaceName' => null,
        'clusterName' => null,
        'clusterId' => null,
        'agentVersion' => null,
        'installedPodNum' => 'int32',
        'notInstallNum' => 'int32',
        'installFailedNum' => 'int32',
        'offlineNum' => 'int32',
        'podNum' => 'int32',
        'protectPodNum' => 'int32',
        'runningJobNum' => 'int32',
        'imageName' => null,
        'labels' => null,
        'instanceInfo' => null,
        'protectStatus' => null,
        'createTime' => 'int64',
        'lastScheduleTime' => 'int64',
        'schedule' => null,
        'upgradable' => null
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
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 工作负载名称 **取值范围**: 字符长度0-65535位
    * workloadId  **参数解释**: 工作负载Id **取值范围**: 字符长度0-65535位
    * workloadType  **参数解释**: 工作负载类型 **取值范围**: 字符长度0-65535位
    * workloadStatus  **参数解释**: 工作负载状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度0-65535位
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * notInstallNum  **参数解释**: 未安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * installFailedNum  **参数解释**: 安装失败实例个数 **取值范围**: 最小值0，最大值2147483647
    * offlineNum  **参数解释**: 离线agent个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例个数 **取值范围**: 最小值0，最大值2147483647
    * runningJobNum  **参数解释**: 运行任务数 **取值范围**: 最小值0，最大值2147483647
    * imageName  **参数解释**: 镜像名称列表 **取值范围**: 最小值0，最大值256
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * instanceInfo  **参数解释**: 实例信息 **取值范围**: 最小值0，最大值65535
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * lastScheduleTime  **参数解释**: 普通任务为完成时间，定时任务类型为最近调度时间 **取值范围**: 最小值0，最大值9223372036854775807
    * schedule  **参数解释**: 定时任务类型 任务触发 **取值范围**: 字符长度0-65535位
    * upgradable  **参数解释**: 是否可升级 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectName' => 'enterprise_project_name',
            'workloadName' => 'workload_name',
            'workloadId' => 'workload_id',
            'workloadType' => 'workload_type',
            'workloadStatus' => 'workload_status',
            'namespaceName' => 'namespace_name',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'agentVersion' => 'agent_version',
            'installedPodNum' => 'installed_pod_num',
            'notInstallNum' => 'not_install_num',
            'installFailedNum' => 'install_failed_num',
            'offlineNum' => 'offline_num',
            'podNum' => 'pod_num',
            'protectPodNum' => 'protect_pod_num',
            'runningJobNum' => 'running_job_num',
            'imageName' => 'image_name',
            'labels' => 'labels',
            'instanceInfo' => 'instance_info',
            'protectStatus' => 'protect_status',
            'createTime' => 'create_time',
            'lastScheduleTime' => 'last_schedule_time',
            'schedule' => 'schedule',
            'upgradable' => 'upgradable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 工作负载名称 **取值范围**: 字符长度0-65535位
    * workloadId  **参数解释**: 工作负载Id **取值范围**: 字符长度0-65535位
    * workloadType  **参数解释**: 工作负载类型 **取值范围**: 字符长度0-65535位
    * workloadStatus  **参数解释**: 工作负载状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度0-65535位
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * notInstallNum  **参数解释**: 未安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * installFailedNum  **参数解释**: 安装失败实例个数 **取值范围**: 最小值0，最大值2147483647
    * offlineNum  **参数解释**: 离线agent个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例个数 **取值范围**: 最小值0，最大值2147483647
    * runningJobNum  **参数解释**: 运行任务数 **取值范围**: 最小值0，最大值2147483647
    * imageName  **参数解释**: 镜像名称列表 **取值范围**: 最小值0，最大值256
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * instanceInfo  **参数解释**: 实例信息 **取值范围**: 最小值0，最大值65535
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * lastScheduleTime  **参数解释**: 普通任务为完成时间，定时任务类型为最近调度时间 **取值范围**: 最小值0，最大值9223372036854775807
    * schedule  **参数解释**: 定时任务类型 任务触发 **取值范围**: 字符长度0-65535位
    * upgradable  **参数解释**: 是否可升级 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'workloadName' => 'setWorkloadName',
            'workloadId' => 'setWorkloadId',
            'workloadType' => 'setWorkloadType',
            'workloadStatus' => 'setWorkloadStatus',
            'namespaceName' => 'setNamespaceName',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'agentVersion' => 'setAgentVersion',
            'installedPodNum' => 'setInstalledPodNum',
            'notInstallNum' => 'setNotInstallNum',
            'installFailedNum' => 'setInstallFailedNum',
            'offlineNum' => 'setOfflineNum',
            'podNum' => 'setPodNum',
            'protectPodNum' => 'setProtectPodNum',
            'runningJobNum' => 'setRunningJobNum',
            'imageName' => 'setImageName',
            'labels' => 'setLabels',
            'instanceInfo' => 'setInstanceInfo',
            'protectStatus' => 'setProtectStatus',
            'createTime' => 'setCreateTime',
            'lastScheduleTime' => 'setLastScheduleTime',
            'schedule' => 'setSchedule',
            'upgradable' => 'setUpgradable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 工作负载名称 **取值范围**: 字符长度0-65535位
    * workloadId  **参数解释**: 工作负载Id **取值范围**: 字符长度0-65535位
    * workloadType  **参数解释**: 工作负载类型 **取值范围**: 字符长度0-65535位
    * workloadStatus  **参数解释**: 工作负载状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * agentVersion  **参数解释**: agent版本 **取值范围**: 字符长度0-65535位
    * installedPodNum  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * notInstallNum  **参数解释**: 未安装实例个数 **取值范围**: 最小值0，最大值2147483647
    * installFailedNum  **参数解释**: 安装失败实例个数 **取值范围**: 最小值0，最大值2147483647
    * offlineNum  **参数解释**: 离线agent个数 **取值范围**: 最小值0，最大值2147483647
    * podNum  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    * protectPodNum  **参数解释**: 已防护实例个数 **取值范围**: 最小值0，最大值2147483647
    * runningJobNum  **参数解释**: 运行任务数 **取值范围**: 最小值0，最大值2147483647
    * imageName  **参数解释**: 镜像名称列表 **取值范围**: 最小值0，最大值256
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * instanceInfo  **参数解释**: 实例信息 **取值范围**: 最小值0，最大值65535
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * lastScheduleTime  **参数解释**: 普通任务为完成时间，定时任务类型为最近调度时间 **取值范围**: 最小值0，最大值9223372036854775807
    * schedule  **参数解释**: 定时任务类型 任务触发 **取值范围**: 字符长度0-65535位
    * upgradable  **参数解释**: 是否可升级 **取值范围**: - true：是。 - false：否。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'workloadName' => 'getWorkloadName',
            'workloadId' => 'getWorkloadId',
            'workloadType' => 'getWorkloadType',
            'workloadStatus' => 'getWorkloadStatus',
            'namespaceName' => 'getNamespaceName',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'agentVersion' => 'getAgentVersion',
            'installedPodNum' => 'getInstalledPodNum',
            'notInstallNum' => 'getNotInstallNum',
            'installFailedNum' => 'getInstallFailedNum',
            'offlineNum' => 'getOfflineNum',
            'podNum' => 'getPodNum',
            'protectPodNum' => 'getProtectPodNum',
            'runningJobNum' => 'getRunningJobNum',
            'imageName' => 'getImageName',
            'labels' => 'getLabels',
            'instanceInfo' => 'getInstanceInfo',
            'protectStatus' => 'getProtectStatus',
            'createTime' => 'getCreateTime',
            'lastScheduleTime' => 'getLastScheduleTime',
            'schedule' => 'getSchedule',
            'upgradable' => 'getUpgradable'
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
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['workloadName'] = isset($data['workloadName']) ? $data['workloadName'] : null;
        $this->container['workloadId'] = isset($data['workloadId']) ? $data['workloadId'] : null;
        $this->container['workloadType'] = isset($data['workloadType']) ? $data['workloadType'] : null;
        $this->container['workloadStatus'] = isset($data['workloadStatus']) ? $data['workloadStatus'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['installedPodNum'] = isset($data['installedPodNum']) ? $data['installedPodNum'] : null;
        $this->container['notInstallNum'] = isset($data['notInstallNum']) ? $data['notInstallNum'] : null;
        $this->container['installFailedNum'] = isset($data['installFailedNum']) ? $data['installFailedNum'] : null;
        $this->container['offlineNum'] = isset($data['offlineNum']) ? $data['offlineNum'] : null;
        $this->container['podNum'] = isset($data['podNum']) ? $data['podNum'] : null;
        $this->container['protectPodNum'] = isset($data['protectPodNum']) ? $data['protectPodNum'] : null;
        $this->container['runningJobNum'] = isset($data['runningJobNum']) ? $data['runningJobNum'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['instanceInfo'] = isset($data['instanceInfo']) ? $data['instanceInfo'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastScheduleTime'] = isset($data['lastScheduleTime']) ? $data['lastScheduleTime'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['upgradable'] = isset($data['upgradable']) ? $data['upgradable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadName']) && (mb_strlen($this->container['workloadName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['workloadName']) && (mb_strlen($this->container['workloadName']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadId']) && (mb_strlen($this->container['workloadId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'workloadId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['workloadId']) && (mb_strlen($this->container['workloadId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadType']) && (mb_strlen($this->container['workloadType']) > 65535)) {
                $invalidProperties[] = "invalid value for 'workloadType', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['workloadType']) && (mb_strlen($this->container['workloadType']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadStatus']) && (mb_strlen($this->container['workloadStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'workloadStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['workloadStatus']) && (mb_strlen($this->container['workloadStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 65535)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installedPodNum']) && ($this->container['installedPodNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'installedPodNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['installedPodNum']) && ($this->container['installedPodNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'installedPodNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['notInstallNum']) && ($this->container['notInstallNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'notInstallNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['notInstallNum']) && ($this->container['notInstallNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'notInstallNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['installFailedNum']) && ($this->container['installFailedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'installFailedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['installFailedNum']) && ($this->container['installFailedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'installFailedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offlineNum']) && ($this->container['offlineNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offlineNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offlineNum']) && ($this->container['offlineNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'offlineNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['podNum']) && ($this->container['podNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'podNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['podNum']) && ($this->container['podNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'podNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectPodNum']) && ($this->container['protectPodNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'protectPodNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['protectPodNum']) && ($this->container['protectPodNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'protectPodNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runningJobNum']) && ($this->container['runningJobNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'runningJobNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['runningJobNum']) && ($this->container['runningJobNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'runningJobNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastScheduleTime']) && ($this->container['lastScheduleTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastScheduleTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastScheduleTime']) && ($this->container['lastScheduleTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastScheduleTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['schedule']) && (mb_strlen($this->container['schedule']) > 65535)) {
                $invalidProperties[] = "invalid value for 'schedule', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['schedule']) && (mb_strlen($this->container['schedule']) < 0)) {
                $invalidProperties[] = "invalid value for 'schedule', the character length must be bigger than or equal to 0.";
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
    * Gets enterpriseProjectName
    *  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets workloadName
    *  **参数解释**: 工作负载名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $workloadName **参数解释**: 工作负载名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setWorkloadName($workloadName)
    {
        $this->container['workloadName'] = $workloadName;
        return $this;
    }

    /**
    * Gets workloadId
    *  **参数解释**: 工作负载Id **取值范围**: 字符长度0-65535位
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
    * @param string|null $workloadId **参数解释**: 工作负载Id **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setWorkloadId($workloadId)
    {
        $this->container['workloadId'] = $workloadId;
        return $this;
    }

    /**
    * Gets workloadType
    *  **参数解释**: 工作负载类型 **取值范围**: 字符长度0-65535位
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
    * @param string|null $workloadType **参数解释**: 工作负载类型 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setWorkloadType($workloadType)
    {
        $this->container['workloadType'] = $workloadType;
        return $this;
    }

    /**
    * Gets workloadStatus
    *  **参数解释**: 工作负载状态 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getWorkloadStatus()
    {
        return $this->container['workloadStatus'];
    }

    /**
    * Sets workloadStatus
    *
    * @param string|null $workloadStatus **参数解释**: 工作负载状态 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setWorkloadStatus($workloadStatus)
    {
        $this->container['workloadStatus'] = $workloadStatus;
        return $this;
    }

    /**
    * Gets namespaceName
    *  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $clusterName **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
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
    *  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
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
    * @param string|null $clusterId **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets agentVersion
    *  **参数解释**: agent版本 **取值范围**: 字符长度0-65535位
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
    * @param string|null $agentVersion **参数解释**: agent版本 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets installedPodNum
    *  **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getInstalledPodNum()
    {
        return $this->container['installedPodNum'];
    }

    /**
    * Sets installedPodNum
    *
    * @param int|null $installedPodNum **参数解释**: 已安装实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setInstalledPodNum($installedPodNum)
    {
        $this->container['installedPodNum'] = $installedPodNum;
        return $this;
    }

    /**
    * Gets notInstallNum
    *  **参数解释**: 未安装实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getNotInstallNum()
    {
        return $this->container['notInstallNum'];
    }

    /**
    * Sets notInstallNum
    *
    * @param int|null $notInstallNum **参数解释**: 未安装实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setNotInstallNum($notInstallNum)
    {
        $this->container['notInstallNum'] = $notInstallNum;
        return $this;
    }

    /**
    * Gets installFailedNum
    *  **参数解释**: 安装失败实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getInstallFailedNum()
    {
        return $this->container['installFailedNum'];
    }

    /**
    * Sets installFailedNum
    *
    * @param int|null $installFailedNum **参数解释**: 安装失败实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setInstallFailedNum($installFailedNum)
    {
        $this->container['installFailedNum'] = $installFailedNum;
        return $this;
    }

    /**
    * Gets offlineNum
    *  **参数解释**: 离线agent个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getOfflineNum()
    {
        return $this->container['offlineNum'];
    }

    /**
    * Sets offlineNum
    *
    * @param int|null $offlineNum **参数解释**: 离线agent个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setOfflineNum($offlineNum)
    {
        $this->container['offlineNum'] = $offlineNum;
        return $this;
    }

    /**
    * Gets podNum
    *  **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getPodNum()
    {
        return $this->container['podNum'];
    }

    /**
    * Sets podNum
    *
    * @param int|null $podNum **参数解释**: 全部实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setPodNum($podNum)
    {
        $this->container['podNum'] = $podNum;
        return $this;
    }

    /**
    * Gets protectPodNum
    *  **参数解释**: 已防护实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProtectPodNum()
    {
        return $this->container['protectPodNum'];
    }

    /**
    * Sets protectPodNum
    *
    * @param int|null $protectPodNum **参数解释**: 已防护实例个数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProtectPodNum($protectPodNum)
    {
        $this->container['protectPodNum'] = $protectPodNum;
        return $this;
    }

    /**
    * Gets runningJobNum
    *  **参数解释**: 运行任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRunningJobNum()
    {
        return $this->container['runningJobNum'];
    }

    /**
    * Sets runningJobNum
    *
    * @param int|null $runningJobNum **参数解释**: 运行任务数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRunningJobNum($runningJobNum)
    {
        $this->container['runningJobNum'] = $runningJobNum;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释**: 镜像名称列表 **取值范围**: 最小值0，最大值256
    *
    * @return string[]|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string[]|null $imageName **参数解释**: 镜像名称列表 **取值范围**: 最小值0，最大值256
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]|null $labels **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets instanceInfo
    *  **参数解释**: 实例信息 **取值范围**: 最小值0，最大值65535
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ServerlessInstanceInfo[]|null
    */
    public function getInstanceInfo()
    {
        return $this->container['instanceInfo'];
    }

    /**
    * Sets instanceInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ServerlessInstanceInfo[]|null $instanceInfo **参数解释**: 实例信息 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setInstanceInfo($instanceInfo)
    {
        $this->container['instanceInfo'] = $instanceInfo;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $createTime **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastScheduleTime
    *  **参数解释**: 普通任务为完成时间，定时任务类型为最近调度时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getLastScheduleTime()
    {
        return $this->container['lastScheduleTime'];
    }

    /**
    * Sets lastScheduleTime
    *
    * @param int|null $lastScheduleTime **参数解释**: 普通任务为完成时间，定时任务类型为最近调度时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setLastScheduleTime($lastScheduleTime)
    {
        $this->container['lastScheduleTime'] = $lastScheduleTime;
        return $this;
    }

    /**
    * Gets schedule
    *  **参数解释**: 定时任务类型 任务触发 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param string|null $schedule **参数解释**: 定时任务类型 任务触发 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;
        return $this;
    }

    /**
    * Gets upgradable
    *  **参数解释**: 是否可升级 **取值范围**: - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getUpgradable()
    {
        return $this->container['upgradable'];
    }

    /**
    * Sets upgradable
    *
    * @param bool|null $upgradable **参数解释**: 是否可升级 **取值范围**: - true：是。 - false：否。
    *
    * @return $this
    */
    public function setUpgradable($upgradable)
    {
        $this->container['upgradable'] = $upgradable;
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

