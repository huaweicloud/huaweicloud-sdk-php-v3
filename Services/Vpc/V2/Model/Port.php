<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Port implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Port';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  端口ID
    * name  功能说明：端口名称 取值范围：0~255个字符，支持中文、英文、字母、_(下划线)、-（中划线）
    * networkId  端口所属网络的ID
    * adminStateUp  功能说明：管理状态 约束：只支持true，默认为true
    * macAddress  功能描述：端口MAC地址 约束：由系统分配，不支持指定
    * fixedIps  功能说明：端口IP 例如：\"fixed_ips\": [{\"subnet_id\": \"4dc70db6-cb7f-4200-9790-a6a910776bba\", \"ip_address\": \"192.169.25.79\"}] 约束：一个端口只支持一个fixed_ip，且不支持更新。
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新，由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属，如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新，由系统自动维护
    * tenantId  项目ID
    * status  功能说明：端口状态，Hana硬直通虚拟机端口状态总为DOWN 取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  安全组的ID列表
    * allowedAddressPairs  功能说明：IP/Mac对列表 约束：IP地址不允许为 “0.0.0.0” 如果配置地址池较大（CIDR掩码小于24位），建议为该port配置一个单独的安全组。
    * extraDhcpOpts  功能说明：DHCP的扩展Option(扩展属性)
    * bindingvnicType  功能说明：绑定的vNIC类型 取值范围：  - normal（软交换）  - direct: SRIOV硬直通（不支持）
    * dnsAssignment  功能说明：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护
    * dnsName  功能说明：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护
    * bindingvifDetails  功能说明：vif的详细信息，  \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 约束：管理员权限，普通租户不可指定
    * bindingprofile  功能说明：提供用户设置自定义信息(扩展属性)
    * instanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：不支持设置和更新，由系统自动维护
    * instanceType  功能说明：端口所属实例类型，例如“RDS” 约束：不支持设置和更新，由系统自动维护
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'networkId' => 'string',
            'adminStateUp' => 'bool',
            'macAddress' => 'string',
            'fixedIps' => '\HuaweiCloud\SDK\Vpc\V2\Model\FixedIp[]',
            'deviceId' => 'string',
            'deviceOwner' => 'string',
            'tenantId' => 'string',
            'status' => 'string',
            'securityGroups' => 'string[]',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\Vpc\V2\Model\AllowedAddressPair[]',
            'extraDhcpOpts' => '\HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOpt[]',
            'bindingvnicType' => 'string',
            'dnsAssignment' => '\HuaweiCloud\SDK\Vpc\V2\Model\DnsAssignMent[]',
            'dnsName' => 'string',
            'bindingvifDetails' => 'object',
            'bindingprofile' => 'object',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'portSecurityEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  端口ID
    * name  功能说明：端口名称 取值范围：0~255个字符，支持中文、英文、字母、_(下划线)、-（中划线）
    * networkId  端口所属网络的ID
    * adminStateUp  功能说明：管理状态 约束：只支持true，默认为true
    * macAddress  功能描述：端口MAC地址 约束：由系统分配，不支持指定
    * fixedIps  功能说明：端口IP 例如：\"fixed_ips\": [{\"subnet_id\": \"4dc70db6-cb7f-4200-9790-a6a910776bba\", \"ip_address\": \"192.169.25.79\"}] 约束：一个端口只支持一个fixed_ip，且不支持更新。
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新，由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属，如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新，由系统自动维护
    * tenantId  项目ID
    * status  功能说明：端口状态，Hana硬直通虚拟机端口状态总为DOWN 取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  安全组的ID列表
    * allowedAddressPairs  功能说明：IP/Mac对列表 约束：IP地址不允许为 “0.0.0.0” 如果配置地址池较大（CIDR掩码小于24位），建议为该port配置一个单独的安全组。
    * extraDhcpOpts  功能说明：DHCP的扩展Option(扩展属性)
    * bindingvnicType  功能说明：绑定的vNIC类型 取值范围：  - normal（软交换）  - direct: SRIOV硬直通（不支持）
    * dnsAssignment  功能说明：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护
    * dnsName  功能说明：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护
    * bindingvifDetails  功能说明：vif的详细信息，  \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 约束：管理员权限，普通租户不可指定
    * bindingprofile  功能说明：提供用户设置自定义信息(扩展属性)
    * instanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：不支持设置和更新，由系统自动维护
    * instanceType  功能说明：端口所属实例类型，例如“RDS” 约束：不支持设置和更新，由系统自动维护
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'networkId' => null,
        'adminStateUp' => null,
        'macAddress' => null,
        'fixedIps' => null,
        'deviceId' => null,
        'deviceOwner' => null,
        'tenantId' => null,
        'status' => null,
        'securityGroups' => null,
        'allowedAddressPairs' => null,
        'extraDhcpOpts' => null,
        'bindingvnicType' => null,
        'dnsAssignment' => null,
        'dnsName' => null,
        'bindingvifDetails' => null,
        'bindingprofile' => null,
        'instanceId' => null,
        'instanceType' => null,
        'portSecurityEnabled' => null
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
    * id  端口ID
    * name  功能说明：端口名称 取值范围：0~255个字符，支持中文、英文、字母、_(下划线)、-（中划线）
    * networkId  端口所属网络的ID
    * adminStateUp  功能说明：管理状态 约束：只支持true，默认为true
    * macAddress  功能描述：端口MAC地址 约束：由系统分配，不支持指定
    * fixedIps  功能说明：端口IP 例如：\"fixed_ips\": [{\"subnet_id\": \"4dc70db6-cb7f-4200-9790-a6a910776bba\", \"ip_address\": \"192.169.25.79\"}] 约束：一个端口只支持一个fixed_ip，且不支持更新。
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新，由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属，如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新，由系统自动维护
    * tenantId  项目ID
    * status  功能说明：端口状态，Hana硬直通虚拟机端口状态总为DOWN 取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  安全组的ID列表
    * allowedAddressPairs  功能说明：IP/Mac对列表 约束：IP地址不允许为 “0.0.0.0” 如果配置地址池较大（CIDR掩码小于24位），建议为该port配置一个单独的安全组。
    * extraDhcpOpts  功能说明：DHCP的扩展Option(扩展属性)
    * bindingvnicType  功能说明：绑定的vNIC类型 取值范围：  - normal（软交换）  - direct: SRIOV硬直通（不支持）
    * dnsAssignment  功能说明：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护
    * dnsName  功能说明：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护
    * bindingvifDetails  功能说明：vif的详细信息，  \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 约束：管理员权限，普通租户不可指定
    * bindingprofile  功能说明：提供用户设置自定义信息(扩展属性)
    * instanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：不支持设置和更新，由系统自动维护
    * instanceType  功能说明：端口所属实例类型，例如“RDS” 约束：不支持设置和更新，由系统自动维护
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'networkId' => 'network_id',
            'adminStateUp' => 'admin_state_up',
            'macAddress' => 'mac_address',
            'fixedIps' => 'fixed_ips',
            'deviceId' => 'device_id',
            'deviceOwner' => 'device_owner',
            'tenantId' => 'tenant_id',
            'status' => 'status',
            'securityGroups' => 'security_groups',
            'allowedAddressPairs' => 'allowed_address_pairs',
            'extraDhcpOpts' => 'extra_dhcp_opts',
            'bindingvnicType' => 'binding:vnic_type',
            'dnsAssignment' => 'dns_assignment',
            'dnsName' => 'dns_name',
            'bindingvifDetails' => 'binding:vif_details',
            'bindingprofile' => 'binding:profile',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'portSecurityEnabled' => 'port_security_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  端口ID
    * name  功能说明：端口名称 取值范围：0~255个字符，支持中文、英文、字母、_(下划线)、-（中划线）
    * networkId  端口所属网络的ID
    * adminStateUp  功能说明：管理状态 约束：只支持true，默认为true
    * macAddress  功能描述：端口MAC地址 约束：由系统分配，不支持指定
    * fixedIps  功能说明：端口IP 例如：\"fixed_ips\": [{\"subnet_id\": \"4dc70db6-cb7f-4200-9790-a6a910776bba\", \"ip_address\": \"192.169.25.79\"}] 约束：一个端口只支持一个fixed_ip，且不支持更新。
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新，由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属，如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新，由系统自动维护
    * tenantId  项目ID
    * status  功能说明：端口状态，Hana硬直通虚拟机端口状态总为DOWN 取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  安全组的ID列表
    * allowedAddressPairs  功能说明：IP/Mac对列表 约束：IP地址不允许为 “0.0.0.0” 如果配置地址池较大（CIDR掩码小于24位），建议为该port配置一个单独的安全组。
    * extraDhcpOpts  功能说明：DHCP的扩展Option(扩展属性)
    * bindingvnicType  功能说明：绑定的vNIC类型 取值范围：  - normal（软交换）  - direct: SRIOV硬直通（不支持）
    * dnsAssignment  功能说明：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护
    * dnsName  功能说明：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护
    * bindingvifDetails  功能说明：vif的详细信息，  \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 约束：管理员权限，普通租户不可指定
    * bindingprofile  功能说明：提供用户设置自定义信息(扩展属性)
    * instanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：不支持设置和更新，由系统自动维护
    * instanceType  功能说明：端口所属实例类型，例如“RDS” 约束：不支持设置和更新，由系统自动维护
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'networkId' => 'setNetworkId',
            'adminStateUp' => 'setAdminStateUp',
            'macAddress' => 'setMacAddress',
            'fixedIps' => 'setFixedIps',
            'deviceId' => 'setDeviceId',
            'deviceOwner' => 'setDeviceOwner',
            'tenantId' => 'setTenantId',
            'status' => 'setStatus',
            'securityGroups' => 'setSecurityGroups',
            'allowedAddressPairs' => 'setAllowedAddressPairs',
            'extraDhcpOpts' => 'setExtraDhcpOpts',
            'bindingvnicType' => 'setBindingvnicType',
            'dnsAssignment' => 'setDnsAssignment',
            'dnsName' => 'setDnsName',
            'bindingvifDetails' => 'setBindingvifDetails',
            'bindingprofile' => 'setBindingprofile',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'portSecurityEnabled' => 'setPortSecurityEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  端口ID
    * name  功能说明：端口名称 取值范围：0~255个字符，支持中文、英文、字母、_(下划线)、-（中划线）
    * networkId  端口所属网络的ID
    * adminStateUp  功能说明：管理状态 约束：只支持true，默认为true
    * macAddress  功能描述：端口MAC地址 约束：由系统分配，不支持指定
    * fixedIps  功能说明：端口IP 例如：\"fixed_ips\": [{\"subnet_id\": \"4dc70db6-cb7f-4200-9790-a6a910776bba\", \"ip_address\": \"192.169.25.79\"}] 约束：一个端口只支持一个fixed_ip，且不支持更新。
    * deviceId  功能说明：端口所属设备ID 约束：不支持设置和更新，由系统自动维护
    * deviceOwner  功能说明：设备所属 取值范围：合法设备所属，如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新，由系统自动维护
    * tenantId  项目ID
    * status  功能说明：端口状态，Hana硬直通虚拟机端口状态总为DOWN 取值范围：ACTIVE、BUILD、DOWN
    * securityGroups  安全组的ID列表
    * allowedAddressPairs  功能说明：IP/Mac对列表 约束：IP地址不允许为 “0.0.0.0” 如果配置地址池较大（CIDR掩码小于24位），建议为该port配置一个单独的安全组。
    * extraDhcpOpts  功能说明：DHCP的扩展Option(扩展属性)
    * bindingvnicType  功能说明：绑定的vNIC类型 取值范围：  - normal（软交换）  - direct: SRIOV硬直通（不支持）
    * dnsAssignment  功能说明：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护
    * dnsName  功能说明：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护
    * bindingvifDetails  功能说明：vif的详细信息，  \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 约束：管理员权限，普通租户不可指定
    * bindingprofile  功能说明：提供用户设置自定义信息(扩展属性)
    * instanceId  功能说明：端口所属实例ID，例如RDS实例ID 约束：不支持设置和更新，由系统自动维护
    * instanceType  功能说明：端口所属实例类型，例如“RDS” 约束：不支持设置和更新，由系统自动维护
    * portSecurityEnabled  功能说明：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 取值范围：启用（true）或禁用（false）
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'networkId' => 'getNetworkId',
            'adminStateUp' => 'getAdminStateUp',
            'macAddress' => 'getMacAddress',
            'fixedIps' => 'getFixedIps',
            'deviceId' => 'getDeviceId',
            'deviceOwner' => 'getDeviceOwner',
            'tenantId' => 'getTenantId',
            'status' => 'getStatus',
            'securityGroups' => 'getSecurityGroups',
            'allowedAddressPairs' => 'getAllowedAddressPairs',
            'extraDhcpOpts' => 'getExtraDhcpOpts',
            'bindingvnicType' => 'getBindingvnicType',
            'dnsAssignment' => 'getDnsAssignment',
            'dnsName' => 'getDnsName',
            'bindingvifDetails' => 'getBindingvifDetails',
            'bindingprofile' => 'getBindingprofile',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'portSecurityEnabled' => 'getPortSecurityEnabled'
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
    const DEVICE_OWNER_NETWORKDHCP = 'network:dhcp';
    const DEVICE_OWNER_NETWORKVIP_PORT = 'network:VIP_PORT';
    const DEVICE_OWNER_NETWORKROUTER_INTERFACE_DISTRIBUTED = 'network:router_interface_distributed';
    const DEVICE_OWNER_NETWORKROUTER_CENTRALIZED_SNAT = 'network:router_centralized_snat';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_BUILD = 'BUILD';
    const STATUS_DOWN = 'DOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeviceOwnerAllowableValues()
    {
        return [
            self::DEVICE_OWNER_NETWORKDHCP,
            self::DEVICE_OWNER_NETWORKVIP_PORT,
            self::DEVICE_OWNER_NETWORKROUTER_INTERFACE_DISTRIBUTED,
            self::DEVICE_OWNER_NETWORKROUTER_CENTRALIZED_SNAT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_BUILD,
            self::STATUS_DOWN,
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
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['macAddress'] = isset($data['macAddress']) ? $data['macAddress'] : null;
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
        $this->container['extraDhcpOpts'] = isset($data['extraDhcpOpts']) ? $data['extraDhcpOpts'] : null;
        $this->container['bindingvnicType'] = isset($data['bindingvnicType']) ? $data['bindingvnicType'] : null;
        $this->container['dnsAssignment'] = isset($data['dnsAssignment']) ? $data['dnsAssignment'] : null;
        $this->container['dnsName'] = isset($data['dnsName']) ? $data['dnsName'] : null;
        $this->container['bindingvifDetails'] = isset($data['bindingvifDetails']) ? $data['bindingvifDetails'] : null;
        $this->container['bindingprofile'] = isset($data['bindingprofile']) ? $data['bindingprofile'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['portSecurityEnabled'] = isset($data['portSecurityEnabled']) ? $data['portSecurityEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['macAddress'] === null) {
            $invalidProperties[] = "'macAddress' can't be null";
        }
        if ($this->container['fixedIps'] === null) {
            $invalidProperties[] = "'fixedIps' can't be null";
        }
        if ($this->container['deviceId'] === null) {
            $invalidProperties[] = "'deviceId' can't be null";
        }
        if ($this->container['deviceOwner'] === null) {
            $invalidProperties[] = "'deviceOwner' can't be null";
        }
            $allowedValues = $this->getDeviceOwnerAllowableValues();
                if (!is_null($this->container['deviceOwner']) && !in_array($this->container['deviceOwner'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deviceOwner', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['allowedAddressPairs'] === null) {
            $invalidProperties[] = "'allowedAddressPairs' can't be null";
        }
        if ($this->container['extraDhcpOpts'] === null) {
            $invalidProperties[] = "'extraDhcpOpts' can't be null";
        }
        if ($this->container['bindingvnicType'] === null) {
            $invalidProperties[] = "'bindingvnicType' can't be null";
        }
        if ($this->container['dnsAssignment'] === null) {
            $invalidProperties[] = "'dnsAssignment' can't be null";
        }
        if ($this->container['dnsName'] === null) {
            $invalidProperties[] = "'dnsName' can't be null";
        }
        if ($this->container['bindingvifDetails'] === null) {
            $invalidProperties[] = "'bindingvifDetails' can't be null";
        }
        if ($this->container['bindingprofile'] === null) {
            $invalidProperties[] = "'bindingprofile' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
        if ($this->container['portSecurityEnabled'] === null) {
            $invalidProperties[] = "'portSecurityEnabled' can't be null";
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
    * Gets name
    *  功能说明：端口名称 取值范围：0~255个字符，支持中文、英文、字母、_(下划线)、-（中划线）
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
    * @param string $name 功能说明：端口名称 取值范围：0~255个字符，支持中文、英文、字母、_(下划线)、-（中划线）
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
    *  端口所属网络的ID
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
    * @param string $networkId 端口所属网络的ID
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  功能说明：管理状态 约束：只支持true，默认为true
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
    * @param bool $adminStateUp 功能说明：管理状态 约束：只支持true，默认为true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets macAddress
    *  功能描述：端口MAC地址 约束：由系统分配，不支持指定
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
    * @param string $macAddress 功能描述：端口MAC地址 约束：由系统分配，不支持指定
    *
    * @return $this
    */
    public function setMacAddress($macAddress)
    {
        $this->container['macAddress'] = $macAddress;
        return $this;
    }

    /**
    * Gets fixedIps
    *  功能说明：端口IP 例如：\"fixed_ips\": [{\"subnet_id\": \"4dc70db6-cb7f-4200-9790-a6a910776bba\", \"ip_address\": \"192.169.25.79\"}] 约束：一个端口只支持一个fixed_ip，且不支持更新。
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
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\FixedIp[] $fixedIps 功能说明：端口IP 例如：\"fixed_ips\": [{\"subnet_id\": \"4dc70db6-cb7f-4200-9790-a6a910776bba\", \"ip_address\": \"192.169.25.79\"}] 约束：一个端口只支持一个fixed_ip，且不支持更新。
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets deviceId
    *  功能说明：端口所属设备ID 约束：不支持设置和更新，由系统自动维护
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
    * @param string $deviceId 功能说明：端口所属设备ID 约束：不支持设置和更新，由系统自动维护
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
    *  功能说明：设备所属 取值范围：合法设备所属，如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新，由系统自动维护
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
    * @param string $deviceOwner 功能说明：设备所属 取值范围：合法设备所属，如network:dhcp、network:VIP_PORT、network:router_interface_distributed、network:router_centralized_snat 约束：不支持设置和更新，由系统自动维护
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
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
    * Gets status
    *  功能说明：端口状态，Hana硬直通虚拟机端口状态总为DOWN 取值范围：ACTIVE、BUILD、DOWN
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
    * @param string $status 功能说明：端口状态，Hana硬直通虚拟机端口状态总为DOWN 取值范围：ACTIVE、BUILD、DOWN
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
    *  安全组的ID列表
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
    * @param string[] $securityGroups 安全组的ID列表
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  功能说明：IP/Mac对列表 约束：IP地址不允许为 “0.0.0.0” 如果配置地址池较大（CIDR掩码小于24位），建议为该port配置一个单独的安全组。
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
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\AllowedAddressPair[] $allowedAddressPairs 功能说明：IP/Mac对列表 约束：IP地址不允许为 “0.0.0.0” 如果配置地址池较大（CIDR掩码小于24位），建议为该port配置一个单独的安全组。
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
        return $this;
    }

    /**
    * Gets extraDhcpOpts
    *  功能说明：DHCP的扩展Option(扩展属性)
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
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ExtraDhcpOpt[] $extraDhcpOpts 功能说明：DHCP的扩展Option(扩展属性)
    *
    * @return $this
    */
    public function setExtraDhcpOpts($extraDhcpOpts)
    {
        $this->container['extraDhcpOpts'] = $extraDhcpOpts;
        return $this;
    }

    /**
    * Gets bindingvnicType
    *  功能说明：绑定的vNIC类型 取值范围：  - normal（软交换）  - direct: SRIOV硬直通（不支持）
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
    * @param string $bindingvnicType 功能说明：绑定的vNIC类型 取值范围：  - normal（软交换）  - direct: SRIOV硬直通（不支持）
    *
    * @return $this
    */
    public function setBindingvnicType($bindingvnicType)
    {
        $this->container['bindingvnicType'] = $bindingvnicType;
        return $this;
    }

    /**
    * Gets dnsAssignment
    *  功能说明：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护
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
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\DnsAssignMent[] $dnsAssignment 功能说明：主网卡默认内网域名信息 约束：不支持设置和更新，由系统自动维护
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
    *  功能说明：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护
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
    * @param string $dnsName 功能说明：主网卡默认内网DNS名称 约束：不支持设置和更新，由系统自动维护
    *
    * @return $this
    */
    public function setDnsName($dnsName)
    {
        $this->container['dnsName'] = $dnsName;
        return $this;
    }

    /**
    * Gets bindingvifDetails
    *  功能说明：vif的详细信息，  \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 约束：管理员权限，普通租户不可指定
    *
    * @return object
    */
    public function getBindingvifDetails()
    {
        return $this->container['bindingvifDetails'];
    }

    /**
    * Sets bindingvifDetails
    *
    * @param object $bindingvifDetails 功能说明：vif的详细信息，  \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 约束：管理员权限，普通租户不可指定
    *
    * @return $this
    */
    public function setBindingvifDetails($bindingvifDetails)
    {
        $this->container['bindingvifDetails'] = $bindingvifDetails;
        return $this;
    }

    /**
    * Gets bindingprofile
    *  功能说明：提供用户设置自定义信息(扩展属性)
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
    * @param object $bindingprofile 功能说明：提供用户设置自定义信息(扩展属性)
    *
    * @return $this
    */
    public function setBindingprofile($bindingprofile)
    {
        $this->container['bindingprofile'] = $bindingprofile;
        return $this;
    }

    /**
    * Gets instanceId
    *  功能说明：端口所属实例ID，例如RDS实例ID 约束：不支持设置和更新，由系统自动维护
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 功能说明：端口所属实例ID，例如RDS实例ID 约束：不支持设置和更新，由系统自动维护
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
    *  功能说明：端口所属实例类型，例如“RDS” 约束：不支持设置和更新，由系统自动维护
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType 功能说明：端口所属实例类型，例如“RDS” 约束：不支持设置和更新，由系统自动维护
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
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

