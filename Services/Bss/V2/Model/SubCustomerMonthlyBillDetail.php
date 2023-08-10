<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubCustomerMonthlyBillDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubCustomerMonthlyBillDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billCycle  账期。 格式：YYYY-MM
    * customerId  客户账号ID。
    * associationType  子客户的关联类型： 1：顾问销售2：代售
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包周期3：按需10：预留实例
    * tradeTime  交易时间，即某条消费记录对应的扣费时间。 示例：2020-11-17T06:43:38Z
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。 账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID
    * id  唯一标识。
    * billDetailType  账单类型。 1：消费-新购2：消费-续订3：消费-变更8：消费-自动续订5：消费-使用12：消费-按时计费4：退款-退订9：调账-补偿13：消费-退订手续费增收14：消费-服务支持计划月末补扣16：调账-扣费18：消费-按月付费20：退款-变更 100：退款-退订税金101：调账-补偿税金102：调账-扣费税金
    * resourceId  资源ID。
    * resourceName  资源名称。
    * productSpecDesc  产品的规格描述。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * productId  产品ID。
    * productName  产品名称。
    * resourceTag  资源标签。
    * consumeTime  消费时间。 包周期和预留实例订购场景下为订单支付时间；按需场景下为话单生失效时间。 格式：YYYY-MM-DDThh:mm:ssZ
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usageAmount  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * officialAmount  官网价。
    * officialDiscountAmount  对应官网价折扣金额。
    * paymentAmount  应付金额。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedValueCardAmount  储值卡支付金额。
    * debtAmount  欠费金额。
    * writeoffAmount  欠费核销金额。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * accountManagerId  客户经理标识。
    * partnerId  关联的经销商ID。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * subServiceTypeCode  该字段为预留字段。
    * subServiceTypeName  该字段为预留字段。
    * subResourceTypeCode  该字段为预留字段。
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billCycle' => 'string',
            'customerId' => 'string',
            'associationType' => 'string',
            'serviceTypeCode' => 'string',
            'resourceTypeCode' => 'string',
            'serviceTypeName' => 'string',
            'resourceTypeName' => 'string',
            'chargingMode' => 'int',
            'tradeTime' => 'string',
            'tradeId' => 'string',
            'id' => 'string',
            'billDetailType' => 'int',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'productSpecDesc' => 'string',
            'regionCode' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'resourceTag' => 'string',
            'consumeTime' => 'string',
            'usageType' => 'string',
            'usageAmount' => 'double',
            'usageMeasureId' => 'int',
            'freeResourceUsage' => 'double',
            'freeResourceMeasureId' => 'int',
            'riUsage' => 'double',
            'riUsageMeasureId' => 'int',
            'officialAmount' => 'double',
            'officialDiscountAmount' => 'double',
            'paymentAmount' => 'double',
            'cashAmount' => 'double',
            'creditAmount' => 'double',
            'couponAmount' => 'double',
            'flexipurchaseCouponAmount' => 'double',
            'storedValueCardAmount' => 'double',
            'debtAmount' => 'double',
            'writeoffAmount' => 'double',
            'periodType' => 'int',
            'accountManagerId' => 'string',
            'partnerId' => 'string',
            'regionName' => 'string',
            'subServiceTypeCode' => 'string',
            'subServiceTypeName' => 'string',
            'subResourceTypeCode' => 'string',
            'subResourceTypeName' => 'string',
            'subResourceId' => 'string',
            'subResourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billCycle  账期。 格式：YYYY-MM
    * customerId  客户账号ID。
    * associationType  子客户的关联类型： 1：顾问销售2：代售
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包周期3：按需10：预留实例
    * tradeTime  交易时间，即某条消费记录对应的扣费时间。 示例：2020-11-17T06:43:38Z
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。 账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID
    * id  唯一标识。
    * billDetailType  账单类型。 1：消费-新购2：消费-续订3：消费-变更8：消费-自动续订5：消费-使用12：消费-按时计费4：退款-退订9：调账-补偿13：消费-退订手续费增收14：消费-服务支持计划月末补扣16：调账-扣费18：消费-按月付费20：退款-变更 100：退款-退订税金101：调账-补偿税金102：调账-扣费税金
    * resourceId  资源ID。
    * resourceName  资源名称。
    * productSpecDesc  产品的规格描述。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * productId  产品ID。
    * productName  产品名称。
    * resourceTag  资源标签。
    * consumeTime  消费时间。 包周期和预留实例订购场景下为订单支付时间；按需场景下为话单生失效时间。 格式：YYYY-MM-DDThh:mm:ssZ
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usageAmount  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * officialAmount  官网价。
    * officialDiscountAmount  对应官网价折扣金额。
    * paymentAmount  应付金额。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedValueCardAmount  储值卡支付金额。
    * debtAmount  欠费金额。
    * writeoffAmount  欠费核销金额。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * accountManagerId  客户经理标识。
    * partnerId  关联的经销商ID。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * subServiceTypeCode  该字段为预留字段。
    * subServiceTypeName  该字段为预留字段。
    * subResourceTypeCode  该字段为预留字段。
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billCycle' => null,
        'customerId' => null,
        'associationType' => null,
        'serviceTypeCode' => null,
        'resourceTypeCode' => null,
        'serviceTypeName' => null,
        'resourceTypeName' => null,
        'chargingMode' => 'int32',
        'tradeTime' => null,
        'tradeId' => null,
        'id' => null,
        'billDetailType' => 'int32',
        'resourceId' => null,
        'resourceName' => null,
        'productSpecDesc' => null,
        'regionCode' => null,
        'productId' => null,
        'productName' => null,
        'resourceTag' => null,
        'consumeTime' => null,
        'usageType' => null,
        'usageAmount' => 'double',
        'usageMeasureId' => 'int32',
        'freeResourceUsage' => 'double',
        'freeResourceMeasureId' => 'int32',
        'riUsage' => 'double',
        'riUsageMeasureId' => 'int32',
        'officialAmount' => 'double',
        'officialDiscountAmount' => 'double',
        'paymentAmount' => 'double',
        'cashAmount' => 'double',
        'creditAmount' => 'double',
        'couponAmount' => 'double',
        'flexipurchaseCouponAmount' => 'double',
        'storedValueCardAmount' => 'double',
        'debtAmount' => 'double',
        'writeoffAmount' => 'double',
        'periodType' => 'int32',
        'accountManagerId' => null,
        'partnerId' => null,
        'regionName' => null,
        'subServiceTypeCode' => null,
        'subServiceTypeName' => null,
        'subResourceTypeCode' => null,
        'subResourceTypeName' => null,
        'subResourceId' => null,
        'subResourceName' => null
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
    * billCycle  账期。 格式：YYYY-MM
    * customerId  客户账号ID。
    * associationType  子客户的关联类型： 1：顾问销售2：代售
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包周期3：按需10：预留实例
    * tradeTime  交易时间，即某条消费记录对应的扣费时间。 示例：2020-11-17T06:43:38Z
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。 账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID
    * id  唯一标识。
    * billDetailType  账单类型。 1：消费-新购2：消费-续订3：消费-变更8：消费-自动续订5：消费-使用12：消费-按时计费4：退款-退订9：调账-补偿13：消费-退订手续费增收14：消费-服务支持计划月末补扣16：调账-扣费18：消费-按月付费20：退款-变更 100：退款-退订税金101：调账-补偿税金102：调账-扣费税金
    * resourceId  资源ID。
    * resourceName  资源名称。
    * productSpecDesc  产品的规格描述。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * productId  产品ID。
    * productName  产品名称。
    * resourceTag  资源标签。
    * consumeTime  消费时间。 包周期和预留实例订购场景下为订单支付时间；按需场景下为话单生失效时间。 格式：YYYY-MM-DDThh:mm:ssZ
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usageAmount  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * officialAmount  官网价。
    * officialDiscountAmount  对应官网价折扣金额。
    * paymentAmount  应付金额。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedValueCardAmount  储值卡支付金额。
    * debtAmount  欠费金额。
    * writeoffAmount  欠费核销金额。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * accountManagerId  客户经理标识。
    * partnerId  关联的经销商ID。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * subServiceTypeCode  该字段为预留字段。
    * subServiceTypeName  该字段为预留字段。
    * subResourceTypeCode  该字段为预留字段。
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billCycle' => 'bill_cycle',
            'customerId' => 'customer_id',
            'associationType' => 'association_type',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeCode' => 'resource_type_code',
            'serviceTypeName' => 'service_type_name',
            'resourceTypeName' => 'resource_type_name',
            'chargingMode' => 'charging_mode',
            'tradeTime' => 'trade_time',
            'tradeId' => 'trade_id',
            'id' => 'id',
            'billDetailType' => 'bill_detail_type',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'productSpecDesc' => 'product_spec_desc',
            'regionCode' => 'region_code',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'resourceTag' => 'resource_tag',
            'consumeTime' => 'consume_time',
            'usageType' => 'usage_type',
            'usageAmount' => 'usage_amount',
            'usageMeasureId' => 'usage_measure_id',
            'freeResourceUsage' => 'free_resource_usage',
            'freeResourceMeasureId' => 'free_resource_measure_id',
            'riUsage' => 'ri_usage',
            'riUsageMeasureId' => 'ri_usage_measure_id',
            'officialAmount' => 'official_amount',
            'officialDiscountAmount' => 'official_discount_amount',
            'paymentAmount' => 'payment_amount',
            'cashAmount' => 'cash_amount',
            'creditAmount' => 'credit_amount',
            'couponAmount' => 'coupon_amount',
            'flexipurchaseCouponAmount' => 'flexipurchase_coupon_amount',
            'storedValueCardAmount' => 'stored_value_card_amount',
            'debtAmount' => 'debt_amount',
            'writeoffAmount' => 'writeoff_amount',
            'periodType' => 'period_type',
            'accountManagerId' => 'account_manager_id',
            'partnerId' => 'partner_id',
            'regionName' => 'region_name',
            'subServiceTypeCode' => 'sub_service_type_code',
            'subServiceTypeName' => 'sub_service_type_name',
            'subResourceTypeCode' => 'sub_resource_type_code',
            'subResourceTypeName' => 'sub_resource_type_name',
            'subResourceId' => 'sub_resource_id',
            'subResourceName' => 'sub_resource_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billCycle  账期。 格式：YYYY-MM
    * customerId  客户账号ID。
    * associationType  子客户的关联类型： 1：顾问销售2：代售
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包周期3：按需10：预留实例
    * tradeTime  交易时间，即某条消费记录对应的扣费时间。 示例：2020-11-17T06:43:38Z
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。 账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID
    * id  唯一标识。
    * billDetailType  账单类型。 1：消费-新购2：消费-续订3：消费-变更8：消费-自动续订5：消费-使用12：消费-按时计费4：退款-退订9：调账-补偿13：消费-退订手续费增收14：消费-服务支持计划月末补扣16：调账-扣费18：消费-按月付费20：退款-变更 100：退款-退订税金101：调账-补偿税金102：调账-扣费税金
    * resourceId  资源ID。
    * resourceName  资源名称。
    * productSpecDesc  产品的规格描述。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * productId  产品ID。
    * productName  产品名称。
    * resourceTag  资源标签。
    * consumeTime  消费时间。 包周期和预留实例订购场景下为订单支付时间；按需场景下为话单生失效时间。 格式：YYYY-MM-DDThh:mm:ssZ
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usageAmount  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * officialAmount  官网价。
    * officialDiscountAmount  对应官网价折扣金额。
    * paymentAmount  应付金额。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedValueCardAmount  储值卡支付金额。
    * debtAmount  欠费金额。
    * writeoffAmount  欠费核销金额。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * accountManagerId  客户经理标识。
    * partnerId  关联的经销商ID。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * subServiceTypeCode  该字段为预留字段。
    * subServiceTypeName  该字段为预留字段。
    * subResourceTypeCode  该字段为预留字段。
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'billCycle' => 'setBillCycle',
            'customerId' => 'setCustomerId',
            'associationType' => 'setAssociationType',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeCode' => 'setResourceTypeCode',
            'serviceTypeName' => 'setServiceTypeName',
            'resourceTypeName' => 'setResourceTypeName',
            'chargingMode' => 'setChargingMode',
            'tradeTime' => 'setTradeTime',
            'tradeId' => 'setTradeId',
            'id' => 'setId',
            'billDetailType' => 'setBillDetailType',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'productSpecDesc' => 'setProductSpecDesc',
            'regionCode' => 'setRegionCode',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'resourceTag' => 'setResourceTag',
            'consumeTime' => 'setConsumeTime',
            'usageType' => 'setUsageType',
            'usageAmount' => 'setUsageAmount',
            'usageMeasureId' => 'setUsageMeasureId',
            'freeResourceUsage' => 'setFreeResourceUsage',
            'freeResourceMeasureId' => 'setFreeResourceMeasureId',
            'riUsage' => 'setRiUsage',
            'riUsageMeasureId' => 'setRiUsageMeasureId',
            'officialAmount' => 'setOfficialAmount',
            'officialDiscountAmount' => 'setOfficialDiscountAmount',
            'paymentAmount' => 'setPaymentAmount',
            'cashAmount' => 'setCashAmount',
            'creditAmount' => 'setCreditAmount',
            'couponAmount' => 'setCouponAmount',
            'flexipurchaseCouponAmount' => 'setFlexipurchaseCouponAmount',
            'storedValueCardAmount' => 'setStoredValueCardAmount',
            'debtAmount' => 'setDebtAmount',
            'writeoffAmount' => 'setWriteoffAmount',
            'periodType' => 'setPeriodType',
            'accountManagerId' => 'setAccountManagerId',
            'partnerId' => 'setPartnerId',
            'regionName' => 'setRegionName',
            'subServiceTypeCode' => 'setSubServiceTypeCode',
            'subServiceTypeName' => 'setSubServiceTypeName',
            'subResourceTypeCode' => 'setSubResourceTypeCode',
            'subResourceTypeName' => 'setSubResourceTypeName',
            'subResourceId' => 'setSubResourceId',
            'subResourceName' => 'setSubResourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billCycle  账期。 格式：YYYY-MM
    * customerId  客户账号ID。
    * associationType  子客户的关联类型： 1：顾问销售2：代售
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包周期3：按需10：预留实例
    * tradeTime  交易时间，即某条消费记录对应的扣费时间。 示例：2020-11-17T06:43:38Z
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。 账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID
    * id  唯一标识。
    * billDetailType  账单类型。 1：消费-新购2：消费-续订3：消费-变更8：消费-自动续订5：消费-使用12：消费-按时计费4：退款-退订9：调账-补偿13：消费-退订手续费增收14：消费-服务支持计划月末补扣16：调账-扣费18：消费-按月付费20：退款-变更 100：退款-退订税金101：调账-补偿税金102：调账-扣费税金
    * resourceId  资源ID。
    * resourceName  资源名称。
    * productSpecDesc  产品的规格描述。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * productId  产品ID。
    * productName  产品名称。
    * resourceTag  资源标签。
    * consumeTime  消费时间。 包周期和预留实例订购场景下为订单支付时间；按需场景下为话单生失效时间。 格式：YYYY-MM-DDThh:mm:ssZ
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usageAmount  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * officialAmount  官网价。
    * officialDiscountAmount  对应官网价折扣金额。
    * paymentAmount  应付金额。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedValueCardAmount  储值卡支付金额。
    * debtAmount  欠费金额。
    * writeoffAmount  欠费核销金额。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * accountManagerId  客户经理标识。
    * partnerId  关联的经销商ID。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * subServiceTypeCode  该字段为预留字段。
    * subServiceTypeName  该字段为预留字段。
    * subResourceTypeCode  该字段为预留字段。
    * subResourceTypeName  该字段为预留字段。
    * subResourceId  该字段为预留字段。
    * subResourceName  该字段为预留字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'billCycle' => 'getBillCycle',
            'customerId' => 'getCustomerId',
            'associationType' => 'getAssociationType',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeCode' => 'getResourceTypeCode',
            'serviceTypeName' => 'getServiceTypeName',
            'resourceTypeName' => 'getResourceTypeName',
            'chargingMode' => 'getChargingMode',
            'tradeTime' => 'getTradeTime',
            'tradeId' => 'getTradeId',
            'id' => 'getId',
            'billDetailType' => 'getBillDetailType',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'productSpecDesc' => 'getProductSpecDesc',
            'regionCode' => 'getRegionCode',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'resourceTag' => 'getResourceTag',
            'consumeTime' => 'getConsumeTime',
            'usageType' => 'getUsageType',
            'usageAmount' => 'getUsageAmount',
            'usageMeasureId' => 'getUsageMeasureId',
            'freeResourceUsage' => 'getFreeResourceUsage',
            'freeResourceMeasureId' => 'getFreeResourceMeasureId',
            'riUsage' => 'getRiUsage',
            'riUsageMeasureId' => 'getRiUsageMeasureId',
            'officialAmount' => 'getOfficialAmount',
            'officialDiscountAmount' => 'getOfficialDiscountAmount',
            'paymentAmount' => 'getPaymentAmount',
            'cashAmount' => 'getCashAmount',
            'creditAmount' => 'getCreditAmount',
            'couponAmount' => 'getCouponAmount',
            'flexipurchaseCouponAmount' => 'getFlexipurchaseCouponAmount',
            'storedValueCardAmount' => 'getStoredValueCardAmount',
            'debtAmount' => 'getDebtAmount',
            'writeoffAmount' => 'getWriteoffAmount',
            'periodType' => 'getPeriodType',
            'accountManagerId' => 'getAccountManagerId',
            'partnerId' => 'getPartnerId',
            'regionName' => 'getRegionName',
            'subServiceTypeCode' => 'getSubServiceTypeCode',
            'subServiceTypeName' => 'getSubServiceTypeName',
            'subResourceTypeCode' => 'getSubResourceTypeCode',
            'subResourceTypeName' => 'getSubResourceTypeName',
            'subResourceId' => 'getSubResourceId',
            'subResourceName' => 'getSubResourceName'
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
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['associationType'] = isset($data['associationType']) ? $data['associationType'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['tradeTime'] = isset($data['tradeTime']) ? $data['tradeTime'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['billDetailType'] = isset($data['billDetailType']) ? $data['billDetailType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['resourceTag'] = isset($data['resourceTag']) ? $data['resourceTag'] : null;
        $this->container['consumeTime'] = isset($data['consumeTime']) ? $data['consumeTime'] : null;
        $this->container['usageType'] = isset($data['usageType']) ? $data['usageType'] : null;
        $this->container['usageAmount'] = isset($data['usageAmount']) ? $data['usageAmount'] : null;
        $this->container['usageMeasureId'] = isset($data['usageMeasureId']) ? $data['usageMeasureId'] : null;
        $this->container['freeResourceUsage'] = isset($data['freeResourceUsage']) ? $data['freeResourceUsage'] : null;
        $this->container['freeResourceMeasureId'] = isset($data['freeResourceMeasureId']) ? $data['freeResourceMeasureId'] : null;
        $this->container['riUsage'] = isset($data['riUsage']) ? $data['riUsage'] : null;
        $this->container['riUsageMeasureId'] = isset($data['riUsageMeasureId']) ? $data['riUsageMeasureId'] : null;
        $this->container['officialAmount'] = isset($data['officialAmount']) ? $data['officialAmount'] : null;
        $this->container['officialDiscountAmount'] = isset($data['officialDiscountAmount']) ? $data['officialDiscountAmount'] : null;
        $this->container['paymentAmount'] = isset($data['paymentAmount']) ? $data['paymentAmount'] : null;
        $this->container['cashAmount'] = isset($data['cashAmount']) ? $data['cashAmount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['flexipurchaseCouponAmount'] = isset($data['flexipurchaseCouponAmount']) ? $data['flexipurchaseCouponAmount'] : null;
        $this->container['storedValueCardAmount'] = isset($data['storedValueCardAmount']) ? $data['storedValueCardAmount'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['writeoffAmount'] = isset($data['writeoffAmount']) ? $data['writeoffAmount'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['accountManagerId'] = isset($data['accountManagerId']) ? $data['accountManagerId'] : null;
        $this->container['partnerId'] = isset($data['partnerId']) ? $data['partnerId'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['subServiceTypeCode'] = isset($data['subServiceTypeCode']) ? $data['subServiceTypeCode'] : null;
        $this->container['subServiceTypeName'] = isset($data['subServiceTypeName']) ? $data['subServiceTypeName'] : null;
        $this->container['subResourceTypeCode'] = isset($data['subResourceTypeCode']) ? $data['subResourceTypeCode'] : null;
        $this->container['subResourceTypeName'] = isset($data['subResourceTypeName']) ? $data['subResourceTypeName'] : null;
        $this->container['subResourceId'] = isset($data['subResourceId']) ? $data['subResourceId'] : null;
        $this->container['subResourceName'] = isset($data['subResourceName']) ? $data['subResourceName'] : null;
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
    * Gets billCycle
    *  账期。 格式：YYYY-MM
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
    * @param string|null $billCycle 账期。 格式：YYYY-MM
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets customerId
    *  客户账号ID。
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
    * @param string|null $customerId 客户账号ID。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets associationType
    *  子客户的关联类型： 1：顾问销售2：代售
    *
    * @return string|null
    */
    public function getAssociationType()
    {
        return $this->container['associationType'];
    }

    /**
    * Sets associationType
    *
    * @param string|null $associationType 子客户的关联类型： 1：顾问销售2：代售
    *
    * @return $this
    */
    public function setAssociationType($associationType)
    {
        $this->container['associationType'] = $associationType;
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
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
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
    * @param string|null $resourceTypeCode 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
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
    * Gets chargingMode
    *  计费模式。 1：包周期3：按需10：预留实例
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
    * @param int|null $chargingMode 计费模式。 1：包周期3：按需10：预留实例
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets tradeTime
    *  交易时间，即某条消费记录对应的扣费时间。 示例：2020-11-17T06:43:38Z
    *
    * @return string|null
    */
    public function getTradeTime()
    {
        return $this->container['tradeTime'];
    }

    /**
    * Sets tradeTime
    *
    * @param string|null $tradeTime 交易时间，即某条消费记录对应的扣费时间。 示例：2020-11-17T06:43:38Z
    *
    * @return $this
    */
    public function setTradeTime($tradeTime)
    {
        $this->container['tradeTime'] = $tradeTime;
        return $this;
    }

    /**
    * Gets tradeId
    *  订单ID或交易ID，扣费维度的唯一标识。 账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID
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
    * @param string|null $tradeId 订单ID或交易ID，扣费维度的唯一标识。 账单类型为1，2，3，4，8时为订单ID。其它场景下为交易ID。非月末扣费：应收ID月末扣费：账单ID
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
    *  唯一标识。
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
    * @param string|null $id 唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets billDetailType
    *  账单类型。 1：消费-新购2：消费-续订3：消费-变更8：消费-自动续订5：消费-使用12：消费-按时计费4：退款-退订9：调账-补偿13：消费-退订手续费增收14：消费-服务支持计划月末补扣16：调账-扣费18：消费-按月付费20：退款-变更 100：退款-退订税金101：调账-补偿税金102：调账-扣费税金
    *
    * @return int|null
    */
    public function getBillDetailType()
    {
        return $this->container['billDetailType'];
    }

    /**
    * Sets billDetailType
    *
    * @param int|null $billDetailType 账单类型。 1：消费-新购2：消费-续订3：消费-变更8：消费-自动续订5：消费-使用12：消费-按时计费4：退款-退订9：调账-补偿13：消费-退订手续费增收14：消费-服务支持计划月末补扣16：调账-扣费18：消费-按月付费20：退款-变更 100：退款-退订税金101：调账-补偿税金102：调账-扣费税金
    *
    * @return $this
    */
    public function setBillDetailType($billDetailType)
    {
        $this->container['billDetailType'] = $billDetailType;
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
    * Gets productId
    *  产品ID。
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
    * @param string|null $productId 产品ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets productName
    *  产品名称。
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 产品名称。
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
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
    * Gets consumeTime
    *  消费时间。 包周期和预留实例订购场景下为订单支付时间；按需场景下为话单生失效时间。 格式：YYYY-MM-DDThh:mm:ssZ
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
    * @param string|null $consumeTime 消费时间。 包周期和预留实例订购场景下为订单支付时间；按需场景下为话单生失效时间。 格式：YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setConsumeTime($consumeTime)
    {
        $this->container['consumeTime'] = $consumeTime;
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
    * Gets usageAmount
    *  资源的使用量。
    *
    * @return double|null
    */
    public function getUsageAmount()
    {
        return $this->container['usageAmount'];
    }

    /**
    * Sets usageAmount
    *
    * @param double|null $usageAmount 资源的使用量。
    *
    * @return $this
    */
    public function setUsageAmount($usageAmount)
    {
        $this->container['usageAmount'] = $usageAmount;
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
    * Gets officialAmount
    *  官网价。
    *
    * @return double|null
    */
    public function getOfficialAmount()
    {
        return $this->container['officialAmount'];
    }

    /**
    * Sets officialAmount
    *
    * @param double|null $officialAmount 官网价。
    *
    * @return $this
    */
    public function setOfficialAmount($officialAmount)
    {
        $this->container['officialAmount'] = $officialAmount;
        return $this;
    }

    /**
    * Gets officialDiscountAmount
    *  对应官网价折扣金额。
    *
    * @return double|null
    */
    public function getOfficialDiscountAmount()
    {
        return $this->container['officialDiscountAmount'];
    }

    /**
    * Sets officialDiscountAmount
    *
    * @param double|null $officialDiscountAmount 对应官网价折扣金额。
    *
    * @return $this
    */
    public function setOfficialDiscountAmount($officialDiscountAmount)
    {
        $this->container['officialDiscountAmount'] = $officialDiscountAmount;
        return $this;
    }

    /**
    * Gets paymentAmount
    *  应付金额。
    *
    * @return double|null
    */
    public function getPaymentAmount()
    {
        return $this->container['paymentAmount'];
    }

    /**
    * Sets paymentAmount
    *
    * @param double|null $paymentAmount 应付金额。
    *
    * @return $this
    */
    public function setPaymentAmount($paymentAmount)
    {
        $this->container['paymentAmount'] = $paymentAmount;
        return $this;
    }

    /**
    * Gets cashAmount
    *  现金支付金额。
    *
    * @return double|null
    */
    public function getCashAmount()
    {
        return $this->container['cashAmount'];
    }

    /**
    * Sets cashAmount
    *
    * @param double|null $cashAmount 现金支付金额。
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
    * @return double|null
    */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
    * Sets creditAmount
    *
    * @param double|null $creditAmount 信用额度支付金额。
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
    * @return double|null
    */
    public function getCouponAmount()
    {
        return $this->container['couponAmount'];
    }

    /**
    * Sets couponAmount
    *
    * @param double|null $couponAmount 代金券支付金额。
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
    * @return double|null
    */
    public function getFlexipurchaseCouponAmount()
    {
        return $this->container['flexipurchaseCouponAmount'];
    }

    /**
    * Sets flexipurchaseCouponAmount
    *
    * @param double|null $flexipurchaseCouponAmount 现金券支付金额。
    *
    * @return $this
    */
    public function setFlexipurchaseCouponAmount($flexipurchaseCouponAmount)
    {
        $this->container['flexipurchaseCouponAmount'] = $flexipurchaseCouponAmount;
        return $this;
    }

    /**
    * Gets storedValueCardAmount
    *  储值卡支付金额。
    *
    * @return double|null
    */
    public function getStoredValueCardAmount()
    {
        return $this->container['storedValueCardAmount'];
    }

    /**
    * Sets storedValueCardAmount
    *
    * @param double|null $storedValueCardAmount 储值卡支付金额。
    *
    * @return $this
    */
    public function setStoredValueCardAmount($storedValueCardAmount)
    {
        $this->container['storedValueCardAmount'] = $storedValueCardAmount;
        return $this;
    }

    /**
    * Gets debtAmount
    *  欠费金额。
    *
    * @return double|null
    */
    public function getDebtAmount()
    {
        return $this->container['debtAmount'];
    }

    /**
    * Sets debtAmount
    *
    * @param double|null $debtAmount 欠费金额。
    *
    * @return $this
    */
    public function setDebtAmount($debtAmount)
    {
        $this->container['debtAmount'] = $debtAmount;
        return $this;
    }

    /**
    * Gets writeoffAmount
    *  欠费核销金额。
    *
    * @return double|null
    */
    public function getWriteoffAmount()
    {
        return $this->container['writeoffAmount'];
    }

    /**
    * Sets writeoffAmount
    *
    * @param double|null $writeoffAmount 欠费核销金额。
    *
    * @return $this
    */
    public function setWriteoffAmount($writeoffAmount)
    {
        $this->container['writeoffAmount'] = $writeoffAmount;
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
    * Gets accountManagerId
    *  客户经理标识。
    *
    * @return string|null
    */
    public function getAccountManagerId()
    {
        return $this->container['accountManagerId'];
    }

    /**
    * Sets accountManagerId
    *
    * @param string|null $accountManagerId 客户经理标识。
    *
    * @return $this
    */
    public function setAccountManagerId($accountManagerId)
    {
        $this->container['accountManagerId'] = $accountManagerId;
        return $this;
    }

    /**
    * Gets partnerId
    *  关联的经销商ID。
    *
    * @return string|null
    */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
    * Sets partnerId
    *
    * @param string|null $partnerId 关联的经销商ID。
    *
    * @return $this
    */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;
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
    * Gets subServiceTypeCode
    *  该字段为预留字段。
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
    * @param string|null $subServiceTypeCode 该字段为预留字段。
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
    *  该字段为预留字段。
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
    * @param string|null $subServiceTypeName 该字段为预留字段。
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
    *  该字段为预留字段。
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
    * @param string|null $subResourceTypeCode 该字段为预留字段。
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

