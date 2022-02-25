<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeTypeExtraSpecs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeTypeExtraSpecs';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reskeYavailabilityZones  支持当前云硬盘类型的可用区列表，列表的元素以逗号分隔。
    * availabilityZone  预留属性。
    * osVendorExtendedsoldOutAvailabilityZones  当前云硬盘类型已售罄的可用区列表，列表的元素以逗号分隔。
    * volumeBackendName  预留属性。
    * hWavailabilityZone  预留属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reskeYavailabilityZones' => 'string',
            'availabilityZone' => 'string',
            'osVendorExtendedsoldOutAvailabilityZones' => 'string',
            'volumeBackendName' => 'string',
            'hWavailabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reskeYavailabilityZones  支持当前云硬盘类型的可用区列表，列表的元素以逗号分隔。
    * availabilityZone  预留属性。
    * osVendorExtendedsoldOutAvailabilityZones  当前云硬盘类型已售罄的可用区列表，列表的元素以逗号分隔。
    * volumeBackendName  预留属性。
    * hWavailabilityZone  预留属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reskeYavailabilityZones' => null,
        'availabilityZone' => null,
        'osVendorExtendedsoldOutAvailabilityZones' => null,
        'volumeBackendName' => null,
        'hWavailabilityZone' => null
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
    * reskeYavailabilityZones  支持当前云硬盘类型的可用区列表，列表的元素以逗号分隔。
    * availabilityZone  预留属性。
    * osVendorExtendedsoldOutAvailabilityZones  当前云硬盘类型已售罄的可用区列表，列表的元素以逗号分隔。
    * volumeBackendName  预留属性。
    * hWavailabilityZone  预留属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reskeYavailabilityZones' => 'RESKEY:availability_zones',
            'availabilityZone' => 'availability-zone',
            'osVendorExtendedsoldOutAvailabilityZones' => 'os-vendor-extended:sold_out_availability_zones',
            'volumeBackendName' => 'volume_backend_name',
            'hWavailabilityZone' => 'HW:availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reskeYavailabilityZones  支持当前云硬盘类型的可用区列表，列表的元素以逗号分隔。
    * availabilityZone  预留属性。
    * osVendorExtendedsoldOutAvailabilityZones  当前云硬盘类型已售罄的可用区列表，列表的元素以逗号分隔。
    * volumeBackendName  预留属性。
    * hWavailabilityZone  预留属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'reskeYavailabilityZones' => 'setReskeYavailabilityZones',
            'availabilityZone' => 'setAvailabilityZone',
            'osVendorExtendedsoldOutAvailabilityZones' => 'setOsVendorExtendedsoldOutAvailabilityZones',
            'volumeBackendName' => 'setVolumeBackendName',
            'hWavailabilityZone' => 'setHWavailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reskeYavailabilityZones  支持当前云硬盘类型的可用区列表，列表的元素以逗号分隔。
    * availabilityZone  预留属性。
    * osVendorExtendedsoldOutAvailabilityZones  当前云硬盘类型已售罄的可用区列表，列表的元素以逗号分隔。
    * volumeBackendName  预留属性。
    * hWavailabilityZone  预留属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'reskeYavailabilityZones' => 'getReskeYavailabilityZones',
            'availabilityZone' => 'getAvailabilityZone',
            'osVendorExtendedsoldOutAvailabilityZones' => 'getOsVendorExtendedsoldOutAvailabilityZones',
            'volumeBackendName' => 'getVolumeBackendName',
            'hWavailabilityZone' => 'getHWavailabilityZone'
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
        $this->container['reskeYavailabilityZones'] = isset($data['reskeYavailabilityZones']) ? $data['reskeYavailabilityZones'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['osVendorExtendedsoldOutAvailabilityZones'] = isset($data['osVendorExtendedsoldOutAvailabilityZones']) ? $data['osVendorExtendedsoldOutAvailabilityZones'] : null;
        $this->container['volumeBackendName'] = isset($data['volumeBackendName']) ? $data['volumeBackendName'] : null;
        $this->container['hWavailabilityZone'] = isset($data['hWavailabilityZone']) ? $data['hWavailabilityZone'] : null;
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
    * Gets reskeYavailabilityZones
    *  支持当前云硬盘类型的可用区列表，列表的元素以逗号分隔。
    *
    * @return string|null
    */
    public function getReskeYavailabilityZones()
    {
        return $this->container['reskeYavailabilityZones'];
    }

    /**
    * Sets reskeYavailabilityZones
    *
    * @param string|null $reskeYavailabilityZones 支持当前云硬盘类型的可用区列表，列表的元素以逗号分隔。
    *
    * @return $this
    */
    public function setReskeYavailabilityZones($reskeYavailabilityZones)
    {
        $this->container['reskeYavailabilityZones'] = $reskeYavailabilityZones;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  预留属性。
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
    * @param string|null $availabilityZone 预留属性。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets osVendorExtendedsoldOutAvailabilityZones
    *  当前云硬盘类型已售罄的可用区列表，列表的元素以逗号分隔。
    *
    * @return string|null
    */
    public function getOsVendorExtendedsoldOutAvailabilityZones()
    {
        return $this->container['osVendorExtendedsoldOutAvailabilityZones'];
    }

    /**
    * Sets osVendorExtendedsoldOutAvailabilityZones
    *
    * @param string|null $osVendorExtendedsoldOutAvailabilityZones 当前云硬盘类型已售罄的可用区列表，列表的元素以逗号分隔。
    *
    * @return $this
    */
    public function setOsVendorExtendedsoldOutAvailabilityZones($osVendorExtendedsoldOutAvailabilityZones)
    {
        $this->container['osVendorExtendedsoldOutAvailabilityZones'] = $osVendorExtendedsoldOutAvailabilityZones;
        return $this;
    }

    /**
    * Gets volumeBackendName
    *  预留属性。
    *
    * @return string|null
    */
    public function getVolumeBackendName()
    {
        return $this->container['volumeBackendName'];
    }

    /**
    * Sets volumeBackendName
    *
    * @param string|null $volumeBackendName 预留属性。
    *
    * @return $this
    */
    public function setVolumeBackendName($volumeBackendName)
    {
        $this->container['volumeBackendName'] = $volumeBackendName;
        return $this;
    }

    /**
    * Gets hWavailabilityZone
    *  预留属性。
    *
    * @return string|null
    */
    public function getHWavailabilityZone()
    {
        return $this->container['hWavailabilityZone'];
    }

    /**
    * Sets hWavailabilityZone
    *
    * @param string|null $hWavailabilityZone 预留属性。
    *
    * @return $this
    */
    public function setHWavailabilityZone($hWavailabilityZone)
    {
        $this->container['hWavailabilityZone'] = $hWavailabilityZone;
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

