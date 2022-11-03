<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralTextWordsBlockList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralTextWordsBlockList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * words  文字块识别结果。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果的置信度。
    * charList  文字块对应的单字符识别列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'words' => 'string',
            'location' => 'int[][]',
            'confidence' => 'float',
            'charList' => '\HuaweiCloud\SDK\Ocr\V1\Model\GeneralTextCharList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * words  文字块识别结果。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果的置信度。
    * charList  文字块对应的单字符识别列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'words' => null,
        'location' => 'int32',
        'confidence' => 'float',
        'charList' => null
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
    * words  文字块识别结果。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果的置信度。
    * charList  文字块对应的单字符识别列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'words' => 'words',
            'location' => 'location',
            'confidence' => 'confidence',
            'charList' => 'char_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * words  文字块识别结果。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果的置信度。
    * charList  文字块对应的单字符识别列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $setters = [
            'words' => 'setWords',
            'location' => 'setLocation',
            'confidence' => 'setConfidence',
            'charList' => 'setCharList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * words  文字块识别结果。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果的置信度。
    * charList  文字块对应的单字符识别列表，输出顺序从左到右，先上后下。
    *
    * @var string[]
    */
    protected static $getters = [
            'words' => 'getWords',
            'location' => 'getLocation',
            'confidence' => 'getConfidence',
            'charList' => 'getCharList'
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
        $this->container['words'] = isset($data['words']) ? $data['words'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['charList'] = isset($data['charList']) ? $data['charList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['words'] === null) {
            $invalidProperties[] = "'words' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['confidence'] === null) {
            $invalidProperties[] = "'confidence' can't be null";
        }
        if ($this->container['charList'] === null) {
            $invalidProperties[] = "'charList' can't be null";
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
    * Gets words
    *  文字块识别结果。
    *
    * @return string
    */
    public function getWords()
    {
        return $this->container['words'];
    }

    /**
    * Sets words
    *
    * @param string $words 文字块识别结果。
    *
    * @return $this
    */
    public function setWords($words)
    {
        $this->container['words'] = $words;
        return $this;
    }

    /**
    * Gets location
    *  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param int[][] $location 文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets confidence
    *  文字块识别结果的置信度。
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
    * @param float $confidence 文字块识别结果的置信度。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets charList
    *  文字块对应的单字符识别列表，输出顺序从左到右，先上后下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\GeneralTextCharList[]
    */
    public function getCharList()
    {
        return $this->container['charList'];
    }

    /**
    * Sets charList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\GeneralTextCharList[] $charList 文字块对应的单字符识别列表，输出顺序从左到右，先上后下。
    *
    * @return $this
    */
    public function setCharList($charList)
    {
        $this->container['charList'] = $charList;
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

