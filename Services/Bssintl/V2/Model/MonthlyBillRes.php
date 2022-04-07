<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

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
    * cycle  |参数名称：资源详单数据所在账期| |参数的约束及描述：格式为YYYY-MM|
    * billDate  |参数名称：消费日期| |参数的约束及描述：消费日期，格式为：YYYY-MM-DD|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费； 15消费-税金；14：消费-服务支持计划月末扣费；16：调账-扣费 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID; 如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，例如：“cn-north-1”。|
    * regionName  |参数名称：云服务区名称| |参数的约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填,，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceTypeCode  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，例如ECS的VM为“hws.resource.type.vm”。|
    * cloudServiceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：资源类型编码名称|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：服务类型编码名称|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填|
    * resourceName  |参数名称：资源名称| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * resourceTag  |参数名称：资源标签| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * skuCode  |参数名称：SKU编码| |参数的约束及描述：SKU（Stock Keeping Unit，库存量单元）编码，产品下的SKU分类属性|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必填|
    * enterpriseProjectName  |参数名称：企业项目名称| |参数的约束及描述：该参数非必填|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1 : 包年/包月；3: 按需。10: 预留实例|
    * consumeAmount  |参数名称：客户购买云服务类型的消费金额| |参数的约束及描述：该参数非必填，包含代金券，大陆站还包含现金券，大陆站精确到小数点后8位，国际站精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数的约束及描述：该参数非必填|
    * creditAmount  |参数名称：信用额度支付金额| |参数的约束及描述：该参数非必填|
    * couponAmount  |参数名称：代金券支付金额| |参数的约束及描述：该参数非必填。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额| |参数的约束及描述：该参数非必填。|
    * storedCardAmount  |参数名称：储值卡支付金额| |参数的约束及描述：该参数非必填。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）| |参数的约束及描述：该参数非必填。|
    * debtAmount  |参数名称：欠费金额| |参数的约束及描述：该参数非必填。|
    * adjustmentAmount  |参数名称：欠费核销金额| |参数的约束及描述：该参数非必填。|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：该参数非必填。|
    * discountAmount  |参数名称：对应官网价折扣金额| |参数的约束及描述：该参数非必填。|
    * measureId  |参数名称：金额单位。1: 元| |参数的约束及描述：该参数非必填|
    * periodType  |参数名称：周期类型：19：年 20：月 24：天 25：小时 5：一次性| |参数的约束及描述：该参数非必填|
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
            'periodType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cycle  |参数名称：资源详单数据所在账期| |参数的约束及描述：格式为YYYY-MM|
    * billDate  |参数名称：消费日期| |参数的约束及描述：消费日期，格式为：YYYY-MM-DD|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费； 15消费-税金；14：消费-服务支持计划月末扣费；16：调账-扣费 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID; 如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，例如：“cn-north-1”。|
    * regionName  |参数名称：云服务区名称| |参数的约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填,，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceTypeCode  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，例如ECS的VM为“hws.resource.type.vm”。|
    * cloudServiceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：资源类型编码名称|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：服务类型编码名称|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填|
    * resourceName  |参数名称：资源名称| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * resourceTag  |参数名称：资源标签| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * skuCode  |参数名称：SKU编码| |参数的约束及描述：SKU（Stock Keeping Unit，库存量单元）编码，产品下的SKU分类属性|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必填|
    * enterpriseProjectName  |参数名称：企业项目名称| |参数的约束及描述：该参数非必填|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1 : 包年/包月；3: 按需。10: 预留实例|
    * consumeAmount  |参数名称：客户购买云服务类型的消费金额| |参数的约束及描述：该参数非必填，包含代金券，大陆站还包含现金券，大陆站精确到小数点后8位，国际站精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数的约束及描述：该参数非必填|
    * creditAmount  |参数名称：信用额度支付金额| |参数的约束及描述：该参数非必填|
    * couponAmount  |参数名称：代金券支付金额| |参数的约束及描述：该参数非必填。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额| |参数的约束及描述：该参数非必填。|
    * storedCardAmount  |参数名称：储值卡支付金额| |参数的约束及描述：该参数非必填。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）| |参数的约束及描述：该参数非必填。|
    * debtAmount  |参数名称：欠费金额| |参数的约束及描述：该参数非必填。|
    * adjustmentAmount  |参数名称：欠费核销金额| |参数的约束及描述：该参数非必填。|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：该参数非必填。|
    * discountAmount  |参数名称：对应官网价折扣金额| |参数的约束及描述：该参数非必填。|
    * measureId  |参数名称：金额单位。1: 元| |参数的约束及描述：该参数非必填|
    * periodType  |参数名称：周期类型：19：年 20：月 24：天 25：小时 5：一次性| |参数的约束及描述：该参数非必填|
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
        'periodType' => 'int32'
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
    * cycle  |参数名称：资源详单数据所在账期| |参数的约束及描述：格式为YYYY-MM|
    * billDate  |参数名称：消费日期| |参数的约束及描述：消费日期，格式为：YYYY-MM-DD|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费； 15消费-税金；14：消费-服务支持计划月末扣费；16：调账-扣费 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID; 如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，例如：“cn-north-1”。|
    * regionName  |参数名称：云服务区名称| |参数的约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填,，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceTypeCode  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，例如ECS的VM为“hws.resource.type.vm”。|
    * cloudServiceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：资源类型编码名称|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：服务类型编码名称|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填|
    * resourceName  |参数名称：资源名称| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * resourceTag  |参数名称：资源标签| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * skuCode  |参数名称：SKU编码| |参数的约束及描述：SKU（Stock Keeping Unit，库存量单元）编码，产品下的SKU分类属性|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必填|
    * enterpriseProjectName  |参数名称：企业项目名称| |参数的约束及描述：该参数非必填|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1 : 包年/包月；3: 按需。10: 预留实例|
    * consumeAmount  |参数名称：客户购买云服务类型的消费金额| |参数的约束及描述：该参数非必填，包含代金券，大陆站还包含现金券，大陆站精确到小数点后8位，国际站精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数的约束及描述：该参数非必填|
    * creditAmount  |参数名称：信用额度支付金额| |参数的约束及描述：该参数非必填|
    * couponAmount  |参数名称：代金券支付金额| |参数的约束及描述：该参数非必填。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额| |参数的约束及描述：该参数非必填。|
    * storedCardAmount  |参数名称：储值卡支付金额| |参数的约束及描述：该参数非必填。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）| |参数的约束及描述：该参数非必填。|
    * debtAmount  |参数名称：欠费金额| |参数的约束及描述：该参数非必填。|
    * adjustmentAmount  |参数名称：欠费核销金额| |参数的约束及描述：该参数非必填。|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：该参数非必填。|
    * discountAmount  |参数名称：对应官网价折扣金额| |参数的约束及描述：该参数非必填。|
    * measureId  |参数名称：金额单位。1: 元| |参数的约束及描述：该参数非必填|
    * periodType  |参数名称：周期类型：19：年 20：月 24：天 25：小时 5：一次性| |参数的约束及描述：该参数非必填|
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
            'periodType' => 'period_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cycle  |参数名称：资源详单数据所在账期| |参数的约束及描述：格式为YYYY-MM|
    * billDate  |参数名称：消费日期| |参数的约束及描述：消费日期，格式为：YYYY-MM-DD|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费； 15消费-税金；14：消费-服务支持计划月末扣费；16：调账-扣费 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID; 如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，例如：“cn-north-1”。|
    * regionName  |参数名称：云服务区名称| |参数的约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填,，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceTypeCode  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，例如ECS的VM为“hws.resource.type.vm”。|
    * cloudServiceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：资源类型编码名称|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：服务类型编码名称|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填|
    * resourceName  |参数名称：资源名称| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * resourceTag  |参数名称：资源标签| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * skuCode  |参数名称：SKU编码| |参数的约束及描述：SKU（Stock Keeping Unit，库存量单元）编码，产品下的SKU分类属性|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必填|
    * enterpriseProjectName  |参数名称：企业项目名称| |参数的约束及描述：该参数非必填|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1 : 包年/包月；3: 按需。10: 预留实例|
    * consumeAmount  |参数名称：客户购买云服务类型的消费金额| |参数的约束及描述：该参数非必填，包含代金券，大陆站还包含现金券，大陆站精确到小数点后8位，国际站精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数的约束及描述：该参数非必填|
    * creditAmount  |参数名称：信用额度支付金额| |参数的约束及描述：该参数非必填|
    * couponAmount  |参数名称：代金券支付金额| |参数的约束及描述：该参数非必填。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额| |参数的约束及描述：该参数非必填。|
    * storedCardAmount  |参数名称：储值卡支付金额| |参数的约束及描述：该参数非必填。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）| |参数的约束及描述：该参数非必填。|
    * debtAmount  |参数名称：欠费金额| |参数的约束及描述：该参数非必填。|
    * adjustmentAmount  |参数名称：欠费核销金额| |参数的约束及描述：该参数非必填。|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：该参数非必填。|
    * discountAmount  |参数名称：对应官网价折扣金额| |参数的约束及描述：该参数非必填。|
    * measureId  |参数名称：金额单位。1: 元| |参数的约束及描述：该参数非必填|
    * periodType  |参数名称：周期类型：19：年 20：月 24：天 25：小时 5：一次性| |参数的约束及描述：该参数非必填|
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
            'periodType' => 'setPeriodType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cycle  |参数名称：资源详单数据所在账期| |参数的约束及描述：格式为YYYY-MM|
    * billDate  |参数名称：消费日期| |参数的约束及描述：消费日期，格式为：YYYY-MM-DD|
    * billType  |参数名称：账单类型| |参数的约束及描述：该参数非必填，1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费； 15消费-税金；14：消费-服务支持计划月末扣费；16：调账-扣费 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID; 如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。|
    * region  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，例如：“cn-north-1”。|
    * regionName  |参数名称：云服务区名称| |参数的约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填,，例如OBS的云服务类型编码为“hws.service.type.obs”|
    * resourceTypeCode  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，例如ECS的VM为“hws.resource.type.vm”。|
    * cloudServiceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：资源类型编码名称|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：服务类型编码名称|
    * resInstanceId  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填|
    * resourceName  |参数名称：资源名称| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * resourceTag  |参数名称：资源标签| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
    * skuCode  |参数名称：SKU编码| |参数的约束及描述：SKU（Stock Keeping Unit，库存量单元）编码，产品下的SKU分类属性|
    * enterpriseProjectId  |参数名称：企业项目ID| |参数的约束及描述：该参数非必填|
    * enterpriseProjectName  |参数名称：企业项目名称| |参数的约束及描述：该参数非必填|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：1 : 包年/包月；3: 按需。10: 预留实例|
    * consumeAmount  |参数名称：客户购买云服务类型的消费金额| |参数的约束及描述：该参数非必填，包含代金券，大陆站还包含现金券，大陆站精确到小数点后8位，国际站精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数的约束及描述：该参数非必填|
    * creditAmount  |参数名称：信用额度支付金额| |参数的约束及描述：该参数非必填|
    * couponAmount  |参数名称：代金券支付金额| |参数的约束及描述：该参数非必填。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额| |参数的约束及描述：该参数非必填。|
    * storedCardAmount  |参数名称：储值卡支付金额| |参数的约束及描述：该参数非必填。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）| |参数的约束及描述：该参数非必填。|
    * debtAmount  |参数名称：欠费金额| |参数的约束及描述：该参数非必填。|
    * adjustmentAmount  |参数名称：欠费核销金额| |参数的约束及描述：该参数非必填。|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：该参数非必填。|
    * discountAmount  |参数名称：对应官网价折扣金额| |参数的约束及描述：该参数非必填。|
    * measureId  |参数名称：金额单位。1: 元| |参数的约束及描述：该参数非必填|
    * periodType  |参数名称：周期类型：19：年 20：月 24：天 25：小时 5：一次性| |参数的约束及描述：该参数非必填|
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
            'periodType' => 'getPeriodType'
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
    *  |参数名称：资源详单数据所在账期| |参数的约束及描述：格式为YYYY-MM|
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
    * @param string|null $cycle |参数名称：资源详单数据所在账期| |参数的约束及描述：格式为YYYY-MM|
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
    *  |参数名称：消费日期| |参数的约束及描述：消费日期，格式为：YYYY-MM-DD|
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
    * @param string|null $billDate |参数名称：消费日期| |参数的约束及描述：消费日期，格式为：YYYY-MM-DD|
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
    *  |参数名称：账单类型| |参数的约束及描述：该参数非必填，1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费； 15消费-税金；14：消费-服务支持计划月末扣费；16：调账-扣费 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
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
    * @param int|null $billType |参数名称：账单类型| |参数的约束及描述：该参数非必填，1：消费-新购；2：消费-续订；3：消费-变更；4：退款-退订；5：消费-使用；8：消费-自动续订；9：调账-补偿；12：消费-按时计费；13：消费-退订手续费； 15消费-税金；14：消费-服务支持计划月末扣费；16：调账-扣费 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
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
    *  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID; 如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。|
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
    * @param string|null $customerId |参数名称：消费的客户账号ID。| |参数约束及描述：如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID; 如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。|
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
    *  |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，例如：“cn-north-1”。|
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
    * @param string|null $region |参数名称：云服务区编码| |参数的约束及描述：该参数非必填，例如：“cn-north-1”。|
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
    *  |参数名称：云服务区名称| |参数的约束及描述：云服务区名称|
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
    * @param string|null $regionName |参数名称：云服务区名称| |参数的约束及描述：云服务区名称|
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
    *  |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填,，例如OBS的云服务类型编码为“hws.service.type.obs”|
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
    * @param string|null $cloudServiceType |参数名称：云服务类型编码| |参数的约束及描述：该参数非必填,，例如OBS的云服务类型编码为“hws.service.type.obs”|
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
    *  |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，例如ECS的VM为“hws.resource.type.vm”。|
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
    * @param string|null $resourceTypeCode |参数名称：资源类型编码| |参数的约束及描述：该参数非必填，例如ECS的VM为“hws.resource.type.vm”。|
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
    *  |参数名称：服务类型编码名称| |参数约束及描述：资源类型编码名称|
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
    * @param string|null $cloudServiceTypeName |参数名称：服务类型编码名称| |参数约束及描述：资源类型编码名称|
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
    *  |参数名称：资源类型编码名称| |参数约束及描述：服务类型编码名称|
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
    * @param string|null $resourceTypeName |参数名称：资源类型编码名称| |参数约束及描述：服务类型编码名称|
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
    *  |参数名称：资源实例ID| |参数的约束及描述：该参数非必填|
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
    * @param string|null $resInstanceId |参数名称：资源实例ID| |参数的约束及描述：该参数非必填|
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
    *  |参数名称：资源名称| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
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
    * @param string|null $resourceName |参数名称：资源名称| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
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
    *  |参数名称：资源标签| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
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
    * @param string|null $resourceTag |参数名称：资源标签| |参数的约束及描述：客户在创建资源的时候，可以输入资源名称，有些资源也可以在管理资源时，修改资源名称|
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
    *  |参数名称：SKU编码| |参数的约束及描述：SKU（Stock Keeping Unit，库存量单元）编码，产品下的SKU分类属性|
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
    * @param string|null $skuCode |参数名称：SKU编码| |参数的约束及描述：SKU（Stock Keeping Unit，库存量单元）编码，产品下的SKU分类属性|
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
    *  |参数名称：企业项目ID| |参数的约束及描述：该参数非必填|
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
    * @param string|null $enterpriseProjectId |参数名称：企业项目ID| |参数的约束及描述：该参数非必填|
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
    *  |参数名称：企业项目名称| |参数的约束及描述：该参数非必填|
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
    * @param string|null $enterpriseProjectName |参数名称：企业项目名称| |参数的约束及描述：该参数非必填|
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
    *  |参数名称：计费模式| |参数的约束及描述：1 : 包年/包月；3: 按需。10: 预留实例|
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
    * @param int|null $chargeMode |参数名称：计费模式| |参数的约束及描述：1 : 包年/包月；3: 按需。10: 预留实例|
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
    *  |参数名称：客户购买云服务类型的消费金额| |参数的约束及描述：该参数非必填，包含代金券，大陆站还包含现金券，大陆站精确到小数点后8位，国际站精确到小数点后2位。|
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
    * @param float|null $consumeAmount |参数名称：客户购买云服务类型的消费金额| |参数的约束及描述：该参数非必填，包含代金券，大陆站还包含现金券，大陆站精确到小数点后8位，国际站精确到小数点后2位。|
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
    *  |参数名称：现金支付金额| |参数的约束及描述：该参数非必填|
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
    * @param float|null $cashAmount |参数名称：现金支付金额| |参数的约束及描述：该参数非必填|
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
    *  |参数名称：信用额度支付金额| |参数的约束及描述：该参数非必填|
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
    * @param float|null $creditAmount |参数名称：信用额度支付金额| |参数的约束及描述：该参数非必填|
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
    *  |参数名称：代金券支付金额| |参数的约束及描述：该参数非必填。|
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
    * @param float|null $couponAmount |参数名称：代金券支付金额| |参数的约束及描述：该参数非必填。|
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
    *  |参数名称：现金券支付金额| |参数的约束及描述：该参数非必填。|
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
    * @param float|null $flexipurchaseCouponAmount |参数名称：现金券支付金额| |参数的约束及描述：该参数非必填。|
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
    *  |参数名称：储值卡支付金额| |参数的约束及描述：该参数非必填。|
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
    * @param float|null $storedCardAmount |参数名称：储值卡支付金额| |参数的约束及描述：该参数非必填。|
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
    *  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）| |参数的约束及描述：该参数非必填。|
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
    * @param float|null $bonusAmount |参数名称：奖励金支付金额（用于现网未清干净的奖励金）| |参数的约束及描述：该参数非必填。|
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
    *  |参数名称：欠费金额| |参数的约束及描述：该参数非必填。|
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
    * @param float|null $debtAmount |参数名称：欠费金额| |参数的约束及描述：该参数非必填。|
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
    *  |参数名称：欠费核销金额| |参数的约束及描述：该参数非必填。|
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
    * @param float|null $adjustmentAmount |参数名称：欠费核销金额| |参数的约束及描述：该参数非必填。|
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
    *  |参数名称：官网价| |参数的约束及描述：该参数非必填。|
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
    * @param float|null $officialAmount |参数名称：官网价| |参数的约束及描述：该参数非必填。|
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
    *  |参数名称：对应官网价折扣金额| |参数的约束及描述：该参数非必填。|
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
    * @param float|null $discountAmount |参数名称：对应官网价折扣金额| |参数的约束及描述：该参数非必填。|
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
    *  |参数名称：金额单位。1: 元| |参数的约束及描述：该参数非必填|
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
    * @param int|null $measureId |参数名称：金额单位。1: 元| |参数的约束及描述：该参数非必填|
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
    *  |参数名称：周期类型：19：年 20：月 24：天 25：小时 5：一次性| |参数的约束及描述：该参数非必填|
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
    * @param int|null $periodType |参数名称：周期类型：19：年 20：月 24：天 25：小时 5：一次性| |参数的约束及描述：该参数非必填|
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
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

