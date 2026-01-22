<?php

namespace HuaweiCloud\SDK\Sts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DecodeAuthorizationMessageReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DecodeAuthorizationMessageReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * encodedMessage  加密的鉴权失败原因，字符串长度范围[1,10240]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'encodedMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * encodedMessage  加密的鉴权失败原因，字符串长度范围[1,10240]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'encodedMessage' => null
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
    * encodedMessage  加密的鉴权失败原因，字符串长度范围[1,10240]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'encodedMessage' => 'encoded_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * encodedMessage  加密的鉴权失败原因，字符串长度范围[1,10240]。
    *
    * @var string[]
    */
    protected static $setters = [
            'encodedMessage' => 'setEncodedMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * encodedMessage  加密的鉴权失败原因，字符串长度范围[1,10240]。
    *
    * @var string[]
    */
    protected static $getters = [
            'encodedMessage' => 'getEncodedMessage'
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
        $this->container['encodedMessage'] = isset($data['encodedMessage']) ? $data['encodedMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['encodedMessage'] === null) {
            $invalidProperties[] = "'encodedMessage' can't be null";
        }
            if ((mb_strlen($this->container['encodedMessage']) > 10240)) {
                $invalidProperties[] = "invalid value for 'encodedMessage', the character length must be smaller than or equal to 10240.";
            }
            if ((mb_strlen($this->container['encodedMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'encodedMessage', the character length must be bigger than or equal to 1.";
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
    * Gets encodedMessage
    *  加密的鉴权失败原因，字符串长度范围[1,10240]。
    *
    * @return string
    */
    public function getEncodedMessage()
    {
        return $this->container['encodedMessage'];
    }

    /**
    * Sets encodedMessage
    *
    * @param string $encodedMessage 加密的鉴权失败原因，字符串长度范围[1,10240]。
    *
    * @return $this
    */
    public function setEncodedMessage($encodedMessage)
    {
        $this->container['encodedMessage'] = $encodedMessage;
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

