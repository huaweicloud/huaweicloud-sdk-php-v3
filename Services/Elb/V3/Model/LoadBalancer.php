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
    * id  负载均衡器ID。
    * description  负载均衡器描述信息。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  负载均衡器的管理状态。取值：false停用，true启用。
    * provider  负载均衡器的生产者名称。固定为vlb。
    * pools  负载均衡器直接关联的后端云服务器组的ID列表。
    * listeners  负载均衡器关联的监听器的ID列表。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：在线。
    * name  负载均衡器的名称。
    * projectId  负载均衡器所属的项目ID。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * vipPortId  负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  负载均衡的标签列表。
    * createdAt  负载均衡器的创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  负载均衡器的更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  是否独享型LB。  取值： - false：共享型。 - true：独享型。
    * vpcId  负载均衡器所在VPC ID。
    * eips  负载均衡器绑定的EIP。只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  负载均衡器所在的可用区列表。
    * enterpriseProjectId  企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt,ctc,cmcc)
    * billingInfo  资源账单信息。  [取值： - 空：按需计费。 - 非空：包周期计费，  包周期计费billing_info字段的格式为：order_id:product_id:region_id:project_id，如：  CS2107161019CDJZZ:OFFI569702121789763584: az:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用](tag:hws_ocb,ocb,hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l4ScaleFlavorId  四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt) [- autoscaling.enable=true时，修改无意义，不生效。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l7ScaleFlavorId  七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  负载均衡器绑定的global eip。只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  下联面子网的网络ID列表。
    * elbVirsubnetType  下联面子网类型 - ipv4：ipv4 - dualstack：双栈  [不支持dualstack。](tag:dt,dt_test)
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * frozenScene  负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  是否开启删除保护。  取值： - false：不开启。 - true：开启。 >退场时需要先关闭所有资源的删除保护开关。  仅当前局点启用删除保护特性后才会返回该字段。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * autoscaling  autoscaling
    * publicBorderGroup  LB所属AZ组
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
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
            'wafFailureAction' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  负载均衡器ID。
    * description  负载均衡器描述信息。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  负载均衡器的管理状态。取值：false停用，true启用。
    * provider  负载均衡器的生产者名称。固定为vlb。
    * pools  负载均衡器直接关联的后端云服务器组的ID列表。
    * listeners  负载均衡器关联的监听器的ID列表。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：在线。
    * name  负载均衡器的名称。
    * projectId  负载均衡器所属的项目ID。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * vipPortId  负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  负载均衡的标签列表。
    * createdAt  负载均衡器的创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  负载均衡器的更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  是否独享型LB。  取值： - false：共享型。 - true：独享型。
    * vpcId  负载均衡器所在VPC ID。
    * eips  负载均衡器绑定的EIP。只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  负载均衡器所在的可用区列表。
    * enterpriseProjectId  企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt,ctc,cmcc)
    * billingInfo  资源账单信息。  [取值： - 空：按需计费。 - 非空：包周期计费，  包周期计费billing_info字段的格式为：order_id:product_id:region_id:project_id，如：  CS2107161019CDJZZ:OFFI569702121789763584: az:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用](tag:hws_ocb,ocb,hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l4ScaleFlavorId  四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt) [- autoscaling.enable=true时，修改无意义，不生效。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l7ScaleFlavorId  七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  负载均衡器绑定的global eip。只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  下联面子网的网络ID列表。
    * elbVirsubnetType  下联面子网类型 - ipv4：ipv4 - dualstack：双栈  [不支持dualstack。](tag:dt,dt_test)
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * frozenScene  负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  是否开启删除保护。  取值： - false：不开启。 - true：开启。 >退场时需要先关闭所有资源的删除保护开关。  仅当前局点启用删除保护特性后才会返回该字段。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * autoscaling  autoscaling
    * publicBorderGroup  LB所属AZ组
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
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
    * id  负载均衡器ID。
    * description  负载均衡器描述信息。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  负载均衡器的管理状态。取值：false停用，true启用。
    * provider  负载均衡器的生产者名称。固定为vlb。
    * pools  负载均衡器直接关联的后端云服务器组的ID列表。
    * listeners  负载均衡器关联的监听器的ID列表。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：在线。
    * name  负载均衡器的名称。
    * projectId  负载均衡器所属的项目ID。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * vipPortId  负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  负载均衡的标签列表。
    * createdAt  负载均衡器的创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  负载均衡器的更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  是否独享型LB。  取值： - false：共享型。 - true：独享型。
    * vpcId  负载均衡器所在VPC ID。
    * eips  负载均衡器绑定的EIP。只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  负载均衡器所在的可用区列表。
    * enterpriseProjectId  企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt,ctc,cmcc)
    * billingInfo  资源账单信息。  [取值： - 空：按需计费。 - 非空：包周期计费，  包周期计费billing_info字段的格式为：order_id:product_id:region_id:project_id，如：  CS2107161019CDJZZ:OFFI569702121789763584: az:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用](tag:hws_ocb,ocb,hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l4ScaleFlavorId  四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt) [- autoscaling.enable=true时，修改无意义，不生效。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l7ScaleFlavorId  七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  负载均衡器绑定的global eip。只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  下联面子网的网络ID列表。
    * elbVirsubnetType  下联面子网类型 - ipv4：ipv4 - dualstack：双栈  [不支持dualstack。](tag:dt,dt_test)
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * frozenScene  负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  是否开启删除保护。  取值： - false：不开启。 - true：开启。 >退场时需要先关闭所有资源的删除保护开关。  仅当前局点启用删除保护特性后才会返回该字段。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * autoscaling  autoscaling
    * publicBorderGroup  LB所属AZ组
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
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
            'wafFailureAction' => 'waf_failure_action',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  负载均衡器ID。
    * description  负载均衡器描述信息。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  负载均衡器的管理状态。取值：false停用，true启用。
    * provider  负载均衡器的生产者名称。固定为vlb。
    * pools  负载均衡器直接关联的后端云服务器组的ID列表。
    * listeners  负载均衡器关联的监听器的ID列表。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：在线。
    * name  负载均衡器的名称。
    * projectId  负载均衡器所属的项目ID。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * vipPortId  负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  负载均衡的标签列表。
    * createdAt  负载均衡器的创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  负载均衡器的更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  是否独享型LB。  取值： - false：共享型。 - true：独享型。
    * vpcId  负载均衡器所在VPC ID。
    * eips  负载均衡器绑定的EIP。只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  负载均衡器所在的可用区列表。
    * enterpriseProjectId  企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt,ctc,cmcc)
    * billingInfo  资源账单信息。  [取值： - 空：按需计费。 - 非空：包周期计费，  包周期计费billing_info字段的格式为：order_id:product_id:region_id:project_id，如：  CS2107161019CDJZZ:OFFI569702121789763584: az:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用](tag:hws_ocb,ocb,hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l4ScaleFlavorId  四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt) [- autoscaling.enable=true时，修改无意义，不生效。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l7ScaleFlavorId  七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  负载均衡器绑定的global eip。只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  下联面子网的网络ID列表。
    * elbVirsubnetType  下联面子网类型 - ipv4：ipv4 - dualstack：双栈  [不支持dualstack。](tag:dt,dt_test)
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * frozenScene  负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  是否开启删除保护。  取值： - false：不开启。 - true：开启。 >退场时需要先关闭所有资源的删除保护开关。  仅当前局点启用删除保护特性后才会返回该字段。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * autoscaling  autoscaling
    * publicBorderGroup  LB所属AZ组
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
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
            'wafFailureAction' => 'setWafFailureAction',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  负载均衡器ID。
    * description  负载均衡器描述信息。
    * provisioningStatus  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
    * adminStateUp  负载均衡器的管理状态。取值：false停用，true启用。
    * provider  负载均衡器的生产者名称。固定为vlb。
    * pools  负载均衡器直接关联的后端云服务器组的ID列表。
    * listeners  负载均衡器关联的监听器的ID列表。
    * operatingStatus  负载均衡器的操作状态。  取值： - ONLINE：在线。
    * name  负载均衡器的名称。
    * projectId  负载均衡器所属的项目ID。
    * vipSubnetCidrId  负载均衡器所在子网的IPv4子网ID。
    * vipAddress  负载均衡器的IPv4虚拟IP地址。
    * vipPortId  负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
    * tags  负载均衡的标签列表。
    * createdAt  负载均衡器的创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * updatedAt  负载均衡器的更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
    * guaranteed  是否独享型LB。  取值： - false：共享型。 - true：独享型。
    * vpcId  负载均衡器所在VPC ID。
    * eips  负载均衡器绑定的EIP。只支持绑定一个EIP。  注：该字段与publicips一致。
    * ipv6VipAddress  双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * ipv6VipPortId  双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
    * availabilityZoneList  负载均衡器所在的可用区列表。
    * enterpriseProjectId  企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt,ctc,cmcc)
    * billingInfo  资源账单信息。  [取值： - 空：按需计费。 - 非空：包周期计费，  包周期计费billing_info字段的格式为：order_id:product_id:region_id:project_id，如：  CS2107161019CDJZZ:OFFI569702121789763584: az:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用](tag:hws_ocb,ocb,hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
    * l4FlavorId  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l4ScaleFlavorId  四层弹性Flavor ID。  不支持该字段，请勿使用。
    * l7FlavorId  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt) [- autoscaling.enable=true时，修改无意义，不生效。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
    * l7ScaleFlavorId  七层弹性Flavor ID。  不支持该字段，请勿使用。
    * publicips  负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
    * globalEips  负载均衡器绑定的global eip。只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,ocb,hws_ocb)
    * elbVirsubnetIds  下联面子网的网络ID列表。
    * elbVirsubnetType  下联面子网类型 - ipv4：ipv4 - dualstack：双栈  [不支持dualstack。](tag:dt,dt_test)
    * ipTargetEnable  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
    * frozenScene  负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
    * ipv6Bandwidth  ipv6Bandwidth
    * deletionProtectionEnable  是否开启删除保护。  取值： - false：不开启。 - true：开启。 >退场时需要先关闭所有资源的删除保护开关。  仅当前局点启用删除保护特性后才会返回该字段。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
    * autoscaling  autoscaling
    * publicBorderGroup  LB所属AZ组
    * wafFailureAction  WAF故障时的流量处理策略。discard:丢弃，forward: 转发到后端（默认）  使用说明：只有绑定了waf的LB实例，该字段才会生效。  [不支持该字段，请勿使用。](tag:hws_hk,hws_eu,hws_test,hcs,hcs_sm,hcso,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b,hcso_dt,dt,dt_test,ocb,ctc,cmcc,tm,sbc,g42,hws_ocb,hk_sbc,hk_tm,hk_g42)
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  设置保护的原因 >仅当protection_status为consoleProtection时有效。
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
    *  负载均衡器ID。
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
    * @param string $id 负载均衡器ID。
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
    *  负载均衡器描述信息。
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
    * @param string $description 负载均衡器描述信息。
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
    *  负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
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
    * @param string $provisioningStatus 负载均衡器的配置状态。  取值： - ACTIVE：使用中。 - PENDING_DELETE：删除中。
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
    *  负载均衡器的管理状态。取值：false停用，true启用。
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
    * @param bool $adminStateUp 负载均衡器的管理状态。取值：false停用，true启用。
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
    *  负载均衡器的生产者名称。固定为vlb。
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
    * @param string $provider 负载均衡器的生产者名称。固定为vlb。
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
    *  负载均衡器直接关联的后端云服务器组的ID列表。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PoolRef[] $pools 负载均衡器直接关联的后端云服务器组的ID列表。
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
    *  负载均衡器关联的监听器的ID列表。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[] $listeners 负载均衡器关联的监听器的ID列表。
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
    *  负载均衡器的操作状态。  取值： - ONLINE：在线。
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
    * @param string $operatingStatus 负载均衡器的操作状态。  取值： - ONLINE：在线。
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
    *  负载均衡器的名称。
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
    * @param string $name 负载均衡器的名称。
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
    *  负载均衡器所属的项目ID。
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
    * @param string $projectId 负载均衡器所属的项目ID。
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
    *  负载均衡器所在子网的IPv4子网ID。
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
    * @param string $vipSubnetCidrId 负载均衡器所在子网的IPv4子网ID。
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
    *  负载均衡器的IPv4虚拟IP地址。
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
    * @param string $vipAddress 负载均衡器的IPv4虚拟IP地址。
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
    *  负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
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
    * @param string $vipPortId 负载均衡器的IPv4对应的port ID。 [创建弹性负载均衡时，会自动为负载均衡创建一个port并关联一个默认的安全组，这个安全组对所有流量不生效。 ](tag:dt,dt_test,hcso_dt)
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
    *  负载均衡的标签列表。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\Tag[] $tags 负载均衡的标签列表。
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
    *  负载均衡器的创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    * @param string $createdAt 负载均衡器的创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    *  负载均衡器的更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    * @param string $updatedAt 负载均衡器的更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'
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
    *  是否独享型LB。  取值： - false：共享型。 - true：独享型。
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
    * @param bool $guaranteed 是否独享型LB。  取值： - false：共享型。 - true：独享型。
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
    *  负载均衡器所在VPC ID。
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
    * @param string $vpcId 负载均衡器所在VPC ID。
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
    *  负载均衡器绑定的EIP。只支持绑定一个EIP。  注：该字段与publicips一致。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\EipInfo[] $eips 负载均衡器绑定的EIP。只支持绑定一个EIP。  注：该字段与publicips一致。
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
    *  双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    * @param string $ipv6VipAddress 双栈类型负载均衡器的IPv6地址。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    *  双栈类型负载均衡器所在子网的IPv6网络ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    * @param string $ipv6VipVirsubnetId 双栈类型负载均衡器所在子网的IPv6网络ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    *  双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    * @param string $ipv6VipPortId 双栈类型负载均衡器的IPv6对应的port ID。  [不支持IPv6，请勿使用。](tag:dt,dt_test)
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
    *  负载均衡器所在的可用区列表。
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
    * @param string[] $availabilityZoneList 负载均衡器所在的可用区列表。
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
    *  企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt,ctc,cmcc)
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
    * @param string $enterpriseProjectId 企业项目ID。创建时不传则返回\"0\"，表示资源属于default企业项目。  注：\"0\"并不是真实存在的企业项目ID，在创建、更新和查询时不能作为请求参数传入。  [不支持该字段，请勿使用](tag:dt,dt_test,hcso_dt,ctc,cmcc)
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
    *  资源账单信息。  [取值： - 空：按需计费。 - 非空：包周期计费，  包周期计费billing_info字段的格式为：order_id:product_id:region_id:project_id，如：  CS2107161019CDJZZ:OFFI569702121789763584: az:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用](tag:hws_ocb,ocb,hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
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
    * @param string $billingInfo 资源账单信息。  [取值： - 空：按需计费。 - 非空：包周期计费，  包周期计费billing_info字段的格式为：order_id:product_id:region_id:project_id，如：  CS2107161019CDJZZ:OFFI569702121789763584: az:057ef081eb00d2732fd1c01a9be75e6f](tag:hws)  [不支持该字段，请勿使用](tag:hws_ocb,ocb,hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,cmcc)
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
    *  四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
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
    * @param string $l4FlavorId 四层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt)  [只支持设置为l4_flavor.elb.shared。](tag:hcso_dt)  [hcso场景下所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
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
    *  四层弹性Flavor ID。  不支持该字段，请勿使用。
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
    * @param string $l4ScaleFlavorId 四层弹性Flavor ID。  不支持该字段，请勿使用。
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
    *  七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt) [- autoscaling.enable=true时，修改无意义，不生效。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
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
    * @param string $l7FlavorId 七层Flavor ID。[对于弹性扩缩容实例，表示上限规格ID。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [使用说明： - 仅当guaranteed是true的场合，才支持更新。 - 不允许非null变成null，null变成非null，即不配置七层规格和配置七层规格之间不允许切换； - 可以支持规格改大改小，注意改小过程中可能会造成部分长连接中断，影响部分链接的新建， ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,dt) [- autoscaling.enable=true时，修改无意义，不生效。](tag:hws,hws_hk,ocb,ctc,cmcc,hws_ocb)  [只支持设置为l7_flavor.elb.shared。](tag:hcso_dt)  [所有LB实例共享带宽，该字段无效，请勿使用。](tag:fcs)
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
    *  七层弹性Flavor ID。  不支持该字段，请勿使用。
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
    * @param string $l7ScaleFlavorId 七层弹性Flavor ID。  不支持该字段，请勿使用。
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
    *  负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PublicIpInfo[] $publicips 负载均衡器绑定的公网IP。只支持绑定一个公网IP。  注：该字段与eips一致。
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
    *  负载均衡器绑定的global eip。只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,ocb,hws_ocb)
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\GlobalEipInfo[] $globalEips 负载均衡器绑定的global eip。只支持绑定一个globaleip。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,fcs,ctc,ocb,hws_ocb)
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
    *  下联面子网的网络ID列表。
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
    * @param string[] $elbVirsubnetIds 下联面子网的网络ID列表。
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
    *  下联面子网类型 - ipv4：ipv4 - dualstack：双栈  [不支持dualstack。](tag:dt,dt_test)
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
    * @param string $elbVirsubnetType 下联面子网类型 - ipv4：ipv4 - dualstack：双栈  [不支持dualstack。](tag:dt,dt_test)
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
    *  是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
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
    * @param bool $ipTargetEnable 是否启用跨VPC后端转发。 开启跨VPC后端转发后，后端服务器组不仅支持添加云上VPC内的服务器，还支持添加 [其他VPC、](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs) 其他云、云下数据中心的服务器。  取值： - true：开启。 - false：不开启。  使用说明： - 开启不能关闭。 - 使用共享VPC的实例使用此特性时，需确保共享资源所有者已开通VPC对等连接，否则通信异常。 [- 仅独享型负载均衡器支持该特性。](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,fcs,dt)
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
    *  负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
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
    * @param string $frozenScene 负载均衡器的冻结场景。 [若负载均衡器有多个冻结场景，用逗号分隔。  取值： - POLICE：公安冻结场景。 - ILLEGAL：违规冻结场景。 - VERIFY：客户未实名认证冻结场景。 - PARTNER：合作伙伴冻结（合作伙伴冻结子客户资源）。 - AREAR：欠费冻结场景。](tag:hws,hws_hk)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,ocb,hws_ocb)
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
    *  是否开启删除保护。  取值： - false：不开启。 - true：开启。 >退场时需要先关闭所有资源的删除保护开关。  仅当前局点启用删除保护特性后才会返回该字段。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
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
    * @param bool|null $deletionProtectionEnable 是否开启删除保护。  取值： - false：不开启。 - true：开启。 >退场时需要先关闭所有资源的删除保护开关。  仅当前局点启用删除保护特性后才会返回该字段。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)
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
    *  LB所属AZ组
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
    * @param string|null $publicBorderGroup LB所属AZ组
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
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
    *  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
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
    * @param string|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
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

