<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionExtendProp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionExtendProp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiOptions  **参数解释**： API选项。 **取值范围**： 不涉及。
    * apiType  **参数解释**： API类型。 **取值范围**： 不涉及。
    * showPlaceholder  **参数解释**： 显示占位符。 **取值范围**： 不涉及。
    * options  **参数解释**： 选项。 **取值范围**： 不涉及。
    * disabledConditions  **参数解释**： 禁用条件。 **取值范围**： 不涉及。
    * visibleConditions  **参数解释**： 可见条件。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiOptions' => 'string',
            'apiType' => 'string',
            'showPlaceholder' => 'string',
            'options' => 'string',
            'disabledConditions' => 'string',
            'visibleConditions' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiOptions  **参数解释**： API选项。 **取值范围**： 不涉及。
    * apiType  **参数解释**： API类型。 **取值范围**： 不涉及。
    * showPlaceholder  **参数解释**： 显示占位符。 **取值范围**： 不涉及。
    * options  **参数解释**： 选项。 **取值范围**： 不涉及。
    * disabledConditions  **参数解释**： 禁用条件。 **取值范围**： 不涉及。
    * visibleConditions  **参数解释**： 可见条件。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiOptions' => null,
        'apiType' => null,
        'showPlaceholder' => null,
        'options' => null,
        'disabledConditions' => null,
        'visibleConditions' => null
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
    * apiOptions  **参数解释**： API选项。 **取值范围**： 不涉及。
    * apiType  **参数解释**： API类型。 **取值范围**： 不涉及。
    * showPlaceholder  **参数解释**： 显示占位符。 **取值范围**： 不涉及。
    * options  **参数解释**： 选项。 **取值范围**： 不涉及。
    * disabledConditions  **参数解释**： 禁用条件。 **取值范围**： 不涉及。
    * visibleConditions  **参数解释**： 可见条件。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiOptions' => 'api_options',
            'apiType' => 'api_type',
            'showPlaceholder' => 'show_placeholder',
            'options' => 'options',
            'disabledConditions' => 'disabled_conditions',
            'visibleConditions' => 'visible_conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiOptions  **参数解释**： API选项。 **取值范围**： 不涉及。
    * apiType  **参数解释**： API类型。 **取值范围**： 不涉及。
    * showPlaceholder  **参数解释**： 显示占位符。 **取值范围**： 不涉及。
    * options  **参数解释**： 选项。 **取值范围**： 不涉及。
    * disabledConditions  **参数解释**： 禁用条件。 **取值范围**： 不涉及。
    * visibleConditions  **参数解释**： 可见条件。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiOptions' => 'setApiOptions',
            'apiType' => 'setApiType',
            'showPlaceholder' => 'setShowPlaceholder',
            'options' => 'setOptions',
            'disabledConditions' => 'setDisabledConditions',
            'visibleConditions' => 'setVisibleConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiOptions  **参数解释**： API选项。 **取值范围**： 不涉及。
    * apiType  **参数解释**： API类型。 **取值范围**： 不涉及。
    * showPlaceholder  **参数解释**： 显示占位符。 **取值范围**： 不涉及。
    * options  **参数解释**： 选项。 **取值范围**： 不涉及。
    * disabledConditions  **参数解释**： 禁用条件。 **取值范围**： 不涉及。
    * visibleConditions  **参数解释**： 可见条件。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiOptions' => 'getApiOptions',
            'apiType' => 'getApiType',
            'showPlaceholder' => 'getShowPlaceholder',
            'options' => 'getOptions',
            'disabledConditions' => 'getDisabledConditions',
            'visibleConditions' => 'getVisibleConditions'
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
        $this->container['apiOptions'] = isset($data['apiOptions']) ? $data['apiOptions'] : null;
        $this->container['apiType'] = isset($data['apiType']) ? $data['apiType'] : null;
        $this->container['showPlaceholder'] = isset($data['showPlaceholder']) ? $data['showPlaceholder'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['disabledConditions'] = isset($data['disabledConditions']) ? $data['disabledConditions'] : null;
        $this->container['visibleConditions'] = isset($data['visibleConditions']) ? $data['visibleConditions'] : null;
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
    * Gets apiOptions
    *  **参数解释**： API选项。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getApiOptions()
    {
        return $this->container['apiOptions'];
    }

    /**
    * Sets apiOptions
    *
    * @param string|null $apiOptions **参数解释**： API选项。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setApiOptions($apiOptions)
    {
        $this->container['apiOptions'] = $apiOptions;
        return $this;
    }

    /**
    * Gets apiType
    *  **参数解释**： API类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getApiType()
    {
        return $this->container['apiType'];
    }

    /**
    * Sets apiType
    *
    * @param string|null $apiType **参数解释**： API类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setApiType($apiType)
    {
        $this->container['apiType'] = $apiType;
        return $this;
    }

    /**
    * Gets showPlaceholder
    *  **参数解释**： 显示占位符。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getShowPlaceholder()
    {
        return $this->container['showPlaceholder'];
    }

    /**
    * Sets showPlaceholder
    *
    * @param string|null $showPlaceholder **参数解释**： 显示占位符。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setShowPlaceholder($showPlaceholder)
    {
        $this->container['showPlaceholder'] = $showPlaceholder;
        return $this;
    }

    /**
    * Gets options
    *  **参数解释**： 选项。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param string|null $options **参数解释**： 选项。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets disabledConditions
    *  **参数解释**： 禁用条件。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDisabledConditions()
    {
        return $this->container['disabledConditions'];
    }

    /**
    * Sets disabledConditions
    *
    * @param string|null $disabledConditions **参数解释**： 禁用条件。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisabledConditions($disabledConditions)
    {
        $this->container['disabledConditions'] = $disabledConditions;
        return $this;
    }

    /**
    * Gets visibleConditions
    *  **参数解释**： 可见条件。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getVisibleConditions()
    {
        return $this->container['visibleConditions'];
    }

    /**
    * Sets visibleConditions
    *
    * @param string|null $visibleConditions **参数解释**： 可见条件。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVisibleConditions($visibleConditions)
    {
        $this->container['visibleConditions'] = $visibleConditions;
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

