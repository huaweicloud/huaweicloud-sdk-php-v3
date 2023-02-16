<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHostResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHostResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  防护域名的防护策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protocol  后端包含的协议类型：HTTPS、HTTP、HTTP&HTTPS
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * accessCode  cname前缀
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间戳（毫秒）
    * certificateid  https证书id
    * certificatename  证书名称
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * blockPage  blockPage
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * lbAlgorithm  LB负载均衡，仅专业版（原企业版）和铂金版（原旗舰版）支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * timeoutConfig  timeoutConfig
    * flag  flag
    * description  网站备注
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hostname' => 'string',
            'policyid' => 'string',
            'domainid' => 'string',
            'projectid' => 'string',
            'enterpriseProjectId' => 'string',
            'protocol' => 'string',
            'server' => '\HuaweiCloud\SDK\Waf\V1\Model\CloudWafServer[]',
            'proxy' => 'bool',
            'protectStatus' => 'int',
            'accessStatus' => 'int',
            'accessCode' => 'string',
            'locked' => 'int',
            'timestamp' => 'int',
            'certificateid' => 'string',
            'certificatename' => 'string',
            'tls' => 'string',
            'cipher' => 'string',
            'blockPage' => '\HuaweiCloud\SDK\Waf\V1\Model\BlockPage',
            'extend' => 'map[string,string]',
            'webTag' => 'string',
            'trafficMark' => '\HuaweiCloud\SDK\Waf\V1\Model\TrafficMark',
            'circuitBreaker' => '\HuaweiCloud\SDK\Waf\V1\Model\CircuitBreaker',
            'lbAlgorithm' => 'string',
            'timeoutConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\TimeoutConfig',
            'flag' => '\HuaweiCloud\SDK\Waf\V1\Model\Flag',
            'description' => 'string',
            'http2Enable' => 'bool',
            'exclusiveIp' => 'bool',
            'accessProgress' => '\HuaweiCloud\SDK\Waf\V1\Model\AccessProgress[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  防护域名的防护策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protocol  后端包含的协议类型：HTTPS、HTTP、HTTP&HTTPS
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * accessCode  cname前缀
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间戳（毫秒）
    * certificateid  https证书id
    * certificatename  证书名称
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * blockPage  blockPage
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * lbAlgorithm  LB负载均衡，仅专业版（原企业版）和铂金版（原旗舰版）支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * timeoutConfig  timeoutConfig
    * flag  flag
    * description  网站备注
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hostname' => null,
        'policyid' => null,
        'domainid' => null,
        'projectid' => null,
        'enterpriseProjectId' => null,
        'protocol' => null,
        'server' => null,
        'proxy' => null,
        'protectStatus' => null,
        'accessStatus' => null,
        'accessCode' => null,
        'locked' => null,
        'timestamp' => 'int64',
        'certificateid' => null,
        'certificatename' => null,
        'tls' => null,
        'cipher' => null,
        'blockPage' => null,
        'extend' => null,
        'webTag' => null,
        'trafficMark' => null,
        'circuitBreaker' => null,
        'lbAlgorithm' => null,
        'timeoutConfig' => null,
        'flag' => null,
        'description' => null,
        'http2Enable' => null,
        'exclusiveIp' => null,
        'accessProgress' => null
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
    * policyid  防护域名的防护策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protocol  后端包含的协议类型：HTTPS、HTTP、HTTP&HTTPS
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * accessCode  cname前缀
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间戳（毫秒）
    * certificateid  https证书id
    * certificatename  证书名称
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * blockPage  blockPage
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * lbAlgorithm  LB负载均衡，仅专业版（原企业版）和铂金版（原旗舰版）支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * timeoutConfig  timeoutConfig
    * flag  flag
    * description  网站备注
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hostname' => 'hostname',
            'policyid' => 'policyid',
            'domainid' => 'domainid',
            'projectid' => 'projectid',
            'enterpriseProjectId' => 'enterprise_project_id',
            'protocol' => 'protocol',
            'server' => 'server',
            'proxy' => 'proxy',
            'protectStatus' => 'protect_status',
            'accessStatus' => 'access_status',
            'accessCode' => 'access_code',
            'locked' => 'locked',
            'timestamp' => 'timestamp',
            'certificateid' => 'certificateid',
            'certificatename' => 'certificatename',
            'tls' => 'tls',
            'cipher' => 'cipher',
            'blockPage' => 'block_page',
            'extend' => 'extend',
            'webTag' => 'web_tag',
            'trafficMark' => 'traffic_mark',
            'circuitBreaker' => 'circuit_breaker',
            'lbAlgorithm' => 'lb_algorithm',
            'timeoutConfig' => 'timeout_config',
            'flag' => 'flag',
            'description' => 'description',
            'http2Enable' => 'http2_enable',
            'exclusiveIp' => 'exclusive_ip',
            'accessProgress' => 'access_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  防护域名的防护策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protocol  后端包含的协议类型：HTTPS、HTTP、HTTP&HTTPS
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * accessCode  cname前缀
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间戳（毫秒）
    * certificateid  https证书id
    * certificatename  证书名称
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * blockPage  blockPage
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * lbAlgorithm  LB负载均衡，仅专业版（原企业版）和铂金版（原旗舰版）支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * timeoutConfig  timeoutConfig
    * flag  flag
    * description  网站备注
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hostname' => 'setHostname',
            'policyid' => 'setPolicyid',
            'domainid' => 'setDomainid',
            'projectid' => 'setProjectid',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'protocol' => 'setProtocol',
            'server' => 'setServer',
            'proxy' => 'setProxy',
            'protectStatus' => 'setProtectStatus',
            'accessStatus' => 'setAccessStatus',
            'accessCode' => 'setAccessCode',
            'locked' => 'setLocked',
            'timestamp' => 'setTimestamp',
            'certificateid' => 'setCertificateid',
            'certificatename' => 'setCertificatename',
            'tls' => 'setTls',
            'cipher' => 'setCipher',
            'blockPage' => 'setBlockPage',
            'extend' => 'setExtend',
            'webTag' => 'setWebTag',
            'trafficMark' => 'setTrafficMark',
            'circuitBreaker' => 'setCircuitBreaker',
            'lbAlgorithm' => 'setLbAlgorithm',
            'timeoutConfig' => 'setTimeoutConfig',
            'flag' => 'setFlag',
            'description' => 'setDescription',
            'http2Enable' => 'setHttp2Enable',
            'exclusiveIp' => 'setExclusiveIp',
            'accessProgress' => 'setAccessProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名id
    * hostname  创建的云模式防护域名
    * policyid  防护域名的防护策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protocol  后端包含的协议类型：HTTPS、HTTP、HTTP&HTTPS
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * accessCode  cname前缀
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间戳（毫秒）
    * certificateid  https证书id
    * certificatename  证书名称
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * blockPage  blockPage
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * trafficMark  trafficMark
    * circuitBreaker  circuitBreaker
    * lbAlgorithm  LB负载均衡，仅专业版（原企业版）和铂金版（原旗舰版）支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    * timeoutConfig  timeoutConfig
    * flag  flag
    * description  网站备注
    * http2Enable  是否支持http2   - true：表示支持http2   - false：表示不支持http2
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hostname' => 'getHostname',
            'policyid' => 'getPolicyid',
            'domainid' => 'getDomainid',
            'projectid' => 'getProjectid',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'protocol' => 'getProtocol',
            'server' => 'getServer',
            'proxy' => 'getProxy',
            'protectStatus' => 'getProtectStatus',
            'accessStatus' => 'getAccessStatus',
            'accessCode' => 'getAccessCode',
            'locked' => 'getLocked',
            'timestamp' => 'getTimestamp',
            'certificateid' => 'getCertificateid',
            'certificatename' => 'getCertificatename',
            'tls' => 'getTls',
            'cipher' => 'getCipher',
            'blockPage' => 'getBlockPage',
            'extend' => 'getExtend',
            'webTag' => 'getWebTag',
            'trafficMark' => 'getTrafficMark',
            'circuitBreaker' => 'getCircuitBreaker',
            'lbAlgorithm' => 'getLbAlgorithm',
            'timeoutConfig' => 'getTimeoutConfig',
            'flag' => 'getFlag',
            'description' => 'getDescription',
            'http2Enable' => 'getHttp2Enable',
            'exclusiveIp' => 'getExclusiveIp',
            'accessProgress' => 'getAccessProgress'
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
    const LB_ALGORITHM_IP_HASH = 'ip_hash';
    const LB_ALGORITHM_ROUND_ROBIN = 'round_robin';
    const LB_ALGORITHM_SESSION_HASH = 'session_hash';
    

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
        $this->container['domainid'] = isset($data['domainid']) ? $data['domainid'] : null;
        $this->container['projectid'] = isset($data['projectid']) ? $data['projectid'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['accessCode'] = isset($data['accessCode']) ? $data['accessCode'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['certificateid'] = isset($data['certificateid']) ? $data['certificateid'] : null;
        $this->container['certificatename'] = isset($data['certificatename']) ? $data['certificatename'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['cipher'] = isset($data['cipher']) ? $data['cipher'] : null;
        $this->container['blockPage'] = isset($data['blockPage']) ? $data['blockPage'] : null;
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
        $this->container['webTag'] = isset($data['webTag']) ? $data['webTag'] : null;
        $this->container['trafficMark'] = isset($data['trafficMark']) ? $data['trafficMark'] : null;
        $this->container['circuitBreaker'] = isset($data['circuitBreaker']) ? $data['circuitBreaker'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['timeoutConfig'] = isset($data['timeoutConfig']) ? $data['timeoutConfig'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['exclusiveIp'] = isset($data['exclusiveIp']) ? $data['exclusiveIp'] : null;
        $this->container['accessProgress'] = isset($data['accessProgress']) ? $data['accessProgress'] : null;
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
    *  防护域名的防护策略id
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
    * @param string|null $policyid 防护域名的防护策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets domainid
    *  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    *
    * @return string|null
    */
    public function getDomainid()
    {
        return $this->container['domainid'];
    }

    /**
    * Sets domainid
    *
    * @param string|null $domainid 帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    *
    * @return $this
    */
    public function setDomainid($domainid)
    {
        $this->container['domainid'] = $domainid;
        return $this;
    }

    /**
    * Gets projectid
    *  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    *
    * @return string|null
    */
    public function getProjectid()
    {
        return $this->container['projectid'];
    }

    /**
    * Sets projectid
    *
    * @param string|null $projectid 项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    *
    * @return $this
    */
    public function setProjectid($projectid)
    {
        $this->container['projectid'] = $projectid;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
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
    * @param string|null $enterpriseProjectId 企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets protocol
    *  后端包含的协议类型：HTTPS、HTTP、HTTP&HTTPS
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
    * @param string|null $protocol 后端包含的协议类型：HTTPS、HTTP、HTTP&HTTPS
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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
    * Gets timestamp
    *  创建防护域名的时间戳（毫秒）
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
    * @param int|null $timestamp 创建防护域名的时间戳（毫秒）
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets certificateid
    *  https证书id
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
    * @param string|null $certificateid https证书id
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
    * Gets lbAlgorithm
    *  LB负载均衡，仅专业版（原企业版）和铂金版（原旗舰版）支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
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
    * @param string|null $lbAlgorithm LB负载均衡，仅专业版（原企业版）和铂金版（原旗舰版）支持配置负载均衡算法   - 源IP Hash：将某个IP的请求定向到同一个服务器   - 加权轮询：所有请求将按权重轮流分配给源站服务器   - Session Hash：将某个Session标识的请求定向到同一个源站服务器，请确保在域名添加完毕后配置攻击惩罚的流量标识，否则Session Hash配置不生效
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
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
    * Gets description
    *  网站备注
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
    * @param string|null $description 网站备注
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets accessProgress
    *  接入进度，仅用于新版console(前端)使用
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\AccessProgress[]|null
    */
    public function getAccessProgress()
    {
        return $this->container['accessProgress'];
    }

    /**
    * Sets accessProgress
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\AccessProgress[]|null $accessProgress 接入进度，仅用于新版console(前端)使用
    *
    * @return $this
    */
    public function setAccessProgress($accessProgress)
    {
        $this->container['accessProgress'] = $accessProgress;
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

