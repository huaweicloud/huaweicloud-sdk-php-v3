<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportTableRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportTableRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataPath  导出数据的储存路径（当前仅支持将数据存储在OBS上，且OBS路径须以s3a开头）。另外，“export_mode”配置为“errorifexists”时，该路径下的文件夹须不存在，如请求样例中的“test”文件夹。
    * dataType  导出数据的类型（当前仅支持csv格式数据）。
    * databaseName  被导出数据的表所在的数据库名称。
    * tableName  被导出数据的表名称。
    * compress  导出数据的压缩方法。目前支持gzip、bzip2、deflate压缩方式；若不希望压缩，则输入none。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataPath' => 'string',
            'dataType' => 'string',
            'databaseName' => 'string',
            'tableName' => 'string',
            'compress' => 'string',
            'queueName' => 'string',
            'exportMode' => 'string',
            'withColumnHeader' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataPath  导出数据的储存路径（当前仅支持将数据存储在OBS上，且OBS路径须以s3a开头）。另外，“export_mode”配置为“errorifexists”时，该路径下的文件夹须不存在，如请求样例中的“test”文件夹。
    * dataType  导出数据的类型（当前仅支持csv格式数据）。
    * databaseName  被导出数据的表所在的数据库名称。
    * tableName  被导出数据的表名称。
    * compress  导出数据的压缩方法。目前支持gzip、bzip2、deflate压缩方式；若不希望压缩，则输入none。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataPath' => null,
        'dataType' => null,
        'databaseName' => null,
        'tableName' => null,
        'compress' => null,
        'queueName' => null,
        'exportMode' => null,
        'withColumnHeader' => null
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
    * dataPath  导出数据的储存路径（当前仅支持将数据存储在OBS上，且OBS路径须以s3a开头）。另外，“export_mode”配置为“errorifexists”时，该路径下的文件夹须不存在，如请求样例中的“test”文件夹。
    * dataType  导出数据的类型（当前仅支持csv格式数据）。
    * databaseName  被导出数据的表所在的数据库名称。
    * tableName  被导出数据的表名称。
    * compress  导出数据的压缩方法。目前支持gzip、bzip2、deflate压缩方式；若不希望压缩，则输入none。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataPath' => 'data_path',
            'dataType' => 'data_type',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'compress' => 'compress',
            'queueName' => 'queue_name',
            'exportMode' => 'export_mode',
            'withColumnHeader' => 'with_column_header'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataPath  导出数据的储存路径（当前仅支持将数据存储在OBS上，且OBS路径须以s3a开头）。另外，“export_mode”配置为“errorifexists”时，该路径下的文件夹须不存在，如请求样例中的“test”文件夹。
    * dataType  导出数据的类型（当前仅支持csv格式数据）。
    * databaseName  被导出数据的表所在的数据库名称。
    * tableName  被导出数据的表名称。
    * compress  导出数据的压缩方法。目前支持gzip、bzip2、deflate压缩方式；若不希望压缩，则输入none。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataPath' => 'setDataPath',
            'dataType' => 'setDataType',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'compress' => 'setCompress',
            'queueName' => 'setQueueName',
            'exportMode' => 'setExportMode',
            'withColumnHeader' => 'setWithColumnHeader'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataPath  导出数据的储存路径（当前仅支持将数据存储在OBS上，且OBS路径须以s3a开头）。另外，“export_mode”配置为“errorifexists”时，该路径下的文件夹须不存在，如请求样例中的“test”文件夹。
    * dataType  导出数据的类型（当前仅支持csv格式数据）。
    * databaseName  被导出数据的表所在的数据库名称。
    * tableName  被导出数据的表名称。
    * compress  导出数据的压缩方法。目前支持gzip、bzip2、deflate压缩方式；若不希望压缩，则输入none。
    * queueName  指定执行该任务的队列。若不指定队列，将采用default队列执行操作。
    * exportMode  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    * withColumnHeader  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataPath' => 'getDataPath',
            'dataType' => 'getDataType',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'compress' => 'getCompress',
            'queueName' => 'getQueueName',
            'exportMode' => 'getExportMode',
            'withColumnHeader' => 'getWithColumnHeader'
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
        $this->container['compress'] = isset($data['compress']) ? $data['compress'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['exportMode'] = isset($data['exportMode']) ? $data['exportMode'] : null;
        $this->container['withColumnHeader'] = isset($data['withColumnHeader']) ? $data['withColumnHeader'] : null;
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
        if ($this->container['compress'] === null) {
            $invalidProperties[] = "'compress' can't be null";
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
    *  导出数据的储存路径（当前仅支持将数据存储在OBS上，且OBS路径须以s3a开头）。另外，“export_mode”配置为“errorifexists”时，该路径下的文件夹须不存在，如请求样例中的“test”文件夹。
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
    * @param string $dataPath 导出数据的储存路径（当前仅支持将数据存储在OBS上，且OBS路径须以s3a开头）。另外，“export_mode”配置为“errorifexists”时，该路径下的文件夹须不存在，如请求样例中的“test”文件夹。
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
    *  导出数据的类型（当前仅支持csv格式数据）。
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
    * @param string $dataType 导出数据的类型（当前仅支持csv格式数据）。
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
    *  被导出数据的表所在的数据库名称。
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
    * @param string $databaseName 被导出数据的表所在的数据库名称。
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
    *  被导出数据的表名称。
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
    * @param string $tableName 被导出数据的表名称。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets compress
    *  导出数据的压缩方法。目前支持gzip、bzip2、deflate压缩方式；若不希望压缩，则输入none。
    *
    * @return string
    */
    public function getCompress()
    {
        return $this->container['compress'];
    }

    /**
    * Sets compress
    *
    * @param string $compress 导出数据的压缩方法。目前支持gzip、bzip2、deflate压缩方式；若不希望压缩，则输入none。
    *
    * @return $this
    */
    public function setCompress($compress)
    {
        $this->container['compress'] = $compress;
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
    * Gets exportMode
    *  导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
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
    * @param string|null $exportMode 导出模式，目前支持“ErrorIfExists”，“Overwrite”，不指定“export_mode”则默认为“ErrorIfExists”。  “ErrorIfExists”：存在即报错。指定的导出目录必须不存在，如果指定目录已经存在，系统将返回错误信息，无法执行导出操作。 “Overwrite”：覆盖。在指定目录下新建文件，会删除已有文件。
    *
    * @return $this
    */
    public function setExportMode($exportMode)
    {
        $this->container['exportMode'] = $exportMode;
        return $this;
    }

    /**
    * Gets withColumnHeader
    *  导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
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
    * @param bool|null $withColumnHeader 导出csv格式数据时，是否导出列名。  设置为“true”，表示导出列名。 设置为“false”，表示不导出列名。 若为空，默认为“false”。
    *
    * @return $this
    */
    public function setWithColumnHeader($withColumnHeader)
    {
        $this->container['withColumnHeader'] = $withColumnHeader;
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

