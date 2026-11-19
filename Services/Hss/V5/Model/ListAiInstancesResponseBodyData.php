<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiInstancesResponseBodyData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiInstancesResponseBodyData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw - OpenClaw
    * agentType  **参数解释**： 智能体类型 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。
    * sessionNumber  **参数解释**： 会话数量 **取值范围**： 0~2147483647
    * projectId  **参数解释**： 项目ID **取值范围**： 字符长度为1-128位
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 镜像url **取值范围**： 字符长度为1-512位
    * instanceCreateTime  **参数解释**： 智能体实例的创建时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * instanceUpdateTime  **参数解释**： 智能体实例的更新时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * traceAlarmNumber  **参数解释**： 行为轨迹告警数量 **取值范围**： 0~2147483647
    * runtimeAlarmNumber  **参数解释**： 运行时告警数量 **取值范围**： 0~2147483647
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyInfoList  **参数解释**: AI策略组列表 **取值范围**: 不涉及
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE - Others - AgentArts - OfficeClaw
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
    * containerId  **参数解释** 容器实例id **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentName' => 'string',
            'agentId' => 'string',
            'runtimeName' => 'string',
            'runtimeId' => 'string',
            'sdkStatus' => 'string',
            'source' => 'string',
            'agentType' => 'string',
            'sessionNumber' => 'int',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'imageUrl' => 'string',
            'instanceCreateTime' => 'int',
            'instanceUpdateTime' => 'int',
            'traceAlarmNumber' => 'int',
            'runtimeAlarmNumber' => 'int',
            'policyGroupType' => 'int',
            'policyInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\AiAgentPolicy[]',
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
            'containerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw - OpenClaw
    * agentType  **参数解释**： 智能体类型 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。
    * sessionNumber  **参数解释**： 会话数量 **取值范围**： 0~2147483647
    * projectId  **参数解释**： 项目ID **取值范围**： 字符长度为1-128位
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 镜像url **取值范围**： 字符长度为1-512位
    * instanceCreateTime  **参数解释**： 智能体实例的创建时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * instanceUpdateTime  **参数解释**： 智能体实例的更新时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * traceAlarmNumber  **参数解释**： 行为轨迹告警数量 **取值范围**： 0~2147483647
    * runtimeAlarmNumber  **参数解释**： 运行时告警数量 **取值范围**： 0~2147483647
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyInfoList  **参数解释**: AI策略组列表 **取值范围**: 不涉及
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE - Others - AgentArts - OfficeClaw
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
    * containerId  **参数解释** 容器实例id **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentName' => null,
        'agentId' => null,
        'runtimeName' => null,
        'runtimeId' => null,
        'sdkStatus' => null,
        'source' => null,
        'agentType' => null,
        'sessionNumber' => 'int32',
        'projectId' => null,
        'enterpriseProjectId' => null,
        'imageUrl' => null,
        'instanceCreateTime' => 'int64',
        'instanceUpdateTime' => 'int64',
        'traceAlarmNumber' => 'int32',
        'runtimeAlarmNumber' => 'int32',
        'policyGroupType' => 'int32',
        'policyInfoList' => null,
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
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw - OpenClaw
    * agentType  **参数解释**： 智能体类型 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。
    * sessionNumber  **参数解释**： 会话数量 **取值范围**： 0~2147483647
    * projectId  **参数解释**： 项目ID **取值范围**： 字符长度为1-128位
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 镜像url **取值范围**： 字符长度为1-512位
    * instanceCreateTime  **参数解释**： 智能体实例的创建时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * instanceUpdateTime  **参数解释**： 智能体实例的更新时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * traceAlarmNumber  **参数解释**： 行为轨迹告警数量 **取值范围**： 0~2147483647
    * runtimeAlarmNumber  **参数解释**： 运行时告警数量 **取值范围**： 0~2147483647
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyInfoList  **参数解释**: AI策略组列表 **取值范围**: 不涉及
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE - Others - AgentArts - OfficeClaw
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
    * containerId  **参数解释** 容器实例id **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentName' => 'agent_name',
            'agentId' => 'agent_id',
            'runtimeName' => 'runtime_name',
            'runtimeId' => 'runtime_id',
            'sdkStatus' => 'sdk_status',
            'source' => 'source',
            'agentType' => 'agent_type',
            'sessionNumber' => 'session_number',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageUrl' => 'image_url',
            'instanceCreateTime' => 'instance_create_time',
            'instanceUpdateTime' => 'instance_update_time',
            'traceAlarmNumber' => 'trace_alarm_number',
            'runtimeAlarmNumber' => 'runtime_alarm_number',
            'policyGroupType' => 'policy_group_type',
            'policyInfoList' => 'policy_info_list',
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
            'containerId' => 'container_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw - OpenClaw
    * agentType  **参数解释**： 智能体类型 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。
    * sessionNumber  **参数解释**： 会话数量 **取值范围**： 0~2147483647
    * projectId  **参数解释**： 项目ID **取值范围**： 字符长度为1-128位
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 镜像url **取值范围**： 字符长度为1-512位
    * instanceCreateTime  **参数解释**： 智能体实例的创建时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * instanceUpdateTime  **参数解释**： 智能体实例的更新时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * traceAlarmNumber  **参数解释**： 行为轨迹告警数量 **取值范围**： 0~2147483647
    * runtimeAlarmNumber  **参数解释**： 运行时告警数量 **取值范围**： 0~2147483647
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyInfoList  **参数解释**: AI策略组列表 **取值范围**: 不涉及
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE - Others - AgentArts - OfficeClaw
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
    * containerId  **参数解释** 容器实例id **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'agentName' => 'setAgentName',
            'agentId' => 'setAgentId',
            'runtimeName' => 'setRuntimeName',
            'runtimeId' => 'setRuntimeId',
            'sdkStatus' => 'setSdkStatus',
            'source' => 'setSource',
            'agentType' => 'setAgentType',
            'sessionNumber' => 'setSessionNumber',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageUrl' => 'setImageUrl',
            'instanceCreateTime' => 'setInstanceCreateTime',
            'instanceUpdateTime' => 'setInstanceUpdateTime',
            'traceAlarmNumber' => 'setTraceAlarmNumber',
            'runtimeAlarmNumber' => 'setRuntimeAlarmNumber',
            'policyGroupType' => 'setPolicyGroupType',
            'policyInfoList' => 'setPolicyInfoList',
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
            'containerId' => 'setContainerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentName  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * runtimeName  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    * runtimeId  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    * sdkStatus  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    * source  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw - OpenClaw
    * agentType  **参数解释**： 智能体类型 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。
    * sessionNumber  **参数解释**： 会话数量 **取值范围**： 0~2147483647
    * projectId  **参数解释**： 项目ID **取值范围**： 字符长度为1-128位
    * enterpriseProjectId  **参数解释**： 企业项目ID **取值范围**： 字符长度为1-128位
    * imageUrl  **参数解释**： 镜像url **取值范围**： 字符长度为1-512位
    * instanceCreateTime  **参数解释**： 智能体实例的创建时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * instanceUpdateTime  **参数解释**： 智能体实例的更新时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    * traceAlarmNumber  **参数解释**： 行为轨迹告警数量 **取值范围**： 0~2147483647
    * runtimeAlarmNumber  **参数解释**： 运行时告警数量 **取值范围**： 0~2147483647
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyInfoList  **参数解释**: AI策略组列表 **取值范围**: 不涉及
    * agentRuntimeEnv  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE - Others - AgentArts - OfficeClaw
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
    * containerId  **参数解释** 容器实例id **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'agentName' => 'getAgentName',
            'agentId' => 'getAgentId',
            'runtimeName' => 'getRuntimeName',
            'runtimeId' => 'getRuntimeId',
            'sdkStatus' => 'getSdkStatus',
            'source' => 'getSource',
            'agentType' => 'getAgentType',
            'sessionNumber' => 'getSessionNumber',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageUrl' => 'getImageUrl',
            'instanceCreateTime' => 'getInstanceCreateTime',
            'instanceUpdateTime' => 'getInstanceUpdateTime',
            'traceAlarmNumber' => 'getTraceAlarmNumber',
            'runtimeAlarmNumber' => 'getRuntimeAlarmNumber',
            'policyGroupType' => 'getPolicyGroupType',
            'policyInfoList' => 'getPolicyInfoList',
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
        $this->container['agentName'] = isset($data['agentName']) ? $data['agentName'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['runtimeName'] = isset($data['runtimeName']) ? $data['runtimeName'] : null;
        $this->container['runtimeId'] = isset($data['runtimeId']) ? $data['runtimeId'] : null;
        $this->container['sdkStatus'] = isset($data['sdkStatus']) ? $data['sdkStatus'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['agentType'] = isset($data['agentType']) ? $data['agentType'] : null;
        $this->container['sessionNumber'] = isset($data['sessionNumber']) ? $data['sessionNumber'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['instanceCreateTime'] = isset($data['instanceCreateTime']) ? $data['instanceCreateTime'] : null;
        $this->container['instanceUpdateTime'] = isset($data['instanceUpdateTime']) ? $data['instanceUpdateTime'] : null;
        $this->container['traceAlarmNumber'] = isset($data['traceAlarmNumber']) ? $data['traceAlarmNumber'] : null;
        $this->container['runtimeAlarmNumber'] = isset($data['runtimeAlarmNumber']) ? $data['runtimeAlarmNumber'] : null;
        $this->container['policyGroupType'] = isset($data['policyGroupType']) ? $data['policyGroupType'] : null;
        $this->container['policyInfoList'] = isset($data['policyInfoList']) ? $data['policyInfoList'] : null;
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
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentName']) && (mb_strlen($this->container['agentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['runtimeName']) && (mb_strlen($this->container['runtimeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeName']) && (mb_strlen($this->container['runtimeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'runtimeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['runtimeId']) && (mb_strlen($this->container['runtimeId']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeId']) && (mb_strlen($this->container['runtimeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'runtimeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sdkStatus']) && !preg_match("/^(open|close)$/", $this->container['sdkStatus'])) {
                $invalidProperties[] = "invalid value for 'sdkStatus', must be conform to the pattern /^(open|close)$/.";
            }
            if (!is_null($this->container['source']) && !preg_match("/^(AgentArts|OfficeClaw|OpenClaw)$/", $this->container['source'])) {
                $invalidProperties[] = "invalid value for 'source', must be conform to the pattern /^(AgentArts|OfficeClaw|OpenClaw)$/.";
            }
            if (!is_null($this->container['agentType']) && (mb_strlen($this->container['agentType']) > 20)) {
                $invalidProperties[] = "invalid value for 'agentType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['agentType']) && (mb_strlen($this->container['agentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentType']) && !preg_match("/^(agent|chat|controller|teamAgent)$/", $this->container['agentType'])) {
                $invalidProperties[] = "invalid value for 'agentType', must be conform to the pattern /^(agent|chat|controller|teamAgent)$/.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['imageUrl']) && (mb_strlen($this->container['imageUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'imageUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['imageUrl']) && (mb_strlen($this->container['imageUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageUrl', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 0.";
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
    * Gets agentName
    *  **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getAgentName()
    {
        return $this->container['agentName'];
    }

    /**
    * Sets agentName
    *
    * @param string|null $agentName **参数解释**： 智能体名字 **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setAgentName($agentName)
    {
        $this->container['agentName'] = $agentName;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
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
    * @param string|null $agentId **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets runtimeName
    *  **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getRuntimeName()
    {
        return $this->container['runtimeName'];
    }

    /**
    * Sets runtimeName
    *
    * @param string|null $runtimeName **参数解释**： 智能体运行时名字 **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setRuntimeName($runtimeName)
    {
        $this->container['runtimeName'] = $runtimeName;
        return $this;
    }

    /**
    * Gets runtimeId
    *  **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getRuntimeId()
    {
        return $this->container['runtimeId'];
    }

    /**
    * Sets runtimeId
    *
    * @param string|null $runtimeId **参数解释**： 智能体运行时ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setRuntimeId($runtimeId)
    {
        $this->container['runtimeId'] = $runtimeId;
        return $this;
    }

    /**
    * Gets sdkStatus
    *  **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    *
    * @return string|null
    */
    public function getSdkStatus()
    {
        return $this->container['sdkStatus'];
    }

    /**
    * Sets sdkStatus
    *
    * @param string|null $sdkStatus **参数解释**： SDK检测状态 **取值范围**： - open：开启 - close：关闭
    *
    * @return $this
    */
    public function setSdkStatus($sdkStatus)
    {
        $this->container['sdkStatus'] = $sdkStatus;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw - OpenClaw
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释**： 智能体的来源 **取值范围**： - AgentArts - OfficeClaw - OpenClaw
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets agentType
    *  **参数解释**： 智能体类型 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。
    *
    * @return string|null
    */
    public function getAgentType()
    {
        return $this->container['agentType'];
    }

    /**
    * Sets agentType
    *
    * @param string|null $agentType **参数解释**： 智能体类型 **取值范围**： - agent：单智能体。 - chat：工作流。 - controller：多智能体。 - teamAgent：团队智能体。
    *
    * @return $this
    */
    public function setAgentType($agentType)
    {
        $this->container['agentType'] = $agentType;
        return $this;
    }

    /**
    * Gets sessionNumber
    *  **参数解释**： 会话数量 **取值范围**： 0~2147483647
    *
    * @return int|null
    */
    public function getSessionNumber()
    {
        return $this->container['sessionNumber'];
    }

    /**
    * Sets sessionNumber
    *
    * @param int|null $sessionNumber **参数解释**： 会话数量 **取值范围**： 0~2147483647
    *
    * @return $this
    */
    public function setSessionNumber($sessionNumber)
    {
        $this->container['sessionNumber'] = $sessionNumber;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID **取值范围**： 字符长度为1-128位
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
    * @param string|null $projectId **参数解释**： 项目ID **取值范围**： 字符长度为1-128位
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
    *  **参数解释**： 企业项目ID **取值范围**： 字符长度为1-128位
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageUrl
    *  **参数解释**： 镜像url **取值范围**： 字符长度为1-512位
    *
    * @return string|null
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string|null $imageUrl **参数解释**： 镜像url **取值范围**： 字符长度为1-512位
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets instanceCreateTime
    *  **参数解释**： 智能体实例的创建时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    *
    * @return int|null
    */
    public function getInstanceCreateTime()
    {
        return $this->container['instanceCreateTime'];
    }

    /**
    * Sets instanceCreateTime
    *
    * @param int|null $instanceCreateTime **参数解释**： 智能体实例的创建时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    *
    * @return $this
    */
    public function setInstanceCreateTime($instanceCreateTime)
    {
        $this->container['instanceCreateTime'] = $instanceCreateTime;
        return $this;
    }

    /**
    * Gets instanceUpdateTime
    *  **参数解释**： 智能体实例的更新时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    *
    * @return int|null
    */
    public function getInstanceUpdateTime()
    {
        return $this->container['instanceUpdateTime'];
    }

    /**
    * Sets instanceUpdateTime
    *
    * @param int|null $instanceUpdateTime **参数解释**： 智能体实例的更新时间，毫秒时间戳 **取值范围**： 0~9223372036854775807
    *
    * @return $this
    */
    public function setInstanceUpdateTime($instanceUpdateTime)
    {
        $this->container['instanceUpdateTime'] = $instanceUpdateTime;
        return $this;
    }

    /**
    * Gets traceAlarmNumber
    *  **参数解释**： 行为轨迹告警数量 **取值范围**： 0~2147483647
    *
    * @return int|null
    */
    public function getTraceAlarmNumber()
    {
        return $this->container['traceAlarmNumber'];
    }

    /**
    * Sets traceAlarmNumber
    *
    * @param int|null $traceAlarmNumber **参数解释**： 行为轨迹告警数量 **取值范围**： 0~2147483647
    *
    * @return $this
    */
    public function setTraceAlarmNumber($traceAlarmNumber)
    {
        $this->container['traceAlarmNumber'] = $traceAlarmNumber;
        return $this;
    }

    /**
    * Gets runtimeAlarmNumber
    *  **参数解释**： 运行时告警数量 **取值范围**： 0~2147483647
    *
    * @return int|null
    */
    public function getRuntimeAlarmNumber()
    {
        return $this->container['runtimeAlarmNumber'];
    }

    /**
    * Sets runtimeAlarmNumber
    *
    * @param int|null $runtimeAlarmNumber **参数解释**： 运行时告警数量 **取值范围**： 0~2147483647
    *
    * @return $this
    */
    public function setRuntimeAlarmNumber($runtimeAlarmNumber)
    {
        $this->container['runtimeAlarmNumber'] = $runtimeAlarmNumber;
        return $this;
    }

    /**
    * Gets policyGroupType
    *  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    *
    * @return int|null
    */
    public function getPolicyGroupType()
    {
        return $this->container['policyGroupType'];
    }

    /**
    * Sets policyGroupType
    *
    * @param int|null $policyGroupType **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    *
    * @return $this
    */
    public function setPolicyGroupType($policyGroupType)
    {
        $this->container['policyGroupType'] = $policyGroupType;
        return $this;
    }

    /**
    * Gets policyInfoList
    *  **参数解释**: AI策略组列表 **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AiAgentPolicy[]|null
    */
    public function getPolicyInfoList()
    {
        return $this->container['policyInfoList'];
    }

    /**
    * Sets policyInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AiAgentPolicy[]|null $policyInfoList **参数解释**: AI策略组列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setPolicyInfoList($policyInfoList)
    {
        $this->container['policyInfoList'] = $policyInfoList;
        return $this;
    }

    /**
    * Gets agentRuntimeEnv
    *  **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE - Others - AgentArts - OfficeClaw
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
    * @param string|null $agentRuntimeEnv **参数解释**： 智能体运行环境 **取值范围**： - ECS - CCE - Others - AgentArts - OfficeClaw
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
    * Gets containerId
    *  **参数解释** 容器实例id **取值范围**: 字符长度0-128位
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
    * @param string|null $containerId **参数解释** 容器实例id **取值范围**: 字符长度0-128位
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

