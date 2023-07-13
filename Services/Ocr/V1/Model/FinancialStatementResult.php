<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FinancialStatementResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FinancialStatementResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * wordsRegionCount  识别出来的表格、文本区域个数。
    * wordsRegionList  返回的表格、文本区域列表。输出顺序从左到右，从上到下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel，可编辑。对返回的excel编码，可用base64.b64decode解码并保存为xlsx文件。
    * imageSize  imageSize
    * rectificationMatrix  返回透视变换矩阵
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'wordsRegionCount' => 'int',
            'wordsRegionList' => '\HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementWordsRegionList[]',
            'excel' => 'string',
            'imageSize' => '\HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementResultImageSize',
            'rectificationMatrix' => 'float[][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * wordsRegionCount  识别出来的表格、文本区域个数。
    * wordsRegionList  返回的表格、文本区域列表。输出顺序从左到右，从上到下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel，可编辑。对返回的excel编码，可用base64.b64decode解码并保存为xlsx文件。
    * imageSize  imageSize
    * rectificationMatrix  返回透视变换矩阵
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'wordsRegionCount' => 'int32',
        'wordsRegionList' => null,
        'excel' => null,
        'imageSize' => null,
        'rectificationMatrix' => 'float'
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
    * wordsRegionCount  识别出来的表格、文本区域个数。
    * wordsRegionList  返回的表格、文本区域列表。输出顺序从左到右，从上到下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel，可编辑。对返回的excel编码，可用base64.b64decode解码并保存为xlsx文件。
    * imageSize  imageSize
    * rectificationMatrix  返回透视变换矩阵
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'wordsRegionCount' => 'words_region_count',
            'wordsRegionList' => 'words_region_list',
            'excel' => 'excel',
            'imageSize' => 'image_size',
            'rectificationMatrix' => 'rectification_matrix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * wordsRegionCount  识别出来的表格、文本区域个数。
    * wordsRegionList  返回的表格、文本区域列表。输出顺序从左到右，从上到下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel，可编辑。对返回的excel编码，可用base64.b64decode解码并保存为xlsx文件。
    * imageSize  imageSize
    * rectificationMatrix  返回透视变换矩阵
    *
    * @var string[]
    */
    protected static $setters = [
            'wordsRegionCount' => 'setWordsRegionCount',
            'wordsRegionList' => 'setWordsRegionList',
            'excel' => 'setExcel',
            'imageSize' => 'setImageSize',
            'rectificationMatrix' => 'setRectificationMatrix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * wordsRegionCount  识别出来的表格、文本区域个数。
    * wordsRegionList  返回的表格、文本区域列表。输出顺序从左到右，从上到下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel，可编辑。对返回的excel编码，可用base64.b64decode解码并保存为xlsx文件。
    * imageSize  imageSize
    * rectificationMatrix  返回透视变换矩阵
    *
    * @var string[]
    */
    protected static $getters = [
            'wordsRegionCount' => 'getWordsRegionCount',
            'wordsRegionList' => 'getWordsRegionList',
            'excel' => 'getExcel',
            'imageSize' => 'getImageSize',
            'rectificationMatrix' => 'getRectificationMatrix'
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
        $this->container['wordsRegionCount'] = isset($data['wordsRegionCount']) ? $data['wordsRegionCount'] : null;
        $this->container['wordsRegionList'] = isset($data['wordsRegionList']) ? $data['wordsRegionList'] : null;
        $this->container['excel'] = isset($data['excel']) ? $data['excel'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['rectificationMatrix'] = isset($data['rectificationMatrix']) ? $data['rectificationMatrix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['wordsRegionCount'] === null) {
            $invalidProperties[] = "'wordsRegionCount' can't be null";
        }
        if ($this->container['wordsRegionList'] === null) {
            $invalidProperties[] = "'wordsRegionList' can't be null";
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
    * Gets wordsRegionCount
    *  识别出来的表格、文本区域个数。
    *
    * @return int
    */
    public function getWordsRegionCount()
    {
        return $this->container['wordsRegionCount'];
    }

    /**
    * Sets wordsRegionCount
    *
    * @param int $wordsRegionCount 识别出来的表格、文本区域个数。
    *
    * @return $this
    */
    public function setWordsRegionCount($wordsRegionCount)
    {
        $this->container['wordsRegionCount'] = $wordsRegionCount;
        return $this;
    }

    /**
    * Gets wordsRegionList
    *  返回的表格、文本区域列表。输出顺序从左到右，从上到下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementWordsRegionList[]
    */
    public function getWordsRegionList()
    {
        return $this->container['wordsRegionList'];
    }

    /**
    * Sets wordsRegionList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementWordsRegionList[] $wordsRegionList 返回的表格、文本区域列表。输出顺序从左到右，从上到下。
    *
    * @return $this
    */
    public function setWordsRegionList($wordsRegionList)
    {
        $this->container['wordsRegionList'] = $wordsRegionList;
        return $this;
    }

    /**
    * Gets excel
    *  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel，可编辑。对返回的excel编码，可用base64.b64decode解码并保存为xlsx文件。
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
    * @param string|null $excel 表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel，可编辑。对返回的excel编码，可用base64.b64decode解码并保存为xlsx文件。
    *
    * @return $this
    */
    public function setExcel($excel)
    {
        $this->container['excel'] = $excel;
        return $this;
    }

    /**
    * Gets imageSize
    *  imageSize
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementResultImageSize|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\FinancialStatementResultImageSize|null $imageSize imageSize
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets rectificationMatrix
    *  返回透视变换矩阵
    *
    * @return float[][]|null
    */
    public function getRectificationMatrix()
    {
        return $this->container['rectificationMatrix'];
    }

    /**
    * Sets rectificationMatrix
    *
    * @param float[][]|null $rectificationMatrix 返回透视变换矩阵
    *
    * @return $this
    */
    public function setRectificationMatrix($rectificationMatrix)
    {
        $this->container['rectificationMatrix'] = $rectificationMatrix;
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

