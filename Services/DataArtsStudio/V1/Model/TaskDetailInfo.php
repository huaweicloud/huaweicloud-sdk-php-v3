<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  集成任务ID。
    * taskName  任务名称，长度限制0-57个字符。
    * monitorReportId  DLF作业ID。
    * taskType  任务类型。 - FLINK：Flink类型 - SPARK：Spark类型 - DRS：DRS类型
    * runningStatus  作业运行状态。 - INITIALIZING：初始化中 - SNAPSHOT：全量阶段 - BINLOG：增量阶段
    * externalJobId  计算作业ID，DLI/CCE/DRS执行的作业ID。
    * sourceType  源端类型。
    * targetType  目的端类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * state  任务状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * errorMsg  错误信息。
    * createTime  任务创建时间，毫秒时间戳。
    * updateTime  任务更新时间，毫秒时间戳。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'monitorReportId' => 'string',
            'taskType' => 'string',
            'runningStatus' => 'string',
            'externalJobId' => 'string',
            'sourceType' => 'string',
            'targetType' => 'string',
            'trackingUrl' => 'string',
            'state' => 'string',
            'errorMsg' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  集成任务ID。
    * taskName  任务名称，长度限制0-57个字符。
    * monitorReportId  DLF作业ID。
    * taskType  任务类型。 - FLINK：Flink类型 - SPARK：Spark类型 - DRS：DRS类型
    * runningStatus  作业运行状态。 - INITIALIZING：初始化中 - SNAPSHOT：全量阶段 - BINLOG：增量阶段
    * externalJobId  计算作业ID，DLI/CCE/DRS执行的作业ID。
    * sourceType  源端类型。
    * targetType  目的端类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * state  任务状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * errorMsg  错误信息。
    * createTime  任务创建时间，毫秒时间戳。
    * updateTime  任务更新时间，毫秒时间戳。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'monitorReportId' => null,
        'taskType' => null,
        'runningStatus' => null,
        'externalJobId' => null,
        'sourceType' => null,
        'targetType' => null,
        'trackingUrl' => null,
        'state' => null,
        'errorMsg' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * taskId  集成任务ID。
    * taskName  任务名称，长度限制0-57个字符。
    * monitorReportId  DLF作业ID。
    * taskType  任务类型。 - FLINK：Flink类型 - SPARK：Spark类型 - DRS：DRS类型
    * runningStatus  作业运行状态。 - INITIALIZING：初始化中 - SNAPSHOT：全量阶段 - BINLOG：增量阶段
    * externalJobId  计算作业ID，DLI/CCE/DRS执行的作业ID。
    * sourceType  源端类型。
    * targetType  目的端类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * state  任务状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * errorMsg  错误信息。
    * createTime  任务创建时间，毫秒时间戳。
    * updateTime  任务更新时间，毫秒时间戳。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'monitorReportId' => 'monitor_report_id',
            'taskType' => 'task_type',
            'runningStatus' => 'running_status',
            'externalJobId' => 'external_job_id',
            'sourceType' => 'source_type',
            'targetType' => 'target_type',
            'trackingUrl' => 'tracking_url',
            'state' => 'state',
            'errorMsg' => 'error_msg',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  集成任务ID。
    * taskName  任务名称，长度限制0-57个字符。
    * monitorReportId  DLF作业ID。
    * taskType  任务类型。 - FLINK：Flink类型 - SPARK：Spark类型 - DRS：DRS类型
    * runningStatus  作业运行状态。 - INITIALIZING：初始化中 - SNAPSHOT：全量阶段 - BINLOG：增量阶段
    * externalJobId  计算作业ID，DLI/CCE/DRS执行的作业ID。
    * sourceType  源端类型。
    * targetType  目的端类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * state  任务状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * errorMsg  错误信息。
    * createTime  任务创建时间，毫秒时间戳。
    * updateTime  任务更新时间，毫秒时间戳。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'monitorReportId' => 'setMonitorReportId',
            'taskType' => 'setTaskType',
            'runningStatus' => 'setRunningStatus',
            'externalJobId' => 'setExternalJobId',
            'sourceType' => 'setSourceType',
            'targetType' => 'setTargetType',
            'trackingUrl' => 'setTrackingUrl',
            'state' => 'setState',
            'errorMsg' => 'setErrorMsg',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  集成任务ID。
    * taskName  任务名称，长度限制0-57个字符。
    * monitorReportId  DLF作业ID。
    * taskType  任务类型。 - FLINK：Flink类型 - SPARK：Spark类型 - DRS：DRS类型
    * runningStatus  作业运行状态。 - INITIALIZING：初始化中 - SNAPSHOT：全量阶段 - BINLOG：增量阶段
    * externalJobId  计算作业ID，DLI/CCE/DRS执行的作业ID。
    * sourceType  源端类型。
    * targetType  目的端类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * state  任务状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * errorMsg  错误信息。
    * createTime  任务创建时间，毫秒时间戳。
    * updateTime  任务更新时间，毫秒时间戳。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'monitorReportId' => 'getMonitorReportId',
            'taskType' => 'getTaskType',
            'runningStatus' => 'getRunningStatus',
            'externalJobId' => 'getExternalJobId',
            'sourceType' => 'getSourceType',
            'targetType' => 'getTargetType',
            'trackingUrl' => 'getTrackingUrl',
            'state' => 'getState',
            'errorMsg' => 'getErrorMsg',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const TASK_TYPE_FLINK = 'FLINK';
    const TASK_TYPE_SPARK = 'SPARK';
    const TASK_TYPE_DRS = 'DRS';
    const RUNNING_STATUS_INITIALIZING = 'INITIALIZING';
    const RUNNING_STATUS_SNAPSHOT = 'SNAPSHOT';
    const RUNNING_STATUS_BINLOG = 'BINLOG';
    const STATE_EXCEPTION = 'EXCEPTION';
    const STATE_STOPPING = 'STOPPING';
    const STATE_SUBMITTING = 'SUBMITTING';
    const STATE_RUNNING = 'RUNNING';
    const STATE_STOPPED = 'STOPPED';
    const STATE_SUCCESS = 'SUCCESS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_FLINK,
            self::TASK_TYPE_SPARK,
            self::TASK_TYPE_DRS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRunningStatusAllowableValues()
    {
        return [
            self::RUNNING_STATUS_INITIALIZING,
            self::RUNNING_STATUS_SNAPSHOT,
            self::RUNNING_STATUS_BINLOG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_EXCEPTION,
            self::STATE_STOPPING,
            self::STATE_SUBMITTING,
            self::STATE_RUNNING,
            self::STATE_STOPPED,
            self::STATE_SUCCESS,
        ];
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['monitorReportId'] = isset($data['monitorReportId']) ? $data['monitorReportId'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['runningStatus'] = isset($data['runningStatus']) ? $data['runningStatus'] : null;
        $this->container['externalJobId'] = isset($data['externalJobId']) ? $data['externalJobId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['trackingUrl'] = isset($data['trackingUrl']) ? $data['trackingUrl'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 57)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 57.";
            }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRunningStatusAllowableValues();
                if (!is_null($this->container['runningStatus']) && !in_array($this->container['runningStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runningStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets taskId
    *  集成任务ID。
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 集成任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称，长度限制0-57个字符。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 任务名称，长度限制0-57个字符。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets monitorReportId
    *  DLF作业ID。
    *
    * @return string|null
    */
    public function getMonitorReportId()
    {
        return $this->container['monitorReportId'];
    }

    /**
    * Sets monitorReportId
    *
    * @param string|null $monitorReportId DLF作业ID。
    *
    * @return $this
    */
    public function setMonitorReportId($monitorReportId)
    {
        $this->container['monitorReportId'] = $monitorReportId;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型。 - FLINK：Flink类型 - SPARK：Spark类型 - DRS：DRS类型
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 任务类型。 - FLINK：Flink类型 - SPARK：Spark类型 - DRS：DRS类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets runningStatus
    *  作业运行状态。 - INITIALIZING：初始化中 - SNAPSHOT：全量阶段 - BINLOG：增量阶段
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
    * @param string|null $runningStatus 作业运行状态。 - INITIALIZING：初始化中 - SNAPSHOT：全量阶段 - BINLOG：增量阶段
    *
    * @return $this
    */
    public function setRunningStatus($runningStatus)
    {
        $this->container['runningStatus'] = $runningStatus;
        return $this;
    }

    /**
    * Gets externalJobId
    *  计算作业ID，DLI/CCE/DRS执行的作业ID。
    *
    * @return string|null
    */
    public function getExternalJobId()
    {
        return $this->container['externalJobId'];
    }

    /**
    * Sets externalJobId
    *
    * @param string|null $externalJobId 计算作业ID，DLI/CCE/DRS执行的作业ID。
    *
    * @return $this
    */
    public function setExternalJobId($externalJobId)
    {
        $this->container['externalJobId'] = $externalJobId;
        return $this;
    }

    /**
    * Gets sourceType
    *  源端类型。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 源端类型。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets targetType
    *  目的端类型。
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType 目的端类型。
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets trackingUrl
    *  MRS Flink作业trackingUrl。
    *
    * @return string|null
    */
    public function getTrackingUrl()
    {
        return $this->container['trackingUrl'];
    }

    /**
    * Sets trackingUrl
    *
    * @param string|null $trackingUrl MRS Flink作业trackingUrl。
    *
    * @return $this
    */
    public function setTrackingUrl($trackingUrl)
    {
        $this->container['trackingUrl'] = $trackingUrl;
        return $this;
    }

    /**
    * Gets state
    *  任务状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg 错误信息。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间，毫秒时间戳。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 任务创建时间，毫秒时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
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

