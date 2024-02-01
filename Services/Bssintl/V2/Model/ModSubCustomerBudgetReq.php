<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModSubCustomerBudgetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModSubCustomerBudgetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * budgetAmount  调整的目标金额。 单位：元。精确至小数点后2位。
    * cancelPartnerFrozen  是否在设置客户预算的同时解除账号冻结： 0：否1：是 默认值为0。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算 ，此参数不携带或携带值为null时，默认值为MONTHLY。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'budgetAmount' => 'double',
            'cancelPartnerFrozen' => 'string',
            'indirectPartnerId' => 'string',
            'budgetType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * budgetAmount  调整的目标金额。 单位：元。精确至小数点后2位。
    * cancelPartnerFrozen  是否在设置客户预算的同时解除账号冻结： 0：否1：是 默认值为0。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算 ，此参数不携带或携带值为null时，默认值为MONTHLY。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'budgetAmount' => 'double',
        'cancelPartnerFrozen' => null,
        'indirectPartnerId' => null,
        'budgetType' => null
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
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * budgetAmount  调整的目标金额。 单位：元。精确至小数点后2位。
    * cancelPartnerFrozen  是否在设置客户预算的同时解除账号冻结： 0：否1：是 默认值为0。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算 ，此参数不携带或携带值为null时，默认值为MONTHLY。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'budgetAmount' => 'budget_amount',
            'cancelPartnerFrozen' => 'cancel_partner_frozen',
            'indirectPartnerId' => 'indirect_partner_id',
            'budgetType' => 'budget_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * budgetAmount  调整的目标金额。 单位：元。精确至小数点后2位。
    * cancelPartnerFrozen  是否在设置客户预算的同时解除账号冻结： 0：否1：是 默认值为0。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算 ，此参数不携带或携带值为null时，默认值为MONTHLY。|
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'budgetAmount' => 'setBudgetAmount',
            'cancelPartnerFrozen' => 'setCancelPartnerFrozen',
            'indirectPartnerId' => 'setIndirectPartnerId',
            'budgetType' => 'setBudgetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    * budgetAmount  调整的目标金额。 单位：元。精确至小数点后2位。
    * cancelPartnerFrozen  是否在设置客户预算的同时解除账号冻结： 0：否1：是 默认值为0。
    * indirectPartnerId  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算 ，此参数不携带或携带值为null时，默认值为MONTHLY。|
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'budgetAmount' => 'getBudgetAmount',
            'cancelPartnerFrozen' => 'getCancelPartnerFrozen',
            'indirectPartnerId' => 'getIndirectPartnerId',
            'budgetType' => 'getBudgetType'
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
    const BUDGET_TYPE_MONTHLY = 'MONTHLY';
    const BUDGET_TYPE_PACKAGE = 'PACKAGE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBudgetTypeAllowableValues()
    {
        return [
            self::BUDGET_TYPE_MONTHLY,
            self::BUDGET_TYPE_PACKAGE,
        ];
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
        $this->container['budgetAmount'] = isset($data['budgetAmount']) ? $data['budgetAmount'] : null;
        $this->container['cancelPartnerFrozen'] = isset($data['cancelPartnerFrozen']) ? $data['cancelPartnerFrozen'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
        $this->container['budgetType'] = isset($data['budgetType']) ? $data['budgetType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
            if ((mb_strlen($this->container['customerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['customerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['budgetAmount'] === null) {
            $invalidProperties[] = "'budgetAmount' can't be null";
        }
            if (($this->container['budgetAmount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'budgetAmount', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['budgetAmount'] < 0)) {
                $invalidProperties[] = "invalid value for 'budgetAmount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cancelPartnerFrozen']) && (mb_strlen($this->container['cancelPartnerFrozen']) > 1)) {
                $invalidProperties[] = "invalid value for 'cancelPartnerFrozen', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['cancelPartnerFrozen']) && (mb_strlen($this->container['cancelPartnerFrozen']) < 0)) {
                $invalidProperties[] = "invalid value for 'cancelPartnerFrozen', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getBudgetTypeAllowableValues();
                if (!is_null($this->container['budgetType']) && !in_array($this->container['budgetType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'budgetType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets customerId
    *  客户账号ID。您可以调用查询客户列表接口获取customer_id。
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId 客户账号ID。您可以调用查询客户列表接口获取customer_id。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets budgetAmount
    *  调整的目标金额。 单位：元。精确至小数点后2位。
    *
    * @return double
    */
    public function getBudgetAmount()
    {
        return $this->container['budgetAmount'];
    }

    /**
    * Sets budgetAmount
    *
    * @param double $budgetAmount 调整的目标金额。 单位：元。精确至小数点后2位。
    *
    * @return $this
    */
    public function setBudgetAmount($budgetAmount)
    {
        $this->container['budgetAmount'] = $budgetAmount;
        return $this;
    }

    /**
    * Gets cancelPartnerFrozen
    *  是否在设置客户预算的同时解除账号冻结： 0：否1：是 默认值为0。
    *
    * @return string|null
    */
    public function getCancelPartnerFrozen()
    {
        return $this->container['cancelPartnerFrozen'];
    }

    /**
    * Sets cancelPartnerFrozen
    *
    * @param string|null $cancelPartnerFrozen 是否在设置客户预算的同时解除账号冻结： 0：否1：是 默认值为0。
    *
    * @return $this
    */
    public function setCancelPartnerFrozen($cancelPartnerFrozen)
    {
        $this->container['cancelPartnerFrozen'] = $cancelPartnerFrozen;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId 云经销商ID。获取方法请参见查询云经销商列表。如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets budgetType
    *  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算 ，此参数不携带或携带值为null时，默认值为MONTHLY。|
    *
    * @return string|null
    */
    public function getBudgetType()
    {
        return $this->container['budgetType'];
    }

    /**
    * Sets budgetType
    *
    * @param string|null $budgetType |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算 ，此参数不携带或携带值为null时，默认值为MONTHLY。|
    *
    * @return $this
    */
    public function setBudgetType($budgetType)
    {
        $this->container['budgetType'] = $budgetType;
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

