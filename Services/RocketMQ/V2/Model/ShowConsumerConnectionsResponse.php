<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConsumerConnectionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConsumerConnectionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * online  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：在线。 - false：不在线。 **默认取值**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅关系是否一致。 **约束限制**： 不涉及。 **取值范围**： - true：一致。 - false：不一致。 **默认取值**： 不涉及。
    * total  **参数解释**： 消费者总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clients  **参数解释**： 消费者订阅详情列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'online' => 'bool',
            'subscriptionConsistency' => 'bool',
            'total' => 'int',
            'nextOffset' => 'int',
            'previousOffset' => 'int',
            'clients' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ClientData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * online  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：在线。 - false：不在线。 **默认取值**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅关系是否一致。 **约束限制**： 不涉及。 **取值范围**： - true：一致。 - false：不一致。 **默认取值**： 不涉及。
    * total  **参数解释**： 消费者总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clients  **参数解释**： 消费者订阅详情列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'online' => null,
        'subscriptionConsistency' => null,
        'total' => 'int32',
        'nextOffset' => 'int32',
        'previousOffset' => 'int32',
        'clients' => null
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
    * groupName  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * online  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：在线。 - false：不在线。 **默认取值**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅关系是否一致。 **约束限制**： 不涉及。 **取值范围**： - true：一致。 - false：不一致。 **默认取值**： 不涉及。
    * total  **参数解释**： 消费者总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clients  **参数解释**： 消费者订阅详情列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'online' => 'online',
            'subscriptionConsistency' => 'subscription_consistency',
            'total' => 'total',
            'nextOffset' => 'next_offset',
            'previousOffset' => 'previous_offset',
            'clients' => 'clients'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * online  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：在线。 - false：不在线。 **默认取值**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅关系是否一致。 **约束限制**： 不涉及。 **取值范围**： - true：一致。 - false：不一致。 **默认取值**： 不涉及。
    * total  **参数解释**： 消费者总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clients  **参数解释**： 消费者订阅详情列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'online' => 'setOnline',
            'subscriptionConsistency' => 'setSubscriptionConsistency',
            'total' => 'setTotal',
            'nextOffset' => 'setNextOffset',
            'previousOffset' => 'setPreviousOffset',
            'clients' => 'setClients'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * online  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：在线。 - false：不在线。 **默认取值**： 不涉及。
    * subscriptionConsistency  **参数解释**： 订阅关系是否一致。 **约束限制**： 不涉及。 **取值范围**： - true：一致。 - false：不一致。 **默认取值**： 不涉及。
    * total  **参数解释**： 消费者总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * clients  **参数解释**： 消费者订阅详情列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'online' => 'getOnline',
            'subscriptionConsistency' => 'getSubscriptionConsistency',
            'total' => 'getTotal',
            'nextOffset' => 'getNextOffset',
            'previousOffset' => 'getPreviousOffset',
            'clients' => 'getClients'
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
        $this->container['online'] = isset($data['online']) ? $data['online'] : null;
        $this->container['subscriptionConsistency'] = isset($data['subscriptionConsistency']) ? $data['subscriptionConsistency'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['nextOffset'] = isset($data['nextOffset']) ? $data['nextOffset'] : null;
        $this->container['previousOffset'] = isset($data['previousOffset']) ? $data['previousOffset'] : null;
        $this->container['clients'] = isset($data['clients']) ? $data['clients'] : null;
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
    *  **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $groupName **参数解释**： 消费组名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets online
    *  **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：在线。 - false：不在线。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
    * Sets online
    *
    * @param bool|null $online **参数解释**： 消费组是否在线。 **约束限制**： 不涉及。 **取值范围**： - true：在线。 - false：不在线。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setOnline($online)
    {
        $this->container['online'] = $online;
        return $this;
    }

    /**
    * Gets subscriptionConsistency
    *  **参数解释**： 订阅关系是否一致。 **约束限制**： 不涉及。 **取值范围**： - true：一致。 - false：不一致。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getSubscriptionConsistency()
    {
        return $this->container['subscriptionConsistency'];
    }

    /**
    * Sets subscriptionConsistency
    *
    * @param bool|null $subscriptionConsistency **参数解释**： 订阅关系是否一致。 **约束限制**： 不涉及。 **取值范围**： - true：一致。 - false：不一致。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSubscriptionConsistency($subscriptionConsistency)
    {
        $this->container['subscriptionConsistency'] = $subscriptionConsistency;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 消费者总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param int|null $total **参数解释**： 消费者总数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets nextOffset
    *  **参数解释**： 下个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getNextOffset()
    {
        return $this->container['nextOffset'];
    }

    /**
    * Sets nextOffset
    *
    * @param int|null $nextOffset **参数解释**： 下个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNextOffset($nextOffset)
    {
        $this->container['nextOffset'] = $nextOffset;
        return $this;
    }

    /**
    * Gets previousOffset
    *  **参数解释**： 上个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getPreviousOffset()
    {
        return $this->container['previousOffset'];
    }

    /**
    * Sets previousOffset
    *
    * @param int|null $previousOffset **参数解释**： 上个分页的offset。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPreviousOffset($previousOffset)
    {
        $this->container['previousOffset'] = $previousOffset;
        return $this;
    }

    /**
    * Gets clients
    *  **参数解释**： 消费者订阅详情列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ClientData[]|null
    */
    public function getClients()
    {
        return $this->container['clients'];
    }

    /**
    * Sets clients
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ClientData[]|null $clients **参数解释**： 消费者订阅详情列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setClients($clients)
    {
        $this->container['clients'] = $clients;
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

