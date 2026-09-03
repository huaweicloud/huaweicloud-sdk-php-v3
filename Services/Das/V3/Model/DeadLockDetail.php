<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeadLockDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeadLockDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deadLockId  死锁ID
    * lastTranStarted  事务开启时间
    * spid  服务进程ID
    * isVictim  该会话是否已被终止
    * logUsed  任务使用的日志空间
    * lockMode  锁模式（S,X,U）
    * waitResourceDesc  等待中的资源详情
    * objectOwned  被锁住的对象
    * objectRequested  请求加锁的对象
    * waitResource  等待资源名称
    * hostName  主机名称
    * loginName  状态
    * status  等待中的资源详情
    * clientApp  客户端
    * sql  SQL
    * dbId  数据库ID
    * dbName  数据库名称
    * subDetailList  死锁子明细列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deadLockId' => 'string',
            'lastTranStarted' => 'string',
            'spid' => 'string',
            'isVictim' => 'bool',
            'logUsed' => 'int',
            'lockMode' => 'string',
            'waitResourceDesc' => 'string',
            'objectOwned' => 'string',
            'objectRequested' => 'string',
            'waitResource' => 'string',
            'hostName' => 'string',
            'loginName' => 'string',
            'status' => 'string',
            'clientApp' => 'string',
            'sql' => 'string',
            'dbId' => 'string',
            'dbName' => 'string',
            'subDetailList' => '\HuaweiCloud\SDK\Das\V3\Model\DeadLockSubDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deadLockId  死锁ID
    * lastTranStarted  事务开启时间
    * spid  服务进程ID
    * isVictim  该会话是否已被终止
    * logUsed  任务使用的日志空间
    * lockMode  锁模式（S,X,U）
    * waitResourceDesc  等待中的资源详情
    * objectOwned  被锁住的对象
    * objectRequested  请求加锁的对象
    * waitResource  等待资源名称
    * hostName  主机名称
    * loginName  状态
    * status  等待中的资源详情
    * clientApp  客户端
    * sql  SQL
    * dbId  数据库ID
    * dbName  数据库名称
    * subDetailList  死锁子明细列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deadLockId' => null,
        'lastTranStarted' => null,
        'spid' => null,
        'isVictim' => null,
        'logUsed' => 'int64',
        'lockMode' => null,
        'waitResourceDesc' => null,
        'objectOwned' => null,
        'objectRequested' => null,
        'waitResource' => null,
        'hostName' => null,
        'loginName' => null,
        'status' => null,
        'clientApp' => null,
        'sql' => null,
        'dbId' => null,
        'dbName' => null,
        'subDetailList' => null
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
    * deadLockId  死锁ID
    * lastTranStarted  事务开启时间
    * spid  服务进程ID
    * isVictim  该会话是否已被终止
    * logUsed  任务使用的日志空间
    * lockMode  锁模式（S,X,U）
    * waitResourceDesc  等待中的资源详情
    * objectOwned  被锁住的对象
    * objectRequested  请求加锁的对象
    * waitResource  等待资源名称
    * hostName  主机名称
    * loginName  状态
    * status  等待中的资源详情
    * clientApp  客户端
    * sql  SQL
    * dbId  数据库ID
    * dbName  数据库名称
    * subDetailList  死锁子明细列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deadLockId' => 'dead_lock_id',
            'lastTranStarted' => 'last_tran_started',
            'spid' => 'spid',
            'isVictim' => 'is_victim',
            'logUsed' => 'log_used',
            'lockMode' => 'lock_mode',
            'waitResourceDesc' => 'wait_resource_desc',
            'objectOwned' => 'object_owned',
            'objectRequested' => 'object_requested',
            'waitResource' => 'wait_resource',
            'hostName' => 'host_name',
            'loginName' => 'login_name',
            'status' => 'status',
            'clientApp' => 'client_app',
            'sql' => 'sql',
            'dbId' => 'db_id',
            'dbName' => 'db_name',
            'subDetailList' => 'sub_detail_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deadLockId  死锁ID
    * lastTranStarted  事务开启时间
    * spid  服务进程ID
    * isVictim  该会话是否已被终止
    * logUsed  任务使用的日志空间
    * lockMode  锁模式（S,X,U）
    * waitResourceDesc  等待中的资源详情
    * objectOwned  被锁住的对象
    * objectRequested  请求加锁的对象
    * waitResource  等待资源名称
    * hostName  主机名称
    * loginName  状态
    * status  等待中的资源详情
    * clientApp  客户端
    * sql  SQL
    * dbId  数据库ID
    * dbName  数据库名称
    * subDetailList  死锁子明细列表
    *
    * @var string[]
    */
    protected static $setters = [
            'deadLockId' => 'setDeadLockId',
            'lastTranStarted' => 'setLastTranStarted',
            'spid' => 'setSpid',
            'isVictim' => 'setIsVictim',
            'logUsed' => 'setLogUsed',
            'lockMode' => 'setLockMode',
            'waitResourceDesc' => 'setWaitResourceDesc',
            'objectOwned' => 'setObjectOwned',
            'objectRequested' => 'setObjectRequested',
            'waitResource' => 'setWaitResource',
            'hostName' => 'setHostName',
            'loginName' => 'setLoginName',
            'status' => 'setStatus',
            'clientApp' => 'setClientApp',
            'sql' => 'setSql',
            'dbId' => 'setDbId',
            'dbName' => 'setDbName',
            'subDetailList' => 'setSubDetailList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deadLockId  死锁ID
    * lastTranStarted  事务开启时间
    * spid  服务进程ID
    * isVictim  该会话是否已被终止
    * logUsed  任务使用的日志空间
    * lockMode  锁模式（S,X,U）
    * waitResourceDesc  等待中的资源详情
    * objectOwned  被锁住的对象
    * objectRequested  请求加锁的对象
    * waitResource  等待资源名称
    * hostName  主机名称
    * loginName  状态
    * status  等待中的资源详情
    * clientApp  客户端
    * sql  SQL
    * dbId  数据库ID
    * dbName  数据库名称
    * subDetailList  死锁子明细列表
    *
    * @var string[]
    */
    protected static $getters = [
            'deadLockId' => 'getDeadLockId',
            'lastTranStarted' => 'getLastTranStarted',
            'spid' => 'getSpid',
            'isVictim' => 'getIsVictim',
            'logUsed' => 'getLogUsed',
            'lockMode' => 'getLockMode',
            'waitResourceDesc' => 'getWaitResourceDesc',
            'objectOwned' => 'getObjectOwned',
            'objectRequested' => 'getObjectRequested',
            'waitResource' => 'getWaitResource',
            'hostName' => 'getHostName',
            'loginName' => 'getLoginName',
            'status' => 'getStatus',
            'clientApp' => 'getClientApp',
            'sql' => 'getSql',
            'dbId' => 'getDbId',
            'dbName' => 'getDbName',
            'subDetailList' => 'getSubDetailList'
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
        $this->container['deadLockId'] = isset($data['deadLockId']) ? $data['deadLockId'] : null;
        $this->container['lastTranStarted'] = isset($data['lastTranStarted']) ? $data['lastTranStarted'] : null;
        $this->container['spid'] = isset($data['spid']) ? $data['spid'] : null;
        $this->container['isVictim'] = isset($data['isVictim']) ? $data['isVictim'] : null;
        $this->container['logUsed'] = isset($data['logUsed']) ? $data['logUsed'] : null;
        $this->container['lockMode'] = isset($data['lockMode']) ? $data['lockMode'] : null;
        $this->container['waitResourceDesc'] = isset($data['waitResourceDesc']) ? $data['waitResourceDesc'] : null;
        $this->container['objectOwned'] = isset($data['objectOwned']) ? $data['objectOwned'] : null;
        $this->container['objectRequested'] = isset($data['objectRequested']) ? $data['objectRequested'] : null;
        $this->container['waitResource'] = isset($data['waitResource']) ? $data['waitResource'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['loginName'] = isset($data['loginName']) ? $data['loginName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['clientApp'] = isset($data['clientApp']) ? $data['clientApp'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['subDetailList'] = isset($data['subDetailList']) ? $data['subDetailList'] : null;
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
    * Gets deadLockId
    *  死锁ID
    *
    * @return string|null
    */
    public function getDeadLockId()
    {
        return $this->container['deadLockId'];
    }

    /**
    * Sets deadLockId
    *
    * @param string|null $deadLockId 死锁ID
    *
    * @return $this
    */
    public function setDeadLockId($deadLockId)
    {
        $this->container['deadLockId'] = $deadLockId;
        return $this;
    }

    /**
    * Gets lastTranStarted
    *  事务开启时间
    *
    * @return string|null
    */
    public function getLastTranStarted()
    {
        return $this->container['lastTranStarted'];
    }

    /**
    * Sets lastTranStarted
    *
    * @param string|null $lastTranStarted 事务开启时间
    *
    * @return $this
    */
    public function setLastTranStarted($lastTranStarted)
    {
        $this->container['lastTranStarted'] = $lastTranStarted;
        return $this;
    }

    /**
    * Gets spid
    *  服务进程ID
    *
    * @return string|null
    */
    public function getSpid()
    {
        return $this->container['spid'];
    }

    /**
    * Sets spid
    *
    * @param string|null $spid 服务进程ID
    *
    * @return $this
    */
    public function setSpid($spid)
    {
        $this->container['spid'] = $spid;
        return $this;
    }

    /**
    * Gets isVictim
    *  该会话是否已被终止
    *
    * @return bool|null
    */
    public function getIsVictim()
    {
        return $this->container['isVictim'];
    }

    /**
    * Sets isVictim
    *
    * @param bool|null $isVictim 该会话是否已被终止
    *
    * @return $this
    */
    public function setIsVictim($isVictim)
    {
        $this->container['isVictim'] = $isVictim;
        return $this;
    }

    /**
    * Gets logUsed
    *  任务使用的日志空间
    *
    * @return int|null
    */
    public function getLogUsed()
    {
        return $this->container['logUsed'];
    }

    /**
    * Sets logUsed
    *
    * @param int|null $logUsed 任务使用的日志空间
    *
    * @return $this
    */
    public function setLogUsed($logUsed)
    {
        $this->container['logUsed'] = $logUsed;
        return $this;
    }

    /**
    * Gets lockMode
    *  锁模式（S,X,U）
    *
    * @return string|null
    */
    public function getLockMode()
    {
        return $this->container['lockMode'];
    }

    /**
    * Sets lockMode
    *
    * @param string|null $lockMode 锁模式（S,X,U）
    *
    * @return $this
    */
    public function setLockMode($lockMode)
    {
        $this->container['lockMode'] = $lockMode;
        return $this;
    }

    /**
    * Gets waitResourceDesc
    *  等待中的资源详情
    *
    * @return string|null
    */
    public function getWaitResourceDesc()
    {
        return $this->container['waitResourceDesc'];
    }

    /**
    * Sets waitResourceDesc
    *
    * @param string|null $waitResourceDesc 等待中的资源详情
    *
    * @return $this
    */
    public function setWaitResourceDesc($waitResourceDesc)
    {
        $this->container['waitResourceDesc'] = $waitResourceDesc;
        return $this;
    }

    /**
    * Gets objectOwned
    *  被锁住的对象
    *
    * @return string|null
    */
    public function getObjectOwned()
    {
        return $this->container['objectOwned'];
    }

    /**
    * Sets objectOwned
    *
    * @param string|null $objectOwned 被锁住的对象
    *
    * @return $this
    */
    public function setObjectOwned($objectOwned)
    {
        $this->container['objectOwned'] = $objectOwned;
        return $this;
    }

    /**
    * Gets objectRequested
    *  请求加锁的对象
    *
    * @return string|null
    */
    public function getObjectRequested()
    {
        return $this->container['objectRequested'];
    }

    /**
    * Sets objectRequested
    *
    * @param string|null $objectRequested 请求加锁的对象
    *
    * @return $this
    */
    public function setObjectRequested($objectRequested)
    {
        $this->container['objectRequested'] = $objectRequested;
        return $this;
    }

    /**
    * Gets waitResource
    *  等待资源名称
    *
    * @return string|null
    */
    public function getWaitResource()
    {
        return $this->container['waitResource'];
    }

    /**
    * Sets waitResource
    *
    * @param string|null $waitResource 等待资源名称
    *
    * @return $this
    */
    public function setWaitResource($waitResource)
    {
        $this->container['waitResource'] = $waitResource;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
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
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets loginName
    *  状态
    *
    * @return string|null
    */
    public function getLoginName()
    {
        return $this->container['loginName'];
    }

    /**
    * Sets loginName
    *
    * @param string|null $loginName 状态
    *
    * @return $this
    */
    public function setLoginName($loginName)
    {
        $this->container['loginName'] = $loginName;
        return $this;
    }

    /**
    * Gets status
    *  等待中的资源详情
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 等待中的资源详情
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets clientApp
    *  客户端
    *
    * @return string|null
    */
    public function getClientApp()
    {
        return $this->container['clientApp'];
    }

    /**
    * Sets clientApp
    *
    * @param string|null $clientApp 客户端
    *
    * @return $this
    */
    public function setClientApp($clientApp)
    {
        $this->container['clientApp'] = $clientApp;
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
    * Gets dbId
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string|null $dbId 数据库ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
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
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets subDetailList
    *  死锁子明细列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\DeadLockSubDetail[]|null
    */
    public function getSubDetailList()
    {
        return $this->container['subDetailList'];
    }

    /**
    * Sets subDetailList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\DeadLockSubDetail[]|null $subDetailList 死锁子明细列表
    *
    * @return $this
    */
    public function setSubDetailList($subDetailList)
    {
        $this->container['subDetailList'] = $subDetailList;
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

