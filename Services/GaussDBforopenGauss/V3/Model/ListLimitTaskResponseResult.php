<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLimitTaskResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLimitTaskResponseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  限流任务ID。
    * taskScope  任务限流范围。
    * limitType  任务限流类型。
    * limitTypeValue  任务限流类型值。
    * taskName  限流任务名。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskScope' => 'string',
            'limitType' => 'string',
            'limitTypeValue' => 'string',
            'taskName' => 'string',
            'databases' => 'string',
            'sqlModel' => 'string',
            'keyWords' => 'string',
            'status' => 'string',
            'instanceId' => 'string',
            'ruleName' => 'string',
            'parallelSize' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'cpuUtilization' => 'int',
            'memoryUtilization' => 'int',
            'created' => 'string',
            'updated' => 'string',
            'creator' => 'string',
            'modifier' => 'string',
            'nodeInfos' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ShowLimitTaskNodeOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  限流任务ID。
    * taskScope  任务限流范围。
    * limitType  任务限流类型。
    * limitTypeValue  任务限流类型值。
    * taskName  限流任务名。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskScope' => null,
        'limitType' => null,
        'limitTypeValue' => null,
        'taskName' => null,
        'databases' => null,
        'sqlModel' => null,
        'keyWords' => null,
        'status' => null,
        'instanceId' => null,
        'ruleName' => null,
        'parallelSize' => null,
        'startTime' => null,
        'endTime' => null,
        'cpuUtilization' => null,
        'memoryUtilization' => null,
        'created' => null,
        'updated' => null,
        'creator' => null,
        'modifier' => null,
        'nodeInfos' => null
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
    * taskScope  任务限流范围。
    * limitType  任务限流类型。
    * limitTypeValue  任务限流类型值。
    * taskName  限流任务名。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskScope' => 'task_scope',
            'limitType' => 'limit_type',
            'limitTypeValue' => 'limit_type_value',
            'taskName' => 'task_name',
            'databases' => 'databases',
            'sqlModel' => 'sql_model',
            'keyWords' => 'key_words',
            'status' => 'status',
            'instanceId' => 'instance_id',
            'ruleName' => 'rule_name',
            'parallelSize' => 'parallel_size',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'cpuUtilization' => 'cpu_utilization',
            'memoryUtilization' => 'memory_utilization',
            'created' => 'created',
            'updated' => 'updated',
            'creator' => 'creator',
            'modifier' => 'modifier',
            'nodeInfos' => 'node_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  限流任务ID。
    * taskScope  任务限流范围。
    * limitType  任务限流类型。
    * limitTypeValue  任务限流类型值。
    * taskName  限流任务名。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskScope' => 'setTaskScope',
            'limitType' => 'setLimitType',
            'limitTypeValue' => 'setLimitTypeValue',
            'taskName' => 'setTaskName',
            'databases' => 'setDatabases',
            'sqlModel' => 'setSqlModel',
            'keyWords' => 'setKeyWords',
            'status' => 'setStatus',
            'instanceId' => 'setInstanceId',
            'ruleName' => 'setRuleName',
            'parallelSize' => 'setParallelSize',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'cpuUtilization' => 'setCpuUtilization',
            'memoryUtilization' => 'setMemoryUtilization',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'creator' => 'setCreator',
            'modifier' => 'setModifier',
            'nodeInfos' => 'setNodeInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  限流任务ID。
    * taskScope  任务限流范围。
    * limitType  任务限流类型。
    * limitTypeValue  任务限流类型值。
    * taskName  限流任务名。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开。
    * sqlModel  SQL模板,仅当任务类型为SQL_ID时，返回该值。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值。
    * status  限流任务状态，当前支持：CREATING，UPDATEING，DELETING，WAIT_EXCUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  实例id。
    * ruleName  规则名。
    * parallelSize  并发数。
    * startTime  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    * created  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * updated  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * creator  创建者。
    * modifier  更新者。
    * nodeInfos  CN节点信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskScope' => 'getTaskScope',
            'limitType' => 'getLimitType',
            'limitTypeValue' => 'getLimitTypeValue',
            'taskName' => 'getTaskName',
            'databases' => 'getDatabases',
            'sqlModel' => 'getSqlModel',
            'keyWords' => 'getKeyWords',
            'status' => 'getStatus',
            'instanceId' => 'getInstanceId',
            'ruleName' => 'getRuleName',
            'parallelSize' => 'getParallelSize',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'cpuUtilization' => 'getCpuUtilization',
            'memoryUtilization' => 'getMemoryUtilization',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'creator' => 'getCreator',
            'modifier' => 'getModifier',
            'nodeInfos' => 'getNodeInfos'
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
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['sqlModel'] = isset($data['sqlModel']) ? $data['sqlModel'] : null;
        $this->container['keyWords'] = isset($data['keyWords']) ? $data['keyWords'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['parallelSize'] = isset($data['parallelSize']) ? $data['parallelSize'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['cpuUtilization'] = isset($data['cpuUtilization']) ? $data['cpuUtilization'] : null;
        $this->container['memoryUtilization'] = isset($data['memoryUtilization']) ? $data['memoryUtilization'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['modifier'] = isset($data['modifier']) ? $data['modifier'] : null;
        $this->container['nodeInfos'] = isset($data['nodeInfos']) ? $data['nodeInfos'] : null;
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
    *  任务限流范围。
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
    * @param string|null $taskScope 任务限流范围。
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
    *  任务限流类型。
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
    * @param string|null $limitType 任务限流类型。
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
    *  任务限流类型值。
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
    * @param string|null $limitTypeValue 任务限流类型值。
    *
    * @return $this
    */
    public function setLimitTypeValue($limitTypeValue)
    {
        $this->container['limitTypeValue'] = $limitTypeValue;
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
    * Gets databases
    *  CN节点数据库组,每个数据库字符串以逗号形式隔开。
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
    * @param string|null $databases CN节点数据库组,每个数据库字符串以逗号形式隔开。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets sqlModel
    *  SQL模板,仅当任务类型为SQL_ID时，返回该值。
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
    * @param string|null $sqlModel SQL模板,仅当任务类型为SQL_ID时，返回该值。
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
    *  关键词，仅当任务类型为SQL_TYPE时，返回该值。
    *
    * @return string|null
    */
    public function getKeyWords()
    {
        return $this->container['keyWords'];
    }

    /**
    * Sets keyWords
    *
    * @param string|null $keyWords 关键词，仅当任务类型为SQL_TYPE时，返回该值。
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
    *  并发数。
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
    * @param int|null $parallelSize 并发数。
    *
    * @return $this
    */
    public function setParallelSize($parallelSize)
    {
        $this->container['parallelSize'] = $parallelSize;
        return $this;
    }

    /**
    * Gets startTime
    *  限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    * @param string|null $startTime 限流任务开始时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    *  限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    * @param string|null $endTime 限流任务结束时间,格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets cpuUtilization
    *  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
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
    * @param int|null $cpuUtilization cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
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
    *  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
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
    * @param int|null $memoryUtilization 内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值。
    *
    * @return $this
    */
    public function setMemoryUtilization($memoryUtilization)
    {
        $this->container['memoryUtilization'] = $memoryUtilization;
        return $this;
    }

    /**
    * Gets created
    *  创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    * @param string|null $created 创建时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    *  更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    * @param string|null $updated 更新时间为本地时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    *  CN节点信息列表。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ShowLimitTaskNodeOption[]|null
    */
    public function getNodeInfos()
    {
        return $this->container['nodeInfos'];
    }

    /**
    * Sets nodeInfos
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ShowLimitTaskNodeOption[]|null $nodeInfos CN节点信息列表。
    *
    * @return $this
    */
    public function setNodeInfos($nodeInfos)
    {
        $this->container['nodeInfos'] = $nodeInfos;
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

