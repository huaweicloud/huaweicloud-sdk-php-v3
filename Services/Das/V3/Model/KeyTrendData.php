<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeyTrendData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeyTrendData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  key名称
    * statType  统计维度。size/storage/qps/traffic
    * interval  时间粒度（毫秒）
    * trendList  趋势数据点列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'statType' => 'string',
            'interval' => 'int',
            'trendList' => '\HuaweiCloud\SDK\Das\V3\Model\TrendPoint[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  key名称
    * statType  统计维度。size/storage/qps/traffic
    * interval  时间粒度（毫秒）
    * trendList  趋势数据点列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'statType' => null,
        'interval' => 'int64',
        'trendList' => null
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
    * name  key名称
    * statType  统计维度。size/storage/qps/traffic
    * interval  时间粒度（毫秒）
    * trendList  趋势数据点列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'statType' => 'stat_type',
            'interval' => 'interval',
            'trendList' => 'trend_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  key名称
    * statType  统计维度。size/storage/qps/traffic
    * interval  时间粒度（毫秒）
    * trendList  趋势数据点列表
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'statType' => 'setStatType',
            'interval' => 'setInterval',
            'trendList' => 'setTrendList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  key名称
    * statType  统计维度。size/storage/qps/traffic
    * interval  时间粒度（毫秒）
    * trendList  趋势数据点列表
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'statType' => 'getStatType',
            'interval' => 'getInterval',
            'trendList' => 'getTrendList'
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
    const STAT_TYPE_SIZE = 'size';
    const STAT_TYPE_STORAGE = 'storage';
    const STAT_TYPE_QPS = 'qps';
    const STAT_TYPE_TRAFFIC = 'traffic';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatTypeAllowableValues()
    {
        return [
            self::STAT_TYPE_SIZE,
            self::STAT_TYPE_STORAGE,
            self::STAT_TYPE_QPS,
            self::STAT_TYPE_TRAFFIC,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['trendList'] = isset($data['trendList']) ? $data['trendList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatTypeAllowableValues();
                if (!is_null($this->container['statType']) && !in_array($this->container['statType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['interval']) && ($this->container['interval'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'interval', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['interval']) && ($this->container['interval'] < 1)) {
                $invalidProperties[] = "invalid value for 'interval', must be bigger than or equal to 1.";
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
    * Gets name
    *  key名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name key名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets statType
    *  统计维度。size/storage/qps/traffic
    *
    * @return string|null
    */
    public function getStatType()
    {
        return $this->container['statType'];
    }

    /**
    * Sets statType
    *
    * @param string|null $statType 统计维度。size/storage/qps/traffic
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
        return $this;
    }

    /**
    * Gets interval
    *  时间粒度（毫秒）
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval 时间粒度（毫秒）
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets trendList
    *  趋势数据点列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\TrendPoint[]|null
    */
    public function getTrendList()
    {
        return $this->container['trendList'];
    }

    /**
    * Sets trendList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\TrendPoint[]|null $trendList 趋势数据点列表
    *
    * @return $this
    */
    public function setTrendList($trendList)
    {
        $this->container['trendList'] = $trendList;
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

