<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudWafHostItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudWafHostItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名id
    * hostid  域名id
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * description  域名描述信息，可选参数。
    * type  WAF部署模式，默认是1，目前仅支持反代模式，冗余参数
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * hostname  创建的云模式防护域名
    * accessCode  cname前缀
    * policyid  防护策略id
    * timestamp  创建防护域名的时间
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * flag  flag
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hostid' => 'string',
            'region' => 'string',
            'description' => 'string',
            'type' => 'int',
            'proxy' => 'bool',
            'hostname' => 'string',
            'accessCode' => 'string',
            'policyid' => 'string',
            'timestamp' => 'int',
            'protectStatus' => 'int',
            'accessStatus' => 'int',
            'exclusiveIp' => 'bool',
            'paidType' => 'string',
            'webTag' => 'string',
            'flag' => '\HuaweiCloud\SDK\Waf\V1\Model\Flag'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名id
    * hostid  域名id
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * description  域名描述信息，可选参数。
    * type  WAF部署模式，默认是1，目前仅支持反代模式，冗余参数
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * hostname  创建的云模式防护域名
    * accessCode  cname前缀
    * policyid  防护策略id
    * timestamp  创建防护域名的时间
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * flag  flag
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hostid' => null,
        'region' => null,
        'description' => null,
        'type' => null,
        'proxy' => null,
        'hostname' => null,
        'accessCode' => null,
        'policyid' => null,
        'timestamp' => 'int64',
        'protectStatus' => null,
        'accessStatus' => null,
        'exclusiveIp' => null,
        'paidType' => null,
        'webTag' => null,
        'flag' => null
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
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * description  域名描述信息，可选参数。
    * type  WAF部署模式，默认是1，目前仅支持反代模式，冗余参数
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * hostname  创建的云模式防护域名
    * accessCode  cname前缀
    * policyid  防护策略id
    * timestamp  创建防护域名的时间
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * flag  flag
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hostid' => 'hostid',
            'region' => 'region',
            'description' => 'description',
            'type' => 'type',
            'proxy' => 'proxy',
            'hostname' => 'hostname',
            'accessCode' => 'access_code',
            'policyid' => 'policyid',
            'timestamp' => 'timestamp',
            'protectStatus' => 'protect_status',
            'accessStatus' => 'access_status',
            'exclusiveIp' => 'exclusive_ip',
            'paidType' => 'paid_type',
            'webTag' => 'web_tag',
            'flag' => 'flag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名id
    * hostid  域名id
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * description  域名描述信息，可选参数。
    * type  WAF部署模式，默认是1，目前仅支持反代模式，冗余参数
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * hostname  创建的云模式防护域名
    * accessCode  cname前缀
    * policyid  防护策略id
    * timestamp  创建防护域名的时间
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * flag  flag
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hostid' => 'setHostid',
            'region' => 'setRegion',
            'description' => 'setDescription',
            'type' => 'setType',
            'proxy' => 'setProxy',
            'hostname' => 'setHostname',
            'accessCode' => 'setAccessCode',
            'policyid' => 'setPolicyid',
            'timestamp' => 'setTimestamp',
            'protectStatus' => 'setProtectStatus',
            'accessStatus' => 'setAccessStatus',
            'exclusiveIp' => 'setExclusiveIp',
            'paidType' => 'setPaidType',
            'webTag' => 'setWebTag',
            'flag' => 'setFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名id
    * hostid  域名id
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * description  域名描述信息，可选参数。
    * type  WAF部署模式，默认是1，目前仅支持反代模式，冗余参数
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * hostname  创建的云模式防护域名
    * accessCode  cname前缀
    * policyid  防护策略id
    * timestamp  创建防护域名的时间
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * accessStatus  域名接入状态，0表示未接入，1表示已接入
    * exclusiveIp  是否使用独享ip   - true：使用独享ip   - false：不实用独享ip
    * paidType  套餐付费模式，默认值为prePaid。prePaid：包周期款模式；postPaid：按需模式。
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * flag  flag
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hostid' => 'getHostid',
            'region' => 'getRegion',
            'description' => 'getDescription',
            'type' => 'getType',
            'proxy' => 'getProxy',
            'hostname' => 'getHostname',
            'accessCode' => 'getAccessCode',
            'policyid' => 'getPolicyid',
            'timestamp' => 'getTimestamp',
            'protectStatus' => 'getProtectStatus',
            'accessStatus' => 'getAccessStatus',
            'exclusiveIp' => 'getExclusiveIp',
            'paidType' => 'getPaidType',
            'webTag' => 'getWebTag',
            'flag' => 'getFlag'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['accessCode'] = isset($data['accessCode']) ? $data['accessCode'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['exclusiveIp'] = isset($data['exclusiveIp']) ? $data['exclusiveIp'] : null;
        $this->container['paidType'] = isset($data['paidType']) ? $data['paidType'] : null;
        $this->container['webTag'] = isset($data['webTag']) ? $data['webTag'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
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
    * Gets description
    *  域名描述信息，可选参数。
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
    * @param string|null $description 域名描述信息，可选参数。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  WAF部署模式，默认是1，目前仅支持反代模式，冗余参数
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type WAF部署模式，默认是1，目前仅支持反代模式，冗余参数
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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
    * Gets policyid
    *  防护策略id
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
    * @param string|null $policyid 防护策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
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

