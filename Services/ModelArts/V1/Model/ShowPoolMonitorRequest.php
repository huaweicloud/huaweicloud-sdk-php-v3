<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPoolMonitorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPoolMonitorRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * poolName  **参数解释**：资源池的ID，取值自资源池详情的metadata.name字段。 **约束限制**：不涉及。 **取值范围**：只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **默认取值**：不涉及。
    * timeRange  **参数解释**：查询资源池监控信息的时间范围，格式为startTimeInMillis.endTimeInMillis.durationInMinutes。其中，startTimeInMillis表示查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。endTimeInMillis表示查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。durationInMinutes表示查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。 **约束限制**：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。 **取值范围**：不涉及。 **默认取值**：-1.-1.60。  查询时间范围，默认值“-1.-1.60”。格式为startTimeInMillis.endTimeInMillis.durationInMinutes，参数解释： - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1 当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)约束：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * statistics  **参数解释**：资源池监控信息在指定时间粒度下的统计方式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - maximum：最大值统计，默认值。 - minimum：最小值统计。 - sum：求和统计。 - average：平均值统计。 - sampleCount：采样统计。 **默认取值**：maximum。
    * period  **参数解释**：查询资源池监控信息的时间粒度，以秒为单位。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 60：粒度为1分钟，默认值。 - 300：粒度为5分钟。 - 900：粒度为15分钟。 - 3600：粒度为1小时。 **默认取值**：60。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'poolName' => 'string',
            'timeRange' => 'string',
            'statistics' => 'string',
            'period' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * poolName  **参数解释**：资源池的ID，取值自资源池详情的metadata.name字段。 **约束限制**：不涉及。 **取值范围**：只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **默认取值**：不涉及。
    * timeRange  **参数解释**：查询资源池监控信息的时间范围，格式为startTimeInMillis.endTimeInMillis.durationInMinutes。其中，startTimeInMillis表示查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。endTimeInMillis表示查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。durationInMinutes表示查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。 **约束限制**：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。 **取值范围**：不涉及。 **默认取值**：-1.-1.60。  查询时间范围，默认值“-1.-1.60”。格式为startTimeInMillis.endTimeInMillis.durationInMinutes，参数解释： - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1 当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)约束：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * statistics  **参数解释**：资源池监控信息在指定时间粒度下的统计方式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - maximum：最大值统计，默认值。 - minimum：最小值统计。 - sum：求和统计。 - average：平均值统计。 - sampleCount：采样统计。 **默认取值**：maximum。
    * period  **参数解释**：查询资源池监控信息的时间粒度，以秒为单位。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 60：粒度为1分钟，默认值。 - 300：粒度为5分钟。 - 900：粒度为15分钟。 - 3600：粒度为1小时。 **默认取值**：60。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'poolName' => null,
        'timeRange' => null,
        'statistics' => null,
        'period' => null
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
    * poolName  **参数解释**：资源池的ID，取值自资源池详情的metadata.name字段。 **约束限制**：不涉及。 **取值范围**：只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **默认取值**：不涉及。
    * timeRange  **参数解释**：查询资源池监控信息的时间范围，格式为startTimeInMillis.endTimeInMillis.durationInMinutes。其中，startTimeInMillis表示查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。endTimeInMillis表示查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。durationInMinutes表示查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。 **约束限制**：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。 **取值范围**：不涉及。 **默认取值**：-1.-1.60。  查询时间范围，默认值“-1.-1.60”。格式为startTimeInMillis.endTimeInMillis.durationInMinutes，参数解释： - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1 当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)约束：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * statistics  **参数解释**：资源池监控信息在指定时间粒度下的统计方式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - maximum：最大值统计，默认值。 - minimum：最小值统计。 - sum：求和统计。 - average：平均值统计。 - sampleCount：采样统计。 **默认取值**：maximum。
    * period  **参数解释**：查询资源池监控信息的时间粒度，以秒为单位。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 60：粒度为1分钟，默认值。 - 300：粒度为5分钟。 - 900：粒度为15分钟。 - 3600：粒度为1小时。 **默认取值**：60。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'poolName' => 'pool_name',
            'timeRange' => 'time_range',
            'statistics' => 'statistics',
            'period' => 'period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * poolName  **参数解释**：资源池的ID，取值自资源池详情的metadata.name字段。 **约束限制**：不涉及。 **取值范围**：只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **默认取值**：不涉及。
    * timeRange  **参数解释**：查询资源池监控信息的时间范围，格式为startTimeInMillis.endTimeInMillis.durationInMinutes。其中，startTimeInMillis表示查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。endTimeInMillis表示查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。durationInMinutes表示查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。 **约束限制**：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。 **取值范围**：不涉及。 **默认取值**：-1.-1.60。  查询时间范围，默认值“-1.-1.60”。格式为startTimeInMillis.endTimeInMillis.durationInMinutes，参数解释： - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1 当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)约束：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * statistics  **参数解释**：资源池监控信息在指定时间粒度下的统计方式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - maximum：最大值统计，默认值。 - minimum：最小值统计。 - sum：求和统计。 - average：平均值统计。 - sampleCount：采样统计。 **默认取值**：maximum。
    * period  **参数解释**：查询资源池监控信息的时间粒度，以秒为单位。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 60：粒度为1分钟，默认值。 - 300：粒度为5分钟。 - 900：粒度为15分钟。 - 3600：粒度为1小时。 **默认取值**：60。
    *
    * @var string[]
    */
    protected static $setters = [
            'poolName' => 'setPoolName',
            'timeRange' => 'setTimeRange',
            'statistics' => 'setStatistics',
            'period' => 'setPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * poolName  **参数解释**：资源池的ID，取值自资源池详情的metadata.name字段。 **约束限制**：不涉及。 **取值范围**：只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **默认取值**：不涉及。
    * timeRange  **参数解释**：查询资源池监控信息的时间范围，格式为startTimeInMillis.endTimeInMillis.durationInMinutes。其中，startTimeInMillis表示查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。endTimeInMillis表示查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。durationInMinutes表示查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。 **约束限制**：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。 **取值范围**：不涉及。 **默认取值**：-1.-1.60。  查询时间范围，默认值“-1.-1.60”。格式为startTimeInMillis.endTimeInMillis.durationInMinutes，参数解释： - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1 当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)约束：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * statistics  **参数解释**：资源池监控信息在指定时间粒度下的统计方式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - maximum：最大值统计，默认值。 - minimum：最小值统计。 - sum：求和统计。 - average：平均值统计。 - sampleCount：采样统计。 **默认取值**：maximum。
    * period  **参数解释**：查询资源池监控信息的时间粒度，以秒为单位。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 60：粒度为1分钟，默认值。 - 300：粒度为5分钟。 - 900：粒度为15分钟。 - 3600：粒度为1小时。 **默认取值**：60。
    *
    * @var string[]
    */
    protected static $getters = [
            'poolName' => 'getPoolName',
            'timeRange' => 'getTimeRange',
            'statistics' => 'getStatistics',
            'period' => 'getPeriod'
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
        $this->container['poolName'] = isset($data['poolName']) ? $data['poolName'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['poolName'] === null) {
            $invalidProperties[] = "'poolName' can't be null";
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
    * Gets poolName
    *  **参数解释**：资源池的ID，取值自资源池详情的metadata.name字段。 **约束限制**：不涉及。 **取值范围**：只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getPoolName()
    {
        return $this->container['poolName'];
    }

    /**
    * Sets poolName
    *
    * @param string $poolName **参数解释**：资源池的ID，取值自资源池详情的metadata.name字段。 **约束限制**：不涉及。 **取值范围**：只能以小写字母开头，数字、中划线组成，不能以中划线结尾，且长度为[36-63]个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPoolName($poolName)
    {
        $this->container['poolName'] = $poolName;
        return $this;
    }

    /**
    * Gets timeRange
    *  **参数解释**：查询资源池监控信息的时间范围，格式为startTimeInMillis.endTimeInMillis.durationInMinutes。其中，startTimeInMillis表示查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。endTimeInMillis表示查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。durationInMinutes表示查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。 **约束限制**：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。 **取值范围**：不涉及。 **默认取值**：-1.-1.60。  查询时间范围，默认值“-1.-1.60”。格式为startTimeInMillis.endTimeInMillis.durationInMinutes，参数解释： - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1 当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)约束：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    *
    * @return string|null
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param string|null $timeRange **参数解释**：查询资源池监控信息的时间范围，格式为startTimeInMillis.endTimeInMillis.durationInMinutes。其中，startTimeInMillis表示查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。endTimeInMillis表示查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间。durationInMinutes表示查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。 **约束限制**：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。 **取值范围**：不涉及。 **默认取值**：-1.-1.60。  查询时间范围，默认值“-1.-1.60”。格式为startTimeInMillis.endTimeInMillis.durationInMinutes，参数解释： - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间，如果计算出的结束时间大于当前系统时间，则使用当前系统时间 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且小于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1 当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)约束：单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets statistics
    *  **参数解释**：资源池监控信息在指定时间粒度下的统计方式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - maximum：最大值统计，默认值。 - minimum：最小值统计。 - sum：求和统计。 - average：平均值统计。 - sampleCount：采样统计。 **默认取值**：maximum。
    *
    * @return string|null
    */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
    * Sets statistics
    *
    * @param string|null $statistics **参数解释**：资源池监控信息在指定时间粒度下的统计方式。 **约束限制**：不涉及。 **取值范围**：可选值如下： - maximum：最大值统计，默认值。 - minimum：最小值统计。 - sum：求和统计。 - average：平均值统计。 - sampleCount：采样统计。 **默认取值**：maximum。
    *
    * @return $this
    */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;
        return $this;
    }

    /**
    * Gets period
    *  **参数解释**：查询资源池监控信息的时间粒度，以秒为单位。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 60：粒度为1分钟，默认值。 - 300：粒度为5分钟。 - 900：粒度为15分钟。 - 3600：粒度为1小时。 **默认取值**：60。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period **参数解释**：查询资源池监控信息的时间粒度，以秒为单位。 **约束限制**：不涉及。 **取值范围**：可选值如下： - 60：粒度为1分钟，默认值。 - 300：粒度为5分钟。 - 900：粒度为15分钟。 - 3600：粒度为1小时。 **默认取值**：60。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
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

