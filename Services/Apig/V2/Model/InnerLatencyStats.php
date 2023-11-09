<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InnerLatencyStats implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InnerLatencyStats';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxInnerLatency  最大网关内部延时  单位：ms
    * avgInnerLatency  平均网关内部延时  单位：ms
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxInnerLatency' => 'int',
            'avgInnerLatency' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxInnerLatency  最大网关内部延时  单位：ms
    * avgInnerLatency  平均网关内部延时  单位：ms
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxInnerLatency' => 'int32',
        'avgInnerLatency' => 'float'
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
    * maxInnerLatency  最大网关内部延时  单位：ms
    * avgInnerLatency  平均网关内部延时  单位：ms
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxInnerLatency' => 'max_inner_latency',
            'avgInnerLatency' => 'avg_inner_latency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxInnerLatency  最大网关内部延时  单位：ms
    * avgInnerLatency  平均网关内部延时  单位：ms
    *
    * @var string[]
    */
    protected static $setters = [
            'maxInnerLatency' => 'setMaxInnerLatency',
            'avgInnerLatency' => 'setAvgInnerLatency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxInnerLatency  最大网关内部延时  单位：ms
    * avgInnerLatency  平均网关内部延时  单位：ms
    *
    * @var string[]
    */
    protected static $getters = [
            'maxInnerLatency' => 'getMaxInnerLatency',
            'avgInnerLatency' => 'getAvgInnerLatency'
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
        $this->container['maxInnerLatency'] = isset($data['maxInnerLatency']) ? $data['maxInnerLatency'] : null;
        $this->container['avgInnerLatency'] = isset($data['avgInnerLatency']) ? $data['avgInnerLatency'] : null;
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
    * Gets maxInnerLatency
    *  最大网关内部延时  单位：ms
    *
    * @return int|null
    */
    public function getMaxInnerLatency()
    {
        return $this->container['maxInnerLatency'];
    }

    /**
    * Sets maxInnerLatency
    *
    * @param int|null $maxInnerLatency 最大网关内部延时  单位：ms
    *
    * @return $this
    */
    public function setMaxInnerLatency($maxInnerLatency)
    {
        $this->container['maxInnerLatency'] = $maxInnerLatency;
        return $this;
    }

    /**
    * Gets avgInnerLatency
    *  平均网关内部延时  单位：ms
    *
    * @return float|null
    */
    public function getAvgInnerLatency()
    {
        return $this->container['avgInnerLatency'];
    }

    /**
    * Sets avgInnerLatency
    *
    * @param float|null $avgInnerLatency 平均网关内部延时  单位：ms
    *
    * @return $this
    */
    public function setAvgInnerLatency($avgInnerLatency)
    {
        $this->container['avgInnerLatency'] = $avgInnerLatency;
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

