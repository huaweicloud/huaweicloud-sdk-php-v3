<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomAttributesRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomAttributesRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  规则ID
    * value  attribute的问题级别，0致命，1严重，2一般，3提示
    * ruleConfigList  规则阈值详细
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'value' => 'string',
            'ruleConfigList' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  规则ID
    * value  attribute的问题级别，0致命，1严重，2一般，3提示
    * ruleConfigList  规则阈值详细
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'value' => null,
        'ruleConfigList' => null
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
    * ruleId  规则ID
    * value  attribute的问题级别，0致命，1严重，2一般，3提示
    * ruleConfigList  规则阈值详细
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'value' => 'value',
            'ruleConfigList' => 'rule_config_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  规则ID
    * value  attribute的问题级别，0致命，1严重，2一般，3提示
    * ruleConfigList  规则阈值详细
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'value' => 'setValue',
            'ruleConfigList' => 'setRuleConfigList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  规则ID
    * value  attribute的问题级别，0致命，1严重，2一般，3提示
    * ruleConfigList  规则阈值详细
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'value' => 'getValue',
            'ruleConfigList' => 'getRuleConfigList'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['ruleConfigList'] = isset($data['ruleConfigList']) ? $data['ruleConfigList'] : null;
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
    * Gets ruleId
    *  规则ID
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则ID
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets value
    *  attribute的问题级别，0致命，1严重，2一般，3提示
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value attribute的问题级别，0致命，1严重，2一般，3提示
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets ruleConfigList
    *  规则阈值详细
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleConfig[]|null
    */
    public function getRuleConfigList()
    {
        return $this->container['ruleConfigList'];
    }

    /**
    * Sets ruleConfigList
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleConfig[]|null $ruleConfigList 规则阈值详细
    *
    * @return $this
    */
    public function setRuleConfigList($ruleConfigList)
    {
        $this->container['ruleConfigList'] = $ruleConfigList;
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

