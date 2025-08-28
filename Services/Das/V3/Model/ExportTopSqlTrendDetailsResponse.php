<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportTopSqlTrendDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportTopSqlTrendDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长一小时之内间隔10s，一小时到六小时范围内间隔60s。单位为毫秒。
    * topSqlTrendItems  SQL执行耗时区间数据。
    * totalCount  耗时区间数据总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'intervalMillis' => 'int',
            'topSqlTrendItems' => '\HuaweiCloud\SDK\Das\V3\Model\TopSqlTrendItem[]',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长一小时之内间隔10s，一小时到六小时范围内间隔60s。单位为毫秒。
    * topSqlTrendItems  SQL执行耗时区间数据。
    * totalCount  耗时区间数据总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'intervalMillis' => 'int64',
        'topSqlTrendItems' => null,
        'totalCount' => 'int32'
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
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长一小时之内间隔10s，一小时到六小时范围内间隔60s。单位为毫秒。
    * topSqlTrendItems  SQL执行耗时区间数据。
    * totalCount  耗时区间数据总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'intervalMillis' => 'interval_millis',
            'topSqlTrendItems' => 'top_sql_trend_items',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长一小时之内间隔10s，一小时到六小时范围内间隔60s。单位为毫秒。
    * topSqlTrendItems  SQL执行耗时区间数据。
    * totalCount  耗时区间数据总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'intervalMillis' => 'setIntervalMillis',
            'topSqlTrendItems' => 'setTopSqlTrendItems',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长一小时之内间隔10s，一小时到六小时范围内间隔60s。单位为毫秒。
    * topSqlTrendItems  SQL执行耗时区间数据。
    * totalCount  耗时区间数据总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'intervalMillis' => 'getIntervalMillis',
            'topSqlTrendItems' => 'getTopSqlTrendItems',
            'totalCount' => 'getTotalCount'
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
        $this->container['intervalMillis'] = isset($data['intervalMillis']) ? $data['intervalMillis'] : null;
        $this->container['topSqlTrendItems'] = isset($data['topSqlTrendItems']) ? $data['topSqlTrendItems'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets intervalMillis
    *  返回列表两个时间点之间的时间间隔。总查询时长一小时之内间隔10s，一小时到六小时范围内间隔60s。单位为毫秒。
    *
    * @return int|null
    */
    public function getIntervalMillis()
    {
        return $this->container['intervalMillis'];
    }

    /**
    * Sets intervalMillis
    *
    * @param int|null $intervalMillis 返回列表两个时间点之间的时间间隔。总查询时长一小时之内间隔10s，一小时到六小时范围内间隔60s。单位为毫秒。
    *
    * @return $this
    */
    public function setIntervalMillis($intervalMillis)
    {
        $this->container['intervalMillis'] = $intervalMillis;
        return $this;
    }

    /**
    * Gets topSqlTrendItems
    *  SQL执行耗时区间数据。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TopSqlTrendItem[]|null
    */
    public function getTopSqlTrendItems()
    {
        return $this->container['topSqlTrendItems'];
    }

    /**
    * Sets topSqlTrendItems
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TopSqlTrendItem[]|null $topSqlTrendItems SQL执行耗时区间数据。
    *
    * @return $this
    */
    public function setTopSqlTrendItems($topSqlTrendItems)
    {
        $this->container['topSqlTrendItems'] = $topSqlTrendItems;
        return $this;
    }

    /**
    * Gets totalCount
    *  耗时区间数据总数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 耗时区间数据总数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

