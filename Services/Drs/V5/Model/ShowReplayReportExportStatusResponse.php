<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReplayReportExportStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReplayReportExportStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * exportStatus  导出状态。取值范围： - EXPORTING ：导出中 - EXPORT_COMPLETE ：导出完成 - EXPORT_COMMON_FAILED ：导出失败
    * jobId  任务id
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - error_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * failedReason  失败原因
    * totalCount  导出的数据总量
    * currentCount  当前已经处理数据量
    * progressPercentage  任务进度百分数
    * uploadedFileNames  已经上传到obs的文件名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'exportStatus' => 'string',
            'jobId' => 'string',
            'fileType' => 'string',
            'failedReason' => 'string',
            'totalCount' => 'int',
            'currentCount' => 'int',
            'progressPercentage' => 'int',
            'uploadedFileNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * exportStatus  导出状态。取值范围： - EXPORTING ：导出中 - EXPORT_COMPLETE ：导出完成 - EXPORT_COMMON_FAILED ：导出失败
    * jobId  任务id
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - error_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * failedReason  失败原因
    * totalCount  导出的数据总量
    * currentCount  当前已经处理数据量
    * progressPercentage  任务进度百分数
    * uploadedFileNames  已经上传到obs的文件名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'exportStatus' => null,
        'jobId' => null,
        'fileType' => null,
        'failedReason' => null,
        'totalCount' => 'int64',
        'currentCount' => 'int64',
        'progressPercentage' => 'int32',
        'uploadedFileNames' => null
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
    * exportStatus  导出状态。取值范围： - EXPORTING ：导出中 - EXPORT_COMPLETE ：导出完成 - EXPORT_COMMON_FAILED ：导出失败
    * jobId  任务id
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - error_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * failedReason  失败原因
    * totalCount  导出的数据总量
    * currentCount  当前已经处理数据量
    * progressPercentage  任务进度百分数
    * uploadedFileNames  已经上传到obs的文件名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'exportStatus' => 'export_status',
            'jobId' => 'job_id',
            'fileType' => 'file_type',
            'failedReason' => 'failed_reason',
            'totalCount' => 'total_count',
            'currentCount' => 'current_count',
            'progressPercentage' => 'progress_percentage',
            'uploadedFileNames' => 'uploaded_file_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * exportStatus  导出状态。取值范围： - EXPORTING ：导出中 - EXPORT_COMPLETE ：导出完成 - EXPORT_COMMON_FAILED ：导出失败
    * jobId  任务id
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - error_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * failedReason  失败原因
    * totalCount  导出的数据总量
    * currentCount  当前已经处理数据量
    * progressPercentage  任务进度百分数
    * uploadedFileNames  已经上传到obs的文件名称
    *
    * @var string[]
    */
    protected static $setters = [
            'exportStatus' => 'setExportStatus',
            'jobId' => 'setJobId',
            'fileType' => 'setFileType',
            'failedReason' => 'setFailedReason',
            'totalCount' => 'setTotalCount',
            'currentCount' => 'setCurrentCount',
            'progressPercentage' => 'setProgressPercentage',
            'uploadedFileNames' => 'setUploadedFileNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * exportStatus  导出状态。取值范围： - EXPORTING ：导出中 - EXPORT_COMPLETE ：导出完成 - EXPORT_COMMON_FAILED ：导出失败
    * jobId  任务id
    * fileType  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - error_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    * failedReason  失败原因
    * totalCount  导出的数据总量
    * currentCount  当前已经处理数据量
    * progressPercentage  任务进度百分数
    * uploadedFileNames  已经上传到obs的文件名称
    *
    * @var string[]
    */
    protected static $getters = [
            'exportStatus' => 'getExportStatus',
            'jobId' => 'getJobId',
            'fileType' => 'getFileType',
            'failedReason' => 'getFailedReason',
            'totalCount' => 'getTotalCount',
            'currentCount' => 'getCurrentCount',
            'progressPercentage' => 'getProgressPercentage',
            'uploadedFileNames' => 'getUploadedFileNames'
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
        $this->container['exportStatus'] = isset($data['exportStatus']) ? $data['exportStatus'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['failedReason'] = isset($data['failedReason']) ? $data['failedReason'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['currentCount'] = isset($data['currentCount']) ? $data['currentCount'] : null;
        $this->container['progressPercentage'] = isset($data['progressPercentage']) ? $data['progressPercentage'] : null;
        $this->container['uploadedFileNames'] = isset($data['uploadedFileNames']) ? $data['uploadedFileNames'] : null;
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
    * Gets exportStatus
    *  导出状态。取值范围： - EXPORTING ：导出中 - EXPORT_COMPLETE ：导出完成 - EXPORT_COMMON_FAILED ：导出失败
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
    * @param string|null $exportStatus 导出状态。取值范围： - EXPORTING ：导出中 - EXPORT_COMPLETE ：导出完成 - EXPORT_COMMON_FAILED ：导出失败
    *
    * @return $this
    */
    public function setExportStatus($exportStatus)
    {
        $this->container['exportStatus'] = $exportStatus;
        return $this;
    }

    /**
    * Gets jobId
    *  任务id
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 任务id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets fileType
    *  导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - error_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 导出的sql文件类型。取值范围： - abnormal_sql ：异常sql列表 - error_sql_detail ：异常sql详情 - slow_sql ：慢sql列表 - slow_sql_detail ： 慢sql详情
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets failedReason
    *  失败原因
    *
    * @return string|null
    */
    public function getFailedReason()
    {
        return $this->container['failedReason'];
    }

    /**
    * Sets failedReason
    *
    * @param string|null $failedReason 失败原因
    *
    * @return $this
    */
    public function setFailedReason($failedReason)
    {
        $this->container['failedReason'] = $failedReason;
        return $this;
    }

    /**
    * Gets totalCount
    *  导出的数据总量
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 导出的数据总量
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets currentCount
    *  当前已经处理数据量
    *
    * @return int|null
    */
    public function getCurrentCount()
    {
        return $this->container['currentCount'];
    }

    /**
    * Sets currentCount
    *
    * @param int|null $currentCount 当前已经处理数据量
    *
    * @return $this
    */
    public function setCurrentCount($currentCount)
    {
        $this->container['currentCount'] = $currentCount;
        return $this;
    }

    /**
    * Gets progressPercentage
    *  任务进度百分数
    *
    * @return int|null
    */
    public function getProgressPercentage()
    {
        return $this->container['progressPercentage'];
    }

    /**
    * Sets progressPercentage
    *
    * @param int|null $progressPercentage 任务进度百分数
    *
    * @return $this
    */
    public function setProgressPercentage($progressPercentage)
    {
        $this->container['progressPercentage'] = $progressPercentage;
        return $this;
    }

    /**
    * Gets uploadedFileNames
    *  已经上传到obs的文件名称
    *
    * @return string[]|null
    */
    public function getUploadedFileNames()
    {
        return $this->container['uploadedFileNames'];
    }

    /**
    * Sets uploadedFileNames
    *
    * @param string[]|null $uploadedFileNames 已经上传到obs的文件名称
    *
    * @return $this
    */
    public function setUploadedFileNames($uploadedFileNames)
    {
        $this->container['uploadedFileNames'] = $uploadedFileNames;
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

