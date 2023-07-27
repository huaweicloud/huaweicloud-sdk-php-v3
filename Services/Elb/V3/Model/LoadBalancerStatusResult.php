<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancerStatusResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancerStatusResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loadbalancer  loadbalancer
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loadbalancer' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loadbalancer  loadbalancer
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loadbalancer' => null
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
    * loadbalancer  loadbalancer
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loadbalancer' => 'loadbalancer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loadbalancer  loadbalancer
    *
    * @var string[]
    */
    protected static $setters = [
            'loadbalancer' => 'setLoadbalancer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loadbalancer  loadbalancer
    *
    * @var string[]
    */
    protected static $getters = [
            'loadbalancer' => 'getLoadbalancer'
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
        $this->container['loadbalancer'] = isset($data['loadbalancer']) ? $data['loadbalancer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['loadbalancer'] === null) {
            $invalidProperties[] = "'loadbalancer' can't be null";
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
    * Gets loadbalancer
    *  loadbalancer
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatus
    */
    public function getLoadbalancer()
    {
        return $this->container['loadbalancer'];
    }

    /**
    * Sets loadbalancer
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerStatus $loadbalancer loadbalancer
    *
    * @return $this
    */
    public function setLoadbalancer($loadbalancer)
    {
        $this->container['loadbalancer'] = $loadbalancer;
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

