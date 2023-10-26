<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricDataItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricDataItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectTime  数据收集时间支持过去1天和未来半小时范围内的数据上报。数据收集时间需要满足：  当前UTC时间减去collect_time小于等于24小时或者collect_time减去当前UTC时间小于等于30分钟。  若数据上报时间早于当天8点，则指标监控页面只显示当天8点后的数据。 取值范围： UNIX时间戳，单位毫秒。
    * metric  metric
    * values  指标数据的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectTime' => 'int',
            'metric' => '\HuaweiCloud\SDK\Aom\V2\Model\MetricItemInfo',
            'values' => '\HuaweiCloud\SDK\Aom\V2\Model\ValueData[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectTime  数据收集时间支持过去1天和未来半小时范围内的数据上报。数据收集时间需要满足：  当前UTC时间减去collect_time小于等于24小时或者collect_time减去当前UTC时间小于等于30分钟。  若数据上报时间早于当天8点，则指标监控页面只显示当天8点后的数据。 取值范围： UNIX时间戳，单位毫秒。
    * metric  metric
    * values  指标数据的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectTime' => 'int64',
        'metric' => null,
        'values' => null
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
    * collectTime  数据收集时间支持过去1天和未来半小时范围内的数据上报。数据收集时间需要满足：  当前UTC时间减去collect_time小于等于24小时或者collect_time减去当前UTC时间小于等于30分钟。  若数据上报时间早于当天8点，则指标监控页面只显示当天8点后的数据。 取值范围： UNIX时间戳，单位毫秒。
    * metric  metric
    * values  指标数据的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectTime' => 'collect_time',
            'metric' => 'metric',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectTime  数据收集时间支持过去1天和未来半小时范围内的数据上报。数据收集时间需要满足：  当前UTC时间减去collect_time小于等于24小时或者collect_time减去当前UTC时间小于等于30分钟。  若数据上报时间早于当天8点，则指标监控页面只显示当天8点后的数据。 取值范围： UNIX时间戳，单位毫秒。
    * metric  metric
    * values  指标数据的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'collectTime' => 'setCollectTime',
            'metric' => 'setMetric',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectTime  数据收集时间支持过去1天和未来半小时范围内的数据上报。数据收集时间需要满足：  当前UTC时间减去collect_time小于等于24小时或者collect_time减去当前UTC时间小于等于30分钟。  若数据上报时间早于当天8点，则指标监控页面只显示当天8点后的数据。 取值范围： UNIX时间戳，单位毫秒。
    * metric  metric
    * values  指标数据的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'collectTime' => 'getCollectTime',
            'metric' => 'getMetric',
            'values' => 'getValues'
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
        $this->container['collectTime'] = isset($data['collectTime']) ? $data['collectTime'] : null;
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['collectTime'] === null) {
            $invalidProperties[] = "'collectTime' can't be null";
        }
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    * Gets collectTime
    *  数据收集时间支持过去1天和未来半小时范围内的数据上报。数据收集时间需要满足：  当前UTC时间减去collect_time小于等于24小时或者collect_time减去当前UTC时间小于等于30分钟。  若数据上报时间早于当天8点，则指标监控页面只显示当天8点后的数据。 取值范围： UNIX时间戳，单位毫秒。
    *
    * @return int
    */
    public function getCollectTime()
    {
        return $this->container['collectTime'];
    }

    /**
    * Sets collectTime
    *
    * @param int $collectTime 数据收集时间支持过去1天和未来半小时范围内的数据上报。数据收集时间需要满足：  当前UTC时间减去collect_time小于等于24小时或者collect_time减去当前UTC时间小于等于30分钟。  若数据上报时间早于当天8点，则指标监控页面只显示当天8点后的数据。 取值范围： UNIX时间戳，单位毫秒。
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
        return $this;
    }

    /**
    * Gets metric
    *  metric
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\MetricItemInfo
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\MetricItemInfo $metric metric
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets values
    *  指标数据的值。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\ValueData[]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\ValueData[] $values 指标数据的值。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

