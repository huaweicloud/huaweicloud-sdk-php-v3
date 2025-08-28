<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Process implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Process';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  会话ID
    * user  用户
    * host  主机
    * database  数据库
    * command  命令
    * time  会话持续时间
    * state  状态
    * sql  SQL语句
    * trxExecutedTime  事务持续时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'user' => 'string',
            'host' => 'string',
            'database' => 'string',
            'command' => 'string',
            'time' => 'string',
            'state' => 'string',
            'sql' => 'string',
            'trxExecutedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  会话ID
    * user  用户
    * host  主机
    * database  数据库
    * command  命令
    * time  会话持续时间
    * state  状态
    * sql  SQL语句
    * trxExecutedTime  事务持续时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'user' => null,
        'host' => null,
        'database' => null,
        'command' => null,
        'time' => null,
        'state' => null,
        'sql' => null,
        'trxExecutedTime' => null
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
    * id  会话ID
    * user  用户
    * host  主机
    * database  数据库
    * command  命令
    * time  会话持续时间
    * state  状态
    * sql  SQL语句
    * trxExecutedTime  事务持续时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'user' => 'user',
            'host' => 'host',
            'database' => 'database',
            'command' => 'command',
            'time' => 'time',
            'state' => 'state',
            'sql' => 'sql',
            'trxExecutedTime' => 'trx_executed_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  会话ID
    * user  用户
    * host  主机
    * database  数据库
    * command  命令
    * time  会话持续时间
    * state  状态
    * sql  SQL语句
    * trxExecutedTime  事务持续时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'user' => 'setUser',
            'host' => 'setHost',
            'database' => 'setDatabase',
            'command' => 'setCommand',
            'time' => 'setTime',
            'state' => 'setState',
            'sql' => 'setSql',
            'trxExecutedTime' => 'setTrxExecutedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  会话ID
    * user  用户
    * host  主机
    * database  数据库
    * command  命令
    * time  会话持续时间
    * state  状态
    * sql  SQL语句
    * trxExecutedTime  事务持续时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'user' => 'getUser',
            'host' => 'getHost',
            'database' => 'getDatabase',
            'command' => 'getCommand',
            'time' => 'getTime',
            'state' => 'getState',
            'sql' => 'getSql',
            'trxExecutedTime' => 'getTrxExecutedTime'
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
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['trxExecutedTime'] = isset($data['trxExecutedTime']) ? $data['trxExecutedTime'] : null;
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
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['host'] === null) {
            $invalidProperties[] = "'host' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['command'] === null) {
            $invalidProperties[] = "'command' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['sql'] === null) {
            $invalidProperties[] = "'sql' can't be null";
        }
        if ($this->container['trxExecutedTime'] === null) {
            $invalidProperties[] = "'trxExecutedTime' can't be null";
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
    *  会话ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 会话ID
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
    *  用户
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
    * @param string $user 用户
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
    *  主机
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
    * @param string $host 主机
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets database
    *  数据库
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database 数据库
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets command
    *  命令
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
    * @param string $command 命令
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
    *  会话持续时间
    *
    * @return string
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string $time 会话持续时间
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
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets sql
    *  SQL语句
    *
    * @return string
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string $sql SQL语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets trxExecutedTime
    *  事务持续时间
    *
    * @return string
    */
    public function getTrxExecutedTime()
    {
        return $this->container['trxExecutedTime'];
    }

    /**
    * Sets trxExecutedTime
    *
    * @param string $trxExecutedTime 事务持续时间
    *
    * @return $this
    */
    public function setTrxExecutedTime($trxExecutedTime)
    {
        $this->container['trxExecutedTime'] = $trxExecutedTime;
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

