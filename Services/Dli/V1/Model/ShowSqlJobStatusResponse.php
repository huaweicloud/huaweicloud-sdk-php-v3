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
    * jobId  作业ID。
    * jobType  作业类型。
    * queueName  作业提交的队列。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * status  此作业的当前状态，包含提交（LAUNCHING）、运行中（RUNNING）、完成（FINISHED）、失败（FAILED）、取消（CANCELLED）。
    * inputRowCount  Insert作业执行过程中扫描的记录条数。
    * badRowCount  Insert作业执行过程中扫描到的错误记录数。
    * inputSize  作业执行过程中扫描文件的大小。
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * detail  SQL查询的相关列信息的Json字符串。
    * statement  作业执行的SQL语句。
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobMode  作业执行方式
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
            'statement' => 'string',
            'isSuccess' => 'bool',
            'message' => 'string',
            'jobMode' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\TmsTagEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  作业ID。
    * jobType  作业类型。
    * queueName  作业提交的队列。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * status  此作业的当前状态，包含提交（LAUNCHING）、运行中（RUNNING）、完成（FINISHED）、失败（FAILED）、取消（CANCELLED）。
    * inputRowCount  Insert作业执行过程中扫描的记录条数。
    * badRowCount  Insert作业执行过程中扫描到的错误记录数。
    * inputSize  作业执行过程中扫描文件的大小。
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * detail  SQL查询的相关列信息的Json字符串。
    * statement  作业执行的SQL语句。
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobMode  作业执行方式
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
    * jobId  作业ID。
    * jobType  作业类型。
    * queueName  作业提交的队列。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * status  此作业的当前状态，包含提交（LAUNCHING）、运行中（RUNNING）、完成（FINISHED）、失败（FAILED）、取消（CANCELLED）。
    * inputRowCount  Insert作业执行过程中扫描的记录条数。
    * badRowCount  Insert作业执行过程中扫描到的错误记录数。
    * inputSize  作业执行过程中扫描文件的大小。
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * detail  SQL查询的相关列信息的Json字符串。
    * statement  作业执行的SQL语句。
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobMode  作业执行方式
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
            'statement' => 'statement',
            'isSuccess' => 'is_success',
            'message' => 'message',
            'jobMode' => 'job_mode',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  作业ID。
    * jobType  作业类型。
    * queueName  作业提交的队列。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * status  此作业的当前状态，包含提交（LAUNCHING）、运行中（RUNNING）、完成（FINISHED）、失败（FAILED）、取消（CANCELLED）。
    * inputRowCount  Insert作业执行过程中扫描的记录条数。
    * badRowCount  Insert作业执行过程中扫描到的错误记录数。
    * inputSize  作业执行过程中扫描文件的大小。
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * detail  SQL查询的相关列信息的Json字符串。
    * statement  作业执行的SQL语句。
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobMode  作业执行方式
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
            'statement' => 'setStatement',
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'jobMode' => 'setJobMode',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  作业ID。
    * jobType  作业类型。
    * queueName  作业提交的队列。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * status  此作业的当前状态，包含提交（LAUNCHING）、运行中（RUNNING）、完成（FINISHED）、失败（FAILED）、取消（CANCELLED）。
    * inputRowCount  Insert作业执行过程中扫描的记录条数。
    * badRowCount  Insert作业执行过程中扫描到的错误记录数。
    * inputSize  作业执行过程中扫描文件的大小。
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * detail  SQL查询的相关列信息的Json字符串。
    * statement  作业执行的SQL语句。
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobMode  作业执行方式
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
    *  作业ID。
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
    * @param string|null $jobId 作业ID。
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
    *  作业类型。
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
    * @param string|null $jobType 作业类型。
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
    *  作业提交的队列。
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
    * @param string|null $queueName 作业提交的队列。
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
    *  提交作业的用户。
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
    * @param string|null $owner 提交作业的用户。
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
    *  作业开始的时间。是单位为“毫秒”的时间戳。
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
    * @param int|null $startTime 作业开始的时间。是单位为“毫秒”的时间戳。
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
    *  作业运行时长，单位毫秒。
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
    * @param int|null $duration 作业运行时长，单位毫秒。
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
    *  此作业的当前状态，包含提交（LAUNCHING）、运行中（RUNNING）、完成（FINISHED）、失败（FAILED）、取消（CANCELLED）。
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
    * @param string|null $status 此作业的当前状态，包含提交（LAUNCHING）、运行中（RUNNING）、完成（FINISHED）、失败（FAILED）、取消（CANCELLED）。
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
    *  Insert作业执行过程中扫描的记录条数。
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
    * @param int|null $inputRowCount Insert作业执行过程中扫描的记录条数。
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
    *  Insert作业执行过程中扫描到的错误记录数。
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
    * @param int|null $badRowCount Insert作业执行过程中扫描到的错误记录数。
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
    *  作业执行过程中扫描文件的大小。
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
    * @param int|null $inputSize 作业执行过程中扫描文件的大小。
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
    *  当前作业返回的结果总条数或insert作业插入的总条数。
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
    * @param int|null $resultCount 当前作业返回的结果总条数或insert作业插入的总条数。
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
    *  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
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
    * @param string|null $databaseName 记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
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
    *  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
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
    * @param string|null $tableName 记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
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
    *  SQL查询的相关列信息的Json字符串。
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
    * @param string|null $detail SQL查询的相关列信息的Json字符串。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets statement
    *  作业执行的SQL语句。
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
    * @param string|null $statement 作业执行的SQL语句。
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
    *  执行请求是否成功。“true”表示请求执行成功。
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
    * @param bool|null $isSuccess 执行请求是否成功。“true”表示请求执行成功。
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
    *  系统提示信息，执行成功时，信息可能为空。
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
    * @param string|null $message 系统提示信息，执行成功时，信息可能为空。
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
    *  作业执行方式
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
    * @param string|null $jobMode 作业执行方式
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
    * @return \HuaweiCloud\SDK\Dli\V1\Model\TmsTagEntity[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\TmsTagEntity[]|null $tags 作业标签
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

