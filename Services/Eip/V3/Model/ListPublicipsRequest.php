<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublicipsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublicipsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * fields  显示，形式为\"fields=id&fields=owner&...\"  支持字段：id/project_id/ip_version/type/public_ip_address/public_ipv6_address/network_type/status/description/created_at/updated_at/vnic/bandwidth/associate_instance_type/associate_instance_id/lock_status/billing_info/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group/alias/publicip_pool_name/publicip_pool_id
    * sortKey  排序，形式为\"sort_key=id\"  支持字段：id/public_ip_address/public_ipv6_address/ip_version/created_at/updated_at/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * id  根据id过滤
    * ipVersion  根据ip_version过滤  取值范围：4、6
    * publicIpAddress  根据public_ip_address过滤
    * publicIpAddressLike  根据public_ip_address过滤，模糊搜索
    * publicIpv6Address  根据public_ipv6_address过滤
    * publicIpv6AddressLike  根据public_ipv6_address过滤，模糊搜索
    * type  根据type过滤  取值范围：EIP、DUALSTACK、DUALSTACK_SUBNET  EIP: 弹性公网IP   DUALSTACK: 双栈IPV6   DUALSTACK_SUBNET: 双栈子网
    * networkType  根据network_type过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp
    * publicipPoolName  根据publicip_pool_name过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp、专属池名称等
    * status  根据status过滤  取值范围：FREEZED、DOWN、ACTIVE、ERROR
    * aliasLike  根据alias模糊搜索
    * alias  根据alias过滤
    * description  根据description过滤
    * vnicPrivateIpAddress  根据private_ip_address过滤
    * vnicPrivateIpAddressLike  根据private_ip_address模糊搜索
    * vnicDeviceId  根据device_id过滤
    * vnicDeviceOwner  根据device_owner过滤
    * vnicVpcId  根据vpc_id过滤
    * vnicPortId  根据port_id过滤
    * vnicDeviceOwnerPrefixlike  根据device_owner_prefixlike模糊搜索
    * vnicInstanceType  根据instance_type过滤
    * vnicInstanceId  根据instance_id过滤
    * bandwidthId  根据id过滤
    * bandwidthName  根据name过滤
    * bandwidthNameLike  根据name模糊过滤
    * bandwidthSize  根据size过滤
    * bandwidthShareType  根据share_type过滤
    * bandwidthChargeMode  根据charge_mode过滤
    * billingInfo  根据billing_info过滤
    * billingMode  根据订单模式过滤,   取值范围：YEARLY_MONTHLY、PAY_PER_USE
    * associateInstanceType  根据associate_instance_type过滤  取值范围：PORT、NATGW、ELB、VPN、ELBV1
    * associateInstanceId  根据associate_instance_id过滤
    * enterpriseProjectId  根据enterprise_project_id过滤
    * publicBorderGroup  根据public_border_group过滤
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'fields' => 'string[]',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'id' => 'string[]',
            'ipVersion' => 'int[]',
            'publicIpAddress' => 'string[]',
            'publicIpAddressLike' => 'string',
            'publicIpv6Address' => 'string[]',
            'publicIpv6AddressLike' => 'string',
            'type' => 'string[]',
            'networkType' => 'string[]',
            'publicipPoolName' => 'string[]',
            'status' => 'string[]',
            'aliasLike' => 'string',
            'alias' => 'string[]',
            'description' => 'string[]',
            'vnicPrivateIpAddress' => 'string[]',
            'vnicPrivateIpAddressLike' => 'string',
            'vnicDeviceId' => 'string[]',
            'vnicDeviceOwner' => 'string[]',
            'vnicVpcId' => 'string[]',
            'vnicPortId' => 'string[]',
            'vnicDeviceOwnerPrefixlike' => 'string',
            'vnicInstanceType' => 'string[]',
            'vnicInstanceId' => 'string[]',
            'bandwidthId' => 'string[]',
            'bandwidthName' => 'string[]',
            'bandwidthNameLike' => 'string[]',
            'bandwidthSize' => 'int[]',
            'bandwidthShareType' => 'string[]',
            'bandwidthChargeMode' => 'string[]',
            'billingInfo' => 'string[]',
            'billingMode' => 'string',
            'associateInstanceType' => 'string[]',
            'associateInstanceId' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'publicBorderGroup' => 'string[]',
            'allowShareBandwidthTypeAny' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * fields  显示，形式为\"fields=id&fields=owner&...\"  支持字段：id/project_id/ip_version/type/public_ip_address/public_ipv6_address/network_type/status/description/created_at/updated_at/vnic/bandwidth/associate_instance_type/associate_instance_id/lock_status/billing_info/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group/alias/publicip_pool_name/publicip_pool_id
    * sortKey  排序，形式为\"sort_key=id\"  支持字段：id/public_ip_address/public_ipv6_address/ip_version/created_at/updated_at/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * id  根据id过滤
    * ipVersion  根据ip_version过滤  取值范围：4、6
    * publicIpAddress  根据public_ip_address过滤
    * publicIpAddressLike  根据public_ip_address过滤，模糊搜索
    * publicIpv6Address  根据public_ipv6_address过滤
    * publicIpv6AddressLike  根据public_ipv6_address过滤，模糊搜索
    * type  根据type过滤  取值范围：EIP、DUALSTACK、DUALSTACK_SUBNET  EIP: 弹性公网IP   DUALSTACK: 双栈IPV6   DUALSTACK_SUBNET: 双栈子网
    * networkType  根据network_type过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp
    * publicipPoolName  根据publicip_pool_name过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp、专属池名称等
    * status  根据status过滤  取值范围：FREEZED、DOWN、ACTIVE、ERROR
    * aliasLike  根据alias模糊搜索
    * alias  根据alias过滤
    * description  根据description过滤
    * vnicPrivateIpAddress  根据private_ip_address过滤
    * vnicPrivateIpAddressLike  根据private_ip_address模糊搜索
    * vnicDeviceId  根据device_id过滤
    * vnicDeviceOwner  根据device_owner过滤
    * vnicVpcId  根据vpc_id过滤
    * vnicPortId  根据port_id过滤
    * vnicDeviceOwnerPrefixlike  根据device_owner_prefixlike模糊搜索
    * vnicInstanceType  根据instance_type过滤
    * vnicInstanceId  根据instance_id过滤
    * bandwidthId  根据id过滤
    * bandwidthName  根据name过滤
    * bandwidthNameLike  根据name模糊过滤
    * bandwidthSize  根据size过滤
    * bandwidthShareType  根据share_type过滤
    * bandwidthChargeMode  根据charge_mode过滤
    * billingInfo  根据billing_info过滤
    * billingMode  根据订单模式过滤,   取值范围：YEARLY_MONTHLY、PAY_PER_USE
    * associateInstanceType  根据associate_instance_type过滤  取值范围：PORT、NATGW、ELB、VPN、ELBV1
    * associateInstanceId  根据associate_instance_id过滤
    * enterpriseProjectId  根据enterprise_project_id过滤
    * publicBorderGroup  根据public_border_group过滤
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'offset' => null,
        'limit' => 'int32',
        'fields' => null,
        'sortKey' => null,
        'sortDir' => null,
        'id' => null,
        'ipVersion' => 'int32',
        'publicIpAddress' => null,
        'publicIpAddressLike' => null,
        'publicIpv6Address' => null,
        'publicIpv6AddressLike' => null,
        'type' => null,
        'networkType' => null,
        'publicipPoolName' => null,
        'status' => null,
        'aliasLike' => null,
        'alias' => null,
        'description' => null,
        'vnicPrivateIpAddress' => null,
        'vnicPrivateIpAddressLike' => null,
        'vnicDeviceId' => null,
        'vnicDeviceOwner' => null,
        'vnicVpcId' => null,
        'vnicPortId' => null,
        'vnicDeviceOwnerPrefixlike' => null,
        'vnicInstanceType' => null,
        'vnicInstanceId' => null,
        'bandwidthId' => null,
        'bandwidthName' => null,
        'bandwidthNameLike' => null,
        'bandwidthSize' => 'int32',
        'bandwidthShareType' => null,
        'bandwidthChargeMode' => null,
        'billingInfo' => null,
        'billingMode' => null,
        'associateInstanceType' => null,
        'associateInstanceId' => null,
        'enterpriseProjectId' => null,
        'publicBorderGroup' => null,
        'allowShareBandwidthTypeAny' => null
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
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * fields  显示，形式为\"fields=id&fields=owner&...\"  支持字段：id/project_id/ip_version/type/public_ip_address/public_ipv6_address/network_type/status/description/created_at/updated_at/vnic/bandwidth/associate_instance_type/associate_instance_id/lock_status/billing_info/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group/alias/publicip_pool_name/publicip_pool_id
    * sortKey  排序，形式为\"sort_key=id\"  支持字段：id/public_ip_address/public_ipv6_address/ip_version/created_at/updated_at/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * id  根据id过滤
    * ipVersion  根据ip_version过滤  取值范围：4、6
    * publicIpAddress  根据public_ip_address过滤
    * publicIpAddressLike  根据public_ip_address过滤，模糊搜索
    * publicIpv6Address  根据public_ipv6_address过滤
    * publicIpv6AddressLike  根据public_ipv6_address过滤，模糊搜索
    * type  根据type过滤  取值范围：EIP、DUALSTACK、DUALSTACK_SUBNET  EIP: 弹性公网IP   DUALSTACK: 双栈IPV6   DUALSTACK_SUBNET: 双栈子网
    * networkType  根据network_type过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp
    * publicipPoolName  根据publicip_pool_name过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp、专属池名称等
    * status  根据status过滤  取值范围：FREEZED、DOWN、ACTIVE、ERROR
    * aliasLike  根据alias模糊搜索
    * alias  根据alias过滤
    * description  根据description过滤
    * vnicPrivateIpAddress  根据private_ip_address过滤
    * vnicPrivateIpAddressLike  根据private_ip_address模糊搜索
    * vnicDeviceId  根据device_id过滤
    * vnicDeviceOwner  根据device_owner过滤
    * vnicVpcId  根据vpc_id过滤
    * vnicPortId  根据port_id过滤
    * vnicDeviceOwnerPrefixlike  根据device_owner_prefixlike模糊搜索
    * vnicInstanceType  根据instance_type过滤
    * vnicInstanceId  根据instance_id过滤
    * bandwidthId  根据id过滤
    * bandwidthName  根据name过滤
    * bandwidthNameLike  根据name模糊过滤
    * bandwidthSize  根据size过滤
    * bandwidthShareType  根据share_type过滤
    * bandwidthChargeMode  根据charge_mode过滤
    * billingInfo  根据billing_info过滤
    * billingMode  根据订单模式过滤,   取值范围：YEARLY_MONTHLY、PAY_PER_USE
    * associateInstanceType  根据associate_instance_type过滤  取值范围：PORT、NATGW、ELB、VPN、ELBV1
    * associateInstanceId  根据associate_instance_id过滤
    * enterpriseProjectId  根据enterprise_project_id过滤
    * publicBorderGroup  根据public_border_group过滤
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'offset' => 'offset',
            'limit' => 'limit',
            'fields' => 'fields',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'id' => 'id',
            'ipVersion' => 'ip_version',
            'publicIpAddress' => 'public_ip_address',
            'publicIpAddressLike' => 'public_ip_address_like',
            'publicIpv6Address' => 'public_ipv6_address',
            'publicIpv6AddressLike' => 'public_ipv6_address_like',
            'type' => 'type',
            'networkType' => 'network_type',
            'publicipPoolName' => 'publicip_pool_name',
            'status' => 'status',
            'aliasLike' => 'alias_like',
            'alias' => 'alias',
            'description' => 'description',
            'vnicPrivateIpAddress' => 'vnic.private_ip_address',
            'vnicPrivateIpAddressLike' => 'vnic.private_ip_address_like',
            'vnicDeviceId' => 'vnic.device_id',
            'vnicDeviceOwner' => 'vnic.device_owner',
            'vnicVpcId' => 'vnic.vpc_id',
            'vnicPortId' => 'vnic.port_id',
            'vnicDeviceOwnerPrefixlike' => 'vnic.device_owner_prefixlike',
            'vnicInstanceType' => 'vnic.instance_type',
            'vnicInstanceId' => 'vnic.instance_id',
            'bandwidthId' => 'bandwidth.id',
            'bandwidthName' => 'bandwidth.name',
            'bandwidthNameLike' => 'bandwidth.name_like',
            'bandwidthSize' => 'bandwidth.size',
            'bandwidthShareType' => 'bandwidth.share_type',
            'bandwidthChargeMode' => 'bandwidth.charge_mode',
            'billingInfo' => 'billing_info',
            'billingMode' => 'billing_mode',
            'associateInstanceType' => 'associate_instance_type',
            'associateInstanceId' => 'associate_instance_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'publicBorderGroup' => 'public_border_group',
            'allowShareBandwidthTypeAny' => 'allow_share_bandwidth_type_any'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * fields  显示，形式为\"fields=id&fields=owner&...\"  支持字段：id/project_id/ip_version/type/public_ip_address/public_ipv6_address/network_type/status/description/created_at/updated_at/vnic/bandwidth/associate_instance_type/associate_instance_id/lock_status/billing_info/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group/alias/publicip_pool_name/publicip_pool_id
    * sortKey  排序，形式为\"sort_key=id\"  支持字段：id/public_ip_address/public_ipv6_address/ip_version/created_at/updated_at/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * id  根据id过滤
    * ipVersion  根据ip_version过滤  取值范围：4、6
    * publicIpAddress  根据public_ip_address过滤
    * publicIpAddressLike  根据public_ip_address过滤，模糊搜索
    * publicIpv6Address  根据public_ipv6_address过滤
    * publicIpv6AddressLike  根据public_ipv6_address过滤，模糊搜索
    * type  根据type过滤  取值范围：EIP、DUALSTACK、DUALSTACK_SUBNET  EIP: 弹性公网IP   DUALSTACK: 双栈IPV6   DUALSTACK_SUBNET: 双栈子网
    * networkType  根据network_type过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp
    * publicipPoolName  根据publicip_pool_name过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp、专属池名称等
    * status  根据status过滤  取值范围：FREEZED、DOWN、ACTIVE、ERROR
    * aliasLike  根据alias模糊搜索
    * alias  根据alias过滤
    * description  根据description过滤
    * vnicPrivateIpAddress  根据private_ip_address过滤
    * vnicPrivateIpAddressLike  根据private_ip_address模糊搜索
    * vnicDeviceId  根据device_id过滤
    * vnicDeviceOwner  根据device_owner过滤
    * vnicVpcId  根据vpc_id过滤
    * vnicPortId  根据port_id过滤
    * vnicDeviceOwnerPrefixlike  根据device_owner_prefixlike模糊搜索
    * vnicInstanceType  根据instance_type过滤
    * vnicInstanceId  根据instance_id过滤
    * bandwidthId  根据id过滤
    * bandwidthName  根据name过滤
    * bandwidthNameLike  根据name模糊过滤
    * bandwidthSize  根据size过滤
    * bandwidthShareType  根据share_type过滤
    * bandwidthChargeMode  根据charge_mode过滤
    * billingInfo  根据billing_info过滤
    * billingMode  根据订单模式过滤,   取值范围：YEARLY_MONTHLY、PAY_PER_USE
    * associateInstanceType  根据associate_instance_type过滤  取值范围：PORT、NATGW、ELB、VPN、ELBV1
    * associateInstanceId  根据associate_instance_id过滤
    * enterpriseProjectId  根据enterprise_project_id过滤
    * publicBorderGroup  根据public_border_group过滤
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'fields' => 'setFields',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'id' => 'setId',
            'ipVersion' => 'setIpVersion',
            'publicIpAddress' => 'setPublicIpAddress',
            'publicIpAddressLike' => 'setPublicIpAddressLike',
            'publicIpv6Address' => 'setPublicIpv6Address',
            'publicIpv6AddressLike' => 'setPublicIpv6AddressLike',
            'type' => 'setType',
            'networkType' => 'setNetworkType',
            'publicipPoolName' => 'setPublicipPoolName',
            'status' => 'setStatus',
            'aliasLike' => 'setAliasLike',
            'alias' => 'setAlias',
            'description' => 'setDescription',
            'vnicPrivateIpAddress' => 'setVnicPrivateIpAddress',
            'vnicPrivateIpAddressLike' => 'setVnicPrivateIpAddressLike',
            'vnicDeviceId' => 'setVnicDeviceId',
            'vnicDeviceOwner' => 'setVnicDeviceOwner',
            'vnicVpcId' => 'setVnicVpcId',
            'vnicPortId' => 'setVnicPortId',
            'vnicDeviceOwnerPrefixlike' => 'setVnicDeviceOwnerPrefixlike',
            'vnicInstanceType' => 'setVnicInstanceType',
            'vnicInstanceId' => 'setVnicInstanceId',
            'bandwidthId' => 'setBandwidthId',
            'bandwidthName' => 'setBandwidthName',
            'bandwidthNameLike' => 'setBandwidthNameLike',
            'bandwidthSize' => 'setBandwidthSize',
            'bandwidthShareType' => 'setBandwidthShareType',
            'bandwidthChargeMode' => 'setBandwidthChargeMode',
            'billingInfo' => 'setBillingInfo',
            'billingMode' => 'setBillingMode',
            'associateInstanceType' => 'setAssociateInstanceType',
            'associateInstanceId' => 'setAssociateInstanceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'allowShareBandwidthTypeAny' => 'setAllowShareBandwidthTypeAny'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  分页查询起始的资源ID，为空时为查询第一页
    * offset  分页查询起始的资源序号
    * limit  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    * fields  显示，形式为\"fields=id&fields=owner&...\"  支持字段：id/project_id/ip_version/type/public_ip_address/public_ipv6_address/network_type/status/description/created_at/updated_at/vnic/bandwidth/associate_instance_type/associate_instance_id/lock_status/billing_info/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group/alias/publicip_pool_name/publicip_pool_id
    * sortKey  排序，形式为\"sort_key=id\"  支持字段：id/public_ip_address/public_ipv6_address/ip_version/created_at/updated_at/public_border_group
    * sortDir  排序方向  取值范围：asc、desc
    * id  根据id过滤
    * ipVersion  根据ip_version过滤  取值范围：4、6
    * publicIpAddress  根据public_ip_address过滤
    * publicIpAddressLike  根据public_ip_address过滤，模糊搜索
    * publicIpv6Address  根据public_ipv6_address过滤
    * publicIpv6AddressLike  根据public_ipv6_address过滤，模糊搜索
    * type  根据type过滤  取值范围：EIP、DUALSTACK、DUALSTACK_SUBNET  EIP: 弹性公网IP   DUALSTACK: 双栈IPV6   DUALSTACK_SUBNET: 双栈子网
    * networkType  根据network_type过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp
    * publicipPoolName  根据publicip_pool_name过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp、专属池名称等
    * status  根据status过滤  取值范围：FREEZED、DOWN、ACTIVE、ERROR
    * aliasLike  根据alias模糊搜索
    * alias  根据alias过滤
    * description  根据description过滤
    * vnicPrivateIpAddress  根据private_ip_address过滤
    * vnicPrivateIpAddressLike  根据private_ip_address模糊搜索
    * vnicDeviceId  根据device_id过滤
    * vnicDeviceOwner  根据device_owner过滤
    * vnicVpcId  根据vpc_id过滤
    * vnicPortId  根据port_id过滤
    * vnicDeviceOwnerPrefixlike  根据device_owner_prefixlike模糊搜索
    * vnicInstanceType  根据instance_type过滤
    * vnicInstanceId  根据instance_id过滤
    * bandwidthId  根据id过滤
    * bandwidthName  根据name过滤
    * bandwidthNameLike  根据name模糊过滤
    * bandwidthSize  根据size过滤
    * bandwidthShareType  根据share_type过滤
    * bandwidthChargeMode  根据charge_mode过滤
    * billingInfo  根据billing_info过滤
    * billingMode  根据订单模式过滤,   取值范围：YEARLY_MONTHLY、PAY_PER_USE
    * associateInstanceType  根据associate_instance_type过滤  取值范围：PORT、NATGW、ELB、VPN、ELBV1
    * associateInstanceId  根据associate_instance_id过滤
    * enterpriseProjectId  根据enterprise_project_id过滤
    * publicBorderGroup  根据public_border_group过滤
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'fields' => 'getFields',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'id' => 'getId',
            'ipVersion' => 'getIpVersion',
            'publicIpAddress' => 'getPublicIpAddress',
            'publicIpAddressLike' => 'getPublicIpAddressLike',
            'publicIpv6Address' => 'getPublicIpv6Address',
            'publicIpv6AddressLike' => 'getPublicIpv6AddressLike',
            'type' => 'getType',
            'networkType' => 'getNetworkType',
            'publicipPoolName' => 'getPublicipPoolName',
            'status' => 'getStatus',
            'aliasLike' => 'getAliasLike',
            'alias' => 'getAlias',
            'description' => 'getDescription',
            'vnicPrivateIpAddress' => 'getVnicPrivateIpAddress',
            'vnicPrivateIpAddressLike' => 'getVnicPrivateIpAddressLike',
            'vnicDeviceId' => 'getVnicDeviceId',
            'vnicDeviceOwner' => 'getVnicDeviceOwner',
            'vnicVpcId' => 'getVnicVpcId',
            'vnicPortId' => 'getVnicPortId',
            'vnicDeviceOwnerPrefixlike' => 'getVnicDeviceOwnerPrefixlike',
            'vnicInstanceType' => 'getVnicInstanceType',
            'vnicInstanceId' => 'getVnicInstanceId',
            'bandwidthId' => 'getBandwidthId',
            'bandwidthName' => 'getBandwidthName',
            'bandwidthNameLike' => 'getBandwidthNameLike',
            'bandwidthSize' => 'getBandwidthSize',
            'bandwidthShareType' => 'getBandwidthShareType',
            'bandwidthChargeMode' => 'getBandwidthChargeMode',
            'billingInfo' => 'getBillingInfo',
            'billingMode' => 'getBillingMode',
            'associateInstanceType' => 'getAssociateInstanceType',
            'associateInstanceId' => 'getAssociateInstanceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'allowShareBandwidthTypeAny' => 'getAllowShareBandwidthTypeAny'
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
    const SORT_KEY_ID = 'id';
    const SORT_KEY_PUBLIC_IP_ADDRESS = 'public_ip_address';
    const SORT_KEY_PUBLIC_IPV6_ADDRESS = 'public_ipv6_address';
    const SORT_KEY_IP_VERSION = 'ip_version';
    const SORT_KEY_CREATED_AT = 'created_at';
    const SORT_KEY_UPDATED_AT = 'updated_at';
    const SORT_KEY_PUBLIC_BORDER_GROUP = 'public_border_group';
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    const TYPE_EIP = 'EIP';
    const TYPE_DUALSTACK = 'DUALSTACK';
    const TYPE_DUALSTACK_SUBNET = 'DUALSTACK_SUBNET';
    const NETWORK_TYPE__5_TELCOM = '5_telcom';
    const NETWORK_TYPE__5_UNION = '5_union';
    const NETWORK_TYPE__5_BGP = '5_bgp';
    const NETWORK_TYPE__5_SBGP = '5_sbgp';
    const NETWORK_TYPE__5_IPV6 = '5_ipv6';
    const NETWORK_TYPE__5_GRAYBGP = '5_graybgp';
    const STATUS_FREEZED = 'FREEZED';
    const STATUS_DOWN = 'DOWN';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_ERROR = 'ERROR';
    const BANDWIDTH_SHARE_TYPE_PER = 'PER';
    const BANDWIDTH_SHARE_TYPE_WHOLE = 'WHOLE';
    const BANDWIDTH_CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const BANDWIDTH_CHARGE_MODE_TRAFFIC = 'traffic';
    const BANDWIDTH_CHARGE_MODE__95PEAK_PLUS = '95peak_plus';
    const BILLING_MODE_YEARLY_MONTHLY = 'YEARLY_MONTHLY';
    const BILLING_MODE_PAY_PER_USE = 'PAY_PER_USE';
    const ASSOCIATE_INSTANCE_TYPE_PORT = 'PORT';
    const ASSOCIATE_INSTANCE_TYPE_NATGW = 'NATGW';
    const ASSOCIATE_INSTANCE_TYPE_ELB = 'ELB';
    const ASSOCIATE_INSTANCE_TYPE_VPN = 'VPN';
    const ASSOCIATE_INSTANCE_TYPE_ELBV1 = 'ELBV1';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_ID,
            self::SORT_KEY_PUBLIC_IP_ADDRESS,
            self::SORT_KEY_PUBLIC_IPV6_ADDRESS,
            self::SORT_KEY_IP_VERSION,
            self::SORT_KEY_CREATED_AT,
            self::SORT_KEY_UPDATED_AT,
            self::SORT_KEY_PUBLIC_BORDER_GROUP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_4,
            self::IP_VERSION_6,
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
            self::TYPE_EIP,
            self::TYPE_DUALSTACK,
            self::TYPE_DUALSTACK_SUBNET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetworkTypeAllowableValues()
    {
        return [
            self::NETWORK_TYPE__5_TELCOM,
            self::NETWORK_TYPE__5_UNION,
            self::NETWORK_TYPE__5_BGP,
            self::NETWORK_TYPE__5_SBGP,
            self::NETWORK_TYPE__5_IPV6,
            self::NETWORK_TYPE__5_GRAYBGP,
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
            self::STATUS_FREEZED,
            self::STATUS_DOWN,
            self::STATUS_ACTIVE,
            self::STATUS_ERROR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBandwidthShareTypeAllowableValues()
    {
        return [
            self::BANDWIDTH_SHARE_TYPE_PER,
            self::BANDWIDTH_SHARE_TYPE_WHOLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBandwidthChargeModeAllowableValues()
    {
        return [
            self::BANDWIDTH_CHARGE_MODE_BANDWIDTH,
            self::BANDWIDTH_CHARGE_MODE_TRAFFIC,
            self::BANDWIDTH_CHARGE_MODE__95PEAK_PLUS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBillingModeAllowableValues()
    {
        return [
            self::BILLING_MODE_YEARLY_MONTHLY,
            self::BILLING_MODE_PAY_PER_USE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAssociateInstanceTypeAllowableValues()
    {
        return [
            self::ASSOCIATE_INSTANCE_TYPE_PORT,
            self::ASSOCIATE_INSTANCE_TYPE_NATGW,
            self::ASSOCIATE_INSTANCE_TYPE_ELB,
            self::ASSOCIATE_INSTANCE_TYPE_VPN,
            self::ASSOCIATE_INSTANCE_TYPE_ELBV1,
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['publicIpAddressLike'] = isset($data['publicIpAddressLike']) ? $data['publicIpAddressLike'] : null;
        $this->container['publicIpv6Address'] = isset($data['publicIpv6Address']) ? $data['publicIpv6Address'] : null;
        $this->container['publicIpv6AddressLike'] = isset($data['publicIpv6AddressLike']) ? $data['publicIpv6AddressLike'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['publicipPoolName'] = isset($data['publicipPoolName']) ? $data['publicipPoolName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['aliasLike'] = isset($data['aliasLike']) ? $data['aliasLike'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vnicPrivateIpAddress'] = isset($data['vnicPrivateIpAddress']) ? $data['vnicPrivateIpAddress'] : null;
        $this->container['vnicPrivateIpAddressLike'] = isset($data['vnicPrivateIpAddressLike']) ? $data['vnicPrivateIpAddressLike'] : null;
        $this->container['vnicDeviceId'] = isset($data['vnicDeviceId']) ? $data['vnicDeviceId'] : null;
        $this->container['vnicDeviceOwner'] = isset($data['vnicDeviceOwner']) ? $data['vnicDeviceOwner'] : null;
        $this->container['vnicVpcId'] = isset($data['vnicVpcId']) ? $data['vnicVpcId'] : null;
        $this->container['vnicPortId'] = isset($data['vnicPortId']) ? $data['vnicPortId'] : null;
        $this->container['vnicDeviceOwnerPrefixlike'] = isset($data['vnicDeviceOwnerPrefixlike']) ? $data['vnicDeviceOwnerPrefixlike'] : null;
        $this->container['vnicInstanceType'] = isset($data['vnicInstanceType']) ? $data['vnicInstanceType'] : null;
        $this->container['vnicInstanceId'] = isset($data['vnicInstanceId']) ? $data['vnicInstanceId'] : null;
        $this->container['bandwidthId'] = isset($data['bandwidthId']) ? $data['bandwidthId'] : null;
        $this->container['bandwidthName'] = isset($data['bandwidthName']) ? $data['bandwidthName'] : null;
        $this->container['bandwidthNameLike'] = isset($data['bandwidthNameLike']) ? $data['bandwidthNameLike'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['bandwidthShareType'] = isset($data['bandwidthShareType']) ? $data['bandwidthShareType'] : null;
        $this->container['bandwidthChargeMode'] = isset($data['bandwidthChargeMode']) ? $data['bandwidthChargeMode'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['associateInstanceType'] = isset($data['associateInstanceType']) ? $data['associateInstanceType'] : null;
        $this->container['associateInstanceId'] = isset($data['associateInstanceId']) ? $data['associateInstanceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['allowShareBandwidthTypeAny'] = isset($data['allowShareBandwidthTypeAny']) ? $data['allowShareBandwidthTypeAny'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['publicIpAddressLike']) && (mb_strlen($this->container['publicIpAddressLike']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicIpAddressLike', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicIpAddressLike']) && (mb_strlen($this->container['publicIpAddressLike']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIpAddressLike', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicIpv6AddressLike']) && (mb_strlen($this->container['publicIpv6AddressLike']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicIpv6AddressLike', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicIpv6AddressLike']) && (mb_strlen($this->container['publicIpv6AddressLike']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicIpv6AddressLike', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aliasLike']) && (mb_strlen($this->container['aliasLike']) > 64)) {
                $invalidProperties[] = "invalid value for 'aliasLike', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aliasLike']) && (mb_strlen($this->container['aliasLike']) < 0)) {
                $invalidProperties[] = "invalid value for 'aliasLike', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicPrivateIpAddressLike']) && (mb_strlen($this->container['vnicPrivateIpAddressLike']) > 64)) {
                $invalidProperties[] = "invalid value for 'vnicPrivateIpAddressLike', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vnicPrivateIpAddressLike']) && (mb_strlen($this->container['vnicPrivateIpAddressLike']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicPrivateIpAddressLike', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vnicDeviceOwnerPrefixlike']) && (mb_strlen($this->container['vnicDeviceOwnerPrefixlike']) > 64)) {
                $invalidProperties[] = "invalid value for 'vnicDeviceOwnerPrefixlike', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vnicDeviceOwnerPrefixlike']) && (mb_strlen($this->container['vnicDeviceOwnerPrefixlike']) < 0)) {
                $invalidProperties[] = "invalid value for 'vnicDeviceOwnerPrefixlike', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBillingModeAllowableValues();
                if (!is_null($this->container['billingMode']) && !in_array($this->container['billingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'billingMode', must be one of '%s'",
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
    * Gets marker
    *  分页查询起始的资源ID，为空时为查询第一页
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
    * @param string|null $marker 分页查询起始的资源ID，为空时为查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询起始的资源序号
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页查询起始的资源序号
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
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
    * @param int|null $limit 每页返回的个数取值范围：0~[2000]，其中2000为局点差异项，具体取值由局点决定
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets fields
    *  显示，形式为\"fields=id&fields=owner&...\"  支持字段：id/project_id/ip_version/type/public_ip_address/public_ipv6_address/network_type/status/description/created_at/updated_at/vnic/bandwidth/associate_instance_type/associate_instance_id/lock_status/billing_info/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group/alias/publicip_pool_name/publicip_pool_id
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 显示，形式为\"fields=id&fields=owner&...\"  支持字段：id/project_id/ip_version/type/public_ip_address/public_ipv6_address/network_type/status/description/created_at/updated_at/vnic/bandwidth/associate_instance_type/associate_instance_id/lock_status/billing_info/tags/enterprise_project_id/allow_share_bandwidth_types/public_border_group/alias/publicip_pool_name/publicip_pool_id
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序，形式为\"sort_key=id\"  支持字段：id/public_ip_address/public_ipv6_address/ip_version/created_at/updated_at/public_border_group
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序，形式为\"sort_key=id\"  支持字段：id/public_ip_address/public_ipv6_address/ip_version/created_at/updated_at/public_border_group
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序方向  取值范围：asc、desc
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方向  取值范围：asc、desc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets id
    *  根据id过滤
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
    * @param string[]|null $id 根据id过滤
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipVersion
    *  根据ip_version过滤  取值范围：4、6
    *
    * @return int[]|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int[]|null $ipVersion 根据ip_version过滤  取值范围：4、6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  根据public_ip_address过滤
    *
    * @return string[]|null
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string[]|null $publicIpAddress 根据public_ip_address过滤
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets publicIpAddressLike
    *  根据public_ip_address过滤，模糊搜索
    *
    * @return string|null
    */
    public function getPublicIpAddressLike()
    {
        return $this->container['publicIpAddressLike'];
    }

    /**
    * Sets publicIpAddressLike
    *
    * @param string|null $publicIpAddressLike 根据public_ip_address过滤，模糊搜索
    *
    * @return $this
    */
    public function setPublicIpAddressLike($publicIpAddressLike)
    {
        $this->container['publicIpAddressLike'] = $publicIpAddressLike;
        return $this;
    }

    /**
    * Gets publicIpv6Address
    *  根据public_ipv6_address过滤
    *
    * @return string[]|null
    */
    public function getPublicIpv6Address()
    {
        return $this->container['publicIpv6Address'];
    }

    /**
    * Sets publicIpv6Address
    *
    * @param string[]|null $publicIpv6Address 根据public_ipv6_address过滤
    *
    * @return $this
    */
    public function setPublicIpv6Address($publicIpv6Address)
    {
        $this->container['publicIpv6Address'] = $publicIpv6Address;
        return $this;
    }

    /**
    * Gets publicIpv6AddressLike
    *  根据public_ipv6_address过滤，模糊搜索
    *
    * @return string|null
    */
    public function getPublicIpv6AddressLike()
    {
        return $this->container['publicIpv6AddressLike'];
    }

    /**
    * Sets publicIpv6AddressLike
    *
    * @param string|null $publicIpv6AddressLike 根据public_ipv6_address过滤，模糊搜索
    *
    * @return $this
    */
    public function setPublicIpv6AddressLike($publicIpv6AddressLike)
    {
        $this->container['publicIpv6AddressLike'] = $publicIpv6AddressLike;
        return $this;
    }

    /**
    * Gets type
    *  根据type过滤  取值范围：EIP、DUALSTACK、DUALSTACK_SUBNET  EIP: 弹性公网IP   DUALSTACK: 双栈IPV6   DUALSTACK_SUBNET: 双栈子网
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type 根据type过滤  取值范围：EIP、DUALSTACK、DUALSTACK_SUBNET  EIP: 弹性公网IP   DUALSTACK: 双栈IPV6   DUALSTACK_SUBNET: 双栈子网
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets networkType
    *  根据network_type过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp
    *
    * @return string[]|null
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string[]|null $networkType 根据network_type过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets publicipPoolName
    *  根据publicip_pool_name过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp、专属池名称等
    *
    * @return string[]|null
    */
    public function getPublicipPoolName()
    {
        return $this->container['publicipPoolName'];
    }

    /**
    * Sets publicipPoolName
    *
    * @param string[]|null $publicipPoolName 根据publicip_pool_name过滤  取值范围：5_telcom、5_union、5_bgp、5_sbgp、5_ipv6、5_graybgp、专属池名称等
    *
    * @return $this
    */
    public function setPublicipPoolName($publicipPoolName)
    {
        $this->container['publicipPoolName'] = $publicipPoolName;
        return $this;
    }

    /**
    * Gets status
    *  根据status过滤  取值范围：FREEZED、DOWN、ACTIVE、ERROR
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status 根据status过滤  取值范围：FREEZED、DOWN、ACTIVE、ERROR
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets aliasLike
    *  根据alias模糊搜索
    *
    * @return string|null
    */
    public function getAliasLike()
    {
        return $this->container['aliasLike'];
    }

    /**
    * Sets aliasLike
    *
    * @param string|null $aliasLike 根据alias模糊搜索
    *
    * @return $this
    */
    public function setAliasLike($aliasLike)
    {
        $this->container['aliasLike'] = $aliasLike;
        return $this;
    }

    /**
    * Gets alias
    *  根据alias过滤
    *
    * @return string[]|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string[]|null $alias 根据alias过滤
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets description
    *  根据description过滤
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
    * @param string[]|null $description 根据description过滤
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vnicPrivateIpAddress
    *  根据private_ip_address过滤
    *
    * @return string[]|null
    */
    public function getVnicPrivateIpAddress()
    {
        return $this->container['vnicPrivateIpAddress'];
    }

    /**
    * Sets vnicPrivateIpAddress
    *
    * @param string[]|null $vnicPrivateIpAddress 根据private_ip_address过滤
    *
    * @return $this
    */
    public function setVnicPrivateIpAddress($vnicPrivateIpAddress)
    {
        $this->container['vnicPrivateIpAddress'] = $vnicPrivateIpAddress;
        return $this;
    }

    /**
    * Gets vnicPrivateIpAddressLike
    *  根据private_ip_address模糊搜索
    *
    * @return string|null
    */
    public function getVnicPrivateIpAddressLike()
    {
        return $this->container['vnicPrivateIpAddressLike'];
    }

    /**
    * Sets vnicPrivateIpAddressLike
    *
    * @param string|null $vnicPrivateIpAddressLike 根据private_ip_address模糊搜索
    *
    * @return $this
    */
    public function setVnicPrivateIpAddressLike($vnicPrivateIpAddressLike)
    {
        $this->container['vnicPrivateIpAddressLike'] = $vnicPrivateIpAddressLike;
        return $this;
    }

    /**
    * Gets vnicDeviceId
    *  根据device_id过滤
    *
    * @return string[]|null
    */
    public function getVnicDeviceId()
    {
        return $this->container['vnicDeviceId'];
    }

    /**
    * Sets vnicDeviceId
    *
    * @param string[]|null $vnicDeviceId 根据device_id过滤
    *
    * @return $this
    */
    public function setVnicDeviceId($vnicDeviceId)
    {
        $this->container['vnicDeviceId'] = $vnicDeviceId;
        return $this;
    }

    /**
    * Gets vnicDeviceOwner
    *  根据device_owner过滤
    *
    * @return string[]|null
    */
    public function getVnicDeviceOwner()
    {
        return $this->container['vnicDeviceOwner'];
    }

    /**
    * Sets vnicDeviceOwner
    *
    * @param string[]|null $vnicDeviceOwner 根据device_owner过滤
    *
    * @return $this
    */
    public function setVnicDeviceOwner($vnicDeviceOwner)
    {
        $this->container['vnicDeviceOwner'] = $vnicDeviceOwner;
        return $this;
    }

    /**
    * Gets vnicVpcId
    *  根据vpc_id过滤
    *
    * @return string[]|null
    */
    public function getVnicVpcId()
    {
        return $this->container['vnicVpcId'];
    }

    /**
    * Sets vnicVpcId
    *
    * @param string[]|null $vnicVpcId 根据vpc_id过滤
    *
    * @return $this
    */
    public function setVnicVpcId($vnicVpcId)
    {
        $this->container['vnicVpcId'] = $vnicVpcId;
        return $this;
    }

    /**
    * Gets vnicPortId
    *  根据port_id过滤
    *
    * @return string[]|null
    */
    public function getVnicPortId()
    {
        return $this->container['vnicPortId'];
    }

    /**
    * Sets vnicPortId
    *
    * @param string[]|null $vnicPortId 根据port_id过滤
    *
    * @return $this
    */
    public function setVnicPortId($vnicPortId)
    {
        $this->container['vnicPortId'] = $vnicPortId;
        return $this;
    }

    /**
    * Gets vnicDeviceOwnerPrefixlike
    *  根据device_owner_prefixlike模糊搜索
    *
    * @return string|null
    */
    public function getVnicDeviceOwnerPrefixlike()
    {
        return $this->container['vnicDeviceOwnerPrefixlike'];
    }

    /**
    * Sets vnicDeviceOwnerPrefixlike
    *
    * @param string|null $vnicDeviceOwnerPrefixlike 根据device_owner_prefixlike模糊搜索
    *
    * @return $this
    */
    public function setVnicDeviceOwnerPrefixlike($vnicDeviceOwnerPrefixlike)
    {
        $this->container['vnicDeviceOwnerPrefixlike'] = $vnicDeviceOwnerPrefixlike;
        return $this;
    }

    /**
    * Gets vnicInstanceType
    *  根据instance_type过滤
    *
    * @return string[]|null
    */
    public function getVnicInstanceType()
    {
        return $this->container['vnicInstanceType'];
    }

    /**
    * Sets vnicInstanceType
    *
    * @param string[]|null $vnicInstanceType 根据instance_type过滤
    *
    * @return $this
    */
    public function setVnicInstanceType($vnicInstanceType)
    {
        $this->container['vnicInstanceType'] = $vnicInstanceType;
        return $this;
    }

    /**
    * Gets vnicInstanceId
    *  根据instance_id过滤
    *
    * @return string[]|null
    */
    public function getVnicInstanceId()
    {
        return $this->container['vnicInstanceId'];
    }

    /**
    * Sets vnicInstanceId
    *
    * @param string[]|null $vnicInstanceId 根据instance_id过滤
    *
    * @return $this
    */
    public function setVnicInstanceId($vnicInstanceId)
    {
        $this->container['vnicInstanceId'] = $vnicInstanceId;
        return $this;
    }

    /**
    * Gets bandwidthId
    *  根据id过滤
    *
    * @return string[]|null
    */
    public function getBandwidthId()
    {
        return $this->container['bandwidthId'];
    }

    /**
    * Sets bandwidthId
    *
    * @param string[]|null $bandwidthId 根据id过滤
    *
    * @return $this
    */
    public function setBandwidthId($bandwidthId)
    {
        $this->container['bandwidthId'] = $bandwidthId;
        return $this;
    }

    /**
    * Gets bandwidthName
    *  根据name过滤
    *
    * @return string[]|null
    */
    public function getBandwidthName()
    {
        return $this->container['bandwidthName'];
    }

    /**
    * Sets bandwidthName
    *
    * @param string[]|null $bandwidthName 根据name过滤
    *
    * @return $this
    */
    public function setBandwidthName($bandwidthName)
    {
        $this->container['bandwidthName'] = $bandwidthName;
        return $this;
    }

    /**
    * Gets bandwidthNameLike
    *  根据name模糊过滤
    *
    * @return string[]|null
    */
    public function getBandwidthNameLike()
    {
        return $this->container['bandwidthNameLike'];
    }

    /**
    * Sets bandwidthNameLike
    *
    * @param string[]|null $bandwidthNameLike 根据name模糊过滤
    *
    * @return $this
    */
    public function setBandwidthNameLike($bandwidthNameLike)
    {
        $this->container['bandwidthNameLike'] = $bandwidthNameLike;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  根据size过滤
    *
    * @return int[]|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int[]|null $bandwidthSize 根据size过滤
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets bandwidthShareType
    *  根据share_type过滤
    *
    * @return string[]|null
    */
    public function getBandwidthShareType()
    {
        return $this->container['bandwidthShareType'];
    }

    /**
    * Sets bandwidthShareType
    *
    * @param string[]|null $bandwidthShareType 根据share_type过滤
    *
    * @return $this
    */
    public function setBandwidthShareType($bandwidthShareType)
    {
        $this->container['bandwidthShareType'] = $bandwidthShareType;
        return $this;
    }

    /**
    * Gets bandwidthChargeMode
    *  根据charge_mode过滤
    *
    * @return string[]|null
    */
    public function getBandwidthChargeMode()
    {
        return $this->container['bandwidthChargeMode'];
    }

    /**
    * Sets bandwidthChargeMode
    *
    * @param string[]|null $bandwidthChargeMode 根据charge_mode过滤
    *
    * @return $this
    */
    public function setBandwidthChargeMode($bandwidthChargeMode)
    {
        $this->container['bandwidthChargeMode'] = $bandwidthChargeMode;
        return $this;
    }

    /**
    * Gets billingInfo
    *  根据billing_info过滤
    *
    * @return string[]|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string[]|null $billingInfo 根据billing_info过滤
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets billingMode
    *  根据订单模式过滤,   取值范围：YEARLY_MONTHLY、PAY_PER_USE
    *
    * @return string|null
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param string|null $billingMode 根据订单模式过滤,   取值范围：YEARLY_MONTHLY、PAY_PER_USE
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
        return $this;
    }

    /**
    * Gets associateInstanceType
    *  根据associate_instance_type过滤  取值范围：PORT、NATGW、ELB、VPN、ELBV1
    *
    * @return string[]|null
    */
    public function getAssociateInstanceType()
    {
        return $this->container['associateInstanceType'];
    }

    /**
    * Sets associateInstanceType
    *
    * @param string[]|null $associateInstanceType 根据associate_instance_type过滤  取值范围：PORT、NATGW、ELB、VPN、ELBV1
    *
    * @return $this
    */
    public function setAssociateInstanceType($associateInstanceType)
    {
        $this->container['associateInstanceType'] = $associateInstanceType;
        return $this;
    }

    /**
    * Gets associateInstanceId
    *  根据associate_instance_id过滤
    *
    * @return string[]|null
    */
    public function getAssociateInstanceId()
    {
        return $this->container['associateInstanceId'];
    }

    /**
    * Sets associateInstanceId
    *
    * @param string[]|null $associateInstanceId 根据associate_instance_id过滤
    *
    * @return $this
    */
    public function setAssociateInstanceId($associateInstanceId)
    {
        $this->container['associateInstanceId'] = $associateInstanceId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  根据enterprise_project_id过滤
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 根据enterprise_project_id过滤
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  根据public_border_group过滤
    *
    * @return string[]|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string[]|null $publicBorderGroup 根据public_border_group过滤
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets allowShareBandwidthTypeAny
    *  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @return string[]|null
    */
    public function getAllowShareBandwidthTypeAny()
    {
        return $this->container['allowShareBandwidthTypeAny'];
    }

    /**
    * Sets allowShareBandwidthTypeAny
    *
    * @param string[]|null $allowShareBandwidthTypeAny 共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @return $this
    */
    public function setAllowShareBandwidthTypeAny($allowShareBandwidthTypeAny)
    {
        $this->container['allowShareBandwidthTypeAny'] = $allowShareBandwidthTypeAny;
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

