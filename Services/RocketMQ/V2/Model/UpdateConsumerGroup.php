<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateConsumerGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateConsumerGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  待修改参数的消费组（消费组名称不支持修改）。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enabled' => 'bool',
            'broadcast' => 'bool',
            'brokers' => 'string[]',
            'name' => 'string',
            'retryMaxTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  待修改参数的消费组（消费组名称不支持修改）。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enabled' => null,
        'broadcast' => null,
        'brokers' => null,
        'name' => null,
        'retryMaxTime' => null
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
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  待修改参数的消费组（消费组名称不支持修改）。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enabled' => 'enabled',
            'broadcast' => 'broadcast',
            'brokers' => 'brokers',
            'name' => 'name',
            'retryMaxTime' => 'retry_max_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  待修改参数的消费组（消费组名称不支持修改）。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    *
    * @var string[]
    */
    protected static $setters = [
            'enabled' => 'setEnabled',
            'broadcast' => 'setBroadcast',
            'brokers' => 'setBrokers',
            'name' => 'setName',
            'retryMaxTime' => 'setRetryMaxTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  待修改参数的消费组（消费组名称不支持修改）。
    * retryMaxTime  最大重试次数，取值范围为1~16。
    *
    * @var string[]
    */
    protected static $getters = [
            'enabled' => 'getEnabled',
            'broadcast' => 'getBroadcast',
            'brokers' => 'getBrokers',
            'name' => 'getName',
            'retryMaxTime' => 'getRetryMaxTime'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['broadcast'] = isset($data['broadcast']) ? $data['broadcast'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['retryMaxTime'] = isset($data['retryMaxTime']) ? $data['retryMaxTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['broadcast'] === null) {
            $invalidProperties[] = "'broadcast' can't be null";
        }
        if ($this->container['retryMaxTime'] === null) {
            $invalidProperties[] = "'retryMaxTime' can't be null";
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
    * Gets enabled
    *  是否可以消费。
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled 是否可以消费。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets broadcast
    *  是否广播。
    *
    * @return bool
    */
    public function getBroadcast()
    {
        return $this->container['broadcast'];
    }

    /**
    * Sets broadcast
    *
    * @param bool $broadcast 是否广播。
    *
    * @return $this
    */
    public function setBroadcast($broadcast)
    {
        $this->container['broadcast'] = $broadcast;
        return $this;
    }

    /**
    * Gets brokers
    *  关联的代理列表。
    *
    * @return string[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param string[]|null $brokers 关联的代理列表。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
        return $this;
    }

    /**
    * Gets name
    *  待修改参数的消费组（消费组名称不支持修改）。
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
    * @param string|null $name 待修改参数的消费组（消费组名称不支持修改）。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets retryMaxTime
    *  最大重试次数，取值范围为1~16。
    *
    * @return int
    */
    public function getRetryMaxTime()
    {
        return $this->container['retryMaxTime'];
    }

    /**
    * Sets retryMaxTime
    *
    * @param int $retryMaxTime 最大重试次数，取值范围为1~16。
    *
    * @return $this
    */
    public function setRetryMaxTime($retryMaxTime)
    {
        $this->container['retryMaxTime'] = $retryMaxTime;
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

