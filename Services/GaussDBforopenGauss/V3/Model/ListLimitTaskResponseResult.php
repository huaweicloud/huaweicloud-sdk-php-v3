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
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 目前支持SQL，SESSION两种级别范围。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，为select，update，insert，delete，merge的一种。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，该值为CPU_OR_MEMORY。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: 实例的数据库列表，每个数据库以英文逗号形式隔开。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板，仅当任务类型为SQL_ID时，返回该值。 **取值范围**: 不涉及。
    * keyWords  **参数解释**: 关键词，仅当任务类型为SQL_TYPE时，返回该值。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: [0, 2147483647]
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * memoryUtilization  **参数解释**: 内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * created  **参数解释**: 限流任务创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 限流任务更新时间。 **取值范围**: 不涉及。
    * creator  **参数解释**: 创建者。 **取值范围**: 不涉及。
    * modifier  **参数解释**: 更新者。 **取值范围**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表。
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
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 目前支持SQL，SESSION两种级别范围。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，为select，update，insert，delete，merge的一种。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，该值为CPU_OR_MEMORY。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: 实例的数据库列表，每个数据库以英文逗号形式隔开。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板，仅当任务类型为SQL_ID时，返回该值。 **取值范围**: 不涉及。
    * keyWords  **参数解释**: 关键词，仅当任务类型为SQL_TYPE时，返回该值。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: [0, 2147483647]
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * memoryUtilization  **参数解释**: 内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * created  **参数解释**: 限流任务创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 限流任务更新时间。 **取值范围**: 不涉及。
    * creator  **参数解释**: 创建者。 **取值范围**: 不涉及。
    * modifier  **参数解释**: 更新者。 **取值范围**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表。
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
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 目前支持SQL，SESSION两种级别范围。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，为select，update，insert，delete，merge的一种。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，该值为CPU_OR_MEMORY。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: 实例的数据库列表，每个数据库以英文逗号形式隔开。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板，仅当任务类型为SQL_ID时，返回该值。 **取值范围**: 不涉及。
    * keyWords  **参数解释**: 关键词，仅当任务类型为SQL_TYPE时，返回该值。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: [0, 2147483647]
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * memoryUtilization  **参数解释**: 内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * created  **参数解释**: 限流任务创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 限流任务更新时间。 **取值范围**: 不涉及。
    * creator  **参数解释**: 创建者。 **取值范围**: 不涉及。
    * modifier  **参数解释**: 更新者。 **取值范围**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表。
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
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 目前支持SQL，SESSION两种级别范围。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，为select，update，insert，delete，merge的一种。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，该值为CPU_OR_MEMORY。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: 实例的数据库列表，每个数据库以英文逗号形式隔开。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板，仅当任务类型为SQL_ID时，返回该值。 **取值范围**: 不涉及。
    * keyWords  **参数解释**: 关键词，仅当任务类型为SQL_TYPE时，返回该值。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: [0, 2147483647]
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * memoryUtilization  **参数解释**: 内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * created  **参数解释**: 限流任务创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 限流任务更新时间。 **取值范围**: 不涉及。
    * creator  **参数解释**: 创建者。 **取值范围**: 不涉及。
    * modifier  **参数解释**: 更新者。 **取值范围**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表。
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
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 目前支持SQL，SESSION两种级别范围。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，为select，update，insert，delete，merge的一种。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，该值为CPU_OR_MEMORY。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: 实例的数据库列表，每个数据库以英文逗号形式隔开。 **取值范围**: 不涉及。
    * sqlModel  **参数解释**: SQL模板，仅当任务类型为SQL_ID时，返回该值。 **取值范围**: 不涉及。
    * keyWords  **参数解释**: 关键词，仅当任务类型为SQL_TYPE时，返回该值。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: [0, 2147483647]
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 不涉及。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * memoryUtilization  **参数解释**: 内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
    * created  **参数解释**: 限流任务创建时间。 **取值范围**: 不涉及。
    * updated  **参数解释**: 限流任务更新时间。 **取值范围**: 不涉及。
    * creator  **参数解释**: 创建者。 **取值范围**: 不涉及。
    * modifier  **参数解释**: 更新者。 **取值范围**: 不涉及。
    * nodeInfos  **参数解释**: CN节点信息列表。
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
    *  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
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
    * @param string|null $taskId **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
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
    *  **参数解释**: 任务限流范围。 **取值范围**: 目前支持SQL，SESSION两种级别范围。
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
    * @param string|null $taskScope **参数解释**: 任务限流范围。 **取值范围**: 目前支持SQL，SESSION两种级别范围。
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
    *  **参数解释**: 任务限流类型。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。
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
    * @param string|null $limitType **参数解释**: 任务限流类型。 **取值范围**: - 当“task_scope”为SQL时，可选SQL_ID、SQL_TYPE类型。 - 当“task_scope”为SESSION时，可选SESSION_ACTIVE_MAX_COUNT类型。
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
    *  **参数解释**: 任务限流类型值。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，为select，update，insert，delete，merge的一种。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，该值为CPU_OR_MEMORY。
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
    * @param string|null $limitTypeValue **参数解释**: 任务限流类型值。 **取值范围**: - 当“limit_type”为SQL_ID类型时，该值为选中模板的sql_id。 - 当“limit_type”为SQL_TYPE类型时，值为SQL类型，为select，update，insert，delete，merge的一种。 - 当“limit_type”为SESSION_ACTIVE_MAX_COUNT类型时，该值为CPU_OR_MEMORY。
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
    *  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
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
    * @param string|null $taskName **参数解释**: 限流任务名。 **取值范围**: 不涉及。
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
    *  **参数解释**: 实例的数据库列表，每个数据库以英文逗号形式隔开。 **取值范围**: 不涉及。
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
    * @param string|null $databases **参数解释**: 实例的数据库列表，每个数据库以英文逗号形式隔开。 **取值范围**: 不涉及。
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
    *  **参数解释**: SQL模板，仅当任务类型为SQL_ID时，返回该值。 **取值范围**: 不涉及。
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
    * @param string|null $sqlModel **参数解释**: SQL模板，仅当任务类型为SQL_ID时，返回该值。 **取值范围**: 不涉及。
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
    *  **参数解释**: 关键词，仅当任务类型为SQL_TYPE时，返回该值。 **取值范围**: 不涉及。
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
    * @param string|null $keyWords **参数解释**: 关键词，仅当任务类型为SQL_TYPE时，返回该值。 **取值范围**: 不涉及。
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
    *  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
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
    * @param string|null $status **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
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
    *  **参数解释**: 实例ID。 **取值范围**: 不涉及。
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
    * @param string|null $instanceId **参数解释**: 实例ID。 **取值范围**: 不涉及。
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
    *  **参数解释**: 规则名。 **取值范围**: 不涉及。
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
    * @param string|null $ruleName **参数解释**: 规则名。 **取值范围**: 不涉及。
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
    *  **参数解释**: 并发数。 **取值范围**: [0, 2147483647]
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
    * @param int|null $parallelSize **参数解释**: 并发数。 **取值范围**: [0, 2147483647]
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
    *  **参数解释**: 限流任务开始时间。 **取值范围**: 不涉及。
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
    * @param string|null $startTime **参数解释**: 限流任务开始时间。 **取值范围**: 不涉及。
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
    *  **参数解释**: 限流任务结束时间。 **取值范围**: 不涉及。
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
    * @param string|null $endTime **参数解释**: 限流任务结束时间。 **取值范围**: 不涉及。
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
    *  **参数解释**: CPU利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
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
    * @param int|null $cpuUtilization **参数解释**: CPU利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
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
    *  **参数解释**: 内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
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
    * @param int|null $memoryUtilization **参数解释**: 内存利用率阈值，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留整数部分。 **取值范围**: [0, 100)
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
    *  **参数解释**: 限流任务创建时间。 **取值范围**: 不涉及。
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
    * @param string|null $created **参数解释**: 限流任务创建时间。 **取值范围**: 不涉及。
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
    *  **参数解释**: 限流任务更新时间。 **取值范围**: 不涉及。
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
    * @param string|null $updated **参数解释**: 限流任务更新时间。 **取值范围**: 不涉及。
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
    *  **参数解释**: 创建者。 **取值范围**: 不涉及。
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
    * @param string|null $creator **参数解释**: 创建者。 **取值范围**: 不涉及。
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
    *  **参数解释**: 更新者。 **取值范围**: 不涉及。
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
    * @param string|null $modifier **参数解释**: 更新者。 **取值范围**: 不涉及。
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
    *  **参数解释**: CN节点信息列表。
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
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ShowLimitTaskNodeOption[]|null $nodeInfos **参数解释**: CN节点信息列表。
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

