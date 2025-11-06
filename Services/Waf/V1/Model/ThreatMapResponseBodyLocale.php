<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThreatMapResponseBodyLocale implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThreatMapResponseBody_locale';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cmdi  **参数解释：** 命令注入攻击，攻击者通过注入恶意命令来执行非授权操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptInjection  **参数解释：** 大模型提示词注入攻击，攻击者通过构造特殊输入来篡改AI模型的提示词 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * anticrawler  **参数解释：** 网站反爬虫策略，用于阻止自动化程序非法获取网站内容 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customCustom  **参数解释：** 精准防护，基于特定规则的定制化安全防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * thirdBotRiver  **参数解释：** 第三方BOT，来自第三方服务的自动化交互程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * robot  **参数解释：** 恶意爬虫，用于非法获取数据或进行攻击的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customIdcIp  **参数解释：** IDC情报，基于数据中心IP地址的威胁情报 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanDirTraversal  **参数解释：** 目录遍历防护，防止攻击者通过目录遍历访问系统文件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * advancedBot  **参数解释：** 高级BOT，具有复杂行为模式的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * xss  **参数解释：** XSS攻击，跨站脚本攻击，攻击者通过注入恶意脚本获取用户信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanHighFreqScan  **参数解释：** 高频扫描封锁，对异常高频请求进行识别和拦截 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * webshell  **参数解释：** 网站木马，攻击者上传的用于远程控制网站的恶意程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cc  **参数解释：** CC攻击，挑战型攻击，通过大量请求耗尽服务器资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * botm  **参数解释：** BOT攻击，利用自动化程序进行的恶意攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * illegal  **参数解释：** 非法请求，违反安全策略或业务规则的请求 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptSensitive  **参数解释：** 大模型提示词合规检测，识别提示词中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sqli  **参数解释：** SQL注入，攻击者通过注入恶意SQL语句来获取或篡改数据 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * lfi  **参数解释：** 本地文件包含，攻击者利用漏洞包含本地文件获取信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antitamper  **参数解释：** 网页防篡改，保护网站内容不被非法修改 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customGeoip  **参数解释：** 地理位置访问控制，基于地理位置的访问限制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rfi  **参数解释：** 远程文件包含，攻击者利用漏洞包含远程文件执行恶意代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vuln  **参数解释：** 其他类型攻击，未归类的安全漏洞或攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmResponseSensitive  **参数解释：** 大模型响应合规检测，识别AI模型输出中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customWhiteblackip  **参数解释：** IP黑白名单，基于IP地址的访问控制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * leakage  **参数解释：** 网站信息泄露，敏感信息意外暴露的安全事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cmdi' => 'string',
            'llmPromptInjection' => 'string',
            'anticrawler' => 'string',
            'customCustom' => 'string',
            'thirdBotRiver' => 'string',
            'robot' => 'string',
            'customIdcIp' => 'string',
            'antiscanDirTraversal' => 'string',
            'advancedBot' => 'string',
            'xss' => 'string',
            'antiscanHighFreqScan' => 'string',
            'webshell' => 'string',
            'cc' => 'string',
            'botm' => 'string',
            'illegal' => 'string',
            'llmPromptSensitive' => 'string',
            'sqli' => 'string',
            'lfi' => 'string',
            'antitamper' => 'string',
            'customGeoip' => 'string',
            'rfi' => 'string',
            'vuln' => 'string',
            'llmResponseSensitive' => 'string',
            'customWhiteblackip' => 'string',
            'leakage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cmdi  **参数解释：** 命令注入攻击，攻击者通过注入恶意命令来执行非授权操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptInjection  **参数解释：** 大模型提示词注入攻击，攻击者通过构造特殊输入来篡改AI模型的提示词 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * anticrawler  **参数解释：** 网站反爬虫策略，用于阻止自动化程序非法获取网站内容 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customCustom  **参数解释：** 精准防护，基于特定规则的定制化安全防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * thirdBotRiver  **参数解释：** 第三方BOT，来自第三方服务的自动化交互程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * robot  **参数解释：** 恶意爬虫，用于非法获取数据或进行攻击的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customIdcIp  **参数解释：** IDC情报，基于数据中心IP地址的威胁情报 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanDirTraversal  **参数解释：** 目录遍历防护，防止攻击者通过目录遍历访问系统文件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * advancedBot  **参数解释：** 高级BOT，具有复杂行为模式的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * xss  **参数解释：** XSS攻击，跨站脚本攻击，攻击者通过注入恶意脚本获取用户信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanHighFreqScan  **参数解释：** 高频扫描封锁，对异常高频请求进行识别和拦截 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * webshell  **参数解释：** 网站木马，攻击者上传的用于远程控制网站的恶意程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cc  **参数解释：** CC攻击，挑战型攻击，通过大量请求耗尽服务器资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * botm  **参数解释：** BOT攻击，利用自动化程序进行的恶意攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * illegal  **参数解释：** 非法请求，违反安全策略或业务规则的请求 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptSensitive  **参数解释：** 大模型提示词合规检测，识别提示词中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sqli  **参数解释：** SQL注入，攻击者通过注入恶意SQL语句来获取或篡改数据 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * lfi  **参数解释：** 本地文件包含，攻击者利用漏洞包含本地文件获取信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antitamper  **参数解释：** 网页防篡改，保护网站内容不被非法修改 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customGeoip  **参数解释：** 地理位置访问控制，基于地理位置的访问限制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rfi  **参数解释：** 远程文件包含，攻击者利用漏洞包含远程文件执行恶意代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vuln  **参数解释：** 其他类型攻击，未归类的安全漏洞或攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmResponseSensitive  **参数解释：** 大模型响应合规检测，识别AI模型输出中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customWhiteblackip  **参数解释：** IP黑白名单，基于IP地址的访问控制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * leakage  **参数解释：** 网站信息泄露，敏感信息意外暴露的安全事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cmdi' => null,
        'llmPromptInjection' => null,
        'anticrawler' => null,
        'customCustom' => null,
        'thirdBotRiver' => null,
        'robot' => null,
        'customIdcIp' => null,
        'antiscanDirTraversal' => null,
        'advancedBot' => null,
        'xss' => null,
        'antiscanHighFreqScan' => null,
        'webshell' => null,
        'cc' => null,
        'botm' => null,
        'illegal' => null,
        'llmPromptSensitive' => null,
        'sqli' => null,
        'lfi' => null,
        'antitamper' => null,
        'customGeoip' => null,
        'rfi' => null,
        'vuln' => null,
        'llmResponseSensitive' => null,
        'customWhiteblackip' => null,
        'leakage' => null
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
    * cmdi  **参数解释：** 命令注入攻击，攻击者通过注入恶意命令来执行非授权操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptInjection  **参数解释：** 大模型提示词注入攻击，攻击者通过构造特殊输入来篡改AI模型的提示词 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * anticrawler  **参数解释：** 网站反爬虫策略，用于阻止自动化程序非法获取网站内容 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customCustom  **参数解释：** 精准防护，基于特定规则的定制化安全防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * thirdBotRiver  **参数解释：** 第三方BOT，来自第三方服务的自动化交互程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * robot  **参数解释：** 恶意爬虫，用于非法获取数据或进行攻击的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customIdcIp  **参数解释：** IDC情报，基于数据中心IP地址的威胁情报 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanDirTraversal  **参数解释：** 目录遍历防护，防止攻击者通过目录遍历访问系统文件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * advancedBot  **参数解释：** 高级BOT，具有复杂行为模式的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * xss  **参数解释：** XSS攻击，跨站脚本攻击，攻击者通过注入恶意脚本获取用户信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanHighFreqScan  **参数解释：** 高频扫描封锁，对异常高频请求进行识别和拦截 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * webshell  **参数解释：** 网站木马，攻击者上传的用于远程控制网站的恶意程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cc  **参数解释：** CC攻击，挑战型攻击，通过大量请求耗尽服务器资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * botm  **参数解释：** BOT攻击，利用自动化程序进行的恶意攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * illegal  **参数解释：** 非法请求，违反安全策略或业务规则的请求 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptSensitive  **参数解释：** 大模型提示词合规检测，识别提示词中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sqli  **参数解释：** SQL注入，攻击者通过注入恶意SQL语句来获取或篡改数据 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * lfi  **参数解释：** 本地文件包含，攻击者利用漏洞包含本地文件获取信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antitamper  **参数解释：** 网页防篡改，保护网站内容不被非法修改 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customGeoip  **参数解释：** 地理位置访问控制，基于地理位置的访问限制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rfi  **参数解释：** 远程文件包含，攻击者利用漏洞包含远程文件执行恶意代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vuln  **参数解释：** 其他类型攻击，未归类的安全漏洞或攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmResponseSensitive  **参数解释：** 大模型响应合规检测，识别AI模型输出中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customWhiteblackip  **参数解释：** IP黑白名单，基于IP地址的访问控制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * leakage  **参数解释：** 网站信息泄露，敏感信息意外暴露的安全事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cmdi' => 'cmdi',
            'llmPromptInjection' => 'llm_prompt_injection',
            'anticrawler' => 'anticrawler',
            'customCustom' => 'custom_custom',
            'thirdBotRiver' => 'third_bot_river',
            'robot' => 'robot',
            'customIdcIp' => 'custom_idc_ip',
            'antiscanDirTraversal' => 'antiscan_dir_traversal',
            'advancedBot' => 'advanced_bot',
            'xss' => 'xss',
            'antiscanHighFreqScan' => 'antiscan_high_freq_scan',
            'webshell' => 'webshell',
            'cc' => 'cc',
            'botm' => 'botm',
            'illegal' => 'illegal',
            'llmPromptSensitive' => 'llm_prompt_sensitive',
            'sqli' => 'sqli',
            'lfi' => 'lfi',
            'antitamper' => 'antitamper',
            'customGeoip' => 'custom_geoip',
            'rfi' => 'rfi',
            'vuln' => 'vuln',
            'llmResponseSensitive' => 'llm_response_sensitive',
            'customWhiteblackip' => 'custom_whiteblackip',
            'leakage' => 'leakage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cmdi  **参数解释：** 命令注入攻击，攻击者通过注入恶意命令来执行非授权操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptInjection  **参数解释：** 大模型提示词注入攻击，攻击者通过构造特殊输入来篡改AI模型的提示词 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * anticrawler  **参数解释：** 网站反爬虫策略，用于阻止自动化程序非法获取网站内容 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customCustom  **参数解释：** 精准防护，基于特定规则的定制化安全防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * thirdBotRiver  **参数解释：** 第三方BOT，来自第三方服务的自动化交互程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * robot  **参数解释：** 恶意爬虫，用于非法获取数据或进行攻击的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customIdcIp  **参数解释：** IDC情报，基于数据中心IP地址的威胁情报 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanDirTraversal  **参数解释：** 目录遍历防护，防止攻击者通过目录遍历访问系统文件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * advancedBot  **参数解释：** 高级BOT，具有复杂行为模式的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * xss  **参数解释：** XSS攻击，跨站脚本攻击，攻击者通过注入恶意脚本获取用户信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanHighFreqScan  **参数解释：** 高频扫描封锁，对异常高频请求进行识别和拦截 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * webshell  **参数解释：** 网站木马，攻击者上传的用于远程控制网站的恶意程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cc  **参数解释：** CC攻击，挑战型攻击，通过大量请求耗尽服务器资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * botm  **参数解释：** BOT攻击，利用自动化程序进行的恶意攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * illegal  **参数解释：** 非法请求，违反安全策略或业务规则的请求 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptSensitive  **参数解释：** 大模型提示词合规检测，识别提示词中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sqli  **参数解释：** SQL注入，攻击者通过注入恶意SQL语句来获取或篡改数据 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * lfi  **参数解释：** 本地文件包含，攻击者利用漏洞包含本地文件获取信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antitamper  **参数解释：** 网页防篡改，保护网站内容不被非法修改 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customGeoip  **参数解释：** 地理位置访问控制，基于地理位置的访问限制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rfi  **参数解释：** 远程文件包含，攻击者利用漏洞包含远程文件执行恶意代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vuln  **参数解释：** 其他类型攻击，未归类的安全漏洞或攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmResponseSensitive  **参数解释：** 大模型响应合规检测，识别AI模型输出中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customWhiteblackip  **参数解释：** IP黑白名单，基于IP地址的访问控制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * leakage  **参数解释：** 网站信息泄露，敏感信息意外暴露的安全事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'cmdi' => 'setCmdi',
            'llmPromptInjection' => 'setLlmPromptInjection',
            'anticrawler' => 'setAnticrawler',
            'customCustom' => 'setCustomCustom',
            'thirdBotRiver' => 'setThirdBotRiver',
            'robot' => 'setRobot',
            'customIdcIp' => 'setCustomIdcIp',
            'antiscanDirTraversal' => 'setAntiscanDirTraversal',
            'advancedBot' => 'setAdvancedBot',
            'xss' => 'setXss',
            'antiscanHighFreqScan' => 'setAntiscanHighFreqScan',
            'webshell' => 'setWebshell',
            'cc' => 'setCc',
            'botm' => 'setBotm',
            'illegal' => 'setIllegal',
            'llmPromptSensitive' => 'setLlmPromptSensitive',
            'sqli' => 'setSqli',
            'lfi' => 'setLfi',
            'antitamper' => 'setAntitamper',
            'customGeoip' => 'setCustomGeoip',
            'rfi' => 'setRfi',
            'vuln' => 'setVuln',
            'llmResponseSensitive' => 'setLlmResponseSensitive',
            'customWhiteblackip' => 'setCustomWhiteblackip',
            'leakage' => 'setLeakage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cmdi  **参数解释：** 命令注入攻击，攻击者通过注入恶意命令来执行非授权操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptInjection  **参数解释：** 大模型提示词注入攻击，攻击者通过构造特殊输入来篡改AI模型的提示词 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * anticrawler  **参数解释：** 网站反爬虫策略，用于阻止自动化程序非法获取网站内容 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customCustom  **参数解释：** 精准防护，基于特定规则的定制化安全防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * thirdBotRiver  **参数解释：** 第三方BOT，来自第三方服务的自动化交互程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * robot  **参数解释：** 恶意爬虫，用于非法获取数据或进行攻击的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customIdcIp  **参数解释：** IDC情报，基于数据中心IP地址的威胁情报 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanDirTraversal  **参数解释：** 目录遍历防护，防止攻击者通过目录遍历访问系统文件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * advancedBot  **参数解释：** 高级BOT，具有复杂行为模式的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * xss  **参数解释：** XSS攻击，跨站脚本攻击，攻击者通过注入恶意脚本获取用户信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antiscanHighFreqScan  **参数解释：** 高频扫描封锁，对异常高频请求进行识别和拦截 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * webshell  **参数解释：** 网站木马，攻击者上传的用于远程控制网站的恶意程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cc  **参数解释：** CC攻击，挑战型攻击，通过大量请求耗尽服务器资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * botm  **参数解释：** BOT攻击，利用自动化程序进行的恶意攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * illegal  **参数解释：** 非法请求，违反安全策略或业务规则的请求 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmPromptSensitive  **参数解释：** 大模型提示词合规检测，识别提示词中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sqli  **参数解释：** SQL注入，攻击者通过注入恶意SQL语句来获取或篡改数据 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * lfi  **参数解释：** 本地文件包含，攻击者利用漏洞包含本地文件获取信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * antitamper  **参数解释：** 网页防篡改，保护网站内容不被非法修改 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customGeoip  **参数解释：** 地理位置访问控制，基于地理位置的访问限制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rfi  **参数解释：** 远程文件包含，攻击者利用漏洞包含远程文件执行恶意代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * vuln  **参数解释：** 其他类型攻击，未归类的安全漏洞或攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * llmResponseSensitive  **参数解释：** 大模型响应合规检测，识别AI模型输出中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * customWhiteblackip  **参数解释：** IP黑白名单，基于IP地址的访问控制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * leakage  **参数解释：** 网站信息泄露，敏感信息意外暴露的安全事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'cmdi' => 'getCmdi',
            'llmPromptInjection' => 'getLlmPromptInjection',
            'anticrawler' => 'getAnticrawler',
            'customCustom' => 'getCustomCustom',
            'thirdBotRiver' => 'getThirdBotRiver',
            'robot' => 'getRobot',
            'customIdcIp' => 'getCustomIdcIp',
            'antiscanDirTraversal' => 'getAntiscanDirTraversal',
            'advancedBot' => 'getAdvancedBot',
            'xss' => 'getXss',
            'antiscanHighFreqScan' => 'getAntiscanHighFreqScan',
            'webshell' => 'getWebshell',
            'cc' => 'getCc',
            'botm' => 'getBotm',
            'illegal' => 'getIllegal',
            'llmPromptSensitive' => 'getLlmPromptSensitive',
            'sqli' => 'getSqli',
            'lfi' => 'getLfi',
            'antitamper' => 'getAntitamper',
            'customGeoip' => 'getCustomGeoip',
            'rfi' => 'getRfi',
            'vuln' => 'getVuln',
            'llmResponseSensitive' => 'getLlmResponseSensitive',
            'customWhiteblackip' => 'getCustomWhiteblackip',
            'leakage' => 'getLeakage'
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
        $this->container['cmdi'] = isset($data['cmdi']) ? $data['cmdi'] : null;
        $this->container['llmPromptInjection'] = isset($data['llmPromptInjection']) ? $data['llmPromptInjection'] : null;
        $this->container['anticrawler'] = isset($data['anticrawler']) ? $data['anticrawler'] : null;
        $this->container['customCustom'] = isset($data['customCustom']) ? $data['customCustom'] : null;
        $this->container['thirdBotRiver'] = isset($data['thirdBotRiver']) ? $data['thirdBotRiver'] : null;
        $this->container['robot'] = isset($data['robot']) ? $data['robot'] : null;
        $this->container['customIdcIp'] = isset($data['customIdcIp']) ? $data['customIdcIp'] : null;
        $this->container['antiscanDirTraversal'] = isset($data['antiscanDirTraversal']) ? $data['antiscanDirTraversal'] : null;
        $this->container['advancedBot'] = isset($data['advancedBot']) ? $data['advancedBot'] : null;
        $this->container['xss'] = isset($data['xss']) ? $data['xss'] : null;
        $this->container['antiscanHighFreqScan'] = isset($data['antiscanHighFreqScan']) ? $data['antiscanHighFreqScan'] : null;
        $this->container['webshell'] = isset($data['webshell']) ? $data['webshell'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['botm'] = isset($data['botm']) ? $data['botm'] : null;
        $this->container['illegal'] = isset($data['illegal']) ? $data['illegal'] : null;
        $this->container['llmPromptSensitive'] = isset($data['llmPromptSensitive']) ? $data['llmPromptSensitive'] : null;
        $this->container['sqli'] = isset($data['sqli']) ? $data['sqli'] : null;
        $this->container['lfi'] = isset($data['lfi']) ? $data['lfi'] : null;
        $this->container['antitamper'] = isset($data['antitamper']) ? $data['antitamper'] : null;
        $this->container['customGeoip'] = isset($data['customGeoip']) ? $data['customGeoip'] : null;
        $this->container['rfi'] = isset($data['rfi']) ? $data['rfi'] : null;
        $this->container['vuln'] = isset($data['vuln']) ? $data['vuln'] : null;
        $this->container['llmResponseSensitive'] = isset($data['llmResponseSensitive']) ? $data['llmResponseSensitive'] : null;
        $this->container['customWhiteblackip'] = isset($data['customWhiteblackip']) ? $data['customWhiteblackip'] : null;
        $this->container['leakage'] = isset($data['leakage']) ? $data['leakage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets cmdi
    *  **参数解释：** 命令注入攻击，攻击者通过注入恶意命令来执行非授权操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCmdi()
    {
        return $this->container['cmdi'];
    }

    /**
    * Sets cmdi
    *
    * @param string|null $cmdi **参数解释：** 命令注入攻击，攻击者通过注入恶意命令来执行非授权操作 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCmdi($cmdi)
    {
        $this->container['cmdi'] = $cmdi;
        return $this;
    }

    /**
    * Gets llmPromptInjection
    *  **参数解释：** 大模型提示词注入攻击，攻击者通过构造特殊输入来篡改AI模型的提示词 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLlmPromptInjection()
    {
        return $this->container['llmPromptInjection'];
    }

    /**
    * Sets llmPromptInjection
    *
    * @param string|null $llmPromptInjection **参数解释：** 大模型提示词注入攻击，攻击者通过构造特殊输入来篡改AI模型的提示词 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLlmPromptInjection($llmPromptInjection)
    {
        $this->container['llmPromptInjection'] = $llmPromptInjection;
        return $this;
    }

    /**
    * Gets anticrawler
    *  **参数解释：** 网站反爬虫策略，用于阻止自动化程序非法获取网站内容 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAnticrawler()
    {
        return $this->container['anticrawler'];
    }

    /**
    * Sets anticrawler
    *
    * @param string|null $anticrawler **参数解释：** 网站反爬虫策略，用于阻止自动化程序非法获取网站内容 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAnticrawler($anticrawler)
    {
        $this->container['anticrawler'] = $anticrawler;
        return $this;
    }

    /**
    * Gets customCustom
    *  **参数解释：** 精准防护，基于特定规则的定制化安全防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCustomCustom()
    {
        return $this->container['customCustom'];
    }

    /**
    * Sets customCustom
    *
    * @param string|null $customCustom **参数解释：** 精准防护，基于特定规则的定制化安全防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCustomCustom($customCustom)
    {
        $this->container['customCustom'] = $customCustom;
        return $this;
    }

    /**
    * Gets thirdBotRiver
    *  **参数解释：** 第三方BOT，来自第三方服务的自动化交互程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getThirdBotRiver()
    {
        return $this->container['thirdBotRiver'];
    }

    /**
    * Sets thirdBotRiver
    *
    * @param string|null $thirdBotRiver **参数解释：** 第三方BOT，来自第三方服务的自动化交互程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setThirdBotRiver($thirdBotRiver)
    {
        $this->container['thirdBotRiver'] = $thirdBotRiver;
        return $this;
    }

    /**
    * Gets robot
    *  **参数解释：** 恶意爬虫，用于非法获取数据或进行攻击的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRobot()
    {
        return $this->container['robot'];
    }

    /**
    * Sets robot
    *
    * @param string|null $robot **参数解释：** 恶意爬虫，用于非法获取数据或进行攻击的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRobot($robot)
    {
        $this->container['robot'] = $robot;
        return $this;
    }

    /**
    * Gets customIdcIp
    *  **参数解释：** IDC情报，基于数据中心IP地址的威胁情报 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCustomIdcIp()
    {
        return $this->container['customIdcIp'];
    }

    /**
    * Sets customIdcIp
    *
    * @param string|null $customIdcIp **参数解释：** IDC情报，基于数据中心IP地址的威胁情报 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCustomIdcIp($customIdcIp)
    {
        $this->container['customIdcIp'] = $customIdcIp;
        return $this;
    }

    /**
    * Gets antiscanDirTraversal
    *  **参数解释：** 目录遍历防护，防止攻击者通过目录遍历访问系统文件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAntiscanDirTraversal()
    {
        return $this->container['antiscanDirTraversal'];
    }

    /**
    * Sets antiscanDirTraversal
    *
    * @param string|null $antiscanDirTraversal **参数解释：** 目录遍历防护，防止攻击者通过目录遍历访问系统文件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAntiscanDirTraversal($antiscanDirTraversal)
    {
        $this->container['antiscanDirTraversal'] = $antiscanDirTraversal;
        return $this;
    }

    /**
    * Gets advancedBot
    *  **参数解释：** 高级BOT，具有复杂行为模式的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAdvancedBot()
    {
        return $this->container['advancedBot'];
    }

    /**
    * Sets advancedBot
    *
    * @param string|null $advancedBot **参数解释：** 高级BOT，具有复杂行为模式的自动化程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAdvancedBot($advancedBot)
    {
        $this->container['advancedBot'] = $advancedBot;
        return $this;
    }

    /**
    * Gets xss
    *  **参数解释：** XSS攻击，跨站脚本攻击，攻击者通过注入恶意脚本获取用户信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getXss()
    {
        return $this->container['xss'];
    }

    /**
    * Sets xss
    *
    * @param string|null $xss **参数解释：** XSS攻击，跨站脚本攻击，攻击者通过注入恶意脚本获取用户信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setXss($xss)
    {
        $this->container['xss'] = $xss;
        return $this;
    }

    /**
    * Gets antiscanHighFreqScan
    *  **参数解释：** 高频扫描封锁，对异常高频请求进行识别和拦截 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAntiscanHighFreqScan()
    {
        return $this->container['antiscanHighFreqScan'];
    }

    /**
    * Sets antiscanHighFreqScan
    *
    * @param string|null $antiscanHighFreqScan **参数解释：** 高频扫描封锁，对异常高频请求进行识别和拦截 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAntiscanHighFreqScan($antiscanHighFreqScan)
    {
        $this->container['antiscanHighFreqScan'] = $antiscanHighFreqScan;
        return $this;
    }

    /**
    * Gets webshell
    *  **参数解释：** 网站木马，攻击者上传的用于远程控制网站的恶意程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getWebshell()
    {
        return $this->container['webshell'];
    }

    /**
    * Sets webshell
    *
    * @param string|null $webshell **参数解释：** 网站木马，攻击者上传的用于远程控制网站的恶意程序 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setWebshell($webshell)
    {
        $this->container['webshell'] = $webshell;
        return $this;
    }

    /**
    * Gets cc
    *  **参数解释：** CC攻击，挑战型攻击，通过大量请求耗尽服务器资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param string|null $cc **参数解释：** CC攻击，挑战型攻击，通过大量请求耗尽服务器资源 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
        return $this;
    }

    /**
    * Gets botm
    *  **参数解释：** BOT攻击，利用自动化程序进行的恶意攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getBotm()
    {
        return $this->container['botm'];
    }

    /**
    * Sets botm
    *
    * @param string|null $botm **参数解释：** BOT攻击，利用自动化程序进行的恶意攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setBotm($botm)
    {
        $this->container['botm'] = $botm;
        return $this;
    }

    /**
    * Gets illegal
    *  **参数解释：** 非法请求，违反安全策略或业务规则的请求 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getIllegal()
    {
        return $this->container['illegal'];
    }

    /**
    * Sets illegal
    *
    * @param string|null $illegal **参数解释：** 非法请求，违反安全策略或业务规则的请求 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIllegal($illegal)
    {
        $this->container['illegal'] = $illegal;
        return $this;
    }

    /**
    * Gets llmPromptSensitive
    *  **参数解释：** 大模型提示词合规检测，识别提示词中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLlmPromptSensitive()
    {
        return $this->container['llmPromptSensitive'];
    }

    /**
    * Sets llmPromptSensitive
    *
    * @param string|null $llmPromptSensitive **参数解释：** 大模型提示词合规检测，识别提示词中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLlmPromptSensitive($llmPromptSensitive)
    {
        $this->container['llmPromptSensitive'] = $llmPromptSensitive;
        return $this;
    }

    /**
    * Gets sqli
    *  **参数解释：** SQL注入，攻击者通过注入恶意SQL语句来获取或篡改数据 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSqli()
    {
        return $this->container['sqli'];
    }

    /**
    * Sets sqli
    *
    * @param string|null $sqli **参数解释：** SQL注入，攻击者通过注入恶意SQL语句来获取或篡改数据 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSqli($sqli)
    {
        $this->container['sqli'] = $sqli;
        return $this;
    }

    /**
    * Gets lfi
    *  **参数解释：** 本地文件包含，攻击者利用漏洞包含本地文件获取信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLfi()
    {
        return $this->container['lfi'];
    }

    /**
    * Sets lfi
    *
    * @param string|null $lfi **参数解释：** 本地文件包含，攻击者利用漏洞包含本地文件获取信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLfi($lfi)
    {
        $this->container['lfi'] = $lfi;
        return $this;
    }

    /**
    * Gets antitamper
    *  **参数解释：** 网页防篡改，保护网站内容不被非法修改 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAntitamper()
    {
        return $this->container['antitamper'];
    }

    /**
    * Sets antitamper
    *
    * @param string|null $antitamper **参数解释：** 网页防篡改，保护网站内容不被非法修改 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAntitamper($antitamper)
    {
        $this->container['antitamper'] = $antitamper;
        return $this;
    }

    /**
    * Gets customGeoip
    *  **参数解释：** 地理位置访问控制，基于地理位置的访问限制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCustomGeoip()
    {
        return $this->container['customGeoip'];
    }

    /**
    * Sets customGeoip
    *
    * @param string|null $customGeoip **参数解释：** 地理位置访问控制，基于地理位置的访问限制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCustomGeoip($customGeoip)
    {
        $this->container['customGeoip'] = $customGeoip;
        return $this;
    }

    /**
    * Gets rfi
    *  **参数解释：** 远程文件包含，攻击者利用漏洞包含远程文件执行恶意代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRfi()
    {
        return $this->container['rfi'];
    }

    /**
    * Sets rfi
    *
    * @param string|null $rfi **参数解释：** 远程文件包含，攻击者利用漏洞包含远程文件执行恶意代码 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRfi($rfi)
    {
        $this->container['rfi'] = $rfi;
        return $this;
    }

    /**
    * Gets vuln
    *  **参数解释：** 其他类型攻击，未归类的安全漏洞或攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getVuln()
    {
        return $this->container['vuln'];
    }

    /**
    * Sets vuln
    *
    * @param string|null $vuln **参数解释：** 其他类型攻击，未归类的安全漏洞或攻击 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setVuln($vuln)
    {
        $this->container['vuln'] = $vuln;
        return $this;
    }

    /**
    * Gets llmResponseSensitive
    *  **参数解释：** 大模型响应合规检测，识别AI模型输出中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLlmResponseSensitive()
    {
        return $this->container['llmResponseSensitive'];
    }

    /**
    * Sets llmResponseSensitive
    *
    * @param string|null $llmResponseSensitive **参数解释：** 大模型响应合规检测，识别AI模型输出中的敏感信息 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLlmResponseSensitive($llmResponseSensitive)
    {
        $this->container['llmResponseSensitive'] = $llmResponseSensitive;
        return $this;
    }

    /**
    * Gets customWhiteblackip
    *  **参数解释：** IP黑白名单，基于IP地址的访问控制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCustomWhiteblackip()
    {
        return $this->container['customWhiteblackip'];
    }

    /**
    * Sets customWhiteblackip
    *
    * @param string|null $customWhiteblackip **参数解释：** IP黑白名单，基于IP地址的访问控制策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCustomWhiteblackip($customWhiteblackip)
    {
        $this->container['customWhiteblackip'] = $customWhiteblackip;
        return $this;
    }

    /**
    * Gets leakage
    *  **参数解释：** 网站信息泄露，敏感信息意外暴露的安全事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getLeakage()
    {
        return $this->container['leakage'];
    }

    /**
    * Sets leakage
    *
    * @param string|null $leakage **参数解释：** 网站信息泄露，敏感信息意外暴露的安全事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLeakage($leakage)
    {
        $this->container['leakage'] = $leakage;
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

