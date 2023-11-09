<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationProbes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationProbes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'livenessProbe' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentProbe',
            'readinessProbe' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentProbe'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'livenessProbe' => null,
        'readinessProbe' => null
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
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'livenessProbe' => 'livenessProbe',
            'readinessProbe' => 'readinessProbe'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    *
    * @var string[]
    */
    protected static $setters = [
            'livenessProbe' => 'setLivenessProbe',
            'readinessProbe' => 'setReadinessProbe'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * livenessProbe  livenessProbe
    * readinessProbe  readinessProbe
    *
    * @var string[]
    */
    protected static $getters = [
            'livenessProbe' => 'getLivenessProbe',
            'readinessProbe' => 'getReadinessProbe'
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
        $this->container['livenessProbe'] = isset($data['livenessProbe']) ? $data['livenessProbe'] : null;
        $this->container['readinessProbe'] = isset($data['readinessProbe']) ? $data['readinessProbe'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets livenessProbe
    *  livenessProbe
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentProbe|null
    */
    public function getLivenessProbe()
    {
        return $this->container['livenessProbe'];
    }

    /**
    * Sets livenessProbe
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentProbe|null $livenessProbe livenessProbe
    *
    * @return $this
    */
    public function setLivenessProbe($livenessProbe)
    {
        $this->container['livenessProbe'] = $livenessProbe;
        return $this;
    }

    /**
    * Gets readinessProbe
    *  readinessProbe
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentProbe|null
    */
    public function getReadinessProbe()
    {
        return $this->container['readinessProbe'];
    }

    /**
    * Sets readinessProbe
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentProbe|null $readinessProbe readinessProbe
    *
    * @return $this
    */
    public function setReadinessProbe($readinessProbe)
    {
        $this->container['readinessProbe'] = $readinessProbe;
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

