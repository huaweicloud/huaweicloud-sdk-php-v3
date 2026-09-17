<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDdsSlowLogTrendResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDdsSlowLogTrendResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * points  慢日志趋势数量列表
    * interval  时间间隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'points' => '\HuaweiCloud\SDK\Das\V3\Model\SlowLogPoint[]',
            'interval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * points  慢日志趋势数量列表
    * interval  时间间隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'points' => null,
        'interval' => 'int64'
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
    * points  慢日志趋势数量列表
    * interval  时间间隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'points' => 'points',
            'interval' => 'interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * points  慢日志趋势数量列表
    * interval  时间间隔
    *
    * @var string[]
    */
    protected static $setters = [
            'points' => 'setPoints',
            'interval' => 'setInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * points  慢日志趋势数量列表
    * interval  时间间隔
    *
    * @var string[]
    */
    protected static $getters = [
            'points' => 'getPoints',
            'interval' => 'getInterval'
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
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
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
    * Gets points
    *  慢日志趋势数量列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SlowLogPoint[]|null
    */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
    * Sets points
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SlowLogPoint[]|null $points 慢日志趋势数量列表
    *
    * @return $this
    */
    public function setPoints($points)
    {
        $this->container['points'] = $points;
        return $this;
    }

    /**
    * Gets interval
    *  时间间隔
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
    * @param int|null $interval 时间间隔
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
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

