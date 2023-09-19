<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSnapshotBackupsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSnapshotBackupsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * created  快照创建时间。
    * datastore  datastore
    * description  快照描述信息。
    * id  快照ID。
    * clusterId  集群ID。
    * clusterName  集群名字。
    * name  快照名称。
    * status  快照状态。
    * updated  快照更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * backupType  快照创建类型： - 0：表示自动创建。 - 1：表示手动创建。
    * backupMethod  创建快照方式。
    * backupExpectedStartTime  快照开始执行时间。
    * backupKeepDay  快照保留时间。
    * backupPeriod  快照每天执行的时间点。
    * indices  要备份的索引。
    * totalShards  要备份的索引的总shard数。
    * failedShards  备份失败的shard数。
    * version  快照的版本。
    * restoreStatus  快照恢复的状态。
    * startTime  快照开始执行的时间戳。
    * endTime  快照执行结束的时间戳。
    * bucketName  保存快照数据的桶名。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'created' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Css\V1\Model\ListSnapshotBackupsDatastoreResp',
            'description' => 'string',
            'id' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'name' => 'string',
            'status' => 'string',
            'updated' => 'string',
            'backupType' => 'string',
            'backupMethod' => 'string',
            'backupExpectedStartTime' => 'string',
            'backupKeepDay' => 'int',
            'backupPeriod' => 'string',
            'indices' => 'string',
            'totalShards' => 'int',
            'failedShards' => 'int',
            'version' => 'string',
            'restoreStatus' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'bucketName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * created  快照创建时间。
    * datastore  datastore
    * description  快照描述信息。
    * id  快照ID。
    * clusterId  集群ID。
    * clusterName  集群名字。
    * name  快照名称。
    * status  快照状态。
    * updated  快照更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * backupType  快照创建类型： - 0：表示自动创建。 - 1：表示手动创建。
    * backupMethod  创建快照方式。
    * backupExpectedStartTime  快照开始执行时间。
    * backupKeepDay  快照保留时间。
    * backupPeriod  快照每天执行的时间点。
    * indices  要备份的索引。
    * totalShards  要备份的索引的总shard数。
    * failedShards  备份失败的shard数。
    * version  快照的版本。
    * restoreStatus  快照恢复的状态。
    * startTime  快照开始执行的时间戳。
    * endTime  快照执行结束的时间戳。
    * bucketName  保存快照数据的桶名。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'created' => null,
        'datastore' => null,
        'description' => null,
        'id' => null,
        'clusterId' => null,
        'clusterName' => null,
        'name' => null,
        'status' => null,
        'updated' => null,
        'backupType' => null,
        'backupMethod' => null,
        'backupExpectedStartTime' => null,
        'backupKeepDay' => null,
        'backupPeriod' => null,
        'indices' => null,
        'totalShards' => null,
        'failedShards' => null,
        'version' => null,
        'restoreStatus' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'bucketName' => null
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
    * created  快照创建时间。
    * datastore  datastore
    * description  快照描述信息。
    * id  快照ID。
    * clusterId  集群ID。
    * clusterName  集群名字。
    * name  快照名称。
    * status  快照状态。
    * updated  快照更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * backupType  快照创建类型： - 0：表示自动创建。 - 1：表示手动创建。
    * backupMethod  创建快照方式。
    * backupExpectedStartTime  快照开始执行时间。
    * backupKeepDay  快照保留时间。
    * backupPeriod  快照每天执行的时间点。
    * indices  要备份的索引。
    * totalShards  要备份的索引的总shard数。
    * failedShards  备份失败的shard数。
    * version  快照的版本。
    * restoreStatus  快照恢复的状态。
    * startTime  快照开始执行的时间戳。
    * endTime  快照执行结束的时间戳。
    * bucketName  保存快照数据的桶名。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'created' => 'created',
            'datastore' => 'datastore',
            'description' => 'description',
            'id' => 'id',
            'clusterId' => 'clusterId',
            'clusterName' => 'clusterName',
            'name' => 'name',
            'status' => 'status',
            'updated' => 'updated',
            'backupType' => 'backupType',
            'backupMethod' => 'backupMethod',
            'backupExpectedStartTime' => 'backupExpectedStartTime',
            'backupKeepDay' => 'backupKeepDay',
            'backupPeriod' => 'backupPeriod',
            'indices' => 'indices',
            'totalShards' => 'totalShards',
            'failedShards' => 'failedShards',
            'version' => 'version',
            'restoreStatus' => 'restoreStatus',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'bucketName' => 'bucketName'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * created  快照创建时间。
    * datastore  datastore
    * description  快照描述信息。
    * id  快照ID。
    * clusterId  集群ID。
    * clusterName  集群名字。
    * name  快照名称。
    * status  快照状态。
    * updated  快照更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * backupType  快照创建类型： - 0：表示自动创建。 - 1：表示手动创建。
    * backupMethod  创建快照方式。
    * backupExpectedStartTime  快照开始执行时间。
    * backupKeepDay  快照保留时间。
    * backupPeriod  快照每天执行的时间点。
    * indices  要备份的索引。
    * totalShards  要备份的索引的总shard数。
    * failedShards  备份失败的shard数。
    * version  快照的版本。
    * restoreStatus  快照恢复的状态。
    * startTime  快照开始执行的时间戳。
    * endTime  快照执行结束的时间戳。
    * bucketName  保存快照数据的桶名。
    *
    * @var string[]
    */
    protected static $setters = [
            'created' => 'setCreated',
            'datastore' => 'setDatastore',
            'description' => 'setDescription',
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'name' => 'setName',
            'status' => 'setStatus',
            'updated' => 'setUpdated',
            'backupType' => 'setBackupType',
            'backupMethod' => 'setBackupMethod',
            'backupExpectedStartTime' => 'setBackupExpectedStartTime',
            'backupKeepDay' => 'setBackupKeepDay',
            'backupPeriod' => 'setBackupPeriod',
            'indices' => 'setIndices',
            'totalShards' => 'setTotalShards',
            'failedShards' => 'setFailedShards',
            'version' => 'setVersion',
            'restoreStatus' => 'setRestoreStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'bucketName' => 'setBucketName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * created  快照创建时间。
    * datastore  datastore
    * description  快照描述信息。
    * id  快照ID。
    * clusterId  集群ID。
    * clusterName  集群名字。
    * name  快照名称。
    * status  快照状态。
    * updated  快照更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    * backupType  快照创建类型： - 0：表示自动创建。 - 1：表示手动创建。
    * backupMethod  创建快照方式。
    * backupExpectedStartTime  快照开始执行时间。
    * backupKeepDay  快照保留时间。
    * backupPeriod  快照每天执行的时间点。
    * indices  要备份的索引。
    * totalShards  要备份的索引的总shard数。
    * failedShards  备份失败的shard数。
    * version  快照的版本。
    * restoreStatus  快照恢复的状态。
    * startTime  快照开始执行的时间戳。
    * endTime  快照执行结束的时间戳。
    * bucketName  保存快照数据的桶名。
    *
    * @var string[]
    */
    protected static $getters = [
            'created' => 'getCreated',
            'datastore' => 'getDatastore',
            'description' => 'getDescription',
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'name' => 'getName',
            'status' => 'getStatus',
            'updated' => 'getUpdated',
            'backupType' => 'getBackupType',
            'backupMethod' => 'getBackupMethod',
            'backupExpectedStartTime' => 'getBackupExpectedStartTime',
            'backupKeepDay' => 'getBackupKeepDay',
            'backupPeriod' => 'getBackupPeriod',
            'indices' => 'getIndices',
            'totalShards' => 'getTotalShards',
            'failedShards' => 'getFailedShards',
            'version' => 'getVersion',
            'restoreStatus' => 'getRestoreStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'bucketName' => 'getBucketName'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['backupType'] = isset($data['backupType']) ? $data['backupType'] : null;
        $this->container['backupMethod'] = isset($data['backupMethod']) ? $data['backupMethod'] : null;
        $this->container['backupExpectedStartTime'] = isset($data['backupExpectedStartTime']) ? $data['backupExpectedStartTime'] : null;
        $this->container['backupKeepDay'] = isset($data['backupKeepDay']) ? $data['backupKeepDay'] : null;
        $this->container['backupPeriod'] = isset($data['backupPeriod']) ? $data['backupPeriod'] : null;
        $this->container['indices'] = isset($data['indices']) ? $data['indices'] : null;
        $this->container['totalShards'] = isset($data['totalShards']) ? $data['totalShards'] : null;
        $this->container['failedShards'] = isset($data['failedShards']) ? $data['failedShards'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['restoreStatus'] = isset($data['restoreStatus']) ? $data['restoreStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
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
    * Gets created
    *  快照创建时间。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 快照创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ListSnapshotBackupsDatastoreResp|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ListSnapshotBackupsDatastoreResp|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets description
    *  快照描述信息。
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
    * @param string|null $description 快照描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
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
    * Gets clusterId
    *  集群ID。
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
    * @param string|null $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名字。
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
    * @param string|null $clusterName 集群名字。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
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
    * Gets status
    *  快照状态。
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
    * @param string|null $status 快照状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updated
    *  快照更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
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
    * @param string|null $updated 快照更新时间，格式为ISO8601：CCYY-MM-DDThh:mm:ss。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets backupType
    *  快照创建类型： - 0：表示自动创建。 - 1：表示手动创建。
    *
    * @return string|null
    */
    public function getBackupType()
    {
        return $this->container['backupType'];
    }

    /**
    * Sets backupType
    *
    * @param string|null $backupType 快照创建类型： - 0：表示自动创建。 - 1：表示手动创建。
    *
    * @return $this
    */
    public function setBackupType($backupType)
    {
        $this->container['backupType'] = $backupType;
        return $this;
    }

    /**
    * Gets backupMethod
    *  创建快照方式。
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
    * @param string|null $backupMethod 创建快照方式。
    *
    * @return $this
    */
    public function setBackupMethod($backupMethod)
    {
        $this->container['backupMethod'] = $backupMethod;
        return $this;
    }

    /**
    * Gets backupExpectedStartTime
    *  快照开始执行时间。
    *
    * @return string|null
    */
    public function getBackupExpectedStartTime()
    {
        return $this->container['backupExpectedStartTime'];
    }

    /**
    * Sets backupExpectedStartTime
    *
    * @param string|null $backupExpectedStartTime 快照开始执行时间。
    *
    * @return $this
    */
    public function setBackupExpectedStartTime($backupExpectedStartTime)
    {
        $this->container['backupExpectedStartTime'] = $backupExpectedStartTime;
        return $this;
    }

    /**
    * Gets backupKeepDay
    *  快照保留时间。
    *
    * @return int|null
    */
    public function getBackupKeepDay()
    {
        return $this->container['backupKeepDay'];
    }

    /**
    * Sets backupKeepDay
    *
    * @param int|null $backupKeepDay 快照保留时间。
    *
    * @return $this
    */
    public function setBackupKeepDay($backupKeepDay)
    {
        $this->container['backupKeepDay'] = $backupKeepDay;
        return $this;
    }

    /**
    * Gets backupPeriod
    *  快照每天执行的时间点。
    *
    * @return string|null
    */
    public function getBackupPeriod()
    {
        return $this->container['backupPeriod'];
    }

    /**
    * Sets backupPeriod
    *
    * @param string|null $backupPeriod 快照每天执行的时间点。
    *
    * @return $this
    */
    public function setBackupPeriod($backupPeriod)
    {
        $this->container['backupPeriod'] = $backupPeriod;
        return $this;
    }

    /**
    * Gets indices
    *  要备份的索引。
    *
    * @return string|null
    */
    public function getIndices()
    {
        return $this->container['indices'];
    }

    /**
    * Sets indices
    *
    * @param string|null $indices 要备份的索引。
    *
    * @return $this
    */
    public function setIndices($indices)
    {
        $this->container['indices'] = $indices;
        return $this;
    }

    /**
    * Gets totalShards
    *  要备份的索引的总shard数。
    *
    * @return int|null
    */
    public function getTotalShards()
    {
        return $this->container['totalShards'];
    }

    /**
    * Sets totalShards
    *
    * @param int|null $totalShards 要备份的索引的总shard数。
    *
    * @return $this
    */
    public function setTotalShards($totalShards)
    {
        $this->container['totalShards'] = $totalShards;
        return $this;
    }

    /**
    * Gets failedShards
    *  备份失败的shard数。
    *
    * @return int|null
    */
    public function getFailedShards()
    {
        return $this->container['failedShards'];
    }

    /**
    * Sets failedShards
    *
    * @param int|null $failedShards 备份失败的shard数。
    *
    * @return $this
    */
    public function setFailedShards($failedShards)
    {
        $this->container['failedShards'] = $failedShards;
        return $this;
    }

    /**
    * Gets version
    *  快照的版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 快照的版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets restoreStatus
    *  快照恢复的状态。
    *
    * @return string|null
    */
    public function getRestoreStatus()
    {
        return $this->container['restoreStatus'];
    }

    /**
    * Sets restoreStatus
    *
    * @param string|null $restoreStatus 快照恢复的状态。
    *
    * @return $this
    */
    public function setRestoreStatus($restoreStatus)
    {
        $this->container['restoreStatus'] = $restoreStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  快照开始执行的时间戳。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 快照开始执行的时间戳。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  快照执行结束的时间戳。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 快照执行结束的时间戳。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets bucketName
    *  保存快照数据的桶名。
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName 保存快照数据的桶名。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
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

