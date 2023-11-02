<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLoadBalancerOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLoadBalancerOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  负载均衡器的名称。
    * adminStateUp  负载均衡器的管理状态。只能设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * description  负载均衡器的描述。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  使用说明： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * vipSubnetCidrId  负载均衡器所在的IPv4子网ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的内网IPv4地址将发生变化。  使用说明： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  负载均衡器的IPv4虚拟IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  - 在传参elb_virsubnet_ids列表中也在已绑定的下联面子网，则绑定关系保留。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 已绑定的下联面子网不在传参elb_virsubnet_ids列表中，则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。  使用说明： - 下联面子网必须属于该LB所在的VPC。 - 不支持边缘云子网。  [不支持IPv6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护。  取值：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'adminStateUp' => 'bool',
            'description' => 'string',
            'ipv6VipVirsubnetId' => 'string',
            'vipSubnetCidrId' => 'string',
            'vipAddress' => 'string',
            'l4FlavorId' => 'string',
            'l7FlavorId' => 'string',
            'ipv6Bandwidth' => '\HuaweiCloud\SDK\Elb\V3\Model\BandwidthRef',
            'ipTargetEnable' => 'bool',
            'elbVirsubnetIds' => 'string[]',
            'deletionProtectionEnable' => 'bool',
            'prepaidOptions' => '\HuaweiCloud\SDK\Elb\V3\Model\PrepaidUpdateOption',
            'autoscaling' => '\HuaweiCloud\SDK\Elb\V3\Model\UpdateLoadbalancerAutoscalingOption',
            'wafFailureAction' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  负载均衡器的名称。
    * adminStateUp  负载均衡器的管理状态。只能设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * description  负载均衡器的描述。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  使用说明： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * vipSubnetCidrId  负载均衡器所在的IPv4子网ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的内网IPv4地址将发生变化。  使用说明： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  负载均衡器的IPv4虚拟IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  - 在传参elb_virsubnet_ids列表中也在已绑定的下联面子网，则绑定关系保留。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 已绑定的下联面子网不在传参elb_virsubnet_ids列表中，则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。  使用说明： - 下联面子网必须属于该LB所在的VPC。 - 不支持边缘云子网。  [不支持IPv6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护。  取值：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'adminStateUp' => null,
        'description' => null,
        'ipv6VipVirsubnetId' => null,
        'vipSubnetCidrId' => null,
        'vipAddress' => null,
        'l4FlavorId' => null,
        'l7FlavorId' => null,
        'ipv6Bandwidth' => null,
        'ipTargetEnable' => null,
        'elbVirsubnetIds' => null,
        'deletionProtectionEnable' => null,
        'prepaidOptions' => null,
        'autoscaling' => null,
        'wafFailureAction' => null,
        'protectionStatus' => null,
        'protectionReason' => null
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
    * name  负载均衡器的名称。
    * adminStateUp  负载均衡器的管理状态。只能设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * description  负载均衡器的描述。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  使用说明： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * vipSubnetCidrId  负载均衡器所在的IPv4子网ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的内网IPv4地址将发生变化。  使用说明： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  负载均衡器的IPv4虚拟IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  - 在传参elb_virsubnet_ids列表中也在已绑定的下联面子网，则绑定关系保留。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 已绑定的下联面子网不在传参elb_virsubnet_ids列表中，则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。  使用说明： - 下联面子网必须属于该LB所在的VPC。 - 不支持边缘云子网。  [不支持IPv6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护。  取值：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'description' => 'description',
            'ipv6VipVirsubnetId' => 'ipv6_vip_virsubnet_id',
            'vipSubnetCidrId' => 'vip_subnet_cidr_id',
            'vipAddress' => 'vip_address',
            'l4FlavorId' => 'l4_flavor_id',
            'l7FlavorId' => 'l7_flavor_id',
            'ipv6Bandwidth' => 'ipv6_bandwidth',
            'ipTargetEnable' => 'ip_target_enable',
            'elbVirsubnetIds' => 'elb_virsubnet_ids',
            'deletionProtectionEnable' => 'deletion_protection_enable',
            'prepaidOptions' => 'prepaid_options',
            'autoscaling' => 'autoscaling',
            'wafFailureAction' => 'waf_failure_action',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  负载均衡器的名称。
    * adminStateUp  负载均衡器的管理状态。只能设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * description  负载均衡器的描述。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  使用说明： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * vipSubnetCidrId  负载均衡器所在的IPv4子网ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的内网IPv4地址将发生变化。  使用说明： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  负载均衡器的IPv4虚拟IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  - 在传参elb_virsubnet_ids列表中也在已绑定的下联面子网，则绑定关系保留。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 已绑定的下联面子网不在传参elb_virsubnet_ids列表中，则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。  使用说明： - 下联面子网必须属于该LB所在的VPC。 - 不支持边缘云子网。  [不支持IPv6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护。  取值：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'description' => 'setDescription',
            'ipv6VipVirsubnetId' => 'setIpv6VipVirsubnetId',
            'vipSubnetCidrId' => 'setVipSubnetCidrId',
            'vipAddress' => 'setVipAddress',
            'l4FlavorId' => 'setL4FlavorId',
            'l7FlavorId' => 'setL7FlavorId',
            'ipv6Bandwidth' => 'setIpv6Bandwidth',
            'ipTargetEnable' => 'setIpTargetEnable',
            'elbVirsubnetIds' => 'setElbVirsubnetIds',
            'deletionProtectionEnable' => 'setDeletionProtectionEnable',
            'prepaidOptions' => 'setPrepaidOptions',
            'autoscaling' => 'setAutoscaling',
            'wafFailureAction' => 'setWafFailureAction',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  负载均衡器的名称。
    * adminStateUp  负载均衡器的管理状态。只能设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * description  负载均衡器的描述。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  使用说明： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * vipSubnetCidrId  负载均衡器所在的IPv4子网ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的内网IPv4地址将发生变化。  使用说明： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  负载均衡器的IPv4虚拟IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  - 在传参elb_virsubnet_ids列表中也在已绑定的下联面子网，则绑定关系保留。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 已绑定的下联面子网不在传参elb_virsubnet_ids列表中，则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。  使用说明： - 下联面子网必须属于该LB所在的VPC。 - 不支持边缘云子网。  [不支持IPv6。](tag:dt,dt_test)
    * deletionProtectionEnable  是否开启删除保护。  取值：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'description' => 'getDescription',
            'ipv6VipVirsubnetId' => 'getIpv6VipVirsubnetId',
            'vipSubnetCidrId' => 'getVipSubnetCidrId',
            'vipAddress' => 'getVipAddress',
            'l4FlavorId' => 'getL4FlavorId',
            'l7FlavorId' => 'getL7FlavorId',
            'ipv6Bandwidth' => 'getIpv6Bandwidth',
            'ipTargetEnable' => 'getIpTargetEnable',
            'elbVirsubnetIds' => 'getElbVirsubnetIds',
            'deletionProtectionEnable' => 'getDeletionProtectionEnable',
            'prepaidOptions' => 'getPrepaidOptions',
            'autoscaling' => 'getAutoscaling',
            'wafFailureAction' => 'getWafFailureAction',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason'
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
    const WAF_FAILURE_ACTION_DISCARD = 'discard';
    const WAF_FAILURE_ACTION_FORWARD = 'forward';
    const PROTECTION_STATUS_NON_PROTECTION = 'nonProtection';
    const PROTECTION_STATUS_CONSOLE_PROTECTION = 'consoleProtection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getWafFailureActionAllowableValues()
    {
        return [
            self::WAF_FAILURE_ACTION_DISCARD,
            self::WAF_FAILURE_ACTION_FORWARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectionStatusAllowableValues()
    {
        return [
            self::PROTECTION_STATUS_NON_PROTECTION,
            self::PROTECTION_STATUS_CONSOLE_PROTECTION,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ipv6VipVirsubnetId'] = isset($data['ipv6VipVirsubnetId']) ? $data['ipv6VipVirsubnetId'] : null;
        $this->container['vipSubnetCidrId'] = isset($data['vipSubnetCidrId']) ? $data['vipSubnetCidrId'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['l4FlavorId'] = isset($data['l4FlavorId']) ? $data['l4FlavorId'] : null;
        $this->container['l7FlavorId'] = isset($data['l7FlavorId']) ? $data['l7FlavorId'] : null;
        $this->container['ipv6Bandwidth'] = isset($data['ipv6Bandwidth']) ? $data['ipv6Bandwidth'] : null;
        $this->container['ipTargetEnable'] = isset($data['ipTargetEnable']) ? $data['ipTargetEnable'] : null;
        $this->container['elbVirsubnetIds'] = isset($data['elbVirsubnetIds']) ? $data['elbVirsubnetIds'] : null;
        $this->container['deletionProtectionEnable'] = isset($data['deletionProtectionEnable']) ? $data['deletionProtectionEnable'] : null;
        $this->container['prepaidOptions'] = isset($data['prepaidOptions']) ? $data['prepaidOptions'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['wafFailureAction'] = isset($data['wafFailureAction']) ? $data['wafFailureAction'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vipSubnetCidrId']) && (mb_strlen($this->container['vipSubnetCidrId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vipSubnetCidrId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vipSubnetCidrId']) && (mb_strlen($this->container['vipSubnetCidrId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vipSubnetCidrId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vipAddress']) && (mb_strlen($this->container['vipAddress']) > 36)) {
                $invalidProperties[] = "invalid value for 'vipAddress', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vipAddress']) && (mb_strlen($this->container['vipAddress']) < 1)) {
                $invalidProperties[] = "invalid value for 'vipAddress', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['l4FlavorId']) && (mb_strlen($this->container['l4FlavorId']) > 255)) {
                $invalidProperties[] = "invalid value for 'l4FlavorId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['l4FlavorId']) && (mb_strlen($this->container['l4FlavorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'l4FlavorId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['l7FlavorId']) && (mb_strlen($this->container['l7FlavorId']) > 36)) {
                $invalidProperties[] = "invalid value for 'l7FlavorId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['l7FlavorId']) && (mb_strlen($this->container['l7FlavorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'l7FlavorId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getWafFailureActionAllowableValues();
                if (!is_null($this->container['wafFailureAction']) && !in_array($this->container['wafFailureAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'wafFailureAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['wafFailureAction']) && (mb_strlen($this->container['wafFailureAction']) > 36)) {
                $invalidProperties[] = "invalid value for 'wafFailureAction', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['wafFailureAction']) && (mb_strlen($this->container['wafFailureAction']) < 0)) {
                $invalidProperties[] = "invalid value for 'wafFailureAction', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getProtectionStatusAllowableValues();
                if (!is_null($this->container['protectionStatus']) && !in_array($this->container['protectionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  负载均衡器的名称。
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
    * @param string|null $name 负载均衡器的名称。
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
    *  负载均衡器的管理状态。只能设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    * @param bool|null $adminStateUp 负载均衡器的管理状态。只能设置为true。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets description
    *  负载均衡器的描述。
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
    * @param string|null $description 负载均衡器的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ipv6VipVirsubnetId
    *  双栈类型负载均衡器所在子网的IPv6网络ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  使用说明： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return string|null
    */
    public function getIpv6VipVirsubnetId()
    {
        return $this->container['ipv6VipVirsubnetId'];
    }

    /**
    * Sets ipv6VipVirsubnetId
    *
    * @param string|null $ipv6VipVirsubnetId 双栈类型负载均衡器所在子网的IPv6网络ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  使用说明： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setIpv6VipVirsubnetId($ipv6VipVirsubnetId)
    {
        $this->container['ipv6VipVirsubnetId'] = $ipv6VipVirsubnetId;
        return $this;
    }

    /**
    * Gets vipSubnetCidrId
    *  负载均衡器所在的IPv4子网ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的内网IPv4地址将发生变化。  使用说明： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    *
    * @return string|null
    */
    public function getVipSubnetCidrId()
    {
        return $this->container['vipSubnetCidrId'];
    }

    /**
    * Sets vipSubnetCidrId
    *
    * @param string|null $vipSubnetCidrId 负载均衡器所在的IPv4子网ID。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的内网IPv4地址将发生变化。  使用说明： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    *
    * @return $this
    */
    public function setVipSubnetCidrId($vipSubnetCidrId)
    {
        $this->container['vipSubnetCidrId'] = $vipSubnetCidrId;
        return $this;
    }

    /**
    * Gets vipAddress
    *  负载均衡器的IPv4虚拟IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    *
    * @return string|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string|null $vipAddress 负载均衡器的IPv4虚拟IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets l4FlavorId
    *  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return string|null
    */
    public function getL4FlavorId()
    {
        return $this->container['l4FlavorId'];
    }

    /**
    * Sets l4FlavorId
    *
    * @param string|null $l4FlavorId 四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return $this
    */
    public function setL4FlavorId($l4FlavorId)
    {
        $this->container['l4FlavorId'] = $l4FlavorId;
        return $this;
    }

    /**
    * Gets l7FlavorId
    *  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return string|null
    */
    public function getL7FlavorId()
    {
        return $this->container['l7FlavorId'];
    }

    /**
    * Sets l7FlavorId
    *
    * @param string|null $l7FlavorId 七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return $this
    */
    public function setL7FlavorId($l7FlavorId)
    {
        $this->container['l7FlavorId'] = $l7FlavorId;
        return $this;
    }

    /**
    * Gets ipv6Bandwidth
    *  ipv6Bandwidth
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\BandwidthRef|null
    */
    public function getIpv6Bandwidth()
    {
        return $this->container['ipv6Bandwidth'];
    }

    /**
    * Sets ipv6Bandwidth
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\BandwidthRef|null $ipv6Bandwidth ipv6Bandwidth
    *
    * @return $this
    */
    public function setIpv6Bandwidth($ipv6Bandwidth)
    {
        $this->container['ipv6Bandwidth'] = $ipv6Bandwidth;
        return $this;
    }

    /**
    * Gets ipTargetEnable
    *  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    *
    * @return bool|null
    */
    public function getIpTargetEnable()
    {
        return $this->container['ipTargetEnable'];
    }

    /**
    * Sets ipTargetEnable
    *
    * @param bool|null $ipTargetEnable 是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    *
    * @return $this
    */
    public function setIpTargetEnable($ipTargetEnable)
    {
        $this->container['ipTargetEnable'] = $ipTargetEnable;
        return $this;
    }

    /**
    * Gets elbVirsubnetIds
    *  下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  - 在传参elb_virsubnet_ids列表中也在已绑定的下联面子网，则绑定关系保留。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 已绑定的下联面子网不在传参elb_virsubnet_ids列表中，则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。  使用说明： - 下联面子网必须属于该LB所在的VPC。 - 不支持边缘云子网。  [不支持IPv6。](tag:dt,dt_test)
    *
    * @return string[]|null
    */
    public function getElbVirsubnetIds()
    {
        return $this->container['elbVirsubnetIds'];
    }

    /**
    * Sets elbVirsubnetIds
    *
    * @param string[]|null $elbVirsubnetIds 下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  - 在传参elb_virsubnet_ids列表中也在已绑定的下联面子网，则绑定关系保留。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 已绑定的下联面子网不在传参elb_virsubnet_ids列表中，则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。  使用说明： - 下联面子网必须属于该LB所在的VPC。 - 不支持边缘云子网。  [不支持IPv6。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setElbVirsubnetIds($elbVirsubnetIds)
    {
        $this->container['elbVirsubnetIds'] = $elbVirsubnetIds;
        return $this;
    }

    /**
    * Gets deletionProtectionEnable
    *  是否开启删除保护。  取值：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
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
    * @param bool|null $deletionProtectionEnable 是否开启删除保护。  取值：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    *
    * @return $this
    */
    public function setDeletionProtectionEnable($deletionProtectionEnable)
    {
        $this->container['deletionProtectionEnable'] = $deletionProtectionEnable;
        return $this;
    }

    /**
    * Gets prepaidOptions
    *  prepaidOptions
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PrepaidUpdateOption|null
    */
    public function getPrepaidOptions()
    {
        return $this->container['prepaidOptions'];
    }

    /**
    * Sets prepaidOptions
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PrepaidUpdateOption|null $prepaidOptions prepaidOptions
    *
    * @return $this
    */
    public function setPrepaidOptions($prepaidOptions)
    {
        $this->container['prepaidOptions'] = $prepaidOptions;
        return $this;
    }

    /**
    * Gets autoscaling
    *  autoscaling
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpdateLoadbalancerAutoscalingOption|null
    */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
    * Sets autoscaling
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpdateLoadbalancerAutoscalingOption|null $autoscaling autoscaling
    *
    * @return $this
    */
    public function setAutoscaling($autoscaling)
    {
        $this->container['autoscaling'] = $autoscaling;
        return $this;
    }

    /**
    * Gets wafFailureAction
    *  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    *
    * @return string|null
    */
    public function getWafFailureAction()
    {
        return $this->container['wafFailureAction'];
    }

    /**
    * Sets wafFailureAction
    *
    * @param string|null $wafFailureAction WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    *
    * @return $this
    */
    public function setWafFailureAction($wafFailureAction)
    {
        $this->container['wafFailureAction'] = $wafFailureAction;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    *
    * @return string|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets protectionReason
    *  设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @return string|null
    */
    public function getProtectionReason()
    {
        return $this->container['protectionReason'];
    }

    /**
    * Sets protectionReason
    *
    * @param string|null $protectionReason 设置保护的原因 >仅当protection_status为consoleProtection时有效。
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
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

