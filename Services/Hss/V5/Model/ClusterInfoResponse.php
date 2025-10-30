<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterInfoResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * latestVersion  **参数解释** 是否最新版本 **取值范围** - true：是。 - false：否。
    * agentVersion  **参数解释** 集群agent版本 **取值范围** 字符长度0-32位
    * clusterName  **参数解释** 集群名称 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群id **取值范围** 字符长度1-256位
    * namespace  **参数解释** 命名空间 **取值范围** 字符长度1-32位
    * clusterType  **参数解释** 集群类型 **取值范围** 字符长度1-32位
    * nodeNum  **参数解释** 节点总数 **取值范围** 取值0-65535
    * dsInfo  dsInfo
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。 - Empty：集群无任何资源。  **默认取值**: 不涉及
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。 - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * accessStatus  **参数解释**： 集群anp接入状态 **约束限制**： 不涉及 **取值范围**： - not_connect：未连接。 - connect_success：连接成功。 - connect_fail：连接失败。 - connect_disruption：连接中断。  **默认取值**： 不涉及
    * combinedStatus  **参数解释**： 集群anp与ds的组合状态 **约束限制**： 不涉及 **取值范围**： - accessing：接入中。 - access_error：接入异常。 - running：运行中。 - run_error：运行异常。 - upgrading：升级中。 - upgrade_error：升级失败。  **默认取值**： 不涉及
    * failedMessage  **参数解释** 集群插件接入失败的原因 **取值范围** 字符长度1-256位
    * clusterLogStatus  **参数解释**： 集群日志的接入状态 **约束限制**： 不涉及 **取值范围**： - success：接入成功。 - partial_success：部分接入。  **默认取值**： 不涉及
    * invokedService  **参数解释**： 调用服务，标识cce免费体检报告 **约束限制**： 不涉及 **取值范围**： - hss：hss服务。 - cce：cce服务。  **默认取值**： 不涉及
    * registryInfo  registryInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'latestVersion' => 'bool',
            'agentVersion' => 'string',
            'clusterName' => 'string',
            'clusterId' => 'string',
            'namespace' => 'string',
            'clusterType' => 'string',
            'nodeNum' => 'int',
            'dsInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseDsInfo',
            'clusterStatus' => 'string',
            'installedStatus' => 'string',
            'accessStatus' => 'string',
            'combinedStatus' => 'string',
            'failedMessage' => 'string',
            'clusterLogStatus' => 'string',
            'invokedService' => 'string',
            'registryInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseRegistryInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * latestVersion  **参数解释** 是否最新版本 **取值范围** - true：是。 - false：否。
    * agentVersion  **参数解释** 集群agent版本 **取值范围** 字符长度0-32位
    * clusterName  **参数解释** 集群名称 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群id **取值范围** 字符长度1-256位
    * namespace  **参数解释** 命名空间 **取值范围** 字符长度1-32位
    * clusterType  **参数解释** 集群类型 **取值范围** 字符长度1-32位
    * nodeNum  **参数解释** 节点总数 **取值范围** 取值0-65535
    * dsInfo  dsInfo
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。 - Empty：集群无任何资源。  **默认取值**: 不涉及
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。 - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * accessStatus  **参数解释**： 集群anp接入状态 **约束限制**： 不涉及 **取值范围**： - not_connect：未连接。 - connect_success：连接成功。 - connect_fail：连接失败。 - connect_disruption：连接中断。  **默认取值**： 不涉及
    * combinedStatus  **参数解释**： 集群anp与ds的组合状态 **约束限制**： 不涉及 **取值范围**： - accessing：接入中。 - access_error：接入异常。 - running：运行中。 - run_error：运行异常。 - upgrading：升级中。 - upgrade_error：升级失败。  **默认取值**： 不涉及
    * failedMessage  **参数解释** 集群插件接入失败的原因 **取值范围** 字符长度1-256位
    * clusterLogStatus  **参数解释**： 集群日志的接入状态 **约束限制**： 不涉及 **取值范围**： - success：接入成功。 - partial_success：部分接入。  **默认取值**： 不涉及
    * invokedService  **参数解释**： 调用服务，标识cce免费体检报告 **约束限制**： 不涉及 **取值范围**： - hss：hss服务。 - cce：cce服务。  **默认取值**： 不涉及
    * registryInfo  registryInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'latestVersion' => null,
        'agentVersion' => null,
        'clusterName' => null,
        'clusterId' => null,
        'namespace' => null,
        'clusterType' => null,
        'nodeNum' => null,
        'dsInfo' => null,
        'clusterStatus' => null,
        'installedStatus' => null,
        'accessStatus' => null,
        'combinedStatus' => null,
        'failedMessage' => null,
        'clusterLogStatus' => null,
        'invokedService' => null,
        'registryInfo' => null
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
    * latestVersion  **参数解释** 是否最新版本 **取值范围** - true：是。 - false：否。
    * agentVersion  **参数解释** 集群agent版本 **取值范围** 字符长度0-32位
    * clusterName  **参数解释** 集群名称 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群id **取值范围** 字符长度1-256位
    * namespace  **参数解释** 命名空间 **取值范围** 字符长度1-32位
    * clusterType  **参数解释** 集群类型 **取值范围** 字符长度1-32位
    * nodeNum  **参数解释** 节点总数 **取值范围** 取值0-65535
    * dsInfo  dsInfo
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。 - Empty：集群无任何资源。  **默认取值**: 不涉及
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。 - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * accessStatus  **参数解释**： 集群anp接入状态 **约束限制**： 不涉及 **取值范围**： - not_connect：未连接。 - connect_success：连接成功。 - connect_fail：连接失败。 - connect_disruption：连接中断。  **默认取值**： 不涉及
    * combinedStatus  **参数解释**： 集群anp与ds的组合状态 **约束限制**： 不涉及 **取值范围**： - accessing：接入中。 - access_error：接入异常。 - running：运行中。 - run_error：运行异常。 - upgrading：升级中。 - upgrade_error：升级失败。  **默认取值**： 不涉及
    * failedMessage  **参数解释** 集群插件接入失败的原因 **取值范围** 字符长度1-256位
    * clusterLogStatus  **参数解释**： 集群日志的接入状态 **约束限制**： 不涉及 **取值范围**： - success：接入成功。 - partial_success：部分接入。  **默认取值**： 不涉及
    * invokedService  **参数解释**： 调用服务，标识cce免费体检报告 **约束限制**： 不涉及 **取值范围**： - hss：hss服务。 - cce：cce服务。  **默认取值**： 不涉及
    * registryInfo  registryInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'latestVersion' => 'latest_version',
            'agentVersion' => 'agent_version',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id',
            'namespace' => 'namespace',
            'clusterType' => 'cluster_type',
            'nodeNum' => 'node_num',
            'dsInfo' => 'ds_info',
            'clusterStatus' => 'cluster_status',
            'installedStatus' => 'installed_status',
            'accessStatus' => 'access_status',
            'combinedStatus' => 'combined_status',
            'failedMessage' => 'failed_message',
            'clusterLogStatus' => 'cluster_log_status',
            'invokedService' => 'invoked_service',
            'registryInfo' => 'registry_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * latestVersion  **参数解释** 是否最新版本 **取值范围** - true：是。 - false：否。
    * agentVersion  **参数解释** 集群agent版本 **取值范围** 字符长度0-32位
    * clusterName  **参数解释** 集群名称 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群id **取值范围** 字符长度1-256位
    * namespace  **参数解释** 命名空间 **取值范围** 字符长度1-32位
    * clusterType  **参数解释** 集群类型 **取值范围** 字符长度1-32位
    * nodeNum  **参数解释** 节点总数 **取值范围** 取值0-65535
    * dsInfo  dsInfo
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。 - Empty：集群无任何资源。  **默认取值**: 不涉及
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。 - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * accessStatus  **参数解释**： 集群anp接入状态 **约束限制**： 不涉及 **取值范围**： - not_connect：未连接。 - connect_success：连接成功。 - connect_fail：连接失败。 - connect_disruption：连接中断。  **默认取值**： 不涉及
    * combinedStatus  **参数解释**： 集群anp与ds的组合状态 **约束限制**： 不涉及 **取值范围**： - accessing：接入中。 - access_error：接入异常。 - running：运行中。 - run_error：运行异常。 - upgrading：升级中。 - upgrade_error：升级失败。  **默认取值**： 不涉及
    * failedMessage  **参数解释** 集群插件接入失败的原因 **取值范围** 字符长度1-256位
    * clusterLogStatus  **参数解释**： 集群日志的接入状态 **约束限制**： 不涉及 **取值范围**： - success：接入成功。 - partial_success：部分接入。  **默认取值**： 不涉及
    * invokedService  **参数解释**： 调用服务，标识cce免费体检报告 **约束限制**： 不涉及 **取值范围**： - hss：hss服务。 - cce：cce服务。  **默认取值**： 不涉及
    * registryInfo  registryInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'latestVersion' => 'setLatestVersion',
            'agentVersion' => 'setAgentVersion',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId',
            'namespace' => 'setNamespace',
            'clusterType' => 'setClusterType',
            'nodeNum' => 'setNodeNum',
            'dsInfo' => 'setDsInfo',
            'clusterStatus' => 'setClusterStatus',
            'installedStatus' => 'setInstalledStatus',
            'accessStatus' => 'setAccessStatus',
            'combinedStatus' => 'setCombinedStatus',
            'failedMessage' => 'setFailedMessage',
            'clusterLogStatus' => 'setClusterLogStatus',
            'invokedService' => 'setInvokedService',
            'registryInfo' => 'setRegistryInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * latestVersion  **参数解释** 是否最新版本 **取值范围** - true：是。 - false：否。
    * agentVersion  **参数解释** 集群agent版本 **取值范围** 字符长度0-32位
    * clusterName  **参数解释** 集群名称 **取值范围** 字符长度0-256位
    * clusterId  **参数解释** 集群id **取值范围** 字符长度1-256位
    * namespace  **参数解释** 命名空间 **取值范围** 字符长度1-32位
    * clusterType  **参数解释** 集群类型 **取值范围** 字符长度1-32位
    * nodeNum  **参数解释** 节点总数 **取值范围** 取值0-65535
    * dsInfo  dsInfo
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。 - Empty：集群无任何资源。  **默认取值**: 不涉及
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。 - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * accessStatus  **参数解释**： 集群anp接入状态 **约束限制**： 不涉及 **取值范围**： - not_connect：未连接。 - connect_success：连接成功。 - connect_fail：连接失败。 - connect_disruption：连接中断。  **默认取值**： 不涉及
    * combinedStatus  **参数解释**： 集群anp与ds的组合状态 **约束限制**： 不涉及 **取值范围**： - accessing：接入中。 - access_error：接入异常。 - running：运行中。 - run_error：运行异常。 - upgrading：升级中。 - upgrade_error：升级失败。  **默认取值**： 不涉及
    * failedMessage  **参数解释** 集群插件接入失败的原因 **取值范围** 字符长度1-256位
    * clusterLogStatus  **参数解释**： 集群日志的接入状态 **约束限制**： 不涉及 **取值范围**： - success：接入成功。 - partial_success：部分接入。  **默认取值**： 不涉及
    * invokedService  **参数解释**： 调用服务，标识cce免费体检报告 **约束限制**： 不涉及 **取值范围**： - hss：hss服务。 - cce：cce服务。  **默认取值**： 不涉及
    * registryInfo  registryInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'latestVersion' => 'getLatestVersion',
            'agentVersion' => 'getAgentVersion',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId',
            'namespace' => 'getNamespace',
            'clusterType' => 'getClusterType',
            'nodeNum' => 'getNodeNum',
            'dsInfo' => 'getDsInfo',
            'clusterStatus' => 'getClusterStatus',
            'installedStatus' => 'getInstalledStatus',
            'accessStatus' => 'getAccessStatus',
            'combinedStatus' => 'getCombinedStatus',
            'failedMessage' => 'getFailedMessage',
            'clusterLogStatus' => 'getClusterLogStatus',
            'invokedService' => 'getInvokedService',
            'registryInfo' => 'getRegistryInfo'
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
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['dsInfo'] = isset($data['dsInfo']) ? $data['dsInfo'] : null;
        $this->container['clusterStatus'] = isset($data['clusterStatus']) ? $data['clusterStatus'] : null;
        $this->container['installedStatus'] = isset($data['installedStatus']) ? $data['installedStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['combinedStatus'] = isset($data['combinedStatus']) ? $data['combinedStatus'] : null;
        $this->container['failedMessage'] = isset($data['failedMessage']) ? $data['failedMessage'] : null;
        $this->container['clusterLogStatus'] = isset($data['clusterLogStatus']) ? $data['clusterLogStatus'] : null;
        $this->container['invokedService'] = isset($data['invokedService']) ? $data['invokedService'] : null;
        $this->container['registryInfo'] = isset($data['registryInfo']) ? $data['registryInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['clusterType']) && (mb_strlen($this->container['clusterType']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] > 65535)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterStatus']) && (mb_strlen($this->container['clusterStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['clusterStatus']) && (mb_strlen($this->container['clusterStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['installedStatus']) && (mb_strlen($this->container['installedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'installedStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['installedStatus']) && (mb_strlen($this->container['installedStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'installedStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['accessStatus']) && (mb_strlen($this->container['accessStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'accessStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['accessStatus']) && (mb_strlen($this->container['accessStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['combinedStatus']) && (mb_strlen($this->container['combinedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'combinedStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['combinedStatus']) && (mb_strlen($this->container['combinedStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'combinedStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['failedMessage']) && (mb_strlen($this->container['failedMessage']) > 256)) {
                $invalidProperties[] = "invalid value for 'failedMessage', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['failedMessage']) && (mb_strlen($this->container['failedMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'failedMessage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterLogStatus']) && (mb_strlen($this->container['clusterLogStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterLogStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['clusterLogStatus']) && (mb_strlen($this->container['clusterLogStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterLogStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['invokedService']) && !preg_match("/^.*$/", $this->container['invokedService'])) {
                $invalidProperties[] = "invalid value for 'invokedService', must be conform to the pattern /^.*$/.";
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
    * Gets latestVersion
    *  **参数解释** 是否最新版本 **取值范围** - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param bool|null $latestVersion **参数解释** 是否最新版本 **取值范围** - true：是。 - false：否。
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets agentVersion
    *  **参数解释** 集群agent版本 **取值范围** 字符长度0-32位
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
    * @param string|null $agentVersion **参数解释** 集群agent版本 **取值范围** 字符长度0-32位
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释** 集群名称 **取值范围** 字符长度0-256位
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
    * @param string|null $clusterName **参数解释** 集群名称 **取值范围** 字符长度0-256位
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
    *  **参数解释** 集群id **取值范围** 字符长度1-256位
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
    * @param string|null $clusterId **参数解释** 集群id **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释** 命名空间 **取值范围** 字符长度1-32位
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
    * @param string|null $namespace **参数解释** 命名空间 **取值范围** 字符长度1-32位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets clusterType
    *  **参数解释** 集群类型 **取值范围** 字符长度1-32位
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
    * @param string|null $clusterType **参数解释** 集群类型 **取值范围** 字符长度1-32位
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets nodeNum
    *  **参数解释** 节点总数 **取值范围** 取值0-65535
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum **参数解释** 节点总数 **取值范围** 取值0-65535
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets dsInfo
    *  dsInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseDsInfo|null
    */
    public function getDsInfo()
    {
        return $this->container['dsInfo'];
    }

    /**
    * Sets dsInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseDsInfo|null $dsInfo dsInfo
    *
    * @return $this
    */
    public function setDsInfo($dsInfo)
    {
        $this->container['dsInfo'] = $dsInfo;
        return $this;
    }

    /**
    * Gets clusterStatus
    *  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。 - Empty：集群无任何资源。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterStatus()
    {
        return $this->container['clusterStatus'];
    }

    /**
    * Sets clusterStatus
    *
    * @param string|null $clusterStatus **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。 - Empty：集群无任何资源。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterStatus($clusterStatus)
    {
        $this->container['clusterStatus'] = $clusterStatus;
        return $this;
    }

    /**
    * Gets installedStatus
    *  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。 - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getInstalledStatus()
    {
        return $this->container['installedStatus'];
    }

    /**
    * Sets installedStatus
    *
    * @param string|null $installedStatus **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。 - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstalledStatus($installedStatus)
    {
        $this->container['installedStatus'] = $installedStatus;
        return $this;
    }

    /**
    * Gets accessStatus
    *  **参数解释**： 集群anp接入状态 **约束限制**： 不涉及 **取值范围**： - not_connect：未连接。 - connect_success：连接成功。 - connect_fail：连接失败。 - connect_disruption：连接中断。  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAccessStatus()
    {
        return $this->container['accessStatus'];
    }

    /**
    * Sets accessStatus
    *
    * @param string|null $accessStatus **参数解释**： 集群anp接入状态 **约束限制**： 不涉及 **取值范围**： - not_connect：未连接。 - connect_success：连接成功。 - connect_fail：连接失败。 - connect_disruption：连接中断。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAccessStatus($accessStatus)
    {
        $this->container['accessStatus'] = $accessStatus;
        return $this;
    }

    /**
    * Gets combinedStatus
    *  **参数解释**： 集群anp与ds的组合状态 **约束限制**： 不涉及 **取值范围**： - accessing：接入中。 - access_error：接入异常。 - running：运行中。 - run_error：运行异常。 - upgrading：升级中。 - upgrade_error：升级失败。  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getCombinedStatus()
    {
        return $this->container['combinedStatus'];
    }

    /**
    * Sets combinedStatus
    *
    * @param string|null $combinedStatus **参数解释**： 集群anp与ds的组合状态 **约束限制**： 不涉及 **取值范围**： - accessing：接入中。 - access_error：接入异常。 - running：运行中。 - run_error：运行异常。 - upgrading：升级中。 - upgrade_error：升级失败。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCombinedStatus($combinedStatus)
    {
        $this->container['combinedStatus'] = $combinedStatus;
        return $this;
    }

    /**
    * Gets failedMessage
    *  **参数解释** 集群插件接入失败的原因 **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getFailedMessage()
    {
        return $this->container['failedMessage'];
    }

    /**
    * Sets failedMessage
    *
    * @param string|null $failedMessage **参数解释** 集群插件接入失败的原因 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setFailedMessage($failedMessage)
    {
        $this->container['failedMessage'] = $failedMessage;
        return $this;
    }

    /**
    * Gets clusterLogStatus
    *  **参数解释**： 集群日志的接入状态 **约束限制**： 不涉及 **取值范围**： - success：接入成功。 - partial_success：部分接入。  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getClusterLogStatus()
    {
        return $this->container['clusterLogStatus'];
    }

    /**
    * Sets clusterLogStatus
    *
    * @param string|null $clusterLogStatus **参数解释**： 集群日志的接入状态 **约束限制**： 不涉及 **取值范围**： - success：接入成功。 - partial_success：部分接入。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setClusterLogStatus($clusterLogStatus)
    {
        $this->container['clusterLogStatus'] = $clusterLogStatus;
        return $this;
    }

    /**
    * Gets invokedService
    *  **参数解释**： 调用服务，标识cce免费体检报告 **约束限制**： 不涉及 **取值范围**： - hss：hss服务。 - cce：cce服务。  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getInvokedService()
    {
        return $this->container['invokedService'];
    }

    /**
    * Sets invokedService
    *
    * @param string|null $invokedService **参数解释**： 调用服务，标识cce免费体检报告 **约束限制**： 不涉及 **取值范围**： - hss：hss服务。 - cce：cce服务。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setInvokedService($invokedService)
    {
        $this->container['invokedService'] = $invokedService;
        return $this;
    }

    /**
    * Gets registryInfo
    *  registryInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseRegistryInfo|null
    */
    public function getRegistryInfo()
    {
        return $this->container['registryInfo'];
    }

    /**
    * Sets registryInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseRegistryInfo|null $registryInfo registryInfo
    *
    * @return $this
    */
    public function setRegistryInfo($registryInfo)
    {
        $this->container['registryInfo'] = $registryInfo;
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

