<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQueriesStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQueriesStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * averageQueryWaitingTime  平均查询等待时间。
    * averageTimeConsumptionOfQueries  平均查询耗时。
    * averageTimeConsumptionOfSessions  平均会话耗时。
    * queriesCount  查询数量。
    * sessionCount  会话数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'averageQueryWaitingTime' => 'double',
            'averageTimeConsumptionOfQueries' => 'double',
            'averageTimeConsumptionOfSessions' => 'double',
            'queriesCount' => 'int',
            'sessionCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * averageQueryWaitingTime  平均查询等待时间。
    * averageTimeConsumptionOfQueries  平均查询耗时。
    * averageTimeConsumptionOfSessions  平均会话耗时。
    * queriesCount  查询数量。
    * sessionCount  会话数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'averageQueryWaitingTime' => 'double',
        'averageTimeConsumptionOfQueries' => 'double',
        'averageTimeConsumptionOfSessions' => 'double',
        'queriesCount' => 'int64',
        'sessionCount' => 'int64'
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
    * averageQueryWaitingTime  平均查询等待时间。
    * averageTimeConsumptionOfQueries  平均查询耗时。
    * averageTimeConsumptionOfSessions  平均会话耗时。
    * queriesCount  查询数量。
    * sessionCount  会话数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'averageQueryWaitingTime' => 'average_query_waiting_time',
            'averageTimeConsumptionOfQueries' => 'average_time_consumption_of_queries',
            'averageTimeConsumptionOfSessions' => 'average_time_consumption_of_sessions',
            'queriesCount' => 'queries_count',
            'sessionCount' => 'session_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * averageQueryWaitingTime  平均查询等待时间。
    * averageTimeConsumptionOfQueries  平均查询耗时。
    * averageTimeConsumptionOfSessions  平均会话耗时。
    * queriesCount  查询数量。
    * sessionCount  会话数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'averageQueryWaitingTime' => 'setAverageQueryWaitingTime',
            'averageTimeConsumptionOfQueries' => 'setAverageTimeConsumptionOfQueries',
            'averageTimeConsumptionOfSessions' => 'setAverageTimeConsumptionOfSessions',
            'queriesCount' => 'setQueriesCount',
            'sessionCount' => 'setSessionCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * averageQueryWaitingTime  平均查询等待时间。
    * averageTimeConsumptionOfQueries  平均查询耗时。
    * averageTimeConsumptionOfSessions  平均会话耗时。
    * queriesCount  查询数量。
    * sessionCount  会话数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'averageQueryWaitingTime' => 'getAverageQueryWaitingTime',
            'averageTimeConsumptionOfQueries' => 'getAverageTimeConsumptionOfQueries',
            'averageTimeConsumptionOfSessions' => 'getAverageTimeConsumptionOfSessions',
            'queriesCount' => 'getQueriesCount',
            'sessionCount' => 'getSessionCount'
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
        $this->container['averageQueryWaitingTime'] = isset($data['averageQueryWaitingTime']) ? $data['averageQueryWaitingTime'] : null;
        $this->container['averageTimeConsumptionOfQueries'] = isset($data['averageTimeConsumptionOfQueries']) ? $data['averageTimeConsumptionOfQueries'] : null;
        $this->container['averageTimeConsumptionOfSessions'] = isset($data['averageTimeConsumptionOfSessions']) ? $data['averageTimeConsumptionOfSessions'] : null;
        $this->container['queriesCount'] = isset($data['queriesCount']) ? $data['queriesCount'] : null;
        $this->container['sessionCount'] = isset($data['sessionCount']) ? $data['sessionCount'] : null;
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
    * Gets averageQueryWaitingTime
    *  平均查询等待时间。
    *
    * @return double|null
    */
    public function getAverageQueryWaitingTime()
    {
        return $this->container['averageQueryWaitingTime'];
    }

    /**
    * Sets averageQueryWaitingTime
    *
    * @param double|null $averageQueryWaitingTime 平均查询等待时间。
    *
    * @return $this
    */
    public function setAverageQueryWaitingTime($averageQueryWaitingTime)
    {
        $this->container['averageQueryWaitingTime'] = $averageQueryWaitingTime;
        return $this;
    }

    /**
    * Gets averageTimeConsumptionOfQueries
    *  平均查询耗时。
    *
    * @return double|null
    */
    public function getAverageTimeConsumptionOfQueries()
    {
        return $this->container['averageTimeConsumptionOfQueries'];
    }

    /**
    * Sets averageTimeConsumptionOfQueries
    *
    * @param double|null $averageTimeConsumptionOfQueries 平均查询耗时。
    *
    * @return $this
    */
    public function setAverageTimeConsumptionOfQueries($averageTimeConsumptionOfQueries)
    {
        $this->container['averageTimeConsumptionOfQueries'] = $averageTimeConsumptionOfQueries;
        return $this;
    }

    /**
    * Gets averageTimeConsumptionOfSessions
    *  平均会话耗时。
    *
    * @return double|null
    */
    public function getAverageTimeConsumptionOfSessions()
    {
        return $this->container['averageTimeConsumptionOfSessions'];
    }

    /**
    * Sets averageTimeConsumptionOfSessions
    *
    * @param double|null $averageTimeConsumptionOfSessions 平均会话耗时。
    *
    * @return $this
    */
    public function setAverageTimeConsumptionOfSessions($averageTimeConsumptionOfSessions)
    {
        $this->container['averageTimeConsumptionOfSessions'] = $averageTimeConsumptionOfSessions;
        return $this;
    }

    /**
    * Gets queriesCount
    *  查询数量。
    *
    * @return int|null
    */
    public function getQueriesCount()
    {
        return $this->container['queriesCount'];
    }

    /**
    * Sets queriesCount
    *
    * @param int|null $queriesCount 查询数量。
    *
    * @return $this
    */
    public function setQueriesCount($queriesCount)
    {
        $this->container['queriesCount'] = $queriesCount;
        return $this;
    }

    /**
    * Gets sessionCount
    *  会话数量。
    *
    * @return int|null
    */
    public function getSessionCount()
    {
        return $this->container['sessionCount'];
    }

    /**
    * Sets sessionCount
    *
    * @param int|null $sessionCount 会话数量。
    *
    * @return $this
    */
    public function setSessionCount($sessionCount)
    {
        $this->container['sessionCount'] = $sessionCount;
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

