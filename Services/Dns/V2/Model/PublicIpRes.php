<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicIpRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicIpRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  弹性公网IP（EIP）所属的区域。
    * id  弹性公网IP（EIP）的ID。
    * address  弹性公网IP（EIP）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'id' => 'string',
            'address' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  弹性公网IP（EIP）所属的区域。
    * id  弹性公网IP（EIP）的ID。
    * address  弹性公网IP（EIP）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'id' => null,
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
    * region  弹性公网IP（EIP）所属的区域。
    * id  弹性公网IP（EIP）的ID。
    * address  弹性公网IP（EIP）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'id' => 'id',
            'address' => 'address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  弹性公网IP（EIP）所属的区域。
    * id  弹性公网IP（EIP）的ID。
    * address  弹性公网IP（EIP）。
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'id' => 'setId',
            'address' => 'setAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  弹性公网IP（EIP）所属的区域。
    * id  弹性公网IP（EIP）的ID。
    * address  弹性公网IP（EIP）。
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'id' => 'getId',
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets region
    *  弹性公网IP（EIP）所属的区域。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 弹性公网IP（EIP）所属的区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets id
    *  弹性公网IP（EIP）的ID。
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
    * @param string|null $id 弹性公网IP（EIP）的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets address
    *  弹性公网IP（EIP）。
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
    * @param string|null $address 弹性公网IP（EIP）。
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

