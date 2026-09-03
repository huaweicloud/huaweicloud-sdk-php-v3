<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddTasksNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddTasksNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * nodeId  节点ID，实例节点的唯一标识
    * keyword  关键字，可组合，用逗号分隔
    * userList  用户名，可组合，用逗号分隔
    * dbList  数据库，可组合，用逗号分隔
    * operationList  操作类型，可组合，用逗号分隔
    * threadIdList  线程ID，可组合，用逗号分隔
    * trxIdList  事务ID，可组合，用逗号分隔
    * statusList  执行状态，可组合，用逗号分隔
    * sqlTemplateIds  SQL模板ID，可组合，用逗号分隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'nodeId' => 'string',
            'keyword' => 'string',
            'userList' => 'string',
            'dbList' => 'string',
            'operationList' => 'string',
            'threadIdList' => 'string',
            'trxIdList' => 'string',
            'statusList' => 'string',
            'sqlTemplateIds' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，实例的唯一标识
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * nodeId  节点ID，实例节点的唯一标识
    * keyword  关键字，可组合，用逗号分隔
    * userList  用户名，可组合，用逗号分隔
    * dbList  数据库，可组合，用逗号分隔
    * operationList  操作类型，可组合，用逗号分隔
    * threadIdList  线程ID，可组合，用逗号分隔
    * trxIdList  事务ID，可组合，用逗号分隔
    * statusList  执行状态，可组合，用逗号分隔
    * sqlTemplateIds  SQL模板ID，可组合，用逗号分隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'nodeId' => null,
        'keyword' => null,
        'userList' => null,
        'dbList' => null,
        'operationList' => null,
        'threadIdList' => null,
        'trxIdList' => null,
        'statusList' => null,
        'sqlTemplateIds' => null
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
    * instanceId  实例ID，实例的唯一标识
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * nodeId  节点ID，实例节点的唯一标识
    * keyword  关键字，可组合，用逗号分隔
    * userList  用户名，可组合，用逗号分隔
    * dbList  数据库，可组合，用逗号分隔
    * operationList  操作类型，可组合，用逗号分隔
    * threadIdList  线程ID，可组合，用逗号分隔
    * trxIdList  事务ID，可组合，用逗号分隔
    * statusList  执行状态，可组合，用逗号分隔
    * sqlTemplateIds  SQL模板ID，可组合，用逗号分隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'nodeId' => 'node_id',
            'keyword' => 'keyword',
            'userList' => 'user_list',
            'dbList' => 'db_list',
            'operationList' => 'operation_list',
            'threadIdList' => 'thread_id_list',
            'trxIdList' => 'trx_id_list',
            'statusList' => 'status_list',
            'sqlTemplateIds' => 'sql_template_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，实例的唯一标识
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * nodeId  节点ID，实例节点的唯一标识
    * keyword  关键字，可组合，用逗号分隔
    * userList  用户名，可组合，用逗号分隔
    * dbList  数据库，可组合，用逗号分隔
    * operationList  操作类型，可组合，用逗号分隔
    * threadIdList  线程ID，可组合，用逗号分隔
    * trxIdList  事务ID，可组合，用逗号分隔
    * statusList  执行状态，可组合，用逗号分隔
    * sqlTemplateIds  SQL模板ID，可组合，用逗号分隔
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'nodeId' => 'setNodeId',
            'keyword' => 'setKeyword',
            'userList' => 'setUserList',
            'dbList' => 'setDbList',
            'operationList' => 'setOperationList',
            'threadIdList' => 'setThreadIdList',
            'trxIdList' => 'setTrxIdList',
            'statusList' => 'setStatusList',
            'sqlTemplateIds' => 'setSqlTemplateIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，实例的唯一标识
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * nodeId  节点ID，实例节点的唯一标识
    * keyword  关键字，可组合，用逗号分隔
    * userList  用户名，可组合，用逗号分隔
    * dbList  数据库，可组合，用逗号分隔
    * operationList  操作类型，可组合，用逗号分隔
    * threadIdList  线程ID，可组合，用逗号分隔
    * trxIdList  事务ID，可组合，用逗号分隔
    * statusList  执行状态，可组合，用逗号分隔
    * sqlTemplateIds  SQL模板ID，可组合，用逗号分隔
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'nodeId' => 'getNodeId',
            'keyword' => 'getKeyword',
            'userList' => 'getUserList',
            'dbList' => 'getDbList',
            'operationList' => 'getOperationList',
            'threadIdList' => 'getThreadIdList',
            'trxIdList' => 'getTrxIdList',
            'statusList' => 'getStatusList',
            'sqlTemplateIds' => 'getSqlTemplateIds'
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
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['userList'] = isset($data['userList']) ? $data['userList'] : null;
        $this->container['dbList'] = isset($data['dbList']) ? $data['dbList'] : null;
        $this->container['operationList'] = isset($data['operationList']) ? $data['operationList'] : null;
        $this->container['threadIdList'] = isset($data['threadIdList']) ? $data['threadIdList'] : null;
        $this->container['trxIdList'] = isset($data['trxIdList']) ? $data['trxIdList'] : null;
        $this->container['statusList'] = isset($data['statusList']) ? $data['statusList'] : null;
        $this->container['sqlTemplateIds'] = isset($data['sqlTemplateIds']) ? $data['sqlTemplateIds'] : null;
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
    *  实例ID，实例的唯一标识
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
    * @param string $instanceId 实例ID，实例的唯一标识
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
    * Gets nodeId
    *  节点ID，实例节点的唯一标识
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
    * @param string|null $nodeId 节点ID，实例节点的唯一标识
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
    *  关键字，可组合，用逗号分隔
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
    * @param string|null $keyword 关键字，可组合，用逗号分隔
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets userList
    *  用户名，可组合，用逗号分隔
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
    * @param string|null $userList 用户名，可组合，用逗号分隔
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
    *  数据库，可组合，用逗号分隔
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
    * @param string|null $dbList 数据库，可组合，用逗号分隔
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
    *  操作类型，可组合，用逗号分隔
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
    * @param string|null $operationList 操作类型，可组合，用逗号分隔
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
    *  线程ID，可组合，用逗号分隔
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
    * @param string|null $threadIdList 线程ID，可组合，用逗号分隔
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
    *  事务ID，可组合，用逗号分隔
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
    * @param string|null $trxIdList 事务ID，可组合，用逗号分隔
    *
    * @return $this
    */
    public function setTrxIdList($trxIdList)
    {
        $this->container['trxIdList'] = $trxIdList;
        return $this;
    }

    /**
    * Gets statusList
    *  执行状态，可组合，用逗号分隔
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
    * @param string|null $statusList 执行状态，可组合，用逗号分隔
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
    *  SQL模板ID，可组合，用逗号分隔
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
    * @param string|null $sqlTemplateIds SQL模板ID，可组合，用逗号分隔
    *
    * @return $this
    */
    public function setSqlTemplateIds($sqlTemplateIds)
    {
        $this->container['sqlTemplateIds'] = $sqlTemplateIds;
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

