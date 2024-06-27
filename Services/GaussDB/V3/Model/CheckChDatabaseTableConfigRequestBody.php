<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckChDatabaseTableConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckChDatabaseTableConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID。
    * sourceDatabaseName  源数据库名。
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
            'dbConfigs' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseConfigsInfo[]',
            'tablesConfigs' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTablesConfigsInfo[]',
            'tableReplConfig' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID。
    * sourceDatabaseName  源数据库名。
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
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID。
    * sourceDatabaseName  源数据库名。
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
            'dbConfigs' => 'db_configs',
            'tablesConfigs' => 'tables_configs',
            'tableReplConfig' => 'table_repl_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID。
    * sourceDatabaseName  源数据库名。
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
            'dbConfigs' => 'setDbConfigs',
            'tablesConfigs' => 'setTablesConfigs',
            'tableReplConfig' => 'setTableReplConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源节点ID。GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID。
    * sourceDatabaseName  源数据库名。
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
        if ($this->container['sourceInstanceId'] === null) {
            $invalidProperties[] = "'sourceInstanceId' can't be null";
        }
        if ($this->container['sourceDatabaseName'] === null) {
            $invalidProperties[] = "'sourceDatabaseName' can't be null";
        }
        if ($this->container['dbConfigs'] === null) {
            $invalidProperties[] = "'dbConfigs' can't be null";
        }
        if ($this->container['tablesConfigs'] === null) {
            $invalidProperties[] = "'tablesConfigs' can't be null";
        }
        if ($this->container['tableReplConfig'] === null) {
            $invalidProperties[] = "'tableReplConfig' can't be null";
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
    *  源节点ID。GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID。
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
    * @param string|null $sourceNodeId 源节点ID。GaussDB(for MySQL)只读节点ID。如为空，则取GaussDB(for MySQL)主节点ID。
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
    *  源数据库名。
    *
    * @return string
    */
    public function getSourceDatabaseName()
    {
        return $this->container['sourceDatabaseName'];
    }

    /**
    * Sets sourceDatabaseName
    *
    * @param string $sourceDatabaseName 源数据库名。
    *
    * @return $this
    */
    public function setSourceDatabaseName($sourceDatabaseName)
    {
        $this->container['sourceDatabaseName'] = $sourceDatabaseName;
        return $this;
    }

    /**
    * Gets dbConfigs
    *  库配置列表。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseConfigsInfo[]
    */
    public function getDbConfigs()
    {
        return $this->container['dbConfigs'];
    }

    /**
    * Sets dbConfigs
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseConfigsInfo[] $dbConfigs 库配置列表。
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTablesConfigsInfo[]
    */
    public function getTablesConfigs()
    {
        return $this->container['tablesConfigs'];
    }

    /**
    * Sets tablesConfigs
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTablesConfigsInfo[] $tablesConfigs 表配置信息。
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo
    */
    public function getTableReplConfig()
    {
        return $this->container['tableReplConfig'];
    }

    /**
    * Sets tableReplConfig
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo $tableReplConfig tableReplConfig
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

