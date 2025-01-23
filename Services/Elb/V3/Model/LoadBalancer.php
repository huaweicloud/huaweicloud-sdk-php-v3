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
    * id  参数解释：负载均衡器ID。
    * description  参数解释：负载均衡器描述信息。
    * provisioningStatus  参数解释：负载均衡器的配置状态。  取值范围： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb。
    * pools  参数解释：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  参数解释：负载均衡器关联的监听器的ID列表。
    * operatingStatus  参数解释：负载均衡器的操作状态。  取值范围： - ONLINE：在线。 - FROZEN：已冻结。
    * name  参数解释：负载均衡器的名称。
    * projectId  参数解释：负载均衡器所属的项目ID。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP地址。
    * vipPortId  参数解释：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。
    * createdAt  参数解释：负载均衡器的创建时间。  取值范围： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  参数解释：负载均衡器的更新时间。  取值范围; 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  参数解释：是否独享型LB。  取值范围： - false：共享型。 - true：独享型。
    * vpcId  参数解释：负载均衡器所在VPC ID。
    * eips  参数解释：负载均衡器绑定的EIP。  约束限制：只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  参数解释：双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  参数解释：负载均衡器所在的可用区列表。
    * enterpriseProjectId  参数解释：企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注意：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt)
    * billingInfo  参数解释：资源账单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  参数解释：网络型规格ID。  对于弹性扩缩容实例，表示上限规格。  约束限制： - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l4ScaleFlavorId  参数解释：四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  参数解释：应用型ID。 对于弹性扩缩容实例，表示上限规格ID。  约束限制： - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  参数解释：七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  参数解释：负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  参数解释：负载均衡器绑定的global eip。  约束限制：只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。
    * elbVirsubnetType  参数解释：下联面子网类型。  取值范围： - ipv4：ipv4 - dualstack：双栈
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * frozenScene  参数解释：负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值范围： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制： - 仅当前局点启用删除保护特性后才会返回该字段。 - 退场时需要先关闭所有资源的删除保护开关。  取值范围： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * autoscaling  autoscaling
    * publicBorderGroup  参数解释：LB所属AZ组。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  取值范围： - flavor：按规格计费 - lcu：按使用量计费 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  参数解释：LB所绑定的logtank对应的group id
    * logTopicId  参数解释：LB所绑定的logtank对应的topic id
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
            'publicips' => '\HuaweiCloud\SDK\Elb\V3\Model\PublicIpInfo[]',
            'globalEips' => '\HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[]',
            'elbVirsubnetIds' => 'string[]',
            'elbVirsubnetType' => 'string',
            'ipTargetEnable' => 'bool',
            'frozenScene' => 'string',
            'ipv6Bandwidth' => '\HuaweiCloud\SDK\Elb\V3\Model\BandwidthRef',
            'deletionProtectionEnable' => 'bool',
            'autoscaling' => '\HuaweiCloud\SDK\Elb\V3\Model\AutoscalingRef',
            'publicBorderGroup' => 'string',
            'chargeMode' => 'string',
            'wafFailureAction' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'logGroupId' => 'string',
            'logTopicId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  参数解释：负载均衡器ID。
    * description  参数解释：负载均衡器描述信息。
    * provisioningStatus  参数解释：负载均衡器的配置状态。  取值范围： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb。
    * pools  参数解释：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  参数解释：负载均衡器关联的监听器的ID列表。
    * operatingStatus  参数解释：负载均衡器的操作状态。  取值范围： - ONLINE：在线。 - FROZEN：已冻结。
    * name  参数解释：负载均衡器的名称。
    * projectId  参数解释：负载均衡器所属的项目ID。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP地址。
    * vipPortId  参数解释：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。
    * createdAt  参数解释：负载均衡器的创建时间。  取值范围： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  参数解释：负载均衡器的更新时间。  取值范围; 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  参数解释：是否独享型LB。  取值范围： - false：共享型。 - true：独享型。
    * vpcId  参数解释：负载均衡器所在VPC ID。
    * eips  参数解释：负载均衡器绑定的EIP。  约束限制：只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  参数解释：双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  参数解释：负载均衡器所在的可用区列表。
    * enterpriseProjectId  参数解释：企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注意：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt)
    * billingInfo  参数解释：资源账单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  参数解释：网络型规格ID。  对于弹性扩缩容实例，表示上限规格。  约束限制： - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l4ScaleFlavorId  参数解释：四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  参数解释：应用型ID。 对于弹性扩缩容实例，表示上限规格ID。  约束限制： - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  参数解释：七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  参数解释：负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  参数解释：负载均衡器绑定的global eip。  约束限制：只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。
    * elbVirsubnetType  参数解释：下联面子网类型。  取值范围： - ipv4：ipv4 - dualstack：双栈
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * frozenScene  参数解释：负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值范围： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制： - 仅当前局点启用删除保护特性后才会返回该字段。 - 退场时需要先关闭所有资源的删除保护开关。  取值范围： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * autoscaling  autoscaling
    * publicBorderGroup  参数解释：LB所属AZ组。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  取值范围： - flavor：按规格计费 - lcu：按使用量计费 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  参数解释：LB所绑定的logtank对应的group id
    * logTopicId  参数解释：LB所绑定的logtank对应的topic id
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
        'publicips' => null,
        'globalEips' => null,
        'elbVirsubnetIds' => null,
        'elbVirsubnetType' => null,
        'ipTargetEnable' => null,
        'frozenScene' => null,
        'ipv6Bandwidth' => null,
        'deletionProtectionEnable' => null,
        'autoscaling' => null,
        'publicBorderGroup' => null,
        'chargeMode' => null,
        'wafFailureAction' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'logGroupId' => null,
        'logTopicId' => null
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
    * id  参数解释：负载均衡器ID。
    * description  参数解释：负载均衡器描述信息。
    * provisioningStatus  参数解释：负载均衡器的配置状态。  取值范围： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb。
    * pools  参数解释：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  参数解释：负载均衡器关联的监听器的ID列表。
    * operatingStatus  参数解释：负载均衡器的操作状态。  取值范围： - ONLINE：在线。 - FROZEN：已冻结。
    * name  参数解释：负载均衡器的名称。
    * projectId  参数解释：负载均衡器所属的项目ID。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP地址。
    * vipPortId  参数解释：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。
    * createdAt  参数解释：负载均衡器的创建时间。  取值范围： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  参数解释：负载均衡器的更新时间。  取值范围; 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  参数解释：是否独享型LB。  取值范围： - false：共享型。 - true：独享型。
    * vpcId  参数解释：负载均衡器所在VPC ID。
    * eips  参数解释：负载均衡器绑定的EIP。  约束限制：只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  参数解释：双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  参数解释：负载均衡器所在的可用区列表。
    * enterpriseProjectId  参数解释：企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注意：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt)
    * billingInfo  参数解释：资源账单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  参数解释：网络型规格ID。  对于弹性扩缩容实例，表示上限规格。  约束限制： - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l4ScaleFlavorId  参数解释：四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  参数解释：应用型ID。 对于弹性扩缩容实例，表示上限规格ID。  约束限制： - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  参数解释：七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  参数解释：负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  参数解释：负载均衡器绑定的global eip。  约束限制：只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。
    * elbVirsubnetType  参数解释：下联面子网类型。  取值范围： - ipv4：ipv4 - dualstack：双栈
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * frozenScene  参数解释：负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值范围： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制： - 仅当前局点启用删除保护特性后才会返回该字段。 - 退场时需要先关闭所有资源的删除保护开关。  取值范围： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * autoscaling  autoscaling
    * publicBorderGroup  参数解释：LB所属AZ组。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  取值范围： - flavor：按规格计费 - lcu：按使用量计费 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  参数解释：LB所绑定的logtank对应的group id
    * logTopicId  参数解释：LB所绑定的logtank对应的topic id
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
            'publicips' => 'publicips',
            'globalEips' => 'global_eips',
            'elbVirsubnetIds' => 'elb_virsubnet_ids',
            'elbVirsubnetType' => 'elb_virsubnet_type',
            'ipTargetEnable' => 'ip_target_enable',
            'frozenScene' => 'frozen_scene',
            'ipv6Bandwidth' => 'ipv6_bandwidth',
            'deletionProtectionEnable' => 'deletion_protection_enable',
            'autoscaling' => 'autoscaling',
            'publicBorderGroup' => 'public_border_group',
            'chargeMode' => 'charge_mode',
            'wafFailureAction' => 'waf_failure_action',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'logGroupId' => 'log_group_id',
            'logTopicId' => 'log_topic_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  参数解释：负载均衡器ID。
    * description  参数解释：负载均衡器描述信息。
    * provisioningStatus  参数解释：负载均衡器的配置状态。  取值范围： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb。
    * pools  参数解释：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  参数解释：负载均衡器关联的监听器的ID列表。
    * operatingStatus  参数解释：负载均衡器的操作状态。  取值范围： - ONLINE：在线。 - FROZEN：已冻结。
    * name  参数解释：负载均衡器的名称。
    * projectId  参数解释：负载均衡器所属的项目ID。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP地址。
    * vipPortId  参数解释：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。
    * createdAt  参数解释：负载均衡器的创建时间。  取值范围： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  参数解释：负载均衡器的更新时间。  取值范围; 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  参数解释：是否独享型LB。  取值范围： - false：共享型。 - true：独享型。
    * vpcId  参数解释：负载均衡器所在VPC ID。
    * eips  参数解释：负载均衡器绑定的EIP。  约束限制：只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  参数解释：双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  参数解释：负载均衡器所在的可用区列表。
    * enterpriseProjectId  参数解释：企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注意：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt)
    * billingInfo  参数解释：资源账单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  参数解释：网络型规格ID。  对于弹性扩缩容实例，表示上限规格。  约束限制： - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l4ScaleFlavorId  参数解释：四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  参数解释：应用型ID。 对于弹性扩缩容实例，表示上限规格ID。  约束限制： - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  参数解释：七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  参数解释：负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  参数解释：负载均衡器绑定的global eip。  约束限制：只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。
    * elbVirsubnetType  参数解释：下联面子网类型。  取值范围： - ipv4：ipv4 - dualstack：双栈
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * frozenScene  参数解释：负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值范围： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制： - 仅当前局点启用删除保护特性后才会返回该字段。 - 退场时需要先关闭所有资源的删除保护开关。  取值范围： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * autoscaling  autoscaling
    * publicBorderGroup  参数解释：LB所属AZ组。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  取值范围： - flavor：按规格计费 - lcu：按使用量计费 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  参数解释：LB所绑定的logtank对应的group id
    * logTopicId  参数解释：LB所绑定的logtank对应的topic id
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
            'publicips' => 'setPublicips',
            'globalEips' => 'setGlobalEips',
            'elbVirsubnetIds' => 'setElbVirsubnetIds',
            'elbVirsubnetType' => 'setElbVirsubnetType',
            'ipTargetEnable' => 'setIpTargetEnable',
            'frozenScene' => 'setFrozenScene',
            'ipv6Bandwidth' => 'setIpv6Bandwidth',
            'deletionProtectionEnable' => 'setDeletionProtectionEnable',
            'autoscaling' => 'setAutoscaling',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'chargeMode' => 'setChargeMode',
            'wafFailureAction' => 'setWafFailureAction',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'logGroupId' => 'setLogGroupId',
            'logTopicId' => 'setLogTopicId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  参数解释：负载均衡器ID。
    * description  参数解释：负载均衡器描述信息。
    * provisioningStatus  参数解释：负载均衡器的配置状态。  取值范围： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
    * provider  参数解释：负载均衡器的生产者名称。固定为vlb。
    * pools  参数解释：负载均衡器直接关联的后端服务器组的ID列表。
    * listeners  参数解释：负载均衡器关联的监听器的ID列表。
    * operatingStatus  参数解释：负载均衡器的操作状态。  取值范围： - ONLINE：在线。 - FROZEN：已冻结。
    * name  参数解释：负载均衡器的名称。
    * projectId  参数解释：负载均衡器所属的项目ID。
    * vipSubnetCidrId  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。
    * vipAddress  参数解释：负载均衡器的IPv4虚拟IP地址。
    * vipPortId  参数解释：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  参数解释：负载均衡的标签列表。
    * createdAt  参数解释：负载均衡器的创建时间。  取值范围： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  参数解释：负载均衡器的更新时间。  取值范围; 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  参数解释：是否独享型LB。  取值范围： - false：共享型。 - true：独享型。
    * vpcId  参数解释：负载均衡器所在VPC ID。
    * eips  参数解释：负载均衡器绑定的EIP。  约束限制：只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  参数解释：双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  参数解释：负载均衡器所在的可用区列表。
    * enterpriseProjectId  参数解释：企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注意：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt)
    * billingInfo  参数解释：资源账单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
    * l4FlavorId  参数解释：网络型规格ID。  对于弹性扩缩容实例，表示上限规格。  约束限制： - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l4ScaleFlavorId  参数解释：四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  参数解释：应用型ID。 对于弹性扩缩容实例，表示上限规格ID。  约束限制： - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
    * l7ScaleFlavorId  参数解释：七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  参数解释：负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  参数解释：负载均衡器绑定的global eip。  约束限制：只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  参数解释：下联面子网的网络ID列表。
    * elbVirsubnetType  参数解释：下联面子网类型。  取值范围： - ipv4：ipv4 - dualstack：双栈
    * ipTargetEnable  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * frozenScene  参数解释：负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值范围： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  参数解释：是否开启删除保护。  约束限制： - 仅当前局点启用删除保护特性后才会返回该字段。 - 退场时需要先关闭所有资源的删除保护开关。  取值范围： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * autoscaling  autoscaling
    * publicBorderGroup  参数解释：LB所属AZ组。
    * chargeMode  参数解释：负载均衡器实例的计费模式。  取值范围： - flavor：按规格计费 - lcu：按使用量计费 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。
    * wafFailureAction  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * logGroupId  参数解释：LB所绑定的logtank对应的group id
    * logTopicId  参数解释：LB所绑定的logtank对应的topic id
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
            'publicips' => 'getPublicips',
            'globalEips' => 'getGlobalEips',
            'elbVirsubnetIds' => 'getElbVirsubnetIds',
            'elbVirsubnetType' => 'getElbVirsubnetType',
            'ipTargetEnable' => 'getIpTargetEnable',
            'frozenScene' => 'getFrozenScene',
            'ipv6Bandwidth' => 'getIpv6Bandwidth',
            'deletionProtectionEnable' => 'getDeletionProtectionEnable',
            'autoscaling' => 'getAutoscaling',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'chargeMode' => 'getChargeMode',
            'wafFailureAction' => 'getWafFailureAction',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'logGroupId' => 'getLogGroupId',
            'logTopicId' => 'getLogTopicId'
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
        $this->container['publicips'] = isset($data['publicips']) ? $data['publicips'] : null;
        $this->container['globalEips'] = isset($data['globalEips']) ? $data['globalEips'] : null;
        $this->container['elbVirsubnetIds'] = isset($data['elbVirsubnetIds']) ? $data['elbVirsubnetIds'] : null;
        $this->container['elbVirsubnetType'] = isset($data['elbVirsubnetType']) ? $data['elbVirsubnetType'] : null;
        $this->container['ipTargetEnable'] = isset($data['ipTargetEnable']) ? $data['ipTargetEnable'] : null;
        $this->container['frozenScene'] = isset($data['frozenScene']) ? $data['frozenScene'] : null;
        $this->container['ipv6Bandwidth'] = isset($data['ipv6Bandwidth']) ? $data['ipv6Bandwidth'] : null;
        $this->container['deletionProtectionEnable'] = isset($data['deletionProtectionEnable']) ? $data['deletionProtectionEnable'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['wafFailureAction'] = isset($data['wafFailureAction']) ? $data['wafFailureAction'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
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
        if ($this->container['ipv6Bandwidth'] === null) {
            $invalidProperties[] = "'ipv6Bandwidth' can't be null";
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
    *  参数解释：负载均衡器ID。
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
    * @param string $id 参数解释：负载均衡器ID。
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
    *  参数解释：负载均衡器描述信息。
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
    * @param string $description 参数解释：负载均衡器描述信息。
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
    *  参数解释：负载均衡器的配置状态。  取值范围： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
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
    * @param string $provisioningStatus 参数解释：负载均衡器的配置状态。  取值范围： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
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
    *  参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
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
    * @param bool $adminStateUp 参数解释：负载均衡器的启用状态。  取值范围： - true ：启用。 - false：停用。  [不支持该字段，请勿使用。](tag:dt,dt_test)
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
    *  参数解释：负载均衡器的生产者名称。固定为vlb。
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
    * @param string $provider 参数解释：负载均衡器的生产者名称。固定为vlb。
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
    *  参数解释：负载均衡器直接关联的后端服务器组的ID列表。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PoolRef[] $pools 参数解释：负载均衡器直接关联的后端服务器组的ID列表。
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
    *  参数解释：负载均衡器关联的监听器的ID列表。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[] $listeners 参数解释：负载均衡器关联的监听器的ID列表。
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
    *  参数解释：负载均衡器的操作状态。  取值范围： - ONLINE：在线。 - FROZEN：已冻结。
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
    * @param string $operatingStatus 参数解释：负载均衡器的操作状态。  取值范围： - ONLINE：在线。 - FROZEN：已冻结。
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
    *  参数解释：负载均衡器的名称。
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
    * @param string $name 参数解释：负载均衡器的名称。
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
    *  参数解释：负载均衡器所属的项目ID。
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
    * @param string $projectId 参数解释：负载均衡器所属的项目ID。
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
    *  参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。
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
    * @param string $vipSubnetCidrId 参数解释：负载均衡器所在子网的IPv4子网ID，也称为该负载均衡器实例的前端子网。
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
    *  参数解释：负载均衡器的IPv4虚拟IP地址。
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
    * @param string $vipAddress 参数解释：负载均衡器的IPv4虚拟IP地址。
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
    *  参数解释：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
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
    * @param string $vipPortId 参数解释：负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
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
    *  参数解释：负载均衡的标签列表。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\Tag[] $tags 参数解释：负载均衡的标签列表。
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
    *  参数解释：负载均衡器的创建时间。  取值范围： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    * @param string $createdAt 参数解释：负载均衡器的创建时间。  取值范围： 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    *  参数解释：负载均衡器的更新时间。  取值范围; 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    * @param string $updatedAt 参数解释：负载均衡器的更新时间。  取值范围; 格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    *  参数解释：是否独享型LB。  取值范围： - false：共享型。 - true：独享型。
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
    * @param bool $guaranteed 参数解释：是否独享型LB。  取值范围： - false：共享型。 - true：独享型。
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
    *  参数解释：负载均衡器所在VPC ID。
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
    * @param string $vpcId 参数解释：负载均衡器所在VPC ID。
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
    *  参数解释：负载均衡器绑定的EIP。  约束限制：只支持绑定一个EIP。  注：该字段与publicips一致。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\EipInfo[] $eips 参数解释：负载均衡器绑定的EIP。  约束限制：只支持绑定一个EIP。  注：该字段与publicips一致。
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
    *  参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    * @param string $ipv6VipAddress 参数解释：双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    *  参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    * @param string $ipv6VipVirsubnetId 参数解释：双栈类型负载均衡器所在子网的IPv6网络ID，也称为该负载均衡器实例的前端子网。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    *  参数解释：双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    * @param string $ipv6VipPortId 参数解释：双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    *  参数解释：负载均衡器所在的可用区列表。
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
    * @param string[] $availabilityZoneList 参数解释：负载均衡器所在的可用区列表。
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
    *  参数解释：企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注意：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt)
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
    * @param string $enterpriseProjectId 参数解释：企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注意：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt)
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
    *  参数解释：资源账单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
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
    * @param string $billingInfo 参数解释：资源账单信息。  取值范围： - 空：按需计费。 [- 非空：包周期计费，格式为：order_id:product_id:region_id:project_id。如：CS2107161019CDJZZ:OFFI569702121789763584:az1:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_eu_wb,hws_test,srg,fcs,fcs_vm,dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,ct)
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
    *  参数解释：网络型规格ID。  对于弹性扩缩容实例，表示上限规格。  约束限制： - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    * @param string $l4FlavorId 参数解释：网络型规格ID。  对于弹性扩缩容实例，表示上限规格。  约束限制： - 当传入的规格类型为L4，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L4_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    *  参数解释：四层弹性Flavor ID。  不支持该字段，请勿使用。
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
    * @param string $l4ScaleFlavorId 参数解释：四层弹性Flavor ID。  不支持该字段，请勿使用。
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
    *  参数解释：应用型ID。 对于弹性扩缩容实例，表示上限规格ID。  约束限制： - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    * @param string $l7FlavorId 参数解释：应用型ID。 对于弹性扩缩容实例，表示上限规格ID。  约束限制： - 当传入的规格类型为L7，表示该实例为固定规格实例，按规格计费； - 当传入的规格类型为L7_elastic_max，表示该实例为弹性实例，按LCU计费  [hsco场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:hk_vdf,srg,fcs)
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
    *  参数解释：七层弹性Flavor ID。  不支持该字段，请勿使用。
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
    * @param string $l7ScaleFlavorId 参数解释：七层弹性Flavor ID。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setL7ScaleFlavorId($l7ScaleFlavorId)
    {
        $this->container['l7ScaleFlavorId'] = $l7ScaleFlavorId;
        return $this;
    }

    /**
    * Gets publicips
    *  参数解释：负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PublicIpInfo[] $publicips 参数解释：负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
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
    *  参数解释：负载均衡器绑定的global eip。  约束限制：只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[] $globalEips 参数解释：负载均衡器绑定的global eip。  约束限制：只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,srg,fcs,ctc,ocb,hws_ocb)
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
    *  参数解释：下联面子网的网络ID列表。
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
    * @param string[] $elbVirsubnetIds 参数解释：下联面子网的网络ID列表。
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
    *  参数解释：下联面子网类型。  取值范围： - ipv4：ipv4 - dualstack：双栈
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
    * @param string $elbVirsubnetType 参数解释：下联面子网类型。  取值范围： - ipv4：ipv4 - dualstack：双栈
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
    *  参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
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
    * @param bool $ipTargetEnable 参数解释：是否启用跨VPC后端转发。 [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他公有云、云下数据中心的服务器。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt,hcso_dt,hws_eu) [开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加其他VPC、其他云、云下数据中心的服务器。](tag:srg,fcs)  约束限制： - 开启后不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt) [- 网关型LB不支持该特性。](tag:hws_eu)  取值范围： - true：开启。 - false：不开启。  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
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
    *  参数解释：负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值范围： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
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
    * @param string $frozenScene 参数解释：负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值范围： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    *
    * @return $this
    */
    public function setFrozenScene($frozenScene)
    {
        $this->container['frozenScene'] = $frozenScene;
        return $this;
    }

    /**
    * Gets ipv6Bandwidth
    *  ipv6Bandwidth
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\BandwidthRef
    */
    public function getIpv6Bandwidth()
    {
        return $this->container['ipv6Bandwidth'];
    }

    /**
    * Sets ipv6Bandwidth
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\BandwidthRef $ipv6Bandwidth ipv6Bandwidth
    *
    * @return $this
    */
    public function setIpv6Bandwidth($ipv6Bandwidth)
    {
        $this->container['ipv6Bandwidth'] = $ipv6Bandwidth;
        return $this;
    }

    /**
    * Gets deletionProtectionEnable
    *  参数解释：是否开启删除保护。  约束限制： - 仅当前局点启用删除保护特性后才会返回该字段。 - 退场时需要先关闭所有资源的删除保护开关。  取值范围： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
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
    * @param bool|null $deletionProtectionEnable 参数解释：是否开启删除保护。  约束限制： - 仅当前局点启用删除保护特性后才会返回该字段。 - 退场时需要先关闭所有资源的删除保护开关。  取值范围： - false：不开启。 - true：开启。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
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
    *  参数解释：LB所属AZ组。
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
    * @param string|null $publicBorderGroup 参数解释：LB所属AZ组。
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
    *  参数解释：负载均衡器实例的计费模式。  取值范围： - flavor：按规格计费 - lcu：按使用量计费 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。
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
    * @param string|null $chargeMode 参数解释：负载均衡器实例的计费模式。  取值范围： - flavor：按规格计费 - lcu：按使用量计费 - 空值：若是共享型表示免费实例。若是独享型则与flavor模式一致，都是按规格计费。
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
    *  参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
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
    * @param string|null $wafFailureAction 参数解释：WAF故障时的流量处理策略。  约束限制：只有绑定了waf的LB实例，该字段才会生效。  取值范围：discard:丢弃，forward: 转发到后端。  默认取值：forward  [不支持该字段，请勿使用。](tag:hws_eu,hws_test,hcs,hcs_sm,hcso,hk_vdf,srg,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,ct,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
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
    *  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
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
    * @param string|null $protectionStatus 参数解释：修改保护状态。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
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
    * Gets logGroupId
    *  参数解释：LB所绑定的logtank对应的group id
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
    * @param string|null $logGroupId 参数解释：LB所绑定的logtank对应的group id
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
    *  参数解释：LB所绑定的logtank对应的topic id
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
    * @param string|null $logTopicId 参数解释：LB所绑定的logtank对应的topic id
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
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

