<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConsumerListOrDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConsumerListOrDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topics  **参数解释**： Topic列表（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * total  **参数解释**： Topic总数（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * lag  **参数解释**： 消费堆积总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxOffset  **参数解释**： 消息总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumerOffset  **参数解释**： 已消费消息数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： Topic关联代理（当查询Topic消费“详情”才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topics' => 'string[]',
            'total' => 'int',
            'lag' => 'int',
            'maxOffset' => 'int',
            'consumerOffset' => 'int',
            'brokers' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\Brokers[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topics  **参数解释**： Topic列表（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * total  **参数解释**： Topic总数（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * lag  **参数解释**： 消费堆积总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxOffset  **参数解释**： 消息总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumerOffset  **参数解释**： 已消费消息数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： Topic关联代理（当查询Topic消费“详情”才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topics' => null,
        'total' => 'int32',
        'lag' => 'int64',
        'maxOffset' => 'int64',
        'consumerOffset' => 'int64',
        'brokers' => null
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
    * topics  **参数解释**： Topic列表（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * total  **参数解释**： Topic总数（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * lag  **参数解释**： 消费堆积总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxOffset  **参数解释**： 消息总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumerOffset  **参数解释**： 已消费消息数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： Topic关联代理（当查询Topic消费“详情”才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topics' => 'topics',
            'total' => 'total',
            'lag' => 'lag',
            'maxOffset' => 'max_offset',
            'consumerOffset' => 'consumer_offset',
            'brokers' => 'brokers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topics  **参数解释**： Topic列表（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * total  **参数解释**： Topic总数（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * lag  **参数解释**： 消费堆积总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxOffset  **参数解释**： 消息总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumerOffset  **参数解释**： 已消费消息数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： Topic关联代理（当查询Topic消费“详情”才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'topics' => 'setTopics',
            'total' => 'setTotal',
            'lag' => 'setLag',
            'maxOffset' => 'setMaxOffset',
            'consumerOffset' => 'setConsumerOffset',
            'brokers' => 'setBrokers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topics  **参数解释**： Topic列表（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * total  **参数解释**： Topic总数（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * lag  **参数解释**： 消费堆积总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * maxOffset  **参数解释**： 消息总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * consumerOffset  **参数解释**： 已消费消息数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * brokers  **参数解释**： Topic关联代理（当查询Topic消费“详情”才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'topics' => 'getTopics',
            'total' => 'getTotal',
            'lag' => 'getLag',
            'maxOffset' => 'getMaxOffset',
            'consumerOffset' => 'getConsumerOffset',
            'brokers' => 'getBrokers'
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
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['lag'] = isset($data['lag']) ? $data['lag'] : null;
        $this->container['maxOffset'] = isset($data['maxOffset']) ? $data['maxOffset'] : null;
        $this->container['consumerOffset'] = isset($data['consumerOffset']) ? $data['consumerOffset'] : null;
        $this->container['brokers'] = isset($data['brokers']) ? $data['brokers'] : null;
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
    * Gets topics
    *  **参数解释**： Topic列表（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param string[]|null $topics **参数解释**： Topic列表（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： Topic总数（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： Topic总数（当查询Topic消费“列表”时才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets lag
    *  **参数解释**： 消费堆积总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getLag()
    {
        return $this->container['lag'];
    }

    /**
    * Sets lag
    *
    * @param int|null $lag **参数解释**： 消费堆积总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLag($lag)
    {
        $this->container['lag'] = $lag;
        return $this;
    }

    /**
    * Gets maxOffset
    *  **参数解释**： 消息总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxOffset()
    {
        return $this->container['maxOffset'];
    }

    /**
    * Sets maxOffset
    *
    * @param int|null $maxOffset **参数解释**： 消息总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMaxOffset($maxOffset)
    {
        $this->container['maxOffset'] = $maxOffset;
        return $this;
    }

    /**
    * Gets consumerOffset
    *  **参数解释**： 已消费消息数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getConsumerOffset()
    {
        return $this->container['consumerOffset'];
    }

    /**
    * Sets consumerOffset
    *
    * @param int|null $consumerOffset **参数解释**： 已消费消息数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setConsumerOffset($consumerOffset)
    {
        $this->container['consumerOffset'] = $consumerOffset;
        return $this;
    }

    /**
    * Gets brokers
    *  **参数解释**： Topic关联代理（当查询Topic消费“详情”才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\Brokers[]|null
    */
    public function getBrokers()
    {
        return $this->container['brokers'];
    }

    /**
    * Sets brokers
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\Brokers[]|null $brokers **参数解释**： Topic关联代理（当查询Topic消费“详情”才显示此参数）。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setBrokers($brokers)
    {
        $this->container['brokers'] = $brokers;
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

