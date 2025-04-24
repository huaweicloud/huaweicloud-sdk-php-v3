<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaurusDbProcessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaurusDbProcessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  用户会话线程ID。
    * user  **参数解释**：  启动用户会话线程的用户。
    * host  **参数解释**：  发送请求的主机和端口。
    * db  **参数解释**：  当前访问的数据库名。
    * command  **参数解释**：  当前执行的命令。
    * time  **参数解释**：  用户会话线程处于当前状态的持续时间，单位为秒。
    * state  **参数解释**：  正在执行的SQL语句的当前状态。
    * info  **参数解释**：  额外信息，通常是正在执行的语句。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'command' => 'string',
            'time' => 'int',
            'state' => 'string',
            'info' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  用户会话线程ID。
    * user  **参数解释**：  启动用户会话线程的用户。
    * host  **参数解释**：  发送请求的主机和端口。
    * db  **参数解释**：  当前访问的数据库名。
    * command  **参数解释**：  当前执行的命令。
    * time  **参数解释**：  用户会话线程处于当前状态的持续时间，单位为秒。
    * state  **参数解释**：  正在执行的SQL语句的当前状态。
    * info  **参数解释**：  额外信息，通常是正在执行的语句。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'user' => null,
        'host' => null,
        'db' => null,
        'command' => null,
        'time' => 'int64',
        'state' => null,
        'info' => null
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
    * id  **参数解释**：  用户会话线程ID。
    * user  **参数解释**：  启动用户会话线程的用户。
    * host  **参数解释**：  发送请求的主机和端口。
    * db  **参数解释**：  当前访问的数据库名。
    * command  **参数解释**：  当前执行的命令。
    * time  **参数解释**：  用户会话线程处于当前状态的持续时间，单位为秒。
    * state  **参数解释**：  正在执行的SQL语句的当前状态。
    * info  **参数解释**：  额外信息，通常是正在执行的语句。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'command' => 'command',
            'time' => 'time',
            'state' => 'state',
            'info' => 'info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  用户会话线程ID。
    * user  **参数解释**：  启动用户会话线程的用户。
    * host  **参数解释**：  发送请求的主机和端口。
    * db  **参数解释**：  当前访问的数据库名。
    * command  **参数解释**：  当前执行的命令。
    * time  **参数解释**：  用户会话线程处于当前状态的持续时间，单位为秒。
    * state  **参数解释**：  正在执行的SQL语句的当前状态。
    * info  **参数解释**：  额外信息，通常是正在执行的语句。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'command' => 'setCommand',
            'time' => 'setTime',
            'state' => 'setState',
            'info' => 'setInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  用户会话线程ID。
    * user  **参数解释**：  启动用户会话线程的用户。
    * host  **参数解释**：  发送请求的主机和端口。
    * db  **参数解释**：  当前访问的数据库名。
    * command  **参数解释**：  当前执行的命令。
    * time  **参数解释**：  用户会话线程处于当前状态的持续时间，单位为秒。
    * state  **参数解释**：  正在执行的SQL语句的当前状态。
    * info  **参数解释**：  额外信息，通常是正在执行的语句。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'command' => 'getCommand',
            'time' => 'getTime',
            'state' => 'getState',
            'info' => 'getInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
            if ((mb_strlen($this->container['user']) > 1024)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['user']) < 1)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
            if ((mb_strlen($this->container['host']) > 1024)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['host']) < 1)) {
                $invalidProperties[] = "invalid value for 'host', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['db'] === null) {
            $invalidProperties[] = "'db' can't be null";
        }
            if ((mb_strlen($this->container['db']) > 1024)) {
                $invalidProperties[] = "invalid value for 'db', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['db']) < 0)) {
                $invalidProperties[] = "invalid value for 'db', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['command'] === null) {
            $invalidProperties[] = "'command' can't be null";
        }
            if ((mb_strlen($this->container['command']) > 1024)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['command']) < 0)) {
                $invalidProperties[] = "invalid value for 'command', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
            if (($this->container['time'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['time'] < 0)) {
                $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 0.";
            }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
            if ((mb_strlen($this->container['state']) > 1024)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['info'] === null) {
            $invalidProperties[] = "'info' can't be null";
        }
            if ((mb_strlen($this->container['info']) > 67108864)) {
                $invalidProperties[] = "invalid value for 'info', the character length must be smaller than or equal to 67108864.";
            }
            if ((mb_strlen($this->container['info']) < 0)) {
                $invalidProperties[] = "invalid value for 'info', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释**：  用户会话线程ID。
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id **参数解释**：  用户会话线程ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**：  启动用户会话线程的用户。
    *
    * @return string
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string $user **参数解释**：  启动用户会话线程的用户。
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
    *  **参数解释**：  发送请求的主机和端口。
    *
    * @return string
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string $host **参数解释**：  发送请求的主机和端口。
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
    *  **参数解释**：  当前访问的数据库名。
    *
    * @return string
    */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
    * Sets db
    *
    * @param string $db **参数解释**：  当前访问的数据库名。
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
    *  **参数解释**：  当前执行的命令。
    *
    * @return string
    */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
    * Sets command
    *
    * @param string $command **参数解释**：  当前执行的命令。
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
    *  **参数解释**：  用户会话线程处于当前状态的持续时间，单位为秒。
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
    * @param int $time **参数解释**：  用户会话线程处于当前状态的持续时间，单位为秒。
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
    *  **参数解释**：  正在执行的SQL语句的当前状态。
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state **参数解释**：  正在执行的SQL语句的当前状态。
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
    *  **参数解释**：  额外信息，通常是正在执行的语句。
    *
    * @return string
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param string $info **参数解释**：  额外信息，通常是正在执行的语句。
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
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

