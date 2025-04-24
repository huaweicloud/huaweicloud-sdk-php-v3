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
    * name  参数解释：负载均衡器的名称。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * description  参数解释：负载均衡器的描述。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  约束限制： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt)
    * vipSubnetCidrId  参数解释：负载均衡器所在的IPv4子网ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的**私网IPv4**地址将发生变化。  约束限制： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP。  约束限制：该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  参数解释：网络型规格ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [当前场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7FlavorId  参数解释：应用型ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  约束限制： - 已绑定的下联面子网也在传参elb_virsubnet_ids列表中，则绑定关系保留。 - 已绑定的下联面子网若不在传参elb_virsubnet_ids列表中， 则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 所有elb_virsubnet_ids中的ID同属于该LB所在的VPC。 - 不支持边缘云子网。
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制：退场时需要先关闭所有资源的删除保护开关。  取值范围：false不开启，true开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * chargeMode  参数解释：计费模式。  取值范围： - flavor：按规格计费
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt)
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
            'chargeMode' => 'string',
            'wafFailureAction' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'ipv6VipAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数解释：负载均衡器的名称。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * description  参数解释：负载均衡器的描述。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  约束限制： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt)
    * vipSubnetCidrId  参数解释：负载均衡器所在的IPv4子网ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的**私网IPv4**地址将发生变化。  约束限制： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP。  约束限制：该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  参数解释：网络型规格ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [当前场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7FlavorId  参数解释：应用型ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  约束限制： - 已绑定的下联面子网也在传参elb_virsubnet_ids列表中，则绑定关系保留。 - 已绑定的下联面子网若不在传参elb_virsubnet_ids列表中， 则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 所有elb_virsubnet_ids中的ID同属于该LB所在的VPC。 - 不支持边缘云子网。
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制：退场时需要先关闭所有资源的删除保护开关。  取值范围：false不开启，true开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * chargeMode  参数解释：计费模式。  取值范围： - flavor：按规格计费
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt)
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
        'chargeMode' => null,
        'wafFailureAction' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'ipv6VipAddress' => null
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
    * name  参数解释：负载均衡器的名称。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * description  参数解释：负载均衡器的描述。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  约束限制： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt)
    * vipSubnetCidrId  参数解释：负载均衡器所在的IPv4子网ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的**私网IPv4**地址将发生变化。  约束限制： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP。  约束限制：该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  参数解释：网络型规格ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [当前场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7FlavorId  参数解释：应用型ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  约束限制： - 已绑定的下联面子网也在传参elb_virsubnet_ids列表中，则绑定关系保留。 - 已绑定的下联面子网若不在传参elb_virsubnet_ids列表中， 则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 所有elb_virsubnet_ids中的ID同属于该LB所在的VPC。 - 不支持边缘云子网。
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制：退场时需要先关闭所有资源的删除保护开关。  取值范围：false不开启，true开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * chargeMode  参数解释：计费模式。  取值范围： - flavor：按规格计费
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt)
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
            'chargeMode' => 'charge_mode',
            'wafFailureAction' => 'waf_failure_action',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'ipv6VipAddress' => 'ipv6_vip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数解释：负载均衡器的名称。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * description  参数解释：负载均衡器的描述。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  约束限制： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt)
    * vipSubnetCidrId  参数解释：负载均衡器所在的IPv4子网ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的**私网IPv4**地址将发生变化。  约束限制： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP。  约束限制：该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  参数解释：网络型规格ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [当前场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7FlavorId  参数解释：应用型ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  约束限制： - 已绑定的下联面子网也在传参elb_virsubnet_ids列表中，则绑定关系保留。 - 已绑定的下联面子网若不在传参elb_virsubnet_ids列表中， 则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 所有elb_virsubnet_ids中的ID同属于该LB所在的VPC。 - 不支持边缘云子网。
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制：退场时需要先关闭所有资源的删除保护开关。  取值范围：false不开启，true开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * chargeMode  参数解释：计费模式。  取值范围： - flavor：按规格计费
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt)
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
            'chargeMode' => 'setChargeMode',
            'wafFailureAction' => 'setWafFailureAction',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'ipv6VipAddress' => 'setIpv6VipAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数解释：负载均衡器的名称。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * description  参数解释：负载均衡器的描述。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  约束限制： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt)
    * vipSubnetCidrId  参数解释：负载均衡器所在的IPv4子网ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的**私网IPv4**地址将发生变化。  约束限制： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP。  约束限制：该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
    * l4FlavorId  参数解释：网络型规格ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [当前场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7FlavorId  参数解释：应用型ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * ipv6Bandwidth  ipv6Bandwidth
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  约束限制： - 已绑定的下联面子网也在传参elb_virsubnet_ids列表中，则绑定关系保留。 - 已绑定的下联面子网若不在传参elb_virsubnet_ids列表中， 则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 所有elb_virsubnet_ids中的ID同属于该LB所在的VPC。 - 不支持边缘云子网。
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制：退场时需要先关闭所有资源的删除保护开关。  取值范围：false不开启，true开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * chargeMode  参数解释：计费模式。  取值范围： - flavor：按规格计费
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt)
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
            'chargeMode' => 'getChargeMode',
            'wafFailureAction' => 'getWafFailureAction',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'ipv6VipAddress' => 'getIpv6VipAddress'
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
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['wafFailureAction'] = isset($data['wafFailureAction']) ? $data['wafFailureAction'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['ipv6VipAddress'] = isset($data['ipv6VipAddress']) ? $data['ipv6VipAddress'] : null;
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
    *  参数解释：负载均衡器的名称。
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
    * @param string|null $name 参数解释：负载均衡器的名称。
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
    *  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
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
    * @param bool|null $adminStateUp 参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
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
    *  参数解释：负载均衡器的描述。
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
    * @param string|null $description 参数解释：负载均衡器的描述。
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
    *  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  约束限制： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt)
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
    * @param string|null $ipv6VipVirsubnetId 参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  通过更新ipv6_vip_virsubnet_id可以更新负载均衡器所在IPv6子网，且负载均衡器的内网IPv6地址将发生变化。  约束限制： - ipv6_vip_virsubnet_id 对应的子网必须属于当前负载均衡器所在VPC，且子网需开启支持IPv6。 - 只有guaranteed是true的负载均衡器才支持更新ipv6_vip_virsubnet_id。 - *传入为null表示解绑IPv6子网。* - 更新IPv6子网不会导致IPv4子网发生变化。  [不支持IPv6，请勿使用。](tag:dt)
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
    *  参数解释：负载均衡器所在的IPv4子网ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的**私网IPv4**地址将发生变化。  约束限制： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
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
    * @param string|null $vipSubnetCidrId 参数解释：负载均衡器所在的IPv4子网ID，也称为该负载均衡器实例的前端子网。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。  通过更新vip_subnet_cidr_id可以更新负载均衡器所在IPv4子网，并且负载均衡器的**私网IPv4**地址将发生变化。  约束限制： - 若同时设置了vip_address，则必须保证vip_address对应的IP在vip_subnet_cidr_id的子网网段中。 - vip_subnet_cidr_id对应的子网必须属于当前负载均衡器vpc_id对应的VPC。 - 只有guaranteed是true的负载均衡器才支持更新vip_subnet_cidr_id。 - *传入null表示解绑IPv4子网。* - 更新IPv6子网不会导致IPv4子网发生变化。
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
    *  参数解释：负载均衡器的IPv4虚拟IP。  约束限制：该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
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
    * @param string|null $vipAddress 参数解释：负载均衡器的IPv4虚拟IP。  约束限制：该地址必须包含在所在子网的IPv4网段内，且未被占用。  注：仅当guaranteed是true的场合，才支持更新。
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
    *  参数解释：网络型规格ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [当前场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    * @param string|null $l4FlavorId 参数解释：网络型规格ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [当前场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    *  参数解释：应用型ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    * @param string|null $l7FlavorId 参数解释：应用型ID。  [约束限制： - 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 仅当guaranteed是true的场合，才支持更新。 - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， - autoscaling.enable=true时，修改无意义，不生效。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    *  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    * @param bool|null $ipTargetEnable 参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    *  参数解释：下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  约束限制： - 已绑定的下联面子网也在传参elb_virsubnet_ids列表中，则绑定关系保留。 - 已绑定的下联面子网若不在传参elb_virsubnet_ids列表中， 则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 所有elb_virsubnet_ids中的ID同属于该LB所在的VPC。 - 不支持边缘云子网。
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
    * @param string[]|null $elbVirsubnetIds 参数解释：下联面子网的网络ID列表。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  约束限制： - 已绑定的下联面子网也在传参elb_virsubnet_ids列表中，则绑定关系保留。 - 已绑定的下联面子网若不在传参elb_virsubnet_ids列表中， 则将移除LB与该下联面子网的关联关系。但不允许移除已被ELB使用的子网，否则将报错，不做任何修改。 - 在传参elb_virsubnet_ids列表中但不在已绑定的下联面子网列表中，则将新增LB与下联面的绑定关系。 - 所有elb_virsubnet_ids中的ID同属于该LB所在的VPC。 - 不支持边缘云子网。
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
    *  参数解释：是否开启删除保护。  约束限制：退场时需要先关闭所有资源的删除保护开关。  取值范围：false不开启，true开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    * @param bool|null $deletionProtectionEnable 参数解释：是否开启删除保护。  约束限制：退场时需要先关闭所有资源的删除保护开关。  取值范围：false不开启，true开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    * Gets chargeMode
    *  参数解释：计费模式。  取值范围： - flavor：按规格计费
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 参数解释：计费模式。  取值范围： - flavor：按规格计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets wafFailureAction
    *  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
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
    * @param string|null $wafFailureAction 参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
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
    *  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
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
    * @param string|null $protectionStatus 参数解释：修改保护状态。  取值范围： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
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
    *  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
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
    * @param string|null $protectionReason 参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return string|null
    */
    public function getIpv6VipAddress()
    {
        return $this->container['ipv6VipAddress'];
    }

    /**
    * Sets ipv6VipAddress
    *
    * @param string|null $ipv6VipAddress 参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpv6VipAddress($ipv6VipAddress)
    {
        $this->container['ipv6VipAddress'] = $ipv6VipAddress;
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

