<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReadWriteRatioList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReadWriteRatioList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schema  逻辑库名称。
    * table  逻辑表名称。
    * readCount  读次数。
    * writeCount  写次数。
    * relationTables  关联表。
    * lastUpdated  最后执行时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schema' => 'string',
            'table' => 'string',
            'readCount' => 'string',
            'writeCount' => 'string',
            'relationTables' => 'string',
            'lastUpdated' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schema  逻辑库名称。
    * table  逻辑表名称。
    * readCount  读次数。
    * writeCount  写次数。
    * relationTables  关联表。
    * lastUpdated  最后执行时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schema' => null,
        'table' => null,
        'readCount' => null,
        'writeCount' => null,
        'relationTables' => null,
        'lastUpdated' => null
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
    * schema  逻辑库名称。
    * table  逻辑表名称。
    * readCount  读次数。
    * writeCount  写次数。
    * relationTables  关联表。
    * lastUpdated  最后执行时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schema' => 'schema',
            'table' => 'table',
            'readCount' => 'readCount',
            'writeCount' => 'writeCount',
            'relationTables' => 'relationTables',
            'lastUpdated' => 'lastUpdated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schema  逻辑库名称。
    * table  逻辑表名称。
    * readCount  读次数。
    * writeCount  写次数。
    * relationTables  关联表。
    * lastUpdated  最后执行时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'schema' => 'setSchema',
            'table' => 'setTable',
            'readCount' => 'setReadCount',
            'writeCount' => 'setWriteCount',
            'relationTables' => 'setRelationTables',
            'lastUpdated' => 'setLastUpdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schema  逻辑库名称。
    * table  逻辑表名称。
    * readCount  读次数。
    * writeCount  写次数。
    * relationTables  关联表。
    * lastUpdated  最后执行时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'schema' => 'getSchema',
            'table' => 'getTable',
            'readCount' => 'getReadCount',
            'writeCount' => 'getWriteCount',
            'relationTables' => 'getRelationTables',
            'lastUpdated' => 'getLastUpdated'
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
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['readCount'] = isset($data['readCount']) ? $data['readCount'] : null;
        $this->container['writeCount'] = isset($data['writeCount']) ? $data['writeCount'] : null;
        $this->container['relationTables'] = isset($data['relationTables']) ? $data['relationTables'] : null;
        $this->container['lastUpdated'] = isset($data['lastUpdated']) ? $data['lastUpdated'] : null;
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
    * Gets schema
    *  逻辑库名称。
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
    * @param string|null $schema 逻辑库名称。
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
    *  逻辑表名称。
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
    * @param string|null $table 逻辑表名称。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets readCount
    *  读次数。
    *
    * @return string|null
    */
    public function getReadCount()
    {
        return $this->container['readCount'];
    }

    /**
    * Sets readCount
    *
    * @param string|null $readCount 读次数。
    *
    * @return $this
    */
    public function setReadCount($readCount)
    {
        $this->container['readCount'] = $readCount;
        return $this;
    }

    /**
    * Gets writeCount
    *  写次数。
    *
    * @return string|null
    */
    public function getWriteCount()
    {
        return $this->container['writeCount'];
    }

    /**
    * Sets writeCount
    *
    * @param string|null $writeCount 写次数。
    *
    * @return $this
    */
    public function setWriteCount($writeCount)
    {
        $this->container['writeCount'] = $writeCount;
        return $this;
    }

    /**
    * Gets relationTables
    *  关联表。
    *
    * @return string|null
    */
    public function getRelationTables()
    {
        return $this->container['relationTables'];
    }

    /**
    * Sets relationTables
    *
    * @param string|null $relationTables 关联表。
    *
    * @return $this
    */
    public function setRelationTables($relationTables)
    {
        $this->container['relationTables'] = $relationTables;
        return $this;
    }

    /**
    * Gets lastUpdated
    *  最后执行时间。
    *
    * @return string|null
    */
    public function getLastUpdated()
    {
        return $this->container['lastUpdated'];
    }

    /**
    * Sets lastUpdated
    *
    * @param string|null $lastUpdated 最后执行时间。
    *
    * @return $this
    */
    public function setLastUpdated($lastUpdated)
    {
        $this->container['lastUpdated'] = $lastUpdated;
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

