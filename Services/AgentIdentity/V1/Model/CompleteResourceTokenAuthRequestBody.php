<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompleteResourceTokenAuthRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompleteResourceTokenAuthRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * userIdentifier  userIdentifier
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionUri' => 'string',
            'userIdentifier' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\UserIdentifier'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * userIdentifier  userIdentifier
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionUri' => null,
        'userIdentifier' => null
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
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * userIdentifier  userIdentifier
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionUri' => 'session_uri',
            'userIdentifier' => 'user_identifier'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * userIdentifier  userIdentifier
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionUri' => 'setSessionUri',
            'userIdentifier' => 'setUserIdentifier'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionUri  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    * userIdentifier  userIdentifier
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionUri' => 'getSessionUri',
            'userIdentifier' => 'getUserIdentifier'
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
        $this->container['sessionUri'] = isset($data['sessionUri']) ? $data['sessionUri'] : null;
        $this->container['userIdentifier'] = isset($data['userIdentifier']) ? $data['userIdentifier'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sessionUri'] === null) {
            $invalidProperties[] = "'sessionUri' can't be null";
        }
            if ((mb_strlen($this->container['sessionUri']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sessionUri', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['sessionUri']) < 1)) {
                $invalidProperties[] = "invalid value for 'sessionUri', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^urn:ietf:params:oauth:request_uri:[a-zA-Z0-9-._~]+$/", $this->container['sessionUri'])) {
                $invalidProperties[] = "invalid value for 'sessionUri', must be conform to the pattern /^urn:ietf:params:oauth:request_uri:[a-zA-Z0-9-._~]+$/.";
            }
        if ($this->container['userIdentifier'] === null) {
            $invalidProperties[] = "'userIdentifier' can't be null";
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
    * Gets sessionUri
    *  Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    *
    * @return string
    */
    public function getSessionUri()
    {
        return $this->container['sessionUri'];
    }

    /**
    * Sets sessionUri
    *
    * @param string $sessionUri Unique identifier for the user's authentication session (tracks OAuth2 flow state)
    *
    * @return $this
    */
    public function setSessionUri($sessionUri)
    {
        $this->container['sessionUri'] = $sessionUri;
        return $this;
    }

    /**
    * Gets userIdentifier
    *  userIdentifier
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\UserIdentifier
    */
    public function getUserIdentifier()
    {
        return $this->container['userIdentifier'];
    }

    /**
    * Sets userIdentifier
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\UserIdentifier $userIdentifier userIdentifier
    *
    * @return $this
    */
    public function setUserIdentifier($userIdentifier)
    {
        $this->container['userIdentifier'] = $userIdentifier;
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

