<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Host implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Host';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度1-128位
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-256位
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**: 系统版本 **取值范围**: 字符长度0-256位
    * kernelVersion  **参数解释**: 内核版本 **取值范围**: 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下4种。 - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。
    * installResultCode  **参数解释**: 安装结果 **取值范围**: 包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  **参数解释**： 主机开通的版本 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * protectStatus  **参数解释**： 防护状态 **取值范围**： 包含如下3种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * osImage  **参数解释**： 系统镜像 **取值范围**： 字符长度0-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： 包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度0-128位
    * detectResult  **参数解释**： 云主机安全检测结果 **取值范围**： 包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * expireTime  **参数解释**： 试用版到期时间 **取值范围**： -1到4824695185000（-1表示非试用版配额，当值不为-1时为试用版本过期时间）
    * chargingMode  **参数解释**： 收费模式 **取值范围**： 包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  **参数解释**： 主机安全配额ID（UUID） **取值范围**： 字符长度0-128位
    * outsideHost  **参数解释**： 是否非华为云机器 **取值范围**： true或者false
    * groupId  **参数解释**： 服务器组ID **取值范围**： 字符长度0-128位
    * groupName  **参数解释**： 服务器组名称 **取值范围**： 字符长度0-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度0-128位
    * policyGroupName  **参数解释**： 策略组名称 **取值范围**： 字符长度0-128位
    * asset  **参数解释**： 资产风险 **取值范围**： 0-2097152
    * vulnerability  **参数解释**： 漏洞风险总数，包含Linux软件漏洞、Windows系统漏洞、Web-CMS漏洞、应用漏洞 **取值范围**： 0-2097152
    * baseline  **参数解释**： 基线风险总数，包含配置风险、弱口令 **取值范围**： 0-2097152
    * intrusion  **参数解释**： 入侵风险总数 **取值范围**： 0-2097152
    * assetValue  **参数解释**： 资产重要性 **取值范围**： 包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  **参数解释**： 标签列表 **取值范围**： 不涉及
    * agentCreateTime  **参数解释**： agent安装时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentUpdateTime  **参数解释**： agent状态修改时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * upgradeStatus  **参数解释**： 升级状态 **取值范围**： 包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  **参数解释**： 升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示 **取值范围**： 包含如下6种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  **参数解释**： 该服务器agent是否可升级 **取值范围**： true或者false
    * openTime  **参数解释**： 开启防护时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * protectInterrupt  **参数解释**： 防护是否中断 **取值范围**： true或者false
    * protectDegradation  **参数解释**： 防护是否降级 **取值范围**： true或者false
    * hostSources  **参数解释**： 服务器来源 **取值范围**： 包含如下3种。   - ecs ：华为云ecs。   - outside ：非华为云机器。   - workspace ：华为云workspace。
    * interruptReason  **参数解释**： 防护中断原因 **取值范围**： 字符长度1-32位
    * degradationReason  **参数解释**： 防护降级原因 **取值范围**： 字符长度1-32位
    * keyName  **参数解释**： 使用的密钥对名称 **取值范围**： 字符长度1-32位
    * autoOpenVersion  **参数解释**： cce购买主机 **取值范围**： 字符长度1-32位
    * installProgress  **参数解释**： 安装进度 **取值范围**： 0-100
    * vpcId  **参数解释**： vpc id **取值范围**： 字符长度0-128位
    * commonLoginAreaCodes  **参数解释**： 后台识别服务器常用登录地编号 **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-128位
    * clusterId  **参数解释**： 集群id **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'hostId' => 'string',
            'agentId' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'osName' => 'string',
            'osVersion' => 'string',
            'kernelVersion' => 'string',
            'hostStatus' => 'string',
            'agentStatus' => 'string',
            'installResultCode' => 'string',
            'version' => 'string',
            'protectStatus' => 'string',
            'osImage' => 'string',
            'osType' => 'string',
            'osBit' => 'string',
            'detectResult' => 'string',
            'expireTime' => 'int',
            'chargingMode' => 'string',
            'resourceId' => 'string',
            'outsideHost' => 'bool',
            'groupId' => 'string',
            'groupName' => 'string',
            'policyGroupId' => 'string',
            'policyGroupName' => 'string',
            'asset' => 'int',
            'vulnerability' => 'int',
            'baseline' => 'int',
            'intrusion' => 'int',
            'assetValue' => 'string',
            'labels' => 'string[]',
            'agentCreateTime' => 'int',
            'agentUpdateTime' => 'int',
            'agentVersion' => 'string',
            'upgradeStatus' => 'string',
            'upgradeResultCode' => 'string',
            'upgradable' => 'bool',
            'openTime' => 'int',
            'protectInterrupt' => 'bool',
            'protectDegradation' => 'bool',
            'hostSources' => 'string',
            'interruptReason' => 'string',
            'degradationReason' => 'string',
            'keyName' => 'string',
            'autoOpenVersion' => 'string',
            'installProgress' => 'int',
            'vpcId' => 'string',
            'commonLoginAreaCodes' => 'int[]',
            'clusterName' => 'string',
            'clusterId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度1-128位
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-256位
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**: 系统版本 **取值范围**: 字符长度0-256位
    * kernelVersion  **参数解释**: 内核版本 **取值范围**: 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下4种。 - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。
    * installResultCode  **参数解释**: 安装结果 **取值范围**: 包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  **参数解释**： 主机开通的版本 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * protectStatus  **参数解释**： 防护状态 **取值范围**： 包含如下3种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * osImage  **参数解释**： 系统镜像 **取值范围**： 字符长度0-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： 包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度0-128位
    * detectResult  **参数解释**： 云主机安全检测结果 **取值范围**： 包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * expireTime  **参数解释**： 试用版到期时间 **取值范围**： -1到4824695185000（-1表示非试用版配额，当值不为-1时为试用版本过期时间）
    * chargingMode  **参数解释**： 收费模式 **取值范围**： 包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  **参数解释**： 主机安全配额ID（UUID） **取值范围**： 字符长度0-128位
    * outsideHost  **参数解释**： 是否非华为云机器 **取值范围**： true或者false
    * groupId  **参数解释**： 服务器组ID **取值范围**： 字符长度0-128位
    * groupName  **参数解释**： 服务器组名称 **取值范围**： 字符长度0-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度0-128位
    * policyGroupName  **参数解释**： 策略组名称 **取值范围**： 字符长度0-128位
    * asset  **参数解释**： 资产风险 **取值范围**： 0-2097152
    * vulnerability  **参数解释**： 漏洞风险总数，包含Linux软件漏洞、Windows系统漏洞、Web-CMS漏洞、应用漏洞 **取值范围**： 0-2097152
    * baseline  **参数解释**： 基线风险总数，包含配置风险、弱口令 **取值范围**： 0-2097152
    * intrusion  **参数解释**： 入侵风险总数 **取值范围**： 0-2097152
    * assetValue  **参数解释**： 资产重要性 **取值范围**： 包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  **参数解释**： 标签列表 **取值范围**： 不涉及
    * agentCreateTime  **参数解释**： agent安装时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentUpdateTime  **参数解释**： agent状态修改时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * upgradeStatus  **参数解释**： 升级状态 **取值范围**： 包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  **参数解释**： 升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示 **取值范围**： 包含如下6种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  **参数解释**： 该服务器agent是否可升级 **取值范围**： true或者false
    * openTime  **参数解释**： 开启防护时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * protectInterrupt  **参数解释**： 防护是否中断 **取值范围**： true或者false
    * protectDegradation  **参数解释**： 防护是否降级 **取值范围**： true或者false
    * hostSources  **参数解释**： 服务器来源 **取值范围**： 包含如下3种。   - ecs ：华为云ecs。   - outside ：非华为云机器。   - workspace ：华为云workspace。
    * interruptReason  **参数解释**： 防护中断原因 **取值范围**： 字符长度1-32位
    * degradationReason  **参数解释**： 防护降级原因 **取值范围**： 字符长度1-32位
    * keyName  **参数解释**： 使用的密钥对名称 **取值范围**： 字符长度1-32位
    * autoOpenVersion  **参数解释**： cce购买主机 **取值范围**： 字符长度1-32位
    * installProgress  **参数解释**： 安装进度 **取值范围**： 0-100
    * vpcId  **参数解释**： vpc id **取值范围**： 字符长度0-128位
    * commonLoginAreaCodes  **参数解释**： 后台识别服务器常用登录地编号 **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-128位
    * clusterId  **参数解释**： 集群id **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'hostId' => null,
        'agentId' => null,
        'privateIp' => null,
        'publicIp' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'osName' => null,
        'osVersion' => null,
        'kernelVersion' => null,
        'hostStatus' => null,
        'agentStatus' => null,
        'installResultCode' => null,
        'version' => null,
        'protectStatus' => null,
        'osImage' => null,
        'osType' => null,
        'osBit' => null,
        'detectResult' => null,
        'expireTime' => 'int64',
        'chargingMode' => null,
        'resourceId' => null,
        'outsideHost' => null,
        'groupId' => null,
        'groupName' => null,
        'policyGroupId' => null,
        'policyGroupName' => null,
        'asset' => 'int32',
        'vulnerability' => 'int32',
        'baseline' => 'int32',
        'intrusion' => 'int32',
        'assetValue' => null,
        'labels' => null,
        'agentCreateTime' => 'int64',
        'agentUpdateTime' => 'int64',
        'agentVersion' => null,
        'upgradeStatus' => null,
        'upgradeResultCode' => null,
        'upgradable' => null,
        'openTime' => 'int64',
        'protectInterrupt' => null,
        'protectDegradation' => null,
        'hostSources' => null,
        'interruptReason' => null,
        'degradationReason' => null,
        'keyName' => null,
        'autoOpenVersion' => null,
        'installProgress' => 'int32',
        'vpcId' => null,
        'commonLoginAreaCodes' => 'int32',
        'clusterName' => null,
        'clusterId' => null
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
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度1-128位
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-256位
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**: 系统版本 **取值范围**: 字符长度0-256位
    * kernelVersion  **参数解释**: 内核版本 **取值范围**: 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下4种。 - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。
    * installResultCode  **参数解释**: 安装结果 **取值范围**: 包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  **参数解释**： 主机开通的版本 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * protectStatus  **参数解释**： 防护状态 **取值范围**： 包含如下3种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * osImage  **参数解释**： 系统镜像 **取值范围**： 字符长度0-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： 包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度0-128位
    * detectResult  **参数解释**： 云主机安全检测结果 **取值范围**： 包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * expireTime  **参数解释**： 试用版到期时间 **取值范围**： -1到4824695185000（-1表示非试用版配额，当值不为-1时为试用版本过期时间）
    * chargingMode  **参数解释**： 收费模式 **取值范围**： 包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  **参数解释**： 主机安全配额ID（UUID） **取值范围**： 字符长度0-128位
    * outsideHost  **参数解释**： 是否非华为云机器 **取值范围**： true或者false
    * groupId  **参数解释**： 服务器组ID **取值范围**： 字符长度0-128位
    * groupName  **参数解释**： 服务器组名称 **取值范围**： 字符长度0-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度0-128位
    * policyGroupName  **参数解释**： 策略组名称 **取值范围**： 字符长度0-128位
    * asset  **参数解释**： 资产风险 **取值范围**： 0-2097152
    * vulnerability  **参数解释**： 漏洞风险总数，包含Linux软件漏洞、Windows系统漏洞、Web-CMS漏洞、应用漏洞 **取值范围**： 0-2097152
    * baseline  **参数解释**： 基线风险总数，包含配置风险、弱口令 **取值范围**： 0-2097152
    * intrusion  **参数解释**： 入侵风险总数 **取值范围**： 0-2097152
    * assetValue  **参数解释**： 资产重要性 **取值范围**： 包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  **参数解释**： 标签列表 **取值范围**： 不涉及
    * agentCreateTime  **参数解释**： agent安装时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentUpdateTime  **参数解释**： agent状态修改时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * upgradeStatus  **参数解释**： 升级状态 **取值范围**： 包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  **参数解释**： 升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示 **取值范围**： 包含如下6种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  **参数解释**： 该服务器agent是否可升级 **取值范围**： true或者false
    * openTime  **参数解释**： 开启防护时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * protectInterrupt  **参数解释**： 防护是否中断 **取值范围**： true或者false
    * protectDegradation  **参数解释**： 防护是否降级 **取值范围**： true或者false
    * hostSources  **参数解释**： 服务器来源 **取值范围**： 包含如下3种。   - ecs ：华为云ecs。   - outside ：非华为云机器。   - workspace ：华为云workspace。
    * interruptReason  **参数解释**： 防护中断原因 **取值范围**： 字符长度1-32位
    * degradationReason  **参数解释**： 防护降级原因 **取值范围**： 字符长度1-32位
    * keyName  **参数解释**： 使用的密钥对名称 **取值范围**： 字符长度1-32位
    * autoOpenVersion  **参数解释**： cce购买主机 **取值范围**： 字符长度1-32位
    * installProgress  **参数解释**： 安装进度 **取值范围**： 0-100
    * vpcId  **参数解释**： vpc id **取值范围**： 字符长度0-128位
    * commonLoginAreaCodes  **参数解释**： 后台识别服务器常用登录地编号 **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-128位
    * clusterId  **参数解释**： 集群id **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'agentId' => 'agent_id',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'osName' => 'os_name',
            'osVersion' => 'os_version',
            'kernelVersion' => 'kernel_version',
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'installResultCode' => 'install_result_code',
            'version' => 'version',
            'protectStatus' => 'protect_status',
            'osImage' => 'os_image',
            'osType' => 'os_type',
            'osBit' => 'os_bit',
            'detectResult' => 'detect_result',
            'expireTime' => 'expire_time',
            'chargingMode' => 'charging_mode',
            'resourceId' => 'resource_id',
            'outsideHost' => 'outside_host',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'policyGroupId' => 'policy_group_id',
            'policyGroupName' => 'policy_group_name',
            'asset' => 'asset',
            'vulnerability' => 'vulnerability',
            'baseline' => 'baseline',
            'intrusion' => 'intrusion',
            'assetValue' => 'asset_value',
            'labels' => 'labels',
            'agentCreateTime' => 'agent_create_time',
            'agentUpdateTime' => 'agent_update_time',
            'agentVersion' => 'agent_version',
            'upgradeStatus' => 'upgrade_status',
            'upgradeResultCode' => 'upgrade_result_code',
            'upgradable' => 'upgradable',
            'openTime' => 'open_time',
            'protectInterrupt' => 'protect_interrupt',
            'protectDegradation' => 'protect_degradation',
            'hostSources' => 'host_sources',
            'interruptReason' => 'interrupt_reason',
            'degradationReason' => 'degradation_reason',
            'keyName' => 'key_name',
            'autoOpenVersion' => 'auto_open_version',
            'installProgress' => 'install_progress',
            'vpcId' => 'vpc_id',
            'commonLoginAreaCodes' => 'common_login_area_codes',
            'clusterName' => 'cluster_name',
            'clusterId' => 'cluster_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度1-128位
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-256位
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**: 系统版本 **取值范围**: 字符长度0-256位
    * kernelVersion  **参数解释**: 内核版本 **取值范围**: 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下4种。 - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。
    * installResultCode  **参数解释**: 安装结果 **取值范围**: 包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  **参数解释**： 主机开通的版本 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * protectStatus  **参数解释**： 防护状态 **取值范围**： 包含如下3种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * osImage  **参数解释**： 系统镜像 **取值范围**： 字符长度0-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： 包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度0-128位
    * detectResult  **参数解释**： 云主机安全检测结果 **取值范围**： 包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * expireTime  **参数解释**： 试用版到期时间 **取值范围**： -1到4824695185000（-1表示非试用版配额，当值不为-1时为试用版本过期时间）
    * chargingMode  **参数解释**： 收费模式 **取值范围**： 包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  **参数解释**： 主机安全配额ID（UUID） **取值范围**： 字符长度0-128位
    * outsideHost  **参数解释**： 是否非华为云机器 **取值范围**： true或者false
    * groupId  **参数解释**： 服务器组ID **取值范围**： 字符长度0-128位
    * groupName  **参数解释**： 服务器组名称 **取值范围**： 字符长度0-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度0-128位
    * policyGroupName  **参数解释**： 策略组名称 **取值范围**： 字符长度0-128位
    * asset  **参数解释**： 资产风险 **取值范围**： 0-2097152
    * vulnerability  **参数解释**： 漏洞风险总数，包含Linux软件漏洞、Windows系统漏洞、Web-CMS漏洞、应用漏洞 **取值范围**： 0-2097152
    * baseline  **参数解释**： 基线风险总数，包含配置风险、弱口令 **取值范围**： 0-2097152
    * intrusion  **参数解释**： 入侵风险总数 **取值范围**： 0-2097152
    * assetValue  **参数解释**： 资产重要性 **取值范围**： 包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  **参数解释**： 标签列表 **取值范围**： 不涉及
    * agentCreateTime  **参数解释**： agent安装时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentUpdateTime  **参数解释**： agent状态修改时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * upgradeStatus  **参数解释**： 升级状态 **取值范围**： 包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  **参数解释**： 升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示 **取值范围**： 包含如下6种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  **参数解释**： 该服务器agent是否可升级 **取值范围**： true或者false
    * openTime  **参数解释**： 开启防护时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * protectInterrupt  **参数解释**： 防护是否中断 **取值范围**： true或者false
    * protectDegradation  **参数解释**： 防护是否降级 **取值范围**： true或者false
    * hostSources  **参数解释**： 服务器来源 **取值范围**： 包含如下3种。   - ecs ：华为云ecs。   - outside ：非华为云机器。   - workspace ：华为云workspace。
    * interruptReason  **参数解释**： 防护中断原因 **取值范围**： 字符长度1-32位
    * degradationReason  **参数解释**： 防护降级原因 **取值范围**： 字符长度1-32位
    * keyName  **参数解释**： 使用的密钥对名称 **取值范围**： 字符长度1-32位
    * autoOpenVersion  **参数解释**： cce购买主机 **取值范围**： 字符长度1-32位
    * installProgress  **参数解释**： 安装进度 **取值范围**： 0-100
    * vpcId  **参数解释**： vpc id **取值范围**： 字符长度0-128位
    * commonLoginAreaCodes  **参数解释**： 后台识别服务器常用登录地编号 **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-128位
    * clusterId  **参数解释**： 集群id **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'agentId' => 'setAgentId',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'osName' => 'setOsName',
            'osVersion' => 'setOsVersion',
            'kernelVersion' => 'setKernelVersion',
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'installResultCode' => 'setInstallResultCode',
            'version' => 'setVersion',
            'protectStatus' => 'setProtectStatus',
            'osImage' => 'setOsImage',
            'osType' => 'setOsType',
            'osBit' => 'setOsBit',
            'detectResult' => 'setDetectResult',
            'expireTime' => 'setExpireTime',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId',
            'outsideHost' => 'setOutsideHost',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'policyGroupId' => 'setPolicyGroupId',
            'policyGroupName' => 'setPolicyGroupName',
            'asset' => 'setAsset',
            'vulnerability' => 'setVulnerability',
            'baseline' => 'setBaseline',
            'intrusion' => 'setIntrusion',
            'assetValue' => 'setAssetValue',
            'labels' => 'setLabels',
            'agentCreateTime' => 'setAgentCreateTime',
            'agentUpdateTime' => 'setAgentUpdateTime',
            'agentVersion' => 'setAgentVersion',
            'upgradeStatus' => 'setUpgradeStatus',
            'upgradeResultCode' => 'setUpgradeResultCode',
            'upgradable' => 'setUpgradable',
            'openTime' => 'setOpenTime',
            'protectInterrupt' => 'setProtectInterrupt',
            'protectDegradation' => 'setProtectDegradation',
            'hostSources' => 'setHostSources',
            'interruptReason' => 'setInterruptReason',
            'degradationReason' => 'setDegradationReason',
            'keyName' => 'setKeyName',
            'autoOpenVersion' => 'setAutoOpenVersion',
            'installProgress' => 'setInstallProgress',
            'vpcId' => 'setVpcId',
            'commonLoginAreaCodes' => 'setCommonLoginAreaCodes',
            'clusterName' => 'setClusterName',
            'clusterId' => 'setClusterId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
    * hostId  **参数解释**: 服务器ID **取值范围**: 字符长度1-128位
    * agentId  **参数解释**: Agent ID **取值范围**: 字符长度1-128位
    * privateIp  **参数解释**: 私有IP地址 **取值范围**: 字符长度1-128位
    * publicIp  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度1-128位
    * enterpriseProjectId  **参数解释**: 企业项目ID **取值范围**: 字符长度0-256位
    * enterpriseProjectName  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-256位
    * osName  **参数解释**: 系统名称 **取值范围**: 字符长度0-128位
    * osVersion  **参数解释**: 系统版本 **取值范围**: 字符长度0-256位
    * kernelVersion  **参数解释**: 内核版本 **取值范围**: 字符长度0-256位
    * hostStatus  **参数解释**: 服务器状态 **取值范围**: 包含如下4种。 - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
    * agentStatus  **参数解释**: Agent状态 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。
    * installResultCode  **参数解释**: 安装结果 **取值范围**: 包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  **参数解释**： 主机开通的版本 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    * protectStatus  **参数解释**： 防护状态 **取值范围**： 包含如下3种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    * osImage  **参数解释**： 系统镜像 **取值范围**： 字符长度0-128位
    * osType  **参数解释**： 操作系统类型 **取值范围**： 包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  **参数解释**： 操作系统位数 **取值范围**： 字符长度0-128位
    * detectResult  **参数解释**： 云主机安全检测结果 **取值范围**： 包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * expireTime  **参数解释**： 试用版到期时间 **取值范围**： -1到4824695185000（-1表示非试用版配额，当值不为-1时为试用版本过期时间）
    * chargingMode  **参数解释**： 收费模式 **取值范围**： 包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  **参数解释**： 主机安全配额ID（UUID） **取值范围**： 字符长度0-128位
    * outsideHost  **参数解释**： 是否非华为云机器 **取值范围**： true或者false
    * groupId  **参数解释**： 服务器组ID **取值范围**： 字符长度0-128位
    * groupName  **参数解释**： 服务器组名称 **取值范围**： 字符长度0-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度0-128位
    * policyGroupName  **参数解释**： 策略组名称 **取值范围**： 字符长度0-128位
    * asset  **参数解释**： 资产风险 **取值范围**： 0-2097152
    * vulnerability  **参数解释**： 漏洞风险总数，包含Linux软件漏洞、Windows系统漏洞、Web-CMS漏洞、应用漏洞 **取值范围**： 0-2097152
    * baseline  **参数解释**： 基线风险总数，包含配置风险、弱口令 **取值范围**： 0-2097152
    * intrusion  **参数解释**： 入侵风险总数 **取值范围**： 0-2097152
    * assetValue  **参数解释**： 资产重要性 **取值范围**： 包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  **参数解释**： 标签列表 **取值范围**： 不涉及
    * agentCreateTime  **参数解释**： agent安装时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentUpdateTime  **参数解释**： agent状态修改时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * agentVersion  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    * upgradeStatus  **参数解释**： 升级状态 **取值范围**： 包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  **参数解释**： 升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示 **取值范围**： 包含如下6种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  **参数解释**： 该服务器agent是否可升级 **取值范围**： true或者false
    * openTime  **参数解释**： 开启防护时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    * protectInterrupt  **参数解释**： 防护是否中断 **取值范围**： true或者false
    * protectDegradation  **参数解释**： 防护是否降级 **取值范围**： true或者false
    * hostSources  **参数解释**： 服务器来源 **取值范围**： 包含如下3种。   - ecs ：华为云ecs。   - outside ：非华为云机器。   - workspace ：华为云workspace。
    * interruptReason  **参数解释**： 防护中断原因 **取值范围**： 字符长度1-32位
    * degradationReason  **参数解释**： 防护降级原因 **取值范围**： 字符长度1-32位
    * keyName  **参数解释**： 使用的密钥对名称 **取值范围**： 字符长度1-32位
    * autoOpenVersion  **参数解释**： cce购买主机 **取值范围**： 字符长度1-32位
    * installProgress  **参数解释**： 安装进度 **取值范围**： 0-100
    * vpcId  **参数解释**： vpc id **取值范围**： 字符长度0-128位
    * commonLoginAreaCodes  **参数解释**： 后台识别服务器常用登录地编号 **取值范围**： 不涉及
    * clusterName  **参数解释**： 集群名称 **取值范围**： 字符长度1-128位
    * clusterId  **参数解释**： 集群id **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'agentId' => 'getAgentId',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'osName' => 'getOsName',
            'osVersion' => 'getOsVersion',
            'kernelVersion' => 'getKernelVersion',
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'installResultCode' => 'getInstallResultCode',
            'version' => 'getVersion',
            'protectStatus' => 'getProtectStatus',
            'osImage' => 'getOsImage',
            'osType' => 'getOsType',
            'osBit' => 'getOsBit',
            'detectResult' => 'getDetectResult',
            'expireTime' => 'getExpireTime',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId',
            'outsideHost' => 'getOutsideHost',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'policyGroupId' => 'getPolicyGroupId',
            'policyGroupName' => 'getPolicyGroupName',
            'asset' => 'getAsset',
            'vulnerability' => 'getVulnerability',
            'baseline' => 'getBaseline',
            'intrusion' => 'getIntrusion',
            'assetValue' => 'getAssetValue',
            'labels' => 'getLabels',
            'agentCreateTime' => 'getAgentCreateTime',
            'agentUpdateTime' => 'getAgentUpdateTime',
            'agentVersion' => 'getAgentVersion',
            'upgradeStatus' => 'getUpgradeStatus',
            'upgradeResultCode' => 'getUpgradeResultCode',
            'upgradable' => 'getUpgradable',
            'openTime' => 'getOpenTime',
            'protectInterrupt' => 'getProtectInterrupt',
            'protectDegradation' => 'getProtectDegradation',
            'hostSources' => 'getHostSources',
            'interruptReason' => 'getInterruptReason',
            'degradationReason' => 'getDegradationReason',
            'keyName' => 'getKeyName',
            'autoOpenVersion' => 'getAutoOpenVersion',
            'installProgress' => 'getInstallProgress',
            'vpcId' => 'getVpcId',
            'commonLoginAreaCodes' => 'getCommonLoginAreaCodes',
            'clusterName' => 'getClusterName',
            'clusterId' => 'getClusterId'
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
    const HOST_SOURCES_ECS = 'ecs';
    const HOST_SOURCES_OUTSIDE = 'outside';
    const HOST_SOURCES_WORKSPACE = 'workspace';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostSourcesAllowableValues()
    {
        return [
            self::HOST_SOURCES_ECS,
            self::HOST_SOURCES_OUTSIDE,
            self::HOST_SOURCES_WORKSPACE,
        ];
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['installResultCode'] = isset($data['installResultCode']) ? $data['installResultCode'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['osImage'] = isset($data['osImage']) ? $data['osImage'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['outsideHost'] = isset($data['outsideHost']) ? $data['outsideHost'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['policyGroupName'] = isset($data['policyGroupName']) ? $data['policyGroupName'] : null;
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['vulnerability'] = isset($data['vulnerability']) ? $data['vulnerability'] : null;
        $this->container['baseline'] = isset($data['baseline']) ? $data['baseline'] : null;
        $this->container['intrusion'] = isset($data['intrusion']) ? $data['intrusion'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['agentCreateTime'] = isset($data['agentCreateTime']) ? $data['agentCreateTime'] : null;
        $this->container['agentUpdateTime'] = isset($data['agentUpdateTime']) ? $data['agentUpdateTime'] : null;
        $this->container['agentVersion'] = isset($data['agentVersion']) ? $data['agentVersion'] : null;
        $this->container['upgradeStatus'] = isset($data['upgradeStatus']) ? $data['upgradeStatus'] : null;
        $this->container['upgradeResultCode'] = isset($data['upgradeResultCode']) ? $data['upgradeResultCode'] : null;
        $this->container['upgradable'] = isset($data['upgradable']) ? $data['upgradable'] : null;
        $this->container['openTime'] = isset($data['openTime']) ? $data['openTime'] : null;
        $this->container['protectInterrupt'] = isset($data['protectInterrupt']) ? $data['protectInterrupt'] : null;
        $this->container['protectDegradation'] = isset($data['protectDegradation']) ? $data['protectDegradation'] : null;
        $this->container['hostSources'] = isset($data['hostSources']) ? $data['hostSources'] : null;
        $this->container['interruptReason'] = isset($data['interruptReason']) ? $data['interruptReason'] : null;
        $this->container['degradationReason'] = isset($data['degradationReason']) ? $data['degradationReason'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['autoOpenVersion'] = isset($data['autoOpenVersion']) ? $data['autoOpenVersion'] : null;
        $this->container['installProgress'] = isset($data['installProgress']) ? $data['installProgress'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['commonLoginAreaCodes'] = isset($data['commonLoginAreaCodes']) ? $data['commonLoginAreaCodes'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
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
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 128)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 0)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['kernelVersion']) && (mb_strlen($this->container['kernelVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'kernelVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['kernelVersion']) && (mb_strlen($this->container['kernelVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'kernelVersion', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['installResultCode']) && (mb_strlen($this->container['installResultCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'installResultCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['installResultCode']) && (mb_strlen($this->container['installResultCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'installResultCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osImage']) && (mb_strlen($this->container['osImage']) > 128)) {
                $invalidProperties[] = "invalid value for 'osImage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osImage']) && (mb_strlen($this->container['osImage']) < 0)) {
                $invalidProperties[] = "invalid value for 'osImage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 128)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) > 128)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) < 0)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] > 4824695185000)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be smaller than or equal to 4824695185000.";
            }
            if (!is_null($this->container['expireTime']) && ($this->container['expireTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
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
            if (!is_null($this->container['asset']) && ($this->container['asset'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'asset', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['asset']) && ($this->container['asset'] < 0)) {
                $invalidProperties[] = "invalid value for 'asset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulnerability']) && ($this->container['vulnerability'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'vulnerability', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['vulnerability']) && ($this->container['vulnerability'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulnerability', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baseline']) && ($this->container['baseline'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'baseline', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['baseline']) && ($this->container['baseline'] < 0)) {
                $invalidProperties[] = "invalid value for 'baseline', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['intrusion']) && ($this->container['intrusion'] > 2097152)) {
                $invalidProperties[] = "invalid value for 'intrusion', must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['intrusion']) && ($this->container['intrusion'] < 0)) {
                $invalidProperties[] = "invalid value for 'intrusion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentCreateTime']) && ($this->container['agentCreateTime'] > 4824695185000)) {
                $invalidProperties[] = "invalid value for 'agentCreateTime', must be smaller than or equal to 4824695185000.";
            }
            if (!is_null($this->container['agentCreateTime']) && ($this->container['agentCreateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentCreateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentUpdateTime']) && ($this->container['agentUpdateTime'] > 4824695185000)) {
                $invalidProperties[] = "invalid value for 'agentUpdateTime', must be smaller than or equal to 4824695185000.";
            }
            if (!is_null($this->container['agentUpdateTime']) && ($this->container['agentUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'agentUpdateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['upgradeStatus']) && (mb_strlen($this->container['upgradeStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'upgradeStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['upgradeStatus']) && (mb_strlen($this->container['upgradeStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'upgradeStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['upgradeResultCode']) && (mb_strlen($this->container['upgradeResultCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'upgradeResultCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['upgradeResultCode']) && (mb_strlen($this->container['upgradeResultCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'upgradeResultCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['openTime']) && ($this->container['openTime'] > 4824695185000)) {
                $invalidProperties[] = "invalid value for 'openTime', must be smaller than or equal to 4824695185000.";
            }
            if (!is_null($this->container['openTime']) && ($this->container['openTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'openTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getHostSourcesAllowableValues();
                if (!is_null($this->container['hostSources']) && !in_array($this->container['hostSources'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostSources', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['interruptReason']) && (mb_strlen($this->container['interruptReason']) > 32)) {
                $invalidProperties[] = "invalid value for 'interruptReason', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['interruptReason']) && (mb_strlen($this->container['interruptReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'interruptReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['degradationReason']) && (mb_strlen($this->container['degradationReason']) > 32)) {
                $invalidProperties[] = "invalid value for 'degradationReason', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['degradationReason']) && (mb_strlen($this->container['degradationReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'degradationReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) > 32)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['autoOpenVersion']) && (mb_strlen($this->container['autoOpenVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'autoOpenVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['autoOpenVersion']) && (mb_strlen($this->container['autoOpenVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'autoOpenVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['installProgress']) && ($this->container['installProgress'] > 100)) {
                $invalidProperties[] = "invalid value for 'installProgress', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['installProgress']) && ($this->container['installProgress'] < 0)) {
                $invalidProperties[] = "invalid value for 'installProgress', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
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
    * Gets hostName
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-128位
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
    *  **参数解释**: 服务器ID **取值范围**: 字符长度1-128位
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
    * @param string|null $hostId **参数解释**: 服务器ID **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets agentId
    *  **参数解释**: Agent ID **取值范围**: 字符长度1-128位
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
    * @param string|null $agentId **参数解释**: Agent ID **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 私有IP地址 **取值范围**: 字符长度1-128位
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
    * @param string|null $privateIp **参数解释**: 私有IP地址 **取值范围**: 字符长度1-128位
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
    *  **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度1-128位
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
    * @param string|null $publicIp **参数解释**: 弹性公网IP地址 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID **取值范围**: 字符长度0-256位
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID **取值范围**: 字符长度0-256位
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
    *  **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-256位
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
    * @param string|null $enterpriseProjectName **参数解释**: 所属企业项目名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets osName
    *  **参数解释**: 系统名称 **取值范围**: 字符长度0-128位
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
    * @param string|null $osName **参数解释**: 系统名称 **取值范围**: 字符长度0-128位
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
    *  **参数解释**: 系统版本 **取值范围**: 字符长度0-256位
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
    * @param string|null $osVersion **参数解释**: 系统版本 **取值范围**: 字符长度0-256位
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
    *  **参数解释**: 内核版本 **取值范围**: 字符长度0-256位
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
    * @param string|null $kernelVersion **参数解释**: 内核版本 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**: 服务器状态 **取值范围**: 包含如下4种。 - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
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
    * @param string|null $hostStatus **参数解释**: 服务器状态 **取值范围**: 包含如下4种。 - ACTIVE ：运行中。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。
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
    *  **参数解释**: Agent状态 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。
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
    * @param string|null $agentStatus **参数解释**: Agent状态 **取值范围**: 包含如下6种。 - installed ：已安装。 - not_installed ：未安装。 - online ：在线。 - offline ：离线。 - install_failed ：安装失败。 - installing ：安装中。
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets installResultCode
    *  **参数解释**: 安装结果 **取值范围**: 包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    *
    * @return string|null
    */
    public function getInstallResultCode()
    {
        return $this->container['installResultCode'];
    }

    /**
    * Sets installResultCode
    *
    * @param string|null $installResultCode **参数解释**: 安装结果 **取值范围**: 包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    *
    * @return $this
    */
    public function setInstallResultCode($installResultCode)
    {
        $this->container['installResultCode'] = $installResultCode;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 主机开通的版本 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
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
    * @param string|null $version **参数解释**： 主机开通的版本 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets protectStatus
    *  **参数解释**： 防护状态 **取值范围**： 包含如下3种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
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
    * @param string|null $protectStatus **参数解释**： 防护状态 **取值范围**： 包含如下3种。 - closed ：未防护。 - opened ：防护中。 - protection_exception ：防护异常。
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets osImage
    *  **参数解释**： 系统镜像 **取值范围**： 字符长度0-128位
    *
    * @return string|null
    */
    public function getOsImage()
    {
        return $this->container['osImage'];
    }

    /**
    * Sets osImage
    *
    * @param string|null $osImage **参数解释**： 系统镜像 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setOsImage($osImage)
    {
        $this->container['osImage'] = $osImage;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **取值范围**： 包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
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
    * @param string|null $osType **参数解释**： 操作系统类型 **取值范围**： 包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osBit
    *  **参数解释**： 操作系统位数 **取值范围**： 字符长度0-128位
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
    * @param string|null $osBit **参数解释**： 操作系统位数 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
        return $this;
    }

    /**
    * Gets detectResult
    *  **参数解释**： 云主机安全检测结果 **取值范围**： 包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
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
    * @param string|null $detectResult **参数解释**： 云主机安全检测结果 **取值范围**： 包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    *
    * @return $this
    */
    public function setDetectResult($detectResult)
    {
        $this->container['detectResult'] = $detectResult;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释**： 试用版到期时间 **取值范围**： -1到4824695185000（-1表示非试用版配额，当值不为-1时为试用版本过期时间）
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
    * @param int|null $expireTime **参数解释**： 试用版到期时间 **取值范围**： -1到4824695185000（-1表示非试用版配额，当值不为-1时为试用版本过期时间）
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**： 收费模式 **取值范围**： 包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
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
    * @param string|null $chargingMode **参数解释**： 收费模式 **取值范围**： 包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
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
    *  **参数解释**： 主机安全配额ID（UUID） **取值范围**： 字符长度0-128位
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
    * @param string|null $resourceId **参数解释**： 主机安全配额ID（UUID） **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets outsideHost
    *  **参数解释**： 是否非华为云机器 **取值范围**： true或者false
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
    * @param bool|null $outsideHost **参数解释**： 是否非华为云机器 **取值范围**： true或者false
    *
    * @return $this
    */
    public function setOutsideHost($outsideHost)
    {
        $this->container['outsideHost'] = $outsideHost;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 服务器组ID **取值范围**： 字符长度0-128位
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
    * @param string|null $groupId **参数解释**： 服务器组ID **取值范围**： 字符长度0-128位
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
    *  **参数解释**： 服务器组名称 **取值范围**： 字符长度0-128位
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
    * @param string|null $groupName **参数解释**： 服务器组名称 **取值范围**： 字符长度0-128位
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
    *  **参数解释**： 策略组ID **取值范围**： 字符长度0-128位
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
    * @param string|null $policyGroupId **参数解释**： 策略组ID **取值范围**： 字符长度0-128位
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
    *  **参数解释**： 策略组名称 **取值范围**： 字符长度0-128位
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
    * @param string|null $policyGroupName **参数解释**： 策略组名称 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setPolicyGroupName($policyGroupName)
    {
        $this->container['policyGroupName'] = $policyGroupName;
        return $this;
    }

    /**
    * Gets asset
    *  **参数解释**： 资产风险 **取值范围**： 0-2097152
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
    * @param int|null $asset **参数解释**： 资产风险 **取值范围**： 0-2097152
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
    *  **参数解释**： 漏洞风险总数，包含Linux软件漏洞、Windows系统漏洞、Web-CMS漏洞、应用漏洞 **取值范围**： 0-2097152
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
    * @param int|null $vulnerability **参数解释**： 漏洞风险总数，包含Linux软件漏洞、Windows系统漏洞、Web-CMS漏洞、应用漏洞 **取值范围**： 0-2097152
    *
    * @return $this
    */
    public function setVulnerability($vulnerability)
    {
        $this->container['vulnerability'] = $vulnerability;
        return $this;
    }

    /**
    * Gets baseline
    *  **参数解释**： 基线风险总数，包含配置风险、弱口令 **取值范围**： 0-2097152
    *
    * @return int|null
    */
    public function getBaseline()
    {
        return $this->container['baseline'];
    }

    /**
    * Sets baseline
    *
    * @param int|null $baseline **参数解释**： 基线风险总数，包含配置风险、弱口令 **取值范围**： 0-2097152
    *
    * @return $this
    */
    public function setBaseline($baseline)
    {
        $this->container['baseline'] = $baseline;
        return $this;
    }

    /**
    * Gets intrusion
    *  **参数解释**： 入侵风险总数 **取值范围**： 0-2097152
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
    * @param int|null $intrusion **参数解释**： 入侵风险总数 **取值范围**： 0-2097152
    *
    * @return $this
    */
    public function setIntrusion($intrusion)
    {
        $this->container['intrusion'] = $intrusion;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**： 资产重要性 **取值范围**： 包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
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
    * @param string|null $assetValue **参数解释**： 资产重要性 **取值范围**： 包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释**： 标签列表 **取值范围**： 不涉及
    *
    * @return string[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[]|null $labels **参数解释**： 标签列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets agentCreateTime
    *  **参数解释**： agent安装时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
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
    * @param int|null $agentCreateTime **参数解释**： agent安装时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
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
    *  **参数解释**： agent状态修改时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
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
    * @param int|null $agentUpdateTime **参数解释**： agent状态修改时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    *
    * @return $this
    */
    public function setAgentUpdateTime($agentUpdateTime)
    {
        $this->container['agentUpdateTime'] = $agentUpdateTime;
        return $this;
    }

    /**
    * Gets agentVersion
    *  **参数解释**： agent版本 **取值范围**： 字符长度0-32位
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
    * @param string|null $agentVersion **参数解释**： agent版本 **取值范围**： 字符长度0-32位
    *
    * @return $this
    */
    public function setAgentVersion($agentVersion)
    {
        $this->container['agentVersion'] = $agentVersion;
        return $this;
    }

    /**
    * Gets upgradeStatus
    *  **参数解释**： 升级状态 **取值范围**： 包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    *
    * @return string|null
    */
    public function getUpgradeStatus()
    {
        return $this->container['upgradeStatus'];
    }

    /**
    * Sets upgradeStatus
    *
    * @param string|null $upgradeStatus **参数解释**： 升级状态 **取值范围**： 包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    *
    * @return $this
    */
    public function setUpgradeStatus($upgradeStatus)
    {
        $this->container['upgradeStatus'] = $upgradeStatus;
        return $this;
    }

    /**
    * Gets upgradeResultCode
    *  **参数解释**： 升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示 **取值范围**： 包含如下6种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    *
    * @return string|null
    */
    public function getUpgradeResultCode()
    {
        return $this->container['upgradeResultCode'];
    }

    /**
    * Sets upgradeResultCode
    *
    * @param string|null $upgradeResultCode **参数解释**： 升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示 **取值范围**： 包含如下6种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    *
    * @return $this
    */
    public function setUpgradeResultCode($upgradeResultCode)
    {
        $this->container['upgradeResultCode'] = $upgradeResultCode;
        return $this;
    }

    /**
    * Gets upgradable
    *  **参数解释**： 该服务器agent是否可升级 **取值范围**： true或者false
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
    * @param bool|null $upgradable **参数解释**： 该服务器agent是否可升级 **取值范围**： true或者false
    *
    * @return $this
    */
    public function setUpgradable($upgradable)
    {
        $this->container['upgradable'] = $upgradable;
        return $this;
    }

    /**
    * Gets openTime
    *  **参数解释**： 开启防护时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
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
    * @param int|null $openTime **参数解释**： 开启防护时间，采用时间戳，默认毫秒 **取值范围**： 0-4824695185000
    *
    * @return $this
    */
    public function setOpenTime($openTime)
    {
        $this->container['openTime'] = $openTime;
        return $this;
    }

    /**
    * Gets protectInterrupt
    *  **参数解释**： 防护是否中断 **取值范围**： true或者false
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
    * @param bool|null $protectInterrupt **参数解释**： 防护是否中断 **取值范围**： true或者false
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
    *  **参数解释**： 防护是否降级 **取值范围**： true或者false
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
    * @param bool|null $protectDegradation **参数解释**： 防护是否降级 **取值范围**： true或者false
    *
    * @return $this
    */
    public function setProtectDegradation($protectDegradation)
    {
        $this->container['protectDegradation'] = $protectDegradation;
        return $this;
    }

    /**
    * Gets hostSources
    *  **参数解释**： 服务器来源 **取值范围**： 包含如下3种。   - ecs ：华为云ecs。   - outside ：非华为云机器。   - workspace ：华为云workspace。
    *
    * @return string|null
    */
    public function getHostSources()
    {
        return $this->container['hostSources'];
    }

    /**
    * Sets hostSources
    *
    * @param string|null $hostSources **参数解释**： 服务器来源 **取值范围**： 包含如下3种。   - ecs ：华为云ecs。   - outside ：非华为云机器。   - workspace ：华为云workspace。
    *
    * @return $this
    */
    public function setHostSources($hostSources)
    {
        $this->container['hostSources'] = $hostSources;
        return $this;
    }

    /**
    * Gets interruptReason
    *  **参数解释**： 防护中断原因 **取值范围**： 字符长度1-32位
    *
    * @return string|null
    */
    public function getInterruptReason()
    {
        return $this->container['interruptReason'];
    }

    /**
    * Sets interruptReason
    *
    * @param string|null $interruptReason **参数解释**： 防护中断原因 **取值范围**： 字符长度1-32位
    *
    * @return $this
    */
    public function setInterruptReason($interruptReason)
    {
        $this->container['interruptReason'] = $interruptReason;
        return $this;
    }

    /**
    * Gets degradationReason
    *  **参数解释**： 防护降级原因 **取值范围**： 字符长度1-32位
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
    * @param string|null $degradationReason **参数解释**： 防护降级原因 **取值范围**： 字符长度1-32位
    *
    * @return $this
    */
    public function setDegradationReason($degradationReason)
    {
        $this->container['degradationReason'] = $degradationReason;
        return $this;
    }

    /**
    * Gets keyName
    *  **参数解释**： 使用的密钥对名称 **取值范围**： 字符长度1-32位
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName **参数解释**： 使用的密钥对名称 **取值范围**： 字符长度1-32位
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets autoOpenVersion
    *  **参数解释**： cce购买主机 **取值范围**： 字符长度1-32位
    *
    * @return string|null
    */
    public function getAutoOpenVersion()
    {
        return $this->container['autoOpenVersion'];
    }

    /**
    * Sets autoOpenVersion
    *
    * @param string|null $autoOpenVersion **参数解释**： cce购买主机 **取值范围**： 字符长度1-32位
    *
    * @return $this
    */
    public function setAutoOpenVersion($autoOpenVersion)
    {
        $this->container['autoOpenVersion'] = $autoOpenVersion;
        return $this;
    }

    /**
    * Gets installProgress
    *  **参数解释**： 安装进度 **取值范围**： 0-100
    *
    * @return int|null
    */
    public function getInstallProgress()
    {
        return $this->container['installProgress'];
    }

    /**
    * Sets installProgress
    *
    * @param int|null $installProgress **参数解释**： 安装进度 **取值范围**： 0-100
    *
    * @return $this
    */
    public function setInstallProgress($installProgress)
    {
        $this->container['installProgress'] = $installProgress;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： vpc id **取值范围**： 字符长度0-128位
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
    * @param string|null $vpcId **参数解释**： vpc id **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets commonLoginAreaCodes
    *  **参数解释**： 后台识别服务器常用登录地编号 **取值范围**： 不涉及
    *
    * @return int[]|null
    */
    public function getCommonLoginAreaCodes()
    {
        return $this->container['commonLoginAreaCodes'];
    }

    /**
    * Sets commonLoginAreaCodes
    *
    * @param int[]|null $commonLoginAreaCodes **参数解释**： 后台识别服务器常用登录地编号 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCommonLoginAreaCodes($commonLoginAreaCodes)
    {
        $this->container['commonLoginAreaCodes'] = $commonLoginAreaCodes;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**： 集群名称 **取值范围**： 字符长度1-128位
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
    * @param string|null $clusterName **参数解释**： 集群名称 **取值范围**： 字符长度1-128位
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
    *  **参数解释**： 集群id **取值范围**： 字符长度1-128位
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
    * @param string|null $clusterId **参数解释**： 集群id **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
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

