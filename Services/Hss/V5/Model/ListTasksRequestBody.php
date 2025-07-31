<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTasksRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTasksRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskId  本次创建任务的id
    * taskName  模糊匹配任务名称
    * startCreateTime  按任务创建时间范围查询时的起始时间
    * endCreateTime  按任务创建时间范围查询时的结束时间
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * sortKey  排序字段，包含如下   - start_time：任务开始时间
    * sortDir  排序方式，包含如下   - desc：降序   - asc: 升序
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskType' => 'string',
            'taskId' => 'string',
            'taskName' => 'string',
            'startCreateTime' => 'int',
            'endCreateTime' => 'int',
            'triggerType' => 'string',
            'taskStatus' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'clusterScanInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTasksRequestBodyClusterScanInfo',
            'iacScanInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ListTasksRequestBodyIacScanInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskId  本次创建任务的id
    * taskName  模糊匹配任务名称
    * startCreateTime  按任务创建时间范围查询时的起始时间
    * endCreateTime  按任务创建时间范围查询时的结束时间
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * sortKey  排序字段，包含如下   - start_time：任务开始时间
    * sortDir  排序方式，包含如下   - desc：降序   - asc: 升序
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskType' => null,
        'taskId' => null,
        'taskName' => null,
        'startCreateTime' => 'int64',
        'endCreateTime' => 'int64',
        'triggerType' => null,
        'taskStatus' => null,
        'sortKey' => null,
        'sortDir' => null,
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
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskId  本次创建任务的id
    * taskName  模糊匹配任务名称
    * startCreateTime  按任务创建时间范围查询时的起始时间
    * endCreateTime  按任务创建时间范围查询时的结束时间
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * sortKey  排序字段，包含如下   - start_time：任务开始时间
    * sortDir  排序方式，包含如下   - desc：降序   - asc: 升序
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskType' => 'task_type',
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'startCreateTime' => 'start_create_time',
            'endCreateTime' => 'end_create_time',
            'triggerType' => 'trigger_type',
            'taskStatus' => 'task_status',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'clusterScanInfo' => 'cluster_scan_info',
            'iacScanInfo' => 'iac_scan_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskId  本次创建任务的id
    * taskName  模糊匹配任务名称
    * startCreateTime  按任务创建时间范围查询时的起始时间
    * endCreateTime  按任务创建时间范围查询时的结束时间
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * sortKey  排序字段，包含如下   - start_time：任务开始时间
    * sortDir  排序方式，包含如下   - desc：降序   - asc: 升序
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'taskType' => 'setTaskType',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'startCreateTime' => 'setStartCreateTime',
            'endCreateTime' => 'setEndCreateTime',
            'triggerType' => 'setTriggerType',
            'taskStatus' => 'setTaskStatus',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'clusterScanInfo' => 'setClusterScanInfo',
            'iacScanInfo' => 'setIacScanInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskType  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    * taskId  本次创建任务的id
    * taskName  模糊匹配任务名称
    * startCreateTime  按任务创建时间范围查询时的起始时间
    * endCreateTime  按任务创建时间范围查询时的结束时间
    * triggerType  任务触发类型，包含如下   - manual：手动创建的任务   - schedule：定时任务
    * taskStatus  任务状态，包含如下   - ready：等待执行   - running：运行中   - finished：任务结束
    * sortKey  排序字段，包含如下   - start_time：任务开始时间
    * sortDir  排序方式，包含如下   - desc：降序   - asc: 升序
    * clusterScanInfo  clusterScanInfo
    * iacScanInfo  iacScanInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'taskType' => 'getTaskType',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'startCreateTime' => 'getStartCreateTime',
            'endCreateTime' => 'getEndCreateTime',
            'triggerType' => 'getTriggerType',
            'taskStatus' => 'getTaskStatus',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
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
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['startCreateTime'] = isset($data['startCreateTime']) ? $data['startCreateTime'] : null;
        $this->container['endCreateTime'] = isset($data['endCreateTime']) ? $data['endCreateTime'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
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
        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
            if ((mb_strlen($this->container['taskType']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['taskType']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^cluster_scan|iac_scan$/", $this->container['taskType'])) {
                $invalidProperties[] = "invalid value for 'taskType', must be conform to the pattern /^cluster_scan|iac_scan$/.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && !preg_match("/^.*$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['startCreateTime']) && ($this->container['startCreateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startCreateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startCreateTime']) && ($this->container['startCreateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startCreateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endCreateTime']) && ($this->container['endCreateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endCreateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endCreateTime']) && ($this->container['endCreateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endCreateTime', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortKey']) && !preg_match("/^start_time$/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /^start_time$/.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sortDir']) && !preg_match("/^desc|asc$/", $this->container['sortDir'])) {
                $invalidProperties[] = "invalid value for 'sortDir', must be conform to the pattern /^desc|asc$/.";
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
    * Gets taskType
    *  任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType 任务类型，包含如下   - cluster_scan：集群扫描   - iac_scan：iac扫描
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
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
    * Gets taskName
    *  模糊匹配任务名称
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
    * @param string|null $taskName 模糊匹配任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets startCreateTime
    *  按任务创建时间范围查询时的起始时间
    *
    * @return int|null
    */
    public function getStartCreateTime()
    {
        return $this->container['startCreateTime'];
    }

    /**
    * Sets startCreateTime
    *
    * @param int|null $startCreateTime 按任务创建时间范围查询时的起始时间
    *
    * @return $this
    */
    public function setStartCreateTime($startCreateTime)
    {
        $this->container['startCreateTime'] = $startCreateTime;
        return $this;
    }

    /**
    * Gets endCreateTime
    *  按任务创建时间范围查询时的结束时间
    *
    * @return int|null
    */
    public function getEndCreateTime()
    {
        return $this->container['endCreateTime'];
    }

    /**
    * Sets endCreateTime
    *
    * @param int|null $endCreateTime 按任务创建时间范围查询时的结束时间
    *
    * @return $this
    */
    public function setEndCreateTime($endCreateTime)
    {
        $this->container['endCreateTime'] = $endCreateTime;
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
    * Gets sortKey
    *  排序字段，包含如下   - start_time：任务开始时间
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段，包含如下   - start_time：任务开始时间
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序方式，包含如下   - desc：降序   - asc: 升序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方式，包含如下   - desc：降序   - asc: 升序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets clusterScanInfo
    *  clusterScanInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTasksRequestBodyClusterScanInfo|null
    */
    public function getClusterScanInfo()
    {
        return $this->container['clusterScanInfo'];
    }

    /**
    * Sets clusterScanInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTasksRequestBodyClusterScanInfo|null $clusterScanInfo clusterScanInfo
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
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ListTasksRequestBodyIacScanInfo|null
    */
    public function getIacScanInfo()
    {
        return $this->container['iacScanInfo'];
    }

    /**
    * Sets iacScanInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ListTasksRequestBodyIacScanInfo|null $iacScanInfo iacScanInfo
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

