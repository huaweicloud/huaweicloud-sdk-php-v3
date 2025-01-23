<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MonthlyBillRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MonthlyBillRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billCycle  流水账单所在账期，东八区时间，格式为YYYY-MM。
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例11：节省计划
    * consumeTime  消费时间。 计费模式为包年/包月和预留实例场景时为订单的支付时间。计费模式为按需场景时为话单的生/失效时间。
    * tradeTime  交易时间，某条消费记录对应的扣费时间。
    * providerType  服务商。 1：华为云2：云商店
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * id  唯一标识。 该字段为预留字段。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 103：消费-按年付费
    * status  支付状态。 1：已支付2：未结清3：未结算
    * officialAmount  官网价。单位：元。  说明： official_amount = official_discount_amount + erase_amount + consume_amount
    * officialDiscountAmount  折扣金额。单位：元。
    * eraseAmount  抹零金额。单位：元。
    * consumeAmount  应付金额，包括现金券和储值卡和代金券金额。单位：元。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_value_card_amount，bonus_amount，debt_amount，writeoff_amount的总和。
    * cashAmount  现金支付金额。单位：元.
    * creditAmount  信用额度支付金额。单位：元。
    * couponAmount  代金券支付金额。单位：元。
    * flexipurchaseCouponAmount  现金券支付金额。单位：元。
    * storedValueCardAmount  储值卡支付金额。单位：元。
    * bonusAmount  奖励金支付金额（奖励金已经下线，目前用于现网客户未使用完的奖励金）。单位：元。
    * debtAmount  欠费金额。单位：元。  说明： 对于月结客户，欠费金额即页面上的月度结算金额。
    * writeoffAmount  欠费核销金额。单位：元。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billCycle' => 'string',
            'customerId' => 'string',
            'serviceTypeCode' => 'string',
            'resourceTypeCode' => 'string',
            'serviceTypeName' => 'string',
            'resourceTypeName' => 'string',
            'regionCode' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'chargingMode' => 'int',
            'consumeTime' => 'string',
            'tradeTime' => 'string',
            'providerType' => 'int',
            'tradeId' => 'string',
            'id' => 'string',
            'billType' => 'int',
            'status' => 'int',
            'officialAmount' => 'float',
            'officialDiscountAmount' => 'float',
            'eraseAmount' => 'float',
            'consumeAmount' => 'float',
            'cashAmount' => 'float',
            'creditAmount' => 'float',
            'couponAmount' => 'float',
            'flexipurchaseCouponAmount' => 'float',
            'storedValueCardAmount' => 'float',
            'bonusAmount' => 'float',
            'debtAmount' => 'float',
            'writeoffAmount' => 'float',
            'regionName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billCycle  流水账单所在账期，东八区时间，格式为YYYY-MM。
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例11：节省计划
    * consumeTime  消费时间。 计费模式为包年/包月和预留实例场景时为订单的支付时间。计费模式为按需场景时为话单的生/失效时间。
    * tradeTime  交易时间，某条消费记录对应的扣费时间。
    * providerType  服务商。 1：华为云2：云商店
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * id  唯一标识。 该字段为预留字段。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 103：消费-按年付费
    * status  支付状态。 1：已支付2：未结清3：未结算
    * officialAmount  官网价。单位：元。  说明： official_amount = official_discount_amount + erase_amount + consume_amount
    * officialDiscountAmount  折扣金额。单位：元。
    * eraseAmount  抹零金额。单位：元。
    * consumeAmount  应付金额，包括现金券和储值卡和代金券金额。单位：元。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_value_card_amount，bonus_amount，debt_amount，writeoff_amount的总和。
    * cashAmount  现金支付金额。单位：元.
    * creditAmount  信用额度支付金额。单位：元。
    * couponAmount  代金券支付金额。单位：元。
    * flexipurchaseCouponAmount  现金券支付金额。单位：元。
    * storedValueCardAmount  储值卡支付金额。单位：元。
    * bonusAmount  奖励金支付金额（奖励金已经下线，目前用于现网客户未使用完的奖励金）。单位：元。
    * debtAmount  欠费金额。单位：元。  说明： 对于月结客户，欠费金额即页面上的月度结算金额。
    * writeoffAmount  欠费核销金额。单位：元。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billCycle' => null,
        'customerId' => null,
        'serviceTypeCode' => null,
        'resourceTypeCode' => null,
        'serviceTypeName' => null,
        'resourceTypeName' => null,
        'regionCode' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'chargingMode' => 'int32',
        'consumeTime' => null,
        'tradeTime' => null,
        'providerType' => 'int32',
        'tradeId' => null,
        'id' => null,
        'billType' => 'int32',
        'status' => 'int32',
        'officialAmount' => 'bigdecimal',
        'officialDiscountAmount' => 'bigdecimal',
        'eraseAmount' => 'bigdecimal',
        'consumeAmount' => 'bigdecimal',
        'cashAmount' => 'bigdecimal',
        'creditAmount' => 'bigdecimal',
        'couponAmount' => 'bigdecimal',
        'flexipurchaseCouponAmount' => 'bigdecimal',
        'storedValueCardAmount' => 'bigdecimal',
        'bonusAmount' => 'bigdecimal',
        'debtAmount' => 'bigdecimal',
        'writeoffAmount' => 'bigdecimal',
        'regionName' => null
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
    * billCycle  流水账单所在账期，东八区时间，格式为YYYY-MM。
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例11：节省计划
    * consumeTime  消费时间。 计费模式为包年/包月和预留实例场景时为订单的支付时间。计费模式为按需场景时为话单的生/失效时间。
    * tradeTime  交易时间，某条消费记录对应的扣费时间。
    * providerType  服务商。 1：华为云2：云商店
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * id  唯一标识。 该字段为预留字段。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 103：消费-按年付费
    * status  支付状态。 1：已支付2：未结清3：未结算
    * officialAmount  官网价。单位：元。  说明： official_amount = official_discount_amount + erase_amount + consume_amount
    * officialDiscountAmount  折扣金额。单位：元。
    * eraseAmount  抹零金额。单位：元。
    * consumeAmount  应付金额，包括现金券和储值卡和代金券金额。单位：元。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_value_card_amount，bonus_amount，debt_amount，writeoff_amount的总和。
    * cashAmount  现金支付金额。单位：元.
    * creditAmount  信用额度支付金额。单位：元。
    * couponAmount  代金券支付金额。单位：元。
    * flexipurchaseCouponAmount  现金券支付金额。单位：元。
    * storedValueCardAmount  储值卡支付金额。单位：元。
    * bonusAmount  奖励金支付金额（奖励金已经下线，目前用于现网客户未使用完的奖励金）。单位：元。
    * debtAmount  欠费金额。单位：元。  说明： 对于月结客户，欠费金额即页面上的月度结算金额。
    * writeoffAmount  欠费核销金额。单位：元。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billCycle' => 'bill_cycle',
            'customerId' => 'customer_id',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeCode' => 'resource_type_code',
            'serviceTypeName' => 'service_type_name',
            'resourceTypeName' => 'resource_type_name',
            'regionCode' => 'region_code',
            'enterpriseProjectId' => 'enterprise_project_id',
            'enterpriseProjectName' => 'enterprise_project_name',
            'chargingMode' => 'charging_mode',
            'consumeTime' => 'consume_time',
            'tradeTime' => 'trade_time',
            'providerType' => 'provider_type',
            'tradeId' => 'trade_id',
            'id' => 'id',
            'billType' => 'bill_type',
            'status' => 'status',
            'officialAmount' => 'official_amount',
            'officialDiscountAmount' => 'official_discount_amount',
            'eraseAmount' => 'erase_amount',
            'consumeAmount' => 'consume_amount',
            'cashAmount' => 'cash_amount',
            'creditAmount' => 'credit_amount',
            'couponAmount' => 'coupon_amount',
            'flexipurchaseCouponAmount' => 'flexipurchase_coupon_amount',
            'storedValueCardAmount' => 'stored_value_card_amount',
            'bonusAmount' => 'bonus_amount',
            'debtAmount' => 'debt_amount',
            'writeoffAmount' => 'writeoff_amount',
            'regionName' => 'region_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billCycle  流水账单所在账期，东八区时间，格式为YYYY-MM。
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例11：节省计划
    * consumeTime  消费时间。 计费模式为包年/包月和预留实例场景时为订单的支付时间。计费模式为按需场景时为话单的生/失效时间。
    * tradeTime  交易时间，某条消费记录对应的扣费时间。
    * providerType  服务商。 1：华为云2：云商店
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * id  唯一标识。 该字段为预留字段。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 103：消费-按年付费
    * status  支付状态。 1：已支付2：未结清3：未结算
    * officialAmount  官网价。单位：元。  说明： official_amount = official_discount_amount + erase_amount + consume_amount
    * officialDiscountAmount  折扣金额。单位：元。
    * eraseAmount  抹零金额。单位：元。
    * consumeAmount  应付金额，包括现金券和储值卡和代金券金额。单位：元。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_value_card_amount，bonus_amount，debt_amount，writeoff_amount的总和。
    * cashAmount  现金支付金额。单位：元.
    * creditAmount  信用额度支付金额。单位：元。
    * couponAmount  代金券支付金额。单位：元。
    * flexipurchaseCouponAmount  现金券支付金额。单位：元。
    * storedValueCardAmount  储值卡支付金额。单位：元。
    * bonusAmount  奖励金支付金额（奖励金已经下线，目前用于现网客户未使用完的奖励金）。单位：元。
    * debtAmount  欠费金额。单位：元。  说明： 对于月结客户，欠费金额即页面上的月度结算金额。
    * writeoffAmount  欠费核销金额。单位：元。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'billCycle' => 'setBillCycle',
            'customerId' => 'setCustomerId',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeCode' => 'setResourceTypeCode',
            'serviceTypeName' => 'setServiceTypeName',
            'resourceTypeName' => 'setResourceTypeName',
            'regionCode' => 'setRegionCode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'chargingMode' => 'setChargingMode',
            'consumeTime' => 'setConsumeTime',
            'tradeTime' => 'setTradeTime',
            'providerType' => 'setProviderType',
            'tradeId' => 'setTradeId',
            'id' => 'setId',
            'billType' => 'setBillType',
            'status' => 'setStatus',
            'officialAmount' => 'setOfficialAmount',
            'officialDiscountAmount' => 'setOfficialDiscountAmount',
            'eraseAmount' => 'setEraseAmount',
            'consumeAmount' => 'setConsumeAmount',
            'cashAmount' => 'setCashAmount',
            'creditAmount' => 'setCreditAmount',
            'couponAmount' => 'setCouponAmount',
            'flexipurchaseCouponAmount' => 'setFlexipurchaseCouponAmount',
            'storedValueCardAmount' => 'setStoredValueCardAmount',
            'bonusAmount' => 'setBonusAmount',
            'debtAmount' => 'setDebtAmount',
            'writeoffAmount' => 'setWriteoffAmount',
            'regionName' => 'setRegionName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billCycle  流水账单所在账期，东八区时间，格式为YYYY-MM。
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * enterpriseProjectId  企业项目标识（企业项目ID）。 default项目对应ID：0未归集（表示该云服务不支持企业项目管理能力）项目对应ID：null其余项目对应ID获取方法请参见[如何获取企业项目ID](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    * enterpriseProjectName  企业项目的名称。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例11：节省计划
    * consumeTime  消费时间。 计费模式为包年/包月和预留实例场景时为订单的支付时间。计费模式为按需场景时为话单的生/失效时间。
    * tradeTime  交易时间，某条消费记录对应的扣费时间。
    * providerType  服务商。 1：华为云2：云商店
    * tradeId  订单ID或交易ID，扣费维度的唯一标识。
    * id  唯一标识。 该字段为预留字段。
    * billType  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 103：消费-按年付费
    * status  支付状态。 1：已支付2：未结清3：未结算
    * officialAmount  官网价。单位：元。  说明： official_amount = official_discount_amount + erase_amount + consume_amount
    * officialDiscountAmount  折扣金额。单位：元。
    * eraseAmount  抹零金额。单位：元。
    * consumeAmount  应付金额，包括现金券和储值卡和代金券金额。单位：元。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_value_card_amount，bonus_amount，debt_amount，writeoff_amount的总和。
    * cashAmount  现金支付金额。单位：元.
    * creditAmount  信用额度支付金额。单位：元。
    * couponAmount  代金券支付金额。单位：元。
    * flexipurchaseCouponAmount  现金券支付金额。单位：元。
    * storedValueCardAmount  储值卡支付金额。单位：元。
    * bonusAmount  奖励金支付金额（奖励金已经下线，目前用于现网客户未使用完的奖励金）。单位：元。
    * debtAmount  欠费金额。单位：元。  说明： 对于月结客户，欠费金额即页面上的月度结算金额。
    * writeoffAmount  欠费核销金额。单位：元。
    * regionName  云服务区名称，例如：“华北-北京一”。具体请参见地区和终端节点对应云服务的“区域名称”列的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'billCycle' => 'getBillCycle',
            'customerId' => 'getCustomerId',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeCode' => 'getResourceTypeCode',
            'serviceTypeName' => 'getServiceTypeName',
            'resourceTypeName' => 'getResourceTypeName',
            'regionCode' => 'getRegionCode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'chargingMode' => 'getChargingMode',
            'consumeTime' => 'getConsumeTime',
            'tradeTime' => 'getTradeTime',
            'providerType' => 'getProviderType',
            'tradeId' => 'getTradeId',
            'id' => 'getId',
            'billType' => 'getBillType',
            'status' => 'getStatus',
            'officialAmount' => 'getOfficialAmount',
            'officialDiscountAmount' => 'getOfficialDiscountAmount',
            'eraseAmount' => 'getEraseAmount',
            'consumeAmount' => 'getConsumeAmount',
            'cashAmount' => 'getCashAmount',
            'creditAmount' => 'getCreditAmount',
            'couponAmount' => 'getCouponAmount',
            'flexipurchaseCouponAmount' => 'getFlexipurchaseCouponAmount',
            'storedValueCardAmount' => 'getStoredValueCardAmount',
            'bonusAmount' => 'getBonusAmount',
            'debtAmount' => 'getDebtAmount',
            'writeoffAmount' => 'getWriteoffAmount',
            'regionName' => 'getRegionName'
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
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['consumeTime'] = isset($data['consumeTime']) ? $data['consumeTime'] : null;
        $this->container['tradeTime'] = isset($data['tradeTime']) ? $data['tradeTime'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['tradeId'] = isset($data['tradeId']) ? $data['tradeId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['officialAmount'] = isset($data['officialAmount']) ? $data['officialAmount'] : null;
        $this->container['officialDiscountAmount'] = isset($data['officialDiscountAmount']) ? $data['officialDiscountAmount'] : null;
        $this->container['eraseAmount'] = isset($data['eraseAmount']) ? $data['eraseAmount'] : null;
        $this->container['consumeAmount'] = isset($data['consumeAmount']) ? $data['consumeAmount'] : null;
        $this->container['cashAmount'] = isset($data['cashAmount']) ? $data['cashAmount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['flexipurchaseCouponAmount'] = isset($data['flexipurchaseCouponAmount']) ? $data['flexipurchaseCouponAmount'] : null;
        $this->container['storedValueCardAmount'] = isset($data['storedValueCardAmount']) ? $data['storedValueCardAmount'] : null;
        $this->container['bonusAmount'] = isset($data['bonusAmount']) ? $data['bonusAmount'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['writeoffAmount'] = isset($data['writeoffAmount']) ? $data['writeoffAmount'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
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
    *  流水账单所在账期，东八区时间，格式为YYYY-MM。
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
    * @param string|null $billCycle 流水账单所在账期，东八区时间，格式为YYYY-MM。
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
    *  计费模式。 1：包年/包月3：按需10：预留实例11：节省计划
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
    * @param int|null $chargingMode 计费模式。 1：包年/包月3：按需10：预留实例11：节省计划
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets consumeTime
    *  消费时间。 计费模式为包年/包月和预留实例场景时为订单的支付时间。计费模式为按需场景时为话单的生/失效时间。
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
    * @param string|null $consumeTime 消费时间。 计费模式为包年/包月和预留实例场景时为订单的支付时间。计费模式为按需场景时为话单的生/失效时间。
    *
    * @return $this
    */
    public function setConsumeTime($consumeTime)
    {
        $this->container['consumeTime'] = $consumeTime;
        return $this;
    }

    /**
    * Gets tradeTime
    *  交易时间，某条消费记录对应的扣费时间。
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
    * @param string|null $tradeTime 交易时间，某条消费记录对应的扣费时间。
    *
    * @return $this
    */
    public function setTradeTime($tradeTime)
    {
        $this->container['tradeTime'] = $tradeTime;
        return $this;
    }

    /**
    * Gets providerType
    *  服务商。 1：华为云2：云商店
    *
    * @return int|null
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param int|null $providerType 服务商。 1：华为云2：云商店
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
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
    * Gets billType
    *  账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 103：消费-按年付费
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
    * @param int|null $billType 账单类型。1：消费-新购 2：消费-续订 3：消费-变更 4：退款-退订 5：消费-使用 8：消费-自动续订 9：调账-补偿 14：消费-服务支持计划月末扣费 16：调账-扣费 18：消费-按月付费 20：退款-变更 23：消费-节省计划抵扣 24：退款-包年/包月转按需 103：消费-按年付费
    *
    * @return $this
    */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;
        return $this;
    }

    /**
    * Gets status
    *  支付状态。 1：已支付2：未结清3：未结算
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 支付状态。 1：已支付2：未结清3：未结算
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets officialAmount
    *  官网价。单位：元。  说明： official_amount = official_discount_amount + erase_amount + consume_amount
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
    * @param float|null $officialAmount 官网价。单位：元。  说明： official_amount = official_discount_amount + erase_amount + consume_amount
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
    *  折扣金额。单位：元。
    *
    * @return float|null
    */
    public function getOfficialDiscountAmount()
    {
        return $this->container['officialDiscountAmount'];
    }

    /**
    * Sets officialDiscountAmount
    *
    * @param float|null $officialDiscountAmount 折扣金额。单位：元。
    *
    * @return $this
    */
    public function setOfficialDiscountAmount($officialDiscountAmount)
    {
        $this->container['officialDiscountAmount'] = $officialDiscountAmount;
        return $this;
    }

    /**
    * Gets eraseAmount
    *  抹零金额。单位：元。
    *
    * @return float|null
    */
    public function getEraseAmount()
    {
        return $this->container['eraseAmount'];
    }

    /**
    * Sets eraseAmount
    *
    * @param float|null $eraseAmount 抹零金额。单位：元。
    *
    * @return $this
    */
    public function setEraseAmount($eraseAmount)
    {
        $this->container['eraseAmount'] = $eraseAmount;
        return $this;
    }

    /**
    * Gets consumeAmount
    *  应付金额，包括现金券和储值卡和代金券金额。单位：元。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_value_card_amount，bonus_amount，debt_amount，writeoff_amount的总和。
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
    * @param float|null $consumeAmount 应付金额，包括现金券和储值卡和代金券金额。单位：元。  说明： consume_amount的值等于cash_amount，credit_amount，coupon_amount，flexipurchase_coupon_amount，stored_value_card_amount，bonus_amount，debt_amount，writeoff_amount的总和。
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
    *  现金支付金额。单位：元.
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
    * @param float|null $cashAmount 现金支付金额。单位：元.
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
    *  信用额度支付金额。单位：元。
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
    * @param float|null $creditAmount 信用额度支付金额。单位：元。
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
    *  代金券支付金额。单位：元。
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
    * @param float|null $couponAmount 代金券支付金额。单位：元。
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
    *  现金券支付金额。单位：元。
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
    * @param float|null $flexipurchaseCouponAmount 现金券支付金额。单位：元。
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
    *  储值卡支付金额。单位：元。
    *
    * @return float|null
    */
    public function getStoredValueCardAmount()
    {
        return $this->container['storedValueCardAmount'];
    }

    /**
    * Sets storedValueCardAmount
    *
    * @param float|null $storedValueCardAmount 储值卡支付金额。单位：元。
    *
    * @return $this
    */
    public function setStoredValueCardAmount($storedValueCardAmount)
    {
        $this->container['storedValueCardAmount'] = $storedValueCardAmount;
        return $this;
    }

    /**
    * Gets bonusAmount
    *  奖励金支付金额（奖励金已经下线，目前用于现网客户未使用完的奖励金）。单位：元。
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
    * @param float|null $bonusAmount 奖励金支付金额（奖励金已经下线，目前用于现网客户未使用完的奖励金）。单位：元。
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
    *  欠费金额。单位：元。  说明： 对于月结客户，欠费金额即页面上的月度结算金额。
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
    * @param float|null $debtAmount 欠费金额。单位：元。  说明： 对于月结客户，欠费金额即页面上的月度结算金额。
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
    *  欠费核销金额。单位：元。
    *
    * @return float|null
    */
    public function getWriteoffAmount()
    {
        return $this->container['writeoffAmount'];
    }

    /**
    * Sets writeoffAmount
    *
    * @param float|null $writeoffAmount 欠费核销金额。单位：元。
    *
    * @return $this
    */
    public function setWriteoffAmount($writeoffAmount)
    {
        $this->container['writeoffAmount'] = $writeoffAmount;
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

