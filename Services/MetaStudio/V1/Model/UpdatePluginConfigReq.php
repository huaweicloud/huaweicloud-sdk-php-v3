<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePluginConfigReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePluginConfigReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiKey  密钥。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiKey  密钥。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiKey' => null
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
    * apiKey  密钥。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiKey' => 'api_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiKey  密钥。
    *
    * @var string[]
    */
    protected static $setters = [
            'apiKey' => 'setApiKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiKey  密钥。
    *
    * @var string[]
    */
    protected static $getters = [
            'apiKey' => 'getApiKey'
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
        $this->container['apiKey'] = isset($data['apiKey']) ? $data['apiKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['apiKey']) && (mb_strlen($this->container['apiKey']) > 256)) {
                $invalidProperties[] = "invalid value for 'apiKey', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['apiKey']) && (mb_strlen($this->container['apiKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'apiKey', the character length must be bigger than or equal to 0.";
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
    * Gets apiKey
    *  密钥。
    *
    * @return string|null
    */
    public function getApiKey()
    {
        return $this->container['apiKey'];
    }

    /**
    * Sets apiKey
    *
    * @param string|null $apiKey 密钥。
    *
    * @return $this
    */
    public function setApiKey($apiKey)
    {
        $this->container['apiKey'] = $apiKey;
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

