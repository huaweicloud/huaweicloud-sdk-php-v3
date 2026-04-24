<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiKeyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiKeyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * apiKey  The API key values. During rotation, any one of the keys can be used. If empty, a random string will be generated.
    * apiKeyName  The name of the API key.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'apiKey' => 'string',
            'apiKeyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * apiKey  The API key values. During rotation, any one of the keys can be used. If empty, a random string will be generated.
    * apiKeyName  The name of the API key.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'apiKey' => null,
        'apiKeyName' => null
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
    * apiKey  The API key values. During rotation, any one of the keys can be used. If empty, a random string will be generated.
    * apiKeyName  The name of the API key.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'apiKey' => 'api_key',
            'apiKeyName' => 'api_key_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * apiKey  The API key values. During rotation, any one of the keys can be used. If empty, a random string will be generated.
    * apiKeyName  The name of the API key.
    *
    * @var string[]
    */
    protected static $setters = [
            'apiKey' => 'setApiKey',
            'apiKeyName' => 'setApiKeyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * apiKey  The API key values. During rotation, any one of the keys can be used. If empty, a random string will be generated.
    * apiKeyName  The name of the API key.
    *
    * @var string[]
    */
    protected static $getters = [
            'apiKey' => 'getApiKey',
            'apiKeyName' => 'getApiKeyName'
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
        $this->container['apiKeyName'] = isset($data['apiKeyName']) ? $data['apiKeyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['apiKey'] === null) {
            $invalidProperties[] = "'apiKey' can't be null";
        }
            if ((mb_strlen($this->container['apiKey']) > 512)) {
                $invalidProperties[] = "invalid value for 'apiKey', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['apiKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'apiKey', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9\\-_]+$/", $this->container['apiKey'])) {
                $invalidProperties[] = "invalid value for 'apiKey', must be conform to the pattern /^[A-Za-z0-9\\-_]+$/.";
            }
            if (!is_null($this->container['apiKeyName']) && (mb_strlen($this->container['apiKeyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'apiKeyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['apiKeyName']) && !preg_match("/^[a-zA-Z0-9_-]{0,64}$/", $this->container['apiKeyName'])) {
                $invalidProperties[] = "invalid value for 'apiKeyName', must be conform to the pattern /^[a-zA-Z0-9_-]{0,64}$/.";
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
    *  The API key values. During rotation, any one of the keys can be used. If empty, a random string will be generated.
    *
    * @return string
    */
    public function getApiKey()
    {
        return $this->container['apiKey'];
    }

    /**
    * Sets apiKey
    *
    * @param string $apiKey The API key values. During rotation, any one of the keys can be used. If empty, a random string will be generated.
    *
    * @return $this
    */
    public function setApiKey($apiKey)
    {
        $this->container['apiKey'] = $apiKey;
        return $this;
    }

    /**
    * Gets apiKeyName
    *  The name of the API key.
    *
    * @return string|null
    */
    public function getApiKeyName()
    {
        return $this->container['apiKeyName'];
    }

    /**
    * Sets apiKeyName
    *
    * @param string|null $apiKeyName The name of the API key.
    *
    * @return $this
    */
    public function setApiKeyName($apiKeyName)
    {
        $this->container['apiKeyName'] = $apiKeyName;
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

