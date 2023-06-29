<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddJobsReqV11 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddJobsReqV11';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据，（当前不支持）。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（当前不支持）。
    * jobName  作业名称。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&>,<'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。    - OBS：以“obs://”开头。不支持KMS加密的文件或程序。    - HDFS：以“/”开头。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$特殊字符，可为空。
    * input  数据输入地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。不支持KMS加密的文件或程序。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 如果该路径不存在，系统会自动创建。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。     - OBS：以“obs://”开头。不支持KMS加密的文件或程序。     - HDFS：以“/”开头。 - 需要以“.sql”结尾，sql不区分大小写。
    * hql  HQL脚本语句。
    * shutdownCluster  作业执行完成后，是否删除集群。 - true：是 - false：否
    * submitJobOnceClusterRun  - true：创建集群同时提交作业 - false：单独提交作业 此处应设置为true。
    * fileAction  数据导入导出。 - import - export
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => 'int',
            'jobName' => 'string',
            'jarPath' => 'string',
            'arguments' => 'string',
            'input' => 'string',
            'output' => 'string',
            'jobLog' => 'string',
            'hiveScriptPath' => 'string',
            'hql' => 'string',
            'shutdownCluster' => 'bool',
            'submitJobOnceClusterRun' => 'bool',
            'fileAction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据，（当前不支持）。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（当前不支持）。
    * jobName  作业名称。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&>,<'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。    - OBS：以“obs://”开头。不支持KMS加密的文件或程序。    - HDFS：以“/”开头。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$特殊字符，可为空。
    * input  数据输入地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。不支持KMS加密的文件或程序。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 如果该路径不存在，系统会自动创建。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。     - OBS：以“obs://”开头。不支持KMS加密的文件或程序。     - HDFS：以“/”开头。 - 需要以“.sql”结尾，sql不区分大小写。
    * hql  HQL脚本语句。
    * shutdownCluster  作业执行完成后，是否删除集群。 - true：是 - false：否
    * submitJobOnceClusterRun  - true：创建集群同时提交作业 - false：单独提交作业 此处应设置为true。
    * fileAction  数据导入导出。 - import - export
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => 'int32',
        'jobName' => null,
        'jarPath' => null,
        'arguments' => null,
        'input' => null,
        'output' => null,
        'jobLog' => null,
        'hiveScriptPath' => null,
        'hql' => null,
        'shutdownCluster' => null,
        'submitJobOnceClusterRun' => null,
        'fileAction' => null
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
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据，（当前不支持）。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（当前不支持）。
    * jobName  作业名称。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&>,<'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。    - OBS：以“obs://”开头。不支持KMS加密的文件或程序。    - HDFS：以“/”开头。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$特殊字符，可为空。
    * input  数据输入地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。不支持KMS加密的文件或程序。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 如果该路径不存在，系统会自动创建。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。     - OBS：以“obs://”开头。不支持KMS加密的文件或程序。     - HDFS：以“/”开头。 - 需要以“.sql”结尾，sql不区分大小写。
    * hql  HQL脚本语句。
    * shutdownCluster  作业执行完成后，是否删除集群。 - true：是 - false：否
    * submitJobOnceClusterRun  - true：创建集群同时提交作业 - false：单独提交作业 此处应设置为true。
    * fileAction  数据导入导出。 - import - export
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'jobName' => 'job_name',
            'jarPath' => 'jar_path',
            'arguments' => 'arguments',
            'input' => 'input',
            'output' => 'output',
            'jobLog' => 'job_log',
            'hiveScriptPath' => 'hive_script_path',
            'hql' => 'hql',
            'shutdownCluster' => 'shutdown_cluster',
            'submitJobOnceClusterRun' => 'submit_job_once_cluster_run',
            'fileAction' => 'file_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据，（当前不支持）。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（当前不支持）。
    * jobName  作业名称。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&>,<'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。    - OBS：以“obs://”开头。不支持KMS加密的文件或程序。    - HDFS：以“/”开头。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$特殊字符，可为空。
    * input  数据输入地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。不支持KMS加密的文件或程序。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 如果该路径不存在，系统会自动创建。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。     - OBS：以“obs://”开头。不支持KMS加密的文件或程序。     - HDFS：以“/”开头。 - 需要以“.sql”结尾，sql不区分大小写。
    * hql  HQL脚本语句。
    * shutdownCluster  作业执行完成后，是否删除集群。 - true：是 - false：否
    * submitJobOnceClusterRun  - true：创建集群同时提交作业 - false：单独提交作业 此处应设置为true。
    * fileAction  数据导入导出。 - import - export
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'jobName' => 'setJobName',
            'jarPath' => 'setJarPath',
            'arguments' => 'setArguments',
            'input' => 'setInput',
            'output' => 'setOutput',
            'jobLog' => 'setJobLog',
            'hiveScriptPath' => 'setHiveScriptPath',
            'hql' => 'setHql',
            'shutdownCluster' => 'setShutdownCluster',
            'submitJobOnceClusterRun' => 'setSubmitJobOnceClusterRun',
            'fileAction' => 'setFileAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据，（当前不支持）。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（当前不支持）。
    * jobName  作业名称。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    * jarPath  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&>,<'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。    - OBS：以“obs://”开头。不支持KMS加密的文件或程序。    - HDFS：以“/”开头。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$特殊字符，可为空。
    * input  数据输入地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。不支持KMS加密的文件或程序。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * output  数据输出地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 如果该路径不存在，系统会自动创建。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * jobLog  作业日志存储地址，该日志信息记录作业运行状态。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    * hiveScriptPath  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。     - OBS：以“obs://”开头。不支持KMS加密的文件或程序。     - HDFS：以“/”开头。 - 需要以“.sql”结尾，sql不区分大小写。
    * hql  HQL脚本语句。
    * shutdownCluster  作业执行完成后，是否删除集群。 - true：是 - false：否
    * submitJobOnceClusterRun  - true：创建集群同时提交作业 - false：单独提交作业 此处应设置为true。
    * fileAction  数据导入导出。 - import - export
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'jobName' => 'getJobName',
            'jarPath' => 'getJarPath',
            'arguments' => 'getArguments',
            'input' => 'getInput',
            'output' => 'getOutput',
            'jobLog' => 'getJobLog',
            'hiveScriptPath' => 'getHiveScriptPath',
            'hql' => 'getHql',
            'shutdownCluster' => 'getShutdownCluster',
            'submitJobOnceClusterRun' => 'getSubmitJobOnceClusterRun',
            'fileAction' => 'getFileAction'
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['jarPath'] = isset($data['jarPath']) ? $data['jarPath'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['output'] = isset($data['output']) ? $data['output'] : null;
        $this->container['jobLog'] = isset($data['jobLog']) ? $data['jobLog'] : null;
        $this->container['hiveScriptPath'] = isset($data['hiveScriptPath']) ? $data['hiveScriptPath'] : null;
        $this->container['hql'] = isset($data['hql']) ? $data['hql'] : null;
        $this->container['shutdownCluster'] = isset($data['shutdownCluster']) ? $data['shutdownCluster'] : null;
        $this->container['submitJobOnceClusterRun'] = isset($data['submitJobOnceClusterRun']) ? $data['submitJobOnceClusterRun'] : null;
        $this->container['fileAction'] = isset($data['fileAction']) ? $data['fileAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
            if ((mb_strlen($this->container['jobName']) > 64)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['jobName']) < 1)) {
                $invalidProperties[] = "invalid value for 'jobName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['jarPath']) && (mb_strlen($this->container['jarPath']) > 1023)) {
                $invalidProperties[] = "invalid value for 'jarPath', the character length must be smaller than or equal to 1023.";
            }
            if (!is_null($this->container['jarPath']) && (mb_strlen($this->container['jarPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'jarPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['arguments']) && (mb_strlen($this->container['arguments']) > 150000)) {
                $invalidProperties[] = "invalid value for 'arguments', the character length must be smaller than or equal to 150000.";
            }
            if (!is_null($this->container['arguments']) && (mb_strlen($this->container['arguments']) < 0)) {
                $invalidProperties[] = "invalid value for 'arguments', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) > 1023)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be smaller than or equal to 1023.";
            }
            if (!is_null($this->container['input']) && (mb_strlen($this->container['input']) < 0)) {
                $invalidProperties[] = "invalid value for 'input', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['hiveScriptPath']) && (mb_strlen($this->container['hiveScriptPath']) > 1023)) {
                $invalidProperties[] = "invalid value for 'hiveScriptPath', the character length must be smaller than or equal to 1023.";
            }
            if (!is_null($this->container['hiveScriptPath']) && (mb_strlen($this->container['hiveScriptPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'hiveScriptPath', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['submitJobOnceClusterRun'] === null) {
            $invalidProperties[] = "'submitJobOnceClusterRun' can't be null";
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
    * Gets jobType
    *  作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据，（当前不支持）。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（当前不支持）。
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
    * @param int $jobType 作业类型码。 - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp，导入、导出数据，（当前不支持）。 - 6：Spark Script - 7：Spark SQL，提交SQL语句，（当前不支持）。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets jobName
    *  作业名称。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
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
    * @param string $jobName 作业名称。 只能由字母、数字、中划线和下划线组成，并且长度为1～64个字符。 说明： 不同作业的名称允许相同，但不建议设置相同。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets jarPath
    *  执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&>,<'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。    - OBS：以“obs://”开头。不支持KMS加密的文件或程序。    - HDFS：以“/”开头。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
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
    * @param string|null $jarPath 执行程序Jar包或sql文件地址，需要满足如下要求： - 最多为1023字符，不能包含;|&>,<'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。    - OBS：以“obs://”开头。不支持KMS加密的文件或程序。    - HDFS：以“/”开头。 - Spark Script需要以“.sql”结尾，MapReduce和Spark Jar需要以“.jar”结尾，sql和jar不区分大小写。
    *
    * @return $this
    */
    public function setJarPath($jarPath)
    {
        $this->container['jarPath'] = $jarPath;
        return $this;
    }

    /**
    * Gets arguments
    *  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$特殊字符，可为空。
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
    * @param string|null $arguments 程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。 最多为150000字符，不能包含;|&>'<$特殊字符，可为空。
    *
    * @return $this
    */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;
        return $this;
    }

    /**
    * Gets input
    *  数据输入地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。不支持KMS加密的文件或程序。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
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
    * @param string|null $input 数据输入地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。不支持KMS加密的文件或程序。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
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
    *  数据输出地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 如果该路径不存在，系统会自动创建。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
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
    * @param string|null $output 数据输出地址。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 如果该路径不存在，系统会自动创建。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
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
    *  作业日志存储地址，该日志信息记录作业运行状态。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
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
    * @param string|null $jobLog 作业日志存储地址，该日志信息记录作业运行状态。 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。 - OBS：以“obs://”开头。 - HDFS：以“/”开头。 最多为1023字符，不能包含;|&>'<$特殊字符，可为空。
    *
    * @return $this
    */
    public function setJobLog($jobLog)
    {
        $this->container['jobLog'] = $jobLog;
        return $this;
    }

    /**
    * Gets hiveScriptPath
    *  sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。     - OBS：以“obs://”开头。不支持KMS加密的文件或程序。     - HDFS：以“/”开头。 - 需要以“.sql”结尾，sql不区分大小写。
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
    * @param string|null $hiveScriptPath sql程序路径，仅Spark Script和Hive Script作业需要使用此参数。需要满足如下要求： - 最多为1023字符，不能包含;|&><'$特殊字符，且不可为空或全空格。 - 文件可存储于HDFS或者OBS中，不同的文件系统对应的路径存在差异。     - OBS：以“obs://”开头。不支持KMS加密的文件或程序。     - HDFS：以“/”开头。 - 需要以“.sql”结尾，sql不区分大小写。
    *
    * @return $this
    */
    public function setHiveScriptPath($hiveScriptPath)
    {
        $this->container['hiveScriptPath'] = $hiveScriptPath;
        return $this;
    }

    /**
    * Gets hql
    *  HQL脚本语句。
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
    * @param string|null $hql HQL脚本语句。
    *
    * @return $this
    */
    public function setHql($hql)
    {
        $this->container['hql'] = $hql;
        return $this;
    }

    /**
    * Gets shutdownCluster
    *  作业执行完成后，是否删除集群。 - true：是 - false：否
    *
    * @return bool|null
    */
    public function getShutdownCluster()
    {
        return $this->container['shutdownCluster'];
    }

    /**
    * Sets shutdownCluster
    *
    * @param bool|null $shutdownCluster 作业执行完成后，是否删除集群。 - true：是 - false：否
    *
    * @return $this
    */
    public function setShutdownCluster($shutdownCluster)
    {
        $this->container['shutdownCluster'] = $shutdownCluster;
        return $this;
    }

    /**
    * Gets submitJobOnceClusterRun
    *  - true：创建集群同时提交作业 - false：单独提交作业 此处应设置为true。
    *
    * @return bool
    */
    public function getSubmitJobOnceClusterRun()
    {
        return $this->container['submitJobOnceClusterRun'];
    }

    /**
    * Sets submitJobOnceClusterRun
    *
    * @param bool $submitJobOnceClusterRun - true：创建集群同时提交作业 - false：单独提交作业 此处应设置为true。
    *
    * @return $this
    */
    public function setSubmitJobOnceClusterRun($submitJobOnceClusterRun)
    {
        $this->container['submitJobOnceClusterRun'] = $submitJobOnceClusterRun;
        return $this;
    }

    /**
    * Gets fileAction
    *  数据导入导出。 - import - export
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
    * @param string|null $fileAction 数据导入导出。 - import - export
    *
    * @return $this
    */
    public function setFileAction($fileAction)
    {
        $this->container['fileAction'] = $fileAction;
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

