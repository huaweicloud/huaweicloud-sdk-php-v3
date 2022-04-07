<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

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
    * billCycle  消费汇总数据所在账期，格式：YYYY-MM。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * officialAmount  官网价。
    * officialDiscountAmount  折扣金额。
    * truncatedAmount  抹零金额。
    * consumeAmount  应付金额。 应付金额=官网价-折扣金额-抹零金额
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * debtAmount  欠费金额。即伙伴从客户账户扣费时，客户账户金额不足，欠费的金额。
    * writeoffAmount  欠费核销金额。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元
    * billType  账单类型。 1：消费2：退款3：调账
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billCycle' => 'string',
            'resourceTypeCode' => 'string',
            'serviceTypeCode' => 'string',
            'serviceTypeName' => 'string',
            'resourceTypeName' => 'string',
            'chargingMode' => 'int',
            'officialAmount' => 'double',
            'officialDiscountAmount' => 'double',
            'truncatedAmount' => 'double',
            'consumeAmount' => 'double',
            'couponAmount' => 'double',
            'flexipurchaseCouponAmount' => 'double',
            'storedValueCardAmount' => 'double',
            'debtAmount' => 'double',
            'writeoffAmount' => 'double',
            'cashAmount' => 'double',
            'creditAmount' => 'double',
            'measureId' => 'int',
            'billType' => 'int',
            'customerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billCycle  消费汇总数据所在账期，格式：YYYY-MM。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * officialAmount  官网价。
    * officialDiscountAmount  折扣金额。
    * truncatedAmount  抹零金额。
    * consumeAmount  应付金额。 应付金额=官网价-折扣金额-抹零金额
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * debtAmount  欠费金额。即伙伴从客户账户扣费时，客户账户金额不足，欠费的金额。
    * writeoffAmount  欠费核销金额。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元
    * billType  账单类型。 1：消费2：退款3：调账
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billCycle' => null,
        'resourceTypeCode' => null,
        'serviceTypeCode' => null,
        'serviceTypeName' => null,
        'resourceTypeName' => null,
        'chargingMode' => 'int32',
        'officialAmount' => 'double',
        'officialDiscountAmount' => 'double',
        'truncatedAmount' => 'double',
        'consumeAmount' => 'double',
        'couponAmount' => 'double',
        'flexipurchaseCouponAmount' => 'double',
        'storedValueCardAmount' => 'double',
        'debtAmount' => 'double',
        'writeoffAmount' => 'double',
        'cashAmount' => 'double',
        'creditAmount' => 'double',
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
    * billCycle  消费汇总数据所在账期，格式：YYYY-MM。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * officialAmount  官网价。
    * officialDiscountAmount  折扣金额。
    * truncatedAmount  抹零金额。
    * consumeAmount  应付金额。 应付金额=官网价-折扣金额-抹零金额
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * debtAmount  欠费金额。即伙伴从客户账户扣费时，客户账户金额不足，欠费的金额。
    * writeoffAmount  欠费核销金额。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元
    * billType  账单类型。 1：消费2：退款3：调账
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billCycle' => 'bill_cycle',
            'resourceTypeCode' => 'resource_type_code',
            'serviceTypeCode' => 'service_type_code',
            'serviceTypeName' => 'service_type_name',
            'resourceTypeName' => 'resource_type_name',
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
    * billCycle  消费汇总数据所在账期，格式：YYYY-MM。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * officialAmount  官网价。
    * officialDiscountAmount  折扣金额。
    * truncatedAmount  抹零金额。
    * consumeAmount  应付金额。 应付金额=官网价-折扣金额-抹零金额
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * debtAmount  欠费金额。即伙伴从客户账户扣费时，客户账户金额不足，欠费的金额。
    * writeoffAmount  欠费核销金额。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元
    * billType  账单类型。 1：消费2：退款3：调账
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'billCycle' => 'setBillCycle',
            'resourceTypeCode' => 'setResourceTypeCode',
            'serviceTypeCode' => 'setServiceTypeCode',
            'serviceTypeName' => 'setServiceTypeName',
            'resourceTypeName' => 'setResourceTypeName',
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
    * billCycle  消费汇总数据所在账期，格式：YYYY-MM。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * chargingMode  计费模式。 1：包年/包月3：按需10：预留实例
    * officialAmount  官网价。
    * officialDiscountAmount  折扣金额。
    * truncatedAmount  抹零金额。
    * consumeAmount  应付金额。 应付金额=官网价-折扣金额-抹零金额
    * couponAmount  代金券金额。
    * flexipurchaseCouponAmount  现金券金额，预留。
    * storedValueCardAmount  储值卡金额，预留。
    * debtAmount  欠费金额。即伙伴从客户账户扣费时，客户账户金额不足，欠费的金额。
    * writeoffAmount  欠费核销金额。
    * cashAmount  现金账户金额。
    * creditAmount  信用账户金额。
    * measureId  金额单位。 1：元
    * billType  账单类型。 1：消费2：退款3：调账
    * customerId  消费的客户账号ID。 如果是普通客户或者企业子客户查询消费记录，只能查询到客户自己的消费记录，且此处显示的是客户自己的客户ID。如果是企业主查询消费记录，可以查询到企业主以及企业子客户的消费记录，此处为消费的实际客户ID。如果是企业主自己的消费记录，则为企业主ID；如果是某个企业子客户的消费记录，则此处为企业子账号ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'billCycle' => 'getBillCycle',
            'resourceTypeCode' => 'getResourceTypeCode',
            'serviceTypeCode' => 'getServiceTypeCode',
            'serviceTypeName' => 'getServiceTypeName',
            'resourceTypeName' => 'getResourceTypeName',
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
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
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
    *  消费汇总数据所在账期，格式：YYYY-MM。
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
    * @param string|null $billCycle 消费汇总数据所在账期，格式：YYYY-MM。
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
    *  折扣金额。
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
    * @param double|null $officialDiscountAmount 折扣金额。
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
    *  抹零金额。
    *
    * @return double|null
    */
    public function getTruncatedAmount()
    {
        return $this->container['truncatedAmount'];
    }

    /**
    * Sets truncatedAmount
    *
    * @param double|null $truncatedAmount 抹零金额。
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
    *  应付金额。 应付金额=官网价-折扣金额-抹零金额
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
    * @param double|null $consumeAmount 应付金额。 应付金额=官网价-折扣金额-抹零金额
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
    *  代金券金额。
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
    * @param double|null $couponAmount 代金券金额。
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
    *  现金券金额，预留。
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
    * @param double|null $flexipurchaseCouponAmount 现金券金额，预留。
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
    *  储值卡金额，预留。
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
    * @param double|null $storedValueCardAmount 储值卡金额，预留。
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
    *  欠费金额。即伙伴从客户账户扣费时，客户账户金额不足，欠费的金额。
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
    * @param double|null $debtAmount 欠费金额。即伙伴从客户账户扣费时，客户账户金额不足，欠费的金额。
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
    * Gets cashAmount
    *  现金账户金额。
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
    * @param double|null $cashAmount 现金账户金额。
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
    *  信用账户金额。
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
    * @param double|null $creditAmount 信用账户金额。
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
    * Gets billType
    *  账单类型。 1：消费2：退款3：调账
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
    * @param int|null $billType 账单类型。 1：消费2：退款3：调账
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

