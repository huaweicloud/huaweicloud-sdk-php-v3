<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsFavoriteItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsFavoriteItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isFavorite' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isFavorite' => null
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
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isFavorite' => 'is_favorite'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @var string[]
    */
    protected static $setters = [
            'isFavorite' => 'setIsFavorite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isFavorite  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @var string[]
    */
    protected static $getters = [
            'isFavorite' => 'getIsFavorite'
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
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
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
    * Gets isFavorite
    *  **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @return bool|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param bool|null $isFavorite **参数解释** 监控看板是否标记收藏 **取值范围** - true: 收藏, - false: 未收藏
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
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

