<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKillTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKillTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  会话执行时间
    * info  SQL信息
    * taskDuration  任务持续时间
    * taskType  任务类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'command' => 'string',
            'time' => 'int',
            'info' => 'string',
            'taskDuration' => 'int',
            'taskType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  会话执行时间
    * info  SQL信息
    * taskDuration  任务持续时间
    * taskType  任务类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'host' => null,
        'db' => null,
        'command' => null,
        'time' => 'int64',
        'info' => null,
        'taskDuration' => 'int64',
        'taskType' => null
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
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  会话执行时间
    * info  SQL信息
    * taskDuration  任务持续时间
    * taskType  任务类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'command' => 'command',
            'time' => 'time',
            'info' => 'info',
            'taskDuration' => 'task_duration',
            'taskType' => 'task_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  会话执行时间
    * info  SQL信息
    * taskDuration  任务持续时间
    * taskType  任务类型
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'command' => 'setCommand',
            'time' => 'setTime',
            'info' => 'setInfo',
            'taskDuration' => 'setTaskDuration',
            'taskType' => 'setTaskType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  会话执行时间
    * info  SQL信息
    * taskDuration  任务持续时间
    * taskType  任务类型
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'command' => 'getCommand',
            'time' => 'getTime',
            'info' => 'getInfo',
            'taskDuration' => 'getTaskDuration',
            'taskType' => 'getTaskType'
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
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['taskDuration'] = isset($data['taskDuration']) ? $data['taskDuration'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['taskDuration'] === null) {
            $invalidProperties[] = "'taskDuration' can't be null";
        }
        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
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
    *  数据库用户
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
    * @param string|null $user 数据库用户
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
    *  数据库主机
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
    * @param string|null $host 数据库主机
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
    *  数据库名称
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
    * @param string|null $db 数据库名称
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets command
    *  命令类型
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
    * @param string|null $command 命令类型
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
    *  会话执行时间
    *
    * @return int
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int $time 会话执行时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets info
    *  SQL信息
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
    * @param string|null $info SQL信息
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets taskDuration
    *  任务持续时间
    *
    * @return int
    */
    public function getTaskDuration()
    {
        return $this->container['taskDuration'];
    }

    /**
    * Sets taskDuration
    *
    * @param int $taskDuration 任务持续时间
    *
    * @return $this
    */
    public function setTaskDuration($taskDuration)
    {
        $this->container['taskDuration'] = $taskDuration;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType 任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
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

