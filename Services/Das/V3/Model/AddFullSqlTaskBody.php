<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddFullSqlTaskBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddFullSqlTaskBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datastoreType  数据库引擎
    * nodeId  节点ID，有值时创建节点维度任务
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * userList  用户名列表，最大长度20
    * keywordList  关键字列表，最大长度20
    * dbList  数据库列表，最大长度20
    * operationList  操作类型列表，最大长度20
    * threadIdList  线程id列表，最大长度20
    * statusList  执行状态列表，\"0\"为成功，\"1\"为失败，最大长度20
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datastoreType' => 'string',
            'nodeId' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'userList' => 'string[]',
            'keywordList' => 'string[]',
            'dbList' => 'string[]',
            'operationList' => 'string[]',
            'threadIdList' => 'string[]',
            'statusList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datastoreType  数据库引擎
    * nodeId  节点ID，有值时创建节点维度任务
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * userList  用户名列表，最大长度20
    * keywordList  关键字列表，最大长度20
    * dbList  数据库列表，最大长度20
    * operationList  操作类型列表，最大长度20
    * threadIdList  线程id列表，最大长度20
    * statusList  执行状态列表，\"0\"为成功，\"1\"为失败，最大长度20
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datastoreType' => null,
        'nodeId' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'userList' => null,
        'keywordList' => null,
        'dbList' => null,
        'operationList' => null,
        'threadIdList' => null,
        'statusList' => null
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
    * datastoreType  数据库引擎
    * nodeId  节点ID，有值时创建节点维度任务
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * userList  用户名列表，最大长度20
    * keywordList  关键字列表，最大长度20
    * dbList  数据库列表，最大长度20
    * operationList  操作类型列表，最大长度20
    * threadIdList  线程id列表，最大长度20
    * statusList  执行状态列表，\"0\"为成功，\"1\"为失败，最大长度20
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datastoreType' => 'datastore_type',
            'nodeId' => 'node_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'userList' => 'user_list',
            'keywordList' => 'keyword_list',
            'dbList' => 'db_list',
            'operationList' => 'operation_list',
            'threadIdList' => 'thread_id_list',
            'statusList' => 'status_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datastoreType  数据库引擎
    * nodeId  节点ID，有值时创建节点维度任务
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * userList  用户名列表，最大长度20
    * keywordList  关键字列表，最大长度20
    * dbList  数据库列表，最大长度20
    * operationList  操作类型列表，最大长度20
    * threadIdList  线程id列表，最大长度20
    * statusList  执行状态列表，\"0\"为成功，\"1\"为失败，最大长度20
    *
    * @var string[]
    */
    protected static $setters = [
            'datastoreType' => 'setDatastoreType',
            'nodeId' => 'setNodeId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'userList' => 'setUserList',
            'keywordList' => 'setKeywordList',
            'dbList' => 'setDbList',
            'operationList' => 'setOperationList',
            'threadIdList' => 'setThreadIdList',
            'statusList' => 'setStatusList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datastoreType  数据库引擎
    * nodeId  节点ID，有值时创建节点维度任务
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * userList  用户名列表，最大长度20
    * keywordList  关键字列表，最大长度20
    * dbList  数据库列表，最大长度20
    * operationList  操作类型列表，最大长度20
    * threadIdList  线程id列表，最大长度20
    * statusList  执行状态列表，\"0\"为成功，\"1\"为失败，最大长度20
    *
    * @var string[]
    */
    protected static $getters = [
            'datastoreType' => 'getDatastoreType',
            'nodeId' => 'getNodeId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'userList' => 'getUserList',
            'keywordList' => 'getKeywordList',
            'dbList' => 'getDbList',
            'operationList' => 'getOperationList',
            'threadIdList' => 'getThreadIdList',
            'statusList' => 'getStatusList'
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
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['userList'] = isset($data['userList']) ? $data['userList'] : null;
        $this->container['keywordList'] = isset($data['keywordList']) ? $data['keywordList'] : null;
        $this->container['dbList'] = isset($data['dbList']) ? $data['dbList'] : null;
        $this->container['operationList'] = isset($data['operationList']) ? $data['operationList'] : null;
        $this->container['threadIdList'] = isset($data['threadIdList']) ? $data['threadIdList'] : null;
        $this->container['statusList'] = isset($data['statusList']) ? $data['statusList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
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
    * Gets datastoreType
    *  数据库引擎
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 数据库引擎
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID，有值时创建节点维度任务
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
    * @param string|null $nodeId 节点ID，有值时创建节点维度任务
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
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
    * Gets userList
    *  用户名列表，最大长度20
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
    * @param string[]|null $userList 用户名列表，最大长度20
    *
    * @return $this
    */
    public function setUserList($userList)
    {
        $this->container['userList'] = $userList;
        return $this;
    }

    /**
    * Gets keywordList
    *  关键字列表，最大长度20
    *
    * @return string[]|null
    */
    public function getKeywordList()
    {
        return $this->container['keywordList'];
    }

    /**
    * Sets keywordList
    *
    * @param string[]|null $keywordList 关键字列表，最大长度20
    *
    * @return $this
    */
    public function setKeywordList($keywordList)
    {
        $this->container['keywordList'] = $keywordList;
        return $this;
    }

    /**
    * Gets dbList
    *  数据库列表，最大长度20
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
    * @param string[]|null $dbList 数据库列表，最大长度20
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
    *  操作类型列表，最大长度20
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
    * @param string[]|null $operationList 操作类型列表，最大长度20
    *
    * @return $this
    */
    public function setOperationList($operationList)
    {
        $this->container['operationList'] = $operationList;
        return $this;
    }

    /**
    * Gets threadIdList
    *  线程id列表，最大长度20
    *
    * @return string[]|null
    */
    public function getThreadIdList()
    {
        return $this->container['threadIdList'];
    }

    /**
    * Sets threadIdList
    *
    * @param string[]|null $threadIdList 线程id列表，最大长度20
    *
    * @return $this
    */
    public function setThreadIdList($threadIdList)
    {
        $this->container['threadIdList'] = $threadIdList;
        return $this;
    }

    /**
    * Gets statusList
    *  执行状态列表，\"0\"为成功，\"1\"为失败，最大长度20
    *
    * @return string[]|null
    */
    public function getStatusList()
    {
        return $this->container['statusList'];
    }

    /**
    * Sets statusList
    *
    * @param string[]|null $statusList 执行状态列表，\"0\"为成功，\"1\"为失败，最大长度20
    *
    * @return $this
    */
    public function setStatusList($statusList)
    {
        $this->container['statusList'] = $statusList;
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

