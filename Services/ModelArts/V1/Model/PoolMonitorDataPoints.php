<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolMonitorDataPoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolMonitor_dataPoints';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timestamp  **参数解释**：指标数据时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * unit  **参数解释**：指标数据单位。 **取值范围**：可选值如下： - Percent：百分比。 - Megabytes：兆字节。
    * statistics  **参数解释**：指标数据值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timestamp' => 'int',
            'unit' => 'string',
            'statistics' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolMonitorStatistics[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timestamp  **参数解释**：指标数据时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * unit  **参数解释**：指标数据单位。 **取值范围**：可选值如下： - Percent：百分比。 - Megabytes：兆字节。
    * statistics  **参数解释**：指标数据值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timestamp' => 'int32',
        'unit' => null,
        'statistics' => null
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
    * timestamp  **参数解释**：指标数据时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * unit  **参数解释**：指标数据单位。 **取值范围**：可选值如下： - Percent：百分比。 - Megabytes：兆字节。
    * statistics  **参数解释**：指标数据值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timestamp' => 'timestamp',
            'unit' => 'unit',
            'statistics' => 'statistics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timestamp  **参数解释**：指标数据时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * unit  **参数解释**：指标数据单位。 **取值范围**：可选值如下： - Percent：百分比。 - Megabytes：兆字节。
    * statistics  **参数解释**：指标数据值。
    *
    * @var string[]
    */
    protected static $setters = [
            'timestamp' => 'setTimestamp',
            'unit' => 'setUnit',
            'statistics' => 'setStatistics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timestamp  **参数解释**：指标数据时间戳，以毫秒为单位。 **取值范围**：不涉及。
    * unit  **参数解释**：指标数据单位。 **取值范围**：可选值如下： - Percent：百分比。 - Megabytes：兆字节。
    * statistics  **参数解释**：指标数据值。
    *
    * @var string[]
    */
    protected static $getters = [
            'timestamp' => 'getTimestamp',
            'unit' => 'getUnit',
            'statistics' => 'getStatistics'
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
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['statistics'] = isset($data['statistics']) ? $data['statistics'] : null;
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
    * Gets timestamp
    *  **参数解释**：指标数据时间戳，以毫秒为单位。 **取值范围**：不涉及。
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp **参数解释**：指标数据时间戳，以毫秒为单位。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets unit
    *  **参数解释**：指标数据单位。 **取值范围**：可选值如下： - Percent：百分比。 - Megabytes：兆字节。
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
    * @param string|null $unit **参数解释**：指标数据单位。 **取值范围**：可选值如下： - Percent：百分比。 - Megabytes：兆字节。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets statistics
    *  **参数解释**：指标数据值。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolMonitorStatistics[]|null
    */
    public function getStatistics()
    {
        return $this->container['statistics'];
    }

    /**
    * Sets statistics
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolMonitorStatistics[]|null $statistics **参数解释**：指标数据值。
    *
    * @return $this
    */
    public function setStatistics($statistics)
    {
        $this->container['statistics'] = $statistics;
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

