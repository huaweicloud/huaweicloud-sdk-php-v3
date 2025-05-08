<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceConsumerGroupsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceConsumerGroupsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  **参数解释**： 消费组总数。 **取值范围**： 不涉及。
    * groups  **参数解释**： 消费组列表。
    * max  **参数解释**： 最大可创建消费组数量。 **取值范围**： 不涉及。
    * remaining  **参数解释**： 剩余可创建消费组数量。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'float',
            'groups' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ConsumerGroup[]',
            'max' => 'int',
            'remaining' => 'int',
            'nextOffset' => 'int',
            'previousOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  **参数解释**： 消费组总数。 **取值范围**： 不涉及。
    * groups  **参数解释**： 消费组列表。
    * max  **参数解释**： 最大可创建消费组数量。 **取值范围**： 不涉及。
    * remaining  **参数解释**： 剩余可创建消费组数量。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'groups' => null,
        'max' => 'int32',
        'remaining' => 'int32',
        'nextOffset' => 'int32',
        'previousOffset' => 'int32'
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
    * total  **参数解释**： 消费组总数。 **取值范围**： 不涉及。
    * groups  **参数解释**： 消费组列表。
    * max  **参数解释**： 最大可创建消费组数量。 **取值范围**： 不涉及。
    * remaining  **参数解释**： 剩余可创建消费组数量。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'groups' => 'groups',
            'max' => 'max',
            'remaining' => 'remaining',
            'nextOffset' => 'next_offset',
            'previousOffset' => 'previous_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  **参数解释**： 消费组总数。 **取值范围**： 不涉及。
    * groups  **参数解释**： 消费组列表。
    * max  **参数解释**： 最大可创建消费组数量。 **取值范围**： 不涉及。
    * remaining  **参数解释**： 剩余可创建消费组数量。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'groups' => 'setGroups',
            'max' => 'setMax',
            'remaining' => 'setRemaining',
            'nextOffset' => 'setNextOffset',
            'previousOffset' => 'setPreviousOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  **参数解释**： 消费组总数。 **取值范围**： 不涉及。
    * groups  **参数解释**： 消费组列表。
    * max  **参数解释**： 最大可创建消费组数量。 **取值范围**： 不涉及。
    * remaining  **参数解释**： 剩余可创建消费组数量。 **取值范围**： 不涉及。
    * nextOffset  **参数解释**： 下个分页的offset。 **取值范围**： 不涉及。
    * previousOffset  **参数解释**： 上个分页的offset。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'groups' => 'getGroups',
            'max' => 'getMax',
            'remaining' => 'getRemaining',
            'nextOffset' => 'getNextOffset',
            'previousOffset' => 'getPreviousOffset'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['remaining'] = isset($data['remaining']) ? $data['remaining'] : null;
        $this->container['nextOffset'] = isset($data['nextOffset']) ? $data['nextOffset'] : null;
        $this->container['previousOffset'] = isset($data['previousOffset']) ? $data['previousOffset'] : null;
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
    * Gets total
    *  **参数解释**： 消费组总数。 **取值范围**： 不涉及。
    *
    * @return float|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param float|null $total **参数解释**： 消费组总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets groups
    *  **参数解释**： 消费组列表。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ConsumerGroup[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ConsumerGroup[]|null $groups **参数解释**： 消费组列表。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets max
    *  **参数解释**： 最大可创建消费组数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max **参数解释**： 最大可创建消费组数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets remaining
    *  **参数解释**： 剩余可创建消费组数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
    * Sets remaining
    *
    * @param int|null $remaining **参数解释**： 剩余可创建消费组数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRemaining($remaining)
    {
        $this->container['remaining'] = $remaining;
        return $this;
    }

    /**
    * Gets nextOffset
    *  **参数解释**： 下个分页的offset。 **取值范围**： 不涉及。
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
    * @param int|null $nextOffset **参数解释**： 下个分页的offset。 **取值范围**： 不涉及。
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
    *  **参数解释**： 上个分页的offset。 **取值范围**： 不涉及。
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
    * @param int|null $previousOffset **参数解释**： 上个分页的offset。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPreviousOffset($previousOffset)
    {
        $this->container['previousOffset'] = $previousOffset;
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

