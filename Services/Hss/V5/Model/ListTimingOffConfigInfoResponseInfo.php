<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTimingOffConfigInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTimingOffConfigInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * weekOffList  关闭防护周期
    * timingRangeList  时间段
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'weekOffList' => 'int[]',
            'timingRangeList' => '\HuaweiCloud\SDK\Hss\V5\Model\TimingRangeConfigInfo[]',
            'totalNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * weekOffList  关闭防护周期
    * timingRangeList  时间段
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'weekOffList' => 'int32',
        'timingRangeList' => null,
        'totalNum' => 'int32'
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
    * weekOffList  关闭防护周期
    * timingRangeList  时间段
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'weekOffList' => 'week_off_list',
            'timingRangeList' => 'timing_range_list',
            'totalNum' => 'total_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * weekOffList  关闭防护周期
    * timingRangeList  时间段
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'weekOffList' => 'setWeekOffList',
            'timingRangeList' => 'setTimingRangeList',
            'totalNum' => 'setTotalNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * weekOffList  关闭防护周期
    * timingRangeList  时间段
    * totalNum  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'weekOffList' => 'getWeekOffList',
            'timingRangeList' => 'getTimingRangeList',
            'totalNum' => 'getTotalNum'
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
        $this->container['weekOffList'] = isset($data['weekOffList']) ? $data['weekOffList'] : null;
        $this->container['timingRangeList'] = isset($data['timingRangeList']) ? $data['timingRangeList'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalNum']) && ($this->container['totalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalNum', must be bigger than or equal to 0.";
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
    * Gets weekOffList
    *  关闭防护周期
    *
    * @return int[]|null
    */
    public function getWeekOffList()
    {
        return $this->container['weekOffList'];
    }

    /**
    * Sets weekOffList
    *
    * @param int[]|null $weekOffList 关闭防护周期
    *
    * @return $this
    */
    public function setWeekOffList($weekOffList)
    {
        $this->container['weekOffList'] = $weekOffList;
        return $this;
    }

    /**
    * Gets timingRangeList
    *  时间段
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\TimingRangeConfigInfo[]|null
    */
    public function getTimingRangeList()
    {
        return $this->container['timingRangeList'];
    }

    /**
    * Sets timingRangeList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\TimingRangeConfigInfo[]|null $timingRangeList 时间段
    *
    * @return $this
    */
    public function setTimingRangeList($timingRangeList)
    {
        $this->container['timingRangeList'] = $timingRangeList;
        return $this;
    }

    /**
    * Gets totalNum
    *  **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum **参数解释**: 总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
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

