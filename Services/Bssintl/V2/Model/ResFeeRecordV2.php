<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

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
    * billDate  |参数名称：消费记录日期：格式：YYYY-MM-DD。按照东八区截取| |参数约束及描述：消费记录日期：格式：YYYY-MM-DD。按照东八区截取|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费16：调账-扣费| |参数的约束及描述：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金16：调账-扣费17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。|
    * regionName  |参数名称：云服务区名称| |参数约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceType  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。|
    * resourceId  |参数名称：资源ID。| |参数约束及描述：资源ID。|
    * resourceName  |参数名称：资源名称。| |参数约束及描述：资源名称。|
    * resourceTag  |参数名称：资源标签。| |参数约束及描述：资源标签。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productName  |参数名称：产品名称。| |参数约束及描述：产品名称。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述，举例为：普通IO|100.0GB。|
    * skuCode  |参数名称：sku编码| |参数约束及描述：sku编码|
    * specSize  |参数名称：线性大小| |参数约束及描述： 线性大小|
    * specSizeMeasureId  |参数名称：线性大小单位| |参数的约束及描述：线性大小单位|
    * tradeId  |参数名称：订单ID 或 交易ID，扣费维度的唯一标识| |参数约束及描述：订单ID 或 交易ID，扣费维度的唯一标识|
    * tradeTime  |参数名称：交易时间| |参数名称：交易时间，某条消费记录对应的扣费时间。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * enterpriseProjectName  |参数名称：企业项目名称。| |参数约束及描述：企业项目名称。|
    * chargeMode  |参数名称：1 : 包周期；3: 按需。10: 预留实例。| |参数约束及描述：1 : 包周期；3: 按需。10: 预留实例。|
    * orderId  |参数名称：订单ID，包周期资源使用记录才有该字段，按需资源为空。| |参数约束及描述：订单ID，包周期资源使用记录才有该字段，按需资源为空。|
    * periodType  |参数名称：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。| |参数约束及描述：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。|
    * usageType  |参数名称：使用量类型| |参数约束及描述：使用量类型|
    * usage  |参数名称：使用量。| |参数约束及描述： 使用量。|
    * usageMeasureId  |参数名称：使用量度量单位| |参数的约束及描述：使用量度量单位|
    * freeResourceUsage  |参数名称：套餐内使用量。| |参数约束及描述： 套餐内使用量。|
    * freeResourceMeasureId  |参数名称：套餐内使用量单位，具体枚举参考：usageMeasureId| |参数的约束及描述：套餐内使用量单位，具体枚举参考：usageMeasureId|
    * riUsage  |参数名称：预留实例使用量。| |参数约束及描述： 预留实例使用量。|
    * riUsageMeasureId  |参数名称：预留实例使用量单位。| |参数的约束及描述：预留实例使用量单位。|
    * unitPrice  |参数名称：单价| |参数约束及描述：单价|
    * unit  |参数名称：单价单位| |参数约束及描述：单价单位|
    * officialAmount  |参数名称：官网价。| |参数约束及描述： 官网价。|
    * discountAmount  |参数名称：折扣金额| |参数约束及描述： 折扣金额|
    * amount  |参数名称：消费金额，包括现金券和代金券金额，精确到小数点后2位。| |参数约束及描述： 消费金额，包括现金券和代金券金额，精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数约束及描述： 现金支付金额|
    * creditAmount  |参数名称：信用额度支付金额。| |参数约束及描述： 信用额度支付金额。|
    * couponAmount  |参数名称：代金券支付金额。| |参数约束及描述： 代金券支付金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额。| |参数约束及描述： 现金券支付金额。|
    * storedCardAmount  |参数名称：储值卡支付金额。| |参数约束及描述： 储值卡支付金额。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）。| |参数约束及描述： 奖励金支付金额（用于现网未清干净的奖励金）。|
    * debtAmount  |参数名称：欠费金额。| |参数约束及描述： 欠费金额。|
    * adjustmentAmount  |参数名称：欠费核销金额。| |参数约束及描述： 欠费核销金额。|
    * measureId  |参数名称：金额单位：1：元| |参数的约束及描述：金额单位：1：元|
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
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'resourceTag' => 'string',
            'productId' => 'string',
            'productName' => 'string',
            'productSpecDesc' => 'string',
            'skuCode' => 'string',
            'specSize' => 'float',
            'specSizeMeasureId' => 'int',
            'tradeId' => 'string',
            'tradeTime' => 'string',
            'enterpriseProjectId' => 'string',
            'enterpriseProjectName' => 'string',
            'chargeMode' => 'string',
            'orderId' => 'string',
            'periodType' => 'string',
            'usageType' => 'string',
            'usage' => 'float',
            'usageMeasureId' => 'int',
            'freeResourceUsage' => 'float',
            'freeResourceMeasureId' => 'int',
            'riUsage' => 'float',
            'riUsageMeasureId' => 'int',
            'unitPrice' => 'float',
            'unit' => 'string',
            'officialAmount' => 'float',
            'discountAmount' => 'float',
            'amount' => 'float',
            'cashAmount' => 'float',
            'creditAmount' => 'float',
            'couponAmount' => 'float',
            'flexipurchaseCouponAmount' => 'float',
            'storedCardAmount' => 'float',
            'bonusAmount' => 'float',
            'debtAmount' => 'float',
            'adjustmentAmount' => 'float',
            'measureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billDate  |参数名称：消费记录日期：格式：YYYY-MM-DD。按照东八区截取| |参数约束及描述：消费记录日期：格式：YYYY-MM-DD。按照东八区截取|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费16：调账-扣费| |参数的约束及描述：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金16：调账-扣费17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。|
    * regionName  |参数名称：云服务区名称| |参数约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceType  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。|
    * resourceId  |参数名称：资源ID。| |参数约束及描述：资源ID。|
    * resourceName  |参数名称：资源名称。| |参数约束及描述：资源名称。|
    * resourceTag  |参数名称：资源标签。| |参数约束及描述：资源标签。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productName  |参数名称：产品名称。| |参数约束及描述：产品名称。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述，举例为：普通IO|100.0GB。|
    * skuCode  |参数名称：sku编码| |参数约束及描述：sku编码|
    * specSize  |参数名称：线性大小| |参数约束及描述： 线性大小|
    * specSizeMeasureId  |参数名称：线性大小单位| |参数的约束及描述：线性大小单位|
    * tradeId  |参数名称：订单ID 或 交易ID，扣费维度的唯一标识| |参数约束及描述：订单ID 或 交易ID，扣费维度的唯一标识|
    * tradeTime  |参数名称：交易时间| |参数名称：交易时间，某条消费记录对应的扣费时间。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * enterpriseProjectName  |参数名称：企业项目名称。| |参数约束及描述：企业项目名称。|
    * chargeMode  |参数名称：1 : 包周期；3: 按需。10: 预留实例。| |参数约束及描述：1 : 包周期；3: 按需。10: 预留实例。|
    * orderId  |参数名称：订单ID，包周期资源使用记录才有该字段，按需资源为空。| |参数约束及描述：订单ID，包周期资源使用记录才有该字段，按需资源为空。|
    * periodType  |参数名称：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。| |参数约束及描述：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。|
    * usageType  |参数名称：使用量类型| |参数约束及描述：使用量类型|
    * usage  |参数名称：使用量。| |参数约束及描述： 使用量。|
    * usageMeasureId  |参数名称：使用量度量单位| |参数的约束及描述：使用量度量单位|
    * freeResourceUsage  |参数名称：套餐内使用量。| |参数约束及描述： 套餐内使用量。|
    * freeResourceMeasureId  |参数名称：套餐内使用量单位，具体枚举参考：usageMeasureId| |参数的约束及描述：套餐内使用量单位，具体枚举参考：usageMeasureId|
    * riUsage  |参数名称：预留实例使用量。| |参数约束及描述： 预留实例使用量。|
    * riUsageMeasureId  |参数名称：预留实例使用量单位。| |参数的约束及描述：预留实例使用量单位。|
    * unitPrice  |参数名称：单价| |参数约束及描述：单价|
    * unit  |参数名称：单价单位| |参数约束及描述：单价单位|
    * officialAmount  |参数名称：官网价。| |参数约束及描述： 官网价。|
    * discountAmount  |参数名称：折扣金额| |参数约束及描述： 折扣金额|
    * amount  |参数名称：消费金额，包括现金券和代金券金额，精确到小数点后2位。| |参数约束及描述： 消费金额，包括现金券和代金券金额，精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数约束及描述： 现金支付金额|
    * creditAmount  |参数名称：信用额度支付金额。| |参数约束及描述： 信用额度支付金额。|
    * couponAmount  |参数名称：代金券支付金额。| |参数约束及描述： 代金券支付金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额。| |参数约束及描述： 现金券支付金额。|
    * storedCardAmount  |参数名称：储值卡支付金额。| |参数约束及描述： 储值卡支付金额。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）。| |参数约束及描述： 奖励金支付金额（用于现网未清干净的奖励金）。|
    * debtAmount  |参数名称：欠费金额。| |参数约束及描述： 欠费金额。|
    * adjustmentAmount  |参数名称：欠费核销金额。| |参数约束及描述： 欠费核销金额。|
    * measureId  |参数名称：金额单位：1：元| |参数的约束及描述：金额单位：1：元|
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
        'effectiveTime' => null,
        'expireTime' => null,
        'resourceId' => null,
        'resourceName' => null,
        'resourceTag' => null,
        'productId' => null,
        'productName' => null,
        'productSpecDesc' => null,
        'skuCode' => null,
        'specSize' => 'bigdecimal',
        'specSizeMeasureId' => 'int32',
        'tradeId' => null,
        'tradeTime' => null,
        'enterpriseProjectId' => null,
        'enterpriseProjectName' => null,
        'chargeMode' => null,
        'orderId' => null,
        'periodType' => null,
        'usageType' => null,
        'usage' => 'bigdecimal',
        'usageMeasureId' => 'int32',
        'freeResourceUsage' => 'bigdecimal',
        'freeResourceMeasureId' => 'int32',
        'riUsage' => 'bigdecimal',
        'riUsageMeasureId' => 'int32',
        'unitPrice' => 'bigdecimal',
        'unit' => null,
        'officialAmount' => 'bigdecimal',
        'discountAmount' => 'bigdecimal',
        'amount' => 'bigdecimal',
        'cashAmount' => 'bigdecimal',
        'creditAmount' => 'bigdecimal',
        'couponAmount' => 'bigdecimal',
        'flexipurchaseCouponAmount' => 'bigdecimal',
        'storedCardAmount' => 'bigdecimal',
        'bonusAmount' => 'bigdecimal',
        'debtAmount' => 'bigdecimal',
        'adjustmentAmount' => 'bigdecimal',
        'measureId' => 'int32'
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
    * billDate  |参数名称：消费记录日期：格式：YYYY-MM-DD。按照东八区截取| |参数约束及描述：消费记录日期：格式：YYYY-MM-DD。按照东八区截取|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费16：调账-扣费| |参数的约束及描述：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金16：调账-扣费17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。|
    * regionName  |参数名称：云服务区名称| |参数约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceType  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。|
    * resourceId  |参数名称：资源ID。| |参数约束及描述：资源ID。|
    * resourceName  |参数名称：资源名称。| |参数约束及描述：资源名称。|
    * resourceTag  |参数名称：资源标签。| |参数约束及描述：资源标签。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productName  |参数名称：产品名称。| |参数约束及描述：产品名称。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述，举例为：普通IO|100.0GB。|
    * skuCode  |参数名称：sku编码| |参数约束及描述：sku编码|
    * specSize  |参数名称：线性大小| |参数约束及描述： 线性大小|
    * specSizeMeasureId  |参数名称：线性大小单位| |参数的约束及描述：线性大小单位|
    * tradeId  |参数名称：订单ID 或 交易ID，扣费维度的唯一标识| |参数约束及描述：订单ID 或 交易ID，扣费维度的唯一标识|
    * tradeTime  |参数名称：交易时间| |参数名称：交易时间，某条消费记录对应的扣费时间。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * enterpriseProjectName  |参数名称：企业项目名称。| |参数约束及描述：企业项目名称。|
    * chargeMode  |参数名称：1 : 包周期；3: 按需。10: 预留实例。| |参数约束及描述：1 : 包周期；3: 按需。10: 预留实例。|
    * orderId  |参数名称：订单ID，包周期资源使用记录才有该字段，按需资源为空。| |参数约束及描述：订单ID，包周期资源使用记录才有该字段，按需资源为空。|
    * periodType  |参数名称：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。| |参数约束及描述：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。|
    * usageType  |参数名称：使用量类型| |参数约束及描述：使用量类型|
    * usage  |参数名称：使用量。| |参数约束及描述： 使用量。|
    * usageMeasureId  |参数名称：使用量度量单位| |参数的约束及描述：使用量度量单位|
    * freeResourceUsage  |参数名称：套餐内使用量。| |参数约束及描述： 套餐内使用量。|
    * freeResourceMeasureId  |参数名称：套餐内使用量单位，具体枚举参考：usageMeasureId| |参数的约束及描述：套餐内使用量单位，具体枚举参考：usageMeasureId|
    * riUsage  |参数名称：预留实例使用量。| |参数约束及描述： 预留实例使用量。|
    * riUsageMeasureId  |参数名称：预留实例使用量单位。| |参数的约束及描述：预留实例使用量单位。|
    * unitPrice  |参数名称：单价| |参数约束及描述：单价|
    * unit  |参数名称：单价单位| |参数约束及描述：单价单位|
    * officialAmount  |参数名称：官网价。| |参数约束及描述： 官网价。|
    * discountAmount  |参数名称：折扣金额| |参数约束及描述： 折扣金额|
    * amount  |参数名称：消费金额，包括现金券和代金券金额，精确到小数点后2位。| |参数约束及描述： 消费金额，包括现金券和代金券金额，精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数约束及描述： 现金支付金额|
    * creditAmount  |参数名称：信用额度支付金额。| |参数约束及描述： 信用额度支付金额。|
    * couponAmount  |参数名称：代金券支付金额。| |参数约束及描述： 代金券支付金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额。| |参数约束及描述： 现金券支付金额。|
    * storedCardAmount  |参数名称：储值卡支付金额。| |参数约束及描述： 储值卡支付金额。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）。| |参数约束及描述： 奖励金支付金额（用于现网未清干净的奖励金）。|
    * debtAmount  |参数名称：欠费金额。| |参数约束及描述： 欠费金额。|
    * adjustmentAmount  |参数名称：欠费核销金额。| |参数约束及描述： 欠费核销金额。|
    * measureId  |参数名称：金额单位：1：元| |参数的约束及描述：金额单位：1：元|
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
            'measureId' => 'measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billDate  |参数名称：消费记录日期：格式：YYYY-MM-DD。按照东八区截取| |参数约束及描述：消费记录日期：格式：YYYY-MM-DD。按照东八区截取|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费16：调账-扣费| |参数的约束及描述：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金16：调账-扣费17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。|
    * regionName  |参数名称：云服务区名称| |参数约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceType  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。|
    * resourceId  |参数名称：资源ID。| |参数约束及描述：资源ID。|
    * resourceName  |参数名称：资源名称。| |参数约束及描述：资源名称。|
    * resourceTag  |参数名称：资源标签。| |参数约束及描述：资源标签。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productName  |参数名称：产品名称。| |参数约束及描述：产品名称。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述，举例为：普通IO|100.0GB。|
    * skuCode  |参数名称：sku编码| |参数约束及描述：sku编码|
    * specSize  |参数名称：线性大小| |参数约束及描述： 线性大小|
    * specSizeMeasureId  |参数名称：线性大小单位| |参数的约束及描述：线性大小单位|
    * tradeId  |参数名称：订单ID 或 交易ID，扣费维度的唯一标识| |参数约束及描述：订单ID 或 交易ID，扣费维度的唯一标识|
    * tradeTime  |参数名称：交易时间| |参数名称：交易时间，某条消费记录对应的扣费时间。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * enterpriseProjectName  |参数名称：企业项目名称。| |参数约束及描述：企业项目名称。|
    * chargeMode  |参数名称：1 : 包周期；3: 按需。10: 预留实例。| |参数约束及描述：1 : 包周期；3: 按需。10: 预留实例。|
    * orderId  |参数名称：订单ID，包周期资源使用记录才有该字段，按需资源为空。| |参数约束及描述：订单ID，包周期资源使用记录才有该字段，按需资源为空。|
    * periodType  |参数名称：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。| |参数约束及描述：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。|
    * usageType  |参数名称：使用量类型| |参数约束及描述：使用量类型|
    * usage  |参数名称：使用量。| |参数约束及描述： 使用量。|
    * usageMeasureId  |参数名称：使用量度量单位| |参数的约束及描述：使用量度量单位|
    * freeResourceUsage  |参数名称：套餐内使用量。| |参数约束及描述： 套餐内使用量。|
    * freeResourceMeasureId  |参数名称：套餐内使用量单位，具体枚举参考：usageMeasureId| |参数的约束及描述：套餐内使用量单位，具体枚举参考：usageMeasureId|
    * riUsage  |参数名称：预留实例使用量。| |参数约束及描述： 预留实例使用量。|
    * riUsageMeasureId  |参数名称：预留实例使用量单位。| |参数的约束及描述：预留实例使用量单位。|
    * unitPrice  |参数名称：单价| |参数约束及描述：单价|
    * unit  |参数名称：单价单位| |参数约束及描述：单价单位|
    * officialAmount  |参数名称：官网价。| |参数约束及描述： 官网价。|
    * discountAmount  |参数名称：折扣金额| |参数约束及描述： 折扣金额|
    * amount  |参数名称：消费金额，包括现金券和代金券金额，精确到小数点后2位。| |参数约束及描述： 消费金额，包括现金券和代金券金额，精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数约束及描述： 现金支付金额|
    * creditAmount  |参数名称：信用额度支付金额。| |参数约束及描述： 信用额度支付金额。|
    * couponAmount  |参数名称：代金券支付金额。| |参数约束及描述： 代金券支付金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额。| |参数约束及描述： 现金券支付金额。|
    * storedCardAmount  |参数名称：储值卡支付金额。| |参数约束及描述： 储值卡支付金额。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）。| |参数约束及描述： 奖励金支付金额（用于现网未清干净的奖励金）。|
    * debtAmount  |参数名称：欠费金额。| |参数约束及描述： 欠费金额。|
    * adjustmentAmount  |参数名称：欠费核销金额。| |参数约束及描述： 欠费核销金额。|
    * measureId  |参数名称：金额单位：1：元| |参数的约束及描述：金额单位：1：元|
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
            'measureId' => 'setMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billDate  |参数名称：消费记录日期：格式：YYYY-MM-DD。按照东八区截取| |参数约束及描述：消费记录日期：格式：YYYY-MM-DD。按照东八区截取|
    * billType  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费16：调账-扣费| |参数的约束及描述：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金16：调账-扣费17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    * region  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。|
    * regionName  |参数名称：云服务区名称| |参数约束及描述：云服务区名称|
    * cloudServiceType  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceType  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * effectiveTime  |参数名称：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。|
    * expireTime  |参数名称：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。|
    * resourceId  |参数名称：资源ID。| |参数约束及描述：资源ID。|
    * resourceName  |参数名称：资源名称。| |参数约束及描述：资源名称。|
    * resourceTag  |参数名称：资源标签。| |参数约束及描述：资源标签。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * productName  |参数名称：产品名称。| |参数约束及描述：产品名称。|
    * productSpecDesc  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述，举例为：普通IO|100.0GB。|
    * skuCode  |参数名称：sku编码| |参数约束及描述：sku编码|
    * specSize  |参数名称：线性大小| |参数约束及描述： 线性大小|
    * specSizeMeasureId  |参数名称：线性大小单位| |参数的约束及描述：线性大小单位|
    * tradeId  |参数名称：订单ID 或 交易ID，扣费维度的唯一标识| |参数约束及描述：订单ID 或 交易ID，扣费维度的唯一标识|
    * tradeTime  |参数名称：交易时间| |参数名称：交易时间，某条消费记录对应的扣费时间。|
    * enterpriseProjectId  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
    * enterpriseProjectName  |参数名称：企业项目名称。| |参数约束及描述：企业项目名称。|
    * chargeMode  |参数名称：1 : 包周期；3: 按需。10: 预留实例。| |参数约束及描述：1 : 包周期；3: 按需。10: 预留实例。|
    * orderId  |参数名称：订单ID，包周期资源使用记录才有该字段，按需资源为空。| |参数约束及描述：订单ID，包周期资源使用记录才有该字段，按需资源为空。|
    * periodType  |参数名称：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。| |参数约束及描述：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。|
    * usageType  |参数名称：使用量类型| |参数约束及描述：使用量类型|
    * usage  |参数名称：使用量。| |参数约束及描述： 使用量。|
    * usageMeasureId  |参数名称：使用量度量单位| |参数的约束及描述：使用量度量单位|
    * freeResourceUsage  |参数名称：套餐内使用量。| |参数约束及描述： 套餐内使用量。|
    * freeResourceMeasureId  |参数名称：套餐内使用量单位，具体枚举参考：usageMeasureId| |参数的约束及描述：套餐内使用量单位，具体枚举参考：usageMeasureId|
    * riUsage  |参数名称：预留实例使用量。| |参数约束及描述： 预留实例使用量。|
    * riUsageMeasureId  |参数名称：预留实例使用量单位。| |参数的约束及描述：预留实例使用量单位。|
    * unitPrice  |参数名称：单价| |参数约束及描述：单价|
    * unit  |参数名称：单价单位| |参数约束及描述：单价单位|
    * officialAmount  |参数名称：官网价。| |参数约束及描述： 官网价。|
    * discountAmount  |参数名称：折扣金额| |参数约束及描述： 折扣金额|
    * amount  |参数名称：消费金额，包括现金券和代金券金额，精确到小数点后2位。| |参数约束及描述： 消费金额，包括现金券和代金券金额，精确到小数点后2位。|
    * cashAmount  |参数名称：现金支付金额| |参数约束及描述： 现金支付金额|
    * creditAmount  |参数名称：信用额度支付金额。| |参数约束及描述： 信用额度支付金额。|
    * couponAmount  |参数名称：代金券支付金额。| |参数约束及描述： 代金券支付金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券支付金额。| |参数约束及描述： 现金券支付金额。|
    * storedCardAmount  |参数名称：储值卡支付金额。| |参数约束及描述： 储值卡支付金额。|
    * bonusAmount  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）。| |参数约束及描述： 奖励金支付金额（用于现网未清干净的奖励金）。|
    * debtAmount  |参数名称：欠费金额。| |参数约束及描述： 欠费金额。|
    * adjustmentAmount  |参数名称：欠费核销金额。| |参数约束及描述： 欠费核销金额。|
    * measureId  |参数名称：金额单位：1：元| |参数的约束及描述：金额单位：1：元|
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
            'measureId' => 'getMeasureId'
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
    *  |参数名称：消费记录日期：格式：YYYY-MM-DD。按照东八区截取| |参数约束及描述：消费记录日期：格式：YYYY-MM-DD。按照东八区截取|
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
    * @param string|null $billDate |参数名称：消费记录日期：格式：YYYY-MM-DD。按照东八区截取| |参数约束及描述：消费记录日期：格式：YYYY-MM-DD。按照东八区截取|
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
    *  |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费16：调账-扣费| |参数的约束及描述：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金16：调账-扣费17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
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
    * @param int|null $billType |参数名称：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费16：调账-扣费| |参数的约束及描述：账单类型。1：消费-新购2：消费-续订3：消费-变更4：退款-退订5：消费-使用8：消费-自动续订9：调账-补偿12：消费-按时计费13：消费-退订手续费14：消费-服务支持计划月末扣费 15消费-税金16：调账-扣费17：消费-保底差额 100：退款-退订税金 101：调账-补偿税金 102：调账-扣费税金|
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
    *  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
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
    * @param string|null $customerId |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
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
    *  |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。|
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
    * @param string|null $region |参数名称：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。| |参数约束及描述：云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点地区和终端节点对应云服务的“区域”列的值。|
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
    *  |参数名称：云服务区名称| |参数约束及描述：云服务区名称|
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
    * @param string|null $regionName |参数名称：云服务区名称| |参数约束及描述：云服务区名称|
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
    *  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
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
    * @param string|null $cloudServiceType |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
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
    *  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
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
    * @param string|null $resourceType |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  |参数名称：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。|
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
    * @param string|null $effectiveTime |参数名称：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的开始时间，按需有效，包周期该字段保留。|
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
    *  |参数名称：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。|
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
    * @param string|null $expireTime |参数名称：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。| |参数约束及描述：费用对应的资源使用的结束时间，按需有效，包周期该字段保留。|
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
    *  |参数名称：资源ID。| |参数约束及描述：资源ID。|
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
    * @param string|null $resourceId |参数名称：资源ID。| |参数约束及描述：资源ID。|
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
    *  |参数名称：资源名称。| |参数约束及描述：资源名称。|
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
    * @param string|null $resourceName |参数名称：资源名称。| |参数约束及描述：资源名称。|
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
    *  |参数名称：资源标签。| |参数约束及描述：资源标签。|
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
    * @param string|null $resourceTag |参数名称：资源标签。| |参数约束及描述：资源标签。|
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
    *  |参数名称：产品ID。| |参数约束及描述：产品ID。|
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
    * @param string|null $productId |参数名称：产品ID。| |参数约束及描述：产品ID。|
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
    *  |参数名称：产品名称。| |参数约束及描述：产品名称。|
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
    * @param string|null $productName |参数名称：产品名称。| |参数约束及描述：产品名称。|
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
    *  |参数名称：产品规格描述。| |参数约束及描述：产品规格描述，举例为：普通IO|100.0GB。|
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
    * @param string|null $productSpecDesc |参数名称：产品规格描述。| |参数约束及描述：产品规格描述，举例为：普通IO|100.0GB。|
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
    *  |参数名称：sku编码| |参数约束及描述：sku编码|
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
    * @param string|null $skuCode |参数名称：sku编码| |参数约束及描述：sku编码|
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
    *  |参数名称：线性大小| |参数约束及描述： 线性大小|
    *
    * @return float|null
    */
    public function getSpecSize()
    {
        return $this->container['specSize'];
    }

    /**
    * Sets specSize
    *
    * @param float|null $specSize |参数名称：线性大小| |参数约束及描述： 线性大小|
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
    *  |参数名称：线性大小单位| |参数的约束及描述：线性大小单位|
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
    * @param int|null $specSizeMeasureId |参数名称：线性大小单位| |参数的约束及描述：线性大小单位|
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
    *  |参数名称：订单ID 或 交易ID，扣费维度的唯一标识| |参数约束及描述：订单ID 或 交易ID，扣费维度的唯一标识|
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
    * @param string|null $tradeId |参数名称：订单ID 或 交易ID，扣费维度的唯一标识| |参数约束及描述：订单ID 或 交易ID，扣费维度的唯一标识|
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
    *  |参数名称：交易时间| |参数名称：交易时间，某条消费记录对应的扣费时间。|
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
    * @param string|null $tradeTime |参数名称：交易时间| |参数名称：交易时间，某条消费记录对应的扣费时间。|
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
    *  |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
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
    * @param string|null $enterpriseProjectId |参数名称：企业项目ID。| |参数约束及描述：企业项目ID。|
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
    *  |参数名称：企业项目名称。| |参数约束及描述：企业项目名称。|
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
    * @param string|null $enterpriseProjectName |参数名称：企业项目名称。| |参数约束及描述：企业项目名称。|
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
    *  |参数名称：1 : 包周期；3: 按需。10: 预留实例。| |参数约束及描述：1 : 包周期；3: 按需。10: 预留实例。|
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
    * @param string|null $chargeMode |参数名称：1 : 包周期；3: 按需。10: 预留实例。| |参数约束及描述：1 : 包周期；3: 按需。10: 预留实例。|
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
    *  |参数名称：订单ID，包周期资源使用记录才有该字段，按需资源为空。| |参数约束及描述：订单ID，包周期资源使用记录才有该字段，按需资源为空。|
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
    * @param string|null $orderId |参数名称：订单ID，包周期资源使用记录才有该字段，按需资源为空。| |参数约束及描述：订单ID，包周期资源使用记录才有该字段，按需资源为空。|
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
    *  |参数名称：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。| |参数约束及描述：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。|
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
    * @param string|null $periodType |参数名称：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。| |参数约束及描述：周期类型：19：年；20：月；24：天；25：小时；5：分钟；6：秒。|
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
    *  |参数名称：使用量类型| |参数约束及描述：使用量类型|
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
    * @param string|null $usageType |参数名称：使用量类型| |参数约束及描述：使用量类型|
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
    *  |参数名称：使用量。| |参数约束及描述： 使用量。|
    *
    * @return float|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param float|null $usage |参数名称：使用量。| |参数约束及描述： 使用量。|
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
    *  |参数名称：使用量度量单位| |参数的约束及描述：使用量度量单位|
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
    * @param int|null $usageMeasureId |参数名称：使用量度量单位| |参数的约束及描述：使用量度量单位|
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
    *  |参数名称：套餐内使用量。| |参数约束及描述： 套餐内使用量。|
    *
    * @return float|null
    */
    public function getFreeResourceUsage()
    {
        return $this->container['freeResourceUsage'];
    }

    /**
    * Sets freeResourceUsage
    *
    * @param float|null $freeResourceUsage |参数名称：套餐内使用量。| |参数约束及描述： 套餐内使用量。|
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
    *  |参数名称：套餐内使用量单位，具体枚举参考：usageMeasureId| |参数的约束及描述：套餐内使用量单位，具体枚举参考：usageMeasureId|
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
    * @param int|null $freeResourceMeasureId |参数名称：套餐内使用量单位，具体枚举参考：usageMeasureId| |参数的约束及描述：套餐内使用量单位，具体枚举参考：usageMeasureId|
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
    *  |参数名称：预留实例使用量。| |参数约束及描述： 预留实例使用量。|
    *
    * @return float|null
    */
    public function getRiUsage()
    {
        return $this->container['riUsage'];
    }

    /**
    * Sets riUsage
    *
    * @param float|null $riUsage |参数名称：预留实例使用量。| |参数约束及描述： 预留实例使用量。|
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
    *  |参数名称：预留实例使用量单位。| |参数的约束及描述：预留实例使用量单位。|
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
    * @param int|null $riUsageMeasureId |参数名称：预留实例使用量单位。| |参数的约束及描述：预留实例使用量单位。|
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
    *  |参数名称：单价| |参数约束及描述：单价|
    *
    * @return float|null
    */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
    * Sets unitPrice
    *
    * @param float|null $unitPrice |参数名称：单价| |参数约束及描述：单价|
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
    *  |参数名称：单价单位| |参数约束及描述：单价单位|
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
    * @param string|null $unit |参数名称：单价单位| |参数约束及描述：单价单位|
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
    *  |参数名称：官网价。| |参数约束及描述： 官网价。|
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
    * @param float|null $officialAmount |参数名称：官网价。| |参数约束及描述： 官网价。|
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
    *  |参数名称：折扣金额| |参数约束及描述： 折扣金额|
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
    * @param float|null $discountAmount |参数名称：折扣金额| |参数约束及描述： 折扣金额|
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
    *  |参数名称：消费金额，包括现金券和代金券金额，精确到小数点后2位。| |参数约束及描述： 消费金额，包括现金券和代金券金额，精确到小数点后2位。|
    *
    * @return float|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param float|null $amount |参数名称：消费金额，包括现金券和代金券金额，精确到小数点后2位。| |参数约束及描述： 消费金额，包括现金券和代金券金额，精确到小数点后2位。|
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
    *  |参数名称：现金支付金额| |参数约束及描述： 现金支付金额|
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
    * @param float|null $cashAmount |参数名称：现金支付金额| |参数约束及描述： 现金支付金额|
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
    *  |参数名称：信用额度支付金额。| |参数约束及描述： 信用额度支付金额。|
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
    * @param float|null $creditAmount |参数名称：信用额度支付金额。| |参数约束及描述： 信用额度支付金额。|
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
    *  |参数名称：代金券支付金额。| |参数约束及描述： 代金券支付金额。|
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
    * @param float|null $couponAmount |参数名称：代金券支付金额。| |参数约束及描述： 代金券支付金额。|
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
    *  |参数名称：现金券支付金额。| |参数约束及描述： 现金券支付金额。|
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
    * @param float|null $flexipurchaseCouponAmount |参数名称：现金券支付金额。| |参数约束及描述： 现金券支付金额。|
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
    *  |参数名称：储值卡支付金额。| |参数约束及描述： 储值卡支付金额。|
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
    * @param float|null $storedCardAmount |参数名称：储值卡支付金额。| |参数约束及描述： 储值卡支付金额。|
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
    *  |参数名称：奖励金支付金额（用于现网未清干净的奖励金）。| |参数约束及描述： 奖励金支付金额（用于现网未清干净的奖励金）。|
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
    * @param float|null $bonusAmount |参数名称：奖励金支付金额（用于现网未清干净的奖励金）。| |参数约束及描述： 奖励金支付金额（用于现网未清干净的奖励金）。|
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
    *  |参数名称：欠费金额。| |参数约束及描述： 欠费金额。|
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
    * @param float|null $debtAmount |参数名称：欠费金额。| |参数约束及描述： 欠费金额。|
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
    *  |参数名称：欠费核销金额。| |参数约束及描述： 欠费核销金额。|
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
    * @param float|null $adjustmentAmount |参数名称：欠费核销金额。| |参数约束及描述： 欠费核销金额。|
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
    *  |参数名称：金额单位：1：元| |参数的约束及描述：金额单位：1：元|
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
    * @param int|null $measureId |参数名称：金额单位：1：元| |参数的约束及描述：金额单位：1：元|
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
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

