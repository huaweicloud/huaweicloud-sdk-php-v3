<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateIgnoreRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateIgnoreRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  防护域名或防护网站，数组长度为0时，代表规则对全部域名或防护网站生效。当防护域名的接入模式为云模式-ELB接入时，该参数需以<域名>:\\<id\\>格式填写（如www.example.com:b061fb5b-8ea0-4357-b0f4-cb6178ab378a），若域名绑定的负载均衡器（ELB）下所有监听器都接入WAF防护，填入的id为负载均衡器（ELB）id，否则填入的id为指定监听器id；可通过ShowPremiumHost接口查询与该域名绑定的ELB实例id，在帮助中心-ELB服务-API文档下查询监听器id
    * conditions  条件列表
    * mode  固定值为1,代表v2版本误报屏蔽规则，v1版本仅用于兼容旧版本，不支持创建
    * rule  **参数解释：** 需要屏蔽的规则 **约束限制：** 参数值根据\"不检测模块\"变化 **取值范围：** 不检测模块: - 所有模块: bypass - Web基础防护模块按照规则类型划分:   - ID: 内置规则id，通过ListWebBasicProtectionRules接口获取ID，多个id以分号;分隔，比如：\"000000;111111\"   - 类别: 多个类型以分号;分隔，比如：\"xss;webshell\"     - xss：XSS攻击     - webshell：网站木马     - vuln：其他类型攻击     - sqli：SQL注入攻击     - robot：恶意爬虫     - rfi：远程文件包含     - lfi：本地文件包含     - cmdi：命令注入攻击   - 所有内置规则 - 非法请求: illegal **默认取值：** 不涉及
    * advanced  advanced
    * description  屏蔽规则描述
    * policyIds  **参数解释：** 添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开 **约束限制：** 不能为空 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string[]',
            'conditions' => '\HuaweiCloud\SDK\Waf\V1\Model\CreateCondition[]',
            'mode' => 'int',
            'rule' => 'string',
            'advanced' => '\HuaweiCloud\SDK\Waf\V1\Model\IgnoreAdvanced',
            'description' => 'string',
            'policyIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  防护域名或防护网站，数组长度为0时，代表规则对全部域名或防护网站生效。当防护域名的接入模式为云模式-ELB接入时，该参数需以<域名>:\\<id\\>格式填写（如www.example.com:b061fb5b-8ea0-4357-b0f4-cb6178ab378a），若域名绑定的负载均衡器（ELB）下所有监听器都接入WAF防护，填入的id为负载均衡器（ELB）id，否则填入的id为指定监听器id；可通过ShowPremiumHost接口查询与该域名绑定的ELB实例id，在帮助中心-ELB服务-API文档下查询监听器id
    * conditions  条件列表
    * mode  固定值为1,代表v2版本误报屏蔽规则，v1版本仅用于兼容旧版本，不支持创建
    * rule  **参数解释：** 需要屏蔽的规则 **约束限制：** 参数值根据\"不检测模块\"变化 **取值范围：** 不检测模块: - 所有模块: bypass - Web基础防护模块按照规则类型划分:   - ID: 内置规则id，通过ListWebBasicProtectionRules接口获取ID，多个id以分号;分隔，比如：\"000000;111111\"   - 类别: 多个类型以分号;分隔，比如：\"xss;webshell\"     - xss：XSS攻击     - webshell：网站木马     - vuln：其他类型攻击     - sqli：SQL注入攻击     - robot：恶意爬虫     - rfi：远程文件包含     - lfi：本地文件包含     - cmdi：命令注入攻击   - 所有内置规则 - 非法请求: illegal **默认取值：** 不涉及
    * advanced  advanced
    * description  屏蔽规则描述
    * policyIds  **参数解释：** 添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开 **约束限制：** 不能为空 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'conditions' => null,
        'mode' => null,
        'rule' => null,
        'advanced' => null,
        'description' => null,
        'policyIds' => null
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
    * domain  防护域名或防护网站，数组长度为0时，代表规则对全部域名或防护网站生效。当防护域名的接入模式为云模式-ELB接入时，该参数需以<域名>:\\<id\\>格式填写（如www.example.com:b061fb5b-8ea0-4357-b0f4-cb6178ab378a），若域名绑定的负载均衡器（ELB）下所有监听器都接入WAF防护，填入的id为负载均衡器（ELB）id，否则填入的id为指定监听器id；可通过ShowPremiumHost接口查询与该域名绑定的ELB实例id，在帮助中心-ELB服务-API文档下查询监听器id
    * conditions  条件列表
    * mode  固定值为1,代表v2版本误报屏蔽规则，v1版本仅用于兼容旧版本，不支持创建
    * rule  **参数解释：** 需要屏蔽的规则 **约束限制：** 参数值根据\"不检测模块\"变化 **取值范围：** 不检测模块: - 所有模块: bypass - Web基础防护模块按照规则类型划分:   - ID: 内置规则id，通过ListWebBasicProtectionRules接口获取ID，多个id以分号;分隔，比如：\"000000;111111\"   - 类别: 多个类型以分号;分隔，比如：\"xss;webshell\"     - xss：XSS攻击     - webshell：网站木马     - vuln：其他类型攻击     - sqli：SQL注入攻击     - robot：恶意爬虫     - rfi：远程文件包含     - lfi：本地文件包含     - cmdi：命令注入攻击   - 所有内置规则 - 非法请求: illegal **默认取值：** 不涉及
    * advanced  advanced
    * description  屏蔽规则描述
    * policyIds  **参数解释：** 添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开 **约束限制：** 不能为空 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'conditions' => 'conditions',
            'mode' => 'mode',
            'rule' => 'rule',
            'advanced' => 'advanced',
            'description' => 'description',
            'policyIds' => 'policy_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  防护域名或防护网站，数组长度为0时，代表规则对全部域名或防护网站生效。当防护域名的接入模式为云模式-ELB接入时，该参数需以<域名>:\\<id\\>格式填写（如www.example.com:b061fb5b-8ea0-4357-b0f4-cb6178ab378a），若域名绑定的负载均衡器（ELB）下所有监听器都接入WAF防护，填入的id为负载均衡器（ELB）id，否则填入的id为指定监听器id；可通过ShowPremiumHost接口查询与该域名绑定的ELB实例id，在帮助中心-ELB服务-API文档下查询监听器id
    * conditions  条件列表
    * mode  固定值为1,代表v2版本误报屏蔽规则，v1版本仅用于兼容旧版本，不支持创建
    * rule  **参数解释：** 需要屏蔽的规则 **约束限制：** 参数值根据\"不检测模块\"变化 **取值范围：** 不检测模块: - 所有模块: bypass - Web基础防护模块按照规则类型划分:   - ID: 内置规则id，通过ListWebBasicProtectionRules接口获取ID，多个id以分号;分隔，比如：\"000000;111111\"   - 类别: 多个类型以分号;分隔，比如：\"xss;webshell\"     - xss：XSS攻击     - webshell：网站木马     - vuln：其他类型攻击     - sqli：SQL注入攻击     - robot：恶意爬虫     - rfi：远程文件包含     - lfi：本地文件包含     - cmdi：命令注入攻击   - 所有内置规则 - 非法请求: illegal **默认取值：** 不涉及
    * advanced  advanced
    * description  屏蔽规则描述
    * policyIds  **参数解释：** 添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开 **约束限制：** 不能为空 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'conditions' => 'setConditions',
            'mode' => 'setMode',
            'rule' => 'setRule',
            'advanced' => 'setAdvanced',
            'description' => 'setDescription',
            'policyIds' => 'setPolicyIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  防护域名或防护网站，数组长度为0时，代表规则对全部域名或防护网站生效。当防护域名的接入模式为云模式-ELB接入时，该参数需以<域名>:\\<id\\>格式填写（如www.example.com:b061fb5b-8ea0-4357-b0f4-cb6178ab378a），若域名绑定的负载均衡器（ELB）下所有监听器都接入WAF防护，填入的id为负载均衡器（ELB）id，否则填入的id为指定监听器id；可通过ShowPremiumHost接口查询与该域名绑定的ELB实例id，在帮助中心-ELB服务-API文档下查询监听器id
    * conditions  条件列表
    * mode  固定值为1,代表v2版本误报屏蔽规则，v1版本仅用于兼容旧版本，不支持创建
    * rule  **参数解释：** 需要屏蔽的规则 **约束限制：** 参数值根据\"不检测模块\"变化 **取值范围：** 不检测模块: - 所有模块: bypass - Web基础防护模块按照规则类型划分:   - ID: 内置规则id，通过ListWebBasicProtectionRules接口获取ID，多个id以分号;分隔，比如：\"000000;111111\"   - 类别: 多个类型以分号;分隔，比如：\"xss;webshell\"     - xss：XSS攻击     - webshell：网站木马     - vuln：其他类型攻击     - sqli：SQL注入攻击     - robot：恶意爬虫     - rfi：远程文件包含     - lfi：本地文件包含     - cmdi：命令注入攻击   - 所有内置规则 - 非法请求: illegal **默认取值：** 不涉及
    * advanced  advanced
    * description  屏蔽规则描述
    * policyIds  **参数解释：** 添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开 **约束限制：** 不能为空 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'conditions' => 'getConditions',
            'mode' => 'getMode',
            'rule' => 'getRule',
            'advanced' => 'getAdvanced',
            'description' => 'getDescription',
            'policyIds' => 'getPolicyIds'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['advanced'] = isset($data['advanced']) ? $data['advanced'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyIds'] = isset($data['policyIds']) ? $data['policyIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
        if ($this->container['rule'] === null) {
            $invalidProperties[] = "'rule' can't be null";
        }
        if ($this->container['policyIds'] === null) {
            $invalidProperties[] = "'policyIds' can't be null";
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
    * Gets domain
    *  防护域名或防护网站，数组长度为0时，代表规则对全部域名或防护网站生效。当防护域名的接入模式为云模式-ELB接入时，该参数需以<域名>:\\<id\\>格式填写（如www.example.com:b061fb5b-8ea0-4357-b0f4-cb6178ab378a），若域名绑定的负载均衡器（ELB）下所有监听器都接入WAF防护，填入的id为负载均衡器（ELB）id，否则填入的id为指定监听器id；可通过ShowPremiumHost接口查询与该域名绑定的ELB实例id，在帮助中心-ELB服务-API文档下查询监听器id
    *
    * @return string[]
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string[] $domain 防护域名或防护网站，数组长度为0时，代表规则对全部域名或防护网站生效。当防护域名的接入模式为云模式-ELB接入时，该参数需以<域名>:\\<id\\>格式填写（如www.example.com:b061fb5b-8ea0-4357-b0f4-cb6178ab378a），若域名绑定的负载均衡器（ELB）下所有监听器都接入WAF防护，填入的id为负载均衡器（ELB）id，否则填入的id为指定监听器id；可通过ShowPremiumHost接口查询与该域名绑定的ELB实例id，在帮助中心-ELB服务-API文档下查询监听器id
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets conditions
    *  条件列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\CreateCondition[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\CreateCondition[] $conditions 条件列表
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
        return $this;
    }

    /**
    * Gets mode
    *  固定值为1,代表v2版本误报屏蔽规则，v1版本仅用于兼容旧版本，不支持创建
    *
    * @return int
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param int $mode 固定值为1,代表v2版本误报屏蔽规则，v1版本仅用于兼容旧版本，不支持创建
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets rule
    *  **参数解释：** 需要屏蔽的规则 **约束限制：** 参数值根据\"不检测模块\"变化 **取值范围：** 不检测模块: - 所有模块: bypass - Web基础防护模块按照规则类型划分:   - ID: 内置规则id，通过ListWebBasicProtectionRules接口获取ID，多个id以分号;分隔，比如：\"000000;111111\"   - 类别: 多个类型以分号;分隔，比如：\"xss;webshell\"     - xss：XSS攻击     - webshell：网站木马     - vuln：其他类型攻击     - sqli：SQL注入攻击     - robot：恶意爬虫     - rfi：远程文件包含     - lfi：本地文件包含     - cmdi：命令注入攻击   - 所有内置规则 - 非法请求: illegal **默认取值：** 不涉及
    *
    * @return string
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param string $rule **参数解释：** 需要屏蔽的规则 **约束限制：** 参数值根据\"不检测模块\"变化 **取值范围：** 不检测模块: - 所有模块: bypass - Web基础防护模块按照规则类型划分:   - ID: 内置规则id，通过ListWebBasicProtectionRules接口获取ID，多个id以分号;分隔，比如：\"000000;111111\"   - 类别: 多个类型以分号;分隔，比如：\"xss;webshell\"     - xss：XSS攻击     - webshell：网站木马     - vuln：其他类型攻击     - sqli：SQL注入攻击     - robot：恶意爬虫     - rfi：远程文件包含     - lfi：本地文件包含     - cmdi：命令注入攻击   - 所有内置规则 - 非法请求: illegal **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets advanced
    *  advanced
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IgnoreAdvanced|null
    */
    public function getAdvanced()
    {
        return $this->container['advanced'];
    }

    /**
    * Sets advanced
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IgnoreAdvanced|null $advanced advanced
    *
    * @return $this
    */
    public function setAdvanced($advanced)
    {
        $this->container['advanced'] = $advanced;
        return $this;
    }

    /**
    * Gets description
    *  屏蔽规则描述
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
    * @param string|null $description 屏蔽规则描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets policyIds
    *  **参数解释：** 添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开 **约束限制：** 不能为空 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]
    */
    public function getPolicyIds()
    {
        return $this->container['policyIds'];
    }

    /**
    * Sets policyIds
    *
    * @param string[] $policyIds **参数解释：** 添加规则的策略id列表。策略id从\"查询防护策略列表\"(ListPolicy)接口获取，多个策略之间用“,”隔开 **约束限制：** 不能为空 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPolicyIds($policyIds)
    {
        $this->container['policyIds'] = $policyIds;
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

