<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrationRocketMqSubscriptionGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrationRocketMqSubscriptionGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  消费组名。
    * consumeBroadcastEnable  是否允许以广播模式消费。
    * consumeEnable  是否允许消费。
    * consumeFromMinEnable  是否从最小偏移量开始消费。
    * notifyConsumerIdsChangedEnable  消费者ID变化时是否通知。
    * retryMaxTimes  消费最大重试次数。
    * retryQueueNums  重试队列个数。
    * whichBrokerWhenConsumeSlow  慢消费时选择的broker节点ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'consumeBroadcastEnable' => 'bool',
            'consumeEnable' => 'bool',
            'consumeFromMinEnable' => 'bool',
            'notifyConsumerIdsChangedEnable' => 'bool',
            'retryMaxTimes' => 'int',
            'retryQueueNums' => 'int',
            'whichBrokerWhenConsumeSlow' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  消费组名。
    * consumeBroadcastEnable  是否允许以广播模式消费。
    * consumeEnable  是否允许消费。
    * consumeFromMinEnable  是否从最小偏移量开始消费。
    * notifyConsumerIdsChangedEnable  消费者ID变化时是否通知。
    * retryMaxTimes  消费最大重试次数。
    * retryQueueNums  重试队列个数。
    * whichBrokerWhenConsumeSlow  慢消费时选择的broker节点ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'consumeBroadcastEnable' => null,
        'consumeEnable' => null,
        'consumeFromMinEnable' => null,
        'notifyConsumerIdsChangedEnable' => null,
        'retryMaxTimes' => 'int32',
        'retryQueueNums' => 'int32',
        'whichBrokerWhenConsumeSlow' => 'int64'
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
    * groupName  消费组名。
    * consumeBroadcastEnable  是否允许以广播模式消费。
    * consumeEnable  是否允许消费。
    * consumeFromMinEnable  是否从最小偏移量开始消费。
    * notifyConsumerIdsChangedEnable  消费者ID变化时是否通知。
    * retryMaxTimes  消费最大重试次数。
    * retryQueueNums  重试队列个数。
    * whichBrokerWhenConsumeSlow  慢消费时选择的broker节点ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'groupName',
            'consumeBroadcastEnable' => 'consumeBroadcastEnable',
            'consumeEnable' => 'consumeEnable',
            'consumeFromMinEnable' => 'consumeFromMinEnable',
            'notifyConsumerIdsChangedEnable' => 'notifyConsumerIdsChangedEnable',
            'retryMaxTimes' => 'retryMaxTimes',
            'retryQueueNums' => 'retryQueueNums',
            'whichBrokerWhenConsumeSlow' => 'whichBrokerWhenConsumeSlow'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  消费组名。
    * consumeBroadcastEnable  是否允许以广播模式消费。
    * consumeEnable  是否允许消费。
    * consumeFromMinEnable  是否从最小偏移量开始消费。
    * notifyConsumerIdsChangedEnable  消费者ID变化时是否通知。
    * retryMaxTimes  消费最大重试次数。
    * retryQueueNums  重试队列个数。
    * whichBrokerWhenConsumeSlow  慢消费时选择的broker节点ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'consumeBroadcastEnable' => 'setConsumeBroadcastEnable',
            'consumeEnable' => 'setConsumeEnable',
            'consumeFromMinEnable' => 'setConsumeFromMinEnable',
            'notifyConsumerIdsChangedEnable' => 'setNotifyConsumerIdsChangedEnable',
            'retryMaxTimes' => 'setRetryMaxTimes',
            'retryQueueNums' => 'setRetryQueueNums',
            'whichBrokerWhenConsumeSlow' => 'setWhichBrokerWhenConsumeSlow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  消费组名。
    * consumeBroadcastEnable  是否允许以广播模式消费。
    * consumeEnable  是否允许消费。
    * consumeFromMinEnable  是否从最小偏移量开始消费。
    * notifyConsumerIdsChangedEnable  消费者ID变化时是否通知。
    * retryMaxTimes  消费最大重试次数。
    * retryQueueNums  重试队列个数。
    * whichBrokerWhenConsumeSlow  慢消费时选择的broker节点ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'consumeBroadcastEnable' => 'getConsumeBroadcastEnable',
            'consumeEnable' => 'getConsumeEnable',
            'consumeFromMinEnable' => 'getConsumeFromMinEnable',
            'notifyConsumerIdsChangedEnable' => 'getNotifyConsumerIdsChangedEnable',
            'retryMaxTimes' => 'getRetryMaxTimes',
            'retryQueueNums' => 'getRetryQueueNums',
            'whichBrokerWhenConsumeSlow' => 'getWhichBrokerWhenConsumeSlow'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['consumeBroadcastEnable'] = isset($data['consumeBroadcastEnable']) ? $data['consumeBroadcastEnable'] : null;
        $this->container['consumeEnable'] = isset($data['consumeEnable']) ? $data['consumeEnable'] : null;
        $this->container['consumeFromMinEnable'] = isset($data['consumeFromMinEnable']) ? $data['consumeFromMinEnable'] : null;
        $this->container['notifyConsumerIdsChangedEnable'] = isset($data['notifyConsumerIdsChangedEnable']) ? $data['notifyConsumerIdsChangedEnable'] : null;
        $this->container['retryMaxTimes'] = isset($data['retryMaxTimes']) ? $data['retryMaxTimes'] : null;
        $this->container['retryQueueNums'] = isset($data['retryQueueNums']) ? $data['retryQueueNums'] : null;
        $this->container['whichBrokerWhenConsumeSlow'] = isset($data['whichBrokerWhenConsumeSlow']) ? $data['whichBrokerWhenConsumeSlow'] : null;
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
    * Gets groupName
    *  消费组名。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 消费组名。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets consumeBroadcastEnable
    *  是否允许以广播模式消费。
    *
    * @return bool|null
    */
    public function getConsumeBroadcastEnable()
    {
        return $this->container['consumeBroadcastEnable'];
    }

    /**
    * Sets consumeBroadcastEnable
    *
    * @param bool|null $consumeBroadcastEnable 是否允许以广播模式消费。
    *
    * @return $this
    */
    public function setConsumeBroadcastEnable($consumeBroadcastEnable)
    {
        $this->container['consumeBroadcastEnable'] = $consumeBroadcastEnable;
        return $this;
    }

    /**
    * Gets consumeEnable
    *  是否允许消费。
    *
    * @return bool|null
    */
    public function getConsumeEnable()
    {
        return $this->container['consumeEnable'];
    }

    /**
    * Sets consumeEnable
    *
    * @param bool|null $consumeEnable 是否允许消费。
    *
    * @return $this
    */
    public function setConsumeEnable($consumeEnable)
    {
        $this->container['consumeEnable'] = $consumeEnable;
        return $this;
    }

    /**
    * Gets consumeFromMinEnable
    *  是否从最小偏移量开始消费。
    *
    * @return bool|null
    */
    public function getConsumeFromMinEnable()
    {
        return $this->container['consumeFromMinEnable'];
    }

    /**
    * Sets consumeFromMinEnable
    *
    * @param bool|null $consumeFromMinEnable 是否从最小偏移量开始消费。
    *
    * @return $this
    */
    public function setConsumeFromMinEnable($consumeFromMinEnable)
    {
        $this->container['consumeFromMinEnable'] = $consumeFromMinEnable;
        return $this;
    }

    /**
    * Gets notifyConsumerIdsChangedEnable
    *  消费者ID变化时是否通知。
    *
    * @return bool|null
    */
    public function getNotifyConsumerIdsChangedEnable()
    {
        return $this->container['notifyConsumerIdsChangedEnable'];
    }

    /**
    * Sets notifyConsumerIdsChangedEnable
    *
    * @param bool|null $notifyConsumerIdsChangedEnable 消费者ID变化时是否通知。
    *
    * @return $this
    */
    public function setNotifyConsumerIdsChangedEnable($notifyConsumerIdsChangedEnable)
    {
        $this->container['notifyConsumerIdsChangedEnable'] = $notifyConsumerIdsChangedEnable;
        return $this;
    }

    /**
    * Gets retryMaxTimes
    *  消费最大重试次数。
    *
    * @return int|null
    */
    public function getRetryMaxTimes()
    {
        return $this->container['retryMaxTimes'];
    }

    /**
    * Sets retryMaxTimes
    *
    * @param int|null $retryMaxTimes 消费最大重试次数。
    *
    * @return $this
    */
    public function setRetryMaxTimes($retryMaxTimes)
    {
        $this->container['retryMaxTimes'] = $retryMaxTimes;
        return $this;
    }

    /**
    * Gets retryQueueNums
    *  重试队列个数。
    *
    * @return int|null
    */
    public function getRetryQueueNums()
    {
        return $this->container['retryQueueNums'];
    }

    /**
    * Sets retryQueueNums
    *
    * @param int|null $retryQueueNums 重试队列个数。
    *
    * @return $this
    */
    public function setRetryQueueNums($retryQueueNums)
    {
        $this->container['retryQueueNums'] = $retryQueueNums;
        return $this;
    }

    /**
    * Gets whichBrokerWhenConsumeSlow
    *  慢消费时选择的broker节点ID。
    *
    * @return int|null
    */
    public function getWhichBrokerWhenConsumeSlow()
    {
        return $this->container['whichBrokerWhenConsumeSlow'];
    }

    /**
    * Sets whichBrokerWhenConsumeSlow
    *
    * @param int|null $whichBrokerWhenConsumeSlow 慢消费时选择的broker节点ID。
    *
    * @return $this
    */
    public function setWhichBrokerWhenConsumeSlow($whichBrokerWhenConsumeSlow)
    {
        $this->container['whichBrokerWhenConsumeSlow'] = $whichBrokerWhenConsumeSlow;
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

