<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerOrderV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerOrderV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * orderId  订单ID。
    * customerId  客户账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * sourceType  客户订单订单来源类型： 1：客户2：代理3：合同4：分销商
    * status  订单状态： 1：待审核2：待退款3：处理中4：已取消5：已完成6：待支付9：待确认10：待发货11：待收货12：待上门取货13：换新中
    * orderType  订单类型： 1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * amountAfterDiscount  订单优惠后金额（不含券不含卡的实付价格）。
    * officialAmount  订单金额（官网价）。 退订订单中，该金额等于amount_after_discount。
    * measureId  订单金额度量单位： 1：元
    * createTime  创建时间 。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTime  支付时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * currency  货币编码。
    * contractId  合同ID。
    * amountInfo  amountInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'orderId' => 'string',
            'customerId' => 'string',
            'serviceTypeCode' => 'string',
            'serviceTypeName' => 'string',
            'sourceType' => 'int',
            'status' => 'int',
            'orderType' => 'int',
            'amountAfterDiscount' => 'double',
            'officialAmount' => 'double',
            'measureId' => 'int',
            'createTime' => 'string',
            'paymentTime' => 'string',
            'currency' => 'string',
            'contractId' => 'string',
            'amountInfo' => '\HuaweiCloud\SDK\Bss\V2\Model\AmountInfomationV2'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * orderId  订单ID。
    * customerId  客户账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * sourceType  客户订单订单来源类型： 1：客户2：代理3：合同4：分销商
    * status  订单状态： 1：待审核2：待退款3：处理中4：已取消5：已完成6：待支付9：待确认10：待发货11：待收货12：待上门取货13：换新中
    * orderType  订单类型： 1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * amountAfterDiscount  订单优惠后金额（不含券不含卡的实付价格）。
    * officialAmount  订单金额（官网价）。 退订订单中，该金额等于amount_after_discount。
    * measureId  订单金额度量单位： 1：元
    * createTime  创建时间 。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTime  支付时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * currency  货币编码。
    * contractId  合同ID。
    * amountInfo  amountInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'orderId' => null,
        'customerId' => null,
        'serviceTypeCode' => null,
        'serviceTypeName' => null,
        'sourceType' => 'int32',
        'status' => 'int32',
        'orderType' => 'int32',
        'amountAfterDiscount' => 'double',
        'officialAmount' => 'double',
        'measureId' => 'int32',
        'createTime' => null,
        'paymentTime' => null,
        'currency' => null,
        'contractId' => null,
        'amountInfo' => null
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
    * orderId  订单ID。
    * customerId  客户账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * sourceType  客户订单订单来源类型： 1：客户2：代理3：合同4：分销商
    * status  订单状态： 1：待审核2：待退款3：处理中4：已取消5：已完成6：待支付9：待确认10：待发货11：待收货12：待上门取货13：换新中
    * orderType  订单类型： 1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * amountAfterDiscount  订单优惠后金额（不含券不含卡的实付价格）。
    * officialAmount  订单金额（官网价）。 退订订单中，该金额等于amount_after_discount。
    * measureId  订单金额度量单位： 1：元
    * createTime  创建时间 。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTime  支付时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * currency  货币编码。
    * contractId  合同ID。
    * amountInfo  amountInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'orderId' => 'order_id',
            'customerId' => 'customer_id',
            'serviceTypeCode' => 'service_type_code',
            'serviceTypeName' => 'service_type_name',
            'sourceType' => 'source_type',
            'status' => 'status',
            'orderType' => 'order_type',
            'amountAfterDiscount' => 'amount_after_discount',
            'officialAmount' => 'official_amount',
            'measureId' => 'measure_id',
            'createTime' => 'create_time',
            'paymentTime' => 'payment_time',
            'currency' => 'currency',
            'contractId' => 'contract_id',
            'amountInfo' => 'amount_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * orderId  订单ID。
    * customerId  客户账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * sourceType  客户订单订单来源类型： 1：客户2：代理3：合同4：分销商
    * status  订单状态： 1：待审核2：待退款3：处理中4：已取消5：已完成6：待支付9：待确认10：待发货11：待收货12：待上门取货13：换新中
    * orderType  订单类型： 1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * amountAfterDiscount  订单优惠后金额（不含券不含卡的实付价格）。
    * officialAmount  订单金额（官网价）。 退订订单中，该金额等于amount_after_discount。
    * measureId  订单金额度量单位： 1：元
    * createTime  创建时间 。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTime  支付时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * currency  货币编码。
    * contractId  合同ID。
    * amountInfo  amountInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'orderId' => 'setOrderId',
            'customerId' => 'setCustomerId',
            'serviceTypeCode' => 'setServiceTypeCode',
            'serviceTypeName' => 'setServiceTypeName',
            'sourceType' => 'setSourceType',
            'status' => 'setStatus',
            'orderType' => 'setOrderType',
            'amountAfterDiscount' => 'setAmountAfterDiscount',
            'officialAmount' => 'setOfficialAmount',
            'measureId' => 'setMeasureId',
            'createTime' => 'setCreateTime',
            'paymentTime' => 'setPaymentTime',
            'currency' => 'setCurrency',
            'contractId' => 'setContractId',
            'amountInfo' => 'setAmountInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * orderId  订单ID。
    * customerId  客户账号ID。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * sourceType  客户订单订单来源类型： 1：客户2：代理3：合同4：分销商
    * status  订单状态： 1：待审核2：待退款3：处理中4：已取消5：已完成6：待支付9：待确认10：待发货11：待收货12：待上门取货13：换新中
    * orderType  订单类型： 1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    * amountAfterDiscount  订单优惠后金额（不含券不含卡的实付价格）。
    * officialAmount  订单金额（官网价）。 退订订单中，该金额等于amount_after_discount。
    * measureId  订单金额度量单位： 1：元
    * createTime  创建时间 。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * paymentTime  支付时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * currency  货币编码。
    * contractId  合同ID。
    * amountInfo  amountInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'orderId' => 'getOrderId',
            'customerId' => 'getCustomerId',
            'serviceTypeCode' => 'getServiceTypeCode',
            'serviceTypeName' => 'getServiceTypeName',
            'sourceType' => 'getSourceType',
            'status' => 'getStatus',
            'orderType' => 'getOrderType',
            'amountAfterDiscount' => 'getAmountAfterDiscount',
            'officialAmount' => 'getOfficialAmount',
            'measureId' => 'getMeasureId',
            'createTime' => 'getCreateTime',
            'paymentTime' => 'getPaymentTime',
            'currency' => 'getCurrency',
            'contractId' => 'getContractId',
            'amountInfo' => 'getAmountInfo'
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
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['amountAfterDiscount'] = isset($data['amountAfterDiscount']) ? $data['amountAfterDiscount'] : null;
        $this->container['officialAmount'] = isset($data['officialAmount']) ? $data['officialAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['paymentTime'] = isset($data['paymentTime']) ? $data['paymentTime'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['contractId'] = isset($data['contractId']) ? $data['contractId'] : null;
        $this->container['amountInfo'] = isset($data['amountInfo']) ? $data['amountInfo'] : null;
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
    * Gets orderId
    *  订单ID。
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
    * @param string|null $orderId 订单ID。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
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
    * Gets sourceType
    *  客户订单订单来源类型： 1：客户2：代理3：合同4：分销商
    *
    * @return int|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param int|null $sourceType 客户订单订单来源类型： 1：客户2：代理3：合同4：分销商
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets status
    *  订单状态： 1：待审核2：待退款3：处理中4：已取消5：已完成6：待支付9：待确认10：待发货11：待收货12：待上门取货13：换新中
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
    * @param int|null $status 订单状态： 1：待审核2：待退款3：处理中4：已取消5：已完成6：待支付9：待确认10：待发货11：待收货12：待上门取货13：换新中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets orderType
    *  订单类型： 1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    *
    * @return int|null
    */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
    * Sets orderType
    *
    * @param int|null $orderType 订单类型： 1：开通2：续订3：变更4：退订11：按需转包年/包月13：试用14：转商用15：费用调整
    *
    * @return $this
    */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;
        return $this;
    }

    /**
    * Gets amountAfterDiscount
    *  订单优惠后金额（不含券不含卡的实付价格）。
    *
    * @return double|null
    */
    public function getAmountAfterDiscount()
    {
        return $this->container['amountAfterDiscount'];
    }

    /**
    * Sets amountAfterDiscount
    *
    * @param double|null $amountAfterDiscount 订单优惠后金额（不含券不含卡的实付价格）。
    *
    * @return $this
    */
    public function setAmountAfterDiscount($amountAfterDiscount)
    {
        $this->container['amountAfterDiscount'] = $amountAfterDiscount;
        return $this;
    }

    /**
    * Gets officialAmount
    *  订单金额（官网价）。 退订订单中，该金额等于amount_after_discount。
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
    * @param double|null $officialAmount 订单金额（官网价）。 退订订单中，该金额等于amount_after_discount。
    *
    * @return $this
    */
    public function setOfficialAmount($officialAmount)
    {
        $this->container['officialAmount'] = $officialAmount;
        return $this;
    }

    /**
    * Gets measureId
    *  订单金额度量单位： 1：元
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
    * @param int|null $measureId 订单金额度量单位： 1：元
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间 。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间 。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets paymentTime
    *  支付时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return string|null
    */
    public function getPaymentTime()
    {
        return $this->container['paymentTime'];
    }

    /**
    * Sets paymentTime
    *
    * @param string|null $paymentTime 支付时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setPaymentTime($paymentTime)
    {
        $this->container['paymentTime'] = $paymentTime;
        return $this;
    }

    /**
    * Gets currency
    *  货币编码。
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency 货币编码。
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets contractId
    *  合同ID。
    *
    * @return string|null
    */
    public function getContractId()
    {
        return $this->container['contractId'];
    }

    /**
    * Sets contractId
    *
    * @param string|null $contractId 合同ID。
    *
    * @return $this
    */
    public function setContractId($contractId)
    {
        $this->container['contractId'] = $contractId;
        return $this;
    }

    /**
    * Gets amountInfo
    *  amountInfo
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\AmountInfomationV2|null
    */
    public function getAmountInfo()
    {
        return $this->container['amountInfo'];
    }

    /**
    * Sets amountInfo
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\AmountInfomationV2|null $amountInfo amountInfo
    *
    * @return $this
    */
    public function setAmountInfo($amountInfo)
    {
        $this->container['amountInfo'] = $amountInfo;
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

