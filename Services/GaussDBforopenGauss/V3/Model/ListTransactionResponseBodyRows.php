<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTransactionResponseBodyRows implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTransactionResponseBody_rows';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sessionid  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: SQL查询ID。 **取值范围**: 不涉及。
    * datname  **参数解释**: 数据库。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起事务请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起事务请求的客户端端口。 **取值范围**: 不涉及。
    * usename  **参数解释**: 用户名。 **取值范围**: 不涉及。 **取值范围**: 不涉及。
    * query  **参数解释**: 查询的SQL语句。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 事务开始时间。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * state  **参数解释**: 事务状态。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 事务变更时间。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否等待。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * execTime  **参数解释**: 事务执行时长。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务xlog量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sessionid' => 'int',
            'pid' => 'int',
            'queryId' => 'int',
            'datname' => 'string',
            'clientAddr' => 'string',
            'clientPort' => 'int',
            'usename' => 'string',
            'query' => 'string',
            'backendStart' => 'string',
            'xactStart' => 'string',
            'applicationName' => 'string',
            'state' => 'string',
            'stateChange' => 'string',
            'queryStart' => 'string',
            'waiting' => 'string',
            'uniqueSqlId' => 'int',
            'topXid' => 'string',
            'currentXid' => 'string',
            'execTime' => 'string',
            'xlogQuantity' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sessionid  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: SQL查询ID。 **取值范围**: 不涉及。
    * datname  **参数解释**: 数据库。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起事务请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起事务请求的客户端端口。 **取值范围**: 不涉及。
    * usename  **参数解释**: 用户名。 **取值范围**: 不涉及。 **取值范围**: 不涉及。
    * query  **参数解释**: 查询的SQL语句。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 事务开始时间。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * state  **参数解释**: 事务状态。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 事务变更时间。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否等待。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * execTime  **参数解释**: 事务执行时长。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务xlog量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sessionid' => 'int32',
        'pid' => 'int32',
        'queryId' => 'int32',
        'datname' => null,
        'clientAddr' => null,
        'clientPort' => 'int32',
        'usename' => null,
        'query' => null,
        'backendStart' => null,
        'xactStart' => null,
        'applicationName' => null,
        'state' => null,
        'stateChange' => null,
        'queryStart' => null,
        'waiting' => null,
        'uniqueSqlId' => 'int32',
        'topXid' => null,
        'currentXid' => null,
        'execTime' => null,
        'xlogQuantity' => 'int32'
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
    * sessionid  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: SQL查询ID。 **取值范围**: 不涉及。
    * datname  **参数解释**: 数据库。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起事务请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起事务请求的客户端端口。 **取值范围**: 不涉及。
    * usename  **参数解释**: 用户名。 **取值范围**: 不涉及。 **取值范围**: 不涉及。
    * query  **参数解释**: 查询的SQL语句。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 事务开始时间。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * state  **参数解释**: 事务状态。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 事务变更时间。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否等待。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * execTime  **参数解释**: 事务执行时长。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务xlog量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sessionid' => 'sessionid',
            'pid' => 'pid',
            'queryId' => 'query_id',
            'datname' => 'datname',
            'clientAddr' => 'client_addr',
            'clientPort' => 'client_port',
            'usename' => 'usename',
            'query' => 'query',
            'backendStart' => 'backend_start',
            'xactStart' => 'xact_start',
            'applicationName' => 'application_name',
            'state' => 'state',
            'stateChange' => 'state_change',
            'queryStart' => 'query_start',
            'waiting' => 'waiting',
            'uniqueSqlId' => 'unique_sql_id',
            'topXid' => 'top_xid',
            'currentXid' => 'current_xid',
            'execTime' => 'exec_time',
            'xlogQuantity' => 'xlog_quantity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sessionid  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: SQL查询ID。 **取值范围**: 不涉及。
    * datname  **参数解释**: 数据库。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起事务请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起事务请求的客户端端口。 **取值范围**: 不涉及。
    * usename  **参数解释**: 用户名。 **取值范围**: 不涉及。 **取值范围**: 不涉及。
    * query  **参数解释**: 查询的SQL语句。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 事务开始时间。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * state  **参数解释**: 事务状态。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 事务变更时间。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否等待。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * execTime  **参数解释**: 事务执行时长。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务xlog量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sessionid' => 'setSessionid',
            'pid' => 'setPid',
            'queryId' => 'setQueryId',
            'datname' => 'setDatname',
            'clientAddr' => 'setClientAddr',
            'clientPort' => 'setClientPort',
            'usename' => 'setUsename',
            'query' => 'setQuery',
            'backendStart' => 'setBackendStart',
            'xactStart' => 'setXactStart',
            'applicationName' => 'setApplicationName',
            'state' => 'setState',
            'stateChange' => 'setStateChange',
            'queryStart' => 'setQueryStart',
            'waiting' => 'setWaiting',
            'uniqueSqlId' => 'setUniqueSqlId',
            'topXid' => 'setTopXid',
            'currentXid' => 'setCurrentXid',
            'execTime' => 'setExecTime',
            'xlogQuantity' => 'setXlogQuantity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sessionid  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * pid  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    * queryId  **参数解释**: SQL查询ID。 **取值范围**: 不涉及。
    * datname  **参数解释**: 数据库。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起事务请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起事务请求的客户端端口。 **取值范围**: 不涉及。
    * usename  **参数解释**: 用户名。 **取值范围**: 不涉及。 **取值范围**: 不涉及。
    * query  **参数解释**: 查询的SQL语句。 **取值范围**: 不涉及。
    * backendStart  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    * xactStart  **参数解释**: 事务开始时间。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    * state  **参数解释**: 事务状态。 **取值范围**: 不涉及。
    * stateChange  **参数解释**: 事务变更时间。 **取值范围**: 不涉及。
    * queryStart  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    * waiting  **参数解释**: 是否等待。 **取值范围**: 不涉及。
    * uniqueSqlId  **参数解释**: 归一化ID。 **取值范围**: 不涉及。
    * topXid  **参数解释**: 顶层事务ID。
    * currentXid  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    * execTime  **参数解释**: 事务执行时长。 **取值范围**: 不涉及。
    * xlogQuantity  **参数解释**: 事务xlog量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sessionid' => 'getSessionid',
            'pid' => 'getPid',
            'queryId' => 'getQueryId',
            'datname' => 'getDatname',
            'clientAddr' => 'getClientAddr',
            'clientPort' => 'getClientPort',
            'usename' => 'getUsename',
            'query' => 'getQuery',
            'backendStart' => 'getBackendStart',
            'xactStart' => 'getXactStart',
            'applicationName' => 'getApplicationName',
            'state' => 'getState',
            'stateChange' => 'getStateChange',
            'queryStart' => 'getQueryStart',
            'waiting' => 'getWaiting',
            'uniqueSqlId' => 'getUniqueSqlId',
            'topXid' => 'getTopXid',
            'currentXid' => 'getCurrentXid',
            'execTime' => 'getExecTime',
            'xlogQuantity' => 'getXlogQuantity'
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
        $this->container['sessionid'] = isset($data['sessionid']) ? $data['sessionid'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
        $this->container['datname'] = isset($data['datname']) ? $data['datname'] : null;
        $this->container['clientAddr'] = isset($data['clientAddr']) ? $data['clientAddr'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['usename'] = isset($data['usename']) ? $data['usename'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['backendStart'] = isset($data['backendStart']) ? $data['backendStart'] : null;
        $this->container['xactStart'] = isset($data['xactStart']) ? $data['xactStart'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['stateChange'] = isset($data['stateChange']) ? $data['stateChange'] : null;
        $this->container['queryStart'] = isset($data['queryStart']) ? $data['queryStart'] : null;
        $this->container['waiting'] = isset($data['waiting']) ? $data['waiting'] : null;
        $this->container['uniqueSqlId'] = isset($data['uniqueSqlId']) ? $data['uniqueSqlId'] : null;
        $this->container['topXid'] = isset($data['topXid']) ? $data['topXid'] : null;
        $this->container['currentXid'] = isset($data['currentXid']) ? $data['currentXid'] : null;
        $this->container['execTime'] = isset($data['execTime']) ? $data['execTime'] : null;
        $this->container['xlogQuantity'] = isset($data['xlogQuantity']) ? $data['xlogQuantity'] : null;
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
    * Gets sessionid
    *  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getSessionid()
    {
        return $this->container['sessionid'];
    }

    /**
    * Sets sessionid
    *
    * @param int|null $sessionid **参数解释**: 事务ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSessionid($sessionid)
    {
        $this->container['sessionid'] = $sessionid;
        return $this;
    }

    /**
    * Gets pid
    *  **参数解释**: 线程ID。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param int|null $pid **参数解释**: 线程ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets queryId
    *  **参数解释**: SQL查询ID。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param int|null $queryId **参数解释**: SQL查询ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
        return $this;
    }

    /**
    * Gets datname
    *  **参数解释**: 数据库。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDatname()
    {
        return $this->container['datname'];
    }

    /**
    * Sets datname
    *
    * @param string|null $datname **参数解释**: 数据库。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDatname($datname)
    {
        $this->container['datname'] = $datname;
        return $this;
    }

    /**
    * Gets clientAddr
    *  **参数解释**: 用户发起事务请求的客户端地址。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getClientAddr()
    {
        return $this->container['clientAddr'];
    }

    /**
    * Sets clientAddr
    *
    * @param string|null $clientAddr **参数解释**: 用户发起事务请求的客户端地址。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setClientAddr($clientAddr)
    {
        $this->container['clientAddr'] = $clientAddr;
        return $this;
    }

    /**
    * Gets clientPort
    *  **参数解释**: 用户发起事务请求的客户端端口。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getClientPort()
    {
        return $this->container['clientPort'];
    }

    /**
    * Sets clientPort
    *
    * @param int|null $clientPort **参数解释**: 用户发起事务请求的客户端端口。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets usename
    *  **参数解释**: 用户名。 **取值范围**: 不涉及。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUsename()
    {
        return $this->container['usename'];
    }

    /**
    * Sets usename
    *
    * @param string|null $usename **参数解释**: 用户名。 **取值范围**: 不涉及。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUsename($usename)
    {
        $this->container['usename'] = $usename;
        return $this;
    }

    /**
    * Gets query
    *  **参数解释**: 查询的SQL语句。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query **参数解释**: 查询的SQL语句。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
        return $this;
    }

    /**
    * Gets backendStart
    *  **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getBackendStart()
    {
        return $this->container['backendStart'];
    }

    /**
    * Sets backendStart
    *
    * @param string|null $backendStart **参数解释**: 会话开始时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBackendStart($backendStart)
    {
        $this->container['backendStart'] = $backendStart;
        return $this;
    }

    /**
    * Gets xactStart
    *  **参数解释**: 事务开始时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getXactStart()
    {
        return $this->container['xactStart'];
    }

    /**
    * Sets xactStart
    *
    * @param string|null $xactStart **参数解释**: 事务开始时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setXactStart($xactStart)
    {
        $this->container['xactStart'] = $xactStart;
        return $this;
    }

    /**
    * Gets applicationName
    *  **参数解释**: 应用名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string|null $applicationName **参数解释**: 应用名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**: 事务状态。 **取值范围**: 不涉及。
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
    * @param string|null $state **参数解释**: 事务状态。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets stateChange
    *  **参数解释**: 事务变更时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getStateChange()
    {
        return $this->container['stateChange'];
    }

    /**
    * Sets stateChange
    *
    * @param string|null $stateChange **参数解释**: 事务变更时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setStateChange($stateChange)
    {
        $this->container['stateChange'] = $stateChange;
        return $this;
    }

    /**
    * Gets queryStart
    *  **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getQueryStart()
    {
        return $this->container['queryStart'];
    }

    /**
    * Sets queryStart
    *
    * @param string|null $queryStart **参数解释**: 查询开始时间。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQueryStart($queryStart)
    {
        $this->container['queryStart'] = $queryStart;
        return $this;
    }

    /**
    * Gets waiting
    *  **参数解释**: 是否等待。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getWaiting()
    {
        return $this->container['waiting'];
    }

    /**
    * Sets waiting
    *
    * @param string|null $waiting **参数解释**: 是否等待。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setWaiting($waiting)
    {
        $this->container['waiting'] = $waiting;
        return $this;
    }

    /**
    * Gets uniqueSqlId
    *  **参数解释**: 归一化ID。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getUniqueSqlId()
    {
        return $this->container['uniqueSqlId'];
    }

    /**
    * Sets uniqueSqlId
    *
    * @param int|null $uniqueSqlId **参数解释**: 归一化ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUniqueSqlId($uniqueSqlId)
    {
        $this->container['uniqueSqlId'] = $uniqueSqlId;
        return $this;
    }

    /**
    * Gets topXid
    *  **参数解释**: 顶层事务ID。
    *
    * @return string|null
    */
    public function getTopXid()
    {
        return $this->container['topXid'];
    }

    /**
    * Sets topXid
    *
    * @param string|null $topXid **参数解释**: 顶层事务ID。
    *
    * @return $this
    */
    public function setTopXid($topXid)
    {
        $this->container['topXid'] = $topXid;
        return $this;
    }

    /**
    * Gets currentXid
    *  **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCurrentXid()
    {
        return $this->container['currentXid'];
    }

    /**
    * Sets currentXid
    *
    * @param string|null $currentXid **参数解释**: 当前事务ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCurrentXid($currentXid)
    {
        $this->container['currentXid'] = $currentXid;
        return $this;
    }

    /**
    * Gets execTime
    *  **参数解释**: 事务执行时长。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getExecTime()
    {
        return $this->container['execTime'];
    }

    /**
    * Sets execTime
    *
    * @param string|null $execTime **参数解释**: 事务执行时长。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setExecTime($execTime)
    {
        $this->container['execTime'] = $execTime;
        return $this;
    }

    /**
    * Gets xlogQuantity
    *  **参数解释**: 事务xlog量。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getXlogQuantity()
    {
        return $this->container['xlogQuantity'];
    }

    /**
    * Sets xlogQuantity
    *
    * @param int|null $xlogQuantity **参数解释**: 事务xlog量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setXlogQuantity($xlogQuantity)
    {
        $this->container['xlogQuantity'] = $xlogQuantity;
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

