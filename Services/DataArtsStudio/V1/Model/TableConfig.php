<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * database  数据库名称。
    * schema  schema名称。
    * table  表名称。
    * isExist  是否存在。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'database' => 'string',
            'schema' => 'string',
            'table' => 'string',
            'isExist' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * database  数据库名称。
    * schema  schema名称。
    * table  表名称。
    * isExist  是否存在。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'database' => null,
        'schema' => null,
        'table' => null,
        'isExist' => null
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
    * database  数据库名称。
    * schema  schema名称。
    * table  表名称。
    * isExist  是否存在。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'database' => 'database',
            'schema' => 'schema',
            'table' => 'table',
            'isExist' => 'is_exist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * database  数据库名称。
    * schema  schema名称。
    * table  表名称。
    * isExist  是否存在。
    *
    * @var string[]
    */
    protected static $setters = [
            'database' => 'setDatabase',
            'schema' => 'setSchema',
            'table' => 'setTable',
            'isExist' => 'setIsExist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * database  数据库名称。
    * schema  schema名称。
    * table  表名称。
    * isExist  是否存在。
    *
    * @var string[]
    */
    protected static $getters = [
            'database' => 'getDatabase',
            'schema' => 'getSchema',
            'table' => 'getTable',
            'isExist' => 'getIsExist'
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
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['isExist'] = isset($data['isExist']) ? $data['isExist'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) > 100)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) < 1)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) > 100)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) < 1)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) > 100)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) < 1)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be bigger than or equal to 1.";
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
    * Gets database
    *  数据库名称。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 数据库名称。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets schema
    *  schema名称。
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema schema名称。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets table
    *  表名称。
    *
    * @return string|null
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string|null $table 表名称。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets isExist
    *  是否存在。
    *
    * @return bool|null
    */
    public function getIsExist()
    {
        return $this->container['isExist'];
    }

    /**
    * Sets isExist
    *
    * @param bool|null $isExist 是否存在。
    *
    * @return $this
    */
    public function setIsExist($isExist)
    {
        $this->container['isExist'] = $isExist;
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

