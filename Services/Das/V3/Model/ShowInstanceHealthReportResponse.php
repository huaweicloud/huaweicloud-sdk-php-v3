<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceHealthReportResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceHealthReportResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  日报诊断是否成功。
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    * taskId  报告ID。
    * summaryInfo  summaryInfo
    * instanceInfo  instanceInfo
    * performanceStat  performanceStat
    * diskStat  diskStat
    * tableSpaceStat  tableSpaceStat
    * slowLogStat  slowLogStat
    * fullSqlStat  fullSqlStat
    * inspectionStat  inspectionStat
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => 'bool',
            'startAt' => 'int',
            'endAt' => 'int',
            'taskId' => 'string',
            'summaryInfo' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSummaryInfo',
            'instanceInfo' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportInstanceInfo',
            'performanceStat' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportPerformanceStat',
            'diskStat' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportDiskStat',
            'tableSpaceStat' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceStat',
            'slowLogStat' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportSlowLogStat',
            'fullSqlStat' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportFullSqlStat',
            'inspectionStat' => '\HuaweiCloud\SDK\Das\V3\Model\HealthReportInspectionStat',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  日报诊断是否成功。
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    * taskId  报告ID。
    * summaryInfo  summaryInfo
    * instanceInfo  instanceInfo
    * performanceStat  performanceStat
    * diskStat  diskStat
    * tableSpaceStat  tableSpaceStat
    * slowLogStat  slowLogStat
    * fullSqlStat  fullSqlStat
    * inspectionStat  inspectionStat
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'taskId' => null,
        'summaryInfo' => null,
        'instanceInfo' => null,
        'performanceStat' => null,
        'diskStat' => null,
        'tableSpaceStat' => null,
        'slowLogStat' => null,
        'fullSqlStat' => null,
        'inspectionStat' => null,
        'errorMessage' => null
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
    * success  日报诊断是否成功。
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    * taskId  报告ID。
    * summaryInfo  summaryInfo
    * instanceInfo  instanceInfo
    * performanceStat  performanceStat
    * diskStat  diskStat
    * tableSpaceStat  tableSpaceStat
    * slowLogStat  slowLogStat
    * fullSqlStat  fullSqlStat
    * inspectionStat  inspectionStat
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'taskId' => 'task_id',
            'summaryInfo' => 'summary_info',
            'instanceInfo' => 'instance_info',
            'performanceStat' => 'performance_stat',
            'diskStat' => 'disk_stat',
            'tableSpaceStat' => 'table_space_stat',
            'slowLogStat' => 'slow_log_stat',
            'fullSqlStat' => 'full_sql_stat',
            'inspectionStat' => 'inspection_stat',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  日报诊断是否成功。
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    * taskId  报告ID。
    * summaryInfo  summaryInfo
    * instanceInfo  instanceInfo
    * performanceStat  performanceStat
    * diskStat  diskStat
    * tableSpaceStat  tableSpaceStat
    * slowLogStat  slowLogStat
    * fullSqlStat  fullSqlStat
    * inspectionStat  inspectionStat
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'taskId' => 'setTaskId',
            'summaryInfo' => 'setSummaryInfo',
            'instanceInfo' => 'setInstanceInfo',
            'performanceStat' => 'setPerformanceStat',
            'diskStat' => 'setDiskStat',
            'tableSpaceStat' => 'setTableSpaceStat',
            'slowLogStat' => 'setSlowLogStat',
            'fullSqlStat' => 'setFullSqlStat',
            'inspectionStat' => 'setInspectionStat',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  日报诊断是否成功。
    * startAt  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    * endAt  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    * taskId  报告ID。
    * summaryInfo  summaryInfo
    * instanceInfo  instanceInfo
    * performanceStat  performanceStat
    * diskStat  diskStat
    * tableSpaceStat  tableSpaceStat
    * slowLogStat  slowLogStat
    * fullSqlStat  fullSqlStat
    * inspectionStat  inspectionStat
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'taskId' => 'getTaskId',
            'summaryInfo' => 'getSummaryInfo',
            'instanceInfo' => 'getInstanceInfo',
            'performanceStat' => 'getPerformanceStat',
            'diskStat' => 'getDiskStat',
            'tableSpaceStat' => 'getTableSpaceStat',
            'slowLogStat' => 'getSlowLogStat',
            'fullSqlStat' => 'getFullSqlStat',
            'inspectionStat' => 'getInspectionStat',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['summaryInfo'] = isset($data['summaryInfo']) ? $data['summaryInfo'] : null;
        $this->container['instanceInfo'] = isset($data['instanceInfo']) ? $data['instanceInfo'] : null;
        $this->container['performanceStat'] = isset($data['performanceStat']) ? $data['performanceStat'] : null;
        $this->container['diskStat'] = isset($data['diskStat']) ? $data['diskStat'] : null;
        $this->container['tableSpaceStat'] = isset($data['tableSpaceStat']) ? $data['tableSpaceStat'] : null;
        $this->container['slowLogStat'] = isset($data['slowLogStat']) ? $data['slowLogStat'] : null;
        $this->container['fullSqlStat'] = isset($data['fullSqlStat']) ? $data['fullSqlStat'] : null;
        $this->container['inspectionStat'] = isset($data['inspectionStat']) ? $data['inspectionStat'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets success
    *  日报诊断是否成功。
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 日报诊断是否成功。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets startAt
    *  日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int|null $startAt 日报诊断区间的起始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @return int|null
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int|null $endAt 日报诊断区间的结束时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets taskId
    *  报告ID。
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
    * @param string|null $taskId 报告ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets summaryInfo
    *  summaryInfo
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSummaryInfo|null
    */
    public function getSummaryInfo()
    {
        return $this->container['summaryInfo'];
    }

    /**
    * Sets summaryInfo
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSummaryInfo|null $summaryInfo summaryInfo
    *
    * @return $this
    */
    public function setSummaryInfo($summaryInfo)
    {
        $this->container['summaryInfo'] = $summaryInfo;
        return $this;
    }

    /**
    * Gets instanceInfo
    *  instanceInfo
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportInstanceInfo|null
    */
    public function getInstanceInfo()
    {
        return $this->container['instanceInfo'];
    }

    /**
    * Sets instanceInfo
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportInstanceInfo|null $instanceInfo instanceInfo
    *
    * @return $this
    */
    public function setInstanceInfo($instanceInfo)
    {
        $this->container['instanceInfo'] = $instanceInfo;
        return $this;
    }

    /**
    * Gets performanceStat
    *  performanceStat
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportPerformanceStat|null
    */
    public function getPerformanceStat()
    {
        return $this->container['performanceStat'];
    }

    /**
    * Sets performanceStat
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportPerformanceStat|null $performanceStat performanceStat
    *
    * @return $this
    */
    public function setPerformanceStat($performanceStat)
    {
        $this->container['performanceStat'] = $performanceStat;
        return $this;
    }

    /**
    * Gets diskStat
    *  diskStat
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportDiskStat|null
    */
    public function getDiskStat()
    {
        return $this->container['diskStat'];
    }

    /**
    * Sets diskStat
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportDiskStat|null $diskStat diskStat
    *
    * @return $this
    */
    public function setDiskStat($diskStat)
    {
        $this->container['diskStat'] = $diskStat;
        return $this;
    }

    /**
    * Gets tableSpaceStat
    *  tableSpaceStat
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceStat|null
    */
    public function getTableSpaceStat()
    {
        return $this->container['tableSpaceStat'];
    }

    /**
    * Sets tableSpaceStat
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportTableSpaceStat|null $tableSpaceStat tableSpaceStat
    *
    * @return $this
    */
    public function setTableSpaceStat($tableSpaceStat)
    {
        $this->container['tableSpaceStat'] = $tableSpaceStat;
        return $this;
    }

    /**
    * Gets slowLogStat
    *  slowLogStat
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportSlowLogStat|null
    */
    public function getSlowLogStat()
    {
        return $this->container['slowLogStat'];
    }

    /**
    * Sets slowLogStat
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportSlowLogStat|null $slowLogStat slowLogStat
    *
    * @return $this
    */
    public function setSlowLogStat($slowLogStat)
    {
        $this->container['slowLogStat'] = $slowLogStat;
        return $this;
    }

    /**
    * Gets fullSqlStat
    *  fullSqlStat
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportFullSqlStat|null
    */
    public function getFullSqlStat()
    {
        return $this->container['fullSqlStat'];
    }

    /**
    * Sets fullSqlStat
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportFullSqlStat|null $fullSqlStat fullSqlStat
    *
    * @return $this
    */
    public function setFullSqlStat($fullSqlStat)
    {
        $this->container['fullSqlStat'] = $fullSqlStat;
        return $this;
    }

    /**
    * Gets inspectionStat
    *  inspectionStat
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\HealthReportInspectionStat|null
    */
    public function getInspectionStat()
    {
        return $this->container['inspectionStat'];
    }

    /**
    * Sets inspectionStat
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\HealthReportInspectionStat|null $inspectionStat inspectionStat
    *
    * @return $this
    */
    public function setInspectionStat($inspectionStat)
    {
        $this->container['inspectionStat'] = $inspectionStat;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

