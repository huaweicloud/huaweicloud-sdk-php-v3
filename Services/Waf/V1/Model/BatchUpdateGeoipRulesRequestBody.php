<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateGeoipRulesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateGeoipRulesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyRuleIds  **参数解释：** 策略和规则id数组，关联防护策略与对应的规则集合 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，控制地理位置访问控制规则的启用/禁用（如1表示启用，0表示禁用） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，标识地理位置访问控制规则的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * geoip  **参数解释：** 地理位置，指定需要控制的地域（如省份、城市编码，多个用|分隔） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * white  **参数解释：** 放行或者拦截，1表示放行指定地理位置，2表示拦截指定地理位置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyRuleIds' => '\HuaweiCloud\SDK\Waf\V1\Model\PolicyRuleIdRequestBodyPolicyRuleIds[]',
            'status' => 'int',
            'name' => 'string',
            'geoip' => 'string',
            'white' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyRuleIds  **参数解释：** 策略和规则id数组，关联防护策略与对应的规则集合 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，控制地理位置访问控制规则的启用/禁用（如1表示启用，0表示禁用） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，标识地理位置访问控制规则的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * geoip  **参数解释：** 地理位置，指定需要控制的地域（如省份、城市编码，多个用|分隔） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * white  **参数解释：** 放行或者拦截，1表示放行指定地理位置，2表示拦截指定地理位置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyRuleIds' => null,
        'status' => null,
        'name' => null,
        'geoip' => null,
        'white' => null
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
    * policyRuleIds  **参数解释：** 策略和规则id数组，关联防护策略与对应的规则集合 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，控制地理位置访问控制规则的启用/禁用（如1表示启用，0表示禁用） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，标识地理位置访问控制规则的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * geoip  **参数解释：** 地理位置，指定需要控制的地域（如省份、城市编码，多个用|分隔） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * white  **参数解释：** 放行或者拦截，1表示放行指定地理位置，2表示拦截指定地理位置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyRuleIds' => 'policy_rule_ids',
            'status' => 'status',
            'name' => 'name',
            'geoip' => 'geoip',
            'white' => 'white'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyRuleIds  **参数解释：** 策略和规则id数组，关联防护策略与对应的规则集合 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，控制地理位置访问控制规则的启用/禁用（如1表示启用，0表示禁用） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，标识地理位置访问控制规则的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * geoip  **参数解释：** 地理位置，指定需要控制的地域（如省份、城市编码，多个用|分隔） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * white  **参数解释：** 放行或者拦截，1表示放行指定地理位置，2表示拦截指定地理位置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'policyRuleIds' => 'setPolicyRuleIds',
            'status' => 'setStatus',
            'name' => 'setName',
            'geoip' => 'setGeoip',
            'white' => 'setWhite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyRuleIds  **参数解释：** 策略和规则id数组，关联防护策略与对应的规则集合 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * status  **参数解释：** 规则状态，控制地理位置访问控制规则的启用/禁用（如1表示启用，0表示禁用） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  **参数解释：** 规则名称，标识地理位置访问控制规则的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * geoip  **参数解释：** 地理位置，指定需要控制的地域（如省份、城市编码，多个用|分隔） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * white  **参数解释：** 放行或者拦截，1表示放行指定地理位置，2表示拦截指定地理位置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'policyRuleIds' => 'getPolicyRuleIds',
            'status' => 'getStatus',
            'name' => 'getName',
            'geoip' => 'getGeoip',
            'white' => 'getWhite'
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
        $this->container['policyRuleIds'] = isset($data['policyRuleIds']) ? $data['policyRuleIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['geoip'] = isset($data['geoip']) ? $data['geoip'] : null;
        $this->container['white'] = isset($data['white']) ? $data['white'] : null;
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
    * Gets policyRuleIds
    *  **参数解释：** 策略和规则id数组，关联防护策略与对应的规则集合 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\PolicyRuleIdRequestBodyPolicyRuleIds[]|null
    */
    public function getPolicyRuleIds()
    {
        return $this->container['policyRuleIds'];
    }

    /**
    * Sets policyRuleIds
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\PolicyRuleIdRequestBodyPolicyRuleIds[]|null $policyRuleIds **参数解释：** 策略和规则id数组，关联防护策略与对应的规则集合 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPolicyRuleIds($policyRuleIds)
    {
        $this->container['policyRuleIds'] = $policyRuleIds;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 规则状态，控制地理位置访问控制规则的启用/禁用（如1表示启用，0表示禁用） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 规则状态，控制地理位置访问控制规则的启用/禁用（如1表示启用，0表示禁用） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 规则名称，标识地理位置访问控制规则的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $name **参数解释：** 规则名称，标识地理位置访问控制规则的名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets geoip
    *  **参数解释：** 地理位置，指定需要控制的地域（如省份、城市编码，多个用|分隔） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getGeoip()
    {
        return $this->container['geoip'];
    }

    /**
    * Sets geoip
    *
    * @param string|null $geoip **参数解释：** 地理位置，指定需要控制的地域（如省份、城市编码，多个用|分隔） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setGeoip($geoip)
    {
        $this->container['geoip'] = $geoip;
        return $this;
    }

    /**
    * Gets white
    *  **参数解释：** 放行或者拦截，1表示放行指定地理位置，2表示拦截指定地理位置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getWhite()
    {
        return $this->container['white'];
    }

    /**
    * Sets white
    *
    * @param int|null $white **参数解释：** 放行或者拦截，1表示放行指定地理位置，2表示拦截指定地理位置 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setWhite($white)
    {
        $this->container['white'] = $white;
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

