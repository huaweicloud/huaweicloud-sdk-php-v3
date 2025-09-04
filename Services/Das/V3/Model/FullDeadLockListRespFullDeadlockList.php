<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullDeadLockListRespFullDeadlockList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullDeadLockListResp_full_deadlock_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * mysqlDeadlock  mysqlDeadlock
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'happenTime' => 'int',
            'mysqlDeadlock' => '\HuaweiCloud\SDK\Das\V3\Model\FullDeadLockListRespMysqlDeadlock'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * mysqlDeadlock  mysqlDeadlock
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'happenTime' => 'int64',
        'mysqlDeadlock' => null
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
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * mysqlDeadlock  mysqlDeadlock
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'happenTime' => 'happen_time',
            'mysqlDeadlock' => 'mysql_deadlock'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * mysqlDeadlock  mysqlDeadlock
    *
    * @var string[]
    */
    protected static $setters = [
            'happenTime' => 'setHappenTime',
            'mysqlDeadlock' => 'setMysqlDeadlock'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * happenTime  死锁事件发生的 Unix 时间戳（毫秒级）
    * mysqlDeadlock  mysqlDeadlock
    *
    * @var string[]
    */
    protected static $getters = [
            'happenTime' => 'getHappenTime',
            'mysqlDeadlock' => 'getMysqlDeadlock'
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
        $this->container['happenTime'] = isset($data['happenTime']) ? $data['happenTime'] : null;
        $this->container['mysqlDeadlock'] = isset($data['mysqlDeadlock']) ? $data['mysqlDeadlock'] : null;
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
    * Gets mysqlDeadlock
    *  mysqlDeadlock
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\FullDeadLockListRespMysqlDeadlock|null
    */
    public function getMysqlDeadlock()
    {
        return $this->container['mysqlDeadlock'];
    }

    /**
    * Sets mysqlDeadlock
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\FullDeadLockListRespMysqlDeadlock|null $mysqlDeadlock mysqlDeadlock
    *
    * @return $this
    */
    public function setMysqlDeadlock($mysqlDeadlock)
    {
        $this->container['mysqlDeadlock'] = $mysqlDeadlock;
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

