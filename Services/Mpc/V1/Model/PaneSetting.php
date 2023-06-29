<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PaneSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PaneSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paneId  原视频的id。
    * x  pane_id标记的原视频起点，在合成视频中相对于左下角的水平偏移量。 目前只支持小数类型，表示相对于输出视频宽的水平偏移比率。取值范围(0,1)。
    * y  pane_id标记的原视频，在合成视频中相对于左下角的垂直偏移量。 目前只支持小数型，表示相对于输出视频高的垂直偏移比率。取值范围:(0,1)。
    * width  pane_id标记的原视频，在合成视频中占的宽。目前只支持小数型，范围(0,1)，表示占据合成视频宽的比率。
    * height  pane_id标记的原视频，在合成视频中占的高。目前只支持小数型，范围(0,1)，表示占据合成视频高的比率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paneId' => 'string',
            'x' => 'string',
            'y' => 'string',
            'width' => 'string',
            'height' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paneId  原视频的id。
    * x  pane_id标记的原视频起点，在合成视频中相对于左下角的水平偏移量。 目前只支持小数类型，表示相对于输出视频宽的水平偏移比率。取值范围(0,1)。
    * y  pane_id标记的原视频，在合成视频中相对于左下角的垂直偏移量。 目前只支持小数型，表示相对于输出视频高的垂直偏移比率。取值范围:(0,1)。
    * width  pane_id标记的原视频，在合成视频中占的宽。目前只支持小数型，范围(0,1)，表示占据合成视频宽的比率。
    * height  pane_id标记的原视频，在合成视频中占的高。目前只支持小数型，范围(0,1)，表示占据合成视频高的比率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paneId' => null,
        'x' => null,
        'y' => null,
        'width' => null,
        'height' => null
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
    * paneId  原视频的id。
    * x  pane_id标记的原视频起点，在合成视频中相对于左下角的水平偏移量。 目前只支持小数类型，表示相对于输出视频宽的水平偏移比率。取值范围(0,1)。
    * y  pane_id标记的原视频，在合成视频中相对于左下角的垂直偏移量。 目前只支持小数型，表示相对于输出视频高的垂直偏移比率。取值范围:(0,1)。
    * width  pane_id标记的原视频，在合成视频中占的宽。目前只支持小数型，范围(0,1)，表示占据合成视频宽的比率。
    * height  pane_id标记的原视频，在合成视频中占的高。目前只支持小数型，范围(0,1)，表示占据合成视频高的比率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paneId' => 'pane_id',
            'x' => 'x',
            'y' => 'y',
            'width' => 'width',
            'height' => 'height'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paneId  原视频的id。
    * x  pane_id标记的原视频起点，在合成视频中相对于左下角的水平偏移量。 目前只支持小数类型，表示相对于输出视频宽的水平偏移比率。取值范围(0,1)。
    * y  pane_id标记的原视频，在合成视频中相对于左下角的垂直偏移量。 目前只支持小数型，表示相对于输出视频高的垂直偏移比率。取值范围:(0,1)。
    * width  pane_id标记的原视频，在合成视频中占的宽。目前只支持小数型，范围(0,1)，表示占据合成视频宽的比率。
    * height  pane_id标记的原视频，在合成视频中占的高。目前只支持小数型，范围(0,1)，表示占据合成视频高的比率。
    *
    * @var string[]
    */
    protected static $setters = [
            'paneId' => 'setPaneId',
            'x' => 'setX',
            'y' => 'setY',
            'width' => 'setWidth',
            'height' => 'setHeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paneId  原视频的id。
    * x  pane_id标记的原视频起点，在合成视频中相对于左下角的水平偏移量。 目前只支持小数类型，表示相对于输出视频宽的水平偏移比率。取值范围(0,1)。
    * y  pane_id标记的原视频，在合成视频中相对于左下角的垂直偏移量。 目前只支持小数型，表示相对于输出视频高的垂直偏移比率。取值范围:(0,1)。
    * width  pane_id标记的原视频，在合成视频中占的宽。目前只支持小数型，范围(0,1)，表示占据合成视频宽的比率。
    * height  pane_id标记的原视频，在合成视频中占的高。目前只支持小数型，范围(0,1)，表示占据合成视频高的比率。
    *
    * @var string[]
    */
    protected static $getters = [
            'paneId' => 'getPaneId',
            'x' => 'getX',
            'y' => 'getY',
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
        $this->container['paneId'] = isset($data['paneId']) ? $data['paneId'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
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
        if ($this->container['paneId'] === null) {
            $invalidProperties[] = "'paneId' can't be null";
        }
            if ((mb_strlen($this->container['paneId']) > 32)) {
                $invalidProperties[] = "invalid value for 'paneId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['paneId']) < 0)) {
                $invalidProperties[] = "invalid value for 'paneId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
            if ((mb_strlen($this->container['x']) > 32)) {
                $invalidProperties[] = "invalid value for 'x', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['x']) < 0)) {
                $invalidProperties[] = "invalid value for 'x', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['y'] === null) {
            $invalidProperties[] = "'y' can't be null";
        }
            if ((mb_strlen($this->container['y']) > 32)) {
                $invalidProperties[] = "invalid value for 'y', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['y']) < 0)) {
                $invalidProperties[] = "invalid value for 'y', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
            if ((mb_strlen($this->container['width']) > 32)) {
                $invalidProperties[] = "invalid value for 'width', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['width']) < 0)) {
                $invalidProperties[] = "invalid value for 'width', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
            if ((mb_strlen($this->container['height']) > 32)) {
                $invalidProperties[] = "invalid value for 'height', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['height']) < 0)) {
                $invalidProperties[] = "invalid value for 'height', the character length must be bigger than or equal to 0.";
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
    * Gets paneId
    *  原视频的id。
    *
    * @return string
    */
    public function getPaneId()
    {
        return $this->container['paneId'];
    }

    /**
    * Sets paneId
    *
    * @param string $paneId 原视频的id。
    *
    * @return $this
    */
    public function setPaneId($paneId)
    {
        $this->container['paneId'] = $paneId;
        return $this;
    }

    /**
    * Gets x
    *  pane_id标记的原视频起点，在合成视频中相对于左下角的水平偏移量。 目前只支持小数类型，表示相对于输出视频宽的水平偏移比率。取值范围(0,1)。
    *
    * @return string
    */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
    * Sets x
    *
    * @param string $x pane_id标记的原视频起点，在合成视频中相对于左下角的水平偏移量。 目前只支持小数类型，表示相对于输出视频宽的水平偏移比率。取值范围(0,1)。
    *
    * @return $this
    */
    public function setX($x)
    {
        $this->container['x'] = $x;
        return $this;
    }

    /**
    * Gets y
    *  pane_id标记的原视频，在合成视频中相对于左下角的垂直偏移量。 目前只支持小数型，表示相对于输出视频高的垂直偏移比率。取值范围:(0,1)。
    *
    * @return string
    */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
    * Sets y
    *
    * @param string $y pane_id标记的原视频，在合成视频中相对于左下角的垂直偏移量。 目前只支持小数型，表示相对于输出视频高的垂直偏移比率。取值范围:(0,1)。
    *
    * @return $this
    */
    public function setY($y)
    {
        $this->container['y'] = $y;
        return $this;
    }

    /**
    * Gets width
    *  pane_id标记的原视频，在合成视频中占的宽。目前只支持小数型，范围(0,1)，表示占据合成视频宽的比率。
    *
    * @return string
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param string $width pane_id标记的原视频，在合成视频中占的宽。目前只支持小数型，范围(0,1)，表示占据合成视频宽的比率。
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
    *  pane_id标记的原视频，在合成视频中占的高。目前只支持小数型，范围(0,1)，表示占据合成视频高的比率。
    *
    * @return string
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param string $height pane_id标记的原视频，在合成视频中占的高。目前只支持小数型，范围(0,1)，表示占据合成视频高的比率。
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

