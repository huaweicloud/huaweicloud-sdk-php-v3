<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeServerNetworkInterfaceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeServerNetworkInterfaceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  网卡ID。
    * subnetId  子网ID。
    * ipAddress  网卡IPv4地址。
    * ipv6Address  网卡IPv6地址，未开通IPv6协议的网卡不返回该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'subnetId' => 'string',
            'ipAddress' => 'string',
            'ipv6Address' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  网卡ID。
    * subnetId  子网ID。
    * ipAddress  网卡IPv4地址。
    * ipv6Address  网卡IPv6地址，未开通IPv6协议的网卡不返回该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'subnetId' => null,
        'ipAddress' => null,
        'ipv6Address' => null
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
    * id  网卡ID。
    * subnetId  子网ID。
    * ipAddress  网卡IPv4地址。
    * ipv6Address  网卡IPv6地址，未开通IPv6协议的网卡不返回该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'subnetId' => 'subnet_id',
            'ipAddress' => 'ip_address',
            'ipv6Address' => 'ipv6_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  网卡ID。
    * subnetId  子网ID。
    * ipAddress  网卡IPv4地址。
    * ipv6Address  网卡IPv6地址，未开通IPv6协议的网卡不返回该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'subnetId' => 'setSubnetId',
            'ipAddress' => 'setIpAddress',
            'ipv6Address' => 'setIpv6Address'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  网卡ID。
    * subnetId  子网ID。
    * ipAddress  网卡IPv4地址。
    * ipv6Address  网卡IPv6地址，未开通IPv6协议的网卡不返回该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'subnetId' => 'getSubnetId',
            'ipAddress' => 'getIpAddress',
            'ipv6Address' => 'getIpv6Address'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['ipv6Address'] = isset($data['ipv6Address']) ? $data['ipv6Address'] : null;
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
    * Gets id
    *  网卡ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 网卡ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网ID。
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
    * @param string|null $subnetId 子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  网卡IPv4地址。
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress 网卡IPv4地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets ipv6Address
    *  网卡IPv6地址，未开通IPv6协议的网卡不返回该字段。
    *
    * @return string|null
    */
    public function getIpv6Address()
    {
        return $this->container['ipv6Address'];
    }

    /**
    * Sets ipv6Address
    *
    * @param string|null $ipv6Address 网卡IPv6地址，未开通IPv6协议的网卡不返回该字段。
    *
    * @return $this
    */
    public function setIpv6Address($ipv6Address)
    {
        $this->container['ipv6Address'] = $ipv6Address;
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

