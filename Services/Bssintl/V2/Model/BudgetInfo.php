<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BudgetInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BudgetInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  |参数名称：客户账号ID||参数的约束及描述：必填参数，范围限制:1-64|
    * budgetAmount  |参数名称：初始预算金额。| |参数的约束及描述：非必填，初始预算金额。|
    * usedAmount  |参数名称：已经使用的预算。| |参数的约束及描述：已经使用的预算。非必填，该预算存在一定的时延和误差。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'budgetAmount' => 'float',
            'usedAmount' => 'float',
            'budgetType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  |参数名称：客户账号ID||参数的约束及描述：必填参数，范围限制:1-64|
    * budgetAmount  |参数名称：初始预算金额。| |参数的约束及描述：非必填，初始预算金额。|
    * usedAmount  |参数名称：已经使用的预算。| |参数的约束及描述：已经使用的预算。非必填，该预算存在一定的时延和误差。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'budgetAmount' => 'bigdecimal',
        'usedAmount' => 'bigdecimal',
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
    * customerId  |参数名称：客户账号ID||参数的约束及描述：必填参数，范围限制:1-64|
    * budgetAmount  |参数名称：初始预算金额。| |参数的约束及描述：非必填，初始预算金额。|
    * usedAmount  |参数名称：已经使用的预算。| |参数的约束及描述：已经使用的预算。非必填，该预算存在一定的时延和误差。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'budgetAmount' => 'budget_amount',
            'usedAmount' => 'used_amount',
            'budgetType' => 'budget_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  |参数名称：客户账号ID||参数的约束及描述：必填参数，范围限制:1-64|
    * budgetAmount  |参数名称：初始预算金额。| |参数的约束及描述：非必填，初始预算金额。|
    * usedAmount  |参数名称：已经使用的预算。| |参数的约束及描述：已经使用的预算。非必填，该预算存在一定的时延和误差。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算|
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'budgetAmount' => 'setBudgetAmount',
            'usedAmount' => 'setUsedAmount',
            'budgetType' => 'setBudgetType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  |参数名称：客户账号ID||参数的约束及描述：必填参数，范围限制:1-64|
    * budgetAmount  |参数名称：初始预算金额。| |参数的约束及描述：非必填，初始预算金额。|
    * usedAmount  |参数名称：已经使用的预算。| |参数的约束及描述：已经使用的预算。非必填，该预算存在一定的时延和误差。|
    * budgetType  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算|
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'budgetAmount' => 'getBudgetAmount',
            'usedAmount' => 'getUsedAmount',
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
        $this->container['usedAmount'] = isset($data['usedAmount']) ? $data['usedAmount'] : null;
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
            if (!is_null($this->container['customerId']) && (mb_strlen($this->container['customerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['customerId']) && (mb_strlen($this->container['customerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 1.";
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
    *  |参数名称：客户账号ID||参数的约束及描述：必填参数，范围限制:1-64|
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
    * @param string|null $customerId |参数名称：客户账号ID||参数的约束及描述：必填参数，范围限制:1-64|
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
    *  |参数名称：初始预算金额。| |参数的约束及描述：非必填，初始预算金额。|
    *
    * @return float|null
    */
    public function getBudgetAmount()
    {
        return $this->container['budgetAmount'];
    }

    /**
    * Sets budgetAmount
    *
    * @param float|null $budgetAmount |参数名称：初始预算金额。| |参数的约束及描述：非必填，初始预算金额。|
    *
    * @return $this
    */
    public function setBudgetAmount($budgetAmount)
    {
        $this->container['budgetAmount'] = $budgetAmount;
        return $this;
    }

    /**
    * Gets usedAmount
    *  |参数名称：已经使用的预算。| |参数的约束及描述：已经使用的预算。非必填，该预算存在一定的时延和误差。|
    *
    * @return float|null
    */
    public function getUsedAmount()
    {
        return $this->container['usedAmount'];
    }

    /**
    * Sets usedAmount
    *
    * @param float|null $usedAmount |参数名称：已经使用的预算。| |参数的约束及描述：已经使用的预算。非必填，该预算存在一定的时延和误差。|
    *
    * @return $this
    */
    public function setUsedAmount($usedAmount)
    {
        $this->container['usedAmount'] = $usedAmount;
        return $this;
    }

    /**
    * Gets budgetType
    *  |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算|
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
    * @param string|null $budgetType |参数名称：预算模式| |参数的约束及描述：MONTHLY 月度预算 PACKAGE 一次性预算|
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

