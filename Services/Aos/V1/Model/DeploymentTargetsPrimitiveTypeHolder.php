<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentTargetsPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeploymentTargetsPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deploymentTargets  deploymentTargets
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deploymentTargets' => '\HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargetsPrimitiveTypeHolderDeploymentTargets'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deploymentTargets  deploymentTargets
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deploymentTargets' => null
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
    * deploymentTargets  deploymentTargets
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deploymentTargets' => 'deployment_targets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deploymentTargets  deploymentTargets
    *
    * @var string[]
    */
    protected static $setters = [
            'deploymentTargets' => 'setDeploymentTargets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deploymentTargets  deploymentTargets
    *
    * @var string[]
    */
    protected static $getters = [
            'deploymentTargets' => 'getDeploymentTargets'
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
        $this->container['deploymentTargets'] = isset($data['deploymentTargets']) ? $data['deploymentTargets'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['deploymentTargets'] === null) {
            $invalidProperties[] = "'deploymentTargets' can't be null";
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
    * Gets deploymentTargets
    *  deploymentTargets
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargetsPrimitiveTypeHolderDeploymentTargets
    */
    public function getDeploymentTargets()
    {
        return $this->container['deploymentTargets'];
    }

    /**
    * Sets deploymentTargets
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\DeploymentTargetsPrimitiveTypeHolderDeploymentTargets $deploymentTargets deploymentTargets
    *
    * @return $this
    */
    public function setDeploymentTargets($deploymentTargets)
    {
        $this->container['deploymentTargets'] = $deploymentTargets;
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

