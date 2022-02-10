<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BillSumRecordInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BillSumRecordInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billCycle  |参数名称：账期，格式为YYYY-MM| |参数约束及描述：账期，格式为YYYY-MM|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型|
    * chargingMode  |参数名称：计费模式1：包周期；3：按需；10：预留实例| |参数约束及描述：计费模式1：包周期；3：按需；10：预留实例|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：官网价|
    * officialDiscountAmount  |参数名称：折扣金额| |参数的约束及描述：折扣金额|
    * truncatedAmount  |参数名称：抹零金额| |参数的约束及描述：抹零金额|
    * consumeAmount  |参数名称：应付金额，应付金额 = 官网价-折扣金额-抹零金额| |参数的约束及描述：应付金额，应付金额 = 官网价-折扣金额-抹零金额|
    * couponAmount  |参数名称：代金券金额。| |参数的约束及描述：代金券金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券金额，预留。| |参数的约束及描述：现金券金额，预留。|
    * storedValueCardAmount  |参数名称：储值卡金额，预留。| |参数的约束及描述：储值卡金额，预留。|
    * debtAmount  |参数名称：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。| |参数的约束及描述：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。|
    * writeoffAmount  |参数名称：欠费核销金额| |参数的约束及描述：欠费核销金额|
    * cashAmount  |参数名称：现金账户金额。| |参数的约束及描述：现金账户金额。|
    * creditAmount  |参数名称：信用账户金额。| |参数的约束及描述：信用账户金额。|
    * measureId  |参数名称：金额单位。1：元| |参数的约束及描述：金额单位。1：元|
    * billType  |参数名称：消费类型：1：消费2：退款3：调账| |参数的约束及描述：消费类型：1：消费2：退款3：调账|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billCycle' => 'string',
            'resourceTypeCode' => 'string',
            'serviceTypeCode' => 'string',
            'chargingMode' => 'int',
            'officialAmount' => 'float',
            'officialDiscountAmount' => 'float',
            'truncatedAmount' => 'float',
            'consumeAmount' => 'float',
            'couponAmount' => 'float',
            'flexipurchaseCouponAmount' => 'float',
            'storedValueCardAmount' => 'float',
            'debtAmount' => 'float',
            'writeoffAmount' => 'float',
            'cashAmount' => 'float',
            'creditAmount' => 'float',
            'measureId' => 'int',
            'billType' => 'int',
            'customerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billCycle  |参数名称：账期，格式为YYYY-MM| |参数约束及描述：账期，格式为YYYY-MM|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型|
    * chargingMode  |参数名称：计费模式1：包周期；3：按需；10：预留实例| |参数约束及描述：计费模式1：包周期；3：按需；10：预留实例|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：官网价|
    * officialDiscountAmount  |参数名称：折扣金额| |参数的约束及描述：折扣金额|
    * truncatedAmount  |参数名称：抹零金额| |参数的约束及描述：抹零金额|
    * consumeAmount  |参数名称：应付金额，应付金额 = 官网价-折扣金额-抹零金额| |参数的约束及描述：应付金额，应付金额 = 官网价-折扣金额-抹零金额|
    * couponAmount  |参数名称：代金券金额。| |参数的约束及描述：代金券金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券金额，预留。| |参数的约束及描述：现金券金额，预留。|
    * storedValueCardAmount  |参数名称：储值卡金额，预留。| |参数的约束及描述：储值卡金额，预留。|
    * debtAmount  |参数名称：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。| |参数的约束及描述：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。|
    * writeoffAmount  |参数名称：欠费核销金额| |参数的约束及描述：欠费核销金额|
    * cashAmount  |参数名称：现金账户金额。| |参数的约束及描述：现金账户金额。|
    * creditAmount  |参数名称：信用账户金额。| |参数的约束及描述：信用账户金额。|
    * measureId  |参数名称：金额单位。1：元| |参数的约束及描述：金额单位。1：元|
    * billType  |参数名称：消费类型：1：消费2：退款3：调账| |参数的约束及描述：消费类型：1：消费2：退款3：调账|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billCycle' => null,
        'resourceTypeCode' => null,
        'serviceTypeCode' => null,
        'chargingMode' => 'int32',
        'officialAmount' => 'bigdecimal',
        'officialDiscountAmount' => 'bigdecimal',
        'truncatedAmount' => 'bigdecimal',
        'consumeAmount' => 'bigdecimal',
        'couponAmount' => 'bigdecimal',
        'flexipurchaseCouponAmount' => 'bigdecimal',
        'storedValueCardAmount' => 'bigdecimal',
        'debtAmount' => 'bigdecimal',
        'writeoffAmount' => 'bigdecimal',
        'cashAmount' => 'bigdecimal',
        'creditAmount' => 'bigdecimal',
        'measureId' => 'int32',
        'billType' => 'int32',
        'customerId' => null
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
    * billCycle  |参数名称：账期，格式为YYYY-MM| |参数约束及描述：账期，格式为YYYY-MM|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型|
    * chargingMode  |参数名称：计费模式1：包周期；3：按需；10：预留实例| |参数约束及描述：计费模式1：包周期；3：按需；10：预留实例|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：官网价|
    * officialDiscountAmount  |参数名称：折扣金额| |参数的约束及描述：折扣金额|
    * truncatedAmount  |参数名称：抹零金额| |参数的约束及描述：抹零金额|
    * consumeAmount  |参数名称：应付金额，应付金额 = 官网价-折扣金额-抹零金额| |参数的约束及描述：应付金额，应付金额 = 官网价-折扣金额-抹零金额|
    * couponAmount  |参数名称：代金券金额。| |参数的约束及描述：代金券金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券金额，预留。| |参数的约束及描述：现金券金额，预留。|
    * storedValueCardAmount  |参数名称：储值卡金额，预留。| |参数的约束及描述：储值卡金额，预留。|
    * debtAmount  |参数名称：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。| |参数的约束及描述：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。|
    * writeoffAmount  |参数名称：欠费核销金额| |参数的约束及描述：欠费核销金额|
    * cashAmount  |参数名称：现金账户金额。| |参数的约束及描述：现金账户金额。|
    * creditAmount  |参数名称：信用账户金额。| |参数的约束及描述：信用账户金额。|
    * measureId  |参数名称：金额单位。1：元| |参数的约束及描述：金额单位。1：元|
    * billType  |参数名称：消费类型：1：消费2：退款3：调账| |参数的约束及描述：消费类型：1：消费2：退款3：调账|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billCycle' => 'bill_cycle',
            'resourceTypeCode' => 'resource_type_code',
            'serviceTypeCode' => 'service_type_code',
            'chargingMode' => 'charging_mode',
            'officialAmount' => 'official_amount',
            'officialDiscountAmount' => 'official_discount_amount',
            'truncatedAmount' => 'truncated_amount',
            'consumeAmount' => 'consume_amount',
            'couponAmount' => 'coupon_amount',
            'flexipurchaseCouponAmount' => 'flexipurchase_coupon_amount',
            'storedValueCardAmount' => 'stored_value_card_amount',
            'debtAmount' => 'debt_amount',
            'writeoffAmount' => 'writeoff_amount',
            'cashAmount' => 'cash_amount',
            'creditAmount' => 'credit_amount',
            'measureId' => 'measure_id',
            'billType' => 'bill_type',
            'customerId' => 'customer_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billCycle  |参数名称：账期，格式为YYYY-MM| |参数约束及描述：账期，格式为YYYY-MM|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型|
    * chargingMode  |参数名称：计费模式1：包周期；3：按需；10：预留实例| |参数约束及描述：计费模式1：包周期；3：按需；10：预留实例|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：官网价|
    * officialDiscountAmount  |参数名称：折扣金额| |参数的约束及描述：折扣金额|
    * truncatedAmount  |参数名称：抹零金额| |参数的约束及描述：抹零金额|
    * consumeAmount  |参数名称：应付金额，应付金额 = 官网价-折扣金额-抹零金额| |参数的约束及描述：应付金额，应付金额 = 官网价-折扣金额-抹零金额|
    * couponAmount  |参数名称：代金券金额。| |参数的约束及描述：代金券金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券金额，预留。| |参数的约束及描述：现金券金额，预留。|
    * storedValueCardAmount  |参数名称：储值卡金额，预留。| |参数的约束及描述：储值卡金额，预留。|
    * debtAmount  |参数名称：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。| |参数的约束及描述：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。|
    * writeoffAmount  |参数名称：欠费核销金额| |参数的约束及描述：欠费核销金额|
    * cashAmount  |参数名称：现金账户金额。| |参数的约束及描述：现金账户金额。|
    * creditAmount  |参数名称：信用账户金额。| |参数的约束及描述：信用账户金额。|
    * measureId  |参数名称：金额单位。1：元| |参数的约束及描述：金额单位。1：元|
    * billType  |参数名称：消费类型：1：消费2：退款3：调账| |参数的约束及描述：消费类型：1：消费2：退款3：调账|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    *
    * @var string[]
    */
    protected static $setters = [
            'billCycle' => 'setBillCycle',
            'resourceTypeCode' => 'setResourceTypeCode',
            'serviceTypeCode' => 'setServiceTypeCode',
            'chargingMode' => 'setChargingMode',
            'officialAmount' => 'setOfficialAmount',
            'officialDiscountAmount' => 'setOfficialDiscountAmount',
            'truncatedAmount' => 'setTruncatedAmount',
            'consumeAmount' => 'setConsumeAmount',
            'couponAmount' => 'setCouponAmount',
            'flexipurchaseCouponAmount' => 'setFlexipurchaseCouponAmount',
            'storedValueCardAmount' => 'setStoredValueCardAmount',
            'debtAmount' => 'setDebtAmount',
            'writeoffAmount' => 'setWriteoffAmount',
            'cashAmount' => 'setCashAmount',
            'creditAmount' => 'setCreditAmount',
            'measureId' => 'setMeasureId',
            'billType' => 'setBillType',
            'customerId' => 'setCustomerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billCycle  |参数名称：账期，格式为YYYY-MM| |参数约束及描述：账期，格式为YYYY-MM|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型|
    * chargingMode  |参数名称：计费模式1：包周期；3：按需；10：预留实例| |参数约束及描述：计费模式1：包周期；3：按需；10：预留实例|
    * officialAmount  |参数名称：官网价| |参数的约束及描述：官网价|
    * officialDiscountAmount  |参数名称：折扣金额| |参数的约束及描述：折扣金额|
    * truncatedAmount  |参数名称：抹零金额| |参数的约束及描述：抹零金额|
    * consumeAmount  |参数名称：应付金额，应付金额 = 官网价-折扣金额-抹零金额| |参数的约束及描述：应付金额，应付金额 = 官网价-折扣金额-抹零金额|
    * couponAmount  |参数名称：代金券金额。| |参数的约束及描述：代金券金额。|
    * flexipurchaseCouponAmount  |参数名称：现金券金额，预留。| |参数的约束及描述：现金券金额，预留。|
    * storedValueCardAmount  |参数名称：储值卡金额，预留。| |参数的约束及描述：储值卡金额，预留。|
    * debtAmount  |参数名称：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。| |参数的约束及描述：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。|
    * writeoffAmount  |参数名称：欠费核销金额| |参数的约束及描述：欠费核销金额|
    * cashAmount  |参数名称：现金账户金额。| |参数的约束及描述：现金账户金额。|
    * creditAmount  |参数名称：信用账户金额。| |参数的约束及描述：信用账户金额。|
    * measureId  |参数名称：金额单位。1：元| |参数的约束及描述：金额单位。1：元|
    * billType  |参数名称：消费类型：1：消费2：退款3：调账| |参数的约束及描述：消费类型：1：消费2：退款3：调账|
    * customerId  |参数名称：消费的客户账号ID。| |参数约束及描述：如果是查询自己，这个地方是自身的ID; 如果是查询某个企业子客户，这个地方是企业子客户ID如果是查询以及下面的所有子客户，这个地方是消费的实际客户ID; 如果是企业主自身消费，为企业主ID，如果这条消费记录是某个企业子客户的消费，这个地方的ID是企业子账号ID。|
    *
    * @var string[]
    */
    protected static $getters = [
            'billCycle' => 'getBillCycle',
            'resourceTypeCode' => 'getResourceTypeCode',
            'serviceTypeCode' => 'getServiceTypeCode',
            'chargingMode' => 'getChargingMode',
            'officialAmount' => 'getOfficialAmount',
            'officialDiscountAmount' => 'getOfficialDiscountAmount',
            'truncatedAmount' => 'getTruncatedAmount',
            'consumeAmount' => 'getConsumeAmount',
            'couponAmount' => 'getCouponAmount',
            'flexipurchaseCouponAmount' => 'getFlexipurchaseCouponAmount',
            'storedValueCardAmount' => 'getStoredValueCardAmount',
            'debtAmount' => 'getDebtAmount',
            'writeoffAmount' => 'getWriteoffAmount',
            'cashAmount' => 'getCashAmount',
            'creditAmount' => 'getCreditAmount',
            'measureId' => 'getMeasureId',
            'billType' => 'getBillType',
            'customerId' => 'getCustomerId'
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
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['officialAmount'] = isset($data['officialAmount']) ? $data['officialAmount'] : null;
        $this->container['officialDiscountAmount'] = isset($data['officialDiscountAmount']) ? $data['officialDiscountAmount'] : null;
        $this->container['truncatedAmount'] = isset($data['truncatedAmount']) ? $data['truncatedAmount'] : null;
        $this->container['consumeAmount'] = isset($data['consumeAmount']) ? $data['consumeAmount'] : null;
        $this->container['couponAmount'] = isset($data['couponAmount']) ? $data['couponAmount'] : null;
        $this->container['flexipurchaseCouponAmount'] = isset($data['flexipurchaseCouponAmount']) ? $data['flexipurchaseCouponAmount'] : null;
        $this->container['storedValueCardAmount'] = isset($data['storedValueCardAmount']) ? $data['storedValueCardAmount'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['writeoffAmount'] = isset($data['writeoffAmount']) ? $data['writeoffAmount'] : null;
        $this->container['cashAmount'] = isset($data['cashAmount']) ? $data['cashAmount'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
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
    *  |参数名称：账期，格式为YYYY-MM| |参数约束及描述：账期，格式为YYYY-MM|
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
    * @param string|null $billCycle |参数名称：账期，格式为YYYY-MM| |参数约束及描述：账期，格式为YYYY-MM|
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
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
    * @param string|null $resourceTypeCode |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型|
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
    * @param string|null $serviceTypeCode |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型|
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets chargingMode
    *  |参数名称：计费模式1：包周期；3：按需；10：预留实例| |参数约束及描述：计费模式1：包周期；3：按需；10：预留实例|
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
    * @param int|null $chargingMode |参数名称：计费模式1：包周期；3：按需；10：预留实例| |参数约束及描述：计费模式1：包周期；3：按需；10：预留实例|
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets officialAmount
    *  |参数名称：官网价| |参数的约束及描述：官网价|
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
    * @param float|null $officialAmount |参数名称：官网价| |参数的约束及描述：官网价|
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
    *  |参数名称：折扣金额| |参数的约束及描述：折扣金额|
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
    * @param float|null $officialDiscountAmount |参数名称：折扣金额| |参数的约束及描述：折扣金额|
    *
    * @return $this
    */
    public function setOfficialDiscountAmount($officialDiscountAmount)
    {
        $this->container['officialDiscountAmount'] = $officialDiscountAmount;
        return $this;
    }

    /**
    * Gets truncatedAmount
    *  |参数名称：抹零金额| |参数的约束及描述：抹零金额|
    *
    * @return float|null
    */
    public function getTruncatedAmount()
    {
        return $this->container['truncatedAmount'];
    }

    /**
    * Sets truncatedAmount
    *
    * @param float|null $truncatedAmount |参数名称：抹零金额| |参数的约束及描述：抹零金额|
    *
    * @return $this
    */
    public function setTruncatedAmount($truncatedAmount)
    {
        $this->container['truncatedAmount'] = $truncatedAmount;
        return $this;
    }

    /**
    * Gets consumeAmount
    *  |参数名称：应付金额，应付金额 = 官网价-折扣金额-抹零金额| |参数的约束及描述：应付金额，应付金额 = 官网价-折扣金额-抹零金额|
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
    * @param float|null $consumeAmount |参数名称：应付金额，应付金额 = 官网价-折扣金额-抹零金额| |参数的约束及描述：应付金额，应付金额 = 官网价-折扣金额-抹零金额|
    *
    * @return $this
    */
    public function setConsumeAmount($consumeAmount)
    {
        $this->container['consumeAmount'] = $consumeAmount;
        return $this;
    }

    /**
    * Gets couponAmount
    *  |参数名称：代金券金额。| |参数的约束及描述：代金券金额。|
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
    * @param float|null $couponAmount |参数名称：代金券金额。| |参数的约束及描述：代金券金额。|
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
    *  |参数名称：现金券金额，预留。| |参数的约束及描述：现金券金额，预留。|
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
    * @param float|null $flexipurchaseCouponAmount |参数名称：现金券金额，预留。| |参数的约束及描述：现金券金额，预留。|
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
    *  |参数名称：储值卡金额，预留。| |参数的约束及描述：储值卡金额，预留。|
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
    * @param float|null $storedValueCardAmount |参数名称：储值卡金额，预留。| |参数的约束及描述：储值卡金额，预留。|
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
    *  |参数名称：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。| |参数的约束及描述：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。|
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
    * @param float|null $debtAmount |参数名称：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。| |参数的约束及描述：欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。|
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
    *  |参数名称：欠费核销金额| |参数的约束及描述：欠费核销金额|
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
    * @param float|null $writeoffAmount |参数名称：欠费核销金额| |参数的约束及描述：欠费核销金额|
    *
    * @return $this
    */
    public function setWriteoffAmount($writeoffAmount)
    {
        $this->container['writeoffAmount'] = $writeoffAmount;
        return $this;
    }

    /**
    * Gets cashAmount
    *  |参数名称：现金账户金额。| |参数的约束及描述：现金账户金额。|
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
    * @param float|null $cashAmount |参数名称：现金账户金额。| |参数的约束及描述：现金账户金额。|
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
    *  |参数名称：信用账户金额。| |参数的约束及描述：信用账户金额。|
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
    * @param float|null $creditAmount |参数名称：信用账户金额。| |参数的约束及描述：信用账户金额。|
    *
    * @return $this
    */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  |参数名称：金额单位。1：元| |参数的约束及描述：金额单位。1：元|
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
    * @param int|null $measureId |参数名称：金额单位。1：元| |参数的约束及描述：金额单位。1：元|
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets billType
    *  |参数名称：消费类型：1：消费2：退款3：调账| |参数的约束及描述：消费类型：1：消费2：退款3：调账|
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
    * @param int|null $billType |参数名称：消费类型：1：消费2：退款3：调账| |参数的约束及描述：消费类型：1：消费2：退款3：调账|
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

