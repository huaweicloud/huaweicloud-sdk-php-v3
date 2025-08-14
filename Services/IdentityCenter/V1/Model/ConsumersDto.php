<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsumersDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsumersDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * binding  SAML传输协议
    * defaultValue  是否是默认接收方
    * location  SAML ACS Url
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'binding' => 'string',
            'defaultValue' => 'bool',
            'location' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * binding  SAML传输协议
    * defaultValue  是否是默认接收方
    * location  SAML ACS Url
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'binding' => null,
        'defaultValue' => null,
        'location' => null
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
    * binding  SAML传输协议
    * defaultValue  是否是默认接收方
    * location  SAML ACS Url
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'binding' => 'binding',
            'defaultValue' => 'default_value',
            'location' => 'location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * binding  SAML传输协议
    * defaultValue  是否是默认接收方
    * location  SAML ACS Url
    *
    * @var string[]
    */
    protected static $setters = [
            'binding' => 'setBinding',
            'defaultValue' => 'setDefaultValue',
            'location' => 'setLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * binding  SAML传输协议
    * defaultValue  是否是默认接收方
    * location  SAML ACS Url
    *
    * @var string[]
    */
    protected static $getters = [
            'binding' => 'getBinding',
            'defaultValue' => 'getDefaultValue',
            'location' => 'getLocation'
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
        $this->container['binding'] = isset($data['binding']) ? $data['binding'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['binding'] === null) {
            $invalidProperties[] = "'binding' can't be null";
        }
            if (!preg_match("/urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST/", $this->container['binding'])) {
                $invalidProperties[] = "invalid value for 'binding', must be conform to the pattern /urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST/.";
            }
        if ($this->container['defaultValue'] === null) {
            $invalidProperties[] = "'defaultValue' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
            if ((mb_strlen($this->container['location']) > 512)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['location']) < 1)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^http(s)?:\\\/\\\/[-a-zA-Z0-9+&@#\\\/%?=~_|!:,.;]*[-a-zA-Z0-9+&bb@#\\\/%?=~_|]/", $this->container['location'])) {
                $invalidProperties[] = "invalid value for 'location', must be conform to the pattern /^http(s)?:\\\/\\\/[-a-zA-Z0-9+&@#\\\/%?=~_|!:,.;]*[-a-zA-Z0-9+&bb@#\\\/%?=~_|]/.";
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
    * Gets binding
    *  SAML传输协议
    *
    * @return string
    */
    public function getBinding()
    {
        return $this->container['binding'];
    }

    /**
    * Sets binding
    *
    * @param string $binding SAML传输协议
    *
    * @return $this
    */
    public function setBinding($binding)
    {
        $this->container['binding'] = $binding;
        return $this;
    }

    /**
    * Gets defaultValue
    *  是否是默认接收方
    *
    * @return bool
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param bool $defaultValue 是否是默认接收方
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets location
    *  SAML ACS Url
    *
    * @return string
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string $location SAML ACS Url
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
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

