<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLatestDeadLockSnapshotResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLatestDeadLockSnapshotResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mysqlDeadLock  mysqlDeadLock
    * findLock  表示系统是否成功检测到死锁事件
    * happenTime  死锁事件发生的 Unix 时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mysqlDeadLock' => '\HuaweiCloud\SDK\Das\V3\Model\QueryLatestDeadLockRespMysqlDeadLock',
            'findLock' => 'bool',
            'happenTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mysqlDeadLock  mysqlDeadLock
    * findLock  表示系统是否成功检测到死锁事件
    * happenTime  死锁事件发生的 Unix 时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mysqlDeadLock' => null,
        'findLock' => null,
        'happenTime' => 'int32'
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
    * mysqlDeadLock  mysqlDeadLock
    * findLock  表示系统是否成功检测到死锁事件
    * happenTime  死锁事件发生的 Unix 时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mysqlDeadLock' => 'mysql_dead_lock',
            'findLock' => 'find_lock',
            'happenTime' => 'happen_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mysqlDeadLock  mysqlDeadLock
    * findLock  表示系统是否成功检测到死锁事件
    * happenTime  死锁事件发生的 Unix 时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'mysqlDeadLock' => 'setMysqlDeadLock',
            'findLock' => 'setFindLock',
            'happenTime' => 'setHappenTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mysqlDeadLock  mysqlDeadLock
    * findLock  表示系统是否成功检测到死锁事件
    * happenTime  死锁事件发生的 Unix 时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'mysqlDeadLock' => 'getMysqlDeadLock',
            'findLock' => 'getFindLock',
            'happenTime' => 'getHappenTime'
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
        $this->container['mysqlDeadLock'] = isset($data['mysqlDeadLock']) ? $data['mysqlDeadLock'] : null;
        $this->container['findLock'] = isset($data['findLock']) ? $data['findLock'] : null;
        $this->container['happenTime'] = isset($data['happenTime']) ? $data['happenTime'] : null;
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
    * Gets mysqlDeadLock
    *  mysqlDeadLock
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\QueryLatestDeadLockRespMysqlDeadLock|null
    */
    public function getMysqlDeadLock()
    {
        return $this->container['mysqlDeadLock'];
    }

    /**
    * Sets mysqlDeadLock
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\QueryLatestDeadLockRespMysqlDeadLock|null $mysqlDeadLock mysqlDeadLock
    *
    * @return $this
    */
    public function setMysqlDeadLock($mysqlDeadLock)
    {
        $this->container['mysqlDeadLock'] = $mysqlDeadLock;
        return $this;
    }

    /**
    * Gets findLock
    *  表示系统是否成功检测到死锁事件
    *
    * @return bool|null
    */
    public function getFindLock()
    {
        return $this->container['findLock'];
    }

    /**
    * Sets findLock
    *
    * @param bool|null $findLock 表示系统是否成功检测到死锁事件
    *
    * @return $this
    */
    public function setFindLock($findLock)
    {
        $this->container['findLock'] = $findLock;
        return $this;
    }

    /**
    * Gets happenTime
    *  死锁事件发生的 Unix 时间戳
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
    * @param int|null $happenTime 死锁事件发生的 Unix 时间戳
    *
    * @return $this
    */
    public function setHappenTime($happenTime)
    {
        $this->container['happenTime'] = $happenTime;
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

