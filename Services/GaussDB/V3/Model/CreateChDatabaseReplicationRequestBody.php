<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateChDatabaseReplicationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateChDatabaseReplicationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID。
    * sourceDatabase  源数据库。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceInstanceId' => 'string',
            'sourceNodeId' => 'string',
            'sourceDatabase' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID。
    * sourceDatabase  源数据库。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceInstanceId' => null,
        'sourceNodeId' => null,
        'sourceDatabase' => null
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
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID。
    * sourceDatabase  源数据库。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceInstanceId' => 'source_instance_id',
            'sourceNodeId' => 'source_node_id',
            'sourceDatabase' => 'source_database'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID。
    * sourceDatabase  源数据库。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceInstanceId' => 'setSourceInstanceId',
            'sourceNodeId' => 'setSourceNodeId',
            'sourceDatabase' => 'setSourceDatabase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID。
    * sourceDatabase  源数据库。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceInstanceId' => 'getSourceInstanceId',
            'sourceNodeId' => 'getSourceNodeId',
            'sourceDatabase' => 'getSourceDatabase'
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
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
        $this->container['sourceNodeId'] = isset($data['sourceNodeId']) ? $data['sourceNodeId'] : null;
        $this->container['sourceDatabase'] = isset($data['sourceDatabase']) ? $data['sourceDatabase'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceInstanceId'] === null) {
            $invalidProperties[] = "'sourceInstanceId' can't be null";
        }
        if ($this->container['sourceDatabase'] === null) {
            $invalidProperties[] = "'sourceDatabase' can't be null";
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
    * Gets sourceInstanceId
    *  源实例ID。
    *
    * @return string
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string $sourceInstanceId 源实例ID。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
        return $this;
    }

    /**
    * Gets sourceNodeId
    *  源节点ID。TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID。
    *
    * @return string|null
    */
    public function getSourceNodeId()
    {
        return $this->container['sourceNodeId'];
    }

    /**
    * Sets sourceNodeId
    *
    * @param string|null $sourceNodeId 源节点ID。TaurusDB只读节点ID。如为空，则取TaurusDB主节点ID。
    *
    * @return $this
    */
    public function setSourceNodeId($sourceNodeId)
    {
        $this->container['sourceNodeId'] = $sourceNodeId;
        return $this;
    }

    /**
    * Gets sourceDatabase
    *  源数据库。
    *
    * @return string
    */
    public function getSourceDatabase()
    {
        return $this->container['sourceDatabase'];
    }

    /**
    * Sets sourceDatabase
    *
    * @param string $sourceDatabase 源数据库。
    *
    * @return $this
    */
    public function setSourceDatabase($sourceDatabase)
    {
        $this->container['sourceDatabase'] = $sourceDatabase;
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

