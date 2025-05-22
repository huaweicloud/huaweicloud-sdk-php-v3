<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildStageRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BuildStageRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  步骤编号
    * status  步骤状态
    * statusCode  状态码
    * logStatus  日志状态
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * duration  构建时长
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * buildRecordId  构建记录ID
    * executionId  八爪鱼任务ID
    * executionStageName  步骤名称
    * displayName  步骤名称
    * nodeId  节点ID
    * sequence  序号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'statusCode' => 'int',
            'logStatus' => 'string',
            'createTime' => 'string',
            'scheduleTime' => 'string',
            'queuedTime' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'duration' => 'int',
            'buildDuration' => 'int',
            'pendingDuration' => 'int',
            'buildRecordId' => 'string',
            'executionId' => 'string',
            'executionStageName' => 'string',
            'displayName' => 'string',
            'nodeId' => 'int',
            'sequence' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  步骤编号
    * status  步骤状态
    * statusCode  状态码
    * logStatus  日志状态
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * duration  构建时长
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * buildRecordId  构建记录ID
    * executionId  八爪鱼任务ID
    * executionStageName  步骤名称
    * displayName  步骤名称
    * nodeId  节点ID
    * sequence  序号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'statusCode' => null,
        'logStatus' => null,
        'createTime' => null,
        'scheduleTime' => null,
        'queuedTime' => null,
        'startTime' => null,
        'finishTime' => null,
        'duration' => null,
        'buildDuration' => null,
        'pendingDuration' => null,
        'buildRecordId' => null,
        'executionId' => null,
        'executionStageName' => null,
        'displayName' => null,
        'nodeId' => null,
        'sequence' => null
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
    * id  步骤编号
    * status  步骤状态
    * statusCode  状态码
    * logStatus  日志状态
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * duration  构建时长
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * buildRecordId  构建记录ID
    * executionId  八爪鱼任务ID
    * executionStageName  步骤名称
    * displayName  步骤名称
    * nodeId  节点ID
    * sequence  序号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'statusCode' => 'status_code',
            'logStatus' => 'log_status',
            'createTime' => 'create_time',
            'scheduleTime' => 'schedule_time',
            'queuedTime' => 'queued_time',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'duration' => 'duration',
            'buildDuration' => 'build_duration',
            'pendingDuration' => 'pending_duration',
            'buildRecordId' => 'build_record_id',
            'executionId' => 'execution_id',
            'executionStageName' => 'execution_stage_name',
            'displayName' => 'display_name',
            'nodeId' => 'node_id',
            'sequence' => 'sequence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  步骤编号
    * status  步骤状态
    * statusCode  状态码
    * logStatus  日志状态
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * duration  构建时长
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * buildRecordId  构建记录ID
    * executionId  八爪鱼任务ID
    * executionStageName  步骤名称
    * displayName  步骤名称
    * nodeId  节点ID
    * sequence  序号
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'statusCode' => 'setStatusCode',
            'logStatus' => 'setLogStatus',
            'createTime' => 'setCreateTime',
            'scheduleTime' => 'setScheduleTime',
            'queuedTime' => 'setQueuedTime',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'duration' => 'setDuration',
            'buildDuration' => 'setBuildDuration',
            'pendingDuration' => 'setPendingDuration',
            'buildRecordId' => 'setBuildRecordId',
            'executionId' => 'setExecutionId',
            'executionStageName' => 'setExecutionStageName',
            'displayName' => 'setDisplayName',
            'nodeId' => 'setNodeId',
            'sequence' => 'setSequence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  步骤编号
    * status  步骤状态
    * statusCode  状态码
    * logStatus  日志状态
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * duration  构建时长
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * buildRecordId  构建记录ID
    * executionId  八爪鱼任务ID
    * executionStageName  步骤名称
    * displayName  步骤名称
    * nodeId  节点ID
    * sequence  序号
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'statusCode' => 'getStatusCode',
            'logStatus' => 'getLogStatus',
            'createTime' => 'getCreateTime',
            'scheduleTime' => 'getScheduleTime',
            'queuedTime' => 'getQueuedTime',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'duration' => 'getDuration',
            'buildDuration' => 'getBuildDuration',
            'pendingDuration' => 'getPendingDuration',
            'buildRecordId' => 'getBuildRecordId',
            'executionId' => 'getExecutionId',
            'executionStageName' => 'getExecutionStageName',
            'displayName' => 'getDisplayName',
            'nodeId' => 'getNodeId',
            'sequence' => 'getSequence'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusCode'] = isset($data['statusCode']) ? $data['statusCode'] : null;
        $this->container['logStatus'] = isset($data['logStatus']) ? $data['logStatus'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['scheduleTime'] = isset($data['scheduleTime']) ? $data['scheduleTime'] : null;
        $this->container['queuedTime'] = isset($data['queuedTime']) ? $data['queuedTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['buildDuration'] = isset($data['buildDuration']) ? $data['buildDuration'] : null;
        $this->container['pendingDuration'] = isset($data['pendingDuration']) ? $data['pendingDuration'] : null;
        $this->container['buildRecordId'] = isset($data['buildRecordId']) ? $data['buildRecordId'] : null;
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['executionStageName'] = isset($data['executionStageName']) ? $data['executionStageName'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
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
    * Gets id
    *  步骤编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 步骤编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  步骤状态
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
    * @param string|null $status 步骤状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusCode
    *  状态码
    *
    * @return int|null
    */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
    * Sets statusCode
    *
    * @param int|null $statusCode 状态码
    *
    * @return $this
    */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;
        return $this;
    }

    /**
    * Gets logStatus
    *  日志状态
    *
    * @return string|null
    */
    public function getLogStatus()
    {
        return $this->container['logStatus'];
    }

    /**
    * Sets logStatus
    *
    * @param string|null $logStatus 日志状态
    *
    * @return $this
    */
    public function setLogStatus($logStatus)
    {
        $this->container['logStatus'] = $logStatus;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets scheduleTime
    *  构建下发时间
    *
    * @return string|null
    */
    public function getScheduleTime()
    {
        return $this->container['scheduleTime'];
    }

    /**
    * Sets scheduleTime
    *
    * @param string|null $scheduleTime 构建下发时间
    *
    * @return $this
    */
    public function setScheduleTime($scheduleTime)
    {
        $this->container['scheduleTime'] = $scheduleTime;
        return $this;
    }

    /**
    * Gets queuedTime
    *  构建排队耗时
    *
    * @return string|null
    */
    public function getQueuedTime()
    {
        return $this->container['queuedTime'];
    }

    /**
    * Sets queuedTime
    *
    * @param string|null $queuedTime 构建排队耗时
    *
    * @return $this
    */
    public function setQueuedTime($queuedTime)
    {
        $this->container['queuedTime'] = $queuedTime;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间
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
    *  结束时间
    *
    * @return string|null
    */
    public function getFinishTime()
    {
        return $this->container['finishTime'];
    }

    /**
    * Sets finishTime
    *
    * @param string|null $finishTime 结束时间
    *
    * @return $this
    */
    public function setFinishTime($finishTime)
    {
        $this->container['finishTime'] = $finishTime;
        return $this;
    }

    /**
    * Gets duration
    *  构建时长
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 构建时长
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets buildDuration
    *  子任务构建耗时
    *
    * @return int|null
    */
    public function getBuildDuration()
    {
        return $this->container['buildDuration'];
    }

    /**
    * Sets buildDuration
    *
    * @param int|null $buildDuration 子任务构建耗时
    *
    * @return $this
    */
    public function setBuildDuration($buildDuration)
    {
        $this->container['buildDuration'] = $buildDuration;
        return $this;
    }

    /**
    * Gets pendingDuration
    *  等待时间
    *
    * @return int|null
    */
    public function getPendingDuration()
    {
        return $this->container['pendingDuration'];
    }

    /**
    * Sets pendingDuration
    *
    * @param int|null $pendingDuration 等待时间
    *
    * @return $this
    */
    public function setPendingDuration($pendingDuration)
    {
        $this->container['pendingDuration'] = $pendingDuration;
        return $this;
    }

    /**
    * Gets buildRecordId
    *  构建记录ID
    *
    * @return string|null
    */
    public function getBuildRecordId()
    {
        return $this->container['buildRecordId'];
    }

    /**
    * Sets buildRecordId
    *
    * @param string|null $buildRecordId 构建记录ID
    *
    * @return $this
    */
    public function setBuildRecordId($buildRecordId)
    {
        $this->container['buildRecordId'] = $buildRecordId;
        return $this;
    }

    /**
    * Gets executionId
    *  八爪鱼任务ID
    *
    * @return string|null
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string|null $executionId 八爪鱼任务ID
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets executionStageName
    *  步骤名称
    *
    * @return string|null
    */
    public function getExecutionStageName()
    {
        return $this->container['executionStageName'];
    }

    /**
    * Sets executionStageName
    *
    * @param string|null $executionStageName 步骤名称
    *
    * @return $this
    */
    public function setExecutionStageName($executionStageName)
    {
        $this->container['executionStageName'] = $executionStageName;
        return $this;
    }

    /**
    * Gets displayName
    *  步骤名称
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 步骤名称
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return int|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param int|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets sequence
    *  序号
    *
    * @return int|null
    */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
    * Sets sequence
    *
    * @param int|null $sequence 序号
    *
    * @return $this
    */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;
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

