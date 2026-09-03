<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetSqlSwitchNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetSqlSwitchNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  数据库引擎类型
    * instanceId  实例ID
    * fullSqlSwitchOn  全量SQL开关
    * fullSqlRetentionHours  全量SQL存储时长
    * slowSqlSwitchOn  慢SQL开关
    * slowSqlRetentionHours  慢SQL存储时长
    * deadLockSwitchOn  死锁开关
    * deadLockRetentionHours  死锁存储时长
    * lockBlockingSwitchOn  锁等待开关
    * lockBlockingRetentionHours  锁等待存储时长
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'instanceId' => 'string',
            'fullSqlSwitchOn' => 'bool',
            'fullSqlRetentionHours' => 'int',
            'slowSqlSwitchOn' => 'bool',
            'slowSqlRetentionHours' => 'int',
            'deadLockSwitchOn' => 'bool',
            'deadLockRetentionHours' => 'int',
            'lockBlockingSwitchOn' => 'bool',
            'lockBlockingRetentionHours' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  数据库引擎类型
    * instanceId  实例ID
    * fullSqlSwitchOn  全量SQL开关
    * fullSqlRetentionHours  全量SQL存储时长
    * slowSqlSwitchOn  慢SQL开关
    * slowSqlRetentionHours  慢SQL存储时长
    * deadLockSwitchOn  死锁开关
    * deadLockRetentionHours  死锁存储时长
    * lockBlockingSwitchOn  锁等待开关
    * lockBlockingRetentionHours  锁等待存储时长
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'instanceId' => null,
        'fullSqlSwitchOn' => null,
        'fullSqlRetentionHours' => 'int64',
        'slowSqlSwitchOn' => null,
        'slowSqlRetentionHours' => 'int64',
        'deadLockSwitchOn' => null,
        'deadLockRetentionHours' => 'int64',
        'lockBlockingSwitchOn' => null,
        'lockBlockingRetentionHours' => 'int64'
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
    * engineType  数据库引擎类型
    * instanceId  实例ID
    * fullSqlSwitchOn  全量SQL开关
    * fullSqlRetentionHours  全量SQL存储时长
    * slowSqlSwitchOn  慢SQL开关
    * slowSqlRetentionHours  慢SQL存储时长
    * deadLockSwitchOn  死锁开关
    * deadLockRetentionHours  死锁存储时长
    * lockBlockingSwitchOn  锁等待开关
    * lockBlockingRetentionHours  锁等待存储时长
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'instanceId' => 'instance_id',
            'fullSqlSwitchOn' => 'full_sql_switch_on',
            'fullSqlRetentionHours' => 'full_sql_retention_hours',
            'slowSqlSwitchOn' => 'slow_sql_switch_on',
            'slowSqlRetentionHours' => 'slow_sql_retention_hours',
            'deadLockSwitchOn' => 'dead_lock_switch_on',
            'deadLockRetentionHours' => 'dead_lock_retention_hours',
            'lockBlockingSwitchOn' => 'lock_blocking_switch_on',
            'lockBlockingRetentionHours' => 'lock_blocking_retention_hours'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  数据库引擎类型
    * instanceId  实例ID
    * fullSqlSwitchOn  全量SQL开关
    * fullSqlRetentionHours  全量SQL存储时长
    * slowSqlSwitchOn  慢SQL开关
    * slowSqlRetentionHours  慢SQL存储时长
    * deadLockSwitchOn  死锁开关
    * deadLockRetentionHours  死锁存储时长
    * lockBlockingSwitchOn  锁等待开关
    * lockBlockingRetentionHours  锁等待存储时长
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'instanceId' => 'setInstanceId',
            'fullSqlSwitchOn' => 'setFullSqlSwitchOn',
            'fullSqlRetentionHours' => 'setFullSqlRetentionHours',
            'slowSqlSwitchOn' => 'setSlowSqlSwitchOn',
            'slowSqlRetentionHours' => 'setSlowSqlRetentionHours',
            'deadLockSwitchOn' => 'setDeadLockSwitchOn',
            'deadLockRetentionHours' => 'setDeadLockRetentionHours',
            'lockBlockingSwitchOn' => 'setLockBlockingSwitchOn',
            'lockBlockingRetentionHours' => 'setLockBlockingRetentionHours'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  数据库引擎类型
    * instanceId  实例ID
    * fullSqlSwitchOn  全量SQL开关
    * fullSqlRetentionHours  全量SQL存储时长
    * slowSqlSwitchOn  慢SQL开关
    * slowSqlRetentionHours  慢SQL存储时长
    * deadLockSwitchOn  死锁开关
    * deadLockRetentionHours  死锁存储时长
    * lockBlockingSwitchOn  锁等待开关
    * lockBlockingRetentionHours  锁等待存储时长
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'instanceId' => 'getInstanceId',
            'fullSqlSwitchOn' => 'getFullSqlSwitchOn',
            'fullSqlRetentionHours' => 'getFullSqlRetentionHours',
            'slowSqlSwitchOn' => 'getSlowSqlSwitchOn',
            'slowSqlRetentionHours' => 'getSlowSqlRetentionHours',
            'deadLockSwitchOn' => 'getDeadLockSwitchOn',
            'deadLockRetentionHours' => 'getDeadLockRetentionHours',
            'lockBlockingSwitchOn' => 'getLockBlockingSwitchOn',
            'lockBlockingRetentionHours' => 'getLockBlockingRetentionHours'
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['fullSqlSwitchOn'] = isset($data['fullSqlSwitchOn']) ? $data['fullSqlSwitchOn'] : null;
        $this->container['fullSqlRetentionHours'] = isset($data['fullSqlRetentionHours']) ? $data['fullSqlRetentionHours'] : null;
        $this->container['slowSqlSwitchOn'] = isset($data['slowSqlSwitchOn']) ? $data['slowSqlSwitchOn'] : null;
        $this->container['slowSqlRetentionHours'] = isset($data['slowSqlRetentionHours']) ? $data['slowSqlRetentionHours'] : null;
        $this->container['deadLockSwitchOn'] = isset($data['deadLockSwitchOn']) ? $data['deadLockSwitchOn'] : null;
        $this->container['deadLockRetentionHours'] = isset($data['deadLockRetentionHours']) ? $data['deadLockRetentionHours'] : null;
        $this->container['lockBlockingSwitchOn'] = isset($data['lockBlockingSwitchOn']) ? $data['lockBlockingSwitchOn'] : null;
        $this->container['lockBlockingRetentionHours'] = isset($data['lockBlockingRetentionHours']) ? $data['lockBlockingRetentionHours'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
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
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
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
    * Gets fullSqlSwitchOn
    *  全量SQL开关
    *
    * @return bool|null
    */
    public function getFullSqlSwitchOn()
    {
        return $this->container['fullSqlSwitchOn'];
    }

    /**
    * Sets fullSqlSwitchOn
    *
    * @param bool|null $fullSqlSwitchOn 全量SQL开关
    *
    * @return $this
    */
    public function setFullSqlSwitchOn($fullSqlSwitchOn)
    {
        $this->container['fullSqlSwitchOn'] = $fullSqlSwitchOn;
        return $this;
    }

    /**
    * Gets fullSqlRetentionHours
    *  全量SQL存储时长
    *
    * @return int|null
    */
    public function getFullSqlRetentionHours()
    {
        return $this->container['fullSqlRetentionHours'];
    }

    /**
    * Sets fullSqlRetentionHours
    *
    * @param int|null $fullSqlRetentionHours 全量SQL存储时长
    *
    * @return $this
    */
    public function setFullSqlRetentionHours($fullSqlRetentionHours)
    {
        $this->container['fullSqlRetentionHours'] = $fullSqlRetentionHours;
        return $this;
    }

    /**
    * Gets slowSqlSwitchOn
    *  慢SQL开关
    *
    * @return bool|null
    */
    public function getSlowSqlSwitchOn()
    {
        return $this->container['slowSqlSwitchOn'];
    }

    /**
    * Sets slowSqlSwitchOn
    *
    * @param bool|null $slowSqlSwitchOn 慢SQL开关
    *
    * @return $this
    */
    public function setSlowSqlSwitchOn($slowSqlSwitchOn)
    {
        $this->container['slowSqlSwitchOn'] = $slowSqlSwitchOn;
        return $this;
    }

    /**
    * Gets slowSqlRetentionHours
    *  慢SQL存储时长
    *
    * @return int|null
    */
    public function getSlowSqlRetentionHours()
    {
        return $this->container['slowSqlRetentionHours'];
    }

    /**
    * Sets slowSqlRetentionHours
    *
    * @param int|null $slowSqlRetentionHours 慢SQL存储时长
    *
    * @return $this
    */
    public function setSlowSqlRetentionHours($slowSqlRetentionHours)
    {
        $this->container['slowSqlRetentionHours'] = $slowSqlRetentionHours;
        return $this;
    }

    /**
    * Gets deadLockSwitchOn
    *  死锁开关
    *
    * @return bool|null
    */
    public function getDeadLockSwitchOn()
    {
        return $this->container['deadLockSwitchOn'];
    }

    /**
    * Sets deadLockSwitchOn
    *
    * @param bool|null $deadLockSwitchOn 死锁开关
    *
    * @return $this
    */
    public function setDeadLockSwitchOn($deadLockSwitchOn)
    {
        $this->container['deadLockSwitchOn'] = $deadLockSwitchOn;
        return $this;
    }

    /**
    * Gets deadLockRetentionHours
    *  死锁存储时长
    *
    * @return int|null
    */
    public function getDeadLockRetentionHours()
    {
        return $this->container['deadLockRetentionHours'];
    }

    /**
    * Sets deadLockRetentionHours
    *
    * @param int|null $deadLockRetentionHours 死锁存储时长
    *
    * @return $this
    */
    public function setDeadLockRetentionHours($deadLockRetentionHours)
    {
        $this->container['deadLockRetentionHours'] = $deadLockRetentionHours;
        return $this;
    }

    /**
    * Gets lockBlockingSwitchOn
    *  锁等待开关
    *
    * @return bool|null
    */
    public function getLockBlockingSwitchOn()
    {
        return $this->container['lockBlockingSwitchOn'];
    }

    /**
    * Sets lockBlockingSwitchOn
    *
    * @param bool|null $lockBlockingSwitchOn 锁等待开关
    *
    * @return $this
    */
    public function setLockBlockingSwitchOn($lockBlockingSwitchOn)
    {
        $this->container['lockBlockingSwitchOn'] = $lockBlockingSwitchOn;
        return $this;
    }

    /**
    * Gets lockBlockingRetentionHours
    *  锁等待存储时长
    *
    * @return int|null
    */
    public function getLockBlockingRetentionHours()
    {
        return $this->container['lockBlockingRetentionHours'];
    }

    /**
    * Sets lockBlockingRetentionHours
    *
    * @param int|null $lockBlockingRetentionHours 锁等待存储时长
    *
    * @return $this
    */
    public function setLockBlockingRetentionHours($lockBlockingRetentionHours)
    {
        $this->container['lockBlockingRetentionHours'] = $lockBlockingRetentionHours;
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

