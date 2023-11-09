<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalAccessesCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalAccessesCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  协议，支持http、https。
    * address  访问地址。
    * forwardPort  端口号。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'address' => 'string',
            'forwardPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  协议，支持http、https。
    * address  访问地址。
    * forwardPort  端口号。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'address' => null,
        'forwardPort' => null
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
    * protocol  协议，支持http、https。
    * address  访问地址。
    * forwardPort  端口号。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'address' => 'address',
            'forwardPort' => 'forward_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  协议，支持http、https。
    * address  访问地址。
    * forwardPort  端口号。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'address' => 'setAddress',
            'forwardPort' => 'setForwardPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  协议，支持http、https。
    * address  访问地址。
    * forwardPort  端口号。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'address' => 'getAddress',
            'forwardPort' => 'getForwardPort'
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
    const PROTOCOL_HTTP = 'http';
    const PROTOCOL_HTTPS = 'https';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['forwardPort'] = isset($data['forwardPort']) ? $data['forwardPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
            if ((mb_strlen($this->container['address']) > 256)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['forwardPort'] === null) {
            $invalidProperties[] = "'forwardPort' can't be null";
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
    * Gets protocol
    *  协议，支持http、https。
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 协议，支持http、https。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets address
    *  访问地址。
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
    * @param string $address 访问地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets forwardPort
    *  端口号。
    *
    * @return int
    */
    public function getForwardPort()
    {
        return $this->container['forwardPort'];
    }

    /**
    * Sets forwardPort
    *
    * @param int $forwardPort 端口号。
    *
    * @return $this
    */
    public function setForwardPort($forwardPort)
    {
        $this->container['forwardPort'] = $forwardPort;
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

