<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHostRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHostRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostname  域名（域名只能由字母、数字、-、_和.组成，长度不能超过64个字符，如www.domain.com）
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不适用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * description  域名描述
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostname' => 'string',
            'policyid' => 'string',
            'server' => '\HuaweiCloud\SDK\Waf\V1\Model\CloudWafServer[]',
            'certificateid' => 'string',
            'certificatename' => 'string',
            'webTag' => 'string',
            'exclusiveIp' => 'bool',
            'paidType' => 'string',
            'proxy' => 'bool',
            'lbAlgorithm' => 'string',
            'description' => 'string',
            'forwardHeaderMap' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostname  域名（域名只能由字母、数字、-、_和.组成，长度不能超过64个字符，如www.domain.com）
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不适用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * description  域名描述
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostname' => null,
        'policyid' => null,
        'server' => null,
        'certificateid' => null,
        'certificatename' => null,
        'webTag' => null,
        'exclusiveIp' => null,
        'paidType' => null,
        'proxy' => null,
        'lbAlgorithm' => null,
        'description' => null,
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
    * hostname  域名（域名只能由字母、数字、-、_和.组成，长度不能超过64个字符，如www.domain.com）
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不适用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * description  域名描述
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostname' => 'hostname',
            'policyid' => 'policyid',
            'server' => 'server',
            'certificateid' => 'certificateid',
            'certificatename' => 'certificatename',
            'webTag' => 'web_tag',
            'exclusiveIp' => 'exclusive_ip',
            'paidType' => 'paid_type',
            'proxy' => 'proxy',
            'lbAlgorithm' => 'lb_algorithm',
            'description' => 'description',
            'forwardHeaderMap' => 'forward_header_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostname  域名（域名只能由字母、数字、-、_和.组成，长度不能超过64个字符，如www.domain.com）
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不适用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * description  域名描述
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $setters = [
            'hostname' => 'setHostname',
            'policyid' => 'setPolicyid',
            'server' => 'setServer',
            'certificateid' => 'setCertificateid',
            'certificatename' => 'setCertificatename',
            'webTag' => 'setWebTag',
            'exclusiveIp' => 'setExclusiveIp',
            'paidType' => 'setPaidType',
            'proxy' => 'setProxy',
            'lbAlgorithm' => 'setLbAlgorithm',
            'description' => 'setDescription',
            'forwardHeaderMap' => 'setForwardHeaderMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostname  域名（域名只能由字母、数字、-、_和.组成，长度不能超过64个字符，如www.domain.com）
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不适用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * lbAlgorithm  LB负载均衡，仅专业版和企业版支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * description  域名描述
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    *
    * @var string[]
    */
    protected static $getters = [
            'hostname' => 'getHostname',
            'policyid' => 'getPolicyid',
            'server' => 'getServer',
            'certificateid' => 'getCertificateid',
            'certificatename' => 'getCertificatename',
            'webTag' => 'getWebTag',
            'exclusiveIp' => 'getExclusiveIp',
            'paidType' => 'getPaidType',
            'proxy' => 'getProxy',
            'lbAlgorithm' => 'getLbAlgorithm',
            'description' => 'getDescription',
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
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['certificateid'] = isset($data['certificateid']) ? $data['certificateid'] : null;
        $this->container['certificatename'] = isset($data['certificatename']) ? $data['certificatename'] : null;
        $this->container['webTag'] = isset($data['webTag']) ? $data['webTag'] : null;
        $this->container['exclusiveIp'] = isset($data['exclusiveIp']) ? $data['exclusiveIp'] : null;
        $this->container['paidType'] = isset($data['paidType']) ? $data['paidType'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
        if ($this->container['hostname'] === null) {
            $invalidProperties[] = "'hostname' can't be null";
        }
        if ($this->container['server'] === null) {
            $invalidProperties[] = "'server' can't be null";
        }
        if ($this->container['proxy'] === null) {
            $invalidProperties[] = "'proxy' can't be null";
        }
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
    * Gets hostname
    *  域名（域名只能由字母、数字、-、_和.组成，长度不能超过64个字符，如www.domain.com）
    *
    * @return string
    */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
    * Sets hostname
    *
    * @param string $hostname 域名（域名只能由字母、数字、-、_和.组成，长度不能超过64个字符，如www.domain.com）
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
    *  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
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
    * @param string|null $policyid 防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets server
    *  防护域名的源站服务器配置信息
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CloudWafServer[]
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CloudWafServer[] $server 防护域名的源站服务器配置信息
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
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
    *  是否使用独享ip   - true：使用独享ip   - false：不适用独享ip
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
    * @param bool|null $exclusiveIp 是否使用独享ip   - true：使用独享ip   - false：不适用独享ip
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
    * Gets proxy
    *  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    *
    * @return bool
    */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
    * Sets proxy
    *
    * @param bool $proxy 防护域名是否使用代理   - false：不使用代理   - true：使用代理
    *
    * @return $this
    */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;
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
    * Gets description
    *  域名描述
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
    * @param string|null $description 域名描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

