<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CPUThresholdData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CPUThresholdData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpu  自定义的cpu阈值，单位为百分比(%)
    * cpuDefault  cpu阈值默认值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpu' => 'int',
            'cpuDefault' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpu  自定义的cpu阈值，单位为百分比(%)
    * cpuDefault  cpu阈值默认值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpu' => 'int32',
        'cpuDefault' => 'int32'
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
    * cpu  自定义的cpu阈值，单位为百分比(%)
    * cpuDefault  cpu阈值默认值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpu' => 'cpu',
            'cpuDefault' => 'cpuDefault'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpu  自定义的cpu阈值，单位为百分比(%)
    * cpuDefault  cpu阈值默认值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $setters = [
            'cpu' => 'setCpu',
            'cpuDefault' => 'setCpuDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpu  自定义的cpu阈值，单位为百分比(%)
    * cpuDefault  cpu阈值默认值，单位为百分比(%)
    *
    * @var string[]
    */
    protected static $getters = [
            'cpu' => 'getCpu',
            'cpuDefault' => 'getCpuDefault'
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
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['cpuDefault'] = isset($data['cpuDefault']) ? $data['cpuDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] > 100)) {
                $invalidProperties[] = "invalid value for 'cpu', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['cpu']) && ($this->container['cpu'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpu', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cpuDefault']) && ($this->container['cpuDefault'] > 100)) {
                $invalidProperties[] = "invalid value for 'cpuDefault', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['cpuDefault']) && ($this->container['cpuDefault'] < 0)) {
                $invalidProperties[] = "invalid value for 'cpuDefault', must be bigger than or equal to 0.";
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
    * Gets cpu
    *  自定义的cpu阈值，单位为百分比(%)
    *
    * @return int|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param int|null $cpu 自定义的cpu阈值，单位为百分比(%)
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets cpuDefault
    *  cpu阈值默认值，单位为百分比(%)
    *
    * @return int|null
    */
    public function getCpuDefault()
    {
        return $this->container['cpuDefault'];
    }

    /**
    * Sets cpuDefault
    *
    * @param int|null $cpuDefault cpu阈值默认值，单位为百分比(%)
    *
    * @return $this
    */
    public function setCpuDefault($cpuDefault)
    {
        $this->container['cpuDefault'] = $cpuDefault;
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

