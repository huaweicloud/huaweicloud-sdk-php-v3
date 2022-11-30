<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FinancialStatementWordsRegionList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FinancialStatementWordsRegionList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  区域属性：文本或表格。
    * wordsBlockCount  区域内文字块数目。对文本区，文字块以文本字段为单位；对表格区，文字块以单元格内所有字段为单位。
    * tableLocation  表格位置信息，列表形式，分别表示表格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * wordsBlockList  区域内文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'wordsBlockCount' => 'float',
            'tableLocation' => 'int[][]',
            'wordsBlockList' => '\HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementWordsBlockList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  区域属性：文本或表格。
    * wordsBlockCount  区域内文字块数目。对文本区，文字块以文本字段为单位；对表格区，文字块以单元格内所有字段为单位。
    * tableLocation  表格位置信息，列表形式，分别表示表格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * wordsBlockList  区域内文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'wordsBlockCount' => 'float',
        'tableLocation' => 'int32',
        'wordsBlockList' => null
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
    * type  区域属性：文本或表格。
    * wordsBlockCount  区域内文字块数目。对文本区，文字块以文本字段为单位；对表格区，文字块以单元格内所有字段为单位。
    * tableLocation  表格位置信息，列表形式，分别表示表格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * wordsBlockList  区域内文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'wordsBlockCount' => 'words_block_count',
            'tableLocation' => 'table_location',
            'wordsBlockList' => 'words_block_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  区域属性：文本或表格。
    * wordsBlockCount  区域内文字块数目。对文本区，文字块以文本字段为单位；对表格区，文字块以单元格内所有字段为单位。
    * tableLocation  表格位置信息，列表形式，分别表示表格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * wordsBlockList  区域内文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'wordsBlockCount' => 'setWordsBlockCount',
            'tableLocation' => 'setTableLocation',
            'wordsBlockList' => 'setWordsBlockList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  区域属性：文本或表格。
    * wordsBlockCount  区域内文字块数目。对文本区，文字块以文本字段为单位；对表格区，文字块以单元格内所有字段为单位。
    * tableLocation  表格位置信息，列表形式，分别表示表格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * wordsBlockList  区域内文字块列表，输出顺序从左到右，从上到下。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'wordsBlockCount' => 'getWordsBlockCount',
            'tableLocation' => 'getTableLocation',
            'wordsBlockList' => 'getWordsBlockList'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['wordsBlockCount'] = isset($data['wordsBlockCount']) ? $data['wordsBlockCount'] : null;
        $this->container['tableLocation'] = isset($data['tableLocation']) ? $data['tableLocation'] : null;
        $this->container['wordsBlockList'] = isset($data['wordsBlockList']) ? $data['wordsBlockList'] : null;
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
    * Gets type
    *  区域属性：文本或表格。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 区域属性：文本或表格。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets wordsBlockCount
    *  区域内文字块数目。对文本区，文字块以文本字段为单位；对表格区，文字块以单元格内所有字段为单位。
    *
    * @return float|null
    */
    public function getWordsBlockCount()
    {
        return $this->container['wordsBlockCount'];
    }

    /**
    * Sets wordsBlockCount
    *
    * @param float|null $wordsBlockCount 区域内文字块数目。对文本区，文字块以文本字段为单位；对表格区，文字块以单元格内所有字段为单位。
    *
    * @return $this
    */
    public function setWordsBlockCount($wordsBlockCount)
    {
        $this->container['wordsBlockCount'] = $wordsBlockCount;
        return $this;
    }

    /**
    * Gets tableLocation
    *  表格位置信息，列表形式，分别表示表格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getTableLocation()
    {
        return $this->container['tableLocation'];
    }

    /**
    * Sets tableLocation
    *
    * @param int[][]|null $tableLocation 表格位置信息，列表形式，分别表示表格4个顶点的x, y坐标;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setTableLocation($tableLocation)
    {
        $this->container['tableLocation'] = $tableLocation;
        return $this;
    }

    /**
    * Gets wordsBlockList
    *  区域内文字块列表，输出顺序从左到右，从上到下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementWordsBlockList[]|null
    */
    public function getWordsBlockList()
    {
        return $this->container['wordsBlockList'];
    }

    /**
    * Sets wordsBlockList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementWordsBlockList[]|null $wordsBlockList 区域内文字块列表，输出顺序从左到右，从上到下。
    *
    * @return $this
    */
    public function setWordsBlockList($wordsBlockList)
    {
        $this->container['wordsBlockList'] = $wordsBlockList;
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

