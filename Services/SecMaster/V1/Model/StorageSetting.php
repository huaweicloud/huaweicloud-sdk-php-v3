<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StorageSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StorageSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataTransformationCu  数据转换 CU
    * indexReplicas  索引副本数
    * indexShards  索引分片数
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * lakeStoragePeriod  湖存储周期
    * streamingBandwidth  流式带宽
    * streamingDataspaceId  流式数据空间ID
    * streamingPartition  流式分区数
    * streamingRetentionSize  流式保留大小
    * streamingRetentionTime  流式保留时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataTransformationCu' => 'float',
            'indexReplicas' => 'int',
            'indexShards' => 'int',
            'indexStoragePeriod' => 'int',
            'indexStorageSize' => 'int',
            'lakeStoragePeriod' => 'int',
            'streamingBandwidth' => 'float',
            'streamingDataspaceId' => 'string',
            'streamingPartition' => 'int',
            'streamingRetentionSize' => 'int',
            'streamingRetentionTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataTransformationCu  数据转换 CU
    * indexReplicas  索引副本数
    * indexShards  索引分片数
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * lakeStoragePeriod  湖存储周期
    * streamingBandwidth  流式带宽
    * streamingDataspaceId  流式数据空间ID
    * streamingPartition  流式分区数
    * streamingRetentionSize  流式保留大小
    * streamingRetentionTime  流式保留时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataTransformationCu' => null,
        'indexReplicas' => null,
        'indexShards' => null,
        'indexStoragePeriod' => null,
        'indexStorageSize' => null,
        'lakeStoragePeriod' => null,
        'streamingBandwidth' => null,
        'streamingDataspaceId' => null,
        'streamingPartition' => null,
        'streamingRetentionSize' => null,
        'streamingRetentionTime' => null
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
    * dataTransformationCu  数据转换 CU
    * indexReplicas  索引副本数
    * indexShards  索引分片数
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * lakeStoragePeriod  湖存储周期
    * streamingBandwidth  流式带宽
    * streamingDataspaceId  流式数据空间ID
    * streamingPartition  流式分区数
    * streamingRetentionSize  流式保留大小
    * streamingRetentionTime  流式保留时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataTransformationCu' => 'data_transformation_cu',
            'indexReplicas' => 'index_replicas',
            'indexShards' => 'index_shards',
            'indexStoragePeriod' => 'index_storage_period',
            'indexStorageSize' => 'index_storage_size',
            'lakeStoragePeriod' => 'lake_storage_period',
            'streamingBandwidth' => 'streaming_bandwidth',
            'streamingDataspaceId' => 'streaming_dataspace_id',
            'streamingPartition' => 'streaming_partition',
            'streamingRetentionSize' => 'streaming_retention_size',
            'streamingRetentionTime' => 'streaming_retention_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataTransformationCu  数据转换 CU
    * indexReplicas  索引副本数
    * indexShards  索引分片数
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * lakeStoragePeriod  湖存储周期
    * streamingBandwidth  流式带宽
    * streamingDataspaceId  流式数据空间ID
    * streamingPartition  流式分区数
    * streamingRetentionSize  流式保留大小
    * streamingRetentionTime  流式保留时间
    *
    * @var string[]
    */
    protected static $setters = [
            'dataTransformationCu' => 'setDataTransformationCu',
            'indexReplicas' => 'setIndexReplicas',
            'indexShards' => 'setIndexShards',
            'indexStoragePeriod' => 'setIndexStoragePeriod',
            'indexStorageSize' => 'setIndexStorageSize',
            'lakeStoragePeriod' => 'setLakeStoragePeriod',
            'streamingBandwidth' => 'setStreamingBandwidth',
            'streamingDataspaceId' => 'setStreamingDataspaceId',
            'streamingPartition' => 'setStreamingPartition',
            'streamingRetentionSize' => 'setStreamingRetentionSize',
            'streamingRetentionTime' => 'setStreamingRetentionTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataTransformationCu  数据转换 CU
    * indexReplicas  索引副本数
    * indexShards  索引分片数
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储大小
    * lakeStoragePeriod  湖存储周期
    * streamingBandwidth  流式带宽
    * streamingDataspaceId  流式数据空间ID
    * streamingPartition  流式分区数
    * streamingRetentionSize  流式保留大小
    * streamingRetentionTime  流式保留时间
    *
    * @var string[]
    */
    protected static $getters = [
            'dataTransformationCu' => 'getDataTransformationCu',
            'indexReplicas' => 'getIndexReplicas',
            'indexShards' => 'getIndexShards',
            'indexStoragePeriod' => 'getIndexStoragePeriod',
            'indexStorageSize' => 'getIndexStorageSize',
            'lakeStoragePeriod' => 'getLakeStoragePeriod',
            'streamingBandwidth' => 'getStreamingBandwidth',
            'streamingDataspaceId' => 'getStreamingDataspaceId',
            'streamingPartition' => 'getStreamingPartition',
            'streamingRetentionSize' => 'getStreamingRetentionSize',
            'streamingRetentionTime' => 'getStreamingRetentionTime'
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
        $this->container['dataTransformationCu'] = isset($data['dataTransformationCu']) ? $data['dataTransformationCu'] : null;
        $this->container['indexReplicas'] = isset($data['indexReplicas']) ? $data['indexReplicas'] : null;
        $this->container['indexShards'] = isset($data['indexShards']) ? $data['indexShards'] : null;
        $this->container['indexStoragePeriod'] = isset($data['indexStoragePeriod']) ? $data['indexStoragePeriod'] : null;
        $this->container['indexStorageSize'] = isset($data['indexStorageSize']) ? $data['indexStorageSize'] : null;
        $this->container['lakeStoragePeriod'] = isset($data['lakeStoragePeriod']) ? $data['lakeStoragePeriod'] : null;
        $this->container['streamingBandwidth'] = isset($data['streamingBandwidth']) ? $data['streamingBandwidth'] : null;
        $this->container['streamingDataspaceId'] = isset($data['streamingDataspaceId']) ? $data['streamingDataspaceId'] : null;
        $this->container['streamingPartition'] = isset($data['streamingPartition']) ? $data['streamingPartition'] : null;
        $this->container['streamingRetentionSize'] = isset($data['streamingRetentionSize']) ? $data['streamingRetentionSize'] : null;
        $this->container['streamingRetentionTime'] = isset($data['streamingRetentionTime']) ? $data['streamingRetentionTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['streamingDataspaceId']) && (mb_strlen($this->container['streamingDataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'streamingDataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['streamingDataspaceId']) && (mb_strlen($this->container['streamingDataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'streamingDataspaceId', the character length must be bigger than or equal to 36.";
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
    * Gets dataTransformationCu
    *  数据转换 CU
    *
    * @return float|null
    */
    public function getDataTransformationCu()
    {
        return $this->container['dataTransformationCu'];
    }

    /**
    * Sets dataTransformationCu
    *
    * @param float|null $dataTransformationCu 数据转换 CU
    *
    * @return $this
    */
    public function setDataTransformationCu($dataTransformationCu)
    {
        $this->container['dataTransformationCu'] = $dataTransformationCu;
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
    * Gets lakeStoragePeriod
    *  湖存储周期
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
    * @param int|null $lakeStoragePeriod 湖存储周期
    *
    * @return $this
    */
    public function setLakeStoragePeriod($lakeStoragePeriod)
    {
        $this->container['lakeStoragePeriod'] = $lakeStoragePeriod;
        return $this;
    }

    /**
    * Gets streamingBandwidth
    *  流式带宽
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
    * @param float|null $streamingBandwidth 流式带宽
    *
    * @return $this
    */
    public function setStreamingBandwidth($streamingBandwidth)
    {
        $this->container['streamingBandwidth'] = $streamingBandwidth;
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
    * Gets streamingPartition
    *  流式分区数
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
    * @param int|null $streamingPartition 流式分区数
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
    *  流式保留大小
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
    * @param int|null $streamingRetentionSize 流式保留大小
    *
    * @return $this
    */
    public function setStreamingRetentionSize($streamingRetentionSize)
    {
        $this->container['streamingRetentionSize'] = $streamingRetentionSize;
        return $this;
    }

    /**
    * Gets streamingRetentionTime
    *  流式保留时间
    *
    * @return int|null
    */
    public function getStreamingRetentionTime()
    {
        return $this->container['streamingRetentionTime'];
    }

    /**
    * Sets streamingRetentionTime
    *
    * @param int|null $streamingRetentionTime 流式保留时间
    *
    * @return $this
    */
    public function setStreamingRetentionTime($streamingRetentionTime)
    {
        $this->container['streamingRetentionTime'] = $streamingRetentionTime;
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

