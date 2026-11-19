<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIgnoreHostsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIgnoreHostsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 - hss.version.container.wtp：容器网页防篡改增值项。  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障  **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed：关闭 - opened：开启 - protection_exception：防护异常  **默认取值**: 不涉及
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * label  **参数解释**: 服务器标签，格式为\"key:value\" **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'version' => 'string',
            'agentStatus' => 'string',
            'detectResult' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'hostStatus' => 'string',
            'osType' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'ipAddr' => 'string',
            'protectStatus' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'policyGroupId' => 'string',
            'policyGroupName' => 'string',
            'chargingMode' => 'string',
            'assetValue' => 'string',
            'label' => 'string',
            'hasIntrusion' => 'bool',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 - hss.version.container.wtp：容器网页防篡改增值项。  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障  **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed：关闭 - opened：开启 - protection_exception：防护异常  **默认取值**: 不涉及
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * label  **参数解释**: 服务器标签，格式为\"key:value\" **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'version' => null,
        'agentStatus' => null,
        'detectResult' => null,
        'hostName' => null,
        'hostId' => null,
        'hostStatus' => null,
        'osType' => null,
        'privateIp' => null,
        'publicIp' => null,
        'ipAddr' => null,
        'protectStatus' => null,
        'groupId' => null,
        'groupName' => null,
        'policyGroupId' => null,
        'policyGroupName' => null,
        'chargingMode' => null,
        'assetValue' => null,
        'label' => null,
        'hasIntrusion' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 - hss.version.container.wtp：容器网页防篡改增值项。  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障  **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed：关闭 - opened：开启 - protection_exception：防护异常  **默认取值**: 不涉及
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * label  **参数解释**: 服务器标签，格式为\"key:value\" **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'version' => 'version',
            'agentStatus' => 'agent_status',
            'detectResult' => 'detect_result',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'hostStatus' => 'host_status',
            'osType' => 'os_type',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'ipAddr' => 'ip_addr',
            'protectStatus' => 'protect_status',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'policyGroupId' => 'policy_group_id',
            'policyGroupName' => 'policy_group_name',
            'chargingMode' => 'charging_mode',
            'assetValue' => 'asset_value',
            'label' => 'label',
            'hasIntrusion' => 'has_intrusion',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 - hss.version.container.wtp：容器网页防篡改增值项。  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障  **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed：关闭 - opened：开启 - protection_exception：防护异常  **默认取值**: 不涉及
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * label  **参数解释**: 服务器标签，格式为\"key:value\" **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'version' => 'setVersion',
            'agentStatus' => 'setAgentStatus',
            'detectResult' => 'setDetectResult',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'hostStatus' => 'setHostStatus',
            'osType' => 'setOsType',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'ipAddr' => 'setIpAddr',
            'protectStatus' => 'setProtectStatus',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'policyGroupId' => 'setPolicyGroupId',
            'policyGroupName' => 'setPolicyGroupName',
            'chargingMode' => 'setChargingMode',
            'assetValue' => 'setAssetValue',
            'label' => 'setLabel',
            'hasIntrusion' => 'setHasIntrusion',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 - hss.version.container.wtp：容器网页防篡改增值项。  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中  **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障  **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed：关闭 - opened：开启 - protection_exception：防护异常  **默认取值**: 不涉及
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * label  **参数解释**: 服务器标签，格式为\"key:value\" **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'version' => 'getVersion',
            'agentStatus' => 'getAgentStatus',
            'detectResult' => 'getDetectResult',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'hostStatus' => 'getHostStatus',
            'osType' => 'getOsType',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'ipAddr' => 'getIpAddr',
            'protectStatus' => 'getProtectStatus',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'policyGroupId' => 'getPolicyGroupId',
            'policyGroupName' => 'getPolicyGroupName',
            'chargingMode' => 'getChargingMode',
            'assetValue' => 'getAssetValue',
            'label' => 'getLabel',
            'hasIntrusion' => 'getHasIntrusion',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['ipAddr'] = isset($data['ipAddr']) ? $data['ipAddr'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['policyGroupName'] = isset($data['policyGroupName']) ? $data['policyGroupName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['hasIntrusion'] = isset($data['hasIntrusion']) ? $data['hasIntrusion'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostStatus']) && !preg_match("/^.*$/", $this->container['hostStatus'])) {
                $invalidProperties[] = "invalid value for 'hostStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 10)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['ipAddr']) && (mb_strlen($this->container['ipAddr']) > 128)) {
                $invalidProperties[] = "invalid value for 'ipAddr', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ipAddr']) && (mb_strlen($this->container['ipAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipAddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipAddr']) && !preg_match("/^.*$/", $this->container['ipAddr'])) {
                $invalidProperties[] = "invalid value for 'ipAddr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && !preg_match("/^.*$/", $this->container['protectStatus'])) {
                $invalidProperties[] = "invalid value for 'protectStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^.*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyGroupId']) && !preg_match("/^.*$/", $this->container['policyGroupId'])) {
                $invalidProperties[] = "invalid value for 'policyGroupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyGroupName']) && !preg_match("/^.*$/", $this->container['policyGroupName'])) {
                $invalidProperties[] = "invalid value for 'policyGroupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 10)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 256)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 1)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['label']) && !preg_match("/^.*$/", $this->container['label'])) {
                $invalidProperties[] = "invalid value for 'label', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 - hss.version.container.wtp：容器网页防篡改增值项。  **默认取值**: 不涉及
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
    * @param string|null $version **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 - hss.version.container.wtp：容器网页防篡改增值项。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
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
    * @param string|null $agentStatus **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets detectResult
    *  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中  **默认取值**: 不涉及
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
    * @param string|null $detectResult **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - undetected：未检测 - clean：无风险 - risk：有风险 - scanning：检测中  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDetectResult($detectResult)
    {
        $this->container['detectResult'] = $detectResult;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    * @param string|null $hostName **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障  **默认取值**: 不涉及
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
    * @param string|null $hostStatus **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种： - ACTIVE：正在运行 - SHUTOFF：关机 - BUILDING：创建中 - ERROR：故障  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
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
    * @param string|null $osType **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    * @param string|null $privateIp **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    *  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
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
    * @param string|null $publicIp **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets ipAddr
    *  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getIpAddr()
    {
        return $this->container['ipAddr'];
    }

    /**
    * Sets ipAddr
    *
    * @param string|null $ipAddr **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setIpAddr($ipAddr)
    {
        $this->container['ipAddr'] = $ipAddr;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed：关闭 - opened：开启 - protection_exception：防护异常  **默认取值**: 不涉及
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
    * @param string|null $protectStatus **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed：关闭 - opened：开启 - protection_exception：防护异常  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $groupId **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    *  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
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
    * @param string|null $groupName **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    * @param string|null $policyGroupId **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    *  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    * @param string|null $policyGroupName **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPolicyGroupName($policyGroupName)
    {
        $this->container['policyGroupName'] = $policyGroupName;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。  **默认取值**: 不涉及
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
    * @param string|null $chargingMode **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
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
    * Gets label
    *  **参数解释**: 服务器标签，格式为\"key:value\" **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label **参数解释**: 服务器标签，格式为\"key:value\" **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets hasIntrusion
    *  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getHasIntrusion()
    {
        return $this->container['hasIntrusion'];
    }

    /**
    * Sets hasIntrusion
    *
    * @param bool|null $hasIntrusion **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasIntrusion($hasIntrusion)
    {
        $this->container['hasIntrusion'] = $hasIntrusion;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

