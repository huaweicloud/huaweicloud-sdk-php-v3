<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobMonitorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobMonitorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * updateTime  任务更新时间，毫秒时间戳。
    * nodeId  作业源信息。
    * consumePosition  作业消费位点。
    * originPosition  起始位点。
    * runningStatus  作业全量增量运行状态。 - INITIALIZING：初始化 - BINLOG：增量同步 - SNAPSHOT：全量同步
    * totalTaskProps  单节点聚合后的监控指标。
    * taskInfo  连接列表。
    * snapshotProgress  snapshotProgress
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'updateTime' => 'int',
            'nodeId' => 'string',
            'consumePosition' => 'string',
            'originPosition' => 'string',
            'runningStatus' => 'string',
            'totalTaskProps' => 'object',
            'taskInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MonitorTaskInfo[]',
            'snapshotProgress' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotProgressInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * updateTime  任务更新时间，毫秒时间戳。
    * nodeId  作业源信息。
    * consumePosition  作业消费位点。
    * originPosition  起始位点。
    * runningStatus  作业全量增量运行状态。 - INITIALIZING：初始化 - BINLOG：增量同步 - SNAPSHOT：全量同步
    * totalTaskProps  单节点聚合后的监控指标。
    * taskInfo  连接列表。
    * snapshotProgress  snapshotProgress
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'updateTime' => 'int64',
        'nodeId' => null,
        'consumePosition' => null,
        'originPosition' => null,
        'runningStatus' => null,
        'totalTaskProps' => null,
        'taskInfo' => null,
        'snapshotProgress' => null
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
    * updateTime  任务更新时间，毫秒时间戳。
    * nodeId  作业源信息。
    * consumePosition  作业消费位点。
    * originPosition  起始位点。
    * runningStatus  作业全量增量运行状态。 - INITIALIZING：初始化 - BINLOG：增量同步 - SNAPSHOT：全量同步
    * totalTaskProps  单节点聚合后的监控指标。
    * taskInfo  连接列表。
    * snapshotProgress  snapshotProgress
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'updateTime' => 'update_time',
            'nodeId' => 'node_id',
            'consumePosition' => 'consume_position',
            'originPosition' => 'origin_position',
            'runningStatus' => 'running_status',
            'totalTaskProps' => 'total_task_props',
            'taskInfo' => 'task_info',
            'snapshotProgress' => 'snapshot_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * updateTime  任务更新时间，毫秒时间戳。
    * nodeId  作业源信息。
    * consumePosition  作业消费位点。
    * originPosition  起始位点。
    * runningStatus  作业全量增量运行状态。 - INITIALIZING：初始化 - BINLOG：增量同步 - SNAPSHOT：全量同步
    * totalTaskProps  单节点聚合后的监控指标。
    * taskInfo  连接列表。
    * snapshotProgress  snapshotProgress
    *
    * @var string[]
    */
    protected static $setters = [
            'updateTime' => 'setUpdateTime',
            'nodeId' => 'setNodeId',
            'consumePosition' => 'setConsumePosition',
            'originPosition' => 'setOriginPosition',
            'runningStatus' => 'setRunningStatus',
            'totalTaskProps' => 'setTotalTaskProps',
            'taskInfo' => 'setTaskInfo',
            'snapshotProgress' => 'setSnapshotProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * updateTime  任务更新时间，毫秒时间戳。
    * nodeId  作业源信息。
    * consumePosition  作业消费位点。
    * originPosition  起始位点。
    * runningStatus  作业全量增量运行状态。 - INITIALIZING：初始化 - BINLOG：增量同步 - SNAPSHOT：全量同步
    * totalTaskProps  单节点聚合后的监控指标。
    * taskInfo  连接列表。
    * snapshotProgress  snapshotProgress
    *
    * @var string[]
    */
    protected static $getters = [
            'updateTime' => 'getUpdateTime',
            'nodeId' => 'getNodeId',
            'consumePosition' => 'getConsumePosition',
            'originPosition' => 'getOriginPosition',
            'runningStatus' => 'getRunningStatus',
            'totalTaskProps' => 'getTotalTaskProps',
            'taskInfo' => 'getTaskInfo',
            'snapshotProgress' => 'getSnapshotProgress'
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
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['consumePosition'] = isset($data['consumePosition']) ? $data['consumePosition'] : null;
        $this->container['originPosition'] = isset($data['originPosition']) ? $data['originPosition'] : null;
        $this->container['runningStatus'] = isset($data['runningStatus']) ? $data['runningStatus'] : null;
        $this->container['totalTaskProps'] = isset($data['totalTaskProps']) ? $data['totalTaskProps'] : null;
        $this->container['taskInfo'] = isset($data['taskInfo']) ? $data['taskInfo'] : null;
        $this->container['snapshotProgress'] = isset($data['snapshotProgress']) ? $data['snapshotProgress'] : null;
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
    * Gets updateTime
    *  任务更新时间，毫秒时间戳。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 任务更新时间，毫秒时间戳。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets nodeId
    *  作业源信息。
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
    * @param string|null $nodeId 作业源信息。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets consumePosition
    *  作业消费位点。
    *
    * @return string|null
    */
    public function getConsumePosition()
    {
        return $this->container['consumePosition'];
    }

    /**
    * Sets consumePosition
    *
    * @param string|null $consumePosition 作业消费位点。
    *
    * @return $this
    */
    public function setConsumePosition($consumePosition)
    {
        $this->container['consumePosition'] = $consumePosition;
        return $this;
    }

    /**
    * Gets originPosition
    *  起始位点。
    *
    * @return string|null
    */
    public function getOriginPosition()
    {
        return $this->container['originPosition'];
    }

    /**
    * Sets originPosition
    *
    * @param string|null $originPosition 起始位点。
    *
    * @return $this
    */
    public function setOriginPosition($originPosition)
    {
        $this->container['originPosition'] = $originPosition;
        return $this;
    }

    /**
    * Gets runningStatus
    *  作业全量增量运行状态。 - INITIALIZING：初始化 - BINLOG：增量同步 - SNAPSHOT：全量同步
    *
    * @return string|null
    */
    public function getRunningStatus()
    {
        return $this->container['runningStatus'];
    }

    /**
    * Sets runningStatus
    *
    * @param string|null $runningStatus 作业全量增量运行状态。 - INITIALIZING：初始化 - BINLOG：增量同步 - SNAPSHOT：全量同步
    *
    * @return $this
    */
    public function setRunningStatus($runningStatus)
    {
        $this->container['runningStatus'] = $runningStatus;
        return $this;
    }

    /**
    * Gets totalTaskProps
    *  单节点聚合后的监控指标。
    *
    * @return object|null
    */
    public function getTotalTaskProps()
    {
        return $this->container['totalTaskProps'];
    }

    /**
    * Sets totalTaskProps
    *
    * @param object|null $totalTaskProps 单节点聚合后的监控指标。
    *
    * @return $this
    */
    public function setTotalTaskProps($totalTaskProps)
    {
        $this->container['totalTaskProps'] = $totalTaskProps;
        return $this;
    }

    /**
    * Gets taskInfo
    *  连接列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MonitorTaskInfo[]|null
    */
    public function getTaskInfo()
    {
        return $this->container['taskInfo'];
    }

    /**
    * Sets taskInfo
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MonitorTaskInfo[]|null $taskInfo 连接列表。
    *
    * @return $this
    */
    public function setTaskInfo($taskInfo)
    {
        $this->container['taskInfo'] = $taskInfo;
        return $this;
    }

    /**
    * Gets snapshotProgress
    *  snapshotProgress
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotProgressInfo|null
    */
    public function getSnapshotProgress()
    {
        return $this->container['snapshotProgress'];
    }

    /**
    * Sets snapshotProgress
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SnapshotProgressInfo|null $snapshotProgress snapshotProgress
    *
    * @return $this
    */
    public function setSnapshotProgress($snapshotProgress)
    {
        $this->container['snapshotProgress'] = $snapshotProgress;
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

