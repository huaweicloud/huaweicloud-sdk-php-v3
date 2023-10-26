<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EsMatchInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EsMatchInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldName  数据字段名
    * ruleName  规则名
    * ruleId  规则ID
    * ruleRiskLevel  规则风险等级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldName' => 'string',
            'ruleName' => 'string',
            'ruleId' => 'string',
            'ruleRiskLevel' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldName  数据字段名
    * ruleName  规则名
    * ruleId  规则ID
    * ruleRiskLevel  规则风险等级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldName' => null,
        'ruleName' => null,
        'ruleId' => null,
        'ruleRiskLevel' => 'int32'
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
    * fieldName  数据字段名
    * ruleName  规则名
    * ruleId  规则ID
    * ruleRiskLevel  规则风险等级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldName' => 'field_name',
            'ruleName' => 'rule_name',
            'ruleId' => 'rule_id',
            'ruleRiskLevel' => 'rule_risk_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldName  数据字段名
    * ruleName  规则名
    * ruleId  规则ID
    * ruleRiskLevel  规则风险等级
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldName' => 'setFieldName',
            'ruleName' => 'setRuleName',
            'ruleId' => 'setRuleId',
            'ruleRiskLevel' => 'setRuleRiskLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldName  数据字段名
    * ruleName  规则名
    * ruleId  规则ID
    * ruleRiskLevel  规则风险等级
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldName' => 'getFieldName',
            'ruleName' => 'getRuleName',
            'ruleId' => 'getRuleId',
            'ruleRiskLevel' => 'getRuleRiskLevel'
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
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleRiskLevel'] = isset($data['ruleRiskLevel']) ? $data['ruleRiskLevel'] : null;
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
    * Gets fieldName
    *  数据字段名
    *
    * @return string|null
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string|null $fieldName 数据字段名
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名
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
    * @param string|null $ruleName 规则名
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
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
    * Gets ruleRiskLevel
    *  规则风险等级
    *
    * @return int|null
    */
    public function getRuleRiskLevel()
    {
        return $this->container['ruleRiskLevel'];
    }

    /**
    * Sets ruleRiskLevel
    *
    * @param int|null $ruleRiskLevel 规则风险等级
    *
    * @return $this
    */
    public function setRuleRiskLevel($ruleRiskLevel)
    {
        $this->container['ruleRiskLevel'] = $ruleRiskLevel;
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

