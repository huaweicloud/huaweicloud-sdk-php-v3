<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConnectionProcessesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConnectionProcessesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectionId  连接ID
    * user  指定用户
    * host  指定访问来源
    * db  指定数据库
    * state  指定状态
    * command  指定命令
    * keywords  模糊搜索条件
    * showAll  是否显示全部
    * showNoPid  是否显示没有后台进程的会话
    * time  指定慢sql阈值
    * perPage  每页记录数
    * curPage  页码
    * orderBy  选择排序列
    * order  排序顺序
    * nodeId  节点ID
    * nodeRole  节点类型
    * hideSys  是否过滤系统会话
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectionId' => 'string',
            'user' => 'string',
            'host' => 'string',
            'db' => 'string',
            'state' => 'string',
            'command' => 'string',
            'keywords' => 'string',
            'showAll' => 'bool',
            'showNoPid' => 'bool',
            'time' => 'string',
            'perPage' => 'string',
            'curPage' => 'string',
            'orderBy' => 'string',
            'order' => 'string',
            'nodeId' => 'string',
            'nodeRole' => 'string',
            'hideSys' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectionId  连接ID
    * user  指定用户
    * host  指定访问来源
    * db  指定数据库
    * state  指定状态
    * command  指定命令
    * keywords  模糊搜索条件
    * showAll  是否显示全部
    * showNoPid  是否显示没有后台进程的会话
    * time  指定慢sql阈值
    * perPage  每页记录数
    * curPage  页码
    * orderBy  选择排序列
    * order  排序顺序
    * nodeId  节点ID
    * nodeRole  节点类型
    * hideSys  是否过滤系统会话
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectionId' => null,
        'user' => null,
        'host' => null,
        'db' => null,
        'state' => null,
        'command' => null,
        'keywords' => null,
        'showAll' => null,
        'showNoPid' => null,
        'time' => null,
        'perPage' => null,
        'curPage' => null,
        'orderBy' => null,
        'order' => null,
        'nodeId' => null,
        'nodeRole' => null,
        'hideSys' => null
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
    * connectionId  连接ID
    * user  指定用户
    * host  指定访问来源
    * db  指定数据库
    * state  指定状态
    * command  指定命令
    * keywords  模糊搜索条件
    * showAll  是否显示全部
    * showNoPid  是否显示没有后台进程的会话
    * time  指定慢sql阈值
    * perPage  每页记录数
    * curPage  页码
    * orderBy  选择排序列
    * order  排序顺序
    * nodeId  节点ID
    * nodeRole  节点类型
    * hideSys  是否过滤系统会话
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectionId' => 'connection_id',
            'user' => 'user',
            'host' => 'host',
            'db' => 'db',
            'state' => 'state',
            'command' => 'command',
            'keywords' => 'keywords',
            'showAll' => 'show_all',
            'showNoPid' => 'show_no_pid',
            'time' => 'time',
            'perPage' => 'per_page',
            'curPage' => 'cur_page',
            'orderBy' => 'order_by',
            'order' => 'order',
            'nodeId' => 'node_id',
            'nodeRole' => 'node_role',
            'hideSys' => 'hide_sys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectionId  连接ID
    * user  指定用户
    * host  指定访问来源
    * db  指定数据库
    * state  指定状态
    * command  指定命令
    * keywords  模糊搜索条件
    * showAll  是否显示全部
    * showNoPid  是否显示没有后台进程的会话
    * time  指定慢sql阈值
    * perPage  每页记录数
    * curPage  页码
    * orderBy  选择排序列
    * order  排序顺序
    * nodeId  节点ID
    * nodeRole  节点类型
    * hideSys  是否过滤系统会话
    *
    * @var string[]
    */
    protected static $setters = [
            'connectionId' => 'setConnectionId',
            'user' => 'setUser',
            'host' => 'setHost',
            'db' => 'setDb',
            'state' => 'setState',
            'command' => 'setCommand',
            'keywords' => 'setKeywords',
            'showAll' => 'setShowAll',
            'showNoPid' => 'setShowNoPid',
            'time' => 'setTime',
            'perPage' => 'setPerPage',
            'curPage' => 'setCurPage',
            'orderBy' => 'setOrderBy',
            'order' => 'setOrder',
            'nodeId' => 'setNodeId',
            'nodeRole' => 'setNodeRole',
            'hideSys' => 'setHideSys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectionId  连接ID
    * user  指定用户
    * host  指定访问来源
    * db  指定数据库
    * state  指定状态
    * command  指定命令
    * keywords  模糊搜索条件
    * showAll  是否显示全部
    * showNoPid  是否显示没有后台进程的会话
    * time  指定慢sql阈值
    * perPage  每页记录数
    * curPage  页码
    * orderBy  选择排序列
    * order  排序顺序
    * nodeId  节点ID
    * nodeRole  节点类型
    * hideSys  是否过滤系统会话
    *
    * @var string[]
    */
    protected static $getters = [
            'connectionId' => 'getConnectionId',
            'user' => 'getUser',
            'host' => 'getHost',
            'db' => 'getDb',
            'state' => 'getState',
            'command' => 'getCommand',
            'keywords' => 'getKeywords',
            'showAll' => 'getShowAll',
            'showNoPid' => 'getShowNoPid',
            'time' => 'getTime',
            'perPage' => 'getPerPage',
            'curPage' => 'getCurPage',
            'orderBy' => 'getOrderBy',
            'order' => 'getOrder',
            'nodeId' => 'getNodeId',
            'nodeRole' => 'getNodeRole',
            'hideSys' => 'getHideSys'
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
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['command'] = isset($data['command']) ? $data['command'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['showAll'] = isset($data['showAll']) ? $data['showAll'] : null;
        $this->container['showNoPid'] = isset($data['showNoPid']) ? $data['showNoPid'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeRole'] = isset($data['nodeRole']) ? $data['nodeRole'] : null;
        $this->container['hideSys'] = isset($data['hideSys']) ? $data['hideSys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectionId'] === null) {
            $invalidProperties[] = "'connectionId' can't be null";
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
    * Gets connectionId
    *  连接ID
    *
    * @return string
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string $connectionId 连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets user
    *  指定用户
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
    * @param string|null $user 指定用户
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
    *  指定访问来源
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
    * @param string|null $host 指定访问来源
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
    *  指定数据库
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
    * @param string|null $db 指定数据库
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets state
    *  指定状态
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
    * @param string|null $state 指定状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets command
    *  指定命令
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
    * @param string|null $command 指定命令
    *
    * @return $this
    */
    public function setCommand($command)
    {
        $this->container['command'] = $command;
        return $this;
    }

    /**
    * Gets keywords
    *  模糊搜索条件
    *
    * @return string|null
    */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
    * Sets keywords
    *
    * @param string|null $keywords 模糊搜索条件
    *
    * @return $this
    */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    /**
    * Gets showAll
    *  是否显示全部
    *
    * @return bool|null
    */
    public function getShowAll()
    {
        return $this->container['showAll'];
    }

    /**
    * Sets showAll
    *
    * @param bool|null $showAll 是否显示全部
    *
    * @return $this
    */
    public function setShowAll($showAll)
    {
        $this->container['showAll'] = $showAll;
        return $this;
    }

    /**
    * Gets showNoPid
    *  是否显示没有后台进程的会话
    *
    * @return bool|null
    */
    public function getShowNoPid()
    {
        return $this->container['showNoPid'];
    }

    /**
    * Sets showNoPid
    *
    * @param bool|null $showNoPid 是否显示没有后台进程的会话
    *
    * @return $this
    */
    public function setShowNoPid($showNoPid)
    {
        $this->container['showNoPid'] = $showNoPid;
        return $this;
    }

    /**
    * Gets time
    *  指定慢sql阈值
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
    * @param string|null $time 指定慢sql阈值
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets perPage
    *  每页记录数
    *
    * @return string|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param string|null $perPage 每页记录数
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets curPage
    *  页码
    *
    * @return string|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param string|null $curPage 页码
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets orderBy
    *  选择排序列
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 选择排序列
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets order
    *  排序顺序
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序顺序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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
    * Gets nodeRole
    *  节点类型
    *
    * @return string|null
    */
    public function getNodeRole()
    {
        return $this->container['nodeRole'];
    }

    /**
    * Sets nodeRole
    *
    * @param string|null $nodeRole 节点类型
    *
    * @return $this
    */
    public function setNodeRole($nodeRole)
    {
        $this->container['nodeRole'] = $nodeRole;
        return $this;
    }

    /**
    * Gets hideSys
    *  是否过滤系统会话
    *
    * @return bool|null
    */
    public function getHideSys()
    {
        return $this->container['hideSys'];
    }

    /**
    * Sets hideSys
    *
    * @param bool|null $hideSys 是否过滤系统会话
    *
    * @return $this
    */
    public function setHideSys($hideSys)
    {
        $this->container['hideSys'] = $hideSys;
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

