<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**: 受漏洞影响的服务器id **取值范围**: 字符范围1-128位
    * agentId  **参数解释**: 主机对应的agent id **取值范围**: 字符范围1-128位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  **参数解释**: 受影响主机名称 **取值范围**: 字符范围1-256位
    * hostIp  **参数解释**: 受影响主机ip **取值范围**: 字符范围1-256位
    * cveNum  **参数解释**: 漏洞cve总数 **取值范围**: 最小值0，最大值10000
    * cveIdList  **参数解释**: 漏洞对应的cve id列表 **取值范围**: 最小值1，最大值10000
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    * remark  **参数解释**: 处置备注 **取值范围**: 字符长度1-65535位
    * repairCmd  **参数解释**: 修复漏洞需要执行的命令行（只有Linux漏洞有该字段） **取值范围**: 字符范围1-256位
    * version  **参数解释**: 主机绑定的配额版本 **取值范围**: 字符范围1-128位
    * appPath  **参数解释**: 应用软件的路径（只有应用漏洞有该字段） **取值范围**: 字符范围1-512位
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important : 重要资产 - common    : 一般资产 - test      : 测试资产
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符范围0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围0-256位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符范围0-128位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：linux系统 - Windows：windows系统
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-256位
    * osVersion  **参数解释**: 操作系统版本 **取值范围**: 字符长度1-255位
    * osKernel  **参数解释**: 操作系统内核 **取值范围**: 字符长度1-64位
    * hostStatus  **参数解释**: 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 扫描时间，时间戳单位：毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * failedReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度1-65535位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-2048位
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。
    * disabledOperateTypes  **参数解释**: 漏洞在当前主机上不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'agentId' => 'string',
            'repairNecessity' => 'string',
            'severityLevel' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'cveNum' => 'int',
            'cveIdList' => 'string[]',
            'status' => 'string',
            'remark' => 'string',
            'repairCmd' => 'string',
            'version' => 'string',
            'appPath' => 'string',
            'isAffectBusiness' => 'bool',
            'assetValue' => 'string',
            'privateIp' => 'string',
            'groupName' => 'string',
            'groupId' => 'string',
            'osType' => 'string',
            'osName' => 'string',
            'osVersion' => 'string',
            'osKernel' => 'string',
            'hostStatus' => 'string',
            'firstScanTime' => 'int',
            'scanTime' => 'int',
            'failedReason' => 'string',
            'supportRestore' => 'bool',
            'backupName' => 'string',
            'agentStatus' => 'string',
            'disabledOperateTypes' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoDisabledOperateTypes[]',
            'repairPriority' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**: 受漏洞影响的服务器id **取值范围**: 字符范围1-128位
    * agentId  **参数解释**: 主机对应的agent id **取值范围**: 字符范围1-128位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  **参数解释**: 受影响主机名称 **取值范围**: 字符范围1-256位
    * hostIp  **参数解释**: 受影响主机ip **取值范围**: 字符范围1-256位
    * cveNum  **参数解释**: 漏洞cve总数 **取值范围**: 最小值0，最大值10000
    * cveIdList  **参数解释**: 漏洞对应的cve id列表 **取值范围**: 最小值1，最大值10000
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    * remark  **参数解释**: 处置备注 **取值范围**: 字符长度1-65535位
    * repairCmd  **参数解释**: 修复漏洞需要执行的命令行（只有Linux漏洞有该字段） **取值范围**: 字符范围1-256位
    * version  **参数解释**: 主机绑定的配额版本 **取值范围**: 字符范围1-128位
    * appPath  **参数解释**: 应用软件的路径（只有应用漏洞有该字段） **取值范围**: 字符范围1-512位
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important : 重要资产 - common    : 一般资产 - test      : 测试资产
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符范围0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围0-256位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符范围0-128位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：linux系统 - Windows：windows系统
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-256位
    * osVersion  **参数解释**: 操作系统版本 **取值范围**: 字符长度1-255位
    * osKernel  **参数解释**: 操作系统内核 **取值范围**: 字符长度1-64位
    * hostStatus  **参数解释**: 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 扫描时间，时间戳单位：毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * failedReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度1-65535位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-2048位
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。
    * disabledOperateTypes  **参数解释**: 漏洞在当前主机上不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'agentId' => null,
        'repairNecessity' => null,
        'severityLevel' => null,
        'hostName' => null,
        'hostIp' => null,
        'cveNum' => null,
        'cveIdList' => null,
        'status' => null,
        'remark' => null,
        'repairCmd' => null,
        'version' => null,
        'appPath' => null,
        'isAffectBusiness' => null,
        'assetValue' => null,
        'privateIp' => null,
        'groupName' => null,
        'groupId' => null,
        'osType' => null,
        'osName' => null,
        'osVersion' => null,
        'osKernel' => null,
        'hostStatus' => null,
        'firstScanTime' => 'int64',
        'scanTime' => 'int64',
        'failedReason' => null,
        'supportRestore' => null,
        'backupName' => null,
        'agentStatus' => null,
        'disabledOperateTypes' => null,
        'repairPriority' => null
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
    * hostId  **参数解释**: 受漏洞影响的服务器id **取值范围**: 字符范围1-128位
    * agentId  **参数解释**: 主机对应的agent id **取值范围**: 字符范围1-128位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  **参数解释**: 受影响主机名称 **取值范围**: 字符范围1-256位
    * hostIp  **参数解释**: 受影响主机ip **取值范围**: 字符范围1-256位
    * cveNum  **参数解释**: 漏洞cve总数 **取值范围**: 最小值0，最大值10000
    * cveIdList  **参数解释**: 漏洞对应的cve id列表 **取值范围**: 最小值1，最大值10000
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    * remark  **参数解释**: 处置备注 **取值范围**: 字符长度1-65535位
    * repairCmd  **参数解释**: 修复漏洞需要执行的命令行（只有Linux漏洞有该字段） **取值范围**: 字符范围1-256位
    * version  **参数解释**: 主机绑定的配额版本 **取值范围**: 字符范围1-128位
    * appPath  **参数解释**: 应用软件的路径（只有应用漏洞有该字段） **取值范围**: 字符范围1-512位
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important : 重要资产 - common    : 一般资产 - test      : 测试资产
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符范围0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围0-256位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符范围0-128位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：linux系统 - Windows：windows系统
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-256位
    * osVersion  **参数解释**: 操作系统版本 **取值范围**: 字符长度1-255位
    * osKernel  **参数解释**: 操作系统内核 **取值范围**: 字符长度1-64位
    * hostStatus  **参数解释**: 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 扫描时间，时间戳单位：毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * failedReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度1-65535位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-2048位
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。
    * disabledOperateTypes  **参数解释**: 漏洞在当前主机上不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'agentId' => 'agent_id',
            'repairNecessity' => 'repair_necessity',
            'severityLevel' => 'severity_level',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'cveNum' => 'cve_num',
            'cveIdList' => 'cve_id_list',
            'status' => 'status',
            'remark' => 'remark',
            'repairCmd' => 'repair_cmd',
            'version' => 'version',
            'appPath' => 'app_path',
            'isAffectBusiness' => 'is_affect_business',
            'assetValue' => 'asset_value',
            'privateIp' => 'private_ip',
            'groupName' => 'group_name',
            'groupId' => 'group_id',
            'osType' => 'os_type',
            'osName' => 'os_name',
            'osVersion' => 'os_version',
            'osKernel' => 'os_kernel',
            'hostStatus' => 'host_status',
            'firstScanTime' => 'first_scan_time',
            'scanTime' => 'scan_time',
            'failedReason' => 'failed_reason',
            'supportRestore' => 'support_restore',
            'backupName' => 'backup_name',
            'agentStatus' => 'agent_status',
            'disabledOperateTypes' => 'disabled_operate_types',
            'repairPriority' => 'repair_priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**: 受漏洞影响的服务器id **取值范围**: 字符范围1-128位
    * agentId  **参数解释**: 主机对应的agent id **取值范围**: 字符范围1-128位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  **参数解释**: 受影响主机名称 **取值范围**: 字符范围1-256位
    * hostIp  **参数解释**: 受影响主机ip **取值范围**: 字符范围1-256位
    * cveNum  **参数解释**: 漏洞cve总数 **取值范围**: 最小值0，最大值10000
    * cveIdList  **参数解释**: 漏洞对应的cve id列表 **取值范围**: 最小值1，最大值10000
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    * remark  **参数解释**: 处置备注 **取值范围**: 字符长度1-65535位
    * repairCmd  **参数解释**: 修复漏洞需要执行的命令行（只有Linux漏洞有该字段） **取值范围**: 字符范围1-256位
    * version  **参数解释**: 主机绑定的配额版本 **取值范围**: 字符范围1-128位
    * appPath  **参数解释**: 应用软件的路径（只有应用漏洞有该字段） **取值范围**: 字符范围1-512位
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important : 重要资产 - common    : 一般资产 - test      : 测试资产
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符范围0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围0-256位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符范围0-128位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：linux系统 - Windows：windows系统
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-256位
    * osVersion  **参数解释**: 操作系统版本 **取值范围**: 字符长度1-255位
    * osKernel  **参数解释**: 操作系统内核 **取值范围**: 字符长度1-64位
    * hostStatus  **参数解释**: 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 扫描时间，时间戳单位：毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * failedReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度1-65535位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-2048位
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。
    * disabledOperateTypes  **参数解释**: 漏洞在当前主机上不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'agentId' => 'setAgentId',
            'repairNecessity' => 'setRepairNecessity',
            'severityLevel' => 'setSeverityLevel',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'cveNum' => 'setCveNum',
            'cveIdList' => 'setCveIdList',
            'status' => 'setStatus',
            'remark' => 'setRemark',
            'repairCmd' => 'setRepairCmd',
            'version' => 'setVersion',
            'appPath' => 'setAppPath',
            'isAffectBusiness' => 'setIsAffectBusiness',
            'assetValue' => 'setAssetValue',
            'privateIp' => 'setPrivateIp',
            'groupName' => 'setGroupName',
            'groupId' => 'setGroupId',
            'osType' => 'setOsType',
            'osName' => 'setOsName',
            'osVersion' => 'setOsVersion',
            'osKernel' => 'setOsKernel',
            'hostStatus' => 'setHostStatus',
            'firstScanTime' => 'setFirstScanTime',
            'scanTime' => 'setScanTime',
            'failedReason' => 'setFailedReason',
            'supportRestore' => 'setSupportRestore',
            'backupName' => 'setBackupName',
            'agentStatus' => 'setAgentStatus',
            'disabledOperateTypes' => 'setDisabledOperateTypes',
            'repairPriority' => 'setRepairPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**: 受漏洞影响的服务器id **取值范围**: 字符范围1-128位
    * agentId  **参数解释**: 主机对应的agent id **取值范围**: 字符范围1-128位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostName  **参数解释**: 受影响主机名称 **取值范围**: 字符范围1-256位
    * hostIp  **参数解释**: 受影响主机ip **取值范围**: 字符范围1-256位
    * cveNum  **参数解释**: 漏洞cve总数 **取值范围**: 最小值0，最大值10000
    * cveIdList  **参数解释**: 漏洞对应的cve id列表 **取值范围**: 最小值1，最大值10000
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    * remark  **参数解释**: 处置备注 **取值范围**: 字符长度1-65535位
    * repairCmd  **参数解释**: 修复漏洞需要执行的命令行（只有Linux漏洞有该字段） **取值范围**: 字符范围1-256位
    * version  **参数解释**: 主机绑定的配额版本 **取值范围**: 字符范围1-128位
    * appPath  **参数解释**: 应用软件的路径（只有应用漏洞有该字段） **取值范围**: 字符范围1-512位
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * assetValue  **参数解释**: 资产重要性 **取值范围**: - important : 重要资产 - common    : 一般资产 - test      : 测试资产
    * privateIp  **参数解释**: 服务器私网ip **取值范围**: 字符范围0-128位
    * groupName  **参数解释**: 服务器组名称 **取值范围**: 字符范围0-256位
    * groupId  **参数解释**: 服务器组id **取值范围**: 字符范围0-128位
    * osType  **参数解释**: 操作系统类型 **取值范围**: - Linux ：linux系统 - Windows：windows系统
    * osName  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-256位
    * osVersion  **参数解释**: 操作系统版本 **取值范围**: 字符长度1-255位
    * osKernel  **参数解释**: 操作系统内核 **取值范围**: 字符长度1-64位
    * hostStatus  **参数解释**: 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。 **默认取值**: 不涉及
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * scanTime  **参数解释**: 扫描时间，时间戳单位：毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * failedReason  **参数解释**: 修复失败原因 **取值范围**: 字符长度1-65535位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * backupName  **参数解释**: 备份名称 **取值范围**: 字符长度1-2048位
    * agentStatus  **参数解释**: Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。
    * disabledOperateTypes  **参数解释**: 漏洞在当前主机上不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'agentId' => 'getAgentId',
            'repairNecessity' => 'getRepairNecessity',
            'severityLevel' => 'getSeverityLevel',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'cveNum' => 'getCveNum',
            'cveIdList' => 'getCveIdList',
            'status' => 'getStatus',
            'remark' => 'getRemark',
            'repairCmd' => 'getRepairCmd',
            'version' => 'getVersion',
            'appPath' => 'getAppPath',
            'isAffectBusiness' => 'getIsAffectBusiness',
            'assetValue' => 'getAssetValue',
            'privateIp' => 'getPrivateIp',
            'groupName' => 'getGroupName',
            'groupId' => 'getGroupId',
            'osType' => 'getOsType',
            'osName' => 'getOsName',
            'osVersion' => 'getOsVersion',
            'osKernel' => 'getOsKernel',
            'hostStatus' => 'getHostStatus',
            'firstScanTime' => 'getFirstScanTime',
            'scanTime' => 'getScanTime',
            'failedReason' => 'getFailedReason',
            'supportRestore' => 'getSupportRestore',
            'backupName' => 'getBackupName',
            'agentStatus' => 'getAgentStatus',
            'disabledOperateTypes' => 'getDisabledOperateTypes',
            'repairPriority' => 'getRepairPriority'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['cveNum'] = isset($data['cveNum']) ? $data['cveNum'] : null;
        $this->container['cveIdList'] = isset($data['cveIdList']) ? $data['cveIdList'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['repairCmd'] = isset($data['repairCmd']) ? $data['repairCmd'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['isAffectBusiness'] = isset($data['isAffectBusiness']) ? $data['isAffectBusiness'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['osKernel'] = isset($data['osKernel']) ? $data['osKernel'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['supportRestore'] = isset($data['supportRestore']) ? $data['supportRestore'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['disabledOperateTypes'] = isset($data['disabledOperateTypes']) ? $data['disabledOperateTypes'] : null;
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) > 64)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) < 0)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cveNum']) && ($this->container['cveNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'cveNum', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['cveNum']) && ($this->container['cveNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'cveNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 65535)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 1)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairCmd']) && (mb_strlen($this->container['repairCmd']) > 256)) {
                $invalidProperties[] = "invalid value for 'repairCmd', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['repairCmd']) && (mb_strlen($this->container['repairCmd']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairCmd', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 32)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 256)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 1)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) > 255)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['osVersion']) && (mb_strlen($this->container['osVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'osVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osKernel']) && (mb_strlen($this->container['osKernel']) > 64)) {
                $invalidProperties[] = "invalid value for 'osKernel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osKernel']) && (mb_strlen($this->container['osKernel']) < 1)) {
                $invalidProperties[] = "invalid value for 'osKernel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) > 65535)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['failedReason']) && (mb_strlen($this->container['failedReason']) < 1)) {
                $invalidProperties[] = "invalid value for 'failedReason', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) > 2048)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['backupName']) && (mb_strlen($this->container['backupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'backupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 10)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
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
    * Gets hostId
    *  **参数解释**: 受漏洞影响的服务器id **取值范围**: 字符范围1-128位
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
    * @param string|null $hostId **参数解释**: 受漏洞影响的服务器id **取值范围**: 字符范围1-128位
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
    *  **参数解释**: 主机对应的agent id **取值范围**: 字符范围1-128位
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
    * @param string|null $agentId **参数解释**: 主机对应的agent id **取值范围**: 字符范围1-128位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  **参数解释**: 修复紧急度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return string|null
    */
    public function getRepairNecessity()
    {
        return $this->container['repairNecessity'];
    }

    /**
    * Sets repairNecessity
    *
    * @param string|null $repairNecessity **参数解释**: 修复紧急度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 危险程度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel **参数解释**: 危险程度 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 受影响主机名称 **取值范围**: 字符范围1-256位
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
    * @param string|null $hostName **参数解释**: 受影响主机名称 **取值范围**: 字符范围1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 受影响主机ip **取值范围**: 字符范围1-256位
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**: 受影响主机ip **取值范围**: 字符范围1-256位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets cveNum
    *  **参数解释**: 漏洞cve总数 **取值范围**: 最小值0，最大值10000
    *
    * @return int|null
    */
    public function getCveNum()
    {
        return $this->container['cveNum'];
    }

    /**
    * Sets cveNum
    *
    * @param int|null $cveNum **参数解释**: 漏洞cve总数 **取值范围**: 最小值0，最大值10000
    *
    * @return $this
    */
    public function setCveNum($cveNum)
    {
        $this->container['cveNum'] = $cveNum;
        return $this;
    }

    /**
    * Gets cveIdList
    *  **参数解释**: 漏洞对应的cve id列表 **取值范围**: 最小值1，最大值10000
    *
    * @return string[]|null
    */
    public function getCveIdList()
    {
        return $this->container['cveIdList'];
    }

    /**
    * Sets cveIdList
    *
    * @param string[]|null $cveIdList **参数解释**: 漏洞对应的cve id列表 **取值范围**: 最小值1，最大值10000
    *
    * @return $this
    */
    public function setCveIdList($cveIdList)
    {
        $this->container['cveIdList'] = $cveIdList;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
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
    * @param string|null $status **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets remark
    *  **参数解释**: 处置备注 **取值范围**: 字符长度1-65535位
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark **参数解释**: 处置备注 **取值范围**: 字符长度1-65535位
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets repairCmd
    *  **参数解释**: 修复漏洞需要执行的命令行（只有Linux漏洞有该字段） **取值范围**: 字符范围1-256位
    *
    * @return string|null
    */
    public function getRepairCmd()
    {
        return $this->container['repairCmd'];
    }

    /**
    * Sets repairCmd
    *
    * @param string|null $repairCmd **参数解释**: 修复漏洞需要执行的命令行（只有Linux漏洞有该字段） **取值范围**: 字符范围1-256位
    *
    * @return $this
    */
    public function setRepairCmd($repairCmd)
    {
        $this->container['repairCmd'] = $repairCmd;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 主机绑定的配额版本 **取值范围**: 字符范围1-128位
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
    * @param string|null $version **参数解释**: 主机绑定的配额版本 **取值范围**: 字符范围1-128位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets appPath
    *  **参数解释**: 应用软件的路径（只有应用漏洞有该字段） **取值范围**: 字符范围1-512位
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath **参数解释**: 应用软件的路径（只有应用漏洞有该字段） **取值范围**: 字符范围1-512位
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets isAffectBusiness
    *  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    *
    * @return bool|null
    */
    public function getIsAffectBusiness()
    {
        return $this->container['isAffectBusiness'];
    }

    /**
    * Sets isAffectBusiness
    *
    * @param bool|null $isAffectBusiness **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    *
    * @return $this
    */
    public function setIsAffectBusiness($isAffectBusiness)
    {
        $this->container['isAffectBusiness'] = $isAffectBusiness;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 资产重要性 **取值范围**: - important : 重要资产 - common    : 一般资产 - test      : 测试资产
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
    * @param string|null $assetValue **参数解释**: 资产重要性 **取值范围**: - important : 重要资产 - common    : 一般资产 - test      : 测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私网ip **取值范围**: 字符范围0-128位
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
    * @param string|null $privateIp **参数解释**: 服务器私网ip **取值范围**: 字符范围0-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 服务器组名称 **取值范围**: 字符范围0-256位
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
    * @param string|null $groupName **参数解释**: 服务器组名称 **取值范围**: 字符范围0-256位
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 服务器组id **取值范围**: 字符范围0-128位
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
    * @param string|null $groupId **参数解释**: 服务器组id **取值范围**: 字符范围0-128位
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**: 操作系统类型 **取值范围**: - Linux ：linux系统 - Windows：windows系统
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
    * @param string|null $osType **参数解释**: 操作系统类型 **取值范围**: - Linux ：linux系统 - Windows：windows系统
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
    *  **参数解释**: 操作系统名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $osName **参数解释**: 操作系统名称 **取值范围**: 字符长度1-256位
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
    *  **参数解释**: 操作系统版本 **取值范围**: 字符长度1-255位
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
    * @param string|null $osVersion **参数解释**: 操作系统版本 **取值范围**: 字符长度1-255位
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets osKernel
    *  **参数解释**: 操作系统内核 **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getOsKernel()
    {
        return $this->container['osKernel'];
    }

    /**
    * Sets osKernel
    *
    * @param string|null $osKernel **参数解释**: 操作系统内核 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setOsKernel($osKernel)
    {
        $this->container['osKernel'] = $osKernel;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**: 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。 **默认取值**: 不涉及
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
    * @param string|null $hostStatus **参数解释**: 主机状态 **取值范围**: - ACTIVE：正在运行。 - SHUTOFF：关机。 - BUILDING：创建中。 - ERROR：故障。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getFirstScanTime()
    {
        return $this->container['firstScanTime'];
    }

    /**
    * Sets firstScanTime
    *
    * @param int|null $firstScanTime **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**: 扫描时间，时间戳单位：毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**: 扫描时间，时间戳单位：毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets failedReason
    *  **参数解释**: 修复失败原因 **取值范围**: 字符长度1-65535位
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**: 修复失败原因 **取值范围**: 字符长度1-65535位
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets supportRestore
    *  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    *
    * @return bool|null
    */
    public function getSupportRestore()
    {
        return $this->container['supportRestore'];
    }

    /**
    * Sets supportRestore
    *
    * @param bool|null $supportRestore **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    *
    * @return $this
    */
    public function setSupportRestore($supportRestore)
    {
        $this->container['supportRestore'] = $supportRestore;
        return $this;
    }

    /**
    * Gets backupName
    *  **参数解释**: 备份名称 **取值范围**: 字符长度1-2048位
    *
    * @return string|null
    */
    public function getBackupName()
    {
        return $this->container['backupName'];
    }

    /**
    * Sets backupName
    *
    * @param string|null $backupName **参数解释**: 备份名称 **取值范围**: 字符长度1-2048位
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**: Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。
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
    * @param string|null $agentStatus **参数解释**: Agent状态 **取值范围**: - installed：已安装。 - not_installed：未安装。 - online：在线。 - offline：离线。 - install_failed：安装失败。 - installing：安装中。
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets disabledOperateTypes
    *  **参数解释**: 漏洞在当前主机上不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoDisabledOperateTypes[]|null
    */
    public function getDisabledOperateTypes()
    {
        return $this->container['disabledOperateTypes'];
    }

    /**
    * Sets disabledOperateTypes
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoDisabledOperateTypes[]|null $disabledOperateTypes **参数解释**: 漏洞在当前主机上不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    *
    * @return $this
    */
    public function setDisabledOperateTypes($disabledOperateTypes)
    {
        $this->container['disabledOperateTypes'] = $disabledOperateTypes;
        return $this;
    }

    /**
    * Gets repairPriority
    *  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低
    *
    * @return string|null
    */
    public function getRepairPriority()
    {
        return $this->container['repairPriority'];
    }

    /**
    * Sets repairPriority
    *
    * @param string|null $repairPriority **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急 - High     : 高 - Medium   : 中 - Low      : 低
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
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

