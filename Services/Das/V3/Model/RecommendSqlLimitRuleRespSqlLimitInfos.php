<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecommendSqlLimitRuleRespSqlLimitInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecommendSqlLimitRuleResp_sql_limit_infos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rawSql  rawSql
    * averageTime  平均时间
    * count  数量
    * maxTime  mysql 提供， taurus不提供
    * exeTime  执行时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rawSql' => '\HuaweiCloud\SDK\Das\V3\Model\RecommendSqlLimitRuleRespRawSql',
            'averageTime' => 'double',
            'count' => 'double',
            'maxTime' => 'int',
            'exeTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rawSql  rawSql
    * averageTime  平均时间
    * count  数量
    * maxTime  mysql 提供， taurus不提供
    * exeTime  执行时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rawSql' => null,
        'averageTime' => 'double',
        'count' => 'double',
        'maxTime' => 'int64',
        'exeTime' => 'int64'
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
    * rawSql  rawSql
    * averageTime  平均时间
    * count  数量
    * maxTime  mysql 提供， taurus不提供
    * exeTime  执行时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rawSql' => 'raw_sql',
            'averageTime' => 'average_time',
            'count' => 'count',
            'maxTime' => 'maxTime',
            'exeTime' => 'exe_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rawSql  rawSql
    * averageTime  平均时间
    * count  数量
    * maxTime  mysql 提供， taurus不提供
    * exeTime  执行时间
    *
    * @var string[]
    */
    protected static $setters = [
            'rawSql' => 'setRawSql',
            'averageTime' => 'setAverageTime',
            'count' => 'setCount',
            'maxTime' => 'setMaxTime',
            'exeTime' => 'setExeTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rawSql  rawSql
    * averageTime  平均时间
    * count  数量
    * maxTime  mysql 提供， taurus不提供
    * exeTime  执行时间
    *
    * @var string[]
    */
    protected static $getters = [
            'rawSql' => 'getRawSql',
            'averageTime' => 'getAverageTime',
            'count' => 'getCount',
            'maxTime' => 'getMaxTime',
            'exeTime' => 'getExeTime'
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
        $this->container['rawSql'] = isset($data['rawSql']) ? $data['rawSql'] : null;
        $this->container['averageTime'] = isset($data['averageTime']) ? $data['averageTime'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['maxTime'] = isset($data['maxTime']) ? $data['maxTime'] : null;
        $this->container['exeTime'] = isset($data['exeTime']) ? $data['exeTime'] : null;
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
    * Gets rawSql
    *  rawSql
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\RecommendSqlLimitRuleRespRawSql|null
    */
    public function getRawSql()
    {
        return $this->container['rawSql'];
    }

    /**
    * Sets rawSql
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\RecommendSqlLimitRuleRespRawSql|null $rawSql rawSql
    *
    * @return $this
    */
    public function setRawSql($rawSql)
    {
        $this->container['rawSql'] = $rawSql;
        return $this;
    }

    /**
    * Gets averageTime
    *  平均时间
    *
    * @return double|null
    */
    public function getAverageTime()
    {
        return $this->container['averageTime'];
    }

    /**
    * Sets averageTime
    *
    * @param double|null $averageTime 平均时间
    *
    * @return $this
    */
    public function setAverageTime($averageTime)
    {
        $this->container['averageTime'] = $averageTime;
        return $this;
    }

    /**
    * Gets count
    *  数量
    *
    * @return double|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param double|null $count 数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets maxTime
    *  mysql 提供， taurus不提供
    *
    * @return int|null
    */
    public function getMaxTime()
    {
        return $this->container['maxTime'];
    }

    /**
    * Sets maxTime
    *
    * @param int|null $maxTime mysql 提供， taurus不提供
    *
    * @return $this
    */
    public function setMaxTime($maxTime)
    {
        $this->container['maxTime'] = $maxTime;
        return $this;
    }

    /**
    * Gets exeTime
    *  执行时间
    *
    * @return int|null
    */
    public function getExeTime()
    {
        return $this->container['exeTime'];
    }

    /**
    * Sets exeTime
    *
    * @param int|null $exeTime 执行时间
    *
    * @return $this
    */
    public function setExeTime($exeTime)
    {
        $this->container['exeTime'] = $exeTime;
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

