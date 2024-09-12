<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChatSubtitleConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChatSubtitleConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dx  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * width  **参数解释**： 图层图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
    * height  **参数解释**： 图层图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
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
    * dx  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * width  **参数解释**： 图层图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
    * height  **参数解释**： 图层图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
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
    * dx  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * width  **参数解释**： 图层图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
    * height  **参数解释**： 图层图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
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
    * dx  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * width  **参数解释**： 图层图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
    * height  **参数解释**： 图层图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
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
    * dx  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * dy  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
    * width  **参数解释**： 图层图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
    * height  **参数解释**： 图层图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
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
            if (!is_null($this->container['width']) && ($this->container['width'] > 7680)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 7680.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 1)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 7680)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 7680.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 1)) {
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
    *  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
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
    * @param int|null $dx **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
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
    *  **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
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
    * @param int|null $dy **参数解释**： 字幕左上角像素点坐标。  横屏（16:9）视频像素为1920x1080；竖屏（9:16）视频像素为1080x1920。
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
    *  **参数解释**： 图层图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
    *
    * @return int|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int|null $width **参数解释**： 图层图片宽度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
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
    *  **参数解释**： 图层图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
    *
    * @return int|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int|null $height **参数解释**： 图层图片高度像素值（相对画布大小）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。
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

