<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HumanSize2D implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HumanSize2D';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * width  分身数字人宽度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * height  分身数字人高度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'width' => 'int',
            'height' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * width  分身数字人宽度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * height  分身数字人高度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * width  分身数字人宽度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * height  分身数字人高度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'width' => 'width',
            'height' => 'height'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * width  分身数字人宽度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * height  分身数字人高度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $setters = [
            'width' => 'setWidth',
            'height' => 'setHeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * width  分身数字人宽度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    * height  分身数字人高度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
    *
    * @var string[]
    */
    protected static $getters = [
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
    * Gets width
    *  分身数字人宽度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
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
    * @param int|null $width 分身数字人宽度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
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
    *  分身数字人高度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
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
    * @param int|null $height 分身数字人高度像素值。 > 横屏（16:9）背景图片像素为1920*1080；竖屏（9:16）背景图片像素为1080*1920。
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

