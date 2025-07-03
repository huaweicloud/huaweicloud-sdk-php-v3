<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LocalPort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LocalPort';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * portId  port ID。
    * ipAddress  port IPv4地址。
    * ipv6Address  port IPv6地址。
    * type  port 类型。  取值范围： - l4_hc：四层dnat转发时健康检查使用的地址。 - l4 四层fullnat 转发时健康检查及业务转发使用的地址。 - l7 七层健康检查及业务转发使用的地址。
    * virsubnetId  port 虚拟子网ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'portId' => 'string',
            'ipAddress' => 'string',
            'ipv6Address' => 'string',
            'type' => 'string',
            'virsubnetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * portId  port ID。
    * ipAddress  port IPv4地址。
    * ipv6Address  port IPv6地址。
    * type  port 类型。  取值范围： - l4_hc：四层dnat转发时健康检查使用的地址。 - l4 四层fullnat 转发时健康检查及业务转发使用的地址。 - l7 七层健康检查及业务转发使用的地址。
    * virsubnetId  port 虚拟子网ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * portId  port ID。
    * ipAddress  port IPv4地址。
    * ipv6Address  port IPv6地址。
    * type  port 类型。  取值范围： - l4_hc：四层dnat转发时健康检查使用的地址。 - l4 四层fullnat 转发时健康检查及业务转发使用的地址。 - l7 七层健康检查及业务转发使用的地址。
    * virsubnetId  port 虚拟子网ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'portId' => 'port_id',
            'ipAddress' => 'ip_address',
            'ipv6Address' => 'ipv6_address',
            'type' => 'type',
            'virsubnetId' => 'virsubnet_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * portId  port ID。
    * ipAddress  port IPv4地址。
    * ipv6Address  port IPv6地址。
    * type  port 类型。  取值范围： - l4_hc：四层dnat转发时健康检查使用的地址。 - l4 四层fullnat 转发时健康检查及业务转发使用的地址。 - l7 七层健康检查及业务转发使用的地址。
    * virsubnetId  port 虚拟子网ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'portId' => 'setPortId',
            'ipAddress' => 'setIpAddress',
            'ipv6Address' => 'setIpv6Address',
            'type' => 'setType',
            'virsubnetId' => 'setVirsubnetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * portId  port ID。
    * ipAddress  port IPv4地址。
    * ipv6Address  port IPv6地址。
    * type  port 类型。  取值范围： - l4_hc：四层dnat转发时健康检查使用的地址。 - l4 四层fullnat 转发时健康检查及业务转发使用的地址。 - l7 七层健康检查及业务转发使用的地址。
    * virsubnetId  port 虚拟子网ID。
    *
    * @var string[]
    */
    protected static $getters = [
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
    *  port ID。
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
    * @param string|null $portId port ID。
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
    *  port IPv4地址。
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
    * @param string|null $ipAddress port IPv4地址。
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
    *  port IPv6地址。
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
    * @param string|null $ipv6Address port IPv6地址。
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
    *  port 类型。  取值范围： - l4_hc：四层dnat转发时健康检查使用的地址。 - l4 四层fullnat 转发时健康检查及业务转发使用的地址。 - l7 七层健康检查及业务转发使用的地址。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type port 类型。  取值范围： - l4_hc：四层dnat转发时健康检查使用的地址。 - l4 四层fullnat 转发时健康检查及业务转发使用的地址。 - l7 七层健康检查及业务转发使用的地址。
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
    *  port 虚拟子网ID。
    *
    * @return string|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string|null $virsubnetId port 虚拟子网ID。
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

