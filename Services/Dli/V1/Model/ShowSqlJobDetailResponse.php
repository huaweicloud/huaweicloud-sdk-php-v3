<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlJobDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlJobDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * exportMode  导出数据或保存查询结果时，指定的导出模式。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * dataPath  导入或导出的文件路径。
    * dataType  导入或导出的数据类型（当前仅支持csv）。
    * withColumnHeader  导入作业时，导入的数据是否包括列名。
    * delimiter  导入作业时，用户自定义数据分隔符。
    * quoteChar  导入作业时，用户自定义引用字符。
    * escapeChar  导入作业时，用户自定义转义字符。
    * dateFormat  导入作业时，指定表的日期格式。
    * timestampFormat  导入作业时，指定表的时间格式
    * compress  导出作业时，用户指定的压缩方式。
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'jobId' => 'string',
            'owner' => 'string',
            'startTime' => 'int',
            'duration' => 'int',
            'exportMode' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'dataPath' => 'string',
            'dataType' => 'string',
            'withColumnHeader' => 'bool',
            'delimiter' => 'string',
            'quoteChar' => 'string',
            'escapeChar' => 'string',
            'dateFormat' => 'string',
            'timestampFormat' => 'string',
            'compress' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * exportMode  导出数据或保存查询结果时，指定的导出模式。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * dataPath  导入或导出的文件路径。
    * dataType  导入或导出的数据类型（当前仅支持csv）。
    * withColumnHeader  导入作业时，导入的数据是否包括列名。
    * delimiter  导入作业时，用户自定义数据分隔符。
    * quoteChar  导入作业时，用户自定义引用字符。
    * escapeChar  导入作业时，用户自定义转义字符。
    * dateFormat  导入作业时，指定表的日期格式。
    * timestampFormat  导入作业时，指定表的时间格式
    * compress  导出作业时，用户指定的压缩方式。
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'jobId' => null,
        'owner' => null,
        'startTime' => 'int64',
        'duration' => 'int64',
        'exportMode' => null,
        'databaseName' => null,
        'tableName' => null,
        'dataPath' => null,
        'dataType' => null,
        'withColumnHeader' => null,
        'delimiter' => null,
        'quoteChar' => null,
        'escapeChar' => null,
        'dateFormat' => null,
        'timestampFormat' => null,
        'compress' => null,
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
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * exportMode  导出数据或保存查询结果时，指定的导出模式。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * dataPath  导入或导出的文件路径。
    * dataType  导入或导出的数据类型（当前仅支持csv）。
    * withColumnHeader  导入作业时，导入的数据是否包括列名。
    * delimiter  导入作业时，用户自定义数据分隔符。
    * quoteChar  导入作业时，用户自定义引用字符。
    * escapeChar  导入作业时，用户自定义转义字符。
    * dateFormat  导入作业时，指定表的日期格式。
    * timestampFormat  导入作业时，指定表的时间格式
    * compress  导出作业时，用户指定的压缩方式。
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'jobId' => 'job_id',
            'owner' => 'owner',
            'startTime' => 'start_time',
            'duration' => 'duration',
            'exportMode' => 'export_mode',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'dataPath' => 'data_path',
            'dataType' => 'data_type',
            'withColumnHeader' => 'with_column_header',
            'delimiter' => 'delimiter',
            'quoteChar' => 'quote_char',
            'escapeChar' => 'escape_char',
            'dateFormat' => 'date_format',
            'timestampFormat' => 'timestamp_format',
            'compress' => 'compress',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * exportMode  导出数据或保存查询结果时，指定的导出模式。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * dataPath  导入或导出的文件路径。
    * dataType  导入或导出的数据类型（当前仅支持csv）。
    * withColumnHeader  导入作业时，导入的数据是否包括列名。
    * delimiter  导入作业时，用户自定义数据分隔符。
    * quoteChar  导入作业时，用户自定义引用字符。
    * escapeChar  导入作业时，用户自定义转义字符。
    * dateFormat  导入作业时，指定表的日期格式。
    * timestampFormat  导入作业时，指定表的时间格式
    * compress  导出作业时，用户指定的压缩方式。
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'jobId' => 'setJobId',
            'owner' => 'setOwner',
            'startTime' => 'setStartTime',
            'duration' => 'setDuration',
            'exportMode' => 'setExportMode',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'dataPath' => 'setDataPath',
            'dataType' => 'setDataType',
            'withColumnHeader' => 'setWithColumnHeader',
            'delimiter' => 'setDelimiter',
            'quoteChar' => 'setQuoteChar',
            'escapeChar' => 'setEscapeChar',
            'dateFormat' => 'setDateFormat',
            'timestampFormat' => 'setTimestampFormat',
            'compress' => 'setCompress',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * jobId  作业ID。
    * owner  提交作业的用户。
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳。
    * duration  作业运行时长，单位毫秒。
    * exportMode  导出数据或保存查询结果时，指定的导出模式。
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    * dataPath  导入或导出的文件路径。
    * dataType  导入或导出的数据类型（当前仅支持csv）。
    * withColumnHeader  导入作业时，导入的数据是否包括列名。
    * delimiter  导入作业时，用户自定义数据分隔符。
    * quoteChar  导入作业时，用户自定义引用字符。
    * escapeChar  导入作业时，用户自定义转义字符。
    * dateFormat  导入作业时，指定表的日期格式。
    * timestampFormat  导入作业时，指定表的时间格式
    * compress  导出作业时，用户指定的压缩方式。
    * tags  作业标签
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'jobId' => 'getJobId',
            'owner' => 'getOwner',
            'startTime' => 'getStartTime',
            'duration' => 'getDuration',
            'exportMode' => 'getExportMode',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'dataPath' => 'getDataPath',
            'dataType' => 'getDataType',
            'withColumnHeader' => 'getWithColumnHeader',
            'delimiter' => 'getDelimiter',
            'quoteChar' => 'getQuoteChar',
            'escapeChar' => 'getEscapeChar',
            'dateFormat' => 'getDateFormat',
            'timestampFormat' => 'getTimestampFormat',
            'compress' => 'getCompress',
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
        $this->container['isSuccess'] = isset($data['isSuccess']) ? $data['isSuccess'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['exportMode'] = isset($data['exportMode']) ? $data['exportMode'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['dataPath'] = isset($data['dataPath']) ? $data['dataPath'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['withColumnHeader'] = isset($data['withColumnHeader']) ? $data['withColumnHeader'] : null;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['quoteChar'] = isset($data['quoteChar']) ? $data['quoteChar'] : null;
        $this->container['escapeChar'] = isset($data['escapeChar']) ? $data['escapeChar'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : null;
        $this->container['timestampFormat'] = isset($data['timestampFormat']) ? $data['timestampFormat'] : null;
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
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
    * Gets isSuccess
    *  执行请求是否成功。“true”表示请求执行成功。
    *
    * @return bool|null
    */
    public function getIsSuccess()
    {
        return $this->container['isSuccess'];
    }

    /**
    * Sets isSuccess
    *
    * @param bool|null $isSuccess 执行请求是否成功。“true”表示请求执行成功。
    *
    * @return $this
    */
    public function setIsSuccess($isSuccess)
    {
        $this->container['isSuccess'] = $isSuccess;
        return $this;
    }

    /**
    * Gets message
    *  系统提示信息，执行成功时，信息可能为空。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 系统提示信息，执行成功时，信息可能为空。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets jobId
    *  作业ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 作业ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets owner
    *  提交作业的用户。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 提交作业的用户。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets startTime
    *  作业开始的时间。是单位为“毫秒”的时间戳。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 作业开始的时间。是单位为“毫秒”的时间戳。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets duration
    *  作业运行时长，单位毫秒。
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 作业运行时长，单位毫秒。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets exportMode
    *  导出数据或保存查询结果时，指定的导出模式。
    *
    * @return string|null
    */
    public function getExportMode()
    {
        return $this->container['exportMode'];
    }

    /**
    * Sets exportMode
    *
    * @param string|null $exportMode 导出数据或保存查询结果时，指定的导出模式。
    *
    * @return $this
    */
    public function setExportMode($exportMode)
    {
        $this->container['exportMode'] = $exportMode;
        return $this;
    }

    /**
    * Gets databaseName
    *  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableName
    *  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 记录其操作的表名称。类型为Import和Export作业才有“table_name”属性。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets dataPath
    *  导入或导出的文件路径。
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
    * @param string|null $dataPath 导入或导出的文件路径。
    *
    * @return $this
    */
    public function setDataPath($dataPath)
    {
        $this->container['dataPath'] = $dataPath;
        return $this;
    }

    /**
    * Gets dataType
    *  导入或导出的数据类型（当前仅支持csv）。
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
    * @param string|null $dataType 导入或导出的数据类型（当前仅支持csv）。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets withColumnHeader
    *  导入作业时，导入的数据是否包括列名。
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
    * @param bool|null $withColumnHeader 导入作业时，导入的数据是否包括列名。
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
    *  导入作业时，用户自定义数据分隔符。
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
    * @param string|null $delimiter 导入作业时，用户自定义数据分隔符。
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
    *  导入作业时，用户自定义引用字符。
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
    * @param string|null $quoteChar 导入作业时，用户自定义引用字符。
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
    *  导入作业时，用户自定义转义字符。
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
    * @param string|null $escapeChar 导入作业时，用户自定义转义字符。
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
    *  导入作业时，指定表的日期格式。
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
    * @param string|null $dateFormat 导入作业时，指定表的日期格式。
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
    *  导入作业时，指定表的时间格式
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
    * @param string|null $timestampFormat 导入作业时，指定表的时间格式
    *
    * @return $this
    */
    public function setTimestampFormat($timestampFormat)
    {
        $this->container['timestampFormat'] = $timestampFormat;
        return $this;
    }

    /**
    * Gets compress
    *  导出作业时，用户指定的压缩方式。
    *
    * @return string|null
    */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
    * Sets compress
    *
    * @param string|null $compress 导出作业时，用户指定的压缩方式。
    *
    * @return $this
    */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;
        return $this;
    }

    /**
    * Gets tags
    *  作业标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 作业标签
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

