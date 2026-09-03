<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdentityProviderListSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdentityProviderListSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identityProvider  Identity provider code.
    * displayName  Display name of the identity provider.
    * oauth2Discovery  oauth2Discovery
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identityProvider' => 'string',
            'displayName' => 'string',
            'oauth2Discovery' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2Discovery'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identityProvider  Identity provider code.
    * displayName  Display name of the identity provider.
    * oauth2Discovery  oauth2Discovery
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identityProvider' => null,
        'displayName' => null,
        'oauth2Discovery' => null
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
    * identityProvider  Identity provider code.
    * displayName  Display name of the identity provider.
    * oauth2Discovery  oauth2Discovery
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identityProvider' => 'identity_provider',
            'displayName' => 'display_name',
            'oauth2Discovery' => 'oauth2_discovery'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identityProvider  Identity provider code.
    * displayName  Display name of the identity provider.
    * oauth2Discovery  oauth2Discovery
    *
    * @var string[]
    */
    protected static $setters = [
            'identityProvider' => 'setIdentityProvider',
            'displayName' => 'setDisplayName',
            'oauth2Discovery' => 'setOauth2Discovery'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identityProvider  Identity provider code.
    * displayName  Display name of the identity provider.
    * oauth2Discovery  oauth2Discovery
    *
    * @var string[]
    */
    protected static $getters = [
            'identityProvider' => 'getIdentityProvider',
            'displayName' => 'getDisplayName',
            'oauth2Discovery' => 'getOauth2Discovery'
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
        $this->container['identityProvider'] = isset($data['identityProvider']) ? $data['identityProvider'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['oauth2Discovery'] = isset($data['oauth2Discovery']) ? $data['oauth2Discovery'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['identityProvider'] === null) {
            $invalidProperties[] = "'identityProvider' can't be null";
        }
            if ((mb_strlen($this->container['identityProvider']) > 64)) {
                $invalidProperties[] = "invalid value for 'identityProvider', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['identityProvider']) < 1)) {
                $invalidProperties[] = "invalid value for 'identityProvider', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['identityProvider'])) {
                $invalidProperties[] = "invalid value for 'identityProvider', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['oauth2Discovery'] === null) {
            $invalidProperties[] = "'oauth2Discovery' can't be null";
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
    * Gets identityProvider
    *  Identity provider code.
    *
    * @return string
    */
    public function getIdentityProvider()
    {
        return $this->container['identityProvider'];
    }

    /**
    * Sets identityProvider
    *
    * @param string $identityProvider Identity provider code.
    *
    * @return $this
    */
    public function setIdentityProvider($identityProvider)
    {
        $this->container['identityProvider'] = $identityProvider;
        return $this;
    }

    /**
    * Gets displayName
    *  Display name of the identity provider.
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName Display name of the identity provider.
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
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

