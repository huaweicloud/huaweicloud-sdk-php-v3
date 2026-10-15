<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplayExecuteRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplayExecuteRecords';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executeTime  执行记录的时间，格式为秒级时间戳。
    * finishedSql  执行完的SQL数量。
    * abnormalSql  执行的异常SQL数量。
    * slowSql  执行的慢SQL数量。
    * totalSql  执行记录的SQL总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executeTime' => 'int',
            'finishedSql' => 'int',
            'abnormalSql' => 'int',
            'slowSql' => 'int',
            'totalSql' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executeTime  执行记录的时间，格式为秒级时间戳。
    * finishedSql  执行完的SQL数量。
    * abnormalSql  执行的异常SQL数量。
    * slowSql  执行的慢SQL数量。
    * totalSql  执行记录的SQL总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executeTime' => 'int64',
        'finishedSql' => 'int64',
        'abnormalSql' => 'int64',
        'slowSql' => 'int64',
        'totalSql' => 'int64'
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
    * executeTime  执行记录的时间，格式为秒级时间戳。
    * finishedSql  执行完的SQL数量。
    * abnormalSql  执行的异常SQL数量。
    * slowSql  执行的慢SQL数量。
    * totalSql  执行记录的SQL总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executeTime' => 'execute_time',
            'finishedSql' => 'finished_sql',
            'abnormalSql' => 'abnormal_sql',
            'slowSql' => 'slow_sql',
            'totalSql' => 'total_sql'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executeTime  执行记录的时间，格式为秒级时间戳。
    * finishedSql  执行完的SQL数量。
    * abnormalSql  执行的异常SQL数量。
    * slowSql  执行的慢SQL数量。
    * totalSql  执行记录的SQL总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'executeTime' => 'setExecuteTime',
            'finishedSql' => 'setFinishedSql',
            'abnormalSql' => 'setAbnormalSql',
            'slowSql' => 'setSlowSql',
            'totalSql' => 'setTotalSql'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executeTime  执行记录的时间，格式为秒级时间戳。
    * finishedSql  执行完的SQL数量。
    * abnormalSql  执行的异常SQL数量。
    * slowSql  执行的慢SQL数量。
    * totalSql  执行记录的SQL总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'executeTime' => 'getExecuteTime',
            'finishedSql' => 'getFinishedSql',
            'abnormalSql' => 'getAbnormalSql',
            'slowSql' => 'getSlowSql',
            'totalSql' => 'getTotalSql'
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
        $this->container['executeTime'] = isset($data['executeTime']) ? $data['executeTime'] : null;
        $this->container['finishedSql'] = isset($data['finishedSql']) ? $data['finishedSql'] : null;
        $this->container['abnormalSql'] = isset($data['abnormalSql']) ? $data['abnormalSql'] : null;
        $this->container['slowSql'] = isset($data['slowSql']) ? $data['slowSql'] : null;
        $this->container['totalSql'] = isset($data['totalSql']) ? $data['totalSql'] : null;
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
    * Gets executeTime
    *  执行记录的时间，格式为秒级时间戳。
    *
    * @return int|null
    */
    public function getExecuteTime()
    {
        return $this->container['executeTime'];
    }

    /**
    * Sets executeTime
    *
    * @param int|null $executeTime 执行记录的时间，格式为秒级时间戳。
    *
    * @return $this
    */
    public function setExecuteTime($executeTime)
    {
        $this->container['executeTime'] = $executeTime;
        return $this;
    }

    /**
    * Gets finishedSql
    *  执行完的SQL数量。
    *
    * @return int|null
    */
    public function getFinishedSql()
    {
        return $this->container['finishedSql'];
    }

    /**
    * Sets finishedSql
    *
    * @param int|null $finishedSql 执行完的SQL数量。
    *
    * @return $this
    */
    public function setFinishedSql($finishedSql)
    {
        $this->container['finishedSql'] = $finishedSql;
        return $this;
    }

    /**
    * Gets abnormalSql
    *  执行的异常SQL数量。
    *
    * @return int|null
    */
    public function getAbnormalSql()
    {
        return $this->container['abnormalSql'];
    }

    /**
    * Sets abnormalSql
    *
    * @param int|null $abnormalSql 执行的异常SQL数量。
    *
    * @return $this
    */
    public function setAbnormalSql($abnormalSql)
    {
        $this->container['abnormalSql'] = $abnormalSql;
        return $this;
    }

    /**
    * Gets slowSql
    *  执行的慢SQL数量。
    *
    * @return int|null
    */
    public function getSlowSql()
    {
        return $this->container['slowSql'];
    }

    /**
    * Sets slowSql
    *
    * @param int|null $slowSql 执行的慢SQL数量。
    *
    * @return $this
    */
    public function setSlowSql($slowSql)
    {
        $this->container['slowSql'] = $slowSql;
        return $this;
    }

    /**
    * Gets totalSql
    *  执行记录的SQL总数。
    *
    * @return int|null
    */
    public function getTotalSql()
    {
        return $this->container['totalSql'];
    }

    /**
    * Sets totalSql
    *
    * @param int|null $totalSql 执行记录的SQL总数。
    *
    * @return $this
    */
    public function setTotalSql($totalSql)
    {
        $this->container['totalSql'] = $totalSql;
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

