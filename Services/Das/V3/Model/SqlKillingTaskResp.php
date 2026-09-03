<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlKillingTaskResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlKillingTaskResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  用户名
    * host  host地址
    * db  数据库
    * info  信息
    * command  命令行
    * time  次数
    * taskId  任务ID
    * taskType  任务类型
    * taskDuration  任务耗时
    * taskState  任务状态
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'info' => 'string',
            'command' => 'string',
            'time' => 'int',
            'taskId' => 'int',
            'taskType' => 'string',
            'taskDuration' => 'int',
            'taskState' => 'int',
            'startTime' => 'int',
            'endTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  用户名
    * host  host地址
    * db  数据库
    * info  信息
    * command  命令行
    * time  次数
    * taskId  任务ID
    * taskType  任务类型
    * taskDuration  任务耗时
    * taskState  任务状态
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'host' => null,
        'db' => null,
        'info' => null,
        'command' => null,
        'time' => 'int64',
        'taskId' => 'int64',
        'taskType' => null,
        'taskDuration' => 'int64',
        'taskState' => 'int32',
        'startTime' => 'int64',
        'endTime' => 'int64'
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
    * user  用户名
    * host  host地址
    * db  数据库
    * info  信息
    * command  命令行
    * time  次数
    * taskId  任务ID
    * taskType  任务类型
    * taskDuration  任务耗时
    * taskState  任务状态
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'info' => 'info',
            'command' => 'command',
            'time' => 'time',
            'taskId' => 'task_id',
            'taskType' => 'task_type',
            'taskDuration' => 'task_duration',
            'taskState' => 'task_state',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  用户名
    * host  host地址
    * db  数据库
    * info  信息
    * command  命令行
    * time  次数
    * taskId  任务ID
    * taskType  任务类型
    * taskDuration  任务耗时
    * taskState  任务状态
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'info' => 'setInfo',
            'command' => 'setCommand',
            'time' => 'setTime',
            'taskId' => 'setTaskId',
            'taskType' => 'setTaskType',
            'taskDuration' => 'setTaskDuration',
            'taskState' => 'setTaskState',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  用户名
    * host  host地址
    * db  数据库
    * info  信息
    * command  命令行
    * time  次数
    * taskId  任务ID
    * taskType  任务类型
    * taskDuration  任务耗时
    * taskState  任务状态
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'info' => 'getInfo',
            'command' => 'getCommand',
            'time' => 'getTime',
            'taskId' => 'getTaskId',
            'taskType' => 'getTaskType',
            'taskDuration' => 'getTaskDuration',
            'taskState' => 'getTaskState',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['taskDuration'] = isset($data['taskDuration']) ? $data['taskDuration'] : null;
        $this->container['taskState'] = isset($data['taskState']) ? $data['taskState'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets user
    *  用户名
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户名
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets host
    *  host地址
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host host地址
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets db
    *  数据库
    *
    * @return string|null
    */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
    * Sets db
    *
    * @param string|null $db 数据库
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets info
    *  信息
    *
    * @return string|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param string|null $info 信息
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets command
    *  命令行
    *
    * @return string|null
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string|null $command 命令行
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets time
    *  次数
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 次数
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID
    *
    * @return int|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param int|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets taskDuration
    *  任务耗时
    *
    * @return int|null
    */
    public function getTaskDuration()
    {
        return $this->container['taskDuration'];
    }

    /**
    * Sets taskDuration
    *
    * @param int|null $taskDuration 任务耗时
    *
    * @return $this
    */
    public function setTaskDuration($taskDuration)
    {
        $this->container['taskDuration'] = $taskDuration;
        return $this;
    }

    /**
    * Gets taskState
    *  任务状态
    *
    * @return int|null
    */
    public function getTaskState()
    {
        return $this->container['taskState'];
    }

    /**
    * Sets taskState
    *
    * @param int|null $taskState 任务状态
    *
    * @return $this
    */
    public function setTaskState($taskState)
    {
        $this->container['taskState'] = $taskState;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间
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
    *  结束时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

