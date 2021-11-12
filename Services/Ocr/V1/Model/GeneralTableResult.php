<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralTableResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralTableResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * wordsRegionCount  文字区域数目。
    * wordsRegionList  文字区域识别结果列表，输出顺序从左到右，先上后下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'wordsRegionCount' => 'int',
            'wordsRegionList' => '\HuaweiCloud\SDK\Ocr\V1\Model\WordsRegionList[]',
            'excel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * wordsRegionCount  文字区域数目。
    * wordsRegionList  文字区域识别结果列表，输出顺序从左到右，先上后下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'wordsRegionCount' => 'int32',
        'wordsRegionList' => null,
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
    * wordsRegionCount  文字区域数目。
    * wordsRegionList  文字区域识别结果列表，输出顺序从左到右，先上后下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'wordsRegionCount' => 'words_region_count',
            'wordsRegionList' => 'words_region_list',
            'excel' => 'excel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * wordsRegionCount  文字区域数目。
    * wordsRegionList  文字区域识别结果列表，输出顺序从左到右，先上后下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $setters = [
            'wordsRegionCount' => 'setWordsRegionCount',
            'wordsRegionList' => 'setWordsRegionList',
            'excel' => 'setExcel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * wordsRegionCount  文字区域数目。
    * wordsRegionList  文字区域识别结果列表，输出顺序从左到右，先上后下。
    * excel  表格图像转换为excel的base64编码，图像中的文字和表格按位置写入excel。对返回的excel编码可用base64.b64decode解码并保存为.xlsx文件。
    *
    * @var string[]
    */
    protected static $getters = [
            'wordsRegionCount' => 'getWordsRegionCount',
            'wordsRegionList' => 'getWordsRegionList',
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
        $this->container['wordsRegionCount'] = isset($data['wordsRegionCount']) ? $data['wordsRegionCount'] : null;
        $this->container['wordsRegionList'] = isset($data['wordsRegionList']) ? $data['wordsRegionList'] : null;
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
    *  文字区域数目。
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
    * @param int $wordsRegionCount 文字区域数目。
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
    *  文字区域识别结果列表，输出顺序从左到右，先上后下。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\WordsRegionList[]
    */
    public function getWordsRegionList()
    {
        return $this->container['wordsRegionList'];
    }

    /**
    * Sets wordsRegionList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\WordsRegionList[] $wordsRegionList 文字区域识别结果列表，输出顺序从左到右，先上后下。
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

