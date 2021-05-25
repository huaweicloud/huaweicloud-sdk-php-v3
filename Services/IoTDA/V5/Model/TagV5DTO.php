<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagV5DTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagV5DTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagKey  标签键，在同一资源下标签键唯一。
    * tagValue  标签值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagKey' => 'string',
            'tagValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagKey  标签键，在同一资源下标签键唯一。
    * tagValue  标签值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagKey' => null,
        'tagValue' => null
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
    * tagKey  标签键，在同一资源下标签键唯一。
    * tagValue  标签值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagKey' => 'tag_key',
            'tagValue' => 'tag_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagKey  标签键，在同一资源下标签键唯一。
    * tagValue  标签值。
    *
    * @var string[]
    */
    protected static $setters = [
            'tagKey' => 'setTagKey',
            'tagValue' => 'setTagValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagKey  标签键，在同一资源下标签键唯一。
    * tagValue  标签值。
    *
    * @var string[]
    */
    protected static $getters = [
            'tagKey' => 'getTagKey',
            'tagValue' => 'getTagValue'
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
        $this->container['tagKey'] = isset($data['tagKey']) ? $data['tagKey'] : null;
        $this->container['tagValue'] = isset($data['tagValue']) ? $data['tagValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tagKey'] === null) {
            $invalidProperties[] = "'tagKey' can't be null";
        }
            if (!preg_match("/^[\\\\u4e00-\\\\u9fa5a-zA-Z0-9_.-]{1,64}$/", $this->container['tagKey'])) {
                $invalidProperties[] = "invalid value for 'tagKey', must be conform to the pattern /^[\\\\u4e00-\\\\u9fa5a-zA-Z0-9_.-]{1,64}$/.";
            }
            if (!is_null($this->container['tagValue']) && !preg_match("/^[\\\\u4e00-\\\\u9fa5a-zA-Z0-9_.-]{1,128}$/", $this->container['tagValue'])) {
                $invalidProperties[] = "invalid value for 'tagValue', must be conform to the pattern /^[\\\\u4e00-\\\\u9fa5a-zA-Z0-9_.-]{1,128}$/.";
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
    * Gets tagKey
    *  标签键，在同一资源下标签键唯一。
    *
    * @return string
    */
    public function getTagKey()
    {
        return $this->container['tagKey'];
    }

    /**
    * Sets tagKey
    *
    * @param string $tagKey 标签键，在同一资源下标签键唯一。
    *
    * @return $this
    */
    public function setTagKey($tagKey)
    {
        $this->container['tagKey'] = $tagKey;
        return $this;
    }

    /**
    * Gets tagValue
    *  标签值。
    *
    * @return string|null
    */
    public function getTagValue()
    {
        return $this->container['tagValue'];
    }

    /**
    * Sets tagValue
    *
    * @param string|null $tagValue 标签值。
    *
    * @return $this
    */
    public function setTagValue($tagValue)
    {
        $this->container['tagValue'] = $tagValue;
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

