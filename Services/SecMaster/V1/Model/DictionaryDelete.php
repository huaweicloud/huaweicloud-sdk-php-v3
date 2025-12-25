<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DictionaryDelete implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DictionaryDelete';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dictId  字典id
    * dictKey  字典key
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dictId' => 'string',
            'dictKey' => 'string',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dictId  字典id
    * dictKey  字典key
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dictId' => null,
        'dictKey' => null,
        'language' => null
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
    * dictId  字典id
    * dictKey  字典key
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dictId' => 'dict_id',
            'dictKey' => 'dict_key',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dictId  字典id
    * dictKey  字典key
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $setters = [
            'dictId' => 'setDictId',
            'dictKey' => 'setDictKey',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dictId  字典id
    * dictKey  字典key
    * language  用户当前语言环境
    *
    * @var string[]
    */
    protected static $getters = [
            'dictId' => 'getDictId',
            'dictKey' => 'getDictKey',
            'language' => 'getLanguage'
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
        $this->container['dictId'] = isset($data['dictId']) ? $data['dictId'] : null;
        $this->container['dictKey'] = isset($data['dictKey']) ? $data['dictKey'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dictId'] === null) {
            $invalidProperties[] = "'dictId' can't be null";
        }
            if ((mb_strlen($this->container['dictId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dictId']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dictKey'] === null) {
            $invalidProperties[] = "'dictKey' can't be null";
        }
            if ((mb_strlen($this->container['dictKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'dictKey', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['dictKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'dictKey', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if ((mb_strlen($this->container['language']) > 6)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 6.";
            }
            if ((mb_strlen($this->container['language']) < 2)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 2.";
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
    * Gets dictId
    *  字典id
    *
    * @return string
    */
    public function getDictId()
    {
        return $this->container['dictId'];
    }

    /**
    * Sets dictId
    *
    * @param string $dictId 字典id
    *
    * @return $this
    */
    public function setDictId($dictId)
    {
        $this->container['dictId'] = $dictId;
        return $this;
    }

    /**
    * Gets dictKey
    *  字典key
    *
    * @return string
    */
    public function getDictKey()
    {
        return $this->container['dictKey'];
    }

    /**
    * Sets dictKey
    *
    * @param string $dictKey 字典key
    *
    * @return $this
    */
    public function setDictKey($dictKey)
    {
        $this->container['dictKey'] = $dictKey;
        return $this;
    }

    /**
    * Gets language
    *  用户当前语言环境
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language 用户当前语言环境
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

