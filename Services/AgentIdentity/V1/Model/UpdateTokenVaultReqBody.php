<?php

namespace HuaweiCloud\SDK\AgentIdentity\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTokenVaultReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTokenVaultReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyEngineConfiguration  policyEngineConfiguration
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyEngineConfiguration' => '\HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineConfiguration'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyEngineConfiguration  policyEngineConfiguration
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyEngineConfiguration' => null
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
    * policyEngineConfiguration  policyEngineConfiguration
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyEngineConfiguration' => 'policy_engine_configuration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyEngineConfiguration  policyEngineConfiguration
    *
    * @var string[]
    */
    protected static $setters = [
            'policyEngineConfiguration' => 'setPolicyEngineConfiguration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyEngineConfiguration  policyEngineConfiguration
    *
    * @var string[]
    */
    protected static $getters = [
            'policyEngineConfiguration' => 'getPolicyEngineConfiguration'
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
        $this->container['policyEngineConfiguration'] = isset($data['policyEngineConfiguration']) ? $data['policyEngineConfiguration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyEngineConfiguration'] === null) {
            $invalidProperties[] = "'policyEngineConfiguration' can't be null";
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
    * Gets policyEngineConfiguration
    *  policyEngineConfiguration
    *
    * @return \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineConfiguration
    */
    public function getPolicyEngineConfiguration()
    {
        return $this->container['policyEngineConfiguration'];
    }

    /**
    * Sets policyEngineConfiguration
    *
    * @param \HuaweiCloud\SDK\AgentIdentity\V1\Model\PolicyEngineConfiguration $policyEngineConfiguration policyEngineConfiguration
    *
    * @return $this
    */
    public function setPolicyEngineConfiguration($policyEngineConfiguration)
    {
        $this->container['policyEngineConfiguration'] = $policyEngineConfiguration;
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

