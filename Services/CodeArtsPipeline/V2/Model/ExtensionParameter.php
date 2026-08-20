<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名
    * label  参数显示标签
    * validation  validation
    * defaultValue  默认值
    * helpMarkdown  帮助文档(markdown格式)。
    * displaySettings  displaySettings
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'label' => 'string',
            'validation' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameterValidation',
            'defaultValue' => 'string',
            'helpMarkdown' => 'string',
            'displaySettings' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameterDisplaySettings'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名
    * label  参数显示标签
    * validation  validation
    * defaultValue  默认值
    * helpMarkdown  帮助文档(markdown格式)。
    * displaySettings  displaySettings
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'label' => null,
        'validation' => null,
        'defaultValue' => null,
        'helpMarkdown' => null,
        'displaySettings' => null
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
    * name  参数名
    * label  参数显示标签
    * validation  validation
    * defaultValue  默认值
    * helpMarkdown  帮助文档(markdown格式)。
    * displaySettings  displaySettings
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'label' => 'label',
            'validation' => 'validation',
            'defaultValue' => 'defaultValue',
            'helpMarkdown' => 'helpMarkdown',
            'displaySettings' => 'displaySettings'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名
    * label  参数显示标签
    * validation  validation
    * defaultValue  默认值
    * helpMarkdown  帮助文档(markdown格式)。
    * displaySettings  displaySettings
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'label' => 'setLabel',
            'validation' => 'setValidation',
            'defaultValue' => 'setDefaultValue',
            'helpMarkdown' => 'setHelpMarkdown',
            'displaySettings' => 'setDisplaySettings'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名
    * label  参数显示标签
    * validation  validation
    * defaultValue  默认值
    * helpMarkdown  帮助文档(markdown格式)。
    * displaySettings  displaySettings
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'label' => 'getLabel',
            'validation' => 'getValidation',
            'defaultValue' => 'getDefaultValue',
            'helpMarkdown' => 'getHelpMarkdown',
            'displaySettings' => 'getDisplaySettings'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['validation'] = isset($data['validation']) ? $data['validation'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['helpMarkdown'] = isset($data['helpMarkdown']) ? $data['helpMarkdown'] : null;
        $this->container['displaySettings'] = isset($data['displaySettings']) ? $data['displaySettings'] : null;
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
    * Gets name
    *  参数名
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
    * @param string|null $name 参数名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets label
    *  参数显示标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 参数显示标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets validation
    *  validation
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameterValidation|null
    */
    public function getValidation()
    {
        return $this->container['validation'];
    }

    /**
    * Sets validation
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameterValidation|null $validation validation
    *
    * @return $this
    */
    public function setValidation($validation)
    {
        $this->container['validation'] = $validation;
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
    * Gets helpMarkdown
    *  帮助文档(markdown格式)。
    *
    * @return string|null
    */
    public function getHelpMarkdown()
    {
        return $this->container['helpMarkdown'];
    }

    /**
    * Sets helpMarkdown
    *
    * @param string|null $helpMarkdown 帮助文档(markdown格式)。
    *
    * @return $this
    */
    public function setHelpMarkdown($helpMarkdown)
    {
        $this->container['helpMarkdown'] = $helpMarkdown;
        return $this;
    }

    /**
    * Gets displaySettings
    *  displaySettings
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameterDisplaySettings|null
    */
    public function getDisplaySettings()
    {
        return $this->container['displaySettings'];
    }

    /**
    * Sets displaySettings
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ExtensionParameterDisplaySettings|null $displaySettings displaySettings
    *
    * @return $this
    */
    public function setDisplaySettings($displaySettings)
    {
        $this->container['displaySettings'] = $displaySettings;
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

