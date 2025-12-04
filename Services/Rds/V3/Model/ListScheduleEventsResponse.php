<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduleEventsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduleEventsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  **参数解释**：  事件总数。  **约束限制**：  不涉及。
    * inquiringCount  **参数解释**：  待授权的事件数。  **约束限制**：  不涉及。
    * scheduleCount  **参数解释**：  待执行的事件数。  **约束限制**：  不涉及。
    * executingCount  **参数解释**：  正在执行的事件数。  **约束限制**：  不涉及。
    * failedCount  **参数解释**：  执行失败的事件数。  **约束限制**：  不涉及。
    * events  **参数解释**：  事件详情列表。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'inquiringCount' => 'int',
            'scheduleCount' => 'int',
            'executingCount' => 'int',
            'failedCount' => 'int',
            'events' => '\HuaweiCloud\SDK\Rds\V3\Model\ScheduleEventInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  **参数解释**：  事件总数。  **约束限制**：  不涉及。
    * inquiringCount  **参数解释**：  待授权的事件数。  **约束限制**：  不涉及。
    * scheduleCount  **参数解释**：  待执行的事件数。  **约束限制**：  不涉及。
    * executingCount  **参数解释**：  正在执行的事件数。  **约束限制**：  不涉及。
    * failedCount  **参数解释**：  执行失败的事件数。  **约束限制**：  不涉及。
    * events  **参数解释**：  事件详情列表。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
        'inquiringCount' => 'int32',
        'scheduleCount' => 'int32',
        'executingCount' => 'int32',
        'failedCount' => 'int32',
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
    * totalCount  **参数解释**：  事件总数。  **约束限制**：  不涉及。
    * inquiringCount  **参数解释**：  待授权的事件数。  **约束限制**：  不涉及。
    * scheduleCount  **参数解释**：  待执行的事件数。  **约束限制**：  不涉及。
    * executingCount  **参数解释**：  正在执行的事件数。  **约束限制**：  不涉及。
    * failedCount  **参数解释**：  执行失败的事件数。  **约束限制**：  不涉及。
    * events  **参数解释**：  事件详情列表。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'inquiringCount' => 'inquiring_count',
            'scheduleCount' => 'schedule_count',
            'executingCount' => 'executing_count',
            'failedCount' => 'failed_count',
            'events' => 'events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  **参数解释**：  事件总数。  **约束限制**：  不涉及。
    * inquiringCount  **参数解释**：  待授权的事件数。  **约束限制**：  不涉及。
    * scheduleCount  **参数解释**：  待执行的事件数。  **约束限制**：  不涉及。
    * executingCount  **参数解释**：  正在执行的事件数。  **约束限制**：  不涉及。
    * failedCount  **参数解释**：  执行失败的事件数。  **约束限制**：  不涉及。
    * events  **参数解释**：  事件详情列表。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'inquiringCount' => 'setInquiringCount',
            'scheduleCount' => 'setScheduleCount',
            'executingCount' => 'setExecutingCount',
            'failedCount' => 'setFailedCount',
            'events' => 'setEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  **参数解释**：  事件总数。  **约束限制**：  不涉及。
    * inquiringCount  **参数解释**：  待授权的事件数。  **约束限制**：  不涉及。
    * scheduleCount  **参数解释**：  待执行的事件数。  **约束限制**：  不涉及。
    * executingCount  **参数解释**：  正在执行的事件数。  **约束限制**：  不涉及。
    * failedCount  **参数解释**：  执行失败的事件数。  **约束限制**：  不涉及。
    * events  **参数解释**：  事件详情列表。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'inquiringCount' => 'getInquiringCount',
            'scheduleCount' => 'getScheduleCount',
            'executingCount' => 'getExecutingCount',
            'failedCount' => 'getFailedCount',
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['inquiringCount'] = isset($data['inquiringCount']) ? $data['inquiringCount'] : null;
        $this->container['scheduleCount'] = isset($data['scheduleCount']) ? $data['scheduleCount'] : null;
        $this->container['executingCount'] = isset($data['executingCount']) ? $data['executingCount'] : null;
        $this->container['failedCount'] = isset($data['failedCount']) ? $data['failedCount'] : null;
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
    * Gets totalCount
    *  **参数解释**：  事件总数。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释**：  事件总数。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets inquiringCount
    *  **参数解释**：  待授权的事件数。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getInquiringCount()
    {
        return $this->container['inquiringCount'];
    }

    /**
    * Sets inquiringCount
    *
    * @param int|null $inquiringCount **参数解释**：  待授权的事件数。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setInquiringCount($inquiringCount)
    {
        $this->container['inquiringCount'] = $inquiringCount;
        return $this;
    }

    /**
    * Gets scheduleCount
    *  **参数解释**：  待执行的事件数。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getScheduleCount()
    {
        return $this->container['scheduleCount'];
    }

    /**
    * Sets scheduleCount
    *
    * @param int|null $scheduleCount **参数解释**：  待执行的事件数。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setScheduleCount($scheduleCount)
    {
        $this->container['scheduleCount'] = $scheduleCount;
        return $this;
    }

    /**
    * Gets executingCount
    *  **参数解释**：  正在执行的事件数。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getExecutingCount()
    {
        return $this->container['executingCount'];
    }

    /**
    * Sets executingCount
    *
    * @param int|null $executingCount **参数解释**：  正在执行的事件数。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setExecutingCount($executingCount)
    {
        $this->container['executingCount'] = $executingCount;
        return $this;
    }

    /**
    * Gets failedCount
    *  **参数解释**：  执行失败的事件数。  **约束限制**：  不涉及。
    *
    * @return int|null
    */
    public function getFailedCount()
    {
        return $this->container['failedCount'];
    }

    /**
    * Sets failedCount
    *
    * @param int|null $failedCount **参数解释**：  执行失败的事件数。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setFailedCount($failedCount)
    {
        $this->container['failedCount'] = $failedCount;
        return $this;
    }

    /**
    * Gets events
    *  **参数解释**：  事件详情列表。  **约束限制**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\ScheduleEventInfo[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\ScheduleEventInfo[]|null $events **参数解释**：  事件详情列表。  **约束限制**：  不涉及。
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

