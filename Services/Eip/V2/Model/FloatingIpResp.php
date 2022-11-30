<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FloatingIpResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FloatingIpResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fixedIpAddress  关联端口的私有IP地址。
    * floatingIpAddress  浮动IP地址。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询。
    * id  浮动IP地址的id。
    * portId  端口id。
    * routerId  所属路由器id。
    * status  网络状态，可以为ACTIVE， DOWN或ERROR。  DOWN：未绑定  ACTIVE：绑定  ERROR：异常
    * tenantId  项目id。
    * projectId  项目id。
    * dnsName  DNS名称(目前仅广州局点支持)
    * dnsDomain  DNS域地址(目前仅广州局点支持)
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fixedIpAddress' => 'string',
            'floatingIpAddress' => 'string',
            'floatingNetworkId' => 'string',
            'id' => 'string',
            'portId' => 'string',
            'routerId' => 'string',
            'status' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'dnsName' => 'string',
            'dnsDomain' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fixedIpAddress  关联端口的私有IP地址。
    * floatingIpAddress  浮动IP地址。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询。
    * id  浮动IP地址的id。
    * portId  端口id。
    * routerId  所属路由器id。
    * status  网络状态，可以为ACTIVE， DOWN或ERROR。  DOWN：未绑定  ACTIVE：绑定  ERROR：异常
    * tenantId  项目id。
    * projectId  项目id。
    * dnsName  DNS名称(目前仅广州局点支持)
    * dnsDomain  DNS域地址(目前仅广州局点支持)
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fixedIpAddress' => null,
        'floatingIpAddress' => null,
        'floatingNetworkId' => null,
        'id' => null,
        'portId' => null,
        'routerId' => null,
        'status' => null,
        'tenantId' => null,
        'projectId' => null,
        'dnsName' => null,
        'dnsDomain' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * fixedIpAddress  关联端口的私有IP地址。
    * floatingIpAddress  浮动IP地址。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询。
    * id  浮动IP地址的id。
    * portId  端口id。
    * routerId  所属路由器id。
    * status  网络状态，可以为ACTIVE， DOWN或ERROR。  DOWN：未绑定  ACTIVE：绑定  ERROR：异常
    * tenantId  项目id。
    * projectId  项目id。
    * dnsName  DNS名称(目前仅广州局点支持)
    * dnsDomain  DNS域地址(目前仅广州局点支持)
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fixedIpAddress' => 'fixed_ip_address',
            'floatingIpAddress' => 'floating_ip_address',
            'floatingNetworkId' => 'floating_network_id',
            'id' => 'id',
            'portId' => 'port_id',
            'routerId' => 'router_id',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'dnsName' => 'dns_name',
            'dnsDomain' => 'dns_domain',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fixedIpAddress  关联端口的私有IP地址。
    * floatingIpAddress  浮动IP地址。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询。
    * id  浮动IP地址的id。
    * portId  端口id。
    * routerId  所属路由器id。
    * status  网络状态，可以为ACTIVE， DOWN或ERROR。  DOWN：未绑定  ACTIVE：绑定  ERROR：异常
    * tenantId  项目id。
    * projectId  项目id。
    * dnsName  DNS名称(目前仅广州局点支持)
    * dnsDomain  DNS域地址(目前仅广州局点支持)
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $setters = [
            'fixedIpAddress' => 'setFixedIpAddress',
            'floatingIpAddress' => 'setFloatingIpAddress',
            'floatingNetworkId' => 'setFloatingNetworkId',
            'id' => 'setId',
            'portId' => 'setPortId',
            'routerId' => 'setRouterId',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'dnsName' => 'setDnsName',
            'dnsDomain' => 'setDnsDomain',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fixedIpAddress  关联端口的私有IP地址。
    * floatingIpAddress  浮动IP地址。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询。
    * id  浮动IP地址的id。
    * portId  端口id。
    * routerId  所属路由器id。
    * status  网络状态，可以为ACTIVE， DOWN或ERROR。  DOWN：未绑定  ACTIVE：绑定  ERROR：异常
    * tenantId  项目id。
    * projectId  项目id。
    * dnsName  DNS名称(目前仅广州局点支持)
    * dnsDomain  DNS域地址(目前仅广州局点支持)
    * createdAt  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    * updatedAt  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @var string[]
    */
    protected static $getters = [
            'fixedIpAddress' => 'getFixedIpAddress',
            'floatingIpAddress' => 'getFloatingIpAddress',
            'floatingNetworkId' => 'getFloatingNetworkId',
            'id' => 'getId',
            'portId' => 'getPortId',
            'routerId' => 'getRouterId',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
            'dnsName' => 'getDnsName',
            'dnsDomain' => 'getDnsDomain',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DOWN = 'DOWN';
    const STATUS_ERROR = 'ERROR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_DOWN,
            self::STATUS_ERROR,
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
        $this->container['fixedIpAddress'] = isset($data['fixedIpAddress']) ? $data['fixedIpAddress'] : null;
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['floatingNetworkId'] = isset($data['floatingNetworkId']) ? $data['floatingNetworkId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['routerId'] = isset($data['routerId']) ? $data['routerId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['dnsName'] = isset($data['dnsName']) ? $data['dnsName'] : null;
        $this->container['dnsDomain'] = isset($data['dnsDomain']) ? $data['dnsDomain'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fixedIpAddress']) && (mb_strlen($this->container['fixedIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'fixedIpAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fixedIpAddress']) && (mb_strlen($this->container['fixedIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'fixedIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['floatingIpAddress']) && (mb_strlen($this->container['floatingIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['floatingIpAddress']) && (mb_strlen($this->container['floatingIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['floatingNetworkId']) && (mb_strlen($this->container['floatingNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'floatingNetworkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['floatingNetworkId']) && (mb_strlen($this->container['floatingNetworkId']) < 0)) {
                $invalidProperties[] = "invalid value for 'floatingNetworkId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) < 0)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['routerId']) && (mb_strlen($this->container['routerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['routerId']) && (mb_strlen($this->container['routerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dnsName']) && (mb_strlen($this->container['dnsName']) > 255)) {
                $invalidProperties[] = "invalid value for 'dnsName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['dnsName']) && (mb_strlen($this->container['dnsName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dnsName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dnsDomain']) && (mb_strlen($this->container['dnsDomain']) > 255)) {
                $invalidProperties[] = "invalid value for 'dnsDomain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['dnsDomain']) && (mb_strlen($this->container['dnsDomain']) < 0)) {
                $invalidProperties[] = "invalid value for 'dnsDomain', the character length must be bigger than or equal to 0.";
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
    * Gets fixedIpAddress
    *  关联端口的私有IP地址。
    *
    * @return string|null
    */
    public function getFixedIpAddress()
    {
        return $this->container['fixedIpAddress'];
    }

    /**
    * Sets fixedIpAddress
    *
    * @param string|null $fixedIpAddress 关联端口的私有IP地址。
    *
    * @return $this
    */
    public function setFixedIpAddress($fixedIpAddress)
    {
        $this->container['fixedIpAddress'] = $fixedIpAddress;
        return $this;
    }

    /**
    * Gets floatingIpAddress
    *  浮动IP地址。
    *
    * @return string|null
    */
    public function getFloatingIpAddress()
    {
        return $this->container['floatingIpAddress'];
    }

    /**
    * Sets floatingIpAddress
    *
    * @param string|null $floatingIpAddress 浮动IP地址。
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets floatingNetworkId
    *  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询。
    *
    * @return string|null
    */
    public function getFloatingNetworkId()
    {
        return $this->container['floatingNetworkId'];
    }

    /**
    * Sets floatingNetworkId
    *
    * @param string|null $floatingNetworkId 外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询。
    *
    * @return $this
    */
    public function setFloatingNetworkId($floatingNetworkId)
    {
        $this->container['floatingNetworkId'] = $floatingNetworkId;
        return $this;
    }

    /**
    * Gets id
    *  浮动IP地址的id。
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
    * @param string|null $id 浮动IP地址的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets portId
    *  端口id。
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId 端口id。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets routerId
    *  所属路由器id。
    *
    * @return string|null
    */
    public function getRouterId()
    {
        return $this->container['routerId'];
    }

    /**
    * Sets routerId
    *
    * @param string|null $routerId 所属路由器id。
    *
    * @return $this
    */
    public function setRouterId($routerId)
    {
        $this->container['routerId'] = $routerId;
        return $this;
    }

    /**
    * Gets status
    *  网络状态，可以为ACTIVE， DOWN或ERROR。  DOWN：未绑定  ACTIVE：绑定  ERROR：异常
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
    * @param string|null $status 网络状态，可以为ACTIVE， DOWN或ERROR。  DOWN：未绑定  ACTIVE：绑定  ERROR：异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目id。
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
    * @param string|null $tenantId 项目id。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id。
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
    * @param string|null $projectId 项目id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets dnsName
    *  DNS名称(目前仅广州局点支持)
    *
    * @return string|null
    */
    public function getDnsName()
    {
        return $this->container['dnsName'];
    }

    /**
    * Sets dnsName
    *
    * @param string|null $dnsName DNS名称(目前仅广州局点支持)
    *
    * @return $this
    */
    public function setDnsName($dnsName)
    {
        $this->container['dnsName'] = $dnsName;
        return $this;
    }

    /**
    * Gets dnsDomain
    *  DNS域地址(目前仅广州局点支持)
    *
    * @return string|null
    */
    public function getDnsDomain()
    {
        return $this->container['dnsDomain'];
    }

    /**
    * Sets dnsDomain
    *
    * @param string|null $dnsDomain DNS域地址(目前仅广州局点支持)
    *
    * @return $this
    */
    public function setDnsDomain($dnsDomain)
    {
        $this->container['dnsDomain'] = $dnsDomain;
        return $this;
    }

    /**
    * Gets createdAt
    *  资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 资源创建时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 资源更新时间  采用UTC时间  格式：YYYY-MM-DDTHH:MM:SS
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

