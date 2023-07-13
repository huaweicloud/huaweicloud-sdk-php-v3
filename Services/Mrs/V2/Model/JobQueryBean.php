<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobQueryBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobQueryBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  作业ID。
    * user  提交作业的用户名称。
    * jobName  作业名称。
    * jobResult  作业最终结果。 - FAILED：执行失败的作业 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * jobState  作业执行状态。  - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobProgress  作业执行进度。
    * jobType  作业类型。 - MapReduce - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * startedTime  作业开始执行时间。单位：毫秒。
    * submittedTime  作业提交时间。单位：毫秒。
    * finishedTime  作业完成时间。单位：毫秒。
    * elapsedTime  作业执行时长。单位：毫秒。
    * arguments  运行参数。
    * launcherId  实际作业编号。
    * properties  配置参数，用于传-d参数。最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    * appId  实际作业编号。
    * trackingUrl  日志链接地址。当前仅SparkSubmit作业支持该参数。 该参数基于集群的EIP访问集群中的YARN WebUI页面，用户如果在VPC界面解绑EIP，MRS服务侧数据会因为未更新导致该参数引用旧EIP导致访问失败，可通过对集群重新进行EIP的绑定来修复该问题。
    * queue  作业的资源对列类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'user' => 'string',
            'jobName' => 'string',
            'jobResult' => 'string',
            'jobState' => 'string',
            'jobProgress' => 'float',
            'jobType' => 'string',
            'startedTime' => 'int',
            'submittedTime' => 'int',
            'finishedTime' => 'int',
            'elapsedTime' => 'int',
            'arguments' => 'string',
            'launcherId' => 'string',
            'properties' => 'string',
            'appId' => 'string',
            'trackingUrl' => 'string',
            'queue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  作业ID。
    * user  提交作业的用户名称。
    * jobName  作业名称。
    * jobResult  作业最终结果。 - FAILED：执行失败的作业 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * jobState  作业执行状态。  - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobProgress  作业执行进度。
    * jobType  作业类型。 - MapReduce - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * startedTime  作业开始执行时间。单位：毫秒。
    * submittedTime  作业提交时间。单位：毫秒。
    * finishedTime  作业完成时间。单位：毫秒。
    * elapsedTime  作业执行时长。单位：毫秒。
    * arguments  运行参数。
    * launcherId  实际作业编号。
    * properties  配置参数，用于传-d参数。最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    * appId  实际作业编号。
    * trackingUrl  日志链接地址。当前仅SparkSubmit作业支持该参数。 该参数基于集群的EIP访问集群中的YARN WebUI页面，用户如果在VPC界面解绑EIP，MRS服务侧数据会因为未更新导致该参数引用旧EIP导致访问失败，可通过对集群重新进行EIP的绑定来修复该问题。
    * queue  作业的资源对列类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'user' => null,
        'jobName' => null,
        'jobResult' => null,
        'jobState' => null,
        'jobProgress' => 'float',
        'jobType' => null,
        'startedTime' => 'int64',
        'submittedTime' => 'int64',
        'finishedTime' => 'int64',
        'elapsedTime' => 'int64',
        'arguments' => null,
        'launcherId' => null,
        'properties' => null,
        'appId' => null,
        'trackingUrl' => null,
        'queue' => null
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
    * jobId  作业ID。
    * user  提交作业的用户名称。
    * jobName  作业名称。
    * jobResult  作业最终结果。 - FAILED：执行失败的作业 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * jobState  作业执行状态。  - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobProgress  作业执行进度。
    * jobType  作业类型。 - MapReduce - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * startedTime  作业开始执行时间。单位：毫秒。
    * submittedTime  作业提交时间。单位：毫秒。
    * finishedTime  作业完成时间。单位：毫秒。
    * elapsedTime  作业执行时长。单位：毫秒。
    * arguments  运行参数。
    * launcherId  实际作业编号。
    * properties  配置参数，用于传-d参数。最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    * appId  实际作业编号。
    * trackingUrl  日志链接地址。当前仅SparkSubmit作业支持该参数。 该参数基于集群的EIP访问集群中的YARN WebUI页面，用户如果在VPC界面解绑EIP，MRS服务侧数据会因为未更新导致该参数引用旧EIP导致访问失败，可通过对集群重新进行EIP的绑定来修复该问题。
    * queue  作业的资源对列类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'user' => 'user',
            'jobName' => 'job_name',
            'jobResult' => 'job_result',
            'jobState' => 'job_state',
            'jobProgress' => 'job_progress',
            'jobType' => 'job_type',
            'startedTime' => 'started_time',
            'submittedTime' => 'submitted_time',
            'finishedTime' => 'finished_time',
            'elapsedTime' => 'elapsed_time',
            'arguments' => 'arguments',
            'launcherId' => 'launcher_id',
            'properties' => 'properties',
            'appId' => 'app_id',
            'trackingUrl' => 'tracking_url',
            'queue' => 'queue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  作业ID。
    * user  提交作业的用户名称。
    * jobName  作业名称。
    * jobResult  作业最终结果。 - FAILED：执行失败的作业 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * jobState  作业执行状态。  - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobProgress  作业执行进度。
    * jobType  作业类型。 - MapReduce - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * startedTime  作业开始执行时间。单位：毫秒。
    * submittedTime  作业提交时间。单位：毫秒。
    * finishedTime  作业完成时间。单位：毫秒。
    * elapsedTime  作业执行时长。单位：毫秒。
    * arguments  运行参数。
    * launcherId  实际作业编号。
    * properties  配置参数，用于传-d参数。最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    * appId  实际作业编号。
    * trackingUrl  日志链接地址。当前仅SparkSubmit作业支持该参数。 该参数基于集群的EIP访问集群中的YARN WebUI页面，用户如果在VPC界面解绑EIP，MRS服务侧数据会因为未更新导致该参数引用旧EIP导致访问失败，可通过对集群重新进行EIP的绑定来修复该问题。
    * queue  作业的资源对列类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'user' => 'setUser',
            'jobName' => 'setJobName',
            'jobResult' => 'setJobResult',
            'jobState' => 'setJobState',
            'jobProgress' => 'setJobProgress',
            'jobType' => 'setJobType',
            'startedTime' => 'setStartedTime',
            'submittedTime' => 'setSubmittedTime',
            'finishedTime' => 'setFinishedTime',
            'elapsedTime' => 'setElapsedTime',
            'arguments' => 'setArguments',
            'launcherId' => 'setLauncherId',
            'properties' => 'setProperties',
            'appId' => 'setAppId',
            'trackingUrl' => 'setTrackingUrl',
            'queue' => 'setQueue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  作业ID。
    * user  提交作业的用户名称。
    * jobName  作业名称。
    * jobResult  作业最终结果。 - FAILED：执行失败的作业 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    * jobState  作业执行状态。  - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    * jobProgress  作业执行进度。
    * jobType  作业类型。 - MapReduce - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    * startedTime  作业开始执行时间。单位：毫秒。
    * submittedTime  作业提交时间。单位：毫秒。
    * finishedTime  作业完成时间。单位：毫秒。
    * elapsedTime  作业执行时长。单位：毫秒。
    * arguments  运行参数。
    * launcherId  实际作业编号。
    * properties  配置参数，用于传-d参数。最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    * appId  实际作业编号。
    * trackingUrl  日志链接地址。当前仅SparkSubmit作业支持该参数。 该参数基于集群的EIP访问集群中的YARN WebUI页面，用户如果在VPC界面解绑EIP，MRS服务侧数据会因为未更新导致该参数引用旧EIP导致访问失败，可通过对集群重新进行EIP的绑定来修复该问题。
    * queue  作业的资源对列类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'user' => 'getUser',
            'jobName' => 'getJobName',
            'jobResult' => 'getJobResult',
            'jobState' => 'getJobState',
            'jobProgress' => 'getJobProgress',
            'jobType' => 'getJobType',
            'startedTime' => 'getStartedTime',
            'submittedTime' => 'getSubmittedTime',
            'finishedTime' => 'getFinishedTime',
            'elapsedTime' => 'getElapsedTime',
            'arguments' => 'getArguments',
            'launcherId' => 'getLauncherId',
            'properties' => 'getProperties',
            'appId' => 'getAppId',
            'trackingUrl' => 'getTrackingUrl',
            'queue' => 'getQueue'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobResult'] = isset($data['jobResult']) ? $data['jobResult'] : null;
        $this->container['jobState'] = isset($data['jobState']) ? $data['jobState'] : null;
        $this->container['jobProgress'] = isset($data['jobProgress']) ? $data['jobProgress'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['startedTime'] = isset($data['startedTime']) ? $data['startedTime'] : null;
        $this->container['submittedTime'] = isset($data['submittedTime']) ? $data['submittedTime'] : null;
        $this->container['finishedTime'] = isset($data['finishedTime']) ? $data['finishedTime'] : null;
        $this->container['elapsedTime'] = isset($data['elapsedTime']) ? $data['elapsedTime'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['launcherId'] = isset($data['launcherId']) ? $data['launcherId'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['trackingUrl'] = isset($data['trackingUrl']) ? $data['trackingUrl'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jobName']) && (mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['arguments']) && (mb_strlen($this->container['arguments']) > 150000)) {
                $invalidProperties[] = "invalid value for 'arguments', the character length must be smaller than or equal to 150000.";
            }
            if (!is_null($this->container['arguments']) && (mb_strlen($this->container['arguments']) < 0)) {
                $invalidProperties[] = "invalid value for 'arguments', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['properties']) && (mb_strlen($this->container['properties']) > 2048)) {
                $invalidProperties[] = "invalid value for 'properties', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['properties']) && (mb_strlen($this->container['properties']) < 0)) {
                $invalidProperties[] = "invalid value for 'properties', the character length must be bigger than or equal to 0.";
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
    * Gets user
    *  提交作业的用户名称。
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
    * @param string|null $user 提交作业的用户名称。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称。
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
    * @param string|null $jobName 作业名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobResult
    *  作业最终结果。 - FAILED：执行失败的作业 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
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
    * @param string|null $jobResult 作业最终结果。 - FAILED：执行失败的作业 - KILLED：执行中被手动终止的作业。 - UNDEFINED：正在执行的作业。 - SUCCEEDED：执行成功的作业。
    *
    * @return $this
    */
    public function setJobResult($jobResult)
    {
        $this->container['jobResult'] = $jobResult;
        return $this;
    }

    /**
    * Gets jobState
    *  作业执行状态。  - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
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
    * @param string|null $jobState 作业执行状态。  - FAILED：失败 - KILLED：已终止 - NEW：已创建 - NEW_SAVING：已创建保存中 - SUBMITTED：已提交 - ACCEPTED：已接受 - RUNNING：运行中 - FINISHED：已完成
    *
    * @return $this
    */
    public function setJobState($jobState)
    {
        $this->container['jobState'] = $jobState;
        return $this;
    }

    /**
    * Gets jobProgress
    *  作业执行进度。
    *
    * @return float|null
    */
    public function getJobProgress()
    {
        return $this->container['jobProgress'];
    }

    /**
    * Sets jobProgress
    *
    * @param float|null $jobProgress 作业执行进度。
    *
    * @return $this
    */
    public function setJobProgress($jobProgress)
    {
        $this->container['jobProgress'] = $jobProgress;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型。 - MapReduce - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
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
    * @param string|null $jobType 作业类型。 - MapReduce - SparkSubmit：SparkPython类型的作业在查询时作业类型请选择SparkSubmit。 - HiveScript - HiveSql - DistCp，导入、导出数据。 - SparkScript - SparkSql - Flink
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets startedTime
    *  作业开始执行时间。单位：毫秒。
    *
    * @return int|null
    */
    public function getStartedTime()
    {
        return $this->container['startedTime'];
    }

    /**
    * Sets startedTime
    *
    * @param int|null $startedTime 作业开始执行时间。单位：毫秒。
    *
    * @return $this
    */
    public function setStartedTime($startedTime)
    {
        $this->container['startedTime'] = $startedTime;
        return $this;
    }

    /**
    * Gets submittedTime
    *  作业提交时间。单位：毫秒。
    *
    * @return int|null
    */
    public function getSubmittedTime()
    {
        return $this->container['submittedTime'];
    }

    /**
    * Sets submittedTime
    *
    * @param int|null $submittedTime 作业提交时间。单位：毫秒。
    *
    * @return $this
    */
    public function setSubmittedTime($submittedTime)
    {
        $this->container['submittedTime'] = $submittedTime;
        return $this;
    }

    /**
    * Gets finishedTime
    *  作业完成时间。单位：毫秒。
    *
    * @return int|null
    */
    public function getFinishedTime()
    {
        return $this->container['finishedTime'];
    }

    /**
    * Sets finishedTime
    *
    * @param int|null $finishedTime 作业完成时间。单位：毫秒。
    *
    * @return $this
    */
    public function setFinishedTime($finishedTime)
    {
        $this->container['finishedTime'] = $finishedTime;
        return $this;
    }

    /**
    * Gets elapsedTime
    *  作业执行时长。单位：毫秒。
    *
    * @return int|null
    */
    public function getElapsedTime()
    {
        return $this->container['elapsedTime'];
    }

    /**
    * Sets elapsedTime
    *
    * @param int|null $elapsedTime 作业执行时长。单位：毫秒。
    *
    * @return $this
    */
    public function setElapsedTime($elapsedTime)
    {
        $this->container['elapsedTime'] = $elapsedTime;
        return $this;
    }

    /**
    * Gets arguments
    *  运行参数。
    *
    * @return string|null
    */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
    * Sets arguments
    *
    * @param string|null $arguments 运行参数。
    *
    * @return $this
    */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;
        return $this;
    }

    /**
    * Gets launcherId
    *  实际作业编号。
    *
    * @return string|null
    */
    public function getLauncherId()
    {
        return $this->container['launcherId'];
    }

    /**
    * Sets launcherId
    *
    * @param string|null $launcherId 实际作业编号。
    *
    * @return $this
    */
    public function setLauncherId($launcherId)
    {
        $this->container['launcherId'] = $launcherId;
        return $this;
    }

    /**
    * Gets properties
    *  配置参数，用于传-d参数。最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @return string|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param string|null $properties 配置参数，用于传-d参数。最多为2048字符，不能包含><|'`&!\\特殊字符，可为空。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets appId
    *  实际作业编号。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 实际作业编号。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets trackingUrl
    *  日志链接地址。当前仅SparkSubmit作业支持该参数。 该参数基于集群的EIP访问集群中的YARN WebUI页面，用户如果在VPC界面解绑EIP，MRS服务侧数据会因为未更新导致该参数引用旧EIP导致访问失败，可通过对集群重新进行EIP的绑定来修复该问题。
    *
    * @return string|null
    */
    public function getTrackingUrl()
    {
        return $this->container['trackingUrl'];
    }

    /**
    * Sets trackingUrl
    *
    * @param string|null $trackingUrl 日志链接地址。当前仅SparkSubmit作业支持该参数。 该参数基于集群的EIP访问集群中的YARN WebUI页面，用户如果在VPC界面解绑EIP，MRS服务侧数据会因为未更新导致该参数引用旧EIP导致访问失败，可通过对集群重新进行EIP的绑定来修复该问题。
    *
    * @return $this
    */
    public function setTrackingUrl($trackingUrl)
    {
        $this->container['trackingUrl'] = $trackingUrl;
        return $this;
    }

    /**
    * Gets queue
    *  作业的资源对列类型。
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
    * @param string|null $queue 作业的资源对列类型。
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
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

