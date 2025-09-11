<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BareMetalModifyPortRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BareMetalModifyPortRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetId  subnetId
    * deviceOwner  deviceOwner
    * ipAddresses  ipAddresses
    * reverseBinding  reverseBinding
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetId' => 'string',
            'deviceOwner' => 'string',
            'ipAddresses' => 'string[]',
            'reverseBinding' => 'bool[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetId  subnetId
    * deviceOwner  deviceOwner
    * ipAddresses  ipAddresses
    * reverseBinding  reverseBinding
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetId' => null,
        'deviceOwner' => null,
        'ipAddresses' => null,
        'reverseBinding' => null
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
    * subnetId  subnetId
    * deviceOwner  deviceOwner
    * ipAddresses  ipAddresses
    * reverseBinding  reverseBinding
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetId' => 'subnet_id',
            'deviceOwner' => 'device_owner',
            'ipAddresses' => 'ip_addresses',
            'reverseBinding' => 'reverse_binding'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetId  subnetId
    * deviceOwner  deviceOwner
    * ipAddresses  ipAddresses
    * reverseBinding  reverseBinding
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetId' => 'setSubnetId',
            'deviceOwner' => 'setDeviceOwner',
            'ipAddresses' => 'setIpAddresses',
            'reverseBinding' => 'setReverseBinding'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetId  subnetId
    * deviceOwner  deviceOwner
    * ipAddresses  ipAddresses
    * reverseBinding  reverseBinding
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetId' => 'getSubnetId',
            'deviceOwner' => 'getDeviceOwner',
            'ipAddresses' => 'getIpAddresses',
            'reverseBinding' => 'getReverseBinding'
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['ipAddresses'] = isset($data['ipAddresses']) ? $data['ipAddresses'] : null;
        $this->container['reverseBinding'] = isset($data['reverseBinding']) ? $data['reverseBinding'] : null;
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
    * Gets subnetId
    *  subnetId
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId subnetId
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets deviceOwner
    *  deviceOwner
    *
    * @return string|null
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string|null $deviceOwner deviceOwner
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets ipAddresses
    *  ipAddresses
    *
    * @return string[]|null
    */
    public function getIpAddresses()
    {
        return $this->container['ipAddresses'];
    }

    /**
    * Sets ipAddresses
    *
    * @param string[]|null $ipAddresses ipAddresses
    *
    * @return $this
    */
    public function setIpAddresses($ipAddresses)
    {
        $this->container['ipAddresses'] = $ipAddresses;
        return $this;
    }

    /**
    * Gets reverseBinding
    *  reverseBinding
    *
    * @return bool[]|null
    */
    public function getReverseBinding()
    {
        return $this->container['reverseBinding'];
    }

    /**
    * Sets reverseBinding
    *
    * @param bool[]|null $reverseBinding reverseBinding
    *
    * @return $this
    */
    public function setReverseBinding($reverseBinding)
    {
        $this->container['reverseBinding'] = $reverseBinding;
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

