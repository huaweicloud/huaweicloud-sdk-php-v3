<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowsInfoVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowsInfoVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  **参数解释**： 流转线code。 **取值范围**： 不涉及。
    * name  **参数解释**： 流转线名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 流转线描述信息。 **取值范围**： 不涉及。
    * extraConfig  **参数解释**： 流转线扩展配置。 **取值范围**： 不涉及。
    * fromCode  **参数解释**： 当前工作流节点code。 **取值范围**： 不涉及。
    * toCode  **参数解释**： 目标工作流节点code。 **取值范围**： 不涉及。
    * beforeRuleConfigs  **参数解释**： 流转前规则配置。 **取值范围**： 不涉及。
    * beforeRuleValidator  **参数解释**： 流转前校验规则。 **取值范围**： 不涉及。
    * afterRuleConfigs  **参数解释**： 流转后规则配置。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'name' => 'string',
            'description' => 'string',
            'extraConfig' => 'map[string,object][]',
            'fromCode' => 'string',
            'toCode' => 'string',
            'beforeRuleConfigs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowRuleConfigVO[]',
            'beforeRuleValidator' => 'string[]',
            'afterRuleConfigs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowRuleConfigVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  **参数解释**： 流转线code。 **取值范围**： 不涉及。
    * name  **参数解释**： 流转线名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 流转线描述信息。 **取值范围**： 不涉及。
    * extraConfig  **参数解释**： 流转线扩展配置。 **取值范围**： 不涉及。
    * fromCode  **参数解释**： 当前工作流节点code。 **取值范围**： 不涉及。
    * toCode  **参数解释**： 目标工作流节点code。 **取值范围**： 不涉及。
    * beforeRuleConfigs  **参数解释**： 流转前规则配置。 **取值范围**： 不涉及。
    * beforeRuleValidator  **参数解释**： 流转前校验规则。 **取值范围**： 不涉及。
    * afterRuleConfigs  **参数解释**： 流转后规则配置。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'description' => null,
        'extraConfig' => null,
        'fromCode' => null,
        'toCode' => null,
        'beforeRuleConfigs' => null,
        'beforeRuleValidator' => null,
        'afterRuleConfigs' => null
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
    * code  **参数解释**： 流转线code。 **取值范围**： 不涉及。
    * name  **参数解释**： 流转线名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 流转线描述信息。 **取值范围**： 不涉及。
    * extraConfig  **参数解释**： 流转线扩展配置。 **取值范围**： 不涉及。
    * fromCode  **参数解释**： 当前工作流节点code。 **取值范围**： 不涉及。
    * toCode  **参数解释**： 目标工作流节点code。 **取值范围**： 不涉及。
    * beforeRuleConfigs  **参数解释**： 流转前规则配置。 **取值范围**： 不涉及。
    * beforeRuleValidator  **参数解释**： 流转前校验规则。 **取值范围**： 不涉及。
    * afterRuleConfigs  **参数解释**： 流转后规则配置。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'name' => 'name',
            'description' => 'description',
            'extraConfig' => 'extra_config',
            'fromCode' => 'from_code',
            'toCode' => 'to_code',
            'beforeRuleConfigs' => 'before_rule_configs',
            'beforeRuleValidator' => 'before_rule_validator',
            'afterRuleConfigs' => 'after_rule_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  **参数解释**： 流转线code。 **取值范围**： 不涉及。
    * name  **参数解释**： 流转线名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 流转线描述信息。 **取值范围**： 不涉及。
    * extraConfig  **参数解释**： 流转线扩展配置。 **取值范围**： 不涉及。
    * fromCode  **参数解释**： 当前工作流节点code。 **取值范围**： 不涉及。
    * toCode  **参数解释**： 目标工作流节点code。 **取值范围**： 不涉及。
    * beforeRuleConfigs  **参数解释**： 流转前规则配置。 **取值范围**： 不涉及。
    * beforeRuleValidator  **参数解释**： 流转前校验规则。 **取值范围**： 不涉及。
    * afterRuleConfigs  **参数解释**： 流转后规则配置。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'name' => 'setName',
            'description' => 'setDescription',
            'extraConfig' => 'setExtraConfig',
            'fromCode' => 'setFromCode',
            'toCode' => 'setToCode',
            'beforeRuleConfigs' => 'setBeforeRuleConfigs',
            'beforeRuleValidator' => 'setBeforeRuleValidator',
            'afterRuleConfigs' => 'setAfterRuleConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  **参数解释**： 流转线code。 **取值范围**： 不涉及。
    * name  **参数解释**： 流转线名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 流转线描述信息。 **取值范围**： 不涉及。
    * extraConfig  **参数解释**： 流转线扩展配置。 **取值范围**： 不涉及。
    * fromCode  **参数解释**： 当前工作流节点code。 **取值范围**： 不涉及。
    * toCode  **参数解释**： 目标工作流节点code。 **取值范围**： 不涉及。
    * beforeRuleConfigs  **参数解释**： 流转前规则配置。 **取值范围**： 不涉及。
    * beforeRuleValidator  **参数解释**： 流转前校验规则。 **取值范围**： 不涉及。
    * afterRuleConfigs  **参数解释**： 流转后规则配置。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'name' => 'getName',
            'description' => 'getDescription',
            'extraConfig' => 'getExtraConfig',
            'fromCode' => 'getFromCode',
            'toCode' => 'getToCode',
            'beforeRuleConfigs' => 'getBeforeRuleConfigs',
            'beforeRuleValidator' => 'getBeforeRuleValidator',
            'afterRuleConfigs' => 'getAfterRuleConfigs'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extraConfig'] = isset($data['extraConfig']) ? $data['extraConfig'] : null;
        $this->container['fromCode'] = isset($data['fromCode']) ? $data['fromCode'] : null;
        $this->container['toCode'] = isset($data['toCode']) ? $data['toCode'] : null;
        $this->container['beforeRuleConfigs'] = isset($data['beforeRuleConfigs']) ? $data['beforeRuleConfigs'] : null;
        $this->container['beforeRuleValidator'] = isset($data['beforeRuleValidator']) ? $data['beforeRuleValidator'] : null;
        $this->container['afterRuleConfigs'] = isset($data['afterRuleConfigs']) ? $data['afterRuleConfigs'] : null;
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
    * Gets code
    *  **参数解释**： 流转线code。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**： 流转线code。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 流转线名称。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 流转线名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 流转线描述信息。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 流转线描述信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets extraConfig
    *  **参数解释**： 流转线扩展配置。 **取值范围**： 不涉及。
    *
    * @return map[string,object][]|null
    */
    public function getExtraConfig()
    {
        return $this->container['extraConfig'];
    }

    /**
    * Sets extraConfig
    *
    * @param map[string,object][]|null $extraConfig **参数解释**： 流转线扩展配置。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExtraConfig($extraConfig)
    {
        $this->container['extraConfig'] = $extraConfig;
        return $this;
    }

    /**
    * Gets fromCode
    *  **参数解释**： 当前工作流节点code。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFromCode()
    {
        return $this->container['fromCode'];
    }

    /**
    * Sets fromCode
    *
    * @param string|null $fromCode **参数解释**： 当前工作流节点code。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFromCode($fromCode)
    {
        $this->container['fromCode'] = $fromCode;
        return $this;
    }

    /**
    * Gets toCode
    *  **参数解释**： 目标工作流节点code。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getToCode()
    {
        return $this->container['toCode'];
    }

    /**
    * Sets toCode
    *
    * @param string|null $toCode **参数解释**： 目标工作流节点code。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setToCode($toCode)
    {
        $this->container['toCode'] = $toCode;
        return $this;
    }

    /**
    * Gets beforeRuleConfigs
    *  **参数解释**： 流转前规则配置。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowRuleConfigVO[]|null
    */
    public function getBeforeRuleConfigs()
    {
        return $this->container['beforeRuleConfigs'];
    }

    /**
    * Sets beforeRuleConfigs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowRuleConfigVO[]|null $beforeRuleConfigs **参数解释**： 流转前规则配置。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBeforeRuleConfigs($beforeRuleConfigs)
    {
        $this->container['beforeRuleConfigs'] = $beforeRuleConfigs;
        return $this;
    }

    /**
    * Gets beforeRuleValidator
    *  **参数解释**： 流转前校验规则。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getBeforeRuleValidator()
    {
        return $this->container['beforeRuleValidator'];
    }

    /**
    * Sets beforeRuleValidator
    *
    * @param string[]|null $beforeRuleValidator **参数解释**： 流转前校验规则。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBeforeRuleValidator($beforeRuleValidator)
    {
        $this->container['beforeRuleValidator'] = $beforeRuleValidator;
        return $this;
    }

    /**
    * Gets afterRuleConfigs
    *  **参数解释**： 流转后规则配置。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowRuleConfigVO[]|null
    */
    public function getAfterRuleConfigs()
    {
        return $this->container['afterRuleConfigs'];
    }

    /**
    * Sets afterRuleConfigs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowRuleConfigVO[]|null $afterRuleConfigs **参数解释**： 流转后规则配置。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAfterRuleConfigs($afterRuleConfigs)
    {
        $this->container['afterRuleConfigs'] = $afterRuleConfigs;
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

