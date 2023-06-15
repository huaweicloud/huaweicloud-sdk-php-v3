<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePremiumHostRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePremiumHostRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * mode  独享模式特殊域名模式（仅特殊模式需要，如elb）
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * timestamp  时间戳
    * poolIds  特殊模式域名所属独享引擎组（仅特殊模式需要，如elb）
    * blockPage  blockPage
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * flag  flag
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxy' => 'bool',
            'certificateid' => 'string',
            'certificatename' => 'string',
            'tls' => 'string',
            'cipher' => 'string',
            'mode' => 'string',
            'locked' => 'int',
            'protectStatus' => 'int',
            'accessStatus' => 'int',
            'timestamp' => 'int',
            'poolIds' => 'string[]',
            'blockPage' => '\HuaweiCloud\SDK\Waf\V1\Model\BlockPage',
            'trafficMark' => '\HuaweiCloud\SDK\Waf\V1\Model\TrafficMark',
            'circuitBreaker' => '\HuaweiCloud\SDK\Waf\V1\Model\CircuitBreaker',
            'timeoutConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\TimeoutConfig',
            'flag' => '\HuaweiCloud\SDK\Waf\V1\Model\HostFlag',
            'forwardHeaderMap' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * mode  独享模式特殊域名模式（仅特殊模式需要，如elb）
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * timestamp  时间戳
    * poolIds  特殊模式域名所属独享引擎组（仅特殊模式需要，如elb）
    * blockPage  blockPage
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * flag  flag
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxy' => null,
        'certificateid' => null,
        'certificatename' => null,
        'tls' => null,
        'cipher' => null,
        'mode' => null,
        'locked' => 'int32',
        'protectStatus' => 'int32',
        'accessStatus' => 'int32',
        'timestamp' => null,
        'poolIds' => null,
        'blockPage' => null,
        'trafficMark' => null,
        'circuitBreaker' => null,
        'timeoutConfig' => null,
        'flag' => null,
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
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * mode  独享模式特殊域名模式（仅特殊模式需要，如elb）
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * timestamp  时间戳
    * poolIds  特殊模式域名所属独享引擎组（仅特殊模式需要，如elb）
    * blockPage  blockPage
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * flag  flag
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxy' => 'proxy',
            'certificateid' => 'certificateid',
            'certificatename' => 'certificatename',
            'tls' => 'tls',
            'cipher' => 'cipher',
            'mode' => 'mode',
            'locked' => 'locked',
            'protectStatus' => 'protect_status',
            'accessStatus' => 'access_status',
            'timestamp' => 'timestamp',
            'poolIds' => 'pool_ids',
            'blockPage' => 'block_page',
            'trafficMark' => 'traffic_mark',
            'circuitBreaker' => 'circuit_breaker',
            'timeoutConfig' => 'timeout_config',
            'flag' => 'flag',
            'forwardHeaderMap' => 'forward_header_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * mode  独享模式特殊域名模式（仅特殊模式需要，如elb）
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * timestamp  时间戳
    * poolIds  特殊模式域名所属独享引擎组（仅特殊模式需要，如elb）
    * blockPage  blockPage
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * flag  flag
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $setters = [
            'proxy' => 'setProxy',
            'certificateid' => 'setCertificateid',
            'certificatename' => 'setCertificatename',
            'tls' => 'setTls',
            'cipher' => 'setCipher',
            'mode' => 'setMode',
            'locked' => 'setLocked',
            'protectStatus' => 'setProtectStatus',
            'accessStatus' => 'setAccessStatus',
            'timestamp' => 'setTimestamp',
            'poolIds' => 'setPoolIds',
            'blockPage' => 'setBlockPage',
            'trafficMark' => 'setTrafficMark',
            'circuitBreaker' => 'setCircuitBreaker',
            'timeoutConfig' => 'setTimeoutConfig',
            'flag' => 'setFlag',
            'forwardHeaderMap' => 'setForwardHeaderMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * mode  独享模式特殊域名模式（仅特殊模式需要，如elb）
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * timestamp  时间戳
    * poolIds  特殊模式域名所属独享引擎组（仅特殊模式需要，如elb）
    * blockPage  blockPage
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * timeoutConfig  timeoutConfig
    * flag  flag
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $getters = [
            'proxy' => 'getProxy',
            'certificateid' => 'getCertificateid',
            'certificatename' => 'getCertificatename',
            'tls' => 'getTls',
            'cipher' => 'getCipher',
            'mode' => 'getMode',
            'locked' => 'getLocked',
            'protectStatus' => 'getProtectStatus',
            'accessStatus' => 'getAccessStatus',
            'timestamp' => 'getTimestamp',
            'poolIds' => 'getPoolIds',
            'blockPage' => 'getBlockPage',
            'trafficMark' => 'getTrafficMark',
            'circuitBreaker' => 'getCircuitBreaker',
            'timeoutConfig' => 'getTimeoutConfig',
            'flag' => 'getFlag',
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
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['cipher'] = isset($data['cipher']) ? $data['cipher'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['poolIds'] = isset($data['poolIds']) ? $data['poolIds'] : null;
        $this->container['blockPage'] = isset($data['blockPage']) ? $data['blockPage'] : null;
        $this->container['trafficMark'] = isset($data['trafficMark']) ? $data['trafficMark'] : null;
        $this->container['circuitBreaker'] = isset($data['circuitBreaker']) ? $data['circuitBreaker'] : null;
        $this->container['timeoutConfig'] = isset($data['timeoutConfig']) ? $data['timeoutConfig'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
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
    * Gets mode
    *  独享模式特殊域名模式（仅特殊模式需要，如elb）
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 独享模式特殊域名模式（仅特殊模式需要，如elb）
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets locked
    *  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    *
    * @return int|null
    */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
    * Sets locked
    *
    * @param int|null $locked 预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    *
    * @return $this
    */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;
        return $this;
    }

    /**
    * Gets protectStatus
    *  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    *
    * @return int|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param int|null $protectStatus 域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets accessStatus
    *  域名接入状态，0表示未接入，1表示已接入
    *
    * @return int|null
    */
    public function getAccessStatus()
    {
        return $this->container['accessStatus'];
    }

    /**
    * Sets accessStatus
    *
    * @param int|null $accessStatus 域名接入状态，0表示未接入，1表示已接入
    *
    * @return $this
    */
    public function setAccessStatus($accessStatus)
    {
        $this->container['accessStatus'] = $accessStatus;
        return $this;
    }

    /**
    * Gets timestamp
    *  时间戳
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets poolIds
    *  特殊模式域名所属独享引擎组（仅特殊模式需要，如elb）
    *
    * @return string[]|null
    */
    public function getPoolIds()
    {
        return $this->container['poolIds'];
    }

    /**
    * Sets poolIds
    *
    * @param string[]|null $poolIds 特殊模式域名所属独享引擎组（仅特殊模式需要，如elb）
    *
    * @return $this
    */
    public function setPoolIds($poolIds)
    {
        $this->container['poolIds'] = $poolIds;
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
    * Gets flag
    *  flag
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\HostFlag|null
    */
    public function getFlag()
    {
        return $this->container['flag'];
    }

    /**
    * Sets flag
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\HostFlag|null $flag flag
    *
    * @return $this
    */
    public function setFlag($flag)
    {
        $this->container['flag'] = $flag;
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

