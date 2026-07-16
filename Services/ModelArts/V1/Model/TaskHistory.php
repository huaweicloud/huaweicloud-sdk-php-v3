<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * task  **参数解释**：实例名。 **取值范围**：不涉及。
    * ip  **参数解释**：实例IP。 **取值范围**：不涉及。
    * hostIp  **参数解释**：实例所在的节点IP。 **取值范围**：不涉及。
    * scheduleCount  **参数解释**：该实例归属于第几次调度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'task' => 'string',
            'ip' => 'string',
            'hostIp' => 'string',
            'scheduleCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * task  **参数解释**：实例名。 **取值范围**：不涉及。
    * ip  **参数解释**：实例IP。 **取值范围**：不涉及。
    * hostIp  **参数解释**：实例所在的节点IP。 **取值范围**：不涉及。
    * scheduleCount  **参数解释**：该实例归属于第几次调度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'task' => null,
        'ip' => null,
        'hostIp' => null,
        'scheduleCount' => 'int32'
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
    * task  **参数解释**：实例名。 **取值范围**：不涉及。
    * ip  **参数解释**：实例IP。 **取值范围**：不涉及。
    * hostIp  **参数解释**：实例所在的节点IP。 **取值范围**：不涉及。
    * scheduleCount  **参数解释**：该实例归属于第几次调度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'task' => 'task',
            'ip' => 'ip',
            'hostIp' => 'host_ip',
            'scheduleCount' => 'schedule_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * task  **参数解释**：实例名。 **取值范围**：不涉及。
    * ip  **参数解释**：实例IP。 **取值范围**：不涉及。
    * hostIp  **参数解释**：实例所在的节点IP。 **取值范围**：不涉及。
    * scheduleCount  **参数解释**：该实例归属于第几次调度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'task' => 'setTask',
            'ip' => 'setIp',
            'hostIp' => 'setHostIp',
            'scheduleCount' => 'setScheduleCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * task  **参数解释**：实例名。 **取值范围**：不涉及。
    * ip  **参数解释**：实例IP。 **取值范围**：不涉及。
    * hostIp  **参数解释**：实例所在的节点IP。 **取值范围**：不涉及。
    * scheduleCount  **参数解释**：该实例归属于第几次调度。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'task' => 'getTask',
            'ip' => 'getIp',
            'hostIp' => 'getHostIp',
            'scheduleCount' => 'getScheduleCount'
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
        $this->container['task'] = isset($data['task']) ? $data['task'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['scheduleCount'] = isset($data['scheduleCount']) ? $data['scheduleCount'] : null;
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
    * Gets task
    *  **参数解释**：实例名。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getTask()
    {
        return $this->container['task'];
    }

    /**
    * Sets task
    *
    * @param string|null $task **参数解释**：实例名。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTask($task)
    {
        $this->container['task'] = $task;
        return $this;
    }

    /**
    * Gets ip
    *  **参数解释**：实例IP。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip **参数解释**：实例IP。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**：实例所在的节点IP。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp **参数解释**：实例所在的节点IP。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets scheduleCount
    *  **参数解释**：该实例归属于第几次调度。 **取值范围**：不涉及。
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
    * @param int|null $scheduleCount **参数解释**：该实例归属于第几次调度。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setScheduleCount($scheduleCount)
    {
        $this->container['scheduleCount'] = $scheduleCount;
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

