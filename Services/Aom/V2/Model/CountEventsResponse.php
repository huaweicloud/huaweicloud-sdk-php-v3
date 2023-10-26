<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CountEventsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CountEventsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * step  统计步长。毫秒数，例如一分钟则填写为60000。
    * timestamps  统计结果对应的时间序列。
    * series  事件或者告警不同级别相同时间序列对应的统计结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'step' => 'int',
            'timestamps' => 'int[]',
            'series' => '\HuaweiCloud\SDK\Aom\V2\Model\EventSeries[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * step  统计步长。毫秒数，例如一分钟则填写为60000。
    * timestamps  统计结果对应的时间序列。
    * series  事件或者告警不同级别相同时间序列对应的统计结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'step' => 'int64',
        'timestamps' => 'int64',
        'series' => null
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
    * step  统计步长。毫秒数，例如一分钟则填写为60000。
    * timestamps  统计结果对应的时间序列。
    * series  事件或者告警不同级别相同时间序列对应的统计结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'step' => 'step',
            'timestamps' => 'timestamps',
            'series' => 'series'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * step  统计步长。毫秒数，例如一分钟则填写为60000。
    * timestamps  统计结果对应的时间序列。
    * series  事件或者告警不同级别相同时间序列对应的统计结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'step' => 'setStep',
            'timestamps' => 'setTimestamps',
            'series' => 'setSeries'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * step  统计步长。毫秒数，例如一分钟则填写为60000。
    * timestamps  统计结果对应的时间序列。
    * series  事件或者告警不同级别相同时间序列对应的统计结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'step' => 'getStep',
            'timestamps' => 'getTimestamps',
            'series' => 'getSeries'
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
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['timestamps'] = isset($data['timestamps']) ? $data['timestamps'] : null;
        $this->container['series'] = isset($data['series']) ? $data['series'] : null;
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
    * Gets step
    *  统计步长。毫秒数，例如一分钟则填写为60000。
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
    * @param int|null $step 统计步长。毫秒数，例如一分钟则填写为60000。
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
        return $this;
    }

    /**
    * Gets timestamps
    *  统计结果对应的时间序列。
    *
    * @return int[]|null
    */
    public function getTimestamps()
    {
        return $this->container['timestamps'];
    }

    /**
    * Sets timestamps
    *
    * @param int[]|null $timestamps 统计结果对应的时间序列。
    *
    * @return $this
    */
    public function setTimestamps($timestamps)
    {
        $this->container['timestamps'] = $timestamps;
        return $this;
    }

    /**
    * Gets series
    *  事件或者告警不同级别相同时间序列对应的统计结果。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\EventSeries[]|null
    */
    public function getSeries()
    {
        return $this->container['series'];
    }

    /**
    * Sets series
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\EventSeries[]|null $series 事件或者告警不同级别相同时间序列对应的统计结果。
    *
    * @return $this
    */
    public function setSeries($series)
    {
        $this->container['series'] = $series;
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

