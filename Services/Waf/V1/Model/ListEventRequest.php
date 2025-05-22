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
    * contentType  内容类型
    * xLanguage  语言，默认值为en-us。zh-cn（中文）/en-us（英文）
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  查询日志的时间范围（不能和from、to同时使用，同时使用以recent为准），且recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准
    * from  起始时间(13位时间戳)，需要和to同时使用，不能和recent参数同时使用
    * to  结束时间(13位时间戳)，需要和from同时使用，不能和recent参数同时使用
    * attacks  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - cc: cc攻击   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄漏   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * hosts  域名id，从获取防护网站列表（ListHost）接口获取域名id
    * sips  源ip，Web访问者的IP地址（攻击者IP地址）
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
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
            'attacks' => 'string[]',
            'hosts' => 'string[]',
            'sips' => 'string[]',
            'page' => 'int',
            'pagesize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  内容类型
    * xLanguage  语言，默认值为en-us。zh-cn（中文）/en-us（英文）
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  查询日志的时间范围（不能和from、to同时使用，同时使用以recent为准），且recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准
    * from  起始时间(13位时间戳)，需要和to同时使用，不能和recent参数同时使用
    * to  结束时间(13位时间戳)，需要和from同时使用，不能和recent参数同时使用
    * attacks  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - cc: cc攻击   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄漏   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * hosts  域名id，从获取防护网站列表（ListHost）接口获取域名id
    * sips  源ip，Web访问者的IP地址（攻击者IP地址）
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
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
        'attacks' => null,
        'hosts' => null,
        'sips' => null,
        'page' => null,
        'pagesize' => null
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
    * contentType  内容类型
    * xLanguage  语言，默认值为en-us。zh-cn（中文）/en-us（英文）
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  查询日志的时间范围（不能和from、to同时使用，同时使用以recent为准），且recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准
    * from  起始时间(13位时间戳)，需要和to同时使用，不能和recent参数同时使用
    * to  结束时间(13位时间戳)，需要和from同时使用，不能和recent参数同时使用
    * attacks  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - cc: cc攻击   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄漏   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * hosts  域名id，从获取防护网站列表（ListHost）接口获取域名id
    * sips  源ip，Web访问者的IP地址（攻击者IP地址）
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
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
            'attacks' => 'attacks',
            'hosts' => 'hosts',
            'sips' => 'sips',
            'page' => 'page',
            'pagesize' => 'pagesize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  内容类型
    * xLanguage  语言，默认值为en-us。zh-cn（中文）/en-us（英文）
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  查询日志的时间范围（不能和from、to同时使用，同时使用以recent为准），且recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准
    * from  起始时间(13位时间戳)，需要和to同时使用，不能和recent参数同时使用
    * to  结束时间(13位时间戳)，需要和from同时使用，不能和recent参数同时使用
    * attacks  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - cc: cc攻击   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄漏   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * hosts  域名id，从获取防护网站列表（ListHost）接口获取域名id
    * sips  源ip，Web访问者的IP地址（攻击者IP地址）
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
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
            'attacks' => 'setAttacks',
            'hosts' => 'setHosts',
            'sips' => 'setSips',
            'page' => 'setPage',
            'pagesize' => 'setPagesize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  内容类型
    * xLanguage  语言，默认值为en-us。zh-cn（中文）/en-us（英文）
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。
    * recent  查询日志的时间范围（不能和from、to同时使用，同时使用以recent为准），且recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准
    * from  起始时间(13位时间戳)，需要和to同时使用，不能和recent参数同时使用
    * to  结束时间(13位时间戳)，需要和from同时使用，不能和recent参数同时使用
    * attacks  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - cc: cc攻击   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄漏   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    * hosts  域名id，从获取防护网站列表（ListHost）接口获取域名id
    * sips  源ip，Web访问者的IP地址（攻击者IP地址）
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
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
            'attacks' => 'getAttacks',
            'hosts' => 'getHosts',
            'sips' => 'getSips',
            'page' => 'getPage',
            'pagesize' => 'getPagesize'
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
    const RECENT_YESTERDAY = 'yesterday';
    const RECENT_TODAY = 'today';
    const RECENT__3DAYS = '3days';
    const RECENT__1WEEK = '1week';
    const RECENT__1MONTH = '1month';
    

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
        $this->container['attacks'] = isset($data['attacks']) ? $data['attacks'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['sips'] = isset($data['sips']) ? $data['sips'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pagesize'] = isset($data['pagesize']) ? $data['pagesize'] : null;
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
            $allowedValues = $this->getRecentAllowableValues();
                if (!is_null($this->container['recent']) && !in_array($this->container['recent'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'recent', must be one of '%s'",
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
    *  内容类型
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
    * @param string $contentType 内容类型
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
    *  语言，默认值为en-us。zh-cn（中文）/en-us（英文）
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
    * @param string|null $xLanguage 语言，默认值为en-us。zh-cn（中文）/en-us（英文）
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
    *  查询日志的时间范围（不能和from、to同时使用，同时使用以recent为准），且recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准
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
    * @param string|null $recent 查询日志的时间范围（不能和from、to同时使用，同时使用以recent为准），且recent参数与from、to必须使用其中一个。当同时使用recent参数与from、to时，以recent参数为准
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
    *  起始时间(13位时间戳)，需要和to同时使用，不能和recent参数同时使用
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
    * @param int|null $from 起始时间(13位时间戳)，需要和to同时使用，不能和recent参数同时使用
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
    *  结束时间(13位时间戳)，需要和from同时使用，不能和recent参数同时使用
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
    * @param int|null $to 结束时间(13位时间戳)，需要和from同时使用，不能和recent参数同时使用
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets attacks
    *  攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - cc: cc攻击   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄漏   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
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
    * @param string[]|null $attacks 攻击类型:   - vuln：其它攻击类型   - sqli： sql注入攻击   - lfi： 本地文件包含  - cmdi：命令注入攻击   - xss：XSS攻击   - robot：恶意爬虫   - rfi：远程文件包含   - custom_custom：精准防护   - cc: cc攻击   - webshell：网站木马   - custom_whiteblackip：黑白名单拦截   - custom_geoip：地理访问控制拦截   - antitamper：防篡改   - anticrawler：反爬虫    - leakage：网站信息防泄漏   - illegal：非法请求   - antiscan_high_freq_scan：高频扫描封禁   - antiscan_dir_traversal：目录遍历防护
    *
    * @return $this
    */
    public function setAttacks($attacks)
    {
        $this->container['attacks'] = $attacks;
        return $this;
    }

    /**
    * Gets hosts
    *  域名id，从获取防护网站列表（ListHost）接口获取域名id
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
    * @param string[]|null $hosts 域名id，从获取防护网站列表（ListHost）接口获取域名id
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets sips
    *  源ip，Web访问者的IP地址（攻击者IP地址）
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
    * @param string[]|null $sips 源ip，Web访问者的IP地址（攻击者IP地址）
    *
    * @return $this
    */
    public function setSips($sips)
    {
        $this->container['sips'] = $sips;
        return $this;
    }

    /**
    * Gets page
    *  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
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
    * @param int|null $page 分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
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
    *  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
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
    * @param int|null $pagesize 分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
    *
    * @return $this
    */
    public function setPagesize($pagesize)
    {
        $this->container['pagesize'] = $pagesize;
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

