<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeExecutionInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeExecutionInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 语句启动的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * finishTime  **参数解释**: 语句结束的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起的请求的客户端端口。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 驱动传入的trace id，与应用的一次请求相关联。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 用户session id。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 该SQL是否为slow SQL。 **取值范围**: 不涉及。
    * executionTimeDetails  executionTimeDetails
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'nodeId' => 'string',
            'transactionId' => 'string',
            'sqlId' => 'string',
            'sqlExecId' => 'string',
            'dbName' => 'string',
            'schemaName' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'allTime' => 'int',
            'userName' => 'string',
            'clientAddr' => 'string',
            'clientPort' => 'int',
            'traceId' => 'string',
            'applicationName' => 'string',
            'sessionId' => 'string',
            'isSlowSql' => 'bool',
            'executionTimeDetails' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ExecutionTimeDetailsInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 语句启动的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * finishTime  **参数解释**: 语句结束的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起的请求的客户端端口。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 驱动传入的trace id，与应用的一次请求相关联。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 用户session id。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 该SQL是否为slow SQL。 **取值范围**: 不涉及。
    * executionTimeDetails  executionTimeDetails
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'nodeId' => null,
        'transactionId' => null,
        'sqlId' => null,
        'sqlExecId' => null,
        'dbName' => null,
        'schemaName' => null,
        'startTime' => null,
        'finishTime' => null,
        'allTime' => 'int64',
        'userName' => null,
        'clientAddr' => null,
        'clientPort' => 'int32',
        'traceId' => null,
        'applicationName' => null,
        'sessionId' => null,
        'isSlowSql' => null,
        'executionTimeDetails' => null
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
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 语句启动的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * finishTime  **参数解释**: 语句结束的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起的请求的客户端端口。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 驱动传入的trace id，与应用的一次请求相关联。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 用户session id。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 该SQL是否为slow SQL。 **取值范围**: 不涉及。
    * executionTimeDetails  executionTimeDetails
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'component_id',
            'nodeId' => 'node_id',
            'transactionId' => 'transaction_id',
            'sqlId' => 'sql_id',
            'sqlExecId' => 'sql_exec_id',
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'allTime' => 'all_time',
            'userName' => 'user_name',
            'clientAddr' => 'client_addr',
            'clientPort' => 'client_port',
            'traceId' => 'trace_id',
            'applicationName' => 'application_name',
            'sessionId' => 'session_id',
            'isSlowSql' => 'is_slow_sql',
            'executionTimeDetails' => 'execution_time_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 语句启动的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * finishTime  **参数解释**: 语句结束的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起的请求的客户端端口。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 驱动传入的trace id，与应用的一次请求相关联。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 用户session id。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 该SQL是否为slow SQL。 **取值范围**: 不涉及。
    * executionTimeDetails  executionTimeDetails
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'nodeId' => 'setNodeId',
            'transactionId' => 'setTransactionId',
            'sqlId' => 'setSqlId',
            'sqlExecId' => 'setSqlExecId',
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'allTime' => 'setAllTime',
            'userName' => 'setUserName',
            'clientAddr' => 'setClientAddr',
            'clientPort' => 'setClientPort',
            'traceId' => 'setTraceId',
            'applicationName' => 'setApplicationName',
            'sessionId' => 'setSessionId',
            'isSlowSql' => 'setIsSlowSql',
            'executionTimeDetails' => 'setExecutionTimeDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * transactionId  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlExecId  **参数解释**: 唯一SQL ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    * schemaName  **参数解释**: schema名称。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 语句启动的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * finishTime  **参数解释**: 语句结束的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    * allTime  **参数解释**: 执行总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名。 **取值范围**: 不涉及。
    * clientAddr  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    * clientPort  **参数解释**: 用户发起的请求的客户端端口。 **取值范围**: 不涉及。
    * traceId  **参数解释**: 驱动传入的trace id，与应用的一次请求相关联。 **取值范围**: 不涉及。
    * applicationName  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    * sessionId  **参数解释**: 用户session id。 **取值范围**: 不涉及。
    * isSlowSql  **参数解释**: 该SQL是否为slow SQL。 **取值范围**: 不涉及。
    * executionTimeDetails  executionTimeDetails
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'nodeId' => 'getNodeId',
            'transactionId' => 'getTransactionId',
            'sqlId' => 'getSqlId',
            'sqlExecId' => 'getSqlExecId',
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'allTime' => 'getAllTime',
            'userName' => 'getUserName',
            'clientAddr' => 'getClientAddr',
            'clientPort' => 'getClientPort',
            'traceId' => 'getTraceId',
            'applicationName' => 'getApplicationName',
            'sessionId' => 'getSessionId',
            'isSlowSql' => 'getIsSlowSql',
            'executionTimeDetails' => 'getExecutionTimeDetails'
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['sqlExecId'] = isset($data['sqlExecId']) ? $data['sqlExecId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['allTime'] = isset($data['allTime']) ? $data['allTime'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['clientAddr'] = isset($data['clientAddr']) ? $data['clientAddr'] : null;
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['applicationName'] = isset($data['applicationName']) ? $data['applicationName'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['isSlowSql'] = isset($data['isSlowSql']) ? $data['isSlowSql'] : null;
        $this->container['executionTimeDetails'] = isset($data['executionTimeDetails']) ? $data['executionTimeDetails'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['componentId'] === null) {
            $invalidProperties[] = "'componentId' can't be null";
        }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['sqlId'] === null) {
            $invalidProperties[] = "'sqlId' can't be null";
        }
        if ($this->container['sqlExecId'] === null) {
            $invalidProperties[] = "'sqlExecId' can't be null";
        }
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['schemaName'] === null) {
            $invalidProperties[] = "'schemaName' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['finishTime'] === null) {
            $invalidProperties[] = "'finishTime' can't be null";
        }
        if ($this->container['allTime'] === null) {
            $invalidProperties[] = "'allTime' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['clientAddr'] === null) {
            $invalidProperties[] = "'clientAddr' can't be null";
        }
        if ($this->container['clientPort'] === null) {
            $invalidProperties[] = "'clientPort' can't be null";
        }
        if ($this->container['traceId'] === null) {
            $invalidProperties[] = "'traceId' can't be null";
        }
        if ($this->container['applicationName'] === null) {
            $invalidProperties[] = "'applicationName' can't be null";
        }
        if ($this->container['sessionId'] === null) {
            $invalidProperties[] = "'sessionId' can't be null";
        }
        if ($this->container['executionTimeDetails'] === null) {
            $invalidProperties[] = "'executionTimeDetails' can't be null";
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
    * Gets componentId
    *  **参数解释**: 组件ID。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string $componentId **参数解释**: 组件ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**: 节点ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets transactionId
    *  **参数解释**: 事务ID。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
    * Sets transactionId
    *
    * @param string $transactionId **参数解释**: 事务ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;
        return $this;
    }

    /**
    * Gets sqlId
    *  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string $sqlId **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets sqlExecId
    *  **参数解释**: 唯一SQL ID。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getSqlExecId()
    {
        return $this->container['sqlExecId'];
    }

    /**
    * Sets sqlExecId
    *
    * @param string $sqlExecId **参数解释**: 唯一SQL ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlExecId($sqlExecId)
    {
        $this->container['sqlExecId'] = $sqlExecId;
        return $this;
    }

    /**
    * Gets dbName
    *  **参数解释**: 数据库名称。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName **参数解释**: 数据库名称。 **取值范围**: 不涉及。
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
    *  **参数解释**: schema名称。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string $schemaName **参数解释**: schema名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 语句启动的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime **参数解释**: 语句启动的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
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
    *  **参数解释**: 语句结束的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string $finishTime **参数解释**: 语句结束的时间，格式为“yyyy-mm-ddThh:mm: ssssssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets allTime
    *  **参数解释**: 执行总耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getAllTime()
    {
        return $this->container['allTime'];
    }

    /**
    * Sets allTime
    *
    * @param int $allTime **参数解释**: 执行总耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAllTime($allTime)
    {
        $this->container['allTime'] = $allTime;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string $userName **参数解释**: 用户名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets clientAddr
    *  **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getClientAddr()
    {
        return $this->container['clientAddr'];
    }

    /**
    * Sets clientAddr
    *
    * @param string $clientAddr **参数解释**: 用户发起的请求的客户端地址。 **取值范围**: 不涉及。
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
    *  **参数解释**: 用户发起的请求的客户端端口。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getClientPort()
    {
        return $this->container['clientPort'];
    }

    /**
    * Sets clientPort
    *
    * @param int $clientPort **参数解释**: 用户发起的请求的客户端端口。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets traceId
    *  **参数解释**: 驱动传入的trace id，与应用的一次请求相关联。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
    * Sets traceId
    *
    * @param string $traceId **参数解释**: 驱动传入的trace id，与应用的一次请求相关联。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;
        return $this;
    }

    /**
    * Gets applicationName
    *  **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getApplicationName()
    {
        return $this->container['applicationName'];
    }

    /**
    * Sets applicationName
    *
    * @param string $applicationName **参数解释**: 用户发起的请求的应用程序名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setApplicationName($applicationName)
    {
        $this->container['applicationName'] = $applicationName;
        return $this;
    }

    /**
    * Gets sessionId
    *  **参数解释**: 用户session id。 **取值范围**: 不涉及。
    *
    * @return string
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param string $sessionId **参数解释**: 用户session id。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets isSlowSql
    *  **参数解释**: 该SQL是否为slow SQL。 **取值范围**: 不涉及。
    *
    * @return bool|null
    */
    public function getIsSlowSql()
    {
        return $this->container['isSlowSql'];
    }

    /**
    * Sets isSlowSql
    *
    * @param bool|null $isSlowSql **参数解释**: 该SQL是否为slow SQL。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIsSlowSql($isSlowSql)
    {
        $this->container['isSlowSql'] = $isSlowSql;
        return $this;
    }

    /**
    * Gets executionTimeDetails
    *  executionTimeDetails
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ExecutionTimeDetailsInfo
    */
    public function getExecutionTimeDetails()
    {
        return $this->container['executionTimeDetails'];
    }

    /**
    * Sets executionTimeDetails
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ExecutionTimeDetailsInfo $executionTimeDetails executionTimeDetails
    *
    * @return $this
    */
    public function setExecutionTimeDetails($executionTimeDetails)
    {
        $this->container['executionTimeDetails'] = $executionTimeDetails;
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

