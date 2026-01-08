<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPortsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPortsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * id  **参数解释**： 端口的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 端口的名称。 **取值范围**： 默认为空，最大长度不超过255。
    * adminStateUp  **参数解释**： 端口的管理状态。 **取值范围**： true，false，默认值true。
    * status  **参数解释**： 端口的状态。 **取值范围**： - ACTIVE：端口处- 于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。Hana 硬直通虚拟机端口状态总为DOWN。
    * virsubnetId  **参数解释**： 端口所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * deviceId  **参数解释**： 端口所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * macAddress  **参数解释**： 端口的MAC地址。 **取值范围**： 不涉及
    * deviceOwner  **参数解释**： 端口所属的设备名称。 **取值范围**： - network:dhcp, 表示DHCP服务 - network:router_interface_distributed, 表示子网网关地址 - compute:xxx, 表示云服务器网卡私有IP地址，其中XXX对应具体的可用区名称，例如compute:aa-bb-cc表示私有IP地址被可用区aa-bb-cc内的云服务器使用 - neutron:VIP_PORT, 表示虚拟IP地址 - neutron:LOADBALANCERV2, 表示共享型ELB - neutron:LOADBALANCERV3, 表示独享型ELB - network:endpoint_interface, 表示VPC终端节点 - network:nat_gateway, 表示NAT网关 - network:ucmp, 表示UCMP端口，为企业路由器服务所用
    * deviceOwnerPrefixlike  **参数解释**： 端口所属的设备名称前缀。 **取值范围**： - network：过滤出device_owner前缀是network的端口，如DHCP端口。 - compute：过滤出device_owner前缀是compute的端口，如云服务器网卡。 - neutron：过滤出device_owner前缀是compute的端口，如虚拟IP地址。
    * description  **参数解释**： 端口的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * bindinghostId  **参数解释**： 端口所在的主机ID。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 端口的私有IP地址。 **取值范围**： - private_ips=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - private_ips=subnet_cidr_id={subnet_id}，其中{subnet_id}填IPv4子网或IPv6子网的ID，如011fc878-5521-4654-a1ad-f5b0b5820302。
    * securityGroups  **参数解释**： 端口绑定的安全组列表。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 端口所在的VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * allowedAddressPairs  **参数解释**： 端口的IP/Mac对列表。 **取值范围**： - allowed_address_pairs=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - allowed_address_pairs=mac_address={mac_address}，其中{mac_address}填MAC地址，如fa:16:3e:b1:da:62。
    * instanceId  **参数解释**： 端口所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 端口所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'id' => 'string[]',
            'name' => 'string[]',
            'adminStateUp' => 'bool',
            'status' => 'string',
            'virsubnetId' => 'string[]',
            'deviceId' => 'string[]',
            'macAddress' => 'string[]',
            'deviceOwner' => 'string[]',
            'deviceOwnerPrefixlike' => 'string',
            'description' => 'string[]',
            'bindinghostId' => 'string[]',
            'privateIps' => 'string[]',
            'securityGroups' => 'string[]',
            'vpcId' => 'string[]',
            'allowedAddressPairs' => 'string[]',
            'instanceId' => 'string',
            'instanceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * id  **参数解释**： 端口的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 端口的名称。 **取值范围**： 默认为空，最大长度不超过255。
    * adminStateUp  **参数解释**： 端口的管理状态。 **取值范围**： true，false，默认值true。
    * status  **参数解释**： 端口的状态。 **取值范围**： - ACTIVE：端口处- 于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。Hana 硬直通虚拟机端口状态总为DOWN。
    * virsubnetId  **参数解释**： 端口所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * deviceId  **参数解释**： 端口所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * macAddress  **参数解释**： 端口的MAC地址。 **取值范围**： 不涉及
    * deviceOwner  **参数解释**： 端口所属的设备名称。 **取值范围**： - network:dhcp, 表示DHCP服务 - network:router_interface_distributed, 表示子网网关地址 - compute:xxx, 表示云服务器网卡私有IP地址，其中XXX对应具体的可用区名称，例如compute:aa-bb-cc表示私有IP地址被可用区aa-bb-cc内的云服务器使用 - neutron:VIP_PORT, 表示虚拟IP地址 - neutron:LOADBALANCERV2, 表示共享型ELB - neutron:LOADBALANCERV3, 表示独享型ELB - network:endpoint_interface, 表示VPC终端节点 - network:nat_gateway, 表示NAT网关 - network:ucmp, 表示UCMP端口，为企业路由器服务所用
    * deviceOwnerPrefixlike  **参数解释**： 端口所属的设备名称前缀。 **取值范围**： - network：过滤出device_owner前缀是network的端口，如DHCP端口。 - compute：过滤出device_owner前缀是compute的端口，如云服务器网卡。 - neutron：过滤出device_owner前缀是compute的端口，如虚拟IP地址。
    * description  **参数解释**： 端口的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * bindinghostId  **参数解释**： 端口所在的主机ID。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 端口的私有IP地址。 **取值范围**： - private_ips=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - private_ips=subnet_cidr_id={subnet_id}，其中{subnet_id}填IPv4子网或IPv6子网的ID，如011fc878-5521-4654-a1ad-f5b0b5820302。
    * securityGroups  **参数解释**： 端口绑定的安全组列表。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 端口所在的VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * allowedAddressPairs  **参数解释**： 端口的IP/Mac对列表。 **取值范围**： - allowed_address_pairs=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - allowed_address_pairs=mac_address={mac_address}，其中{mac_address}填MAC地址，如fa:16:3e:b1:da:62。
    * instanceId  **参数解释**： 端口所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 端口所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'id' => null,
        'name' => null,
        'adminStateUp' => null,
        'status' => null,
        'virsubnetId' => null,
        'deviceId' => null,
        'macAddress' => null,
        'deviceOwner' => null,
        'deviceOwnerPrefixlike' => null,
        'description' => null,
        'bindinghostId' => null,
        'privateIps' => null,
        'securityGroups' => null,
        'vpcId' => null,
        'allowedAddressPairs' => null,
        'instanceId' => null,
        'instanceType' => null
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
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * id  **参数解释**： 端口的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 端口的名称。 **取值范围**： 默认为空，最大长度不超过255。
    * adminStateUp  **参数解释**： 端口的管理状态。 **取值范围**： true，false，默认值true。
    * status  **参数解释**： 端口的状态。 **取值范围**： - ACTIVE：端口处- 于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。Hana 硬直通虚拟机端口状态总为DOWN。
    * virsubnetId  **参数解释**： 端口所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * deviceId  **参数解释**： 端口所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * macAddress  **参数解释**： 端口的MAC地址。 **取值范围**： 不涉及
    * deviceOwner  **参数解释**： 端口所属的设备名称。 **取值范围**： - network:dhcp, 表示DHCP服务 - network:router_interface_distributed, 表示子网网关地址 - compute:xxx, 表示云服务器网卡私有IP地址，其中XXX对应具体的可用区名称，例如compute:aa-bb-cc表示私有IP地址被可用区aa-bb-cc内的云服务器使用 - neutron:VIP_PORT, 表示虚拟IP地址 - neutron:LOADBALANCERV2, 表示共享型ELB - neutron:LOADBALANCERV3, 表示独享型ELB - network:endpoint_interface, 表示VPC终端节点 - network:nat_gateway, 表示NAT网关 - network:ucmp, 表示UCMP端口，为企业路由器服务所用
    * deviceOwnerPrefixlike  **参数解释**： 端口所属的设备名称前缀。 **取值范围**： - network：过滤出device_owner前缀是network的端口，如DHCP端口。 - compute：过滤出device_owner前缀是compute的端口，如云服务器网卡。 - neutron：过滤出device_owner前缀是compute的端口，如虚拟IP地址。
    * description  **参数解释**： 端口的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * bindinghostId  **参数解释**： 端口所在的主机ID。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 端口的私有IP地址。 **取值范围**： - private_ips=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - private_ips=subnet_cidr_id={subnet_id}，其中{subnet_id}填IPv4子网或IPv6子网的ID，如011fc878-5521-4654-a1ad-f5b0b5820302。
    * securityGroups  **参数解释**： 端口绑定的安全组列表。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 端口所在的VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * allowedAddressPairs  **参数解释**： 端口的IP/Mac对列表。 **取值范围**： - allowed_address_pairs=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - allowed_address_pairs=mac_address={mac_address}，其中{mac_address}填MAC地址，如fa:16:3e:b1:da:62。
    * instanceId  **参数解释**： 端口所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 端口所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'id' => 'id',
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'status' => 'status',
            'virsubnetId' => 'virsubnet_id',
            'deviceId' => 'device_id',
            'macAddress' => 'mac_address',
            'deviceOwner' => 'device_owner',
            'deviceOwnerPrefixlike' => 'device_owner_prefixlike',
            'description' => 'description',
            'bindinghostId' => 'binding:host_id',
            'privateIps' => 'private_ips',
            'securityGroups' => 'security_groups',
            'vpcId' => 'vpc_id',
            'allowedAddressPairs' => 'allowed_address_pairs',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * id  **参数解释**： 端口的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 端口的名称。 **取值范围**： 默认为空，最大长度不超过255。
    * adminStateUp  **参数解释**： 端口的管理状态。 **取值范围**： true，false，默认值true。
    * status  **参数解释**： 端口的状态。 **取值范围**： - ACTIVE：端口处- 于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。Hana 硬直通虚拟机端口状态总为DOWN。
    * virsubnetId  **参数解释**： 端口所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * deviceId  **参数解释**： 端口所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * macAddress  **参数解释**： 端口的MAC地址。 **取值范围**： 不涉及
    * deviceOwner  **参数解释**： 端口所属的设备名称。 **取值范围**： - network:dhcp, 表示DHCP服务 - network:router_interface_distributed, 表示子网网关地址 - compute:xxx, 表示云服务器网卡私有IP地址，其中XXX对应具体的可用区名称，例如compute:aa-bb-cc表示私有IP地址被可用区aa-bb-cc内的云服务器使用 - neutron:VIP_PORT, 表示虚拟IP地址 - neutron:LOADBALANCERV2, 表示共享型ELB - neutron:LOADBALANCERV3, 表示独享型ELB - network:endpoint_interface, 表示VPC终端节点 - network:nat_gateway, 表示NAT网关 - network:ucmp, 表示UCMP端口，为企业路由器服务所用
    * deviceOwnerPrefixlike  **参数解释**： 端口所属的设备名称前缀。 **取值范围**： - network：过滤出device_owner前缀是network的端口，如DHCP端口。 - compute：过滤出device_owner前缀是compute的端口，如云服务器网卡。 - neutron：过滤出device_owner前缀是compute的端口，如虚拟IP地址。
    * description  **参数解释**： 端口的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * bindinghostId  **参数解释**： 端口所在的主机ID。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 端口的私有IP地址。 **取值范围**： - private_ips=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - private_ips=subnet_cidr_id={subnet_id}，其中{subnet_id}填IPv4子网或IPv6子网的ID，如011fc878-5521-4654-a1ad-f5b0b5820302。
    * securityGroups  **参数解释**： 端口绑定的安全组列表。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 端口所在的VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * allowedAddressPairs  **参数解释**： 端口的IP/Mac对列表。 **取值范围**： - allowed_address_pairs=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - allowed_address_pairs=mac_address={mac_address}，其中{mac_address}填MAC地址，如fa:16:3e:b1:da:62。
    * instanceId  **参数解释**： 端口所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 端口所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'id' => 'setId',
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'status' => 'setStatus',
            'virsubnetId' => 'setVirsubnetId',
            'deviceId' => 'setDeviceId',
            'macAddress' => 'setMacAddress',
            'deviceOwner' => 'setDeviceOwner',
            'deviceOwnerPrefixlike' => 'setDeviceOwnerPrefixlike',
            'description' => 'setDescription',
            'bindinghostId' => 'setBindinghostId',
            'privateIps' => 'setPrivateIps',
            'securityGroups' => 'setSecurityGroups',
            'vpcId' => 'setVpcId',
            'allowedAddressPairs' => 'setAllowedAddressPairs',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * id  **参数解释**： 端口的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    * name  **参数解释**： 端口的名称。 **取值范围**： 默认为空，最大长度不超过255。
    * adminStateUp  **参数解释**： 端口的管理状态。 **取值范围**： true，false，默认值true。
    * status  **参数解释**： 端口的状态。 **取值范围**： - ACTIVE：端口处- 于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。Hana 硬直通虚拟机端口状态总为DOWN。
    * virsubnetId  **参数解释**： 端口所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * deviceId  **参数解释**： 端口所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * macAddress  **参数解释**： 端口的MAC地址。 **取值范围**： 不涉及
    * deviceOwner  **参数解释**： 端口所属的设备名称。 **取值范围**： - network:dhcp, 表示DHCP服务 - network:router_interface_distributed, 表示子网网关地址 - compute:xxx, 表示云服务器网卡私有IP地址，其中XXX对应具体的可用区名称，例如compute:aa-bb-cc表示私有IP地址被可用区aa-bb-cc内的云服务器使用 - neutron:VIP_PORT, 表示虚拟IP地址 - neutron:LOADBALANCERV2, 表示共享型ELB - neutron:LOADBALANCERV3, 表示独享型ELB - network:endpoint_interface, 表示VPC终端节点 - network:nat_gateway, 表示NAT网关 - network:ucmp, 表示UCMP端口，为企业路由器服务所用
    * deviceOwnerPrefixlike  **参数解释**： 端口所属的设备名称前缀。 **取值范围**： - network：过滤出device_owner前缀是network的端口，如DHCP端口。 - compute：过滤出device_owner前缀是compute的端口，如云服务器网卡。 - neutron：过滤出device_owner前缀是compute的端口，如虚拟IP地址。
    * description  **参数解释**： 端口的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * bindinghostId  **参数解释**： 端口所在的主机ID。 **取值范围**： 不涉及。
    * privateIps  **参数解释**： 端口的私有IP地址。 **取值范围**： - private_ips=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - private_ips=subnet_cidr_id={subnet_id}，其中{subnet_id}填IPv4子网或IPv6子网的ID，如011fc878-5521-4654-a1ad-f5b0b5820302。
    * securityGroups  **参数解释**： 端口绑定的安全组列表。 **取值范围**： 不涉及。
    * vpcId  **参数解释**： 端口所在的VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * allowedAddressPairs  **参数解释**： 端口的IP/Mac对列表。 **取值范围**： - allowed_address_pairs=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - allowed_address_pairs=mac_address={mac_address}，其中{mac_address}填MAC地址，如fa:16:3e:b1:da:62。
    * instanceId  **参数解释**： 端口所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 端口所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'id' => 'getId',
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'status' => 'getStatus',
            'virsubnetId' => 'getVirsubnetId',
            'deviceId' => 'getDeviceId',
            'macAddress' => 'getMacAddress',
            'deviceOwner' => 'getDeviceOwner',
            'deviceOwnerPrefixlike' => 'getDeviceOwnerPrefixlike',
            'description' => 'getDescription',
            'bindinghostId' => 'getBindinghostId',
            'privateIps' => 'getPrivateIps',
            'securityGroups' => 'getSecurityGroups',
            'vpcId' => 'getVpcId',
            'allowedAddressPairs' => 'getAllowedAddressPairs',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['macAddress'] = isset($data['macAddress']) ? $data['macAddress'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['deviceOwnerPrefixlike'] = isset($data['deviceOwnerPrefixlike']) ? $data['deviceOwnerPrefixlike'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bindinghostId'] = isset($data['bindinghostId']) ? $data['bindinghostId'] : null;
        $this->container['privateIps'] = isset($data['privateIps']) ? $data['privateIps'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 不涉及。
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
    * @param string $projectId **参数解释**： 项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 端口的资源ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id **参数解释**： 端口的资源ID。 **取值范围**： 带“-”的标准UUID格式。
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
    *  **参数解释**： 端口的名称。 **取值范围**： 默认为空，最大长度不超过255。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name **参数解释**： 端口的名称。 **取值范围**： 默认为空，最大长度不超过255。
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
    *  **参数解释**： 端口的管理状态。 **取值范围**： true，false，默认值true。
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
    * @param bool|null $adminStateUp **参数解释**： 端口的管理状态。 **取值范围**： true，false，默认值true。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 端口的状态。 **取值范围**： - ACTIVE：端口处- 于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。Hana 硬直通虚拟机端口状态总为DOWN。
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
    * @param string|null $status **参数解释**： 端口的状态。 **取值范围**： - ACTIVE：端口处- 于活动状态，可以正常进行网络通信。 - BUILD：端口正在创建或配置中。 - DOWN：端口处于非活动状态，不能进行网络通信。Hana 硬直通虚拟机端口状态总为DOWN。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  **参数解释**： 端口所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string[]|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string[]|null $virsubnetId **参数解释**： 端口所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets deviceId
    *  **参数解释**： 端口所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string[]|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string[]|null $deviceId **参数解释**： 端口所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets macAddress
    *  **参数解释**： 端口的MAC地址。 **取值范围**： 不涉及
    *
    * @return string[]|null
    */
    public function getMacAddress()
    {
        return $this->container['macAddress'];
    }

    /**
    * Sets macAddress
    *
    * @param string[]|null $macAddress **参数解释**： 端口的MAC地址。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setMacAddress($macAddress)
    {
        $this->container['macAddress'] = $macAddress;
        return $this;
    }

    /**
    * Gets deviceOwner
    *  **参数解释**： 端口所属的设备名称。 **取值范围**： - network:dhcp, 表示DHCP服务 - network:router_interface_distributed, 表示子网网关地址 - compute:xxx, 表示云服务器网卡私有IP地址，其中XXX对应具体的可用区名称，例如compute:aa-bb-cc表示私有IP地址被可用区aa-bb-cc内的云服务器使用 - neutron:VIP_PORT, 表示虚拟IP地址 - neutron:LOADBALANCERV2, 表示共享型ELB - neutron:LOADBALANCERV3, 表示独享型ELB - network:endpoint_interface, 表示VPC终端节点 - network:nat_gateway, 表示NAT网关 - network:ucmp, 表示UCMP端口，为企业路由器服务所用
    *
    * @return string[]|null
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string[]|null $deviceOwner **参数解释**： 端口所属的设备名称。 **取值范围**： - network:dhcp, 表示DHCP服务 - network:router_interface_distributed, 表示子网网关地址 - compute:xxx, 表示云服务器网卡私有IP地址，其中XXX对应具体的可用区名称，例如compute:aa-bb-cc表示私有IP地址被可用区aa-bb-cc内的云服务器使用 - neutron:VIP_PORT, 表示虚拟IP地址 - neutron:LOADBALANCERV2, 表示共享型ELB - neutron:LOADBALANCERV3, 表示独享型ELB - network:endpoint_interface, 表示VPC终端节点 - network:nat_gateway, 表示NAT网关 - network:ucmp, 表示UCMP端口，为企业路由器服务所用
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets deviceOwnerPrefixlike
    *  **参数解释**： 端口所属的设备名称前缀。 **取值范围**： - network：过滤出device_owner前缀是network的端口，如DHCP端口。 - compute：过滤出device_owner前缀是compute的端口，如云服务器网卡。 - neutron：过滤出device_owner前缀是compute的端口，如虚拟IP地址。
    *
    * @return string|null
    */
    public function getDeviceOwnerPrefixlike()
    {
        return $this->container['deviceOwnerPrefixlike'];
    }

    /**
    * Sets deviceOwnerPrefixlike
    *
    * @param string|null $deviceOwnerPrefixlike **参数解释**： 端口所属的设备名称前缀。 **取值范围**： - network：过滤出device_owner前缀是network的端口，如DHCP端口。 - compute：过滤出device_owner前缀是compute的端口，如云服务器网卡。 - neutron：过滤出device_owner前缀是compute的端口，如虚拟IP地址。
    *
    * @return $this
    */
    public function setDeviceOwnerPrefixlike($deviceOwnerPrefixlike)
    {
        $this->container['deviceOwnerPrefixlike'] = $deviceOwnerPrefixlike;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 端口的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description **参数解释**： 端口的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bindinghostId
    *  **参数解释**： 端口所在的主机ID。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getBindinghostId()
    {
        return $this->container['bindinghostId'];
    }

    /**
    * Sets bindinghostId
    *
    * @param string[]|null $bindinghostId **参数解释**： 端口所在的主机ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBindinghostId($bindinghostId)
    {
        $this->container['bindinghostId'] = $bindinghostId;
        return $this;
    }

    /**
    * Gets privateIps
    *  **参数解释**： 端口的私有IP地址。 **取值范围**： - private_ips=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - private_ips=subnet_cidr_id={subnet_id}，其中{subnet_id}填IPv4子网或IPv6子网的ID，如011fc878-5521-4654-a1ad-f5b0b5820302。
    *
    * @return string[]|null
    */
    public function getPrivateIps()
    {
        return $this->container['privateIps'];
    }

    /**
    * Sets privateIps
    *
    * @param string[]|null $privateIps **参数解释**： 端口的私有IP地址。 **取值范围**： - private_ips=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - private_ips=subnet_cidr_id={subnet_id}，其中{subnet_id}填IPv4子网或IPv6子网的ID，如011fc878-5521-4654-a1ad-f5b0b5820302。
    *
    * @return $this
    */
    public function setPrivateIps($privateIps)
    {
        $this->container['privateIps'] = $privateIps;
        return $this;
    }

    /**
    * Gets securityGroups
    *  **参数解释**： 端口绑定的安全组列表。 **取值范围**： 不涉及。
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
    * @param string[]|null $securityGroups **参数解释**： 端口绑定的安全组列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 端口所在的VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string[]|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string[]|null $vpcId **参数解释**： 端口所在的VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  **参数解释**： 端口的IP/Mac对列表。 **取值范围**： - allowed_address_pairs=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - allowed_address_pairs=mac_address={mac_address}，其中{mac_address}填MAC地址，如fa:16:3e:b1:da:62。
    *
    * @return string[]|null
    */
    public function getAllowedAddressPairs()
    {
        return $this->container['allowedAddressPairs'];
    }

    /**
    * Sets allowedAddressPairs
    *
    * @param string[]|null $allowedAddressPairs **参数解释**： 端口的IP/Mac对列表。 **取值范围**： - allowed_address_pairs=ip_address={ip_address}，其中{ip_address}填IP地址，如192.168.21.22。 - allowed_address_pairs=mac_address={mac_address}，其中{mac_address}填MAC地址，如fa:16:3e:b1:da:62。
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 端口所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**： 端口所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  **参数解释**： 端口所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType **参数解释**： 端口所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
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

