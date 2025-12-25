<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubscriptionResourcesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubscriptionResourcesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * sku  sku
    * upperLimit  资源上限值
    * unit  配额单位（如 GB、条、分片等）
    * step  配额步长
    * usedAmount  已使用的资源数量
    * unusedAmount  剩余可用的资源数量
    * version  版本号
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * indexStorageUpperLimit  索引存储上限
    * indexShardsUpperLimit  索引分片上限
    * indexShardsUnused  剩余可用索引分片数量
    * partitionsUnused  剩余可用分区数量
    * partitionUpperLimit  分区上限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'sku' => '\HuaweiCloud\SDK\SecMaster\V2\Model\SkuEnum',
            'upperLimit' => 'double',
            'unit' => 'string',
            'step' => 'double',
            'usedAmount' => 'double',
            'unusedAmount' => 'double',
            'version' => 'int',
            'createTime' => 'int',
            'updateTime' => 'int',
            'indexStorageUpperLimit' => 'int',
            'indexShardsUpperLimit' => 'int',
            'indexShardsUnused' => 'int',
            'partitionsUnused' => 'int',
            'partitionUpperLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * sku  sku
    * upperLimit  资源上限值
    * unit  配额单位（如 GB、条、分片等）
    * step  配额步长
    * usedAmount  已使用的资源数量
    * unusedAmount  剩余可用的资源数量
    * version  版本号
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * indexStorageUpperLimit  索引存储上限
    * indexShardsUpperLimit  索引分片上限
    * indexShardsUnused  剩余可用索引分片数量
    * partitionsUnused  剩余可用分区数量
    * partitionUpperLimit  分区上限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'sku' => null,
        'upperLimit' => 'double',
        'unit' => null,
        'step' => 'double',
        'usedAmount' => 'double',
        'unusedAmount' => 'double',
        'version' => 'int64',
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'indexStorageUpperLimit' => 'int64',
        'indexShardsUpperLimit' => 'int64',
        'indexShardsUnused' => 'int64',
        'partitionsUnused' => 'int64',
        'partitionUpperLimit' => 'int64'
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
    * projectId  项目ID
    * sku  sku
    * upperLimit  资源上限值
    * unit  配额单位（如 GB、条、分片等）
    * step  配额步长
    * usedAmount  已使用的资源数量
    * unusedAmount  剩余可用的资源数量
    * version  版本号
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * indexStorageUpperLimit  索引存储上限
    * indexShardsUpperLimit  索引分片上限
    * indexShardsUnused  剩余可用索引分片数量
    * partitionsUnused  剩余可用分区数量
    * partitionUpperLimit  分区上限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'sku' => 'sku',
            'upperLimit' => 'upper_limit',
            'unit' => 'unit',
            'step' => 'step',
            'usedAmount' => 'used_amount',
            'unusedAmount' => 'unused_amount',
            'version' => 'version',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'indexStorageUpperLimit' => 'index_storage_upper_limit',
            'indexShardsUpperLimit' => 'index_shards_upper_limit',
            'indexShardsUnused' => 'index_shards_unused',
            'partitionsUnused' => 'partitions_unused',
            'partitionUpperLimit' => 'partition_upper_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * sku  sku
    * upperLimit  资源上限值
    * unit  配额单位（如 GB、条、分片等）
    * step  配额步长
    * usedAmount  已使用的资源数量
    * unusedAmount  剩余可用的资源数量
    * version  版本号
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * indexStorageUpperLimit  索引存储上限
    * indexShardsUpperLimit  索引分片上限
    * indexShardsUnused  剩余可用索引分片数量
    * partitionsUnused  剩余可用分区数量
    * partitionUpperLimit  分区上限
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'sku' => 'setSku',
            'upperLimit' => 'setUpperLimit',
            'unit' => 'setUnit',
            'step' => 'setStep',
            'usedAmount' => 'setUsedAmount',
            'unusedAmount' => 'setUnusedAmount',
            'version' => 'setVersion',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'indexStorageUpperLimit' => 'setIndexStorageUpperLimit',
            'indexShardsUpperLimit' => 'setIndexShardsUpperLimit',
            'indexShardsUnused' => 'setIndexShardsUnused',
            'partitionsUnused' => 'setPartitionsUnused',
            'partitionUpperLimit' => 'setPartitionUpperLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * sku  sku
    * upperLimit  资源上限值
    * unit  配额单位（如 GB、条、分片等）
    * step  配额步长
    * usedAmount  已使用的资源数量
    * unusedAmount  剩余可用的资源数量
    * version  版本号
    * createTime  毫秒时间戳
    * updateTime  毫秒时间戳
    * indexStorageUpperLimit  索引存储上限
    * indexShardsUpperLimit  索引分片上限
    * indexShardsUnused  剩余可用索引分片数量
    * partitionsUnused  剩余可用分区数量
    * partitionUpperLimit  分区上限
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'sku' => 'getSku',
            'upperLimit' => 'getUpperLimit',
            'unit' => 'getUnit',
            'step' => 'getStep',
            'usedAmount' => 'getUsedAmount',
            'unusedAmount' => 'getUnusedAmount',
            'version' => 'getVersion',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'indexStorageUpperLimit' => 'getIndexStorageUpperLimit',
            'indexShardsUpperLimit' => 'getIndexShardsUpperLimit',
            'indexShardsUnused' => 'getIndexShardsUnused',
            'partitionsUnused' => 'getPartitionsUnused',
            'partitionUpperLimit' => 'getPartitionUpperLimit'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['upperLimit'] = isset($data['upperLimit']) ? $data['upperLimit'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['usedAmount'] = isset($data['usedAmount']) ? $data['usedAmount'] : null;
        $this->container['unusedAmount'] = isset($data['unusedAmount']) ? $data['unusedAmount'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['indexStorageUpperLimit'] = isset($data['indexStorageUpperLimit']) ? $data['indexStorageUpperLimit'] : null;
        $this->container['indexShardsUpperLimit'] = isset($data['indexShardsUpperLimit']) ? $data['indexShardsUpperLimit'] : null;
        $this->container['indexShardsUnused'] = isset($data['indexShardsUnused']) ? $data['indexShardsUnused'] : null;
        $this->container['partitionsUnused'] = isset($data['partitionsUnused']) ? $data['partitionsUnused'] : null;
        $this->container['partitionUpperLimit'] = isset($data['partitionUpperLimit']) ? $data['partitionUpperLimit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['upperLimit']) && ($this->container['upperLimit'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'upperLimit', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['upperLimit']) && ($this->container['upperLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'upperLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 64)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 1)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['unit']) && !preg_match("/^[A-Za-z_]+$/", $this->container['unit'])) {
                $invalidProperties[] = "invalid value for 'unit', must be conform to the pattern /^[A-Za-z_]+$/.";
            }
            if (!is_null($this->container['step']) && ($this->container['step'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'step', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['step']) && ($this->container['step'] < 0)) {
                $invalidProperties[] = "invalid value for 'step', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['usedAmount']) && ($this->container['usedAmount'] > 65535)) {
                $invalidProperties[] = "invalid value for 'usedAmount', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['usedAmount']) && ($this->container['usedAmount'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedAmount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['unusedAmount']) && ($this->container['unusedAmount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'unusedAmount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['unusedAmount']) && ($this->container['unusedAmount'] < 0)) {
                $invalidProperties[] = "invalid value for 'unusedAmount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] > 2)) {
                $invalidProperties[] = "invalid value for 'version', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['version']) && ($this->container['version'] < 0)) {
                $invalidProperties[] = "invalid value for 'version', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 2366841600000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 2366841600000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indexStorageUpperLimit']) && ($this->container['indexStorageUpperLimit'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'indexStorageUpperLimit', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['indexStorageUpperLimit']) && ($this->container['indexStorageUpperLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'indexStorageUpperLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indexShardsUpperLimit']) && ($this->container['indexShardsUpperLimit'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'indexShardsUpperLimit', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['indexShardsUpperLimit']) && ($this->container['indexShardsUpperLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'indexShardsUpperLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indexShardsUnused']) && ($this->container['indexShardsUnused'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'indexShardsUnused', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['indexShardsUnused']) && ($this->container['indexShardsUnused'] < 0)) {
                $invalidProperties[] = "invalid value for 'indexShardsUnused', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['partitionsUnused']) && ($this->container['partitionsUnused'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'partitionsUnused', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['partitionsUnused']) && ($this->container['partitionsUnused'] < 0)) {
                $invalidProperties[] = "invalid value for 'partitionsUnused', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['partitionUpperLimit']) && ($this->container['partitionUpperLimit'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'partitionUpperLimit', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['partitionUpperLimit']) && ($this->container['partitionUpperLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'partitionUpperLimit', must be bigger than or equal to 0.";
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
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets sku
    *  sku
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\SkuEnum|null
    */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
    * Sets sku
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\SkuEnum|null $sku sku
    *
    * @return $this
    */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;
        return $this;
    }

    /**
    * Gets upperLimit
    *  资源上限值
    *
    * @return double|null
    */
    public function getUpperLimit()
    {
        return $this->container['upperLimit'];
    }

    /**
    * Sets upperLimit
    *
    * @param double|null $upperLimit 资源上限值
    *
    * @return $this
    */
    public function setUpperLimit($upperLimit)
    {
        $this->container['upperLimit'] = $upperLimit;
        return $this;
    }

    /**
    * Gets unit
    *  配额单位（如 GB、条、分片等）
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 配额单位（如 GB、条、分片等）
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets step
    *  配额步长
    *
    * @return double|null
    */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
    * Sets step
    *
    * @param double|null $step 配额步长
    *
    * @return $this
    */
    public function setStep($step)
    {
        $this->container['step'] = $step;
        return $this;
    }

    /**
    * Gets usedAmount
    *  已使用的资源数量
    *
    * @return double|null
    */
    public function getUsedAmount()
    {
        return $this->container['usedAmount'];
    }

    /**
    * Sets usedAmount
    *
    * @param double|null $usedAmount 已使用的资源数量
    *
    * @return $this
    */
    public function setUsedAmount($usedAmount)
    {
        $this->container['usedAmount'] = $usedAmount;
        return $this;
    }

    /**
    * Gets unusedAmount
    *  剩余可用的资源数量
    *
    * @return double|null
    */
    public function getUnusedAmount()
    {
        return $this->container['unusedAmount'];
    }

    /**
    * Sets unusedAmount
    *
    * @param double|null $unusedAmount 剩余可用的资源数量
    *
    * @return $this
    */
    public function setUnusedAmount($unusedAmount)
    {
        $this->container['unusedAmount'] = $unusedAmount;
        return $this;
    }

    /**
    * Gets version
    *  版本号
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets createTime
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 毫秒时间戳
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  毫秒时间戳
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 毫秒时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets indexStorageUpperLimit
    *  索引存储上限
    *
    * @return int|null
    */
    public function getIndexStorageUpperLimit()
    {
        return $this->container['indexStorageUpperLimit'];
    }

    /**
    * Sets indexStorageUpperLimit
    *
    * @param int|null $indexStorageUpperLimit 索引存储上限
    *
    * @return $this
    */
    public function setIndexStorageUpperLimit($indexStorageUpperLimit)
    {
        $this->container['indexStorageUpperLimit'] = $indexStorageUpperLimit;
        return $this;
    }

    /**
    * Gets indexShardsUpperLimit
    *  索引分片上限
    *
    * @return int|null
    */
    public function getIndexShardsUpperLimit()
    {
        return $this->container['indexShardsUpperLimit'];
    }

    /**
    * Sets indexShardsUpperLimit
    *
    * @param int|null $indexShardsUpperLimit 索引分片上限
    *
    * @return $this
    */
    public function setIndexShardsUpperLimit($indexShardsUpperLimit)
    {
        $this->container['indexShardsUpperLimit'] = $indexShardsUpperLimit;
        return $this;
    }

    /**
    * Gets indexShardsUnused
    *  剩余可用索引分片数量
    *
    * @return int|null
    */
    public function getIndexShardsUnused()
    {
        return $this->container['indexShardsUnused'];
    }

    /**
    * Sets indexShardsUnused
    *
    * @param int|null $indexShardsUnused 剩余可用索引分片数量
    *
    * @return $this
    */
    public function setIndexShardsUnused($indexShardsUnused)
    {
        $this->container['indexShardsUnused'] = $indexShardsUnused;
        return $this;
    }

    /**
    * Gets partitionsUnused
    *  剩余可用分区数量
    *
    * @return int|null
    */
    public function getPartitionsUnused()
    {
        return $this->container['partitionsUnused'];
    }

    /**
    * Sets partitionsUnused
    *
    * @param int|null $partitionsUnused 剩余可用分区数量
    *
    * @return $this
    */
    public function setPartitionsUnused($partitionsUnused)
    {
        $this->container['partitionsUnused'] = $partitionsUnused;
        return $this;
    }

    /**
    * Gets partitionUpperLimit
    *  分区上限
    *
    * @return int|null
    */
    public function getPartitionUpperLimit()
    {
        return $this->container['partitionUpperLimit'];
    }

    /**
    * Sets partitionUpperLimit
    *
    * @param int|null $partitionUpperLimit 分区上限
    *
    * @return $this
    */
    public function setPartitionUpperLimit($partitionUpperLimit)
    {
        $this->container['partitionUpperLimit'] = $partitionUpperLimit;
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

