<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubNetworkInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubNetworkInterface';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 辅助弹性网卡的资源ID。辅助弹性网卡创建成功后，会生成一个辅助弹性网卡 ID，是辅助弹性网卡对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 辅助弹性网卡所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * privateIpAddress  **参数解释**： 辅助弹性网卡的私有IPv4地址。 **取值范围**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的私有IPv6地址。 **取值范围**： 不涉及。
    * macAddress  **参数解释**： 辅助弹性网卡的MAC地址。 **取值范围**： 合法的MAC地址，系统随机分配。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * parentId  **参数解释**： 辅助弹性网卡所挂载的弹性网卡的ID。 **取值范围**： 带“-”的标准UUID格式。
    * description  **参数解释**： 辅助弹性网卡的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * vpcId  **参数解释**： 辅助弹性网卡所属VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID。 **取值范围**： 1-4094
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组的ID列表。例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]。 **取值范围**： 如果请求时不指定此参数，辅助弹性网卡创建后会自动关联默认安全组。
    * tags  **参数解释**： 辅助弹性网卡的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 辅助弹性网卡所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 辅助弹性网卡的创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 辅助弹性网卡的更新时间。 **取值范围**： 不涉及。
    * allowedAddressPairs  **参数解释**： 辅助弹性网卡的IP/Mac对列表，详情请参见“AllowedAddressPair”对象表。 **取值范围**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态。 **取值范围**： - NORMAL：表示辅助弹性网卡已挂载在弹性网卡上。 - UNBOUND：表示辅助弹性网卡未挂载在弹性网卡上。
    * instanceId  **参数解释**： 辅助弹性网卡所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息。 **取值范围**： - center：默认值，表示作用域为中心。 - 某个AZ ID：表示作用域为具体的AZ。
    * securityEnabled  **参数解释**： 辅助弹性网卡安全使能标记，如果不使能则安全组不生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'virsubnetId' => 'string',
            'privateIpAddress' => 'string',
            'ipv6IpAddress' => 'string',
            'macAddress' => 'string',
            'parentDeviceId' => 'string',
            'parentId' => 'string',
            'description' => 'string',
            'vpcId' => 'string',
            'vlanId' => 'int',
            'securityGroups' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\Vpc\V3\Model\ResponseTag[]',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'allowedAddressPairs' => '\HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[]',
            'state' => 'string',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'scope' => 'string',
            'securityEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 辅助弹性网卡的资源ID。辅助弹性网卡创建成功后，会生成一个辅助弹性网卡 ID，是辅助弹性网卡对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 辅助弹性网卡所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * privateIpAddress  **参数解释**： 辅助弹性网卡的私有IPv4地址。 **取值范围**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的私有IPv6地址。 **取值范围**： 不涉及。
    * macAddress  **参数解释**： 辅助弹性网卡的MAC地址。 **取值范围**： 合法的MAC地址，系统随机分配。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * parentId  **参数解释**： 辅助弹性网卡所挂载的弹性网卡的ID。 **取值范围**： 带“-”的标准UUID格式。
    * description  **参数解释**： 辅助弹性网卡的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * vpcId  **参数解释**： 辅助弹性网卡所属VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID。 **取值范围**： 1-4094
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组的ID列表。例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]。 **取值范围**： 如果请求时不指定此参数，辅助弹性网卡创建后会自动关联默认安全组。
    * tags  **参数解释**： 辅助弹性网卡的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 辅助弹性网卡所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 辅助弹性网卡的创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 辅助弹性网卡的更新时间。 **取值范围**： 不涉及。
    * allowedAddressPairs  **参数解释**： 辅助弹性网卡的IP/Mac对列表，详情请参见“AllowedAddressPair”对象表。 **取值范围**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态。 **取值范围**： - NORMAL：表示辅助弹性网卡已挂载在弹性网卡上。 - UNBOUND：表示辅助弹性网卡未挂载在弹性网卡上。
    * instanceId  **参数解释**： 辅助弹性网卡所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息。 **取值范围**： - center：默认值，表示作用域为中心。 - 某个AZ ID：表示作用域为具体的AZ。
    * securityEnabled  **参数解释**： 辅助弹性网卡安全使能标记，如果不使能则安全组不生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'virsubnetId' => null,
        'privateIpAddress' => null,
        'ipv6IpAddress' => null,
        'macAddress' => null,
        'parentDeviceId' => null,
        'parentId' => null,
        'description' => null,
        'vpcId' => null,
        'vlanId' => 'int32',
        'securityGroups' => null,
        'tags' => null,
        'projectId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'allowedAddressPairs' => null,
        'state' => null,
        'instanceId' => null,
        'instanceType' => null,
        'scope' => null,
        'securityEnabled' => null
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
    * id  **参数解释**： 辅助弹性网卡的资源ID。辅助弹性网卡创建成功后，会生成一个辅助弹性网卡 ID，是辅助弹性网卡对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 辅助弹性网卡所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * privateIpAddress  **参数解释**： 辅助弹性网卡的私有IPv4地址。 **取值范围**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的私有IPv6地址。 **取值范围**： 不涉及。
    * macAddress  **参数解释**： 辅助弹性网卡的MAC地址。 **取值范围**： 合法的MAC地址，系统随机分配。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * parentId  **参数解释**： 辅助弹性网卡所挂载的弹性网卡的ID。 **取值范围**： 带“-”的标准UUID格式。
    * description  **参数解释**： 辅助弹性网卡的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * vpcId  **参数解释**： 辅助弹性网卡所属VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID。 **取值范围**： 1-4094
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组的ID列表。例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]。 **取值范围**： 如果请求时不指定此参数，辅助弹性网卡创建后会自动关联默认安全组。
    * tags  **参数解释**： 辅助弹性网卡的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 辅助弹性网卡所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 辅助弹性网卡的创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 辅助弹性网卡的更新时间。 **取值范围**： 不涉及。
    * allowedAddressPairs  **参数解释**： 辅助弹性网卡的IP/Mac对列表，详情请参见“AllowedAddressPair”对象表。 **取值范围**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态。 **取值范围**： - NORMAL：表示辅助弹性网卡已挂载在弹性网卡上。 - UNBOUND：表示辅助弹性网卡未挂载在弹性网卡上。
    * instanceId  **参数解释**： 辅助弹性网卡所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息。 **取值范围**： - center：默认值，表示作用域为中心。 - 某个AZ ID：表示作用域为具体的AZ。
    * securityEnabled  **参数解释**： 辅助弹性网卡安全使能标记，如果不使能则安全组不生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'virsubnetId' => 'virsubnet_id',
            'privateIpAddress' => 'private_ip_address',
            'ipv6IpAddress' => 'ipv6_ip_address',
            'macAddress' => 'mac_address',
            'parentDeviceId' => 'parent_device_id',
            'parentId' => 'parent_id',
            'description' => 'description',
            'vpcId' => 'vpc_id',
            'vlanId' => 'vlan_id',
            'securityGroups' => 'security_groups',
            'tags' => 'tags',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'allowedAddressPairs' => 'allowed_address_pairs',
            'state' => 'state',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'scope' => 'scope',
            'securityEnabled' => 'security_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 辅助弹性网卡的资源ID。辅助弹性网卡创建成功后，会生成一个辅助弹性网卡 ID，是辅助弹性网卡对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 辅助弹性网卡所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * privateIpAddress  **参数解释**： 辅助弹性网卡的私有IPv4地址。 **取值范围**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的私有IPv6地址。 **取值范围**： 不涉及。
    * macAddress  **参数解释**： 辅助弹性网卡的MAC地址。 **取值范围**： 合法的MAC地址，系统随机分配。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * parentId  **参数解释**： 辅助弹性网卡所挂载的弹性网卡的ID。 **取值范围**： 带“-”的标准UUID格式。
    * description  **参数解释**： 辅助弹性网卡的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * vpcId  **参数解释**： 辅助弹性网卡所属VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID。 **取值范围**： 1-4094
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组的ID列表。例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]。 **取值范围**： 如果请求时不指定此参数，辅助弹性网卡创建后会自动关联默认安全组。
    * tags  **参数解释**： 辅助弹性网卡的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 辅助弹性网卡所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 辅助弹性网卡的创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 辅助弹性网卡的更新时间。 **取值范围**： 不涉及。
    * allowedAddressPairs  **参数解释**： 辅助弹性网卡的IP/Mac对列表，详情请参见“AllowedAddressPair”对象表。 **取值范围**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态。 **取值范围**： - NORMAL：表示辅助弹性网卡已挂载在弹性网卡上。 - UNBOUND：表示辅助弹性网卡未挂载在弹性网卡上。
    * instanceId  **参数解释**： 辅助弹性网卡所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息。 **取值范围**： - center：默认值，表示作用域为中心。 - 某个AZ ID：表示作用域为具体的AZ。
    * securityEnabled  **参数解释**： 辅助弹性网卡安全使能标记，如果不使能则安全组不生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'virsubnetId' => 'setVirsubnetId',
            'privateIpAddress' => 'setPrivateIpAddress',
            'ipv6IpAddress' => 'setIpv6IpAddress',
            'macAddress' => 'setMacAddress',
            'parentDeviceId' => 'setParentDeviceId',
            'parentId' => 'setParentId',
            'description' => 'setDescription',
            'vpcId' => 'setVpcId',
            'vlanId' => 'setVlanId',
            'securityGroups' => 'setSecurityGroups',
            'tags' => 'setTags',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'allowedAddressPairs' => 'setAllowedAddressPairs',
            'state' => 'setState',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'scope' => 'setScope',
            'securityEnabled' => 'setSecurityEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 辅助弹性网卡的资源ID。辅助弹性网卡创建成功后，会生成一个辅助弹性网卡 ID，是辅助弹性网卡对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 辅助弹性网卡所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    * privateIpAddress  **参数解释**： 辅助弹性网卡的私有IPv4地址。 **取值范围**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的私有IPv6地址。 **取值范围**： 不涉及。
    * macAddress  **参数解释**： 辅助弹性网卡的MAC地址。 **取值范围**： 合法的MAC地址，系统随机分配。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    * parentId  **参数解释**： 辅助弹性网卡所挂载的弹性网卡的ID。 **取值范围**： 带“-”的标准UUID格式。
    * description  **参数解释**： 辅助弹性网卡的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * vpcId  **参数解释**： 辅助弹性网卡所属VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID。 **取值范围**： 1-4094
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组的ID列表。例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]。 **取值范围**： 如果请求时不指定此参数，辅助弹性网卡创建后会自动关联默认安全组。
    * tags  **参数解释**： 辅助弹性网卡的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    * projectId  **参数解释**： 辅助弹性网卡所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 辅助弹性网卡的创建时间。 **取值范围**： 不涉及。
    * updatedAt  **参数解释**： 辅助弹性网卡的更新时间。 **取值范围**： 不涉及。
    * allowedAddressPairs  **参数解释**： 辅助弹性网卡的IP/Mac对列表，详情请参见“AllowedAddressPair”对象表。 **取值范围**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态。 **取值范围**： - NORMAL：表示辅助弹性网卡已挂载在弹性网卡上。 - UNBOUND：表示辅助弹性网卡未挂载在弹性网卡上。
    * instanceId  **参数解释**： 辅助弹性网卡所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息。 **取值范围**： - center：默认值，表示作用域为中心。 - 某个AZ ID：表示作用域为具体的AZ。
    * securityEnabled  **参数解释**： 辅助弹性网卡安全使能标记，如果不使能则安全组不生效。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'virsubnetId' => 'getVirsubnetId',
            'privateIpAddress' => 'getPrivateIpAddress',
            'ipv6IpAddress' => 'getIpv6IpAddress',
            'macAddress' => 'getMacAddress',
            'parentDeviceId' => 'getParentDeviceId',
            'parentId' => 'getParentId',
            'description' => 'getDescription',
            'vpcId' => 'getVpcId',
            'vlanId' => 'getVlanId',
            'securityGroups' => 'getSecurityGroups',
            'tags' => 'getTags',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'allowedAddressPairs' => 'getAllowedAddressPairs',
            'state' => 'getState',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'scope' => 'getScope',
            'securityEnabled' => 'getSecurityEnabled'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['ipv6IpAddress'] = isset($data['ipv6IpAddress']) ? $data['ipv6IpAddress'] : null;
        $this->container['macAddress'] = isset($data['macAddress']) ? $data['macAddress'] : null;
        $this->container['parentDeviceId'] = isset($data['parentDeviceId']) ? $data['parentDeviceId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['vlanId'] = isset($data['vlanId']) ? $data['vlanId'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['allowedAddressPairs'] = isset($data['allowedAddressPairs']) ? $data['allowedAddressPairs'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['securityEnabled'] = isset($data['securityEnabled']) ? $data['securityEnabled'] : null;
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
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
        if ($this->container['privateIpAddress'] === null) {
            $invalidProperties[] = "'privateIpAddress' can't be null";
        }
        if ($this->container['ipv6IpAddress'] === null) {
            $invalidProperties[] = "'ipv6IpAddress' can't be null";
        }
        if ($this->container['macAddress'] === null) {
            $invalidProperties[] = "'macAddress' can't be null";
        }
        if ($this->container['parentDeviceId'] === null) {
            $invalidProperties[] = "'parentDeviceId' can't be null";
        }
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['vlanId'] === null) {
            $invalidProperties[] = "'vlanId' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['allowedAddressPairs'] === null) {
            $invalidProperties[] = "'allowedAddressPairs' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        if ($this->container['securityEnabled'] === null) {
            $invalidProperties[] = "'securityEnabled' can't be null";
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
    *  **参数解释**： 辅助弹性网卡的资源ID。辅助弹性网卡创建成功后，会生成一个辅助弹性网卡 ID，是辅助弹性网卡对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
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
    * @param string $id **参数解释**： 辅助弹性网卡的资源ID。辅助弹性网卡创建成功后，会生成一个辅助弹性网卡 ID，是辅助弹性网卡对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  **参数解释**： 辅助弹性网卡所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
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
    * @param string $virsubnetId **参数解释**： 辅助弹性网卡所在的虚拟子网ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  **参数解释**： 辅助弹性网卡的私有IPv4地址。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string $privateIpAddress **参数解释**： 辅助弹性网卡的私有IPv4地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets ipv6IpAddress
    *  **参数解释**： 辅助弹性网卡的私有IPv6地址。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getIpv6IpAddress()
    {
        return $this->container['ipv6IpAddress'];
    }

    /**
    * Sets ipv6IpAddress
    *
    * @param string $ipv6IpAddress **参数解释**： 辅助弹性网卡的私有IPv6地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIpv6IpAddress($ipv6IpAddress)
    {
        $this->container['ipv6IpAddress'] = $ipv6IpAddress;
        return $this;
    }

    /**
    * Gets macAddress
    *  **参数解释**： 辅助弹性网卡的MAC地址。 **取值范围**： 合法的MAC地址，系统随机分配。
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
    * @param string $macAddress **参数解释**： 辅助弹性网卡的MAC地址。 **取值范围**： 合法的MAC地址，系统随机分配。
    *
    * @return $this
    */
    public function setMacAddress($macAddress)
    {
        $this->container['macAddress'] = $macAddress;
        return $this;
    }

    /**
    * Gets parentDeviceId
    *  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string
    */
    public function getParentDeviceId()
    {
        return $this->container['parentDeviceId'];
    }

    /**
    * Sets parentDeviceId
    *
    * @param string $parentDeviceId **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setParentDeviceId($parentDeviceId)
    {
        $this->container['parentDeviceId'] = $parentDeviceId;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释**： 辅助弹性网卡所挂载的弹性网卡的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string $parentId **参数解释**： 辅助弹性网卡所挂载的弹性网卡的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 辅助弹性网卡的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
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
    * @param string $description **参数解释**： 辅助弹性网卡的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 辅助弹性网卡所属VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
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
    * @param string $vpcId **参数解释**： 辅助弹性网卡所属VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets vlanId
    *  **参数解释**： 辅助弹性网卡的VLAN ID。 **取值范围**： 1-4094
    *
    * @return int
    */
    public function getVlanId()
    {
        return $this->container['vlanId'];
    }

    /**
    * Sets vlanId
    *
    * @param int $vlanId **参数解释**： 辅助弹性网卡的VLAN ID。 **取值范围**： 1-4094
    *
    * @return $this
    */
    public function setVlanId($vlanId)
    {
        $this->container['vlanId'] = $vlanId;
        return $this;
    }

    /**
    * Gets securityGroups
    *  **参数解释**： 辅助弹性网卡关联的安全组的ID列表。例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]。 **取值范围**： 如果请求时不指定此参数，辅助弹性网卡创建后会自动关联默认安全组。
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
    * @param string[] $securityGroups **参数解释**： 辅助弹性网卡关联的安全组的ID列表。例如：\"security_groups\": [\"a0608cbf-d047-4f54-8b28-cd7b59853fff\"]。 **取值范围**： 如果请求时不指定此参数，辅助弹性网卡创建后会自动关联默认安全组。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**： 辅助弹性网卡的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\ResponseTag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\ResponseTag[] $tags **参数解释**： 辅助弹性网卡的标签信息，包括标签键和标签值，可用来分类和标识资源。详情请参见Tag对象。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 辅助弹性网卡所属的项目ID。 **取值范围**： 不涉及。
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
    * @param string $projectId **参数解释**： 辅助弹性网卡所属的项目ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 辅助弹性网卡的创建时间。 **取值范围**： 不涉及。
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
    * @param \DateTime $createdAt **参数解释**： 辅助弹性网卡的创建时间。 **取值范围**： 不涉及。
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
    *  **参数解释**： 辅助弹性网卡的更新时间。 **取值范围**： 不涉及。
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
    * @param \DateTime $updatedAt **参数解释**： 辅助弹性网卡的更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets allowedAddressPairs
    *  **参数解释**： 辅助弹性网卡的IP/Mac对列表，详情请参见“AllowedAddressPair”对象表。 **取值范围**： 不涉及。
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
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\AllowedAddressPair[] $allowedAddressPairs **参数解释**： 辅助弹性网卡的IP/Mac对列表，详情请参见“AllowedAddressPair”对象表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAllowedAddressPairs($allowedAddressPairs)
    {
        $this->container['allowedAddressPairs'] = $allowedAddressPairs;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**： 辅助弹性网卡的状态。 **取值范围**： - NORMAL：表示辅助弹性网卡已挂载在弹性网卡上。 - UNBOUND：表示辅助弹性网卡未挂载在弹性网卡上。
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state **参数解释**： 辅助弹性网卡的状态。 **取值范围**： - NORMAL：表示辅助弹性网卡已挂载在弹性网卡上。 - UNBOUND：表示辅助弹性网卡未挂载在弹性网卡上。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 辅助弹性网卡所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
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
    * @param string $instanceId **参数解释**： 辅助弹性网卡所属的云服务实例ID，例如RDS实例ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 辅助弹性网卡所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
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
    * @param string $instanceType **参数解释**： 辅助弹性网卡所属的云服务实例类型，例如“RDS”。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**： 辅助弹性网卡所在站点的公网出口信息。 **取值范围**： - center：默认值，表示作用域为中心。 - 某个AZ ID：表示作用域为具体的AZ。
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
    * @param string $scope **参数解释**： 辅助弹性网卡所在站点的公网出口信息。 **取值范围**： - center：默认值，表示作用域为中心。 - 某个AZ ID：表示作用域为具体的AZ。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets securityEnabled
    *  **参数解释**： 辅助弹性网卡安全使能标记，如果不使能则安全组不生效。 **取值范围**： 不涉及。
    *
    * @return bool
    */
    public function getSecurityEnabled()
    {
        return $this->container['securityEnabled'];
    }

    /**
    * Sets securityEnabled
    *
    * @param bool $securityEnabled **参数解释**： 辅助弹性网卡安全使能标记，如果不使能则安全组不生效。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityEnabled($securityEnabled)
    {
        $this->container['securityEnabled'] = $securityEnabled;
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

