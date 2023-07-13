<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBackgroundTasksResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBackgroundTasksResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskCount  任务数量。
    * tasks  任务列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskCount' => 'string',
            'tasks' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ListBackgroundTasksRespTasks[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskCount  任务数量。
    * tasks  任务列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskCount' => null,
        'tasks' => null
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
    * taskCount  任务数量。
    * tasks  任务列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskCount' => 'task_count',
            'tasks' => 'tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskCount  任务数量。
    * tasks  任务列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskCount' => 'setTaskCount',
            'tasks' => 'setTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskCount  任务数量。
    * tasks  任务列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskCount' => 'getTaskCount',
            'tasks' => 'getTasks'
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
        $this->container['taskCount'] = isset($data['taskCount']) ? $data['taskCount'] : null;
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
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
    * Gets taskCount
    *  任务数量。
    *
    * @return string|null
    */
    public function getTaskCount()
    {
        return $this->container['taskCount'];
    }

    /**
    * Sets taskCount
    *
    * @param string|null $taskCount 任务数量。
    *
    * @return $this
    */
    public function setTaskCount($taskCount)
    {
        $this->container['taskCount'] = $taskCount;
        return $this;
    }

    /**
    * Gets tasks
    *  任务列表。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ListBackgroundTasksRespTasks[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ListBackgroundTasksRespTasks[]|null $tasks 任务列表。
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
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

