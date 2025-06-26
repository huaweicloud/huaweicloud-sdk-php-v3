<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddExceptRuleReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddExceptRuleReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleName  **参数解释**： 异常规则名称。 **约束限制**： 名称不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **约束限制**： 不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleName' => 'string',
            'exceptRules' => '\HuaweiCloud\SDK\Dws\V2\Model\ExceptRule[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleName  **参数解释**： 异常规则名称。 **约束限制**： 名称不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **约束限制**： 不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleName' => null,
        'exceptRules' => null
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
    * ruleName  **参数解释**： 异常规则名称。 **约束限制**： 名称不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **约束限制**： 不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleName' => 'rule_name',
            'exceptRules' => 'except_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleName  **参数解释**： 异常规则名称。 **约束限制**： 名称不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **约束限制**： 不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleName' => 'setRuleName',
            'exceptRules' => 'setExceptRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleName  **参数解释**： 异常规则名称。 **约束限制**： 名称不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * exceptRules  **参数解释**： 异常规则配置项。 **约束限制**： 不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleName' => 'getRuleName',
            'exceptRules' => 'getExceptRules'
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['exceptRules'] = isset($data['exceptRules']) ? $data['exceptRules'] : null;
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
    * Gets ruleName
    *  **参数解释**： 异常规则名称。 **约束限制**： 名称不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName **参数解释**： 异常规则名称。 **约束限制**： 名称不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets exceptRules
    *  **参数解释**： 异常规则配置项。 **约束限制**： 不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ExceptRule[]|null
    */
    public function getExceptRules()
    {
        return $this->container['exceptRules'];
    }

    /**
    * Sets exceptRules
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ExceptRule[]|null $exceptRules **参数解释**： 异常规则配置项。 **约束限制**： 不能为空。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExceptRules($exceptRules)
    {
        $this->container['exceptRules'] = $exceptRules;
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

