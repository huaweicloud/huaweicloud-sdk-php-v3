<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatisticSecretKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatisticSecretKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  总数量
    * invalidCount  无效数量
    * validCount  有效数量
    * keyCountsByServiceType  密钥分布按服务类型统计
    * keyCountsByAlgorithm  密钥分布按算法统计
    * keyCountsByAlgorithmAndCluster  密钥分布按算法和集群统计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'invalidCount' => 'int',
            'validCount' => 'int',
            'keyCountsByServiceType' => '\HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]',
            'keyCountsByAlgorithm' => '\HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]',
            'keyCountsByAlgorithmAndCluster' => '\HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  总数量
    * invalidCount  无效数量
    * validCount  有效数量
    * keyCountsByServiceType  密钥分布按服务类型统计
    * keyCountsByAlgorithm  密钥分布按算法统计
    * keyCountsByAlgorithmAndCluster  密钥分布按算法和集群统计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
        'invalidCount' => 'int32',
        'validCount' => 'int32',
        'keyCountsByServiceType' => null,
        'keyCountsByAlgorithm' => null,
        'keyCountsByAlgorithmAndCluster' => null
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
    * totalCount  总数量
    * invalidCount  无效数量
    * validCount  有效数量
    * keyCountsByServiceType  密钥分布按服务类型统计
    * keyCountsByAlgorithm  密钥分布按算法统计
    * keyCountsByAlgorithmAndCluster  密钥分布按算法和集群统计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'invalidCount' => 'invalid_count',
            'validCount' => 'valid_count',
            'keyCountsByServiceType' => 'key_counts_by_service_type',
            'keyCountsByAlgorithm' => 'key_counts_by_algorithm',
            'keyCountsByAlgorithmAndCluster' => 'key_counts_by_algorithm_and_cluster'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  总数量
    * invalidCount  无效数量
    * validCount  有效数量
    * keyCountsByServiceType  密钥分布按服务类型统计
    * keyCountsByAlgorithm  密钥分布按算法统计
    * keyCountsByAlgorithmAndCluster  密钥分布按算法和集群统计
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'invalidCount' => 'setInvalidCount',
            'validCount' => 'setValidCount',
            'keyCountsByServiceType' => 'setKeyCountsByServiceType',
            'keyCountsByAlgorithm' => 'setKeyCountsByAlgorithm',
            'keyCountsByAlgorithmAndCluster' => 'setKeyCountsByAlgorithmAndCluster'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  总数量
    * invalidCount  无效数量
    * validCount  有效数量
    * keyCountsByServiceType  密钥分布按服务类型统计
    * keyCountsByAlgorithm  密钥分布按算法统计
    * keyCountsByAlgorithmAndCluster  密钥分布按算法和集群统计
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'invalidCount' => 'getInvalidCount',
            'validCount' => 'getValidCount',
            'keyCountsByServiceType' => 'getKeyCountsByServiceType',
            'keyCountsByAlgorithm' => 'getKeyCountsByAlgorithm',
            'keyCountsByAlgorithmAndCluster' => 'getKeyCountsByAlgorithmAndCluster'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['invalidCount'] = isset($data['invalidCount']) ? $data['invalidCount'] : null;
        $this->container['validCount'] = isset($data['validCount']) ? $data['validCount'] : null;
        $this->container['keyCountsByServiceType'] = isset($data['keyCountsByServiceType']) ? $data['keyCountsByServiceType'] : null;
        $this->container['keyCountsByAlgorithm'] = isset($data['keyCountsByAlgorithm']) ? $data['keyCountsByAlgorithm'] : null;
        $this->container['keyCountsByAlgorithmAndCluster'] = isset($data['keyCountsByAlgorithmAndCluster']) ? $data['keyCountsByAlgorithmAndCluster'] : null;
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
    * Gets totalCount
    *  总数量
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总数量
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets invalidCount
    *  无效数量
    *
    * @return int|null
    */
    public function getInvalidCount()
    {
        return $this->container['invalidCount'];
    }

    /**
    * Sets invalidCount
    *
    * @param int|null $invalidCount 无效数量
    *
    * @return $this
    */
    public function setInvalidCount($invalidCount)
    {
        $this->container['invalidCount'] = $invalidCount;
        return $this;
    }

    /**
    * Gets validCount
    *  有效数量
    *
    * @return int|null
    */
    public function getValidCount()
    {
        return $this->container['validCount'];
    }

    /**
    * Sets validCount
    *
    * @param int|null $validCount 有效数量
    *
    * @return $this
    */
    public function setValidCount($validCount)
    {
        $this->container['validCount'] = $validCount;
        return $this;
    }

    /**
    * Gets keyCountsByServiceType
    *  密钥分布按服务类型统计
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]|null
    */
    public function getKeyCountsByServiceType()
    {
        return $this->container['keyCountsByServiceType'];
    }

    /**
    * Sets keyCountsByServiceType
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]|null $keyCountsByServiceType 密钥分布按服务类型统计
    *
    * @return $this
    */
    public function setKeyCountsByServiceType($keyCountsByServiceType)
    {
        $this->container['keyCountsByServiceType'] = $keyCountsByServiceType;
        return $this;
    }

    /**
    * Gets keyCountsByAlgorithm
    *  密钥分布按算法统计
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]|null
    */
    public function getKeyCountsByAlgorithm()
    {
        return $this->container['keyCountsByAlgorithm'];
    }

    /**
    * Sets keyCountsByAlgorithm
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]|null $keyCountsByAlgorithm 密钥分布按算法统计
    *
    * @return $this
    */
    public function setKeyCountsByAlgorithm($keyCountsByAlgorithm)
    {
        $this->container['keyCountsByAlgorithm'] = $keyCountsByAlgorithm;
        return $this;
    }

    /**
    * Gets keyCountsByAlgorithmAndCluster
    *  密钥分布按算法和集群统计
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]|null
    */
    public function getKeyCountsByAlgorithmAndCluster()
    {
        return $this->container['keyCountsByAlgorithmAndCluster'];
    }

    /**
    * Sets keyCountsByAlgorithmAndCluster
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\VendorKeyStatistic[]|null $keyCountsByAlgorithmAndCluster 密钥分布按算法和集群统计
    *
    * @return $this
    */
    public function setKeyCountsByAlgorithmAndCluster($keyCountsByAlgorithmAndCluster)
    {
        $this->container['keyCountsByAlgorithmAndCluster'] = $keyCountsByAlgorithmAndCluster;
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

