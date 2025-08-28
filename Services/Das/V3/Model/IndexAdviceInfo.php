<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndexAdviceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndexAdviceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemaName  schema名
    * tableName  表名
    * indexName  索引名
    * columns  列
    * unique  是否唯一
    * trackId  追踪id
    * quality  质量
    * ddlAddIndex  ddl需要添加的索引
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemaName' => 'string',
            'tableName' => 'string',
            'indexName' => 'string',
            'columns' => 'string[]',
            'unique' => 'bool',
            'trackId' => 'string',
            'quality' => 'object',
            'ddlAddIndex' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemaName  schema名
    * tableName  表名
    * indexName  索引名
    * columns  列
    * unique  是否唯一
    * trackId  追踪id
    * quality  质量
    * ddlAddIndex  ddl需要添加的索引
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemaName' => null,
        'tableName' => null,
        'indexName' => null,
        'columns' => null,
        'unique' => null,
        'trackId' => null,
        'quality' => null,
        'ddlAddIndex' => null
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
    * schemaName  schema名
    * tableName  表名
    * indexName  索引名
    * columns  列
    * unique  是否唯一
    * trackId  追踪id
    * quality  质量
    * ddlAddIndex  ddl需要添加的索引
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemaName' => 'schema_name',
            'tableName' => 'table_name',
            'indexName' => 'index_name',
            'columns' => 'columns',
            'unique' => 'unique',
            'trackId' => 'track_id',
            'quality' => 'quality',
            'ddlAddIndex' => 'ddl_add_index'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemaName  schema名
    * tableName  表名
    * indexName  索引名
    * columns  列
    * unique  是否唯一
    * trackId  追踪id
    * quality  质量
    * ddlAddIndex  ddl需要添加的索引
    *
    * @var string[]
    */
    protected static $setters = [
            'schemaName' => 'setSchemaName',
            'tableName' => 'setTableName',
            'indexName' => 'setIndexName',
            'columns' => 'setColumns',
            'unique' => 'setUnique',
            'trackId' => 'setTrackId',
            'quality' => 'setQuality',
            'ddlAddIndex' => 'setDdlAddIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemaName  schema名
    * tableName  表名
    * indexName  索引名
    * columns  列
    * unique  是否唯一
    * trackId  追踪id
    * quality  质量
    * ddlAddIndex  ddl需要添加的索引
    *
    * @var string[]
    */
    protected static $getters = [
            'schemaName' => 'getSchemaName',
            'tableName' => 'getTableName',
            'indexName' => 'getIndexName',
            'columns' => 'getColumns',
            'unique' => 'getUnique',
            'trackId' => 'getTrackId',
            'quality' => 'getQuality',
            'ddlAddIndex' => 'getDdlAddIndex'
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
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['indexName'] = isset($data['indexName']) ? $data['indexName'] : null;
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['unique'] = isset($data['unique']) ? $data['unique'] : null;
        $this->container['trackId'] = isset($data['trackId']) ? $data['trackId'] : null;
        $this->container['quality'] = isset($data['quality']) ? $data['quality'] : null;
        $this->container['ddlAddIndex'] = isset($data['ddlAddIndex']) ? $data['ddlAddIndex'] : null;
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
    * Gets schemaName
    *  schema名
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
    * @param string|null $schemaName schema名
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
    * Gets indexName
    *  索引名
    *
    * @return string|null
    */
    public function getIndexName()
    {
        return $this->container['indexName'];
    }

    /**
    * Sets indexName
    *
    * @param string|null $indexName 索引名
    *
    * @return $this
    */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;
        return $this;
    }

    /**
    * Gets columns
    *  列
    *
    * @return string[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param string[]|null $columns 列
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets unique
    *  是否唯一
    *
    * @return bool|null
    */
    public function getUnique()
    {
        return $this->container['unique'];
    }

    /**
    * Sets unique
    *
    * @param bool|null $unique 是否唯一
    *
    * @return $this
    */
    public function setUnique($unique)
    {
        $this->container['unique'] = $unique;
        return $this;
    }

    /**
    * Gets trackId
    *  追踪id
    *
    * @return string|null
    */
    public function getTrackId()
    {
        return $this->container['trackId'];
    }

    /**
    * Sets trackId
    *
    * @param string|null $trackId 追踪id
    *
    * @return $this
    */
    public function setTrackId($trackId)
    {
        $this->container['trackId'] = $trackId;
        return $this;
    }

    /**
    * Gets quality
    *  质量
    *
    * @return object|null
    */
    public function getQuality()
    {
        return $this->container['quality'];
    }

    /**
    * Sets quality
    *
    * @param object|null $quality 质量
    *
    * @return $this
    */
    public function setQuality($quality)
    {
        $this->container['quality'] = $quality;
        return $this;
    }

    /**
    * Gets ddlAddIndex
    *  ddl需要添加的索引
    *
    * @return string|null
    */
    public function getDdlAddIndex()
    {
        return $this->container['ddlAddIndex'];
    }

    /**
    * Sets ddlAddIndex
    *
    * @param string|null $ddlAddIndex ddl需要添加的索引
    *
    * @return $this
    */
    public function setDdlAddIndex($ddlAddIndex)
    {
        $this->container['ddlAddIndex'] = $ddlAddIndex;
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

