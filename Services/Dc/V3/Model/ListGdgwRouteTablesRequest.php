<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGdgwRouteTablesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGdgwRouteTablesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gdgwId  全域接入网关ID
    * addressFamily  地址簇
    * nexthop  下一跳ID
    * destination  目的地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gdgwId' => 'string',
            'addressFamily' => 'string[]',
            'nexthop' => 'string[]',
            'destination' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gdgwId  全域接入网关ID
    * addressFamily  地址簇
    * nexthop  下一跳ID
    * destination  目的地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gdgwId' => null,
        'addressFamily' => null,
        'nexthop' => null,
        'destination' => null
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
    * gdgwId  全域接入网关ID
    * addressFamily  地址簇
    * nexthop  下一跳ID
    * destination  目的地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gdgwId' => 'gdgw_id',
            'addressFamily' => 'address_family',
            'nexthop' => 'nexthop',
            'destination' => 'destination'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gdgwId  全域接入网关ID
    * addressFamily  地址簇
    * nexthop  下一跳ID
    * destination  目的地址
    *
    * @var string[]
    */
    protected static $setters = [
            'gdgwId' => 'setGdgwId',
            'addressFamily' => 'setAddressFamily',
            'nexthop' => 'setNexthop',
            'destination' => 'setDestination'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gdgwId  全域接入网关ID
    * addressFamily  地址簇
    * nexthop  下一跳ID
    * destination  目的地址
    *
    * @var string[]
    */
    protected static $getters = [
            'gdgwId' => 'getGdgwId',
            'addressFamily' => 'getAddressFamily',
            'nexthop' => 'getNexthop',
            'destination' => 'getDestination'
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
    const ADDRESS_FAMILY_IPV4 = 'ipv4';
    const ADDRESS_FAMILY_IPV6 = 'ipv6';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddressFamilyAllowableValues()
    {
        return [
            self::ADDRESS_FAMILY_IPV4,
            self::ADDRESS_FAMILY_IPV6,
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
        $this->container['gdgwId'] = isset($data['gdgwId']) ? $data['gdgwId'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['nexthop'] = isset($data['nexthop']) ? $data['nexthop'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['gdgwId'] === null) {
            $invalidProperties[] = "'gdgwId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['gdgwId'])) {
                $invalidProperties[] = "invalid value for 'gdgwId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets gdgwId
    *  全域接入网关ID
    *
    * @return string
    */
    public function getGdgwId()
    {
        return $this->container['gdgwId'];
    }

    /**
    * Sets gdgwId
    *
    * @param string $gdgwId 全域接入网关ID
    *
    * @return $this
    */
    public function setGdgwId($gdgwId)
    {
        $this->container['gdgwId'] = $gdgwId;
        return $this;
    }

    /**
    * Gets addressFamily
    *  地址簇
    *
    * @return string[]|null
    */
    public function getAddressFamily()
    {
        return $this->container['addressFamily'];
    }

    /**
    * Sets addressFamily
    *
    * @param string[]|null $addressFamily 地址簇
    *
    * @return $this
    */
    public function setAddressFamily($addressFamily)
    {
        $this->container['addressFamily'] = $addressFamily;
        return $this;
    }

    /**
    * Gets nexthop
    *  下一跳ID
    *
    * @return string[]|null
    */
    public function getNexthop()
    {
        return $this->container['nexthop'];
    }

    /**
    * Sets nexthop
    *
    * @param string[]|null $nexthop 下一跳ID
    *
    * @return $this
    */
    public function setNexthop($nexthop)
    {
        $this->container['nexthop'] = $nexthop;
        return $this;
    }

    /**
    * Gets destination
    *  目的地址
    *
    * @return string[]|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string[]|null $destination 目的地址
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
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

