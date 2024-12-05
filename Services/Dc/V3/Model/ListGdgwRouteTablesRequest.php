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
    * gdgwId  全球接入网关ID
    * fields  显示字段列表
    * extFields  show response ext-fields
    * nexthop  下一条ID
    * destination  目的地址
    * addressFamily  地址簇
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gdgwId' => 'string',
            'fields' => 'string[]',
            'extFields' => 'string[]',
            'nexthop' => 'string[]',
            'destination' => 'string[]',
            'addressFamily' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gdgwId  全球接入网关ID
    * fields  显示字段列表
    * extFields  show response ext-fields
    * nexthop  下一条ID
    * destination  目的地址
    * addressFamily  地址簇
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gdgwId' => null,
        'fields' => null,
        'extFields' => null,
        'nexthop' => null,
        'destination' => null,
        'addressFamily' => null
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
    * gdgwId  全球接入网关ID
    * fields  显示字段列表
    * extFields  show response ext-fields
    * nexthop  下一条ID
    * destination  目的地址
    * addressFamily  地址簇
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gdgwId' => 'gdgw_id',
            'fields' => 'fields',
            'extFields' => 'ext_fields',
            'nexthop' => 'nexthop',
            'destination' => 'destination',
            'addressFamily' => 'address_family'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gdgwId  全球接入网关ID
    * fields  显示字段列表
    * extFields  show response ext-fields
    * nexthop  下一条ID
    * destination  目的地址
    * addressFamily  地址簇
    *
    * @var string[]
    */
    protected static $setters = [
            'gdgwId' => 'setGdgwId',
            'fields' => 'setFields',
            'extFields' => 'setExtFields',
            'nexthop' => 'setNexthop',
            'destination' => 'setDestination',
            'addressFamily' => 'setAddressFamily'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gdgwId  全球接入网关ID
    * fields  显示字段列表
    * extFields  show response ext-fields
    * nexthop  下一条ID
    * destination  目的地址
    * addressFamily  地址簇
    *
    * @var string[]
    */
    protected static $getters = [
            'gdgwId' => 'getGdgwId',
            'fields' => 'getFields',
            'extFields' => 'getExtFields',
            'nexthop' => 'getNexthop',
            'destination' => 'getDestination',
            'addressFamily' => 'getAddressFamily'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['extFields'] = isset($data['extFields']) ? $data['extFields'] : null;
        $this->container['nexthop'] = isset($data['nexthop']) ? $data['nexthop'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
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
    *  全球接入网关ID
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
    * @param string $gdgwId 全球接入网关ID
    *
    * @return $this
    */
    public function setGdgwId($gdgwId)
    {
        $this->container['gdgwId'] = $gdgwId;
        return $this;
    }

    /**
    * Gets fields
    *  显示字段列表
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 显示字段列表
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets extFields
    *  show response ext-fields
    *
    * @return string[]|null
    */
    public function getExtFields()
    {
        return $this->container['extFields'];
    }

    /**
    * Sets extFields
    *
    * @param string[]|null $extFields show response ext-fields
    *
    * @return $this
    */
    public function setExtFields($extFields)
    {
        $this->container['extFields'] = $extFields;
        return $this;
    }

    /**
    * Gets nexthop
    *  下一条ID
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
    * @param string[]|null $nexthop 下一条ID
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

