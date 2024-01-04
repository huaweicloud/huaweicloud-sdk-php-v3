<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetSubJobDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetSubJobDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  子job的状态。success：成功。running：运行中。failed：失败。waiting：等待执行。
    * jobId  job的ID。
    * jobType  子job的类型。
    * beginTime  job开始时间。UTC时间，格式：'2016-01-02 15:04:05'
    * endTime  job结束时间。UTC时间，格式：'2016-01-02 15:04:05'
    * errorCode  job执行失败时的错误码
    * failReason  job执行失败时的错误原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'jobId' => 'string',
            'jobType' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'errorCode' => 'string',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  子job的状态。success：成功。running：运行中。failed：失败。waiting：等待执行。
    * jobId  job的ID。
    * jobType  子job的类型。
    * beginTime  job开始时间。UTC时间，格式：'2016-01-02 15:04:05'
    * endTime  job结束时间。UTC时间，格式：'2016-01-02 15:04:05'
    * errorCode  job执行失败时的错误码
    * failReason  job执行失败时的错误原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'jobId' => null,
        'jobType' => null,
        'beginTime' => null,
        'endTime' => null,
        'errorCode' => null,
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
    * status  子job的状态。success：成功。running：运行中。failed：失败。waiting：等待执行。
    * jobId  job的ID。
    * jobType  子job的类型。
    * beginTime  job开始时间。UTC时间，格式：'2016-01-02 15:04:05'
    * endTime  job结束时间。UTC时间，格式：'2016-01-02 15:04:05'
    * errorCode  job执行失败时的错误码
    * failReason  job执行失败时的错误原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'errorCode' => 'error_code',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  子job的状态。success：成功。running：运行中。failed：失败。waiting：等待执行。
    * jobId  job的ID。
    * jobType  子job的类型。
    * beginTime  job开始时间。UTC时间，格式：'2016-01-02 15:04:05'
    * endTime  job结束时间。UTC时间，格式：'2016-01-02 15:04:05'
    * errorCode  job执行失败时的错误码
    * failReason  job执行失败时的错误原因
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'errorCode' => 'setErrorCode',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  子job的状态。success：成功。running：运行中。failed：失败。waiting：等待执行。
    * jobId  job的ID。
    * jobType  子job的类型。
    * beginTime  job开始时间。UTC时间，格式：'2016-01-02 15:04:05'
    * endTime  job结束时间。UTC时间，格式：'2016-01-02 15:04:05'
    * errorCode  job执行失败时的错误码
    * failReason  job执行失败时的错误原因
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'errorCode' => 'getErrorCode',
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
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
    * Gets status
    *  子job的状态。success：成功。running：运行中。failed：失败。waiting：等待执行。
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
    * @param string|null $status 子job的状态。success：成功。running：运行中。failed：失败。waiting：等待执行。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets jobId
    *  job的ID。
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
    * @param string|null $jobId job的ID。
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
    *  子job的类型。
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
    * @param string|null $jobType 子job的类型。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets beginTime
    *  job开始时间。UTC时间，格式：'2016-01-02 15:04:05'
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
    * @param string|null $beginTime job开始时间。UTC时间，格式：'2016-01-02 15:04:05'
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
    *  job结束时间。UTC时间，格式：'2016-01-02 15:04:05'
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
    * @param string|null $endTime job结束时间。UTC时间，格式：'2016-01-02 15:04:05'
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets errorCode
    *  job执行失败时的错误码
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
    * @param string|null $errorCode job执行失败时的错误码
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets failReason
    *  job执行失败时的错误原因
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
    * @param string|null $failReason job执行失败时的错误原因
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

