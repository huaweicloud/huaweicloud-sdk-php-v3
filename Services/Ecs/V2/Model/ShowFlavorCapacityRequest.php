<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFlavorCapacityRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFlavorCapacityRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorId  flavorId
    * count  count
    * regionIds  regionIds
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorId' => 'string',
            'count' => 'string',
            'regionIds' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorId  flavorId
    * count  count
    * regionIds  regionIds
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorId' => null,
        'count' => null,
        'regionIds' => null
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
    * flavorId  flavorId
    * count  count
    * regionIds  regionIds
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorId' => 'flavor_id',
            'count' => 'count',
            'regionIds' => 'region_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorId  flavorId
    * count  count
    * regionIds  regionIds
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorId' => 'setFlavorId',
            'count' => 'setCount',
            'regionIds' => 'setRegionIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorId  flavorId
    * count  count
    * regionIds  regionIds
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorId' => 'getFlavorId',
            'count' => 'getCount',
            'regionIds' => 'getRegionIds'
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
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['regionIds'] = isset($data['regionIds']) ? $data['regionIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
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
    * Gets flavorId
    *  flavorId
    *
    * @return string
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string $flavorId flavorId
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets count
    *  count
    *
    * @return string|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param string|null $count count
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets regionIds
    *  regionIds
    *
    * @return string|null
    */
    public function getRegionIds()
    {
        return $this->container['regionIds'];
    }

    /**
    * Sets regionIds
    *
    * @param string|null $regionIds regionIds
    *
    * @return $this
    */
    public function setRegionIds($regionIds)
    {
        $this->container['regionIds'] = $regionIds;
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

