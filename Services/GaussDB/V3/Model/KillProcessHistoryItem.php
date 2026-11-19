<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KillProcessHistoryItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KillProcessHistoryItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**：  自动Kill会话任务ID。  **取值范围**：  不涉及。
    * sessionId  **参数解释**：  会话ID。  **取值范围**：  不涉及。
    * killTime  **参数解释**：  Kill会话的时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  Kill会话方式。  **取值范围**：  - once：一键Kill会话。 - condition：条件Kill会话。
    * user  **参数解释**：  用户。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * time  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'sessionId' => 'string',
            'killTime' => 'string',
            'mode' => 'string',
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'command' => 'string',
            'time' => 'string',
            'info' => 'string',
            'state' => 'string',
            'instanceId' => 'string',
            'nodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**：  自动Kill会话任务ID。  **取值范围**：  不涉及。
    * sessionId  **参数解释**：  会话ID。  **取值范围**：  不涉及。
    * killTime  **参数解释**：  Kill会话的时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  Kill会话方式。  **取值范围**：  - once：一键Kill会话。 - condition：条件Kill会话。
    * user  **参数解释**：  用户。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * time  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'sessionId' => null,
        'killTime' => null,
        'mode' => null,
        'user' => null,
        'host' => null,
        'db' => null,
        'command' => null,
        'time' => null,
        'info' => null,
        'state' => null,
        'instanceId' => null,
        'nodeId' => null
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
    * taskId  **参数解释**：  自动Kill会话任务ID。  **取值范围**：  不涉及。
    * sessionId  **参数解释**：  会话ID。  **取值范围**：  不涉及。
    * killTime  **参数解释**：  Kill会话的时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  Kill会话方式。  **取值范围**：  - once：一键Kill会话。 - condition：条件Kill会话。
    * user  **参数解释**：  用户。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * time  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'sessionId' => 'session_id',
            'killTime' => 'kill_time',
            'mode' => 'mode',
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'command' => 'command',
            'time' => 'time',
            'info' => 'info',
            'state' => 'state',
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**：  自动Kill会话任务ID。  **取值范围**：  不涉及。
    * sessionId  **参数解释**：  会话ID。  **取值范围**：  不涉及。
    * killTime  **参数解释**：  Kill会话的时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  Kill会话方式。  **取值范围**：  - once：一键Kill会话。 - condition：条件Kill会话。
    * user  **参数解释**：  用户。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * time  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'sessionId' => 'setSessionId',
            'killTime' => 'setKillTime',
            'mode' => 'setMode',
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'command' => 'setCommand',
            'time' => 'setTime',
            'info' => 'setInfo',
            'state' => 'setState',
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**：  自动Kill会话任务ID。  **取值范围**：  不涉及。
    * sessionId  **参数解释**：  会话ID。  **取值范围**：  不涉及。
    * killTime  **参数解释**：  Kill会话的时间戳。  **取值范围**：  不涉及。
    * mode  **参数解释**：  Kill会话方式。  **取值范围**：  - once：一键Kill会话。 - condition：条件Kill会话。
    * user  **参数解释**：  用户。  **取值范围**：  不涉及。
    * host  **参数解释**：  主机。  **取值范围**：  不涉及。
    * db  **参数解释**：  数据库名。  **取值范围**：  不涉及。
    * command  **参数解释**：  命令。  **取值范围**：  不涉及。
    * time  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    * info  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    * state  **参数解释**：  执行状态。  **取值范围**：  不涉及。
    * instanceId  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
    * nodeId  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'sessionId' => 'getSessionId',
            'killTime' => 'getKillTime',
            'mode' => 'getMode',
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'command' => 'getCommand',
            'time' => 'getTime',
            'info' => 'getInfo',
            'state' => 'getState',
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['killTime'] = isset($data['killTime']) ? $data['killTime'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
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
    * Gets taskId
    *  **参数解释**：  自动Kill会话任务ID。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**：  自动Kill会话任务ID。  **取值范围**：  不涉及。
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
    *  **参数解释**：  会话ID。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string|null $sessionId **参数解释**：  会话ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets killTime
    *  **参数解释**：  Kill会话的时间戳。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getKillTime()
    {
        return $this->container['killTime'];
    }

    /**
    * Sets killTime
    *
    * @param string|null $killTime **参数解释**：  Kill会话的时间戳。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setKillTime($killTime)
    {
        $this->container['killTime'] = $killTime;
        return $this;
    }

    /**
    * Gets mode
    *  **参数解释**：  Kill会话方式。  **取值范围**：  - once：一键Kill会话。 - condition：条件Kill会话。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数解释**：  Kill会话方式。  **取值范围**：  - once：一键Kill会话。 - condition：条件Kill会话。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**：  用户。  **取值范围**：  不涉及。
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
    * @param string|null $user **参数解释**：  用户。  **取值范围**：  不涉及。
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
    *  **参数解释**：  主机。  **取值范围**：  不涉及。
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
    * @param string|null $host **参数解释**：  主机。  **取值范围**：  不涉及。
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
    *  **参数解释**：  数据库名。  **取值范围**：  不涉及。
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
    * @param string|null $db **参数解释**：  数据库名。  **取值范围**：  不涉及。
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
    *  **参数解释**：  命令。  **取值范围**：  不涉及。
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
    * @param string|null $command **参数解释**：  命令。  **取值范围**：  不涉及。
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
    *  **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time **参数解释**：  会话持续时间，单位是秒。  **取值范围**：  不涉及。
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
    *  **参数解释**：  SQL语句。  **取值范围**：  不涉及。
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
    * @param string|null $info **参数解释**：  SQL语句。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**：  执行状态。  **取值范围**：  不涉及。
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
    * @param string|null $state **参数解释**：  执行状态。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
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
    * @param string|null $instanceId **参数解释**：  实例ID。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。
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
    *  **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。
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
    * @param string|null $nodeId **参数解释**：  节点ID。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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

