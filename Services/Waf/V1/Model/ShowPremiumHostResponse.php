<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPremiumHostResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPremiumHostResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名id
    * hostname  创建的独享模式防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对外协议为https时才有tls参数
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH    cipher_5：加密算法为AES128-SHA:AES256-SHA:AES128-SHA256:AES256-SHA256:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!PSK:!RC4:!DHE:@STRENGTH    cipher_6：加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  账号ID,对应华为云控制台用户名->我的凭证->账号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * certificateid  https证书id
    * certificatename  证书名称
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * blockPage  blockPage
    * trafficMark  trafficMark
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hostname' => 'string',
            'protocol' => 'string',
            'server' => '\HuaweiCloud\SDK\Waf\V1\Model\PremiumWafServer[]',
            'proxy' => 'bool',
            'locked' => 'int',
            'timestamp' => 'int',
            'tls' => 'string',
            'cipher' => 'string',
            'extend' => 'map[string,string]',
            'flag' => '\HuaweiCloud\SDK\Waf\V1\Model\Flag',
            'description' => 'string',
            'policyid' => 'string',
            'domainid' => 'string',
            'projectid' => 'string',
            'enterpriseProjectId' => 'string',
            'certificateid' => 'string',
            'certificatename' => 'string',
            'protectStatus' => 'int',
            'accessStatus' => 'int',
            'webTag' => 'string',
            'blockPage' => '\HuaweiCloud\SDK\Waf\V1\Model\BlockPage',
            'trafficMark' => '\HuaweiCloud\SDK\Waf\V1\Model\TrafficMark',
            'timeoutConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\TimeoutConfig',
            'forwardHeaderMap' => 'map[string,string]',
            'accessProgress' => '\HuaweiCloud\SDK\Waf\V1\Model\AccessProgress[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名id
    * hostname  创建的独享模式防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对外协议为https时才有tls参数
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH    cipher_5：加密算法为AES128-SHA:AES256-SHA:AES128-SHA256:AES256-SHA256:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!PSK:!RC4:!DHE:@STRENGTH    cipher_6：加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  账号ID,对应华为云控制台用户名->我的凭证->账号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * certificateid  https证书id
    * certificatename  证书名称
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * blockPage  blockPage
    * trafficMark  trafficMark
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hostname' => null,
        'protocol' => null,
        'server' => null,
        'proxy' => null,
        'locked' => 'int32',
        'timestamp' => 'int64',
        'tls' => null,
        'cipher' => null,
        'extend' => null,
        'flag' => null,
        'description' => null,
        'policyid' => null,
        'domainid' => null,
        'projectid' => null,
        'enterpriseProjectId' => null,
        'certificateid' => null,
        'certificatename' => null,
        'protectStatus' => 'int32',
        'accessStatus' => 'int32',
        'webTag' => null,
        'blockPage' => null,
        'trafficMark' => null,
        'timeoutConfig' => null,
        'forwardHeaderMap' => null,
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
    * hostname  创建的独享模式防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对外协议为https时才有tls参数
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH    cipher_5：加密算法为AES128-SHA:AES256-SHA:AES128-SHA256:AES256-SHA256:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!PSK:!RC4:!DHE:@STRENGTH    cipher_6：加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  账号ID,对应华为云控制台用户名->我的凭证->账号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * certificateid  https证书id
    * certificatename  证书名称
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * blockPage  blockPage
    * trafficMark  trafficMark
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hostname' => 'hostname',
            'protocol' => 'protocol',
            'server' => 'server',
            'proxy' => 'proxy',
            'locked' => 'locked',
            'timestamp' => 'timestamp',
            'tls' => 'tls',
            'cipher' => 'cipher',
            'extend' => 'extend',
            'flag' => 'flag',
            'description' => 'description',
            'policyid' => 'policyid',
            'domainid' => 'domainid',
            'projectid' => 'projectid',
            'enterpriseProjectId' => 'enterprise_project_id',
            'certificateid' => 'certificateid',
            'certificatename' => 'certificatename',
            'protectStatus' => 'protect_status',
            'accessStatus' => 'access_status',
            'webTag' => 'web_tag',
            'blockPage' => 'block_page',
            'trafficMark' => 'traffic_mark',
            'timeoutConfig' => 'timeout_config',
            'forwardHeaderMap' => 'forward_header_map',
            'accessProgress' => 'access_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名id
    * hostname  创建的独享模式防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对外协议为https时才有tls参数
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH    cipher_5：加密算法为AES128-SHA:AES256-SHA:AES128-SHA256:AES256-SHA256:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!PSK:!RC4:!DHE:@STRENGTH    cipher_6：加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  账号ID,对应华为云控制台用户名->我的凭证->账号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * certificateid  https证书id
    * certificatename  证书名称
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * blockPage  blockPage
    * trafficMark  trafficMark
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hostname' => 'setHostname',
            'protocol' => 'setProtocol',
            'server' => 'setServer',
            'proxy' => 'setProxy',
            'locked' => 'setLocked',
            'timestamp' => 'setTimestamp',
            'tls' => 'setTls',
            'cipher' => 'setCipher',
            'extend' => 'setExtend',
            'flag' => 'setFlag',
            'description' => 'setDescription',
            'policyid' => 'setPolicyid',
            'domainid' => 'setDomainid',
            'projectid' => 'setProjectid',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'certificateid' => 'setCertificateid',
            'certificatename' => 'setCertificatename',
            'protectStatus' => 'setProtectStatus',
            'accessStatus' => 'setAccessStatus',
            'webTag' => 'setWebTag',
            'blockPage' => 'setBlockPage',
            'trafficMark' => 'setTrafficMark',
            'timeoutConfig' => 'setTimeoutConfig',
            'forwardHeaderMap' => 'setForwardHeaderMap',
            'accessProgress' => 'setAccessProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名id
    * hostname  创建的独享模式防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * locked  预留参数，用于后期设计冻结域名，解锁域名功能，目前暂不支持
    * timestamp  创建防护域名的时间
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对外协议为https时才有tls参数
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH    cipher_5：加密算法为AES128-SHA:AES256-SHA:AES128-SHA256:AES256-SHA256:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!PSK:!RC4:!DHE:@STRENGTH    cipher_6：加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  账号ID,对应华为云控制台用户名->我的凭证->账号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * certificateid  https证书id
    * certificatename  证书名称
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * blockPage  blockPage
    * trafficMark  trafficMark
    * timeoutConfig  timeoutConfig
    * forwardHeaderMap  字段转发配置，WAF会将添加的字段插到header中，转给源站；Key不能跟nginx原生字段重复。Value支持的值包括:   - $time_local   - $request_id   - $connection_requests   - $tenant_id   - $project_id   - $remote_addr   - $remote_port   - $scheme   - $request_method   - $http_host   -$origin_uri   - $request_length   - $ssl_server_name   - $ssl_protocol   - $ssl_curves   - $ssl_session_reused
    * accessProgress  接入进度，仅用于新版console(前端)使用
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hostname' => 'getHostname',
            'protocol' => 'getProtocol',
            'server' => 'getServer',
            'proxy' => 'getProxy',
            'locked' => 'getLocked',
            'timestamp' => 'getTimestamp',
            'tls' => 'getTls',
            'cipher' => 'getCipher',
            'extend' => 'getExtend',
            'flag' => 'getFlag',
            'description' => 'getDescription',
            'policyid' => 'getPolicyid',
            'domainid' => 'getDomainid',
            'projectid' => 'getProjectid',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'certificateid' => 'getCertificateid',
            'certificatename' => 'getCertificatename',
            'protectStatus' => 'getProtectStatus',
            'accessStatus' => 'getAccessStatus',
            'webTag' => 'getWebTag',
            'blockPage' => 'getBlockPage',
            'trafficMark' => 'getTrafficMark',
            'timeoutConfig' => 'getTimeoutConfig',
            'forwardHeaderMap' => 'getForwardHeaderMap',
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
    const CIPHER_CIPHER_5 = 'cipher_5';
    const CIPHER_CIPHER_6 = 'cipher_6';
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
            self::CIPHER_CIPHER_5,
            self::CIPHER_CIPHER_6,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['locked'] = isset($data['locked']) ? $data['locked'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['tls'] = isset($data['tls']) ? $data['tls'] : null;
        $this->container['cipher'] = isset($data['cipher']) ? $data['cipher'] : null;
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['domainid'] = isset($data['domainid']) ? $data['domainid'] : null;
        $this->container['projectid'] = isset($data['projectid']) ? $data['projectid'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['certificateid'] = isset($data['certificateid']) ? $data['certificateid'] : null;
        $this->container['certificatename'] = isset($data['certificatename']) ? $data['certificatename'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['webTag'] = isset($data['webTag']) ? $data['webTag'] : null;
        $this->container['blockPage'] = isset($data['blockPage']) ? $data['blockPage'] : null;
        $this->container['trafficMark'] = isset($data['trafficMark']) ? $data['trafficMark'] : null;
        $this->container['timeoutConfig'] = isset($data['timeoutConfig']) ? $data['timeoutConfig'] : null;
        $this->container['forwardHeaderMap'] = isset($data['forwardHeaderMap']) ? $data['forwardHeaderMap'] : null;
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
    *  创建的独享模式防护域名
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
    * @param string|null $hostname 创建的独享模式防护域名
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
        return $this;
    }

    /**
    * Gets protocol
    *  对外协议，客户端（例如浏览器）请求访问网站的协议类型
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
    * @param string|null $protocol 对外协议，客户端（例如浏览器）请求访问网站的协议类型
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\PremiumWafServer[]|null
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\PremiumWafServer[]|null $server 防护域名的源站服务器配置信息
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
    * Gets tls
    *  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对外协议为https时才有tls参数
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
    * @param string|null $tls 配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对外协议为https时才有tls参数
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
    *  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH    cipher_5：加密算法为AES128-SHA:AES256-SHA:AES128-SHA256:AES256-SHA256:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!PSK:!RC4:!DHE:@STRENGTH    cipher_6：加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
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
    * @param string|null $cipher 对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH    cipher_5：加密算法为AES128-SHA:AES256-SHA:AES128-SHA256:AES256-SHA256:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!EXPORT:!DES:!MD5:!PSK:!RC4:!DHE:@STRENGTH    cipher_6：加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-SHA384:ECDHE-RSA-AES256-SHA384:ECDHE-ECDSA-AES128-SHA256:ECDHE-RSA-AES128-SHA256   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    *
    * @return $this
    */
    public function setCipher($cipher)
    {
        $this->container['cipher'] = $cipher;
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
    * Gets domainid
    *  账号ID,对应华为云控制台用户名->我的凭证->账号ID
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
    * @param string|null $domainid 账号ID,对应华为云控制台用户名->我的凭证->账号ID
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

