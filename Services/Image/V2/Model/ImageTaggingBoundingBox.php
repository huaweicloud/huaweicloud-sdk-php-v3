<?php

namespace HuaweiCloud\SDK\Image\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageTaggingBoundingBox implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageTaggingBoundingBox';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * width  检测框区域宽度
    * height  检测框区域高度
    * topLeftX  检测框左上角到垂直轴距离
    * topLeftY  检测框左上角到水平轴距离
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'width' => 'double',
            'height' => 'double',
            'topLeftX' => 'double',
            'topLeftY' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * width  检测框区域宽度
    * height  检测框区域高度
    * topLeftX  检测框左上角到垂直轴距离
    * topLeftY  检测框左上角到水平轴距离
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'width' => 'double',
        'height' => 'double',
        'topLeftX' => 'double',
        'topLeftY' => 'double'
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
    * width  检测框区域宽度
    * height  检测框区域高度
    * topLeftX  检测框左上角到垂直轴距离
    * topLeftY  检测框左上角到水平轴距离
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'width' => 'width',
            'height' => 'height',
            'topLeftX' => 'top_left_x',
            'topLeftY' => 'top_left_y'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * width  检测框区域宽度
    * height  检测框区域高度
    * topLeftX  检测框左上角到垂直轴距离
    * topLeftY  检测框左上角到水平轴距离
    *
    * @var string[]
    */
    protected static $setters = [
            'width' => 'setWidth',
            'height' => 'setHeight',
            'topLeftX' => 'setTopLeftX',
            'topLeftY' => 'setTopLeftY'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * width  检测框区域宽度
    * height  检测框区域高度
    * topLeftX  检测框左上角到垂直轴距离
    * topLeftY  检测框左上角到水平轴距离
    *
    * @var string[]
    */
    protected static $getters = [
            'width' => 'getWidth',
            'height' => 'getHeight',
            'topLeftX' => 'getTopLeftX',
            'topLeftY' => 'getTopLeftY'
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
        $this->container['topLeftX'] = isset($data['topLeftX']) ? $data['topLeftX'] : null;
        $this->container['topLeftY'] = isset($data['topLeftY']) ? $data['topLeftY'] : null;
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
    * Gets width
    *  检测框区域宽度
    *
    * @return double|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param double|null $width 检测框区域宽度
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
    *  检测框区域高度
    *
    * @return double|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param double|null $height 检测框区域高度
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets topLeftX
    *  检测框左上角到垂直轴距离
    *
    * @return double|null
    */
    public function getTopLeftX()
    {
        return $this->container['topLeftX'];
    }

    /**
    * Sets topLeftX
    *
    * @param double|null $topLeftX 检测框左上角到垂直轴距离
    *
    * @return $this
    */
    public function setTopLeftX($topLeftX)
    {
        $this->container['topLeftX'] = $topLeftX;
        return $this;
    }

    /**
    * Gets topLeftY
    *  检测框左上角到水平轴距离
    *
    * @return double|null
    */
    public function getTopLeftY()
    {
        return $this->container['topLeftY'];
    }

    /**
    * Sets topLeftY
    *
    * @param double|null $topLeftY 检测框左上角到水平轴距离
    *
    * @return $this
    */
    public function setTopLeftY($topLeftY)
    {
        $this->container['topLeftY'] = $topLeftY;
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

