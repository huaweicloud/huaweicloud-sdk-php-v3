<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  会话ID
    * user  用户
    * host  连接库的IP和port
    * db  数据库
    * command  当前执行的命令
    * time  会话运行时间
    * state  执行状态
    * info  执行的SQL
    * trxDuration  事务持续时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'command' => 'string',
            'time' => 'string',
            'state' => 'string',
            'info' => 'string',
            'trxDuration' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  会话ID
    * user  用户
    * host  连接库的IP和port
    * db  数据库
    * command  当前执行的命令
    * time  会话运行时间
    * state  执行状态
    * info  执行的SQL
    * trxDuration  事务持续时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'user' => null,
        'host' => null,
        'db' => null,
        'command' => null,
        'time' => null,
        'state' => null,
        'info' => null,
        'trxDuration' => null
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
    * host  连接库的IP和port
    * db  数据库
    * command  当前执行的命令
    * time  会话运行时间
    * state  执行状态
    * info  执行的SQL
    * trxDuration  事务持续时间
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
            'info' => 'info',
            'trxDuration' => 'trx_duration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  会话ID
    * user  用户
    * host  连接库的IP和port
    * db  数据库
    * command  当前执行的命令
    * time  会话运行时间
    * state  执行状态
    * info  执行的SQL
    * trxDuration  事务持续时间
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
            'info' => 'setInfo',
            'trxDuration' => 'setTrxDuration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  会话ID
    * user  用户
    * host  连接库的IP和port
    * db  数据库
    * command  当前执行的命令
    * time  会话运行时间
    * state  执行状态
    * info  执行的SQL
    * trxDuration  事务持续时间
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
            'info' => 'getInfo',
            'trxDuration' => 'getTrxDuration'
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
        $this->container['trxDuration'] = isset($data['trxDuration']) ? $data['trxDuration'] : null;
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
    * Gets id
    *  会话ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 会话ID
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
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户
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
    *  连接库的IP和port
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
    * @param string|null $host 连接库的IP和port
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
    * Gets command
    *  当前执行的命令
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
    * @param string|null $command 当前执行的命令
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
    *  会话运行时间
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
    * @param string|null $time 会话运行时间
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
    *  执行状态
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
    * @param string|null $state 执行状态
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
    *  执行的SQL
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
    * @param string|null $info 执行的SQL
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
        return $this;
    }

    /**
    * Gets trxDuration
    *  事务持续时间
    *
    * @return string|null
    */
    public function getTrxDuration()
    {
        return $this->container['trxDuration'];
    }

    /**
    * Sets trxDuration
    *
    * @param string|null $trxDuration 事务持续时间
    *
    * @return $this
    */
    public function setTrxDuration($trxDuration)
    {
        $this->container['trxDuration'] = $trxDuration;
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

