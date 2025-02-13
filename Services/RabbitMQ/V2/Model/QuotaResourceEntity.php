<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaResourceEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaResourceEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  支持rabbitmqInstance、kafkaInstance、rocketmqInstance、tags四种。   - rabbitmqInstance表示RabbitMQ实例配额。   - kafkaInstance表示Kafka实例配额。   - rocketmqInstance表示RocketMQ实例配额。   - tags表示标签的配额。
    * quota  租户最大可以创建的实例个数，或者每个实例最大可以创建的标签个数。
    * used  已创建的实例个数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'quota' => 'int',
            'used' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  支持rabbitmqInstance、kafkaInstance、rocketmqInstance、tags四种。   - rabbitmqInstance表示RabbitMQ实例配额。   - kafkaInstance表示Kafka实例配额。   - rocketmqInstance表示RocketMQ实例配额。   - tags表示标签的配额。
    * quota  租户最大可以创建的实例个数，或者每个实例最大可以创建的标签个数。
    * used  已创建的实例个数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'quota' => null,
        'used' => null
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
    * type  支持rabbitmqInstance、kafkaInstance、rocketmqInstance、tags四种。   - rabbitmqInstance表示RabbitMQ实例配额。   - kafkaInstance表示Kafka实例配额。   - rocketmqInstance表示RocketMQ实例配额。   - tags表示标签的配额。
    * quota  租户最大可以创建的实例个数，或者每个实例最大可以创建的标签个数。
    * used  已创建的实例个数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'quota' => 'quota',
            'used' => 'used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  支持rabbitmqInstance、kafkaInstance、rocketmqInstance、tags四种。   - rabbitmqInstance表示RabbitMQ实例配额。   - kafkaInstance表示Kafka实例配额。   - rocketmqInstance表示RocketMQ实例配额。   - tags表示标签的配额。
    * quota  租户最大可以创建的实例个数，或者每个实例最大可以创建的标签个数。
    * used  已创建的实例个数。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'quota' => 'setQuota',
            'used' => 'setUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  支持rabbitmqInstance、kafkaInstance、rocketmqInstance、tags四种。   - rabbitmqInstance表示RabbitMQ实例配额。   - kafkaInstance表示Kafka实例配额。   - rocketmqInstance表示RocketMQ实例配额。   - tags表示标签的配额。
    * quota  租户最大可以创建的实例个数，或者每个实例最大可以创建的标签个数。
    * used  已创建的实例个数。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'quota' => 'getQuota',
            'used' => 'getUsed'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
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
    * Gets type
    *  支持rabbitmqInstance、kafkaInstance、rocketmqInstance、tags四种。   - rabbitmqInstance表示RabbitMQ实例配额。   - kafkaInstance表示Kafka实例配额。   - rocketmqInstance表示RocketMQ实例配额。   - tags表示标签的配额。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 支持rabbitmqInstance、kafkaInstance、rocketmqInstance、tags四种。   - rabbitmqInstance表示RabbitMQ实例配额。   - kafkaInstance表示Kafka实例配额。   - rocketmqInstance表示RocketMQ实例配额。   - tags表示标签的配额。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets quota
    *  租户最大可以创建的实例个数，或者每个实例最大可以创建的标签个数。
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota 租户最大可以创建的实例个数，或者每个实例最大可以创建的标签个数。
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  已创建的实例个数。
    *
    * @return int|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int|null $used 已创建的实例个数。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
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

