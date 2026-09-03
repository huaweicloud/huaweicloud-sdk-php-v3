<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetaLockSnapshotRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetaLockSnapshotRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectionId  连接ID
    * id  元数据锁快照ID
    * threadId  线程ID
    * dbName  数据库名称
    * tableName  表名
    * lockStatus  锁状态
    * lockType  锁类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectionId' => 'string',
            'id' => 'int',
            'threadId' => 'string',
            'dbName' => 'string',
            'tableName' => 'string',
            'lockStatus' => 'string',
            'lockType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectionId  连接ID
    * id  元数据锁快照ID
    * threadId  线程ID
    * dbName  数据库名称
    * tableName  表名
    * lockStatus  锁状态
    * lockType  锁类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectionId' => null,
        'id' => 'int32',
        'threadId' => null,
        'dbName' => null,
        'tableName' => null,
        'lockStatus' => null,
        'lockType' => null
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
    * id  元数据锁快照ID
    * threadId  线程ID
    * dbName  数据库名称
    * tableName  表名
    * lockStatus  锁状态
    * lockType  锁类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectionId' => 'connection_id',
            'id' => 'id',
            'threadId' => 'thread_id',
            'dbName' => 'db_name',
            'tableName' => 'table_name',
            'lockStatus' => 'lock_status',
            'lockType' => 'lock_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectionId  连接ID
    * id  元数据锁快照ID
    * threadId  线程ID
    * dbName  数据库名称
    * tableName  表名
    * lockStatus  锁状态
    * lockType  锁类型
    *
    * @var string[]
    */
    protected static $setters = [
            'connectionId' => 'setConnectionId',
            'id' => 'setId',
            'threadId' => 'setThreadId',
            'dbName' => 'setDbName',
            'tableName' => 'setTableName',
            'lockStatus' => 'setLockStatus',
            'lockType' => 'setLockType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectionId  连接ID
    * id  元数据锁快照ID
    * threadId  线程ID
    * dbName  数据库名称
    * tableName  表名
    * lockStatus  锁状态
    * lockType  锁类型
    *
    * @var string[]
    */
    protected static $getters = [
            'connectionId' => 'getConnectionId',
            'id' => 'getId',
            'threadId' => 'getThreadId',
            'dbName' => 'getDbName',
            'tableName' => 'getTableName',
            'lockStatus' => 'getLockStatus',
            'lockType' => 'getLockType'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['threadId'] = isset($data['threadId']) ? $data['threadId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['lockStatus'] = isset($data['lockStatus']) ? $data['lockStatus'] : null;
        $this->container['lockType'] = isset($data['lockType']) ? $data['lockType'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets id
    *  元数据锁快照ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 元数据锁快照ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets lockStatus
    *  锁状态
    *
    * @return string|null
    */
    public function getLockStatus()
    {
        return $this->container['lockStatus'];
    }

    /**
    * Sets lockStatus
    *
    * @param string|null $lockStatus 锁状态
    *
    * @return $this
    */
    public function setLockStatus($lockStatus)
    {
        $this->container['lockStatus'] = $lockStatus;
        return $this;
    }

    /**
    * Gets lockType
    *  锁类型
    *
    * @return string|null
    */
    public function getLockType()
    {
        return $this->container['lockType'];
    }

    /**
    * Sets lockType
    *
    * @param string|null $lockType 锁类型
    *
    * @return $this
    */
    public function setLockType($lockType)
    {
        $this->container['lockType'] = $lockType;
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

