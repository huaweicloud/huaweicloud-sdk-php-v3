<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddressItemListResponseDTODataRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddressItemListResponseDTO_data_records';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * itemId  地址组成员id
    * name  地址组成员name
    * description  描述
    * addressType  地址组类型，0 ipv4,1 ipv6
    * address  地址组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'itemId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'addressType' => 'int',
            'address' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * itemId  地址组成员id
    * name  地址组成员name
    * description  描述
    * addressType  地址组类型，0 ipv4,1 ipv6
    * address  地址组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'itemId' => null,
        'name' => null,
        'description' => null,
        'addressType' => null,
        'address' => null
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
    * itemId  地址组成员id
    * name  地址组成员name
    * description  描述
    * addressType  地址组类型，0 ipv4,1 ipv6
    * address  地址组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'itemId' => 'item_id',
            'name' => 'name',
            'description' => 'description',
            'addressType' => 'address_type',
            'address' => 'address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * itemId  地址组成员id
    * name  地址组成员name
    * description  描述
    * addressType  地址组类型，0 ipv4,1 ipv6
    * address  地址组
    *
    * @var string[]
    */
    protected static $setters = [
            'itemId' => 'setItemId',
            'name' => 'setName',
            'description' => 'setDescription',
            'addressType' => 'setAddressType',
            'address' => 'setAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * itemId  地址组成员id
    * name  地址组成员name
    * description  描述
    * addressType  地址组类型，0 ipv4,1 ipv6
    * address  地址组
    *
    * @var string[]
    */
    protected static $getters = [
            'itemId' => 'getItemId',
            'name' => 'getName',
            'description' => 'getDescription',
            'addressType' => 'getAddressType',
            'address' => 'getAddress'
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
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
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
    * Gets itemId
    *  地址组成员id
    *
    * @return string|null
    */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
    * Sets itemId
    *
    * @param string|null $itemId 地址组成员id
    *
    * @return $this
    */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
    * Gets name
    *  地址组成员name
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
    * @param string|null $name 地址组成员name
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets addressType
    *  地址组类型，0 ipv4,1 ipv6
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
    * @param int|null $addressType 地址组类型，0 ipv4,1 ipv6
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets address
    *  地址组
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 地址组
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
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

