<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则配置ID
    * ruleId  规则ID
    * defaultValue  默认值
    * optionValue  当前
    * optionKey  当前规则配置项key
    * optionName  当前规则配置项名称
    * templateId  规则集id
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'ruleId' => 'int',
            'defaultValue' => 'string',
            'optionValue' => 'string',
            'optionKey' => 'string',
            'optionName' => 'string',
            'templateId' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则配置ID
    * ruleId  规则ID
    * defaultValue  默认值
    * optionValue  当前
    * optionKey  当前规则配置项key
    * optionName  当前规则配置项名称
    * templateId  规则集id
    * description  描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ruleId' => null,
        'defaultValue' => null,
        'optionValue' => null,
        'optionKey' => null,
        'optionName' => null,
        'templateId' => null,
        'description' => null
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
    * id  规则配置ID
    * ruleId  规则ID
    * defaultValue  默认值
    * optionValue  当前
    * optionKey  当前规则配置项key
    * optionName  当前规则配置项名称
    * templateId  规则集id
    * description  描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ruleId' => 'rule_id',
            'defaultValue' => 'default_value',
            'optionValue' => 'option_value',
            'optionKey' => 'option_key',
            'optionName' => 'option_name',
            'templateId' => 'template_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则配置ID
    * ruleId  规则ID
    * defaultValue  默认值
    * optionValue  当前
    * optionKey  当前规则配置项key
    * optionName  当前规则配置项名称
    * templateId  规则集id
    * description  描述
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ruleId' => 'setRuleId',
            'defaultValue' => 'setDefaultValue',
            'optionValue' => 'setOptionValue',
            'optionKey' => 'setOptionKey',
            'optionName' => 'setOptionName',
            'templateId' => 'setTemplateId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则配置ID
    * ruleId  规则ID
    * defaultValue  默认值
    * optionValue  当前
    * optionKey  当前规则配置项key
    * optionName  当前规则配置项名称
    * templateId  规则集id
    * description  描述
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ruleId' => 'getRuleId',
            'defaultValue' => 'getDefaultValue',
            'optionValue' => 'getOptionValue',
            'optionKey' => 'getOptionKey',
            'optionName' => 'getOptionName',
            'templateId' => 'getTemplateId',
            'description' => 'getDescription'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['optionValue'] = isset($data['optionValue']) ? $data['optionValue'] : null;
        $this->container['optionKey'] = isset($data['optionKey']) ? $data['optionKey'] : null;
        $this->container['optionName'] = isset($data['optionName']) ? $data['optionName'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    *  规则配置ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 规则配置ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ruleId
    *  规则ID
    *
    * @return int|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param int|null $ruleId 规则ID
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets defaultValue
    *  默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets optionValue
    *  当前
    *
    * @return string|null
    */
    public function getOptionValue()
    {
        return $this->container['optionValue'];
    }

    /**
    * Sets optionValue
    *
    * @param string|null $optionValue 当前
    *
    * @return $this
    */
    public function setOptionValue($optionValue)
    {
        $this->container['optionValue'] = $optionValue;
        return $this;
    }

    /**
    * Gets optionKey
    *  当前规则配置项key
    *
    * @return string|null
    */
    public function getOptionKey()
    {
        return $this->container['optionKey'];
    }

    /**
    * Sets optionKey
    *
    * @param string|null $optionKey 当前规则配置项key
    *
    * @return $this
    */
    public function setOptionKey($optionKey)
    {
        $this->container['optionKey'] = $optionKey;
        return $this;
    }

    /**
    * Gets optionName
    *  当前规则配置项名称
    *
    * @return string|null
    */
    public function getOptionName()
    {
        return $this->container['optionName'];
    }

    /**
    * Sets optionName
    *
    * @param string|null $optionName 当前规则配置项名称
    *
    * @return $this
    */
    public function setOptionName($optionName)
    {
        $this->container['optionName'] = $optionName;
        return $this;
    }

    /**
    * Gets templateId
    *  规则集id
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 规则集id
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

