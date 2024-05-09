<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListObejectLevelCompareOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListObejectLevelCompareOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  对比任务创建时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * startTime  对比任务开始时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * status  对比任务状态。 取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * exportStatus  生成对比结果报告文件的状态：  - INIT：初始状态。  - EXPORTING：对比结果导出中。  - EXPORT_COMPLETE：对比结果导出完成。  - EXPORT_COMMON_FAILED：对比结果导出失败。
    * reportRemainSeconds  对比结果报告文件有效期剩余时间，单位秒，报告未生成时返回-1。
    * compareJobId  对比任务ID。
    * errorMsg  失败原因。
    * compareResult  对比结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'startTime' => 'string',
            'status' => 'string',
            'exportStatus' => 'string',
            'reportRemainSeconds' => 'int',
            'compareJobId' => 'string',
            'errorMsg' => 'string',
            'compareResult' => '\HuaweiCloud\SDK\Drs\V3\Model\ObjectsCompareOverviewInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  对比任务创建时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * startTime  对比任务开始时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * status  对比任务状态。 取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * exportStatus  生成对比结果报告文件的状态：  - INIT：初始状态。  - EXPORTING：对比结果导出中。  - EXPORT_COMPLETE：对比结果导出完成。  - EXPORT_COMMON_FAILED：对比结果导出失败。
    * reportRemainSeconds  对比结果报告文件有效期剩余时间，单位秒，报告未生成时返回-1。
    * compareJobId  对比任务ID。
    * errorMsg  失败原因。
    * compareResult  对比结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'startTime' => null,
        'status' => null,
        'exportStatus' => null,
        'reportRemainSeconds' => 'int64',
        'compareJobId' => null,
        'errorMsg' => null,
        'compareResult' => null
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
    * createTime  对比任务创建时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * startTime  对比任务开始时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * status  对比任务状态。 取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * exportStatus  生成对比结果报告文件的状态：  - INIT：初始状态。  - EXPORTING：对比结果导出中。  - EXPORT_COMPLETE：对比结果导出完成。  - EXPORT_COMMON_FAILED：对比结果导出失败。
    * reportRemainSeconds  对比结果报告文件有效期剩余时间，单位秒，报告未生成时返回-1。
    * compareJobId  对比任务ID。
    * errorMsg  失败原因。
    * compareResult  对比结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'status' => 'status',
            'exportStatus' => 'export_status',
            'reportRemainSeconds' => 'report_remain_seconds',
            'compareJobId' => 'compare_job_id',
            'errorMsg' => 'error_msg',
            'compareResult' => 'compare_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  对比任务创建时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * startTime  对比任务开始时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * status  对比任务状态。 取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * exportStatus  生成对比结果报告文件的状态：  - INIT：初始状态。  - EXPORTING：对比结果导出中。  - EXPORT_COMPLETE：对比结果导出完成。  - EXPORT_COMMON_FAILED：对比结果导出失败。
    * reportRemainSeconds  对比结果报告文件有效期剩余时间，单位秒，报告未生成时返回-1。
    * compareJobId  对比任务ID。
    * errorMsg  失败原因。
    * compareResult  对比结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'exportStatus' => 'setExportStatus',
            'reportRemainSeconds' => 'setReportRemainSeconds',
            'compareJobId' => 'setCompareJobId',
            'errorMsg' => 'setErrorMsg',
            'compareResult' => 'setCompareResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  对比任务创建时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * startTime  对比任务开始时间，UTC时间，例如：2024-04-09T07:00:57Z。
    * status  对比任务状态。 取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    * exportStatus  生成对比结果报告文件的状态：  - INIT：初始状态。  - EXPORTING：对比结果导出中。  - EXPORT_COMPLETE：对比结果导出完成。  - EXPORT_COMMON_FAILED：对比结果导出失败。
    * reportRemainSeconds  对比结果报告文件有效期剩余时间，单位秒，报告未生成时返回-1。
    * compareJobId  对比任务ID。
    * errorMsg  失败原因。
    * compareResult  对比结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'exportStatus' => 'getExportStatus',
            'reportRemainSeconds' => 'getReportRemainSeconds',
            'compareJobId' => 'getCompareJobId',
            'errorMsg' => 'getErrorMsg',
            'compareResult' => 'getCompareResult'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['exportStatus'] = isset($data['exportStatus']) ? $data['exportStatus'] : null;
        $this->container['reportRemainSeconds'] = isset($data['reportRemainSeconds']) ? $data['reportRemainSeconds'] : null;
        $this->container['compareJobId'] = isset($data['compareJobId']) ? $data['compareJobId'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['compareResult'] = isset($data['compareResult']) ? $data['compareResult'] : null;
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
    * Gets createTime
    *  对比任务创建时间，UTC时间，例如：2024-04-09T07:00:57Z。
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
    * @param string|null $createTime 对比任务创建时间，UTC时间，例如：2024-04-09T07:00:57Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  对比任务开始时间，UTC时间，例如：2024-04-09T07:00:57Z。
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
    * @param string|null $startTime 对比任务开始时间，UTC时间，例如：2024-04-09T07:00:57Z。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  对比任务状态。 取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
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
    * @param string|null $status 对比任务状态。 取值： - RUNNING：运行中。 - WAITING_FOR_RUNNING：等待启动中。 - SUCCESSFUL：完成。 - FAILED：失败。 - CANCELLED：已取消。 - TIMEOUT_INTERRUPT：超时中断。 - FULL_DOING：全量校验中。 - INCRE_DOING：增量校验中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets exportStatus
    *  生成对比结果报告文件的状态：  - INIT：初始状态。  - EXPORTING：对比结果导出中。  - EXPORT_COMPLETE：对比结果导出完成。  - EXPORT_COMMON_FAILED：对比结果导出失败。
    *
    * @return string|null
    */
    public function getExportStatus()
    {
        return $this->container['exportStatus'];
    }

    /**
    * Sets exportStatus
    *
    * @param string|null $exportStatus 生成对比结果报告文件的状态：  - INIT：初始状态。  - EXPORTING：对比结果导出中。  - EXPORT_COMPLETE：对比结果导出完成。  - EXPORT_COMMON_FAILED：对比结果导出失败。
    *
    * @return $this
    */
    public function setExportStatus($exportStatus)
    {
        $this->container['exportStatus'] = $exportStatus;
        return $this;
    }

    /**
    * Gets reportRemainSeconds
    *  对比结果报告文件有效期剩余时间，单位秒，报告未生成时返回-1。
    *
    * @return int|null
    */
    public function getReportRemainSeconds()
    {
        return $this->container['reportRemainSeconds'];
    }

    /**
    * Sets reportRemainSeconds
    *
    * @param int|null $reportRemainSeconds 对比结果报告文件有效期剩余时间，单位秒，报告未生成时返回-1。
    *
    * @return $this
    */
    public function setReportRemainSeconds($reportRemainSeconds)
    {
        $this->container['reportRemainSeconds'] = $reportRemainSeconds;
        return $this;
    }

    /**
    * Gets compareJobId
    *  对比任务ID。
    *
    * @return string|null
    */
    public function getCompareJobId()
    {
        return $this->container['compareJobId'];
    }

    /**
    * Sets compareJobId
    *
    * @param string|null $compareJobId 对比任务ID。
    *
    * @return $this
    */
    public function setCompareJobId($compareJobId)
    {
        $this->container['compareJobId'] = $compareJobId;
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
    * Gets compareResult
    *  对比结果。
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ObjectsCompareOverviewInfo[]|null
    */
    public function getCompareResult()
    {
        return $this->container['compareResult'];
    }

    /**
    * Sets compareResult
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ObjectsCompareOverviewInfo[]|null $compareResult 对比结果。
    *
    * @return $this
    */
    public function setCompareResult($compareResult)
    {
        $this->container['compareResult'] = $compareResult;
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

