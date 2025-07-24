<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkInterfaces implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkInterfaces';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * portId  网卡端口id
    * primary  是否是主网卡
    * ipAddresses  ipv4地址
    * ipv6Addresses  ipv6地址
    * subnetId  子网id
    * association  association
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'portId' => 'string',
            'primary' => 'bool',
            'ipAddresses' => 'string[]',
            'ipv6Addresses' => 'string[]',
            'subnetId' => 'string',
            'association' => '\HuaweiCloud\SDK\Ecs\V2\Model\Association'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * portId  网卡端口id
    * primary  是否是主网卡
    * ipAddresses  ipv4地址
    * ipv6Addresses  ipv6地址
    * subnetId  子网id
    * association  association
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'portId' => null,
        'primary' => null,
        'ipAddresses' => null,
        'ipv6Addresses' => null,
        'subnetId' => null,
        'association' => null
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
    * portId  网卡端口id
    * primary  是否是主网卡
    * ipAddresses  ipv4地址
    * ipv6Addresses  ipv6地址
    * subnetId  子网id
    * association  association
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'portId' => 'port_id',
            'primary' => 'primary',
            'ipAddresses' => 'ip_addresses',
            'ipv6Addresses' => 'ipv6_addresses',
            'subnetId' => 'subnet_id',
            'association' => 'association'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * portId  网卡端口id
    * primary  是否是主网卡
    * ipAddresses  ipv4地址
    * ipv6Addresses  ipv6地址
    * subnetId  子网id
    * association  association
    *
    * @var string[]
    */
    protected static $setters = [
            'portId' => 'setPortId',
            'primary' => 'setPrimary',
            'ipAddresses' => 'setIpAddresses',
            'ipv6Addresses' => 'setIpv6Addresses',
            'subnetId' => 'setSubnetId',
            'association' => 'setAssociation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * portId  网卡端口id
    * primary  是否是主网卡
    * ipAddresses  ipv4地址
    * ipv6Addresses  ipv6地址
    * subnetId  子网id
    * association  association
    *
    * @var string[]
    */
    protected static $getters = [
            'portId' => 'getPortId',
            'primary' => 'getPrimary',
            'ipAddresses' => 'getIpAddresses',
            'ipv6Addresses' => 'getIpv6Addresses',
            'subnetId' => 'getSubnetId',
            'association' => 'getAssociation'
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
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['ipAddresses'] = isset($data['ipAddresses']) ? $data['ipAddresses'] : null;
        $this->container['ipv6Addresses'] = isset($data['ipv6Addresses']) ? $data['ipv6Addresses'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['association'] = isset($data['association']) ? $data['association'] : null;
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
    * Gets portId
    *  网卡端口id
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId 网卡端口id
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets primary
    *  是否是主网卡
    *
    * @return bool|null
    */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
    * Sets primary
    *
    * @param bool|null $primary 是否是主网卡
    *
    * @return $this
    */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;
        return $this;
    }

    /**
    * Gets ipAddresses
    *  ipv4地址
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
    * @param string[]|null $ipAddresses ipv4地址
    *
    * @return $this
    */
    public function setIpAddresses($ipAddresses)
    {
        $this->container['ipAddresses'] = $ipAddresses;
        return $this;
    }

    /**
    * Gets ipv6Addresses
    *  ipv6地址
    *
    * @return string[]|null
    */
    public function getIpv6Addresses()
    {
        return $this->container['ipv6Addresses'];
    }

    /**
    * Sets ipv6Addresses
    *
    * @param string[]|null $ipv6Addresses ipv6地址
    *
    * @return $this
    */
    public function setIpv6Addresses($ipv6Addresses)
    {
        $this->container['ipv6Addresses'] = $ipv6Addresses;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网id
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
    * @param string|null $subnetId 子网id
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets association
    *  association
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\Association|null
    */
    public function getAssociation()
    {
        return $this->container['association'];
    }

    /**
    * Sets association
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\Association|null $association association
    *
    * @return $this
    */
    public function setAssociation($association)
    {
        $this->container['association'] = $association;
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

