<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyDefinition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  策略id
    * name  策略名字
    * policyType  策略类型
    * description  策略描述
    * policyRuleType  策略语法类型
    * policyRule  策略规则
    * triggerType  触发器类型，可选值：resource, period
    * keywords  关键词列表
    * parameters  策略参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'policyType' => 'string',
            'description' => 'string',
            'policyRuleType' => 'string',
            'policyRule' => 'object',
            'triggerType' => 'string',
            'keywords' => 'string[]',
            'parameters' => 'map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterDefinition]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  策略id
    * name  策略名字
    * policyType  策略类型
    * description  策略描述
    * policyRuleType  策略语法类型
    * policyRule  策略规则
    * triggerType  触发器类型，可选值：resource, period
    * keywords  关键词列表
    * parameters  策略参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'policyType' => null,
        'description' => null,
        'policyRuleType' => null,
        'policyRule' => null,
        'triggerType' => null,
        'keywords' => null,
        'parameters' => null
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
    * id  策略id
    * name  策略名字
    * policyType  策略类型
    * description  策略描述
    * policyRuleType  策略语法类型
    * policyRule  策略规则
    * triggerType  触发器类型，可选值：resource, period
    * keywords  关键词列表
    * parameters  策略参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'policyType' => 'policy_type',
            'description' => 'description',
            'policyRuleType' => 'policy_rule_type',
            'policyRule' => 'policy_rule',
            'triggerType' => 'trigger_type',
            'keywords' => 'keywords',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  策略id
    * name  策略名字
    * policyType  策略类型
    * description  策略描述
    * policyRuleType  策略语法类型
    * policyRule  策略规则
    * triggerType  触发器类型，可选值：resource, period
    * keywords  关键词列表
    * parameters  策略参数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'policyType' => 'setPolicyType',
            'description' => 'setDescription',
            'policyRuleType' => 'setPolicyRuleType',
            'policyRule' => 'setPolicyRule',
            'triggerType' => 'setTriggerType',
            'keywords' => 'setKeywords',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  策略id
    * name  策略名字
    * policyType  策略类型
    * description  策略描述
    * policyRuleType  策略语法类型
    * policyRule  策略规则
    * triggerType  触发器类型，可选值：resource, period
    * keywords  关键词列表
    * parameters  策略参数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'policyType' => 'getPolicyType',
            'description' => 'getDescription',
            'policyRuleType' => 'getPolicyRuleType',
            'policyRule' => 'getPolicyRule',
            'triggerType' => 'getTriggerType',
            'keywords' => 'getKeywords',
            'parameters' => 'getParameters'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['policyType'] = isset($data['policyType']) ? $data['policyType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['policyRuleType'] = isset($data['policyRuleType']) ? $data['policyRuleType'] : null;
        $this->container['policyRule'] = isset($data['policyRule']) ? $data['policyRule'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
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
    * Gets id
    *  策略id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 策略id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  策略名字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 策略名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets policyType
    *  策略类型
    *
    * @return string|null
    */
    public function getPolicyType()
    {
        return $this->container['policyType'];
    }

    /**
    * Sets policyType
    *
    * @param string|null $policyType 策略类型
    *
    * @return $this
    */
    public function setPolicyType($policyType)
    {
        $this->container['policyType'] = $policyType;
        return $this;
    }

    /**
    * Gets description
    *  策略描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 策略描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets policyRuleType
    *  策略语法类型
    *
    * @return string|null
    */
    public function getPolicyRuleType()
    {
        return $this->container['policyRuleType'];
    }

    /**
    * Sets policyRuleType
    *
    * @param string|null $policyRuleType 策略语法类型
    *
    * @return $this
    */
    public function setPolicyRuleType($policyRuleType)
    {
        $this->container['policyRuleType'] = $policyRuleType;
        return $this;
    }

    /**
    * Gets policyRule
    *  策略规则
    *
    * @return object|null
    */
    public function getPolicyRule()
    {
        return $this->container['policyRule'];
    }

    /**
    * Sets policyRule
    *
    * @param object|null $policyRule 策略规则
    *
    * @return $this
    */
    public function setPolicyRule($policyRule)
    {
        $this->container['policyRule'] = $policyRule;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发器类型，可选值：resource, period
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发器类型，可选值：resource, period
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets keywords
    *  关键词列表
    *
    * @return string[]|null
    */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
    * Sets keywords
    *
    * @param string[]|null $keywords 关键词列表
    *
    * @return $this
    */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    /**
    * Gets parameters
    *  策略参数
    *
    * @return map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterDefinition]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param map[string,\HuaweiCloud\SDK\Rms\V1\Model\PolicyParameterDefinition]|null $parameters 策略参数
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

