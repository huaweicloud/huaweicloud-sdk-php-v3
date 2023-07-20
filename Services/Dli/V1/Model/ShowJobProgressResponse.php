<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

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
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * status  作业状态。
    * subJobId  正在运行的子作业ID，如果作业还没开始运行或者运行结束，则子作业ID可能为空。
    * progress  正在运行的子作业的进度或者整个作业进度，该值只能粗略的估算子作业进度，不表示作业的详细进度。有两方面的含义： （1）如果整个作业刚开始运行或者在提交中，则进度展示为0；如果作业运行结束，则进度展示为1。此时progress表示整个作业的运行进度，因为没有子作业在运行，sub_job_id不展示。 （2）如果有子作业在运行中，则展示该子作业的运行进度，progress的计算方法为：子作业已经完成的task数除以子作业总的task数。此时progress表示子作业的运行进度，sub_job_id展示。
    * subJobs  正在运行作业的子作业的详细信息，一个作业可能包含多个子作业。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'jobId' => 'string',
            'status' => 'string',
            'subJobId' => 'int',
            'progress' => 'double',
            'subJobs' => '\HuaweiCloud\SDK\Dli\V1\Model\SubJobDatas[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * status  作业状态。
    * subJobId  正在运行的子作业ID，如果作业还没开始运行或者运行结束，则子作业ID可能为空。
    * progress  正在运行的子作业的进度或者整个作业进度，该值只能粗略的估算子作业进度，不表示作业的详细进度。有两方面的含义： （1）如果整个作业刚开始运行或者在提交中，则进度展示为0；如果作业运行结束，则进度展示为1。此时progress表示整个作业的运行进度，因为没有子作业在运行，sub_job_id不展示。 （2）如果有子作业在运行中，则展示该子作业的运行进度，progress的计算方法为：子作业已经完成的task数除以子作业总的task数。此时progress表示子作业的运行进度，sub_job_id展示。
    * subJobs  正在运行作业的子作业的详细信息，一个作业可能包含多个子作业。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'jobId' => null,
        'status' => null,
        'subJobId' => 'int32',
        'progress' => 'double',
        'subJobs' => null
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
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * status  作业状态。
    * subJobId  正在运行的子作业ID，如果作业还没开始运行或者运行结束，则子作业ID可能为空。
    * progress  正在运行的子作业的进度或者整个作业进度，该值只能粗略的估算子作业进度，不表示作业的详细进度。有两方面的含义： （1）如果整个作业刚开始运行或者在提交中，则进度展示为0；如果作业运行结束，则进度展示为1。此时progress表示整个作业的运行进度，因为没有子作业在运行，sub_job_id不展示。 （2）如果有子作业在运行中，则展示该子作业的运行进度，progress的计算方法为：子作业已经完成的task数除以子作业总的task数。此时progress表示子作业的运行进度，sub_job_id展示。
    * subJobs  正在运行作业的子作业的详细信息，一个作业可能包含多个子作业。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'jobId' => 'job_id',
            'status' => 'status',
            'subJobId' => 'sub_job_id',
            'progress' => 'progress',
            'subJobs' => 'sub_jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * status  作业状态。
    * subJobId  正在运行的子作业ID，如果作业还没开始运行或者运行结束，则子作业ID可能为空。
    * progress  正在运行的子作业的进度或者整个作业进度，该值只能粗略的估算子作业进度，不表示作业的详细进度。有两方面的含义： （1）如果整个作业刚开始运行或者在提交中，则进度展示为0；如果作业运行结束，则进度展示为1。此时progress表示整个作业的运行进度，因为没有子作业在运行，sub_job_id不展示。 （2）如果有子作业在运行中，则展示该子作业的运行进度，progress的计算方法为：子作业已经完成的task数除以子作业总的task数。此时progress表示子作业的运行进度，sub_job_id展示。
    * subJobs  正在运行作业的子作业的详细信息，一个作业可能包含多个子作业。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'subJobId' => 'setSubJobId',
            'progress' => 'setProgress',
            'subJobs' => 'setSubJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * status  作业状态。
    * subJobId  正在运行的子作业ID，如果作业还没开始运行或者运行结束，则子作业ID可能为空。
    * progress  正在运行的子作业的进度或者整个作业进度，该值只能粗略的估算子作业进度，不表示作业的详细进度。有两方面的含义： （1）如果整个作业刚开始运行或者在提交中，则进度展示为0；如果作业运行结束，则进度展示为1。此时progress表示整个作业的运行进度，因为没有子作业在运行，sub_job_id不展示。 （2）如果有子作业在运行中，则展示该子作业的运行进度，progress的计算方法为：子作业已经完成的task数除以子作业总的task数。此时progress表示子作业的运行进度，sub_job_id展示。
    * subJobs  正在运行作业的子作业的详细信息，一个作业可能包含多个子作业。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'subJobId' => 'getSubJobId',
            'progress' => 'getProgress',
            'subJobs' => 'getSubJobs'
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subJobId'] = isset($data['subJobId']) ? $data['subJobId'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['subJobs'] = isset($data['subJobs']) ? $data['subJobs'] : null;
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
    * Gets isSuccess
    *  执行请求是否成功。“true”表示请求执行成功。
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 执行请求是否成功。“true”表示请求执行成功。
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  系统提示信息，执行成功时，信息可能为空。
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
    * @param string|null $message 系统提示信息，执行成功时，信息可能为空。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets jobId
    *  作业ID。
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
    * @param string|null $jobId 作业ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets status
    *  作业状态。
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
    * @param string|null $status 作业状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets subJobId
    *  正在运行的子作业ID，如果作业还没开始运行或者运行结束，则子作业ID可能为空。
    *
    * @return int|null
    */
    public function getSubJobId()
    {
        return $this->container['subJobId'];
    }

    /**
    * Sets subJobId
    *
    * @param int|null $subJobId 正在运行的子作业ID，如果作业还没开始运行或者运行结束，则子作业ID可能为空。
    *
    * @return $this
    */
    public function setSubJobId($subJobId)
    {
        $this->container['subJobId'] = $subJobId;
        return $this;
    }

    /**
    * Gets progress
    *  正在运行的子作业的进度或者整个作业进度，该值只能粗略的估算子作业进度，不表示作业的详细进度。有两方面的含义： （1）如果整个作业刚开始运行或者在提交中，则进度展示为0；如果作业运行结束，则进度展示为1。此时progress表示整个作业的运行进度，因为没有子作业在运行，sub_job_id不展示。 （2）如果有子作业在运行中，则展示该子作业的运行进度，progress的计算方法为：子作业已经完成的task数除以子作业总的task数。此时progress表示子作业的运行进度，sub_job_id展示。
    *
    * @return double|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param double|null $progress 正在运行的子作业的进度或者整个作业进度，该值只能粗略的估算子作业进度，不表示作业的详细进度。有两方面的含义： （1）如果整个作业刚开始运行或者在提交中，则进度展示为0；如果作业运行结束，则进度展示为1。此时progress表示整个作业的运行进度，因为没有子作业在运行，sub_job_id不展示。 （2）如果有子作业在运行中，则展示该子作业的运行进度，progress的计算方法为：子作业已经完成的task数除以子作业总的task数。此时progress表示子作业的运行进度，sub_job_id展示。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets subJobs
    *  正在运行作业的子作业的详细信息，一个作业可能包含多个子作业。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\SubJobDatas[]|null
    */
    public function getSubJobs()
    {
        return $this->container['subJobs'];
    }

    /**
    * Sets subJobs
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\SubJobDatas[]|null $subJobs 正在运行作业的子作业的详细信息，一个作业可能包含多个子作业。
    *
    * @return $this
    */
    public function setSubJobs($subJobs)
    {
        $this->container['subJobs'] = $subJobs;
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

