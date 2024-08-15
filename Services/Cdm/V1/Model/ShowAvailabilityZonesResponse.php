<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAvailabilityZonesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAvailabilityZonesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域ID。
    * defaultAz  默认可用区。
    * availableZones  可用区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'defaultAz' => 'string',
            'availableZones' => '\HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterAvailabilityZone[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域ID。
    * defaultAz  默认可用区。
    * availableZones  可用区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'defaultAz' => null,
        'availableZones' => null
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
    * regionId  区域ID。
    * defaultAz  默认可用区。
    * availableZones  可用区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'regionId',
            'defaultAz' => 'defaultAZ',
            'availableZones' => 'availableZones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域ID。
    * defaultAz  默认可用区。
    * availableZones  可用区。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'defaultAz' => 'setDefaultAz',
            'availableZones' => 'setAvailableZones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域ID。
    * defaultAz  默认可用区。
    * availableZones  可用区。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'defaultAz' => 'getDefaultAz',
            'availableZones' => 'getAvailableZones'
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
        $this->container['defaultAz'] = isset($data['defaultAz']) ? $data['defaultAz'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
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
    *  区域ID。
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
    * @param string|null $regionId 区域ID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets defaultAz
    *  默认可用区。
    *
    * @return string|null
    */
    public function getDefaultAz()
    {
        return $this->container['defaultAz'];
    }

    /**
    * Sets defaultAz
    *
    * @param string|null $defaultAz 默认可用区。
    *
    * @return $this
    */
    public function setDefaultAz($defaultAz)
    {
        $this->container['defaultAz'] = $defaultAz;
        return $this;
    }

    /**
    * Gets availableZones
    *  可用区。
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterAvailabilityZone[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterAvailabilityZone[]|null $availableZones 可用区。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
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

