<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchDetailV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchDetailV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一标识符
    * tenantId  租户ID
    * projectId  项目ID
    * dgcInstanceId  DGC实例ID
    * workspace  工作空间ID
    * docType  搜索范围: （多选） 默认为全部。 - node: 开发作业 - script: 脚本
    * owner  负责人
    * newSaveOrCommit  最新修改:  默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * version  数字版本号或草稿标识
    * lastModifiedTime  最后修改时间
    * jobName  作业名称
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * jobParams  作业参数
    * nodeName  节点名称
    * nodeType  节点类型: （多选）节点类型列表。 默认为全部。   - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL   - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL   - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python   - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL   - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs)   - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs)   - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL   - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL   - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL   - com.cloud.datacraft.processactivity.ExecuteScript: Shell   - com.cloud.datacraft.processactivity.ExecutePythonScript: Python   - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse   - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine   - com.cloud.datacraft.activity.DataMigration: DataMigration
    * scriptName  脚本名称
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - Spark Python: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * scriptParams  脚本参数
    * cdmClusterName  CDM集群名称
    * cdmJobName  CDM作业名称
    * cdmParams  CDM参数
    * workspaceName  工作空间名称
    * jobId  作业ID
    * scriptId  脚本ID
    * singleNodeJobType  单节点作业类型
    * scheduleState  调度状态:  默认为全部。 - running: 已调度 - stop: 未调度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'dgcInstanceId' => 'string',
            'workspace' => 'string',
            'docType' => 'string',
            'owner' => 'string',
            'newSaveOrCommit' => 'string',
            'version' => 'int',
            'lastModifiedTime' => 'int',
            'jobName' => 'string',
            'jobType' => 'string',
            'jobParams' => 'string',
            'nodeName' => 'string',
            'nodeType' => 'string',
            'scriptName' => 'string',
            'scriptType' => 'string',
            'scriptParams' => 'string',
            'cdmClusterName' => 'string',
            'cdmJobName' => 'string',
            'cdmParams' => 'string',
            'workspaceName' => 'string',
            'jobId' => 'string',
            'scriptId' => 'string',
            'singleNodeJobType' => 'string',
            'scheduleState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一标识符
    * tenantId  租户ID
    * projectId  项目ID
    * dgcInstanceId  DGC实例ID
    * workspace  工作空间ID
    * docType  搜索范围: （多选） 默认为全部。 - node: 开发作业 - script: 脚本
    * owner  负责人
    * newSaveOrCommit  最新修改:  默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * version  数字版本号或草稿标识
    * lastModifiedTime  最后修改时间
    * jobName  作业名称
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * jobParams  作业参数
    * nodeName  节点名称
    * nodeType  节点类型: （多选）节点类型列表。 默认为全部。   - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL   - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL   - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python   - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL   - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs)   - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs)   - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL   - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL   - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL   - com.cloud.datacraft.processactivity.ExecuteScript: Shell   - com.cloud.datacraft.processactivity.ExecutePythonScript: Python   - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse   - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine   - com.cloud.datacraft.activity.DataMigration: DataMigration
    * scriptName  脚本名称
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - Spark Python: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * scriptParams  脚本参数
    * cdmClusterName  CDM集群名称
    * cdmJobName  CDM作业名称
    * cdmParams  CDM参数
    * workspaceName  工作空间名称
    * jobId  作业ID
    * scriptId  脚本ID
    * singleNodeJobType  单节点作业类型
    * scheduleState  调度状态:  默认为全部。 - running: 已调度 - stop: 未调度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'projectId' => null,
        'dgcInstanceId' => null,
        'workspace' => null,
        'docType' => null,
        'owner' => null,
        'newSaveOrCommit' => null,
        'version' => 'int32',
        'lastModifiedTime' => 'int64',
        'jobName' => null,
        'jobType' => null,
        'jobParams' => null,
        'nodeName' => null,
        'nodeType' => null,
        'scriptName' => null,
        'scriptType' => null,
        'scriptParams' => null,
        'cdmClusterName' => null,
        'cdmJobName' => null,
        'cdmParams' => null,
        'workspaceName' => null,
        'jobId' => null,
        'scriptId' => null,
        'singleNodeJobType' => null,
        'scheduleState' => null
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
    * id  唯一标识符
    * tenantId  租户ID
    * projectId  项目ID
    * dgcInstanceId  DGC实例ID
    * workspace  工作空间ID
    * docType  搜索范围: （多选） 默认为全部。 - node: 开发作业 - script: 脚本
    * owner  负责人
    * newSaveOrCommit  最新修改:  默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * version  数字版本号或草稿标识
    * lastModifiedTime  最后修改时间
    * jobName  作业名称
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * jobParams  作业参数
    * nodeName  节点名称
    * nodeType  节点类型: （多选）节点类型列表。 默认为全部。   - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL   - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL   - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python   - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL   - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs)   - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs)   - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL   - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL   - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL   - com.cloud.datacraft.processactivity.ExecuteScript: Shell   - com.cloud.datacraft.processactivity.ExecutePythonScript: Python   - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse   - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine   - com.cloud.datacraft.activity.DataMigration: DataMigration
    * scriptName  脚本名称
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - Spark Python: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * scriptParams  脚本参数
    * cdmClusterName  CDM集群名称
    * cdmJobName  CDM作业名称
    * cdmParams  CDM参数
    * workspaceName  工作空间名称
    * jobId  作业ID
    * scriptId  脚本ID
    * singleNodeJobType  单节点作业类型
    * scheduleState  调度状态:  默认为全部。 - running: 已调度 - stop: 未调度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'dgcInstanceId' => 'dgc_instance_id',
            'workspace' => 'workspace',
            'docType' => 'doc_type',
            'owner' => 'owner',
            'newSaveOrCommit' => 'new_save_or_commit',
            'version' => 'version',
            'lastModifiedTime' => 'last_modified_time',
            'jobName' => 'job_name',
            'jobType' => 'job_type',
            'jobParams' => 'job_params',
            'nodeName' => 'node_name',
            'nodeType' => 'node_type',
            'scriptName' => 'script_name',
            'scriptType' => 'script_type',
            'scriptParams' => 'script_params',
            'cdmClusterName' => 'cdm_cluster_name',
            'cdmJobName' => 'cdm_job_name',
            'cdmParams' => 'cdm_params',
            'workspaceName' => 'workspace_name',
            'jobId' => 'job_id',
            'scriptId' => 'script_id',
            'singleNodeJobType' => 'single_node_job_type',
            'scheduleState' => 'schedule_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一标识符
    * tenantId  租户ID
    * projectId  项目ID
    * dgcInstanceId  DGC实例ID
    * workspace  工作空间ID
    * docType  搜索范围: （多选） 默认为全部。 - node: 开发作业 - script: 脚本
    * owner  负责人
    * newSaveOrCommit  最新修改:  默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * version  数字版本号或草稿标识
    * lastModifiedTime  最后修改时间
    * jobName  作业名称
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * jobParams  作业参数
    * nodeName  节点名称
    * nodeType  节点类型: （多选）节点类型列表。 默认为全部。   - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL   - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL   - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python   - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL   - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs)   - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs)   - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL   - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL   - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL   - com.cloud.datacraft.processactivity.ExecuteScript: Shell   - com.cloud.datacraft.processactivity.ExecutePythonScript: Python   - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse   - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine   - com.cloud.datacraft.activity.DataMigration: DataMigration
    * scriptName  脚本名称
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - Spark Python: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * scriptParams  脚本参数
    * cdmClusterName  CDM集群名称
    * cdmJobName  CDM作业名称
    * cdmParams  CDM参数
    * workspaceName  工作空间名称
    * jobId  作业ID
    * scriptId  脚本ID
    * singleNodeJobType  单节点作业类型
    * scheduleState  调度状态:  默认为全部。 - running: 已调度 - stop: 未调度
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'dgcInstanceId' => 'setDgcInstanceId',
            'workspace' => 'setWorkspace',
            'docType' => 'setDocType',
            'owner' => 'setOwner',
            'newSaveOrCommit' => 'setNewSaveOrCommit',
            'version' => 'setVersion',
            'lastModifiedTime' => 'setLastModifiedTime',
            'jobName' => 'setJobName',
            'jobType' => 'setJobType',
            'jobParams' => 'setJobParams',
            'nodeName' => 'setNodeName',
            'nodeType' => 'setNodeType',
            'scriptName' => 'setScriptName',
            'scriptType' => 'setScriptType',
            'scriptParams' => 'setScriptParams',
            'cdmClusterName' => 'setCdmClusterName',
            'cdmJobName' => 'setCdmJobName',
            'cdmParams' => 'setCdmParams',
            'workspaceName' => 'setWorkspaceName',
            'jobId' => 'setJobId',
            'scriptId' => 'setScriptId',
            'singleNodeJobType' => 'setSingleNodeJobType',
            'scheduleState' => 'setScheduleState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一标识符
    * tenantId  租户ID
    * projectId  项目ID
    * dgcInstanceId  DGC实例ID
    * workspace  工作空间ID
    * docType  搜索范围: （多选） 默认为全部。 - node: 开发作业 - script: 脚本
    * owner  负责人
    * newSaveOrCommit  最新修改:  默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * version  数字版本号或草稿标识
    * lastModifiedTime  最后修改时间
    * jobName  作业名称
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * jobParams  作业参数
    * nodeName  节点名称
    * nodeType  节点类型: （多选）节点类型列表。 默认为全部。   - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL   - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL   - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python   - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL   - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs)   - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs)   - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL   - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL   - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL   - com.cloud.datacraft.processactivity.ExecuteScript: Shell   - com.cloud.datacraft.processactivity.ExecutePythonScript: Python   - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse   - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine   - com.cloud.datacraft.activity.DataMigration: DataMigration
    * scriptName  脚本名称
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - Spark Python: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * scriptParams  脚本参数
    * cdmClusterName  CDM集群名称
    * cdmJobName  CDM作业名称
    * cdmParams  CDM参数
    * workspaceName  工作空间名称
    * jobId  作业ID
    * scriptId  脚本ID
    * singleNodeJobType  单节点作业类型
    * scheduleState  调度状态:  默认为全部。 - running: 已调度 - stop: 未调度
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
            'dgcInstanceId' => 'getDgcInstanceId',
            'workspace' => 'getWorkspace',
            'docType' => 'getDocType',
            'owner' => 'getOwner',
            'newSaveOrCommit' => 'getNewSaveOrCommit',
            'version' => 'getVersion',
            'lastModifiedTime' => 'getLastModifiedTime',
            'jobName' => 'getJobName',
            'jobType' => 'getJobType',
            'jobParams' => 'getJobParams',
            'nodeName' => 'getNodeName',
            'nodeType' => 'getNodeType',
            'scriptName' => 'getScriptName',
            'scriptType' => 'getScriptType',
            'scriptParams' => 'getScriptParams',
            'cdmClusterName' => 'getCdmClusterName',
            'cdmJobName' => 'getCdmJobName',
            'cdmParams' => 'getCdmParams',
            'workspaceName' => 'getWorkspaceName',
            'jobId' => 'getJobId',
            'scriptId' => 'getScriptId',
            'singleNodeJobType' => 'getSingleNodeJobType',
            'scheduleState' => 'getScheduleState'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['dgcInstanceId'] = isset($data['dgcInstanceId']) ? $data['dgcInstanceId'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['newSaveOrCommit'] = isset($data['newSaveOrCommit']) ? $data['newSaveOrCommit'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobParams'] = isset($data['jobParams']) ? $data['jobParams'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['scriptType'] = isset($data['scriptType']) ? $data['scriptType'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
        $this->container['cdmClusterName'] = isset($data['cdmClusterName']) ? $data['cdmClusterName'] : null;
        $this->container['cdmJobName'] = isset($data['cdmJobName']) ? $data['cdmJobName'] : null;
        $this->container['cdmParams'] = isset($data['cdmParams']) ? $data['cdmParams'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['singleNodeJobType'] = isset($data['singleNodeJobType']) ? $data['singleNodeJobType'] : null;
        $this->container['scheduleState'] = isset($data['scheduleState']) ? $data['scheduleState'] : null;
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
    *  唯一标识符
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
    * @param string|null $id 唯一标识符
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
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
    * Gets dgcInstanceId
    *  DGC实例ID
    *
    * @return string|null
    */
    public function getDgcInstanceId()
    {
        return $this->container['dgcInstanceId'];
    }

    /**
    * Sets dgcInstanceId
    *
    * @param string|null $dgcInstanceId DGC实例ID
    *
    * @return $this
    */
    public function setDgcInstanceId($dgcInstanceId)
    {
        $this->container['dgcInstanceId'] = $dgcInstanceId;
        return $this;
    }

    /**
    * Gets workspace
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets docType
    *  搜索范围: （多选） 默认为全部。 - node: 开发作业 - script: 脚本
    *
    * @return string|null
    */
    public function getDocType()
    {
        return $this->container['docType'];
    }

    /**
    * Sets docType
    *
    * @param string|null $docType 搜索范围: （多选） 默认为全部。 - node: 开发作业 - script: 脚本
    *
    * @return $this
    */
    public function setDocType($docType)
    {
        $this->container['docType'] = $docType;
        return $this;
    }

    /**
    * Gets owner
    *  负责人
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 负责人
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets newSaveOrCommit
    *  最新修改:  默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    *
    * @return string|null
    */
    public function getNewSaveOrCommit()
    {
        return $this->container['newSaveOrCommit'];
    }

    /**
    * Sets newSaveOrCommit
    *
    * @param string|null $newSaveOrCommit 最新修改:  默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    *
    * @return $this
    */
    public function setNewSaveOrCommit($newSaveOrCommit)
    {
        $this->container['newSaveOrCommit'] = $newSaveOrCommit;
        return $this;
    }

    /**
    * Gets version
    *  数字版本号或草稿标识
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 数字版本号或草稿标识
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets lastModifiedTime
    *  最后修改时间
    *
    * @return int|null
    */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
    * Sets lastModifiedTime
    *
    * @param int|null $lastModifiedTime 最后修改时间
    *
    * @return $this
    */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称
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
    * @param string|null $jobName 作业名称
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
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
    * @param string|null $jobType 作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobParams
    *  作业参数
    *
    * @return string|null
    */
    public function getJobParams()
    {
        return $this->container['jobParams'];
    }

    /**
    * Sets jobParams
    *
    * @param string|null $jobParams 作业参数
    *
    * @return $this
    */
    public function setJobParams($jobParams)
    {
        $this->container['jobParams'] = $jobParams;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型: （多选）节点类型列表。 默认为全部。   - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL   - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL   - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python   - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL   - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs)   - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs)   - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL   - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL   - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL   - com.cloud.datacraft.processactivity.ExecuteScript: Shell   - com.cloud.datacraft.processactivity.ExecutePythonScript: Python   - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse   - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine   - com.cloud.datacraft.activity.DataMigration: DataMigration
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型: （多选）节点类型列表。 默认为全部。   - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL   - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL   - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python   - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL   - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs)   - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs)   - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL   - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL   - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL   - com.cloud.datacraft.processactivity.ExecuteScript: Shell   - com.cloud.datacraft.processactivity.ExecutePythonScript: Python   - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse   - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine   - com.cloud.datacraft.activity.DataMigration: DataMigration
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets scriptName
    *  脚本名称
    *
    * @return string|null
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string|null $scriptName 脚本名称
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets scriptType
    *  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - Spark Python: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    *
    * @return string|null
    */
    public function getScriptType()
    {
        return $this->container['scriptType'];
    }

    /**
    * Sets scriptType
    *
    * @param string|null $scriptType 脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - Spark Python: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    *
    * @return $this
    */
    public function setScriptType($scriptType)
    {
        $this->container['scriptType'] = $scriptType;
        return $this;
    }

    /**
    * Gets scriptParams
    *  脚本参数
    *
    * @return string|null
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param string|null $scriptParams 脚本参数
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
        return $this;
    }

    /**
    * Gets cdmClusterName
    *  CDM集群名称
    *
    * @return string|null
    */
    public function getCdmClusterName()
    {
        return $this->container['cdmClusterName'];
    }

    /**
    * Sets cdmClusterName
    *
    * @param string|null $cdmClusterName CDM集群名称
    *
    * @return $this
    */
    public function setCdmClusterName($cdmClusterName)
    {
        $this->container['cdmClusterName'] = $cdmClusterName;
        return $this;
    }

    /**
    * Gets cdmJobName
    *  CDM作业名称
    *
    * @return string|null
    */
    public function getCdmJobName()
    {
        return $this->container['cdmJobName'];
    }

    /**
    * Sets cdmJobName
    *
    * @param string|null $cdmJobName CDM作业名称
    *
    * @return $this
    */
    public function setCdmJobName($cdmJobName)
    {
        $this->container['cdmJobName'] = $cdmJobName;
        return $this;
    }

    /**
    * Gets cdmParams
    *  CDM参数
    *
    * @return string|null
    */
    public function getCdmParams()
    {
        return $this->container['cdmParams'];
    }

    /**
    * Sets cdmParams
    *
    * @param string|null $cdmParams CDM参数
    *
    * @return $this
    */
    public function setCdmParams($cdmParams)
    {
        $this->container['cdmParams'] = $cdmParams;
        return $this;
    }

    /**
    * Gets workspaceName
    *  工作空间名称
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 工作空间名称
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
        return $this;
    }

    /**
    * Gets jobId
    *  作业ID
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
    * @param string|null $jobId 作业ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets scriptId
    *  脚本ID
    *
    * @return string|null
    */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
    * Sets scriptId
    *
    * @param string|null $scriptId 脚本ID
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
        return $this;
    }

    /**
    * Gets singleNodeJobType
    *  单节点作业类型
    *
    * @return string|null
    */
    public function getSingleNodeJobType()
    {
        return $this->container['singleNodeJobType'];
    }

    /**
    * Sets singleNodeJobType
    *
    * @param string|null $singleNodeJobType 单节点作业类型
    *
    * @return $this
    */
    public function setSingleNodeJobType($singleNodeJobType)
    {
        $this->container['singleNodeJobType'] = $singleNodeJobType;
        return $this;
    }

    /**
    * Gets scheduleState
    *  调度状态:  默认为全部。 - running: 已调度 - stop: 未调度
    *
    * @return string|null
    */
    public function getScheduleState()
    {
        return $this->container['scheduleState'];
    }

    /**
    * Sets scheduleState
    *
    * @param string|null $scheduleState 调度状态:  默认为全部。 - running: 已调度 - stop: 未调度
    *
    * @return $this
    */
    public function setScheduleState($scheduleState)
    {
        $this->container['scheduleState'] = $scheduleState;
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

