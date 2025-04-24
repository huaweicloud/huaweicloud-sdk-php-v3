<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProxyProtocolExtension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProxyProtocolExtension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vipAddress  ipv4 vip地址
    * ipv6VipAddress  ipv6 vip地址
    * extension  extension
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vipAddress' => 'string',
            'ipv6VipAddress' => 'string',
            'extension' => '\HuaweiCloud\SDK\Elb\V3\Model\Extension'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vipAddress  ipv4 vip地址
    * ipv6VipAddress  ipv6 vip地址
    * extension  extension
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vipAddress' => null,
        'ipv6VipAddress' => null,
        'extension' => null
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
    * vipAddress  ipv4 vip地址
    * ipv6VipAddress  ipv6 vip地址
    * extension  extension
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vipAddress' => 'vip_address',
            'ipv6VipAddress' => 'ipv6_vip_address',
            'extension' => 'extension'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vipAddress  ipv4 vip地址
    * ipv6VipAddress  ipv6 vip地址
    * extension  extension
    *
    * @var string[]
    */
    protected static $setters = [
            'vipAddress' => 'setVipAddress',
            'ipv6VipAddress' => 'setIpv6VipAddress',
            'extension' => 'setExtension'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vipAddress  ipv4 vip地址
    * ipv6VipAddress  ipv6 vip地址
    * extension  extension
    *
    * @var string[]
    */
    protected static $getters = [
            'vipAddress' => 'getVipAddress',
            'ipv6VipAddress' => 'getIpv6VipAddress',
            'extension' => 'getExtension'
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
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['ipv6VipAddress'] = isset($data['ipv6VipAddress']) ? $data['ipv6VipAddress'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['extension'] === null) {
            $invalidProperties[] = "'extension' can't be null";
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
    * Gets vipAddress
    *  ipv4 vip地址
    *
    * @return string|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string|null $vipAddress ipv4 vip地址
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  ipv6 vip地址
    *
    * @return string|null
    */
    public function getIpv6VipAddress()
    {
        return $this->container['ipv6VipAddress'];
    }

    /**
    * Sets ipv6VipAddress
    *
    * @param string|null $ipv6VipAddress ipv6 vip地址
    *
    * @return $this
    */
    public function setIpv6VipAddress($ipv6VipAddress)
    {
        $this->container['ipv6VipAddress'] = $ipv6VipAddress;
        return $this;
    }

    /**
    * Gets extension
    *  extension
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\Extension
    */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
    * Sets extension
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\Extension $extension extension
    *
    * @return $this
    */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;
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

