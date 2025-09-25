<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowSqlDetailResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowSqlDetailResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: SCHEMA名称。 **取值范围**: 不涉及。
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientIp  **参数解释**: 客户端IP。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端端口。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL模版。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 开始时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * finishTime  **参数解释**: 结束时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * returnedRows  **参数解释**: 返回行。 **取值范围**: 不涉及。
    * fetchedRows  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * fetchedPages  **参数解释**: 扫描页。 **取值范围**: 不涉及。
    * hitPages  **参数解释**: 命中页。 **取值范围**: 不涉及。
    * totalTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU耗时（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 计划耗时（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO耗时（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时(单位：微秒)。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'schemaName' => 'string',
            'sql' => 'string',
            'sqlId' => 'string',
            'userName' => 'string',
            'clientIp' => 'string',
            'clientPort' => 'string',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'sqlText' => 'string',
            'queryPlan' => 'string',
            'startTime' => 'int',
            'finishTime' => 'int',
            'returnedRows' => 'int',
            'fetchedRows' => 'int',
            'fetchedPages' => 'int',
            'hitPages' => 'int',
            'totalTime' => 'int',
            'cpuTime' => 'int',
            'planTime' => 'int',
            'ioTime' => 'int',
            'lockCount' => 'int',
            'lockTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: SCHEMA名称。 **取值范围**: 不涉及。
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientIp  **参数解释**: 客户端IP。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端端口。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL模版。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 开始时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * finishTime  **参数解释**: 结束时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * returnedRows  **参数解释**: 返回行。 **取值范围**: 不涉及。
    * fetchedRows  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * fetchedPages  **参数解释**: 扫描页。 **取值范围**: 不涉及。
    * hitPages  **参数解释**: 命中页。 **取值范围**: 不涉及。
    * totalTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU耗时（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 计划耗时（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO耗时（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时(单位：微秒)。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'schemaName' => null,
        'sql' => null,
        'sqlId' => null,
        'userName' => null,
        'clientIp' => null,
        'clientPort' => null,
        'nodeId' => null,
        'nodeName' => null,
        'sqlText' => null,
        'queryPlan' => null,
        'startTime' => null,
        'finishTime' => null,
        'returnedRows' => null,
        'fetchedRows' => null,
        'fetchedPages' => null,
        'hitPages' => null,
        'totalTime' => null,
        'cpuTime' => null,
        'planTime' => null,
        'ioTime' => null,
        'lockCount' => null,
        'lockTime' => null
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
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: SCHEMA名称。 **取值范围**: 不涉及。
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientIp  **参数解释**: 客户端IP。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端端口。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL模版。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 开始时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * finishTime  **参数解释**: 结束时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * returnedRows  **参数解释**: 返回行。 **取值范围**: 不涉及。
    * fetchedRows  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * fetchedPages  **参数解释**: 扫描页。 **取值范围**: 不涉及。
    * hitPages  **参数解释**: 命中页。 **取值范围**: 不涉及。
    * totalTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU耗时（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 计划耗时（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO耗时（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时(单位：微秒)。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'sql' => 'sql',
            'sqlId' => 'sql_id',
            'userName' => 'user_name',
            'clientIp' => 'client_ip',
            'clientPort' => 'client_port',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'sqlText' => 'sql_text',
            'queryPlan' => 'query_plan',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'returnedRows' => 'returned_rows',
            'fetchedRows' => 'fetched_rows',
            'fetchedPages' => 'fetched_pages',
            'hitPages' => 'hit_pages',
            'totalTime' => 'total_time',
            'cpuTime' => 'cpu_time',
            'planTime' => 'plan_time',
            'ioTime' => 'io_time',
            'lockCount' => 'lock_count',
            'lockTime' => 'lock_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: SCHEMA名称。 **取值范围**: 不涉及。
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientIp  **参数解释**: 客户端IP。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端端口。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL模版。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 开始时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * finishTime  **参数解释**: 结束时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * returnedRows  **参数解释**: 返回行。 **取值范围**: 不涉及。
    * fetchedRows  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * fetchedPages  **参数解释**: 扫描页。 **取值范围**: 不涉及。
    * hitPages  **参数解释**: 命中页。 **取值范围**: 不涉及。
    * totalTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU耗时（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 计划耗时（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO耗时（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时(单位：微秒)。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'sql' => 'setSql',
            'sqlId' => 'setSqlId',
            'userName' => 'setUserName',
            'clientIp' => 'setClientIp',
            'clientPort' => 'setClientPort',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'sqlText' => 'setSqlText',
            'queryPlan' => 'setQueryPlan',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'returnedRows' => 'setReturnedRows',
            'fetchedRows' => 'setFetchedRows',
            'fetchedPages' => 'setFetchedPages',
            'hitPages' => 'setHitPages',
            'totalTime' => 'setTotalTime',
            'cpuTime' => 'setCpuTime',
            'planTime' => 'setPlanTime',
            'ioTime' => 'setIoTime',
            'lockCount' => 'setLockCount',
            'lockTime' => 'setLockTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: SCHEMA名称。 **取值范围**: 不涉及。
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * clientIp  **参数解释**: 客户端IP。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 客户端端口。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL模版。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 开始时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * finishTime  **参数解释**: 结束时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    * returnedRows  **参数解释**: 返回行。 **取值范围**: 不涉及。
    * fetchedRows  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    * fetchedPages  **参数解释**: 扫描页。 **取值范围**: 不涉及。
    * hitPages  **参数解释**: 命中页。 **取值范围**: 不涉及。
    * totalTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU耗时（单位：微秒）。 **取值范围**: 不涉及。
    * planTime  **参数解释**: 计划耗时（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO耗时（单位：微秒）。 **取值范围**: 不涉及。
    * lockCount  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    * lockTime  **参数解释**: 加锁耗时(单位：微秒)。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'sql' => 'getSql',
            'sqlId' => 'getSqlId',
            'userName' => 'getUserName',
            'clientIp' => 'getClientIp',
            'clientPort' => 'getClientPort',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'sqlText' => 'getSqlText',
            'queryPlan' => 'getQueryPlan',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'returnedRows' => 'getReturnedRows',
            'fetchedRows' => 'getFetchedRows',
            'fetchedPages' => 'getFetchedPages',
            'hitPages' => 'getHitPages',
            'totalTime' => 'getTotalTime',
            'cpuTime' => 'getCpuTime',
            'planTime' => 'getPlanTime',
            'ioTime' => 'getIoTime',
            'lockCount' => 'getLockCount',
            'lockTime' => 'getLockTime'
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
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['clientIp'] = isset($data['clientIp']) ? $data['clientIp'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['sqlText'] = isset($data['sqlText']) ? $data['sqlText'] : null;
        $this->container['queryPlan'] = isset($data['queryPlan']) ? $data['queryPlan'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['returnedRows'] = isset($data['returnedRows']) ? $data['returnedRows'] : null;
        $this->container['fetchedRows'] = isset($data['fetchedRows']) ? $data['fetchedRows'] : null;
        $this->container['fetchedPages'] = isset($data['fetchedPages']) ? $data['fetchedPages'] : null;
        $this->container['hitPages'] = isset($data['hitPages']) ? $data['hitPages'] : null;
        $this->container['totalTime'] = isset($data['totalTime']) ? $data['totalTime'] : null;
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['planTime'] = isset($data['planTime']) ? $data['planTime'] : null;
        $this->container['ioTime'] = isset($data['ioTime']) ? $data['ioTime'] : null;
        $this->container['lockCount'] = isset($data['lockCount']) ? $data['lockCount'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
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
    * Gets dbName
    *  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
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
    * @param string|null $dbName **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets schemaName
    *  **参数解释**: SCHEMA名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName **参数解释**: SCHEMA名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets sql
    *  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
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
    * @param string|null $sql **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets sqlId
    *  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string|null $sqlId **参数解释**: SQL ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 用户名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets clientIp
    *  **参数解释**: 客户端IP。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getClientIp()
    {
        return $this->container['clientIp'];
    }

    /**
    * Sets clientIp
    *
    * @param string|null $clientIp **参数解释**: 客户端IP。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setClientIp($clientIp)
    {
        $this->container['clientIp'] = $clientIp;
        return $this;
    }

    /**
    * Gets clientPort
    *  **参数解释**: 客户端端口。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getClientPort()
    {
        return $this->container['clientPort'];
    }

    /**
    * Sets clientPort
    *
    * @param string|null $clientPort **参数解释**: 客户端端口。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: 节点ID。 **取值范围**: 不涉及。
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
    * @param string|null $nodeId **参数解释**: 节点ID。 **取值范围**: 不涉及。
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
    *  **参数解释**: 节点名称。 **取值范围**: 不涉及。
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
    * @param string|null $nodeName **参数解释**: 节点名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets sqlText
    *  **参数解释**: SQL模版。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlText()
    {
        return $this->container['sqlText'];
    }

    /**
    * Sets sqlText
    *
    * @param string|null $sqlText **参数解释**: SQL模版。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlText($sqlText)
    {
        $this->container['sqlText'] = $sqlText;
        return $this;
    }

    /**
    * Gets queryPlan
    *  **参数解释**: 执行计划。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getQueryPlan()
    {
        return $this->container['queryPlan'];
    }

    /**
    * Sets queryPlan
    *
    * @param string|null $queryPlan **参数解释**: 执行计划。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQueryPlan($queryPlan)
    {
        $this->container['queryPlan'] = $queryPlan;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 开始时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
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
    * @param int|null $startTime **参数解释**: 开始时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets finishTime
    *  **参数解释**: 结束时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    *
    * @return int|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param int|null $finishTime **参数解释**: 结束时间UTC时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ss+0000。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets returnedRows
    *  **参数解释**: 返回行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getReturnedRows()
    {
        return $this->container['returnedRows'];
    }

    /**
    * Sets returnedRows
    *
    * @param int|null $returnedRows **参数解释**: 返回行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setReturnedRows($returnedRows)
    {
        $this->container['returnedRows'] = $returnedRows;
        return $this;
    }

    /**
    * Gets fetchedRows
    *  **参数解释**: 扫描行。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getFetchedRows()
    {
        return $this->container['fetchedRows'];
    }

    /**
    * Sets fetchedRows
    *
    * @param int|null $fetchedRows **参数解释**: 扫描行。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFetchedRows($fetchedRows)
    {
        $this->container['fetchedRows'] = $fetchedRows;
        return $this;
    }

    /**
    * Gets fetchedPages
    *  **参数解释**: 扫描页。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getFetchedPages()
    {
        return $this->container['fetchedPages'];
    }

    /**
    * Sets fetchedPages
    *
    * @param int|null $fetchedPages **参数解释**: 扫描页。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFetchedPages($fetchedPages)
    {
        $this->container['fetchedPages'] = $fetchedPages;
        return $this;
    }

    /**
    * Gets hitPages
    *  **参数解释**: 命中页。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getHitPages()
    {
        return $this->container['hitPages'];
    }

    /**
    * Sets hitPages
    *
    * @param int|null $hitPages **参数解释**: 命中页。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setHitPages($hitPages)
    {
        $this->container['hitPages'] = $hitPages;
        return $this;
    }

    /**
    * Gets totalTime
    *  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalTime()
    {
        return $this->container['totalTime'];
    }

    /**
    * Sets totalTime
    *
    * @param int|null $totalTime **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalTime($totalTime)
    {
        $this->container['totalTime'] = $totalTime;
        return $this;
    }

    /**
    * Gets cpuTime
    *  **参数解释**: CPU耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getCpuTime()
    {
        return $this->container['cpuTime'];
    }

    /**
    * Sets cpuTime
    *
    * @param int|null $cpuTime **参数解释**: CPU耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCpuTime($cpuTime)
    {
        $this->container['cpuTime'] = $cpuTime;
        return $this;
    }

    /**
    * Gets planTime
    *  **参数解释**: 计划耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getPlanTime()
    {
        return $this->container['planTime'];
    }

    /**
    * Sets planTime
    *
    * @param int|null $planTime **参数解释**: 计划耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPlanTime($planTime)
    {
        $this->container['planTime'] = $planTime;
        return $this;
    }

    /**
    * Gets ioTime
    *  **参数解释**: IO耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getIoTime()
    {
        return $this->container['ioTime'];
    }

    /**
    * Sets ioTime
    *
    * @param int|null $ioTime **参数解释**: IO耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIoTime($ioTime)
    {
        $this->container['ioTime'] = $ioTime;
        return $this;
    }

    /**
    * Gets lockCount
    *  **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getLockCount()
    {
        return $this->container['lockCount'];
    }

    /**
    * Sets lockCount
    *
    * @param int|null $lockCount **参数解释**: 加锁次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLockCount($lockCount)
    {
        $this->container['lockCount'] = $lockCount;
        return $this;
    }

    /**
    * Gets lockTime
    *  **参数解释**: 加锁耗时(单位：微秒)。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param int|null $lockTime **参数解释**: 加锁耗时(单位：微秒)。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
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

