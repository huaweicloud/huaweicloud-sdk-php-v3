<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WordWaterMarkInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WordWaterMarkInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * format  水印文字内容，必填 字幕内容1-64 type为1或2时必填，type为0时非必填
    * fontColor  参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认白色】
    * fontSize  字体大小
    * font  字体，缺省值 空，可选值：harmonyRegular（鸿蒙）、douyu2.0（斗鱼追光体）
    * timeZone  时区，【取值参考 UTC-1200 至 UTC+1200，前三位UTC，第四位+或-，五六位表示小时，七八位固定00】
    * shadowColor  缺省值 none，参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认黑色】
    * location  location
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'format' => 'string',
            'fontColor' => 'string',
            'fontSize' => 'int',
            'font' => 'string',
            'timeZone' => 'string',
            'shadowColor' => 'string',
            'location' => '\HuaweiCloud\SDK\Live\V1\Model\WatermarkLocation'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * format  水印文字内容，必填 字幕内容1-64 type为1或2时必填，type为0时非必填
    * fontColor  参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认白色】
    * fontSize  字体大小
    * font  字体，缺省值 空，可选值：harmonyRegular（鸿蒙）、douyu2.0（斗鱼追光体）
    * timeZone  时区，【取值参考 UTC-1200 至 UTC+1200，前三位UTC，第四位+或-，五六位表示小时，七八位固定00】
    * shadowColor  缺省值 none，参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认黑色】
    * location  location
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'format' => null,
        'fontColor' => null,
        'fontSize' => 'int32',
        'font' => null,
        'timeZone' => null,
        'shadowColor' => null,
        'location' => null
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
    * format  水印文字内容，必填 字幕内容1-64 type为1或2时必填，type为0时非必填
    * fontColor  参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认白色】
    * fontSize  字体大小
    * font  字体，缺省值 空，可选值：harmonyRegular（鸿蒙）、douyu2.0（斗鱼追光体）
    * timeZone  时区，【取值参考 UTC-1200 至 UTC+1200，前三位UTC，第四位+或-，五六位表示小时，七八位固定00】
    * shadowColor  缺省值 none，参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认黑色】
    * location  location
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'format' => 'format',
            'fontColor' => 'font_color',
            'fontSize' => 'font_size',
            'font' => 'font',
            'timeZone' => 'time_zone',
            'shadowColor' => 'shadow_color',
            'location' => 'location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * format  水印文字内容，必填 字幕内容1-64 type为1或2时必填，type为0时非必填
    * fontColor  参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认白色】
    * fontSize  字体大小
    * font  字体，缺省值 空，可选值：harmonyRegular（鸿蒙）、douyu2.0（斗鱼追光体）
    * timeZone  时区，【取值参考 UTC-1200 至 UTC+1200，前三位UTC，第四位+或-，五六位表示小时，七八位固定00】
    * shadowColor  缺省值 none，参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认黑色】
    * location  location
    *
    * @var string[]
    */
    protected static $setters = [
            'format' => 'setFormat',
            'fontColor' => 'setFontColor',
            'fontSize' => 'setFontSize',
            'font' => 'setFont',
            'timeZone' => 'setTimeZone',
            'shadowColor' => 'setShadowColor',
            'location' => 'setLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * format  水印文字内容，必填 字幕内容1-64 type为1或2时必填，type为0时非必填
    * fontColor  参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认白色】
    * fontSize  字体大小
    * font  字体，缺省值 空，可选值：harmonyRegular（鸿蒙）、douyu2.0（斗鱼追光体）
    * timeZone  时区，【取值参考 UTC-1200 至 UTC+1200，前三位UTC，第四位+或-，五六位表示小时，七八位固定00】
    * shadowColor  缺省值 none，参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认黑色】
    * location  location
    *
    * @var string[]
    */
    protected static $getters = [
            'format' => 'getFormat',
            'fontColor' => 'getFontColor',
            'fontSize' => 'getFontSize',
            'font' => 'getFont',
            'timeZone' => 'getTimeZone',
            'shadowColor' => 'getShadowColor',
            'location' => 'getLocation'
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
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['font'] = isset($data['font']) ? $data['font'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['shadowColor'] = isset($data['shadowColor']) ? $data['shadowColor'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
            if ((mb_strlen($this->container['format']) > 64)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['format']) < 1)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) > 9)) {
                $invalidProperties[] = "invalid value for 'fontColor', the character length must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) < 7)) {
                $invalidProperties[] = "invalid value for 'fontColor', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['fontSize']) && ($this->container['fontSize'] > 72)) {
                $invalidProperties[] = "invalid value for 'fontSize', must be smaller than or equal to 72.";
            }
            if (!is_null($this->container['fontSize']) && ($this->container['fontSize'] < 4)) {
                $invalidProperties[] = "invalid value for 'fontSize', must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['font']) && (mb_strlen($this->container['font']) > 20)) {
                $invalidProperties[] = "invalid value for 'font', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['font']) && (mb_strlen($this->container['font']) < 1)) {
                $invalidProperties[] = "invalid value for 'font', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) > 8)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['timeZone']) && (mb_strlen($this->container['timeZone']) < 8)) {
                $invalidProperties[] = "invalid value for 'timeZone', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['shadowColor']) && (mb_strlen($this->container['shadowColor']) > 9)) {
                $invalidProperties[] = "invalid value for 'shadowColor', the character length must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['shadowColor']) && (mb_strlen($this->container['shadowColor']) < 7)) {
                $invalidProperties[] = "invalid value for 'shadowColor', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
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
    * Gets format
    *  水印文字内容，必填 字幕内容1-64 type为1或2时必填，type为0时非必填
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 水印文字内容，必填 字幕内容1-64 type为1或2时必填，type为0时非必填
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets fontColor
    *  参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认白色】
    *
    * @return string|null
    */
    public function getFontColor()
    {
        return $this->container['fontColor'];
    }

    /**
    * Sets fontColor
    *
    * @param string|null $fontColor 参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认白色】
    *
    * @return $this
    */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;
        return $this;
    }

    /**
    * Gets fontSize
    *  字体大小
    *
    * @return int|null
    */
    public function getFontSize()
    {
        return $this->container['fontSize'];
    }

    /**
    * Sets fontSize
    *
    * @param int|null $fontSize 字体大小
    *
    * @return $this
    */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;
        return $this;
    }

    /**
    * Gets font
    *  字体，缺省值 空，可选值：harmonyRegular（鸿蒙）、douyu2.0（斗鱼追光体）
    *
    * @return string|null
    */
    public function getFont()
    {
        return $this->container['font'];
    }

    /**
    * Sets font
    *
    * @param string|null $font 字体，缺省值 空，可选值：harmonyRegular（鸿蒙）、douyu2.0（斗鱼追光体）
    *
    * @return $this
    */
    public function setFont($font)
    {
        $this->container['font'] = $font;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区，【取值参考 UTC-1200 至 UTC+1200，前三位UTC，第四位+或-，五六位表示小时，七八位固定00】
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区，【取值参考 UTC-1200 至 UTC+1200，前三位UTC，第四位+或-，五六位表示小时，七八位固定00】
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets shadowColor
    *  缺省值 none，参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认黑色】
    *
    * @return string|null
    */
    public function getShadowColor()
    {
        return $this->container['shadowColor'];
    }

    /**
    * Sets shadowColor
    *
    * @param string|null $shadowColor 缺省值 none，参数校验：首位为#、除#外为6位或8位，每位字符由 0-9、a~f、A~F 组成【务必校验，错误时转码默认黑色】
    *
    * @return $this
    */
    public function setShadowColor($shadowColor)
    {
        $this->container['shadowColor'] = $shadowColor;
        return $this;
    }

    /**
    * Gets location
    *  location
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\WatermarkLocation
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\WatermarkLocation $location location
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
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

