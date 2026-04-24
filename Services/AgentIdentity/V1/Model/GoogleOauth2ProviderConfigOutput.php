<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GoogleOauth2ProviderConfigOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GoogleOauth2ProviderConfigOutput';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oauth2Discovery  oauth2Discovery
    * clientId  Client ID for OAuth2 application.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oauth2Discovery' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2Discovery',
            'clientId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oauth2Discovery  oauth2Discovery
    * clientId  Client ID for OAuth2 application.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oauth2Discovery' => null,
        'clientId' => null
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
    * oauth2Discovery  oauth2Discovery
    * clientId  Client ID for OAuth2 application.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oauth2Discovery' => 'oauth2_discovery',
            'clientId' => 'client_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oauth2Discovery  oauth2Discovery
    * clientId  Client ID for OAuth2 application.
    *
    * @var string[]
    */
    protected static $setters = [
            'oauth2Discovery' => 'setOauth2Discovery',
            'clientId' => 'setClientId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oauth2Discovery  oauth2Discovery
    * clientId  Client ID for OAuth2 application.
    *
    * @var string[]
    */
    protected static $getters = [
            'oauth2Discovery' => 'getOauth2Discovery',
            'clientId' => 'getClientId'
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
        $this->container['oauth2Discovery'] = isset($data['oauth2Discovery']) ? $data['oauth2Discovery'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['oauth2Discovery'] === null) {
            $invalidProperties[] = "'oauth2Discovery' can't be null";
        }
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) > 256)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be bigger than or equal to 1.";
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
    * Gets oauth2Discovery
    *  oauth2Discovery
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2Discovery
    */
    public function getOauth2Discovery()
    {
        return $this->container['oauth2Discovery'];
    }

    /**
    * Sets oauth2Discovery
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2Discovery $oauth2Discovery oauth2Discovery
    *
    * @return $this
    */
    public function setOauth2Discovery($oauth2Discovery)
    {
        $this->container['oauth2Discovery'] = $oauth2Discovery;
        return $this;
    }

    /**
    * Gets clientId
    *  Client ID for OAuth2 application.
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId Client ID for OAuth2 application.
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
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

