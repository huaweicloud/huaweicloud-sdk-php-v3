<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFullSqlTasksRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFullSqlTasksRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * nodeId  节点ID
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * createAtLeft  创建时间的查询左区间
    * createAtRight  创建时间的查询右区间
    * user  用户名
    * keyword  关键字
    * dbName  数据库
    * operation  操作
    * threadId  线程ID
    * trxId  事务ID
    * status  执行状态（0：成功，1：失败）
    * sqlTemplateId  SQL模板ID
    * sortField  排序字段（create_at, range_start_at, range_end_at）
    * asc  排序规则（true：升序，false：降序）
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeId' => 'string',
            'rangeLeft' => 'int',
            'rangeRight' => 'int',
            'createAtLeft' => 'int',
            'createAtRight' => 'int',
            'user' => 'string',
            'keyword' => 'string',
            'dbName' => 'string',
            'operation' => 'string',
            'threadId' => 'string',
            'trxId' => 'string',
            'status' => 'string',
            'sqlTemplateId' => 'string',
            'sortField' => 'string',
            'asc' => 'bool',
            'pageSize' => 'int',
            'curPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * nodeId  节点ID
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * createAtLeft  创建时间的查询左区间
    * createAtRight  创建时间的查询右区间
    * user  用户名
    * keyword  关键字
    * dbName  数据库
    * operation  操作
    * threadId  线程ID
    * trxId  事务ID
    * status  执行状态（0：成功，1：失败）
    * sqlTemplateId  SQL模板ID
    * sortField  排序字段（create_at, range_start_at, range_end_at）
    * asc  排序规则（true：升序，false：降序）
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeId' => null,
        'rangeLeft' => 'int64',
        'rangeRight' => 'int64',
        'createAtLeft' => 'int64',
        'createAtRight' => 'int64',
        'user' => null,
        'keyword' => null,
        'dbName' => null,
        'operation' => null,
        'threadId' => null,
        'trxId' => null,
        'status' => null,
        'sqlTemplateId' => null,
        'sortField' => null,
        'asc' => null,
        'pageSize' => 'int32',
        'curPage' => 'int32'
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
    * instanceId  实例ID
    * nodeId  节点ID
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * createAtLeft  创建时间的查询左区间
    * createAtRight  创建时间的查询右区间
    * user  用户名
    * keyword  关键字
    * dbName  数据库
    * operation  操作
    * threadId  线程ID
    * trxId  事务ID
    * status  执行状态（0：成功，1：失败）
    * sqlTemplateId  SQL模板ID
    * sortField  排序字段（create_at, range_start_at, range_end_at）
    * asc  排序规则（true：升序，false：降序）
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'rangeLeft' => 'range_left',
            'rangeRight' => 'range_right',
            'createAtLeft' => 'create_at_left',
            'createAtRight' => 'create_at_right',
            'user' => 'user',
            'keyword' => 'keyword',
            'dbName' => 'db_name',
            'operation' => 'operation',
            'threadId' => 'thread_id',
            'trxId' => 'trx_id',
            'status' => 'status',
            'sqlTemplateId' => 'sql_template_id',
            'sortField' => 'sort_field',
            'asc' => 'asc',
            'pageSize' => 'page_size',
            'curPage' => 'cur_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * nodeId  节点ID
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * createAtLeft  创建时间的查询左区间
    * createAtRight  创建时间的查询右区间
    * user  用户名
    * keyword  关键字
    * dbName  数据库
    * operation  操作
    * threadId  线程ID
    * trxId  事务ID
    * status  执行状态（0：成功，1：失败）
    * sqlTemplateId  SQL模板ID
    * sortField  排序字段（create_at, range_start_at, range_end_at）
    * asc  排序规则（true：升序，false：降序）
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'rangeLeft' => 'setRangeLeft',
            'rangeRight' => 'setRangeRight',
            'createAtLeft' => 'setCreateAtLeft',
            'createAtRight' => 'setCreateAtRight',
            'user' => 'setUser',
            'keyword' => 'setKeyword',
            'dbName' => 'setDbName',
            'operation' => 'setOperation',
            'threadId' => 'setThreadId',
            'trxId' => 'setTrxId',
            'status' => 'setStatus',
            'sqlTemplateId' => 'setSqlTemplateId',
            'sortField' => 'setSortField',
            'asc' => 'setAsc',
            'pageSize' => 'setPageSize',
            'curPage' => 'setCurPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * nodeId  节点ID
    * rangeLeft  起止时间的查询左区间
    * rangeRight  起止时间的查询右区间
    * createAtLeft  创建时间的查询左区间
    * createAtRight  创建时间的查询右区间
    * user  用户名
    * keyword  关键字
    * dbName  数据库
    * operation  操作
    * threadId  线程ID
    * trxId  事务ID
    * status  执行状态（0：成功，1：失败）
    * sqlTemplateId  SQL模板ID
    * sortField  排序字段（create_at, range_start_at, range_end_at）
    * asc  排序规则（true：升序，false：降序）
    * pageSize  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'rangeLeft' => 'getRangeLeft',
            'rangeRight' => 'getRangeRight',
            'createAtLeft' => 'getCreateAtLeft',
            'createAtRight' => 'getCreateAtRight',
            'user' => 'getUser',
            'keyword' => 'getKeyword',
            'dbName' => 'getDbName',
            'operation' => 'getOperation',
            'threadId' => 'getThreadId',
            'trxId' => 'getTrxId',
            'status' => 'getStatus',
            'sqlTemplateId' => 'getSqlTemplateId',
            'sortField' => 'getSortField',
            'asc' => 'getAsc',
            'pageSize' => 'getPageSize',
            'curPage' => 'getCurPage'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['rangeLeft'] = isset($data['rangeLeft']) ? $data['rangeLeft'] : null;
        $this->container['rangeRight'] = isset($data['rangeRight']) ? $data['rangeRight'] : null;
        $this->container['createAtLeft'] = isset($data['createAtLeft']) ? $data['createAtLeft'] : null;
        $this->container['createAtRight'] = isset($data['createAtRight']) ? $data['createAtRight'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['trxId'] = isset($data['trxId']) ? $data['trxId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sqlTemplateId'] = isset($data['sqlTemplateId']) ? $data['sqlTemplateId'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
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
    *  实例ID
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
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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
    * Gets rangeLeft
    *  起止时间的查询左区间
    *
    * @return int|null
    */
    public function getRangeLeft()
    {
        return $this->container['rangeLeft'];
    }

    /**
    * Sets rangeLeft
    *
    * @param int|null $rangeLeft 起止时间的查询左区间
    *
    * @return $this
    */
    public function setRangeLeft($rangeLeft)
    {
        $this->container['rangeLeft'] = $rangeLeft;
        return $this;
    }

    /**
    * Gets rangeRight
    *  起止时间的查询右区间
    *
    * @return int|null
    */
    public function getRangeRight()
    {
        return $this->container['rangeRight'];
    }

    /**
    * Sets rangeRight
    *
    * @param int|null $rangeRight 起止时间的查询右区间
    *
    * @return $this
    */
    public function setRangeRight($rangeRight)
    {
        $this->container['rangeRight'] = $rangeRight;
        return $this;
    }

    /**
    * Gets createAtLeft
    *  创建时间的查询左区间
    *
    * @return int|null
    */
    public function getCreateAtLeft()
    {
        return $this->container['createAtLeft'];
    }

    /**
    * Sets createAtLeft
    *
    * @param int|null $createAtLeft 创建时间的查询左区间
    *
    * @return $this
    */
    public function setCreateAtLeft($createAtLeft)
    {
        $this->container['createAtLeft'] = $createAtLeft;
        return $this;
    }

    /**
    * Gets createAtRight
    *  创建时间的查询右区间
    *
    * @return int|null
    */
    public function getCreateAtRight()
    {
        return $this->container['createAtRight'];
    }

    /**
    * Sets createAtRight
    *
    * @param int|null $createAtRight 创建时间的查询右区间
    *
    * @return $this
    */
    public function setCreateAtRight($createAtRight)
    {
        $this->container['createAtRight'] = $createAtRight;
        return $this;
    }

    /**
    * Gets user
    *  用户名
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户名
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
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
    * Gets dbName
    *  数据库
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
    * @param string|null $dbName 数据库
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets operation
    *  操作
    *
    * @return string|null
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string|null $operation 操作
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets threadId
    *  线程ID
    *
    * @return string|null
    */
    public function getThreadId()
    {
        return $this->container['threadId'];
    }

    /**
    * Sets threadId
    *
    * @param string|null $threadId 线程ID
    *
    * @return $this
    */
    public function setThreadId($threadId)
    {
        $this->container['threadId'] = $threadId;
        return $this;
    }

    /**
    * Gets trxId
    *  事务ID
    *
    * @return string|null
    */
    public function getTrxId()
    {
        return $this->container['trxId'];
    }

    /**
    * Sets trxId
    *
    * @param string|null $trxId 事务ID
    *
    * @return $this
    */
    public function setTrxId($trxId)
    {
        $this->container['trxId'] = $trxId;
        return $this;
    }

    /**
    * Gets status
    *  执行状态（0：成功，1：失败）
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
    * @param string|null $status 执行状态（0：成功，1：失败）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sqlTemplateId
    *  SQL模板ID
    *
    * @return string|null
    */
    public function getSqlTemplateId()
    {
        return $this->container['sqlTemplateId'];
    }

    /**
    * Sets sqlTemplateId
    *
    * @param string|null $sqlTemplateId SQL模板ID
    *
    * @return $this
    */
    public function setSqlTemplateId($sqlTemplateId)
    {
        $this->container['sqlTemplateId'] = $sqlTemplateId;
        return $this;
    }

    /**
    * Gets sortField
    *  排序字段（create_at, range_start_at, range_end_at）
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
    * @param string|null $sortField 排序字段（create_at, range_start_at, range_end_at）
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
    *  排序规则（true：升序，false：降序）
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
    * @param bool|null $asc 排序规则（true：升序，false：降序）
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页记录数
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
    * @param int|null $pageSize 每页记录数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets curPage
    *  当前页码
    *
    * @return int|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int|null $curPage 当前页码
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
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

