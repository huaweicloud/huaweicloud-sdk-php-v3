<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataTransformationObjectVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataTransformationObjectVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库对象、数据库表名称和过滤类型名称，例如格式为db1-*-*-tb1-*-*---conditionFilter--。
    * dataTransformationType  contentConditionalFilter：普通行过滤配置； configConditionalFilter：高级行过滤配置。
    * dbName  库名称。
    * schemaName  schema名称。
    * tableName  表名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'dataTransformationType' => 'string',
            'dbName' => 'string',
            'schemaName' => 'string',
            'tableName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库对象、数据库表名称和过滤类型名称，例如格式为db1-*-*-tb1-*-*---conditionFilter--。
    * dataTransformationType  contentConditionalFilter：普通行过滤配置； configConditionalFilter：高级行过滤配置。
    * dbName  库名称。
    * schemaName  schema名称。
    * tableName  表名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'dataTransformationType' => null,
        'dbName' => null,
        'schemaName' => null,
        'tableName' => null
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
    * id  数据库对象、数据库表名称和过滤类型名称，例如格式为db1-*-*-tb1-*-*---conditionFilter--。
    * dataTransformationType  contentConditionalFilter：普通行过滤配置； configConditionalFilter：高级行过滤配置。
    * dbName  库名称。
    * schemaName  schema名称。
    * tableName  表名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'dataTransformationType' => 'data_transformation_type',
            'dbName' => 'db_name',
            'schemaName' => 'schema_name',
            'tableName' => 'table_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库对象、数据库表名称和过滤类型名称，例如格式为db1-*-*-tb1-*-*---conditionFilter--。
    * dataTransformationType  contentConditionalFilter：普通行过滤配置； configConditionalFilter：高级行过滤配置。
    * dbName  库名称。
    * schemaName  schema名称。
    * tableName  表名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'dataTransformationType' => 'setDataTransformationType',
            'dbName' => 'setDbName',
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库对象、数据库表名称和过滤类型名称，例如格式为db1-*-*-tb1-*-*---conditionFilter--。
    * dataTransformationType  contentConditionalFilter：普通行过滤配置； configConditionalFilter：高级行过滤配置。
    * dbName  库名称。
    * schemaName  schema名称。
    * tableName  表名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'dataTransformationType' => 'getDataTransformationType',
            'dbName' => 'getDbName',
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['dataTransformationType'] = isset($data['dataTransformationType']) ? $data['dataTransformationType'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
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
    * Gets id
    *  数据库对象、数据库表名称和过滤类型名称，例如格式为db1-*-*-tb1-*-*---conditionFilter--。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 数据库对象、数据库表名称和过滤类型名称，例如格式为db1-*-*-tb1-*-*---conditionFilter--。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets dataTransformationType
    *  contentConditionalFilter：普通行过滤配置； configConditionalFilter：高级行过滤配置。
    *
    * @return string|null
    */
    public function getDataTransformationType()
    {
        return $this->container['dataTransformationType'];
    }

    /**
    * Sets dataTransformationType
    *
    * @param string|null $dataTransformationType contentConditionalFilter：普通行过滤配置； configConditionalFilter：高级行过滤配置。
    *
    * @return $this
    */
    public function setDataTransformationType($dataTransformationType)
    {
        $this->container['dataTransformationType'] = $dataTransformationType;
        return $this;
    }

    /**
    * Gets dbName
    *  库名称。
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
    * @param string|null $dbName 库名称。
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
    *  表名称。
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
    * @param string|null $tableName 表名称。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
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

