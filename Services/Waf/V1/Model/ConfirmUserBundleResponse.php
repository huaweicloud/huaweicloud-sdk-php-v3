<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfirmUserBundleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfirmUserBundleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释：** 云模式套餐类型 **取值范围：** - -2：冻结 - -1：无 - 2：云模式 标准版（包周期） - 3：云模式 专业版（包周期） - 4：云模式 企业版（包周期） - 7：云模式 入门版（包周期） - 22：云模式（按需计费）
    * name  **参数解释：** 云模式套餐名称 **取值范围：** - None：无 - Basic：云模式 入门版（包周期） - Professional：云模式 标准版（包周期） - Enterprise：云模式 专业版（包周期） - Ultimate: 云模式 企业版（包周期） - cloud.waf.postpaid：云模式（按需计费）
    * host  **参数解释：** 云模式支持的域名配额相关信息 **取值范围：** 不涉及
    * premiumType  **参数解释：** 独享套餐类型 **取值范围：** - -2：冻结 - -1：无 - 12：独享模式 版本规格为WI-100 - 13：独享模式 版本规格为WI-500
    * premiumName  **参数解释：** 独享模式套餐名称 **取值范围：** - None：无 - Instance.professional：独享模式 版本规格为WI-100 - Instance.enterprise：独享模式 版本规格为WI-500
    * premiumHost  **参数解释：** 独享支持的域名配额相关信息 **取值范围：** 不涉及
    * options  **参数解释：** 支持的策略相关信息 **取值范围：** 不涉及
    * rule  **参数解释：** 支持的规则配额相关信息 **取值范围：** 不涉及
    * upgrade  **参数解释：** 不同版本支持的规则信息 **取值范围：** 不涉及
    * feature  **参数解释：** 支持的特性 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'int',
            'name' => 'string',
            'host' => 'object',
            'premiumType' => 'int',
            'premiumName' => 'string',
            'premiumHost' => 'object',
            'options' => 'object',
            'rule' => 'object',
            'upgrade' => 'object',
            'feature' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释：** 云模式套餐类型 **取值范围：** - -2：冻结 - -1：无 - 2：云模式 标准版（包周期） - 3：云模式 专业版（包周期） - 4：云模式 企业版（包周期） - 7：云模式 入门版（包周期） - 22：云模式（按需计费）
    * name  **参数解释：** 云模式套餐名称 **取值范围：** - None：无 - Basic：云模式 入门版（包周期） - Professional：云模式 标准版（包周期） - Enterprise：云模式 专业版（包周期） - Ultimate: 云模式 企业版（包周期） - cloud.waf.postpaid：云模式（按需计费）
    * host  **参数解释：** 云模式支持的域名配额相关信息 **取值范围：** 不涉及
    * premiumType  **参数解释：** 独享套餐类型 **取值范围：** - -2：冻结 - -1：无 - 12：独享模式 版本规格为WI-100 - 13：独享模式 版本规格为WI-500
    * premiumName  **参数解释：** 独享模式套餐名称 **取值范围：** - None：无 - Instance.professional：独享模式 版本规格为WI-100 - Instance.enterprise：独享模式 版本规格为WI-500
    * premiumHost  **参数解释：** 独享支持的域名配额相关信息 **取值范围：** 不涉及
    * options  **参数解释：** 支持的策略相关信息 **取值范围：** 不涉及
    * rule  **参数解释：** 支持的规则配额相关信息 **取值范围：** 不涉及
    * upgrade  **参数解释：** 不同版本支持的规则信息 **取值范围：** 不涉及
    * feature  **参数解释：** 支持的特性 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'name' => null,
        'host' => null,
        'premiumType' => null,
        'premiumName' => null,
        'premiumHost' => null,
        'options' => null,
        'rule' => null,
        'upgrade' => null,
        'feature' => null
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
    * type  **参数解释：** 云模式套餐类型 **取值范围：** - -2：冻结 - -1：无 - 2：云模式 标准版（包周期） - 3：云模式 专业版（包周期） - 4：云模式 企业版（包周期） - 7：云模式 入门版（包周期） - 22：云模式（按需计费）
    * name  **参数解释：** 云模式套餐名称 **取值范围：** - None：无 - Basic：云模式 入门版（包周期） - Professional：云模式 标准版（包周期） - Enterprise：云模式 专业版（包周期） - Ultimate: 云模式 企业版（包周期） - cloud.waf.postpaid：云模式（按需计费）
    * host  **参数解释：** 云模式支持的域名配额相关信息 **取值范围：** 不涉及
    * premiumType  **参数解释：** 独享套餐类型 **取值范围：** - -2：冻结 - -1：无 - 12：独享模式 版本规格为WI-100 - 13：独享模式 版本规格为WI-500
    * premiumName  **参数解释：** 独享模式套餐名称 **取值范围：** - None：无 - Instance.professional：独享模式 版本规格为WI-100 - Instance.enterprise：独享模式 版本规格为WI-500
    * premiumHost  **参数解释：** 独享支持的域名配额相关信息 **取值范围：** 不涉及
    * options  **参数解释：** 支持的策略相关信息 **取值范围：** 不涉及
    * rule  **参数解释：** 支持的规则配额相关信息 **取值范围：** 不涉及
    * upgrade  **参数解释：** 不同版本支持的规则信息 **取值范围：** 不涉及
    * feature  **参数解释：** 支持的特性 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'name' => 'name',
            'host' => 'host',
            'premiumType' => 'premium_type',
            'premiumName' => 'premium_name',
            'premiumHost' => 'premium_host',
            'options' => 'options',
            'rule' => 'rule',
            'upgrade' => 'upgrade',
            'feature' => 'feature'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释：** 云模式套餐类型 **取值范围：** - -2：冻结 - -1：无 - 2：云模式 标准版（包周期） - 3：云模式 专业版（包周期） - 4：云模式 企业版（包周期） - 7：云模式 入门版（包周期） - 22：云模式（按需计费）
    * name  **参数解释：** 云模式套餐名称 **取值范围：** - None：无 - Basic：云模式 入门版（包周期） - Professional：云模式 标准版（包周期） - Enterprise：云模式 专业版（包周期） - Ultimate: 云模式 企业版（包周期） - cloud.waf.postpaid：云模式（按需计费）
    * host  **参数解释：** 云模式支持的域名配额相关信息 **取值范围：** 不涉及
    * premiumType  **参数解释：** 独享套餐类型 **取值范围：** - -2：冻结 - -1：无 - 12：独享模式 版本规格为WI-100 - 13：独享模式 版本规格为WI-500
    * premiumName  **参数解释：** 独享模式套餐名称 **取值范围：** - None：无 - Instance.professional：独享模式 版本规格为WI-100 - Instance.enterprise：独享模式 版本规格为WI-500
    * premiumHost  **参数解释：** 独享支持的域名配额相关信息 **取值范围：** 不涉及
    * options  **参数解释：** 支持的策略相关信息 **取值范围：** 不涉及
    * rule  **参数解释：** 支持的规则配额相关信息 **取值范围：** 不涉及
    * upgrade  **参数解释：** 不同版本支持的规则信息 **取值范围：** 不涉及
    * feature  **参数解释：** 支持的特性 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'name' => 'setName',
            'host' => 'setHost',
            'premiumType' => 'setPremiumType',
            'premiumName' => 'setPremiumName',
            'premiumHost' => 'setPremiumHost',
            'options' => 'setOptions',
            'rule' => 'setRule',
            'upgrade' => 'setUpgrade',
            'feature' => 'setFeature'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释：** 云模式套餐类型 **取值范围：** - -2：冻结 - -1：无 - 2：云模式 标准版（包周期） - 3：云模式 专业版（包周期） - 4：云模式 企业版（包周期） - 7：云模式 入门版（包周期） - 22：云模式（按需计费）
    * name  **参数解释：** 云模式套餐名称 **取值范围：** - None：无 - Basic：云模式 入门版（包周期） - Professional：云模式 标准版（包周期） - Enterprise：云模式 专业版（包周期） - Ultimate: 云模式 企业版（包周期） - cloud.waf.postpaid：云模式（按需计费）
    * host  **参数解释：** 云模式支持的域名配额相关信息 **取值范围：** 不涉及
    * premiumType  **参数解释：** 独享套餐类型 **取值范围：** - -2：冻结 - -1：无 - 12：独享模式 版本规格为WI-100 - 13：独享模式 版本规格为WI-500
    * premiumName  **参数解释：** 独享模式套餐名称 **取值范围：** - None：无 - Instance.professional：独享模式 版本规格为WI-100 - Instance.enterprise：独享模式 版本规格为WI-500
    * premiumHost  **参数解释：** 独享支持的域名配额相关信息 **取值范围：** 不涉及
    * options  **参数解释：** 支持的策略相关信息 **取值范围：** 不涉及
    * rule  **参数解释：** 支持的规则配额相关信息 **取值范围：** 不涉及
    * upgrade  **参数解释：** 不同版本支持的规则信息 **取值范围：** 不涉及
    * feature  **参数解释：** 支持的特性 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'name' => 'getName',
            'host' => 'getHost',
            'premiumType' => 'getPremiumType',
            'premiumName' => 'getPremiumName',
            'premiumHost' => 'getPremiumHost',
            'options' => 'getOptions',
            'rule' => 'getRule',
            'upgrade' => 'getUpgrade',
            'feature' => 'getFeature'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['premiumType'] = isset($data['premiumType']) ? $data['premiumType'] : null;
        $this->container['premiumName'] = isset($data['premiumName']) ? $data['premiumName'] : null;
        $this->container['premiumHost'] = isset($data['premiumHost']) ? $data['premiumHost'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['upgrade'] = isset($data['upgrade']) ? $data['upgrade'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
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
    * Gets type
    *  **参数解释：** 云模式套餐类型 **取值范围：** - -2：冻结 - -1：无 - 2：云模式 标准版（包周期） - 3：云模式 专业版（包周期） - 4：云模式 企业版（包周期） - 7：云模式 入门版（包周期） - 22：云模式（按需计费）
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
    * @param int|null $type **参数解释：** 云模式套餐类型 **取值范围：** - -2：冻结 - -1：无 - 2：云模式 标准版（包周期） - 3：云模式 专业版（包周期） - 4：云模式 企业版（包周期） - 7：云模式 入门版（包周期） - 22：云模式（按需计费）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 云模式套餐名称 **取值范围：** - None：无 - Basic：云模式 入门版（包周期） - Professional：云模式 标准版（包周期） - Enterprise：云模式 专业版（包周期） - Ultimate: 云模式 企业版（包周期） - cloud.waf.postpaid：云模式（按需计费）
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 云模式套餐名称 **取值范围：** - None：无 - Basic：云模式 入门版（包周期） - Professional：云模式 标准版（包周期） - Enterprise：云模式 专业版（包周期） - Ultimate: 云模式 企业版（包周期） - cloud.waf.postpaid：云模式（按需计费）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets host
    *  **参数解释：** 云模式支持的域名配额相关信息 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param object|null $host **参数解释：** 云模式支持的域名配额相关信息 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets premiumType
    *  **参数解释：** 独享套餐类型 **取值范围：** - -2：冻结 - -1：无 - 12：独享模式 版本规格为WI-100 - 13：独享模式 版本规格为WI-500
    *
    * @return int|null
    */
    public function getPremiumType()
    {
        return $this->container['premiumType'];
    }

    /**
    * Sets premiumType
    *
    * @param int|null $premiumType **参数解释：** 独享套餐类型 **取值范围：** - -2：冻结 - -1：无 - 12：独享模式 版本规格为WI-100 - 13：独享模式 版本规格为WI-500
    *
    * @return $this
    */
    public function setPremiumType($premiumType)
    {
        $this->container['premiumType'] = $premiumType;
        return $this;
    }

    /**
    * Gets premiumName
    *  **参数解释：** 独享模式套餐名称 **取值范围：** - None：无 - Instance.professional：独享模式 版本规格为WI-100 - Instance.enterprise：独享模式 版本规格为WI-500
    *
    * @return string|null
    */
    public function getPremiumName()
    {
        return $this->container['premiumName'];
    }

    /**
    * Sets premiumName
    *
    * @param string|null $premiumName **参数解释：** 独享模式套餐名称 **取值范围：** - None：无 - Instance.professional：独享模式 版本规格为WI-100 - Instance.enterprise：独享模式 版本规格为WI-500
    *
    * @return $this
    */
    public function setPremiumName($premiumName)
    {
        $this->container['premiumName'] = $premiumName;
        return $this;
    }

    /**
    * Gets premiumHost
    *  **参数解释：** 独享支持的域名配额相关信息 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getPremiumHost()
    {
        return $this->container['premiumHost'];
    }

    /**
    * Sets premiumHost
    *
    * @param object|null $premiumHost **参数解释：** 独享支持的域名配额相关信息 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPremiumHost($premiumHost)
    {
        $this->container['premiumHost'] = $premiumHost;
        return $this;
    }

    /**
    * Gets options
    *  **参数解释：** 支持的策略相关信息 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param object|null $options **参数解释：** 支持的策略相关信息 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets rule
    *  **参数解释：** 支持的规则配额相关信息 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param object|null $rule **参数解释：** 支持的规则配额相关信息 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets upgrade
    *  **参数解释：** 不同版本支持的规则信息 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getUpgrade()
    {
        return $this->container['upgrade'];
    }

    /**
    * Sets upgrade
    *
    * @param object|null $upgrade **参数解释：** 不同版本支持的规则信息 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setUpgrade($upgrade)
    {
        $this->container['upgrade'] = $upgrade;
        return $this;
    }

    /**
    * Gets feature
    *  **参数解释：** 支持的特性 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param object|null $feature **参数解释：** 支持的特性 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
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

