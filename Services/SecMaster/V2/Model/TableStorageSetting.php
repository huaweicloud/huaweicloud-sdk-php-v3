<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableStorageSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableStorageSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationIndex  应用索引
    * applicationTopic  应用主题
    * applicationDataClassId  应用数据类ID
    * streamingBandwidth  流式带宽 MB/s
    * streamingPartition  流式分区
    * streamingRetentionSize  流式容量大小
    * streamingDataspaceId  流式数据空间ID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * indexShards  索引分片数
    * indexReplicas  索引副本数
    * lakeStoragePeriod  数据湖存储周期
    * lakePartitionSetting  **参数解释**: 时间单位 - MINUTE10 10分钟 - HOUR 小时 - DAY 天  **约束限制** 不涉及 **取值范围**: - MINUTE - HOUR - DAY  **默认值** 不涉及
    * lakeExpirationStatus  **参数解释**: 数据湖过期状态 - NOT_EXPIRED 未过期 - EXPIRED_PROCESSING 过期处理中 - EXPIRED_SUCCESS 过期处理成功 - EXPIRED_FAILURE 过期处理失败  **约束限制** 不涉及 **取值范围**: - NOT_EXPIRED - EXPIRED_PROCESSING - EXPIRED_SUCCESS - EXPIRED_FAILURE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationIndex' => 'string',
            'applicationTopic' => 'string',
            'applicationDataClassId' => 'string',
            'streamingBandwidth' => 'float',
            'streamingPartition' => 'int',
            'streamingRetentionSize' => 'int',
            'streamingDataspaceId' => 'string',
            'indexStoragePeriod' => 'int',
            'indexStorageSize' => 'int',
            'indexShards' => 'int',
            'indexReplicas' => 'int',
            'lakeStoragePeriod' => 'int',
            'lakePartitionSetting' => 'string',
            'lakeExpirationStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationIndex  应用索引
    * applicationTopic  应用主题
    * applicationDataClassId  应用数据类ID
    * streamingBandwidth  流式带宽 MB/s
    * streamingPartition  流式分区
    * streamingRetentionSize  流式容量大小
    * streamingDataspaceId  流式数据空间ID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * indexShards  索引分片数
    * indexReplicas  索引副本数
    * lakeStoragePeriod  数据湖存储周期
    * lakePartitionSetting  **参数解释**: 时间单位 - MINUTE10 10分钟 - HOUR 小时 - DAY 天  **约束限制** 不涉及 **取值范围**: - MINUTE - HOUR - DAY  **默认值** 不涉及
    * lakeExpirationStatus  **参数解释**: 数据湖过期状态 - NOT_EXPIRED 未过期 - EXPIRED_PROCESSING 过期处理中 - EXPIRED_SUCCESS 过期处理成功 - EXPIRED_FAILURE 过期处理失败  **约束限制** 不涉及 **取值范围**: - NOT_EXPIRED - EXPIRED_PROCESSING - EXPIRED_SUCCESS - EXPIRED_FAILURE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationIndex' => null,
        'applicationTopic' => null,
        'applicationDataClassId' => null,
        'streamingBandwidth' => null,
        'streamingPartition' => 'int32',
        'streamingRetentionSize' => 'int32',
        'streamingDataspaceId' => null,
        'indexStoragePeriod' => 'int32',
        'indexStorageSize' => 'int32',
        'indexShards' => 'int32',
        'indexReplicas' => 'int32',
        'lakeStoragePeriod' => 'int64',
        'lakePartitionSetting' => null,
        'lakeExpirationStatus' => null
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
    * applicationIndex  应用索引
    * applicationTopic  应用主题
    * applicationDataClassId  应用数据类ID
    * streamingBandwidth  流式带宽 MB/s
    * streamingPartition  流式分区
    * streamingRetentionSize  流式容量大小
    * streamingDataspaceId  流式数据空间ID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * indexShards  索引分片数
    * indexReplicas  索引副本数
    * lakeStoragePeriod  数据湖存储周期
    * lakePartitionSetting  **参数解释**: 时间单位 - MINUTE10 10分钟 - HOUR 小时 - DAY 天  **约束限制** 不涉及 **取值范围**: - MINUTE - HOUR - DAY  **默认值** 不涉及
    * lakeExpirationStatus  **参数解释**: 数据湖过期状态 - NOT_EXPIRED 未过期 - EXPIRED_PROCESSING 过期处理中 - EXPIRED_SUCCESS 过期处理成功 - EXPIRED_FAILURE 过期处理失败  **约束限制** 不涉及 **取值范围**: - NOT_EXPIRED - EXPIRED_PROCESSING - EXPIRED_SUCCESS - EXPIRED_FAILURE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationIndex' => 'application_index',
            'applicationTopic' => 'application_topic',
            'applicationDataClassId' => 'application_data_class_id',
            'streamingBandwidth' => 'streaming_bandwidth',
            'streamingPartition' => 'streaming_partition',
            'streamingRetentionSize' => 'streaming_retention_size',
            'streamingDataspaceId' => 'streaming_dataspace_id',
            'indexStoragePeriod' => 'index_storage_period',
            'indexStorageSize' => 'index_storage_size',
            'indexShards' => 'index_shards',
            'indexReplicas' => 'index_replicas',
            'lakeStoragePeriod' => 'lake_storage_period',
            'lakePartitionSetting' => 'lake_partition_setting',
            'lakeExpirationStatus' => 'lake_expiration_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationIndex  应用索引
    * applicationTopic  应用主题
    * applicationDataClassId  应用数据类ID
    * streamingBandwidth  流式带宽 MB/s
    * streamingPartition  流式分区
    * streamingRetentionSize  流式容量大小
    * streamingDataspaceId  流式数据空间ID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * indexShards  索引分片数
    * indexReplicas  索引副本数
    * lakeStoragePeriod  数据湖存储周期
    * lakePartitionSetting  **参数解释**: 时间单位 - MINUTE10 10分钟 - HOUR 小时 - DAY 天  **约束限制** 不涉及 **取值范围**: - MINUTE - HOUR - DAY  **默认值** 不涉及
    * lakeExpirationStatus  **参数解释**: 数据湖过期状态 - NOT_EXPIRED 未过期 - EXPIRED_PROCESSING 过期处理中 - EXPIRED_SUCCESS 过期处理成功 - EXPIRED_FAILURE 过期处理失败  **约束限制** 不涉及 **取值范围**: - NOT_EXPIRED - EXPIRED_PROCESSING - EXPIRED_SUCCESS - EXPIRED_FAILURE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationIndex' => 'setApplicationIndex',
            'applicationTopic' => 'setApplicationTopic',
            'applicationDataClassId' => 'setApplicationDataClassId',
            'streamingBandwidth' => 'setStreamingBandwidth',
            'streamingPartition' => 'setStreamingPartition',
            'streamingRetentionSize' => 'setStreamingRetentionSize',
            'streamingDataspaceId' => 'setStreamingDataspaceId',
            'indexStoragePeriod' => 'setIndexStoragePeriod',
            'indexStorageSize' => 'setIndexStorageSize',
            'indexShards' => 'setIndexShards',
            'indexReplicas' => 'setIndexReplicas',
            'lakeStoragePeriod' => 'setLakeStoragePeriod',
            'lakePartitionSetting' => 'setLakePartitionSetting',
            'lakeExpirationStatus' => 'setLakeExpirationStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationIndex  应用索引
    * applicationTopic  应用主题
    * applicationDataClassId  应用数据类ID
    * streamingBandwidth  流式带宽 MB/s
    * streamingPartition  流式分区
    * streamingRetentionSize  流式容量大小
    * streamingDataspaceId  流式数据空间ID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * indexShards  索引分片数
    * indexReplicas  索引副本数
    * lakeStoragePeriod  数据湖存储周期
    * lakePartitionSetting  **参数解释**: 时间单位 - MINUTE10 10分钟 - HOUR 小时 - DAY 天  **约束限制** 不涉及 **取值范围**: - MINUTE - HOUR - DAY  **默认值** 不涉及
    * lakeExpirationStatus  **参数解释**: 数据湖过期状态 - NOT_EXPIRED 未过期 - EXPIRED_PROCESSING 过期处理中 - EXPIRED_SUCCESS 过期处理成功 - EXPIRED_FAILURE 过期处理失败  **约束限制** 不涉及 **取值范围**: - NOT_EXPIRED - EXPIRED_PROCESSING - EXPIRED_SUCCESS - EXPIRED_FAILURE  **默认值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationIndex' => 'getApplicationIndex',
            'applicationTopic' => 'getApplicationTopic',
            'applicationDataClassId' => 'getApplicationDataClassId',
            'streamingBandwidth' => 'getStreamingBandwidth',
            'streamingPartition' => 'getStreamingPartition',
            'streamingRetentionSize' => 'getStreamingRetentionSize',
            'streamingDataspaceId' => 'getStreamingDataspaceId',
            'indexStoragePeriod' => 'getIndexStoragePeriod',
            'indexStorageSize' => 'getIndexStorageSize',
            'indexShards' => 'getIndexShards',
            'indexReplicas' => 'getIndexReplicas',
            'lakeStoragePeriod' => 'getLakeStoragePeriod',
            'lakePartitionSetting' => 'getLakePartitionSetting',
            'lakeExpirationStatus' => 'getLakeExpirationStatus'
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
    const LAKE_PARTITION_SETTING_DAY = 'DAY';
    const LAKE_PARTITION_SETTING_HOUR = 'HOUR';
    const LAKE_PARTITION_SETTING_MINUTE10 = 'MINUTE10';
    const LAKE_EXPIRATION_STATUS_NOT_EXPIRED = 'NOT_EXPIRED';
    const LAKE_EXPIRATION_STATUS_EXPIRED_PROCESSING = 'EXPIRED_PROCESSING';
    const LAKE_EXPIRATION_STATUS_EXPIRED_SUCCESS = 'EXPIRED_SUCCESS';
    const LAKE_EXPIRATION_STATUS_EXPIRED_FAILURE = 'EXPIRED_FAILURE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLakePartitionSettingAllowableValues()
    {
        return [
            self::LAKE_PARTITION_SETTING_DAY,
            self::LAKE_PARTITION_SETTING_HOUR,
            self::LAKE_PARTITION_SETTING_MINUTE10,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLakeExpirationStatusAllowableValues()
    {
        return [
            self::LAKE_EXPIRATION_STATUS_NOT_EXPIRED,
            self::LAKE_EXPIRATION_STATUS_EXPIRED_PROCESSING,
            self::LAKE_EXPIRATION_STATUS_EXPIRED_SUCCESS,
            self::LAKE_EXPIRATION_STATUS_EXPIRED_FAILURE,
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
        $this->container['applicationIndex'] = isset($data['applicationIndex']) ? $data['applicationIndex'] : null;
        $this->container['applicationTopic'] = isset($data['applicationTopic']) ? $data['applicationTopic'] : null;
        $this->container['applicationDataClassId'] = isset($data['applicationDataClassId']) ? $data['applicationDataClassId'] : null;
        $this->container['streamingBandwidth'] = isset($data['streamingBandwidth']) ? $data['streamingBandwidth'] : null;
        $this->container['streamingPartition'] = isset($data['streamingPartition']) ? $data['streamingPartition'] : null;
        $this->container['streamingRetentionSize'] = isset($data['streamingRetentionSize']) ? $data['streamingRetentionSize'] : null;
        $this->container['streamingDataspaceId'] = isset($data['streamingDataspaceId']) ? $data['streamingDataspaceId'] : null;
        $this->container['indexStoragePeriod'] = isset($data['indexStoragePeriod']) ? $data['indexStoragePeriod'] : null;
        $this->container['indexStorageSize'] = isset($data['indexStorageSize']) ? $data['indexStorageSize'] : null;
        $this->container['indexShards'] = isset($data['indexShards']) ? $data['indexShards'] : null;
        $this->container['indexReplicas'] = isset($data['indexReplicas']) ? $data['indexReplicas'] : null;
        $this->container['lakeStoragePeriod'] = isset($data['lakeStoragePeriod']) ? $data['lakeStoragePeriod'] : null;
        $this->container['lakePartitionSetting'] = isset($data['lakePartitionSetting']) ? $data['lakePartitionSetting'] : null;
        $this->container['lakeExpirationStatus'] = isset($data['lakeExpirationStatus']) ? $data['lakeExpirationStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['applicationIndex']) && (mb_strlen($this->container['applicationIndex']) > 256)) {
                $invalidProperties[] = "invalid value for 'applicationIndex', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['applicationIndex']) && (mb_strlen($this->container['applicationIndex']) < 1)) {
                $invalidProperties[] = "invalid value for 'applicationIndex', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['applicationTopic']) && (mb_strlen($this->container['applicationTopic']) > 256)) {
                $invalidProperties[] = "invalid value for 'applicationTopic', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['applicationTopic']) && (mb_strlen($this->container['applicationTopic']) < 1)) {
                $invalidProperties[] = "invalid value for 'applicationTopic', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['applicationDataClassId']) && (mb_strlen($this->container['applicationDataClassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'applicationDataClassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['applicationDataClassId']) && (mb_strlen($this->container['applicationDataClassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'applicationDataClassId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['streamingBandwidth']) && ($this->container['streamingBandwidth'] > 5)) {
                $invalidProperties[] = "invalid value for 'streamingBandwidth', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['streamingBandwidth']) && ($this->container['streamingBandwidth'] < 0.1)) {
                $invalidProperties[] = "invalid value for 'streamingBandwidth', must be bigger than or equal to 0.1.";
            }
            if (!is_null($this->container['streamingPartition']) && ($this->container['streamingPartition'] > 64)) {
                $invalidProperties[] = "invalid value for 'streamingPartition', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['streamingPartition']) && ($this->container['streamingPartition'] < 1)) {
                $invalidProperties[] = "invalid value for 'streamingPartition', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['streamingRetentionSize']) && ($this->container['streamingRetentionSize'] > 64)) {
                $invalidProperties[] = "invalid value for 'streamingRetentionSize', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['streamingRetentionSize']) && ($this->container['streamingRetentionSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'streamingRetentionSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['streamingDataspaceId']) && (mb_strlen($this->container['streamingDataspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'streamingDataspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['streamingDataspaceId']) && (mb_strlen($this->container['streamingDataspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'streamingDataspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['indexStoragePeriod']) && ($this->container['indexStoragePeriod'] > 8)) {
                $invalidProperties[] = "invalid value for 'indexStoragePeriod', must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['indexStoragePeriod']) && ($this->container['indexStoragePeriod'] < 1)) {
                $invalidProperties[] = "invalid value for 'indexStoragePeriod', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['indexStorageSize']) && ($this->container['indexStorageSize'] > 1024)) {
                $invalidProperties[] = "invalid value for 'indexStorageSize', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['indexStorageSize']) && ($this->container['indexStorageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'indexStorageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['indexShards']) && ($this->container['indexShards'] > 64)) {
                $invalidProperties[] = "invalid value for 'indexShards', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indexShards']) && ($this->container['indexShards'] < 1)) {
                $invalidProperties[] = "invalid value for 'indexShards', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['indexReplicas']) && ($this->container['indexReplicas'] > 64)) {
                $invalidProperties[] = "invalid value for 'indexReplicas', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indexReplicas']) && ($this->container['indexReplicas'] < 1)) {
                $invalidProperties[] = "invalid value for 'indexReplicas', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lakeStoragePeriod']) && ($this->container['lakeStoragePeriod'] > 180)) {
                $invalidProperties[] = "invalid value for 'lakeStoragePeriod', must be smaller than or equal to 180.";
            }
            if (!is_null($this->container['lakeStoragePeriod']) && ($this->container['lakeStoragePeriod'] < 30)) {
                $invalidProperties[] = "invalid value for 'lakeStoragePeriod', must be bigger than or equal to 30.";
            }
            $allowedValues = $this->getLakePartitionSettingAllowableValues();
                if (!is_null($this->container['lakePartitionSetting']) && !in_array($this->container['lakePartitionSetting'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lakePartitionSetting', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLakeExpirationStatusAllowableValues();
                if (!is_null($this->container['lakeExpirationStatus']) && !in_array($this->container['lakeExpirationStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lakeExpirationStatus', must be one of '%s'",
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
    * Gets applicationIndex
    *  应用索引
    *
    * @return string|null
    */
    public function getApplicationIndex()
    {
        return $this->container['applicationIndex'];
    }

    /**
    * Sets applicationIndex
    *
    * @param string|null $applicationIndex 应用索引
    *
    * @return $this
    */
    public function setApplicationIndex($applicationIndex)
    {
        $this->container['applicationIndex'] = $applicationIndex;
        return $this;
    }

    /**
    * Gets applicationTopic
    *  应用主题
    *
    * @return string|null
    */
    public function getApplicationTopic()
    {
        return $this->container['applicationTopic'];
    }

    /**
    * Sets applicationTopic
    *
    * @param string|null $applicationTopic 应用主题
    *
    * @return $this
    */
    public function setApplicationTopic($applicationTopic)
    {
        $this->container['applicationTopic'] = $applicationTopic;
        return $this;
    }

    /**
    * Gets applicationDataClassId
    *  应用数据类ID
    *
    * @return string|null
    */
    public function getApplicationDataClassId()
    {
        return $this->container['applicationDataClassId'];
    }

    /**
    * Sets applicationDataClassId
    *
    * @param string|null $applicationDataClassId 应用数据类ID
    *
    * @return $this
    */
    public function setApplicationDataClassId($applicationDataClassId)
    {
        $this->container['applicationDataClassId'] = $applicationDataClassId;
        return $this;
    }

    /**
    * Gets streamingBandwidth
    *  流式带宽 MB/s
    *
    * @return float|null
    */
    public function getStreamingBandwidth()
    {
        return $this->container['streamingBandwidth'];
    }

    /**
    * Sets streamingBandwidth
    *
    * @param float|null $streamingBandwidth 流式带宽 MB/s
    *
    * @return $this
    */
    public function setStreamingBandwidth($streamingBandwidth)
    {
        $this->container['streamingBandwidth'] = $streamingBandwidth;
        return $this;
    }

    /**
    * Gets streamingPartition
    *  流式分区
    *
    * @return int|null
    */
    public function getStreamingPartition()
    {
        return $this->container['streamingPartition'];
    }

    /**
    * Sets streamingPartition
    *
    * @param int|null $streamingPartition 流式分区
    *
    * @return $this
    */
    public function setStreamingPartition($streamingPartition)
    {
        $this->container['streamingPartition'] = $streamingPartition;
        return $this;
    }

    /**
    * Gets streamingRetentionSize
    *  流式容量大小
    *
    * @return int|null
    */
    public function getStreamingRetentionSize()
    {
        return $this->container['streamingRetentionSize'];
    }

    /**
    * Sets streamingRetentionSize
    *
    * @param int|null $streamingRetentionSize 流式容量大小
    *
    * @return $this
    */
    public function setStreamingRetentionSize($streamingRetentionSize)
    {
        $this->container['streamingRetentionSize'] = $streamingRetentionSize;
        return $this;
    }

    /**
    * Gets streamingDataspaceId
    *  流式数据空间ID
    *
    * @return string|null
    */
    public function getStreamingDataspaceId()
    {
        return $this->container['streamingDataspaceId'];
    }

    /**
    * Sets streamingDataspaceId
    *
    * @param string|null $streamingDataspaceId 流式数据空间ID
    *
    * @return $this
    */
    public function setStreamingDataspaceId($streamingDataspaceId)
    {
        $this->container['streamingDataspaceId'] = $streamingDataspaceId;
        return $this;
    }

    /**
    * Gets indexStoragePeriod
    *  索引存储周期
    *
    * @return int|null
    */
    public function getIndexStoragePeriod()
    {
        return $this->container['indexStoragePeriod'];
    }

    /**
    * Sets indexStoragePeriod
    *
    * @param int|null $indexStoragePeriod 索引存储周期
    *
    * @return $this
    */
    public function setIndexStoragePeriod($indexStoragePeriod)
    {
        $this->container['indexStoragePeriod'] = $indexStoragePeriod;
        return $this;
    }

    /**
    * Gets indexStorageSize
    *  索引存储大小
    *
    * @return int|null
    */
    public function getIndexStorageSize()
    {
        return $this->container['indexStorageSize'];
    }

    /**
    * Sets indexStorageSize
    *
    * @param int|null $indexStorageSize 索引存储大小
    *
    * @return $this
    */
    public function setIndexStorageSize($indexStorageSize)
    {
        $this->container['indexStorageSize'] = $indexStorageSize;
        return $this;
    }

    /**
    * Gets indexShards
    *  索引分片数
    *
    * @return int|null
    */
    public function getIndexShards()
    {
        return $this->container['indexShards'];
    }

    /**
    * Sets indexShards
    *
    * @param int|null $indexShards 索引分片数
    *
    * @return $this
    */
    public function setIndexShards($indexShards)
    {
        $this->container['indexShards'] = $indexShards;
        return $this;
    }

    /**
    * Gets indexReplicas
    *  索引副本数
    *
    * @return int|null
    */
    public function getIndexReplicas()
    {
        return $this->container['indexReplicas'];
    }

    /**
    * Sets indexReplicas
    *
    * @param int|null $indexReplicas 索引副本数
    *
    * @return $this
    */
    public function setIndexReplicas($indexReplicas)
    {
        $this->container['indexReplicas'] = $indexReplicas;
        return $this;
    }

    /**
    * Gets lakeStoragePeriod
    *  数据湖存储周期
    *
    * @return int|null
    */
    public function getLakeStoragePeriod()
    {
        return $this->container['lakeStoragePeriod'];
    }

    /**
    * Sets lakeStoragePeriod
    *
    * @param int|null $lakeStoragePeriod 数据湖存储周期
    *
    * @return $this
    */
    public function setLakeStoragePeriod($lakeStoragePeriod)
    {
        $this->container['lakeStoragePeriod'] = $lakeStoragePeriod;
        return $this;
    }

    /**
    * Gets lakePartitionSetting
    *  **参数解释**: 时间单位 - MINUTE10 10分钟 - HOUR 小时 - DAY 天  **约束限制** 不涉及 **取值范围**: - MINUTE - HOUR - DAY  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getLakePartitionSetting()
    {
        return $this->container['lakePartitionSetting'];
    }

    /**
    * Sets lakePartitionSetting
    *
    * @param string|null $lakePartitionSetting **参数解释**: 时间单位 - MINUTE10 10分钟 - HOUR 小时 - DAY 天  **约束限制** 不涉及 **取值范围**: - MINUTE - HOUR - DAY  **默认值** 不涉及
    *
    * @return $this
    */
    public function setLakePartitionSetting($lakePartitionSetting)
    {
        $this->container['lakePartitionSetting'] = $lakePartitionSetting;
        return $this;
    }

    /**
    * Gets lakeExpirationStatus
    *  **参数解释**: 数据湖过期状态 - NOT_EXPIRED 未过期 - EXPIRED_PROCESSING 过期处理中 - EXPIRED_SUCCESS 过期处理成功 - EXPIRED_FAILURE 过期处理失败  **约束限制** 不涉及 **取值范围**: - NOT_EXPIRED - EXPIRED_PROCESSING - EXPIRED_SUCCESS - EXPIRED_FAILURE  **默认值** 不涉及
    *
    * @return string|null
    */
    public function getLakeExpirationStatus()
    {
        return $this->container['lakeExpirationStatus'];
    }

    /**
    * Sets lakeExpirationStatus
    *
    * @param string|null $lakeExpirationStatus **参数解释**: 数据湖过期状态 - NOT_EXPIRED 未过期 - EXPIRED_PROCESSING 过期处理中 - EXPIRED_SUCCESS 过期处理成功 - EXPIRED_FAILURE 过期处理失败  **约束限制** 不涉及 **取值范围**: - NOT_EXPIRED - EXPIRED_PROCESSING - EXPIRED_SUCCESS - EXPIRED_FAILURE  **默认值** 不涉及
    *
    * @return $this
    */
    public function setLakeExpirationStatus($lakeExpirationStatus)
    {
        $this->container['lakeExpirationStatus'] = $lakeExpirationStatus;
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

