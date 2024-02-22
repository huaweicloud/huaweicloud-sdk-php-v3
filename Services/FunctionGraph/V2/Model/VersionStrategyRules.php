<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionStrategyRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionStrategyRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleType  参数类型。
    * param  规则参数名, 只支持大小写字母，数字，下划线，中划线。
    * op  规则匹配操作符，目前仅需支持 = 或者in。
    * value  规则值，如果op为in，则为逗号分隔的多值字符串
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleType' => 'string',
            'param' => 'string',
            'op' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleType  参数类型。
    * param  规则参数名, 只支持大小写字母，数字，下划线，中划线。
    * op  规则匹配操作符，目前仅需支持 = 或者in。
    * value  规则值，如果op为in，则为逗号分隔的多值字符串
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleType' => null,
        'param' => null,
        'op' => null,
        'value' => null
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
    * ruleType  参数类型。
    * param  规则参数名, 只支持大小写字母，数字，下划线，中划线。
    * op  规则匹配操作符，目前仅需支持 = 或者in。
    * value  规则值，如果op为in，则为逗号分隔的多值字符串
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleType' => 'rule_type',
            'param' => 'param',
            'op' => 'op',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleType  参数类型。
    * param  规则参数名, 只支持大小写字母，数字，下划线，中划线。
    * op  规则匹配操作符，目前仅需支持 = 或者in。
    * value  规则值，如果op为in，则为逗号分隔的多值字符串
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleType' => 'setRuleType',
            'param' => 'setParam',
            'op' => 'setOp',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleType  参数类型。
    * param  规则参数名, 只支持大小写字母，数字，下划线，中划线。
    * op  规则匹配操作符，目前仅需支持 = 或者in。
    * value  规则值，如果op为in，则为逗号分隔的多值字符串
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleType' => 'getRuleType',
            'param' => 'getParam',
            'op' => 'getOp',
            'value' => 'getValue'
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
    const RULE_TYPE_HEADER = 'header';
    const RULE_TYPE_COOKIE = 'cookie';
    const OP_IN = 'in';
    const OP_EQUAL = '=';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuleTypeAllowableValues()
    {
        return [
            self::RULE_TYPE_HEADER,
            self::RULE_TYPE_COOKIE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOpAllowableValues()
    {
        return [
            self::OP_IN,
            self::OP_EQUAL,
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
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
        $this->container['op'] = isset($data['op']) ? $data['op'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRuleTypeAllowableValues();
                if (!is_null($this->container['ruleType']) && !in_array($this->container['ruleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOpAllowableValues();
                if (!is_null($this->container['op']) && !in_array($this->container['op'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'op', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets ruleType
    *  参数类型。
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 参数类型。
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets param
    *  规则参数名, 只支持大小写字母，数字，下划线，中划线。
    *
    * @return string|null
    */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
    * Sets param
    *
    * @param string|null $param 规则参数名, 只支持大小写字母，数字，下划线，中划线。
    *
    * @return $this
    */
    public function setParam($param)
    {
        $this->container['param'] = $param;
        return $this;
    }

    /**
    * Gets op
    *  规则匹配操作符，目前仅需支持 = 或者in。
    *
    * @return string|null
    */
    public function getOp()
    {
        return $this->container['op'];
    }

    /**
    * Sets op
    *
    * @param string|null $op 规则匹配操作符，目前仅需支持 = 或者in。
    *
    * @return $this
    */
    public function setOp($op)
    {
        $this->container['op'] = $op;
        return $this;
    }

    /**
    * Gets value
    *  规则值，如果op为in，则为逗号分隔的多值字符串
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
    * @param string|null $value 规则值，如果op为in，则为逗号分隔的多值字符串
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

