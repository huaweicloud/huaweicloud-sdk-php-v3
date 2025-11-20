<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHostResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHostResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * protocol  返回的客户端协议类型
    * certificateid  返回的证书id
    * certificatename  证书名称
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不使用独享ip
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * blockPage  blockPage
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hostname' => 'string',
            'policyid' => 'string',
            'accessCode' => 'string',
            'protectStatus' => 'int',
            'accessStatus' => 'int',
            'lbAlgorithm' => 'string',
            'protocol' => 'string',
            'certificateid' => 'string',
            'certificatename' => 'string',
            'server' => '\HuaweiCloud\SDK\Waf\V1\Model\CloudWafServer[]',
            'proxy' => 'bool',
            'timestamp' => 'int',
            'exclusiveIp' => 'bool',
            'webTag' => 'string',
            'http2Enable' => 'bool',
            'blockPage' => '\HuaweiCloud\SDK\Waf\V1\Model\BlockPage',
            'flag' => '\HuaweiCloud\SDK\Waf\V1\Model\Flag',
            'extend' => 'map[string,string]',
            'forwardHeaderMap' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * protocol  返回的客户端协议类型
    * certificateid  返回的证书id
    * certificatename  证书名称
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不使用独享ip
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * blockPage  blockPage
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hostname' => null,
        'policyid' => null,
        'accessCode' => null,
        'protectStatus' => null,
        'accessStatus' => null,
        'lbAlgorithm' => null,
        'protocol' => null,
        'certificateid' => null,
        'certificatename' => null,
        'server' => null,
        'proxy' => null,
        'timestamp' => 'int64',
        'exclusiveIp' => null,
        'webTag' => null,
        'http2Enable' => null,
        'blockPage' => null,
        'flag' => null,
        'extend' => null,
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
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * protocol  返回的客户端协议类型
    * certificateid  返回的证书id
    * certificatename  证书名称
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不使用独享ip
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * blockPage  blockPage
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hostname' => 'hostname',
            'policyid' => 'policyid',
            'accessCode' => 'access_code',
            'protectStatus' => 'protect_status',
            'accessStatus' => 'access_status',
            'lbAlgorithm' => 'lb_algorithm',
            'protocol' => 'protocol',
            'certificateid' => 'certificateid',
            'certificatename' => 'certificatename',
            'server' => 'server',
            'proxy' => 'proxy',
            'timestamp' => 'timestamp',
            'exclusiveIp' => 'exclusive_ip',
            'webTag' => 'web_tag',
            'http2Enable' => 'http2_enable',
            'blockPage' => 'block_page',
            'flag' => 'flag',
            'extend' => 'extend',
            'forwardHeaderMap' => 'forward_header_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * protocol  返回的客户端协议类型
    * certificateid  返回的证书id
    * certificatename  证书名称
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不使用独享ip
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * blockPage  blockPage
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hostname' => 'setHostname',
            'policyid' => 'setPolicyid',
            'accessCode' => 'setAccessCode',
            'protectStatus' => 'setProtectStatus',
            'accessStatus' => 'setAccessStatus',
            'lbAlgorithm' => 'setLbAlgorithm',
            'protocol' => 'setProtocol',
            'certificateid' => 'setCertificateid',
            'certificatename' => 'setCertificatename',
            'server' => 'setServer',
            'proxy' => 'setProxy',
            'timestamp' => 'setTimestamp',
            'exclusiveIp' => 'setExclusiveIp',
            'webTag' => 'setWebTag',
            'http2Enable' => 'setHttp2Enable',
            'blockPage' => 'setBlockPage',
            'flag' => 'setFlag',
            'extend' => 'setExtend',
            'forwardHeaderMap' => 'setForwardHeaderMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * protocol  返回的客户端协议类型
    * certificateid  返回的证书id
    * certificatename  证书名称
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不使用独享ip
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * blockPage  blockPage
    * flag  flag
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hostname' => 'getHostname',
            'policyid' => 'getPolicyid',
            'accessCode' => 'getAccessCode',
            'protectStatus' => 'getProtectStatus',
            'accessStatus' => 'getAccessStatus',
            'lbAlgorithm' => 'getLbAlgorithm',
            'protocol' => 'getProtocol',
            'certificateid' => 'getCertificateid',
            'certificatename' => 'getCertificatename',
            'server' => 'getServer',
            'proxy' => 'getProxy',
            'timestamp' => 'getTimestamp',
            'exclusiveIp' => 'getExclusiveIp',
            'webTag' => 'getWebTag',
            'http2Enable' => 'getHttp2Enable',
            'blockPage' => 'getBlockPage',
            'flag' => 'getFlag',
            'extend' => 'getExtend',
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
    const LB_ALGORITHM_IP_HASH = 'ip_hash';
    const LB_ALGORITHM_ROUND_ROBIN = 'round_robin';
    const LB_ALGORITHM_SESSION_HASH = 'session_hash';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLbAlgorithmAllowableValues()
    {
        return [
            self::LB_ALGORITHM_IP_HASH,
            self::LB_ALGORITHM_ROUND_ROBIN,
            self::LB_ALGORITHM_SESSION_HASH,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['accessCode'] = isset($data['accessCode']) ? $data['accessCode'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['certificateid'] = isset($data['certificateid']) ? $data['certificateid'] : null;
        $this->container['certificatename'] = isset($data['certificatename']) ? $data['certificatename'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['exclusiveIp'] = isset($data['exclusiveIp']) ? $data['exclusiveIp'] : null;
        $this->container['webTag'] = isset($data['webTag']) ? $data['webTag'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['blockPage'] = isset($data['blockPage']) ? $data['blockPage'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
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
            $allowedValues = $this->getLbAlgorithmAllowableValues();
                if (!is_null($this->container['lbAlgorithm']) && !in_array($this->container['lbAlgorithm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lbAlgorithm', must be one of '%s'",
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
    * Gets id
    *  域名id
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
    * @param string|null $id 域名id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets hostname
    *  创建的云模式防护域名
    *
    * @return string|null
    */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
    * Sets hostname
    *
    * @param string|null $hostname 创建的云模式防护域名
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
        return $this;
    }

    /**
    * Gets policyid
    *  策略id
    *
    * @return string|null
    */
    public function getPolicyid()
    {
        return $this->container['policyid'];
    }

    /**
    * Sets policyid
    *
    * @param string|null $policyid 策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets accessCode
    *  cname前缀
    *
    * @return string|null
    */
    public function getAccessCode()
    {
        return $this->container['accessCode'];
    }

    /**
    * Sets accessCode
    *
    * @param string|null $accessCode cname前缀
    *
    * @return $this
    */
    public function setAccessCode($accessCode)
    {
        $this->container['accessCode'] = $accessCode;
        return $this;
    }

    /**
    * Gets protectStatus
    *  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
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
    * @param int|null $protectStatus 域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
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
    * Gets lbAlgorithm
    *  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    *
    * @return string|null
    */
    public function getLbAlgorithm()
    {
        return $this->container['lbAlgorithm'];
    }

    /**
    * Sets lbAlgorithm
    *
    * @param string|null $lbAlgorithm LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets protocol
    *  返回的客户端协议类型
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 返回的客户端协议类型
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets certificateid
    *  返回的证书id
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
    * @param string|null $certificateid 返回的证书id
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
    *  证书名称
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
    * @param string|null $certificatename 证书名称
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
    * Gets timestamp
    *  创建防护域名的时间
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
    * @param int|null $timestamp 创建防护域名的时间
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets exclusiveIp
    *  是否使用独享ip   - true：使用独享ip   - false：不使用独享ip
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
    * @param bool|null $exclusiveIp 是否使用独享ip   - true：使用独享ip   - false：不使用独享ip
    *
    * @return $this
    */
    public function setExclusiveIp($exclusiveIp)
    {
        $this->container['exclusiveIp'] = $exclusiveIp;
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

