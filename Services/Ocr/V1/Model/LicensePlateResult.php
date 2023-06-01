<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LicensePlateResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LicensePlateResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * plateNumber  车牌内容。
    * plateColor  当前版本支持的车牌底色类型：  - blue: 蓝色  - green: 绿色（小型新能源车牌）  - black: 黑色  - white: 白色  - yellow: 黄色  - yellow_green: 黄绿（大型新能源车牌）
    * plateLocation  车牌的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'plateNumber' => 'string',
            'plateColor' => 'string',
            'plateLocation' => 'int[][]',
            'confidence' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * plateNumber  车牌内容。
    * plateColor  当前版本支持的车牌底色类型：  - blue: 蓝色  - green: 绿色（小型新能源车牌）  - black: 黑色  - white: 白色  - yellow: 黄色  - yellow_green: 黄绿（大型新能源车牌）
    * plateLocation  车牌的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'plateNumber' => null,
        'plateColor' => null,
        'plateLocation' => 'int32',
        'confidence' => 'float'
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
    * plateNumber  车牌内容。
    * plateColor  当前版本支持的车牌底色类型：  - blue: 蓝色  - green: 绿色（小型新能源车牌）  - black: 黑色  - white: 白色  - yellow: 黄色  - yellow_green: 黄绿（大型新能源车牌）
    * plateLocation  车牌的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'plateNumber' => 'plate_number',
            'plateColor' => 'plate_color',
            'plateLocation' => 'plate_location',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * plateNumber  车牌内容。
    * plateColor  当前版本支持的车牌底色类型：  - blue: 蓝色  - green: 绿色（小型新能源车牌）  - black: 黑色  - white: 白色  - yellow: 黄色  - yellow_green: 黄绿（大型新能源车牌）
    * plateLocation  车牌的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'plateNumber' => 'setPlateNumber',
            'plateColor' => 'setPlateColor',
            'plateLocation' => 'setPlateLocation',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * plateNumber  车牌内容。
    * plateColor  当前版本支持的车牌底色类型：  - blue: 蓝色  - green: 绿色（小型新能源车牌）  - black: 黑色  - white: 白色  - yellow: 黄色  - yellow_green: 黄绿（大型新能源车牌）
    * plateLocation  车牌的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'plateNumber' => 'getPlateNumber',
            'plateColor' => 'getPlateColor',
            'plateLocation' => 'getPlateLocation',
            'confidence' => 'getConfidence'
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
        $this->container['plateNumber'] = isset($data['plateNumber']) ? $data['plateNumber'] : null;
        $this->container['plateColor'] = isset($data['plateColor']) ? $data['plateColor'] : null;
        $this->container['plateLocation'] = isset($data['plateLocation']) ? $data['plateLocation'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['plateNumber'] === null) {
            $invalidProperties[] = "'plateNumber' can't be null";
        }
        if ($this->container['plateColor'] === null) {
            $invalidProperties[] = "'plateColor' can't be null";
        }
        if ($this->container['plateLocation'] === null) {
            $invalidProperties[] = "'plateLocation' can't be null";
        }
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
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
    * Gets plateNumber
    *  车牌内容。
    *
    * @return string
    */
    public function getPlateNumber()
    {
        return $this->container['plateNumber'];
    }

    /**
    * Sets plateNumber
    *
    * @param string $plateNumber 车牌内容。
    *
    * @return $this
    */
    public function setPlateNumber($plateNumber)
    {
        $this->container['plateNumber'] = $plateNumber;
        return $this;
    }

    /**
    * Gets plateColor
    *  当前版本支持的车牌底色类型：  - blue: 蓝色  - green: 绿色（小型新能源车牌）  - black: 黑色  - white: 白色  - yellow: 黄色  - yellow_green: 黄绿（大型新能源车牌）
    *
    * @return string
    */
    public function getPlateColor()
    {
        return $this->container['plateColor'];
    }

    /**
    * Sets plateColor
    *
    * @param string $plateColor 当前版本支持的车牌底色类型：  - blue: 蓝色  - green: 绿色（小型新能源车牌）  - black: 黑色  - white: 白色  - yellow: 黄色  - yellow_green: 黄绿（大型新能源车牌）
    *
    * @return $this
    */
    public function setPlateColor($plateColor)
    {
        $this->container['plateColor'] = $plateColor;
        return $this;
    }

    /**
    * Gets plateLocation
    *  车牌的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]
    */
    public function getPlateLocation()
    {
        return $this->container['plateLocation'];
    }

    /**
    * Sets plateLocation
    *
    * @param int[][] $plateLocation 车牌的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setPlateLocation($plateLocation)
    {
        $this->container['plateLocation'] = $plateLocation;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return float
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param float $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
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

