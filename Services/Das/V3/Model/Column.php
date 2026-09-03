<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Column implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Column';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoIncrement  是否自增
    * dataType  数据类型
    * dbName  数据库名称
    * label  标签
    * name  名称
    * realName  实际名称
    * size  尺寸大小
    * tableName  表名
    * schemaName  schema名称
    * readonly  是否只读
    * isBinary  是否二进制
    * intDataType  数据类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoIncrement' => 'bool',
            'dataType' => 'string',
            'dbName' => 'string',
            'label' => 'string',
            'name' => 'string',
            'realName' => 'string',
            'size' => 'int',
            'tableName' => 'string',
            'schemaName' => 'string',
            'readonly' => 'bool',
            'isBinary' => 'bool',
            'intDataType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoIncrement  是否自增
    * dataType  数据类型
    * dbName  数据库名称
    * label  标签
    * name  名称
    * realName  实际名称
    * size  尺寸大小
    * tableName  表名
    * schemaName  schema名称
    * readonly  是否只读
    * isBinary  是否二进制
    * intDataType  数据类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoIncrement' => null,
        'dataType' => null,
        'dbName' => null,
        'label' => null,
        'name' => null,
        'realName' => null,
        'size' => 'int32',
        'tableName' => null,
        'schemaName' => null,
        'readonly' => null,
        'isBinary' => null,
        'intDataType' => 'int32'
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
    * autoIncrement  是否自增
    * dataType  数据类型
    * dbName  数据库名称
    * label  标签
    * name  名称
    * realName  实际名称
    * size  尺寸大小
    * tableName  表名
    * schemaName  schema名称
    * readonly  是否只读
    * isBinary  是否二进制
    * intDataType  数据类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoIncrement' => 'auto_increment',
            'dataType' => 'data_type',
            'dbName' => 'db_name',
            'label' => 'label',
            'name' => 'name',
            'realName' => 'real_name',
            'size' => 'size',
            'tableName' => 'table_name',
            'schemaName' => 'schema_name',
            'readonly' => 'readonly',
            'isBinary' => 'is_binary',
            'intDataType' => 'int_data_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoIncrement  是否自增
    * dataType  数据类型
    * dbName  数据库名称
    * label  标签
    * name  名称
    * realName  实际名称
    * size  尺寸大小
    * tableName  表名
    * schemaName  schema名称
    * readonly  是否只读
    * isBinary  是否二进制
    * intDataType  数据类型
    *
    * @var string[]
    */
    protected static $setters = [
            'autoIncrement' => 'setAutoIncrement',
            'dataType' => 'setDataType',
            'dbName' => 'setDbName',
            'label' => 'setLabel',
            'name' => 'setName',
            'realName' => 'setRealName',
            'size' => 'setSize',
            'tableName' => 'setTableName',
            'schemaName' => 'setSchemaName',
            'readonly' => 'setReadonly',
            'isBinary' => 'setIsBinary',
            'intDataType' => 'setIntDataType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoIncrement  是否自增
    * dataType  数据类型
    * dbName  数据库名称
    * label  标签
    * name  名称
    * realName  实际名称
    * size  尺寸大小
    * tableName  表名
    * schemaName  schema名称
    * readonly  是否只读
    * isBinary  是否二进制
    * intDataType  数据类型
    *
    * @var string[]
    */
    protected static $getters = [
            'autoIncrement' => 'getAutoIncrement',
            'dataType' => 'getDataType',
            'dbName' => 'getDbName',
            'label' => 'getLabel',
            'name' => 'getName',
            'realName' => 'getRealName',
            'size' => 'getSize',
            'tableName' => 'getTableName',
            'schemaName' => 'getSchemaName',
            'readonly' => 'getReadonly',
            'isBinary' => 'getIsBinary',
            'intDataType' => 'getIntDataType'
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
        $this->container['autoIncrement'] = isset($data['autoIncrement']) ? $data['autoIncrement'] : null;
        $this->container['dataType'] = isset($data['dataType']) ? $data['dataType'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['realName'] = isset($data['realName']) ? $data['realName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['isBinary'] = isset($data['isBinary']) ? $data['isBinary'] : null;
        $this->container['intDataType'] = isset($data['intDataType']) ? $data['intDataType'] : null;
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
    * Gets autoIncrement
    *  是否自增
    *
    * @return bool|null
    */
    public function getAutoIncrement()
    {
        return $this->container['autoIncrement'];
    }

    /**
    * Sets autoIncrement
    *
    * @param bool|null $autoIncrement 是否自增
    *
    * @return $this
    */
    public function setAutoIncrement($autoIncrement)
    {
        $this->container['autoIncrement'] = $autoIncrement;
        return $this;
    }

    /**
    * Gets dataType
    *  数据类型
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
    * @param string|null $dataType 数据类型
    *
    * @return $this
    */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
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
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets label
    *  标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets realName
    *  实际名称
    *
    * @return string|null
    */
    public function getRealName()
    {
        return $this->container['realName'];
    }

    /**
    * Sets realName
    *
    * @param string|null $realName 实际名称
    *
    * @return $this
    */
    public function setRealName($realName)
    {
        $this->container['realName'] = $realName;
        return $this;
    }

    /**
    * Gets size
    *  尺寸大小
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 尺寸大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets tableName
    *  表名
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
    * @param string|null $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets schemaName
    *  schema名称
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
    * @param string|null $schemaName schema名称
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets readonly
    *  是否只读
    *
    * @return bool|null
    */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
    * Sets readonly
    *
    * @param bool|null $readonly 是否只读
    *
    * @return $this
    */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;
        return $this;
    }

    /**
    * Gets isBinary
    *  是否二进制
    *
    * @return bool|null
    */
    public function getIsBinary()
    {
        return $this->container['isBinary'];
    }

    /**
    * Sets isBinary
    *
    * @param bool|null $isBinary 是否二进制
    *
    * @return $this
    */
    public function setIsBinary($isBinary)
    {
        $this->container['isBinary'] = $isBinary;
        return $this;
    }

    /**
    * Gets intDataType
    *  数据类型
    *
    * @return int|null
    */
    public function getIntDataType()
    {
        return $this->container['intDataType'];
    }

    /**
    * Sets intDataType
    *
    * @param int|null $intDataType 数据类型
    *
    * @return $this
    */
    public function setIntDataType($intDataType)
    {
        $this->container['intDataType'] = $intDataType;
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

