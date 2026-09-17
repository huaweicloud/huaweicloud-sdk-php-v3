<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIndexUsageTrendResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIndexUsageTrendResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * trendList  趋势数量列表
    * fragmentationTrend  fragmentationTrend
    * usageTrend  usageTrend
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'trendList' => '\HuaweiCloud\SDK\Das\V3\Model\IndexUsageTrendPoint[]',
            'fragmentationTrend' => '\HuaweiCloud\SDK\Das\V3\Model\IndexUsagePercent',
            'usageTrend' => '\HuaweiCloud\SDK\Das\V3\Model\IndexUsagePercent'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * trendList  趋势数量列表
    * fragmentationTrend  fragmentationTrend
    * usageTrend  usageTrend
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'trendList' => null,
        'fragmentationTrend' => null,
        'usageTrend' => null
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
    * trendList  趋势数量列表
    * fragmentationTrend  fragmentationTrend
    * usageTrend  usageTrend
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'trendList' => 'trend_list',
            'fragmentationTrend' => 'fragmentation_trend',
            'usageTrend' => 'usage_trend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * trendList  趋势数量列表
    * fragmentationTrend  fragmentationTrend
    * usageTrend  usageTrend
    *
    * @var string[]
    */
    protected static $setters = [
            'trendList' => 'setTrendList',
            'fragmentationTrend' => 'setFragmentationTrend',
            'usageTrend' => 'setUsageTrend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * trendList  趋势数量列表
    * fragmentationTrend  fragmentationTrend
    * usageTrend  usageTrend
    *
    * @var string[]
    */
    protected static $getters = [
            'trendList' => 'getTrendList',
            'fragmentationTrend' => 'getFragmentationTrend',
            'usageTrend' => 'getUsageTrend'
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
        $this->container['trendList'] = isset($data['trendList']) ? $data['trendList'] : null;
        $this->container['fragmentationTrend'] = isset($data['fragmentationTrend']) ? $data['fragmentationTrend'] : null;
        $this->container['usageTrend'] = isset($data['usageTrend']) ? $data['usageTrend'] : null;
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
    * Gets trendList
    *  趋势数量列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\IndexUsageTrendPoint[]|null
    */
    public function getTrendList()
    {
        return $this->container['trendList'];
    }

    /**
    * Sets trendList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\IndexUsageTrendPoint[]|null $trendList 趋势数量列表
    *
    * @return $this
    */
    public function setTrendList($trendList)
    {
        $this->container['trendList'] = $trendList;
        return $this;
    }

    /**
    * Gets fragmentationTrend
    *  fragmentationTrend
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\IndexUsagePercent|null
    */
    public function getFragmentationTrend()
    {
        return $this->container['fragmentationTrend'];
    }

    /**
    * Sets fragmentationTrend
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\IndexUsagePercent|null $fragmentationTrend fragmentationTrend
    *
    * @return $this
    */
    public function setFragmentationTrend($fragmentationTrend)
    {
        $this->container['fragmentationTrend'] = $fragmentationTrend;
        return $this;
    }

    /**
    * Gets usageTrend
    *  usageTrend
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\IndexUsagePercent|null
    */
    public function getUsageTrend()
    {
        return $this->container['usageTrend'];
    }

    /**
    * Sets usageTrend
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\IndexUsagePercent|null $usageTrend usageTrend
    *
    * @return $this
    */
    public function setUsageTrend($usageTrend)
    {
        $this->container['usageTrend'] = $usageTrend;
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

