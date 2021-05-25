<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginTime  开始时间。
    * code  查询Job的API请求出现错误时，返回的错误码。
    * endTime  结束时间。
    * entities  entities
    * errorCode  Job执行失败时的错误码。  Job执行成功后，该值为null。
    * failReason  Job执行失败时的错误原因。  Job执行成功后，该值为null。
    * jobId  异步请求的任务ID。
    * jobType  异步请求的任务类型。
    * message  查询Job的API请求出现错误时，返回的错误消息。
    * status  Job的状态。  - SUCCESS：成功。  - RUNNING：运行中。  - FAIL：失败。  - INIT：正在初始化。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginTime' => 'string',
            'code' => 'string',
            'endTime' => 'string',
            'entities' => '\HuaweiCloud\SDK\Ecs\V2\Model\JobEntities',
            'errorCode' => 'string',
            'failReason' => 'string',
            'jobId' => 'string',
            'jobType' => 'string',
            'message' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginTime  开始时间。
    * code  查询Job的API请求出现错误时，返回的错误码。
    * endTime  结束时间。
    * entities  entities
    * errorCode  Job执行失败时的错误码。  Job执行成功后，该值为null。
    * failReason  Job执行失败时的错误原因。  Job执行成功后，该值为null。
    * jobId  异步请求的任务ID。
    * jobType  异步请求的任务类型。
    * message  查询Job的API请求出现错误时，返回的错误消息。
    * status  Job的状态。  - SUCCESS：成功。  - RUNNING：运行中。  - FAIL：失败。  - INIT：正在初始化。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginTime' => null,
        'code' => null,
        'endTime' => null,
        'entities' => null,
        'errorCode' => null,
        'failReason' => null,
        'jobId' => null,
        'jobType' => null,
        'message' => null,
        'status' => null
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
    * beginTime  开始时间。
    * code  查询Job的API请求出现错误时，返回的错误码。
    * endTime  结束时间。
    * entities  entities
    * errorCode  Job执行失败时的错误码。  Job执行成功后，该值为null。
    * failReason  Job执行失败时的错误原因。  Job执行成功后，该值为null。
    * jobId  异步请求的任务ID。
    * jobType  异步请求的任务类型。
    * message  查询Job的API请求出现错误时，返回的错误消息。
    * status  Job的状态。  - SUCCESS：成功。  - RUNNING：运行中。  - FAIL：失败。  - INIT：正在初始化。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginTime' => 'begin_time',
            'code' => 'code',
            'endTime' => 'end_time',
            'entities' => 'entities',
            'errorCode' => 'error_code',
            'failReason' => 'fail_reason',
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'message' => 'message',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginTime  开始时间。
    * code  查询Job的API请求出现错误时，返回的错误码。
    * endTime  结束时间。
    * entities  entities
    * errorCode  Job执行失败时的错误码。  Job执行成功后，该值为null。
    * failReason  Job执行失败时的错误原因。  Job执行成功后，该值为null。
    * jobId  异步请求的任务ID。
    * jobType  异步请求的任务类型。
    * message  查询Job的API请求出现错误时，返回的错误消息。
    * status  Job的状态。  - SUCCESS：成功。  - RUNNING：运行中。  - FAIL：失败。  - INIT：正在初始化。
    *
    * @var string[]
    */
    protected static $setters = [
            'beginTime' => 'setBeginTime',
            'code' => 'setCode',
            'endTime' => 'setEndTime',
            'entities' => 'setEntities',
            'errorCode' => 'setErrorCode',
            'failReason' => 'setFailReason',
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'message' => 'setMessage',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginTime  开始时间。
    * code  查询Job的API请求出现错误时，返回的错误码。
    * endTime  结束时间。
    * entities  entities
    * errorCode  Job执行失败时的错误码。  Job执行成功后，该值为null。
    * failReason  Job执行失败时的错误原因。  Job执行成功后，该值为null。
    * jobId  异步请求的任务ID。
    * jobType  异步请求的任务类型。
    * message  查询Job的API请求出现错误时，返回的错误消息。
    * status  Job的状态。  - SUCCESS：成功。  - RUNNING：运行中。  - FAIL：失败。  - INIT：正在初始化。
    *
    * @var string[]
    */
    protected static $getters = [
            'beginTime' => 'getBeginTime',
            'code' => 'getCode',
            'endTime' => 'getEndTime',
            'entities' => 'getEntities',
            'errorCode' => 'getErrorCode',
            'failReason' => 'getFailReason',
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'message' => 'getMessage',
            'status' => 'getStatus'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_FAIL = 'FAIL';
    const STATUS_INIT = 'INIT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_RUNNING,
            self::STATUS_FAIL,
            self::STATUS_INIT,
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
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets beginTime
    *  开始时间。
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
    * @param string|null $beginTime 开始时间。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets code
    *  查询Job的API请求出现错误时，返回的错误码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 查询Job的API请求出现错误时，返回的错误码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
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
    * Gets entities
    *  entities
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\JobEntities|null
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\JobEntities|null $entities entities
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
        return $this;
    }

    /**
    * Gets errorCode
    *  Job执行失败时的错误码。  Job执行成功后，该值为null。
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
    * @param string|null $errorCode Job执行失败时的错误码。  Job执行成功后，该值为null。
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
    *  Job执行失败时的错误原因。  Job执行成功后，该值为null。
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
    * @param string|null $failReason Job执行失败时的错误原因。  Job执行成功后，该值为null。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets jobId
    *  异步请求的任务ID。
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
    * @param string|null $jobId 异步请求的任务ID。
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
    *  异步请求的任务类型。
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
    * @param string|null $jobType 异步请求的任务类型。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets message
    *  查询Job的API请求出现错误时，返回的错误消息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 查询Job的API请求出现错误时，返回的错误消息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets status
    *  Job的状态。  - SUCCESS：成功。  - RUNNING：运行中。  - FAIL：失败。  - INIT：正在初始化。
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
    * @param string|null $status Job的状态。  - SUCCESS：成功。  - RUNNING：运行中。  - FAIL：失败。  - INIT：正在初始化。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

