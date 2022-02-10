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
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * budgetAmount  |参数名称：调整的目标金额，可精确至小数点后面2位。| |参数的约束及描述：调整的目标金额，可精确至小数点后面2位。|
    * cancelPartnerFrozen  |参数名称：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。| |参数约束及描述：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'budgetAmount' => 'float',
            'cancelPartnerFrozen' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * budgetAmount  |参数名称：调整的目标金额，可精确至小数点后面2位。| |参数的约束及描述：调整的目标金额，可精确至小数点后面2位。|
    * cancelPartnerFrozen  |参数名称：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。| |参数约束及描述：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'budgetAmount' => 'bigdecimal',
        'cancelPartnerFrozen' => null
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
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * budgetAmount  |参数名称：调整的目标金额，可精确至小数点后面2位。| |参数的约束及描述：调整的目标金额，可精确至小数点后面2位。|
    * cancelPartnerFrozen  |参数名称：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。| |参数约束及描述：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'budgetAmount' => 'budget_amount',
            'cancelPartnerFrozen' => 'cancel_partner_frozen'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * budgetAmount  |参数名称：调整的目标金额，可精确至小数点后面2位。| |参数的约束及描述：调整的目标金额，可精确至小数点后面2位。|
    * cancelPartnerFrozen  |参数名称：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。| |参数约束及描述：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。|
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'budgetAmount' => 'setBudgetAmount',
            'cancelPartnerFrozen' => 'setCancelPartnerFrozen'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * budgetAmount  |参数名称：调整的目标金额，可精确至小数点后面2位。| |参数的约束及描述：调整的目标金额，可精确至小数点后面2位。|
    * cancelPartnerFrozen  |参数名称：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。| |参数约束及描述：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。|
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'budgetAmount' => 'getBudgetAmount',
            'cancelPartnerFrozen' => 'getCancelPartnerFrozen'
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
        $this->container['budgetAmount'] = isset($data['budgetAmount']) ? $data['budgetAmount'] : null;
        $this->container['cancelPartnerFrozen'] = isset($data['cancelPartnerFrozen']) ? $data['cancelPartnerFrozen'] : null;
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
    *  |参数名称：客户ID。| |参数约束及描述：客户ID。|
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
    * @param string $customerId |参数名称：客户ID。| |参数约束及描述：客户ID。|
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
    *  |参数名称：调整的目标金额，可精确至小数点后面2位。| |参数的约束及描述：调整的目标金额，可精确至小数点后面2位。|
    *
    * @return float
    */
    public function getBudgetAmount()
    {
        return $this->container['budgetAmount'];
    }

    /**
    * Sets budgetAmount
    *
    * @param float $budgetAmount |参数名称：调整的目标金额，可精确至小数点后面2位。| |参数的约束及描述：调整的目标金额，可精确至小数点后面2位。|
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
    *  |参数名称：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。| |参数约束及描述：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。|
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
    * @param string|null $cancelPartnerFrozen |参数名称：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。| |参数约束及描述：是否在设置客户预算的同时解除账号冻结：0：否；1：是。默认为否。|
    *
    * @return $this
    */
    public function setCancelPartnerFrozen($cancelPartnerFrozen)
    {
        $this->container['cancelPartnerFrozen'] = $cancelPartnerFrozen;
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

