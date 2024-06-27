<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClickHouseDataBaseReplicationConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClickHouseDataBaseReplicationConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源实例节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * isTablesChange  同步任务表是否变化。
    * newTableReplConfig  newTableReplConfig
    * lastErrorOfAlterTable  最近一次alter table的异常信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceInstanceId' => 'string',
            'sourceNodeId' => 'string',
            'databaseInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseConfigResponse',
            'tableInfos' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableConfigCheckResult[]',
            'tableReplConfig' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo',
            'isTablesChange' => 'bool',
            'newTableReplConfig' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo',
            'lastErrorOfAlterTable' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源实例节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * isTablesChange  同步任务表是否变化。
    * newTableReplConfig  newTableReplConfig
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
        'isTablesChange' => null,
        'newTableReplConfig' => null,
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
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源实例节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * isTablesChange  同步任务表是否变化。
    * newTableReplConfig  newTableReplConfig
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
            'isTablesChange' => 'is_tables_change',
            'newTableReplConfig' => 'new_table_repl_config',
            'lastErrorOfAlterTable' => 'last_error_of_alter_table'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源实例节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * isTablesChange  同步任务表是否变化。
    * newTableReplConfig  newTableReplConfig
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
            'isTablesChange' => 'setIsTablesChange',
            'newTableReplConfig' => 'setNewTableReplConfig',
            'lastErrorOfAlterTable' => 'setLastErrorOfAlterTable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  源实例ID。
    * sourceNodeId  源实例节点ID。
    * databaseInfo  databaseInfo
    * tableInfos  表配置信息。
    * tableReplConfig  tableReplConfig
    * isTablesChange  同步任务表是否变化。
    * newTableReplConfig  newTableReplConfig
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
            'isTablesChange' => 'getIsTablesChange',
            'newTableReplConfig' => 'getNewTableReplConfig',
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
        $this->container['isTablesChange'] = isset($data['isTablesChange']) ? $data['isTablesChange'] : null;
        $this->container['newTableReplConfig'] = isset($data['newTableReplConfig']) ? $data['newTableReplConfig'] : null;
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
    * @return string|null
    */
    public function getSourceInstanceId()
    {
        return $this->container['sourceInstanceId'];
    }

    /**
    * Sets sourceInstanceId
    *
    * @param string|null $sourceInstanceId 源实例ID。
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
    *  源实例节点ID。
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
    * @param string|null $sourceNodeId 源实例节点ID。
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseConfigResponse|null
    */
    public function getDatabaseInfo()
    {
        return $this->container['databaseInfo'];
    }

    /**
    * Sets databaseInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseConfigResponse|null $databaseInfo databaseInfo
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableConfigCheckResult[]|null
    */
    public function getTableInfos()
    {
        return $this->container['tableInfos'];
    }

    /**
    * Sets tableInfos
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableConfigCheckResult[]|null $tableInfos 表配置信息。
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
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo|null
    */
    public function getTableReplConfig()
    {
        return $this->container['tableReplConfig'];
    }

    /**
    * Sets tableReplConfig
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo|null $tableReplConfig tableReplConfig
    *
    * @return $this
    */
    public function setTableReplConfig($tableReplConfig)
    {
        $this->container['tableReplConfig'] = $tableReplConfig;
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
    * Gets newTableReplConfig
    *  newTableReplConfig
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo|null
    */
    public function getNewTableReplConfig()
    {
        return $this->container['newTableReplConfig'];
    }

    /**
    * Sets newTableReplConfig
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ChDatabaseTableReplConfigInfo|null $newTableReplConfig newTableReplConfig
    *
    * @return $this
    */
    public function setNewTableReplConfig($newTableReplConfig)
    {
        $this->container['newTableReplConfig'] = $newTableReplConfig;
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

