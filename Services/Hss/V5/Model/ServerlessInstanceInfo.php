<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerlessInstanceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerlessInstanceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * instanceName  **参数解释**: 实例名称 **取值范围**: 字符长度0-65535位
    * instanceId  **参数解释**: 实例ID **取值范围**: 字符长度0-65535位
    * instanceIp  **参数解释**: 实例IP **取值范围**: 字符长度0-65535位
    * instanceStatus  **参数解释**: 实例状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * agentStatus  **参数解释**: agent状态 **取值范围**: 字符长度0-65535位
    * agentId  **参数解释**: agentID标识 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * subscribeTime  **参数解释**: 开通防护时间 **取值范围**: 最小值0，最大值9223372036854775807
    * cpuRequest  **参数解释**: cpu申请值 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度0-65535位
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 所属工作负载名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * containerInfo  **参数解释**: 容器列表 **取值范围**: 最小值0，最大值65535
    * isSupportProtect  **参数解释**: 实例是否支持开关防护 **取值范围**: - true：是。 - false：否。
    * reason  **参数解释**: 实例不支持开关防护的原因 **取值范围**: 字符长度0-65535位
    * vulNum  **参数解释**: 实例漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * appVulNum  **参数解释**: 实例应用漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulNum  **参数解释**: 实例系统漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * securityNum  **参数解释**: 实例基线检查数 **取值范围**: 最小值0，最大值9223372036854775807
    * eventNum  **参数解释**: 实例入侵风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectName' => 'string',
            'instanceName' => 'string',
            'instanceId' => 'string',
            'instanceIp' => 'string',
            'instanceStatus' => 'string',
            'namespaceName' => 'string',
            'agentStatus' => 'string',
            'agentId' => 'string',
            'createTime' => 'int',
            'subscribeTime' => 'int',
            'cpuRequest' => 'string',
            'cpuLimit' => 'string',
            'protectStatus' => 'string',
            'policyGroupName' => 'string',
            'labels' => '\HuaweiCloud\SDK\Hss\V5\Model\LabelInfo[]',
            'clusterName' => 'string',
            'workloadName' => 'string',
            'clusterId' => 'string',
            'containerInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ProtectionContainerInfo[]',
            'isSupportProtect' => 'bool',
            'reason' => 'string',
            'vulNum' => 'int',
            'appVulNum' => 'int',
            'linuxVulNum' => 'int',
            'securityNum' => 'int',
            'eventNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * instanceName  **参数解释**: 实例名称 **取值范围**: 字符长度0-65535位
    * instanceId  **参数解释**: 实例ID **取值范围**: 字符长度0-65535位
    * instanceIp  **参数解释**: 实例IP **取值范围**: 字符长度0-65535位
    * instanceStatus  **参数解释**: 实例状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * agentStatus  **参数解释**: agent状态 **取值范围**: 字符长度0-65535位
    * agentId  **参数解释**: agentID标识 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * subscribeTime  **参数解释**: 开通防护时间 **取值范围**: 最小值0，最大值9223372036854775807
    * cpuRequest  **参数解释**: cpu申请值 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度0-65535位
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 所属工作负载名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * containerInfo  **参数解释**: 容器列表 **取值范围**: 最小值0，最大值65535
    * isSupportProtect  **参数解释**: 实例是否支持开关防护 **取值范围**: - true：是。 - false：否。
    * reason  **参数解释**: 实例不支持开关防护的原因 **取值范围**: 字符长度0-65535位
    * vulNum  **参数解释**: 实例漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * appVulNum  **参数解释**: 实例应用漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulNum  **参数解释**: 实例系统漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * securityNum  **参数解释**: 实例基线检查数 **取值范围**: 最小值0，最大值9223372036854775807
    * eventNum  **参数解释**: 实例入侵风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectName' => null,
        'instanceName' => null,
        'instanceId' => null,
        'instanceIp' => null,
        'instanceStatus' => null,
        'namespaceName' => null,
        'agentStatus' => null,
        'agentId' => null,
        'createTime' => 'int64',
        'subscribeTime' => 'int64',
        'cpuRequest' => null,
        'cpuLimit' => null,
        'protectStatus' => null,
        'policyGroupName' => null,
        'labels' => null,
        'clusterName' => null,
        'workloadName' => null,
        'clusterId' => null,
        'containerInfo' => null,
        'isSupportProtect' => null,
        'reason' => null,
        'vulNum' => 'int64',
        'appVulNum' => 'int64',
        'linuxVulNum' => 'int64',
        'securityNum' => 'int64',
        'eventNum' => 'int64'
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
    * instanceName  **参数解释**: 实例名称 **取值范围**: 字符长度0-65535位
    * instanceId  **参数解释**: 实例ID **取值范围**: 字符长度0-65535位
    * instanceIp  **参数解释**: 实例IP **取值范围**: 字符长度0-65535位
    * instanceStatus  **参数解释**: 实例状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * agentStatus  **参数解释**: agent状态 **取值范围**: 字符长度0-65535位
    * agentId  **参数解释**: agentID标识 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * subscribeTime  **参数解释**: 开通防护时间 **取值范围**: 最小值0，最大值9223372036854775807
    * cpuRequest  **参数解释**: cpu申请值 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度0-65535位
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 所属工作负载名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * containerInfo  **参数解释**: 容器列表 **取值范围**: 最小值0，最大值65535
    * isSupportProtect  **参数解释**: 实例是否支持开关防护 **取值范围**: - true：是。 - false：否。
    * reason  **参数解释**: 实例不支持开关防护的原因 **取值范围**: 字符长度0-65535位
    * vulNum  **参数解释**: 实例漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * appVulNum  **参数解释**: 实例应用漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulNum  **参数解释**: 实例系统漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * securityNum  **参数解释**: 实例基线检查数 **取值范围**: 最小值0，最大值9223372036854775807
    * eventNum  **参数解释**: 实例入侵风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectName' => 'enterprise_project_name',
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'instanceIp' => 'instance_ip',
            'instanceStatus' => 'instance_status',
            'namespaceName' => 'namespace_name',
            'agentStatus' => 'agent_status',
            'agentId' => 'agent_id',
            'createTime' => 'create_time',
            'subscribeTime' => 'subscribe_time',
            'cpuRequest' => 'cpu_request',
            'cpuLimit' => 'cpu_limit',
            'protectStatus' => 'protect_status',
            'policyGroupName' => 'policy_group_name',
            'labels' => 'labels',
            'clusterName' => 'cluster_name',
            'workloadName' => 'workload_name',
            'clusterId' => 'cluster_id',
            'containerInfo' => 'container_info',
            'isSupportProtect' => 'is_support_protect',
            'reason' => 'reason',
            'vulNum' => 'vul_num',
            'appVulNum' => 'app_vul_num',
            'linuxVulNum' => 'linux_vul_num',
            'securityNum' => 'security_num',
            'eventNum' => 'event_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * instanceName  **参数解释**: 实例名称 **取值范围**: 字符长度0-65535位
    * instanceId  **参数解释**: 实例ID **取值范围**: 字符长度0-65535位
    * instanceIp  **参数解释**: 实例IP **取值范围**: 字符长度0-65535位
    * instanceStatus  **参数解释**: 实例状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * agentStatus  **参数解释**: agent状态 **取值范围**: 字符长度0-65535位
    * agentId  **参数解释**: agentID标识 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * subscribeTime  **参数解释**: 开通防护时间 **取值范围**: 最小值0，最大值9223372036854775807
    * cpuRequest  **参数解释**: cpu申请值 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度0-65535位
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 所属工作负载名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * containerInfo  **参数解释**: 容器列表 **取值范围**: 最小值0，最大值65535
    * isSupportProtect  **参数解释**: 实例是否支持开关防护 **取值范围**: - true：是。 - false：否。
    * reason  **参数解释**: 实例不支持开关防护的原因 **取值范围**: 字符长度0-65535位
    * vulNum  **参数解释**: 实例漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * appVulNum  **参数解释**: 实例应用漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulNum  **参数解释**: 实例系统漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * securityNum  **参数解释**: 实例基线检查数 **取值范围**: 最小值0，最大值9223372036854775807
    * eventNum  **参数解释**: 实例入侵风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'instanceIp' => 'setInstanceIp',
            'instanceStatus' => 'setInstanceStatus',
            'namespaceName' => 'setNamespaceName',
            'agentStatus' => 'setAgentStatus',
            'agentId' => 'setAgentId',
            'createTime' => 'setCreateTime',
            'subscribeTime' => 'setSubscribeTime',
            'cpuRequest' => 'setCpuRequest',
            'cpuLimit' => 'setCpuLimit',
            'protectStatus' => 'setProtectStatus',
            'policyGroupName' => 'setPolicyGroupName',
            'labels' => 'setLabels',
            'clusterName' => 'setClusterName',
            'workloadName' => 'setWorkloadName',
            'clusterId' => 'setClusterId',
            'containerInfo' => 'setContainerInfo',
            'isSupportProtect' => 'setIsSupportProtect',
            'reason' => 'setReason',
            'vulNum' => 'setVulNum',
            'appVulNum' => 'setAppVulNum',
            'linuxVulNum' => 'setLinuxVulNum',
            'securityNum' => 'setSecurityNum',
            'eventNum' => 'setEventNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-65535位
    * instanceName  **参数解释**: 实例名称 **取值范围**: 字符长度0-65535位
    * instanceId  **参数解释**: 实例ID **取值范围**: 字符长度0-65535位
    * instanceIp  **参数解释**: 实例IP **取值范围**: 字符长度0-65535位
    * instanceStatus  **参数解释**: 实例状态 **取值范围**: 字符长度0-65535位
    * namespaceName  **参数解释**: 命名空间名称 **取值范围**: 字符长度0-256位
    * agentStatus  **参数解释**: agent状态 **取值范围**: 字符长度0-65535位
    * agentId  **参数解释**: agentID标识 **取值范围**: 字符长度0-65535位
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * subscribeTime  **参数解释**: 开通防护时间 **取值范围**: 最小值0，最大值9223372036854775807
    * cpuRequest  **参数解释**: cpu申请值 **取值范围**: 字符长度0-65535位
    * cpuLimit  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    * protectStatus  **参数解释**: 防护状态 **取值范围**: 字符长度0-65535位
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度0-65535位
    * labels  **参数解释**: 标签 **取值范围**: 最小值0，最大值65535
    * clusterName  **参数解释**: 所属集群名称 **取值范围**: 字符长度0-65535位
    * workloadName  **参数解释**: 所属工作负载名称 **取值范围**: 字符长度0-65535位
    * clusterId  **参数解释**: 所属集群ID **取值范围**: 字符长度0-65535位
    * containerInfo  **参数解释**: 容器列表 **取值范围**: 最小值0，最大值65535
    * isSupportProtect  **参数解释**: 实例是否支持开关防护 **取值范围**: - true：是。 - false：否。
    * reason  **参数解释**: 实例不支持开关防护的原因 **取值范围**: 字符长度0-65535位
    * vulNum  **参数解释**: 实例漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * appVulNum  **参数解释**: 实例应用漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * linuxVulNum  **参数解释**: 实例系统漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    * securityNum  **参数解释**: 实例基线检查数 **取值范围**: 最小值0，最大值9223372036854775807
    * eventNum  **参数解释**: 实例入侵风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'instanceIp' => 'getInstanceIp',
            'instanceStatus' => 'getInstanceStatus',
            'namespaceName' => 'getNamespaceName',
            'agentStatus' => 'getAgentStatus',
            'agentId' => 'getAgentId',
            'createTime' => 'getCreateTime',
            'subscribeTime' => 'getSubscribeTime',
            'cpuRequest' => 'getCpuRequest',
            'cpuLimit' => 'getCpuLimit',
            'protectStatus' => 'getProtectStatus',
            'policyGroupName' => 'getPolicyGroupName',
            'labels' => 'getLabels',
            'clusterName' => 'getClusterName',
            'workloadName' => 'getWorkloadName',
            'clusterId' => 'getClusterId',
            'containerInfo' => 'getContainerInfo',
            'isSupportProtect' => 'getIsSupportProtect',
            'reason' => 'getReason',
            'vulNum' => 'getVulNum',
            'appVulNum' => 'getAppVulNum',
            'linuxVulNum' => 'getLinuxVulNum',
            'securityNum' => 'getSecurityNum',
            'eventNum' => 'getEventNum'
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
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceIp'] = isset($data['instanceIp']) ? $data['instanceIp'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['subscribeTime'] = isset($data['subscribeTime']) ? $data['subscribeTime'] : null;
        $this->container['cpuRequest'] = isset($data['cpuRequest']) ? $data['cpuRequest'] : null;
        $this->container['cpuLimit'] = isset($data['cpuLimit']) ? $data['cpuLimit'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['policyGroupName'] = isset($data['policyGroupName']) ? $data['policyGroupName'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['workloadName'] = isset($data['workloadName']) ? $data['workloadName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['containerInfo'] = isset($data['containerInfo']) ? $data['containerInfo'] : null;
        $this->container['isSupportProtect'] = isset($data['isSupportProtect']) ? $data['isSupportProtect'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['vulNum'] = isset($data['vulNum']) ? $data['vulNum'] : null;
        $this->container['appVulNum'] = isset($data['appVulNum']) ? $data['appVulNum'] : null;
        $this->container['linuxVulNum'] = isset($data['linuxVulNum']) ? $data['linuxVulNum'] : null;
        $this->container['securityNum'] = isset($data['securityNum']) ? $data['securityNum'] : null;
        $this->container['eventNum'] = isset($data['eventNum']) ? $data['eventNum'] : null;
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
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceIp']) && (mb_strlen($this->container['instanceIp']) > 65535)) {
                $invalidProperties[] = "invalid value for 'instanceIp', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['instanceIp']) && (mb_strlen($this->container['instanceIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceStatus']) && (mb_strlen($this->container['instanceStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['instanceStatus']) && (mb_strlen($this->container['instanceStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespaceName']) && (mb_strlen($this->container['namespaceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespaceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subscribeTime']) && ($this->container['subscribeTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'subscribeTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['subscribeTime']) && ($this->container['subscribeTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'subscribeTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuRequest']) && (mb_strlen($this->container['cpuRequest']) > 65535)) {
                $invalidProperties[] = "invalid value for 'cpuRequest', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cpuRequest']) && (mb_strlen($this->container['cpuRequest']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuRequest', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) > 65535)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cpuLimit']) && (mb_strlen($this->container['cpuLimit']) < 0)) {
                $invalidProperties[] = "invalid value for 'cpuLimit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 65535)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workloadName']) && (mb_strlen($this->container['workloadName']) > 65535)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['workloadName']) && (mb_strlen($this->container['workloadName']) < 0)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 65535)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 65535)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['vulNum']) && ($this->container['vulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVulNum']) && ($this->container['appVulNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'appVulNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['appVulNum']) && ($this->container['appVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'appVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['linuxVulNum']) && ($this->container['linuxVulNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'linuxVulNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['linuxVulNum']) && ($this->container['linuxVulNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'linuxVulNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityNum']) && ($this->container['securityNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'securityNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['securityNum']) && ($this->container['securityNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'securityNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['eventNum']) && ($this->container['eventNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventNum', must be bigger than or equal to 0.";
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
    * Gets instanceName
    *  **参数解释**: 实例名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $instanceName **参数解释**: 实例名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 实例ID **取值范围**: 字符长度0-65535位
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
    * @param string|null $instanceId **参数解释**: 实例ID **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceIp
    *  **参数解释**: 实例IP **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getInstanceIp()
    {
        return $this->container['instanceIp'];
    }

    /**
    * Sets instanceIp
    *
    * @param string|null $instanceIp **参数解释**: 实例IP **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setInstanceIp($instanceIp)
    {
        $this->container['instanceIp'] = $instanceIp;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  **参数解释**: 实例状态 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus **参数解释**: 实例状态 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
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
    * Gets agentStatus
    *  **参数解释**: agent状态 **取值范围**: 字符长度0-65535位
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
    * @param string|null $agentStatus **参数解释**: agent状态 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: agentID标识 **取值范围**: 字符长度0-65535位
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
    * @param string|null $agentId **参数解释**: agentID标识 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
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
    * Gets subscribeTime
    *  **参数解释**: 开通防护时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getSubscribeTime()
    {
        return $this->container['subscribeTime'];
    }

    /**
    * Sets subscribeTime
    *
    * @param int|null $subscribeTime **参数解释**: 开通防护时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setSubscribeTime($subscribeTime)
    {
        $this->container['subscribeTime'] = $subscribeTime;
        return $this;
    }

    /**
    * Gets cpuRequest
    *  **参数解释**: cpu申请值 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getCpuRequest()
    {
        return $this->container['cpuRequest'];
    }

    /**
    * Sets cpuRequest
    *
    * @param string|null $cpuRequest **参数解释**: cpu申请值 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setCpuRequest($cpuRequest)
    {
        $this->container['cpuRequest'] = $cpuRequest;
        return $this;
    }

    /**
    * Gets cpuLimit
    *  **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
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
    * @param string|null $cpuLimit **参数解释**: cpu限制值 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setCpuLimit($cpuLimit)
    {
        $this->container['cpuLimit'] = $cpuLimit;
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
    * Gets policyGroupName
    *  **参数解释**: 策略组名称 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getPolicyGroupName()
    {
        return $this->container['policyGroupName'];
    }

    /**
    * Sets policyGroupName
    *
    * @param string|null $policyGroupName **参数解释**: 策略组名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setPolicyGroupName($policyGroupName)
    {
        $this->container['policyGroupName'] = $policyGroupName;
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
    * Gets workloadName
    *  **参数解释**: 所属工作负载名称 **取值范围**: 字符长度0-65535位
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
    * @param string|null $workloadName **参数解释**: 所属工作负载名称 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setWorkloadName($workloadName)
    {
        $this->container['workloadName'] = $workloadName;
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
    * Gets containerInfo
    *  **参数解释**: 容器列表 **取值范围**: 最小值0，最大值65535
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ProtectionContainerInfo[]|null
    */
    public function getContainerInfo()
    {
        return $this->container['containerInfo'];
    }

    /**
    * Sets containerInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ProtectionContainerInfo[]|null $containerInfo **参数解释**: 容器列表 **取值范围**: 最小值0，最大值65535
    *
    * @return $this
    */
    public function setContainerInfo($containerInfo)
    {
        $this->container['containerInfo'] = $containerInfo;
        return $this;
    }

    /**
    * Gets isSupportProtect
    *  **参数解释**: 实例是否支持开关防护 **取值范围**: - true：是。 - false：否。
    *
    * @return bool|null
    */
    public function getIsSupportProtect()
    {
        return $this->container['isSupportProtect'];
    }

    /**
    * Sets isSupportProtect
    *
    * @param bool|null $isSupportProtect **参数解释**: 实例是否支持开关防护 **取值范围**: - true：是。 - false：否。
    *
    * @return $this
    */
    public function setIsSupportProtect($isSupportProtect)
    {
        $this->container['isSupportProtect'] = $isSupportProtect;
        return $this;
    }

    /**
    * Gets reason
    *  **参数解释**: 实例不支持开关防护的原因 **取值范围**: 字符长度0-65535位
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason **参数解释**: 实例不支持开关防护的原因 **取值范围**: 字符长度0-65535位
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets vulNum
    *  **参数解释**: 实例漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getVulNum()
    {
        return $this->container['vulNum'];
    }

    /**
    * Sets vulNum
    *
    * @param int|null $vulNum **参数解释**: 实例漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setVulNum($vulNum)
    {
        $this->container['vulNum'] = $vulNum;
        return $this;
    }

    /**
    * Gets appVulNum
    *  **参数解释**: 实例应用漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $appVulNum **参数解释**: 实例应用漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setAppVulNum($appVulNum)
    {
        $this->container['appVulNum'] = $appVulNum;
        return $this;
    }

    /**
    * Gets linuxVulNum
    *  **参数解释**: 实例系统漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getLinuxVulNum()
    {
        return $this->container['linuxVulNum'];
    }

    /**
    * Sets linuxVulNum
    *
    * @param int|null $linuxVulNum **参数解释**: 实例系统漏洞风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setLinuxVulNum($linuxVulNum)
    {
        $this->container['linuxVulNum'] = $linuxVulNum;
        return $this;
    }

    /**
    * Gets securityNum
    *  **参数解释**: 实例基线检查数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getSecurityNum()
    {
        return $this->container['securityNum'];
    }

    /**
    * Sets securityNum
    *
    * @param int|null $securityNum **参数解释**: 实例基线检查数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setSecurityNum($securityNum)
    {
        $this->container['securityNum'] = $securityNum;
        return $this;
    }

    /**
    * Gets eventNum
    *  **参数解释**: 实例入侵风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getEventNum()
    {
        return $this->container['eventNum'];
    }

    /**
    * Sets eventNum
    *
    * @param int|null $eventNum **参数解释**: 实例入侵风险数 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setEventNum($eventNum)
    {
        $this->container['eventNum'] = $eventNum;
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

