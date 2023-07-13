<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobExeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobExeResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  作业ID。
    * createAt  作业创建时间，十三位时间戳。
    * updateAt  作业更新时间，十三位时间戳。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业ID。
    * jobName  作业名称。
    * startTime  作业执行开始时间，十三位时间戳。
    * endTime  作业执行结束时间，十三位时间戳。
    * clusterId  作业所属集群ID。
    * groupId  作业执行组ID
    * jarPath  执行程序jar包或sql文件地址。
    * input  数据输入地址。
    * output  数据输出地址。
    * jobLog  作业日志存储地址
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp - 6：Spark Script - 7：Spark SQL（该接口当前不支持）
    * fileAction  导入导出数据。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。该参数可为空。
    * hql  HQL脚本语句。
    * jobState  作业状态编码：  - 1：Terminated表示已终止的作业状态 - 2：Running表示运行中的作业状态 - 3：Completed表示已完成的作业状态 - 4：Abnormal表示异常的作业状态
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  Hive脚本地址。
    * createBy  创建作业的用户ID。
    * finishedStep  当前已完成的步骤数。
    * jobMainId  作业主ID。
    * jobStepId  作业步骤ID。
    * postponeAt  延迟时间，十三位时间戳。
    * stepName  作业步骤名。
    * stepNum  步骤数量。
    * taskNum  任务数量。
    * updateBy  更新作业的用户ID。
    * spendTime  作业执行持续时间，单位：秒。
    * stepSeq  步骤序列号。
    * progress  作业执行进度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'createAt' => 'int',
            'updateAt' => 'int',
            'tenantId' => 'string',
            'jobId' => 'string',
            'jobName' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'clusterId' => 'string',
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
            'spendTime' => 'float',
            'stepSeq' => 'int',
            'progress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  作业ID。
    * createAt  作业创建时间，十三位时间戳。
    * updateAt  作业更新时间，十三位时间戳。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业ID。
    * jobName  作业名称。
    * startTime  作业执行开始时间，十三位时间戳。
    * endTime  作业执行结束时间，十三位时间戳。
    * clusterId  作业所属集群ID。
    * groupId  作业执行组ID
    * jarPath  执行程序jar包或sql文件地址。
    * input  数据输入地址。
    * output  数据输出地址。
    * jobLog  作业日志存储地址
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp - 6：Spark Script - 7：Spark SQL（该接口当前不支持）
    * fileAction  导入导出数据。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。该参数可为空。
    * hql  HQL脚本语句。
    * jobState  作业状态编码：  - 1：Terminated表示已终止的作业状态 - 2：Running表示运行中的作业状态 - 3：Completed表示已完成的作业状态 - 4：Abnormal表示异常的作业状态
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  Hive脚本地址。
    * createBy  创建作业的用户ID。
    * finishedStep  当前已完成的步骤数。
    * jobMainId  作业主ID。
    * jobStepId  作业步骤ID。
    * postponeAt  延迟时间，十三位时间戳。
    * stepName  作业步骤名。
    * stepNum  步骤数量。
    * taskNum  任务数量。
    * updateBy  更新作业的用户ID。
    * spendTime  作业执行持续时间，单位：秒。
    * stepSeq  步骤序列号。
    * progress  作业执行进度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'createAt' => 'int64',
        'updateAt' => 'int64',
        'tenantId' => null,
        'jobId' => null,
        'jobName' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'clusterId' => null,
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
        'spendTime' => 'float',
        'stepSeq' => 'int32',
        'progress' => null
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
    * id  作业ID。
    * createAt  作业创建时间，十三位时间戳。
    * updateAt  作业更新时间，十三位时间戳。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业ID。
    * jobName  作业名称。
    * startTime  作业执行开始时间，十三位时间戳。
    * endTime  作业执行结束时间，十三位时间戳。
    * clusterId  作业所属集群ID。
    * groupId  作业执行组ID
    * jarPath  执行程序jar包或sql文件地址。
    * input  数据输入地址。
    * output  数据输出地址。
    * jobLog  作业日志存储地址
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp - 6：Spark Script - 7：Spark SQL（该接口当前不支持）
    * fileAction  导入导出数据。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。该参数可为空。
    * hql  HQL脚本语句。
    * jobState  作业状态编码：  - 1：Terminated表示已终止的作业状态 - 2：Running表示运行中的作业状态 - 3：Completed表示已完成的作业状态 - 4：Abnormal表示异常的作业状态
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  Hive脚本地址。
    * createBy  创建作业的用户ID。
    * finishedStep  当前已完成的步骤数。
    * jobMainId  作业主ID。
    * jobStepId  作业步骤ID。
    * postponeAt  延迟时间，十三位时间戳。
    * stepName  作业步骤名。
    * stepNum  步骤数量。
    * taskNum  任务数量。
    * updateBy  更新作业的用户ID。
    * spendTime  作业执行持续时间，单位：秒。
    * stepSeq  步骤序列号。
    * progress  作业执行进度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'tenantId' => 'tenant_id',
            'jobId' => 'job_id',
            'jobName' => 'job_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'clusterId' => 'cluster_id',
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
            'spendTime' => 'spend_time',
            'stepSeq' => 'step_seq',
            'progress' => 'progress'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  作业ID。
    * createAt  作业创建时间，十三位时间戳。
    * updateAt  作业更新时间，十三位时间戳。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业ID。
    * jobName  作业名称。
    * startTime  作业执行开始时间，十三位时间戳。
    * endTime  作业执行结束时间，十三位时间戳。
    * clusterId  作业所属集群ID。
    * groupId  作业执行组ID
    * jarPath  执行程序jar包或sql文件地址。
    * input  数据输入地址。
    * output  数据输出地址。
    * jobLog  作业日志存储地址
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp - 6：Spark Script - 7：Spark SQL（该接口当前不支持）
    * fileAction  导入导出数据。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。该参数可为空。
    * hql  HQL脚本语句。
    * jobState  作业状态编码：  - 1：Terminated表示已终止的作业状态 - 2：Running表示运行中的作业状态 - 3：Completed表示已完成的作业状态 - 4：Abnormal表示异常的作业状态
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  Hive脚本地址。
    * createBy  创建作业的用户ID。
    * finishedStep  当前已完成的步骤数。
    * jobMainId  作业主ID。
    * jobStepId  作业步骤ID。
    * postponeAt  延迟时间，十三位时间戳。
    * stepName  作业步骤名。
    * stepNum  步骤数量。
    * taskNum  任务数量。
    * updateBy  更新作业的用户ID。
    * spendTime  作业执行持续时间，单位：秒。
    * stepSeq  步骤序列号。
    * progress  作业执行进度。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'tenantId' => 'setTenantId',
            'jobId' => 'setJobId',
            'jobName' => 'setJobName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'clusterId' => 'setClusterId',
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
            'spendTime' => 'setSpendTime',
            'stepSeq' => 'setStepSeq',
            'progress' => 'setProgress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  作业ID。
    * createAt  作业创建时间，十三位时间戳。
    * updateAt  作业更新时间，十三位时间戳。
    * tenantId  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    * jobId  作业ID。
    * jobName  作业名称。
    * startTime  作业执行开始时间，十三位时间戳。
    * endTime  作业执行结束时间，十三位时间戳。
    * clusterId  作业所属集群ID。
    * groupId  作业执行组ID
    * jarPath  执行程序jar包或sql文件地址。
    * input  数据输入地址。
    * output  数据输出地址。
    * jobLog  作业日志存储地址
    * jobType  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp - 6：Spark Script - 7：Spark SQL（该接口当前不支持）
    * fileAction  导入导出数据。
    * arguments  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。该参数可为空。
    * hql  HQL脚本语句。
    * jobState  作业状态编码：  - 1：Terminated表示已终止的作业状态 - 2：Running表示运行中的作业状态 - 3：Completed表示已完成的作业状态 - 4：Abnormal表示异常的作业状态
    * jobFinalStatus  作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
    * hiveScriptPath  Hive脚本地址。
    * createBy  创建作业的用户ID。
    * finishedStep  当前已完成的步骤数。
    * jobMainId  作业主ID。
    * jobStepId  作业步骤ID。
    * postponeAt  延迟时间，十三位时间戳。
    * stepName  作业步骤名。
    * stepNum  步骤数量。
    * taskNum  任务数量。
    * updateBy  更新作业的用户ID。
    * spendTime  作业执行持续时间，单位：秒。
    * stepSeq  步骤序列号。
    * progress  作业执行进度。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'tenantId' => 'getTenantId',
            'jobId' => 'getJobId',
            'jobName' => 'getJobName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'clusterId' => 'getClusterId',
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
            'spendTime' => 'getSpendTime',
            'stepSeq' => 'getStepSeq',
            'progress' => 'getProgress'
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
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobName'] = isset($data['jobName']) ? $data['jobName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
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
        $this->container['spendTime'] = isset($data['spendTime']) ? $data['spendTime'] : null;
        $this->container['stepSeq'] = isset($data['stepSeq']) ? $data['stepSeq'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['createAt'] === null) {
            $invalidProperties[] = "'createAt' can't be null";
        }
        if ($this->container['updateAt'] === null) {
            $invalidProperties[] = "'updateAt' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['jobName'] === null) {
            $invalidProperties[] = "'jobName' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['jarPath'] === null) {
            $invalidProperties[] = "'jarPath' can't be null";
        }
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
        if ($this->container['jobLog'] === null) {
            $invalidProperties[] = "'jobLog' can't be null";
        }
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
        if ($this->container['fileAction'] === null) {
            $invalidProperties[] = "'fileAction' can't be null";
        }
        if ($this->container['arguments'] === null) {
            $invalidProperties[] = "'arguments' can't be null";
        }
        if ($this->container['hql'] === null) {
            $invalidProperties[] = "'hql' can't be null";
        }
        if ($this->container['jobState'] === null) {
            $invalidProperties[] = "'jobState' can't be null";
        }
        if ($this->container['jobFinalStatus'] === null) {
            $invalidProperties[] = "'jobFinalStatus' can't be null";
        }
        if ($this->container['hiveScriptPath'] === null) {
            $invalidProperties[] = "'hiveScriptPath' can't be null";
        }
        if ($this->container['createBy'] === null) {
            $invalidProperties[] = "'createBy' can't be null";
        }
        if ($this->container['finishedStep'] === null) {
            $invalidProperties[] = "'finishedStep' can't be null";
        }
        if ($this->container['jobMainId'] === null) {
            $invalidProperties[] = "'jobMainId' can't be null";
        }
        if ($this->container['jobStepId'] === null) {
            $invalidProperties[] = "'jobStepId' can't be null";
        }
        if ($this->container['postponeAt'] === null) {
            $invalidProperties[] = "'postponeAt' can't be null";
        }
        if ($this->container['stepName'] === null) {
            $invalidProperties[] = "'stepName' can't be null";
        }
        if ($this->container['stepNum'] === null) {
            $invalidProperties[] = "'stepNum' can't be null";
        }
        if ($this->container['taskNum'] === null) {
            $invalidProperties[] = "'taskNum' can't be null";
        }
        if ($this->container['updateBy'] === null) {
            $invalidProperties[] = "'updateBy' can't be null";
        }
        if ($this->container['spendTime'] === null) {
            $invalidProperties[] = "'spendTime' can't be null";
        }
        if ($this->container['stepSeq'] === null) {
            $invalidProperties[] = "'stepSeq' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
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
    * Gets id
    *  作业ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 作业ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createAt
    *  作业创建时间，十三位时间戳。
    *
    * @return int
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int $createAt 作业创建时间，十三位时间戳。
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  作业更新时间，十三位时间戳。
    *
    * @return int
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int $updateAt 作业更新时间，十三位时间戳。
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 项目编号。获取方法，请参见[获取项目ID](https://support.huaweicloud.com/api-mrs/mrs_02_0011.html)。
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
    *  作业ID。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 作业ID。
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
    *  作业名称。
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
    * @param string $jobName 作业名称。
    *
    * @return $this
    */
    public function setJobName($jobName)
    {
        $this->container['jobName'] = $jobName;
        return $this;
    }

    /**
    * Gets startTime
    *  作业执行开始时间，十三位时间戳。
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 作业执行开始时间，十三位时间戳。
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
    *  作业执行结束时间，十三位时间戳。
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 作业执行结束时间，十三位时间戳。
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
    *  作业所属集群ID。
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
    * @param string $clusterId 作业所属集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets groupId
    *  作业执行组ID
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 作业执行组ID
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
    *  执行程序jar包或sql文件地址。
    *
    * @return string
    */
    public function getJarPath()
    {
        return $this->container['jarPath'];
    }

    /**
    * Sets jarPath
    *
    * @param string $jarPath 执行程序jar包或sql文件地址。
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
    *  数据输入地址。
    *
    * @return string
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param string $input 数据输入地址。
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
    *  数据输出地址。
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
    * @param string|null $output 数据输出地址。
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
    *  作业日志存储地址
    *
    * @return string
    */
    public function getJobLog()
    {
        return $this->container['jobLog'];
    }

    /**
    * Sets jobLog
    *
    * @param string $jobLog 作业日志存储地址
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
    *  作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp - 6：Spark Script - 7：Spark SQL（该接口当前不支持）
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
    * @param int $jobType 作业类型码。  - 1：MapReduce - 2：Spark - 3：Hive Script - 4：HiveSQL（当前不支持） - 5：DistCp - 6：Spark Script - 7：Spark SQL（该接口当前不支持）
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
    *  导入导出数据。
    *
    * @return string
    */
    public function getFileAction()
    {
        return $this->container['fileAction'];
    }

    /**
    * Sets fileAction
    *
    * @param string $fileAction 导入导出数据。
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
    *  程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。该参数可为空。
    *
    * @return string
    */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
    * Sets arguments
    *
    * @param string $arguments 程序执行的关键参数，该参数由用户程序内的函数指定，MRS只负责参数的传入。该参数可为空。
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
    *  HQL脚本语句。
    *
    * @return string
    */
    public function getHql()
    {
        return $this->container['hql'];
    }

    /**
    * Sets hql
    *
    * @param string $hql HQL脚本语句。
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
    *  作业状态编码：  - 1：Terminated表示已终止的作业状态 - 2：Running表示运行中的作业状态 - 3：Completed表示已完成的作业状态 - 4：Abnormal表示异常的作业状态
    *
    * @return int
    */
    public function getJobState()
    {
        return $this->container['jobState'];
    }

    /**
    * Sets jobState
    *
    * @param int $jobState 作业状态编码：  - 1：Terminated表示已终止的作业状态 - 2：Running表示运行中的作业状态 - 3：Completed表示已完成的作业状态 - 4：Abnormal表示异常的作业状态
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
    * @return int
    */
    public function getJobFinalStatus()
    {
        return $this->container['jobFinalStatus'];
    }

    /**
    * Sets jobFinalStatus
    *
    * @param int $jobFinalStatus 作业最终状态码。  - 0：未完成 - 1：执行错误，终止执行 - 2：执行完成并且成功 - 3：已取消
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
    *  Hive脚本地址。
    *
    * @return string
    */
    public function getHiveScriptPath()
    {
        return $this->container['hiveScriptPath'];
    }

    /**
    * Sets hiveScriptPath
    *
    * @param string $hiveScriptPath Hive脚本地址。
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
    *  创建作业的用户ID。
    *
    * @return string
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string $createBy 创建作业的用户ID。
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
    *  当前已完成的步骤数。
    *
    * @return int
    */
    public function getFinishedStep()
    {
        return $this->container['finishedStep'];
    }

    /**
    * Sets finishedStep
    *
    * @param int $finishedStep 当前已完成的步骤数。
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
    *  作业主ID。
    *
    * @return string
    */
    public function getJobMainId()
    {
        return $this->container['jobMainId'];
    }

    /**
    * Sets jobMainId
    *
    * @param string $jobMainId 作业主ID。
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
    *  作业步骤ID。
    *
    * @return string
    */
    public function getJobStepId()
    {
        return $this->container['jobStepId'];
    }

    /**
    * Sets jobStepId
    *
    * @param string $jobStepId 作业步骤ID。
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
    *  延迟时间，十三位时间戳。
    *
    * @return int
    */
    public function getPostponeAt()
    {
        return $this->container['postponeAt'];
    }

    /**
    * Sets postponeAt
    *
    * @param int $postponeAt 延迟时间，十三位时间戳。
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
    *  作业步骤名。
    *
    * @return string
    */
    public function getStepName()
    {
        return $this->container['stepName'];
    }

    /**
    * Sets stepName
    *
    * @param string $stepName 作业步骤名。
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
    *  步骤数量。
    *
    * @return int
    */
    public function getStepNum()
    {
        return $this->container['stepNum'];
    }

    /**
    * Sets stepNum
    *
    * @param int $stepNum 步骤数量。
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
    *  任务数量。
    *
    * @return int
    */
    public function getTaskNum()
    {
        return $this->container['taskNum'];
    }

    /**
    * Sets taskNum
    *
    * @param int $taskNum 任务数量。
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
    * @return string
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string $updateBy 更新作业的用户ID。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets spendTime
    *  作业执行持续时间，单位：秒。
    *
    * @return float
    */
    public function getSpendTime()
    {
        return $this->container['spendTime'];
    }

    /**
    * Sets spendTime
    *
    * @param float $spendTime 作业执行持续时间，单位：秒。
    *
    * @return $this
    */
    public function setSpendTime($spendTime)
    {
        $this->container['spendTime'] = $spendTime;
        return $this;
    }

    /**
    * Gets stepSeq
    *  步骤序列号。
    *
    * @return int
    */
    public function getStepSeq()
    {
        return $this->container['stepSeq'];
    }

    /**
    * Sets stepSeq
    *
    * @param int $stepSeq 步骤序列号。
    *
    * @return $this
    */
    public function setStepSeq($stepSeq)
    {
        $this->container['stepSeq'] = $stepSeq;
        return $this;
    }

    /**
    * Gets progress
    *  作业执行进度。
    *
    * @return string
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string $progress 作业执行进度。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
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

