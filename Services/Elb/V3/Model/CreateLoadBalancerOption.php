<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLoadBalancerOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLoadBalancerOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  参数解释：负载均衡器实例所在的项目ID。
    * name  参数解释：负载均衡器的名称。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * description  参数解释：负载均衡器的描述。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * vipAddress  参数解释：负载均衡器的IPv4私网IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  约束限制： - 传入vip_address时，必须传入vip_subnet_cidr_id。 - 不传入vip_address，但传入vip_subnet_cidr_id，则自动分配IPv4私网IP。 - 不传入vip_address，且不传vip_subnet_cidr_id，则不分配IPv4私网IP，vip_address=null。 [- 网关型LB不支持传入vip_address。](tag:hws_eu)  取值范围：满足IPv4的地址格式，[0-255].[0-255].[0-255].[0-255]. 如192.168.1.1。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv4私网IP的负载均衡实例，则字段必须传入。可以通过调用VPC的API, GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。 - vpc_id, vip_subnet_cidr_id, ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 若同时传入vpc_id和vip_subnet_cidr_id，则vip_subnet_cidr_id对应的子网必须属于vpc_id对应的VPC。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv6 IP的负载均衡实例，则字段必须传入。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 需要对应的子网开启IPv6。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb，无需指定。
    * l4FlavorId  参数解释：网络型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor（默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * l7FlavorId  参数解释：应用型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor （默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * guaranteed  参数解释：是否为独享型负载均衡器实例。  约束限制：当前只支持设置为true，设置为false会返回400 Bad Request。  取值范围： - true：独享型。 - false：共享型。  默认取值：true。
    * vpcId  参数解释：负载均衡器所在的VPC ID。  约束限制: - 参数获取，可以通过 GET https://{VPC_Endpoint}/v1/{project_id}/vpcs 响应参数中的id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。  取值范围： 标准的UUID格式，长度为36个字符。
    * availabilityZoneList  参数解释：负载均衡器实例所在的可用区列表。  约束限制： - 可通过GET https://{ELB_Endponit}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。  >为了支持可用区容灾，建议选取不少于2个可用区。
    * enterpriseProjectId  参数解释：负载均衡器所属的企业项目ID。  约束限制：不能传入\"\"、\"0\"或不存在的企业项目ID，创建时不传则资源属于default企业项目，默认返回\"0\"。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。示例：\"tags\":[{\"key\":\"my_tag\",\"value\":\"my_tag_value\"}]
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  默认取值：true。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * billingInfo  参数解释: 预付费实例的订单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费。 格式为： order_id:product_id:region_id:project_id，如： CS2107161019CDJZZ:OFFI569702121789763584:region-xxx:057ef081eb00d2732fd1c01a9be75e6f   不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * publicipIds  参数解释：负载均衡器绑定的公网IP的ID的数组。  约束限制： - 只支持绑定数组中的第一个EIP，其他将被忽略。 [- 网关型LB不支持该字段。](tag:hws_eu)
    * publicip  publicip
    * elbVirsubnetIds  参数解释：负载均衡器的后端子网的网络ID（OpenStack Neutron接口）列表。负载均衡器实例会预占用该子网中的部分IP， 用于负载均衡器网关与该实例后端服务器通信的源地址（典型场景，健康检查探测的源地址，FULLNAT场景的源地址等）。 使用负载均衡器所在VPC的ID查询可用子网 GET https://{VPC_Endpoint}/v1/{project_id}/subnets?vpc_id=xxxx 获取响应参数中的neutron_network_id字段。  约束限制： - 后端子网必须属于该负载均衡器实例所在的VPC。 - 通常需要用户指定一个特殊的子网，方便用户在后端服务器关联的安全组中，放通该子网的地址段。 - 若指定多个下联面子网，则按顺序优先使用第一个子网来为负载均衡器下联面端口分配ip地址。 - 若不指定该字段，则按如下规则选择下联面网络：   1. 如果ELB实例开启ipv6，则选择ipv6_vip_virsubnet_id子网对应的网络ID。   2. 如果ELB实例没有开启ipv6，开启ipv4，则选择vip_subnet_cidr_id子网对应的网络ID。   3. 如果ELB实例没有选择私网，只开启公网，则会在当前负载均衡器所在的VPC中任意选一个子网，优选可用IP多的网络。  - 后端服务器安全组放通：由于负载均衡器网关会使用该子网中的预占的地址，作为源IP与后端服务器通信（健康检查探测，FULLNAT通信），为避免后端服务器关联的安全组拦截，建议将对应的子网地址段进行安全组放通。 - 预占地址变化：负载均衡实例，弹性扩缩场景，可能涉及到预占地址的变化，建议安全组对子网段放通，而不是具体预占地址的放通。 - 建议后端子网，使用一个独占的地址充足的子网，方便运维管理。
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * deletionProtectionEnable  参数解释：实例删除保护开关。  约束限制：实例删除前，需要先关闭该实例下所有资源的删除保护开关。  取值范围：  - false： 不开启。  - true： 开启。  默认取值：false。
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。 [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)  取值范围： - discard:丢弃。 - forward: 转发到后端。  默认取值：forward。
    * protectionStatus  参数解释：修改保护状态。用于console控制台防误修改。console感知该状态为consoleProtection时，不允许用户直接修改资源其他配置属性。  约束限制：不影响通过API修改资源属性。类似资源标记，用于提升控制台等用户易用性场景，如防误修改。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection。
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：通用Unicode字符集字符，最大255个字符。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  约束限制：不建议用户传该字段。系统会基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。  取值范围： - flavor：固定规格计费。 - lcu：弹性规格计费（按用户实际使用的lcu个数计费）。  默认取值： - 若是创建共享型实例，不传默认创建固定规格计费实例。 - 若是创建独享型实例，则系统会忽略改字段，而是基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。
    * ipv6VipAddress  参数解释：负载均衡器实例的IPv6地址。  约束限制：  - 必须属于ipv6_vip_virsubnet_id子网中地址。  - elb_virsubnet_ids中的后端子网必须支持双栈。 [- 网关型LB不支持指定ipv6_vip_address。](tag:hws_eu)  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'vipAddress' => 'string',
            'vipSubnetCidrId' => 'string',
            'ipv6VipVirsubnetId' => 'string',
            'provider' => 'string',
            'l4FlavorId' => 'string',
            'l7FlavorId' => 'string',
            'guaranteed' => 'bool',
            'vpcId' => 'string',
            'availabilityZoneList' => 'string[]',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Elb\V3\Model\Tag[]',
            'adminStateUp' => 'bool',
            'billingInfo' => 'string',
            'ipv6Bandwidth' => '\HuaweiCloud\SDK\Elb\V3\Model\BandwidthRef',
            'publicipIds' => 'string[]',
            'publicip' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerPublicIpOption',
            'elbVirsubnetIds' => 'string[]',
            'ipTargetEnable' => 'bool',
            'deletionProtectionEnable' => 'bool',
            'prepaidOptions' => '\HuaweiCloud\SDK\Elb\V3\Model\PrepaidCreateOption',
            'autoscaling' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateLoadbalancerAutoscalingOption',
            'wafFailureAction' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'chargeMode' => 'string',
            'ipv6VipAddress' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  参数解释：负载均衡器实例所在的项目ID。
    * name  参数解释：负载均衡器的名称。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * description  参数解释：负载均衡器的描述。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * vipAddress  参数解释：负载均衡器的IPv4私网IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  约束限制： - 传入vip_address时，必须传入vip_subnet_cidr_id。 - 不传入vip_address，但传入vip_subnet_cidr_id，则自动分配IPv4私网IP。 - 不传入vip_address，且不传vip_subnet_cidr_id，则不分配IPv4私网IP，vip_address=null。 [- 网关型LB不支持传入vip_address。](tag:hws_eu)  取值范围：满足IPv4的地址格式，[0-255].[0-255].[0-255].[0-255]. 如192.168.1.1。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv4私网IP的负载均衡实例，则字段必须传入。可以通过调用VPC的API, GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。 - vpc_id, vip_subnet_cidr_id, ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 若同时传入vpc_id和vip_subnet_cidr_id，则vip_subnet_cidr_id对应的子网必须属于vpc_id对应的VPC。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv6 IP的负载均衡实例，则字段必须传入。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 需要对应的子网开启IPv6。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb，无需指定。
    * l4FlavorId  参数解释：网络型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor（默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * l7FlavorId  参数解释：应用型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor （默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * guaranteed  参数解释：是否为独享型负载均衡器实例。  约束限制：当前只支持设置为true，设置为false会返回400 Bad Request。  取值范围： - true：独享型。 - false：共享型。  默认取值：true。
    * vpcId  参数解释：负载均衡器所在的VPC ID。  约束限制: - 参数获取，可以通过 GET https://{VPC_Endpoint}/v1/{project_id}/vpcs 响应参数中的id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。  取值范围： 标准的UUID格式，长度为36个字符。
    * availabilityZoneList  参数解释：负载均衡器实例所在的可用区列表。  约束限制： - 可通过GET https://{ELB_Endponit}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。  >为了支持可用区容灾，建议选取不少于2个可用区。
    * enterpriseProjectId  参数解释：负载均衡器所属的企业项目ID。  约束限制：不能传入\"\"、\"0\"或不存在的企业项目ID，创建时不传则资源属于default企业项目，默认返回\"0\"。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。示例：\"tags\":[{\"key\":\"my_tag\",\"value\":\"my_tag_value\"}]
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  默认取值：true。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * billingInfo  参数解释: 预付费实例的订单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费。 格式为： order_id:product_id:region_id:project_id，如： CS2107161019CDJZZ:OFFI569702121789763584:region-xxx:057ef081eb00d2732fd1c01a9be75e6f   不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * publicipIds  参数解释：负载均衡器绑定的公网IP的ID的数组。  约束限制： - 只支持绑定数组中的第一个EIP，其他将被忽略。 [- 网关型LB不支持该字段。](tag:hws_eu)
    * publicip  publicip
    * elbVirsubnetIds  参数解释：负载均衡器的后端子网的网络ID（OpenStack Neutron接口）列表。负载均衡器实例会预占用该子网中的部分IP， 用于负载均衡器网关与该实例后端服务器通信的源地址（典型场景，健康检查探测的源地址，FULLNAT场景的源地址等）。 使用负载均衡器所在VPC的ID查询可用子网 GET https://{VPC_Endpoint}/v1/{project_id}/subnets?vpc_id=xxxx 获取响应参数中的neutron_network_id字段。  约束限制： - 后端子网必须属于该负载均衡器实例所在的VPC。 - 通常需要用户指定一个特殊的子网，方便用户在后端服务器关联的安全组中，放通该子网的地址段。 - 若指定多个下联面子网，则按顺序优先使用第一个子网来为负载均衡器下联面端口分配ip地址。 - 若不指定该字段，则按如下规则选择下联面网络：   1. 如果ELB实例开启ipv6，则选择ipv6_vip_virsubnet_id子网对应的网络ID。   2. 如果ELB实例没有开启ipv6，开启ipv4，则选择vip_subnet_cidr_id子网对应的网络ID。   3. 如果ELB实例没有选择私网，只开启公网，则会在当前负载均衡器所在的VPC中任意选一个子网，优选可用IP多的网络。  - 后端服务器安全组放通：由于负载均衡器网关会使用该子网中的预占的地址，作为源IP与后端服务器通信（健康检查探测，FULLNAT通信），为避免后端服务器关联的安全组拦截，建议将对应的子网地址段进行安全组放通。 - 预占地址变化：负载均衡实例，弹性扩缩场景，可能涉及到预占地址的变化，建议安全组对子网段放通，而不是具体预占地址的放通。 - 建议后端子网，使用一个独占的地址充足的子网，方便运维管理。
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * deletionProtectionEnable  参数解释：实例删除保护开关。  约束限制：实例删除前，需要先关闭该实例下所有资源的删除保护开关。  取值范围：  - false： 不开启。  - true： 开启。  默认取值：false。
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。 [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)  取值范围： - discard:丢弃。 - forward: 转发到后端。  默认取值：forward。
    * protectionStatus  参数解释：修改保护状态。用于console控制台防误修改。console感知该状态为consoleProtection时，不允许用户直接修改资源其他配置属性。  约束限制：不影响通过API修改资源属性。类似资源标记，用于提升控制台等用户易用性场景，如防误修改。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection。
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：通用Unicode字符集字符，最大255个字符。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  约束限制：不建议用户传该字段。系统会基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。  取值范围： - flavor：固定规格计费。 - lcu：弹性规格计费（按用户实际使用的lcu个数计费）。  默认取值： - 若是创建共享型实例，不传默认创建固定规格计费实例。 - 若是创建独享型实例，则系统会忽略改字段，而是基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。
    * ipv6VipAddress  参数解释：负载均衡器实例的IPv6地址。  约束限制：  - 必须属于ipv6_vip_virsubnet_id子网中地址。  - elb_virsubnet_ids中的后端子网必须支持双栈。 [- 网关型LB不支持指定ipv6_vip_address。](tag:hws_eu)  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'name' => null,
        'description' => null,
        'vipAddress' => null,
        'vipSubnetCidrId' => null,
        'ipv6VipVirsubnetId' => null,
        'provider' => null,
        'l4FlavorId' => null,
        'l7FlavorId' => null,
        'guaranteed' => null,
        'vpcId' => null,
        'availabilityZoneList' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'adminStateUp' => null,
        'billingInfo' => null,
        'ipv6Bandwidth' => null,
        'publicipIds' => null,
        'publicip' => null,
        'elbVirsubnetIds' => null,
        'ipTargetEnable' => null,
        'deletionProtectionEnable' => null,
        'prepaidOptions' => null,
        'autoscaling' => null,
        'wafFailureAction' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'chargeMode' => null,
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
    * projectId  参数解释：负载均衡器实例所在的项目ID。
    * name  参数解释：负载均衡器的名称。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * description  参数解释：负载均衡器的描述。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * vipAddress  参数解释：负载均衡器的IPv4私网IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  约束限制： - 传入vip_address时，必须传入vip_subnet_cidr_id。 - 不传入vip_address，但传入vip_subnet_cidr_id，则自动分配IPv4私网IP。 - 不传入vip_address，且不传vip_subnet_cidr_id，则不分配IPv4私网IP，vip_address=null。 [- 网关型LB不支持传入vip_address。](tag:hws_eu)  取值范围：满足IPv4的地址格式，[0-255].[0-255].[0-255].[0-255]. 如192.168.1.1。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv4私网IP的负载均衡实例，则字段必须传入。可以通过调用VPC的API, GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。 - vpc_id, vip_subnet_cidr_id, ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 若同时传入vpc_id和vip_subnet_cidr_id，则vip_subnet_cidr_id对应的子网必须属于vpc_id对应的VPC。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv6 IP的负载均衡实例，则字段必须传入。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 需要对应的子网开启IPv6。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb，无需指定。
    * l4FlavorId  参数解释：网络型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor（默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * l7FlavorId  参数解释：应用型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor （默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * guaranteed  参数解释：是否为独享型负载均衡器实例。  约束限制：当前只支持设置为true，设置为false会返回400 Bad Request。  取值范围： - true：独享型。 - false：共享型。  默认取值：true。
    * vpcId  参数解释：负载均衡器所在的VPC ID。  约束限制: - 参数获取，可以通过 GET https://{VPC_Endpoint}/v1/{project_id}/vpcs 响应参数中的id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。  取值范围： 标准的UUID格式，长度为36个字符。
    * availabilityZoneList  参数解释：负载均衡器实例所在的可用区列表。  约束限制： - 可通过GET https://{ELB_Endponit}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。  >为了支持可用区容灾，建议选取不少于2个可用区。
    * enterpriseProjectId  参数解释：负载均衡器所属的企业项目ID。  约束限制：不能传入\"\"、\"0\"或不存在的企业项目ID，创建时不传则资源属于default企业项目，默认返回\"0\"。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。示例：\"tags\":[{\"key\":\"my_tag\",\"value\":\"my_tag_value\"}]
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  默认取值：true。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * billingInfo  参数解释: 预付费实例的订单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费。 格式为： order_id:product_id:region_id:project_id，如： CS2107161019CDJZZ:OFFI569702121789763584:region-xxx:057ef081eb00d2732fd1c01a9be75e6f   不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * publicipIds  参数解释：负载均衡器绑定的公网IP的ID的数组。  约束限制： - 只支持绑定数组中的第一个EIP，其他将被忽略。 [- 网关型LB不支持该字段。](tag:hws_eu)
    * publicip  publicip
    * elbVirsubnetIds  参数解释：负载均衡器的后端子网的网络ID（OpenStack Neutron接口）列表。负载均衡器实例会预占用该子网中的部分IP， 用于负载均衡器网关与该实例后端服务器通信的源地址（典型场景，健康检查探测的源地址，FULLNAT场景的源地址等）。 使用负载均衡器所在VPC的ID查询可用子网 GET https://{VPC_Endpoint}/v1/{project_id}/subnets?vpc_id=xxxx 获取响应参数中的neutron_network_id字段。  约束限制： - 后端子网必须属于该负载均衡器实例所在的VPC。 - 通常需要用户指定一个特殊的子网，方便用户在后端服务器关联的安全组中，放通该子网的地址段。 - 若指定多个下联面子网，则按顺序优先使用第一个子网来为负载均衡器下联面端口分配ip地址。 - 若不指定该字段，则按如下规则选择下联面网络：   1. 如果ELB实例开启ipv6，则选择ipv6_vip_virsubnet_id子网对应的网络ID。   2. 如果ELB实例没有开启ipv6，开启ipv4，则选择vip_subnet_cidr_id子网对应的网络ID。   3. 如果ELB实例没有选择私网，只开启公网，则会在当前负载均衡器所在的VPC中任意选一个子网，优选可用IP多的网络。  - 后端服务器安全组放通：由于负载均衡器网关会使用该子网中的预占的地址，作为源IP与后端服务器通信（健康检查探测，FULLNAT通信），为避免后端服务器关联的安全组拦截，建议将对应的子网地址段进行安全组放通。 - 预占地址变化：负载均衡实例，弹性扩缩场景，可能涉及到预占地址的变化，建议安全组对子网段放通，而不是具体预占地址的放通。 - 建议后端子网，使用一个独占的地址充足的子网，方便运维管理。
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * deletionProtectionEnable  参数解释：实例删除保护开关。  约束限制：实例删除前，需要先关闭该实例下所有资源的删除保护开关。  取值范围：  - false： 不开启。  - true： 开启。  默认取值：false。
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。 [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)  取值范围： - discard:丢弃。 - forward: 转发到后端。  默认取值：forward。
    * protectionStatus  参数解释：修改保护状态。用于console控制台防误修改。console感知该状态为consoleProtection时，不允许用户直接修改资源其他配置属性。  约束限制：不影响通过API修改资源属性。类似资源标记，用于提升控制台等用户易用性场景，如防误修改。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection。
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：通用Unicode字符集字符，最大255个字符。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  约束限制：不建议用户传该字段。系统会基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。  取值范围： - flavor：固定规格计费。 - lcu：弹性规格计费（按用户实际使用的lcu个数计费）。  默认取值： - 若是创建共享型实例，不传默认创建固定规格计费实例。 - 若是创建独享型实例，则系统会忽略改字段，而是基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。
    * ipv6VipAddress  参数解释：负载均衡器实例的IPv6地址。  约束限制：  - 必须属于ipv6_vip_virsubnet_id子网中地址。  - elb_virsubnet_ids中的后端子网必须支持双栈。 [- 网关型LB不支持指定ipv6_vip_address。](tag:hws_eu)  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'name' => 'name',
            'description' => 'description',
            'vipAddress' => 'vip_address',
            'vipSubnetCidrId' => 'vip_subnet_cidr_id',
            'ipv6VipVirsubnetId' => 'ipv6_vip_virsubnet_id',
            'provider' => 'provider',
            'l4FlavorId' => 'l4_flavor_id',
            'l7FlavorId' => 'l7_flavor_id',
            'guaranteed' => 'guaranteed',
            'vpcId' => 'vpc_id',
            'availabilityZoneList' => 'availability_zone_list',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'adminStateUp' => 'admin_state_up',
            'billingInfo' => 'billing_info',
            'ipv6Bandwidth' => 'ipv6_bandwidth',
            'publicipIds' => 'publicip_ids',
            'publicip' => 'publicip',
            'elbVirsubnetIds' => 'elb_virsubnet_ids',
            'ipTargetEnable' => 'ip_target_enable',
            'deletionProtectionEnable' => 'deletion_protection_enable',
            'prepaidOptions' => 'prepaid_options',
            'autoscaling' => 'autoscaling',
            'wafFailureAction' => 'waf_failure_action',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'chargeMode' => 'charge_mode',
            'ipv6VipAddress' => 'ipv6_vip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  参数解释：负载均衡器实例所在的项目ID。
    * name  参数解释：负载均衡器的名称。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * description  参数解释：负载均衡器的描述。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * vipAddress  参数解释：负载均衡器的IPv4私网IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  约束限制： - 传入vip_address时，必须传入vip_subnet_cidr_id。 - 不传入vip_address，但传入vip_subnet_cidr_id，则自动分配IPv4私网IP。 - 不传入vip_address，且不传vip_subnet_cidr_id，则不分配IPv4私网IP，vip_address=null。 [- 网关型LB不支持传入vip_address。](tag:hws_eu)  取值范围：满足IPv4的地址格式，[0-255].[0-255].[0-255].[0-255]. 如192.168.1.1。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv4私网IP的负载均衡实例，则字段必须传入。可以通过调用VPC的API, GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。 - vpc_id, vip_subnet_cidr_id, ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 若同时传入vpc_id和vip_subnet_cidr_id，则vip_subnet_cidr_id对应的子网必须属于vpc_id对应的VPC。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv6 IP的负载均衡实例，则字段必须传入。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 需要对应的子网开启IPv6。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb，无需指定。
    * l4FlavorId  参数解释：网络型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor（默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * l7FlavorId  参数解释：应用型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor （默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * guaranteed  参数解释：是否为独享型负载均衡器实例。  约束限制：当前只支持设置为true，设置为false会返回400 Bad Request。  取值范围： - true：独享型。 - false：共享型。  默认取值：true。
    * vpcId  参数解释：负载均衡器所在的VPC ID。  约束限制: - 参数获取，可以通过 GET https://{VPC_Endpoint}/v1/{project_id}/vpcs 响应参数中的id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。  取值范围： 标准的UUID格式，长度为36个字符。
    * availabilityZoneList  参数解释：负载均衡器实例所在的可用区列表。  约束限制： - 可通过GET https://{ELB_Endponit}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。  >为了支持可用区容灾，建议选取不少于2个可用区。
    * enterpriseProjectId  参数解释：负载均衡器所属的企业项目ID。  约束限制：不能传入\"\"、\"0\"或不存在的企业项目ID，创建时不传则资源属于default企业项目，默认返回\"0\"。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。示例：\"tags\":[{\"key\":\"my_tag\",\"value\":\"my_tag_value\"}]
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  默认取值：true。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * billingInfo  参数解释: 预付费实例的订单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费。 格式为： order_id:product_id:region_id:project_id，如： CS2107161019CDJZZ:OFFI569702121789763584:region-xxx:057ef081eb00d2732fd1c01a9be75e6f   不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * publicipIds  参数解释：负载均衡器绑定的公网IP的ID的数组。  约束限制： - 只支持绑定数组中的第一个EIP，其他将被忽略。 [- 网关型LB不支持该字段。](tag:hws_eu)
    * publicip  publicip
    * elbVirsubnetIds  参数解释：负载均衡器的后端子网的网络ID（OpenStack Neutron接口）列表。负载均衡器实例会预占用该子网中的部分IP， 用于负载均衡器网关与该实例后端服务器通信的源地址（典型场景，健康检查探测的源地址，FULLNAT场景的源地址等）。 使用负载均衡器所在VPC的ID查询可用子网 GET https://{VPC_Endpoint}/v1/{project_id}/subnets?vpc_id=xxxx 获取响应参数中的neutron_network_id字段。  约束限制： - 后端子网必须属于该负载均衡器实例所在的VPC。 - 通常需要用户指定一个特殊的子网，方便用户在后端服务器关联的安全组中，放通该子网的地址段。 - 若指定多个下联面子网，则按顺序优先使用第一个子网来为负载均衡器下联面端口分配ip地址。 - 若不指定该字段，则按如下规则选择下联面网络：   1. 如果ELB实例开启ipv6，则选择ipv6_vip_virsubnet_id子网对应的网络ID。   2. 如果ELB实例没有开启ipv6，开启ipv4，则选择vip_subnet_cidr_id子网对应的网络ID。   3. 如果ELB实例没有选择私网，只开启公网，则会在当前负载均衡器所在的VPC中任意选一个子网，优选可用IP多的网络。  - 后端服务器安全组放通：由于负载均衡器网关会使用该子网中的预占的地址，作为源IP与后端服务器通信（健康检查探测，FULLNAT通信），为避免后端服务器关联的安全组拦截，建议将对应的子网地址段进行安全组放通。 - 预占地址变化：负载均衡实例，弹性扩缩场景，可能涉及到预占地址的变化，建议安全组对子网段放通，而不是具体预占地址的放通。 - 建议后端子网，使用一个独占的地址充足的子网，方便运维管理。
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * deletionProtectionEnable  参数解释：实例删除保护开关。  约束限制：实例删除前，需要先关闭该实例下所有资源的删除保护开关。  取值范围：  - false： 不开启。  - true： 开启。  默认取值：false。
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。 [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)  取值范围： - discard:丢弃。 - forward: 转发到后端。  默认取值：forward。
    * protectionStatus  参数解释：修改保护状态。用于console控制台防误修改。console感知该状态为consoleProtection时，不允许用户直接修改资源其他配置属性。  约束限制：不影响通过API修改资源属性。类似资源标记，用于提升控制台等用户易用性场景，如防误修改。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection。
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：通用Unicode字符集字符，最大255个字符。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  约束限制：不建议用户传该字段。系统会基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。  取值范围： - flavor：固定规格计费。 - lcu：弹性规格计费（按用户实际使用的lcu个数计费）。  默认取值： - 若是创建共享型实例，不传默认创建固定规格计费实例。 - 若是创建独享型实例，则系统会忽略改字段，而是基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。
    * ipv6VipAddress  参数解释：负载均衡器实例的IPv6地址。  约束限制：  - 必须属于ipv6_vip_virsubnet_id子网中地址。  - elb_virsubnet_ids中的后端子网必须支持双栈。 [- 网关型LB不支持指定ipv6_vip_address。](tag:hws_eu)  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'description' => 'setDescription',
            'vipAddress' => 'setVipAddress',
            'vipSubnetCidrId' => 'setVipSubnetCidrId',
            'ipv6VipVirsubnetId' => 'setIpv6VipVirsubnetId',
            'provider' => 'setProvider',
            'l4FlavorId' => 'setL4FlavorId',
            'l7FlavorId' => 'setL7FlavorId',
            'guaranteed' => 'setGuaranteed',
            'vpcId' => 'setVpcId',
            'availabilityZoneList' => 'setAvailabilityZoneList',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'adminStateUp' => 'setAdminStateUp',
            'billingInfo' => 'setBillingInfo',
            'ipv6Bandwidth' => 'setIpv6Bandwidth',
            'publicipIds' => 'setPublicipIds',
            'publicip' => 'setPublicip',
            'elbVirsubnetIds' => 'setElbVirsubnetIds',
            'ipTargetEnable' => 'setIpTargetEnable',
            'deletionProtectionEnable' => 'setDeletionProtectionEnable',
            'prepaidOptions' => 'setPrepaidOptions',
            'autoscaling' => 'setAutoscaling',
            'wafFailureAction' => 'setWafFailureAction',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'chargeMode' => 'setChargeMode',
            'ipv6VipAddress' => 'setIpv6VipAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  参数解释：负载均衡器实例所在的项目ID。
    * name  参数解释：负载均衡器的名称。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * description  参数解释：负载均衡器的描述。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    * vipAddress  参数解释：负载均衡器的IPv4私网IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  约束限制： - 传入vip_address时，必须传入vip_subnet_cidr_id。 - 不传入vip_address，但传入vip_subnet_cidr_id，则自动分配IPv4私网IP。 - 不传入vip_address，且不传vip_subnet_cidr_id，则不分配IPv4私网IP，vip_address=null。 [- 网关型LB不支持传入vip_address。](tag:hws_eu)  取值范围：满足IPv4的地址格式，[0-255].[0-255].[0-255].[0-255]. 如192.168.1.1。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv4私网IP的负载均衡实例，则字段必须传入。可以通过调用VPC的API, GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。 - vpc_id, vip_subnet_cidr_id, ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 若同时传入vpc_id和vip_subnet_cidr_id，则vip_subnet_cidr_id对应的子网必须属于vpc_id对应的VPC。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv6 IP的负载均衡实例，则字段必须传入。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 需要对应的子网开启IPv6。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb，无需指定。
    * l4FlavorId  参数解释：网络型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor（默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * l7FlavorId  参数解释：应用型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor （默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    * guaranteed  参数解释：是否为独享型负载均衡器实例。  约束限制：当前只支持设置为true，设置为false会返回400 Bad Request。  取值范围： - true：独享型。 - false：共享型。  默认取值：true。
    * vpcId  参数解释：负载均衡器所在的VPC ID。  约束限制: - 参数获取，可以通过 GET https://{VPC_Endpoint}/v1/{project_id}/vpcs 响应参数中的id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。  取值范围： 标准的UUID格式，长度为36个字符。
    * availabilityZoneList  参数解释：负载均衡器实例所在的可用区列表。  约束限制： - 可通过GET https://{ELB_Endponit}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。  >为了支持可用区容灾，建议选取不少于2个可用区。
    * enterpriseProjectId  参数解释：负载均衡器所属的企业项目ID。  约束限制：不能传入\"\"、\"0\"或不存在的企业项目ID，创建时不传则资源属于default企业项目，默认返回\"0\"。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。示例：\"tags\":[{\"key\":\"my_tag\",\"value\":\"my_tag_value\"}]
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  默认取值：true。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * billingInfo  参数解释: 预付费实例的订单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费。 格式为： order_id:product_id:region_id:project_id，如： CS2107161019CDJZZ:OFFI569702121789763584:region-xxx:057ef081eb00d2732fd1c01a9be75e6f   不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * ipv6Bandwidth  ipv6Bandwidth
    * publicipIds  参数解释：负载均衡器绑定的公网IP的ID的数组。  约束限制： - 只支持绑定数组中的第一个EIP，其他将被忽略。 [- 网关型LB不支持该字段。](tag:hws_eu)
    * publicip  publicip
    * elbVirsubnetIds  参数解释：负载均衡器的后端子网的网络ID（OpenStack Neutron接口）列表。负载均衡器实例会预占用该子网中的部分IP， 用于负载均衡器网关与该实例后端服务器通信的源地址（典型场景，健康检查探测的源地址，FULLNAT场景的源地址等）。 使用负载均衡器所在VPC的ID查询可用子网 GET https://{VPC_Endpoint}/v1/{project_id}/subnets?vpc_id=xxxx 获取响应参数中的neutron_network_id字段。  约束限制： - 后端子网必须属于该负载均衡器实例所在的VPC。 - 通常需要用户指定一个特殊的子网，方便用户在后端服务器关联的安全组中，放通该子网的地址段。 - 若指定多个下联面子网，则按顺序优先使用第一个子网来为负载均衡器下联面端口分配ip地址。 - 若不指定该字段，则按如下规则选择下联面网络：   1. 如果ELB实例开启ipv6，则选择ipv6_vip_virsubnet_id子网对应的网络ID。   2. 如果ELB实例没有开启ipv6，开启ipv4，则选择vip_subnet_cidr_id子网对应的网络ID。   3. 如果ELB实例没有选择私网，只开启公网，则会在当前负载均衡器所在的VPC中任意选一个子网，优选可用IP多的网络。  - 后端服务器安全组放通：由于负载均衡器网关会使用该子网中的预占的地址，作为源IP与后端服务器通信（健康检查探测，FULLNAT通信），为避免后端服务器关联的安全组拦截，建议将对应的子网地址段进行安全组放通。 - 预占地址变化：负载均衡实例，弹性扩缩场景，可能涉及到预占地址的变化，建议安全组对子网段放通，而不是具体预占地址的放通。 - 建议后端子网，使用一个独占的地址充足的子网，方便运维管理。
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * deletionProtectionEnable  参数解释：实例删除保护开关。  约束限制：实例删除前，需要先关闭该实例下所有资源的删除保护开关。  取值范围：  - false： 不开启。  - true： 开启。  默认取值：false。
    * prepaidOptions  prepaidOptions
    * autoscaling  autoscaling
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。 [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)  取值范围： - discard:丢弃。 - forward: 转发到后端。  默认取值：forward。
    * protectionStatus  参数解释：修改保护状态。用于console控制台防误修改。console感知该状态为consoleProtection时，不允许用户直接修改资源其他配置属性。  约束限制：不影响通过API修改资源属性。类似资源标记，用于提升控制台等用户易用性场景，如防误修改。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection。
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：通用Unicode字符集字符，最大255个字符。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  约束限制：不建议用户传该字段。系统会基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。  取值范围： - flavor：固定规格计费。 - lcu：弹性规格计费（按用户实际使用的lcu个数计费）。  默认取值： - 若是创建共享型实例，不传默认创建固定规格计费实例。 - 若是创建独享型实例，则系统会忽略改字段，而是基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。
    * ipv6VipAddress  参数解释：负载均衡器实例的IPv6地址。  约束限制：  - 必须属于ipv6_vip_virsubnet_id子网中地址。  - elb_virsubnet_ids中的后端子网必须支持双栈。 [- 网关型LB不支持指定ipv6_vip_address。](tag:hws_eu)  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'description' => 'getDescription',
            'vipAddress' => 'getVipAddress',
            'vipSubnetCidrId' => 'getVipSubnetCidrId',
            'ipv6VipVirsubnetId' => 'getIpv6VipVirsubnetId',
            'provider' => 'getProvider',
            'l4FlavorId' => 'getL4FlavorId',
            'l7FlavorId' => 'getL7FlavorId',
            'guaranteed' => 'getGuaranteed',
            'vpcId' => 'getVpcId',
            'availabilityZoneList' => 'getAvailabilityZoneList',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'adminStateUp' => 'getAdminStateUp',
            'billingInfo' => 'getBillingInfo',
            'ipv6Bandwidth' => 'getIpv6Bandwidth',
            'publicipIds' => 'getPublicipIds',
            'publicip' => 'getPublicip',
            'elbVirsubnetIds' => 'getElbVirsubnetIds',
            'ipTargetEnable' => 'getIpTargetEnable',
            'deletionProtectionEnable' => 'getDeletionProtectionEnable',
            'prepaidOptions' => 'getPrepaidOptions',
            'autoscaling' => 'getAutoscaling',
            'wafFailureAction' => 'getWafFailureAction',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'chargeMode' => 'getChargeMode',
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
    const CHARGE_MODE_FLAVOR = 'flavor';
    const CHARGE_MODE_LCU = 'lcu';
    

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
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_FLAVOR,
            self::CHARGE_MODE_LCU,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['vipSubnetCidrId'] = isset($data['vipSubnetCidrId']) ? $data['vipSubnetCidrId'] : null;
        $this->container['ipv6VipVirsubnetId'] = isset($data['ipv6VipVirsubnetId']) ? $data['ipv6VipVirsubnetId'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['l4FlavorId'] = isset($data['l4FlavorId']) ? $data['l4FlavorId'] : null;
        $this->container['l7FlavorId'] = isset($data['l7FlavorId']) ? $data['l7FlavorId'] : null;
        $this->container['guaranteed'] = isset($data['guaranteed']) ? $data['guaranteed'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['availabilityZoneList'] = isset($data['availabilityZoneList']) ? $data['availabilityZoneList'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['ipv6Bandwidth'] = isset($data['ipv6Bandwidth']) ? $data['ipv6Bandwidth'] : null;
        $this->container['publicipIds'] = isset($data['publicipIds']) ? $data['publicipIds'] : null;
        $this->container['publicip'] = isset($data['publicip']) ? $data['publicip'] : null;
        $this->container['elbVirsubnetIds'] = isset($data['elbVirsubnetIds']) ? $data['elbVirsubnetIds'] : null;
        $this->container['ipTargetEnable'] = isset($data['ipTargetEnable']) ? $data['ipTargetEnable'] : null;
        $this->container['deletionProtectionEnable'] = isset($data['deletionProtectionEnable']) ? $data['deletionProtectionEnable'] : null;
        $this->container['prepaidOptions'] = isset($data['prepaidOptions']) ? $data['prepaidOptions'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['wafFailureAction'] = isset($data['wafFailureAction']) ? $data['wafFailureAction'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
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
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
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
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) > 255)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) < 1)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['l4FlavorId']) && (mb_strlen($this->container['l4FlavorId']) > 36)) {
                $invalidProperties[] = "invalid value for 'l4FlavorId', the character length must be smaller than or equal to 36.";
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
        if ($this->container['availabilityZoneList'] === null) {
            $invalidProperties[] = "'availabilityZoneList' can't be null";
        }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be bigger than or equal to 1.";
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
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 255)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 1.";
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
    *  参数解释：负载均衡器实例所在的项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 参数解释：负载均衡器实例所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  参数解释：负载均衡器的名称。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
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
    * @param string|null $name 参数解释：负载均衡器的名称。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
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
    *  参数解释：负载均衡器的描述。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
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
    * @param string|null $description 参数解释：负载均衡器的描述。  约束限制： 可以为空, 最大长度为255个字符。  取值范围：支持中文字符、英文字符等unicode字符，且长度为[0-255]个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vipAddress
    *  参数解释：负载均衡器的IPv4私网IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  约束限制： - 传入vip_address时，必须传入vip_subnet_cidr_id。 - 不传入vip_address，但传入vip_subnet_cidr_id，则自动分配IPv4私网IP。 - 不传入vip_address，且不传vip_subnet_cidr_id，则不分配IPv4私网IP，vip_address=null。 [- 网关型LB不支持传入vip_address。](tag:hws_eu)  取值范围：满足IPv4的地址格式，[0-255].[0-255].[0-255].[0-255]. 如192.168.1.1。
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
    * @param string|null $vipAddress 参数解释：负载均衡器的IPv4私网IP。该地址必须包含在所在子网的IPv4网段内，且未被占用。  约束限制： - 传入vip_address时，必须传入vip_subnet_cidr_id。 - 不传入vip_address，但传入vip_subnet_cidr_id，则自动分配IPv4私网IP。 - 不传入vip_address，且不传vip_subnet_cidr_id，则不分配IPv4私网IP，vip_address=null。 [- 网关型LB不支持传入vip_address。](tag:hws_eu)  取值范围：满足IPv4的地址格式，[0-255].[0-255].[0-255].[0-255]. 如192.168.1.1。
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
    *  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv4私网IP的负载均衡实例，则字段必须传入。可以通过调用VPC的API, GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。 - vpc_id, vip_subnet_cidr_id, ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 若同时传入vpc_id和vip_subnet_cidr_id，则vip_subnet_cidr_id对应的子网必须属于vpc_id对应的VPC。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。
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
    * @param string|null $vipSubnetCidrId 参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv4私网IP的负载均衡实例，则字段必须传入。可以通过调用VPC的API, GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_subnet_id得到。 - vpc_id, vip_subnet_cidr_id, ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 若同时传入vpc_id和vip_subnet_cidr_id，则vip_subnet_cidr_id对应的子网必须属于vpc_id对应的VPC。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。
    *
    * @return $this
    */
    public function setVipSubnetCidrId($vipSubnetCidrId)
    {
        $this->container['vipSubnetCidrId'] = $vipSubnetCidrId;
        return $this;
    }

    /**
    * Gets ipv6VipVirsubnetId
    *  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv6 IP的负载均衡实例，则字段必须传入。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 需要对应的子网开启IPv6。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    * @param string|null $ipv6VipVirsubnetId 参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  约束限制： - 若创建带有IPv6 IP的负载均衡实例，则字段必须传入。可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。 - 需要对应的子网开启IPv6。 [- 创建网关型LB，vip_subnet_cidr_id和ipv6_vip_virsubnet_id不能同时为空。若都传入则必须是同一个子网的IPv4子网ID和IPv6网络ID。](tag:hws_eu)  取值范围： 标准的UUID格式，长度为36个字符。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setIpv6VipVirsubnetId($ipv6VipVirsubnetId)
    {
        $this->container['ipv6VipVirsubnetId'] = $ipv6VipVirsubnetId;
        return $this;
    }

    /**
    * Gets provider
    *  参数解释：负载均衡器的生产者名称。固定为vlb，无需指定。
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 参数解释：负载均衡器的生产者名称。固定为vlb，无需指定。
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets l4FlavorId
    *  参数解释：网络型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor（默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
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
    * @param string|null $l4FlavorId 参数解释：网络型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L4 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor（默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l4_flavor_id。](tag:hws_eu) [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
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
    *  参数解释：应用型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor （默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
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
    * @param string|null $l7FlavorId 参数解释：应用型规格ID。  约束限制： [- 可以通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/flavors?type=L7 响应参数中的id得到。 - 当l4_flavor_id和l7_flavor_id都不传的时，会使用默认flavor （默认flavor根据不同局点有所不同，具体以实际值为准）。 - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费。 - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费。](tag:hws,hws_hk,hws_eu,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb)   [网关型LB不支持指定l7_flavor_id。](tag:hws_eu) [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt) [所有LB实例共享带宽，该字段无效，请勿使用。](tag:hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)  取值范围： 标准的UUID格式，长度为36个字符。
    *
    * @return $this
    */
    public function setL7FlavorId($l7FlavorId)
    {
        $this->container['l7FlavorId'] = $l7FlavorId;
        return $this;
    }

    /**
    * Gets guaranteed
    *  参数解释：是否为独享型负载均衡器实例。  约束限制：当前只支持设置为true，设置为false会返回400 Bad Request。  取值范围： - true：独享型。 - false：共享型。  默认取值：true。
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
    * @param bool|null $guaranteed 参数解释：是否为独享型负载均衡器实例。  约束限制：当前只支持设置为true，设置为false会返回400 Bad Request。  取值范围： - true：独享型。 - false：共享型。  默认取值：true。
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
    *  参数解释：负载均衡器所在的VPC ID。  约束限制: - 参数获取，可以通过 GET https://{VPC_Endpoint}/v1/{project_id}/vpcs 响应参数中的id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。  取值范围： 标准的UUID格式，长度为36个字符。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 参数解释：负载均衡器所在的VPC ID。  约束限制: - 参数获取，可以通过 GET https://{VPC_Endpoint}/v1/{project_id}/vpcs 响应参数中的id得到。 - vpc_id，vip_subnet_cidr_id，ipv6_vip_virsubnet_id不能同时为空，且需要在同一个vpc下。  取值范围： 标准的UUID格式，长度为36个字符。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets availabilityZoneList
    *  参数解释：负载均衡器实例所在的可用区列表。  约束限制： - 可通过GET https://{ELB_Endponit}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。  >为了支持可用区容灾，建议选取不少于2个可用区。
    *
    * @return string[]
    */
    public function getAvailabilityZoneList()
    {
        return $this->container['availabilityZoneList'];
    }

    /**
    * Sets availabilityZoneList
    *
    * @param string[] $availabilityZoneList 参数解释：负载均衡器实例所在的可用区列表。  约束限制： - 可通过GET https://{ELB_Endponit}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。  >为了支持可用区容灾，建议选取不少于2个可用区。
    *
    * @return $this
    */
    public function setAvailabilityZoneList($availabilityZoneList)
    {
        $this->container['availabilityZoneList'] = $availabilityZoneList;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  参数解释：负载均衡器所属的企业项目ID。  约束限制：不能传入\"\"、\"0\"或不存在的企业项目ID，创建时不传则资源属于default企业项目，默认返回\"0\"。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    * @param string|null $enterpriseProjectId 参数解释：负载均衡器所属的企业项目ID。  约束限制：不能传入\"\"、\"0\"或不存在的企业项目ID，创建时不传则资源属于default企业项目，默认返回\"0\"。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  参数解释：负载均衡的标签列表。示例：\"tags\":[{\"key\":\"my_tag\",\"value\":\"my_tag_value\"}]
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\Tag[]|null $tags 参数解释：负载均衡的标签列表。示例：\"tags\":[{\"key\":\"my_tag\",\"value\":\"my_tag_value\"}]
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  默认取值：true。  [不支持该字段，请勿使用。](tag:dt,dt_test)
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
    * @param bool|null $adminStateUp 参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  默认取值：true。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets billingInfo
    *  参数解释: 预付费实例的订单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费。 格式为： order_id:product_id:region_id:project_id，如： CS2107161019CDJZZ:OFFI569702121789763584:region-xxx:057ef081eb00d2732fd1c01a9be75e6f   不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return string|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string|null $billingInfo 参数解释: 预付费实例的订单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费。 格式为： order_id:product_id:region_id:project_id，如： CS2107161019CDJZZ:OFFI569702121789763584:region-xxx:057ef081eb00d2732fd1c01a9be75e6f   不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
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
    * Gets publicipIds
    *  参数解释：负载均衡器绑定的公网IP的ID的数组。  约束限制： - 只支持绑定数组中的第一个EIP，其他将被忽略。 [- 网关型LB不支持该字段。](tag:hws_eu)
    *
    * @return string[]|null
    */
    public function getPublicipIds()
    {
        return $this->container['publicipIds'];
    }

    /**
    * Sets publicipIds
    *
    * @param string[]|null $publicipIds 参数解释：负载均衡器绑定的公网IP的ID的数组。  约束限制： - 只支持绑定数组中的第一个EIP，其他将被忽略。 [- 网关型LB不支持该字段。](tag:hws_eu)
    *
    * @return $this
    */
    public function setPublicipIds($publicipIds)
    {
        $this->container['publicipIds'] = $publicipIds;
        return $this;
    }

    /**
    * Gets publicip
    *  publicip
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerPublicIpOption|null
    */
    public function getPublicip()
    {
        return $this->container['publicip'];
    }

    /**
    * Sets publicip
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerPublicIpOption|null $publicip publicip
    *
    * @return $this
    */
    public function setPublicip($publicip)
    {
        $this->container['publicip'] = $publicip;
        return $this;
    }

    /**
    * Gets elbVirsubnetIds
    *  参数解释：负载均衡器的后端子网的网络ID（OpenStack Neutron接口）列表。负载均衡器实例会预占用该子网中的部分IP， 用于负载均衡器网关与该实例后端服务器通信的源地址（典型场景，健康检查探测的源地址，FULLNAT场景的源地址等）。 使用负载均衡器所在VPC的ID查询可用子网 GET https://{VPC_Endpoint}/v1/{project_id}/subnets?vpc_id=xxxx 获取响应参数中的neutron_network_id字段。  约束限制： - 后端子网必须属于该负载均衡器实例所在的VPC。 - 通常需要用户指定一个特殊的子网，方便用户在后端服务器关联的安全组中，放通该子网的地址段。 - 若指定多个下联面子网，则按顺序优先使用第一个子网来为负载均衡器下联面端口分配ip地址。 - 若不指定该字段，则按如下规则选择下联面网络：   1. 如果ELB实例开启ipv6，则选择ipv6_vip_virsubnet_id子网对应的网络ID。   2. 如果ELB实例没有开启ipv6，开启ipv4，则选择vip_subnet_cidr_id子网对应的网络ID。   3. 如果ELB实例没有选择私网，只开启公网，则会在当前负载均衡器所在的VPC中任意选一个子网，优选可用IP多的网络。  - 后端服务器安全组放通：由于负载均衡器网关会使用该子网中的预占的地址，作为源IP与后端服务器通信（健康检查探测，FULLNAT通信），为避免后端服务器关联的安全组拦截，建议将对应的子网地址段进行安全组放通。 - 预占地址变化：负载均衡实例，弹性扩缩场景，可能涉及到预占地址的变化，建议安全组对子网段放通，而不是具体预占地址的放通。 - 建议后端子网，使用一个独占的地址充足的子网，方便运维管理。
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
    * @param string[]|null $elbVirsubnetIds 参数解释：负载均衡器的后端子网的网络ID（OpenStack Neutron接口）列表。负载均衡器实例会预占用该子网中的部分IP， 用于负载均衡器网关与该实例后端服务器通信的源地址（典型场景，健康检查探测的源地址，FULLNAT场景的源地址等）。 使用负载均衡器所在VPC的ID查询可用子网 GET https://{VPC_Endpoint}/v1/{project_id}/subnets?vpc_id=xxxx 获取响应参数中的neutron_network_id字段。  约束限制： - 后端子网必须属于该负载均衡器实例所在的VPC。 - 通常需要用户指定一个特殊的子网，方便用户在后端服务器关联的安全组中，放通该子网的地址段。 - 若指定多个下联面子网，则按顺序优先使用第一个子网来为负载均衡器下联面端口分配ip地址。 - 若不指定该字段，则按如下规则选择下联面网络：   1. 如果ELB实例开启ipv6，则选择ipv6_vip_virsubnet_id子网对应的网络ID。   2. 如果ELB实例没有开启ipv6，开启ipv4，则选择vip_subnet_cidr_id子网对应的网络ID。   3. 如果ELB实例没有选择私网，只开启公网，则会在当前负载均衡器所在的VPC中任意选一个子网，优选可用IP多的网络。  - 后端服务器安全组放通：由于负载均衡器网关会使用该子网中的预占的地址，作为源IP与后端服务器通信（健康检查探测，FULLNAT通信），为避免后端服务器关联的安全组拦截，建议将对应的子网地址段进行安全组放通。 - 预占地址变化：负载均衡实例，弹性扩缩场景，可能涉及到预占地址的变化，建议安全组对子网段放通，而不是具体预占地址的放通。 - 建议后端子网，使用一个独占的地址充足的子网，方便运维管理。
    *
    * @return $this
    */
    public function setElbVirsubnetIds($elbVirsubnetIds)
    {
        $this->container['elbVirsubnetIds'] = $elbVirsubnetIds;
        return $this;
    }

    /**
    * Gets ipTargetEnable
    *  参数解释：是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    * @param bool|null $ipTargetEnable 参数解释：是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpTargetEnable($ipTargetEnable)
    {
        $this->container['ipTargetEnable'] = $ipTargetEnable;
        return $this;
    }

    /**
    * Gets deletionProtectionEnable
    *  参数解释：实例删除保护开关。  约束限制：实例删除前，需要先关闭该实例下所有资源的删除保护开关。  取值范围：  - false： 不开启。  - true： 开启。  默认取值：false。
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
    * @param bool|null $deletionProtectionEnable 参数解释：实例删除保护开关。  约束限制：实例删除前，需要先关闭该实例下所有资源的删除保护开关。  取值范围：  - false： 不开启。  - true： 开启。  默认取值：false。
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
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PrepaidCreateOption|null
    */
    public function getPrepaidOptions()
    {
        return $this->container['prepaidOptions'];
    }

    /**
    * Sets prepaidOptions
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PrepaidCreateOption|null $prepaidOptions prepaidOptions
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
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateLoadbalancerAutoscalingOption|null
    */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
    * Sets autoscaling
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateLoadbalancerAutoscalingOption|null $autoscaling autoscaling
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
    *  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。 [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)  取值范围： - discard:丢弃。 - forward: 转发到后端。  默认取值：forward。
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
    * @param string|null $wafFailureAction 参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。 [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)  取值范围： - discard:丢弃。 - forward: 转发到后端。  默认取值：forward。
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
    *  参数解释：修改保护状态。用于console控制台防误修改。console感知该状态为consoleProtection时，不允许用户直接修改资源其他配置属性。  约束限制：不影响通过API修改资源属性。类似资源标记，用于提升控制台等用户易用性场景，如防误修改。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection。
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
    * @param string|null $protectionStatus 参数解释：修改保护状态。用于console控制台防误修改。console感知该状态为consoleProtection时，不允许用户直接修改资源其他配置属性。  约束限制：不影响通过API修改资源属性。类似资源标记，用于提升控制台等用户易用性场景，如防误修改。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection。
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
    *  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：通用Unicode字符集字符，最大255个字符。
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
    * @param string|null $protectionReason 参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：通用Unicode字符集字符，最大255个字符。
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
        return $this;
    }

    /**
    * Gets chargeMode
    *  参数解释：负载均衡器实例的计费模式。  约束限制：不建议用户传该字段。系统会基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。  取值范围： - flavor：固定规格计费。 - lcu：弹性规格计费（按用户实际使用的lcu个数计费）。  默认取值： - 若是创建共享型实例，不传默认创建固定规格计费实例。 - 若是创建独享型实例，则系统会忽略改字段，而是基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。
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
    * @param string|null $chargeMode 参数解释：负载均衡器实例的计费模式。  约束限制：不建议用户传该字段。系统会基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。  取值范围： - flavor：固定规格计费。 - lcu：弹性规格计费（按用户实际使用的lcu个数计费）。  默认取值： - 若是创建共享型实例，不传默认创建固定规格计费实例。 - 若是创建独享型实例，则系统会忽略改字段，而是基于用户传入的l4_flavor_id/l7_flavor_id的规格类型，自动识别计费模式。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  参数解释：负载均衡器实例的IPv6地址。  约束限制：  - 必须属于ipv6_vip_virsubnet_id子网中地址。  - elb_virsubnet_ids中的后端子网必须支持双栈。 [- 网关型LB不支持指定ipv6_vip_address。](tag:hws_eu)  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    * @param string|null $ipv6VipAddress 参数解释：负载均衡器实例的IPv6地址。  约束限制：  - 必须属于ipv6_vip_virsubnet_id子网中地址。  - elb_virsubnet_ids中的后端子网必须支持双栈。 [- 网关型LB不支持指定ipv6_vip_address。](tag:hws_eu)  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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

