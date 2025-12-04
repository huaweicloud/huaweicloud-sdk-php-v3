<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NativeReportSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NativeReportSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * reportId  报告ID
    * scanStatus  制品扫描状态，Pending(扫描等待中)、Running(扫描中)、Error(扫描失败)、Success(扫描成功)
    * severity  制品扫描报告的总体严重程度，None(无评分), Low(低危), Medium(中危), High(高危), Critical(严重), Security(安全)
    * duration  生成报告所花费的秒数时间
    * summary  summary
    * startTime  生成报告的扫描进程的开始时间
    * endTime  生成报告的扫描进程的结束时间
    * completePercent  扫描的完成百分比，该值介于0和100之间
    * scanner  scanner
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'reportId' => 'string',
            'scanStatus' => 'string',
            'severity' => 'string',
            'duration' => 'int',
            'summary' => '\HuaweiCloud\SDK\Swr\V2\Model\VulnerabilitySummary',
            'startTime' => 'string',
            'endTime' => 'string',
            'completePercent' => 'int',
            'scanner' => '\HuaweiCloud\SDK\Swr\V2\Model\Scanner'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * reportId  报告ID
    * scanStatus  制品扫描状态，Pending(扫描等待中)、Running(扫描中)、Error(扫描失败)、Success(扫描成功)
    * severity  制品扫描报告的总体严重程度，None(无评分), Low(低危), Medium(中危), High(高危), Critical(严重), Security(安全)
    * duration  生成报告所花费的秒数时间
    * summary  summary
    * startTime  生成报告的扫描进程的开始时间
    * endTime  生成报告的扫描进程的结束时间
    * completePercent  扫描的完成百分比，该值介于0和100之间
    * scanner  scanner
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'reportId' => null,
        'scanStatus' => null,
        'severity' => null,
        'duration' => null,
        'summary' => null,
        'startTime' => null,
        'endTime' => null,
        'completePercent' => null,
        'scanner' => null
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
    * reportId  报告ID
    * scanStatus  制品扫描状态，Pending(扫描等待中)、Running(扫描中)、Error(扫描失败)、Success(扫描成功)
    * severity  制品扫描报告的总体严重程度，None(无评分), Low(低危), Medium(中危), High(高危), Critical(严重), Security(安全)
    * duration  生成报告所花费的秒数时间
    * summary  summary
    * startTime  生成报告的扫描进程的开始时间
    * endTime  生成报告的扫描进程的结束时间
    * completePercent  扫描的完成百分比，该值介于0和100之间
    * scanner  scanner
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'reportId' => 'report_id',
            'scanStatus' => 'scan_status',
            'severity' => 'severity',
            'duration' => 'duration',
            'summary' => 'summary',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'completePercent' => 'complete_percent',
            'scanner' => 'scanner'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * reportId  报告ID
    * scanStatus  制品扫描状态，Pending(扫描等待中)、Running(扫描中)、Error(扫描失败)、Success(扫描成功)
    * severity  制品扫描报告的总体严重程度，None(无评分), Low(低危), Medium(中危), High(高危), Critical(严重), Security(安全)
    * duration  生成报告所花费的秒数时间
    * summary  summary
    * startTime  生成报告的扫描进程的开始时间
    * endTime  生成报告的扫描进程的结束时间
    * completePercent  扫描的完成百分比，该值介于0和100之间
    * scanner  scanner
    *
    * @var string[]
    */
    protected static $setters = [
            'reportId' => 'setReportId',
            'scanStatus' => 'setScanStatus',
            'severity' => 'setSeverity',
            'duration' => 'setDuration',
            'summary' => 'setSummary',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'completePercent' => 'setCompletePercent',
            'scanner' => 'setScanner'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * reportId  报告ID
    * scanStatus  制品扫描状态，Pending(扫描等待中)、Running(扫描中)、Error(扫描失败)、Success(扫描成功)
    * severity  制品扫描报告的总体严重程度，None(无评分), Low(低危), Medium(中危), High(高危), Critical(严重), Security(安全)
    * duration  生成报告所花费的秒数时间
    * summary  summary
    * startTime  生成报告的扫描进程的开始时间
    * endTime  生成报告的扫描进程的结束时间
    * completePercent  扫描的完成百分比，该值介于0和100之间
    * scanner  scanner
    *
    * @var string[]
    */
    protected static $getters = [
            'reportId' => 'getReportId',
            'scanStatus' => 'getScanStatus',
            'severity' => 'getSeverity',
            'duration' => 'getDuration',
            'summary' => 'getSummary',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'completePercent' => 'getCompletePercent',
            'scanner' => 'getScanner'
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
    const SCAN_STATUS_SUCCESS = 'Success';
    const SCAN_STATUS_ERROR = 'Error';
    const SCAN_STATUS_RUNNING = 'Running';
    const SCAN_STATUS_PENDING = 'Pending';
    const SEVERITY_NONE = 'None';
    const SEVERITY_LOW = 'Low';
    const SEVERITY_MEDIUM = 'Medium';
    const SEVERITY_HIGH = 'High';
    const SEVERITY_CRITICAL = 'Critical';
    const SEVERITY_SECURITY = 'Security';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScanStatusAllowableValues()
    {
        return [
            self::SCAN_STATUS_SUCCESS,
            self::SCAN_STATUS_ERROR,
            self::SCAN_STATUS_RUNNING,
            self::SCAN_STATUS_PENDING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_NONE,
            self::SEVERITY_LOW,
            self::SEVERITY_MEDIUM,
            self::SEVERITY_HIGH,
            self::SEVERITY_CRITICAL,
            self::SEVERITY_SECURITY,
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
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['completePercent'] = isset($data['completePercent']) ? $data['completePercent'] : null;
        $this->container['scanner'] = isset($data['scanner']) ? $data['scanner'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getScanStatusAllowableValues();
                if (!is_null($this->container['scanStatus']) && !in_array($this->container['scanStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scanStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
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
    * Gets reportId
    *  报告ID
    *
    * @return string|null
    */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
    * Sets reportId
    *
    * @param string|null $reportId 报告ID
    *
    * @return $this
    */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;
        return $this;
    }

    /**
    * Gets scanStatus
    *  制品扫描状态，Pending(扫描等待中)、Running(扫描中)、Error(扫描失败)、Success(扫描成功)
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus 制品扫描状态，Pending(扫描等待中)、Running(扫描中)、Error(扫描失败)、Success(扫描成功)
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets severity
    *  制品扫描报告的总体严重程度，None(无评分), Low(低危), Medium(中危), High(高危), Critical(严重), Security(安全)
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 制品扫描报告的总体严重程度，None(无评分), Low(低危), Medium(中危), High(高危), Critical(严重), Security(安全)
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets duration
    *  生成报告所花费的秒数时间
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
    * @param int|null $duration 生成报告所花费的秒数时间
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets summary
    *  summary
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\VulnerabilitySummary|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\VulnerabilitySummary|null $summary summary
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
        return $this;
    }

    /**
    * Gets startTime
    *  生成报告的扫描进程的开始时间
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
    * @param string|null $startTime 生成报告的扫描进程的开始时间
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
    *  生成报告的扫描进程的结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 生成报告的扫描进程的结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets completePercent
    *  扫描的完成百分比，该值介于0和100之间
    *
    * @return int|null
    */
    public function getCompletePercent()
    {
        return $this->container['completePercent'];
    }

    /**
    * Sets completePercent
    *
    * @param int|null $completePercent 扫描的完成百分比，该值介于0和100之间
    *
    * @return $this
    */
    public function setCompletePercent($completePercent)
    {
        $this->container['completePercent'] = $completePercent;
        return $this;
    }

    /**
    * Gets scanner
    *  scanner
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\Scanner|null
    */
    public function getScanner()
    {
        return $this->container['scanner'];
    }

    /**
    * Sets scanner
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\Scanner|null $scanner scanner
    *
    * @return $this
    */
    public function setScanner($scanner)
    {
        $this->container['scanner'] = $scanner;
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

