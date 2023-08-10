<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

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
    * metric  metric
    * ttl  数据的有效期，超出该有效期则自动删除该数据，单位秒，最大值604800。
    * collectTime  数据收集时间  UNIX时间戳，单位毫秒。  说明： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-3天+20秒，当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * value  指标数据的值。
    * unit  数据的单位。
    * type  数据的类型，只能是\"int\"或\"float\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metric' => '\HuaweiCloud\SDK\Ces\V1\Model\MetricInfo',
            'ttl' => 'int',
            'collectTime' => 'int',
            'value' => 'double',
            'unit' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metric  metric
    * ttl  数据的有效期，超出该有效期则自动删除该数据，单位秒，最大值604800。
    * collectTime  数据收集时间  UNIX时间戳，单位毫秒。  说明： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-3天+20秒，当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * value  指标数据的值。
    * unit  数据的单位。
    * type  数据的类型，只能是\"int\"或\"float\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metric' => null,
        'ttl' => 'int32',
        'collectTime' => 'int64',
        'value' => 'double',
        'unit' => null,
        'type' => null
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
    * metric  metric
    * ttl  数据的有效期，超出该有效期则自动删除该数据，单位秒，最大值604800。
    * collectTime  数据收集时间  UNIX时间戳，单位毫秒。  说明： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-3天+20秒，当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * value  指标数据的值。
    * unit  数据的单位。
    * type  数据的类型，只能是\"int\"或\"float\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metric' => 'metric',
            'ttl' => 'ttl',
            'collectTime' => 'collect_time',
            'value' => 'value',
            'unit' => 'unit',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metric  metric
    * ttl  数据的有效期，超出该有效期则自动删除该数据，单位秒，最大值604800。
    * collectTime  数据收集时间  UNIX时间戳，单位毫秒。  说明： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-3天+20秒，当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * value  指标数据的值。
    * unit  数据的单位。
    * type  数据的类型，只能是\"int\"或\"float\"
    *
    * @var string[]
    */
    protected static $setters = [
            'metric' => 'setMetric',
            'ttl' => 'setTtl',
            'collectTime' => 'setCollectTime',
            'value' => 'setValue',
            'unit' => 'setUnit',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metric  metric
    * ttl  数据的有效期，超出该有效期则自动删除该数据，单位秒，最大值604800。
    * collectTime  数据收集时间  UNIX时间戳，单位毫秒。  说明： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-3天+20秒，当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * value  指标数据的值。
    * unit  数据的单位。
    * type  数据的类型，只能是\"int\"或\"float\"
    *
    * @var string[]
    */
    protected static $getters = [
            'metric' => 'getMetric',
            'ttl' => 'getTtl',
            'collectTime' => 'getCollectTime',
            'value' => 'getValue',
            'unit' => 'getUnit',
            'type' => 'getType'
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
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['collectTime'] = isset($data['collectTime']) ? $data['collectTime'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
        }
            if (($this->container['ttl'] > 604800)) {
                $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 604800.";
            }
            if (($this->container['ttl'] < 1)) {
                $invalidProperties[] = "invalid value for 'ttl', must be bigger than or equal to 1.";
            }
        if ($this->container['collectTime'] === null) {
            $invalidProperties[] = "'collectTime' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 64)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
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
    * Gets metric
    *  metric
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\MetricInfo
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\MetricInfo $metric metric
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets ttl
    *  数据的有效期，超出该有效期则自动删除该数据，单位秒，最大值604800。
    *
    * @return int
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int $ttl 数据的有效期，超出该有效期则自动删除该数据，单位秒，最大值604800。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets collectTime
    *  数据收集时间  UNIX时间戳，单位毫秒。  说明： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-3天+20秒，当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
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
    * @param int $collectTime 数据收集时间  UNIX时间戳，单位毫秒。  说明： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-3天+20秒，当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    *
    * @return $this
    */
    public function setCollectTime($collectTime)
    {
        $this->container['collectTime'] = $collectTime;
        return $this;
    }

    /**
    * Gets value
    *  指标数据的值。
    *
    * @return double
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double $value 指标数据的值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets unit
    *  数据的单位。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 数据的单位。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets type
    *  数据的类型，只能是\"int\"或\"float\"
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 数据的类型，只能是\"int\"或\"float\"
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

