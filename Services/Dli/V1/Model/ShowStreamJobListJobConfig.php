<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStreamJobListJobConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStreamJobList_job_config';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true； 关闭：false； 默认：false。
    * checkpointMode  快照模式： exactly_once：数据只被消费一次。 at_least_once：数据至少被消费一次。 默认值为exactly_once。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * logEnabled  是否启用日志存储。默认为false。
    * obsBucket  OBS桶名。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * edgeGroupIds  边缘计算组ID列表。
    * rootId  父作业ID。
    * managerCuNumber  管理单元CU数。默认为1。
    * cuNumber  用户为作业选择的CU数量, “show_detail”。默认为2。
    * parallelNumber  用户设置的作业并行数， “show_detail”为“true”时独有。默认值为1。 最小值：1，最大值：2000。
    * restartWhenException  是否开启异常重启功能。
    * idleStateRetention  空闲状态过期周期。
    * udfJarUrl  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入。
    * dirtyDataStrategy  作业脏数据策略。 “2:obs-wan-wulan3/jobs”：保存 “1”：抛出异常 “0”：忽略
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包.
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件.
    * executorNumber  作业使用计算节点个数
    * executorCuNumber  计算节点cu数
    * resumeCheckpoint  异常自动重启时，是否从最新checkpoint恢复，默认false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpointEnabled' => 'bool',
            'checkpointMode' => 'string',
            'checkpointInterval' => 'int',
            'logEnabled' => 'bool',
            'obsBucket' => 'string',
            'smnTopic' => 'string',
            'edgeGroupIds' => 'string[]',
            'rootId' => 'int',
            'managerCuNumber' => 'int',
            'cuNumber' => 'int',
            'parallelNumber' => 'int',
            'restartWhenException' => 'bool',
            'idleStateRetention' => 'int',
            'udfJarUrl' => 'string',
            'dirtyDataStrategy' => 'string',
            'entrypoint' => 'string',
            'dependencyJars' => 'string[]',
            'dependencyFiles' => 'string[]',
            'executorNumber' => 'int',
            'executorCuNumber' => 'int',
            'resumeCheckpoint' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true； 关闭：false； 默认：false。
    * checkpointMode  快照模式： exactly_once：数据只被消费一次。 at_least_once：数据至少被消费一次。 默认值为exactly_once。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * logEnabled  是否启用日志存储。默认为false。
    * obsBucket  OBS桶名。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * edgeGroupIds  边缘计算组ID列表。
    * rootId  父作业ID。
    * managerCuNumber  管理单元CU数。默认为1。
    * cuNumber  用户为作业选择的CU数量, “show_detail”。默认为2。
    * parallelNumber  用户设置的作业并行数， “show_detail”为“true”时独有。默认值为1。 最小值：1，最大值：2000。
    * restartWhenException  是否开启异常重启功能。
    * idleStateRetention  空闲状态过期周期。
    * udfJarUrl  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入。
    * dirtyDataStrategy  作业脏数据策略。 “2:obs-wan-wulan3/jobs”：保存 “1”：抛出异常 “0”：忽略
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包.
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件.
    * executorNumber  作业使用计算节点个数
    * executorCuNumber  计算节点cu数
    * resumeCheckpoint  异常自动重启时，是否从最新checkpoint恢复，默认false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpointEnabled' => null,
        'checkpointMode' => null,
        'checkpointInterval' => 'int32',
        'logEnabled' => null,
        'obsBucket' => null,
        'smnTopic' => null,
        'edgeGroupIds' => null,
        'rootId' => 'int32',
        'managerCuNumber' => 'int32',
        'cuNumber' => 'int32',
        'parallelNumber' => 'int32',
        'restartWhenException' => null,
        'idleStateRetention' => 'int32',
        'udfJarUrl' => null,
        'dirtyDataStrategy' => null,
        'entrypoint' => null,
        'dependencyJars' => null,
        'dependencyFiles' => null,
        'executorNumber' => 'int32',
        'executorCuNumber' => 'int32',
        'resumeCheckpoint' => null
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
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true； 关闭：false； 默认：false。
    * checkpointMode  快照模式： exactly_once：数据只被消费一次。 at_least_once：数据至少被消费一次。 默认值为exactly_once。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * logEnabled  是否启用日志存储。默认为false。
    * obsBucket  OBS桶名。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * edgeGroupIds  边缘计算组ID列表。
    * rootId  父作业ID。
    * managerCuNumber  管理单元CU数。默认为1。
    * cuNumber  用户为作业选择的CU数量, “show_detail”。默认为2。
    * parallelNumber  用户设置的作业并行数， “show_detail”为“true”时独有。默认值为1。 最小值：1，最大值：2000。
    * restartWhenException  是否开启异常重启功能。
    * idleStateRetention  空闲状态过期周期。
    * udfJarUrl  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入。
    * dirtyDataStrategy  作业脏数据策略。 “2:obs-wan-wulan3/jobs”：保存 “1”：抛出异常 “0”：忽略
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包.
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件.
    * executorNumber  作业使用计算节点个数
    * executorCuNumber  计算节点cu数
    * resumeCheckpoint  异常自动重启时，是否从最新checkpoint恢复，默认false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpointEnabled' => 'checkpoint_enabled',
            'checkpointMode' => 'checkpoint_mode',
            'checkpointInterval' => 'checkpoint_interval',
            'logEnabled' => 'log_enabled',
            'obsBucket' => 'obs_bucket',
            'smnTopic' => 'smn_topic',
            'edgeGroupIds' => 'edge_group_ids',
            'rootId' => 'root_id',
            'managerCuNumber' => 'manager_cu_number',
            'cuNumber' => 'cu_number',
            'parallelNumber' => 'parallel_number',
            'restartWhenException' => 'restart_when_exception',
            'idleStateRetention' => 'idle_state_retention',
            'udfJarUrl' => 'udf_jar_url',
            'dirtyDataStrategy' => 'dirty_data_strategy',
            'entrypoint' => 'entrypoint',
            'dependencyJars' => 'dependency_jars',
            'dependencyFiles' => 'dependency_files',
            'executorNumber' => 'executor_number',
            'executorCuNumber' => 'executor_cu_number',
            'resumeCheckpoint' => 'resume_checkpoint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true； 关闭：false； 默认：false。
    * checkpointMode  快照模式： exactly_once：数据只被消费一次。 at_least_once：数据至少被消费一次。 默认值为exactly_once。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * logEnabled  是否启用日志存储。默认为false。
    * obsBucket  OBS桶名。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * edgeGroupIds  边缘计算组ID列表。
    * rootId  父作业ID。
    * managerCuNumber  管理单元CU数。默认为1。
    * cuNumber  用户为作业选择的CU数量, “show_detail”。默认为2。
    * parallelNumber  用户设置的作业并行数， “show_detail”为“true”时独有。默认值为1。 最小值：1，最大值：2000。
    * restartWhenException  是否开启异常重启功能。
    * idleStateRetention  空闲状态过期周期。
    * udfJarUrl  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入。
    * dirtyDataStrategy  作业脏数据策略。 “2:obs-wan-wulan3/jobs”：保存 “1”：抛出异常 “0”：忽略
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包.
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件.
    * executorNumber  作业使用计算节点个数
    * executorCuNumber  计算节点cu数
    * resumeCheckpoint  异常自动重启时，是否从最新checkpoint恢复，默认false
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpointEnabled' => 'setCheckpointEnabled',
            'checkpointMode' => 'setCheckpointMode',
            'checkpointInterval' => 'setCheckpointInterval',
            'logEnabled' => 'setLogEnabled',
            'obsBucket' => 'setObsBucket',
            'smnTopic' => 'setSmnTopic',
            'edgeGroupIds' => 'setEdgeGroupIds',
            'rootId' => 'setRootId',
            'managerCuNumber' => 'setManagerCuNumber',
            'cuNumber' => 'setCuNumber',
            'parallelNumber' => 'setParallelNumber',
            'restartWhenException' => 'setRestartWhenException',
            'idleStateRetention' => 'setIdleStateRetention',
            'udfJarUrl' => 'setUdfJarUrl',
            'dirtyDataStrategy' => 'setDirtyDataStrategy',
            'entrypoint' => 'setEntrypoint',
            'dependencyJars' => 'setDependencyJars',
            'dependencyFiles' => 'setDependencyFiles',
            'executorNumber' => 'setExecutorNumber',
            'executorCuNumber' => 'setExecutorCuNumber',
            'resumeCheckpoint' => 'setResumeCheckpoint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpointEnabled  是否开启作业自动快照功能。 开启：true； 关闭：false； 默认：false。
    * checkpointMode  快照模式： exactly_once：数据只被消费一次。 at_least_once：数据至少被消费一次。 默认值为exactly_once。
    * checkpointInterval  快照时间间隔, 单位为秒，默认值为10。
    * logEnabled  是否启用日志存储。默认为false。
    * obsBucket  OBS桶名。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * edgeGroupIds  边缘计算组ID列表。
    * rootId  父作业ID。
    * managerCuNumber  管理单元CU数。默认为1。
    * cuNumber  用户为作业选择的CU数量, “show_detail”。默认为2。
    * parallelNumber  用户设置的作业并行数， “show_detail”为“true”时独有。默认值为1。 最小值：1，最大值：2000。
    * restartWhenException  是否开启异常重启功能。
    * idleStateRetention  空闲状态过期周期。
    * udfJarUrl  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入。
    * dirtyDataStrategy  作业脏数据策略。 “2:obs-wan-wulan3/jobs”：保存 “1”：抛出异常 “0”：忽略
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包.
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件.
    * executorNumber  作业使用计算节点个数
    * executorCuNumber  计算节点cu数
    * resumeCheckpoint  异常自动重启时，是否从最新checkpoint恢复，默认false
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpointEnabled' => 'getCheckpointEnabled',
            'checkpointMode' => 'getCheckpointMode',
            'checkpointInterval' => 'getCheckpointInterval',
            'logEnabled' => 'getLogEnabled',
            'obsBucket' => 'getObsBucket',
            'smnTopic' => 'getSmnTopic',
            'edgeGroupIds' => 'getEdgeGroupIds',
            'rootId' => 'getRootId',
            'managerCuNumber' => 'getManagerCuNumber',
            'cuNumber' => 'getCuNumber',
            'parallelNumber' => 'getParallelNumber',
            'restartWhenException' => 'getRestartWhenException',
            'idleStateRetention' => 'getIdleStateRetention',
            'udfJarUrl' => 'getUdfJarUrl',
            'dirtyDataStrategy' => 'getDirtyDataStrategy',
            'entrypoint' => 'getEntrypoint',
            'dependencyJars' => 'getDependencyJars',
            'dependencyFiles' => 'getDependencyFiles',
            'executorNumber' => 'getExecutorNumber',
            'executorCuNumber' => 'getExecutorCuNumber',
            'resumeCheckpoint' => 'getResumeCheckpoint'
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
        $this->container['checkpointEnabled'] = isset($data['checkpointEnabled']) ? $data['checkpointEnabled'] : false;
        $this->container['checkpointMode'] = isset($data['checkpointMode']) ? $data['checkpointMode'] : null;
        $this->container['checkpointInterval'] = isset($data['checkpointInterval']) ? $data['checkpointInterval'] : 10;
        $this->container['logEnabled'] = isset($data['logEnabled']) ? $data['logEnabled'] : false;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['smnTopic'] = isset($data['smnTopic']) ? $data['smnTopic'] : null;
        $this->container['edgeGroupIds'] = isset($data['edgeGroupIds']) ? $data['edgeGroupIds'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['managerCuNumber'] = isset($data['managerCuNumber']) ? $data['managerCuNumber'] : null;
        $this->container['cuNumber'] = isset($data['cuNumber']) ? $data['cuNumber'] : 2;
        $this->container['parallelNumber'] = isset($data['parallelNumber']) ? $data['parallelNumber'] : 1;
        $this->container['restartWhenException'] = isset($data['restartWhenException']) ? $data['restartWhenException'] : null;
        $this->container['idleStateRetention'] = isset($data['idleStateRetention']) ? $data['idleStateRetention'] : null;
        $this->container['udfJarUrl'] = isset($data['udfJarUrl']) ? $data['udfJarUrl'] : null;
        $this->container['dirtyDataStrategy'] = isset($data['dirtyDataStrategy']) ? $data['dirtyDataStrategy'] : null;
        $this->container['entrypoint'] = isset($data['entrypoint']) ? $data['entrypoint'] : null;
        $this->container['dependencyJars'] = isset($data['dependencyJars']) ? $data['dependencyJars'] : null;
        $this->container['dependencyFiles'] = isset($data['dependencyFiles']) ? $data['dependencyFiles'] : null;
        $this->container['executorNumber'] = isset($data['executorNumber']) ? $data['executorNumber'] : null;
        $this->container['executorCuNumber'] = isset($data['executorCuNumber']) ? $data['executorCuNumber'] : null;
        $this->container['resumeCheckpoint'] = isset($data['resumeCheckpoint']) ? $data['resumeCheckpoint'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cuNumber']) && ($this->container['cuNumber'] > 400)) {
                $invalidProperties[] = "invalid value for 'cuNumber', must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['cuNumber']) && ($this->container['cuNumber'] < 2)) {
                $invalidProperties[] = "invalid value for 'cuNumber', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['parallelNumber']) && ($this->container['parallelNumber'] > 2000)) {
                $invalidProperties[] = "invalid value for 'parallelNumber', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['parallelNumber']) && ($this->container['parallelNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'parallelNumber', must be bigger than or equal to 1.";
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
    * Gets checkpointEnabled
    *  是否开启作业自动快照功能。 开启：true； 关闭：false； 默认：false。
    *
    * @return bool|null
    */
    public function getCheckpointEnabled()
    {
        return $this->container['checkpointEnabled'];
    }

    /**
    * Sets checkpointEnabled
    *
    * @param bool|null $checkpointEnabled 是否开启作业自动快照功能。 开启：true； 关闭：false； 默认：false。
    *
    * @return $this
    */
    public function setCheckpointEnabled($checkpointEnabled)
    {
        $this->container['checkpointEnabled'] = $checkpointEnabled;
        return $this;
    }

    /**
    * Gets checkpointMode
    *  快照模式： exactly_once：数据只被消费一次。 at_least_once：数据至少被消费一次。 默认值为exactly_once。
    *
    * @return string|null
    */
    public function getCheckpointMode()
    {
        return $this->container['checkpointMode'];
    }

    /**
    * Sets checkpointMode
    *
    * @param string|null $checkpointMode 快照模式： exactly_once：数据只被消费一次。 at_least_once：数据至少被消费一次。 默认值为exactly_once。
    *
    * @return $this
    */
    public function setCheckpointMode($checkpointMode)
    {
        $this->container['checkpointMode'] = $checkpointMode;
        return $this;
    }

    /**
    * Gets checkpointInterval
    *  快照时间间隔, 单位为秒，默认值为10。
    *
    * @return int|null
    */
    public function getCheckpointInterval()
    {
        return $this->container['checkpointInterval'];
    }

    /**
    * Sets checkpointInterval
    *
    * @param int|null $checkpointInterval 快照时间间隔, 单位为秒，默认值为10。
    *
    * @return $this
    */
    public function setCheckpointInterval($checkpointInterval)
    {
        $this->container['checkpointInterval'] = $checkpointInterval;
        return $this;
    }

    /**
    * Gets logEnabled
    *  是否启用日志存储。默认为false。
    *
    * @return bool|null
    */
    public function getLogEnabled()
    {
        return $this->container['logEnabled'];
    }

    /**
    * Sets logEnabled
    *
    * @param bool|null $logEnabled 是否启用日志存储。默认为false。
    *
    * @return $this
    */
    public function setLogEnabled($logEnabled)
    {
        $this->container['logEnabled'] = $logEnabled;
        return $this;
    }

    /**
    * Gets obsBucket
    *  OBS桶名。
    *
    * @return string|null
    */
    public function getObsBucket()
    {
        return $this->container['obsBucket'];
    }

    /**
    * Sets obsBucket
    *
    * @param string|null $obsBucket OBS桶名。
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets smnTopic
    *  当作业异常时，向该SMN主题推送告警信息。
    *
    * @return string|null
    */
    public function getSmnTopic()
    {
        return $this->container['smnTopic'];
    }

    /**
    * Sets smnTopic
    *
    * @param string|null $smnTopic 当作业异常时，向该SMN主题推送告警信息。
    *
    * @return $this
    */
    public function setSmnTopic($smnTopic)
    {
        $this->container['smnTopic'] = $smnTopic;
        return $this;
    }

    /**
    * Gets edgeGroupIds
    *  边缘计算组ID列表。
    *
    * @return string[]|null
    */
    public function getEdgeGroupIds()
    {
        return $this->container['edgeGroupIds'];
    }

    /**
    * Sets edgeGroupIds
    *
    * @param string[]|null $edgeGroupIds 边缘计算组ID列表。
    *
    * @return $this
    */
    public function setEdgeGroupIds($edgeGroupIds)
    {
        $this->container['edgeGroupIds'] = $edgeGroupIds;
        return $this;
    }

    /**
    * Gets rootId
    *  父作业ID。
    *
    * @return int|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param int|null $rootId 父作业ID。
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets managerCuNumber
    *  管理单元CU数。默认为1。
    *
    * @return int|null
    */
    public function getManagerCuNumber()
    {
        return $this->container['managerCuNumber'];
    }

    /**
    * Sets managerCuNumber
    *
    * @param int|null $managerCuNumber 管理单元CU数。默认为1。
    *
    * @return $this
    */
    public function setManagerCuNumber($managerCuNumber)
    {
        $this->container['managerCuNumber'] = $managerCuNumber;
        return $this;
    }

    /**
    * Gets cuNumber
    *  用户为作业选择的CU数量, “show_detail”。默认为2。
    *
    * @return int|null
    */
    public function getCuNumber()
    {
        return $this->container['cuNumber'];
    }

    /**
    * Sets cuNumber
    *
    * @param int|null $cuNumber 用户为作业选择的CU数量, “show_detail”。默认为2。
    *
    * @return $this
    */
    public function setCuNumber($cuNumber)
    {
        $this->container['cuNumber'] = $cuNumber;
        return $this;
    }

    /**
    * Gets parallelNumber
    *  用户设置的作业并行数， “show_detail”为“true”时独有。默认值为1。 最小值：1，最大值：2000。
    *
    * @return int|null
    */
    public function getParallelNumber()
    {
        return $this->container['parallelNumber'];
    }

    /**
    * Sets parallelNumber
    *
    * @param int|null $parallelNumber 用户设置的作业并行数， “show_detail”为“true”时独有。默认值为1。 最小值：1，最大值：2000。
    *
    * @return $this
    */
    public function setParallelNumber($parallelNumber)
    {
        $this->container['parallelNumber'] = $parallelNumber;
        return $this;
    }

    /**
    * Gets restartWhenException
    *  是否开启异常重启功能。
    *
    * @return bool|null
    */
    public function getRestartWhenException()
    {
        return $this->container['restartWhenException'];
    }

    /**
    * Sets restartWhenException
    *
    * @param bool|null $restartWhenException 是否开启异常重启功能。
    *
    * @return $this
    */
    public function setRestartWhenException($restartWhenException)
    {
        $this->container['restartWhenException'] = $restartWhenException;
        return $this;
    }

    /**
    * Gets idleStateRetention
    *  空闲状态过期周期。
    *
    * @return int|null
    */
    public function getIdleStateRetention()
    {
        return $this->container['idleStateRetention'];
    }

    /**
    * Sets idleStateRetention
    *
    * @param int|null $idleStateRetention 空闲状态过期周期。
    *
    * @return $this
    */
    public function setIdleStateRetention($idleStateRetention)
    {
        $this->container['idleStateRetention'] = $idleStateRetention;
        return $this;
    }

    /**
    * Gets udfJarUrl
    *  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入。
    *
    * @return string|null
    */
    public function getUdfJarUrl()
    {
        return $this->container['udfJarUrl'];
    }

    /**
    * Sets udfJarUrl
    *
    * @param string|null $udfJarUrl 用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入。
    *
    * @return $this
    */
    public function setUdfJarUrl($udfJarUrl)
    {
        $this->container['udfJarUrl'] = $udfJarUrl;
        return $this;
    }

    /**
    * Gets dirtyDataStrategy
    *  作业脏数据策略。 “2:obs-wan-wulan3/jobs”：保存 “1”：抛出异常 “0”：忽略
    *
    * @return string|null
    */
    public function getDirtyDataStrategy()
    {
        return $this->container['dirtyDataStrategy'];
    }

    /**
    * Sets dirtyDataStrategy
    *
    * @param string|null $dirtyDataStrategy 作业脏数据策略。 “2:obs-wan-wulan3/jobs”：保存 “1”：抛出异常 “0”：忽略
    *
    * @return $this
    */
    public function setDirtyDataStrategy($dirtyDataStrategy)
    {
        $this->container['dirtyDataStrategy'] = $dirtyDataStrategy;
        return $this;
    }

    /**
    * Gets entrypoint
    *  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包.
    *
    * @return string|null
    */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
    * Sets entrypoint
    *
    * @param string|null $entrypoint 用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包.
    *
    * @return $this
    */
    public function setEntrypoint($entrypoint)
    {
        $this->container['entrypoint'] = $entrypoint;
        return $this;
    }

    /**
    * Gets dependencyJars
    *  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包
    *
    * @return string[]|null
    */
    public function getDependencyJars()
    {
        return $this->container['dependencyJars'];
    }

    /**
    * Sets dependencyJars
    *
    * @param string[]|null $dependencyJars 用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包
    *
    * @return $this
    */
    public function setDependencyJars($dependencyJars)
    {
        $this->container['dependencyJars'] = $dependencyJars;
        return $this;
    }

    /**
    * Gets dependencyFiles
    *  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件.
    *
    * @return string[]|null
    */
    public function getDependencyFiles()
    {
        return $this->container['dependencyFiles'];
    }

    /**
    * Sets dependencyFiles
    *
    * @param string[]|null $dependencyFiles 用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件.
    *
    * @return $this
    */
    public function setDependencyFiles($dependencyFiles)
    {
        $this->container['dependencyFiles'] = $dependencyFiles;
        return $this;
    }

    /**
    * Gets executorNumber
    *  作业使用计算节点个数
    *
    * @return int|null
    */
    public function getExecutorNumber()
    {
        return $this->container['executorNumber'];
    }

    /**
    * Sets executorNumber
    *
    * @param int|null $executorNumber 作业使用计算节点个数
    *
    * @return $this
    */
    public function setExecutorNumber($executorNumber)
    {
        $this->container['executorNumber'] = $executorNumber;
        return $this;
    }

    /**
    * Gets executorCuNumber
    *  计算节点cu数
    *
    * @return int|null
    */
    public function getExecutorCuNumber()
    {
        return $this->container['executorCuNumber'];
    }

    /**
    * Sets executorCuNumber
    *
    * @param int|null $executorCuNumber 计算节点cu数
    *
    * @return $this
    */
    public function setExecutorCuNumber($executorCuNumber)
    {
        $this->container['executorCuNumber'] = $executorCuNumber;
        return $this;
    }

    /**
    * Gets resumeCheckpoint
    *  异常自动重启时，是否从最新checkpoint恢复，默认false
    *
    * @return bool|null
    */
    public function getResumeCheckpoint()
    {
        return $this->container['resumeCheckpoint'];
    }

    /**
    * Sets resumeCheckpoint
    *
    * @param bool|null $resumeCheckpoint 异常自动重启时，是否从最新checkpoint恢复，默认false
    *
    * @return $this
    */
    public function setResumeCheckpoint($resumeCheckpoint)
    {
        $this->container['resumeCheckpoint'] = $resumeCheckpoint;
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

