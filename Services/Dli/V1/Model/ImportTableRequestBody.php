<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportTableRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportTableRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataPath  导入的数据路径（当前仅支持导入OBS上的数据，且OBS路径须以s3a开头）。
    * dataType  导入的数据类型（当前支持csv、parquet、orc、json、avro数据类型）。
    * databaseName  导入表所属的数据库名称。
    * tableName  导入表的名称。
    * withColumnHeader  导入数据中的第一行数据是否包括列名，即表头。默认为“false”，表示不包括列名。导入CSV类型数据时可指定。
    * delimiter  用户自定义数据分隔符，默认为逗号。导入CSV类型数据时可指定。
    * quoteChar  用户自定义引用字符，默认为双引号。导入CSV类型数据时可指定。
    * escapeChar  用户自定义转义字符，默认为反斜杠。导入CSV类型数据时可指定。
    * dateFormat  指定特定的日期格式，默认为“yyyy-MM-dd”。日期格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * badRecordsPath  作业执行过程中的bad records存储目录。设置该配置项后，bad records不会导入到目标表。
    * timestampFormat  指定特定的时间格式，默认为“yyyy-MM-dd HH:mm:ss”。时间格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * overwrite  是否覆盖之前的数据
    * partitionSpec  表示需要导入到哪个分区
    * conf  用于定义此配置项的参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataPath' => 'string',
            'dataType' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'withColumnHeader' => 'bool',
            'delimiter' => 'string',
            'quoteChar' => 'string',
            'escapeChar' => 'string',
            'dateFormat' => 'string',
            'badRecordsPath' => 'string',
            'timestampFormat' => 'string',
            'queueName' => 'string',
            'overwrite' => 'bool',
            'partitionSpec' => 'string',
            'conf' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataPath  导入的数据路径（当前仅支持导入OBS上的数据，且OBS路径须以s3a开头）。
    * dataType  导入的数据类型（当前支持csv、parquet、orc、json、avro数据类型）。
    * databaseName  导入表所属的数据库名称。
    * tableName  导入表的名称。
    * withColumnHeader  导入数据中的第一行数据是否包括列名，即表头。默认为“false”，表示不包括列名。导入CSV类型数据时可指定。
    * delimiter  用户自定义数据分隔符，默认为逗号。导入CSV类型数据时可指定。
    * quoteChar  用户自定义引用字符，默认为双引号。导入CSV类型数据时可指定。
    * escapeChar  用户自定义转义字符，默认为反斜杠。导入CSV类型数据时可指定。
    * dateFormat  指定特定的日期格式，默认为“yyyy-MM-dd”。日期格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * badRecordsPath  作业执行过程中的bad records存储目录。设置该配置项后，bad records不会导入到目标表。
    * timestampFormat  指定特定的时间格式，默认为“yyyy-MM-dd HH:mm:ss”。时间格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * overwrite  是否覆盖之前的数据
    * partitionSpec  表示需要导入到哪个分区
    * conf  用于定义此配置项的参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataPath' => null,
        'dataType' => null,
        'databaseName' => null,
        'tableName' => null,
        'withColumnHeader' => null,
        'delimiter' => null,
        'quoteChar' => null,
        'escapeChar' => null,
        'dateFormat' => null,
        'badRecordsPath' => null,
        'timestampFormat' => null,
        'queueName' => null,
        'overwrite' => null,
        'partitionSpec' => null,
        'conf' => null
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
    * dataPath  导入的数据路径（当前仅支持导入OBS上的数据，且OBS路径须以s3a开头）。
    * dataType  导入的数据类型（当前支持csv、parquet、orc、json、avro数据类型）。
    * databaseName  导入表所属的数据库名称。
    * tableName  导入表的名称。
    * withColumnHeader  导入数据中的第一行数据是否包括列名，即表头。默认为“false”，表示不包括列名。导入CSV类型数据时可指定。
    * delimiter  用户自定义数据分隔符，默认为逗号。导入CSV类型数据时可指定。
    * quoteChar  用户自定义引用字符，默认为双引号。导入CSV类型数据时可指定。
    * escapeChar  用户自定义转义字符，默认为反斜杠。导入CSV类型数据时可指定。
    * dateFormat  指定特定的日期格式，默认为“yyyy-MM-dd”。日期格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * badRecordsPath  作业执行过程中的bad records存储目录。设置该配置项后，bad records不会导入到目标表。
    * timestampFormat  指定特定的时间格式，默认为“yyyy-MM-dd HH:mm:ss”。时间格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * overwrite  是否覆盖之前的数据
    * partitionSpec  表示需要导入到哪个分区
    * conf  用于定义此配置项的参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataPath' => 'data_path',
            'dataType' => 'data_type',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'withColumnHeader' => 'with_column_header',
            'delimiter' => 'delimiter',
            'quoteChar' => 'quote_char',
            'escapeChar' => 'escape_char',
            'dateFormat' => 'date_format',
            'badRecordsPath' => 'bad_records_path',
            'timestampFormat' => 'timestamp_format',
            'queueName' => 'queue_name',
            'overwrite' => 'overwrite',
            'partitionSpec' => 'partition_spec',
            'conf' => 'conf'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataPath  导入的数据路径（当前仅支持导入OBS上的数据，且OBS路径须以s3a开头）。
    * dataType  导入的数据类型（当前支持csv、parquet、orc、json、avro数据类型）。
    * databaseName  导入表所属的数据库名称。
    * tableName  导入表的名称。
    * withColumnHeader  导入数据中的第一行数据是否包括列名，即表头。默认为“false”，表示不包括列名。导入CSV类型数据时可指定。
    * delimiter  用户自定义数据分隔符，默认为逗号。导入CSV类型数据时可指定。
    * quoteChar  用户自定义引用字符，默认为双引号。导入CSV类型数据时可指定。
    * escapeChar  用户自定义转义字符，默认为反斜杠。导入CSV类型数据时可指定。
    * dateFormat  指定特定的日期格式，默认为“yyyy-MM-dd”。日期格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * badRecordsPath  作业执行过程中的bad records存储目录。设置该配置项后，bad records不会导入到目标表。
    * timestampFormat  指定特定的时间格式，默认为“yyyy-MM-dd HH:mm:ss”。时间格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * overwrite  是否覆盖之前的数据
    * partitionSpec  表示需要导入到哪个分区
    * conf  用于定义此配置项的参数
    *
    * @var string[]
    */
    protected static $setters = [
            'dataPath' => 'setDataPath',
            'dataType' => 'setDataType',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'withColumnHeader' => 'setWithColumnHeader',
            'delimiter' => 'setDelimiter',
            'quoteChar' => 'setQuoteChar',
            'escapeChar' => 'setEscapeChar',
            'dateFormat' => 'setDateFormat',
            'badRecordsPath' => 'setBadRecordsPath',
            'timestampFormat' => 'setTimestampFormat',
            'queueName' => 'setQueueName',
            'overwrite' => 'setOverwrite',
            'partitionSpec' => 'setPartitionSpec',
            'conf' => 'setConf'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataPath  导入的数据路径（当前仅支持导入OBS上的数据，且OBS路径须以s3a开头）。
    * dataType  导入的数据类型（当前支持csv、parquet、orc、json、avro数据类型）。
    * databaseName  导入表所属的数据库名称。
    * tableName  导入表的名称。
    * withColumnHeader  导入数据中的第一行数据是否包括列名，即表头。默认为“false”，表示不包括列名。导入CSV类型数据时可指定。
    * delimiter  用户自定义数据分隔符，默认为逗号。导入CSV类型数据时可指定。
    * quoteChar  用户自定义引用字符，默认为双引号。导入CSV类型数据时可指定。
    * escapeChar  用户自定义转义字符，默认为反斜杠。导入CSV类型数据时可指定。
    * dateFormat  指定特定的日期格式，默认为“yyyy-MM-dd”。日期格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * badRecordsPath  作业执行过程中的bad records存储目录。设置该配置项后，bad records不会导入到目标表。
    * timestampFormat  指定特定的时间格式，默认为“yyyy-MM-dd HH:mm:ss”。时间格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * overwrite  是否覆盖之前的数据
    * partitionSpec  表示需要导入到哪个分区
    * conf  用于定义此配置项的参数
    *
    * @var string[]
    */
    protected static $getters = [
            'dataPath' => 'getDataPath',
            'dataType' => 'getDataType',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'withColumnHeader' => 'getWithColumnHeader',
            'delimiter' => 'getDelimiter',
            'quoteChar' => 'getQuoteChar',
            'escapeChar' => 'getEscapeChar',
            'dateFormat' => 'getDateFormat',
            'badRecordsPath' => 'getBadRecordsPath',
            'timestampFormat' => 'getTimestampFormat',
            'queueName' => 'getQueueName',
            'overwrite' => 'getOverwrite',
            'partitionSpec' => 'getPartitionSpec',
            'conf' => 'getConf'
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
        $this->container['dataPath'] = isset($data['dataPath']) ? $data['dataPath'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['withColumnHeader'] = isset($data['withColumnHeader']) ? $data['withColumnHeader'] : false;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['quoteChar'] = isset($data['quoteChar']) ? $data['quoteChar'] : null;
        $this->container['escapeChar'] = isset($data['escapeChar']) ? $data['escapeChar'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : 'yyyy-MM-dd';
        $this->container['badRecordsPath'] = isset($data['badRecordsPath']) ? $data['badRecordsPath'] : null;
        $this->container['timestampFormat'] = isset($data['timestampFormat']) ? $data['timestampFormat'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['overwrite'] = isset($data['overwrite']) ? $data['overwrite'] : null;
        $this->container['partitionSpec'] = isset($data['partitionSpec']) ? $data['partitionSpec'] : null;
        $this->container['conf'] = isset($data['conf']) ? $data['conf'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataPath'] === null) {
            $invalidProperties[] = "'dataPath' can't be null";
        }
        if ($this->container['dataType'] === null) {
            $invalidProperties[] = "'dataType' can't be null";
        }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
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
    * Gets dataPath
    *  导入的数据路径（当前仅支持导入OBS上的数据，且OBS路径须以s3a开头）。
    *
    * @return string
    */
    public function getDataPath()
    {
        return $this->container['dataPath'];
    }

    /**
    * Sets dataPath
    *
    * @param string $dataPath 导入的数据路径（当前仅支持导入OBS上的数据，且OBS路径须以s3a开头）。
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
    *  导入的数据类型（当前支持csv、parquet、orc、json、avro数据类型）。
    *
    * @return string
    */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
    * Sets dataType
    *
    * @param string $dataType 导入的数据类型（当前支持csv、parquet、orc、json、avro数据类型）。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets databaseName
    *  导入表所属的数据库名称。
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 导入表所属的数据库名称。
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
    *  导入表的名称。
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
    * @param string $tableName 导入表的名称。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets withColumnHeader
    *  导入数据中的第一行数据是否包括列名，即表头。默认为“false”，表示不包括列名。导入CSV类型数据时可指定。
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
    * @param bool|null $withColumnHeader 导入数据中的第一行数据是否包括列名，即表头。默认为“false”，表示不包括列名。导入CSV类型数据时可指定。
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
    *  用户自定义数据分隔符，默认为逗号。导入CSV类型数据时可指定。
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
    * @param string|null $delimiter 用户自定义数据分隔符，默认为逗号。导入CSV类型数据时可指定。
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
    *  用户自定义引用字符，默认为双引号。导入CSV类型数据时可指定。
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
    * @param string|null $quoteChar 用户自定义引用字符，默认为双引号。导入CSV类型数据时可指定。
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
    *  用户自定义转义字符，默认为反斜杠。导入CSV类型数据时可指定。
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
    * @param string|null $escapeChar 用户自定义转义字符，默认为反斜杠。导入CSV类型数据时可指定。
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
    *  指定特定的日期格式，默认为“yyyy-MM-dd”。日期格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
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
    * @param string|null $dateFormat 指定特定的日期格式，默认为“yyyy-MM-dd”。日期格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    *
    * @return $this
    */
    public function setDateFormat($dateFormat)
    {
        $this->container['dateFormat'] = $dateFormat;
        return $this;
    }

    /**
    * Gets badRecordsPath
    *  作业执行过程中的bad records存储目录。设置该配置项后，bad records不会导入到目标表。
    *
    * @return string|null
    */
    public function getBadRecordsPath()
    {
        return $this->container['badRecordsPath'];
    }

    /**
    * Sets badRecordsPath
    *
    * @param string|null $badRecordsPath 作业执行过程中的bad records存储目录。设置该配置项后，bad records不会导入到目标表。
    *
    * @return $this
    */
    public function setBadRecordsPath($badRecordsPath)
    {
        $this->container['badRecordsPath'] = $badRecordsPath;
        return $this;
    }

    /**
    * Gets timestampFormat
    *  指定特定的时间格式，默认为“yyyy-MM-dd HH:mm:ss”。时间格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
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
    * @param string|null $timestampFormat 指定特定的时间格式，默认为“yyyy-MM-dd HH:mm:ss”。时间格式字符定义详见表3。导入CSV及JSON类型数据时可指定。
    *
    * @return $this
    */
    public function setTimestampFormat($timestampFormat)
    {
        $this->container['timestampFormat'] = $timestampFormat;
        return $this;
    }

    /**
    * Gets queueName
    *  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets overwrite
    *  是否覆盖之前的数据
    *
    * @return bool|null
    */
    public function getOverwrite()
    {
        return $this->container['overwrite'];
    }

    /**
    * Sets overwrite
    *
    * @param bool|null $overwrite 是否覆盖之前的数据
    *
    * @return $this
    */
    public function setOverwrite($overwrite)
    {
        $this->container['overwrite'] = $overwrite;
        return $this;
    }

    /**
    * Gets partitionSpec
    *  表示需要导入到哪个分区
    *
    * @return string|null
    */
    public function getPartitionSpec()
    {
        return $this->container['partitionSpec'];
    }

    /**
    * Sets partitionSpec
    *
    * @param string|null $partitionSpec 表示需要导入到哪个分区
    *
    * @return $this
    */
    public function setPartitionSpec($partitionSpec)
    {
        $this->container['partitionSpec'] = $partitionSpec;
        return $this;
    }

    /**
    * Gets conf
    *  用于定义此配置项的参数
    *
    * @return string[]|null
    */
    public function getConf()
    {
        return $this->container['conf'];
    }

    /**
    * Sets conf
    *
    * @param string[]|null $conf 用于定义此配置项的参数
    *
    * @return $this
    */
    public function setConf($conf)
    {
        $this->container['conf'] = $conf;
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

