<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWorkloadAccessTokenForJwtRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWorkloadAccessTokenForJwtRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadName  The unique identifier for the registered workload
    * userToken  The OAuth 2.0 token issued by the user's identity provider
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadName' => 'string',
            'userToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadName  The unique identifier for the registered workload
    * userToken  The OAuth 2.0 token issued by the user's identity provider
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadName' => null,
        'userToken' => null
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
    * workloadName  The unique identifier for the registered workload
    * userToken  The OAuth 2.0 token issued by the user's identity provider
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadName' => 'workload_name',
            'userToken' => 'user_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadName  The unique identifier for the registered workload
    * userToken  The OAuth 2.0 token issued by the user's identity provider
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadName' => 'setWorkloadName',
            'userToken' => 'setUserToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadName  The unique identifier for the registered workload
    * userToken  The OAuth 2.0 token issued by the user's identity provider
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadName' => 'getWorkloadName',
            'userToken' => 'getUserToken'
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
        $this->container['workloadName'] = isset($data['workloadName']) ? $data['workloadName'] : null;
        $this->container['userToken'] = isset($data['userToken']) ? $data['userToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workloadName'] === null) {
            $invalidProperties[] = "'workloadName' can't be null";
        }
            if ((mb_strlen($this->container['workloadName']) > 56)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be smaller than or equal to 56.";
            }
            if ((mb_strlen($this->container['workloadName']) < 1)) {
                $invalidProperties[] = "invalid value for 'workloadName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,56}$/", $this->container['workloadName'])) {
                $invalidProperties[] = "invalid value for 'workloadName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,56}$/.";
            }
        if ($this->container['userToken'] === null) {
            $invalidProperties[] = "'userToken' can't be null";
        }
            if ((mb_strlen($this->container['userToken']) > 131072)) {
                $invalidProperties[] = "invalid value for 'userToken', the character length must be smaller than or equal to 131072.";
            }
            if ((mb_strlen($this->container['userToken']) < 1)) {
                $invalidProperties[] = "invalid value for 'userToken', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[A-Za-z0-9-_=]+\\.[A-Za-z0-9-_=]+\\.[A-Za-z0-9-_=]+$/", $this->container['userToken'])) {
                $invalidProperties[] = "invalid value for 'userToken', must be conform to the pattern /^[A-Za-z0-9-_=]+\\.[A-Za-z0-9-_=]+\\.[A-Za-z0-9-_=]+$/.";
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
    * Gets workloadName
    *  The unique identifier for the registered workload
    *
    * @return string
    */
    public function getWorkloadName()
    {
        return $this->container['workloadName'];
    }

    /**
    * Sets workloadName
    *
    * @param string $workloadName The unique identifier for the registered workload
    *
    * @return $this
    */
    public function setWorkloadName($workloadName)
    {
        $this->container['workloadName'] = $workloadName;
        return $this;
    }

    /**
    * Gets userToken
    *  The OAuth 2.0 token issued by the user's identity provider
    *
    * @return string
    */
    public function getUserToken()
    {
        return $this->container['userToken'];
    }

    /**
    * Sets userToken
    *
    * @param string $userToken The OAuth 2.0 token issued by the user's identity provider
    *
    * @return $this
    */
    public function setUserToken($userToken)
    {
        $this->container['userToken'] = $userToken;
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

