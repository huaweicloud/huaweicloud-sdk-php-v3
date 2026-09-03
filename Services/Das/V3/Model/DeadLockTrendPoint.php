<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeadLockTrendPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeadLockTrendPoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * occurrenceTime  发生时间
    * totalDeadlockCount  死锁总数
    * keyDeadlockCount  keylock数量
    * objectDeadlockCount  objectlock数量
    * ridDeadlockCount  ridlock数量
    * pageDeadlockCount  pagelock数量
    * compileDeadlockCount  compilelock数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'occurrenceTime' => 'int',
            'totalDeadlockCount' => 'int',
            'keyDeadlockCount' => 'int',
            'objectDeadlockCount' => 'int',
            'ridDeadlockCount' => 'int',
            'pageDeadlockCount' => 'int',
            'compileDeadlockCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * occurrenceTime  发生时间
    * totalDeadlockCount  死锁总数
    * keyDeadlockCount  keylock数量
    * objectDeadlockCount  objectlock数量
    * ridDeadlockCount  ridlock数量
    * pageDeadlockCount  pagelock数量
    * compileDeadlockCount  compilelock数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'occurrenceTime' => 'int64',
        'totalDeadlockCount' => 'int64',
        'keyDeadlockCount' => 'int64',
        'objectDeadlockCount' => 'int64',
        'ridDeadlockCount' => 'int64',
        'pageDeadlockCount' => 'int64',
        'compileDeadlockCount' => 'int64'
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
    * occurrenceTime  发生时间
    * totalDeadlockCount  死锁总数
    * keyDeadlockCount  keylock数量
    * objectDeadlockCount  objectlock数量
    * ridDeadlockCount  ridlock数量
    * pageDeadlockCount  pagelock数量
    * compileDeadlockCount  compilelock数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'occurrenceTime' => 'occurrence_time',
            'totalDeadlockCount' => 'total_deadlock_count',
            'keyDeadlockCount' => 'key_deadlock_count',
            'objectDeadlockCount' => 'object_deadlock_count',
            'ridDeadlockCount' => 'rid_deadlock_count',
            'pageDeadlockCount' => 'page_deadlock_count',
            'compileDeadlockCount' => 'compile_deadlock_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * occurrenceTime  发生时间
    * totalDeadlockCount  死锁总数
    * keyDeadlockCount  keylock数量
    * objectDeadlockCount  objectlock数量
    * ridDeadlockCount  ridlock数量
    * pageDeadlockCount  pagelock数量
    * compileDeadlockCount  compilelock数量
    *
    * @var string[]
    */
    protected static $setters = [
            'occurrenceTime' => 'setOccurrenceTime',
            'totalDeadlockCount' => 'setTotalDeadlockCount',
            'keyDeadlockCount' => 'setKeyDeadlockCount',
            'objectDeadlockCount' => 'setObjectDeadlockCount',
            'ridDeadlockCount' => 'setRidDeadlockCount',
            'pageDeadlockCount' => 'setPageDeadlockCount',
            'compileDeadlockCount' => 'setCompileDeadlockCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * occurrenceTime  发生时间
    * totalDeadlockCount  死锁总数
    * keyDeadlockCount  keylock数量
    * objectDeadlockCount  objectlock数量
    * ridDeadlockCount  ridlock数量
    * pageDeadlockCount  pagelock数量
    * compileDeadlockCount  compilelock数量
    *
    * @var string[]
    */
    protected static $getters = [
            'occurrenceTime' => 'getOccurrenceTime',
            'totalDeadlockCount' => 'getTotalDeadlockCount',
            'keyDeadlockCount' => 'getKeyDeadlockCount',
            'objectDeadlockCount' => 'getObjectDeadlockCount',
            'ridDeadlockCount' => 'getRidDeadlockCount',
            'pageDeadlockCount' => 'getPageDeadlockCount',
            'compileDeadlockCount' => 'getCompileDeadlockCount'
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
        $this->container['occurrenceTime'] = isset($data['occurrenceTime']) ? $data['occurrenceTime'] : null;
        $this->container['totalDeadlockCount'] = isset($data['totalDeadlockCount']) ? $data['totalDeadlockCount'] : null;
        $this->container['keyDeadlockCount'] = isset($data['keyDeadlockCount']) ? $data['keyDeadlockCount'] : null;
        $this->container['objectDeadlockCount'] = isset($data['objectDeadlockCount']) ? $data['objectDeadlockCount'] : null;
        $this->container['ridDeadlockCount'] = isset($data['ridDeadlockCount']) ? $data['ridDeadlockCount'] : null;
        $this->container['pageDeadlockCount'] = isset($data['pageDeadlockCount']) ? $data['pageDeadlockCount'] : null;
        $this->container['compileDeadlockCount'] = isset($data['compileDeadlockCount']) ? $data['compileDeadlockCount'] : null;
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
    * Gets occurrenceTime
    *  发生时间
    *
    * @return int|null
    */
    public function getOccurrenceTime()
    {
        return $this->container['occurrenceTime'];
    }

    /**
    * Sets occurrenceTime
    *
    * @param int|null $occurrenceTime 发生时间
    *
    * @return $this
    */
    public function setOccurrenceTime($occurrenceTime)
    {
        $this->container['occurrenceTime'] = $occurrenceTime;
        return $this;
    }

    /**
    * Gets totalDeadlockCount
    *  死锁总数
    *
    * @return int|null
    */
    public function getTotalDeadlockCount()
    {
        return $this->container['totalDeadlockCount'];
    }

    /**
    * Sets totalDeadlockCount
    *
    * @param int|null $totalDeadlockCount 死锁总数
    *
    * @return $this
    */
    public function setTotalDeadlockCount($totalDeadlockCount)
    {
        $this->container['totalDeadlockCount'] = $totalDeadlockCount;
        return $this;
    }

    /**
    * Gets keyDeadlockCount
    *  keylock数量
    *
    * @return int|null
    */
    public function getKeyDeadlockCount()
    {
        return $this->container['keyDeadlockCount'];
    }

    /**
    * Sets keyDeadlockCount
    *
    * @param int|null $keyDeadlockCount keylock数量
    *
    * @return $this
    */
    public function setKeyDeadlockCount($keyDeadlockCount)
    {
        $this->container['keyDeadlockCount'] = $keyDeadlockCount;
        return $this;
    }

    /**
    * Gets objectDeadlockCount
    *  objectlock数量
    *
    * @return int|null
    */
    public function getObjectDeadlockCount()
    {
        return $this->container['objectDeadlockCount'];
    }

    /**
    * Sets objectDeadlockCount
    *
    * @param int|null $objectDeadlockCount objectlock数量
    *
    * @return $this
    */
    public function setObjectDeadlockCount($objectDeadlockCount)
    {
        $this->container['objectDeadlockCount'] = $objectDeadlockCount;
        return $this;
    }

    /**
    * Gets ridDeadlockCount
    *  ridlock数量
    *
    * @return int|null
    */
    public function getRidDeadlockCount()
    {
        return $this->container['ridDeadlockCount'];
    }

    /**
    * Sets ridDeadlockCount
    *
    * @param int|null $ridDeadlockCount ridlock数量
    *
    * @return $this
    */
    public function setRidDeadlockCount($ridDeadlockCount)
    {
        $this->container['ridDeadlockCount'] = $ridDeadlockCount;
        return $this;
    }

    /**
    * Gets pageDeadlockCount
    *  pagelock数量
    *
    * @return int|null
    */
    public function getPageDeadlockCount()
    {
        return $this->container['pageDeadlockCount'];
    }

    /**
    * Sets pageDeadlockCount
    *
    * @param int|null $pageDeadlockCount pagelock数量
    *
    * @return $this
    */
    public function setPageDeadlockCount($pageDeadlockCount)
    {
        $this->container['pageDeadlockCount'] = $pageDeadlockCount;
        return $this;
    }

    /**
    * Gets compileDeadlockCount
    *  compilelock数量
    *
    * @return int|null
    */
    public function getCompileDeadlockCount()
    {
        return $this->container['compileDeadlockCount'];
    }

    /**
    * Sets compileDeadlockCount
    *
    * @param int|null $compileDeadlockCount compilelock数量
    *
    * @return $this
    */
    public function setCompileDeadlockCount($compileDeadlockCount)
    {
        $this->container['compileDeadlockCount'] = $compileDeadlockCount;
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

