<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeletePremiumHostResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeletePremiumHostResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  域名id
    * hostname  域名
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * protectStatus  **参数解释：** 域名防护状态标识，用于指定域名在WAF中的防护运行状态 **约束限制：** 不涉及 **取值范围：**  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测  **默认取值：** 不涉及
    * accessStatus  **参数解释：** 域名接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * hostId  域名id，和id的值是一样的，属于冗余字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'hostname' => 'string',
            'extend' => 'map[string,string]',
            'region' => 'string',
            'flag' => '\HuaweiCloud\SDK\Waf\V1\Model\Flag',
            'description' => 'string',
            'policyid' => 'string',
            'protectStatus' => 'int',
            'accessStatus' => 'int',
            'webTag' => 'string',
            'hostId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  域名id
    * hostname  域名
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * protectStatus  **参数解释：** 域名防护状态标识，用于指定域名在WAF中的防护运行状态 **约束限制：** 不涉及 **取值范围：**  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测  **默认取值：** 不涉及
    * accessStatus  **参数解释：** 域名接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * hostId  域名id，和id的值是一样的，属于冗余字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'hostname' => null,
        'extend' => null,
        'region' => null,
        'flag' => null,
        'description' => null,
        'policyid' => null,
        'protectStatus' => 'int32',
        'accessStatus' => 'int32',
        'webTag' => null,
        'hostId' => null
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
    * hostname  域名
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * protectStatus  **参数解释：** 域名防护状态标识，用于指定域名在WAF中的防护运行状态 **约束限制：** 不涉及 **取值范围：**  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测  **默认取值：** 不涉及
    * accessStatus  **参数解释：** 域名接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * hostId  域名id，和id的值是一样的，属于冗余字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'hostname' => 'hostname',
            'extend' => 'extend',
            'region' => 'region',
            'flag' => 'flag',
            'description' => 'description',
            'policyid' => 'policyid',
            'protectStatus' => 'protect_status',
            'accessStatus' => 'access_status',
            'webTag' => 'web_tag',
            'hostId' => 'host_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  域名id
    * hostname  域名
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * protectStatus  **参数解释：** 域名防护状态标识，用于指定域名在WAF中的防护运行状态 **约束限制：** 不涉及 **取值范围：**  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测  **默认取值：** 不涉及
    * accessStatus  **参数解释：** 域名接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * hostId  域名id，和id的值是一样的，属于冗余字段
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'hostname' => 'setHostname',
            'extend' => 'setExtend',
            'region' => 'setRegion',
            'flag' => 'setFlag',
            'description' => 'setDescription',
            'policyid' => 'setPolicyid',
            'protectStatus' => 'setProtectStatus',
            'accessStatus' => 'setAccessStatus',
            'webTag' => 'setWebTag',
            'hostId' => 'setHostId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  域名id
    * hostname  域名
    * extend  扩展字段，用于保存防护域名的一些配置信息。
    * region  华为云区域ID，控制台创建的域名会携带此参数，api调用创建的域名此参数为空，可以通过华为云上地区和终端节点文档查询区域ID对应的中文名称
    * flag  flag
    * description  域名描述
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * protectStatus  **参数解释：** 域名防护状态标识，用于指定域名在WAF中的防护运行状态 **约束限制：** 不涉及 **取值范围：**  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测  **默认取值：** 不涉及
    * accessStatus  **参数解释：** 域名接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
    * webTag  网站名称，对应WAF控制台域名详情中的网站名称
    * hostId  域名id，和id的值是一样的，属于冗余字段
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'hostname' => 'getHostname',
            'extend' => 'getExtend',
            'region' => 'getRegion',
            'flag' => 'getFlag',
            'description' => 'getDescription',
            'policyid' => 'getPolicyid',
            'protectStatus' => 'getProtectStatus',
            'accessStatus' => 'getAccessStatus',
            'webTag' => 'getWebTag',
            'hostId' => 'getHostId'
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
    const PROTECT_STATUS_MINUS_1 = -1;
    const PROTECT_STATUS_0 = 0;
    const PROTECT_STATUS_1 = 1;
    const ACCESS_STATUS_0 = 0;
    const ACCESS_STATUS_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectStatusAllowableValues()
    {
        return [
            self::PROTECT_STATUS_MINUS_1,
            self::PROTECT_STATUS_0,
            self::PROTECT_STATUS_1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAccessStatusAllowableValues()
    {
        return [
            self::ACCESS_STATUS_0,
            self::ACCESS_STATUS_1,
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
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['flag'] = isset($data['flag']) ? $data['flag'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['webTag'] = isset($data['webTag']) ? $data['webTag'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProtectStatusAllowableValues();
                if (!is_null($this->container['protectStatus']) && !in_array($this->container['protectStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAccessStatusAllowableValues();
                if (!is_null($this->container['accessStatus']) && !in_array($this->container['accessStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'accessStatus', must be one of '%s'",
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
    *  域名
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
    * @param string|null $hostname 域名
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
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
    * Gets protectStatus
    *  **参数解释：** 域名防护状态标识，用于指定域名在WAF中的防护运行状态 **约束限制：** 不涉及 **取值范围：**  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测  **默认取值：** 不涉及
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
    * @param int|null $protectStatus **参数解释：** 域名防护状态标识，用于指定域名在WAF中的防护运行状态 **约束限制：** 不涉及 **取值范围：**  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测  **默认取值：** 不涉及
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
    *  **参数解释：** 域名接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
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
    * @param int|null $accessStatus **参数解释：** 域名接入状态 **约束限制：** 不涉及 **取值范围：**  - 0: 未接入  - 1: 已接入  **默认取值：** 不涉及
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
    * Gets hostId
    *  域名id，和id的值是一样的，属于冗余字段
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId 域名id，和id的值是一样的，属于冗余字段
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
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

