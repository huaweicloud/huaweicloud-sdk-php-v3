<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskListVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskListVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tasks  测试任务集合
    * runningCount  正在执行任务数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tasks' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TaskVo[]',
            'runningCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tasks  测试任务集合
    * runningCount  正在执行任务数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tasks' => null,
        'runningCount' => 'int32'
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
    * tasks  测试任务集合
    * runningCount  正在执行任务数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tasks' => 'tasks',
            'runningCount' => 'running_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tasks  测试任务集合
    * runningCount  正在执行任务数
    *
    * @var string[]
    */
    protected static $setters = [
            'tasks' => 'setTasks',
            'runningCount' => 'setRunningCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tasks  测试任务集合
    * runningCount  正在执行任务数
    *
    * @var string[]
    */
    protected static $getters = [
            'tasks' => 'getTasks',
            'runningCount' => 'getRunningCount'
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
        $this->container['tasks'] = isset($data['tasks']) ? $data['tasks'] : null;
        $this->container['runningCount'] = isset($data['runningCount']) ? $data['runningCount'] : null;
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
    * Gets tasks
    *  测试任务集合
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskVo[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TaskVo[]|null $tasks 测试任务集合
    *
    * @return $this
    */
    public function setTasks($tasks)
    {
        $this->container['tasks'] = $tasks;
        return $this;
    }

    /**
    * Gets runningCount
    *  正在执行任务数
    *
    * @return int|null
    */
    public function getRunningCount()
    {
        return $this->container['runningCount'];
    }

    /**
    * Sets runningCount
    *
    * @param int|null $runningCount 正在执行任务数
    *
    * @return $this
    */
    public function setRunningCount($runningCount)
    {
        $this->container['runningCount'] = $runningCount;
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

