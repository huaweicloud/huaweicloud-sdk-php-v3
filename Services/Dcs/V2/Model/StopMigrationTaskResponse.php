<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StopMigrationTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StopMigrationTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * backupFiles  backupFiles
    * networkType  网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    * createdAt  迁移任务创建时间。
    * updatedAt  迁移任务完成时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'description' => 'string',
            'status' => 'string',
            'migrationType' => 'string',
            'migrationMethod' => 'string',
            'ecsTenantPrivateIp' => 'string',
            'backupFiles' => '\HuaweiCloud\SDK\Dcs\V2\Model\BackupFilesBody',
            'networkType' => 'string',
            'sourceInstance' => '\HuaweiCloud\SDK\Dcs\V2\Model\SourceInstanceBody',
            'targetInstance' => '\HuaweiCloud\SDK\Dcs\V2\Model\TargetInstanceBody',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * backupFiles  backupFiles
    * networkType  网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    * createdAt  迁移任务创建时间。
    * updatedAt  迁移任务完成时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'description' => null,
        'status' => null,
        'migrationType' => null,
        'migrationMethod' => null,
        'ecsTenantPrivateIp' => null,
        'backupFiles' => null,
        'networkType' => null,
        'sourceInstance' => null,
        'targetInstance' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * backupFiles  backupFiles
    * networkType  网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    * createdAt  迁移任务创建时间。
    * updatedAt  迁移任务完成时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'description' => 'description',
            'status' => 'status',
            'migrationType' => 'migration_type',
            'migrationMethod' => 'migration_method',
            'ecsTenantPrivateIp' => 'ecs_tenant_private_ip',
            'backupFiles' => 'backup_files',
            'networkType' => 'network_type',
            'sourceInstance' => 'source_instance',
            'targetInstance' => 'target_instance',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * backupFiles  backupFiles
    * networkType  网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    * createdAt  迁移任务创建时间。
    * updatedAt  迁移任务完成时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'migrationType' => 'setMigrationType',
            'migrationMethod' => 'setMigrationMethod',
            'ecsTenantPrivateIp' => 'setEcsTenantPrivateIp',
            'backupFiles' => 'setBackupFiles',
            'networkType' => 'setNetworkType',
            'sourceInstance' => 'setSourceInstance',
            'targetInstance' => 'setTargetInstance',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  迁移任务ID。
    * taskName  迁移任务名称。
    * description  迁移任务描述。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED。
    * migrationType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * ecsTenantPrivateIp  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    * backupFiles  backupFiles
    * networkType  网络类型，包括vpc和vpn两种类型。
    * sourceInstance  sourceInstance
    * targetInstance  targetInstance
    * createdAt  迁移任务创建时间。
    * updatedAt  迁移任务完成时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'migrationType' => 'getMigrationType',
            'migrationMethod' => 'getMigrationMethod',
            'ecsTenantPrivateIp' => 'getEcsTenantPrivateIp',
            'backupFiles' => 'getBackupFiles',
            'networkType' => 'getNetworkType',
            'sourceInstance' => 'getSourceInstance',
            'targetInstance' => 'getTargetInstance',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_MIGRATING = 'MIGRATING';
    const STATUS_TERMINATED = 'TERMINATED';
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
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_MIGRATING,
            self::STATUS_TERMINATED,
        ];
    }

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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['migrationType'] = isset($data['migrationType']) ? $data['migrationType'] : null;
        $this->container['migrationMethod'] = isset($data['migrationMethod']) ? $data['migrationMethod'] : null;
        $this->container['ecsTenantPrivateIp'] = isset($data['ecsTenantPrivateIp']) ? $data['ecsTenantPrivateIp'] : null;
        $this->container['backupFiles'] = isset($data['backupFiles']) ? $data['backupFiles'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['sourceInstance'] = isset($data['sourceInstance']) ? $data['sourceInstance'] : null;
        $this->container['targetInstance'] = isset($data['targetInstance']) ? $data['targetInstance'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMigrationTypeAllowableValues();
                if (!is_null($this->container['migrationType']) && !in_array($this->container['migrationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets taskId
    *  迁移任务ID。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 迁移任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  迁移任务名称。
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
    * @param string|null $taskName 迁移任务名称。
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
    * Gets status
    *  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets migrationType
    *  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    *
    * @return string|null
    */
    public function getMigrationType()
    {
        return $this->container['migrationType'];
    }

    /**
    * Sets migrationType
    *
    * @param string|null $migrationType 迁移任务类型,包括备份文件导入和在线迁移两种类型。
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
    *  迁移方式，包括全量迁移和增量迁移两种类型。
    *
    * @return string|null
    */
    public function getMigrationMethod()
    {
        return $this->container['migrationMethod'];
    }

    /**
    * Sets migrationMethod
    *
    * @param string|null $migrationMethod 迁移方式，包括全量迁移和增量迁移两种类型。
    *
    * @return $this
    */
    public function setMigrationMethod($migrationMethod)
    {
        $this->container['migrationMethod'] = $migrationMethod;
        return $this;
    }

    /**
    * Gets ecsTenantPrivateIp
    *  迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    *
    * @return string|null
    */
    public function getEcsTenantPrivateIp()
    {
        return $this->container['ecsTenantPrivateIp'];
    }

    /**
    * Sets ecsTenantPrivateIp
    *
    * @param string|null $ecsTenantPrivateIp 迁移机租户侧私有IP，与目的/源redis私有IP处于同VPC，可将此IP加入白名单
    *
    * @return $this
    */
    public function setEcsTenantPrivateIp($ecsTenantPrivateIp)
    {
        $this->container['ecsTenantPrivateIp'] = $ecsTenantPrivateIp;
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
    *  网络类型，包括vpc和vpn两种类型。
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
    * @param string|null $networkType 网络类型，包括vpc和vpn两种类型。
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
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\TargetInstanceBody|null
    */
    public function getTargetInstance()
    {
        return $this->container['targetInstance'];
    }

    /**
    * Sets targetInstance
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\TargetInstanceBody|null $targetInstance targetInstance
    *
    * @return $this
    */
    public function setTargetInstance($targetInstance)
    {
        $this->container['targetInstance'] = $targetInstance;
        return $this;
    }

    /**
    * Gets createdAt
    *  迁移任务创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 迁移任务创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  迁移任务完成时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 迁移任务完成时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

