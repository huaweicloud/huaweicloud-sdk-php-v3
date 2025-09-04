<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportTableVolumeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportTableVolumeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * tableName  **参数解释**:   表名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'schemaNames' => 'string[]',
            'tableName' => 'string',
            'userName' => 'string',
            'sortKey' => 'string',
            'sortOrder' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * tableName  **参数解释**:   表名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'schemaNames' => null,
        'tableName' => null,
        'userName' => null,
        'sortKey' => null,
        'sortOrder' => null
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
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * tableName  **参数解释**:   表名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'schemaNames' => 'schema_names',
            'tableName' => 'table_name',
            'userName' => 'user_name',
            'sortKey' => 'sort_key',
            'sortOrder' => 'sort_order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * tableName  **参数解释**:   表名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'schemaNames' => 'setSchemaNames',
            'tableName' => 'setTableName',
            'userName' => 'setUserName',
            'sortKey' => 'setSortKey',
            'sortOrder' => 'setSortOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * tableName  **参数解释**:   表名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'schemaNames' => 'getSchemaNames',
            'tableName' => 'getTableName',
            'userName' => 'getUserName',
            'sortKey' => 'getSortKey',
            'sortOrder' => 'getSortOrder'
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
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['schemaNames'] = isset($data['schemaNames']) ? $data['schemaNames'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['schemaNames'] === null) {
            $invalidProperties[] = "'schemaNames' can't be null";
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
    * Gets databaseName
    *  **参数解释**: 数据库名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
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
    * @param string $databaseName **参数解释**: 数据库名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets schemaNames
    *  **参数解释**: schema名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return string[]
    */
    public function getSchemaNames()
    {
        return $this->container['schemaNames'];
    }

    /**
    * Sets schemaNames
    *
    * @param string[] $schemaNames **参数解释**: schema名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSchemaNames($schemaNames)
    {
        $this->container['schemaNames'] = $schemaNames;
        return $this;
    }

    /**
    * Gets tableName
    *  **参数解释**:   表名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
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
    * @param string|null $tableName **参数解释**:   表名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释**: 表所属用户名称。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**: 排序字段。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**: 排序字段。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortOrder
    *  **参数解释**: 排序方法。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
    * Sets sortOrder
    *
    * @param string|null $sortOrder **参数解释**: 排序方法。 **约束限制**: 不涉及 **取值范围**: 不涉及 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
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

