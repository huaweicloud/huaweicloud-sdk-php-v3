<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetaLockResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetaLockResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * infos  MDL锁等待信息
    * count  MDL锁总数量
    * waitLockCount  等待锁的会话的数量
    * holdLockCount  持有锁的会话的数量
    * timeGreaterThanCount  等锁时间大于阈值的会话的数量
    * lockWaitThresholdSecond  MDL锁等待时间阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'infos' => '\HuaweiCloud\SDK\Das\V3\Model\MetaLockInfo[]',
            'count' => 'int',
            'waitLockCount' => 'int',
            'holdLockCount' => 'int',
            'timeGreaterThanCount' => 'int',
            'lockWaitThresholdSecond' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * infos  MDL锁等待信息
    * count  MDL锁总数量
    * waitLockCount  等待锁的会话的数量
    * holdLockCount  持有锁的会话的数量
    * timeGreaterThanCount  等锁时间大于阈值的会话的数量
    * lockWaitThresholdSecond  MDL锁等待时间阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'infos' => null,
        'count' => 'int32',
        'waitLockCount' => 'int32',
        'holdLockCount' => 'int32',
        'timeGreaterThanCount' => 'int32',
        'lockWaitThresholdSecond' => 'int64'
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
    * infos  MDL锁等待信息
    * count  MDL锁总数量
    * waitLockCount  等待锁的会话的数量
    * holdLockCount  持有锁的会话的数量
    * timeGreaterThanCount  等锁时间大于阈值的会话的数量
    * lockWaitThresholdSecond  MDL锁等待时间阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'infos' => 'infos',
            'count' => 'count',
            'waitLockCount' => 'wait_lock_count',
            'holdLockCount' => 'hold_lock_count',
            'timeGreaterThanCount' => 'time_greater_than_count',
            'lockWaitThresholdSecond' => 'lock_wait_threshold_second'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * infos  MDL锁等待信息
    * count  MDL锁总数量
    * waitLockCount  等待锁的会话的数量
    * holdLockCount  持有锁的会话的数量
    * timeGreaterThanCount  等锁时间大于阈值的会话的数量
    * lockWaitThresholdSecond  MDL锁等待时间阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'infos' => 'setInfos',
            'count' => 'setCount',
            'waitLockCount' => 'setWaitLockCount',
            'holdLockCount' => 'setHoldLockCount',
            'timeGreaterThanCount' => 'setTimeGreaterThanCount',
            'lockWaitThresholdSecond' => 'setLockWaitThresholdSecond'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * infos  MDL锁等待信息
    * count  MDL锁总数量
    * waitLockCount  等待锁的会话的数量
    * holdLockCount  持有锁的会话的数量
    * timeGreaterThanCount  等锁时间大于阈值的会话的数量
    * lockWaitThresholdSecond  MDL锁等待时间阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'infos' => 'getInfos',
            'count' => 'getCount',
            'waitLockCount' => 'getWaitLockCount',
            'holdLockCount' => 'getHoldLockCount',
            'timeGreaterThanCount' => 'getTimeGreaterThanCount',
            'lockWaitThresholdSecond' => 'getLockWaitThresholdSecond'
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
        $this->container['infos'] = isset($data['infos']) ? $data['infos'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['waitLockCount'] = isset($data['waitLockCount']) ? $data['waitLockCount'] : null;
        $this->container['holdLockCount'] = isset($data['holdLockCount']) ? $data['holdLockCount'] : null;
        $this->container['timeGreaterThanCount'] = isset($data['timeGreaterThanCount']) ? $data['timeGreaterThanCount'] : null;
        $this->container['lockWaitThresholdSecond'] = isset($data['lockWaitThresholdSecond']) ? $data['lockWaitThresholdSecond'] : null;
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
    * Gets infos
    *  MDL锁等待信息
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\MetaLockInfo[]|null
    */
    public function getInfos()
    {
        return $this->container['infos'];
    }

    /**
    * Sets infos
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\MetaLockInfo[]|null $infos MDL锁等待信息
    *
    * @return $this
    */
    public function setInfos($infos)
    {
        $this->container['infos'] = $infos;
        return $this;
    }

    /**
    * Gets count
    *  MDL锁总数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count MDL锁总数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets waitLockCount
    *  等待锁的会话的数量
    *
    * @return int|null
    */
    public function getWaitLockCount()
    {
        return $this->container['waitLockCount'];
    }

    /**
    * Sets waitLockCount
    *
    * @param int|null $waitLockCount 等待锁的会话的数量
    *
    * @return $this
    */
    public function setWaitLockCount($waitLockCount)
    {
        $this->container['waitLockCount'] = $waitLockCount;
        return $this;
    }

    /**
    * Gets holdLockCount
    *  持有锁的会话的数量
    *
    * @return int|null
    */
    public function getHoldLockCount()
    {
        return $this->container['holdLockCount'];
    }

    /**
    * Sets holdLockCount
    *
    * @param int|null $holdLockCount 持有锁的会话的数量
    *
    * @return $this
    */
    public function setHoldLockCount($holdLockCount)
    {
        $this->container['holdLockCount'] = $holdLockCount;
        return $this;
    }

    /**
    * Gets timeGreaterThanCount
    *  等锁时间大于阈值的会话的数量
    *
    * @return int|null
    */
    public function getTimeGreaterThanCount()
    {
        return $this->container['timeGreaterThanCount'];
    }

    /**
    * Sets timeGreaterThanCount
    *
    * @param int|null $timeGreaterThanCount 等锁时间大于阈值的会话的数量
    *
    * @return $this
    */
    public function setTimeGreaterThanCount($timeGreaterThanCount)
    {
        $this->container['timeGreaterThanCount'] = $timeGreaterThanCount;
        return $this;
    }

    /**
    * Gets lockWaitThresholdSecond
    *  MDL锁等待时间阈值
    *
    * @return int|null
    */
    public function getLockWaitThresholdSecond()
    {
        return $this->container['lockWaitThresholdSecond'];
    }

    /**
    * Sets lockWaitThresholdSecond
    *
    * @param int|null $lockWaitThresholdSecond MDL锁等待时间阈值
    *
    * @return $this
    */
    public function setLockWaitThresholdSecond($lockWaitThresholdSecond)
    {
        $this->container['lockWaitThresholdSecond'] = $lockWaitThresholdSecond;
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

