<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BriefRecordItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BriefRecordItems';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  构建任务的ID
    * status  状态
    * duration  构建时长
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * projectId  所属的项目ID
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * branch  代码分支
    * revision  commitId
    * triggerName  触发者名称
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'duration' => 'int',
            'createTime' => 'string',
            'scheduleTime' => 'string',
            'queuedTime' => 'string',
            'startTime' => 'string',
            'finishTime' => 'string',
            'buildDuration' => 'int',
            'pendingDuration' => 'int',
            'projectId' => 'string',
            'buildNo' => 'int',
            'branch' => 'string',
            'revision' => 'string',
            'triggerName' => 'string',
            'dailyBuildNumber' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  构建任务的ID
    * status  状态
    * duration  构建时长
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * projectId  所属的项目ID
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * branch  代码分支
    * revision  commitId
    * triggerName  触发者名称
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'duration' => null,
        'createTime' => null,
        'scheduleTime' => null,
        'queuedTime' => null,
        'startTime' => null,
        'finishTime' => null,
        'buildDuration' => null,
        'pendingDuration' => null,
        'projectId' => null,
        'buildNo' => null,
        'branch' => null,
        'revision' => null,
        'triggerName' => null,
        'dailyBuildNumber' => null
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
    * id  构建任务的ID
    * status  状态
    * duration  构建时长
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * projectId  所属的项目ID
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * branch  代码分支
    * revision  commitId
    * triggerName  触发者名称
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'duration' => 'duration',
            'createTime' => 'create_time',
            'scheduleTime' => 'schedule_time',
            'queuedTime' => 'queued_time',
            'startTime' => 'start_time',
            'finishTime' => 'finish_time',
            'buildDuration' => 'build_duration',
            'pendingDuration' => 'pending_duration',
            'projectId' => 'project_id',
            'buildNo' => 'build_no',
            'branch' => 'branch',
            'revision' => 'revision',
            'triggerName' => 'trigger_name',
            'dailyBuildNumber' => 'daily_build_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  构建任务的ID
    * status  状态
    * duration  构建时长
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * projectId  所属的项目ID
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * branch  代码分支
    * revision  commitId
    * triggerName  触发者名称
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'duration' => 'setDuration',
            'createTime' => 'setCreateTime',
            'scheduleTime' => 'setScheduleTime',
            'queuedTime' => 'setQueuedTime',
            'startTime' => 'setStartTime',
            'finishTime' => 'setFinishTime',
            'buildDuration' => 'setBuildDuration',
            'pendingDuration' => 'setPendingDuration',
            'projectId' => 'setProjectId',
            'buildNo' => 'setBuildNo',
            'branch' => 'setBranch',
            'revision' => 'setRevision',
            'triggerName' => 'setTriggerName',
            'dailyBuildNumber' => 'setDailyBuildNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  构建任务的ID
    * status  状态
    * duration  构建时长
    * createTime  创建时间
    * scheduleTime  构建下发时间
    * queuedTime  构建排队耗时
    * startTime  开始时间
    * finishTime  结束时间
    * buildDuration  子任务构建耗时
    * pendingDuration  等待时间
    * projectId  所属的项目ID
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * branch  代码分支
    * revision  commitId
    * triggerName  触发者名称
    * dailyBuildNumber  构建编号，每日从1开始
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'duration' => 'getDuration',
            'createTime' => 'getCreateTime',
            'scheduleTime' => 'getScheduleTime',
            'queuedTime' => 'getQueuedTime',
            'startTime' => 'getStartTime',
            'finishTime' => 'getFinishTime',
            'buildDuration' => 'getBuildDuration',
            'pendingDuration' => 'getPendingDuration',
            'projectId' => 'getProjectId',
            'buildNo' => 'getBuildNo',
            'branch' => 'getBranch',
            'revision' => 'getRevision',
            'triggerName' => 'getTriggerName',
            'dailyBuildNumber' => 'getDailyBuildNumber'
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['scheduleTime'] = isset($data['scheduleTime']) ? $data['scheduleTime'] : null;
        $this->container['queuedTime'] = isset($data['queuedTime']) ? $data['queuedTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['finishTime'] = isset($data['finishTime']) ? $data['finishTime'] : null;
        $this->container['buildDuration'] = isset($data['buildDuration']) ? $data['buildDuration'] : null;
        $this->container['pendingDuration'] = isset($data['pendingDuration']) ? $data['pendingDuration'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['buildNo'] = isset($data['buildNo']) ? $data['buildNo'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['triggerName'] = isset($data['triggerName']) ? $data['triggerName'] : null;
        $this->container['dailyBuildNumber'] = isset($data['dailyBuildNumber']) ? $data['dailyBuildNumber'] : null;
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
    *  构建任务的ID
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
    * @param string|null $id 构建任务的ID
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
    *  状态
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
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets projectId
    *  所属的项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 所属的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets buildNo
    *  构建任务的构建编号，从1开始，每次构建递增1
    *
    * @return int|null
    */
    public function getBuildNo()
    {
        return $this->container['buildNo'];
    }

    /**
    * Sets buildNo
    *
    * @param int|null $buildNo 构建任务的构建编号，从1开始，每次构建递增1
    *
    * @return $this
    */
    public function setBuildNo($buildNo)
    {
        $this->container['buildNo'] = $buildNo;
        return $this;
    }

    /**
    * Gets branch
    *  代码分支
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch 代码分支
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets revision
    *  commitId
    *
    * @return string|null
    */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
    * Sets revision
    *
    * @param string|null $revision commitId
    *
    * @return $this
    */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;
        return $this;
    }

    /**
    * Gets triggerName
    *  触发者名称
    *
    * @return string|null
    */
    public function getTriggerName()
    {
        return $this->container['triggerName'];
    }

    /**
    * Sets triggerName
    *
    * @param string|null $triggerName 触发者名称
    *
    * @return $this
    */
    public function setTriggerName($triggerName)
    {
        $this->container['triggerName'] = $triggerName;
        return $this;
    }

    /**
    * Gets dailyBuildNumber
    *  构建编号，每日从1开始
    *
    * @return string|null
    */
    public function getDailyBuildNumber()
    {
        return $this->container['dailyBuildNumber'];
    }

    /**
    * Sets dailyBuildNumber
    *
    * @param string|null $dailyBuildNumber 构建编号，每日从1开始
    *
    * @return $this
    */
    public function setDailyBuildNumber($dailyBuildNumber)
    {
        $this->container['dailyBuildNumber'] = $dailyBuildNumber;
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

