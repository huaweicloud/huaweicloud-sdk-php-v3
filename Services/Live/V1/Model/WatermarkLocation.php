<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WatermarkLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WatermarkLocation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * location  水印位置。  包含如下选项： - TOPLEFT：左上 - TOPRIGHT：右上 - BOTTOMLEFT：左下 - BOTTOMRIGHT：右下 - RANDOM：随机模式，图片水印将随机在视频流的左上、右上、左下、右下四个位置展示。
    * xOffset  水印相对输出视频的水平偏移量。 说明：值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表水平偏移量与输出分辨率宽的比率，范围[0，1) 百分比限制最多保留小数点后4位
    * yOffset  水印相对输出视频的垂直偏移量 说明: 值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表垂直偏移量与输出分辨率高的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'location' => 'string',
            'xOffset' => 'float',
            'yOffset' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * location  水印位置。  包含如下选项： - TOPLEFT：左上 - TOPRIGHT：右上 - BOTTOMLEFT：左下 - BOTTOMRIGHT：右下 - RANDOM：随机模式，图片水印将随机在视频流的左上、右上、左下、右下四个位置展示。
    * xOffset  水印相对输出视频的水平偏移量。 说明：值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表水平偏移量与输出分辨率宽的比率，范围[0，1) 百分比限制最多保留小数点后4位
    * yOffset  水印相对输出视频的垂直偏移量 说明: 值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表垂直偏移量与输出分辨率高的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'location' => null,
        'xOffset' => null,
        'yOffset' => null
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
    * location  水印位置。  包含如下选项： - TOPLEFT：左上 - TOPRIGHT：右上 - BOTTOMLEFT：左下 - BOTTOMRIGHT：右下 - RANDOM：随机模式，图片水印将随机在视频流的左上、右上、左下、右下四个位置展示。
    * xOffset  水印相对输出视频的水平偏移量。 说明：值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表水平偏移量与输出分辨率宽的比率，范围[0，1) 百分比限制最多保留小数点后4位
    * yOffset  水印相对输出视频的垂直偏移量 说明: 值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表垂直偏移量与输出分辨率高的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'location' => 'location',
            'xOffset' => 'x_offset',
            'yOffset' => 'y_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * location  水印位置。  包含如下选项： - TOPLEFT：左上 - TOPRIGHT：右上 - BOTTOMLEFT：左下 - BOTTOMRIGHT：右下 - RANDOM：随机模式，图片水印将随机在视频流的左上、右上、左下、右下四个位置展示。
    * xOffset  水印相对输出视频的水平偏移量。 说明：值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表水平偏移量与输出分辨率宽的比率，范围[0，1) 百分比限制最多保留小数点后4位
    * yOffset  水印相对输出视频的垂直偏移量 说明: 值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表垂直偏移量与输出分辨率高的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @var string[]
    */
    protected static $setters = [
            'location' => 'setLocation',
            'xOffset' => 'setXOffset',
            'yOffset' => 'setYOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * location  水印位置。  包含如下选项： - TOPLEFT：左上 - TOPRIGHT：右上 - BOTTOMLEFT：左下 - BOTTOMRIGHT：右下 - RANDOM：随机模式，图片水印将随机在视频流的左上、右上、左下、右下四个位置展示。
    * xOffset  水印相对输出视频的水平偏移量。 说明：值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表水平偏移量与输出分辨率宽的比率，范围[0，1) 百分比限制最多保留小数点后4位
    * yOffset  水印相对输出视频的垂直偏移量 说明: 值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表垂直偏移量与输出分辨率高的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @var string[]
    */
    protected static $getters = [
            'location' => 'getLocation',
            'xOffset' => 'getXOffset',
            'yOffset' => 'getYOffset'
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
    const LOCATION_TOPLEFT = 'TOPLEFT';
    const LOCATION_TOPRIGHT = 'TOPRIGHT';
    const LOCATION_BOTTOMLEFT = 'BOTTOMLEFT';
    const LOCATION_BOTTOMRIGHT = 'BOTTOMRIGHT';
    const LOCATION_RANDOM = 'RANDOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLocationAllowableValues()
    {
        return [
            self::LOCATION_TOPLEFT,
            self::LOCATION_TOPRIGHT,
            self::LOCATION_BOTTOMLEFT,
            self::LOCATION_BOTTOMRIGHT,
            self::LOCATION_RANDOM,
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
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['xOffset'] = isset($data['xOffset']) ? $data['xOffset'] : null;
        $this->container['yOffset'] = isset($data['yOffset']) ? $data['yOffset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLocationAllowableValues();
                if (!is_null($this->container['location']) && !in_array($this->container['location'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'location', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 255)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) < 1)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xOffset']) && ($this->container['xOffset'] > 4096)) {
                $invalidProperties[] = "invalid value for 'xOffset', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['xOffset']) && ($this->container['xOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'xOffset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['yOffset']) && ($this->container['yOffset'] > 4096)) {
                $invalidProperties[] = "invalid value for 'yOffset', must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['yOffset']) && ($this->container['yOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'yOffset', must be bigger than or equal to 0.";
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
    * Gets location
    *  水印位置。  包含如下选项： - TOPLEFT：左上 - TOPRIGHT：右上 - BOTTOMLEFT：左下 - BOTTOMRIGHT：右下 - RANDOM：随机模式，图片水印将随机在视频流的左上、右上、左下、右下四个位置展示。
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 水印位置。  包含如下选项： - TOPLEFT：左上 - TOPRIGHT：右上 - BOTTOMLEFT：左下 - BOTTOMRIGHT：右下 - RANDOM：随机模式，图片水印将随机在视频流的左上、右上、左下、右下四个位置展示。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets xOffset
    *  水印相对输出视频的水平偏移量。 说明：值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表水平偏移量与输出分辨率宽的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @return float|null
    */
    public function getXOffset()
    {
        return $this->container['xOffset'];
    }

    /**
    * Sets xOffset
    *
    * @param float|null $xOffset 水印相对输出视频的水平偏移量。 说明：值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表水平偏移量与输出分辨率宽的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @return $this
    */
    public function setXOffset($xOffset)
    {
        $this->container['xOffset'] = $xOffset;
        return $this;
    }

    /**
    * Gets yOffset
    *  水印相对输出视频的垂直偏移量 说明: 值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表垂直偏移量与输出分辨率高的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @return float|null
    */
    public function getYOffset()
    {
        return $this->container['yOffset'];
    }

    /**
    * Sets yOffset
    *
    * @param float|null $yOffset 水印相对输出视频的垂直偏移量 说明: 值有两种形式： 1）整数型代表偏移像素，范围[1，4096]，单位px。 2）小数型代表垂直偏移量与输出分辨率高的比率，范围[0，1) 百分比限制最多保留小数点后4位
    *
    * @return $this
    */
    public function setYOffset($yOffset)
    {
        $this->container['yOffset'] = $yOffset;
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

