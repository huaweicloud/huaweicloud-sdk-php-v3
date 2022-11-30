<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConsoleConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConsoleConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eps  是否支持EPS，false：不支持；true：支持
    * tls  是否支持的TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，false：不支持；true：支持
    * ipv6  是否支持IPV6，false：不支持；true：支持
    * alert  是否支持告警，false：不支持；true：支持
    * custom  是否支持精准防护，false：不支持；true：支持
    * elbMode  是否支持ELB模式，false：不支持；true：支持
    * eventLts  是否支持LTS全量日志，false：不支持；true：支持
    * multiDns  是否支持多DNS解析，false：不支持；true：支持
    * searchIp  是否支持搜索IP，false：不支持；true：支持
    * ccEnhance  是否支持CC增强，false：不支持；true：支持
    * cnameSwitch  是否支持cname切换，false：不支持；true：支持
    * customBlock  是否支持自定义拦截页面，false：不支持，true：支持
    * advancedIgnore  是否支持误报屏蔽，false：不支持；true：支持
    * jsCrawlerEnable  是否支持js反爬虫，false：不支持；true：支持
    * deepDecodeEnable  是否支持web基础防护深度检测，false：不支持；true：支持
    * overviewBandwidth  是否支持安全总览带宽统计，false：不支持；true：支持
    * proxyUseOldcname  是否支持使用旧cname解析，false：不支持；true：支持
    * checkAllHeadersEnable  是否支持检查所有的header，false：不支持；true：支持
    * geoipEnable  是否支持地理位置访问控制，false：不支持；true：支持
    * loadBalanceEnable  是否支持域名访问负载均衡配置，false：不支持；true：支持
    * ipv6ProtectionEnable  是否支持ipv6防护，false：不支持；true：支持
    * policySharingEnable  是否支持策略共享，false：不支持；true：支持
    * ipGroup  是否支持ip地址组，false：不支持；true：支持
    * robotActionEnable  是否支持网站反爬虫，false：不支持；true：支持
    * http2Enable  是否支持http2，false：不支持；true：支持
    * timeoutConfigEnable  是否支持超时配置，false：不支持；true：支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eps' => 'bool',
            'tls' => 'bool',
            'ipv6' => 'bool',
            'alert' => 'bool',
            'custom' => 'bool',
            'elbMode' => 'bool',
            'eventLts' => 'bool',
            'multiDns' => 'bool',
            'searchIp' => 'bool',
            'ccEnhance' => 'bool',
            'cnameSwitch' => 'bool',
            'customBlock' => 'bool',
            'advancedIgnore' => 'bool',
            'jsCrawlerEnable' => 'bool',
            'deepDecodeEnable' => 'bool',
            'overviewBandwidth' => 'bool',
            'proxyUseOldcname' => 'bool',
            'checkAllHeadersEnable' => 'bool',
            'geoipEnable' => 'bool',
            'loadBalanceEnable' => 'bool',
            'ipv6ProtectionEnable' => 'bool',
            'policySharingEnable' => 'bool',
            'ipGroup' => 'bool',
            'robotActionEnable' => 'bool',
            'http2Enable' => 'bool',
            'timeoutConfigEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eps  是否支持EPS，false：不支持；true：支持
    * tls  是否支持的TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，false：不支持；true：支持
    * ipv6  是否支持IPV6，false：不支持；true：支持
    * alert  是否支持告警，false：不支持；true：支持
    * custom  是否支持精准防护，false：不支持；true：支持
    * elbMode  是否支持ELB模式，false：不支持；true：支持
    * eventLts  是否支持LTS全量日志，false：不支持；true：支持
    * multiDns  是否支持多DNS解析，false：不支持；true：支持
    * searchIp  是否支持搜索IP，false：不支持；true：支持
    * ccEnhance  是否支持CC增强，false：不支持；true：支持
    * cnameSwitch  是否支持cname切换，false：不支持；true：支持
    * customBlock  是否支持自定义拦截页面，false：不支持，true：支持
    * advancedIgnore  是否支持误报屏蔽，false：不支持；true：支持
    * jsCrawlerEnable  是否支持js反爬虫，false：不支持；true：支持
    * deepDecodeEnable  是否支持web基础防护深度检测，false：不支持；true：支持
    * overviewBandwidth  是否支持安全总览带宽统计，false：不支持；true：支持
    * proxyUseOldcname  是否支持使用旧cname解析，false：不支持；true：支持
    * checkAllHeadersEnable  是否支持检查所有的header，false：不支持；true：支持
    * geoipEnable  是否支持地理位置访问控制，false：不支持；true：支持
    * loadBalanceEnable  是否支持域名访问负载均衡配置，false：不支持；true：支持
    * ipv6ProtectionEnable  是否支持ipv6防护，false：不支持；true：支持
    * policySharingEnable  是否支持策略共享，false：不支持；true：支持
    * ipGroup  是否支持ip地址组，false：不支持；true：支持
    * robotActionEnable  是否支持网站反爬虫，false：不支持；true：支持
    * http2Enable  是否支持http2，false：不支持；true：支持
    * timeoutConfigEnable  是否支持超时配置，false：不支持；true：支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eps' => null,
        'tls' => null,
        'ipv6' => null,
        'alert' => null,
        'custom' => null,
        'elbMode' => null,
        'eventLts' => null,
        'multiDns' => null,
        'searchIp' => null,
        'ccEnhance' => null,
        'cnameSwitch' => null,
        'customBlock' => null,
        'advancedIgnore' => null,
        'jsCrawlerEnable' => null,
        'deepDecodeEnable' => null,
        'overviewBandwidth' => null,
        'proxyUseOldcname' => null,
        'checkAllHeadersEnable' => null,
        'geoipEnable' => null,
        'loadBalanceEnable' => null,
        'ipv6ProtectionEnable' => null,
        'policySharingEnable' => null,
        'ipGroup' => null,
        'robotActionEnable' => null,
        'http2Enable' => null,
        'timeoutConfigEnable' => null
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
    * eps  是否支持EPS，false：不支持；true：支持
    * tls  是否支持的TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，false：不支持；true：支持
    * ipv6  是否支持IPV6，false：不支持；true：支持
    * alert  是否支持告警，false：不支持；true：支持
    * custom  是否支持精准防护，false：不支持；true：支持
    * elbMode  是否支持ELB模式，false：不支持；true：支持
    * eventLts  是否支持LTS全量日志，false：不支持；true：支持
    * multiDns  是否支持多DNS解析，false：不支持；true：支持
    * searchIp  是否支持搜索IP，false：不支持；true：支持
    * ccEnhance  是否支持CC增强，false：不支持；true：支持
    * cnameSwitch  是否支持cname切换，false：不支持；true：支持
    * customBlock  是否支持自定义拦截页面，false：不支持，true：支持
    * advancedIgnore  是否支持误报屏蔽，false：不支持；true：支持
    * jsCrawlerEnable  是否支持js反爬虫，false：不支持；true：支持
    * deepDecodeEnable  是否支持web基础防护深度检测，false：不支持；true：支持
    * overviewBandwidth  是否支持安全总览带宽统计，false：不支持；true：支持
    * proxyUseOldcname  是否支持使用旧cname解析，false：不支持；true：支持
    * checkAllHeadersEnable  是否支持检查所有的header，false：不支持；true：支持
    * geoipEnable  是否支持地理位置访问控制，false：不支持；true：支持
    * loadBalanceEnable  是否支持域名访问负载均衡配置，false：不支持；true：支持
    * ipv6ProtectionEnable  是否支持ipv6防护，false：不支持；true：支持
    * policySharingEnable  是否支持策略共享，false：不支持；true：支持
    * ipGroup  是否支持ip地址组，false：不支持；true：支持
    * robotActionEnable  是否支持网站反爬虫，false：不支持；true：支持
    * http2Enable  是否支持http2，false：不支持；true：支持
    * timeoutConfigEnable  是否支持超时配置，false：不支持；true：支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eps' => 'eps',
            'tls' => 'tls',
            'ipv6' => 'ipv6',
            'alert' => 'alert',
            'custom' => 'custom',
            'elbMode' => 'elb_mode',
            'eventLts' => 'event_lts',
            'multiDns' => 'multi_dns',
            'searchIp' => 'search_ip',
            'ccEnhance' => 'cc_enhance',
            'cnameSwitch' => 'cname_switch',
            'customBlock' => 'custom_block',
            'advancedIgnore' => 'advanced_ignore',
            'jsCrawlerEnable' => 'js_crawler_enable',
            'deepDecodeEnable' => 'deep_decode_enable',
            'overviewBandwidth' => 'overview_bandwidth',
            'proxyUseOldcname' => 'proxy_use_oldcname',
            'checkAllHeadersEnable' => 'check_all_headers_enable',
            'geoipEnable' => 'geoip_enable',
            'loadBalanceEnable' => 'load_balance_enable',
            'ipv6ProtectionEnable' => 'ipv6_protection_enable',
            'policySharingEnable' => 'policy_sharing_enable',
            'ipGroup' => 'ip_group',
            'robotActionEnable' => 'robot_action_enable',
            'http2Enable' => 'http2_enable',
            'timeoutConfigEnable' => 'timeout_config_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eps  是否支持EPS，false：不支持；true：支持
    * tls  是否支持的TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，false：不支持；true：支持
    * ipv6  是否支持IPV6，false：不支持；true：支持
    * alert  是否支持告警，false：不支持；true：支持
    * custom  是否支持精准防护，false：不支持；true：支持
    * elbMode  是否支持ELB模式，false：不支持；true：支持
    * eventLts  是否支持LTS全量日志，false：不支持；true：支持
    * multiDns  是否支持多DNS解析，false：不支持；true：支持
    * searchIp  是否支持搜索IP，false：不支持；true：支持
    * ccEnhance  是否支持CC增强，false：不支持；true：支持
    * cnameSwitch  是否支持cname切换，false：不支持；true：支持
    * customBlock  是否支持自定义拦截页面，false：不支持，true：支持
    * advancedIgnore  是否支持误报屏蔽，false：不支持；true：支持
    * jsCrawlerEnable  是否支持js反爬虫，false：不支持；true：支持
    * deepDecodeEnable  是否支持web基础防护深度检测，false：不支持；true：支持
    * overviewBandwidth  是否支持安全总览带宽统计，false：不支持；true：支持
    * proxyUseOldcname  是否支持使用旧cname解析，false：不支持；true：支持
    * checkAllHeadersEnable  是否支持检查所有的header，false：不支持；true：支持
    * geoipEnable  是否支持地理位置访问控制，false：不支持；true：支持
    * loadBalanceEnable  是否支持域名访问负载均衡配置，false：不支持；true：支持
    * ipv6ProtectionEnable  是否支持ipv6防护，false：不支持；true：支持
    * policySharingEnable  是否支持策略共享，false：不支持；true：支持
    * ipGroup  是否支持ip地址组，false：不支持；true：支持
    * robotActionEnable  是否支持网站反爬虫，false：不支持；true：支持
    * http2Enable  是否支持http2，false：不支持；true：支持
    * timeoutConfigEnable  是否支持超时配置，false：不支持；true：支持
    *
    * @var string[]
    */
    protected static $setters = [
            'eps' => 'setEps',
            'tls' => 'setTls',
            'ipv6' => 'setIpv6',
            'alert' => 'setAlert',
            'custom' => 'setCustom',
            'elbMode' => 'setElbMode',
            'eventLts' => 'setEventLts',
            'multiDns' => 'setMultiDns',
            'searchIp' => 'setSearchIp',
            'ccEnhance' => 'setCcEnhance',
            'cnameSwitch' => 'setCnameSwitch',
            'customBlock' => 'setCustomBlock',
            'advancedIgnore' => 'setAdvancedIgnore',
            'jsCrawlerEnable' => 'setJsCrawlerEnable',
            'deepDecodeEnable' => 'setDeepDecodeEnable',
            'overviewBandwidth' => 'setOverviewBandwidth',
            'proxyUseOldcname' => 'setProxyUseOldcname',
            'checkAllHeadersEnable' => 'setCheckAllHeadersEnable',
            'geoipEnable' => 'setGeoipEnable',
            'loadBalanceEnable' => 'setLoadBalanceEnable',
            'ipv6ProtectionEnable' => 'setIpv6ProtectionEnable',
            'policySharingEnable' => 'setPolicySharingEnable',
            'ipGroup' => 'setIpGroup',
            'robotActionEnable' => 'setRobotActionEnable',
            'http2Enable' => 'setHttp2Enable',
            'timeoutConfigEnable' => 'setTimeoutConfigEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eps  是否支持EPS，false：不支持；true：支持
    * tls  是否支持的TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，false：不支持；true：支持
    * ipv6  是否支持IPV6，false：不支持；true：支持
    * alert  是否支持告警，false：不支持；true：支持
    * custom  是否支持精准防护，false：不支持；true：支持
    * elbMode  是否支持ELB模式，false：不支持；true：支持
    * eventLts  是否支持LTS全量日志，false：不支持；true：支持
    * multiDns  是否支持多DNS解析，false：不支持；true：支持
    * searchIp  是否支持搜索IP，false：不支持；true：支持
    * ccEnhance  是否支持CC增强，false：不支持；true：支持
    * cnameSwitch  是否支持cname切换，false：不支持；true：支持
    * customBlock  是否支持自定义拦截页面，false：不支持，true：支持
    * advancedIgnore  是否支持误报屏蔽，false：不支持；true：支持
    * jsCrawlerEnable  是否支持js反爬虫，false：不支持；true：支持
    * deepDecodeEnable  是否支持web基础防护深度检测，false：不支持；true：支持
    * overviewBandwidth  是否支持安全总览带宽统计，false：不支持；true：支持
    * proxyUseOldcname  是否支持使用旧cname解析，false：不支持；true：支持
    * checkAllHeadersEnable  是否支持检查所有的header，false：不支持；true：支持
    * geoipEnable  是否支持地理位置访问控制，false：不支持；true：支持
    * loadBalanceEnable  是否支持域名访问负载均衡配置，false：不支持；true：支持
    * ipv6ProtectionEnable  是否支持ipv6防护，false：不支持；true：支持
    * policySharingEnable  是否支持策略共享，false：不支持；true：支持
    * ipGroup  是否支持ip地址组，false：不支持；true：支持
    * robotActionEnable  是否支持网站反爬虫，false：不支持；true：支持
    * http2Enable  是否支持http2，false：不支持；true：支持
    * timeoutConfigEnable  是否支持超时配置，false：不支持；true：支持
    *
    * @var string[]
    */
    protected static $getters = [
            'eps' => 'getEps',
            'tls' => 'getTls',
            'ipv6' => 'getIpv6',
            'alert' => 'getAlert',
            'custom' => 'getCustom',
            'elbMode' => 'getElbMode',
            'eventLts' => 'getEventLts',
            'multiDns' => 'getMultiDns',
            'searchIp' => 'getSearchIp',
            'ccEnhance' => 'getCcEnhance',
            'cnameSwitch' => 'getCnameSwitch',
            'customBlock' => 'getCustomBlock',
            'advancedIgnore' => 'getAdvancedIgnore',
            'jsCrawlerEnable' => 'getJsCrawlerEnable',
            'deepDecodeEnable' => 'getDeepDecodeEnable',
            'overviewBandwidth' => 'getOverviewBandwidth',
            'proxyUseOldcname' => 'getProxyUseOldcname',
            'checkAllHeadersEnable' => 'getCheckAllHeadersEnable',
            'geoipEnable' => 'getGeoipEnable',
            'loadBalanceEnable' => 'getLoadBalanceEnable',
            'ipv6ProtectionEnable' => 'getIpv6ProtectionEnable',
            'policySharingEnable' => 'getPolicySharingEnable',
            'ipGroup' => 'getIpGroup',
            'robotActionEnable' => 'getRobotActionEnable',
            'http2Enable' => 'getHttp2Enable',
            'timeoutConfigEnable' => 'getTimeoutConfigEnable'
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
        $this->container['eps'] = isset($data['eps']) ? $data['eps'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['ipv6'] = isset($data['ipv6']) ? $data['ipv6'] : null;
        $this->container['alert'] = isset($data['alert']) ? $data['alert'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['elbMode'] = isset($data['elbMode']) ? $data['elbMode'] : null;
        $this->container['eventLts'] = isset($data['eventLts']) ? $data['eventLts'] : null;
        $this->container['multiDns'] = isset($data['multiDns']) ? $data['multiDns'] : null;
        $this->container['searchIp'] = isset($data['searchIp']) ? $data['searchIp'] : null;
        $this->container['ccEnhance'] = isset($data['ccEnhance']) ? $data['ccEnhance'] : null;
        $this->container['cnameSwitch'] = isset($data['cnameSwitch']) ? $data['cnameSwitch'] : null;
        $this->container['customBlock'] = isset($data['customBlock']) ? $data['customBlock'] : null;
        $this->container['advancedIgnore'] = isset($data['advancedIgnore']) ? $data['advancedIgnore'] : null;
        $this->container['jsCrawlerEnable'] = isset($data['jsCrawlerEnable']) ? $data['jsCrawlerEnable'] : null;
        $this->container['deepDecodeEnable'] = isset($data['deepDecodeEnable']) ? $data['deepDecodeEnable'] : null;
        $this->container['overviewBandwidth'] = isset($data['overviewBandwidth']) ? $data['overviewBandwidth'] : null;
        $this->container['proxyUseOldcname'] = isset($data['proxyUseOldcname']) ? $data['proxyUseOldcname'] : null;
        $this->container['checkAllHeadersEnable'] = isset($data['checkAllHeadersEnable']) ? $data['checkAllHeadersEnable'] : null;
        $this->container['geoipEnable'] = isset($data['geoipEnable']) ? $data['geoipEnable'] : null;
        $this->container['loadBalanceEnable'] = isset($data['loadBalanceEnable']) ? $data['loadBalanceEnable'] : null;
        $this->container['ipv6ProtectionEnable'] = isset($data['ipv6ProtectionEnable']) ? $data['ipv6ProtectionEnable'] : null;
        $this->container['policySharingEnable'] = isset($data['policySharingEnable']) ? $data['policySharingEnable'] : null;
        $this->container['ipGroup'] = isset($data['ipGroup']) ? $data['ipGroup'] : null;
        $this->container['robotActionEnable'] = isset($data['robotActionEnable']) ? $data['robotActionEnable'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['timeoutConfigEnable'] = isset($data['timeoutConfigEnable']) ? $data['timeoutConfigEnable'] : null;
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
    * Gets eps
    *  是否支持EPS，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getEps()
    {
        return $this->container['eps'];
    }

    /**
    * Sets eps
    *
    * @param bool|null $eps 是否支持EPS，false：不支持；true：支持
    *
    * @return $this
    */
    public function setEps($eps)
    {
        $this->container['eps'] = $eps;
        return $this;
    }

    /**
    * Gets tls
    *  是否支持的TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
    * Sets tls
    *
    * @param bool|null $tls 是否支持的TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，false：不支持；true：支持
    *
    * @return $this
    */
    public function setTls($tls)
    {
        $this->container['tls'] = $tls;
        return $this;
    }

    /**
    * Gets ipv6
    *  是否支持IPV6，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getIpv6()
    {
        return $this->container['ipv6'];
    }

    /**
    * Sets ipv6
    *
    * @param bool|null $ipv6 是否支持IPV6，false：不支持；true：支持
    *
    * @return $this
    */
    public function setIpv6($ipv6)
    {
        $this->container['ipv6'] = $ipv6;
        return $this;
    }

    /**
    * Gets alert
    *  是否支持告警，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getAlert()
    {
        return $this->container['alert'];
    }

    /**
    * Sets alert
    *
    * @param bool|null $alert 是否支持告警，false：不支持；true：支持
    *
    * @return $this
    */
    public function setAlert($alert)
    {
        $this->container['alert'] = $alert;
        return $this;
    }

    /**
    * Gets custom
    *  是否支持精准防护，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
    * Sets custom
    *
    * @param bool|null $custom 是否支持精准防护，false：不支持；true：支持
    *
    * @return $this
    */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;
        return $this;
    }

    /**
    * Gets elbMode
    *  是否支持ELB模式，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getElbMode()
    {
        return $this->container['elbMode'];
    }

    /**
    * Sets elbMode
    *
    * @param bool|null $elbMode 是否支持ELB模式，false：不支持；true：支持
    *
    * @return $this
    */
    public function setElbMode($elbMode)
    {
        $this->container['elbMode'] = $elbMode;
        return $this;
    }

    /**
    * Gets eventLts
    *  是否支持LTS全量日志，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getEventLts()
    {
        return $this->container['eventLts'];
    }

    /**
    * Sets eventLts
    *
    * @param bool|null $eventLts 是否支持LTS全量日志，false：不支持；true：支持
    *
    * @return $this
    */
    public function setEventLts($eventLts)
    {
        $this->container['eventLts'] = $eventLts;
        return $this;
    }

    /**
    * Gets multiDns
    *  是否支持多DNS解析，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getMultiDns()
    {
        return $this->container['multiDns'];
    }

    /**
    * Sets multiDns
    *
    * @param bool|null $multiDns 是否支持多DNS解析，false：不支持；true：支持
    *
    * @return $this
    */
    public function setMultiDns($multiDns)
    {
        $this->container['multiDns'] = $multiDns;
        return $this;
    }

    /**
    * Gets searchIp
    *  是否支持搜索IP，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getSearchIp()
    {
        return $this->container['searchIp'];
    }

    /**
    * Sets searchIp
    *
    * @param bool|null $searchIp 是否支持搜索IP，false：不支持；true：支持
    *
    * @return $this
    */
    public function setSearchIp($searchIp)
    {
        $this->container['searchIp'] = $searchIp;
        return $this;
    }

    /**
    * Gets ccEnhance
    *  是否支持CC增强，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getCcEnhance()
    {
        return $this->container['ccEnhance'];
    }

    /**
    * Sets ccEnhance
    *
    * @param bool|null $ccEnhance 是否支持CC增强，false：不支持；true：支持
    *
    * @return $this
    */
    public function setCcEnhance($ccEnhance)
    {
        $this->container['ccEnhance'] = $ccEnhance;
        return $this;
    }

    /**
    * Gets cnameSwitch
    *  是否支持cname切换，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getCnameSwitch()
    {
        return $this->container['cnameSwitch'];
    }

    /**
    * Sets cnameSwitch
    *
    * @param bool|null $cnameSwitch 是否支持cname切换，false：不支持；true：支持
    *
    * @return $this
    */
    public function setCnameSwitch($cnameSwitch)
    {
        $this->container['cnameSwitch'] = $cnameSwitch;
        return $this;
    }

    /**
    * Gets customBlock
    *  是否支持自定义拦截页面，false：不支持，true：支持
    *
    * @return bool|null
    */
    public function getCustomBlock()
    {
        return $this->container['customBlock'];
    }

    /**
    * Sets customBlock
    *
    * @param bool|null $customBlock 是否支持自定义拦截页面，false：不支持，true：支持
    *
    * @return $this
    */
    public function setCustomBlock($customBlock)
    {
        $this->container['customBlock'] = $customBlock;
        return $this;
    }

    /**
    * Gets advancedIgnore
    *  是否支持误报屏蔽，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getAdvancedIgnore()
    {
        return $this->container['advancedIgnore'];
    }

    /**
    * Sets advancedIgnore
    *
    * @param bool|null $advancedIgnore 是否支持误报屏蔽，false：不支持；true：支持
    *
    * @return $this
    */
    public function setAdvancedIgnore($advancedIgnore)
    {
        $this->container['advancedIgnore'] = $advancedIgnore;
        return $this;
    }

    /**
    * Gets jsCrawlerEnable
    *  是否支持js反爬虫，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getJsCrawlerEnable()
    {
        return $this->container['jsCrawlerEnable'];
    }

    /**
    * Sets jsCrawlerEnable
    *
    * @param bool|null $jsCrawlerEnable 是否支持js反爬虫，false：不支持；true：支持
    *
    * @return $this
    */
    public function setJsCrawlerEnable($jsCrawlerEnable)
    {
        $this->container['jsCrawlerEnable'] = $jsCrawlerEnable;
        return $this;
    }

    /**
    * Gets deepDecodeEnable
    *  是否支持web基础防护深度检测，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getDeepDecodeEnable()
    {
        return $this->container['deepDecodeEnable'];
    }

    /**
    * Sets deepDecodeEnable
    *
    * @param bool|null $deepDecodeEnable 是否支持web基础防护深度检测，false：不支持；true：支持
    *
    * @return $this
    */
    public function setDeepDecodeEnable($deepDecodeEnable)
    {
        $this->container['deepDecodeEnable'] = $deepDecodeEnable;
        return $this;
    }

    /**
    * Gets overviewBandwidth
    *  是否支持安全总览带宽统计，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getOverviewBandwidth()
    {
        return $this->container['overviewBandwidth'];
    }

    /**
    * Sets overviewBandwidth
    *
    * @param bool|null $overviewBandwidth 是否支持安全总览带宽统计，false：不支持；true：支持
    *
    * @return $this
    */
    public function setOverviewBandwidth($overviewBandwidth)
    {
        $this->container['overviewBandwidth'] = $overviewBandwidth;
        return $this;
    }

    /**
    * Gets proxyUseOldcname
    *  是否支持使用旧cname解析，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getProxyUseOldcname()
    {
        return $this->container['proxyUseOldcname'];
    }

    /**
    * Sets proxyUseOldcname
    *
    * @param bool|null $proxyUseOldcname 是否支持使用旧cname解析，false：不支持；true：支持
    *
    * @return $this
    */
    public function setProxyUseOldcname($proxyUseOldcname)
    {
        $this->container['proxyUseOldcname'] = $proxyUseOldcname;
        return $this;
    }

    /**
    * Gets checkAllHeadersEnable
    *  是否支持检查所有的header，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getCheckAllHeadersEnable()
    {
        return $this->container['checkAllHeadersEnable'];
    }

    /**
    * Sets checkAllHeadersEnable
    *
    * @param bool|null $checkAllHeadersEnable 是否支持检查所有的header，false：不支持；true：支持
    *
    * @return $this
    */
    public function setCheckAllHeadersEnable($checkAllHeadersEnable)
    {
        $this->container['checkAllHeadersEnable'] = $checkAllHeadersEnable;
        return $this;
    }

    /**
    * Gets geoipEnable
    *  是否支持地理位置访问控制，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getGeoipEnable()
    {
        return $this->container['geoipEnable'];
    }

    /**
    * Sets geoipEnable
    *
    * @param bool|null $geoipEnable 是否支持地理位置访问控制，false：不支持；true：支持
    *
    * @return $this
    */
    public function setGeoipEnable($geoipEnable)
    {
        $this->container['geoipEnable'] = $geoipEnable;
        return $this;
    }

    /**
    * Gets loadBalanceEnable
    *  是否支持域名访问负载均衡配置，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getLoadBalanceEnable()
    {
        return $this->container['loadBalanceEnable'];
    }

    /**
    * Sets loadBalanceEnable
    *
    * @param bool|null $loadBalanceEnable 是否支持域名访问负载均衡配置，false：不支持；true：支持
    *
    * @return $this
    */
    public function setLoadBalanceEnable($loadBalanceEnable)
    {
        $this->container['loadBalanceEnable'] = $loadBalanceEnable;
        return $this;
    }

    /**
    * Gets ipv6ProtectionEnable
    *  是否支持ipv6防护，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getIpv6ProtectionEnable()
    {
        return $this->container['ipv6ProtectionEnable'];
    }

    /**
    * Sets ipv6ProtectionEnable
    *
    * @param bool|null $ipv6ProtectionEnable 是否支持ipv6防护，false：不支持；true：支持
    *
    * @return $this
    */
    public function setIpv6ProtectionEnable($ipv6ProtectionEnable)
    {
        $this->container['ipv6ProtectionEnable'] = $ipv6ProtectionEnable;
        return $this;
    }

    /**
    * Gets policySharingEnable
    *  是否支持策略共享，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getPolicySharingEnable()
    {
        return $this->container['policySharingEnable'];
    }

    /**
    * Sets policySharingEnable
    *
    * @param bool|null $policySharingEnable 是否支持策略共享，false：不支持；true：支持
    *
    * @return $this
    */
    public function setPolicySharingEnable($policySharingEnable)
    {
        $this->container['policySharingEnable'] = $policySharingEnable;
        return $this;
    }

    /**
    * Gets ipGroup
    *  是否支持ip地址组，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getIpGroup()
    {
        return $this->container['ipGroup'];
    }

    /**
    * Sets ipGroup
    *
    * @param bool|null $ipGroup 是否支持ip地址组，false：不支持；true：支持
    *
    * @return $this
    */
    public function setIpGroup($ipGroup)
    {
        $this->container['ipGroup'] = $ipGroup;
        return $this;
    }

    /**
    * Gets robotActionEnable
    *  是否支持网站反爬虫，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getRobotActionEnable()
    {
        return $this->container['robotActionEnable'];
    }

    /**
    * Sets robotActionEnable
    *
    * @param bool|null $robotActionEnable 是否支持网站反爬虫，false：不支持；true：支持
    *
    * @return $this
    */
    public function setRobotActionEnable($robotActionEnable)
    {
        $this->container['robotActionEnable'] = $robotActionEnable;
        return $this;
    }

    /**
    * Gets http2Enable
    *  是否支持http2，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getHttp2Enable()
    {
        return $this->container['http2Enable'];
    }

    /**
    * Sets http2Enable
    *
    * @param bool|null $http2Enable 是否支持http2，false：不支持；true：支持
    *
    * @return $this
    */
    public function setHttp2Enable($http2Enable)
    {
        $this->container['http2Enable'] = $http2Enable;
        return $this;
    }

    /**
    * Gets timeoutConfigEnable
    *  是否支持超时配置，false：不支持；true：支持
    *
    * @return bool|null
    */
    public function getTimeoutConfigEnable()
    {
        return $this->container['timeoutConfigEnable'];
    }

    /**
    * Sets timeoutConfigEnable
    *
    * @param bool|null $timeoutConfigEnable 是否支持超时配置，false：不支持；true：支持
    *
    * @return $this
    */
    public function setTimeoutConfigEnable($timeoutConfigEnable)
    {
        $this->container['timeoutConfigEnable'] = $timeoutConfigEnable;
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

