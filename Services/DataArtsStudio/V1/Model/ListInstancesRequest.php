<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * name  规则名称
    * taskType  任务实例类型 QUALITY_TASK:质量作业 CONSISTENCY_TASK:对账作业
    * runStatus  状态, RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常,SUSPENDING:暂停中,UNKNOWN:未定义
    * notifyStatus  通知状态 NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * limit  每页显示的条目数量,最大值为100
    * offset  分页偏移量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'name' => 'string',
            'taskType' => 'string',
            'runStatus' => 'string',
            'notifyStatus' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * name  规则名称
    * taskType  任务实例类型 QUALITY_TASK:质量作业 CONSISTENCY_TASK:对账作业
    * runStatus  状态, RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常,SUSPENDING:暂停中,UNKNOWN:未定义
    * notifyStatus  通知状态 NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * limit  每页显示的条目数量,最大值为100
    * offset  分页偏移量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'name' => null,
        'taskType' => null,
        'runStatus' => null,
        'notifyStatus' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'limit' => 'int32',
        'offset' => 'int32'
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
    * workspace  DataArts Studio工作空间ID
    * name  规则名称
    * taskType  任务实例类型 QUALITY_TASK:质量作业 CONSISTENCY_TASK:对账作业
    * runStatus  状态, RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常,SUSPENDING:暂停中,UNKNOWN:未定义
    * notifyStatus  通知状态 NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * limit  每页显示的条目数量,最大值为100
    * offset  分页偏移量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'name' => 'name',
            'taskType' => 'task_type',
            'runStatus' => 'run_status',
            'notifyStatus' => 'notify_status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * name  规则名称
    * taskType  任务实例类型 QUALITY_TASK:质量作业 CONSISTENCY_TASK:对账作业
    * runStatus  状态, RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常,SUSPENDING:暂停中,UNKNOWN:未定义
    * notifyStatus  通知状态 NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * limit  每页显示的条目数量,最大值为100
    * offset  分页偏移量
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'name' => 'setName',
            'taskType' => 'setTaskType',
            'runStatus' => 'setRunStatus',
            'notifyStatus' => 'setNotifyStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * name  规则名称
    * taskType  任务实例类型 QUALITY_TASK:质量作业 CONSISTENCY_TASK:对账作业
    * runStatus  状态, RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常,SUSPENDING:暂停中,UNKNOWN:未定义
    * notifyStatus  通知状态 NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    * startTime  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    * endTime  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    * limit  每页显示的条目数量,最大值为100
    * offset  分页偏移量
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'name' => 'getName',
            'taskType' => 'getTaskType',
            'runStatus' => 'getRunStatus',
            'notifyStatus' => 'getNotifyStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
    const TASK_TYPE_QUALITY_TASK = 'QUALITY_TASK';
    const TASK_TYPE_CONSISTENCY_TASK = 'CONSISTENCY_TASK';
    const RUN_STATUS_SUCCESS = 'SUCCESS';
    const RUN_STATUS_FAILED = 'FAILED';
    const RUN_STATUS_RUNNING = 'RUNNING';
    const RUN_STATUS_ALARMING = 'ALARMING';
    const NOTIFY_STATUS_SUCCESS = 'SUCCESS';
    const NOTIFY_STATUS_FAILED = 'FAILED';
    const NOTIFY_STATUS_NOT_TRIGGERED = 'NOT_TRIGGERED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_QUALITY_TASK,
            self::TASK_TYPE_CONSISTENCY_TASK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRunStatusAllowableValues()
    {
        return [
            self::RUN_STATUS_SUCCESS,
            self::RUN_STATUS_FAILED,
            self::RUN_STATUS_RUNNING,
            self::RUN_STATUS_ALARMING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotifyStatusAllowableValues()
    {
        return [
            self::NOTIFY_STATUS_SUCCESS,
            self::NOTIFY_STATUS_FAILED,
            self::NOTIFY_STATUS_NOT_TRIGGERED,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['runStatus'] = isset($data['runStatus']) ? $data['runStatus'] : null;
        $this->container['notifyStatus'] = isset($data['notifyStatus']) ? $data['notifyStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getRunStatusAllowableValues();
                if (!is_null($this->container['runStatus']) && !in_array($this->container['runStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'runStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNotifyStatusAllowableValues();
                if (!is_null($this->container['notifyStatus']) && !in_array($this->container['notifyStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notifyStatus', must be one of '%s'",
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets taskType
    *  任务实例类型 QUALITY_TASK:质量作业 CONSISTENCY_TASK:对账作业
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
    * @param string|null $taskType 任务实例类型 QUALITY_TASK:质量作业 CONSISTENCY_TASK:对账作业
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets runStatus
    *  状态, RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常,SUSPENDING:暂停中,UNKNOWN:未定义
    *
    * @return string|null
    */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
    * Sets runStatus
    *
    * @param string|null $runStatus 状态, RUNNING:运行中,FAILED:失败,ALARMING:报警,SUCCESS:正常,SUSPENDING:暂停中,UNKNOWN:未定义
    *
    * @return $this
    */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;
        return $this;
    }

    /**
    * Gets notifyStatus
    *  通知状态 NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    *
    * @return string|null
    */
    public function getNotifyStatus()
    {
        return $this->container['notifyStatus'];
    }

    /**
    * Sets notifyStatus
    *
    * @param string|null $notifyStatus 通知状态 NOT_TRIGGERED:未触发,SUCCESS:成功,FAILED:失败
    *
    * @return $this
    */
    public function setNotifyStatus($notifyStatus)
    {
        $this->container['notifyStatus'] = $notifyStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 最近运行时间查询区间的开始时间,13位时间戳(精确到毫秒)
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 最近运行时间查询区间的结束时间,13位时间戳(精确到毫秒)
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量,最大值为100
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量,最大值为100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

