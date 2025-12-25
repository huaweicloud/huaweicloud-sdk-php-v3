<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogicalClusterPlanActions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogicalClusterPlanActions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： create：创建 delete：删除
    * strategy  **参数解释**： 周期信息。Cron表达式：如\"0 0 0 ? * 3\"。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * preFireTime  **参数解释**： 上一次触发时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nextFireTime' => 'string',
            'failedReason' => 'string',
            'id' => 'string',
            'type' => 'string',
            'strategy' => 'string',
            'status' => 'string',
            'preFireTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： create：创建 delete：删除
    * strategy  **参数解释**： 周期信息。Cron表达式：如\"0 0 0 ? * 3\"。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * preFireTime  **参数解释**： 上一次触发时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nextFireTime' => null,
        'failedReason' => null,
        'id' => null,
        'type' => null,
        'strategy' => null,
        'status' => null,
        'preFireTime' => 'date'
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
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： create：创建 delete：删除
    * strategy  **参数解释**： 周期信息。Cron表达式：如\"0 0 0 ? * 3\"。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * preFireTime  **参数解释**： 上一次触发时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nextFireTime' => 'next_fire_time',
            'failedReason' => 'failed_reason',
            'id' => 'id',
            'type' => 'type',
            'strategy' => 'strategy',
            'status' => 'status',
            'preFireTime' => 'pre_fire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： create：创建 delete：删除
    * strategy  **参数解释**： 周期信息。Cron表达式：如\"0 0 0 ? * 3\"。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * preFireTime  **参数解释**： 上一次触发时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nextFireTime' => 'setNextFireTime',
            'failedReason' => 'setFailedReason',
            'id' => 'setId',
            'type' => 'setType',
            'strategy' => 'setStrategy',
            'status' => 'setStatus',
            'preFireTime' => 'setPreFireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nextFireTime  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    * failedReason  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    * id  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    * type  **参数解释**： 类型。 **取值范围**： create：创建 delete：删除
    * strategy  **参数解释**： 周期信息。Cron表达式：如\"0 0 0 ? * 3\"。 **取值范围**： 不涉及。
    * status  **参数解释**： 任务状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    * preFireTime  **参数解释**： 上一次触发时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nextFireTime' => 'getNextFireTime',
            'failedReason' => 'getFailedReason',
            'id' => 'getId',
            'type' => 'getType',
            'strategy' => 'getStrategy',
            'status' => 'getStatus',
            'preFireTime' => 'getPreFireTime'
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
        $this->container['nextFireTime'] = isset($data['nextFireTime']) ? $data['nextFireTime'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['preFireTime'] = isset($data['preFireTime']) ? $data['preFireTime'] : null;
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
    * Gets nextFireTime
    *  **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getNextFireTime()
    {
        return $this->container['nextFireTime'];
    }

    /**
    * Sets nextFireTime
    *
    * @param string|null $nextFireTime **参数解释**： 下一次触发时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNextFireTime($nextFireTime)
    {
        $this->container['nextFireTime'] = $nextFireTime;
        return $this;
    }

    /**
    * Gets failedReason
    *  **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason **参数解释**： 失败原因。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 任务ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 任务ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 类型。 **取值范围**： create：创建 delete：删除
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
    * @param string|null $type **参数解释**： 类型。 **取值范围**： create：创建 delete：删除
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets strategy
    *  **参数解释**： 周期信息。Cron表达式：如\"0 0 0 ? * 3\"。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param string|null $strategy **参数解释**： 周期信息。Cron表达式：如\"0 0 0 ? * 3\"。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 任务状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 任务状态。 **取值范围**： - running：运行中。 - waiting：等待中。 - deleted：已删除。 - finished：已完成。 - disabled：已禁用。 - failed：失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets preFireTime
    *  **参数解释**： 上一次触发时间。 **取值范围**： 不涉及。
    *
    * @return \DateTime|null
    */
    public function getPreFireTime()
    {
        return $this->container['preFireTime'];
    }

    /**
    * Sets preFireTime
    *
    * @param \DateTime|null $preFireTime **参数解释**： 上一次触发时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPreFireTime($preFireTime)
    {
        $this->container['preFireTime'] = $preFireTime;
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

