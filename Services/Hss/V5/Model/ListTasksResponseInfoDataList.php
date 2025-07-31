<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTasksResponseInfoDataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTasksResponseInfo_data_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  本次创建任务的id
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskName  任务名称
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * startTime  任务开始的时间
    * endTime  任务结束的时间
    * estimatedTime  预计当前任务结束还需要的时间，单位为分钟
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskType' => 'string',
            'taskName' => 'string',
            'triggerType' => 'string',
            'taskStatus' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'estimatedTime' => 'int',
            'clusterScanInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTasksResponseInfoClusterScanInfo',
            'iacScanInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTasksResponseInfoIacScanInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  本次创建任务的id
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskName  任务名称
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * startTime  任务开始的时间
    * endTime  任务结束的时间
    * estimatedTime  预计当前任务结束还需要的时间，单位为分钟
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskType' => null,
        'taskName' => null,
        'triggerType' => null,
        'taskStatus' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'estimatedTime' => 'int32',
        'clusterScanInfo' => null,
        'iacScanInfo' => null
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
    * taskId  本次创建任务的id
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskName  任务名称
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * startTime  任务开始的时间
    * endTime  任务结束的时间
    * estimatedTime  预计当前任务结束还需要的时间，单位为分钟
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskType' => 'task_type',
            'taskName' => 'task_name',
            'triggerType' => 'trigger_type',
            'taskStatus' => 'task_status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'estimatedTime' => 'estimated_time',
            'clusterScanInfo' => 'cluster_scan_info',
            'iacScanInfo' => 'iac_scan_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  本次创建任务的id
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskName  任务名称
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * startTime  任务开始的时间
    * endTime  任务结束的时间
    * estimatedTime  预计当前任务结束还需要的时间，单位为分钟
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskType' => 'setTaskType',
            'taskName' => 'setTaskName',
            'triggerType' => 'setTriggerType',
            'taskStatus' => 'setTaskStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'estimatedTime' => 'setEstimatedTime',
            'clusterScanInfo' => 'setClusterScanInfo',
            'iacScanInfo' => 'setIacScanInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  本次创建任务的id
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskName  任务名称
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * startTime  任务开始的时间
    * endTime  任务结束的时间
    * estimatedTime  预计当前任务结束还需要的时间，单位为分钟
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskType' => 'getTaskType',
            'taskName' => 'getTaskName',
            'triggerType' => 'getTriggerType',
            'taskStatus' => 'getTaskStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'estimatedTime' => 'getEstimatedTime',
            'clusterScanInfo' => 'getClusterScanInfo',
            'iacScanInfo' => 'getIacScanInfo'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['estimatedTime'] = isset($data['estimatedTime']) ? $data['estimatedTime'] : null;
        $this->container['clusterScanInfo'] = isset($data['clusterScanInfo']) ? $data['clusterScanInfo'] : null;
        $this->container['iacScanInfo'] = isset($data['iacScanInfo']) ? $data['iacScanInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskType']) && (mb_strlen($this->container['taskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskType']) && !preg_match("/^cluster_scan|iac_scan$/", $this->container['taskType'])) {
                $invalidProperties[] = "invalid value for 'taskType', must be conform to the pattern /^cluster_scan|iac_scan$/.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 64)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['triggerType']) && !preg_match("/^manual|schedule$/", $this->container['triggerType'])) {
                $invalidProperties[] = "invalid value for 'triggerType', must be conform to the pattern /^manual|schedule$/.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskStatus']) && (mb_strlen($this->container['taskStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskStatus']) && !preg_match("/^ready|running|finished$/", $this->container['taskStatus'])) {
                $invalidProperties[] = "invalid value for 'taskStatus', must be conform to the pattern /^ready|running|finished$/.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['estimatedTime']) && ($this->container['estimatedTime'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'estimatedTime', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['estimatedTime']) && ($this->container['estimatedTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'estimatedTime', must be bigger than or equal to 0.";
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
    *  本次创建任务的id
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 本次创建任务的id
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskType
    *  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
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
    * @param string|null $taskType 任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称
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
    * @param string|null $taskName 任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets triggerType
    *  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始的时间
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
    * @param int|null $startTime 任务开始的时间
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
    *  任务结束的时间
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
    * @param int|null $endTime 任务结束的时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets estimatedTime
    *  预计当前任务结束还需要的时间，单位为分钟
    *
    * @return int|null
    */
    public function getEstimatedTime()
    {
        return $this->container['estimatedTime'];
    }

    /**
    * Sets estimatedTime
    *
    * @param int|null $estimatedTime 预计当前任务结束还需要的时间，单位为分钟
    *
    * @return $this
    */
    public function setEstimatedTime($estimatedTime)
    {
        $this->container['estimatedTime'] = $estimatedTime;
        return $this;
    }

    /**
    * Gets clusterScanInfo
    *  clusterScanInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTasksResponseInfoClusterScanInfo|null
    */
    public function getClusterScanInfo()
    {
        return $this->container['clusterScanInfo'];
    }

    /**
    * Sets clusterScanInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTasksResponseInfoClusterScanInfo|null $clusterScanInfo clusterScanInfo
    *
    * @return $this
    */
    public function setClusterScanInfo($clusterScanInfo)
    {
        $this->container['clusterScanInfo'] = $clusterScanInfo;
        return $this;
    }

    /**
    * Gets iacScanInfo
    *  iacScanInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTasksResponseInfoIacScanInfo|null
    */
    public function getIacScanInfo()
    {
        return $this->container['iacScanInfo'];
    }

    /**
    * Sets iacScanInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTasksResponseInfoIacScanInfo|null $iacScanInfo iacScanInfo
    *
    * @return $this
    */
    public function setIacScanInfo($iacScanInfo)
    {
        $this->container['iacScanInfo'] = $iacScanInfo;
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

