<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatisticResourceResponseBodyDatapoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatisticResourceResponseBody_datapoints';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * data  数据
    * count  数量
    * apiName  接口名称
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'data' => 'int',
            'count' => 'int',
            'apiName' => 'string',
            'tenantId' => 'string',
            'clusterId' => 'string',
            'serverType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * data  数据
    * count  数量
    * apiName  接口名称
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'data' => 'int32',
        'count' => 'int64',
        'apiName' => null,
        'tenantId' => null,
        'clusterId' => null,
        'serverType' => null
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
    * data  数据
    * count  数量
    * apiName  接口名称
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'data' => 'data',
            'count' => 'count',
            'apiName' => 'api_name',
            'tenantId' => 'tenant_id',
            'clusterId' => 'cluster_id',
            'serverType' => 'server_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * data  数据
    * count  数量
    * apiName  接口名称
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    *
    * @var string[]
    */
    protected static $setters = [
            'data' => 'setData',
            'count' => 'setCount',
            'apiName' => 'setApiName',
            'tenantId' => 'setTenantId',
            'clusterId' => 'setClusterId',
            'serverType' => 'setServerType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * data  数据
    * count  数量
    * apiName  接口名称
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  服务类型
    *
    * @var string[]
    */
    protected static $getters = [
            'data' => 'getData',
            'count' => 'getCount',
            'apiName' => 'getApiName',
            'tenantId' => 'getTenantId',
            'clusterId' => 'getClusterId',
            'serverType' => 'getServerType'
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
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['apiName'] = isset($data['apiName']) ? $data['apiName'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
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
    * Gets data
    *  数据
    *
    * @return int|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param int|null $data 数据
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets count
    *  数量
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
    * @param int|null $count 数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets apiName
    *  接口名称
    *
    * @return string|null
    */
    public function getApiName()
    {
        return $this->container['apiName'];
    }

    /**
    * Sets apiName
    *
    * @param string|null $apiName 接口名称
    *
    * @return $this
    */
    public function setApiName($apiName)
    {
        $this->container['apiName'] = $apiName;
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

