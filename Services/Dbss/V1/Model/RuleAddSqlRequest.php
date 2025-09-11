<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleAddSqlRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleAddSqlRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskLevel  风险等级  - LOW：低  - MEDIUM：中  - HIGH：高 - NO_RISK：无
    * ruleName  规则名称
    * sqlRegex  正则表达式
    * status  状态  - ON：开启  - OFF：关闭
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskLevel' => 'string',
            'ruleName' => 'string',
            'sqlRegex' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskLevel  风险等级  - LOW：低  - MEDIUM：中  - HIGH：高 - NO_RISK：无
    * ruleName  规则名称
    * sqlRegex  正则表达式
    * status  状态  - ON：开启  - OFF：关闭
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskLevel' => null,
        'ruleName' => null,
        'sqlRegex' => null,
        'status' => null
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
    * riskLevel  风险等级  - LOW：低  - MEDIUM：中  - HIGH：高 - NO_RISK：无
    * ruleName  规则名称
    * sqlRegex  正则表达式
    * status  状态  - ON：开启  - OFF：关闭
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskLevel' => 'risk_level',
            'ruleName' => 'rule_name',
            'sqlRegex' => 'sql_regex',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskLevel  风险等级  - LOW：低  - MEDIUM：中  - HIGH：高 - NO_RISK：无
    * ruleName  规则名称
    * sqlRegex  正则表达式
    * status  状态  - ON：开启  - OFF：关闭
    *
    * @var string[]
    */
    protected static $setters = [
            'riskLevel' => 'setRiskLevel',
            'ruleName' => 'setRuleName',
            'sqlRegex' => 'setSqlRegex',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskLevel  风险等级  - LOW：低  - MEDIUM：中  - HIGH：高 - NO_RISK：无
    * ruleName  规则名称
    * sqlRegex  正则表达式
    * status  状态  - ON：开启  - OFF：关闭
    *
    * @var string[]
    */
    protected static $getters = [
            'riskLevel' => 'getRiskLevel',
            'ruleName' => 'getRuleName',
            'sqlRegex' => 'getSqlRegex',
            'status' => 'getStatus'
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
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['sqlRegex'] = isset($data['sqlRegex']) ? $data['sqlRegex'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
        }
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
        }
        if ($this->container['sqlRegex'] === null) {
            $invalidProperties[] = "'sqlRegex' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets riskLevel
    *  风险等级  - LOW：低  - MEDIUM：中  - HIGH：高 - NO_RISK：无
    *
    * @return string
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string $riskLevel 风险等级  - LOW：低  - MEDIUM：中  - HIGH：高 - NO_RISK：无
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
    *
    * @return string
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets sqlRegex
    *  正则表达式
    *
    * @return string
    */
    public function getSqlRegex()
    {
        return $this->container['sqlRegex'];
    }

    /**
    * Sets sqlRegex
    *
    * @param string $sqlRegex 正则表达式
    *
    * @return $this
    */
    public function setSqlRegex($sqlRegex)
    {
        $this->container['sqlRegex'] = $sqlRegex;
        return $this;
    }

    /**
    * Gets status
    *  状态  - ON：开启  - OFF：关闭
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态  - ON：开启  - OFF：关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

