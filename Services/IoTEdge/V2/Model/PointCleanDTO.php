<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PointCleanDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PointCleanDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * silentWindow  静默时间窗口，在该时间窗口内，没有触发上报条件，点位将不会上
    * deviation  偏差，在该偏差范围内表示是正常波动，点位将不进行上报
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'silentWindow' => 'int',
            'deviation' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * silentWindow  静默时间窗口，在该时间窗口内，没有触发上报条件，点位将不会上
    * deviation  偏差，在该偏差范围内表示是正常波动，点位将不进行上报
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'silentWindow' => 'int32',
        'deviation' => 'double'
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
    * silentWindow  静默时间窗口，在该时间窗口内，没有触发上报条件，点位将不会上
    * deviation  偏差，在该偏差范围内表示是正常波动，点位将不进行上报
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'silentWindow' => 'silent_window',
            'deviation' => 'deviation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * silentWindow  静默时间窗口，在该时间窗口内，没有触发上报条件，点位将不会上
    * deviation  偏差，在该偏差范围内表示是正常波动，点位将不进行上报
    *
    * @var string[]
    */
    protected static $setters = [
            'silentWindow' => 'setSilentWindow',
            'deviation' => 'setDeviation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * silentWindow  静默时间窗口，在该时间窗口内，没有触发上报条件，点位将不会上
    * deviation  偏差，在该偏差范围内表示是正常波动，点位将不进行上报
    *
    * @var string[]
    */
    protected static $getters = [
            'silentWindow' => 'getSilentWindow',
            'deviation' => 'getDeviation'
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
        $this->container['silentWindow'] = isset($data['silentWindow']) ? $data['silentWindow'] : null;
        $this->container['deviation'] = isset($data['deviation']) ? $data['deviation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['silentWindow'] === null) {
            $invalidProperties[] = "'silentWindow' can't be null";
        }
            if (($this->container['silentWindow'] > 86400)) {
                $invalidProperties[] = "invalid value for 'silentWindow', must be smaller than or equal to 86400.";
            }
            if (($this->container['silentWindow'] < 0)) {
                $invalidProperties[] = "invalid value for 'silentWindow', must be bigger than or equal to 0.";
            }
        if ($this->container['deviation'] === null) {
            $invalidProperties[] = "'deviation' can't be null";
        }
            if (($this->container['deviation'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'deviation', must be smaller than or equal to 1E+2.";
            }
            if (($this->container['deviation'] < 0)) {
                $invalidProperties[] = "invalid value for 'deviation', must be bigger than or equal to 0.";
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
    * Gets silentWindow
    *  静默时间窗口，在该时间窗口内，没有触发上报条件，点位将不会上
    *
    * @return int
    */
    public function getSilentWindow()
    {
        return $this->container['silentWindow'];
    }

    /**
    * Sets silentWindow
    *
    * @param int $silentWindow 静默时间窗口，在该时间窗口内，没有触发上报条件，点位将不会上
    *
    * @return $this
    */
    public function setSilentWindow($silentWindow)
    {
        $this->container['silentWindow'] = $silentWindow;
        return $this;
    }

    /**
    * Gets deviation
    *  偏差，在该偏差范围内表示是正常波动，点位将不进行上报
    *
    * @return double
    */
    public function getDeviation()
    {
        return $this->container['deviation'];
    }

    /**
    * Sets deviation
    *
    * @param double $deviation 偏差，在该偏差范围内表示是正常波动，点位将不进行上报
    *
    * @return $this
    */
    public function setDeviation($deviation)
    {
        $this->container['deviation'] = $deviation;
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

