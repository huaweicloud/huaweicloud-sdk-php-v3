<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StyleExtraMetaEditColorItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StyleExtraMeta_edit_color_items';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minValue  最小值
    * maxValue  最大值
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minValue' => 'float[]',
            'maxValue' => 'float[]',
            'label' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minValue  最小值
    * maxValue  最大值
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minValue' => 'float',
        'maxValue' => 'float',
        'label' => null
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
    * minValue  最小值
    * maxValue  最大值
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minValue' => 'min_value',
            'maxValue' => 'max_value',
            'label' => 'label'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minValue  最小值
    * maxValue  最大值
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @var string[]
    */
    protected static $setters = [
            'minValue' => 'setMinValue',
            'maxValue' => 'setMaxValue',
            'label' => 'setLabel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minValue  最小值
    * maxValue  最大值
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @var string[]
    */
    protected static $getters = [
            'minValue' => 'getMinValue',
            'maxValue' => 'getMaxValue',
            'label' => 'getLabel'
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
        $this->container['minValue'] = isset($data['minValue']) ? $data['minValue'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
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
    * Gets minValue
    *  最小值
    *
    * @return float[]|null
    */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
    * Sets minValue
    *
    * @param float[]|null $minValue 最小值
    *
    * @return $this
    */
    public function setMinValue($minValue)
    {
        $this->container['minValue'] = $minValue;
        return $this;
    }

    /**
    * Gets maxValue
    *  最大值
    *
    * @return float[]|null
    */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
    * Sets maxValue
    *
    * @param float[]|null $maxValue 最大值
    *
    * @return $this
    */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
    * Gets label
    *  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @return map[string,string]|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param map[string,string]|null $label 展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
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

