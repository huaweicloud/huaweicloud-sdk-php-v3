<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDiagnosisResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDiagnosisResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * score  得分。
    * status  状态。 INIT：初始化，RUNNING：诊断中，SUCCESS：诊断完成，FAILED：诊断失败
    * progress  进度。
    * errorMsg  失败原因。
    * startTime  开始时间。
    * endTime  结束时间。
    * total  诊断项总数。
    * normalCount  正常数量。
    * abnormalCount  异常数量。
    * alarmCount  告警数量。
    * failureCount  失败数量。
    * timeoutCount  超时数量。
    * diagnosisResults  诊断结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'score' => 'int',
            'status' => 'string',
            'progress' => 'int',
            'errorMsg' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'total' => 'int',
            'normalCount' => 'int',
            'abnormalCount' => 'int',
            'alarmCount' => 'int',
            'failureCount' => 'int',
            'timeoutCount' => 'int',
            'diagnosisResults' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultDiagnosisResults[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * score  得分。
    * status  状态。 INIT：初始化，RUNNING：诊断中，SUCCESS：诊断完成，FAILED：诊断失败
    * progress  进度。
    * errorMsg  失败原因。
    * startTime  开始时间。
    * endTime  结束时间。
    * total  诊断项总数。
    * normalCount  正常数量。
    * abnormalCount  异常数量。
    * alarmCount  告警数量。
    * failureCount  失败数量。
    * timeoutCount  超时数量。
    * diagnosisResults  诊断结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'score' => 'int32',
        'status' => null,
        'progress' => 'int32',
        'errorMsg' => null,
        'startTime' => null,
        'endTime' => null,
        'total' => 'int64',
        'normalCount' => 'int64',
        'abnormalCount' => 'int64',
        'alarmCount' => 'int64',
        'failureCount' => 'int64',
        'timeoutCount' => 'int64',
        'diagnosisResults' => null
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
    * score  得分。
    * status  状态。 INIT：初始化，RUNNING：诊断中，SUCCESS：诊断完成，FAILED：诊断失败
    * progress  进度。
    * errorMsg  失败原因。
    * startTime  开始时间。
    * endTime  结束时间。
    * total  诊断项总数。
    * normalCount  正常数量。
    * abnormalCount  异常数量。
    * alarmCount  告警数量。
    * failureCount  失败数量。
    * timeoutCount  超时数量。
    * diagnosisResults  诊断结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'score' => 'score',
            'status' => 'status',
            'progress' => 'progress',
            'errorMsg' => 'error_msg',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'total' => 'total',
            'normalCount' => 'normal_count',
            'abnormalCount' => 'abnormal_count',
            'alarmCount' => 'alarm_count',
            'failureCount' => 'failure_count',
            'timeoutCount' => 'timeout_count',
            'diagnosisResults' => 'diagnosis_results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * score  得分。
    * status  状态。 INIT：初始化，RUNNING：诊断中，SUCCESS：诊断完成，FAILED：诊断失败
    * progress  进度。
    * errorMsg  失败原因。
    * startTime  开始时间。
    * endTime  结束时间。
    * total  诊断项总数。
    * normalCount  正常数量。
    * abnormalCount  异常数量。
    * alarmCount  告警数量。
    * failureCount  失败数量。
    * timeoutCount  超时数量。
    * diagnosisResults  诊断结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'score' => 'setScore',
            'status' => 'setStatus',
            'progress' => 'setProgress',
            'errorMsg' => 'setErrorMsg',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'total' => 'setTotal',
            'normalCount' => 'setNormalCount',
            'abnormalCount' => 'setAbnormalCount',
            'alarmCount' => 'setAlarmCount',
            'failureCount' => 'setFailureCount',
            'timeoutCount' => 'setTimeoutCount',
            'diagnosisResults' => 'setDiagnosisResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * score  得分。
    * status  状态。 INIT：初始化，RUNNING：诊断中，SUCCESS：诊断完成，FAILED：诊断失败
    * progress  进度。
    * errorMsg  失败原因。
    * startTime  开始时间。
    * endTime  结束时间。
    * total  诊断项总数。
    * normalCount  正常数量。
    * abnormalCount  异常数量。
    * alarmCount  告警数量。
    * failureCount  失败数量。
    * timeoutCount  超时数量。
    * diagnosisResults  诊断结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'score' => 'getScore',
            'status' => 'getStatus',
            'progress' => 'getProgress',
            'errorMsg' => 'getErrorMsg',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'total' => 'getTotal',
            'normalCount' => 'getNormalCount',
            'abnormalCount' => 'getAbnormalCount',
            'alarmCount' => 'getAlarmCount',
            'failureCount' => 'getFailureCount',
            'timeoutCount' => 'getTimeoutCount',
            'diagnosisResults' => 'getDiagnosisResults'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['normalCount'] = isset($data['normalCount']) ? $data['normalCount'] : null;
        $this->container['abnormalCount'] = isset($data['abnormalCount']) ? $data['abnormalCount'] : null;
        $this->container['alarmCount'] = isset($data['alarmCount']) ? $data['alarmCount'] : null;
        $this->container['failureCount'] = isset($data['failureCount']) ? $data['failureCount'] : null;
        $this->container['timeoutCount'] = isset($data['timeoutCount']) ? $data['timeoutCount'] : null;
        $this->container['diagnosisResults'] = isset($data['diagnosisResults']) ? $data['diagnosisResults'] : null;
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
    * Gets score
    *  得分。
    *
    * @return int|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param int|null $score 得分。
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets status
    *  状态。 INIT：初始化，RUNNING：诊断中，SUCCESS：诊断完成，FAILED：诊断失败
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
    * @param string|null $status 状态。 INIT：初始化，RUNNING：诊断中，SUCCESS：诊断完成，FAILED：诊断失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets progress
    *  进度。
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 进度。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets errorMsg
    *  失败原因。
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
    * @param string|null $errorMsg 失败原因。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
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
    * @param string|null $startTime 开始时间。
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
    *  结束时间。
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
    * @param string|null $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets total
    *  诊断项总数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 诊断项总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets normalCount
    *  正常数量。
    *
    * @return int|null
    */
    public function getNormalCount()
    {
        return $this->container['normalCount'];
    }

    /**
    * Sets normalCount
    *
    * @param int|null $normalCount 正常数量。
    *
    * @return $this
    */
    public function setNormalCount($normalCount)
    {
        $this->container['normalCount'] = $normalCount;
        return $this;
    }

    /**
    * Gets abnormalCount
    *  异常数量。
    *
    * @return int|null
    */
    public function getAbnormalCount()
    {
        return $this->container['abnormalCount'];
    }

    /**
    * Sets abnormalCount
    *
    * @param int|null $abnormalCount 异常数量。
    *
    * @return $this
    */
    public function setAbnormalCount($abnormalCount)
    {
        $this->container['abnormalCount'] = $abnormalCount;
        return $this;
    }

    /**
    * Gets alarmCount
    *  告警数量。
    *
    * @return int|null
    */
    public function getAlarmCount()
    {
        return $this->container['alarmCount'];
    }

    /**
    * Sets alarmCount
    *
    * @param int|null $alarmCount 告警数量。
    *
    * @return $this
    */
    public function setAlarmCount($alarmCount)
    {
        $this->container['alarmCount'] = $alarmCount;
        return $this;
    }

    /**
    * Gets failureCount
    *  失败数量。
    *
    * @return int|null
    */
    public function getFailureCount()
    {
        return $this->container['failureCount'];
    }

    /**
    * Sets failureCount
    *
    * @param int|null $failureCount 失败数量。
    *
    * @return $this
    */
    public function setFailureCount($failureCount)
    {
        $this->container['failureCount'] = $failureCount;
        return $this;
    }

    /**
    * Gets timeoutCount
    *  超时数量。
    *
    * @return int|null
    */
    public function getTimeoutCount()
    {
        return $this->container['timeoutCount'];
    }

    /**
    * Sets timeoutCount
    *
    * @param int|null $timeoutCount 超时数量。
    *
    * @return $this
    */
    public function setTimeoutCount($timeoutCount)
    {
        $this->container['timeoutCount'] = $timeoutCount;
        return $this;
    }

    /**
    * Gets diagnosisResults
    *  诊断结果。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultDiagnosisResults[]|null
    */
    public function getDiagnosisResults()
    {
        return $this->container['diagnosisResults'];
    }

    /**
    * Sets diagnosisResults
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryDiagnosisResultDiagnosisResults[]|null $diagnosisResults 诊断结果。
    *
    * @return $this
    */
    public function setDiagnosisResults($diagnosisResults)
    {
        $this->container['diagnosisResults'] = $diagnosisResults;
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

