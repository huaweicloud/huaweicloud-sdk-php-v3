<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTableDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTableDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  数据连接id。
    * sourceType  数据源类型。
    * database  db名称。
    * schema  schema名称。
    * table  table名称。
    * queue  队列名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instance' => 'string',
            'guid' => 'string',
            'dataConnectionId' => 'string',
            'sourceType' => 'string',
            'database' => 'string',
            'schema' => 'string',
            'table' => 'string',
            'queue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  数据连接id。
    * sourceType  数据源类型。
    * database  db名称。
    * schema  schema名称。
    * table  table名称。
    * queue  队列名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instance' => null,
        'guid' => null,
        'dataConnectionId' => null,
        'sourceType' => null,
        'database' => null,
        'schema' => null,
        'table' => null,
        'queue' => null
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
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  数据连接id。
    * sourceType  数据源类型。
    * database  db名称。
    * schema  schema名称。
    * table  table名称。
    * queue  队列名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instance' => 'instance',
            'guid' => 'guid',
            'dataConnectionId' => 'data_connection_id',
            'sourceType' => 'source_type',
            'database' => 'database',
            'schema' => 'schema',
            'table' => 'table',
            'queue' => 'queue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  数据连接id。
    * sourceType  数据源类型。
    * database  db名称。
    * schema  schema名称。
    * table  table名称。
    * queue  队列名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'instance' => 'setInstance',
            'guid' => 'setGuid',
            'dataConnectionId' => 'setDataConnectionId',
            'sourceType' => 'setSourceType',
            'database' => 'setDatabase',
            'schema' => 'setSchema',
            'table' => 'setTable',
            'queue' => 'setQueue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instance  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    * guid  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    * dataConnectionId  数据连接id。
    * sourceType  数据源类型。
    * database  db名称。
    * schema  schema名称。
    * table  table名称。
    * queue  队列名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'instance' => 'getInstance',
            'guid' => 'getGuid',
            'dataConnectionId' => 'getDataConnectionId',
            'sourceType' => 'getSourceType',
            'database' => 'getDatabase',
            'schema' => 'getSchema',
            'table' => 'getTable',
            'queue' => 'getQueue'
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['dataConnectionId'] = isset($data['dataConnectionId']) ? $data['dataConnectionId'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instance'] === null) {
            $invalidProperties[] = "'instance' can't be null";
        }
            if ((mb_strlen($this->container['instance']) > 36)) {
                $invalidProperties[] = "invalid value for 'instance', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instance']) < 32)) {
                $invalidProperties[] = "invalid value for 'instance', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['guid'] === null) {
            $invalidProperties[] = "'guid' can't be null";
        }
            if ((mb_strlen($this->container['guid']) > 36)) {
                $invalidProperties[] = "invalid value for 'guid', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['guid']) < 32)) {
                $invalidProperties[] = "invalid value for 'guid', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataConnectionId']) && (mb_strlen($this->container['dataConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataConnectionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataConnectionId']) && (mb_strlen($this->container['dataConnectionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataConnectionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) > 64)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) < 1)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) > 256)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) < 1)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['queue']) && (mb_strlen($this->container['queue']) > 64)) {
                $invalidProperties[] = "invalid value for 'queue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['queue']) && (mb_strlen($this->container['queue']) < 1)) {
                $invalidProperties[] = "invalid value for 'queue', the character length must be bigger than or equal to 1.";
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
    * Gets instance
    *  实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return string
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param string $instance 实例ID，获取方法请参见[实例ID和工作空间ID](dataartsstudio_02_0350.xml)。
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets guid
    *  资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    *
    * @return string
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string $guid 资产guid，获取方法请参见[数据资产guid](dataartsstudio_02_0351.xml)。
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets dataConnectionId
    *  数据连接id。
    *
    * @return string|null
    */
    public function getDataConnectionId()
    {
        return $this->container['dataConnectionId'];
    }

    /**
    * Sets dataConnectionId
    *
    * @param string|null $dataConnectionId 数据连接id。
    *
    * @return $this
    */
    public function setDataConnectionId($dataConnectionId)
    {
        $this->container['dataConnectionId'] = $dataConnectionId;
        return $this;
    }

    /**
    * Gets sourceType
    *  数据源类型。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 数据源类型。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets database
    *  db名称。
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
    * @param string|null $database db名称。
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
    *  table名称。
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
    * @param string|null $table table名称。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets queue
    *  队列名称。
    *
    * @return string|null
    */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
    * Sets queue
    *
    * @param string|null $queue 队列名称。
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
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

