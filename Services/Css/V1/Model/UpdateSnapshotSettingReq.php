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
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'agency' => 'string',
            'basePath' => 'string',
            'maxSnapshotBytesPerSeconds' => 'string',
            'maxRestoreBytesPerSeconds' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    * maxSnapshotBytesPerSeconds  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    * maxRestoreBytesPerSeconds  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'agency' => null,
        'basePath' => null,
        'maxSnapshotBytesPerSeconds' => null,
        'maxRestoreBytesPerSeconds' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'agency' => 'agency',
            'basePath' => 'base_path',
            'maxSnapshotBytesPerSeconds' => 'maxSnapshotBytesPerSeconds',
            'maxRestoreBytesPerSeconds' => 'maxRestoreBytesPerSeconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    * maxSnapshotBytesPerSeconds  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    * maxRestoreBytesPerSeconds  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'agency' => 'setAgency',
            'basePath' => 'setBasePath',
            'maxSnapshotBytesPerSeconds' => 'setMaxSnapshotBytesPerSeconds',
            'maxRestoreBytesPerSeconds' => 'setMaxRestoreBytesPerSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    * maxSnapshotBytesPerSeconds  配置每个节点的最大备份速率（每秒），即当备份的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际备份速率不一定能达到该值，会受OBS、磁盘等影响。
    * maxRestoreBytesPerSeconds  配置每个节点的最大恢复速率（每秒），即当恢复的速率超过该值时会被限流，避免速率太大导致资源占用过高，影响系统稳定性。实际恢复速率不一定能达到该值，会受OBS、磁盘等影响。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'agency' => 'getAgency',
            'basePath' => 'getBasePath',
            'maxSnapshotBytesPerSeconds' => 'getMaxSnapshotBytesPerSeconds',
            'maxRestoreBytesPerSeconds' => 'getMaxRestoreBytesPerSeconds'
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
        if ($this->container['basePath'] === null) {
            $invalidProperties[] = "'basePath' can't be null";
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
    * @return string
    */
    public function getBasePath()
    {
        return $this->container['basePath'];
    }

    /**
    * Sets basePath
    *
    * @param string $basePath 快照在OBS桶中的存放路径。
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

