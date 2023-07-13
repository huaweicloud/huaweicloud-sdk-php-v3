<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobDetailResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobDetailResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'createTime' => 'string',
            'totalCount' => 'int',
            'masterJobId' => 'string',
            'baseInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'targetEndpoint' => '\HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]',
            'alarmNotify' => '\HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig',
            'speedLimit' => '\HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]',
            'userMigration' => '\HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo',
            'policyConfig' => '\HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig',
            'dbParam' => '\HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo',
            'tuningParams' => '\HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo',
            'periodOrder' => '\HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo',
            'nodeInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo',
            'logs' => '\HuaweiCloud\SDK\Drs\V5\Model\TaskLogInfo[]',
            'networkResults' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryNetworkResult[]',
            'precheckResult' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryPreCheckResult',
            'progressInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\JobProgressInfo',
            'migrationObjectProgressInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryMigrationObjectProgressInfo',
            'metrics' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryMetricResult',
            'compareResult' => '\HuaweiCloud\SDK\Drs\V5\Model\CompareResultInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'createTime' => null,
        'totalCount' => 'int32',
        'masterJobId' => null,
        'baseInfo' => null,
        'sourceEndpoint' => null,
        'targetEndpoint' => null,
        'alarmNotify' => null,
        'speedLimit' => null,
        'userMigration' => null,
        'policyConfig' => null,
        'dbParam' => null,
        'tuningParams' => null,
        'periodOrder' => null,
        'nodeInfo' => null,
        'logs' => null,
        'networkResults' => null,
        'precheckResult' => null,
        'progressInfo' => null,
        'migrationObjectProgressInfo' => null,
        'metrics' => null,
        'compareResult' => null
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
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'createTime' => 'create_time',
            'totalCount' => 'total_count',
            'masterJobId' => 'master_job_id',
            'baseInfo' => 'base_info',
            'sourceEndpoint' => 'source_endpoint',
            'targetEndpoint' => 'target_endpoint',
            'alarmNotify' => 'alarm_notify',
            'speedLimit' => 'speed_limit',
            'userMigration' => 'user_migration',
            'policyConfig' => 'policy_config',
            'dbParam' => 'db_param',
            'tuningParams' => 'tuning_params',
            'periodOrder' => 'period_order',
            'nodeInfo' => 'node_info',
            'logs' => 'logs',
            'networkResults' => 'network_results',
            'precheckResult' => 'precheck_result',
            'progressInfo' => 'progress_info',
            'migrationObjectProgressInfo' => 'migration_object_progress_info',
            'metrics' => 'metrics',
            'compareResult' => 'compare_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'totalCount' => 'setTotalCount',
            'masterJobId' => 'setMasterJobId',
            'baseInfo' => 'setBaseInfo',
            'sourceEndpoint' => 'setSourceEndpoint',
            'targetEndpoint' => 'setTargetEndpoint',
            'alarmNotify' => 'setAlarmNotify',
            'speedLimit' => 'setSpeedLimit',
            'userMigration' => 'setUserMigration',
            'policyConfig' => 'setPolicyConfig',
            'dbParam' => 'setDbParam',
            'tuningParams' => 'setTuningParams',
            'periodOrder' => 'setPeriodOrder',
            'nodeInfo' => 'setNodeInfo',
            'logs' => 'setLogs',
            'networkResults' => 'setNetworkResults',
            'precheckResult' => 'setPrecheckResult',
            'progressInfo' => 'setProgressInfo',
            'migrationObjectProgressInfo' => 'setMigrationObjectProgressInfo',
            'metrics' => 'setMetrics',
            'compareResult' => 'setCompareResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID。
    * status  任务状态。
    * createTime  任务创建时间。
    * totalCount  列表中的项目总数，与分页无关。
    * masterJobId  多任务主节点的任务ID。
    * baseInfo  baseInfo
    * sourceEndpoint  任务源数据库信息体。
    * targetEndpoint  任务目标数据库信息体。
    * alarmNotify  alarmNotify
    * speedLimit  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    * userMigration  userMigration
    * policyConfig  policyConfig
    * dbParam  dbParam
    * tuningParams  tuningParams
    * periodOrder  periodOrder
    * nodeInfo  nodeInfo
    * logs  日志查询结果信息体。
    * networkResults  网络打通测试结果信息体。
    * precheckResult  precheckResult
    * progressInfo  progressInfo
    * migrationObjectProgressInfo  migrationObjectProgressInfo
    * metrics  metrics
    * compareResult  compareResult
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'totalCount' => 'getTotalCount',
            'masterJobId' => 'getMasterJobId',
            'baseInfo' => 'getBaseInfo',
            'sourceEndpoint' => 'getSourceEndpoint',
            'targetEndpoint' => 'getTargetEndpoint',
            'alarmNotify' => 'getAlarmNotify',
            'speedLimit' => 'getSpeedLimit',
            'userMigration' => 'getUserMigration',
            'policyConfig' => 'getPolicyConfig',
            'dbParam' => 'getDbParam',
            'tuningParams' => 'getTuningParams',
            'periodOrder' => 'getPeriodOrder',
            'nodeInfo' => 'getNodeInfo',
            'logs' => 'getLogs',
            'networkResults' => 'getNetworkResults',
            'precheckResult' => 'getPrecheckResult',
            'progressInfo' => 'getProgressInfo',
            'migrationObjectProgressInfo' => 'getMigrationObjectProgressInfo',
            'metrics' => 'getMetrics',
            'compareResult' => 'getCompareResult'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['masterJobId'] = isset($data['masterJobId']) ? $data['masterJobId'] : null;
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['targetEndpoint'] = isset($data['targetEndpoint']) ? $data['targetEndpoint'] : null;
        $this->container['alarmNotify'] = isset($data['alarmNotify']) ? $data['alarmNotify'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['userMigration'] = isset($data['userMigration']) ? $data['userMigration'] : null;
        $this->container['policyConfig'] = isset($data['policyConfig']) ? $data['policyConfig'] : null;
        $this->container['dbParam'] = isset($data['dbParam']) ? $data['dbParam'] : null;
        $this->container['tuningParams'] = isset($data['tuningParams']) ? $data['tuningParams'] : null;
        $this->container['periodOrder'] = isset($data['periodOrder']) ? $data['periodOrder'] : null;
        $this->container['nodeInfo'] = isset($data['nodeInfo']) ? $data['nodeInfo'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
        $this->container['networkResults'] = isset($data['networkResults']) ? $data['networkResults'] : null;
        $this->container['precheckResult'] = isset($data['precheckResult']) ? $data['precheckResult'] : null;
        $this->container['progressInfo'] = isset($data['progressInfo']) ? $data['progressInfo'] : null;
        $this->container['migrationObjectProgressInfo'] = isset($data['migrationObjectProgressInfo']) ? $data['migrationObjectProgressInfo'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['compareResult'] = isset($data['compareResult']) ? $data['compareResult'] : null;
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
    * Gets id
    *  任务ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 任务ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。
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
    * @param string|null $status 任务状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 任务创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets totalCount
    *  列表中的项目总数，与分页无关。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 列表中的项目总数，与分页无关。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets masterJobId
    *  多任务主节点的任务ID。
    *
    * @return string|null
    */
    public function getMasterJobId()
    {
        return $this->container['masterJobId'];
    }

    /**
    * Sets masterJobId
    *
    * @param string|null $masterJobId 多任务主节点的任务ID。
    *
    * @return $this
    */
    public function setMasterJobId($masterJobId)
    {
        $this->container['masterJobId'] = $masterJobId;
        return $this;
    }

    /**
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo|null
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobBaseInfo|null $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  任务源数据库信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null $sourceEndpoint 任务源数据库信息体。
    *
    * @return $this
    */
    public function setSourceEndpoint($sourceEndpoint)
    {
        $this->container['sourceEndpoint'] = $sourceEndpoint;
        return $this;
    }

    /**
    * Gets targetEndpoint
    *  任务目标数据库信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null
    */
    public function getTargetEndpoint()
    {
        return $this->container['targetEndpoint'];
    }

    /**
    * Sets targetEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobEndpointInfo[]|null $targetEndpoint 任务目标数据库信息体。
    *
    * @return $this
    */
    public function setTargetEndpoint($targetEndpoint)
    {
        $this->container['targetEndpoint'] = $targetEndpoint;
        return $this;
    }

    /**
    * Gets alarmNotify
    *  alarmNotify
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig|null
    */
    public function getAlarmNotify()
    {
        return $this->container['alarmNotify'];
    }

    /**
    * Sets alarmNotify
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\AlarmNotifyConfig|null $alarmNotify alarmNotify
    *
    * @return $this
    */
    public function setAlarmNotify($alarmNotify)
    {
        $this->container['alarmNotify'] = $alarmNotify;
        return $this;
    }

    /**
    * Gets speedLimit
    *  限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]|null
    */
    public function getSpeedLimit()
    {
        return $this->container['speedLimit'];
    }

    /**
    * Sets speedLimit
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\SpeedLimitInfo[]|null $speedLimit 限速信息体。 - 限速：自定义的最大迁移速度，迁移过程中的迁移速度将不会超过该速度。  - 不限速：对迁移速度不进行限制，通常会最大化使用源数据库的出口带宽。该流速模式同时会对源数据库造成读消耗，消耗取决于源数据库的出口带宽。比如：源数据库的出口带宽为100MB/s，假设高速模式使用了80%带宽，则迁移对源数据库将造成80MB/s的读操作IO消耗。
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets userMigration
    *  userMigration
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo|null
    */
    public function getUserMigration()
    {
        return $this->container['userMigration'];
    }

    /**
    * Sets userMigration
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\UserMigrationInfo|null $userMigration userMigration
    *
    * @return $this
    */
    public function setUserMigration($userMigration)
    {
        $this->container['userMigration'] = $userMigration;
        return $this;
    }

    /**
    * Gets policyConfig
    *  policyConfig
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig|null
    */
    public function getPolicyConfig()
    {
        return $this->container['policyConfig'];
    }

    /**
    * Sets policyConfig
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PolicyConfig|null $policyConfig policyConfig
    *
    * @return $this
    */
    public function setPolicyConfig($policyConfig)
    {
        $this->container['policyConfig'] = $policyConfig;
        return $this;
    }

    /**
    * Gets dbParam
    *  dbParam
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo|null
    */
    public function getDbParam()
    {
        return $this->container['dbParam'];
    }

    /**
    * Sets dbParam
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DbParamInfo|null $dbParam dbParam
    *
    * @return $this
    */
    public function setDbParam($dbParam)
    {
        $this->container['dbParam'] = $dbParam;
        return $this;
    }

    /**
    * Gets tuningParams
    *  tuningParams
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo|null
    */
    public function getTuningParams()
    {
        return $this->container['tuningParams'];
    }

    /**
    * Sets tuningParams
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TuningParamInfo|null $tuningParams tuningParams
    *
    * @return $this
    */
    public function setTuningParams($tuningParams)
    {
        $this->container['tuningParams'] = $tuningParams;
        return $this;
    }

    /**
    * Gets periodOrder
    *  periodOrder
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo|null
    */
    public function getPeriodOrder()
    {
        return $this->container['periodOrder'];
    }

    /**
    * Sets periodOrder
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PeriodOrderInfo|null $periodOrder periodOrder
    *
    * @return $this
    */
    public function setPeriodOrder($periodOrder)
    {
        $this->container['periodOrder'] = $periodOrder;
        return $this;
    }

    /**
    * Gets nodeInfo
    *  nodeInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo|null
    */
    public function getNodeInfo()
    {
        return $this->container['nodeInfo'];
    }

    /**
    * Sets nodeInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobNodeInfo|null $nodeInfo nodeInfo
    *
    * @return $this
    */
    public function setNodeInfo($nodeInfo)
    {
        $this->container['nodeInfo'] = $nodeInfo;
        return $this;
    }

    /**
    * Gets logs
    *  日志查询结果信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TaskLogInfo[]|null
    */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
    * Sets logs
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TaskLogInfo[]|null $logs 日志查询结果信息体。
    *
    * @return $this
    */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;
        return $this;
    }

    /**
    * Gets networkResults
    *  网络打通测试结果信息体。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryNetworkResult[]|null
    */
    public function getNetworkResults()
    {
        return $this->container['networkResults'];
    }

    /**
    * Sets networkResults
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryNetworkResult[]|null $networkResults 网络打通测试结果信息体。
    *
    * @return $this
    */
    public function setNetworkResults($networkResults)
    {
        $this->container['networkResults'] = $networkResults;
        return $this;
    }

    /**
    * Gets precheckResult
    *  precheckResult
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryPreCheckResult|null
    */
    public function getPrecheckResult()
    {
        return $this->container['precheckResult'];
    }

    /**
    * Sets precheckResult
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryPreCheckResult|null $precheckResult precheckResult
    *
    * @return $this
    */
    public function setPrecheckResult($precheckResult)
    {
        $this->container['precheckResult'] = $precheckResult;
        return $this;
    }

    /**
    * Gets progressInfo
    *  progressInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\JobProgressInfo|null
    */
    public function getProgressInfo()
    {
        return $this->container['progressInfo'];
    }

    /**
    * Sets progressInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\JobProgressInfo|null $progressInfo progressInfo
    *
    * @return $this
    */
    public function setProgressInfo($progressInfo)
    {
        $this->container['progressInfo'] = $progressInfo;
        return $this;
    }

    /**
    * Gets migrationObjectProgressInfo
    *  migrationObjectProgressInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryMigrationObjectProgressInfo|null
    */
    public function getMigrationObjectProgressInfo()
    {
        return $this->container['migrationObjectProgressInfo'];
    }

    /**
    * Sets migrationObjectProgressInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryMigrationObjectProgressInfo|null $migrationObjectProgressInfo migrationObjectProgressInfo
    *
    * @return $this
    */
    public function setMigrationObjectProgressInfo($migrationObjectProgressInfo)
    {
        $this->container['migrationObjectProgressInfo'] = $migrationObjectProgressInfo;
        return $this;
    }

    /**
    * Gets metrics
    *  metrics
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryMetricResult|null
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryMetricResult|null $metrics metrics
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets compareResult
    *  compareResult
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\CompareResultInfo|null
    */
    public function getCompareResult()
    {
        return $this->container['compareResult'];
    }

    /**
    * Sets compareResult
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\CompareResultInfo|null $compareResult compareResult
    *
    * @return $this
    */
    public function setCompareResult($compareResult)
    {
        $this->container['compareResult'] = $compareResult;
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

