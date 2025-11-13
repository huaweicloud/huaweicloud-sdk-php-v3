<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectPublicationMonitorResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectPublicationMonitorResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  发布关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * worstLatency  数据更改的最长延迟时间（以秒为单位）。
    * bestLatency  数据更改的最短延迟时间（以秒为单位）。
    * averageLatency  数据更改的平均延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * replicatedTransactions  等待传送到分发数据库的事务数。
    * replicationRateTrans  平均每秒传送到分发数据库的事务数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'worstLatency' => 'int',
            'bestLatency' => 'int',
            'averageLatency' => 'int',
            'lastDistSync' => 'string',
            'replicatedTransactions' => 'int',
            'replicationRateTrans' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  发布关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * worstLatency  数据更改的最长延迟时间（以秒为单位）。
    * bestLatency  数据更改的最短延迟时间（以秒为单位）。
    * averageLatency  数据更改的平均延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * replicatedTransactions  等待传送到分发数据库的事务数。
    * replicationRateTrans  平均每秒传送到分发数据库的事务数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'worstLatency' => null,
        'bestLatency' => null,
        'averageLatency' => null,
        'lastDistSync' => null,
        'replicatedTransactions' => null,
        'replicationRateTrans' => null
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
    * status  发布关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * worstLatency  数据更改的最长延迟时间（以秒为单位）。
    * bestLatency  数据更改的最短延迟时间（以秒为单位）。
    * averageLatency  数据更改的平均延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * replicatedTransactions  等待传送到分发数据库的事务数。
    * replicationRateTrans  平均每秒传送到分发数据库的事务数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'worstLatency' => 'worst_latency',
            'bestLatency' => 'best_latency',
            'averageLatency' => 'average_latency',
            'lastDistSync' => 'last_dist_sync',
            'replicatedTransactions' => 'replicated_transactions',
            'replicationRateTrans' => 'replication_rate_trans'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  发布关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * worstLatency  数据更改的最长延迟时间（以秒为单位）。
    * bestLatency  数据更改的最短延迟时间（以秒为单位）。
    * averageLatency  数据更改的平均延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * replicatedTransactions  等待传送到分发数据库的事务数。
    * replicationRateTrans  平均每秒传送到分发数据库的事务数。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'worstLatency' => 'setWorstLatency',
            'bestLatency' => 'setBestLatency',
            'averageLatency' => 'setAverageLatency',
            'lastDistSync' => 'setLastDistSync',
            'replicatedTransactions' => 'setReplicatedTransactions',
            'replicationRateTrans' => 'setReplicationRateTrans'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  发布关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * worstLatency  数据更改的最长延迟时间（以秒为单位）。
    * bestLatency  数据更改的最短延迟时间（以秒为单位）。
    * averageLatency  数据更改的平均延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * replicatedTransactions  等待传送到分发数据库的事务数。
    * replicationRateTrans  平均每秒传送到分发数据库的事务数。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'worstLatency' => 'getWorstLatency',
            'bestLatency' => 'getBestLatency',
            'averageLatency' => 'getAverageLatency',
            'lastDistSync' => 'getLastDistSync',
            'replicatedTransactions' => 'getReplicatedTransactions',
            'replicationRateTrans' => 'getReplicationRateTrans'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['worstLatency'] = isset($data['worstLatency']) ? $data['worstLatency'] : null;
        $this->container['bestLatency'] = isset($data['bestLatency']) ? $data['bestLatency'] : null;
        $this->container['averageLatency'] = isset($data['averageLatency']) ? $data['averageLatency'] : null;
        $this->container['lastDistSync'] = isset($data['lastDistSync']) ? $data['lastDistSync'] : null;
        $this->container['replicatedTransactions'] = isset($data['replicatedTransactions']) ? $data['replicatedTransactions'] : null;
        $this->container['replicationRateTrans'] = isset($data['replicationRateTrans']) ? $data['replicationRateTrans'] : null;
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
    * Gets status
    *  发布关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
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
    * @param string|null $status 发布关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets worstLatency
    *  数据更改的最长延迟时间（以秒为单位）。
    *
    * @return int|null
    */
    public function getWorstLatency()
    {
        return $this->container['worstLatency'];
    }

    /**
    * Sets worstLatency
    *
    * @param int|null $worstLatency 数据更改的最长延迟时间（以秒为单位）。
    *
    * @return $this
    */
    public function setWorstLatency($worstLatency)
    {
        $this->container['worstLatency'] = $worstLatency;
        return $this;
    }

    /**
    * Gets bestLatency
    *  数据更改的最短延迟时间（以秒为单位）。
    *
    * @return int|null
    */
    public function getBestLatency()
    {
        return $this->container['bestLatency'];
    }

    /**
    * Sets bestLatency
    *
    * @param int|null $bestLatency 数据更改的最短延迟时间（以秒为单位）。
    *
    * @return $this
    */
    public function setBestLatency($bestLatency)
    {
        $this->container['bestLatency'] = $bestLatency;
        return $this;
    }

    /**
    * Gets averageLatency
    *  数据更改的平均延迟时间（以秒为单位）。
    *
    * @return int|null
    */
    public function getAverageLatency()
    {
        return $this->container['averageLatency'];
    }

    /**
    * Sets averageLatency
    *
    * @param int|null $averageLatency 数据更改的平均延迟时间（以秒为单位）。
    *
    * @return $this
    */
    public function setAverageLatency($averageLatency)
    {
        $this->container['averageLatency'] = $averageLatency;
        return $this;
    }

    /**
    * Gets lastDistSync
    *  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return string|null
    */
    public function getLastDistSync()
    {
        return $this->container['lastDistSync'];
    }

    /**
    * Sets lastDistSync
    *
    * @param string|null $lastDistSync 上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    *
    * @return $this
    */
    public function setLastDistSync($lastDistSync)
    {
        $this->container['lastDistSync'] = $lastDistSync;
        return $this;
    }

    /**
    * Gets replicatedTransactions
    *  等待传送到分发数据库的事务数。
    *
    * @return int|null
    */
    public function getReplicatedTransactions()
    {
        return $this->container['replicatedTransactions'];
    }

    /**
    * Sets replicatedTransactions
    *
    * @param int|null $replicatedTransactions 等待传送到分发数据库的事务数。
    *
    * @return $this
    */
    public function setReplicatedTransactions($replicatedTransactions)
    {
        $this->container['replicatedTransactions'] = $replicatedTransactions;
        return $this;
    }

    /**
    * Gets replicationRateTrans
    *  平均每秒传送到分发数据库的事务数。
    *
    * @return float|null
    */
    public function getReplicationRateTrans()
    {
        return $this->container['replicationRateTrans'];
    }

    /**
    * Sets replicationRateTrans
    *
    * @param float|null $replicationRateTrans 平均每秒传送到分发数据库的事务数。
    *
    * @return $this
    */
    public function setReplicationRateTrans($replicationRateTrans)
    {
        $this->container['replicationRateTrans'] = $replicationRateTrans;
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

