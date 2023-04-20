<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Configs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Configs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originRequestHeader  回源请求头改写 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * httpResponseHeader  http header配置 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * originFollow302Status  回源跟随（on：开启，off：关闭）。
    * cacheRules  缓存规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置（1：打开；0：关闭）
    * errorCodeCache  状态码缓存时间
    * originRangeStatus  Range回源，即分片回源 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败。 开启: on 关闭: off
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL，最多配置20条。
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originRequestHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]',
            'httpResponseHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]',
            'urlAuth' => '\HuaweiCloud\SDK\Cdn\V2\Model\UrlAuth',
            'https' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpPutBody',
            'sources' => '\HuaweiCloud\SDK\Cdn\V2\Model\SourcesConfig[]',
            'originProtocol' => 'string',
            'originFollow302Status' => 'string',
            'cacheRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]',
            'ipFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\IpFilter',
            'referer' => '\HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig',
            'forceRedirect' => '\HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirectConfig',
            'compress' => '\HuaweiCloud\SDK\Cdn\V2\Model\Compress',
            'cacheUrlParameterFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilter',
            'ipv6Accelerate' => 'int',
            'errorCodeCache' => '\HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]',
            'originRangeStatus' => 'string',
            'userAgentFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter',
            'originRequestUrlRewrite' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewrite[]',
            'errorCodeRedirectRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeRedirectRules[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originRequestHeader  回源请求头改写 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * httpResponseHeader  http header配置 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * originFollow302Status  回源跟随（on：开启，off：关闭）。
    * cacheRules  缓存规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置（1：打开；0：关闭）
    * errorCodeCache  状态码缓存时间
    * originRangeStatus  Range回源，即分片回源 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败。 开启: on 关闭: off
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL，最多配置20条。
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originRequestHeader' => null,
        'httpResponseHeader' => null,
        'urlAuth' => null,
        'https' => null,
        'sources' => null,
        'originProtocol' => null,
        'originFollow302Status' => null,
        'cacheRules' => null,
        'ipFilter' => null,
        'referer' => null,
        'forceRedirect' => null,
        'compress' => null,
        'cacheUrlParameterFilter' => null,
        'ipv6Accelerate' => 'int32',
        'errorCodeCache' => null,
        'originRangeStatus' => null,
        'userAgentFilter' => null,
        'originRequestUrlRewrite' => null,
        'errorCodeRedirectRules' => null
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
    * originRequestHeader  回源请求头改写 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * httpResponseHeader  http header配置 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * originFollow302Status  回源跟随（on：开启，off：关闭）。
    * cacheRules  缓存规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置（1：打开；0：关闭）
    * errorCodeCache  状态码缓存时间
    * originRangeStatus  Range回源，即分片回源 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败。 开启: on 关闭: off
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL，最多配置20条。
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originRequestHeader' => 'origin_request_header',
            'httpResponseHeader' => 'http_response_header',
            'urlAuth' => 'url_auth',
            'https' => 'https',
            'sources' => 'sources',
            'originProtocol' => 'origin_protocol',
            'originFollow302Status' => 'origin_follow302_status',
            'cacheRules' => 'cache_rules',
            'ipFilter' => 'ip_filter',
            'referer' => 'referer',
            'forceRedirect' => 'force_redirect',
            'compress' => 'compress',
            'cacheUrlParameterFilter' => 'cache_url_parameter_filter',
            'ipv6Accelerate' => 'ipv6_accelerate',
            'errorCodeCache' => 'error_code_cache',
            'originRangeStatus' => 'origin_range_status',
            'userAgentFilter' => 'user_agent_filter',
            'originRequestUrlRewrite' => 'origin_request_url_rewrite',
            'errorCodeRedirectRules' => 'error_code_redirect_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originRequestHeader  回源请求头改写 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * httpResponseHeader  http header配置 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * originFollow302Status  回源跟随（on：开启，off：关闭）。
    * cacheRules  缓存规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置（1：打开；0：关闭）
    * errorCodeCache  状态码缓存时间
    * originRangeStatus  Range回源，即分片回源 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败。 开启: on 关闭: off
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL，最多配置20条。
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $setters = [
            'originRequestHeader' => 'setOriginRequestHeader',
            'httpResponseHeader' => 'setHttpResponseHeader',
            'urlAuth' => 'setUrlAuth',
            'https' => 'setHttps',
            'sources' => 'setSources',
            'originProtocol' => 'setOriginProtocol',
            'originFollow302Status' => 'setOriginFollow302Status',
            'cacheRules' => 'setCacheRules',
            'ipFilter' => 'setIpFilter',
            'referer' => 'setReferer',
            'forceRedirect' => 'setForceRedirect',
            'compress' => 'setCompress',
            'cacheUrlParameterFilter' => 'setCacheUrlParameterFilter',
            'ipv6Accelerate' => 'setIpv6Accelerate',
            'errorCodeCache' => 'setErrorCodeCache',
            'originRangeStatus' => 'setOriginRangeStatus',
            'userAgentFilter' => 'setUserAgentFilter',
            'originRequestUrlRewrite' => 'setOriginRequestUrlRewrite',
            'errorCodeRedirectRules' => 'setErrorCodeRedirectRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originRequestHeader  回源请求头改写 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * httpResponseHeader  http header配置 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    * originFollow302Status  回源跟随（on：开启，off：关闭）。
    * cacheRules  缓存规则
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置（1：打开；0：关闭）
    * errorCodeCache  状态码缓存时间
    * originRangeStatus  Range回源，即分片回源 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败。 开启: on 关闭: off
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL，最多配置20条。
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $getters = [
            'originRequestHeader' => 'getOriginRequestHeader',
            'httpResponseHeader' => 'getHttpResponseHeader',
            'urlAuth' => 'getUrlAuth',
            'https' => 'getHttps',
            'sources' => 'getSources',
            'originProtocol' => 'getOriginProtocol',
            'originFollow302Status' => 'getOriginFollow302Status',
            'cacheRules' => 'getCacheRules',
            'ipFilter' => 'getIpFilter',
            'referer' => 'getReferer',
            'forceRedirect' => 'getForceRedirect',
            'compress' => 'getCompress',
            'cacheUrlParameterFilter' => 'getCacheUrlParameterFilter',
            'ipv6Accelerate' => 'getIpv6Accelerate',
            'errorCodeCache' => 'getErrorCodeCache',
            'originRangeStatus' => 'getOriginRangeStatus',
            'userAgentFilter' => 'getUserAgentFilter',
            'originRequestUrlRewrite' => 'getOriginRequestUrlRewrite',
            'errorCodeRedirectRules' => 'getErrorCodeRedirectRules'
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
        $this->container['originRequestHeader'] = isset($data['originRequestHeader']) ? $data['originRequestHeader'] : null;
        $this->container['httpResponseHeader'] = isset($data['httpResponseHeader']) ? $data['httpResponseHeader'] : null;
        $this->container['urlAuth'] = isset($data['urlAuth']) ? $data['urlAuth'] : null;
        $this->container['https'] = isset($data['https']) ? $data['https'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['originProtocol'] = isset($data['originProtocol']) ? $data['originProtocol'] : null;
        $this->container['originFollow302Status'] = isset($data['originFollow302Status']) ? $data['originFollow302Status'] : null;
        $this->container['cacheRules'] = isset($data['cacheRules']) ? $data['cacheRules'] : null;
        $this->container['ipFilter'] = isset($data['ipFilter']) ? $data['ipFilter'] : null;
        $this->container['referer'] = isset($data['referer']) ? $data['referer'] : null;
        $this->container['forceRedirect'] = isset($data['forceRedirect']) ? $data['forceRedirect'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['cacheUrlParameterFilter'] = isset($data['cacheUrlParameterFilter']) ? $data['cacheUrlParameterFilter'] : null;
        $this->container['ipv6Accelerate'] = isset($data['ipv6Accelerate']) ? $data['ipv6Accelerate'] : null;
        $this->container['errorCodeCache'] = isset($data['errorCodeCache']) ? $data['errorCodeCache'] : null;
        $this->container['originRangeStatus'] = isset($data['originRangeStatus']) ? $data['originRangeStatus'] : null;
        $this->container['userAgentFilter'] = isset($data['userAgentFilter']) ? $data['userAgentFilter'] : null;
        $this->container['originRequestUrlRewrite'] = isset($data['originRequestUrlRewrite']) ? $data['originRequestUrlRewrite'] : null;
        $this->container['errorCodeRedirectRules'] = isset($data['errorCodeRedirectRules']) ? $data['errorCodeRedirectRules'] : null;
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
    * Gets originRequestHeader
    *  回源请求头改写 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]|null
    */
    public function getOriginRequestHeader()
    {
        return $this->container['originRequestHeader'];
    }

    /**
    * Sets originRequestHeader
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]|null $originRequestHeader 回源请求头改写 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    *
    * @return $this
    */
    public function setOriginRequestHeader($originRequestHeader)
    {
        $this->container['originRequestHeader'] = $originRequestHeader;
        return $this;
    }

    /**
    * Gets httpResponseHeader
    *  http header配置 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null
    */
    public function getHttpResponseHeader()
    {
        return $this->container['httpResponseHeader'];
    }

    /**
    * Sets httpResponseHeader
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null $httpResponseHeader http header配置 该功能将覆盖原有配置（清空之前的配置），在使用此接口时，请上传全量头部信息。
    *
    * @return $this
    */
    public function setHttpResponseHeader($httpResponseHeader)
    {
        $this->container['httpResponseHeader'] = $httpResponseHeader;
        return $this;
    }

    /**
    * Gets urlAuth
    *  urlAuth
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UrlAuth|null
    */
    public function getUrlAuth()
    {
        return $this->container['urlAuth'];
    }

    /**
    * Sets urlAuth
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UrlAuth|null $urlAuth urlAuth
    *
    * @return $this
    */
    public function setUrlAuth($urlAuth)
    {
        $this->container['urlAuth'] = $urlAuth;
        return $this;
    }

    /**
    * Gets https
    *  https
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpPutBody|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpPutBody|null $https https
    *
    * @return $this
    */
    public function setHttps($https)
    {
        $this->container['https'] = $https;
        return $this;
    }

    /**
    * Gets sources
    *  源站配置。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\SourcesConfig[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\SourcesConfig[]|null $sources 源站配置。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets originProtocol
    *  回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    *
    * @return string|null
    */
    public function getOriginProtocol()
    {
        return $this->container['originProtocol'];
    }

    /**
    * Sets originProtocol
    *
    * @param string|null $originProtocol 回源协议（follow：协议跟随回源，http：HTTP回源(默认)，https：https回源）。
    *
    * @return $this
    */
    public function setOriginProtocol($originProtocol)
    {
        $this->container['originProtocol'] = $originProtocol;
        return $this;
    }

    /**
    * Gets originFollow302Status
    *  回源跟随（on：开启，off：关闭）。
    *
    * @return string|null
    */
    public function getOriginFollow302Status()
    {
        return $this->container['originFollow302Status'];
    }

    /**
    * Sets originFollow302Status
    *
    * @param string|null $originFollow302Status 回源跟随（on：开启，off：关闭）。
    *
    * @return $this
    */
    public function setOriginFollow302Status($originFollow302Status)
    {
        $this->container['originFollow302Status'] = $originFollow302Status;
        return $this;
    }

    /**
    * Gets cacheRules
    *  缓存规则
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]|null
    */
    public function getCacheRules()
    {
        return $this->container['cacheRules'];
    }

    /**
    * Sets cacheRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]|null $cacheRules 缓存规则
    *
    * @return $this
    */
    public function setCacheRules($cacheRules)
    {
        $this->container['cacheRules'] = $cacheRules;
        return $this;
    }

    /**
    * Gets ipFilter
    *  ipFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\IpFilter|null
    */
    public function getIpFilter()
    {
        return $this->container['ipFilter'];
    }

    /**
    * Sets ipFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\IpFilter|null $ipFilter ipFilter
    *
    * @return $this
    */
    public function setIpFilter($ipFilter)
    {
        $this->container['ipFilter'] = $ipFilter;
        return $this;
    }

    /**
    * Gets referer
    *  referer
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig|null
    */
    public function getReferer()
    {
        return $this->container['referer'];
    }

    /**
    * Sets referer
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig|null $referer referer
    *
    * @return $this
    */
    public function setReferer($referer)
    {
        $this->container['referer'] = $referer;
        return $this;
    }

    /**
    * Gets forceRedirect
    *  forceRedirect
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirectConfig|null
    */
    public function getForceRedirect()
    {
        return $this->container['forceRedirect'];
    }

    /**
    * Sets forceRedirect
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirectConfig|null $forceRedirect forceRedirect
    *
    * @return $this
    */
    public function setForceRedirect($forceRedirect)
    {
        $this->container['forceRedirect'] = $forceRedirect;
        return $this;
    }

    /**
    * Gets compress
    *  compress
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Compress|null
    */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
    * Sets compress
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Compress|null $compress compress
    *
    * @return $this
    */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;
        return $this;
    }

    /**
    * Gets cacheUrlParameterFilter
    *  cacheUrlParameterFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilter|null
    */
    public function getCacheUrlParameterFilter()
    {
        return $this->container['cacheUrlParameterFilter'];
    }

    /**
    * Sets cacheUrlParameterFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilter|null $cacheUrlParameterFilter cacheUrlParameterFilter
    *
    * @return $this
    */
    public function setCacheUrlParameterFilter($cacheUrlParameterFilter)
    {
        $this->container['cacheUrlParameterFilter'] = $cacheUrlParameterFilter;
        return $this;
    }

    /**
    * Gets ipv6Accelerate
    *  ipv6设置（1：打开；0：关闭）
    *
    * @return int|null
    */
    public function getIpv6Accelerate()
    {
        return $this->container['ipv6Accelerate'];
    }

    /**
    * Sets ipv6Accelerate
    *
    * @param int|null $ipv6Accelerate ipv6设置（1：打开；0：关闭）
    *
    * @return $this
    */
    public function setIpv6Accelerate($ipv6Accelerate)
    {
        $this->container['ipv6Accelerate'] = $ipv6Accelerate;
        return $this;
    }

    /**
    * Gets errorCodeCache
    *  状态码缓存时间
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]|null
    */
    public function getErrorCodeCache()
    {
        return $this->container['errorCodeCache'];
    }

    /**
    * Sets errorCodeCache
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]|null $errorCodeCache 状态码缓存时间
    *
    * @return $this
    */
    public function setErrorCodeCache($errorCodeCache)
    {
        $this->container['errorCodeCache'] = $errorCodeCache;
        return $this;
    }

    /**
    * Gets originRangeStatus
    *  Range回源，即分片回源 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败。 开启: on 关闭: off
    *
    * @return string|null
    */
    public function getOriginRangeStatus()
    {
        return $this->container['originRangeStatus'];
    }

    /**
    * Sets originRangeStatus
    *
    * @param string|null $originRangeStatus Range回源，即分片回源 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败。 开启: on 关闭: off
    *
    * @return $this
    */
    public function setOriginRangeStatus($originRangeStatus)
    {
        $this->container['originRangeStatus'] = $originRangeStatus;
        return $this;
    }

    /**
    * Gets userAgentFilter
    *  userAgentFilter
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter|null
    */
    public function getUserAgentFilter()
    {
        return $this->container['userAgentFilter'];
    }

    /**
    * Sets userAgentFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter|null $userAgentFilter userAgentFilter
    *
    * @return $this
    */
    public function setUserAgentFilter($userAgentFilter)
    {
        $this->container['userAgentFilter'] = $userAgentFilter;
        return $this;
    }

    /**
    * Gets originRequestUrlRewrite
    *  改写回源URL，最多配置20条。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewrite[]|null
    */
    public function getOriginRequestUrlRewrite()
    {
        return $this->container['originRequestUrlRewrite'];
    }

    /**
    * Sets originRequestUrlRewrite
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewrite[]|null $originRequestUrlRewrite 改写回源URL，最多配置20条。
    *
    * @return $this
    */
    public function setOriginRequestUrlRewrite($originRequestUrlRewrite)
    {
        $this->container['originRequestUrlRewrite'] = $originRequestUrlRewrite;
        return $this;
    }

    /**
    * Gets errorCodeRedirectRules
    *  自定义错误页面
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeRedirectRules[]|null
    */
    public function getErrorCodeRedirectRules()
    {
        return $this->container['errorCodeRedirectRules'];
    }

    /**
    * Sets errorCodeRedirectRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeRedirectRules[]|null $errorCodeRedirectRules 自定义错误页面
    *
    * @return $this
    */
    public function setErrorCodeRedirectRules($errorCodeRedirectRules)
    {
        $this->container['errorCodeRedirectRules'] = $errorCodeRedirectRules;
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

