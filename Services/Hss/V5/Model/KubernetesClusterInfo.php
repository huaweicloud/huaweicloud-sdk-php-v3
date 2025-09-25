<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KubernetesClusterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KubernetesClusterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * clusterName  集群名称
    * clusterId  集群ID
    * clusterType  **参数解释**: 集群类型 **约束限制**: 不涉及 **取值范围**: - k8s：原生集群 - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群  **默认取值**: 不涉及
    * status  **参数解释**: 集群状态(11种) **约束限制**: 不涉及 **取值范围**:   - Available：可用，表示集群处于正常状态。   - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。   - ScalingUp：扩容中，表示集群正处于扩容过程中。   - ScalingDown：缩容中，表示集群正处于缩容过程中。   - Creating：创建中，表示集群正处于创建过程中。   - Deleting：删除中，表示集群正处于删除过程中。   - Upgrading：升级中，表示集群正处于升级过程中。   - Resizing：规格变更中，表示集群正处于变更规格中。   - RollingBack：回滚中，表示集群正处于回滚过程中。   - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。   - Empty：集群无任何资源  **默认取值**: 不涉及
    * version  集群版本
    * totalNodesNumber  节点总数
    * activeNodesNumber  正常节点数
    * creationTimestamp  创建时间戳
    * agentInstalledNum  集群下已安装agent节点数
    * agentInstallFailedNum  集群下安装失败节点数
    * agentNotInstallNum  集群下未安装agent节点数
    * agentDsInstallStatus  集群下agent-ds安装状态，关联agent相关信息时则需同时考虑last_operate_time时间，包含如下2种。   - NotInstall：未状态。   - Installed：已安装。
    * agentDsFailedReason  操作失败原因
    * lastOperateTimestamp  最近操作时间戳，daemonset脚本安装操作时间，间隔10分钟以内时，agent仍处于安装中
    * lastScanTime  集群最近一次扫描时间戳
    * sysVulNum  集群下系统漏洞个数
    * appVulNum  集群下应用漏洞个数
    * emgVulNum  集群下应急漏洞个数
    * riskAssessNum  集群下风险评估问题个数
    * secCompNum  集群下安全合规问题个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'clusterType' => 'string',
            'status' => 'string',
            'version' => 'string',
            'totalNodesNumber' => 'int',
            'activeNodesNumber' => 'int',
            'creationTimestamp' => 'int',
            'agentInstalledNum' => 'int',
            'agentInstallFailedNum' => 'int',
            'agentNotInstallNum' => 'int',
            'agentDsInstallStatus' => 'string',
            'agentDsFailedReason' => 'string',
            'lastOperateTimestamp' => 'int',
            'lastScanTime' => 'int',
            'sysVulNum' => 'int',
            'appVulNum' => 'int',
            'emgVulNum' => 'int',
            'riskAssessNum' => 'int',
            'secCompNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * clusterName  集群名称
    * clusterId  集群ID
    * clusterType  **参数解释**: 集群类型 **约束限制**: 不涉及 **取值范围**: - k8s：原生集群 - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群  **默认取值**: 不涉及
    * status  **参数解释**: 集群状态(11种) **约束限制**: 不涉及 **取值范围**:   - Available：可用，表示集群处于正常状态。   - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。   - ScalingUp：扩容中，表示集群正处于扩容过程中。   - ScalingDown：缩容中，表示集群正处于缩容过程中。   - Creating：创建中，表示集群正处于创建过程中。   - Deleting：删除中，表示集群正处于删除过程中。   - Upgrading：升级中，表示集群正处于升级过程中。   - Resizing：规格变更中，表示集群正处于变更规格中。   - RollingBack：回滚中，表示集群正处于回滚过程中。   - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。   - Empty：集群无任何资源  **默认取值**: 不涉及
    * version  集群版本
    * totalNodesNumber  节点总数
    * activeNodesNumber  正常节点数
    * creationTimestamp  创建时间戳
    * agentInstalledNum  集群下已安装agent节点数
    * agentInstallFailedNum  集群下安装失败节点数
    * agentNotInstallNum  集群下未安装agent节点数
    * agentDsInstallStatus  集群下agent-ds安装状态，关联agent相关信息时则需同时考虑last_operate_time时间，包含如下2种。   - NotInstall：未状态。   - Installed：已安装。
    * agentDsFailedReason  操作失败原因
    * lastOperateTimestamp  最近操作时间戳，daemonset脚本安装操作时间，间隔10分钟以内时，agent仍处于安装中
    * lastScanTime  集群最近一次扫描时间戳
    * sysVulNum  集群下系统漏洞个数
    * appVulNum  集群下应用漏洞个数
    * emgVulNum  集群下应急漏洞个数
    * riskAssessNum  集群下风险评估问题个数
    * secCompNum  集群下安全合规问题个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterName' => null,
        'clusterId' => null,
        'clusterType' => null,
        'status' => null,
        'version' => null,
        'totalNodesNumber' => 'int32',
        'activeNodesNumber' => 'int32',
        'creationTimestamp' => 'int64',
        'agentInstalledNum' => 'int32',
        'agentInstallFailedNum' => 'int32',
        'agentNotInstallNum' => 'int32',
        'agentDsInstallStatus' => null,
        'agentDsFailedReason' => null,
        'lastOperateTimestamp' => 'int64',
        'lastScanTime' => 'int64',
        'sysVulNum' => 'int32',
        'appVulNum' => 'int32',
        'emgVulNum' => 'int32',
        'riskAssessNum' => 'int32',
        'secCompNum' => 'int32'
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
    * id  id
    * clusterName  集群名称
    * clusterId  集群ID
    * clusterType  **参数解释**: 集群类型 **约束限制**: 不涉及 **取值范围**: - k8s：原生集群 - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群  **默认取值**: 不涉及
    * status  **参数解释**: 集群状态(11种) **约束限制**: 不涉及 **取值范围**:   - Available：可用，表示集群处于正常状态。   - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。   - ScalingUp：扩容中，表示集群正处于扩容过程中。   - ScalingDown：缩容中，表示集群正处于缩容过程中。   - Creating：创建中，表示集群正处于创建过程中。   - Deleting：删除中，表示集群正处于删除过程中。   - Upgrading：升级中，表示集群正处于升级过程中。   - Resizing：规格变更中，表示集群正处于变更规格中。   - RollingBack：回滚中，表示集群正处于回滚过程中。   - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。   - Empty：集群无任何资源  **默认取值**: 不涉及
    * version  集群版本
    * totalNodesNumber  节点总数
    * activeNodesNumber  正常节点数
    * creationTimestamp  创建时间戳
    * agentInstalledNum  集群下已安装agent节点数
    * agentInstallFailedNum  集群下安装失败节点数
    * agentNotInstallNum  集群下未安装agent节点数
    * agentDsInstallStatus  集群下agent-ds安装状态，关联agent相关信息时则需同时考虑last_operate_time时间，包含如下2种。   - NotInstall：未状态。   - Installed：已安装。
    * agentDsFailedReason  操作失败原因
    * lastOperateTimestamp  最近操作时间戳，daemonset脚本安装操作时间，间隔10分钟以内时，agent仍处于安装中
    * lastScanTime  集群最近一次扫描时间戳
    * sysVulNum  集群下系统漏洞个数
    * appVulNum  集群下应用漏洞个数
    * emgVulNum  集群下应急漏洞个数
    * riskAssessNum  集群下风险评估问题个数
    * secCompNum  集群下安全合规问题个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type',
            'status' => 'status',
            'version' => 'version',
            'totalNodesNumber' => 'total_nodes_number',
            'activeNodesNumber' => 'active_nodes_number',
            'creationTimestamp' => 'creation_timestamp',
            'agentInstalledNum' => 'agent_installed_num',
            'agentInstallFailedNum' => 'agent_install_failed_num',
            'agentNotInstallNum' => 'agent_not_install_num',
            'agentDsInstallStatus' => 'agent_ds_install_status',
            'agentDsFailedReason' => 'agent_ds_failed_reason',
            'lastOperateTimestamp' => 'last_operate_timestamp',
            'lastScanTime' => 'last_scan_time',
            'sysVulNum' => 'sys_vul_num',
            'appVulNum' => 'app_vul_num',
            'emgVulNum' => 'emg_vul_num',
            'riskAssessNum' => 'risk_assess_num',
            'secCompNum' => 'sec_comp_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * clusterName  集群名称
    * clusterId  集群ID
    * clusterType  **参数解释**: 集群类型 **约束限制**: 不涉及 **取值范围**: - k8s：原生集群 - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群  **默认取值**: 不涉及
    * status  **参数解释**: 集群状态(11种) **约束限制**: 不涉及 **取值范围**:   - Available：可用，表示集群处于正常状态。   - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。   - ScalingUp：扩容中，表示集群正处于扩容过程中。   - ScalingDown：缩容中，表示集群正处于缩容过程中。   - Creating：创建中，表示集群正处于创建过程中。   - Deleting：删除中，表示集群正处于删除过程中。   - Upgrading：升级中，表示集群正处于升级过程中。   - Resizing：规格变更中，表示集群正处于变更规格中。   - RollingBack：回滚中，表示集群正处于回滚过程中。   - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。   - Empty：集群无任何资源  **默认取值**: 不涉及
    * version  集群版本
    * totalNodesNumber  节点总数
    * activeNodesNumber  正常节点数
    * creationTimestamp  创建时间戳
    * agentInstalledNum  集群下已安装agent节点数
    * agentInstallFailedNum  集群下安装失败节点数
    * agentNotInstallNum  集群下未安装agent节点数
    * agentDsInstallStatus  集群下agent-ds安装状态，关联agent相关信息时则需同时考虑last_operate_time时间，包含如下2种。   - NotInstall：未状态。   - Installed：已安装。
    * agentDsFailedReason  操作失败原因
    * lastOperateTimestamp  最近操作时间戳，daemonset脚本安装操作时间，间隔10分钟以内时，agent仍处于安装中
    * lastScanTime  集群最近一次扫描时间戳
    * sysVulNum  集群下系统漏洞个数
    * appVulNum  集群下应用漏洞个数
    * emgVulNum  集群下应急漏洞个数
    * riskAssessNum  集群下风险评估问题个数
    * secCompNum  集群下安全合规问题个数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType',
            'status' => 'setStatus',
            'version' => 'setVersion',
            'totalNodesNumber' => 'setTotalNodesNumber',
            'activeNodesNumber' => 'setActiveNodesNumber',
            'creationTimestamp' => 'setCreationTimestamp',
            'agentInstalledNum' => 'setAgentInstalledNum',
            'agentInstallFailedNum' => 'setAgentInstallFailedNum',
            'agentNotInstallNum' => 'setAgentNotInstallNum',
            'agentDsInstallStatus' => 'setAgentDsInstallStatus',
            'agentDsFailedReason' => 'setAgentDsFailedReason',
            'lastOperateTimestamp' => 'setLastOperateTimestamp',
            'lastScanTime' => 'setLastScanTime',
            'sysVulNum' => 'setSysVulNum',
            'appVulNum' => 'setAppVulNum',
            'emgVulNum' => 'setEmgVulNum',
            'riskAssessNum' => 'setRiskAssessNum',
            'secCompNum' => 'setSecCompNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * clusterName  集群名称
    * clusterId  集群ID
    * clusterType  **参数解释**: 集群类型 **约束限制**: 不涉及 **取值范围**: - k8s：原生集群 - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群  **默认取值**: 不涉及
    * status  **参数解释**: 集群状态(11种) **约束限制**: 不涉及 **取值范围**:   - Available：可用，表示集群处于正常状态。   - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。   - ScalingUp：扩容中，表示集群正处于扩容过程中。   - ScalingDown：缩容中，表示集群正处于缩容过程中。   - Creating：创建中，表示集群正处于创建过程中。   - Deleting：删除中，表示集群正处于删除过程中。   - Upgrading：升级中，表示集群正处于升级过程中。   - Resizing：规格变更中，表示集群正处于变更规格中。   - RollingBack：回滚中，表示集群正处于回滚过程中。   - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。   - Empty：集群无任何资源  **默认取值**: 不涉及
    * version  集群版本
    * totalNodesNumber  节点总数
    * activeNodesNumber  正常节点数
    * creationTimestamp  创建时间戳
    * agentInstalledNum  集群下已安装agent节点数
    * agentInstallFailedNum  集群下安装失败节点数
    * agentNotInstallNum  集群下未安装agent节点数
    * agentDsInstallStatus  集群下agent-ds安装状态，关联agent相关信息时则需同时考虑last_operate_time时间，包含如下2种。   - NotInstall：未状态。   - Installed：已安装。
    * agentDsFailedReason  操作失败原因
    * lastOperateTimestamp  最近操作时间戳，daemonset脚本安装操作时间，间隔10分钟以内时，agent仍处于安装中
    * lastScanTime  集群最近一次扫描时间戳
    * sysVulNum  集群下系统漏洞个数
    * appVulNum  集群下应用漏洞个数
    * emgVulNum  集群下应急漏洞个数
    * riskAssessNum  集群下风险评估问题个数
    * secCompNum  集群下安全合规问题个数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType',
            'status' => 'getStatus',
            'version' => 'getVersion',
            'totalNodesNumber' => 'getTotalNodesNumber',
            'activeNodesNumber' => 'getActiveNodesNumber',
            'creationTimestamp' => 'getCreationTimestamp',
            'agentInstalledNum' => 'getAgentInstalledNum',
            'agentInstallFailedNum' => 'getAgentInstallFailedNum',
            'agentNotInstallNum' => 'getAgentNotInstallNum',
            'agentDsInstallStatus' => 'getAgentDsInstallStatus',
            'agentDsFailedReason' => 'getAgentDsFailedReason',
            'lastOperateTimestamp' => 'getLastOperateTimestamp',
            'lastScanTime' => 'getLastScanTime',
            'sysVulNum' => 'getSysVulNum',
            'appVulNum' => 'getAppVulNum',
            'emgVulNum' => 'getEmgVulNum',
            'riskAssessNum' => 'getRiskAssessNum',
            'secCompNum' => 'getSecCompNum'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['totalNodesNumber'] = isset($data['totalNodesNumber']) ? $data['totalNodesNumber'] : null;
        $this->container['activeNodesNumber'] = isset($data['activeNodesNumber']) ? $data['activeNodesNumber'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
        $this->container['agentInstalledNum'] = isset($data['agentInstalledNum']) ? $data['agentInstalledNum'] : null;
        $this->container['agentInstallFailedNum'] = isset($data['agentInstallFailedNum']) ? $data['agentInstallFailedNum'] : null;
        $this->container['agentNotInstallNum'] = isset($data['agentNotInstallNum']) ? $data['agentNotInstallNum'] : null;
        $this->container['agentDsInstallStatus'] = isset($data['agentDsInstallStatus']) ? $data['agentDsInstallStatus'] : null;
        $this->container['agentDsFailedReason'] = isset($data['agentDsFailedReason']) ? $data['agentDsFailedReason'] : null;
        $this->container['lastOperateTimestamp'] = isset($data['lastOperateTimestamp']) ? $data['lastOperateTimestamp'] : null;
        $this->container['lastScanTime'] = isset($data['lastScanTime']) ? $data['lastScanTime'] : null;
        $this->container['sysVulNum'] = isset($data['sysVulNum']) ? $data['sysVulNum'] : null;
        $this->container['appVulNum'] = isset($data['appVulNum']) ? $data['appVulNum'] : null;
        $this->container['emgVulNum'] = isset($data['emgVulNum']) ? $data['emgVulNum'] : null;
        $this->container['riskAssessNum'] = isset($data['riskAssessNum']) ? $data['riskAssessNum'] : null;
        $this->container['secCompNum'] = isset($data['secCompNum']) ? $data['secCompNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 256.";
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
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 65535)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalNodesNumber']) && ($this->container['totalNodesNumber'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalNodesNumber', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalNodesNumber']) && ($this->container['totalNodesNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNodesNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['activeNodesNumber']) && ($this->container['activeNodesNumber'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'activeNodesNumber', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['activeNodesNumber']) && ($this->container['activeNodesNumber'] < 0)) {
                $invalidProperties[] = "invalid value for 'activeNodesNumber', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creationTimestamp']) && ($this->container['creationTimestamp'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'creationTimestamp', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['creationTimestamp']) && ($this->container['creationTimestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'creationTimestamp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentInstalledNum']) && ($this->container['agentInstalledNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'agentInstalledNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['agentInstalledNum']) && ($this->container['agentInstalledNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentInstalledNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentInstallFailedNum']) && ($this->container['agentInstallFailedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'agentInstallFailedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['agentInstallFailedNum']) && ($this->container['agentInstallFailedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentInstallFailedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentNotInstallNum']) && ($this->container['agentNotInstallNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'agentNotInstallNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['agentNotInstallNum']) && ($this->container['agentNotInstallNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentNotInstallNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentDsInstallStatus']) && (mb_strlen($this->container['agentDsInstallStatus']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentDsInstallStatus', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentDsInstallStatus']) && (mb_strlen($this->container['agentDsInstallStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentDsInstallStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentDsFailedReason']) && (mb_strlen($this->container['agentDsFailedReason']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentDsFailedReason', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentDsFailedReason']) && (mb_strlen($this->container['agentDsFailedReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentDsFailedReason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastOperateTimestamp']) && ($this->container['lastOperateTimestamp'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastOperateTimestamp', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastOperateTimestamp']) && ($this->container['lastOperateTimestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastOperateTimestamp', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastScanTime']) && ($this->container['lastScanTime'] > 4071095999000)) {
                $invalidProperties[] = "invalid value for 'lastScanTime', must be smaller than or equal to 4071095999000.";
            }
            if (!is_null($this->container['lastScanTime']) && ($this->container['lastScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sysVulNum']) && ($this->container['sysVulNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'sysVulNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['sysVulNum']) && ($this->container['sysVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'sysVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVulNum']) && ($this->container['appVulNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'appVulNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['appVulNum']) && ($this->container['appVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'appVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['emgVulNum']) && ($this->container['emgVulNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'emgVulNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['emgVulNum']) && ($this->container['emgVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'emgVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['riskAssessNum']) && ($this->container['riskAssessNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'riskAssessNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['riskAssessNum']) && ($this->container['riskAssessNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'riskAssessNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['secCompNum']) && ($this->container['secCompNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'secCompNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['secCompNum']) && ($this->container['secCompNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'secCompNum', must be bigger than or equal to 0.";
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
    * Gets id
    *  id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets clusterType
    *  **参数解释**: 集群类型 **约束限制**: 不涉及 **取值范围**: - k8s：原生集群 - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群  **默认取值**: 不涉及
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
    * @param string|null $clusterType **参数解释**: 集群类型 **约束限制**: 不涉及 **取值范围**: - k8s：原生集群 - cce：CCE集群 - ali：阿里云集群 - tencent：腾讯云集群 - azure：微软云集群 - aws：亚马逊集群 - self_built_hw：华为云自建集群 - self_built_idc：IDC自建集群  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 集群状态(11种) **约束限制**: 不涉及 **取值范围**:   - Available：可用，表示集群处于正常状态。   - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。   - ScalingUp：扩容中，表示集群正处于扩容过程中。   - ScalingDown：缩容中，表示集群正处于缩容过程中。   - Creating：创建中，表示集群正处于创建过程中。   - Deleting：删除中，表示集群正处于删除过程中。   - Upgrading：升级中，表示集群正处于升级过程中。   - Resizing：规格变更中，表示集群正处于变更规格中。   - RollingBack：回滚中，表示集群正处于回滚过程中。   - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。   - Empty：集群无任何资源  **默认取值**: 不涉及
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
    * @param string|null $status **参数解释**: 集群状态(11种) **约束限制**: 不涉及 **取值范围**:   - Available：可用，表示集群处于正常状态。   - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。   - ScalingUp：扩容中，表示集群正处于扩容过程中。   - ScalingDown：缩容中，表示集群正处于缩容过程中。   - Creating：创建中，表示集群正处于创建过程中。   - Deleting：删除中，表示集群正处于删除过程中。   - Upgrading：升级中，表示集群正处于升级过程中。   - Resizing：规格变更中，表示集群正处于变更规格中。   - RollingBack：回滚中，表示集群正处于回滚过程中。   - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。   - Empty：集群无任何资源  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets version
    *  集群版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 集群版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets totalNodesNumber
    *  节点总数
    *
    * @return int|null
    */
    public function getTotalNodesNumber()
    {
        return $this->container['totalNodesNumber'];
    }

    /**
    * Sets totalNodesNumber
    *
    * @param int|null $totalNodesNumber 节点总数
    *
    * @return $this
    */
    public function setTotalNodesNumber($totalNodesNumber)
    {
        $this->container['totalNodesNumber'] = $totalNodesNumber;
        return $this;
    }

    /**
    * Gets activeNodesNumber
    *  正常节点数
    *
    * @return int|null
    */
    public function getActiveNodesNumber()
    {
        return $this->container['activeNodesNumber'];
    }

    /**
    * Sets activeNodesNumber
    *
    * @param int|null $activeNodesNumber 正常节点数
    *
    * @return $this
    */
    public function setActiveNodesNumber($activeNodesNumber)
    {
        $this->container['activeNodesNumber'] = $activeNodesNumber;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  创建时间戳
    *
    * @return int|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param int|null $creationTimestamp 创建时间戳
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
        return $this;
    }

    /**
    * Gets agentInstalledNum
    *  集群下已安装agent节点数
    *
    * @return int|null
    */
    public function getAgentInstalledNum()
    {
        return $this->container['agentInstalledNum'];
    }

    /**
    * Sets agentInstalledNum
    *
    * @param int|null $agentInstalledNum 集群下已安装agent节点数
    *
    * @return $this
    */
    public function setAgentInstalledNum($agentInstalledNum)
    {
        $this->container['agentInstalledNum'] = $agentInstalledNum;
        return $this;
    }

    /**
    * Gets agentInstallFailedNum
    *  集群下安装失败节点数
    *
    * @return int|null
    */
    public function getAgentInstallFailedNum()
    {
        return $this->container['agentInstallFailedNum'];
    }

    /**
    * Sets agentInstallFailedNum
    *
    * @param int|null $agentInstallFailedNum 集群下安装失败节点数
    *
    * @return $this
    */
    public function setAgentInstallFailedNum($agentInstallFailedNum)
    {
        $this->container['agentInstallFailedNum'] = $agentInstallFailedNum;
        return $this;
    }

    /**
    * Gets agentNotInstallNum
    *  集群下未安装agent节点数
    *
    * @return int|null
    */
    public function getAgentNotInstallNum()
    {
        return $this->container['agentNotInstallNum'];
    }

    /**
    * Sets agentNotInstallNum
    *
    * @param int|null $agentNotInstallNum 集群下未安装agent节点数
    *
    * @return $this
    */
    public function setAgentNotInstallNum($agentNotInstallNum)
    {
        $this->container['agentNotInstallNum'] = $agentNotInstallNum;
        return $this;
    }

    /**
    * Gets agentDsInstallStatus
    *  集群下agent-ds安装状态，关联agent相关信息时则需同时考虑last_operate_time时间，包含如下2种。   - NotInstall：未状态。   - Installed：已安装。
    *
    * @return string|null
    */
    public function getAgentDsInstallStatus()
    {
        return $this->container['agentDsInstallStatus'];
    }

    /**
    * Sets agentDsInstallStatus
    *
    * @param string|null $agentDsInstallStatus 集群下agent-ds安装状态，关联agent相关信息时则需同时考虑last_operate_time时间，包含如下2种。   - NotInstall：未状态。   - Installed：已安装。
    *
    * @return $this
    */
    public function setAgentDsInstallStatus($agentDsInstallStatus)
    {
        $this->container['agentDsInstallStatus'] = $agentDsInstallStatus;
        return $this;
    }

    /**
    * Gets agentDsFailedReason
    *  操作失败原因
    *
    * @return string|null
    */
    public function getAgentDsFailedReason()
    {
        return $this->container['agentDsFailedReason'];
    }

    /**
    * Sets agentDsFailedReason
    *
    * @param string|null $agentDsFailedReason 操作失败原因
    *
    * @return $this
    */
    public function setAgentDsFailedReason($agentDsFailedReason)
    {
        $this->container['agentDsFailedReason'] = $agentDsFailedReason;
        return $this;
    }

    /**
    * Gets lastOperateTimestamp
    *  最近操作时间戳，daemonset脚本安装操作时间，间隔10分钟以内时，agent仍处于安装中
    *
    * @return int|null
    */
    public function getLastOperateTimestamp()
    {
        return $this->container['lastOperateTimestamp'];
    }

    /**
    * Sets lastOperateTimestamp
    *
    * @param int|null $lastOperateTimestamp 最近操作时间戳，daemonset脚本安装操作时间，间隔10分钟以内时，agent仍处于安装中
    *
    * @return $this
    */
    public function setLastOperateTimestamp($lastOperateTimestamp)
    {
        $this->container['lastOperateTimestamp'] = $lastOperateTimestamp;
        return $this;
    }

    /**
    * Gets lastScanTime
    *  集群最近一次扫描时间戳
    *
    * @return int|null
    */
    public function getLastScanTime()
    {
        return $this->container['lastScanTime'];
    }

    /**
    * Sets lastScanTime
    *
    * @param int|null $lastScanTime 集群最近一次扫描时间戳
    *
    * @return $this
    */
    public function setLastScanTime($lastScanTime)
    {
        $this->container['lastScanTime'] = $lastScanTime;
        return $this;
    }

    /**
    * Gets sysVulNum
    *  集群下系统漏洞个数
    *
    * @return int|null
    */
    public function getSysVulNum()
    {
        return $this->container['sysVulNum'];
    }

    /**
    * Sets sysVulNum
    *
    * @param int|null $sysVulNum 集群下系统漏洞个数
    *
    * @return $this
    */
    public function setSysVulNum($sysVulNum)
    {
        $this->container['sysVulNum'] = $sysVulNum;
        return $this;
    }

    /**
    * Gets appVulNum
    *  集群下应用漏洞个数
    *
    * @return int|null
    */
    public function getAppVulNum()
    {
        return $this->container['appVulNum'];
    }

    /**
    * Sets appVulNum
    *
    * @param int|null $appVulNum 集群下应用漏洞个数
    *
    * @return $this
    */
    public function setAppVulNum($appVulNum)
    {
        $this->container['appVulNum'] = $appVulNum;
        return $this;
    }

    /**
    * Gets emgVulNum
    *  集群下应急漏洞个数
    *
    * @return int|null
    */
    public function getEmgVulNum()
    {
        return $this->container['emgVulNum'];
    }

    /**
    * Sets emgVulNum
    *
    * @param int|null $emgVulNum 集群下应急漏洞个数
    *
    * @return $this
    */
    public function setEmgVulNum($emgVulNum)
    {
        $this->container['emgVulNum'] = $emgVulNum;
        return $this;
    }

    /**
    * Gets riskAssessNum
    *  集群下风险评估问题个数
    *
    * @return int|null
    */
    public function getRiskAssessNum()
    {
        return $this->container['riskAssessNum'];
    }

    /**
    * Sets riskAssessNum
    *
    * @param int|null $riskAssessNum 集群下风险评估问题个数
    *
    * @return $this
    */
    public function setRiskAssessNum($riskAssessNum)
    {
        $this->container['riskAssessNum'] = $riskAssessNum;
        return $this;
    }

    /**
    * Gets secCompNum
    *  集群下安全合规问题个数
    *
    * @return int|null
    */
    public function getSecCompNum()
    {
        return $this->container['secCompNum'];
    }

    /**
    * Sets secCompNum
    *
    * @param int|null $secCompNum 集群下安全合规问题个数
    *
    * @return $this
    */
    public function setSecCompNum($secCompNum)
    {
        $this->container['secCompNum'] = $secCompNum;
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

