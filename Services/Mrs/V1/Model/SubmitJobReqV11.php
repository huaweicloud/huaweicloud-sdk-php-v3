<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubmitJobReqV11 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubmitJobReqV11';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * clusterId  集群ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。 说明： 作业类型为MapReduce或Spark时，jar_path参数为必选。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句（该接口当前不支持）
    * fileAction  文件操作类型，包括： - export：从HDFS导出数据至OBS - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Spark SQL语句，该语句需要进行Base64编码和解码，“ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”为标准的编码表，MRS使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”进行Base64编码。在编码后所得字符串首位任意加上一个字母，即得到Hql参数的值。后台自动进行解码得到Spark SQL语句。 使用样例： 1) 在Web界面输入Spark SQL语句“show tables;”。 2) 使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”编码后得到字符串“c2hvdyB0YWLsZXM7”。 3) 在“c2hvdyB0YWLsZXM7”首位任意加上一字母，例如“gc2hvdyB0YWLsZXM7”，即Hql参数的值。 4) 后台自动进行解码得到Spark SQL语句“show tables;”。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobName' => 'string',
            'clusterId' => 'string',
            'jarPath' => 'string',
            'input' => 'string',
            'output' => 'string',
            'jobLog' => 'string',
            'jobType' => 'int',
            'fileAction' => 'string',
            'arguments' => 'string',
            'hql' => 'string',
            'hiveScriptPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * clusterId  集群ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。 说明： 作业类型为MapReduce或Spark时，jar_path参数为必选。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句（该接口当前不支持）
    * fileAction  文件操作类型，包括： - export：从HDFS导出数据至OBS - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Spark SQL语句，该语句需要进行Base64编码和解码，“ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”为标准的编码表，MRS使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”进行Base64编码。在编码后所得字符串首位任意加上一个字母，即得到Hql参数的值。后台自动进行解码得到Spark SQL语句。 使用样例： 1) 在Web界面输入Spark SQL语句“show tables;”。 2) 使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”编码后得到字符串“c2hvdyB0YWLsZXM7”。 3) 在“c2hvdyB0YWLsZXM7”首位任意加上一字母，例如“gc2hvdyB0YWLsZXM7”，即Hql参数的值。 4) 后台自动进行解码得到Spark SQL语句“show tables;”。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobName' => null,
        'clusterId' => null,
        'jarPath' => null,
        'input' => null,
        'output' => null,
        'jobLog' => null,
        'jobType' => 'int32',
        'fileAction' => null,
        'arguments' => null,
        'hql' => null,
        'hiveScriptPath' => null
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
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * clusterId  集群ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。 说明： 作业类型为MapReduce或Spark时，jar_path参数为必选。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句（该接口当前不支持）
    * fileAction  文件操作类型，包括： - export：从HDFS导出数据至OBS - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Spark SQL语句，该语句需要进行Base64编码和解码，“ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”为标准的编码表，MRS使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”进行Base64编码。在编码后所得字符串首位任意加上一个字母，即得到Hql参数的值。后台自动进行解码得到Spark SQL语句。 使用样例： 1) 在Web界面输入Spark SQL语句“show tables;”。 2) 使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”编码后得到字符串“c2hvdyB0YWLsZXM7”。 3) 在“c2hvdyB0YWLsZXM7”首位任意加上一字母，例如“gc2hvdyB0YWLsZXM7”，即Hql参数的值。 4) 后台自动进行解码得到Spark SQL语句“show tables;”。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobName' => 'job_name',
            'clusterId' => 'cluster_id',
            'jarPath' => 'jar_path',
            'input' => 'input',
            'output' => 'output',
            'jobLog' => 'job_log',
            'jobType' => 'job_type',
            'fileAction' => 'file_action',
            'arguments' => 'arguments',
            'hql' => 'hql',
            'hiveScriptPath' => 'hive_script_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * clusterId  集群ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。 说明： 作业类型为MapReduce或Spark时，jar_path参数为必选。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句（该接口当前不支持）
    * fileAction  文件操作类型，包括： - export：从HDFS导出数据至OBS - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Spark SQL语句，该语句需要进行Base64编码和解码，“ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”为标准的编码表，MRS使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”进行Base64编码。在编码后所得字符串首位任意加上一个字母，即得到Hql参数的值。后台自动进行解码得到Spark SQL语句。 使用样例： 1) 在Web界面输入Spark SQL语句“show tables;”。 2) 使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”编码后得到字符串“c2hvdyB0YWLsZXM7”。 3) 在“c2hvdyB0YWLsZXM7”首位任意加上一字母，例如“gc2hvdyB0YWLsZXM7”，即Hql参数的值。 4) 后台自动进行解码得到Spark SQL语句“show tables;”。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobName' => 'setJobName',
            'clusterId' => 'setClusterId',
            'jarPath' => 'setJarPath',
            'input' => 'setInput',
            'output' => 'setOutput',
            'jobLog' => 'setJobLog',
            'jobType' => 'setJobType',
            'fileAction' => 'setFileAction',
            'arguments' => 'setArguments',
            'hql' => 'setHql',
            'hiveScriptPath' => 'setHiveScriptPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobName  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    * clusterId  集群ID。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。 说明： 作业类型为MapReduce或Spark时，jar_path参数为必选。
    * input  数据输入地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，OBS路径不支持KMS加密的文件或程序。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址，必须以“/”或“s3a://”开头。请配置为正确的OBS路径，如果该路径不存在，系统会自动创建。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。必须以“/”或“s3a://”开头，请配置为正确的OBS路径。  最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句（该接口当前不支持）
    * fileAction  文件操作类型，包括： - export：从HDFS导出数据至OBS - import：从OBS导入数据至HDFS
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$!\\\"\\特殊字符，可为空。 说明： 用户输入带有敏感信息（如登录密码）的参数时，可通过在参数名前添加“@”的方式，为该参数值加密，以防止敏感信息被明文形式持久化。在查看作业信息时，敏感信息显示为“*”。 例如：username=admin @password=admin_123
    * hql  Spark SQL语句，该语句需要进行Base64编码和解码，“ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”为标准的编码表，MRS使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”进行Base64编码。在编码后所得字符串首位任意加上一个字母，即得到Hql参数的值。后台自动进行解码得到Spark SQL语句。 使用样例： 1) 在Web界面输入Spark SQL语句“show tables;”。 2) 使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”编码后得到字符串“c2hvdyB0YWLsZXM7”。 3) 在“c2hvdyB0YWLsZXM7”首位任意加上一字母，例如“gc2hvdyB0YWLsZXM7”，即Hql参数的值。 4) 后台自动进行解码得到Spark SQL语句“show tables;”。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求：  - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头，OBS路径不支持KMS加密的文件或程序。 - 需要以“.sql”结尾，sql不区分大小写。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobName' => 'getJobName',
            'clusterId' => 'getClusterId',
            'jarPath' => 'getJarPath',
            'input' => 'getInput',
            'output' => 'getOutput',
            'jobLog' => 'getJobLog',
            'jobType' => 'getJobType',
            'fileAction' => 'getFileAction',
            'arguments' => 'getArguments',
            'hql' => 'getHql',
            'hiveScriptPath' => 'getHiveScriptPath'
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
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['jarPath'] = isset($data['jarPath']) ? $data['jarPath'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['jobLog'] = isset($data['jobLog']) ? $data['jobLog'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['fileAction'] = isset($data['fileAction']) ? $data['fileAction'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['hql'] = isset($data['hql']) ? $data['hql'] : null;
        $this->container['hiveScriptPath'] = isset($data['hiveScriptPath']) ? $data['hiveScriptPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
            if ((mb_strlen($this->container['jobName']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
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
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
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
    * Gets jobName
    *  作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    *
    * @return string
    */
    public function getJobName()
    {
        return $this->container['jobName'];
    }

    /**
    * Sets jobName
    *
    * @param string $jobName 作业名称，只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。  说明： 不同作业的名称允许相同，但不建议设置相同。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。
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
    * @param string $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets jarPath
    *  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。 说明： 作业类型为MapReduce或Spark时，jar_path参数为必选。
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
    * @param string|null $jarPath 执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 需要以“/”或“s3a://”开头。OBS路径不支持KMS加密的文件或程序。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。 说明： 作业类型为MapReduce或Spark时，jar_path参数为必选。
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
    *  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句（该接口当前不支持）
    *
    * @return int
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param int $jobType 作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据。 - 6：Spark Script - 7：Spark SQL，提交SQL语句（该接口当前不支持）
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
    *  文件操作类型，包括： - export：从HDFS导出数据至OBS - import：从OBS导入数据至HDFS
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
    * @param string|null $fileAction 文件操作类型，包括： - export：从HDFS导出数据至OBS - import：从OBS导入数据至HDFS
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
    *  Spark SQL语句，该语句需要进行Base64编码和解码，“ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”为标准的编码表，MRS使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”进行Base64编码。在编码后所得字符串首位任意加上一个字母，即得到Hql参数的值。后台自动进行解码得到Spark SQL语句。 使用样例： 1) 在Web界面输入Spark SQL语句“show tables;”。 2) 使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”编码后得到字符串“c2hvdyB0YWLsZXM7”。 3) 在“c2hvdyB0YWLsZXM7”首位任意加上一字母，例如“gc2hvdyB0YWLsZXM7”，即Hql参数的值。 4) 后台自动进行解码得到Spark SQL语句“show tables;”。
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
    * @param string|null $hql Spark SQL语句，该语句需要进行Base64编码和解码，“ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”为标准的编码表，MRS使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”进行Base64编码。在编码后所得字符串首位任意加上一个字母，即得到Hql参数的值。后台自动进行解码得到Spark SQL语句。 使用样例： 1) 在Web界面输入Spark SQL语句“show tables;”。 2) 使用“ABCDEFGHILKJMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/”编码后得到字符串“c2hvdyB0YWLsZXM7”。 3) 在“c2hvdyB0YWLsZXM7”首位任意加上一字母，例如“gc2hvdyB0YWLsZXM7”，即Hql参数的值。 4) 后台自动进行解码得到Spark SQL语句“show tables;”。
    *
    * @return $this
    */
    public function setHql($hql)
    {
        $this->container['hql'] = $hql;
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

