<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceSpaceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceSpaceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalSize  实例总空间，以字节为单位。GaussDB(for MySQL)不会返回总空间
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * logSize  日志空间，以字节为单位
    * avgDailyGrowth  近七日的数据平均日增长量，以字节为单位
    * lastResultTime  最后一次分析的结果时间，毫秒单位时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalSize' => 'int',
            'usedSize' => 'int',
            'dataSize' => 'int',
            'logSize' => 'int',
            'avgDailyGrowth' => 'int',
            'lastResultTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalSize  实例总空间，以字节为单位。GaussDB(for MySQL)不会返回总空间
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * logSize  日志空间，以字节为单位
    * avgDailyGrowth  近七日的数据平均日增长量，以字节为单位
    * lastResultTime  最后一次分析的结果时间，毫秒单位时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalSize' => 'int64',
        'usedSize' => 'int64',
        'dataSize' => 'int64',
        'logSize' => 'int64',
        'avgDailyGrowth' => 'int64',
        'lastResultTime' => 'int64'
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
    * totalSize  实例总空间，以字节为单位。GaussDB(for MySQL)不会返回总空间
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * logSize  日志空间，以字节为单位
    * avgDailyGrowth  近七日的数据平均日增长量，以字节为单位
    * lastResultTime  最后一次分析的结果时间，毫秒单位时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalSize' => 'total_size',
            'usedSize' => 'used_size',
            'dataSize' => 'data_size',
            'logSize' => 'log_size',
            'avgDailyGrowth' => 'avg_daily_growth',
            'lastResultTime' => 'last_result_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalSize  实例总空间，以字节为单位。GaussDB(for MySQL)不会返回总空间
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * logSize  日志空间，以字节为单位
    * avgDailyGrowth  近七日的数据平均日增长量，以字节为单位
    * lastResultTime  最后一次分析的结果时间，毫秒单位时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'totalSize' => 'setTotalSize',
            'usedSize' => 'setUsedSize',
            'dataSize' => 'setDataSize',
            'logSize' => 'setLogSize',
            'avgDailyGrowth' => 'setAvgDailyGrowth',
            'lastResultTime' => 'setLastResultTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalSize  实例总空间，以字节为单位。GaussDB(for MySQL)不会返回总空间
    * usedSize  已使用空间，以字节为单位
    * dataSize  数据空间，以字节为单位
    * logSize  日志空间，以字节为单位
    * avgDailyGrowth  近七日的数据平均日增长量，以字节为单位
    * lastResultTime  最后一次分析的结果时间，毫秒单位时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'totalSize' => 'getTotalSize',
            'usedSize' => 'getUsedSize',
            'dataSize' => 'getDataSize',
            'logSize' => 'getLogSize',
            'avgDailyGrowth' => 'getAvgDailyGrowth',
            'lastResultTime' => 'getLastResultTime'
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
        $this->container['totalSize'] = isset($data['totalSize']) ? $data['totalSize'] : null;
        $this->container['usedSize'] = isset($data['usedSize']) ? $data['usedSize'] : null;
        $this->container['dataSize'] = isset($data['dataSize']) ? $data['dataSize'] : null;
        $this->container['logSize'] = isset($data['logSize']) ? $data['logSize'] : null;
        $this->container['avgDailyGrowth'] = isset($data['avgDailyGrowth']) ? $data['avgDailyGrowth'] : null;
        $this->container['lastResultTime'] = isset($data['lastResultTime']) ? $data['lastResultTime'] : null;
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
    * Gets totalSize
    *  实例总空间，以字节为单位。GaussDB(for MySQL)不会返回总空间
    *
    * @return int|null
    */
    public function getTotalSize()
    {
        return $this->container['totalSize'];
    }

    /**
    * Sets totalSize
    *
    * @param int|null $totalSize 实例总空间，以字节为单位。GaussDB(for MySQL)不会返回总空间
    *
    * @return $this
    */
    public function setTotalSize($totalSize)
    {
        $this->container['totalSize'] = $totalSize;
        return $this;
    }

    /**
    * Gets usedSize
    *  已使用空间，以字节为单位
    *
    * @return int|null
    */
    public function getUsedSize()
    {
        return $this->container['usedSize'];
    }

    /**
    * Sets usedSize
    *
    * @param int|null $usedSize 已使用空间，以字节为单位
    *
    * @return $this
    */
    public function setUsedSize($usedSize)
    {
        $this->container['usedSize'] = $usedSize;
        return $this;
    }

    /**
    * Gets dataSize
    *  数据空间，以字节为单位
    *
    * @return int|null
    */
    public function getDataSize()
    {
        return $this->container['dataSize'];
    }

    /**
    * Sets dataSize
    *
    * @param int|null $dataSize 数据空间，以字节为单位
    *
    * @return $this
    */
    public function setDataSize($dataSize)
    {
        $this->container['dataSize'] = $dataSize;
        return $this;
    }

    /**
    * Gets logSize
    *  日志空间，以字节为单位
    *
    * @return int|null
    */
    public function getLogSize()
    {
        return $this->container['logSize'];
    }

    /**
    * Sets logSize
    *
    * @param int|null $logSize 日志空间，以字节为单位
    *
    * @return $this
    */
    public function setLogSize($logSize)
    {
        $this->container['logSize'] = $logSize;
        return $this;
    }

    /**
    * Gets avgDailyGrowth
    *  近七日的数据平均日增长量，以字节为单位
    *
    * @return int|null
    */
    public function getAvgDailyGrowth()
    {
        return $this->container['avgDailyGrowth'];
    }

    /**
    * Sets avgDailyGrowth
    *
    * @param int|null $avgDailyGrowth 近七日的数据平均日增长量，以字节为单位
    *
    * @return $this
    */
    public function setAvgDailyGrowth($avgDailyGrowth)
    {
        $this->container['avgDailyGrowth'] = $avgDailyGrowth;
        return $this;
    }

    /**
    * Gets lastResultTime
    *  最后一次分析的结果时间，毫秒单位时间戳
    *
    * @return int|null
    */
    public function getLastResultTime()
    {
        return $this->container['lastResultTime'];
    }

    /**
    * Sets lastResultTime
    *
    * @param int|null $lastResultTime 最后一次分析的结果时间，毫秒单位时间戳
    *
    * @return $this
    */
    public function setLastResultTime($lastResultTime)
    {
        $this->container['lastResultTime'] = $lastResultTime;
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

