<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTuningReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTuningReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  sql脚本
    * nodeType  节点类型
    * nodeId  节点Id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'schemaName' => 'string',
            'sqlScript' => 'string',
            'nodeType' => 'string',
            'nodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  sql脚本
    * nodeType  节点类型
    * nodeId  节点Id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'schemaName' => null,
        'sqlScript' => null,
        'nodeType' => null,
        'nodeId' => null
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
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  sql脚本
    * nodeType  节点类型
    * nodeId  节点Id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'sqlScript' => 'sql_script',
            'nodeType' => 'node_type',
            'nodeId' => 'node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  sql脚本
    * nodeType  节点类型
    * nodeId  节点Id
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'sqlScript' => 'setSqlScript',
            'nodeType' => 'setNodeType',
            'nodeId' => 'setNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  sql脚本
    * nodeType  节点类型
    * nodeId  节点Id
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'sqlScript' => 'getSqlScript',
            'nodeType' => 'getNodeType',
            'nodeId' => 'getNodeId'
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
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['sqlScript'] = isset($data['sqlScript']) ? $data['sqlScript'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
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
        if ($this->container['sqlScript'] === null) {
            $invalidProperties[] = "'sqlScript' can't be null";
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
    *  数据库名称
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
    * @param string $databaseName 数据库名称
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
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
    * Gets sqlScript
    *  sql脚本
    *
    * @return string
    */
    public function getSqlScript()
    {
        return $this->container['sqlScript'];
    }

    /**
    * Sets sqlScript
    *
    * @param string $sqlScript sql脚本
    *
    * @return $this
    */
    public function setSqlScript($sqlScript)
    {
        $this->container['sqlScript'] = $sqlScript;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点Id
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点Id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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

