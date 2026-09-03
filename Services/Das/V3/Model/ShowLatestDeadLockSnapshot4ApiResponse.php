<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLatestDeadLockSnapshot4ApiResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLatestDeadLockSnapshot4ApiResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * findLock  是否找到有锁
    * happenTime  发生时间（ms）
    * mysqlDeadLock  mysqlDeadLock
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'findLock' => 'bool',
            'happenTime' => 'int',
            'mysqlDeadLock' => '\HuaweiCloud\SDK\Das\V3\Model\MySQLDeadLock'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * findLock  是否找到有锁
    * happenTime  发生时间（ms）
    * mysqlDeadLock  mysqlDeadLock
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'findLock' => null,
        'happenTime' => 'int64',
        'mysqlDeadLock' => null
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
    * findLock  是否找到有锁
    * happenTime  发生时间（ms）
    * mysqlDeadLock  mysqlDeadLock
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'findLock' => 'find_lock',
            'happenTime' => 'happen_time',
            'mysqlDeadLock' => 'mysql_dead_lock'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * findLock  是否找到有锁
    * happenTime  发生时间（ms）
    * mysqlDeadLock  mysqlDeadLock
    *
    * @var string[]
    */
    protected static $setters = [
            'findLock' => 'setFindLock',
            'happenTime' => 'setHappenTime',
            'mysqlDeadLock' => 'setMysqlDeadLock'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * findLock  是否找到有锁
    * happenTime  发生时间（ms）
    * mysqlDeadLock  mysqlDeadLock
    *
    * @var string[]
    */
    protected static $getters = [
            'findLock' => 'getFindLock',
            'happenTime' => 'getHappenTime',
            'mysqlDeadLock' => 'getMysqlDeadLock'
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
        $this->container['findLock'] = isset($data['findLock']) ? $data['findLock'] : null;
        $this->container['happenTime'] = isset($data['happenTime']) ? $data['happenTime'] : null;
        $this->container['mysqlDeadLock'] = isset($data['mysqlDeadLock']) ? $data['mysqlDeadLock'] : null;
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
    * Gets findLock
    *  是否找到有锁
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
    * @param bool|null $findLock 是否找到有锁
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
    *  发生时间（ms）
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
    * @param int|null $happenTime 发生时间（ms）
    *
    * @return $this
    */
    public function setHappenTime($happenTime)
    {
        $this->container['happenTime'] = $happenTime;
        return $this;
    }

    /**
    * Gets mysqlDeadLock
    *  mysqlDeadLock
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\MySQLDeadLock|null
    */
    public function getMysqlDeadLock()
    {
        return $this->container['mysqlDeadLock'];
    }

    /**
    * Sets mysqlDeadLock
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\MySQLDeadLock|null $mysqlDeadLock mysqlDeadLock
    *
    * @return $this
    */
    public function setMysqlDeadLock($mysqlDeadLock)
    {
        $this->container['mysqlDeadLock'] = $mysqlDeadLock;
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

