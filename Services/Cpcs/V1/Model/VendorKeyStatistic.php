<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VendorKeyStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VendorKeyStatistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  总数
    * validCount  有效数量
    * invalidCount  无效数量
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterName  集群名称
    * serverType  服务类型
    * algorithm  算法
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'validCount' => 'int',
            'invalidCount' => 'int',
            'tenantId' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'serverType' => 'string',
            'algorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  总数
    * validCount  有效数量
    * invalidCount  无效数量
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterName  集群名称
    * serverType  服务类型
    * algorithm  算法
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => 'int32',
        'validCount' => 'int32',
        'invalidCount' => 'int32',
        'tenantId' => null,
        'clusterId' => null,
        'clusterName' => null,
        'serverType' => null,
        'algorithm' => null
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
    * totalCount  总数
    * validCount  有效数量
    * invalidCount  无效数量
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterName  集群名称
    * serverType  服务类型
    * algorithm  算法
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'validCount' => 'valid_count',
            'invalidCount' => 'invalid_count',
            'tenantId' => 'tenant_id',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'serverType' => 'server_type',
            'algorithm' => 'algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  总数
    * validCount  有效数量
    * invalidCount  无效数量
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterName  集群名称
    * serverType  服务类型
    * algorithm  算法
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'validCount' => 'setValidCount',
            'invalidCount' => 'setInvalidCount',
            'tenantId' => 'setTenantId',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'serverType' => 'setServerType',
            'algorithm' => 'setAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  总数
    * validCount  有效数量
    * invalidCount  无效数量
    * tenantId  租户ID
    * clusterId  集群ID
    * clusterName  集群名称
    * serverType  服务类型
    * algorithm  算法
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'validCount' => 'getValidCount',
            'invalidCount' => 'getInvalidCount',
            'tenantId' => 'getTenantId',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'serverType' => 'getServerType',
            'algorithm' => 'getAlgorithm'
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
        $this->container['validCount'] = isset($data['validCount']) ? $data['validCount'] : null;
        $this->container['invalidCount'] = isset($data['invalidCount']) ? $data['invalidCount'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
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
    *  总数
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
    * @param int|null $totalCount 总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
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
    * @param string|null $clusterId 集群ID
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
    *  集群名称
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
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets serverType
    *  服务类型
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType 服务类型
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets algorithm
    *  算法
    *
    * @return string|null
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param string|null $algorithm 算法
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
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

