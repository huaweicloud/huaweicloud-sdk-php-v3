<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobProgressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobProgressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  任务状态，目前取值如下： SUCCESS：表示该任务执行已经结束，任务执行成功。 FAIL：表示该任务执行已经结束，任务执行失败。 RUNNING：表示该任务正在执行。 INIT：表给任务还未执行，正在初始化。
    * jobId  任务ID。
    * jobType  任务类型。
    * beginTime  任务开始执行时间。格式为UTC时间。
    * endTime  任务结束时间。格式为UTC时间。
    * errorCode  错误码。
    * failReason  失败原因。
    * entities  entities
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
            'failReason' => 'string',
            'entities' => '\HuaweiCloud\SDK\Ims\V2\Model\JobProgressEntities'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  任务状态，目前取值如下： SUCCESS：表示该任务执行已经结束，任务执行成功。 FAIL：表示该任务执行已经结束，任务执行失败。 RUNNING：表示该任务正在执行。 INIT：表给任务还未执行，正在初始化。
    * jobId  任务ID。
    * jobType  任务类型。
    * beginTime  任务开始执行时间。格式为UTC时间。
    * endTime  任务结束时间。格式为UTC时间。
    * errorCode  错误码。
    * failReason  失败原因。
    * entities  entities
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
        'failReason' => null,
        'entities' => null
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
    * status  任务状态，目前取值如下： SUCCESS：表示该任务执行已经结束，任务执行成功。 FAIL：表示该任务执行已经结束，任务执行失败。 RUNNING：表示该任务正在执行。 INIT：表给任务还未执行，正在初始化。
    * jobId  任务ID。
    * jobType  任务类型。
    * beginTime  任务开始执行时间。格式为UTC时间。
    * endTime  任务结束时间。格式为UTC时间。
    * errorCode  错误码。
    * failReason  失败原因。
    * entities  entities
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
            'failReason' => 'fail_reason',
            'entities' => 'entities'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  任务状态，目前取值如下： SUCCESS：表示该任务执行已经结束，任务执行成功。 FAIL：表示该任务执行已经结束，任务执行失败。 RUNNING：表示该任务正在执行。 INIT：表给任务还未执行，正在初始化。
    * jobId  任务ID。
    * jobType  任务类型。
    * beginTime  任务开始执行时间。格式为UTC时间。
    * endTime  任务结束时间。格式为UTC时间。
    * errorCode  错误码。
    * failReason  失败原因。
    * entities  entities
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
            'failReason' => 'setFailReason',
            'entities' => 'setEntities'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  任务状态，目前取值如下： SUCCESS：表示该任务执行已经结束，任务执行成功。 FAIL：表示该任务执行已经结束，任务执行失败。 RUNNING：表示该任务正在执行。 INIT：表给任务还未执行，正在初始化。
    * jobId  任务ID。
    * jobType  任务类型。
    * beginTime  任务开始执行时间。格式为UTC时间。
    * endTime  任务结束时间。格式为UTC时间。
    * errorCode  错误码。
    * failReason  失败原因。
    * entities  entities
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
            'failReason' => 'getFailReason',
            'entities' => 'getEntities'
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
    const STATUS_FAIL = 'FAIL';
    const STATUS_RUNNING = 'RUNNING';
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
            self::STATUS_FAIL,
            self::STATUS_RUNNING,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
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
    * Gets status
    *  任务状态，目前取值如下： SUCCESS：表示该任务执行已经结束，任务执行成功。 FAIL：表示该任务执行已经结束，任务执行失败。 RUNNING：表示该任务正在执行。 INIT：表给任务还未执行，正在初始化。
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
    * @param string|null $status 任务状态，目前取值如下： SUCCESS：表示该任务执行已经结束，任务执行成功。 FAIL：表示该任务执行已经结束，任务执行失败。 RUNNING：表示该任务正在执行。 INIT：表给任务还未执行，正在初始化。
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
    *  任务ID。
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
    * @param string|null $jobId 任务ID。
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
    *  任务类型。
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
    * @param string|null $jobType 任务类型。
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
    *  任务开始执行时间。格式为UTC时间。
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
    * @param string|null $beginTime 任务开始执行时间。格式为UTC时间。
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
    *  任务结束时间。格式为UTC时间。
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
    * @param string|null $endTime 任务结束时间。格式为UTC时间。
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
    *  错误码。
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
    * @param string|null $errorCode 错误码。
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
    *  失败原因。
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
    * @param string|null $failReason 失败原因。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets entities
    *  entities
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\JobProgressEntities|null
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\JobProgressEntities|null $entities entities
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
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

