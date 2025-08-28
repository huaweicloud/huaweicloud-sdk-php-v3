<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowSqlStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowSqlStatistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(s)。
    * maxExecuteTime  最大执行耗时(s)。
    * avgLockWaitTime  平均锁等待时间(s)。
    * maxLockWaitTime  最大锁等待时间(s)。
    * avgRowsSent  平均返回文档数。
    * maxRowsSent  最大返回文档数。
    * avgRowsExamined  平均扫描文档数。
    * maxRowsExamined  最大扫描文档数。
    * avgKeyExamined  平均扫描索引数。
    * maxKeyExamined  最大扫描索引数。
    * nodeId  节点ID，按node_id统计时赋值。
    * nodeName  节点名称，按node_id统计时赋值。
    * sqlType  语句类型，按sql_type统计时赋值。
    * dbName  库名，按db_name、collection统计时赋值。
    * collection  数据库表，按collection统计时赋值。
    * user  用户名，按user统计时赋值。
    * client  客户端，按client统计时赋值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executeCount' => 'int',
            'avgExecuteTime' => 'double',
            'maxExecuteTime' => 'double',
            'avgLockWaitTime' => 'double',
            'maxLockWaitTime' => 'double',
            'avgRowsSent' => 'double',
            'maxRowsSent' => 'double',
            'avgRowsExamined' => 'double',
            'maxRowsExamined' => 'double',
            'avgKeyExamined' => 'double',
            'maxKeyExamined' => 'double',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'sqlType' => 'string',
            'dbName' => 'string',
            'collection' => 'string',
            'user' => 'string',
            'client' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(s)。
    * maxExecuteTime  最大执行耗时(s)。
    * avgLockWaitTime  平均锁等待时间(s)。
    * maxLockWaitTime  最大锁等待时间(s)。
    * avgRowsSent  平均返回文档数。
    * maxRowsSent  最大返回文档数。
    * avgRowsExamined  平均扫描文档数。
    * maxRowsExamined  最大扫描文档数。
    * avgKeyExamined  平均扫描索引数。
    * maxKeyExamined  最大扫描索引数。
    * nodeId  节点ID，按node_id统计时赋值。
    * nodeName  节点名称，按node_id统计时赋值。
    * sqlType  语句类型，按sql_type统计时赋值。
    * dbName  库名，按db_name、collection统计时赋值。
    * collection  数据库表，按collection统计时赋值。
    * user  用户名，按user统计时赋值。
    * client  客户端，按client统计时赋值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executeCount' => 'int64',
        'avgExecuteTime' => 'double',
        'maxExecuteTime' => 'double',
        'avgLockWaitTime' => 'double',
        'maxLockWaitTime' => 'double',
        'avgRowsSent' => 'double',
        'maxRowsSent' => 'double',
        'avgRowsExamined' => 'double',
        'maxRowsExamined' => 'double',
        'avgKeyExamined' => 'double',
        'maxKeyExamined' => 'double',
        'nodeId' => null,
        'nodeName' => null,
        'sqlType' => null,
        'dbName' => null,
        'collection' => null,
        'user' => null,
        'client' => null
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
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(s)。
    * maxExecuteTime  最大执行耗时(s)。
    * avgLockWaitTime  平均锁等待时间(s)。
    * maxLockWaitTime  最大锁等待时间(s)。
    * avgRowsSent  平均返回文档数。
    * maxRowsSent  最大返回文档数。
    * avgRowsExamined  平均扫描文档数。
    * maxRowsExamined  最大扫描文档数。
    * avgKeyExamined  平均扫描索引数。
    * maxKeyExamined  最大扫描索引数。
    * nodeId  节点ID，按node_id统计时赋值。
    * nodeName  节点名称，按node_id统计时赋值。
    * sqlType  语句类型，按sql_type统计时赋值。
    * dbName  库名，按db_name、collection统计时赋值。
    * collection  数据库表，按collection统计时赋值。
    * user  用户名，按user统计时赋值。
    * client  客户端，按client统计时赋值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executeCount' => 'execute_count',
            'avgExecuteTime' => 'avg_execute_time',
            'maxExecuteTime' => 'max_execute_time',
            'avgLockWaitTime' => 'avg_lock_wait_time',
            'maxLockWaitTime' => 'max_lock_wait_time',
            'avgRowsSent' => 'avg_rows_sent',
            'maxRowsSent' => 'max_rows_sent',
            'avgRowsExamined' => 'avg_rows_examined',
            'maxRowsExamined' => 'max_rows_examined',
            'avgKeyExamined' => 'avg_key_examined',
            'maxKeyExamined' => 'max_key_examined',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'sqlType' => 'sql_type',
            'dbName' => 'db_name',
            'collection' => 'collection',
            'user' => 'user',
            'client' => 'client'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(s)。
    * maxExecuteTime  最大执行耗时(s)。
    * avgLockWaitTime  平均锁等待时间(s)。
    * maxLockWaitTime  最大锁等待时间(s)。
    * avgRowsSent  平均返回文档数。
    * maxRowsSent  最大返回文档数。
    * avgRowsExamined  平均扫描文档数。
    * maxRowsExamined  最大扫描文档数。
    * avgKeyExamined  平均扫描索引数。
    * maxKeyExamined  最大扫描索引数。
    * nodeId  节点ID，按node_id统计时赋值。
    * nodeName  节点名称，按node_id统计时赋值。
    * sqlType  语句类型，按sql_type统计时赋值。
    * dbName  库名，按db_name、collection统计时赋值。
    * collection  数据库表，按collection统计时赋值。
    * user  用户名，按user统计时赋值。
    * client  客户端，按client统计时赋值。
    *
    * @var string[]
    */
    protected static $setters = [
            'executeCount' => 'setExecuteCount',
            'avgExecuteTime' => 'setAvgExecuteTime',
            'maxExecuteTime' => 'setMaxExecuteTime',
            'avgLockWaitTime' => 'setAvgLockWaitTime',
            'maxLockWaitTime' => 'setMaxLockWaitTime',
            'avgRowsSent' => 'setAvgRowsSent',
            'maxRowsSent' => 'setMaxRowsSent',
            'avgRowsExamined' => 'setAvgRowsExamined',
            'maxRowsExamined' => 'setMaxRowsExamined',
            'avgKeyExamined' => 'setAvgKeyExamined',
            'maxKeyExamined' => 'setMaxKeyExamined',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'sqlType' => 'setSqlType',
            'dbName' => 'setDbName',
            'collection' => 'setCollection',
            'user' => 'setUser',
            'client' => 'setClient'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executeCount  执行次数。
    * avgExecuteTime  平均执行耗时(s)。
    * maxExecuteTime  最大执行耗时(s)。
    * avgLockWaitTime  平均锁等待时间(s)。
    * maxLockWaitTime  最大锁等待时间(s)。
    * avgRowsSent  平均返回文档数。
    * maxRowsSent  最大返回文档数。
    * avgRowsExamined  平均扫描文档数。
    * maxRowsExamined  最大扫描文档数。
    * avgKeyExamined  平均扫描索引数。
    * maxKeyExamined  最大扫描索引数。
    * nodeId  节点ID，按node_id统计时赋值。
    * nodeName  节点名称，按node_id统计时赋值。
    * sqlType  语句类型，按sql_type统计时赋值。
    * dbName  库名，按db_name、collection统计时赋值。
    * collection  数据库表，按collection统计时赋值。
    * user  用户名，按user统计时赋值。
    * client  客户端，按client统计时赋值。
    *
    * @var string[]
    */
    protected static $getters = [
            'executeCount' => 'getExecuteCount',
            'avgExecuteTime' => 'getAvgExecuteTime',
            'maxExecuteTime' => 'getMaxExecuteTime',
            'avgLockWaitTime' => 'getAvgLockWaitTime',
            'maxLockWaitTime' => 'getMaxLockWaitTime',
            'avgRowsSent' => 'getAvgRowsSent',
            'maxRowsSent' => 'getMaxRowsSent',
            'avgRowsExamined' => 'getAvgRowsExamined',
            'maxRowsExamined' => 'getMaxRowsExamined',
            'avgKeyExamined' => 'getAvgKeyExamined',
            'maxKeyExamined' => 'getMaxKeyExamined',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'sqlType' => 'getSqlType',
            'dbName' => 'getDbName',
            'collection' => 'getCollection',
            'user' => 'getUser',
            'client' => 'getClient'
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
        $this->container['executeCount'] = isset($data['executeCount']) ? $data['executeCount'] : null;
        $this->container['avgExecuteTime'] = isset($data['avgExecuteTime']) ? $data['avgExecuteTime'] : null;
        $this->container['maxExecuteTime'] = isset($data['maxExecuteTime']) ? $data['maxExecuteTime'] : null;
        $this->container['avgLockWaitTime'] = isset($data['avgLockWaitTime']) ? $data['avgLockWaitTime'] : null;
        $this->container['maxLockWaitTime'] = isset($data['maxLockWaitTime']) ? $data['maxLockWaitTime'] : null;
        $this->container['avgRowsSent'] = isset($data['avgRowsSent']) ? $data['avgRowsSent'] : null;
        $this->container['maxRowsSent'] = isset($data['maxRowsSent']) ? $data['maxRowsSent'] : null;
        $this->container['avgRowsExamined'] = isset($data['avgRowsExamined']) ? $data['avgRowsExamined'] : null;
        $this->container['maxRowsExamined'] = isset($data['maxRowsExamined']) ? $data['maxRowsExamined'] : null;
        $this->container['avgKeyExamined'] = isset($data['avgKeyExamined']) ? $data['avgKeyExamined'] : null;
        $this->container['maxKeyExamined'] = isset($data['maxKeyExamined']) ? $data['maxKeyExamined'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['collection'] = isset($data['collection']) ? $data['collection'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['executeCount'] === null) {
            $invalidProperties[] = "'executeCount' can't be null";
        }
        if ($this->container['avgExecuteTime'] === null) {
            $invalidProperties[] = "'avgExecuteTime' can't be null";
        }
        if ($this->container['maxExecuteTime'] === null) {
            $invalidProperties[] = "'maxExecuteTime' can't be null";
        }
        if ($this->container['avgLockWaitTime'] === null) {
            $invalidProperties[] = "'avgLockWaitTime' can't be null";
        }
        if ($this->container['maxLockWaitTime'] === null) {
            $invalidProperties[] = "'maxLockWaitTime' can't be null";
        }
        if ($this->container['avgRowsSent'] === null) {
            $invalidProperties[] = "'avgRowsSent' can't be null";
        }
        if ($this->container['maxRowsSent'] === null) {
            $invalidProperties[] = "'maxRowsSent' can't be null";
        }
        if ($this->container['avgRowsExamined'] === null) {
            $invalidProperties[] = "'avgRowsExamined' can't be null";
        }
        if ($this->container['maxRowsExamined'] === null) {
            $invalidProperties[] = "'maxRowsExamined' can't be null";
        }
        if ($this->container['avgKeyExamined'] === null) {
            $invalidProperties[] = "'avgKeyExamined' can't be null";
        }
        if ($this->container['maxKeyExamined'] === null) {
            $invalidProperties[] = "'maxKeyExamined' can't be null";
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
    * Gets executeCount
    *  执行次数。
    *
    * @return int
    */
    public function getExecuteCount()
    {
        return $this->container['executeCount'];
    }

    /**
    * Sets executeCount
    *
    * @param int $executeCount 执行次数。
    *
    * @return $this
    */
    public function setExecuteCount($executeCount)
    {
        $this->container['executeCount'] = $executeCount;
        return $this;
    }

    /**
    * Gets avgExecuteTime
    *  平均执行耗时(s)。
    *
    * @return double
    */
    public function getAvgExecuteTime()
    {
        return $this->container['avgExecuteTime'];
    }

    /**
    * Sets avgExecuteTime
    *
    * @param double $avgExecuteTime 平均执行耗时(s)。
    *
    * @return $this
    */
    public function setAvgExecuteTime($avgExecuteTime)
    {
        $this->container['avgExecuteTime'] = $avgExecuteTime;
        return $this;
    }

    /**
    * Gets maxExecuteTime
    *  最大执行耗时(s)。
    *
    * @return double
    */
    public function getMaxExecuteTime()
    {
        return $this->container['maxExecuteTime'];
    }

    /**
    * Sets maxExecuteTime
    *
    * @param double $maxExecuteTime 最大执行耗时(s)。
    *
    * @return $this
    */
    public function setMaxExecuteTime($maxExecuteTime)
    {
        $this->container['maxExecuteTime'] = $maxExecuteTime;
        return $this;
    }

    /**
    * Gets avgLockWaitTime
    *  平均锁等待时间(s)。
    *
    * @return double
    */
    public function getAvgLockWaitTime()
    {
        return $this->container['avgLockWaitTime'];
    }

    /**
    * Sets avgLockWaitTime
    *
    * @param double $avgLockWaitTime 平均锁等待时间(s)。
    *
    * @return $this
    */
    public function setAvgLockWaitTime($avgLockWaitTime)
    {
        $this->container['avgLockWaitTime'] = $avgLockWaitTime;
        return $this;
    }

    /**
    * Gets maxLockWaitTime
    *  最大锁等待时间(s)。
    *
    * @return double
    */
    public function getMaxLockWaitTime()
    {
        return $this->container['maxLockWaitTime'];
    }

    /**
    * Sets maxLockWaitTime
    *
    * @param double $maxLockWaitTime 最大锁等待时间(s)。
    *
    * @return $this
    */
    public function setMaxLockWaitTime($maxLockWaitTime)
    {
        $this->container['maxLockWaitTime'] = $maxLockWaitTime;
        return $this;
    }

    /**
    * Gets avgRowsSent
    *  平均返回文档数。
    *
    * @return double
    */
    public function getAvgRowsSent()
    {
        return $this->container['avgRowsSent'];
    }

    /**
    * Sets avgRowsSent
    *
    * @param double $avgRowsSent 平均返回文档数。
    *
    * @return $this
    */
    public function setAvgRowsSent($avgRowsSent)
    {
        $this->container['avgRowsSent'] = $avgRowsSent;
        return $this;
    }

    /**
    * Gets maxRowsSent
    *  最大返回文档数。
    *
    * @return double
    */
    public function getMaxRowsSent()
    {
        return $this->container['maxRowsSent'];
    }

    /**
    * Sets maxRowsSent
    *
    * @param double $maxRowsSent 最大返回文档数。
    *
    * @return $this
    */
    public function setMaxRowsSent($maxRowsSent)
    {
        $this->container['maxRowsSent'] = $maxRowsSent;
        return $this;
    }

    /**
    * Gets avgRowsExamined
    *  平均扫描文档数。
    *
    * @return double
    */
    public function getAvgRowsExamined()
    {
        return $this->container['avgRowsExamined'];
    }

    /**
    * Sets avgRowsExamined
    *
    * @param double $avgRowsExamined 平均扫描文档数。
    *
    * @return $this
    */
    public function setAvgRowsExamined($avgRowsExamined)
    {
        $this->container['avgRowsExamined'] = $avgRowsExamined;
        return $this;
    }

    /**
    * Gets maxRowsExamined
    *  最大扫描文档数。
    *
    * @return double
    */
    public function getMaxRowsExamined()
    {
        return $this->container['maxRowsExamined'];
    }

    /**
    * Sets maxRowsExamined
    *
    * @param double $maxRowsExamined 最大扫描文档数。
    *
    * @return $this
    */
    public function setMaxRowsExamined($maxRowsExamined)
    {
        $this->container['maxRowsExamined'] = $maxRowsExamined;
        return $this;
    }

    /**
    * Gets avgKeyExamined
    *  平均扫描索引数。
    *
    * @return double
    */
    public function getAvgKeyExamined()
    {
        return $this->container['avgKeyExamined'];
    }

    /**
    * Sets avgKeyExamined
    *
    * @param double $avgKeyExamined 平均扫描索引数。
    *
    * @return $this
    */
    public function setAvgKeyExamined($avgKeyExamined)
    {
        $this->container['avgKeyExamined'] = $avgKeyExamined;
        return $this;
    }

    /**
    * Gets maxKeyExamined
    *  最大扫描索引数。
    *
    * @return double
    */
    public function getMaxKeyExamined()
    {
        return $this->container['maxKeyExamined'];
    }

    /**
    * Sets maxKeyExamined
    *
    * @param double $maxKeyExamined 最大扫描索引数。
    *
    * @return $this
    */
    public function setMaxKeyExamined($maxKeyExamined)
    {
        $this->container['maxKeyExamined'] = $maxKeyExamined;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID，按node_id统计时赋值。
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
    * @param string|null $nodeId 节点ID，按node_id统计时赋值。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称，按node_id统计时赋值。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点名称，按node_id统计时赋值。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets sqlType
    *  语句类型，按sql_type统计时赋值。
    *
    * @return string|null
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string|null $sqlType 语句类型，按sql_type统计时赋值。
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets dbName
    *  库名，按db_name、collection统计时赋值。
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
    * @param string|null $dbName 库名，按db_name、collection统计时赋值。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets collection
    *  数据库表，按collection统计时赋值。
    *
    * @return string|null
    */
    public function getCollection()
    {
        return $this->container['collection'];
    }

    /**
    * Sets collection
    *
    * @param string|null $collection 数据库表，按collection统计时赋值。
    *
    * @return $this
    */
    public function setCollection($collection)
    {
        $this->container['collection'] = $collection;
        return $this;
    }

    /**
    * Gets user
    *  用户名，按user统计时赋值。
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
    * @param string|null $user 用户名，按user统计时赋值。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets client
    *  客户端，按client统计时赋值。
    *
    * @return string|null
    */
    public function getClient()
    {
        return $this->container['client'];
    }

    /**
    * Sets client
    *
    * @param string|null $client 客户端，按client统计时赋值。
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
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

