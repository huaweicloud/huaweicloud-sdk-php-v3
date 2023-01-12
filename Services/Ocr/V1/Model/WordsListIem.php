<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WordsListIem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WordsListIem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * words  文字块识别结果。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"和\"return_char_location\"同时为true时存在。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'words' => 'string',
            'confidence' => 'float',
            'location' => 'int[][]',
            'charList' => '\HuaweiCloud\SDK\Ocr\V1\Model\CharListIem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * words  文字块识别结果。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"和\"return_char_location\"同时为true时存在。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'words' => null,
        'confidence' => 'float',
        'location' => 'int32',
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
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"和\"return_char_location\"同时为true时存在。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'words' => 'words',
            'confidence' => 'confidence',
            'location' => 'location',
            'charList' => 'char_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * words  文字块识别结果。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"和\"return_char_location\"同时为true时存在。
    *
    * @var string[]
    */
    protected static $setters = [
            'words' => 'setWords',
            'confidence' => 'setConfidence',
            'location' => 'setLocation',
            'charList' => 'setCharList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * words  文字块识别结果。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * charList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"和\"return_char_location\"同时为true时存在。
    *
    * @var string[]
    */
    protected static $getters = [
            'words' => 'getWords',
            'confidence' => 'getConfidence',
            'location' => 'getLocation',
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
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
    * @return string|null
    */
    public function getWords()
    {
        return $this->container['words'];
    }

    /**
    * Sets words
    *
    * @param string|null $words 文字块识别结果。
    *
    * @return $this
    */
    public function setWords($words)
    {
        $this->container['words'] = $words;
        return $this;
    }

    /**
    * Gets confidence
    *  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return float|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param float|null $confidence 字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets location
    *  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param int[][]|null $location 文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets charList
    *  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"和\"return_char_location\"同时为true时存在。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\CharListIem[]|null
    */
    public function getCharList()
    {
        return $this->container['charList'];
    }

    /**
    * Sets charList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\CharListIem[]|null $charList 单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"和\"return_char_location\"同时为true时存在。
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

