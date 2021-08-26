<?php

namespace HuaweiCloud\SDK\Frs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BoundingBox implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BoundingBox';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * width  矩形框宽度。
    * topLeftY  矩形框左上角纵坐标。
    * topLeftX  矩形框左上角横坐标。
    * height  矩形框高度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'width' => 'int',
            'topLeftY' => 'int',
            'topLeftX' => 'int',
            'height' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * width  矩形框宽度。
    * topLeftY  矩形框左上角纵坐标。
    * topLeftX  矩形框左上角横坐标。
    * height  矩形框高度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'width' => 'int32',
        'topLeftY' => 'int32',
        'topLeftX' => 'int32',
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
    * width  矩形框宽度。
    * topLeftY  矩形框左上角纵坐标。
    * topLeftX  矩形框左上角横坐标。
    * height  矩形框高度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'width' => 'width',
            'topLeftY' => 'top_left_y',
            'topLeftX' => 'top_left_x',
            'height' => 'height'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * width  矩形框宽度。
    * topLeftY  矩形框左上角纵坐标。
    * topLeftX  矩形框左上角横坐标。
    * height  矩形框高度。
    *
    * @var string[]
    */
    protected static $setters = [
            'width' => 'setWidth',
            'topLeftY' => 'setTopLeftY',
            'topLeftX' => 'setTopLeftX',
            'height' => 'setHeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * width  矩形框宽度。
    * topLeftY  矩形框左上角纵坐标。
    * topLeftX  矩形框左上角横坐标。
    * height  矩形框高度。
    *
    * @var string[]
    */
    protected static $getters = [
            'width' => 'getWidth',
            'topLeftY' => 'getTopLeftY',
            'topLeftX' => 'getTopLeftX',
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
        $this->container['topLeftY'] = isset($data['topLeftY']) ? $data['topLeftY'] : null;
        $this->container['topLeftX'] = isset($data['topLeftX']) ? $data['topLeftX'] : null;
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
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['topLeftY'] === null) {
            $invalidProperties[] = "'topLeftY' can't be null";
        }
        if ($this->container['topLeftX'] === null) {
            $invalidProperties[] = "'topLeftX' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
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
    *  矩形框宽度。
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
    * @param int $width 矩形框宽度。
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets topLeftY
    *  矩形框左上角纵坐标。
    *
    * @return int
    */
    public function getTopLeftY()
    {
        return $this->container['topLeftY'];
    }

    /**
    * Sets topLeftY
    *
    * @param int $topLeftY 矩形框左上角纵坐标。
    *
    * @return $this
    */
    public function setTopLeftY($topLeftY)
    {
        $this->container['topLeftY'] = $topLeftY;
        return $this;
    }

    /**
    * Gets topLeftX
    *  矩形框左上角横坐标。
    *
    * @return int
    */
    public function getTopLeftX()
    {
        return $this->container['topLeftX'];
    }

    /**
    * Sets topLeftX
    *
    * @param int $topLeftX 矩形框左上角横坐标。
    *
    * @return $this
    */
    public function setTopLeftX($topLeftX)
    {
        $this->container['topLeftX'] = $topLeftX;
        return $this;
    }

    /**
    * Gets height
    *  矩形框高度。
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
    * @param int $height 矩形框高度。
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

