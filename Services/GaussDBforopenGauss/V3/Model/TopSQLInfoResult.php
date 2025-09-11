<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopSQLInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopSQLInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlId  **参数解释**: Top SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: Top SQL的用户名。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: Top SQL的SQL文本。 **取值范围**: 不涉及。
    * callsPercent  **参数解释**: Top SQL的调用频率占比（%）。 **取值范围**: 0-100。
    * cpuPercent  **参数解释**: Top SQL的调用频率占比。 **取值范围**: 0-100。
    * ioPercent  **参数解释**: Top SQL的IO开销占比。 **取值范围**: 0-100。
    * calls  **参数解释** Top SQL的调用次数。 **取值范围** 大于等于0。
    * returnedRows  **参数解释** Top SQL的返回元组数。 **取值范围** 大于等于0。
    * tupleRead  **参数解释** Top SQL的读取元组数。 **取值范围** 大于等于0。
    * avgElapseTime  **参数解释** Top SQL的平均时间开销。单位ms。 **取值范围** 大于等于0。
    * totalElapseTime  **参数解释** Top SQL的总时间开销。单位ms。 **取值范围** 大于等于0。
    * cpuTime  **参数解释**: Top SQL的CPU开销。单位ms。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: Top SQL的IO开销。单位ms。 **取值范围**: 不涉及。
    * minElapseTime  **参数解释**: Top SQL的最小执行时间。单位ms。 **取值范围**: 不涉及。
    * maxElapseTime  **参数解释**: Top SQL最大执行时间。单位ms。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释** Top SQL的SQL命中率。 **取值范围** 大于等于0。
    * nodeId  **参数解释**: Top SQL的节点ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: Top SQL的数据库名（引擎版本8.200及以上支持）。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: Top SQL的节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlId' => 'string',
            'userName' => 'string',
            'sqlText' => 'string',
            'callsPercent' => 'string',
            'cpuPercent' => 'string',
            'ioPercent' => 'string',
            'calls' => 'string',
            'returnedRows' => 'string',
            'tupleRead' => 'string',
            'avgElapseTime' => 'string',
            'totalElapseTime' => 'string',
            'cpuTime' => 'string',
            'ioTime' => 'string',
            'minElapseTime' => 'string',
            'maxElapseTime' => 'string',
            'sqlHitRatio' => 'string',
            'nodeId' => 'string',
            'dbName' => 'string',
            'nodeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlId  **参数解释**: Top SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: Top SQL的用户名。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: Top SQL的SQL文本。 **取值范围**: 不涉及。
    * callsPercent  **参数解释**: Top SQL的调用频率占比（%）。 **取值范围**: 0-100。
    * cpuPercent  **参数解释**: Top SQL的调用频率占比。 **取值范围**: 0-100。
    * ioPercent  **参数解释**: Top SQL的IO开销占比。 **取值范围**: 0-100。
    * calls  **参数解释** Top SQL的调用次数。 **取值范围** 大于等于0。
    * returnedRows  **参数解释** Top SQL的返回元组数。 **取值范围** 大于等于0。
    * tupleRead  **参数解释** Top SQL的读取元组数。 **取值范围** 大于等于0。
    * avgElapseTime  **参数解释** Top SQL的平均时间开销。单位ms。 **取值范围** 大于等于0。
    * totalElapseTime  **参数解释** Top SQL的总时间开销。单位ms。 **取值范围** 大于等于0。
    * cpuTime  **参数解释**: Top SQL的CPU开销。单位ms。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: Top SQL的IO开销。单位ms。 **取值范围**: 不涉及。
    * minElapseTime  **参数解释**: Top SQL的最小执行时间。单位ms。 **取值范围**: 不涉及。
    * maxElapseTime  **参数解释**: Top SQL最大执行时间。单位ms。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释** Top SQL的SQL命中率。 **取值范围** 大于等于0。
    * nodeId  **参数解释**: Top SQL的节点ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: Top SQL的数据库名（引擎版本8.200及以上支持）。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: Top SQL的节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlId' => null,
        'userName' => null,
        'sqlText' => null,
        'callsPercent' => null,
        'cpuPercent' => null,
        'ioPercent' => null,
        'calls' => null,
        'returnedRows' => null,
        'tupleRead' => null,
        'avgElapseTime' => null,
        'totalElapseTime' => null,
        'cpuTime' => null,
        'ioTime' => null,
        'minElapseTime' => null,
        'maxElapseTime' => null,
        'sqlHitRatio' => null,
        'nodeId' => null,
        'dbName' => null,
        'nodeName' => null
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
    * sqlId  **参数解释**: Top SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: Top SQL的用户名。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: Top SQL的SQL文本。 **取值范围**: 不涉及。
    * callsPercent  **参数解释**: Top SQL的调用频率占比（%）。 **取值范围**: 0-100。
    * cpuPercent  **参数解释**: Top SQL的调用频率占比。 **取值范围**: 0-100。
    * ioPercent  **参数解释**: Top SQL的IO开销占比。 **取值范围**: 0-100。
    * calls  **参数解释** Top SQL的调用次数。 **取值范围** 大于等于0。
    * returnedRows  **参数解释** Top SQL的返回元组数。 **取值范围** 大于等于0。
    * tupleRead  **参数解释** Top SQL的读取元组数。 **取值范围** 大于等于0。
    * avgElapseTime  **参数解释** Top SQL的平均时间开销。单位ms。 **取值范围** 大于等于0。
    * totalElapseTime  **参数解释** Top SQL的总时间开销。单位ms。 **取值范围** 大于等于0。
    * cpuTime  **参数解释**: Top SQL的CPU开销。单位ms。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: Top SQL的IO开销。单位ms。 **取值范围**: 不涉及。
    * minElapseTime  **参数解释**: Top SQL的最小执行时间。单位ms。 **取值范围**: 不涉及。
    * maxElapseTime  **参数解释**: Top SQL最大执行时间。单位ms。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释** Top SQL的SQL命中率。 **取值范围** 大于等于0。
    * nodeId  **参数解释**: Top SQL的节点ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: Top SQL的数据库名（引擎版本8.200及以上支持）。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: Top SQL的节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlId' => 'sql_id',
            'userName' => 'user_name',
            'sqlText' => 'sql_text',
            'callsPercent' => 'calls_percent',
            'cpuPercent' => 'cpu_percent',
            'ioPercent' => 'io_percent',
            'calls' => 'calls',
            'returnedRows' => 'returned_rows',
            'tupleRead' => 'tuple_read',
            'avgElapseTime' => 'avg_elapse_time',
            'totalElapseTime' => 'total_elapse_time',
            'cpuTime' => 'cpu_time',
            'ioTime' => 'io_time',
            'minElapseTime' => 'min_elapse_time',
            'maxElapseTime' => 'max_elapse_time',
            'sqlHitRatio' => 'sql_hit_ratio',
            'nodeId' => 'node_id',
            'dbName' => 'db_name',
            'nodeName' => 'node_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlId  **参数解释**: Top SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: Top SQL的用户名。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: Top SQL的SQL文本。 **取值范围**: 不涉及。
    * callsPercent  **参数解释**: Top SQL的调用频率占比（%）。 **取值范围**: 0-100。
    * cpuPercent  **参数解释**: Top SQL的调用频率占比。 **取值范围**: 0-100。
    * ioPercent  **参数解释**: Top SQL的IO开销占比。 **取值范围**: 0-100。
    * calls  **参数解释** Top SQL的调用次数。 **取值范围** 大于等于0。
    * returnedRows  **参数解释** Top SQL的返回元组数。 **取值范围** 大于等于0。
    * tupleRead  **参数解释** Top SQL的读取元组数。 **取值范围** 大于等于0。
    * avgElapseTime  **参数解释** Top SQL的平均时间开销。单位ms。 **取值范围** 大于等于0。
    * totalElapseTime  **参数解释** Top SQL的总时间开销。单位ms。 **取值范围** 大于等于0。
    * cpuTime  **参数解释**: Top SQL的CPU开销。单位ms。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: Top SQL的IO开销。单位ms。 **取值范围**: 不涉及。
    * minElapseTime  **参数解释**: Top SQL的最小执行时间。单位ms。 **取值范围**: 不涉及。
    * maxElapseTime  **参数解释**: Top SQL最大执行时间。单位ms。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释** Top SQL的SQL命中率。 **取值范围** 大于等于0。
    * nodeId  **参数解释**: Top SQL的节点ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: Top SQL的数据库名（引擎版本8.200及以上支持）。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: Top SQL的节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlId' => 'setSqlId',
            'userName' => 'setUserName',
            'sqlText' => 'setSqlText',
            'callsPercent' => 'setCallsPercent',
            'cpuPercent' => 'setCpuPercent',
            'ioPercent' => 'setIoPercent',
            'calls' => 'setCalls',
            'returnedRows' => 'setReturnedRows',
            'tupleRead' => 'setTupleRead',
            'avgElapseTime' => 'setAvgElapseTime',
            'totalElapseTime' => 'setTotalElapseTime',
            'cpuTime' => 'setCpuTime',
            'ioTime' => 'setIoTime',
            'minElapseTime' => 'setMinElapseTime',
            'maxElapseTime' => 'setMaxElapseTime',
            'sqlHitRatio' => 'setSqlHitRatio',
            'nodeId' => 'setNodeId',
            'dbName' => 'setDbName',
            'nodeName' => 'setNodeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlId  **参数解释**: Top SQL的归一化SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: Top SQL的用户名。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: Top SQL的SQL文本。 **取值范围**: 不涉及。
    * callsPercent  **参数解释**: Top SQL的调用频率占比（%）。 **取值范围**: 0-100。
    * cpuPercent  **参数解释**: Top SQL的调用频率占比。 **取值范围**: 0-100。
    * ioPercent  **参数解释**: Top SQL的IO开销占比。 **取值范围**: 0-100。
    * calls  **参数解释** Top SQL的调用次数。 **取值范围** 大于等于0。
    * returnedRows  **参数解释** Top SQL的返回元组数。 **取值范围** 大于等于0。
    * tupleRead  **参数解释** Top SQL的读取元组数。 **取值范围** 大于等于0。
    * avgElapseTime  **参数解释** Top SQL的平均时间开销。单位ms。 **取值范围** 大于等于0。
    * totalElapseTime  **参数解释** Top SQL的总时间开销。单位ms。 **取值范围** 大于等于0。
    * cpuTime  **参数解释**: Top SQL的CPU开销。单位ms。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: Top SQL的IO开销。单位ms。 **取值范围**: 不涉及。
    * minElapseTime  **参数解释**: Top SQL的最小执行时间。单位ms。 **取值范围**: 不涉及。
    * maxElapseTime  **参数解释**: Top SQL最大执行时间。单位ms。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释** Top SQL的SQL命中率。 **取值范围** 大于等于0。
    * nodeId  **参数解释**: Top SQL的节点ID。 **取值范围**: 不涉及。
    * dbName  **参数解释**: Top SQL的数据库名（引擎版本8.200及以上支持）。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: Top SQL的节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlId' => 'getSqlId',
            'userName' => 'getUserName',
            'sqlText' => 'getSqlText',
            'callsPercent' => 'getCallsPercent',
            'cpuPercent' => 'getCpuPercent',
            'ioPercent' => 'getIoPercent',
            'calls' => 'getCalls',
            'returnedRows' => 'getReturnedRows',
            'tupleRead' => 'getTupleRead',
            'avgElapseTime' => 'getAvgElapseTime',
            'totalElapseTime' => 'getTotalElapseTime',
            'cpuTime' => 'getCpuTime',
            'ioTime' => 'getIoTime',
            'minElapseTime' => 'getMinElapseTime',
            'maxElapseTime' => 'getMaxElapseTime',
            'sqlHitRatio' => 'getSqlHitRatio',
            'nodeId' => 'getNodeId',
            'dbName' => 'getDbName',
            'nodeName' => 'getNodeName'
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
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['sqlText'] = isset($data['sqlText']) ? $data['sqlText'] : null;
        $this->container['callsPercent'] = isset($data['callsPercent']) ? $data['callsPercent'] : null;
        $this->container['cpuPercent'] = isset($data['cpuPercent']) ? $data['cpuPercent'] : null;
        $this->container['ioPercent'] = isset($data['ioPercent']) ? $data['ioPercent'] : null;
        $this->container['calls'] = isset($data['calls']) ? $data['calls'] : null;
        $this->container['returnedRows'] = isset($data['returnedRows']) ? $data['returnedRows'] : null;
        $this->container['tupleRead'] = isset($data['tupleRead']) ? $data['tupleRead'] : null;
        $this->container['avgElapseTime'] = isset($data['avgElapseTime']) ? $data['avgElapseTime'] : null;
        $this->container['totalElapseTime'] = isset($data['totalElapseTime']) ? $data['totalElapseTime'] : null;
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['ioTime'] = isset($data['ioTime']) ? $data['ioTime'] : null;
        $this->container['minElapseTime'] = isset($data['minElapseTime']) ? $data['minElapseTime'] : null;
        $this->container['maxElapseTime'] = isset($data['maxElapseTime']) ? $data['maxElapseTime'] : null;
        $this->container['sqlHitRatio'] = isset($data['sqlHitRatio']) ? $data['sqlHitRatio'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
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
    * Gets sqlId
    *  **参数解释**: Top SQL的归一化SQL ID。 **取值范围**: 不涉及。
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
    * @param string|null $sqlId **参数解释**: Top SQL的归一化SQL ID。 **取值范围**: 不涉及。
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
    *  **参数解释**: Top SQL的用户名。 **取值范围**: 不涉及。
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
    * @param string|null $userName **参数解释**: Top SQL的用户名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets sqlText
    *  **参数解释**: Top SQL的SQL文本。 **取值范围**: 不涉及。
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
    * @param string|null $sqlText **参数解释**: Top SQL的SQL文本。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlText($sqlText)
    {
        $this->container['sqlText'] = $sqlText;
        return $this;
    }

    /**
    * Gets callsPercent
    *  **参数解释**: Top SQL的调用频率占比（%）。 **取值范围**: 0-100。
    *
    * @return string|null
    */
    public function getCallsPercent()
    {
        return $this->container['callsPercent'];
    }

    /**
    * Sets callsPercent
    *
    * @param string|null $callsPercent **参数解释**: Top SQL的调用频率占比（%）。 **取值范围**: 0-100。
    *
    * @return $this
    */
    public function setCallsPercent($callsPercent)
    {
        $this->container['callsPercent'] = $callsPercent;
        return $this;
    }

    /**
    * Gets cpuPercent
    *  **参数解释**: Top SQL的调用频率占比。 **取值范围**: 0-100。
    *
    * @return string|null
    */
    public function getCpuPercent()
    {
        return $this->container['cpuPercent'];
    }

    /**
    * Sets cpuPercent
    *
    * @param string|null $cpuPercent **参数解释**: Top SQL的调用频率占比。 **取值范围**: 0-100。
    *
    * @return $this
    */
    public function setCpuPercent($cpuPercent)
    {
        $this->container['cpuPercent'] = $cpuPercent;
        return $this;
    }

    /**
    * Gets ioPercent
    *  **参数解释**: Top SQL的IO开销占比。 **取值范围**: 0-100。
    *
    * @return string|null
    */
    public function getIoPercent()
    {
        return $this->container['ioPercent'];
    }

    /**
    * Sets ioPercent
    *
    * @param string|null $ioPercent **参数解释**: Top SQL的IO开销占比。 **取值范围**: 0-100。
    *
    * @return $this
    */
    public function setIoPercent($ioPercent)
    {
        $this->container['ioPercent'] = $ioPercent;
        return $this;
    }

    /**
    * Gets calls
    *  **参数解释** Top SQL的调用次数。 **取值范围** 大于等于0。
    *
    * @return string|null
    */
    public function getCalls()
    {
        return $this->container['calls'];
    }

    /**
    * Sets calls
    *
    * @param string|null $calls **参数解释** Top SQL的调用次数。 **取值范围** 大于等于0。
    *
    * @return $this
    */
    public function setCalls($calls)
    {
        $this->container['calls'] = $calls;
        return $this;
    }

    /**
    * Gets returnedRows
    *  **参数解释** Top SQL的返回元组数。 **取值范围** 大于等于0。
    *
    * @return string|null
    */
    public function getReturnedRows()
    {
        return $this->container['returnedRows'];
    }

    /**
    * Sets returnedRows
    *
    * @param string|null $returnedRows **参数解释** Top SQL的返回元组数。 **取值范围** 大于等于0。
    *
    * @return $this
    */
    public function setReturnedRows($returnedRows)
    {
        $this->container['returnedRows'] = $returnedRows;
        return $this;
    }

    /**
    * Gets tupleRead
    *  **参数解释** Top SQL的读取元组数。 **取值范围** 大于等于0。
    *
    * @return string|null
    */
    public function getTupleRead()
    {
        return $this->container['tupleRead'];
    }

    /**
    * Sets tupleRead
    *
    * @param string|null $tupleRead **参数解释** Top SQL的读取元组数。 **取值范围** 大于等于0。
    *
    * @return $this
    */
    public function setTupleRead($tupleRead)
    {
        $this->container['tupleRead'] = $tupleRead;
        return $this;
    }

    /**
    * Gets avgElapseTime
    *  **参数解释** Top SQL的平均时间开销。单位ms。 **取值范围** 大于等于0。
    *
    * @return string|null
    */
    public function getAvgElapseTime()
    {
        return $this->container['avgElapseTime'];
    }

    /**
    * Sets avgElapseTime
    *
    * @param string|null $avgElapseTime **参数解释** Top SQL的平均时间开销。单位ms。 **取值范围** 大于等于0。
    *
    * @return $this
    */
    public function setAvgElapseTime($avgElapseTime)
    {
        $this->container['avgElapseTime'] = $avgElapseTime;
        return $this;
    }

    /**
    * Gets totalElapseTime
    *  **参数解释** Top SQL的总时间开销。单位ms。 **取值范围** 大于等于0。
    *
    * @return string|null
    */
    public function getTotalElapseTime()
    {
        return $this->container['totalElapseTime'];
    }

    /**
    * Sets totalElapseTime
    *
    * @param string|null $totalElapseTime **参数解释** Top SQL的总时间开销。单位ms。 **取值范围** 大于等于0。
    *
    * @return $this
    */
    public function setTotalElapseTime($totalElapseTime)
    {
        $this->container['totalElapseTime'] = $totalElapseTime;
        return $this;
    }

    /**
    * Gets cpuTime
    *  **参数解释**: Top SQL的CPU开销。单位ms。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getCpuTime()
    {
        return $this->container['cpuTime'];
    }

    /**
    * Sets cpuTime
    *
    * @param string|null $cpuTime **参数解释**: Top SQL的CPU开销。单位ms。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCpuTime($cpuTime)
    {
        $this->container['cpuTime'] = $cpuTime;
        return $this;
    }

    /**
    * Gets ioTime
    *  **参数解释**: Top SQL的IO开销。单位ms。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getIoTime()
    {
        return $this->container['ioTime'];
    }

    /**
    * Sets ioTime
    *
    * @param string|null $ioTime **参数解释**: Top SQL的IO开销。单位ms。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIoTime($ioTime)
    {
        $this->container['ioTime'] = $ioTime;
        return $this;
    }

    /**
    * Gets minElapseTime
    *  **参数解释**: Top SQL的最小执行时间。单位ms。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getMinElapseTime()
    {
        return $this->container['minElapseTime'];
    }

    /**
    * Sets minElapseTime
    *
    * @param string|null $minElapseTime **参数解释**: Top SQL的最小执行时间。单位ms。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMinElapseTime($minElapseTime)
    {
        $this->container['minElapseTime'] = $minElapseTime;
        return $this;
    }

    /**
    * Gets maxElapseTime
    *  **参数解释**: Top SQL最大执行时间。单位ms。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getMaxElapseTime()
    {
        return $this->container['maxElapseTime'];
    }

    /**
    * Sets maxElapseTime
    *
    * @param string|null $maxElapseTime **参数解释**: Top SQL最大执行时间。单位ms。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMaxElapseTime($maxElapseTime)
    {
        $this->container['maxElapseTime'] = $maxElapseTime;
        return $this;
    }

    /**
    * Gets sqlHitRatio
    *  **参数解释** Top SQL的SQL命中率。 **取值范围** 大于等于0。
    *
    * @return string|null
    */
    public function getSqlHitRatio()
    {
        return $this->container['sqlHitRatio'];
    }

    /**
    * Sets sqlHitRatio
    *
    * @param string|null $sqlHitRatio **参数解释** Top SQL的SQL命中率。 **取值范围** 大于等于0。
    *
    * @return $this
    */
    public function setSqlHitRatio($sqlHitRatio)
    {
        $this->container['sqlHitRatio'] = $sqlHitRatio;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: Top SQL的节点ID。 **取值范围**: 不涉及。
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
    * @param string|null $nodeId **参数解释**: Top SQL的节点ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets dbName
    *  **参数解释**: Top SQL的数据库名（引擎版本8.200及以上支持）。 **取值范围**: 不涉及。
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
    * @param string|null $dbName **参数解释**: Top SQL的数据库名（引擎版本8.200及以上支持）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets nodeName
    *  **参数解释**: Top SQL的节点名称。 **取值范围**: 不涉及。
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
    * @param string|null $nodeName **参数解释**: Top SQL的节点名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
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

