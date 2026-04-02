<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPolicyProtectRulesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPolicyProtectRulesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  策略总数
    * items  **参数解释：** 单个策略下特定类型防护规则列表 **约束限制：** 具体类型取决于参数rule_type **取值范围：** 具体返回值参考接口： - cc CC防护  ListCcPolicyRules - custom 精准防护 ListCustomPolicyRules - whiteblackip 黑白名单 ListWhiteblackipPolicyRules - geoip 地理位置防护 ListGeoIpPolicyRules - ip-reputation 威胁情报 ListIpReputationPolicyRules - antitamper 防篡改 ListAntiTamperPolicyRules - antileakage 防敏感信息泄露 ListAntileakagePolicyRules - ignore 全局白名单(原误报屏蔽) ListIgnorePolicyRules - privacy 隐私屏蔽 ListPrivacyPolicyRules **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'items' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  策略总数
    * items  **参数解释：** 单个策略下特定类型防护规则列表 **约束限制：** 具体类型取决于参数rule_type **取值范围：** 具体返回值参考接口： - cc CC防护  ListCcPolicyRules - custom 精准防护 ListCustomPolicyRules - whiteblackip 黑白名单 ListWhiteblackipPolicyRules - geoip 地理位置防护 ListGeoIpPolicyRules - ip-reputation 威胁情报 ListIpReputationPolicyRules - antitamper 防篡改 ListAntiTamperPolicyRules - antileakage 防敏感信息泄露 ListAntileakagePolicyRules - ignore 全局白名单(原误报屏蔽) ListIgnorePolicyRules - privacy 隐私屏蔽 ListPrivacyPolicyRules **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'items' => null
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
    * total  策略总数
    * items  **参数解释：** 单个策略下特定类型防护规则列表 **约束限制：** 具体类型取决于参数rule_type **取值范围：** 具体返回值参考接口： - cc CC防护  ListCcPolicyRules - custom 精准防护 ListCustomPolicyRules - whiteblackip 黑白名单 ListWhiteblackipPolicyRules - geoip 地理位置防护 ListGeoIpPolicyRules - ip-reputation 威胁情报 ListIpReputationPolicyRules - antitamper 防篡改 ListAntiTamperPolicyRules - antileakage 防敏感信息泄露 ListAntileakagePolicyRules - ignore 全局白名单(原误报屏蔽) ListIgnorePolicyRules - privacy 隐私屏蔽 ListPrivacyPolicyRules **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  策略总数
    * items  **参数解释：** 单个策略下特定类型防护规则列表 **约束限制：** 具体类型取决于参数rule_type **取值范围：** 具体返回值参考接口： - cc CC防护  ListCcPolicyRules - custom 精准防护 ListCustomPolicyRules - whiteblackip 黑白名单 ListWhiteblackipPolicyRules - geoip 地理位置防护 ListGeoIpPolicyRules - ip-reputation 威胁情报 ListIpReputationPolicyRules - antitamper 防篡改 ListAntiTamperPolicyRules - antileakage 防敏感信息泄露 ListAntileakagePolicyRules - ignore 全局白名单(原误报屏蔽) ListIgnorePolicyRules - privacy 隐私屏蔽 ListPrivacyPolicyRules **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  策略总数
    * items  **参数解释：** 单个策略下特定类型防护规则列表 **约束限制：** 具体类型取决于参数rule_type **取值范围：** 具体返回值参考接口： - cc CC防护  ListCcPolicyRules - custom 精准防护 ListCustomPolicyRules - whiteblackip 黑白名单 ListWhiteblackipPolicyRules - geoip 地理位置防护 ListGeoIpPolicyRules - ip-reputation 威胁情报 ListIpReputationPolicyRules - antitamper 防篡改 ListAntiTamperPolicyRules - antileakage 防敏感信息泄露 ListAntileakagePolicyRules - ignore 全局白名单(原误报屏蔽) ListIgnorePolicyRules - privacy 隐私屏蔽 ListPrivacyPolicyRules **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'items' => 'getItems'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    * Gets total
    *  策略总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 策略总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets items
    *  **参数解释：** 单个策略下特定类型防护规则列表 **约束限制：** 具体类型取决于参数rule_type **取值范围：** 具体返回值参考接口： - cc CC防护  ListCcPolicyRules - custom 精准防护 ListCustomPolicyRules - whiteblackip 黑白名单 ListWhiteblackipPolicyRules - geoip 地理位置防护 ListGeoIpPolicyRules - ip-reputation 威胁情报 ListIpReputationPolicyRules - antitamper 防篡改 ListAntiTamperPolicyRules - antileakage 防敏感信息泄露 ListAntileakagePolicyRules - ignore 全局白名单(原误报屏蔽) ListIgnorePolicyRules - privacy 隐私屏蔽 ListPrivacyPolicyRules **默认取值：** 不涉及
    *
    * @return object[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param object[]|null $items **参数解释：** 单个策略下特定类型防护规则列表 **约束限制：** 具体类型取决于参数rule_type **取值范围：** 具体返回值参考接口： - cc CC防护  ListCcPolicyRules - custom 精准防护 ListCustomPolicyRules - whiteblackip 黑白名单 ListWhiteblackipPolicyRules - geoip 地理位置防护 ListGeoIpPolicyRules - ip-reputation 威胁情报 ListIpReputationPolicyRules - antitamper 防篡改 ListAntiTamperPolicyRules - antileakage 防敏感信息泄露 ListAntileakagePolicyRules - ignore 全局白名单(原误报屏蔽) ListIgnorePolicyRules - privacy 隐私屏蔽 ListPrivacyPolicyRules **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

