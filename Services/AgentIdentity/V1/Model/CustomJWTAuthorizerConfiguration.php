<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomJWTAuthorizerConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomJWTAuthorizerConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * allowedAudience  allowedAudience
    * allowedClients  allowedClients
    * allowedScopes  allowedScopes
    * customClaims  Custom claim validation rules applied to inbound JWTs.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'discoveryUrl' => 'string',
            'allowedAudience' => 'string[]',
            'allowedClients' => 'string[]',
            'allowedScopes' => 'string[]',
            'customClaims' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\CustomClaimValidation[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * allowedAudience  allowedAudience
    * allowedClients  allowedClients
    * allowedScopes  allowedScopes
    * customClaims  Custom claim validation rules applied to inbound JWTs.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'discoveryUrl' => null,
        'allowedAudience' => null,
        'allowedClients' => null,
        'allowedScopes' => null,
        'customClaims' => null
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
    * allowedAudience  allowedAudience
    * allowedClients  allowedClients
    * allowedScopes  allowedScopes
    * customClaims  Custom claim validation rules applied to inbound JWTs.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'discoveryUrl' => 'discovery_url',
            'allowedAudience' => 'allowed_audience',
            'allowedClients' => 'allowed_clients',
            'allowedScopes' => 'allowed_scopes',
            'customClaims' => 'custom_claims'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * allowedAudience  allowedAudience
    * allowedClients  allowedClients
    * allowedScopes  allowedScopes
    * customClaims  Custom claim validation rules applied to inbound JWTs.
    *
    * @var string[]
    */
    protected static $setters = [
            'discoveryUrl' => 'setDiscoveryUrl',
            'allowedAudience' => 'setAllowedAudience',
            'allowedClients' => 'setAllowedClients',
            'allowedScopes' => 'setAllowedScopes',
            'customClaims' => 'setCustomClaims'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * discoveryUrl  This URL is used to fetch OpenID Connect configuration.
    * allowedAudience  allowedAudience
    * allowedClients  allowedClients
    * allowedScopes  allowedScopes
    * customClaims  Custom claim validation rules applied to inbound JWTs.
    *
    * @var string[]
    */
    protected static $getters = [
            'discoveryUrl' => 'getDiscoveryUrl',
            'allowedAudience' => 'getAllowedAudience',
            'allowedClients' => 'getAllowedClients',
            'allowedScopes' => 'getAllowedScopes',
            'customClaims' => 'getCustomClaims'
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
        $this->container['allowedAudience'] = isset($data['allowedAudience']) ? $data['allowedAudience'] : null;
        $this->container['allowedClients'] = isset($data['allowedClients']) ? $data['allowedClients'] : null;
        $this->container['allowedScopes'] = isset($data['allowedScopes']) ? $data['allowedScopes'] : null;
        $this->container['customClaims'] = isset($data['customClaims']) ? $data['customClaims'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['discoveryUrl'] === null) {
            $invalidProperties[] = "'discoveryUrl' can't be null";
        }
            if ((mb_strlen($this->container['discoveryUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'discoveryUrl', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['discoveryUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'discoveryUrl', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^https:\/\/.+\/\\.well-known\/openid-configuration$/", $this->container['discoveryUrl'])) {
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
    * @return string
    */
    public function getDiscoveryUrl()
    {
        return $this->container['discoveryUrl'];
    }

    /**
    * Sets discoveryUrl
    *
    * @param string $discoveryUrl This URL is used to fetch OpenID Connect configuration.
    *
    * @return $this
    */
    public function setDiscoveryUrl($discoveryUrl)
    {
        $this->container['discoveryUrl'] = $discoveryUrl;
        return $this;
    }

    /**
    * Gets allowedAudience
    *  allowedAudience
    *
    * @return string[]|null
    */
    public function getAllowedAudience()
    {
        return $this->container['allowedAudience'];
    }

    /**
    * Sets allowedAudience
    *
    * @param string[]|null $allowedAudience allowedAudience
    *
    * @return $this
    */
    public function setAllowedAudience($allowedAudience)
    {
        $this->container['allowedAudience'] = $allowedAudience;
        return $this;
    }

    /**
    * Gets allowedClients
    *  allowedClients
    *
    * @return string[]|null
    */
    public function getAllowedClients()
    {
        return $this->container['allowedClients'];
    }

    /**
    * Sets allowedClients
    *
    * @param string[]|null $allowedClients allowedClients
    *
    * @return $this
    */
    public function setAllowedClients($allowedClients)
    {
        $this->container['allowedClients'] = $allowedClients;
        return $this;
    }

    /**
    * Gets allowedScopes
    *  allowedScopes
    *
    * @return string[]|null
    */
    public function getAllowedScopes()
    {
        return $this->container['allowedScopes'];
    }

    /**
    * Sets allowedScopes
    *
    * @param string[]|null $allowedScopes allowedScopes
    *
    * @return $this
    */
    public function setAllowedScopes($allowedScopes)
    {
        $this->container['allowedScopes'] = $allowedScopes;
        return $this;
    }

    /**
    * Gets customClaims
    *  Custom claim validation rules applied to inbound JWTs.
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\CustomClaimValidation[]|null
    */
    public function getCustomClaims()
    {
        return $this->container['customClaims'];
    }

    /**
    * Sets customClaims
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\CustomClaimValidation[]|null $customClaims Custom claim validation rules applied to inbound JWTs.
    *
    * @return $this
    */
    public function setCustomClaims($customClaims)
    {
        $this->container['customClaims'] = $customClaims;
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

