<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSnapshotSettingReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSnapshotSettingReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    * maxSnapshotBytesPerSeconds  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    * maxRestoreBytesPerSeconds  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    * enable  是否开启自动创建快照策略。
    * indices  需要备份的索引名。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。
    * period  每天创建快照的时刻。
    * keepday  自定义设置快照保留的个数。系统在半点时刻会自动删除超过保留个数的快照。过期删除策略只针对与当前自动创建快照策略相同执行频次的自动快照。
    * frequency  自动创建快照的执行频次。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'agency' => 'string',
            'basePath' => 'string',
            'maxSnapshotBytesPerSeconds' => 'string',
            'maxRestoreBytesPerSeconds' => 'string',
            'enable' => 'string',
            'indices' => 'string',
            'prefix' => 'string',
            'period' => 'string',
            'keepday' => 'int',
            'frequency' => 'string',
            'deleteAuto' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    * maxSnapshotBytesPerSeconds  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    * maxRestoreBytesPerSeconds  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    * enable  是否开启自动创建快照策略。
    * indices  需要备份的索引名。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。
    * period  每天创建快照的时刻。
    * keepday  自定义设置快照保留的个数。系统在半点时刻会自动删除超过保留个数的快照。过期删除策略只针对与当前自动创建快照策略相同执行频次的自动快照。
    * frequency  自动创建快照的执行频次。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'agency' => null,
        'basePath' => null,
        'maxSnapshotBytesPerSeconds' => null,
        'maxRestoreBytesPerSeconds' => null,
        'enable' => null,
        'indices' => null,
        'prefix' => null,
        'period' => null,
        'keepday' => 'int32',
        'frequency' => null,
        'deleteAuto' => null
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
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    * maxSnapshotBytesPerSeconds  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    * maxRestoreBytesPerSeconds  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    * enable  是否开启自动创建快照策略。
    * indices  需要备份的索引名。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。
    * period  每天创建快照的时刻。
    * keepday  自定义设置快照保留的个数。系统在半点时刻会自动删除超过保留个数的快照。过期删除策略只针对与当前自动创建快照策略相同执行频次的自动快照。
    * frequency  自动创建快照的执行频次。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'agency' => 'agency',
            'basePath' => 'base_path',
            'maxSnapshotBytesPerSeconds' => 'max_snapshot_bytes_per_seconds',
            'maxRestoreBytesPerSeconds' => 'max_restore_bytes_per_seconds',
            'enable' => 'enable',
            'indices' => 'indices',
            'prefix' => 'prefix',
            'period' => 'period',
            'keepday' => 'keepday',
            'frequency' => 'frequency',
            'deleteAuto' => 'delete_auto'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    * maxSnapshotBytesPerSeconds  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    * maxRestoreBytesPerSeconds  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    * enable  是否开启自动创建快照策略。
    * indices  需要备份的索引名。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。
    * period  每天创建快照的时刻。
    * keepday  自定义设置快照保留的个数。系统在半点时刻会自动删除超过保留个数的快照。过期删除策略只针对与当前自动创建快照策略相同执行频次的自动快照。
    * frequency  自动创建快照的执行频次。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'agency' => 'setAgency',
            'basePath' => 'setBasePath',
            'maxSnapshotBytesPerSeconds' => 'setMaxSnapshotBytesPerSeconds',
            'maxRestoreBytesPerSeconds' => 'setMaxRestoreBytesPerSeconds',
            'enable' => 'setEnable',
            'indices' => 'setIndices',
            'prefix' => 'setPrefix',
            'period' => 'setPeriod',
            'keepday' => 'setKeepday',
            'frequency' => 'setFrequency',
            'deleteAuto' => 'setDeleteAuto'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    * maxSnapshotBytesPerSeconds  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    * maxRestoreBytesPerSeconds  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    * enable  是否开启自动创建快照策略。
    * indices  需要备份的索引名。
    * prefix  自动创建快照的名称前缀，需要用户自己手动输入。
    * period  每天创建快照的时刻。
    * keepday  自定义设置快照保留的个数。系统在半点时刻会自动删除超过保留个数的快照。过期删除策略只针对与当前自动创建快照策略相同执行频次的自动快照。
    * frequency  自动创建快照的执行频次。
    * deleteAuto  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'agency' => 'getAgency',
            'basePath' => 'getBasePath',
            'maxSnapshotBytesPerSeconds' => 'getMaxSnapshotBytesPerSeconds',
            'maxRestoreBytesPerSeconds' => 'getMaxRestoreBytesPerSeconds',
            'enable' => 'getEnable',
            'indices' => 'getIndices',
            'prefix' => 'getPrefix',
            'period' => 'getPeriod',
            'keepday' => 'getKeepday',
            'frequency' => 'getFrequency',
            'deleteAuto' => 'getDeleteAuto'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
        $this->container['maxSnapshotBytesPerSeconds'] = isset($data['maxSnapshotBytesPerSeconds']) ? $data['maxSnapshotBytesPerSeconds'] : null;
        $this->container['maxRestoreBytesPerSeconds'] = isset($data['maxRestoreBytesPerSeconds']) ? $data['maxRestoreBytesPerSeconds'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['indices'] = isset($data['indices']) ? $data['indices'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['keepday'] = isset($data['keepday']) ? $data['keepday'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['deleteAuto'] = isset($data['deleteAuto']) ? $data['deleteAuto'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
        if ($this->container['agency'] === null) {
            $invalidProperties[] = "'agency' can't be null";
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
    * Gets bucket
    *  备份使用的OBS桶的桶名。
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket 备份使用的OBS桶的桶名。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets agency
    *  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return string
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string $agency 委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets basePath
    *  快照在OBS桶中的存放路径。
    *
    * @return string|null
    */
    public function getBasePath()
    {
        return $this->container['basePath'];
    }

    /**
    * Sets basePath
    *
    * @param string|null $basePath 快照在OBS桶中的存放路径。
    *
    * @return $this
    */
    public function setBasePath($basePath)
    {
        $this->container['basePath'] = $basePath;
        return $this;
    }

    /**
    * Gets maxSnapshotBytesPerSeconds
    *  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    *
    * @return string|null
    */
    public function getMaxSnapshotBytesPerSeconds()
    {
        return $this->container['maxSnapshotBytesPerSeconds'];
    }

    /**
    * Sets maxSnapshotBytesPerSeconds
    *
    * @param string|null $maxSnapshotBytesPerSeconds 配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    *
    * @return $this
    */
    public function setMaxSnapshotBytesPerSeconds($maxSnapshotBytesPerSeconds)
    {
        $this->container['maxSnapshotBytesPerSeconds'] = $maxSnapshotBytesPerSeconds;
        return $this;
    }

    /**
    * Gets maxRestoreBytesPerSeconds
    *  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    *
    * @return string|null
    */
    public function getMaxRestoreBytesPerSeconds()
    {
        return $this->container['maxRestoreBytesPerSeconds'];
    }

    /**
    * Sets maxRestoreBytesPerSeconds
    *
    * @param string|null $maxRestoreBytesPerSeconds 配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    *
    * @return $this
    */
    public function setMaxRestoreBytesPerSeconds($maxRestoreBytesPerSeconds)
    {
        $this->container['maxRestoreBytesPerSeconds'] = $maxRestoreBytesPerSeconds;
        return $this;
    }

    /**
    * Gets enable
    *  是否开启自动创建快照策略。
    *
    * @return string|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param string|null $enable 是否开启自动创建快照策略。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets indices
    *  需要备份的索引名。
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
    * @param string|null $indices 需要备份的索引名。
    *
    * @return $this
    */
    public function setIndices($indices)
    {
        $this->container['indices'] = $indices;
        return $this;
    }

    /**
    * Gets prefix
    *  自动创建快照的名称前缀，需要用户自己手动输入。
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 自动创建快照的名称前缀，需要用户自己手动输入。
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets period
    *  每天创建快照的时刻。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 每天创建快照的时刻。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets keepday
    *  自定义设置快照保留的个数。系统在半点时刻会自动删除超过保留个数的快照。过期删除策略只针对与当前自动创建快照策略相同执行频次的自动快照。
    *
    * @return int|null
    */
    public function getKeepday()
    {
        return $this->container['keepday'];
    }

    /**
    * Sets keepday
    *
    * @param int|null $keepday 自定义设置快照保留的个数。系统在半点时刻会自动删除超过保留个数的快照。过期删除策略只针对与当前自动创建快照策略相同执行频次的自动快照。
    *
    * @return $this
    */
    public function setKeepday($keepday)
    {
        $this->container['keepday'] = $keepday;
        return $this;
    }

    /**
    * Gets frequency
    *  自动创建快照的执行频次。
    *
    * @return string|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string|null $frequency 自动创建快照的执行频次。
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets deleteAuto
    *  表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。
    *
    * @return string|null
    */
    public function getDeleteAuto()
    {
        return $this->container['deleteAuto'];
    }

    /**
    * Sets deleteAuto
    *
    * @param string|null $deleteAuto 表示关闭自动创建快照策略时，是否需要清除所有自动创建的快照。
    *
    * @return $this
    */
    public function setDeleteAuto($deleteAuto)
    {
        $this->container['deleteAuto'] = $deleteAuto;
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

