<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 客户端IP所属地理位置展示语言，默认值为en-us **约束限制：** 不涉及 **取值范围：** - zh-cn 中文 - en-us 英文 **默认取值：** en-us
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  **参数解释：** 查询日志的时间范围，recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准 **约束限制：** 不涉及 **取值范围：**  - yesterday：昨天  - today：今天  - 3days：近3天   - 1week：近7天   - 1month：近30天  **默认取值：** 不涉及
    * from  **参数解释：** 起始时间(毫秒时间戳)，需要和to同时使用 **约束限制：** from <= to **取值范围：** from ~ to 最大范围30天 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间(毫秒时间戳)，需要和from同时使用 **约束限制：** from ~ to 最大范围30天 **取值范围：** 不能超过当天的结束时间 **默认取值：** 不涉及
    * ids  **参数解释：** 防护事件id列表，支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 防护事件id列表（排除搜索），支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 攻击类型 **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * nattacks  **参数解释：** 攻击类型（排除搜索） **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * rules  **参数解释：** 规则id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 规则id列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 客户端IP列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 客户端IP列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 客户端IP，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** url列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** url列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** URL，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 防护动作列表 **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * nactions  **参数解释：** 防护动作列表（排除搜索） **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * domain  **参数解释：** 域名，支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ndomain  **参数解释：** 域名（排除搜索），支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domains  **参数解释：** 域名列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipCountries  **参数解释：** 客户端IP所属国家列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipCountries  **参数解释：** 客户端IP所属国家列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRegions  **参数解释：** 客户端IP所属省份列表，仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipRegions  **参数解释：** 客户端IP所属身份列表（排除搜索），仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCodes  **参数解释：** 响应码列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * payload  **参数解释：** 恶意负载（被WAF识别的攻击片段）： Web 基础防护(SQL注入、XSS、命令注入等)：被WAF识别的攻击片段 CC 攻击：命中规则的请求次数 精准防护、IP黑白名单、地理访问控制：空 攻击惩罚：命中攻击惩罚的用户标识 恶意爬虫：命中规则的 User-Agent 字段 网页反爬虫：JS 脚本事件：js_verified（JS 脚本验证通过事件）和 js_challenge（发送 JS 验证内容事件）。如果请求验证失败则为空。 网站信息泄露：敏感信息过滤为过滤类型，既电话号码,电子邮箱,身份证号；响应码拦截则为拦截的响应码值。 BOT攻击：命中规则的User-Agent等异常请求特征，或AI行为检测结果的评分细节 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 域名id列表，从获取防护网站列表（ListHost）接口获取域名id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 引擎实例id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0, 总数据量] **默认取值：** 10
    * sortKey  **参数解释：** 排序字段，默认attack_time，选择其他字段时，会按照指定字段和attack_time共同排序 **约束限制：** 不涉及 **取值范围：** - attack_time 攻击时间 - sort_ip 客户端IP - host 域名 - geo_str 地理位置 - component 应用组件 - rule 规则ID - attack 事件类型（攻击类型） **默认取值：** attack_time
    * sortDirection  **参数解释：** 排序方向 **约束限制：** 不涉及 **取值范围：** - desc 降序 - asc 升序 **默认取值：** desc
    * queryMode  **参数解释：** 查询模式，仅影响参数sip、url **约束限制：** 不涉及 **取值范围：** - equal 精确查询 - include 模糊查询 **默认取值：** include
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'xLanguage' => 'string',
            'enterpriseProjectId' => 'string',
            'recent' => 'string',
            'from' => 'int',
            'to' => 'int',
            'ids' => 'string[]',
            'nids' => 'string[]',
            'attacks' => 'string[]',
            'nattacks' => 'string[]',
            'rules' => 'string[]',
            'nrules' => 'string[]',
            'sips' => 'string[]',
            'nsips' => 'string[]',
            'sip' => 'string',
            'urls' => 'string[]',
            'nurls' => 'string[]',
            'url' => 'string',
            'actions' => 'string[]',
            'nactions' => 'string[]',
            'domain' => 'string',
            'ndomain' => 'string',
            'domains' => 'string[]',
            'ipCountries' => 'string[]',
            'nipCountries' => 'string[]',
            'ipRegions' => 'string[]',
            'nipRegions' => 'string[]',
            'responseCodes' => 'string[]',
            'payload' => 'string',
            'hosts' => 'string[]',
            'instances' => 'string[]',
            'page' => 'int',
            'pagesize' => 'int',
            'sortKey' => 'string',
            'sortDirection' => 'string',
            'queryMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 客户端IP所属地理位置展示语言，默认值为en-us **约束限制：** 不涉及 **取值范围：** - zh-cn 中文 - en-us 英文 **默认取值：** en-us
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  **参数解释：** 查询日志的时间范围，recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准 **约束限制：** 不涉及 **取值范围：**  - yesterday：昨天  - today：今天  - 3days：近3天   - 1week：近7天   - 1month：近30天  **默认取值：** 不涉及
    * from  **参数解释：** 起始时间(毫秒时间戳)，需要和to同时使用 **约束限制：** from <= to **取值范围：** from ~ to 最大范围30天 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间(毫秒时间戳)，需要和from同时使用 **约束限制：** from ~ to 最大范围30天 **取值范围：** 不能超过当天的结束时间 **默认取值：** 不涉及
    * ids  **参数解释：** 防护事件id列表，支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 防护事件id列表（排除搜索），支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 攻击类型 **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * nattacks  **参数解释：** 攻击类型（排除搜索） **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * rules  **参数解释：** 规则id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 规则id列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 客户端IP列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 客户端IP列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 客户端IP，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** url列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** url列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** URL，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 防护动作列表 **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * nactions  **参数解释：** 防护动作列表（排除搜索） **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * domain  **参数解释：** 域名，支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ndomain  **参数解释：** 域名（排除搜索），支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domains  **参数解释：** 域名列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipCountries  **参数解释：** 客户端IP所属国家列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipCountries  **参数解释：** 客户端IP所属国家列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRegions  **参数解释：** 客户端IP所属省份列表，仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipRegions  **参数解释：** 客户端IP所属身份列表（排除搜索），仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCodes  **参数解释：** 响应码列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * payload  **参数解释：** 恶意负载（被WAF识别的攻击片段）： Web 基础防护(SQL注入、XSS、命令注入等)：被WAF识别的攻击片段 CC 攻击：命中规则的请求次数 精准防护、IP黑白名单、地理访问控制：空 攻击惩罚：命中攻击惩罚的用户标识 恶意爬虫：命中规则的 User-Agent 字段 网页反爬虫：JS 脚本事件：js_verified（JS 脚本验证通过事件）和 js_challenge（发送 JS 验证内容事件）。如果请求验证失败则为空。 网站信息泄露：敏感信息过滤为过滤类型，既电话号码,电子邮箱,身份证号；响应码拦截则为拦截的响应码值。 BOT攻击：命中规则的User-Agent等异常请求特征，或AI行为检测结果的评分细节 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 域名id列表，从获取防护网站列表（ListHost）接口获取域名id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 引擎实例id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0, 总数据量] **默认取值：** 10
    * sortKey  **参数解释：** 排序字段，默认attack_time，选择其他字段时，会按照指定字段和attack_time共同排序 **约束限制：** 不涉及 **取值范围：** - attack_time 攻击时间 - sort_ip 客户端IP - host 域名 - geo_str 地理位置 - component 应用组件 - rule 规则ID - attack 事件类型（攻击类型） **默认取值：** attack_time
    * sortDirection  **参数解释：** 排序方向 **约束限制：** 不涉及 **取值范围：** - desc 降序 - asc 升序 **默认取值：** desc
    * queryMode  **参数解释：** 查询模式，仅影响参数sip、url **约束限制：** 不涉及 **取值范围：** - equal 精确查询 - include 模糊查询 **默认取值：** include
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'xLanguage' => null,
        'enterpriseProjectId' => null,
        'recent' => null,
        'from' => 'int64',
        'to' => 'int64',
        'ids' => null,
        'nids' => null,
        'attacks' => null,
        'nattacks' => null,
        'rules' => null,
        'nrules' => null,
        'sips' => null,
        'nsips' => null,
        'sip' => null,
        'urls' => null,
        'nurls' => null,
        'url' => null,
        'actions' => null,
        'nactions' => null,
        'domain' => null,
        'ndomain' => null,
        'domains' => null,
        'ipCountries' => null,
        'nipCountries' => null,
        'ipRegions' => null,
        'nipRegions' => null,
        'responseCodes' => null,
        'payload' => null,
        'hosts' => null,
        'instances' => null,
        'page' => null,
        'pagesize' => null,
        'sortKey' => null,
        'sortDirection' => null,
        'queryMode' => null
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
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 客户端IP所属地理位置展示语言，默认值为en-us **约束限制：** 不涉及 **取值范围：** - zh-cn 中文 - en-us 英文 **默认取值：** en-us
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  **参数解释：** 查询日志的时间范围，recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准 **约束限制：** 不涉及 **取值范围：**  - yesterday：昨天  - today：今天  - 3days：近3天   - 1week：近7天   - 1month：近30天  **默认取值：** 不涉及
    * from  **参数解释：** 起始时间(毫秒时间戳)，需要和to同时使用 **约束限制：** from <= to **取值范围：** from ~ to 最大范围30天 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间(毫秒时间戳)，需要和from同时使用 **约束限制：** from ~ to 最大范围30天 **取值范围：** 不能超过当天的结束时间 **默认取值：** 不涉及
    * ids  **参数解释：** 防护事件id列表，支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 防护事件id列表（排除搜索），支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 攻击类型 **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * nattacks  **参数解释：** 攻击类型（排除搜索） **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * rules  **参数解释：** 规则id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 规则id列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 客户端IP列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 客户端IP列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 客户端IP，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** url列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** url列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** URL，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 防护动作列表 **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * nactions  **参数解释：** 防护动作列表（排除搜索） **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * domain  **参数解释：** 域名，支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ndomain  **参数解释：** 域名（排除搜索），支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domains  **参数解释：** 域名列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipCountries  **参数解释：** 客户端IP所属国家列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipCountries  **参数解释：** 客户端IP所属国家列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRegions  **参数解释：** 客户端IP所属省份列表，仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipRegions  **参数解释：** 客户端IP所属身份列表（排除搜索），仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCodes  **参数解释：** 响应码列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * payload  **参数解释：** 恶意负载（被WAF识别的攻击片段）： Web 基础防护(SQL注入、XSS、命令注入等)：被WAF识别的攻击片段 CC 攻击：命中规则的请求次数 精准防护、IP黑白名单、地理访问控制：空 攻击惩罚：命中攻击惩罚的用户标识 恶意爬虫：命中规则的 User-Agent 字段 网页反爬虫：JS 脚本事件：js_verified（JS 脚本验证通过事件）和 js_challenge（发送 JS 验证内容事件）。如果请求验证失败则为空。 网站信息泄露：敏感信息过滤为过滤类型，既电话号码,电子邮箱,身份证号；响应码拦截则为拦截的响应码值。 BOT攻击：命中规则的User-Agent等异常请求特征，或AI行为检测结果的评分细节 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 域名id列表，从获取防护网站列表（ListHost）接口获取域名id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 引擎实例id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0, 总数据量] **默认取值：** 10
    * sortKey  **参数解释：** 排序字段，默认attack_time，选择其他字段时，会按照指定字段和attack_time共同排序 **约束限制：** 不涉及 **取值范围：** - attack_time 攻击时间 - sort_ip 客户端IP - host 域名 - geo_str 地理位置 - component 应用组件 - rule 规则ID - attack 事件类型（攻击类型） **默认取值：** attack_time
    * sortDirection  **参数解释：** 排序方向 **约束限制：** 不涉及 **取值范围：** - desc 降序 - asc 升序 **默认取值：** desc
    * queryMode  **参数解释：** 查询模式，仅影响参数sip、url **约束限制：** 不涉及 **取值范围：** - equal 精确查询 - include 模糊查询 **默认取值：** include
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'xLanguage' => 'X-Language',
            'enterpriseProjectId' => 'enterprise_project_id',
            'recent' => 'recent',
            'from' => 'from',
            'to' => 'to',
            'ids' => 'ids',
            'nids' => 'nids',
            'attacks' => 'attacks',
            'nattacks' => 'nattacks',
            'rules' => 'rules',
            'nrules' => 'nrules',
            'sips' => 'sips',
            'nsips' => 'nsips',
            'sip' => 'sip',
            'urls' => 'urls',
            'nurls' => 'nurls',
            'url' => 'url',
            'actions' => 'actions',
            'nactions' => 'nactions',
            'domain' => 'domain',
            'ndomain' => 'ndomain',
            'domains' => 'domains',
            'ipCountries' => 'ip_countries',
            'nipCountries' => 'nip_countries',
            'ipRegions' => 'ip_regions',
            'nipRegions' => 'nip_regions',
            'responseCodes' => 'response_codes',
            'payload' => 'payload',
            'hosts' => 'hosts',
            'instances' => 'instances',
            'page' => 'page',
            'pagesize' => 'pagesize',
            'sortKey' => 'sort_key',
            'sortDirection' => 'sort_direction',
            'queryMode' => 'query_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 客户端IP所属地理位置展示语言，默认值为en-us **约束限制：** 不涉及 **取值范围：** - zh-cn 中文 - en-us 英文 **默认取值：** en-us
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  **参数解释：** 查询日志的时间范围，recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准 **约束限制：** 不涉及 **取值范围：**  - yesterday：昨天  - today：今天  - 3days：近3天   - 1week：近7天   - 1month：近30天  **默认取值：** 不涉及
    * from  **参数解释：** 起始时间(毫秒时间戳)，需要和to同时使用 **约束限制：** from <= to **取值范围：** from ~ to 最大范围30天 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间(毫秒时间戳)，需要和from同时使用 **约束限制：** from ~ to 最大范围30天 **取值范围：** 不能超过当天的结束时间 **默认取值：** 不涉及
    * ids  **参数解释：** 防护事件id列表，支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 防护事件id列表（排除搜索），支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 攻击类型 **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * nattacks  **参数解释：** 攻击类型（排除搜索） **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * rules  **参数解释：** 规则id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 规则id列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 客户端IP列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 客户端IP列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 客户端IP，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** url列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** url列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** URL，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 防护动作列表 **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * nactions  **参数解释：** 防护动作列表（排除搜索） **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * domain  **参数解释：** 域名，支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ndomain  **参数解释：** 域名（排除搜索），支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domains  **参数解释：** 域名列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipCountries  **参数解释：** 客户端IP所属国家列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipCountries  **参数解释：** 客户端IP所属国家列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRegions  **参数解释：** 客户端IP所属省份列表，仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipRegions  **参数解释：** 客户端IP所属身份列表（排除搜索），仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCodes  **参数解释：** 响应码列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * payload  **参数解释：** 恶意负载（被WAF识别的攻击片段）： Web 基础防护(SQL注入、XSS、命令注入等)：被WAF识别的攻击片段 CC 攻击：命中规则的请求次数 精准防护、IP黑白名单、地理访问控制：空 攻击惩罚：命中攻击惩罚的用户标识 恶意爬虫：命中规则的 User-Agent 字段 网页反爬虫：JS 脚本事件：js_verified（JS 脚本验证通过事件）和 js_challenge（发送 JS 验证内容事件）。如果请求验证失败则为空。 网站信息泄露：敏感信息过滤为过滤类型，既电话号码,电子邮箱,身份证号；响应码拦截则为拦截的响应码值。 BOT攻击：命中规则的User-Agent等异常请求特征，或AI行为检测结果的评分细节 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 域名id列表，从获取防护网站列表（ListHost）接口获取域名id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 引擎实例id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0, 总数据量] **默认取值：** 10
    * sortKey  **参数解释：** 排序字段，默认attack_time，选择其他字段时，会按照指定字段和attack_time共同排序 **约束限制：** 不涉及 **取值范围：** - attack_time 攻击时间 - sort_ip 客户端IP - host 域名 - geo_str 地理位置 - component 应用组件 - rule 规则ID - attack 事件类型（攻击类型） **默认取值：** attack_time
    * sortDirection  **参数解释：** 排序方向 **约束限制：** 不涉及 **取值范围：** - desc 降序 - asc 升序 **默认取值：** desc
    * queryMode  **参数解释：** 查询模式，仅影响参数sip、url **约束限制：** 不涉及 **取值范围：** - equal 精确查询 - include 模糊查询 **默认取值：** include
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'xLanguage' => 'setXLanguage',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'recent' => 'setRecent',
            'from' => 'setFrom',
            'to' => 'setTo',
            'ids' => 'setIds',
            'nids' => 'setNids',
            'attacks' => 'setAttacks',
            'nattacks' => 'setNattacks',
            'rules' => 'setRules',
            'nrules' => 'setNrules',
            'sips' => 'setSips',
            'nsips' => 'setNsips',
            'sip' => 'setSip',
            'urls' => 'setUrls',
            'nurls' => 'setNurls',
            'url' => 'setUrl',
            'actions' => 'setActions',
            'nactions' => 'setNactions',
            'domain' => 'setDomain',
            'ndomain' => 'setNdomain',
            'domains' => 'setDomains',
            'ipCountries' => 'setIpCountries',
            'nipCountries' => 'setNipCountries',
            'ipRegions' => 'setIpRegions',
            'nipRegions' => 'setNipRegions',
            'responseCodes' => 'setResponseCodes',
            'payload' => 'setPayload',
            'hosts' => 'setHosts',
            'instances' => 'setInstances',
            'page' => 'setPage',
            'pagesize' => 'setPagesize',
            'sortKey' => 'setSortKey',
            'sortDirection' => 'setSortDirection',
            'queryMode' => 'setQueryMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 客户端IP所属地理位置展示语言，默认值为en-us **约束限制：** 不涉及 **取值范围：** - zh-cn 中文 - en-us 英文 **默认取值：** en-us
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  **参数解释：** 查询日志的时间范围，recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准 **约束限制：** 不涉及 **取值范围：**  - yesterday：昨天  - today：今天  - 3days：近3天   - 1week：近7天   - 1month：近30天  **默认取值：** 不涉及
    * from  **参数解释：** 起始时间(毫秒时间戳)，需要和to同时使用 **约束限制：** from <= to **取值范围：** from ~ to 最大范围30天 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间(毫秒时间戳)，需要和from同时使用 **约束限制：** from ~ to 最大范围30天 **取值范围：** 不能超过当天的结束时间 **默认取值：** 不涉及
    * ids  **参数解释：** 防护事件id列表，支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 防护事件id列表（排除搜索），支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 攻击类型 **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * nattacks  **参数解释：** 攻击类型（排除搜索） **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    * rules  **参数解释：** 规则id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 规则id列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 客户端IP列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 客户端IP列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 客户端IP，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** url列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** url列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** URL，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 防护动作列表 **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * nactions  **参数解释：** 防护动作列表（排除搜索） **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    * domain  **参数解释：** 域名，支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ndomain  **参数解释：** 域名（排除搜索），支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    * domains  **参数解释：** 域名列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipCountries  **参数解释：** 客户端IP所属国家列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipCountries  **参数解释：** 客户端IP所属国家列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ipRegions  **参数解释：** 客户端IP所属省份列表，仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nipRegions  **参数解释：** 客户端IP所属身份列表（排除搜索），仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * responseCodes  **参数解释：** 响应码列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * payload  **参数解释：** 恶意负载（被WAF识别的攻击片段）： Web 基础防护(SQL注入、XSS、命令注入等)：被WAF识别的攻击片段 CC 攻击：命中规则的请求次数 精准防护、IP黑白名单、地理访问控制：空 攻击惩罚：命中攻击惩罚的用户标识 恶意爬虫：命中规则的 User-Agent 字段 网页反爬虫：JS 脚本事件：js_verified（JS 脚本验证通过事件）和 js_challenge（发送 JS 验证内容事件）。如果请求验证失败则为空。 网站信息泄露：敏感信息过滤为过滤类型，既电话号码,电子邮箱,身份证号；响应码拦截则为拦截的响应码值。 BOT攻击：命中规则的User-Agent等异常请求特征，或AI行为检测结果的评分细节 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 域名id列表，从获取防护网站列表（ListHost）接口获取域名id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 引擎实例id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * page  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    * pagesize  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0, 总数据量] **默认取值：** 10
    * sortKey  **参数解释：** 排序字段，默认attack_time，选择其他字段时，会按照指定字段和attack_time共同排序 **约束限制：** 不涉及 **取值范围：** - attack_time 攻击时间 - sort_ip 客户端IP - host 域名 - geo_str 地理位置 - component 应用组件 - rule 规则ID - attack 事件类型（攻击类型） **默认取值：** attack_time
    * sortDirection  **参数解释：** 排序方向 **约束限制：** 不涉及 **取值范围：** - desc 降序 - asc 升序 **默认取值：** desc
    * queryMode  **参数解释：** 查询模式，仅影响参数sip、url **约束限制：** 不涉及 **取值范围：** - equal 精确查询 - include 模糊查询 **默认取值：** include
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'xLanguage' => 'getXLanguage',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'recent' => 'getRecent',
            'from' => 'getFrom',
            'to' => 'getTo',
            'ids' => 'getIds',
            'nids' => 'getNids',
            'attacks' => 'getAttacks',
            'nattacks' => 'getNattacks',
            'rules' => 'getRules',
            'nrules' => 'getNrules',
            'sips' => 'getSips',
            'nsips' => 'getNsips',
            'sip' => 'getSip',
            'urls' => 'getUrls',
            'nurls' => 'getNurls',
            'url' => 'getUrl',
            'actions' => 'getActions',
            'nactions' => 'getNactions',
            'domain' => 'getDomain',
            'ndomain' => 'getNdomain',
            'domains' => 'getDomains',
            'ipCountries' => 'getIpCountries',
            'nipCountries' => 'getNipCountries',
            'ipRegions' => 'getIpRegions',
            'nipRegions' => 'getNipRegions',
            'responseCodes' => 'getResponseCodes',
            'payload' => 'getPayload',
            'hosts' => 'getHosts',
            'instances' => 'getInstances',
            'page' => 'getPage',
            'pagesize' => 'getPagesize',
            'sortKey' => 'getSortKey',
            'sortDirection' => 'getSortDirection',
            'queryMode' => 'getQueryMode'
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    const RECENT_YESTERDAY = 'yesterday';
    const RECENT_TODAY = 'today';
    const RECENT__3DAYS = '3days';
    const RECENT__1WEEK = '1week';
    const RECENT__1MONTH = '1month';
    const ATTACKS_XSS = 'xss';
    const ATTACKS_BOTM = 'botm';
    const ATTACKS_WEBSHELL = 'webshell';
    const ATTACKS_VULN = 'vuln';
    const ATTACKS_SQLI = 'sqli';
    const ATTACKS_ROBOT = 'robot';
    const ATTACKS_RFI = 'rfi';
    const ATTACKS_RCE = 'rce';
    const ATTACKS_PTR = 'ptr';
    const ATTACKS_LFI = 'lfi';
    const ATTACKS_ANTILEAKAGE = 'antileakage';
    const ATTACKS_IPRANK = 'iprank';
    const ATTACKS_CUSTOM_WHITEBLACKIP = 'custom_whiteblackip';
    const ATTACKS_CUSTOM_WHITEIP = 'custom_whiteip';
    const ATTACKS_CUSTOM_BLACKIP = 'custom_blackip';
    const ATTACKS_CUSTOM_ROBOT = 'custom_robot';
    const ATTACKS_CUSTOM_GEOIP = 'custom_geoip';
    const ATTACKS_CUSTOM_IDC_IP = 'custom_idc_ip';
    const ATTACKS_CUSTOM_CUSTOM = 'custom_custom';
    const ATTACKS_CMDI = 'cmdi';
    const ATTACKS_CC = 'cc';
    const ATTACKS_ANTITAMPER = 'antitamper';
    const ATTACKS_ANTICRAWLER = 'anticrawler';
    const ATTACKS_THIRD_BOT_RIVER = 'third_bot_river';
    const ATTACKS_ANTISCAN_HIGH_FREQ_SCAN = 'antiscan_high_freq_scan';
    const ATTACKS_ANTISCAN_DIR_TRAVERSAL = 'antiscan_dir_traversal';
    const ATTACKS_ILLEGAL = 'illegal';
    const ATTACKS_FOLLOWED_ACTION = 'followed_action';
    const ATTACKS_ADVANCED_BOT = 'advanced_bot';
    const ATTACKS_LLM_PROMPT_INJECTION = 'llm_prompt_injection';
    const ATTACKS_LLM_PROMPT_SENSITIVE = 'llm_prompt_sensitive';
    const ATTACKS_LLM_RESPONSE_SENSITIVE = 'llm_response_sensitive';
    const NATTACKS_XSS = 'xss';
    const NATTACKS_BOTM = 'botm';
    const NATTACKS_WEBSHELL = 'webshell';
    const NATTACKS_VULN = 'vuln';
    const NATTACKS_SQLI = 'sqli';
    const NATTACKS_ROBOT = 'robot';
    const NATTACKS_RFI = 'rfi';
    const NATTACKS_RCE = 'rce';
    const NATTACKS_PTR = 'ptr';
    const NATTACKS_LFI = 'lfi';
    const NATTACKS_ANTILEAKAGE = 'antileakage';
    const NATTACKS_IPRANK = 'iprank';
    const NATTACKS_CUSTOM_WHITEBLACKIP = 'custom_whiteblackip';
    const NATTACKS_CUSTOM_WHITEIP = 'custom_whiteip';
    const NATTACKS_CUSTOM_BLACKIP = 'custom_blackip';
    const NATTACKS_CUSTOM_ROBOT = 'custom_robot';
    const NATTACKS_CUSTOM_GEOIP = 'custom_geoip';
    const NATTACKS_CUSTOM_IDC_IP = 'custom_idc_ip';
    const NATTACKS_CUSTOM_CUSTOM = 'custom_custom';
    const NATTACKS_CMDI = 'cmdi';
    const NATTACKS_CC = 'cc';
    const NATTACKS_ANTITAMPER = 'antitamper';
    const NATTACKS_ANTICRAWLER = 'anticrawler';
    const NATTACKS_THIRD_BOT_RIVER = 'third_bot_river';
    const NATTACKS_ANTISCAN_HIGH_FREQ_SCAN = 'antiscan_high_freq_scan';
    const NATTACKS_ANTISCAN_DIR_TRAVERSAL = 'antiscan_dir_traversal';
    const NATTACKS_ILLEGAL = 'illegal';
    const NATTACKS_FOLLOWED_ACTION = 'followed_action';
    const NATTACKS_ADVANCED_BOT = 'advanced_bot';
    const NATTACKS_LLM_PROMPT_INJECTION = 'llm_prompt_injection';
    const NATTACKS_LLM_PROMPT_SENSITIVE = 'llm_prompt_sensitive';
    const NATTACKS_LLM_RESPONSE_SENSITIVE = 'llm_response_sensitive';
    const ACTIONS_BLOCK = 'block';
    const ACTIONS_PASS = 'pass';
    const ACTIONS_LOG = 'log';
    const ACTIONS_CAPTCHA = 'captcha';
    const ACTIONS_CACHE = 'cache';
    const ACTIONS_MASK = 'mask';
    const ACTIONS_JS_CHALLENGE = 'js_challenge';
    const ACTIONS_ADVANCED_CAPTCHA = 'advanced_captcha';
    const ACTIONS_ABORT_RESPONSE = 'abort_response';
    const ACTIONS_DESENSITIZE = 'desensitize';
    const NACTIONS_BLOCK = 'block';
    const NACTIONS_PASS = 'pass';
    const NACTIONS_LOG = 'log';
    const NACTIONS_CAPTCHA = 'captcha';
    const NACTIONS_CACHE = 'cache';
    const NACTIONS_MASK = 'mask';
    const NACTIONS_JS_CHALLENGE = 'js_challenge';
    const NACTIONS_ADVANCED_CAPTCHA = 'advanced_captcha';
    const NACTIONS_ABORT_RESPONSE = 'abort_response';
    const NACTIONS_DESENSITIZE = 'desensitize';
    const SORT_KEY_ATTACK_TIME = 'attack_time';
    const SORT_KEY_SORT_IP = 'sort_ip';
    const SORT_KEY_HOST = 'host';
    const SORT_KEY_GEO_STR = 'geo_str';
    const SORT_KEY_COMPONENT = 'component';
    const SORT_KEY_RULE = 'rule';
    const SORT_KEY_ATTACK = 'attack';
    const SORT_DIRECTION_DESC = 'desc';
    const SORT_DIRECTION_ASC = 'asc';
    const QUERY_MODE_EQUAL = 'equal';
    const QUERY_MODE__INCLUDE = 'include';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRecentAllowableValues()
    {
        return [
            self::RECENT_YESTERDAY,
            self::RECENT_TODAY,
            self::RECENT__3DAYS,
            self::RECENT__1WEEK,
            self::RECENT__1MONTH,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAttacksAllowableValues()
    {
        return [
            self::ATTACKS_XSS,
            self::ATTACKS_BOTM,
            self::ATTACKS_WEBSHELL,
            self::ATTACKS_VULN,
            self::ATTACKS_SQLI,
            self::ATTACKS_ROBOT,
            self::ATTACKS_RFI,
            self::ATTACKS_RCE,
            self::ATTACKS_PTR,
            self::ATTACKS_LFI,
            self::ATTACKS_ANTILEAKAGE,
            self::ATTACKS_IPRANK,
            self::ATTACKS_CUSTOM_WHITEBLACKIP,
            self::ATTACKS_CUSTOM_WHITEIP,
            self::ATTACKS_CUSTOM_BLACKIP,
            self::ATTACKS_CUSTOM_ROBOT,
            self::ATTACKS_CUSTOM_GEOIP,
            self::ATTACKS_CUSTOM_IDC_IP,
            self::ATTACKS_CUSTOM_CUSTOM,
            self::ATTACKS_CMDI,
            self::ATTACKS_CC,
            self::ATTACKS_ANTITAMPER,
            self::ATTACKS_ANTICRAWLER,
            self::ATTACKS_THIRD_BOT_RIVER,
            self::ATTACKS_ANTISCAN_HIGH_FREQ_SCAN,
            self::ATTACKS_ANTISCAN_DIR_TRAVERSAL,
            self::ATTACKS_ILLEGAL,
            self::ATTACKS_FOLLOWED_ACTION,
            self::ATTACKS_ADVANCED_BOT,
            self::ATTACKS_LLM_PROMPT_INJECTION,
            self::ATTACKS_LLM_PROMPT_SENSITIVE,
            self::ATTACKS_LLM_RESPONSE_SENSITIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNattacksAllowableValues()
    {
        return [
            self::NATTACKS_XSS,
            self::NATTACKS_BOTM,
            self::NATTACKS_WEBSHELL,
            self::NATTACKS_VULN,
            self::NATTACKS_SQLI,
            self::NATTACKS_ROBOT,
            self::NATTACKS_RFI,
            self::NATTACKS_RCE,
            self::NATTACKS_PTR,
            self::NATTACKS_LFI,
            self::NATTACKS_ANTILEAKAGE,
            self::NATTACKS_IPRANK,
            self::NATTACKS_CUSTOM_WHITEBLACKIP,
            self::NATTACKS_CUSTOM_WHITEIP,
            self::NATTACKS_CUSTOM_BLACKIP,
            self::NATTACKS_CUSTOM_ROBOT,
            self::NATTACKS_CUSTOM_GEOIP,
            self::NATTACKS_CUSTOM_IDC_IP,
            self::NATTACKS_CUSTOM_CUSTOM,
            self::NATTACKS_CMDI,
            self::NATTACKS_CC,
            self::NATTACKS_ANTITAMPER,
            self::NATTACKS_ANTICRAWLER,
            self::NATTACKS_THIRD_BOT_RIVER,
            self::NATTACKS_ANTISCAN_HIGH_FREQ_SCAN,
            self::NATTACKS_ANTISCAN_DIR_TRAVERSAL,
            self::NATTACKS_ILLEGAL,
            self::NATTACKS_FOLLOWED_ACTION,
            self::NATTACKS_ADVANCED_BOT,
            self::NATTACKS_LLM_PROMPT_INJECTION,
            self::NATTACKS_LLM_PROMPT_SENSITIVE,
            self::NATTACKS_LLM_RESPONSE_SENSITIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionsAllowableValues()
    {
        return [
            self::ACTIONS_BLOCK,
            self::ACTIONS_PASS,
            self::ACTIONS_LOG,
            self::ACTIONS_CAPTCHA,
            self::ACTIONS_CACHE,
            self::ACTIONS_MASK,
            self::ACTIONS_JS_CHALLENGE,
            self::ACTIONS_ADVANCED_CAPTCHA,
            self::ACTIONS_ABORT_RESPONSE,
            self::ACTIONS_DESENSITIZE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNactionsAllowableValues()
    {
        return [
            self::NACTIONS_BLOCK,
            self::NACTIONS_PASS,
            self::NACTIONS_LOG,
            self::NACTIONS_CAPTCHA,
            self::NACTIONS_CACHE,
            self::NACTIONS_MASK,
            self::NACTIONS_JS_CHALLENGE,
            self::NACTIONS_ADVANCED_CAPTCHA,
            self::NACTIONS_ABORT_RESPONSE,
            self::NACTIONS_DESENSITIZE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_ATTACK_TIME,
            self::SORT_KEY_SORT_IP,
            self::SORT_KEY_HOST,
            self::SORT_KEY_GEO_STR,
            self::SORT_KEY_COMPONENT,
            self::SORT_KEY_RULE,
            self::SORT_KEY_ATTACK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirectionAllowableValues()
    {
        return [
            self::SORT_DIRECTION_DESC,
            self::SORT_DIRECTION_ASC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQueryModeAllowableValues()
    {
        return [
            self::QUERY_MODE_EQUAL,
            self::QUERY_MODE__INCLUDE,
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['recent'] = isset($data['recent']) ? $data['recent'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['nids'] = isset($data['nids']) ? $data['nids'] : null;
        $this->container['attacks'] = isset($data['attacks']) ? $data['attacks'] : null;
        $this->container['nattacks'] = isset($data['nattacks']) ? $data['nattacks'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['nrules'] = isset($data['nrules']) ? $data['nrules'] : null;
        $this->container['sips'] = isset($data['sips']) ? $data['sips'] : null;
        $this->container['nsips'] = isset($data['nsips']) ? $data['nsips'] : null;
        $this->container['sip'] = isset($data['sip']) ? $data['sip'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['nurls'] = isset($data['nurls']) ? $data['nurls'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['nactions'] = isset($data['nactions']) ? $data['nactions'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['ndomain'] = isset($data['ndomain']) ? $data['ndomain'] : null;
        $this->container['domains'] = isset($data['domains']) ? $data['domains'] : null;
        $this->container['ipCountries'] = isset($data['ipCountries']) ? $data['ipCountries'] : null;
        $this->container['nipCountries'] = isset($data['nipCountries']) ? $data['nipCountries'] : null;
        $this->container['ipRegions'] = isset($data['ipRegions']) ? $data['ipRegions'] : null;
        $this->container['nipRegions'] = isset($data['nipRegions']) ? $data['nipRegions'] : null;
        $this->container['responseCodes'] = isset($data['responseCodes']) ? $data['responseCodes'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pagesize'] = isset($data['pagesize']) ? $data['pagesize'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDirection'] = isset($data['sortDirection']) ? $data['sortDirection'] : null;
        $this->container['queryMode'] = isset($data['queryMode']) ? $data['queryMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRecentAllowableValues();
                if (!is_null($this->container['recent']) && !in_array($this->container['recent'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recent', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortDirectionAllowableValues();
                if (!is_null($this->container['sortDirection']) && !in_array($this->container['sortDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getQueryModeAllowableValues();
                if (!is_null($this->container['queryMode']) && !in_array($this->container['queryMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'queryMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets contentType
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets xLanguage
    *  **参数解释：** 客户端IP所属地理位置展示语言，默认值为en-us **约束限制：** 不涉及 **取值范围：** - zh-cn 中文 - en-us 英文 **默认取值：** en-us
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释：** 客户端IP所属地理位置展示语言，默认值为en-us **约束限制：** 不涉及 **取值范围：** - zh-cn 中文 - en-us 英文 **默认取值：** en-us
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
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
    * @param string|null $enterpriseProjectId 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets recent
    *  **参数解释：** 查询日志的时间范围，recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准 **约束限制：** 不涉及 **取值范围：**  - yesterday：昨天  - today：今天  - 3days：近3天   - 1week：近7天   - 1month：近30天  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRecent()
    {
        return $this->container['recent'];
    }

    /**
    * Sets recent
    *
    * @param string|null $recent **参数解释：** 查询日志的时间范围，recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准 **约束限制：** 不涉及 **取值范围：**  - yesterday：昨天  - today：今天  - 3days：近3天   - 1week：近7天   - 1month：近30天  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRecent($recent)
    {
        $this->container['recent'] = $recent;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释：** 起始时间(毫秒时间戳)，需要和to同时使用 **约束限制：** from <= to **取值范围：** from ~ to 最大范围30天 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from **参数解释：** 起始时间(毫秒时间戳)，需要和to同时使用 **约束限制：** from <= to **取值范围：** from ~ to 最大范围30天 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释：** 结束时间(毫秒时间戳)，需要和from同时使用 **约束限制：** from ~ to 最大范围30天 **取值范围：** 不能超过当天的结束时间 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to **参数解释：** 结束时间(毫秒时间戳)，需要和from同时使用 **约束限制：** from ~ to 最大范围30天 **取值范围：** 不能超过当天的结束时间 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets ids
    *  **参数解释：** 防护事件id列表，支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[]|null $ids **参数解释：** 防护事件id列表，支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets nids
    *  **参数解释：** 防护事件id列表（排除搜索），支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNids()
    {
        return $this->container['nids'];
    }

    /**
    * Sets nids
    *
    * @param string[]|null $nids **参数解释：** 防护事件id列表（排除搜索），支持模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNids($nids)
    {
        $this->container['nids'] = $nids;
        return $this;
    }

    /**
    * Gets attacks
    *  **参数解释：** 攻击类型 **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getAttacks()
    {
        return $this->container['attacks'];
    }

    /**
    * Sets attacks
    *
    * @param string[]|null $attacks **参数解释：** 攻击类型 **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAttacks($attacks)
    {
        $this->container['attacks'] = $attacks;
        return $this;
    }

    /**
    * Gets nattacks
    *  **参数解释：** 攻击类型（排除搜索） **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNattacks()
    {
        return $this->container['nattacks'];
    }

    /**
    * Sets nattacks
    *
    * @param string[]|null $nattacks **参数解释：** 攻击类型（排除搜索） **约束限制：** 不涉及 **取值范围：** - xss：XSS攻击  - botm：BOT攻击 - webshell：网站木马  - vuln：其他漏洞攻击 - sqli：sql注入攻击  - robot：恶意爬虫  - rfi：远程文件包含  - rce：远程代码执行 - ptr：目录遍历 - lfi：本地文件包含 - antileakage：网站信息泄漏  - iprank：IP信誉库 - custom_whiteblackip：IP黑白名单 - custom_whiteip：白名单 - custom_blackip：黑名单 - custom_robot：扫描器爬虫 - custom_geoip：地理访问控制 - custom_idc_ip：IDC情报 - custom_custom：精准防护  - cmdi：命令注入攻击  - cc：cc攻击  - antitamper：网页防篡改  - anticrawler：网站反爬虫   - third_bot_river：第三方反爬虫 - antiscan_high_freq_scan：高频扫描封禁 - antiscan_dir_traversal：目录遍历防护 - illegal：非法请求 - followed_action：攻击惩罚 - advanced_bot：BOT管理 - llm_prompt_injection：提示词注入攻击 - llm_prompt_sensitive：提示词违规 - llm_response_sensitive：响应违规 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNattacks($nattacks)
    {
        $this->container['nattacks'] = $nattacks;
        return $this;
    }

    /**
    * Gets rules
    *  **参数解释：** 规则id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param string[]|null $rules **参数解释：** 规则id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets nrules
    *  **参数解释：** 规则id列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNrules()
    {
        return $this->container['nrules'];
    }

    /**
    * Sets nrules
    *
    * @param string[]|null $nrules **参数解释：** 规则id列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNrules($nrules)
    {
        $this->container['nrules'] = $nrules;
        return $this;
    }

    /**
    * Gets sips
    *  **参数解释：** 客户端IP列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getSips()
    {
        return $this->container['sips'];
    }

    /**
    * Sets sips
    *
    * @param string[]|null $sips **参数解释：** 客户端IP列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSips($sips)
    {
        $this->container['sips'] = $sips;
        return $this;
    }

    /**
    * Gets nsips
    *  **参数解释：** 客户端IP列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNsips()
    {
        return $this->container['nsips'];
    }

    /**
    * Sets nsips
    *
    * @param string[]|null $nsips **参数解释：** 客户端IP列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNsips($nsips)
    {
        $this->container['nsips'] = $nsips;
        return $this;
    }

    /**
    * Gets sip
    *  **参数解释：** 客户端IP，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
    * Sets sip
    *
    * @param string|null $sip **参数解释：** 客户端IP，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSip($sip)
    {
        $this->container['sip'] = $sip;
        return $this;
    }

    /**
    * Gets urls
    *  **参数解释：** url列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
    * Sets urls
    *
    * @param string[]|null $urls **参数解释：** url列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;
        return $this;
    }

    /**
    * Gets nurls
    *  **参数解释：** url列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNurls()
    {
        return $this->container['nurls'];
    }

    /**
    * Sets nurls
    *
    * @param string[]|null $nurls **参数解释：** url列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNurls($nurls)
    {
        $this->container['nurls'] = $nurls;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释：** URL，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $url **参数解释：** URL，当query_mode为\"equal\"时为精确查询，否则模糊查询 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释：** 防护动作列表 **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions **参数解释：** 防护动作列表 **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets nactions
    *  **参数解释：** 防护动作列表（排除搜索） **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNactions()
    {
        return $this->container['nactions'];
    }

    /**
    * Sets nactions
    *
    * @param string[]|null $nactions **参数解释：** 防护动作列表（排除搜索） **约束限制：** 不涉及 **取值范围：** - block：拦截 - pass：放行 - log：仅记录 - captcha：人机验证 - cache：不匹配 - mask：过滤 - js_challenge：JS挑战 - advanced_captcha：高级人机验证 - abort_response：中断响应 - desensitize：脱敏 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNactions($nactions)
    {
        $this->container['nactions'] = $nactions;
        return $this;
    }

    /**
    * Gets domain
    *  **参数解释：** 域名，支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain **参数解释：** 域名，支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets ndomain
    *  **参数解释：** 域名（排除搜索），支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getNdomain()
    {
        return $this->container['ndomain'];
    }

    /**
    * Sets ndomain
    *
    * @param string|null $ndomain **参数解释：** 域名（排除搜索），支持模糊查询 **约束限制：** domain和ndomain不可同时查询，当两个都存在时以domain为准 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNdomain($ndomain)
    {
        $this->container['ndomain'] = $ndomain;
        return $this;
    }

    /**
    * Gets domains
    *  **参数解释：** 域名列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getDomains()
    {
        return $this->container['domains'];
    }

    /**
    * Sets domains
    *
    * @param string[]|null $domains **参数解释：** 域名列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomains($domains)
    {
        $this->container['domains'] = $domains;
        return $this;
    }

    /**
    * Gets ipCountries
    *  **参数解释：** 客户端IP所属国家列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getIpCountries()
    {
        return $this->container['ipCountries'];
    }

    /**
    * Sets ipCountries
    *
    * @param string[]|null $ipCountries **参数解释：** 客户端IP所属国家列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIpCountries($ipCountries)
    {
        $this->container['ipCountries'] = $ipCountries;
        return $this;
    }

    /**
    * Gets nipCountries
    *  **参数解释：** 客户端IP所属国家列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNipCountries()
    {
        return $this->container['nipCountries'];
    }

    /**
    * Sets nipCountries
    *
    * @param string[]|null $nipCountries **参数解释：** 客户端IP所属国家列表（排除搜索） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNipCountries($nipCountries)
    {
        $this->container['nipCountries'] = $nipCountries;
        return $this;
    }

    /**
    * Gets ipRegions
    *  **参数解释：** 客户端IP所属省份列表，仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getIpRegions()
    {
        return $this->container['ipRegions'];
    }

    /**
    * Sets ipRegions
    *
    * @param string[]|null $ipRegions **参数解释：** 客户端IP所属省份列表，仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIpRegions($ipRegions)
    {
        $this->container['ipRegions'] = $ipRegions;
        return $this;
    }

    /**
    * Gets nipRegions
    *  **参数解释：** 客户端IP所属身份列表（排除搜索），仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNipRegions()
    {
        return $this->container['nipRegions'];
    }

    /**
    * Sets nipRegions
    *
    * @param string[]|null $nipRegions **参数解释：** 客户端IP所属身份列表（排除搜索），仅中国省份生效 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNipRegions($nipRegions)
    {
        $this->container['nipRegions'] = $nipRegions;
        return $this;
    }

    /**
    * Gets responseCodes
    *  **参数解释：** 响应码列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getResponseCodes()
    {
        return $this->container['responseCodes'];
    }

    /**
    * Sets responseCodes
    *
    * @param string[]|null $responseCodes **参数解释：** 响应码列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setResponseCodes($responseCodes)
    {
        $this->container['responseCodes'] = $responseCodes;
        return $this;
    }

    /**
    * Gets payload
    *  **参数解释：** 恶意负载（被WAF识别的攻击片段）： Web 基础防护(SQL注入、XSS、命令注入等)：被WAF识别的攻击片段 CC 攻击：命中规则的请求次数 精准防护、IP黑白名单、地理访问控制：空 攻击惩罚：命中攻击惩罚的用户标识 恶意爬虫：命中规则的 User-Agent 字段 网页反爬虫：JS 脚本事件：js_verified（JS 脚本验证通过事件）和 js_challenge（发送 JS 验证内容事件）。如果请求验证失败则为空。 网站信息泄露：敏感信息过滤为过滤类型，既电话号码,电子邮箱,身份证号；响应码拦截则为拦截的响应码值。 BOT攻击：命中规则的User-Agent等异常请求特征，或AI行为检测结果的评分细节 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
    * Sets payload
    *
    * @param string|null $payload **参数解释：** 恶意负载（被WAF识别的攻击片段）： Web 基础防护(SQL注入、XSS、命令注入等)：被WAF识别的攻击片段 CC 攻击：命中规则的请求次数 精准防护、IP黑白名单、地理访问控制：空 攻击惩罚：命中攻击惩罚的用户标识 恶意爬虫：命中规则的 User-Agent 字段 网页反爬虫：JS 脚本事件：js_verified（JS 脚本验证通过事件）和 js_challenge（发送 JS 验证内容事件）。如果请求验证失败则为空。 网站信息泄露：敏感信息过滤为过滤类型，既电话号码,电子邮箱,身份证号；响应码拦截则为拦截的响应码值。 BOT攻击：命中规则的User-Agent等异常请求特征，或AI行为检测结果的评分细节 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;
        return $this;
    }

    /**
    * Gets hosts
    *  **参数解释：** 域名id列表，从获取防护网站列表（ListHost）接口获取域名id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string[]|null $hosts **参数解释：** 域名id列表，从获取防护网站列表（ListHost）接口获取域名id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets instances
    *  **参数解释：** 引擎实例id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param string[]|null $instances **参数解释：** 引擎实例id列表 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets page
    *  **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page **参数解释：** 分页查询时，返回第几页数据 **约束限制：** 不涉及 **取值范围：** page参数的实际有效范围取决于总数据量和pagesize的取值，不能大于总页数 **默认取值：** 1
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pagesize
    *  **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0, 总数据量] **默认取值：** 10
    *
    * @return int|null
    */
    public function getPagesize()
    {
        return $this->container['pagesize'];
    }

    /**
    * Sets pagesize
    *
    * @param int|null $pagesize **参数解释：** 分页查询时，每页包含的结果条数 **约束限制：** 不涉及 **取值范围：** [0, 总数据量] **默认取值：** 10
    *
    * @return $this
    */
    public function setPagesize($pagesize)
    {
        $this->container['pagesize'] = $pagesize;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释：** 排序字段，默认attack_time，选择其他字段时，会按照指定字段和attack_time共同排序 **约束限制：** 不涉及 **取值范围：** - attack_time 攻击时间 - sort_ip 客户端IP - host 域名 - geo_str 地理位置 - component 应用组件 - rule 规则ID - attack 事件类型（攻击类型） **默认取值：** attack_time
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释：** 排序字段，默认attack_time，选择其他字段时，会按照指定字段和attack_time共同排序 **约束限制：** 不涉及 **取值范围：** - attack_time 攻击时间 - sort_ip 客户端IP - host 域名 - geo_str 地理位置 - component 应用组件 - rule 规则ID - attack 事件类型（攻击类型） **默认取值：** attack_time
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDirection
    *  **参数解释：** 排序方向 **约束限制：** 不涉及 **取值范围：** - desc 降序 - asc 升序 **默认取值：** desc
    *
    * @return string|null
    */
    public function getSortDirection()
    {
        return $this->container['sortDirection'];
    }

    /**
    * Sets sortDirection
    *
    * @param string|null $sortDirection **参数解释：** 排序方向 **约束限制：** 不涉及 **取值范围：** - desc 降序 - asc 升序 **默认取值：** desc
    *
    * @return $this
    */
    public function setSortDirection($sortDirection)
    {
        $this->container['sortDirection'] = $sortDirection;
        return $this;
    }

    /**
    * Gets queryMode
    *  **参数解释：** 查询模式，仅影响参数sip、url **约束限制：** 不涉及 **取值范围：** - equal 精确查询 - include 模糊查询 **默认取值：** include
    *
    * @return string|null
    */
    public function getQueryMode()
    {
        return $this->container['queryMode'];
    }

    /**
    * Sets queryMode
    *
    * @param string|null $queryMode **参数解释：** 查询模式，仅影响参数sip、url **约束限制：** 不涉及 **取值范围：** - equal 精确查询 - include 模糊查询 **默认取值：** include
    *
    * @return $this
    */
    public function setQueryMode($queryMode)
    {
        $this->container['queryMode'] = $queryMode;
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

