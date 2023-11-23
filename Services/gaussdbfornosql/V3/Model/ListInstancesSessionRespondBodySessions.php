<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesSessionRespondBodySessions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesSessionRespondBody_sessions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addr  客户端的地址和端口。
    * id  会话id。
    * name  连接名。
    * cmd  最近一次执行的命令。
    * age  以秒计算的已连接时长。
    * idle  以秒计算的空闲时长。
    * db  该客户端正在使用的数据库 ID。
    * fd  套接字所使用的文件描述符。
    * sub  已订阅频道的数量。
    * psub  已订阅模式的数量。
    * multi  在事务中被执行的命令数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addr' => 'string',
            'id' => 'string',
            'name' => 'string',
            'cmd' => 'string',
            'age' => 'string',
            'idle' => 'string',
            'db' => 'string',
            'fd' => 'string',
            'sub' => 'string',
            'psub' => 'string',
            'multi' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addr  客户端的地址和端口。
    * id  会话id。
    * name  连接名。
    * cmd  最近一次执行的命令。
    * age  以秒计算的已连接时长。
    * idle  以秒计算的空闲时长。
    * db  该客户端正在使用的数据库 ID。
    * fd  套接字所使用的文件描述符。
    * sub  已订阅频道的数量。
    * psub  已订阅模式的数量。
    * multi  在事务中被执行的命令数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addr' => null,
        'id' => null,
        'name' => null,
        'cmd' => null,
        'age' => null,
        'idle' => null,
        'db' => null,
        'fd' => null,
        'sub' => null,
        'psub' => null,
        'multi' => null
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
    * addr  客户端的地址和端口。
    * id  会话id。
    * name  连接名。
    * cmd  最近一次执行的命令。
    * age  以秒计算的已连接时长。
    * idle  以秒计算的空闲时长。
    * db  该客户端正在使用的数据库 ID。
    * fd  套接字所使用的文件描述符。
    * sub  已订阅频道的数量。
    * psub  已订阅模式的数量。
    * multi  在事务中被执行的命令数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addr' => 'addr',
            'id' => 'id',
            'name' => 'name',
            'cmd' => 'cmd',
            'age' => 'age',
            'idle' => 'idle',
            'db' => 'db',
            'fd' => 'fd',
            'sub' => 'sub',
            'psub' => 'psub',
            'multi' => 'multi'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addr  客户端的地址和端口。
    * id  会话id。
    * name  连接名。
    * cmd  最近一次执行的命令。
    * age  以秒计算的已连接时长。
    * idle  以秒计算的空闲时长。
    * db  该客户端正在使用的数据库 ID。
    * fd  套接字所使用的文件描述符。
    * sub  已订阅频道的数量。
    * psub  已订阅模式的数量。
    * multi  在事务中被执行的命令数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'addr' => 'setAddr',
            'id' => 'setId',
            'name' => 'setName',
            'cmd' => 'setCmd',
            'age' => 'setAge',
            'idle' => 'setIdle',
            'db' => 'setDb',
            'fd' => 'setFd',
            'sub' => 'setSub',
            'psub' => 'setPsub',
            'multi' => 'setMulti'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addr  客户端的地址和端口。
    * id  会话id。
    * name  连接名。
    * cmd  最近一次执行的命令。
    * age  以秒计算的已连接时长。
    * idle  以秒计算的空闲时长。
    * db  该客户端正在使用的数据库 ID。
    * fd  套接字所使用的文件描述符。
    * sub  已订阅频道的数量。
    * psub  已订阅模式的数量。
    * multi  在事务中被执行的命令数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'addr' => 'getAddr',
            'id' => 'getId',
            'name' => 'getName',
            'cmd' => 'getCmd',
            'age' => 'getAge',
            'idle' => 'getIdle',
            'db' => 'getDb',
            'fd' => 'getFd',
            'sub' => 'getSub',
            'psub' => 'getPsub',
            'multi' => 'getMulti'
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
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['idle'] = isset($data['idle']) ? $data['idle'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['fd'] = isset($data['fd']) ? $data['fd'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['psub'] = isset($data['psub']) ? $data['psub'] : null;
        $this->container['multi'] = isset($data['multi']) ? $data['multi'] : null;
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
    * Gets addr
    *  客户端的地址和端口。
    *
    * @return string|null
    */
    public function getAddr()
    {
        return $this->container['addr'];
    }

    /**
    * Sets addr
    *
    * @param string|null $addr 客户端的地址和端口。
    *
    * @return $this
    */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;
        return $this;
    }

    /**
    * Gets id
    *  会话id。
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
    * @param string|null $id 会话id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  连接名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 连接名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets cmd
    *  最近一次执行的命令。
    *
    * @return string|null
    */
    public function getCmd()
    {
        return $this->container['cmd'];
    }

    /**
    * Sets cmd
    *
    * @param string|null $cmd 最近一次执行的命令。
    *
    * @return $this
    */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;
        return $this;
    }

    /**
    * Gets age
    *  以秒计算的已连接时长。
    *
    * @return string|null
    */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
    * Sets age
    *
    * @param string|null $age 以秒计算的已连接时长。
    *
    * @return $this
    */
    public function setAge($age)
    {
        $this->container['age'] = $age;
        return $this;
    }

    /**
    * Gets idle
    *  以秒计算的空闲时长。
    *
    * @return string|null
    */
    public function getIdle()
    {
        return $this->container['idle'];
    }

    /**
    * Sets idle
    *
    * @param string|null $idle 以秒计算的空闲时长。
    *
    * @return $this
    */
    public function setIdle($idle)
    {
        $this->container['idle'] = $idle;
        return $this;
    }

    /**
    * Gets db
    *  该客户端正在使用的数据库 ID。
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
    * @param string|null $db 该客户端正在使用的数据库 ID。
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets fd
    *  套接字所使用的文件描述符。
    *
    * @return string|null
    */
    public function getFd()
    {
        return $this->container['fd'];
    }

    /**
    * Sets fd
    *
    * @param string|null $fd 套接字所使用的文件描述符。
    *
    * @return $this
    */
    public function setFd($fd)
    {
        $this->container['fd'] = $fd;
        return $this;
    }

    /**
    * Gets sub
    *  已订阅频道的数量。
    *
    * @return string|null
    */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
    * Sets sub
    *
    * @param string|null $sub 已订阅频道的数量。
    *
    * @return $this
    */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;
        return $this;
    }

    /**
    * Gets psub
    *  已订阅模式的数量。
    *
    * @return string|null
    */
    public function getPsub()
    {
        return $this->container['psub'];
    }

    /**
    * Sets psub
    *
    * @param string|null $psub 已订阅模式的数量。
    *
    * @return $this
    */
    public function setPsub($psub)
    {
        $this->container['psub'] = $psub;
        return $this;
    }

    /**
    * Gets multi
    *  在事务中被执行的命令数量。
    *
    * @return string|null
    */
    public function getMulti()
    {
        return $this->container['multi'];
    }

    /**
    * Sets multi
    *
    * @param string|null $multi 在事务中被执行的命令数量。
    *
    * @return $this
    */
    public function setMulti($multi)
    {
        $this->container['multi'] = $multi;
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

