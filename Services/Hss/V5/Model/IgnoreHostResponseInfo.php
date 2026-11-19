<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IgnoreHostResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IgnoreHostResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度1-32位
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符范围1-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围1-128位
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释** 企业项目ID **取值范围** 字符长度0-64位
    * enterpriseProjectName  **参数解释** 企业项目名称 **取值范围** 字符长度0-256位
    * osBit  **参数解释** 操作系统位数 **取值范围** 字符长度0-64位
    * osVersion  **参数解释** 操作系统版本 **取值范围** 字符长度0-64位
    * protectStatus  **参数解释** 防护状态 **取值范围** - closed：关闭 - opened：开启 - protection_exception：防护异常
    * detectResult  **参数解释** 检测结果 **取值范围** - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中
    * chargingMode  **参数解释** 计费模式 **取值范围** 字符长度0-32位
    * resourceId  **参数解释** 主机资源ID **取值范围** 字符长度0-128位
    * policyGroupId  **参数解释** 策略组ID **取值范围** 字符长度0-128位
    * policyGroupName  **参数解释** 策略组名称 **取值范围** 字符长度0-256位
    * expireTime  **参数解释** 主机防护版本到期时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * openTime  **参数解释** 开通防护时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentCreateTime  **参数解释** Agent安装时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentUpdateTime  **参数解释** Agent更新时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * upgradable  **参数解释** Agent是否可升级 **取值范围** true或者false
    * outsideHost  **参数解释** 是否非本账号主机 **取值范围** true或者false
    * containerType  **参数解释** 容器类型 **取值范围** 字符长度0-32位
    * wtpProtectStatus  **参数解释** 网页防篡改防护状态 **取值范围** - closed：关闭 - opened：开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'hostId' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'osName' => 'string',
            'osType' => 'string',
            'hostStatus' => 'string',
            'agentStatus' => 'string',
            'agentVersion' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'assetValue' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'osBit' => 'string',
            'osVersion' => 'string',
            'protectStatus' => 'string',
            'detectResult' => 'string',
            'chargingMode' => 'string',
            'resourceId' => 'string',
            'policyGroupId' => 'string',
            'policyGroupName' => 'string',
            'expireTime' => 'int',
            'openTime' => 'int',
            'agentCreateTime' => 'int',
            'agentUpdateTime' => 'int',
            'upgradable' => 'bool',
            'outsideHost' => 'bool',
            'containerType' => 'string',
            'wtpProtectStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度1-32位
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符范围1-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围1-128位
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释** 企业项目ID **取值范围** 字符长度0-64位
    * enterpriseProjectName  **参数解释** 企业项目名称 **取值范围** 字符长度0-256位
    * osBit  **参数解释** 操作系统位数 **取值范围** 字符长度0-64位
    * osVersion  **参数解释** 操作系统版本 **取值范围** 字符长度0-64位
    * protectStatus  **参数解释** 防护状态 **取值范围** - closed：关闭 - opened：开启 - protection_exception：防护异常
    * detectResult  **参数解释** 检测结果 **取值范围** - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中
    * chargingMode  **参数解释** 计费模式 **取值范围** 字符长度0-32位
    * resourceId  **参数解释** 主机资源ID **取值范围** 字符长度0-128位
    * policyGroupId  **参数解释** 策略组ID **取值范围** 字符长度0-128位
    * policyGroupName  **参数解释** 策略组名称 **取值范围** 字符长度0-256位
    * expireTime  **参数解释** 主机防护版本到期时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * openTime  **参数解释** 开通防护时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentCreateTime  **参数解释** Agent安装时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentUpdateTime  **参数解释** Agent更新时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * upgradable  **参数解释** Agent是否可升级 **取值范围** true或者false
    * outsideHost  **参数解释** 是否非本账号主机 **取值范围** true或者false
    * containerType  **参数解释** 容器类型 **取值范围** 字符长度0-32位
    * wtpProtectStatus  **参数解释** 网页防篡改防护状态 **取值范围** - closed：关闭 - opened：开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'hostId' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'osName' => null,
        'osType' => null,
        'hostStatus' => null,
        'agentStatus' => null,
        'agentVersion' => null,
        'groupId' => null,
        'groupName' => null,
        'assetValue' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'osBit' => null,
        'osVersion' => null,
        'protectStatus' => null,
        'detectResult' => null,
        'chargingMode' => null,
        'resourceId' => null,
        'policyGroupId' => null,
        'policyGroupName' => null,
        'expireTime' => 'int64',
        'openTime' => 'int64',
        'agentCreateTime' => 'int64',
        'agentUpdateTime' => 'int64',
        'upgradable' => null,
        'outsideHost' => null,
        'containerType' => null,
        'wtpProtectStatus' => null
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
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度1-32位
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符范围1-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围1-128位
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释** 企业项目ID **取值范围** 字符长度0-64位
    * enterpriseProjectName  **参数解释** 企业项目名称 **取值范围** 字符长度0-256位
    * osBit  **参数解释** 操作系统位数 **取值范围** 字符长度0-64位
    * osVersion  **参数解释** 操作系统版本 **取值范围** 字符长度0-64位
    * protectStatus  **参数解释** 防护状态 **取值范围** - closed：关闭 - opened：开启 - protection_exception：防护异常
    * detectResult  **参数解释** 检测结果 **取值范围** - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中
    * chargingMode  **参数解释** 计费模式 **取值范围** 字符长度0-32位
    * resourceId  **参数解释** 主机资源ID **取值范围** 字符长度0-128位
    * policyGroupId  **参数解释** 策略组ID **取值范围** 字符长度0-128位
    * policyGroupName  **参数解释** 策略组名称 **取值范围** 字符长度0-256位
    * expireTime  **参数解释** 主机防护版本到期时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * openTime  **参数解释** 开通防护时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentCreateTime  **参数解释** Agent安装时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentUpdateTime  **参数解释** Agent更新时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * upgradable  **参数解释** Agent是否可升级 **取值范围** true或者false
    * outsideHost  **参数解释** 是否非本账号主机 **取值范围** true或者false
    * containerType  **参数解释** 容器类型 **取值范围** 字符长度0-32位
    * wtpProtectStatus  **参数解释** 网页防篡改防护状态 **取值范围** - closed：关闭 - opened：开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'osName' => 'os_name',
            'osType' => 'os_type',
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'agentVersion' => 'agent_version',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'assetValue' => 'asset_value',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'osBit' => 'os_bit',
            'osVersion' => 'os_version',
            'protectStatus' => 'protect_status',
            'detectResult' => 'detect_result',
            'chargingMode' => 'charging_mode',
            'resourceId' => 'resource_id',
            'policyGroupId' => 'policy_group_id',
            'policyGroupName' => 'policy_group_name',
            'expireTime' => 'expire_time',
            'openTime' => 'open_time',
            'agentCreateTime' => 'agent_create_time',
            'agentUpdateTime' => 'agent_update_time',
            'upgradable' => 'upgradable',
            'outsideHost' => 'outside_host',
            'containerType' => 'container_type',
            'wtpProtectStatus' => 'wtp_protect_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度1-32位
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符范围1-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围1-128位
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释** 企业项目ID **取值范围** 字符长度0-64位
    * enterpriseProjectName  **参数解释** 企业项目名称 **取值范围** 字符长度0-256位
    * osBit  **参数解释** 操作系统位数 **取值范围** 字符长度0-64位
    * osVersion  **参数解释** 操作系统版本 **取值范围** 字符长度0-64位
    * protectStatus  **参数解释** 防护状态 **取值范围** - closed：关闭 - opened：开启 - protection_exception：防护异常
    * detectResult  **参数解释** 检测结果 **取值范围** - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中
    * chargingMode  **参数解释** 计费模式 **取值范围** 字符长度0-32位
    * resourceId  **参数解释** 主机资源ID **取值范围** 字符长度0-128位
    * policyGroupId  **参数解释** 策略组ID **取值范围** 字符长度0-128位
    * policyGroupName  **参数解释** 策略组名称 **取值范围** 字符长度0-256位
    * expireTime  **参数解释** 主机防护版本到期时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * openTime  **参数解释** 开通防护时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentCreateTime  **参数解释** Agent安装时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentUpdateTime  **参数解释** Agent更新时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * upgradable  **参数解释** Agent是否可升级 **取值范围** true或者false
    * outsideHost  **参数解释** 是否非本账号主机 **取值范围** true或者false
    * containerType  **参数解释** 容器类型 **取值范围** 字符长度0-32位
    * wtpProtectStatus  **参数解释** 网页防篡改防护状态 **取值范围** - closed：关闭 - opened：开启
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'osName' => 'setOsName',
            'osType' => 'setOsType',
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'agentVersion' => 'setAgentVersion',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'assetValue' => 'setAssetValue',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'osBit' => 'setOsBit',
            'osVersion' => 'setOsVersion',
            'protectStatus' => 'setProtectStatus',
            'detectResult' => 'setDetectResult',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId',
            'policyGroupId' => 'setPolicyGroupId',
            'policyGroupName' => 'setPolicyGroupName',
            'expireTime' => 'setExpireTime',
            'openTime' => 'setOpenTime',
            'agentCreateTime' => 'setAgentCreateTime',
            'agentUpdateTime' => 'setAgentUpdateTime',
            'upgradable' => 'setUpgradable',
            'outsideHost' => 'setOutsideHost',
            'containerType' => 'setContainerType',
            'wtpProtectStatus' => 'setWtpProtectStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
    * hostId  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * privateIp  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-64位
    * osType  **参数解释**： 操作系统类型 **取值范围**： - Linux：Linux - Windows：Windows
    * hostStatus  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
    * agentStatus  **参数解释**： Agent状态 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度1-32位
    * groupId  **参数解释**: 服务器组ID **取值范围**: 字符范围1-64位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围1-128位
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释** 企业项目ID **取值范围** 字符长度0-64位
    * enterpriseProjectName  **参数解释** 企业项目名称 **取值范围** 字符长度0-256位
    * osBit  **参数解释** 操作系统位数 **取值范围** 字符长度0-64位
    * osVersion  **参数解释** 操作系统版本 **取值范围** 字符长度0-64位
    * protectStatus  **参数解释** 防护状态 **取值范围** - closed：关闭 - opened：开启 - protection_exception：防护异常
    * detectResult  **参数解释** 检测结果 **取值范围** - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中
    * chargingMode  **参数解释** 计费模式 **取值范围** 字符长度0-32位
    * resourceId  **参数解释** 主机资源ID **取值范围** 字符长度0-128位
    * policyGroupId  **参数解释** 策略组ID **取值范围** 字符长度0-128位
    * policyGroupName  **参数解释** 策略组名称 **取值范围** 字符长度0-256位
    * expireTime  **参数解释** 主机防护版本到期时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * openTime  **参数解释** 开通防护时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentCreateTime  **参数解释** Agent安装时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * agentUpdateTime  **参数解释** Agent更新时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    * upgradable  **参数解释** Agent是否可升级 **取值范围** true或者false
    * outsideHost  **参数解释** 是否非本账号主机 **取值范围** true或者false
    * containerType  **参数解释** 容器类型 **取值范围** 字符长度0-32位
    * wtpProtectStatus  **参数解释** 网页防篡改防护状态 **取值范围** - closed：关闭 - opened：开启
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'osName' => 'getOsName',
            'osType' => 'getOsType',
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'agentVersion' => 'getAgentVersion',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'assetValue' => 'getAssetValue',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'osBit' => 'getOsBit',
            'osVersion' => 'getOsVersion',
            'protectStatus' => 'getProtectStatus',
            'detectResult' => 'getDetectResult',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId',
            'policyGroupId' => 'getPolicyGroupId',
            'policyGroupName' => 'getPolicyGroupName',
            'expireTime' => 'getExpireTime',
            'openTime' => 'getOpenTime',
            'agentCreateTime' => 'getAgentCreateTime',
            'agentUpdateTime' => 'getAgentUpdateTime',
            'upgradable' => 'getUpgradable',
            'outsideHost' => 'getOutsideHost',
            'containerType' => 'getContainerType',
            'wtpProtectStatus' => 'getWtpProtectStatus'
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
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['policyGroupName'] = isset($data['policyGroupName']) ? $data['policyGroupName'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['openTime'] = isset($data['openTime']) ? $data['openTime'] : null;
        $this->container['agentCreateTime'] = isset($data['agentCreateTime']) ? $data['agentCreateTime'] : null;
        $this->container['agentUpdateTime'] = isset($data['agentUpdateTime']) ? $data['agentUpdateTime'] : null;
        $this->container['upgradable'] = isset($data['upgradable']) ? $data['upgradable'] : null;
        $this->container['outsideHost'] = isset($data['outsideHost']) ? $data['outsideHost'] : null;
        $this->container['containerType'] = isset($data['containerType']) ? $data['containerType'] : null;
        $this->container['wtpProtectStatus'] = isset($data['wtpProtectStatus']) ? $data['wtpProtectStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 64)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 1)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 10)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) > 64)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) < 0)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) < 0)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['containerType']) && (mb_strlen($this->container['containerType']) > 32)) {
                $invalidProperties[] = "invalid value for 'containerType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['containerType']) && (mb_strlen($this->container['containerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['wtpProtectStatus']) && (mb_strlen($this->container['wtpProtectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'wtpProtectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['wtpProtectStatus']) && (mb_strlen($this->container['wtpProtectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'wtpProtectStatus', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
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
    * @param string|null $agentId **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **取值范围**: 字符长度1-64位
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
    *  **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
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
    * @param string|null $hostId **参数解释**: 服务器的唯一标识ID **取值范围**: 字符长度1-64位
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
    * Gets privateIp
    *  **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
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
    * @param string|null $privateIp **参数解释**: 服务器私有IP **取值范围**: 字符长度1-128位
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
    *  **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
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
    * @param string|null $publicIp **参数解释**: 服务器弹性IP地址 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位）
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets osName
    *  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-64位
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
    * @param string|null $osName **参数解释**: 操作系统名称 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
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
    * Gets hostStatus
    *  **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
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
    * @param string|null $hostStatus **参数解释**： 服务器状态 **取值范围**： - ACTIVE：运行中 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障
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
    *  **参数解释**： Agent状态 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
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
    * @param string|null $agentStatus **参数解释**： Agent状态 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets agentVersion
    *  **参数解释**： agent版本 **取值范围**： 字符长度1-32位
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
    * @param string|null $agentVersion **参数解释**： agent版本 **取值范围**： 字符长度1-32位
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 服务器组ID **取值范围**: 字符范围1-64位
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**: 服务器组ID **取值范围**: 字符范围1-64位
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 服务器组名称 **取值范围**: 字符范围1-128位
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
    * @param string|null $groupName **参数解释**: 服务器组名称 **取值范围**: 字符范围1-128位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
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
    * @param string|null $assetValue **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 企业项目ID **取值范围** 字符长度0-64位
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
    * @param string|null $enterpriseProjectId **参数解释** 企业项目ID **取值范围** 字符长度0-64位
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  **参数解释** 企业项目名称 **取值范围** 字符长度0-256位
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
    * @param string|null $enterpriseProjectName **参数解释** 企业项目名称 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets osBit
    *  **参数解释** 操作系统位数 **取值范围** 字符长度0-64位
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
    * @param string|null $osBit **参数解释** 操作系统位数 **取值范围** 字符长度0-64位
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
        return $this;
    }

    /**
    * Gets osVersion
    *  **参数解释** 操作系统版本 **取值范围** 字符长度0-64位
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
    * @param string|null $osVersion **参数解释** 操作系统版本 **取值范围** 字符长度0-64位
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释** 防护状态 **取值范围** - closed：关闭 - opened：开启 - protection_exception：防护异常
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
    * @param string|null $protectStatus **参数解释** 防护状态 **取值范围** - closed：关闭 - opened：开启 - protection_exception：防护异常
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets detectResult
    *  **参数解释** 检测结果 **取值范围** - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中
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
    * @param string|null $detectResult **参数解释** 检测结果 **取值范围** - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中
    *
    * @return $this
    */
    public function setDetectResult($detectResult)
    {
        $this->container['detectResult'] = $detectResult;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释** 计费模式 **取值范围** 字符长度0-32位
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释** 计费模式 **取值范围** 字符长度0-32位
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  **参数解释** 主机资源ID **取值范围** 字符长度0-128位
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
    * @param string|null $resourceId **参数解释** 主机资源ID **取值范围** 字符长度0-128位
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释** 策略组ID **取值范围** 字符长度0-128位
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
    * @param string|null $policyGroupId **参数解释** 策略组ID **取值范围** 字符长度0-128位
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
    *  **参数解释** 策略组名称 **取值范围** 字符长度0-256位
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
    * @param string|null $policyGroupName **参数解释** 策略组名称 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setPolicyGroupName($policyGroupName)
    {
        $this->container['policyGroupName'] = $policyGroupName;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释** 主机防护版本到期时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime **参数解释** 主机防护版本到期时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets openTime
    *  **参数解释** 开通防护时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    *
    * @return int|null
    */
    public function getOpenTime()
    {
        return $this->container['openTime'];
    }

    /**
    * Sets openTime
    *
    * @param int|null $openTime **参数解释** 开通防护时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    *
    * @return $this
    */
    public function setOpenTime($openTime)
    {
        $this->container['openTime'] = $openTime;
        return $this;
    }

    /**
    * Gets agentCreateTime
    *  **参数解释** Agent安装时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    *
    * @return int|null
    */
    public function getAgentCreateTime()
    {
        return $this->container['agentCreateTime'];
    }

    /**
    * Sets agentCreateTime
    *
    * @param int|null $agentCreateTime **参数解释** Agent安装时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    *
    * @return $this
    */
    public function setAgentCreateTime($agentCreateTime)
    {
        $this->container['agentCreateTime'] = $agentCreateTime;
        return $this;
    }

    /**
    * Gets agentUpdateTime
    *  **参数解释** Agent更新时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    *
    * @return int|null
    */
    public function getAgentUpdateTime()
    {
        return $this->container['agentUpdateTime'];
    }

    /**
    * Sets agentUpdateTime
    *
    * @param int|null $agentUpdateTime **参数解释** Agent更新时间，毫秒级时间戳 **取值范围** 0-9223372036854775807
    *
    * @return $this
    */
    public function setAgentUpdateTime($agentUpdateTime)
    {
        $this->container['agentUpdateTime'] = $agentUpdateTime;
        return $this;
    }

    /**
    * Gets upgradable
    *  **参数解释** Agent是否可升级 **取值范围** true或者false
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
    * @param bool|null $upgradable **参数解释** Agent是否可升级 **取值范围** true或者false
    *
    * @return $this
    */
    public function setUpgradable($upgradable)
    {
        $this->container['upgradable'] = $upgradable;
        return $this;
    }

    /**
    * Gets outsideHost
    *  **参数解释** 是否非本账号主机 **取值范围** true或者false
    *
    * @return bool|null
    */
    public function getOutsideHost()
    {
        return $this->container['outsideHost'];
    }

    /**
    * Sets outsideHost
    *
    * @param bool|null $outsideHost **参数解释** 是否非本账号主机 **取值范围** true或者false
    *
    * @return $this
    */
    public function setOutsideHost($outsideHost)
    {
        $this->container['outsideHost'] = $outsideHost;
        return $this;
    }

    /**
    * Gets containerType
    *  **参数解释** 容器类型 **取值范围** 字符长度0-32位
    *
    * @return string|null
    */
    public function getContainerType()
    {
        return $this->container['containerType'];
    }

    /**
    * Sets containerType
    *
    * @param string|null $containerType **参数解释** 容器类型 **取值范围** 字符长度0-32位
    *
    * @return $this
    */
    public function setContainerType($containerType)
    {
        $this->container['containerType'] = $containerType;
        return $this;
    }

    /**
    * Gets wtpProtectStatus
    *  **参数解释** 网页防篡改防护状态 **取值范围** - closed：关闭 - opened：开启
    *
    * @return string|null
    */
    public function getWtpProtectStatus()
    {
        return $this->container['wtpProtectStatus'];
    }

    /**
    * Sets wtpProtectStatus
    *
    * @param string|null $wtpProtectStatus **参数解释** 网页防篡改防护状态 **取值范围** - closed：关闭 - opened：开启
    *
    * @return $this
    */
    public function setWtpProtectStatus($wtpProtectStatus)
    {
        $this->container['wtpProtectStatus'] = $wtpProtectStatus;
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

