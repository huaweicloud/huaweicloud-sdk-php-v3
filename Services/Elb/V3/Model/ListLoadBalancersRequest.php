<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLoadBalancersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLoadBalancersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  负载均衡器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  负载均衡器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  负载均衡器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：正常运行。 - FROZEN：已冻结。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。
    * guaranteed  是否独享型LB。  取值： - false：共享型 - true：独享型  [仅支持独享型，固定为true。](tag:hws_eu,hcso_dt)
    * vpcId  负载均衡器所在的VPC ID。  支持多值查询，查询条件格式：*vpc_id=xxx&vpc_id=xxx*。
    * vipPortId  负载均衡器的IPv4对应的port ID。  支持多值查询，查询条件格式：*vip_port_id=xxx&vip_port_id=xxx*。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。  支持多值查询，查询条件格式：*vip_address=xxx&vip_address=xxx*。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*vip_subnet_cidr_id=xxx&vip_subnet_cidr_id=xxx*。
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  支持多值查询，查询条件格式：*ipv6_vip_port_id=xxx&ipv6_vip_port_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  支持多值查询，查询条件格式：*ipv6_vip_address=xxx&ipv6_vip_address=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在的子网IPv6网络ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*ipv6_vip_virsubnet_id=xxx&ipv6_vip_virsubnet_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * eips  负载均衡器绑定的EIP。例如要查询绑定以下EIP的LB： \"eips\": [     {         \"eip_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"eip_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： eips=ip_version%3D4&eips=eip_address%3D88.88.14.122&eips=eip_id%3De9b72a9d-4275-455e-a724-853504e4d9c6  支持多值查询，查询条件格式： - eip_id作为查询条件：*eips=eip_id=xxx&eips=eip_id=xxx*。 - eip_address作为查询条件：*eips=eip_address=xxx&eips=eip_address=xxx*。 - ip_version作为查询条件：*eips=ip_version=xxx&eips=ip_version=xxx*。  注：该字段与publicips字段一致。
    * publicips  负载均衡器绑定的公网IP。例如要查询绑定以下公网IP的LB： \"publicips=\": [     {         \"public_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"public_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： publicips=ip_version%3D4&publicips=public_address%3D88.88.14.122&publicips=public_id%3De9b72a9d-4275-455e-a724-853504e4d9c6   支持多值查询，查询条件格式： - publicip_id作为查询条件： *publicips=publicip_id=xxx&publicips=publicip_id=xxx* - publicip_address作为查询条件： *publicips=publicip_address=xxx&publicips=publicip_address=xxx* - ip_version作为查询条件： *publicips=ip_version=xxx&publicips=ip_version=xxx*  注：该字段与eips字段一致。
    * availabilityZoneList  负载均衡器所在可用区列表。  支持多值查询，查询条件格式： *availability_zone_list=xxx&availability_zone_list=xxx*。
    * l4FlavorId  网络型规格ID。  支持多值查询，查询条件格式：*l4_flavor_id=xxx&l4_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l4ScaleFlavorId  四层弹性Flavor ID。  支持多值查询，查询条件格式：*l4_scale_flavor_id=xxx&l4_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * l7FlavorId  应用型规格ID。  支持多值查询，查询条件格式：*l7_flavor_id=xxx&l7_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7ScaleFlavorId  七层弹性Flavor ID。  支持多值查询，查询条件格式：*l7_scale_flavor_id=xxx&l7_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * billingInfo  资源账单信息。  支持多值查询，查询条件格式：*billing_info=xxx&billing_info=xxx*。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * memberDeviceId  负载均衡器中的后端服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberAddress  负载均衡器中的后端服务器对应的弹性云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * enterpriseProjectId  负载均衡器所属的企业项目ID。 查询时若不传，则查询default企业项目下的资源，鉴权按照default企业项目鉴权。 如果传值，则必须传已存在的企业项目ID（不可为\"0\"）或传all_granted_eps表示查询所有企业项目。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本信息。  取值：4代表IPv4，6代表IPv6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护，false不开启，true开启。[不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * elbVirsubnetType  下联面子网类型。  取值： - ipv4：ipv4。 - dualstack：双栈。  支持多值查询，查询条件格式： *elb_virsubnet_type=ipv4&elb_virsubnet_type=dualstack*。
    * autoscaling  是否开启弹性扩缩容。示例如下： \"autoscaling\": {             \"enable\": \"true\"         }  支持多值查询，查询条件格式：  *autoscaling=enable=true&autoscaling=enable=false*。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * globalEips  负载均衡器绑定的公网IP。示例如下：  {     \"global_eips\": [         {             \"global_eip_id\": \"24000000-0000-0000-0000-100000000001\",             \"global_eip_address\": \"10.10.10.10\",             \"ip_version\": 4         }     ] }   支持多值查询，查询条件格式：  - global_eip_id作为查询条件：*global_eips=global_eip_id=xxx&global_eips=global_eip_id=xxx*。  - global_eip_address作为查询条件：*global_eips=global_eip_address=xxx&global_eips=global_eip_address=xxx*。  - ip_version作为查询条件：*global_eips=ip_version=xxx&global_eips=ip_version=xxx*。
    * logTopicId  LB实例绑定的logtank的topic id信息，支持多值查询，查询条件格式：*log_topic_id=xxx&log_topic_id=xxx*。
    * logGroupId  LB实例绑定的logtank的group id信息，支持多值查询，查询条件格式：*log_group_id=xxx&log_group_id=xxx*。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'id' => 'string[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'adminStateUp' => 'bool',
            'provisioningStatus' => 'string[]',
            'operatingStatus' => 'string[]',
            'guaranteed' => 'bool',
            'vpcId' => 'string[]',
            'vipPortId' => 'string[]',
            'vipAddress' => 'string[]',
            'vipSubnetCidrId' => 'string[]',
            'ipv6VipPortId' => 'string[]',
            'ipv6VipAddress' => 'string[]',
            'ipv6VipVirsubnetId' => 'string[]',
            'eips' => 'string[]',
            'publicips' => 'string[]',
            'availabilityZoneList' => 'string[]',
            'l4FlavorId' => 'string[]',
            'l4ScaleFlavorId' => 'string[]',
            'l7FlavorId' => 'string[]',
            'l7ScaleFlavorId' => 'string[]',
            'billingInfo' => 'string[]',
            'memberDeviceId' => 'string[]',
            'memberAddress' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'ipVersion' => 'int[]',
            'deletionProtectionEnable' => 'bool',
            'elbVirsubnetType' => 'string[]',
            'autoscaling' => 'string[]',
            'protectionStatus' => 'string[]',
            'globalEips' => 'string[]',
            'logTopicId' => 'string',
            'logGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  负载均衡器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  负载均衡器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  负载均衡器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：正常运行。 - FROZEN：已冻结。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。
    * guaranteed  是否独享型LB。  取值： - false：共享型 - true：独享型  [仅支持独享型，固定为true。](tag:hws_eu,hcso_dt)
    * vpcId  负载均衡器所在的VPC ID。  支持多值查询，查询条件格式：*vpc_id=xxx&vpc_id=xxx*。
    * vipPortId  负载均衡器的IPv4对应的port ID。  支持多值查询，查询条件格式：*vip_port_id=xxx&vip_port_id=xxx*。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。  支持多值查询，查询条件格式：*vip_address=xxx&vip_address=xxx*。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*vip_subnet_cidr_id=xxx&vip_subnet_cidr_id=xxx*。
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  支持多值查询，查询条件格式：*ipv6_vip_port_id=xxx&ipv6_vip_port_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  支持多值查询，查询条件格式：*ipv6_vip_address=xxx&ipv6_vip_address=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在的子网IPv6网络ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*ipv6_vip_virsubnet_id=xxx&ipv6_vip_virsubnet_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * eips  负载均衡器绑定的EIP。例如要查询绑定以下EIP的LB： \"eips\": [     {         \"eip_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"eip_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： eips=ip_version%3D4&eips=eip_address%3D88.88.14.122&eips=eip_id%3De9b72a9d-4275-455e-a724-853504e4d9c6  支持多值查询，查询条件格式： - eip_id作为查询条件：*eips=eip_id=xxx&eips=eip_id=xxx*。 - eip_address作为查询条件：*eips=eip_address=xxx&eips=eip_address=xxx*。 - ip_version作为查询条件：*eips=ip_version=xxx&eips=ip_version=xxx*。  注：该字段与publicips字段一致。
    * publicips  负载均衡器绑定的公网IP。例如要查询绑定以下公网IP的LB： \"publicips=\": [     {         \"public_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"public_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： publicips=ip_version%3D4&publicips=public_address%3D88.88.14.122&publicips=public_id%3De9b72a9d-4275-455e-a724-853504e4d9c6   支持多值查询，查询条件格式： - publicip_id作为查询条件： *publicips=publicip_id=xxx&publicips=publicip_id=xxx* - publicip_address作为查询条件： *publicips=publicip_address=xxx&publicips=publicip_address=xxx* - ip_version作为查询条件： *publicips=ip_version=xxx&publicips=ip_version=xxx*  注：该字段与eips字段一致。
    * availabilityZoneList  负载均衡器所在可用区列表。  支持多值查询，查询条件格式： *availability_zone_list=xxx&availability_zone_list=xxx*。
    * l4FlavorId  网络型规格ID。  支持多值查询，查询条件格式：*l4_flavor_id=xxx&l4_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l4ScaleFlavorId  四层弹性Flavor ID。  支持多值查询，查询条件格式：*l4_scale_flavor_id=xxx&l4_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * l7FlavorId  应用型规格ID。  支持多值查询，查询条件格式：*l7_flavor_id=xxx&l7_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7ScaleFlavorId  七层弹性Flavor ID。  支持多值查询，查询条件格式：*l7_scale_flavor_id=xxx&l7_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * billingInfo  资源账单信息。  支持多值查询，查询条件格式：*billing_info=xxx&billing_info=xxx*。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * memberDeviceId  负载均衡器中的后端服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberAddress  负载均衡器中的后端服务器对应的弹性云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * enterpriseProjectId  负载均衡器所属的企业项目ID。 查询时若不传，则查询default企业项目下的资源，鉴权按照default企业项目鉴权。 如果传值，则必须传已存在的企业项目ID（不可为\"0\"）或传all_granted_eps表示查询所有企业项目。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本信息。  取值：4代表IPv4，6代表IPv6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护，false不开启，true开启。[不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * elbVirsubnetType  下联面子网类型。  取值： - ipv4：ipv4。 - dualstack：双栈。  支持多值查询，查询条件格式： *elb_virsubnet_type=ipv4&elb_virsubnet_type=dualstack*。
    * autoscaling  是否开启弹性扩缩容。示例如下： \"autoscaling\": {             \"enable\": \"true\"         }  支持多值查询，查询条件格式：  *autoscaling=enable=true&autoscaling=enable=false*。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * globalEips  负载均衡器绑定的公网IP。示例如下：  {     \"global_eips\": [         {             \"global_eip_id\": \"24000000-0000-0000-0000-100000000001\",             \"global_eip_address\": \"10.10.10.10\",             \"ip_version\": 4         }     ] }   支持多值查询，查询条件格式：  - global_eip_id作为查询条件：*global_eips=global_eip_id=xxx&global_eips=global_eip_id=xxx*。  - global_eip_address作为查询条件：*global_eips=global_eip_address=xxx&global_eips=global_eip_address=xxx*。  - ip_version作为查询条件：*global_eips=ip_version=xxx&global_eips=ip_version=xxx*。
    * logTopicId  LB实例绑定的logtank的topic id信息，支持多值查询，查询条件格式：*log_topic_id=xxx&log_topic_id=xxx*。
    * logGroupId  LB实例绑定的logtank的group id信息，支持多值查询，查询条件格式：*log_group_id=xxx&log_group_id=xxx*。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'provisioningStatus' => null,
        'operatingStatus' => null,
        'guaranteed' => null,
        'vpcId' => null,
        'vipPortId' => null,
        'vipAddress' => null,
        'vipSubnetCidrId' => null,
        'ipv6VipPortId' => null,
        'ipv6VipAddress' => null,
        'ipv6VipVirsubnetId' => null,
        'eips' => null,
        'publicips' => null,
        'availabilityZoneList' => null,
        'l4FlavorId' => null,
        'l4ScaleFlavorId' => null,
        'l7FlavorId' => null,
        'l7ScaleFlavorId' => null,
        'billingInfo' => null,
        'memberDeviceId' => null,
        'memberAddress' => null,
        'enterpriseProjectId' => null,
        'ipVersion' => 'int32',
        'deletionProtectionEnable' => null,
        'elbVirsubnetType' => null,
        'autoscaling' => null,
        'protectionStatus' => null,
        'globalEips' => null,
        'logTopicId' => null,
        'logGroupId' => null
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
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  负载均衡器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  负载均衡器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  负载均衡器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：正常运行。 - FROZEN：已冻结。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。
    * guaranteed  是否独享型LB。  取值： - false：共享型 - true：独享型  [仅支持独享型，固定为true。](tag:hws_eu,hcso_dt)
    * vpcId  负载均衡器所在的VPC ID。  支持多值查询，查询条件格式：*vpc_id=xxx&vpc_id=xxx*。
    * vipPortId  负载均衡器的IPv4对应的port ID。  支持多值查询，查询条件格式：*vip_port_id=xxx&vip_port_id=xxx*。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。  支持多值查询，查询条件格式：*vip_address=xxx&vip_address=xxx*。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*vip_subnet_cidr_id=xxx&vip_subnet_cidr_id=xxx*。
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  支持多值查询，查询条件格式：*ipv6_vip_port_id=xxx&ipv6_vip_port_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  支持多值查询，查询条件格式：*ipv6_vip_address=xxx&ipv6_vip_address=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在的子网IPv6网络ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*ipv6_vip_virsubnet_id=xxx&ipv6_vip_virsubnet_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * eips  负载均衡器绑定的EIP。例如要查询绑定以下EIP的LB： \"eips\": [     {         \"eip_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"eip_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： eips=ip_version%3D4&eips=eip_address%3D88.88.14.122&eips=eip_id%3De9b72a9d-4275-455e-a724-853504e4d9c6  支持多值查询，查询条件格式： - eip_id作为查询条件：*eips=eip_id=xxx&eips=eip_id=xxx*。 - eip_address作为查询条件：*eips=eip_address=xxx&eips=eip_address=xxx*。 - ip_version作为查询条件：*eips=ip_version=xxx&eips=ip_version=xxx*。  注：该字段与publicips字段一致。
    * publicips  负载均衡器绑定的公网IP。例如要查询绑定以下公网IP的LB： \"publicips=\": [     {         \"public_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"public_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： publicips=ip_version%3D4&publicips=public_address%3D88.88.14.122&publicips=public_id%3De9b72a9d-4275-455e-a724-853504e4d9c6   支持多值查询，查询条件格式： - publicip_id作为查询条件： *publicips=publicip_id=xxx&publicips=publicip_id=xxx* - publicip_address作为查询条件： *publicips=publicip_address=xxx&publicips=publicip_address=xxx* - ip_version作为查询条件： *publicips=ip_version=xxx&publicips=ip_version=xxx*  注：该字段与eips字段一致。
    * availabilityZoneList  负载均衡器所在可用区列表。  支持多值查询，查询条件格式： *availability_zone_list=xxx&availability_zone_list=xxx*。
    * l4FlavorId  网络型规格ID。  支持多值查询，查询条件格式：*l4_flavor_id=xxx&l4_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l4ScaleFlavorId  四层弹性Flavor ID。  支持多值查询，查询条件格式：*l4_scale_flavor_id=xxx&l4_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * l7FlavorId  应用型规格ID。  支持多值查询，查询条件格式：*l7_flavor_id=xxx&l7_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7ScaleFlavorId  七层弹性Flavor ID。  支持多值查询，查询条件格式：*l7_scale_flavor_id=xxx&l7_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * billingInfo  资源账单信息。  支持多值查询，查询条件格式：*billing_info=xxx&billing_info=xxx*。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * memberDeviceId  负载均衡器中的后端服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberAddress  负载均衡器中的后端服务器对应的弹性云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * enterpriseProjectId  负载均衡器所属的企业项目ID。 查询时若不传，则查询default企业项目下的资源，鉴权按照default企业项目鉴权。 如果传值，则必须传已存在的企业项目ID（不可为\"0\"）或传all_granted_eps表示查询所有企业项目。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本信息。  取值：4代表IPv4，6代表IPv6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护，false不开启，true开启。[不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * elbVirsubnetType  下联面子网类型。  取值： - ipv4：ipv4。 - dualstack：双栈。  支持多值查询，查询条件格式： *elb_virsubnet_type=ipv4&elb_virsubnet_type=dualstack*。
    * autoscaling  是否开启弹性扩缩容。示例如下： \"autoscaling\": {             \"enable\": \"true\"         }  支持多值查询，查询条件格式：  *autoscaling=enable=true&autoscaling=enable=false*。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * globalEips  负载均衡器绑定的公网IP。示例如下：  {     \"global_eips\": [         {             \"global_eip_id\": \"24000000-0000-0000-0000-100000000001\",             \"global_eip_address\": \"10.10.10.10\",             \"ip_version\": 4         }     ] }   支持多值查询，查询条件格式：  - global_eip_id作为查询条件：*global_eips=global_eip_id=xxx&global_eips=global_eip_id=xxx*。  - global_eip_address作为查询条件：*global_eips=global_eip_address=xxx&global_eips=global_eip_address=xxx*。  - ip_version作为查询条件：*global_eips=ip_version=xxx&global_eips=ip_version=xxx*。
    * logTopicId  LB实例绑定的logtank的topic id信息，支持多值查询，查询条件格式：*log_topic_id=xxx&log_topic_id=xxx*。
    * logGroupId  LB实例绑定的logtank的group id信息，支持多值查询，查询条件格式：*log_group_id=xxx&log_group_id=xxx*。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'provisioningStatus' => 'provisioning_status',
            'operatingStatus' => 'operating_status',
            'guaranteed' => 'guaranteed',
            'vpcId' => 'vpc_id',
            'vipPortId' => 'vip_port_id',
            'vipAddress' => 'vip_address',
            'vipSubnetCidrId' => 'vip_subnet_cidr_id',
            'ipv6VipPortId' => 'ipv6_vip_port_id',
            'ipv6VipAddress' => 'ipv6_vip_address',
            'ipv6VipVirsubnetId' => 'ipv6_vip_virsubnet_id',
            'eips' => 'eips',
            'publicips' => 'publicips',
            'availabilityZoneList' => 'availability_zone_list',
            'l4FlavorId' => 'l4_flavor_id',
            'l4ScaleFlavorId' => 'l4_scale_flavor_id',
            'l7FlavorId' => 'l7_flavor_id',
            'l7ScaleFlavorId' => 'l7_scale_flavor_id',
            'billingInfo' => 'billing_info',
            'memberDeviceId' => 'member_device_id',
            'memberAddress' => 'member_address',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ipVersion' => 'ip_version',
            'deletionProtectionEnable' => 'deletion_protection_enable',
            'elbVirsubnetType' => 'elb_virsubnet_type',
            'autoscaling' => 'autoscaling',
            'protectionStatus' => 'protection_status',
            'globalEips' => 'global_eips',
            'logTopicId' => 'log_topic_id',
            'logGroupId' => 'log_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  负载均衡器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  负载均衡器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  负载均衡器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：正常运行。 - FROZEN：已冻结。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。
    * guaranteed  是否独享型LB。  取值： - false：共享型 - true：独享型  [仅支持独享型，固定为true。](tag:hws_eu,hcso_dt)
    * vpcId  负载均衡器所在的VPC ID。  支持多值查询，查询条件格式：*vpc_id=xxx&vpc_id=xxx*。
    * vipPortId  负载均衡器的IPv4对应的port ID。  支持多值查询，查询条件格式：*vip_port_id=xxx&vip_port_id=xxx*。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。  支持多值查询，查询条件格式：*vip_address=xxx&vip_address=xxx*。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*vip_subnet_cidr_id=xxx&vip_subnet_cidr_id=xxx*。
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  支持多值查询，查询条件格式：*ipv6_vip_port_id=xxx&ipv6_vip_port_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  支持多值查询，查询条件格式：*ipv6_vip_address=xxx&ipv6_vip_address=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在的子网IPv6网络ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*ipv6_vip_virsubnet_id=xxx&ipv6_vip_virsubnet_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * eips  负载均衡器绑定的EIP。例如要查询绑定以下EIP的LB： \"eips\": [     {         \"eip_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"eip_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： eips=ip_version%3D4&eips=eip_address%3D88.88.14.122&eips=eip_id%3De9b72a9d-4275-455e-a724-853504e4d9c6  支持多值查询，查询条件格式： - eip_id作为查询条件：*eips=eip_id=xxx&eips=eip_id=xxx*。 - eip_address作为查询条件：*eips=eip_address=xxx&eips=eip_address=xxx*。 - ip_version作为查询条件：*eips=ip_version=xxx&eips=ip_version=xxx*。  注：该字段与publicips字段一致。
    * publicips  负载均衡器绑定的公网IP。例如要查询绑定以下公网IP的LB： \"publicips=\": [     {         \"public_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"public_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： publicips=ip_version%3D4&publicips=public_address%3D88.88.14.122&publicips=public_id%3De9b72a9d-4275-455e-a724-853504e4d9c6   支持多值查询，查询条件格式： - publicip_id作为查询条件： *publicips=publicip_id=xxx&publicips=publicip_id=xxx* - publicip_address作为查询条件： *publicips=publicip_address=xxx&publicips=publicip_address=xxx* - ip_version作为查询条件： *publicips=ip_version=xxx&publicips=ip_version=xxx*  注：该字段与eips字段一致。
    * availabilityZoneList  负载均衡器所在可用区列表。  支持多值查询，查询条件格式： *availability_zone_list=xxx&availability_zone_list=xxx*。
    * l4FlavorId  网络型规格ID。  支持多值查询，查询条件格式：*l4_flavor_id=xxx&l4_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l4ScaleFlavorId  四层弹性Flavor ID。  支持多值查询，查询条件格式：*l4_scale_flavor_id=xxx&l4_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * l7FlavorId  应用型规格ID。  支持多值查询，查询条件格式：*l7_flavor_id=xxx&l7_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7ScaleFlavorId  七层弹性Flavor ID。  支持多值查询，查询条件格式：*l7_scale_flavor_id=xxx&l7_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * billingInfo  资源账单信息。  支持多值查询，查询条件格式：*billing_info=xxx&billing_info=xxx*。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * memberDeviceId  负载均衡器中的后端服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberAddress  负载均衡器中的后端服务器对应的弹性云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * enterpriseProjectId  负载均衡器所属的企业项目ID。 查询时若不传，则查询default企业项目下的资源，鉴权按照default企业项目鉴权。 如果传值，则必须传已存在的企业项目ID（不可为\"0\"）或传all_granted_eps表示查询所有企业项目。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本信息。  取值：4代表IPv4，6代表IPv6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护，false不开启，true开启。[不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * elbVirsubnetType  下联面子网类型。  取值： - ipv4：ipv4。 - dualstack：双栈。  支持多值查询，查询条件格式： *elb_virsubnet_type=ipv4&elb_virsubnet_type=dualstack*。
    * autoscaling  是否开启弹性扩缩容。示例如下： \"autoscaling\": {             \"enable\": \"true\"         }  支持多值查询，查询条件格式：  *autoscaling=enable=true&autoscaling=enable=false*。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * globalEips  负载均衡器绑定的公网IP。示例如下：  {     \"global_eips\": [         {             \"global_eip_id\": \"24000000-0000-0000-0000-100000000001\",             \"global_eip_address\": \"10.10.10.10\",             \"ip_version\": 4         }     ] }   支持多值查询，查询条件格式：  - global_eip_id作为查询条件：*global_eips=global_eip_id=xxx&global_eips=global_eip_id=xxx*。  - global_eip_address作为查询条件：*global_eips=global_eip_address=xxx&global_eips=global_eip_address=xxx*。  - ip_version作为查询条件：*global_eips=ip_version=xxx&global_eips=ip_version=xxx*。
    * logTopicId  LB实例绑定的logtank的topic id信息，支持多值查询，查询条件格式：*log_topic_id=xxx&log_topic_id=xxx*。
    * logGroupId  LB实例绑定的logtank的group id信息，支持多值查询，查询条件格式：*log_group_id=xxx&log_group_id=xxx*。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'provisioningStatus' => 'setProvisioningStatus',
            'operatingStatus' => 'setOperatingStatus',
            'guaranteed' => 'setGuaranteed',
            'vpcId' => 'setVpcId',
            'vipPortId' => 'setVipPortId',
            'vipAddress' => 'setVipAddress',
            'vipSubnetCidrId' => 'setVipSubnetCidrId',
            'ipv6VipPortId' => 'setIpv6VipPortId',
            'ipv6VipAddress' => 'setIpv6VipAddress',
            'ipv6VipVirsubnetId' => 'setIpv6VipVirsubnetId',
            'eips' => 'setEips',
            'publicips' => 'setPublicips',
            'availabilityZoneList' => 'setAvailabilityZoneList',
            'l4FlavorId' => 'setL4FlavorId',
            'l4ScaleFlavorId' => 'setL4ScaleFlavorId',
            'l7FlavorId' => 'setL7FlavorId',
            'l7ScaleFlavorId' => 'setL7ScaleFlavorId',
            'billingInfo' => 'setBillingInfo',
            'memberDeviceId' => 'setMemberDeviceId',
            'memberAddress' => 'setMemberAddress',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ipVersion' => 'setIpVersion',
            'deletionProtectionEnable' => 'setDeletionProtectionEnable',
            'elbVirsubnetType' => 'setElbVirsubnetType',
            'autoscaling' => 'setAutoscaling',
            'protectionStatus' => 'setProtectionStatus',
            'globalEips' => 'setGlobalEips',
            'logTopicId' => 'setLogTopicId',
            'logGroupId' => 'setLogGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * id  负载均衡器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  负载均衡器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * description  负载均衡器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：正常运行。 - FROZEN：已冻结。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。
    * guaranteed  是否独享型LB。  取值： - false：共享型 - true：独享型  [仅支持独享型，固定为true。](tag:hws_eu,hcso_dt)
    * vpcId  负载均衡器所在的VPC ID。  支持多值查询，查询条件格式：*vpc_id=xxx&vpc_id=xxx*。
    * vipPortId  负载均衡器的IPv4对应的port ID。  支持多值查询，查询条件格式：*vip_port_id=xxx&vip_port_id=xxx*。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。  支持多值查询，查询条件格式：*vip_address=xxx&vip_address=xxx*。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*vip_subnet_cidr_id=xxx&vip_subnet_cidr_id=xxx*。
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  支持多值查询，查询条件格式：*ipv6_vip_port_id=xxx&ipv6_vip_port_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  支持多值查询，查询条件格式：*ipv6_vip_address=xxx&ipv6_vip_address=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在的子网IPv6网络ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*ipv6_vip_virsubnet_id=xxx&ipv6_vip_virsubnet_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * eips  负载均衡器绑定的EIP。例如要查询绑定以下EIP的LB： \"eips\": [     {         \"eip_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"eip_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： eips=ip_version%3D4&eips=eip_address%3D88.88.14.122&eips=eip_id%3De9b72a9d-4275-455e-a724-853504e4d9c6  支持多值查询，查询条件格式： - eip_id作为查询条件：*eips=eip_id=xxx&eips=eip_id=xxx*。 - eip_address作为查询条件：*eips=eip_address=xxx&eips=eip_address=xxx*。 - ip_version作为查询条件：*eips=ip_version=xxx&eips=ip_version=xxx*。  注：该字段与publicips字段一致。
    * publicips  负载均衡器绑定的公网IP。例如要查询绑定以下公网IP的LB： \"publicips=\": [     {         \"public_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"public_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： publicips=ip_version%3D4&publicips=public_address%3D88.88.14.122&publicips=public_id%3De9b72a9d-4275-455e-a724-853504e4d9c6   支持多值查询，查询条件格式： - publicip_id作为查询条件： *publicips=publicip_id=xxx&publicips=publicip_id=xxx* - publicip_address作为查询条件： *publicips=publicip_address=xxx&publicips=publicip_address=xxx* - ip_version作为查询条件： *publicips=ip_version=xxx&publicips=ip_version=xxx*  注：该字段与eips字段一致。
    * availabilityZoneList  负载均衡器所在可用区列表。  支持多值查询，查询条件格式： *availability_zone_list=xxx&availability_zone_list=xxx*。
    * l4FlavorId  网络型规格ID。  支持多值查询，查询条件格式：*l4_flavor_id=xxx&l4_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l4ScaleFlavorId  四层弹性Flavor ID。  支持多值查询，查询条件格式：*l4_scale_flavor_id=xxx&l4_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * l7FlavorId  应用型规格ID。  支持多值查询，查询条件格式：*l7_flavor_id=xxx&l7_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7ScaleFlavorId  七层弹性Flavor ID。  支持多值查询，查询条件格式：*l7_scale_flavor_id=xxx&l7_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    * billingInfo  资源账单信息。  支持多值查询，查询条件格式：*billing_info=xxx&billing_info=xxx*。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * memberDeviceId  负载均衡器中的后端服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberAddress  负载均衡器中的后端服务器对应的弹性云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * enterpriseProjectId  负载均衡器所属的企业项目ID。 查询时若不传，则查询default企业项目下的资源，鉴权按照default企业项目鉴权。 如果传值，则必须传已存在的企业项目ID（不可为\"0\"）或传all_granted_eps表示查询所有企业项目。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  IP版本信息。  取值：4代表IPv4，6代表IPv6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护，false不开启，true开启。[不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * elbVirsubnetType  下联面子网类型。  取值： - ipv4：ipv4。 - dualstack：双栈。  支持多值查询，查询条件格式： *elb_virsubnet_type=ipv4&elb_virsubnet_type=dualstack*。
    * autoscaling  是否开启弹性扩缩容。示例如下： \"autoscaling\": {             \"enable\": \"true\"         }  支持多值查询，查询条件格式：  *autoscaling=enable=true&autoscaling=enable=false*。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * globalEips  负载均衡器绑定的公网IP。示例如下：  {     \"global_eips\": [         {             \"global_eip_id\": \"24000000-0000-0000-0000-100000000001\",             \"global_eip_address\": \"10.10.10.10\",             \"ip_version\": 4         }     ] }   支持多值查询，查询条件格式：  - global_eip_id作为查询条件：*global_eips=global_eip_id=xxx&global_eips=global_eip_id=xxx*。  - global_eip_address作为查询条件：*global_eips=global_eip_address=xxx&global_eips=global_eip_address=xxx*。  - ip_version作为查询条件：*global_eips=ip_version=xxx&global_eips=ip_version=xxx*。
    * logTopicId  LB实例绑定的logtank的topic id信息，支持多值查询，查询条件格式：*log_topic_id=xxx&log_topic_id=xxx*。
    * logGroupId  LB实例绑定的logtank的group id信息，支持多值查询，查询条件格式：*log_group_id=xxx&log_group_id=xxx*。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'provisioningStatus' => 'getProvisioningStatus',
            'operatingStatus' => 'getOperatingStatus',
            'guaranteed' => 'getGuaranteed',
            'vpcId' => 'getVpcId',
            'vipPortId' => 'getVipPortId',
            'vipAddress' => 'getVipAddress',
            'vipSubnetCidrId' => 'getVipSubnetCidrId',
            'ipv6VipPortId' => 'getIpv6VipPortId',
            'ipv6VipAddress' => 'getIpv6VipAddress',
            'ipv6VipVirsubnetId' => 'getIpv6VipVirsubnetId',
            'eips' => 'getEips',
            'publicips' => 'getPublicips',
            'availabilityZoneList' => 'getAvailabilityZoneList',
            'l4FlavorId' => 'getL4FlavorId',
            'l4ScaleFlavorId' => 'getL4ScaleFlavorId',
            'l7FlavorId' => 'getL7FlavorId',
            'l7ScaleFlavorId' => 'getL7ScaleFlavorId',
            'billingInfo' => 'getBillingInfo',
            'memberDeviceId' => 'getMemberDeviceId',
            'memberAddress' => 'getMemberAddress',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ipVersion' => 'getIpVersion',
            'deletionProtectionEnable' => 'getDeletionProtectionEnable',
            'elbVirsubnetType' => 'getElbVirsubnetType',
            'autoscaling' => 'getAutoscaling',
            'protectionStatus' => 'getProtectionStatus',
            'globalEips' => 'getGlobalEips',
            'logTopicId' => 'getLogTopicId',
            'logGroupId' => 'getLogGroupId'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['guaranteed'] = isset($data['guaranteed']) ? $data['guaranteed'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['vipPortId'] = isset($data['vipPortId']) ? $data['vipPortId'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['vipSubnetCidrId'] = isset($data['vipSubnetCidrId']) ? $data['vipSubnetCidrId'] : null;
        $this->container['ipv6VipPortId'] = isset($data['ipv6VipPortId']) ? $data['ipv6VipPortId'] : null;
        $this->container['ipv6VipAddress'] = isset($data['ipv6VipAddress']) ? $data['ipv6VipAddress'] : null;
        $this->container['ipv6VipVirsubnetId'] = isset($data['ipv6VipVirsubnetId']) ? $data['ipv6VipVirsubnetId'] : null;
        $this->container['eips'] = isset($data['eips']) ? $data['eips'] : null;
        $this->container['publicips'] = isset($data['publicips']) ? $data['publicips'] : null;
        $this->container['availabilityZoneList'] = isset($data['availabilityZoneList']) ? $data['availabilityZoneList'] : null;
        $this->container['l4FlavorId'] = isset($data['l4FlavorId']) ? $data['l4FlavorId'] : null;
        $this->container['l4ScaleFlavorId'] = isset($data['l4ScaleFlavorId']) ? $data['l4ScaleFlavorId'] : null;
        $this->container['l7FlavorId'] = isset($data['l7FlavorId']) ? $data['l7FlavorId'] : null;
        $this->container['l7ScaleFlavorId'] = isset($data['l7ScaleFlavorId']) ? $data['l7ScaleFlavorId'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['memberDeviceId'] = isset($data['memberDeviceId']) ? $data['memberDeviceId'] : null;
        $this->container['memberAddress'] = isset($data['memberAddress']) ? $data['memberAddress'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['deletionProtectionEnable'] = isset($data['deletionProtectionEnable']) ? $data['deletionProtectionEnable'] : null;
        $this->container['elbVirsubnetType'] = isset($data['elbVirsubnetType']) ? $data['elbVirsubnetType'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['globalEips'] = isset($data['globalEips']) ? $data['globalEips'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    *  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
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
    * @param string|null $marker 上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
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
    * @param int|null $limit 参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageReverse
    *  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  负载均衡器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
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
    * @param string[]|null $id 负载均衡器ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
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
    *  负载均衡器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
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
    * @param string[]|null $name 负载均衡器名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
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
    *  负载均衡器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
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
    * @param string[]|null $description 负载均衡器的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
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
    * @param bool|null $adminStateUp 参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    *
    * @return string[]|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string[]|null $provisioningStatus 负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。  支持多值查询，查询条件格式：*provisioning_status=xxx&provisioning_status=xxx*。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  负载均衡器的操作状态。  取值： - ONLINE：正常运行。 - FROZEN：已冻结。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。
    *
    * @return string[]|null
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string[]|null $operatingStatus 负载均衡器的操作状态。  取值： - ONLINE：正常运行。 - FROZEN：已冻结。  支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets guaranteed
    *  是否独享型LB。  取值： - false：共享型 - true：独享型  [仅支持独享型，固定为true。](tag:hws_eu,hcso_dt)
    *
    * @return bool|null
    */
    public function getGuaranteed()
    {
        return $this->container['guaranteed'];
    }

    /**
    * Sets guaranteed
    *
    * @param bool|null $guaranteed 是否独享型LB。  取值： - false：共享型 - true：独享型  [仅支持独享型，固定为true。](tag:hws_eu,hcso_dt)
    *
    * @return $this
    */
    public function setGuaranteed($guaranteed)
    {
        $this->container['guaranteed'] = $guaranteed;
        return $this;
    }

    /**
    * Gets vpcId
    *  负载均衡器所在的VPC ID。  支持多值查询，查询条件格式：*vpc_id=xxx&vpc_id=xxx*。
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
    * @param string[]|null $vpcId 负载均衡器所在的VPC ID。  支持多值查询，查询条件格式：*vpc_id=xxx&vpc_id=xxx*。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets vipPortId
    *  负载均衡器的IPv4对应的port ID。  支持多值查询，查询条件格式：*vip_port_id=xxx&vip_port_id=xxx*。
    *
    * @return string[]|null
    */
    public function getVipPortId()
    {
        return $this->container['vipPortId'];
    }

    /**
    * Sets vipPortId
    *
    * @param string[]|null $vipPortId 负载均衡器的IPv4对应的port ID。  支持多值查询，查询条件格式：*vip_port_id=xxx&vip_port_id=xxx*。
    *
    * @return $this
    */
    public function setVipPortId($vipPortId)
    {
        $this->container['vipPortId'] = $vipPortId;
        return $this;
    }

    /**
    * Gets vipAddress
    *  负载均衡器的IPv4虚拟IP地址。  支持多值查询，查询条件格式：*vip_address=xxx&vip_address=xxx*。
    *
    * @return string[]|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string[]|null $vipAddress 负载均衡器的IPv4虚拟IP地址。  支持多值查询，查询条件格式：*vip_address=xxx&vip_address=xxx*。
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets vipSubnetCidrId
    *  负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*vip_subnet_cidr_id=xxx&vip_subnet_cidr_id=xxx*。
    *
    * @return string[]|null
    */
    public function getVipSubnetCidrId()
    {
        return $this->container['vipSubnetCidrId'];
    }

    /**
    * Sets vipSubnetCidrId
    *
    * @param string[]|null $vipSubnetCidrId 负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*vip_subnet_cidr_id=xxx&vip_subnet_cidr_id=xxx*。
    *
    * @return $this
    */
    public function setVipSubnetCidrId($vipSubnetCidrId)
    {
        $this->container['vipSubnetCidrId'] = $vipSubnetCidrId;
        return $this;
    }

    /**
    * Gets ipv6VipPortId
    *  双栈类型负载均衡器的IPv6对应的port ID。  支持多值查询，查询条件格式：*ipv6_vip_port_id=xxx&ipv6_vip_port_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return string[]|null
    */
    public function getIpv6VipPortId()
    {
        return $this->container['ipv6VipPortId'];
    }

    /**
    * Sets ipv6VipPortId
    *
    * @param string[]|null $ipv6VipPortId 双栈类型负载均衡器的IPv6对应的port ID。  支持多值查询，查询条件格式：*ipv6_vip_port_id=xxx&ipv6_vip_port_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setIpv6VipPortId($ipv6VipPortId)
    {
        $this->container['ipv6VipPortId'] = $ipv6VipPortId;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  双栈类型负载均衡器的IPv6地址。  支持多值查询，查询条件格式：*ipv6_vip_address=xxx&ipv6_vip_address=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return string[]|null
    */
    public function getIpv6VipAddress()
    {
        return $this->container['ipv6VipAddress'];
    }

    /**
    * Sets ipv6VipAddress
    *
    * @param string[]|null $ipv6VipAddress 双栈类型负载均衡器的IPv6地址。  支持多值查询，查询条件格式：*ipv6_vip_address=xxx&ipv6_vip_address=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setIpv6VipAddress($ipv6VipAddress)
    {
        $this->container['ipv6VipAddress'] = $ipv6VipAddress;
        return $this;
    }

    /**
    * Gets ipv6VipVirsubnetId
    *  双栈类型负载均衡器所在的子网IPv6网络ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*ipv6_vip_virsubnet_id=xxx&ipv6_vip_virsubnet_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return string[]|null
    */
    public function getIpv6VipVirsubnetId()
    {
        return $this->container['ipv6VipVirsubnetId'];
    }

    /**
    * Sets ipv6VipVirsubnetId
    *
    * @param string[]|null $ipv6VipVirsubnetId 双栈类型负载均衡器所在的子网IPv6网络ID，也称为该负载均衡器实例的前端子网。  支持多值查询，查询条件格式：*ipv6_vip_virsubnet_id=xxx&ipv6_vip_virsubnet_id=xxx*。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setIpv6VipVirsubnetId($ipv6VipVirsubnetId)
    {
        $this->container['ipv6VipVirsubnetId'] = $ipv6VipVirsubnetId;
        return $this;
    }

    /**
    * Gets eips
    *  负载均衡器绑定的EIP。例如要查询绑定以下EIP的LB： \"eips\": [     {         \"eip_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"eip_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： eips=ip_version%3D4&eips=eip_address%3D88.88.14.122&eips=eip_id%3De9b72a9d-4275-455e-a724-853504e4d9c6  支持多值查询，查询条件格式： - eip_id作为查询条件：*eips=eip_id=xxx&eips=eip_id=xxx*。 - eip_address作为查询条件：*eips=eip_address=xxx&eips=eip_address=xxx*。 - ip_version作为查询条件：*eips=ip_version=xxx&eips=ip_version=xxx*。  注：该字段与publicips字段一致。
    *
    * @return string[]|null
    */
    public function getEips()
    {
        return $this->container['eips'];
    }

    /**
    * Sets eips
    *
    * @param string[]|null $eips 负载均衡器绑定的EIP。例如要查询绑定以下EIP的LB： \"eips\": [     {         \"eip_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"eip_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： eips=ip_version%3D4&eips=eip_address%3D88.88.14.122&eips=eip_id%3De9b72a9d-4275-455e-a724-853504e4d9c6  支持多值查询，查询条件格式： - eip_id作为查询条件：*eips=eip_id=xxx&eips=eip_id=xxx*。 - eip_address作为查询条件：*eips=eip_address=xxx&eips=eip_address=xxx*。 - ip_version作为查询条件：*eips=ip_version=xxx&eips=ip_version=xxx*。  注：该字段与publicips字段一致。
    *
    * @return $this
    */
    public function setEips($eips)
    {
        $this->container['eips'] = $eips;
        return $this;
    }

    /**
    * Gets publicips
    *  负载均衡器绑定的公网IP。例如要查询绑定以下公网IP的LB： \"publicips=\": [     {         \"public_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"public_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： publicips=ip_version%3D4&publicips=public_address%3D88.88.14.122&publicips=public_id%3De9b72a9d-4275-455e-a724-853504e4d9c6   支持多值查询，查询条件格式： - publicip_id作为查询条件： *publicips=publicip_id=xxx&publicips=publicip_id=xxx* - publicip_address作为查询条件： *publicips=publicip_address=xxx&publicips=publicip_address=xxx* - ip_version作为查询条件： *publicips=ip_version=xxx&publicips=ip_version=xxx*  注：该字段与eips字段一致。
    *
    * @return string[]|null
    */
    public function getPublicips()
    {
        return $this->container['publicips'];
    }

    /**
    * Sets publicips
    *
    * @param string[]|null $publicips 负载均衡器绑定的公网IP。例如要查询绑定以下公网IP的LB： \"publicips=\": [     {         \"public_id\": \"e9b72a9d-4275-455e-a724-853504e4d9c6\",         \"public_address\": \"88.88.14.122\",         \"ip_version\": 4     } ] 可以通如下查询： publicips=ip_version%3D4&publicips=public_address%3D88.88.14.122&publicips=public_id%3De9b72a9d-4275-455e-a724-853504e4d9c6   支持多值查询，查询条件格式： - publicip_id作为查询条件： *publicips=publicip_id=xxx&publicips=publicip_id=xxx* - publicip_address作为查询条件： *publicips=publicip_address=xxx&publicips=publicip_address=xxx* - ip_version作为查询条件： *publicips=ip_version=xxx&publicips=ip_version=xxx*  注：该字段与eips字段一致。
    *
    * @return $this
    */
    public function setPublicips($publicips)
    {
        $this->container['publicips'] = $publicips;
        return $this;
    }

    /**
    * Gets availabilityZoneList
    *  负载均衡器所在可用区列表。  支持多值查询，查询条件格式： *availability_zone_list=xxx&availability_zone_list=xxx*。
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneList()
    {
        return $this->container['availabilityZoneList'];
    }

    /**
    * Sets availabilityZoneList
    *
    * @param string[]|null $availabilityZoneList 负载均衡器所在可用区列表。  支持多值查询，查询条件格式： *availability_zone_list=xxx&availability_zone_list=xxx*。
    *
    * @return $this
    */
    public function setAvailabilityZoneList($availabilityZoneList)
    {
        $this->container['availabilityZoneList'] = $availabilityZoneList;
        return $this;
    }

    /**
    * Gets l4FlavorId
    *  网络型规格ID。  支持多值查询，查询条件格式：*l4_flavor_id=xxx&l4_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return string[]|null
    */
    public function getL4FlavorId()
    {
        return $this->container['l4FlavorId'];
    }

    /**
    * Sets l4FlavorId
    *
    * @param string[]|null $l4FlavorId 网络型规格ID。  支持多值查询，查询条件格式：*l4_flavor_id=xxx&l4_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return $this
    */
    public function setL4FlavorId($l4FlavorId)
    {
        $this->container['l4FlavorId'] = $l4FlavorId;
        return $this;
    }

    /**
    * Gets l4ScaleFlavorId
    *  四层弹性Flavor ID。  支持多值查询，查询条件格式：*l4_scale_flavor_id=xxx&l4_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    *
    * @return string[]|null
    */
    public function getL4ScaleFlavorId()
    {
        return $this->container['l4ScaleFlavorId'];
    }

    /**
    * Sets l4ScaleFlavorId
    *
    * @param string[]|null $l4ScaleFlavorId 四层弹性Flavor ID。  支持多值查询，查询条件格式：*l4_scale_flavor_id=xxx&l4_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setL4ScaleFlavorId($l4ScaleFlavorId)
    {
        $this->container['l4ScaleFlavorId'] = $l4ScaleFlavorId;
        return $this;
    }

    /**
    * Gets l7FlavorId
    *  应用型规格ID。  支持多值查询，查询条件格式：*l7_flavor_id=xxx&l7_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return string[]|null
    */
    public function getL7FlavorId()
    {
        return $this->container['l7FlavorId'];
    }

    /**
    * Sets l7FlavorId
    *
    * @param string[]|null $l7FlavorId 应用型规格ID。  支持多值查询，查询条件格式：*l7_flavor_id=xxx&l7_flavor_id=xxx*。  [不支持该字段，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return $this
    */
    public function setL7FlavorId($l7FlavorId)
    {
        $this->container['l7FlavorId'] = $l7FlavorId;
        return $this;
    }

    /**
    * Gets l7ScaleFlavorId
    *  七层弹性Flavor ID。  支持多值查询，查询条件格式：*l7_scale_flavor_id=xxx&l7_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    *
    * @return string[]|null
    */
    public function getL7ScaleFlavorId()
    {
        return $this->container['l7ScaleFlavorId'];
    }

    /**
    * Sets l7ScaleFlavorId
    *
    * @param string[]|null $l7ScaleFlavorId 七层弹性Flavor ID。  支持多值查询，查询条件格式：*l7_scale_flavor_id=xxx&l7_scale_flavor_id=xxx*。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setL7ScaleFlavorId($l7ScaleFlavorId)
    {
        $this->container['l7ScaleFlavorId'] = $l7ScaleFlavorId;
        return $this;
    }

    /**
    * Gets billingInfo
    *  资源账单信息。  支持多值查询，查询条件格式：*billing_info=xxx&billing_info=xxx*。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
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
    * @param string[]|null $billingInfo 资源账单信息。  支持多值查询，查询条件格式：*billing_info=xxx&billing_info=xxx*。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets memberDeviceId
    *  负载均衡器中的后端服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    *
    * @return string[]|null
    */
    public function getMemberDeviceId()
    {
        return $this->container['memberDeviceId'];
    }

    /**
    * Sets memberDeviceId
    *
    * @param string[]|null $memberDeviceId 负载均衡器中的后端服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    *
    * @return $this
    */
    public function setMemberDeviceId($memberDeviceId)
    {
        $this->container['memberDeviceId'] = $memberDeviceId;
        return $this;
    }

    /**
    * Gets memberAddress
    *  负载均衡器中的后端服务器对应的弹性云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    *
    * @return string[]|null
    */
    public function getMemberAddress()
    {
        return $this->container['memberAddress'];
    }

    /**
    * Sets memberAddress
    *
    * @param string[]|null $memberAddress 负载均衡器中的后端服务器对应的弹性云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    *
    * @return $this
    */
    public function setMemberAddress($memberAddress)
    {
        $this->container['memberAddress'] = $memberAddress;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  负载均衡器所属的企业项目ID。 查询时若不传，则查询default企业项目下的资源，鉴权按照default企业项目鉴权。 如果传值，则必须传已存在的企业项目ID（不可为\"0\"）或传all_granted_eps表示查询所有企业项目。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    * @param string[]|null $enterpriseProjectId 负载均衡器所属的企业项目ID。 查询时若不传，则查询default企业项目下的资源，鉴权按照default企业项目鉴权。 如果传值，则必须传已存在的企业项目ID（不可为\"0\"）或传all_granted_eps表示查询所有企业项目。  支持多值查询，查询条件格式： *enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  IP版本信息。  取值：4代表IPv4，6代表IPv6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
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
    * @param int[]|null $ipVersion IP版本信息。  取值：4代表IPv4，6代表IPv6。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  [不支持IPv6，请勿设置为6。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets deletionProtectionEnable
    *  是否开启删除保护，false不开启，true开启。[不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    *
    * @return bool|null
    */
    public function getDeletionProtectionEnable()
    {
        return $this->container['deletionProtectionEnable'];
    }

    /**
    * Sets deletionProtectionEnable
    *
    * @param bool|null $deletionProtectionEnable 是否开启删除保护，false不开启，true开启。[不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setDeletionProtectionEnable($deletionProtectionEnable)
    {
        $this->container['deletionProtectionEnable'] = $deletionProtectionEnable;
        return $this;
    }

    /**
    * Gets elbVirsubnetType
    *  下联面子网类型。  取值： - ipv4：ipv4。 - dualstack：双栈。  支持多值查询，查询条件格式： *elb_virsubnet_type=ipv4&elb_virsubnet_type=dualstack*。
    *
    * @return string[]|null
    */
    public function getElbVirsubnetType()
    {
        return $this->container['elbVirsubnetType'];
    }

    /**
    * Sets elbVirsubnetType
    *
    * @param string[]|null $elbVirsubnetType 下联面子网类型。  取值： - ipv4：ipv4。 - dualstack：双栈。  支持多值查询，查询条件格式： *elb_virsubnet_type=ipv4&elb_virsubnet_type=dualstack*。
    *
    * @return $this
    */
    public function setElbVirsubnetType($elbVirsubnetType)
    {
        $this->container['elbVirsubnetType'] = $elbVirsubnetType;
        return $this;
    }

    /**
    * Gets autoscaling
    *  是否开启弹性扩缩容。示例如下： \"autoscaling\": {             \"enable\": \"true\"         }  支持多值查询，查询条件格式：  *autoscaling=enable=true&autoscaling=enable=false*。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return string[]|null
    */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
    * Sets autoscaling
    *
    * @param string[]|null $autoscaling 是否开启弹性扩缩容。示例如下： \"autoscaling\": {             \"enable\": \"true\"         }  支持多值查询，查询条件格式：  *autoscaling=enable=true&autoscaling=enable=false*。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return $this
    */
    public function setAutoscaling($autoscaling)
    {
        $this->container['autoscaling'] = $autoscaling;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return string[]|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string[]|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets globalEips
    *  负载均衡器绑定的公网IP。示例如下：  {     \"global_eips\": [         {             \"global_eip_id\": \"24000000-0000-0000-0000-100000000001\",             \"global_eip_address\": \"10.10.10.10\",             \"ip_version\": 4         }     ] }   支持多值查询，查询条件格式：  - global_eip_id作为查询条件：*global_eips=global_eip_id=xxx&global_eips=global_eip_id=xxx*。  - global_eip_address作为查询条件：*global_eips=global_eip_address=xxx&global_eips=global_eip_address=xxx*。  - ip_version作为查询条件：*global_eips=ip_version=xxx&global_eips=ip_version=xxx*。
    *
    * @return string[]|null
    */
    public function getGlobalEips()
    {
        return $this->container['globalEips'];
    }

    /**
    * Sets globalEips
    *
    * @param string[]|null $globalEips 负载均衡器绑定的公网IP。示例如下：  {     \"global_eips\": [         {             \"global_eip_id\": \"24000000-0000-0000-0000-100000000001\",             \"global_eip_address\": \"10.10.10.10\",             \"ip_version\": 4         }     ] }   支持多值查询，查询条件格式：  - global_eip_id作为查询条件：*global_eips=global_eip_id=xxx&global_eips=global_eip_id=xxx*。  - global_eip_address作为查询条件：*global_eips=global_eip_address=xxx&global_eips=global_eip_address=xxx*。  - ip_version作为查询条件：*global_eips=ip_version=xxx&global_eips=ip_version=xxx*。
    *
    * @return $this
    */
    public function setGlobalEips($globalEips)
    {
        $this->container['globalEips'] = $globalEips;
        return $this;
    }

    /**
    * Gets logTopicId
    *  LB实例绑定的logtank的topic id信息，支持多值查询，查询条件格式：*log_topic_id=xxx&log_topic_id=xxx*。
    *
    * @return string|null
    */
    public function getLogTopicId()
    {
        return $this->container['logTopicId'];
    }

    /**
    * Sets logTopicId
    *
    * @param string|null $logTopicId LB实例绑定的logtank的topic id信息，支持多值查询，查询条件格式：*log_topic_id=xxx&log_topic_id=xxx*。
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
        return $this;
    }

    /**
    * Gets logGroupId
    *  LB实例绑定的logtank的group id信息，支持多值查询，查询条件格式：*log_group_id=xxx&log_group_id=xxx*。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId LB实例绑定的logtank的group id信息，支持多值查询，查询条件格式：*log_group_id=xxx&log_group_id=xxx*。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
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

