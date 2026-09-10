<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRealTimeJobDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRealTimeJobDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * state  作业状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * migrationType  作业迁移类型。 - INCREMENTAL_DATA：增量数据 - HISTORY_DATA：历史数据
    * startupTimestamp  INCREMENTAL_DATA作业启动的时间位点。
    * jobEngineVersion  运行作业时的引擎版本。
    * clusterEngineVersion  作业关联资源组的引擎版本。
    * clusterType  资源组类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * metricInfo  作业指标信息。
    * taskDetails  任务详情列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'jobId' => 'string',
            'state' => 'string',
            'migrationType' => 'string',
            'startupTimestamp' => 'string',
            'jobEngineVersion' => 'string',
            'clusterEngineVersion' => 'string',
            'clusterType' => 'string',
            'trackingUrl' => 'string',
            'metricInfo' => 'string',
            'taskDetails' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TaskDetailInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * state  作业状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * migrationType  作业迁移类型。 - INCREMENTAL_DATA：增量数据 - HISTORY_DATA：历史数据
    * startupTimestamp  INCREMENTAL_DATA作业启动的时间位点。
    * jobEngineVersion  运行作业时的引擎版本。
    * clusterEngineVersion  作业关联资源组的引擎版本。
    * clusterType  资源组类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * metricInfo  作业指标信息。
    * taskDetails  任务详情列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'jobId' => null,
        'state' => null,
        'migrationType' => null,
        'startupTimestamp' => null,
        'jobEngineVersion' => null,
        'clusterEngineVersion' => null,
        'clusterType' => null,
        'trackingUrl' => null,
        'metricInfo' => null,
        'taskDetails' => null
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
    * state  作业状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * migrationType  作业迁移类型。 - INCREMENTAL_DATA：增量数据 - HISTORY_DATA：历史数据
    * startupTimestamp  INCREMENTAL_DATA作业启动的时间位点。
    * jobEngineVersion  运行作业时的引擎版本。
    * clusterEngineVersion  作业关联资源组的引擎版本。
    * clusterType  资源组类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * metricInfo  作业指标信息。
    * taskDetails  任务详情列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'jobId' => 'job_id',
            'state' => 'state',
            'migrationType' => 'migration_type',
            'startupTimestamp' => 'startup_timestamp',
            'jobEngineVersion' => 'job_engine_version',
            'clusterEngineVersion' => 'cluster_engine_version',
            'clusterType' => 'cluster_type',
            'trackingUrl' => 'tracking_url',
            'metricInfo' => 'metric_info',
            'taskDetails' => 'task_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * state  作业状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * migrationType  作业迁移类型。 - INCREMENTAL_DATA：增量数据 - HISTORY_DATA：历史数据
    * startupTimestamp  INCREMENTAL_DATA作业启动的时间位点。
    * jobEngineVersion  运行作业时的引擎版本。
    * clusterEngineVersion  作业关联资源组的引擎版本。
    * clusterType  资源组类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * metricInfo  作业指标信息。
    * taskDetails  任务详情列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'jobId' => 'setJobId',
            'state' => 'setState',
            'migrationType' => 'setMigrationType',
            'startupTimestamp' => 'setStartupTimestamp',
            'jobEngineVersion' => 'setJobEngineVersion',
            'clusterEngineVersion' => 'setClusterEngineVersion',
            'clusterType' => 'setClusterType',
            'trackingUrl' => 'setTrackingUrl',
            'metricInfo' => 'setMetricInfo',
            'taskDetails' => 'setTaskDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * state  作业状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    * migrationType  作业迁移类型。 - INCREMENTAL_DATA：增量数据 - HISTORY_DATA：历史数据
    * startupTimestamp  INCREMENTAL_DATA作业启动的时间位点。
    * jobEngineVersion  运行作业时的引擎版本。
    * clusterEngineVersion  作业关联资源组的引擎版本。
    * clusterType  资源组类型。
    * trackingUrl  MRS Flink作业trackingUrl。
    * metricInfo  作业指标信息。
    * taskDetails  任务详情列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'jobId' => 'getJobId',
            'state' => 'getState',
            'migrationType' => 'getMigrationType',
            'startupTimestamp' => 'getStartupTimestamp',
            'jobEngineVersion' => 'getJobEngineVersion',
            'clusterEngineVersion' => 'getClusterEngineVersion',
            'clusterType' => 'getClusterType',
            'trackingUrl' => 'getTrackingUrl',
            'metricInfo' => 'getMetricInfo',
            'taskDetails' => 'getTaskDetails'
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
    const STATE_EXCEPTION = 'EXCEPTION';
    const STATE_STOPPING = 'STOPPING';
    const STATE_SUBMITTING = 'SUBMITTING';
    const STATE_RUNNING = 'RUNNING';
    const STATE_STOPPED = 'STOPPED';
    const STATE_SUCCESS = 'SUCCESS';
    const MIGRATION_TYPE_INCREMENTAL_DATA = 'INCREMENTAL_DATA';
    const MIGRATION_TYPE_HISTORY_DATA = 'HISTORY_DATA';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_EXCEPTION,
            self::STATE_STOPPING,
            self::STATE_SUBMITTING,
            self::STATE_RUNNING,
            self::STATE_STOPPED,
            self::STATE_SUCCESS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationTypeAllowableValues()
    {
        return [
            self::MIGRATION_TYPE_INCREMENTAL_DATA,
            self::MIGRATION_TYPE_HISTORY_DATA,
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['migrationType'] = isset($data['migrationType']) ? $data['migrationType'] : null;
        $this->container['startupTimestamp'] = isset($data['startupTimestamp']) ? $data['startupTimestamp'] : null;
        $this->container['jobEngineVersion'] = isset($data['jobEngineVersion']) ? $data['jobEngineVersion'] : null;
        $this->container['clusterEngineVersion'] = isset($data['clusterEngineVersion']) ? $data['clusterEngineVersion'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['trackingUrl'] = isset($data['trackingUrl']) ? $data['trackingUrl'] : null;
        $this->container['metricInfo'] = isset($data['metricInfo']) ? $data['metricInfo'] : null;
        $this->container['taskDetails'] = isset($data['taskDetails']) ? $data['taskDetails'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMigrationTypeAllowableValues();
                if (!is_null($this->container['migrationType']) && !in_array($this->container['migrationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationType', must be one of '%s'",
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
    * Gets state
    *  作业状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 作业状态。 - EXCEPTION：异常 - STOPPING：停止中 - SUBMITTING：提交中 - RUNNING：运行中 - STOPPED：已停止 - SUCCESS：成功
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets migrationType
    *  作业迁移类型。 - INCREMENTAL_DATA：增量数据 - HISTORY_DATA：历史数据
    *
    * @return string|null
    */
    public function getMigrationType()
    {
        return $this->container['migrationType'];
    }

    /**
    * Sets migrationType
    *
    * @param string|null $migrationType 作业迁移类型。 - INCREMENTAL_DATA：增量数据 - HISTORY_DATA：历史数据
    *
    * @return $this
    */
    public function setMigrationType($migrationType)
    {
        $this->container['migrationType'] = $migrationType;
        return $this;
    }

    /**
    * Gets startupTimestamp
    *  INCREMENTAL_DATA作业启动的时间位点。
    *
    * @return string|null
    */
    public function getStartupTimestamp()
    {
        return $this->container['startupTimestamp'];
    }

    /**
    * Sets startupTimestamp
    *
    * @param string|null $startupTimestamp INCREMENTAL_DATA作业启动的时间位点。
    *
    * @return $this
    */
    public function setStartupTimestamp($startupTimestamp)
    {
        $this->container['startupTimestamp'] = $startupTimestamp;
        return $this;
    }

    /**
    * Gets jobEngineVersion
    *  运行作业时的引擎版本。
    *
    * @return string|null
    */
    public function getJobEngineVersion()
    {
        return $this->container['jobEngineVersion'];
    }

    /**
    * Sets jobEngineVersion
    *
    * @param string|null $jobEngineVersion 运行作业时的引擎版本。
    *
    * @return $this
    */
    public function setJobEngineVersion($jobEngineVersion)
    {
        $this->container['jobEngineVersion'] = $jobEngineVersion;
        return $this;
    }

    /**
    * Gets clusterEngineVersion
    *  作业关联资源组的引擎版本。
    *
    * @return string|null
    */
    public function getClusterEngineVersion()
    {
        return $this->container['clusterEngineVersion'];
    }

    /**
    * Sets clusterEngineVersion
    *
    * @param string|null $clusterEngineVersion 作业关联资源组的引擎版本。
    *
    * @return $this
    */
    public function setClusterEngineVersion($clusterEngineVersion)
    {
        $this->container['clusterEngineVersion'] = $clusterEngineVersion;
        return $this;
    }

    /**
    * Gets clusterType
    *  资源组类型。
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 资源组类型。
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets trackingUrl
    *  MRS Flink作业trackingUrl。
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
    * @param string|null $trackingUrl MRS Flink作业trackingUrl。
    *
    * @return $this
    */
    public function setTrackingUrl($trackingUrl)
    {
        $this->container['trackingUrl'] = $trackingUrl;
        return $this;
    }

    /**
    * Gets metricInfo
    *  作业指标信息。
    *
    * @return string|null
    */
    public function getMetricInfo()
    {
        return $this->container['metricInfo'];
    }

    /**
    * Sets metricInfo
    *
    * @param string|null $metricInfo 作业指标信息。
    *
    * @return $this
    */
    public function setMetricInfo($metricInfo)
    {
        $this->container['metricInfo'] = $metricInfo;
        return $this;
    }

    /**
    * Gets taskDetails
    *  任务详情列表。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TaskDetailInfo[]|null
    */
    public function getTaskDetails()
    {
        return $this->container['taskDetails'];
    }

    /**
    * Sets taskDetails
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TaskDetailInfo[]|null $taskDetails 任务详情列表。
    *
    * @return $this
    */
    public function setTaskDetails($taskDetails)
    {
        $this->container['taskDetails'] = $taskDetails;
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

