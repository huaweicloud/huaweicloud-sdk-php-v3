<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockAnalysisResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockAnalysisResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deadLockId  死锁唯一标识
    * jobId  分析任务ID
    * status  分析任务状态
    * sqlInsightJobId  SQL洞察任务ID
    * transactionId  查询的事务ID
    * total  该事务下SQL记录总数
    * sqlList  SQL详情列表
    * transactionIds  从死锁事件解析的事务ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deadLockId' => 'string',
            'jobId' => 'string',
            'status' => 'string',
            'sqlInsightJobId' => 'int',
            'transactionId' => 'string',
            'total' => 'int',
            'sqlList' => '\HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockAnalysisResultRespSqlList[]',
            'transactionIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deadLockId  死锁唯一标识
    * jobId  分析任务ID
    * status  分析任务状态
    * sqlInsightJobId  SQL洞察任务ID
    * transactionId  查询的事务ID
    * total  该事务下SQL记录总数
    * sqlList  SQL详情列表
    * transactionIds  从死锁事件解析的事务ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deadLockId' => null,
        'jobId' => null,
        'status' => null,
        'sqlInsightJobId' => 'int64',
        'transactionId' => null,
        'total' => 'int64',
        'sqlList' => null,
        'transactionIds' => null
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
    * deadLockId  死锁唯一标识
    * jobId  分析任务ID
    * status  分析任务状态
    * sqlInsightJobId  SQL洞察任务ID
    * transactionId  查询的事务ID
    * total  该事务下SQL记录总数
    * sqlList  SQL详情列表
    * transactionIds  从死锁事件解析的事务ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deadLockId' => 'dead_lock_id',
            'jobId' => 'job_id',
            'status' => 'status',
            'sqlInsightJobId' => 'sql_insight_job_id',
            'transactionId' => 'transaction_id',
            'total' => 'total',
            'sqlList' => 'sql_list',
            'transactionIds' => 'transaction_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deadLockId  死锁唯一标识
    * jobId  分析任务ID
    * status  分析任务状态
    * sqlInsightJobId  SQL洞察任务ID
    * transactionId  查询的事务ID
    * total  该事务下SQL记录总数
    * sqlList  SQL详情列表
    * transactionIds  从死锁事件解析的事务ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'deadLockId' => 'setDeadLockId',
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'sqlInsightJobId' => 'setSqlInsightJobId',
            'transactionId' => 'setTransactionId',
            'total' => 'setTotal',
            'sqlList' => 'setSqlList',
            'transactionIds' => 'setTransactionIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deadLockId  死锁唯一标识
    * jobId  分析任务ID
    * status  分析任务状态
    * sqlInsightJobId  SQL洞察任务ID
    * transactionId  查询的事务ID
    * total  该事务下SQL记录总数
    * sqlList  SQL详情列表
    * transactionIds  从死锁事件解析的事务ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'deadLockId' => 'getDeadLockId',
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'sqlInsightJobId' => 'getSqlInsightJobId',
            'transactionId' => 'getTransactionId',
            'total' => 'getTotal',
            'sqlList' => 'getSqlList',
            'transactionIds' => 'getTransactionIds'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sqlInsightJobId'] = isset($data['sqlInsightJobId']) ? $data['sqlInsightJobId'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['sqlList'] = isset($data['sqlList']) ? $data['sqlList'] : null;
        $this->container['transactionIds'] = isset($data['transactionIds']) ? $data['transactionIds'] : null;
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
    *  死锁唯一标识
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
    * @param string|null $deadLockId 死锁唯一标识
    *
    * @return $this
    */
    public function setDeadLockId($deadLockId)
    {
        $this->container['deadLockId'] = $deadLockId;
        return $this;
    }

    /**
    * Gets jobId
    *  分析任务ID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 分析任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets status
    *  分析任务状态
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
    * @param string|null $status 分析任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sqlInsightJobId
    *  SQL洞察任务ID
    *
    * @return int|null
    */
    public function getSqlInsightJobId()
    {
        return $this->container['sqlInsightJobId'];
    }

    /**
    * Sets sqlInsightJobId
    *
    * @param int|null $sqlInsightJobId SQL洞察任务ID
    *
    * @return $this
    */
    public function setSqlInsightJobId($sqlInsightJobId)
    {
        $this->container['sqlInsightJobId'] = $sqlInsightJobId;
        return $this;
    }

    /**
    * Gets transactionId
    *  查询的事务ID
    *
    * @return string|null
    */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
    * Sets transactionId
    *
    * @param string|null $transactionId 查询的事务ID
    *
    * @return $this
    */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;
        return $this;
    }

    /**
    * Gets total
    *  该事务下SQL记录总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 该事务下SQL记录总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets sqlList
    *  SQL详情列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockAnalysisResultRespSqlList[]|null
    */
    public function getSqlList()
    {
        return $this->container['sqlList'];
    }

    /**
    * Sets sqlList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockAnalysisResultRespSqlList[]|null $sqlList SQL详情列表
    *
    * @return $this
    */
    public function setSqlList($sqlList)
    {
        $this->container['sqlList'] = $sqlList;
        return $this;
    }

    /**
    * Gets transactionIds
    *  从死锁事件解析的事务ID列表
    *
    * @return string[]|null
    */
    public function getTransactionIds()
    {
        return $this->container['transactionIds'];
    }

    /**
    * Sets transactionIds
    *
    * @param string[]|null $transactionIds 从死锁事件解析的事务ID列表
    *
    * @return $this
    */
    public function setTransactionIds($transactionIds)
    {
        $this->container['transactionIds'] = $transactionIds;
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

