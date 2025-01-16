<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompositeHostResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompositeHostResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名id
    * hostid  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * flag  flag
    * wafType  域名所属WAF模式,cloud为云模式，premium为独享模式
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * accessProgress  接入进度，仅用于新版console(前端)使用
    * premiumWafInstances  租户引擎实例信息列表
    * description  域名描述
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * server  防护域名的源站服务器配置信息，只有独享模式域名才返回vpc_id
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hostid' => 'string',
            'hostname' => 'string',
            'policyid' => 'string',
            'accessCode' => 'string',
            'protectStatus' => 'int',
            'accessStatus' => 'int',
            'proxy' => 'bool',
            'timestamp' => 'int',
            'paidType' => 'string',
            'flag' => '\HuaweiCloud\SDK\Waf\V1\Model\Flag',
            'wafType' => 'string',
            'webTag' => 'string',
            'accessProgress' => '\HuaweiCloud\SDK\Waf\V1\Model\AccessProgress[]',
            'premiumWafInstances' => '\HuaweiCloud\SDK\Waf\V1\Model\PremiumWafInstances[]',
            'description' => 'string',
            'exclusiveIp' => 'bool',
            'region' => 'string',
            'server' => '\HuaweiCloud\SDK\Waf\V1\Model\WafServer[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名id
    * hostid  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * flag  flag
    * wafType  域名所属WAF模式,cloud为云模式，premium为独享模式
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * accessProgress  接入进度，仅用于新版console(前端)使用
    * premiumWafInstances  租户引擎实例信息列表
    * description  域名描述
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * server  防护域名的源站服务器配置信息，只有独享模式域名才返回vpc_id
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hostid' => null,
        'hostname' => null,
        'policyid' => null,
        'accessCode' => null,
        'protectStatus' => null,
        'accessStatus' => null,
        'proxy' => null,
        'timestamp' => 'int64',
        'paidType' => null,
        'flag' => null,
        'wafType' => null,
        'webTag' => null,
        'accessProgress' => null,
        'premiumWafInstances' => null,
        'description' => null,
        'exclusiveIp' => null,
        'region' => null,
        'server' => null,
        'enterpriseProjectId' => null
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
    * hostid  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * flag  flag
    * wafType  域名所属WAF模式,cloud为云模式，premium为独享模式
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * accessProgress  接入进度，仅用于新版console(前端)使用
    * premiumWafInstances  租户引擎实例信息列表
    * description  域名描述
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * server  防护域名的源站服务器配置信息，只有独享模式域名才返回vpc_id
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hostid' => 'hostid',
            'hostname' => 'hostname',
            'policyid' => 'policyid',
            'accessCode' => 'access_code',
            'protectStatus' => 'protect_status',
            'accessStatus' => 'access_status',
            'proxy' => 'proxy',
            'timestamp' => 'timestamp',
            'paidType' => 'paid_type',
            'flag' => 'flag',
            'wafType' => 'waf_type',
            'webTag' => 'web_tag',
            'accessProgress' => 'access_progress',
            'premiumWafInstances' => 'premium_waf_instances',
            'description' => 'description',
            'exclusiveIp' => 'exclusive_ip',
            'region' => 'region',
            'server' => 'server',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名id
    * hostid  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * flag  flag
    * wafType  域名所属WAF模式,cloud为云模式，premium为独享模式
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * accessProgress  接入进度，仅用于新版console(前端)使用
    * premiumWafInstances  租户引擎实例信息列表
    * description  域名描述
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * server  防护域名的源站服务器配置信息，只有独享模式域名才返回vpc_id
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hostid' => 'setHostid',
            'hostname' => 'setHostname',
            'policyid' => 'setPolicyid',
            'accessCode' => 'setAccessCode',
            'protectStatus' => 'setProtectStatus',
            'accessStatus' => 'setAccessStatus',
            'proxy' => 'setProxy',
            'timestamp' => 'setTimestamp',
            'paidType' => 'setPaidType',
            'flag' => 'setFlag',
            'wafType' => 'setWafType',
            'webTag' => 'setWebTag',
            'accessProgress' => 'setAccessProgress',
            'premiumWafInstances' => 'setPremiumWafInstances',
            'description' => 'setDescription',
            'exclusiveIp' => 'setExclusiveIp',
            'region' => 'setRegion',
            'server' => 'setServer',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名id
    * hostid  域名id
    * hostname  创建的云模式防护域名
    * policyid  策略id
    * accessCode  cname前缀
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * timestamp  创建防护域名的时间
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * flag  flag
    * wafType  域名所属WAF模式,cloud为云模式，premium为独享模式
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * accessProgress  接入进度，仅用于新版console(前端)使用
    * premiumWafInstances  租户引擎实例信息列表
    * description  域名描述
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * server  防护域名的源站服务器配置信息，只有独享模式域名才返回vpc_id
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hostid' => 'getHostid',
            'hostname' => 'getHostname',
            'policyid' => 'getPolicyid',
            'accessCode' => 'getAccessCode',
            'protectStatus' => 'getProtectStatus',
            'accessStatus' => 'getAccessStatus',
            'proxy' => 'getProxy',
            'timestamp' => 'getTimestamp',
            'paidType' => 'getPaidType',
            'flag' => 'getFlag',
            'wafType' => 'getWafType',
            'webTag' => 'getWebTag',
            'accessProgress' => 'getAccessProgress',
            'premiumWafInstances' => 'getPremiumWafInstances',
            'description' => 'getDescription',
            'exclusiveIp' => 'getExclusiveIp',
            'region' => 'getRegion',
            'server' => 'getServer',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hostid'] = isset($data['hostid']) ? $data['hostid'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['accessCode'] = isset($data['accessCode']) ? $data['accessCode'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['paidType'] = isset($data['paidType']) ? $data['paidType'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['wafType'] = isset($data['wafType']) ? $data['wafType'] : null;
        $this->container['webTag'] = isset($data['webTag']) ? $data['webTag'] : null;
        $this->container['accessProgress'] = isset($data['accessProgress']) ? $data['accessProgress'] : null;
        $this->container['premiumWafInstances'] = isset($data['premiumWafInstances']) ? $data['premiumWafInstances'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['exclusiveIp'] = isset($data['exclusiveIp']) ? $data['exclusiveIp'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets hostid
    *  域名id
    *
    * @return string|null
    */
    public function getHostid()
    {
        return $this->container['hostid'];
    }

    /**
    * Sets hostid
    *
    * @param string|null $hostid 域名id
    *
    * @return $this
    */
    public function setHostid($hostid)
    {
        $this->container['hostid'] = $hostid;
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
    * Gets wafType
    *  域名所属WAF模式,cloud为云模式，premium为独享模式
    *
    * @return string|null
    */
    public function getWafType()
    {
        return $this->container['wafType'];
    }

    /**
    * Sets wafType
    *
    * @param string|null $wafType 域名所属WAF模式,cloud为云模式，premium为独享模式
    *
    * @return $this
    */
    public function setWafType($wafType)
    {
        $this->container['wafType'] = $wafType;
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
    * Gets premiumWafInstances
    *  租户引擎实例信息列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\PremiumWafInstances[]|null
    */
    public function getPremiumWafInstances()
    {
        return $this->container['premiumWafInstances'];
    }

    /**
    * Sets premiumWafInstances
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\PremiumWafInstances[]|null $premiumWafInstances 租户引擎实例信息列表
    *
    * @return $this
    */
    public function setPremiumWafInstances($premiumWafInstances)
    {
        $this->container['premiumWafInstances'] = $premiumWafInstances;
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
    * Gets region
    *  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets server
    *  防护域名的源站服务器配置信息，只有独享模式域名才返回vpc_id
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\WafServer[]|null
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\WafServer[]|null $server 防护域名的源站服务器配置信息，只有独享模式域名才返回vpc_id
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

