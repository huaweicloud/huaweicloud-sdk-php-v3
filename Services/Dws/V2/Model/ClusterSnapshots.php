<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSnapshots implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSnapshots';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - RESTORING：恢复中。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * clusterId  快照对应的集群ID
    * datastore  datastore
    * clusterName  快照对应的集群名称。
    * updated  快照更新时间。
    * type  快照类型： - MANUAL :手动快照， - AUTO :自动快照。
    * bakExpectedStartTime  快照预计开始时间。
    * bakKeepDay  快照保留天数。
    * bakPeriod  快照策略。
    * dbUser  数据库用户。
    * progress  快照进度。
    * backupKey  快照BakcupKey。
    * priorBackupKey  增量快照，使用的前一个快照BakcupKey。
    * baseBackupKey  对应全量快照BakcupKey。
    * backupDevice  备份介质。
    * totalBackupSize  累计快照大小。
    * baseBackupName  对应全量快照名称。
    * supportInplaceRestore  是否支持就地恢复。
    * fineGrainedBackup  是否是细粒度备份。
    * backupLevel  备份级别。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  guestAgent版本。
    * clusterStatus  集群状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'started' => 'string',
            'size' => 'double',
            'status' => 'string',
            'clusterId' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Dws\V2\Model\Datastore',
            'clusterName' => 'string',
            'updated' => 'string',
            'type' => 'string',
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
            'fineGrainedBackupDetail' => '\HuaweiCloud\SDK\Dws\V2\Model\FineGrainedSnapshotDetail',
            'guestAgentVersion' => 'string',
            'clusterStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - RESTORING：恢复中。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * clusterId  快照对应的集群ID
    * datastore  datastore
    * clusterName  快照对应的集群名称。
    * updated  快照更新时间。
    * type  快照类型： - MANUAL :手动快照， - AUTO :自动快照。
    * bakExpectedStartTime  快照预计开始时间。
    * bakKeepDay  快照保留天数。
    * bakPeriod  快照策略。
    * dbUser  数据库用户。
    * progress  快照进度。
    * backupKey  快照BakcupKey。
    * priorBackupKey  增量快照，使用的前一个快照BakcupKey。
    * baseBackupKey  对应全量快照BakcupKey。
    * backupDevice  备份介质。
    * totalBackupSize  累计快照大小。
    * baseBackupName  对应全量快照名称。
    * supportInplaceRestore  是否支持就地恢复。
    * fineGrainedBackup  是否是细粒度备份。
    * backupLevel  备份级别。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  guestAgent版本。
    * clusterStatus  集群状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'started' => null,
        'size' => 'double',
        'status' => null,
        'clusterId' => null,
        'datastore' => null,
        'clusterName' => null,
        'updated' => null,
        'type' => null,
        'bakExpectedStartTime' => null,
        'bakKeepDay' => null,
        'bakPeriod' => null,
        'dbUser' => null,
        'progress' => null,
        'backupKey' => null,
        'priorBackupKey' => null,
        'baseBackupKey' => null,
        'backupDevice' => null,
        'totalBackupSize' => null,
        'baseBackupName' => null,
        'supportInplaceRestore' => null,
        'fineGrainedBackup' => null,
        'backupLevel' => null,
        'fineGrainedBackupDetail' => null,
        'guestAgentVersion' => null,
        'clusterStatus' => null
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
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - RESTORING：恢复中。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * clusterId  快照对应的集群ID
    * datastore  datastore
    * clusterName  快照对应的集群名称。
    * updated  快照更新时间。
    * type  快照类型： - MANUAL :手动快照， - AUTO :自动快照。
    * bakExpectedStartTime  快照预计开始时间。
    * bakKeepDay  快照保留天数。
    * bakPeriod  快照策略。
    * dbUser  数据库用户。
    * progress  快照进度。
    * backupKey  快照BakcupKey。
    * priorBackupKey  增量快照，使用的前一个快照BakcupKey。
    * baseBackupKey  对应全量快照BakcupKey。
    * backupDevice  备份介质。
    * totalBackupSize  累计快照大小。
    * baseBackupName  对应全量快照名称。
    * supportInplaceRestore  是否支持就地恢复。
    * fineGrainedBackup  是否是细粒度备份。
    * backupLevel  备份级别。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  guestAgent版本。
    * clusterStatus  集群状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'started' => 'started',
            'size' => 'size',
            'status' => 'status',
            'clusterId' => 'cluster_id',
            'datastore' => 'datastore',
            'clusterName' => 'cluster_name',
            'updated' => 'updated',
            'type' => 'type',
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
            'clusterStatus' => 'cluster_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - RESTORING：恢复中。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * clusterId  快照对应的集群ID
    * datastore  datastore
    * clusterName  快照对应的集群名称。
    * updated  快照更新时间。
    * type  快照类型： - MANUAL :手动快照， - AUTO :自动快照。
    * bakExpectedStartTime  快照预计开始时间。
    * bakKeepDay  快照保留天数。
    * bakPeriod  快照策略。
    * dbUser  数据库用户。
    * progress  快照进度。
    * backupKey  快照BakcupKey。
    * priorBackupKey  增量快照，使用的前一个快照BakcupKey。
    * baseBackupKey  对应全量快照BakcupKey。
    * backupDevice  备份介质。
    * totalBackupSize  累计快照大小。
    * baseBackupName  对应全量快照名称。
    * supportInplaceRestore  是否支持就地恢复。
    * fineGrainedBackup  是否是细粒度备份。
    * backupLevel  备份级别。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  guestAgent版本。
    * clusterStatus  集群状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'started' => 'setStarted',
            'size' => 'setSize',
            'status' => 'setStatus',
            'clusterId' => 'setClusterId',
            'datastore' => 'setDatastore',
            'clusterName' => 'setClusterName',
            'updated' => 'setUpdated',
            'type' => 'setType',
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
            'clusterStatus' => 'setClusterStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  快照ID。
    * name  快照名称。
    * description  快照描述。
    * started  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    * size  快照大小，单位 GB。
    * status  快照状态： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - RESTORING：恢复中。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    * clusterId  快照对应的集群ID
    * datastore  datastore
    * clusterName  快照对应的集群名称。
    * updated  快照更新时间。
    * type  快照类型： - MANUAL :手动快照， - AUTO :自动快照。
    * bakExpectedStartTime  快照预计开始时间。
    * bakKeepDay  快照保留天数。
    * bakPeriod  快照策略。
    * dbUser  数据库用户。
    * progress  快照进度。
    * backupKey  快照BakcupKey。
    * priorBackupKey  增量快照，使用的前一个快照BakcupKey。
    * baseBackupKey  对应全量快照BakcupKey。
    * backupDevice  备份介质。
    * totalBackupSize  累计快照大小。
    * baseBackupName  对应全量快照名称。
    * supportInplaceRestore  是否支持就地恢复。
    * fineGrainedBackup  是否是细粒度备份。
    * backupLevel  备份级别。
    * fineGrainedBackupDetail  fineGrainedBackupDetail
    * guestAgentVersion  guestAgent版本。
    * clusterStatus  集群状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'started' => 'getStarted',
            'size' => 'getSize',
            'status' => 'getStatus',
            'clusterId' => 'getClusterId',
            'datastore' => 'getDatastore',
            'clusterName' => 'getClusterName',
            'updated' => 'getUpdated',
            'type' => 'getType',
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
            'clusterStatus' => 'getClusterStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['started'] = isset($data['started']) ? $data['started'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets id
    *  快照ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 快照ID。
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
    *  快照名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 快照名称。
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
    *  快照描述。
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
    * @param string|null $description 快照描述。
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
    *  快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    *
    * @return string|null
    */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
    * Sets started
    *
    * @param string|null $started 快照创建的日期时间，格式为 ISO8601: YYYY-MM-DDThh:mm:ssZ。
    *
    * @return $this
    */
    public function setStarted($started)
    {
        $this->container['started'] = $started;
        return $this;
    }

    /**
    * Gets size
    *  快照大小，单位 GB。
    *
    * @return double|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param double|null $size 快照大小，单位 GB。
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
    *  快照状态： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - RESTORING：恢复中。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
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
    * @param string|null $status 快照状态： - CREATING：创建中。 - AVAILABLE：可用。 - UNAVAILABLE：不可用。 - RESTORING：恢复中。 - FROZEN： 普通冻结。 - POLICE_FROZEN： 公安冻结。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets clusterId
    *  快照对应的集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 快照对应的集群ID
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
    *  快照对应的集群名称。
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
    * @param string|null $clusterName 快照对应的集群名称。
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
    *  快照更新时间。
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
    * @param string|null $updated 快照更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets type
    *  快照类型： - MANUAL :手动快照， - AUTO :自动快照。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 快照类型： - MANUAL :手动快照， - AUTO :自动快照。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets bakExpectedStartTime
    *  快照预计开始时间。
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
    * @param string|null $bakExpectedStartTime 快照预计开始时间。
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
    *  快照保留天数。
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
    * @param int|null $bakKeepDay 快照保留天数。
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
    *  快照策略。
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
    * @param string|null $bakPeriod 快照策略。
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
    *  数据库用户。
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
    * @param string|null $dbUser 数据库用户。
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
    *  快照进度。
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
    * @param string|null $progress 快照进度。
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
    *  快照BakcupKey。
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
    * @param string|null $backupKey 快照BakcupKey。
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
    *  增量快照，使用的前一个快照BakcupKey。
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
    * @param string|null $priorBackupKey 增量快照，使用的前一个快照BakcupKey。
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
    *  对应全量快照BakcupKey。
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
    * @param string|null $baseBackupKey 对应全量快照BakcupKey。
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
    *  备份介质。
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
    * @param string|null $backupDevice 备份介质。
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
    *  累计快照大小。
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
    * @param int|null $totalBackupSize 累计快照大小。
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
    *  对应全量快照名称。
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
    * @param string|null $baseBackupName 对应全量快照名称。
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
    *  是否支持就地恢复。
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
    * @param bool|null $supportInplaceRestore 是否支持就地恢复。
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
    *  是否是细粒度备份。
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
    * @param bool|null $fineGrainedBackup 是否是细粒度备份。
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
    *  备份级别。
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
    * @param string|null $backupLevel 备份级别。
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
    * @return \HuaweiCloud\SDK\Dws\V2\Model\FineGrainedSnapshotDetail|null
    */
    public function getFineGrainedBackupDetail()
    {
        return $this->container['fineGrainedBackupDetail'];
    }

    /**
    * Sets fineGrainedBackupDetail
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\FineGrainedSnapshotDetail|null $fineGrainedBackupDetail fineGrainedBackupDetail
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
    *  guestAgent版本。
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
    * @param string|null $guestAgentVersion guestAgent版本。
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
    *  集群状态。
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
    * @param string|null $clusterStatus 集群状态。
    *
    * @return $this
    */
    public function setClusterStatus($clusterStatus)
    {
        $this->container['clusterStatus'] = $clusterStatus;
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

