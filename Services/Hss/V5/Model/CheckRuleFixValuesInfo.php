<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRuleFixValuesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRuleFixValuesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleParamId  检查项的参数ID
    * fixValue  检查项的参数值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleParamId' => 'int',
            'fixValue' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleParamId  检查项的参数ID
    * fixValue  检查项的参数值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleParamId' => 'int32',
        'fixValue' => 'int32'
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
    * ruleParamId  检查项的参数ID
    * fixValue  检查项的参数值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleParamId' => 'rule_param_id',
            'fixValue' => 'fix_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleParamId  检查项的参数ID
    * fixValue  检查项的参数值
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleParamId' => 'setRuleParamId',
            'fixValue' => 'setFixValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleParamId  检查项的参数ID
    * fixValue  检查项的参数值
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleParamId' => 'getRuleParamId',
            'fixValue' => 'getFixValue'
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
        $this->container['fixValue'] = isset($data['fixValue']) ? $data['fixValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleParamId']) && ($this->container['ruleParamId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ruleParamId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ruleParamId']) && ($this->container['ruleParamId'] < 0)) {
                $invalidProperties[] = "invalid value for 'ruleParamId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fixValue']) && ($this->container['fixValue'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'fixValue', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['fixValue']) && ($this->container['fixValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'fixValue', must be bigger than or equal to 0.";
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
    *  检查项的参数ID
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
    * @param int|null $ruleParamId 检查项的参数ID
    *
    * @return $this
    */
    public function setRuleParamId($ruleParamId)
    {
        $this->container['ruleParamId'] = $ruleParamId;
        return $this;
    }

    /**
    * Gets fixValue
    *  检查项的参数值
    *
    * @return int|null
    */
    public function getFixValue()
    {
        return $this->container['fixValue'];
    }

    /**
    * Sets fixValue
    *
    * @param int|null $fixValue 检查项的参数值
    *
    * @return $this
    */
    public function setFixValue($fixValue)
    {
        $this->container['fixValue'] = $fixValue;
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

