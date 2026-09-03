<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDatabaseObjectsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDatabaseObjectsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectionId  连接ID
    * dbName  数据库名称
    * dbId  数据库ID
    * schemaName  Schema名称
    * tableName  表名
    * tableId  表ID
    * startAt  开始时间(Unix timestamp),单位:毫秒
    * endAt  结束时间(Unix timestamp),单位:毫秒
    * pageNum  页码
    * pageSize  每页记录数
    * orderBy  排序字段
    * order  排序方式（asc/desc）
    * extraOrderBy  额外排序字段
    * extraOrder  额外排序方式
    * objType  对象类型
    * retType  返回类型
    * isSys  是否系统对象
    * objSubType  对象子类型
    * nodeType  节点类型
    * nodeId  节点ID
    * objName  objName
    * keywords  keywords
    * curPage  curPage
    * perPage  perPage
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectionId' => 'string',
            'dbName' => 'string',
            'dbId' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'tableId' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'orderBy' => 'string',
            'order' => 'string',
            'extraOrderBy' => 'string',
            'extraOrder' => 'string',
            'objType' => 'string',
            'retType' => 'string',
            'isSys' => 'string',
            'objSubType' => 'string',
            'nodeType' => 'string',
            'nodeId' => 'string',
            'objName' => 'string',
            'keywords' => 'string',
            'curPage' => 'string',
            'perPage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectionId  连接ID
    * dbName  数据库名称
    * dbId  数据库ID
    * schemaName  Schema名称
    * tableName  表名
    * tableId  表ID
    * startAt  开始时间(Unix timestamp),单位:毫秒
    * endAt  结束时间(Unix timestamp),单位:毫秒
    * pageNum  页码
    * pageSize  每页记录数
    * orderBy  排序字段
    * order  排序方式（asc/desc）
    * extraOrderBy  额外排序字段
    * extraOrder  额外排序方式
    * objType  对象类型
    * retType  返回类型
    * isSys  是否系统对象
    * objSubType  对象子类型
    * nodeType  节点类型
    * nodeId  节点ID
    * objName  objName
    * keywords  keywords
    * curPage  curPage
    * perPage  perPage
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectionId' => null,
        'dbName' => null,
        'dbId' => null,
        'schemaName' => null,
        'tableName' => null,
        'tableId' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'orderBy' => null,
        'order' => null,
        'extraOrderBy' => null,
        'extraOrder' => null,
        'objType' => null,
        'retType' => null,
        'isSys' => null,
        'objSubType' => null,
        'nodeType' => null,
        'nodeId' => null,
        'objName' => null,
        'keywords' => null,
        'curPage' => null,
        'perPage' => null
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
    * connectionId  连接ID
    * dbName  数据库名称
    * dbId  数据库ID
    * schemaName  Schema名称
    * tableName  表名
    * tableId  表ID
    * startAt  开始时间(Unix timestamp),单位:毫秒
    * endAt  结束时间(Unix timestamp),单位:毫秒
    * pageNum  页码
    * pageSize  每页记录数
    * orderBy  排序字段
    * order  排序方式（asc/desc）
    * extraOrderBy  额外排序字段
    * extraOrder  额外排序方式
    * objType  对象类型
    * retType  返回类型
    * isSys  是否系统对象
    * objSubType  对象子类型
    * nodeType  节点类型
    * nodeId  节点ID
    * objName  objName
    * keywords  keywords
    * curPage  curPage
    * perPage  perPage
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectionId' => 'connection_id',
            'dbName' => 'db_name',
            'dbId' => 'db_id',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'tableId' => 'table_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'orderBy' => 'order_by',
            'order' => 'order',
            'extraOrderBy' => 'extra_order_by',
            'extraOrder' => 'extra_order',
            'objType' => 'obj_type',
            'retType' => 'ret_type',
            'isSys' => 'is_sys',
            'objSubType' => 'obj_sub_type',
            'nodeType' => 'node_type',
            'nodeId' => 'node_id',
            'objName' => 'obj_name',
            'keywords' => 'keywords',
            'curPage' => 'cur_page',
            'perPage' => 'per_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectionId  连接ID
    * dbName  数据库名称
    * dbId  数据库ID
    * schemaName  Schema名称
    * tableName  表名
    * tableId  表ID
    * startAt  开始时间(Unix timestamp),单位:毫秒
    * endAt  结束时间(Unix timestamp),单位:毫秒
    * pageNum  页码
    * pageSize  每页记录数
    * orderBy  排序字段
    * order  排序方式（asc/desc）
    * extraOrderBy  额外排序字段
    * extraOrder  额外排序方式
    * objType  对象类型
    * retType  返回类型
    * isSys  是否系统对象
    * objSubType  对象子类型
    * nodeType  节点类型
    * nodeId  节点ID
    * objName  objName
    * keywords  keywords
    * curPage  curPage
    * perPage  perPage
    *
    * @var string[]
    */
    protected static $setters = [
            'connectionId' => 'setConnectionId',
            'dbName' => 'setDbName',
            'dbId' => 'setDbId',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'tableId' => 'setTableId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'orderBy' => 'setOrderBy',
            'order' => 'setOrder',
            'extraOrderBy' => 'setExtraOrderBy',
            'extraOrder' => 'setExtraOrder',
            'objType' => 'setObjType',
            'retType' => 'setRetType',
            'isSys' => 'setIsSys',
            'objSubType' => 'setObjSubType',
            'nodeType' => 'setNodeType',
            'nodeId' => 'setNodeId',
            'objName' => 'setObjName',
            'keywords' => 'setKeywords',
            'curPage' => 'setCurPage',
            'perPage' => 'setPerPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectionId  连接ID
    * dbName  数据库名称
    * dbId  数据库ID
    * schemaName  Schema名称
    * tableName  表名
    * tableId  表ID
    * startAt  开始时间(Unix timestamp),单位:毫秒
    * endAt  结束时间(Unix timestamp),单位:毫秒
    * pageNum  页码
    * pageSize  每页记录数
    * orderBy  排序字段
    * order  排序方式（asc/desc）
    * extraOrderBy  额外排序字段
    * extraOrder  额外排序方式
    * objType  对象类型
    * retType  返回类型
    * isSys  是否系统对象
    * objSubType  对象子类型
    * nodeType  节点类型
    * nodeId  节点ID
    * objName  objName
    * keywords  keywords
    * curPage  curPage
    * perPage  perPage
    *
    * @var string[]
    */
    protected static $getters = [
            'connectionId' => 'getConnectionId',
            'dbName' => 'getDbName',
            'dbId' => 'getDbId',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'tableId' => 'getTableId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'orderBy' => 'getOrderBy',
            'order' => 'getOrder',
            'extraOrderBy' => 'getExtraOrderBy',
            'extraOrder' => 'getExtraOrder',
            'objType' => 'getObjType',
            'retType' => 'getRetType',
            'isSys' => 'getIsSys',
            'objSubType' => 'getObjSubType',
            'nodeType' => 'getNodeType',
            'nodeId' => 'getNodeId',
            'objName' => 'getObjName',
            'keywords' => 'getKeywords',
            'curPage' => 'getCurPage',
            'perPage' => 'getPerPage'
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
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['extraOrderBy'] = isset($data['extraOrderBy']) ? $data['extraOrderBy'] : null;
        $this->container['extraOrder'] = isset($data['extraOrder']) ? $data['extraOrder'] : null;
        $this->container['objType'] = isset($data['objType']) ? $data['objType'] : null;
        $this->container['retType'] = isset($data['retType']) ? $data['retType'] : null;
        $this->container['isSys'] = isset($data['isSys']) ? $data['isSys'] : null;
        $this->container['objSubType'] = isset($data['objSubType']) ? $data['objSubType'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['objName'] = isset($data['objName']) ? $data['objName'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectionId'] === null) {
            $invalidProperties[] = "'connectionId' can't be null";
        }
        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
        if ($this->container['pageNum'] === null) {
            $invalidProperties[] = "'pageNum' can't be null";
        }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
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
    * Gets connectionId
    *  连接ID
    *
    * @return string
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string $connectionId 连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
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
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets dbId
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string|null $dbId 数据库ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets schemaName
    *  Schema名称
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName Schema名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets tableName
    *  表名
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
    * @param string|null $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets tableId
    *  表ID
    *
    * @return string|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param string|null $tableId 表ID
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间(Unix timestamp),单位:毫秒
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
    * @param int $startAt 开始时间(Unix timestamp),单位:毫秒
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
    *  结束时间(Unix timestamp),单位:毫秒
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
    * @param int $endAt 结束时间(Unix timestamp),单位:毫秒
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets pageNum
    *  页码
    *
    * @return int
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int $pageNum 页码
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页记录数
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize 每页记录数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序字段
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序字段
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets order
    *  排序方式（asc/desc）
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
    * @param string|null $order 排序方式（asc/desc）
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets extraOrderBy
    *  额外排序字段
    *
    * @return string|null
    */
    public function getExtraOrderBy()
    {
        return $this->container['extraOrderBy'];
    }

    /**
    * Sets extraOrderBy
    *
    * @param string|null $extraOrderBy 额外排序字段
    *
    * @return $this
    */
    public function setExtraOrderBy($extraOrderBy)
    {
        $this->container['extraOrderBy'] = $extraOrderBy;
        return $this;
    }

    /**
    * Gets extraOrder
    *  额外排序方式
    *
    * @return string|null
    */
    public function getExtraOrder()
    {
        return $this->container['extraOrder'];
    }

    /**
    * Sets extraOrder
    *
    * @param string|null $extraOrder 额外排序方式
    *
    * @return $this
    */
    public function setExtraOrder($extraOrder)
    {
        $this->container['extraOrder'] = $extraOrder;
        return $this;
    }

    /**
    * Gets objType
    *  对象类型
    *
    * @return string|null
    */
    public function getObjType()
    {
        return $this->container['objType'];
    }

    /**
    * Sets objType
    *
    * @param string|null $objType 对象类型
    *
    * @return $this
    */
    public function setObjType($objType)
    {
        $this->container['objType'] = $objType;
        return $this;
    }

    /**
    * Gets retType
    *  返回类型
    *
    * @return string|null
    */
    public function getRetType()
    {
        return $this->container['retType'];
    }

    /**
    * Sets retType
    *
    * @param string|null $retType 返回类型
    *
    * @return $this
    */
    public function setRetType($retType)
    {
        $this->container['retType'] = $retType;
        return $this;
    }

    /**
    * Gets isSys
    *  是否系统对象
    *
    * @return string|null
    */
    public function getIsSys()
    {
        return $this->container['isSys'];
    }

    /**
    * Sets isSys
    *
    * @param string|null $isSys 是否系统对象
    *
    * @return $this
    */
    public function setIsSys($isSys)
    {
        $this->container['isSys'] = $isSys;
        return $this;
    }

    /**
    * Gets objSubType
    *  对象子类型
    *
    * @return string|null
    */
    public function getObjSubType()
    {
        return $this->container['objSubType'];
    }

    /**
    * Sets objSubType
    *
    * @param string|null $objSubType 对象子类型
    *
    * @return $this
    */
    public function setObjSubType($objSubType)
    {
        $this->container['objSubType'] = $objSubType;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
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
    * Gets objName
    *  objName
    *
    * @return string|null
    */
    public function getObjName()
    {
        return $this->container['objName'];
    }

    /**
    * Sets objName
    *
    * @param string|null $objName objName
    *
    * @return $this
    */
    public function setObjName($objName)
    {
        $this->container['objName'] = $objName;
        return $this;
    }

    /**
    * Gets keywords
    *  keywords
    *
    * @return string|null
    */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
    * Sets keywords
    *
    * @param string|null $keywords keywords
    *
    * @return $this
    */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    /**
    * Gets curPage
    *  curPage
    *
    * @return string|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param string|null $curPage curPage
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets perPage
    *  perPage
    *
    * @return string|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param string|null $perPage perPage
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
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

