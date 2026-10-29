<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskAdvancedSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskAdvancedSettings';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释：** 高级配置对应的名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 高级配置对应的取值。 **取值范围：** 不涉及。
    * optionValue  **参数解释：** 高级配置对应的可选项。 **取值范围：** 不涉及。
    * description  **参数解释：** 高级配置对应的中文描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'value' => 'string',
            'optionValue' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释：** 高级配置对应的名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 高级配置对应的取值。 **取值范围：** 不涉及。
    * optionValue  **参数解释：** 高级配置对应的可选项。 **取值范围：** 不涉及。
    * description  **参数解释：** 高级配置对应的中文描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'value' => null,
        'optionValue' => null,
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
    * key  **参数解释：** 高级配置对应的名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 高级配置对应的取值。 **取值范围：** 不涉及。
    * optionValue  **参数解释：** 高级配置对应的可选项。 **取值范围：** 不涉及。
    * description  **参数解释：** 高级配置对应的中文描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'value' => 'value',
            'optionValue' => 'option_value',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释：** 高级配置对应的名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 高级配置对应的取值。 **取值范围：** 不涉及。
    * optionValue  **参数解释：** 高级配置对应的可选项。 **取值范围：** 不涉及。
    * description  **参数解释：** 高级配置对应的中文描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'value' => 'setValue',
            'optionValue' => 'setOptionValue',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释：** 高级配置对应的名称。 **取值范围：** 不涉及。
    * value  **参数解释：** 高级配置对应的取值。 **取值范围：** 不涉及。
    * optionValue  **参数解释：** 高级配置对应的可选项。 **取值范围：** 不涉及。
    * description  **参数解释：** 高级配置对应的中文描述。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'value' => 'getValue',
            'optionValue' => 'getOptionValue',
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['optionValue'] = isset($data['optionValue']) ? $data['optionValue'] : null;
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
    * Gets key
    *  **参数解释：** 高级配置对应的名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释：** 高级配置对应的名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释：** 高级配置对应的取值。 **取值范围：** 不涉及。
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
    * @param string|null $value **参数解释：** 高级配置对应的取值。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets optionValue
    *  **参数解释：** 高级配置对应的可选项。 **取值范围：** 不涉及。
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
    * @param string|null $optionValue **参数解释：** 高级配置对应的可选项。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setOptionValue($optionValue)
    {
        $this->container['optionValue'] = $optionValue;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 高级配置对应的中文描述。 **取值范围：** 不涉及。
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
    * @param string|null $description **参数解释：** 高级配置对应的中文描述。 **取值范围：** 不涉及。
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

