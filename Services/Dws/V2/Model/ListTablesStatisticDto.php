<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTablesStatisticDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTablesStatisticDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  数据库名称。
    * schemaName  schema名称。
    * tableName  表名。
    * tableOwner  所属用户。
    * tableSize  表大小。
    * skewRate  表倾斜率。
    * dirtyPageRate  脏页率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'tableOwner' => 'string',
            'tableSize' => 'string',
            'skewRate' => 'double',
            'dirtyPageRate' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  数据库名称。
    * schemaName  schema名称。
    * tableName  表名。
    * tableOwner  所属用户。
    * tableSize  表大小。
    * skewRate  表倾斜率。
    * dirtyPageRate  脏页率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'schemaName' => null,
        'tableName' => null,
        'tableOwner' => null,
        'tableSize' => null,
        'skewRate' => 'double',
        'dirtyPageRate' => 'double'
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
    * dbName  数据库名称。
    * schemaName  schema名称。
    * tableName  表名。
    * tableOwner  所属用户。
    * tableSize  表大小。
    * skewRate  表倾斜率。
    * dirtyPageRate  脏页率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'tableOwner' => 'table_owner',
            'tableSize' => 'table_size',
            'skewRate' => 'skew_rate',
            'dirtyPageRate' => 'dirty_page_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  数据库名称。
    * schemaName  schema名称。
    * tableName  表名。
    * tableOwner  所属用户。
    * tableSize  表大小。
    * skewRate  表倾斜率。
    * dirtyPageRate  脏页率。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'tableOwner' => 'setTableOwner',
            'tableSize' => 'setTableSize',
            'skewRate' => 'setSkewRate',
            'dirtyPageRate' => 'setDirtyPageRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  数据库名称。
    * schemaName  schema名称。
    * tableName  表名。
    * tableOwner  所属用户。
    * tableSize  表大小。
    * skewRate  表倾斜率。
    * dirtyPageRate  脏页率。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'tableOwner' => 'getTableOwner',
            'tableSize' => 'getTableSize',
            'skewRate' => 'getSkewRate',
            'dirtyPageRate' => 'getDirtyPageRate'
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
        $this->container['tableOwner'] = isset($data['tableOwner']) ? $data['tableOwner'] : null;
        $this->container['tableSize'] = isset($data['tableSize']) ? $data['tableSize'] : null;
        $this->container['skewRate'] = isset($data['skewRate']) ? $data['skewRate'] : null;
        $this->container['dirtyPageRate'] = isset($data['dirtyPageRate']) ? $data['dirtyPageRate'] : null;
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
    *  数据库名称。
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
    * @param string|null $dbName 数据库名称。
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
    *  schema名称。
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
    * @param string|null $schemaName schema名称。
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
    *  表名。
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
    * @param string|null $tableName 表名。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets tableOwner
    *  所属用户。
    *
    * @return string|null
    */
    public function getTableOwner()
    {
        return $this->container['tableOwner'];
    }

    /**
    * Sets tableOwner
    *
    * @param string|null $tableOwner 所属用户。
    *
    * @return $this
    */
    public function setTableOwner($tableOwner)
    {
        $this->container['tableOwner'] = $tableOwner;
        return $this;
    }

    /**
    * Gets tableSize
    *  表大小。
    *
    * @return string|null
    */
    public function getTableSize()
    {
        return $this->container['tableSize'];
    }

    /**
    * Sets tableSize
    *
    * @param string|null $tableSize 表大小。
    *
    * @return $this
    */
    public function setTableSize($tableSize)
    {
        $this->container['tableSize'] = $tableSize;
        return $this;
    }

    /**
    * Gets skewRate
    *  表倾斜率。
    *
    * @return double|null
    */
    public function getSkewRate()
    {
        return $this->container['skewRate'];
    }

    /**
    * Sets skewRate
    *
    * @param double|null $skewRate 表倾斜率。
    *
    * @return $this
    */
    public function setSkewRate($skewRate)
    {
        $this->container['skewRate'] = $skewRate;
        return $this;
    }

    /**
    * Gets dirtyPageRate
    *  脏页率。
    *
    * @return double|null
    */
    public function getDirtyPageRate()
    {
        return $this->container['dirtyPageRate'];
    }

    /**
    * Sets dirtyPageRate
    *
    * @param double|null $dirtyPageRate 脏页率。
    *
    * @return $this
    */
    public function setDirtyPageRate($dirtyPageRate)
    {
        $this->container['dirtyPageRate'] = $dirtyPageRate;
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

