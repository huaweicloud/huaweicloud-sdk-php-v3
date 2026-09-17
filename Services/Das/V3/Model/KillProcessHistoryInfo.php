<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KillProcessHistoryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KillProcessHistoryInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * nodeId  节点ID
    * taskId  任务ID
    * sessionId  会话ID
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  执行时间
    * state  状态
    * info  信息
    * killTime  Kill时间
    * killedSource  会话被查杀的来源
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeId' => 'string',
            'taskId' => 'int',
            'sessionId' => 'int',
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'command' => 'string',
            'time' => 'int',
            'state' => 'string',
            'info' => 'string',
            'killTime' => 'int',
            'killedSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * nodeId  节点ID
    * taskId  任务ID
    * sessionId  会话ID
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  执行时间
    * state  状态
    * info  信息
    * killTime  Kill时间
    * killedSource  会话被查杀的来源
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeId' => null,
        'taskId' => 'int64',
        'sessionId' => 'int64',
        'user' => null,
        'host' => null,
        'db' => null,
        'command' => null,
        'time' => 'int64',
        'state' => null,
        'info' => null,
        'killTime' => 'int64',
        'killedSource' => null
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
    * instanceId  实例ID
    * nodeId  节点ID
    * taskId  任务ID
    * sessionId  会话ID
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  执行时间
    * state  状态
    * info  信息
    * killTime  Kill时间
    * killedSource  会话被查杀的来源
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'taskId' => 'task_id',
            'sessionId' => 'session_id',
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'command' => 'command',
            'time' => 'time',
            'state' => 'state',
            'info' => 'info',
            'killTime' => 'kill_time',
            'killedSource' => 'killed_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * nodeId  节点ID
    * taskId  任务ID
    * sessionId  会话ID
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  执行时间
    * state  状态
    * info  信息
    * killTime  Kill时间
    * killedSource  会话被查杀的来源
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'taskId' => 'setTaskId',
            'sessionId' => 'setSessionId',
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'command' => 'setCommand',
            'time' => 'setTime',
            'state' => 'setState',
            'info' => 'setInfo',
            'killTime' => 'setKillTime',
            'killedSource' => 'setKilledSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * nodeId  节点ID
    * taskId  任务ID
    * sessionId  会话ID
    * user  数据库用户
    * host  数据库主机
    * db  数据库名称
    * command  命令类型
    * time  执行时间
    * state  状态
    * info  信息
    * killTime  Kill时间
    * killedSource  会话被查杀的来源
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'taskId' => 'getTaskId',
            'sessionId' => 'getSessionId',
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'command' => 'getCommand',
            'time' => 'getTime',
            'state' => 'getState',
            'info' => 'getInfo',
            'killTime' => 'getKillTime',
            'killedSource' => 'getKilledSource'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['killTime'] = isset($data['killTime']) ? $data['killTime'] : null;
        $this->container['killedSource'] = isset($data['killedSource']) ? $data['killedSource'] : null;
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
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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
    * Gets sessionId
    *  会话ID
    *
    * @return int|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param int|null $sessionId 会话ID
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
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
    *  执行时间
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
    * @param int|null $time 执行时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets state
    *  状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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
    * Gets killTime
    *  Kill时间
    *
    * @return int|null
    */
    public function getKillTime()
    {
        return $this->container['killTime'];
    }

    /**
    * Sets killTime
    *
    * @param int|null $killTime Kill时间
    *
    * @return $this
    */
    public function setKillTime($killTime)
    {
        $this->container['killTime'] = $killTime;
        return $this;
    }

    /**
    * Gets killedSource
    *  会话被查杀的来源
    *
    * @return string|null
    */
    public function getKilledSource()
    {
        return $this->container['killedSource'];
    }

    /**
    * Sets killedSource
    *
    * @param string|null $killedSource 会话被查杀的来源
    *
    * @return $this
    */
    public function setKilledSource($killedSource)
    {
        $this->container['killedSource'] = $killedSource;
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

