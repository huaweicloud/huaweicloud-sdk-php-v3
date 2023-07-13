<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobsRespJobList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobsResp_job_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * status  任务状态。  - pending:等待中 - running:运行中 - success:成功 - failed:失败
    * jobType  任务类型。
    * jobName  任务名称。
    * relatedGraph  关联图名称。
    * beginTime  任务开始时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * endTime  任务结束时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * jobDetail  jobDetail
    * failReason  任务失败原因。
    * jobProgress  任务执行进度，预留字段，暂未使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'status' => 'string',
            'jobType' => 'string',
            'jobName' => 'string',
            'relatedGraph' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'jobDetail' => '\HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetail',
            'failReason' => 'string',
            'jobProgress' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * status  任务状态。  - pending:等待中 - running:运行中 - success:成功 - failed:失败
    * jobType  任务类型。
    * jobName  任务名称。
    * relatedGraph  关联图名称。
    * beginTime  任务开始时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * endTime  任务结束时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * jobDetail  jobDetail
    * failReason  任务失败原因。
    * jobProgress  任务执行进度，预留字段，暂未使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'status' => null,
        'jobType' => null,
        'jobName' => null,
        'relatedGraph' => null,
        'beginTime' => null,
        'endTime' => null,
        'jobDetail' => null,
        'failReason' => null,
        'jobProgress' => 'double'
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
    * jobId  任务ID。
    * status  任务状态。  - pending:等待中 - running:运行中 - success:成功 - failed:失败
    * jobType  任务类型。
    * jobName  任务名称。
    * relatedGraph  关联图名称。
    * beginTime  任务开始时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * endTime  任务结束时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * jobDetail  jobDetail
    * failReason  任务失败原因。
    * jobProgress  任务执行进度，预留字段，暂未使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'status' => 'status',
            'jobType' => 'job_type',
            'jobName' => 'job_name',
            'relatedGraph' => 'related_graph',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'jobDetail' => 'job_detail',
            'failReason' => 'fail_reason',
            'jobProgress' => 'job_progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * status  任务状态。  - pending:等待中 - running:运行中 - success:成功 - failed:失败
    * jobType  任务类型。
    * jobName  任务名称。
    * relatedGraph  关联图名称。
    * beginTime  任务开始时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * endTime  任务结束时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * jobDetail  jobDetail
    * failReason  任务失败原因。
    * jobProgress  任务执行进度，预留字段，暂未使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'status' => 'setStatus',
            'jobType' => 'setJobType',
            'jobName' => 'setJobName',
            'relatedGraph' => 'setRelatedGraph',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'jobDetail' => 'setJobDetail',
            'failReason' => 'setFailReason',
            'jobProgress' => 'setJobProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * status  任务状态。  - pending:等待中 - running:运行中 - success:成功 - failed:失败
    * jobType  任务类型。
    * jobName  任务名称。
    * relatedGraph  关联图名称。
    * beginTime  任务开始时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * endTime  任务结束时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    * jobDetail  jobDetail
    * failReason  任务失败原因。
    * jobProgress  任务执行进度，预留字段，暂未使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'status' => 'getStatus',
            'jobType' => 'getJobType',
            'jobName' => 'getJobName',
            'relatedGraph' => 'getRelatedGraph',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'jobDetail' => 'getJobDetail',
            'failReason' => 'getFailReason',
            'jobProgress' => 'getJobProgress'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['relatedGraph'] = isset($data['relatedGraph']) ? $data['relatedGraph'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['jobDetail'] = isset($data['jobDetail']) ? $data['jobDetail'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
        $this->container['jobProgress'] = isset($data['jobProgress']) ? $data['jobProgress'] : null;
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
    * Gets status
    *  任务状态。  - pending:等待中 - running:运行中 - success:成功 - failed:失败
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
    * @param string|null $status 任务状态。  - pending:等待中 - running:运行中 - success:成功 - failed:失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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
    * Gets jobName
    *  任务名称。
    *
    * @return string|null
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string|null $jobName 任务名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets relatedGraph
    *  关联图名称。
    *
    * @return string|null
    */
    public function getRelatedGraph()
    {
        return $this->container['relatedGraph'];
    }

    /**
    * Sets relatedGraph
    *
    * @param string|null $relatedGraph 关联图名称。
    *
    * @return $this
    */
    public function setRelatedGraph($relatedGraph)
    {
        $this->container['relatedGraph'] = $relatedGraph;
        return $this;
    }

    /**
    * Gets beginTime
    *  任务开始时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
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
    * @param string|null $beginTime 任务开始时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
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
    *  任务结束时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
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
    * @param string|null $endTime 任务结束时间，格式为UTC,\"yyyy-MM-dd'T'HH:mm:ss\"。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets jobDetail
    *  jobDetail
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetail|null
    */
    public function getJobDetail()
    {
        return $this->container['jobDetail'];
    }

    /**
    * Sets jobDetail
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetail|null $jobDetail jobDetail
    *
    * @return $this
    */
    public function setJobDetail($jobDetail)
    {
        $this->container['jobDetail'] = $jobDetail;
        return $this;
    }

    /**
    * Gets failReason
    *  任务失败原因。
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
    * @param string|null $failReason 任务失败原因。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
        return $this;
    }

    /**
    * Gets jobProgress
    *  任务执行进度，预留字段，暂未使用。
    *
    * @return double|null
    */
    public function getJobProgress()
    {
        return $this->container['jobProgress'];
    }

    /**
    * Sets jobProgress
    *
    * @param double|null $jobProgress 任务执行进度，预留字段，暂未使用。
    *
    * @return $this
    */
    public function setJobProgress($jobProgress)
    {
        $this->container['jobProgress'] = $jobProgress;
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

