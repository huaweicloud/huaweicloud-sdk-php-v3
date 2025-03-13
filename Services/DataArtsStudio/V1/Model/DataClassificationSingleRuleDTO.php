<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataClassificationSingleRuleDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataClassificationSingleRuleDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleCode  规则序号,大写字母
    * algorithmType  算法类型, REGEX,REGEX_INSENSITIVE,GROOVY,LENGTH_EQ,LENGTH_GT,LENGTH_LT,BUILTIN
    * matchType  匹配类型, CONTENT,COLUMN,COMMIT,TABLE_NAME,TABLE_COMMENT,DATABASE_NAME
    * expression  expression
    * builtinRuleId  内置规则ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleCode' => 'string',
            'algorithmType' => 'string',
            'matchType' => 'string',
            'expression' => 'string',
            'builtinRuleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleCode  规则序号,大写字母
    * algorithmType  算法类型, REGEX,REGEX_INSENSITIVE,GROOVY,LENGTH_EQ,LENGTH_GT,LENGTH_LT,BUILTIN
    * matchType  匹配类型, CONTENT,COLUMN,COMMIT,TABLE_NAME,TABLE_COMMENT,DATABASE_NAME
    * expression  expression
    * builtinRuleId  内置规则ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleCode' => null,
        'algorithmType' => null,
        'matchType' => null,
        'expression' => null,
        'builtinRuleId' => null
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
    * ruleCode  规则序号,大写字母
    * algorithmType  算法类型, REGEX,REGEX_INSENSITIVE,GROOVY,LENGTH_EQ,LENGTH_GT,LENGTH_LT,BUILTIN
    * matchType  匹配类型, CONTENT,COLUMN,COMMIT,TABLE_NAME,TABLE_COMMENT,DATABASE_NAME
    * expression  expression
    * builtinRuleId  内置规则ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleCode' => 'rule_code',
            'algorithmType' => 'algorithm_type',
            'matchType' => 'match_type',
            'expression' => 'expression',
            'builtinRuleId' => 'builtin_rule_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleCode  规则序号,大写字母
    * algorithmType  算法类型, REGEX,REGEX_INSENSITIVE,GROOVY,LENGTH_EQ,LENGTH_GT,LENGTH_LT,BUILTIN
    * matchType  匹配类型, CONTENT,COLUMN,COMMIT,TABLE_NAME,TABLE_COMMENT,DATABASE_NAME
    * expression  expression
    * builtinRuleId  内置规则ID
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleCode' => 'setRuleCode',
            'algorithmType' => 'setAlgorithmType',
            'matchType' => 'setMatchType',
            'expression' => 'setExpression',
            'builtinRuleId' => 'setBuiltinRuleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleCode  规则序号,大写字母
    * algorithmType  算法类型, REGEX,REGEX_INSENSITIVE,GROOVY,LENGTH_EQ,LENGTH_GT,LENGTH_LT,BUILTIN
    * matchType  匹配类型, CONTENT,COLUMN,COMMIT,TABLE_NAME,TABLE_COMMENT,DATABASE_NAME
    * expression  expression
    * builtinRuleId  内置规则ID
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleCode' => 'getRuleCode',
            'algorithmType' => 'getAlgorithmType',
            'matchType' => 'getMatchType',
            'expression' => 'getExpression',
            'builtinRuleId' => 'getBuiltinRuleId'
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
    const ALGORITHM_TYPE_REGEX = 'REGEX';
    const ALGORITHM_TYPE_REGEX_INSENSITIVE = 'REGEX_INSENSITIVE';
    const ALGORITHM_TYPE_GROOVY = 'GROOVY';
    const ALGORITHM_TYPE_LENGTH_EQ = 'LENGTH_EQ';
    const ALGORITHM_TYPE_LENGTH_GT = 'LENGTH_GT';
    const ALGORITHM_TYPE_LENGTH_LT = 'LENGTH_LT';
    const ALGORITHM_TYPE_BUILTIN = 'BUILTIN';
    const MATCH_TYPE_CONTENT = 'CONTENT';
    const MATCH_TYPE_COLUMN = 'COLUMN';
    const MATCH_TYPE_COMMIT = 'COMMIT';
    const MATCH_TYPE_TABLE_NAME = 'TABLE_NAME';
    const MATCH_TYPE_TABLE_COMMENT = 'TABLE_COMMENT';
    const MATCH_TYPE_DATABASE_NAME = 'DATABASE_NAME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlgorithmTypeAllowableValues()
    {
        return [
            self::ALGORITHM_TYPE_REGEX,
            self::ALGORITHM_TYPE_REGEX_INSENSITIVE,
            self::ALGORITHM_TYPE_GROOVY,
            self::ALGORITHM_TYPE_LENGTH_EQ,
            self::ALGORITHM_TYPE_LENGTH_GT,
            self::ALGORITHM_TYPE_LENGTH_LT,
            self::ALGORITHM_TYPE_BUILTIN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMatchTypeAllowableValues()
    {
        return [
            self::MATCH_TYPE_CONTENT,
            self::MATCH_TYPE_COLUMN,
            self::MATCH_TYPE_COMMIT,
            self::MATCH_TYPE_TABLE_NAME,
            self::MATCH_TYPE_TABLE_COMMENT,
            self::MATCH_TYPE_DATABASE_NAME,
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
        $this->container['ruleCode'] = isset($data['ruleCode']) ? $data['ruleCode'] : null;
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['builtinRuleId'] = isset($data['builtinRuleId']) ? $data['builtinRuleId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleCode'] === null) {
            $invalidProperties[] = "'ruleCode' can't be null";
        }
            if ((mb_strlen($this->container['ruleCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'ruleCode', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['ruleCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleCode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['algorithmType'] === null) {
            $invalidProperties[] = "'algorithmType' can't be null";
        }
            $allowedValues = $this->getAlgorithmTypeAllowableValues();
                if (!is_null($this->container['algorithmType']) && !in_array($this->container['algorithmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'algorithmType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['algorithmType']) > 128)) {
                $invalidProperties[] = "invalid value for 'algorithmType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['algorithmType']) < 1)) {
                $invalidProperties[] = "invalid value for 'algorithmType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['matchType'] === null) {
            $invalidProperties[] = "'matchType' can't be null";
        }
            $allowedValues = $this->getMatchTypeAllowableValues();
                if (!is_null($this->container['matchType']) && !in_array($this->container['matchType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'matchType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['matchType']) > 128)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['matchType']) < 1)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['expression'] === null) {
            $invalidProperties[] = "'expression' can't be null";
        }
            if ((mb_strlen($this->container['expression']) > 65535)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['expression']) < 1)) {
                $invalidProperties[] = "invalid value for 'expression', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) > 128)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['builtinRuleId']) && (mb_strlen($this->container['builtinRuleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'builtinRuleId', the character length must be bigger than or equal to 1.";
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
    * Gets ruleCode
    *  规则序号,大写字母
    *
    * @return string
    */
    public function getRuleCode()
    {
        return $this->container['ruleCode'];
    }

    /**
    * Sets ruleCode
    *
    * @param string $ruleCode 规则序号,大写字母
    *
    * @return $this
    */
    public function setRuleCode($ruleCode)
    {
        $this->container['ruleCode'] = $ruleCode;
        return $this;
    }

    /**
    * Gets algorithmType
    *  算法类型, REGEX,REGEX_INSENSITIVE,GROOVY,LENGTH_EQ,LENGTH_GT,LENGTH_LT,BUILTIN
    *
    * @return string
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param string $algorithmType 算法类型, REGEX,REGEX_INSENSITIVE,GROOVY,LENGTH_EQ,LENGTH_GT,LENGTH_LT,BUILTIN
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets matchType
    *  匹配类型, CONTENT,COLUMN,COMMIT,TABLE_NAME,TABLE_COMMENT,DATABASE_NAME
    *
    * @return string
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string $matchType 匹配类型, CONTENT,COLUMN,COMMIT,TABLE_NAME,TABLE_COMMENT,DATABASE_NAME
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets expression
    *  expression
    *
    * @return string
    */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
    * Sets expression
    *
    * @param string $expression expression
    *
    * @return $this
    */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;
        return $this;
    }

    /**
    * Gets builtinRuleId
    *  内置规则ID
    *
    * @return string|null
    */
    public function getBuiltinRuleId()
    {
        return $this->container['builtinRuleId'];
    }

    /**
    * Sets builtinRuleId
    *
    * @param string|null $builtinRuleId 内置规则ID
    *
    * @return $this
    */
    public function setBuiltinRuleId($builtinRuleId)
    {
        $this->container['builtinRuleId'] = $builtinRuleId;
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

