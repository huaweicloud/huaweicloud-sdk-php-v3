<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubtitleConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubtitleConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dx  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体
    * fontSize  字体大小。  取值范围：[4, 120]
    * h  字幕框高度
    * w  字幕框宽度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dx' => 'int',
            'dy' => 'int',
            'fontName' => 'string',
            'fontSize' => 'int',
            'h' => 'int',
            'w' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dx  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体
    * fontSize  字体大小。  取值范围：[4, 120]
    * h  字幕框高度
    * w  字幕框宽度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dx' => 'int32',
        'dy' => 'int32',
        'fontName' => null,
        'fontSize' => 'int32',
        'h' => 'int32',
        'w' => 'int32'
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
    * dx  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体
    * fontSize  字体大小。  取值范围：[4, 120]
    * h  字幕框高度
    * w  字幕框宽度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dx' => 'dx',
            'dy' => 'dy',
            'fontName' => 'font_name',
            'fontSize' => 'font_size',
            'h' => 'h',
            'w' => 'w'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dx  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体
    * fontSize  字体大小。  取值范围：[4, 120]
    * h  字幕框高度
    * w  字幕框宽度
    *
    * @var string[]
    */
    protected static $setters = [
            'dx' => 'setDx',
            'dy' => 'setDy',
            'fontName' => 'setFontName',
            'fontSize' => 'setFontSize',
            'h' => 'setH',
            'w' => 'setW'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dx  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体
    * fontSize  字体大小。  取值范围：[4, 120]
    * h  字幕框高度
    * w  字幕框宽度
    *
    * @var string[]
    */
    protected static $getters = [
            'dx' => 'getDx',
            'dy' => 'getDy',
            'fontName' => 'getFontName',
            'fontSize' => 'getFontSize',
            'h' => 'getH',
            'w' => 'getW'
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
        $this->container['dx'] = isset($data['dx']) ? $data['dx'] : null;
        $this->container['dy'] = isset($data['dy']) ? $data['dy'] : null;
        $this->container['fontName'] = isset($data['fontName']) ? $data['fontName'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['h'] = isset($data['h']) ? $data['h'] : null;
        $this->container['w'] = isset($data['w']) ? $data['w'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dx']) && ($this->container['dx'] > 1920)) {
                $invalidProperties[] = "invalid value for 'dx', must be smaller than or equal to 1920.";
            }
            if (!is_null($this->container['dx']) && ($this->container['dx'] < 0)) {
                $invalidProperties[] = "invalid value for 'dx', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dy']) && ($this->container['dy'] > 1920)) {
                $invalidProperties[] = "invalid value for 'dy', must be smaller than or equal to 1920.";
            }
            if (!is_null($this->container['dy']) && ($this->container['dy'] < 0)) {
                $invalidProperties[] = "invalid value for 'dy', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontName']) && (mb_strlen($this->container['fontName']) > 64)) {
                $invalidProperties[] = "invalid value for 'fontName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fontName']) && (mb_strlen($this->container['fontName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fontName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontSize']) && ($this->container['fontSize'] > 120)) {
                $invalidProperties[] = "invalid value for 'fontSize', must be smaller than or equal to 120.";
            }
            if (!is_null($this->container['fontSize']) && ($this->container['fontSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'fontSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['h']) && ($this->container['h'] > 1920)) {
                $invalidProperties[] = "invalid value for 'h', must be smaller than or equal to 1920.";
            }
            if (!is_null($this->container['h']) && ($this->container['h'] < 0)) {
                $invalidProperties[] = "invalid value for 'h', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['w']) && ($this->container['w'] > 1920)) {
                $invalidProperties[] = "invalid value for 'w', must be smaller than or equal to 1920.";
            }
            if (!is_null($this->container['w']) && ($this->container['w'] < 0)) {
                $invalidProperties[] = "invalid value for 'w', must be bigger than or equal to 0.";
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
    * Gets dx
    *  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @return int|null
    */
    public function getDx()
    {
        return $this->container['dx'];
    }

    /**
    * Sets dx
    *
    * @param int|null $dx 字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @return $this
    */
    public function setDx($dx)
    {
        $this->container['dx'] = $dx;
        return $this;
    }

    /**
    * Gets dy
    *  字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @return int|null
    */
    public function getDy()
    {
        return $this->container['dy'];
    }

    /**
    * Sets dy
    *
    * @param int|null $dy 字幕左上角像素点坐标。  > *横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    *
    * @return $this
    */
    public function setDy($dy)
    {
        $this->container['dy'] = $dy;
        return $this;
    }

    /**
    * Gets fontName
    *  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体
    *
    * @return string|null
    */
    public function getFontName()
    {
        return $this->container['fontName'];
    }

    /**
    * Sets fontName
    *
    * @param string|null $fontName 字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体
    *
    * @return $this
    */
    public function setFontName($fontName)
    {
        $this->container['fontName'] = $fontName;
        return $this;
    }

    /**
    * Gets fontSize
    *  字体大小。  取值范围：[4, 120]
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
    * @param int|null $fontSize 字体大小。  取值范围：[4, 120]
    *
    * @return $this
    */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;
        return $this;
    }

    /**
    * Gets h
    *  字幕框高度
    *
    * @return int|null
    */
    public function getH()
    {
        return $this->container['h'];
    }

    /**
    * Sets h
    *
    * @param int|null $h 字幕框高度
    *
    * @return $this
    */
    public function setH($h)
    {
        $this->container['h'] = $h;
        return $this;
    }

    /**
    * Gets w
    *  字幕框宽度
    *
    * @return int|null
    */
    public function getW()
    {
        return $this->container['w'];
    }

    /**
    * Sets w
    *
    * @param int|null $w 字幕框宽度
    *
    * @return $this
    */
    public function setW($w)
    {
        $this->container['w'] = $w;
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

