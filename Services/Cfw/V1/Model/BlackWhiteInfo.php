<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BlackWhiteInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BlackWhiteInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * address  **参数解释**： IP地址 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址类型 **约束限制**： 不涉及  **取值范围**：  0：IPV4  1：IPV6 **默认取值**： 不涉及
    * description  **参数解释**： 描述 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 地址方向 **约束限制**： 不涉及  **取值范围**： 0：源地址 1：目的地址 **默认取值**： 不涉及
    * port  **参数解释**： 端口 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及  **取值范围**： -1：ANY 1：ICMP 6：TCP 17：UDP 58：ICMPV6 132：SCTP 手动类型不为空，自动类型为空 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'address' => 'string',
            'addressType' => 'int',
            'description' => 'string',
            'direction' => 'int',
            'port' => 'string',
            'protocol' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * address  **参数解释**： IP地址 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址类型 **约束限制**： 不涉及  **取值范围**：  0：IPV4  1：IPV6 **默认取值**： 不涉及
    * description  **参数解释**： 描述 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 地址方向 **约束限制**： 不涉及  **取值范围**： 0：源地址 1：目的地址 **默认取值**： 不涉及
    * port  **参数解释**： 端口 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及  **取值范围**： -1：ANY 1：ICMP 6：TCP 17：UDP 58：ICMPV6 132：SCTP 手动类型不为空，自动类型为空 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'address' => null,
        'addressType' => 'int32',
        'description' => null,
        'direction' => 'int32',
        'port' => null,
        'protocol' => 'int32'
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
    * address  **参数解释**： IP地址 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址类型 **约束限制**： 不涉及  **取值范围**：  0：IPV4  1：IPV6 **默认取值**： 不涉及
    * description  **参数解释**： 描述 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 地址方向 **约束限制**： 不涉及  **取值范围**： 0：源地址 1：目的地址 **默认取值**： 不涉及
    * port  **参数解释**： 端口 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及  **取值范围**： -1：ANY 1：ICMP 6：TCP 17：UDP 58：ICMPV6 132：SCTP 手动类型不为空，自动类型为空 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'address' => 'address',
            'addressType' => 'address_type',
            'description' => 'description',
            'direction' => 'direction',
            'port' => 'port',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * address  **参数解释**： IP地址 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址类型 **约束限制**： 不涉及  **取值范围**：  0：IPV4  1：IPV6 **默认取值**： 不涉及
    * description  **参数解释**： 描述 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 地址方向 **约束限制**： 不涉及  **取值范围**： 0：源地址 1：目的地址 **默认取值**： 不涉及
    * port  **参数解释**： 端口 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及  **取值范围**： -1：ANY 1：ICMP 6：TCP 17：UDP 58：ICMPV6 132：SCTP 手动类型不为空，自动类型为空 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'address' => 'setAddress',
            'addressType' => 'setAddressType',
            'description' => 'setDescription',
            'direction' => 'setDirection',
            'port' => 'setPort',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * address  **参数解释**： IP地址 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * addressType  **参数解释**： IP地址类型 **约束限制**： 不涉及  **取值范围**：  0：IPV4  1：IPV6 **默认取值**： 不涉及
    * description  **参数解释**： 描述 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * direction  **参数解释**： 地址方向 **约束限制**： 不涉及  **取值范围**： 0：源地址 1：目的地址 **默认取值**： 不涉及
    * port  **参数解释**： 端口 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    * protocol  **参数解释**： 协议类型 **约束限制**： 不涉及  **取值范围**： -1：ANY 1：ICMP 6：TCP 17：UDP 58：ICMPV6 132：SCTP 手动类型不为空，自动类型为空 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'address' => 'getAddress',
            'addressType' => 'getAddressType',
            'description' => 'getDescription',
            'direction' => 'getDirection',
            'port' => 'getPort',
            'protocol' => 'getProtocol'
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
    const PROTOCOL_6 = 6;
    const PROTOCOL_17 = 17;
    const PROTOCOL_1 = 1;
    const PROTOCOL_58 = 58;
    const PROTOCOL_MINUS_1 = -1;
    const PROTOCOL_132 = 132;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_6,
            self::PROTOCOL_17,
            self::PROTOCOL_1,
            self::PROTOCOL_58,
            self::PROTOCOL_MINUS_1,
            self::PROTOCOL_132,
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
            if ((mb_strlen($this->container['address']) > 64)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['address']) < 4)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['addressType']) && ($this->container['addressType'] > 1)) {
                $invalidProperties[] = "invalid value for 'addressType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['addressType']) && ($this->container['addressType'] < 0)) {
                $invalidProperties[] = "invalid value for 'addressType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
            if (($this->container['direction'] > 1)) {
                $invalidProperties[] = "invalid value for 'direction', must be smaller than or equal to 1.";
            }
            if (($this->container['direction'] < 0)) {
                $invalidProperties[] = "invalid value for 'direction', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['port']) && (mb_strlen($this->container['port']) > 15)) {
                $invalidProperties[] = "invalid value for 'port', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['port']) && (mb_strlen($this->container['port']) < 0)) {
                $invalidProperties[] = "invalid value for 'port', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets address
    *  **参数解释**： IP地址 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address **参数解释**： IP地址 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets addressType
    *  **参数解释**： IP地址类型 **约束限制**： 不涉及  **取值范围**：  0：IPV4  1：IPV6 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int|null $addressType **参数解释**： IP地址类型 **约束限制**： 不涉及  **取值范围**：  0：IPV4  1：IPV6 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 描述 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $description **参数解释**： 描述 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets direction
    *  **参数解释**： 地址方向 **约束限制**： 不涉及  **取值范围**： 0：源地址 1：目的地址 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param int $direction **参数解释**： 地址方向 **约束限制**： 不涉及  **取值范围**： 0：源地址 1：目的地址 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释**： 端口 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string|null $port **参数解释**： 端口 **约束限制**： 不涉及  **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**： 协议类型 **约束限制**： 不涉及  **取值范围**： -1：ANY 1：ICMP 6：TCP 17：UDP 58：ICMPV6 132：SCTP 手动类型不为空，自动类型为空 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int $protocol **参数解释**： 协议类型 **约束限制**： 不涉及  **取值范围**： -1：ANY 1：ICMP 6：TCP 17：UDP 58：ICMPV6 132：SCTP 手动类型不为空，自动类型为空 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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

