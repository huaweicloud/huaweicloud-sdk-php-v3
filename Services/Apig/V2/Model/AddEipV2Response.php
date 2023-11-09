<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddEipV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddEipV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eipId  弹性公网IP编号
    * eipAddress  弹性公网IP
    * eipStatus  弹性公网IP状态
    * eipIpv6Address  弹性公网IP(IPV6)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eipId' => 'string',
            'eipAddress' => 'string',
            'eipStatus' => 'string',
            'eipIpv6Address' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eipId  弹性公网IP编号
    * eipAddress  弹性公网IP
    * eipStatus  弹性公网IP状态
    * eipIpv6Address  弹性公网IP(IPV6)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eipId' => null,
        'eipAddress' => null,
        'eipStatus' => null,
        'eipIpv6Address' => null
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
    * eipId  弹性公网IP编号
    * eipAddress  弹性公网IP
    * eipStatus  弹性公网IP状态
    * eipIpv6Address  弹性公网IP(IPV6)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eipId' => 'eip_id',
            'eipAddress' => 'eip_address',
            'eipStatus' => 'eip_status',
            'eipIpv6Address' => 'eip_ipv6_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eipId  弹性公网IP编号
    * eipAddress  弹性公网IP
    * eipStatus  弹性公网IP状态
    * eipIpv6Address  弹性公网IP(IPV6)
    *
    * @var string[]
    */
    protected static $setters = [
            'eipId' => 'setEipId',
            'eipAddress' => 'setEipAddress',
            'eipStatus' => 'setEipStatus',
            'eipIpv6Address' => 'setEipIpv6Address'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eipId  弹性公网IP编号
    * eipAddress  弹性公网IP
    * eipStatus  弹性公网IP状态
    * eipIpv6Address  弹性公网IP(IPV6)
    *
    * @var string[]
    */
    protected static $getters = [
            'eipId' => 'getEipId',
            'eipAddress' => 'getEipAddress',
            'eipStatus' => 'getEipStatus',
            'eipIpv6Address' => 'getEipIpv6Address'
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
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
        $this->container['eipAddress'] = isset($data['eipAddress']) ? $data['eipAddress'] : null;
        $this->container['eipStatus'] = isset($data['eipStatus']) ? $data['eipStatus'] : null;
        $this->container['eipIpv6Address'] = isset($data['eipIpv6Address']) ? $data['eipIpv6Address'] : null;
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
    * Gets eipId
    *  弹性公网IP编号
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId 弹性公网IP编号
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
        return $this;
    }

    /**
    * Gets eipAddress
    *  弹性公网IP
    *
    * @return string|null
    */
    public function getEipAddress()
    {
        return $this->container['eipAddress'];
    }

    /**
    * Sets eipAddress
    *
    * @param string|null $eipAddress 弹性公网IP
    *
    * @return $this
    */
    public function setEipAddress($eipAddress)
    {
        $this->container['eipAddress'] = $eipAddress;
        return $this;
    }

    /**
    * Gets eipStatus
    *  弹性公网IP状态
    *
    * @return string|null
    */
    public function getEipStatus()
    {
        return $this->container['eipStatus'];
    }

    /**
    * Sets eipStatus
    *
    * @param string|null $eipStatus 弹性公网IP状态
    *
    * @return $this
    */
    public function setEipStatus($eipStatus)
    {
        $this->container['eipStatus'] = $eipStatus;
        return $this;
    }

    /**
    * Gets eipIpv6Address
    *  弹性公网IP(IPV6)
    *
    * @return string|null
    */
    public function getEipIpv6Address()
    {
        return $this->container['eipIpv6Address'];
    }

    /**
    * Sets eipIpv6Address
    *
    * @param string|null $eipIpv6Address 弹性公网IP(IPV6)
    *
    * @return $this
    */
    public function setEipIpv6Address($eipIpv6Address)
    {
        $this->container['eipIpv6Address'] = $eipIpv6Address;
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

