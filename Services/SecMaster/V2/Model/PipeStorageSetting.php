<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipeStorageSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipeStorageSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * streamingBandwidth  Bandwidth in MB/s
    * streamingDataspaceId  UUID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储容量，单位：GB
    * indexShards  索引分区数
    * dataTransformationCu  数据转换CU
    * lakeStoragePeriod  Index shards
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'streamingBandwidth' => 'float',
            'streamingDataspaceId' => 'string',
            'indexStoragePeriod' => 'int',
            'indexStorageSize' => 'int',
            'indexShards' => 'int',
            'dataTransformationCu' => 'float',
            'lakeStoragePeriod' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * streamingBandwidth  Bandwidth in MB/s
    * streamingDataspaceId  UUID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储容量，单位：GB
    * indexShards  索引分区数
    * dataTransformationCu  数据转换CU
    * lakeStoragePeriod  Index shards
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'streamingBandwidth' => 'float',
        'streamingDataspaceId' => null,
        'indexStoragePeriod' => 'int64',
        'indexStorageSize' => 'int64',
        'indexShards' => 'int64',
        'dataTransformationCu' => 'float',
        'lakeStoragePeriod' => 'int64'
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
    * streamingBandwidth  Bandwidth in MB/s
    * streamingDataspaceId  UUID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储容量，单位：GB
    * indexShards  索引分区数
    * dataTransformationCu  数据转换CU
    * lakeStoragePeriod  Index shards
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'streamingBandwidth' => 'streaming_bandwidth',
            'streamingDataspaceId' => 'streaming_dataspace_id',
            'indexStoragePeriod' => 'index_storage_period',
            'indexStorageSize' => 'index_storage_size',
            'indexShards' => 'index_shards',
            'dataTransformationCu' => 'data_transformation_cu',
            'lakeStoragePeriod' => 'lake_storage_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * streamingBandwidth  Bandwidth in MB/s
    * streamingDataspaceId  UUID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储容量，单位：GB
    * indexShards  索引分区数
    * dataTransformationCu  数据转换CU
    * lakeStoragePeriod  Index shards
    *
    * @var string[]
    */
    protected static $setters = [
            'streamingBandwidth' => 'setStreamingBandwidth',
            'streamingDataspaceId' => 'setStreamingDataspaceId',
            'indexStoragePeriod' => 'setIndexStoragePeriod',
            'indexStorageSize' => 'setIndexStorageSize',
            'indexShards' => 'setIndexShards',
            'dataTransformationCu' => 'setDataTransformationCu',
            'lakeStoragePeriod' => 'setLakeStoragePeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * streamingBandwidth  Bandwidth in MB/s
    * streamingDataspaceId  UUID
    * indexStoragePeriod  索引存储周期
    * indexStorageSize  索引存储容量，单位：GB
    * indexShards  索引分区数
    * dataTransformationCu  数据转换CU
    * lakeStoragePeriod  Index shards
    *
    * @var string[]
    */
    protected static $getters = [
            'streamingBandwidth' => 'getStreamingBandwidth',
            'streamingDataspaceId' => 'getStreamingDataspaceId',
            'indexStoragePeriod' => 'getIndexStoragePeriod',
            'indexStorageSize' => 'getIndexStorageSize',
            'indexShards' => 'getIndexShards',
            'dataTransformationCu' => 'getDataTransformationCu',
            'lakeStoragePeriod' => 'getLakeStoragePeriod'
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
        $this->container['streamingBandwidth'] = isset($data['streamingBandwidth']) ? $data['streamingBandwidth'] : null;
        $this->container['streamingDataspaceId'] = isset($data['streamingDataspaceId']) ? $data['streamingDataspaceId'] : null;
        $this->container['indexStoragePeriod'] = isset($data['indexStoragePeriod']) ? $data['indexStoragePeriod'] : null;
        $this->container['indexStorageSize'] = isset($data['indexStorageSize']) ? $data['indexStorageSize'] : null;
        $this->container['indexShards'] = isset($data['indexShards']) ? $data['indexShards'] : null;
        $this->container['dataTransformationCu'] = isset($data['dataTransformationCu']) ? $data['dataTransformationCu'] : null;
        $this->container['lakeStoragePeriod'] = isset($data['lakeStoragePeriod']) ? $data['lakeStoragePeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['streamingBandwidth']) && ($this->container['streamingBandwidth'] > 5)) {
                $invalidProperties[] = "invalid value for 'streamingBandwidth', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['streamingBandwidth']) && ($this->container['streamingBandwidth'] < 0.1)) {
                $invalidProperties[] = "invalid value for 'streamingBandwidth', must be bigger than or equal to 0.1.";
            }
        if ($this->container['streamingDataspaceId'] === null) {
            $invalidProperties[] = "'streamingDataspaceId' can't be null";
        }
            if ((mb_strlen($this->container['streamingDataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'streamingDataspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['streamingDataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'streamingDataspaceId', the character length must be bigger than or equal to 36.";
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
            if (!is_null($this->container['dataTransformationCu']) && ($this->container['dataTransformationCu'] > 8)) {
                $invalidProperties[] = "invalid value for 'dataTransformationCu', must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['dataTransformationCu']) && ($this->container['dataTransformationCu'] < 0.25)) {
                $invalidProperties[] = "invalid value for 'dataTransformationCu', must be bigger than or equal to 0.25.";
            }
            if (!is_null($this->container['lakeStoragePeriod']) && ($this->container['lakeStoragePeriod'] > 3700)) {
                $invalidProperties[] = "invalid value for 'lakeStoragePeriod', must be smaller than or equal to 3700.";
            }
            if (!is_null($this->container['lakeStoragePeriod']) && ($this->container['lakeStoragePeriod'] < 15)) {
                $invalidProperties[] = "invalid value for 'lakeStoragePeriod', must be bigger than or equal to 15.";
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
    * Gets streamingBandwidth
    *  Bandwidth in MB/s
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
    * @param float|null $streamingBandwidth Bandwidth in MB/s
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
    *  UUID
    *
    * @return string
    */
    public function getStreamingDataspaceId()
    {
        return $this->container['streamingDataspaceId'];
    }

    /**
    * Sets streamingDataspaceId
    *
    * @param string $streamingDataspaceId UUID
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
    *  索引存储容量，单位：GB
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
    * @param int|null $indexStorageSize 索引存储容量，单位：GB
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
    *  索引分区数
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
    * @param int|null $indexShards 索引分区数
    *
    * @return $this
    */
    public function setIndexShards($indexShards)
    {
        $this->container['indexShards'] = $indexShards;
        return $this;
    }

    /**
    * Gets dataTransformationCu
    *  数据转换CU
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
    * @param float|null $dataTransformationCu 数据转换CU
    *
    * @return $this
    */
    public function setDataTransformationCu($dataTransformationCu)
    {
        $this->container['dataTransformationCu'] = $dataTransformationCu;
        return $this;
    }

    /**
    * Gets lakeStoragePeriod
    *  Index shards
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
    * @param int|null $lakeStoragePeriod Index shards
    *
    * @return $this
    */
    public function setLakeStoragePeriod($lakeStoragePeriod)
    {
        $this->container['lakeStoragePeriod'] = $lakeStoragePeriod;
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

