<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLockBlockingDetailRespDetailList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLockBlockingDetailResp_detail_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一ID
    * uniqueId  批次ID
    * spid  会话ID
    * blockedBySpid  阻塞会话ID
    * collectTime  采集时间
    * startTime  SQL开始时间
    * elapsedTime  执行耗时（ms）
    * cpu  CPU时间（ms）
    * waitTime  阻塞时长（ms）
    * waitType  等待类型
    * sql  SQL
    * queryHash  Query Hash
    * dbName  数据库名
    * hostName  客户端HostName
    * clientAppName  客户端名称
    * loginId  当前用户
    * cmd  SQL命令类型
    * physicalIo  SQL消耗的I/O
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'uniqueId' => 'string',
            'spid' => 'int',
            'blockedBySpid' => 'int',
            'collectTime' => 'int',
            'startTime' => 'int',
            'elapsedTime' => 'int',
            'cpu' => 'int',
            'waitTime' => 'int',
            'waitType' => 'string',
            'sql' => 'string',
            'queryHash' => 'string',
            'dbName' => 'string',
            'hostName' => 'string',
            'clientAppName' => 'string',
            'loginId' => 'string',
            'cmd' => 'string',
            'physicalIo' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一ID
    * uniqueId  批次ID
    * spid  会话ID
    * blockedBySpid  阻塞会话ID
    * collectTime  采集时间
    * startTime  SQL开始时间
    * elapsedTime  执行耗时（ms）
    * cpu  CPU时间（ms）
    * waitTime  阻塞时长（ms）
    * waitType  等待类型
    * sql  SQL
    * queryHash  Query Hash
    * dbName  数据库名
    * hostName  客户端HostName
    * clientAppName  客户端名称
    * loginId  当前用户
    * cmd  SQL命令类型
    * physicalIo  SQL消耗的I/O
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'uniqueId' => null,
        'spid' => 'int64',
        'blockedBySpid' => 'int64',
        'collectTime' => 'int64',
        'startTime' => 'int64',
        'elapsedTime' => 'int64',
        'cpu' => 'int64',
        'waitTime' => 'int64',
        'waitType' => null,
        'sql' => null,
        'queryHash' => null,
        'dbName' => null,
        'hostName' => null,
        'clientAppName' => null,
        'loginId' => null,
        'cmd' => null,
        'physicalIo' => 'int64'
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
    * id  唯一ID
    * uniqueId  批次ID
    * spid  会话ID
    * blockedBySpid  阻塞会话ID
    * collectTime  采集时间
    * startTime  SQL开始时间
    * elapsedTime  执行耗时（ms）
    * cpu  CPU时间（ms）
    * waitTime  阻塞时长（ms）
    * waitType  等待类型
    * sql  SQL
    * queryHash  Query Hash
    * dbName  数据库名
    * hostName  客户端HostName
    * clientAppName  客户端名称
    * loginId  当前用户
    * cmd  SQL命令类型
    * physicalIo  SQL消耗的I/O
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'uniqueId' => 'unique_id',
            'spid' => 'spid',
            'blockedBySpid' => 'blocked_by_spid',
            'collectTime' => 'collect_time',
            'startTime' => 'start_time',
            'elapsedTime' => 'elapsed_time',
            'cpu' => 'cpu',
            'waitTime' => 'wait_time',
            'waitType' => 'wait_type',
            'sql' => 'sql',
            'queryHash' => 'query_hash',
            'dbName' => 'db_name',
            'hostName' => 'host_name',
            'clientAppName' => 'client_app_name',
            'loginId' => 'login_id',
            'cmd' => 'cmd',
            'physicalIo' => 'physical_io'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一ID
    * uniqueId  批次ID
    * spid  会话ID
    * blockedBySpid  阻塞会话ID
    * collectTime  采集时间
    * startTime  SQL开始时间
    * elapsedTime  执行耗时（ms）
    * cpu  CPU时间（ms）
    * waitTime  阻塞时长（ms）
    * waitType  等待类型
    * sql  SQL
    * queryHash  Query Hash
    * dbName  数据库名
    * hostName  客户端HostName
    * clientAppName  客户端名称
    * loginId  当前用户
    * cmd  SQL命令类型
    * physicalIo  SQL消耗的I/O
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'uniqueId' => 'setUniqueId',
            'spid' => 'setSpid',
            'blockedBySpid' => 'setBlockedBySpid',
            'collectTime' => 'setCollectTime',
            'startTime' => 'setStartTime',
            'elapsedTime' => 'setElapsedTime',
            'cpu' => 'setCpu',
            'waitTime' => 'setWaitTime',
            'waitType' => 'setWaitType',
            'sql' => 'setSql',
            'queryHash' => 'setQueryHash',
            'dbName' => 'setDbName',
            'hostName' => 'setHostName',
            'clientAppName' => 'setClientAppName',
            'loginId' => 'setLoginId',
            'cmd' => 'setCmd',
            'physicalIo' => 'setPhysicalIo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一ID
    * uniqueId  批次ID
    * spid  会话ID
    * blockedBySpid  阻塞会话ID
    * collectTime  采集时间
    * startTime  SQL开始时间
    * elapsedTime  执行耗时（ms）
    * cpu  CPU时间（ms）
    * waitTime  阻塞时长（ms）
    * waitType  等待类型
    * sql  SQL
    * queryHash  Query Hash
    * dbName  数据库名
    * hostName  客户端HostName
    * clientAppName  客户端名称
    * loginId  当前用户
    * cmd  SQL命令类型
    * physicalIo  SQL消耗的I/O
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'uniqueId' => 'getUniqueId',
            'spid' => 'getSpid',
            'blockedBySpid' => 'getBlockedBySpid',
            'collectTime' => 'getCollectTime',
            'startTime' => 'getStartTime',
            'elapsedTime' => 'getElapsedTime',
            'cpu' => 'getCpu',
            'waitTime' => 'getWaitTime',
            'waitType' => 'getWaitType',
            'sql' => 'getSql',
            'queryHash' => 'getQueryHash',
            'dbName' => 'getDbName',
            'hostName' => 'getHostName',
            'clientAppName' => 'getClientAppName',
            'loginId' => 'getLoginId',
            'cmd' => 'getCmd',
            'physicalIo' => 'getPhysicalIo'
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
        $this->container['uniqueId'] = isset($data['uniqueId']) ? $data['uniqueId'] : null;
        $this->container['spid'] = isset($data['spid']) ? $data['spid'] : null;
        $this->container['blockedBySpid'] = isset($data['blockedBySpid']) ? $data['blockedBySpid'] : null;
        $this->container['collectTime'] = isset($data['collectTime']) ? $data['collectTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['elapsedTime'] = isset($data['elapsedTime']) ? $data['elapsedTime'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['waitTime'] = isset($data['waitTime']) ? $data['waitTime'] : null;
        $this->container['waitType'] = isset($data['waitType']) ? $data['waitType'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['queryHash'] = isset($data['queryHash']) ? $data['queryHash'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['clientAppName'] = isset($data['clientAppName']) ? $data['clientAppName'] : null;
        $this->container['loginId'] = isset($data['loginId']) ? $data['loginId'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['physicalIo'] = isset($data['physicalIo']) ? $data['physicalIo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 1024)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uniqueId']) && (mb_strlen($this->container['uniqueId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'uniqueId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['uniqueId']) && (mb_strlen($this->container['uniqueId']) < 1)) {
                $invalidProperties[] = "invalid value for 'uniqueId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['spid']) && ($this->container['spid'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'spid', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['spid']) && ($this->container['spid'] < 0)) {
                $invalidProperties[] = "invalid value for 'spid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blockedBySpid']) && ($this->container['blockedBySpid'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'blockedBySpid', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['blockedBySpid']) && ($this->container['blockedBySpid'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockedBySpid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['collectTime']) && ($this->container['collectTime'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'collectTime', must be smaller than or equal to 253370736001000.";
            }
            if (!is_null($this->container['collectTime']) && ($this->container['collectTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'collectTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 253370736001000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 253370736001000.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['elapsedTime']) && ($this->container['elapsedTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'elapsedTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['elapsedTime']) && ($this->container['elapsedTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'elapsedTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'cpu', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['waitTime']) && ($this->container['waitTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'waitTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['waitTime']) && ($this->container['waitTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'waitTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['waitType']) && (mb_strlen($this->container['waitType']) > 1024)) {
                $invalidProperties[] = "invalid value for 'waitType', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['waitType']) && (mb_strlen($this->container['waitType']) < 1)) {
                $invalidProperties[] = "invalid value for 'waitType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sql']) && (mb_strlen($this->container['sql']) < 1)) {
                $invalidProperties[] = "invalid value for 'sql', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['queryHash']) && (mb_strlen($this->container['queryHash']) > 1024)) {
                $invalidProperties[] = "invalid value for 'queryHash', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['queryHash']) && (mb_strlen($this->container['queryHash']) < 1)) {
                $invalidProperties[] = "invalid value for 'queryHash', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dbName']) && (mb_strlen($this->container['dbName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'dbName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['dbName']) && (mb_strlen($this->container['dbName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dbName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clientAppName']) && (mb_strlen($this->container['clientAppName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'clientAppName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['clientAppName']) && (mb_strlen($this->container['clientAppName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clientAppName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['loginId']) && (mb_strlen($this->container['loginId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'loginId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['loginId']) && (mb_strlen($this->container['loginId']) < 1)) {
                $invalidProperties[] = "invalid value for 'loginId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cmd']) && (mb_strlen($this->container['cmd']) > 1024)) {
                $invalidProperties[] = "invalid value for 'cmd', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['cmd']) && (mb_strlen($this->container['cmd']) < 1)) {
                $invalidProperties[] = "invalid value for 'cmd', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['physicalIo']) && ($this->container['physicalIo'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'physicalIo', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['physicalIo']) && ($this->container['physicalIo'] < 0)) {
                $invalidProperties[] = "invalid value for 'physicalIo', must be bigger than or equal to 0.";
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
    *  唯一ID
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
    * @param string|null $id 唯一ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets uniqueId
    *  批次ID
    *
    * @return string|null
    */
    public function getUniqueId()
    {
        return $this->container['uniqueId'];
    }

    /**
    * Sets uniqueId
    *
    * @param string|null $uniqueId 批次ID
    *
    * @return $this
    */
    public function setUniqueId($uniqueId)
    {
        $this->container['uniqueId'] = $uniqueId;
        return $this;
    }

    /**
    * Gets spid
    *  会话ID
    *
    * @return int|null
    */
    public function getSpid()
    {
        return $this->container['spid'];
    }

    /**
    * Sets spid
    *
    * @param int|null $spid 会话ID
    *
    * @return $this
    */
    public function setSpid($spid)
    {
        $this->container['spid'] = $spid;
        return $this;
    }

    /**
    * Gets blockedBySpid
    *  阻塞会话ID
    *
    * @return int|null
    */
    public function getBlockedBySpid()
    {
        return $this->container['blockedBySpid'];
    }

    /**
    * Sets blockedBySpid
    *
    * @param int|null $blockedBySpid 阻塞会话ID
    *
    * @return $this
    */
    public function setBlockedBySpid($blockedBySpid)
    {
        $this->container['blockedBySpid'] = $blockedBySpid;
        return $this;
    }

    /**
    * Gets collectTime
    *  采集时间
    *
    * @return int|null
    */
    public function getCollectTime()
    {
        return $this->container['collectTime'];
    }

    /**
    * Sets collectTime
    *
    * @param int|null $collectTime 采集时间
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
        return $this;
    }

    /**
    * Gets startTime
    *  SQL开始时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime SQL开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets elapsedTime
    *  执行耗时（ms）
    *
    * @return int|null
    */
    public function getElapsedTime()
    {
        return $this->container['elapsedTime'];
    }

    /**
    * Sets elapsedTime
    *
    * @param int|null $elapsedTime 执行耗时（ms）
    *
    * @return $this
    */
    public function setElapsedTime($elapsedTime)
    {
        $this->container['elapsedTime'] = $elapsedTime;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU时间（ms）
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu CPU时间（ms）
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets waitTime
    *  阻塞时长（ms）
    *
    * @return int|null
    */
    public function getWaitTime()
    {
        return $this->container['waitTime'];
    }

    /**
    * Sets waitTime
    *
    * @param int|null $waitTime 阻塞时长（ms）
    *
    * @return $this
    */
    public function setWaitTime($waitTime)
    {
        $this->container['waitTime'] = $waitTime;
        return $this;
    }

    /**
    * Gets waitType
    *  等待类型
    *
    * @return string|null
    */
    public function getWaitType()
    {
        return $this->container['waitType'];
    }

    /**
    * Sets waitType
    *
    * @param string|null $waitType 等待类型
    *
    * @return $this
    */
    public function setWaitType($waitType)
    {
        $this->container['waitType'] = $waitType;
        return $this;
    }

    /**
    * Gets sql
    *  SQL
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql SQL
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets queryHash
    *  Query Hash
    *
    * @return string|null
    */
    public function getQueryHash()
    {
        return $this->container['queryHash'];
    }

    /**
    * Sets queryHash
    *
    * @param string|null $queryHash Query Hash
    *
    * @return $this
    */
    public function setQueryHash($queryHash)
    {
        $this->container['queryHash'] = $queryHash;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets hostName
    *  客户端HostName
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 客户端HostName
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets clientAppName
    *  客户端名称
    *
    * @return string|null
    */
    public function getClientAppName()
    {
        return $this->container['clientAppName'];
    }

    /**
    * Sets clientAppName
    *
    * @param string|null $clientAppName 客户端名称
    *
    * @return $this
    */
    public function setClientAppName($clientAppName)
    {
        $this->container['clientAppName'] = $clientAppName;
        return $this;
    }

    /**
    * Gets loginId
    *  当前用户
    *
    * @return string|null
    */
    public function getLoginId()
    {
        return $this->container['loginId'];
    }

    /**
    * Sets loginId
    *
    * @param string|null $loginId 当前用户
    *
    * @return $this
    */
    public function setLoginId($loginId)
    {
        $this->container['loginId'] = $loginId;
        return $this;
    }

    /**
    * Gets cmd
    *  SQL命令类型
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
    * @param string|null $cmd SQL命令类型
    *
    * @return $this
    */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;
        return $this;
    }

    /**
    * Gets physicalIo
    *  SQL消耗的I/O
    *
    * @return int|null
    */
    public function getPhysicalIo()
    {
        return $this->container['physicalIo'];
    }

    /**
    * Sets physicalIo
    *
    * @param int|null $physicalIo SQL消耗的I/O
    *
    * @return $this
    */
    public function setPhysicalIo($physicalIo)
    {
        $this->container['physicalIo'] = $physicalIo;
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

