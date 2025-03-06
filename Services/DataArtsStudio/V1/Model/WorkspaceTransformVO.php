<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkspaceTransformVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkspaceTransformVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetModelId  所属关系建模的模型ID，ID字符串。
    * targetModelName  工作区名字。
    * description  描述。
    * updateExistTables  是否更新已有表。
    * ids  需要物化的逻辑实体的ID列表，ID字符串。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * connectionId  转化后物理表所属的数据连接ID。
    * database  转化后物理表所属的数据库。
    * queue  转化后物理表所属的队列（仅DLI）。
    * schema  转化后物理表所属的schema（仅DWS和PostgreSQL）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetModelId' => 'string',
            'targetModelName' => 'string',
            'description' => 'string',
            'updateExistTables' => 'bool',
            'ids' => 'string[]',
            'dwType' => 'string',
            'connectionId' => 'string',
            'database' => 'string',
            'queue' => 'string',
            'schema' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetModelId  所属关系建模的模型ID，ID字符串。
    * targetModelName  工作区名字。
    * description  描述。
    * updateExistTables  是否更新已有表。
    * ids  需要物化的逻辑实体的ID列表，ID字符串。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * connectionId  转化后物理表所属的数据连接ID。
    * database  转化后物理表所属的数据库。
    * queue  转化后物理表所属的队列（仅DLI）。
    * schema  转化后物理表所属的schema（仅DWS和PostgreSQL）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetModelId' => null,
        'targetModelName' => null,
        'description' => null,
        'updateExistTables' => null,
        'ids' => null,
        'dwType' => null,
        'connectionId' => null,
        'database' => null,
        'queue' => null,
        'schema' => null
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
    * targetModelId  所属关系建模的模型ID，ID字符串。
    * targetModelName  工作区名字。
    * description  描述。
    * updateExistTables  是否更新已有表。
    * ids  需要物化的逻辑实体的ID列表，ID字符串。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * connectionId  转化后物理表所属的数据连接ID。
    * database  转化后物理表所属的数据库。
    * queue  转化后物理表所属的队列（仅DLI）。
    * schema  转化后物理表所属的schema（仅DWS和PostgreSQL）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetModelId' => 'target_model_id',
            'targetModelName' => 'target_model_name',
            'description' => 'description',
            'updateExistTables' => 'update_exist_tables',
            'ids' => 'ids',
            'dwType' => 'dw_type',
            'connectionId' => 'connection_id',
            'database' => 'database',
            'queue' => 'queue',
            'schema' => 'schema'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetModelId  所属关系建模的模型ID，ID字符串。
    * targetModelName  工作区名字。
    * description  描述。
    * updateExistTables  是否更新已有表。
    * ids  需要物化的逻辑实体的ID列表，ID字符串。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * connectionId  转化后物理表所属的数据连接ID。
    * database  转化后物理表所属的数据库。
    * queue  转化后物理表所属的队列（仅DLI）。
    * schema  转化后物理表所属的schema（仅DWS和PostgreSQL）。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetModelId' => 'setTargetModelId',
            'targetModelName' => 'setTargetModelName',
            'description' => 'setDescription',
            'updateExistTables' => 'setUpdateExistTables',
            'ids' => 'setIds',
            'dwType' => 'setDwType',
            'connectionId' => 'setConnectionId',
            'database' => 'setDatabase',
            'queue' => 'setQueue',
            'schema' => 'setSchema'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetModelId  所属关系建模的模型ID，ID字符串。
    * targetModelName  工作区名字。
    * description  描述。
    * updateExistTables  是否更新已有表。
    * ids  需要物化的逻辑实体的ID列表，ID字符串。
    * dwType  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    * connectionId  转化后物理表所属的数据连接ID。
    * database  转化后物理表所属的数据库。
    * queue  转化后物理表所属的队列（仅DLI）。
    * schema  转化后物理表所属的schema（仅DWS和PostgreSQL）。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetModelId' => 'getTargetModelId',
            'targetModelName' => 'getTargetModelName',
            'description' => 'getDescription',
            'updateExistTables' => 'getUpdateExistTables',
            'ids' => 'getIds',
            'dwType' => 'getDwType',
            'connectionId' => 'getConnectionId',
            'database' => 'getDatabase',
            'queue' => 'getQueue',
            'schema' => 'getSchema'
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
        $this->container['targetModelId'] = isset($data['targetModelId']) ? $data['targetModelId'] : null;
        $this->container['targetModelName'] = isset($data['targetModelName']) ? $data['targetModelName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['updateExistTables'] = isset($data['updateExistTables']) ? $data['updateExistTables'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetModelName'] === null) {
            $invalidProperties[] = "'targetModelName' can't be null";
        }
            if ((mb_strlen($this->container['targetModelName']) > 250)) {
                $invalidProperties[] = "invalid value for 'targetModelName', the character length must be smaller than or equal to 250.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z\\d_]*$/", $this->container['targetModelName'])) {
                $invalidProperties[] = "invalid value for 'targetModelName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z\\d_]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 600)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 600.";
            }
        if ($this->container['dwType'] === null) {
            $invalidProperties[] = "'dwType' can't be null";
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
    * Gets targetModelId
    *  所属关系建模的模型ID，ID字符串。
    *
    * @return string|null
    */
    public function getTargetModelId()
    {
        return $this->container['targetModelId'];
    }

    /**
    * Sets targetModelId
    *
    * @param string|null $targetModelId 所属关系建模的模型ID，ID字符串。
    *
    * @return $this
    */
    public function setTargetModelId($targetModelId)
    {
        $this->container['targetModelId'] = $targetModelId;
        return $this;
    }

    /**
    * Gets targetModelName
    *  工作区名字。
    *
    * @return string
    */
    public function getTargetModelName()
    {
        return $this->container['targetModelName'];
    }

    /**
    * Sets targetModelName
    *
    * @param string $targetModelName 工作区名字。
    *
    * @return $this
    */
    public function setTargetModelName($targetModelName)
    {
        $this->container['targetModelName'] = $targetModelName;
        return $this;
    }

    /**
    * Gets description
    *  描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets updateExistTables
    *  是否更新已有表。
    *
    * @return bool|null
    */
    public function getUpdateExistTables()
    {
        return $this->container['updateExistTables'];
    }

    /**
    * Sets updateExistTables
    *
    * @param bool|null $updateExistTables 是否更新已有表。
    *
    * @return $this
    */
    public function setUpdateExistTables($updateExistTables)
    {
        $this->container['updateExistTables'] = $updateExistTables;
        return $this;
    }

    /**
    * Gets ids
    *  需要物化的逻辑实体的ID列表，ID字符串。
    *
    * @return string[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[]|null $ids 需要物化的逻辑实体的ID列表，ID字符串。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return string
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string $dwType 数据连接类型，对应表所在的数仓类型，取值可以为DLI、DWS、MRS_HIVE、POSTGRESQL、MRS_SPARK、CLICKHOUSE、MYSQL、ORACLE和DORIS等。
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets connectionId
    *  转化后物理表所属的数据连接ID。
    *
    * @return string|null
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string|null $connectionId 转化后物理表所属的数据连接ID。
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets database
    *  转化后物理表所属的数据库。
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
    * @param string|null $database 转化后物理表所属的数据库。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets queue
    *  转化后物理表所属的队列（仅DLI）。
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
    * @param string|null $queue 转化后物理表所属的队列（仅DLI）。
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
    }

    /**
    * Gets schema
    *  转化后物理表所属的schema（仅DWS和PostgreSQL）。
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
    * @param string|null $schema 转化后物理表所属的schema（仅DWS和PostgreSQL）。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
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

