<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTrainingJobEventsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTrainingJobEventsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  **参数解释**：总条数。 **取值范围**：不涉及。
    * limit  **参数解释**：最大显示条数。 **取值范围**：不涉及。
    * offset  **参数解释**：开始的条数。 **取值范围**：不涉及。
    * order  **参数解释**：排序方式。 **取值范围**：不涉及。
    * startTime  **参数解释**：事件的开始时间。 **取值范围**：不涉及。
    * endTime  **参数解释**：事件的结束时间。 **取值范围**：不涉及。
    * events  **参数解释**：事件列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'order' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'events' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Event[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  **参数解释**：总条数。 **取值范围**：不涉及。
    * limit  **参数解释**：最大显示条数。 **取值范围**：不涉及。
    * offset  **参数解释**：开始的条数。 **取值范围**：不涉及。
    * order  **参数解释**：排序方式。 **取值范围**：不涉及。
    * startTime  **参数解释**：事件的开始时间。 **取值范围**：不涉及。
    * endTime  **参数解释**：事件的结束时间。 **取值范围**：不涉及。
    * events  **参数解释**：事件列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'limit' => 'int32',
        'offset' => 'int32',
        'order' => null,
        'startTime' => null,
        'endTime' => null,
        'events' => null
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
    * total  **参数解释**：总条数。 **取值范围**：不涉及。
    * limit  **参数解释**：最大显示条数。 **取值范围**：不涉及。
    * offset  **参数解释**：开始的条数。 **取值范围**：不涉及。
    * order  **参数解释**：排序方式。 **取值范围**：不涉及。
    * startTime  **参数解释**：事件的开始时间。 **取值范围**：不涉及。
    * endTime  **参数解释**：事件的结束时间。 **取值范围**：不涉及。
    * events  **参数解释**：事件列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'limit' => 'limit',
            'offset' => 'offset',
            'order' => 'order',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'events' => 'events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  **参数解释**：总条数。 **取值范围**：不涉及。
    * limit  **参数解释**：最大显示条数。 **取值范围**：不涉及。
    * offset  **参数解释**：开始的条数。 **取值范围**：不涉及。
    * order  **参数解释**：排序方式。 **取值范围**：不涉及。
    * startTime  **参数解释**：事件的开始时间。 **取值范围**：不涉及。
    * endTime  **参数解释**：事件的结束时间。 **取值范围**：不涉及。
    * events  **参数解释**：事件列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'order' => 'setOrder',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'events' => 'setEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  **参数解释**：总条数。 **取值范围**：不涉及。
    * limit  **参数解释**：最大显示条数。 **取值范围**：不涉及。
    * offset  **参数解释**：开始的条数。 **取值范围**：不涉及。
    * order  **参数解释**：排序方式。 **取值范围**：不涉及。
    * startTime  **参数解释**：事件的开始时间。 **取值范围**：不涉及。
    * endTime  **参数解释**：事件的结束时间。 **取值范围**：不涉及。
    * events  **参数解释**：事件列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'order' => 'getOrder',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'events' => 'getEvents'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
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
    *  **参数解释**：总条数。 **取值范围**：不涉及。
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
    * @param int|null $total **参数解释**：总条数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**：最大显示条数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**：最大显示条数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**：开始的条数。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**：开始的条数。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets order
    *  **参数解释**：排序方式。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order **参数解释**：排序方式。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：事件的开始时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**：事件的开始时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**：事件的结束时间。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**：事件的结束时间。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets events
    *  **参数解释**：事件列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Event[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Event[]|null $events **参数解释**：事件列表。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
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

