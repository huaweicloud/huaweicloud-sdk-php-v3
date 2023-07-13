<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronPort implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronPort';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  功能说明：端口管理状态 约束：目前支持true
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，详情参见“allow_address_pair对象”表 约束：IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * bindingprofile  扩展属性：提供用户设置自定义信息 【使用说明】  internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  disable_security_groups字段，布尔类型，普通租户可见。默认为false高性能通信场景下，允许指定为true普通租户可见。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false 举例：{\"disable_security_groups\"：true }， 当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。  仅对于“华北-北京二”：udp_srvports和tcp_srvports，字段，字符串类型，默认不设置udp_srvports和tcp_srvports字段。允许指定udp_srvports和tcp_srvports字段为端口号，表示这些端口的tcp报文和udp报文可支持高并发连接，但是此类报文不受ACL和安全组规则的限制。udp_srvports和tcp_srvports字段同时支持更新操作。 − 格式： {\"tcp_srvports\": \"port1 port2 port3\", \"udp_srvports\": \"port1 port2 port3\"} 端口号之间以空格间隔，最多允许指定的端口号总共为15个，端口号范围是1到65535。 − 示例：{\"tcp_srvports\": \"80 443\", \"udp_srvports\": \"53\"} 示例表示入方向目的端口为80或者443的tcp报文可支持高并发连接。入方向目的端口为53的udp报文可支持高并发连接。但是此类报文不受ACL和安全组规则的限制。
    * bindingvifDetails  bindingvifDetails
    * bindingvnicType  功能说明：绑定的vNIC类型  - normal：软交换
    * deviceId  功能说明：端口设备ID 约束：不支持设置和更新，由系统自动维护，该字段非空的端口不允许删除。
    * deviceOwner  功能说明：端口设备所属（DHCP/Router/ Nova等） 约束：不支持更新，只允许用户在创建虚拟IP端口时，为虚拟IP端口设置device_owner为neutron:VIP_PORT，当端口的该字段不为空时，仅支持该字段为neutron:VIP_PORT时的端口删除。该字段非空的端口不允许删除。
    * dnsAssignment  功能说明：扩展属性：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护  - hostname：与端口dns_name一致  - ip_address：端口ipv4私有地址  - fqdn：为端口创建默认内网fqdn
    * dnsName  功能说明：扩展属性：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护,访问该默认内网域名前，请确保子网使用当前系统提供的DNS
    * extraDhcpOpts  功能说明：扩展属性：DHCP的扩展Option，详情参见“ExtraDhcpOpt对象”表
    * fixedIps  功能说明：端口的IP地址，参见“FixedIp对象”表 约束：device_owner为neutron: VIP_PORT时最多指定一个fixed_ip，给云服务器创建IPv6端口时，必须具备一个IPv4 subnet_id和一个IPv6 subnet_id 。
    * id  端口ID
    * macAddress  功能说明：端口mac地址 约束：只支持系统动态分配，不支持指定
    * name  功能说明：端口的名称 取值范围：0-255个字符
    * networkId  端口所属网络ID
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    * securityGroups  功能说明：作用在该端口上的安全组的ID列表 约束：不支持更新为空
    * status  功能说明：端口状态 取值范围：ACTIVE，BUILD，DOWN 约束：Hana硬直通虚拟机端口状态总为DOWN
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\Vpc\V2\Model\AllowedAddressPair[]',
            'bindingprofile' => 'object',
            'bindingvifDetails' => '\HuaweiCloud\SDK\Vpc\V2\Model\BindingVifDetails',
            'bindingvnicType' => 'string',
            'deviceId' => 'string',
            'deviceOwner' => 'string',
            'dnsAssignment' => '\HuaweiCloud\SDK\Vpc\V2\Model\DnsAssignMent[]',
            'dnsName' => 'string',
            'extraDhcpOpts' => '\HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOpt[]',
            'fixedIps' => '\HuaweiCloud\SDK\Vpc\V2\Model\FixedIp[]',
            'id' => 'string',
            'macAddress' => 'string',
            'name' => 'string',
            'networkId' => 'string',
            'portSecurityEnabled' => 'bool',
            'securityGroups' => 'string[]',
            'status' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  功能说明：端口管理状态 约束：目前支持true
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，详情参见“allow_address_pair对象”表 约束：IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * bindingprofile  扩展属性：提供用户设置自定义信息 【使用说明】  internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  disable_security_groups字段，布尔类型，普通租户可见。默认为false高性能通信场景下，允许指定为true普通租户可见。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false 举例：{\"disable_security_groups\"：true }， 当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。  仅对于“华北-北京二”：udp_srvports和tcp_srvports，字段，字符串类型，默认不设置udp_srvports和tcp_srvports字段。允许指定udp_srvports和tcp_srvports字段为端口号，表示这些端口的tcp报文和udp报文可支持高并发连接，但是此类报文不受ACL和安全组规则的限制。udp_srvports和tcp_srvports字段同时支持更新操作。 − 格式： {\"tcp_srvports\": \"port1 port2 port3\", \"udp_srvports\": \"port1 port2 port3\"} 端口号之间以空格间隔，最多允许指定的端口号总共为15个，端口号范围是1到65535。 − 示例：{\"tcp_srvports\": \"80 443\", \"udp_srvports\": \"53\"} 示例表示入方向目的端口为80或者443的tcp报文可支持高并发连接。入方向目的端口为53的udp报文可支持高并发连接。但是此类报文不受ACL和安全组规则的限制。
    * bindingvifDetails  bindingvifDetails
    * bindingvnicType  功能说明：绑定的vNIC类型  - normal：软交换
    * deviceId  功能说明：端口设备ID 约束：不支持设置和更新，由系统自动维护，该字段非空的端口不允许删除。
    * deviceOwner  功能说明：端口设备所属（DHCP/Router/ Nova等） 约束：不支持更新，只允许用户在创建虚拟IP端口时，为虚拟IP端口设置device_owner为neutron:VIP_PORT，当端口的该字段不为空时，仅支持该字段为neutron:VIP_PORT时的端口删除。该字段非空的端口不允许删除。
    * dnsAssignment  功能说明：扩展属性：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护  - hostname：与端口dns_name一致  - ip_address：端口ipv4私有地址  - fqdn：为端口创建默认内网fqdn
    * dnsName  功能说明：扩展属性：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护,访问该默认内网域名前，请确保子网使用当前系统提供的DNS
    * extraDhcpOpts  功能说明：扩展属性：DHCP的扩展Option，详情参见“ExtraDhcpOpt对象”表
    * fixedIps  功能说明：端口的IP地址，参见“FixedIp对象”表 约束：device_owner为neutron: VIP_PORT时最多指定一个fixed_ip，给云服务器创建IPv6端口时，必须具备一个IPv4 subnet_id和一个IPv6 subnet_id 。
    * id  端口ID
    * macAddress  功能说明：端口mac地址 约束：只支持系统动态分配，不支持指定
    * name  功能说明：端口的名称 取值范围：0-255个字符
    * networkId  端口所属网络ID
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    * securityGroups  功能说明：作用在该端口上的安全组的ID列表 约束：不支持更新为空
    * status  功能说明：端口状态 取值范围：ACTIVE，BUILD，DOWN 约束：Hana硬直通虚拟机端口状态总为DOWN
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'allowedAddressPairs' => null,
        'bindingprofile' => null,
        'bindingvifDetails' => null,
        'bindingvnicType' => null,
        'deviceId' => null,
        'deviceOwner' => null,
        'dnsAssignment' => null,
        'dnsName' => null,
        'extraDhcpOpts' => null,
        'fixedIps' => null,
        'id' => null,
        'macAddress' => null,
        'name' => null,
        'networkId' => null,
        'portSecurityEnabled' => null,
        'securityGroups' => null,
        'status' => null,
        'tenantId' => null,
        'projectId' => null,
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
    * adminStateUp  功能说明：端口管理状态 约束：目前支持true
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，详情参见“allow_address_pair对象”表 约束：IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * bindingprofile  扩展属性：提供用户设置自定义信息 【使用说明】  internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  disable_security_groups字段，布尔类型，普通租户可见。默认为false高性能通信场景下，允许指定为true普通租户可见。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false 举例：{\"disable_security_groups\"：true }， 当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。  仅对于“华北-北京二”：udp_srvports和tcp_srvports，字段，字符串类型，默认不设置udp_srvports和tcp_srvports字段。允许指定udp_srvports和tcp_srvports字段为端口号，表示这些端口的tcp报文和udp报文可支持高并发连接，但是此类报文不受ACL和安全组规则的限制。udp_srvports和tcp_srvports字段同时支持更新操作。 − 格式： {\"tcp_srvports\": \"port1 port2 port3\", \"udp_srvports\": \"port1 port2 port3\"} 端口号之间以空格间隔，最多允许指定的端口号总共为15个，端口号范围是1到65535。 − 示例：{\"tcp_srvports\": \"80 443\", \"udp_srvports\": \"53\"} 示例表示入方向目的端口为80或者443的tcp报文可支持高并发连接。入方向目的端口为53的udp报文可支持高并发连接。但是此类报文不受ACL和安全组规则的限制。
    * bindingvifDetails  bindingvifDetails
    * bindingvnicType  功能说明：绑定的vNIC类型  - normal：软交换
    * deviceId  功能说明：端口设备ID 约束：不支持设置和更新，由系统自动维护，该字段非空的端口不允许删除。
    * deviceOwner  功能说明：端口设备所属（DHCP/Router/ Nova等） 约束：不支持更新，只允许用户在创建虚拟IP端口时，为虚拟IP端口设置device_owner为neutron:VIP_PORT，当端口的该字段不为空时，仅支持该字段为neutron:VIP_PORT时的端口删除。该字段非空的端口不允许删除。
    * dnsAssignment  功能说明：扩展属性：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护  - hostname：与端口dns_name一致  - ip_address：端口ipv4私有地址  - fqdn：为端口创建默认内网fqdn
    * dnsName  功能说明：扩展属性：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护,访问该默认内网域名前，请确保子网使用当前系统提供的DNS
    * extraDhcpOpts  功能说明：扩展属性：DHCP的扩展Option，详情参见“ExtraDhcpOpt对象”表
    * fixedIps  功能说明：端口的IP地址，参见“FixedIp对象”表 约束：device_owner为neutron: VIP_PORT时最多指定一个fixed_ip，给云服务器创建IPv6端口时，必须具备一个IPv4 subnet_id和一个IPv6 subnet_id 。
    * id  端口ID
    * macAddress  功能说明：端口mac地址 约束：只支持系统动态分配，不支持指定
    * name  功能说明：端口的名称 取值范围：0-255个字符
    * networkId  端口所属网络ID
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    * securityGroups  功能说明：作用在该端口上的安全组的ID列表 约束：不支持更新为空
    * status  功能说明：端口状态 取值范围：ACTIVE，BUILD，DOWN 约束：Hana硬直通虚拟机端口状态总为DOWN
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'allowedAddressPairs' => 'allowed_address_pairs',
            'bindingprofile' => 'binding:profile',
            'bindingvifDetails' => 'binding:vif_details',
            'bindingvnicType' => 'binding:vnic_type',
            'deviceId' => 'device_id',
            'deviceOwner' => 'device_owner',
            'dnsAssignment' => 'dns_assignment',
            'dnsName' => 'dns_name',
            'extraDhcpOpts' => 'extra_dhcp_opts',
            'fixedIps' => 'fixed_ips',
            'id' => 'id',
            'macAddress' => 'mac_address',
            'name' => 'name',
            'networkId' => 'network_id',
            'portSecurityEnabled' => 'port_security_enabled',
            'securityGroups' => 'security_groups',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  功能说明：端口管理状态 约束：目前支持true
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，详情参见“allow_address_pair对象”表 约束：IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * bindingprofile  扩展属性：提供用户设置自定义信息 【使用说明】  internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  disable_security_groups字段，布尔类型，普通租户可见。默认为false高性能通信场景下，允许指定为true普通租户可见。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false 举例：{\"disable_security_groups\"：true }， 当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。  仅对于“华北-北京二”：udp_srvports和tcp_srvports，字段，字符串类型，默认不设置udp_srvports和tcp_srvports字段。允许指定udp_srvports和tcp_srvports字段为端口号，表示这些端口的tcp报文和udp报文可支持高并发连接，但是此类报文不受ACL和安全组规则的限制。udp_srvports和tcp_srvports字段同时支持更新操作。 − 格式： {\"tcp_srvports\": \"port1 port2 port3\", \"udp_srvports\": \"port1 port2 port3\"} 端口号之间以空格间隔，最多允许指定的端口号总共为15个，端口号范围是1到65535。 − 示例：{\"tcp_srvports\": \"80 443\", \"udp_srvports\": \"53\"} 示例表示入方向目的端口为80或者443的tcp报文可支持高并发连接。入方向目的端口为53的udp报文可支持高并发连接。但是此类报文不受ACL和安全组规则的限制。
    * bindingvifDetails  bindingvifDetails
    * bindingvnicType  功能说明：绑定的vNIC类型  - normal：软交换
    * deviceId  功能说明：端口设备ID 约束：不支持设置和更新，由系统自动维护，该字段非空的端口不允许删除。
    * deviceOwner  功能说明：端口设备所属（DHCP/Router/ Nova等） 约束：不支持更新，只允许用户在创建虚拟IP端口时，为虚拟IP端口设置device_owner为neutron:VIP_PORT，当端口的该字段不为空时，仅支持该字段为neutron:VIP_PORT时的端口删除。该字段非空的端口不允许删除。
    * dnsAssignment  功能说明：扩展属性：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护  - hostname：与端口dns_name一致  - ip_address：端口ipv4私有地址  - fqdn：为端口创建默认内网fqdn
    * dnsName  功能说明：扩展属性：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护,访问该默认内网域名前，请确保子网使用当前系统提供的DNS
    * extraDhcpOpts  功能说明：扩展属性：DHCP的扩展Option，详情参见“ExtraDhcpOpt对象”表
    * fixedIps  功能说明：端口的IP地址，参见“FixedIp对象”表 约束：device_owner为neutron: VIP_PORT时最多指定一个fixed_ip，给云服务器创建IPv6端口时，必须具备一个IPv4 subnet_id和一个IPv6 subnet_id 。
    * id  端口ID
    * macAddress  功能说明：端口mac地址 约束：只支持系统动态分配，不支持指定
    * name  功能说明：端口的名称 取值范围：0-255个字符
    * networkId  端口所属网络ID
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    * securityGroups  功能说明：作用在该端口上的安全组的ID列表 约束：不支持更新为空
    * status  功能说明：端口状态 取值范围：ACTIVE，BUILD，DOWN 约束：Hana硬直通虚拟机端口状态总为DOWN
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'allowedAddressPairs' => 'setAllowedAddressPairs',
            'bindingprofile' => 'setBindingprofile',
            'bindingvifDetails' => 'setBindingvifDetails',
            'bindingvnicType' => 'setBindingvnicType',
            'deviceId' => 'setDeviceId',
            'deviceOwner' => 'setDeviceOwner',
            'dnsAssignment' => 'setDnsAssignment',
            'dnsName' => 'setDnsName',
            'extraDhcpOpts' => 'setExtraDhcpOpts',
            'fixedIps' => 'setFixedIps',
            'id' => 'setId',
            'macAddress' => 'setMacAddress',
            'name' => 'setName',
            'networkId' => 'setNetworkId',
            'portSecurityEnabled' => 'setPortSecurityEnabled',
            'securityGroups' => 'setSecurityGroups',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  功能说明：端口管理状态 约束：目前支持true
    * allowedAddressPairs  功能说明：扩展属性：IP/Mac对列表，详情参见“allow_address_pair对象”表 约束：IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    * bindingprofile  扩展属性：提供用户设置自定义信息 【使用说明】  internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  disable_security_groups字段，布尔类型，普通租户可见。默认为false高性能通信场景下，允许指定为true普通租户可见。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false 举例：{\"disable_security_groups\"：true }， 当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。  仅对于“华北-北京二”：udp_srvports和tcp_srvports，字段，字符串类型，默认不设置udp_srvports和tcp_srvports字段。允许指定udp_srvports和tcp_srvports字段为端口号，表示这些端口的tcp报文和udp报文可支持高并发连接，但是此类报文不受ACL和安全组规则的限制。udp_srvports和tcp_srvports字段同时支持更新操作。 − 格式： {\"tcp_srvports\": \"port1 port2 port3\", \"udp_srvports\": \"port1 port2 port3\"} 端口号之间以空格间隔，最多允许指定的端口号总共为15个，端口号范围是1到65535。 − 示例：{\"tcp_srvports\": \"80 443\", \"udp_srvports\": \"53\"} 示例表示入方向目的端口为80或者443的tcp报文可支持高并发连接。入方向目的端口为53的udp报文可支持高并发连接。但是此类报文不受ACL和安全组规则的限制。
    * bindingvifDetails  bindingvifDetails
    * bindingvnicType  功能说明：绑定的vNIC类型  - normal：软交换
    * deviceId  功能说明：端口设备ID 约束：不支持设置和更新，由系统自动维护，该字段非空的端口不允许删除。
    * deviceOwner  功能说明：端口设备所属（DHCP/Router/ Nova等） 约束：不支持更新，只允许用户在创建虚拟IP端口时，为虚拟IP端口设置device_owner为neutron:VIP_PORT，当端口的该字段不为空时，仅支持该字段为neutron:VIP_PORT时的端口删除。该字段非空的端口不允许删除。
    * dnsAssignment  功能说明：扩展属性：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护  - hostname：与端口dns_name一致  - ip_address：端口ipv4私有地址  - fqdn：为端口创建默认内网fqdn
    * dnsName  功能说明：扩展属性：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护,访问该默认内网域名前，请确保子网使用当前系统提供的DNS
    * extraDhcpOpts  功能说明：扩展属性：DHCP的扩展Option，详情参见“ExtraDhcpOpt对象”表
    * fixedIps  功能说明：端口的IP地址，参见“FixedIp对象”表 约束：device_owner为neutron: VIP_PORT时最多指定一个fixed_ip，给云服务器创建IPv6端口时，必须具备一个IPv4 subnet_id和一个IPv6 subnet_id 。
    * id  端口ID
    * macAddress  功能说明：端口mac地址 约束：只支持系统动态分配，不支持指定
    * name  功能说明：端口的名称 取值范围：0-255个字符
    * networkId  端口所属网络ID
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    * securityGroups  功能说明：作用在该端口上的安全组的ID列表 约束：不支持更新为空
    * status  功能说明：端口状态 取值范围：ACTIVE，BUILD，DOWN 约束：Hana硬直通虚拟机端口状态总为DOWN
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'allowedAddressPairs' => 'getAllowedAddressPairs',
            'bindingprofile' => 'getBindingprofile',
            'bindingvifDetails' => 'getBindingvifDetails',
            'bindingvnicType' => 'getBindingvnicType',
            'deviceId' => 'getDeviceId',
            'deviceOwner' => 'getDeviceOwner',
            'dnsAssignment' => 'getDnsAssignment',
            'dnsName' => 'getDnsName',
            'extraDhcpOpts' => 'getExtraDhcpOpts',
            'fixedIps' => 'getFixedIps',
            'id' => 'getId',
            'macAddress' => 'getMacAddress',
            'name' => 'getName',
            'networkId' => 'getNetworkId',
            'portSecurityEnabled' => 'getPortSecurityEnabled',
            'securityGroups' => 'getSecurityGroups',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
        $this->container['bindingprofile'] = isset($data['bindingprofile']) ? $data['bindingprofile'] : null;
        $this->container['bindingvifDetails'] = isset($data['bindingvifDetails']) ? $data['bindingvifDetails'] : null;
        $this->container['bindingvnicType'] = isset($data['bindingvnicType']) ? $data['bindingvnicType'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['dnsAssignment'] = isset($data['dnsAssignment']) ? $data['dnsAssignment'] : null;
        $this->container['dnsName'] = isset($data['dnsName']) ? $data['dnsName'] : null;
        $this->container['extraDhcpOpts'] = isset($data['extraDhcpOpts']) ? $data['extraDhcpOpts'] : null;
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['macAddress'] = isset($data['macAddress']) ? $data['macAddress'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['portSecurityEnabled'] = isset($data['portSecurityEnabled']) ? $data['portSecurityEnabled'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
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
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['allowedAddressPairs'] === null) {
            $invalidProperties[] = "'allowedAddressPairs' can't be null";
        }
        if ($this->container['bindingprofile'] === null) {
            $invalidProperties[] = "'bindingprofile' can't be null";
        }
        if ($this->container['bindingvifDetails'] === null) {
            $invalidProperties[] = "'bindingvifDetails' can't be null";
        }
        if ($this->container['bindingvnicType'] === null) {
            $invalidProperties[] = "'bindingvnicType' can't be null";
        }
            if ((mb_strlen($this->container['bindingvnicType']) > 64)) {
                $invalidProperties[] = "invalid value for 'bindingvnicType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['bindingvnicType']) < 0)) {
                $invalidProperties[] = "invalid value for 'bindingvnicType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['deviceId'] === null) {
            $invalidProperties[] = "'deviceId' can't be null";
        }
            if ((mb_strlen($this->container['deviceId']) > 255)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['deviceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['deviceOwner'] === null) {
            $invalidProperties[] = "'deviceOwner' can't be null";
        }
            if ((mb_strlen($this->container['deviceOwner']) > 255)) {
                $invalidProperties[] = "invalid value for 'deviceOwner', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['deviceOwner']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceOwner', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dnsAssignment'] === null) {
            $invalidProperties[] = "'dnsAssignment' can't be null";
        }
        if ($this->container['dnsName'] === null) {
            $invalidProperties[] = "'dnsName' can't be null";
        }
            if ((mb_strlen($this->container['dnsName']) > 255)) {
                $invalidProperties[] = "invalid value for 'dnsName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['dnsName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dnsName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['extraDhcpOpts'] === null) {
            $invalidProperties[] = "'extraDhcpOpts' can't be null";
        }
        if ($this->container['fixedIps'] === null) {
            $invalidProperties[] = "'fixedIps' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['macAddress'] === null) {
            $invalidProperties[] = "'macAddress' can't be null";
        }
            if ((mb_strlen($this->container['macAddress']) > 32)) {
                $invalidProperties[] = "invalid value for 'macAddress', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['macAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'macAddress', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['networkId'] === null) {
            $invalidProperties[] = "'networkId' can't be null";
        }
            if (!preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['networkId'])) {
                $invalidProperties[] = "invalid value for 'networkId', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
        if ($this->container['portSecurityEnabled'] === null) {
            $invalidProperties[] = "'portSecurityEnabled' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 16)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if (!preg_match("/[0-9a-f]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[0-9a-f]{32}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-f]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-f]{32}/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    * Gets adminStateUp
    *  功能说明：端口管理状态 约束：目前支持true
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 功能说明：端口管理状态 约束：目前支持true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  功能说明：扩展属性：IP/Mac对列表，详情参见“allow_address_pair对象”表 约束：IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\AllowedAddressPair[]
    */
    public function getAllowedAddressPairs()
    {
        return $this->container['allowedAddressPairs'];
    }

    /**
    * Sets allowedAddressPairs
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\AllowedAddressPair[] $allowedAddressPairs 功能说明：扩展属性：IP/Mac对列表，详情参见“allow_address_pair对象”表 约束：IP地址不允许为 “0.0.0.0”如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组硬件SDN环境不支持ip_address属性配置为CIDR格式。
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
        return $this;
    }

    /**
    * Gets bindingprofile
    *  扩展属性：提供用户设置自定义信息 【使用说明】  internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  disable_security_groups字段，布尔类型，普通租户可见。默认为false高性能通信场景下，允许指定为true普通租户可见。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false 举例：{\"disable_security_groups\"：true }， 当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。  仅对于“华北-北京二”：udp_srvports和tcp_srvports，字段，字符串类型，默认不设置udp_srvports和tcp_srvports字段。允许指定udp_srvports和tcp_srvports字段为端口号，表示这些端口的tcp报文和udp报文可支持高并发连接，但是此类报文不受ACL和安全组规则的限制。udp_srvports和tcp_srvports字段同时支持更新操作。 − 格式： {\"tcp_srvports\": \"port1 port2 port3\", \"udp_srvports\": \"port1 port2 port3\"} 端口号之间以空格间隔，最多允许指定的端口号总共为15个，端口号范围是1到65535。 − 示例：{\"tcp_srvports\": \"80 443\", \"udp_srvports\": \"53\"} 示例表示入方向目的端口为80或者443的tcp报文可支持高并发连接。入方向目的端口为53的udp报文可支持高并发连接。但是此类报文不受ACL和安全组规则的限制。
    *
    * @return object
    */
    public function getBindingprofile()
    {
        return $this->container['bindingprofile'];
    }

    /**
    * Sets bindingprofile
    *
    * @param object $bindingprofile 扩展属性：提供用户设置自定义信息 【使用说明】  internal_elb字段，布尔类型，普通租户可见。只有在创建内网ELB的虚拟IP的网卡时设置为true。普通租户没有权限更改该字段，由系统维护。 举例：{\"internal_elb\": true}  disable_security_groups字段，布尔类型，普通租户可见。默认为false高性能通信场景下，允许指定为true普通租户可见。仅支持创建port和读取时指定。当前仅支持指定为true，不支持指定为false 举例：{\"disable_security_groups\"：true }， 当前仅支持指定为true，不支持指定为false，指定为true时，FWaaS功能不生效。  仅对于“华北-北京二”：udp_srvports和tcp_srvports，字段，字符串类型，默认不设置udp_srvports和tcp_srvports字段。允许指定udp_srvports和tcp_srvports字段为端口号，表示这些端口的tcp报文和udp报文可支持高并发连接，但是此类报文不受ACL和安全组规则的限制。udp_srvports和tcp_srvports字段同时支持更新操作。 − 格式： {\"tcp_srvports\": \"port1 port2 port3\", \"udp_srvports\": \"port1 port2 port3\"} 端口号之间以空格间隔，最多允许指定的端口号总共为15个，端口号范围是1到65535。 − 示例：{\"tcp_srvports\": \"80 443\", \"udp_srvports\": \"53\"} 示例表示入方向目的端口为80或者443的tcp报文可支持高并发连接。入方向目的端口为53的udp报文可支持高并发连接。但是此类报文不受ACL和安全组规则的限制。
    *
    * @return $this
    */
    public function setBindingprofile($bindingprofile)
    {
        $this->container['bindingprofile'] = $bindingprofile;
        return $this;
    }

    /**
    * Gets bindingvifDetails
    *  bindingvifDetails
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\BindingVifDetails
    */
    public function getBindingvifDetails()
    {
        return $this->container['bindingvifDetails'];
    }

    /**
    * Sets bindingvifDetails
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\BindingVifDetails $bindingvifDetails bindingvifDetails
    *
    * @return $this
    */
    public function setBindingvifDetails($bindingvifDetails)
    {
        $this->container['bindingvifDetails'] = $bindingvifDetails;
        return $this;
    }

    /**
    * Gets bindingvnicType
    *  功能说明：绑定的vNIC类型  - normal：软交换
    *
    * @return string
    */
    public function getBindingvnicType()
    {
        return $this->container['bindingvnicType'];
    }

    /**
    * Sets bindingvnicType
    *
    * @param string $bindingvnicType 功能说明：绑定的vNIC类型  - normal：软交换
    *
    * @return $this
    */
    public function setBindingvnicType($bindingvnicType)
    {
        $this->container['bindingvnicType'] = $bindingvnicType;
        return $this;
    }

    /**
    * Gets deviceId
    *  功能说明：端口设备ID 约束：不支持设置和更新，由系统自动维护，该字段非空的端口不允许删除。
    *
    * @return string
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string $deviceId 功能说明：端口设备ID 约束：不支持设置和更新，由系统自动维护，该字段非空的端口不允许删除。
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
    *  功能说明：端口设备所属（DHCP/Router/ Nova等） 约束：不支持更新，只允许用户在创建虚拟IP端口时，为虚拟IP端口设置device_owner为neutron:VIP_PORT，当端口的该字段不为空时，仅支持该字段为neutron:VIP_PORT时的端口删除。该字段非空的端口不允许删除。
    *
    * @return string
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string $deviceOwner 功能说明：端口设备所属（DHCP/Router/ Nova等） 约束：不支持更新，只允许用户在创建虚拟IP端口时，为虚拟IP端口设置device_owner为neutron:VIP_PORT，当端口的该字段不为空时，仅支持该字段为neutron:VIP_PORT时的端口删除。该字段非空的端口不允许删除。
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets dnsAssignment
    *  功能说明：扩展属性：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护  - hostname：与端口dns_name一致  - ip_address：端口ipv4私有地址  - fqdn：为端口创建默认内网fqdn
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\DnsAssignMent[]
    */
    public function getDnsAssignment()
    {
        return $this->container['dnsAssignment'];
    }

    /**
    * Sets dnsAssignment
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\DnsAssignMent[] $dnsAssignment 功能说明：扩展属性：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护  - hostname：与端口dns_name一致  - ip_address：端口ipv4私有地址  - fqdn：为端口创建默认内网fqdn
    *
    * @return $this
    */
    public function setDnsAssignment($dnsAssignment)
    {
        $this->container['dnsAssignment'] = $dnsAssignment;
        return $this;
    }

    /**
    * Gets dnsName
    *  功能说明：扩展属性：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护,访问该默认内网域名前，请确保子网使用当前系统提供的DNS
    *
    * @return string
    */
    public function getDnsName()
    {
        return $this->container['dnsName'];
    }

    /**
    * Sets dnsName
    *
    * @param string $dnsName 功能说明：扩展属性：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护,访问该默认内网域名前，请确保子网使用当前系统提供的DNS
    *
    * @return $this
    */
    public function setDnsName($dnsName)
    {
        $this->container['dnsName'] = $dnsName;
        return $this;
    }

    /**
    * Gets extraDhcpOpts
    *  功能说明：扩展属性：DHCP的扩展Option，详情参见“ExtraDhcpOpt对象”表
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOpt[]
    */
    public function getExtraDhcpOpts()
    {
        return $this->container['extraDhcpOpts'];
    }

    /**
    * Sets extraDhcpOpts
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOpt[] $extraDhcpOpts 功能说明：扩展属性：DHCP的扩展Option，详情参见“ExtraDhcpOpt对象”表
    *
    * @return $this
    */
    public function setExtraDhcpOpts($extraDhcpOpts)
    {
        $this->container['extraDhcpOpts'] = $extraDhcpOpts;
        return $this;
    }

    /**
    * Gets fixedIps
    *  功能说明：端口的IP地址，参见“FixedIp对象”表 约束：device_owner为neutron: VIP_PORT时最多指定一个fixed_ip，给云服务器创建IPv6端口时，必须具备一个IPv4 subnet_id和一个IPv6 subnet_id 。
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\FixedIp[]
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\FixedIp[] $fixedIps 功能说明：端口的IP地址，参见“FixedIp对象”表 约束：device_owner为neutron: VIP_PORT时最多指定一个fixed_ip，给云服务器创建IPv6端口时，必须具备一个IPv4 subnet_id和一个IPv6 subnet_id 。
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets id
    *  端口ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 端口ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets macAddress
    *  功能说明：端口mac地址 约束：只支持系统动态分配，不支持指定
    *
    * @return string
    */
    public function getMacAddress()
    {
        return $this->container['macAddress'];
    }

    /**
    * Sets macAddress
    *
    * @param string $macAddress 功能说明：端口mac地址 约束：只支持系统动态分配，不支持指定
    *
    * @return $this
    */
    public function setMacAddress($macAddress)
    {
        $this->container['macAddress'] = $macAddress;
        return $this;
    }

    /**
    * Gets name
    *  功能说明：端口的名称 取值范围：0-255个字符
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 功能说明：端口的名称 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets networkId
    *  端口所属网络ID
    *
    * @return string
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string $networkId 端口所属网络ID
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets portSecurityEnabled
    *  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    *
    * @return bool
    */
    public function getPortSecurityEnabled()
    {
        return $this->container['portSecurityEnabled'];
    }

    /**
    * Sets portSecurityEnabled
    *
    * @param bool $portSecurityEnabled 功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    *
    * @return $this
    */
    public function setPortSecurityEnabled($portSecurityEnabled)
    {
        $this->container['portSecurityEnabled'] = $portSecurityEnabled;
        return $this;
    }

    /**
    * Gets securityGroups
    *  功能说明：作用在该端口上的安全组的ID列表 约束：不支持更新为空
    *
    * @return string[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param string[] $securityGroups 功能说明：作用在该端口上的安全组的ID列表 约束：不支持更新为空
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：端口状态 取值范围：ACTIVE，BUILD，DOWN 约束：Hana硬直通虚拟机端口状态总为DOWN
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 功能说明：端口状态 取值范围：ACTIVE，BUILD，DOWN 约束：Hana硬直通虚拟机端口状态总为DOWN
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
    *  项目ID
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 项目ID
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
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    *  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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

