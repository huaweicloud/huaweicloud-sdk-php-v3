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
    * groupName  **参数解释**： 消费组名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeBroadcastEnable  **参数解释**： 是否允许以广播模式消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许以广播模式消费。 - false：不允许以广播模式消费。 **默认取值**： 不涉及。
    * consumeEnable  **参数解释**： 是否允许消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许消费。 - false：不允许消费。 **默认取值**： true。
    * consumeFromMinEnable  **参数解释**： 是否从最小偏移量开始消费。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * notifyConsumerIdsChangedEnable  **参数解释**： 消费者ID变化时是否通知。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * retryMaxTimes  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 16。
    * retryQueueNums  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
    * whichBrokerWhenConsumeSlow  **参数解释**： 慢消费时选择的broker节点ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
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
    * groupName  **参数解释**： 消费组名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeBroadcastEnable  **参数解释**： 是否允许以广播模式消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许以广播模式消费。 - false：不允许以广播模式消费。 **默认取值**： 不涉及。
    * consumeEnable  **参数解释**： 是否允许消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许消费。 - false：不允许消费。 **默认取值**： true。
    * consumeFromMinEnable  **参数解释**： 是否从最小偏移量开始消费。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * notifyConsumerIdsChangedEnable  **参数解释**： 消费者ID变化时是否通知。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * retryMaxTimes  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 16。
    * retryQueueNums  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
    * whichBrokerWhenConsumeSlow  **参数解释**： 慢消费时选择的broker节点ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
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
    * groupName  **参数解释**： 消费组名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeBroadcastEnable  **参数解释**： 是否允许以广播模式消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许以广播模式消费。 - false：不允许以广播模式消费。 **默认取值**： 不涉及。
    * consumeEnable  **参数解释**： 是否允许消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许消费。 - false：不允许消费。 **默认取值**： true。
    * consumeFromMinEnable  **参数解释**： 是否从最小偏移量开始消费。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * notifyConsumerIdsChangedEnable  **参数解释**： 消费者ID变化时是否通知。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * retryMaxTimes  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 16。
    * retryQueueNums  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
    * whichBrokerWhenConsumeSlow  **参数解释**： 慢消费时选择的broker节点ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'consumeBroadcastEnable' => 'consume_broadcast_enable',
            'consumeEnable' => 'consume_enable',
            'consumeFromMinEnable' => 'consume_from_min_enable',
            'notifyConsumerIdsChangedEnable' => 'notify_consumer_ids_changed_enable',
            'retryMaxTimes' => 'retry_max_times',
            'retryQueueNums' => 'retry_queue_nums',
            'whichBrokerWhenConsumeSlow' => 'which_broker_when_consume_slow'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释**： 消费组名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeBroadcastEnable  **参数解释**： 是否允许以广播模式消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许以广播模式消费。 - false：不允许以广播模式消费。 **默认取值**： 不涉及。
    * consumeEnable  **参数解释**： 是否允许消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许消费。 - false：不允许消费。 **默认取值**： true。
    * consumeFromMinEnable  **参数解释**： 是否从最小偏移量开始消费。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * notifyConsumerIdsChangedEnable  **参数解释**： 消费者ID变化时是否通知。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * retryMaxTimes  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 16。
    * retryQueueNums  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
    * whichBrokerWhenConsumeSlow  **参数解释**： 慢消费时选择的broker节点ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
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
    * groupName  **参数解释**： 消费组名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumeBroadcastEnable  **参数解释**： 是否允许以广播模式消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许以广播模式消费。 - false：不允许以广播模式消费。 **默认取值**： 不涉及。
    * consumeEnable  **参数解释**： 是否允许消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许消费。 - false：不允许消费。 **默认取值**： true。
    * consumeFromMinEnable  **参数解释**： 是否从最小偏移量开始消费。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * notifyConsumerIdsChangedEnable  **参数解释**： 消费者ID变化时是否通知。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
    * retryMaxTimes  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 16。
    * retryQueueNums  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
    * whichBrokerWhenConsumeSlow  **参数解释**： 慢消费时选择的broker节点ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
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
    *  **参数解释**： 消费组名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $groupName **参数解释**： 消费组名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 是否允许以广播模式消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许以广播模式消费。 - false：不允许以广播模式消费。 **默认取值**： 不涉及。
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
    * @param bool|null $consumeBroadcastEnable **参数解释**： 是否允许以广播模式消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许以广播模式消费。 - false：不允许以广播模式消费。 **默认取值**： 不涉及。
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
    *  **参数解释**： 是否允许消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许消费。 - false：不允许消费。 **默认取值**： true。
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
    * @param bool|null $consumeEnable **参数解释**： 是否允许消费。 **约束限制**： 不涉及。 **取值范围**： - true：允许消费。 - false：不允许消费。 **默认取值**： true。
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
    *  **参数解释**： 是否从最小偏移量开始消费。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
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
    * @param bool|null $consumeFromMinEnable **参数解释**： 是否从最小偏移量开始消费。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
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
    *  **参数解释**： 消费者ID变化时是否通知。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
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
    * @param bool|null $notifyConsumerIdsChangedEnable **参数解释**： 消费者ID变化时是否通知。 **约束限制**： 不涉及。 **取值范围**： - true：是。 - false：不是。 **默认取值**： true。
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
    *  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 16。
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
    * @param int|null $retryMaxTimes **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 16。
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
    *  **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
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
    * @param int|null $retryQueueNums **参数解释**： 消费最大重试次数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
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
    *  **参数解释**： 慢消费时选择的broker节点ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
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
    * @param int|null $whichBrokerWhenConsumeSlow **参数解释**： 慢消费时选择的broker节点ID **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1。
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

