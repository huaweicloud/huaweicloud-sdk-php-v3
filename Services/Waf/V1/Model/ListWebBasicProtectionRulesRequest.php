<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWebBasicProtectionRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWebBasicProtectionRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 语言，默认值为zh-cn。zh-cn（中文）/en-us（英文）。 **约束限制：** 不涉及 **取值范围：** - zh-cn：中文 - en-us：英文  **默认取值：** - zh-cn
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * offset  **参数解释：** 分页查询的起始位置，表示从第几条记录开始返回（从1开始计数）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 1
    * limit  **参数解释：** 分页查询的单页返回数量，控制每次请求返回的记录条数。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    * from  **参数解释：** 起始时间（13位毫秒时间戳），需要和to同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳），需要和from同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * level  **参数解释：** 规则集的防护严格程度。规则集（宽松）下对业务的误报率降低，但漏报率可能会增高；而规则集（严格）下对业务的误报率可能会增高，但漏报率降低。 **约束限制：** 不涉及 **取值范围：** - 1：宽松 - 2：中等 - 3：严格  **默认取值：** 不涉及
    * id  **参数解释：** 规则ID，规则的唯一标识。 **约束限制：** 不涉及 **取值范围：** 长度为6个字符 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * riskLevel  **参数解释：** 危险等级 **约束限制：** 不涉及 **取值范围：** - 1：高危 - 2：中危 - 3：低危  **默认取值：** 不涉及
    * protectionTypeNames  **参数解释：** 防护类型 **约束限制：** 不涉及 **取值范围：** - vuln：其他 - xss：跨站脚本 - cmdi：命令注入 - lfi：本地文件包含 - rfi：远程文件包含 - webshell：网站木马 - robot：恶意爬虫 - sqli：SQL注入  **默认取值：** 不涉及
    * applicationTypeNames  **参数解释：** 应用类型 **约束限制：** 不涉及 **取值范围：** 请参见WAF控制台，Web基础防护规则详情页面的应用类型。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'xLanguage' => 'string',
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'from' => 'int',
            'to' => 'int',
            'level' => 'int',
            'id' => 'string',
            'description' => 'string',
            'cveNumber' => 'string',
            'riskLevel' => 'int',
            'protectionTypeNames' => 'string',
            'applicationTypeNames' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 语言，默认值为zh-cn。zh-cn（中文）/en-us（英文）。 **约束限制：** 不涉及 **取值范围：** - zh-cn：中文 - en-us：英文  **默认取值：** - zh-cn
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * offset  **参数解释：** 分页查询的起始位置，表示从第几条记录开始返回（从1开始计数）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 1
    * limit  **参数解释：** 分页查询的单页返回数量，控制每次请求返回的记录条数。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    * from  **参数解释：** 起始时间（13位毫秒时间戳），需要和to同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳），需要和from同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * level  **参数解释：** 规则集的防护严格程度。规则集（宽松）下对业务的误报率降低，但漏报率可能会增高；而规则集（严格）下对业务的误报率可能会增高，但漏报率降低。 **约束限制：** 不涉及 **取值范围：** - 1：宽松 - 2：中等 - 3：严格  **默认取值：** 不涉及
    * id  **参数解释：** 规则ID，规则的唯一标识。 **约束限制：** 不涉及 **取值范围：** 长度为6个字符 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * riskLevel  **参数解释：** 危险等级 **约束限制：** 不涉及 **取值范围：** - 1：高危 - 2：中危 - 3：低危  **默认取值：** 不涉及
    * protectionTypeNames  **参数解释：** 防护类型 **约束限制：** 不涉及 **取值范围：** - vuln：其他 - xss：跨站脚本 - cmdi：命令注入 - lfi：本地文件包含 - rfi：远程文件包含 - webshell：网站木马 - robot：恶意爬虫 - sqli：SQL注入  **默认取值：** 不涉及
    * applicationTypeNames  **参数解释：** 应用类型 **约束限制：** 不涉及 **取值范围：** 请参见WAF控制台，Web基础防护规则详情页面的应用类型。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'xLanguage' => null,
        'enterpriseProjectId' => null,
        'offset' => null,
        'limit' => null,
        'from' => 'int64',
        'to' => 'int64',
        'level' => 'int32',
        'id' => null,
        'description' => null,
        'cveNumber' => null,
        'riskLevel' => 'int32',
        'protectionTypeNames' => null,
        'applicationTypeNames' => null
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
    * xLanguage  **参数解释：** 语言，默认值为zh-cn。zh-cn（中文）/en-us（英文）。 **约束限制：** 不涉及 **取值范围：** - zh-cn：中文 - en-us：英文  **默认取值：** - zh-cn
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * offset  **参数解释：** 分页查询的起始位置，表示从第几条记录开始返回（从1开始计数）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 1
    * limit  **参数解释：** 分页查询的单页返回数量，控制每次请求返回的记录条数。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    * from  **参数解释：** 起始时间（13位毫秒时间戳），需要和to同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳），需要和from同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * level  **参数解释：** 规则集的防护严格程度。规则集（宽松）下对业务的误报率降低，但漏报率可能会增高；而规则集（严格）下对业务的误报率可能会增高，但漏报率降低。 **约束限制：** 不涉及 **取值范围：** - 1：宽松 - 2：中等 - 3：严格  **默认取值：** 不涉及
    * id  **参数解释：** 规则ID，规则的唯一标识。 **约束限制：** 不涉及 **取值范围：** 长度为6个字符 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * riskLevel  **参数解释：** 危险等级 **约束限制：** 不涉及 **取值范围：** - 1：高危 - 2：中危 - 3：低危  **默认取值：** 不涉及
    * protectionTypeNames  **参数解释：** 防护类型 **约束限制：** 不涉及 **取值范围：** - vuln：其他 - xss：跨站脚本 - cmdi：命令注入 - lfi：本地文件包含 - rfi：远程文件包含 - webshell：网站木马 - robot：恶意爬虫 - sqli：SQL注入  **默认取值：** 不涉及
    * applicationTypeNames  **参数解释：** 应用类型 **约束限制：** 不涉及 **取值范围：** 请参见WAF控制台，Web基础防护规则详情页面的应用类型。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'xLanguage' => 'X-Language',
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'from' => 'from',
            'to' => 'to',
            'level' => 'level',
            'id' => 'id',
            'description' => 'description',
            'cveNumber' => 'cve_number',
            'riskLevel' => 'risk_level',
            'protectionTypeNames' => 'protection_type_names',
            'applicationTypeNames' => 'application_type_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 语言，默认值为zh-cn。zh-cn（中文）/en-us（英文）。 **约束限制：** 不涉及 **取值范围：** - zh-cn：中文 - en-us：英文  **默认取值：** - zh-cn
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * offset  **参数解释：** 分页查询的起始位置，表示从第几条记录开始返回（从1开始计数）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 1
    * limit  **参数解释：** 分页查询的单页返回数量，控制每次请求返回的记录条数。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    * from  **参数解释：** 起始时间（13位毫秒时间戳），需要和to同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳），需要和from同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * level  **参数解释：** 规则集的防护严格程度。规则集（宽松）下对业务的误报率降低，但漏报率可能会增高；而规则集（严格）下对业务的误报率可能会增高，但漏报率降低。 **约束限制：** 不涉及 **取值范围：** - 1：宽松 - 2：中等 - 3：严格  **默认取值：** 不涉及
    * id  **参数解释：** 规则ID，规则的唯一标识。 **约束限制：** 不涉及 **取值范围：** 长度为6个字符 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * riskLevel  **参数解释：** 危险等级 **约束限制：** 不涉及 **取值范围：** - 1：高危 - 2：中危 - 3：低危  **默认取值：** 不涉及
    * protectionTypeNames  **参数解释：** 防护类型 **约束限制：** 不涉及 **取值范围：** - vuln：其他 - xss：跨站脚本 - cmdi：命令注入 - lfi：本地文件包含 - rfi：远程文件包含 - webshell：网站木马 - robot：恶意爬虫 - sqli：SQL注入  **默认取值：** 不涉及
    * applicationTypeNames  **参数解释：** 应用类型 **约束限制：** 不涉及 **取值范围：** 请参见WAF控制台，Web基础防护规则详情页面的应用类型。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'xLanguage' => 'setXLanguage',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'from' => 'setFrom',
            'to' => 'setTo',
            'level' => 'setLevel',
            'id' => 'setId',
            'description' => 'setDescription',
            'cveNumber' => 'setCveNumber',
            'riskLevel' => 'setRiskLevel',
            'protectionTypeNames' => 'setProtectionTypeNames',
            'applicationTypeNames' => 'setApplicationTypeNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * xLanguage  **参数解释：** 语言，默认值为zh-cn。zh-cn（中文）/en-us（英文）。 **约束限制：** 不涉及 **取值范围：** - zh-cn：中文 - en-us：英文  **默认取值：** - zh-cn
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * offset  **参数解释：** 分页查询的起始位置，表示从第几条记录开始返回（从1开始计数）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 1
    * limit  **参数解释：** 分页查询的单页返回数量，控制每次请求返回的记录条数。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    * from  **参数解释：** 起始时间（13位毫秒时间戳），需要和to同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间（13位毫秒时间戳），需要和from同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * level  **参数解释：** 规则集的防护严格程度。规则集（宽松）下对业务的误报率降低，但漏报率可能会增高；而规则集（严格）下对业务的误报率可能会增高，但漏报率降低。 **约束限制：** 不涉及 **取值范围：** - 1：宽松 - 2：中等 - 3：严格  **默认取值：** 不涉及
    * id  **参数解释：** 规则ID，规则的唯一标识。 **约束限制：** 不涉及 **取值范围：** 长度为6个字符 **默认取值：** 不涉及
    * description  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cveNumber  **参数解释：** CVE编号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * riskLevel  **参数解释：** 危险等级 **约束限制：** 不涉及 **取值范围：** - 1：高危 - 2：中危 - 3：低危  **默认取值：** 不涉及
    * protectionTypeNames  **参数解释：** 防护类型 **约束限制：** 不涉及 **取值范围：** - vuln：其他 - xss：跨站脚本 - cmdi：命令注入 - lfi：本地文件包含 - rfi：远程文件包含 - webshell：网站木马 - robot：恶意爬虫 - sqli：SQL注入  **默认取值：** 不涉及
    * applicationTypeNames  **参数解释：** 应用类型 **约束限制：** 不涉及 **取值范围：** 请参见WAF控制台，Web基础防护规则详情页面的应用类型。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'xLanguage' => 'getXLanguage',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'from' => 'getFrom',
            'to' => 'getTo',
            'level' => 'getLevel',
            'id' => 'getId',
            'description' => 'getDescription',
            'cveNumber' => 'getCveNumber',
            'riskLevel' => 'getRiskLevel',
            'protectionTypeNames' => 'getProtectionTypeNames',
            'applicationTypeNames' => 'getApplicationTypeNames'
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
    const LEVEL_1 = 1;
    const LEVEL_2 = 2;
    const LEVEL_3 = 3;
    const RISK_LEVEL_1 = 1;
    const RISK_LEVEL_2 = 2;
    const RISK_LEVEL_3 = 3;
    const PROTECTION_TYPE_NAMES_VULN = 'vuln';
    const PROTECTION_TYPE_NAMES_XSS = 'xss';
    const PROTECTION_TYPE_NAMES_CMDI = 'cmdi';
    const PROTECTION_TYPE_NAMES_LFI = 'lfi';
    const PROTECTION_TYPE_NAMES_RFI = 'rfi';
    const PROTECTION_TYPE_NAMES_WEBSHELL = 'webshell';
    const PROTECTION_TYPE_NAMES_ROBOT = 'robot';
    const PROTECTION_TYPE_NAMES_SQLI = 'sqli';
    

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
    public function getLevelAllowableValues()
    {
        return [
            self::LEVEL_1,
            self::LEVEL_2,
            self::LEVEL_3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRiskLevelAllowableValues()
    {
        return [
            self::RISK_LEVEL_1,
            self::RISK_LEVEL_2,
            self::RISK_LEVEL_3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectionTypeNamesAllowableValues()
    {
        return [
            self::PROTECTION_TYPE_NAMES_VULN,
            self::PROTECTION_TYPE_NAMES_XSS,
            self::PROTECTION_TYPE_NAMES_CMDI,
            self::PROTECTION_TYPE_NAMES_LFI,
            self::PROTECTION_TYPE_NAMES_RFI,
            self::PROTECTION_TYPE_NAMES_WEBSHELL,
            self::PROTECTION_TYPE_NAMES_ROBOT,
            self::PROTECTION_TYPE_NAMES_SQLI,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cveNumber'] = isset($data['cveNumber']) ? $data['cveNumber'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['protectionTypeNames'] = isset($data['protectionTypeNames']) ? $data['protectionTypeNames'] : null;
        $this->container['applicationTypeNames'] = isset($data['applicationTypeNames']) ? $data['applicationTypeNames'] : null;
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

            $allowedValues = $this->getLevelAllowableValues();
                if (!is_null($this->container['level']) && !in_array($this->container['level'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'level', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRiskLevelAllowableValues();
                if (!is_null($this->container['riskLevel']) && !in_array($this->container['riskLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'riskLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtectionTypeNamesAllowableValues();
                if (!is_null($this->container['protectionTypeNames']) && !in_array($this->container['protectionTypeNames'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionTypeNames', must be one of '%s'",
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
    *  **参数解释：** 语言，默认值为zh-cn。zh-cn（中文）/en-us（英文）。 **约束限制：** 不涉及 **取值范围：** - zh-cn：中文 - en-us：英文  **默认取值：** - zh-cn
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
    * @param string|null $xLanguage **参数解释：** 语言，默认值为zh-cn。zh-cn（中文）/en-us（英文）。 **约束限制：** 不涉及 **取值范围：** - zh-cn：中文 - en-us：英文  **默认取值：** - zh-cn
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
    *  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
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
    * @param string|null $enterpriseProjectId **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 分页查询的起始位置，表示从第几条记录开始返回（从1开始计数）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 1
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
    * @param int|null $offset **参数解释：** 分页查询的起始位置，表示从第几条记录开始返回（从1开始计数）。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 1
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
    *  **参数解释：** 分页查询的单页返回数量，控制每次请求返回的记录条数。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
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
    * @param int|null $limit **参数解释：** 分页查询的单页返回数量，控制每次请求返回的记录条数。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释：** 起始时间（13位毫秒时间戳），需要和to同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param int|null $from **参数解释：** 起始时间（13位毫秒时间戳），需要和to同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    *  **参数解释：** 结束时间（13位毫秒时间戳），需要和from同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param int|null $to **参数解释：** 结束时间（13位毫秒时间戳），需要和from同时使用。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释：** 规则集的防护严格程度。规则集（宽松）下对业务的误报率降低，但漏报率可能会增高；而规则集（严格）下对业务的误报率可能会增高，但漏报率降低。 **约束限制：** 不涉及 **取值范围：** - 1：宽松 - 2：中等 - 3：严格  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level **参数解释：** 规则集的防护严格程度。规则集（宽松）下对业务的误报率降低，但漏报率可能会增高；而规则集（严格）下对业务的误报率可能会增高，但漏报率降低。 **约束限制：** 不涉及 **取值范围：** - 1：宽松 - 2：中等 - 3：严格  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释：** 规则ID，规则的唯一标识。 **约束限制：** 不涉及 **取值范围：** 长度为6个字符 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 规则ID，规则的唯一标识。 **约束限制：** 不涉及 **取值范围：** 长度为6个字符 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 规则描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cveNumber
    *  **参数解释：** CVE编号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCveNumber()
    {
        return $this->container['cveNumber'];
    }

    /**
    * Sets cveNumber
    *
    * @param string|null $cveNumber **参数解释：** CVE编号 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCveNumber($cveNumber)
    {
        $this->container['cveNumber'] = $cveNumber;
        return $this;
    }

    /**
    * Gets riskLevel
    *  **参数解释：** 危险等级 **约束限制：** 不涉及 **取值范围：** - 1：高危 - 2：中危 - 3：低危  **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param int|null $riskLevel **参数解释：** 危险等级 **约束限制：** 不涉及 **取值范围：** - 1：高危 - 2：中危 - 3：低危  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets protectionTypeNames
    *  **参数解释：** 防护类型 **约束限制：** 不涉及 **取值范围：** - vuln：其他 - xss：跨站脚本 - cmdi：命令注入 - lfi：本地文件包含 - rfi：远程文件包含 - webshell：网站木马 - robot：恶意爬虫 - sqli：SQL注入  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getProtectionTypeNames()
    {
        return $this->container['protectionTypeNames'];
    }

    /**
    * Sets protectionTypeNames
    *
    * @param string|null $protectionTypeNames **参数解释：** 防护类型 **约束限制：** 不涉及 **取值范围：** - vuln：其他 - xss：跨站脚本 - cmdi：命令注入 - lfi：本地文件包含 - rfi：远程文件包含 - webshell：网站木马 - robot：恶意爬虫 - sqli：SQL注入  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setProtectionTypeNames($protectionTypeNames)
    {
        $this->container['protectionTypeNames'] = $protectionTypeNames;
        return $this;
    }

    /**
    * Gets applicationTypeNames
    *  **参数解释：** 应用类型 **约束限制：** 不涉及 **取值范围：** 请参见WAF控制台，Web基础防护规则详情页面的应用类型。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getApplicationTypeNames()
    {
        return $this->container['applicationTypeNames'];
    }

    /**
    * Sets applicationTypeNames
    *
    * @param string|null $applicationTypeNames **参数解释：** 应用类型 **约束限制：** 不涉及 **取值范围：** 请参见WAF控制台，Web基础防护规则详情页面的应用类型。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setApplicationTypeNames($applicationTypeNames)
    {
        $this->container['applicationTypeNames'] = $applicationTypeNames;
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

