<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePrivateDnatOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePrivateDnatOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  DNAT规则的描述。
    * transitIpId  中转IP的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * privateIpAddress  后端实例的私网IP地址。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePort  后端实例的端口号。
    * transitServicePort  中转IP的端口号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'transitIpId' => 'string',
            'networkInterfaceId' => 'string',
            'privateIpAddress' => 'string',
            'protocol' => 'string',
            'internalServicePort' => 'string',
            'transitServicePort' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  DNAT规则的描述。
    * transitIpId  中转IP的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * privateIpAddress  后端实例的私网IP地址。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePort  后端实例的端口号。
    * transitServicePort  中转IP的端口号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'transitIpId' => null,
        'networkInterfaceId' => null,
        'privateIpAddress' => null,
        'protocol' => null,
        'internalServicePort' => null,
        'transitServicePort' => null
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
    * description  DNAT规则的描述。
    * transitIpId  中转IP的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * privateIpAddress  后端实例的私网IP地址。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePort  后端实例的端口号。
    * transitServicePort  中转IP的端口号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'transitIpId' => 'transit_ip_id',
            'networkInterfaceId' => 'network_interface_id',
            'privateIpAddress' => 'private_ip_address',
            'protocol' => 'protocol',
            'internalServicePort' => 'internal_service_port',
            'transitServicePort' => 'transit_service_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  DNAT规则的描述。
    * transitIpId  中转IP的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * privateIpAddress  后端实例的私网IP地址。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePort  后端实例的端口号。
    * transitServicePort  中转IP的端口号。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'transitIpId' => 'setTransitIpId',
            'networkInterfaceId' => 'setNetworkInterfaceId',
            'privateIpAddress' => 'setPrivateIpAddress',
            'protocol' => 'setProtocol',
            'internalServicePort' => 'setInternalServicePort',
            'transitServicePort' => 'setTransitServicePort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  DNAT规则的描述。
    * transitIpId  中转IP的ID。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * privateIpAddress  后端实例的私网IP地址。
    * protocol  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    * internalServicePort  后端实例的端口号。
    * transitServicePort  中转IP的端口号。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'transitIpId' => 'getTransitIpId',
            'networkInterfaceId' => 'getNetworkInterfaceId',
            'privateIpAddress' => 'getPrivateIpAddress',
            'protocol' => 'getProtocol',
            'internalServicePort' => 'getInternalServicePort',
            'transitServicePort' => 'getTransitServicePort'
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
    const PROTOCOL_TCP = 'tcp';
    const PROTOCOL_UDP = 'udp';
    const PROTOCOL_ANY = 'any';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_TCP,
            self::PROTOCOL_UDP,
            self::PROTOCOL_ANY,
        ];
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['transitIpId'] = isset($data['transitIpId']) ? $data['transitIpId'] : null;
        $this->container['networkInterfaceId'] = isset($data['networkInterfaceId']) ? $data['networkInterfaceId'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['internalServicePort'] = isset($data['internalServicePort']) ? $data['internalServicePort'] : null;
        $this->container['transitServicePort'] = isset($data['transitServicePort']) ? $data['transitServicePort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['transitIpId']) && (mb_strlen($this->container['transitIpId']) > 36)) {
                $invalidProperties[] = "invalid value for 'transitIpId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['transitIpId']) && (mb_strlen($this->container['transitIpId']) < 36)) {
                $invalidProperties[] = "invalid value for 'transitIpId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['networkInterfaceId']) && (mb_strlen($this->container['networkInterfaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'networkInterfaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['networkInterfaceId']) && (mb_strlen($this->container['networkInterfaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'networkInterfaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be bigger than or equal to 7.";
            }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 3)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['internalServicePort']) && (mb_strlen($this->container['internalServicePort']) > 5)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['internalServicePort']) && (mb_strlen($this->container['internalServicePort']) < 1)) {
                $invalidProperties[] = "invalid value for 'internalServicePort', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['transitServicePort']) && (mb_strlen($this->container['transitServicePort']) > 10)) {
                $invalidProperties[] = "invalid value for 'transitServicePort', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['transitServicePort']) && (mb_strlen($this->container['transitServicePort']) < 1)) {
                $invalidProperties[] = "invalid value for 'transitServicePort', the character length must be bigger than or equal to 1.";
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
    * Gets description
    *  DNAT规则的描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description DNAT规则的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets transitIpId
    *  中转IP的ID。
    *
    * @return string|null
    */
    public function getTransitIpId()
    {
        return $this->container['transitIpId'];
    }

    /**
    * Sets transitIpId
    *
    * @param string|null $transitIpId 中转IP的ID。
    *
    * @return $this
    */
    public function setTransitIpId($transitIpId)
    {
        $this->container['transitIpId'] = $transitIpId;
        return $this;
    }

    /**
    * Gets networkInterfaceId
    *  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    *
    * @return string|null
    */
    public function getNetworkInterfaceId()
    {
        return $this->container['networkInterfaceId'];
    }

    /**
    * Sets networkInterfaceId
    *
    * @param string|null $networkInterfaceId 网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    *
    * @return $this
    */
    public function setNetworkInterfaceId($networkInterfaceId)
    {
        $this->container['networkInterfaceId'] = $networkInterfaceId;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  后端实例的私网IP地址。
    *
    * @return string|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string|null $privateIpAddress 后端实例的私网IP地址。
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 协议类型。 目前支持TCP/tcp、UDP/udp、ANY/any。 对应协议号6、17、0。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets internalServicePort
    *  后端实例的端口号。
    *
    * @return string|null
    */
    public function getInternalServicePort()
    {
        return $this->container['internalServicePort'];
    }

    /**
    * Sets internalServicePort
    *
    * @param string|null $internalServicePort 后端实例的端口号。
    *
    * @return $this
    */
    public function setInternalServicePort($internalServicePort)
    {
        $this->container['internalServicePort'] = $internalServicePort;
        return $this;
    }

    /**
    * Gets transitServicePort
    *  中转IP的端口号。
    *
    * @return string|null
    */
    public function getTransitServicePort()
    {
        return $this->container['transitServicePort'];
    }

    /**
    * Sets transitServicePort
    *
    * @param string|null $transitServicePort 中转IP的端口号。
    *
    * @return $this
    */
    public function setTransitServicePort($transitServicePort)
    {
        $this->container['transitServicePort'] = $transitServicePort;
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

