<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLoadbalancersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLoadbalancersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询中每页的负载均衡器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的负载均衡器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  负载均衡器的ID。
    * description  负载均衡器的描述信息。
    * name  负载均衡器的名称。
    * operatingStatus  负载均衡器的操作状态。取值范围：可以为ONLINE、OFFLINE、DEGRADED、DISABLED或NO_MONITOR。
    * provisioningStatus  负载均衡器的配置状态。取值范围：可以为ACTIVE、PENDING_CREATE 或者ERROR。
    * vipAddress  负载均衡器的内网IP。
    * vipPortId  负载均衡器内网IP对应的端口ID。
    * vipSubnetId  负载均衡器所在的子网IPv4网络ID。
    * vpcId  负载均衡器所在的虚拟私有云ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * adminStateUp  负载均衡器的管理状态。负载均衡器停用时不再接收流量。取值范围：true：启用负载均衡器；false：停用负载均衡器。
    * memberAddress  负载均衡器的后端服务器的IP地址
    * memberDeviceId  负载均衡器的后端服务器对应的弹性云服务器ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string',
            'description' => 'string',
            'name' => 'string',
            'operatingStatus' => 'string',
            'provisioningStatus' => 'string',
            'vipAddress' => 'string',
            'vipPortId' => 'string',
            'vipSubnetId' => 'string',
            'vpcId' => 'string',
            'enterpriseProjectId' => 'string',
            'adminStateUp' => 'bool',
            'memberAddress' => 'string',
            'memberDeviceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询中每页的负载均衡器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的负载均衡器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  负载均衡器的ID。
    * description  负载均衡器的描述信息。
    * name  负载均衡器的名称。
    * operatingStatus  负载均衡器的操作状态。取值范围：可以为ONLINE、OFFLINE、DEGRADED、DISABLED或NO_MONITOR。
    * provisioningStatus  负载均衡器的配置状态。取值范围：可以为ACTIVE、PENDING_CREATE 或者ERROR。
    * vipAddress  负载均衡器的内网IP。
    * vipPortId  负载均衡器内网IP对应的端口ID。
    * vipSubnetId  负载均衡器所在的子网IPv4网络ID。
    * vpcId  负载均衡器所在的虚拟私有云ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * adminStateUp  负载均衡器的管理状态。负载均衡器停用时不再接收流量。取值范围：true：启用负载均衡器；false：停用负载均衡器。
    * memberAddress  负载均衡器的后端服务器的IP地址
    * memberDeviceId  负载均衡器的后端服务器对应的弹性云服务器ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'description' => null,
        'name' => null,
        'operatingStatus' => null,
        'provisioningStatus' => null,
        'vipAddress' => null,
        'vipPortId' => null,
        'vipSubnetId' => null,
        'vpcId' => null,
        'enterpriseProjectId' => null,
        'adminStateUp' => null,
        'memberAddress' => null,
        'memberDeviceId' => null
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
    * limit  分页查询中每页的负载均衡器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的负载均衡器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  负载均衡器的ID。
    * description  负载均衡器的描述信息。
    * name  负载均衡器的名称。
    * operatingStatus  负载均衡器的操作状态。取值范围：可以为ONLINE、OFFLINE、DEGRADED、DISABLED或NO_MONITOR。
    * provisioningStatus  负载均衡器的配置状态。取值范围：可以为ACTIVE、PENDING_CREATE 或者ERROR。
    * vipAddress  负载均衡器的内网IP。
    * vipPortId  负载均衡器内网IP对应的端口ID。
    * vipSubnetId  负载均衡器所在的子网IPv4网络ID。
    * vpcId  负载均衡器所在的虚拟私有云ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * adminStateUp  负载均衡器的管理状态。负载均衡器停用时不再接收流量。取值范围：true：启用负载均衡器；false：停用负载均衡器。
    * memberAddress  负载均衡器的后端服务器的IP地址
    * memberDeviceId  负载均衡器的后端服务器对应的弹性云服务器ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'description' => 'description',
            'name' => 'name',
            'operatingStatus' => 'operating_status',
            'provisioningStatus' => 'provisioning_status',
            'vipAddress' => 'vip_address',
            'vipPortId' => 'vip_port_id',
            'vipSubnetId' => 'vip_subnet_id',
            'vpcId' => 'vpc_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'adminStateUp' => 'admin_state_up',
            'memberAddress' => 'member_address',
            'memberDeviceId' => 'member_device_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询中每页的负载均衡器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的负载均衡器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  负载均衡器的ID。
    * description  负载均衡器的描述信息。
    * name  负载均衡器的名称。
    * operatingStatus  负载均衡器的操作状态。取值范围：可以为ONLINE、OFFLINE、DEGRADED、DISABLED或NO_MONITOR。
    * provisioningStatus  负载均衡器的配置状态。取值范围：可以为ACTIVE、PENDING_CREATE 或者ERROR。
    * vipAddress  负载均衡器的内网IP。
    * vipPortId  负载均衡器内网IP对应的端口ID。
    * vipSubnetId  负载均衡器所在的子网IPv4网络ID。
    * vpcId  负载均衡器所在的虚拟私有云ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * adminStateUp  负载均衡器的管理状态。负载均衡器停用时不再接收流量。取值范围：true：启用负载均衡器；false：停用负载均衡器。
    * memberAddress  负载均衡器的后端服务器的IP地址
    * memberDeviceId  负载均衡器的后端服务器对应的弹性云服务器ID
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'description' => 'setDescription',
            'name' => 'setName',
            'operatingStatus' => 'setOperatingStatus',
            'provisioningStatus' => 'setProvisioningStatus',
            'vipAddress' => 'setVipAddress',
            'vipPortId' => 'setVipPortId',
            'vipSubnetId' => 'setVipSubnetId',
            'vpcId' => 'setVpcId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'adminStateUp' => 'setAdminStateUp',
            'memberAddress' => 'setMemberAddress',
            'memberDeviceId' => 'setMemberDeviceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询中每页的负载均衡器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的负载均衡器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  负载均衡器的ID。
    * description  负载均衡器的描述信息。
    * name  负载均衡器的名称。
    * operatingStatus  负载均衡器的操作状态。取值范围：可以为ONLINE、OFFLINE、DEGRADED、DISABLED或NO_MONITOR。
    * provisioningStatus  负载均衡器的配置状态。取值范围：可以为ACTIVE、PENDING_CREATE 或者ERROR。
    * vipAddress  负载均衡器的内网IP。
    * vipPortId  负载均衡器内网IP对应的端口ID。
    * vipSubnetId  负载均衡器所在的子网IPv4网络ID。
    * vpcId  负载均衡器所在的虚拟私有云ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * adminStateUp  负载均衡器的管理状态。负载均衡器停用时不再接收流量。取值范围：true：启用负载均衡器；false：停用负载均衡器。
    * memberAddress  负载均衡器的后端服务器的IP地址
    * memberDeviceId  负载均衡器的后端服务器对应的弹性云服务器ID
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'description' => 'getDescription',
            'name' => 'getName',
            'operatingStatus' => 'getOperatingStatus',
            'provisioningStatus' => 'getProvisioningStatus',
            'vipAddress' => 'getVipAddress',
            'vipPortId' => 'getVipPortId',
            'vipSubnetId' => 'getVipSubnetId',
            'vpcId' => 'getVpcId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'adminStateUp' => 'getAdminStateUp',
            'memberAddress' => 'getMemberAddress',
            'memberDeviceId' => 'getMemberDeviceId'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['vipPortId'] = isset($data['vipPortId']) ? $data['vipPortId'] : null;
        $this->container['vipSubnetId'] = isset($data['vipSubnetId']) ? $data['vipSubnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['memberAddress'] = isset($data['memberAddress']) ? $data['memberAddress'] : null;
        $this->container['memberDeviceId'] = isset($data['memberDeviceId']) ? $data['memberDeviceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vipAddress']) && (mb_strlen($this->container['vipAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'vipAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vipAddress']) && (mb_strlen($this->container['vipAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'vipAddress', the character length must be bigger than or equal to 0.";
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
    *  分页查询中每页的负载均衡器个数
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
    * @param int|null $limit 分页查询中每页的负载均衡器个数
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
    *  分页查询的起始的资源id，表示上一页最后一条查询记录的负载均衡器的id。不指定时表示查询第一页。
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
    * @param string|null $marker 分页查询的起始的资源id，表示上一页最后一条查询记录的负载均衡器的id。不指定时表示查询第一页。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  负载均衡器的ID。
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
    * @param string|null $id 负载均衡器的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  负载均衡器的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 负载均衡器的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  负载均衡器的名称。
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
    * @param string|null $name 负载均衡器的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  负载均衡器的操作状态。取值范围：可以为ONLINE、OFFLINE、DEGRADED、DISABLED或NO_MONITOR。
    *
    * @return string|null
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string|null $operatingStatus 负载均衡器的操作状态。取值范围：可以为ONLINE、OFFLINE、DEGRADED、DISABLED或NO_MONITOR。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  负载均衡器的配置状态。取值范围：可以为ACTIVE、PENDING_CREATE 或者ERROR。
    *
    * @return string|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string|null $provisioningStatus 负载均衡器的配置状态。取值范围：可以为ACTIVE、PENDING_CREATE 或者ERROR。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets vipAddress
    *  负载均衡器的内网IP。
    *
    * @return string|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string|null $vipAddress 负载均衡器的内网IP。
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets vipPortId
    *  负载均衡器内网IP对应的端口ID。
    *
    * @return string|null
    */
    public function getVipPortId()
    {
        return $this->container['vipPortId'];
    }

    /**
    * Sets vipPortId
    *
    * @param string|null $vipPortId 负载均衡器内网IP对应的端口ID。
    *
    * @return $this
    */
    public function setVipPortId($vipPortId)
    {
        $this->container['vipPortId'] = $vipPortId;
        return $this;
    }

    /**
    * Gets vipSubnetId
    *  负载均衡器所在的子网IPv4网络ID。
    *
    * @return string|null
    */
    public function getVipSubnetId()
    {
        return $this->container['vipSubnetId'];
    }

    /**
    * Sets vipSubnetId
    *
    * @param string|null $vipSubnetId 负载均衡器所在的子网IPv4网络ID。
    *
    * @return $this
    */
    public function setVipSubnetId($vipSubnetId)
    {
        $this->container['vipSubnetId'] = $vipSubnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  负载均衡器所在的虚拟私有云ID。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 负载均衡器所在的虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  负载均衡器的管理状态。负载均衡器停用时不再接收流量。取值范围：true：启用负载均衡器；false：停用负载均衡器。
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
    * @param bool|null $adminStateUp 负载均衡器的管理状态。负载均衡器停用时不再接收流量。取值范围：true：启用负载均衡器；false：停用负载均衡器。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets memberAddress
    *  负载均衡器的后端服务器的IP地址
    *
    * @return string|null
    */
    public function getMemberAddress()
    {
        return $this->container['memberAddress'];
    }

    /**
    * Sets memberAddress
    *
    * @param string|null $memberAddress 负载均衡器的后端服务器的IP地址
    *
    * @return $this
    */
    public function setMemberAddress($memberAddress)
    {
        $this->container['memberAddress'] = $memberAddress;
        return $this;
    }

    /**
    * Gets memberDeviceId
    *  负载均衡器的后端服务器对应的弹性云服务器ID
    *
    * @return string|null
    */
    public function getMemberDeviceId()
    {
        return $this->container['memberDeviceId'];
    }

    /**
    * Sets memberDeviceId
    *
    * @param string|null $memberDeviceId 负载均衡器的后端服务器对应的弹性云服务器ID
    *
    * @return $this
    */
    public function setMemberDeviceId($memberDeviceId)
    {
        $this->container['memberDeviceId'] = $memberDeviceId;
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

