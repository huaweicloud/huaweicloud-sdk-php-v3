<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListNetworksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListNetworksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照网络对应的ID过滤查询
    * name  按照网络的名称过滤查询
    * status  按照网络的状态过滤查询，取值范围：ACTIVE、ERROR、DOWN
    * shared  按照网络是否支持跨租户共享过滤查询，取值范围：true or false
    * routerexternal  按照网络是否外部网络过滤查询，取值范围：true or false
    * adminStateUp  按照网络的管理状态过滤查询，取值范围：true or false
    * providernetworkType  按照网络的类型过滤查询
    * tenantId  按照network所属的项目ID过滤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'shared' => 'bool',
            'routerexternal' => 'bool',
            'adminStateUp' => 'bool',
            'providernetworkType' => 'string',
            'tenantId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照网络对应的ID过滤查询
    * name  按照网络的名称过滤查询
    * status  按照网络的状态过滤查询，取值范围：ACTIVE、ERROR、DOWN
    * shared  按照网络是否支持跨租户共享过滤查询，取值范围：true or false
    * routerexternal  按照网络是否外部网络过滤查询，取值范围：true or false
    * adminStateUp  按照网络的管理状态过滤查询，取值范围：true or false
    * providernetworkType  按照网络的类型过滤查询
    * tenantId  按照network所属的项目ID过滤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'name' => null,
        'status' => null,
        'shared' => null,
        'routerexternal' => null,
        'adminStateUp' => null,
        'providernetworkType' => null,
        'tenantId' => null
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
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照网络对应的ID过滤查询
    * name  按照网络的名称过滤查询
    * status  按照网络的状态过滤查询，取值范围：ACTIVE、ERROR、DOWN
    * shared  按照网络是否支持跨租户共享过滤查询，取值范围：true or false
    * routerexternal  按照网络是否外部网络过滤查询，取值范围：true or false
    * adminStateUp  按照网络的管理状态过滤查询，取值范围：true or false
    * providernetworkType  按照网络的类型过滤查询
    * tenantId  按照network所属的项目ID过滤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'shared' => 'shared',
            'routerexternal' => 'router:external',
            'adminStateUp' => 'admin_state_up',
            'providernetworkType' => 'provider:network_type',
            'tenantId' => 'tenant_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照网络对应的ID过滤查询
    * name  按照网络的名称过滤查询
    * status  按照网络的状态过滤查询，取值范围：ACTIVE、ERROR、DOWN
    * shared  按照网络是否支持跨租户共享过滤查询，取值范围：true or false
    * routerexternal  按照网络是否外部网络过滤查询，取值范围：true or false
    * adminStateUp  按照网络的管理状态过滤查询，取值范围：true or false
    * providernetworkType  按照网络的类型过滤查询
    * tenantId  按照network所属的项目ID过滤
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'shared' => 'setShared',
            'routerexternal' => 'setRouterexternal',
            'adminStateUp' => 'setAdminStateUp',
            'providernetworkType' => 'setProvidernetworkType',
            'tenantId' => 'setTenantId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照网络对应的ID过滤查询
    * name  按照网络的名称过滤查询
    * status  按照网络的状态过滤查询，取值范围：ACTIVE、ERROR、DOWN
    * shared  按照网络是否支持跨租户共享过滤查询，取值范围：true or false
    * routerexternal  按照网络是否外部网络过滤查询，取值范围：true or false
    * adminStateUp  按照网络的管理状态过滤查询，取值范围：true or false
    * providernetworkType  按照网络的类型过滤查询
    * tenantId  按照network所属的项目ID过滤
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'shared' => 'getShared',
            'routerexternal' => 'getRouterexternal',
            'adminStateUp' => 'getAdminStateUp',
            'providernetworkType' => 'getProvidernetworkType',
            'tenantId' => 'getTenantId'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 2000;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['shared'] = isset($data['shared']) ? $data['shared'] : null;
        $this->container['routerexternal'] = isset($data['routerexternal']) ? $data['routerexternal'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['providernetworkType'] = isset($data['providernetworkType']) ? $data['providernetworkType'] : 'N/A';
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
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
    * Gets limit
    *  每页返回的个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询起始的资源ID，为空时查询第一页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询起始的资源ID，为空时查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  按照网络对应的ID过滤查询
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 按照网络对应的ID过滤查询
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  按照网络的名称过滤查询
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 按照网络的名称过滤查询
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  按照网络的状态过滤查询，取值范围：ACTIVE、ERROR、DOWN
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 按照网络的状态过滤查询，取值范围：ACTIVE、ERROR、DOWN
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets shared
    *  按照网络是否支持跨租户共享过滤查询，取值范围：true or false
    *
    * @return bool|null
    */
    public function getShared()
    {
        return $this->container['shared'];
    }

    /**
    * Sets shared
    *
    * @param bool|null $shared 按照网络是否支持跨租户共享过滤查询，取值范围：true or false
    *
    * @return $this
    */
    public function setShared($shared)
    {
        $this->container['shared'] = $shared;
        return $this;
    }

    /**
    * Gets routerexternal
    *  按照网络是否外部网络过滤查询，取值范围：true or false
    *
    * @return bool|null
    */
    public function getRouterexternal()
    {
        return $this->container['routerexternal'];
    }

    /**
    * Sets routerexternal
    *
    * @param bool|null $routerexternal 按照网络是否外部网络过滤查询，取值范围：true or false
    *
    * @return $this
    */
    public function setRouterexternal($routerexternal)
    {
        $this->container['routerexternal'] = $routerexternal;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  按照网络的管理状态过滤查询，取值范围：true or false
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 按照网络的管理状态过滤查询，取值范围：true or false
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets providernetworkType
    *  按照网络的类型过滤查询
    *
    * @return string|null
    */
    public function getProvidernetworkType()
    {
        return $this->container['providernetworkType'];
    }

    /**
    * Sets providernetworkType
    *
    * @param string|null $providernetworkType 按照网络的类型过滤查询
    *
    * @return $this
    */
    public function setProvidernetworkType($providernetworkType)
    {
        $this->container['providernetworkType'] = $providernetworkType;
        return $this;
    }

    /**
    * Gets tenantId
    *  按照network所属的项目ID过滤
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
    * @param string|null $tenantId 按照network所属的项目ID过滤
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
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

