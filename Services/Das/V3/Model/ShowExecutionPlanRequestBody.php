<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowExecutionPlanRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowExecutionPlanRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  SQL脚本
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeType  节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    * useDefaultSearchPath  PostgreSQL是否使用默认searchPath（仅在实例是PostgreSQL时可用）
    * ignoreLimit  是否忽略限制
    * perpage  每页记录数，取值范围：[0, 100]
    * curpage  页码，取值范围：[0, 2^31-1]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'schemaName' => 'string',
            'sqlScript' => 'string',
            'nodeId' => 'string',
            'nodeType' => 'string',
            'useDefaultSearchPath' => 'bool',
            'ignoreLimit' => 'bool',
            'perpage' => 'int',
            'curpage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  SQL脚本
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeType  节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    * useDefaultSearchPath  PostgreSQL是否使用默认searchPath（仅在实例是PostgreSQL时可用）
    * ignoreLimit  是否忽略限制
    * perpage  每页记录数，取值范围：[0, 100]
    * curpage  页码，取值范围：[0, 2^31-1]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'schemaName' => null,
        'sqlScript' => null,
        'nodeId' => null,
        'nodeType' => null,
        'useDefaultSearchPath' => null,
        'ignoreLimit' => null,
        'perpage' => 'int32',
        'curpage' => 'int32'
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
    * sqlScript  SQL脚本
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeType  节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    * useDefaultSearchPath  PostgreSQL是否使用默认searchPath（仅在实例是PostgreSQL时可用）
    * ignoreLimit  是否忽略限制
    * perpage  每页记录数，取值范围：[0, 100]
    * curpage  页码，取值范围：[0, 2^31-1]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'schemaName' => 'schema_name',
            'sqlScript' => 'sql_script',
            'nodeId' => 'node_id',
            'nodeType' => 'node_type',
            'useDefaultSearchPath' => 'use_default_search_path',
            'ignoreLimit' => 'ignore_limit',
            'perpage' => 'perpage',
            'curpage' => 'curpage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  SQL脚本
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeType  节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    * useDefaultSearchPath  PostgreSQL是否使用默认searchPath（仅在实例是PostgreSQL时可用）
    * ignoreLimit  是否忽略限制
    * perpage  每页记录数，取值范围：[0, 100]
    * curpage  页码，取值范围：[0, 2^31-1]
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'schemaName' => 'setSchemaName',
            'sqlScript' => 'setSqlScript',
            'nodeId' => 'setNodeId',
            'nodeType' => 'setNodeType',
            'useDefaultSearchPath' => 'setUseDefaultSearchPath',
            'ignoreLimit' => 'setIgnoreLimit',
            'perpage' => 'setPerpage',
            'curpage' => 'setCurpage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  数据库名称
    * schemaName  schema名称
    * sqlScript  SQL脚本
    * nodeId  实例节点ID，实例节点的唯一标识
    * nodeType  节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    * useDefaultSearchPath  PostgreSQL是否使用默认searchPath（仅在实例是PostgreSQL时可用）
    * ignoreLimit  是否忽略限制
    * perpage  每页记录数，取值范围：[0, 100]
    * curpage  页码，取值范围：[0, 2^31-1]
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'schemaName' => 'getSchemaName',
            'sqlScript' => 'getSqlScript',
            'nodeId' => 'getNodeId',
            'nodeType' => 'getNodeType',
            'useDefaultSearchPath' => 'getUseDefaultSearchPath',
            'ignoreLimit' => 'getIgnoreLimit',
            'perpage' => 'getPerpage',
            'curpage' => 'getCurpage'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['useDefaultSearchPath'] = isset($data['useDefaultSearchPath']) ? $data['useDefaultSearchPath'] : null;
        $this->container['ignoreLimit'] = isset($data['ignoreLimit']) ? $data['ignoreLimit'] : null;
        $this->container['perpage'] = isset($data['perpage']) ? $data['perpage'] : null;
        $this->container['curpage'] = isset($data['curpage']) ? $data['curpage'] : null;
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
        if ($this->container['perpage'] === null) {
            $invalidProperties[] = "'perpage' can't be null";
        }
        if ($this->container['curpage'] === null) {
            $invalidProperties[] = "'curpage' can't be null";
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
    *  SQL脚本
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
    * @param string $sqlScript SQL脚本
    *
    * @return $this
    */
    public function setSqlScript($sqlScript)
    {
        $this->container['sqlScript'] = $sqlScript;
        return $this;
    }

    /**
    * Gets nodeId
    *  实例节点ID，实例节点的唯一标识
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
    * @param string|null $nodeId 实例节点ID，实例节点的唯一标识
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型（master：主节点，slave：副节点，readreplica：只读节点）
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
    * @param string|null $nodeType 节点类型（master：主节点，slave：副节点，readreplica：只读节点）
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets useDefaultSearchPath
    *  PostgreSQL是否使用默认searchPath（仅在实例是PostgreSQL时可用）
    *
    * @return bool|null
    */
    public function getUseDefaultSearchPath()
    {
        return $this->container['useDefaultSearchPath'];
    }

    /**
    * Sets useDefaultSearchPath
    *
    * @param bool|null $useDefaultSearchPath PostgreSQL是否使用默认searchPath（仅在实例是PostgreSQL时可用）
    *
    * @return $this
    */
    public function setUseDefaultSearchPath($useDefaultSearchPath)
    {
        $this->container['useDefaultSearchPath'] = $useDefaultSearchPath;
        return $this;
    }

    /**
    * Gets ignoreLimit
    *  是否忽略限制
    *
    * @return bool|null
    */
    public function getIgnoreLimit()
    {
        return $this->container['ignoreLimit'];
    }

    /**
    * Sets ignoreLimit
    *
    * @param bool|null $ignoreLimit 是否忽略限制
    *
    * @return $this
    */
    public function setIgnoreLimit($ignoreLimit)
    {
        $this->container['ignoreLimit'] = $ignoreLimit;
        return $this;
    }

    /**
    * Gets perpage
    *  每页记录数，取值范围：[0, 100]
    *
    * @return int
    */
    public function getPerpage()
    {
        return $this->container['perpage'];
    }

    /**
    * Sets perpage
    *
    * @param int $perpage 每页记录数，取值范围：[0, 100]
    *
    * @return $this
    */
    public function setPerpage($perpage)
    {
        $this->container['perpage'] = $perpage;
        return $this;
    }

    /**
    * Gets curpage
    *  页码，取值范围：[0, 2^31-1]
    *
    * @return int
    */
    public function getCurpage()
    {
        return $this->container['curpage'];
    }

    /**
    * Sets curpage
    *
    * @param int $curpage 页码，取值范围：[0, 2^31-1]
    *
    * @return $this
    */
    public function setCurpage($curpage)
    {
        $this->container['curpage'] = $curpage;
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

