<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComputeFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComputeFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vcpus  cpu核数。
    * ram  内存大小，单位为GB。
    * specCode  规格码。
    * azStatus  可用区状态。
    * regionStatus  Region状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vcpus' => 'string',
            'ram' => 'string',
            'specCode' => 'string',
            'azStatus' => 'map[string,string]',
            'regionStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vcpus  cpu核数。
    * ram  内存大小，单位为GB。
    * specCode  规格码。
    * azStatus  可用区状态。
    * regionStatus  Region状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vcpus' => null,
        'ram' => null,
        'specCode' => null,
        'azStatus' => null,
        'regionStatus' => null
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
    * vcpus  cpu核数。
    * ram  内存大小，单位为GB。
    * specCode  规格码。
    * azStatus  可用区状态。
    * regionStatus  Region状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'specCode' => 'spec_code',
            'azStatus' => 'az_status',
            'regionStatus' => 'region_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vcpus  cpu核数。
    * ram  内存大小，单位为GB。
    * specCode  规格码。
    * azStatus  可用区状态。
    * regionStatus  Region状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'specCode' => 'setSpecCode',
            'azStatus' => 'setAzStatus',
            'regionStatus' => 'setRegionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vcpus  cpu核数。
    * ram  内存大小，单位为GB。
    * specCode  规格码。
    * azStatus  可用区状态。
    * regionStatus  Region状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'specCode' => 'getSpecCode',
            'azStatus' => 'getAzStatus',
            'regionStatus' => 'getRegionStatus'
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
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['regionStatus'] = isset($data['regionStatus']) ? $data['regionStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vcpus'] === null) {
            $invalidProperties[] = "'vcpus' can't be null";
        }
        if ($this->container['ram'] === null) {
            $invalidProperties[] = "'ram' can't be null";
        }
        if ($this->container['specCode'] === null) {
            $invalidProperties[] = "'specCode' can't be null";
        }
        if ($this->container['azStatus'] === null) {
            $invalidProperties[] = "'azStatus' can't be null";
        }
        if ($this->container['regionStatus'] === null) {
            $invalidProperties[] = "'regionStatus' can't be null";
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
    * Gets vcpus
    *  cpu核数。
    *
    * @return string
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string $vcpus cpu核数。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小，单位为GB。
    *
    * @return string
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string $ram 内存大小，单位为GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets specCode
    *  规格码。
    *
    * @return string
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string $specCode 规格码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets azStatus
    *  可用区状态。
    *
    * @return map[string,string]
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param map[string,string] $azStatus 可用区状态。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets regionStatus
    *  Region状态。
    *
    * @return string
    */
    public function getRegionStatus()
    {
        return $this->container['regionStatus'];
    }

    /**
    * Sets regionStatus
    *
    * @param string $regionStatus Region状态。
    *
    * @return $this
    */
    public function setRegionStatus($regionStatus)
    {
        $this->container['regionStatus'] = $regionStatus;
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

