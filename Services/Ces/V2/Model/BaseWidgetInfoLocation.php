<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BaseWidgetInfoLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BaseWidgetInfo_location';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * top  **参数解释** 监控视图的上坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为2147483647 **默认取值** 不涉及
    * left  **参数解释** 监控视图的左坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为9 **默认取值** 不涉及
    * width  **参数解释** 监控视图图表宽度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为12 **默认取值** 不涉及
    * height  **参数解释** 监控视图图表高度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为2147483647 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'top' => 'int',
            'left' => 'int',
            'width' => 'int',
            'height' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * top  **参数解释** 监控视图的上坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为2147483647 **默认取值** 不涉及
    * left  **参数解释** 监控视图的左坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为9 **默认取值** 不涉及
    * width  **参数解释** 监控视图图表宽度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为12 **默认取值** 不涉及
    * height  **参数解释** 监控视图图表高度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为2147483647 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'top' => null,
        'left' => null,
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
    * top  **参数解释** 监控视图的上坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为2147483647 **默认取值** 不涉及
    * left  **参数解释** 监控视图的左坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为9 **默认取值** 不涉及
    * width  **参数解释** 监控视图图表宽度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为12 **默认取值** 不涉及
    * height  **参数解释** 监控视图图表高度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为2147483647 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'top' => 'top',
            'left' => 'left',
            'width' => 'width',
            'height' => 'height'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * top  **参数解释** 监控视图的上坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为2147483647 **默认取值** 不涉及
    * left  **参数解释** 监控视图的左坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为9 **默认取值** 不涉及
    * width  **参数解释** 监控视图图表宽度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为12 **默认取值** 不涉及
    * height  **参数解释** 监控视图图表高度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为2147483647 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'top' => 'setTop',
            'left' => 'setLeft',
            'width' => 'setWidth',
            'height' => 'setHeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * top  **参数解释** 监控视图的上坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为2147483647 **默认取值** 不涉及
    * left  **参数解释** 监控视图的左坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为9 **默认取值** 不涉及
    * width  **参数解释** 监控视图图表宽度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为12 **默认取值** 不涉及
    * height  **参数解释** 监控视图图表高度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为2147483647 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'top' => 'getTop',
            'left' => 'getLeft',
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
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
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
        if ($this->container['top'] === null) {
            $invalidProperties[] = "'top' can't be null";
        }
            if (($this->container['top'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'top', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['top'] < 0)) {
                $invalidProperties[] = "invalid value for 'top', must be bigger than or equal to 0.";
            }
        if ($this->container['left'] === null) {
            $invalidProperties[] = "'left' can't be null";
        }
            if (($this->container['left'] > 9)) {
                $invalidProperties[] = "invalid value for 'left', must be smaller than or equal to 9.";
            }
            if (($this->container['left'] < 0)) {
                $invalidProperties[] = "invalid value for 'left', must be bigger than or equal to 0.";
            }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
            if (($this->container['width'] > 12)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 12.";
            }
            if (($this->container['width'] < 3)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 3.";
            }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
            if (($this->container['height'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['height'] < 3)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 3.";
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
    * Gets top
    *  **参数解释** 监控视图的上坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为2147483647 **默认取值** 不涉及
    *
    * @return int
    */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
    * Sets top
    *
    * @param int $top **参数解释** 监控视图的上坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为2147483647 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
    * Gets left
    *  **参数解释** 监控视图的左坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为9 **默认取值** 不涉及
    *
    * @return int
    */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
    * Sets left
    *
    * @param int $left **参数解释** 监控视图的左坐标 **约束限制** 不涉及               **取值范围** 最小值为0，最大值为9 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setLeft($left)
    {
        $this->container['left'] = $left;
        return $this;
    }

    /**
    * Gets width
    *  **参数解释** 监控视图图表宽度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为12 **默认取值** 不涉及
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
    * @param int $width **参数解释** 监控视图图表宽度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为12 **默认取值** 不涉及
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
    *  **参数解释** 监控视图图表高度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为2147483647 **默认取值** 不涉及
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
    * @param int $height **参数解释** 监控视图图表高度 **约束限制** 不涉及               **取值范围** 最小值为3，最大值为2147483647 **默认取值** 不涉及
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

