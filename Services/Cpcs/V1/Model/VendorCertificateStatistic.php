<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VendorCertificateStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VendorCertificateStatistic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  总数量
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    * certificateType  证书类型
    * algorithmType  算法类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'tenantId' => 'string',
            'clusterId' => 'string',
            'serverType' => 'string',
            'certificateType' => 'int',
            'algorithmType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  总数量
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    * certificateType  证书类型
    * algorithmType  算法类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'tenantId' => null,
        'clusterId' => null,
        'serverType' => null,
        'certificateType' => 'int32',
        'algorithmType' => 'int32'
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
    * count  总数量
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    * certificateType  证书类型
    * algorithmType  算法类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'tenantId' => 'tenant_id',
            'clusterId' => 'cluster_id',
            'serverType' => 'server_type',
            'certificateType' => 'certificate_type',
            'algorithmType' => 'algorithm_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  总数量
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    * certificateType  证书类型
    * algorithmType  算法类型
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'tenantId' => 'setTenantId',
            'clusterId' => 'setClusterId',
            'serverType' => 'setServerType',
            'certificateType' => 'setCertificateType',
            'algorithmType' => 'setAlgorithmType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  总数量
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    * certificateType  证书类型
    * algorithmType  算法类型
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'tenantId' => 'getTenantId',
            'clusterId' => 'getClusterId',
            'serverType' => 'getServerType',
            'certificateType' => 'getCertificateType',
            'algorithmType' => 'getAlgorithmType'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
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
    * Gets count
    *  总数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 总数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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
    * Gets certificateType
    *  证书类型
    *
    * @return int|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param int|null $certificateType 证书类型
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets algorithmType
    *  算法类型
    *
    * @return int|null
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param int|null $algorithmType 算法类型
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
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

