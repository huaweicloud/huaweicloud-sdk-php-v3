<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomParameter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomParameter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isPrivate  **参数解释：** 是否是私密参数。 **取值范围：** - true：私密参数。 - false：非私密参数。
    * key  **参数解释：** 自定义参数的key。 **取值范围：** 长度为[1~128]个字符。
    * value  **参数解释：** 自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isPrivate' => 'bool',
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isPrivate  **参数解释：** 是否是私密参数。 **取值范围：** - true：私密参数。 - false：非私密参数。
    * key  **参数解释：** 自定义参数的key。 **取值范围：** 长度为[1~128]个字符。
    * value  **参数解释：** 自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isPrivate' => null,
        'key' => null,
        'value' => null
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
    * isPrivate  **参数解释：** 是否是私密参数。 **取值范围：** - true：私密参数。 - false：非私密参数。
    * key  **参数解释：** 自定义参数的key。 **取值范围：** 长度为[1~128]个字符。
    * value  **参数解释：** 自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isPrivate' => 'isPrivate',
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isPrivate  **参数解释：** 是否是私密参数。 **取值范围：** - true：私密参数。 - false：非私密参数。
    * key  **参数解释：** 自定义参数的key。 **取值范围：** 长度为[1~128]个字符。
    * value  **参数解释：** 自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'isPrivate' => 'setIsPrivate',
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isPrivate  **参数解释：** 是否是私密参数。 **取值范围：** - true：私密参数。 - false：非私密参数。
    * key  **参数解释：** 自定义参数的key。 **取值范围：** 长度为[1~128]个字符。
    * value  **参数解释：** 自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'isPrivate' => 'getIsPrivate',
            'key' => 'getKey',
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
        $this->container['isPrivate'] = isset($data['isPrivate']) ? $data['isPrivate'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
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
    * Gets isPrivate
    *  **参数解释：** 是否是私密参数。 **取值范围：** - true：私密参数。 - false：非私密参数。
    *
    * @return bool|null
    */
    public function getIsPrivate()
    {
        return $this->container['isPrivate'];
    }

    /**
    * Sets isPrivate
    *
    * @param bool|null $isPrivate **参数解释：** 是否是私密参数。 **取值范围：** - true：私密参数。 - false：非私密参数。
    *
    * @return $this
    */
    public function setIsPrivate($isPrivate)
    {
        $this->container['isPrivate'] = $isPrivate;
        return $this;
    }

    /**
    * Gets key
    *  **参数解释：** 自定义参数的key。 **取值范围：** 长度为[1~128]个字符。
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
    * @param string|null $key **参数解释：** 自定义参数的key。 **取值范围：** 长度为[1~128]个字符。
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
    *  **参数解释：** 自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
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
    * @param string|null $value **参数解释：** 自定义参数的Value。 **取值范围：** 长度为[1~8192]个字符。
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

