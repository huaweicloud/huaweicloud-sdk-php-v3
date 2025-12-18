<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTableVolumesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTableVolumesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及。
    * tableName  **参数解释**: 表名称。。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 1 - 100 **默认取值**: 10
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 0 - 10000 **默认取值**: 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'schemaNames' => 'string[]',
            'tableName' => 'string',
            'userName' => 'string',
            'sortKey' => 'string',
            'sortOrder' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及。
    * tableName  **参数解释**: 表名称。。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 1 - 100 **默认取值**: 10
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 0 - 10000 **默认取值**: 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'schemaNames' => null,
        'tableName' => null,
        'userName' => null,
        'sortKey' => null,
        'sortOrder' => null,
        'limit' => null,
        'offset' => null
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
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及。
    * tableName  **参数解释**: 表名称。。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 1 - 100 **默认取值**: 10
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 0 - 10000 **默认取值**: 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'schemaNames' => 'schema_names',
            'tableName' => 'table_name',
            'userName' => 'user_name',
            'sortKey' => 'sort_key',
            'sortOrder' => 'sort_order',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及。
    * tableName  **参数解释**: 表名称。。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 1 - 100 **默认取值**: 10
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 0 - 10000 **默认取值**: 0
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'schemaNames' => 'setSchemaNames',
            'tableName' => 'setTableName',
            'userName' => 'setUserName',
            'sortKey' => 'setSortKey',
            'sortOrder' => 'setSortOrder',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  **参数解释**: 数据库名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * schemaNames  **参数解释**: schema名称。 **约束限制**: 不涉及。
    * tableName  **参数解释**: 表名称。。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * userName  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortKey  **参数解释**: 排序字段。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sortOrder  **参数解释**: 排序方法。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * limit  **参数解释**: 查询记录数 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 1 - 100 **默认取值**: 10
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 0 - 10000 **默认取值**: 0
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'schemaNames' => 'getSchemaNames',
            'tableName' => 'getTableName',
            'userName' => 'getUserName',
            'sortKey' => 'getSortKey',
            'sortOrder' => 'getSortOrder',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
    const SORT_KEY_TABLE_SIZE = 'table_size';
    const SORT_KEY_ID = 'id';
    const SORT_KEY_TABLE_NAME = 'table_name';
    const SORT_KEY_TABLE_OWNER = 'table_owner';
    const SORT_KEY_DATABASE_NAME = 'database_name';
    const SORT_KEY_SCHEMA_NAME = 'schema_name';
    const SORT_KEY_IS_PART_TYPE = 'is_part_type';
    const SORT_KEY_IS_HASH_CLUSTER_KEY = 'is_hash_cluster_key';
    const SORT_KEY_TUPLES = 'tuples';
    const SORT_KEY_CREATE_TIME = 'create_time';
    const SORT_KEY_UPDATE_TIME = 'update_time';
    const SORT_KEY_AVERAGE_SIZE = 'average_size';
    const SORT_KEY_MAX_RATIO = 'max_ratio';
    const SORT_KEY_MIN_RATIO = 'min_ratio';
    const SORT_KEY_SKEW_SIZE = 'skew_size';
    const SORT_KEY_SKEW_RATIO = 'skew_ratio';
    const SORT_KEY_SKEW_STDDEV = 'skew_stddev';
    const SORT_ORDER_DESC = 'DESC';
    const SORT_ORDER_ASC = 'ASC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_TABLE_SIZE,
            self::SORT_KEY_ID,
            self::SORT_KEY_TABLE_NAME,
            self::SORT_KEY_TABLE_OWNER,
            self::SORT_KEY_DATABASE_NAME,
            self::SORT_KEY_SCHEMA_NAME,
            self::SORT_KEY_IS_PART_TYPE,
            self::SORT_KEY_IS_HASH_CLUSTER_KEY,
            self::SORT_KEY_TUPLES,
            self::SORT_KEY_CREATE_TIME,
            self::SORT_KEY_UPDATE_TIME,
            self::SORT_KEY_AVERAGE_SIZE,
            self::SORT_KEY_MAX_RATIO,
            self::SORT_KEY_MIN_RATIO,
            self::SORT_KEY_SKEW_SIZE,
            self::SORT_KEY_SKEW_RATIO,
            self::SORT_KEY_SKEW_STDDEV,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortOrderAllowableValues()
    {
        return [
            self::SORT_ORDER_DESC,
            self::SORT_ORDER_ASC,
        ];
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortOrderAllowableValues();
                if (!is_null($this->container['sortOrder']) && !in_array($this->container['sortOrder'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortOrder', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释**: 数据库名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string $databaseName **参数解释**: 数据库名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    *  **参数解释**: schema名称。 **约束限制**: 不涉及。
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
    * @param string[] $schemaNames **参数解释**: schema名称。 **约束限制**: 不涉及。
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
    *  **参数解释**: 表名称。。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string|null $tableName **参数解释**: 表名称。。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    *  **参数解释**: 表所属用户名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string|null $userName **参数解释**: 表所属用户名称。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    *  **参数解释**: 排序字段。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string|null $sortKey **参数解释**: 排序字段。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    *  **参数解释**: 排序方法。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string|null $sortOrder **参数解释**: 排序方法。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 查询记录数 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 1 - 100 **默认取值**: 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**: 查询记录数 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 1 - 100 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 0 - 10000 **默认取值**: 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。 **约束限制**: 必须为数字，不能为负数。 **取值范围**: 0 - 10000 **默认取值**: 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

