<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralTableWordsBlockList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralTableWordsBlockList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * words  文字块识别结果。
    * wordsList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"为true时存在。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'words' => 'string',
            'wordsList' => 'object[]',
            'rows' => 'int[]',
            'columns' => 'int[]',
            'location' => 'int[][]',
            'cellLocation' => 'int[][]',
            'confidence' => 'float',
            'excel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * words  文字块识别结果。
    * wordsList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"为true时存在。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'words' => null,
        'wordsList' => null,
        'rows' => 'int32',
        'columns' => 'int32',
        'location' => 'int32',
        'cellLocation' => 'int32',
        'confidence' => 'float',
        'excel' => null
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
    * wordsList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"为true时存在。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'words' => 'words',
            'wordsList' => 'words_list',
            'rows' => 'rows',
            'columns' => 'columns',
            'location' => 'location',
            'cellLocation' => 'cell_location',
            'confidence' => 'confidence',
            'excel' => 'excel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * words  文字块识别结果。
    * wordsList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"为true时存在。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $setters = [
            'words' => 'setWords',
            'wordsList' => 'setWordsList',
            'rows' => 'setRows',
            'columns' => 'setColumns',
            'location' => 'setLocation',
            'cellLocation' => 'setCellLocation',
            'confidence' => 'setConfidence',
            'excel' => 'setExcel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * words  文字块识别结果。
    * wordsList  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"为true时存在。
    * rows  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * columns  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    * location  文字块位置信息，列表形式，分别表示文字块4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * cellLocation  单元格位置信息，列表形式，分别表示单元格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * confidence  字段的平均置信度，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。置信度由算法给出，不直接等价于对应字段的准确率。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $getters = [
            'words' => 'getWords',
            'wordsList' => 'getWordsList',
            'rows' => 'getRows',
            'columns' => 'getColumns',
            'location' => 'getLocation',
            'cellLocation' => 'getCellLocation',
            'confidence' => 'getConfidence',
            'excel' => 'getExcel'
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
        $this->container['wordsList'] = isset($data['wordsList']) ? $data['wordsList'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['cellLocation'] = isset($data['cellLocation']) ? $data['cellLocation'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['excel'] = isset($data['excel']) ? $data['excel'] : null;
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
        if ($this->container['rows'] === null) {
            $invalidProperties[] = "'rows' can't be null";
        }
        if ($this->container['columns'] === null) {
            $invalidProperties[] = "'columns' can't be null";
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
    * Gets wordsList
    *  单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"为true时存在。
    *
    * @return object[]|null
    */
    public function getWordsList()
    {
        return $this->container['wordsList'];
    }

    /**
    * Sets wordsList
    *
    * @param object[]|null $wordsList 单元格内文字段列表。输出顺序从左到右，从上到下。仅当入参\"return_text_location\"为true时存在。
    *
    * @return $this
    */
    public function setWordsList($wordsList)
    {
        $this->container['wordsList'] = $wordsList;
        return $this;
    }

    /**
    * Gets rows
    *  文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    *
    * @return int[]
    */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
    * Sets rows
    *
    * @param int[] $rows 文字块占用的行信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
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
    *  文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    *
    * @return int[]
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param int[] $columns 文字块占用的列信息，编号从0开始，列表形式，数据类型为Integer。仅在表格区域内有效，即type字段为\"table\"时该字段有效。
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
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
    * Gets excel
    *  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @return string|null
    */
    public function getExcel()
    {
        return $this->container['excel'];
    }

    /**
    * Sets excel
    *
    * @param string|null $excel 表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @return $this
    */
    public function setExcel($excel)
    {
        $this->container['excel'] = $excel;
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

