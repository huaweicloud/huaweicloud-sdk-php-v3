<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FinancialStatementWordsBlockList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FinancialStatementWordsBlockList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * words  文字块内容。当入参\"return_text_location\"为false时，每个单元格返回一个文本值，不同行文本由换行符 \"\\n\" 拼接。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果置信度信息，置信度越大，表示本次识别的对应字段的可靠性越大，在统计意义上，置信度越大正确率越高。注：置信度由算法给出，其不直接等价于对应字段的精度。
    * rows  单元格行信息，列表形式。多个连续值表示单元格垮多行。
    * columns  单元格列信息，列表形式。多个连续值表示单元格垮多列。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'words' => 'string',
            'location' => 'int[][]',
            'confidence' => 'float',
            'rows' => 'int[]',
            'columns' => 'int[]',
            'cellLocation' => 'int[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * words  文字块内容。当入参\"return_text_location\"为false时，每个单元格返回一个文本值，不同行文本由换行符 \"\\n\" 拼接。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果置信度信息，置信度越大，表示本次识别的对应字段的可靠性越大，在统计意义上，置信度越大正确率越高。注：置信度由算法给出，其不直接等价于对应字段的精度。
    * rows  单元格行信息，列表形式。多个连续值表示单元格垮多行。
    * columns  单元格列信息，列表形式。多个连续值表示单元格垮多列。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'words' => null,
        'location' => 'int32',
        'confidence' => 'float',
        'rows' => 'int32',
        'columns' => 'int32',
        'cellLocation' => 'int32'
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
    * words  文字块内容。当入参\"return_text_location\"为false时，每个单元格返回一个文本值，不同行文本由换行符 \"\\n\" 拼接。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果置信度信息，置信度越大，表示本次识别的对应字段的可靠性越大，在统计意义上，置信度越大正确率越高。注：置信度由算法给出，其不直接等价于对应字段的精度。
    * rows  单元格行信息，列表形式。多个连续值表示单元格垮多行。
    * columns  单元格列信息，列表形式。多个连续值表示单元格垮多列。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'words' => 'words',
            'location' => 'location',
            'confidence' => 'confidence',
            'rows' => 'rows',
            'columns' => 'columns',
            'cellLocation' => 'cell_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * words  文字块内容。当入参\"return_text_location\"为false时，每个单元格返回一个文本值，不同行文本由换行符 \"\\n\" 拼接。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果置信度信息，置信度越大，表示本次识别的对应字段的可靠性越大，在统计意义上，置信度越大正确率越高。注：置信度由算法给出，其不直接等价于对应字段的精度。
    * rows  单元格行信息，列表形式。多个连续值表示单元格垮多行。
    * columns  单元格列信息，列表形式。多个连续值表示单元格垮多列。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $setters = [
            'words' => 'setWords',
            'location' => 'setLocation',
            'confidence' => 'setConfidence',
            'rows' => 'setRows',
            'columns' => 'setColumns',
            'cellLocation' => 'setCellLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * words  文字块内容。当入参\"return_text_location\"为false时，每个单元格返回一个文本值，不同行文本由换行符 \"\\n\" 拼接。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  文字块识别结果置信度信息，置信度越大，表示本次识别的对应字段的可靠性越大，在统计意义上，置信度越大正确率越高。注：置信度由算法给出，其不直接等价于对应字段的精度。
    * rows  单元格行信息，列表形式。多个连续值表示单元格垮多行。
    * columns  单元格列信息，列表形式。多个连续值表示单元格垮多列。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $getters = [
            'words' => 'getWords',
            'location' => 'getLocation',
            'confidence' => 'getConfidence',
            'rows' => 'getRows',
            'columns' => 'getColumns',
            'cellLocation' => 'getCellLocation'
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
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['cellLocation'] = isset($data['cellLocation']) ? $data['cellLocation'] : null;
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
    *  文字块内容。当入参\"return_text_location\"为false时，每个单元格返回一个文本值，不同行文本由换行符 \"\\n\" 拼接。
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
    * @param string|null $words 文字块内容。当入参\"return_text_location\"为false时，每个单元格返回一个文本值，不同行文本由换行符 \"\\n\" 拼接。
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
    * Gets confidence
    *  文字块识别结果置信度信息，置信度越大，表示本次识别的对应字段的可靠性越大，在统计意义上，置信度越大正确率越高。注：置信度由算法给出，其不直接等价于对应字段的精度。
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
    * @param float|null $confidence 文字块识别结果置信度信息，置信度越大，表示本次识别的对应字段的可靠性越大，在统计意义上，置信度越大正确率越高。注：置信度由算法给出，其不直接等价于对应字段的精度。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets rows
    *  单元格行信息，列表形式。多个连续值表示单元格垮多行。
    *
    * @return int[]|null
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param int[]|null $rows 单元格行信息，列表形式。多个连续值表示单元格垮多行。
    *
    * @return $this
    */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;
        return $this;
    }

    /**
    * Gets columns
    *  单元格列信息，列表形式。多个连续值表示单元格垮多列。
    *
    * @return int[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param int[]|null $columns 单元格列信息，列表形式。多个连续值表示单元格垮多列。
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets cellLocation
    *  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getCellLocation()
    {
        return $this->container['cellLocation'];
    }

    /**
    * Sets cellLocation
    *
    * @param int[][]|null $cellLocation 单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setCellLocation($cellLocation)
    {
        $this->container['cellLocation'] = $cellLocation;
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

