<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVulHostsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVulHostsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符范围0-64 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important : 重要 - common    : 一般 - test      : 测试  **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符范围0-256位  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled : 未处理 - handled   : 已处理  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 危险程度 **约束限制**: 不涉及 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危  可用逗号连接作为多选 **默认取值**: 不涉及
    * isAffectBusiness  **参数解释**: 是否影响业务 **约束限制**: 不涉及 **取值范围**: - true  : 影响业务 - false : 不影响业务  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高危 - Medium   : 中危 - Low      : 低危  可用逗号连接作为多选 **默认取值**:   不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'hostName' => 'string',
            'hostIp' => 'string',
            'vulId' => 'string',
            'type' => 'string',
            'status' => 'string',
            'assetValue' => 'string',
            'groupName' => 'string',
            'handleStatus' => 'string',
            'severityLevel' => 'string',
            'isAffectBusiness' => 'bool',
            'repairPriority' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符范围0-64 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important : 重要 - common    : 一般 - test      : 测试  **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符范围0-256位  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled : 未处理 - handled   : 已处理  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 危险程度 **约束限制**: 不涉及 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危  可用逗号连接作为多选 **默认取值**: 不涉及
    * isAffectBusiness  **参数解释**: 是否影响业务 **约束限制**: 不涉及 **取值范围**: - true  : 影响业务 - false : 不影响业务  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高危 - Medium   : 中危 - Low      : 低危  可用逗号连接作为多选 **默认取值**:   不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'hostName' => null,
        'hostIp' => null,
        'vulId' => null,
        'type' => null,
        'status' => null,
        'assetValue' => null,
        'groupName' => null,
        'handleStatus' => null,
        'severityLevel' => null,
        'isAffectBusiness' => null,
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符范围0-64 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important : 重要 - common    : 一般 - test      : 测试  **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符范围0-256位  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled : 未处理 - handled   : 已处理  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 危险程度 **约束限制**: 不涉及 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危  可用逗号连接作为多选 **默认取值**: 不涉及
    * isAffectBusiness  **参数解释**: 是否影响业务 **约束限制**: 不涉及 **取值范围**: - true  : 影响业务 - false : 不影响业务  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高危 - Medium   : 中危 - Low      : 低危  可用逗号连接作为多选 **默认取值**:   不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'vulId' => 'vul_id',
            'type' => 'type',
            'status' => 'status',
            'assetValue' => 'asset_value',
            'groupName' => 'group_name',
            'handleStatus' => 'handle_status',
            'severityLevel' => 'severity_level',
            'isAffectBusiness' => 'is_affect_business',
            'repairPriority' => 'repair_priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符范围0-64 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important : 重要 - common    : 一般 - test      : 测试  **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符范围0-256位  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled : 未处理 - handled   : 已处理  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 危险程度 **约束限制**: 不涉及 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危  可用逗号连接作为多选 **默认取值**: 不涉及
    * isAffectBusiness  **参数解释**: 是否影响业务 **约束限制**: 不涉及 **取值范围**: - true  : 影响业务 - false : 不影响业务  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高危 - Medium   : 中危 - Low      : 低危  可用逗号连接作为多选 **默认取值**:   不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'vulId' => 'setVulId',
            'type' => 'setType',
            'status' => 'setStatus',
            'assetValue' => 'setAssetValue',
            'groupName' => 'setGroupName',
            'handleStatus' => 'setHandleStatus',
            'severityLevel' => 'setSeverityLevel',
            'isAffectBusiness' => 'setIsAffectBusiness',
            'repairPriority' => 'setRepairPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostIp  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * vulId  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符范围0-64 **默认取值**: 不涉及
    * type  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: 不涉及
    * status  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important : 重要 - common    : 一般 - test      : 测试  **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符范围0-256位  **默认取值**: 不涉及
    * handleStatus  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled : 未处理 - handled   : 已处理  **默认取值**: 不涉及
    * severityLevel  **参数解释**: 危险程度 **约束限制**: 不涉及 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危  可用逗号连接作为多选 **默认取值**: 不涉及
    * isAffectBusiness  **参数解释**: 是否影响业务 **约束限制**: 不涉及 **取值范围**: - true  : 影响业务 - false : 不影响业务  **默认取值**: 不涉及
    * repairPriority  **参数解释**: 修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高危 - Medium   : 中危 - Low      : 低危  可用逗号连接作为多选 **默认取值**:   不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'vulId' => 'getVulId',
            'type' => 'getType',
            'status' => 'getStatus',
            'assetValue' => 'getAssetValue',
            'groupName' => 'getGroupName',
            'handleStatus' => 'getHandleStatus',
            'severityLevel' => 'getSeverityLevel',
            'isAffectBusiness' => 'getIsAffectBusiness',
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['handleStatus'] = isset($data['handleStatus']) ? $data['handleStatus'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['isAffectBusiness'] = isset($data['isAffectBusiness']) ? $data['isAffectBusiness'] : null;
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
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostIp']) && !preg_match("/^.*$/", $this->container['hostIp'])) {
                $invalidProperties[] = "invalid value for 'hostIp', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['vulId'] === null) {
            $invalidProperties[] = "'vulId' can't be null";
        }
            if ((mb_strlen($this->container['vulId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.*$/", $this->container['vulId'])) {
                $invalidProperties[] = "invalid value for 'vulId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(linux_vul|windows_vul|web_cms|app_vul|urgent_vul)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(linux_vul|windows_vul|web_cms|app_vul|urgent_vul)$/.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^(vul_status_unfix|vul_status_unfix|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(vul_status_unfix|vul_status_unfix|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot)$/.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 32)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^(important|common|test)$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^(important|common|test)$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^.*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['handleStatus']) && (mb_strlen($this->container['handleStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'handleStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handleStatus']) && !preg_match("/^(unhandled|handled)$/", $this->container['handleStatus'])) {
                $invalidProperties[] = "invalid value for 'handleStatus', must be conform to the pattern /^(unhandled|handled)$/.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 32)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && !preg_match("/^.*$/", $this->container['severityLevel'])) {
                $invalidProperties[] = "invalid value for 'severityLevel', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 10)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairPriority']) && !preg_match("/^.*$/", $this->container['repairPriority'])) {
                $invalidProperties[] = "invalid value for 'repairPriority', must be conform to the pattern /^.*$/.";
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
    * Gets hostIp
    *  **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    * @param string|null $hostIp **参数解释**: 服务器IP **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符范围0-64 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string $vulId **参数解释**: 漏洞ID **约束限制**: 不涉及 **取值范围**: 字符范围0-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**: 查询的漏洞类型 **约束限制**: 不涉及 **取值范围**: - linux_vul   : linux漏洞 - windows_vul : windows漏洞 - web_cms     : Web-CMS漏洞 - app_vul     : 应用漏洞 - urgent_vul  : 应急漏洞  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
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
    * @param string|null $status **参数解释**: 漏洞当前的漏洞状态 **约束限制**: 不涉及 **取值范围**: - vul_status_unfix            : 未处理 - vul_status_ignored          : 已忽略 - vul_status_verified         : 验证中 - vul_status_fixing           : 修复中 - vul_status_fixed            : 修复成功 - vul_status_reboot           : 修复成功待重启 - vul_status_failed           : 修复失败 - vul_status_fix_after_reboot : 请重启主机再次修复  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important : 重要 - common    : 一般 - test      : 测试  **默认取值**: 不涉及
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
    * @param string|null $assetValue **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**: - important : 重要 - common    : 一般 - test      : 测试  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符范围0-256位  **默认取值**: 不涉及
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
    * @param string|null $groupName **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符范围0-256位  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets handleStatus
    *  **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled : 未处理 - handled   : 已处理  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHandleStatus()
    {
        return $this->container['handleStatus'];
    }

    /**
    * Sets handleStatus
    *
    * @param string|null $handleStatus **参数解释**: 漏洞当前的处置状态 **约束限制**: 不涉及 **取值范围**: - unhandled : 未处理 - handled   : 已处理  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHandleStatus($handleStatus)
    {
        $this->container['handleStatus'] = $handleStatus;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 危险程度 **约束限制**: 不涉及 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危  可用逗号连接作为多选 **默认取值**: 不涉及
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
    * @param string|null $severityLevel **参数解释**: 危险程度 **约束限制**: 不涉及 **取值范围**: - Critical : 漏洞cvss评分大于等于9；对应控制台页面的高危 - High     : 漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium   : 漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low      : 漏洞cvss评分小于4；对应控制台页面的低危  可用逗号连接作为多选 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets isAffectBusiness
    *  **参数解释**: 是否影响业务 **约束限制**: 不涉及 **取值范围**: - true  : 影响业务 - false : 不影响业务  **默认取值**: 不涉及
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
    * @param bool|null $isAffectBusiness **参数解释**: 是否影响业务 **约束限制**: 不涉及 **取值范围**: - true  : 影响业务 - false : 不影响业务  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setIsAffectBusiness($isAffectBusiness)
    {
        $this->container['isAffectBusiness'] = $isAffectBusiness;
        return $this;
    }

    /**
    * Gets repairPriority
    *  **参数解释**: 修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高危 - Medium   : 中危 - Low      : 低危  可用逗号连接作为多选 **默认取值**:   不涉及
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
    * @param string|null $repairPriority **参数解释**: 修复优先级 **约束限制**: 不涉及 **取值范围**: - Critical : 紧急 - High     : 高危 - Medium   : 中危 - Low      : 低危  可用逗号连接作为多选 **默认取值**:   不涉及
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

