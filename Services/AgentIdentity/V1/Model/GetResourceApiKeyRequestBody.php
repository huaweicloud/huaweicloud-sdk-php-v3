<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetResourceApiKeyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetResourceApiKeyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceCredentialProviderName  Name of the resource credential provider to retrieve API key from
    * workloadAccessToken  Identity token of the workload requesting the API key
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceCredentialProviderName' => 'string',
            'workloadAccessToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceCredentialProviderName  Name of the resource credential provider to retrieve API key from
    * workloadAccessToken  Identity token of the workload requesting the API key
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceCredentialProviderName' => null,
        'workloadAccessToken' => null
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
    * resourceCredentialProviderName  Name of the resource credential provider to retrieve API key from
    * workloadAccessToken  Identity token of the workload requesting the API key
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceCredentialProviderName' => 'resource_credential_provider_name',
            'workloadAccessToken' => 'workload_access_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceCredentialProviderName  Name of the resource credential provider to retrieve API key from
    * workloadAccessToken  Identity token of the workload requesting the API key
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceCredentialProviderName' => 'setResourceCredentialProviderName',
            'workloadAccessToken' => 'setWorkloadAccessToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceCredentialProviderName  Name of the resource credential provider to retrieve API key from
    * workloadAccessToken  Identity token of the workload requesting the API key
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceCredentialProviderName' => 'getResourceCredentialProviderName',
            'workloadAccessToken' => 'getWorkloadAccessToken'
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
        $this->container['resourceCredentialProviderName'] = isset($data['resourceCredentialProviderName']) ? $data['resourceCredentialProviderName'] : null;
        $this->container['workloadAccessToken'] = isset($data['workloadAccessToken']) ? $data['workloadAccessToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceCredentialProviderName'] === null) {
            $invalidProperties[] = "'resourceCredentialProviderName' can't be null";
        }
            if ((mb_strlen($this->container['resourceCredentialProviderName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceCredentialProviderName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['resourceCredentialProviderName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceCredentialProviderName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\-_]+$/", $this->container['resourceCredentialProviderName'])) {
                $invalidProperties[] = "invalid value for 'resourceCredentialProviderName', must be conform to the pattern /^[a-zA-Z0-9\\-_]+$/.";
            }
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
    * Gets resourceCredentialProviderName
    *  Name of the resource credential provider to retrieve API key from
    *
    * @return string
    */
    public function getResourceCredentialProviderName()
    {
        return $this->container['resourceCredentialProviderName'];
    }

    /**
    * Sets resourceCredentialProviderName
    *
    * @param string $resourceCredentialProviderName Name of the resource credential provider to retrieve API key from
    *
    * @return $this
    */
    public function setResourceCredentialProviderName($resourceCredentialProviderName)
    {
        $this->container['resourceCredentialProviderName'] = $resourceCredentialProviderName;
        return $this;
    }

    /**
    * Gets workloadAccessToken
    *  Identity token of the workload requesting the API key
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
    * @param string|null $workloadAccessToken Identity token of the workload requesting the API key
    *
    * @return $this
    */
    public function setWorkloadAccessToken($workloadAccessToken)
    {
        $this->container['workloadAccessToken'] = $workloadAccessToken;
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

