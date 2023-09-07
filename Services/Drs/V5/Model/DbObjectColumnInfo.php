<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DbObjectColumnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DbObjectColumnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  数据库库名称。
    * schemaName  数据库schema名称。
    * tableName  数据库表名称。
    * columnInfos  数据库列信息。
    * totalCount  数据库列信息总数，与分页无关，仅作为返回体参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'columnInfos' => '\HuaweiCloud\SDK\Drs\V5\Model\QueryColumnInfo[]',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  数据库库名称。
    * schemaName  数据库schema名称。
    * tableName  数据库表名称。
    * columnInfos  数据库列信息。
    * totalCount  数据库列信息总数，与分页无关，仅作为返回体参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'schemaName' => null,
        'tableName' => null,
        'columnInfos' => null,
        'totalCount' => 'int32'
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
    * dbName  数据库库名称。
    * schemaName  数据库schema名称。
    * tableName  数据库表名称。
    * columnInfos  数据库列信息。
    * totalCount  数据库列信息总数，与分页无关，仅作为返回体参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'columnInfos' => 'column_infos',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  数据库库名称。
    * schemaName  数据库schema名称。
    * tableName  数据库表名称。
    * columnInfos  数据库列信息。
    * totalCount  数据库列信息总数，与分页无关，仅作为返回体参数
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'columnInfos' => 'setColumnInfos',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  数据库库名称。
    * schemaName  数据库schema名称。
    * tableName  数据库表名称。
    * columnInfos  数据库列信息。
    * totalCount  数据库列信息总数，与分页无关，仅作为返回体参数
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'columnInfos' => 'getColumnInfos',
            'totalCount' => 'getTotalCount'
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
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['columnInfos'] = isset($data['columnInfos']) ? $data['columnInfos'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets dbName
    *  数据库库名称。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库库名称。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets schemaName
    *  数据库schema名称。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName 数据库schema名称。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets tableName
    *  数据库表名称。
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
    * @param string|null $tableName 数据库表名称。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets columnInfos
    *  数据库列信息。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\QueryColumnInfo[]|null
    */
    public function getColumnInfos()
    {
        return $this->container['columnInfos'];
    }

    /**
    * Sets columnInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\QueryColumnInfo[]|null $columnInfos 数据库列信息。
    *
    * @return $this
    */
    public function setColumnInfos($columnInfos)
    {
        $this->container['columnInfos'] = $columnInfos;
        return $this;
    }

    /**
    * Gets totalCount
    *  数据库列信息总数，与分页无关，仅作为返回体参数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 数据库列信息总数，与分页无关，仅作为返回体参数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

