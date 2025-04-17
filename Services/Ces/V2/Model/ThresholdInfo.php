<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ThresholdInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ThresholdInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * threshold  监控视图辅助线的阈值
    * thresholdColor  监控视图辅助线的颜色,\"#B50E65\"紫色,\"#F23030\"红色,\"#FF8800\"橙色,\"#F2E70C\"黄色
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'threshold' => 'float',
            'thresholdColor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * threshold  监控视图辅助线的阈值
    * thresholdColor  监控视图辅助线的颜色,\"#B50E65\"紫色,\"#F23030\"红色,\"#FF8800\"橙色,\"#F2E70C\"黄色
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'threshold' => null,
        'thresholdColor' => null
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
    * threshold  监控视图辅助线的阈值
    * thresholdColor  监控视图辅助线的颜色,\"#B50E65\"紫色,\"#F23030\"红色,\"#FF8800\"橙色,\"#F2E70C\"黄色
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'threshold' => 'threshold',
            'thresholdColor' => 'threshold_color'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * threshold  监控视图辅助线的阈值
    * thresholdColor  监控视图辅助线的颜色,\"#B50E65\"紫色,\"#F23030\"红色,\"#FF8800\"橙色,\"#F2E70C\"黄色
    *
    * @var string[]
    */
    protected static $setters = [
            'threshold' => 'setThreshold',
            'thresholdColor' => 'setThresholdColor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * threshold  监控视图辅助线的阈值
    * thresholdColor  监控视图辅助线的颜色,\"#B50E65\"紫色,\"#F23030\"红色,\"#FF8800\"橙色,\"#F2E70C\"黄色
    *
    * @var string[]
    */
    protected static $getters = [
            'threshold' => 'getThreshold',
            'thresholdColor' => 'getThresholdColor'
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
    const THRESHOLD_COLOR_B50_E65 = '#B50E65';
    const THRESHOLD_COLOR_F23030 = '#F23030';
    const THRESHOLD_COLOR_FF8800 = '#FF8800';
    const THRESHOLD_COLOR_F2_E70_C = '#F2E70C';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getThresholdColorAllowableValues()
    {
        return [
            self::THRESHOLD_COLOR_B50_E65,
            self::THRESHOLD_COLOR_F23030,
            self::THRESHOLD_COLOR_FF8800,
            self::THRESHOLD_COLOR_F2_E70_C,
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
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['thresholdColor'] = isset($data['thresholdColor']) ? $data['thresholdColor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['threshold'] === null) {
            $invalidProperties[] = "'threshold' can't be null";
        }
            if (($this->container['threshold'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['threshold'] < 0)) {
                $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 0.";
            }
        if ($this->container['thresholdColor'] === null) {
            $invalidProperties[] = "'thresholdColor' can't be null";
        }
            $allowedValues = $this->getThresholdColorAllowableValues();
                if (!is_null($this->container['thresholdColor']) && !in_array($this->container['thresholdColor'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'thresholdColor', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets threshold
    *  监控视图辅助线的阈值
    *
    * @return float
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param float $threshold 监控视图辅助线的阈值
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets thresholdColor
    *  监控视图辅助线的颜色,\"#B50E65\"紫色,\"#F23030\"红色,\"#FF8800\"橙色,\"#F2E70C\"黄色
    *
    * @return string
    */
    public function getThresholdColor()
    {
        return $this->container['thresholdColor'];
    }

    /**
    * Sets thresholdColor
    *
    * @param string $thresholdColor 监控视图辅助线的颜色,\"#B50E65\"紫色,\"#F23030\"红色,\"#FF8800\"橙色,\"#F2E70C\"黄色
    *
    * @return $this
    */
    public function setThresholdColor($thresholdColor)
    {
        $this->container['thresholdColor'] = $thresholdColor;
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

