<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskCount  部署任务数量。
    * job  job
    * tasks  部署任务列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskCount' => 'int',
            'job' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\JobInfo',
            'tasks' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\TaskInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskCount  部署任务数量。
    * job  job
    * tasks  部署任务列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskCount' => null,
        'job' => null,
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
    * taskCount  部署任务数量。
    * job  job
    * tasks  部署任务列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskCount' => 'task_count',
            'job' => 'job',
            'tasks' => 'tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskCount  部署任务数量。
    * job  job
    * tasks  部署任务列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskCount' => 'setTaskCount',
            'job' => 'setJob',
            'tasks' => 'setTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskCount  部署任务数量。
    * job  job
    * tasks  部署任务列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskCount' => 'getTaskCount',
            'job' => 'getJob',
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
        $this->container['job'] = isset($data['job']) ? $data['job'] : null;
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
    *  部署任务数量。
    *
    * @return int|null
    */
    public function getTaskCount()
    {
        return $this->container['taskCount'];
    }

    /**
    * Sets taskCount
    *
    * @param int|null $taskCount 部署任务数量。
    *
    * @return $this
    */
    public function setTaskCount($taskCount)
    {
        $this->container['taskCount'] = $taskCount;
        return $this;
    }

    /**
    * Gets job
    *  job
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\JobInfo|null
    */
    public function getJob()
    {
        return $this->container['job'];
    }

    /**
    * Sets job
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\JobInfo|null $job job
    *
    * @return $this
    */
    public function setJob($job)
    {
        $this->container['job'] = $job;
        return $this;
    }

    /**
    * Gets tasks
    *  部署任务列表。
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\TaskInfo[]|null
    */
    public function getTasks()
    {
        return $this->container['tasks'];
    }

    /**
    * Sets tasks
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\TaskInfo[]|null $tasks 部署任务列表。
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

