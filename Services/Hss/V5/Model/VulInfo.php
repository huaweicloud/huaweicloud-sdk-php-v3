<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 不涉及
    * repairNecessity  **参数解释**: 漏洞修复的必要性 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostNum  **参数解释**: 受影响服务器台数 **取值范围**: 取值0-2147483647
    * unhandleHostNum  **参数解释**: 未处理主机台数：除已忽略和已修复的主机数量 **取值范围**: 取值0-2147483647
    * scanTime  **参数解释**: 最近扫描时间，时间戳单位：毫秒 **取值范围**: 取值0-9223372036854775807
    * solutionDetail  **参数解释**: 修复漏洞的指导意见 **取值范围**: 字符长度0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符长度0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-65534位
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * hostIdList  **参数解释**: 可处置该漏洞的主机ID列表 **取值范围**: 不涉及
    * cveList  **参数解释**: 漏洞关联的cve信息列表 **取值范围**: 不涉及
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512位
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostsNum  hostsNum
    * repairSuccessNum  **参数解释**: 修复成功次数 **取值范围**: 取值0-1000000
    * fixedNum  **参数解释**: 修复数量 **取值范围**: 取值0-1000000
    * ignoredNum  **参数解释**: 忽略数量 **取值范围**: 取值0-1000000
    * verifyNum  **参数解释**: 验证数量 **取值范围**: 取值0-1000000
    * repairPriorityList  **参数解释**: 修复优先级，每个修复优先级对应的主机数量 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'vulId' => 'string',
            'labelList' => 'string[]',
            'repairNecessity' => 'string',
            'severityLevel' => 'string',
            'hostNum' => 'int',
            'unhandleHostNum' => 'int',
            'scanTime' => 'int',
            'solutionDetail' => 'string',
            'url' => 'string',
            'description' => 'string',
            'type' => 'string',
            'hostIdList' => 'string[]',
            'cveList' => '\HuaweiCloud\SDK\Hss\V5\Model\VulInfoCveList[]',
            'patchUrl' => 'string',
            'repairPriority' => 'string',
            'hostsNum' => '\HuaweiCloud\SDK\Hss\V5\Model\VulnerabilityHostNumberInfo',
            'repairSuccessNum' => 'int',
            'fixedNum' => 'int',
            'ignoredNum' => 'int',
            'verifyNum' => 'int',
            'repairPriorityList' => '\HuaweiCloud\SDK\Hss\V5\Model\RepairPriorityListInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 不涉及
    * repairNecessity  **参数解释**: 漏洞修复的必要性 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostNum  **参数解释**: 受影响服务器台数 **取值范围**: 取值0-2147483647
    * unhandleHostNum  **参数解释**: 未处理主机台数：除已忽略和已修复的主机数量 **取值范围**: 取值0-2147483647
    * scanTime  **参数解释**: 最近扫描时间，时间戳单位：毫秒 **取值范围**: 取值0-9223372036854775807
    * solutionDetail  **参数解释**: 修复漏洞的指导意见 **取值范围**: 字符长度0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符长度0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-65534位
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * hostIdList  **参数解释**: 可处置该漏洞的主机ID列表 **取值范围**: 不涉及
    * cveList  **参数解释**: 漏洞关联的cve信息列表 **取值范围**: 不涉及
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512位
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostsNum  hostsNum
    * repairSuccessNum  **参数解释**: 修复成功次数 **取值范围**: 取值0-1000000
    * fixedNum  **参数解释**: 修复数量 **取值范围**: 取值0-1000000
    * ignoredNum  **参数解释**: 忽略数量 **取值范围**: 取值0-1000000
    * verifyNum  **参数解释**: 验证数量 **取值范围**: 取值0-1000000
    * repairPriorityList  **参数解释**: 修复优先级，每个修复优先级对应的主机数量 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'vulId' => null,
        'labelList' => null,
        'repairNecessity' => null,
        'severityLevel' => null,
        'hostNum' => 'int32',
        'unhandleHostNum' => 'int32',
        'scanTime' => 'int64',
        'solutionDetail' => null,
        'url' => null,
        'description' => null,
        'type' => null,
        'hostIdList' => null,
        'cveList' => null,
        'patchUrl' => null,
        'repairPriority' => null,
        'hostsNum' => null,
        'repairSuccessNum' => 'int32',
        'fixedNum' => 'int64',
        'ignoredNum' => 'int64',
        'verifyNum' => 'int32',
        'repairPriorityList' => null
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
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 不涉及
    * repairNecessity  **参数解释**: 漏洞修复的必要性 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostNum  **参数解释**: 受影响服务器台数 **取值范围**: 取值0-2147483647
    * unhandleHostNum  **参数解释**: 未处理主机台数：除已忽略和已修复的主机数量 **取值范围**: 取值0-2147483647
    * scanTime  **参数解释**: 最近扫描时间，时间戳单位：毫秒 **取值范围**: 取值0-9223372036854775807
    * solutionDetail  **参数解释**: 修复漏洞的指导意见 **取值范围**: 字符长度0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符长度0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-65534位
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * hostIdList  **参数解释**: 可处置该漏洞的主机ID列表 **取值范围**: 不涉及
    * cveList  **参数解释**: 漏洞关联的cve信息列表 **取值范围**: 不涉及
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512位
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostsNum  hostsNum
    * repairSuccessNum  **参数解释**: 修复成功次数 **取值范围**: 取值0-1000000
    * fixedNum  **参数解释**: 修复数量 **取值范围**: 取值0-1000000
    * ignoredNum  **参数解释**: 忽略数量 **取值范围**: 取值0-1000000
    * verifyNum  **参数解释**: 验证数量 **取值范围**: 取值0-1000000
    * repairPriorityList  **参数解释**: 修复优先级，每个修复优先级对应的主机数量 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'vulId' => 'vul_id',
            'labelList' => 'label_list',
            'repairNecessity' => 'repair_necessity',
            'severityLevel' => 'severity_level',
            'hostNum' => 'host_num',
            'unhandleHostNum' => 'unhandle_host_num',
            'scanTime' => 'scan_time',
            'solutionDetail' => 'solution_detail',
            'url' => 'url',
            'description' => 'description',
            'type' => 'type',
            'hostIdList' => 'host_id_list',
            'cveList' => 'cve_list',
            'patchUrl' => 'patch_url',
            'repairPriority' => 'repair_priority',
            'hostsNum' => 'hosts_num',
            'repairSuccessNum' => 'repair_success_num',
            'fixedNum' => 'fixed_num',
            'ignoredNum' => 'ignored_num',
            'verifyNum' => 'verify_num',
            'repairPriorityList' => 'repair_priority_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 不涉及
    * repairNecessity  **参数解释**: 漏洞修复的必要性 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostNum  **参数解释**: 受影响服务器台数 **取值范围**: 取值0-2147483647
    * unhandleHostNum  **参数解释**: 未处理主机台数：除已忽略和已修复的主机数量 **取值范围**: 取值0-2147483647
    * scanTime  **参数解释**: 最近扫描时间，时间戳单位：毫秒 **取值范围**: 取值0-9223372036854775807
    * solutionDetail  **参数解释**: 修复漏洞的指导意见 **取值范围**: 字符长度0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符长度0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-65534位
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * hostIdList  **参数解释**: 可处置该漏洞的主机ID列表 **取值范围**: 不涉及
    * cveList  **参数解释**: 漏洞关联的cve信息列表 **取值范围**: 不涉及
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512位
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostsNum  hostsNum
    * repairSuccessNum  **参数解释**: 修复成功次数 **取值范围**: 取值0-1000000
    * fixedNum  **参数解释**: 修复数量 **取值范围**: 取值0-1000000
    * ignoredNum  **参数解释**: 忽略数量 **取值范围**: 取值0-1000000
    * verifyNum  **参数解释**: 验证数量 **取值范围**: 取值0-1000000
    * repairPriorityList  **参数解释**: 修复优先级，每个修复优先级对应的主机数量 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'vulId' => 'setVulId',
            'labelList' => 'setLabelList',
            'repairNecessity' => 'setRepairNecessity',
            'severityLevel' => 'setSeverityLevel',
            'hostNum' => 'setHostNum',
            'unhandleHostNum' => 'setUnhandleHostNum',
            'scanTime' => 'setScanTime',
            'solutionDetail' => 'setSolutionDetail',
            'url' => 'setUrl',
            'description' => 'setDescription',
            'type' => 'setType',
            'hostIdList' => 'setHostIdList',
            'cveList' => 'setCveList',
            'patchUrl' => 'setPatchUrl',
            'repairPriority' => 'setRepairPriority',
            'hostsNum' => 'setHostsNum',
            'repairSuccessNum' => 'setRepairSuccessNum',
            'fixedNum' => 'setFixedNum',
            'ignoredNum' => 'setIgnoredNum',
            'verifyNum' => 'setVerifyNum',
            'repairPriorityList' => 'setRepairPriorityList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
    * labelList  **参数解释**: 漏洞标签列表 **取值范围**: 不涉及
    * repairNecessity  **参数解释**: 漏洞修复的必要性 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * severityLevel  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    * hostNum  **参数解释**: 受影响服务器台数 **取值范围**: 取值0-2147483647
    * unhandleHostNum  **参数解释**: 未处理主机台数：除已忽略和已修复的主机数量 **取值范围**: 取值0-2147483647
    * scanTime  **参数解释**: 最近扫描时间，时间戳单位：毫秒 **取值范围**: 取值0-9223372036854775807
    * solutionDetail  **参数解释**: 修复漏洞的指导意见 **取值范围**: 字符长度0-65534位
    * url  **参数解释**: URL链接 **取值范围**: 字符长度0-2083位
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-65534位
    * type  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * hostIdList  **参数解释**: 可处置该漏洞的主机ID列表 **取值范围**: 不涉及
    * cveList  **参数解释**: 漏洞关联的cve信息列表 **取值范围**: 不涉及
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512位
    * repairPriority  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    * hostsNum  hostsNum
    * repairSuccessNum  **参数解释**: 修复成功次数 **取值范围**: 取值0-1000000
    * fixedNum  **参数解释**: 修复数量 **取值范围**: 取值0-1000000
    * ignoredNum  **参数解释**: 忽略数量 **取值范围**: 取值0-1000000
    * verifyNum  **参数解释**: 验证数量 **取值范围**: 取值0-1000000
    * repairPriorityList  **参数解释**: 修复优先级，每个修复优先级对应的主机数量 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'vulId' => 'getVulId',
            'labelList' => 'getLabelList',
            'repairNecessity' => 'getRepairNecessity',
            'severityLevel' => 'getSeverityLevel',
            'hostNum' => 'getHostNum',
            'unhandleHostNum' => 'getUnhandleHostNum',
            'scanTime' => 'getScanTime',
            'solutionDetail' => 'getSolutionDetail',
            'url' => 'getUrl',
            'description' => 'getDescription',
            'type' => 'getType',
            'hostIdList' => 'getHostIdList',
            'cveList' => 'getCveList',
            'patchUrl' => 'getPatchUrl',
            'repairPriority' => 'getRepairPriority',
            'hostsNum' => 'getHostsNum',
            'repairSuccessNum' => 'getRepairSuccessNum',
            'fixedNum' => 'getFixedNum',
            'ignoredNum' => 'getIgnoredNum',
            'verifyNum' => 'getVerifyNum',
            'repairPriorityList' => 'getRepairPriorityList'
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
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['unhandleHostNum'] = isset($data['unhandleHostNum']) ? $data['unhandleHostNum'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['solutionDetail'] = isset($data['solutionDetail']) ? $data['solutionDetail'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['cveList'] = isset($data['cveList']) ? $data['cveList'] : null;
        $this->container['patchUrl'] = isset($data['patchUrl']) ? $data['patchUrl'] : null;
        $this->container['repairPriority'] = isset($data['repairPriority']) ? $data['repairPriority'] : null;
        $this->container['hostsNum'] = isset($data['hostsNum']) ? $data['hostsNum'] : null;
        $this->container['repairSuccessNum'] = isset($data['repairSuccessNum']) ? $data['repairSuccessNum'] : null;
        $this->container['fixedNum'] = isset($data['fixedNum']) ? $data['fixedNum'] : null;
        $this->container['ignoredNum'] = isset($data['ignoredNum']) ? $data['ignoredNum'] : null;
        $this->container['verifyNum'] = isset($data['verifyNum']) ? $data['verifyNum'] : null;
        $this->container['repairPriorityList'] = isset($data['repairPriorityList']) ? $data['repairPriorityList'] : null;
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
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unhandleHostNum']) && ($this->container['unhandleHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unhandleHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unhandleHostNum']) && ($this->container['unhandleHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'unhandleHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 128)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['patchUrl']) && (mb_strlen($this->container['patchUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'patchUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['patchUrl']) && (mb_strlen($this->container['patchUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'patchUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) > 32)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['repairPriority']) && (mb_strlen($this->container['repairPriority']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairPriority', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairSuccessNum']) && ($this->container['repairSuccessNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'repairSuccessNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['repairSuccessNum']) && ($this->container['repairSuccessNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'repairSuccessNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fixedNum']) && ($this->container['fixedNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'fixedNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['fixedNum']) && ($this->container['fixedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'fixedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ignoredNum']) && ($this->container['ignoredNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'ignoredNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['ignoredNum']) && ($this->container['ignoredNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'ignoredNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['verifyNum']) && ($this->container['verifyNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'verifyNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['verifyNum']) && ($this->container['verifyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'verifyNum', must be bigger than or equal to 0.";
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
    *  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
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
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
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
    *  **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
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
    * @param string|null $vulId **参数解释**: 漏洞ID **取值范围**: 字符长度0-64位
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
    *  **参数解释**: 漏洞标签列表 **取值范围**: 不涉及
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
    * @param string[]|null $labelList **参数解释**: 漏洞标签列表 **取值范围**: 不涉及
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
    *  **参数解释**: 漏洞修复的必要性 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
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
    * @param string|null $repairNecessity **参数解释**: 漏洞修复的必要性 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
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
    *  **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
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
    * @param string|null $severityLevel **参数解释**: 漏洞风险级别 **取值范围**: - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets hostNum
    *  **参数解释**: 受影响服务器台数 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum **参数解释**: 受影响服务器台数 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets unhandleHostNum
    *  **参数解释**: 未处理主机台数：除已忽略和已修复的主机数量 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getUnhandleHostNum()
    {
        return $this->container['unhandleHostNum'];
    }

    /**
    * Sets unhandleHostNum
    *
    * @param int|null $unhandleHostNum **参数解释**: 未处理主机台数：除已忽略和已修复的主机数量 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setUnhandleHostNum($unhandleHostNum)
    {
        $this->container['unhandleHostNum'] = $unhandleHostNum;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**: 最近扫描时间，时间戳单位：毫秒 **取值范围**: 取值0-9223372036854775807
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
    * @param int|null $scanTime **参数解释**: 最近扫描时间，时间戳单位：毫秒 **取值范围**: 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets solutionDetail
    *  **参数解释**: 修复漏洞的指导意见 **取值范围**: 字符长度0-65534位
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
    * @param string|null $solutionDetail **参数解释**: 修复漏洞的指导意见 **取值范围**: 字符长度0-65534位
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
    *  **参数解释**: URL链接 **取值范围**: 字符长度0-2083位
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
    * @param string|null $url **参数解释**: URL链接 **取值范围**: 字符长度0-2083位
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
    *  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-65534位
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
    * @param string|null $description **参数解释**: 漏洞描述 **取值范围**: 字符长度0-65534位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
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
    * @param string|null $type **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets hostIdList
    *  **参数解释**: 可处置该漏洞的主机ID列表 **取值范围**: 不涉及
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList **参数解释**: 可处置该漏洞的主机ID列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets cveList
    *  **参数解释**: 漏洞关联的cve信息列表 **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulInfoCveList[]|null
    */
    public function getCveList()
    {
        return $this->container['cveList'];
    }

    /**
    * Sets cveList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulInfoCveList[]|null $cveList **参数解释**: 漏洞关联的cve信息列表 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setCveList($cveList)
    {
        $this->container['cveList'] = $cveList;
        return $this;
    }

    /**
    * Gets patchUrl
    *  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getPatchUrl()
    {
        return $this->container['patchUrl'];
    }

    /**
    * Sets patchUrl
    *
    * @param string|null $patchUrl **参数解释**: 补丁地址 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setPatchUrl($patchUrl)
    {
        $this->container['patchUrl'] = $patchUrl;
        return $this;
    }

    /**
    * Gets repairPriority
    *  **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
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
    * @param string|null $repairPriority **参数解释**: 修复优先级 **取值范围**: - Critical：紧急 - High：高 - Medium：中 - Low：低
    *
    * @return $this
    */
    public function setRepairPriority($repairPriority)
    {
        $this->container['repairPriority'] = $repairPriority;
        return $this;
    }

    /**
    * Gets hostsNum
    *  hostsNum
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulnerabilityHostNumberInfo|null
    */
    public function getHostsNum()
    {
        return $this->container['hostsNum'];
    }

    /**
    * Sets hostsNum
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulnerabilityHostNumberInfo|null $hostsNum hostsNum
    *
    * @return $this
    */
    public function setHostsNum($hostsNum)
    {
        $this->container['hostsNum'] = $hostsNum;
        return $this;
    }

    /**
    * Gets repairSuccessNum
    *  **参数解释**: 修复成功次数 **取值范围**: 取值0-1000000
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
    * @param int|null $repairSuccessNum **参数解释**: 修复成功次数 **取值范围**: 取值0-1000000
    *
    * @return $this
    */
    public function setRepairSuccessNum($repairSuccessNum)
    {
        $this->container['repairSuccessNum'] = $repairSuccessNum;
        return $this;
    }

    /**
    * Gets fixedNum
    *  **参数解释**: 修复数量 **取值范围**: 取值0-1000000
    *
    * @return int|null
    */
    public function getFixedNum()
    {
        return $this->container['fixedNum'];
    }

    /**
    * Sets fixedNum
    *
    * @param int|null $fixedNum **参数解释**: 修复数量 **取值范围**: 取值0-1000000
    *
    * @return $this
    */
    public function setFixedNum($fixedNum)
    {
        $this->container['fixedNum'] = $fixedNum;
        return $this;
    }

    /**
    * Gets ignoredNum
    *  **参数解释**: 忽略数量 **取值范围**: 取值0-1000000
    *
    * @return int|null
    */
    public function getIgnoredNum()
    {
        return $this->container['ignoredNum'];
    }

    /**
    * Sets ignoredNum
    *
    * @param int|null $ignoredNum **参数解释**: 忽略数量 **取值范围**: 取值0-1000000
    *
    * @return $this
    */
    public function setIgnoredNum($ignoredNum)
    {
        $this->container['ignoredNum'] = $ignoredNum;
        return $this;
    }

    /**
    * Gets verifyNum
    *  **参数解释**: 验证数量 **取值范围**: 取值0-1000000
    *
    * @return int|null
    */
    public function getVerifyNum()
    {
        return $this->container['verifyNum'];
    }

    /**
    * Sets verifyNum
    *
    * @param int|null $verifyNum **参数解释**: 验证数量 **取值范围**: 取值0-1000000
    *
    * @return $this
    */
    public function setVerifyNum($verifyNum)
    {
        $this->container['verifyNum'] = $verifyNum;
        return $this;
    }

    /**
    * Gets repairPriorityList
    *  **参数解释**: 修复优先级，每个修复优先级对应的主机数量 **取值范围**: 不涉及
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RepairPriorityListInfo[]|null
    */
    public function getRepairPriorityList()
    {
        return $this->container['repairPriorityList'];
    }

    /**
    * Sets repairPriorityList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RepairPriorityListInfo[]|null $repairPriorityList **参数解释**: 修复优先级，每个修复优先级对应的主机数量 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setRepairPriorityList($repairPriorityList)
    {
        $this->container['repairPriorityList'] = $repairPriorityList;
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

