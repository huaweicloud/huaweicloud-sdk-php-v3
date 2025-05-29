<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFactoryFullTextRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFactoryFullTextRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  搜索空间范围: 默认不传参，在全部空间内搜索。 - 当前工作空间ID: 当前工作空间的ID
    * searchText  全局搜索关键字，输入至少两位字符。
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - SparkPython: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * nodeType  节点类型: （多选）节点类型列表。样例: node_type=com.cloud.datacraft.processactivity.ExecuteHiveJob 默认为全部。 - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs) - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs) - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL - com.cloud.datacraft.processactivity.ExecuteScript: Shell - com.cloud.datacraft.processactivity.ExecutePythonScript: Python - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine - com.cloud.datacraft.activity.DataMigration: DataMigration
    * newSaveOrCommit  最新修改: 样例: new_save_or_commit=save 默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * owners  责任人名称: （多选）人员列表或我的节点。样例: owners=dayu_wm 默认不过滤责任人。
    * docTypes  搜索范围: （多选）样例: doc_types=script 默认为全部。 - node: 开发作业 - script: 脚本
    * beginTime  开始时间，配合结束时间参数使用，默认没有时间范围。样例: begin_time=1746633600000
    * endTime  结束时间，配合开始时间参数使用，默认没有时间范围。样例: endTime=1746806399999
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * ifQueryParameters  是否搜索配置参数部分的内容: 样例: if_query_parameters=false 默认为false: 不搜索配置参数部分的内容 - true: 是 - false: 否
    * matchType  匹配方式: 样例: match_type=0 默认为0: 通用。 - 0: 通用 - 1: 模糊
    * scheduleState  调度状态: 仅支持作业查找场景，需配置new_save_or_commit参数为commit 默认为全部。 - running: 已调度 - stop: 未调度
    * isExact  是否精确搜索: 开启后配合exact_field参数使用。 默认为false: 非精确搜索 - true: 精确搜索 - false: 非精确搜索
    * exactField  精确查询的字段, 开启精确搜索时生效: - jobName: 作业名 - scriptName: 脚本名 - jobId: 作业ID - scriptId: 脚本ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'workspaceId' => 'string',
            'searchText' => 'string',
            'jobType' => 'string',
            'scriptType' => 'string',
            'nodeType' => 'string',
            'newSaveOrCommit' => 'string',
            'owners' => 'string',
            'docTypes' => 'string',
            'beginTime' => 'int',
            'endTime' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'ifQueryParameters' => 'string',
            'matchType' => 'int',
            'scheduleState' => 'string',
            'isExact' => 'string',
            'exactField' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  搜索空间范围: 默认不传参，在全部空间内搜索。 - 当前工作空间ID: 当前工作空间的ID
    * searchText  全局搜索关键字，输入至少两位字符。
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - SparkPython: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * nodeType  节点类型: （多选）节点类型列表。样例: node_type=com.cloud.datacraft.processactivity.ExecuteHiveJob 默认为全部。 - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs) - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs) - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL - com.cloud.datacraft.processactivity.ExecuteScript: Shell - com.cloud.datacraft.processactivity.ExecutePythonScript: Python - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine - com.cloud.datacraft.activity.DataMigration: DataMigration
    * newSaveOrCommit  最新修改: 样例: new_save_or_commit=save 默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * owners  责任人名称: （多选）人员列表或我的节点。样例: owners=dayu_wm 默认不过滤责任人。
    * docTypes  搜索范围: （多选）样例: doc_types=script 默认为全部。 - node: 开发作业 - script: 脚本
    * beginTime  开始时间，配合结束时间参数使用，默认没有时间范围。样例: begin_time=1746633600000
    * endTime  结束时间，配合开始时间参数使用，默认没有时间范围。样例: endTime=1746806399999
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * ifQueryParameters  是否搜索配置参数部分的内容: 样例: if_query_parameters=false 默认为false: 不搜索配置参数部分的内容 - true: 是 - false: 否
    * matchType  匹配方式: 样例: match_type=0 默认为0: 通用。 - 0: 通用 - 1: 模糊
    * scheduleState  调度状态: 仅支持作业查找场景，需配置new_save_or_commit参数为commit 默认为全部。 - running: 已调度 - stop: 未调度
    * isExact  是否精确搜索: 开启后配合exact_field参数使用。 默认为false: 非精确搜索 - true: 精确搜索 - false: 非精确搜索
    * exactField  精确查询的字段, 开启精确搜索时生效: - jobName: 作业名 - scriptName: 脚本名 - jobId: 作业ID - scriptId: 脚本ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'workspaceId' => null,
        'searchText' => null,
        'jobType' => null,
        'scriptType' => null,
        'nodeType' => null,
        'newSaveOrCommit' => null,
        'owners' => null,
        'docTypes' => null,
        'beginTime' => 'int64',
        'endTime' => 'int64',
        'limit' => 'int32',
        'offset' => 'int32',
        'ifQueryParameters' => null,
        'matchType' => 'int32',
        'scheduleState' => null,
        'isExact' => null,
        'exactField' => null
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
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  搜索空间范围: 默认不传参，在全部空间内搜索。 - 当前工作空间ID: 当前工作空间的ID
    * searchText  全局搜索关键字，输入至少两位字符。
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - SparkPython: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * nodeType  节点类型: （多选）节点类型列表。样例: node_type=com.cloud.datacraft.processactivity.ExecuteHiveJob 默认为全部。 - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs) - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs) - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL - com.cloud.datacraft.processactivity.ExecuteScript: Shell - com.cloud.datacraft.processactivity.ExecutePythonScript: Python - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine - com.cloud.datacraft.activity.DataMigration: DataMigration
    * newSaveOrCommit  最新修改: 样例: new_save_or_commit=save 默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * owners  责任人名称: （多选）人员列表或我的节点。样例: owners=dayu_wm 默认不过滤责任人。
    * docTypes  搜索范围: （多选）样例: doc_types=script 默认为全部。 - node: 开发作业 - script: 脚本
    * beginTime  开始时间，配合结束时间参数使用，默认没有时间范围。样例: begin_time=1746633600000
    * endTime  结束时间，配合开始时间参数使用，默认没有时间范围。样例: endTime=1746806399999
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * ifQueryParameters  是否搜索配置参数部分的内容: 样例: if_query_parameters=false 默认为false: 不搜索配置参数部分的内容 - true: 是 - false: 否
    * matchType  匹配方式: 样例: match_type=0 默认为0: 通用。 - 0: 通用 - 1: 模糊
    * scheduleState  调度状态: 仅支持作业查找场景，需配置new_save_or_commit参数为commit 默认为全部。 - running: 已调度 - stop: 未调度
    * isExact  是否精确搜索: 开启后配合exact_field参数使用。 默认为false: 非精确搜索 - true: 精确搜索 - false: 非精确搜索
    * exactField  精确查询的字段, 开启精确搜索时生效: - jobName: 作业名 - scriptName: 脚本名 - jobId: 作业ID - scriptId: 脚本ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'workspaceId' => 'workspace_id',
            'searchText' => 'search_text',
            'jobType' => 'job_type',
            'scriptType' => 'script_type',
            'nodeType' => 'node_type',
            'newSaveOrCommit' => 'new_save_or_commit',
            'owners' => 'owners',
            'docTypes' => 'doc_types',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset',
            'ifQueryParameters' => 'if_query_parameters',
            'matchType' => 'match_type',
            'scheduleState' => 'schedule_state',
            'isExact' => 'is_exact',
            'exactField' => 'exact_field'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  搜索空间范围: 默认不传参，在全部空间内搜索。 - 当前工作空间ID: 当前工作空间的ID
    * searchText  全局搜索关键字，输入至少两位字符。
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - SparkPython: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * nodeType  节点类型: （多选）节点类型列表。样例: node_type=com.cloud.datacraft.processactivity.ExecuteHiveJob 默认为全部。 - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs) - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs) - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL - com.cloud.datacraft.processactivity.ExecuteScript: Shell - com.cloud.datacraft.processactivity.ExecutePythonScript: Python - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine - com.cloud.datacraft.activity.DataMigration: DataMigration
    * newSaveOrCommit  最新修改: 样例: new_save_or_commit=save 默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * owners  责任人名称: （多选）人员列表或我的节点。样例: owners=dayu_wm 默认不过滤责任人。
    * docTypes  搜索范围: （多选）样例: doc_types=script 默认为全部。 - node: 开发作业 - script: 脚本
    * beginTime  开始时间，配合结束时间参数使用，默认没有时间范围。样例: begin_time=1746633600000
    * endTime  结束时间，配合开始时间参数使用，默认没有时间范围。样例: endTime=1746806399999
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * ifQueryParameters  是否搜索配置参数部分的内容: 样例: if_query_parameters=false 默认为false: 不搜索配置参数部分的内容 - true: 是 - false: 否
    * matchType  匹配方式: 样例: match_type=0 默认为0: 通用。 - 0: 通用 - 1: 模糊
    * scheduleState  调度状态: 仅支持作业查找场景，需配置new_save_or_commit参数为commit 默认为全部。 - running: 已调度 - stop: 未调度
    * isExact  是否精确搜索: 开启后配合exact_field参数使用。 默认为false: 非精确搜索 - true: 精确搜索 - false: 非精确搜索
    * exactField  精确查询的字段, 开启精确搜索时生效: - jobName: 作业名 - scriptName: 脚本名 - jobId: 作业ID - scriptId: 脚本ID
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'workspaceId' => 'setWorkspaceId',
            'searchText' => 'setSearchText',
            'jobType' => 'setJobType',
            'scriptType' => 'setScriptType',
            'nodeType' => 'setNodeType',
            'newSaveOrCommit' => 'setNewSaveOrCommit',
            'owners' => 'setOwners',
            'docTypes' => 'setDocTypes',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'ifQueryParameters' => 'setIfQueryParameters',
            'matchType' => 'setMatchType',
            'scheduleState' => 'setScheduleState',
            'isExact' => 'setIsExact',
            'exactField' => 'setExactField'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * workspaceId  搜索空间范围: 默认不传参，在全部空间内搜索。 - 当前工作空间ID: 当前工作空间的ID
    * searchText  全局搜索关键字，输入至少两位字符。
    * jobType  作业类型: （多选）样例: job_type=BATCH 默认为全部。 - BATCH: 批作业 - REAL_TIME: 流作业
    * scriptType  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - SparkPython: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    * nodeType  节点类型: （多选）节点类型列表。样例: node_type=com.cloud.datacraft.processactivity.ExecuteHiveJob 默认为全部。 - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs) - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs) - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL - com.cloud.datacraft.processactivity.ExecuteScript: Shell - com.cloud.datacraft.processactivity.ExecutePythonScript: Python - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine - com.cloud.datacraft.activity.DataMigration: DataMigration
    * newSaveOrCommit  最新修改: 样例: new_save_or_commit=save 默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    * owners  责任人名称: （多选）人员列表或我的节点。样例: owners=dayu_wm 默认不过滤责任人。
    * docTypes  搜索范围: （多选）样例: doc_types=script 默认为全部。 - node: 开发作业 - script: 脚本
    * beginTime  开始时间，配合结束时间参数使用，默认没有时间范围。样例: begin_time=1746633600000
    * endTime  结束时间，配合开始时间参数使用，默认没有时间范围。样例: endTime=1746806399999
    * limit  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    * offset  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    * ifQueryParameters  是否搜索配置参数部分的内容: 样例: if_query_parameters=false 默认为false: 不搜索配置参数部分的内容 - true: 是 - false: 否
    * matchType  匹配方式: 样例: match_type=0 默认为0: 通用。 - 0: 通用 - 1: 模糊
    * scheduleState  调度状态: 仅支持作业查找场景，需配置new_save_or_commit参数为commit 默认为全部。 - running: 已调度 - stop: 未调度
    * isExact  是否精确搜索: 开启后配合exact_field参数使用。 默认为false: 非精确搜索 - true: 精确搜索 - false: 非精确搜索
    * exactField  精确查询的字段, 开启精确搜索时生效: - jobName: 作业名 - scriptName: 脚本名 - jobId: 作业ID - scriptId: 脚本ID
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'workspaceId' => 'getWorkspaceId',
            'searchText' => 'getSearchText',
            'jobType' => 'getJobType',
            'scriptType' => 'getScriptType',
            'nodeType' => 'getNodeType',
            'newSaveOrCommit' => 'getNewSaveOrCommit',
            'owners' => 'getOwners',
            'docTypes' => 'getDocTypes',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'ifQueryParameters' => 'getIfQueryParameters',
            'matchType' => 'getMatchType',
            'scheduleState' => 'getScheduleState',
            'isExact' => 'getIsExact',
            'exactField' => 'getExactField'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['searchText'] = isset($data['searchText']) ? $data['searchText'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['scriptType'] = isset($data['scriptType']) ? $data['scriptType'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['newSaveOrCommit'] = isset($data['newSaveOrCommit']) ? $data['newSaveOrCommit'] : null;
        $this->container['owners'] = isset($data['owners']) ? $data['owners'] : null;
        $this->container['docTypes'] = isset($data['docTypes']) ? $data['docTypes'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['ifQueryParameters'] = isset($data['ifQueryParameters']) ? $data['ifQueryParameters'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['scheduleState'] = isset($data['scheduleState']) ? $data['scheduleState'] : null;
        $this->container['isExact'] = isset($data['isExact']) ? $data['isExact'] : null;
        $this->container['exactField'] = isset($data['exactField']) ? $data['exactField'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['workspace']) < 3)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['searchText']) && (mb_strlen($this->container['searchText']) > 128)) {
                $invalidProperties[] = "invalid value for 'searchText', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['searchText']) && (mb_strlen($this->container['searchText']) < 1)) {
                $invalidProperties[] = "invalid value for 'searchText', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) > 128)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scriptType']) && (mb_strlen($this->container['scriptType']) > 128)) {
                $invalidProperties[] = "invalid value for 'scriptType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scriptType']) && (mb_strlen($this->container['scriptType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nodeType']) && (mb_strlen($this->container['nodeType']) > 128)) {
                $invalidProperties[] = "invalid value for 'nodeType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['nodeType']) && (mb_strlen($this->container['nodeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['newSaveOrCommit']) && (mb_strlen($this->container['newSaveOrCommit']) > 128)) {
                $invalidProperties[] = "invalid value for 'newSaveOrCommit', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['newSaveOrCommit']) && (mb_strlen($this->container['newSaveOrCommit']) < 1)) {
                $invalidProperties[] = "invalid value for 'newSaveOrCommit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['owners']) && (mb_strlen($this->container['owners']) > 128)) {
                $invalidProperties[] = "invalid value for 'owners', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['owners']) && (mb_strlen($this->container['owners']) < 1)) {
                $invalidProperties[] = "invalid value for 'owners', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['docTypes']) && (mb_strlen($this->container['docTypes']) > 128)) {
                $invalidProperties[] = "invalid value for 'docTypes', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['docTypes']) && (mb_strlen($this->container['docTypes']) < 1)) {
                $invalidProperties[] = "invalid value for 'docTypes', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ifQueryParameters']) && (mb_strlen($this->container['ifQueryParameters']) > 128)) {
                $invalidProperties[] = "invalid value for 'ifQueryParameters', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ifQueryParameters']) && (mb_strlen($this->container['ifQueryParameters']) < 1)) {
                $invalidProperties[] = "invalid value for 'ifQueryParameters', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['matchType']) && ($this->container['matchType'] > 1)) {
                $invalidProperties[] = "invalid value for 'matchType', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['matchType']) && ($this->container['matchType'] < 0)) {
                $invalidProperties[] = "invalid value for 'matchType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduleState']) && (mb_strlen($this->container['scheduleState']) > 128)) {
                $invalidProperties[] = "invalid value for 'scheduleState', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scheduleState']) && (mb_strlen($this->container['scheduleState']) < 1)) {
                $invalidProperties[] = "invalid value for 'scheduleState', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isExact']) && (mb_strlen($this->container['isExact']) > 128)) {
                $invalidProperties[] = "invalid value for 'isExact', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['isExact']) && (mb_strlen($this->container['isExact']) < 1)) {
                $invalidProperties[] = "invalid value for 'isExact', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['exactField']) && (mb_strlen($this->container['exactField']) > 128)) {
                $invalidProperties[] = "invalid value for 'exactField', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['exactField']) && (mb_strlen($this->container['exactField']) < 1)) {
                $invalidProperties[] = "invalid value for 'exactField', the character length must be bigger than or equal to 1.";
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
    * Gets workspace
    *  工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace 工作空间ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets workspaceId
    *  搜索空间范围: 默认不传参，在全部空间内搜索。 - 当前工作空间ID: 当前工作空间的ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 搜索空间范围: 默认不传参，在全部空间内搜索。 - 当前工作空间ID: 当前工作空间的ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets searchText
    *  全局搜索关键字，输入至少两位字符。
    *
    * @return string|null
    */
    public function getSearchText()
    {
        return $this->container['searchText'];
    }

    /**
    * Sets searchText
    *
    * @param string|null $searchText 全局搜索关键字，输入至少两位字符。
    *
    * @return $this
    */
    public function setSearchText($searchText)
    {
        $this->container['searchText'] = $searchText;
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
    * Gets scriptType
    *  脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - SparkPython: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
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
    * @param string|null $scriptType 脚本类型: （多选）样例: script_type=HIVE,DLI。 默认为全部，不过滤任何类型脚本。 - HIVE: Hive SQL - [DLI: DLI SQL](tag:nohcs) - DWS: DWS SQL - SparkSQL: Spark SQL - SparkPython: Spark Python - FlinkSQL: Flink SQL - [RDS: RDS SQL](tag:nohcs) - PRESTO: Presto SQL - HETUENGINE: HeruEngine - ClickHouse: ClickHouse - IMPALA: Impala SQL - SHELL: Shell - PYTHON: Python
    *
    * @return $this
    */
    public function setScriptType($scriptType)
    {
        $this->container['scriptType'] = $scriptType;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型: （多选）节点类型列表。样例: node_type=com.cloud.datacraft.processactivity.ExecuteHiveJob 默认为全部。 - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs) - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs) - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL - com.cloud.datacraft.processactivity.ExecuteScript: Shell - com.cloud.datacraft.processactivity.ExecutePythonScript: Python - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine - com.cloud.datacraft.activity.DataMigration: DataMigration
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
    * @param string|null $nodeType 节点类型: （多选）节点类型列表。样例: node_type=com.cloud.datacraft.processactivity.ExecuteHiveJob 默认为全部。 - com.cloud.datacraft.processactivity.ExecuteHiveJob: MRS Hive SQL - com.cloud.datacraft.activity.ExecuteSparkSQL: MRS Spark SQL - com.cloud.datacraft.activity.MRSSparkPython: MRS Spark Python - com.cloud.datacraft.processactivity.ExecuteImpalaJob: MRS Impala SQL - [com.cloud.datacraft.activity.DLISQL: DLI SQL](tag:nohcs) - [com.cloud.datacraft.activity.DliFlinkJob: DLI Flink Job](tag:nohcs) - com.cloud.datacraft.processactivity.ExecuteDWSJob: DWS SQL - com.cloud.datacraft.activity.ExecuteQuery: RDS SQL - com.cloud.datacraft.activity.MRSPrestoSQL: MRS Presto SQL - com.cloud.datacraft.processactivity.ExecuteScript: Shell - com.cloud.datacraft.processactivity.ExecutePythonScript: Python - com.cloud.datacraft.processactivity.ExecuteClickHouseJob: ClickHouse - com.cloud.datacraft.processactivity.ExecuteHetuEngineJob: HetuEngine - com.cloud.datacraft.activity.DataMigration: DataMigration
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets newSaveOrCommit
    *  最新修改: 样例: new_save_or_commit=save 默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
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
    * @param string|null $newSaveOrCommit 最新修改: 样例: new_save_or_commit=save 默认为save: 最新保存 - save: 最新保存 - commit: 最新提交
    *
    * @return $this
    */
    public function setNewSaveOrCommit($newSaveOrCommit)
    {
        $this->container['newSaveOrCommit'] = $newSaveOrCommit;
        return $this;
    }

    /**
    * Gets owners
    *  责任人名称: （多选）人员列表或我的节点。样例: owners=dayu_wm 默认不过滤责任人。
    *
    * @return string|null
    */
    public function getOwners()
    {
        return $this->container['owners'];
    }

    /**
    * Sets owners
    *
    * @param string|null $owners 责任人名称: （多选）人员列表或我的节点。样例: owners=dayu_wm 默认不过滤责任人。
    *
    * @return $this
    */
    public function setOwners($owners)
    {
        $this->container['owners'] = $owners;
        return $this;
    }

    /**
    * Gets docTypes
    *  搜索范围: （多选）样例: doc_types=script 默认为全部。 - node: 开发作业 - script: 脚本
    *
    * @return string|null
    */
    public function getDocTypes()
    {
        return $this->container['docTypes'];
    }

    /**
    * Sets docTypes
    *
    * @param string|null $docTypes 搜索范围: （多选）样例: doc_types=script 默认为全部。 - node: 开发作业 - script: 脚本
    *
    * @return $this
    */
    public function setDocTypes($docTypes)
    {
        $this->container['docTypes'] = $docTypes;
        return $this;
    }

    /**
    * Gets beginTime
    *  开始时间，配合结束时间参数使用，默认没有时间范围。样例: begin_time=1746633600000
    *
    * @return int|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int|null $beginTime 开始时间，配合结束时间参数使用，默认没有时间范围。样例: begin_time=1746633600000
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
    *  结束时间，配合开始时间参数使用，默认没有时间范围。样例: endTime=1746806399999
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间，配合开始时间参数使用，默认没有时间范围。样例: endTime=1746806399999
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页返回结果，指定每页最大记录数，范围[1,100]。样例: limit=10 默认值: 10。
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
    *  分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页的起始页，取值范围大于等于0。样例: offset=0 默认值: 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets ifQueryParameters
    *  是否搜索配置参数部分的内容: 样例: if_query_parameters=false 默认为false: 不搜索配置参数部分的内容 - true: 是 - false: 否
    *
    * @return string|null
    */
    public function getIfQueryParameters()
    {
        return $this->container['ifQueryParameters'];
    }

    /**
    * Sets ifQueryParameters
    *
    * @param string|null $ifQueryParameters 是否搜索配置参数部分的内容: 样例: if_query_parameters=false 默认为false: 不搜索配置参数部分的内容 - true: 是 - false: 否
    *
    * @return $this
    */
    public function setIfQueryParameters($ifQueryParameters)
    {
        $this->container['ifQueryParameters'] = $ifQueryParameters;
        return $this;
    }

    /**
    * Gets matchType
    *  匹配方式: 样例: match_type=0 默认为0: 通用。 - 0: 通用 - 1: 模糊
    *
    * @return int|null
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param int|null $matchType 匹配方式: 样例: match_type=0 默认为0: 通用。 - 0: 通用 - 1: 模糊
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets scheduleState
    *  调度状态: 仅支持作业查找场景，需配置new_save_or_commit参数为commit 默认为全部。 - running: 已调度 - stop: 未调度
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
    * @param string|null $scheduleState 调度状态: 仅支持作业查找场景，需配置new_save_or_commit参数为commit 默认为全部。 - running: 已调度 - stop: 未调度
    *
    * @return $this
    */
    public function setScheduleState($scheduleState)
    {
        $this->container['scheduleState'] = $scheduleState;
        return $this;
    }

    /**
    * Gets isExact
    *  是否精确搜索: 开启后配合exact_field参数使用。 默认为false: 非精确搜索 - true: 精确搜索 - false: 非精确搜索
    *
    * @return string|null
    */
    public function getIsExact()
    {
        return $this->container['isExact'];
    }

    /**
    * Sets isExact
    *
    * @param string|null $isExact 是否精确搜索: 开启后配合exact_field参数使用。 默认为false: 非精确搜索 - true: 精确搜索 - false: 非精确搜索
    *
    * @return $this
    */
    public function setIsExact($isExact)
    {
        $this->container['isExact'] = $isExact;
        return $this;
    }

    /**
    * Gets exactField
    *  精确查询的字段, 开启精确搜索时生效: - jobName: 作业名 - scriptName: 脚本名 - jobId: 作业ID - scriptId: 脚本ID
    *
    * @return string|null
    */
    public function getExactField()
    {
        return $this->container['exactField'];
    }

    /**
    * Sets exactField
    *
    * @param string|null $exactField 精确查询的字段, 开启精确搜索时生效: - jobName: 作业名 - scriptName: 脚本名 - jobId: 作业ID - scriptId: 脚本ID
    *
    * @return $this
    */
    public function setExactField($exactField)
    {
        $this->container['exactField'] = $exactField;
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

