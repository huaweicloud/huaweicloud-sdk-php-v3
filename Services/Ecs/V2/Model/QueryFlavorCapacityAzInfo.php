<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryFlavorCapacityAzInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryFlavorCapacityAzInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  regionId
    * availabilityZone  availabilityZone
    * prefer  prefer
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'availabilityZone' => 'string',
            'prefer' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  regionId
    * availabilityZone  availabilityZone
    * prefer  prefer
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'availabilityZone' => null,
        'prefer' => null
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
    * regionId  regionId
    * availabilityZone  availabilityZone
    * prefer  prefer
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'availabilityZone' => 'availability_zone',
            'prefer' => 'prefer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  regionId
    * availabilityZone  availabilityZone
    * prefer  prefer
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'availabilityZone' => 'setAvailabilityZone',
            'prefer' => 'setPrefer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  regionId
    * availabilityZone  availabilityZone
    * prefer  prefer
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'availabilityZone' => 'getAvailabilityZone',
            'prefer' => 'getPrefer'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['prefer'] = isset($data['prefer']) ? $data['prefer'] : null;
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
    * Gets regionId
    *  regionId
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId regionId
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  availabilityZone
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone availabilityZone
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets prefer
    *  prefer
    *
    * @return bool|null
    */
    public function getPrefer()
    {
        return $this->container['prefer'];
    }

    /**
    * Sets prefer
    *
    * @param bool|null $prefer prefer
    *
    * @return $this
    */
    public function setPrefer($prefer)
    {
        $this->container['prefer'] = $prefer;
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

