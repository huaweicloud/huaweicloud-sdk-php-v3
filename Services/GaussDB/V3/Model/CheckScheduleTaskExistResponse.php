<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckScheduleTaskExistResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckScheduleTaskExistResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exist  **参数解释**：  定时任务类型是否存在。 **取值范围**： - true：指定的定时任务类型已存在。 - false：指定的定时任务类型不存在。
    * scheduledTasks  **参数解释**：  定时任务详情列表。当 `exist` 为 true 时，此列表包含已存在的任务信息。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exist' => 'bool',
            'scheduledTasks' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ScheduledTaskV3[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exist  **参数解释**：  定时任务类型是否存在。 **取值范围**： - true：指定的定时任务类型已存在。 - false：指定的定时任务类型不存在。
    * scheduledTasks  **参数解释**：  定时任务详情列表。当 `exist` 为 true 时，此列表包含已存在的任务信息。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exist' => null,
        'scheduledTasks' => null
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
    * exist  **参数解释**：  定时任务类型是否存在。 **取值范围**： - true：指定的定时任务类型已存在。 - false：指定的定时任务类型不存在。
    * scheduledTasks  **参数解释**：  定时任务详情列表。当 `exist` 为 true 时，此列表包含已存在的任务信息。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exist' => 'exist',
            'scheduledTasks' => 'scheduled_tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exist  **参数解释**：  定时任务类型是否存在。 **取值范围**： - true：指定的定时任务类型已存在。 - false：指定的定时任务类型不存在。
    * scheduledTasks  **参数解释**：  定时任务详情列表。当 `exist` 为 true 时，此列表包含已存在的任务信息。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'exist' => 'setExist',
            'scheduledTasks' => 'setScheduledTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exist  **参数解释**：  定时任务类型是否存在。 **取值范围**： - true：指定的定时任务类型已存在。 - false：指定的定时任务类型不存在。
    * scheduledTasks  **参数解释**：  定时任务详情列表。当 `exist` 为 true 时，此列表包含已存在的任务信息。  **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'exist' => 'getExist',
            'scheduledTasks' => 'getScheduledTasks'
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
        $this->container['exist'] = isset($data['exist']) ? $data['exist'] : null;
        $this->container['scheduledTasks'] = isset($data['scheduledTasks']) ? $data['scheduledTasks'] : null;
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
    * Gets exist
    *  **参数解释**：  定时任务类型是否存在。 **取值范围**： - true：指定的定时任务类型已存在。 - false：指定的定时任务类型不存在。
    *
    * @return bool|null
    */
    public function getExist()
    {
        return $this->container['exist'];
    }

    /**
    * Sets exist
    *
    * @param bool|null $exist **参数解释**：  定时任务类型是否存在。 **取值范围**： - true：指定的定时任务类型已存在。 - false：指定的定时任务类型不存在。
    *
    * @return $this
    */
    public function setExist($exist)
    {
        $this->container['exist'] = $exist;
        return $this;
    }

    /**
    * Gets scheduledTasks
    *  **参数解释**：  定时任务详情列表。当 `exist` 为 true 时，此列表包含已存在的任务信息。  **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ScheduledTaskV3[]|null
    */
    public function getScheduledTasks()
    {
        return $this->container['scheduledTasks'];
    }

    /**
    * Sets scheduledTasks
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ScheduledTaskV3[]|null $scheduledTasks **参数解释**：  定时任务详情列表。当 `exist` 为 true 时，此列表包含已存在的任务信息。  **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setScheduledTasks($scheduledTasks)
    {
        $this->container['scheduledTasks'] = $scheduledTasks;
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

