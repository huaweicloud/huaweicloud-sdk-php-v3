<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWorkloadAccessTokenForUserIdResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWorkloadAccessTokenForUserIdResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadAccessToken  An opaque token representing the identity of both the workload and the user (or just the workload if not acting on behalf of a user)
    * expiration  The date and time on which the workload access token expire.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadAccessToken' => 'string',
            'expiration' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadAccessToken  An opaque token representing the identity of both the workload and the user (or just the workload if not acting on behalf of a user)
    * expiration  The date and time on which the workload access token expire.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadAccessToken' => null,
        'expiration' => 'date-time'
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
    * workloadAccessToken  An opaque token representing the identity of both the workload and the user (or just the workload if not acting on behalf of a user)
    * expiration  The date and time on which the workload access token expire.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadAccessToken' => 'workload_access_token',
            'expiration' => 'expiration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadAccessToken  An opaque token representing the identity of both the workload and the user (or just the workload if not acting on behalf of a user)
    * expiration  The date and time on which the workload access token expire.
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadAccessToken' => 'setWorkloadAccessToken',
            'expiration' => 'setExpiration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadAccessToken  An opaque token representing the identity of both the workload and the user (or just the workload if not acting on behalf of a user)
    * expiration  The date and time on which the workload access token expire.
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadAccessToken' => 'getWorkloadAccessToken',
            'expiration' => 'getExpiration'
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
        $this->container['workloadAccessToken'] = isset($data['workloadAccessToken']) ? $data['workloadAccessToken'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['workloadAccessToken']) && (mb_strlen($this->container['workloadAccessToken']) > 131072)) {
                $invalidProperties[] = "invalid value for 'workloadAccessToken', the character length must be smaller than or equal to 131072.";
            }
            if (!is_null($this->container['workloadAccessToken']) && (mb_strlen($this->container['workloadAccessToken']) < 1)) {
                $invalidProperties[] = "invalid value for 'workloadAccessToken', the character length must be bigger than or equal to 1.";
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
    * Gets workloadAccessToken
    *  An opaque token representing the identity of both the workload and the user (or just the workload if not acting on behalf of a user)
    *
    * @return string|null
    */
    public function getWorkloadAccessToken()
    {
        return $this->container['workloadAccessToken'];
    }

    /**
    * Sets workloadAccessToken
    *
    * @param string|null $workloadAccessToken An opaque token representing the identity of both the workload and the user (or just the workload if not acting on behalf of a user)
    *
    * @return $this
    */
    public function setWorkloadAccessToken($workloadAccessToken)
    {
        $this->container['workloadAccessToken'] = $workloadAccessToken;
        return $this;
    }

    /**
    * Gets expiration
    *  The date and time on which the workload access token expire.
    *
    * @return \DateTime|null
    */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
    * Sets expiration
    *
    * @param \DateTime|null $expiration The date and time on which the workload access token expire.
    *
    * @return $this
    */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;
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

