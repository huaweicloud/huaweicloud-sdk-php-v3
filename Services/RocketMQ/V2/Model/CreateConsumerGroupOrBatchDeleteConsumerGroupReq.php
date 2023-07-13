<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateConsumerGroupOrBatchDeleteConsumerGroupReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateConsumerGroupOrBatchDeleteConsumerGroupReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groups  待删除的消费组列表。
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * fromBeginning  是否重头消费。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groups' => 'string[]',
            'enabled' => 'bool',
            'broadcast' => 'bool',
            'brokers' => 'string[]',
            'name' => 'string',
            'retryMaxTime' => 'float',
            'fromBeginning' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groups  待删除的消费组列表。
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * fromBeginning  是否重头消费。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groups' => null,
        'enabled' => null,
        'broadcast' => null,
        'brokers' => null,
        'name' => null,
        'retryMaxTime' => null,
        'fromBeginning' => null
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
    * groups  待删除的消费组列表。
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * fromBeginning  是否重头消费。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groups' => 'groups',
            'enabled' => 'enabled',
            'broadcast' => 'broadcast',
            'brokers' => 'brokers',
            'name' => 'name',
            'retryMaxTime' => 'retry_max_time',
            'fromBeginning' => 'from_beginning'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groups  待删除的消费组列表。
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * fromBeginning  是否重头消费。
    *
    * @var string[]
    */
    protected static $setters = [
            'groups' => 'setGroups',
            'enabled' => 'setEnabled',
            'broadcast' => 'setBroadcast',
            'brokers' => 'setBrokers',
            'name' => 'setName',
            'retryMaxTime' => 'setRetryMaxTime',
            'fromBeginning' => 'setFromBeginning'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groups  待删除的消费组列表。
    * enabled  是否可以消费。
    * broadcast  是否广播。
    * brokers  关联的代理列表。
    * name  消费组名称。
    * retryMaxTime  最大重试次数。
    * fromBeginning  是否重头消费。
    *
    * @var string[]
    */
    protected static $getters = [
            'groups' => 'getGroups',
            'enabled' => 'getEnabled',
            'broadcast' => 'getBroadcast',
            'brokers' => 'getBrokers',
            'name' => 'getName',
            'retryMaxTime' => 'getRetryMaxTime',
            'fromBeginning' => 'getFromBeginning'
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
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['broadcast'] = isset($data['broadcast']) ? $data['broadcast'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['retryMaxTime'] = isset($data['retryMaxTime']) ? $data['retryMaxTime'] : null;
        $this->container['fromBeginning'] = isset($data['fromBeginning']) ? $data['fromBeginning'] : null;
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
    * Gets groups
    *  待删除的消费组列表。
    *
    * @return string[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param string[]|null $groups 待删除的消费组列表。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets enabled
    *  是否可以消费。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否可以消费。
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
    * @return bool|null
    */
    public function getBroadcast()
    {
        return $this->container['broadcast'];
    }

    /**
    * Sets broadcast
    *
    * @param bool|null $broadcast 是否广播。
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
    *  消费组名称。
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
    * @param string|null $name 消费组名称。
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
    *  最大重试次数。
    *
    * @return float|null
    */
    public function getRetryMaxTime()
    {
        return $this->container['retryMaxTime'];
    }

    /**
    * Sets retryMaxTime
    *
    * @param float|null $retryMaxTime 最大重试次数。
    *
    * @return $this
    */
    public function setRetryMaxTime($retryMaxTime)
    {
        $this->container['retryMaxTime'] = $retryMaxTime;
        return $this;
    }

    /**
    * Gets fromBeginning
    *  是否重头消费。
    *
    * @return bool|null
    */
    public function getFromBeginning()
    {
        return $this->container['fromBeginning'];
    }

    /**
    * Sets fromBeginning
    *
    * @param bool|null $fromBeginning 是否重头消费。
    *
    * @return $this
    */
    public function setFromBeginning($fromBeginning)
    {
        $this->container['fromBeginning'] = $fromBeginning;
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

