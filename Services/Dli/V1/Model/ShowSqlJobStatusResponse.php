<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlJobStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlJobStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 任意字符串 默认取值: 无
    * jobType  参数解释:  作业类型 示例: 指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  参数解释:  作业提交的队列 示例: dli_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释:  提交作业的用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  参数解释:  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 1000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  参数解释:  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交） RUNNING（运行中） FINISH（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  参数解释:  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  参数解释:  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  参数解释:  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  参数解释:  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  参数解释:  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * detail  参数解释:  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * userConf  参数解释:  SQL配置参数信息Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * resultPath  参数解释:  查询结果OBS路径 示例: obs://bucketName/jobs/result/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * executionDetailsPath  参数解释:  查询作业执行计划OBS路径 示例: obs://bucketName/jobs/execution_details/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * resultFormat  参数解释:  查询结果格式 示例: csv 约束限制:  无 取值范围: csv 默认取值: 无
    * statement  参数解释:  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  符合SQL格式 取值范围: 无 默认取值: 无
    * isSuccess  参数解释:  执行请求是否成功。true表示请求执行成功 示例: true 约束限制:  无 取值范围: true、false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: success 约束限制:  无 取值范围: 无 默认取值: 无
    * jobMode  参数解释:  作业执行方式 示例: async 约束限制:  无 取值范围: async（同步） sync（异步） 默认取值: 无
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'jobType' => 'string',
            'queueName' => 'string',
            'owner' => 'string',
            'startTime' => 'int',
            'duration' => 'int',
            'status' => 'string',
            'inputRowCount' => 'int',
            'badRowCount' => 'int',
            'inputSize' => 'int',
            'resultCount' => 'int',
            'databaseName' => 'string',
            'tableName' => 'string',
            'detail' => 'string',
            'userConf' => 'string',
            'resultPath' => 'string',
            'executionDetailsPath' => 'string',
            'resultFormat' => 'string',
            'statement' => 'string',
            'isSuccess' => 'bool',
            'message' => 'string',
            'jobMode' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 任意字符串 默认取值: 无
    * jobType  参数解释:  作业类型 示例: 指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  参数解释:  作业提交的队列 示例: dli_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释:  提交作业的用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  参数解释:  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 1000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  参数解释:  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交） RUNNING（运行中） FINISH（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  参数解释:  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  参数解释:  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  参数解释:  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  参数解释:  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  参数解释:  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * detail  参数解释:  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * userConf  参数解释:  SQL配置参数信息Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * resultPath  参数解释:  查询结果OBS路径 示例: obs://bucketName/jobs/result/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * executionDetailsPath  参数解释:  查询作业执行计划OBS路径 示例: obs://bucketName/jobs/execution_details/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * resultFormat  参数解释:  查询结果格式 示例: csv 约束限制:  无 取值范围: csv 默认取值: 无
    * statement  参数解释:  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  符合SQL格式 取值范围: 无 默认取值: 无
    * isSuccess  参数解释:  执行请求是否成功。true表示请求执行成功 示例: true 约束限制:  无 取值范围: true、false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: success 约束限制:  无 取值范围: 无 默认取值: 无
    * jobMode  参数解释:  作业执行方式 示例: async 约束限制:  无 取值范围: async（同步） sync（异步） 默认取值: 无
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'jobType' => null,
        'queueName' => null,
        'owner' => null,
        'startTime' => 'int64',
        'duration' => 'int64',
        'status' => null,
        'inputRowCount' => 'int64',
        'badRowCount' => 'int64',
        'inputSize' => 'int64',
        'resultCount' => 'int32',
        'databaseName' => null,
        'tableName' => null,
        'detail' => null,
        'userConf' => null,
        'resultPath' => null,
        'executionDetailsPath' => null,
        'resultFormat' => null,
        'statement' => null,
        'isSuccess' => null,
        'message' => null,
        'jobMode' => null,
        'tags' => null
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
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 任意字符串 默认取值: 无
    * jobType  参数解释:  作业类型 示例: 指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  参数解释:  作业提交的队列 示例: dli_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释:  提交作业的用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  参数解释:  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 1000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  参数解释:  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交） RUNNING（运行中） FINISH（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  参数解释:  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  参数解释:  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  参数解释:  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  参数解释:  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  参数解释:  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * detail  参数解释:  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * userConf  参数解释:  SQL配置参数信息Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * resultPath  参数解释:  查询结果OBS路径 示例: obs://bucketName/jobs/result/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * executionDetailsPath  参数解释:  查询作业执行计划OBS路径 示例: obs://bucketName/jobs/execution_details/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * resultFormat  参数解释:  查询结果格式 示例: csv 约束限制:  无 取值范围: csv 默认取值: 无
    * statement  参数解释:  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  符合SQL格式 取值范围: 无 默认取值: 无
    * isSuccess  参数解释:  执行请求是否成功。true表示请求执行成功 示例: true 约束限制:  无 取值范围: true、false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: success 约束限制:  无 取值范围: 无 默认取值: 无
    * jobMode  参数解释:  作业执行方式 示例: async 约束限制:  无 取值范围: async（同步） sync（异步） 默认取值: 无
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'queueName' => 'queue_name',
            'owner' => 'owner',
            'startTime' => 'start_time',
            'duration' => 'duration',
            'status' => 'status',
            'inputRowCount' => 'input_row_count',
            'badRowCount' => 'bad_row_count',
            'inputSize' => 'input_size',
            'resultCount' => 'result_count',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'detail' => 'detail',
            'userConf' => 'user_conf',
            'resultPath' => 'result_path',
            'executionDetailsPath' => 'execution_details_path',
            'resultFormat' => 'result_format',
            'statement' => 'statement',
            'isSuccess' => 'is_success',
            'message' => 'message',
            'jobMode' => 'job_mode',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 任意字符串 默认取值: 无
    * jobType  参数解释:  作业类型 示例: 指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  参数解释:  作业提交的队列 示例: dli_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释:  提交作业的用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  参数解释:  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 1000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  参数解释:  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交） RUNNING（运行中） FINISH（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  参数解释:  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  参数解释:  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  参数解释:  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  参数解释:  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  参数解释:  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * detail  参数解释:  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * userConf  参数解释:  SQL配置参数信息Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * resultPath  参数解释:  查询结果OBS路径 示例: obs://bucketName/jobs/result/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * executionDetailsPath  参数解释:  查询作业执行计划OBS路径 示例: obs://bucketName/jobs/execution_details/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * resultFormat  参数解释:  查询结果格式 示例: csv 约束限制:  无 取值范围: csv 默认取值: 无
    * statement  参数解释:  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  符合SQL格式 取值范围: 无 默认取值: 无
    * isSuccess  参数解释:  执行请求是否成功。true表示请求执行成功 示例: true 约束限制:  无 取值范围: true、false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: success 约束限制:  无 取值范围: 无 默认取值: 无
    * jobMode  参数解释:  作业执行方式 示例: async 约束限制:  无 取值范围: async（同步） sync（异步） 默认取值: 无
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'queueName' => 'setQueueName',
            'owner' => 'setOwner',
            'startTime' => 'setStartTime',
            'duration' => 'setDuration',
            'status' => 'setStatus',
            'inputRowCount' => 'setInputRowCount',
            'badRowCount' => 'setBadRowCount',
            'inputSize' => 'setInputSize',
            'resultCount' => 'setResultCount',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'detail' => 'setDetail',
            'userConf' => 'setUserConf',
            'resultPath' => 'setResultPath',
            'executionDetailsPath' => 'setExecutionDetailsPath',
            'resultFormat' => 'setResultFormat',
            'statement' => 'setStatement',
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'jobMode' => 'setJobMode',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 任意字符串 默认取值: 无
    * jobType  参数解释:  作业类型 示例: 指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  参数解释:  作业提交的队列 示例: dli_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释:  提交作业的用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  参数解释:  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  参数解释:  作业运行时长，单位毫秒 示例: 1000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  参数解释:  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交） RUNNING（运行中） FINISH（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  参数解释:  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  参数解释:  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  参数解释:  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  参数解释:  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  参数解释:  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * detail  参数解释:  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * userConf  参数解释:  SQL配置参数信息Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    * resultPath  参数解释:  查询结果OBS路径 示例: obs://bucketName/jobs/result/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * executionDetailsPath  参数解释:  查询作业执行计划OBS路径 示例: obs://bucketName/jobs/execution_details/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    * resultFormat  参数解释:  查询结果格式 示例: csv 约束限制:  无 取值范围: csv 默认取值: 无
    * statement  参数解释:  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  符合SQL格式 取值范围: 无 默认取值: 无
    * isSuccess  参数解释:  执行请求是否成功。true表示请求执行成功 示例: true 约束限制:  无 取值范围: true、false 默认取值: 无
    * message  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: success 约束限制:  无 取值范围: 无 默认取值: 无
    * jobMode  参数解释:  作业执行方式 示例: async 约束限制:  无 取值范围: async（同步） sync（异步） 默认取值: 无
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'queueName' => 'getQueueName',
            'owner' => 'getOwner',
            'startTime' => 'getStartTime',
            'duration' => 'getDuration',
            'status' => 'getStatus',
            'inputRowCount' => 'getInputRowCount',
            'badRowCount' => 'getBadRowCount',
            'inputSize' => 'getInputSize',
            'resultCount' => 'getResultCount',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'detail' => 'getDetail',
            'userConf' => 'getUserConf',
            'resultPath' => 'getResultPath',
            'executionDetailsPath' => 'getExecutionDetailsPath',
            'resultFormat' => 'getResultFormat',
            'statement' => 'getStatement',
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'jobMode' => 'getJobMode',
            'tags' => 'getTags'
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
    const STATUS_LAUNCHING = 'LAUNCHING';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_CANCELLED = 'CANCELLED';
    

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
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LAUNCHING,
            self::STATUS_RUNNING,
            self::STATUS_FINISHED,
            self::STATUS_FAILED,
            self::STATUS_CANCELLED,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['inputRowCount'] = isset($data['inputRowCount']) ? $data['inputRowCount'] : null;
        $this->container['badRowCount'] = isset($data['badRowCount']) ? $data['badRowCount'] : null;
        $this->container['inputSize'] = isset($data['inputSize']) ? $data['inputSize'] : null;
        $this->container['resultCount'] = isset($data['resultCount']) ? $data['resultCount'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['userConf'] = isset($data['userConf']) ? $data['userConf'] : null;
        $this->container['resultPath'] = isset($data['resultPath']) ? $data['resultPath'] : null;
        $this->container['executionDetailsPath'] = isset($data['executionDetailsPath']) ? $data['executionDetailsPath'] : null;
        $this->container['resultFormat'] = isset($data['resultFormat']) ? $data['resultFormat'] : null;
        $this->container['statement'] = isset($data['statement']) ? $data['statement'] : null;
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['jobMode'] = isset($data['jobMode']) ? $data['jobMode'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getJobTypeAllowableValues();
                if (!is_null($this->container['jobType']) && !in_array($this->container['jobType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets jobId
    *  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 任意字符串 默认取值: 无
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
    * @param string|null $jobId 参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 任意字符串 默认取值: 无
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
    *  参数解释:  作业类型 示例: 指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
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
    * @param string|null $jobType 参数解释:  作业类型 示例: 指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets queueName
    *  参数解释:  作业提交的队列 示例: dli_sql 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $queueName 参数解释:  作业提交的队列 示例: dli_sql 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets owner
    *  参数解释:  提交作业的用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $owner 参数解释:  提交作业的用户 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets startTime
    *  参数解释:  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 参数解释:  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets duration
    *  参数解释:  作业运行时长，单位毫秒 示例: 1000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 参数解释:  作业运行时长，单位毫秒 示例: 1000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets status
    *  参数解释:  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交） RUNNING（运行中） FINISH（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
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
    * @param string|null $status 参数解释:  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交） RUNNING（运行中） FINISH（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets inputRowCount
    *  参数解释:  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getInputRowCount()
    {
        return $this->container['inputRowCount'];
    }

    /**
    * Sets inputRowCount
    *
    * @param int|null $inputRowCount 参数解释:  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setInputRowCount($inputRowCount)
    {
        $this->container['inputRowCount'] = $inputRowCount;
        return $this;
    }

    /**
    * Gets badRowCount
    *  参数解释:  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getBadRowCount()
    {
        return $this->container['badRowCount'];
    }

    /**
    * Sets badRowCount
    *
    * @param int|null $badRowCount 参数解释:  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setBadRowCount($badRowCount)
    {
        $this->container['badRowCount'] = $badRowCount;
        return $this;
    }

    /**
    * Gets inputSize
    *  参数解释:  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getInputSize()
    {
        return $this->container['inputSize'];
    }

    /**
    * Sets inputSize
    *
    * @param int|null $inputSize 参数解释:  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setInputSize($inputSize)
    {
        $this->container['inputSize'] = $inputSize;
        return $this;
    }

    /**
    * Gets resultCount
    *  参数解释:  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getResultCount()
    {
        return $this->container['resultCount'];
    }

    /**
    * Sets resultCount
    *
    * @param int|null $resultCount 参数解释:  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setResultCount($resultCount)
    {
        $this->container['resultCount'] = $resultCount;
        return $this;
    }

    /**
    * Gets databaseName
    *  参数解释:  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 参数解释:  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableName
    *  参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $tableName 参数解释:  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets detail
    *  参数解释:  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 参数解释:  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets userConf
    *  参数解释:  SQL配置参数信息Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getUserConf()
    {
        return $this->container['userConf'];
    }

    /**
    * Sets userConf
    *
    * @param string|null $userConf 参数解释:  SQL配置参数信息Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合JSON格式 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setUserConf($userConf)
    {
        $this->container['userConf'] = $userConf;
        return $this;
    }

    /**
    * Gets resultPath
    *  参数解释:  查询结果OBS路径 示例: obs://bucketName/jobs/result/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getResultPath()
    {
        return $this->container['resultPath'];
    }

    /**
    * Sets resultPath
    *
    * @param string|null $resultPath 参数解释:  查询结果OBS路径 示例: obs://bucketName/jobs/result/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setResultPath($resultPath)
    {
        $this->container['resultPath'] = $resultPath;
        return $this;
    }

    /**
    * Gets executionDetailsPath
    *  参数解释:  查询作业执行计划OBS路径 示例: obs://bucketName/jobs/execution_details/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getExecutionDetailsPath()
    {
        return $this->container['executionDetailsPath'];
    }

    /**
    * Sets executionDetailsPath
    *
    * @param string|null $executionDetailsPath 参数解释:  查询作业执行计划OBS路径 示例: obs://bucketName/jobs/execution_details/011c99a26ae84a1bb963a75e7637d3fd/2023/11/10/229b23ad-5033-40ed-ad70-fda900f2f04e 约束限制:  符合OBS路径格式，obs://_* 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setExecutionDetailsPath($executionDetailsPath)
    {
        $this->container['executionDetailsPath'] = $executionDetailsPath;
        return $this;
    }

    /**
    * Gets resultFormat
    *  参数解释:  查询结果格式 示例: csv 约束限制:  无 取值范围: csv 默认取值: 无
    *
    * @return string|null
    */
    public function getResultFormat()
    {
        return $this->container['resultFormat'];
    }

    /**
    * Sets resultFormat
    *
    * @param string|null $resultFormat 参数解释:  查询结果格式 示例: csv 约束限制:  无 取值范围: csv 默认取值: 无
    *
    * @return $this
    */
    public function setResultFormat($resultFormat)
    {
        $this->container['resultFormat'] = $resultFormat;
        return $this;
    }

    /**
    * Gets statement
    *  参数解释:  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  符合SQL格式 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getStatement()
    {
        return $this->container['statement'];
    }

    /**
    * Sets statement
    *
    * @param string|null $statement 参数解释:  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  符合SQL格式 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setStatement($statement)
    {
        $this->container['statement'] = $statement;
        return $this;
    }

    /**
    * Gets isSuccess
    *  参数解释:  执行请求是否成功。true表示请求执行成功 示例: true 约束限制:  无 取值范围: true、false 默认取值: 无
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
    * @param bool|null $isSuccess 参数解释:  执行请求是否成功。true表示请求执行成功 示例: true 约束限制:  无 取值范围: true、false 默认取值: 无
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
    *  参数解释:  系统提示信息，执行成功时，信息可能为空 示例: success 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $message 参数解释:  系统提示信息，执行成功时，信息可能为空 示例: success 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets jobMode
    *  参数解释:  作业执行方式 示例: async 约束限制:  无 取值范围: async（同步） sync（异步） 默认取值: 无
    *
    * @return string|null
    */
    public function getJobMode()
    {
        return $this->container['jobMode'];
    }

    /**
    * Sets jobMode
    *
    * @param string|null $jobMode 参数解释:  作业执行方式 示例: async 约束限制:  无 取值范围: async（同步） sync（异步） 默认取值: 无
    *
    * @return $this
    */
    public function setJobMode($jobMode)
    {
        $this->container['jobMode'] = $jobMode;
        return $this;
    }

    /**
    * Gets tags
    *  作业标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 作业标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

