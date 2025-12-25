<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Snapshots implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Snapshots';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 快照ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 快照名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 快照描述。 **取值范围**： 不涉及。
    * started  **参数解释**： 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * finished  **参数解释**： 快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * size  **参数解释**： 快照大小，单位 GB。 **取值范围**： 不涉及。
    * status  **参数解释**： 快照状态。 **取值范围**： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * type  **参数解释**： 快照创建类型。 **取值范围**： - AUTO: 自动。 - MANUAL: 手动。
    * clusterId  **参数解释**： 快照对应的集群ID。 **取值范围**： 不涉及。
    * datastore  datastore
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * bakExpectedStartTime  **参数解释**： 快照期待开始执行时间。 **取值范围**： 不涉及。
    * bakKeepDay  **参数解释**： 保存天数。 **取值范围**： 不涉及。
    * bakPeriod  **参数解释**： 备份周期。 **取值范围**： 不涉及。
    * dbUser  **参数解释**： 数据库用户名。 **取值范围**： 不涉及。
    * progress  **参数解释**： 进度。 **取值范围**： 不涉及。
    * backupKey  **参数解释**： 备份产生的Key。 **取值范围**： 不涉及。
    * priorBackupKey  **参数解释**： 增量快照使用前一个快照的BackupKey。当取值为FULL时表示这是一个全量快照。 **取值范围**： 不涉及。
    * baseBackupKey  **参数解释**： 对应全量快照的BackupKey。 **取值范围**： 不涉及。
    * backupDevice  **参数解释**： 备份介质。 **取值范围**： 不涉及。
    * totalBackupSize  **参数解释**： 总备份文件大小。 **取值范围**： 不涉及。
    * baseBackupName  **参数解释**： 对应全量快照名称。 **取值范围**： 不涉及。
    * supportInplaceRestore  **参数解释**： 是否支持备份到当前集群。 **取值范围**： 不涉及。
    * fineGrainedBackup  **参数解释**： 是否支持细粒度备份。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份等级。 **取值范围**： 不涉及。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  **参数解释**： agent版本。 **取值范围**： 不涉及。
    * clusterStatus  **参数解释**： 集群状态。 **取值范围**： 不涉及。
    * clusterTaskStatus  **参数解释**： 集群任务状态。 **取值范围**： 不涉及。
    * supportFineGrainedCrossVersionRestore  **参数解释**： 是否支持细粒度跨版本恢复。 **取值范围**： 不涉及。
    * supportFineGrainedAsymmetricRestore  **参数解释**： 是否支持细粒度异构恢复。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'started' => 'string',
            'finished' => 'string',
            'size' => 'double',
            'status' => 'string',
            'type' => 'string',
            'clusterId' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Dws\V2\Model\Datastore',
            'clusterName' => 'string',
            'updated' => 'string',
            'bakExpectedStartTime' => 'string',
            'bakKeepDay' => 'int',
            'bakPeriod' => 'string',
            'dbUser' => 'string',
            'progress' => 'string',
            'backupKey' => 'string',
            'priorBackupKey' => 'string',
            'baseBackupKey' => 'string',
            'backupDevice' => 'string',
            'totalBackupSize' => 'int',
            'baseBackupName' => 'string',
            'supportInplaceRestore' => 'bool',
            'fineGrainedBackup' => 'bool',
            'backupLevel' => 'string',
            'fineGrainedBackupDetail' => '\HuaweiCloud\SDK\Dws\V2\Model\ExtFineGrainedSnapshotDetail',
            'guestAgentVersion' => 'string',
            'clusterStatus' => 'string',
            'clusterTaskStatus' => 'string',
            'supportFineGrainedCrossVersionRestore' => 'bool',
            'supportFineGrainedAsymmetricRestore' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 快照ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 快照名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 快照描述。 **取值范围**： 不涉及。
    * started  **参数解释**： 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * finished  **参数解释**： 快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * size  **参数解释**： 快照大小，单位 GB。 **取值范围**： 不涉及。
    * status  **参数解释**： 快照状态。 **取值范围**： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * type  **参数解释**： 快照创建类型。 **取值范围**： - AUTO: 自动。 - MANUAL: 手动。
    * clusterId  **参数解释**： 快照对应的集群ID。 **取值范围**： 不涉及。
    * datastore  datastore
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * bakExpectedStartTime  **参数解释**： 快照期待开始执行时间。 **取值范围**： 不涉及。
    * bakKeepDay  **参数解释**： 保存天数。 **取值范围**： 不涉及。
    * bakPeriod  **参数解释**： 备份周期。 **取值范围**： 不涉及。
    * dbUser  **参数解释**： 数据库用户名。 **取值范围**： 不涉及。
    * progress  **参数解释**： 进度。 **取值范围**： 不涉及。
    * backupKey  **参数解释**： 备份产生的Key。 **取值范围**： 不涉及。
    * priorBackupKey  **参数解释**： 增量快照使用前一个快照的BackupKey。当取值为FULL时表示这是一个全量快照。 **取值范围**： 不涉及。
    * baseBackupKey  **参数解释**： 对应全量快照的BackupKey。 **取值范围**： 不涉及。
    * backupDevice  **参数解释**： 备份介质。 **取值范围**： 不涉及。
    * totalBackupSize  **参数解释**： 总备份文件大小。 **取值范围**： 不涉及。
    * baseBackupName  **参数解释**： 对应全量快照名称。 **取值范围**： 不涉及。
    * supportInplaceRestore  **参数解释**： 是否支持备份到当前集群。 **取值范围**： 不涉及。
    * fineGrainedBackup  **参数解释**： 是否支持细粒度备份。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份等级。 **取值范围**： 不涉及。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  **参数解释**： agent版本。 **取值范围**： 不涉及。
    * clusterStatus  **参数解释**： 集群状态。 **取值范围**： 不涉及。
    * clusterTaskStatus  **参数解释**： 集群任务状态。 **取值范围**： 不涉及。
    * supportFineGrainedCrossVersionRestore  **参数解释**： 是否支持细粒度跨版本恢复。 **取值范围**： 不涉及。
    * supportFineGrainedAsymmetricRestore  **参数解释**： 是否支持细粒度异构恢复。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'started' => null,
        'finished' => null,
        'size' => 'double',
        'status' => null,
        'type' => null,
        'clusterId' => null,
        'datastore' => null,
        'clusterName' => null,
        'updated' => null,
        'bakExpectedStartTime' => null,
        'bakKeepDay' => 'int32',
        'bakPeriod' => null,
        'dbUser' => null,
        'progress' => null,
        'backupKey' => null,
        'priorBackupKey' => null,
        'baseBackupKey' => null,
        'backupDevice' => null,
        'totalBackupSize' => 'int64',
        'baseBackupName' => null,
        'supportInplaceRestore' => null,
        'fineGrainedBackup' => null,
        'backupLevel' => null,
        'fineGrainedBackupDetail' => null,
        'guestAgentVersion' => null,
        'clusterStatus' => null,
        'clusterTaskStatus' => null,
        'supportFineGrainedCrossVersionRestore' => null,
        'supportFineGrainedAsymmetricRestore' => null
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
    * id  **参数解释**： 快照ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 快照名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 快照描述。 **取值范围**： 不涉及。
    * started  **参数解释**： 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * finished  **参数解释**： 快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * size  **参数解释**： 快照大小，单位 GB。 **取值范围**： 不涉及。
    * status  **参数解释**： 快照状态。 **取值范围**： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * type  **参数解释**： 快照创建类型。 **取值范围**： - AUTO: 自动。 - MANUAL: 手动。
    * clusterId  **参数解释**： 快照对应的集群ID。 **取值范围**： 不涉及。
    * datastore  datastore
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * bakExpectedStartTime  **参数解释**： 快照期待开始执行时间。 **取值范围**： 不涉及。
    * bakKeepDay  **参数解释**： 保存天数。 **取值范围**： 不涉及。
    * bakPeriod  **参数解释**： 备份周期。 **取值范围**： 不涉及。
    * dbUser  **参数解释**： 数据库用户名。 **取值范围**： 不涉及。
    * progress  **参数解释**： 进度。 **取值范围**： 不涉及。
    * backupKey  **参数解释**： 备份产生的Key。 **取值范围**： 不涉及。
    * priorBackupKey  **参数解释**： 增量快照使用前一个快照的BackupKey。当取值为FULL时表示这是一个全量快照。 **取值范围**： 不涉及。
    * baseBackupKey  **参数解释**： 对应全量快照的BackupKey。 **取值范围**： 不涉及。
    * backupDevice  **参数解释**： 备份介质。 **取值范围**： 不涉及。
    * totalBackupSize  **参数解释**： 总备份文件大小。 **取值范围**： 不涉及。
    * baseBackupName  **参数解释**： 对应全量快照名称。 **取值范围**： 不涉及。
    * supportInplaceRestore  **参数解释**： 是否支持备份到当前集群。 **取值范围**： 不涉及。
    * fineGrainedBackup  **参数解释**： 是否支持细粒度备份。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份等级。 **取值范围**： 不涉及。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  **参数解释**： agent版本。 **取值范围**： 不涉及。
    * clusterStatus  **参数解释**： 集群状态。 **取值范围**： 不涉及。
    * clusterTaskStatus  **参数解释**： 集群任务状态。 **取值范围**： 不涉及。
    * supportFineGrainedCrossVersionRestore  **参数解释**： 是否支持细粒度跨版本恢复。 **取值范围**： 不涉及。
    * supportFineGrainedAsymmetricRestore  **参数解释**： 是否支持细粒度异构恢复。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'started' => 'started',
            'finished' => 'finished',
            'size' => 'size',
            'status' => 'status',
            'type' => 'type',
            'clusterId' => 'cluster_id',
            'datastore' => 'datastore',
            'clusterName' => 'cluster_name',
            'updated' => 'updated',
            'bakExpectedStartTime' => 'bak_expected_start_time',
            'bakKeepDay' => 'bak_keep_day',
            'bakPeriod' => 'bak_period',
            'dbUser' => 'db_user',
            'progress' => 'progress',
            'backupKey' => 'backup_key',
            'priorBackupKey' => 'prior_backup_key',
            'baseBackupKey' => 'base_backup_key',
            'backupDevice' => 'backup_device',
            'totalBackupSize' => 'total_backup_size',
            'baseBackupName' => 'base_backup_name',
            'supportInplaceRestore' => 'support_inplace_restore',
            'fineGrainedBackup' => 'fine_grained_backup',
            'backupLevel' => 'backup_level',
            'fineGrainedBackupDetail' => 'fine_grained_backup_detail',
            'guestAgentVersion' => 'guest_agent_version',
            'clusterStatus' => 'cluster_status',
            'clusterTaskStatus' => 'cluster_task_status',
            'supportFineGrainedCrossVersionRestore' => 'support_fine_grained_cross_version_restore',
            'supportFineGrainedAsymmetricRestore' => 'support_fine_grained_asymmetric_restore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 快照ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 快照名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 快照描述。 **取值范围**： 不涉及。
    * started  **参数解释**： 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * finished  **参数解释**： 快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * size  **参数解释**： 快照大小，单位 GB。 **取值范围**： 不涉及。
    * status  **参数解释**： 快照状态。 **取值范围**： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * type  **参数解释**： 快照创建类型。 **取值范围**： - AUTO: 自动。 - MANUAL: 手动。
    * clusterId  **参数解释**： 快照对应的集群ID。 **取值范围**： 不涉及。
    * datastore  datastore
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * bakExpectedStartTime  **参数解释**： 快照期待开始执行时间。 **取值范围**： 不涉及。
    * bakKeepDay  **参数解释**： 保存天数。 **取值范围**： 不涉及。
    * bakPeriod  **参数解释**： 备份周期。 **取值范围**： 不涉及。
    * dbUser  **参数解释**： 数据库用户名。 **取值范围**： 不涉及。
    * progress  **参数解释**： 进度。 **取值范围**： 不涉及。
    * backupKey  **参数解释**： 备份产生的Key。 **取值范围**： 不涉及。
    * priorBackupKey  **参数解释**： 增量快照使用前一个快照的BackupKey。当取值为FULL时表示这是一个全量快照。 **取值范围**： 不涉及。
    * baseBackupKey  **参数解释**： 对应全量快照的BackupKey。 **取值范围**： 不涉及。
    * backupDevice  **参数解释**： 备份介质。 **取值范围**： 不涉及。
    * totalBackupSize  **参数解释**： 总备份文件大小。 **取值范围**： 不涉及。
    * baseBackupName  **参数解释**： 对应全量快照名称。 **取值范围**： 不涉及。
    * supportInplaceRestore  **参数解释**： 是否支持备份到当前集群。 **取值范围**： 不涉及。
    * fineGrainedBackup  **参数解释**： 是否支持细粒度备份。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份等级。 **取值范围**： 不涉及。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  **参数解释**： agent版本。 **取值范围**： 不涉及。
    * clusterStatus  **参数解释**： 集群状态。 **取值范围**： 不涉及。
    * clusterTaskStatus  **参数解释**： 集群任务状态。 **取值范围**： 不涉及。
    * supportFineGrainedCrossVersionRestore  **参数解释**： 是否支持细粒度跨版本恢复。 **取值范围**： 不涉及。
    * supportFineGrainedAsymmetricRestore  **参数解释**： 是否支持细粒度异构恢复。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'started' => 'setStarted',
            'finished' => 'setFinished',
            'size' => 'setSize',
            'status' => 'setStatus',
            'type' => 'setType',
            'clusterId' => 'setClusterId',
            'datastore' => 'setDatastore',
            'clusterName' => 'setClusterName',
            'updated' => 'setUpdated',
            'bakExpectedStartTime' => 'setBakExpectedStartTime',
            'bakKeepDay' => 'setBakKeepDay',
            'bakPeriod' => 'setBakPeriod',
            'dbUser' => 'setDbUser',
            'progress' => 'setProgress',
            'backupKey' => 'setBackupKey',
            'priorBackupKey' => 'setPriorBackupKey',
            'baseBackupKey' => 'setBaseBackupKey',
            'backupDevice' => 'setBackupDevice',
            'totalBackupSize' => 'setTotalBackupSize',
            'baseBackupName' => 'setBaseBackupName',
            'supportInplaceRestore' => 'setSupportInplaceRestore',
            'fineGrainedBackup' => 'setFineGrainedBackup',
            'backupLevel' => 'setBackupLevel',
            'fineGrainedBackupDetail' => 'setFineGrainedBackupDetail',
            'guestAgentVersion' => 'setGuestAgentVersion',
            'clusterStatus' => 'setClusterStatus',
            'clusterTaskStatus' => 'setClusterTaskStatus',
            'supportFineGrainedCrossVersionRestore' => 'setSupportFineGrainedCrossVersionRestore',
            'supportFineGrainedAsymmetricRestore' => 'setSupportFineGrainedAsymmetricRestore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 快照ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 快照名称。 **取值范围**： 不涉及。
    * description  **参数解释**： 快照描述。 **取值范围**： 不涉及。
    * started  **参数解释**： 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * finished  **参数解释**： 快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    * size  **参数解释**： 快照大小，单位 GB。 **取值范围**： 不涉及。
    * status  **参数解释**： 快照状态。 **取值范围**： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * type  **参数解释**： 快照创建类型。 **取值范围**： - AUTO: 自动。 - MANUAL: 手动。
    * clusterId  **参数解释**： 快照对应的集群ID。 **取值范围**： 不涉及。
    * datastore  datastore
    * clusterName  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    * updated  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    * bakExpectedStartTime  **参数解释**： 快照期待开始执行时间。 **取值范围**： 不涉及。
    * bakKeepDay  **参数解释**： 保存天数。 **取值范围**： 不涉及。
    * bakPeriod  **参数解释**： 备份周期。 **取值范围**： 不涉及。
    * dbUser  **参数解释**： 数据库用户名。 **取值范围**： 不涉及。
    * progress  **参数解释**： 进度。 **取值范围**： 不涉及。
    * backupKey  **参数解释**： 备份产生的Key。 **取值范围**： 不涉及。
    * priorBackupKey  **参数解释**： 增量快照使用前一个快照的BackupKey。当取值为FULL时表示这是一个全量快照。 **取值范围**： 不涉及。
    * baseBackupKey  **参数解释**： 对应全量快照的BackupKey。 **取值范围**： 不涉及。
    * backupDevice  **参数解释**： 备份介质。 **取值范围**： 不涉及。
    * totalBackupSize  **参数解释**： 总备份文件大小。 **取值范围**： 不涉及。
    * baseBackupName  **参数解释**： 对应全量快照名称。 **取值范围**： 不涉及。
    * supportInplaceRestore  **参数解释**： 是否支持备份到当前集群。 **取值范围**： 不涉及。
    * fineGrainedBackup  **参数解释**： 是否支持细粒度备份。 **取值范围**： 不涉及。
    * backupLevel  **参数解释**： 备份等级。 **取值范围**： 不涉及。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  **参数解释**： agent版本。 **取值范围**： 不涉及。
    * clusterStatus  **参数解释**： 集群状态。 **取值范围**： 不涉及。
    * clusterTaskStatus  **参数解释**： 集群任务状态。 **取值范围**： 不涉及。
    * supportFineGrainedCrossVersionRestore  **参数解释**： 是否支持细粒度跨版本恢复。 **取值范围**： 不涉及。
    * supportFineGrainedAsymmetricRestore  **参数解释**： 是否支持细粒度异构恢复。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'started' => 'getStarted',
            'finished' => 'getFinished',
            'size' => 'getSize',
            'status' => 'getStatus',
            'type' => 'getType',
            'clusterId' => 'getClusterId',
            'datastore' => 'getDatastore',
            'clusterName' => 'getClusterName',
            'updated' => 'getUpdated',
            'bakExpectedStartTime' => 'getBakExpectedStartTime',
            'bakKeepDay' => 'getBakKeepDay',
            'bakPeriod' => 'getBakPeriod',
            'dbUser' => 'getDbUser',
            'progress' => 'getProgress',
            'backupKey' => 'getBackupKey',
            'priorBackupKey' => 'getPriorBackupKey',
            'baseBackupKey' => 'getBaseBackupKey',
            'backupDevice' => 'getBackupDevice',
            'totalBackupSize' => 'getTotalBackupSize',
            'baseBackupName' => 'getBaseBackupName',
            'supportInplaceRestore' => 'getSupportInplaceRestore',
            'fineGrainedBackup' => 'getFineGrainedBackup',
            'backupLevel' => 'getBackupLevel',
            'fineGrainedBackupDetail' => 'getFineGrainedBackupDetail',
            'guestAgentVersion' => 'getGuestAgentVersion',
            'clusterStatus' => 'getClusterStatus',
            'clusterTaskStatus' => 'getClusterTaskStatus',
            'supportFineGrainedCrossVersionRestore' => 'getSupportFineGrainedCrossVersionRestore',
            'supportFineGrainedAsymmetricRestore' => 'getSupportFineGrainedAsymmetricRestore'
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
    const BACKUP_KEY__20160823_035923 = '20160823_035923';
    const BACKUP_LEVEL_CLUSTER = 'cluster';
    const BACKUP_LEVEL_SCHEMA = 'schema';
    const BACKUP_LEVEL_TABLE = 'table';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackupKeyAllowableValues()
    {
        return [
            self::BACKUP_KEY__20160823_035923,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackupLevelAllowableValues()
    {
        return [
            self::BACKUP_LEVEL_CLUSTER,
            self::BACKUP_LEVEL_SCHEMA,
            self::BACKUP_LEVEL_TABLE,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['bakExpectedStartTime'] = isset($data['bakExpectedStartTime']) ? $data['bakExpectedStartTime'] : null;
        $this->container['bakKeepDay'] = isset($data['bakKeepDay']) ? $data['bakKeepDay'] : null;
        $this->container['bakPeriod'] = isset($data['bakPeriod']) ? $data['bakPeriod'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['backupKey'] = isset($data['backupKey']) ? $data['backupKey'] : null;
        $this->container['priorBackupKey'] = isset($data['priorBackupKey']) ? $data['priorBackupKey'] : null;
        $this->container['baseBackupKey'] = isset($data['baseBackupKey']) ? $data['baseBackupKey'] : null;
        $this->container['backupDevice'] = isset($data['backupDevice']) ? $data['backupDevice'] : null;
        $this->container['totalBackupSize'] = isset($data['totalBackupSize']) ? $data['totalBackupSize'] : null;
        $this->container['baseBackupName'] = isset($data['baseBackupName']) ? $data['baseBackupName'] : null;
        $this->container['supportInplaceRestore'] = isset($data['supportInplaceRestore']) ? $data['supportInplaceRestore'] : null;
        $this->container['fineGrainedBackup'] = isset($data['fineGrainedBackup']) ? $data['fineGrainedBackup'] : null;
        $this->container['backupLevel'] = isset($data['backupLevel']) ? $data['backupLevel'] : null;
        $this->container['fineGrainedBackupDetail'] = isset($data['fineGrainedBackupDetail']) ? $data['fineGrainedBackupDetail'] : null;
        $this->container['guestAgentVersion'] = isset($data['guestAgentVersion']) ? $data['guestAgentVersion'] : null;
        $this->container['clusterStatus'] = isset($data['clusterStatus']) ? $data['clusterStatus'] : null;
        $this->container['clusterTaskStatus'] = isset($data['clusterTaskStatus']) ? $data['clusterTaskStatus'] : null;
        $this->container['supportFineGrainedCrossVersionRestore'] = isset($data['supportFineGrainedCrossVersionRestore']) ? $data['supportFineGrainedCrossVersionRestore'] : null;
        $this->container['supportFineGrainedAsymmetricRestore'] = isset($data['supportFineGrainedAsymmetricRestore']) ? $data['supportFineGrainedAsymmetricRestore'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['started'] === null) {
            $invalidProperties[] = "'started' can't be null";
        }
        if ($this->container['finished'] === null) {
            $invalidProperties[] = "'finished' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            $allowedValues = $this->getBackupKeyAllowableValues();
                if (!is_null($this->container['backupKey']) && !in_array($this->container['backupKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backupKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getBackupLevelAllowableValues();
                if (!is_null($this->container['backupLevel']) && !in_array($this->container['backupLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backupLevel', must be one of '%s'",
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
    *  **参数解释**： 快照ID。 **取值范围**： 不涉及。
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
    * @param string $id **参数解释**： 快照ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 快照名称。 **取值范围**： 不涉及。
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
    * @param string $name **参数解释**： 快照名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 快照描述。 **取值范围**： 不涉及。
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
    * @param string $description **参数解释**： 快照描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets started
    *  **参数解释**： 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
    * Sets started
    *
    * @param string $started **参数解释**： 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStarted($started)
    {
        $this->container['started'] = $started;
        return $this;
    }

    /**
    * Gets finished
    *  **参数解释**： 快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
    * Sets finished
    *
    * @param string $finished **参数解释**： 快照完成的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**： 快照大小，单位 GB。 **取值范围**： 不涉及。
    *
    * @return double
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param double $size **参数解释**： 快照大小，单位 GB。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 快照状态。 **取值范围**： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
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
    * @param string $status **参数解释**： 快照状态。 **取值范围**： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 快照创建类型。 **取值范围**： - AUTO: 自动。 - MANUAL: 手动。
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
    * @param string $type **参数解释**： 快照创建类型。 **取值范围**： - AUTO: 自动。 - MANUAL: 手动。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 快照对应的集群ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId **参数解释**： 快照对应的集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\Datastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\Datastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**： 集群名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName **参数解释**： 集群名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets updated
    *  **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated **参数解释**： 更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets bakExpectedStartTime
    *  **参数解释**： 快照期待开始执行时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBakExpectedStartTime()
    {
        return $this->container['bakExpectedStartTime'];
    }

    /**
    * Sets bakExpectedStartTime
    *
    * @param string|null $bakExpectedStartTime **参数解释**： 快照期待开始执行时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBakExpectedStartTime($bakExpectedStartTime)
    {
        $this->container['bakExpectedStartTime'] = $bakExpectedStartTime;
        return $this;
    }

    /**
    * Gets bakKeepDay
    *  **参数解释**： 保存天数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getBakKeepDay()
    {
        return $this->container['bakKeepDay'];
    }

    /**
    * Sets bakKeepDay
    *
    * @param int|null $bakKeepDay **参数解释**： 保存天数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBakKeepDay($bakKeepDay)
    {
        $this->container['bakKeepDay'] = $bakKeepDay;
        return $this;
    }

    /**
    * Gets bakPeriod
    *  **参数解释**： 备份周期。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBakPeriod()
    {
        return $this->container['bakPeriod'];
    }

    /**
    * Sets bakPeriod
    *
    * @param string|null $bakPeriod **参数解释**： 备份周期。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBakPeriod($bakPeriod)
    {
        $this->container['bakPeriod'] = $bakPeriod;
        return $this;
    }

    /**
    * Gets dbUser
    *  **参数解释**： 数据库用户名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string|null $dbUser **参数解释**： 数据库用户名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets progress
    *  **参数解释**： 进度。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress **参数解释**： 进度。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets backupKey
    *  **参数解释**： 备份产生的Key。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBackupKey()
    {
        return $this->container['backupKey'];
    }

    /**
    * Sets backupKey
    *
    * @param string|null $backupKey **参数解释**： 备份产生的Key。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupKey($backupKey)
    {
        $this->container['backupKey'] = $backupKey;
        return $this;
    }

    /**
    * Gets priorBackupKey
    *  **参数解释**： 增量快照使用前一个快照的BackupKey。当取值为FULL时表示这是一个全量快照。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPriorBackupKey()
    {
        return $this->container['priorBackupKey'];
    }

    /**
    * Sets priorBackupKey
    *
    * @param string|null $priorBackupKey **参数解释**： 增量快照使用前一个快照的BackupKey。当取值为FULL时表示这是一个全量快照。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPriorBackupKey($priorBackupKey)
    {
        $this->container['priorBackupKey'] = $priorBackupKey;
        return $this;
    }

    /**
    * Gets baseBackupKey
    *  **参数解释**： 对应全量快照的BackupKey。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBaseBackupKey()
    {
        return $this->container['baseBackupKey'];
    }

    /**
    * Sets baseBackupKey
    *
    * @param string|null $baseBackupKey **参数解释**： 对应全量快照的BackupKey。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBaseBackupKey($baseBackupKey)
    {
        $this->container['baseBackupKey'] = $baseBackupKey;
        return $this;
    }

    /**
    * Gets backupDevice
    *  **参数解释**： 备份介质。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBackupDevice()
    {
        return $this->container['backupDevice'];
    }

    /**
    * Sets backupDevice
    *
    * @param string|null $backupDevice **参数解释**： 备份介质。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupDevice($backupDevice)
    {
        $this->container['backupDevice'] = $backupDevice;
        return $this;
    }

    /**
    * Gets totalBackupSize
    *  **参数解释**： 总备份文件大小。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTotalBackupSize()
    {
        return $this->container['totalBackupSize'];
    }

    /**
    * Sets totalBackupSize
    *
    * @param int|null $totalBackupSize **参数解释**： 总备份文件大小。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotalBackupSize($totalBackupSize)
    {
        $this->container['totalBackupSize'] = $totalBackupSize;
        return $this;
    }

    /**
    * Gets baseBackupName
    *  **参数解释**： 对应全量快照名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBaseBackupName()
    {
        return $this->container['baseBackupName'];
    }

    /**
    * Sets baseBackupName
    *
    * @param string|null $baseBackupName **参数解释**： 对应全量快照名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBaseBackupName($baseBackupName)
    {
        $this->container['baseBackupName'] = $baseBackupName;
        return $this;
    }

    /**
    * Gets supportInplaceRestore
    *  **参数解释**： 是否支持备份到当前集群。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getSupportInplaceRestore()
    {
        return $this->container['supportInplaceRestore'];
    }

    /**
    * Sets supportInplaceRestore
    *
    * @param bool|null $supportInplaceRestore **参数解释**： 是否支持备份到当前集群。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSupportInplaceRestore($supportInplaceRestore)
    {
        $this->container['supportInplaceRestore'] = $supportInplaceRestore;
        return $this;
    }

    /**
    * Gets fineGrainedBackup
    *  **参数解释**： 是否支持细粒度备份。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getFineGrainedBackup()
    {
        return $this->container['fineGrainedBackup'];
    }

    /**
    * Sets fineGrainedBackup
    *
    * @param bool|null $fineGrainedBackup **参数解释**： 是否支持细粒度备份。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFineGrainedBackup($fineGrainedBackup)
    {
        $this->container['fineGrainedBackup'] = $fineGrainedBackup;
        return $this;
    }

    /**
    * Gets backupLevel
    *  **参数解释**： 备份等级。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getBackupLevel()
    {
        return $this->container['backupLevel'];
    }

    /**
    * Sets backupLevel
    *
    * @param string|null $backupLevel **参数解释**： 备份等级。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBackupLevel($backupLevel)
    {
        $this->container['backupLevel'] = $backupLevel;
        return $this;
    }

    /**
    * Gets fineGrainedBackupDetail
    *  fineGrainedBackupDetail
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ExtFineGrainedSnapshotDetail|null
    */
    public function getFineGrainedBackupDetail()
    {
        return $this->container['fineGrainedBackupDetail'];
    }

    /**
    * Sets fineGrainedBackupDetail
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ExtFineGrainedSnapshotDetail|null $fineGrainedBackupDetail fineGrainedBackupDetail
    *
    * @return $this
    */
    public function setFineGrainedBackupDetail($fineGrainedBackupDetail)
    {
        $this->container['fineGrainedBackupDetail'] = $fineGrainedBackupDetail;
        return $this;
    }

    /**
    * Gets guestAgentVersion
    *  **参数解释**： agent版本。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getGuestAgentVersion()
    {
        return $this->container['guestAgentVersion'];
    }

    /**
    * Sets guestAgentVersion
    *
    * @param string|null $guestAgentVersion **参数解释**： agent版本。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGuestAgentVersion($guestAgentVersion)
    {
        $this->container['guestAgentVersion'] = $guestAgentVersion;
        return $this;
    }

    /**
    * Gets clusterStatus
    *  **参数解释**： 集群状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClusterStatus()
    {
        return $this->container['clusterStatus'];
    }

    /**
    * Sets clusterStatus
    *
    * @param string|null $clusterStatus **参数解释**： 集群状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterStatus($clusterStatus)
    {
        $this->container['clusterStatus'] = $clusterStatus;
        return $this;
    }

    /**
    * Gets clusterTaskStatus
    *  **参数解释**： 集群任务状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClusterTaskStatus()
    {
        return $this->container['clusterTaskStatus'];
    }

    /**
    * Sets clusterTaskStatus
    *
    * @param string|null $clusterTaskStatus **参数解释**： 集群任务状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterTaskStatus($clusterTaskStatus)
    {
        $this->container['clusterTaskStatus'] = $clusterTaskStatus;
        return $this;
    }

    /**
    * Gets supportFineGrainedCrossVersionRestore
    *  **参数解释**： 是否支持细粒度跨版本恢复。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getSupportFineGrainedCrossVersionRestore()
    {
        return $this->container['supportFineGrainedCrossVersionRestore'];
    }

    /**
    * Sets supportFineGrainedCrossVersionRestore
    *
    * @param bool|null $supportFineGrainedCrossVersionRestore **参数解释**： 是否支持细粒度跨版本恢复。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSupportFineGrainedCrossVersionRestore($supportFineGrainedCrossVersionRestore)
    {
        $this->container['supportFineGrainedCrossVersionRestore'] = $supportFineGrainedCrossVersionRestore;
        return $this;
    }

    /**
    * Gets supportFineGrainedAsymmetricRestore
    *  **参数解释**： 是否支持细粒度异构恢复。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getSupportFineGrainedAsymmetricRestore()
    {
        return $this->container['supportFineGrainedAsymmetricRestore'];
    }

    /**
    * Sets supportFineGrainedAsymmetricRestore
    *
    * @param bool|null $supportFineGrainedAsymmetricRestore **参数解释**： 是否支持细粒度异构恢复。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSupportFineGrainedAsymmetricRestore($supportFineGrainedAsymmetricRestore)
    {
        $this->container['supportFineGrainedAsymmetricRestore'] = $supportFineGrainedAsymmetricRestore;
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

