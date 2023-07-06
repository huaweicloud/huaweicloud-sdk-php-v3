<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryProgressResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryProgressResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务Id
    * progress  迁移百分比
    * increTransDelay  增量迁移时延
    * taskMode  迁移模式。 - FULL_TRANS: 全量 - INCR_TRANS: 增量 - FULL_INCR_TRANS: 全量+增量
    * transferStatus  任务状态
    * processTime  迁移时间，时间戳
    * remainingTime  预计剩余时间
    * progressMap  数据，结构，索引迁移进度信息体
    * errorCode  错误码
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'progress' => 'string',
            'increTransDelay' => 'string',
            'taskMode' => 'string',
            'transferStatus' => 'string',
            'processTime' => 'string',
            'remainingTime' => 'string',
            'progressMap' => 'map[string,\HuaweiCloud\SDK\Drs\V3\Model\ProgressInfo]',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务Id
    * progress  迁移百分比
    * increTransDelay  增量迁移时延
    * taskMode  迁移模式。 - FULL_TRANS: 全量 - INCR_TRANS: 增量 - FULL_INCR_TRANS: 全量+增量
    * transferStatus  任务状态
    * processTime  迁移时间，时间戳
    * remainingTime  预计剩余时间
    * progressMap  数据，结构，索引迁移进度信息体
    * errorCode  错误码
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'progress' => null,
        'increTransDelay' => null,
        'taskMode' => null,
        'transferStatus' => null,
        'processTime' => null,
        'remainingTime' => null,
        'progressMap' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * jobId  任务Id
    * progress  迁移百分比
    * increTransDelay  增量迁移时延
    * taskMode  迁移模式。 - FULL_TRANS: 全量 - INCR_TRANS: 增量 - FULL_INCR_TRANS: 全量+增量
    * transferStatus  任务状态
    * processTime  迁移时间，时间戳
    * remainingTime  预计剩余时间
    * progressMap  数据，结构，索引迁移进度信息体
    * errorCode  错误码
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'progress' => 'progress',
            'increTransDelay' => 'incre_trans_delay',
            'taskMode' => 'task_mode',
            'transferStatus' => 'transfer_status',
            'processTime' => 'process_time',
            'remainingTime' => 'remaining_time',
            'progressMap' => 'progress_map',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务Id
    * progress  迁移百分比
    * increTransDelay  增量迁移时延
    * taskMode  迁移模式。 - FULL_TRANS: 全量 - INCR_TRANS: 增量 - FULL_INCR_TRANS: 全量+增量
    * transferStatus  任务状态
    * processTime  迁移时间，时间戳
    * remainingTime  预计剩余时间
    * progressMap  数据，结构，索引迁移进度信息体
    * errorCode  错误码
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'progress' => 'setProgress',
            'increTransDelay' => 'setIncreTransDelay',
            'taskMode' => 'setTaskMode',
            'transferStatus' => 'setTransferStatus',
            'processTime' => 'setProcessTime',
            'remainingTime' => 'setRemainingTime',
            'progressMap' => 'setProgressMap',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务Id
    * progress  迁移百分比
    * increTransDelay  增量迁移时延
    * taskMode  迁移模式。 - FULL_TRANS: 全量 - INCR_TRANS: 增量 - FULL_INCR_TRANS: 全量+增量
    * transferStatus  任务状态
    * processTime  迁移时间，时间戳
    * remainingTime  预计剩余时间
    * progressMap  数据，结构，索引迁移进度信息体
    * errorCode  错误码
    * errorMsg  错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'progress' => 'getProgress',
            'increTransDelay' => 'getIncreTransDelay',
            'taskMode' => 'getTaskMode',
            'transferStatus' => 'getTransferStatus',
            'processTime' => 'getProcessTime',
            'remainingTime' => 'getRemainingTime',
            'progressMap' => 'getProgressMap',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
    const TASK_MODE_FULL_TRANS = 'FULL_TRANS';
    const TASK_MODE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const TASK_MODE_INCR_TRANS = 'INCR_TRANS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskModeAllowableValues()
    {
        return [
            self::TASK_MODE_FULL_TRANS,
            self::TASK_MODE_FULL_INCR_TRANS,
            self::TASK_MODE_INCR_TRANS,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['increTransDelay'] = isset($data['increTransDelay']) ? $data['increTransDelay'] : null;
        $this->container['taskMode'] = isset($data['taskMode']) ? $data['taskMode'] : null;
        $this->container['transferStatus'] = isset($data['transferStatus']) ? $data['transferStatus'] : null;
        $this->container['processTime'] = isset($data['processTime']) ? $data['processTime'] : null;
        $this->container['remainingTime'] = isset($data['remainingTime']) ? $data['remainingTime'] : null;
        $this->container['progressMap'] = isset($data['progressMap']) ? $data['progressMap'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTaskModeAllowableValues();
                if (!is_null($this->container['taskMode']) && !in_array($this->container['taskMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskMode', must be one of '%s'",
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
    * Gets jobId
    *  任务Id
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
    * @param string|null $jobId 任务Id
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets progress
    *  迁移百分比
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 迁移百分比
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets increTransDelay
    *  增量迁移时延
    *
    * @return string|null
    */
    public function getIncreTransDelay()
    {
        return $this->container['increTransDelay'];
    }

    /**
    * Sets increTransDelay
    *
    * @param string|null $increTransDelay 增量迁移时延
    *
    * @return $this
    */
    public function setIncreTransDelay($increTransDelay)
    {
        $this->container['increTransDelay'] = $increTransDelay;
        return $this;
    }

    /**
    * Gets taskMode
    *  迁移模式。 - FULL_TRANS: 全量 - INCR_TRANS: 增量 - FULL_INCR_TRANS: 全量+增量
    *
    * @return string|null
    */
    public function getTaskMode()
    {
        return $this->container['taskMode'];
    }

    /**
    * Sets taskMode
    *
    * @param string|null $taskMode 迁移模式。 - FULL_TRANS: 全量 - INCR_TRANS: 增量 - FULL_INCR_TRANS: 全量+增量
    *
    * @return $this
    */
    public function setTaskMode($taskMode)
    {
        $this->container['taskMode'] = $taskMode;
        return $this;
    }

    /**
    * Gets transferStatus
    *  任务状态
    *
    * @return string|null
    */
    public function getTransferStatus()
    {
        return $this->container['transferStatus'];
    }

    /**
    * Sets transferStatus
    *
    * @param string|null $transferStatus 任务状态
    *
    * @return $this
    */
    public function setTransferStatus($transferStatus)
    {
        $this->container['transferStatus'] = $transferStatus;
        return $this;
    }

    /**
    * Gets processTime
    *  迁移时间，时间戳
    *
    * @return string|null
    */
    public function getProcessTime()
    {
        return $this->container['processTime'];
    }

    /**
    * Sets processTime
    *
    * @param string|null $processTime 迁移时间，时间戳
    *
    * @return $this
    */
    public function setProcessTime($processTime)
    {
        $this->container['processTime'] = $processTime;
        return $this;
    }

    /**
    * Gets remainingTime
    *  预计剩余时间
    *
    * @return string|null
    */
    public function getRemainingTime()
    {
        return $this->container['remainingTime'];
    }

    /**
    * Sets remainingTime
    *
    * @param string|null $remainingTime 预计剩余时间
    *
    * @return $this
    */
    public function setRemainingTime($remainingTime)
    {
        $this->container['remainingTime'] = $remainingTime;
        return $this;
    }

    /**
    * Gets progressMap
    *  数据，结构，索引迁移进度信息体
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V3\Model\ProgressInfo]|null
    */
    public function getProgressMap()
    {
        return $this->container['progressMap'];
    }

    /**
    * Sets progressMap
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V3\Model\ProgressInfo]|null $progressMap 数据，结构，索引迁移进度信息体
    *
    * @return $this
    */
    public function setProgressMap($progressMap)
    {
        $this->container['progressMap'] = $progressMap;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误码
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode 错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  错误信息
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
    * @param string|null $errorMsg 错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

