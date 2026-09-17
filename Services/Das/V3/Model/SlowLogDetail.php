<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowLogDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowLogDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * occurrenceTime  执行时间(sqlserver、mongodb：结束时间；其他引擎：开始时间)（Unix timestamp），单位：毫秒
    * sqlTemplateId  SQL模板ID
    * originalSql  原始SQL语句
    * dbName  数据库名
    * client  客户端
    * user  用户
    * executeTime  执行耗时（秒）
    * lockWaitTime  锁等待耗时（秒）
    * rowsExamined  扫描行数
    * rowsSent  返回行数
    * tunable  是否可诊断优化
    * endTime  sqlserver：执行完成时间（Unix timestamp），单位：毫秒
    * appName  sqlserver：应用名
    * rowsAffected  sqlserver：影响行数
    * cpuTime  sqlserver：CPU耗时（ms）
    * logicalReads  sqlserver：IO逻辑读
    * physicalReads  sqlserver：IO物理读
    * writes  sqlserver：IO写
    * sqlType  SQL操作类型
    * collection  mongodb：数据库表
    * keyExamined  mongodb：扫描索引数
    * nodeId  节点ID
    * nodeName  节点名称
    * killed  执行状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'occurrenceTime' => 'int',
            'sqlTemplateId' => 'string',
            'originalSql' => 'string',
            'dbName' => 'string',
            'client' => 'string',
            'user' => 'string',
            'executeTime' => 'double',
            'lockWaitTime' => 'double',
            'rowsExamined' => 'int',
            'rowsSent' => 'int',
            'tunable' => 'bool',
            'endTime' => 'int',
            'appName' => 'string',
            'rowsAffected' => 'int',
            'cpuTime' => 'double',
            'logicalReads' => 'int',
            'physicalReads' => 'int',
            'writes' => 'int',
            'sqlType' => 'string',
            'collection' => 'string',
            'keyExamined' => 'int',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'killed' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * occurrenceTime  执行时间(sqlserver、mongodb：结束时间；其他引擎：开始时间)（Unix timestamp），单位：毫秒
    * sqlTemplateId  SQL模板ID
    * originalSql  原始SQL语句
    * dbName  数据库名
    * client  客户端
    * user  用户
    * executeTime  执行耗时（秒）
    * lockWaitTime  锁等待耗时（秒）
    * rowsExamined  扫描行数
    * rowsSent  返回行数
    * tunable  是否可诊断优化
    * endTime  sqlserver：执行完成时间（Unix timestamp），单位：毫秒
    * appName  sqlserver：应用名
    * rowsAffected  sqlserver：影响行数
    * cpuTime  sqlserver：CPU耗时（ms）
    * logicalReads  sqlserver：IO逻辑读
    * physicalReads  sqlserver：IO物理读
    * writes  sqlserver：IO写
    * sqlType  SQL操作类型
    * collection  mongodb：数据库表
    * keyExamined  mongodb：扫描索引数
    * nodeId  节点ID
    * nodeName  节点名称
    * killed  执行状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'occurrenceTime' => 'int64',
        'sqlTemplateId' => null,
        'originalSql' => null,
        'dbName' => null,
        'client' => null,
        'user' => null,
        'executeTime' => 'double',
        'lockWaitTime' => 'double',
        'rowsExamined' => 'int64',
        'rowsSent' => 'int64',
        'tunable' => null,
        'endTime' => 'int64',
        'appName' => null,
        'rowsAffected' => 'int64',
        'cpuTime' => 'double',
        'logicalReads' => 'int64',
        'physicalReads' => 'int64',
        'writes' => 'int64',
        'sqlType' => null,
        'collection' => null,
        'keyExamined' => 'int64',
        'nodeId' => null,
        'nodeName' => null,
        'killed' => null
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
    * occurrenceTime  执行时间(sqlserver、mongodb：结束时间；其他引擎：开始时间)（Unix timestamp），单位：毫秒
    * sqlTemplateId  SQL模板ID
    * originalSql  原始SQL语句
    * dbName  数据库名
    * client  客户端
    * user  用户
    * executeTime  执行耗时（秒）
    * lockWaitTime  锁等待耗时（秒）
    * rowsExamined  扫描行数
    * rowsSent  返回行数
    * tunable  是否可诊断优化
    * endTime  sqlserver：执行完成时间（Unix timestamp），单位：毫秒
    * appName  sqlserver：应用名
    * rowsAffected  sqlserver：影响行数
    * cpuTime  sqlserver：CPU耗时（ms）
    * logicalReads  sqlserver：IO逻辑读
    * physicalReads  sqlserver：IO物理读
    * writes  sqlserver：IO写
    * sqlType  SQL操作类型
    * collection  mongodb：数据库表
    * keyExamined  mongodb：扫描索引数
    * nodeId  节点ID
    * nodeName  节点名称
    * killed  执行状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'occurrenceTime' => 'occurrence_time',
            'sqlTemplateId' => 'sql_template_id',
            'originalSql' => 'original_sql',
            'dbName' => 'db_name',
            'client' => 'client',
            'user' => 'user',
            'executeTime' => 'execute_time',
            'lockWaitTime' => 'lock_wait_time',
            'rowsExamined' => 'rows_examined',
            'rowsSent' => 'rows_sent',
            'tunable' => 'tunable',
            'endTime' => 'end_time',
            'appName' => 'app_name',
            'rowsAffected' => 'rows_affected',
            'cpuTime' => 'cpu_time',
            'logicalReads' => 'logical_reads',
            'physicalReads' => 'physical_reads',
            'writes' => 'writes',
            'sqlType' => 'sql_type',
            'collection' => 'collection',
            'keyExamined' => 'key_examined',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'killed' => 'killed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * occurrenceTime  执行时间(sqlserver、mongodb：结束时间；其他引擎：开始时间)（Unix timestamp），单位：毫秒
    * sqlTemplateId  SQL模板ID
    * originalSql  原始SQL语句
    * dbName  数据库名
    * client  客户端
    * user  用户
    * executeTime  执行耗时（秒）
    * lockWaitTime  锁等待耗时（秒）
    * rowsExamined  扫描行数
    * rowsSent  返回行数
    * tunable  是否可诊断优化
    * endTime  sqlserver：执行完成时间（Unix timestamp），单位：毫秒
    * appName  sqlserver：应用名
    * rowsAffected  sqlserver：影响行数
    * cpuTime  sqlserver：CPU耗时（ms）
    * logicalReads  sqlserver：IO逻辑读
    * physicalReads  sqlserver：IO物理读
    * writes  sqlserver：IO写
    * sqlType  SQL操作类型
    * collection  mongodb：数据库表
    * keyExamined  mongodb：扫描索引数
    * nodeId  节点ID
    * nodeName  节点名称
    * killed  执行状态
    *
    * @var string[]
    */
    protected static $setters = [
            'occurrenceTime' => 'setOccurrenceTime',
            'sqlTemplateId' => 'setSqlTemplateId',
            'originalSql' => 'setOriginalSql',
            'dbName' => 'setDbName',
            'client' => 'setClient',
            'user' => 'setUser',
            'executeTime' => 'setExecuteTime',
            'lockWaitTime' => 'setLockWaitTime',
            'rowsExamined' => 'setRowsExamined',
            'rowsSent' => 'setRowsSent',
            'tunable' => 'setTunable',
            'endTime' => 'setEndTime',
            'appName' => 'setAppName',
            'rowsAffected' => 'setRowsAffected',
            'cpuTime' => 'setCpuTime',
            'logicalReads' => 'setLogicalReads',
            'physicalReads' => 'setPhysicalReads',
            'writes' => 'setWrites',
            'sqlType' => 'setSqlType',
            'collection' => 'setCollection',
            'keyExamined' => 'setKeyExamined',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'killed' => 'setKilled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * occurrenceTime  执行时间(sqlserver、mongodb：结束时间；其他引擎：开始时间)（Unix timestamp），单位：毫秒
    * sqlTemplateId  SQL模板ID
    * originalSql  原始SQL语句
    * dbName  数据库名
    * client  客户端
    * user  用户
    * executeTime  执行耗时（秒）
    * lockWaitTime  锁等待耗时（秒）
    * rowsExamined  扫描行数
    * rowsSent  返回行数
    * tunable  是否可诊断优化
    * endTime  sqlserver：执行完成时间（Unix timestamp），单位：毫秒
    * appName  sqlserver：应用名
    * rowsAffected  sqlserver：影响行数
    * cpuTime  sqlserver：CPU耗时（ms）
    * logicalReads  sqlserver：IO逻辑读
    * physicalReads  sqlserver：IO物理读
    * writes  sqlserver：IO写
    * sqlType  SQL操作类型
    * collection  mongodb：数据库表
    * keyExamined  mongodb：扫描索引数
    * nodeId  节点ID
    * nodeName  节点名称
    * killed  执行状态
    *
    * @var string[]
    */
    protected static $getters = [
            'occurrenceTime' => 'getOccurrenceTime',
            'sqlTemplateId' => 'getSqlTemplateId',
            'originalSql' => 'getOriginalSql',
            'dbName' => 'getDbName',
            'client' => 'getClient',
            'user' => 'getUser',
            'executeTime' => 'getExecuteTime',
            'lockWaitTime' => 'getLockWaitTime',
            'rowsExamined' => 'getRowsExamined',
            'rowsSent' => 'getRowsSent',
            'tunable' => 'getTunable',
            'endTime' => 'getEndTime',
            'appName' => 'getAppName',
            'rowsAffected' => 'getRowsAffected',
            'cpuTime' => 'getCpuTime',
            'logicalReads' => 'getLogicalReads',
            'physicalReads' => 'getPhysicalReads',
            'writes' => 'getWrites',
            'sqlType' => 'getSqlType',
            'collection' => 'getCollection',
            'keyExamined' => 'getKeyExamined',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'killed' => 'getKilled'
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
        $this->container['occurrenceTime'] = isset($data['occurrenceTime']) ? $data['occurrenceTime'] : null;
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['originalSql'] = isset($data['originalSql']) ? $data['originalSql'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['client'] = isset($data['client']) ? $data['client'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
        $this->container['lockWaitTime'] = isset($data['lockWaitTime']) ? $data['lockWaitTime'] : null;
        $this->container['rowsExamined'] = isset($data['rowsExamined']) ? $data['rowsExamined'] : null;
        $this->container['rowsSent'] = isset($data['rowsSent']) ? $data['rowsSent'] : null;
        $this->container['tunable'] = isset($data['tunable']) ? $data['tunable'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['rowsAffected'] = isset($data['rowsAffected']) ? $data['rowsAffected'] : null;
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['logicalReads'] = isset($data['logicalReads']) ? $data['logicalReads'] : null;
        $this->container['physicalReads'] = isset($data['physicalReads']) ? $data['physicalReads'] : null;
        $this->container['writes'] = isset($data['writes']) ? $data['writes'] : null;
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['collection'] = isset($data['collection']) ? $data['collection'] : null;
        $this->container['keyExamined'] = isset($data['keyExamined']) ? $data['keyExamined'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['killed'] = isset($data['killed']) ? $data['killed'] : null;
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
    * Gets occurrenceTime
    *  执行时间(sqlserver、mongodb：结束时间；其他引擎：开始时间)（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getOccurrenceTime()
    {
        return $this->container['occurrenceTime'];
    }

    /**
    * Sets occurrenceTime
    *
    * @param int|null $occurrenceTime 执行时间(sqlserver、mongodb：结束时间；其他引擎：开始时间)（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setOccurrenceTime($occurrenceTime)
    {
        $this->container['occurrenceTime'] = $occurrenceTime;
        return $this;
    }

    /**
    * Gets sqlTemplateId
    *  SQL模板ID
    *
    * @return string|null
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string|null $sqlTemplateId SQL模板ID
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets originalSql
    *  原始SQL语句
    *
    * @return string|null
    */
    public function getOriginalSql()
    {
        return $this->container['originalSql'];
    }

    /**
    * Sets originalSql
    *
    * @param string|null $originalSql 原始SQL语句
    *
    * @return $this
    */
    public function setOriginalSql($originalSql)
    {
        $this->container['originalSql'] = $originalSql;
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
    * Gets client
    *  客户端
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
    * @param string|null $client 客户端
    *
    * @return $this
    */
    public function setClient($client)
    {
        $this->container['client'] = $client;
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
    * Gets executeTime
    *  执行耗时（秒）
    *
    * @return double|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param double|null $executeTime 执行耗时（秒）
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
        return $this;
    }

    /**
    * Gets lockWaitTime
    *  锁等待耗时（秒）
    *
    * @return double|null
    */
    public function getLockWaitTime()
    {
        return $this->container['lockWaitTime'];
    }

    /**
    * Sets lockWaitTime
    *
    * @param double|null $lockWaitTime 锁等待耗时（秒）
    *
    * @return $this
    */
    public function setLockWaitTime($lockWaitTime)
    {
        $this->container['lockWaitTime'] = $lockWaitTime;
        return $this;
    }

    /**
    * Gets rowsExamined
    *  扫描行数
    *
    * @return int|null
    */
    public function getRowsExamined()
    {
        return $this->container['rowsExamined'];
    }

    /**
    * Sets rowsExamined
    *
    * @param int|null $rowsExamined 扫描行数
    *
    * @return $this
    */
    public function setRowsExamined($rowsExamined)
    {
        $this->container['rowsExamined'] = $rowsExamined;
        return $this;
    }

    /**
    * Gets rowsSent
    *  返回行数
    *
    * @return int|null
    */
    public function getRowsSent()
    {
        return $this->container['rowsSent'];
    }

    /**
    * Sets rowsSent
    *
    * @param int|null $rowsSent 返回行数
    *
    * @return $this
    */
    public function setRowsSent($rowsSent)
    {
        $this->container['rowsSent'] = $rowsSent;
        return $this;
    }

    /**
    * Gets tunable
    *  是否可诊断优化
    *
    * @return bool|null
    */
    public function getTunable()
    {
        return $this->container['tunable'];
    }

    /**
    * Sets tunable
    *
    * @param bool|null $tunable 是否可诊断优化
    *
    * @return $this
    */
    public function setTunable($tunable)
    {
        $this->container['tunable'] = $tunable;
        return $this;
    }

    /**
    * Gets endTime
    *  sqlserver：执行完成时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime sqlserver：执行完成时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets appName
    *  sqlserver：应用名
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName sqlserver：应用名
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets rowsAffected
    *  sqlserver：影响行数
    *
    * @return int|null
    */
    public function getRowsAffected()
    {
        return $this->container['rowsAffected'];
    }

    /**
    * Sets rowsAffected
    *
    * @param int|null $rowsAffected sqlserver：影响行数
    *
    * @return $this
    */
    public function setRowsAffected($rowsAffected)
    {
        $this->container['rowsAffected'] = $rowsAffected;
        return $this;
    }

    /**
    * Gets cpuTime
    *  sqlserver：CPU耗时（ms）
    *
    * @return double|null
    */
    public function getCpuTime()
    {
        return $this->container['cpuTime'];
    }

    /**
    * Sets cpuTime
    *
    * @param double|null $cpuTime sqlserver：CPU耗时（ms）
    *
    * @return $this
    */
    public function setCpuTime($cpuTime)
    {
        $this->container['cpuTime'] = $cpuTime;
        return $this;
    }

    /**
    * Gets logicalReads
    *  sqlserver：IO逻辑读
    *
    * @return int|null
    */
    public function getLogicalReads()
    {
        return $this->container['logicalReads'];
    }

    /**
    * Sets logicalReads
    *
    * @param int|null $logicalReads sqlserver：IO逻辑读
    *
    * @return $this
    */
    public function setLogicalReads($logicalReads)
    {
        $this->container['logicalReads'] = $logicalReads;
        return $this;
    }

    /**
    * Gets physicalReads
    *  sqlserver：IO物理读
    *
    * @return int|null
    */
    public function getPhysicalReads()
    {
        return $this->container['physicalReads'];
    }

    /**
    * Sets physicalReads
    *
    * @param int|null $physicalReads sqlserver：IO物理读
    *
    * @return $this
    */
    public function setPhysicalReads($physicalReads)
    {
        $this->container['physicalReads'] = $physicalReads;
        return $this;
    }

    /**
    * Gets writes
    *  sqlserver：IO写
    *
    * @return int|null
    */
    public function getWrites()
    {
        return $this->container['writes'];
    }

    /**
    * Sets writes
    *
    * @param int|null $writes sqlserver：IO写
    *
    * @return $this
    */
    public function setWrites($writes)
    {
        $this->container['writes'] = $writes;
        return $this;
    }

    /**
    * Gets sqlType
    *  SQL操作类型
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
    * @param string|null $sqlType SQL操作类型
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets collection
    *  mongodb：数据库表
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
    * @param string|null $collection mongodb：数据库表
    *
    * @return $this
    */
    public function setCollection($collection)
    {
        $this->container['collection'] = $collection;
        return $this;
    }

    /**
    * Gets keyExamined
    *  mongodb：扫描索引数
    *
    * @return int|null
    */
    public function getKeyExamined()
    {
        return $this->container['keyExamined'];
    }

    /**
    * Sets keyExamined
    *
    * @param int|null $keyExamined mongodb：扫描索引数
    *
    * @return $this
    */
    public function setKeyExamined($keyExamined)
    {
        $this->container['keyExamined'] = $keyExamined;
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
    * Gets nodeName
    *  节点名称
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
    * @param string|null $nodeName 节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets killed
    *  执行状态
    *
    * @return string|null
    */
    public function getKilled()
    {
        return $this->container['killed'];
    }

    /**
    * Sets killed
    *
    * @param string|null $killed 执行状态
    *
    * @return $this
    */
    public function setKilled($killed)
    {
        $this->container['killed'] = $killed;
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

