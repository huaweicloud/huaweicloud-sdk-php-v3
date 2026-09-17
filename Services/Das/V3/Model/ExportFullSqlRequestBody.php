<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportFullSqlRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportFullSqlRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * taskIds  SQL洞察任务ID列表
    * nodeId  节点ID
    * keyword  关键字
    * fuzzy  是否模糊匹配
    * userList  用户名
    * dbList  数据库
    * operationList  操作类型
    * clientIpList  客户端IP
    * threadIdList  线程ID
    * trxIdList  事务ID
    * sessionIdList  会话ID
    * statusList  执行状态（0：成功，1：失败）
    * costMin  最小执行耗时（毫秒）
    * costMax  最大执行耗时（毫秒）
    * scanMin  最小扫描行数
    * scanMax  最大扫描行数
    * affectMin  最小影响行数
    * affectMax  最大影响行数
    * returnMin  最小返回行数
    * returnMax  最大返回行数
    * bucketName  OBS桶名
    * exportColumnList  导出的列名
    * timeZone  时区
    * instanceId  实例ID
    * taskId  任务ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startAt' => 'int',
            'endAt' => 'int',
            'taskIds' => 'int[]',
            'nodeId' => 'string',
            'keyword' => 'string',
            'fuzzy' => 'bool',
            'userList' => 'string[]',
            'dbList' => 'string[]',
            'operationList' => 'string[]',
            'clientIpList' => 'string[]',
            'threadIdList' => 'int[]',
            'trxIdList' => 'int[]',
            'sessionIdList' => 'int[]',
            'statusList' => 'int[]',
            'costMin' => 'double',
            'costMax' => 'double',
            'scanMin' => 'int',
            'scanMax' => 'int',
            'affectMin' => 'int',
            'affectMax' => 'int',
            'returnMin' => 'int',
            'returnMax' => 'int',
            'bucketName' => 'string',
            'exportColumnList' => 'string[]',
            'timeZone' => 'string',
            'instanceId' => 'string',
            'taskId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * taskIds  SQL洞察任务ID列表
    * nodeId  节点ID
    * keyword  关键字
    * fuzzy  是否模糊匹配
    * userList  用户名
    * dbList  数据库
    * operationList  操作类型
    * clientIpList  客户端IP
    * threadIdList  线程ID
    * trxIdList  事务ID
    * sessionIdList  会话ID
    * statusList  执行状态（0：成功，1：失败）
    * costMin  最小执行耗时（毫秒）
    * costMax  最大执行耗时（毫秒）
    * scanMin  最小扫描行数
    * scanMax  最大扫描行数
    * affectMin  最小影响行数
    * affectMax  最大影响行数
    * returnMin  最小返回行数
    * returnMax  最大返回行数
    * bucketName  OBS桶名
    * exportColumnList  导出的列名
    * timeZone  时区
    * instanceId  实例ID
    * taskId  任务ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
        'threadIdList' => 'int64',
        'trxIdList' => 'int64',
        'sessionIdList' => 'int64',
        'statusList' => 'int32',
        'costMin' => 'double',
        'costMax' => 'double',
        'scanMin' => 'int64',
        'scanMax' => 'int64',
        'affectMin' => 'int64',
        'affectMax' => 'int64',
        'returnMin' => 'int64',
        'returnMax' => 'int64',
        'bucketName' => null,
        'exportColumnList' => null,
        'timeZone' => null,
        'instanceId' => null,
        'taskId' => 'int64'
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
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * taskIds  SQL洞察任务ID列表
    * nodeId  节点ID
    * keyword  关键字
    * fuzzy  是否模糊匹配
    * userList  用户名
    * dbList  数据库
    * operationList  操作类型
    * clientIpList  客户端IP
    * threadIdList  线程ID
    * trxIdList  事务ID
    * sessionIdList  会话ID
    * statusList  执行状态（0：成功，1：失败）
    * costMin  最小执行耗时（毫秒）
    * costMax  最大执行耗时（毫秒）
    * scanMin  最小扫描行数
    * scanMax  最大扫描行数
    * affectMin  最小影响行数
    * affectMax  最大影响行数
    * returnMin  最小返回行数
    * returnMax  最大返回行数
    * bucketName  OBS桶名
    * exportColumnList  导出的列名
    * timeZone  时区
    * instanceId  实例ID
    * taskId  任务ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
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
            'costMin' => 'cost_min',
            'costMax' => 'cost_max',
            'scanMin' => 'scan_min',
            'scanMax' => 'scan_max',
            'affectMin' => 'affect_min',
            'affectMax' => 'affect_max',
            'returnMin' => 'return_min',
            'returnMax' => 'return_max',
            'bucketName' => 'bucket_name',
            'exportColumnList' => 'export_column_list',
            'timeZone' => 'time_zone',
            'instanceId' => 'instance_id',
            'taskId' => 'task_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * taskIds  SQL洞察任务ID列表
    * nodeId  节点ID
    * keyword  关键字
    * fuzzy  是否模糊匹配
    * userList  用户名
    * dbList  数据库
    * operationList  操作类型
    * clientIpList  客户端IP
    * threadIdList  线程ID
    * trxIdList  事务ID
    * sessionIdList  会话ID
    * statusList  执行状态（0：成功，1：失败）
    * costMin  最小执行耗时（毫秒）
    * costMax  最大执行耗时（毫秒）
    * scanMin  最小扫描行数
    * scanMax  最大扫描行数
    * affectMin  最小影响行数
    * affectMax  最大影响行数
    * returnMin  最小返回行数
    * returnMax  最大返回行数
    * bucketName  OBS桶名
    * exportColumnList  导出的列名
    * timeZone  时区
    * instanceId  实例ID
    * taskId  任务ID
    *
    * @var string[]
    */
    protected static $setters = [
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
            'costMin' => 'setCostMin',
            'costMax' => 'setCostMax',
            'scanMin' => 'setScanMin',
            'scanMax' => 'setScanMax',
            'affectMin' => 'setAffectMin',
            'affectMax' => 'setAffectMax',
            'returnMin' => 'setReturnMin',
            'returnMax' => 'setReturnMax',
            'bucketName' => 'setBucketName',
            'exportColumnList' => 'setExportColumnList',
            'timeZone' => 'setTimeZone',
            'instanceId' => 'setInstanceId',
            'taskId' => 'setTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * taskIds  SQL洞察任务ID列表
    * nodeId  节点ID
    * keyword  关键字
    * fuzzy  是否模糊匹配
    * userList  用户名
    * dbList  数据库
    * operationList  操作类型
    * clientIpList  客户端IP
    * threadIdList  线程ID
    * trxIdList  事务ID
    * sessionIdList  会话ID
    * statusList  执行状态（0：成功，1：失败）
    * costMin  最小执行耗时（毫秒）
    * costMax  最大执行耗时（毫秒）
    * scanMin  最小扫描行数
    * scanMax  最大扫描行数
    * affectMin  最小影响行数
    * affectMax  最大影响行数
    * returnMin  最小返回行数
    * returnMax  最大返回行数
    * bucketName  OBS桶名
    * exportColumnList  导出的列名
    * timeZone  时区
    * instanceId  实例ID
    * taskId  任务ID
    *
    * @var string[]
    */
    protected static $getters = [
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
            'costMin' => 'getCostMin',
            'costMax' => 'getCostMax',
            'scanMin' => 'getScanMin',
            'scanMax' => 'getScanMax',
            'affectMin' => 'getAffectMin',
            'affectMax' => 'getAffectMax',
            'returnMin' => 'getReturnMin',
            'returnMax' => 'getReturnMax',
            'bucketName' => 'getBucketName',
            'exportColumnList' => 'getExportColumnList',
            'timeZone' => 'getTimeZone',
            'instanceId' => 'getInstanceId',
            'taskId' => 'getTaskId'
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
        $this->container['costMin'] = isset($data['costMin']) ? $data['costMin'] : null;
        $this->container['costMax'] = isset($data['costMax']) ? $data['costMax'] : null;
        $this->container['scanMin'] = isset($data['scanMin']) ? $data['scanMin'] : null;
        $this->container['scanMax'] = isset($data['scanMax']) ? $data['scanMax'] : null;
        $this->container['affectMin'] = isset($data['affectMin']) ? $data['affectMin'] : null;
        $this->container['affectMax'] = isset($data['affectMax']) ? $data['affectMax'] : null;
        $this->container['returnMin'] = isset($data['returnMin']) ? $data['returnMin'] : null;
        $this->container['returnMax'] = isset($data['returnMax']) ? $data['returnMax'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['exportColumnList'] = isset($data['exportColumnList']) ? $data['exportColumnList'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
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
    * Gets startAt
    *  开始时间（Unix timestamp），单位：毫秒
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
    * @param int $startAt 开始时间（Unix timestamp），单位：毫秒
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
    *  结束时间（Unix timestamp），单位：毫秒
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
    * @param int $endAt 结束时间（Unix timestamp），单位：毫秒
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
    *  SQL洞察任务ID列表
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
    * @param int[]|null $taskIds SQL洞察任务ID列表
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
    *  节点ID
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
    * @param string|null $nodeId 节点ID
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
    *  关键字
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
    * @param string|null $keyword 关键字
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
    *  是否模糊匹配
    *
    * @return bool|null
    */
    public function getFuzzy()
    {
        return $this->container['fuzzy'];
    }

    /**
    * Sets fuzzy
    *
    * @param bool|null $fuzzy 是否模糊匹配
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
    *  用户名
    *
    * @return string[]|null
    */
    public function getUserList()
    {
        return $this->container['userList'];
    }

    /**
    * Sets userList
    *
    * @param string[]|null $userList 用户名
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
    *  数据库
    *
    * @return string[]|null
    */
    public function getDbList()
    {
        return $this->container['dbList'];
    }

    /**
    * Sets dbList
    *
    * @param string[]|null $dbList 数据库
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
    *  操作类型
    *
    * @return string[]|null
    */
    public function getOperationList()
    {
        return $this->container['operationList'];
    }

    /**
    * Sets operationList
    *
    * @param string[]|null $operationList 操作类型
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
    *  客户端IP
    *
    * @return string[]|null
    */
    public function getClientIpList()
    {
        return $this->container['clientIpList'];
    }

    /**
    * Sets clientIpList
    *
    * @param string[]|null $clientIpList 客户端IP
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
    *  线程ID
    *
    * @return int[]|null
    */
    public function getThreadIdList()
    {
        return $this->container['threadIdList'];
    }

    /**
    * Sets threadIdList
    *
    * @param int[]|null $threadIdList 线程ID
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
    *  事务ID
    *
    * @return int[]|null
    */
    public function getTrxIdList()
    {
        return $this->container['trxIdList'];
    }

    /**
    * Sets trxIdList
    *
    * @param int[]|null $trxIdList 事务ID
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
    *  会话ID
    *
    * @return int[]|null
    */
    public function getSessionIdList()
    {
        return $this->container['sessionIdList'];
    }

    /**
    * Sets sessionIdList
    *
    * @param int[]|null $sessionIdList 会话ID
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
    *  执行状态（0：成功，1：失败）
    *
    * @return int[]|null
    */
    public function getStatusList()
    {
        return $this->container['statusList'];
    }

    /**
    * Sets statusList
    *
    * @param int[]|null $statusList 执行状态（0：成功，1：失败）
    *
    * @return $this
    */
    public function setStatusList($statusList)
    {
        $this->container['statusList'] = $statusList;
        return $this;
    }

    /**
    * Gets costMin
    *  最小执行耗时（毫秒）
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
    * @param double|null $costMin 最小执行耗时（毫秒）
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
    *  最大执行耗时（毫秒）
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
    * @param double|null $costMax 最大执行耗时（毫秒）
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
    *  最小扫描行数
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
    * @param int|null $scanMin 最小扫描行数
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
    *  最大扫描行数
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
    * @param int|null $scanMax 最大扫描行数
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
    *  最小影响行数
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
    * @param int|null $affectMin 最小影响行数
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
    *  最大影响行数
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
    * @param int|null $affectMax 最大影响行数
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
    *  最小返回行数
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
    * @param int|null $returnMin 最小返回行数
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
    *  最大返回行数
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
    * @param int|null $returnMax 最大返回行数
    *
    * @return $this
    */
    public function setReturnMax($returnMax)
    {
        $this->container['returnMax'] = $returnMax;
        return $this;
    }

    /**
    * Gets bucketName
    *  OBS桶名
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName OBS桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets exportColumnList
    *  导出的列名
    *
    * @return string[]|null
    */
    public function getExportColumnList()
    {
        return $this->container['exportColumnList'];
    }

    /**
    * Sets exportColumnList
    *
    * @param string[]|null $exportColumnList 导出的列名
    *
    * @return $this
    */
    public function setExportColumnList($exportColumnList)
    {
        $this->container['exportColumnList'] = $exportColumnList;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
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
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID
    *
    * @return int|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param int|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
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

