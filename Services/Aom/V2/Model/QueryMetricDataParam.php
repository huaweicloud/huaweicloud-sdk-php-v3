<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryMetricDataParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryMetricDataParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metrics  指标对象列表。 取值范围 JSON数组大小不超过20
    * period  监控数据粒度。 取值范围（枚举）：60（表示粒度为1分钟），300（表示粒度为5分钟），900（表示粒度为15分钟），3600（表示粒度为1小时）。
    * statistics  统计方式。 取值范围 maximum，minimum，sum，average，sampleCount
    * timerange  timeRange用于指标查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示北京时间2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如-1.1650852300000.5，则相当于1650852000000.1650852300000.5  - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。如1650852000000.-1.5，则相当于1650852000000.1650852300000.5  - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)  约束：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metrics' => '\HuaweiCloud\SDK\Aom\V2\Model\MetricQueryMeritcParam[]',
            'period' => 'int',
            'statistics' => 'string[]',
            'timerange' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metrics  指标对象列表。 取值范围 JSON数组大小不超过20
    * period  监控数据粒度。 取值范围（枚举）：60（表示粒度为1分钟），300（表示粒度为5分钟），900（表示粒度为15分钟），3600（表示粒度为1小时）。
    * statistics  统计方式。 取值范围 maximum，minimum，sum，average，sampleCount
    * timerange  timeRange用于指标查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示北京时间2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如-1.1650852300000.5，则相当于1650852000000.1650852300000.5  - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。如1650852000000.-1.5，则相当于1650852000000.1650852300000.5  - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)  约束：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metrics' => null,
        'period' => 'int32',
        'statistics' => null,
        'timerange' => null
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
    * metrics  指标对象列表。 取值范围 JSON数组大小不超过20
    * period  监控数据粒度。 取值范围（枚举）：60（表示粒度为1分钟），300（表示粒度为5分钟），900（表示粒度为15分钟），3600（表示粒度为1小时）。
    * statistics  统计方式。 取值范围 maximum，minimum，sum，average，sampleCount
    * timerange  timeRange用于指标查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示北京时间2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如-1.1650852300000.5，则相当于1650852000000.1650852300000.5  - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。如1650852000000.-1.5，则相当于1650852000000.1650852300000.5  - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)  约束：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metrics' => 'metrics',
            'period' => 'period',
            'statistics' => 'statistics',
            'timerange' => 'timerange'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metrics  指标对象列表。 取值范围 JSON数组大小不超过20
    * period  监控数据粒度。 取值范围（枚举）：60（表示粒度为1分钟），300（表示粒度为5分钟），900（表示粒度为15分钟），3600（表示粒度为1小时）。
    * statistics  统计方式。 取值范围 maximum，minimum，sum，average，sampleCount
    * timerange  timeRange用于指标查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示北京时间2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如-1.1650852300000.5，则相当于1650852000000.1650852300000.5  - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。如1650852000000.-1.5，则相当于1650852000000.1650852300000.5  - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)  约束：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440
    *
    * @var string[]
    */
    protected static $setters = [
            'metrics' => 'setMetrics',
            'period' => 'setPeriod',
            'statistics' => 'setStatistics',
            'timerange' => 'setTimerange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metrics  指标对象列表。 取值范围 JSON数组大小不超过20
    * period  监控数据粒度。 取值范围（枚举）：60（表示粒度为1分钟），300（表示粒度为5分钟），900（表示粒度为15分钟），3600（表示粒度为1小时）。
    * statistics  统计方式。 取值范围 maximum，minimum，sum，average，sampleCount
    * timerange  timeRange用于指标查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示北京时间2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如-1.1650852300000.5，则相当于1650852000000.1650852300000.5  - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。如1650852000000.-1.5，则相当于1650852000000.1650852300000.5  - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)  约束：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440
    *
    * @var string[]
    */
    protected static $getters = [
            'metrics' => 'getMetrics',
            'period' => 'getPeriod',
            'statistics' => 'getStatistics',
            'timerange' => 'getTimerange'
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
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['timerange'] = isset($data['timerange']) ? $data['timerange'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metrics'] === null) {
            $invalidProperties[] = "'metrics' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
        if ($this->container['statistics'] === null) {
            $invalidProperties[] = "'statistics' can't be null";
        }
        if ($this->container['timerange'] === null) {
            $invalidProperties[] = "'timerange' can't be null";
        }
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
    * Gets metrics
    *  指标对象列表。 取值范围 JSON数组大小不超过20
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetricQueryMeritcParam[]
    */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
    * Sets metrics
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetricQueryMeritcParam[] $metrics 指标对象列表。 取值范围 JSON数组大小不超过20
    *
    * @return $this
    */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;
        return $this;
    }

    /**
    * Gets period
    *  监控数据粒度。 取值范围（枚举）：60（表示粒度为1分钟），300（表示粒度为5分钟），900（表示粒度为15分钟），3600（表示粒度为1小时）。
    *
    * @return int
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int $period 监控数据粒度。 取值范围（枚举）：60（表示粒度为1分钟），300（表示粒度为5分钟），900（表示粒度为15分钟），3600（表示粒度为1小时）。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets statistics
    *  统计方式。 取值范围 maximum，minimum，sum，average，sampleCount
    *
    * @return string[]
    */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
    * Sets statistics
    *
    * @param string[] $statistics 统计方式。 取值范围 maximum，minimum，sum，average，sampleCount
    *
    * @return $this
    */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;
        return $this;
    }

    /**
    * Gets timerange
    *  timeRange用于指标查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示北京时间2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如-1.1650852300000.5，则相当于1650852000000.1650852300000.5  - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。如1650852000000.-1.5，则相当于1650852000000.1650852300000.5  - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)  约束：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440
    *
    * @return string
    */
    public function getTimerange()
    {
        return $this->container['timerange'];
    }

    /**
    * Sets timerange
    *
    * @param string $timerange timeRange用于指标查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示北京时间2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如-1.1650852300000.5，则相当于1650852000000.1650852300000.5  - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。如1650852000000.-1.5，则相当于1650852000000.1650852300000.5  - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)  约束：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440
    *
    * @return $this
    */
    public function setTimerange($timerange)
    {
        $this->container['timerange'] = $timerange;
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

