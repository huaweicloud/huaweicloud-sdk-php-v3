<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskIP implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskIP';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * task  Task 名称，如 worker-0。
    * ip  Task IP 地址。
    * hostIp  宿主机 IP。 **约束限制**：仅专属资源池作业返回；公共资源池作业该字段为空。
    * scheduleCount  当前 Task 的第几次调度，默认 1。 重调度、抢占等场景下递增。
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
    * task  Task 名称，如 worker-0。
    * ip  Task IP 地址。
    * hostIp  宿主机 IP。 **约束限制**：仅专属资源池作业返回；公共资源池作业该字段为空。
    * scheduleCount  当前 Task 的第几次调度，默认 1。 重调度、抢占等场景下递增。
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
    * task  Task 名称，如 worker-0。
    * ip  Task IP 地址。
    * hostIp  宿主机 IP。 **约束限制**：仅专属资源池作业返回；公共资源池作业该字段为空。
    * scheduleCount  当前 Task 的第几次调度，默认 1。 重调度、抢占等场景下递增。
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
    * task  Task 名称，如 worker-0。
    * ip  Task IP 地址。
    * hostIp  宿主机 IP。 **约束限制**：仅专属资源池作业返回；公共资源池作业该字段为空。
    * scheduleCount  当前 Task 的第几次调度，默认 1。 重调度、抢占等场景下递增。
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
    * task  Task 名称，如 worker-0。
    * ip  Task IP 地址。
    * hostIp  宿主机 IP。 **约束限制**：仅专属资源池作业返回；公共资源池作业该字段为空。
    * scheduleCount  当前 Task 的第几次调度，默认 1。 重调度、抢占等场景下递增。
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
    *  Task 名称，如 worker-0。
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
    * @param string|null $task Task 名称，如 worker-0。
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
    *  Task IP 地址。
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
    * @param string|null $ip Task IP 地址。
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
    *  宿主机 IP。 **约束限制**：仅专属资源池作业返回；公共资源池作业该字段为空。
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
    * @param string|null $hostIp 宿主机 IP。 **约束限制**：仅专属资源池作业返回；公共资源池作业该字段为空。
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
    *  当前 Task 的第几次调度，默认 1。 重调度、抢占等场景下递增。
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
    * @param int|null $scheduleCount 当前 Task 的第几次调度，默认 1。 重调度、抢占等场景下递增。
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

