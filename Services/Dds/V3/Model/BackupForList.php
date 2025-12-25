<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupForList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupForList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 备份名称。 **取值范围：** 不涉及。
    * instanceId  **参数解释：** 备份所属的实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 备份所属的实例名称。 **取值范围：** 不涉及。
    * datastore  datastore
    * type  **参数解释：** 备份类型。 **取值范围：** - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。 - 取值为“Incremental”，表示自动增量备份。
    * beginTime  **参数解释：** 备份开始时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 备份结束时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * status  **参数解释：** 备份状态。 **取值范围：** - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DISABLED：备份删除中。
    * size  **参数解释：** 备份大小，单位：KB。 **取值范围：** 不涉及。
    * description  **参数解释：** 备份描述。 **取值范围：** 不涉及。
    * instanceStatus  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示存储空间满。 - enlargefail，表示实例扩容节点个数失败。
    * instanceMode  **参数解释：** 实例模式。 **取值范围：** - Sharding - ReplicaSet - Single
    * isInstanceRestoring  **参数解释：** 当前实例是否处于恢复中或者恢复检查中。 **取值范围：** - true，表示实例处于恢复中或者恢复检查中，不允许删除该实例备份。 - false，当前实例未处于恢复中或者恢复检查中，允许删除该实例备份。
    * backupMethod  **参数解释：** 备份方式。 **取值范围：** - Snapshot，快照备份。 - Physical，物理备份。 - Logical，逻辑备份。 - Incremental，增量备份。
    * kmsEnable  **参数解释：** 是否开启kms加密。 **取值范围：** - true，已开启kms加密。 - false，未开启kms加密。
    * deletable  **参数解释：** 是否支持删除该备份。当全备策略存在时，不允许删除自动备份。手动备份允许删除。 **取值范围：** - true，允许删除该备份。 - false，不允许删除该备份。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Dds\V3\Model\BackupDatabase',
            'type' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'status' => 'string',
            'size' => 'int',
            'description' => 'string',
            'instanceStatus' => 'string',
            'instanceMode' => 'string',
            'isInstanceRestoring' => 'bool',
            'backupMethod' => 'string',
            'kmsEnable' => 'bool',
            'deletable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 备份名称。 **取值范围：** 不涉及。
    * instanceId  **参数解释：** 备份所属的实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 备份所属的实例名称。 **取值范围：** 不涉及。
    * datastore  datastore
    * type  **参数解释：** 备份类型。 **取值范围：** - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。 - 取值为“Incremental”，表示自动增量备份。
    * beginTime  **参数解释：** 备份开始时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 备份结束时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * status  **参数解释：** 备份状态。 **取值范围：** - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DISABLED：备份删除中。
    * size  **参数解释：** 备份大小，单位：KB。 **取值范围：** 不涉及。
    * description  **参数解释：** 备份描述。 **取值范围：** 不涉及。
    * instanceStatus  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示存储空间满。 - enlargefail，表示实例扩容节点个数失败。
    * instanceMode  **参数解释：** 实例模式。 **取值范围：** - Sharding - ReplicaSet - Single
    * isInstanceRestoring  **参数解释：** 当前实例是否处于恢复中或者恢复检查中。 **取值范围：** - true，表示实例处于恢复中或者恢复检查中，不允许删除该实例备份。 - false，当前实例未处于恢复中或者恢复检查中，允许删除该实例备份。
    * backupMethod  **参数解释：** 备份方式。 **取值范围：** - Snapshot，快照备份。 - Physical，物理备份。 - Logical，逻辑备份。 - Incremental，增量备份。
    * kmsEnable  **参数解释：** 是否开启kms加密。 **取值范围：** - true，已开启kms加密。 - false，未开启kms加密。
    * deletable  **参数解释：** 是否支持删除该备份。当全备策略存在时，不允许删除自动备份。手动备份允许删除。 **取值范围：** - true，允许删除该备份。 - false，不允许删除该备份。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'instanceId' => null,
        'instanceName' => null,
        'datastore' => null,
        'type' => null,
        'beginTime' => null,
        'endTime' => null,
        'status' => null,
        'size' => 'int64',
        'description' => null,
        'instanceStatus' => null,
        'instanceMode' => null,
        'isInstanceRestoring' => null,
        'backupMethod' => null,
        'kmsEnable' => null,
        'deletable' => null
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
    * id  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 备份名称。 **取值范围：** 不涉及。
    * instanceId  **参数解释：** 备份所属的实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 备份所属的实例名称。 **取值范围：** 不涉及。
    * datastore  datastore
    * type  **参数解释：** 备份类型。 **取值范围：** - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。 - 取值为“Incremental”，表示自动增量备份。
    * beginTime  **参数解释：** 备份开始时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 备份结束时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * status  **参数解释：** 备份状态。 **取值范围：** - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DISABLED：备份删除中。
    * size  **参数解释：** 备份大小，单位：KB。 **取值范围：** 不涉及。
    * description  **参数解释：** 备份描述。 **取值范围：** 不涉及。
    * instanceStatus  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示存储空间满。 - enlargefail，表示实例扩容节点个数失败。
    * instanceMode  **参数解释：** 实例模式。 **取值范围：** - Sharding - ReplicaSet - Single
    * isInstanceRestoring  **参数解释：** 当前实例是否处于恢复中或者恢复检查中。 **取值范围：** - true，表示实例处于恢复中或者恢复检查中，不允许删除该实例备份。 - false，当前实例未处于恢复中或者恢复检查中，允许删除该实例备份。
    * backupMethod  **参数解释：** 备份方式。 **取值范围：** - Snapshot，快照备份。 - Physical，物理备份。 - Logical，逻辑备份。 - Incremental，增量备份。
    * kmsEnable  **参数解释：** 是否开启kms加密。 **取值范围：** - true，已开启kms加密。 - false，未开启kms加密。
    * deletable  **参数解释：** 是否支持删除该备份。当全备策略存在时，不允许删除自动备份。手动备份允许删除。 **取值范围：** - true，允许删除该备份。 - false，不允许删除该备份。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'datastore' => 'datastore',
            'type' => 'type',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'status' => 'status',
            'size' => 'size',
            'description' => 'description',
            'instanceStatus' => 'instance_status',
            'instanceMode' => 'instance_mode',
            'isInstanceRestoring' => 'is_instance_restoring',
            'backupMethod' => 'backup_method',
            'kmsEnable' => 'kms_enable',
            'deletable' => 'deletable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 备份名称。 **取值范围：** 不涉及。
    * instanceId  **参数解释：** 备份所属的实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 备份所属的实例名称。 **取值范围：** 不涉及。
    * datastore  datastore
    * type  **参数解释：** 备份类型。 **取值范围：** - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。 - 取值为“Incremental”，表示自动增量备份。
    * beginTime  **参数解释：** 备份开始时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 备份结束时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * status  **参数解释：** 备份状态。 **取值范围：** - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DISABLED：备份删除中。
    * size  **参数解释：** 备份大小，单位：KB。 **取值范围：** 不涉及。
    * description  **参数解释：** 备份描述。 **取值范围：** 不涉及。
    * instanceStatus  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示存储空间满。 - enlargefail，表示实例扩容节点个数失败。
    * instanceMode  **参数解释：** 实例模式。 **取值范围：** - Sharding - ReplicaSet - Single
    * isInstanceRestoring  **参数解释：** 当前实例是否处于恢复中或者恢复检查中。 **取值范围：** - true，表示实例处于恢复中或者恢复检查中，不允许删除该实例备份。 - false，当前实例未处于恢复中或者恢复检查中，允许删除该实例备份。
    * backupMethod  **参数解释：** 备份方式。 **取值范围：** - Snapshot，快照备份。 - Physical，物理备份。 - Logical，逻辑备份。 - Incremental，增量备份。
    * kmsEnable  **参数解释：** 是否开启kms加密。 **取值范围：** - true，已开启kms加密。 - false，未开启kms加密。
    * deletable  **参数解释：** 是否支持删除该备份。当全备策略存在时，不允许删除自动备份。手动备份允许删除。 **取值范围：** - true，允许删除该备份。 - false，不允许删除该备份。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'datastore' => 'setDatastore',
            'type' => 'setType',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'status' => 'setStatus',
            'size' => 'setSize',
            'description' => 'setDescription',
            'instanceStatus' => 'setInstanceStatus',
            'instanceMode' => 'setInstanceMode',
            'isInstanceRestoring' => 'setIsInstanceRestoring',
            'backupMethod' => 'setBackupMethod',
            'kmsEnable' => 'setKmsEnable',
            'deletable' => 'setDeletable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 备份名称。 **取值范围：** 不涉及。
    * instanceId  **参数解释：** 备份所属的实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **取值范围：** 不涉及。
    * instanceName  **参数解释：** 备份所属的实例名称。 **取值范围：** 不涉及。
    * datastore  datastore
    * type  **参数解释：** 备份类型。 **取值范围：** - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。 - 取值为“Incremental”，表示自动增量备份。
    * beginTime  **参数解释：** 备份开始时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * endTime  **参数解释：** 备份结束时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    * status  **参数解释：** 备份状态。 **取值范围：** - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DISABLED：备份删除中。
    * size  **参数解释：** 备份大小，单位：KB。 **取值范围：** 不涉及。
    * description  **参数解释：** 备份描述。 **取值范围：** 不涉及。
    * instanceStatus  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示存储空间满。 - enlargefail，表示实例扩容节点个数失败。
    * instanceMode  **参数解释：** 实例模式。 **取值范围：** - Sharding - ReplicaSet - Single
    * isInstanceRestoring  **参数解释：** 当前实例是否处于恢复中或者恢复检查中。 **取值范围：** - true，表示实例处于恢复中或者恢复检查中，不允许删除该实例备份。 - false，当前实例未处于恢复中或者恢复检查中，允许删除该实例备份。
    * backupMethod  **参数解释：** 备份方式。 **取值范围：** - Snapshot，快照备份。 - Physical，物理备份。 - Logical，逻辑备份。 - Incremental，增量备份。
    * kmsEnable  **参数解释：** 是否开启kms加密。 **取值范围：** - true，已开启kms加密。 - false，未开启kms加密。
    * deletable  **参数解释：** 是否支持删除该备份。当全备策略存在时，不允许删除自动备份。手动备份允许删除。 **取值范围：** - true，允许删除该备份。 - false，不允许删除该备份。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'datastore' => 'getDatastore',
            'type' => 'getType',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'status' => 'getStatus',
            'size' => 'getSize',
            'description' => 'getDescription',
            'instanceStatus' => 'getInstanceStatus',
            'instanceMode' => 'getInstanceMode',
            'isInstanceRestoring' => 'getIsInstanceRestoring',
            'backupMethod' => 'getBackupMethod',
            'kmsEnable' => 'getKmsEnable',
            'deletable' => 'getDeletable'
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
    const TYPE_AUTO = 'auto';
    const TYPE_MANUAL = 'manual';
    const TYPE_FRAGMENT = 'fragment';
    const TYPE_INCREMENTAL = 'incremental';
    const STATUS_BUILDING = 'BUILDING';
    const STATUS_COMPLETED = 'COMPLETED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_DELETING = 'DELETING';
    const INSTANCE_STATUS_NORMAL = 'normal';
    const INSTANCE_STATUS_ABNORMAL = 'abnormal';
    const INSTANCE_STATUS_CREATING = 'creating';
    const INSTANCE_STATUS_FROZEN = 'frozen';
    const INSTANCE_STATUS_DATA_DISK_FULL = 'data_disk_full';
    const INSTANCE_STATUS_ENLARGEFAIL = 'enlargefail';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_AUTO,
            self::TYPE_MANUAL,
            self::TYPE_FRAGMENT,
            self::TYPE_INCREMENTAL,
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
            self::STATUS_BUILDING,
            self::STATUS_COMPLETED,
            self::STATUS_FAILED,
            self::STATUS_DELETING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceStatusAllowableValues()
    {
        return [
            self::INSTANCE_STATUS_NORMAL,
            self::INSTANCE_STATUS_ABNORMAL,
            self::INSTANCE_STATUS_CREATING,
            self::INSTANCE_STATUS_FROZEN,
            self::INSTANCE_STATUS_DATA_DISK_FULL,
            self::INSTANCE_STATUS_ENLARGEFAIL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
        $this->container['isInstanceRestoring'] = isset($data['isInstanceRestoring']) ? $data['isInstanceRestoring'] : null;
        $this->container['backupMethod'] = isset($data['backupMethod']) ? $data['backupMethod'] : null;
        $this->container['kmsEnable'] = isset($data['kmsEnable']) ? $data['kmsEnable'] : null;
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['datastore'] === null) {
            $invalidProperties[] = "'datastore' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            $allowedValues = $this->getInstanceStatusAllowableValues();
                if (!is_null($this->container['instanceStatus']) && !in_array($this->container['instanceStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceStatus', must be one of '%s'",
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
    * Gets id
    *  **参数解释：** 备份ID。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释：** 备份ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 备份名称。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释：** 备份名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释：** 备份所属的实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释：** 备份所属的实例ID，可以调用“查询实例列表”接口获取。如果未申请实例，可以调用“创建实例”接口创建。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释：** 备份所属的实例名称。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName **参数解释：** 备份所属的实例名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Dds\V3\Model\BackupDatabase
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Dds\V3\Model\BackupDatabase $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 备份类型。 **取值范围：** - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。 - 取值为“Incremental”，表示自动增量备份。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释：** 备份类型。 **取值范围：** - 取值为“Auto”，表示自动全量备份。 - 取值为“Manual”，表示手动全量备份。 - 取值为“Incremental”，表示自动增量备份。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释：** 备份开始时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string $beginTime **参数解释：** 备份开始时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释：** 备份结束时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime **参数解释：** 备份结束时间，格式为“yyyy-mm-dd hh:mm:ss”。该时间为UTC时间。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 备份状态。 **取值范围：** - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DISABLED：备份删除中。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释：** 备份状态。 **取值范围：** - BUILDING：备份中。 - COMPLETED：备份完成。 - FAILED：备份失败。 - DISABLED：备份删除中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释：** 备份大小，单位：KB。 **取值范围：** 不涉及。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size **参数解释：** 备份大小，单位：KB。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 备份描述。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释：** 备份描述。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示存储空间满。 - enlargefail，表示实例扩容节点个数失败。
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus **参数解释：** 实例状态。 **取值范围：** - normal，表示实例正常。 - abnormal，表示实例异常。 - creating，表示实例创建中。 - frozen，表示实例被冻结。 - data_disk_full，表示存储空间满。 - enlargefail，表示实例扩容节点个数失败。
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets instanceMode
    *  **参数解释：** 实例模式。 **取值范围：** - Sharding - ReplicaSet - Single
    *
    * @return string|null
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string|null $instanceMode **参数解释：** 实例模式。 **取值范围：** - Sharding - ReplicaSet - Single
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
        return $this;
    }

    /**
    * Gets isInstanceRestoring
    *  **参数解释：** 当前实例是否处于恢复中或者恢复检查中。 **取值范围：** - true，表示实例处于恢复中或者恢复检查中，不允许删除该实例备份。 - false，当前实例未处于恢复中或者恢复检查中，允许删除该实例备份。
    *
    * @return bool|null
    */
    public function getIsInstanceRestoring()
    {
        return $this->container['isInstanceRestoring'];
    }

    /**
    * Sets isInstanceRestoring
    *
    * @param bool|null $isInstanceRestoring **参数解释：** 当前实例是否处于恢复中或者恢复检查中。 **取值范围：** - true，表示实例处于恢复中或者恢复检查中，不允许删除该实例备份。 - false，当前实例未处于恢复中或者恢复检查中，允许删除该实例备份。
    *
    * @return $this
    */
    public function setIsInstanceRestoring($isInstanceRestoring)
    {
        $this->container['isInstanceRestoring'] = $isInstanceRestoring;
        return $this;
    }

    /**
    * Gets backupMethod
    *  **参数解释：** 备份方式。 **取值范围：** - Snapshot，快照备份。 - Physical，物理备份。 - Logical，逻辑备份。 - Incremental，增量备份。
    *
    * @return string|null
    */
    public function getBackupMethod()
    {
        return $this->container['backupMethod'];
    }

    /**
    * Sets backupMethod
    *
    * @param string|null $backupMethod **参数解释：** 备份方式。 **取值范围：** - Snapshot，快照备份。 - Physical，物理备份。 - Logical，逻辑备份。 - Incremental，增量备份。
    *
    * @return $this
    */
    public function setBackupMethod($backupMethod)
    {
        $this->container['backupMethod'] = $backupMethod;
        return $this;
    }

    /**
    * Gets kmsEnable
    *  **参数解释：** 是否开启kms加密。 **取值范围：** - true，已开启kms加密。 - false，未开启kms加密。
    *
    * @return bool|null
    */
    public function getKmsEnable()
    {
        return $this->container['kmsEnable'];
    }

    /**
    * Sets kmsEnable
    *
    * @param bool|null $kmsEnable **参数解释：** 是否开启kms加密。 **取值范围：** - true，已开启kms加密。 - false，未开启kms加密。
    *
    * @return $this
    */
    public function setKmsEnable($kmsEnable)
    {
        $this->container['kmsEnable'] = $kmsEnable;
        return $this;
    }

    /**
    * Gets deletable
    *  **参数解释：** 是否支持删除该备份。当全备策略存在时，不允许删除自动备份。手动备份允许删除。 **取值范围：** - true，允许删除该备份。 - false，不允许删除该备份。
    *
    * @return bool|null
    */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
    * Sets deletable
    *
    * @param bool|null $deletable **参数解释：** 是否支持删除该备份。当全备策略存在时，不允许删除自动备份。手动备份允许删除。 **取值范围：** - true，允许删除该备份。 - false，不允许删除该备份。
    *
    * @return $this
    */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;
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

