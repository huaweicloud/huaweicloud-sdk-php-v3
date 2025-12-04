<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePolicyRuleStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePolicyRuleStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * ruletype  **参数解释：** 策略类型 **约束限制：** 不涉及 **取值范围：**  - custom：精准防护   - cc: cc攻击   - whiteblackip: 黑白名单  - geoip: 地理位置  - privacy: 私屏蔽防护  - antitamper: 防篡改规则  - ignore: 全局白名单  **默认取值：** 不涉及
    * ruleId  规则id，根据不同的规则类型（ruletype）调用规则列表接口获取规则id，例如黑白名单（whiteblackip）规则id，您可以通过调用查询黑白名单规则列表（ListWhiteblackipRule）获取规则id
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'enterpriseProjectId' => 'string',
            'policyId' => 'string',
            'ruletype' => 'string',
            'ruleId' => 'string',
            'body' => '\HuaweiCloud\SDK\Waf\V1\Model\UpdatePolicyRuleStatusRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * ruletype  **参数解释：** 策略类型 **约束限制：** 不涉及 **取值范围：**  - custom：精准防护   - cc: cc攻击   - whiteblackip: 黑白名单  - geoip: 地理位置  - privacy: 私屏蔽防护  - antitamper: 防篡改规则  - ignore: 全局白名单  **默认取值：** 不涉及
    * ruleId  规则id，根据不同的规则类型（ruletype）调用规则列表接口获取规则id，例如黑白名单（whiteblackip）规则id，您可以通过调用查询黑白名单规则列表（ListWhiteblackipRule）获取规则id
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'enterpriseProjectId' => null,
        'policyId' => null,
        'ruletype' => null,
        'ruleId' => null,
        'body' => null
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
    * contentType  内容类型
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * ruletype  **参数解释：** 策略类型 **约束限制：** 不涉及 **取值范围：**  - custom：精准防护   - cc: cc攻击   - whiteblackip: 黑白名单  - geoip: 地理位置  - privacy: 私屏蔽防护  - antitamper: 防篡改规则  - ignore: 全局白名单  **默认取值：** 不涉及
    * ruleId  规则id，根据不同的规则类型（ruletype）调用规则列表接口获取规则id，例如黑白名单（whiteblackip）规则id，您可以通过调用查询黑白名单规则列表（ListWhiteblackipRule）获取规则id
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'policyId' => 'policy_id',
            'ruletype' => 'ruletype',
            'ruleId' => 'rule_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  内容类型
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * ruletype  **参数解释：** 策略类型 **约束限制：** 不涉及 **取值范围：**  - custom：精准防护   - cc: cc攻击   - whiteblackip: 黑白名单  - geoip: 地理位置  - privacy: 私屏蔽防护  - antitamper: 防篡改规则  - ignore: 全局白名单  **默认取值：** 不涉及
    * ruleId  规则id，根据不同的规则类型（ruletype）调用规则列表接口获取规则id，例如黑白名单（whiteblackip）规则id，您可以通过调用查询黑白名单规则列表（ListWhiteblackipRule）获取规则id
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'policyId' => 'setPolicyId',
            'ruletype' => 'setRuletype',
            'ruleId' => 'setRuleId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  内容类型
    * enterpriseProjectId  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    * policyId  策略id（策略id从查询防护策略列表接口获取）
    * ruletype  **参数解释：** 策略类型 **约束限制：** 不涉及 **取值范围：**  - custom：精准防护   - cc: cc攻击   - whiteblackip: 黑白名单  - geoip: 地理位置  - privacy: 私屏蔽防护  - antitamper: 防篡改规则  - ignore: 全局白名单  **默认取值：** 不涉及
    * ruleId  规则id，根据不同的规则类型（ruletype）调用规则列表接口获取规则id，例如黑白名单（whiteblackip）规则id，您可以通过调用查询黑白名单规则列表（ListWhiteblackipRule）获取规则id
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'policyId' => 'getPolicyId',
            'ruletype' => 'getRuletype',
            'ruleId' => 'getRuleId',
            'body' => 'getBody'
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
    const RULETYPE_WHITEBLACKIP = 'whiteblackip';
    const RULETYPE_GEOIP = 'geoip';
    const RULETYPE_PRIVACY = 'privacy';
    const RULETYPE_ANTITAMPER = 'antitamper';
    const RULETYPE_CUSTOM = 'custom';
    const RULETYPE_IGNORE = 'ignore';
    const RULETYPE_CC = 'cc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuletypeAllowableValues()
    {
        return [
            self::RULETYPE_WHITEBLACKIP,
            self::RULETYPE_GEOIP,
            self::RULETYPE_PRIVACY,
            self::RULETYPE_ANTITAMPER,
            self::RULETYPE_CUSTOM,
            self::RULETYPE_IGNORE,
            self::RULETYPE_CC,
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['ruletype'] = isset($data['ruletype']) ? $data['ruletype'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
        if ($this->container['ruletype'] === null) {
            $invalidProperties[] = "'ruletype' can't be null";
        }
            $allowedValues = $this->getRuletypeAllowableValues();
                if (!is_null($this->container['ruletype']) && !in_array($this->container['ruletype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruletype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ruleId'] === null) {
            $invalidProperties[] = "'ruleId' can't be null";
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
    * Gets contentType
    *  内容类型
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType 内容类型
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
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
    * @param string|null $enterpriseProjectId **参数解释：** 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目ID。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。 **约束限制：** 不涉及 **取值范围：**  - 0：代表default企业项目  - all_granted_eps：代表所有企业项目  - 其它企业项目ID：长度为36个字符  **默认取值：** 0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets policyId
    *  策略id（策略id从查询防护策略列表接口获取）
    *
    * @return string
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string $policyId 策略id（策略id从查询防护策略列表接口获取）
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets ruletype
    *  **参数解释：** 策略类型 **约束限制：** 不涉及 **取值范围：**  - custom：精准防护   - cc: cc攻击   - whiteblackip: 黑白名单  - geoip: 地理位置  - privacy: 私屏蔽防护  - antitamper: 防篡改规则  - ignore: 全局白名单  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getRuletype()
    {
        return $this->container['ruletype'];
    }

    /**
    * Sets ruletype
    *
    * @param string $ruletype **参数解释：** 策略类型 **约束限制：** 不涉及 **取值范围：**  - custom：精准防护   - cc: cc攻击   - whiteblackip: 黑白名单  - geoip: 地理位置  - privacy: 私屏蔽防护  - antitamper: 防篡改规则  - ignore: 全局白名单  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRuletype($ruletype)
    {
        $this->container['ruletype'] = $ruletype;
        return $this;
    }

    /**
    * Gets ruleId
    *  规则id，根据不同的规则类型（ruletype）调用规则列表接口获取规则id，例如黑白名单（whiteblackip）规则id，您可以通过调用查询黑白名单规则列表（ListWhiteblackipRule）获取规则id
    *
    * @return string
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string $ruleId 规则id，根据不同的规则类型（ruletype）调用规则列表接口获取规则id，例如黑白名单（whiteblackip）规则id，您可以通过调用查询黑白名单规则列表（ListWhiteblackipRule）获取规则id
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\UpdatePolicyRuleStatusRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\UpdatePolicyRuleStatusRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

