<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMigrationTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMigrationTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    * targetInstanceAddress  目标实例地址
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * taskName  迁移任务名称。
    * targetInstanceId  目标实例ID。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * targetInstanceName  目标实例名称。
    * migrateType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * createdAt  迁移任务创建时间
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * taskId  迁移任务ID。
    * dataSource  源redis地址，格式为ip:port或者桶名。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'migrationTasks' => '\HuaweiCloud\SDK\Dcs\V2\Model\MigrationTaskList[]',
            'targetInstanceAddress' => 'string',
            'migrationMethod' => 'string',
            'taskName' => 'string',
            'targetInstanceId' => 'string',
            'sourceInstanceName' => 'string',
            'targetInstanceName' => 'string',
            'migrateType' => 'string',
            'createdAt' => 'string',
            'sourceInstanceId' => 'string',
            'taskId' => 'string',
            'dataSource' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    * targetInstanceAddress  目标实例地址
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * taskName  迁移任务名称。
    * targetInstanceId  目标实例ID。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * targetInstanceName  目标实例名称。
    * migrateType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * createdAt  迁移任务创建时间
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * taskId  迁移任务ID。
    * dataSource  源redis地址，格式为ip:port或者桶名。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'migrationTasks' => null,
        'targetInstanceAddress' => null,
        'migrationMethod' => null,
        'taskName' => null,
        'targetInstanceId' => null,
        'sourceInstanceName' => null,
        'targetInstanceName' => null,
        'migrateType' => null,
        'createdAt' => null,
        'sourceInstanceId' => null,
        'taskId' => null,
        'dataSource' => null,
        'status' => null
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
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    * targetInstanceAddress  目标实例地址
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * taskName  迁移任务名称。
    * targetInstanceId  目标实例ID。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * targetInstanceName  目标实例名称。
    * migrateType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * createdAt  迁移任务创建时间
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * taskId  迁移任务ID。
    * dataSource  源redis地址，格式为ip:port或者桶名。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'migrationTasks' => 'migration_tasks',
            'targetInstanceAddress' => 'target_instance_address',
            'migrationMethod' => 'migration_method',
            'taskName' => 'task_name',
            'targetInstanceId' => 'target_instance_id',
            'sourceInstanceName' => 'source_instance_name',
            'targetInstanceName' => 'target_instance_name',
            'migrateType' => 'migrate_type',
            'createdAt' => 'created_at',
            'sourceInstanceId' => 'source_instance_id',
            'taskId' => 'task_id',
            'dataSource' => 'data_source',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    * targetInstanceAddress  目标实例地址
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * taskName  迁移任务名称。
    * targetInstanceId  目标实例ID。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * targetInstanceName  目标实例名称。
    * migrateType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * createdAt  迁移任务创建时间
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * taskId  迁移任务ID。
    * dataSource  源redis地址，格式为ip:port或者桶名。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'migrationTasks' => 'setMigrationTasks',
            'targetInstanceAddress' => 'setTargetInstanceAddress',
            'migrationMethod' => 'setMigrationMethod',
            'taskName' => 'setTaskName',
            'targetInstanceId' => 'setTargetInstanceId',
            'sourceInstanceName' => 'setSourceInstanceName',
            'targetInstanceName' => 'setTargetInstanceName',
            'migrateType' => 'setMigrateType',
            'createdAt' => 'setCreatedAt',
            'sourceInstanceId' => 'setSourceInstanceId',
            'taskId' => 'setTaskId',
            'dataSource' => 'setDataSource',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  迁移任务数量。
    * migrationTasks  迁移任务列表。
    * targetInstanceAddress  目标实例地址
    * migrationMethod  迁移方式，包括全量迁移和增量迁移两种类型。
    * taskName  迁移任务名称。
    * targetInstanceId  目标实例ID。
    * sourceInstanceName  源实例名称，若自建redis则为空。
    * targetInstanceName  目标实例名称。
    * migrateType  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    * createdAt  迁移任务创建时间
    * sourceInstanceId  源实例ID，若自建redis则为空。
    * taskId  迁移任务ID。
    * dataSource  源redis地址，格式为ip:port或者桶名。
    * status  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'migrationTasks' => 'getMigrationTasks',
            'targetInstanceAddress' => 'getTargetInstanceAddress',
            'migrationMethod' => 'getMigrationMethod',
            'taskName' => 'getTaskName',
            'targetInstanceId' => 'getTargetInstanceId',
            'sourceInstanceName' => 'getSourceInstanceName',
            'targetInstanceName' => 'getTargetInstanceName',
            'migrateType' => 'getMigrateType',
            'createdAt' => 'getCreatedAt',
            'sourceInstanceId' => 'getSourceInstanceId',
            'taskId' => 'getTaskId',
            'dataSource' => 'getDataSource',
            'status' => 'getStatus'
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
    const MIGRATION_METHOD_FULL_AMOUNT_MIGRATION = 'full_amount_migration';
    const MIGRATION_METHOD_INCREMENTAL_MIGRATION = 'incremental_migration';
    const MIGRATE_TYPE_BACKUPFILE_IMPORT = 'backupfile_import';
    const MIGRATE_TYPE_ONLINE_MIGRATION = 'online_migration';
    const STATUS_SUCCESS = 'SUCCESS';
    const STATUS_FAILED = 'FAILED';
    const STATUS_MIGRATING = 'MIGRATING';
    const STATUS_TERMINATED = 'TERMINATED';
    

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
    public function getMigrateTypeAllowableValues()
    {
        return [
            self::MIGRATE_TYPE_BACKUPFILE_IMPORT,
            self::MIGRATE_TYPE_ONLINE_MIGRATION,
        ];
    }

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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['migrationTasks'] = isset($data['migrationTasks']) ? $data['migrationTasks'] : null;
        $this->container['targetInstanceAddress'] = isset($data['targetInstanceAddress']) ? $data['targetInstanceAddress'] : null;
        $this->container['migrationMethod'] = isset($data['migrationMethod']) ? $data['migrationMethod'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['targetInstanceId'] = isset($data['targetInstanceId']) ? $data['targetInstanceId'] : null;
        $this->container['sourceInstanceName'] = isset($data['sourceInstanceName']) ? $data['sourceInstanceName'] : null;
        $this->container['targetInstanceName'] = isset($data['targetInstanceName']) ? $data['targetInstanceName'] : null;
        $this->container['migrateType'] = isset($data['migrateType']) ? $data['migrateType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['sourceInstanceId'] = isset($data['sourceInstanceId']) ? $data['sourceInstanceId'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['dataSource'] = isset($data['dataSource']) ? $data['dataSource'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getMigrationMethodAllowableValues();
                if (!is_null($this->container['migrationMethod']) && !in_array($this->container['migrationMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrationMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMigrateTypeAllowableValues();
                if (!is_null($this->container['migrateType']) && !in_array($this->container['migrateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'migrateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets count
    *  迁移任务数量。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 迁移任务数量。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets migrationTasks
    *  迁移任务列表。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\MigrationTaskList[]|null
    */
    public function getMigrationTasks()
    {
        return $this->container['migrationTasks'];
    }

    /**
    * Sets migrationTasks
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\MigrationTaskList[]|null $migrationTasks 迁移任务列表。
    *
    * @return $this
    */
    public function setMigrationTasks($migrationTasks)
    {
        $this->container['migrationTasks'] = $migrationTasks;
        return $this;
    }

    /**
    * Gets targetInstanceAddress
    *  目标实例地址
    *
    * @return string|null
    */
    public function getTargetInstanceAddress()
    {
        return $this->container['targetInstanceAddress'];
    }

    /**
    * Sets targetInstanceAddress
    *
    * @param string|null $targetInstanceAddress 目标实例地址
    *
    * @return $this
    */
    public function setTargetInstanceAddress($targetInstanceAddress)
    {
        $this->container['targetInstanceAddress'] = $targetInstanceAddress;
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
    * Gets targetInstanceId
    *  目标实例ID。
    *
    * @return string|null
    */
    public function getTargetInstanceId()
    {
        return $this->container['targetInstanceId'];
    }

    /**
    * Sets targetInstanceId
    *
    * @param string|null $targetInstanceId 目标实例ID。
    *
    * @return $this
    */
    public function setTargetInstanceId($targetInstanceId)
    {
        $this->container['targetInstanceId'] = $targetInstanceId;
        return $this;
    }

    /**
    * Gets sourceInstanceName
    *  源实例名称，若自建redis则为空。
    *
    * @return string|null
    */
    public function getSourceInstanceName()
    {
        return $this->container['sourceInstanceName'];
    }

    /**
    * Sets sourceInstanceName
    *
    * @param string|null $sourceInstanceName 源实例名称，若自建redis则为空。
    *
    * @return $this
    */
    public function setSourceInstanceName($sourceInstanceName)
    {
        $this->container['sourceInstanceName'] = $sourceInstanceName;
        return $this;
    }

    /**
    * Gets targetInstanceName
    *  目标实例名称。
    *
    * @return string|null
    */
    public function getTargetInstanceName()
    {
        return $this->container['targetInstanceName'];
    }

    /**
    * Sets targetInstanceName
    *
    * @param string|null $targetInstanceName 目标实例名称。
    *
    * @return $this
    */
    public function setTargetInstanceName($targetInstanceName)
    {
        $this->container['targetInstanceName'] = $targetInstanceName;
        return $this;
    }

    /**
    * Gets migrateType
    *  迁移任务类型,包括备份文件导入和在线迁移两种类型。
    *
    * @return string|null
    */
    public function getMigrateType()
    {
        return $this->container['migrateType'];
    }

    /**
    * Sets migrateType
    *
    * @param string|null $migrateType 迁移任务类型,包括备份文件导入和在线迁移两种类型。
    *
    * @return $this
    */
    public function setMigrateType($migrateType)
    {
        $this->container['migrateType'] = $migrateType;
        return $this;
    }

    /**
    * Gets createdAt
    *  迁移任务创建时间
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
    * @param string|null $createdAt 迁移任务创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets sourceInstanceId
    *  源实例ID，若自建redis则为空。
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
    * @param string|null $sourceInstanceId 源实例ID，若自建redis则为空。
    *
    * @return $this
    */
    public function setSourceInstanceId($sourceInstanceId)
    {
        $this->container['sourceInstanceId'] = $sourceInstanceId;
        return $this;
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
    * Gets dataSource
    *  源redis地址，格式为ip:port或者桶名。
    *
    * @return string|null
    */
    public function getDataSource()
    {
        return $this->container['dataSource'];
    }

    /**
    * Sets dataSource
    *
    * @param string|null $dataSource 源redis地址，格式为ip:port或者桶名。
    *
    * @return $this
    */
    public function setDataSource($dataSource)
    {
        $this->container['dataSource'] = $dataSource;
        return $this;
    }

    /**
    * Gets status
    *  迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
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
    * @param string|null $status 迁移任务状态，这个字段的值包括：SUCCESS, FAILED, MIGRATING，TERMINATED
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

