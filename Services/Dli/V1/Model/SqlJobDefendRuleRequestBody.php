<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlJobDefendRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlJobDefendRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleName  规则名称
    * ruleId  规则类型
    * category  规则状态类型
    * engineRules  规则详情
    * queueNames  队列名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleName' => 'string',
            'ruleId' => 'string',
            'category' => 'string',
            'engineRules' => 'object',
            'queueNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleName  规则名称
    * ruleId  规则类型
    * category  规则状态类型
    * engineRules  规则详情
    * queueNames  队列名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleName' => null,
        'ruleId' => null,
        'category' => null,
        'engineRules' => null,
        'queueNames' => null
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
    * ruleName  规则名称
    * ruleId  规则类型
    * category  规则状态类型
    * engineRules  规则详情
    * queueNames  队列名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleName' => 'rule_name',
            'ruleId' => 'rule_id',
            'category' => 'category',
            'engineRules' => 'engine_rules',
            'queueNames' => 'queueNames'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleName  规则名称
    * ruleId  规则类型
    * category  规则状态类型
    * engineRules  规则详情
    * queueNames  队列名称
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleName' => 'setRuleName',
            'ruleId' => 'setRuleId',
            'category' => 'setCategory',
            'engineRules' => 'setEngineRules',
            'queueNames' => 'setQueueNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleName  规则名称
    * ruleId  规则类型
    * category  规则状态类型
    * engineRules  规则详情
    * queueNames  队列名称
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleName' => 'getRuleName',
            'ruleId' => 'getRuleId',
            'category' => 'getCategory',
            'engineRules' => 'getEngineRules',
            'queueNames' => 'getQueueNames'
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
    const RULE_ID_STATIC_0001 = 'static_0001';
    const RULE_ID_STATIC_0002 = 'static_0002';
    const RULE_ID_STATIC_0003 = 'static_0003';
    const RULE_ID_STATIC_0004 = 'static_0004';
    const RULE_ID_STATIC_0005 = 'static_0005';
    const RULE_ID_STATIC_0006 = 'static_0006';
    const RULE_ID_STATIC_0007 = 'static_0007';
    const RULE_ID_STATIC_0008 = 'static_0008';
    const RULE_ID_STATIC_0009 = 'static_0009';
    const RULE_ID_STATIC_0010 = 'static_0010';
    const RULE_ID_STATIC_0011 = 'static_0011';
    const RULE_ID_STATIC_0012 = 'static_0012';
    const RULE_ID_STATIC_0013 = 'static_0013';
    const RULE_ID_STATIC_0014 = 'static_0014';
    const RULE_ID_STATIC_0015 = 'static_0015';
    const RULE_ID_STATIC_0016 = 'static_0016';
    const RULE_ID_STATIC_0017 = 'static_0017';
    const RULE_ID_DYNAMIC_0001 = 'dynamic_0001';
    const RULE_ID_DYNAMIC_0002 = 'dynamic_0002';
    const RULE_ID_DYNAMIC_0003 = 'dynamic_0003';
    const RULE_ID_DYNAMIC_0004 = 'dynamic_0004';
    const RULE_ID_DYNAMIC_0005 = 'dynamic_0005';
    const RULE_ID_DYNAMIC_0006 = 'dynamic_0006';
    const RULE_ID_DYNAMIC_0007 = 'dynamic_0007';
    const RULE_ID_DYNAMIC_0008 = 'dynamic_0008';
    const RULE_ID_DYNAMIC_0009 = 'dynamic_0009';
    const RULE_ID_DYNAMIC_0010 = 'dynamic_0010';
    const RULE_ID_DYNAMIC_0011 = 'dynamic_0011';
    const RULE_ID_DYNAMIC_0012 = 'dynamic_0012';
    const RULE_ID_RUNNING_0001 = 'running_0001';
    const RULE_ID_RUNNING_0002 = 'running_0002';
    const RULE_ID_RUNNING_0003 = 'running_0003';
    const RULE_ID_RUNNING_0004 = 'running_0004';
    const RULE_ID_RUNNING_0005 = 'running_0005';
    const RULE_ID_RUNNING_0006 = 'running_0006';
    const RULE_ID_RUNNING_0007 = 'running_0007';
    const RULE_ID_RUNNING_0008 = 'running_0008';
    const RULE_ID_RUNNING_0009 = 'running_0009';
    const RULE_ID_RUNNING_0010 = 'running_0010';
    const RULE_ID_RUNNING_0011 = 'running_0011';
    const RULE_ID_RUNNING_0012 = 'running_0012';
    const RULE_ID_RUNNING_0013 = 'running_0013';
    const RULE_ID_RUNNING_0014 = 'running_0014';
    const RULE_ID_RUNNING_0015 = 'running_0015';
    const CATEGORY__STATIC = 'static';
    const CATEGORY_DYNAMIC = 'dynamic';
    const CATEGORY_RUNNING = 'running';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRuleIdAllowableValues()
    {
        return [
            self::RULE_ID_STATIC_0001,
            self::RULE_ID_STATIC_0002,
            self::RULE_ID_STATIC_0003,
            self::RULE_ID_STATIC_0004,
            self::RULE_ID_STATIC_0005,
            self::RULE_ID_STATIC_0006,
            self::RULE_ID_STATIC_0007,
            self::RULE_ID_STATIC_0008,
            self::RULE_ID_STATIC_0009,
            self::RULE_ID_STATIC_0010,
            self::RULE_ID_STATIC_0011,
            self::RULE_ID_STATIC_0012,
            self::RULE_ID_STATIC_0013,
            self::RULE_ID_STATIC_0014,
            self::RULE_ID_STATIC_0015,
            self::RULE_ID_STATIC_0016,
            self::RULE_ID_STATIC_0017,
            self::RULE_ID_DYNAMIC_0001,
            self::RULE_ID_DYNAMIC_0002,
            self::RULE_ID_DYNAMIC_0003,
            self::RULE_ID_DYNAMIC_0004,
            self::RULE_ID_DYNAMIC_0005,
            self::RULE_ID_DYNAMIC_0006,
            self::RULE_ID_DYNAMIC_0007,
            self::RULE_ID_DYNAMIC_0008,
            self::RULE_ID_DYNAMIC_0009,
            self::RULE_ID_DYNAMIC_0010,
            self::RULE_ID_DYNAMIC_0011,
            self::RULE_ID_DYNAMIC_0012,
            self::RULE_ID_RUNNING_0001,
            self::RULE_ID_RUNNING_0002,
            self::RULE_ID_RUNNING_0003,
            self::RULE_ID_RUNNING_0004,
            self::RULE_ID_RUNNING_0005,
            self::RULE_ID_RUNNING_0006,
            self::RULE_ID_RUNNING_0007,
            self::RULE_ID_RUNNING_0008,
            self::RULE_ID_RUNNING_0009,
            self::RULE_ID_RUNNING_0010,
            self::RULE_ID_RUNNING_0011,
            self::RULE_ID_RUNNING_0012,
            self::RULE_ID_RUNNING_0013,
            self::RULE_ID_RUNNING_0014,
            self::RULE_ID_RUNNING_0015,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY__STATIC,
            self::CATEGORY_DYNAMIC,
            self::CATEGORY_RUNNING,
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['engineRules'] = isset($data['engineRules']) ? $data['engineRules'] : null;
        $this->container['queueNames'] = isset($data['queueNames']) ? $data['queueNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
        }
            if ((mb_strlen($this->container['ruleName']) > 32)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ruleId'] === null) {
            $invalidProperties[] = "'ruleId' can't be null";
        }
            $allowedValues = $this->getRuleIdAllowableValues();
                if (!is_null($this->container['ruleId']) && !in_array($this->container['ruleId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruleId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['engineRules'] === null) {
            $invalidProperties[] = "'engineRules' can't be null";
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
    * Gets ruleId
    *  规则类型
    *
    * @return string
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string $ruleId 规则类型
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets category
    *  规则状态类型
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 规则状态类型
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets engineRules
    *  规则详情
    *
    * @return object
    */
    public function getEngineRules()
    {
        return $this->container['engineRules'];
    }

    /**
    * Sets engineRules
    *
    * @param object $engineRules 规则详情
    *
    * @return $this
    */
    public function setEngineRules($engineRules)
    {
        $this->container['engineRules'] = $engineRules;
        return $this;
    }

    /**
    * Gets queueNames
    *  队列名称
    *
    * @return string[]|null
    */
    public function getQueueNames()
    {
        return $this->container['queueNames'];
    }

    /**
    * Sets queueNames
    *
    * @param string[]|null $queueNames 队列名称
    *
    * @return $this
    */
    public function setQueueNames($queueNames)
    {
        $this->container['queueNames'] = $queueNames;
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

