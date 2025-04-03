<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackgroundImageConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackgroundImageConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dx  **参数解释**： 背景图片左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即dx <= 0，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * dy  **参数解释**： 背景图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**：  需要保证背景图片要铺满画布。即dy <= 0，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    * width  **参数解释**： 背景图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即width > 1080，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * height  **参数解释**： 背景图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。height> 1080，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dx' => 'int',
            'dy' => 'int',
            'width' => 'int',
            'height' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dx  **参数解释**： 背景图片左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即dx <= 0，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * dy  **参数解释**： 背景图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**：  需要保证背景图片要铺满画布。即dy <= 0，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    * width  **参数解释**： 背景图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即width > 1080，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * height  **参数解释**： 背景图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。height> 1080，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dx' => 'int32',
        'dy' => 'int32',
        'width' => 'int32',
        'height' => 'int32'
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
    * dx  **参数解释**： 背景图片左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即dx <= 0，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * dy  **参数解释**： 背景图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**：  需要保证背景图片要铺满画布。即dy <= 0，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    * width  **参数解释**： 背景图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即width > 1080，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * height  **参数解释**： 背景图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。height> 1080，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dx' => 'dx',
            'dy' => 'dy',
            'width' => 'width',
            'height' => 'height'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dx  **参数解释**： 背景图片左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即dx <= 0，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * dy  **参数解释**： 背景图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**：  需要保证背景图片要铺满画布。即dy <= 0，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    * width  **参数解释**： 背景图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即width > 1080，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * height  **参数解释**： 背景图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。height> 1080，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @var string[]
    */
    protected static $setters = [
            'dx' => 'setDx',
            'dy' => 'setDy',
            'width' => 'setWidth',
            'height' => 'setHeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dx  **参数解释**： 背景图片左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即dx <= 0，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * dy  **参数解释**： 背景图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**：  需要保证背景图片要铺满画布。即dy <= 0，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    * width  **参数解释**： 背景图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即width > 1080，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    * height  **参数解释**： 背景图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。height> 1080，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @var string[]
    */
    protected static $getters = [
            'dx' => 'getDx',
            'dy' => 'getDy',
            'width' => 'getWidth',
            'height' => 'getHeight'
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
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dx'] === null) {
            $invalidProperties[] = "'dx' can't be null";
        }
            if (($this->container['dx'] > 0)) {
                $invalidProperties[] = "invalid value for 'dx', must be smaller than or equal to 0.";
            }
            if (($this->container['dx'] < -5760)) {
                $invalidProperties[] = "invalid value for 'dx', must be bigger than or equal to -5760.";
            }
        if ($this->container['dy'] === null) {
            $invalidProperties[] = "'dy' can't be null";
        }
            if (($this->container['dy'] > 0)) {
                $invalidProperties[] = "invalid value for 'dy', must be smaller than or equal to 0.";
            }
            if (($this->container['dy'] < -5760)) {
                $invalidProperties[] = "invalid value for 'dy', must be bigger than or equal to -5760.";
            }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
            if (($this->container['width'] > 7680)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 7680.";
            }
            if (($this->container['width'] < 1)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 1.";
            }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
            if (($this->container['height'] > 7680)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 7680.";
            }
            if (($this->container['height'] < 1)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 1.";
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
    *  **参数解释**： 背景图片左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即dx <= 0，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    *
    * @return int
    */
    public function getDx()
    {
        return $this->container['dx'];
    }

    /**
    * Sets dx
    *
    * @param int $dx **参数解释**： 背景图片左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即dx <= 0，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
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
    *  **参数解释**： 背景图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**：  需要保证背景图片要铺满画布。即dy <= 0，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @return int
    */
    public function getDy()
    {
        return $this->container['dy'];
    }

    /**
    * Sets dy
    *
    * @param int $dy **参数解释**： 背景图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**：  需要保证背景图片要铺满画布。即dy <= 0，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @return $this
    */
    public function setDy($dy)
    {
        $this->container['dy'] = $dy;
        return $this;
    }

    /**
    * Gets width
    *  **参数解释**： 背景图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即width > 1080，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    *
    * @return int
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int $width **参数解释**： 背景图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。即width > 1080，并且横屏时dx + width >=1920，竖屏时dx + width >=1080。
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets height
    *  **参数解释**： 背景图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。height> 1080，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @return int
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int $height **参数解释**： 背景图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 需要保证背景图片要铺满画布。height> 1080，并且横屏时dy + height >=1080，竖屏时dy + height >=1920。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
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

