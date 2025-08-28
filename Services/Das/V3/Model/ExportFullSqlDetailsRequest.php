<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportFullSqlDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportFullSqlDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * taskIds  SQL洞察任务ID列表，时间范围大于1天的SQL洞察任务后台将拆分为多个任务解析，该场景支持多任务过滤导出。
    * nodeId  节点ID。
    * keyword  关键字（可组合，用逗号分隔）。
    * fuzzy  是否模糊匹配。
    * userList  用户名（可组合，用空格分隔）。
    * dbList  数据库（可组合，用空格分隔）。
    * operationList  操作类型（可组合，用空格分隔）。
    * clientIpList  客户端IP（可组合，用空格分隔）。
    * threadIdList  线程ID（可组合，用空格分隔）。
    * trxIdList  事务ID（可组合，用空格分隔）。
    * sessionIdList  会话ID（可组合，用空格分隔）。
    * statusList  执行状态（0:成功，1:失败，可组合，用空格分隔）。
    * sqlTemplateIds  SQL模板ID（可组合，用空格分隔）。
    * costMin  最小执行耗时（毫秒）。
    * costMax  最大执行耗时（毫秒）。
    * scanMin  最小扫描行数。
    * scanMax  最大扫描行数。
    * affectMin  最小影响行数。
    * affectMax  最大影响行数。
    * returnMin  最小返回行数。
    * returnMax  最大返回行数。
    * sortField  排序字段（execute_at:执行时间, execute_cost:执行耗时, lock_wait_time:锁等待时间, rows_examined:扫描行数, rows_returned:返回行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'taskIds' => 'int[]',
            'nodeId' => 'string',
            'keyword' => 'string',
            'fuzzy' => 'string',
            'userList' => 'string',
            'dbList' => 'string',
            'operationList' => 'string',
            'clientIpList' => 'string',
            'threadIdList' => 'string',
            'trxIdList' => 'string',
            'sessionIdList' => 'string',
            'statusList' => 'string',
            'sqlTemplateIds' => 'string',
            'costMin' => 'double',
            'costMax' => 'double',
            'scanMin' => 'int',
            'scanMax' => 'int',
            'affectMin' => 'int',
            'affectMax' => 'int',
            'returnMin' => 'int',
            'returnMax' => 'int',
            'sortField' => 'string',
            'asc' => 'bool',
            'page' => 'int',
            'limit' => 'int',
            'xLanguage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * taskIds  SQL洞察任务ID列表，时间范围大于1天的SQL洞察任务后台将拆分为多个任务解析，该场景支持多任务过滤导出。
    * nodeId  节点ID。
    * keyword  关键字（可组合，用逗号分隔）。
    * fuzzy  是否模糊匹配。
    * userList  用户名（可组合，用空格分隔）。
    * dbList  数据库（可组合，用空格分隔）。
    * operationList  操作类型（可组合，用空格分隔）。
    * clientIpList  客户端IP（可组合，用空格分隔）。
    * threadIdList  线程ID（可组合，用空格分隔）。
    * trxIdList  事务ID（可组合，用空格分隔）。
    * sessionIdList  会话ID（可组合，用空格分隔）。
    * statusList  执行状态（0:成功，1:失败，可组合，用空格分隔）。
    * sqlTemplateIds  SQL模板ID（可组合，用空格分隔）。
    * costMin  最小执行耗时（毫秒）。
    * costMax  最大执行耗时（毫秒）。
    * scanMin  最小扫描行数。
    * scanMax  最大扫描行数。
    * affectMin  最小影响行数。
    * affectMax  最大影响行数。
    * returnMin  最小返回行数。
    * returnMax  最大返回行数。
    * sortField  排序字段（execute_at:执行时间, execute_cost:执行耗时, lock_wait_time:锁等待时间, rows_examined:扫描行数, rows_returned:返回行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'taskIds' => 'int64',
        'nodeId' => null,
        'keyword' => null,
        'fuzzy' => null,
        'userList' => null,
        'dbList' => null,
        'operationList' => null,
        'clientIpList' => null,
        'threadIdList' => null,
        'trxIdList' => null,
        'sessionIdList' => null,
        'statusList' => null,
        'sqlTemplateIds' => null,
        'costMin' => 'double',
        'costMax' => 'double',
        'scanMin' => 'int64',
        'scanMax' => 'int64',
        'affectMin' => 'int64',
        'affectMax' => 'int64',
        'returnMin' => 'int64',
        'returnMax' => 'int64',
        'sortField' => null,
        'asc' => null,
        'page' => 'int32',
        'limit' => 'int32',
        'xLanguage' => null
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
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * taskIds  SQL洞察任务ID列表，时间范围大于1天的SQL洞察任务后台将拆分为多个任务解析，该场景支持多任务过滤导出。
    * nodeId  节点ID。
    * keyword  关键字（可组合，用逗号分隔）。
    * fuzzy  是否模糊匹配。
    * userList  用户名（可组合，用空格分隔）。
    * dbList  数据库（可组合，用空格分隔）。
    * operationList  操作类型（可组合，用空格分隔）。
    * clientIpList  客户端IP（可组合，用空格分隔）。
    * threadIdList  线程ID（可组合，用空格分隔）。
    * trxIdList  事务ID（可组合，用空格分隔）。
    * sessionIdList  会话ID（可组合，用空格分隔）。
    * statusList  执行状态（0:成功，1:失败，可组合，用空格分隔）。
    * sqlTemplateIds  SQL模板ID（可组合，用空格分隔）。
    * costMin  最小执行耗时（毫秒）。
    * costMax  最大执行耗时（毫秒）。
    * scanMin  最小扫描行数。
    * scanMax  最大扫描行数。
    * affectMin  最小影响行数。
    * affectMax  最大影响行数。
    * returnMin  最小返回行数。
    * returnMax  最大返回行数。
    * sortField  排序字段（execute_at:执行时间, execute_cost:执行耗时, lock_wait_time:锁等待时间, rows_examined:扫描行数, rows_returned:返回行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'taskIds' => 'task_ids',
            'nodeId' => 'node_id',
            'keyword' => 'keyword',
            'fuzzy' => 'fuzzy',
            'userList' => 'user_list',
            'dbList' => 'db_list',
            'operationList' => 'operation_list',
            'clientIpList' => 'client_ip_list',
            'threadIdList' => 'thread_id_list',
            'trxIdList' => 'trx_id_list',
            'sessionIdList' => 'session_id_list',
            'statusList' => 'status_list',
            'sqlTemplateIds' => 'sql_template_ids',
            'costMin' => 'cost_min',
            'costMax' => 'cost_max',
            'scanMin' => 'scan_min',
            'scanMax' => 'scan_max',
            'affectMin' => 'affect_min',
            'affectMax' => 'affect_max',
            'returnMin' => 'return_min',
            'returnMax' => 'return_max',
            'sortField' => 'sort_field',
            'asc' => 'asc',
            'page' => 'page',
            'limit' => 'limit',
            'xLanguage' => 'X-Language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * taskIds  SQL洞察任务ID列表，时间范围大于1天的SQL洞察任务后台将拆分为多个任务解析，该场景支持多任务过滤导出。
    * nodeId  节点ID。
    * keyword  关键字（可组合，用逗号分隔）。
    * fuzzy  是否模糊匹配。
    * userList  用户名（可组合，用空格分隔）。
    * dbList  数据库（可组合，用空格分隔）。
    * operationList  操作类型（可组合，用空格分隔）。
    * clientIpList  客户端IP（可组合，用空格分隔）。
    * threadIdList  线程ID（可组合，用空格分隔）。
    * trxIdList  事务ID（可组合，用空格分隔）。
    * sessionIdList  会话ID（可组合，用空格分隔）。
    * statusList  执行状态（0:成功，1:失败，可组合，用空格分隔）。
    * sqlTemplateIds  SQL模板ID（可组合，用空格分隔）。
    * costMin  最小执行耗时（毫秒）。
    * costMax  最大执行耗时（毫秒）。
    * scanMin  最小扫描行数。
    * scanMax  最大扫描行数。
    * affectMin  最小影响行数。
    * affectMax  最大影响行数。
    * returnMin  最小返回行数。
    * returnMax  最大返回行数。
    * sortField  排序字段（execute_at:执行时间, execute_cost:执行耗时, lock_wait_time:锁等待时间, rows_examined:扫描行数, rows_returned:返回行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'taskIds' => 'setTaskIds',
            'nodeId' => 'setNodeId',
            'keyword' => 'setKeyword',
            'fuzzy' => 'setFuzzy',
            'userList' => 'setUserList',
            'dbList' => 'setDbList',
            'operationList' => 'setOperationList',
            'clientIpList' => 'setClientIpList',
            'threadIdList' => 'setThreadIdList',
            'trxIdList' => 'setTrxIdList',
            'sessionIdList' => 'setSessionIdList',
            'statusList' => 'setStatusList',
            'sqlTemplateIds' => 'setSqlTemplateIds',
            'costMin' => 'setCostMin',
            'costMax' => 'setCostMax',
            'scanMin' => 'setScanMin',
            'scanMax' => 'setScanMax',
            'affectMin' => 'setAffectMin',
            'affectMax' => 'setAffectMax',
            'returnMin' => 'setReturnMin',
            'returnMax' => 'setReturnMax',
            'sortField' => 'setSortField',
            'asc' => 'setAsc',
            'page' => 'setPage',
            'limit' => 'setLimit',
            'xLanguage' => 'setXLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * startAt  开始时间（Unix timestamp），单位：毫秒。
    * endAt  结束时间（Unix timestamp），单位：毫秒。
    * taskIds  SQL洞察任务ID列表，时间范围大于1天的SQL洞察任务后台将拆分为多个任务解析，该场景支持多任务过滤导出。
    * nodeId  节点ID。
    * keyword  关键字（可组合，用逗号分隔）。
    * fuzzy  是否模糊匹配。
    * userList  用户名（可组合，用空格分隔）。
    * dbList  数据库（可组合，用空格分隔）。
    * operationList  操作类型（可组合，用空格分隔）。
    * clientIpList  客户端IP（可组合，用空格分隔）。
    * threadIdList  线程ID（可组合，用空格分隔）。
    * trxIdList  事务ID（可组合，用空格分隔）。
    * sessionIdList  会话ID（可组合，用空格分隔）。
    * statusList  执行状态（0:成功，1:失败，可组合，用空格分隔）。
    * sqlTemplateIds  SQL模板ID（可组合，用空格分隔）。
    * costMin  最小执行耗时（毫秒）。
    * costMax  最大执行耗时（毫秒）。
    * scanMin  最小扫描行数。
    * scanMax  最大扫描行数。
    * affectMin  最小影响行数。
    * affectMax  最大影响行数。
    * returnMin  最小返回行数。
    * returnMax  最大返回行数。
    * sortField  排序字段（execute_at:执行时间, execute_cost:执行耗时, lock_wait_time:锁等待时间, rows_examined:扫描行数, rows_returned:返回行数）。
    * asc  排序顺序（true:正序, false:逆序）。
    * page  页码。
    * limit  每页记录数。最大为100。
    * xLanguage  请求语言类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'taskIds' => 'getTaskIds',
            'nodeId' => 'getNodeId',
            'keyword' => 'getKeyword',
            'fuzzy' => 'getFuzzy',
            'userList' => 'getUserList',
            'dbList' => 'getDbList',
            'operationList' => 'getOperationList',
            'clientIpList' => 'getClientIpList',
            'threadIdList' => 'getThreadIdList',
            'trxIdList' => 'getTrxIdList',
            'sessionIdList' => 'getSessionIdList',
            'statusList' => 'getStatusList',
            'sqlTemplateIds' => 'getSqlTemplateIds',
            'costMin' => 'getCostMin',
            'costMax' => 'getCostMax',
            'scanMin' => 'getScanMin',
            'scanMax' => 'getScanMax',
            'affectMin' => 'getAffectMin',
            'affectMax' => 'getAffectMax',
            'returnMin' => 'getReturnMin',
            'returnMax' => 'getReturnMax',
            'sortField' => 'getSortField',
            'asc' => 'getAsc',
            'page' => 'getPage',
            'limit' => 'getLimit',
            'xLanguage' => 'getXLanguage'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['taskIds'] = isset($data['taskIds']) ? $data['taskIds'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['fuzzy'] = isset($data['fuzzy']) ? $data['fuzzy'] : null;
        $this->container['userList'] = isset($data['userList']) ? $data['userList'] : null;
        $this->container['dbList'] = isset($data['dbList']) ? $data['dbList'] : null;
        $this->container['operationList'] = isset($data['operationList']) ? $data['operationList'] : null;
        $this->container['clientIpList'] = isset($data['clientIpList']) ? $data['clientIpList'] : null;
        $this->container['threadIdList'] = isset($data['threadIdList']) ? $data['threadIdList'] : null;
        $this->container['trxIdList'] = isset($data['trxIdList']) ? $data['trxIdList'] : null;
        $this->container['sessionIdList'] = isset($data['sessionIdList']) ? $data['sessionIdList'] : null;
        $this->container['statusList'] = isset($data['statusList']) ? $data['statusList'] : null;
        $this->container['sqlTemplateIds'] = isset($data['sqlTemplateIds']) ? $data['sqlTemplateIds'] : null;
        $this->container['costMin'] = isset($data['costMin']) ? $data['costMin'] : null;
        $this->container['costMax'] = isset($data['costMax']) ? $data['costMax'] : null;
        $this->container['scanMin'] = isset($data['scanMin']) ? $data['scanMin'] : null;
        $this->container['scanMax'] = isset($data['scanMax']) ? $data['scanMax'] : null;
        $this->container['affectMin'] = isset($data['affectMin']) ? $data['affectMin'] : null;
        $this->container['affectMax'] = isset($data['affectMax']) ? $data['affectMax'] : null;
        $this->container['returnMin'] = isset($data['returnMin']) ? $data['returnMin'] : null;
        $this->container['returnMax'] = isset($data['returnMax']) ? $data['returnMax'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
            if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int $startAt 开始时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间（Unix timestamp），单位：毫秒。
    *
    * @return int
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int $endAt 结束时间（Unix timestamp），单位：毫秒。
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets taskIds
    *  SQL洞察任务ID列表，时间范围大于1天的SQL洞察任务后台将拆分为多个任务解析，该场景支持多任务过滤导出。
    *
    * @return int[]|null
    */
    public function getTaskIds()
    {
        return $this->container['taskIds'];
    }

    /**
    * Sets taskIds
    *
    * @param int[]|null $taskIds SQL洞察任务ID列表，时间范围大于1天的SQL洞察任务后台将拆分为多个任务解析，该场景支持多任务过滤导出。
    *
    * @return $this
    */
    public function setTaskIds($taskIds)
    {
        $this->container['taskIds'] = $taskIds;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字（可组合，用逗号分隔）。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字（可组合，用逗号分隔）。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets fuzzy
    *  是否模糊匹配。
    *
    * @return string|null
    */
    public function getFuzzy()
    {
        return $this->container['fuzzy'];
    }

    /**
    * Sets fuzzy
    *
    * @param string|null $fuzzy 是否模糊匹配。
    *
    * @return $this
    */
    public function setFuzzy($fuzzy)
    {
        $this->container['fuzzy'] = $fuzzy;
        return $this;
    }

    /**
    * Gets userList
    *  用户名（可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getUserList()
    {
        return $this->container['userList'];
    }

    /**
    * Sets userList
    *
    * @param string|null $userList 用户名（可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setUserList($userList)
    {
        $this->container['userList'] = $userList;
        return $this;
    }

    /**
    * Gets dbList
    *  数据库（可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getDbList()
    {
        return $this->container['dbList'];
    }

    /**
    * Sets dbList
    *
    * @param string|null $dbList 数据库（可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setDbList($dbList)
    {
        $this->container['dbList'] = $dbList;
        return $this;
    }

    /**
    * Gets operationList
    *  操作类型（可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getOperationList()
    {
        return $this->container['operationList'];
    }

    /**
    * Sets operationList
    *
    * @param string|null $operationList 操作类型（可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setOperationList($operationList)
    {
        $this->container['operationList'] = $operationList;
        return $this;
    }

    /**
    * Gets clientIpList
    *  客户端IP（可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getClientIpList()
    {
        return $this->container['clientIpList'];
    }

    /**
    * Sets clientIpList
    *
    * @param string|null $clientIpList 客户端IP（可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setClientIpList($clientIpList)
    {
        $this->container['clientIpList'] = $clientIpList;
        return $this;
    }

    /**
    * Gets threadIdList
    *  线程ID（可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getThreadIdList()
    {
        return $this->container['threadIdList'];
    }

    /**
    * Sets threadIdList
    *
    * @param string|null $threadIdList 线程ID（可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setThreadIdList($threadIdList)
    {
        $this->container['threadIdList'] = $threadIdList;
        return $this;
    }

    /**
    * Gets trxIdList
    *  事务ID（可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getTrxIdList()
    {
        return $this->container['trxIdList'];
    }

    /**
    * Sets trxIdList
    *
    * @param string|null $trxIdList 事务ID（可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setTrxIdList($trxIdList)
    {
        $this->container['trxIdList'] = $trxIdList;
        return $this;
    }

    /**
    * Gets sessionIdList
    *  会话ID（可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getSessionIdList()
    {
        return $this->container['sessionIdList'];
    }

    /**
    * Sets sessionIdList
    *
    * @param string|null $sessionIdList 会话ID（可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setSessionIdList($sessionIdList)
    {
        $this->container['sessionIdList'] = $sessionIdList;
        return $this;
    }

    /**
    * Gets statusList
    *  执行状态（0:成功，1:失败，可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getStatusList()
    {
        return $this->container['statusList'];
    }

    /**
    * Sets statusList
    *
    * @param string|null $statusList 执行状态（0:成功，1:失败，可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setStatusList($statusList)
    {
        $this->container['statusList'] = $statusList;
        return $this;
    }

    /**
    * Gets sqlTemplateIds
    *  SQL模板ID（可组合，用空格分隔）。
    *
    * @return string|null
    */
    public function getSqlTemplateIds()
    {
        return $this->container['sqlTemplateIds'];
    }

    /**
    * Sets sqlTemplateIds
    *
    * @param string|null $sqlTemplateIds SQL模板ID（可组合，用空格分隔）。
    *
    * @return $this
    */
    public function setSqlTemplateIds($sqlTemplateIds)
    {
        $this->container['sqlTemplateIds'] = $sqlTemplateIds;
        return $this;
    }

    /**
    * Gets costMin
    *  最小执行耗时（毫秒）。
    *
    * @return double|null
    */
    public function getCostMin()
    {
        return $this->container['costMin'];
    }

    /**
    * Sets costMin
    *
    * @param double|null $costMin 最小执行耗时（毫秒）。
    *
    * @return $this
    */
    public function setCostMin($costMin)
    {
        $this->container['costMin'] = $costMin;
        return $this;
    }

    /**
    * Gets costMax
    *  最大执行耗时（毫秒）。
    *
    * @return double|null
    */
    public function getCostMax()
    {
        return $this->container['costMax'];
    }

    /**
    * Sets costMax
    *
    * @param double|null $costMax 最大执行耗时（毫秒）。
    *
    * @return $this
    */
    public function setCostMax($costMax)
    {
        $this->container['costMax'] = $costMax;
        return $this;
    }

    /**
    * Gets scanMin
    *  最小扫描行数。
    *
    * @return int|null
    */
    public function getScanMin()
    {
        return $this->container['scanMin'];
    }

    /**
    * Sets scanMin
    *
    * @param int|null $scanMin 最小扫描行数。
    *
    * @return $this
    */
    public function setScanMin($scanMin)
    {
        $this->container['scanMin'] = $scanMin;
        return $this;
    }

    /**
    * Gets scanMax
    *  最大扫描行数。
    *
    * @return int|null
    */
    public function getScanMax()
    {
        return $this->container['scanMax'];
    }

    /**
    * Sets scanMax
    *
    * @param int|null $scanMax 最大扫描行数。
    *
    * @return $this
    */
    public function setScanMax($scanMax)
    {
        $this->container['scanMax'] = $scanMax;
        return $this;
    }

    /**
    * Gets affectMin
    *  最小影响行数。
    *
    * @return int|null
    */
    public function getAffectMin()
    {
        return $this->container['affectMin'];
    }

    /**
    * Sets affectMin
    *
    * @param int|null $affectMin 最小影响行数。
    *
    * @return $this
    */
    public function setAffectMin($affectMin)
    {
        $this->container['affectMin'] = $affectMin;
        return $this;
    }

    /**
    * Gets affectMax
    *  最大影响行数。
    *
    * @return int|null
    */
    public function getAffectMax()
    {
        return $this->container['affectMax'];
    }

    /**
    * Sets affectMax
    *
    * @param int|null $affectMax 最大影响行数。
    *
    * @return $this
    */
    public function setAffectMax($affectMax)
    {
        $this->container['affectMax'] = $affectMax;
        return $this;
    }

    /**
    * Gets returnMin
    *  最小返回行数。
    *
    * @return int|null
    */
    public function getReturnMin()
    {
        return $this->container['returnMin'];
    }

    /**
    * Sets returnMin
    *
    * @param int|null $returnMin 最小返回行数。
    *
    * @return $this
    */
    public function setReturnMin($returnMin)
    {
        $this->container['returnMin'] = $returnMin;
        return $this;
    }

    /**
    * Gets returnMax
    *  最大返回行数。
    *
    * @return int|null
    */
    public function getReturnMax()
    {
        return $this->container['returnMax'];
    }

    /**
    * Sets returnMax
    *
    * @param int|null $returnMax 最大返回行数。
    *
    * @return $this
    */
    public function setReturnMax($returnMax)
    {
        $this->container['returnMax'] = $returnMax;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段（execute_at:执行时间, execute_cost:执行耗时, lock_wait_time:锁等待时间, rows_examined:扫描行数, rows_returned:返回行数）。
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序字段（execute_at:执行时间, execute_cost:执行耗时, lock_wait_time:锁等待时间, rows_examined:扫描行数, rows_returned:返回行数）。
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets asc
    *  排序顺序（true:正序, false:逆序）。
    *
    * @return bool|null
    */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
    * Sets asc
    *
    * @param bool|null $asc 排序顺序（true:正序, false:逆序）。
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
        return $this;
    }

    /**
    * Gets page
    *  页码。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 页码。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets limit
    *  每页记录数。最大为100。
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
    * @param int|null $limit 每页记录数。最大为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
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

