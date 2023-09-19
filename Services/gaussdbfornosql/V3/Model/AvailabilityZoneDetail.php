<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailabilityZoneDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailabilityZoneDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * primaryAvailabilityZone  主可用区，应为单可用区且和备可用区不同
    * secondaryAvailabilityZone  备可用区，应为单可用区且和主可用区不同
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'primaryAvailabilityZone' => 'string',
            'secondaryAvailabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * primaryAvailabilityZone  主可用区，应为单可用区且和备可用区不同
    * secondaryAvailabilityZone  备可用区，应为单可用区且和主可用区不同
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'primaryAvailabilityZone' => null,
        'secondaryAvailabilityZone' => null
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
    * primaryAvailabilityZone  主可用区，应为单可用区且和备可用区不同
    * secondaryAvailabilityZone  备可用区，应为单可用区且和主可用区不同
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'primaryAvailabilityZone' => 'primary_availability_zone',
            'secondaryAvailabilityZone' => 'secondary_availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * primaryAvailabilityZone  主可用区，应为单可用区且和备可用区不同
    * secondaryAvailabilityZone  备可用区，应为单可用区且和主可用区不同
    *
    * @var string[]
    */
    protected static $setters = [
            'primaryAvailabilityZone' => 'setPrimaryAvailabilityZone',
            'secondaryAvailabilityZone' => 'setSecondaryAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * primaryAvailabilityZone  主可用区，应为单可用区且和备可用区不同
    * secondaryAvailabilityZone  备可用区，应为单可用区且和主可用区不同
    *
    * @var string[]
    */
    protected static $getters = [
            'primaryAvailabilityZone' => 'getPrimaryAvailabilityZone',
            'secondaryAvailabilityZone' => 'getSecondaryAvailabilityZone'
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
        $this->container['primaryAvailabilityZone'] = isset($data['primaryAvailabilityZone']) ? $data['primaryAvailabilityZone'] : null;
        $this->container['secondaryAvailabilityZone'] = isset($data['secondaryAvailabilityZone']) ? $data['secondaryAvailabilityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['primaryAvailabilityZone'] === null) {
            $invalidProperties[] = "'primaryAvailabilityZone' can't be null";
        }
        if ($this->container['secondaryAvailabilityZone'] === null) {
            $invalidProperties[] = "'secondaryAvailabilityZone' can't be null";
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
    * Gets primaryAvailabilityZone
    *  主可用区，应为单可用区且和备可用区不同
    *
    * @return string
    */
    public function getPrimaryAvailabilityZone()
    {
        return $this->container['primaryAvailabilityZone'];
    }

    /**
    * Sets primaryAvailabilityZone
    *
    * @param string $primaryAvailabilityZone 主可用区，应为单可用区且和备可用区不同
    *
    * @return $this
    */
    public function setPrimaryAvailabilityZone($primaryAvailabilityZone)
    {
        $this->container['primaryAvailabilityZone'] = $primaryAvailabilityZone;
        return $this;
    }

    /**
    * Gets secondaryAvailabilityZone
    *  备可用区，应为单可用区且和主可用区不同
    *
    * @return string
    */
    public function getSecondaryAvailabilityZone()
    {
        return $this->container['secondaryAvailabilityZone'];
    }

    /**
    * Sets secondaryAvailabilityZone
    *
    * @param string $secondaryAvailabilityZone 备可用区，应为单可用区且和主可用区不同
    *
    * @return $this
    */
    public function setSecondaryAvailabilityZone($secondaryAvailabilityZone)
    {
        $this->container['secondaryAvailabilityZone'] = $secondaryAvailabilityZone;
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

