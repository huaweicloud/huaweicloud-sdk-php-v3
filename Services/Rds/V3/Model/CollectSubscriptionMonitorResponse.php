<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectSubscriptionMonitorResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectSubscriptionMonitorResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  订阅关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * latency  数据更改的最长延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * agentNotRunning  代理未运行的时长（以小时为单位）。
    * pendingCmdCount  订阅未执行的命令数。
    * estimatedProcessTime  预计执行完未执行的命令数所需时间（以秒为单位）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'latency' => 'int',
            'lastDistSync' => 'string',
            'agentNotRunning' => 'int',
            'pendingCmdCount' => 'int',
            'estimatedProcessTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  订阅关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * latency  数据更改的最长延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * agentNotRunning  代理未运行的时长（以小时为单位）。
    * pendingCmdCount  订阅未执行的命令数。
    * estimatedProcessTime  预计执行完未执行的命令数所需时间（以秒为单位）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'latency' => null,
        'lastDistSync' => null,
        'agentNotRunning' => null,
        'pendingCmdCount' => null,
        'estimatedProcessTime' => null
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
    * status  订阅关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * latency  数据更改的最长延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * agentNotRunning  代理未运行的时长（以小时为单位）。
    * pendingCmdCount  订阅未执行的命令数。
    * estimatedProcessTime  预计执行完未执行的命令数所需时间（以秒为单位）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'latency' => 'latency',
            'lastDistSync' => 'last_dist_sync',
            'agentNotRunning' => 'agent_not_running',
            'pendingCmdCount' => 'pending_cmd_count',
            'estimatedProcessTime' => 'estimated_process_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  订阅关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * latency  数据更改的最长延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * agentNotRunning  代理未运行的时长（以小时为单位）。
    * pendingCmdCount  订阅未执行的命令数。
    * estimatedProcessTime  预计执行完未执行的命令数所需时间（以秒为单位）。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'latency' => 'setLatency',
            'lastDistSync' => 'setLastDistSync',
            'agentNotRunning' => 'setAgentNotRunning',
            'pendingCmdCount' => 'setPendingCmdCount',
            'estimatedProcessTime' => 'setEstimatedProcessTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  订阅关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    * latency  数据更改的最长延迟时间（以秒为单位）。
    * lastDistSync  上一次分发代理运行时间。格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如北京时间偏移显示为+0800。
    * agentNotRunning  代理未运行的时长（以小时为单位）。
    * pendingCmdCount  订阅未执行的命令数。
    * estimatedProcessTime  预计执行完未执行的命令数所需时间（以秒为单位）。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'latency' => 'getLatency',
            'lastDistSync' => 'getLastDistSync',
            'agentNotRunning' => 'getAgentNotRunning',
            'pendingCmdCount' => 'getPendingCmdCount',
            'estimatedProcessTime' => 'getEstimatedProcessTime'
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
        $this->container['latency'] = isset($data['latency']) ? $data['latency'] : null;
        $this->container['lastDistSync'] = isset($data['lastDistSync']) ? $data['lastDistSync'] : null;
        $this->container['agentNotRunning'] = isset($data['agentNotRunning']) ? $data['agentNotRunning'] : null;
        $this->container['pendingCmdCount'] = isset($data['pendingCmdCount']) ? $data['pendingCmdCount'] : null;
        $this->container['estimatedProcessTime'] = isset($data['estimatedProcessTime']) ? $data['estimatedProcessTime'] : null;
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
    *  订阅关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
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
    * @param string|null $status 订阅关联的快照代理的运行状态。取值如下:  started:已启动。 succeeded:成功。 in_progress:正在运行。 idle:空闲。 retrying:重试中。 failed:失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets latency
    *  数据更改的最长延迟时间（以秒为单位）。
    *
    * @return int|null
    */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
    * Sets latency
    *
    * @param int|null $latency 数据更改的最长延迟时间（以秒为单位）。
    *
    * @return $this
    */
    public function setLatency($latency)
    {
        $this->container['latency'] = $latency;
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
    * Gets agentNotRunning
    *  代理未运行的时长（以小时为单位）。
    *
    * @return int|null
    */
    public function getAgentNotRunning()
    {
        return $this->container['agentNotRunning'];
    }

    /**
    * Sets agentNotRunning
    *
    * @param int|null $agentNotRunning 代理未运行的时长（以小时为单位）。
    *
    * @return $this
    */
    public function setAgentNotRunning($agentNotRunning)
    {
        $this->container['agentNotRunning'] = $agentNotRunning;
        return $this;
    }

    /**
    * Gets pendingCmdCount
    *  订阅未执行的命令数。
    *
    * @return int|null
    */
    public function getPendingCmdCount()
    {
        return $this->container['pendingCmdCount'];
    }

    /**
    * Sets pendingCmdCount
    *
    * @param int|null $pendingCmdCount 订阅未执行的命令数。
    *
    * @return $this
    */
    public function setPendingCmdCount($pendingCmdCount)
    {
        $this->container['pendingCmdCount'] = $pendingCmdCount;
        return $this;
    }

    /**
    * Gets estimatedProcessTime
    *  预计执行完未执行的命令数所需时间（以秒为单位）。
    *
    * @return int|null
    */
    public function getEstimatedProcessTime()
    {
        return $this->container['estimatedProcessTime'];
    }

    /**
    * Sets estimatedProcessTime
    *
    * @param int|null $estimatedProcessTime 预计执行完未执行的命令数所需时间（以秒为单位）。
    *
    * @return $this
    */
    public function setEstimatedProcessTime($estimatedProcessTime)
    {
        $this->container['estimatedProcessTime'] = $estimatedProcessTime;
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

