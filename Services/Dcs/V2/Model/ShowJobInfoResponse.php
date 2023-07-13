<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  Job任务ID
    * jobType  Job类型，取值范围：   masterStandbySwapJob：主备倒换任务   modifyClientIpTransJob：修改源ip透传
    * status  Job状态
    * beginTime  Job开始时间戳，单位为ms，格式为:1684191545379
    * endTime  Job开始时间戳，单位为ms，格式为:1684191548248
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'jobType' => 'string',
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  Job任务ID
    * jobType  Job类型，取值范围：   masterStandbySwapJob：主备倒换任务   modifyClientIpTransJob：修改源ip透传
    * status  Job状态
    * beginTime  Job开始时间戳，单位为ms，格式为:1684191545379
    * endTime  Job开始时间戳，单位为ms，格式为:1684191548248
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'jobType' => null,
        'status' => null,
        'beginTime' => null,
        'endTime' => null,
        'failReason' => null
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
    * jobId  Job任务ID
    * jobType  Job类型，取值范围：   masterStandbySwapJob：主备倒换任务   modifyClientIpTransJob：修改源ip透传
    * status  Job状态
    * beginTime  Job开始时间戳，单位为ms，格式为:1684191545379
    * endTime  Job开始时间戳，单位为ms，格式为:1684191548248
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  Job任务ID
    * jobType  Job类型，取值范围：   masterStandbySwapJob：主备倒换任务   modifyClientIpTransJob：修改源ip透传
    * status  Job状态
    * beginTime  Job开始时间戳，单位为ms，格式为:1684191545379
    * endTime  Job开始时间戳，单位为ms，格式为:1684191548248
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  Job任务ID
    * jobType  Job类型，取值范围：   masterStandbySwapJob：主备倒换任务   modifyClientIpTransJob：修改源ip透传
    * status  Job状态
    * beginTime  Job开始时间戳，单位为ms，格式为:1684191545379
    * endTime  Job开始时间戳，单位为ms，格式为:1684191548248
    * failReason  失败原因
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'failReason' => 'getFailReason'
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
    const JOB_TYPE_MASTER_STANDBY_SWAP_JOB = 'masterStandbySwapJob';
    const JOB_TYPE_MODIFY_CLIENT_IP_TRANS_JOB = 'modifyClientIpTransJob';
    const STATUS_INIT = 'INIT';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAIL = 'FAIL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_MASTER_STANDBY_SWAP_JOB,
            self::JOB_TYPE_MODIFY_CLIENT_IP_TRANS_JOB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INIT,
            self::STATUS_RUNNING,
            self::STATUS_SUCCESS,
            self::STATUS_FAIL,
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    *  Job任务ID
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
    * @param string|null $jobId Job任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobType
    *  Job类型，取值范围：   masterStandbySwapJob：主备倒换任务   modifyClientIpTransJob：修改源ip透传
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType Job类型，取值范围：   masterStandbySwapJob：主备倒换任务   modifyClientIpTransJob：修改源ip透传
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets status
    *  Job状态
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
    * @param string|null $status Job状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets beginTime
    *  Job开始时间戳，单位为ms，格式为:1684191545379
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime Job开始时间戳，单位为ms，格式为:1684191545379
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  Job开始时间戳，单位为ms，格式为:1684191548248
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
    * @param string|null $endTime Job开始时间戳，单位为ms，格式为:1684191548248
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets failReason
    *  失败原因
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 失败原因
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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

