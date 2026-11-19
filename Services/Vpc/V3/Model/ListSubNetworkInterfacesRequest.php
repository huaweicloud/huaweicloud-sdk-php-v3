<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubNetworkInterfacesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubNetworkInterfacesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  功能说明：辅助弹性网卡ID，支持多ID过滤 使用场景：查询需要的多个辅助弹性网卡信息
    * virsubnetId  功能说明：辅助弹性网卡所属虚拟子网的ID，支持多个ID过滤 使用场景：过滤需要的单个或者多个虚拟子网下的辅助弹性网卡
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址，支持多个地址同时过滤 使用场景：通过单个或者多个ip地址过滤查询辅助弹性网卡
    * macAddress  功能说明：辅助弹性网卡的mac地址，支持多个同时过滤 使用场景：使用mac地址精确过滤辅助弹性网卡
    * vpcId  功能说明：辅助弹性网卡所属的VPC_ID，支持多ID过滤 使用场景：过滤单个或多个VPC下的辅助弹性网卡信息
    * description  功能说明：辅助弹性网卡的描述信息，支持多个同时过滤 使用场景：通过描述信息过滤辅助弹性网卡
    * parentId  功能说明：辅助弹性网卡的宿主网卡的ID，支持多ID过滤 使用场景：过滤单个或多个宿主网卡下存在的辅助弹性网卡
    * enableEip  **参数解释**： 辅助弹性网卡是否关联EIP，可以通过此字段过滤辅助弹性网卡，不支持传入多个值进行过滤。 **取值范围**：   - true：辅助弹性网卡已关联EIP   - false：辅助弹性网卡未关联EIP **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息，可以通过此字段过滤辅助弹性网卡。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组ID，可以通过此字段过滤辅助弹性网卡，支持传入多个安全组ID过滤。[获取方式请参见[查询安全组列表](vpc_apiv3_0011.xml)。](tag:hws,hws_hk,hws_test) **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 辅助弹性网卡所属企业项目的ID。可以使用该字段过滤某个企业项目下的辅助弹性网卡。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有企业项目绑定的辅助弹性网卡，请传参all_granted_eps。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID，可以通过此字段过滤辅助弹性网卡，支持传入多个VLAN ID过滤。 **取值范围**： 1-4094。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态，可以通过此字段过滤辅助弹性网卡，支持传入多个状态过滤。 **取值范围**： NORMAL：过滤出已挂载在弹性网卡上的辅助弹性网卡 UNBOUND：过滤出未挂载在弹性网卡上的辅助弹性网卡 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的IPv6地址，可以通过此字段过滤辅助弹性网卡，支持传入多个IP地址过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 辅助弹性网卡所属云服务实例的ID，例如RDS实例的ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属云服务实例的类型，例如“RDS”，可以通过此字段过滤辅助弹性网卡，支持传入多个实例类型过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'virsubnetId' => 'string[]',
            'privateIpAddress' => 'string[]',
            'macAddress' => 'string[]',
            'vpcId' => 'string[]',
            'description' => 'string[]',
            'parentId' => 'string[]',
            'enableEip' => 'bool',
            'scope' => 'string',
            'securityGroups' => 'string[]',
            'enterpriseProjectId' => 'string',
            'parentDeviceId' => 'string[]',
            'vlanId' => 'int[]',
            'state' => 'string[]',
            'ipv6IpAddress' => 'string[]',
            'instanceId' => 'string[]',
            'instanceType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  功能说明：辅助弹性网卡ID，支持多ID过滤 使用场景：查询需要的多个辅助弹性网卡信息
    * virsubnetId  功能说明：辅助弹性网卡所属虚拟子网的ID，支持多个ID过滤 使用场景：过滤需要的单个或者多个虚拟子网下的辅助弹性网卡
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址，支持多个地址同时过滤 使用场景：通过单个或者多个ip地址过滤查询辅助弹性网卡
    * macAddress  功能说明：辅助弹性网卡的mac地址，支持多个同时过滤 使用场景：使用mac地址精确过滤辅助弹性网卡
    * vpcId  功能说明：辅助弹性网卡所属的VPC_ID，支持多ID过滤 使用场景：过滤单个或多个VPC下的辅助弹性网卡信息
    * description  功能说明：辅助弹性网卡的描述信息，支持多个同时过滤 使用场景：通过描述信息过滤辅助弹性网卡
    * parentId  功能说明：辅助弹性网卡的宿主网卡的ID，支持多ID过滤 使用场景：过滤单个或多个宿主网卡下存在的辅助弹性网卡
    * enableEip  **参数解释**： 辅助弹性网卡是否关联EIP，可以通过此字段过滤辅助弹性网卡，不支持传入多个值进行过滤。 **取值范围**：   - true：辅助弹性网卡已关联EIP   - false：辅助弹性网卡未关联EIP **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息，可以通过此字段过滤辅助弹性网卡。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组ID，可以通过此字段过滤辅助弹性网卡，支持传入多个安全组ID过滤。[获取方式请参见[查询安全组列表](vpc_apiv3_0011.xml)。](tag:hws,hws_hk,hws_test) **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 辅助弹性网卡所属企业项目的ID。可以使用该字段过滤某个企业项目下的辅助弹性网卡。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有企业项目绑定的辅助弹性网卡，请传参all_granted_eps。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID，可以通过此字段过滤辅助弹性网卡，支持传入多个VLAN ID过滤。 **取值范围**： 1-4094。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态，可以通过此字段过滤辅助弹性网卡，支持传入多个状态过滤。 **取值范围**： NORMAL：过滤出已挂载在弹性网卡上的辅助弹性网卡 UNBOUND：过滤出未挂载在弹性网卡上的辅助弹性网卡 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的IPv6地址，可以通过此字段过滤辅助弹性网卡，支持传入多个IP地址过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 辅助弹性网卡所属云服务实例的ID，例如RDS实例的ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属云服务实例的类型，例如“RDS”，可以通过此字段过滤辅助弹性网卡，支持传入多个实例类型过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'virsubnetId' => null,
        'privateIpAddress' => null,
        'macAddress' => null,
        'vpcId' => null,
        'description' => null,
        'parentId' => null,
        'enableEip' => null,
        'scope' => null,
        'securityGroups' => null,
        'enterpriseProjectId' => null,
        'parentDeviceId' => null,
        'vlanId' => 'int32',
        'state' => null,
        'ipv6IpAddress' => null,
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
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  功能说明：辅助弹性网卡ID，支持多ID过滤 使用场景：查询需要的多个辅助弹性网卡信息
    * virsubnetId  功能说明：辅助弹性网卡所属虚拟子网的ID，支持多个ID过滤 使用场景：过滤需要的单个或者多个虚拟子网下的辅助弹性网卡
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址，支持多个地址同时过滤 使用场景：通过单个或者多个ip地址过滤查询辅助弹性网卡
    * macAddress  功能说明：辅助弹性网卡的mac地址，支持多个同时过滤 使用场景：使用mac地址精确过滤辅助弹性网卡
    * vpcId  功能说明：辅助弹性网卡所属的VPC_ID，支持多ID过滤 使用场景：过滤单个或多个VPC下的辅助弹性网卡信息
    * description  功能说明：辅助弹性网卡的描述信息，支持多个同时过滤 使用场景：通过描述信息过滤辅助弹性网卡
    * parentId  功能说明：辅助弹性网卡的宿主网卡的ID，支持多ID过滤 使用场景：过滤单个或多个宿主网卡下存在的辅助弹性网卡
    * enableEip  **参数解释**： 辅助弹性网卡是否关联EIP，可以通过此字段过滤辅助弹性网卡，不支持传入多个值进行过滤。 **取值范围**：   - true：辅助弹性网卡已关联EIP   - false：辅助弹性网卡未关联EIP **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息，可以通过此字段过滤辅助弹性网卡。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组ID，可以通过此字段过滤辅助弹性网卡，支持传入多个安全组ID过滤。[获取方式请参见[查询安全组列表](vpc_apiv3_0011.xml)。](tag:hws,hws_hk,hws_test) **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 辅助弹性网卡所属企业项目的ID。可以使用该字段过滤某个企业项目下的辅助弹性网卡。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有企业项目绑定的辅助弹性网卡，请传参all_granted_eps。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID，可以通过此字段过滤辅助弹性网卡，支持传入多个VLAN ID过滤。 **取值范围**： 1-4094。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态，可以通过此字段过滤辅助弹性网卡，支持传入多个状态过滤。 **取值范围**： NORMAL：过滤出已挂载在弹性网卡上的辅助弹性网卡 UNBOUND：过滤出未挂载在弹性网卡上的辅助弹性网卡 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的IPv6地址，可以通过此字段过滤辅助弹性网卡，支持传入多个IP地址过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 辅助弹性网卡所属云服务实例的ID，例如RDS实例的ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属云服务实例的类型，例如“RDS”，可以通过此字段过滤辅助弹性网卡，支持传入多个实例类型过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'virsubnetId' => 'virsubnet_id',
            'privateIpAddress' => 'private_ip_address',
            'macAddress' => 'mac_address',
            'vpcId' => 'vpc_id',
            'description' => 'description',
            'parentId' => 'parent_id',
            'enableEip' => 'enable_eip',
            'scope' => 'scope',
            'securityGroups' => 'security_groups',
            'enterpriseProjectId' => 'enterprise_project_id',
            'parentDeviceId' => 'parent_device_id',
            'vlanId' => 'vlan_id',
            'state' => 'state',
            'ipv6IpAddress' => 'ipv6_ip_address',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  功能说明：辅助弹性网卡ID，支持多ID过滤 使用场景：查询需要的多个辅助弹性网卡信息
    * virsubnetId  功能说明：辅助弹性网卡所属虚拟子网的ID，支持多个ID过滤 使用场景：过滤需要的单个或者多个虚拟子网下的辅助弹性网卡
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址，支持多个地址同时过滤 使用场景：通过单个或者多个ip地址过滤查询辅助弹性网卡
    * macAddress  功能说明：辅助弹性网卡的mac地址，支持多个同时过滤 使用场景：使用mac地址精确过滤辅助弹性网卡
    * vpcId  功能说明：辅助弹性网卡所属的VPC_ID，支持多ID过滤 使用场景：过滤单个或多个VPC下的辅助弹性网卡信息
    * description  功能说明：辅助弹性网卡的描述信息，支持多个同时过滤 使用场景：通过描述信息过滤辅助弹性网卡
    * parentId  功能说明：辅助弹性网卡的宿主网卡的ID，支持多ID过滤 使用场景：过滤单个或多个宿主网卡下存在的辅助弹性网卡
    * enableEip  **参数解释**： 辅助弹性网卡是否关联EIP，可以通过此字段过滤辅助弹性网卡，不支持传入多个值进行过滤。 **取值范围**：   - true：辅助弹性网卡已关联EIP   - false：辅助弹性网卡未关联EIP **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息，可以通过此字段过滤辅助弹性网卡。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组ID，可以通过此字段过滤辅助弹性网卡，支持传入多个安全组ID过滤。[获取方式请参见[查询安全组列表](vpc_apiv3_0011.xml)。](tag:hws,hws_hk,hws_test) **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 辅助弹性网卡所属企业项目的ID。可以使用该字段过滤某个企业项目下的辅助弹性网卡。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有企业项目绑定的辅助弹性网卡，请传参all_granted_eps。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID，可以通过此字段过滤辅助弹性网卡，支持传入多个VLAN ID过滤。 **取值范围**： 1-4094。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态，可以通过此字段过滤辅助弹性网卡，支持传入多个状态过滤。 **取值范围**： NORMAL：过滤出已挂载在弹性网卡上的辅助弹性网卡 UNBOUND：过滤出未挂载在弹性网卡上的辅助弹性网卡 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的IPv6地址，可以通过此字段过滤辅助弹性网卡，支持传入多个IP地址过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 辅助弹性网卡所属云服务实例的ID，例如RDS实例的ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属云服务实例的类型，例如“RDS”，可以通过此字段过滤辅助弹性网卡，支持传入多个实例类型过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'virsubnetId' => 'setVirsubnetId',
            'privateIpAddress' => 'setPrivateIpAddress',
            'macAddress' => 'setMacAddress',
            'vpcId' => 'setVpcId',
            'description' => 'setDescription',
            'parentId' => 'setParentId',
            'enableEip' => 'setEnableEip',
            'scope' => 'setScope',
            'securityGroups' => 'setSecurityGroups',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'parentDeviceId' => 'setParentDeviceId',
            'vlanId' => 'setVlanId',
            'state' => 'setState',
            'ipv6IpAddress' => 'setIpv6IpAddress',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * id  功能说明：辅助弹性网卡ID，支持多ID过滤 使用场景：查询需要的多个辅助弹性网卡信息
    * virsubnetId  功能说明：辅助弹性网卡所属虚拟子网的ID，支持多个ID过滤 使用场景：过滤需要的单个或者多个虚拟子网下的辅助弹性网卡
    * privateIpAddress  功能说明：辅助弹性网卡的私有IPv4地址，支持多个地址同时过滤 使用场景：通过单个或者多个ip地址过滤查询辅助弹性网卡
    * macAddress  功能说明：辅助弹性网卡的mac地址，支持多个同时过滤 使用场景：使用mac地址精确过滤辅助弹性网卡
    * vpcId  功能说明：辅助弹性网卡所属的VPC_ID，支持多ID过滤 使用场景：过滤单个或多个VPC下的辅助弹性网卡信息
    * description  功能说明：辅助弹性网卡的描述信息，支持多个同时过滤 使用场景：通过描述信息过滤辅助弹性网卡
    * parentId  功能说明：辅助弹性网卡的宿主网卡的ID，支持多ID过滤 使用场景：过滤单个或多个宿主网卡下存在的辅助弹性网卡
    * enableEip  **参数解释**： 辅助弹性网卡是否关联EIP，可以通过此字段过滤辅助弹性网卡，不支持传入多个值进行过滤。 **取值范围**：   - true：辅助弹性网卡已关联EIP   - false：辅助弹性网卡未关联EIP **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * scope  **参数解释**： 辅助弹性网卡所在站点的公网出口信息，可以通过此字段过滤辅助弹性网卡。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * securityGroups  **参数解释**： 辅助弹性网卡关联的安全组ID，可以通过此字段过滤辅助弹性网卡，支持传入多个安全组ID过滤。[获取方式请参见[查询安全组列表](vpc_apiv3_0011.xml)。](tag:hws,hws_hk,hws_test) **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * enterpriseProjectId  **参数解释**： 辅助弹性网卡所属企业项目的ID。可以使用该字段过滤某个企业项目下的辅助弹性网卡。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有企业项目绑定的辅助弹性网卡，请传参all_granted_eps。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * parentDeviceId  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * vlanId  **参数解释**： 辅助弹性网卡的VLAN ID，可以通过此字段过滤辅助弹性网卡，支持传入多个VLAN ID过滤。 **取值范围**： 1-4094。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * state  **参数解释**： 辅助弹性网卡的状态，可以通过此字段过滤辅助弹性网卡，支持传入多个状态过滤。 **取值范围**： NORMAL：过滤出已挂载在弹性网卡上的辅助弹性网卡 UNBOUND：过滤出未挂载在弹性网卡上的辅助弹性网卡 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * ipv6IpAddress  **参数解释**： 辅助弹性网卡的IPv6地址，可以通过此字段过滤辅助弹性网卡，支持传入多个IP地址过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 辅助弹性网卡所属云服务实例的ID，例如RDS实例的ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    * instanceType  **参数解释**： 辅助弹性网卡所属云服务实例的类型，例如“RDS”，可以通过此字段过滤辅助弹性网卡，支持传入多个实例类型过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'virsubnetId' => 'getVirsubnetId',
            'privateIpAddress' => 'getPrivateIpAddress',
            'macAddress' => 'getMacAddress',
            'vpcId' => 'getVpcId',
            'description' => 'getDescription',
            'parentId' => 'getParentId',
            'enableEip' => 'getEnableEip',
            'scope' => 'getScope',
            'securityGroups' => 'getSecurityGroups',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'parentDeviceId' => 'getParentDeviceId',
            'vlanId' => 'getVlanId',
            'state' => 'getState',
            'ipv6IpAddress' => 'getIpv6IpAddress',
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['macAddress'] = isset($data['macAddress']) ? $data['macAddress'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['enableEip'] = isset($data['enableEip']) ? $data['enableEip'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['parentDeviceId'] = isset($data['parentDeviceId']) ? $data['parentDeviceId'] : null;
        $this->container['vlanId'] = isset($data['vlanId']) ? $data['vlanId'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['ipv6IpAddress'] = isset($data['ipv6IpAddress']) ? $data['ipv6IpAddress'] : null;
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
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    * Gets limit
    *  功能说明：每页返回的个数 取值范围：0-2000
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
    * @param int|null $limit 功能说明：每页返回的个数 取值范围：0-2000
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
    *  分页查询起始的资源ID，为空时查询第一页
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
    * @param string|null $marker 分页查询起始的资源ID，为空时查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  功能说明：辅助弹性网卡ID，支持多ID过滤 使用场景：查询需要的多个辅助弹性网卡信息
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
    * @param string[]|null $id 功能说明：辅助弹性网卡ID，支持多ID过滤 使用场景：查询需要的多个辅助弹性网卡信息
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
    *  功能说明：辅助弹性网卡所属虚拟子网的ID，支持多个ID过滤 使用场景：过滤需要的单个或者多个虚拟子网下的辅助弹性网卡
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
    * @param string[]|null $virsubnetId 功能说明：辅助弹性网卡所属虚拟子网的ID，支持多个ID过滤 使用场景：过滤需要的单个或者多个虚拟子网下的辅助弹性网卡
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
    *  功能说明：辅助弹性网卡的私有IPv4地址，支持多个地址同时过滤 使用场景：通过单个或者多个ip地址过滤查询辅助弹性网卡
    *
    * @return string[]|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string[]|null $privateIpAddress 功能说明：辅助弹性网卡的私有IPv4地址，支持多个地址同时过滤 使用场景：通过单个或者多个ip地址过滤查询辅助弹性网卡
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets macAddress
    *  功能说明：辅助弹性网卡的mac地址，支持多个同时过滤 使用场景：使用mac地址精确过滤辅助弹性网卡
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
    * @param string[]|null $macAddress 功能说明：辅助弹性网卡的mac地址，支持多个同时过滤 使用场景：使用mac地址精确过滤辅助弹性网卡
    *
    * @return $this
    */
    public function setMacAddress($macAddress)
    {
        $this->container['macAddress'] = $macAddress;
        return $this;
    }

    /**
    * Gets vpcId
    *  功能说明：辅助弹性网卡所属的VPC_ID，支持多ID过滤 使用场景：过滤单个或多个VPC下的辅助弹性网卡信息
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
    * @param string[]|null $vpcId 功能说明：辅助弹性网卡所属的VPC_ID，支持多ID过滤 使用场景：过滤单个或多个VPC下的辅助弹性网卡信息
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：辅助弹性网卡的描述信息，支持多个同时过滤 使用场景：通过描述信息过滤辅助弹性网卡
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
    * @param string[]|null $description 功能说明：辅助弹性网卡的描述信息，支持多个同时过滤 使用场景：通过描述信息过滤辅助弹性网卡
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets parentId
    *  功能说明：辅助弹性网卡的宿主网卡的ID，支持多ID过滤 使用场景：过滤单个或多个宿主网卡下存在的辅助弹性网卡
    *
    * @return string[]|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string[]|null $parentId 功能说明：辅助弹性网卡的宿主网卡的ID，支持多ID过滤 使用场景：过滤单个或多个宿主网卡下存在的辅助弹性网卡
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets enableEip
    *  **参数解释**： 辅助弹性网卡是否关联EIP，可以通过此字段过滤辅助弹性网卡，不支持传入多个值进行过滤。 **取值范围**：   - true：辅助弹性网卡已关联EIP   - false：辅助弹性网卡未关联EIP **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getEnableEip()
    {
        return $this->container['enableEip'];
    }

    /**
    * Sets enableEip
    *
    * @param bool|null $enableEip **参数解释**： 辅助弹性网卡是否关联EIP，可以通过此字段过滤辅助弹性网卡，不支持传入多个值进行过滤。 **取值范围**：   - true：辅助弹性网卡已关联EIP   - false：辅助弹性网卡未关联EIP **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEnableEip($enableEip)
    {
        $this->container['enableEip'] = $enableEip;
        return $this;
    }

    /**
    * Gets scope
    *  **参数解释**： 辅助弹性网卡所在站点的公网出口信息，可以通过此字段过滤辅助弹性网卡。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope **参数解释**： 辅助弹性网卡所在站点的公网出口信息，可以通过此字段过滤辅助弹性网卡。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets securityGroups
    *  **参数解释**： 辅助弹性网卡关联的安全组ID，可以通过此字段过滤辅助弹性网卡，支持传入多个安全组ID过滤。[获取方式请参见[查询安全组列表](vpc_apiv3_0011.xml)。](tag:hws,hws_hk,hws_test) **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string[]|null $securityGroups **参数解释**： 辅助弹性网卡关联的安全组ID，可以通过此字段过滤辅助弹性网卡，支持传入多个安全组ID过滤。[获取方式请参见[查询安全组列表](vpc_apiv3_0011.xml)。](tag:hws,hws_hk,hws_test) **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 辅助弹性网卡所属企业项目的ID。可以使用该字段过滤某个企业项目下的辅助弹性网卡。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有企业项目绑定的辅助弹性网卡，请传参all_granted_eps。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释**： 辅助弹性网卡所属企业项目的ID。可以使用该字段过滤某个企业项目下的辅助弹性网卡。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有企业项目绑定的辅助弹性网卡，请传参all_granted_eps。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets parentDeviceId
    *  **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getParentDeviceId()
    {
        return $this->container['parentDeviceId'];
    }

    /**
    * Sets parentDeviceId
    *
    * @param string[]|null $parentDeviceId **参数解释**： 辅助弹性网卡的宿主网卡所属的设备ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setParentDeviceId($parentDeviceId)
    {
        $this->container['parentDeviceId'] = $parentDeviceId;
        return $this;
    }

    /**
    * Gets vlanId
    *  **参数解释**： 辅助弹性网卡的VLAN ID，可以通过此字段过滤辅助弹性网卡，支持传入多个VLAN ID过滤。 **取值范围**： 1-4094。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int[]|null
    */
    public function getVlanId()
    {
        return $this->container['vlanId'];
    }

    /**
    * Sets vlanId
    *
    * @param int[]|null $vlanId **参数解释**： 辅助弹性网卡的VLAN ID，可以通过此字段过滤辅助弹性网卡，支持传入多个VLAN ID过滤。 **取值范围**： 1-4094。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVlanId($vlanId)
    {
        $this->container['vlanId'] = $vlanId;
        return $this;
    }

    /**
    * Gets state
    *  **参数解释**： 辅助弹性网卡的状态，可以通过此字段过滤辅助弹性网卡，支持传入多个状态过滤。 **取值范围**： NORMAL：过滤出已挂载在弹性网卡上的辅助弹性网卡 UNBOUND：过滤出未挂载在弹性网卡上的辅助弹性网卡 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string[]|null $state **参数解释**： 辅助弹性网卡的状态，可以通过此字段过滤辅助弹性网卡，支持传入多个状态过滤。 **取值范围**： NORMAL：过滤出已挂载在弹性网卡上的辅助弹性网卡 UNBOUND：过滤出未挂载在弹性网卡上的辅助弹性网卡 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets ipv6IpAddress
    *  **参数解释**： 辅助弹性网卡的IPv6地址，可以通过此字段过滤辅助弹性网卡，支持传入多个IP地址过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getIpv6IpAddress()
    {
        return $this->container['ipv6IpAddress'];
    }

    /**
    * Sets ipv6IpAddress
    *
    * @param string[]|null $ipv6IpAddress **参数解释**： 辅助弹性网卡的IPv6地址，可以通过此字段过滤辅助弹性网卡，支持传入多个IP地址过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIpv6IpAddress($ipv6IpAddress)
    {
        $this->container['ipv6IpAddress'] = $ipv6IpAddress;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 辅助弹性网卡所属云服务实例的ID，例如RDS实例的ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string[]|null $instanceId **参数解释**： 辅助弹性网卡所属云服务实例的ID，例如RDS实例的ID，可以通过此字段过滤辅助弹性网卡，支持传入多个ID过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 辅助弹性网卡所属云服务实例的类型，例如“RDS”，可以通过此字段过滤辅助弹性网卡，支持传入多个实例类型过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string[]|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string[]|null $instanceType **参数解释**： 辅助弹性网卡所属云服务实例的类型，例如“RDS”，可以通过此字段过滤辅助弹性网卡，支持传入多个实例类型过滤。 **取值范围**： 不涉及。 **约束限制**： 不涉及。 **默认取值**： 不涉及。
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

