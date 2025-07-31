<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostVulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostVulInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair  : 尽快修复 - delay_repair      : 延后修复 - not_needed_repair : 暂可不修复
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞
    * appList  **参数解释**: 服务器上受该漏洞影响的软件列表 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危
    * solutionDetail  **参数解释**: 解决方案 **取值范围**: 字符范围0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符范围0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符范围0-65534位
    * repairCmd  **参数解释**: 修复命令行 **取值范围**: 字符范围1-256位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  **参数解释**: HSS全网修复该漏洞的次数 **取值范围**: 最小值0，最大值1000000
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-256位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-256位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-128位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急  - High     : 高  - Medium   : 中  - Low      : 低
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'vulId' => 'string',
            'labelList' => 'string[]',
            'repairNecessity' => 'string',
            'scanTime' => 'int',
            'type' => 'string',
            'appList' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoAppList[]',
            'severityLevel' => 'string',
            'solutionDetail' => 'string',
            'url' => 'string',
            'description' => 'string',
            'repairCmd' => 'string',
            'status' => 'string',
            'repairSuccessNum' => 'int',
            'cveList' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoCveList[]',
            'isAffectBusiness' => 'bool',
            'firstScanTime' => 'int',
            'appName' => 'string',
            'appVersion' => 'string',
            'appPath' => 'string',
            'version' => 'string',
            'supportRestore' => 'bool',
            'disabledOperateTypes' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoDisabledOperateTypes[]',
            'repairPriority' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair  : 尽快修复 - delay_repair      : 延后修复 - not_needed_repair : 暂可不修复
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞
    * appList  **参数解释**: 服务器上受该漏洞影响的软件列表 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危
    * solutionDetail  **参数解释**: 解决方案 **取值范围**: 字符范围0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符范围0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符范围0-65534位
    * repairCmd  **参数解释**: 修复命令行 **取值范围**: 字符范围1-256位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  **参数解释**: HSS全网修复该漏洞的次数 **取值范围**: 最小值0，最大值1000000
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-256位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-256位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-128位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急  - High     : 高  - Medium   : 中  - Low      : 低
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'vulId' => null,
        'labelList' => null,
        'repairNecessity' => null,
        'scanTime' => 'int64',
        'type' => null,
        'appList' => null,
        'severityLevel' => null,
        'solutionDetail' => null,
        'url' => null,
        'description' => null,
        'repairCmd' => null,
        'status' => null,
        'repairSuccessNum' => 'int32',
        'cveList' => null,
        'isAffectBusiness' => null,
        'firstScanTime' => 'int64',
        'appName' => null,
        'appVersion' => null,
        'appPath' => null,
        'version' => null,
        'supportRestore' => null,
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
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair  : 尽快修复 - delay_repair      : 延后修复 - not_needed_repair : 暂可不修复
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞
    * appList  **参数解释**: 服务器上受该漏洞影响的软件列表 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危
    * solutionDetail  **参数解释**: 解决方案 **取值范围**: 字符范围0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符范围0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符范围0-65534位
    * repairCmd  **参数解释**: 修复命令行 **取值范围**: 字符范围1-256位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  **参数解释**: HSS全网修复该漏洞的次数 **取值范围**: 最小值0，最大值1000000
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-256位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-256位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-128位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急  - High     : 高  - Medium   : 中  - Low      : 低
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'vulId' => 'vul_id',
            'labelList' => 'label_list',
            'repairNecessity' => 'repair_necessity',
            'scanTime' => 'scan_time',
            'type' => 'type',
            'appList' => 'app_list',
            'severityLevel' => 'severity_level',
            'solutionDetail' => 'solution_detail',
            'url' => 'url',
            'description' => 'description',
            'repairCmd' => 'repair_cmd',
            'status' => 'status',
            'repairSuccessNum' => 'repair_success_num',
            'cveList' => 'cve_list',
            'isAffectBusiness' => 'is_affect_business',
            'firstScanTime' => 'first_scan_time',
            'appName' => 'app_name',
            'appVersion' => 'app_version',
            'appPath' => 'app_path',
            'version' => 'version',
            'supportRestore' => 'support_restore',
            'disabledOperateTypes' => 'disabled_operate_types',
            'repairPriority' => 'repair_priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair  : 尽快修复 - delay_repair      : 延后修复 - not_needed_repair : 暂可不修复
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞
    * appList  **参数解释**: 服务器上受该漏洞影响的软件列表 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危
    * solutionDetail  **参数解释**: 解决方案 **取值范围**: 字符范围0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符范围0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符范围0-65534位
    * repairCmd  **参数解释**: 修复命令行 **取值范围**: 字符范围1-256位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  **参数解释**: HSS全网修复该漏洞的次数 **取值范围**: 最小值0，最大值1000000
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-256位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-256位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-128位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急  - High     : 高  - Medium   : 中  - Low      : 低
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'vulId' => 'setVulId',
            'labelList' => 'setLabelList',
            'repairNecessity' => 'setRepairNecessity',
            'scanTime' => 'setScanTime',
            'type' => 'setType',
            'appList' => 'setAppList',
            'severityLevel' => 'setSeverityLevel',
            'solutionDetail' => 'setSolutionDetail',
            'url' => 'setUrl',
            'description' => 'setDescription',
            'repairCmd' => 'setRepairCmd',
            'status' => 'setStatus',
            'repairSuccessNum' => 'setRepairSuccessNum',
            'cveList' => 'setCveList',
            'isAffectBusiness' => 'setIsAffectBusiness',
            'firstScanTime' => 'setFirstScanTime',
            'appName' => 'setAppName',
            'appVersion' => 'setAppVersion',
            'appPath' => 'setAppPath',
            'version' => 'setVersion',
            'supportRestore' => 'setSupportRestore',
            'disabledOperateTypes' => 'setDisabledOperateTypes',
            'repairPriority' => 'setRepairPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair  : 尽快修复 - delay_repair      : 延后修复 - not_needed_repair : 暂可不修复
    * scanTime  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞
    * appList  **参数解释**: 服务器上受该漏洞影响的软件列表 **取值范围**: 最小值0，最大值2147483647
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危
    * solutionDetail  **参数解释**: 解决方案 **取值范围**: 字符范围0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符范围0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符范围0-65534位
    * repairCmd  **参数解释**: 修复命令行 **取值范围**: 字符范围1-256位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  **参数解释**: HSS全网修复该漏洞的次数 **取值范围**: 最小值0，最大值1000000
    * cveList  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    * isAffectBusiness  **参数解释**: 是否影响业务 **取值范围**: - true  : 影响业务 - false : 不影响业务
    * firstScanTime  **参数解释**: 首次扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-256位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度0-256位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 主机配额 **取值范围**: 字符长度0-128位
    * supportRestore  **参数解释**: 是否可以回滚到修复漏洞时创建的备份 **取值范围**: - true  : 可以回滚 - false : 不可以回滚
    * disabledOperateTypes  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急  - High     : 高  - Medium   : 中  - Low      : 低
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'vulId' => 'getVulId',
            'labelList' => 'getLabelList',
            'repairNecessity' => 'getRepairNecessity',
            'scanTime' => 'getScanTime',
            'type' => 'getType',
            'appList' => 'getAppList',
            'severityLevel' => 'getSeverityLevel',
            'solutionDetail' => 'getSolutionDetail',
            'url' => 'getUrl',
            'description' => 'getDescription',
            'repairCmd' => 'getRepairCmd',
            'status' => 'getStatus',
            'repairSuccessNum' => 'getRepairSuccessNum',
            'cveList' => 'getCveList',
            'isAffectBusiness' => 'getIsAffectBusiness',
            'firstScanTime' => 'getFirstScanTime',
            'appName' => 'getAppName',
            'appVersion' => 'getAppVersion',
            'appPath' => 'getAppPath',
            'version' => 'getVersion',
            'supportRestore' => 'getSupportRestore',
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
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['labelList'] = isset($data['labelList']) ? $data['labelList'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['appList'] = isset($data['appList']) ? $data['appList'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['solutionDetail'] = isset($data['solutionDetail']) ? $data['solutionDetail'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['repairCmd'] = isset($data['repairCmd']) ? $data['repairCmd'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['repairSuccessNum'] = isset($data['repairSuccessNum']) ? $data['repairSuccessNum'] : null;
        $this->container['cveList'] = isset($data['cveList']) ? $data['cveList'] : null;
        $this->container['isAffectBusiness'] = isset($data['isAffectBusiness']) ? $data['isAffectBusiness'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['supportRestore'] = isset($data['supportRestore']) ? $data['supportRestore'] : null;
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
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) > 64)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) < 0)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 128)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['solutionDetail']) && (mb_strlen($this->container['solutionDetail']) > 65534)) {
                $invalidProperties[] = "invalid value for 'solutionDetail', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['solutionDetail']) && (mb_strlen($this->container['solutionDetail']) < 0)) {
                $invalidProperties[] = "invalid value for 'solutionDetail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 2083)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2083.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 65534)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairCmd']) && (mb_strlen($this->container['repairCmd']) > 256)) {
                $invalidProperties[] = "invalid value for 'repairCmd', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['repairCmd']) && (mb_strlen($this->container['repairCmd']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairCmd', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairSuccessNum']) && ($this->container['repairSuccessNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'repairSuccessNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['repairSuccessNum']) && ($this->container['repairSuccessNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'repairSuccessNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 256)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
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
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符范围0-256位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞ID **取值范围**: 字符范围0-64位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets labelList
    *  **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return string[]|null
    */
    public function getLabelList()
    {
        return $this->container['labelList'];
    }

    /**
    * Sets labelList
    *
    * @param string[]|null $labelList **参数解释**: 漏洞标签列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair  : 尽快修复 - delay_repair      : 延后修复 - not_needed_repair : 暂可不修复
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
    * @param string|null $repairNecessity **参数解释**: 修复紧急度 **取值范围**: - immediate_repair  : 尽快修复 - delay_repair      : 延后修复 - not_needed_repair : 暂可不修复
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $scanTime **参数解释**: 最近扫描时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 漏洞类型 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**: 漏洞类型 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets appList
    *  **参数解释**: 服务器上受该漏洞影响的软件列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoAppList[]|null
    */
    public function getAppList()
    {
        return $this->container['appList'];
    }

    /**
    * Sets appList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoAppList[]|null $appList **参数解释**: 服务器上受该漏洞影响的软件列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAppList($appList)
    {
        $this->container['appList'] = $appList;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 危险程度 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危
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
    * @param string|null $severityLevel **参数解释**: 危险程度 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets solutionDetail
    *  **参数解释**: 解决方案 **取值范围**: 字符范围0-65534位
    *
    * @return string|null
    */
    public function getSolutionDetail()
    {
        return $this->container['solutionDetail'];
    }

    /**
    * Sets solutionDetail
    *
    * @param string|null $solutionDetail **参数解释**: 解决方案 **取值范围**: 字符范围0-65534位
    *
    * @return $this
    */
    public function setSolutionDetail($solutionDetail)
    {
        $this->container['solutionDetail'] = $solutionDetail;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释**: URL链接 **取值范围**: 字符范围0-2083位
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释**: URL链接 **取值范围**: 字符范围0-2083位
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 漏洞描述 **取值范围**: 字符范围0-65534位
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**: 漏洞描述 **取值范围**: 字符范围0-65534位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets repairCmd
    *  **参数解释**: 修复命令行 **取值范围**: 字符范围1-256位
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
    * @param string|null $repairCmd **参数解释**: 修复命令行 **取值范围**: 字符范围1-256位
    *
    * @return $this
    */
    public function setRepairCmd($repairCmd)
    {
        $this->container['repairCmd'] = $repairCmd;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复
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
    * @param string|null $status **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets repairSuccessNum
    *  **参数解释**: HSS全网修复该漏洞的次数 **取值范围**: 最小值0，最大值1000000
    *
    * @return int|null
    */
    public function getRepairSuccessNum()
    {
        return $this->container['repairSuccessNum'];
    }

    /**
    * Sets repairSuccessNum
    *
    * @param int|null $repairSuccessNum **参数解释**: HSS全网修复该漏洞的次数 **取值范围**: 最小值0，最大值1000000
    *
    * @return $this
    */
    public function setRepairSuccessNum($repairSuccessNum)
    {
        $this->container['repairSuccessNum'] = $repairSuccessNum;
        return $this;
    }

    /**
    * Gets cveList
    *  **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoCveList[]|null
    */
    public function getCveList()
    {
        return $this->container['cveList'];
    }

    /**
    * Sets cveList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoCveList[]|null $cveList **参数解释**: CVE列表 **取值范围**: 最小值1，最大值10000
    *
    * @return $this
    */
    public function setCveList($cveList)
    {
        $this->container['cveList'] = $cveList;
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
    * Gets appName
    *  **参数解释**: 软件名称 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 软件名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appVersion
    *  **参数解释**: 软件版本 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion **参数解释**: 软件版本 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets appPath
    *  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
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
    * @param string|null $appPath **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 主机配额 **取值范围**: 字符长度0-128位
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
    * @param string|null $version **参数解释**: 主机配额 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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
    * Gets disabledOperateTypes
    *  **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
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
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoDisabledOperateTypes[]|null $disabledOperateTypes **参数解释**: 该漏洞不可进行的操作类型列表 **取值范围**: 最小值1，最大值10000
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
    *  **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急  - High     : 高  - Medium   : 中  - Low      : 低
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
    * @param string|null $repairPriority **参数解释**: 修复优先级 **取值范围**: - Critical : 紧急  - High     : 高  - Medium   : 中  - Low      : 低
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

