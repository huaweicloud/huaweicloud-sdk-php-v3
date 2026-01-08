<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VpcQuotas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VpcQuotas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aclPolicyContainRules  **参数解释**： 网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroup  **参数解释**： IP地址组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroupContainIpset  **参数解释**： IP地址组包含的IP地址集数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnFirewallGroup  **参数解释**： CloudDCN场景的网络ACL数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnAclPolicyContainRules  **参数解释**： CloudDCN场景的网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * edgeGateway  **参数解释**： 边缘网关数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * eniContainSecgroup  **参数解释**： 弹性网卡关联的安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv4CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv4规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv6CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv6规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicy  **参数解释**： 云转发策略数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicyContainPorts  **参数解释**： 云转发策略关联端口数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardRule  **参数解释**： 云转发规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * peering  **参数解释**： 对等连接数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * roceClusterContainNetworks  **参数解释**： 一个physical_network下支持创建的roce网络数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * rtbAllowSysCidrRoutes  **参数解释**： 路由表支持系统路由数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidth  **参数解释**： 共享带宽组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidthContainPublicip  **参数解释**： 单个共享带宽关联的弹性公网IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupContainRules  **参数解释**： 单个安全组包含的规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupReferredByNic  **参数解释**： 单个安全组关联的网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroup  **参数解释**： 安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4出方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6出方向规则数配。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupRule  **参数解释**： 安全组规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * subnetContainEni  **参数解释**： 单个子网包含的弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilter  **参数解释**： 流量镜像筛选条件数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterReferredBySession  **参数解释**： 单个流量镜像筛选条件被镜像会话引用数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterContainRulesEachDirection  **参数解释**： 流量镜像筛选条件单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSession  **参数解释**： 流量镜像会话数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSessionContainSources  **参数解释**： 单个流量镜像会话关联的镜像源数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSourceReferredBySession  **参数解释**： 单个镜像源被流量镜像会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetElbReferredBySession  **参数解释**： 私网弹性负载均衡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetEniReferredBySession  **参数解释**： 弹性网卡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vip  **参数解释**： 虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnet  **参数解释**： 子网数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * virsubnetContainIpv4CidrReservations  **参数解释**： 单子网包含IPv4子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnetContainIpv6CidrReservations  **参数解释**： 单子网包含IPv6子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpc  **参数解释**： VPC数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * vpcContainEni  **参数解释**： 单个VPC包含弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVip  **参数解释**： 单个VPC包含虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVirsubnet  **参数解释**： 单个VPC包含子网数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aclPolicyContainRules' => 'int',
            'addressGroup' => 'int',
            'addressGroupContainIpset' => 'int',
            'clouddcnFirewallGroup' => 'int',
            'clouddcnAclPolicyContainRules' => 'int',
            'edgeGateway' => 'int',
            'eniContainSecgroup' => 'int',
            'firewallPolicyContainIpv4CompositeRules' => 'int',
            'firewallPolicyContainIpv6CompositeRules' => 'int',
            'forwardPolicy' => 'int',
            'forwardPolicyContainPorts' => 'int',
            'forwardRule' => 'int',
            'peering' => 'int',
            'roceClusterContainNetworks' => 'int',
            'rtbAllowSysCidrRoutes' => 'int',
            'sharedBandwidth' => 'int',
            'sharedBandwidthContainPublicip' => 'int',
            'secgroupContainRules' => 'int',
            'secgroupReferredByNic' => 'int',
            'securityGroup' => 'int',
            'securityGroupContainEgressIpv4CompositeRules' => 'int',
            'securityGroupContainEgressIpv6CompositeRules' => 'int',
            'securityGroupContainIngressIpv4CompositeRules' => 'int',
            'securityGroupContainIngressIpv6CompositeRules' => 'int',
            'securityGroupRule' => 'int',
            'subnetContainEni' => 'int',
            'trafficMirrorFilter' => 'int',
            'trafficMirrorFilterReferredBySession' => 'int',
            'trafficMirrorFilterContainRulesEachDirection' => 'int',
            'trafficMirrorSession' => 'int',
            'trafficMirrorSessionContainSources' => 'int',
            'trafficMirrorSourceReferredBySession' => 'int',
            'trafficMirrorTargetElbReferredBySession' => 'int',
            'trafficMirrorTargetEniReferredBySession' => 'int',
            'vip' => 'int',
            'virsubnet' => 'int',
            'virsubnetContainIpv4CidrReservations' => 'int',
            'virsubnetContainIpv6CidrReservations' => 'int',
            'vpc' => 'int',
            'vpcContainEni' => 'int',
            'vpcContainVip' => 'int',
            'vpcContainVirsubnet' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aclPolicyContainRules  **参数解释**： 网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroup  **参数解释**： IP地址组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroupContainIpset  **参数解释**： IP地址组包含的IP地址集数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnFirewallGroup  **参数解释**： CloudDCN场景的网络ACL数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnAclPolicyContainRules  **参数解释**： CloudDCN场景的网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * edgeGateway  **参数解释**： 边缘网关数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * eniContainSecgroup  **参数解释**： 弹性网卡关联的安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv4CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv4规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv6CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv6规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicy  **参数解释**： 云转发策略数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicyContainPorts  **参数解释**： 云转发策略关联端口数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardRule  **参数解释**： 云转发规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * peering  **参数解释**： 对等连接数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * roceClusterContainNetworks  **参数解释**： 一个physical_network下支持创建的roce网络数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * rtbAllowSysCidrRoutes  **参数解释**： 路由表支持系统路由数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidth  **参数解释**： 共享带宽组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidthContainPublicip  **参数解释**： 单个共享带宽关联的弹性公网IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupContainRules  **参数解释**： 单个安全组包含的规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupReferredByNic  **参数解释**： 单个安全组关联的网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroup  **参数解释**： 安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4出方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6出方向规则数配。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupRule  **参数解释**： 安全组规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * subnetContainEni  **参数解释**： 单个子网包含的弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilter  **参数解释**： 流量镜像筛选条件数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterReferredBySession  **参数解释**： 单个流量镜像筛选条件被镜像会话引用数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterContainRulesEachDirection  **参数解释**： 流量镜像筛选条件单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSession  **参数解释**： 流量镜像会话数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSessionContainSources  **参数解释**： 单个流量镜像会话关联的镜像源数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSourceReferredBySession  **参数解释**： 单个镜像源被流量镜像会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetElbReferredBySession  **参数解释**： 私网弹性负载均衡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetEniReferredBySession  **参数解释**： 弹性网卡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vip  **参数解释**： 虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnet  **参数解释**： 子网数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * virsubnetContainIpv4CidrReservations  **参数解释**： 单子网包含IPv4子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnetContainIpv6CidrReservations  **参数解释**： 单子网包含IPv6子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpc  **参数解释**： VPC数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * vpcContainEni  **参数解释**： 单个VPC包含弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVip  **参数解释**： 单个VPC包含虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVirsubnet  **参数解释**： 单个VPC包含子网数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aclPolicyContainRules' => 'int32',
        'addressGroup' => null,
        'addressGroupContainIpset' => null,
        'clouddcnFirewallGroup' => null,
        'clouddcnAclPolicyContainRules' => null,
        'edgeGateway' => null,
        'eniContainSecgroup' => null,
        'firewallPolicyContainIpv4CompositeRules' => null,
        'firewallPolicyContainIpv6CompositeRules' => null,
        'forwardPolicy' => null,
        'forwardPolicyContainPorts' => null,
        'forwardRule' => null,
        'peering' => null,
        'roceClusterContainNetworks' => null,
        'rtbAllowSysCidrRoutes' => null,
        'sharedBandwidth' => null,
        'sharedBandwidthContainPublicip' => null,
        'secgroupContainRules' => null,
        'secgroupReferredByNic' => null,
        'securityGroup' => null,
        'securityGroupContainEgressIpv4CompositeRules' => null,
        'securityGroupContainEgressIpv6CompositeRules' => null,
        'securityGroupContainIngressIpv4CompositeRules' => null,
        'securityGroupContainIngressIpv6CompositeRules' => null,
        'securityGroupRule' => null,
        'subnetContainEni' => null,
        'trafficMirrorFilter' => null,
        'trafficMirrorFilterReferredBySession' => null,
        'trafficMirrorFilterContainRulesEachDirection' => null,
        'trafficMirrorSession' => null,
        'trafficMirrorSessionContainSources' => null,
        'trafficMirrorSourceReferredBySession' => null,
        'trafficMirrorTargetElbReferredBySession' => null,
        'trafficMirrorTargetEniReferredBySession' => null,
        'vip' => null,
        'virsubnet' => null,
        'virsubnetContainIpv4CidrReservations' => null,
        'virsubnetContainIpv6CidrReservations' => null,
        'vpc' => null,
        'vpcContainEni' => null,
        'vpcContainVip' => null,
        'vpcContainVirsubnet' => null
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
    * aclPolicyContainRules  **参数解释**： 网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroup  **参数解释**： IP地址组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroupContainIpset  **参数解释**： IP地址组包含的IP地址集数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnFirewallGroup  **参数解释**： CloudDCN场景的网络ACL数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnAclPolicyContainRules  **参数解释**： CloudDCN场景的网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * edgeGateway  **参数解释**： 边缘网关数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * eniContainSecgroup  **参数解释**： 弹性网卡关联的安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv4CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv4规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv6CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv6规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicy  **参数解释**： 云转发策略数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicyContainPorts  **参数解释**： 云转发策略关联端口数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardRule  **参数解释**： 云转发规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * peering  **参数解释**： 对等连接数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * roceClusterContainNetworks  **参数解释**： 一个physical_network下支持创建的roce网络数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * rtbAllowSysCidrRoutes  **参数解释**： 路由表支持系统路由数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidth  **参数解释**： 共享带宽组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidthContainPublicip  **参数解释**： 单个共享带宽关联的弹性公网IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupContainRules  **参数解释**： 单个安全组包含的规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupReferredByNic  **参数解释**： 单个安全组关联的网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroup  **参数解释**： 安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4出方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6出方向规则数配。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupRule  **参数解释**： 安全组规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * subnetContainEni  **参数解释**： 单个子网包含的弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilter  **参数解释**： 流量镜像筛选条件数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterReferredBySession  **参数解释**： 单个流量镜像筛选条件被镜像会话引用数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterContainRulesEachDirection  **参数解释**： 流量镜像筛选条件单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSession  **参数解释**： 流量镜像会话数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSessionContainSources  **参数解释**： 单个流量镜像会话关联的镜像源数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSourceReferredBySession  **参数解释**： 单个镜像源被流量镜像会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetElbReferredBySession  **参数解释**： 私网弹性负载均衡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetEniReferredBySession  **参数解释**： 弹性网卡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vip  **参数解释**： 虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnet  **参数解释**： 子网数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * virsubnetContainIpv4CidrReservations  **参数解释**： 单子网包含IPv4子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnetContainIpv6CidrReservations  **参数解释**： 单子网包含IPv6子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpc  **参数解释**： VPC数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * vpcContainEni  **参数解释**： 单个VPC包含弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVip  **参数解释**： 单个VPC包含虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVirsubnet  **参数解释**： 单个VPC包含子网数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aclPolicyContainRules' => 'acl_policy_contain_rules',
            'addressGroup' => 'address_group',
            'addressGroupContainIpset' => 'address_group_contain_ipset',
            'clouddcnFirewallGroup' => 'clouddcn_firewall_group',
            'clouddcnAclPolicyContainRules' => 'clouddcn_acl_policy_contain_rules',
            'edgeGateway' => 'edge_gateway',
            'eniContainSecgroup' => 'eni_contain_secgroup',
            'firewallPolicyContainIpv4CompositeRules' => 'firewall_policy_contain_ipv4_composite_rules',
            'firewallPolicyContainIpv6CompositeRules' => 'firewall_policy_contain_ipv6_composite_rules',
            'forwardPolicy' => 'forward_policy',
            'forwardPolicyContainPorts' => 'forward_policy_contain_ports',
            'forwardRule' => 'forward_rule',
            'peering' => 'peering',
            'roceClusterContainNetworks' => 'roce_cluster_contain_networks',
            'rtbAllowSysCidrRoutes' => 'rtb_allow_sys_cidr_routes',
            'sharedBandwidth' => 'shared_bandwidth',
            'sharedBandwidthContainPublicip' => 'shared_bandwidth_contain_publicip',
            'secgroupContainRules' => 'secgroup_contain_rules',
            'secgroupReferredByNic' => 'secgroup_referred_by_nic',
            'securityGroup' => 'security_group',
            'securityGroupContainEgressIpv4CompositeRules' => 'security_group_contain_egress_ipv4_composite_rules',
            'securityGroupContainEgressIpv6CompositeRules' => 'security_group_contain_egress_ipv6_composite_rules',
            'securityGroupContainIngressIpv4CompositeRules' => 'security_group_contain_ingress_ipv4_composite_rules',
            'securityGroupContainIngressIpv6CompositeRules' => 'security_group_contain_ingress_ipv6_composite_rules',
            'securityGroupRule' => 'security_group_rule',
            'subnetContainEni' => 'subnet_contain_eni',
            'trafficMirrorFilter' => 'traffic_mirror_filter',
            'trafficMirrorFilterReferredBySession' => 'traffic_mirror_filter_referred_by_session',
            'trafficMirrorFilterContainRulesEachDirection' => 'traffic_mirror_filter_contain_rules_each_direction',
            'trafficMirrorSession' => 'traffic_mirror_session',
            'trafficMirrorSessionContainSources' => 'traffic_mirror_session_contain_sources',
            'trafficMirrorSourceReferredBySession' => 'traffic_mirror_source_referred_by_session',
            'trafficMirrorTargetElbReferredBySession' => 'traffic_mirror_target_elb_referred_by_session',
            'trafficMirrorTargetEniReferredBySession' => 'traffic_mirror_target_eni_referred_by_session',
            'vip' => 'vip',
            'virsubnet' => 'virsubnet',
            'virsubnetContainIpv4CidrReservations' => 'virsubnet_contain_ipv4_cidr_reservations',
            'virsubnetContainIpv6CidrReservations' => 'virsubnet_contain_ipv6_cidr_reservations',
            'vpc' => 'vpc',
            'vpcContainEni' => 'vpc_contain_eni',
            'vpcContainVip' => 'vpc_contain_vip',
            'vpcContainVirsubnet' => 'vpc_contain_virsubnet'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aclPolicyContainRules  **参数解释**： 网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroup  **参数解释**： IP地址组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroupContainIpset  **参数解释**： IP地址组包含的IP地址集数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnFirewallGroup  **参数解释**： CloudDCN场景的网络ACL数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnAclPolicyContainRules  **参数解释**： CloudDCN场景的网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * edgeGateway  **参数解释**： 边缘网关数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * eniContainSecgroup  **参数解释**： 弹性网卡关联的安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv4CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv4规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv6CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv6规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicy  **参数解释**： 云转发策略数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicyContainPorts  **参数解释**： 云转发策略关联端口数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardRule  **参数解释**： 云转发规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * peering  **参数解释**： 对等连接数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * roceClusterContainNetworks  **参数解释**： 一个physical_network下支持创建的roce网络数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * rtbAllowSysCidrRoutes  **参数解释**： 路由表支持系统路由数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidth  **参数解释**： 共享带宽组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidthContainPublicip  **参数解释**： 单个共享带宽关联的弹性公网IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupContainRules  **参数解释**： 单个安全组包含的规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupReferredByNic  **参数解释**： 单个安全组关联的网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroup  **参数解释**： 安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4出方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6出方向规则数配。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupRule  **参数解释**： 安全组规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * subnetContainEni  **参数解释**： 单个子网包含的弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilter  **参数解释**： 流量镜像筛选条件数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterReferredBySession  **参数解释**： 单个流量镜像筛选条件被镜像会话引用数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterContainRulesEachDirection  **参数解释**： 流量镜像筛选条件单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSession  **参数解释**： 流量镜像会话数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSessionContainSources  **参数解释**： 单个流量镜像会话关联的镜像源数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSourceReferredBySession  **参数解释**： 单个镜像源被流量镜像会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetElbReferredBySession  **参数解释**： 私网弹性负载均衡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetEniReferredBySession  **参数解释**： 弹性网卡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vip  **参数解释**： 虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnet  **参数解释**： 子网数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * virsubnetContainIpv4CidrReservations  **参数解释**： 单子网包含IPv4子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnetContainIpv6CidrReservations  **参数解释**： 单子网包含IPv6子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpc  **参数解释**： VPC数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * vpcContainEni  **参数解释**： 单个VPC包含弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVip  **参数解释**： 单个VPC包含虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVirsubnet  **参数解释**： 单个VPC包含子网数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @var string[]
    */
    protected static $setters = [
            'aclPolicyContainRules' => 'setAclPolicyContainRules',
            'addressGroup' => 'setAddressGroup',
            'addressGroupContainIpset' => 'setAddressGroupContainIpset',
            'clouddcnFirewallGroup' => 'setClouddcnFirewallGroup',
            'clouddcnAclPolicyContainRules' => 'setClouddcnAclPolicyContainRules',
            'edgeGateway' => 'setEdgeGateway',
            'eniContainSecgroup' => 'setEniContainSecgroup',
            'firewallPolicyContainIpv4CompositeRules' => 'setFirewallPolicyContainIpv4CompositeRules',
            'firewallPolicyContainIpv6CompositeRules' => 'setFirewallPolicyContainIpv6CompositeRules',
            'forwardPolicy' => 'setForwardPolicy',
            'forwardPolicyContainPorts' => 'setForwardPolicyContainPorts',
            'forwardRule' => 'setForwardRule',
            'peering' => 'setPeering',
            'roceClusterContainNetworks' => 'setRoceClusterContainNetworks',
            'rtbAllowSysCidrRoutes' => 'setRtbAllowSysCidrRoutes',
            'sharedBandwidth' => 'setSharedBandwidth',
            'sharedBandwidthContainPublicip' => 'setSharedBandwidthContainPublicip',
            'secgroupContainRules' => 'setSecgroupContainRules',
            'secgroupReferredByNic' => 'setSecgroupReferredByNic',
            'securityGroup' => 'setSecurityGroup',
            'securityGroupContainEgressIpv4CompositeRules' => 'setSecurityGroupContainEgressIpv4CompositeRules',
            'securityGroupContainEgressIpv6CompositeRules' => 'setSecurityGroupContainEgressIpv6CompositeRules',
            'securityGroupContainIngressIpv4CompositeRules' => 'setSecurityGroupContainIngressIpv4CompositeRules',
            'securityGroupContainIngressIpv6CompositeRules' => 'setSecurityGroupContainIngressIpv6CompositeRules',
            'securityGroupRule' => 'setSecurityGroupRule',
            'subnetContainEni' => 'setSubnetContainEni',
            'trafficMirrorFilter' => 'setTrafficMirrorFilter',
            'trafficMirrorFilterReferredBySession' => 'setTrafficMirrorFilterReferredBySession',
            'trafficMirrorFilterContainRulesEachDirection' => 'setTrafficMirrorFilterContainRulesEachDirection',
            'trafficMirrorSession' => 'setTrafficMirrorSession',
            'trafficMirrorSessionContainSources' => 'setTrafficMirrorSessionContainSources',
            'trafficMirrorSourceReferredBySession' => 'setTrafficMirrorSourceReferredBySession',
            'trafficMirrorTargetElbReferredBySession' => 'setTrafficMirrorTargetElbReferredBySession',
            'trafficMirrorTargetEniReferredBySession' => 'setTrafficMirrorTargetEniReferredBySession',
            'vip' => 'setVip',
            'virsubnet' => 'setVirsubnet',
            'virsubnetContainIpv4CidrReservations' => 'setVirsubnetContainIpv4CidrReservations',
            'virsubnetContainIpv6CidrReservations' => 'setVirsubnetContainIpv6CidrReservations',
            'vpc' => 'setVpc',
            'vpcContainEni' => 'setVpcContainEni',
            'vpcContainVip' => 'setVpcContainVip',
            'vpcContainVirsubnet' => 'setVpcContainVirsubnet'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aclPolicyContainRules  **参数解释**： 网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroup  **参数解释**： IP地址组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * addressGroupContainIpset  **参数解释**： IP地址组包含的IP地址集数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnFirewallGroup  **参数解释**： CloudDCN场景的网络ACL数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * clouddcnAclPolicyContainRules  **参数解释**： CloudDCN场景的网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * edgeGateway  **参数解释**： 边缘网关数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * eniContainSecgroup  **参数解释**： 弹性网卡关联的安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv4CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv4规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * firewallPolicyContainIpv6CompositeRules  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv6规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicy  **参数解释**： 云转发策略数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardPolicyContainPorts  **参数解释**： 云转发策略关联端口数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * forwardRule  **参数解释**： 云转发规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * peering  **参数解释**： 对等连接数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * roceClusterContainNetworks  **参数解释**： 一个physical_network下支持创建的roce网络数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * rtbAllowSysCidrRoutes  **参数解释**： 路由表支持系统路由数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidth  **参数解释**： 共享带宽组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * sharedBandwidthContainPublicip  **参数解释**： 单个共享带宽关联的弹性公网IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupContainRules  **参数解释**： 单个安全组包含的规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * secgroupReferredByNic  **参数解释**： 单个安全组关联的网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroup  **参数解释**： 安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4出方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainEgressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6出方向规则数配。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv4CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupContainIngressIpv6CompositeRules  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * securityGroupRule  **参数解释**： 安全组规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * subnetContainEni  **参数解释**： 单个子网包含的弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilter  **参数解释**： 流量镜像筛选条件数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterReferredBySession  **参数解释**： 单个流量镜像筛选条件被镜像会话引用数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorFilterContainRulesEachDirection  **参数解释**： 流量镜像筛选条件单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSession  **参数解释**： 流量镜像会话数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSessionContainSources  **参数解释**： 单个流量镜像会话关联的镜像源数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorSourceReferredBySession  **参数解释**： 单个镜像源被流量镜像会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetElbReferredBySession  **参数解释**： 私网弹性负载均衡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * trafficMirrorTargetEniReferredBySession  **参数解释**： 弹性网卡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vip  **参数解释**： 虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnet  **参数解释**： 子网数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * virsubnetContainIpv4CidrReservations  **参数解释**： 单子网包含IPv4子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * virsubnetContainIpv6CidrReservations  **参数解释**： 单子网包含IPv6子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpc  **参数解释**： VPC数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    * vpcContainEni  **参数解释**： 单个VPC包含弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVip  **参数解释**： 单个VPC包含虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    * vpcContainVirsubnet  **参数解释**： 单个VPC包含子网数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @var string[]
    */
    protected static $getters = [
            'aclPolicyContainRules' => 'getAclPolicyContainRules',
            'addressGroup' => 'getAddressGroup',
            'addressGroupContainIpset' => 'getAddressGroupContainIpset',
            'clouddcnFirewallGroup' => 'getClouddcnFirewallGroup',
            'clouddcnAclPolicyContainRules' => 'getClouddcnAclPolicyContainRules',
            'edgeGateway' => 'getEdgeGateway',
            'eniContainSecgroup' => 'getEniContainSecgroup',
            'firewallPolicyContainIpv4CompositeRules' => 'getFirewallPolicyContainIpv4CompositeRules',
            'firewallPolicyContainIpv6CompositeRules' => 'getFirewallPolicyContainIpv6CompositeRules',
            'forwardPolicy' => 'getForwardPolicy',
            'forwardPolicyContainPorts' => 'getForwardPolicyContainPorts',
            'forwardRule' => 'getForwardRule',
            'peering' => 'getPeering',
            'roceClusterContainNetworks' => 'getRoceClusterContainNetworks',
            'rtbAllowSysCidrRoutes' => 'getRtbAllowSysCidrRoutes',
            'sharedBandwidth' => 'getSharedBandwidth',
            'sharedBandwidthContainPublicip' => 'getSharedBandwidthContainPublicip',
            'secgroupContainRules' => 'getSecgroupContainRules',
            'secgroupReferredByNic' => 'getSecgroupReferredByNic',
            'securityGroup' => 'getSecurityGroup',
            'securityGroupContainEgressIpv4CompositeRules' => 'getSecurityGroupContainEgressIpv4CompositeRules',
            'securityGroupContainEgressIpv6CompositeRules' => 'getSecurityGroupContainEgressIpv6CompositeRules',
            'securityGroupContainIngressIpv4CompositeRules' => 'getSecurityGroupContainIngressIpv4CompositeRules',
            'securityGroupContainIngressIpv6CompositeRules' => 'getSecurityGroupContainIngressIpv6CompositeRules',
            'securityGroupRule' => 'getSecurityGroupRule',
            'subnetContainEni' => 'getSubnetContainEni',
            'trafficMirrorFilter' => 'getTrafficMirrorFilter',
            'trafficMirrorFilterReferredBySession' => 'getTrafficMirrorFilterReferredBySession',
            'trafficMirrorFilterContainRulesEachDirection' => 'getTrafficMirrorFilterContainRulesEachDirection',
            'trafficMirrorSession' => 'getTrafficMirrorSession',
            'trafficMirrorSessionContainSources' => 'getTrafficMirrorSessionContainSources',
            'trafficMirrorSourceReferredBySession' => 'getTrafficMirrorSourceReferredBySession',
            'trafficMirrorTargetElbReferredBySession' => 'getTrafficMirrorTargetElbReferredBySession',
            'trafficMirrorTargetEniReferredBySession' => 'getTrafficMirrorTargetEniReferredBySession',
            'vip' => 'getVip',
            'virsubnet' => 'getVirsubnet',
            'virsubnetContainIpv4CidrReservations' => 'getVirsubnetContainIpv4CidrReservations',
            'virsubnetContainIpv6CidrReservations' => 'getVirsubnetContainIpv6CidrReservations',
            'vpc' => 'getVpc',
            'vpcContainEni' => 'getVpcContainEni',
            'vpcContainVip' => 'getVpcContainVip',
            'vpcContainVirsubnet' => 'getVpcContainVirsubnet'
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
        $this->container['aclPolicyContainRules'] = isset($data['aclPolicyContainRules']) ? $data['aclPolicyContainRules'] : null;
        $this->container['addressGroup'] = isset($data['addressGroup']) ? $data['addressGroup'] : null;
        $this->container['addressGroupContainIpset'] = isset($data['addressGroupContainIpset']) ? $data['addressGroupContainIpset'] : null;
        $this->container['clouddcnFirewallGroup'] = isset($data['clouddcnFirewallGroup']) ? $data['clouddcnFirewallGroup'] : null;
        $this->container['clouddcnAclPolicyContainRules'] = isset($data['clouddcnAclPolicyContainRules']) ? $data['clouddcnAclPolicyContainRules'] : null;
        $this->container['edgeGateway'] = isset($data['edgeGateway']) ? $data['edgeGateway'] : null;
        $this->container['eniContainSecgroup'] = isset($data['eniContainSecgroup']) ? $data['eniContainSecgroup'] : null;
        $this->container['firewallPolicyContainIpv4CompositeRules'] = isset($data['firewallPolicyContainIpv4CompositeRules']) ? $data['firewallPolicyContainIpv4CompositeRules'] : null;
        $this->container['firewallPolicyContainIpv6CompositeRules'] = isset($data['firewallPolicyContainIpv6CompositeRules']) ? $data['firewallPolicyContainIpv6CompositeRules'] : null;
        $this->container['forwardPolicy'] = isset($data['forwardPolicy']) ? $data['forwardPolicy'] : null;
        $this->container['forwardPolicyContainPorts'] = isset($data['forwardPolicyContainPorts']) ? $data['forwardPolicyContainPorts'] : null;
        $this->container['forwardRule'] = isset($data['forwardRule']) ? $data['forwardRule'] : null;
        $this->container['peering'] = isset($data['peering']) ? $data['peering'] : null;
        $this->container['roceClusterContainNetworks'] = isset($data['roceClusterContainNetworks']) ? $data['roceClusterContainNetworks'] : null;
        $this->container['rtbAllowSysCidrRoutes'] = isset($data['rtbAllowSysCidrRoutes']) ? $data['rtbAllowSysCidrRoutes'] : null;
        $this->container['sharedBandwidth'] = isset($data['sharedBandwidth']) ? $data['sharedBandwidth'] : null;
        $this->container['sharedBandwidthContainPublicip'] = isset($data['sharedBandwidthContainPublicip']) ? $data['sharedBandwidthContainPublicip'] : null;
        $this->container['secgroupContainRules'] = isset($data['secgroupContainRules']) ? $data['secgroupContainRules'] : null;
        $this->container['secgroupReferredByNic'] = isset($data['secgroupReferredByNic']) ? $data['secgroupReferredByNic'] : null;
        $this->container['securityGroup'] = isset($data['securityGroup']) ? $data['securityGroup'] : null;
        $this->container['securityGroupContainEgressIpv4CompositeRules'] = isset($data['securityGroupContainEgressIpv4CompositeRules']) ? $data['securityGroupContainEgressIpv4CompositeRules'] : null;
        $this->container['securityGroupContainEgressIpv6CompositeRules'] = isset($data['securityGroupContainEgressIpv6CompositeRules']) ? $data['securityGroupContainEgressIpv6CompositeRules'] : null;
        $this->container['securityGroupContainIngressIpv4CompositeRules'] = isset($data['securityGroupContainIngressIpv4CompositeRules']) ? $data['securityGroupContainIngressIpv4CompositeRules'] : null;
        $this->container['securityGroupContainIngressIpv6CompositeRules'] = isset($data['securityGroupContainIngressIpv6CompositeRules']) ? $data['securityGroupContainIngressIpv6CompositeRules'] : null;
        $this->container['securityGroupRule'] = isset($data['securityGroupRule']) ? $data['securityGroupRule'] : null;
        $this->container['subnetContainEni'] = isset($data['subnetContainEni']) ? $data['subnetContainEni'] : null;
        $this->container['trafficMirrorFilter'] = isset($data['trafficMirrorFilter']) ? $data['trafficMirrorFilter'] : null;
        $this->container['trafficMirrorFilterReferredBySession'] = isset($data['trafficMirrorFilterReferredBySession']) ? $data['trafficMirrorFilterReferredBySession'] : null;
        $this->container['trafficMirrorFilterContainRulesEachDirection'] = isset($data['trafficMirrorFilterContainRulesEachDirection']) ? $data['trafficMirrorFilterContainRulesEachDirection'] : null;
        $this->container['trafficMirrorSession'] = isset($data['trafficMirrorSession']) ? $data['trafficMirrorSession'] : null;
        $this->container['trafficMirrorSessionContainSources'] = isset($data['trafficMirrorSessionContainSources']) ? $data['trafficMirrorSessionContainSources'] : null;
        $this->container['trafficMirrorSourceReferredBySession'] = isset($data['trafficMirrorSourceReferredBySession']) ? $data['trafficMirrorSourceReferredBySession'] : null;
        $this->container['trafficMirrorTargetElbReferredBySession'] = isset($data['trafficMirrorTargetElbReferredBySession']) ? $data['trafficMirrorTargetElbReferredBySession'] : null;
        $this->container['trafficMirrorTargetEniReferredBySession'] = isset($data['trafficMirrorTargetEniReferredBySession']) ? $data['trafficMirrorTargetEniReferredBySession'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
        $this->container['virsubnet'] = isset($data['virsubnet']) ? $data['virsubnet'] : null;
        $this->container['virsubnetContainIpv4CidrReservations'] = isset($data['virsubnetContainIpv4CidrReservations']) ? $data['virsubnetContainIpv4CidrReservations'] : null;
        $this->container['virsubnetContainIpv6CidrReservations'] = isset($data['virsubnetContainIpv6CidrReservations']) ? $data['virsubnetContainIpv6CidrReservations'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['vpcContainEni'] = isset($data['vpcContainEni']) ? $data['vpcContainEni'] : null;
        $this->container['vpcContainVip'] = isset($data['vpcContainVip']) ? $data['vpcContainVip'] : null;
        $this->container['vpcContainVirsubnet'] = isset($data['vpcContainVirsubnet']) ? $data['vpcContainVirsubnet'] : null;
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
    * Gets aclPolicyContainRules
    *  **参数解释**： 网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getAclPolicyContainRules()
    {
        return $this->container['aclPolicyContainRules'];
    }

    /**
    * Sets aclPolicyContainRules
    *
    * @param int|null $aclPolicyContainRules **参数解释**： 网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setAclPolicyContainRules($aclPolicyContainRules)
    {
        $this->container['aclPolicyContainRules'] = $aclPolicyContainRules;
        return $this;
    }

    /**
    * Gets addressGroup
    *  **参数解释**： IP地址组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getAddressGroup()
    {
        return $this->container['addressGroup'];
    }

    /**
    * Sets addressGroup
    *
    * @param int|null $addressGroup **参数解释**： IP地址组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setAddressGroup($addressGroup)
    {
        $this->container['addressGroup'] = $addressGroup;
        return $this;
    }

    /**
    * Gets addressGroupContainIpset
    *  **参数解释**： IP地址组包含的IP地址集数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getAddressGroupContainIpset()
    {
        return $this->container['addressGroupContainIpset'];
    }

    /**
    * Sets addressGroupContainIpset
    *
    * @param int|null $addressGroupContainIpset **参数解释**： IP地址组包含的IP地址集数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setAddressGroupContainIpset($addressGroupContainIpset)
    {
        $this->container['addressGroupContainIpset'] = $addressGroupContainIpset;
        return $this;
    }

    /**
    * Gets clouddcnFirewallGroup
    *  **参数解释**： CloudDCN场景的网络ACL数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getClouddcnFirewallGroup()
    {
        return $this->container['clouddcnFirewallGroup'];
    }

    /**
    * Sets clouddcnFirewallGroup
    *
    * @param int|null $clouddcnFirewallGroup **参数解释**： CloudDCN场景的网络ACL数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setClouddcnFirewallGroup($clouddcnFirewallGroup)
    {
        $this->container['clouddcnFirewallGroup'] = $clouddcnFirewallGroup;
        return $this;
    }

    /**
    * Gets clouddcnAclPolicyContainRules
    *  **参数解释**： CloudDCN场景的网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getClouddcnAclPolicyContainRules()
    {
        return $this->container['clouddcnAclPolicyContainRules'];
    }

    /**
    * Sets clouddcnAclPolicyContainRules
    *
    * @param int|null $clouddcnAclPolicyContainRules **参数解释**： CloudDCN场景的网络ACL单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setClouddcnAclPolicyContainRules($clouddcnAclPolicyContainRules)
    {
        $this->container['clouddcnAclPolicyContainRules'] = $clouddcnAclPolicyContainRules;
        return $this;
    }

    /**
    * Gets edgeGateway
    *  **参数解释**： 边缘网关数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getEdgeGateway()
    {
        return $this->container['edgeGateway'];
    }

    /**
    * Sets edgeGateway
    *
    * @param int|null $edgeGateway **参数解释**： 边缘网关数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setEdgeGateway($edgeGateway)
    {
        $this->container['edgeGateway'] = $edgeGateway;
        return $this;
    }

    /**
    * Gets eniContainSecgroup
    *  **参数解释**： 弹性网卡关联的安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getEniContainSecgroup()
    {
        return $this->container['eniContainSecgroup'];
    }

    /**
    * Sets eniContainSecgroup
    *
    * @param int|null $eniContainSecgroup **参数解释**： 弹性网卡关联的安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setEniContainSecgroup($eniContainSecgroup)
    {
        $this->container['eniContainSecgroup'] = $eniContainSecgroup;
        return $this;
    }

    /**
    * Gets firewallPolicyContainIpv4CompositeRules
    *  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv4规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getFirewallPolicyContainIpv4CompositeRules()
    {
        return $this->container['firewallPolicyContainIpv4CompositeRules'];
    }

    /**
    * Sets firewallPolicyContainIpv4CompositeRules
    *
    * @param int|null $firewallPolicyContainIpv4CompositeRules **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv4规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setFirewallPolicyContainIpv4CompositeRules($firewallPolicyContainIpv4CompositeRules)
    {
        $this->container['firewallPolicyContainIpv4CompositeRules'] = $firewallPolicyContainIpv4CompositeRules;
        return $this;
    }

    /**
    * Gets firewallPolicyContainIpv6CompositeRules
    *  **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv6规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getFirewallPolicyContainIpv6CompositeRules()
    {
        return $this->container['firewallPolicyContainIpv6CompositeRules'];
    }

    /**
    * Sets firewallPolicyContainIpv6CompositeRules
    *
    * @param int|null $firewallPolicyContainIpv6CompositeRules **参数解释**： 网络ACL中配置了IP地址组或不连续端口的IPv6规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setFirewallPolicyContainIpv6CompositeRules($firewallPolicyContainIpv6CompositeRules)
    {
        $this->container['firewallPolicyContainIpv6CompositeRules'] = $firewallPolicyContainIpv6CompositeRules;
        return $this;
    }

    /**
    * Gets forwardPolicy
    *  **参数解释**： 云转发策略数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getForwardPolicy()
    {
        return $this->container['forwardPolicy'];
    }

    /**
    * Sets forwardPolicy
    *
    * @param int|null $forwardPolicy **参数解释**： 云转发策略数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setForwardPolicy($forwardPolicy)
    {
        $this->container['forwardPolicy'] = $forwardPolicy;
        return $this;
    }

    /**
    * Gets forwardPolicyContainPorts
    *  **参数解释**： 云转发策略关联端口数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getForwardPolicyContainPorts()
    {
        return $this->container['forwardPolicyContainPorts'];
    }

    /**
    * Sets forwardPolicyContainPorts
    *
    * @param int|null $forwardPolicyContainPorts **参数解释**： 云转发策略关联端口数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setForwardPolicyContainPorts($forwardPolicyContainPorts)
    {
        $this->container['forwardPolicyContainPorts'] = $forwardPolicyContainPorts;
        return $this;
    }

    /**
    * Gets forwardRule
    *  **参数解释**： 云转发规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getForwardRule()
    {
        return $this->container['forwardRule'];
    }

    /**
    * Sets forwardRule
    *
    * @param int|null $forwardRule **参数解释**： 云转发规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setForwardRule($forwardRule)
    {
        $this->container['forwardRule'] = $forwardRule;
        return $this;
    }

    /**
    * Gets peering
    *  **参数解释**： 对等连接数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getPeering()
    {
        return $this->container['peering'];
    }

    /**
    * Sets peering
    *
    * @param int|null $peering **参数解释**： 对等连接数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setPeering($peering)
    {
        $this->container['peering'] = $peering;
        return $this;
    }

    /**
    * Gets roceClusterContainNetworks
    *  **参数解释**： 一个physical_network下支持创建的roce网络数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getRoceClusterContainNetworks()
    {
        return $this->container['roceClusterContainNetworks'];
    }

    /**
    * Sets roceClusterContainNetworks
    *
    * @param int|null $roceClusterContainNetworks **参数解释**： 一个physical_network下支持创建的roce网络数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setRoceClusterContainNetworks($roceClusterContainNetworks)
    {
        $this->container['roceClusterContainNetworks'] = $roceClusterContainNetworks;
        return $this;
    }

    /**
    * Gets rtbAllowSysCidrRoutes
    *  **参数解释**： 路由表支持系统路由数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getRtbAllowSysCidrRoutes()
    {
        return $this->container['rtbAllowSysCidrRoutes'];
    }

    /**
    * Sets rtbAllowSysCidrRoutes
    *
    * @param int|null $rtbAllowSysCidrRoutes **参数解释**： 路由表支持系统路由数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setRtbAllowSysCidrRoutes($rtbAllowSysCidrRoutes)
    {
        $this->container['rtbAllowSysCidrRoutes'] = $rtbAllowSysCidrRoutes;
        return $this;
    }

    /**
    * Gets sharedBandwidth
    *  **参数解释**： 共享带宽组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSharedBandwidth()
    {
        return $this->container['sharedBandwidth'];
    }

    /**
    * Sets sharedBandwidth
    *
    * @param int|null $sharedBandwidth **参数解释**： 共享带宽组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSharedBandwidth($sharedBandwidth)
    {
        $this->container['sharedBandwidth'] = $sharedBandwidth;
        return $this;
    }

    /**
    * Gets sharedBandwidthContainPublicip
    *  **参数解释**： 单个共享带宽关联的弹性公网IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSharedBandwidthContainPublicip()
    {
        return $this->container['sharedBandwidthContainPublicip'];
    }

    /**
    * Sets sharedBandwidthContainPublicip
    *
    * @param int|null $sharedBandwidthContainPublicip **参数解释**： 单个共享带宽关联的弹性公网IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSharedBandwidthContainPublicip($sharedBandwidthContainPublicip)
    {
        $this->container['sharedBandwidthContainPublicip'] = $sharedBandwidthContainPublicip;
        return $this;
    }

    /**
    * Gets secgroupContainRules
    *  **参数解释**： 单个安全组包含的规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSecgroupContainRules()
    {
        return $this->container['secgroupContainRules'];
    }

    /**
    * Sets secgroupContainRules
    *
    * @param int|null $secgroupContainRules **参数解释**： 单个安全组包含的规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSecgroupContainRules($secgroupContainRules)
    {
        $this->container['secgroupContainRules'] = $secgroupContainRules;
        return $this;
    }

    /**
    * Gets secgroupReferredByNic
    *  **参数解释**： 单个安全组关联的网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSecgroupReferredByNic()
    {
        return $this->container['secgroupReferredByNic'];
    }

    /**
    * Sets secgroupReferredByNic
    *
    * @param int|null $secgroupReferredByNic **参数解释**： 单个安全组关联的网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSecgroupReferredByNic($secgroupReferredByNic)
    {
        $this->container['secgroupReferredByNic'] = $secgroupReferredByNic;
        return $this;
    }

    /**
    * Gets securityGroup
    *  **参数解释**： 安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSecurityGroup()
    {
        return $this->container['securityGroup'];
    }

    /**
    * Sets securityGroup
    *
    * @param int|null $securityGroup **参数解释**： 安全组数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSecurityGroup($securityGroup)
    {
        $this->container['securityGroup'] = $securityGroup;
        return $this;
    }

    /**
    * Gets securityGroupContainEgressIpv4CompositeRules
    *  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4出方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSecurityGroupContainEgressIpv4CompositeRules()
    {
        return $this->container['securityGroupContainEgressIpv4CompositeRules'];
    }

    /**
    * Sets securityGroupContainEgressIpv4CompositeRules
    *
    * @param int|null $securityGroupContainEgressIpv4CompositeRules **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4出方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSecurityGroupContainEgressIpv4CompositeRules($securityGroupContainEgressIpv4CompositeRules)
    {
        $this->container['securityGroupContainEgressIpv4CompositeRules'] = $securityGroupContainEgressIpv4CompositeRules;
        return $this;
    }

    /**
    * Gets securityGroupContainEgressIpv6CompositeRules
    *  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6出方向规则数配。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSecurityGroupContainEgressIpv6CompositeRules()
    {
        return $this->container['securityGroupContainEgressIpv6CompositeRules'];
    }

    /**
    * Sets securityGroupContainEgressIpv6CompositeRules
    *
    * @param int|null $securityGroupContainEgressIpv6CompositeRules **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6出方向规则数配。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSecurityGroupContainEgressIpv6CompositeRules($securityGroupContainEgressIpv6CompositeRules)
    {
        $this->container['securityGroupContainEgressIpv6CompositeRules'] = $securityGroupContainEgressIpv6CompositeRules;
        return $this;
    }

    /**
    * Gets securityGroupContainIngressIpv4CompositeRules
    *  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSecurityGroupContainIngressIpv4CompositeRules()
    {
        return $this->container['securityGroupContainIngressIpv4CompositeRules'];
    }

    /**
    * Sets securityGroupContainIngressIpv4CompositeRules
    *
    * @param int|null $securityGroupContainIngressIpv4CompositeRules **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv4入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSecurityGroupContainIngressIpv4CompositeRules($securityGroupContainIngressIpv4CompositeRules)
    {
        $this->container['securityGroupContainIngressIpv4CompositeRules'] = $securityGroupContainIngressIpv4CompositeRules;
        return $this;
    }

    /**
    * Gets securityGroupContainIngressIpv6CompositeRules
    *  **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSecurityGroupContainIngressIpv6CompositeRules()
    {
        return $this->container['securityGroupContainIngressIpv6CompositeRules'];
    }

    /**
    * Sets securityGroupContainIngressIpv6CompositeRules
    *
    * @param int|null $securityGroupContainIngressIpv6CompositeRules **参数解释**： 安全组中配置了IP地址组、不连续端口或远端安全组的IPv6入方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSecurityGroupContainIngressIpv6CompositeRules($securityGroupContainIngressIpv6CompositeRules)
    {
        $this->container['securityGroupContainIngressIpv6CompositeRules'] = $securityGroupContainIngressIpv6CompositeRules;
        return $this;
    }

    /**
    * Gets securityGroupRule
    *  **参数解释**： 安全组规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSecurityGroupRule()
    {
        return $this->container['securityGroupRule'];
    }

    /**
    * Sets securityGroupRule
    *
    * @param int|null $securityGroupRule **参数解释**： 安全组规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSecurityGroupRule($securityGroupRule)
    {
        $this->container['securityGroupRule'] = $securityGroupRule;
        return $this;
    }

    /**
    * Gets subnetContainEni
    *  **参数解释**： 单个子网包含的弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getSubnetContainEni()
    {
        return $this->container['subnetContainEni'];
    }

    /**
    * Sets subnetContainEni
    *
    * @param int|null $subnetContainEni **参数解释**： 单个子网包含的弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setSubnetContainEni($subnetContainEni)
    {
        $this->container['subnetContainEni'] = $subnetContainEni;
        return $this;
    }

    /**
    * Gets trafficMirrorFilter
    *  **参数解释**： 流量镜像筛选条件数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getTrafficMirrorFilter()
    {
        return $this->container['trafficMirrorFilter'];
    }

    /**
    * Sets trafficMirrorFilter
    *
    * @param int|null $trafficMirrorFilter **参数解释**： 流量镜像筛选条件数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setTrafficMirrorFilter($trafficMirrorFilter)
    {
        $this->container['trafficMirrorFilter'] = $trafficMirrorFilter;
        return $this;
    }

    /**
    * Gets trafficMirrorFilterReferredBySession
    *  **参数解释**： 单个流量镜像筛选条件被镜像会话引用数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getTrafficMirrorFilterReferredBySession()
    {
        return $this->container['trafficMirrorFilterReferredBySession'];
    }

    /**
    * Sets trafficMirrorFilterReferredBySession
    *
    * @param int|null $trafficMirrorFilterReferredBySession **参数解释**： 单个流量镜像筛选条件被镜像会话引用数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setTrafficMirrorFilterReferredBySession($trafficMirrorFilterReferredBySession)
    {
        $this->container['trafficMirrorFilterReferredBySession'] = $trafficMirrorFilterReferredBySession;
        return $this;
    }

    /**
    * Gets trafficMirrorFilterContainRulesEachDirection
    *  **参数解释**： 流量镜像筛选条件单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getTrafficMirrorFilterContainRulesEachDirection()
    {
        return $this->container['trafficMirrorFilterContainRulesEachDirection'];
    }

    /**
    * Sets trafficMirrorFilterContainRulesEachDirection
    *
    * @param int|null $trafficMirrorFilterContainRulesEachDirection **参数解释**： 流量镜像筛选条件单方向规则数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setTrafficMirrorFilterContainRulesEachDirection($trafficMirrorFilterContainRulesEachDirection)
    {
        $this->container['trafficMirrorFilterContainRulesEachDirection'] = $trafficMirrorFilterContainRulesEachDirection;
        return $this;
    }

    /**
    * Gets trafficMirrorSession
    *  **参数解释**： 流量镜像会话数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getTrafficMirrorSession()
    {
        return $this->container['trafficMirrorSession'];
    }

    /**
    * Sets trafficMirrorSession
    *
    * @param int|null $trafficMirrorSession **参数解释**： 流量镜像会话数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setTrafficMirrorSession($trafficMirrorSession)
    {
        $this->container['trafficMirrorSession'] = $trafficMirrorSession;
        return $this;
    }

    /**
    * Gets trafficMirrorSessionContainSources
    *  **参数解释**： 单个流量镜像会话关联的镜像源数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getTrafficMirrorSessionContainSources()
    {
        return $this->container['trafficMirrorSessionContainSources'];
    }

    /**
    * Sets trafficMirrorSessionContainSources
    *
    * @param int|null $trafficMirrorSessionContainSources **参数解释**： 单个流量镜像会话关联的镜像源数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setTrafficMirrorSessionContainSources($trafficMirrorSessionContainSources)
    {
        $this->container['trafficMirrorSessionContainSources'] = $trafficMirrorSessionContainSources;
        return $this;
    }

    /**
    * Gets trafficMirrorSourceReferredBySession
    *  **参数解释**： 单个镜像源被流量镜像会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getTrafficMirrorSourceReferredBySession()
    {
        return $this->container['trafficMirrorSourceReferredBySession'];
    }

    /**
    * Sets trafficMirrorSourceReferredBySession
    *
    * @param int|null $trafficMirrorSourceReferredBySession **参数解释**： 单个镜像源被流量镜像会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setTrafficMirrorSourceReferredBySession($trafficMirrorSourceReferredBySession)
    {
        $this->container['trafficMirrorSourceReferredBySession'] = $trafficMirrorSourceReferredBySession;
        return $this;
    }

    /**
    * Gets trafficMirrorTargetElbReferredBySession
    *  **参数解释**： 私网弹性负载均衡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getTrafficMirrorTargetElbReferredBySession()
    {
        return $this->container['trafficMirrorTargetElbReferredBySession'];
    }

    /**
    * Sets trafficMirrorTargetElbReferredBySession
    *
    * @param int|null $trafficMirrorTargetElbReferredBySession **参数解释**： 私网弹性负载均衡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setTrafficMirrorTargetElbReferredBySession($trafficMirrorTargetElbReferredBySession)
    {
        $this->container['trafficMirrorTargetElbReferredBySession'] = $trafficMirrorTargetElbReferredBySession;
        return $this;
    }

    /**
    * Gets trafficMirrorTargetEniReferredBySession
    *  **参数解释**： 弹性网卡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getTrafficMirrorTargetEniReferredBySession()
    {
        return $this->container['trafficMirrorTargetEniReferredBySession'];
    }

    /**
    * Sets trafficMirrorTargetEniReferredBySession
    *
    * @param int|null $trafficMirrorTargetEniReferredBySession **参数解释**： 弹性网卡类型的镜像目的被会话引用次数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setTrafficMirrorTargetEniReferredBySession($trafficMirrorTargetEniReferredBySession)
    {
        $this->container['trafficMirrorTargetEniReferredBySession'] = $trafficMirrorTargetEniReferredBySession;
        return $this;
    }

    /**
    * Gets vip
    *  **参数解释**： 虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
    * Sets vip
    *
    * @param int|null $vip **参数解释**： 虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;
        return $this;
    }

    /**
    * Gets virsubnet
    *  **参数解释**： 子网数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    *
    * @return int|null
    */
    public function getVirsubnet()
    {
        return $this->container['virsubnet'];
    }

    /**
    * Sets virsubnet
    *
    * @param int|null $virsubnet **参数解释**： 子网数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    *
    * @return $this
    */
    public function setVirsubnet($virsubnet)
    {
        $this->container['virsubnet'] = $virsubnet;
        return $this;
    }

    /**
    * Gets virsubnetContainIpv4CidrReservations
    *  **参数解释**： 单子网包含IPv4子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getVirsubnetContainIpv4CidrReservations()
    {
        return $this->container['virsubnetContainIpv4CidrReservations'];
    }

    /**
    * Sets virsubnetContainIpv4CidrReservations
    *
    * @param int|null $virsubnetContainIpv4CidrReservations **参数解释**： 单子网包含IPv4子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setVirsubnetContainIpv4CidrReservations($virsubnetContainIpv4CidrReservations)
    {
        $this->container['virsubnetContainIpv4CidrReservations'] = $virsubnetContainIpv4CidrReservations;
        return $this;
    }

    /**
    * Gets virsubnetContainIpv6CidrReservations
    *  **参数解释**： 单子网包含IPv6子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getVirsubnetContainIpv6CidrReservations()
    {
        return $this->container['virsubnetContainIpv6CidrReservations'];
    }

    /**
    * Sets virsubnetContainIpv6CidrReservations
    *
    * @param int|null $virsubnetContainIpv6CidrReservations **参数解释**： 单子网包含IPv6子网预留网段数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setVirsubnetContainIpv6CidrReservations($virsubnetContainIpv6CidrReservations)
    {
        $this->container['virsubnetContainIpv6CidrReservations'] = $virsubnetContainIpv6CidrReservations;
        return $this;
    }

    /**
    * Gets vpc
    *  **参数解释**： VPC数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    *
    * @return int|null
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param int|null $vpc **参数解释**： VPC数配额。 **取值范围**： 整数，-1表示此配额未上线，请通过[v1查询配额接口](vpc_quota_0001.xml)。
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets vpcContainEni
    *  **参数解释**： 单个VPC包含弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getVpcContainEni()
    {
        return $this->container['vpcContainEni'];
    }

    /**
    * Sets vpcContainEni
    *
    * @param int|null $vpcContainEni **参数解释**： 单个VPC包含弹性网卡数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setVpcContainEni($vpcContainEni)
    {
        $this->container['vpcContainEni'] = $vpcContainEni;
        return $this;
    }

    /**
    * Gets vpcContainVip
    *  **参数解释**： 单个VPC包含虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getVpcContainVip()
    {
        return $this->container['vpcContainVip'];
    }

    /**
    * Sets vpcContainVip
    *
    * @param int|null $vpcContainVip **参数解释**： 单个VPC包含虚拟IP数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setVpcContainVip($vpcContainVip)
    {
        $this->container['vpcContainVip'] = $vpcContainVip;
        return $this;
    }

    /**
    * Gets vpcContainVirsubnet
    *  **参数解释**： 单个VPC包含子网数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return int|null
    */
    public function getVpcContainVirsubnet()
    {
        return $this->container['vpcContainVirsubnet'];
    }

    /**
    * Sets vpcContainVirsubnet
    *
    * @param int|null $vpcContainVirsubnet **参数解释**： 单个VPC包含子网数配额。 **取值范围**： 整数，-1表示此配额未上线。
    *
    * @return $this
    */
    public function setVpcContainVirsubnet($vpcContainVirsubnet)
    {
        $this->container['vpcContainVirsubnet'] = $vpcContainVirsubnet;
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

