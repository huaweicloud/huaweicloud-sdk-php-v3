<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释** AgentId标识 **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-64]个字符
    * hostId  **参数解释** 服务器ID **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostName  **参数解释** 服务器名称 **取值范围** 只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostStatus  **参数解释** 服务器状态 **取值范围** - ACTIVE ：正在运行 - SHUTOFF ：关机 - BUILDING ：创建中 - ERROR ：故障
    * agentStatus  **参数解释** Agent状态 **取值范围**         - not_installed ：未安装 - online ：在线 - offline ：离线
    * protectStatus  **参数解释** 防护状态 **取值范围**         - closed ：防护关闭状态 - opened ：防护开启状态
    * protectInterrupt  **参数解释** 防护是否中断 **取值范围**         - true: 防护中断 - false: 防护未中断
    * protectDegradation  **参数解释** 防护是否降级 **取值范围**         - true: 防护降级 - false: 防护未降级
    * degradationReason  **参数解释** 防护降级原因 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[1-32]个字符
    * containerTags  **参数解释** 标签：用来识别cce集群节点和自建集群节点 **取值范围**         - cce：cce节点 - self：自建节点 - other：其它节点
    * privateIp  **参数解释** 私有IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * publicIp  **参数解释** 弹性公网IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * resourceId  **参数解释** 主机安全配额ID（UUID） **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * groupName  **参数解释** 服务器组名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * enterpriseProjectName  **参数解释** 所属企业项目名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-256]个字符
    * detectResult  **参数解释** 云主机安全检测结果 **取值范围**           - undetected ：未检测 - clean ：无风险 - risk ：有风险 - scanning ：检测中
    * asset  **参数解释** 资产风险 **取值范围**         0-2147483647
    * vulnerability  **参数解释** 漏洞风险 **取值范围**         0-2147483647
    * intrusion  **参数解释** 入侵风险 **取值范围**         0-2147483647
    * policyGroupId  **参数解释** 策略组ID **取值范围**         只能由英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    * policyGroupName  **参数解释** 策略组名称 **取值范围**         只能由中文字母、英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'hostStatus' => 'string',
            'agentStatus' => 'string',
            'protectStatus' => 'string',
            'protectInterrupt' => 'bool',
            'protectDegradation' => 'bool',
            'degradationReason' => 'string',
            'containerTags' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'resourceId' => 'string',
            'groupName' => 'string',
            'enterpriseProjectName' => 'string',
            'detectResult' => 'string',
            'asset' => 'int',
            'vulnerability' => 'int',
            'intrusion' => 'int',
            'policyGroupId' => 'string',
            'policyGroupName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释** AgentId标识 **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-64]个字符
    * hostId  **参数解释** 服务器ID **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostName  **参数解释** 服务器名称 **取值范围** 只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostStatus  **参数解释** 服务器状态 **取值范围** - ACTIVE ：正在运行 - SHUTOFF ：关机 - BUILDING ：创建中 - ERROR ：故障
    * agentStatus  **参数解释** Agent状态 **取值范围**         - not_installed ：未安装 - online ：在线 - offline ：离线
    * protectStatus  **参数解释** 防护状态 **取值范围**         - closed ：防护关闭状态 - opened ：防护开启状态
    * protectInterrupt  **参数解释** 防护是否中断 **取值范围**         - true: 防护中断 - false: 防护未中断
    * protectDegradation  **参数解释** 防护是否降级 **取值范围**         - true: 防护降级 - false: 防护未降级
    * degradationReason  **参数解释** 防护降级原因 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[1-32]个字符
    * containerTags  **参数解释** 标签：用来识别cce集群节点和自建集群节点 **取值范围**         - cce：cce节点 - self：自建节点 - other：其它节点
    * privateIp  **参数解释** 私有IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * publicIp  **参数解释** 弹性公网IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * resourceId  **参数解释** 主机安全配额ID（UUID） **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * groupName  **参数解释** 服务器组名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * enterpriseProjectName  **参数解释** 所属企业项目名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-256]个字符
    * detectResult  **参数解释** 云主机安全检测结果 **取值范围**           - undetected ：未检测 - clean ：无风险 - risk ：有风险 - scanning ：检测中
    * asset  **参数解释** 资产风险 **取值范围**         0-2147483647
    * vulnerability  **参数解释** 漏洞风险 **取值范围**         0-2147483647
    * intrusion  **参数解释** 入侵风险 **取值范围**         0-2147483647
    * policyGroupId  **参数解释** 策略组ID **取值范围**         只能由英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    * policyGroupName  **参数解释** 策略组名称 **取值范围**         只能由中文字母、英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'hostStatus' => null,
        'agentStatus' => null,
        'protectStatus' => null,
        'protectInterrupt' => null,
        'protectDegradation' => null,
        'degradationReason' => null,
        'containerTags' => null,
        'privateIp' => null,
        'publicIp' => null,
        'resourceId' => null,
        'groupName' => null,
        'enterpriseProjectName' => null,
        'detectResult' => null,
        'asset' => 'int32',
        'vulnerability' => 'int32',
        'intrusion' => 'int32',
        'policyGroupId' => null,
        'policyGroupName' => null
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
    * agentId  **参数解释** AgentId标识 **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-64]个字符
    * hostId  **参数解释** 服务器ID **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostName  **参数解释** 服务器名称 **取值范围** 只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostStatus  **参数解释** 服务器状态 **取值范围** - ACTIVE ：正在运行 - SHUTOFF ：关机 - BUILDING ：创建中 - ERROR ：故障
    * agentStatus  **参数解释** Agent状态 **取值范围**         - not_installed ：未安装 - online ：在线 - offline ：离线
    * protectStatus  **参数解释** 防护状态 **取值范围**         - closed ：防护关闭状态 - opened ：防护开启状态
    * protectInterrupt  **参数解释** 防护是否中断 **取值范围**         - true: 防护中断 - false: 防护未中断
    * protectDegradation  **参数解释** 防护是否降级 **取值范围**         - true: 防护降级 - false: 防护未降级
    * degradationReason  **参数解释** 防护降级原因 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[1-32]个字符
    * containerTags  **参数解释** 标签：用来识别cce集群节点和自建集群节点 **取值范围**         - cce：cce节点 - self：自建节点 - other：其它节点
    * privateIp  **参数解释** 私有IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * publicIp  **参数解释** 弹性公网IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * resourceId  **参数解释** 主机安全配额ID（UUID） **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * groupName  **参数解释** 服务器组名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * enterpriseProjectName  **参数解释** 所属企业项目名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-256]个字符
    * detectResult  **参数解释** 云主机安全检测结果 **取值范围**           - undetected ：未检测 - clean ：无风险 - risk ：有风险 - scanning ：检测中
    * asset  **参数解释** 资产风险 **取值范围**         0-2147483647
    * vulnerability  **参数解释** 漏洞风险 **取值范围**         0-2147483647
    * intrusion  **参数解释** 入侵风险 **取值范围**         0-2147483647
    * policyGroupId  **参数解释** 策略组ID **取值范围**         只能由英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    * policyGroupName  **参数解释** 策略组名称 **取值范围**         只能由中文字母、英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'protectStatus' => 'protect_status',
            'protectInterrupt' => 'protect_interrupt',
            'protectDegradation' => 'protect_degradation',
            'degradationReason' => 'degradation_reason',
            'containerTags' => 'container_tags',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'resourceId' => 'resource_id',
            'groupName' => 'group_name',
            'enterpriseProjectName' => 'enterprise_project_name',
            'detectResult' => 'detect_result',
            'asset' => 'asset',
            'vulnerability' => 'vulnerability',
            'intrusion' => 'intrusion',
            'policyGroupId' => 'policy_group_id',
            'policyGroupName' => 'policy_group_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释** AgentId标识 **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-64]个字符
    * hostId  **参数解释** 服务器ID **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostName  **参数解释** 服务器名称 **取值范围** 只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostStatus  **参数解释** 服务器状态 **取值范围** - ACTIVE ：正在运行 - SHUTOFF ：关机 - BUILDING ：创建中 - ERROR ：故障
    * agentStatus  **参数解释** Agent状态 **取值范围**         - not_installed ：未安装 - online ：在线 - offline ：离线
    * protectStatus  **参数解释** 防护状态 **取值范围**         - closed ：防护关闭状态 - opened ：防护开启状态
    * protectInterrupt  **参数解释** 防护是否中断 **取值范围**         - true: 防护中断 - false: 防护未中断
    * protectDegradation  **参数解释** 防护是否降级 **取值范围**         - true: 防护降级 - false: 防护未降级
    * degradationReason  **参数解释** 防护降级原因 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[1-32]个字符
    * containerTags  **参数解释** 标签：用来识别cce集群节点和自建集群节点 **取值范围**         - cce：cce节点 - self：自建节点 - other：其它节点
    * privateIp  **参数解释** 私有IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * publicIp  **参数解释** 弹性公网IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * resourceId  **参数解释** 主机安全配额ID（UUID） **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * groupName  **参数解释** 服务器组名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * enterpriseProjectName  **参数解释** 所属企业项目名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-256]个字符
    * detectResult  **参数解释** 云主机安全检测结果 **取值范围**           - undetected ：未检测 - clean ：无风险 - risk ：有风险 - scanning ：检测中
    * asset  **参数解释** 资产风险 **取值范围**         0-2147483647
    * vulnerability  **参数解释** 漏洞风险 **取值范围**         0-2147483647
    * intrusion  **参数解释** 入侵风险 **取值范围**         0-2147483647
    * policyGroupId  **参数解释** 策略组ID **取值范围**         只能由英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    * policyGroupName  **参数解释** 策略组名称 **取值范围**         只能由中文字母、英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'protectStatus' => 'setProtectStatus',
            'protectInterrupt' => 'setProtectInterrupt',
            'protectDegradation' => 'setProtectDegradation',
            'degradationReason' => 'setDegradationReason',
            'containerTags' => 'setContainerTags',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'resourceId' => 'setResourceId',
            'groupName' => 'setGroupName',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'detectResult' => 'setDetectResult',
            'asset' => 'setAsset',
            'vulnerability' => 'setVulnerability',
            'intrusion' => 'setIntrusion',
            'policyGroupId' => 'setPolicyGroupId',
            'policyGroupName' => 'setPolicyGroupName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释** AgentId标识 **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-64]个字符
    * hostId  **参数解释** 服务器ID **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostName  **参数解释** 服务器名称 **取值范围** 只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * hostStatus  **参数解释** 服务器状态 **取值范围** - ACTIVE ：正在运行 - SHUTOFF ：关机 - BUILDING ：创建中 - ERROR ：故障
    * agentStatus  **参数解释** Agent状态 **取值范围**         - not_installed ：未安装 - online ：在线 - offline ：离线
    * protectStatus  **参数解释** 防护状态 **取值范围**         - closed ：防护关闭状态 - opened ：防护开启状态
    * protectInterrupt  **参数解释** 防护是否中断 **取值范围**         - true: 防护中断 - false: 防护未中断
    * protectDegradation  **参数解释** 防护是否降级 **取值范围**         - true: 防护降级 - false: 防护未降级
    * degradationReason  **参数解释** 防护降级原因 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[1-32]个字符
    * containerTags  **参数解释** 标签：用来识别cce集群节点和自建集群节点 **取值范围**         - cce：cce节点 - self：自建节点 - other：其它节点
    * privateIp  **参数解释** 私有IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * publicIp  **参数解释** 弹性公网IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    * resourceId  **参数解释** 主机安全配额ID（UUID） **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * groupName  **参数解释** 服务器组名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    * enterpriseProjectName  **参数解释** 所属企业项目名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-256]个字符
    * detectResult  **参数解释** 云主机安全检测结果 **取值范围**           - undetected ：未检测 - clean ：无风险 - risk ：有风险 - scanning ：检测中
    * asset  **参数解释** 资产风险 **取值范围**         0-2147483647
    * vulnerability  **参数解释** 漏洞风险 **取值范围**         0-2147483647
    * intrusion  **参数解释** 入侵风险 **取值范围**         0-2147483647
    * policyGroupId  **参数解释** 策略组ID **取值范围**         只能由英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    * policyGroupName  **参数解释** 策略组名称 **取值范围**         只能由中文字母、英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'protectStatus' => 'getProtectStatus',
            'protectInterrupt' => 'getProtectInterrupt',
            'protectDegradation' => 'getProtectDegradation',
            'degradationReason' => 'getDegradationReason',
            'containerTags' => 'getContainerTags',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'resourceId' => 'getResourceId',
            'groupName' => 'getGroupName',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'detectResult' => 'getDetectResult',
            'asset' => 'getAsset',
            'vulnerability' => 'getVulnerability',
            'intrusion' => 'getIntrusion',
            'policyGroupId' => 'getPolicyGroupId',
            'policyGroupName' => 'getPolicyGroupName'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['protectInterrupt'] = isset($data['protectInterrupt']) ? $data['protectInterrupt'] : null;
        $this->container['protectDegradation'] = isset($data['protectDegradation']) ? $data['protectDegradation'] : null;
        $this->container['degradationReason'] = isset($data['degradationReason']) ? $data['degradationReason'] : null;
        $this->container['containerTags'] = isset($data['containerTags']) ? $data['containerTags'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['vulnerability'] = isset($data['vulnerability']) ? $data['vulnerability'] : null;
        $this->container['intrusion'] = isset($data['intrusion']) ? $data['intrusion'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['policyGroupName'] = isset($data['policyGroupName']) ? $data['policyGroupName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['degradationReason']) && (mb_strlen($this->container['degradationReason']) > 32)) {
                $invalidProperties[] = "invalid value for 'degradationReason', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['degradationReason']) && (mb_strlen($this->container['degradationReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'degradationReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerTags']) && (mb_strlen($this->container['containerTags']) > 32)) {
                $invalidProperties[] = "invalid value for 'containerTags', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['containerTags']) && (mb_strlen($this->container['containerTags']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerTags', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['asset']) && ($this->container['asset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'asset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['asset']) && ($this->container['asset'] < 0)) {
                $invalidProperties[] = "invalid value for 'asset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulnerability']) && ($this->container['vulnerability'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vulnerability', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vulnerability']) && ($this->container['vulnerability'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulnerability', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intrusion']) && ($this->container['intrusion'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'intrusion', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['intrusion']) && ($this->container['intrusion'] < 0)) {
                $invalidProperties[] = "invalid value for 'intrusion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be bigger than or equal to 1.";
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
    * Gets agentId
    *  **参数解释** AgentId标识 **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-64]个字符
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
    * @param string|null $agentId **参数解释** AgentId标识 **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-64]个字符
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释** 服务器ID **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
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
    * @param string|null $hostId **参数解释** 服务器ID **取值范围** 只能由英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释** 服务器名称 **取值范围** 只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
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
    * @param string|null $hostName **参数解释** 服务器名称 **取值范围** 只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释** 服务器状态 **取值范围** - ACTIVE ：正在运行 - SHUTOFF ：关机 - BUILDING ：创建中 - ERROR ：故障
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
    * @param string|null $hostStatus **参数解释** 服务器状态 **取值范围** - ACTIVE ：正在运行 - SHUTOFF ：关机 - BUILDING ：创建中 - ERROR ：故障
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释** Agent状态 **取值范围**         - not_installed ：未安装 - online ：在线 - offline ：离线
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
    * @param string|null $agentStatus **参数解释** Agent状态 **取值范围**         - not_installed ：未安装 - online ：在线 - offline ：离线
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释** 防护状态 **取值范围**         - closed ：防护关闭状态 - opened ：防护开启状态
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
    * @param string|null $protectStatus **参数解释** 防护状态 **取值范围**         - closed ：防护关闭状态 - opened ：防护开启状态
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets protectInterrupt
    *  **参数解释** 防护是否中断 **取值范围**         - true: 防护中断 - false: 防护未中断
    *
    * @return bool|null
    */
    public function getProtectInterrupt()
    {
        return $this->container['protectInterrupt'];
    }

    /**
    * Sets protectInterrupt
    *
    * @param bool|null $protectInterrupt **参数解释** 防护是否中断 **取值范围**         - true: 防护中断 - false: 防护未中断
    *
    * @return $this
    */
    public function setProtectInterrupt($protectInterrupt)
    {
        $this->container['protectInterrupt'] = $protectInterrupt;
        return $this;
    }

    /**
    * Gets protectDegradation
    *  **参数解释** 防护是否降级 **取值范围**         - true: 防护降级 - false: 防护未降级
    *
    * @return bool|null
    */
    public function getProtectDegradation()
    {
        return $this->container['protectDegradation'];
    }

    /**
    * Sets protectDegradation
    *
    * @param bool|null $protectDegradation **参数解释** 防护是否降级 **取值范围**         - true: 防护降级 - false: 防护未降级
    *
    * @return $this
    */
    public function setProtectDegradation($protectDegradation)
    {
        $this->container['protectDegradation'] = $protectDegradation;
        return $this;
    }

    /**
    * Gets degradationReason
    *  **参数解释** 防护降级原因 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[1-32]个字符
    *
    * @return string|null
    */
    public function getDegradationReason()
    {
        return $this->container['degradationReason'];
    }

    /**
    * Sets degradationReason
    *
    * @param string|null $degradationReason **参数解释** 防护降级原因 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[1-32]个字符
    *
    * @return $this
    */
    public function setDegradationReason($degradationReason)
    {
        $this->container['degradationReason'] = $degradationReason;
        return $this;
    }

    /**
    * Gets containerTags
    *  **参数解释** 标签：用来识别cce集群节点和自建集群节点 **取值范围**         - cce：cce节点 - self：自建节点 - other：其它节点
    *
    * @return string|null
    */
    public function getContainerTags()
    {
        return $this->container['containerTags'];
    }

    /**
    * Sets containerTags
    *
    * @param string|null $containerTags **参数解释** 标签：用来识别cce集群节点和自建集群节点 **取值范围**         - cce：cce节点 - self：自建节点 - other：其它节点
    *
    * @return $this
    */
    public function setContainerTags($containerTags)
    {
        $this->container['containerTags'] = $containerTags;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释** 私有IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
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
    * @param string|null $privateIp **参数解释** 私有IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释** 弹性公网IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
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
    * @param string|null $publicIp **参数解释** 弹性公网IP地址 **取值范围**         只能由数字、特殊字符组成, 长度范围为[0-128]个字符
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释** 主机安全配额ID（UUID） **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId **参数解释** 主机安全配额ID（UUID） **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释** 服务器组名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释** 服务器组名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-128]个字符
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  **参数解释** 所属企业项目名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-256]个字符
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
    * @param string|null $enterpriseProjectName **参数解释** 所属企业项目名称 **取值范围**         只能由中文字符、英文字母、数字、特殊字符组成, 长度范围为[0-256]个字符
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets detectResult
    *  **参数解释** 云主机安全检测结果 **取值范围**           - undetected ：未检测 - clean ：无风险 - risk ：有风险 - scanning ：检测中
    *
    * @return string|null
    */
    public function getDetectResult()
    {
        return $this->container['detectResult'];
    }

    /**
    * Sets detectResult
    *
    * @param string|null $detectResult **参数解释** 云主机安全检测结果 **取值范围**           - undetected ：未检测 - clean ：无风险 - risk ：有风险 - scanning ：检测中
    *
    * @return $this
    */
    public function setDetectResult($detectResult)
    {
        $this->container['detectResult'] = $detectResult;
        return $this;
    }

    /**
    * Gets asset
    *  **参数解释** 资产风险 **取值范围**         0-2147483647
    *
    * @return int|null
    */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
    * Sets asset
    *
    * @param int|null $asset **参数解释** 资产风险 **取值范围**         0-2147483647
    *
    * @return $this
    */
    public function setAsset($asset)
    {
        $this->container['asset'] = $asset;
        return $this;
    }

    /**
    * Gets vulnerability
    *  **参数解释** 漏洞风险 **取值范围**         0-2147483647
    *
    * @return int|null
    */
    public function getVulnerability()
    {
        return $this->container['vulnerability'];
    }

    /**
    * Sets vulnerability
    *
    * @param int|null $vulnerability **参数解释** 漏洞风险 **取值范围**         0-2147483647
    *
    * @return $this
    */
    public function setVulnerability($vulnerability)
    {
        $this->container['vulnerability'] = $vulnerability;
        return $this;
    }

    /**
    * Gets intrusion
    *  **参数解释** 入侵风险 **取值范围**         0-2147483647
    *
    * @return int|null
    */
    public function getIntrusion()
    {
        return $this->container['intrusion'];
    }

    /**
    * Sets intrusion
    *
    * @param int|null $intrusion **参数解释** 入侵风险 **取值范围**         0-2147483647
    *
    * @return $this
    */
    public function setIntrusion($intrusion)
    {
        $this->container['intrusion'] = $intrusion;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释** 策略组ID **取值范围**         只能由英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    *
    * @return string|null
    */
    public function getPolicyGroupId()
    {
        return $this->container['policyGroupId'];
    }

    /**
    * Sets policyGroupId
    *
    * @param string|null $policyGroupId **参数解释** 策略组ID **取值范围**         只能由英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    *
    * @return $this
    */
    public function setPolicyGroupId($policyGroupId)
    {
        $this->container['policyGroupId'] = $policyGroupId;
        return $this;
    }

    /**
    * Gets policyGroupName
    *  **参数解释** 策略组名称 **取值范围**         只能由中文字母、英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
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
    * @param string|null $policyGroupName **参数解释** 策略组名称 **取值范围**         只能由中文字母、英文字母、数字、特殊字符组成, 长度范围为[1-128]个字符
    *
    * @return $this
    */
    public function setPolicyGroupName($policyGroupName)
    {
        $this->container['policyGroupName'] = $policyGroupName;
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

