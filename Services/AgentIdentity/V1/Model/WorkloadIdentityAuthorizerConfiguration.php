<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadIdentityAuthorizerConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadIdentityAuthorizerConfiguration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadIdentityName  The name of the workload identity.
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadIdentityName' => 'string',
            'authorizerType' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerType',
            'authorizerConfiguration' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerConfiguration'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadIdentityName  The name of the workload identity.
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadIdentityName' => null,
        'authorizerType' => null,
        'authorizerConfiguration' => null
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
    * workloadIdentityName  The name of the workload identity.
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadIdentityName' => 'workload_identity_name',
            'authorizerType' => 'authorizer_type',
            'authorizerConfiguration' => 'authorizer_configuration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadIdentityName  The name of the workload identity.
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadIdentityName' => 'setWorkloadIdentityName',
            'authorizerType' => 'setAuthorizerType',
            'authorizerConfiguration' => 'setAuthorizerConfiguration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadIdentityName  The name of the workload identity.
    * authorizerType  authorizerType
    * authorizerConfiguration  authorizerConfiguration
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadIdentityName' => 'getWorkloadIdentityName',
            'authorizerType' => 'getAuthorizerType',
            'authorizerConfiguration' => 'getAuthorizerConfiguration'
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
        $this->container['workloadIdentityName'] = isset($data['workloadIdentityName']) ? $data['workloadIdentityName'] : null;
        $this->container['authorizerType'] = isset($data['authorizerType']) ? $data['authorizerType'] : null;
        $this->container['authorizerConfiguration'] = isset($data['authorizerConfiguration']) ? $data['authorizerConfiguration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workloadIdentityName'] === null) {
            $invalidProperties[] = "'workloadIdentityName' can't be null";
        }
            if ((mb_strlen($this->container['workloadIdentityName']) > 56)) {
                $invalidProperties[] = "invalid value for 'workloadIdentityName', the character length must be smaller than or equal to 56.";
            }
            if ((mb_strlen($this->container['workloadIdentityName']) < 1)) {
                $invalidProperties[] = "invalid value for 'workloadIdentityName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,56}$/", $this->container['workloadIdentityName'])) {
                $invalidProperties[] = "invalid value for 'workloadIdentityName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,56}$/.";
            }
        if ($this->container['authorizerType'] === null) {
            $invalidProperties[] = "'authorizerType' can't be null";
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
    * Gets workloadIdentityName
    *  The name of the workload identity.
    *
    * @return string
    */
    public function getWorkloadIdentityName()
    {
        return $this->container['workloadIdentityName'];
    }

    /**
    * Sets workloadIdentityName
    *
    * @param string $workloadIdentityName The name of the workload identity.
    *
    * @return $this
    */
    public function setWorkloadIdentityName($workloadIdentityName)
    {
        $this->container['workloadIdentityName'] = $workloadIdentityName;
        return $this;
    }

    /**
    * Gets authorizerType
    *  authorizerType
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerType
    */
    public function getAuthorizerType()
    {
        return $this->container['authorizerType'];
    }

    /**
    * Sets authorizerType
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerType $authorizerType authorizerType
    *
    * @return $this
    */
    public function setAuthorizerType($authorizerType)
    {
        $this->container['authorizerType'] = $authorizerType;
        return $this;
    }

    /**
    * Gets authorizerConfiguration
    *  authorizerConfiguration
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerConfiguration|null
    */
    public function getAuthorizerConfiguration()
    {
        return $this->container['authorizerConfiguration'];
    }

    /**
    * Sets authorizerConfiguration
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\AuthorizerConfiguration|null $authorizerConfiguration authorizerConfiguration
    *
    * @return $this
    */
    public function setAuthorizerConfiguration($authorizerConfiguration)
    {
        $this->container['authorizerConfiguration'] = $authorizerConfiguration;
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

