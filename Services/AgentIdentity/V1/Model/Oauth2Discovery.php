<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Oauth2Discovery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Oauth2Discovery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * authorizationServerMetadata  authorizationServerMetadata
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discoveryUrl' => 'string',
            'authorizationServerMetadata' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2AuthorizationServerMetadata'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * authorizationServerMetadata  authorizationServerMetadata
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discoveryUrl' => null,
        'authorizationServerMetadata' => null
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
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * authorizationServerMetadata  authorizationServerMetadata
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discoveryUrl' => 'discovery_url',
            'authorizationServerMetadata' => 'authorization_server_metadata'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * authorizationServerMetadata  authorizationServerMetadata
    *
    * @var string[]
    */
    protected static $setters = [
            'discoveryUrl' => 'setDiscoveryUrl',
            'authorizationServerMetadata' => 'setAuthorizationServerMetadata'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * authorizationServerMetadata  authorizationServerMetadata
    *
    * @var string[]
    */
    protected static $getters = [
            'discoveryUrl' => 'getDiscoveryUrl',
            'authorizationServerMetadata' => 'getAuthorizationServerMetadata'
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
        $this->container['discoveryUrl'] = isset($data['discoveryUrl']) ? $data['discoveryUrl'] : null;
        $this->container['authorizationServerMetadata'] = isset($data['authorizationServerMetadata']) ? $data['authorizationServerMetadata'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['discoveryUrl']) && (mb_strlen($this->container['discoveryUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'discoveryUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['discoveryUrl']) && (mb_strlen($this->container['discoveryUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'discoveryUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['discoveryUrl']) && !preg_match("/^https:\/\/.+\/\\.well-known\/openid-configuration$/", $this->container['discoveryUrl'])) {
                $invalidProperties[] = "invalid value for 'discoveryUrl', must be conform to the pattern /^https:\/\/.+\/\\.well-known\/openid-configuration$/.";
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
    * Gets discoveryUrl
    *  This URL is used to fetch OpenID Connect configuration.
    *
    * @return string|null
    */
    public function getDiscoveryUrl()
    {
        return $this->container['discoveryUrl'];
    }

    /**
    * Sets discoveryUrl
    *
    * @param string|null $discoveryUrl This URL is used to fetch OpenID Connect configuration.
    *
    * @return $this
    */
    public function setDiscoveryUrl($discoveryUrl)
    {
        $this->container['discoveryUrl'] = $discoveryUrl;
        return $this;
    }

    /**
    * Gets authorizationServerMetadata
    *  authorizationServerMetadata
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2AuthorizationServerMetadata|null
    */
    public function getAuthorizationServerMetadata()
    {
        return $this->container['authorizationServerMetadata'];
    }

    /**
    * Sets authorizationServerMetadata
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\Oauth2AuthorizationServerMetadata|null $authorizationServerMetadata authorizationServerMetadata
    *
    * @return $this
    */
    public function setAuthorizationServerMetadata($authorizationServerMetadata)
    {
        $this->container['authorizationServerMetadata'] = $authorizationServerMetadata;
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

