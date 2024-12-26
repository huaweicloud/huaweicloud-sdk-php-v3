<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MonthlyBillRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MonthlyBillRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cycle  资源详单数据所在账期，东八区时间，格式为YYYY-MM。 例如2020-01。
    * billDate  消费日期，东八区时间，格式为YYYY-MM-DD。  说明： 当statistic_type=2时该字段才有值，否则返回null。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resInstanceId  资源实例ID。
    * resourceName  资源名称。客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称。
    * resourceTag  资源标签。客户在管理资源的时候，可以设置资源标签。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目名称。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划
    * consumeAmount  客户购买云服务类型的消费金额，包含代金券、现金券，精确到小数点后2位。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * officialAmount  官网价。
    * discountAmount  对应官网价折扣金额。
    * measureId  金额单位。 1：元
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * rootResourceId  根资源标识。
    * parentResourceId  父资源标识。
    * tradeId  订单ID 或 交易ID。 账单类型为1，2，3，4，8时为订单ID；其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)。
    * id  唯一标识。 该字段为预留字段。
    * productSpecDesc  产品的规格描述。
    * subServiceTypeCode  整机的子云服务的自身的云服务类型编码。
    * subServiceTypeName  整机的子云服务的自身的云服务类型名称。
    * subResourceTypeCode  整机的子云服务的自身的资源类型编码。
    * subResourceTypeName  整机的子云服务的自身的资源类型名称。
    * subResourceId  整机的子云服务的自身的资源ID，资源标识。（如果为预留实例，则为预留实例标识）
    * subResourceName  整机的子云服务的自身的资源名称，资源标识。（如果为预留实例，则为预留实例标识）
    * preOrderId  原订单ID 。
    * azCodeInfos  可用区信息列表。具体请参见表 AzCodeInfo。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：如果是普通客户或者财务独立企业子客户或者企业主客户查询消费记录，此处为客户自己的客户ID。如果是财务托管企业子查询消费记录，此处为企业主客户ID或自己的客户ID。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间| |参数的约束及描述：费用对应的资源使用的开始时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间| |参数的约束及描述：费用对应的资源使用的结束时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * consumeTime  |参数名称：消费时间| |参数约束及描述：消费时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。包周期、预留实例预付为交易时间，按需、预留实例按时计费为话单生失效时间。 说明：当statistic_type=3时有效。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cycle' => 'string',
            'billDate' => 'string',
            'billType' => 'int',
            'customerId' => 'string',
            'region' => 'string',
            'regionName' => 'string',
            'cloudServiceType' => 'string',
            'resourceTypeCode' => 'string',
            'cloudServiceTypeName' => 'string',
            'resourceTypeName' => 'string',
            'resInstanceId' => 'string',
            'resourceName' => 'string',
            'resourceTag' => 'string',
            'skuCode' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'chargeMode' => 'int',
            'consumeAmount' => 'float',
            'cashAmount' => 'float',
            'creditAmount' => 'float',
            'couponAmount' => 'float',
            'flexipurchaseCouponAmount' => 'float',
            'storedCardAmount' => 'float',
            'bonusAmount' => 'float',
            'debtAmount' => 'float',
            'adjustmentAmount' => 'float',
            'officialAmount' => 'float',
            'discountAmount' => 'float',
            'measureId' => 'int',
            'periodType' => 'int',
            'rootResourceId' => 'string',
            'parentResourceId' => 'string',
            'tradeId' => 'string',
            'id' => 'string',
            'productSpecDesc' => 'string',
            'subServiceTypeCode' => 'string',
            'subServiceTypeName' => 'string',
            'subResourceTypeCode' => 'string',
            'subResourceTypeName' => 'string',
            'subResourceId' => 'string',
            'subResourceName' => 'string',
            'preOrderId' => 'string',
            'azCodeInfos' => '\HuaweiCloud\SDK\Bss\V2\Model\AzCodeInfo[]',
            'payerAccountId' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'consumeTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cycle  资源详单数据所在账期，东八区时间，格式为YYYY-MM。 例如2020-01。
    * billDate  消费日期，东八区时间，格式为YYYY-MM-DD。  说明： 当statistic_type=2时该字段才有值，否则返回null。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resInstanceId  资源实例ID。
    * resourceName  资源名称。客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称。
    * resourceTag  资源标签。客户在管理资源的时候，可以设置资源标签。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目名称。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划
    * consumeAmount  客户购买云服务类型的消费金额，包含代金券、现金券，精确到小数点后2位。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * officialAmount  官网价。
    * discountAmount  对应官网价折扣金额。
    * measureId  金额单位。 1：元
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * rootResourceId  根资源标识。
    * parentResourceId  父资源标识。
    * tradeId  订单ID 或 交易ID。 账单类型为1，2，3，4，8时为订单ID；其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)。
    * id  唯一标识。 该字段为预留字段。
    * productSpecDesc  产品的规格描述。
    * subServiceTypeCode  整机的子云服务的自身的云服务类型编码。
    * subServiceTypeName  整机的子云服务的自身的云服务类型名称。
    * subResourceTypeCode  整机的子云服务的自身的资源类型编码。
    * subResourceTypeName  整机的子云服务的自身的资源类型名称。
    * subResourceId  整机的子云服务的自身的资源ID，资源标识。（如果为预留实例，则为预留实例标识）
    * subResourceName  整机的子云服务的自身的资源名称，资源标识。（如果为预留实例，则为预留实例标识）
    * preOrderId  原订单ID 。
    * azCodeInfos  可用区信息列表。具体请参见表 AzCodeInfo。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：如果是普通客户或者财务独立企业子客户或者企业主客户查询消费记录，此处为客户自己的客户ID。如果是财务托管企业子查询消费记录，此处为企业主客户ID或自己的客户ID。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间| |参数的约束及描述：费用对应的资源使用的开始时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间| |参数的约束及描述：费用对应的资源使用的结束时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * consumeTime  |参数名称：消费时间| |参数约束及描述：消费时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。包周期、预留实例预付为交易时间，按需、预留实例按时计费为话单生失效时间。 说明：当statistic_type=3时有效。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cycle' => null,
        'billDate' => null,
        'billType' => 'int32',
        'customerId' => null,
        'region' => null,
        'regionName' => null,
        'cloudServiceType' => null,
        'resourceTypeCode' => null,
        'cloudServiceTypeName' => null,
        'resourceTypeName' => null,
        'resInstanceId' => null,
        'resourceName' => null,
        'resourceTag' => null,
        'skuCode' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'chargeMode' => 'int32',
        'consumeAmount' => 'bigdecimal',
        'cashAmount' => 'bigdecimal',
        'creditAmount' => 'bigdecimal',
        'couponAmount' => 'bigdecimal',
        'flexipurchaseCouponAmount' => 'bigdecimal',
        'storedCardAmount' => 'bigdecimal',
        'bonusAmount' => 'bigdecimal',
        'debtAmount' => 'bigdecimal',
        'adjustmentAmount' => 'bigdecimal',
        'officialAmount' => 'bigdecimal',
        'discountAmount' => 'bigdecimal',
        'measureId' => 'int32',
        'periodType' => 'int32',
        'rootResourceId' => null,
        'parentResourceId' => null,
        'tradeId' => null,
        'id' => null,
        'productSpecDesc' => null,
        'subServiceTypeCode' => null,
        'subServiceTypeName' => null,
        'subResourceTypeCode' => null,
        'subResourceTypeName' => null,
        'subResourceId' => null,
        'subResourceName' => null,
        'preOrderId' => null,
        'azCodeInfos' => null,
        'payerAccountId' => null,
        'effectiveTime' => null,
        'expireTime' => null,
        'consumeTime' => null
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
    * cycle  资源详单数据所在账期，东八区时间，格式为YYYY-MM。 例如2020-01。
    * billDate  消费日期，东八区时间，格式为YYYY-MM-DD。  说明： 当statistic_type=2时该字段才有值，否则返回null。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resInstanceId  资源实例ID。
    * resourceName  资源名称。客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称。
    * resourceTag  资源标签。客户在管理资源的时候，可以设置资源标签。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目名称。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划
    * consumeAmount  客户购买云服务类型的消费金额，包含代金券、现金券，精确到小数点后2位。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * officialAmount  官网价。
    * discountAmount  对应官网价折扣金额。
    * measureId  金额单位。 1：元
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * rootResourceId  根资源标识。
    * parentResourceId  父资源标识。
    * tradeId  订单ID 或 交易ID。 账单类型为1，2，3，4，8时为订单ID；其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)。
    * id  唯一标识。 该字段为预留字段。
    * productSpecDesc  产品的规格描述。
    * subServiceTypeCode  整机的子云服务的自身的云服务类型编码。
    * subServiceTypeName  整机的子云服务的自身的云服务类型名称。
    * subResourceTypeCode  整机的子云服务的自身的资源类型编码。
    * subResourceTypeName  整机的子云服务的自身的资源类型名称。
    * subResourceId  整机的子云服务的自身的资源ID，资源标识。（如果为预留实例，则为预留实例标识）
    * subResourceName  整机的子云服务的自身的资源名称，资源标识。（如果为预留实例，则为预留实例标识）
    * preOrderId  原订单ID 。
    * azCodeInfos  可用区信息列表。具体请参见表 AzCodeInfo。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：如果是普通客户或者财务独立企业子客户或者企业主客户查询消费记录，此处为客户自己的客户ID。如果是财务托管企业子查询消费记录，此处为企业主客户ID或自己的客户ID。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间| |参数的约束及描述：费用对应的资源使用的开始时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间| |参数的约束及描述：费用对应的资源使用的结束时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * consumeTime  |参数名称：消费时间| |参数约束及描述：消费时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。包周期、预留实例预付为交易时间，按需、预留实例按时计费为话单生失效时间。 说明：当statistic_type=3时有效。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cycle' => 'cycle',
            'billDate' => 'bill_date',
            'billType' => 'bill_type',
            'customerId' => 'customer_id',
            'region' => 'region',
            'regionName' => 'region_name',
            'cloudServiceType' => 'cloud_service_type',
            'resourceTypeCode' => 'resource_Type_code',
            'cloudServiceTypeName' => 'cloud_service_type_name',
            'resourceTypeName' => 'resource_type_name',
            'resInstanceId' => 'res_instance_id',
            'resourceName' => 'resource_name',
            'resourceTag' => 'resource_tag',
            'skuCode' => 'sku_code',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'chargeMode' => 'charge_mode',
            'consumeAmount' => 'consume_amount',
            'cashAmount' => 'cash_amount',
            'creditAmount' => 'credit_amount',
            'couponAmount' => 'coupon_amount',
            'flexipurchaseCouponAmount' => 'flexipurchase_coupon_amount',
            'storedCardAmount' => 'stored_card_amount',
            'bonusAmount' => 'bonus_amount',
            'debtAmount' => 'debt_amount',
            'adjustmentAmount' => 'adjustment_amount',
            'officialAmount' => 'official_amount',
            'discountAmount' => 'discount_amount',
            'measureId' => 'measure_id',
            'periodType' => 'period_type',
            'rootResourceId' => 'root_resource_id',
            'parentResourceId' => 'parent_resource_id',
            'tradeId' => 'trade_id',
            'id' => 'id',
            'productSpecDesc' => 'product_spec_desc',
            'subServiceTypeCode' => 'sub_service_type_code',
            'subServiceTypeName' => 'sub_service_type_name',
            'subResourceTypeCode' => 'sub_resource_type_code',
            'subResourceTypeName' => 'sub_resource_type_name',
            'subResourceId' => 'sub_resource_id',
            'subResourceName' => 'sub_resource_name',
            'preOrderId' => 'pre_order_id',
            'azCodeInfos' => 'az_code_infos',
            'payerAccountId' => 'payer_account_id',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'consumeTime' => 'consume_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cycle  资源详单数据所在账期，东八区时间，格式为YYYY-MM。 例如2020-01。
    * billDate  消费日期，东八区时间，格式为YYYY-MM-DD。  说明： 当statistic_type=2时该字段才有值，否则返回null。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resInstanceId  资源实例ID。
    * resourceName  资源名称。客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称。
    * resourceTag  资源标签。客户在管理资源的时候，可以设置资源标签。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目名称。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划
    * consumeAmount  客户购买云服务类型的消费金额，包含代金券、现金券，精确到小数点后2位。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * officialAmount  官网价。
    * discountAmount  对应官网价折扣金额。
    * measureId  金额单位。 1：元
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * rootResourceId  根资源标识。
    * parentResourceId  父资源标识。
    * tradeId  订单ID 或 交易ID。 账单类型为1，2，3，4，8时为订单ID；其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)。
    * id  唯一标识。 该字段为预留字段。
    * productSpecDesc  产品的规格描述。
    * subServiceTypeCode  整机的子云服务的自身的云服务类型编码。
    * subServiceTypeName  整机的子云服务的自身的云服务类型名称。
    * subResourceTypeCode  整机的子云服务的自身的资源类型编码。
    * subResourceTypeName  整机的子云服务的自身的资源类型名称。
    * subResourceId  整机的子云服务的自身的资源ID，资源标识。（如果为预留实例，则为预留实例标识）
    * subResourceName  整机的子云服务的自身的资源名称，资源标识。（如果为预留实例，则为预留实例标识）
    * preOrderId  原订单ID 。
    * azCodeInfos  可用区信息列表。具体请参见表 AzCodeInfo。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：如果是普通客户或者财务独立企业子客户或者企业主客户查询消费记录，此处为客户自己的客户ID。如果是财务托管企业子查询消费记录，此处为企业主客户ID或自己的客户ID。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间| |参数的约束及描述：费用对应的资源使用的开始时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间| |参数的约束及描述：费用对应的资源使用的结束时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * consumeTime  |参数名称：消费时间| |参数约束及描述：消费时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。包周期、预留实例预付为交易时间，按需、预留实例按时计费为话单生失效时间。 说明：当statistic_type=3时有效。|
    *
    * @var string[]
    */
    protected static $setters = [
            'cycle' => 'setCycle',
            'billDate' => 'setBillDate',
            'billType' => 'setBillType',
            'customerId' => 'setCustomerId',
            'region' => 'setRegion',
            'regionName' => 'setRegionName',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceTypeCode' => 'setResourceTypeCode',
            'cloudServiceTypeName' => 'setCloudServiceTypeName',
            'resourceTypeName' => 'setResourceTypeName',
            'resInstanceId' => 'setResInstanceId',
            'resourceName' => 'setResourceName',
            'resourceTag' => 'setResourceTag',
            'skuCode' => 'setSkuCode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'chargeMode' => 'setChargeMode',
            'consumeAmount' => 'setConsumeAmount',
            'cashAmount' => 'setCashAmount',
            'creditAmount' => 'setCreditAmount',
            'couponAmount' => 'setCouponAmount',
            'flexipurchaseCouponAmount' => 'setFlexipurchaseCouponAmount',
            'storedCardAmount' => 'setStoredCardAmount',
            'bonusAmount' => 'setBonusAmount',
            'debtAmount' => 'setDebtAmount',
            'adjustmentAmount' => 'setAdjustmentAmount',
            'officialAmount' => 'setOfficialAmount',
            'discountAmount' => 'setDiscountAmount',
            'measureId' => 'setMeasureId',
            'periodType' => 'setPeriodType',
            'rootResourceId' => 'setRootResourceId',
            'parentResourceId' => 'setParentResourceId',
            'tradeId' => 'setTradeId',
            'id' => 'setId',
            'productSpecDesc' => 'setProductSpecDesc',
            'subServiceTypeCode' => 'setSubServiceTypeCode',
            'subServiceTypeName' => 'setSubServiceTypeName',
            'subResourceTypeCode' => 'setSubResourceTypeCode',
            'subResourceTypeName' => 'setSubResourceTypeName',
            'subResourceId' => 'setSubResourceId',
            'subResourceName' => 'setSubResourceName',
            'preOrderId' => 'setPreOrderId',
            'azCodeInfos' => 'setAzCodeInfos',
            'payerAccountId' => 'setPayerAccountId',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'consumeTime' => 'setConsumeTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cycle  资源详单数据所在账期，东八区时间，格式为YYYY-MM。 例如2020-01。
    * billDate  消费日期，东八区时间，格式为YYYY-MM-DD。  说明： 当statistic_type=2时该字段才有值，否则返回null。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resInstanceId  资源实例ID。
    * resourceName  资源名称。客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称。
    * resourceTag  资源标签。客户在管理资源的时候，可以设置资源标签。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目名称。
    * chargeMode  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划
    * consumeAmount  客户购买云服务类型的消费金额，包含代金券、现金券，精确到小数点后2位。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * officialAmount  官网价。
    * discountAmount  对应官网价折扣金额。
    * measureId  金额单位。 1：元
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * rootResourceId  根资源标识。
    * parentResourceId  父资源标识。
    * tradeId  订单ID 或 交易ID。 账单类型为1，2，3，4，8时为订单ID；其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)。
    * id  唯一标识。 该字段为预留字段。
    * productSpecDesc  产品的规格描述。
    * subServiceTypeCode  整机的子云服务的自身的云服务类型编码。
    * subServiceTypeName  整机的子云服务的自身的云服务类型名称。
    * subResourceTypeCode  整机的子云服务的自身的资源类型编码。
    * subResourceTypeName  整机的子云服务的自身的资源类型名称。
    * subResourceId  整机的子云服务的自身的资源ID，资源标识。（如果为预留实例，则为预留实例标识）
    * subResourceName  整机的子云服务的自身的资源名称，资源标识。（如果为预留实例，则为预留实例标识）
    * preOrderId  原订单ID 。
    * azCodeInfos  可用区信息列表。具体请参见表 AzCodeInfo。
    * payerAccountId  |参数名称：支付账号ID。| |参数的约束及描述：如果是普通客户或者财务独立企业子客户或者企业主客户查询消费记录，此处为客户自己的客户ID。如果是财务托管企业子查询消费记录，此处为企业主客户ID或自己的客户ID。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间| |参数的约束及描述：费用对应的资源使用的开始时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间| |参数的约束及描述：费用对应的资源使用的结束时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    * consumeTime  |参数名称：消费时间| |参数约束及描述：消费时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。包周期、预留实例预付为交易时间，按需、预留实例按时计费为话单生失效时间。 说明：当statistic_type=3时有效。|
    *
    * @var string[]
    */
    protected static $getters = [
            'cycle' => 'getCycle',
            'billDate' => 'getBillDate',
            'billType' => 'getBillType',
            'customerId' => 'getCustomerId',
            'region' => 'getRegion',
            'regionName' => 'getRegionName',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceTypeCode' => 'getResourceTypeCode',
            'cloudServiceTypeName' => 'getCloudServiceTypeName',
            'resourceTypeName' => 'getResourceTypeName',
            'resInstanceId' => 'getResInstanceId',
            'resourceName' => 'getResourceName',
            'resourceTag' => 'getResourceTag',
            'skuCode' => 'getSkuCode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'chargeMode' => 'getChargeMode',
            'consumeAmount' => 'getConsumeAmount',
            'cashAmount' => 'getCashAmount',
            'creditAmount' => 'getCreditAmount',
            'couponAmount' => 'getCouponAmount',
            'flexipurchaseCouponAmount' => 'getFlexipurchaseCouponAmount',
            'storedCardAmount' => 'getStoredCardAmount',
            'bonusAmount' => 'getBonusAmount',
            'debtAmount' => 'getDebtAmount',
            'adjustmentAmount' => 'getAdjustmentAmount',
            'officialAmount' => 'getOfficialAmount',
            'discountAmount' => 'getDiscountAmount',
            'measureId' => 'getMeasureId',
            'periodType' => 'getPeriodType',
            'rootResourceId' => 'getRootResourceId',
            'parentResourceId' => 'getParentResourceId',
            'tradeId' => 'getTradeId',
            'id' => 'getId',
            'productSpecDesc' => 'getProductSpecDesc',
            'subServiceTypeCode' => 'getSubServiceTypeCode',
            'subServiceTypeName' => 'getSubServiceTypeName',
            'subResourceTypeCode' => 'getSubResourceTypeCode',
            'subResourceTypeName' => 'getSubResourceTypeName',
            'subResourceId' => 'getSubResourceId',
            'subResourceName' => 'getSubResourceName',
            'preOrderId' => 'getPreOrderId',
            'azCodeInfos' => 'getAzCodeInfos',
            'payerAccountId' => 'getPayerAccountId',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'consumeTime' => 'getConsumeTime'
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
        $this->container['cycle'] = isset($data['cycle']) ? $data['cycle'] : null;
        $this->container['billDate'] = isset($data['billDate']) ? $data['billDate'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['cloudServiceTypeName'] = isset($data['cloudServiceTypeName']) ? $data['cloudServiceTypeName'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['resInstanceId'] = isset($data['resInstanceId']) ? $data['resInstanceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceTag'] = isset($data['resourceTag']) ? $data['resourceTag'] : null;
        $this->container['skuCode'] = isset($data['skuCode']) ? $data['skuCode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['consumeAmount'] = isset($data['consumeAmount']) ? $data['consumeAmount'] : null;
        $this->container['cashAmount'] = isset($data['cashAmount']) ? $data['cashAmount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['flexipurchaseCouponAmount'] = isset($data['flexipurchaseCouponAmount']) ? $data['flexipurchaseCouponAmount'] : null;
        $this->container['storedCardAmount'] = isset($data['storedCardAmount']) ? $data['storedCardAmount'] : null;
        $this->container['bonusAmount'] = isset($data['bonusAmount']) ? $data['bonusAmount'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['adjustmentAmount'] = isset($data['adjustmentAmount']) ? $data['adjustmentAmount'] : null;
        $this->container['officialAmount'] = isset($data['officialAmount']) ? $data['officialAmount'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['rootResourceId'] = isset($data['rootResourceId']) ? $data['rootResourceId'] : null;
        $this->container['parentResourceId'] = isset($data['parentResourceId']) ? $data['parentResourceId'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
        $this->container['subServiceTypeCode'] = isset($data['subServiceTypeCode']) ? $data['subServiceTypeCode'] : null;
        $this->container['subServiceTypeName'] = isset($data['subServiceTypeName']) ? $data['subServiceTypeName'] : null;
        $this->container['subResourceTypeCode'] = isset($data['subResourceTypeCode']) ? $data['subResourceTypeCode'] : null;
        $this->container['subResourceTypeName'] = isset($data['subResourceTypeName']) ? $data['subResourceTypeName'] : null;
        $this->container['subResourceId'] = isset($data['subResourceId']) ? $data['subResourceId'] : null;
        $this->container['subResourceName'] = isset($data['subResourceName']) ? $data['subResourceName'] : null;
        $this->container['preOrderId'] = isset($data['preOrderId']) ? $data['preOrderId'] : null;
        $this->container['azCodeInfos'] = isset($data['azCodeInfos']) ? $data['azCodeInfos'] : null;
        $this->container['payerAccountId'] = isset($data['payerAccountId']) ? $data['payerAccountId'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['consumeTime'] = isset($data['consumeTime']) ? $data['consumeTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 256)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceTypeCode']) && (mb_strlen($this->container['resourceTypeCode']) > 256)) {
                $invalidProperties[] = "invalid value for 'resourceTypeCode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourceTypeCode']) && (mb_strlen($this->container['resourceTypeCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceTypeCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resInstanceId']) && (mb_strlen($this->container['resInstanceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'resInstanceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resInstanceId']) && (mb_strlen($this->container['resInstanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'resInstanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['payerAccountId']) && (mb_strlen($this->container['payerAccountId']) > 64)) {
                $invalidProperties[] = "invalid value for 'payerAccountId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['payerAccountId']) && (mb_strlen($this->container['payerAccountId']) < 1)) {
                $invalidProperties[] = "invalid value for 'payerAccountId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['effectiveTime']) && (mb_strlen($this->container['effectiveTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['effectiveTime']) && (mb_strlen($this->container['effectiveTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'effectiveTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 32)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
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
    * Gets cycle
    *  资源详单数据所在账期，东八区时间，格式为YYYY-MM。 例如2020-01。
    *
    * @return string|null
    */
    public function getCycle()
    {
        return $this->container['cycle'];
    }

    /**
    * Sets cycle
    *
    * @param string|null $cycle 资源详单数据所在账期，东八区时间，格式为YYYY-MM。 例如2020-01。
    *
    * @return $this
    */
    public function setCycle($cycle)
    {
        $this->container['cycle'] = $cycle;
        return $this;
    }

    /**
    * Gets billDate
    *  消费日期，东八区时间，格式为YYYY-MM-DD。  说明： 当statistic_type=2时该字段才有值，否则返回null。
    *
    * @return string|null
    */
    public function getBillDate()
    {
        return $this->container['billDate'];
    }

    /**
    * Sets billDate
    *
    * @param string|null $billDate 消费日期，东八区时间，格式为YYYY-MM-DD。  说明： 当statistic_type=2时该字段才有值，否则返回null。
    *
    * @return $this
    */
    public function setBillDate($billDate)
    {
        $this->container['billDate'] = $billDate;
        return $this;
    }

    /**
    * Gets billType
    *  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需
    *
    * @return int|null
    */
    public function getBillType()
    {
        return $this->container['billType'];
    }

    /**
    * Sets billType
    *
    * @param int|null $billType 账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更23：消费-节省计划抵扣24：退款-包年/包月转按需
    *
    * @return $this
    */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;
        return $this;
    }

    /**
    * Gets customerId
    *  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    *
    * @return string|null
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string|null $customerId 消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets region
    *  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets regionName
    *  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    *
    * @return string|null
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string|null $resourceTypeCode 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets cloudServiceTypeName
    *  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    *
    * @return string|null
    */
    public function getCloudServiceTypeName()
    {
        return $this->container['cloudServiceTypeName'];
    }

    /**
    * Sets cloudServiceTypeName
    *
    * @param string|null $cloudServiceTypeName 云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    *
    * @return $this
    */
    public function setCloudServiceTypeName($cloudServiceTypeName)
    {
        $this->container['cloudServiceTypeName'] = $cloudServiceTypeName;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName 资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets resInstanceId
    *  资源实例ID。
    *
    * @return string|null
    */
    public function getResInstanceId()
    {
        return $this->container['resInstanceId'];
    }

    /**
    * Sets resInstanceId
    *
    * @param string|null $resInstanceId 资源实例ID。
    *
    * @return $this
    */
    public function setResInstanceId($resInstanceId)
    {
        $this->container['resInstanceId'] = $resInstanceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称。客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称。客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceTag
    *  资源标签。客户在管理资源的时候，可以设置资源标签。
    *
    * @return string|null
    */
    public function getResourceTag()
    {
        return $this->container['resourceTag'];
    }

    /**
    * Sets resourceTag
    *
    * @param string|null $resourceTag 资源标签。客户在管理资源的时候，可以设置资源标签。
    *
    * @return $this
    */
    public function setResourceTag($resourceTag)
    {
        $this->container['resourceTag'] = $resourceTag;
        return $this;
    }

    /**
    * Gets skuCode
    *  SKU编码，在账单中唯一标识一个资源的规格。
    *
    * @return string|null
    */
    public function getSkuCode()
    {
        return $this->container['skuCode'];
    }

    /**
    * Sets skuCode
    *
    * @param string|null $skuCode SKU编码，在账单中唯一标识一个资源的规格。
    *
    * @return $this
    */
    public function setSkuCode($skuCode)
    {
        $this->container['skuCode'] = $skuCode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
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
    * @param string|null $enterpriseProjectId 企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称。
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称。
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划
    *
    * @return int|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param int|null $chargeMode 计费模式。 1 : 包年/包月3：按需10：预留实例11：节省计划
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets consumeAmount
    *  客户购买云服务类型的消费金额，包含代金券、现金券，精确到小数点后2位。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    *
    * @return float|null
    */
    public function getConsumeAmount()
    {
        return $this->container['consumeAmount'];
    }

    /**
    * Sets consumeAmount
    *
    * @param float|null $consumeAmount 客户购买云服务类型的消费金额，包含代金券、现金券，精确到小数点后2位。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    *
    * @return $this
    */
    public function setConsumeAmount($consumeAmount)
    {
        $this->container['consumeAmount'] = $consumeAmount;
        return $this;
    }

    /**
    * Gets cashAmount
    *  现金支付金额。
    *
    * @return float|null
    */
    public function getCashAmount()
    {
        return $this->container['cashAmount'];
    }

    /**
    * Sets cashAmount
    *
    * @param float|null $cashAmount 现金支付金额。
    *
    * @return $this
    */
    public function setCashAmount($cashAmount)
    {
        $this->container['cashAmount'] = $cashAmount;
        return $this;
    }

    /**
    * Gets creditAmount
    *  信用额度支付金额。
    *
    * @return float|null
    */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
    * Sets creditAmount
    *
    * @param float|null $creditAmount 信用额度支付金额。
    *
    * @return $this
    */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;
        return $this;
    }

    /**
    * Gets couponAmount
    *  代金券支付金额。
    *
    * @return float|null
    */
    public function getCouponAmount()
    {
        return $this->container['couponAmount'];
    }

    /**
    * Sets couponAmount
    *
    * @param float|null $couponAmount 代金券支付金额。
    *
    * @return $this
    */
    public function setCouponAmount($couponAmount)
    {
        $this->container['couponAmount'] = $couponAmount;
        return $this;
    }

    /**
    * Gets flexipurchaseCouponAmount
    *  现金券支付金额。
    *
    * @return float|null
    */
    public function getFlexipurchaseCouponAmount()
    {
        return $this->container['flexipurchaseCouponAmount'];
    }

    /**
    * Sets flexipurchaseCouponAmount
    *
    * @param float|null $flexipurchaseCouponAmount 现金券支付金额。
    *
    * @return $this
    */
    public function setFlexipurchaseCouponAmount($flexipurchaseCouponAmount)
    {
        $this->container['flexipurchaseCouponAmount'] = $flexipurchaseCouponAmount;
        return $this;
    }

    /**
    * Gets storedCardAmount
    *  储值卡支付金额。
    *
    * @return float|null
    */
    public function getStoredCardAmount()
    {
        return $this->container['storedCardAmount'];
    }

    /**
    * Sets storedCardAmount
    *
    * @param float|null $storedCardAmount 储值卡支付金额。
    *
    * @return $this
    */
    public function setStoredCardAmount($storedCardAmount)
    {
        $this->container['storedCardAmount'] = $storedCardAmount;
        return $this;
    }

    /**
    * Gets bonusAmount
    *  奖励金支付金额（用于现网客户未使用完的奖励金）。
    *
    * @return float|null
    */
    public function getBonusAmount()
    {
        return $this->container['bonusAmount'];
    }

    /**
    * Sets bonusAmount
    *
    * @param float|null $bonusAmount 奖励金支付金额（用于现网客户未使用完的奖励金）。
    *
    * @return $this
    */
    public function setBonusAmount($bonusAmount)
    {
        $this->container['bonusAmount'] = $bonusAmount;
        return $this;
    }

    /**
    * Gets debtAmount
    *  欠费金额。
    *
    * @return float|null
    */
    public function getDebtAmount()
    {
        return $this->container['debtAmount'];
    }

    /**
    * Sets debtAmount
    *
    * @param float|null $debtAmount 欠费金额。
    *
    * @return $this
    */
    public function setDebtAmount($debtAmount)
    {
        $this->container['debtAmount'] = $debtAmount;
        return $this;
    }

    /**
    * Gets adjustmentAmount
    *  欠费核销金额。
    *
    * @return float|null
    */
    public function getAdjustmentAmount()
    {
        return $this->container['adjustmentAmount'];
    }

    /**
    * Sets adjustmentAmount
    *
    * @param float|null $adjustmentAmount 欠费核销金额。
    *
    * @return $this
    */
    public function setAdjustmentAmount($adjustmentAmount)
    {
        $this->container['adjustmentAmount'] = $adjustmentAmount;
        return $this;
    }

    /**
    * Gets officialAmount
    *  官网价。
    *
    * @return float|null
    */
    public function getOfficialAmount()
    {
        return $this->container['officialAmount'];
    }

    /**
    * Sets officialAmount
    *
    * @param float|null $officialAmount 官网价。
    *
    * @return $this
    */
    public function setOfficialAmount($officialAmount)
    {
        $this->container['officialAmount'] = $officialAmount;
        return $this;
    }

    /**
    * Gets discountAmount
    *  对应官网价折扣金额。
    *
    * @return float|null
    */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
    * Sets discountAmount
    *
    * @param float|null $discountAmount 对应官网价折扣金额。
    *
    * @return $this
    */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  金额单位。 1：元
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 金额单位。 1：元
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets periodType
    *  周期类型： 19：年20：月24：天25：小时5：一次性
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
    * @param int|null $periodType 周期类型： 19：年20：月24：天25：小时5：一次性
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets rootResourceId
    *  根资源标识。
    *
    * @return string|null
    */
    public function getRootResourceId()
    {
        return $this->container['rootResourceId'];
    }

    /**
    * Sets rootResourceId
    *
    * @param string|null $rootResourceId 根资源标识。
    *
    * @return $this
    */
    public function setRootResourceId($rootResourceId)
    {
        $this->container['rootResourceId'] = $rootResourceId;
        return $this;
    }

    /**
    * Gets parentResourceId
    *  父资源标识。
    *
    * @return string|null
    */
    public function getParentResourceId()
    {
        return $this->container['parentResourceId'];
    }

    /**
    * Sets parentResourceId
    *
    * @param string|null $parentResourceId 父资源标识。
    *
    * @return $this
    */
    public function setParentResourceId($parentResourceId)
    {
        $this->container['parentResourceId'] = $parentResourceId;
        return $this;
    }

    /**
    * Gets tradeId
    *  订单ID 或 交易ID。 账单类型为1，2，3，4，8时为订单ID；其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)。
    *
    * @return string|null
    */
    public function getTradeId()
    {
        return $this->container['tradeId'];
    }

    /**
    * Sets tradeId
    *
    * @param string|null $tradeId 订单ID 或 交易ID。 账单类型为1，2，3，4，8时为订单ID；其它场景下为： 交易ID(非月末扣费：应收ID；月末扣费：账单ID)。
    *
    * @return $this
    */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;
        return $this;
    }

    /**
    * Gets id
    *  唯一标识。 该字段为预留字段。
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
    * @param string|null $id 唯一标识。 该字段为预留字段。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets productSpecDesc
    *  产品的规格描述。
    *
    * @return string|null
    */
    public function getProductSpecDesc()
    {
        return $this->container['productSpecDesc'];
    }

    /**
    * Sets productSpecDesc
    *
    * @param string|null $productSpecDesc 产品的规格描述。
    *
    * @return $this
    */
    public function setProductSpecDesc($productSpecDesc)
    {
        $this->container['productSpecDesc'] = $productSpecDesc;
        return $this;
    }

    /**
    * Gets subServiceTypeCode
    *  整机的子云服务的自身的云服务类型编码。
    *
    * @return string|null
    */
    public function getSubServiceTypeCode()
    {
        return $this->container['subServiceTypeCode'];
    }

    /**
    * Sets subServiceTypeCode
    *
    * @param string|null $subServiceTypeCode 整机的子云服务的自身的云服务类型编码。
    *
    * @return $this
    */
    public function setSubServiceTypeCode($subServiceTypeCode)
    {
        $this->container['subServiceTypeCode'] = $subServiceTypeCode;
        return $this;
    }

    /**
    * Gets subServiceTypeName
    *  整机的子云服务的自身的云服务类型名称。
    *
    * @return string|null
    */
    public function getSubServiceTypeName()
    {
        return $this->container['subServiceTypeName'];
    }

    /**
    * Sets subServiceTypeName
    *
    * @param string|null $subServiceTypeName 整机的子云服务的自身的云服务类型名称。
    *
    * @return $this
    */
    public function setSubServiceTypeName($subServiceTypeName)
    {
        $this->container['subServiceTypeName'] = $subServiceTypeName;
        return $this;
    }

    /**
    * Gets subResourceTypeCode
    *  整机的子云服务的自身的资源类型编码。
    *
    * @return string|null
    */
    public function getSubResourceTypeCode()
    {
        return $this->container['subResourceTypeCode'];
    }

    /**
    * Sets subResourceTypeCode
    *
    * @param string|null $subResourceTypeCode 整机的子云服务的自身的资源类型编码。
    *
    * @return $this
    */
    public function setSubResourceTypeCode($subResourceTypeCode)
    {
        $this->container['subResourceTypeCode'] = $subResourceTypeCode;
        return $this;
    }

    /**
    * Gets subResourceTypeName
    *  整机的子云服务的自身的资源类型名称。
    *
    * @return string|null
    */
    public function getSubResourceTypeName()
    {
        return $this->container['subResourceTypeName'];
    }

    /**
    * Sets subResourceTypeName
    *
    * @param string|null $subResourceTypeName 整机的子云服务的自身的资源类型名称。
    *
    * @return $this
    */
    public function setSubResourceTypeName($subResourceTypeName)
    {
        $this->container['subResourceTypeName'] = $subResourceTypeName;
        return $this;
    }

    /**
    * Gets subResourceId
    *  整机的子云服务的自身的资源ID，资源标识。（如果为预留实例，则为预留实例标识）
    *
    * @return string|null
    */
    public function getSubResourceId()
    {
        return $this->container['subResourceId'];
    }

    /**
    * Sets subResourceId
    *
    * @param string|null $subResourceId 整机的子云服务的自身的资源ID，资源标识。（如果为预留实例，则为预留实例标识）
    *
    * @return $this
    */
    public function setSubResourceId($subResourceId)
    {
        $this->container['subResourceId'] = $subResourceId;
        return $this;
    }

    /**
    * Gets subResourceName
    *  整机的子云服务的自身的资源名称，资源标识。（如果为预留实例，则为预留实例标识）
    *
    * @return string|null
    */
    public function getSubResourceName()
    {
        return $this->container['subResourceName'];
    }

    /**
    * Sets subResourceName
    *
    * @param string|null $subResourceName 整机的子云服务的自身的资源名称，资源标识。（如果为预留实例，则为预留实例标识）
    *
    * @return $this
    */
    public function setSubResourceName($subResourceName)
    {
        $this->container['subResourceName'] = $subResourceName;
        return $this;
    }

    /**
    * Gets preOrderId
    *  原订单ID 。
    *
    * @return string|null
    */
    public function getPreOrderId()
    {
        return $this->container['preOrderId'];
    }

    /**
    * Sets preOrderId
    *
    * @param string|null $preOrderId 原订单ID 。
    *
    * @return $this
    */
    public function setPreOrderId($preOrderId)
    {
        $this->container['preOrderId'] = $preOrderId;
        return $this;
    }

    /**
    * Gets azCodeInfos
    *  可用区信息列表。具体请参见表 AzCodeInfo。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\AzCodeInfo[]|null
    */
    public function getAzCodeInfos()
    {
        return $this->container['azCodeInfos'];
    }

    /**
    * Sets azCodeInfos
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\AzCodeInfo[]|null $azCodeInfos 可用区信息列表。具体请参见表 AzCodeInfo。
    *
    * @return $this
    */
    public function setAzCodeInfos($azCodeInfos)
    {
        $this->container['azCodeInfos'] = $azCodeInfos;
        return $this;
    }

    /**
    * Gets payerAccountId
    *  |参数名称：支付账号ID。| |参数的约束及描述：如果是普通客户或者财务独立企业子客户或者企业主客户查询消费记录，此处为客户自己的客户ID。如果是财务托管企业子查询消费记录，此处为企业主客户ID或自己的客户ID。|
    *
    * @return string|null
    */
    public function getPayerAccountId()
    {
        return $this->container['payerAccountId'];
    }

    /**
    * Sets payerAccountId
    *
    * @param string|null $payerAccountId |参数名称：支付账号ID。| |参数的约束及描述：如果是普通客户或者财务独立企业子客户或者企业主客户查询消费记录，此处为客户自己的客户ID。如果是财务托管企业子查询消费记录，此处为企业主客户ID或自己的客户ID。|
    *
    * @return $this
    */
    public function setPayerAccountId($payerAccountId)
    {
        $this->container['payerAccountId'] = $payerAccountId;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  |参数名称：费用对应的资源使用的开始时间| |参数的约束及描述：费用对应的资源使用的开始时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime |参数名称：费用对应的资源使用的开始时间| |参数的约束及描述：费用对应的资源使用的开始时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  |参数名称：费用对应的资源使用的结束时间| |参数的约束及描述：费用对应的资源使用的结束时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime |参数名称：费用对应的资源使用的结束时间| |参数的约束及描述：费用对应的资源使用的结束时间，statistic_type=3有效，statistic_type=1或者2该字段保留。|
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets consumeTime
    *  |参数名称：消费时间| |参数约束及描述：消费时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。包周期、预留实例预付为交易时间，按需、预留实例按时计费为话单生失效时间。 说明：当statistic_type=3时有效。|
    *
    * @return string|null
    */
    public function getConsumeTime()
    {
        return $this->container['consumeTime'];
    }

    /**
    * Sets consumeTime
    *
    * @param string|null $consumeTime |参数名称：消费时间| |参数约束及描述：消费时间，UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ。包周期、预留实例预付为交易时间，按需、预留实例按时计费为话单生失效时间。 说明：当statistic_type=3时有效。|
    *
    * @return $this
    */
    public function setConsumeTime($consumeTime)
    {
        $this->container['consumeTime'] = $consumeTime;
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

