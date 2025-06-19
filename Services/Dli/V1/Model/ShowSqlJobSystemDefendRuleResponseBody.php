<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlJobSystemDefendRuleResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlJobSystemDefendRuleResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  规则类型
    * category  规则状态类型
    * actions  可执行的动作
    * engines  支持的引擎
    * noLimit  规则是否有限制值
    * desc  规则描述
    * param  param
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'category' => 'string',
            'actions' => 'string[]',
            'engines' => 'string[]',
            'noLimit' => 'bool',
            'desc' => 'string',
            'param' => '\HuaweiCloud\SDK\Dli\V1\Model\SysRuleParam'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  规则类型
    * category  规则状态类型
    * actions  可执行的动作
    * engines  支持的引擎
    * noLimit  规则是否有限制值
    * desc  规则描述
    * param  param
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'category' => null,
        'actions' => null,
        'engines' => null,
        'noLimit' => null,
        'desc' => null,
        'param' => null
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
    * ruleId  规则类型
    * category  规则状态类型
    * actions  可执行的动作
    * engines  支持的引擎
    * noLimit  规则是否有限制值
    * desc  规则描述
    * param  param
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'category' => 'category',
            'actions' => 'actions',
            'engines' => 'engines',
            'noLimit' => 'no_limit',
            'desc' => 'desc',
            'param' => 'param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  规则类型
    * category  规则状态类型
    * actions  可执行的动作
    * engines  支持的引擎
    * noLimit  规则是否有限制值
    * desc  规则描述
    * param  param
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'category' => 'setCategory',
            'actions' => 'setActions',
            'engines' => 'setEngines',
            'noLimit' => 'setNoLimit',
            'desc' => 'setDesc',
            'param' => 'setParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  规则类型
    * category  规则状态类型
    * actions  可执行的动作
    * engines  支持的引擎
    * noLimit  规则是否有限制值
    * desc  规则描述
    * param  param
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'category' => 'getCategory',
            'actions' => 'getActions',
            'engines' => 'getEngines',
            'noLimit' => 'getNoLimit',
            'desc' => 'getDesc',
            'param' => 'getParam'
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
    const RULE_ID_DYNAMIC_0001 = 'dynamic_0001';
    const RULE_ID_DYNAMIC_0002 = 'dynamic_0002';
    const RULE_ID_RUNNING_0002 = 'running_0002';
    const RULE_ID_RUNNING_0003 = 'running_0003';
    const RULE_ID_RUNNING_0004 = 'running_0004';
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
            self::RULE_ID_DYNAMIC_0001,
            self::RULE_ID_DYNAMIC_0002,
            self::RULE_ID_RUNNING_0002,
            self::RULE_ID_RUNNING_0003,
            self::RULE_ID_RUNNING_0004,
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['engines'] = isset($data['engines']) ? $data['engines'] : null;
        $this->container['noLimit'] = isset($data['noLimit']) ? $data['noLimit'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRuleIdAllowableValues();
                if (!is_null($this->container['ruleId']) && !in_array($this->container['ruleId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ruleId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 2000)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 2000.";
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
    * Gets ruleId
    *  规则类型
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
    * @param string|null $ruleId 规则类型
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
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 规则状态类型
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets actions
    *  可执行的动作
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions 可执行的动作
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets engines
    *  支持的引擎
    *
    * @return string[]|null
    */
    public function getEngines()
    {
        return $this->container['engines'];
    }

    /**
    * Sets engines
    *
    * @param string[]|null $engines 支持的引擎
    *
    * @return $this
    */
    public function setEngines($engines)
    {
        $this->container['engines'] = $engines;
        return $this;
    }

    /**
    * Gets noLimit
    *  规则是否有限制值
    *
    * @return bool|null
    */
    public function getNoLimit()
    {
        return $this->container['noLimit'];
    }

    /**
    * Sets noLimit
    *
    * @param bool|null $noLimit 规则是否有限制值
    *
    * @return $this
    */
    public function setNoLimit($noLimit)
    {
        $this->container['noLimit'] = $noLimit;
        return $this;
    }

    /**
    * Gets desc
    *  规则描述
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 规则描述
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets param
    *  param
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\SysRuleParam|null
    */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
    * Sets param
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\SysRuleParam|null $param param
    *
    * @return $this
    */
    public function setParam($param)
    {
        $this->container['param'] = $param;
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

