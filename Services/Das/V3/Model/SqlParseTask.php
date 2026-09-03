<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlParseTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlParseTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * instanceId  实例ID
    * instanceName  实例名
    * nodeId  节点ID
    * domainId  租户ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * batchId  批次ID
    * userList  用户名
    * keyword  关键字
    * dbList  数据库
    * operationList  操作类型
    * threadIdList  线程ID
    * trxIdList  事务ID
    * statusList  执行状态
    * sqlTemplateIds  SQL模板ID
    * status  任务状态
    * createAt  创建时间（Unix timestamp），单位：毫秒
    * updateAt  更新时间（Unix timestamp），单位：毫秒
    * progress  任务进度
    * reason  失败原因
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'nodeId' => 'string',
            'domainId' => 'string',
            'startAt' => 'int',
            'endAt' => 'int',
            'batchId' => 'string',
            'userList' => 'string[]',
            'keyword' => 'string[]',
            'dbList' => 'string[]',
            'operationList' => 'string[]',
            'threadIdList' => 'string[]',
            'trxIdList' => 'string[]',
            'statusList' => 'string[]',
            'sqlTemplateIds' => 'string[]',
            'status' => 'int',
            'createAt' => 'int',
            'updateAt' => 'int',
            'progress' => 'double',
            'reason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * instanceId  实例ID
    * instanceName  实例名
    * nodeId  节点ID
    * domainId  租户ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * batchId  批次ID
    * userList  用户名
    * keyword  关键字
    * dbList  数据库
    * operationList  操作类型
    * threadIdList  线程ID
    * trxIdList  事务ID
    * statusList  执行状态
    * sqlTemplateIds  SQL模板ID
    * status  任务状态
    * createAt  创建时间（Unix timestamp），单位：毫秒
    * updateAt  更新时间（Unix timestamp），单位：毫秒
    * progress  任务进度
    * reason  失败原因
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'instanceId' => null,
        'instanceName' => null,
        'nodeId' => null,
        'domainId' => null,
        'startAt' => 'int64',
        'endAt' => 'int64',
        'batchId' => null,
        'userList' => null,
        'keyword' => null,
        'dbList' => null,
        'operationList' => null,
        'threadIdList' => null,
        'trxIdList' => null,
        'statusList' => null,
        'sqlTemplateIds' => null,
        'status' => 'int32',
        'createAt' => 'int64',
        'updateAt' => 'int64',
        'progress' => 'double',
        'reason' => null
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
    * id  任务ID
    * instanceId  实例ID
    * instanceName  实例名
    * nodeId  节点ID
    * domainId  租户ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * batchId  批次ID
    * userList  用户名
    * keyword  关键字
    * dbList  数据库
    * operationList  操作类型
    * threadIdList  线程ID
    * trxIdList  事务ID
    * statusList  执行状态
    * sqlTemplateIds  SQL模板ID
    * status  任务状态
    * createAt  创建时间（Unix timestamp），单位：毫秒
    * updateAt  更新时间（Unix timestamp），单位：毫秒
    * progress  任务进度
    * reason  失败原因
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'nodeId' => 'node_id',
            'domainId' => 'domain_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'batchId' => 'batch_id',
            'userList' => 'user_list',
            'keyword' => 'keyword',
            'dbList' => 'db_list',
            'operationList' => 'operation_list',
            'threadIdList' => 'thread_id_list',
            'trxIdList' => 'trx_id_list',
            'statusList' => 'status_list',
            'sqlTemplateIds' => 'sql_template_ids',
            'status' => 'status',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'progress' => 'progress',
            'reason' => 'reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * instanceId  实例ID
    * instanceName  实例名
    * nodeId  节点ID
    * domainId  租户ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * batchId  批次ID
    * userList  用户名
    * keyword  关键字
    * dbList  数据库
    * operationList  操作类型
    * threadIdList  线程ID
    * trxIdList  事务ID
    * statusList  执行状态
    * sqlTemplateIds  SQL模板ID
    * status  任务状态
    * createAt  创建时间（Unix timestamp），单位：毫秒
    * updateAt  更新时间（Unix timestamp），单位：毫秒
    * progress  任务进度
    * reason  失败原因
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'nodeId' => 'setNodeId',
            'domainId' => 'setDomainId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'batchId' => 'setBatchId',
            'userList' => 'setUserList',
            'keyword' => 'setKeyword',
            'dbList' => 'setDbList',
            'operationList' => 'setOperationList',
            'threadIdList' => 'setThreadIdList',
            'trxIdList' => 'setTrxIdList',
            'statusList' => 'setStatusList',
            'sqlTemplateIds' => 'setSqlTemplateIds',
            'status' => 'setStatus',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'progress' => 'setProgress',
            'reason' => 'setReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * instanceId  实例ID
    * instanceName  实例名
    * nodeId  节点ID
    * domainId  租户ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    * batchId  批次ID
    * userList  用户名
    * keyword  关键字
    * dbList  数据库
    * operationList  操作类型
    * threadIdList  线程ID
    * trxIdList  事务ID
    * statusList  执行状态
    * sqlTemplateIds  SQL模板ID
    * status  任务状态
    * createAt  创建时间（Unix timestamp），单位：毫秒
    * updateAt  更新时间（Unix timestamp），单位：毫秒
    * progress  任务进度
    * reason  失败原因
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'nodeId' => 'getNodeId',
            'domainId' => 'getDomainId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'batchId' => 'getBatchId',
            'userList' => 'getUserList',
            'keyword' => 'getKeyword',
            'dbList' => 'getDbList',
            'operationList' => 'getOperationList',
            'threadIdList' => 'getThreadIdList',
            'trxIdList' => 'getTrxIdList',
            'statusList' => 'getStatusList',
            'sqlTemplateIds' => 'getSqlTemplateIds',
            'status' => 'getStatus',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'progress' => 'getProgress',
            'reason' => 'getReason'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['userList'] = isset($data['userList']) ? $data['userList'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['dbList'] = isset($data['dbList']) ? $data['dbList'] : null;
        $this->container['operationList'] = isset($data['operationList']) ? $data['operationList'] : null;
        $this->container['threadIdList'] = isset($data['threadIdList']) ? $data['threadIdList'] : null;
        $this->container['trxIdList'] = isset($data['trxIdList']) ? $data['trxIdList'] : null;
        $this->container['statusList'] = isset($data['statusList']) ? $data['statusList'] : null;
        $this->container['sqlTemplateIds'] = isset($data['sqlTemplateIds']) ? $data['sqlTemplateIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
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
    * Gets id
    *  任务ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets instanceName
    *  实例名
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
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
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int|null $startAt 开始时间（Unix timestamp），单位：毫秒
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
    * @return int|null
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int|null $endAt 结束时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets batchId
    *  批次ID
    *
    * @return string|null
    */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
    * Sets batchId
    *
    * @param string|null $batchId 批次ID
    *
    * @return $this
    */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;
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
    * Gets keyword
    *  关键字
    *
    * @return string[]|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string[]|null $keyword 关键字
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
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
    * Gets threadIdList
    *  线程ID
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
    * @param string[]|null $threadIdList 线程ID
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
    * @return string[]|null
    */
    public function getTrxIdList()
    {
        return $this->container['trxIdList'];
    }

    /**
    * Sets trxIdList
    *
    * @param string[]|null $trxIdList 事务ID
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
    *  执行状态
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
    * @param string[]|null $statusList 执行状态
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
    *  SQL模板ID
    *
    * @return string[]|null
    */
    public function getSqlTemplateIds()
    {
        return $this->container['sqlTemplateIds'];
    }

    /**
    * Sets sqlTemplateIds
    *
    * @param string[]|null $sqlTemplateIds SQL模板ID
    *
    * @return $this
    */
    public function setSqlTemplateIds($sqlTemplateIds)
    {
        $this->container['sqlTemplateIds'] = $sqlTemplateIds;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param int|null $createAt 创建时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param int|null $updateAt 更新时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets progress
    *  任务进度
    *
    * @return double|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param double|null $progress 任务进度
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets reason
    *  失败原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 失败原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
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

