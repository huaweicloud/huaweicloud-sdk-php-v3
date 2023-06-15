<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHostRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHostRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * server  防护域名的源站服务器配置信息
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * ipv6Enable  是否开启IPv6防护，仅专业版（原企业版）和铂金版（原旗舰版）支持IPv6防护。   - true：开启IPv6防护   - false：关闭IPV6防护
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * blockPage  blockPage
    * trafficMark  trafficMark
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxy' => 'bool',
            'certificateid' => 'string',
            'certificatename' => 'string',
            'server' => '\HuaweiCloud\SDK\Waf\V1\Model\CloudWafServer[]',
            'tls' => 'string',
            'cipher' => 'string',
            'http2Enable' => 'bool',
            'ipv6Enable' => 'bool',
            'webTag' => 'string',
            'exclusiveIp' => 'bool',
            'paidType' => 'string',
            'blockPage' => '\HuaweiCloud\SDK\Waf\V1\Model\BlockPage',
            'trafficMark' => '\HuaweiCloud\SDK\Waf\V1\Model\TrafficMark',
            'flag' => '\HuaweiCloud\SDK\Waf\V1\Model\Flag',
            'extend' => 'map[string,string]',
            'circuitBreaker' => '\HuaweiCloud\SDK\Waf\V1\Model\CircuitBreaker',
            'timeoutConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\TimeoutConfig',
            'forwardHeaderMap' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * server  防护域名的源站服务器配置信息
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * ipv6Enable  是否开启IPv6防护，仅专业版（原企业版）和铂金版（原旗舰版）支持IPv6防护。   - true：开启IPv6防护   - false：关闭IPV6防护
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * blockPage  blockPage
    * trafficMark  trafficMark
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxy' => null,
        'certificateid' => null,
        'certificatename' => null,
        'server' => null,
        'tls' => null,
        'cipher' => null,
        'http2Enable' => null,
        'ipv6Enable' => null,
        'webTag' => null,
        'exclusiveIp' => null,
        'paidType' => null,
        'blockPage' => null,
        'trafficMark' => null,
        'flag' => null,
        'extend' => null,
        'circuitBreaker' => null,
        'timeoutConfig' => null,
        'forwardHeaderMap' => null
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
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * server  防护域名的源站服务器配置信息
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * ipv6Enable  是否开启IPv6防护，仅专业版（原企业版）和铂金版（原旗舰版）支持IPv6防护。   - true：开启IPv6防护   - false：关闭IPV6防护
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * blockPage  blockPage
    * trafficMark  trafficMark
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxy' => 'proxy',
            'certificateid' => 'certificateid',
            'certificatename' => 'certificatename',
            'server' => 'server',
            'tls' => 'tls',
            'cipher' => 'cipher',
            'http2Enable' => 'http2_enable',
            'ipv6Enable' => 'ipv6_enable',
            'webTag' => 'web_tag',
            'exclusiveIp' => 'exclusive_ip',
            'paidType' => 'paid_type',
            'blockPage' => 'block_page',
            'trafficMark' => 'traffic_mark',
            'flag' => 'flag',
            'extend' => 'extend',
            'circuitBreaker' => 'circuit_breaker',
            'timeoutConfig' => 'timeout_config',
            'forwardHeaderMap' => 'forward_header_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * server  防护域名的源站服务器配置信息
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * ipv6Enable  是否开启IPv6防护，仅专业版（原企业版）和铂金版（原旗舰版）支持IPv6防护。   - true：开启IPv6防护   - false：关闭IPV6防护
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * blockPage  blockPage
    * trafficMark  trafficMark
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $setters = [
            'proxy' => 'setProxy',
            'certificateid' => 'setCertificateid',
            'certificatename' => 'setCertificatename',
            'server' => 'setServer',
            'tls' => 'setTls',
            'cipher' => 'setCipher',
            'http2Enable' => 'setHttp2Enable',
            'ipv6Enable' => 'setIpv6Enable',
            'webTag' => 'setWebTag',
            'exclusiveIp' => 'setExclusiveIp',
            'paidType' => 'setPaidType',
            'blockPage' => 'setBlockPage',
            'trafficMark' => 'setTrafficMark',
            'flag' => 'setFlag',
            'extend' => 'setExtend',
            'circuitBreaker' => 'setCircuitBreaker',
            'timeoutConfig' => 'setTimeoutConfig',
            'forwardHeaderMap' => 'setForwardHeaderMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * server  防护域名的源站服务器配置信息
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * ipv6Enable  是否开启IPv6防护，仅专业版（原企业版）和铂金版（原旗舰版）支持IPv6防护。   - true：开启IPv6防护   - false：关闭IPV6防护
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * blockPage  blockPage
    * trafficMark  trafficMark
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $getters = [
            'proxy' => 'getProxy',
            'certificateid' => 'getCertificateid',
            'certificatename' => 'getCertificatename',
            'server' => 'getServer',
            'tls' => 'getTls',
            'cipher' => 'getCipher',
            'http2Enable' => 'getHttp2Enable',
            'ipv6Enable' => 'getIpv6Enable',
            'webTag' => 'getWebTag',
            'exclusiveIp' => 'getExclusiveIp',
            'paidType' => 'getPaidType',
            'blockPage' => 'getBlockPage',
            'trafficMark' => 'getTrafficMark',
            'flag' => 'getFlag',
            'extend' => 'getExtend',
            'circuitBreaker' => 'getCircuitBreaker',
            'timeoutConfig' => 'getTimeoutConfig',
            'forwardHeaderMap' => 'getForwardHeaderMap'
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
    const TLS_TLS_V1_0 = 'TLS v1.0';
    const TLS_TLS_V1_1 = 'TLS v1.1';
    const TLS_TLS_V1_2 = 'TLS v1.2';
    const CIPHER_CIPHER_1 = 'cipher_1';
    const CIPHER_CIPHER_2 = 'cipher_2';
    const CIPHER_CIPHER_3 = 'cipher_3';
    const CIPHER_CIPHER_4 = 'cipher_4';
    const CIPHER_CIPHER_DEFAULT = 'cipher_default';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTlsAllowableValues()
    {
        return [
            self::TLS_TLS_V1_0,
            self::TLS_TLS_V1_1,
            self::TLS_TLS_V1_2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCipherAllowableValues()
    {
        return [
            self::CIPHER_CIPHER_1,
            self::CIPHER_CIPHER_2,
            self::CIPHER_CIPHER_3,
            self::CIPHER_CIPHER_4,
            self::CIPHER_CIPHER_DEFAULT,
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
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['certificateid'] = isset($data['certificateid']) ? $data['certificateid'] : null;
        $this->container['certificatename'] = isset($data['certificatename']) ? $data['certificatename'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['cipher'] = isset($data['cipher']) ? $data['cipher'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['webTag'] = isset($data['webTag']) ? $data['webTag'] : null;
        $this->container['exclusiveIp'] = isset($data['exclusiveIp']) ? $data['exclusiveIp'] : null;
        $this->container['paidType'] = isset($data['paidType']) ? $data['paidType'] : null;
        $this->container['blockPage'] = isset($data['blockPage']) ? $data['blockPage'] : null;
        $this->container['trafficMark'] = isset($data['trafficMark']) ? $data['trafficMark'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
        $this->container['circuitBreaker'] = isset($data['circuitBreaker']) ? $data['circuitBreaker'] : null;
        $this->container['timeoutConfig'] = isset($data['timeoutConfig']) ? $data['timeoutConfig'] : null;
        $this->container['forwardHeaderMap'] = isset($data['forwardHeaderMap']) ? $data['forwardHeaderMap'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTlsAllowableValues();
                if (!is_null($this->container['tls']) && !in_array($this->container['tls'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tls', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCipherAllowableValues();
                if (!is_null($this->container['cipher']) && !in_array($this->container['cipher'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cipher', must be one of '%s'",
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
    * Gets proxy
    *  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    *
    * @return bool|null
    */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
    * Sets proxy
    *
    * @param bool|null $proxy 防护域名是否使用代理   - false：不使用代理   - true：使用代理
    *
    * @return $this
    */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;
        return $this;
    }

    /**
    * Gets certificateid
    *  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    *
    * @return string|null
    */
    public function getCertificateid()
    {
        return $this->container['certificateid'];
    }

    /**
    * Sets certificateid
    *
    * @param string|null $certificateid 证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    *
    * @return $this
    */
    public function setCertificateid($certificateid)
    {
        $this->container['certificateid'] = $certificateid;
        return $this;
    }

    /**
    * Gets certificatename
    *  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    *
    * @return string|null
    */
    public function getCertificatename()
    {
        return $this->container['certificatename'];
    }

    /**
    * Sets certificatename
    *
    * @param string|null $certificatename 证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    *
    * @return $this
    */
    public function setCertificatename($certificatename)
    {
        $this->container['certificatename'] = $certificatename;
        return $this;
    }

    /**
    * Gets server
    *  防护域名的源站服务器配置信息
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CloudWafServer[]|null
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CloudWafServer[]|null $server 防护域名的源站服务器配置信息
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
        return $this;
    }

    /**
    * Gets tls
    *  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    *
    * @return string|null
    */
    public function getTls()
    {
        return $this->container['tls'];
    }

    /**
    * Sets tls
    *
    * @param string|null $tls 配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    *
    * @return $this
    */
    public function setTls($tls)
    {
        $this->container['tls'] = $tls;
        return $this;
    }

    /**
    * Gets cipher
    *  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    *
    * @return string|null
    */
    public function getCipher()
    {
        return $this->container['cipher'];
    }

    /**
    * Sets cipher
    *
    * @param string|null $cipher 加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    *
    * @return $this
    */
    public function setCipher($cipher)
    {
        $this->container['cipher'] = $cipher;
        return $this;
    }

    /**
    * Gets http2Enable
    *  是否支持http2   - true：表示支持http2   - false：表示不支持http2
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
    * @param bool|null $http2Enable 是否支持http2   - true：表示支持http2   - false：表示不支持http2
    *
    * @return $this
    */
    public function setHttp2Enable($http2Enable)
    {
        $this->container['http2Enable'] = $http2Enable;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否开启IPv6防护，仅专业版（原企业版）和铂金版（原旗舰版）支持IPv6防护。   - true：开启IPv6防护   - false：关闭IPV6防护
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 是否开启IPv6防护，仅专业版（原企业版）和铂金版（原旗舰版）支持IPv6防护。   - true：开启IPv6防护   - false：关闭IPV6防护
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets webTag
    *  网站名称，对应WAF控制台域名详情中的网站名称
    *
    * @return string|null
    */
    public function getWebTag()
    {
        return $this->container['webTag'];
    }

    /**
    * Sets webTag
    *
    * @param string|null $webTag 网站名称，对应WAF控制台域名详情中的网站名称
    *
    * @return $this
    */
    public function setWebTag($webTag)
    {
        $this->container['webTag'] = $webTag;
        return $this;
    }

    /**
    * Gets exclusiveIp
    *  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    *
    * @return bool|null
    */
    public function getExclusiveIp()
    {
        return $this->container['exclusiveIp'];
    }

    /**
    * Sets exclusiveIp
    *
    * @param bool|null $exclusiveIp 是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    *
    * @return $this
    */
    public function setExclusiveIp($exclusiveIp)
    {
        $this->container['exclusiveIp'] = $exclusiveIp;
        return $this;
    }

    /**
    * Gets paidType
    *  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    *
    * @return string|null
    */
    public function getPaidType()
    {
        return $this->container['paidType'];
    }

    /**
    * Sets paidType
    *
    * @param string|null $paidType 套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    *
    * @return $this
    */
    public function setPaidType($paidType)
    {
        $this->container['paidType'] = $paidType;
        return $this;
    }

    /**
    * Gets blockPage
    *  blockPage
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BlockPage|null
    */
    public function getBlockPage()
    {
        return $this->container['blockPage'];
    }

    /**
    * Sets blockPage
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BlockPage|null $blockPage blockPage
    *
    * @return $this
    */
    public function setBlockPage($blockPage)
    {
        $this->container['blockPage'] = $blockPage;
        return $this;
    }

    /**
    * Gets trafficMark
    *  trafficMark
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TrafficMark|null
    */
    public function getTrafficMark()
    {
        return $this->container['trafficMark'];
    }

    /**
    * Sets trafficMark
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TrafficMark|null $trafficMark trafficMark
    *
    * @return $this
    */
    public function setTrafficMark($trafficMark)
    {
        $this->container['trafficMark'] = $trafficMark;
        return $this;
    }

    /**
    * Gets flag
    *  flag
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\Flag|null
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\Flag|null $flag flag
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
        return $this;
    }

    /**
    * Gets extend
    *  扩展字段，用于保存防护域名的一些配置信息。
    *
    * @return map[string,string]|null
    */
    public function getExtend()
    {
        return $this->container['extend'];
    }

    /**
    * Sets extend
    *
    * @param map[string,string]|null $extend 扩展字段，用于保存防护域名的一些配置信息。
    *
    * @return $this
    */
    public function setExtend($extend)
    {
        $this->container['extend'] = $extend;
        return $this;
    }

    /**
    * Gets circuitBreaker
    *  circuitBreaker
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CircuitBreaker|null
    */
    public function getCircuitBreaker()
    {
        return $this->container['circuitBreaker'];
    }

    /**
    * Sets circuitBreaker
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CircuitBreaker|null $circuitBreaker circuitBreaker
    *
    * @return $this
    */
    public function setCircuitBreaker($circuitBreaker)
    {
        $this->container['circuitBreaker'] = $circuitBreaker;
        return $this;
    }

    /**
    * Gets timeoutConfig
    *  timeoutConfig
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TimeoutConfig|null
    */
    public function getTimeoutConfig()
    {
        return $this->container['timeoutConfig'];
    }

    /**
    * Sets timeoutConfig
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TimeoutConfig|null $timeoutConfig timeoutConfig
    *
    * @return $this
    */
    public function setTimeoutConfig($timeoutConfig)
    {
        $this->container['timeoutConfig'] = $timeoutConfig;
        return $this;
    }

    /**
    * Gets forwardHeaderMap
    *  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @return map[string,string]|null
    */
    public function getForwardHeaderMap()
    {
        return $this->container['forwardHeaderMap'];
    }

    /**
    * Sets forwardHeaderMap
    *
    * @param map[string,string]|null $forwardHeaderMap 字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @return $this
    */
    public function setForwardHeaderMap($forwardHeaderMap)
    {
        $this->container['forwardHeaderMap'] = $forwardHeaderMap;
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

