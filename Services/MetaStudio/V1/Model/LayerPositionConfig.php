<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LayerPositionConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LayerPositionConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dx  **参数解释**： 图层左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * dy  **参数解释**： 图层图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * layerIndex  **参数解释**： 图片、视频、人物图的层顺序。 > 图层顺序为从1开始的整数，底层图层顺序是1，往上依次增加。  **约束限制**： 如果出现重复则重复图层叠加关系随机。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dx' => 'int',
            'dy' => 'int',
            'layerIndex' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dx  **参数解释**： 图层左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * dy  **参数解释**： 图层图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * layerIndex  **参数解释**： 图片、视频、人物图的层顺序。 > 图层顺序为从1开始的整数，底层图层顺序是1，往上依次增加。  **约束限制**： 如果出现重复则重复图层叠加关系随机。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dx' => 'int32',
        'dy' => 'int32',
        'layerIndex' => 'int32'
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
    * dx  **参数解释**： 图层左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * dy  **参数解释**： 图层图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * layerIndex  **参数解释**： 图片、视频、人物图的层顺序。 > 图层顺序为从1开始的整数，底层图层顺序是1，往上依次增加。  **约束限制**： 如果出现重复则重复图层叠加关系随机。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dx' => 'dx',
            'dy' => 'dy',
            'layerIndex' => 'layer_index'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dx  **参数解释**： 图层左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * dy  **参数解释**： 图层图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * layerIndex  **参数解释**： 图片、视频、人物图的层顺序。 > 图层顺序为从1开始的整数，底层图层顺序是1，往上依次增加。  **约束限制**： 如果出现重复则重复图层叠加关系随机。
    *
    * @var string[]
    */
    protected static $setters = [
            'dx' => 'setDx',
            'dy' => 'setDy',
            'layerIndex' => 'setLayerIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dx  **参数解释**： 图层左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * dy  **参数解释**： 图层图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    * layerIndex  **参数解释**： 图片、视频、人物图的层顺序。 > 图层顺序为从1开始的整数，底层图层顺序是1，往上依次增加。  **约束限制**： 如果出现重复则重复图层叠加关系随机。
    *
    * @var string[]
    */
    protected static $getters = [
            'dx' => 'getDx',
            'dy' => 'getDy',
            'layerIndex' => 'getLayerIndex'
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
        $this->container['layerIndex'] = isset($data['layerIndex']) ? $data['layerIndex'] : null;
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
            if (($this->container['dx'] > 3840)) {
                $invalidProperties[] = "invalid value for 'dx', must be smaller than or equal to 3840.";
            }
            if (($this->container['dx'] < -1920)) {
                $invalidProperties[] = "invalid value for 'dx', must be bigger than or equal to -1920.";
            }
        if ($this->container['dy'] === null) {
            $invalidProperties[] = "'dy' can't be null";
        }
            if (($this->container['dy'] > 3840)) {
                $invalidProperties[] = "invalid value for 'dy', must be smaller than or equal to 3840.";
            }
            if (($this->container['dy'] < -1920)) {
                $invalidProperties[] = "invalid value for 'dy', must be bigger than or equal to -1920.";
            }
        if ($this->container['layerIndex'] === null) {
            $invalidProperties[] = "'layerIndex' can't be null";
        }
            if (($this->container['layerIndex'] > 100)) {
                $invalidProperties[] = "invalid value for 'layerIndex', must be smaller than or equal to 100.";
            }
            if (($this->container['layerIndex'] < 1)) {
                $invalidProperties[] = "invalid value for 'layerIndex', must be bigger than or equal to 1.";
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
    *  **参数解释**： 图层左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
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
    * @param int $dx **参数解释**： 图层左上角像素点的X轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
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
    *  **参数解释**： 图层图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
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
    * @param int $dy **参数解释**： 图层图片左上角像素点的Y轴位置值（画布左上角坐标是0x0）。 横屏（16:9）画布像素为1920x1080；竖屏（9:16）画布像素为1080x1920。  **约束限制**： 该值为相对于画布的像素值，仅表示布局位置关系，与输出画面分辨率无关。
    *
    * @return $this
    */
    public function setDy($dy)
    {
        $this->container['dy'] = $dy;
        return $this;
    }

    /**
    * Gets layerIndex
    *  **参数解释**： 图片、视频、人物图的层顺序。 > 图层顺序为从1开始的整数，底层图层顺序是1，往上依次增加。  **约束限制**： 如果出现重复则重复图层叠加关系随机。
    *
    * @return int
    */
    public function getLayerIndex()
    {
        return $this->container['layerIndex'];
    }

    /**
    * Sets layerIndex
    *
    * @param int $layerIndex **参数解释**： 图片、视频、人物图的层顺序。 > 图层顺序为从1开始的整数，底层图层顺序是1，往上依次增加。  **约束限制**： 如果出现重复则重复图层叠加关系随机。
    *
    * @return $this
    */
    public function setLayerIndex($layerIndex)
    {
        $this->container['layerIndex'] = $layerIndex;
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

