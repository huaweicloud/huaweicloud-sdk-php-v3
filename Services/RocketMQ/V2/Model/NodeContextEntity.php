<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeContextEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeContextEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * brokerName  broker名称
    * brokerId  broker的ID
    * address  地址
    * publicAddress  公网地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'brokerName' => 'string',
            'brokerId' => 'int',
            'address' => 'string',
            'publicAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * brokerName  broker名称
    * brokerId  broker的ID
    * address  地址
    * publicAddress  公网地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'brokerName' => null,
        'brokerId' => null,
        'address' => null,
        'publicAddress' => null
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
    * id  ID
    * brokerName  broker名称
    * brokerId  broker的ID
    * address  地址
    * publicAddress  公网地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'brokerName' => 'broker_name',
            'brokerId' => 'broker_id',
            'address' => 'address',
            'publicAddress' => 'public_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * brokerName  broker名称
    * brokerId  broker的ID
    * address  地址
    * publicAddress  公网地址
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'brokerName' => 'setBrokerName',
            'brokerId' => 'setBrokerId',
            'address' => 'setAddress',
            'publicAddress' => 'setPublicAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * brokerName  broker名称
    * brokerId  broker的ID
    * address  地址
    * publicAddress  公网地址
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'brokerName' => 'getBrokerName',
            'brokerId' => 'getBrokerId',
            'address' => 'getAddress',
            'publicAddress' => 'getPublicAddress'
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
        $this->container['brokerName'] = isset($data['brokerName']) ? $data['brokerName'] : null;
        $this->container['brokerId'] = isset($data['brokerId']) ? $data['brokerId'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['publicAddress'] = isset($data['publicAddress']) ? $data['publicAddress'] : null;
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
    * Gets id
    *  ID
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
    * @param string|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets brokerName
    *  broker名称
    *
    * @return string|null
    */
    public function getBrokerName()
    {
        return $this->container['brokerName'];
    }

    /**
    * Sets brokerName
    *
    * @param string|null $brokerName broker名称
    *
    * @return $this
    */
    public function setBrokerName($brokerName)
    {
        $this->container['brokerName'] = $brokerName;
        return $this;
    }

    /**
    * Gets brokerId
    *  broker的ID
    *
    * @return int|null
    */
    public function getBrokerId()
    {
        return $this->container['brokerId'];
    }

    /**
    * Sets brokerId
    *
    * @param int|null $brokerId broker的ID
    *
    * @return $this
    */
    public function setBrokerId($brokerId)
    {
        $this->container['brokerId'] = $brokerId;
        return $this;
    }

    /**
    * Gets address
    *  地址
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
    * @param string|null $address 地址
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets publicAddress
    *  公网地址
    *
    * @return string|null
    */
    public function getPublicAddress()
    {
        return $this->container['publicAddress'];
    }

    /**
    * Sets publicAddress
    *
    * @param string|null $publicAddress 公网地址
    *
    * @return $this
    */
    public function setPublicAddress($publicAddress)
    {
        $this->container['publicAddress'] = $publicAddress;
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

