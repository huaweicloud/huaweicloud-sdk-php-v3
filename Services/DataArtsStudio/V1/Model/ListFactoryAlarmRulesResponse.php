<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryAlarmRulesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryAlarmRulesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmRulesItemsDetails  通知规则明细。
    * assuranceMissionCommitmentTimeNotCompletedCount  保障作业承诺时间未完成数量。
    * assuranceMissionFailedCount  保障作业失败数量。
    * assuranceMissionWarningTimeNotCompletedCount  保障作业预警时间未完成数量。
    * baselineErrorCount  基线作业失败数量。
    * cancelJobsCount  作业取消数量。
    * exceptionCount  作业异常数量。
    * modifyCount  修改作业数量。
    * multiPeriodUnfinishedCount  多周期未完成数量。
    * overloadCount  资源繁忙作业数量。
    * recoverJobsCount  失败作业恢复数量。
    * successCount  作业成功数量。
    * total  作业总数量。
    * totalAll  通知规则数量。
    * unfinishedCount  未完成作业数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmRulesItemsDetails' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlarmRulesItemsDetails[]',
            'assuranceMissionCommitmentTimeNotCompletedCount' => 'int',
            'assuranceMissionFailedCount' => 'int',
            'assuranceMissionWarningTimeNotCompletedCount' => 'int',
            'baselineErrorCount' => 'int',
            'cancelJobsCount' => 'int',
            'exceptionCount' => 'int',
            'modifyCount' => 'int',
            'multiPeriodUnfinishedCount' => 'int',
            'overloadCount' => 'int',
            'recoverJobsCount' => 'int',
            'successCount' => 'int',
            'total' => 'int',
            'totalAll' => 'int',
            'unfinishedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmRulesItemsDetails  通知规则明细。
    * assuranceMissionCommitmentTimeNotCompletedCount  保障作业承诺时间未完成数量。
    * assuranceMissionFailedCount  保障作业失败数量。
    * assuranceMissionWarningTimeNotCompletedCount  保障作业预警时间未完成数量。
    * baselineErrorCount  基线作业失败数量。
    * cancelJobsCount  作业取消数量。
    * exceptionCount  作业异常数量。
    * modifyCount  修改作业数量。
    * multiPeriodUnfinishedCount  多周期未完成数量。
    * overloadCount  资源繁忙作业数量。
    * recoverJobsCount  失败作业恢复数量。
    * successCount  作业成功数量。
    * total  作业总数量。
    * totalAll  通知规则数量。
    * unfinishedCount  未完成作业数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmRulesItemsDetails' => null,
        'assuranceMissionCommitmentTimeNotCompletedCount' => 'int32',
        'assuranceMissionFailedCount' => 'int32',
        'assuranceMissionWarningTimeNotCompletedCount' => 'int32',
        'baselineErrorCount' => 'int32',
        'cancelJobsCount' => 'int32',
        'exceptionCount' => 'int32',
        'modifyCount' => 'int32',
        'multiPeriodUnfinishedCount' => 'int32',
        'overloadCount' => 'int32',
        'recoverJobsCount' => 'int32',
        'successCount' => 'int32',
        'total' => 'int32',
        'totalAll' => 'int32',
        'unfinishedCount' => 'int32'
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
    * alarmRulesItemsDetails  通知规则明细。
    * assuranceMissionCommitmentTimeNotCompletedCount  保障作业承诺时间未完成数量。
    * assuranceMissionFailedCount  保障作业失败数量。
    * assuranceMissionWarningTimeNotCompletedCount  保障作业预警时间未完成数量。
    * baselineErrorCount  基线作业失败数量。
    * cancelJobsCount  作业取消数量。
    * exceptionCount  作业异常数量。
    * modifyCount  修改作业数量。
    * multiPeriodUnfinishedCount  多周期未完成数量。
    * overloadCount  资源繁忙作业数量。
    * recoverJobsCount  失败作业恢复数量。
    * successCount  作业成功数量。
    * total  作业总数量。
    * totalAll  通知规则数量。
    * unfinishedCount  未完成作业数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmRulesItemsDetails' => 'alarm_rules_items_details',
            'assuranceMissionCommitmentTimeNotCompletedCount' => 'assurance_mission_commitment_time_not_completed_count',
            'assuranceMissionFailedCount' => 'assurance_mission_failed_count',
            'assuranceMissionWarningTimeNotCompletedCount' => 'assurance_mission_warning_time_not_completed_count',
            'baselineErrorCount' => 'baseline_error_count',
            'cancelJobsCount' => 'cancel_jobs_count',
            'exceptionCount' => 'exception_count',
            'modifyCount' => 'modify_count',
            'multiPeriodUnfinishedCount' => 'multi_period_unfinished_count',
            'overloadCount' => 'overload_count',
            'recoverJobsCount' => 'recover_jobs_count',
            'successCount' => 'success_count',
            'total' => 'total',
            'totalAll' => 'total_all',
            'unfinishedCount' => 'unfinished_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmRulesItemsDetails  通知规则明细。
    * assuranceMissionCommitmentTimeNotCompletedCount  保障作业承诺时间未完成数量。
    * assuranceMissionFailedCount  保障作业失败数量。
    * assuranceMissionWarningTimeNotCompletedCount  保障作业预警时间未完成数量。
    * baselineErrorCount  基线作业失败数量。
    * cancelJobsCount  作业取消数量。
    * exceptionCount  作业异常数量。
    * modifyCount  修改作业数量。
    * multiPeriodUnfinishedCount  多周期未完成数量。
    * overloadCount  资源繁忙作业数量。
    * recoverJobsCount  失败作业恢复数量。
    * successCount  作业成功数量。
    * total  作业总数量。
    * totalAll  通知规则数量。
    * unfinishedCount  未完成作业数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmRulesItemsDetails' => 'setAlarmRulesItemsDetails',
            'assuranceMissionCommitmentTimeNotCompletedCount' => 'setAssuranceMissionCommitmentTimeNotCompletedCount',
            'assuranceMissionFailedCount' => 'setAssuranceMissionFailedCount',
            'assuranceMissionWarningTimeNotCompletedCount' => 'setAssuranceMissionWarningTimeNotCompletedCount',
            'baselineErrorCount' => 'setBaselineErrorCount',
            'cancelJobsCount' => 'setCancelJobsCount',
            'exceptionCount' => 'setExceptionCount',
            'modifyCount' => 'setModifyCount',
            'multiPeriodUnfinishedCount' => 'setMultiPeriodUnfinishedCount',
            'overloadCount' => 'setOverloadCount',
            'recoverJobsCount' => 'setRecoverJobsCount',
            'successCount' => 'setSuccessCount',
            'total' => 'setTotal',
            'totalAll' => 'setTotalAll',
            'unfinishedCount' => 'setUnfinishedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmRulesItemsDetails  通知规则明细。
    * assuranceMissionCommitmentTimeNotCompletedCount  保障作业承诺时间未完成数量。
    * assuranceMissionFailedCount  保障作业失败数量。
    * assuranceMissionWarningTimeNotCompletedCount  保障作业预警时间未完成数量。
    * baselineErrorCount  基线作业失败数量。
    * cancelJobsCount  作业取消数量。
    * exceptionCount  作业异常数量。
    * modifyCount  修改作业数量。
    * multiPeriodUnfinishedCount  多周期未完成数量。
    * overloadCount  资源繁忙作业数量。
    * recoverJobsCount  失败作业恢复数量。
    * successCount  作业成功数量。
    * total  作业总数量。
    * totalAll  通知规则数量。
    * unfinishedCount  未完成作业数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmRulesItemsDetails' => 'getAlarmRulesItemsDetails',
            'assuranceMissionCommitmentTimeNotCompletedCount' => 'getAssuranceMissionCommitmentTimeNotCompletedCount',
            'assuranceMissionFailedCount' => 'getAssuranceMissionFailedCount',
            'assuranceMissionWarningTimeNotCompletedCount' => 'getAssuranceMissionWarningTimeNotCompletedCount',
            'baselineErrorCount' => 'getBaselineErrorCount',
            'cancelJobsCount' => 'getCancelJobsCount',
            'exceptionCount' => 'getExceptionCount',
            'modifyCount' => 'getModifyCount',
            'multiPeriodUnfinishedCount' => 'getMultiPeriodUnfinishedCount',
            'overloadCount' => 'getOverloadCount',
            'recoverJobsCount' => 'getRecoverJobsCount',
            'successCount' => 'getSuccessCount',
            'total' => 'getTotal',
            'totalAll' => 'getTotalAll',
            'unfinishedCount' => 'getUnfinishedCount'
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
        $this->container['alarmRulesItemsDetails'] = isset($data['alarmRulesItemsDetails']) ? $data['alarmRulesItemsDetails'] : null;
        $this->container['assuranceMissionCommitmentTimeNotCompletedCount'] = isset($data['assuranceMissionCommitmentTimeNotCompletedCount']) ? $data['assuranceMissionCommitmentTimeNotCompletedCount'] : null;
        $this->container['assuranceMissionFailedCount'] = isset($data['assuranceMissionFailedCount']) ? $data['assuranceMissionFailedCount'] : null;
        $this->container['assuranceMissionWarningTimeNotCompletedCount'] = isset($data['assuranceMissionWarningTimeNotCompletedCount']) ? $data['assuranceMissionWarningTimeNotCompletedCount'] : null;
        $this->container['baselineErrorCount'] = isset($data['baselineErrorCount']) ? $data['baselineErrorCount'] : null;
        $this->container['cancelJobsCount'] = isset($data['cancelJobsCount']) ? $data['cancelJobsCount'] : null;
        $this->container['exceptionCount'] = isset($data['exceptionCount']) ? $data['exceptionCount'] : null;
        $this->container['modifyCount'] = isset($data['modifyCount']) ? $data['modifyCount'] : null;
        $this->container['multiPeriodUnfinishedCount'] = isset($data['multiPeriodUnfinishedCount']) ? $data['multiPeriodUnfinishedCount'] : null;
        $this->container['overloadCount'] = isset($data['overloadCount']) ? $data['overloadCount'] : null;
        $this->container['recoverJobsCount'] = isset($data['recoverJobsCount']) ? $data['recoverJobsCount'] : null;
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalAll'] = isset($data['totalAll']) ? $data['totalAll'] : null;
        $this->container['unfinishedCount'] = isset($data['unfinishedCount']) ? $data['unfinishedCount'] : null;
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
    * Gets alarmRulesItemsDetails
    *  通知规则明细。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlarmRulesItemsDetails[]|null
    */
    public function getAlarmRulesItemsDetails()
    {
        return $this->container['alarmRulesItemsDetails'];
    }

    /**
    * Sets alarmRulesItemsDetails
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\AlarmRulesItemsDetails[]|null $alarmRulesItemsDetails 通知规则明细。
    *
    * @return $this
    */
    public function setAlarmRulesItemsDetails($alarmRulesItemsDetails)
    {
        $this->container['alarmRulesItemsDetails'] = $alarmRulesItemsDetails;
        return $this;
    }

    /**
    * Gets assuranceMissionCommitmentTimeNotCompletedCount
    *  保障作业承诺时间未完成数量。
    *
    * @return int|null
    */
    public function getAssuranceMissionCommitmentTimeNotCompletedCount()
    {
        return $this->container['assuranceMissionCommitmentTimeNotCompletedCount'];
    }

    /**
    * Sets assuranceMissionCommitmentTimeNotCompletedCount
    *
    * @param int|null $assuranceMissionCommitmentTimeNotCompletedCount 保障作业承诺时间未完成数量。
    *
    * @return $this
    */
    public function setAssuranceMissionCommitmentTimeNotCompletedCount($assuranceMissionCommitmentTimeNotCompletedCount)
    {
        $this->container['assuranceMissionCommitmentTimeNotCompletedCount'] = $assuranceMissionCommitmentTimeNotCompletedCount;
        return $this;
    }

    /**
    * Gets assuranceMissionFailedCount
    *  保障作业失败数量。
    *
    * @return int|null
    */
    public function getAssuranceMissionFailedCount()
    {
        return $this->container['assuranceMissionFailedCount'];
    }

    /**
    * Sets assuranceMissionFailedCount
    *
    * @param int|null $assuranceMissionFailedCount 保障作业失败数量。
    *
    * @return $this
    */
    public function setAssuranceMissionFailedCount($assuranceMissionFailedCount)
    {
        $this->container['assuranceMissionFailedCount'] = $assuranceMissionFailedCount;
        return $this;
    }

    /**
    * Gets assuranceMissionWarningTimeNotCompletedCount
    *  保障作业预警时间未完成数量。
    *
    * @return int|null
    */
    public function getAssuranceMissionWarningTimeNotCompletedCount()
    {
        return $this->container['assuranceMissionWarningTimeNotCompletedCount'];
    }

    /**
    * Sets assuranceMissionWarningTimeNotCompletedCount
    *
    * @param int|null $assuranceMissionWarningTimeNotCompletedCount 保障作业预警时间未完成数量。
    *
    * @return $this
    */
    public function setAssuranceMissionWarningTimeNotCompletedCount($assuranceMissionWarningTimeNotCompletedCount)
    {
        $this->container['assuranceMissionWarningTimeNotCompletedCount'] = $assuranceMissionWarningTimeNotCompletedCount;
        return $this;
    }

    /**
    * Gets baselineErrorCount
    *  基线作业失败数量。
    *
    * @return int|null
    */
    public function getBaselineErrorCount()
    {
        return $this->container['baselineErrorCount'];
    }

    /**
    * Sets baselineErrorCount
    *
    * @param int|null $baselineErrorCount 基线作业失败数量。
    *
    * @return $this
    */
    public function setBaselineErrorCount($baselineErrorCount)
    {
        $this->container['baselineErrorCount'] = $baselineErrorCount;
        return $this;
    }

    /**
    * Gets cancelJobsCount
    *  作业取消数量。
    *
    * @return int|null
    */
    public function getCancelJobsCount()
    {
        return $this->container['cancelJobsCount'];
    }

    /**
    * Sets cancelJobsCount
    *
    * @param int|null $cancelJobsCount 作业取消数量。
    *
    * @return $this
    */
    public function setCancelJobsCount($cancelJobsCount)
    {
        $this->container['cancelJobsCount'] = $cancelJobsCount;
        return $this;
    }

    /**
    * Gets exceptionCount
    *  作业异常数量。
    *
    * @return int|null
    */
    public function getExceptionCount()
    {
        return $this->container['exceptionCount'];
    }

    /**
    * Sets exceptionCount
    *
    * @param int|null $exceptionCount 作业异常数量。
    *
    * @return $this
    */
    public function setExceptionCount($exceptionCount)
    {
        $this->container['exceptionCount'] = $exceptionCount;
        return $this;
    }

    /**
    * Gets modifyCount
    *  修改作业数量。
    *
    * @return int|null
    */
    public function getModifyCount()
    {
        return $this->container['modifyCount'];
    }

    /**
    * Sets modifyCount
    *
    * @param int|null $modifyCount 修改作业数量。
    *
    * @return $this
    */
    public function setModifyCount($modifyCount)
    {
        $this->container['modifyCount'] = $modifyCount;
        return $this;
    }

    /**
    * Gets multiPeriodUnfinishedCount
    *  多周期未完成数量。
    *
    * @return int|null
    */
    public function getMultiPeriodUnfinishedCount()
    {
        return $this->container['multiPeriodUnfinishedCount'];
    }

    /**
    * Sets multiPeriodUnfinishedCount
    *
    * @param int|null $multiPeriodUnfinishedCount 多周期未完成数量。
    *
    * @return $this
    */
    public function setMultiPeriodUnfinishedCount($multiPeriodUnfinishedCount)
    {
        $this->container['multiPeriodUnfinishedCount'] = $multiPeriodUnfinishedCount;
        return $this;
    }

    /**
    * Gets overloadCount
    *  资源繁忙作业数量。
    *
    * @return int|null
    */
    public function getOverloadCount()
    {
        return $this->container['overloadCount'];
    }

    /**
    * Sets overloadCount
    *
    * @param int|null $overloadCount 资源繁忙作业数量。
    *
    * @return $this
    */
    public function setOverloadCount($overloadCount)
    {
        $this->container['overloadCount'] = $overloadCount;
        return $this;
    }

    /**
    * Gets recoverJobsCount
    *  失败作业恢复数量。
    *
    * @return int|null
    */
    public function getRecoverJobsCount()
    {
        return $this->container['recoverJobsCount'];
    }

    /**
    * Sets recoverJobsCount
    *
    * @param int|null $recoverJobsCount 失败作业恢复数量。
    *
    * @return $this
    */
    public function setRecoverJobsCount($recoverJobsCount)
    {
        $this->container['recoverJobsCount'] = $recoverJobsCount;
        return $this;
    }

    /**
    * Gets successCount
    *  作业成功数量。
    *
    * @return int|null
    */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
    * Sets successCount
    *
    * @param int|null $successCount 作业成功数量。
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
        return $this;
    }

    /**
    * Gets total
    *  作业总数量。
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
    * @param int|null $total 作业总数量。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets totalAll
    *  通知规则数量。
    *
    * @return int|null
    */
    public function getTotalAll()
    {
        return $this->container['totalAll'];
    }

    /**
    * Sets totalAll
    *
    * @param int|null $totalAll 通知规则数量。
    *
    * @return $this
    */
    public function setTotalAll($totalAll)
    {
        $this->container['totalAll'] = $totalAll;
        return $this;
    }

    /**
    * Gets unfinishedCount
    *  未完成作业数量。
    *
    * @return int|null
    */
    public function getUnfinishedCount()
    {
        return $this->container['unfinishedCount'];
    }

    /**
    * Sets unfinishedCount
    *
    * @param int|null $unfinishedCount 未完成作业数量。
    *
    * @return $this
    */
    public function setUnfinishedCount($unfinishedCount)
    {
        $this->container['unfinishedCount'] = $unfinishedCount;
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

