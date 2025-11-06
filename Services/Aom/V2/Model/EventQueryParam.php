<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventQueryParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventQueryParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeRange  查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  例如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示GMT+8 2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式如下：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。例如-1.1650852300000.5，则相当于1650852000000.1650852300000.5。 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间。如果计算出的结束时间大于当前系统时间,则使用当前系统时间。例如1650852000000.-1.5，则相当于1650852000000.1650852300000.5。 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。  约束与限制：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * step  统计步长。毫秒数，例如一分钟则填写为60000。最小值为1分钟。
    * search  模糊查询匹配字段，可以为空。如果值不为空，可以模糊匹配metadata字段中的必选字段的值。
    * sort  sort
    * metadataRelation  查询条件组合，可以为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeRange' => 'string',
            'step' => 'int',
            'search' => 'string',
            'sort' => '\HuaweiCloud\SDK\Aom\V2\Model\EventQueryParamSort',
            'metadataRelation' => '\HuaweiCloud\SDK\Aom\V2\Model\RelationModel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeRange  查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  例如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示GMT+8 2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式如下：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。例如-1.1650852300000.5，则相当于1650852000000.1650852300000.5。 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间。如果计算出的结束时间大于当前系统时间,则使用当前系统时间。例如1650852000000.-1.5，则相当于1650852000000.1650852300000.5。 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。  约束与限制：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * step  统计步长。毫秒数，例如一分钟则填写为60000。最小值为1分钟。
    * search  模糊查询匹配字段，可以为空。如果值不为空，可以模糊匹配metadata字段中的必选字段的值。
    * sort  sort
    * metadataRelation  查询条件组合，可以为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeRange' => null,
        'step' => 'int64',
        'search' => null,
        'sort' => null,
        'metadataRelation' => null
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
    * timeRange  查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  例如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示GMT+8 2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式如下：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。例如-1.1650852300000.5，则相当于1650852000000.1650852300000.5。 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间。如果计算出的结束时间大于当前系统时间,则使用当前系统时间。例如1650852000000.-1.5，则相当于1650852000000.1650852300000.5。 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。  约束与限制：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * step  统计步长。毫秒数，例如一分钟则填写为60000。最小值为1分钟。
    * search  模糊查询匹配字段，可以为空。如果值不为空，可以模糊匹配metadata字段中的必选字段的值。
    * sort  sort
    * metadataRelation  查询条件组合，可以为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeRange' => 'time_range',
            'step' => 'step',
            'search' => 'search',
            'sort' => 'sort',
            'metadataRelation' => 'metadata_relation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeRange  查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  例如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示GMT+8 2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式如下：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。例如-1.1650852300000.5，则相当于1650852000000.1650852300000.5。 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间。如果计算出的结束时间大于当前系统时间,则使用当前系统时间。例如1650852000000.-1.5，则相当于1650852000000.1650852300000.5。 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。  约束与限制：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * step  统计步长。毫秒数，例如一分钟则填写为60000。最小值为1分钟。
    * search  模糊查询匹配字段，可以为空。如果值不为空，可以模糊匹配metadata字段中的必选字段的值。
    * sort  sort
    * metadataRelation  查询条件组合，可以为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'timeRange' => 'setTimeRange',
            'step' => 'setStep',
            'search' => 'setSearch',
            'sort' => 'setSort',
            'metadataRelation' => 'setMetadataRelation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeRange  查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  例如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示GMT+8 2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式如下：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。例如-1.1650852300000.5，则相当于1650852000000.1650852300000.5。 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间。如果计算出的结束时间大于当前系统时间,则使用当前系统时间。例如1650852000000.-1.5，则相当于1650852000000.1650852300000.5。 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。  约束与限制：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    * step  统计步长。毫秒数，例如一分钟则填写为60000。最小值为1分钟。
    * search  模糊查询匹配字段，可以为空。如果值不为空，可以模糊匹配metadata字段中的必选字段的值。
    * sort  sort
    * metadataRelation  查询条件组合，可以为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'timeRange' => 'getTimeRange',
            'step' => 'getStep',
            'search' => 'getSearch',
            'sort' => 'getSort',
            'metadataRelation' => 'getMetadataRelation'
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
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['metadataRelation'] = isset($data['metadataRelation']) ? $data['metadataRelation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['timeRange'] === null) {
            $invalidProperties[] = "'timeRange' can't be null";
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
    * Gets timeRange
    *  查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  例如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示GMT+8 2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式如下：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。例如-1.1650852300000.5，则相当于1650852000000.1650852300000.5。 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间。如果计算出的结束时间大于当前系统时间,则使用当前系统时间。例如1650852000000.-1.5，则相当于1650852000000.1650852300000.5。 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。  约束与限制：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    *
    * @return string
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param string $timeRange 查询时间范围，主要用于解决客户端时间和服务端时间不一致情况下，查询最近N分钟的数据。另可用于精确查询某一段时间的数据。  例如：  - -1.-1.60(表示最近60分钟)，不管当前客户端是什么时间，都以服务端时间为准查询最近60分钟。  - 1650852000000.1650852300000.5(表示GMT+8 2022-04-25 10:00:00至2022-04-25 10:05:00指定的5分钟)  格式如下：  startTimeInMillis.endTimeInMillis.durationInMinutes  参数解释：  - startTimeInMillis: 查询的开始时间，格式为UTC毫秒，如果指定为-1，服务端将按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。例如-1.1650852300000.5，则相当于1650852000000.1650852300000.5。 - endTimeInMillis: 查询的结束时间，格式为UTC毫秒，如果指定为-1，服务端将按(startTimeInMillis + durationInMinutes * 60 * 1000)计算结束时间。如果计算出的结束时间大于当前系统时间,则使用当前系统时间。例如1650852000000.-1.5，则相当于1650852000000.1650852300000.5。 - durationInMinutes：查询时间的跨度分钟数。 取值范围大于0并且大于等于(endTimeInMillis - startTimeInMillis) / (60 * 1000) - 1。当开始时间与结束时间都设置为-1时，系统会将结束时间设置为当前时间UTC毫秒值，并按(endTimeInMillis - durationInMinutes * 60 * 1000)计算开始时间。如：-1.-1.60(表示最近60分钟)。  约束与限制：  单次请求中，查询时长与周期需要满足以下条件: durationInMinutes * 60 / period <= 1440。
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets step
    *  统计步长。毫秒数，例如一分钟则填写为60000。最小值为1分钟。
    *
    * @return int|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param int|null $step 统计步长。毫秒数，例如一分钟则填写为60000。最小值为1分钟。
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
        return $this;
    }

    /**
    * Gets search
    *  模糊查询匹配字段，可以为空。如果值不为空，可以模糊匹配metadata字段中的必选字段的值。
    *
    * @return string|null
    */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
    * Sets search
    *
    * @param string|null $search 模糊查询匹配字段，可以为空。如果值不为空，可以模糊匹配metadata字段中的必选字段的值。
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets sort
    *  sort
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\EventQueryParamSort|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\EventQueryParamSort|null $sort sort
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets metadataRelation
    *  查询条件组合，可以为空。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\RelationModel[]|null
    */
    public function getMetadataRelation()
    {
        return $this->container['metadataRelation'];
    }

    /**
    * Sets metadataRelation
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\RelationModel[]|null $metadataRelation 查询条件组合，可以为空。
    *
    * @return $this
    */
    public function setMetadataRelation($metadataRelation)
    {
        $this->container['metadataRelation'] = $metadataRelation;
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

