<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreTableListDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreTableListDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  库名参数必传
    * schemaName  schema名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * tableName  表名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * newDbName  新库名  备份恢复到新实例和当前实例：   使用DATABASE级别恢复：需注意目标实例不存在当前一样的库名，否则无法下发。   使用DATABASE_TABLE级别恢复，不填时与源库名一致。
    * newSchemaName  新schema_name  备份恢复到新实例和当前实例：    使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，不填时与源schema名一致。
    * newTableName  新表名  备份恢复到新实例和当前实例：   使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，需注意目标实例里不存在当前的表名，否则无法下发。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string',
            'newDbName' => 'string',
            'newSchemaName' => 'string',
            'newTableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  库名参数必传
    * schemaName  schema名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * tableName  表名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * newDbName  新库名  备份恢复到新实例和当前实例：   使用DATABASE级别恢复：需注意目标实例不存在当前一样的库名，否则无法下发。   使用DATABASE_TABLE级别恢复，不填时与源库名一致。
    * newSchemaName  新schema_name  备份恢复到新实例和当前实例：    使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，不填时与源schema名一致。
    * newTableName  新表名  备份恢复到新实例和当前实例：   使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，需注意目标实例里不存在当前的表名，否则无法下发。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'schemaName' => null,
        'tableName' => null,
        'newDbName' => null,
        'newSchemaName' => null,
        'newTableName' => null
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
    * dbName  库名参数必传
    * schemaName  schema名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * tableName  表名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * newDbName  新库名  备份恢复到新实例和当前实例：   使用DATABASE级别恢复：需注意目标实例不存在当前一样的库名，否则无法下发。   使用DATABASE_TABLE级别恢复，不填时与源库名一致。
    * newSchemaName  新schema_name  备份恢复到新实例和当前实例：    使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，不填时与源schema名一致。
    * newTableName  新表名  备份恢复到新实例和当前实例：   使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，需注意目标实例里不存在当前的表名，否则无法下发。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'newDbName' => 'new_db_name',
            'newSchemaName' => 'new_schema_name',
            'newTableName' => 'new_table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  库名参数必传
    * schemaName  schema名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * tableName  表名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * newDbName  新库名  备份恢复到新实例和当前实例：   使用DATABASE级别恢复：需注意目标实例不存在当前一样的库名，否则无法下发。   使用DATABASE_TABLE级别恢复，不填时与源库名一致。
    * newSchemaName  新schema_name  备份恢复到新实例和当前实例：    使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，不填时与源schema名一致。
    * newTableName  新表名  备份恢复到新实例和当前实例：   使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，需注意目标实例里不存在当前的表名，否则无法下发。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'newDbName' => 'setNewDbName',
            'newSchemaName' => 'setNewSchemaName',
            'newTableName' => 'setNewTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  库名参数必传
    * schemaName  schema名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * tableName  表名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    * newDbName  新库名  备份恢复到新实例和当前实例：   使用DATABASE级别恢复：需注意目标实例不存在当前一样的库名，否则无法下发。   使用DATABASE_TABLE级别恢复，不填时与源库名一致。
    * newSchemaName  新schema_name  备份恢复到新实例和当前实例：    使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，不填时与源schema名一致。
    * newTableName  新表名  备份恢复到新实例和当前实例：   使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，需注意目标实例里不存在当前的表名，否则无法下发。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'newDbName' => 'getNewDbName',
            'newSchemaName' => 'getNewSchemaName',
            'newTableName' => 'getNewTableName'
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
        $this->container['newDbName'] = isset($data['newDbName']) ? $data['newDbName'] : null;
        $this->container['newSchemaName'] = isset($data['newSchemaName']) ? $data['newSchemaName'] : null;
        $this->container['newTableName'] = isset($data['newTableName']) ? $data['newTableName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
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
    * Gets dbName
    *  库名参数必传
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName 库名参数必传
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
    *  schema名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
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
    * @param string|null $schemaName schema名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
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
    *  表名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
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
    * @param string|null $tableName 表名  备份恢复到新实例和当前实例：使用DATABASE_TABLE级别恢复参数必传, 使用DATABASE类型恢复参数无效。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets newDbName
    *  新库名  备份恢复到新实例和当前实例：   使用DATABASE级别恢复：需注意目标实例不存在当前一样的库名，否则无法下发。   使用DATABASE_TABLE级别恢复，不填时与源库名一致。
    *
    * @return string|null
    */
    public function getNewDbName()
    {
        return $this->container['newDbName'];
    }

    /**
    * Sets newDbName
    *
    * @param string|null $newDbName 新库名  备份恢复到新实例和当前实例：   使用DATABASE级别恢复：需注意目标实例不存在当前一样的库名，否则无法下发。   使用DATABASE_TABLE级别恢复，不填时与源库名一致。
    *
    * @return $this
    */
    public function setNewDbName($newDbName)
    {
        $this->container['newDbName'] = $newDbName;
        return $this;
    }

    /**
    * Gets newSchemaName
    *  新schema_name  备份恢复到新实例和当前实例：    使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，不填时与源schema名一致。
    *
    * @return string|null
    */
    public function getNewSchemaName()
    {
        return $this->container['newSchemaName'];
    }

    /**
    * Sets newSchemaName
    *
    * @param string|null $newSchemaName 新schema_name  备份恢复到新实例和当前实例：    使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，不填时与源schema名一致。
    *
    * @return $this
    */
    public function setNewSchemaName($newSchemaName)
    {
        $this->container['newSchemaName'] = $newSchemaName;
        return $this;
    }

    /**
    * Gets newTableName
    *  新表名  备份恢复到新实例和当前实例：   使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，需注意目标实例里不存在当前的表名，否则无法下发。
    *
    * @return string|null
    */
    public function getNewTableName()
    {
        return $this->container['newTableName'];
    }

    /**
    * Sets newTableName
    *
    * @param string|null $newTableName 新表名  备份恢复到新实例和当前实例：   使用DATABASE类型恢复参数无效。   使用DATABASE_TABLE级别恢复，需注意目标实例里不存在当前的表名，否则无法下发。
    *
    * @return $this
    */
    public function setNewTableName($newTableName)
    {
        $this->container['newTableName'] = $newTableName;
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

