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
    * currentPage  当前页码，默认为第一页。
    * dbName  dbName
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * engineType  engineType
    * jobStatus  jobStatus
    * jobType  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT，若要查询所有类型的作业，则传入ALL。
    * order  指定作业排序方式，默认为start_time_desc（作业提交时间降序），支持duration_desc（作业运行时长降序）、duration_asc（作业运行时长升序）、start_time_desc（作业提交时间降序）、start_time_asc（作业提交时间升序）四种排序方式。
    * owner  提交作业的用户名称
    * pageSize  每页显示的最大作业个数，范围: [1, 100]。默认值：50。
    * queueName  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业。
    * sqlPattern  指定sql片段作为作业过滤条件，不区分大小写。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * tableName  tableName
    * tags  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentPage' => 'int',
            'dbName' => 'string',
            'end' => 'int',
            'engineType' => 'string',
            'jobStatus' => 'string',
            'jobType' => 'string',
            'order' => 'string',
            'owner' => 'string',
            'pageSize' => 'int',
            'queueName' => 'string',
            'sqlPattern' => 'string',
            'start' => 'int',
            'tableName' => 'string',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentPage  当前页码，默认为第一页。
    * dbName  dbName
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * engineType  engineType
    * jobStatus  jobStatus
    * jobType  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT，若要查询所有类型的作业，则传入ALL。
    * order  指定作业排序方式，默认为start_time_desc（作业提交时间降序），支持duration_desc（作业运行时长降序）、duration_asc（作业运行时长升序）、start_time_desc（作业提交时间降序）、start_time_asc（作业提交时间升序）四种排序方式。
    * owner  提交作业的用户名称
    * pageSize  每页显示的最大作业个数，范围: [1, 100]。默认值：50。
    * queueName  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业。
    * sqlPattern  指定sql片段作为作业过滤条件，不区分大小写。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * tableName  tableName
    * tags  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentPage' => 'int32',
        'dbName' => null,
        'end' => 'int64',
        'engineType' => null,
        'jobStatus' => null,
        'jobType' => null,
        'order' => null,
        'owner' => null,
        'pageSize' => 'int32',
        'queueName' => null,
        'sqlPattern' => null,
        'start' => 'int64',
        'tableName' => null,
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
    * currentPage  当前页码，默认为第一页。
    * dbName  dbName
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * engineType  engineType
    * jobStatus  jobStatus
    * jobType  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT，若要查询所有类型的作业，则传入ALL。
    * order  指定作业排序方式，默认为start_time_desc（作业提交时间降序），支持duration_desc（作业运行时长降序）、duration_asc（作业运行时长升序）、start_time_desc（作业提交时间降序）、start_time_asc（作业提交时间升序）四种排序方式。
    * owner  提交作业的用户名称
    * pageSize  每页显示的最大作业个数，范围: [1, 100]。默认值：50。
    * queueName  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业。
    * sqlPattern  指定sql片段作为作业过滤条件，不区分大小写。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * tableName  tableName
    * tags  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentPage' => 'current-page',
            'dbName' => 'db_name',
            'end' => 'end',
            'engineType' => 'engine-type',
            'jobStatus' => 'job-status',
            'jobType' => 'job-type',
            'order' => 'order',
            'owner' => 'owner',
            'pageSize' => 'page-size',
            'queueName' => 'queue_name',
            'sqlPattern' => 'sql_pattern',
            'start' => 'start',
            'tableName' => 'table_name',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentPage  当前页码，默认为第一页。
    * dbName  dbName
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * engineType  engineType
    * jobStatus  jobStatus
    * jobType  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT，若要查询所有类型的作业，则传入ALL。
    * order  指定作业排序方式，默认为start_time_desc（作业提交时间降序），支持duration_desc（作业运行时长降序）、duration_asc（作业运行时长升序）、start_time_desc（作业提交时间降序）、start_time_asc（作业提交时间升序）四种排序方式。
    * owner  提交作业的用户名称
    * pageSize  每页显示的最大作业个数，范围: [1, 100]。默认值：50。
    * queueName  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业。
    * sqlPattern  指定sql片段作为作业过滤条件，不区分大小写。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * tableName  tableName
    * tags  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值。
    *
    * @var string[]
    */
    protected static $setters = [
            'currentPage' => 'setCurrentPage',
            'dbName' => 'setDbName',
            'end' => 'setEnd',
            'engineType' => 'setEngineType',
            'jobStatus' => 'setJobStatus',
            'jobType' => 'setJobType',
            'order' => 'setOrder',
            'owner' => 'setOwner',
            'pageSize' => 'setPageSize',
            'queueName' => 'setQueueName',
            'sqlPattern' => 'setSqlPattern',
            'start' => 'setStart',
            'tableName' => 'setTableName',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentPage  当前页码，默认为第一页。
    * dbName  dbName
    * end  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
    * engineType  engineType
    * jobStatus  jobStatus
    * jobType  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT，若要查询所有类型的作业，则传入ALL。
    * order  指定作业排序方式，默认为start_time_desc（作业提交时间降序），支持duration_desc（作业运行时长降序）、duration_asc（作业运行时长升序）、start_time_desc（作业提交时间降序）、start_time_asc（作业提交时间升序）四种排序方式。
    * owner  提交作业的用户名称
    * pageSize  每页显示的最大作业个数，范围: [1, 100]。默认值：50。
    * queueName  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业。
    * sqlPattern  指定sql片段作为作业过滤条件，不区分大小写。
    * start  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
    * tableName  tableName
    * tags  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值。
    *
    * @var string[]
    */
    protected static $getters = [
            'currentPage' => 'getCurrentPage',
            'dbName' => 'getDbName',
            'end' => 'getEnd',
            'engineType' => 'getEngineType',
            'jobStatus' => 'getJobStatus',
            'jobType' => 'getJobType',
            'order' => 'getOrder',
            'owner' => 'getOwner',
            'pageSize' => 'getPageSize',
            'queueName' => 'getQueueName',
            'sqlPattern' => 'getSqlPattern',
            'start' => 'getStart',
            'tableName' => 'getTableName',
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
    const JOB_TYPE_ALL = 'ALL';
    const JOB_TYPE_DDL = 'DDL';
    const JOB_TYPE_DCL = 'DCL';
    const JOB_TYPE_IMPORT = 'IMPORT';
    const JOB_TYPE_EXPORT = 'EXPORT';
    const JOB_TYPE_QUERY = 'QUERY';
    const JOB_TYPE_INSERT = 'INSERT';
    const ORDER_DURATION_DESC = 'duration_desc';
    const ORDER_DURATION_ASC = 'duration_asc';
    const ORDER_START_TIME_DESC = 'start_time_desc';
    const ORDER_START_TIME_ASC = 'start_time_asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobTypeAllowableValues()
    {
        return [
            self::JOB_TYPE_ALL,
            self::JOB_TYPE_DDL,
            self::JOB_TYPE_DCL,
            self::JOB_TYPE_IMPORT,
            self::JOB_TYPE_EXPORT,
            self::JOB_TYPE_QUERY,
            self::JOB_TYPE_INSERT,
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
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['sqlPattern'] = isset($data['sqlPattern']) ? $data['sqlPattern'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
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
    *  当前页码，默认为第一页。
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
    * @param int|null $currentPage 当前页码，默认为第一页。
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
    *  dbName
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
    * @param string|null $dbName dbName
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
    *  用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
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
    * @param int|null $end 用于查询开始时间在该时间点之前的作业。时间格式为unix时间戳，单位：毫秒。
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
    *  engineType
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
    * @param string|null $engineType engineType
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
    *  jobStatus
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
    * @param string|null $jobStatus jobStatus
    *
    * @return $this
    */
    public function setJobStatus($jobStatus)
    {
        $this->container['jobStatus'] = $jobStatus;
        return $this;
    }

    /**
    * Gets jobType
    *  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT，若要查询所有类型的作业，则传入ALL。
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
    * @param string|null $jobType 指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT，若要查询所有类型的作业，则传入ALL。
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
    *  指定作业排序方式，默认为start_time_desc（作业提交时间降序），支持duration_desc（作业运行时长降序）、duration_asc（作业运行时长升序）、start_time_desc（作业提交时间降序）、start_time_asc（作业提交时间升序）四种排序方式。
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
    * @param string|null $order 指定作业排序方式，默认为start_time_desc（作业提交时间降序），支持duration_desc（作业运行时长降序）、duration_asc（作业运行时长升序）、start_time_desc（作业提交时间降序）、start_time_asc（作业提交时间升序）四种排序方式。
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
    *  提交作业的用户名称
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
    * @param string|null $owner 提交作业的用户名称
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
    *  每页显示的最大作业个数，范围: [1, 100]。默认值：50。
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
    * @param int|null $pageSize 每页显示的最大作业个数，范围: [1, 100]。默认值：50。
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
    *  指定queue_name作为作业过滤条件，查询在指定queue上运行的作业。
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
    * @param string|null $queueName 指定queue_name作为作业过滤条件，查询在指定queue上运行的作业。
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
    *  指定sql片段作为作业过滤条件，不区分大小写。
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
    * @param string|null $sqlPattern 指定sql片段作为作业过滤条件，不区分大小写。
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
    *  用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
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
    * @param int|null $start 用于查询开始时间在该时间点之后的作业。时间格式为unix时间戳，单位：毫秒。
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
    *  tableName
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
    * @param string|null $tableName tableName
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
    *  指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值。
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
    * @param string|null $tags 指定作业标签作为过滤条件，支持多标签过滤。格式为“key=value”，如：GET /v1.0/{project_id}/jobs?tags=k1%3Dv1，“=”需要转义为“%3D”，“k1”为标签键，“v1”为标签值。
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

