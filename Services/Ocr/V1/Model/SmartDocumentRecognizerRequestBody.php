<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmartDocumentRecognizerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmartDocumentRecognizerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => 'string',
            'url' => 'string',
            'kv' => 'bool',
            'table' => 'bool',
            'layout' => 'bool',
            'returnExcel' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => null,
        'url' => null,
        'kv' => null,
        'table' => null,
        'layout' => null,
        'returnExcel' => null
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
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'url' => 'url',
            'kv' => 'kv',
            'table' => 'table',
            'layout' => 'layout',
            'returnExcel' => 'return_excel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'url' => 'setUrl',
            'kv' => 'setKv',
            'table' => 'setTable',
            'layout' => 'setLayout',
            'returnExcel' => 'setReturnExcel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    * url  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * kv  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    * table  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    * layout  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    * returnExcel  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'url' => 'getUrl',
            'kv' => 'getKv',
            'table' => 'getTable',
            'layout' => 'getLayout',
            'returnExcel' => 'getReturnExcel'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['kv'] = isset($data['kv']) ? $data['kv'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['layout'] = isset($data['layout']) ? $data['layout'] : null;
        $this->container['returnExcel'] = isset($data['returnExcel']) ? $data['returnExcel'] : null;
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
    * Gets data
    *  与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    *
    * @return string|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param string|null $data 与url二选一。图片或PDF格式，base64编码，要求base64编码后大小不超过10M。 图像尺寸不小于15×15像素，最长边不超过8192像素，支持JPG/PNG/BMP/TIFF格式。 PDF以144dpi的分辨率转为图像进行文档解析，需符合上述图像尺寸规定。若PDF有多页，当前仅对第1页进行识别。
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets url
    *  与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 与data二选一。 图片或PDF的URL路径，目前仅支持华为云上OBS提供的匿名公开授权访问的URL以及公网URL。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets kv
    *  是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    *
    * @return bool|null
    */
    public function getKv()
    {
        return $this->container['kv'];
    }

    /**
    * Sets kv
    *
    * @param bool|null $kv 是否进行键值对（key-value）提取。若是，结果会以“kv_result”这一关键字返回。
    *
    * @return $this
    */
    public function setKv($kv)
    {
        $this->container['kv'] = $kv;
        return $this;
    }

    /**
    * Gets table
    *  是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    *
    * @return bool|null
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param bool|null $table 是否进行表格识别。此处表格特指逻辑表格，通常具有M行N列的形式，且第一行或第一列为表头。若是，结果会以“table_result”这一关键字返回。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets layout
    *  是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    *
    * @return bool|null
    */
    public function getLayout()
    {
        return $this->container['layout'];
    }

    /**
    * Sets layout
    *
    * @param bool|null $layout 是否进行版面分析。若是，结果会以“layout_result”这一关键字返回。
    *
    * @return $this
    */
    public function setLayout($layout)
    {
        $this->container['layout'] = $layout;
        return $this;
    }

    /**
    * Gets returnExcel
    *  仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @return bool|null
    */
    public function getReturnExcel()
    {
        return $this->container['returnExcel'];
    }

    /**
    * Sets returnExcel
    *
    * @param bool|null $returnExcel 仅当table为True时有效。是否返回表格转换Microsoft Excel的Base64编码字段。
    *
    * @return $this
    */
    public function setReturnExcel($returnExcel)
    {
        $this->container['returnExcel'] = $returnExcel;
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

