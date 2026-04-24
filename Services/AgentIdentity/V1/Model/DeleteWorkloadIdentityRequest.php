<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteWorkloadIdentityRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteWorkloadIdentityRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workloadIdentityName  The name of the workload identity.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workloadIdentityName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workloadIdentityName  The name of the workload identity.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workloadIdentityName' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workloadIdentityName' => 'workload_identity_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workloadIdentityName  The name of the workload identity.
    *
    * @var string[]
    */
    protected static $setters = [
            'workloadIdentityName' => 'setWorkloadIdentityName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workloadIdentityName  The name of the workload identity.
    *
    * @var string[]
    */
    protected static $getters = [
            'workloadIdentityName' => 'getWorkloadIdentityName'
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

