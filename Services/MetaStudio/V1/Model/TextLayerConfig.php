<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TextLayerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TextLayerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * textContext  文字图层的文本，内容需做Base64编码。  示例：若想添加文字水印“测试文字水印”，那么text_context的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体 * fzyouh：方正瘦体
    * fontSize  字体大小（像素）。  取值范围：[4, 120]
    * fontColor  字体颜色。RGB颜色值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'textContext' => 'string',
            'fontName' => 'string',
            'fontSize' => 'int',
            'fontColor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * textContext  文字图层的文本，内容需做Base64编码。  示例：若想添加文字水印“测试文字水印”，那么text_context的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体 * fzyouh：方正瘦体
    * fontSize  字体大小（像素）。  取值范围：[4, 120]
    * fontColor  字体颜色。RGB颜色值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'textContext' => null,
        'fontName' => null,
        'fontSize' => 'int32',
        'fontColor' => null
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
    * textContext  文字图层的文本，内容需做Base64编码。  示例：若想添加文字水印“测试文字水印”，那么text_context的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体 * fzyouh：方正瘦体
    * fontSize  字体大小（像素）。  取值范围：[4, 120]
    * fontColor  字体颜色。RGB颜色值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'textContext' => 'text_context',
            'fontName' => 'font_name',
            'fontSize' => 'font_size',
            'fontColor' => 'font_color'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * textContext  文字图层的文本，内容需做Base64编码。  示例：若想添加文字水印“测试文字水印”，那么text_context的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体 * fzyouh：方正瘦体
    * fontSize  字体大小（像素）。  取值范围：[4, 120]
    * fontColor  字体颜色。RGB颜色值。
    *
    * @var string[]
    */
    protected static $setters = [
            'textContext' => 'setTextContext',
            'fontName' => 'setFontName',
            'fontSize' => 'setFontSize',
            'fontColor' => 'setFontColor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * textContext  文字图层的文本，内容需做Base64编码。  示例：若想添加文字水印“测试文字水印”，那么text_context的值为：5rWL6K+V5paH5a2X5rC05Y2w
    * fontName  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体 * fzyouh：方正瘦体
    * fontSize  字体大小（像素）。  取值范围：[4, 120]
    * fontColor  字体颜色。RGB颜色值。
    *
    * @var string[]
    */
    protected static $getters = [
            'textContext' => 'getTextContext',
            'fontName' => 'getFontName',
            'fontSize' => 'getFontSize',
            'fontColor' => 'getFontColor'
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
        $this->container['textContext'] = isset($data['textContext']) ? $data['textContext'] : null;
        $this->container['fontName'] = isset($data['fontName']) ? $data['fontName'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['fontColor'] = isset($data['fontColor']) ? $data['fontColor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['textContext']) && (mb_strlen($this->container['textContext']) > 1024)) {
                $invalidProperties[] = "invalid value for 'textContext', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['textContext']) && (mb_strlen($this->container['textContext']) < 0)) {
                $invalidProperties[] = "invalid value for 'textContext', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) > 16)) {
                $invalidProperties[] = "invalid value for 'fontColor', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['fontColor']) && (mb_strlen($this->container['fontColor']) < 0)) {
                $invalidProperties[] = "invalid value for 'fontColor', the character length must be bigger than or equal to 0.";
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
    * Gets textContext
    *  文字图层的文本，内容需做Base64编码。  示例：若想添加文字水印“测试文字水印”，那么text_context的值为：5rWL6K+V5paH5a2X5rC05Y2w
    *
    * @return string|null
    */
    public function getTextContext()
    {
        return $this->container['textContext'];
    }

    /**
    * Sets textContext
    *
    * @param string|null $textContext 文字图层的文本，内容需做Base64编码。  示例：若想添加文字水印“测试文字水印”，那么text_context的值为：5rWL6K+V5paH5a2X5rC05Y2w
    *
    * @return $this
    */
    public function setTextContext($textContext)
    {
        $this->container['textContext'] = $textContext;
        return $this;
    }

    /**
    * Gets fontName
    *  字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体 * fzyouh：方正瘦体
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
    * @param string|null $fontName 字体。当前支持的字体： * HarmonyOS_Sans_SC_Black：鸿蒙粗体 * HarmonyOS_Sans_SC_Regular：鸿蒙常规 * HarmonyOS_Sans_SC_Thin：鸿蒙细体 * fzyouh：方正瘦体
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
    *  字体大小（像素）。  取值范围：[4, 120]
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
    * @param int|null $fontSize 字体大小（像素）。  取值范围：[4, 120]
    *
    * @return $this
    */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;
        return $this;
    }

    /**
    * Gets fontColor
    *  字体颜色。RGB颜色值。
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
    * @param string|null $fontColor 字体颜色。RGB颜色值。
    *
    * @return $this
    */
    public function setFontColor($fontColor)
    {
        $this->container['fontColor'] = $fontColor;
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

