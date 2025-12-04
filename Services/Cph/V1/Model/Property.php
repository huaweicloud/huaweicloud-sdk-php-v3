<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Property implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Property';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phoneId  云手机id，不超过32个字节。
    * property  云手机属性列表，为Json格式字符串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phoneId' => 'string',
            'property' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phoneId  云手机id，不超过32个字节。
    * property  云手机属性列表，为Json格式字符串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phoneId' => null,
        'property' => null
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
    * phoneId  云手机id，不超过32个字节。
    * property  云手机属性列表，为Json格式字符串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phoneId' => 'phone_id',
            'property' => 'property'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phoneId  云手机id，不超过32个字节。
    * property  云手机属性列表，为Json格式字符串。
    *
    * @var string[]
    */
    protected static $setters = [
            'phoneId' => 'setPhoneId',
            'property' => 'setProperty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phoneId  云手机id，不超过32个字节。
    * property  云手机属性列表，为Json格式字符串。
    *
    * @var string[]
    */
    protected static $getters = [
            'phoneId' => 'getPhoneId',
            'property' => 'getProperty'
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
        $this->container['phoneId'] = isset($data['phoneId']) ? $data['phoneId'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['phoneId'] === null) {
            $invalidProperties[] = "'phoneId' can't be null";
        }
            if ((mb_strlen($this->container['phoneId']) > 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['phoneId']) < 32)) {
                $invalidProperties[] = "invalid value for 'phoneId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['property'] === null) {
            $invalidProperties[] = "'property' can't be null";
        }
            if ((mb_strlen($this->container['property']) > 8096)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be smaller than or equal to 8096.";
            }
            if ((mb_strlen($this->container['property']) < 0)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be bigger than or equal to 0.";
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
    * Gets phoneId
    *  云手机id，不超过32个字节。
    *
    * @return string
    */
    public function getPhoneId()
    {
        return $this->container['phoneId'];
    }

    /**
    * Sets phoneId
    *
    * @param string $phoneId 云手机id，不超过32个字节。
    *
    * @return $this
    */
    public function setPhoneId($phoneId)
    {
        $this->container['phoneId'] = $phoneId;
        return $this;
    }

    /**
    * Gets property
    *  云手机属性列表，为Json格式字符串。
    *
    * @return string
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string $property 云手机属性列表，为Json格式字符串。
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
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

