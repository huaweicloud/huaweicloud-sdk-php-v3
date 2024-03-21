<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerLayoutBlock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerLayoutBlock';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  文档区域类别，包含text、table、figure等类别。
    * text  文档区域文字内容。对于表格与图像，不返回其中的文字内容。
    * wordsIds  文字识别结果索引列表，表示ocr_result的words_block_list中哪些文本框位于该文档区域内。
    * tableId  仅当type为\"table\"且入参table为True时返回该字段，表示当前逻辑表格区域对应table_result中哪一项识别结果。
    * formId  仅当type为\"form\"且入参form为True时返回该字段，表示当前有线表单区域对应form_result中哪一项识别结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'location' => 'int[][]',
            'type' => 'string',
            'text' => 'string',
            'wordsIds' => 'int[]',
            'tableId' => 'int',
            'formId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  文档区域类别，包含text、table、figure等类别。
    * text  文档区域文字内容。对于表格与图像，不返回其中的文字内容。
    * wordsIds  文字识别结果索引列表，表示ocr_result的words_block_list中哪些文本框位于该文档区域内。
    * tableId  仅当type为\"table\"且入参table为True时返回该字段，表示当前逻辑表格区域对应table_result中哪一项识别结果。
    * formId  仅当type为\"form\"且入参form为True时返回该字段，表示当前有线表单区域对应form_result中哪一项识别结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'location' => 'int32',
        'type' => null,
        'text' => null,
        'wordsIds' => 'int32',
        'tableId' => 'int32',
        'formId' => 'int32'
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
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  文档区域类别，包含text、table、figure等类别。
    * text  文档区域文字内容。对于表格与图像，不返回其中的文字内容。
    * wordsIds  文字识别结果索引列表，表示ocr_result的words_block_list中哪些文本框位于该文档区域内。
    * tableId  仅当type为\"table\"且入参table为True时返回该字段，表示当前逻辑表格区域对应table_result中哪一项识别结果。
    * formId  仅当type为\"form\"且入参form为True时返回该字段，表示当前有线表单区域对应form_result中哪一项识别结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'location' => 'location',
            'type' => 'type',
            'text' => 'text',
            'wordsIds' => 'words_ids',
            'tableId' => 'table_id',
            'formId' => 'form_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  文档区域类别，包含text、table、figure等类别。
    * text  文档区域文字内容。对于表格与图像，不返回其中的文字内容。
    * wordsIds  文字识别结果索引列表，表示ocr_result的words_block_list中哪些文本框位于该文档区域内。
    * tableId  仅当type为\"table\"且入参table为True时返回该字段，表示当前逻辑表格区域对应table_result中哪一项识别结果。
    * formId  仅当type为\"form\"且入参form为True时返回该字段，表示当前有线表单区域对应form_result中哪一项识别结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'location' => 'setLocation',
            'type' => 'setType',
            'text' => 'setText',
            'wordsIds' => 'setWordsIds',
            'tableId' => 'setTableId',
            'formId' => 'setFormId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * type  文档区域类别，包含text、table、figure等类别。
    * text  文档区域文字内容。对于表格与图像，不返回其中的文字内容。
    * wordsIds  文字识别结果索引列表，表示ocr_result的words_block_list中哪些文本框位于该文档区域内。
    * tableId  仅当type为\"table\"且入参table为True时返回该字段，表示当前逻辑表格区域对应table_result中哪一项识别结果。
    * formId  仅当type为\"form\"且入参form为True时返回该字段，表示当前有线表单区域对应form_result中哪一项识别结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'location' => 'getLocation',
            'type' => 'getType',
            'text' => 'getText',
            'wordsIds' => 'getWordsIds',
            'tableId' => 'getTableId',
            'formId' => 'getFormId'
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
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['wordsIds'] = isset($data['wordsIds']) ? $data['wordsIds'] : null;
        $this->container['tableId'] = isset($data['tableId']) ? $data['tableId'] : null;
        $this->container['formId'] = isset($data['formId']) ? $data['formId'] : null;
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
    * Gets location
    *  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
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
    * @param int[][]|null $location 文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets type
    *  文档区域类别，包含text、table、figure等类别。
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
    * @param string|null $type 文档区域类别，包含text、table、figure等类别。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets text
    *  文档区域文字内容。对于表格与图像，不返回其中的文字内容。
    *
    * @return string|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param string|null $text 文档区域文字内容。对于表格与图像，不返回其中的文字内容。
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets wordsIds
    *  文字识别结果索引列表，表示ocr_result的words_block_list中哪些文本框位于该文档区域内。
    *
    * @return int[]|null
    */
    public function getWordsIds()
    {
        return $this->container['wordsIds'];
    }

    /**
    * Sets wordsIds
    *
    * @param int[]|null $wordsIds 文字识别结果索引列表，表示ocr_result的words_block_list中哪些文本框位于该文档区域内。
    *
    * @return $this
    */
    public function setWordsIds($wordsIds)
    {
        $this->container['wordsIds'] = $wordsIds;
        return $this;
    }

    /**
    * Gets tableId
    *  仅当type为\"table\"且入参table为True时返回该字段，表示当前逻辑表格区域对应table_result中哪一项识别结果。
    *
    * @return int|null
    */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
    * Sets tableId
    *
    * @param int|null $tableId 仅当type为\"table\"且入参table为True时返回该字段，表示当前逻辑表格区域对应table_result中哪一项识别结果。
    *
    * @return $this
    */
    public function setTableId($tableId)
    {
        $this->container['tableId'] = $tableId;
        return $this;
    }

    /**
    * Gets formId
    *  仅当type为\"form\"且入参form为True时返回该字段，表示当前有线表单区域对应form_result中哪一项识别结果。
    *
    * @return int|null
    */
    public function getFormId()
    {
        return $this->container['formId'];
    }

    /**
    * Sets formId
    *
    * @param int|null $formId 仅当type为\"form\"且入参form为True时返回该字段，表示当前有线表单区域对应form_result中哪一项识别结果。
    *
    * @return $this
    */
    public function setFormId($formId)
    {
        $this->container['formId'] = $formId;
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

