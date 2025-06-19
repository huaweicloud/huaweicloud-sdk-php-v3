<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlinkJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlinkJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobType  参数解释:  作业类型 示例: flink_jar_job 约束限制:  无 取值范围: flink_sql_job（flink sql作业） flink_opensource_sql_job（flink opensource sql作业） flink_sql_edge_job（flink sql边缘作业） flink_jar_job（flink自定义作业） 默认取值: 无
    * limit  参数解释:  返回的数据条数。默认为10 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 10
    * name  参数解释:  作业名称 示例: myjob 约束限制:  长度在[0,57]的字符串 取值范围: 无 默认取值: 无
    * offset  参数解释:  作业偏移量 示例: 10000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    * order  参数解释:  查询结果排序 示例: asc 约束限制:  无 取值范围: asc desc 默认取值: desc
    * queueName  参数解释:  队列名称 示例: queue1 约束限制:  无 取值范围: 无 默认取值: 无
    * rootJobId  参数解释:  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业 示例: 548483 约束限制:  无 取值范围: 无 默认取值: 无
    * showDetail  参数解释:  是否返回作业详情信息 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * status  参数解释:  作业状态 示例: job_submitting 约束限制:  无 取值范围: job_init（草稿） job_submitting（提交中） job_submit_fail（提交失败） job_running（运行中） job_running_exception（运行异常） job_downloading（下载中） job_idle（空闲） job_canceling（停止中） job_cancel_success（已停止） job_cancel_fail（停止失败） job_savepointing（保存点创建中） job_arrearage_stopped（因欠费被停止） job_arrearage_recovering（欠费作业恢复中） job_finish（已完成） 默认取值: 无
    * sysEnterpriseProjectName  参数解释:  企业项目名称 示例: DLI 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  标签列表 示例: key_zy1=zy01,AA=aa 约束限制:  符合键值对格式(如“key=value”)的字符串 取值范围: 无 默认取值: 无
    * userName  参数解释:  用户名，可作为筛选条件 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobType' => 'string',
            'limit' => 'int',
            'name' => 'string',
            'offset' => 'int',
            'order' => 'string',
            'queueName' => 'string',
            'rootJobId' => 'int',
            'showDetail' => 'bool',
            'status' => 'string',
            'sysEnterpriseProjectName' => 'string',
            'tags' => 'string',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobType  参数解释:  作业类型 示例: flink_jar_job 约束限制:  无 取值范围: flink_sql_job（flink sql作业） flink_opensource_sql_job（flink opensource sql作业） flink_sql_edge_job（flink sql边缘作业） flink_jar_job（flink自定义作业） 默认取值: 无
    * limit  参数解释:  返回的数据条数。默认为10 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 10
    * name  参数解释:  作业名称 示例: myjob 约束限制:  长度在[0,57]的字符串 取值范围: 无 默认取值: 无
    * offset  参数解释:  作业偏移量 示例: 10000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    * order  参数解释:  查询结果排序 示例: asc 约束限制:  无 取值范围: asc desc 默认取值: desc
    * queueName  参数解释:  队列名称 示例: queue1 约束限制:  无 取值范围: 无 默认取值: 无
    * rootJobId  参数解释:  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业 示例: 548483 约束限制:  无 取值范围: 无 默认取值: 无
    * showDetail  参数解释:  是否返回作业详情信息 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * status  参数解释:  作业状态 示例: job_submitting 约束限制:  无 取值范围: job_init（草稿） job_submitting（提交中） job_submit_fail（提交失败） job_running（运行中） job_running_exception（运行异常） job_downloading（下载中） job_idle（空闲） job_canceling（停止中） job_cancel_success（已停止） job_cancel_fail（停止失败） job_savepointing（保存点创建中） job_arrearage_stopped（因欠费被停止） job_arrearage_recovering（欠费作业恢复中） job_finish（已完成） 默认取值: 无
    * sysEnterpriseProjectName  参数解释:  企业项目名称 示例: DLI 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  标签列表 示例: key_zy1=zy01,AA=aa 约束限制:  符合键值对格式(如“key=value”)的字符串 取值范围: 无 默认取值: 无
    * userName  参数解释:  用户名，可作为筛选条件 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobType' => null,
        'limit' => 'int32',
        'name' => null,
        'offset' => 'int64',
        'order' => null,
        'queueName' => null,
        'rootJobId' => 'int64',
        'showDetail' => null,
        'status' => null,
        'sysEnterpriseProjectName' => null,
        'tags' => null,
        'userName' => null
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
    * jobType  参数解释:  作业类型 示例: flink_jar_job 约束限制:  无 取值范围: flink_sql_job（flink sql作业） flink_opensource_sql_job（flink opensource sql作业） flink_sql_edge_job（flink sql边缘作业） flink_jar_job（flink自定义作业） 默认取值: 无
    * limit  参数解释:  返回的数据条数。默认为10 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 10
    * name  参数解释:  作业名称 示例: myjob 约束限制:  长度在[0,57]的字符串 取值范围: 无 默认取值: 无
    * offset  参数解释:  作业偏移量 示例: 10000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    * order  参数解释:  查询结果排序 示例: asc 约束限制:  无 取值范围: asc desc 默认取值: desc
    * queueName  参数解释:  队列名称 示例: queue1 约束限制:  无 取值范围: 无 默认取值: 无
    * rootJobId  参数解释:  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业 示例: 548483 约束限制:  无 取值范围: 无 默认取值: 无
    * showDetail  参数解释:  是否返回作业详情信息 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * status  参数解释:  作业状态 示例: job_submitting 约束限制:  无 取值范围: job_init（草稿） job_submitting（提交中） job_submit_fail（提交失败） job_running（运行中） job_running_exception（运行异常） job_downloading（下载中） job_idle（空闲） job_canceling（停止中） job_cancel_success（已停止） job_cancel_fail（停止失败） job_savepointing（保存点创建中） job_arrearage_stopped（因欠费被停止） job_arrearage_recovering（欠费作业恢复中） job_finish（已完成） 默认取值: 无
    * sysEnterpriseProjectName  参数解释:  企业项目名称 示例: DLI 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  标签列表 示例: key_zy1=zy01,AA=aa 约束限制:  符合键值对格式(如“key=value”)的字符串 取值范围: 无 默认取值: 无
    * userName  参数解释:  用户名，可作为筛选条件 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobType' => 'job_type',
            'limit' => 'limit',
            'name' => 'name',
            'offset' => 'offset',
            'order' => 'order',
            'queueName' => 'queue_name',
            'rootJobId' => 'root_job_id',
            'showDetail' => 'show_detail',
            'status' => 'status',
            'sysEnterpriseProjectName' => 'sys_enterprise_project_name',
            'tags' => 'tags',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobType  参数解释:  作业类型 示例: flink_jar_job 约束限制:  无 取值范围: flink_sql_job（flink sql作业） flink_opensource_sql_job（flink opensource sql作业） flink_sql_edge_job（flink sql边缘作业） flink_jar_job（flink自定义作业） 默认取值: 无
    * limit  参数解释:  返回的数据条数。默认为10 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 10
    * name  参数解释:  作业名称 示例: myjob 约束限制:  长度在[0,57]的字符串 取值范围: 无 默认取值: 无
    * offset  参数解释:  作业偏移量 示例: 10000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    * order  参数解释:  查询结果排序 示例: asc 约束限制:  无 取值范围: asc desc 默认取值: desc
    * queueName  参数解释:  队列名称 示例: queue1 约束限制:  无 取值范围: 无 默认取值: 无
    * rootJobId  参数解释:  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业 示例: 548483 约束限制:  无 取值范围: 无 默认取值: 无
    * showDetail  参数解释:  是否返回作业详情信息 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * status  参数解释:  作业状态 示例: job_submitting 约束限制:  无 取值范围: job_init（草稿） job_submitting（提交中） job_submit_fail（提交失败） job_running（运行中） job_running_exception（运行异常） job_downloading（下载中） job_idle（空闲） job_canceling（停止中） job_cancel_success（已停止） job_cancel_fail（停止失败） job_savepointing（保存点创建中） job_arrearage_stopped（因欠费被停止） job_arrearage_recovering（欠费作业恢复中） job_finish（已完成） 默认取值: 无
    * sysEnterpriseProjectName  参数解释:  企业项目名称 示例: DLI 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  标签列表 示例: key_zy1=zy01,AA=aa 约束限制:  符合键值对格式(如“key=value”)的字符串 取值范围: 无 默认取值: 无
    * userName  参数解释:  用户名，可作为筛选条件 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $setters = [
            'jobType' => 'setJobType',
            'limit' => 'setLimit',
            'name' => 'setName',
            'offset' => 'setOffset',
            'order' => 'setOrder',
            'queueName' => 'setQueueName',
            'rootJobId' => 'setRootJobId',
            'showDetail' => 'setShowDetail',
            'status' => 'setStatus',
            'sysEnterpriseProjectName' => 'setSysEnterpriseProjectName',
            'tags' => 'setTags',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobType  参数解释:  作业类型 示例: flink_jar_job 约束限制:  无 取值范围: flink_sql_job（flink sql作业） flink_opensource_sql_job（flink opensource sql作业） flink_sql_edge_job（flink sql边缘作业） flink_jar_job（flink自定义作业） 默认取值: 无
    * limit  参数解释:  返回的数据条数。默认为10 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 10
    * name  参数解释:  作业名称 示例: myjob 约束限制:  长度在[0,57]的字符串 取值范围: 无 默认取值: 无
    * offset  参数解释:  作业偏移量 示例: 10000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    * order  参数解释:  查询结果排序 示例: asc 约束限制:  无 取值范围: asc desc 默认取值: desc
    * queueName  参数解释:  队列名称 示例: queue1 约束限制:  无 取值范围: 无 默认取值: 无
    * rootJobId  参数解释:  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业 示例: 548483 约束限制:  无 取值范围: 无 默认取值: 无
    * showDetail  参数解释:  是否返回作业详情信息 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * status  参数解释:  作业状态 示例: job_submitting 约束限制:  无 取值范围: job_init（草稿） job_submitting（提交中） job_submit_fail（提交失败） job_running（运行中） job_running_exception（运行异常） job_downloading（下载中） job_idle（空闲） job_canceling（停止中） job_cancel_success（已停止） job_cancel_fail（停止失败） job_savepointing（保存点创建中） job_arrearage_stopped（因欠费被停止） job_arrearage_recovering（欠费作业恢复中） job_finish（已完成） 默认取值: 无
    * sysEnterpriseProjectName  参数解释:  企业项目名称 示例: DLI 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  参数解释:  标签列表 示例: key_zy1=zy01,AA=aa 约束限制:  符合键值对格式(如“key=value”)的字符串 取值范围: 无 默认取值: 无
    * userName  参数解释:  用户名，可作为筛选条件 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $getters = [
            'jobType' => 'getJobType',
            'limit' => 'getLimit',
            'name' => 'getName',
            'offset' => 'getOffset',
            'order' => 'getOrder',
            'queueName' => 'getQueueName',
            'rootJobId' => 'getRootJobId',
            'showDetail' => 'getShowDetail',
            'status' => 'getStatus',
            'sysEnterpriseProjectName' => 'getSysEnterpriseProjectName',
            'tags' => 'getTags',
            'userName' => 'getUserName'
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
    const JOB_TYPE_FLINK_SQL_JOB = 'flink_sql_job';
    const JOB_TYPE_FLINK_OPENSOURCE_SQL_JOB = 'flink_opensource_sql_job';
    const JOB_TYPE_FLINK_SQL_EDGE_JOB = 'flink_sql_edge_job';
    const JOB_TYPE_FLINK_JAR_JOB = 'flink_jar_job';
    const STATUS_JOB_INIT = 'job_init';
    const STATUS_JOB_SUBMITTING = 'job_submitting';
    const STATUS_JOB_SUBMIT_FAIL = 'job_submit_fail';
    const STATUS_JOB_RUNNING = 'job_running';
    const STATUS_JOB_RUNNING_EXCEPTION = 'job_running_exception';
    const STATUS_JOB_DOWNLOADING = 'job_downloading';
    const STATUS_JOB_IDLE = 'job_idle';
    const STATUS_JOB_CANCELING = 'job_canceling';
    const STATUS_JOB_CANCEL_SUCCESS = 'job_cancel_success';
    const STATUS_JOB_CANCEL_FAIL = 'job_cancel_fail';
    const STATUS_JOB_SAVEPOINTING = 'job_savepointing';
    const STATUS_JOB_ARREARAGE_STOPPED = 'job_arrearage_stopped';
    const STATUS_JOB_ARREARAGE_RECOVERING = 'job_arrearage_recovering';
    const STATUS_JOB_FINISH = 'job_finish';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_FLINK_SQL_JOB,
            self::JOB_TYPE_FLINK_OPENSOURCE_SQL_JOB,
            self::JOB_TYPE_FLINK_SQL_EDGE_JOB,
            self::JOB_TYPE_FLINK_JAR_JOB,
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
            self::STATUS_JOB_INIT,
            self::STATUS_JOB_SUBMITTING,
            self::STATUS_JOB_SUBMIT_FAIL,
            self::STATUS_JOB_RUNNING,
            self::STATUS_JOB_RUNNING_EXCEPTION,
            self::STATUS_JOB_DOWNLOADING,
            self::STATUS_JOB_IDLE,
            self::STATUS_JOB_CANCELING,
            self::STATUS_JOB_CANCEL_SUCCESS,
            self::STATUS_JOB_CANCEL_FAIL,
            self::STATUS_JOB_SAVEPOINTING,
            self::STATUS_JOB_ARREARAGE_STOPPED,
            self::STATUS_JOB_ARREARAGE_RECOVERING,
            self::STATUS_JOB_FINISH,
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['rootJobId'] = isset($data['rootJobId']) ? $data['rootJobId'] : null;
        $this->container['showDetail'] = isset($data['showDetail']) ? $data['showDetail'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sysEnterpriseProjectName'] = isset($data['sysEnterpriseProjectName']) ? $data['sysEnterpriseProjectName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
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

            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 57)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 57.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    * Gets jobType
    *  参数解释:  作业类型 示例: flink_jar_job 约束限制:  无 取值范围: flink_sql_job（flink sql作业） flink_opensource_sql_job（flink opensource sql作业） flink_sql_edge_job（flink sql边缘作业） flink_jar_job（flink自定义作业） 默认取值: 无
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
    * @param string|null $jobType 参数解释:  作业类型 示例: flink_jar_job 约束限制:  无 取值范围: flink_sql_job（flink sql作业） flink_opensource_sql_job（flink opensource sql作业） flink_sql_edge_job（flink sql边缘作业） flink_jar_job（flink自定义作业） 默认取值: 无
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets limit
    *  参数解释:  返回的数据条数。默认为10 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 10
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
    * @param int|null $limit 参数解释:  返回的数据条数。默认为10 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  参数解释:  作业名称 示例: myjob 约束限制:  长度在[0,57]的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 参数解释:  作业名称 示例: myjob 约束限制:  长度在[0,57]的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets offset
    *  参数解释:  作业偏移量 示例: 10000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
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
    * @param int|null $offset 参数解释:  作业偏移量 示例: 10000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets order
    *  参数解释:  查询结果排序 示例: asc 约束限制:  无 取值范围: asc desc 默认取值: desc
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
    * @param string|null $order 参数解释:  查询结果排序 示例: asc 约束限制:  无 取值范围: asc desc 默认取值: desc
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets queueName
    *  参数解释:  队列名称 示例: queue1 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $queueName 参数解释:  队列名称 示例: queue1 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets rootJobId
    *  参数解释:  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业 示例: 548483 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return int|null
    */
    public function getRootJobId()
    {
        return $this->container['rootJobId'];
    }

    /**
    * Sets rootJobId
    *
    * @param int|null $rootJobId 参数解释:  边缘父作业ID, 用于查询指定边缘作业的子作业。不带该参数时, 查询所有非边缘作业和边缘父作业, 不包括边缘子作业 示例: 548483 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setRootJobId($rootJobId)
    {
        $this->container['rootJobId'] = $rootJobId;
        return $this;
    }

    /**
    * Gets showDetail
    *  参数解释:  是否返回作业详情信息 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return bool|null
    */
    public function getShowDetail()
    {
        return $this->container['showDetail'];
    }

    /**
    * Sets showDetail
    *
    * @param bool|null $showDetail 参数解释:  是否返回作业详情信息 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return $this
    */
    public function setShowDetail($showDetail)
    {
        $this->container['showDetail'] = $showDetail;
        return $this;
    }

    /**
    * Gets status
    *  参数解释:  作业状态 示例: job_submitting 约束限制:  无 取值范围: job_init（草稿） job_submitting（提交中） job_submit_fail（提交失败） job_running（运行中） job_running_exception（运行异常） job_downloading（下载中） job_idle（空闲） job_canceling（停止中） job_cancel_success（已停止） job_cancel_fail（停止失败） job_savepointing（保存点创建中） job_arrearage_stopped（因欠费被停止） job_arrearage_recovering（欠费作业恢复中） job_finish（已完成） 默认取值: 无
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
    * @param string|null $status 参数解释:  作业状态 示例: job_submitting 约束限制:  无 取值范围: job_init（草稿） job_submitting（提交中） job_submit_fail（提交失败） job_running（运行中） job_running_exception（运行异常） job_downloading（下载中） job_idle（空闲） job_canceling（停止中） job_cancel_success（已停止） job_cancel_fail（停止失败） job_savepointing（保存点创建中） job_arrearage_stopped（因欠费被停止） job_arrearage_recovering（欠费作业恢复中） job_finish（已完成） 默认取值: 无
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sysEnterpriseProjectName
    *  参数解释:  企业项目名称 示例: DLI 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getSysEnterpriseProjectName()
    {
        return $this->container['sysEnterpriseProjectName'];
    }

    /**
    * Sets sysEnterpriseProjectName
    *
    * @param string|null $sysEnterpriseProjectName 参数解释:  企业项目名称 示例: DLI 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSysEnterpriseProjectName($sysEnterpriseProjectName)
    {
        $this->container['sysEnterpriseProjectName'] = $sysEnterpriseProjectName;
        return $this;
    }

    /**
    * Gets tags
    *  参数解释:  标签列表 示例: key_zy1=zy01,AA=aa 约束限制:  符合键值对格式(如“key=value”)的字符串 取值范围: 无 默认取值: 无
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
    * @param string|null $tags 参数解释:  标签列表 示例: key_zy1=zy01,AA=aa 约束限制:  符合键值对格式(如“key=value”)的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets userName
    *  参数解释:  用户名，可作为筛选条件 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 参数解释:  用户名，可作为筛选条件 示例: ei_dlics_d00352431 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

