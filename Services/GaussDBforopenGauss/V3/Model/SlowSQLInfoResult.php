<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlowSQLInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlowSQLInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: SQL计划。 **取值范围**: 不涉及。
    * calls  **参数解释**: 执行次数（次）。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间（us）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU耗时（us）。 **取值范围**: 不涉及。
    * avgIoTime  **参数解释**: 平均IO耗时（us）。 **取值范围**: 不涉及。
    * avgReturnedRows  **参数解释**: 平均返回行数（行）。 **取值范围**: 不涉及。
    * avgFetchedRows  **参数解释**: 平均扫描行数（行）。 **取值范围**: 不涉及。
    * bufferHitRatio  **参数解释**: buffer命中率。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释**: SQL命中率。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sql' => 'string',
            'sqlId' => 'string',
            'userName' => 'string',
            'sqlText' => 'string',
            'queryPlan' => 'string',
            'calls' => 'int',
            'avgExecTime' => 'string',
            'avgCpuTime' => 'string',
            'avgIoTime' => 'string',
            'avgReturnedRows' => 'int',
            'avgFetchedRows' => 'int',
            'bufferHitRatio' => 'string',
            'sqlHitRatio' => 'string',
            'nodeId' => 'string',
            'nodeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: SQL计划。 **取值范围**: 不涉及。
    * calls  **参数解释**: 执行次数（次）。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间（us）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU耗时（us）。 **取值范围**: 不涉及。
    * avgIoTime  **参数解释**: 平均IO耗时（us）。 **取值范围**: 不涉及。
    * avgReturnedRows  **参数解释**: 平均返回行数（行）。 **取值范围**: 不涉及。
    * avgFetchedRows  **参数解释**: 平均扫描行数（行）。 **取值范围**: 不涉及。
    * bufferHitRatio  **参数解释**: buffer命中率。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释**: SQL命中率。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sql' => null,
        'sqlId' => null,
        'userName' => null,
        'sqlText' => null,
        'queryPlan' => null,
        'calls' => null,
        'avgExecTime' => null,
        'avgCpuTime' => null,
        'avgIoTime' => null,
        'avgReturnedRows' => null,
        'avgFetchedRows' => null,
        'bufferHitRatio' => null,
        'sqlHitRatio' => null,
        'nodeId' => null,
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
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: SQL计划。 **取值范围**: 不涉及。
    * calls  **参数解释**: 执行次数（次）。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间（us）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU耗时（us）。 **取值范围**: 不涉及。
    * avgIoTime  **参数解释**: 平均IO耗时（us）。 **取值范围**: 不涉及。
    * avgReturnedRows  **参数解释**: 平均返回行数（行）。 **取值范围**: 不涉及。
    * avgFetchedRows  **参数解释**: 平均扫描行数（行）。 **取值范围**: 不涉及。
    * bufferHitRatio  **参数解释**: buffer命中率。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释**: SQL命中率。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sql' => 'sql',
            'sqlId' => 'sql_id',
            'userName' => 'user_name',
            'sqlText' => 'sql_text',
            'queryPlan' => 'query_plan',
            'calls' => 'calls',
            'avgExecTime' => 'avg_exec_time',
            'avgCpuTime' => 'avg_cpu_time',
            'avgIoTime' => 'avg_io_time',
            'avgReturnedRows' => 'avg_returned_rows',
            'avgFetchedRows' => 'avg_fetched_rows',
            'bufferHitRatio' => 'buffer_hit_ratio',
            'sqlHitRatio' => 'sql_hit_ratio',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: SQL计划。 **取值范围**: 不涉及。
    * calls  **参数解释**: 执行次数（次）。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间（us）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU耗时（us）。 **取值范围**: 不涉及。
    * avgIoTime  **参数解释**: 平均IO耗时（us）。 **取值范围**: 不涉及。
    * avgReturnedRows  **参数解释**: 平均返回行数（行）。 **取值范围**: 不涉及。
    * avgFetchedRows  **参数解释**: 平均扫描行数（行）。 **取值范围**: 不涉及。
    * bufferHitRatio  **参数解释**: buffer命中率。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释**: SQL命中率。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sql' => 'setSql',
            'sqlId' => 'setSqlId',
            'userName' => 'setUserName',
            'sqlText' => 'setSqlText',
            'queryPlan' => 'setQueryPlan',
            'calls' => 'setCalls',
            'avgExecTime' => 'setAvgExecTime',
            'avgCpuTime' => 'setAvgCpuTime',
            'avgIoTime' => 'setAvgIoTime',
            'avgReturnedRows' => 'setAvgReturnedRows',
            'avgFetchedRows' => 'setAvgFetchedRows',
            'bufferHitRatio' => 'setBufferHitRatio',
            'sqlHitRatio' => 'setSqlHitRatio',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sql  **参数解释**: 变量替换后的完整SQL。当sql_text不返回变量值时，sql返回空字符串。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: SQL ID。 **取值范围**: 不涉及。
    * userName  **参数解释**: 用户名称。 **取值范围**: 不涉及。
    * sqlText  **参数解释**: SQL文本。 **取值范围**: 不涉及。
    * queryPlan  **参数解释**: SQL计划。 **取值范围**: 不涉及。
    * calls  **参数解释**: 执行次数（次）。 **取值范围**: 不涉及。
    * avgExecTime  **参数解释**: 平均执行时间（us）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU耗时（us）。 **取值范围**: 不涉及。
    * avgIoTime  **参数解释**: 平均IO耗时（us）。 **取值范围**: 不涉及。
    * avgReturnedRows  **参数解释**: 平均返回行数（行）。 **取值范围**: 不涉及。
    * avgFetchedRows  **参数解释**: 平均扫描行数（行）。 **取值范围**: 不涉及。
    * bufferHitRatio  **参数解释**: buffer命中率。 **取值范围**: 不涉及。
    * sqlHitRatio  **参数解释**: SQL命中率。 **取值范围**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sql' => 'getSql',
            'sqlId' => 'getSqlId',
            'userName' => 'getUserName',
            'sqlText' => 'getSqlText',
            'queryPlan' => 'getQueryPlan',
            'calls' => 'getCalls',
            'avgExecTime' => 'getAvgExecTime',
            'avgCpuTime' => 'getAvgCpuTime',
            'avgIoTime' => 'getAvgIoTime',
            'avgReturnedRows' => 'getAvgReturnedRows',
            'avgFetchedRows' => 'getAvgFetchedRows',
            'bufferHitRatio' => 'getBufferHitRatio',
            'sqlHitRatio' => 'getSqlHitRatio',
            'nodeId' => 'getNodeId',
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
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['sqlText'] = isset($data['sqlText']) ? $data['sqlText'] : null;
        $this->container['queryPlan'] = isset($data['queryPlan']) ? $data['queryPlan'] : null;
        $this->container['calls'] = isset($data['calls']) ? $data['calls'] : null;
        $this->container['avgExecTime'] = isset($data['avgExecTime']) ? $data['avgExecTime'] : null;
        $this->container['avgCpuTime'] = isset($data['avgCpuTime']) ? $data['avgCpuTime'] : null;
        $this->container['avgIoTime'] = isset($data['avgIoTime']) ? $data['avgIoTime'] : null;
        $this->container['avgReturnedRows'] = isset($data['avgReturnedRows']) ? $data['avgReturnedRows'] : null;
        $this->container['avgFetchedRows'] = isset($data['avgFetchedRows']) ? $data['avgFetchedRows'] : null;
        $this->container['bufferHitRatio'] = isset($data['bufferHitRatio']) ? $data['bufferHitRatio'] : null;
        $this->container['sqlHitRatio'] = isset($data['sqlHitRatio']) ? $data['sqlHitRatio'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
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
    * Gets sqlText
    *  **参数解释**: SQL文本。 **取值范围**: 不涉及。
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
    * @param string|null $sqlText **参数解释**: SQL文本。 **取值范围**: 不涉及。
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
    *  **参数解释**: SQL计划。 **取值范围**: 不涉及。
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
    * @param string|null $queryPlan **参数解释**: SQL计划。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setQueryPlan($queryPlan)
    {
        $this->container['queryPlan'] = $queryPlan;
        return $this;
    }

    /**
    * Gets calls
    *  **参数解释**: 执行次数（次）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getCalls()
    {
        return $this->container['calls'];
    }

    /**
    * Sets calls
    *
    * @param int|null $calls **参数解释**: 执行次数（次）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCalls($calls)
    {
        $this->container['calls'] = $calls;
        return $this;
    }

    /**
    * Gets avgExecTime
    *  **参数解释**: 平均执行时间（us）。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getAvgExecTime()
    {
        return $this->container['avgExecTime'];
    }

    /**
    * Sets avgExecTime
    *
    * @param string|null $avgExecTime **参数解释**: 平均执行时间（us）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgExecTime($avgExecTime)
    {
        $this->container['avgExecTime'] = $avgExecTime;
        return $this;
    }

    /**
    * Gets avgCpuTime
    *  **参数解释**: 平均CPU耗时（us）。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getAvgCpuTime()
    {
        return $this->container['avgCpuTime'];
    }

    /**
    * Sets avgCpuTime
    *
    * @param string|null $avgCpuTime **参数解释**: 平均CPU耗时（us）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgCpuTime($avgCpuTime)
    {
        $this->container['avgCpuTime'] = $avgCpuTime;
        return $this;
    }

    /**
    * Gets avgIoTime
    *  **参数解释**: 平均IO耗时（us）。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getAvgIoTime()
    {
        return $this->container['avgIoTime'];
    }

    /**
    * Sets avgIoTime
    *
    * @param string|null $avgIoTime **参数解释**: 平均IO耗时（us）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgIoTime($avgIoTime)
    {
        $this->container['avgIoTime'] = $avgIoTime;
        return $this;
    }

    /**
    * Gets avgReturnedRows
    *  **参数解释**: 平均返回行数（行）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getAvgReturnedRows()
    {
        return $this->container['avgReturnedRows'];
    }

    /**
    * Sets avgReturnedRows
    *
    * @param int|null $avgReturnedRows **参数解释**: 平均返回行数（行）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgReturnedRows($avgReturnedRows)
    {
        $this->container['avgReturnedRows'] = $avgReturnedRows;
        return $this;
    }

    /**
    * Gets avgFetchedRows
    *  **参数解释**: 平均扫描行数（行）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getAvgFetchedRows()
    {
        return $this->container['avgFetchedRows'];
    }

    /**
    * Sets avgFetchedRows
    *
    * @param int|null $avgFetchedRows **参数解释**: 平均扫描行数（行）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgFetchedRows($avgFetchedRows)
    {
        $this->container['avgFetchedRows'] = $avgFetchedRows;
        return $this;
    }

    /**
    * Gets bufferHitRatio
    *  **参数解释**: buffer命中率。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getBufferHitRatio()
    {
        return $this->container['bufferHitRatio'];
    }

    /**
    * Sets bufferHitRatio
    *
    * @param string|null $bufferHitRatio **参数解释**: buffer命中率。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setBufferHitRatio($bufferHitRatio)
    {
        $this->container['bufferHitRatio'] = $bufferHitRatio;
        return $this;
    }

    /**
    * Gets sqlHitRatio
    *  **参数解释**: SQL命中率。 **取值范围**: 不涉及。
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
    * @param string|null $sqlHitRatio **参数解释**: SQL命中率。 **取值范围**: 不涉及。
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

