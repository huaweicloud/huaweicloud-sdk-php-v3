<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Subnet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Subnet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  子网ID
    * name  子网名字
    * ipv6Enable  是否是IPV6子网
    * cidr  子网的CIDR信息
    * cidrV6  IPV6子网的CIDR信息
    * gatewayIp  子网的网关
    * gatewayIpV6  IPV6子网的网关
    * availabilityZone  子网的可用区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'ipv6Enable' => 'bool',
            'cidr' => 'string',
            'cidrV6' => 'string',
            'gatewayIp' => 'string',
            'gatewayIpV6' => 'string',
            'availabilityZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  子网ID
    * name  子网名字
    * ipv6Enable  是否是IPV6子网
    * cidr  子网的CIDR信息
    * cidrV6  IPV6子网的CIDR信息
    * gatewayIp  子网的网关
    * gatewayIpV6  IPV6子网的网关
    * availabilityZone  子网的可用区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'ipv6Enable' => null,
        'cidr' => null,
        'cidrV6' => null,
        'gatewayIp' => null,
        'gatewayIpV6' => null,
        'availabilityZone' => null
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
    * id  子网ID
    * name  子网名字
    * ipv6Enable  是否是IPV6子网
    * cidr  子网的CIDR信息
    * cidrV6  IPV6子网的CIDR信息
    * gatewayIp  子网的网关
    * gatewayIpV6  IPV6子网的网关
    * availabilityZone  子网的可用区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'ipv6Enable' => 'ipv6_enable',
            'cidr' => 'cidr',
            'cidrV6' => 'cidr_v6',
            'gatewayIp' => 'gateway_ip',
            'gatewayIpV6' => 'gateway_ip_v6',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  子网ID
    * name  子网名字
    * ipv6Enable  是否是IPV6子网
    * cidr  子网的CIDR信息
    * cidrV6  IPV6子网的CIDR信息
    * gatewayIp  子网的网关
    * gatewayIpV6  IPV6子网的网关
    * availabilityZone  子网的可用区
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'ipv6Enable' => 'setIpv6Enable',
            'cidr' => 'setCidr',
            'cidrV6' => 'setCidrV6',
            'gatewayIp' => 'setGatewayIp',
            'gatewayIpV6' => 'setGatewayIpV6',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  子网ID
    * name  子网名字
    * ipv6Enable  是否是IPV6子网
    * cidr  子网的CIDR信息
    * cidrV6  IPV6子网的CIDR信息
    * gatewayIp  子网的网关
    * gatewayIpV6  IPV6子网的网关
    * availabilityZone  子网的可用区
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'ipv6Enable' => 'getIpv6Enable',
            'cidr' => 'getCidr',
            'cidrV6' => 'getCidrV6',
            'gatewayIp' => 'getGatewayIp',
            'gatewayIpV6' => 'getGatewayIpV6',
            'availabilityZone' => 'getAvailabilityZone'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['cidrV6'] = isset($data['cidrV6']) ? $data['cidrV6'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['gatewayIpV6'] = isset($data['gatewayIpV6']) ? $data['gatewayIpV6'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
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
    *  子网ID
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
    * @param string|null $id 子网ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  子网名字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 子网名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否是IPV6子网
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 是否是IPV6子网
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets cidr
    *  子网的CIDR信息
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 子网的CIDR信息
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets cidrV6
    *  IPV6子网的CIDR信息
    *
    * @return string|null
    */
    public function getCidrV6()
    {
        return $this->container['cidrV6'];
    }

    /**
    * Sets cidrV6
    *
    * @param string|null $cidrV6 IPV6子网的CIDR信息
    *
    * @return $this
    */
    public function setCidrV6($cidrV6)
    {
        $this->container['cidrV6'] = $cidrV6;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  子网的网关
    *
    * @return string|null
    */
    public function getGatewayIp()
    {
        return $this->container['gatewayIp'];
    }

    /**
    * Sets gatewayIp
    *
    * @param string|null $gatewayIp 子网的网关
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets gatewayIpV6
    *  IPV6子网的网关
    *
    * @return string|null
    */
    public function getGatewayIpV6()
    {
        return $this->container['gatewayIpV6'];
    }

    /**
    * Sets gatewayIpV6
    *
    * @param string|null $gatewayIpV6 IPV6子网的网关
    *
    * @return $this
    */
    public function setGatewayIpV6($gatewayIpV6)
    {
        $this->container['gatewayIpV6'] = $gatewayIpV6;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  子网的可用区
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
    * @param string|null $availabilityZone 子网的可用区
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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

