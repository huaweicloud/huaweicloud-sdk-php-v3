<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MainJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MainJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  任务状态
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * jobId  任务ID
    * jobType  任务类型
    * errorCode  任务的错误码
    * errorMsg  任务的错误信息
    * projectId  项目ID
    * resourceId  参数解释：资源ID。
    * subJobs  子任务列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'jobId' => 'string',
            'jobType' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'projectId' => 'string',
            'resourceId' => 'string',
            'subJobs' => '\HuaweiCloud\SDK\Elb\V3\Model\SubJob[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  任务状态
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * jobId  任务ID
    * jobType  任务类型
    * errorCode  任务的错误码
    * errorMsg  任务的错误信息
    * projectId  项目ID
    * resourceId  参数解释：资源ID。
    * subJobs  子任务列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'beginTime' => null,
        'endTime' => null,
        'jobId' => null,
        'jobType' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'projectId' => null,
        'resourceId' => null,
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
    * status  任务状态
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * jobId  任务ID
    * jobType  任务类型
    * errorCode  任务的错误码
    * errorMsg  任务的错误信息
    * projectId  项目ID
    * resourceId  参数解释：资源ID。
    * subJobs  子任务列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'projectId' => 'project_id',
            'resourceId' => 'resource_id',
            'subJobs' => 'sub_jobs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  任务状态
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * jobId  任务ID
    * jobType  任务类型
    * errorCode  任务的错误码
    * errorMsg  任务的错误信息
    * projectId  项目ID
    * resourceId  参数解释：资源ID。
    * subJobs  子任务列表
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'projectId' => 'setProjectId',
            'resourceId' => 'setResourceId',
            'subJobs' => 'setSubJobs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  任务状态
    * beginTime  任务开始时间
    * endTime  任务结束时间
    * jobId  任务ID
    * jobType  任务类型
    * errorCode  任务的错误码
    * errorMsg  任务的错误信息
    * projectId  项目ID
    * resourceId  参数解释：资源ID。
    * subJobs  子任务列表
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'projectId' => 'getProjectId',
            'resourceId' => 'getResourceId',
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
    const STATUS_INIT = 'INIT';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_FAIL = 'FAIL';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_ROLLBACKING = 'ROLLBACKING';
    const STATUS_COMPLETE = 'COMPLETE';
    const STATUS_ROLLBACK_FAIL = 'ROLLBACK_FAIL';
    const STATUS_CANCEL = 'CANCEL';
    

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
            self::STATUS_FAIL,
            self::STATUS_SUCCESS,
            self::STATUS_ROLLBACKING,
            self::STATUS_COMPLETE,
            self::STATUS_ROLLBACK_FAIL,
            self::STATUS_CANCEL,
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
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
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
    *  任务状态
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
    * @param string|null $status 任务状态
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
    *  任务开始时间
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
    * @param string|null $beginTime 任务开始时间
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
    *  任务结束时间
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
    * @param string|null $endTime 任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets jobId
    *  任务ID
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
    * @param string|null $jobId 任务ID
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
    *  任务类型
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
    * @param string|null $jobType 任务类型
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets errorCode
    *  任务的错误码
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
    * @param string|null $errorCode 任务的错误码
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
    *  任务的错误信息
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
    * @param string|null $errorMsg 任务的错误信息
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets resourceId
    *  参数解释：资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 参数解释：资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets subJobs
    *  子任务列表
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\SubJob[]|null
    */
    public function getSubJobs()
    {
        return $this->container['subJobs'];
    }

    /**
    * Sets subJobs
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\SubJob[]|null $subJobs 子任务列表
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

