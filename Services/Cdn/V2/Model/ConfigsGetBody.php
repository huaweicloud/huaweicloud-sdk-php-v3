<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigsGetBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigsGetBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * businessType  业务类型： - web：网站加速； - download：文件下载加速； - video：点播加速； - wholesite：全站加速。
    * serviceArea  服务区域： - mainland_china：中国大陆； - global：全球； - outside_mainland_china：中国大陆境外。
    * remark  域名备注。
    * originRequestHeader  回源请求头配置
    * httpResponseHeader  http header配置
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议，follow：协议跟随回源，http：HTTP回源(默认)，https：https回源。
    * originFollow302Status  回源跟随，on：开启，off：关闭。
    * cacheRules  缓存规则。
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置，1：打开；0：关闭。
    * errorCodeCache  状态码缓存时间。
    * originRangeStatus  Range回源，开启: on，off:关闭。
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL。
    * flexibleOrigin  高级回源。
    * sliceEtagStatus  回源是否校验ETag，on：开启，off：关闭。
    * originReceiveTimeout  回源超时时间，单位：秒。
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  请求限速。
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'businessType' => 'string',
            'serviceArea' => 'string',
            'remark' => 'string',
            'originRequestHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]',
            'httpResponseHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]',
            'urlAuth' => '\HuaweiCloud\SDK\Cdn\V2\Model\UrlAuthGetBody',
            'https' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpGetBody',
            'sources' => '\HuaweiCloud\SDK\Cdn\V2\Model\SourcesConfig[]',
            'originProtocol' => 'string',
            'originFollow302Status' => 'string',
            'cacheRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]',
            'ipFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\IpFilter',
            'referer' => '\HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig',
            'forceRedirect' => '\HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirectConfig',
            'compress' => '\HuaweiCloud\SDK\Cdn\V2\Model\Compress',
            'cacheUrlParameterFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilterGetBody',
            'ipv6Accelerate' => 'int',
            'errorCodeCache' => '\HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]',
            'originRangeStatus' => 'string',
            'userAgentFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter',
            'originRequestUrlRewrite' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewrite[]',
            'flexibleOrigin' => '\HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOrigins[]',
            'sliceEtagStatus' => 'string',
            'originReceiveTimeout' => 'int',
            'remoteAuth' => '\HuaweiCloud\SDK\Cdn\V2\Model\CommonRemoteAuth',
            'websocket' => '\HuaweiCloud\SDK\Cdn\V2\Model\WebSocketSeek',
            'videoSeek' => '\HuaweiCloud\SDK\Cdn\V2\Model\VideoSeek',
            'requestLimitRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRules[]',
            'ipFrequencyLimit' => '\HuaweiCloud\SDK\Cdn\V2\Model\IpFrequencyLimitQuery',
            'hsts' => '\HuaweiCloud\SDK\Cdn\V2\Model\HstsQuery',
            'quic' => '\HuaweiCloud\SDK\Cdn\V2\Model\Quic',
            'errorCodeRedirectRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeRedirectRules[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * businessType  业务类型： - web：网站加速； - download：文件下载加速； - video：点播加速； - wholesite：全站加速。
    * serviceArea  服务区域： - mainland_china：中国大陆； - global：全球； - outside_mainland_china：中国大陆境外。
    * remark  域名备注。
    * originRequestHeader  回源请求头配置
    * httpResponseHeader  http header配置
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议，follow：协议跟随回源，http：HTTP回源(默认)，https：https回源。
    * originFollow302Status  回源跟随，on：开启，off：关闭。
    * cacheRules  缓存规则。
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置，1：打开；0：关闭。
    * errorCodeCache  状态码缓存时间。
    * originRangeStatus  Range回源，开启: on，off:关闭。
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL。
    * flexibleOrigin  高级回源。
    * sliceEtagStatus  回源是否校验ETag，on：开启，off：关闭。
    * originReceiveTimeout  回源超时时间，单位：秒。
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  请求限速。
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'businessType' => null,
        'serviceArea' => null,
        'remark' => null,
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
        'flexibleOrigin' => null,
        'sliceEtagStatus' => null,
        'originReceiveTimeout' => 'int32',
        'remoteAuth' => null,
        'websocket' => null,
        'videoSeek' => null,
        'requestLimitRules' => null,
        'ipFrequencyLimit' => null,
        'hsts' => null,
        'quic' => null,
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
    * businessType  业务类型： - web：网站加速； - download：文件下载加速； - video：点播加速； - wholesite：全站加速。
    * serviceArea  服务区域： - mainland_china：中国大陆； - global：全球； - outside_mainland_china：中国大陆境外。
    * remark  域名备注。
    * originRequestHeader  回源请求头配置
    * httpResponseHeader  http header配置
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议，follow：协议跟随回源，http：HTTP回源(默认)，https：https回源。
    * originFollow302Status  回源跟随，on：开启，off：关闭。
    * cacheRules  缓存规则。
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置，1：打开；0：关闭。
    * errorCodeCache  状态码缓存时间。
    * originRangeStatus  Range回源，开启: on，off:关闭。
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL。
    * flexibleOrigin  高级回源。
    * sliceEtagStatus  回源是否校验ETag，on：开启，off：关闭。
    * originReceiveTimeout  回源超时时间，单位：秒。
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  请求限速。
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'businessType' => 'business_type',
            'serviceArea' => 'service_area',
            'remark' => 'remark',
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
            'flexibleOrigin' => 'flexible_origin',
            'sliceEtagStatus' => 'slice_etag_status',
            'originReceiveTimeout' => 'origin_receive_timeout',
            'remoteAuth' => 'remote_auth',
            'websocket' => 'websocket',
            'videoSeek' => 'video_seek',
            'requestLimitRules' => 'request_limit_rules',
            'ipFrequencyLimit' => 'ip_frequency_limit',
            'hsts' => 'hsts',
            'quic' => 'quic',
            'errorCodeRedirectRules' => 'error_code_redirect_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * businessType  业务类型： - web：网站加速； - download：文件下载加速； - video：点播加速； - wholesite：全站加速。
    * serviceArea  服务区域： - mainland_china：中国大陆； - global：全球； - outside_mainland_china：中国大陆境外。
    * remark  域名备注。
    * originRequestHeader  回源请求头配置
    * httpResponseHeader  http header配置
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议，follow：协议跟随回源，http：HTTP回源(默认)，https：https回源。
    * originFollow302Status  回源跟随，on：开启，off：关闭。
    * cacheRules  缓存规则。
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置，1：打开；0：关闭。
    * errorCodeCache  状态码缓存时间。
    * originRangeStatus  Range回源，开启: on，off:关闭。
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL。
    * flexibleOrigin  高级回源。
    * sliceEtagStatus  回源是否校验ETag，on：开启，off：关闭。
    * originReceiveTimeout  回源超时时间，单位：秒。
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  请求限速。
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $setters = [
            'businessType' => 'setBusinessType',
            'serviceArea' => 'setServiceArea',
            'remark' => 'setRemark',
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
            'flexibleOrigin' => 'setFlexibleOrigin',
            'sliceEtagStatus' => 'setSliceEtagStatus',
            'originReceiveTimeout' => 'setOriginReceiveTimeout',
            'remoteAuth' => 'setRemoteAuth',
            'websocket' => 'setWebsocket',
            'videoSeek' => 'setVideoSeek',
            'requestLimitRules' => 'setRequestLimitRules',
            'ipFrequencyLimit' => 'setIpFrequencyLimit',
            'hsts' => 'setHsts',
            'quic' => 'setQuic',
            'errorCodeRedirectRules' => 'setErrorCodeRedirectRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * businessType  业务类型： - web：网站加速； - download：文件下载加速； - video：点播加速； - wholesite：全站加速。
    * serviceArea  服务区域： - mainland_china：中国大陆； - global：全球； - outside_mainland_china：中国大陆境外。
    * remark  域名备注。
    * originRequestHeader  回源请求头配置
    * httpResponseHeader  http header配置
    * urlAuth  urlAuth
    * https  https
    * sources  源站配置。
    * originProtocol  回源协议，follow：协议跟随回源，http：HTTP回源(默认)，https：https回源。
    * originFollow302Status  回源跟随，on：开启，off：关闭。
    * cacheRules  缓存规则。
    * ipFilter  ipFilter
    * referer  referer
    * forceRedirect  forceRedirect
    * compress  compress
    * cacheUrlParameterFilter  cacheUrlParameterFilter
    * ipv6Accelerate  ipv6设置，1：打开；0：关闭。
    * errorCodeCache  状态码缓存时间。
    * originRangeStatus  Range回源，开启: on，off:关闭。
    * userAgentFilter  userAgentFilter
    * originRequestUrlRewrite  改写回源URL。
    * flexibleOrigin  高级回源。
    * sliceEtagStatus  回源是否校验ETag，on：开启，off：关闭。
    * originReceiveTimeout  回源超时时间，单位：秒。
    * remoteAuth  remoteAuth
    * websocket  websocket
    * videoSeek  videoSeek
    * requestLimitRules  请求限速。
    * ipFrequencyLimit  ipFrequencyLimit
    * hsts  hsts
    * quic  quic
    * errorCodeRedirectRules  自定义错误页面
    *
    * @var string[]
    */
    protected static $getters = [
            'businessType' => 'getBusinessType',
            'serviceArea' => 'getServiceArea',
            'remark' => 'getRemark',
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
            'flexibleOrigin' => 'getFlexibleOrigin',
            'sliceEtagStatus' => 'getSliceEtagStatus',
            'originReceiveTimeout' => 'getOriginReceiveTimeout',
            'remoteAuth' => 'getRemoteAuth',
            'websocket' => 'getWebsocket',
            'videoSeek' => 'getVideoSeek',
            'requestLimitRules' => 'getRequestLimitRules',
            'ipFrequencyLimit' => 'getIpFrequencyLimit',
            'hsts' => 'getHsts',
            'quic' => 'getQuic',
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
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
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
        $this->container['flexibleOrigin'] = isset($data['flexibleOrigin']) ? $data['flexibleOrigin'] : null;
        $this->container['sliceEtagStatus'] = isset($data['sliceEtagStatus']) ? $data['sliceEtagStatus'] : null;
        $this->container['originReceiveTimeout'] = isset($data['originReceiveTimeout']) ? $data['originReceiveTimeout'] : null;
        $this->container['remoteAuth'] = isset($data['remoteAuth']) ? $data['remoteAuth'] : null;
        $this->container['websocket'] = isset($data['websocket']) ? $data['websocket'] : null;
        $this->container['videoSeek'] = isset($data['videoSeek']) ? $data['videoSeek'] : null;
        $this->container['requestLimitRules'] = isset($data['requestLimitRules']) ? $data['requestLimitRules'] : null;
        $this->container['ipFrequencyLimit'] = isset($data['ipFrequencyLimit']) ? $data['ipFrequencyLimit'] : null;
        $this->container['hsts'] = isset($data['hsts']) ? $data['hsts'] : null;
        $this->container['quic'] = isset($data['quic']) ? $data['quic'] : null;
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
    * Gets businessType
    *  业务类型： - web：网站加速； - download：文件下载加速； - video：点播加速； - wholesite：全站加速。
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType 业务类型： - web：网站加速； - download：文件下载加速； - video：点播加速； - wholesite：全站加速。
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets serviceArea
    *  服务区域： - mainland_china：中国大陆； - global：全球； - outside_mainland_china：中国大陆境外。
    *
    * @return string|null
    */
    public function getServiceArea()
    {
        return $this->container['serviceArea'];
    }

    /**
    * Sets serviceArea
    *
    * @param string|null $serviceArea 服务区域： - mainland_china：中国大陆； - global：全球； - outside_mainland_china：中国大陆境外。
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
    * Gets remark
    *  域名备注。
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
    * @param string|null $remark 域名备注。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets originRequestHeader
    *  回源请求头配置
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]|null $originRequestHeader 回源请求头配置
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
    *  http header配置
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null $httpResponseHeader http header配置
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
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\UrlAuthGetBody|null
    */
    public function getUrlAuth()
    {
        return $this->container['urlAuth'];
    }

    /**
    * Sets urlAuth
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\UrlAuthGetBody|null $urlAuth urlAuth
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
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpGetBody|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpGetBody|null $https https
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
    *  回源协议，follow：协议跟随回源，http：HTTP回源(默认)，https：https回源。
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
    * @param string|null $originProtocol 回源协议，follow：协议跟随回源，http：HTTP回源(默认)，https：https回源。
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
    *  回源跟随，on：开启，off：关闭。
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
    * @param string|null $originFollow302Status 回源跟随，on：开启，off：关闭。
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
    *  缓存规则。
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]|null $cacheRules 缓存规则。
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
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilterGetBody|null
    */
    public function getCacheUrlParameterFilter()
    {
        return $this->container['cacheUrlParameterFilter'];
    }

    /**
    * Sets cacheUrlParameterFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheUrlParameterFilterGetBody|null $cacheUrlParameterFilter cacheUrlParameterFilter
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
    *  ipv6设置，1：打开；0：关闭。
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
    * @param int|null $ipv6Accelerate ipv6设置，1：打开；0：关闭。
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
    *  状态码缓存时间。
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ErrorCodeCache[]|null $errorCodeCache 状态码缓存时间。
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
    *  Range回源，开启: on，off:关闭。
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
    * @param string|null $originRangeStatus Range回源，开启: on，off:关闭。
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
    *  改写回源URL。
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestUrlRewrite[]|null $originRequestUrlRewrite 改写回源URL。
    *
    * @return $this
    */
    public function setOriginRequestUrlRewrite($originRequestUrlRewrite)
    {
        $this->container['originRequestUrlRewrite'] = $originRequestUrlRewrite;
        return $this;
    }

    /**
    * Gets flexibleOrigin
    *  高级回源。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOrigins[]|null
    */
    public function getFlexibleOrigin()
    {
        return $this->container['flexibleOrigin'];
    }

    /**
    * Sets flexibleOrigin
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\FlexibleOrigins[]|null $flexibleOrigin 高级回源。
    *
    * @return $this
    */
    public function setFlexibleOrigin($flexibleOrigin)
    {
        $this->container['flexibleOrigin'] = $flexibleOrigin;
        return $this;
    }

    /**
    * Gets sliceEtagStatus
    *  回源是否校验ETag，on：开启，off：关闭。
    *
    * @return string|null
    */
    public function getSliceEtagStatus()
    {
        return $this->container['sliceEtagStatus'];
    }

    /**
    * Sets sliceEtagStatus
    *
    * @param string|null $sliceEtagStatus 回源是否校验ETag，on：开启，off：关闭。
    *
    * @return $this
    */
    public function setSliceEtagStatus($sliceEtagStatus)
    {
        $this->container['sliceEtagStatus'] = $sliceEtagStatus;
        return $this;
    }

    /**
    * Gets originReceiveTimeout
    *  回源超时时间，单位：秒。
    *
    * @return int|null
    */
    public function getOriginReceiveTimeout()
    {
        return $this->container['originReceiveTimeout'];
    }

    /**
    * Sets originReceiveTimeout
    *
    * @param int|null $originReceiveTimeout 回源超时时间，单位：秒。
    *
    * @return $this
    */
    public function setOriginReceiveTimeout($originReceiveTimeout)
    {
        $this->container['originReceiveTimeout'] = $originReceiveTimeout;
        return $this;
    }

    /**
    * Gets remoteAuth
    *  remoteAuth
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\CommonRemoteAuth|null
    */
    public function getRemoteAuth()
    {
        return $this->container['remoteAuth'];
    }

    /**
    * Sets remoteAuth
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CommonRemoteAuth|null $remoteAuth remoteAuth
    *
    * @return $this
    */
    public function setRemoteAuth($remoteAuth)
    {
        $this->container['remoteAuth'] = $remoteAuth;
        return $this;
    }

    /**
    * Gets websocket
    *  websocket
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\WebSocketSeek|null
    */
    public function getWebsocket()
    {
        return $this->container['websocket'];
    }

    /**
    * Sets websocket
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\WebSocketSeek|null $websocket websocket
    *
    * @return $this
    */
    public function setWebsocket($websocket)
    {
        $this->container['websocket'] = $websocket;
        return $this;
    }

    /**
    * Gets videoSeek
    *  videoSeek
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\VideoSeek|null
    */
    public function getVideoSeek()
    {
        return $this->container['videoSeek'];
    }

    /**
    * Sets videoSeek
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\VideoSeek|null $videoSeek videoSeek
    *
    * @return $this
    */
    public function setVideoSeek($videoSeek)
    {
        $this->container['videoSeek'] = $videoSeek;
        return $this;
    }

    /**
    * Gets requestLimitRules
    *  请求限速。
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRules[]|null
    */
    public function getRequestLimitRules()
    {
        return $this->container['requestLimitRules'];
    }

    /**
    * Sets requestLimitRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RequestLimitRules[]|null $requestLimitRules 请求限速。
    *
    * @return $this
    */
    public function setRequestLimitRules($requestLimitRules)
    {
        $this->container['requestLimitRules'] = $requestLimitRules;
        return $this;
    }

    /**
    * Gets ipFrequencyLimit
    *  ipFrequencyLimit
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\IpFrequencyLimitQuery|null
    */
    public function getIpFrequencyLimit()
    {
        return $this->container['ipFrequencyLimit'];
    }

    /**
    * Sets ipFrequencyLimit
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\IpFrequencyLimitQuery|null $ipFrequencyLimit ipFrequencyLimit
    *
    * @return $this
    */
    public function setIpFrequencyLimit($ipFrequencyLimit)
    {
        $this->container['ipFrequencyLimit'] = $ipFrequencyLimit;
        return $this;
    }

    /**
    * Gets hsts
    *  hsts
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HstsQuery|null
    */
    public function getHsts()
    {
        return $this->container['hsts'];
    }

    /**
    * Sets hsts
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HstsQuery|null $hsts hsts
    *
    * @return $this
    */
    public function setHsts($hsts)
    {
        $this->container['hsts'] = $hsts;
        return $this;
    }

    /**
    * Gets quic
    *  quic
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\Quic|null
    */
    public function getQuic()
    {
        return $this->container['quic'];
    }

    /**
    * Sets quic
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\Quic|null $quic quic
    *
    * @return $this
    */
    public function setQuic($quic)
    {
        $this->container['quic'] = $quic;
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

