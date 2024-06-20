<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BillSumRecordInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BillSumRecordInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。  说明： 当请求消息中不传递“cloud_service_type_code”参数时，此值返回“null”。
    * regionCode  云服务区，该字段预留，先不使用。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。
    * consumeTime  消费统计的时期。 格式为YYYY-MM。 示例：2018-05
    * payMethod  消费类型。 当请求消息中不传递“cloud_service_type_code”参数时，如果此值返回“0”表示此服务类型下所有的资源类型都是包年/包月计费模式，如果此值返回空字符串表示此服务类型下有资源类型为按需计费模式。当请求消息中传递“cloud_service_type_code”参数时，如果此值返回“0”表示此资源类型是包年/包月计费模式，如果此值返回“1”表示此资源类型为按需计费模式。
    * consumeAmount  消费的金额，即从客户账户实际扣除的金额。包含代金券支付的金额。
    * debt  欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。
    * discount  折扣金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billType  账单类型。 0：消费1：退订
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表4。
    * discountDetailInfos  折扣金额详情。 具体请参见表5。 当bill_type为1时，不返回此参数。
    * enterpriseProjectId  企业项目ID。 当请求参数中传递了“enterpriseProjectId”，响应参数“bill_sums”返回以企业项目ID为维度的账单记录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'resourceTypeCode' => 'string',
            'regionCode' => 'string',
            'cloudServiceTypeCode' => 'string',
            'consumeTime' => 'string',
            'payMethod' => 'string',
            'consumeAmount' => 'float',
            'debt' => 'float',
            'discount' => 'float',
            'measureId' => 'int',
            'billType' => 'int',
            'accountDetails' => '\HuaweiCloud\SDK\Bssintl\V2\Model\BalanceTypePay[]',
            'discountDetailInfos' => '\HuaweiCloud\SDK\Bssintl\V2\Model\DiscountDetailInfo[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。  说明： 当请求消息中不传递“cloud_service_type_code”参数时，此值返回“null”。
    * regionCode  云服务区，该字段预留，先不使用。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。
    * consumeTime  消费统计的时期。 格式为YYYY-MM。 示例：2018-05
    * payMethod  消费类型。 当请求消息中不传递“cloud_service_type_code”参数时，如果此值返回“0”表示此服务类型下所有的资源类型都是包年/包月计费模式，如果此值返回空字符串表示此服务类型下有资源类型为按需计费模式。当请求消息中传递“cloud_service_type_code”参数时，如果此值返回“0”表示此资源类型是包年/包月计费模式，如果此值返回“1”表示此资源类型为按需计费模式。
    * consumeAmount  消费的金额，即从客户账户实际扣除的金额。包含代金券支付的金额。
    * debt  欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。
    * discount  折扣金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billType  账单类型。 0：消费1：退订
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表4。
    * discountDetailInfos  折扣金额详情。 具体请参见表5。 当bill_type为1时，不返回此参数。
    * enterpriseProjectId  企业项目ID。 当请求参数中传递了“enterpriseProjectId”，响应参数“bill_sums”返回以企业项目ID为维度的账单记录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'resourceTypeCode' => null,
        'regionCode' => null,
        'cloudServiceTypeCode' => null,
        'consumeTime' => null,
        'payMethod' => null,
        'consumeAmount' => 'bigdecimal',
        'debt' => 'bigdecimal',
        'discount' => 'bigdecimal',
        'measureId' => 'int32',
        'billType' => 'int32',
        'accountDetails' => null,
        'discountDetailInfos' => null,
        'enterpriseProjectId' => null
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
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。  说明： 当请求消息中不传递“cloud_service_type_code”参数时，此值返回“null”。
    * regionCode  云服务区，该字段预留，先不使用。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。
    * consumeTime  消费统计的时期。 格式为YYYY-MM。 示例：2018-05
    * payMethod  消费类型。 当请求消息中不传递“cloud_service_type_code”参数时，如果此值返回“0”表示此服务类型下所有的资源类型都是包年/包月计费模式，如果此值返回空字符串表示此服务类型下有资源类型为按需计费模式。当请求消息中传递“cloud_service_type_code”参数时，如果此值返回“0”表示此资源类型是包年/包月计费模式，如果此值返回“1”表示此资源类型为按需计费模式。
    * consumeAmount  消费的金额，即从客户账户实际扣除的金额。包含代金券支付的金额。
    * debt  欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。
    * discount  折扣金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billType  账单类型。 0：消费1：退订
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表4。
    * discountDetailInfos  折扣金额详情。 具体请参见表5。 当bill_type为1时，不返回此参数。
    * enterpriseProjectId  企业项目ID。 当请求参数中传递了“enterpriseProjectId”，响应参数“bill_sums”返回以企业项目ID为维度的账单记录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'resourceTypeCode' => 'resource_type_code',
            'regionCode' => 'region_code',
            'cloudServiceTypeCode' => 'cloud_service_type_code',
            'consumeTime' => 'consume_time',
            'payMethod' => 'pay_method',
            'consumeAmount' => 'consume_amount',
            'debt' => 'debt',
            'discount' => 'discount',
            'measureId' => 'measure_id',
            'billType' => 'bill_type',
            'accountDetails' => 'account_details',
            'discountDetailInfos' => 'discount_detail_infos',
            'enterpriseProjectId' => 'enterpriseProjectId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。  说明： 当请求消息中不传递“cloud_service_type_code”参数时，此值返回“null”。
    * regionCode  云服务区，该字段预留，先不使用。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。
    * consumeTime  消费统计的时期。 格式为YYYY-MM。 示例：2018-05
    * payMethod  消费类型。 当请求消息中不传递“cloud_service_type_code”参数时，如果此值返回“0”表示此服务类型下所有的资源类型都是包年/包月计费模式，如果此值返回空字符串表示此服务类型下有资源类型为按需计费模式。当请求消息中传递“cloud_service_type_code”参数时，如果此值返回“0”表示此资源类型是包年/包月计费模式，如果此值返回“1”表示此资源类型为按需计费模式。
    * consumeAmount  消费的金额，即从客户账户实际扣除的金额。包含代金券支付的金额。
    * debt  欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。
    * discount  折扣金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billType  账单类型。 0：消费1：退订
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表4。
    * discountDetailInfos  折扣金额详情。 具体请参见表5。 当bill_type为1时，不返回此参数。
    * enterpriseProjectId  企业项目ID。 当请求参数中传递了“enterpriseProjectId”，响应参数“bill_sums”返回以企业项目ID为维度的账单记录。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'resourceTypeCode' => 'setResourceTypeCode',
            'regionCode' => 'setRegionCode',
            'cloudServiceTypeCode' => 'setCloudServiceTypeCode',
            'consumeTime' => 'setConsumeTime',
            'payMethod' => 'setPayMethod',
            'consumeAmount' => 'setConsumeAmount',
            'debt' => 'setDebt',
            'discount' => 'setDiscount',
            'measureId' => 'setMeasureId',
            'billType' => 'setBillType',
            'accountDetails' => 'setAccountDetails',
            'discountDetailInfos' => 'setDiscountDetailInfos',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。  说明： 当请求消息中不传递“cloud_service_type_code”参数时，此值返回“null”。
    * regionCode  云服务区，该字段预留，先不使用。
    * cloudServiceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。
    * consumeTime  消费统计的时期。 格式为YYYY-MM。 示例：2018-05
    * payMethod  消费类型。 当请求消息中不传递“cloud_service_type_code”参数时，如果此值返回“0”表示此服务类型下所有的资源类型都是包年/包月计费模式，如果此值返回空字符串表示此服务类型下有资源类型为按需计费模式。当请求消息中传递“cloud_service_type_code”参数时，如果此值返回“0”表示此资源类型是包年/包月计费模式，如果此值返回“1”表示此资源类型为按需计费模式。
    * consumeAmount  消费的金额，即从客户账户实际扣除的金额。包含代金券支付的金额。
    * debt  欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。
    * discount  折扣金额。
    * measureId  金额单位。 1：元3：分 默认值为3。
    * billType  账单类型。 0：消费1：退订
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表4。
    * discountDetailInfos  折扣金额详情。 具体请参见表5。 当bill_type为1时，不返回此参数。
    * enterpriseProjectId  企业项目ID。 当请求参数中传递了“enterpriseProjectId”，响应参数“bill_sums”返回以企业项目ID为维度的账单记录。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'resourceTypeCode' => 'getResourceTypeCode',
            'regionCode' => 'getRegionCode',
            'cloudServiceTypeCode' => 'getCloudServiceTypeCode',
            'consumeTime' => 'getConsumeTime',
            'payMethod' => 'getPayMethod',
            'consumeAmount' => 'getConsumeAmount',
            'debt' => 'getDebt',
            'discount' => 'getDiscount',
            'measureId' => 'getMeasureId',
            'billType' => 'getBillType',
            'accountDetails' => 'getAccountDetails',
            'discountDetailInfos' => 'getDiscountDetailInfos',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['cloudServiceTypeCode'] = isset($data['cloudServiceTypeCode']) ? $data['cloudServiceTypeCode'] : null;
        $this->container['consumeTime'] = isset($data['consumeTime']) ? $data['consumeTime'] : null;
        $this->container['payMethod'] = isset($data['payMethod']) ? $data['payMethod'] : null;
        $this->container['consumeAmount'] = isset($data['consumeAmount']) ? $data['consumeAmount'] : null;
        $this->container['debt'] = isset($data['debt']) ? $data['debt'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['accountDetails'] = isset($data['accountDetails']) ? $data['accountDetails'] : null;
        $this->container['discountDetailInfos'] = isset($data['discountDetailInfos']) ? $data['discountDetailInfos'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets resourceTypeCode
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。  说明： 当请求消息中不传递“cloud_service_type_code”参数时，此值返回“null”。
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
    * @param string|null $resourceTypeCode 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。  说明： 当请求消息中不传递“cloud_service_type_code”参数时，此值返回“null”。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets regionCode
    *  云服务区，该字段预留，先不使用。
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
    * @param string|null $regionCode 云服务区，该字段预留，先不使用。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets cloudServiceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。
    *
    * @return string|null
    */
    public function getCloudServiceTypeCode()
    {
        return $this->container['cloudServiceTypeCode'];
    }

    /**
    * Sets cloudServiceTypeCode
    *
    * @param string|null $cloudServiceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。
    *
    * @return $this
    */
    public function setCloudServiceTypeCode($cloudServiceTypeCode)
    {
        $this->container['cloudServiceTypeCode'] = $cloudServiceTypeCode;
        return $this;
    }

    /**
    * Gets consumeTime
    *  消费统计的时期。 格式为YYYY-MM。 示例：2018-05
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
    * @param string|null $consumeTime 消费统计的时期。 格式为YYYY-MM。 示例：2018-05
    *
    * @return $this
    */
    public function setConsumeTime($consumeTime)
    {
        $this->container['consumeTime'] = $consumeTime;
        return $this;
    }

    /**
    * Gets payMethod
    *  消费类型。 当请求消息中不传递“cloud_service_type_code”参数时，如果此值返回“0”表示此服务类型下所有的资源类型都是包年/包月计费模式，如果此值返回空字符串表示此服务类型下有资源类型为按需计费模式。当请求消息中传递“cloud_service_type_code”参数时，如果此值返回“0”表示此资源类型是包年/包月计费模式，如果此值返回“1”表示此资源类型为按需计费模式。
    *
    * @return string|null
    */
    public function getPayMethod()
    {
        return $this->container['payMethod'];
    }

    /**
    * Sets payMethod
    *
    * @param string|null $payMethod 消费类型。 当请求消息中不传递“cloud_service_type_code”参数时，如果此值返回“0”表示此服务类型下所有的资源类型都是包年/包月计费模式，如果此值返回空字符串表示此服务类型下有资源类型为按需计费模式。当请求消息中传递“cloud_service_type_code”参数时，如果此值返回“0”表示此资源类型是包年/包月计费模式，如果此值返回“1”表示此资源类型为按需计费模式。
    *
    * @return $this
    */
    public function setPayMethod($payMethod)
    {
        $this->container['payMethod'] = $payMethod;
        return $this;
    }

    /**
    * Gets consumeAmount
    *  消费的金额，即从客户账户实际扣除的金额。包含代金券支付的金额。
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
    * @param float|null $consumeAmount 消费的金额，即从客户账户实际扣除的金额。包含代金券支付的金额。
    *
    * @return $this
    */
    public function setConsumeAmount($consumeAmount)
    {
        $this->container['consumeAmount'] = $consumeAmount;
        return $this;
    }

    /**
    * Gets debt
    *  欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。
    *
    * @return float|null
    */
    public function getDebt()
    {
        return $this->container['debt'];
    }

    /**
    * Sets debt
    *
    * @param float|null $debt 欠费金额，即从客户账户扣费的时候，客户账户金额不足，欠费的金额。
    *
    * @return $this
    */
    public function setDebt($debt)
    {
        $this->container['debt'] = $debt;
        return $this;
    }

    /**
    * Gets discount
    *  折扣金额。
    *
    * @return float|null
    */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
    * Sets discount
    *
    * @param float|null $discount 折扣金额。
    *
    * @return $this
    */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;
        return $this;
    }

    /**
    * Gets measureId
    *  金额单位。 1：元3：分 默认值为3。
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
    * @param int|null $measureId 金额单位。 1：元3：分 默认值为3。
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
    *  账单类型。 0：消费1：退订
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
    * @param int|null $billType 账单类型。 0：消费1：退订
    *
    * @return $this
    */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;
        return $this;
    }

    /**
    * Gets accountDetails
    *  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表4。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\BalanceTypePay[]|null
    */
    public function getAccountDetails()
    {
        return $this->container['accountDetails'];
    }

    /**
    * Sets accountDetails
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\BalanceTypePay[]|null $accountDetails 按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表4。
    *
    * @return $this
    */
    public function setAccountDetails($accountDetails)
    {
        $this->container['accountDetails'] = $accountDetails;
        return $this;
    }

    /**
    * Gets discountDetailInfos
    *  折扣金额详情。 具体请参见表5。 当bill_type为1时，不返回此参数。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\DiscountDetailInfo[]|null
    */
    public function getDiscountDetailInfos()
    {
        return $this->container['discountDetailInfos'];
    }

    /**
    * Sets discountDetailInfos
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\DiscountDetailInfo[]|null $discountDetailInfos 折扣金额详情。 具体请参见表5。 当bill_type为1时，不返回此参数。
    *
    * @return $this
    */
    public function setDiscountDetailInfos($discountDetailInfos)
    {
        $this->container['discountDetailInfos'] = $discountDetailInfos;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 当请求参数中传递了“enterpriseProjectId”，响应参数“bill_sums”返回以企业项目ID为维度的账单记录。
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
    * @param string|null $enterpriseProjectId 企业项目ID。 当请求参数中传递了“enterpriseProjectId”，响应参数“bill_sums”返回以企业项目ID为维度的账单记录。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

