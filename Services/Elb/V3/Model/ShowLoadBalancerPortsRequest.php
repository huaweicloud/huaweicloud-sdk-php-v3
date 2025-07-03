<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLoadBalancerPortsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLoadBalancerPortsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * loadbalancerId  负载均衡器ID。
    * portId  port id。  支持多值查询，查询条件格式：*port_id=xxx&port_id=xxx*。
    * ipAddress  ipv4 地址。  支持多值查询，查询条件格式：*ip_address=xxx&ip_address=xxx*。
    * ipv6Address  ipv6 地址。  支持多值查询，查询条件格式：*ipv6_address=xxx&ipv6_address=xxx*。
    * type  port类型。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * virsubnetId  虚拟网络id。  支持多值查询，查询条件格式：*virsubnet_id=xxx&virsubnet_id=xxx*。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'loadbalancerId' => 'string',
            'portId' => 'string[]',
            'ipAddress' => 'string[]',
            'ipv6Address' => 'string[]',
            'type' => 'string[]',
            'virsubnetId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * loadbalancerId  负载均衡器ID。
    * portId  port id。  支持多值查询，查询条件格式：*port_id=xxx&port_id=xxx*。
    * ipAddress  ipv4 地址。  支持多值查询，查询条件格式：*ip_address=xxx&ip_address=xxx*。
    * ipv6Address  ipv6 地址。  支持多值查询，查询条件格式：*ipv6_address=xxx&ipv6_address=xxx*。
    * type  port类型。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * virsubnetId  虚拟网络id。  支持多值查询，查询条件格式：*virsubnet_id=xxx&virsubnet_id=xxx*。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'loadbalancerId' => null,
        'portId' => null,
        'ipAddress' => null,
        'ipv6Address' => null,
        'type' => null,
        'virsubnetId' => null
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
    * loadbalancerId  负载均衡器ID。
    * portId  port id。  支持多值查询，查询条件格式：*port_id=xxx&port_id=xxx*。
    * ipAddress  ipv4 地址。  支持多值查询，查询条件格式：*ip_address=xxx&ip_address=xxx*。
    * ipv6Address  ipv6 地址。  支持多值查询，查询条件格式：*ipv6_address=xxx&ipv6_address=xxx*。
    * type  port类型。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * virsubnetId  虚拟网络id。  支持多值查询，查询条件格式：*virsubnet_id=xxx&virsubnet_id=xxx*。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'loadbalancerId' => 'loadbalancer_id',
            'portId' => 'port_id',
            'ipAddress' => 'ip_address',
            'ipv6Address' => 'ipv6_address',
            'type' => 'type',
            'virsubnetId' => 'virsubnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * loadbalancerId  负载均衡器ID。
    * portId  port id。  支持多值查询，查询条件格式：*port_id=xxx&port_id=xxx*。
    * ipAddress  ipv4 地址。  支持多值查询，查询条件格式：*ip_address=xxx&ip_address=xxx*。
    * ipv6Address  ipv6 地址。  支持多值查询，查询条件格式：*ipv6_address=xxx&ipv6_address=xxx*。
    * type  port类型。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * virsubnetId  虚拟网络id。  支持多值查询，查询条件格式：*virsubnet_id=xxx&virsubnet_id=xxx*。
    *
    * @var string[]
    */
    protected static $setters = [
            'loadbalancerId' => 'setLoadbalancerId',
            'portId' => 'setPortId',
            'ipAddress' => 'setIpAddress',
            'ipv6Address' => 'setIpv6Address',
            'type' => 'setType',
            'virsubnetId' => 'setVirsubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * loadbalancerId  负载均衡器ID。
    * portId  port id。  支持多值查询，查询条件格式：*port_id=xxx&port_id=xxx*。
    * ipAddress  ipv4 地址。  支持多值查询，查询条件格式：*ip_address=xxx&ip_address=xxx*。
    * ipv6Address  ipv6 地址。  支持多值查询，查询条件格式：*ipv6_address=xxx&ipv6_address=xxx*。
    * type  port类型。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    * virsubnetId  虚拟网络id。  支持多值查询，查询条件格式：*virsubnet_id=xxx&virsubnet_id=xxx*。
    *
    * @var string[]
    */
    protected static $getters = [
            'loadbalancerId' => 'getLoadbalancerId',
            'portId' => 'getPortId',
            'ipAddress' => 'getIpAddress',
            'ipv6Address' => 'getIpv6Address',
            'type' => 'getType',
            'virsubnetId' => 'getVirsubnetId'
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
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['ipv6Address'] = isset($data['ipv6Address']) ? $data['ipv6Address'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['loadbalancerId'] === null) {
            $invalidProperties[] = "'loadbalancerId' can't be null";
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
    * Gets loadbalancerId
    *  负载均衡器ID。
    *
    * @return string
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string $loadbalancerId 负载均衡器ID。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets portId
    *  port id。  支持多值查询，查询条件格式：*port_id=xxx&port_id=xxx*。
    *
    * @return string[]|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string[]|null $portId port id。  支持多值查询，查询条件格式：*port_id=xxx&port_id=xxx*。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  ipv4 地址。  支持多值查询，查询条件格式：*ip_address=xxx&ip_address=xxx*。
    *
    * @return string[]|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string[]|null $ipAddress ipv4 地址。  支持多值查询，查询条件格式：*ip_address=xxx&ip_address=xxx*。
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
    *  ipv6 地址。  支持多值查询，查询条件格式：*ipv6_address=xxx&ipv6_address=xxx*。
    *
    * @return string[]|null
    */
    public function getIpv6Address()
    {
        return $this->container['ipv6Address'];
    }

    /**
    * Sets ipv6Address
    *
    * @param string[]|null $ipv6Address ipv6 地址。  支持多值查询，查询条件格式：*ipv6_address=xxx&ipv6_address=xxx*。
    *
    * @return $this
    */
    public function setIpv6Address($ipv6Address)
    {
        $this->container['ipv6Address'] = $ipv6Address;
        return $this;
    }

    /**
    * Gets type
    *  port类型。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type port类型。  支持多值查询，查询条件格式：*type=xxx&type=xxx*。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  虚拟网络id。  支持多值查询，查询条件格式：*virsubnet_id=xxx&virsubnet_id=xxx*。
    *
    * @return string[]|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string[]|null $virsubnetId 虚拟网络id。  支持多值查询，查询条件格式：*virsubnet_id=xxx&virsubnet_id=xxx*。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
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

