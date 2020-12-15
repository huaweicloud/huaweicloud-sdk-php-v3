<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFloatingIpOption implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFloatingIpOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'floatingIpAddress' => 'string',
            'floatingNetworkId' => 'string',
            'portId' => 'string',
            'fixedIpAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'floatingIpAddress' => null,
        'floatingNetworkId' => null,
        'portId' => null,
        'fixedIpAddress' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'floatingIpAddress' => 'floating_ip_address',
            'floatingNetworkId' => 'floating_network_id',
            'portId' => 'port_id',
            'fixedIpAddress' => 'fixed_ip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'floatingIpAddress' => 'setFloatingIpAddress',
            'floatingNetworkId' => 'setFloatingNetworkId',
            'portId' => 'setPortId',
            'fixedIpAddress' => 'setFixedIpAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'floatingIpAddress' => 'getFloatingIpAddress',
            'floatingNetworkId' => 'getFloatingNetworkId',
            'portId' => 'getPortId',
            'fixedIpAddress' => 'getFixedIpAddress'
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
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['floatingNetworkId'] = isset($data['floatingNetworkId']) ? $data['floatingNetworkId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['fixedIpAddress'] = isset($data['fixedIpAddress']) ? $data['fixedIpAddress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['floatingIpAddress']) && (mb_strlen($this->container['floatingIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['floatingNetworkId'] === null) {
            $invalidProperties[] = "'floatingNetworkId' can't be null";
        }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['fixedIpAddress']) && (mb_strlen($this->container['fixedIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'fixedIpAddress', the character length must be smaller than or equal to 64.";
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
    * Gets floatingIpAddress
    *
    * @return string|null
    */
    public function getFloatingIpAddress()
    {
        return $this->container['floatingIpAddress'];
    }

    /**
    * Sets floatingIpAddress
    *
    * @param string|null $floatingIpAddress 浮动IP地址。
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets floatingNetworkId
    *
    * @return string
    */
    public function getFloatingNetworkId()
    {
        return $this->container['floatingNetworkId'];
    }

    /**
    * Sets floatingNetworkId
    *
    * @param string $floatingNetworkId 外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询。
    *
    * @return $this
    */
    public function setFloatingNetworkId($floatingNetworkId)
    {
        $this->container['floatingNetworkId'] = $floatingNetworkId;
        return $this;
    }

    /**
    * Gets portId
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
    * @param string|null $portId 端口id
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets fixedIpAddress
    *
    * @return string|null
    */
    public function getFixedIpAddress()
    {
        return $this->container['fixedIpAddress'];
    }

    /**
    * Sets fixedIpAddress
    *
    * @param string|null $fixedIpAddress 关联端口的私有IP地址。
    *
    * @return $this
    */
    public function setFixedIpAddress($fixedIpAddress)
    {
        $this->container['fixedIpAddress'] = $fixedIpAddress;
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

