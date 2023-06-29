<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAndExecuteJobResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAndExecuteJobResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templated  作业执行对象是否由作业模板生成。
    * createdAt  作业创建时间，十位时间戳。
    * updatedAt  作业更新时间，十位时间戳。
    * id  作业ID。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业应用ID。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * inputId  数据输入ID。
    * outputId  数据输出ID。
    * startTime  作业执行开始时间，十位时间戳。
    * endTime  作业执行结束时间，十位时间戳。
    * clusterId  集群ID。
    * engineJobId  Oozie工作流ID。
    * returnCode  运行结果返回码。
    * isPublic  是否公开。 当前版本不支持该功能。
    * isProtected  是否受保护。 当前版本不支持该功能。
    * groupId  作业执行组ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。  - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。  - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（该接口当前不支持）  说明： 只有包含Spark和Hive组件的集群才能新增Spark和Hive类型的作业。
    * fileAction  文件操作类型，包括：  - export：从HDFS导出数据至OBS  - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Hive&Spark Sql语句
    * jobState  作业状态码。  - 1：Terminated - 2：Starting - 3：Running - 4：Completed - 5：Abnormal - 6：Error
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    * createBy  创建作业的用户ID。  为兼容历史版本，保留此参数。
    * finishedStep  当前已完成的步骤数。  为兼容历史版本，保留此参数。
    * jobMainId  作业主ID。  为兼容历史版本，保留此参数。
    * jobStepId  作业步骤ID。  为兼容历史版本，保留此参数。
    * postponeAt  延迟时间，十位时间戳。  为兼容历史版本，保留此参数。
    * stepName  作业步骤名。  为兼容历史版本，保留此参数。
    * stepNum  步骤数量  为兼容历史版本，保留此参数。
    * taskNum  任务数量。为兼容历史版本，保留此参数。
    * updateBy  更新作业的用户ID。
    * credentials  令牌，当前版本不支持。
    * userId  创建作业的用户ID。  历史版本兼容，不再使用。
    * jobConfigs  键值对集合，用于保存作业运行配置。
    * extra  认证信息，当前版本不支持。
    * dataSourceUrls  数据源URL。
    * info  键值对集合，包含oozie返回的作业运行信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templated' => 'bool',
            'createdAt' => 'int',
            'updatedAt' => 'int',
            'id' => 'string',
            'tenantId' => 'string',
            'jobId' => 'string',
            'jobName' => 'string',
            'inputId' => 'string',
            'outputId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'clusterId' => 'string',
            'engineJobId' => 'string',
            'returnCode' => 'string',
            'isPublic' => 'bool',
            'isProtected' => 'bool',
            'groupId' => 'string',
            'jarPath' => 'string',
            'input' => 'string',
            'output' => 'string',
            'jobLog' => 'string',
            'jobType' => 'int',
            'fileAction' => 'string',
            'arguments' => 'string',
            'hql' => 'string',
            'jobState' => 'int',
            'jobFinalStatus' => 'int',
            'hiveScriptPath' => 'string',
            'createBy' => 'string',
            'finishedStep' => 'int',
            'jobMainId' => 'string',
            'jobStepId' => 'string',
            'postponeAt' => 'int',
            'stepName' => 'string',
            'stepNum' => 'int',
            'taskNum' => 'int',
            'updateBy' => 'string',
            'credentials' => 'string',
            'userId' => 'string',
            'jobConfigs' => 'map[string,object]',
            'extra' => 'map[string,object]',
            'dataSourceUrls' => 'map[string,object]',
            'info' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templated  作业执行对象是否由作业模板生成。
    * createdAt  作业创建时间，十位时间戳。
    * updatedAt  作业更新时间，十位时间戳。
    * id  作业ID。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业应用ID。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * inputId  数据输入ID。
    * outputId  数据输出ID。
    * startTime  作业执行开始时间，十位时间戳。
    * endTime  作业执行结束时间，十位时间戳。
    * clusterId  集群ID。
    * engineJobId  Oozie工作流ID。
    * returnCode  运行结果返回码。
    * isPublic  是否公开。 当前版本不支持该功能。
    * isProtected  是否受保护。 当前版本不支持该功能。
    * groupId  作业执行组ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。  - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。  - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（该接口当前不支持）  说明： 只有包含Spark和Hive组件的集群才能新增Spark和Hive类型的作业。
    * fileAction  文件操作类型，包括：  - export：从HDFS导出数据至OBS  - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Hive&Spark Sql语句
    * jobState  作业状态码。  - 1：Terminated - 2：Starting - 3：Running - 4：Completed - 5：Abnormal - 6：Error
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    * createBy  创建作业的用户ID。  为兼容历史版本，保留此参数。
    * finishedStep  当前已完成的步骤数。  为兼容历史版本，保留此参数。
    * jobMainId  作业主ID。  为兼容历史版本，保留此参数。
    * jobStepId  作业步骤ID。  为兼容历史版本，保留此参数。
    * postponeAt  延迟时间，十位时间戳。  为兼容历史版本，保留此参数。
    * stepName  作业步骤名。  为兼容历史版本，保留此参数。
    * stepNum  步骤数量  为兼容历史版本，保留此参数。
    * taskNum  任务数量。为兼容历史版本，保留此参数。
    * updateBy  更新作业的用户ID。
    * credentials  令牌，当前版本不支持。
    * userId  创建作业的用户ID。  历史版本兼容，不再使用。
    * jobConfigs  键值对集合，用于保存作业运行配置。
    * extra  认证信息，当前版本不支持。
    * dataSourceUrls  数据源URL。
    * info  键值对集合，包含oozie返回的作业运行信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templated' => null,
        'createdAt' => 'int64',
        'updatedAt' => 'int64',
        'id' => null,
        'tenantId' => null,
        'jobId' => null,
        'jobName' => null,
        'inputId' => null,
        'outputId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'clusterId' => null,
        'engineJobId' => null,
        'returnCode' => null,
        'isPublic' => null,
        'isProtected' => null,
        'groupId' => null,
        'jarPath' => null,
        'input' => null,
        'output' => null,
        'jobLog' => null,
        'jobType' => 'int32',
        'fileAction' => null,
        'arguments' => null,
        'hql' => null,
        'jobState' => 'int32',
        'jobFinalStatus' => 'int32',
        'hiveScriptPath' => null,
        'createBy' => null,
        'finishedStep' => 'int32',
        'jobMainId' => null,
        'jobStepId' => null,
        'postponeAt' => 'int64',
        'stepName' => null,
        'stepNum' => 'int32',
        'taskNum' => 'int32',
        'updateBy' => null,
        'credentials' => null,
        'userId' => null,
        'jobConfigs' => null,
        'extra' => null,
        'dataSourceUrls' => null,
        'info' => null
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
    * templated  作业执行对象是否由作业模板生成。
    * createdAt  作业创建时间，十位时间戳。
    * updatedAt  作业更新时间，十位时间戳。
    * id  作业ID。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业应用ID。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * inputId  数据输入ID。
    * outputId  数据输出ID。
    * startTime  作业执行开始时间，十位时间戳。
    * endTime  作业执行结束时间，十位时间戳。
    * clusterId  集群ID。
    * engineJobId  Oozie工作流ID。
    * returnCode  运行结果返回码。
    * isPublic  是否公开。 当前版本不支持该功能。
    * isProtected  是否受保护。 当前版本不支持该功能。
    * groupId  作业执行组ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。  - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。  - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（该接口当前不支持）  说明： 只有包含Spark和Hive组件的集群才能新增Spark和Hive类型的作业。
    * fileAction  文件操作类型，包括：  - export：从HDFS导出数据至OBS  - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Hive&Spark Sql语句
    * jobState  作业状态码。  - 1：Terminated - 2：Starting - 3：Running - 4：Completed - 5：Abnormal - 6：Error
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    * createBy  创建作业的用户ID。  为兼容历史版本，保留此参数。
    * finishedStep  当前已完成的步骤数。  为兼容历史版本，保留此参数。
    * jobMainId  作业主ID。  为兼容历史版本，保留此参数。
    * jobStepId  作业步骤ID。  为兼容历史版本，保留此参数。
    * postponeAt  延迟时间，十位时间戳。  为兼容历史版本，保留此参数。
    * stepName  作业步骤名。  为兼容历史版本，保留此参数。
    * stepNum  步骤数量  为兼容历史版本，保留此参数。
    * taskNum  任务数量。为兼容历史版本，保留此参数。
    * updateBy  更新作业的用户ID。
    * credentials  令牌，当前版本不支持。
    * userId  创建作业的用户ID。  历史版本兼容，不再使用。
    * jobConfigs  键值对集合，用于保存作业运行配置。
    * extra  认证信息，当前版本不支持。
    * dataSourceUrls  数据源URL。
    * info  键值对集合，包含oozie返回的作业运行信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templated' => 'templated',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'inputId' => 'input_id',
            'outputId' => 'output_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'clusterId' => 'cluster_id',
            'engineJobId' => 'engine_job_id',
            'returnCode' => 'return_code',
            'isPublic' => 'is_public',
            'isProtected' => 'is_protected',
            'groupId' => 'group_id',
            'jarPath' => 'jar_path',
            'input' => 'input',
            'output' => 'output',
            'jobLog' => 'job_log',
            'jobType' => 'job_type',
            'fileAction' => 'file_action',
            'arguments' => 'arguments',
            'hql' => 'hql',
            'jobState' => 'job_state',
            'jobFinalStatus' => 'job_final_status',
            'hiveScriptPath' => 'hive_script_path',
            'createBy' => 'create_by',
            'finishedStep' => 'finished_step',
            'jobMainId' => 'job_main_id',
            'jobStepId' => 'job_step_id',
            'postponeAt' => 'postpone_at',
            'stepName' => 'step_name',
            'stepNum' => 'step_num',
            'taskNum' => 'task_num',
            'updateBy' => 'update_by',
            'credentials' => 'credentials',
            'userId' => 'user_id',
            'jobConfigs' => 'job_configs',
            'extra' => 'extra',
            'dataSourceUrls' => 'data_source_urls',
            'info' => 'info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templated  作业执行对象是否由作业模板生成。
    * createdAt  作业创建时间，十位时间戳。
    * updatedAt  作业更新时间，十位时间戳。
    * id  作业ID。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业应用ID。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * inputId  数据输入ID。
    * outputId  数据输出ID。
    * startTime  作业执行开始时间，十位时间戳。
    * endTime  作业执行结束时间，十位时间戳。
    * clusterId  集群ID。
    * engineJobId  Oozie工作流ID。
    * returnCode  运行结果返回码。
    * isPublic  是否公开。 当前版本不支持该功能。
    * isProtected  是否受保护。 当前版本不支持该功能。
    * groupId  作业执行组ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。  - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。  - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（该接口当前不支持）  说明： 只有包含Spark和Hive组件的集群才能新增Spark和Hive类型的作业。
    * fileAction  文件操作类型，包括：  - export：从HDFS导出数据至OBS  - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Hive&Spark Sql语句
    * jobState  作业状态码。  - 1：Terminated - 2：Starting - 3：Running - 4：Completed - 5：Abnormal - 6：Error
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    * createBy  创建作业的用户ID。  为兼容历史版本，保留此参数。
    * finishedStep  当前已完成的步骤数。  为兼容历史版本，保留此参数。
    * jobMainId  作业主ID。  为兼容历史版本，保留此参数。
    * jobStepId  作业步骤ID。  为兼容历史版本，保留此参数。
    * postponeAt  延迟时间，十位时间戳。  为兼容历史版本，保留此参数。
    * stepName  作业步骤名。  为兼容历史版本，保留此参数。
    * stepNum  步骤数量  为兼容历史版本，保留此参数。
    * taskNum  任务数量。为兼容历史版本，保留此参数。
    * updateBy  更新作业的用户ID。
    * credentials  令牌，当前版本不支持。
    * userId  创建作业的用户ID。  历史版本兼容，不再使用。
    * jobConfigs  键值对集合，用于保存作业运行配置。
    * extra  认证信息，当前版本不支持。
    * dataSourceUrls  数据源URL。
    * info  键值对集合，包含oozie返回的作业运行信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'templated' => 'setTemplated',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'inputId' => 'setInputId',
            'outputId' => 'setOutputId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'clusterId' => 'setClusterId',
            'engineJobId' => 'setEngineJobId',
            'returnCode' => 'setReturnCode',
            'isPublic' => 'setIsPublic',
            'isProtected' => 'setIsProtected',
            'groupId' => 'setGroupId',
            'jarPath' => 'setJarPath',
            'input' => 'setInput',
            'output' => 'setOutput',
            'jobLog' => 'setJobLog',
            'jobType' => 'setJobType',
            'fileAction' => 'setFileAction',
            'arguments' => 'setArguments',
            'hql' => 'setHql',
            'jobState' => 'setJobState',
            'jobFinalStatus' => 'setJobFinalStatus',
            'hiveScriptPath' => 'setHiveScriptPath',
            'createBy' => 'setCreateBy',
            'finishedStep' => 'setFinishedStep',
            'jobMainId' => 'setJobMainId',
            'jobStepId' => 'setJobStepId',
            'postponeAt' => 'setPostponeAt',
            'stepName' => 'setStepName',
            'stepNum' => 'setStepNum',
            'taskNum' => 'setTaskNum',
            'updateBy' => 'setUpdateBy',
            'credentials' => 'setCredentials',
            'userId' => 'setUserId',
            'jobConfigs' => 'setJobConfigs',
            'extra' => 'setExtra',
            'dataSourceUrls' => 'setDataSourceUrls',
            'info' => 'setInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templated  作业执行对象是否由作业模板生成。
    * createdAt  作业创建时间，十位时间戳。
    * updatedAt  作业更新时间，十位时间戳。
    * id  作业ID。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业应用ID。
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * inputId  数据输入ID。
    * outputId  数据输出ID。
    * startTime  作业执行开始时间，十位时间戳。
    * endTime  作业执行结束时间，十位时间戳。
    * clusterId  集群ID。
    * engineJobId  Oozie工作流ID。
    * returnCode  运行结果返回码。
    * isPublic  是否公开。 当前版本不支持该功能。
    * isProtected  是否受保护。 当前版本不支持该功能。
    * groupId  作业执行组ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。  - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。  - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（该接口当前不支持）  说明： 只有包含Spark和Hive组件的集群才能新增Spark和Hive类型的作业。
    * fileAction  文件操作类型，包括：  - export：从HDFS导出数据至OBS  - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Hive&Spark Sql语句
    * jobState  作业状态码。  - 1：Terminated - 2：Starting - 3：Running - 4：Completed - 5：Abnormal - 6：Error
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    * createBy  创建作业的用户ID。  为兼容历史版本，保留此参数。
    * finishedStep  当前已完成的步骤数。  为兼容历史版本，保留此参数。
    * jobMainId  作业主ID。  为兼容历史版本，保留此参数。
    * jobStepId  作业步骤ID。  为兼容历史版本，保留此参数。
    * postponeAt  延迟时间，十位时间戳。  为兼容历史版本，保留此参数。
    * stepName  作业步骤名。  为兼容历史版本，保留此参数。
    * stepNum  步骤数量  为兼容历史版本，保留此参数。
    * taskNum  任务数量。为兼容历史版本，保留此参数。
    * updateBy  更新作业的用户ID。
    * credentials  令牌，当前版本不支持。
    * userId  创建作业的用户ID。  历史版本兼容，不再使用。
    * jobConfigs  键值对集合，用于保存作业运行配置。
    * extra  认证信息，当前版本不支持。
    * dataSourceUrls  数据源URL。
    * info  键值对集合，包含oozie返回的作业运行信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'templated' => 'getTemplated',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'inputId' => 'getInputId',
            'outputId' => 'getOutputId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'clusterId' => 'getClusterId',
            'engineJobId' => 'getEngineJobId',
            'returnCode' => 'getReturnCode',
            'isPublic' => 'getIsPublic',
            'isProtected' => 'getIsProtected',
            'groupId' => 'getGroupId',
            'jarPath' => 'getJarPath',
            'input' => 'getInput',
            'output' => 'getOutput',
            'jobLog' => 'getJobLog',
            'jobType' => 'getJobType',
            'fileAction' => 'getFileAction',
            'arguments' => 'getArguments',
            'hql' => 'getHql',
            'jobState' => 'getJobState',
            'jobFinalStatus' => 'getJobFinalStatus',
            'hiveScriptPath' => 'getHiveScriptPath',
            'createBy' => 'getCreateBy',
            'finishedStep' => 'getFinishedStep',
            'jobMainId' => 'getJobMainId',
            'jobStepId' => 'getJobStepId',
            'postponeAt' => 'getPostponeAt',
            'stepName' => 'getStepName',
            'stepNum' => 'getStepNum',
            'taskNum' => 'getTaskNum',
            'updateBy' => 'getUpdateBy',
            'credentials' => 'getCredentials',
            'userId' => 'getUserId',
            'jobConfigs' => 'getJobConfigs',
            'extra' => 'getExtra',
            'dataSourceUrls' => 'getDataSourceUrls',
            'info' => 'getInfo'
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
        $this->container['templated'] = isset($data['templated']) ? $data['templated'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['inputId'] = isset($data['inputId']) ? $data['inputId'] : null;
        $this->container['outputId'] = isset($data['outputId']) ? $data['outputId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['engineJobId'] = isset($data['engineJobId']) ? $data['engineJobId'] : null;
        $this->container['returnCode'] = isset($data['returnCode']) ? $data['returnCode'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['isProtected'] = isset($data['isProtected']) ? $data['isProtected'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['jarPath'] = isset($data['jarPath']) ? $data['jarPath'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['jobLog'] = isset($data['jobLog']) ? $data['jobLog'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['fileAction'] = isset($data['fileAction']) ? $data['fileAction'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['hql'] = isset($data['hql']) ? $data['hql'] : null;
        $this->container['jobState'] = isset($data['jobState']) ? $data['jobState'] : null;
        $this->container['jobFinalStatus'] = isset($data['jobFinalStatus']) ? $data['jobFinalStatus'] : null;
        $this->container['hiveScriptPath'] = isset($data['hiveScriptPath']) ? $data['hiveScriptPath'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['finishedStep'] = isset($data['finishedStep']) ? $data['finishedStep'] : null;
        $this->container['jobMainId'] = isset($data['jobMainId']) ? $data['jobMainId'] : null;
        $this->container['jobStepId'] = isset($data['jobStepId']) ? $data['jobStepId'] : null;
        $this->container['postponeAt'] = isset($data['postponeAt']) ? $data['postponeAt'] : null;
        $this->container['stepName'] = isset($data['stepName']) ? $data['stepName'] : null;
        $this->container['stepNum'] = isset($data['stepNum']) ? $data['stepNum'] : null;
        $this->container['taskNum'] = isset($data['taskNum']) ? $data['taskNum'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['credentials'] = isset($data['credentials']) ? $data['credentials'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['jobConfigs'] = isset($data['jobConfigs']) ? $data['jobConfigs'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
        $this->container['dataSourceUrls'] = isset($data['dataSourceUrls']) ? $data['dataSourceUrls'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
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
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) > 1023)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be smaller than or equal to 1023.";
            }
            if (!is_null($this->container['output']) && (mb_strlen($this->container['output']) < 0)) {
                $invalidProperties[] = "invalid value for 'output', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jobLog']) && (mb_strlen($this->container['jobLog']) > 1023)) {
                $invalidProperties[] = "invalid value for 'jobLog', the character length must be smaller than or equal to 1023.";
            }
            if (!is_null($this->container['jobLog']) && (mb_strlen($this->container['jobLog']) < 0)) {
                $invalidProperties[] = "invalid value for 'jobLog', the character length must be bigger than or equal to 0.";
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
    * Gets templated
    *  作业执行对象是否由作业模板生成。
    *
    * @return bool|null
    */
    public function getTemplated()
    {
        return $this->container['templated'];
    }

    /**
    * Sets templated
    *
    * @param bool|null $templated 作业执行对象是否由作业模板生成。
    *
    * @return $this
    */
    public function setTemplated($templated)
    {
        $this->container['templated'] = $templated;
        return $this;
    }

    /**
    * Gets createdAt
    *  作业创建时间，十位时间戳。
    *
    * @return int|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param int|null $createdAt 作业创建时间，十位时间戳。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  作业更新时间，十位时间戳。
    *
    * @return int|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param int|null $updatedAt 作业更新时间，十位时间戳。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets id
    *  作业ID。
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
    * @param string|null $id 作业ID。
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
    *  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
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
    * @param string|null $tenantId 项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets jobId
    *  作业应用ID。
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
    * @param string|null $jobId 作业应用ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
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
    * @param string|null $jobName 作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets inputId
    *  数据输入ID。
    *
    * @return string|null
    */
    public function getInputId()
    {
        return $this->container['inputId'];
    }

    /**
    * Sets inputId
    *
    * @param string|null $inputId 数据输入ID。
    *
    * @return $this
    */
    public function setInputId($inputId)
    {
        $this->container['inputId'] = $inputId;
        return $this;
    }

    /**
    * Gets outputId
    *  数据输出ID。
    *
    * @return string|null
    */
    public function getOutputId()
    {
        return $this->container['outputId'];
    }

    /**
    * Sets outputId
    *
    * @param string|null $outputId 数据输出ID。
    *
    * @return $this
    */
    public function setOutputId($outputId)
    {
        $this->container['outputId'] = $outputId;
        return $this;
    }

    /**
    * Gets startTime
    *  作业执行开始时间，十位时间戳。
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
    * @param int|null $startTime 作业执行开始时间，十位时间戳。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  作业执行结束时间，十位时间戳。
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
    * @param int|null $endTime 作业执行结束时间，十位时间戳。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets engineJobId
    *  Oozie工作流ID。
    *
    * @return string|null
    */
    public function getEngineJobId()
    {
        return $this->container['engineJobId'];
    }

    /**
    * Sets engineJobId
    *
    * @param string|null $engineJobId Oozie工作流ID。
    *
    * @return $this
    */
    public function setEngineJobId($engineJobId)
    {
        $this->container['engineJobId'] = $engineJobId;
        return $this;
    }

    /**
    * Gets returnCode
    *  运行结果返回码。
    *
    * @return string|null
    */
    public function getReturnCode()
    {
        return $this->container['returnCode'];
    }

    /**
    * Sets returnCode
    *
    * @param string|null $returnCode 运行结果返回码。
    *
    * @return $this
    */
    public function setReturnCode($returnCode)
    {
        $this->container['returnCode'] = $returnCode;
        return $this;
    }

    /**
    * Gets isPublic
    *  是否公开。 当前版本不支持该功能。
    *
    * @return bool|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool|null $isPublic 是否公开。 当前版本不支持该功能。
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets isProtected
    *  是否受保护。 当前版本不支持该功能。
    *
    * @return bool|null
    */
    public function getIsProtected()
    {
        return $this->container['isProtected'];
    }

    /**
    * Sets isProtected
    *
    * @param bool|null $isProtected 是否受保护。 当前版本不支持该功能。
    *
    * @return $this
    */
    public function setIsProtected($isProtected)
    {
        $this->container['isProtected'] = $isProtected;
        return $this;
    }

    /**
    * Gets groupId
    *  作业执行组ID。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 作业执行组ID。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets jarPath
    *  执行程序Jar包或sql文件地址，需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。  - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。  - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    *
    * @return string|null
    */
    public function getJarPath()
    {
        return $this->container['jarPath'];
    }

    /**
    * Sets jarPath
    *
    * @param string|null $jarPath 执行程序Jar包或sql文件地址，需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。  - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。  - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    *
    * @return $this
    */
    public function setJarPath($jarPath)
    {
        $this->container['jarPath'] = $jarPath;
        return $this;
    }

    /**
    * Gets input
    *  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    *
    * @return string|null
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param string|null $input 数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets output
    *  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    *
    * @return string|null
    */
    public function getOutput()
    {
        return $this->container['output'];
    }

    /**
    * Sets output
    *
    * @param string|null $output 数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    *
    * @return $this
    */
    public function setOutput($output)
    {
        $this->container['output'] = $output;
        return $this;
    }

    /**
    * Gets jobLog
    *  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    *
    * @return string|null
    */
    public function getJobLog()
    {
        return $this->container['jobLog'];
    }

    /**
    * Sets jobLog
    *
    * @param string|null $jobLog 作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    *
    * @return $this
    */
    public function setJobLog($jobLog)
    {
        $this->container['jobLog'] = $jobLog;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（该接口当前不支持）  说明： 只有包含Spark和Hive组件的集群才能新增Spark和Hive类型的作业。
    *
    * @return int|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param int|null $jobType 作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（该接口当前不支持）  说明： 只有包含Spark和Hive组件的集群才能新增Spark和Hive类型的作业。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets fileAction
    *  文件操作类型，包括：  - export：从HDFS导出数据至OBS  - import：从OBS导入数据至HDFS
    *
    * @return string|null
    */
    public function getFileAction()
    {
        return $this->container['fileAction'];
    }

    /**
    * Sets fileAction
    *
    * @param string|null $fileAction 文件操作类型，包括：  - export：从HDFS导出数据至OBS  - import：从OBS导入数据至HDFS
    *
    * @return $this
    */
    public function setFileAction($fileAction)
    {
        $this->container['fileAction'] = $fileAction;
        return $this;
    }

    /**
    * Gets arguments
    *  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
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
    * @param string|null $arguments 程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    *
    * @return $this
    */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;
        return $this;
    }

    /**
    * Gets hql
    *  Hive&Spark Sql语句
    *
    * @return string|null
    */
    public function getHql()
    {
        return $this->container['hql'];
    }

    /**
    * Sets hql
    *
    * @param string|null $hql Hive&Spark Sql语句
    *
    * @return $this
    */
    public function setHql($hql)
    {
        $this->container['hql'] = $hql;
        return $this;
    }

    /**
    * Gets jobState
    *  作业状态码。  - 1：Terminated - 2：Starting - 3：Running - 4：Completed - 5：Abnormal - 6：Error
    *
    * @return int|null
    */
    public function getJobState()
    {
        return $this->container['jobState'];
    }

    /**
    * Sets jobState
    *
    * @param int|null $jobState 作业状态码。  - 1：Terminated - 2：Starting - 3：Running - 4：Completed - 5：Abnormal - 6：Error
    *
    * @return $this
    */
    public function setJobState($jobState)
    {
        $this->container['jobState'] = $jobState;
        return $this;
    }

    /**
    * Gets jobFinalStatus
    *  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    *
    * @return int|null
    */
    public function getJobFinalStatus()
    {
        return $this->container['jobFinalStatus'];
    }

    /**
    * Sets jobFinalStatus
    *
    * @param int|null $jobFinalStatus 作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    *
    * @return $this
    */
    public function setJobFinalStatus($jobFinalStatus)
    {
        $this->container['jobFinalStatus'] = $jobFinalStatus;
        return $this;
    }

    /**
    * Gets hiveScriptPath
    *  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    *
    * @return string|null
    */
    public function getHiveScriptPath()
    {
        return $this->container['hiveScriptPath'];
    }

    /**
    * Sets hiveScriptPath
    *
    * @param string|null $hiveScriptPath sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    *
    * @return $this
    */
    public function setHiveScriptPath($hiveScriptPath)
    {
        $this->container['hiveScriptPath'] = $hiveScriptPath;
        return $this;
    }

    /**
    * Gets createBy
    *  创建作业的用户ID。  为兼容历史版本，保留此参数。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建作业的用户ID。  为兼容历史版本，保留此参数。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets finishedStep
    *  当前已完成的步骤数。  为兼容历史版本，保留此参数。
    *
    * @return int|null
    */
    public function getFinishedStep()
    {
        return $this->container['finishedStep'];
    }

    /**
    * Sets finishedStep
    *
    * @param int|null $finishedStep 当前已完成的步骤数。  为兼容历史版本，保留此参数。
    *
    * @return $this
    */
    public function setFinishedStep($finishedStep)
    {
        $this->container['finishedStep'] = $finishedStep;
        return $this;
    }

    /**
    * Gets jobMainId
    *  作业主ID。  为兼容历史版本，保留此参数。
    *
    * @return string|null
    */
    public function getJobMainId()
    {
        return $this->container['jobMainId'];
    }

    /**
    * Sets jobMainId
    *
    * @param string|null $jobMainId 作业主ID。  为兼容历史版本，保留此参数。
    *
    * @return $this
    */
    public function setJobMainId($jobMainId)
    {
        $this->container['jobMainId'] = $jobMainId;
        return $this;
    }

    /**
    * Gets jobStepId
    *  作业步骤ID。  为兼容历史版本，保留此参数。
    *
    * @return string|null
    */
    public function getJobStepId()
    {
        return $this->container['jobStepId'];
    }

    /**
    * Sets jobStepId
    *
    * @param string|null $jobStepId 作业步骤ID。  为兼容历史版本，保留此参数。
    *
    * @return $this
    */
    public function setJobStepId($jobStepId)
    {
        $this->container['jobStepId'] = $jobStepId;
        return $this;
    }

    /**
    * Gets postponeAt
    *  延迟时间，十位时间戳。  为兼容历史版本，保留此参数。
    *
    * @return int|null
    */
    public function getPostponeAt()
    {
        return $this->container['postponeAt'];
    }

    /**
    * Sets postponeAt
    *
    * @param int|null $postponeAt 延迟时间，十位时间戳。  为兼容历史版本，保留此参数。
    *
    * @return $this
    */
    public function setPostponeAt($postponeAt)
    {
        $this->container['postponeAt'] = $postponeAt;
        return $this;
    }

    /**
    * Gets stepName
    *  作业步骤名。  为兼容历史版本，保留此参数。
    *
    * @return string|null
    */
    public function getStepName()
    {
        return $this->container['stepName'];
    }

    /**
    * Sets stepName
    *
    * @param string|null $stepName 作业步骤名。  为兼容历史版本，保留此参数。
    *
    * @return $this
    */
    public function setStepName($stepName)
    {
        $this->container['stepName'] = $stepName;
        return $this;
    }

    /**
    * Gets stepNum
    *  步骤数量  为兼容历史版本，保留此参数。
    *
    * @return int|null
    */
    public function getStepNum()
    {
        return $this->container['stepNum'];
    }

    /**
    * Sets stepNum
    *
    * @param int|null $stepNum 步骤数量  为兼容历史版本，保留此参数。
    *
    * @return $this
    */
    public function setStepNum($stepNum)
    {
        $this->container['stepNum'] = $stepNum;
        return $this;
    }

    /**
    * Gets taskNum
    *  任务数量。为兼容历史版本，保留此参数。
    *
    * @return int|null
    */
    public function getTaskNum()
    {
        return $this->container['taskNum'];
    }

    /**
    * Sets taskNum
    *
    * @param int|null $taskNum 任务数量。为兼容历史版本，保留此参数。
    *
    * @return $this
    */
    public function setTaskNum($taskNum)
    {
        $this->container['taskNum'] = $taskNum;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新作业的用户ID。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新作业的用户ID。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets credentials
    *  令牌，当前版本不支持。
    *
    * @return string|null
    */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
    * Sets credentials
    *
    * @param string|null $credentials 令牌，当前版本不支持。
    *
    * @return $this
    */
    public function setCredentials($credentials)
    {
        $this->container['credentials'] = $credentials;
        return $this;
    }

    /**
    * Gets userId
    *  创建作业的用户ID。  历史版本兼容，不再使用。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 创建作业的用户ID。  历史版本兼容，不再使用。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets jobConfigs
    *  键值对集合，用于保存作业运行配置。
    *
    * @return map[string,object]|null
    */
    public function getJobConfigs()
    {
        return $this->container['jobConfigs'];
    }

    /**
    * Sets jobConfigs
    *
    * @param map[string,object]|null $jobConfigs 键值对集合，用于保存作业运行配置。
    *
    * @return $this
    */
    public function setJobConfigs($jobConfigs)
    {
        $this->container['jobConfigs'] = $jobConfigs;
        return $this;
    }

    /**
    * Gets extra
    *  认证信息，当前版本不支持。
    *
    * @return map[string,object]|null
    */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
    * Sets extra
    *
    * @param map[string,object]|null $extra 认证信息，当前版本不支持。
    *
    * @return $this
    */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;
        return $this;
    }

    /**
    * Gets dataSourceUrls
    *  数据源URL。
    *
    * @return map[string,object]|null
    */
    public function getDataSourceUrls()
    {
        return $this->container['dataSourceUrls'];
    }

    /**
    * Sets dataSourceUrls
    *
    * @param map[string,object]|null $dataSourceUrls 数据源URL。
    *
    * @return $this
    */
    public function setDataSourceUrls($dataSourceUrls)
    {
        $this->container['dataSourceUrls'] = $dataSourceUrls;
        return $this;
    }

    /**
    * Gets info
    *  键值对集合，包含oozie返回的作业运行信息。
    *
    * @return map[string,object]|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param map[string,object]|null $info 键值对集合，包含oozie返回的作业运行信息。
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
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

