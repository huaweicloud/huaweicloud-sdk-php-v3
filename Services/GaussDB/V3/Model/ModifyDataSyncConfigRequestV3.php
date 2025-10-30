<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyDataSyncConfigRequestV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyDataSyncConfigRequestV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceInstanceId  **参数解释**：  TaurusDB实例ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认值**：  不涉及。
    * sourceNodeId  **参数解释**：  TaurusDB只读节点ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。  **默认值**：  不涉及。
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **约束限制**：  不涉及。  **取值范围**：  字符长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * taskName  **参数解释**：  数据同步任务名称。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * dbConfigs  **参数解释**：  库配置列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tablesConfigs  **参数解释**：  表配置信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tableReplConfig  tableReplConfig
    * targetDatabaseName  **参数解释**：  目标数据库名。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * isInstanceLevelSync  **参数解释**：  是否支持实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：是。 - false：否。  **默认取值**：  false。
    * databaseReplScope  **参数解释**：  库同步范围。  **约束限制**：  不涉及。  **取值范围**：  - all：同步全部库。 - part：同步部分库。  **默认取值**：  part。
    * isSupportRegExp  **参数解释**：  是否支持通配符。  **约束限制**：  不涉及。  **取值范围**：  - true：支持通配符。 - false：不支持通配符。  **默认取值**：  false。
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
            'tableReplConfig' => '\HuaweiCloud\SDK\GaussDB\V3\Model\TableReplConfig',
            'targetDatabaseName' => 'string',
            'isInstanceLevelSync' => 'string',
            'databaseReplScope' => 'string',
            'isSupportRegExp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceInstanceId  **参数解释**：  TaurusDB实例ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认值**：  不涉及。
    * sourceNodeId  **参数解释**：  TaurusDB只读节点ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。  **默认值**：  不涉及。
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **约束限制**：  不涉及。  **取值范围**：  字符长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * taskName  **参数解释**：  数据同步任务名称。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * dbConfigs  **参数解释**：  库配置列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tablesConfigs  **参数解释**：  表配置信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tableReplConfig  tableReplConfig
    * targetDatabaseName  **参数解释**：  目标数据库名。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * isInstanceLevelSync  **参数解释**：  是否支持实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：是。 - false：否。  **默认取值**：  false。
    * databaseReplScope  **参数解释**：  库同步范围。  **约束限制**：  不涉及。  **取值范围**：  - all：同步全部库。 - part：同步部分库。  **默认取值**：  part。
    * isSupportRegExp  **参数解释**：  是否支持通配符。  **约束限制**：  不涉及。  **取值范围**：  - true：支持通配符。 - false：不支持通配符。  **默认取值**：  false。
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
        'tableReplConfig' => null,
        'targetDatabaseName' => null,
        'isInstanceLevelSync' => null,
        'databaseReplScope' => null,
        'isSupportRegExp' => null
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
    * sourceInstanceId  **参数解释**：  TaurusDB实例ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认值**：  不涉及。
    * sourceNodeId  **参数解释**：  TaurusDB只读节点ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。  **默认值**：  不涉及。
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **约束限制**：  不涉及。  **取值范围**：  字符长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * taskName  **参数解释**：  数据同步任务名称。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * dbConfigs  **参数解释**：  库配置列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tablesConfigs  **参数解释**：  表配置信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tableReplConfig  tableReplConfig
    * targetDatabaseName  **参数解释**：  目标数据库名。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * isInstanceLevelSync  **参数解释**：  是否支持实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：是。 - false：否。  **默认取值**：  false。
    * databaseReplScope  **参数解释**：  库同步范围。  **约束限制**：  不涉及。  **取值范围**：  - all：同步全部库。 - part：同步部分库。  **默认取值**：  part。
    * isSupportRegExp  **参数解释**：  是否支持通配符。  **约束限制**：  不涉及。  **取值范围**：  - true：支持通配符。 - false：不支持通配符。  **默认取值**：  false。
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
            'tableReplConfig' => 'table_repl_config',
            'targetDatabaseName' => 'target_database_name',
            'isInstanceLevelSync' => 'is_instance_level_sync',
            'databaseReplScope' => 'database_repl_scope',
            'isSupportRegExp' => 'is_support_reg_exp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceInstanceId  **参数解释**：  TaurusDB实例ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认值**：  不涉及。
    * sourceNodeId  **参数解释**：  TaurusDB只读节点ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。  **默认值**：  不涉及。
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **约束限制**：  不涉及。  **取值范围**：  字符长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * taskName  **参数解释**：  数据同步任务名称。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * dbConfigs  **参数解释**：  库配置列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tablesConfigs  **参数解释**：  表配置信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tableReplConfig  tableReplConfig
    * targetDatabaseName  **参数解释**：  目标数据库名。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * isInstanceLevelSync  **参数解释**：  是否支持实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：是。 - false：否。  **默认取值**：  false。
    * databaseReplScope  **参数解释**：  库同步范围。  **约束限制**：  不涉及。  **取值范围**：  - all：同步全部库。 - part：同步部分库。  **默认取值**：  part。
    * isSupportRegExp  **参数解释**：  是否支持通配符。  **约束限制**：  不涉及。  **取值范围**：  - true：支持通配符。 - false：不支持通配符。  **默认取值**：  false。
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
            'tableReplConfig' => 'setTableReplConfig',
            'targetDatabaseName' => 'setTargetDatabaseName',
            'isInstanceLevelSync' => 'setIsInstanceLevelSync',
            'databaseReplScope' => 'setDatabaseReplScope',
            'isSupportRegExp' => 'setIsSupportRegExp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceInstanceId  **参数解释**：  TaurusDB实例ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认值**：  不涉及。
    * sourceNodeId  **参数解释**：  TaurusDB只读节点ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。  **默认值**：  不涉及。
    * sourceDatabaseName  **参数解释**：  TaurusDB数据库名。  **约束限制**：  不涉及。  **取值范围**：  字符长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * taskName  **参数解释**：  数据同步任务名称。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * dbConfigs  **参数解释**：  库配置列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tablesConfigs  **参数解释**：  表配置信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
    * tableReplConfig  tableReplConfig
    * targetDatabaseName  **参数解释**：  目标数据库名。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    * isInstanceLevelSync  **参数解释**：  是否支持实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：是。 - false：否。  **默认取值**：  false。
    * databaseReplScope  **参数解释**：  库同步范围。  **约束限制**：  不涉及。  **取值范围**：  - all：同步全部库。 - part：同步部分库。  **默认取值**：  part。
    * isSupportRegExp  **参数解释**：  是否支持通配符。  **约束限制**：  不涉及。  **取值范围**：  - true：支持通配符。 - false：不支持通配符。  **默认取值**：  false。
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
            'tableReplConfig' => 'getTableReplConfig',
            'targetDatabaseName' => 'getTargetDatabaseName',
            'isInstanceLevelSync' => 'getIsInstanceLevelSync',
            'databaseReplScope' => 'getDatabaseReplScope',
            'isSupportRegExp' => 'getIsSupportRegExp'
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
        $this->container['targetDatabaseName'] = isset($data['targetDatabaseName']) ? $data['targetDatabaseName'] : null;
        $this->container['isInstanceLevelSync'] = isset($data['isInstanceLevelSync']) ? $data['isInstanceLevelSync'] : null;
        $this->container['databaseReplScope'] = isset($data['databaseReplScope']) ? $data['databaseReplScope'] : null;
        $this->container['isSupportRegExp'] = isset($data['isSupportRegExp']) ? $data['isSupportRegExp'] : null;
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
    *  **参数解释**：  TaurusDB实例ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认值**：  不涉及。
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
    * @param string|null $sourceInstanceId **参数解释**：  TaurusDB实例ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in07，长度为36个字符。  **默认值**：  不涉及。
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
    *  **参数解释**：  TaurusDB只读节点ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。  **默认值**：  不涉及。
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
    * @param string|null $sourceNodeId **参数解释**：  TaurusDB只读节点ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为no07，长度为36个字符。  **默认值**：  不涉及。
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
    *  **参数解释**：  TaurusDB数据库名。  **约束限制**：  不涉及。  **取值范围**：  字符长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
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
    * @param string|null $sourceDatabaseName **参数解释**：  TaurusDB数据库名。  **约束限制**：  不涉及。  **取值范围**：  字符长度限制3~1024位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
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
    *  **参数解释**：  数据同步任务名称。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
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
    * @param string|null $taskName **参数解释**：  数据同步任务名称。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
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
    *  **参数解释**：  库配置列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
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
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\DbConfig[]|null $dbConfigs **参数解释**：  库配置列表。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
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
    *  **参数解释**：  表配置信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
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
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\TablesConfig[]|null $tablesConfigs **参数解释**：  表配置信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认值**：  不涉及。
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
    * Gets targetDatabaseName
    *  **参数解释**：  目标数据库名。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
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
    * @param string|null $targetDatabaseName **参数解释**：  目标数据库名。  **约束限制**：  不涉及。  **取值范围**：  长度限制3~128位，仅支持英文大小写字母、数字以及下划线。  **默认值**：  不涉及。
    *
    * @return $this
    */
    public function setTargetDatabaseName($targetDatabaseName)
    {
        $this->container['targetDatabaseName'] = $targetDatabaseName;
        return $this;
    }

    /**
    * Gets isInstanceLevelSync
    *  **参数解释**：  是否支持实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：是。 - false：否。  **默认取值**：  false。
    *
    * @return string|null
    */
    public function getIsInstanceLevelSync()
    {
        return $this->container['isInstanceLevelSync'];
    }

    /**
    * Sets isInstanceLevelSync
    *
    * @param string|null $isInstanceLevelSync **参数解释**：  是否支持实例级同步。  **约束限制**：  不涉及。  **取值范围**：  - true：是。 - false：否。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setIsInstanceLevelSync($isInstanceLevelSync)
    {
        $this->container['isInstanceLevelSync'] = $isInstanceLevelSync;
        return $this;
    }

    /**
    * Gets databaseReplScope
    *  **参数解释**：  库同步范围。  **约束限制**：  不涉及。  **取值范围**：  - all：同步全部库。 - part：同步部分库。  **默认取值**：  part。
    *
    * @return string|null
    */
    public function getDatabaseReplScope()
    {
        return $this->container['databaseReplScope'];
    }

    /**
    * Sets databaseReplScope
    *
    * @param string|null $databaseReplScope **参数解释**：  库同步范围。  **约束限制**：  不涉及。  **取值范围**：  - all：同步全部库。 - part：同步部分库。  **默认取值**：  part。
    *
    * @return $this
    */
    public function setDatabaseReplScope($databaseReplScope)
    {
        $this->container['databaseReplScope'] = $databaseReplScope;
        return $this;
    }

    /**
    * Gets isSupportRegExp
    *  **参数解释**：  是否支持通配符。  **约束限制**：  不涉及。  **取值范围**：  - true：支持通配符。 - false：不支持通配符。  **默认取值**：  false。
    *
    * @return string|null
    */
    public function getIsSupportRegExp()
    {
        return $this->container['isSupportRegExp'];
    }

    /**
    * Sets isSupportRegExp
    *
    * @param string|null $isSupportRegExp **参数解释**：  是否支持通配符。  **约束限制**：  不涉及。  **取值范围**：  - true：支持通配符。 - false：不支持通配符。  **默认取值**：  false。
    *
    * @return $this
    */
    public function setIsSupportRegExp($isSupportRegExp)
    {
        $this->container['isSupportRegExp'] = $isSupportRegExp;
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

