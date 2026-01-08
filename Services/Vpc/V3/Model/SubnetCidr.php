<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubnetCidr implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubnetCidr';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： OpenStack Neutron子网的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： OpenStack Neutron子网的IP版本。 **取值范围**： - 4：IPv4子网。 - 6：IPv6子网。
    * cidr  **参数解释**： OpenStack Neutron子网的IP网段。 **取值范围**： CIDR格式，如IPv4网段：192.168.23.0/24，IPv6网段：2420:2023:410:d5d::/64。
    * gatewayIp  **参数解释**： OpenStack Neutron子网的网关IP地址。 **取值范围**： 不涉及。
    * enableDhcp  **参数解释**： OpenStack Neutron子网是否开启DHCP功能。 **取值范围**： - true：开启DHCP功能。 - false：未开启DHCP功能。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ipVersion' => 'string',
            'cidr' => 'string',
            'gatewayIp' => 'string',
            'enableDhcp' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： OpenStack Neutron子网的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： OpenStack Neutron子网的IP版本。 **取值范围**： - 4：IPv4子网。 - 6：IPv6子网。
    * cidr  **参数解释**： OpenStack Neutron子网的IP网段。 **取值范围**： CIDR格式，如IPv4网段：192.168.23.0/24，IPv6网段：2420:2023:410:d5d::/64。
    * gatewayIp  **参数解释**： OpenStack Neutron子网的网关IP地址。 **取值范围**： 不涉及。
    * enableDhcp  **参数解释**： OpenStack Neutron子网是否开启DHCP功能。 **取值范围**： - true：开启DHCP功能。 - false：未开启DHCP功能。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ipVersion' => null,
        'cidr' => null,
        'gatewayIp' => null,
        'enableDhcp' => null
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
    * id  **参数解释**： OpenStack Neutron子网的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： OpenStack Neutron子网的IP版本。 **取值范围**： - 4：IPv4子网。 - 6：IPv6子网。
    * cidr  **参数解释**： OpenStack Neutron子网的IP网段。 **取值范围**： CIDR格式，如IPv4网段：192.168.23.0/24，IPv6网段：2420:2023:410:d5d::/64。
    * gatewayIp  **参数解释**： OpenStack Neutron子网的网关IP地址。 **取值范围**： 不涉及。
    * enableDhcp  **参数解释**： OpenStack Neutron子网是否开启DHCP功能。 **取值范围**： - true：开启DHCP功能。 - false：未开启DHCP功能。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ipVersion' => 'ip_version',
            'cidr' => 'cidr',
            'gatewayIp' => 'gateway_ip',
            'enableDhcp' => 'enable_dhcp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： OpenStack Neutron子网的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： OpenStack Neutron子网的IP版本。 **取值范围**： - 4：IPv4子网。 - 6：IPv6子网。
    * cidr  **参数解释**： OpenStack Neutron子网的IP网段。 **取值范围**： CIDR格式，如IPv4网段：192.168.23.0/24，IPv6网段：2420:2023:410:d5d::/64。
    * gatewayIp  **参数解释**： OpenStack Neutron子网的网关IP地址。 **取值范围**： 不涉及。
    * enableDhcp  **参数解释**： OpenStack Neutron子网是否开启DHCP功能。 **取值范围**： - true：开启DHCP功能。 - false：未开启DHCP功能。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ipVersion' => 'setIpVersion',
            'cidr' => 'setCidr',
            'gatewayIp' => 'setGatewayIp',
            'enableDhcp' => 'setEnableDhcp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： OpenStack Neutron子网的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： OpenStack Neutron子网的IP版本。 **取值范围**： - 4：IPv4子网。 - 6：IPv6子网。
    * cidr  **参数解释**： OpenStack Neutron子网的IP网段。 **取值范围**： CIDR格式，如IPv4网段：192.168.23.0/24，IPv6网段：2420:2023:410:d5d::/64。
    * gatewayIp  **参数解释**： OpenStack Neutron子网的网关IP地址。 **取值范围**： 不涉及。
    * enableDhcp  **参数解释**： OpenStack Neutron子网是否开启DHCP功能。 **取值范围**： - true：开启DHCP功能。 - false：未开启DHCP功能。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ipVersion' => 'getIpVersion',
            'cidr' => 'getCidr',
            'gatewayIp' => 'getGatewayIp',
            'enableDhcp' => 'getEnableDhcp'
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
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['gatewayIp'] = isset($data['gatewayIp']) ? $data['gatewayIp'] : null;
        $this->container['enableDhcp'] = isset($data['enableDhcp']) ? $data['enableDhcp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['gatewayIp'] === null) {
            $invalidProperties[] = "'gatewayIp' can't be null";
        }
        if ($this->container['enableDhcp'] === null) {
            $invalidProperties[] = "'enableDhcp' can't be null";
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
    * Gets id
    *  **参数解释**： OpenStack Neutron子网的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： OpenStack Neutron子网的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**： OpenStack Neutron子网的IP版本。 **取值范围**： - 4：IPv4子网。 - 6：IPv6子网。
    *
    * @return string
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param string $ipVersion **参数解释**： OpenStack Neutron子网的IP版本。 **取值范围**： - 4：IPv4子网。 - 6：IPv6子网。
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets cidr
    *  **参数解释**： OpenStack Neutron子网的IP网段。 **取值范围**： CIDR格式，如IPv4网段：192.168.23.0/24，IPv6网段：2420:2023:410:d5d::/64。
    *
    * @return string
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string $cidr **参数解释**： OpenStack Neutron子网的IP网段。 **取值范围**： CIDR格式，如IPv4网段：192.168.23.0/24，IPv6网段：2420:2023:410:d5d::/64。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets gatewayIp
    *  **参数解释**： OpenStack Neutron子网的网关IP地址。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getGatewayIp()
    {
        return $this->container['gatewayIp'];
    }

    /**
    * Sets gatewayIp
    *
    * @param string $gatewayIp **参数解释**： OpenStack Neutron子网的网关IP地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGatewayIp($gatewayIp)
    {
        $this->container['gatewayIp'] = $gatewayIp;
        return $this;
    }

    /**
    * Gets enableDhcp
    *  **参数解释**： OpenStack Neutron子网是否开启DHCP功能。 **取值范围**： - true：开启DHCP功能。 - false：未开启DHCP功能。
    *
    * @return bool
    */
    public function getEnableDhcp()
    {
        return $this->container['enableDhcp'];
    }

    /**
    * Sets enableDhcp
    *
    * @param bool $enableDhcp **参数解释**： OpenStack Neutron子网是否开启DHCP功能。 **取值范围**： - true：开启DHCP功能。 - false：未开启DHCP功能。
    *
    * @return $this
    */
    public function setEnableDhcp($enableDhcp)
    {
        $this->container['enableDhcp'] = $enableDhcp;
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

