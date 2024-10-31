<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLimitTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLimitTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  限流任务ID。
    * taskScope  任务限流范围，与请求参数相同。
    * limitType  任务限流类型，与请求参数相同。
    * limitTypeValue  任务限流类型值，与请求参数相同。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    * taskName  限流任务名。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值且与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数，与请求参数相同。
    * cpuUtilization  cpu利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * startTime  限流任务开始时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表，如果类型为SQLID，必返。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskScope' => 'string',
            'limitType' => 'string',
            'limitTypeValue' => 'string',
            'databases' => 'string',
            'taskName' => 'string',
            'sqlModel' => 'string',
            'keyWords' => 'string[]',
            'status' => 'string',
            'instanceId' => 'string',
            'ruleName' => 'string',
            'parallelSize' => 'int',
            'cpuUtilization' => 'int',
            'memoryUtilization' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'creator' => 'string',
            'modifier' => 'string',
            'nodeInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CreateLimitTaskNodeResult[]',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  限流任务ID。
    * taskScope  任务限流范围，与请求参数相同。
    * limitType  任务限流类型，与请求参数相同。
    * limitTypeValue  任务限流类型值，与请求参数相同。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    * taskName  限流任务名。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值且与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数，与请求参数相同。
    * cpuUtilization  cpu利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * startTime  限流任务开始时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表，如果类型为SQLID，必返。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskScope' => null,
        'limitType' => null,
        'limitTypeValue' => null,
        'databases' => null,
        'taskName' => null,
        'sqlModel' => null,
        'keyWords' => null,
        'status' => null,
        'instanceId' => null,
        'ruleName' => null,
        'parallelSize' => null,
        'cpuUtilization' => null,
        'memoryUtilization' => null,
        'startTime' => null,
        'endTime' => null,
        'created' => null,
        'updated' => null,
        'creator' => null,
        'modifier' => null,
        'nodeInfos' => null,
        'jobId' => null
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
    * taskId  限流任务ID。
    * taskScope  任务限流范围，与请求参数相同。
    * limitType  任务限流类型，与请求参数相同。
    * limitTypeValue  任务限流类型值，与请求参数相同。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    * taskName  限流任务名。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值且与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数，与请求参数相同。
    * cpuUtilization  cpu利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * startTime  限流任务开始时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表，如果类型为SQLID，必返。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskScope' => 'task_scope',
            'limitType' => 'limit_type',
            'limitTypeValue' => 'limit_type_value',
            'databases' => 'databases',
            'taskName' => 'task_name',
            'sqlModel' => 'sql_model',
            'keyWords' => 'key_words',
            'status' => 'status',
            'instanceId' => 'instance_id',
            'ruleName' => 'rule_name',
            'parallelSize' => 'parallel_size',
            'cpuUtilization' => 'cpu_utilization',
            'memoryUtilization' => 'memory_utilization',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'created' => 'created',
            'updated' => 'updated',
            'creator' => 'creator',
            'modifier' => 'modifier',
            'nodeInfos' => 'node_infos',
            'jobId' => 'jobId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  限流任务ID。
    * taskScope  任务限流范围，与请求参数相同。
    * limitType  任务限流类型，与请求参数相同。
    * limitTypeValue  任务限流类型值，与请求参数相同。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    * taskName  限流任务名。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值且与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数，与请求参数相同。
    * cpuUtilization  cpu利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * startTime  限流任务开始时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表，如果类型为SQLID，必返。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskScope' => 'setTaskScope',
            'limitType' => 'setLimitType',
            'limitTypeValue' => 'setLimitTypeValue',
            'databases' => 'setDatabases',
            'taskName' => 'setTaskName',
            'sqlModel' => 'setSqlModel',
            'keyWords' => 'setKeyWords',
            'status' => 'setStatus',
            'instanceId' => 'setInstanceId',
            'ruleName' => 'setRuleName',
            'parallelSize' => 'setParallelSize',
            'cpuUtilization' => 'setCpuUtilization',
            'memoryUtilization' => 'setMemoryUtilization',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'creator' => 'setCreator',
            'modifier' => 'setModifier',
            'nodeInfos' => 'setNodeInfos',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  限流任务ID。
    * taskScope  任务限流范围，与请求参数相同。
    * limitType  任务限流类型，与请求参数相同。
    * limitTypeValue  任务限流类型值，与请求参数相同。
    * databases  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    * taskName  限流任务名。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值且与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数，与请求参数相同。
    * cpuUtilization  cpu利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * startTime  限流任务开始时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表，如果类型为SQLID，必返。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskScope' => 'getTaskScope',
            'limitType' => 'getLimitType',
            'limitTypeValue' => 'getLimitTypeValue',
            'databases' => 'getDatabases',
            'taskName' => 'getTaskName',
            'sqlModel' => 'getSqlModel',
            'keyWords' => 'getKeyWords',
            'status' => 'getStatus',
            'instanceId' => 'getInstanceId',
            'ruleName' => 'getRuleName',
            'parallelSize' => 'getParallelSize',
            'cpuUtilization' => 'getCpuUtilization',
            'memoryUtilization' => 'getMemoryUtilization',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'creator' => 'getCreator',
            'modifier' => 'getModifier',
            'nodeInfos' => 'getNodeInfos',
            'jobId' => 'getJobId'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskScope'] = isset($data['taskScope']) ? $data['taskScope'] : null;
        $this->container['limitType'] = isset($data['limitType']) ? $data['limitType'] : null;
        $this->container['limitTypeValue'] = isset($data['limitTypeValue']) ? $data['limitTypeValue'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['sqlModel'] = isset($data['sqlModel']) ? $data['sqlModel'] : null;
        $this->container['keyWords'] = isset($data['keyWords']) ? $data['keyWords'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['parallelSize'] = isset($data['parallelSize']) ? $data['parallelSize'] : null;
        $this->container['cpuUtilization'] = isset($data['cpuUtilization']) ? $data['cpuUtilization'] : null;
        $this->container['memoryUtilization'] = isset($data['memoryUtilization']) ? $data['memoryUtilization'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['modifier'] = isset($data['modifier']) ? $data['modifier'] : null;
        $this->container['nodeInfos'] = isset($data['nodeInfos']) ? $data['nodeInfos'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets taskId
    *  限流任务ID。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 限流任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskScope
    *  任务限流范围，与请求参数相同。
    *
    * @return string|null
    */
    public function getTaskScope()
    {
        return $this->container['taskScope'];
    }

    /**
    * Sets taskScope
    *
    * @param string|null $taskScope 任务限流范围，与请求参数相同。
    *
    * @return $this
    */
    public function setTaskScope($taskScope)
    {
        $this->container['taskScope'] = $taskScope;
        return $this;
    }

    /**
    * Gets limitType
    *  任务限流类型，与请求参数相同。
    *
    * @return string|null
    */
    public function getLimitType()
    {
        return $this->container['limitType'];
    }

    /**
    * Sets limitType
    *
    * @param string|null $limitType 任务限流类型，与请求参数相同。
    *
    * @return $this
    */
    public function setLimitType($limitType)
    {
        $this->container['limitType'] = $limitType;
        return $this;
    }

    /**
    * Gets limitTypeValue
    *  任务限流类型值，与请求参数相同。
    *
    * @return string|null
    */
    public function getLimitTypeValue()
    {
        return $this->container['limitTypeValue'];
    }

    /**
    * Sets limitTypeValue
    *
    * @param string|null $limitTypeValue 任务限流类型值，与请求参数相同。
    *
    * @return $this
    */
    public function setLimitTypeValue($limitTypeValue)
    {
        $this->container['limitTypeValue'] = $limitTypeValue;
        return $this;
    }

    /**
    * Gets databases
    *  CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @return string|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param string|null $databases CN节点数据库组，每个数据库字符串以逗号形式隔开。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets taskName
    *  限流任务名。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 限流任务名。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets sqlModel
    *  SQL模板,仅当任务类型为SQL_ID时，返回该值且与请求参数相同。
    *
    * @return string|null
    */
    public function getSqlModel()
    {
        return $this->container['sqlModel'];
    }

    /**
    * Sets sqlModel
    *
    * @param string|null $sqlModel SQL模板,仅当任务类型为SQL_ID时，返回该值且与请求参数相同。
    *
    * @return $this
    */
    public function setSqlModel($sqlModel)
    {
        $this->container['sqlModel'] = $sqlModel;
        return $this;
    }

    /**
    * Gets keyWords
    *  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    *
    * @return string[]|null
    */
    public function getKeyWords()
    {
        return $this->container['keyWords'];
    }

    /**
    * Sets keyWords
    *
    * @param string[]|null $keyWords 关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    *
    * @return $this
    */
    public function setKeyWords($keyWords)
    {
        $this->container['keyWords'] = $keyWords;
        return $this;
    }

    /**
    * Gets status
    *  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
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
    * @param string|null $status 限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets parallelSize
    *  并发数，与请求参数相同。
    *
    * @return int|null
    */
    public function getParallelSize()
    {
        return $this->container['parallelSize'];
    }

    /**
    * Sets parallelSize
    *
    * @param int|null $parallelSize 并发数，与请求参数相同。
    *
    * @return $this
    */
    public function setParallelSize($parallelSize)
    {
        $this->container['parallelSize'] = $parallelSize;
        return $this;
    }

    /**
    * Gets cpuUtilization
    *  cpu利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    *
    * @return int|null
    */
    public function getCpuUtilization()
    {
        return $this->container['cpuUtilization'];
    }

    /**
    * Sets cpuUtilization
    *
    * @param int|null $cpuUtilization cpu利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    *
    * @return $this
    */
    public function setCpuUtilization($cpuUtilization)
    {
        $this->container['cpuUtilization'] = $cpuUtilization;
        return $this;
    }

    /**
    * Gets memoryUtilization
    *  内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    *
    * @return int|null
    */
    public function getMemoryUtilization()
    {
        return $this->container['memoryUtilization'];
    }

    /**
    * Sets memoryUtilization
    *
    * @param int|null $memoryUtilization 内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    *
    * @return $this
    */
    public function setMemoryUtilization($memoryUtilization)
    {
        $this->container['memoryUtilization'] = $memoryUtilization;
        return $this;
    }

    /**
    * Gets startTime
    *  限流任务开始时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 限流任务开始时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    *  限流任务结束时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 限流任务结束时间，与请求参数相同，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets created
    *  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets creator
    *  创建者。
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建者。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets modifier
    *  更新者。
    *
    * @return string|null
    */
    public function getModifier()
    {
        return $this->container['modifier'];
    }

    /**
    * Sets modifier
    *
    * @param string|null $modifier 更新者。
    *
    * @return $this
    */
    public function setModifier($modifier)
    {
        $this->container['modifier'] = $modifier;
        return $this;
    }

    /**
    * Gets nodeInfos
    *  CN节点信息列表，如果类型为SQLID，必返。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CreateLimitTaskNodeResult[]|null
    */
    public function getNodeInfos()
    {
        return $this->container['nodeInfos'];
    }

    /**
    * Sets nodeInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CreateLimitTaskNodeResult[]|null $nodeInfos CN节点信息列表，如果类型为SQLID，必返。
    *
    * @return $this
    */
    public function setNodeInfos($nodeInfos)
    {
        $this->container['nodeInfos'] = $nodeInfos;
        return $this;
    }

    /**
    * Gets jobId
    *  工作流ID。
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
    * @param string|null $jobId 工作流ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

