<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStarRocksDataReplicationConfigByDataBaseResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStarRocksDataReplicationConfigByDataBaseResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * newTableReplConfig  newTableReplConfig
    * targetDatabaseName  目标数据库名。
    * isTablesChange  同步任务表是否变化。
    * lastErrorOfAlterTable  最近一次alter table的异常信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceInstanceId' => 'string',
            'sourceNodeId' => 'string',
            'databaseInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\DataBaseInfo',
            'tableInfos' => '\HuaweiCloud\SDK\GaussDB\V3\Model\TableConfigCheckResult[]',
            'tableReplConfig' => '\HuaweiCloud\SDK\GaussDB\V3\Model\TableReplConfig',
            'newTableReplConfig' => '\HuaweiCloud\SDK\GaussDB\V3\Model\TableReplConfig',
            'targetDatabaseName' => 'string',
            'isTablesChange' => 'bool',
            'lastErrorOfAlterTable' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * newTableReplConfig  newTableReplConfig
    * targetDatabaseName  目标数据库名。
    * isTablesChange  同步任务表是否变化。
    * lastErrorOfAlterTable  最近一次alter table的异常信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceInstanceId' => null,
        'sourceNodeId' => null,
        'databaseInfo' => null,
        'tableInfos' => null,
        'tableReplConfig' => null,
        'newTableReplConfig' => null,
        'targetDatabaseName' => null,
        'isTablesChange' => null,
        'lastErrorOfAlterTable' => null
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
    * sourceNodeId  GaussDB(for MySQL)节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * newTableReplConfig  newTableReplConfig
    * targetDatabaseName  目标数据库名。
    * isTablesChange  同步任务表是否变化。
    * lastErrorOfAlterTable  最近一次alter table的异常信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceInstanceId' => 'source_instance_id',
            'sourceNodeId' => 'source_node_id',
            'databaseInfo' => 'database_info',
            'tableInfos' => 'table_infos',
            'tableReplConfig' => 'table_repl_config',
            'newTableReplConfig' => 'new_table_repl_config',
            'targetDatabaseName' => 'target_database_name',
            'isTablesChange' => 'is_tables_change',
            'lastErrorOfAlterTable' => 'last_error_of_alter_table'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * newTableReplConfig  newTableReplConfig
    * targetDatabaseName  目标数据库名。
    * isTablesChange  同步任务表是否变化。
    * lastErrorOfAlterTable  最近一次alter table的异常信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceInstanceId' => 'setSourceInstanceId',
            'sourceNodeId' => 'setSourceNodeId',
            'databaseInfo' => 'setDatabaseInfo',
            'tableInfos' => 'setTableInfos',
            'tableReplConfig' => 'setTableReplConfig',
            'newTableReplConfig' => 'setNewTableReplConfig',
            'targetDatabaseName' => 'setTargetDatabaseName',
            'isTablesChange' => 'setIsTablesChange',
            'lastErrorOfAlterTable' => 'setLastErrorOfAlterTable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  GaussDB(for MySQL)实例ID。
    * sourceNodeId  GaussDB(for MySQL)节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * newTableReplConfig  newTableReplConfig
    * targetDatabaseName  目标数据库名。
    * isTablesChange  同步任务表是否变化。
    * lastErrorOfAlterTable  最近一次alter table的异常信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceInstanceId' => 'getSourceInstanceId',
            'sourceNodeId' => 'getSourceNodeId',
            'databaseInfo' => 'getDatabaseInfo',
            'tableInfos' => 'getTableInfos',
            'tableReplConfig' => 'getTableReplConfig',
            'newTableReplConfig' => 'getNewTableReplConfig',
            'targetDatabaseName' => 'getTargetDatabaseName',
            'isTablesChange' => 'getIsTablesChange',
            'lastErrorOfAlterTable' => 'getLastErrorOfAlterTable'
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
        $this->container['databaseInfo'] = isset($data['databaseInfo']) ? $data['databaseInfo'] : null;
        $this->container['tableInfos'] = isset($data['tableInfos']) ? $data['tableInfos'] : null;
        $this->container['tableReplConfig'] = isset($data['tableReplConfig']) ? $data['tableReplConfig'] : null;
        $this->container['newTableReplConfig'] = isset($data['newTableReplConfig']) ? $data['newTableReplConfig'] : null;
        $this->container['targetDatabaseName'] = isset($data['targetDatabaseName']) ? $data['targetDatabaseName'] : null;
        $this->container['isTablesChange'] = isset($data['isTablesChange']) ? $data['isTablesChange'] : null;
        $this->container['lastErrorOfAlterTable'] = isset($data['lastErrorOfAlterTable']) ? $data['lastErrorOfAlterTable'] : null;
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
            if (!is_null($this->container['targetDatabaseName']) && (mb_strlen($this->container['targetDatabaseName']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetDatabaseName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['targetDatabaseName']) && (mb_strlen($this->container['targetDatabaseName']) < 3)) {
                $invalidProperties[] = "invalid value for 'targetDatabaseName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['lastErrorOfAlterTable']) && (mb_strlen($this->container['lastErrorOfAlterTable']) > 1024)) {
                $invalidProperties[] = "invalid value for 'lastErrorOfAlterTable', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['lastErrorOfAlterTable']) && (mb_strlen($this->container['lastErrorOfAlterTable']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastErrorOfAlterTable', the character length must be bigger than or equal to 0.";
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
    *  GaussDB(for MySQL)节点ID。
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
    * @param string|null $sourceNodeId GaussDB(for MySQL)节点ID。
    *
    * @return $this
    */
    public function setSourceNodeId($sourceNodeId)
    {
        $this->container['sourceNodeId'] = $sourceNodeId;
        return $this;
    }

    /**
    * Gets databaseInfo
    *  databaseInfo
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\DataBaseInfo|null
    */
    public function getDatabaseInfo()
    {
        return $this->container['databaseInfo'];
    }

    /**
    * Sets databaseInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DataBaseInfo|null $databaseInfo databaseInfo
    *
    * @return $this
    */
    public function setDatabaseInfo($databaseInfo)
    {
        $this->container['databaseInfo'] = $databaseInfo;
        return $this;
    }

    /**
    * Gets tableInfos
    *  表配置信息。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\TableConfigCheckResult[]|null
    */
    public function getTableInfos()
    {
        return $this->container['tableInfos'];
    }

    /**
    * Sets tableInfos
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\TableConfigCheckResult[]|null $tableInfos 表配置信息。
    *
    * @return $this
    */
    public function setTableInfos($tableInfos)
    {
        $this->container['tableInfos'] = $tableInfos;
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
    * Gets newTableReplConfig
    *  newTableReplConfig
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\TableReplConfig|null
    */
    public function getNewTableReplConfig()
    {
        return $this->container['newTableReplConfig'];
    }

    /**
    * Sets newTableReplConfig
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\TableReplConfig|null $newTableReplConfig newTableReplConfig
    *
    * @return $this
    */
    public function setNewTableReplConfig($newTableReplConfig)
    {
        $this->container['newTableReplConfig'] = $newTableReplConfig;
        return $this;
    }

    /**
    * Gets targetDatabaseName
    *  目标数据库名。
    *
    * @return string|null
    */
    public function getTargetDatabaseName()
    {
        return $this->container['targetDatabaseName'];
    }

    /**
    * Sets targetDatabaseName
    *
    * @param string|null $targetDatabaseName 目标数据库名。
    *
    * @return $this
    */
    public function setTargetDatabaseName($targetDatabaseName)
    {
        $this->container['targetDatabaseName'] = $targetDatabaseName;
        return $this;
    }

    /**
    * Gets isTablesChange
    *  同步任务表是否变化。
    *
    * @return bool|null
    */
    public function getIsTablesChange()
    {
        return $this->container['isTablesChange'];
    }

    /**
    * Sets isTablesChange
    *
    * @param bool|null $isTablesChange 同步任务表是否变化。
    *
    * @return $this
    */
    public function setIsTablesChange($isTablesChange)
    {
        $this->container['isTablesChange'] = $isTablesChange;
        return $this;
    }

    /**
    * Gets lastErrorOfAlterTable
    *  最近一次alter table的异常信息。
    *
    * @return string|null
    */
    public function getLastErrorOfAlterTable()
    {
        return $this->container['lastErrorOfAlterTable'];
    }

    /**
    * Sets lastErrorOfAlterTable
    *
    * @param string|null $lastErrorOfAlterTable 最近一次alter table的异常信息。
    *
    * @return $this
    */
    public function setLastErrorOfAlterTable($lastErrorOfAlterTable)
    {
        $this->container['lastErrorOfAlterTable'] = $lastErrorOfAlterTable;
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

