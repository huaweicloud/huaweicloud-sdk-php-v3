<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateKafkaUserClientQuotaTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateKafkaUserClientQuotaTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  用户名
    * client  客户端ID
    * userDefault  是否使用用户默认设置（是则表示对全部用户限流）。
    * clientDefault  是否使用客户端默认设置（是则表示对全部客户端限流）。
    * producerByteRate  生产上限速率（单位为B/s）
    * consumerByteRate  消费上限速率（单位为B/s）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'client' => 'string',
            'userDefault' => 'bool',
            'clientDefault' => 'bool',
            'producerByteRate' => 'int',
            'consumerByteRate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  用户名
    * client  客户端ID
    * userDefault  是否使用用户默认设置（是则表示对全部用户限流）。
    * clientDefault  是否使用客户端默认设置（是则表示对全部客户端限流）。
    * producerByteRate  生产上限速率（单位为B/s）
    * consumerByteRate  消费上限速率（单位为B/s）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'client' => null,
        'userDefault' => null,
        'clientDefault' => null,
        'producerByteRate' => 'int64',
        'consumerByteRate' => 'int64'
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
    * user  用户名
    * client  客户端ID
    * userDefault  是否使用用户默认设置（是则表示对全部用户限流）。
    * clientDefault  是否使用客户端默认设置（是则表示对全部客户端限流）。
    * producerByteRate  生产上限速率（单位为B/s）
    * consumerByteRate  消费上限速率（单位为B/s）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'client' => 'client',
            'userDefault' => 'user-default',
            'clientDefault' => 'client-default',
            'producerByteRate' => 'producer-byte-rate',
            'consumerByteRate' => 'consumer-byte-rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  用户名
    * client  客户端ID
    * userDefault  是否使用用户默认设置（是则表示对全部用户限流）。
    * clientDefault  是否使用客户端默认设置（是则表示对全部客户端限流）。
    * producerByteRate  生产上限速率（单位为B/s）
    * consumerByteRate  消费上限速率（单位为B/s）
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'client' => 'setClient',
            'userDefault' => 'setUserDefault',
            'clientDefault' => 'setClientDefault',
            'producerByteRate' => 'setProducerByteRate',
            'consumerByteRate' => 'setConsumerByteRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  用户名
    * client  客户端ID
    * userDefault  是否使用用户默认设置（是则表示对全部用户限流）。
    * clientDefault  是否使用客户端默认设置（是则表示对全部客户端限流）。
    * producerByteRate  生产上限速率（单位为B/s）
    * consumerByteRate  消费上限速率（单位为B/s）
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'client' => 'getClient',
            'userDefault' => 'getUserDefault',
            'clientDefault' => 'getClientDefault',
            'producerByteRate' => 'getProducerByteRate',
            'consumerByteRate' => 'getConsumerByteRate'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['userDefault'] = isset($data['userDefault']) ? $data['userDefault'] : null;
        $this->container['clientDefault'] = isset($data['clientDefault']) ? $data['clientDefault'] : null;
        $this->container['producerByteRate'] = isset($data['producerByteRate']) ? $data['producerByteRate'] : null;
        $this->container['consumerByteRate'] = isset($data['consumerByteRate']) ? $data['consumerByteRate'] : null;
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
    * Gets user
    *  用户名
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户名
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets client
    *  客户端ID
    *
    * @return string|null
    */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
    * Sets client
    *
    * @param string|null $client 客户端ID
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
        return $this;
    }

    /**
    * Gets userDefault
    *  是否使用用户默认设置（是则表示对全部用户限流）。
    *
    * @return bool|null
    */
    public function getUserDefault()
    {
        return $this->container['userDefault'];
    }

    /**
    * Sets userDefault
    *
    * @param bool|null $userDefault 是否使用用户默认设置（是则表示对全部用户限流）。
    *
    * @return $this
    */
    public function setUserDefault($userDefault)
    {
        $this->container['userDefault'] = $userDefault;
        return $this;
    }

    /**
    * Gets clientDefault
    *  是否使用客户端默认设置（是则表示对全部客户端限流）。
    *
    * @return bool|null
    */
    public function getClientDefault()
    {
        return $this->container['clientDefault'];
    }

    /**
    * Sets clientDefault
    *
    * @param bool|null $clientDefault 是否使用客户端默认设置（是则表示对全部客户端限流）。
    *
    * @return $this
    */
    public function setClientDefault($clientDefault)
    {
        $this->container['clientDefault'] = $clientDefault;
        return $this;
    }

    /**
    * Gets producerByteRate
    *  生产上限速率（单位为B/s）
    *
    * @return int|null
    */
    public function getProducerByteRate()
    {
        return $this->container['producerByteRate'];
    }

    /**
    * Sets producerByteRate
    *
    * @param int|null $producerByteRate 生产上限速率（单位为B/s）
    *
    * @return $this
    */
    public function setProducerByteRate($producerByteRate)
    {
        $this->container['producerByteRate'] = $producerByteRate;
        return $this;
    }

    /**
    * Gets consumerByteRate
    *  消费上限速率（单位为B/s）
    *
    * @return int|null
    */
    public function getConsumerByteRate()
    {
        return $this->container['consumerByteRate'];
    }

    /**
    * Sets consumerByteRate
    *
    * @param int|null $consumerByteRate 消费上限速率（单位为B/s）
    *
    * @return $this
    */
    public function setConsumerByteRate($consumerByteRate)
    {
        $this->container['consumerByteRate'] = $consumerByteRate;
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

