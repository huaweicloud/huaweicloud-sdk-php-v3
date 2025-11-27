<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：负载均衡器ID。  **取值范围**：不涉及
    * description  **参数解释**：负载均衡器描述信息。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：负载均衡器的配置状态。  **取值范围**： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  **参数解释**：负载均衡器的启用状态。  **取值范围**： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * provider  **参数解释**：负载均衡器的生产者名称。固定为vlb。  **取值范围**：不涉及
    * pools  **参数解释**：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  **参数解释**：负载均衡器关联的监听器的ID列表。
    * operatingStatus  **参数解释**：负载均衡器的操作状态。  **取值范围**： - ONLINE：在线。 - FROZEN：已冻结。
    * name  **参数解释**：负载均衡器的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：负载均衡器所属的项目ID。  **取值范围**：不涉及
    * vipSubnetCidrId  **参数解释**：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及
    * vipAddress  **参数解释**：负载均衡器的IPv4私网IP地址。  **取值范围**：不涉及
    * vipPortId  **参数解释**：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,hcso_dt)  **取值范围**：不涉及
    * tags  **参数解释**：负载均衡的标签列表。
    * createdAt  **参数解释**：负载均衡器的创建时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  **参数解释**：负载均衡器的更新时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * vpcId  **参数解释**：负载均衡器所在VPC ID。  **取值范围**：不涉及
    * eips  **参数解释**：负载均衡器绑定的EIP。  > 该字段与publicips一致。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipVirsubnetId  **参数解释**：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipPortId  **参数解释**：双栈类型负载均衡器的IPv6对应的port ID。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * billingInfo  **参数解释**：资源账单信息。  **取值范围**： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  **参数解释**：负载均衡器4层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示4层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,fcs)
    * l4ScaleFlavorId  **参数解释**：四层弹性规格ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * l7FlavorId  **参数解释**：负载均衡器7层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示7层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  **参数解释**：七层弹性Flavor ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * gwFlavorId  **参数解释**：网关型负载均衡器的规格ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * loadbalancerType  **参数解释**：负载均衡器类别。  **取值范围**： - gateway 表示网关类型负载均衡器。 - null 表示其他非网关类型负载均衡器。  不支持该字段，请勿使用。
    * publicips  **参数解释**：负载均衡器绑定的公网IP。  > 该字段与eips一致。
    * globalEips  **参数解释**：负载均衡器绑定的global eip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  **参数解释**：下联面子网的网络ID列表。  **取值范围**：不涉及
    * elbVirsubnetType  **参数解释**：下联面子网类型。  **取值范围**： - ipv4：仅支持IPv4 - dualstack：双栈，同时支持IPv4和IPv6。
    * ipTargetEnable  **参数解释**：是否启用IP类型后端转发。 [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、云下数据中心的服务器。](tag:srg,fcs)  **取值范围**： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * frozenScene  **参数解释**：负载均衡器的冻结场景。 若负载均衡器有多个冻结场景，用逗号分隔。  **取值范围**： [- POLICE：公安冻结场景。](tag:hws) - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,ocb,hws_ocb)
    * deletionProtectionEnable  **参数解释**：是否开启删除保护。仅当前局点启用删除保护特性后才会返回该字段。  **取值范围**： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * autoscaling  autoscaling
    * publicBorderGroup  **参数解释**：公网边界组。  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * chargeMode  **参数解释**：负载均衡器实例的计费模式。  **取值范围**： - flavor：按规格计费。 - lcu：按使用量计费。 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * serviceLbMode  **参数解释**：LB模式。  **取值范围**： - lb：默认模式，不支持跨租户访问。 - ep：ep模式，LB支持跨租户访问。  不支持该字段，请勿使用。
    * instanceType  **参数解释**：标识实例归属哪个内部服务。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * instanceId  **参数解释**：标识实例绑定内部服务的实例ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * proxyProtocolExtensions  **参数解释**：pp扩展。  不支持该字段，请勿使用。
    * wafFailureAction  **参数解释**：WAF故障时的流量处理策略。  **取值范围**：discard:丢弃，forward: 转发到后端。  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**： - nonProtection：不保护。 - consoleProtection：控制台修改保护。
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  **参数解释**：LB所关联的云日志服务（LTS）的日志组ID。  **取值范围**：不涉及
    * logTopicId  **参数解释**：LB所关联的云日志服务（LTS）的日志组下的日志流ID。  **取值范围**：不涉及
    * customQosLimit  customQosLimit
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'provisioningStatus' => 'string',
            'adminStateUp' => 'bool',
            'provider' => 'string',
            'pools' => '\HuaweiCloud\SDK\Elb\V3\Model\PoolRef[]',
            'listeners' => '\HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]',
            'operatingStatus' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'vipSubnetCidrId' => 'string',
            'vipAddress' => 'string',
            'vipPortId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Elb\V3\Model\Tag[]',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'guaranteed' => 'bool',
            'vpcId' => 'string',
            'eips' => '\HuaweiCloud\SDK\Elb\V3\Model\EipInfo[]',
            'ipv6VipAddress' => 'string',
            'ipv6VipVirsubnetId' => 'string',
            'ipv6VipPortId' => 'string',
            'availabilityZoneList' => 'string[]',
            'enterpriseProjectId' => 'string',
            'billingInfo' => 'string',
            'l4FlavorId' => 'string',
            'l4ScaleFlavorId' => 'string',
            'l7FlavorId' => 'string',
            'l7ScaleFlavorId' => 'string',
            'gwFlavorId' => 'string',
            'loadbalancerType' => 'string',
            'publicips' => '\HuaweiCloud\SDK\Elb\V3\Model\PublicIpInfo[]',
            'globalEips' => '\HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[]',
            'elbVirsubnetIds' => 'string[]',
            'elbVirsubnetType' => 'string',
            'ipTargetEnable' => 'bool',
            'frozenScene' => 'string',
            'deletionProtectionEnable' => 'bool',
            'autoscaling' => '\HuaweiCloud\SDK\Elb\V3\Model\AutoscalingRef',
            'publicBorderGroup' => 'string',
            'chargeMode' => 'string',
            'serviceLbMode' => 'string',
            'instanceType' => 'string',
            'instanceId' => 'string',
            'proxyProtocolExtensions' => '\HuaweiCloud\SDK\Elb\V3\Model\ProxyProtocolExtension[]',
            'wafFailureAction' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'logGroupId' => 'string',
            'logTopicId' => 'string',
            'customQosLimit' => '\HuaweiCloud\SDK\Elb\V3\Model\CustomQosLimit'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：负载均衡器ID。  **取值范围**：不涉及
    * description  **参数解释**：负载均衡器描述信息。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：负载均衡器的配置状态。  **取值范围**： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  **参数解释**：负载均衡器的启用状态。  **取值范围**： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * provider  **参数解释**：负载均衡器的生产者名称。固定为vlb。  **取值范围**：不涉及
    * pools  **参数解释**：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  **参数解释**：负载均衡器关联的监听器的ID列表。
    * operatingStatus  **参数解释**：负载均衡器的操作状态。  **取值范围**： - ONLINE：在线。 - FROZEN：已冻结。
    * name  **参数解释**：负载均衡器的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：负载均衡器所属的项目ID。  **取值范围**：不涉及
    * vipSubnetCidrId  **参数解释**：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及
    * vipAddress  **参数解释**：负载均衡器的IPv4私网IP地址。  **取值范围**：不涉及
    * vipPortId  **参数解释**：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,hcso_dt)  **取值范围**：不涉及
    * tags  **参数解释**：负载均衡的标签列表。
    * createdAt  **参数解释**：负载均衡器的创建时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  **参数解释**：负载均衡器的更新时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * vpcId  **参数解释**：负载均衡器所在VPC ID。  **取值范围**：不涉及
    * eips  **参数解释**：负载均衡器绑定的EIP。  > 该字段与publicips一致。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipVirsubnetId  **参数解释**：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipPortId  **参数解释**：双栈类型负载均衡器的IPv6对应的port ID。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * billingInfo  **参数解释**：资源账单信息。  **取值范围**： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  **参数解释**：负载均衡器4层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示4层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,fcs)
    * l4ScaleFlavorId  **参数解释**：四层弹性规格ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * l7FlavorId  **参数解释**：负载均衡器7层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示7层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  **参数解释**：七层弹性Flavor ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * gwFlavorId  **参数解释**：网关型负载均衡器的规格ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * loadbalancerType  **参数解释**：负载均衡器类别。  **取值范围**： - gateway 表示网关类型负载均衡器。 - null 表示其他非网关类型负载均衡器。  不支持该字段，请勿使用。
    * publicips  **参数解释**：负载均衡器绑定的公网IP。  > 该字段与eips一致。
    * globalEips  **参数解释**：负载均衡器绑定的global eip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  **参数解释**：下联面子网的网络ID列表。  **取值范围**：不涉及
    * elbVirsubnetType  **参数解释**：下联面子网类型。  **取值范围**： - ipv4：仅支持IPv4 - dualstack：双栈，同时支持IPv4和IPv6。
    * ipTargetEnable  **参数解释**：是否启用IP类型后端转发。 [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、云下数据中心的服务器。](tag:srg,fcs)  **取值范围**： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * frozenScene  **参数解释**：负载均衡器的冻结场景。 若负载均衡器有多个冻结场景，用逗号分隔。  **取值范围**： [- POLICE：公安冻结场景。](tag:hws) - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,ocb,hws_ocb)
    * deletionProtectionEnable  **参数解释**：是否开启删除保护。仅当前局点启用删除保护特性后才会返回该字段。  **取值范围**： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * autoscaling  autoscaling
    * publicBorderGroup  **参数解释**：公网边界组。  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * chargeMode  **参数解释**：负载均衡器实例的计费模式。  **取值范围**： - flavor：按规格计费。 - lcu：按使用量计费。 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * serviceLbMode  **参数解释**：LB模式。  **取值范围**： - lb：默认模式，不支持跨租户访问。 - ep：ep模式，LB支持跨租户访问。  不支持该字段，请勿使用。
    * instanceType  **参数解释**：标识实例归属哪个内部服务。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * instanceId  **参数解释**：标识实例绑定内部服务的实例ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * proxyProtocolExtensions  **参数解释**：pp扩展。  不支持该字段，请勿使用。
    * wafFailureAction  **参数解释**：WAF故障时的流量处理策略。  **取值范围**：discard:丢弃，forward: 转发到后端。  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**： - nonProtection：不保护。 - consoleProtection：控制台修改保护。
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  **参数解释**：LB所关联的云日志服务（LTS）的日志组ID。  **取值范围**：不涉及
    * logTopicId  **参数解释**：LB所关联的云日志服务（LTS）的日志组下的日志流ID。  **取值范围**：不涉及
    * customQosLimit  customQosLimit
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'provisioningStatus' => null,
        'adminStateUp' => null,
        'provider' => null,
        'pools' => null,
        'listeners' => null,
        'operatingStatus' => null,
        'name' => null,
        'projectId' => null,
        'vipSubnetCidrId' => null,
        'vipAddress' => null,
        'vipPortId' => null,
        'tags' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'guaranteed' => null,
        'vpcId' => null,
        'eips' => null,
        'ipv6VipAddress' => null,
        'ipv6VipVirsubnetId' => null,
        'ipv6VipPortId' => null,
        'availabilityZoneList' => null,
        'enterpriseProjectId' => null,
        'billingInfo' => null,
        'l4FlavorId' => null,
        'l4ScaleFlavorId' => null,
        'l7FlavorId' => null,
        'l7ScaleFlavorId' => null,
        'gwFlavorId' => null,
        'loadbalancerType' => null,
        'publicips' => null,
        'globalEips' => null,
        'elbVirsubnetIds' => null,
        'elbVirsubnetType' => null,
        'ipTargetEnable' => null,
        'frozenScene' => null,
        'deletionProtectionEnable' => null,
        'autoscaling' => null,
        'publicBorderGroup' => null,
        'chargeMode' => null,
        'serviceLbMode' => null,
        'instanceType' => null,
        'instanceId' => null,
        'proxyProtocolExtensions' => null,
        'wafFailureAction' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'logGroupId' => null,
        'logTopicId' => null,
        'customQosLimit' => null
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
    * id  **参数解释**：负载均衡器ID。  **取值范围**：不涉及
    * description  **参数解释**：负载均衡器描述信息。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：负载均衡器的配置状态。  **取值范围**： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  **参数解释**：负载均衡器的启用状态。  **取值范围**： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * provider  **参数解释**：负载均衡器的生产者名称。固定为vlb。  **取值范围**：不涉及
    * pools  **参数解释**：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  **参数解释**：负载均衡器关联的监听器的ID列表。
    * operatingStatus  **参数解释**：负载均衡器的操作状态。  **取值范围**： - ONLINE：在线。 - FROZEN：已冻结。
    * name  **参数解释**：负载均衡器的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：负载均衡器所属的项目ID。  **取值范围**：不涉及
    * vipSubnetCidrId  **参数解释**：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及
    * vipAddress  **参数解释**：负载均衡器的IPv4私网IP地址。  **取值范围**：不涉及
    * vipPortId  **参数解释**：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,hcso_dt)  **取值范围**：不涉及
    * tags  **参数解释**：负载均衡的标签列表。
    * createdAt  **参数解释**：负载均衡器的创建时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  **参数解释**：负载均衡器的更新时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * vpcId  **参数解释**：负载均衡器所在VPC ID。  **取值范围**：不涉及
    * eips  **参数解释**：负载均衡器绑定的EIP。  > 该字段与publicips一致。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipVirsubnetId  **参数解释**：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipPortId  **参数解释**：双栈类型负载均衡器的IPv6对应的port ID。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * billingInfo  **参数解释**：资源账单信息。  **取值范围**： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  **参数解释**：负载均衡器4层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示4层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,fcs)
    * l4ScaleFlavorId  **参数解释**：四层弹性规格ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * l7FlavorId  **参数解释**：负载均衡器7层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示7层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  **参数解释**：七层弹性Flavor ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * gwFlavorId  **参数解释**：网关型负载均衡器的规格ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * loadbalancerType  **参数解释**：负载均衡器类别。  **取值范围**： - gateway 表示网关类型负载均衡器。 - null 表示其他非网关类型负载均衡器。  不支持该字段，请勿使用。
    * publicips  **参数解释**：负载均衡器绑定的公网IP。  > 该字段与eips一致。
    * globalEips  **参数解释**：负载均衡器绑定的global eip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  **参数解释**：下联面子网的网络ID列表。  **取值范围**：不涉及
    * elbVirsubnetType  **参数解释**：下联面子网类型。  **取值范围**： - ipv4：仅支持IPv4 - dualstack：双栈，同时支持IPv4和IPv6。
    * ipTargetEnable  **参数解释**：是否启用IP类型后端转发。 [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、云下数据中心的服务器。](tag:srg,fcs)  **取值范围**： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * frozenScene  **参数解释**：负载均衡器的冻结场景。 若负载均衡器有多个冻结场景，用逗号分隔。  **取值范围**： [- POLICE：公安冻结场景。](tag:hws) - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,ocb,hws_ocb)
    * deletionProtectionEnable  **参数解释**：是否开启删除保护。仅当前局点启用删除保护特性后才会返回该字段。  **取值范围**： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * autoscaling  autoscaling
    * publicBorderGroup  **参数解释**：公网边界组。  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * chargeMode  **参数解释**：负载均衡器实例的计费模式。  **取值范围**： - flavor：按规格计费。 - lcu：按使用量计费。 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * serviceLbMode  **参数解释**：LB模式。  **取值范围**： - lb：默认模式，不支持跨租户访问。 - ep：ep模式，LB支持跨租户访问。  不支持该字段，请勿使用。
    * instanceType  **参数解释**：标识实例归属哪个内部服务。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * instanceId  **参数解释**：标识实例绑定内部服务的实例ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * proxyProtocolExtensions  **参数解释**：pp扩展。  不支持该字段，请勿使用。
    * wafFailureAction  **参数解释**：WAF故障时的流量处理策略。  **取值范围**：discard:丢弃，forward: 转发到后端。  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**： - nonProtection：不保护。 - consoleProtection：控制台修改保护。
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  **参数解释**：LB所关联的云日志服务（LTS）的日志组ID。  **取值范围**：不涉及
    * logTopicId  **参数解释**：LB所关联的云日志服务（LTS）的日志组下的日志流ID。  **取值范围**：不涉及
    * customQosLimit  customQosLimit
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'provisioningStatus' => 'provisioning_status',
            'adminStateUp' => 'admin_state_up',
            'provider' => 'provider',
            'pools' => 'pools',
            'listeners' => 'listeners',
            'operatingStatus' => 'operating_status',
            'name' => 'name',
            'projectId' => 'project_id',
            'vipSubnetCidrId' => 'vip_subnet_cidr_id',
            'vipAddress' => 'vip_address',
            'vipPortId' => 'vip_port_id',
            'tags' => 'tags',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'guaranteed' => 'guaranteed',
            'vpcId' => 'vpc_id',
            'eips' => 'eips',
            'ipv6VipAddress' => 'ipv6_vip_address',
            'ipv6VipVirsubnetId' => 'ipv6_vip_virsubnet_id',
            'ipv6VipPortId' => 'ipv6_vip_port_id',
            'availabilityZoneList' => 'availability_zone_list',
            'enterpriseProjectId' => 'enterprise_project_id',
            'billingInfo' => 'billing_info',
            'l4FlavorId' => 'l4_flavor_id',
            'l4ScaleFlavorId' => 'l4_scale_flavor_id',
            'l7FlavorId' => 'l7_flavor_id',
            'l7ScaleFlavorId' => 'l7_scale_flavor_id',
            'gwFlavorId' => 'gw_flavor_id',
            'loadbalancerType' => 'loadbalancer_type',
            'publicips' => 'publicips',
            'globalEips' => 'global_eips',
            'elbVirsubnetIds' => 'elb_virsubnet_ids',
            'elbVirsubnetType' => 'elb_virsubnet_type',
            'ipTargetEnable' => 'ip_target_enable',
            'frozenScene' => 'frozen_scene',
            'deletionProtectionEnable' => 'deletion_protection_enable',
            'autoscaling' => 'autoscaling',
            'publicBorderGroup' => 'public_border_group',
            'chargeMode' => 'charge_mode',
            'serviceLbMode' => 'service_lb_mode',
            'instanceType' => 'instance_type',
            'instanceId' => 'instance_id',
            'proxyProtocolExtensions' => 'proxy_protocol_extensions',
            'wafFailureAction' => 'waf_failure_action',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'logGroupId' => 'log_group_id',
            'logTopicId' => 'log_topic_id',
            'customQosLimit' => 'custom_qos_limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：负载均衡器ID。  **取值范围**：不涉及
    * description  **参数解释**：负载均衡器描述信息。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：负载均衡器的配置状态。  **取值范围**： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  **参数解释**：负载均衡器的启用状态。  **取值范围**： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * provider  **参数解释**：负载均衡器的生产者名称。固定为vlb。  **取值范围**：不涉及
    * pools  **参数解释**：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  **参数解释**：负载均衡器关联的监听器的ID列表。
    * operatingStatus  **参数解释**：负载均衡器的操作状态。  **取值范围**： - ONLINE：在线。 - FROZEN：已冻结。
    * name  **参数解释**：负载均衡器的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：负载均衡器所属的项目ID。  **取值范围**：不涉及
    * vipSubnetCidrId  **参数解释**：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及
    * vipAddress  **参数解释**：负载均衡器的IPv4私网IP地址。  **取值范围**：不涉及
    * vipPortId  **参数解释**：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,hcso_dt)  **取值范围**：不涉及
    * tags  **参数解释**：负载均衡的标签列表。
    * createdAt  **参数解释**：负载均衡器的创建时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  **参数解释**：负载均衡器的更新时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * vpcId  **参数解释**：负载均衡器所在VPC ID。  **取值范围**：不涉及
    * eips  **参数解释**：负载均衡器绑定的EIP。  > 该字段与publicips一致。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipVirsubnetId  **参数解释**：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipPortId  **参数解释**：双栈类型负载均衡器的IPv6对应的port ID。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * billingInfo  **参数解释**：资源账单信息。  **取值范围**： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  **参数解释**：负载均衡器4层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示4层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,fcs)
    * l4ScaleFlavorId  **参数解释**：四层弹性规格ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * l7FlavorId  **参数解释**：负载均衡器7层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示7层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  **参数解释**：七层弹性Flavor ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * gwFlavorId  **参数解释**：网关型负载均衡器的规格ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * loadbalancerType  **参数解释**：负载均衡器类别。  **取值范围**： - gateway 表示网关类型负载均衡器。 - null 表示其他非网关类型负载均衡器。  不支持该字段，请勿使用。
    * publicips  **参数解释**：负载均衡器绑定的公网IP。  > 该字段与eips一致。
    * globalEips  **参数解释**：负载均衡器绑定的global eip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  **参数解释**：下联面子网的网络ID列表。  **取值范围**：不涉及
    * elbVirsubnetType  **参数解释**：下联面子网类型。  **取值范围**： - ipv4：仅支持IPv4 - dualstack：双栈，同时支持IPv4和IPv6。
    * ipTargetEnable  **参数解释**：是否启用IP类型后端转发。 [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、云下数据中心的服务器。](tag:srg,fcs)  **取值范围**： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * frozenScene  **参数解释**：负载均衡器的冻结场景。 若负载均衡器有多个冻结场景，用逗号分隔。  **取值范围**： [- POLICE：公安冻结场景。](tag:hws) - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,ocb,hws_ocb)
    * deletionProtectionEnable  **参数解释**：是否开启删除保护。仅当前局点启用删除保护特性后才会返回该字段。  **取值范围**： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * autoscaling  autoscaling
    * publicBorderGroup  **参数解释**：公网边界组。  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * chargeMode  **参数解释**：负载均衡器实例的计费模式。  **取值范围**： - flavor：按规格计费。 - lcu：按使用量计费。 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * serviceLbMode  **参数解释**：LB模式。  **取值范围**： - lb：默认模式，不支持跨租户访问。 - ep：ep模式，LB支持跨租户访问。  不支持该字段，请勿使用。
    * instanceType  **参数解释**：标识实例归属哪个内部服务。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * instanceId  **参数解释**：标识实例绑定内部服务的实例ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * proxyProtocolExtensions  **参数解释**：pp扩展。  不支持该字段，请勿使用。
    * wafFailureAction  **参数解释**：WAF故障时的流量处理策略。  **取值范围**：discard:丢弃，forward: 转发到后端。  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**： - nonProtection：不保护。 - consoleProtection：控制台修改保护。
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  **参数解释**：LB所关联的云日志服务（LTS）的日志组ID。  **取值范围**：不涉及
    * logTopicId  **参数解释**：LB所关联的云日志服务（LTS）的日志组下的日志流ID。  **取值范围**：不涉及
    * customQosLimit  customQosLimit
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'provisioningStatus' => 'setProvisioningStatus',
            'adminStateUp' => 'setAdminStateUp',
            'provider' => 'setProvider',
            'pools' => 'setPools',
            'listeners' => 'setListeners',
            'operatingStatus' => 'setOperatingStatus',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'vipSubnetCidrId' => 'setVipSubnetCidrId',
            'vipAddress' => 'setVipAddress',
            'vipPortId' => 'setVipPortId',
            'tags' => 'setTags',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'guaranteed' => 'setGuaranteed',
            'vpcId' => 'setVpcId',
            'eips' => 'setEips',
            'ipv6VipAddress' => 'setIpv6VipAddress',
            'ipv6VipVirsubnetId' => 'setIpv6VipVirsubnetId',
            'ipv6VipPortId' => 'setIpv6VipPortId',
            'availabilityZoneList' => 'setAvailabilityZoneList',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'billingInfo' => 'setBillingInfo',
            'l4FlavorId' => 'setL4FlavorId',
            'l4ScaleFlavorId' => 'setL4ScaleFlavorId',
            'l7FlavorId' => 'setL7FlavorId',
            'l7ScaleFlavorId' => 'setL7ScaleFlavorId',
            'gwFlavorId' => 'setGwFlavorId',
            'loadbalancerType' => 'setLoadbalancerType',
            'publicips' => 'setPublicips',
            'globalEips' => 'setGlobalEips',
            'elbVirsubnetIds' => 'setElbVirsubnetIds',
            'elbVirsubnetType' => 'setElbVirsubnetType',
            'ipTargetEnable' => 'setIpTargetEnable',
            'frozenScene' => 'setFrozenScene',
            'deletionProtectionEnable' => 'setDeletionProtectionEnable',
            'autoscaling' => 'setAutoscaling',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'chargeMode' => 'setChargeMode',
            'serviceLbMode' => 'setServiceLbMode',
            'instanceType' => 'setInstanceType',
            'instanceId' => 'setInstanceId',
            'proxyProtocolExtensions' => 'setProxyProtocolExtensions',
            'wafFailureAction' => 'setWafFailureAction',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'logGroupId' => 'setLogGroupId',
            'logTopicId' => 'setLogTopicId',
            'customQosLimit' => 'setCustomQosLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：负载均衡器ID。  **取值范围**：不涉及
    * description  **参数解释**：负载均衡器描述信息。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：负载均衡器的配置状态。  **取值范围**： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  **参数解释**：负载均衡器的启用状态。  **取值范围**： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    * provider  **参数解释**：负载均衡器的生产者名称。固定为vlb。  **取值范围**：不涉及
    * pools  **参数解释**：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  **参数解释**：负载均衡器关联的监听器的ID列表。
    * operatingStatus  **参数解释**：负载均衡器的操作状态。  **取值范围**： - ONLINE：在线。 - FROZEN：已冻结。
    * name  **参数解释**：负载均衡器的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：负载均衡器所属的项目ID。  **取值范围**：不涉及
    * vipSubnetCidrId  **参数解释**：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及
    * vipAddress  **参数解释**：负载均衡器的IPv4私网IP地址。  **取值范围**：不涉及
    * vipPortId  **参数解释**：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,hcso_dt)  **取值范围**：不涉及
    * tags  **参数解释**：负载均衡的标签列表。
    * createdAt  **参数解释**：负载均衡器的创建时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  **参数解释**：负载均衡器的更新时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * vpcId  **参数解释**：负载均衡器所在VPC ID。  **取值范围**：不涉及
    * eips  **参数解释**：负载均衡器绑定的EIP。  > 该字段与publicips一致。
    * ipv6VipAddress  **参数解释**：双栈类型负载均衡器的IPv6地址。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipVirsubnetId  **参数解释**：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipPortId  **参数解释**：双栈类型负载均衡器的IPv6对应的port ID。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * billingInfo  **参数解释**：资源账单信息。  **取值范围**： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  **参数解释**：负载均衡器4层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示4层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,fcs)
    * l4ScaleFlavorId  **参数解释**：四层弹性规格ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * l7FlavorId  **参数解释**：负载均衡器7层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示7层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  **参数解释**：七层弹性Flavor ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    * gwFlavorId  **参数解释**：网关型负载均衡器的规格ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * loadbalancerType  **参数解释**：负载均衡器类别。  **取值范围**： - gateway 表示网关类型负载均衡器。 - null 表示其他非网关类型负载均衡器。  不支持该字段，请勿使用。
    * publicips  **参数解释**：负载均衡器绑定的公网IP。  > 该字段与eips一致。
    * globalEips  **参数解释**：负载均衡器绑定的global eip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  **参数解释**：下联面子网的网络ID列表。  **取值范围**：不涉及
    * elbVirsubnetType  **参数解释**：下联面子网类型。  **取值范围**： - ipv4：仅支持IPv4 - dualstack：双栈，同时支持IPv4和IPv6。
    * ipTargetEnable  **参数解释**：是否启用IP类型后端转发。 [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、云下数据中心的服务器。](tag:srg,fcs)  **取值范围**： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * frozenScene  **参数解释**：负载均衡器的冻结场景。 若负载均衡器有多个冻结场景，用逗号分隔。  **取值范围**： [- POLICE：公安冻结场景。](tag:hws) - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,ocb,hws_ocb)
    * deletionProtectionEnable  **参数解释**：是否开启删除保护。仅当前局点启用删除保护特性后才会返回该字段。  **取值范围**： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * autoscaling  autoscaling
    * publicBorderGroup  **参数解释**：公网边界组。  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * chargeMode  **参数解释**：负载均衡器实例的计费模式。  **取值范围**： - flavor：按规格计费。 - lcu：按使用量计费。 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * serviceLbMode  **参数解释**：LB模式。  **取值范围**： - lb：默认模式，不支持跨租户访问。 - ep：ep模式，LB支持跨租户访问。  不支持该字段，请勿使用。
    * instanceType  **参数解释**：标识实例归属哪个内部服务。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * instanceId  **参数解释**：标识实例绑定内部服务的实例ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    * proxyProtocolExtensions  **参数解释**：pp扩展。  不支持该字段，请勿使用。
    * wafFailureAction  **参数解释**：WAF故障时的流量处理策略。  **取值范围**：discard:丢弃，forward: 转发到后端。  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**： - nonProtection：不保护。 - consoleProtection：控制台修改保护。
    * protectionReason  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  **参数解释**：LB所关联的云日志服务（LTS）的日志组ID。  **取值范围**：不涉及
    * logTopicId  **参数解释**：LB所关联的云日志服务（LTS）的日志组下的日志流ID。  **取值范围**：不涉及
    * customQosLimit  customQosLimit
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'provisioningStatus' => 'getProvisioningStatus',
            'adminStateUp' => 'getAdminStateUp',
            'provider' => 'getProvider',
            'pools' => 'getPools',
            'listeners' => 'getListeners',
            'operatingStatus' => 'getOperatingStatus',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'vipSubnetCidrId' => 'getVipSubnetCidrId',
            'vipAddress' => 'getVipAddress',
            'vipPortId' => 'getVipPortId',
            'tags' => 'getTags',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'guaranteed' => 'getGuaranteed',
            'vpcId' => 'getVpcId',
            'eips' => 'getEips',
            'ipv6VipAddress' => 'getIpv6VipAddress',
            'ipv6VipVirsubnetId' => 'getIpv6VipVirsubnetId',
            'ipv6VipPortId' => 'getIpv6VipPortId',
            'availabilityZoneList' => 'getAvailabilityZoneList',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'billingInfo' => 'getBillingInfo',
            'l4FlavorId' => 'getL4FlavorId',
            'l4ScaleFlavorId' => 'getL4ScaleFlavorId',
            'l7FlavorId' => 'getL7FlavorId',
            'l7ScaleFlavorId' => 'getL7ScaleFlavorId',
            'gwFlavorId' => 'getGwFlavorId',
            'loadbalancerType' => 'getLoadbalancerType',
            'publicips' => 'getPublicips',
            'globalEips' => 'getGlobalEips',
            'elbVirsubnetIds' => 'getElbVirsubnetIds',
            'elbVirsubnetType' => 'getElbVirsubnetType',
            'ipTargetEnable' => 'getIpTargetEnable',
            'frozenScene' => 'getFrozenScene',
            'deletionProtectionEnable' => 'getDeletionProtectionEnable',
            'autoscaling' => 'getAutoscaling',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'chargeMode' => 'getChargeMode',
            'serviceLbMode' => 'getServiceLbMode',
            'instanceType' => 'getInstanceType',
            'instanceId' => 'getInstanceId',
            'proxyProtocolExtensions' => 'getProxyProtocolExtensions',
            'wafFailureAction' => 'getWafFailureAction',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'logGroupId' => 'getLogGroupId',
            'logTopicId' => 'getLogTopicId',
            'customQosLimit' => 'getCustomQosLimit'
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
    const ELB_VIRSUBNET_TYPE_IPV4 = 'ipv4';
    const ELB_VIRSUBNET_TYPE_DUALSTACK = 'dualstack';
    const SERVICE_LB_MODE_LB = 'lb';
    const SERVICE_LB_MODE_EP = 'ep';
    const PROTECTION_STATUS_NON_PROTECTION = 'nonProtection';
    const PROTECTION_STATUS_CONSOLE_PROTECTION = 'consoleProtection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getElbVirsubnetTypeAllowableValues()
    {
        return [
            self::ELB_VIRSUBNET_TYPE_IPV4,
            self::ELB_VIRSUBNET_TYPE_DUALSTACK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getServiceLbModeAllowableValues()
    {
        return [
            self::SERVICE_LB_MODE_LB,
            self::SERVICE_LB_MODE_EP,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['pools'] = isset($data['pools']) ? $data['pools'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vipSubnetCidrId'] = isset($data['vipSubnetCidrId']) ? $data['vipSubnetCidrId'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['vipPortId'] = isset($data['vipPortId']) ? $data['vipPortId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['guaranteed'] = isset($data['guaranteed']) ? $data['guaranteed'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['eips'] = isset($data['eips']) ? $data['eips'] : null;
        $this->container['ipv6VipAddress'] = isset($data['ipv6VipAddress']) ? $data['ipv6VipAddress'] : null;
        $this->container['ipv6VipVirsubnetId'] = isset($data['ipv6VipVirsubnetId']) ? $data['ipv6VipVirsubnetId'] : null;
        $this->container['ipv6VipPortId'] = isset($data['ipv6VipPortId']) ? $data['ipv6VipPortId'] : null;
        $this->container['availabilityZoneList'] = isset($data['availabilityZoneList']) ? $data['availabilityZoneList'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['l4FlavorId'] = isset($data['l4FlavorId']) ? $data['l4FlavorId'] : null;
        $this->container['l4ScaleFlavorId'] = isset($data['l4ScaleFlavorId']) ? $data['l4ScaleFlavorId'] : null;
        $this->container['l7FlavorId'] = isset($data['l7FlavorId']) ? $data['l7FlavorId'] : null;
        $this->container['l7ScaleFlavorId'] = isset($data['l7ScaleFlavorId']) ? $data['l7ScaleFlavorId'] : null;
        $this->container['gwFlavorId'] = isset($data['gwFlavorId']) ? $data['gwFlavorId'] : null;
        $this->container['loadbalancerType'] = isset($data['loadbalancerType']) ? $data['loadbalancerType'] : null;
        $this->container['publicips'] = isset($data['publicips']) ? $data['publicips'] : null;
        $this->container['globalEips'] = isset($data['globalEips']) ? $data['globalEips'] : null;
        $this->container['elbVirsubnetIds'] = isset($data['elbVirsubnetIds']) ? $data['elbVirsubnetIds'] : null;
        $this->container['elbVirsubnetType'] = isset($data['elbVirsubnetType']) ? $data['elbVirsubnetType'] : null;
        $this->container['ipTargetEnable'] = isset($data['ipTargetEnable']) ? $data['ipTargetEnable'] : null;
        $this->container['frozenScene'] = isset($data['frozenScene']) ? $data['frozenScene'] : null;
        $this->container['deletionProtectionEnable'] = isset($data['deletionProtectionEnable']) ? $data['deletionProtectionEnable'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['serviceLbMode'] = isset($data['serviceLbMode']) ? $data['serviceLbMode'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['proxyProtocolExtensions'] = isset($data['proxyProtocolExtensions']) ? $data['proxyProtocolExtensions'] : null;
        $this->container['wafFailureAction'] = isset($data['wafFailureAction']) ? $data['wafFailureAction'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
        $this->container['customQosLimit'] = isset($data['customQosLimit']) ? $data['customQosLimit'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
        }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['pools'] === null) {
            $invalidProperties[] = "'pools' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['operatingStatus'] === null) {
            $invalidProperties[] = "'operatingStatus' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['vipSubnetCidrId'] === null) {
            $invalidProperties[] = "'vipSubnetCidrId' can't be null";
        }
        if ($this->container['vipAddress'] === null) {
            $invalidProperties[] = "'vipAddress' can't be null";
        }
        if ($this->container['vipPortId'] === null) {
            $invalidProperties[] = "'vipPortId' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['guaranteed'] === null) {
            $invalidProperties[] = "'guaranteed' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['eips'] === null) {
            $invalidProperties[] = "'eips' can't be null";
        }
        if ($this->container['ipv6VipAddress'] === null) {
            $invalidProperties[] = "'ipv6VipAddress' can't be null";
        }
        if ($this->container['ipv6VipVirsubnetId'] === null) {
            $invalidProperties[] = "'ipv6VipVirsubnetId' can't be null";
        }
        if ($this->container['ipv6VipPortId'] === null) {
            $invalidProperties[] = "'ipv6VipPortId' can't be null";
        }
        if ($this->container['availabilityZoneList'] === null) {
            $invalidProperties[] = "'availabilityZoneList' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['billingInfo'] === null) {
            $invalidProperties[] = "'billingInfo' can't be null";
        }
            if ((mb_strlen($this->container['billingInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['billingInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['l4FlavorId'] === null) {
            $invalidProperties[] = "'l4FlavorId' can't be null";
        }
            if ((mb_strlen($this->container['l4FlavorId']) > 255)) {
                $invalidProperties[] = "invalid value for 'l4FlavorId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['l4FlavorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'l4FlavorId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['l4ScaleFlavorId'] === null) {
            $invalidProperties[] = "'l4ScaleFlavorId' can't be null";
        }
            if ((mb_strlen($this->container['l4ScaleFlavorId']) > 255)) {
                $invalidProperties[] = "invalid value for 'l4ScaleFlavorId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['l4ScaleFlavorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'l4ScaleFlavorId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['l7FlavorId'] === null) {
            $invalidProperties[] = "'l7FlavorId' can't be null";
        }
            if ((mb_strlen($this->container['l7FlavorId']) > 255)) {
                $invalidProperties[] = "invalid value for 'l7FlavorId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['l7FlavorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'l7FlavorId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['l7ScaleFlavorId'] === null) {
            $invalidProperties[] = "'l7ScaleFlavorId' can't be null";
        }
            if ((mb_strlen($this->container['l7ScaleFlavorId']) > 255)) {
                $invalidProperties[] = "invalid value for 'l7ScaleFlavorId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['l7ScaleFlavorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'l7ScaleFlavorId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['gwFlavorId']) && (mb_strlen($this->container['gwFlavorId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gwFlavorId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['gwFlavorId']) && (mb_strlen($this->container['gwFlavorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'gwFlavorId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['publicips'] === null) {
            $invalidProperties[] = "'publicips' can't be null";
        }
        if ($this->container['globalEips'] === null) {
            $invalidProperties[] = "'globalEips' can't be null";
        }
        if ($this->container['elbVirsubnetIds'] === null) {
            $invalidProperties[] = "'elbVirsubnetIds' can't be null";
        }
        if ($this->container['elbVirsubnetType'] === null) {
            $invalidProperties[] = "'elbVirsubnetType' can't be null";
        }
            $allowedValues = $this->getElbVirsubnetTypeAllowableValues();
                if (!is_null($this->container['elbVirsubnetType']) && !in_array($this->container['elbVirsubnetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'elbVirsubnetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['ipTargetEnable'] === null) {
            $invalidProperties[] = "'ipTargetEnable' can't be null";
        }
        if ($this->container['frozenScene'] === null) {
            $invalidProperties[] = "'frozenScene' can't be null";
        }
            $allowedValues = $this->getServiceLbModeAllowableValues();
                if (!is_null($this->container['serviceLbMode']) && !in_array($this->container['serviceLbMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'serviceLbMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['serviceLbMode']) && (mb_strlen($this->container['serviceLbMode']) > 36)) {
                $invalidProperties[] = "invalid value for 'serviceLbMode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['serviceLbMode']) && (mb_strlen($this->container['serviceLbMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceLbMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  **参数解释**：负载均衡器ID。  **取值范围**：不涉及
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
    * @param string $id **参数解释**：负载均衡器ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：负载均衡器描述信息。  **取值范围**：不涉及
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
    * @param string $description **参数解释**：负载均衡器描述信息。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  **参数解释**：负载均衡器的配置状态。  **取值范围**： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    *
    * @return string
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string $provisioningStatus **参数解释**：负载均衡器的配置状态。  **取值范围**： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  **参数解释**：负载均衡器的启用状态。  **取值范围**： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
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
    * @param bool $adminStateUp **参数解释**：负载均衡器的启用状态。  **取值范围**： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets provider
    *  **参数解释**：负载均衡器的生产者名称。固定为vlb。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string $provider **参数解释**：负载均衡器的生产者名称。固定为vlb。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets pools
    *  **参数解释**：负载均衡器直接关联的后端服务器组的ID列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PoolRef[]
    */
    public function getPools()
    {
        return $this->container['pools'];
    }

    /**
    * Sets pools
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PoolRef[] $pools **参数解释**：负载均衡器直接关联的后端服务器组的ID列表。
    *
    * @return $this
    */
    public function setPools($pools)
    {
        $this->container['pools'] = $pools;
        return $this;
    }

    /**
    * Gets listeners
    *  **参数解释**：负载均衡器关联的监听器的ID列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[] $listeners **参数解释**：负载均衡器关联的监听器的ID列表。
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  **参数解释**：负载均衡器的操作状态。  **取值范围**： - ONLINE：在线。 - FROZEN：已冻结。
    *
    * @return string
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string $operatingStatus **参数解释**：负载均衡器的操作状态。  **取值范围**： - ONLINE：在线。 - FROZEN：已冻结。
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：负载均衡器的名称。  **取值范围**：不涉及
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
    * @param string $name **参数解释**：负载均衡器的名称。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：负载均衡器所属的项目ID。  **取值范围**：不涉及
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
    * @param string $projectId **参数解释**：负载均衡器所属的项目ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vipSubnetCidrId
    *  **参数解释**：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getVipSubnetCidrId()
    {
        return $this->container['vipSubnetCidrId'];
    }

    /**
    * Sets vipSubnetCidrId
    *
    * @param string $vipSubnetCidrId **参数解释**：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及
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
    *  **参数解释**：负载均衡器的IPv4私网IP地址。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string $vipAddress **参数解释**：负载均衡器的IPv4私网IP地址。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets vipPortId
    *  **参数解释**：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,hcso_dt)  **取值范围**：不涉及
    *
    * @return string
    */
    public function getVipPortId()
    {
        return $this->container['vipPortId'];
    }

    /**
    * Sets vipPortId
    *
    * @param string $vipPortId **参数解释**：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,hcso_dt)  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setVipPortId($vipPortId)
    {
        $this->container['vipPortId'] = $vipPortId;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：负载均衡的标签列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\Tag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\Tag[] $tags **参数解释**：负载均衡的标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：负载均衡器的创建时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt **参数解释**：负载均衡器的创建时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    *  **参数解释**：负载均衡器的更新时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt **参数解释**：负载均衡器的更新时间。  **取值范围**： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets guaranteed
    *  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    *
    * @return bool
    */
    public function getGuaranteed()
    {
        return $this->container['guaranteed'];
    }

    /**
    * Sets guaranteed
    *
    * @param bool $guaranteed **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
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
    *  **参数解释**：负载均衡器所在VPC ID。  **取值范围**：不涉及
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
    * @param string $vpcId **参数解释**：负载均衡器所在VPC ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets eips
    *  **参数解释**：负载均衡器绑定的EIP。  > 该字段与publicips一致。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\EipInfo[]
    */
    public function getEips()
    {
        return $this->container['eips'];
    }

    /**
    * Sets eips
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\EipInfo[] $eips **参数解释**：负载均衡器绑定的EIP。  > 该字段与publicips一致。
    *
    * @return $this
    */
    public function setEips($eips)
    {
        $this->container['eips'] = $eips;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  **参数解释**：双栈类型负载均衡器的IPv6地址。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return string
    */
    public function getIpv6VipAddress()
    {
        return $this->container['ipv6VipAddress'];
    }

    /**
    * Sets ipv6VipAddress
    *
    * @param string $ipv6VipAddress **参数解释**：双栈类型负载均衡器的IPv6地址。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
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
    *  **参数解释**：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return string
    */
    public function getIpv6VipVirsubnetId()
    {
        return $this->container['ipv6VipVirsubnetId'];
    }

    /**
    * Sets ipv6VipVirsubnetId
    *
    * @param string $ipv6VipVirsubnetId **参数解释**：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpv6VipVirsubnetId($ipv6VipVirsubnetId)
    {
        $this->container['ipv6VipVirsubnetId'] = $ipv6VipVirsubnetId;
        return $this;
    }

    /**
    * Gets ipv6VipPortId
    *  **参数解释**：双栈类型负载均衡器的IPv6对应的port ID。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return string
    */
    public function getIpv6VipPortId()
    {
        return $this->container['ipv6VipPortId'];
    }

    /**
    * Sets ipv6VipPortId
    *
    * @param string $ipv6VipPortId **参数解释**：双栈类型负载均衡器的IPv6对应的port ID。  **取值范围**：不涉及  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpv6VipPortId($ipv6VipPortId)
    {
        $this->container['ipv6VipPortId'] = $ipv6VipPortId;
        return $this;
    }

    /**
    * Gets availabilityZoneList
    *  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
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
    * @param string[] $availabilityZoneList **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
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
    *  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets billingInfo
    *  **参数解释**：资源账单信息。  **取值范围**： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    *
    * @return string
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string $billingInfo **参数解释**：资源账单信息。  **取值范围**： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets l4FlavorId
    *  **参数解释**：负载均衡器4层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示4层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,fcs)
    *
    * @return string
    */
    public function getL4FlavorId()
    {
        return $this->container['l4FlavorId'];
    }

    /**
    * Sets l4FlavorId
    *
    * @param string $l4FlavorId **参数解释**：负载均衡器4层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示4层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,fcs)
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
    *  **参数解释**：四层弹性规格ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    *
    * @return string
    */
    public function getL4ScaleFlavorId()
    {
        return $this->container['l4ScaleFlavorId'];
    }

    /**
    * Sets l4ScaleFlavorId
    *
    * @param string $l4ScaleFlavorId **参数解释**：四层弹性规格ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
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
    *  **参数解释**：负载均衡器7层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示7层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    *
    * @return string
    */
    public function getL7FlavorId()
    {
        return $this->container['l7FlavorId'];
    }

    /**
    * Sets l7FlavorId
    *
    * @param string $l7FlavorId **参数解释**：负载均衡器7层规格ID。 若当前负载均衡器是弹性规格实例，则该字段表示7层上限规格。  **取值范围**：不涉及  [HCSO场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    *  **参数解释**：七层弹性Flavor ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    *
    * @return string
    */
    public function getL7ScaleFlavorId()
    {
        return $this->container['l7ScaleFlavorId'];
    }

    /**
    * Sets l7ScaleFlavorId
    *
    * @param string $l7ScaleFlavorId **参数解释**：七层弹性Flavor ID。  **取值范围**：不涉及  > 该字段已经废弃，请勿使用。
    *
    * @return $this
    */
    public function setL7ScaleFlavorId($l7ScaleFlavorId)
    {
        $this->container['l7ScaleFlavorId'] = $l7ScaleFlavorId;
        return $this;
    }

    /**
    * Gets gwFlavorId
    *  **参数解释**：网关型负载均衡器的规格ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    *
    * @return string|null
    */
    public function getGwFlavorId()
    {
        return $this->container['gwFlavorId'];
    }

    /**
    * Sets gwFlavorId
    *
    * @param string|null $gwFlavorId **参数解释**：网关型负载均衡器的规格ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setGwFlavorId($gwFlavorId)
    {
        $this->container['gwFlavorId'] = $gwFlavorId;
        return $this;
    }

    /**
    * Gets loadbalancerType
    *  **参数解释**：负载均衡器类别。  **取值范围**： - gateway 表示网关类型负载均衡器。 - null 表示其他非网关类型负载均衡器。  不支持该字段，请勿使用。
    *
    * @return string|null
    */
    public function getLoadbalancerType()
    {
        return $this->container['loadbalancerType'];
    }

    /**
    * Sets loadbalancerType
    *
    * @param string|null $loadbalancerType **参数解释**：负载均衡器类别。  **取值范围**： - gateway 表示网关类型负载均衡器。 - null 表示其他非网关类型负载均衡器。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setLoadbalancerType($loadbalancerType)
    {
        $this->container['loadbalancerType'] = $loadbalancerType;
        return $this;
    }

    /**
    * Gets publicips
    *  **参数解释**：负载均衡器绑定的公网IP。  > 该字段与eips一致。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PublicIpInfo[]
    */
    public function getPublicips()
    {
        return $this->container['publicips'];
    }

    /**
    * Sets publicips
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PublicIpInfo[] $publicips **参数解释**：负载均衡器绑定的公网IP。  > 该字段与eips一致。
    *
    * @return $this
    */
    public function setPublicips($publicips)
    {
        $this->container['publicips'] = $publicips;
        return $this;
    }

    /**
    * Gets globalEips
    *  **参数解释**：负载均衡器绑定的global eip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[]
    */
    public function getGlobalEips()
    {
        return $this->container['globalEips'];
    }

    /**
    * Sets globalEips
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[] $globalEips **参数解释**：负载均衡器绑定的global eip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    *
    * @return $this
    */
    public function setGlobalEips($globalEips)
    {
        $this->container['globalEips'] = $globalEips;
        return $this;
    }

    /**
    * Gets elbVirsubnetIds
    *  **参数解释**：下联面子网的网络ID列表。  **取值范围**：不涉及
    *
    * @return string[]
    */
    public function getElbVirsubnetIds()
    {
        return $this->container['elbVirsubnetIds'];
    }

    /**
    * Sets elbVirsubnetIds
    *
    * @param string[] $elbVirsubnetIds **参数解释**：下联面子网的网络ID列表。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setElbVirsubnetIds($elbVirsubnetIds)
    {
        $this->container['elbVirsubnetIds'] = $elbVirsubnetIds;
        return $this;
    }

    /**
    * Gets elbVirsubnetType
    *  **参数解释**：下联面子网类型。  **取值范围**： - ipv4：仅支持IPv4 - dualstack：双栈，同时支持IPv4和IPv6。
    *
    * @return string
    */
    public function getElbVirsubnetType()
    {
        return $this->container['elbVirsubnetType'];
    }

    /**
    * Sets elbVirsubnetType
    *
    * @param string $elbVirsubnetType **参数解释**：下联面子网类型。  **取值范围**： - ipv4：仅支持IPv4 - dualstack：双栈，同时支持IPv4和IPv6。
    *
    * @return $this
    */
    public function setElbVirsubnetType($elbVirsubnetType)
    {
        $this->container['elbVirsubnetType'] = $elbVirsubnetType;
        return $this;
    }

    /**
    * Gets ipTargetEnable
    *  **参数解释**：是否启用IP类型后端转发。 [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、云下数据中心的服务器。](tag:srg,fcs)  **取值范围**： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return bool
    */
    public function getIpTargetEnable()
    {
        return $this->container['ipTargetEnable'];
    }

    /**
    * Sets ipTargetEnable
    *
    * @param bool $ipTargetEnable **参数解释**：是否启用IP类型后端转发。 [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启IP类型后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、云下数据中心的服务器。](tag:srg,fcs)  **取值范围**： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpTargetEnable($ipTargetEnable)
    {
        $this->container['ipTargetEnable'] = $ipTargetEnable;
        return $this;
    }

    /**
    * Gets frozenScene
    *  **参数解释**：负载均衡器的冻结场景。 若负载均衡器有多个冻结场景，用逗号分隔。  **取值范围**： [- POLICE：公安冻结场景。](tag:hws) - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,ocb,hws_ocb)
    *
    * @return string
    */
    public function getFrozenScene()
    {
        return $this->container['frozenScene'];
    }

    /**
    * Sets frozenScene
    *
    * @param string $frozenScene **参数解释**：负载均衡器的冻结场景。 若负载均衡器有多个冻结场景，用逗号分隔。  **取值范围**： [- POLICE：公安冻结场景。](tag:hws) - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,hcso_dt,ocb,hws_ocb)
    *
    * @return $this
    */
    public function setFrozenScene($frozenScene)
    {
        $this->container['frozenScene'] = $frozenScene;
        return $this;
    }

    /**
    * Gets deletionProtectionEnable
    *  **参数解释**：是否开启删除保护。仅当前局点启用删除保护特性后才会返回该字段。  **取值范围**： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    * @param bool|null $deletionProtectionEnable **参数解释**：是否开启删除保护。仅当前局点启用删除保护特性后才会返回该字段。  **取值范围**： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setDeletionProtectionEnable($deletionProtectionEnable)
    {
        $this->container['deletionProtectionEnable'] = $deletionProtectionEnable;
        return $this;
    }

    /**
    * Gets autoscaling
    *  autoscaling
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\AutoscalingRef|null
    */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
    * Sets autoscaling
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\AutoscalingRef|null $autoscaling autoscaling
    *
    * @return $this
    */
    public function setAutoscaling($autoscaling)
    {
        $this->container['autoscaling'] = $autoscaling;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  **参数解释**：公网边界组。  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup **参数解释**：公网边界组。  **取值范围**： - center：表示中心站点的公网边界组 - 边缘站点名称：表示边缘站点的公网边界组  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets chargeMode
    *  **参数解释**：负载均衡器实例的计费模式。  **取值范围**： - flavor：按规格计费。 - lcu：按使用量计费。 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
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
    * @param string|null $chargeMode **参数解释**：负载均衡器实例的计费模式。  **取值范围**： - flavor：按规格计费。 - lcu：按使用量计费。 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets serviceLbMode
    *  **参数解释**：LB模式。  **取值范围**： - lb：默认模式，不支持跨租户访问。 - ep：ep模式，LB支持跨租户访问。  不支持该字段，请勿使用。
    *
    * @return string|null
    */
    public function getServiceLbMode()
    {
        return $this->container['serviceLbMode'];
    }

    /**
    * Sets serviceLbMode
    *
    * @param string|null $serviceLbMode **参数解释**：LB模式。  **取值范围**： - lb：默认模式，不支持跨租户访问。 - ep：ep模式，LB支持跨租户访问。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setServiceLbMode($serviceLbMode)
    {
        $this->container['serviceLbMode'] = $serviceLbMode;
        return $this;
    }

    /**
    * Gets instanceType
    *  **参数解释**：标识实例归属哪个内部服务。  **取值范围**：不涉及  不支持该字段，请勿使用。
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
    * @param string|null $instanceType **参数解释**：标识实例归属哪个内部服务。  **取值范围**：不涉及  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：标识实例绑定内部服务的实例ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
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
    * @param string|null $instanceId **参数解释**：标识实例绑定内部服务的实例ID。  **取值范围**：不涉及  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets proxyProtocolExtensions
    *  **参数解释**：pp扩展。  不支持该字段，请勿使用。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ProxyProtocolExtension[]|null
    */
    public function getProxyProtocolExtensions()
    {
        return $this->container['proxyProtocolExtensions'];
    }

    /**
    * Sets proxyProtocolExtensions
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ProxyProtocolExtension[]|null $proxyProtocolExtensions **参数解释**：pp扩展。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setProxyProtocolExtensions($proxyProtocolExtensions)
    {
        $this->container['proxyProtocolExtensions'] = $proxyProtocolExtensions;
        return $this;
    }

    /**
    * Gets wafFailureAction
    *  **参数解释**：WAF故障时的流量处理策略。  **取值范围**：discard:丢弃，forward: 转发到后端。  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
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
    * @param string|null $wafFailureAction **参数解释**：WAF故障时的流量处理策略。  **取值范围**：discard:丢弃，forward: 转发到后端。  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
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
    *  **参数解释**：修改保护状态。  **取值范围**： - nonProtection：不保护。 - consoleProtection：控制台修改保护。
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
    * @param string|null $protectionStatus **参数解释**：修改保护状态。  **取值范围**： - nonProtection：不保护。 - consoleProtection：控制台修改保护。
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
    *  **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
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
    * @param string|null $protectionReason **参数解释**：设置保护的原因。作为protection_status的转态设置的原因。  **取值范围**：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
        return $this;
    }

    /**
    * Gets logGroupId
    *  **参数解释**：LB所关联的云日志服务（LTS）的日志组ID。  **取值范围**：不涉及
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
    * @param string|null $logGroupId **参数解释**：LB所关联的云日志服务（LTS）的日志组ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logTopicId
    *  **参数解释**：LB所关联的云日志服务（LTS）的日志组下的日志流ID。  **取值范围**：不涉及
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
    * @param string|null $logTopicId **参数解释**：LB所关联的云日志服务（LTS）的日志组下的日志流ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
        return $this;
    }

    /**
    * Gets customQosLimit
    *  customQosLimit
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CustomQosLimit|null
    */
    public function getCustomQosLimit()
    {
        return $this->container['customQosLimit'];
    }

    /**
    * Sets customQosLimit
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CustomQosLimit|null $customQosLimit customQosLimit
    *
    * @return $this
    */
    public function setCustomQosLimit($customQosLimit)
    {
        $this->container['customQosLimit'] = $customQosLimit;
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

