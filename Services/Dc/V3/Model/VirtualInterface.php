<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VirtualInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VirtualInterface';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * updateTime  虚拟接口修改时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能bfd功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * localGatewayV4Ip  云侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果资源的状态是Error的情况下，该参数会显示相关错误信息。
    * rateLimit  标识虚拟接口是否开启限速
    * addressFamily  接口的地址簇类型，ipv4，ipv6。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * localGatewayV6Ip  云侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * lgwId  本地网关的ID，用于CloudPond场景。[（功能暂不支持）](tag:dt)
    * gatewayId  虚拟接口关联的网关的ID
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * serviceEpGroup  该字段用于公网专线接口，表示租户可以访问云上公网服务地址列表。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * bgpRouteLimit  BGP的路由配置规格
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * vifPeers  vif的Peer的相关信息[（预留字段，暂不支持）](tag:dt)
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'adminStateUp' => 'bool',
            'bandwidth' => 'int',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'description' => 'string',
            'directConnectId' => 'string',
            'serviceType' => 'string',
            'status' => 'string',
            'tenantId' => 'string',
            'type' => 'string',
            'vgwId' => 'string',
            'vlan' => 'int',
            'routeLimit' => 'int',
            'enableNqa' => 'bool',
            'enableBfd' => 'bool',
            'lagId' => 'string',
            'deviceId' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dc\V3\Model\Tag[]',
            'localGatewayV4Ip' => 'string',
            'remoteGatewayV4Ip' => 'string',
            'iesId' => 'string',
            'reason' => 'string',
            'rateLimit' => 'bool',
            'addressFamily' => 'string',
            'localGatewayV6Ip' => 'string',
            'remoteGatewayV6Ip' => 'string',
            'lgwId' => 'string',
            'gatewayId' => 'string',
            'remoteEpGroup' => 'string[]',
            'serviceEpGroup' => 'string[]',
            'bgpRouteLimit' => 'int',
            'priority' => 'string',
            'vifPeers' => '\HuaweiCloud\SDK\Dc\V3\Model\VifPeer[]',
            'extendAttribute' => '\HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * updateTime  虚拟接口修改时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能bfd功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * localGatewayV4Ip  云侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果资源的状态是Error的情况下，该参数会显示相关错误信息。
    * rateLimit  标识虚拟接口是否开启限速
    * addressFamily  接口的地址簇类型，ipv4，ipv6。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * localGatewayV6Ip  云侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * lgwId  本地网关的ID，用于CloudPond场景。[（功能暂不支持）](tag:dt)
    * gatewayId  虚拟接口关联的网关的ID
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * serviceEpGroup  该字段用于公网专线接口，表示租户可以访问云上公网服务地址列表。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * bgpRouteLimit  BGP的路由配置规格
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * vifPeers  vif的Peer的相关信息[（预留字段，暂不支持）](tag:dt)
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'adminStateUp' => null,
        'bandwidth' => 'int32',
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'description' => null,
        'directConnectId' => null,
        'serviceType' => null,
        'status' => null,
        'tenantId' => null,
        'type' => null,
        'vgwId' => null,
        'vlan' => 'int32',
        'routeLimit' => 'int32',
        'enableNqa' => null,
        'enableBfd' => null,
        'lagId' => null,
        'deviceId' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'localGatewayV4Ip' => null,
        'remoteGatewayV4Ip' => null,
        'iesId' => null,
        'reason' => null,
        'rateLimit' => null,
        'addressFamily' => null,
        'localGatewayV6Ip' => null,
        'remoteGatewayV6Ip' => null,
        'lgwId' => null,
        'gatewayId' => null,
        'remoteEpGroup' => null,
        'serviceEpGroup' => null,
        'bgpRouteLimit' => 'int32',
        'priority' => null,
        'vifPeers' => null,
        'extendAttribute' => null
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
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * updateTime  虚拟接口修改时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能bfd功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * localGatewayV4Ip  云侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果资源的状态是Error的情况下，该参数会显示相关错误信息。
    * rateLimit  标识虚拟接口是否开启限速
    * addressFamily  接口的地址簇类型，ipv4，ipv6。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * localGatewayV6Ip  云侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * lgwId  本地网关的ID，用于CloudPond场景。[（功能暂不支持）](tag:dt)
    * gatewayId  虚拟接口关联的网关的ID
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * serviceEpGroup  该字段用于公网专线接口，表示租户可以访问云上公网服务地址列表。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * bgpRouteLimit  BGP的路由配置规格
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * vifPeers  vif的Peer的相关信息[（预留字段，暂不支持）](tag:dt)
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'bandwidth' => 'bandwidth',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'description' => 'description',
            'directConnectId' => 'direct_connect_id',
            'serviceType' => 'service_type',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'type' => 'type',
            'vgwId' => 'vgw_id',
            'vlan' => 'vlan',
            'routeLimit' => 'route_limit',
            'enableNqa' => 'enable_nqa',
            'enableBfd' => 'enable_bfd',
            'lagId' => 'lag_id',
            'deviceId' => 'device_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'localGatewayV4Ip' => 'local_gateway_v4_ip',
            'remoteGatewayV4Ip' => 'remote_gateway_v4_ip',
            'iesId' => 'ies_id',
            'reason' => 'reason',
            'rateLimit' => 'rate_limit',
            'addressFamily' => 'address_family',
            'localGatewayV6Ip' => 'local_gateway_v6_ip',
            'remoteGatewayV6Ip' => 'remote_gateway_v6_ip',
            'lgwId' => 'lgw_id',
            'gatewayId' => 'gateway_id',
            'remoteEpGroup' => 'remote_ep_group',
            'serviceEpGroup' => 'service_ep_group',
            'bgpRouteLimit' => 'bgp_route_limit',
            'priority' => 'priority',
            'vifPeers' => 'vif_peers',
            'extendAttribute' => 'extend_attribute'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * updateTime  虚拟接口修改时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能bfd功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * localGatewayV4Ip  云侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果资源的状态是Error的情况下，该参数会显示相关错误信息。
    * rateLimit  标识虚拟接口是否开启限速
    * addressFamily  接口的地址簇类型，ipv4，ipv6。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * localGatewayV6Ip  云侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * lgwId  本地网关的ID，用于CloudPond场景。[（功能暂不支持）](tag:dt)
    * gatewayId  虚拟接口关联的网关的ID
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * serviceEpGroup  该字段用于公网专线接口，表示租户可以访问云上公网服务地址列表。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * bgpRouteLimit  BGP的路由配置规格
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * vifPeers  vif的Peer的相关信息[（预留字段，暂不支持）](tag:dt)
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'bandwidth' => 'setBandwidth',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'description' => 'setDescription',
            'directConnectId' => 'setDirectConnectId',
            'serviceType' => 'setServiceType',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'type' => 'setType',
            'vgwId' => 'setVgwId',
            'vlan' => 'setVlan',
            'routeLimit' => 'setRouteLimit',
            'enableNqa' => 'setEnableNqa',
            'enableBfd' => 'setEnableBfd',
            'lagId' => 'setLagId',
            'deviceId' => 'setDeviceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'localGatewayV4Ip' => 'setLocalGatewayV4Ip',
            'remoteGatewayV4Ip' => 'setRemoteGatewayV4Ip',
            'iesId' => 'setIesId',
            'reason' => 'setReason',
            'rateLimit' => 'setRateLimit',
            'addressFamily' => 'setAddressFamily',
            'localGatewayV6Ip' => 'setLocalGatewayV6Ip',
            'remoteGatewayV6Ip' => 'setRemoteGatewayV6Ip',
            'lgwId' => 'setLgwId',
            'gatewayId' => 'setGatewayId',
            'remoteEpGroup' => 'setRemoteEpGroup',
            'serviceEpGroup' => 'setServiceEpGroup',
            'bgpRouteLimit' => 'setBgpRouteLimit',
            'priority' => 'setPriority',
            'vifPeers' => 'setVifPeers',
            'extendAttribute' => 'setExtendAttribute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  虚拟接口的ID
    * name  虚拟接口的名字
    * adminStateUp  管理状态：true或false
    * bandwidth  虚拟接口接入带宽
    * createTime  虚拟接口创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * updateTime  虚拟接口修改时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * description  虚拟接口的描述
    * directConnectId  物理专线的ID
    * serviceType  接入网关的类型：包括VGW,GDGW,LGW等
    * status  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
    * tenantId  租户ID
    * type  表示接口类型：private
    * vgwId  虚拟网关的ID
    * vlan  同用户网关对接的vlan, 配置范围0-3999
    * routeLimit  VIF远端子网路由配置规格
    * enableNqa  是否使能nqa功能：true或false
    * enableBfd  是否使能bfd功能：true或false
    * lagId  VIF关联的链路聚合组ID
    * deviceId  归属的设备ID
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * localGatewayV4Ip  云侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV4Ip  客户侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果资源的状态是Error的情况下，该参数会显示相关错误信息。
    * rateLimit  标识虚拟接口是否开启限速
    * addressFamily  接口的地址簇类型，ipv4，ipv6。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * localGatewayV6Ip  云侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * remoteGatewayV6Ip  客户侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * lgwId  本地网关的ID，用于CloudPond场景。[（功能暂不支持）](tag:dt)
    * gatewayId  虚拟接口关联的网关的ID
    * remoteEpGroup  远端子网列表，记录租户侧的cidrs。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * serviceEpGroup  该字段用于公网专线接口，表示租户可以访问云上公网服务地址列表。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    * bgpRouteLimit  BGP的路由配置规格
    * priority  虚拟接口的优先级，支持两种优先级状态normal和low。 接口优先级相同时表示负载关系，接口优先级不同时表示主备关系，出云流量优先转到优先级更高的normal接口。 目前仅BGP模式接口支持。
    * vifPeers  vif的Peer的相关信息[（预留字段，暂不支持）](tag:dt)
    * extendAttribute  extendAttribute
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'bandwidth' => 'getBandwidth',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'description' => 'getDescription',
            'directConnectId' => 'getDirectConnectId',
            'serviceType' => 'getServiceType',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'type' => 'getType',
            'vgwId' => 'getVgwId',
            'vlan' => 'getVlan',
            'routeLimit' => 'getRouteLimit',
            'enableNqa' => 'getEnableNqa',
            'enableBfd' => 'getEnableBfd',
            'lagId' => 'getLagId',
            'deviceId' => 'getDeviceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'localGatewayV4Ip' => 'getLocalGatewayV4Ip',
            'remoteGatewayV4Ip' => 'getRemoteGatewayV4Ip',
            'iesId' => 'getIesId',
            'reason' => 'getReason',
            'rateLimit' => 'getRateLimit',
            'addressFamily' => 'getAddressFamily',
            'localGatewayV6Ip' => 'getLocalGatewayV6Ip',
            'remoteGatewayV6Ip' => 'getRemoteGatewayV6Ip',
            'lgwId' => 'getLgwId',
            'gatewayId' => 'getGatewayId',
            'remoteEpGroup' => 'getRemoteEpGroup',
            'serviceEpGroup' => 'getServiceEpGroup',
            'bgpRouteLimit' => 'getBgpRouteLimit',
            'priority' => 'getPriority',
            'vifPeers' => 'getVifPeers',
            'extendAttribute' => 'getExtendAttribute'
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
    const SERVICE_TYPE_VGW = 'VGW';
    const SERVICE_TYPE_GDGW = 'GDGW';
    const SERVICE_TYPE_LGW = 'LGW';
    const TYPE__PRIVATE = 'private';
    const TYPE__PUBLIC = 'public';
    const PRIORITY_NORMAL = 'normal';
    const PRIORITY_LOW = 'low';
    

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
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY_NORMAL,
            self::PRIORITY_LOW,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['directConnectId'] = isset($data['directConnectId']) ? $data['directConnectId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['vlan'] = isset($data['vlan']) ? $data['vlan'] : null;
        $this->container['routeLimit'] = isset($data['routeLimit']) ? $data['routeLimit'] : null;
        $this->container['enableNqa'] = isset($data['enableNqa']) ? $data['enableNqa'] : null;
        $this->container['enableBfd'] = isset($data['enableBfd']) ? $data['enableBfd'] : null;
        $this->container['lagId'] = isset($data['lagId']) ? $data['lagId'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['localGatewayV4Ip'] = isset($data['localGatewayV4Ip']) ? $data['localGatewayV4Ip'] : null;
        $this->container['remoteGatewayV4Ip'] = isset($data['remoteGatewayV4Ip']) ? $data['remoteGatewayV4Ip'] : null;
        $this->container['iesId'] = isset($data['iesId']) ? $data['iesId'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['rateLimit'] = isset($data['rateLimit']) ? $data['rateLimit'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['localGatewayV6Ip'] = isset($data['localGatewayV6Ip']) ? $data['localGatewayV6Ip'] : null;
        $this->container['remoteGatewayV6Ip'] = isset($data['remoteGatewayV6Ip']) ? $data['remoteGatewayV6Ip'] : null;
        $this->container['lgwId'] = isset($data['lgwId']) ? $data['lgwId'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['remoteEpGroup'] = isset($data['remoteEpGroup']) ? $data['remoteEpGroup'] : null;
        $this->container['serviceEpGroup'] = isset($data['serviceEpGroup']) ? $data['serviceEpGroup'] : null;
        $this->container['bgpRouteLimit'] = isset($data['bgpRouteLimit']) ? $data['bgpRouteLimit'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['vifPeers'] = isset($data['vifPeers']) ? $data['vifPeers'] : null;
        $this->container['extendAttribute'] = isset($data['extendAttribute']) ? $data['extendAttribute'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['directConnectId']) && (mb_strlen($this->container['directConnectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'directConnectId', the character length must be smaller than or equal to 36.";
            }
            $allowedValues = $this->getServiceTypeAllowableValues();
                if (!is_null($this->container['serviceType']) && !in_array($this->container['serviceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 255)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['vgwId']) && (mb_strlen($this->container['vgwId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vgwId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vgwId']) && (mb_strlen($this->container['vgwId']) < 36)) {
                $invalidProperties[] = "invalid value for 'vgwId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['vlan']) && ($this->container['vlan'] > 3999)) {
                $invalidProperties[] = "invalid value for 'vlan', must be smaller than or equal to 3999.";
            }
            if (!is_null($this->container['vlan']) && ($this->container['vlan'] < 0)) {
                $invalidProperties[] = "invalid value for 'vlan', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['routeLimit']) && ($this->container['routeLimit'] > 200)) {
                $invalidProperties[] = "invalid value for 'routeLimit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['routeLimit']) && ($this->container['routeLimit'] < 1)) {
                $invalidProperties[] = "invalid value for 'routeLimit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['lagId']) && (mb_strlen($this->container['lagId']) > 36)) {
                $invalidProperties[] = "invalid value for 'lagId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['lagId']) && (mb_strlen($this->container['lagId']) < 36)) {
                $invalidProperties[] = "invalid value for 'lagId', the character length must be bigger than or equal to 36.";
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
            $allowedValues = $this->getPriorityAllowableValues();
                if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'priority', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  虚拟接口的ID
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
    * @param string|null $id 虚拟接口的ID
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
    *  虚拟接口的名字
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
    * @param string|null $name 虚拟接口的名字
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
    *  管理状态：true或false
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
    * @param bool|null $adminStateUp 管理状态：true或false
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets bandwidth
    *  虚拟接口接入带宽
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 虚拟接口接入带宽
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets createTime
    *  虚拟接口创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 虚拟接口创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
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
    *  虚拟接口修改时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 虚拟接口修改时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets description
    *  虚拟接口的描述
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
    * @param string|null $description 虚拟接口的描述
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
    *  物理专线的ID
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
    * @param string|null $directConnectId 物理专线的ID
    *
    * @return $this
    */
    public function setDirectConnectId($directConnectId)
    {
        $this->container['directConnectId'] = $directConnectId;
        return $this;
    }

    /**
    * Gets serviceType
    *  接入网关的类型：包括VGW,GDGW,LGW等
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
    * @param string|null $serviceType 接入网关的类型：包括VGW,GDGW,LGW等
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets status
    *  操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
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
    * @param string|null $status 操作状态，合法值是：ACTIVE，DOWN，BUILD，ERROR，PENDING_CREATE，PENDING_UPDATE，PENDING_DELETE，DELETED，AUTHORIZATION，REJECTED
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
    * Gets type
    *  表示接口类型：private
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 表示接口类型：private
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vgwId
    *  虚拟网关的ID
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
    * @param string|null $vgwId 虚拟网关的ID
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
        return $this;
    }

    /**
    * Gets vlan
    *  同用户网关对接的vlan, 配置范围0-3999
    *
    * @return int|null
    */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
    * Sets vlan
    *
    * @param int|null $vlan 同用户网关对接的vlan, 配置范围0-3999
    *
    * @return $this
    */
    public function setVlan($vlan)
    {
        $this->container['vlan'] = $vlan;
        return $this;
    }

    /**
    * Gets routeLimit
    *  VIF远端子网路由配置规格
    *
    * @return int|null
    */
    public function getRouteLimit()
    {
        return $this->container['routeLimit'];
    }

    /**
    * Sets routeLimit
    *
    * @param int|null $routeLimit VIF远端子网路由配置规格
    *
    * @return $this
    */
    public function setRouteLimit($routeLimit)
    {
        $this->container['routeLimit'] = $routeLimit;
        return $this;
    }

    /**
    * Gets enableNqa
    *  是否使能nqa功能：true或false
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
    * @param bool|null $enableNqa 是否使能nqa功能：true或false
    *
    * @return $this
    */
    public function setEnableNqa($enableNqa)
    {
        $this->container['enableNqa'] = $enableNqa;
        return $this;
    }

    /**
    * Gets enableBfd
    *  是否使能bfd功能：true或false
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
    * @param bool|null $enableBfd 是否使能bfd功能：true或false
    *
    * @return $this
    */
    public function setEnableBfd($enableBfd)
    {
        $this->container['enableBfd'] = $enableBfd;
        return $this;
    }

    /**
    * Gets lagId
    *  VIF关联的链路聚合组ID
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
    * @param string|null $lagId VIF关联的链路聚合组ID
    *
    * @return $this
    */
    public function setLagId($lagId)
    {
        $this->container['lagId'] = $lagId;
        return $this;
    }

    /**
    * Gets deviceId
    *  归属的设备ID
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
    * @param string|null $deviceId 归属的设备ID
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
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
    * Gets localGatewayV4Ip
    *  云侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
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
    * @param string|null $localGatewayV4Ip 云侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
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
    *  客户侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
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
    * @param string|null $remoteGatewayV4Ip 客户侧网关IPv4接口地址，该字段现已经移到vifpeer参数列表中，未来将会废弃。
    *
    * @return $this
    */
    public function setRemoteGatewayV4Ip($remoteGatewayV4Ip)
    {
        $this->container['remoteGatewayV4Ip'] = $remoteGatewayV4Ip;
        return $this;
    }

    /**
    * Gets iesId
    *  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getIesId()
    {
        return $this->container['iesId'];
    }

    /**
    * Sets iesId
    *
    * @param string|null $iesId 归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setIesId($iesId)
    {
        $this->container['iesId'] = $iesId;
        return $this;
    }

    /**
    * Gets reason
    *  如果资源的状态是Error的情况下，该参数会显示相关错误信息。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 如果资源的状态是Error的情况下，该参数会显示相关错误信息。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets rateLimit
    *  标识虚拟接口是否开启限速
    *
    * @return bool|null
    */
    public function getRateLimit()
    {
        return $this->container['rateLimit'];
    }

    /**
    * Sets rateLimit
    *
    * @param bool|null $rateLimit 标识虚拟接口是否开启限速
    *
    * @return $this
    */
    public function setRateLimit($rateLimit)
    {
        $this->container['rateLimit'] = $rateLimit;
        return $this;
    }

    /**
    * Gets addressFamily
    *  接口的地址簇类型，ipv4，ipv6。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
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
    * @param string|null $addressFamily 接口的地址簇类型，ipv4，ipv6。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
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
    *  云侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
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
    * @param string|null $localGatewayV6Ip 云侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
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
    *  客户侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
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
    * @param string|null $remoteGatewayV6Ip 客户侧网关IPv6接口地址，该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    *
    * @return $this
    */
    public function setRemoteGatewayV6Ip($remoteGatewayV6Ip)
    {
        $this->container['remoteGatewayV6Ip'] = $remoteGatewayV6Ip;
        return $this;
    }

    /**
    * Gets lgwId
    *  本地网关的ID，用于CloudPond场景。[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getLgwId()
    {
        return $this->container['lgwId'];
    }

    /**
    * Sets lgwId
    *
    * @param string|null $lgwId 本地网关的ID，用于CloudPond场景。[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setLgwId($lgwId)
    {
        $this->container['lgwId'] = $lgwId;
        return $this;
    }

    /**
    * Gets gatewayId
    *  虚拟接口关联的网关的ID
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
    * @param string|null $gatewayId 虚拟接口关联的网关的ID
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets remoteEpGroup
    *  远端子网列表，记录租户侧的cidrs。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
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
    * @param string[]|null $remoteEpGroup 远端子网列表，记录租户侧的cidrs。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
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
    *  该字段用于公网专线接口，表示租户可以访问云上公网服务地址列表。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
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
    * @param string[]|null $serviceEpGroup 该字段用于公网专线接口，表示租户可以访问云上公网服务地址列表。该字段现已迁移到vifpeer参数列表中，未来将会废弃。
    *
    * @return $this
    */
    public function setServiceEpGroup($serviceEpGroup)
    {
        $this->container['serviceEpGroup'] = $serviceEpGroup;
        return $this;
    }

    /**
    * Gets bgpRouteLimit
    *  BGP的路由配置规格
    *
    * @return int|null
    */
    public function getBgpRouteLimit()
    {
        return $this->container['bgpRouteLimit'];
    }

    /**
    * Sets bgpRouteLimit
    *
    * @param int|null $bgpRouteLimit BGP的路由配置规格
    *
    * @return $this
    */
    public function setBgpRouteLimit($bgpRouteLimit)
    {
        $this->container['bgpRouteLimit'] = $bgpRouteLimit;
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
    * Gets vifPeers
    *  vif的Peer的相关信息[（预留字段，暂不支持）](tag:dt)
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\VifPeer[]|null
    */
    public function getVifPeers()
    {
        return $this->container['vifPeers'];
    }

    /**
    * Sets vifPeers
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\VifPeer[]|null $vifPeers vif的Peer的相关信息[（预留字段，暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setVifPeers($vifPeers)
    {
        $this->container['vifPeers'] = $vifPeers;
        return $this;
    }

    /**
    * Gets extendAttribute
    *  extendAttribute
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute|null
    */
    public function getExtendAttribute()
    {
        return $this->container['extendAttribute'];
    }

    /**
    * Sets extendAttribute
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\VifExtendAttribute|null $extendAttribute extendAttribute
    *
    * @return $this
    */
    public function setExtendAttribute($extendAttribute)
    {
        $this->container['extendAttribute'] = $extendAttribute;
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

