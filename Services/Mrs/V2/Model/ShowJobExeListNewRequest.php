<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobExeListNewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobExeListNewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～128个字符。
    * jobId  作业ID，只能由字母、数字、中划线(-)组成，并且长度为1~64字符。
    * user  用户名称、只能由字母、数字、特殊字符(-_.)组成，且不能以数字开头，并且长度为1～32字符。
    * jobType  作业类型。 - MapReduce - SparkPython - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobState  作业运行状态。 - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobResult  作业运行结果。 - FAILED：执行失败的作业。 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * queue  作业的资源对列类型名称，作业的资源对列类型名称，只能由数字、字母和特殊字符(-_)组成, 并且长度为1～64字符。
    * limit  返回结果中每页显示条数。缺省值：10
    * offset  表示作业列表从该偏移量开始查询。缺省值：0
    * sortBy  返回结果的排序方式，默认值为desc。 - asc：按升序排列 - desc：按降序排列
    * submittedTimeBegin  查询该时间之后提交的作业，UTC的毫秒时间戳。例如：1562032041362。
    * submittedTimeEnd  查询该时间之前提交的作业UTC的毫秒时间戳。例如：1562032041362。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'jobName' => 'string',
            'jobId' => 'string',
            'user' => 'string',
            'jobType' => 'string',
            'jobState' => 'string',
            'jobResult' => 'string',
            'queue' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'sortBy' => 'string',
            'submittedTimeBegin' => 'int',
            'submittedTimeEnd' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～128个字符。
    * jobId  作业ID，只能由字母、数字、中划线(-)组成，并且长度为1~64字符。
    * user  用户名称、只能由字母、数字、特殊字符(-_.)组成，且不能以数字开头，并且长度为1～32字符。
    * jobType  作业类型。 - MapReduce - SparkPython - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobState  作业运行状态。 - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobResult  作业运行结果。 - FAILED：执行失败的作业。 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * queue  作业的资源对列类型名称，作业的资源对列类型名称，只能由数字、字母和特殊字符(-_)组成, 并且长度为1～64字符。
    * limit  返回结果中每页显示条数。缺省值：10
    * offset  表示作业列表从该偏移量开始查询。缺省值：0
    * sortBy  返回结果的排序方式，默认值为desc。 - asc：按升序排列 - desc：按降序排列
    * submittedTimeBegin  查询该时间之后提交的作业，UTC的毫秒时间戳。例如：1562032041362。
    * submittedTimeEnd  查询该时间之前提交的作业UTC的毫秒时间戳。例如：1562032041362。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'jobName' => null,
        'jobId' => null,
        'user' => null,
        'jobType' => null,
        'jobState' => null,
        'jobResult' => null,
        'queue' => null,
        'limit' => null,
        'offset' => null,
        'sortBy' => null,
        'submittedTimeBegin' => 'int64',
        'submittedTimeEnd' => 'int64'
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
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～128个字符。
    * jobId  作业ID，只能由字母、数字、中划线(-)组成，并且长度为1~64字符。
    * user  用户名称、只能由字母、数字、特殊字符(-_.)组成，且不能以数字开头，并且长度为1～32字符。
    * jobType  作业类型。 - MapReduce - SparkPython - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobState  作业运行状态。 - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobResult  作业运行结果。 - FAILED：执行失败的作业。 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * queue  作业的资源对列类型名称，作业的资源对列类型名称，只能由数字、字母和特殊字符(-_)组成, 并且长度为1～64字符。
    * limit  返回结果中每页显示条数。缺省值：10
    * offset  表示作业列表从该偏移量开始查询。缺省值：0
    * sortBy  返回结果的排序方式，默认值为desc。 - asc：按升序排列 - desc：按降序排列
    * submittedTimeBegin  查询该时间之后提交的作业，UTC的毫秒时间戳。例如：1562032041362。
    * submittedTimeEnd  查询该时间之前提交的作业UTC的毫秒时间戳。例如：1562032041362。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'jobName' => 'job_name',
            'jobId' => 'job_id',
            'user' => 'user',
            'jobType' => 'job_type',
            'jobState' => 'job_state',
            'jobResult' => 'job_result',
            'queue' => 'queue',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortBy' => 'sort_by',
            'submittedTimeBegin' => 'submitted_time_begin',
            'submittedTimeEnd' => 'submitted_time_end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～128个字符。
    * jobId  作业ID，只能由字母、数字、中划线(-)组成，并且长度为1~64字符。
    * user  用户名称、只能由字母、数字、特殊字符(-_.)组成，且不能以数字开头，并且长度为1～32字符。
    * jobType  作业类型。 - MapReduce - SparkPython - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobState  作业运行状态。 - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobResult  作业运行结果。 - FAILED：执行失败的作业。 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * queue  作业的资源对列类型名称，作业的资源对列类型名称，只能由数字、字母和特殊字符(-_)组成, 并且长度为1～64字符。
    * limit  返回结果中每页显示条数。缺省值：10
    * offset  表示作业列表从该偏移量开始查询。缺省值：0
    * sortBy  返回结果的排序方式，默认值为desc。 - asc：按升序排列 - desc：按降序排列
    * submittedTimeBegin  查询该时间之后提交的作业，UTC的毫秒时间戳。例如：1562032041362。
    * submittedTimeEnd  查询该时间之前提交的作业UTC的毫秒时间戳。例如：1562032041362。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'jobName' => 'setJobName',
            'jobId' => 'setJobId',
            'user' => 'setUser',
            'jobType' => 'setJobType',
            'jobState' => 'setJobState',
            'jobResult' => 'setJobResult',
            'queue' => 'setQueue',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortBy' => 'setSortBy',
            'submittedTimeBegin' => 'setSubmittedTimeBegin',
            'submittedTimeEnd' => 'setSubmittedTimeEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～128个字符。
    * jobId  作业ID，只能由字母、数字、中划线(-)组成，并且长度为1~64字符。
    * user  用户名称、只能由字母、数字、特殊字符(-_.)组成，且不能以数字开头，并且长度为1～32字符。
    * jobType  作业类型。 - MapReduce - SparkPython - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * jobState  作业运行状态。 - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobResult  作业运行结果。 - FAILED：执行失败的作业。 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * queue  作业的资源对列类型名称，作业的资源对列类型名称，只能由数字、字母和特殊字符(-_)组成, 并且长度为1～64字符。
    * limit  返回结果中每页显示条数。缺省值：10
    * offset  表示作业列表从该偏移量开始查询。缺省值：0
    * sortBy  返回结果的排序方式，默认值为desc。 - asc：按升序排列 - desc：按降序排列
    * submittedTimeBegin  查询该时间之后提交的作业，UTC的毫秒时间戳。例如：1562032041362。
    * submittedTimeEnd  查询该时间之前提交的作业UTC的毫秒时间戳。例如：1562032041362。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'jobName' => 'getJobName',
            'jobId' => 'getJobId',
            'user' => 'getUser',
            'jobType' => 'getJobType',
            'jobState' => 'getJobState',
            'jobResult' => 'getJobResult',
            'queue' => 'getQueue',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortBy' => 'getSortBy',
            'submittedTimeBegin' => 'getSubmittedTimeBegin',
            'submittedTimeEnd' => 'getSubmittedTimeEnd'
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
    const JOB_STATE_FAILED = 'FAILED';
    const JOB_STATE_KILLED = 'KILLED';
    const JOB_STATE__NEW = 'NEW';
    const JOB_STATE_NEW_SAVING = 'NEW_SAVING';
    const JOB_STATE_SUBMITTED = 'SUBMITTED';
    const JOB_STATE_ACCEPTED = 'ACCEPTED';
    const JOB_STATE_RUNNING = 'RUNNING';
    const JOB_STATE_FINISHED = 'FINISHED';
    const JOB_RESULT_FAILED = 'FAILED';
    const JOB_RESULT_KILLED = 'KILLED';
    const JOB_RESULT_UNDEFINED = 'UNDEFINED';
    const JOB_RESULT_SUCCEEDED = 'SUCCEEDED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobStateAllowableValues()
    {
        return [
            self::JOB_STATE_FAILED,
            self::JOB_STATE_KILLED,
            self::JOB_STATE__NEW,
            self::JOB_STATE_NEW_SAVING,
            self::JOB_STATE_SUBMITTED,
            self::JOB_STATE_ACCEPTED,
            self::JOB_STATE_RUNNING,
            self::JOB_STATE_FINISHED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobResultAllowableValues()
    {
        return [
            self::JOB_RESULT_FAILED,
            self::JOB_RESULT_KILLED,
            self::JOB_RESULT_UNDEFINED,
            self::JOB_RESULT_SUCCEEDED,
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobState'] = isset($data['jobState']) ? $data['jobState'] : null;
        $this->container['jobResult'] = isset($data['jobResult']) ? $data['jobResult'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : '10';
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : '1';
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['submittedTimeBegin'] = isset($data['submittedTimeBegin']) ? $data['submittedTimeBegin'] : null;
        $this->container['submittedTimeEnd'] = isset($data['submittedTimeEnd']) ? $data['submittedTimeEnd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            $allowedValues = $this->getJobStateAllowableValues();
                if (!is_null($this->container['jobState']) && !in_array($this->container['jobState'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobState', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getJobResultAllowableValues();
                if (!is_null($this->container['jobResult']) && !in_array($this->container['jobResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobResult', must be one of '%s'",
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
    * Gets clusterId
    *  集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID。获取方法，请参见[获取集群ID](https://support.huaweicloud.com/api-mrs/mrs_02_9001.html)。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～128个字符。
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
    * @param string|null $jobName 作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～128个字符。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobId
    *  作业ID，只能由字母、数字、中划线(-)组成，并且长度为1~64字符。
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
    * @param string|null $jobId 作业ID，只能由字母、数字、中划线(-)组成，并且长度为1~64字符。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets user
    *  用户名称、只能由字母、数字、特殊字符(-_.)组成，且不能以数字开头，并且长度为1～32字符。
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户名称、只能由字母、数字、特殊字符(-_.)组成，且不能以数字开头，并且长度为1～32字符。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型。 - MapReduce - SparkPython - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
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
    * @param string|null $jobType 作业类型。 - MapReduce - SparkPython - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobState
    *  作业运行状态。 - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    *
    * @return string|null
    */
    public function getJobState()
    {
        return $this->container['jobState'];
    }

    /**
    * Sets jobState
    *
    * @param string|null $jobState 作业运行状态。 - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    *
    * @return $this
    */
    public function setJobState($jobState)
    {
        $this->container['jobState'] = $jobState;
        return $this;
    }

    /**
    * Gets jobResult
    *  作业运行结果。 - FAILED：执行失败的作业。 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    *
    * @return string|null
    */
    public function getJobResult()
    {
        return $this->container['jobResult'];
    }

    /**
    * Sets jobResult
    *
    * @param string|null $jobResult 作业运行结果。 - FAILED：执行失败的作业。 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    *
    * @return $this
    */
    public function setJobResult($jobResult)
    {
        $this->container['jobResult'] = $jobResult;
        return $this;
    }

    /**
    * Gets queue
    *  作业的资源对列类型名称，作业的资源对列类型名称，只能由数字、字母和特殊字符(-_)组成, 并且长度为1～64字符。
    *
    * @return string|null
    */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
    * Sets queue
    *
    * @param string|null $queue 作业的资源对列类型名称，作业的资源对列类型名称，只能由数字、字母和特殊字符(-_)组成, 并且长度为1～64字符。
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
    }

    /**
    * Gets limit
    *  返回结果中每页显示条数。缺省值：10
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 返回结果中每页显示条数。缺省值：10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  表示作业列表从该偏移量开始查询。缺省值：0
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 表示作业列表从该偏移量开始查询。缺省值：0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortBy
    *  返回结果的排序方式，默认值为desc。 - asc：按升序排列 - desc：按降序排列
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy 返回结果的排序方式，默认值为desc。 - asc：按升序排列 - desc：按降序排列
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets submittedTimeBegin
    *  查询该时间之后提交的作业，UTC的毫秒时间戳。例如：1562032041362。
    *
    * @return int|null
    */
    public function getSubmittedTimeBegin()
    {
        return $this->container['submittedTimeBegin'];
    }

    /**
    * Sets submittedTimeBegin
    *
    * @param int|null $submittedTimeBegin 查询该时间之后提交的作业，UTC的毫秒时间戳。例如：1562032041362。
    *
    * @return $this
    */
    public function setSubmittedTimeBegin($submittedTimeBegin)
    {
        $this->container['submittedTimeBegin'] = $submittedTimeBegin;
        return $this;
    }

    /**
    * Gets submittedTimeEnd
    *  查询该时间之前提交的作业UTC的毫秒时间戳。例如：1562032041362。
    *
    * @return int|null
    */
    public function getSubmittedTimeEnd()
    {
        return $this->container['submittedTimeEnd'];
    }

    /**
    * Sets submittedTimeEnd
    *
    * @param int|null $submittedTimeEnd 查询该时间之前提交的作业UTC的毫秒时间戳。例如：1562032041362。
    *
    * @return $this
    */
    public function setSubmittedTimeEnd($submittedTimeEnd)
    {
        $this->container['submittedTimeEnd'] = $submittedTimeEnd;
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

