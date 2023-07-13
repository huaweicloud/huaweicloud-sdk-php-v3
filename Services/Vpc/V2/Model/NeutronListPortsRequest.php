<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListPortsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListPortsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照端口的ID过滤查询
    * name  按照端口的名称过滤查询
    * adminStateUp  按照端口的管理状态过滤查询，取值范围：true or false
    * networkId  按照端口所属的网络ID过滤查询
    * macAddress  按照端口的mac地址过滤查询
    * deviceId  按照端口的设备ID过滤查询
    * deviceOwner  按照端口的设备所属过滤查询
    * status  按照端口状态过滤查询，取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  按照安全组ID列表过滤查询
    * fixedIps  按照端口的IP地址过滤查询，fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * tenantId  按照端口所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string',
            'name' => 'string',
            'adminStateUp' => 'bool',
            'networkId' => 'string',
            'macAddress' => 'string',
            'deviceId' => 'string',
            'deviceOwner' => 'string',
            'status' => 'string',
            'securityGroups' => 'string[]',
            'fixedIps' => 'string[]',
            'tenantId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照端口的ID过滤查询
    * name  按照端口的名称过滤查询
    * adminStateUp  按照端口的管理状态过滤查询，取值范围：true or false
    * networkId  按照端口所属的网络ID过滤查询
    * macAddress  按照端口的mac地址过滤查询
    * deviceId  按照端口的设备ID过滤查询
    * deviceOwner  按照端口的设备所属过滤查询
    * status  按照端口状态过滤查询，取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  按照安全组ID列表过滤查询
    * fixedIps  按照端口的IP地址过滤查询，fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * tenantId  按照端口所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'name' => null,
        'adminStateUp' => null,
        'networkId' => null,
        'macAddress' => null,
        'deviceId' => null,
        'deviceOwner' => null,
        'status' => null,
        'securityGroups' => null,
        'fixedIps' => null,
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
    * id  按照端口的ID过滤查询
    * name  按照端口的名称过滤查询
    * adminStateUp  按照端口的管理状态过滤查询，取值范围：true or false
    * networkId  按照端口所属的网络ID过滤查询
    * macAddress  按照端口的mac地址过滤查询
    * deviceId  按照端口的设备ID过滤查询
    * deviceOwner  按照端口的设备所属过滤查询
    * status  按照端口状态过滤查询，取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  按照安全组ID列表过滤查询
    * fixedIps  按照端口的IP地址过滤查询，fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * tenantId  按照端口所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'networkId' => 'network_id',
            'macAddress' => 'mac_address',
            'deviceId' => 'device_id',
            'deviceOwner' => 'device_owner',
            'status' => 'status',
            'securityGroups' => 'security_groups',
            'fixedIps' => 'fixed_ips',
            'tenantId' => 'tenant_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照端口的ID过滤查询
    * name  按照端口的名称过滤查询
    * adminStateUp  按照端口的管理状态过滤查询，取值范围：true or false
    * networkId  按照端口所属的网络ID过滤查询
    * macAddress  按照端口的mac地址过滤查询
    * deviceId  按照端口的设备ID过滤查询
    * deviceOwner  按照端口的设备所属过滤查询
    * status  按照端口状态过滤查询，取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  按照安全组ID列表过滤查询
    * fixedIps  按照端口的IP地址过滤查询，fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * tenantId  按照端口所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'networkId' => 'setNetworkId',
            'macAddress' => 'setMacAddress',
            'deviceId' => 'setDeviceId',
            'deviceOwner' => 'setDeviceOwner',
            'status' => 'setStatus',
            'securityGroups' => 'setSecurityGroups',
            'fixedIps' => 'setFixedIps',
            'tenantId' => 'setTenantId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  按照端口的ID过滤查询
    * name  按照端口的名称过滤查询
    * adminStateUp  按照端口的管理状态过滤查询，取值范围：true or false
    * networkId  按照端口所属的网络ID过滤查询
    * macAddress  按照端口的mac地址过滤查询
    * deviceId  按照端口的设备ID过滤查询
    * deviceOwner  按照端口的设备所属过滤查询
    * status  按照端口状态过滤查询，取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  按照安全组ID列表过滤查询
    * fixedIps  按照端口的IP地址过滤查询，fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * tenantId  按照端口所属的项目ID过滤查询
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'networkId' => 'getNetworkId',
            'macAddress' => 'getMacAddress',
            'deviceId' => 'getDeviceId',
            'deviceOwner' => 'getDeviceOwner',
            'status' => 'getStatus',
            'securityGroups' => 'getSecurityGroups',
            'fixedIps' => 'getFixedIps',
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['macAddress'] = isset($data['macAddress']) ? $data['macAddress'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
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
            if (!is_null($this->container['marker']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['networkId']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['networkId'])) {
                $invalidProperties[] = "invalid value for 'networkId', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['deviceId']) && !preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['deviceId'])) {
                $invalidProperties[] = "invalid value for 'deviceId', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
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
    *  按照端口的ID过滤查询
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
    * @param string|null $id 按照端口的ID过滤查询
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
    *  按照端口的名称过滤查询
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
    * @param string|null $name 按照端口的名称过滤查询
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  按照端口的管理状态过滤查询，取值范围：true or false
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
    * @param bool|null $adminStateUp 按照端口的管理状态过滤查询，取值范围：true or false
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets networkId
    *  按照端口所属的网络ID过滤查询
    *
    * @return string|null
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string|null $networkId 按照端口所属的网络ID过滤查询
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets macAddress
    *  按照端口的mac地址过滤查询
    *
    * @return string|null
    */
    public function getMacAddress()
    {
        return $this->container['macAddress'];
    }

    /**
    * Sets macAddress
    *
    * @param string|null $macAddress 按照端口的mac地址过滤查询
    *
    * @return $this
    */
    public function setMacAddress($macAddress)
    {
        $this->container['macAddress'] = $macAddress;
        return $this;
    }

    /**
    * Gets deviceId
    *  按照端口的设备ID过滤查询
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 按照端口的设备ID过滤查询
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets deviceOwner
    *  按照端口的设备所属过滤查询
    *
    * @return string|null
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string|null $deviceOwner 按照端口的设备所属过滤查询
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets status
    *  按照端口状态过滤查询，取值范围：ACTIVE、BUILD、DOWN
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
    * @param string|null $status 按照端口状态过滤查询，取值范围：ACTIVE、BUILD、DOWN
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets securityGroups
    *  按照安全组ID列表过滤查询
    *
    * @return string[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param string[]|null $securityGroups 按照安全组ID列表过滤查询
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets fixedIps
    *  按照端口的IP地址过滤查询，fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    *
    * @return string[]|null
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param string[]|null $fixedIps 按照端口的IP地址过滤查询，fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets tenantId
    *  按照端口所属的项目ID过滤查询
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
    * @param string|null $tenantId 按照端口所属的项目ID过滤查询
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

