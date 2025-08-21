<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LanguagesDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LanguagesDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * color  **参数解释：** 颜色。
    * label  **参数解释：** 语言类型。
    * value  **参数解释：** 比重。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'color' => 'string',
            'label' => 'string',
            'value' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * color  **参数解释：** 颜色。
    * label  **参数解释：** 语言类型。
    * value  **参数解释：** 比重。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'color' => null,
        'label' => null,
        'value' => 'double'
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
    * color  **参数解释：** 颜色。
    * label  **参数解释：** 语言类型。
    * value  **参数解释：** 比重。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'color' => 'color',
            'label' => 'label',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * color  **参数解释：** 颜色。
    * label  **参数解释：** 语言类型。
    * value  **参数解释：** 比重。
    *
    * @var string[]
    */
    protected static $setters = [
            'color' => 'setColor',
            'label' => 'setLabel',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * color  **参数解释：** 颜色。
    * label  **参数解释：** 语言类型。
    * value  **参数解释：** 比重。
    *
    * @var string[]
    */
    protected static $getters = [
            'color' => 'getColor',
            'label' => 'getLabel',
            'value' => 'getValue'
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
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    * Gets color
    *  **参数解释：** 颜色。
    *
    * @return string|null
    */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
    * Sets color
    *
    * @param string|null $color **参数解释：** 颜色。
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets label
    *  **参数解释：** 语言类型。
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
    * @param string|null $label **参数解释：** 语言类型。
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释：** 比重。
    *
    * @return double|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double|null $value **参数解释：** 比重。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

