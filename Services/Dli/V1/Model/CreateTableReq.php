<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTableReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTableReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  新增表名称。
    * dataLocation  数据存储的地方，分VIEW视图，OBS表和DLI表。
    * description  新增表的描述信息。
    * columns  OBS表和DLI表必选参数。新增表的列。
    * dataType  OBS表必选参数。新增OBS表数据的类型，目前支持：Parquet、ORC、CSV、JSON、Carbon和Avro格式。
    * dataPath  OBS表必选参数。新增OBS表数据的存储路径，必须是OBS上的路径，以s3a开头。
    * withColumnHeader  OBS表非必选参数。OBS表数据是否包含表头。只有CSV类型数据具有该属性。
    * delimiter  OBS表非必选参数。用户自定义数据分隔符。只有CSV类型数据具有该属性。
    * quoteChar  OBS表非必选参数。用户自定义引用字符，默认为双引号（即“\\\"”）。只有CSV类型数据具有该属性。
    * escapeChar  OBS表非必选参数。用户自定义转义字符，默认为反斜杠（即\"\\\\\"）。只有CSV类型数据具有该属性。
    * dateFormat  OBS表非必选参数。用户自定义日期类型，默认格式为“yyyy-MM-dd”。只有CSV和JSON类型数据具有该属性。
    * timestampFormat  OBS表非必选参数。用户自定义时间类型。默认格式为“yyyy-MM-dd HH:mm:ss”。只有CSV和JSON类型数据具有该属性。
    * selectStatement  VIEW视图必选参数，创建视图时的数据选择语句。语句中涉及表需要使用“表=库名.表名”的格式
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'dataLocation' => 'string',
            'description' => 'string',
            'columns' => '\HuaweiCloud\SDK\Dli\V1\Model\CreateTableReqColumn[]',
            'dataType' => 'string',
            'dataPath' => 'string',
            'withColumnHeader' => 'bool',
            'delimiter' => 'string',
            'quoteChar' => 'string',
            'escapeChar' => 'string',
            'dateFormat' => 'string',
            'timestampFormat' => 'string',
            'selectStatement' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\TmsTagEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  新增表名称。
    * dataLocation  数据存储的地方，分VIEW视图，OBS表和DLI表。
    * description  新增表的描述信息。
    * columns  OBS表和DLI表必选参数。新增表的列。
    * dataType  OBS表必选参数。新增OBS表数据的类型，目前支持：Parquet、ORC、CSV、JSON、Carbon和Avro格式。
    * dataPath  OBS表必选参数。新增OBS表数据的存储路径，必须是OBS上的路径，以s3a开头。
    * withColumnHeader  OBS表非必选参数。OBS表数据是否包含表头。只有CSV类型数据具有该属性。
    * delimiter  OBS表非必选参数。用户自定义数据分隔符。只有CSV类型数据具有该属性。
    * quoteChar  OBS表非必选参数。用户自定义引用字符，默认为双引号（即“\\\"”）。只有CSV类型数据具有该属性。
    * escapeChar  OBS表非必选参数。用户自定义转义字符，默认为反斜杠（即\"\\\\\"）。只有CSV类型数据具有该属性。
    * dateFormat  OBS表非必选参数。用户自定义日期类型，默认格式为“yyyy-MM-dd”。只有CSV和JSON类型数据具有该属性。
    * timestampFormat  OBS表非必选参数。用户自定义时间类型。默认格式为“yyyy-MM-dd HH:mm:ss”。只有CSV和JSON类型数据具有该属性。
    * selectStatement  VIEW视图必选参数，创建视图时的数据选择语句。语句中涉及表需要使用“表=库名.表名”的格式
    * tags  标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'dataLocation' => null,
        'description' => null,
        'columns' => null,
        'dataType' => null,
        'dataPath' => null,
        'withColumnHeader' => null,
        'delimiter' => null,
        'quoteChar' => null,
        'escapeChar' => null,
        'dateFormat' => null,
        'timestampFormat' => null,
        'selectStatement' => null,
        'tags' => null
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
    * tableName  新增表名称。
    * dataLocation  数据存储的地方，分VIEW视图，OBS表和DLI表。
    * description  新增表的描述信息。
    * columns  OBS表和DLI表必选参数。新增表的列。
    * dataType  OBS表必选参数。新增OBS表数据的类型，目前支持：Parquet、ORC、CSV、JSON、Carbon和Avro格式。
    * dataPath  OBS表必选参数。新增OBS表数据的存储路径，必须是OBS上的路径，以s3a开头。
    * withColumnHeader  OBS表非必选参数。OBS表数据是否包含表头。只有CSV类型数据具有该属性。
    * delimiter  OBS表非必选参数。用户自定义数据分隔符。只有CSV类型数据具有该属性。
    * quoteChar  OBS表非必选参数。用户自定义引用字符，默认为双引号（即“\\\"”）。只有CSV类型数据具有该属性。
    * escapeChar  OBS表非必选参数。用户自定义转义字符，默认为反斜杠（即\"\\\\\"）。只有CSV类型数据具有该属性。
    * dateFormat  OBS表非必选参数。用户自定义日期类型，默认格式为“yyyy-MM-dd”。只有CSV和JSON类型数据具有该属性。
    * timestampFormat  OBS表非必选参数。用户自定义时间类型。默认格式为“yyyy-MM-dd HH:mm:ss”。只有CSV和JSON类型数据具有该属性。
    * selectStatement  VIEW视图必选参数，创建视图时的数据选择语句。语句中涉及表需要使用“表=库名.表名”的格式
    * tags  标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'dataLocation' => 'data_location',
            'description' => 'description',
            'columns' => 'columns',
            'dataType' => 'data_type',
            'dataPath' => 'data_path',
            'withColumnHeader' => 'with_column_header',
            'delimiter' => 'delimiter',
            'quoteChar' => 'quote_char',
            'escapeChar' => 'escape_char',
            'dateFormat' => 'date_format',
            'timestampFormat' => 'timestamp_format',
            'selectStatement' => 'select_statement',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  新增表名称。
    * dataLocation  数据存储的地方，分VIEW视图，OBS表和DLI表。
    * description  新增表的描述信息。
    * columns  OBS表和DLI表必选参数。新增表的列。
    * dataType  OBS表必选参数。新增OBS表数据的类型，目前支持：Parquet、ORC、CSV、JSON、Carbon和Avro格式。
    * dataPath  OBS表必选参数。新增OBS表数据的存储路径，必须是OBS上的路径，以s3a开头。
    * withColumnHeader  OBS表非必选参数。OBS表数据是否包含表头。只有CSV类型数据具有该属性。
    * delimiter  OBS表非必选参数。用户自定义数据分隔符。只有CSV类型数据具有该属性。
    * quoteChar  OBS表非必选参数。用户自定义引用字符，默认为双引号（即“\\\"”）。只有CSV类型数据具有该属性。
    * escapeChar  OBS表非必选参数。用户自定义转义字符，默认为反斜杠（即\"\\\\\"）。只有CSV类型数据具有该属性。
    * dateFormat  OBS表非必选参数。用户自定义日期类型，默认格式为“yyyy-MM-dd”。只有CSV和JSON类型数据具有该属性。
    * timestampFormat  OBS表非必选参数。用户自定义时间类型。默认格式为“yyyy-MM-dd HH:mm:ss”。只有CSV和JSON类型数据具有该属性。
    * selectStatement  VIEW视图必选参数，创建视图时的数据选择语句。语句中涉及表需要使用“表=库名.表名”的格式
    * tags  标签
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'dataLocation' => 'setDataLocation',
            'description' => 'setDescription',
            'columns' => 'setColumns',
            'dataType' => 'setDataType',
            'dataPath' => 'setDataPath',
            'withColumnHeader' => 'setWithColumnHeader',
            'delimiter' => 'setDelimiter',
            'quoteChar' => 'setQuoteChar',
            'escapeChar' => 'setEscapeChar',
            'dateFormat' => 'setDateFormat',
            'timestampFormat' => 'setTimestampFormat',
            'selectStatement' => 'setSelectStatement',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  新增表名称。
    * dataLocation  数据存储的地方，分VIEW视图，OBS表和DLI表。
    * description  新增表的描述信息。
    * columns  OBS表和DLI表必选参数。新增表的列。
    * dataType  OBS表必选参数。新增OBS表数据的类型，目前支持：Parquet、ORC、CSV、JSON、Carbon和Avro格式。
    * dataPath  OBS表必选参数。新增OBS表数据的存储路径，必须是OBS上的路径，以s3a开头。
    * withColumnHeader  OBS表非必选参数。OBS表数据是否包含表头。只有CSV类型数据具有该属性。
    * delimiter  OBS表非必选参数。用户自定义数据分隔符。只有CSV类型数据具有该属性。
    * quoteChar  OBS表非必选参数。用户自定义引用字符，默认为双引号（即“\\\"”）。只有CSV类型数据具有该属性。
    * escapeChar  OBS表非必选参数。用户自定义转义字符，默认为反斜杠（即\"\\\\\"）。只有CSV类型数据具有该属性。
    * dateFormat  OBS表非必选参数。用户自定义日期类型，默认格式为“yyyy-MM-dd”。只有CSV和JSON类型数据具有该属性。
    * timestampFormat  OBS表非必选参数。用户自定义时间类型。默认格式为“yyyy-MM-dd HH:mm:ss”。只有CSV和JSON类型数据具有该属性。
    * selectStatement  VIEW视图必选参数，创建视图时的数据选择语句。语句中涉及表需要使用“表=库名.表名”的格式
    * tags  标签
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'dataLocation' => 'getDataLocation',
            'description' => 'getDescription',
            'columns' => 'getColumns',
            'dataType' => 'getDataType',
            'dataPath' => 'getDataPath',
            'withColumnHeader' => 'getWithColumnHeader',
            'delimiter' => 'getDelimiter',
            'quoteChar' => 'getQuoteChar',
            'escapeChar' => 'getEscapeChar',
            'dateFormat' => 'getDateFormat',
            'timestampFormat' => 'getTimestampFormat',
            'selectStatement' => 'getSelectStatement',
            'tags' => 'getTags'
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
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['dataLocation'] = isset($data['dataLocation']) ? $data['dataLocation'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['dataPath'] = isset($data['dataPath']) ? $data['dataPath'] : null;
        $this->container['withColumnHeader'] = isset($data['withColumnHeader']) ? $data['withColumnHeader'] : null;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['quoteChar'] = isset($data['quoteChar']) ? $data['quoteChar'] : '\"';
        $this->container['escapeChar'] = isset($data['escapeChar']) ? $data['escapeChar'] : '\\';
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : 'yyyy/MM/dd';
        $this->container['timestampFormat'] = isset($data['timestampFormat']) ? $data['timestampFormat'] : null;
        $this->container['selectStatement'] = isset($data['selectStatement']) ? $data['selectStatement'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['dataLocation'] === null) {
            $invalidProperties[] = "'dataLocation' can't be null";
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
    * Gets tableName
    *  新增表名称。
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 新增表名称。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets dataLocation
    *  数据存储的地方，分VIEW视图，OBS表和DLI表。
    *
    * @return string
    */
    public function getDataLocation()
    {
        return $this->container['dataLocation'];
    }

    /**
    * Sets dataLocation
    *
    * @param string $dataLocation 数据存储的地方，分VIEW视图，OBS表和DLI表。
    *
    * @return $this
    */
    public function setDataLocation($dataLocation)
    {
        $this->container['dataLocation'] = $dataLocation;
        return $this;
    }

    /**
    * Gets description
    *  新增表的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 新增表的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets columns
    *  OBS表和DLI表必选参数。新增表的列。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\CreateTableReqColumn[]
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\CreateTableReqColumn[] $columns OBS表和DLI表必选参数。新增表的列。
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets dataType
    *  OBS表必选参数。新增OBS表数据的类型，目前支持：Parquet、ORC、CSV、JSON、Carbon和Avro格式。
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
    * @param string|null $dataType OBS表必选参数。新增OBS表数据的类型，目前支持：Parquet、ORC、CSV、JSON、Carbon和Avro格式。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets dataPath
    *  OBS表必选参数。新增OBS表数据的存储路径，必须是OBS上的路径，以s3a开头。
    *
    * @return string|null
    */
    public function getDataPath()
    {
        return $this->container['dataPath'];
    }

    /**
    * Sets dataPath
    *
    * @param string|null $dataPath OBS表必选参数。新增OBS表数据的存储路径，必须是OBS上的路径，以s3a开头。
    *
    * @return $this
    */
    public function setDataPath($dataPath)
    {
        $this->container['dataPath'] = $dataPath;
        return $this;
    }

    /**
    * Gets withColumnHeader
    *  OBS表非必选参数。OBS表数据是否包含表头。只有CSV类型数据具有该属性。
    *
    * @return bool|null
    */
    public function getWithColumnHeader()
    {
        return $this->container['withColumnHeader'];
    }

    /**
    * Sets withColumnHeader
    *
    * @param bool|null $withColumnHeader OBS表非必选参数。OBS表数据是否包含表头。只有CSV类型数据具有该属性。
    *
    * @return $this
    */
    public function setWithColumnHeader($withColumnHeader)
    {
        $this->container['withColumnHeader'] = $withColumnHeader;
        return $this;
    }

    /**
    * Gets delimiter
    *  OBS表非必选参数。用户自定义数据分隔符。只有CSV类型数据具有该属性。
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
    * @param string|null $delimiter OBS表非必选参数。用户自定义数据分隔符。只有CSV类型数据具有该属性。
    *
    * @return $this
    */
    public function setDelimiter($delimiter)
    {
        $this->container['delimiter'] = $delimiter;
        return $this;
    }

    /**
    * Gets quoteChar
    *  OBS表非必选参数。用户自定义引用字符，默认为双引号（即“\\\"”）。只有CSV类型数据具有该属性。
    *
    * @return string|null
    */
    public function getQuoteChar()
    {
        return $this->container['quoteChar'];
    }

    /**
    * Sets quoteChar
    *
    * @param string|null $quoteChar OBS表非必选参数。用户自定义引用字符，默认为双引号（即“\\\"”）。只有CSV类型数据具有该属性。
    *
    * @return $this
    */
    public function setQuoteChar($quoteChar)
    {
        $this->container['quoteChar'] = $quoteChar;
        return $this;
    }

    /**
    * Gets escapeChar
    *  OBS表非必选参数。用户自定义转义字符，默认为反斜杠（即\"\\\\\"）。只有CSV类型数据具有该属性。
    *
    * @return string|null
    */
    public function getEscapeChar()
    {
        return $this->container['escapeChar'];
    }

    /**
    * Sets escapeChar
    *
    * @param string|null $escapeChar OBS表非必选参数。用户自定义转义字符，默认为反斜杠（即\"\\\\\"）。只有CSV类型数据具有该属性。
    *
    * @return $this
    */
    public function setEscapeChar($escapeChar)
    {
        $this->container['escapeChar'] = $escapeChar;
        return $this;
    }

    /**
    * Gets dateFormat
    *  OBS表非必选参数。用户自定义日期类型，默认格式为“yyyy-MM-dd”。只有CSV和JSON类型数据具有该属性。
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
    * @param string|null $dateFormat OBS表非必选参数。用户自定义日期类型，默认格式为“yyyy-MM-dd”。只有CSV和JSON类型数据具有该属性。
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
    *  OBS表非必选参数。用户自定义时间类型。默认格式为“yyyy-MM-dd HH:mm:ss”。只有CSV和JSON类型数据具有该属性。
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
    * @param string|null $timestampFormat OBS表非必选参数。用户自定义时间类型。默认格式为“yyyy-MM-dd HH:mm:ss”。只有CSV和JSON类型数据具有该属性。
    *
    * @return $this
    */
    public function setTimestampFormat($timestampFormat)
    {
        $this->container['timestampFormat'] = $timestampFormat;
        return $this;
    }

    /**
    * Gets selectStatement
    *  VIEW视图必选参数，创建视图时的数据选择语句。语句中涉及表需要使用“表=库名.表名”的格式
    *
    * @return string|null
    */
    public function getSelectStatement()
    {
        return $this->container['selectStatement'];
    }

    /**
    * Sets selectStatement
    *
    * @param string|null $selectStatement VIEW视图必选参数，创建视图时的数据选择语句。语句中涉及表需要使用“表=库名.表名”的格式
    *
    * @return $this
    */
    public function setSelectStatement($selectStatement)
    {
        $this->container['selectStatement'] = $selectStatement;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\TmsTagEntity[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\TmsTagEntity[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

