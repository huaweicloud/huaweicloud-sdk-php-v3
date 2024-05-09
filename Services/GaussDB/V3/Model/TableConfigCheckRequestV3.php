<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableConfigCheckRequestV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableConfigCheckRequestV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID
    * sourceDatabaseName  GaussDB(for MySQL)数据库名。
    * taskName  同步任务名称。字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * dbConfigs  库配置列表。
    * tablesConfigs  表配置信息。
    * tableReplConfig  tableReplConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceInstanceId' => 'string',
            'sourceNodeId' => 'string',
            'sourceDatabaseName' => 'string',
            'taskName' => 'string',
            'dbConfigs' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DbConfig[]',
            'tablesConfigs' => '\HuaweiCloud\SDK\GaussDB\V3\Model\TablesConfig[]',
            'tableReplConfig' => '\HuaweiCloud\SDK\GaussDB\V3\Model\TableReplConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID
    * sourceDatabaseName  GaussDB(for MySQL)数据库名。
    * taskName  同步任务名称。字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * dbConfigs  库配置列表。
    * tablesConfigs  表配置信息。
    * tableReplConfig  tableReplConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceInstanceId' => null,
        'sourceNodeId' => null,
        'sourceDatabaseName' => null,
        'taskName' => null,
        'dbConfigs' => null,
        'tablesConfigs' => null,
        'tableReplConfig' => null
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
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID
    * sourceDatabaseName  GaussDB(for MySQL)数据库名。
    * taskName  同步任务名称。字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * dbConfigs  库配置列表。
    * tablesConfigs  表配置信息。
    * tableReplConfig  tableReplConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceInstanceId' => 'source_instance_id',
            'sourceNodeId' => 'source_node_id',
            'sourceDatabaseName' => 'source_database_name',
            'taskName' => 'task_name',
            'dbConfigs' => 'db_configs',
            'tablesConfigs' => 'tables_configs',
            'tableReplConfig' => 'table_repl_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID
    * sourceDatabaseName  GaussDB(for MySQL)数据库名。
    * taskName  同步任务名称。字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * dbConfigs  库配置列表。
    * tablesConfigs  表配置信息。
    * tableReplConfig  tableReplConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceInstanceId' => 'setSourceInstanceId',
            'sourceNodeId' => 'setSourceNodeId',
            'sourceDatabaseName' => 'setSourceDatabaseName',
            'taskName' => 'setTaskName',
            'dbConfigs' => 'setDbConfigs',
            'tablesConfigs' => 'setTablesConfigs',
            'tableReplConfig' => 'setTableReplConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID
    * sourceDatabaseName  GaussDB(for MySQL)数据库名。
    * taskName  同步任务名称。字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    * dbConfigs  库配置列表。
    * tablesConfigs  表配置信息。
    * tableReplConfig  tableReplConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceInstanceId' => 'getSourceInstanceId',
            'sourceNodeId' => 'getSourceNodeId',
            'sourceDatabaseName' => 'getSourceDatabaseName',
            'taskName' => 'getTaskName',
            'dbConfigs' => 'getDbConfigs',
            'tablesConfigs' => 'getTablesConfigs',
            'tableReplConfig' => 'getTableReplConfig'
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
        $this->container['sourceDatabaseName'] = isset($data['sourceDatabaseName']) ? $data['sourceDatabaseName'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['dbConfigs'] = isset($data['dbConfigs']) ? $data['dbConfigs'] : null;
        $this->container['tablesConfigs'] = isset($data['tablesConfigs']) ? $data['tablesConfigs'] : null;
        $this->container['tableReplConfig'] = isset($data['tableReplConfig']) ? $data['tableReplConfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceInstanceId']) && (mb_strlen($this->container['sourceInstanceId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceInstanceId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sourceInstanceId']) && (mb_strlen($this->container['sourceInstanceId']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceInstanceId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceNodeId']) && (mb_strlen($this->container['sourceNodeId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceNodeId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sourceNodeId']) && (mb_strlen($this->container['sourceNodeId']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceNodeId', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceDatabaseName']) && (mb_strlen($this->container['sourceDatabaseName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceDatabaseName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sourceDatabaseName']) && (mb_strlen($this->container['sourceDatabaseName']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceDatabaseName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 3)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 3.";
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
    *  GaussDB(for MySQL)实例ID。
    *
    * @return string|null
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string|null $sourceInstanceId GaussDB(for MySQL)实例ID。
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
    *  GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID
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
    * @param string|null $sourceNodeId GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID
    *
    * @return $this
    */
    public function setSourceNodeId($sourceNodeId)
    {
        $this->container['sourceNodeId'] = $sourceNodeId;
        return $this;
    }

    /**
    * Gets sourceDatabaseName
    *  GaussDB(for MySQL)数据库名。
    *
    * @return string|null
    */
    public function getSourceDatabaseName()
    {
        return $this->container['sourceDatabaseName'];
    }

    /**
    * Sets sourceDatabaseName
    *
    * @param string|null $sourceDatabaseName GaussDB(for MySQL)数据库名。
    *
    * @return $this
    */
    public function setSourceDatabaseName($sourceDatabaseName)
    {
        $this->container['sourceDatabaseName'] = $sourceDatabaseName;
        return $this;
    }

    /**
    * Gets taskName
    *  同步任务名称。字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 同步任务名称。字符长度限制3~128位，仅支持英文大小写字母、数字以及下划线_。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets dbConfigs
    *  库配置列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\DbConfig[]|null
    */
    public function getDbConfigs()
    {
        return $this->container['dbConfigs'];
    }

    /**
    * Sets dbConfigs
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DbConfig[]|null $dbConfigs 库配置列表。
    *
    * @return $this
    */
    public function setDbConfigs($dbConfigs)
    {
        $this->container['dbConfigs'] = $dbConfigs;
        return $this;
    }

    /**
    * Gets tablesConfigs
    *  表配置信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\TablesConfig[]|null
    */
    public function getTablesConfigs()
    {
        return $this->container['tablesConfigs'];
    }

    /**
    * Sets tablesConfigs
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\TablesConfig[]|null $tablesConfigs 表配置信息。
    *
    * @return $this
    */
    public function setTablesConfigs($tablesConfigs)
    {
        $this->container['tablesConfigs'] = $tablesConfigs;
        return $this;
    }

    /**
    * Gets tableReplConfig
    *  tableReplConfig
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\TableReplConfig|null
    */
    public function getTableReplConfig()
    {
        return $this->container['tableReplConfig'];
    }

    /**
    * Sets tableReplConfig
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\TableReplConfig|null $tableReplConfig tableReplConfig
    *
    * @return $this
    */
    public function setTableReplConfig($tableReplConfig)
    {
        $this->container['tableReplConfig'] = $tableReplConfig;
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

