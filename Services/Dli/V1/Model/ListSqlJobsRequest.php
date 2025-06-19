<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentPage  参数解释:  当前页码，默认为第一页 示例: 55 约束限制:  无 取值范围: 大于1的整数 默认取值: 1
    * dbName  参数解释:  数据库名称 示例: UQuery 约束限制:  长度小于等于16 取值范围: 无 默认取值: 无
    * end  参数解释:  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒 示例: 156789546456 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * engineType  参数解释:  引擎类型。支持配置spark引擎或hetuEngine引擎 示例: spark 约束限制:  无 取值范围: spark、hetuEngine 默认取值: 无
    * jobStatus  参数解释:  指定查询的作业状态 示例: FINISHED 约束限制:  长度小于等于16 取值范围: LAUNCHING RUNNING FAILED CANCELLED COMPUTED SUSPENDED ACTIVE DELETED CREATING FINISHED SCALING 默认取值: 无
    * jobId  参数解释:  作业id 示例: bac76d9b-2891-4c50-a920-b98d8634fd0f 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * order  参数解释:  指定作业排序方式 示例: duration_desc 约束限制:  无 取值范围: start_time_desc（作业提交时间降序） start_time_asc（作业提交时间升序） duration_desc（作业运行时长降序） duration_asc（作业运行时长升序） 默认取值: start_time_desc
    * owner  参数解释:  提交作业的用户名称 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * pageSize  参数解释:  每页显示的最大作业个数 示例: 5 约束限制:  无 取值范围: [1, 100] 默认取值: 50
    * queueName  参数解释:  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业 示例: q1 约束限制:  匹配正则表达式^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$且长度在[1, 128]范围内的字符串 取值范围: 无 默认取值: 无
    * sqlPattern  参数解释:  指定sql片段作为作业过滤条件，不区分大小写 示例: .*? 约束限制:  长度在[0, 1024]范围内的字符串 取值范围: 无 默认取值: 无
    * start  参数解释:  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒 示例: 156456784655 约束限制:  无 取值范围: 大于等于1的整数 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: CS_JOB 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值 示例: key=value 约束限制:  格式为“key=value”的字符串 取值范围: 无 默认取值: 无
    * jobTypes  参数解释:  指定查询的作业类型列表，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentPage' => 'int',
            'dbName' => 'string',
            'end' => 'int',
            'engineType' => 'string',
            'jobStatus' => 'string',
            'jobId' => 'string',
            'jobType' => 'string',
            'order' => 'string',
            'owner' => 'string',
            'pageSize' => 'int',
            'queueName' => 'string',
            'sqlPattern' => 'string',
            'start' => 'int',
            'tableName' => 'string',
            'tags' => 'string',
            'jobTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentPage  参数解释:  当前页码，默认为第一页 示例: 55 约束限制:  无 取值范围: 大于1的整数 默认取值: 1
    * dbName  参数解释:  数据库名称 示例: UQuery 约束限制:  长度小于等于16 取值范围: 无 默认取值: 无
    * end  参数解释:  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒 示例: 156789546456 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * engineType  参数解释:  引擎类型。支持配置spark引擎或hetuEngine引擎 示例: spark 约束限制:  无 取值范围: spark、hetuEngine 默认取值: 无
    * jobStatus  参数解释:  指定查询的作业状态 示例: FINISHED 约束限制:  长度小于等于16 取值范围: LAUNCHING RUNNING FAILED CANCELLED COMPUTED SUSPENDED ACTIVE DELETED CREATING FINISHED SCALING 默认取值: 无
    * jobId  参数解释:  作业id 示例: bac76d9b-2891-4c50-a920-b98d8634fd0f 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * order  参数解释:  指定作业排序方式 示例: duration_desc 约束限制:  无 取值范围: start_time_desc（作业提交时间降序） start_time_asc（作业提交时间升序） duration_desc（作业运行时长降序） duration_asc（作业运行时长升序） 默认取值: start_time_desc
    * owner  参数解释:  提交作业的用户名称 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * pageSize  参数解释:  每页显示的最大作业个数 示例: 5 约束限制:  无 取值范围: [1, 100] 默认取值: 50
    * queueName  参数解释:  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业 示例: q1 约束限制:  匹配正则表达式^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$且长度在[1, 128]范围内的字符串 取值范围: 无 默认取值: 无
    * sqlPattern  参数解释:  指定sql片段作为作业过滤条件，不区分大小写 示例: .*? 约束限制:  长度在[0, 1024]范围内的字符串 取值范围: 无 默认取值: 无
    * start  参数解释:  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒 示例: 156456784655 约束限制:  无 取值范围: 大于等于1的整数 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: CS_JOB 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值 示例: key=value 约束限制:  格式为“key=value”的字符串 取值范围: 无 默认取值: 无
    * jobTypes  参数解释:  指定查询的作业类型列表，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentPage' => 'int32',
        'dbName' => null,
        'end' => 'int64',
        'engineType' => null,
        'jobStatus' => null,
        'jobId' => null,
        'jobType' => null,
        'order' => null,
        'owner' => null,
        'pageSize' => 'int32',
        'queueName' => null,
        'sqlPattern' => null,
        'start' => 'int64',
        'tableName' => null,
        'tags' => null,
        'jobTypes' => null
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
    * currentPage  参数解释:  当前页码，默认为第一页 示例: 55 约束限制:  无 取值范围: 大于1的整数 默认取值: 1
    * dbName  参数解释:  数据库名称 示例: UQuery 约束限制:  长度小于等于16 取值范围: 无 默认取值: 无
    * end  参数解释:  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒 示例: 156789546456 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * engineType  参数解释:  引擎类型。支持配置spark引擎或hetuEngine引擎 示例: spark 约束限制:  无 取值范围: spark、hetuEngine 默认取值: 无
    * jobStatus  参数解释:  指定查询的作业状态 示例: FINISHED 约束限制:  长度小于等于16 取值范围: LAUNCHING RUNNING FAILED CANCELLED COMPUTED SUSPENDED ACTIVE DELETED CREATING FINISHED SCALING 默认取值: 无
    * jobId  参数解释:  作业id 示例: bac76d9b-2891-4c50-a920-b98d8634fd0f 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * order  参数解释:  指定作业排序方式 示例: duration_desc 约束限制:  无 取值范围: start_time_desc（作业提交时间降序） start_time_asc（作业提交时间升序） duration_desc（作业运行时长降序） duration_asc（作业运行时长升序） 默认取值: start_time_desc
    * owner  参数解释:  提交作业的用户名称 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * pageSize  参数解释:  每页显示的最大作业个数 示例: 5 约束限制:  无 取值范围: [1, 100] 默认取值: 50
    * queueName  参数解释:  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业 示例: q1 约束限制:  匹配正则表达式^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$且长度在[1, 128]范围内的字符串 取值范围: 无 默认取值: 无
    * sqlPattern  参数解释:  指定sql片段作为作业过滤条件，不区分大小写 示例: .*? 约束限制:  长度在[0, 1024]范围内的字符串 取值范围: 无 默认取值: 无
    * start  参数解释:  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒 示例: 156456784655 约束限制:  无 取值范围: 大于等于1的整数 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: CS_JOB 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值 示例: key=value 约束限制:  格式为“key=value”的字符串 取值范围: 无 默认取值: 无
    * jobTypes  参数解释:  指定查询的作业类型列表，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentPage' => 'current-page',
            'dbName' => 'db_name',
            'end' => 'end',
            'engineType' => 'engine-type',
            'jobStatus' => 'job-status',
            'jobId' => 'job-id',
            'jobType' => 'job-type',
            'order' => 'order',
            'owner' => 'owner',
            'pageSize' => 'page-size',
            'queueName' => 'queue_name',
            'sqlPattern' => 'sql_pattern',
            'start' => 'start',
            'tableName' => 'table_name',
            'tags' => 'tags',
            'jobTypes' => 'job_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentPage  参数解释:  当前页码，默认为第一页 示例: 55 约束限制:  无 取值范围: 大于1的整数 默认取值: 1
    * dbName  参数解释:  数据库名称 示例: UQuery 约束限制:  长度小于等于16 取值范围: 无 默认取值: 无
    * end  参数解释:  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒 示例: 156789546456 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * engineType  参数解释:  引擎类型。支持配置spark引擎或hetuEngine引擎 示例: spark 约束限制:  无 取值范围: spark、hetuEngine 默认取值: 无
    * jobStatus  参数解释:  指定查询的作业状态 示例: FINISHED 约束限制:  长度小于等于16 取值范围: LAUNCHING RUNNING FAILED CANCELLED COMPUTED SUSPENDED ACTIVE DELETED CREATING FINISHED SCALING 默认取值: 无
    * jobId  参数解释:  作业id 示例: bac76d9b-2891-4c50-a920-b98d8634fd0f 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * order  参数解释:  指定作业排序方式 示例: duration_desc 约束限制:  无 取值范围: start_time_desc（作业提交时间降序） start_time_asc（作业提交时间升序） duration_desc（作业运行时长降序） duration_asc（作业运行时长升序） 默认取值: start_time_desc
    * owner  参数解释:  提交作业的用户名称 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * pageSize  参数解释:  每页显示的最大作业个数 示例: 5 约束限制:  无 取值范围: [1, 100] 默认取值: 50
    * queueName  参数解释:  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业 示例: q1 约束限制:  匹配正则表达式^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$且长度在[1, 128]范围内的字符串 取值范围: 无 默认取值: 无
    * sqlPattern  参数解释:  指定sql片段作为作业过滤条件，不区分大小写 示例: .*? 约束限制:  长度在[0, 1024]范围内的字符串 取值范围: 无 默认取值: 无
    * start  参数解释:  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒 示例: 156456784655 约束限制:  无 取值范围: 大于等于1的整数 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: CS_JOB 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值 示例: key=value 约束限制:  格式为“key=value”的字符串 取值范围: 无 默认取值: 无
    * jobTypes  参数解释:  指定查询的作业类型列表，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @var string[]
    */
    protected static $setters = [
            'currentPage' => 'setCurrentPage',
            'dbName' => 'setDbName',
            'end' => 'setEnd',
            'engineType' => 'setEngineType',
            'jobStatus' => 'setJobStatus',
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'order' => 'setOrder',
            'owner' => 'setOwner',
            'pageSize' => 'setPageSize',
            'queueName' => 'setQueueName',
            'sqlPattern' => 'setSqlPattern',
            'start' => 'setStart',
            'tableName' => 'setTableName',
            'tags' => 'setTags',
            'jobTypes' => 'setJobTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentPage  参数解释:  当前页码，默认为第一页 示例: 55 约束限制:  无 取值范围: 大于1的整数 默认取值: 1
    * dbName  参数解释:  数据库名称 示例: UQuery 约束限制:  长度小于等于16 取值范围: 无 默认取值: 无
    * end  参数解释:  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒 示例: 156789546456 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * engineType  参数解释:  引擎类型。支持配置spark引擎或hetuEngine引擎 示例: spark 约束限制:  无 取值范围: spark、hetuEngine 默认取值: 无
    * jobStatus  参数解释:  指定查询的作业状态 示例: FINISHED 约束限制:  长度小于等于16 取值范围: LAUNCHING RUNNING FAILED CANCELLED COMPUTED SUSPENDED ACTIVE DELETED CREATING FINISHED SCALING 默认取值: 无
    * jobId  参数解释:  作业id 示例: bac76d9b-2891-4c50-a920-b98d8634fd0f 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * order  参数解释:  指定作业排序方式 示例: duration_desc 约束限制:  无 取值范围: start_time_desc（作业提交时间降序） start_time_asc（作业提交时间升序） duration_desc（作业运行时长降序） duration_asc（作业运行时长升序） 默认取值: start_time_desc
    * owner  参数解释:  提交作业的用户名称 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * pageSize  参数解释:  每页显示的最大作业个数 示例: 5 约束限制:  无 取值范围: [1, 100] 默认取值: 50
    * queueName  参数解释:  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业 示例: q1 约束限制:  匹配正则表达式^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$且长度在[1, 128]范围内的字符串 取值范围: 无 默认取值: 无
    * sqlPattern  参数解释:  指定sql片段作为作业过滤条件，不区分大小写 示例: .*? 约束限制:  长度在[0, 1024]范围内的字符串 取值范围: 无 默认取值: 无
    * start  参数解释:  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒 示例: 156456784655 约束限制:  无 取值范围: 大于等于1的整数 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: CS_JOB 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值 示例: key=value 约束限制:  格式为“key=value”的字符串 取值范围: 无 默认取值: 无
    * jobTypes  参数解释:  指定查询的作业类型列表，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @var string[]
    */
    protected static $getters = [
            'currentPage' => 'getCurrentPage',
            'dbName' => 'getDbName',
            'end' => 'getEnd',
            'engineType' => 'getEngineType',
            'jobStatus' => 'getJobStatus',
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'order' => 'getOrder',
            'owner' => 'getOwner',
            'pageSize' => 'getPageSize',
            'queueName' => 'getQueueName',
            'sqlPattern' => 'getSqlPattern',
            'start' => 'getStart',
            'tableName' => 'getTableName',
            'tags' => 'getTags',
            'jobTypes' => 'getJobTypes'
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
    const ENGINE_TYPE_SPARK = 'spark';
    const ENGINE_TYPE_HETU_ENGINE = 'hetuEngine';
    const JOB_STATUS_LAUNCHING = 'LAUNCHING';
    const JOB_STATUS_RUNNING = 'RUNNING';
    const JOB_STATUS_FAILED = 'FAILED';
    const JOB_STATUS_CANCELLED = 'CANCELLED';
    const JOB_STATUS_COMPUTED = 'COMPUTED';
    const JOB_STATUS_SUSPENDED = 'SUSPENDED';
    const JOB_STATUS_ACTIVE = 'ACTIVE';
    const JOB_STATUS_DELETED = 'DELETED';
    const JOB_STATUS_CREATING = 'CREATING';
    const JOB_STATUS_FINISHED = 'FINISHED';
    const JOB_STATUS_SCALING = 'SCALING';
    const JOB_TYPE_DDL = 'DDL';
    const JOB_TYPE_DCL = 'DCL';
    const JOB_TYPE_IMPORT = 'IMPORT';
    const JOB_TYPE_EXPORT = 'EXPORT';
    const JOB_TYPE_QUERY = 'QUERY';
    const JOB_TYPE_INSERT = 'INSERT';
    const JOB_TYPE_DATA_MIGRATION = 'DATA_MIGRATION';
    const JOB_TYPE_UPDATE = 'UPDATE';
    const JOB_TYPE_DELETE = 'DELETE';
    const JOB_TYPE_RESTART_QUEUE = 'RESTART_QUEUE';
    const JOB_TYPE_SCALE_QUEUE = 'SCALE_QUEUE';
    const JOB_TYPE_ALL = 'ALL';
    const ORDER_DURATION_DESC = 'duration_desc';
    const ORDER_DURATION_ASC = 'duration_asc';
    const ORDER_START_TIME_DESC = 'start_time_desc';
    const ORDER_START_TIME_ASC = 'start_time_asc';
    const JOB_TYPES_DDL = 'DDL';
    const JOB_TYPES_DCL = 'DCL';
    const JOB_TYPES_IMPORT = 'IMPORT';
    const JOB_TYPES_EXPORT = 'EXPORT';
    const JOB_TYPES_QUERY = 'QUERY';
    const JOB_TYPES_INSERT = 'INSERT';
    const JOB_TYPES_UPDATE = 'UPDATE';
    const JOB_TYPES_DELETE = 'DELETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_SPARK,
            self::ENGINE_TYPE_HETU_ENGINE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobStatusAllowableValues()
    {
        return [
            self::JOB_STATUS_LAUNCHING,
            self::JOB_STATUS_RUNNING,
            self::JOB_STATUS_FAILED,
            self::JOB_STATUS_CANCELLED,
            self::JOB_STATUS_COMPUTED,
            self::JOB_STATUS_SUSPENDED,
            self::JOB_STATUS_ACTIVE,
            self::JOB_STATUS_DELETED,
            self::JOB_STATUS_CREATING,
            self::JOB_STATUS_FINISHED,
            self::JOB_STATUS_SCALING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_DDL,
            self::JOB_TYPE_DCL,
            self::JOB_TYPE_IMPORT,
            self::JOB_TYPE_EXPORT,
            self::JOB_TYPE_QUERY,
            self::JOB_TYPE_INSERT,
            self::JOB_TYPE_DATA_MIGRATION,
            self::JOB_TYPE_UPDATE,
            self::JOB_TYPE_DELETE,
            self::JOB_TYPE_RESTART_QUEUE,
            self::JOB_TYPE_SCALE_QUEUE,
            self::JOB_TYPE_ALL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_DURATION_DESC,
            self::ORDER_DURATION_ASC,
            self::ORDER_START_TIME_DESC,
            self::ORDER_START_TIME_ASC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypesAllowableValues()
    {
        return [
            self::JOB_TYPES_DDL,
            self::JOB_TYPES_DCL,
            self::JOB_TYPES_IMPORT,
            self::JOB_TYPES_EXPORT,
            self::JOB_TYPES_QUERY,
            self::JOB_TYPES_INSERT,
            self::JOB_TYPES_UPDATE,
            self::JOB_TYPES_DELETE,
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
        $this->container['currentPage'] = isset($data['currentPage']) ? $data['currentPage'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['jobStatus'] = isset($data['jobStatus']) ? $data['jobStatus'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['sqlPattern'] = isset($data['sqlPattern']) ? $data['sqlPattern'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['jobTypes'] = isset($data['jobTypes']) ? $data['jobTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['currentPage']) && ($this->container['currentPage'] < 1)) {
                $invalidProperties[] = "invalid value for 'currentPage', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dbName']) && (mb_strlen($this->container['dbName']) > 16)) {
                $invalidProperties[] = "invalid value for 'dbName', the character length must be smaller than or equal to 16.";
            }
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getJobStatusAllowableValues();
                if (!is_null($this->container['jobStatus']) && !in_array($this->container['jobStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['jobStatus']) && (mb_strlen($this->container['jobStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'jobStatus', the character length must be smaller than or equal to 16.";
            }
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['jobType']) && (mb_strlen($this->container['jobType']) > 16)) {
                $invalidProperties[] = "invalid value for 'jobType', the character length must be smaller than or equal to 16.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) > 128)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) < 1)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['queueName']) && !preg_match("/^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/", $this->container['queueName'])) {
                $invalidProperties[] = "invalid value for 'queueName', must be conform to the pattern /^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$/.";
            }
            if (!is_null($this->container['sqlPattern']) && (mb_strlen($this->container['sqlPattern']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sqlPattern', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['start']) && ($this->container['start'] < 1)) {
                $invalidProperties[] = "invalid value for 'start', must be bigger than or equal to 1.";
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
    * Gets currentPage
    *  参数解释:  当前页码，默认为第一页 示例: 55 约束限制:  无 取值范围: 大于1的整数 默认取值: 1
    *
    * @return int|null
    */
    public function getCurrentPage()
    {
        return $this->container['currentPage'];
    }

    /**
    * Sets currentPage
    *
    * @param int|null $currentPage 参数解释:  当前页码，默认为第一页 示例: 55 约束限制:  无 取值范围: 大于1的整数 默认取值: 1
    *
    * @return $this
    */
    public function setCurrentPage($currentPage)
    {
        $this->container['currentPage'] = $currentPage;
        return $this;
    }

    /**
    * Gets dbName
    *  参数解释:  数据库名称 示例: UQuery 约束限制:  长度小于等于16 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 参数解释:  数据库名称 示例: UQuery 约束限制:  长度小于等于16 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets end
    *  参数解释:  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒 示例: 156789546456 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param int|null $end 参数解释:  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒 示例: 156789546456 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
        return $this;
    }

    /**
    * Gets engineType
    *  参数解释:  引擎类型。支持配置spark引擎或hetuEngine引擎 示例: spark 约束限制:  无 取值范围: spark、hetuEngine 默认取值: 无
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 参数解释:  引擎类型。支持配置spark引擎或hetuEngine引擎 示例: spark 约束限制:  无 取值范围: spark、hetuEngine 默认取值: 无
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets jobStatus
    *  参数解释:  指定查询的作业状态 示例: FINISHED 约束限制:  长度小于等于16 取值范围: LAUNCHING RUNNING FAILED CANCELLED COMPUTED SUSPENDED ACTIVE DELETED CREATING FINISHED SCALING 默认取值: 无
    *
    * @return string|null
    */
    public function getJobStatus()
    {
        return $this->container['jobStatus'];
    }

    /**
    * Sets jobStatus
    *
    * @param string|null $jobStatus 参数解释:  指定查询的作业状态 示例: FINISHED 约束限制:  长度小于等于16 取值范围: LAUNCHING RUNNING FAILED CANCELLED COMPUTED SUSPENDED ACTIVE DELETED CREATING FINISHED SCALING 默认取值: 无
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
        return $this;
    }

    /**
    * Gets jobId
    *  参数解释:  作业id 示例: bac76d9b-2891-4c50-a920-b98d8634fd0f 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $jobId 参数解释:  作业id 示例: bac76d9b-2891-4c50-a920-b98d8634fd0f 约束限制:  无 取值范围: 无 默认取值: 无
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
    *  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
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
    * @param string|null $jobType 参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets order
    *  参数解释:  指定作业排序方式 示例: duration_desc 约束限制:  无 取值范围: start_time_desc（作业提交时间降序） start_time_asc（作业提交时间升序） duration_desc（作业运行时长降序） duration_asc（作业运行时长升序） 默认取值: start_time_desc
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 参数解释:  指定作业排序方式 示例: duration_desc 约束限制:  无 取值范围: start_time_desc（作业提交时间降序） start_time_asc（作业提交时间升序） duration_desc（作业运行时长降序） duration_asc（作业运行时长升序） 默认取值: start_time_desc
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets owner
    *  参数解释:  提交作业的用户名称 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $owner 参数解释:  提交作业的用户名称 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets pageSize
    *  参数解释:  每页显示的最大作业个数 示例: 5 约束限制:  无 取值范围: [1, 100] 默认取值: 50
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 参数解释:  每页显示的最大作业个数 示例: 5 约束限制:  无 取值范围: [1, 100] 默认取值: 50
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets queueName
    *  参数解释:  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业 示例: q1 约束限制:  匹配正则表达式^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$且长度在[1, 128]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 参数解释:  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业 示例: q1 约束限制:  匹配正则表达式^(?!_)(?![0-9]+$)[A-Za-z0-9_]*$且长度在[1, 128]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets sqlPattern
    *  参数解释:  指定sql片段作为作业过滤条件，不区分大小写 示例: .*? 约束限制:  长度在[0, 1024]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getSqlPattern()
    {
        return $this->container['sqlPattern'];
    }

    /**
    * Sets sqlPattern
    *
    * @param string|null $sqlPattern 参数解释:  指定sql片段作为作业过滤条件，不区分大小写 示例: .*? 约束限制:  长度在[0, 1024]范围内的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSqlPattern($sqlPattern)
    {
        $this->container['sqlPattern'] = $sqlPattern;
        return $this;
    }

    /**
    * Gets start
    *  参数解释:  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒 示例: 156456784655 约束限制:  无 取值范围: 大于等于1的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 参数解释:  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒 示例: 156456784655 约束限制:  无 取值范围: 大于等于1的整数 默认取值: 无
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets tableName
    *  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: CS_JOB 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: CS_JOB 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets tags
    *  参数解释:  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值 示例: key=value 约束限制:  格式为“key=value”的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 参数解释:  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值 示例: key=value 约束限制:  格式为“key=value”的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets jobTypes
    *  参数解释:  指定查询的作业类型列表，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @return string[]|null
    */
    public function getJobTypes()
    {
        return $this->container['jobTypes'];
    }

    /**
    * Sets jobTypes
    *
    * @param string[]|null $jobTypes 参数解释:  指定查询的作业类型列表，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @return $this
    */
    public function setJobTypes($jobTypes)
    {
        $this->container['jobTypes'] = $jobTypes;
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

