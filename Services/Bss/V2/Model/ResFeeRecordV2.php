<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResFeeRecordV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResFeeRecordV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billDate  资源消费记录的日期。 格式：YYYY-MM-DD。按照东八区时间截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productId  产品ID。
    * productName  产品名称。
    * productSpecDesc  产品的规格描述。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * specSize  产品的实例大小，仅线性产品有效。  说明： 线性产品是指订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小规格。
    * specSizeMeasureId  产品实例大小的单位，仅线性产品有该字段。 您可以调用查询度量单位列表接口获取。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * tradeTime  交易时间。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargeMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * unitPrice  产品的单价。 按需产品的单价，只有简单定价，不分档的场景会返回。 包周期产品的单价，只有包周期的如下场景会返回：包周期订购/续订/降配/升配/扩容简单定价，不分档 预留实例的单价，只有如下场景下会返回：订购/续订/降配/升配/扩容/按时计费简单定价，不分档
    * unit  产品的单价单位。 线性产品的单价单位为“元/{线性单位}/月”或“元/{线性单位}/小时”等。非线性产品的单价单位为“元/月”或“元/小时”等。  说明： “线性单位”为线性产品（即订购时需要指定大小的产品）的大小的单位，比如硬盘的线性单位为GB，带宽的线性单位为Mbps。
    * officialAmount  官网价，华为云商品在官网上未叠加应用商务折扣、促销折扣等优惠的销售价格。
    * discountAmount  优惠金额，用户使用云服务享受折扣优惠如商务折扣、伙伴授予折扣以及促销优惠等减免的金额。
    * amount  应付金额，用户使用云服务享受折扣优惠后需要支付的费用金额，包括现金券和储值卡和代金券金额，精确到小数点后2位。  说明： amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * formula  实付金额计算公式。当前只包含如下场景： 按需简单定价 按需线性定价 包年包月新购和续费的简单定价 包年包月新购和续费的线性定价  说明： 实付金额计算公式得到的金额值等于amount - coupon_amount的差值。
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
            'billDate' => 'string',
            'billType' => 'int',
            'customerId' => 'string',
            'region' => 'string',
            'regionName' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'cloudServiceTypeName' => 'string',
            'resourceTypeName' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceTag' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'productSpecDesc' => 'string',
            'skuCode' => 'string',
            'specSize' => 'double',
            'specSizeMeasureId' => 'int',
            'tradeId' => 'string',
            'tradeTime' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'chargeMode' => 'string',
            'orderId' => 'string',
            'periodType' => 'string',
            'usageType' => 'string',
            'usage' => 'double',
            'usageMeasureId' => 'int',
            'freeResourceUsage' => 'double',
            'freeResourceMeasureId' => 'int',
            'riUsage' => 'double',
            'riUsageMeasureId' => 'int',
            'unitPrice' => 'double',
            'unit' => 'string',
            'officialAmount' => 'double',
            'discountAmount' => 'double',
            'amount' => 'double',
            'cashAmount' => 'double',
            'creditAmount' => 'double',
            'couponAmount' => 'double',
            'flexipurchaseCouponAmount' => 'double',
            'storedCardAmount' => 'double',
            'bonusAmount' => 'double',
            'debtAmount' => 'double',
            'adjustmentAmount' => 'double',
            'measureId' => 'int',
            'formula' => 'string',
            'subServiceTypeCode' => 'string',
            'subServiceTypeName' => 'string',
            'subResourceTypeCode' => 'string',
            'subResourceTypeName' => 'string',
            'subResourceId' => 'string',
            'subResourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billDate  资源消费记录的日期。 格式：YYYY-MM-DD。按照东八区时间截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productId  产品ID。
    * productName  产品名称。
    * productSpecDesc  产品的规格描述。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * specSize  产品的实例大小，仅线性产品有效。  说明： 线性产品是指订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小规格。
    * specSizeMeasureId  产品实例大小的单位，仅线性产品有该字段。 您可以调用查询度量单位列表接口获取。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * tradeTime  交易时间。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargeMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * unitPrice  产品的单价。 按需产品的单价，只有简单定价，不分档的场景会返回。 包周期产品的单价，只有包周期的如下场景会返回：包周期订购/续订/降配/升配/扩容简单定价，不分档 预留实例的单价，只有如下场景下会返回：订购/续订/降配/升配/扩容/按时计费简单定价，不分档
    * unit  产品的单价单位。 线性产品的单价单位为“元/{线性单位}/月”或“元/{线性单位}/小时”等。非线性产品的单价单位为“元/月”或“元/小时”等。  说明： “线性单位”为线性产品（即订购时需要指定大小的产品）的大小的单位，比如硬盘的线性单位为GB，带宽的线性单位为Mbps。
    * officialAmount  官网价，华为云商品在官网上未叠加应用商务折扣、促销折扣等优惠的销售价格。
    * discountAmount  优惠金额，用户使用云服务享受折扣优惠如商务折扣、伙伴授予折扣以及促销优惠等减免的金额。
    * amount  应付金额，用户使用云服务享受折扣优惠后需要支付的费用金额，包括现金券和储值卡和代金券金额，精确到小数点后2位。  说明： amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * formula  实付金额计算公式。当前只包含如下场景： 按需简单定价 按需线性定价 包年包月新购和续费的简单定价 包年包月新购和续费的线性定价  说明： 实付金额计算公式得到的金额值等于amount - coupon_amount的差值。
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
        'billDate' => null,
        'billType' => 'int32',
        'customerId' => null,
        'region' => null,
        'regionName' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'cloudServiceTypeName' => null,
        'resourceTypeName' => null,
        'effectiveTime' => null,
        'expireTime' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceTag' => null,
        'productId' => null,
        'productName' => null,
        'productSpecDesc' => null,
        'skuCode' => null,
        'specSize' => 'double',
        'specSizeMeasureId' => 'int32',
        'tradeId' => null,
        'tradeTime' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'chargeMode' => null,
        'orderId' => null,
        'periodType' => null,
        'usageType' => null,
        'usage' => 'double',
        'usageMeasureId' => 'int32',
        'freeResourceUsage' => 'double',
        'freeResourceMeasureId' => 'int32',
        'riUsage' => 'double',
        'riUsageMeasureId' => 'int32',
        'unitPrice' => 'double',
        'unit' => null,
        'officialAmount' => 'double',
        'discountAmount' => 'double',
        'amount' => 'double',
        'cashAmount' => 'double',
        'creditAmount' => 'double',
        'couponAmount' => 'double',
        'flexipurchaseCouponAmount' => 'double',
        'storedCardAmount' => 'double',
        'bonusAmount' => 'double',
        'debtAmount' => 'double',
        'adjustmentAmount' => 'double',
        'measureId' => 'int32',
        'formula' => null,
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
    * billDate  资源消费记录的日期。 格式：YYYY-MM-DD。按照东八区时间截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productId  产品ID。
    * productName  产品名称。
    * productSpecDesc  产品的规格描述。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * specSize  产品的实例大小，仅线性产品有效。  说明： 线性产品是指订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小规格。
    * specSizeMeasureId  产品实例大小的单位，仅线性产品有该字段。 您可以调用查询度量单位列表接口获取。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * tradeTime  交易时间。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargeMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * unitPrice  产品的单价。 按需产品的单价，只有简单定价，不分档的场景会返回。 包周期产品的单价，只有包周期的如下场景会返回：包周期订购/续订/降配/升配/扩容简单定价，不分档 预留实例的单价，只有如下场景下会返回：订购/续订/降配/升配/扩容/按时计费简单定价，不分档
    * unit  产品的单价单位。 线性产品的单价单位为“元/{线性单位}/月”或“元/{线性单位}/小时”等。非线性产品的单价单位为“元/月”或“元/小时”等。  说明： “线性单位”为线性产品（即订购时需要指定大小的产品）的大小的单位，比如硬盘的线性单位为GB，带宽的线性单位为Mbps。
    * officialAmount  官网价，华为云商品在官网上未叠加应用商务折扣、促销折扣等优惠的销售价格。
    * discountAmount  优惠金额，用户使用云服务享受折扣优惠如商务折扣、伙伴授予折扣以及促销优惠等减免的金额。
    * amount  应付金额，用户使用云服务享受折扣优惠后需要支付的费用金额，包括现金券和储值卡和代金券金额，精确到小数点后2位。  说明： amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * formula  实付金额计算公式。当前只包含如下场景： 按需简单定价 按需线性定价 包年包月新购和续费的简单定价 包年包月新购和续费的线性定价  说明： 实付金额计算公式得到的金额值等于amount - coupon_amount的差值。
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
            'billDate' => 'bill_date',
            'billType' => 'bill_type',
            'customerId' => 'customer_id',
            'region' => 'region',
            'regionName' => 'region_name',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'cloudServiceTypeName' => 'cloud_service_type_name',
            'resourceTypeName' => 'resource_type_name',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'resourceTag' => 'resource_tag',
            'productId' => 'product_id',
            'productName' => 'product_name',
            'productSpecDesc' => 'product_spec_desc',
            'skuCode' => 'sku_code',
            'specSize' => 'spec_size',
            'specSizeMeasureId' => 'spec_size_measure_id',
            'tradeId' => 'trade_id',
            'tradeTime' => 'trade_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'chargeMode' => 'charge_mode',
            'orderId' => 'order_id',
            'periodType' => 'period_type',
            'usageType' => 'usage_type',
            'usage' => 'usage',
            'usageMeasureId' => 'usage_measure_id',
            'freeResourceUsage' => 'free_resource_usage',
            'freeResourceMeasureId' => 'free_resource_measure_id',
            'riUsage' => 'ri_usage',
            'riUsageMeasureId' => 'ri_usage_measure_id',
            'unitPrice' => 'unit_price',
            'unit' => 'unit',
            'officialAmount' => 'official_amount',
            'discountAmount' => 'discount_amount',
            'amount' => 'amount',
            'cashAmount' => 'cash_amount',
            'creditAmount' => 'credit_amount',
            'couponAmount' => 'coupon_amount',
            'flexipurchaseCouponAmount' => 'flexipurchase_coupon_amount',
            'storedCardAmount' => 'stored_card_amount',
            'bonusAmount' => 'bonus_amount',
            'debtAmount' => 'debt_amount',
            'adjustmentAmount' => 'adjustment_amount',
            'measureId' => 'measure_id',
            'formula' => 'formula',
            'subServiceTypeCode' => 'sub_service_type_code',
            'subServiceTypeName' => 'sub_service_type_name',
            'subResourceTypeCode' => 'sub_resource_type_code',
            'subResourceTypeName' => 'sub_resource_type_name',
            'subResourceId' => 'sub_resource_id',
            'subResourceName' => 'sub_resource_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billDate  资源消费记录的日期。 格式：YYYY-MM-DD。按照东八区时间截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productId  产品ID。
    * productName  产品名称。
    * productSpecDesc  产品的规格描述。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * specSize  产品的实例大小，仅线性产品有效。  说明： 线性产品是指订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小规格。
    * specSizeMeasureId  产品实例大小的单位，仅线性产品有该字段。 您可以调用查询度量单位列表接口获取。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * tradeTime  交易时间。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargeMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * unitPrice  产品的单价。 按需产品的单价，只有简单定价，不分档的场景会返回。 包周期产品的单价，只有包周期的如下场景会返回：包周期订购/续订/降配/升配/扩容简单定价，不分档 预留实例的单价，只有如下场景下会返回：订购/续订/降配/升配/扩容/按时计费简单定价，不分档
    * unit  产品的单价单位。 线性产品的单价单位为“元/{线性单位}/月”或“元/{线性单位}/小时”等。非线性产品的单价单位为“元/月”或“元/小时”等。  说明： “线性单位”为线性产品（即订购时需要指定大小的产品）的大小的单位，比如硬盘的线性单位为GB，带宽的线性单位为Mbps。
    * officialAmount  官网价，华为云商品在官网上未叠加应用商务折扣、促销折扣等优惠的销售价格。
    * discountAmount  优惠金额，用户使用云服务享受折扣优惠如商务折扣、伙伴授予折扣以及促销优惠等减免的金额。
    * amount  应付金额，用户使用云服务享受折扣优惠后需要支付的费用金额，包括现金券和储值卡和代金券金额，精确到小数点后2位。  说明： amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * formula  实付金额计算公式。当前只包含如下场景： 按需简单定价 按需线性定价 包年包月新购和续费的简单定价 包年包月新购和续费的线性定价  说明： 实付金额计算公式得到的金额值等于amount - coupon_amount的差值。
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
            'billDate' => 'setBillDate',
            'billType' => 'setBillType',
            'customerId' => 'setCustomerId',
            'region' => 'setRegion',
            'regionName' => 'setRegionName',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'cloudServiceTypeName' => 'setCloudServiceTypeName',
            'resourceTypeName' => 'setResourceTypeName',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'resourceTag' => 'setResourceTag',
            'productId' => 'setProductId',
            'productName' => 'setProductName',
            'productSpecDesc' => 'setProductSpecDesc',
            'skuCode' => 'setSkuCode',
            'specSize' => 'setSpecSize',
            'specSizeMeasureId' => 'setSpecSizeMeasureId',
            'tradeId' => 'setTradeId',
            'tradeTime' => 'setTradeTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'chargeMode' => 'setChargeMode',
            'orderId' => 'setOrderId',
            'periodType' => 'setPeriodType',
            'usageType' => 'setUsageType',
            'usage' => 'setUsage',
            'usageMeasureId' => 'setUsageMeasureId',
            'freeResourceUsage' => 'setFreeResourceUsage',
            'freeResourceMeasureId' => 'setFreeResourceMeasureId',
            'riUsage' => 'setRiUsage',
            'riUsageMeasureId' => 'setRiUsageMeasureId',
            'unitPrice' => 'setUnitPrice',
            'unit' => 'setUnit',
            'officialAmount' => 'setOfficialAmount',
            'discountAmount' => 'setDiscountAmount',
            'amount' => 'setAmount',
            'cashAmount' => 'setCashAmount',
            'creditAmount' => 'setCreditAmount',
            'couponAmount' => 'setCouponAmount',
            'flexipurchaseCouponAmount' => 'setFlexipurchaseCouponAmount',
            'storedCardAmount' => 'setStoredCardAmount',
            'bonusAmount' => 'setBonusAmount',
            'debtAmount' => 'setDebtAmount',
            'adjustmentAmount' => 'setAdjustmentAmount',
            'measureId' => 'setMeasureId',
            'formula' => 'setFormula',
            'subServiceTypeCode' => 'setSubServiceTypeCode',
            'subServiceTypeName' => 'setSubServiceTypeName',
            'subResourceTypeCode' => 'setSubResourceTypeCode',
            'subResourceTypeName' => 'setSubResourceTypeName',
            'subResourceId' => 'setSubResourceId',
            'subResourceName' => 'setSubResourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billDate  资源消费记录的日期。 格式：YYYY-MM-DD。按照东八区时间截取。
    * billType  账单类型。 1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿14：消费-服务支持计划月末扣费16：调账-扣费18：消费-按月付费20：退款-变更
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
    * region  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * effectiveTime  费用对应的资源使用的开始时间，按需有效，包年/包月该字段保留。
    * expireTime  费用对应的资源使用的结束时间，按需有效，包年/包月该字段保留。
    * resourceId  资源ID。
    * resourceName  资源名称。
    * resourceTag  资源标签。
    * productId  产品ID。
    * productName  产品名称。
    * productSpecDesc  产品的规格描述。
    * skuCode  SKU编码，在账单中唯一标识一个资源的规格。
    * specSize  产品的实例大小，仅线性产品有效。  说明： 线性产品是指订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小规格。
    * specSizeMeasureId  产品实例大小的单位，仅线性产品有该字段。 您可以调用查询度量单位列表接口获取。
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * tradeTime  交易时间。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：-1其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargeMode  计费模式。 1：包年/包月3：按需10：预留实例
    * orderId  订单ID。  说明： 包年/包月资源的使用记录才有该字段，按需资源则为空。
    * periodType  周期类型： 19：年20：月24：天25：小时5：一次性
    * usageType  资源使用量的类型，您可以调用查询使用量类型列表接口获取。
    * usage  资源的使用量。
    * usageMeasureId  资源使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * freeResourceUsage  套餐内使用量。
    * freeResourceMeasureId  套餐内使用量的度量单位，您可以调用查询度量单位列表接口获取。
    * riUsage  预留实例使用量。
    * riUsageMeasureId  预留实例使用量单位。
    * unitPrice  产品的单价。 按需产品的单价，只有简单定价，不分档的场景会返回。 包周期产品的单价，只有包周期的如下场景会返回：包周期订购/续订/降配/升配/扩容简单定价，不分档 预留实例的单价，只有如下场景下会返回：订购/续订/降配/升配/扩容/按时计费简单定价，不分档
    * unit  产品的单价单位。 线性产品的单价单位为“元/{线性单位}/月”或“元/{线性单位}/小时”等。非线性产品的单价单位为“元/月”或“元/小时”等。  说明： “线性单位”为线性产品（即订购时需要指定大小的产品）的大小的单位，比如硬盘的线性单位为GB，带宽的线性单位为Mbps。
    * officialAmount  官网价，华为云商品在官网上未叠加应用商务折扣、促销折扣等优惠的销售价格。
    * discountAmount  优惠金额，用户使用云服务享受折扣优惠如商务折扣、伙伴授予折扣以及促销优惠等减免的金额。
    * amount  应付金额，用户使用云服务享受折扣优惠后需要支付的费用金额，包括现金券和储值卡和代金券金额，精确到小数点后2位。  说明： amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    * cashAmount  现金支付金额。
    * creditAmount  信用额度支付金额。
    * couponAmount  代金券支付金额。
    * flexipurchaseCouponAmount  现金券支付金额。
    * storedCardAmount  储值卡支付金额。
    * bonusAmount  奖励金支付金额（用于现网客户未使用完的奖励金）。
    * debtAmount  欠费金额。
    * adjustmentAmount  欠费核销金额。
    * measureId  金额单位。 1：元
    * formula  实付金额计算公式。当前只包含如下场景： 按需简单定价 按需线性定价 包年包月新购和续费的简单定价 包年包月新购和续费的线性定价  说明： 实付金额计算公式得到的金额值等于amount - coupon_amount的差值。
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
            'billDate' => 'getBillDate',
            'billType' => 'getBillType',
            'customerId' => 'getCustomerId',
            'region' => 'getRegion',
            'regionName' => 'getRegionName',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'cloudServiceTypeName' => 'getCloudServiceTypeName',
            'resourceTypeName' => 'getResourceTypeName',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'resourceTag' => 'getResourceTag',
            'productId' => 'getProductId',
            'productName' => 'getProductName',
            'productSpecDesc' => 'getProductSpecDesc',
            'skuCode' => 'getSkuCode',
            'specSize' => 'getSpecSize',
            'specSizeMeasureId' => 'getSpecSizeMeasureId',
            'tradeId' => 'getTradeId',
            'tradeTime' => 'getTradeTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'chargeMode' => 'getChargeMode',
            'orderId' => 'getOrderId',
            'periodType' => 'getPeriodType',
            'usageType' => 'getUsageType',
            'usage' => 'getUsage',
            'usageMeasureId' => 'getUsageMeasureId',
            'freeResourceUsage' => 'getFreeResourceUsage',
            'freeResourceMeasureId' => 'getFreeResourceMeasureId',
            'riUsage' => 'getRiUsage',
            'riUsageMeasureId' => 'getRiUsageMeasureId',
            'unitPrice' => 'getUnitPrice',
            'unit' => 'getUnit',
            'officialAmount' => 'getOfficialAmount',
            'discountAmount' => 'getDiscountAmount',
            'amount' => 'getAmount',
            'cashAmount' => 'getCashAmount',
            'creditAmount' => 'getCreditAmount',
            'couponAmount' => 'getCouponAmount',
            'flexipurchaseCouponAmount' => 'getFlexipurchaseCouponAmount',
            'storedCardAmount' => 'getStoredCardAmount',
            'bonusAmount' => 'getBonusAmount',
            'debtAmount' => 'getDebtAmount',
            'adjustmentAmount' => 'getAdjustmentAmount',
            'measureId' => 'getMeasureId',
            'formula' => 'getFormula',
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
        $this->container['billDate'] = isset($data['billDate']) ? $data['billDate'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['cloudServiceTypeName'] = isset($data['cloudServiceTypeName']) ? $data['cloudServiceTypeName'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceTag'] = isset($data['resourceTag']) ? $data['resourceTag'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
        $this->container['skuCode'] = isset($data['skuCode']) ? $data['skuCode'] : null;
        $this->container['specSize'] = isset($data['specSize']) ? $data['specSize'] : null;
        $this->container['specSizeMeasureId'] = isset($data['specSizeMeasureId']) ? $data['specSizeMeasureId'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['tradeTime'] = isset($data['tradeTime']) ? $data['tradeTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['usageType'] = isset($data['usageType']) ? $data['usageType'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['usageMeasureId'] = isset($data['usageMeasureId']) ? $data['usageMeasureId'] : null;
        $this->container['freeResourceUsage'] = isset($data['freeResourceUsage']) ? $data['freeResourceUsage'] : null;
        $this->container['freeResourceMeasureId'] = isset($data['freeResourceMeasureId']) ? $data['freeResourceMeasureId'] : null;
        $this->container['riUsage'] = isset($data['riUsage']) ? $data['riUsage'] : null;
        $this->container['riUsageMeasureId'] = isset($data['riUsageMeasureId']) ? $data['riUsageMeasureId'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['officialAmount'] = isset($data['officialAmount']) ? $data['officialAmount'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['cashAmount'] = isset($data['cashAmount']) ? $data['cashAmount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['flexipurchaseCouponAmount'] = isset($data['flexipurchaseCouponAmount']) ? $data['flexipurchaseCouponAmount'] : null;
        $this->container['storedCardAmount'] = isset($data['storedCardAmount']) ? $data['storedCardAmount'] : null;
        $this->container['bonusAmount'] = isset($data['bonusAmount']) ? $data['bonusAmount'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['adjustmentAmount'] = isset($data['adjustmentAmount']) ? $data['adjustmentAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['formula'] = isset($data['formula']) ? $data['formula'] : null;
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
    * Gets billDate
    *  资源消费记录的日期。 格式：YYYY-MM-DD。按照东八区时间截取。
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
    * @param string|null $billDate 资源消费记录的日期。 格式：YYYY-MM-DD。按照东八区时间截取。
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
    *  消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
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
    * @param string|null $customerId 消费的客户账号ID。 如果是普通客户或者企业子查询消费记录，只能查询到自身的消费记录，则这个地方显示的是自身的客户ID如果是企业主查询消费记录，可以查询到自身以及企业子的消费记录，这个地方是消费的实际客户ID，如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。
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
    * Gets resourceType
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
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
    * Gets specSize
    *  产品的实例大小，仅线性产品有效。  说明： 线性产品是指订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小规格。
    *
    * @return double|null
    */
    public function getSpecSize()
    {
        return $this->container['specSize'];
    }

    /**
    * Sets specSize
    *
    * @param double|null $specSize 产品的实例大小，仅线性产品有效。  说明： 线性产品是指订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小规格。
    *
    * @return $this
    */
    public function setSpecSize($specSize)
    {
        $this->container['specSize'] = $specSize;
        return $this;
    }

    /**
    * Gets specSizeMeasureId
    *  产品实例大小的单位，仅线性产品有该字段。 您可以调用查询度量单位列表接口获取。
    *
    * @return int|null
    */
    public function getSpecSizeMeasureId()
    {
        return $this->container['specSizeMeasureId'];
    }

    /**
    * Sets specSizeMeasureId
    *
    * @param int|null $specSizeMeasureId 产品实例大小的单位，仅线性产品有该字段。 您可以调用查询度量单位列表接口获取。
    *
    * @return $this
    */
    public function setSpecSizeMeasureId($specSizeMeasureId)
    {
        $this->container['specSizeMeasureId'] = $specSizeMeasureId;
        return $this;
    }

    /**
    * Gets tradeId
    *  订单ID或交易ID，扣费维度的唯一标识。
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
    * @param string|null $tradeId 订单ID或交易ID，扣费维度的唯一标识。
    *
    * @return $this
    */
    public function setTradeId($tradeId)
    {
        $this->container['tradeId'] = $tradeId;
        return $this;
    }

    /**
    * Gets tradeTime
    *  交易时间。
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
    * @param string|null $tradeTime 交易时间。
    *
    * @return $this
    */
    public function setTradeTime($tradeTime)
    {
        $this->container['tradeTime'] = $tradeTime;
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
    * Gets chargeMode
    *  计费模式。 1：包年/包月3：按需10：预留实例
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
    * @param string|null $chargeMode 计费模式。 1：包年/包月3：按需10：预留实例
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
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
    *  周期类型： 19：年20：月24：天25：小时5：一次性
    *
    * @return string|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string|null $periodType 周期类型： 19：年20：月24：天25：小时5：一次性
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
    * Gets unitPrice
    *  产品的单价。 按需产品的单价，只有简单定价，不分档的场景会返回。 包周期产品的单价，只有包周期的如下场景会返回：包周期订购/续订/降配/升配/扩容简单定价，不分档 预留实例的单价，只有如下场景下会返回：订购/续订/降配/升配/扩容/按时计费简单定价，不分档
    *
    * @return double|null
    */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
    * Sets unitPrice
    *
    * @param double|null $unitPrice 产品的单价。 按需产品的单价，只有简单定价，不分档的场景会返回。 包周期产品的单价，只有包周期的如下场景会返回：包周期订购/续订/降配/升配/扩容简单定价，不分档 预留实例的单价，只有如下场景下会返回：订购/续订/降配/升配/扩容/按时计费简单定价，不分档
    *
    * @return $this
    */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
    * Gets unit
    *  产品的单价单位。 线性产品的单价单位为“元/{线性单位}/月”或“元/{线性单位}/小时”等。非线性产品的单价单位为“元/月”或“元/小时”等。  说明： “线性单位”为线性产品（即订购时需要指定大小的产品）的大小的单位，比如硬盘的线性单位为GB，带宽的线性单位为Mbps。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 产品的单价单位。 线性产品的单价单位为“元/{线性单位}/月”或“元/{线性单位}/小时”等。非线性产品的单价单位为“元/月”或“元/小时”等。  说明： “线性单位”为线性产品（即订购时需要指定大小的产品）的大小的单位，比如硬盘的线性单位为GB，带宽的线性单位为Mbps。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets officialAmount
    *  官网价，华为云商品在官网上未叠加应用商务折扣、促销折扣等优惠的销售价格。
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
    * @param double|null $officialAmount 官网价，华为云商品在官网上未叠加应用商务折扣、促销折扣等优惠的销售价格。
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
    *  优惠金额，用户使用云服务享受折扣优惠如商务折扣、伙伴授予折扣以及促销优惠等减免的金额。
    *
    * @return double|null
    */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
    * Sets discountAmount
    *
    * @param double|null $discountAmount 优惠金额，用户使用云服务享受折扣优惠如商务折扣、伙伴授予折扣以及促销优惠等减免的金额。
    *
    * @return $this
    */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;
        return $this;
    }

    /**
    * Gets amount
    *  应付金额，用户使用云服务享受折扣优惠后需要支付的费用金额，包括现金券和储值卡和代金券金额，精确到小数点后2位。  说明： amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    *
    * @return double|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param double|null $amount 应付金额，用户使用云服务享受折扣优惠后需要支付的费用金额，包括现金券和储值卡和代金券金额，精确到小数点后2位。  说明： amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_card_amount，bonus_amount，debt_amount，adjustment_amount的总和。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
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
    * Gets storedCardAmount
    *  储值卡支付金额。
    *
    * @return double|null
    */
    public function getStoredCardAmount()
    {
        return $this->container['storedCardAmount'];
    }

    /**
    * Sets storedCardAmount
    *
    * @param double|null $storedCardAmount 储值卡支付金额。
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
    * @return double|null
    */
    public function getBonusAmount()
    {
        return $this->container['bonusAmount'];
    }

    /**
    * Sets bonusAmount
    *
    * @param double|null $bonusAmount 奖励金支付金额（用于现网客户未使用完的奖励金）。
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
    * Gets adjustmentAmount
    *  欠费核销金额。
    *
    * @return double|null
    */
    public function getAdjustmentAmount()
    {
        return $this->container['adjustmentAmount'];
    }

    /**
    * Sets adjustmentAmount
    *
    * @param double|null $adjustmentAmount 欠费核销金额。
    *
    * @return $this
    */
    public function setAdjustmentAmount($adjustmentAmount)
    {
        $this->container['adjustmentAmount'] = $adjustmentAmount;
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
    * Gets formula
    *  实付金额计算公式。当前只包含如下场景： 按需简单定价 按需线性定价 包年包月新购和续费的简单定价 包年包月新购和续费的线性定价  说明： 实付金额计算公式得到的金额值等于amount - coupon_amount的差值。
    *
    * @return string|null
    */
    public function getFormula()
    {
        return $this->container['formula'];
    }

    /**
    * Sets formula
    *
    * @param string|null $formula 实付金额计算公式。当前只包含如下场景： 按需简单定价 按需线性定价 包年包月新购和续费的简单定价 包年包月新购和续费的线性定价  说明： 实付金额计算公式得到的金额值等于amount - coupon_amount的差值。
    *
    * @return $this
    */
    public function setFormula($formula)
    {
        $this->container['formula'] = $formula;
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

