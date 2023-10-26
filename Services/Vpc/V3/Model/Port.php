<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

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
    * adminStateUp  1、功能描述：管理状态 2、取值范围：true/false 3、约束：N/A 4、默认值：true 5、权限：N/A
    * bindinghostId  1、功能描述：主机ID 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingprofile  1、功能描述：提供用户设置自定义信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifDetails  1、功能描述：vif的详细信息， \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifType  1、功能描述：端口的接口类型 (ovs/hw_veb等)(扩展属性) 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingvnicType  1、功能描述：绑定的vNIC类型normal: 软交换direct: SRIOV硬直通（不支持） 2、取值范围：normal或者direct 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * createdAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * updatedAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * description  1、功能说明：端口描述 2、取值范围：0-255个字符，不能包含“<”和“>” 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * deviceId  1、功能描述：端口所属设备ID 2、取值范围：标准UUID 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * deviceOwner  1、功能描述：设备所属（DHCP/Router/ lb/Nova） 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * ecsFlavor  1、功能描述：标识这个端口所属虚拟机的flavor 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * id  1、功能描述：端口唯一标识 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * instanceId  1、功能描述：端口所属实例ID，例如RDS实例ID 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * instanceType  1、功能描述：端口所属实例类型，例如“RDS” 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * macAddress  1、功能描述：MAC地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * name  1、功能描述：端口名称 2、取值范围：默认为空，最大长度不超过255 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * portSecurityEnabled  1、功能描述：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 2、取值范围：true/false 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * privateIps  1、功能描述：port的私有IP地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * projectId  1、功能描述：项目ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * securityGroups  1、功能描述：安全组 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * status  1、功能描述：端口状态 2、取值范围：ACTIVE，BUILD，DOWN 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tenantId  1、功能描述：租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * virsubnetId  1、功能描述：所属网络ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcId  1、功能描述：VPC的ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcTenantId  1、功能描述：VPC_租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vtepIp  1、功能描述：本地IP 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * enableEfi  1、功能描述：是否使能efi，使能则表示端口支持vRoCE能力 2、取值范围：true or false 3、约束：N/A 4、默认值：false 5、权限：N/A
    * scope  1、功能描述：作用域 2、取值范围：center，表示作用域为中心；{azId}，表示作用域为具体的可用区 3、约束：N/A 4、默认值：center 5、权限：N/A
    * zoneId  1、功能描述：端口所属的可用分区 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingmigrationInfo  1、功能描述：迁移目的节点信息，包括目的节点的binding:vif_details和binding:vif_type 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * extraDhcpOpts  1、功能描述：DHCP的扩展属性 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * positionType  1、功能描述：边缘场景位置类型 2、取值范围：N/A 3、约束：N/A 4、默认值：center 5、权限：N/A
    * instanceInfo  1、功能描述：端口绑定实例信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tags  1、功能描述：端口标签 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * allowedAddressPairs  1、功能描述：IP/Mac对列表 2、取值范围：N/A 3、约束： - IP地址不允许为 “0.0.0.0/0” - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs的IP地址为“1.1.1.1/0”，表示关闭源目地址检查开关。 - 被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 4、默认值：N/A 5、权限：N/A
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'bindinghostId' => 'string',
            'bindingprofile' => 'object',
            'bindingvifDetails' => 'object',
            'bindingvifType' => 'string',
            'bindingvnicType' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'description' => 'string',
            'deviceId' => 'string',
            'deviceOwner' => 'string',
            'ecsFlavor' => 'string',
            'id' => 'string',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'macAddress' => 'string',
            'name' => 'string',
            'portSecurityEnabled' => 'bool',
            'privateIps' => '\HuaweiCloud\SDK\Vpc\V3\Model\PrivateIpInfo[]',
            'projectId' => 'string',
            'securityGroups' => 'string[]',
            'status' => 'string',
            'tenantId' => 'string',
            'virsubnetId' => 'string',
            'vpcId' => 'string',
            'vpcTenantId' => 'string',
            'vtepIp' => 'string',
            'enableEfi' => 'bool',
            'scope' => 'string',
            'zoneId' => 'string',
            'bindingmigrationInfo' => 'object',
            'extraDhcpOpts' => 'object[]',
            'positionType' => 'string',
            'instanceInfo' => 'object',
            'tags' => 'string[]',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  1、功能描述：管理状态 2、取值范围：true/false 3、约束：N/A 4、默认值：true 5、权限：N/A
    * bindinghostId  1、功能描述：主机ID 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingprofile  1、功能描述：提供用户设置自定义信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifDetails  1、功能描述：vif的详细信息， \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifType  1、功能描述：端口的接口类型 (ovs/hw_veb等)(扩展属性) 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingvnicType  1、功能描述：绑定的vNIC类型normal: 软交换direct: SRIOV硬直通（不支持） 2、取值范围：normal或者direct 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * createdAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * updatedAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * description  1、功能说明：端口描述 2、取值范围：0-255个字符，不能包含“<”和“>” 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * deviceId  1、功能描述：端口所属设备ID 2、取值范围：标准UUID 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * deviceOwner  1、功能描述：设备所属（DHCP/Router/ lb/Nova） 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * ecsFlavor  1、功能描述：标识这个端口所属虚拟机的flavor 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * id  1、功能描述：端口唯一标识 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * instanceId  1、功能描述：端口所属实例ID，例如RDS实例ID 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * instanceType  1、功能描述：端口所属实例类型，例如“RDS” 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * macAddress  1、功能描述：MAC地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * name  1、功能描述：端口名称 2、取值范围：默认为空，最大长度不超过255 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * portSecurityEnabled  1、功能描述：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 2、取值范围：true/false 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * privateIps  1、功能描述：port的私有IP地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * projectId  1、功能描述：项目ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * securityGroups  1、功能描述：安全组 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * status  1、功能描述：端口状态 2、取值范围：ACTIVE，BUILD，DOWN 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tenantId  1、功能描述：租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * virsubnetId  1、功能描述：所属网络ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcId  1、功能描述：VPC的ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcTenantId  1、功能描述：VPC_租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vtepIp  1、功能描述：本地IP 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * enableEfi  1、功能描述：是否使能efi，使能则表示端口支持vRoCE能力 2、取值范围：true or false 3、约束：N/A 4、默认值：false 5、权限：N/A
    * scope  1、功能描述：作用域 2、取值范围：center，表示作用域为中心；{azId}，表示作用域为具体的可用区 3、约束：N/A 4、默认值：center 5、权限：N/A
    * zoneId  1、功能描述：端口所属的可用分区 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingmigrationInfo  1、功能描述：迁移目的节点信息，包括目的节点的binding:vif_details和binding:vif_type 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * extraDhcpOpts  1、功能描述：DHCP的扩展属性 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * positionType  1、功能描述：边缘场景位置类型 2、取值范围：N/A 3、约束：N/A 4、默认值：center 5、权限：N/A
    * instanceInfo  1、功能描述：端口绑定实例信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tags  1、功能描述：端口标签 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * allowedAddressPairs  1、功能描述：IP/Mac对列表 2、取值范围：N/A 3、约束： - IP地址不允许为 “0.0.0.0/0” - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs的IP地址为“1.1.1.1/0”，表示关闭源目地址检查开关。 - 被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 4、默认值：N/A 5、权限：N/A
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'bindinghostId' => null,
        'bindingprofile' => null,
        'bindingvifDetails' => null,
        'bindingvifType' => null,
        'bindingvnicType' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'description' => null,
        'deviceId' => null,
        'deviceOwner' => null,
        'ecsFlavor' => null,
        'id' => null,
        'instanceId' => null,
        'instanceType' => null,
        'macAddress' => null,
        'name' => null,
        'portSecurityEnabled' => null,
        'privateIps' => null,
        'projectId' => null,
        'securityGroups' => null,
        'status' => null,
        'tenantId' => null,
        'virsubnetId' => null,
        'vpcId' => null,
        'vpcTenantId' => null,
        'vtepIp' => null,
        'enableEfi' => null,
        'scope' => null,
        'zoneId' => null,
        'bindingmigrationInfo' => null,
        'extraDhcpOpts' => null,
        'positionType' => null,
        'instanceInfo' => null,
        'tags' => null,
        'allowedAddressPairs' => null
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
    * adminStateUp  1、功能描述：管理状态 2、取值范围：true/false 3、约束：N/A 4、默认值：true 5、权限：N/A
    * bindinghostId  1、功能描述：主机ID 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingprofile  1、功能描述：提供用户设置自定义信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifDetails  1、功能描述：vif的详细信息， \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifType  1、功能描述：端口的接口类型 (ovs/hw_veb等)(扩展属性) 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingvnicType  1、功能描述：绑定的vNIC类型normal: 软交换direct: SRIOV硬直通（不支持） 2、取值范围：normal或者direct 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * createdAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * updatedAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * description  1、功能说明：端口描述 2、取值范围：0-255个字符，不能包含“<”和“>” 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * deviceId  1、功能描述：端口所属设备ID 2、取值范围：标准UUID 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * deviceOwner  1、功能描述：设备所属（DHCP/Router/ lb/Nova） 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * ecsFlavor  1、功能描述：标识这个端口所属虚拟机的flavor 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * id  1、功能描述：端口唯一标识 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * instanceId  1、功能描述：端口所属实例ID，例如RDS实例ID 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * instanceType  1、功能描述：端口所属实例类型，例如“RDS” 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * macAddress  1、功能描述：MAC地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * name  1、功能描述：端口名称 2、取值范围：默认为空，最大长度不超过255 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * portSecurityEnabled  1、功能描述：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 2、取值范围：true/false 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * privateIps  1、功能描述：port的私有IP地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * projectId  1、功能描述：项目ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * securityGroups  1、功能描述：安全组 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * status  1、功能描述：端口状态 2、取值范围：ACTIVE，BUILD，DOWN 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tenantId  1、功能描述：租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * virsubnetId  1、功能描述：所属网络ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcId  1、功能描述：VPC的ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcTenantId  1、功能描述：VPC_租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vtepIp  1、功能描述：本地IP 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * enableEfi  1、功能描述：是否使能efi，使能则表示端口支持vRoCE能力 2、取值范围：true or false 3、约束：N/A 4、默认值：false 5、权限：N/A
    * scope  1、功能描述：作用域 2、取值范围：center，表示作用域为中心；{azId}，表示作用域为具体的可用区 3、约束：N/A 4、默认值：center 5、权限：N/A
    * zoneId  1、功能描述：端口所属的可用分区 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingmigrationInfo  1、功能描述：迁移目的节点信息，包括目的节点的binding:vif_details和binding:vif_type 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * extraDhcpOpts  1、功能描述：DHCP的扩展属性 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * positionType  1、功能描述：边缘场景位置类型 2、取值范围：N/A 3、约束：N/A 4、默认值：center 5、权限：N/A
    * instanceInfo  1、功能描述：端口绑定实例信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tags  1、功能描述：端口标签 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * allowedAddressPairs  1、功能描述：IP/Mac对列表 2、取值范围：N/A 3、约束： - IP地址不允许为 “0.0.0.0/0” - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs的IP地址为“1.1.1.1/0”，表示关闭源目地址检查开关。 - 被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 4、默认值：N/A 5、权限：N/A
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'bindinghostId' => 'binding:host_id',
            'bindingprofile' => 'binding:profile',
            'bindingvifDetails' => 'binding:vif_details',
            'bindingvifType' => 'binding:vif_type',
            'bindingvnicType' => 'binding:vnic_type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'description' => 'description',
            'deviceId' => 'device_id',
            'deviceOwner' => 'device_owner',
            'ecsFlavor' => 'ecs_flavor',
            'id' => 'id',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'macAddress' => 'mac_address',
            'name' => 'name',
            'portSecurityEnabled' => 'port_security_enabled',
            'privateIps' => 'private_ips',
            'projectId' => 'project_id',
            'securityGroups' => 'security_groups',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'virsubnetId' => 'virsubnet_id',
            'vpcId' => 'vpc_id',
            'vpcTenantId' => 'vpc_tenant_id',
            'vtepIp' => 'vtep_ip',
            'enableEfi' => 'enable_efi',
            'scope' => 'scope',
            'zoneId' => 'zone_id',
            'bindingmigrationInfo' => 'binding:migration_info',
            'extraDhcpOpts' => 'extra_dhcp_opts',
            'positionType' => 'position_type',
            'instanceInfo' => 'instance_info',
            'tags' => 'tags',
            'allowedAddressPairs' => 'allowed_address_pairs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  1、功能描述：管理状态 2、取值范围：true/false 3、约束：N/A 4、默认值：true 5、权限：N/A
    * bindinghostId  1、功能描述：主机ID 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingprofile  1、功能描述：提供用户设置自定义信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifDetails  1、功能描述：vif的详细信息， \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifType  1、功能描述：端口的接口类型 (ovs/hw_veb等)(扩展属性) 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingvnicType  1、功能描述：绑定的vNIC类型normal: 软交换direct: SRIOV硬直通（不支持） 2、取值范围：normal或者direct 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * createdAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * updatedAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * description  1、功能说明：端口描述 2、取值范围：0-255个字符，不能包含“<”和“>” 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * deviceId  1、功能描述：端口所属设备ID 2、取值范围：标准UUID 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * deviceOwner  1、功能描述：设备所属（DHCP/Router/ lb/Nova） 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * ecsFlavor  1、功能描述：标识这个端口所属虚拟机的flavor 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * id  1、功能描述：端口唯一标识 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * instanceId  1、功能描述：端口所属实例ID，例如RDS实例ID 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * instanceType  1、功能描述：端口所属实例类型，例如“RDS” 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * macAddress  1、功能描述：MAC地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * name  1、功能描述：端口名称 2、取值范围：默认为空，最大长度不超过255 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * portSecurityEnabled  1、功能描述：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 2、取值范围：true/false 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * privateIps  1、功能描述：port的私有IP地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * projectId  1、功能描述：项目ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * securityGroups  1、功能描述：安全组 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * status  1、功能描述：端口状态 2、取值范围：ACTIVE，BUILD，DOWN 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tenantId  1、功能描述：租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * virsubnetId  1、功能描述：所属网络ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcId  1、功能描述：VPC的ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcTenantId  1、功能描述：VPC_租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vtepIp  1、功能描述：本地IP 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * enableEfi  1、功能描述：是否使能efi，使能则表示端口支持vRoCE能力 2、取值范围：true or false 3、约束：N/A 4、默认值：false 5、权限：N/A
    * scope  1、功能描述：作用域 2、取值范围：center，表示作用域为中心；{azId}，表示作用域为具体的可用区 3、约束：N/A 4、默认值：center 5、权限：N/A
    * zoneId  1、功能描述：端口所属的可用分区 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingmigrationInfo  1、功能描述：迁移目的节点信息，包括目的节点的binding:vif_details和binding:vif_type 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * extraDhcpOpts  1、功能描述：DHCP的扩展属性 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * positionType  1、功能描述：边缘场景位置类型 2、取值范围：N/A 3、约束：N/A 4、默认值：center 5、权限：N/A
    * instanceInfo  1、功能描述：端口绑定实例信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tags  1、功能描述：端口标签 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * allowedAddressPairs  1、功能描述：IP/Mac对列表 2、取值范围：N/A 3、约束： - IP地址不允许为 “0.0.0.0/0” - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs的IP地址为“1.1.1.1/0”，表示关闭源目地址检查开关。 - 被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 4、默认值：N/A 5、权限：N/A
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'bindinghostId' => 'setBindinghostId',
            'bindingprofile' => 'setBindingprofile',
            'bindingvifDetails' => 'setBindingvifDetails',
            'bindingvifType' => 'setBindingvifType',
            'bindingvnicType' => 'setBindingvnicType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'description' => 'setDescription',
            'deviceId' => 'setDeviceId',
            'deviceOwner' => 'setDeviceOwner',
            'ecsFlavor' => 'setEcsFlavor',
            'id' => 'setId',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'macAddress' => 'setMacAddress',
            'name' => 'setName',
            'portSecurityEnabled' => 'setPortSecurityEnabled',
            'privateIps' => 'setPrivateIps',
            'projectId' => 'setProjectId',
            'securityGroups' => 'setSecurityGroups',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'virsubnetId' => 'setVirsubnetId',
            'vpcId' => 'setVpcId',
            'vpcTenantId' => 'setVpcTenantId',
            'vtepIp' => 'setVtepIp',
            'enableEfi' => 'setEnableEfi',
            'scope' => 'setScope',
            'zoneId' => 'setZoneId',
            'bindingmigrationInfo' => 'setBindingmigrationInfo',
            'extraDhcpOpts' => 'setExtraDhcpOpts',
            'positionType' => 'setPositionType',
            'instanceInfo' => 'setInstanceInfo',
            'tags' => 'setTags',
            'allowedAddressPairs' => 'setAllowedAddressPairs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  1、功能描述：管理状态 2、取值范围：true/false 3、约束：N/A 4、默认值：true 5、权限：N/A
    * bindinghostId  1、功能描述：主机ID 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingprofile  1、功能描述：提供用户设置自定义信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifDetails  1、功能描述：vif的详细信息， \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingvifType  1、功能描述：端口的接口类型 (ovs/hw_veb等)(扩展属性) 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    * bindingvnicType  1、功能描述：绑定的vNIC类型normal: 软交换direct: SRIOV硬直通（不支持） 2、取值范围：normal或者direct 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * createdAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * updatedAt  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * description  1、功能说明：端口描述 2、取值范围：0-255个字符，不能包含“<”和“>” 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * deviceId  1、功能描述：端口所属设备ID 2、取值范围：标准UUID 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * deviceOwner  1、功能描述：设备所属（DHCP/Router/ lb/Nova） 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * ecsFlavor  1、功能描述：标识这个端口所属虚拟机的flavor 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * id  1、功能描述：端口唯一标识 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * instanceId  1、功能描述：端口所属实例ID，例如RDS实例ID 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * instanceType  1、功能描述：端口所属实例类型，例如“RDS” 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    * macAddress  1、功能描述：MAC地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * name  1、功能描述：端口名称 2、取值范围：默认为空，最大长度不超过255 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * portSecurityEnabled  1、功能描述：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 2、取值范围：true/false 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * privateIps  1、功能描述：port的私有IP地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * projectId  1、功能描述：项目ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * securityGroups  1、功能描述：安全组 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * status  1、功能描述：端口状态 2、取值范围：ACTIVE，BUILD，DOWN 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tenantId  1、功能描述：租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * virsubnetId  1、功能描述：所属网络ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcId  1、功能描述：VPC的ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vpcTenantId  1、功能描述：VPC_租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * vtepIp  1、功能描述：本地IP 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * enableEfi  1、功能描述：是否使能efi，使能则表示端口支持vRoCE能力 2、取值范围：true or false 3、约束：N/A 4、默认值：false 5、权限：N/A
    * scope  1、功能描述：作用域 2、取值范围：center，表示作用域为中心；{azId}，表示作用域为具体的可用区 3、约束：N/A 4、默认值：center 5、权限：N/A
    * zoneId  1、功能描述：端口所属的可用分区 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * bindingmigrationInfo  1、功能描述：迁移目的节点信息，包括目的节点的binding:vif_details和binding:vif_type 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * extraDhcpOpts  1、功能描述：DHCP的扩展属性 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * positionType  1、功能描述：边缘场景位置类型 2、取值范围：N/A 3、约束：N/A 4、默认值：center 5、权限：N/A
    * instanceInfo  1、功能描述：端口绑定实例信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * tags  1、功能描述：端口标签 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    * allowedAddressPairs  1、功能描述：IP/Mac对列表 2、取值范围：N/A 3、约束： - IP地址不允许为 “0.0.0.0/0” - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs的IP地址为“1.1.1.1/0”，表示关闭源目地址检查开关。 - 被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 4、默认值：N/A 5、权限：N/A
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'bindinghostId' => 'getBindinghostId',
            'bindingprofile' => 'getBindingprofile',
            'bindingvifDetails' => 'getBindingvifDetails',
            'bindingvifType' => 'getBindingvifType',
            'bindingvnicType' => 'getBindingvnicType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'description' => 'getDescription',
            'deviceId' => 'getDeviceId',
            'deviceOwner' => 'getDeviceOwner',
            'ecsFlavor' => 'getEcsFlavor',
            'id' => 'getId',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'macAddress' => 'getMacAddress',
            'name' => 'getName',
            'portSecurityEnabled' => 'getPortSecurityEnabled',
            'privateIps' => 'getPrivateIps',
            'projectId' => 'getProjectId',
            'securityGroups' => 'getSecurityGroups',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'virsubnetId' => 'getVirsubnetId',
            'vpcId' => 'getVpcId',
            'vpcTenantId' => 'getVpcTenantId',
            'vtepIp' => 'getVtepIp',
            'enableEfi' => 'getEnableEfi',
            'scope' => 'getScope',
            'zoneId' => 'getZoneId',
            'bindingmigrationInfo' => 'getBindingmigrationInfo',
            'extraDhcpOpts' => 'getExtraDhcpOpts',
            'positionType' => 'getPositionType',
            'instanceInfo' => 'getInstanceInfo',
            'tags' => 'getTags',
            'allowedAddressPairs' => 'getAllowedAddressPairs'
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
        $this->container['bindinghostId'] = isset($data['bindinghostId']) ? $data['bindinghostId'] : null;
        $this->container['bindingprofile'] = isset($data['bindingprofile']) ? $data['bindingprofile'] : null;
        $this->container['bindingvifDetails'] = isset($data['bindingvifDetails']) ? $data['bindingvifDetails'] : null;
        $this->container['bindingvifType'] = isset($data['bindingvifType']) ? $data['bindingvifType'] : null;
        $this->container['bindingvnicType'] = isset($data['bindingvnicType']) ? $data['bindingvnicType'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['ecsFlavor'] = isset($data['ecsFlavor']) ? $data['ecsFlavor'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['macAddress'] = isset($data['macAddress']) ? $data['macAddress'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['portSecurityEnabled'] = isset($data['portSecurityEnabled']) ? $data['portSecurityEnabled'] : null;
        $this->container['privateIps'] = isset($data['privateIps']) ? $data['privateIps'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['vpcTenantId'] = isset($data['vpcTenantId']) ? $data['vpcTenantId'] : null;
        $this->container['vtepIp'] = isset($data['vtepIp']) ? $data['vtepIp'] : null;
        $this->container['enableEfi'] = isset($data['enableEfi']) ? $data['enableEfi'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['bindingmigrationInfo'] = isset($data['bindingmigrationInfo']) ? $data['bindingmigrationInfo'] : null;
        $this->container['extraDhcpOpts'] = isset($data['extraDhcpOpts']) ? $data['extraDhcpOpts'] : null;
        $this->container['positionType'] = isset($data['positionType']) ? $data['positionType'] : null;
        $this->container['instanceInfo'] = isset($data['instanceInfo']) ? $data['instanceInfo'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
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
        if ($this->container['bindinghostId'] === null) {
            $invalidProperties[] = "'bindinghostId' can't be null";
        }
        if ($this->container['bindingprofile'] === null) {
            $invalidProperties[] = "'bindingprofile' can't be null";
        }
        if ($this->container['bindingvifDetails'] === null) {
            $invalidProperties[] = "'bindingvifDetails' can't be null";
        }
        if ($this->container['bindingvifType'] === null) {
            $invalidProperties[] = "'bindingvifType' can't be null";
        }
        if ($this->container['bindingvnicType'] === null) {
            $invalidProperties[] = "'bindingvnicType' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['deviceId'] === null) {
            $invalidProperties[] = "'deviceId' can't be null";
        }
        if ($this->container['deviceOwner'] === null) {
            $invalidProperties[] = "'deviceOwner' can't be null";
        }
        if ($this->container['ecsFlavor'] === null) {
            $invalidProperties[] = "'ecsFlavor' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
        if ($this->container['macAddress'] === null) {
            $invalidProperties[] = "'macAddress' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['portSecurityEnabled'] === null) {
            $invalidProperties[] = "'portSecurityEnabled' can't be null";
        }
        if ($this->container['privateIps'] === null) {
            $invalidProperties[] = "'privateIps' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['vpcTenantId'] === null) {
            $invalidProperties[] = "'vpcTenantId' can't be null";
        }
        if ($this->container['vtepIp'] === null) {
            $invalidProperties[] = "'vtepIp' can't be null";
        }
        if ($this->container['enableEfi'] === null) {
            $invalidProperties[] = "'enableEfi' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        if ($this->container['zoneId'] === null) {
            $invalidProperties[] = "'zoneId' can't be null";
        }
        if ($this->container['bindingmigrationInfo'] === null) {
            $invalidProperties[] = "'bindingmigrationInfo' can't be null";
        }
        if ($this->container['extraDhcpOpts'] === null) {
            $invalidProperties[] = "'extraDhcpOpts' can't be null";
        }
        if ($this->container['positionType'] === null) {
            $invalidProperties[] = "'positionType' can't be null";
        }
        if ($this->container['instanceInfo'] === null) {
            $invalidProperties[] = "'instanceInfo' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['allowedAddressPairs'] === null) {
            $invalidProperties[] = "'allowedAddressPairs' can't be null";
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
    *  1、功能描述：管理状态 2、取值范围：true/false 3、约束：N/A 4、默认值：true 5、权限：N/A
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
    * @param bool $adminStateUp 1、功能描述：管理状态 2、取值范围：true/false 3、约束：N/A 4、默认值：true 5、权限：N/A
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets bindinghostId
    *  1、功能描述：主机ID 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getBindinghostId()
    {
        return $this->container['bindinghostId'];
    }

    /**
    * Sets bindinghostId
    *
    * @param string $bindinghostId 1、功能描述：主机ID 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setBindinghostId($bindinghostId)
    {
        $this->container['bindinghostId'] = $bindinghostId;
        return $this;
    }

    /**
    * Gets bindingprofile
    *  1、功能描述：提供用户设置自定义信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param object $bindingprofile 1、功能描述：提供用户设置自定义信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    *  1、功能描述：vif的详细信息， \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param object $bindingvifDetails 1、功能描述：vif的详细信息， \"ovs_hybrid_plug\": 是否为ovs/bridge混合模式 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setBindingvifDetails($bindingvifDetails)
    {
        $this->container['bindingvifDetails'] = $bindingvifDetails;
        return $this;
    }

    /**
    * Gets bindingvifType
    *  1、功能描述：端口的接口类型 (ovs/hw_veb等)(扩展属性) 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getBindingvifType()
    {
        return $this->container['bindingvifType'];
    }

    /**
    * Sets bindingvifType
    *
    * @param string $bindingvifType 1、功能描述：端口的接口类型 (ovs/hw_veb等)(扩展属性) 2、取值范围：N/A 3、约束：管理员权限，普通租户不可见 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setBindingvifType($bindingvifType)
    {
        $this->container['bindingvifType'] = $bindingvifType;
        return $this;
    }

    /**
    * Gets bindingvnicType
    *  1、功能描述：绑定的vNIC类型normal: 软交换direct: SRIOV硬直通（不支持） 2、取值范围：normal或者direct 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string $bindingvnicType 1、功能描述：绑定的vNIC类型normal: 软交换direct: SRIOV硬直通（不支持） 2、取值范围：normal或者direct 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setBindingvnicType($bindingvnicType)
    {
        $this->container['bindingvnicType'] = $bindingvnicType;
        return $this;
    }

    /**
    * Gets createdAt
    *  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param \DateTime $createdAt 1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    *  1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param \DateTime $updatedAt 1、功能说明：创建时间 2、取值范围：格式 \"UTC时间 格式: yyyy-MM-ddTHH:mm:ss\"  3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets description
    *  1、功能说明：端口描述 2、取值范围：0-255个字符，不能包含“<”和“>” 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 1、功能说明：端口描述 2、取值范围：0-255个字符，不能包含“<”和“>” 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets deviceId
    *  1、功能描述：端口所属设备ID 2、取值范围：标准UUID 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
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
    * @param string $deviceId 1、功能描述：端口所属设备ID 2、取值范围：标准UUID 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
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
    *  1、功能描述：设备所属（DHCP/Router/ lb/Nova） 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string $deviceOwner 1、功能描述：设备所属（DHCP/Router/ lb/Nova） 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets ecsFlavor
    *  1、功能描述：标识这个端口所属虚拟机的flavor 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getEcsFlavor()
    {
        return $this->container['ecsFlavor'];
    }

    /**
    * Sets ecsFlavor
    *
    * @param string $ecsFlavor 1、功能描述：标识这个端口所属虚拟机的flavor 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setEcsFlavor($ecsFlavor)
    {
        $this->container['ecsFlavor'] = $ecsFlavor;
        return $this;
    }

    /**
    * Gets id
    *  1、功能描述：端口唯一标识 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string $id 1、功能描述：端口唯一标识 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets instanceId
    *  1、功能描述：端口所属实例ID，例如RDS实例ID 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
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
    * @param string $instanceId 1、功能描述：端口所属实例ID，例如RDS实例ID 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
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
    *  1、功能描述：端口所属实例类型，例如“RDS” 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
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
    * @param string $instanceType 1、功能描述：端口所属实例类型，例如“RDS” 2、取值范围：N/A 3、约束：不支持设置和更新，由系统自动维护 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets macAddress
    *  1、功能描述：MAC地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string $macAddress 1、功能描述：MAC地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    *  1、功能描述：端口名称 2、取值范围：默认为空，最大长度不超过255 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string $name 1、功能描述：端口名称 2、取值范围：默认为空，最大长度不超过255 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets portSecurityEnabled
    *  1、功能描述：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 2、取值范围：true/false 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param bool $portSecurityEnabled 1、功能描述：端口安全使能标记，如果不使能则安全组和dhcp防欺骗不生效 2、取值范围：true/false 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setPortSecurityEnabled($portSecurityEnabled)
    {
        $this->container['portSecurityEnabled'] = $portSecurityEnabled;
        return $this;
    }

    /**
    * Gets privateIps
    *  1、功能描述：port的私有IP地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\PrivateIpInfo[]
    */
    public function getPrivateIps()
    {
        return $this->container['privateIps'];
    }

    /**
    * Sets privateIps
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\PrivateIpInfo[] $privateIps 1、功能描述：port的私有IP地址 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setPrivateIps($privateIps)
    {
        $this->container['privateIps'] = $privateIps;
        return $this;
    }

    /**
    * Gets projectId
    *  1、功能描述：项目ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string $projectId 1、功能描述：项目ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets securityGroups
    *  1、功能描述：安全组 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string[] $securityGroups 1、功能描述：安全组 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    *  1、功能描述：端口状态 2、取值范围：ACTIVE，BUILD，DOWN 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string $status 1、功能描述：端口状态 2、取值范围：ACTIVE，BUILD，DOWN 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    *  1、功能描述：租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
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
    * @param string $tenantId 1、功能描述：租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  1、功能描述：所属网络ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId 1、功能描述：所属网络ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  1、功能描述：VPC的ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 1、功能描述：VPC的ID 2、取值范围：标准UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets vpcTenantId
    *  1、功能描述：VPC_租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getVpcTenantId()
    {
        return $this->container['vpcTenantId'];
    }

    /**
    * Sets vpcTenantId
    *
    * @param string $vpcTenantId 1、功能描述：VPC_租户ID 2、取值范围：UUID 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setVpcTenantId($vpcTenantId)
    {
        $this->container['vpcTenantId'] = $vpcTenantId;
        return $this;
    }

    /**
    * Gets vtepIp
    *  1、功能描述：本地IP 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getVtepIp()
    {
        return $this->container['vtepIp'];
    }

    /**
    * Sets vtepIp
    *
    * @param string $vtepIp 1、功能描述：本地IP 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setVtepIp($vtepIp)
    {
        $this->container['vtepIp'] = $vtepIp;
        return $this;
    }

    /**
    * Gets enableEfi
    *  1、功能描述：是否使能efi，使能则表示端口支持vRoCE能力 2、取值范围：true or false 3、约束：N/A 4、默认值：false 5、权限：N/A
    *
    * @return bool
    */
    public function getEnableEfi()
    {
        return $this->container['enableEfi'];
    }

    /**
    * Sets enableEfi
    *
    * @param bool $enableEfi 1、功能描述：是否使能efi，使能则表示端口支持vRoCE能力 2、取值范围：true or false 3、约束：N/A 4、默认值：false 5、权限：N/A
    *
    * @return $this
    */
    public function setEnableEfi($enableEfi)
    {
        $this->container['enableEfi'] = $enableEfi;
        return $this;
    }

    /**
    * Gets scope
    *  1、功能描述：作用域 2、取值范围：center，表示作用域为中心；{azId}，表示作用域为具体的可用区 3、约束：N/A 4、默认值：center 5、权限：N/A
    *
    * @return string
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string $scope 1、功能描述：作用域 2、取值范围：center，表示作用域为中心；{azId}，表示作用域为具体的可用区 3、约束：N/A 4、默认值：center 5、权限：N/A
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets zoneId
    *  1、功能描述：端口所属的可用分区 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return string
    */
    public function getZoneId()
    {
        return $this->container['zoneId'];
    }

    /**
    * Sets zoneId
    *
    * @param string $zoneId 1、功能描述：端口所属的可用分区 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setZoneId($zoneId)
    {
        $this->container['zoneId'] = $zoneId;
        return $this;
    }

    /**
    * Gets bindingmigrationInfo
    *  1、功能描述：迁移目的节点信息，包括目的节点的binding:vif_details和binding:vif_type 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return object
    */
    public function getBindingmigrationInfo()
    {
        return $this->container['bindingmigrationInfo'];
    }

    /**
    * Sets bindingmigrationInfo
    *
    * @param object $bindingmigrationInfo 1、功能描述：迁移目的节点信息，包括目的节点的binding:vif_details和binding:vif_type 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setBindingmigrationInfo($bindingmigrationInfo)
    {
        $this->container['bindingmigrationInfo'] = $bindingmigrationInfo;
        return $this;
    }

    /**
    * Gets extraDhcpOpts
    *  1、功能描述：DHCP的扩展属性 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return object[]
    */
    public function getExtraDhcpOpts()
    {
        return $this->container['extraDhcpOpts'];
    }

    /**
    * Sets extraDhcpOpts
    *
    * @param object[] $extraDhcpOpts 1、功能描述：DHCP的扩展属性 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setExtraDhcpOpts($extraDhcpOpts)
    {
        $this->container['extraDhcpOpts'] = $extraDhcpOpts;
        return $this;
    }

    /**
    * Gets positionType
    *  1、功能描述：边缘场景位置类型 2、取值范围：N/A 3、约束：N/A 4、默认值：center 5、权限：N/A
    *
    * @return string
    */
    public function getPositionType()
    {
        return $this->container['positionType'];
    }

    /**
    * Sets positionType
    *
    * @param string $positionType 1、功能描述：边缘场景位置类型 2、取值范围：N/A 3、约束：N/A 4、默认值：center 5、权限：N/A
    *
    * @return $this
    */
    public function setPositionType($positionType)
    {
        $this->container['positionType'] = $positionType;
        return $this;
    }

    /**
    * Gets instanceInfo
    *  1、功能描述：端口绑定实例信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return object
    */
    public function getInstanceInfo()
    {
        return $this->container['instanceInfo'];
    }

    /**
    * Sets instanceInfo
    *
    * @param object $instanceInfo 1、功能描述：端口绑定实例信息 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setInstanceInfo($instanceInfo)
    {
        $this->container['instanceInfo'] = $instanceInfo;
        return $this;
    }

    /**
    * Gets tags
    *  1、功能描述：端口标签 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return string[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[] $tags 1、功能描述：端口标签 2、取值范围：N/A 3、约束：N/A 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  1、功能描述：IP/Mac对列表 2、取值范围：N/A 3、约束： - IP地址不允许为 “0.0.0.0/0” - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs的IP地址为“1.1.1.1/0”，表示关闭源目地址检查开关。 - 被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 4、默认值：N/A 5、权限：N/A
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]
    */
    public function getAllowedAddressPairs()
    {
        return $this->container['allowedAddressPairs'];
    }

    /**
    * Sets allowedAddressPairs
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[] $allowedAddressPairs 1、功能描述：IP/Mac对列表 2、取值范围：N/A 3、约束： - IP地址不允许为 “0.0.0.0/0” - 如果allowed_address_pairs配置地址池较大的CIDR（掩码小于24位），建议为该port配置一个单独的安全组。 - 如果allowed_address_pairs的IP地址为“1.1.1.1/0”，表示关闭源目地址检查开关。 - 被绑定的云服务器网卡allowed_address_pairs的IP地址填“1.1.1.1/0”。 4、默认值：N/A 5、权限：N/A
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
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

