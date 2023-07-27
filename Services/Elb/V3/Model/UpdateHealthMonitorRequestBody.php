<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHealthMonitorRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHealthMonitorRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'healthmonitor' => '\HuaweiCloud\SDK\Elb\V3\Model\UpdateHealthMonitorOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'healthmonitor' => null
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
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'healthmonitor' => 'healthmonitor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $setters = [
            'healthmonitor' => 'setHealthmonitor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * healthmonitor  healthmonitor
    *
    * @var string[]
    */
    protected static $getters = [
            'healthmonitor' => 'getHealthmonitor'
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
        $this->container['healthmonitor'] = isset($data['healthmonitor']) ? $data['healthmonitor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['healthmonitor'] === null) {
            $invalidProperties[] = "'healthmonitor' can't be null";
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
    * Gets healthmonitor
    *  healthmonitor
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpdateHealthMonitorOption
    */
    public function getHealthmonitor()
    {
        return $this->container['healthmonitor'];
    }

    /**
    * Sets healthmonitor
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpdateHealthMonitorOption $healthmonitor healthmonitor
    *
    * @return $this
    */
    public function setHealthmonitor($healthmonitor)
    {
        $this->container['healthmonitor'] = $healthmonitor;
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

