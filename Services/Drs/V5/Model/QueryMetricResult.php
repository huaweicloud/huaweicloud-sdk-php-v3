<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryMetricResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryMetricResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * nodeId  实例ID。
    * timeStamp  上报时间。
    * cpuUtil  CPU使用率。
    * memUtil  内存使用率。
    * networkIncomingBytesRate  网络输入吞吐量。
    * networkOutgoingBytesRate  网络输出吞吐量。
    * diskReadBytesRate  磁盘读吞吐量。
    * diskWriteBytesRate  磁盘写吞吐量。
    * applyRowsRate  写目标库频率。
    * applyTransactionsRate  DML TPS。
    * applyDdlRate  DDL TPS。
    * applyAverageExecuteTime  事务平均执行时间。
    * applyAverageCommitTime  事务平均提交时间。
    * applyCurrentState  同步状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'nodeId' => 'string',
            'timeStamp' => '\DateTime',
            'cpuUtil' => 'string',
            'memUtil' => 'string',
            'networkIncomingBytesRate' => 'string',
            'networkOutgoingBytesRate' => 'string',
            'diskReadBytesRate' => 'string',
            'diskWriteBytesRate' => 'string',
            'applyRowsRate' => 'string',
            'applyTransactionsRate' => 'string',
            'applyDdlRate' => 'string',
            'applyAverageExecuteTime' => 'string',
            'applyAverageCommitTime' => 'string',
            'applyCurrentState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * nodeId  实例ID。
    * timeStamp  上报时间。
    * cpuUtil  CPU使用率。
    * memUtil  内存使用率。
    * networkIncomingBytesRate  网络输入吞吐量。
    * networkOutgoingBytesRate  网络输出吞吐量。
    * diskReadBytesRate  磁盘读吞吐量。
    * diskWriteBytesRate  磁盘写吞吐量。
    * applyRowsRate  写目标库频率。
    * applyTransactionsRate  DML TPS。
    * applyDdlRate  DDL TPS。
    * applyAverageExecuteTime  事务平均执行时间。
    * applyAverageCommitTime  事务平均提交时间。
    * applyCurrentState  同步状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'nodeId' => null,
        'timeStamp' => 'date',
        'cpuUtil' => null,
        'memUtil' => null,
        'networkIncomingBytesRate' => null,
        'networkOutgoingBytesRate' => null,
        'diskReadBytesRate' => null,
        'diskWriteBytesRate' => null,
        'applyRowsRate' => null,
        'applyTransactionsRate' => null,
        'applyDdlRate' => null,
        'applyAverageExecuteTime' => null,
        'applyAverageCommitTime' => null,
        'applyCurrentState' => null
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
    * jobId  任务ID。
    * nodeId  实例ID。
    * timeStamp  上报时间。
    * cpuUtil  CPU使用率。
    * memUtil  内存使用率。
    * networkIncomingBytesRate  网络输入吞吐量。
    * networkOutgoingBytesRate  网络输出吞吐量。
    * diskReadBytesRate  磁盘读吞吐量。
    * diskWriteBytesRate  磁盘写吞吐量。
    * applyRowsRate  写目标库频率。
    * applyTransactionsRate  DML TPS。
    * applyDdlRate  DDL TPS。
    * applyAverageExecuteTime  事务平均执行时间。
    * applyAverageCommitTime  事务平均提交时间。
    * applyCurrentState  同步状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'nodeId' => 'node_id',
            'timeStamp' => 'time_stamp',
            'cpuUtil' => 'cpu_util',
            'memUtil' => 'mem_util',
            'networkIncomingBytesRate' => 'network_incoming_bytes_rate',
            'networkOutgoingBytesRate' => 'network_outgoing_bytes_rate',
            'diskReadBytesRate' => 'disk_read_bytes_rate',
            'diskWriteBytesRate' => 'disk_write_bytes_rate',
            'applyRowsRate' => 'apply_rows_rate',
            'applyTransactionsRate' => 'apply_transactions_rate',
            'applyDdlRate' => 'apply_ddl_rate',
            'applyAverageExecuteTime' => 'apply_average_execute_time',
            'applyAverageCommitTime' => 'apply_average_commit_time',
            'applyCurrentState' => 'apply_current_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * nodeId  实例ID。
    * timeStamp  上报时间。
    * cpuUtil  CPU使用率。
    * memUtil  内存使用率。
    * networkIncomingBytesRate  网络输入吞吐量。
    * networkOutgoingBytesRate  网络输出吞吐量。
    * diskReadBytesRate  磁盘读吞吐量。
    * diskWriteBytesRate  磁盘写吞吐量。
    * applyRowsRate  写目标库频率。
    * applyTransactionsRate  DML TPS。
    * applyDdlRate  DDL TPS。
    * applyAverageExecuteTime  事务平均执行时间。
    * applyAverageCommitTime  事务平均提交时间。
    * applyCurrentState  同步状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'nodeId' => 'setNodeId',
            'timeStamp' => 'setTimeStamp',
            'cpuUtil' => 'setCpuUtil',
            'memUtil' => 'setMemUtil',
            'networkIncomingBytesRate' => 'setNetworkIncomingBytesRate',
            'networkOutgoingBytesRate' => 'setNetworkOutgoingBytesRate',
            'diskReadBytesRate' => 'setDiskReadBytesRate',
            'diskWriteBytesRate' => 'setDiskWriteBytesRate',
            'applyRowsRate' => 'setApplyRowsRate',
            'applyTransactionsRate' => 'setApplyTransactionsRate',
            'applyDdlRate' => 'setApplyDdlRate',
            'applyAverageExecuteTime' => 'setApplyAverageExecuteTime',
            'applyAverageCommitTime' => 'setApplyAverageCommitTime',
            'applyCurrentState' => 'setApplyCurrentState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * nodeId  实例ID。
    * timeStamp  上报时间。
    * cpuUtil  CPU使用率。
    * memUtil  内存使用率。
    * networkIncomingBytesRate  网络输入吞吐量。
    * networkOutgoingBytesRate  网络输出吞吐量。
    * diskReadBytesRate  磁盘读吞吐量。
    * diskWriteBytesRate  磁盘写吞吐量。
    * applyRowsRate  写目标库频率。
    * applyTransactionsRate  DML TPS。
    * applyDdlRate  DDL TPS。
    * applyAverageExecuteTime  事务平均执行时间。
    * applyAverageCommitTime  事务平均提交时间。
    * applyCurrentState  同步状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'nodeId' => 'getNodeId',
            'timeStamp' => 'getTimeStamp',
            'cpuUtil' => 'getCpuUtil',
            'memUtil' => 'getMemUtil',
            'networkIncomingBytesRate' => 'getNetworkIncomingBytesRate',
            'networkOutgoingBytesRate' => 'getNetworkOutgoingBytesRate',
            'diskReadBytesRate' => 'getDiskReadBytesRate',
            'diskWriteBytesRate' => 'getDiskWriteBytesRate',
            'applyRowsRate' => 'getApplyRowsRate',
            'applyTransactionsRate' => 'getApplyTransactionsRate',
            'applyDdlRate' => 'getApplyDdlRate',
            'applyAverageExecuteTime' => 'getApplyAverageExecuteTime',
            'applyAverageCommitTime' => 'getApplyAverageCommitTime',
            'applyCurrentState' => 'getApplyCurrentState'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['timeStamp'] = isset($data['timeStamp']) ? $data['timeStamp'] : null;
        $this->container['cpuUtil'] = isset($data['cpuUtil']) ? $data['cpuUtil'] : null;
        $this->container['memUtil'] = isset($data['memUtil']) ? $data['memUtil'] : null;
        $this->container['networkIncomingBytesRate'] = isset($data['networkIncomingBytesRate']) ? $data['networkIncomingBytesRate'] : null;
        $this->container['networkOutgoingBytesRate'] = isset($data['networkOutgoingBytesRate']) ? $data['networkOutgoingBytesRate'] : null;
        $this->container['diskReadBytesRate'] = isset($data['diskReadBytesRate']) ? $data['diskReadBytesRate'] : null;
        $this->container['diskWriteBytesRate'] = isset($data['diskWriteBytesRate']) ? $data['diskWriteBytesRate'] : null;
        $this->container['applyRowsRate'] = isset($data['applyRowsRate']) ? $data['applyRowsRate'] : null;
        $this->container['applyTransactionsRate'] = isset($data['applyTransactionsRate']) ? $data['applyTransactionsRate'] : null;
        $this->container['applyDdlRate'] = isset($data['applyDdlRate']) ? $data['applyDdlRate'] : null;
        $this->container['applyAverageExecuteTime'] = isset($data['applyAverageExecuteTime']) ? $data['applyAverageExecuteTime'] : null;
        $this->container['applyAverageCommitTime'] = isset($data['applyAverageCommitTime']) ? $data['applyAverageCommitTime'] : null;
        $this->container['applyCurrentState'] = isset($data['applyCurrentState']) ? $data['applyCurrentState'] : null;
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
    * Gets jobId
    *  任务ID。
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
    * @param string|null $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets nodeId
    *  实例ID。
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
    * @param string|null $nodeId 实例ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets timeStamp
    *  上报时间。
    *
    * @return \DateTime|null
    */
    public function getTimeStamp()
    {
        return $this->container['timeStamp'];
    }

    /**
    * Sets timeStamp
    *
    * @param \DateTime|null $timeStamp 上报时间。
    *
    * @return $this
    */
    public function setTimeStamp($timeStamp)
    {
        $this->container['timeStamp'] = $timeStamp;
        return $this;
    }

    /**
    * Gets cpuUtil
    *  CPU使用率。
    *
    * @return string|null
    */
    public function getCpuUtil()
    {
        return $this->container['cpuUtil'];
    }

    /**
    * Sets cpuUtil
    *
    * @param string|null $cpuUtil CPU使用率。
    *
    * @return $this
    */
    public function setCpuUtil($cpuUtil)
    {
        $this->container['cpuUtil'] = $cpuUtil;
        return $this;
    }

    /**
    * Gets memUtil
    *  内存使用率。
    *
    * @return string|null
    */
    public function getMemUtil()
    {
        return $this->container['memUtil'];
    }

    /**
    * Sets memUtil
    *
    * @param string|null $memUtil 内存使用率。
    *
    * @return $this
    */
    public function setMemUtil($memUtil)
    {
        $this->container['memUtil'] = $memUtil;
        return $this;
    }

    /**
    * Gets networkIncomingBytesRate
    *  网络输入吞吐量。
    *
    * @return string|null
    */
    public function getNetworkIncomingBytesRate()
    {
        return $this->container['networkIncomingBytesRate'];
    }

    /**
    * Sets networkIncomingBytesRate
    *
    * @param string|null $networkIncomingBytesRate 网络输入吞吐量。
    *
    * @return $this
    */
    public function setNetworkIncomingBytesRate($networkIncomingBytesRate)
    {
        $this->container['networkIncomingBytesRate'] = $networkIncomingBytesRate;
        return $this;
    }

    /**
    * Gets networkOutgoingBytesRate
    *  网络输出吞吐量。
    *
    * @return string|null
    */
    public function getNetworkOutgoingBytesRate()
    {
        return $this->container['networkOutgoingBytesRate'];
    }

    /**
    * Sets networkOutgoingBytesRate
    *
    * @param string|null $networkOutgoingBytesRate 网络输出吞吐量。
    *
    * @return $this
    */
    public function setNetworkOutgoingBytesRate($networkOutgoingBytesRate)
    {
        $this->container['networkOutgoingBytesRate'] = $networkOutgoingBytesRate;
        return $this;
    }

    /**
    * Gets diskReadBytesRate
    *  磁盘读吞吐量。
    *
    * @return string|null
    */
    public function getDiskReadBytesRate()
    {
        return $this->container['diskReadBytesRate'];
    }

    /**
    * Sets diskReadBytesRate
    *
    * @param string|null $diskReadBytesRate 磁盘读吞吐量。
    *
    * @return $this
    */
    public function setDiskReadBytesRate($diskReadBytesRate)
    {
        $this->container['diskReadBytesRate'] = $diskReadBytesRate;
        return $this;
    }

    /**
    * Gets diskWriteBytesRate
    *  磁盘写吞吐量。
    *
    * @return string|null
    */
    public function getDiskWriteBytesRate()
    {
        return $this->container['diskWriteBytesRate'];
    }

    /**
    * Sets diskWriteBytesRate
    *
    * @param string|null $diskWriteBytesRate 磁盘写吞吐量。
    *
    * @return $this
    */
    public function setDiskWriteBytesRate($diskWriteBytesRate)
    {
        $this->container['diskWriteBytesRate'] = $diskWriteBytesRate;
        return $this;
    }

    /**
    * Gets applyRowsRate
    *  写目标库频率。
    *
    * @return string|null
    */
    public function getApplyRowsRate()
    {
        return $this->container['applyRowsRate'];
    }

    /**
    * Sets applyRowsRate
    *
    * @param string|null $applyRowsRate 写目标库频率。
    *
    * @return $this
    */
    public function setApplyRowsRate($applyRowsRate)
    {
        $this->container['applyRowsRate'] = $applyRowsRate;
        return $this;
    }

    /**
    * Gets applyTransactionsRate
    *  DML TPS。
    *
    * @return string|null
    */
    public function getApplyTransactionsRate()
    {
        return $this->container['applyTransactionsRate'];
    }

    /**
    * Sets applyTransactionsRate
    *
    * @param string|null $applyTransactionsRate DML TPS。
    *
    * @return $this
    */
    public function setApplyTransactionsRate($applyTransactionsRate)
    {
        $this->container['applyTransactionsRate'] = $applyTransactionsRate;
        return $this;
    }

    /**
    * Gets applyDdlRate
    *  DDL TPS。
    *
    * @return string|null
    */
    public function getApplyDdlRate()
    {
        return $this->container['applyDdlRate'];
    }

    /**
    * Sets applyDdlRate
    *
    * @param string|null $applyDdlRate DDL TPS。
    *
    * @return $this
    */
    public function setApplyDdlRate($applyDdlRate)
    {
        $this->container['applyDdlRate'] = $applyDdlRate;
        return $this;
    }

    /**
    * Gets applyAverageExecuteTime
    *  事务平均执行时间。
    *
    * @return string|null
    */
    public function getApplyAverageExecuteTime()
    {
        return $this->container['applyAverageExecuteTime'];
    }

    /**
    * Sets applyAverageExecuteTime
    *
    * @param string|null $applyAverageExecuteTime 事务平均执行时间。
    *
    * @return $this
    */
    public function setApplyAverageExecuteTime($applyAverageExecuteTime)
    {
        $this->container['applyAverageExecuteTime'] = $applyAverageExecuteTime;
        return $this;
    }

    /**
    * Gets applyAverageCommitTime
    *  事务平均提交时间。
    *
    * @return string|null
    */
    public function getApplyAverageCommitTime()
    {
        return $this->container['applyAverageCommitTime'];
    }

    /**
    * Sets applyAverageCommitTime
    *
    * @param string|null $applyAverageCommitTime 事务平均提交时间。
    *
    * @return $this
    */
    public function setApplyAverageCommitTime($applyAverageCommitTime)
    {
        $this->container['applyAverageCommitTime'] = $applyAverageCommitTime;
        return $this;
    }

    /**
    * Gets applyCurrentState
    *  同步状态。
    *
    * @return string|null
    */
    public function getApplyCurrentState()
    {
        return $this->container['applyCurrentState'];
    }

    /**
    * Sets applyCurrentState
    *
    * @param string|null $applyCurrentState 同步状态。
    *
    * @return $this
    */
    public function setApplyCurrentState($applyCurrentState)
    {
        $this->container['applyCurrentState'] = $applyCurrentState;
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

