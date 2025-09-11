<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchemaBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchemaBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * column  目标字段
    * schema  目标数据库
    * table  目标表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'column' => 'string',
            'schema' => 'string',
            'table' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * column  目标字段
    * schema  目标数据库
    * table  目标表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'column' => null,
        'schema' => null,
        'table' => null
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
    * column  目标字段
    * schema  目标数据库
    * table  目标表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'column' => 'column',
            'schema' => 'schema',
            'table' => 'table'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * column  目标字段
    * schema  目标数据库
    * table  目标表
    *
    * @var string[]
    */
    protected static $setters = [
            'column' => 'setColumn',
            'schema' => 'setSchema',
            'table' => 'setTable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * column  目标字段
    * schema  目标数据库
    * table  目标表
    *
    * @var string[]
    */
    protected static $getters = [
            'column' => 'getColumn',
            'schema' => 'getSchema',
            'table' => 'getTable'
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
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
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
    * Gets column
    *  目标字段
    *
    * @return string|null
    */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
    * Sets column
    *
    * @param string|null $column 目标字段
    *
    * @return $this
    */
    public function setColumn($column)
    {
        $this->container['column'] = $column;
        return $this;
    }

    /**
    * Gets schema
    *  目标数据库
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
    * @param string|null $schema 目标数据库
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
    *  目标表
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
    * @param string|null $table 目标表
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
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

