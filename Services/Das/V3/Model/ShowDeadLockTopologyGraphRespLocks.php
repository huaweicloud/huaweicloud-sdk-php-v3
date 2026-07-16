<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockTopologyGraphRespLocks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockTopologyGraphResp_locks';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockId  锁节点唯一标识
    * transactionId  事务节点唯一标识
    * indexName  索引名字
    * lockType  锁类型
    * lockMode  锁模式
    * lockStatus  锁状态
    * spaceId  表空间ID
    * pageNo  页号
    * heapNo  堆号
    * tableName  操作的表名
    * primaryKey  是否主键索引
    * lockedData  锁定的字段数据
    * unknown  是否未知锁
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockId' => 'string',
            'transactionId' => 'string',
            'indexName' => 'string',
            'lockType' => 'string',
            'lockMode' => 'string',
            'lockStatus' => 'string',
            'spaceId' => 'int',
            'pageNo' => 'int',
            'heapNo' => 'int',
            'tableName' => 'string',
            'primaryKey' => 'bool',
            'lockedData' => '\HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespLockedData[]',
            'unknown' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockId  锁节点唯一标识
    * transactionId  事务节点唯一标识
    * indexName  索引名字
    * lockType  锁类型
    * lockMode  锁模式
    * lockStatus  锁状态
    * spaceId  表空间ID
    * pageNo  页号
    * heapNo  堆号
    * tableName  操作的表名
    * primaryKey  是否主键索引
    * lockedData  锁定的字段数据
    * unknown  是否未知锁
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockId' => null,
        'transactionId' => null,
        'indexName' => null,
        'lockType' => null,
        'lockMode' => null,
        'lockStatus' => null,
        'spaceId' => 'int64',
        'pageNo' => 'int64',
        'heapNo' => 'int64',
        'tableName' => null,
        'primaryKey' => null,
        'lockedData' => null,
        'unknown' => null
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
    * lockId  锁节点唯一标识
    * transactionId  事务节点唯一标识
    * indexName  索引名字
    * lockType  锁类型
    * lockMode  锁模式
    * lockStatus  锁状态
    * spaceId  表空间ID
    * pageNo  页号
    * heapNo  堆号
    * tableName  操作的表名
    * primaryKey  是否主键索引
    * lockedData  锁定的字段数据
    * unknown  是否未知锁
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockId' => 'lock_id',
            'transactionId' => 'transaction_id',
            'indexName' => 'index_name',
            'lockType' => 'lock_type',
            'lockMode' => 'lock_mode',
            'lockStatus' => 'lock_status',
            'spaceId' => 'space_id',
            'pageNo' => 'page_no',
            'heapNo' => 'heap_no',
            'tableName' => 'table_name',
            'primaryKey' => 'primary_key',
            'lockedData' => 'locked_data',
            'unknown' => 'unknown'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockId  锁节点唯一标识
    * transactionId  事务节点唯一标识
    * indexName  索引名字
    * lockType  锁类型
    * lockMode  锁模式
    * lockStatus  锁状态
    * spaceId  表空间ID
    * pageNo  页号
    * heapNo  堆号
    * tableName  操作的表名
    * primaryKey  是否主键索引
    * lockedData  锁定的字段数据
    * unknown  是否未知锁
    *
    * @var string[]
    */
    protected static $setters = [
            'lockId' => 'setLockId',
            'transactionId' => 'setTransactionId',
            'indexName' => 'setIndexName',
            'lockType' => 'setLockType',
            'lockMode' => 'setLockMode',
            'lockStatus' => 'setLockStatus',
            'spaceId' => 'setSpaceId',
            'pageNo' => 'setPageNo',
            'heapNo' => 'setHeapNo',
            'tableName' => 'setTableName',
            'primaryKey' => 'setPrimaryKey',
            'lockedData' => 'setLockedData',
            'unknown' => 'setUnknown'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockId  锁节点唯一标识
    * transactionId  事务节点唯一标识
    * indexName  索引名字
    * lockType  锁类型
    * lockMode  锁模式
    * lockStatus  锁状态
    * spaceId  表空间ID
    * pageNo  页号
    * heapNo  堆号
    * tableName  操作的表名
    * primaryKey  是否主键索引
    * lockedData  锁定的字段数据
    * unknown  是否未知锁
    *
    * @var string[]
    */
    protected static $getters = [
            'lockId' => 'getLockId',
            'transactionId' => 'getTransactionId',
            'indexName' => 'getIndexName',
            'lockType' => 'getLockType',
            'lockMode' => 'getLockMode',
            'lockStatus' => 'getLockStatus',
            'spaceId' => 'getSpaceId',
            'pageNo' => 'getPageNo',
            'heapNo' => 'getHeapNo',
            'tableName' => 'getTableName',
            'primaryKey' => 'getPrimaryKey',
            'lockedData' => 'getLockedData',
            'unknown' => 'getUnknown'
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
        $this->container['lockId'] = isset($data['lockId']) ? $data['lockId'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['indexName'] = isset($data['indexName']) ? $data['indexName'] : null;
        $this->container['lockType'] = isset($data['lockType']) ? $data['lockType'] : null;
        $this->container['lockMode'] = isset($data['lockMode']) ? $data['lockMode'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['heapNo'] = isset($data['heapNo']) ? $data['heapNo'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['primaryKey'] = isset($data['primaryKey']) ? $data['primaryKey'] : null;
        $this->container['lockedData'] = isset($data['lockedData']) ? $data['lockedData'] : null;
        $this->container['unknown'] = isset($data['unknown']) ? $data['unknown'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['lockId'] === null) {
            $invalidProperties[] = "'lockId' can't be null";
        }
        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['indexName'] === null) {
            $invalidProperties[] = "'indexName' can't be null";
        }
        if ($this->container['lockType'] === null) {
            $invalidProperties[] = "'lockType' can't be null";
        }
        if ($this->container['lockMode'] === null) {
            $invalidProperties[] = "'lockMode' can't be null";
        }
        if ($this->container['lockStatus'] === null) {
            $invalidProperties[] = "'lockStatus' can't be null";
        }
        if ($this->container['spaceId'] === null) {
            $invalidProperties[] = "'spaceId' can't be null";
        }
        if ($this->container['pageNo'] === null) {
            $invalidProperties[] = "'pageNo' can't be null";
        }
        if ($this->container['heapNo'] === null) {
            $invalidProperties[] = "'heapNo' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['primaryKey'] === null) {
            $invalidProperties[] = "'primaryKey' can't be null";
        }
        if ($this->container['lockedData'] === null) {
            $invalidProperties[] = "'lockedData' can't be null";
        }
        if ($this->container['unknown'] === null) {
            $invalidProperties[] = "'unknown' can't be null";
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
    * Gets lockId
    *  锁节点唯一标识
    *
    * @return string
    */
    public function getLockId()
    {
        return $this->container['lockId'];
    }

    /**
    * Sets lockId
    *
    * @param string $lockId 锁节点唯一标识
    *
    * @return $this
    */
    public function setLockId($lockId)
    {
        $this->container['lockId'] = $lockId;
        return $this;
    }

    /**
    * Gets transactionId
    *  事务节点唯一标识
    *
    * @return string
    */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
    * Sets transactionId
    *
    * @param string $transactionId 事务节点唯一标识
    *
    * @return $this
    */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;
        return $this;
    }

    /**
    * Gets indexName
    *  索引名字
    *
    * @return string
    */
    public function getIndexName()
    {
        return $this->container['indexName'];
    }

    /**
    * Sets indexName
    *
    * @param string $indexName 索引名字
    *
    * @return $this
    */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;
        return $this;
    }

    /**
    * Gets lockType
    *  锁类型
    *
    * @return string
    */
    public function getLockType()
    {
        return $this->container['lockType'];
    }

    /**
    * Sets lockType
    *
    * @param string $lockType 锁类型
    *
    * @return $this
    */
    public function setLockType($lockType)
    {
        $this->container['lockType'] = $lockType;
        return $this;
    }

    /**
    * Gets lockMode
    *  锁模式
    *
    * @return string
    */
    public function getLockMode()
    {
        return $this->container['lockMode'];
    }

    /**
    * Sets lockMode
    *
    * @param string $lockMode 锁模式
    *
    * @return $this
    */
    public function setLockMode($lockMode)
    {
        $this->container['lockMode'] = $lockMode;
        return $this;
    }

    /**
    * Gets lockStatus
    *  锁状态
    *
    * @return string
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param string $lockStatus 锁状态
    *
    * @return $this
    */
    public function setLockStatus($lockStatus)
    {
        $this->container['lockStatus'] = $lockStatus;
        return $this;
    }

    /**
    * Gets spaceId
    *  表空间ID
    *
    * @return int
    */
    public function getSpaceId()
    {
        return $this->container['spaceId'];
    }

    /**
    * Sets spaceId
    *
    * @param int $spaceId 表空间ID
    *
    * @return $this
    */
    public function setSpaceId($spaceId)
    {
        $this->container['spaceId'] = $spaceId;
        return $this;
    }

    /**
    * Gets pageNo
    *  页号
    *
    * @return int
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int $pageNo 页号
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets heapNo
    *  堆号
    *
    * @return int
    */
    public function getHeapNo()
    {
        return $this->container['heapNo'];
    }

    /**
    * Sets heapNo
    *
    * @param int $heapNo 堆号
    *
    * @return $this
    */
    public function setHeapNo($heapNo)
    {
        $this->container['heapNo'] = $heapNo;
        return $this;
    }

    /**
    * Gets tableName
    *  操作的表名
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 操作的表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets primaryKey
    *  是否主键索引
    *
    * @return bool
    */
    public function getPrimaryKey()
    {
        return $this->container['primaryKey'];
    }

    /**
    * Sets primaryKey
    *
    * @param bool $primaryKey 是否主键索引
    *
    * @return $this
    */
    public function setPrimaryKey($primaryKey)
    {
        $this->container['primaryKey'] = $primaryKey;
        return $this;
    }

    /**
    * Gets lockedData
    *  锁定的字段数据
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespLockedData[]
    */
    public function getLockedData()
    {
        return $this->container['lockedData'];
    }

    /**
    * Sets lockedData
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ShowDeadLockTopologyGraphRespLockedData[] $lockedData 锁定的字段数据
    *
    * @return $this
    */
    public function setLockedData($lockedData)
    {
        $this->container['lockedData'] = $lockedData;
        return $this;
    }

    /**
    * Gets unknown
    *  是否未知锁
    *
    * @return bool
    */
    public function getUnknown()
    {
        return $this->container['unknown'];
    }

    /**
    * Sets unknown
    *
    * @param bool $unknown 是否未知锁
    *
    * @return $this
    */
    public function setUnknown($unknown)
    {
        $this->container['unknown'] = $unknown;
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

