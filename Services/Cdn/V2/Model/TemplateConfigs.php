<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateConfigs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateConfigs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 调用接口修改响应头时，将覆盖原先已配置的响应头，因此，在使用此接口时，请上传全量头部信息
    * cacheRules  **参数解释：** 设置源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，在请求源站时添加指定的HTTP请求头信息 **约束限制：** - 调用接口修改回源请求头时，将覆盖原先已配置的回源请求头
    * https  https
    * quic  quic
    * forceRedirect  forceRedirect
    * httpsTlsVersion  httpsTlsVersion
    * accessAreaFilter  **参数解释：** 区域访问控制，通过配置访问控制规则限制客户端所在地区，实现只允许或只禁止特定地区的用户访问资源 **约束限制：** - 不涉及
    * urlAuth  urlAuth
    * rules  **参数解释：** 规则引擎，通过配置规则来对请求和响应进行自定义控制 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'httpResponseHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]',
            'cacheRules' => '\HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]',
            'originFollow302Status' => 'string',
            'compress' => '\HuaweiCloud\SDK\Cdn\V2\Model\Compress',
            'originRangeStatus' => 'string',
            'ipFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\IpFilter',
            'referer' => '\HuaweiCloud\SDK\Cdn\V2\Model\RefererConfig',
            'userAgentFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\UserAgentFilter',
            'flowLimitStrategy' => '\HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]',
            'originRequestHeader' => '\HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]',
            'https' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpTemplateBody',
            'quic' => '\HuaweiCloud\SDK\Cdn\V2\Model\Quic',
            'forceRedirect' => '\HuaweiCloud\SDK\Cdn\V2\Model\ForceRedirectConfig',
            'httpsTlsVersion' => '\HuaweiCloud\SDK\Cdn\V2\Model\HttpsTlsVersion',
            'accessAreaFilter' => '\HuaweiCloud\SDK\Cdn\V2\Model\AccessAreaFilter[]',
            'urlAuth' => '\HuaweiCloud\SDK\Cdn\V2\Model\UrlAuth',
            'rules' => '\HuaweiCloud\SDK\Cdn\V2\Model\RuleResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 调用接口修改响应头时，将覆盖原先已配置的响应头，因此，在使用此接口时，请上传全量头部信息
    * cacheRules  **参数解释：** 设置源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，在请求源站时添加指定的HTTP请求头信息 **约束限制：** - 调用接口修改回源请求头时，将覆盖原先已配置的回源请求头
    * https  https
    * quic  quic
    * forceRedirect  forceRedirect
    * httpsTlsVersion  httpsTlsVersion
    * accessAreaFilter  **参数解释：** 区域访问控制，通过配置访问控制规则限制客户端所在地区，实现只允许或只禁止特定地区的用户访问资源 **约束限制：** - 不涉及
    * urlAuth  urlAuth
    * rules  **参数解释：** 规则引擎，通过配置规则来对请求和响应进行自定义控制 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'httpResponseHeader' => null,
        'cacheRules' => null,
        'originFollow302Status' => null,
        'compress' => null,
        'originRangeStatus' => null,
        'ipFilter' => null,
        'referer' => null,
        'userAgentFilter' => null,
        'flowLimitStrategy' => null,
        'originRequestHeader' => null,
        'https' => null,
        'quic' => null,
        'forceRedirect' => null,
        'httpsTlsVersion' => null,
        'accessAreaFilter' => null,
        'urlAuth' => null,
        'rules' => null
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
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 调用接口修改响应头时，将覆盖原先已配置的响应头，因此，在使用此接口时，请上传全量头部信息
    * cacheRules  **参数解释：** 设置源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，在请求源站时添加指定的HTTP请求头信息 **约束限制：** - 调用接口修改回源请求头时，将覆盖原先已配置的回源请求头
    * https  https
    * quic  quic
    * forceRedirect  forceRedirect
    * httpsTlsVersion  httpsTlsVersion
    * accessAreaFilter  **参数解释：** 区域访问控制，通过配置访问控制规则限制客户端所在地区，实现只允许或只禁止特定地区的用户访问资源 **约束限制：** - 不涉及
    * urlAuth  urlAuth
    * rules  **参数解释：** 规则引擎，通过配置规则来对请求和响应进行自定义控制 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'httpResponseHeader' => 'http_response_header',
            'cacheRules' => 'cache_rules',
            'originFollow302Status' => 'origin_follow302_status',
            'compress' => 'compress',
            'originRangeStatus' => 'origin_range_status',
            'ipFilter' => 'ip_filter',
            'referer' => 'referer',
            'userAgentFilter' => 'user_agent_filter',
            'flowLimitStrategy' => 'flow_limit_strategy',
            'originRequestHeader' => 'origin_request_header',
            'https' => 'https',
            'quic' => 'quic',
            'forceRedirect' => 'force_redirect',
            'httpsTlsVersion' => 'https_tls_version',
            'accessAreaFilter' => 'access_area_filter',
            'urlAuth' => 'url_auth',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 调用接口修改响应头时，将覆盖原先已配置的响应头，因此，在使用此接口时，请上传全量头部信息
    * cacheRules  **参数解释：** 设置源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，在请求源站时添加指定的HTTP请求头信息 **约束限制：** - 调用接口修改回源请求头时，将覆盖原先已配置的回源请求头
    * https  https
    * quic  quic
    * forceRedirect  forceRedirect
    * httpsTlsVersion  httpsTlsVersion
    * accessAreaFilter  **参数解释：** 区域访问控制，通过配置访问控制规则限制客户端所在地区，实现只允许或只禁止特定地区的用户访问资源 **约束限制：** - 不涉及
    * urlAuth  urlAuth
    * rules  **参数解释：** 规则引擎，通过配置规则来对请求和响应进行自定义控制 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'httpResponseHeader' => 'setHttpResponseHeader',
            'cacheRules' => 'setCacheRules',
            'originFollow302Status' => 'setOriginFollow302Status',
            'compress' => 'setCompress',
            'originRangeStatus' => 'setOriginRangeStatus',
            'ipFilter' => 'setIpFilter',
            'referer' => 'setReferer',
            'userAgentFilter' => 'setUserAgentFilter',
            'flowLimitStrategy' => 'setFlowLimitStrategy',
            'originRequestHeader' => 'setOriginRequestHeader',
            'https' => 'setHttps',
            'quic' => 'setQuic',
            'forceRedirect' => 'setForceRedirect',
            'httpsTlsVersion' => 'setHttpsTlsVersion',
            'accessAreaFilter' => 'setAccessAreaFilter',
            'urlAuth' => 'setUrlAuth',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * httpResponseHeader  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 调用接口修改响应头时，将覆盖原先已配置的响应头，因此，在使用此接口时，请上传全量头部信息
    * cacheRules  **参数解释：** 设置源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    * originFollow302Status  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * compress  compress
    * originRangeStatus  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * ipFilter  ipFilter
    * referer  referer
    * userAgentFilter  userAgentFilter
    * flowLimitStrategy  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    * originRequestHeader  **参数解释：** 回源请求头，CDN节点回源时，在请求源站时添加指定的HTTP请求头信息 **约束限制：** - 调用接口修改回源请求头时，将覆盖原先已配置的回源请求头
    * https  https
    * quic  quic
    * forceRedirect  forceRedirect
    * httpsTlsVersion  httpsTlsVersion
    * accessAreaFilter  **参数解释：** 区域访问控制，通过配置访问控制规则限制客户端所在地区，实现只允许或只禁止特定地区的用户访问资源 **约束限制：** - 不涉及
    * urlAuth  urlAuth
    * rules  **参数解释：** 规则引擎，通过配置规则来对请求和响应进行自定义控制 **约束限制：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'httpResponseHeader' => 'getHttpResponseHeader',
            'cacheRules' => 'getCacheRules',
            'originFollow302Status' => 'getOriginFollow302Status',
            'compress' => 'getCompress',
            'originRangeStatus' => 'getOriginRangeStatus',
            'ipFilter' => 'getIpFilter',
            'referer' => 'getReferer',
            'userAgentFilter' => 'getUserAgentFilter',
            'flowLimitStrategy' => 'getFlowLimitStrategy',
            'originRequestHeader' => 'getOriginRequestHeader',
            'https' => 'getHttps',
            'quic' => 'getQuic',
            'forceRedirect' => 'getForceRedirect',
            'httpsTlsVersion' => 'getHttpsTlsVersion',
            'accessAreaFilter' => 'getAccessAreaFilter',
            'urlAuth' => 'getUrlAuth',
            'rules' => 'getRules'
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
        $this->container['httpResponseHeader'] = isset($data['httpResponseHeader']) ? $data['httpResponseHeader'] : null;
        $this->container['cacheRules'] = isset($data['cacheRules']) ? $data['cacheRules'] : null;
        $this->container['originFollow302Status'] = isset($data['originFollow302Status']) ? $data['originFollow302Status'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['originRangeStatus'] = isset($data['originRangeStatus']) ? $data['originRangeStatus'] : null;
        $this->container['ipFilter'] = isset($data['ipFilter']) ? $data['ipFilter'] : null;
        $this->container['referer'] = isset($data['referer']) ? $data['referer'] : null;
        $this->container['userAgentFilter'] = isset($data['userAgentFilter']) ? $data['userAgentFilter'] : null;
        $this->container['flowLimitStrategy'] = isset($data['flowLimitStrategy']) ? $data['flowLimitStrategy'] : null;
        $this->container['originRequestHeader'] = isset($data['originRequestHeader']) ? $data['originRequestHeader'] : null;
        $this->container['https'] = isset($data['https']) ? $data['https'] : null;
        $this->container['quic'] = isset($data['quic']) ? $data['quic'] : null;
        $this->container['forceRedirect'] = isset($data['forceRedirect']) ? $data['forceRedirect'] : null;
        $this->container['httpsTlsVersion'] = isset($data['httpsTlsVersion']) ? $data['httpsTlsVersion'] : null;
        $this->container['accessAreaFilter'] = isset($data['accessAreaFilter']) ? $data['accessAreaFilter'] : null;
        $this->container['urlAuth'] = isset($data['urlAuth']) ? $data['urlAuth'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
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
    * Gets httpResponseHeader
    *  **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 调用接口修改响应头时，将覆盖原先已配置的响应头，因此，在使用此接口时，请上传全量头部信息
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpResponseHeader[]|null $httpResponseHeader **参数解释：** HTTP响应头，CDN节点响应客户端时，根据HTTP响应头配置操作响应的HTTP头部信息 **约束限制：** - 调用接口修改响应头时，将覆盖原先已配置的响应头，因此，在使用此接口时，请上传全量头部信息
    *
    * @return $this
    */
    public function setHttpResponseHeader($httpResponseHeader)
    {
        $this->container['httpResponseHeader'] = $httpResponseHeader;
        return $this;
    }

    /**
    * Gets cacheRules
    *  **参数解释：** 设置源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\CacheRules[]|null $cacheRules **参数解释：** 设置源站资源在CDN节点的缓存时长 **约束限制：** 必须存在一条所有文件类型的规则
    *
    * @return $this
    */
    public function setCacheRules($cacheRules)
    {
        $this->container['cacheRules'] = $cacheRules;
        return $this;
    }

    /**
    * Gets originFollow302Status
    *  **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
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
    * @param string|null $originFollow302Status **参数解释：** 开启回源跟随，当源站地址因业务需求做了301/302 重定向，CDN节点会先跳转到301/302对应地址获取资源，缓存后再返回给用户 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginFollow302Status($originFollow302Status)
    {
        $this->container['originFollow302Status'] = $originFollow302Status;
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
    * Gets originRangeStatus
    *  **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
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
    * @param string|null $originRangeStatus **参数解释：** Range回源，开启后，源站在收到CDN节点回源请求时，根据HTTP请求头中的Range信息返回指定范围的数据给CDN节点 **约束限制：** 开启Range回源的前提是您的源站支持Range请求，即HTTP请求头中包含Range字段，否则可能导致回源失败 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOriginRangeStatus($originRangeStatus)
    {
        $this->container['originRangeStatus'] = $originRangeStatus;
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
    * Gets flowLimitStrategy
    *  **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]|null
    */
    public function getFlowLimitStrategy()
    {
        return $this->container['flowLimitStrategy'];
    }

    /**
    * Sets flowLimitStrategy
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\FlowLimitStrategy[]|null $flowLimitStrategy **参数解释：** 设置用量封顶阈值，当实际用量大于阈值时停用域名，有效预防流量盗刷或恶意攻击带来的高额账单。  > 由于监控数据存在时延，域名将在用量达到阈值后的10分钟左右被停用  **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setFlowLimitStrategy($flowLimitStrategy)
    {
        $this->container['flowLimitStrategy'] = $flowLimitStrategy;
        return $this;
    }

    /**
    * Gets originRequestHeader
    *  **参数解释：** 回源请求头，CDN节点回源时，在请求源站时添加指定的HTTP请求头信息 **约束限制：** - 调用接口修改回源请求头时，将覆盖原先已配置的回源请求头
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
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\OriginRequestHeader[]|null $originRequestHeader **参数解释：** 回源请求头，CDN节点回源时，在请求源站时添加指定的HTTP请求头信息 **约束限制：** - 调用接口修改回源请求头时，将覆盖原先已配置的回源请求头
    *
    * @return $this
    */
    public function setOriginRequestHeader($originRequestHeader)
    {
        $this->container['originRequestHeader'] = $originRequestHeader;
        return $this;
    }

    /**
    * Gets https
    *  https
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpTemplateBody|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpTemplateBody|null $https https
    *
    * @return $this
    */
    public function setHttps($https)
    {
        $this->container['https'] = $https;
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
    * Gets httpsTlsVersion
    *  httpsTlsVersion
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\HttpsTlsVersion|null
    */
    public function getHttpsTlsVersion()
    {
        return $this->container['httpsTlsVersion'];
    }

    /**
    * Sets httpsTlsVersion
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\HttpsTlsVersion|null $httpsTlsVersion httpsTlsVersion
    *
    * @return $this
    */
    public function setHttpsTlsVersion($httpsTlsVersion)
    {
        $this->container['httpsTlsVersion'] = $httpsTlsVersion;
        return $this;
    }

    /**
    * Gets accessAreaFilter
    *  **参数解释：** 区域访问控制，通过配置访问控制规则限制客户端所在地区，实现只允许或只禁止特定地区的用户访问资源 **约束限制：** - 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\AccessAreaFilter[]|null
    */
    public function getAccessAreaFilter()
    {
        return $this->container['accessAreaFilter'];
    }

    /**
    * Sets accessAreaFilter
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\AccessAreaFilter[]|null $accessAreaFilter **参数解释：** 区域访问控制，通过配置访问控制规则限制客户端所在地区，实现只允许或只禁止特定地区的用户访问资源 **约束限制：** - 不涉及
    *
    * @return $this
    */
    public function setAccessAreaFilter($accessAreaFilter)
    {
        $this->container['accessAreaFilter'] = $accessAreaFilter;
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
    * Gets rules
    *  **参数解释：** 规则引擎，通过配置规则来对请求和响应进行自定义控制 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\RuleResponse[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\RuleResponse[]|null $rules **参数解释：** 规则引擎，通过配置规则来对请求和响应进行自定义控制 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

