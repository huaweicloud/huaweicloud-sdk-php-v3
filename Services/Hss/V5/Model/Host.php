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
    * hostName  服务器名称
    * hostId  服务器ID
    * agentId  Agent ID
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * enterpriseProjectId  企业项目ID
    * enterpriseProjectName  所属企业项目名称
    * hostStatus  服务器状态，包含如下4种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。   - BUILDING ：创建中。   - ERROR ：故障。
    * agentStatus  Agent状态，包含如下5种。   - installed ：已安装。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * osImage  系统镜像
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  操作系统位数
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  主机安全配额ID（UUID）
    * outsideHost  是否非华为云机器
    * groupId  服务器组ID
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    * assetValue  资产重要性，包含如下4种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  标签列表
    * agentCreateTime  agent安装时间，采用时间戳，默认毫秒，
    * agentUpdateTime  agent状态修改时间，采用时间戳，默认毫秒，
    * agentVersion  agent版本
    * upgradeStatus  升级状态，包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示，包含如下12种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  该服务器agent是否可升级
    * openTime  开启防护时间，采用时间戳，默认毫秒，
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
            'hostStatus' => 'string',
            'agentStatus' => 'string',
            'installResultCode' => 'string',
            'version' => 'string',
            'protectStatus' => 'string',
            'osImage' => 'string',
            'osType' => 'string',
            'osBit' => 'string',
            'detectResult' => 'string',
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
            'openTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  服务器名称
    * hostId  服务器ID
    * agentId  Agent ID
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * enterpriseProjectId  企业项目ID
    * enterpriseProjectName  所属企业项目名称
    * hostStatus  服务器状态，包含如下4种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。   - BUILDING ：创建中。   - ERROR ：故障。
    * agentStatus  Agent状态，包含如下5种。   - installed ：已安装。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * osImage  系统镜像
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  操作系统位数
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  主机安全配额ID（UUID）
    * outsideHost  是否非华为云机器
    * groupId  服务器组ID
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    * assetValue  资产重要性，包含如下4种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  标签列表
    * agentCreateTime  agent安装时间，采用时间戳，默认毫秒，
    * agentUpdateTime  agent状态修改时间，采用时间戳，默认毫秒，
    * agentVersion  agent版本
    * upgradeStatus  升级状态，包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示，包含如下12种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  该服务器agent是否可升级
    * openTime  开启防护时间，采用时间戳，默认毫秒，
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
        'hostStatus' => null,
        'agentStatus' => null,
        'installResultCode' => null,
        'version' => null,
        'protectStatus' => null,
        'osImage' => null,
        'osType' => null,
        'osBit' => null,
        'detectResult' => null,
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
        'openTime' => 'int64'
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
    * hostName  服务器名称
    * hostId  服务器ID
    * agentId  Agent ID
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * enterpriseProjectId  企业项目ID
    * enterpriseProjectName  所属企业项目名称
    * hostStatus  服务器状态，包含如下4种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。   - BUILDING ：创建中。   - ERROR ：故障。
    * agentStatus  Agent状态，包含如下5种。   - installed ：已安装。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * osImage  系统镜像
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  操作系统位数
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  主机安全配额ID（UUID）
    * outsideHost  是否非华为云机器
    * groupId  服务器组ID
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    * assetValue  资产重要性，包含如下4种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  标签列表
    * agentCreateTime  agent安装时间，采用时间戳，默认毫秒，
    * agentUpdateTime  agent状态修改时间，采用时间戳，默认毫秒，
    * agentVersion  agent版本
    * upgradeStatus  升级状态，包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示，包含如下12种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  该服务器agent是否可升级
    * openTime  开启防护时间，采用时间戳，默认毫秒，
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
            'hostStatus' => 'host_status',
            'agentStatus' => 'agent_status',
            'installResultCode' => 'install_result_code',
            'version' => 'version',
            'protectStatus' => 'protect_status',
            'osImage' => 'os_image',
            'osType' => 'os_type',
            'osBit' => 'os_bit',
            'detectResult' => 'detect_result',
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
            'openTime' => 'open_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  服务器名称
    * hostId  服务器ID
    * agentId  Agent ID
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * enterpriseProjectId  企业项目ID
    * enterpriseProjectName  所属企业项目名称
    * hostStatus  服务器状态，包含如下4种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。   - BUILDING ：创建中。   - ERROR ：故障。
    * agentStatus  Agent状态，包含如下5种。   - installed ：已安装。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * osImage  系统镜像
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  操作系统位数
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  主机安全配额ID（UUID）
    * outsideHost  是否非华为云机器
    * groupId  服务器组ID
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    * assetValue  资产重要性，包含如下4种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  标签列表
    * agentCreateTime  agent安装时间，采用时间戳，默认毫秒，
    * agentUpdateTime  agent状态修改时间，采用时间戳，默认毫秒，
    * agentVersion  agent版本
    * upgradeStatus  升级状态，包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示，包含如下12种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  该服务器agent是否可升级
    * openTime  开启防护时间，采用时间戳，默认毫秒，
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
            'hostStatus' => 'setHostStatus',
            'agentStatus' => 'setAgentStatus',
            'installResultCode' => 'setInstallResultCode',
            'version' => 'setVersion',
            'protectStatus' => 'setProtectStatus',
            'osImage' => 'setOsImage',
            'osType' => 'setOsType',
            'osBit' => 'setOsBit',
            'detectResult' => 'setDetectResult',
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
            'openTime' => 'setOpenTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  服务器名称
    * hostId  服务器ID
    * agentId  Agent ID
    * privateIp  私有IP地址
    * publicIp  弹性公网IP地址
    * enterpriseProjectId  企业项目ID
    * enterpriseProjectName  所属企业项目名称
    * hostStatus  服务器状态，包含如下4种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。   - BUILDING ：创建中。   - ERROR ：故障。
    * agentStatus  Agent状态，包含如下5种。   - installed ：已安装。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
    * installResultCode  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
    * version  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
    * protectStatus  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
    * osImage  系统镜像
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * osBit  操作系统位数
    * detectResult  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
    * chargingMode  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
    * resourceId  主机安全配额ID（UUID）
    * outsideHost  是否非华为云机器
    * groupId  服务器组ID
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * asset  资产风险
    * vulnerability  漏洞风险
    * baseline  基线风险
    * intrusion  入侵风险
    * assetValue  资产重要性，包含如下4种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * labels  标签列表
    * agentCreateTime  agent安装时间，采用时间戳，默认毫秒，
    * agentUpdateTime  agent状态修改时间，采用时间戳，默认毫秒，
    * agentVersion  agent版本
    * upgradeStatus  升级状态，包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
    * upgradeResultCode  升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示，包含如下12种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
    * upgradable  该服务器agent是否可升级
    * openTime  开启防护时间，采用时间戳，默认毫秒，
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
            'hostStatus' => 'getHostStatus',
            'agentStatus' => 'getAgentStatus',
            'installResultCode' => 'getInstallResultCode',
            'version' => 'getVersion',
            'protectStatus' => 'getProtectStatus',
            'osImage' => 'getOsImage',
            'osType' => 'getOsType',
            'osBit' => 'getOsBit',
            'detectResult' => 'getDetectResult',
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
            'openTime' => 'getOpenTime'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['installResultCode'] = isset($data['installResultCode']) ? $data['installResultCode'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['osImage'] = isset($data['osImage']) ? $data['osImage'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
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
    *  服务器名称
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
    * @param string|null $hostName 服务器名称
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
    *  服务器ID
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
    * @param string|null $hostId 服务器ID
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
    *  Agent ID
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
    * @param string|null $agentId Agent ID
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
    *  私有IP地址
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
    * @param string|null $privateIp 私有IP地址
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
    *  弹性公网IP地址
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
    * @param string|null $publicIp 弹性公网IP地址
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
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
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
    *  所属企业项目名称
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
    * @param string|null $enterpriseProjectName 所属企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets hostStatus
    *  服务器状态，包含如下4种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。   - BUILDING ：创建中。   - ERROR ：故障。
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
    * @param string|null $hostStatus 服务器状态，包含如下4种。   - ACTIVE ：运行中。   - SHUTOFF ：关机。   - BUILDING ：创建中。   - ERROR ：故障。
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
    *  Agent状态，包含如下5种。   - installed ：已安装。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
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
    * @param string|null $agentStatus Agent状态，包含如下5种。   - installed ：已安装。   - not_installed ：未安装。   - online ：在线。   - offline ：离线。   - install_failed ：安装失败。   - installing ：安装中。
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
    *  安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
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
    * @param string|null $installResultCode 安装结果，包含如下12种。   - install_succeed ：安装成功。   - network_access_timeout ：网络不通，访问超时。   - invalid_port ：无效端口。   - auth_failed ：认证错误，口令不正确。   - permission_denied ：权限错误，被拒绝。   - no_available_vpc ：没有相同VPC的agent在线虚拟机。   - install_exception ：安装异常。   - invalid_param ：参数错误。   - install_failed ：安装失败。   - package_unavailable ：安装包失效。   - os_type_not_support ：系统类型错误。   - os_arch_not_support ：架构类型错误。
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
    *  主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
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
    * @param string|null $version 主机开通的版本，包含如下7种输入。   - hss.version.null ：无。   - hss.version.basic ：基础版。   - hss.version.advanced ：专业版。   - hss.version.enterprise ：企业版。   - hss.version.premium ：旗舰版。   - hss.version.wtp ：网页防篡改版。   - hss.version.container.enterprise ：容器版。
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
    *  防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
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
    * @param string|null $protectStatus 防护状态，包含如下2种。 - closed ：未防护。 - opened ：防护中。
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
    *  系统镜像
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
    * @param string|null $osImage 系统镜像
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
    *  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
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
    * @param string|null $osType 操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
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
    *  操作系统位数
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
    * @param string|null $osBit 操作系统位数
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
    *  云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
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
    * @param string|null $detectResult 云主机安全检测结果，包含如下4种。 - undetected ：未检测。 - clean ：无风险。 - risk ：有风险。 - scanning ：检测中。
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
    *  收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
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
    * @param string|null $chargingMode 收费模式，包含如下2种。   - packet_cycle ：包年/包月。   - on_demand ：按需。
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
    *  主机安全配额ID（UUID）
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
    * @param string|null $resourceId 主机安全配额ID（UUID）
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
    *  是否非华为云机器
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
    * @param bool|null $outsideHost 是否非华为云机器
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
    *  服务器组ID
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
    * @param string|null $groupId 服务器组ID
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
    *  服务器组名称
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
    * @param string|null $groupName 服务器组名称
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
    *  策略组ID
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
    * @param string|null $policyGroupId 策略组ID
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
    *  策略组名称
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
    * @param string|null $policyGroupName 策略组名称
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
    *  资产风险
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
    * @param int|null $asset 资产风险
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
    *  漏洞风险
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
    * @param int|null $vulnerability 漏洞风险
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
    *  基线风险
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
    * @param int|null $baseline 基线风险
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
    *  入侵风险
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
    * @param int|null $intrusion 入侵风险
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
    *  资产重要性，包含如下4种   - important ：重要资产   - common ：一般资产   - test ：测试资产
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
    * @param string|null $assetValue 资产重要性，包含如下4种   - important ：重要资产   - common ：一般资产   - test ：测试资产
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
    *  标签列表
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
    * @param string[]|null $labels 标签列表
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
    *  agent安装时间，采用时间戳，默认毫秒，
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
    * @param int|null $agentCreateTime agent安装时间，采用时间戳，默认毫秒，
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
    *  agent状态修改时间，采用时间戳，默认毫秒，
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
    * @param int|null $agentUpdateTime agent状态修改时间，采用时间戳，默认毫秒，
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
    *  agent版本
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
    * @param string|null $agentVersion agent版本
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
    *  升级状态，包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
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
    * @param string|null $upgradeStatus 升级状态，包含如下4种。   - not_upgrade ：未升级，也就是默认状态，客户还没有给这台机器下发过升级。   - upgrading ：正在升级中。   - upgrade_failed ：升级失败。   - upgrade_succeed ：升级成功。
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
    *  升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示，包含如下12种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
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
    * @param string|null $upgradeResultCode 升级失败原因，只有当 upgrade_status 为 upgrade_failed 时才显示，包含如下12种。   - package_unavailable ：升级包解析失败，升级文件有错误。   - network_access_timeout ：下载升级包失败，网络异常。   - agent_offline ：agent离线。   - hostguard_abnormal ：agent工作进程异常。   - insufficient_disk_space ：磁盘空间不足。   - failed_to_replace_file ：替换文件失败。
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
    *  该服务器agent是否可升级
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
    * @param bool|null $upgradable 该服务器agent是否可升级
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
    *  开启防护时间，采用时间戳，默认毫秒，
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
    * @param int|null $openTime 开启防护时间，采用时间戳，默认毫秒，
    *
    * @return $this
    */
    public function setOpenTime($openTime)
    {
        $this->container['openTime'] = $openTime;
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

