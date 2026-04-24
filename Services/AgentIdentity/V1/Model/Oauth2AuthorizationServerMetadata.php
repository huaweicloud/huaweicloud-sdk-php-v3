<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Oauth2AuthorizationServerMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Oauth2AuthorizationServerMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorizationEndpoint  Authorization endpoint of the authorization server.
    * issuer  Issuer identifier of the authorization server.
    * tokenEndpoint  Token endpoint of the authorization server.
    * responseTypes  Supported response types.
    * tokenEndpointAuthMethods  Client authentication methods supported by the token endpoint.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorizationEndpoint' => 'string',
            'issuer' => 'string',
            'tokenEndpoint' => 'string',
            'responseTypes' => 'string[]',
            'tokenEndpointAuthMethods' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorizationEndpoint  Authorization endpoint of the authorization server.
    * issuer  Issuer identifier of the authorization server.
    * tokenEndpoint  Token endpoint of the authorization server.
    * responseTypes  Supported response types.
    * tokenEndpointAuthMethods  Client authentication methods supported by the token endpoint.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorizationEndpoint' => null,
        'issuer' => null,
        'tokenEndpoint' => null,
        'responseTypes' => null,
        'tokenEndpointAuthMethods' => null
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
    * authorizationEndpoint  Authorization endpoint of the authorization server.
    * issuer  Issuer identifier of the authorization server.
    * tokenEndpoint  Token endpoint of the authorization server.
    * responseTypes  Supported response types.
    * tokenEndpointAuthMethods  Client authentication methods supported by the token endpoint.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorizationEndpoint' => 'authorization_endpoint',
            'issuer' => 'issuer',
            'tokenEndpoint' => 'token_endpoint',
            'responseTypes' => 'response_types',
            'tokenEndpointAuthMethods' => 'token_endpoint_auth_methods'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorizationEndpoint  Authorization endpoint of the authorization server.
    * issuer  Issuer identifier of the authorization server.
    * tokenEndpoint  Token endpoint of the authorization server.
    * responseTypes  Supported response types.
    * tokenEndpointAuthMethods  Client authentication methods supported by the token endpoint.
    *
    * @var string[]
    */
    protected static $setters = [
            'authorizationEndpoint' => 'setAuthorizationEndpoint',
            'issuer' => 'setIssuer',
            'tokenEndpoint' => 'setTokenEndpoint',
            'responseTypes' => 'setResponseTypes',
            'tokenEndpointAuthMethods' => 'setTokenEndpointAuthMethods'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorizationEndpoint  Authorization endpoint of the authorization server.
    * issuer  Issuer identifier of the authorization server.
    * tokenEndpoint  Token endpoint of the authorization server.
    * responseTypes  Supported response types.
    * tokenEndpointAuthMethods  Client authentication methods supported by the token endpoint.
    *
    * @var string[]
    */
    protected static $getters = [
            'authorizationEndpoint' => 'getAuthorizationEndpoint',
            'issuer' => 'getIssuer',
            'tokenEndpoint' => 'getTokenEndpoint',
            'responseTypes' => 'getResponseTypes',
            'tokenEndpointAuthMethods' => 'getTokenEndpointAuthMethods'
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
        $this->container['authorizationEndpoint'] = isset($data['authorizationEndpoint']) ? $data['authorizationEndpoint'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['tokenEndpoint'] = isset($data['tokenEndpoint']) ? $data['tokenEndpoint'] : null;
        $this->container['responseTypes'] = isset($data['responseTypes']) ? $data['responseTypes'] : null;
        $this->container['tokenEndpointAuthMethods'] = isset($data['tokenEndpointAuthMethods']) ? $data['tokenEndpointAuthMethods'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['authorizationEndpoint'] === null) {
            $invalidProperties[] = "'authorizationEndpoint' can't be null";
        }
            if ((mb_strlen($this->container['authorizationEndpoint']) > 2048)) {
                $invalidProperties[] = "invalid value for 'authorizationEndpoint', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['authorizationEndpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorizationEndpoint', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^https:\/\/.+/", $this->container['authorizationEndpoint'])) {
                $invalidProperties[] = "invalid value for 'authorizationEndpoint', must be conform to the pattern /^https:\/\/.+/.";
            }
        if ($this->container['issuer'] === null) {
            $invalidProperties[] = "'issuer' can't be null";
        }
            if ((mb_strlen($this->container['issuer']) > 2048)) {
                $invalidProperties[] = "invalid value for 'issuer', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['issuer']) < 1)) {
                $invalidProperties[] = "invalid value for 'issuer', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^https:\/\/.+/", $this->container['issuer'])) {
                $invalidProperties[] = "invalid value for 'issuer', must be conform to the pattern /^https:\/\/.+/.";
            }
        if ($this->container['tokenEndpoint'] === null) {
            $invalidProperties[] = "'tokenEndpoint' can't be null";
        }
            if ((mb_strlen($this->container['tokenEndpoint']) > 2048)) {
                $invalidProperties[] = "invalid value for 'tokenEndpoint', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['tokenEndpoint']) < 1)) {
                $invalidProperties[] = "invalid value for 'tokenEndpoint', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^https:\/\/.+/", $this->container['tokenEndpoint'])) {
                $invalidProperties[] = "invalid value for 'tokenEndpoint', must be conform to the pattern /^https:\/\/.+/.";
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
    * Gets authorizationEndpoint
    *  Authorization endpoint of the authorization server.
    *
    * @return string
    */
    public function getAuthorizationEndpoint()
    {
        return $this->container['authorizationEndpoint'];
    }

    /**
    * Sets authorizationEndpoint
    *
    * @param string $authorizationEndpoint Authorization endpoint of the authorization server.
    *
    * @return $this
    */
    public function setAuthorizationEndpoint($authorizationEndpoint)
    {
        $this->container['authorizationEndpoint'] = $authorizationEndpoint;
        return $this;
    }

    /**
    * Gets issuer
    *  Issuer identifier of the authorization server.
    *
    * @return string
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string $issuer Issuer identifier of the authorization server.
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }

    /**
    * Gets tokenEndpoint
    *  Token endpoint of the authorization server.
    *
    * @return string
    */
    public function getTokenEndpoint()
    {
        return $this->container['tokenEndpoint'];
    }

    /**
    * Sets tokenEndpoint
    *
    * @param string $tokenEndpoint Token endpoint of the authorization server.
    *
    * @return $this
    */
    public function setTokenEndpoint($tokenEndpoint)
    {
        $this->container['tokenEndpoint'] = $tokenEndpoint;
        return $this;
    }

    /**
    * Gets responseTypes
    *  Supported response types.
    *
    * @return string[]|null
    */
    public function getResponseTypes()
    {
        return $this->container['responseTypes'];
    }

    /**
    * Sets responseTypes
    *
    * @param string[]|null $responseTypes Supported response types.
    *
    * @return $this
    */
    public function setResponseTypes($responseTypes)
    {
        $this->container['responseTypes'] = $responseTypes;
        return $this;
    }

    /**
    * Gets tokenEndpointAuthMethods
    *  Client authentication methods supported by the token endpoint.
    *
    * @return string[]|null
    */
    public function getTokenEndpointAuthMethods()
    {
        return $this->container['tokenEndpointAuthMethods'];
    }

    /**
    * Sets tokenEndpointAuthMethods
    *
    * @param string[]|null $tokenEndpointAuthMethods Client authentication methods supported by the token endpoint.
    *
    * @return $this
    */
    public function setTokenEndpointAuthMethods($tokenEndpointAuthMethods)
    {
        $this->container['tokenEndpointAuthMethods'] = $tokenEndpointAuthMethods;
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

