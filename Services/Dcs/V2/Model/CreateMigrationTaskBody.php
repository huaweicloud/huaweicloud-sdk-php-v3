<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMigrationTaskBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMigrationTaskBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。 取值范围： - backupfile_import：表示备份文件导入 - online_migration：表示在线迁移。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * backupFiles  backupFiles
    * networkType  迁移任务类型为在线迁移时，表示源Redis和目标Redis联通的网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskName' => 'string',
            'description' => 'string',
            'migrationType' => 'string',
            'migrationMethod' => 'string',
            'backupFiles' => '\HuaweiCloud\SDK\Dcs\V2\Model\BackupFilesBody',
            'networkType' => 'string',
            'sourceInstance' => '\HuaweiCloud\SDK\Dcs\V2\Model\SourceInstanceBody',
            'targetInstance' => '\HuaweiCloud\SDK\Dcs\V2\Model\TargetInstanceBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。 取值范围： - backupfile_import：表示备份文件导入 - online_migration：表示在线迁移。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * backupFiles  backupFiles
    * networkType  迁移任务类型为在线迁移时，表示源Redis和目标Redis联通的网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskName' => null,
        'description' => null,
        'migrationType' => null,
        'migrationMethod' => null,
        'backupFiles' => null,
        'networkType' => null,
        'sourceInstance' => null,
        'targetInstance' => null
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
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。 取值范围： - backupfile_import：表示备份文件导入 - online_migration：表示在线迁移。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * backupFiles  backupFiles
    * networkType  迁移任务类型为在线迁移时，表示源Redis和目标Redis联通的网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskName' => 'task_name',
            'description' => 'description',
            'migrationType' => 'migration_type',
            'migrationMethod' => 'migration_method',
            'backupFiles' => 'backup_files',
            'networkType' => 'network_type',
            'sourceInstance' => 'source_instance',
            'targetInstance' => 'target_instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。 取值范围： - backupfile_import：表示备份文件导入 - online_migration：表示在线迁移。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * backupFiles  backupFiles
    * networkType  迁移任务类型为在线迁移时，表示源Redis和目标Redis联通的网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $setters = [
            'taskName' => 'setTaskName',
            'description' => 'setDescription',
            'migrationType' => 'setMigrationType',
            'migrationMethod' => 'setMigrationMethod',
            'backupFiles' => 'setBackupFiles',
            'networkType' => 'setNetworkType',
            'sourceInstance' => 'setSourceInstance',
            'targetInstance' => 'setTargetInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。 取值范围： - backupfile_import：表示备份文件导入 - online_migration：表示在线迁移。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    * backupFiles  backupFiles
    * networkType  迁移任务类型为在线迁移时，表示源Redis和目标Redis联通的网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    *
    * @var string[]
    */
    protected static $getters = [
            'taskName' => 'getTaskName',
            'description' => 'getDescription',
            'migrationType' => 'getMigrationType',
            'migrationMethod' => 'getMigrationMethod',
            'backupFiles' => 'getBackupFiles',
            'networkType' => 'getNetworkType',
            'sourceInstance' => 'getSourceInstance',
            'targetInstance' => 'getTargetInstance'
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
    const MIGRATION_TYPE_BACKUPFILE_IMPORT = 'backupfile_import';
    const MIGRATION_TYPE_ONLINE_MIGRATION = 'online_migration';
    const MIGRATION_METHOD_FULL_AMOUNT_MIGRATION = 'full_amount_migration';
    const MIGRATION_METHOD_INCREMENTAL_MIGRATION = 'incremental_migration';
    const NETWORK_TYPE_VPC = 'vpc';
    const NETWORK_TYPE_VPN = 'vpn';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationTypeAllowableValues()
    {
        return [
            self::MIGRATION_TYPE_BACKUPFILE_IMPORT,
            self::MIGRATION_TYPE_ONLINE_MIGRATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMigrationMethodAllowableValues()
    {
        return [
            self::MIGRATION_METHOD_FULL_AMOUNT_MIGRATION,
            self::MIGRATION_METHOD_INCREMENTAL_MIGRATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetworkTypeAllowableValues()
    {
        return [
            self::NETWORK_TYPE_VPC,
            self::NETWORK_TYPE_VPN,
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
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['migrationType'] = isset($data['migrationType']) ? $data['migrationType'] : null;
        $this->container['migrationMethod'] = isset($data['migrationMethod']) ? $data['migrationMethod'] : null;
        $this->container['backupFiles'] = isset($data['backupFiles']) ? $data['backupFiles'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['sourceInstance'] = isset($data['sourceInstance']) ? $data['sourceInstance'] : null;
        $this->container['targetInstance'] = isset($data['targetInstance']) ? $data['targetInstance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
        if ($this->container['migrationType'] === null) {
            $invalidProperties[] = "'migrationType' can't be null";
        }
            $allowedValues = $this->getMigrationTypeAllowableValues();
                if (!is_null($this->container['migrationType']) && !in_array($this->container['migrationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['migrationMethod'] === null) {
            $invalidProperties[] = "'migrationMethod' can't be null";
        }
            $allowedValues = $this->getMigrationMethodAllowableValues();
                if (!is_null($this->container['migrationMethod']) && !in_array($this->container['migrationMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNetworkTypeAllowableValues();
                if (!is_null($this->container['networkType']) && !in_array($this->container['networkType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'networkType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['targetInstance'] === null) {
            $invalidProperties[] = "'targetInstance' can't be null";
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
    * Gets taskName
    *  迁移任务名称。
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName 迁移任务名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets description
    *  迁移任务描述。
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
    * @param string|null $description 迁移任务描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets migrationType
    *  迁移任务类型,包括备份文件导入和在线迁移两种类型。 取值范围： - backupfile_import：表示备份文件导入 - online_migration：表示在线迁移。
    *
    * @return string
    */
    public function getMigrationType()
    {
        return $this->container['migrationType'];
    }

    /**
    * Sets migrationType
    *
    * @param string $migrationType 迁移任务类型,包括备份文件导入和在线迁移两种类型。 取值范围： - backupfile_import：表示备份文件导入 - online_migration：表示在线迁移。
    *
    * @return $this
    */
    public function setMigrationType($migrationType)
    {
        $this->container['migrationType'] = $migrationType;
        return $this;
    }

    /**
    * Gets migrationMethod
    *  迁移方式，包括全量迁移和增量迁移两种类型。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    *
    * @return string
    */
    public function getMigrationMethod()
    {
        return $this->container['migrationMethod'];
    }

    /**
    * Sets migrationMethod
    *
    * @param string $migrationMethod 迁移方式，包括全量迁移和增量迁移两种类型。 取值范围： - full_amount_migration：表示全量迁移。 - incremental_migration：表示增量迁移。
    *
    * @return $this
    */
    public function setMigrationMethod($migrationMethod)
    {
        $this->container['migrationMethod'] = $migrationMethod;
        return $this;
    }

    /**
    * Gets backupFiles
    *  backupFiles
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BackupFilesBody|null
    */
    public function getBackupFiles()
    {
        return $this->container['backupFiles'];
    }

    /**
    * Sets backupFiles
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BackupFilesBody|null $backupFiles backupFiles
    *
    * @return $this
    */
    public function setBackupFiles($backupFiles)
    {
        $this->container['backupFiles'] = $backupFiles;
        return $this;
    }

    /**
    * Gets networkType
    *  迁移任务类型为在线迁移时，表示源Redis和目标Redis联通的网络类型，包括vpc和vpn两种类型。
    *
    * @return string|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string|null $networkType 迁移任务类型为在线迁移时，表示源Redis和目标Redis联通的网络类型，包括vpc和vpn两种类型。
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets sourceInstance
    *  sourceInstance
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\SourceInstanceBody|null
    */
    public function getSourceInstance()
    {
        return $this->container['sourceInstance'];
    }

    /**
    * Sets sourceInstance
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\SourceInstanceBody|null $sourceInstance sourceInstance
    *
    * @return $this
    */
    public function setSourceInstance($sourceInstance)
    {
        $this->container['sourceInstance'] = $sourceInstance;
        return $this;
    }

    /**
    * Gets targetInstance
    *  targetInstance
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TargetInstanceBody
    */
    public function getTargetInstance()
    {
        return $this->container['targetInstance'];
    }

    /**
    * Sets targetInstance
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TargetInstanceBody $targetInstance targetInstance
    *
    * @return $this
    */
    public function setTargetInstance($targetInstance)
    {
        $this->container['targetInstance'] = $targetInstance;
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

