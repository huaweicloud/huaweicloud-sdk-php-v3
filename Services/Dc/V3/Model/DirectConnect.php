<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DirectConnect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DirectConnect';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  物理专线标识符ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线描述信息
    * portType  物理专线接入接口的类型，支持1G 10G 40G 100G
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * deviceId  物理专线连接的设备的标识ID
    * type  物理专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * chargeMode  计费模式：prepayment/bandwidth/traffic
    * provider  物理专线连接的线路运营商 [如：中国电信 中国联通 中国移动 中国其他 境外其他专线归属的运营商](tag:hws,hws_hk)
    * adminStateUp  管理状态：true或false
    * vlan  为托管hosted物理专线分配的vlan。
    * status  资源状态，合法值是： ACTIVE：专线已经开通完成且线路处于正常状态 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 BUILD：申请专线正在施工建设中 ERROR：专线配置异常，请联系客服解决相关问题。 PENDING_DELETE：正在删除 DELETED：已删除 APPLY：申请开通 DENY：客户需求无法满足，拒绝工勘。 PENDING_PAY：待支付 PAID：已支付 PENDING_SURVEY：待工勘 LEASED_LINE_DELIVERY：运营商施工
    * applyTime  物理专线的申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  物理专线的创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * peerPortType  连接对端的端口类型
    * peerProvider  专线连接对接的运营商
    * orderId  物理专线对应订单号，用于支持包周期计费，识别用户订单
    * productId  物理专线订单对应产品标识，用于订制包周期套餐等计费策略
    * specCode  物理专线订单对应产品规格，用于订制包周期套餐等计费策略
    * periodType  物理专线对应订单号对应包周期的类型
    * periodNum  物理专线对应的包周期时间
    * vgwType  专线要求的网关类型
    * lagId  物理专线归属的链路聚合组（lag）的ID
    * signedAgreementStatus  专线协议的签署状态
    * signedAgreementTime  专线协议的签署时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * locales  locales
    * supportFeature  用户专线可支持的特性列表[（功能暂不支持）](tag:dt)
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果专线资源的状态是Error的情况下，该参数会显示相关错误信息。[（功能暂不支持）](tag:dt)
    * email  客户邮箱信息[（功能暂不支持）](tag:dt)
    * onestopProductId  该参数用于销售线路场景，标识一站式专线产品ID[（功能暂不支持）](tag:dt)
    * buildingLineProductId  该参数用于销售线路场景，标识机房内部线路资源产品ID[（功能暂不支持）](tag:dt)
    * lastOnestopProductId  该参数用于销售线路场景，标识变更前的一站式专线产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * lastBuildingLineProductId  该参数用于销售线路场景，标识变更前机房内部线路资源产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * modifiedBandwidth  线路带宽变更后的带宽值[（功能暂不支持）](tag:dt)
    * changeMode  标识续费变更的一种状态[（功能暂不支持）](tag:dt)
    * onestopdcStatus  一站式专线状态[（功能暂不支持）](tag:dt)
    * publicBorderGroup  归属的可用区对应的边界组(public border group)，标识是否homezone局点。[（功能暂不支持）](tag:dt)
    * autoRenew  用于标识包周期产品是否自动续订[（功能暂不支持）](tag:dt)
    * ratio95peak  95计费保底带宽率[（功能暂不支持）](tag:dt)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'portType' => 'string',
            'bandwidth' => 'int',
            'location' => 'string',
            'peerLocation' => 'string',
            'deviceId' => 'string',
            'type' => 'string',
            'hostingId' => 'string',
            'chargeMode' => 'string',
            'provider' => 'string',
            'adminStateUp' => 'bool',
            'vlan' => 'int',
            'status' => 'string',
            'applyTime' => '\DateTime',
            'createTime' => '\DateTime',
            'providerStatus' => 'string',
            'peerPortType' => 'string',
            'peerProvider' => 'string',
            'orderId' => 'string',
            'productId' => 'string',
            'specCode' => 'string',
            'periodType' => 'int',
            'periodNum' => 'int',
            'vgwType' => 'string',
            'lagId' => 'string',
            'signedAgreementStatus' => 'string',
            'signedAgreementTime' => '\DateTime',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dc\V3\Model\Tag[]',
            'locales' => '\HuaweiCloud\SDK\Dc\V3\Model\LocalesBody',
            'supportFeature' => 'string[]',
            'iesId' => 'string',
            'reason' => 'string',
            'email' => 'string',
            'onestopProductId' => 'string',
            'buildingLineProductId' => 'string',
            'lastOnestopProductId' => 'string',
            'lastBuildingLineProductId' => 'string',
            'modifiedBandwidth' => 'int',
            'changeMode' => 'int',
            'onestopdcStatus' => 'string',
            'publicBorderGroup' => 'string',
            'autoRenew' => 'int',
            'ratio95peak' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  物理专线标识符ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线描述信息
    * portType  物理专线接入接口的类型，支持1G 10G 40G 100G
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * deviceId  物理专线连接的设备的标识ID
    * type  物理专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * chargeMode  计费模式：prepayment/bandwidth/traffic
    * provider  物理专线连接的线路运营商 [如：中国电信 中国联通 中国移动 中国其他 境外其他专线归属的运营商](tag:hws,hws_hk)
    * adminStateUp  管理状态：true或false
    * vlan  为托管hosted物理专线分配的vlan。
    * status  资源状态，合法值是： ACTIVE：专线已经开通完成且线路处于正常状态 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 BUILD：申请专线正在施工建设中 ERROR：专线配置异常，请联系客服解决相关问题。 PENDING_DELETE：正在删除 DELETED：已删除 APPLY：申请开通 DENY：客户需求无法满足，拒绝工勘。 PENDING_PAY：待支付 PAID：已支付 PENDING_SURVEY：待工勘 LEASED_LINE_DELIVERY：运营商施工
    * applyTime  物理专线的申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  物理专线的创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * peerPortType  连接对端的端口类型
    * peerProvider  专线连接对接的运营商
    * orderId  物理专线对应订单号，用于支持包周期计费，识别用户订单
    * productId  物理专线订单对应产品标识，用于订制包周期套餐等计费策略
    * specCode  物理专线订单对应产品规格，用于订制包周期套餐等计费策略
    * periodType  物理专线对应订单号对应包周期的类型
    * periodNum  物理专线对应的包周期时间
    * vgwType  专线要求的网关类型
    * lagId  物理专线归属的链路聚合组（lag）的ID
    * signedAgreementStatus  专线协议的签署状态
    * signedAgreementTime  专线协议的签署时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * locales  locales
    * supportFeature  用户专线可支持的特性列表[（功能暂不支持）](tag:dt)
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果专线资源的状态是Error的情况下，该参数会显示相关错误信息。[（功能暂不支持）](tag:dt)
    * email  客户邮箱信息[（功能暂不支持）](tag:dt)
    * onestopProductId  该参数用于销售线路场景，标识一站式专线产品ID[（功能暂不支持）](tag:dt)
    * buildingLineProductId  该参数用于销售线路场景，标识机房内部线路资源产品ID[（功能暂不支持）](tag:dt)
    * lastOnestopProductId  该参数用于销售线路场景，标识变更前的一站式专线产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * lastBuildingLineProductId  该参数用于销售线路场景，标识变更前机房内部线路资源产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * modifiedBandwidth  线路带宽变更后的带宽值[（功能暂不支持）](tag:dt)
    * changeMode  标识续费变更的一种状态[（功能暂不支持）](tag:dt)
    * onestopdcStatus  一站式专线状态[（功能暂不支持）](tag:dt)
    * publicBorderGroup  归属的可用区对应的边界组(public border group)，标识是否homezone局点。[（功能暂不支持）](tag:dt)
    * autoRenew  用于标识包周期产品是否自动续订[（功能暂不支持）](tag:dt)
    * ratio95peak  95计费保底带宽率[（功能暂不支持）](tag:dt)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'portType' => null,
        'bandwidth' => 'int32',
        'location' => null,
        'peerLocation' => null,
        'deviceId' => null,
        'type' => null,
        'hostingId' => null,
        'chargeMode' => null,
        'provider' => null,
        'adminStateUp' => null,
        'vlan' => 'int32',
        'status' => null,
        'applyTime' => 'date-time',
        'createTime' => 'date-time',
        'providerStatus' => null,
        'peerPortType' => null,
        'peerProvider' => null,
        'orderId' => null,
        'productId' => null,
        'specCode' => null,
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'vgwType' => null,
        'lagId' => null,
        'signedAgreementStatus' => null,
        'signedAgreementTime' => 'date-time',
        'enterpriseProjectId' => null,
        'tags' => null,
        'locales' => null,
        'supportFeature' => null,
        'iesId' => null,
        'reason' => null,
        'email' => null,
        'onestopProductId' => null,
        'buildingLineProductId' => null,
        'lastOnestopProductId' => null,
        'lastBuildingLineProductId' => null,
        'modifiedBandwidth' => 'int32',
        'changeMode' => 'int32',
        'onestopdcStatus' => null,
        'publicBorderGroup' => null,
        'autoRenew' => null,
        'ratio95peak' => null
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
    * id  物理专线标识符ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线描述信息
    * portType  物理专线接入接口的类型，支持1G 10G 40G 100G
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * deviceId  物理专线连接的设备的标识ID
    * type  物理专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * chargeMode  计费模式：prepayment/bandwidth/traffic
    * provider  物理专线连接的线路运营商 [如：中国电信 中国联通 中国移动 中国其他 境外其他专线归属的运营商](tag:hws,hws_hk)
    * adminStateUp  管理状态：true或false
    * vlan  为托管hosted物理专线分配的vlan。
    * status  资源状态，合法值是： ACTIVE：专线已经开通完成且线路处于正常状态 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 BUILD：申请专线正在施工建设中 ERROR：专线配置异常，请联系客服解决相关问题。 PENDING_DELETE：正在删除 DELETED：已删除 APPLY：申请开通 DENY：客户需求无法满足，拒绝工勘。 PENDING_PAY：待支付 PAID：已支付 PENDING_SURVEY：待工勘 LEASED_LINE_DELIVERY：运营商施工
    * applyTime  物理专线的申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  物理专线的创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * peerPortType  连接对端的端口类型
    * peerProvider  专线连接对接的运营商
    * orderId  物理专线对应订单号，用于支持包周期计费，识别用户订单
    * productId  物理专线订单对应产品标识，用于订制包周期套餐等计费策略
    * specCode  物理专线订单对应产品规格，用于订制包周期套餐等计费策略
    * periodType  物理专线对应订单号对应包周期的类型
    * periodNum  物理专线对应的包周期时间
    * vgwType  专线要求的网关类型
    * lagId  物理专线归属的链路聚合组（lag）的ID
    * signedAgreementStatus  专线协议的签署状态
    * signedAgreementTime  专线协议的签署时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * locales  locales
    * supportFeature  用户专线可支持的特性列表[（功能暂不支持）](tag:dt)
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果专线资源的状态是Error的情况下，该参数会显示相关错误信息。[（功能暂不支持）](tag:dt)
    * email  客户邮箱信息[（功能暂不支持）](tag:dt)
    * onestopProductId  该参数用于销售线路场景，标识一站式专线产品ID[（功能暂不支持）](tag:dt)
    * buildingLineProductId  该参数用于销售线路场景，标识机房内部线路资源产品ID[（功能暂不支持）](tag:dt)
    * lastOnestopProductId  该参数用于销售线路场景，标识变更前的一站式专线产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * lastBuildingLineProductId  该参数用于销售线路场景，标识变更前机房内部线路资源产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * modifiedBandwidth  线路带宽变更后的带宽值[（功能暂不支持）](tag:dt)
    * changeMode  标识续费变更的一种状态[（功能暂不支持）](tag:dt)
    * onestopdcStatus  一站式专线状态[（功能暂不支持）](tag:dt)
    * publicBorderGroup  归属的可用区对应的边界组(public border group)，标识是否homezone局点。[（功能暂不支持）](tag:dt)
    * autoRenew  用于标识包周期产品是否自动续订[（功能暂不支持）](tag:dt)
    * ratio95peak  95计费保底带宽率[（功能暂不支持）](tag:dt)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'portType' => 'port_type',
            'bandwidth' => 'bandwidth',
            'location' => 'location',
            'peerLocation' => 'peer_location',
            'deviceId' => 'device_id',
            'type' => 'type',
            'hostingId' => 'hosting_id',
            'chargeMode' => 'charge_mode',
            'provider' => 'provider',
            'adminStateUp' => 'admin_state_up',
            'vlan' => 'vlan',
            'status' => 'status',
            'applyTime' => 'apply_time',
            'createTime' => 'create_time',
            'providerStatus' => 'provider_status',
            'peerPortType' => 'peer_port_type',
            'peerProvider' => 'peer_provider',
            'orderId' => 'order_id',
            'productId' => 'product_id',
            'specCode' => 'spec_code',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'vgwType' => 'vgw_type',
            'lagId' => 'lag_id',
            'signedAgreementStatus' => 'signed_agreement_status',
            'signedAgreementTime' => 'signed_agreement_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'locales' => 'locales',
            'supportFeature' => 'support_feature',
            'iesId' => 'ies_id',
            'reason' => 'reason',
            'email' => 'email',
            'onestopProductId' => 'onestop_product_id',
            'buildingLineProductId' => 'building_line_product_id',
            'lastOnestopProductId' => 'last_onestop_product_id',
            'lastBuildingLineProductId' => 'last_building_line_product_id',
            'modifiedBandwidth' => 'modified_bandwidth',
            'changeMode' => 'change_mode',
            'onestopdcStatus' => 'onestopdc_status',
            'publicBorderGroup' => 'public_border_group',
            'autoRenew' => 'auto_renew',
            'ratio95peak' => 'ratio_95peak'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  物理专线标识符ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线描述信息
    * portType  物理专线接入接口的类型，支持1G 10G 40G 100G
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * deviceId  物理专线连接的设备的标识ID
    * type  物理专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * chargeMode  计费模式：prepayment/bandwidth/traffic
    * provider  物理专线连接的线路运营商 [如：中国电信 中国联通 中国移动 中国其他 境外其他专线归属的运营商](tag:hws,hws_hk)
    * adminStateUp  管理状态：true或false
    * vlan  为托管hosted物理专线分配的vlan。
    * status  资源状态，合法值是： ACTIVE：专线已经开通完成且线路处于正常状态 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 BUILD：申请专线正在施工建设中 ERROR：专线配置异常，请联系客服解决相关问题。 PENDING_DELETE：正在删除 DELETED：已删除 APPLY：申请开通 DENY：客户需求无法满足，拒绝工勘。 PENDING_PAY：待支付 PAID：已支付 PENDING_SURVEY：待工勘 LEASED_LINE_DELIVERY：运营商施工
    * applyTime  物理专线的申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  物理专线的创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * peerPortType  连接对端的端口类型
    * peerProvider  专线连接对接的运营商
    * orderId  物理专线对应订单号，用于支持包周期计费，识别用户订单
    * productId  物理专线订单对应产品标识，用于订制包周期套餐等计费策略
    * specCode  物理专线订单对应产品规格，用于订制包周期套餐等计费策略
    * periodType  物理专线对应订单号对应包周期的类型
    * periodNum  物理专线对应的包周期时间
    * vgwType  专线要求的网关类型
    * lagId  物理专线归属的链路聚合组（lag）的ID
    * signedAgreementStatus  专线协议的签署状态
    * signedAgreementTime  专线协议的签署时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * locales  locales
    * supportFeature  用户专线可支持的特性列表[（功能暂不支持）](tag:dt)
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果专线资源的状态是Error的情况下，该参数会显示相关错误信息。[（功能暂不支持）](tag:dt)
    * email  客户邮箱信息[（功能暂不支持）](tag:dt)
    * onestopProductId  该参数用于销售线路场景，标识一站式专线产品ID[（功能暂不支持）](tag:dt)
    * buildingLineProductId  该参数用于销售线路场景，标识机房内部线路资源产品ID[（功能暂不支持）](tag:dt)
    * lastOnestopProductId  该参数用于销售线路场景，标识变更前的一站式专线产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * lastBuildingLineProductId  该参数用于销售线路场景，标识变更前机房内部线路资源产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * modifiedBandwidth  线路带宽变更后的带宽值[（功能暂不支持）](tag:dt)
    * changeMode  标识续费变更的一种状态[（功能暂不支持）](tag:dt)
    * onestopdcStatus  一站式专线状态[（功能暂不支持）](tag:dt)
    * publicBorderGroup  归属的可用区对应的边界组(public border group)，标识是否homezone局点。[（功能暂不支持）](tag:dt)
    * autoRenew  用于标识包周期产品是否自动续订[（功能暂不支持）](tag:dt)
    * ratio95peak  95计费保底带宽率[（功能暂不支持）](tag:dt)
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'portType' => 'setPortType',
            'bandwidth' => 'setBandwidth',
            'location' => 'setLocation',
            'peerLocation' => 'setPeerLocation',
            'deviceId' => 'setDeviceId',
            'type' => 'setType',
            'hostingId' => 'setHostingId',
            'chargeMode' => 'setChargeMode',
            'provider' => 'setProvider',
            'adminStateUp' => 'setAdminStateUp',
            'vlan' => 'setVlan',
            'status' => 'setStatus',
            'applyTime' => 'setApplyTime',
            'createTime' => 'setCreateTime',
            'providerStatus' => 'setProviderStatus',
            'peerPortType' => 'setPeerPortType',
            'peerProvider' => 'setPeerProvider',
            'orderId' => 'setOrderId',
            'productId' => 'setProductId',
            'specCode' => 'setSpecCode',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'vgwType' => 'setVgwType',
            'lagId' => 'setLagId',
            'signedAgreementStatus' => 'setSignedAgreementStatus',
            'signedAgreementTime' => 'setSignedAgreementTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'locales' => 'setLocales',
            'supportFeature' => 'setSupportFeature',
            'iesId' => 'setIesId',
            'reason' => 'setReason',
            'email' => 'setEmail',
            'onestopProductId' => 'setOnestopProductId',
            'buildingLineProductId' => 'setBuildingLineProductId',
            'lastOnestopProductId' => 'setLastOnestopProductId',
            'lastBuildingLineProductId' => 'setLastBuildingLineProductId',
            'modifiedBandwidth' => 'setModifiedBandwidth',
            'changeMode' => 'setChangeMode',
            'onestopdcStatus' => 'setOnestopdcStatus',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'autoRenew' => 'setAutoRenew',
            'ratio95peak' => 'setRatio95peak'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  物理专线标识符ID
    * tenantId  实例所属项目ID。
    * name  物理专线名字
    * description  物理专线描述信息
    * portType  物理专线接入接口的类型，支持1G 10G 40G 100G
    * bandwidth  物理专线接入带宽，单位Mbps。
    * location  专线的接入位置信息
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    * deviceId  物理专线连接的设备的标识ID
    * type  物理专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
    * hostingId  hosted物理专线对应的hosting物理专线的ID
    * chargeMode  计费模式：prepayment/bandwidth/traffic
    * provider  物理专线连接的线路运营商 [如：中国电信 中国联通 中国移动 中国其他 境外其他专线归属的运营商](tag:hws,hws_hk)
    * adminStateUp  管理状态：true或false
    * vlan  为托管hosted物理专线分配的vlan。
    * status  资源状态，合法值是： ACTIVE：专线已经开通完成且线路处于正常状态 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 BUILD：申请专线正在施工建设中 ERROR：专线配置异常，请联系客服解决相关问题。 PENDING_DELETE：正在删除 DELETED：已删除 APPLY：申请开通 DENY：客户需求无法满足，拒绝工勘。 PENDING_PAY：待支付 PAID：已支付 PENDING_SURVEY：待工勘 LEASED_LINE_DELIVERY：运营商施工
    * applyTime  物理专线的申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * createTime  物理专线的创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * providerStatus  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    * peerPortType  连接对端的端口类型
    * peerProvider  专线连接对接的运营商
    * orderId  物理专线对应订单号，用于支持包周期计费，识别用户订单
    * productId  物理专线订单对应产品标识，用于订制包周期套餐等计费策略
    * specCode  物理专线订单对应产品规格，用于订制包周期套餐等计费策略
    * periodType  物理专线对应订单号对应包周期的类型
    * periodNum  物理专线对应的包周期时间
    * vgwType  专线要求的网关类型
    * lagId  物理专线归属的链路聚合组（lag）的ID
    * signedAgreementStatus  专线协议的签署状态
    * signedAgreementTime  专线协议的签署时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    * enterpriseProjectId  实例所属企业项目ID
    * tags  标签信息
    * locales  locales
    * supportFeature  用户专线可支持的特性列表[（功能暂不支持）](tag:dt)
    * iesId  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    * reason  如果专线资源的状态是Error的情况下，该参数会显示相关错误信息。[（功能暂不支持）](tag:dt)
    * email  客户邮箱信息[（功能暂不支持）](tag:dt)
    * onestopProductId  该参数用于销售线路场景，标识一站式专线产品ID[（功能暂不支持）](tag:dt)
    * buildingLineProductId  该参数用于销售线路场景，标识机房内部线路资源产品ID[（功能暂不支持）](tag:dt)
    * lastOnestopProductId  该参数用于销售线路场景，标识变更前的一站式专线产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * lastBuildingLineProductId  该参数用于销售线路场景，标识变更前机房内部线路资源产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    * modifiedBandwidth  线路带宽变更后的带宽值[（功能暂不支持）](tag:dt)
    * changeMode  标识续费变更的一种状态[（功能暂不支持）](tag:dt)
    * onestopdcStatus  一站式专线状态[（功能暂不支持）](tag:dt)
    * publicBorderGroup  归属的可用区对应的边界组(public border group)，标识是否homezone局点。[（功能暂不支持）](tag:dt)
    * autoRenew  用于标识包周期产品是否自动续订[（功能暂不支持）](tag:dt)
    * ratio95peak  95计费保底带宽率[（功能暂不支持）](tag:dt)
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'portType' => 'getPortType',
            'bandwidth' => 'getBandwidth',
            'location' => 'getLocation',
            'peerLocation' => 'getPeerLocation',
            'deviceId' => 'getDeviceId',
            'type' => 'getType',
            'hostingId' => 'getHostingId',
            'chargeMode' => 'getChargeMode',
            'provider' => 'getProvider',
            'adminStateUp' => 'getAdminStateUp',
            'vlan' => 'getVlan',
            'status' => 'getStatus',
            'applyTime' => 'getApplyTime',
            'createTime' => 'getCreateTime',
            'providerStatus' => 'getProviderStatus',
            'peerPortType' => 'getPeerPortType',
            'peerProvider' => 'getPeerProvider',
            'orderId' => 'getOrderId',
            'productId' => 'getProductId',
            'specCode' => 'getSpecCode',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'vgwType' => 'getVgwType',
            'lagId' => 'getLagId',
            'signedAgreementStatus' => 'getSignedAgreementStatus',
            'signedAgreementTime' => 'getSignedAgreementTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'locales' => 'getLocales',
            'supportFeature' => 'getSupportFeature',
            'iesId' => 'getIesId',
            'reason' => 'getReason',
            'email' => 'getEmail',
            'onestopProductId' => 'getOnestopProductId',
            'buildingLineProductId' => 'getBuildingLineProductId',
            'lastOnestopProductId' => 'getLastOnestopProductId',
            'lastBuildingLineProductId' => 'getLastBuildingLineProductId',
            'modifiedBandwidth' => 'getModifiedBandwidth',
            'changeMode' => 'getChangeMode',
            'onestopdcStatus' => 'getOnestopdcStatus',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'autoRenew' => 'getAutoRenew',
            'ratio95peak' => 'getRatio95peak'
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
    const PORT_TYPE__1_G = '1G';
    const PORT_TYPE__10_G = '10G';
    const PORT_TYPE__40_G = '40G';
    const PORT_TYPE__100_G = '100G';
    const TYPE_STANDARD = 'standard';
    const TYPE_HOSTING = 'hosting';
    const TYPE_HOSTED = 'hosted';
    const TYPE_ONESTOP_STANDARD = 'onestop_standard';
    const TYPE_ONESTOP_HOSTED = 'onestop_hosted';
    const CHARGE_MODE_PREPAYMENT = 'prepayment';
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const CHARGE_MODE_TRAFFIC = 'traffic';
    const STATUS_BUILD = 'BUILD';
    const STATUS_PAID = 'PAID';
    const STATUS_APPLY = 'APPLY';
    const STATUS_PENDING_SURVEY = 'PENDING_SURVEY';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_DOWN = 'DOWN';
    const STATUS_ERROR = 'ERROR';
    const STATUS_PENDING_DELETE = 'PENDING_DELETE';
    const STATUS_DELETED = 'DELETED';
    const STATUS_DENY = 'DENY';
    const STATUS_PENDING_PAY = 'PENDING_PAY';
    const STATUS_LEASED_LINE_DELIVERY = 'LEASED_LINE_DELIVERY';
    const PROVIDER_STATUS_ACTIVE = 'ACTIVE';
    const PROVIDER_STATUS_DOWN = 'DOWN';
    const VGW_TYPE__DEFAULT = 'default';
    const SIGNED_AGREEMENT_STATUS_SIGNED = 'signed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPortTypeAllowableValues()
    {
        return [
            self::PORT_TYPE__1_G,
            self::PORT_TYPE__10_G,
            self::PORT_TYPE__40_G,
            self::PORT_TYPE__100_G,
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
            self::TYPE_STANDARD,
            self::TYPE_HOSTING,
            self::TYPE_HOSTED,
            self::TYPE_ONESTOP_STANDARD,
            self::TYPE_ONESTOP_HOSTED,
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
            self::CHARGE_MODE_PREPAYMENT,
            self::CHARGE_MODE_BANDWIDTH,
            self::CHARGE_MODE_TRAFFIC,
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
            self::STATUS_BUILD,
            self::STATUS_PAID,
            self::STATUS_APPLY,
            self::STATUS_PENDING_SURVEY,
            self::STATUS_ACTIVE,
            self::STATUS_DOWN,
            self::STATUS_ERROR,
            self::STATUS_PENDING_DELETE,
            self::STATUS_DELETED,
            self::STATUS_DENY,
            self::STATUS_PENDING_PAY,
            self::STATUS_LEASED_LINE_DELIVERY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderStatusAllowableValues()
    {
        return [
            self::PROVIDER_STATUS_ACTIVE,
            self::PROVIDER_STATUS_DOWN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVgwTypeAllowableValues()
    {
        return [
            self::VGW_TYPE__DEFAULT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSignedAgreementStatusAllowableValues()
    {
        return [
            self::SIGNED_AGREEMENT_STATUS_SIGNED,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['portType'] = isset($data['portType']) ? $data['portType'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['peerLocation'] = isset($data['peerLocation']) ? $data['peerLocation'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['hostingId'] = isset($data['hostingId']) ? $data['hostingId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['vlan'] = isset($data['vlan']) ? $data['vlan'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['providerStatus'] = isset($data['providerStatus']) ? $data['providerStatus'] : null;
        $this->container['peerPortType'] = isset($data['peerPortType']) ? $data['peerPortType'] : null;
        $this->container['peerProvider'] = isset($data['peerProvider']) ? $data['peerProvider'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['vgwType'] = isset($data['vgwType']) ? $data['vgwType'] : null;
        $this->container['lagId'] = isset($data['lagId']) ? $data['lagId'] : null;
        $this->container['signedAgreementStatus'] = isset($data['signedAgreementStatus']) ? $data['signedAgreementStatus'] : null;
        $this->container['signedAgreementTime'] = isset($data['signedAgreementTime']) ? $data['signedAgreementTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['locales'] = isset($data['locales']) ? $data['locales'] : null;
        $this->container['supportFeature'] = isset($data['supportFeature']) ? $data['supportFeature'] : null;
        $this->container['iesId'] = isset($data['iesId']) ? $data['iesId'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['onestopProductId'] = isset($data['onestopProductId']) ? $data['onestopProductId'] : null;
        $this->container['buildingLineProductId'] = isset($data['buildingLineProductId']) ? $data['buildingLineProductId'] : null;
        $this->container['lastOnestopProductId'] = isset($data['lastOnestopProductId']) ? $data['lastOnestopProductId'] : null;
        $this->container['lastBuildingLineProductId'] = isset($data['lastBuildingLineProductId']) ? $data['lastBuildingLineProductId'] : null;
        $this->container['modifiedBandwidth'] = isset($data['modifiedBandwidth']) ? $data['modifiedBandwidth'] : null;
        $this->container['changeMode'] = isset($data['changeMode']) ? $data['changeMode'] : null;
        $this->container['onestopdcStatus'] = isset($data['onestopdcStatus']) ? $data['onestopdcStatus'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['autoRenew'] = isset($data['autoRenew']) ? $data['autoRenew'] : null;
        $this->container['ratio95peak'] = isset($data['ratio95peak']) ? $data['ratio95peak'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['tenantId']) && !preg_match("/[a-fA-F0-9]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getPortTypeAllowableValues();
                if (!is_null($this->container['portType']) && !in_array($this->container['portType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'portType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 100000)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 255)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) < 0)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['peerLocation']) && (mb_strlen($this->container['peerLocation']) > 255)) {
                $invalidProperties[] = "invalid value for 'peerLocation', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['peerLocation']) && (mb_strlen($this->container['peerLocation']) < 0)) {
                $invalidProperties[] = "invalid value for 'peerLocation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['hostingId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['hostingId'])) {
                $invalidProperties[] = "invalid value for 'hostingId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['vlan']) && ($this->container['vlan'] > 3999)) {
                $invalidProperties[] = "invalid value for 'vlan', must be smaller than or equal to 3999.";
            }
            if (!is_null($this->container['vlan']) && ($this->container['vlan'] < 0)) {
                $invalidProperties[] = "invalid value for 'vlan', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProviderStatusAllowableValues();
                if (!is_null($this->container['providerStatus']) && !in_array($this->container['providerStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVgwTypeAllowableValues();
                if (!is_null($this->container['vgwType']) && !in_array($this->container['vgwType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'vgwType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['lagId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['lagId'])) {
                $invalidProperties[] = "invalid value for 'lagId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            $allowedValues = $this->getSignedAgreementStatusAllowableValues();
                if (!is_null($this->container['signedAgreementStatus']) && !in_array($this->container['signedAgreementStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'signedAgreementStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['email']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z\\_\\-\\.]+@[\\u4e00-\\u9fa50-9a-zA-Z\\_\\-\\.]+\\.[\\u4e00-\\u9fa50-9a-zA-Z\\_\\-\\.]+$/", $this->container['email'])) {
                $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z\\_\\-\\.]+@[\\u4e00-\\u9fa50-9a-zA-Z\\_\\-\\.]+\\.[\\u4e00-\\u9fa50-9a-zA-Z\\_\\-\\.]+$/.";
            }
            if (!is_null($this->container['ratio95peak']) && ($this->container['ratio95peak'] > 100)) {
                $invalidProperties[] = "invalid value for 'ratio95peak', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['ratio95peak']) && ($this->container['ratio95peak'] < 0)) {
                $invalidProperties[] = "invalid value for 'ratio95peak', must be bigger than or equal to 0.";
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
    *  物理专线标识符ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 物理专线标识符ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  实例所属项目ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 实例所属项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  物理专线名字
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
    * @param string|null $name 物理专线名字
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
    *  物理专线描述信息
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
    * @param string|null $description 物理专线描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets portType
    *  物理专线接入接口的类型，支持1G 10G 40G 100G
    *
    * @return string|null
    */
    public function getPortType()
    {
        return $this->container['portType'];
    }

    /**
    * Sets portType
    *
    * @param string|null $portType 物理专线接入接口的类型，支持1G 10G 40G 100G
    *
    * @return $this
    */
    public function setPortType($portType)
    {
        $this->container['portType'] = $portType;
        return $this;
    }

    /**
    * Gets bandwidth
    *  物理专线接入带宽，单位Mbps。
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 物理专线接入带宽，单位Mbps。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets location
    *  专线的接入位置信息
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location 专线的接入位置信息
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets peerLocation
    *  物理专线对端所在的物理位置，省/市/街道或IDC名字。
    *
    * @return string|null
    */
    public function getPeerLocation()
    {
        return $this->container['peerLocation'];
    }

    /**
    * Sets peerLocation
    *
    * @param string|null $peerLocation 物理专线对端所在的物理位置，省/市/街道或IDC名字。
    *
    * @return $this
    */
    public function setPeerLocation($peerLocation)
    {
        $this->container['peerLocation'] = $peerLocation;
        return $this;
    }

    /**
    * Gets deviceId
    *  物理专线连接的设备的标识ID
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 物理专线连接的设备的标识ID
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets type
    *  物理专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 物理专线的类型，类型包括标准(standard)，运营专线(hosting)，托管专线（hosted）[，一站式标准（onestop_standard），一站式托管（onestop_hosted）](tag:hws)。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets hostingId
    *  hosted物理专线对应的hosting物理专线的ID
    *
    * @return string|null
    */
    public function getHostingId()
    {
        return $this->container['hostingId'];
    }

    /**
    * Sets hostingId
    *
    * @param string|null $hostingId hosted物理专线对应的hosting物理专线的ID
    *
    * @return $this
    */
    public function setHostingId($hostingId)
    {
        $this->container['hostingId'] = $hostingId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式：prepayment/bandwidth/traffic
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
    * @param string|null $chargeMode 计费模式：prepayment/bandwidth/traffic
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets provider
    *  物理专线连接的线路运营商 [如：中国电信 中国联通 中国移动 中国其他 境外其他专线归属的运营商](tag:hws,hws_hk)
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
    * @param string|null $provider 物理专线连接的线路运营商 [如：中国电信 中国联通 中国移动 中国其他 境外其他专线归属的运营商](tag:hws,hws_hk)
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  管理状态：true或false
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
    * @param bool|null $adminStateUp 管理状态：true或false
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets vlan
    *  为托管hosted物理专线分配的vlan。
    *
    * @return int|null
    */
    public function getVlan()
    {
        return $this->container['vlan'];
    }

    /**
    * Sets vlan
    *
    * @param int|null $vlan 为托管hosted物理专线分配的vlan。
    *
    * @return $this
    */
    public function setVlan($vlan)
    {
        $this->container['vlan'] = $vlan;
        return $this;
    }

    /**
    * Gets status
    *  资源状态，合法值是： ACTIVE：专线已经开通完成且线路处于正常状态 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 BUILD：申请专线正在施工建设中 ERROR：专线配置异常，请联系客服解决相关问题。 PENDING_DELETE：正在删除 DELETED：已删除 APPLY：申请开通 DENY：客户需求无法满足，拒绝工勘。 PENDING_PAY：待支付 PAID：已支付 PENDING_SURVEY：待工勘 LEASED_LINE_DELIVERY：运营商施工
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源状态，合法值是： ACTIVE：专线已经开通完成且线路处于正常状态 DOWN：专线对应的端口处于down的状态，可能存在线路故障等异常。 BUILD：申请专线正在施工建设中 ERROR：专线配置异常，请联系客服解决相关问题。 PENDING_DELETE：正在删除 DELETED：已删除 APPLY：申请开通 DENY：客户需求无法满足，拒绝工勘。 PENDING_PAY：待支付 PAID：已支付 PENDING_SURVEY：待工勘 LEASED_LINE_DELIVERY：运营商施工
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets applyTime
    *  物理专线的申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param \DateTime|null $applyTime 物理专线的申请时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets createTime
    *  物理专线的创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 物理专线的创建时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets providerStatus
    *  物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @return string|null
    */
    public function getProviderStatus()
    {
        return $this->container['providerStatus'];
    }

    /**
    * Sets providerStatus
    *
    * @param string|null $providerStatus 物理专线的运营商操作状态，合法值是：ACTIVE， DOWN
    *
    * @return $this
    */
    public function setProviderStatus($providerStatus)
    {
        $this->container['providerStatus'] = $providerStatus;
        return $this;
    }

    /**
    * Gets peerPortType
    *  连接对端的端口类型
    *
    * @return string|null
    */
    public function getPeerPortType()
    {
        return $this->container['peerPortType'];
    }

    /**
    * Sets peerPortType
    *
    * @param string|null $peerPortType 连接对端的端口类型
    *
    * @return $this
    */
    public function setPeerPortType($peerPortType)
    {
        $this->container['peerPortType'] = $peerPortType;
        return $this;
    }

    /**
    * Gets peerProvider
    *  专线连接对接的运营商
    *
    * @return string|null
    */
    public function getPeerProvider()
    {
        return $this->container['peerProvider'];
    }

    /**
    * Sets peerProvider
    *
    * @param string|null $peerProvider 专线连接对接的运营商
    *
    * @return $this
    */
    public function setPeerProvider($peerProvider)
    {
        $this->container['peerProvider'] = $peerProvider;
        return $this;
    }

    /**
    * Gets orderId
    *  物理专线对应订单号，用于支持包周期计费，识别用户订单
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 物理专线对应订单号，用于支持包周期计费，识别用户订单
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets productId
    *  物理专线订单对应产品标识，用于订制包周期套餐等计费策略
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 物理专线订单对应产品标识，用于订制包周期套餐等计费策略
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets specCode
    *  物理专线订单对应产品规格，用于订制包周期套餐等计费策略
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 物理专线订单对应产品规格，用于订制包周期套餐等计费策略
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets periodType
    *  物理专线对应订单号对应包周期的类型
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType 物理专线对应订单号对应包周期的类型
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  物理专线对应的包周期时间
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum 物理专线对应的包周期时间
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets vgwType
    *  专线要求的网关类型
    *
    * @return string|null
    */
    public function getVgwType()
    {
        return $this->container['vgwType'];
    }

    /**
    * Sets vgwType
    *
    * @param string|null $vgwType 专线要求的网关类型
    *
    * @return $this
    */
    public function setVgwType($vgwType)
    {
        $this->container['vgwType'] = $vgwType;
        return $this;
    }

    /**
    * Gets lagId
    *  物理专线归属的链路聚合组（lag）的ID
    *
    * @return string|null
    */
    public function getLagId()
    {
        return $this->container['lagId'];
    }

    /**
    * Sets lagId
    *
    * @param string|null $lagId 物理专线归属的链路聚合组（lag）的ID
    *
    * @return $this
    */
    public function setLagId($lagId)
    {
        $this->container['lagId'] = $lagId;
        return $this;
    }

    /**
    * Gets signedAgreementStatus
    *  专线协议的签署状态
    *
    * @return string|null
    */
    public function getSignedAgreementStatus()
    {
        return $this->container['signedAgreementStatus'];
    }

    /**
    * Sets signedAgreementStatus
    *
    * @param string|null $signedAgreementStatus 专线协议的签署状态
    *
    * @return $this
    */
    public function setSignedAgreementStatus($signedAgreementStatus)
    {
        $this->container['signedAgreementStatus'] = $signedAgreementStatus;
        return $this;
    }

    /**
    * Gets signedAgreementTime
    *  专线协议的签署时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return \DateTime|null
    */
    public function getSignedAgreementTime()
    {
        return $this->container['signedAgreementTime'];
    }

    /**
    * Sets signedAgreementTime
    *
    * @param \DateTime|null $signedAgreementTime 专线协议的签署时间。采用UTC时间格式，格式为：yyyy-MM-ddTHH:mm:ss.SSSZ
    *
    * @return $this
    */
    public function setSignedAgreementTime($signedAgreementTime)
    {
        $this->container['signedAgreementTime'] = $signedAgreementTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  实例所属企业项目ID
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
    * @param string|null $enterpriseProjectId 实例所属企业项目ID
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
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\Tag[]|null $tags 标签信息
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets locales
    *  locales
    *
    * @return \HuaweiCloud\SDK\Dc\V3\Model\LocalesBody|null
    */
    public function getLocales()
    {
        return $this->container['locales'];
    }

    /**
    * Sets locales
    *
    * @param \HuaweiCloud\SDK\Dc\V3\Model\LocalesBody|null $locales locales
    *
    * @return $this
    */
    public function setLocales($locales)
    {
        $this->container['locales'] = $locales;
        return $this;
    }

    /**
    * Gets supportFeature
    *  用户专线可支持的特性列表[（功能暂不支持）](tag:dt)
    *
    * @return string[]|null
    */
    public function getSupportFeature()
    {
        return $this->container['supportFeature'];
    }

    /**
    * Sets supportFeature
    *
    * @param string[]|null $supportFeature 用户专线可支持的特性列表[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setSupportFeature($supportFeature)
    {
        $this->container['supportFeature'] = $supportFeature;
        return $this;
    }

    /**
    * Gets iesId
    *  归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getIesId()
    {
        return $this->container['iesId'];
    }

    /**
    * Sets iesId
    *
    * @param string|null $iesId 归属的CloudPond站点的ID[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setIesId($iesId)
    {
        $this->container['iesId'] = $iesId;
        return $this;
    }

    /**
    * Gets reason
    *  如果专线资源的状态是Error的情况下，该参数会显示相关错误信息。[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 如果专线资源的状态是Error的情况下，该参数会显示相关错误信息。[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets email
    *  客户邮箱信息[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 客户邮箱信息[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets onestopProductId
    *  该参数用于销售线路场景，标识一站式专线产品ID[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getOnestopProductId()
    {
        return $this->container['onestopProductId'];
    }

    /**
    * Sets onestopProductId
    *
    * @param string|null $onestopProductId 该参数用于销售线路场景，标识一站式专线产品ID[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setOnestopProductId($onestopProductId)
    {
        $this->container['onestopProductId'] = $onestopProductId;
        return $this;
    }

    /**
    * Gets buildingLineProductId
    *  该参数用于销售线路场景，标识机房内部线路资源产品ID[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getBuildingLineProductId()
    {
        return $this->container['buildingLineProductId'];
    }

    /**
    * Sets buildingLineProductId
    *
    * @param string|null $buildingLineProductId 该参数用于销售线路场景，标识机房内部线路资源产品ID[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setBuildingLineProductId($buildingLineProductId)
    {
        $this->container['buildingLineProductId'] = $buildingLineProductId;
        return $this;
    }

    /**
    * Gets lastOnestopProductId
    *  该参数用于销售线路场景，标识变更前的一站式专线产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getLastOnestopProductId()
    {
        return $this->container['lastOnestopProductId'];
    }

    /**
    * Sets lastOnestopProductId
    *
    * @param string|null $lastOnestopProductId 该参数用于销售线路场景，标识变更前的一站式专线产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setLastOnestopProductId($lastOnestopProductId)
    {
        $this->container['lastOnestopProductId'] = $lastOnestopProductId;
        return $this;
    }

    /**
    * Gets lastBuildingLineProductId
    *  该参数用于销售线路场景，标识变更前机房内部线路资源产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getLastBuildingLineProductId()
    {
        return $this->container['lastBuildingLineProductId'];
    }

    /**
    * Sets lastBuildingLineProductId
    *
    * @param string|null $lastBuildingLineProductId 该参数用于销售线路场景，标识变更前机房内部线路资源产品ID，用于在做线路带宽变更时保存上一次的记录。[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setLastBuildingLineProductId($lastBuildingLineProductId)
    {
        $this->container['lastBuildingLineProductId'] = $lastBuildingLineProductId;
        return $this;
    }

    /**
    * Gets modifiedBandwidth
    *  线路带宽变更后的带宽值[（功能暂不支持）](tag:dt)
    *
    * @return int|null
    */
    public function getModifiedBandwidth()
    {
        return $this->container['modifiedBandwidth'];
    }

    /**
    * Sets modifiedBandwidth
    *
    * @param int|null $modifiedBandwidth 线路带宽变更后的带宽值[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setModifiedBandwidth($modifiedBandwidth)
    {
        $this->container['modifiedBandwidth'] = $modifiedBandwidth;
        return $this;
    }

    /**
    * Gets changeMode
    *  标识续费变更的一种状态[（功能暂不支持）](tag:dt)
    *
    * @return int|null
    */
    public function getChangeMode()
    {
        return $this->container['changeMode'];
    }

    /**
    * Sets changeMode
    *
    * @param int|null $changeMode 标识续费变更的一种状态[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setChangeMode($changeMode)
    {
        $this->container['changeMode'] = $changeMode;
        return $this;
    }

    /**
    * Gets onestopdcStatus
    *  一站式专线状态[（功能暂不支持）](tag:dt)
    *
    * @return string|null
    */
    public function getOnestopdcStatus()
    {
        return $this->container['onestopdcStatus'];
    }

    /**
    * Sets onestopdcStatus
    *
    * @param string|null $onestopdcStatus 一站式专线状态[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setOnestopdcStatus($onestopdcStatus)
    {
        $this->container['onestopdcStatus'] = $onestopdcStatus;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  归属的可用区对应的边界组(public border group)，标识是否homezone局点。[（功能暂不支持）](tag:dt)
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
    * @param string|null $publicBorderGroup 归属的可用区对应的边界组(public border group)，标识是否homezone局点。[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets autoRenew
    *  用于标识包周期产品是否自动续订[（功能暂不支持）](tag:dt)
    *
    * @return int|null
    */
    public function getAutoRenew()
    {
        return $this->container['autoRenew'];
    }

    /**
    * Sets autoRenew
    *
    * @param int|null $autoRenew 用于标识包周期产品是否自动续订[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setAutoRenew($autoRenew)
    {
        $this->container['autoRenew'] = $autoRenew;
        return $this;
    }

    /**
    * Gets ratio95peak
    *  95计费保底带宽率[（功能暂不支持）](tag:dt)
    *
    * @return int|null
    */
    public function getRatio95peak()
    {
        return $this->container['ratio95peak'];
    }

    /**
    * Sets ratio95peak
    *
    * @param int|null $ratio95peak 95计费保底带宽率[（功能暂不支持）](tag:dt)
    *
    * @return $this
    */
    public function setRatio95peak($ratio95peak)
    {
        $this->container['ratio95peak'] = $ratio95peak;
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

