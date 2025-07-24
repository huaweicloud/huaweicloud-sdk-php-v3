<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShareTypesAttribution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShareTypesAttribution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * capacity  capacity
    * bandwidth  bandwidth
    * iops  iops
    * singleChannel4kLatency  singleChannel4kLatency
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'capacity' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionCapacity',
            'bandwidth' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionBandwidth',
            'iops' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionIops',
            'singleChannel4kLatency' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionSingleChannel4KLatency'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * capacity  capacity
    * bandwidth  bandwidth
    * iops  iops
    * singleChannel4kLatency  singleChannel4kLatency
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'capacity' => null,
        'bandwidth' => null,
        'iops' => null,
        'singleChannel4kLatency' => null
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
    * iops  iops
    * singleChannel4kLatency  singleChannel4kLatency
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'capacity' => 'capacity',
            'bandwidth' => 'bandwidth',
            'iops' => 'iops',
            'singleChannel4kLatency' => 'single_channel_4k_latency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * capacity  capacity
    * bandwidth  bandwidth
    * iops  iops
    * singleChannel4kLatency  singleChannel4kLatency
    *
    * @var string[]
    */
    protected static $setters = [
            'capacity' => 'setCapacity',
            'bandwidth' => 'setBandwidth',
            'iops' => 'setIops',
            'singleChannel4kLatency' => 'setSingleChannel4kLatency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * capacity  capacity
    * bandwidth  bandwidth
    * iops  iops
    * singleChannel4kLatency  singleChannel4kLatency
    *
    * @var string[]
    */
    protected static $getters = [
            'capacity' => 'getCapacity',
            'bandwidth' => 'getBandwidth',
            'iops' => 'getIops',
            'singleChannel4kLatency' => 'getSingleChannel4kLatency'
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
        $this->container['iops'] = isset($data['iops']) ? $data['iops'] : null;
        $this->container['singleChannel4kLatency'] = isset($data['singleChannel4kLatency']) ? $data['singleChannel4kLatency'] : null;
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
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionCapacity|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionCapacity|null $capacity capacity
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
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionBandwidth|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionBandwidth|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets iops
    *  iops
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionIops|null
    */
    public function getIops()
    {
        return $this->container['iops'];
    }

    /**
    * Sets iops
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionIops|null $iops iops
    *
    * @return $this
    */
    public function setIops($iops)
    {
        $this->container['iops'] = $iops;
        return $this;
    }

    /**
    * Gets singleChannel4kLatency
    *  singleChannel4kLatency
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionSingleChannel4KLatency|null
    */
    public function getSingleChannel4kLatency()
    {
        return $this->container['singleChannel4kLatency'];
    }

    /**
    * Sets singleChannel4kLatency
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ShareTypesAttributionSingleChannel4KLatency|null $singleChannel4kLatency singleChannel4kLatency
    *
    * @return $this
    */
    public function setSingleChannel4kLatency($singleChannel4kLatency)
    {
        $this->container['singleChannel4kLatency'] = $singleChannel4kLatency;
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

