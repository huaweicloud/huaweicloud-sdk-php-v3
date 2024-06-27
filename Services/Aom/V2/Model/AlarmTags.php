<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmTags implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmTags';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoTags  自动标签。
    * customTags  自定义标签。
    * customAnnotations  告警标注。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoTags' => 'string[]',
            'customTags' => 'string[]',
            'customAnnotations' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoTags  自动标签。
    * customTags  自定义标签。
    * customAnnotations  告警标注。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoTags' => null,
        'customTags' => null,
        'customAnnotations' => null
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
    * autoTags  自动标签。
    * customTags  自定义标签。
    * customAnnotations  告警标注。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoTags' => 'auto_tags',
            'customTags' => 'custom_tags',
            'customAnnotations' => 'custom_annotations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoTags  自动标签。
    * customTags  自定义标签。
    * customAnnotations  告警标注。
    *
    * @var string[]
    */
    protected static $setters = [
            'autoTags' => 'setAutoTags',
            'customTags' => 'setCustomTags',
            'customAnnotations' => 'setCustomAnnotations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoTags  自动标签。
    * customTags  自定义标签。
    * customAnnotations  告警标注。
    *
    * @var string[]
    */
    protected static $getters = [
            'autoTags' => 'getAutoTags',
            'customTags' => 'getCustomTags',
            'customAnnotations' => 'getCustomAnnotations'
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
        $this->container['autoTags'] = isset($data['autoTags']) ? $data['autoTags'] : null;
        $this->container['customTags'] = isset($data['customTags']) ? $data['customTags'] : null;
        $this->container['customAnnotations'] = isset($data['customAnnotations']) ? $data['customAnnotations'] : null;
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
    * Gets autoTags
    *  自动标签。
    *
    * @return string[]|null
    */
    public function getAutoTags()
    {
        return $this->container['autoTags'];
    }

    /**
    * Sets autoTags
    *
    * @param string[]|null $autoTags 自动标签。
    *
    * @return $this
    */
    public function setAutoTags($autoTags)
    {
        $this->container['autoTags'] = $autoTags;
        return $this;
    }

    /**
    * Gets customTags
    *  自定义标签。
    *
    * @return string[]|null
    */
    public function getCustomTags()
    {
        return $this->container['customTags'];
    }

    /**
    * Sets customTags
    *
    * @param string[]|null $customTags 自定义标签。
    *
    * @return $this
    */
    public function setCustomTags($customTags)
    {
        $this->container['customTags'] = $customTags;
        return $this;
    }

    /**
    * Gets customAnnotations
    *  告警标注。
    *
    * @return string[]|null
    */
    public function getCustomAnnotations()
    {
        return $this->container['customAnnotations'];
    }

    /**
    * Sets customAnnotations
    *
    * @param string[]|null $customAnnotations 告警标注。
    *
    * @return $this
    */
    public function setCustomAnnotations($customAnnotations)
    {
        $this->container['customAnnotations'] = $customAnnotations;
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

