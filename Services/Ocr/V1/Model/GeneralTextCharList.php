<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralTextCharList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralTextCharList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * char  单字符识别结果。
    * charLocation  单字符的区域位置信息，列表形式，包含字符区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charConfidence  单字符识别结果的置信度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'char' => 'string',
            'charLocation' => 'int[][]',
            'charConfidence' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * char  单字符识别结果。
    * charLocation  单字符的区域位置信息，列表形式，包含字符区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charConfidence  单字符识别结果的置信度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'char' => null,
        'charLocation' => 'int32',
        'charConfidence' => 'float'
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
    * char  单字符识别结果。
    * charLocation  单字符的区域位置信息，列表形式，包含字符区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charConfidence  单字符识别结果的置信度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'char' => 'char',
            'charLocation' => 'char_location',
            'charConfidence' => 'char_confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * char  单字符识别结果。
    * charLocation  单字符的区域位置信息，列表形式，包含字符区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charConfidence  单字符识别结果的置信度。
    *
    * @var string[]
    */
    protected static $setters = [
            'char' => 'setChar',
            'charLocation' => 'setCharLocation',
            'charConfidence' => 'setCharConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * char  单字符识别结果。
    * charLocation  单字符的区域位置信息，列表形式，包含字符区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charConfidence  单字符识别结果的置信度。
    *
    * @var string[]
    */
    protected static $getters = [
            'char' => 'getChar',
            'charLocation' => 'getCharLocation',
            'charConfidence' => 'getCharConfidence'
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
        $this->container['char'] = isset($data['char']) ? $data['char'] : null;
        $this->container['charLocation'] = isset($data['charLocation']) ? $data['charLocation'] : null;
        $this->container['charConfidence'] = isset($data['charConfidence']) ? $data['charConfidence'] : null;
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
    * Gets char
    *  单字符识别结果。
    *
    * @return string|null
    */
    public function getChar()
    {
        return $this->container['char'];
    }

    /**
    * Sets char
    *
    * @param string|null $char 单字符识别结果。
    *
    * @return $this
    */
    public function setChar($char)
    {
        $this->container['char'] = $char;
        return $this;
    }

    /**
    * Gets charLocation
    *  单字符的区域位置信息，列表形式，包含字符区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getCharLocation()
    {
        return $this->container['charLocation'];
    }

    /**
    * Sets charLocation
    *
    * @param int[][]|null $charLocation 单字符的区域位置信息，列表形式，包含字符区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setCharLocation($charLocation)
    {
        $this->container['charLocation'] = $charLocation;
        return $this;
    }

    /**
    * Gets charConfidence
    *  单字符识别结果的置信度。
    *
    * @return float|null
    */
    public function getCharConfidence()
    {
        return $this->container['charConfidence'];
    }

    /**
    * Sets charConfidence
    *
    * @param float|null $charConfidence 单字符识别结果的置信度。
    *
    * @return $this
    */
    public function setCharConfidence($charConfidence)
    {
        $this->container['charConfidence'] = $charConfidence;
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

