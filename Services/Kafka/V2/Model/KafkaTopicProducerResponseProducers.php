<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaTopicProducerResponseProducers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaTopicProducerResponse_producers';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * producerAddress  生产者地址
    * brokerAddress  broker地址
    * joinTime  加入时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'producerAddress' => 'string',
            'brokerAddress' => 'string',
            'joinTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * producerAddress  生产者地址
    * brokerAddress  broker地址
    * joinTime  加入时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'producerAddress' => null,
        'brokerAddress' => null,
        'joinTime' => 'int64'
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
    * producerAddress  生产者地址
    * brokerAddress  broker地址
    * joinTime  加入时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'producerAddress' => 'producer_address',
            'brokerAddress' => 'broker_address',
            'joinTime' => 'join_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * producerAddress  生产者地址
    * brokerAddress  broker地址
    * joinTime  加入时间
    *
    * @var string[]
    */
    protected static $setters = [
            'producerAddress' => 'setProducerAddress',
            'brokerAddress' => 'setBrokerAddress',
            'joinTime' => 'setJoinTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * producerAddress  生产者地址
    * brokerAddress  broker地址
    * joinTime  加入时间
    *
    * @var string[]
    */
    protected static $getters = [
            'producerAddress' => 'getProducerAddress',
            'brokerAddress' => 'getBrokerAddress',
            'joinTime' => 'getJoinTime'
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
        $this->container['producerAddress'] = isset($data['producerAddress']) ? $data['producerAddress'] : null;
        $this->container['brokerAddress'] = isset($data['brokerAddress']) ? $data['brokerAddress'] : null;
        $this->container['joinTime'] = isset($data['joinTime']) ? $data['joinTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['producerAddress']) && (mb_strlen($this->container['producerAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'producerAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['producerAddress']) && (mb_strlen($this->container['producerAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'producerAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['brokerAddress']) && (mb_strlen($this->container['brokerAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'brokerAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['brokerAddress']) && (mb_strlen($this->container['brokerAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'brokerAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['joinTime']) && ($this->container['joinTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'joinTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['joinTime']) && ($this->container['joinTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'joinTime', must be bigger than or equal to 0.";
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
    * Gets producerAddress
    *  生产者地址
    *
    * @return string|null
    */
    public function getProducerAddress()
    {
        return $this->container['producerAddress'];
    }

    /**
    * Sets producerAddress
    *
    * @param string|null $producerAddress 生产者地址
    *
    * @return $this
    */
    public function setProducerAddress($producerAddress)
    {
        $this->container['producerAddress'] = $producerAddress;
        return $this;
    }

    /**
    * Gets brokerAddress
    *  broker地址
    *
    * @return string|null
    */
    public function getBrokerAddress()
    {
        return $this->container['brokerAddress'];
    }

    /**
    * Sets brokerAddress
    *
    * @param string|null $brokerAddress broker地址
    *
    * @return $this
    */
    public function setBrokerAddress($brokerAddress)
    {
        $this->container['brokerAddress'] = $brokerAddress;
        return $this;
    }

    /**
    * Gets joinTime
    *  加入时间
    *
    * @return int|null
    */
    public function getJoinTime()
    {
        return $this->container['joinTime'];
    }

    /**
    * Sets joinTime
    *
    * @param int|null $joinTime 加入时间
    *
    * @return $this
    */
    public function setJoinTime($joinTime)
    {
        $this->container['joinTime'] = $joinTime;
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

