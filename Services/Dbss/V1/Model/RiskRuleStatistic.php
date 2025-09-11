<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RiskRuleStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RiskRuleStatistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  数量
    * ruleName  规则名称
    * ruleNameEnglish  规则英文名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'ruleName' => 'string',
            'ruleNameEnglish' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  数量
    * ruleName  规则名称
    * ruleNameEnglish  规则英文名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int64',
        'ruleName' => null,
        'ruleNameEnglish' => null
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
    * count  数量
    * ruleName  规则名称
    * ruleNameEnglish  规则英文名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'ruleName' => 'rule_name',
            'ruleNameEnglish' => 'rule_name_english'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  数量
    * ruleName  规则名称
    * ruleNameEnglish  规则英文名
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'ruleName' => 'setRuleName',
            'ruleNameEnglish' => 'setRuleNameEnglish'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  数量
    * ruleName  规则名称
    * ruleNameEnglish  规则英文名
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'ruleName' => 'getRuleName',
            'ruleNameEnglish' => 'getRuleNameEnglish'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleNameEnglish'] = isset($data['ruleNameEnglish']) ? $data['ruleNameEnglish'] : null;
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
    * Gets count
    *  数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
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
    * @param string|null $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets ruleNameEnglish
    *  规则英文名
    *
    * @return string|null
    */
    public function getRuleNameEnglish()
    {
        return $this->container['ruleNameEnglish'];
    }

    /**
    * Sets ruleNameEnglish
    *
    * @param string|null $ruleNameEnglish 规则英文名
    *
    * @return $this
    */
    public function setRuleNameEnglish($ruleNameEnglish)
    {
        $this->container['ruleNameEnglish'] = $ruleNameEnglish;
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

