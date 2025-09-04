<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullDeadLockListRespMysqlDeadlock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullDeadLockListResp_mysql_deadlock';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * raw  死锁事件详细信息
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * rollbackTrxId  MySQL InnoDB 引擎在检测到死锁后，会自动选择一个事务进行回滚以解除死锁。
    * mysqlTransactions  参与这次死锁的每个事务的详细结构化信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'raw' => 'string',
            'happenTime' => 'int',
            'rollbackTrxId' => 'string',
            'mysqlTransactions' => '\HuaweiCloud\SDK\Das\V3\Model\FullDeadLockListRespMysqlDeadlockMysqlTransactions[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * raw  死锁事件详细信息
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * rollbackTrxId  MySQL InnoDB 引擎在检测到死锁后，会自动选择一个事务进行回滚以解除死锁。
    * mysqlTransactions  参与这次死锁的每个事务的详细结构化信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'raw' => null,
        'happenTime' => 'int64',
        'rollbackTrxId' => null,
        'mysqlTransactions' => null
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
    * raw  死锁事件详细信息
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * rollbackTrxId  MySQL InnoDB 引擎在检测到死锁后，会自动选择一个事务进行回滚以解除死锁。
    * mysqlTransactions  参与这次死锁的每个事务的详细结构化信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'raw' => 'raw',
            'happenTime' => 'happen_time',
            'rollbackTrxId' => 'rollback_trx_id',
            'mysqlTransactions' => 'mysql_transactions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * raw  死锁事件详细信息
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * rollbackTrxId  MySQL InnoDB 引擎在检测到死锁后，会自动选择一个事务进行回滚以解除死锁。
    * mysqlTransactions  参与这次死锁的每个事务的详细结构化信息
    *
    * @var string[]
    */
    protected static $setters = [
            'raw' => 'setRaw',
            'happenTime' => 'setHappenTime',
            'rollbackTrxId' => 'setRollbackTrxId',
            'mysqlTransactions' => 'setMysqlTransactions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * raw  死锁事件详细信息
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * rollbackTrxId  MySQL InnoDB 引擎在检测到死锁后，会自动选择一个事务进行回滚以解除死锁。
    * mysqlTransactions  参与这次死锁的每个事务的详细结构化信息
    *
    * @var string[]
    */
    protected static $getters = [
            'raw' => 'getRaw',
            'happenTime' => 'getHappenTime',
            'rollbackTrxId' => 'getRollbackTrxId',
            'mysqlTransactions' => 'getMysqlTransactions'
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
        $this->container['raw'] = isset($data['raw']) ? $data['raw'] : null;
        $this->container['happenTime'] = isset($data['happenTime']) ? $data['happenTime'] : null;
        $this->container['rollbackTrxId'] = isset($data['rollbackTrxId']) ? $data['rollbackTrxId'] : null;
        $this->container['mysqlTransactions'] = isset($data['mysqlTransactions']) ? $data['mysqlTransactions'] : null;
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
    * Gets raw
    *  死锁事件详细信息
    *
    * @return string|null
    */
    public function getRaw()
    {
        return $this->container['raw'];
    }

    /**
    * Sets raw
    *
    * @param string|null $raw 死锁事件详细信息
    *
    * @return $this
    */
    public function setRaw($raw)
    {
        $this->container['raw'] = $raw;
        return $this;
    }

    /**
    * Gets happenTime
    *  死锁事件发生的 Unix 时间戳（毫秒级）
    *
    * @return int|null
    */
    public function getHappenTime()
    {
        return $this->container['happenTime'];
    }

    /**
    * Sets happenTime
    *
    * @param int|null $happenTime 死锁事件发生的 Unix 时间戳（毫秒级）
    *
    * @return $this
    */
    public function setHappenTime($happenTime)
    {
        $this->container['happenTime'] = $happenTime;
        return $this;
    }

    /**
    * Gets rollbackTrxId
    *  MySQL InnoDB 引擎在检测到死锁后，会自动选择一个事务进行回滚以解除死锁。
    *
    * @return string|null
    */
    public function getRollbackTrxId()
    {
        return $this->container['rollbackTrxId'];
    }

    /**
    * Sets rollbackTrxId
    *
    * @param string|null $rollbackTrxId MySQL InnoDB 引擎在检测到死锁后，会自动选择一个事务进行回滚以解除死锁。
    *
    * @return $this
    */
    public function setRollbackTrxId($rollbackTrxId)
    {
        $this->container['rollbackTrxId'] = $rollbackTrxId;
        return $this;
    }

    /**
    * Gets mysqlTransactions
    *  参与这次死锁的每个事务的详细结构化信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\FullDeadLockListRespMysqlDeadlockMysqlTransactions[]|null
    */
    public function getMysqlTransactions()
    {
        return $this->container['mysqlTransactions'];
    }

    /**
    * Sets mysqlTransactions
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\FullDeadLockListRespMysqlDeadlockMysqlTransactions[]|null $mysqlTransactions 参与这次死锁的每个事务的详细结构化信息
    *
    * @return $this
    */
    public function setMysqlTransactions($mysqlTransactions)
    {
        $this->container['mysqlTransactions'] = $mysqlTransactions;
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

