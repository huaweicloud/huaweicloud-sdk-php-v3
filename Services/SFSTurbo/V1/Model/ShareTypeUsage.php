<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShareTypeUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShareTypeUsage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * capacity  capacity
    * bandwidth  bandwidth
    * quantity  quantity
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'capacity' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageCapacity',
            'bandwidth' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageBandwidth',
            'quantity' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageQuantity'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * capacity  capacity
    * bandwidth  bandwidth
    * quantity  quantity
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'capacity' => null,
        'bandwidth' => null,
        'quantity' => null
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
    * capacity  capacity
    * bandwidth  bandwidth
    * quantity  quantity
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'capacity' => 'capacity',
            'bandwidth' => 'bandwidth',
            'quantity' => 'quantity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * capacity  capacity
    * bandwidth  bandwidth
    * quantity  quantity
    *
    * @var string[]
    */
    protected static $setters = [
            'capacity' => 'setCapacity',
            'bandwidth' => 'setBandwidth',
            'quantity' => 'setQuantity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * capacity  capacity
    * bandwidth  bandwidth
    * quantity  quantity
    *
    * @var string[]
    */
    protected static $getters = [
            'capacity' => 'getCapacity',
            'bandwidth' => 'getBandwidth',
            'quantity' => 'getQuantity'
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
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
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
    * Gets capacity
    *  capacity
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageCapacity|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageCapacity|null $capacity capacity
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageBandwidth|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageBandwidth|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets quantity
    *  quantity
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageQuantity|null
    */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
    * Sets quantity
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypeUsageQuantity|null $quantity quantity
    *
    * @return $this
    */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;
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

