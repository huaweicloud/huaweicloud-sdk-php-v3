<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClientInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClientInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  客户端ID
    * addr  客户端的地址和端口
    * fd  套接字所使用的文件描述符。
    * name  客户端的名称
    * cmd  最近一次执行的命令
    * age  已连接时长（单位：秒）
    * idle  空闲时长（单位：秒）
    * db  该客户端正在使用的数据库 ID
    * flags  客户端标志
    * sub  已订阅频道的数量
    * psub  已订阅模式的数量
    * multi  在事务中被执行的命令数量
    * qbuf  查询缓冲区的长度（单位为字节， 0 表示没有分配查询缓冲区）
    * qbufFree  查询缓冲区剩余空间的长度（单位为字节， 0 表示没有剩余空间）
    * obl  输出缓冲区的长度（单位为字节， 0 表示没有分配输出缓冲区）
    * oll  输出列表包含的对象数量（当输出缓冲区没有剩余空间时，命令回复会以字符串对象的形式被入队到这个队列里）
    * omem  输出缓冲区和输出列表占用的内存总量
    * events  文件描述符事件
    * network  客户端所使用的网络类型。
    * peer  单机，主备和cluster实例地址和端口。
    * user  客户端用户。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'addr' => 'string',
            'fd' => 'string',
            'name' => 'string',
            'cmd' => 'string',
            'age' => 'int',
            'idle' => 'int',
            'db' => 'string',
            'flags' => 'string',
            'sub' => 'int',
            'psub' => 'int',
            'multi' => 'int',
            'qbuf' => 'int',
            'qbufFree' => 'int',
            'obl' => 'int',
            'oll' => 'int',
            'omem' => 'int',
            'events' => 'string',
            'network' => 'string',
            'peer' => 'string',
            'user' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  客户端ID
    * addr  客户端的地址和端口
    * fd  套接字所使用的文件描述符。
    * name  客户端的名称
    * cmd  最近一次执行的命令
    * age  已连接时长（单位：秒）
    * idle  空闲时长（单位：秒）
    * db  该客户端正在使用的数据库 ID
    * flags  客户端标志
    * sub  已订阅频道的数量
    * psub  已订阅模式的数量
    * multi  在事务中被执行的命令数量
    * qbuf  查询缓冲区的长度（单位为字节， 0 表示没有分配查询缓冲区）
    * qbufFree  查询缓冲区剩余空间的长度（单位为字节， 0 表示没有剩余空间）
    * obl  输出缓冲区的长度（单位为字节， 0 表示没有分配输出缓冲区）
    * oll  输出列表包含的对象数量（当输出缓冲区没有剩余空间时，命令回复会以字符串对象的形式被入队到这个队列里）
    * omem  输出缓冲区和输出列表占用的内存总量
    * events  文件描述符事件
    * network  客户端所使用的网络类型。
    * peer  单机，主备和cluster实例地址和端口。
    * user  客户端用户。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'addr' => null,
        'fd' => null,
        'name' => null,
        'cmd' => null,
        'age' => 'int32',
        'idle' => 'int32',
        'db' => null,
        'flags' => null,
        'sub' => 'int32',
        'psub' => 'int32',
        'multi' => 'int32',
        'qbuf' => 'int32',
        'qbufFree' => 'int32',
        'obl' => 'int32',
        'oll' => 'int32',
        'omem' => 'int32',
        'events' => null,
        'network' => null,
        'peer' => null,
        'user' => null
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
    * id  客户端ID
    * addr  客户端的地址和端口
    * fd  套接字所使用的文件描述符。
    * name  客户端的名称
    * cmd  最近一次执行的命令
    * age  已连接时长（单位：秒）
    * idle  空闲时长（单位：秒）
    * db  该客户端正在使用的数据库 ID
    * flags  客户端标志
    * sub  已订阅频道的数量
    * psub  已订阅模式的数量
    * multi  在事务中被执行的命令数量
    * qbuf  查询缓冲区的长度（单位为字节， 0 表示没有分配查询缓冲区）
    * qbufFree  查询缓冲区剩余空间的长度（单位为字节， 0 表示没有剩余空间）
    * obl  输出缓冲区的长度（单位为字节， 0 表示没有分配输出缓冲区）
    * oll  输出列表包含的对象数量（当输出缓冲区没有剩余空间时，命令回复会以字符串对象的形式被入队到这个队列里）
    * omem  输出缓冲区和输出列表占用的内存总量
    * events  文件描述符事件
    * network  客户端所使用的网络类型。
    * peer  单机，主备和cluster实例地址和端口。
    * user  客户端用户。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'addr' => 'addr',
            'fd' => 'fd',
            'name' => 'name',
            'cmd' => 'cmd',
            'age' => 'age',
            'idle' => 'idle',
            'db' => 'db',
            'flags' => 'flags',
            'sub' => 'sub',
            'psub' => 'psub',
            'multi' => 'multi',
            'qbuf' => 'qbuf',
            'qbufFree' => 'qbuf_free',
            'obl' => 'obl',
            'oll' => 'oll',
            'omem' => 'omem',
            'events' => 'events',
            'network' => 'network',
            'peer' => 'peer',
            'user' => 'user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  客户端ID
    * addr  客户端的地址和端口
    * fd  套接字所使用的文件描述符。
    * name  客户端的名称
    * cmd  最近一次执行的命令
    * age  已连接时长（单位：秒）
    * idle  空闲时长（单位：秒）
    * db  该客户端正在使用的数据库 ID
    * flags  客户端标志
    * sub  已订阅频道的数量
    * psub  已订阅模式的数量
    * multi  在事务中被执行的命令数量
    * qbuf  查询缓冲区的长度（单位为字节， 0 表示没有分配查询缓冲区）
    * qbufFree  查询缓冲区剩余空间的长度（单位为字节， 0 表示没有剩余空间）
    * obl  输出缓冲区的长度（单位为字节， 0 表示没有分配输出缓冲区）
    * oll  输出列表包含的对象数量（当输出缓冲区没有剩余空间时，命令回复会以字符串对象的形式被入队到这个队列里）
    * omem  输出缓冲区和输出列表占用的内存总量
    * events  文件描述符事件
    * network  客户端所使用的网络类型。
    * peer  单机，主备和cluster实例地址和端口。
    * user  客户端用户。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'addr' => 'setAddr',
            'fd' => 'setFd',
            'name' => 'setName',
            'cmd' => 'setCmd',
            'age' => 'setAge',
            'idle' => 'setIdle',
            'db' => 'setDb',
            'flags' => 'setFlags',
            'sub' => 'setSub',
            'psub' => 'setPsub',
            'multi' => 'setMulti',
            'qbuf' => 'setQbuf',
            'qbufFree' => 'setQbufFree',
            'obl' => 'setObl',
            'oll' => 'setOll',
            'omem' => 'setOmem',
            'events' => 'setEvents',
            'network' => 'setNetwork',
            'peer' => 'setPeer',
            'user' => 'setUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  客户端ID
    * addr  客户端的地址和端口
    * fd  套接字所使用的文件描述符。
    * name  客户端的名称
    * cmd  最近一次执行的命令
    * age  已连接时长（单位：秒）
    * idle  空闲时长（单位：秒）
    * db  该客户端正在使用的数据库 ID
    * flags  客户端标志
    * sub  已订阅频道的数量
    * psub  已订阅模式的数量
    * multi  在事务中被执行的命令数量
    * qbuf  查询缓冲区的长度（单位为字节， 0 表示没有分配查询缓冲区）
    * qbufFree  查询缓冲区剩余空间的长度（单位为字节， 0 表示没有剩余空间）
    * obl  输出缓冲区的长度（单位为字节， 0 表示没有分配输出缓冲区）
    * oll  输出列表包含的对象数量（当输出缓冲区没有剩余空间时，命令回复会以字符串对象的形式被入队到这个队列里）
    * omem  输出缓冲区和输出列表占用的内存总量
    * events  文件描述符事件
    * network  客户端所使用的网络类型。
    * peer  单机，主备和cluster实例地址和端口。
    * user  客户端用户。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'addr' => 'getAddr',
            'fd' => 'getFd',
            'name' => 'getName',
            'cmd' => 'getCmd',
            'age' => 'getAge',
            'idle' => 'getIdle',
            'db' => 'getDb',
            'flags' => 'getFlags',
            'sub' => 'getSub',
            'psub' => 'getPsub',
            'multi' => 'getMulti',
            'qbuf' => 'getQbuf',
            'qbufFree' => 'getQbufFree',
            'obl' => 'getObl',
            'oll' => 'getOll',
            'omem' => 'getOmem',
            'events' => 'getEvents',
            'network' => 'getNetwork',
            'peer' => 'getPeer',
            'user' => 'getUser'
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
    const EVENTS_R = 'r';
    const EVENTS_W = 'w';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventsAllowableValues()
    {
        return [
            self::EVENTS_R,
            self::EVENTS_W,
        ];
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
        $this->container['addr'] = isset($data['addr']) ? $data['addr'] : null;
        $this->container['fd'] = isset($data['fd']) ? $data['fd'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['idle'] = isset($data['idle']) ? $data['idle'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['flags'] = isset($data['flags']) ? $data['flags'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['psub'] = isset($data['psub']) ? $data['psub'] : null;
        $this->container['multi'] = isset($data['multi']) ? $data['multi'] : null;
        $this->container['qbuf'] = isset($data['qbuf']) ? $data['qbuf'] : null;
        $this->container['qbufFree'] = isset($data['qbufFree']) ? $data['qbufFree'] : null;
        $this->container['obl'] = isset($data['obl']) ? $data['obl'] : null;
        $this->container['oll'] = isset($data['oll']) ? $data['oll'] : null;
        $this->container['omem'] = isset($data['omem']) ? $data['omem'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['peer'] = isset($data['peer']) ? $data['peer'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEventsAllowableValues();
                if (!is_null($this->container['events']) && !in_array($this->container['events'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'events', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  客户端ID
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
    * @param string|null $id 客户端ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets addr
    *  客户端的地址和端口
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
    * @param string|null $addr 客户端的地址和端口
    *
    * @return $this
    */
    public function setAddr($addr)
    {
        $this->container['addr'] = $addr;
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
    * Gets name
    *  客户端的名称
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
    * @param string|null $name 客户端的名称
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
    *  最近一次执行的命令
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
    * @param string|null $cmd 最近一次执行的命令
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
    *  已连接时长（单位：秒）
    *
    * @return int|null
    */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
    * Sets age
    *
    * @param int|null $age 已连接时长（单位：秒）
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
    *  空闲时长（单位：秒）
    *
    * @return int|null
    */
    public function getIdle()
    {
        return $this->container['idle'];
    }

    /**
    * Sets idle
    *
    * @param int|null $idle 空闲时长（单位：秒）
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
    *  该客户端正在使用的数据库 ID
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
    * @param string|null $db 该客户端正在使用的数据库 ID
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets flags
    *  客户端标志
    *
    * @return string|null
    */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
    * Sets flags
    *
    * @param string|null $flags 客户端标志
    *
    * @return $this
    */
    public function setFlags($flags)
    {
        $this->container['flags'] = $flags;
        return $this;
    }

    /**
    * Gets sub
    *  已订阅频道的数量
    *
    * @return int|null
    */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
    * Sets sub
    *
    * @param int|null $sub 已订阅频道的数量
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
    *  已订阅模式的数量
    *
    * @return int|null
    */
    public function getPsub()
    {
        return $this->container['psub'];
    }

    /**
    * Sets psub
    *
    * @param int|null $psub 已订阅模式的数量
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
    *  在事务中被执行的命令数量
    *
    * @return int|null
    */
    public function getMulti()
    {
        return $this->container['multi'];
    }

    /**
    * Sets multi
    *
    * @param int|null $multi 在事务中被执行的命令数量
    *
    * @return $this
    */
    public function setMulti($multi)
    {
        $this->container['multi'] = $multi;
        return $this;
    }

    /**
    * Gets qbuf
    *  查询缓冲区的长度（单位为字节， 0 表示没有分配查询缓冲区）
    *
    * @return int|null
    */
    public function getQbuf()
    {
        return $this->container['qbuf'];
    }

    /**
    * Sets qbuf
    *
    * @param int|null $qbuf 查询缓冲区的长度（单位为字节， 0 表示没有分配查询缓冲区）
    *
    * @return $this
    */
    public function setQbuf($qbuf)
    {
        $this->container['qbuf'] = $qbuf;
        return $this;
    }

    /**
    * Gets qbufFree
    *  查询缓冲区剩余空间的长度（单位为字节， 0 表示没有剩余空间）
    *
    * @return int|null
    */
    public function getQbufFree()
    {
        return $this->container['qbufFree'];
    }

    /**
    * Sets qbufFree
    *
    * @param int|null $qbufFree 查询缓冲区剩余空间的长度（单位为字节， 0 表示没有剩余空间）
    *
    * @return $this
    */
    public function setQbufFree($qbufFree)
    {
        $this->container['qbufFree'] = $qbufFree;
        return $this;
    }

    /**
    * Gets obl
    *  输出缓冲区的长度（单位为字节， 0 表示没有分配输出缓冲区）
    *
    * @return int|null
    */
    public function getObl()
    {
        return $this->container['obl'];
    }

    /**
    * Sets obl
    *
    * @param int|null $obl 输出缓冲区的长度（单位为字节， 0 表示没有分配输出缓冲区）
    *
    * @return $this
    */
    public function setObl($obl)
    {
        $this->container['obl'] = $obl;
        return $this;
    }

    /**
    * Gets oll
    *  输出列表包含的对象数量（当输出缓冲区没有剩余空间时，命令回复会以字符串对象的形式被入队到这个队列里）
    *
    * @return int|null
    */
    public function getOll()
    {
        return $this->container['oll'];
    }

    /**
    * Sets oll
    *
    * @param int|null $oll 输出列表包含的对象数量（当输出缓冲区没有剩余空间时，命令回复会以字符串对象的形式被入队到这个队列里）
    *
    * @return $this
    */
    public function setOll($oll)
    {
        $this->container['oll'] = $oll;
        return $this;
    }

    /**
    * Gets omem
    *  输出缓冲区和输出列表占用的内存总量
    *
    * @return int|null
    */
    public function getOmem()
    {
        return $this->container['omem'];
    }

    /**
    * Sets omem
    *
    * @param int|null $omem 输出缓冲区和输出列表占用的内存总量
    *
    * @return $this
    */
    public function setOmem($omem)
    {
        $this->container['omem'] = $omem;
        return $this;
    }

    /**
    * Gets events
    *  文件描述符事件
    *
    * @return string|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param string|null $events 文件描述符事件
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets network
    *  客户端所使用的网络类型。
    *
    * @return string|null
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param string|null $network 客户端所使用的网络类型。
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets peer
    *  单机，主备和cluster实例地址和端口。
    *
    * @return string|null
    */
    public function getPeer()
    {
        return $this->container['peer'];
    }

    /**
    * Sets peer
    *
    * @param string|null $peer 单机，主备和cluster实例地址和端口。
    *
    * @return $this
    */
    public function setPeer($peer)
    {
        $this->container['peer'] = $peer;
        return $this;
    }

    /**
    * Gets user
    *  客户端用户。
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
    * @param string|null $user 客户端用户。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
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

