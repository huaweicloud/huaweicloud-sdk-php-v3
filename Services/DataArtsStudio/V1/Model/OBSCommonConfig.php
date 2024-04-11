<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OBSCommonConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OBSCommonConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnMap  Map<String, String>结构
    * path  路径
    * delimiter  分隔符
    * quote  引用
    * escape  规避
    * header  是否是标头
    * dataType  数据类型
    * dateFormat  数据格式
    * timestampFormat  时间格式
    * nullValue  为空时默认值
    * comment  注解
    * parseMode  解析模式
    * joinTable  联表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnMap' => 'object',
            'path' => 'string',
            'delimiter' => 'string',
            'quote' => 'string',
            'escape' => 'string',
            'header' => 'bool',
            'dataType' => 'string',
            'dateFormat' => 'string',
            'timestampFormat' => 'string',
            'nullValue' => 'string',
            'comment' => 'string',
            'parseMode' => 'string',
            'joinTable' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnMap  Map<String, String>结构
    * path  路径
    * delimiter  分隔符
    * quote  引用
    * escape  规避
    * header  是否是标头
    * dataType  数据类型
    * dateFormat  数据格式
    * timestampFormat  时间格式
    * nullValue  为空时默认值
    * comment  注解
    * parseMode  解析模式
    * joinTable  联表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnMap' => null,
        'path' => null,
        'delimiter' => null,
        'quote' => null,
        'escape' => null,
        'header' => null,
        'dataType' => null,
        'dateFormat' => null,
        'timestampFormat' => null,
        'nullValue' => null,
        'comment' => null,
        'parseMode' => null,
        'joinTable' => null
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
    * columnMap  Map<String, String>结构
    * path  路径
    * delimiter  分隔符
    * quote  引用
    * escape  规避
    * header  是否是标头
    * dataType  数据类型
    * dateFormat  数据格式
    * timestampFormat  时间格式
    * nullValue  为空时默认值
    * comment  注解
    * parseMode  解析模式
    * joinTable  联表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnMap' => 'column_map',
            'path' => 'path',
            'delimiter' => 'delimiter',
            'quote' => 'quote',
            'escape' => 'escape',
            'header' => 'header',
            'dataType' => 'data_type',
            'dateFormat' => 'date_format',
            'timestampFormat' => 'timestamp_format',
            'nullValue' => 'null_value',
            'comment' => 'comment',
            'parseMode' => 'parse_mode',
            'joinTable' => 'join_table'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnMap  Map<String, String>结构
    * path  路径
    * delimiter  分隔符
    * quote  引用
    * escape  规避
    * header  是否是标头
    * dataType  数据类型
    * dateFormat  数据格式
    * timestampFormat  时间格式
    * nullValue  为空时默认值
    * comment  注解
    * parseMode  解析模式
    * joinTable  联表
    *
    * @var string[]
    */
    protected static $setters = [
            'columnMap' => 'setColumnMap',
            'path' => 'setPath',
            'delimiter' => 'setDelimiter',
            'quote' => 'setQuote',
            'escape' => 'setEscape',
            'header' => 'setHeader',
            'dataType' => 'setDataType',
            'dateFormat' => 'setDateFormat',
            'timestampFormat' => 'setTimestampFormat',
            'nullValue' => 'setNullValue',
            'comment' => 'setComment',
            'parseMode' => 'setParseMode',
            'joinTable' => 'setJoinTable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnMap  Map<String, String>结构
    * path  路径
    * delimiter  分隔符
    * quote  引用
    * escape  规避
    * header  是否是标头
    * dataType  数据类型
    * dateFormat  数据格式
    * timestampFormat  时间格式
    * nullValue  为空时默认值
    * comment  注解
    * parseMode  解析模式
    * joinTable  联表
    *
    * @var string[]
    */
    protected static $getters = [
            'columnMap' => 'getColumnMap',
            'path' => 'getPath',
            'delimiter' => 'getDelimiter',
            'quote' => 'getQuote',
            'escape' => 'getEscape',
            'header' => 'getHeader',
            'dataType' => 'getDataType',
            'dateFormat' => 'getDateFormat',
            'timestampFormat' => 'getTimestampFormat',
            'nullValue' => 'getNullValue',
            'comment' => 'getComment',
            'parseMode' => 'getParseMode',
            'joinTable' => 'getJoinTable'
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
        $this->container['columnMap'] = isset($data['columnMap']) ? $data['columnMap'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['escape'] = isset($data['escape']) ? $data['escape'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : null;
        $this->container['timestampFormat'] = isset($data['timestampFormat']) ? $data['timestampFormat'] : null;
        $this->container['nullValue'] = isset($data['nullValue']) ? $data['nullValue'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['parseMode'] = isset($data['parseMode']) ? $data['parseMode'] : null;
        $this->container['joinTable'] = isset($data['joinTable']) ? $data['joinTable'] : null;
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
    * Gets columnMap
    *  Map<String, String>结构
    *
    * @return object|null
    */
    public function getColumnMap()
    {
        return $this->container['columnMap'];
    }

    /**
    * Sets columnMap
    *
    * @param object|null $columnMap Map<String, String>结构
    *
    * @return $this
    */
    public function setColumnMap($columnMap)
    {
        $this->container['columnMap'] = $columnMap;
        return $this;
    }

    /**
    * Gets path
    *  路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets delimiter
    *  分隔符
    *
    * @return string|null
    */
    public function getDelimiter()
    {
        return $this->container['delimiter'];
    }

    /**
    * Sets delimiter
    *
    * @param string|null $delimiter 分隔符
    *
    * @return $this
    */
    public function setDelimiter($delimiter)
    {
        $this->container['delimiter'] = $delimiter;
        return $this;
    }

    /**
    * Gets quote
    *  引用
    *
    * @return string|null
    */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
    * Sets quote
    *
    * @param string|null $quote 引用
    *
    * @return $this
    */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;
        return $this;
    }

    /**
    * Gets escape
    *  规避
    *
    * @return string|null
    */
    public function getEscape()
    {
        return $this->container['escape'];
    }

    /**
    * Sets escape
    *
    * @param string|null $escape 规避
    *
    * @return $this
    */
    public function setEscape($escape)
    {
        $this->container['escape'] = $escape;
        return $this;
    }

    /**
    * Gets header
    *  是否是标头
    *
    * @return bool|null
    */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
    * Sets header
    *
    * @param bool|null $header 是否是标头
    *
    * @return $this
    */
    public function setHeader($header)
    {
        $this->container['header'] = $header;
        return $this;
    }

    /**
    * Gets dataType
    *  数据类型
    *
    * @return string|null
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string|null $dataType 数据类型
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets dateFormat
    *  数据格式
    *
    * @return string|null
    */
    public function getDateFormat()
    {
        return $this->container['dateFormat'];
    }

    /**
    * Sets dateFormat
    *
    * @param string|null $dateFormat 数据格式
    *
    * @return $this
    */
    public function setDateFormat($dateFormat)
    {
        $this->container['dateFormat'] = $dateFormat;
        return $this;
    }

    /**
    * Gets timestampFormat
    *  时间格式
    *
    * @return string|null
    */
    public function getTimestampFormat()
    {
        return $this->container['timestampFormat'];
    }

    /**
    * Sets timestampFormat
    *
    * @param string|null $timestampFormat 时间格式
    *
    * @return $this
    */
    public function setTimestampFormat($timestampFormat)
    {
        $this->container['timestampFormat'] = $timestampFormat;
        return $this;
    }

    /**
    * Gets nullValue
    *  为空时默认值
    *
    * @return string|null
    */
    public function getNullValue()
    {
        return $this->container['nullValue'];
    }

    /**
    * Sets nullValue
    *
    * @param string|null $nullValue 为空时默认值
    *
    * @return $this
    */
    public function setNullValue($nullValue)
    {
        $this->container['nullValue'] = $nullValue;
        return $this;
    }

    /**
    * Gets comment
    *  注解
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 注解
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets parseMode
    *  解析模式
    *
    * @return string|null
    */
    public function getParseMode()
    {
        return $this->container['parseMode'];
    }

    /**
    * Sets parseMode
    *
    * @param string|null $parseMode 解析模式
    *
    * @return $this
    */
    public function setParseMode($parseMode)
    {
        $this->container['parseMode'] = $parseMode;
        return $this;
    }

    /**
    * Gets joinTable
    *  联表
    *
    * @return string|null
    */
    public function getJoinTable()
    {
        return $this->container['joinTable'];
    }

    /**
    * Sets joinTable
    *
    * @param string|null $joinTable 联表
    *
    * @return $this
    */
    public function setJoinTable($joinTable)
    {
        $this->container['joinTable'] = $joinTable;
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

