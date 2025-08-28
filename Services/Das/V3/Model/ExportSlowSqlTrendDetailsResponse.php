<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportSlowSqlTrendDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportSlowSqlTrendDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * slowSqlTrendItems  慢SQL数量趋势。
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长3小时之内间隔1分钟，3小时到6小时范围内间隔5分钟，6小时到12小时范围内间隔30分钟，12小时以上间隔1小时。单位为毫秒。
    * totalCount  趋势数据总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'slowSqlTrendItems' => '\HuaweiCloud\SDK\Das\V3\Model\SlowSqlTrendItem[]',
            'intervalMillis' => 'int',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * slowSqlTrendItems  慢SQL数量趋势。
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长3小时之内间隔1分钟，3小时到6小时范围内间隔5分钟，6小时到12小时范围内间隔30分钟，12小时以上间隔1小时。单位为毫秒。
    * totalCount  趋势数据总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'slowSqlTrendItems' => null,
        'intervalMillis' => 'int64',
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
    * slowSqlTrendItems  慢SQL数量趋势。
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长3小时之内间隔1分钟，3小时到6小时范围内间隔5分钟，6小时到12小时范围内间隔30分钟，12小时以上间隔1小时。单位为毫秒。
    * totalCount  趋势数据总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'slowSqlTrendItems' => 'slow_sql_trend_items',
            'intervalMillis' => 'interval_millis',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * slowSqlTrendItems  慢SQL数量趋势。
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长3小时之内间隔1分钟，3小时到6小时范围内间隔5分钟，6小时到12小时范围内间隔30分钟，12小时以上间隔1小时。单位为毫秒。
    * totalCount  趋势数据总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'slowSqlTrendItems' => 'setSlowSqlTrendItems',
            'intervalMillis' => 'setIntervalMillis',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * slowSqlTrendItems  慢SQL数量趋势。
    * intervalMillis  返回列表两个时间点之间的时间间隔。总查询时长3小时之内间隔1分钟，3小时到6小时范围内间隔5分钟，6小时到12小时范围内间隔30分钟，12小时以上间隔1小时。单位为毫秒。
    * totalCount  趋势数据总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'slowSqlTrendItems' => 'getSlowSqlTrendItems',
            'intervalMillis' => 'getIntervalMillis',
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
        $this->container['slowSqlTrendItems'] = isset($data['slowSqlTrendItems']) ? $data['slowSqlTrendItems'] : null;
        $this->container['intervalMillis'] = isset($data['intervalMillis']) ? $data['intervalMillis'] : null;
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
    * Gets slowSqlTrendItems
    *  慢SQL数量趋势。
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowSqlTrendItem[]|null
    */
    public function getSlowSqlTrendItems()
    {
        return $this->container['slowSqlTrendItems'];
    }

    /**
    * Sets slowSqlTrendItems
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowSqlTrendItem[]|null $slowSqlTrendItems 慢SQL数量趋势。
    *
    * @return $this
    */
    public function setSlowSqlTrendItems($slowSqlTrendItems)
    {
        $this->container['slowSqlTrendItems'] = $slowSqlTrendItems;
        return $this;
    }

    /**
    * Gets intervalMillis
    *  返回列表两个时间点之间的时间间隔。总查询时长3小时之内间隔1分钟，3小时到6小时范围内间隔5分钟，6小时到12小时范围内间隔30分钟，12小时以上间隔1小时。单位为毫秒。
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
    * @param int|null $intervalMillis 返回列表两个时间点之间的时间间隔。总查询时长3小时之内间隔1分钟，3小时到6小时范围内间隔5分钟，6小时到12小时范围内间隔30分钟，12小时以上间隔1小时。单位为毫秒。
    *
    * @return $this
    */
    public function setIntervalMillis($intervalMillis)
    {
        $this->container['intervalMillis'] = $intervalMillis;
        return $this;
    }

    /**
    * Gets totalCount
    *  趋势数据总数。
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
    * @param int|null $totalCount 趋势数据总数。
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

