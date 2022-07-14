<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NvlCostAnalysedBillDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NvlCostAnalysedBillDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sharedMonth  查询分摊成本的月份。 格式为YYYY-MM，按照东八区截取。
    * billCycle  账期。 格式：YYYY-MM。按照东八区截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID。如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productSpecDesc  产品的规格描述。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型。 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * consumeAmount  消费金额（应付金额）。 消费金额=期初已分摊金额+当月分摊金额+期末未分摊金额
    * pastMonthsAmortizedAmount  期初已分摊金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * currentMonthAmortizedAmount  当月分摊金额。 当月分摊金额=现金分摊金额+信用额度分摊金额+代金券分摊金额+现金券分摊金额+储值卡分摊金额+奖励金分摊金额
    * futureMonthsAmortizedAmount  期末未分摊金额。月度成本分摊时，当月以后还未分摊的金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * amortizedCashAmount  月度成本分摊时，当月已分摊金额中包含的现金金额。
    * amortizedCreditAmount  月度成本分摊时，当月已分摊金额中包含的信用额度分摊金额。
    * amortizedCouponAmount  月度成本分摊时，当月已分摊金额中包含的代金券分摊金额。
    * amortizedFlexipurchaseCouponAmount  月度成本分摊时，当月已分摊金额中包含的现金券分摊金额。
    * amortizedStoredValueCardAmount  月度成本分摊时，当月已分摊金额中包含的储值卡分摊金额。
    * amortizedBonusAmount  月度成本分摊时，当月已分摊金额中包含的奖励金分摊金额（用于现网未清干净的奖励金）。
    * subServiceTypeCode  该字段为预留字段
    * subServiceTypeName  该字段为预留字段
    * subResourceTypeCode  该字段为预留字段
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    * effectiveTagPairs  成本标签。
    * costUnitPairs  成本单元。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sharedMonth' => 'string',
            'billCycle' => 'string',
            'billType' => 'int',
            'customerId' => 'string',
            'regionCode' => 'string',
            'regionName' => 'string',
            'serviceTypeCode' => 'string',
            'resourceTypeCode' => 'string',
            'serviceTypeName' => 'string',
            'resourceTypeName' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceTag' => 'string',
            'productSpecDesc' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'chargingMode' => 'int',
            'orderId' => 'string',
            'periodType' => 'int',
            'usageType' => 'string',
            'usage' => 'double',
            'usageMeasureId' => 'int',
            'freeResourceUsage' => 'double',
            'freeResourceMeasureId' => 'int',
            'riUsage' => 'double',
            'riUsageMeasureId' => 'int',
            'consumeAmount' => 'double',
            'pastMonthsAmortizedAmount' => 'double',
            'currentMonthAmortizedAmount' => 'double',
            'futureMonthsAmortizedAmount' => 'double',
            'amortizedCashAmount' => 'double',
            'amortizedCreditAmount' => 'double',
            'amortizedCouponAmount' => 'double',
            'amortizedFlexipurchaseCouponAmount' => 'double',
            'amortizedStoredValueCardAmount' => 'double',
            'amortizedBonusAmount' => 'double',
            'subServiceTypeCode' => 'string',
            'subServiceTypeName' => 'string',
            'subResourceTypeCode' => 'string',
            'subResourceTypeName' => 'string',
            'subResourceId' => 'string',
            'subResourceName' => 'string',
            'effectiveTagPairs' => '\HuaweiCloud\SDK\Bss\V2\Model\TagPair[]',
            'costUnitPairs' => '\HuaweiCloud\SDK\Bss\V2\Model\CostUnitPair[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sharedMonth  查询分摊成本的月份。 格式为YYYY-MM，按照东八区截取。
    * billCycle  账期。 格式：YYYY-MM。按照东八区截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID。如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productSpecDesc  产品的规格描述。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型。 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * consumeAmount  消费金额（应付金额）。 消费金额=期初已分摊金额+当月分摊金额+期末未分摊金额
    * pastMonthsAmortizedAmount  期初已分摊金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * currentMonthAmortizedAmount  当月分摊金额。 当月分摊金额=现金分摊金额+信用额度分摊金额+代金券分摊金额+现金券分摊金额+储值卡分摊金额+奖励金分摊金额
    * futureMonthsAmortizedAmount  期末未分摊金额。月度成本分摊时，当月以后还未分摊的金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * amortizedCashAmount  月度成本分摊时，当月已分摊金额中包含的现金金额。
    * amortizedCreditAmount  月度成本分摊时，当月已分摊金额中包含的信用额度分摊金额。
    * amortizedCouponAmount  月度成本分摊时，当月已分摊金额中包含的代金券分摊金额。
    * amortizedFlexipurchaseCouponAmount  月度成本分摊时，当月已分摊金额中包含的现金券分摊金额。
    * amortizedStoredValueCardAmount  月度成本分摊时，当月已分摊金额中包含的储值卡分摊金额。
    * amortizedBonusAmount  月度成本分摊时，当月已分摊金额中包含的奖励金分摊金额（用于现网未清干净的奖励金）。
    * subServiceTypeCode  该字段为预留字段
    * subServiceTypeName  该字段为预留字段
    * subResourceTypeCode  该字段为预留字段
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    * effectiveTagPairs  成本标签。
    * costUnitPairs  成本单元。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sharedMonth' => null,
        'billCycle' => null,
        'billType' => 'int32',
        'customerId' => null,
        'regionCode' => null,
        'regionName' => null,
        'serviceTypeCode' => null,
        'resourceTypeCode' => null,
        'serviceTypeName' => null,
        'resourceTypeName' => null,
        'effectiveTime' => null,
        'expireTime' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceTag' => null,
        'productSpecDesc' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'chargingMode' => 'int32',
        'orderId' => null,
        'periodType' => 'int32',
        'usageType' => null,
        'usage' => 'double',
        'usageMeasureId' => 'int32',
        'freeResourceUsage' => 'double',
        'freeResourceMeasureId' => 'int32',
        'riUsage' => 'double',
        'riUsageMeasureId' => 'int32',
        'consumeAmount' => 'double',
        'pastMonthsAmortizedAmount' => 'double',
        'currentMonthAmortizedAmount' => 'double',
        'futureMonthsAmortizedAmount' => 'double',
        'amortizedCashAmount' => 'double',
        'amortizedCreditAmount' => 'double',
        'amortizedCouponAmount' => 'double',
        'amortizedFlexipurchaseCouponAmount' => 'double',
        'amortizedStoredValueCardAmount' => 'double',
        'amortizedBonusAmount' => 'double',
        'subServiceTypeCode' => null,
        'subServiceTypeName' => null,
        'subResourceTypeCode' => null,
        'subResourceTypeName' => null,
        'subResourceId' => null,
        'subResourceName' => null,
        'effectiveTagPairs' => null,
        'costUnitPairs' => null
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
    * sharedMonth  查询分摊成本的月份。 格式为YYYY-MM，按照东八区截取。
    * billCycle  账期。 格式：YYYY-MM。按照东八区截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID。如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productSpecDesc  产品的规格描述。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型。 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * consumeAmount  消费金额（应付金额）。 消费金额=期初已分摊金额+当月分摊金额+期末未分摊金额
    * pastMonthsAmortizedAmount  期初已分摊金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * currentMonthAmortizedAmount  当月分摊金额。 当月分摊金额=现金分摊金额+信用额度分摊金额+代金券分摊金额+现金券分摊金额+储值卡分摊金额+奖励金分摊金额
    * futureMonthsAmortizedAmount  期末未分摊金额。月度成本分摊时，当月以后还未分摊的金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * amortizedCashAmount  月度成本分摊时，当月已分摊金额中包含的现金金额。
    * amortizedCreditAmount  月度成本分摊时，当月已分摊金额中包含的信用额度分摊金额。
    * amortizedCouponAmount  月度成本分摊时，当月已分摊金额中包含的代金券分摊金额。
    * amortizedFlexipurchaseCouponAmount  月度成本分摊时，当月已分摊金额中包含的现金券分摊金额。
    * amortizedStoredValueCardAmount  月度成本分摊时，当月已分摊金额中包含的储值卡分摊金额。
    * amortizedBonusAmount  月度成本分摊时，当月已分摊金额中包含的奖励金分摊金额（用于现网未清干净的奖励金）。
    * subServiceTypeCode  该字段为预留字段
    * subServiceTypeName  该字段为预留字段
    * subResourceTypeCode  该字段为预留字段
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    * effectiveTagPairs  成本标签。
    * costUnitPairs  成本单元。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sharedMonth' => 'shared_month',
            'billCycle' => 'bill_cycle',
            'billType' => 'bill_type',
            'customerId' => 'customer_id',
            'regionCode' => 'region_code',
            'regionName' => 'region_name',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeCode' => 'resource_type_code',
            'serviceTypeName' => 'service_type_name',
            'resourceTypeName' => 'resource_type_name',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceTag' => 'resource_tag',
            'productSpecDesc' => 'product_spec_desc',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'chargingMode' => 'charging_mode',
            'orderId' => 'order_id',
            'periodType' => 'period_type',
            'usageType' => 'usage_type',
            'usage' => 'usage',
            'usageMeasureId' => 'usage_measure_id',
            'freeResourceUsage' => 'free_resource_usage',
            'freeResourceMeasureId' => 'free_resource_measure_id',
            'riUsage' => 'ri_usage',
            'riUsageMeasureId' => 'ri_usage_measure_id',
            'consumeAmount' => 'consume_amount',
            'pastMonthsAmortizedAmount' => 'past_months_amortized_amount',
            'currentMonthAmortizedAmount' => 'current_month_amortized_amount',
            'futureMonthsAmortizedAmount' => 'future_months_amortized_amount',
            'amortizedCashAmount' => 'amortized_cash_amount',
            'amortizedCreditAmount' => 'amortized_credit_amount',
            'amortizedCouponAmount' => 'amortized_coupon_amount',
            'amortizedFlexipurchaseCouponAmount' => 'amortized_flexipurchase_coupon_amount',
            'amortizedStoredValueCardAmount' => 'amortized_stored_value_card_amount',
            'amortizedBonusAmount' => 'amortized_bonus_amount',
            'subServiceTypeCode' => 'sub_service_type_code',
            'subServiceTypeName' => 'sub_service_type_name',
            'subResourceTypeCode' => 'sub_resource_type_code',
            'subResourceTypeName' => 'sub_resource_type_name',
            'subResourceId' => 'sub_resource_id',
            'subResourceName' => 'sub_resource_name',
            'effectiveTagPairs' => 'effective_tag_pairs',
            'costUnitPairs' => 'cost_unit_pairs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sharedMonth  查询分摊成本的月份。 格式为YYYY-MM，按照东八区截取。
    * billCycle  账期。 格式：YYYY-MM。按照东八区截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID。如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productSpecDesc  产品的规格描述。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型。 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * consumeAmount  消费金额（应付金额）。 消费金额=期初已分摊金额+当月分摊金额+期末未分摊金额
    * pastMonthsAmortizedAmount  期初已分摊金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * currentMonthAmortizedAmount  当月分摊金额。 当月分摊金额=现金分摊金额+信用额度分摊金额+代金券分摊金额+现金券分摊金额+储值卡分摊金额+奖励金分摊金额
    * futureMonthsAmortizedAmount  期末未分摊金额。月度成本分摊时，当月以后还未分摊的金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * amortizedCashAmount  月度成本分摊时，当月已分摊金额中包含的现金金额。
    * amortizedCreditAmount  月度成本分摊时，当月已分摊金额中包含的信用额度分摊金额。
    * amortizedCouponAmount  月度成本分摊时，当月已分摊金额中包含的代金券分摊金额。
    * amortizedFlexipurchaseCouponAmount  月度成本分摊时，当月已分摊金额中包含的现金券分摊金额。
    * amortizedStoredValueCardAmount  月度成本分摊时，当月已分摊金额中包含的储值卡分摊金额。
    * amortizedBonusAmount  月度成本分摊时，当月已分摊金额中包含的奖励金分摊金额（用于现网未清干净的奖励金）。
    * subServiceTypeCode  该字段为预留字段
    * subServiceTypeName  该字段为预留字段
    * subResourceTypeCode  该字段为预留字段
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    * effectiveTagPairs  成本标签。
    * costUnitPairs  成本单元。
    *
    * @var string[]
    */
    protected static $setters = [
            'sharedMonth' => 'setSharedMonth',
            'billCycle' => 'setBillCycle',
            'billType' => 'setBillType',
            'customerId' => 'setCustomerId',
            'regionCode' => 'setRegionCode',
            'regionName' => 'setRegionName',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeCode' => 'setResourceTypeCode',
            'serviceTypeName' => 'setServiceTypeName',
            'resourceTypeName' => 'setResourceTypeName',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceTag' => 'setResourceTag',
            'productSpecDesc' => 'setProductSpecDesc',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'chargingMode' => 'setChargingMode',
            'orderId' => 'setOrderId',
            'periodType' => 'setPeriodType',
            'usageType' => 'setUsageType',
            'usage' => 'setUsage',
            'usageMeasureId' => 'setUsageMeasureId',
            'freeResourceUsage' => 'setFreeResourceUsage',
            'freeResourceMeasureId' => 'setFreeResourceMeasureId',
            'riUsage' => 'setRiUsage',
            'riUsageMeasureId' => 'setRiUsageMeasureId',
            'consumeAmount' => 'setConsumeAmount',
            'pastMonthsAmortizedAmount' => 'setPastMonthsAmortizedAmount',
            'currentMonthAmortizedAmount' => 'setCurrentMonthAmortizedAmount',
            'futureMonthsAmortizedAmount' => 'setFutureMonthsAmortizedAmount',
            'amortizedCashAmount' => 'setAmortizedCashAmount',
            'amortizedCreditAmount' => 'setAmortizedCreditAmount',
            'amortizedCouponAmount' => 'setAmortizedCouponAmount',
            'amortizedFlexipurchaseCouponAmount' => 'setAmortizedFlexipurchaseCouponAmount',
            'amortizedStoredValueCardAmount' => 'setAmortizedStoredValueCardAmount',
            'amortizedBonusAmount' => 'setAmortizedBonusAmount',
            'subServiceTypeCode' => 'setSubServiceTypeCode',
            'subServiceTypeName' => 'setSubServiceTypeName',
            'subResourceTypeCode' => 'setSubResourceTypeCode',
            'subResourceTypeName' => 'setSubResourceTypeName',
            'subResourceId' => 'setSubResourceId',
            'subResourceName' => 'setSubResourceName',
            'effectiveTagPairs' => 'setEffectiveTagPairs',
            'costUnitPairs' => 'setCostUnitPairs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sharedMonth  查询分摊成本的月份。 格式为YYYY-MM，按照东八区截取。
    * billCycle  账期。 格式：YYYY-MM。按照东八区截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID。如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productSpecDesc  产品的规格描述。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型。 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * consumeAmount  消费金额（应付金额）。 消费金额=期初已分摊金额+当月分摊金额+期末未分摊金额
    * pastMonthsAmortizedAmount  期初已分摊金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * currentMonthAmortizedAmount  当月分摊金额。 当月分摊金额=现金分摊金额+信用额度分摊金额+代金券分摊金额+现金券分摊金额+储值卡分摊金额+奖励金分摊金额
    * futureMonthsAmortizedAmount  期末未分摊金额。月度成本分摊时，当月以后还未分摊的金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    * amortizedCashAmount  月度成本分摊时，当月已分摊金额中包含的现金金额。
    * amortizedCreditAmount  月度成本分摊时，当月已分摊金额中包含的信用额度分摊金额。
    * amortizedCouponAmount  月度成本分摊时，当月已分摊金额中包含的代金券分摊金额。
    * amortizedFlexipurchaseCouponAmount  月度成本分摊时，当月已分摊金额中包含的现金券分摊金额。
    * amortizedStoredValueCardAmount  月度成本分摊时，当月已分摊金额中包含的储值卡分摊金额。
    * amortizedBonusAmount  月度成本分摊时，当月已分摊金额中包含的奖励金分摊金额（用于现网未清干净的奖励金）。
    * subServiceTypeCode  该字段为预留字段
    * subServiceTypeName  该字段为预留字段
    * subResourceTypeCode  该字段为预留字段
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    * effectiveTagPairs  成本标签。
    * costUnitPairs  成本单元。
    *
    * @var string[]
    */
    protected static $getters = [
            'sharedMonth' => 'getSharedMonth',
            'billCycle' => 'getBillCycle',
            'billType' => 'getBillType',
            'customerId' => 'getCustomerId',
            'regionCode' => 'getRegionCode',
            'regionName' => 'getRegionName',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeCode' => 'getResourceTypeCode',
            'serviceTypeName' => 'getServiceTypeName',
            'resourceTypeName' => 'getResourceTypeName',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceTag' => 'getResourceTag',
            'productSpecDesc' => 'getProductSpecDesc',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'chargingMode' => 'getChargingMode',
            'orderId' => 'getOrderId',
            'periodType' => 'getPeriodType',
            'usageType' => 'getUsageType',
            'usage' => 'getUsage',
            'usageMeasureId' => 'getUsageMeasureId',
            'freeResourceUsage' => 'getFreeResourceUsage',
            'freeResourceMeasureId' => 'getFreeResourceMeasureId',
            'riUsage' => 'getRiUsage',
            'riUsageMeasureId' => 'getRiUsageMeasureId',
            'consumeAmount' => 'getConsumeAmount',
            'pastMonthsAmortizedAmount' => 'getPastMonthsAmortizedAmount',
            'currentMonthAmortizedAmount' => 'getCurrentMonthAmortizedAmount',
            'futureMonthsAmortizedAmount' => 'getFutureMonthsAmortizedAmount',
            'amortizedCashAmount' => 'getAmortizedCashAmount',
            'amortizedCreditAmount' => 'getAmortizedCreditAmount',
            'amortizedCouponAmount' => 'getAmortizedCouponAmount',
            'amortizedFlexipurchaseCouponAmount' => 'getAmortizedFlexipurchaseCouponAmount',
            'amortizedStoredValueCardAmount' => 'getAmortizedStoredValueCardAmount',
            'amortizedBonusAmount' => 'getAmortizedBonusAmount',
            'subServiceTypeCode' => 'getSubServiceTypeCode',
            'subServiceTypeName' => 'getSubServiceTypeName',
            'subResourceTypeCode' => 'getSubResourceTypeCode',
            'subResourceTypeName' => 'getSubResourceTypeName',
            'subResourceId' => 'getSubResourceId',
            'subResourceName' => 'getSubResourceName',
            'effectiveTagPairs' => 'getEffectiveTagPairs',
            'costUnitPairs' => 'getCostUnitPairs'
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
        $this->container['sharedMonth'] = isset($data['sharedMonth']) ? $data['sharedMonth'] : null;
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceTag'] = isset($data['resourceTag']) ? $data['resourceTag'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['usageType'] = isset($data['usageType']) ? $data['usageType'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['usageMeasureId'] = isset($data['usageMeasureId']) ? $data['usageMeasureId'] : null;
        $this->container['freeResourceUsage'] = isset($data['freeResourceUsage']) ? $data['freeResourceUsage'] : null;
        $this->container['freeResourceMeasureId'] = isset($data['freeResourceMeasureId']) ? $data['freeResourceMeasureId'] : null;
        $this->container['riUsage'] = isset($data['riUsage']) ? $data['riUsage'] : null;
        $this->container['riUsageMeasureId'] = isset($data['riUsageMeasureId']) ? $data['riUsageMeasureId'] : null;
        $this->container['consumeAmount'] = isset($data['consumeAmount']) ? $data['consumeAmount'] : null;
        $this->container['pastMonthsAmortizedAmount'] = isset($data['pastMonthsAmortizedAmount']) ? $data['pastMonthsAmortizedAmount'] : null;
        $this->container['currentMonthAmortizedAmount'] = isset($data['currentMonthAmortizedAmount']) ? $data['currentMonthAmortizedAmount'] : null;
        $this->container['futureMonthsAmortizedAmount'] = isset($data['futureMonthsAmortizedAmount']) ? $data['futureMonthsAmortizedAmount'] : null;
        $this->container['amortizedCashAmount'] = isset($data['amortizedCashAmount']) ? $data['amortizedCashAmount'] : null;
        $this->container['amortizedCreditAmount'] = isset($data['amortizedCreditAmount']) ? $data['amortizedCreditAmount'] : null;
        $this->container['amortizedCouponAmount'] = isset($data['amortizedCouponAmount']) ? $data['amortizedCouponAmount'] : null;
        $this->container['amortizedFlexipurchaseCouponAmount'] = isset($data['amortizedFlexipurchaseCouponAmount']) ? $data['amortizedFlexipurchaseCouponAmount'] : null;
        $this->container['amortizedStoredValueCardAmount'] = isset($data['amortizedStoredValueCardAmount']) ? $data['amortizedStoredValueCardAmount'] : null;
        $this->container['amortizedBonusAmount'] = isset($data['amortizedBonusAmount']) ? $data['amortizedBonusAmount'] : null;
        $this->container['subServiceTypeCode'] = isset($data['subServiceTypeCode']) ? $data['subServiceTypeCode'] : null;
        $this->container['subServiceTypeName'] = isset($data['subServiceTypeName']) ? $data['subServiceTypeName'] : null;
        $this->container['subResourceTypeCode'] = isset($data['subResourceTypeCode']) ? $data['subResourceTypeCode'] : null;
        $this->container['subResourceTypeName'] = isset($data['subResourceTypeName']) ? $data['subResourceTypeName'] : null;
        $this->container['subResourceId'] = isset($data['subResourceId']) ? $data['subResourceId'] : null;
        $this->container['subResourceName'] = isset($data['subResourceName']) ? $data['subResourceName'] : null;
        $this->container['effectiveTagPairs'] = isset($data['effectiveTagPairs']) ? $data['effectiveTagPairs'] : null;
        $this->container['costUnitPairs'] = isset($data['costUnitPairs']) ? $data['costUnitPairs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets sharedMonth
    *  查询分摊成本的月份。 格式为YYYY-MM，按照东八区截取。
    *
    * @return string|null
    */
    public function getSharedMonth()
    {
        return $this->container['sharedMonth'];
    }

    /**
    * Sets sharedMonth
    *
    * @param string|null $sharedMonth 查询分摊成本的月份。 格式为YYYY-MM，按照东八区截取。
    *
    * @return $this
    */
    public function setSharedMonth($sharedMonth)
    {
        $this->container['sharedMonth'] = $sharedMonth;
        return $this;
    }

    /**
    * Gets billCycle
    *  账期。 格式：YYYY-MM。按照东八区截取。
    *
    * @return string|null
    */
    public function getBillCycle()
    {
        return $this->container['billCycle'];
    }

    /**
    * Sets billCycle
    *
    * @param string|null $billCycle 账期。 格式：YYYY-MM。按照东八区截取。
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets billType
    *  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
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
    * @param int|null $billType 账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
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
    *  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID。如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
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
    * @param string|null $customerId 消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID。如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets regionCode
    *  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode 云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
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
    * Gets serviceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return string|null
    */
    public function getServiceTypeCode()
    {
        return $this->container['serviceTypeCode'];
    }

    /**
    * Sets serviceTypeCode
    *
    * @param string|null $serviceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
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
    * Gets serviceTypeName
    *  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    *
    * @return string|null
    */
    public function getServiceTypeName()
    {
        return $this->container['serviceTypeName'];
    }

    /**
    * Sets serviceTypeName
    *
    * @param string|null $serviceTypeName 云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    *
    * @return $this
    */
    public function setServiceTypeName($serviceTypeName)
    {
        $this->container['serviceTypeName'] = $serviceTypeName;
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
    * Gets effectiveTime
    *  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
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
    * @param string|null $effectiveTime 费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
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
    *  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
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
    * @param string|null $expireTime 费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称。
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
    * @param string|null $resourceName 资源名称。
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
    *  资源标签。
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
    * @param string|null $resourceTag 资源标签。
    *
    * @return $this
    */
    public function setResourceTag($resourceTag)
    {
        $this->container['resourceTag'] = $resourceTag;
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
    * Gets enterpriseProjectId
    *  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
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
    * @param string|null $enterpriseProjectId 企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
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
    *  企业项目的名称。
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
    * @param string|null $enterpriseProjectName 企业项目的名称。
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式。 1：包年/包月3：按需10：预留实例
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 计费模式。 1：包年/包月3：按需10：预留实例
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
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
    * @param string|null $orderId 订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets periodType
    *  周期类型。 19：年20：月24：天25：小时5：一次性
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
    * @param int|null $periodType 周期类型。 19：年20：月24：天25：小时5：一次性
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets usageType
    *  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    *
    * @return string|null
    */
    public function getUsageType()
    {
        return $this->container['usageType'];
    }

    /**
    * Sets usageType
    *
    * @param string|null $usageType 资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    *
    * @return $this
    */
    public function setUsageType($usageType)
    {
        $this->container['usageType'] = $usageType;
        return $this;
    }

    /**
    * Gets usage
    *  资源的使用量。
    *
    * @return double|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param double|null $usage 资源的使用量。
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }

    /**
    * Gets usageMeasureId
    *  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    *
    * @return int|null
    */
    public function getUsageMeasureId()
    {
        return $this->container['usageMeasureId'];
    }

    /**
    * Sets usageMeasureId
    *
    * @param int|null $usageMeasureId 资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    *
    * @return $this
    */
    public function setUsageMeasureId($usageMeasureId)
    {
        $this->container['usageMeasureId'] = $usageMeasureId;
        return $this;
    }

    /**
    * Gets freeResourceUsage
    *  套餐内使用量。
    *
    * @return double|null
    */
    public function getFreeResourceUsage()
    {
        return $this->container['freeResourceUsage'];
    }

    /**
    * Sets freeResourceUsage
    *
    * @param double|null $freeResourceUsage 套餐内使用量。
    *
    * @return $this
    */
    public function setFreeResourceUsage($freeResourceUsage)
    {
        $this->container['freeResourceUsage'] = $freeResourceUsage;
        return $this;
    }

    /**
    * Gets freeResourceMeasureId
    *  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    *
    * @return int|null
    */
    public function getFreeResourceMeasureId()
    {
        return $this->container['freeResourceMeasureId'];
    }

    /**
    * Sets freeResourceMeasureId
    *
    * @param int|null $freeResourceMeasureId 套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    *
    * @return $this
    */
    public function setFreeResourceMeasureId($freeResourceMeasureId)
    {
        $this->container['freeResourceMeasureId'] = $freeResourceMeasureId;
        return $this;
    }

    /**
    * Gets riUsage
    *  预留实例使用量。
    *
    * @return double|null
    */
    public function getRiUsage()
    {
        return $this->container['riUsage'];
    }

    /**
    * Sets riUsage
    *
    * @param double|null $riUsage 预留实例使用量。
    *
    * @return $this
    */
    public function setRiUsage($riUsage)
    {
        $this->container['riUsage'] = $riUsage;
        return $this;
    }

    /**
    * Gets riUsageMeasureId
    *  预留实例使用量单位。
    *
    * @return int|null
    */
    public function getRiUsageMeasureId()
    {
        return $this->container['riUsageMeasureId'];
    }

    /**
    * Sets riUsageMeasureId
    *
    * @param int|null $riUsageMeasureId 预留实例使用量单位。
    *
    * @return $this
    */
    public function setRiUsageMeasureId($riUsageMeasureId)
    {
        $this->container['riUsageMeasureId'] = $riUsageMeasureId;
        return $this;
    }

    /**
    * Gets consumeAmount
    *  消费金额（应付金额）。 消费金额=期初已分摊金额+当月分摊金额+期末未分摊金额
    *
    * @return double|null
    */
    public function getConsumeAmount()
    {
        return $this->container['consumeAmount'];
    }

    /**
    * Sets consumeAmount
    *
    * @param double|null $consumeAmount 消费金额（应付金额）。 消费金额=期初已分摊金额+当月分摊金额+期末未分摊金额
    *
    * @return $this
    */
    public function setConsumeAmount($consumeAmount)
    {
        $this->container['consumeAmount'] = $consumeAmount;
        return $this;
    }

    /**
    * Gets pastMonthsAmortizedAmount
    *  期初已分摊金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    *
    * @return double|null
    */
    public function getPastMonthsAmortizedAmount()
    {
        return $this->container['pastMonthsAmortizedAmount'];
    }

    /**
    * Sets pastMonthsAmortizedAmount
    *
    * @param double|null $pastMonthsAmortizedAmount 期初已分摊金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    *
    * @return $this
    */
    public function setPastMonthsAmortizedAmount($pastMonthsAmortizedAmount)
    {
        $this->container['pastMonthsAmortizedAmount'] = $pastMonthsAmortizedAmount;
        return $this;
    }

    /**
    * Gets currentMonthAmortizedAmount
    *  当月分摊金额。 当月分摊金额=现金分摊金额+信用额度分摊金额+代金券分摊金额+现金券分摊金额+储值卡分摊金额+奖励金分摊金额
    *
    * @return double|null
    */
    public function getCurrentMonthAmortizedAmount()
    {
        return $this->container['currentMonthAmortizedAmount'];
    }

    /**
    * Sets currentMonthAmortizedAmount
    *
    * @param double|null $currentMonthAmortizedAmount 当月分摊金额。 当月分摊金额=现金分摊金额+信用额度分摊金额+代金券分摊金额+现金券分摊金额+储值卡分摊金额+奖励金分摊金额
    *
    * @return $this
    */
    public function setCurrentMonthAmortizedAmount($currentMonthAmortizedAmount)
    {
        $this->container['currentMonthAmortizedAmount'] = $currentMonthAmortizedAmount;
        return $this;
    }

    /**
    * Gets futureMonthsAmortizedAmount
    *  期末未分摊金额。月度成本分摊时，当月以后还未分摊的金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    *
    * @return double|null
    */
    public function getFutureMonthsAmortizedAmount()
    {
        return $this->container['futureMonthsAmortizedAmount'];
    }

    /**
    * Sets futureMonthsAmortizedAmount
    *
    * @param double|null $futureMonthsAmortizedAmount 期末未分摊金额。月度成本分摊时，当月以后还未分摊的金额。  说明： 包周期和预留实例预付时有效；计费类型为按需，预留实例为按时计费时该值为0。
    *
    * @return $this
    */
    public function setFutureMonthsAmortizedAmount($futureMonthsAmortizedAmount)
    {
        $this->container['futureMonthsAmortizedAmount'] = $futureMonthsAmortizedAmount;
        return $this;
    }

    /**
    * Gets amortizedCashAmount
    *  月度成本分摊时，当月已分摊金额中包含的现金金额。
    *
    * @return double|null
    */
    public function getAmortizedCashAmount()
    {
        return $this->container['amortizedCashAmount'];
    }

    /**
    * Sets amortizedCashAmount
    *
    * @param double|null $amortizedCashAmount 月度成本分摊时，当月已分摊金额中包含的现金金额。
    *
    * @return $this
    */
    public function setAmortizedCashAmount($amortizedCashAmount)
    {
        $this->container['amortizedCashAmount'] = $amortizedCashAmount;
        return $this;
    }

    /**
    * Gets amortizedCreditAmount
    *  月度成本分摊时，当月已分摊金额中包含的信用额度分摊金额。
    *
    * @return double|null
    */
    public function getAmortizedCreditAmount()
    {
        return $this->container['amortizedCreditAmount'];
    }

    /**
    * Sets amortizedCreditAmount
    *
    * @param double|null $amortizedCreditAmount 月度成本分摊时，当月已分摊金额中包含的信用额度分摊金额。
    *
    * @return $this
    */
    public function setAmortizedCreditAmount($amortizedCreditAmount)
    {
        $this->container['amortizedCreditAmount'] = $amortizedCreditAmount;
        return $this;
    }

    /**
    * Gets amortizedCouponAmount
    *  月度成本分摊时，当月已分摊金额中包含的代金券分摊金额。
    *
    * @return double|null
    */
    public function getAmortizedCouponAmount()
    {
        return $this->container['amortizedCouponAmount'];
    }

    /**
    * Sets amortizedCouponAmount
    *
    * @param double|null $amortizedCouponAmount 月度成本分摊时，当月已分摊金额中包含的代金券分摊金额。
    *
    * @return $this
    */
    public function setAmortizedCouponAmount($amortizedCouponAmount)
    {
        $this->container['amortizedCouponAmount'] = $amortizedCouponAmount;
        return $this;
    }

    /**
    * Gets amortizedFlexipurchaseCouponAmount
    *  月度成本分摊时，当月已分摊金额中包含的现金券分摊金额。
    *
    * @return double|null
    */
    public function getAmortizedFlexipurchaseCouponAmount()
    {
        return $this->container['amortizedFlexipurchaseCouponAmount'];
    }

    /**
    * Sets amortizedFlexipurchaseCouponAmount
    *
    * @param double|null $amortizedFlexipurchaseCouponAmount 月度成本分摊时，当月已分摊金额中包含的现金券分摊金额。
    *
    * @return $this
    */
    public function setAmortizedFlexipurchaseCouponAmount($amortizedFlexipurchaseCouponAmount)
    {
        $this->container['amortizedFlexipurchaseCouponAmount'] = $amortizedFlexipurchaseCouponAmount;
        return $this;
    }

    /**
    * Gets amortizedStoredValueCardAmount
    *  月度成本分摊时，当月已分摊金额中包含的储值卡分摊金额。
    *
    * @return double|null
    */
    public function getAmortizedStoredValueCardAmount()
    {
        return $this->container['amortizedStoredValueCardAmount'];
    }

    /**
    * Sets amortizedStoredValueCardAmount
    *
    * @param double|null $amortizedStoredValueCardAmount 月度成本分摊时，当月已分摊金额中包含的储值卡分摊金额。
    *
    * @return $this
    */
    public function setAmortizedStoredValueCardAmount($amortizedStoredValueCardAmount)
    {
        $this->container['amortizedStoredValueCardAmount'] = $amortizedStoredValueCardAmount;
        return $this;
    }

    /**
    * Gets amortizedBonusAmount
    *  月度成本分摊时，当月已分摊金额中包含的奖励金分摊金额（用于现网未清干净的奖励金）。
    *
    * @return double|null
    */
    public function getAmortizedBonusAmount()
    {
        return $this->container['amortizedBonusAmount'];
    }

    /**
    * Sets amortizedBonusAmount
    *
    * @param double|null $amortizedBonusAmount 月度成本分摊时，当月已分摊金额中包含的奖励金分摊金额（用于现网未清干净的奖励金）。
    *
    * @return $this
    */
    public function setAmortizedBonusAmount($amortizedBonusAmount)
    {
        $this->container['amortizedBonusAmount'] = $amortizedBonusAmount;
        return $this;
    }

    /**
    * Gets subServiceTypeCode
    *  该字段为预留字段
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
    * @param string|null $subServiceTypeCode 该字段为预留字段
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
    *  该字段为预留字段
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
    * @param string|null $subServiceTypeName 该字段为预留字段
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
    *  该字段为预留字段
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
    * @param string|null $subResourceTypeCode 该字段为预留字段
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
    *  该字段为预留字段。
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
    * @param string|null $subResourceTypeName 该字段为预留字段。
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
    *  该字段为预留字段。
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
    * @param string|null $subResourceId 该字段为预留字段。
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
    *  该字段为预留字段。
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
    * @param string|null $subResourceName 该字段为预留字段。
    *
    * @return $this
    */
    public function setSubResourceName($subResourceName)
    {
        $this->container['subResourceName'] = $subResourceName;
        return $this;
    }

    /**
    * Gets effectiveTagPairs
    *  成本标签。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\TagPair[]|null
    */
    public function getEffectiveTagPairs()
    {
        return $this->container['effectiveTagPairs'];
    }

    /**
    * Sets effectiveTagPairs
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\TagPair[]|null $effectiveTagPairs 成本标签。
    *
    * @return $this
    */
    public function setEffectiveTagPairs($effectiveTagPairs)
    {
        $this->container['effectiveTagPairs'] = $effectiveTagPairs;
        return $this;
    }

    /**
    * Gets costUnitPairs
    *  成本单元。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\CostUnitPair[]|null
    */
    public function getCostUnitPairs()
    {
        return $this->container['costUnitPairs'];
    }

    /**
    * Sets costUnitPairs
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\CostUnitPair[]|null $costUnitPairs 成本单元。
    *
    * @return $this
    */
    public function setCostUnitPairs($costUnitPairs)
    {
        $this->container['costUnitPairs'] = $costUnitPairs;
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

