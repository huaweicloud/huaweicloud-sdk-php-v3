<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRuleFixParamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRuleFixParamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleParamId  **参数解释**: 检查项参数ID **取值范围**: 不涉及
    * ruleDesc  **参数解释**: 检查项参数描述 **取值范围**: 不涉及
    * defaultValue  **参数解释**: 检查项参数默认值 **取值范围**: 不涉及
    * rangeMin  **参数解释**: 检查项参数可取最小值 **取值范围**: 不涉及
    * rangeMax  **参数解释**: 检查项参数可取最大值 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleParamId' => 'int',
            'ruleDesc' => 'string',
            'defaultValue' => 'int',
            'rangeMin' => 'int',
            'rangeMax' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleParamId  **参数解释**: 检查项参数ID **取值范围**: 不涉及
    * ruleDesc  **参数解释**: 检查项参数描述 **取值范围**: 不涉及
    * defaultValue  **参数解释**: 检查项参数默认值 **取值范围**: 不涉及
    * rangeMin  **参数解释**: 检查项参数可取最小值 **取值范围**: 不涉及
    * rangeMax  **参数解释**: 检查项参数可取最大值 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleParamId' => 'int32',
        'ruleDesc' => null,
        'defaultValue' => 'int32',
        'rangeMin' => 'int32',
        'rangeMax' => 'int32'
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
    * ruleParamId  **参数解释**: 检查项参数ID **取值范围**: 不涉及
    * ruleDesc  **参数解释**: 检查项参数描述 **取值范围**: 不涉及
    * defaultValue  **参数解释**: 检查项参数默认值 **取值范围**: 不涉及
    * rangeMin  **参数解释**: 检查项参数可取最小值 **取值范围**: 不涉及
    * rangeMax  **参数解释**: 检查项参数可取最大值 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleParamId' => 'rule_param_id',
            'ruleDesc' => 'rule_desc',
            'defaultValue' => 'default_value',
            'rangeMin' => 'range_min',
            'rangeMax' => 'range_max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleParamId  **参数解释**: 检查项参数ID **取值范围**: 不涉及
    * ruleDesc  **参数解释**: 检查项参数描述 **取值范围**: 不涉及
    * defaultValue  **参数解释**: 检查项参数默认值 **取值范围**: 不涉及
    * rangeMin  **参数解释**: 检查项参数可取最小值 **取值范围**: 不涉及
    * rangeMax  **参数解释**: 检查项参数可取最大值 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleParamId' => 'setRuleParamId',
            'ruleDesc' => 'setRuleDesc',
            'defaultValue' => 'setDefaultValue',
            'rangeMin' => 'setRangeMin',
            'rangeMax' => 'setRangeMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleParamId  **参数解释**: 检查项参数ID **取值范围**: 不涉及
    * ruleDesc  **参数解释**: 检查项参数描述 **取值范围**: 不涉及
    * defaultValue  **参数解释**: 检查项参数默认值 **取值范围**: 不涉及
    * rangeMin  **参数解释**: 检查项参数可取最小值 **取值范围**: 不涉及
    * rangeMax  **参数解释**: 检查项参数可取最大值 **取值范围**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleParamId' => 'getRuleParamId',
            'ruleDesc' => 'getRuleDesc',
            'defaultValue' => 'getDefaultValue',
            'rangeMin' => 'getRangeMin',
            'rangeMax' => 'getRangeMax'
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
        $this->container['ruleParamId'] = isset($data['ruleParamId']) ? $data['ruleParamId'] : null;
        $this->container['ruleDesc'] = isset($data['ruleDesc']) ? $data['ruleDesc'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['rangeMin'] = isset($data['rangeMin']) ? $data['rangeMin'] : null;
        $this->container['rangeMax'] = isset($data['rangeMax']) ? $data['rangeMax'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleParamId']) && ($this->container['ruleParamId'] > 10)) {
                $invalidProperties[] = "invalid value for 'ruleParamId', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['ruleParamId']) && ($this->container['ruleParamId'] < 0)) {
                $invalidProperties[] = "invalid value for 'ruleParamId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleDesc']) && (mb_strlen($this->container['ruleDesc']) > 256)) {
                $invalidProperties[] = "invalid value for 'ruleDesc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ruleDesc']) && (mb_strlen($this->container['ruleDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleDesc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['defaultValue']) && ($this->container['defaultValue'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'defaultValue', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['defaultValue']) && ($this->container['defaultValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'defaultValue', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rangeMin']) && ($this->container['rangeMin'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'rangeMin', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['rangeMin']) && ($this->container['rangeMin'] < 0)) {
                $invalidProperties[] = "invalid value for 'rangeMin', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rangeMax']) && ($this->container['rangeMax'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'rangeMax', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['rangeMax']) && ($this->container['rangeMax'] < 0)) {
                $invalidProperties[] = "invalid value for 'rangeMax', must be bigger than or equal to 0.";
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
    * Gets ruleParamId
    *  **参数解释**: 检查项参数ID **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getRuleParamId()
    {
        return $this->container['ruleParamId'];
    }

    /**
    * Sets ruleParamId
    *
    * @param int|null $ruleParamId **参数解释**: 检查项参数ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setRuleParamId($ruleParamId)
    {
        $this->container['ruleParamId'] = $ruleParamId;
        return $this;
    }

    /**
    * Gets ruleDesc
    *  **参数解释**: 检查项参数描述 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getRuleDesc()
    {
        return $this->container['ruleDesc'];
    }

    /**
    * Sets ruleDesc
    *
    * @param string|null $ruleDesc **参数解释**: 检查项参数描述 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setRuleDesc($ruleDesc)
    {
        $this->container['ruleDesc'] = $ruleDesc;
        return $this;
    }

    /**
    * Gets defaultValue
    *  **参数解释**: 检查项参数默认值 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param int|null $defaultValue **参数解释**: 检查项参数默认值 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets rangeMin
    *  **参数解释**: 检查项参数可取最小值 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getRangeMin()
    {
        return $this->container['rangeMin'];
    }

    /**
    * Sets rangeMin
    *
    * @param int|null $rangeMin **参数解释**: 检查项参数可取最小值 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setRangeMin($rangeMin)
    {
        $this->container['rangeMin'] = $rangeMin;
        return $this;
    }

    /**
    * Gets rangeMax
    *  **参数解释**: 检查项参数可取最大值 **取值范围**: 不涉及
    *
    * @return int|null
    */
    public function getRangeMax()
    {
        return $this->container['rangeMax'];
    }

    /**
    * Sets rangeMax
    *
    * @param int|null $rangeMax **参数解释**: 检查项参数可取最大值 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setRangeMax($rangeMax)
    {
        $this->container['rangeMax'] = $rangeMax;
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

