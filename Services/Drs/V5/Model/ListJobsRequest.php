<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * name  任务ID或名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。 其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务： CREATE_FAILED,START_JOB_FAILED,FULL_TRANSFER_FAILED,INCRE_TRANSFER_FAILED,RELEASE_RESOURCE_FAILED,CHANGE_JOB_FAILED,CHILD_TRANSFER_FAILED
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络。 - vpn：VPN、专线网络。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个
    * instanceIp  数据库实例IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'jobType' => 'string',
            'name' => 'string',
            'status' => 'string',
            'engineType' => 'string',
            'netType' => 'string',
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'instanceIds' => 'string[]',
            'instanceIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * name  任务ID或名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。 其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务： CREATE_FAILED,START_JOB_FAILED,FULL_TRANSFER_FAILED,INCRE_TRANSFER_FAILED,RELEASE_RESOURCE_FAILED,CHANGE_JOB_FAILED,CHILD_TRANSFER_FAILED
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络。 - vpn：VPN、专线网络。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个
    * instanceIp  数据库实例IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'jobType' => null,
        'name' => null,
        'status' => null,
        'engineType' => null,
        'netType' => null,
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'sortKey' => null,
        'sortDir' => null,
        'instanceIds' => null,
        'instanceIp' => null
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
    * xLanguage  请求语言类型。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * name  任务ID或名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。 其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务： CREATE_FAILED,START_JOB_FAILED,FULL_TRANSFER_FAILED,INCRE_TRANSFER_FAILED,RELEASE_RESOURCE_FAILED,CHANGE_JOB_FAILED,CHILD_TRANSFER_FAILED
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络。 - vpn：VPN、专线网络。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个
    * instanceIp  数据库实例IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'jobType' => 'job_type',
            'name' => 'name',
            'status' => 'status',
            'engineType' => 'engine_type',
            'netType' => 'net_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'instanceIds' => 'instance_ids',
            'instanceIp' => 'instance_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * name  任务ID或名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。 其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务： CREATE_FAILED,START_JOB_FAILED,FULL_TRANSFER_FAILED,INCRE_TRANSFER_FAILED,RELEASE_RESOURCE_FAILED,CHANGE_JOB_FAILED,CHILD_TRANSFER_FAILED
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络。 - vpn：VPN、专线网络。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个
    * instanceIp  数据库实例IP
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'jobType' => 'setJobType',
            'name' => 'setName',
            'status' => 'setStatus',
            'engineType' => 'setEngineType',
            'netType' => 'setNetType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'instanceIds' => 'setInstanceIds',
            'instanceIp' => 'setInstanceIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。
    * jobType  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    * name  任务ID或名称。
    * status  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。 其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务： CREATE_FAILED,START_JOB_FAILED,FULL_TRANSFER_FAILED,INCRE_TRANSFER_FAILED,RELEASE_RESOURCE_FAILED,CHANGE_JOB_FAILED,CHILD_TRANSFER_FAILED
    * engineType  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。
    * netType  网络类型。取值： - eip：公网网络。 - vpc：VPC网络。 - vpn：VPN、专线网络。
    * enterpriseProjectId  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    * offset  偏移量，表示查询该偏移量后面的记录。
    * limit  查询返回记录的数量限制。
    * sortKey  返回结果按该关键字排序，默认为“create_time”。
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）。
    * instanceIds  数据库实例ID列表，最多支持10个
    * instanceIp  数据库实例IP
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'jobType' => 'getJobType',
            'name' => 'getName',
            'status' => 'getStatus',
            'engineType' => 'getEngineType',
            'netType' => 'getNetType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'instanceIds' => 'getInstanceIds',
            'instanceIp' => 'getInstanceIp'
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
    const X_LANGUAGE_EN_US = 'en-us';
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const JOB_TYPE_MIGRATION = 'migration';
    const JOB_TYPE_SYNC = 'sync';
    const JOB_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const STATUS_CREATING = 'CREATING';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_CONFIGURATION = 'CONFIGURATION';
    const STATUS_STARTJOBING = 'STARTJOBING';
    const STATUS_WAITING_FOR_START = 'WAITING_FOR_START';
    const STATUS_START_JOB_FAILED = 'START_JOB_FAILED';
    const STATUS_FULL_TRANSFER_STARTED = 'FULL_TRANSFER_STARTED';
    const STATUS_FULL_TRANSFER_FAILED = 'FULL_TRANSFER_FAILED';
    const STATUS_FULL_TRANSFER_COMPLETE = 'FULL_TRANSFER_COMPLETE';
    const STATUS_INCRE_TRANSFER_STARTED = 'INCRE_TRANSFER_STARTED';
    const STATUS_INCRE_TRANSFER_FAILED = 'INCRE_TRANSFER_FAILED';
    const STATUS_RELEASE_RESOURCE_STARTED = 'RELEASE_RESOURCE_STARTED';
    const STATUS_RELEASE_RESOURCE_FAILED = 'RELEASE_RESOURCE_FAILED';
    const STATUS_RELEASE_RESOURCE_COMPLETE = 'RELEASE_RESOURCE_COMPLETE';
    const STATUS_CHANGE_JOB_STARTED = 'CHANGE_JOB_STARTED';
    const STATUS_CHANGE_JOB_FAILED = 'CHANGE_JOB_FAILED';
    const STATUS_CHILD_TRANSFER_STARTING = 'CHILD_TRANSFER_STARTING';
    const STATUS_CHILD_TRANSFER_STARTED = 'CHILD_TRANSFER_STARTED';
    const STATUS_CHILD_TRANSFER_COMPLETE = 'CHILD_TRANSFER_COMPLETE';
    const STATUS_CHILD_TRANSFER_FAILED = 'CHILD_TRANSFER_FAILED';
    const STATUS_RELEASE_CHILD_TRANSFER_STARTED = 'RELEASE_CHILD_TRANSFER_STARTED';
    const STATUS_RELEASE_CHILD_TRANSFER_COMPLETE = 'RELEASE_CHILD_TRANSFER_COMPLETE';
    const ENGINE_TYPE_ORACLE_TO_GAUSSDBV5 = 'oracle-to-gaussdbv5';
    const ENGINE_TYPE_REDIS_TO_GAUSSREDIS = 'redis-to-gaussredis';
    const ENGINE_TYPE_REDISCLUSTER_TO_GAUSSREDIS = 'rediscluster-to-gaussredis';
    const NET_TYPE_EIP = 'eip';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_VPN = 'vpn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_EN_US,
            self::X_LANGUAGE_ZH_CN,
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
            self::JOB_TYPE_MIGRATION,
            self::JOB_TYPE_SYNC,
            self::JOB_TYPE_CLOUD_DATA_GUARD,
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
            self::STATUS_CREATING,
            self::STATUS_CREATE_FAILED,
            self::STATUS_CONFIGURATION,
            self::STATUS_STARTJOBING,
            self::STATUS_WAITING_FOR_START,
            self::STATUS_START_JOB_FAILED,
            self::STATUS_FULL_TRANSFER_STARTED,
            self::STATUS_FULL_TRANSFER_FAILED,
            self::STATUS_FULL_TRANSFER_COMPLETE,
            self::STATUS_INCRE_TRANSFER_STARTED,
            self::STATUS_INCRE_TRANSFER_FAILED,
            self::STATUS_RELEASE_RESOURCE_STARTED,
            self::STATUS_RELEASE_RESOURCE_FAILED,
            self::STATUS_RELEASE_RESOURCE_COMPLETE,
            self::STATUS_CHANGE_JOB_STARTED,
            self::STATUS_CHANGE_JOB_FAILED,
            self::STATUS_CHILD_TRANSFER_STARTING,
            self::STATUS_CHILD_TRANSFER_STARTED,
            self::STATUS_CHILD_TRANSFER_COMPLETE,
            self::STATUS_CHILD_TRANSFER_FAILED,
            self::STATUS_RELEASE_CHILD_TRANSFER_STARTED,
            self::STATUS_RELEASE_CHILD_TRANSFER_COMPLETE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_ORACLE_TO_GAUSSDBV5,
            self::ENGINE_TYPE_REDIS_TO_GAUSSREDIS,
            self::ENGINE_TYPE_REDISCLUSTER_TO_GAUSSREDIS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetTypeAllowableValues()
    {
        return [
            self::NET_TYPE_EIP,
            self::NET_TYPE_VPC,
            self::NET_TYPE_VPN,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['instanceIp'] = isset($data['instanceIp']) ? $data['instanceIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
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

            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
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
    * Gets xLanguage
    *  请求语言类型。
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets jobType
    *  任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 任务场景。取值： - migration：实时迁移。 - sync：实时同步。 - cloudDataGuard：实时灾备。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets name
    *  任务ID或名称。
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
    * @param string|null $name 任务ID或名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。 其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务： CREATE_FAILED,START_JOB_FAILED,FULL_TRANSFER_FAILED,INCRE_TRANSFER_FAILED,RELEASE_RESOURCE_FAILED,CHANGE_JOB_FAILED,CHILD_TRANSFER_FAILED
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
    * @param string|null $status 任务状态。取值： - CREATING：创建中。 - CREATE_FAILED：创建失败。 - CONFIGURATION：配置中。 - STARTJOBING：启动中。 - WAITING_FOR_START：等待启动中。 - START_JOB_FAILED：任务启动失败。 - FULL_TRANSFER_STARTED：全量迁移中，灾备场景为初始化。 - FULL_TRANSFER_FAILED：全量迁移失败，灾备场景为初始化失败。 - FULL_TRANSFER_COMPLETE：全量迁移完成，灾备场景为初始化完成。 - INCRE_TRANSFER_STARTED：增量迁移中，灾备场景为灾备中。 - INCRE_TRANSFER_FAILED：增量迁移失败，灾备场景为灾备异常。 - RELEASE_RESOURCE_STARTED：结束任务中。 - RELEASE_RESOURCE_FAILED：结束任务失败。 - RELEASE_RESOURCE_COMPLETE：已结束。 - CHANGE_JOB_STARTED：任务变更中。 - CHANGE_JOB_FAILED：任务变更失败。 - CHILD_TRANSFER_STARTING：子任务启动中。 - CHILD_TRANSFER_STARTED：子任务迁移中。 - CHILD_TRANSFER_COMPLETE：子任务迁移完成。 - CHILD_TRANSFER_FAILED：子任务迁移失败。 - RELEASE_CHILD_TRANSFER_STARTED：子任务结束中。 - RELEASE_CHILD_TRANSFER_COMPLETE：子任务已结束。 其中，异常状态可单独查询，也可以通过以下方式查询全部异常任务： CREATE_FAILED,START_JOB_FAILED,FULL_TRANSFER_FAILED,INCRE_TRANSFER_FAILED,RELEASE_RESOURCE_FAILED,CHANGE_JOB_FAILED,CHILD_TRANSFER_FAILED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。
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
    * @param string|null $engineType 引擎类型。取值： - oracle-to-gaussdbv5：Oracle同步到GaussDB分布式版，实时同步场景使用。 - redis-to-gaussredis：Redis同步到GeminiDB Redis，实时迁移场景使用。 - rediscluster-to-gaussredis：Redis集群同步到GeminiDB Redis，实时迁移场景使用。
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets netType
    *  网络类型。取值： - eip：公网网络。 - vpc：VPC网络。 - vpn：VPN、专线网络。
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType 网络类型。取值： - eip：公网网络。 - vpc：VPC网络。 - vpn：VPN、专线网络。
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。 缺省值：\"\"，表示查询所有企业项目任务。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示查询该偏移量后面的记录。
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
    * @param int|null $offset 偏移量，表示查询该偏移量后面的记录。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回记录的数量限制。
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
    * @param int|null $limit 查询返回记录的数量限制。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序，默认为“create_time”。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 返回结果按该关键字排序，默认为“create_time”。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 降序或升序（分别对应desc和asc，默认为“desc”）。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets instanceIds
    *  数据库实例ID列表，最多支持10个
    *
    * @return string[]|null
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[]|null $instanceIds 数据库实例ID列表，最多支持10个
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets instanceIp
    *  数据库实例IP
    *
    * @return string|null
    */
    public function getInstanceIp()
    {
        return $this->container['instanceIp'];
    }

    /**
    * Sets instanceIp
    *
    * @param string|null $instanceIp 数据库实例IP
    *
    * @return $this
    */
    public function setInstanceIp($instanceIp)
    {
        $this->container['instanceIp'] = $instanceIp;
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

