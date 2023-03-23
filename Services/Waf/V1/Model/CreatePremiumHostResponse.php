<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePremiumHostResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePremiumHostResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名id
    * hostname  防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  是否使用代理   - true：代表使用代理   - false：代表未使用代理
    * locked  域名冻结状态，0表示未冻结，1表示为冻结，冗余参数
    * timestamp  创建域名的时间，13位毫秒时间戳
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * blockPage  blockPage
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
            'protectStatus' => 'int',
            'accessStatus' => 'int',
            'blockPage' => '\HuaweiCloud\SDK\Waf\V1\Model\BlockPage'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名id
    * hostname  防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  是否使用代理   - true：代表使用代理   - false：代表未使用代理
    * locked  域名冻结状态，0表示未冻结，1表示为冻结，冗余参数
    * timestamp  创建域名的时间，13位毫秒时间戳
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * blockPage  blockPage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hostname' => null,
        'protocol' => null,
        'server' => null,
        'proxy' => null,
        'locked' => null,
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
        'protectStatus' => null,
        'accessStatus' => null,
        'blockPage' => null
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
    * hostname  防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  是否使用代理   - true：代表使用代理   - false：代表未使用代理
    * locked  域名冻结状态，0表示未冻结，1表示为冻结，冗余参数
    * timestamp  创建域名的时间，13位毫秒时间戳
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * blockPage  blockPage
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
            'protectStatus' => 'protect_status',
            'accessStatus' => 'access_status',
            'blockPage' => 'block_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名id
    * hostname  防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  是否使用代理   - true：代表使用代理   - false：代表未使用代理
    * locked  域名冻结状态，0表示未冻结，1表示为冻结，冗余参数
    * timestamp  创建域名的时间，13位毫秒时间戳
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * blockPage  blockPage
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
            'protectStatus' => 'setProtectStatus',
            'accessStatus' => 'setAccessStatus',
            'blockPage' => 'setBlockPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名id
    * hostname  防护域名
    * protocol  对外协议，客户端（例如浏览器）请求访问网站的协议类型
    * server  防护域名的源站服务器配置信息
    * proxy  是否使用代理   - true：代表使用代理   - false：代表未使用代理
    * locked  域名冻结状态，0表示未冻结，1表示为冻结，冗余参数
    * timestamp  创建域名的时间，13位毫秒时间戳
    * tls  配置的最低TLS版本（TLS v1.0/TLS v1.1/TLS v1.2）,默认为TLS v1.0版本，对于低于最低TLS版本的请求，将无法正常访问网站
    * cipher  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * domainid  帐号ID,对应华为云控制台用户名->我的凭证->帐号ID
    * projectid  项目ID，对应华为云控制台用户名->我的凭证->项目列表->项目ID
    * enterpriseProjectId  企业项目ID，对应华为云控制台用户名->企业->项目管理->点击项目名称->ID
    * protectStatus  域名防护状态：  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * blockPage  blockPage
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
            'protectStatus' => 'getProtectStatus',
            'accessStatus' => 'getAccessStatus',
            'blockPage' => 'getBlockPage'
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
    const PROTOCOL_HTTPS = 'HTTPS';
    const PROTOCOL_HTTP = 'HTTP';
    const PROTOCOL_HTTPHTTPS = 'HTTP&HTTPS';
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
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTPS,
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPHTTPS,
        ];
    }

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
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['blockPage'] = isset($data['blockPage']) ? $data['blockPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    *  防护域名
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
    * @param string|null $hostname 防护域名
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
    *  是否使用代理   - true：代表使用代理   - false：代表未使用代理
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
    * @param bool|null $proxy 是否使用代理   - true：代表使用代理   - false：代表未使用代理
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
    *  域名冻结状态，0表示未冻结，1表示为冻结，冗余参数
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
    * @param int|null $locked 域名冻结状态，0表示未冻结，1表示为冻结，冗余参数
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
    *  创建域名的时间，13位毫秒时间戳
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
    * @param int|null $timestamp 创建域名的时间，13位毫秒时间戳
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
    *  对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
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
    * @param string|null $cipher 对外协议为https时才有cipher参数，加密套件（cipher_1，cipher_2，cipher_3，cipher_4，cipher_default）：  - cipher_1： 加密算法为ECDHE-ECDSA-AES256-GCM-SHA384:HIGH:!MEDIUM:!LOW:!aNULL:!eNULL:!DES:!MD5:!PSK:!RC4:!kRSA:!SRP:!3DES:!DSS:!EXP:!CAMELLIA:@STRENGTH   - cipher_2：加密算法为EECDH+AESGCM:EDH+AESGCM   - cipher_3：加密算法为ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-SHA384:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH   - cipher_4：加密算法为ECDHE-RSA-AES256-GCM-SHA384:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!EDH   - cipher_default： 加密算法为ECDHE-RSA-AES256-SHA384:AES256-SHA256:RC4:HIGH:!MD5:!aNULL:!eNULL:!NULL:!DH:!EDH:!AESGCM
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
    *  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
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
    * @param string|null $policyid 防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
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

