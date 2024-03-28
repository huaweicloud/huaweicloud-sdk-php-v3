<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueueScalingPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueueScalingPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * priority  策略优先级1-100，100优先级最高
    * impactStartTime  开始时间
    * impactStopTime  结束时间
    * minCu  最小cu数量
    * maxCu  最大cu数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'priority' => 'int',
            'impactStartTime' => 'string',
            'impactStopTime' => 'string',
            'minCu' => 'int',
            'maxCu' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * priority  策略优先级1-100，100优先级最高
    * impactStartTime  开始时间
    * impactStopTime  结束时间
    * minCu  最小cu数量
    * maxCu  最大cu数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'priority' => 'int32',
        'impactStartTime' => null,
        'impactStopTime' => null,
        'minCu' => 'int32',
        'maxCu' => 'int32'
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
    * priority  策略优先级1-100，100优先级最高
    * impactStartTime  开始时间
    * impactStopTime  结束时间
    * minCu  最小cu数量
    * maxCu  最大cu数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'priority' => 'priority',
            'impactStartTime' => 'impact_start_time',
            'impactStopTime' => 'impact_stop_time',
            'minCu' => 'min_cu',
            'maxCu' => 'max_cu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * priority  策略优先级1-100，100优先级最高
    * impactStartTime  开始时间
    * impactStopTime  结束时间
    * minCu  最小cu数量
    * maxCu  最大cu数量
    *
    * @var string[]
    */
    protected static $setters = [
            'priority' => 'setPriority',
            'impactStartTime' => 'setImpactStartTime',
            'impactStopTime' => 'setImpactStopTime',
            'minCu' => 'setMinCu',
            'maxCu' => 'setMaxCu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * priority  策略优先级1-100，100优先级最高
    * impactStartTime  开始时间
    * impactStopTime  结束时间
    * minCu  最小cu数量
    * maxCu  最大cu数量
    *
    * @var string[]
    */
    protected static $getters = [
            'priority' => 'getPriority',
            'impactStartTime' => 'getImpactStartTime',
            'impactStopTime' => 'getImpactStopTime',
            'minCu' => 'getMinCu',
            'maxCu' => 'getMaxCu'
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['impactStartTime'] = isset($data['impactStartTime']) ? $data['impactStartTime'] : null;
        $this->container['impactStopTime'] = isset($data['impactStopTime']) ? $data['impactStopTime'] : null;
        $this->container['minCu'] = isset($data['minCu']) ? $data['minCu'] : null;
        $this->container['maxCu'] = isset($data['maxCu']) ? $data['maxCu'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['impactStartTime'] === null) {
            $invalidProperties[] = "'impactStartTime' can't be null";
        }
        if ($this->container['impactStopTime'] === null) {
            $invalidProperties[] = "'impactStopTime' can't be null";
        }
        if ($this->container['minCu'] === null) {
            $invalidProperties[] = "'minCu' can't be null";
        }
        if ($this->container['maxCu'] === null) {
            $invalidProperties[] = "'maxCu' can't be null";
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
    * Gets priority
    *  策略优先级1-100，100优先级最高
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 策略优先级1-100，100优先级最高
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets impactStartTime
    *  开始时间
    *
    * @return string
    */
    public function getImpactStartTime()
    {
        return $this->container['impactStartTime'];
    }

    /**
    * Sets impactStartTime
    *
    * @param string $impactStartTime 开始时间
    *
    * @return $this
    */
    public function setImpactStartTime($impactStartTime)
    {
        $this->container['impactStartTime'] = $impactStartTime;
        return $this;
    }

    /**
    * Gets impactStopTime
    *  结束时间
    *
    * @return string
    */
    public function getImpactStopTime()
    {
        return $this->container['impactStopTime'];
    }

    /**
    * Sets impactStopTime
    *
    * @param string $impactStopTime 结束时间
    *
    * @return $this
    */
    public function setImpactStopTime($impactStopTime)
    {
        $this->container['impactStopTime'] = $impactStopTime;
        return $this;
    }

    /**
    * Gets minCu
    *  最小cu数量
    *
    * @return int
    */
    public function getMinCu()
    {
        return $this->container['minCu'];
    }

    /**
    * Sets minCu
    *
    * @param int $minCu 最小cu数量
    *
    * @return $this
    */
    public function setMinCu($minCu)
    {
        $this->container['minCu'] = $minCu;
        return $this;
    }

    /**
    * Gets maxCu
    *  最大cu数量
    *
    * @return int
    */
    public function getMaxCu()
    {
        return $this->container['maxCu'];
    }

    /**
    * Sets maxCu
    *
    * @param int $maxCu 最大cu数量
    *
    * @return $this
    */
    public function setMaxCu($maxCu)
    {
        $this->container['maxCu'] = $maxCu;
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

