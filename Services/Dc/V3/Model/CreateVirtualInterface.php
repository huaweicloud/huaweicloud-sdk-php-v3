<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVirtualInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVirtualInterface';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * directConnectId  虚拟接口关联的物理专线ID。在创建虚拟接口时，需要关联direct_connect_id或lag_id，当LAG功能在当前局点不支持时，该参数为必选。
    * type  虚拟接口的类型,private
    * serviceType  接入网关类型：VGW/GDGW/LGW
    * vlan  对接客户侧vlan。当关联物理连接选择托管专线时，vlan需要和托管专线保持一致。
    * bandwidth  虚拟接口接入带宽
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * localGatewayV4Ip  云侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayV6Ip  云侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * vgwId  虚拟接口连接的虚拟网关的ID
    * gatewayId  虚拟接口关联的网关的ID。 当虚拟接口接入网关类型为全域接入网关时该参数必填，gateway_id值为全域接入网关的id
    * routeMode  路由模式：static/bgp
    * bgpAsn  客户侧BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  访问公网服务的子网列表
    * enableBfd  是否使能bfd功能：true或false。[（预留字段暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段暂不支持）](tag:dt)
    * lagId  虚拟接口关联的链路聚合组ID
    * resourceTenantId  目标的租户的ID,用于跨租户创建虚拟接口场景
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'directConnectId' => 'string',
            'type' => 'string',
            'serviceType' => 'string',
            'vlan' => 'int',
            'bandwidth' => 'int',
            'priority' => 'string',
            'localGatewayV4Ip' => 'string',
            'remoteGatewayV4Ip' => 'string',
            'addressFamily' => 'string',
            'localGatewayV6Ip' => 'string',
            'remoteGatewayV6Ip' => 'string',
            'vgwId' => 'string',
            'gatewayId' => 'string',
            'routeMode' => 'string',
            'bgpAsn' => 'int',
            'bgpMd5' => 'string',
            'remoteEpGroup' => 'string[]',
            'serviceEpGroup' => 'string[]',
            'enableBfd' => 'bool',
            'enableNqa' => 'bool',
            'lagId' => 'string',
            'resourceTenantId' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dc\V3\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * directConnectId  虚拟接口关联的物理专线ID。在创建虚拟接口时，需要关联direct_connect_id或lag_id，当LAG功能在当前局点不支持时，该参数为必选。
    * type  虚拟接口的类型,private
    * serviceType  接入网关类型：VGW/GDGW/LGW
    * vlan  对接客户侧vlan。当关联物理连接选择托管专线时，vlan需要和托管专线保持一致。
    * bandwidth  虚拟接口接入带宽
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * localGatewayV4Ip  云侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayV6Ip  云侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * vgwId  虚拟接口连接的虚拟网关的ID
    * gatewayId  虚拟接口关联的网关的ID。 当虚拟接口接入网关类型为全域接入网关时该参数必填，gateway_id值为全域接入网关的id
    * routeMode  路由模式：static/bgp
    * bgpAsn  客户侧BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  访问公网服务的子网列表
    * enableBfd  是否使能bfd功能：true或false。[（预留字段暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段暂不支持）](tag:dt)
    * lagId  虚拟接口关联的链路聚合组ID
    * resourceTenantId  目标的租户的ID,用于跨租户创建虚拟接口场景
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'directConnectId' => null,
        'type' => null,
        'serviceType' => null,
        'vlan' => 'int32',
        'bandwidth' => 'int32',
        'priority' => null,
        'localGatewayV4Ip' => null,
        'remoteGatewayV4Ip' => null,
        'addressFamily' => null,
        'localGatewayV6Ip' => null,
        'remoteGatewayV6Ip' => null,
        'vgwId' => null,
        'gatewayId' => null,
        'routeMode' => null,
        'bgpAsn' => 'int32',
        'bgpMd5' => null,
        'remoteEpGroup' => null,
        'serviceEpGroup' => null,
        'enableBfd' => null,
        'enableNqa' => null,
        'lagId' => null,
        'resourceTenantId' => null,
        'enterpriseProjectId' => null,
        'tags' => null
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
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * directConnectId  虚拟接口关联的物理专线ID。在创建虚拟接口时，需要关联direct_connect_id或lag_id，当LAG功能在当前局点不支持时，该参数为必选。
    * type  虚拟接口的类型,private
    * serviceType  接入网关类型：VGW/GDGW/LGW
    * vlan  对接客户侧vlan。当关联物理连接选择托管专线时，vlan需要和托管专线保持一致。
    * bandwidth  虚拟接口接入带宽
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * localGatewayV4Ip  云侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayV6Ip  云侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * vgwId  虚拟接口连接的虚拟网关的ID
    * gatewayId  虚拟接口关联的网关的ID。 当虚拟接口接入网关类型为全域接入网关时该参数必填，gateway_id值为全域接入网关的id
    * routeMode  路由模式：static/bgp
    * bgpAsn  客户侧BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  访问公网服务的子网列表
    * enableBfd  是否使能bfd功能：true或false。[（预留字段暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段暂不支持）](tag:dt)
    * lagId  虚拟接口关联的链路聚合组ID
    * resourceTenantId  目标的租户的ID,用于跨租户创建虚拟接口场景
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'directConnectId' => 'direct_connect_id',
            'type' => 'type',
            'serviceType' => 'service_type',
            'vlan' => 'vlan',
            'bandwidth' => 'bandwidth',
            'priority' => 'priority',
            'localGatewayV4Ip' => 'local_gateway_v4_ip',
            'remoteGatewayV4Ip' => 'remote_gateway_v4_ip',
            'addressFamily' => 'address_family',
            'localGatewayV6Ip' => 'local_gateway_v6_ip',
            'remoteGatewayV6Ip' => 'remote_gateway_v6_ip',
            'vgwId' => 'vgw_id',
            'gatewayId' => 'gateway_id',
            'routeMode' => 'route_mode',
            'bgpAsn' => 'bgp_asn',
            'bgpMd5' => 'bgp_md5',
            'remoteEpGroup' => 'remote_ep_group',
            'serviceEpGroup' => 'service_ep_group',
            'enableBfd' => 'enable_bfd',
            'enableNqa' => 'enable_nqa',
            'lagId' => 'lag_id',
            'resourceTenantId' => 'resource_tenant_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * directConnectId  虚拟接口关联的物理专线ID。在创建虚拟接口时，需要关联direct_connect_id或lag_id，当LAG功能在当前局点不支持时，该参数为必选。
    * type  虚拟接口的类型,private
    * serviceType  接入网关类型：VGW/GDGW/LGW
    * vlan  对接客户侧vlan。当关联物理连接选择托管专线时，vlan需要和托管专线保持一致。
    * bandwidth  虚拟接口接入带宽
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * localGatewayV4Ip  云侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayV6Ip  云侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * vgwId  虚拟接口连接的虚拟网关的ID
    * gatewayId  虚拟接口关联的网关的ID。 当虚拟接口接入网关类型为全域接入网关时该参数必填，gateway_id值为全域接入网关的id
    * routeMode  路由模式：static/bgp
    * bgpAsn  客户侧BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  访问公网服务的子网列表
    * enableBfd  是否使能bfd功能：true或false。[（预留字段暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段暂不支持）](tag:dt)
    * lagId  虚拟接口关联的链路聚合组ID
    * resourceTenantId  目标的租户的ID,用于跨租户创建虚拟接口场景
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'directConnectId' => 'setDirectConnectId',
            'type' => 'setType',
            'serviceType' => 'setServiceType',
            'vlan' => 'setVlan',
            'bandwidth' => 'setBandwidth',
            'priority' => 'setPriority',
            'localGatewayV4Ip' => 'setLocalGatewayV4Ip',
            'remoteGatewayV4Ip' => 'setRemoteGatewayV4Ip',
            'addressFamily' => 'setAddressFamily',
            'localGatewayV6Ip' => 'setLocalGatewayV6Ip',
            'remoteGatewayV6Ip' => 'setRemoteGatewayV6Ip',
            'vgwId' => 'setVgwId',
            'gatewayId' => 'setGatewayId',
            'routeMode' => 'setRouteMode',
            'bgpAsn' => 'setBgpAsn',
            'bgpMd5' => 'setBgpMd5',
            'remoteEpGroup' => 'setRemoteEpGroup',
            'serviceEpGroup' => 'setServiceEpGroup',
            'enableBfd' => 'setEnableBfd',
            'enableNqa' => 'setEnableNqa',
            'lagId' => 'setLagId',
            'resourceTenantId' => 'setResourceTenantId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  虚拟接口名字
    * description  虚拟接口描述信息
    * directConnectId  虚拟接口关联的物理专线ID。在创建虚拟接口时，需要关联direct_connect_id或lag_id，当LAG功能在当前局点不支持时，该参数为必选。
    * type  虚拟接口的类型,private
    * serviceType  接入网关类型：VGW/GDGW/LGW
    * vlan  对接客户侧vlan。当关联物理连接选择托管专线时，vlan需要和托管专线保持一致。
    * bandwidth  虚拟接口接入带宽
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * localGatewayV4Ip  云侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    * addressFamily  接口的地址簇类型，ipv4，ipv6
    * localGatewayV6Ip  云侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    * vgwId  虚拟接口连接的虚拟网关的ID
    * gatewayId  虚拟接口关联的网关的ID。 当虚拟接口接入网关类型为全域接入网关时该参数必填，gateway_id值为全域接入网关的id
    * routeMode  路由模式：static/bgp
    * bgpAsn  客户侧BGP邻居的AS号
    * bgpMd5  BGP邻居的MD5密码
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs
    * serviceEpGroup  访问公网服务的子网列表
    * enableBfd  是否使能bfd功能：true或false。[（预留字段暂不支持）](tag:dt)
    * enableNqa  是否使能nqa功能：true或false。[（预留字段暂不支持）](tag:dt)
    * lagId  虚拟接口关联的链路聚合组ID
    * resourceTenantId  目标的租户的ID,用于跨租户创建虚拟接口场景
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'directConnectId' => 'getDirectConnectId',
            'type' => 'getType',
            'serviceType' => 'getServiceType',
            'vlan' => 'getVlan',
            'bandwidth' => 'getBandwidth',
            'priority' => 'getPriority',
            'localGatewayV4Ip' => 'getLocalGatewayV4Ip',
            'remoteGatewayV4Ip' => 'getRemoteGatewayV4Ip',
            'addressFamily' => 'getAddressFamily',
            'localGatewayV6Ip' => 'getLocalGatewayV6Ip',
            'remoteGatewayV6Ip' => 'getRemoteGatewayV6Ip',
            'vgwId' => 'getVgwId',
            'gatewayId' => 'getGatewayId',
            'routeMode' => 'getRouteMode',
            'bgpAsn' => 'getBgpAsn',
            'bgpMd5' => 'getBgpMd5',
            'remoteEpGroup' => 'getRemoteEpGroup',
            'serviceEpGroup' => 'getServiceEpGroup',
            'enableBfd' => 'getEnableBfd',
            'enableNqa' => 'getEnableNqa',
            'lagId' => 'getLagId',
            'resourceTenantId' => 'getResourceTenantId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags'
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
    const TYPE__PRIVATE = 'private';
    const TYPE__PUBLIC = 'public';
    const SERVICE_TYPE_VGW = 'VGW';
    const SERVICE_TYPE_GDGW = 'GDGW';
    const SERVICE_TYPE_LGW = 'LGW';
    const PRIORITY_NORMAL = 'normal';
    const PRIORITY_LOW = 'low';
    const ROUTE_MODE__STATIC = 'static';
    const ROUTE_MODE_BGP = 'bgp';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__PRIVATE,
            self::TYPE__PUBLIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::SERVICE_TYPE_VGW,
            self::SERVICE_TYPE_GDGW,
            self::SERVICE_TYPE_LGW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY_NORMAL,
            self::PRIORITY_LOW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRouteModeAllowableValues()
    {
        return [
            self::ROUTE_MODE__STATIC,
            self::ROUTE_MODE_BGP,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['directConnectId'] = isset($data['directConnectId']) ? $data['directConnectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['vlan'] = isset($data['vlan']) ? $data['vlan'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['localGatewayV4Ip'] = isset($data['localGatewayV4Ip']) ? $data['localGatewayV4Ip'] : null;
        $this->container['remoteGatewayV4Ip'] = isset($data['remoteGatewayV4Ip']) ? $data['remoteGatewayV4Ip'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['localGatewayV6Ip'] = isset($data['localGatewayV6Ip']) ? $data['localGatewayV6Ip'] : null;
        $this->container['remoteGatewayV6Ip'] = isset($data['remoteGatewayV6Ip']) ? $data['remoteGatewayV6Ip'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['routeMode'] = isset($data['routeMode']) ? $data['routeMode'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['bgpMd5'] = isset($data['bgpMd5']) ? $data['bgpMd5'] : null;
        $this->container['remoteEpGroup'] = isset($data['remoteEpGroup']) ? $data['remoteEpGroup'] : null;
        $this->container['serviceEpGroup'] = isset($data['serviceEpGroup']) ? $data['serviceEpGroup'] : null;
        $this->container['enableBfd'] = isset($data['enableBfd']) ? $data['enableBfd'] : null;
        $this->container['enableNqa'] = isset($data['enableNqa']) ? $data['enableNqa'] : null;
        $this->container['lagId'] = isset($data['lagId']) ? $data['lagId'] : null;
        $this->container['resourceTenantId'] = isset($data['resourceTenantId']) ? $data['resourceTenantId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['directConnectId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['directConnectId'])) {
                $invalidProperties[] = "invalid value for 'directConnectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['vlan'] === null) {
            $invalidProperties[] = "'vlan' can't be null";
        }
            if (($this->container['vlan'] > 3999)) {
                $invalidProperties[] = "invalid value for 'vlan', must be smaller than or equal to 3999.";
            }
            if (($this->container['vlan'] < 0)) {
                $invalidProperties[] = "invalid value for 'vlan', must be bigger than or equal to 0.";
            }
        if ($this->container['bandwidth'] === null) {
            $invalidProperties[] = "'bandwidth' can't be null";
        }
            if (($this->container['bandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getPriorityAllowableValues();
                if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'priority', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['vgwId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['vgwId'])) {
                $invalidProperties[] = "invalid value for 'vgwId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['gatewayId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['gatewayId'])) {
                $invalidProperties[] = "invalid value for 'gatewayId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['routeMode'] === null) {
            $invalidProperties[] = "'routeMode' can't be null";
        }
            $allowedValues = $this->getRouteModeAllowableValues();
                if (!is_null($this->container['routeMode']) && !in_array($this->container['routeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'routeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['bgpAsn']) && ($this->container['bgpAsn'] < 1)) {
                $invalidProperties[] = "invalid value for 'bgpAsn', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lagId']) && (mb_strlen($this->container['lagId']) > 36)) {
                $invalidProperties[] = "invalid value for 'lagId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['lagId']) && (mb_strlen($this->container['lagId']) < 36)) {
                $invalidProperties[] = "invalid value for 'lagId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['lagId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['lagId'])) {
                $invalidProperties[] = "invalid value for 'lagId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets name
    *  虚拟接口名字
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
    * @param string|null $name 虚拟接口名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  虚拟接口描述信息
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
    * @param string|null $description 虚拟接口描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets directConnectId
    *  虚拟接口关联的物理专线ID。在创建虚拟接口时，需要关联direct_connect_id或lag_id，当LAG功能在当前局点不支持时，该参数为必选。
    *
    * @return string|null
    */
    public function getDirectConnectId()
    {
        return $this->container['directConnectId'];
    }

    /**
    * Sets directConnectId
    *
    * @param string|null $directConnectId 虚拟接口关联的物理专线ID。在创建虚拟接口时，需要关联direct_connect_id或lag_id，当LAG功能在当前局点不支持时，该参数为必选。
    *
    * @return $this
    */
    public function setDirectConnectId($directConnectId)
    {
        $this->container['directConnectId'] = $directConnectId;
        return $this;
    }

    /**
    * Gets type
    *  虚拟接口的类型,private
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 虚拟接口的类型,private
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets serviceType
    *  接入网关类型：VGW/GDGW/LGW
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType 接入网关类型：VGW/GDGW/LGW
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets vlan
    *  对接客户侧vlan。当关联物理连接选择托管专线时，vlan需要和托管专线保持一致。
    *
    * @return int
    */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
    * Sets vlan
    *
    * @param int $vlan 对接客户侧vlan。当关联物理连接选择托管专线时，vlan需要和托管专线保持一致。
    *
    * @return $this
    */
    public function setVlan($vlan)
    {
        $this->container['vlan'] = $vlan;
        return $this;
    }

    /**
    * Gets bandwidth
    *  虚拟接口接入带宽
    *
    * @return int
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int $bandwidth 虚拟接口接入带宽
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets priority
    *  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority 虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets localGatewayV4Ip
    *  云侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    *
    * @return string|null
    */
    public function getLocalGatewayV4Ip()
    {
        return $this->container['localGatewayV4Ip'];
    }

    /**
    * Sets localGatewayV4Ip
    *
    * @param string|null $localGatewayV4Ip 云侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    *
    * @return $this
    */
    public function setLocalGatewayV4Ip($localGatewayV4Ip)
    {
        $this->container['localGatewayV4Ip'] = $localGatewayV4Ip;
        return $this;
    }

    /**
    * Gets remoteGatewayV4Ip
    *  客户侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    *
    * @return string|null
    */
    public function getRemoteGatewayV4Ip()
    {
        return $this->container['remoteGatewayV4Ip'];
    }

    /**
    * Sets remoteGatewayV4Ip
    *
    * @param string|null $remoteGatewayV4Ip 客户侧网关IPv4接口地址,如果address_family是IPv4，是必选参数
    *
    * @return $this
    */
    public function setRemoteGatewayV4Ip($remoteGatewayV4Ip)
    {
        $this->container['remoteGatewayV4Ip'] = $remoteGatewayV4Ip;
        return $this;
    }

    /**
    * Gets addressFamily
    *  接口的地址簇类型，ipv4，ipv6
    *
    * @return string|null
    */
    public function getAddressFamily()
    {
        return $this->container['addressFamily'];
    }

    /**
    * Sets addressFamily
    *
    * @param string|null $addressFamily 接口的地址簇类型，ipv4，ipv6
    *
    * @return $this
    */
    public function setAddressFamily($addressFamily)
    {
        $this->container['addressFamily'] = $addressFamily;
        return $this;
    }

    /**
    * Gets localGatewayV6Ip
    *  云侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    *
    * @return string|null
    */
    public function getLocalGatewayV6Ip()
    {
        return $this->container['localGatewayV6Ip'];
    }

    /**
    * Sets localGatewayV6Ip
    *
    * @param string|null $localGatewayV6Ip 云侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    *
    * @return $this
    */
    public function setLocalGatewayV6Ip($localGatewayV6Ip)
    {
        $this->container['localGatewayV6Ip'] = $localGatewayV6Ip;
        return $this;
    }

    /**
    * Gets remoteGatewayV6Ip
    *  客户侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    *
    * @return string|null
    */
    public function getRemoteGatewayV6Ip()
    {
        return $this->container['remoteGatewayV6Ip'];
    }

    /**
    * Sets remoteGatewayV6Ip
    *
    * @param string|null $remoteGatewayV6Ip 客户侧网关IPv6接口地址,如果address_family是IPv6，是必选参数
    *
    * @return $this
    */
    public function setRemoteGatewayV6Ip($remoteGatewayV6Ip)
    {
        $this->container['remoteGatewayV6Ip'] = $remoteGatewayV6Ip;
        return $this;
    }

    /**
    * Gets vgwId
    *  虚拟接口连接的虚拟网关的ID
    *
    * @return string|null
    */
    public function getVgwId()
    {
        return $this->container['vgwId'];
    }

    /**
    * Sets vgwId
    *
    * @param string|null $vgwId 虚拟接口连接的虚拟网关的ID
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
        return $this;
    }

    /**
    * Gets gatewayId
    *  虚拟接口关联的网关的ID。 当虚拟接口接入网关类型为全域接入网关时该参数必填，gateway_id值为全域接入网关的id
    *
    * @return string|null
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string|null $gatewayId 虚拟接口关联的网关的ID。 当虚拟接口接入网关类型为全域接入网关时该参数必填，gateway_id值为全域接入网关的id
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets routeMode
    *  路由模式：static/bgp
    *
    * @return string
    */
    public function getRouteMode()
    {
        return $this->container['routeMode'];
    }

    /**
    * Sets routeMode
    *
    * @param string $routeMode 路由模式：static/bgp
    *
    * @return $this
    */
    public function setRouteMode($routeMode)
    {
        $this->container['routeMode'] = $routeMode;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  客户侧BGP邻居的AS号
    *
    * @return int|null
    */
    public function getBgpAsn()
    {
        return $this->container['bgpAsn'];
    }

    /**
    * Sets bgpAsn
    *
    * @param int|null $bgpAsn 客户侧BGP邻居的AS号
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets bgpMd5
    *  BGP邻居的MD5密码
    *
    * @return string|null
    */
    public function getBgpMd5()
    {
        return $this->container['bgpMd5'];
    }

    /**
    * Sets bgpMd5
    *
    * @param string|null $bgpMd5 BGP邻居的MD5密码
    *
    * @return $this
    */
    public function setBgpMd5($bgpMd5)
    {
        $this->container['bgpMd5'] = $bgpMd5;
        return $this;
    }

    /**
    * Gets remoteEpGroup
    *  远端子网列表，记录租户侧的cidrs
    *
    * @return string[]|null
    */
    public function getRemoteEpGroup()
    {
        return $this->container['remoteEpGroup'];
    }

    /**
    * Sets remoteEpGroup
    *
    * @param string[]|null $remoteEpGroup 远端子网列表，记录租户侧的cidrs
    *
    * @return $this
    */
    public function setRemoteEpGroup($remoteEpGroup)
    {
        $this->container['remoteEpGroup'] = $remoteEpGroup;
        return $this;
    }

    /**
    * Gets serviceEpGroup
    *  访问公网服务的子网列表
    *
    * @return string[]|null
    */
    public function getServiceEpGroup()
    {
        return $this->container['serviceEpGroup'];
    }

    /**
    * Sets serviceEpGroup
    *
    * @param string[]|null $serviceEpGroup 访问公网服务的子网列表
    *
    * @return $this
    */
    public function setServiceEpGroup($serviceEpGroup)
    {
        $this->container['serviceEpGroup'] = $serviceEpGroup;
        return $this;
    }

    /**
    * Gets enableBfd
    *  是否使能bfd功能：true或false。[（预留字段暂不支持）](tag:dt)
    *
    * @return bool|null
    */
    public function getEnableBfd()
    {
        return $this->container['enableBfd'];
    }

    /**
    * Sets enableBfd
    *
    * @param bool|null $enableBfd 是否使能bfd功能：true或false。[（预留字段暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setEnableBfd($enableBfd)
    {
        $this->container['enableBfd'] = $enableBfd;
        return $this;
    }

    /**
    * Gets enableNqa
    *  是否使能nqa功能：true或false。[（预留字段暂不支持）](tag:dt)
    *
    * @return bool|null
    */
    public function getEnableNqa()
    {
        return $this->container['enableNqa'];
    }

    /**
    * Sets enableNqa
    *
    * @param bool|null $enableNqa 是否使能nqa功能：true或false。[（预留字段暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setEnableNqa($enableNqa)
    {
        $this->container['enableNqa'] = $enableNqa;
        return $this;
    }

    /**
    * Gets lagId
    *  虚拟接口关联的链路聚合组ID
    *
    * @return string|null
    */
    public function getLagId()
    {
        return $this->container['lagId'];
    }

    /**
    * Sets lagId
    *
    * @param string|null $lagId 虚拟接口关联的链路聚合组ID
    *
    * @return $this
    */
    public function setLagId($lagId)
    {
        $this->container['lagId'] = $lagId;
        return $this;
    }

    /**
    * Gets resourceTenantId
    *  目标的租户的ID,用于跨租户创建虚拟接口场景
    *
    * @return string|null
    */
    public function getResourceTenantId()
    {
        return $this->container['resourceTenantId'];
    }

    /**
    * Sets resourceTenantId
    *
    * @param string|null $resourceTenantId 目标的租户的ID,用于跨租户创建虚拟接口场景
    *
    * @return $this
    */
    public function setResourceTenantId($resourceTenantId)
    {
        $this->container['resourceTenantId'] = $resourceTenantId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  实例所属企业项目ID
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
    * @param string|null $enterpriseProjectId 实例所属企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

