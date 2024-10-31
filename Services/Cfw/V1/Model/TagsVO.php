<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagId  规则id
    * tagKey  规则标签键
    * tagValue  规则标签值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagId' => 'string',
            'tagKey' => 'string',
            'tagValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagId  规则id
    * tagKey  规则标签键
    * tagValue  规则标签值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagId' => null,
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
    * tagId  规则id
    * tagKey  规则标签键
    * tagValue  规则标签值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagId' => 'tag_id',
            'tagKey' => 'tag_key',
            'tagValue' => 'tag_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagId  规则id
    * tagKey  规则标签键
    * tagValue  规则标签值
    *
    * @var string[]
    */
    protected static $setters = [
            'tagId' => 'setTagId',
            'tagKey' => 'setTagKey',
            'tagValue' => 'setTagValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagId  规则id
    * tagKey  规则标签键
    * tagValue  规则标签值
    *
    * @var string[]
    */
    protected static $getters = [
            'tagId' => 'getTagId',
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
        $this->container['tagId'] = isset($data['tagId']) ? $data['tagId'] : null;
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
    * Gets tagId
    *  规则id
    *
    * @return string|null
    */
    public function getTagId()
    {
        return $this->container['tagId'];
    }

    /**
    * Sets tagId
    *
    * @param string|null $tagId 规则id
    *
    * @return $this
    */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;
        return $this;
    }

    /**
    * Gets tagKey
    *  规则标签键
    *
    * @return string|null
    */
    public function getTagKey()
    {
        return $this->container['tagKey'];
    }

    /**
    * Sets tagKey
    *
    * @param string|null $tagKey 规则标签键
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
    *  规则标签值
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
    * @param string|null $tagValue 规则标签值
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

