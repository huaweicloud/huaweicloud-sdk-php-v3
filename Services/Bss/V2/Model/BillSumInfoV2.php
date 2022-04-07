<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BillSumInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BillSumInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * billType  账单类型。 0：正常1：退订2：华为核销
    * chargeMode  计费模式。 1：包年/包月3: 按需
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * debtAmount  欠费金额，指从客户账户扣费的时候，客户账户金额不足，欠费的金额，华为核销或者退订的时候没有该字段。
    * adjustmentAmount  核销欠款，华为核销或者退订的时候没有该字段。
    * discountAmount  折扣金额，华为核销或者退订的时候没有该字段。
    * measureId  金额单位。 1：元
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表3。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'cloudServiceType' => 'string',
            'cloudServiceTypeName' => 'string',
            'billType' => 'string',
            'chargeMode' => 'string',
            'amount' => 'double',
            'debtAmount' => 'double',
            'adjustmentAmount' => 'double',
            'discountAmount' => 'double',
            'measureId' => 'int',
            'accountDetails' => '\HuaweiCloud\SDK\Bss\V2\Model\BalanceTypeDeductSumV2[]',
            'resourceTypeCode' => 'string',
            'resourceTypeName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * billType  账单类型。 0：正常1：退订2：华为核销
    * chargeMode  计费模式。 1：包年/包月3: 按需
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * debtAmount  欠费金额，指从客户账户扣费的时候，客户账户金额不足，欠费的金额，华为核销或者退订的时候没有该字段。
    * adjustmentAmount  核销欠款，华为核销或者退订的时候没有该字段。
    * discountAmount  折扣金额，华为核销或者退订的时候没有该字段。
    * measureId  金额单位。 1：元
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表3。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'cloudServiceType' => null,
        'cloudServiceTypeName' => null,
        'billType' => null,
        'chargeMode' => null,
        'amount' => 'double',
        'debtAmount' => 'double',
        'adjustmentAmount' => 'double',
        'discountAmount' => 'double',
        'measureId' => 'int32',
        'accountDetails' => null,
        'resourceTypeCode' => null,
        'resourceTypeName' => null
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
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * billType  账单类型。 0：正常1：退订2：华为核销
    * chargeMode  计费模式。 1：包年/包月3: 按需
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * debtAmount  欠费金额，指从客户账户扣费的时候，客户账户金额不足，欠费的金额，华为核销或者退订的时候没有该字段。
    * adjustmentAmount  核销欠款，华为核销或者退订的时候没有该字段。
    * discountAmount  折扣金额，华为核销或者退订的时候没有该字段。
    * measureId  金额单位。 1：元
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表3。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'cloudServiceType' => 'cloud_service_type',
            'cloudServiceTypeName' => 'cloud_service_type_name',
            'billType' => 'bill_type',
            'chargeMode' => 'charge_mode',
            'amount' => 'amount',
            'debtAmount' => 'debt_amount',
            'adjustmentAmount' => 'adjustment_amount',
            'discountAmount' => 'discount_amount',
            'measureId' => 'measure_id',
            'accountDetails' => 'account_details',
            'resourceTypeCode' => 'resource_type_code',
            'resourceTypeName' => 'resource_type_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * billType  账单类型。 0：正常1：退订2：华为核销
    * chargeMode  计费模式。 1：包年/包月3: 按需
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * debtAmount  欠费金额，指从客户账户扣费的时候，客户账户金额不足，欠费的金额，华为核销或者退订的时候没有该字段。
    * adjustmentAmount  核销欠款，华为核销或者退订的时候没有该字段。
    * discountAmount  折扣金额，华为核销或者退订的时候没有该字段。
    * measureId  金额单位。 1：元
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表3。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'cloudServiceType' => 'setCloudServiceType',
            'cloudServiceTypeName' => 'setCloudServiceTypeName',
            'billType' => 'setBillType',
            'chargeMode' => 'setChargeMode',
            'amount' => 'setAmount',
            'debtAmount' => 'setDebtAmount',
            'adjustmentAmount' => 'setAdjustmentAmount',
            'discountAmount' => 'setDiscountAmount',
            'measureId' => 'setMeasureId',
            'accountDetails' => 'setAccountDetails',
            'resourceTypeCode' => 'setResourceTypeCode',
            'resourceTypeName' => 'setResourceTypeName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * cloudServiceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * billType  账单类型。 0：正常1：退订2：华为核销
    * chargeMode  计费模式。 1：包年/包月3: 按需
    * amount  金额。 对于billType=1或者2的账单，该金额为负值。
    * debtAmount  欠费金额，指从客户账户扣费的时候，客户账户金额不足，欠费的金额，华为核销或者退订的时候没有该字段。
    * adjustmentAmount  核销欠款，华为核销或者退订的时候没有该字段。
    * discountAmount  折扣金额，华为核销或者退订的时候没有该字段。
    * measureId  金额单位。 1：元
    * accountDetails  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表3。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'cloudServiceType' => 'getCloudServiceType',
            'cloudServiceTypeName' => 'getCloudServiceTypeName',
            'billType' => 'getBillType',
            'chargeMode' => 'getChargeMode',
            'amount' => 'getAmount',
            'debtAmount' => 'getDebtAmount',
            'adjustmentAmount' => 'getAdjustmentAmount',
            'discountAmount' => 'getDiscountAmount',
            'measureId' => 'getMeasureId',
            'accountDetails' => 'getAccountDetails',
            'resourceTypeCode' => 'getResourceTypeCode',
            'resourceTypeName' => 'getResourceTypeName'
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
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['cloudServiceTypeName'] = isset($data['cloudServiceTypeName']) ? $data['cloudServiceTypeName'] : null;
        $this->container['billType'] = isset($data['billType']) ? $data['billType'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['debtAmount'] = isset($data['debtAmount']) ? $data['debtAmount'] : null;
        $this->container['adjustmentAmount'] = isset($data['adjustmentAmount']) ? $data['adjustmentAmount'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['accountDetails'] = isset($data['accountDetails']) ? $data['accountDetails'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
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
    * Gets billType
    *  账单类型。 0：正常1：退订2：华为核销
    *
    * @return string|null
    */
    public function getBillType()
    {
        return $this->container['billType'];
    }

    /**
    * Sets billType
    *
    * @param string|null $billType 账单类型。 0：正常1：退订2：华为核销
    *
    * @return $this
    */
    public function setBillType($billType)
    {
        $this->container['billType'] = $billType;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式。 1：包年/包月3: 按需
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
    * @param string|null $chargeMode 计费模式。 1：包年/包月3: 按需
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets amount
    *  金额。 对于billType=1或者2的账单，该金额为负值。
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
    * @param double|null $amount 金额。 对于billType=1或者2的账单，该金额为负值。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets debtAmount
    *  欠费金额，指从客户账户扣费的时候，客户账户金额不足，欠费的金额，华为核销或者退订的时候没有该字段。
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
    * @param double|null $debtAmount 欠费金额，指从客户账户扣费的时候，客户账户金额不足，欠费的金额，华为核销或者退订的时候没有该字段。
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
    *  核销欠款，华为核销或者退订的时候没有该字段。
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
    * @param double|null $adjustmentAmount 核销欠款，华为核销或者退订的时候没有该字段。
    *
    * @return $this
    */
    public function setAdjustmentAmount($adjustmentAmount)
    {
        $this->container['adjustmentAmount'] = $adjustmentAmount;
        return $this;
    }

    /**
    * Gets discountAmount
    *  折扣金额，华为核销或者退订的时候没有该字段。
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
    * @param double|null $discountAmount 折扣金额，华为核销或者退订的时候没有该字段。
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
    * Gets accountDetails
    *  按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表3。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\BalanceTypeDeductSumV2[]|null
    */
    public function getAccountDetails()
    {
        return $this->container['accountDetails'];
    }

    /**
    * Sets accountDetails
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\BalanceTypeDeductSumV2[]|null $accountDetails 按不同账户消费类型和付费方式区分的支付总金额。 具体请参见表3。
    *
    * @return $this
    */
    public function setAccountDetails($accountDetails)
    {
        $this->container['accountDetails'] = $accountDetails;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。
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
    * @param string|null $resourceTypeCode 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
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

