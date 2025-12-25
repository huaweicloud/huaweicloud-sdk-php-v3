<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTableRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTableRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  表名称
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * category  **参数解释**: 目录类型 - STREAMING 实时流 - INDEX 索引 - APPLICATION 应用 - TENANT_BUCKET 租户桶 - LAKE 数据湖  **约束限制** 不涉及 **取值范围**: - STREAMING - INDEX - APPLICATION - TENANT_BUCKET - LAKE  **默认值** 不涉及
    * format  **参数解释**: 表格式 - JSON Json格式 - DEBEZIUM_JSON Debezium JSON 格式 - CSV CSV格式 - PARQUET PARQUET格式 - ORC ORC格式  **约束限制** 不涉及 **取值范围**: - JSON - DEBEZIUM_JSON - CSV - PARQUET - ORC  **默认值** 不涉及
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * dataClassification  dataClassification
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    * createPolicy  **参数解释**: 创建政策 - SYS_INIT_INDEX_APP_TBL 系统初始化索引应用表 - DEFAULT 默认  **约束限制** 不涉及 **取值范围**: - SYS_INIT_INDEX_APP_TBL - DEFAULT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'tableAlias' => 'string',
            'tableAliasEn' => 'string',
            'tableAliasFr' => 'string',
            'category' => 'string',
            'format' => 'string',
            'description' => 'string',
            'descriptionEn' => 'string',
            'descriptionFr' => 'string',
            'directory' => 'string',
            'directoryEn' => 'string',
            'directoryFr' => 'string',
            'dataClassification' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataClassification',
            'schema' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableSchema',
            'storageSetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableStorageSetting',
            'displaySetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TableDisplaySetting',
            'createPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  表名称
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * category  **参数解释**: 目录类型 - STREAMING 实时流 - INDEX 索引 - APPLICATION 应用 - TENANT_BUCKET 租户桶 - LAKE 数据湖  **约束限制** 不涉及 **取值范围**: - STREAMING - INDEX - APPLICATION - TENANT_BUCKET - LAKE  **默认值** 不涉及
    * format  **参数解释**: 表格式 - JSON Json格式 - DEBEZIUM_JSON Debezium JSON 格式 - CSV CSV格式 - PARQUET PARQUET格式 - ORC ORC格式  **约束限制** 不涉及 **取值范围**: - JSON - DEBEZIUM_JSON - CSV - PARQUET - ORC  **默认值** 不涉及
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * dataClassification  dataClassification
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    * createPolicy  **参数解释**: 创建政策 - SYS_INIT_INDEX_APP_TBL 系统初始化索引应用表 - DEFAULT 默认  **约束限制** 不涉及 **取值范围**: - SYS_INIT_INDEX_APP_TBL - DEFAULT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'tableAlias' => null,
        'tableAliasEn' => null,
        'tableAliasFr' => null,
        'category' => null,
        'format' => null,
        'description' => null,
        'descriptionEn' => null,
        'descriptionFr' => null,
        'directory' => null,
        'directoryEn' => null,
        'directoryFr' => null,
        'dataClassification' => null,
        'schema' => null,
        'storageSetting' => null,
        'displaySetting' => null,
        'createPolicy' => null
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
    * tableName  表名称
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * category  **参数解释**: 目录类型 - STREAMING 实时流 - INDEX 索引 - APPLICATION 应用 - TENANT_BUCKET 租户桶 - LAKE 数据湖  **约束限制** 不涉及 **取值范围**: - STREAMING - INDEX - APPLICATION - TENANT_BUCKET - LAKE  **默认值** 不涉及
    * format  **参数解释**: 表格式 - JSON Json格式 - DEBEZIUM_JSON Debezium JSON 格式 - CSV CSV格式 - PARQUET PARQUET格式 - ORC ORC格式  **约束限制** 不涉及 **取值范围**: - JSON - DEBEZIUM_JSON - CSV - PARQUET - ORC  **默认值** 不涉及
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * dataClassification  dataClassification
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    * createPolicy  **参数解释**: 创建政策 - SYS_INIT_INDEX_APP_TBL 系统初始化索引应用表 - DEFAULT 默认  **约束限制** 不涉及 **取值范围**: - SYS_INIT_INDEX_APP_TBL - DEFAULT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'tableAlias' => 'table_alias',
            'tableAliasEn' => 'table_alias_en',
            'tableAliasFr' => 'table_alias_fr',
            'category' => 'category',
            'format' => 'format',
            'description' => 'description',
            'descriptionEn' => 'description_en',
            'descriptionFr' => 'description_fr',
            'directory' => 'directory',
            'directoryEn' => 'directory_en',
            'directoryFr' => 'directory_fr',
            'dataClassification' => 'data_classification',
            'schema' => 'schema',
            'storageSetting' => 'storage_setting',
            'displaySetting' => 'display_setting',
            'createPolicy' => 'create_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  表名称
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * category  **参数解释**: 目录类型 - STREAMING 实时流 - INDEX 索引 - APPLICATION 应用 - TENANT_BUCKET 租户桶 - LAKE 数据湖  **约束限制** 不涉及 **取值范围**: - STREAMING - INDEX - APPLICATION - TENANT_BUCKET - LAKE  **默认值** 不涉及
    * format  **参数解释**: 表格式 - JSON Json格式 - DEBEZIUM_JSON Debezium JSON 格式 - CSV CSV格式 - PARQUET PARQUET格式 - ORC ORC格式  **约束限制** 不涉及 **取值范围**: - JSON - DEBEZIUM_JSON - CSV - PARQUET - ORC  **默认值** 不涉及
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * dataClassification  dataClassification
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    * createPolicy  **参数解释**: 创建政策 - SYS_INIT_INDEX_APP_TBL 系统初始化索引应用表 - DEFAULT 默认  **约束限制** 不涉及 **取值范围**: - SYS_INIT_INDEX_APP_TBL - DEFAULT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'tableAlias' => 'setTableAlias',
            'tableAliasEn' => 'setTableAliasEn',
            'tableAliasFr' => 'setTableAliasFr',
            'category' => 'setCategory',
            'format' => 'setFormat',
            'description' => 'setDescription',
            'descriptionEn' => 'setDescriptionEn',
            'descriptionFr' => 'setDescriptionFr',
            'directory' => 'setDirectory',
            'directoryEn' => 'setDirectoryEn',
            'directoryFr' => 'setDirectoryFr',
            'dataClassification' => 'setDataClassification',
            'schema' => 'setSchema',
            'storageSetting' => 'setStorageSetting',
            'displaySetting' => 'setDisplaySetting',
            'createPolicy' => 'setCreatePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  表名称
    * tableAlias  表别名
    * tableAliasEn  表别名
    * tableAliasFr  表别名
    * category  **参数解释**: 目录类型 - STREAMING 实时流 - INDEX 索引 - APPLICATION 应用 - TENANT_BUCKET 租户桶 - LAKE 数据湖  **约束限制** 不涉及 **取值范围**: - STREAMING - INDEX - APPLICATION - TENANT_BUCKET - LAKE  **默认值** 不涉及
    * format  **参数解释**: 表格式 - JSON Json格式 - DEBEZIUM_JSON Debezium JSON 格式 - CSV CSV格式 - PARQUET PARQUET格式 - ORC ORC格式  **约束限制** 不涉及 **取值范围**: - JSON - DEBEZIUM_JSON - CSV - PARQUET - ORC  **默认值** 不涉及
    * description  表相关描述
    * descriptionEn  表相关描述
    * descriptionFr  表相关描述
    * directory  目录分组
    * directoryEn  目录分组
    * directoryFr  目录分组
    * dataClassification  dataClassification
    * schema  schema
    * storageSetting  storageSetting
    * displaySetting  displaySetting
    * createPolicy  **参数解释**: 创建政策 - SYS_INIT_INDEX_APP_TBL 系统初始化索引应用表 - DEFAULT 默认  **约束限制** 不涉及 **取值范围**: - SYS_INIT_INDEX_APP_TBL - DEFAULT  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'tableAlias' => 'getTableAlias',
            'tableAliasEn' => 'getTableAliasEn',
            'tableAliasFr' => 'getTableAliasFr',
            'category' => 'getCategory',
            'format' => 'getFormat',
            'description' => 'getDescription',
            'descriptionEn' => 'getDescriptionEn',
            'descriptionFr' => 'getDescriptionFr',
            'directory' => 'getDirectory',
            'directoryEn' => 'getDirectoryEn',
            'directoryFr' => 'getDirectoryFr',
            'dataClassification' => 'getDataClassification',
            'schema' => 'getSchema',
            'storageSetting' => 'getStorageSetting',
            'displaySetting' => 'getDisplaySetting',
            'createPolicy' => 'getCreatePolicy'
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
    const CATEGORY_STREAMING = 'STREAMING';
    const CATEGORY_INDEX = 'INDEX';
    const CATEGORY_APPLICATION = 'APPLICATION';
    const CATEGORY_TENANT_BUCKET = 'TENANT_BUCKET';
    const CATEGORY_LAKE = 'LAKE';
    const FORMAT_JSON = 'JSON';
    const FORMAT_DEBEZIUM_JSON = 'DEBEZIUM_JSON';
    const FORMAT_CSV = 'CSV';
    const FORMAT_PARQUET = 'PARQUET';
    const FORMAT_ORC = 'ORC';
    const CREATE_POLICY_SYS_INIT_INDEX_APP_TBL = 'SYS_INIT_INDEX_APP_TBL';
    const CREATE_POLICY__DEFAULT = 'DEFAULT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_STREAMING,
            self::CATEGORY_INDEX,
            self::CATEGORY_APPLICATION,
            self::CATEGORY_TENANT_BUCKET,
            self::CATEGORY_LAKE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_JSON,
            self::FORMAT_DEBEZIUM_JSON,
            self::FORMAT_CSV,
            self::FORMAT_PARQUET,
            self::FORMAT_ORC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCreatePolicyAllowableValues()
    {
        return [
            self::CREATE_POLICY_SYS_INIT_INDEX_APP_TBL,
            self::CREATE_POLICY__DEFAULT,
        ];
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
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['tableAlias'] = isset($data['tableAlias']) ? $data['tableAlias'] : null;
        $this->container['tableAliasEn'] = isset($data['tableAliasEn']) ? $data['tableAliasEn'] : null;
        $this->container['tableAliasFr'] = isset($data['tableAliasFr']) ? $data['tableAliasFr'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['descriptionEn'] = isset($data['descriptionEn']) ? $data['descriptionEn'] : null;
        $this->container['descriptionFr'] = isset($data['descriptionFr']) ? $data['descriptionFr'] : null;
        $this->container['directory'] = isset($data['directory']) ? $data['directory'] : null;
        $this->container['directoryEn'] = isset($data['directoryEn']) ? $data['directoryEn'] : null;
        $this->container['directoryFr'] = isset($data['directoryFr']) ? $data['directoryFr'] : null;
        $this->container['dataClassification'] = isset($data['dataClassification']) ? $data['dataClassification'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['storageSetting'] = isset($data['storageSetting']) ? $data['storageSetting'] : null;
        $this->container['displaySetting'] = isset($data['displaySetting']) ? $data['displaySetting'] : null;
        $this->container['createPolicy'] = isset($data['createPolicy']) ? $data['createPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
            if ((mb_strlen($this->container['tableName']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tableName']) < 5)) {
                $invalidProperties[] = "invalid value for 'tableName', the character length must be bigger than or equal to 5.";
            }
            if (!preg_match("/^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/", $this->container['tableName'])) {
                $invalidProperties[] = "invalid value for 'tableName', must be conform to the pattern /^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/.";
            }
        if ($this->container['tableAlias'] === null) {
            $invalidProperties[] = "'tableAlias' can't be null";
        }
            if ((mb_strlen($this->container['tableAlias']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableAlias', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['tableAlias']) < 5)) {
                $invalidProperties[] = "invalid value for 'tableAlias', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['tableAliasEn']) && (mb_strlen($this->container['tableAliasEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableAliasEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tableAliasEn']) && (mb_strlen($this->container['tableAliasEn']) < 5)) {
                $invalidProperties[] = "invalid value for 'tableAliasEn', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['tableAliasFr']) && (mb_strlen($this->container['tableAliasFr']) > 64)) {
                $invalidProperties[] = "invalid value for 'tableAliasFr', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tableAliasFr']) && (mb_strlen($this->container['tableAliasFr']) < 5)) {
                $invalidProperties[] = "invalid value for 'tableAliasFr', the character length must be bigger than or equal to 5.";
            }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
            $allowedValues = $this->getFormatAllowableValues();
                if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['descriptionFr']) && (mb_strlen($this->container['descriptionFr']) > 1024)) {
                $invalidProperties[] = "invalid value for 'descriptionFr', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['descriptionFr']) && (mb_strlen($this->container['descriptionFr']) < 0)) {
                $invalidProperties[] = "invalid value for 'descriptionFr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) > 256)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directory']) && (mb_strlen($this->container['directory']) < 1)) {
                $invalidProperties[] = "invalid value for 'directory', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directoryEn']) && (mb_strlen($this->container['directoryEn']) > 256)) {
                $invalidProperties[] = "invalid value for 'directoryEn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directoryEn']) && (mb_strlen($this->container['directoryEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'directoryEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['directoryFr']) && (mb_strlen($this->container['directoryFr']) > 256)) {
                $invalidProperties[] = "invalid value for 'directoryFr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['directoryFr']) && (mb_strlen($this->container['directoryFr']) < 1)) {
                $invalidProperties[] = "invalid value for 'directoryFr', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['storageSetting'] === null) {
            $invalidProperties[] = "'storageSetting' can't be null";
        }
        if ($this->container['displaySetting'] === null) {
            $invalidProperties[] = "'displaySetting' can't be null";
        }
            $allowedValues = $this->getCreatePolicyAllowableValues();
                if (!is_null($this->container['createPolicy']) && !in_array($this->container['createPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'createPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets tableName
    *  表名称
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets tableAlias
    *  表别名
    *
    * @return string
    */
    public function getTableAlias()
    {
        return $this->container['tableAlias'];
    }

    /**
    * Sets tableAlias
    *
    * @param string $tableAlias 表别名
    *
    * @return $this
    */
    public function setTableAlias($tableAlias)
    {
        $this->container['tableAlias'] = $tableAlias;
        return $this;
    }

    /**
    * Gets tableAliasEn
    *  表别名
    *
    * @return string|null
    */
    public function getTableAliasEn()
    {
        return $this->container['tableAliasEn'];
    }

    /**
    * Sets tableAliasEn
    *
    * @param string|null $tableAliasEn 表别名
    *
    * @return $this
    */
    public function setTableAliasEn($tableAliasEn)
    {
        $this->container['tableAliasEn'] = $tableAliasEn;
        return $this;
    }

    /**
    * Gets tableAliasFr
    *  表别名
    *
    * @return string|null
    */
    public function getTableAliasFr()
    {
        return $this->container['tableAliasFr'];
    }

    /**
    * Sets tableAliasFr
    *
    * @param string|null $tableAliasFr 表别名
    *
    * @return $this
    */
    public function setTableAliasFr($tableAliasFr)
    {
        $this->container['tableAliasFr'] = $tableAliasFr;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**: 目录类型 - STREAMING 实时流 - INDEX 索引 - APPLICATION 应用 - TENANT_BUCKET 租户桶 - LAKE 数据湖  **约束限制** 不涉及 **取值范围**: - STREAMING - INDEX - APPLICATION - TENANT_BUCKET - LAKE  **默认值** 不涉及
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释**: 目录类型 - STREAMING 实时流 - INDEX 索引 - APPLICATION 应用 - TENANT_BUCKET 租户桶 - LAKE 数据湖  **约束限制** 不涉及 **取值范围**: - STREAMING - INDEX - APPLICATION - TENANT_BUCKET - LAKE  **默认值** 不涉及
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets format
    *  **参数解释**: 表格式 - JSON Json格式 - DEBEZIUM_JSON Debezium JSON 格式 - CSV CSV格式 - PARQUET PARQUET格式 - ORC ORC格式  **约束限制** 不涉及 **取值范围**: - JSON - DEBEZIUM_JSON - CSV - PARQUET - ORC  **默认值** 不涉及
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format **参数解释**: 表格式 - JSON Json格式 - DEBEZIUM_JSON Debezium JSON 格式 - CSV CSV格式 - PARQUET PARQUET格式 - ORC ORC格式  **约束限制** 不涉及 **取值范围**: - JSON - DEBEZIUM_JSON - CSV - PARQUET - ORC  **默认值** 不涉及
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets description
    *  表相关描述
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
    * @param string|null $description 表相关描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets descriptionEn
    *  表相关描述
    *
    * @return string|null
    */
    public function getDescriptionEn()
    {
        return $this->container['descriptionEn'];
    }

    /**
    * Sets descriptionEn
    *
    * @param string|null $descriptionEn 表相关描述
    *
    * @return $this
    */
    public function setDescriptionEn($descriptionEn)
    {
        $this->container['descriptionEn'] = $descriptionEn;
        return $this;
    }

    /**
    * Gets descriptionFr
    *  表相关描述
    *
    * @return string|null
    */
    public function getDescriptionFr()
    {
        return $this->container['descriptionFr'];
    }

    /**
    * Sets descriptionFr
    *
    * @param string|null $descriptionFr 表相关描述
    *
    * @return $this
    */
    public function setDescriptionFr($descriptionFr)
    {
        $this->container['descriptionFr'] = $descriptionFr;
        return $this;
    }

    /**
    * Gets directory
    *  目录分组
    *
    * @return string|null
    */
    public function getDirectory()
    {
        return $this->container['directory'];
    }

    /**
    * Sets directory
    *
    * @param string|null $directory 目录分组
    *
    * @return $this
    */
    public function setDirectory($directory)
    {
        $this->container['directory'] = $directory;
        return $this;
    }

    /**
    * Gets directoryEn
    *  目录分组
    *
    * @return string|null
    */
    public function getDirectoryEn()
    {
        return $this->container['directoryEn'];
    }

    /**
    * Sets directoryEn
    *
    * @param string|null $directoryEn 目录分组
    *
    * @return $this
    */
    public function setDirectoryEn($directoryEn)
    {
        $this->container['directoryEn'] = $directoryEn;
        return $this;
    }

    /**
    * Gets directoryFr
    *  目录分组
    *
    * @return string|null
    */
    public function getDirectoryFr()
    {
        return $this->container['directoryFr'];
    }

    /**
    * Sets directoryFr
    *
    * @param string|null $directoryFr 目录分组
    *
    * @return $this
    */
    public function setDirectoryFr($directoryFr)
    {
        $this->container['directoryFr'] = $directoryFr;
        return $this;
    }

    /**
    * Gets dataClassification
    *  dataClassification
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataClassification|null
    */
    public function getDataClassification()
    {
        return $this->container['dataClassification'];
    }

    /**
    * Sets dataClassification
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataClassification|null $dataClassification dataClassification
    *
    * @return $this
    */
    public function setDataClassification($dataClassification)
    {
        $this->container['dataClassification'] = $dataClassification;
        return $this;
    }

    /**
    * Gets schema
    *  schema
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableSchema
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableSchema $schema schema
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets storageSetting
    *  storageSetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableStorageSetting
    */
    public function getStorageSetting()
    {
        return $this->container['storageSetting'];
    }

    /**
    * Sets storageSetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableStorageSetting $storageSetting storageSetting
    *
    * @return $this
    */
    public function setStorageSetting($storageSetting)
    {
        $this->container['storageSetting'] = $storageSetting;
        return $this;
    }

    /**
    * Gets displaySetting
    *  displaySetting
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TableDisplaySetting
    */
    public function getDisplaySetting()
    {
        return $this->container['displaySetting'];
    }

    /**
    * Sets displaySetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TableDisplaySetting $displaySetting displaySetting
    *
    * @return $this
    */
    public function setDisplaySetting($displaySetting)
    {
        $this->container['displaySetting'] = $displaySetting;
        return $this;
    }

    /**
    * Gets createPolicy
    *  **参数解释**: 创建政策 - SYS_INIT_INDEX_APP_TBL 系统初始化索引应用表 - DEFAULT 默认  **约束限制** 不涉及 **取值范围**: - SYS_INIT_INDEX_APP_TBL - DEFAULT  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getCreatePolicy()
    {
        return $this->container['createPolicy'];
    }

    /**
    * Sets createPolicy
    *
    * @param string|null $createPolicy **参数解释**: 创建政策 - SYS_INIT_INDEX_APP_TBL 系统初始化索引应用表 - DEFAULT 默认  **约束限制** 不涉及 **取值范围**: - SYS_INIT_INDEX_APP_TBL - DEFAULT  **默认值** 不涉及
    *
    * @return $this
    */
    public function setCreatePolicy($createPolicy)
    {
        $this->container['createPolicy'] = $createPolicy;
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

