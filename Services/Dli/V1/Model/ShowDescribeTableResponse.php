<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDescribeTableResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDescribeTableResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * columnCount  表的总列数。
    * columns  表的列信息，包含列名称、类型和描述信息。
    * tableType  表类型，包括“MANAGED”，“EXTERNAL”和“VIEW”。
    * dataType  数据类型，包括“csv”，“parquet”，“orc”，“json”，“carbon”和“avro”。
    * dataLocation  数据存储的路径，以“s3a”开头。
    * storageProperties  存储属性，以“key/value”的格式出现，包含delimiter，escape，quote，header，dateformat，timestampformat参数。
    * tableComment  表的注释。
    * createTableSql  建表的语句
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSuccess' => 'bool',
            'message' => 'string',
            'columnCount' => 'int',
            'columns' => '\HuaweiCloud\SDK\Dli\V1\Model\CreateTableReqColumn[]',
            'tableType' => 'string',
            'dataType' => 'string',
            'dataLocation' => 'string',
            'storageProperties' => 'object[]',
            'tableComment' => 'string',
            'createTableSql' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * columnCount  表的总列数。
    * columns  表的列信息，包含列名称、类型和描述信息。
    * tableType  表类型，包括“MANAGED”，“EXTERNAL”和“VIEW”。
    * dataType  数据类型，包括“csv”，“parquet”，“orc”，“json”，“carbon”和“avro”。
    * dataLocation  数据存储的路径，以“s3a”开头。
    * storageProperties  存储属性，以“key/value”的格式出现，包含delimiter，escape，quote，header，dateformat，timestampformat参数。
    * tableComment  表的注释。
    * createTableSql  建表的语句
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSuccess' => null,
        'message' => null,
        'columnCount' => 'int32',
        'columns' => null,
        'tableType' => null,
        'dataType' => null,
        'dataLocation' => null,
        'storageProperties' => null,
        'tableComment' => null,
        'createTableSql' => null
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
    * columnCount  表的总列数。
    * columns  表的列信息，包含列名称、类型和描述信息。
    * tableType  表类型，包括“MANAGED”，“EXTERNAL”和“VIEW”。
    * dataType  数据类型，包括“csv”，“parquet”，“orc”，“json”，“carbon”和“avro”。
    * dataLocation  数据存储的路径，以“s3a”开头。
    * storageProperties  存储属性，以“key/value”的格式出现，包含delimiter，escape，quote，header，dateformat，timestampformat参数。
    * tableComment  表的注释。
    * createTableSql  建表的语句
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSuccess' => 'is_success',
            'message' => 'message',
            'columnCount' => 'column_count',
            'columns' => 'columns',
            'tableType' => 'table_type',
            'dataType' => 'data_type',
            'dataLocation' => 'data_location',
            'storageProperties' => 'storage_properties',
            'tableComment' => 'table_comment',
            'createTableSql' => 'create_table_sql'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * columnCount  表的总列数。
    * columns  表的列信息，包含列名称、类型和描述信息。
    * tableType  表类型，包括“MANAGED”，“EXTERNAL”和“VIEW”。
    * dataType  数据类型，包括“csv”，“parquet”，“orc”，“json”，“carbon”和“avro”。
    * dataLocation  数据存储的路径，以“s3a”开头。
    * storageProperties  存储属性，以“key/value”的格式出现，包含delimiter，escape，quote，header，dateformat，timestampformat参数。
    * tableComment  表的注释。
    * createTableSql  建表的语句
    *
    * @var string[]
    */
    protected static $setters = [
            'isSuccess' => 'setIsSuccess',
            'message' => 'setMessage',
            'columnCount' => 'setColumnCount',
            'columns' => 'setColumns',
            'tableType' => 'setTableType',
            'dataType' => 'setDataType',
            'dataLocation' => 'setDataLocation',
            'storageProperties' => 'setStorageProperties',
            'tableComment' => 'setTableComment',
            'createTableSql' => 'setCreateTableSql'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSuccess  执行请求是否成功。“true”表示请求执行成功。
    * message  系统提示信息，执行成功时，信息可能为空。
    * columnCount  表的总列数。
    * columns  表的列信息，包含列名称、类型和描述信息。
    * tableType  表类型，包括“MANAGED”，“EXTERNAL”和“VIEW”。
    * dataType  数据类型，包括“csv”，“parquet”，“orc”，“json”，“carbon”和“avro”。
    * dataLocation  数据存储的路径，以“s3a”开头。
    * storageProperties  存储属性，以“key/value”的格式出现，包含delimiter，escape，quote，header，dateformat，timestampformat参数。
    * tableComment  表的注释。
    * createTableSql  建表的语句
    *
    * @var string[]
    */
    protected static $getters = [
            'isSuccess' => 'getIsSuccess',
            'message' => 'getMessage',
            'columnCount' => 'getColumnCount',
            'columns' => 'getColumns',
            'tableType' => 'getTableType',
            'dataType' => 'getDataType',
            'dataLocation' => 'getDataLocation',
            'storageProperties' => 'getStorageProperties',
            'tableComment' => 'getTableComment',
            'createTableSql' => 'getCreateTableSql'
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
        $this->container['columnCount'] = isset($data['columnCount']) ? $data['columnCount'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['tableType'] = isset($data['tableType']) ? $data['tableType'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['dataLocation'] = isset($data['dataLocation']) ? $data['dataLocation'] : null;
        $this->container['storageProperties'] = isset($data['storageProperties']) ? $data['storageProperties'] : null;
        $this->container['tableComment'] = isset($data['tableComment']) ? $data['tableComment'] : null;
        $this->container['createTableSql'] = isset($data['createTableSql']) ? $data['createTableSql'] : null;
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
    * Gets columnCount
    *  表的总列数。
    *
    * @return int|null
    */
    public function getColumnCount()
    {
        return $this->container['columnCount'];
    }

    /**
    * Sets columnCount
    *
    * @param int|null $columnCount 表的总列数。
    *
    * @return $this
    */
    public function setColumnCount($columnCount)
    {
        $this->container['columnCount'] = $columnCount;
        return $this;
    }

    /**
    * Gets columns
    *  表的列信息，包含列名称、类型和描述信息。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\CreateTableReqColumn[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\CreateTableReqColumn[]|null $columns 表的列信息，包含列名称、类型和描述信息。
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets tableType
    *  表类型，包括“MANAGED”，“EXTERNAL”和“VIEW”。
    *
    * @return string|null
    */
    public function getTableType()
    {
        return $this->container['tableType'];
    }

    /**
    * Sets tableType
    *
    * @param string|null $tableType 表类型，包括“MANAGED”，“EXTERNAL”和“VIEW”。
    *
    * @return $this
    */
    public function setTableType($tableType)
    {
        $this->container['tableType'] = $tableType;
        return $this;
    }

    /**
    * Gets dataType
    *  数据类型，包括“csv”，“parquet”，“orc”，“json”，“carbon”和“avro”。
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
    * @param string|null $dataType 数据类型，包括“csv”，“parquet”，“orc”，“json”，“carbon”和“avro”。
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets dataLocation
    *  数据存储的路径，以“s3a”开头。
    *
    * @return string|null
    */
    public function getDataLocation()
    {
        return $this->container['dataLocation'];
    }

    /**
    * Sets dataLocation
    *
    * @param string|null $dataLocation 数据存储的路径，以“s3a”开头。
    *
    * @return $this
    */
    public function setDataLocation($dataLocation)
    {
        $this->container['dataLocation'] = $dataLocation;
        return $this;
    }

    /**
    * Gets storageProperties
    *  存储属性，以“key/value”的格式出现，包含delimiter，escape，quote，header，dateformat，timestampformat参数。
    *
    * @return object[]|null
    */
    public function getStorageProperties()
    {
        return $this->container['storageProperties'];
    }

    /**
    * Sets storageProperties
    *
    * @param object[]|null $storageProperties 存储属性，以“key/value”的格式出现，包含delimiter，escape，quote，header，dateformat，timestampformat参数。
    *
    * @return $this
    */
    public function setStorageProperties($storageProperties)
    {
        $this->container['storageProperties'] = $storageProperties;
        return $this;
    }

    /**
    * Gets tableComment
    *  表的注释。
    *
    * @return string|null
    */
    public function getTableComment()
    {
        return $this->container['tableComment'];
    }

    /**
    * Sets tableComment
    *
    * @param string|null $tableComment 表的注释。
    *
    * @return $this
    */
    public function setTableComment($tableComment)
    {
        $this->container['tableComment'] = $tableComment;
        return $this;
    }

    /**
    * Gets createTableSql
    *  建表的语句
    *
    * @return string|null
    */
    public function getCreateTableSql()
    {
        return $this->container['createTableSql'];
    }

    /**
    * Sets createTableSql
    *
    * @param string|null $createTableSql 建表的语句
    *
    * @return $this
    */
    public function setCreateTableSql($createTableSql)
    {
        $this->container['createTableSql'] = $createTableSql;
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

