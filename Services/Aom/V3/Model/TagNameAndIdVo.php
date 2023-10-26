<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TagNameAndIdVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TagNameAndIdVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagId  标签Id
    * tagName  标签名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagId' => 'string',
            'tagName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagId  标签Id
    * tagName  标签名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagId' => null,
        'tagName' => null
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
    * tagId  标签Id
    * tagName  标签名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagId' => 'tag_id',
            'tagName' => 'tag_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagId  标签Id
    * tagName  标签名称
    *
    * @var string[]
    */
    protected static $setters = [
            'tagId' => 'setTagId',
            'tagName' => 'setTagName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagId  标签Id
    * tagName  标签名称
    *
    * @var string[]
    */
    protected static $getters = [
            'tagId' => 'getTagId',
            'tagName' => 'getTagName'
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
        $this->container['tagName'] = isset($data['tagName']) ? $data['tagName'] : null;
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
    *  标签Id
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
    * @param string|null $tagId 标签Id
    *
    * @return $this
    */
    public function setTagId($tagId)
    {
        $this->container['tagId'] = $tagId;
        return $this;
    }

    /**
    * Gets tagName
    *  标签名称
    *
    * @return string|null
    */
    public function getTagName()
    {
        return $this->container['tagName'];
    }

    /**
    * Sets tagName
    *
    * @param string|null $tagName 标签名称
    *
    * @return $this
    */
    public function setTagName($tagName)
    {
        $this->container['tagName'] = $tagName;
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

