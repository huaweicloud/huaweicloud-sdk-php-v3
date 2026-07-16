<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeadLockTopologyGraphRespMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeadLockTopologyGraphResp_meta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deadLockId  死锁唯一标识
    * instanceId  实例ID
    * projectId  项目ID
    * occurTime  死锁的发生时间，Unix 毫秒时间戳
    * totalTransactionsInCycle  死锁的事务总数
    * totalTransactionsReturned  本次实际返回的事务数
    * truncated  是否裁剪（>10 事务只返回 10 个）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deadLockId' => 'string',
            'instanceId' => 'string',
            'projectId' => 'string',
            'occurTime' => 'int',
            'totalTransactionsInCycle' => 'int',
            'totalTransactionsReturned' => 'int',
            'truncated' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deadLockId  死锁唯一标识
    * instanceId  实例ID
    * projectId  项目ID
    * occurTime  死锁的发生时间，Unix 毫秒时间戳
    * totalTransactionsInCycle  死锁的事务总数
    * totalTransactionsReturned  本次实际返回的事务数
    * truncated  是否裁剪（>10 事务只返回 10 个）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deadLockId' => null,
        'instanceId' => null,
        'projectId' => null,
        'occurTime' => 'int64',
        'totalTransactionsInCycle' => 'int32',
        'totalTransactionsReturned' => 'int64',
        'truncated' => null
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
    * deadLockId  死锁唯一标识
    * instanceId  实例ID
    * projectId  项目ID
    * occurTime  死锁的发生时间，Unix 毫秒时间戳
    * totalTransactionsInCycle  死锁的事务总数
    * totalTransactionsReturned  本次实际返回的事务数
    * truncated  是否裁剪（>10 事务只返回 10 个）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deadLockId' => 'dead_lock_id',
            'instanceId' => 'instance_id',
            'projectId' => 'project_id',
            'occurTime' => 'occur_time',
            'totalTransactionsInCycle' => 'total_transactions_in_cycle',
            'totalTransactionsReturned' => 'total_transactions_returned',
            'truncated' => 'truncated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deadLockId  死锁唯一标识
    * instanceId  实例ID
    * projectId  项目ID
    * occurTime  死锁的发生时间，Unix 毫秒时间戳
    * totalTransactionsInCycle  死锁的事务总数
    * totalTransactionsReturned  本次实际返回的事务数
    * truncated  是否裁剪（>10 事务只返回 10 个）
    *
    * @var string[]
    */
    protected static $setters = [
            'deadLockId' => 'setDeadLockId',
            'instanceId' => 'setInstanceId',
            'projectId' => 'setProjectId',
            'occurTime' => 'setOccurTime',
            'totalTransactionsInCycle' => 'setTotalTransactionsInCycle',
            'totalTransactionsReturned' => 'setTotalTransactionsReturned',
            'truncated' => 'setTruncated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deadLockId  死锁唯一标识
    * instanceId  实例ID
    * projectId  项目ID
    * occurTime  死锁的发生时间，Unix 毫秒时间戳
    * totalTransactionsInCycle  死锁的事务总数
    * totalTransactionsReturned  本次实际返回的事务数
    * truncated  是否裁剪（>10 事务只返回 10 个）
    *
    * @var string[]
    */
    protected static $getters = [
            'deadLockId' => 'getDeadLockId',
            'instanceId' => 'getInstanceId',
            'projectId' => 'getProjectId',
            'occurTime' => 'getOccurTime',
            'totalTransactionsInCycle' => 'getTotalTransactionsInCycle',
            'totalTransactionsReturned' => 'getTotalTransactionsReturned',
            'truncated' => 'getTruncated'
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
        $this->container['deadLockId'] = isset($data['deadLockId']) ? $data['deadLockId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['totalTransactionsInCycle'] = isset($data['totalTransactionsInCycle']) ? $data['totalTransactionsInCycle'] : null;
        $this->container['totalTransactionsReturned'] = isset($data['totalTransactionsReturned']) ? $data['totalTransactionsReturned'] : null;
        $this->container['truncated'] = isset($data['truncated']) ? $data['truncated'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['deadLockId'] === null) {
            $invalidProperties[] = "'deadLockId' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['occurTime'] === null) {
            $invalidProperties[] = "'occurTime' can't be null";
        }
        if ($this->container['totalTransactionsInCycle'] === null) {
            $invalidProperties[] = "'totalTransactionsInCycle' can't be null";
        }
        if ($this->container['totalTransactionsReturned'] === null) {
            $invalidProperties[] = "'totalTransactionsReturned' can't be null";
        }
        if ($this->container['truncated'] === null) {
            $invalidProperties[] = "'truncated' can't be null";
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
    * Gets deadLockId
    *  死锁唯一标识
    *
    * @return string
    */
    public function getDeadLockId()
    {
        return $this->container['deadLockId'];
    }

    /**
    * Sets deadLockId
    *
    * @param string $deadLockId 死锁唯一标识
    *
    * @return $this
    */
    public function setDeadLockId($deadLockId)
    {
        $this->container['deadLockId'] = $deadLockId;
        return $this;
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets occurTime
    *  死锁的发生时间，Unix 毫秒时间戳
    *
    * @return int
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param int $occurTime 死锁的发生时间，Unix 毫秒时间戳
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets totalTransactionsInCycle
    *  死锁的事务总数
    *
    * @return int
    */
    public function getTotalTransactionsInCycle()
    {
        return $this->container['totalTransactionsInCycle'];
    }

    /**
    * Sets totalTransactionsInCycle
    *
    * @param int $totalTransactionsInCycle 死锁的事务总数
    *
    * @return $this
    */
    public function setTotalTransactionsInCycle($totalTransactionsInCycle)
    {
        $this->container['totalTransactionsInCycle'] = $totalTransactionsInCycle;
        return $this;
    }

    /**
    * Gets totalTransactionsReturned
    *  本次实际返回的事务数
    *
    * @return int
    */
    public function getTotalTransactionsReturned()
    {
        return $this->container['totalTransactionsReturned'];
    }

    /**
    * Sets totalTransactionsReturned
    *
    * @param int $totalTransactionsReturned 本次实际返回的事务数
    *
    * @return $this
    */
    public function setTotalTransactionsReturned($totalTransactionsReturned)
    {
        $this->container['totalTransactionsReturned'] = $totalTransactionsReturned;
        return $this;
    }

    /**
    * Gets truncated
    *  是否裁剪（>10 事务只返回 10 个）
    *
    * @return bool
    */
    public function getTruncated()
    {
        return $this->container['truncated'];
    }

    /**
    * Sets truncated
    *
    * @param bool $truncated 是否裁剪（>10 事务只返回 10 个）
    *
    * @return $this
    */
    public function setTruncated($truncated)
    {
        $this->container['truncated'] = $truncated;
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

