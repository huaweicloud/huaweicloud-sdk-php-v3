<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSubCustomerBudgetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSubCustomerBudgetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * budgetAmount  初始预算金额。
    * usedAmount  已经使用的预算。该预算存在一定的时延和误差。
    * measureId  金额单位。 1：元
    * currency  币种。 USD：美金
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'budgetAmount' => 'double',
            'usedAmount' => 'double',
            'measureId' => 'int',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * budgetAmount  初始预算金额。
    * usedAmount  已经使用的预算。该预算存在一定的时延和误差。
    * measureId  金额单位。 1：元
    * currency  币种。 USD：美金
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'budgetAmount' => 'double',
        'usedAmount' => 'double',
        'measureId' => 'int32',
        'currency' => null
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
    * budgetAmount  初始预算金额。
    * usedAmount  已经使用的预算。该预算存在一定的时延和误差。
    * measureId  金额单位。 1：元
    * currency  币种。 USD：美金
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'budgetAmount' => 'budget_amount',
            'usedAmount' => 'used_amount',
            'measureId' => 'measure_id',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * budgetAmount  初始预算金额。
    * usedAmount  已经使用的预算。该预算存在一定的时延和误差。
    * measureId  金额单位。 1：元
    * currency  币种。 USD：美金
    *
    * @var string[]
    */
    protected static $setters = [
            'budgetAmount' => 'setBudgetAmount',
            'usedAmount' => 'setUsedAmount',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * budgetAmount  初始预算金额。
    * usedAmount  已经使用的预算。该预算存在一定的时延和误差。
    * measureId  金额单位。 1：元
    * currency  币种。 USD：美金
    *
    * @var string[]
    */
    protected static $getters = [
            'budgetAmount' => 'getBudgetAmount',
            'usedAmount' => 'getUsedAmount',
            'measureId' => 'getMeasureId',
            'currency' => 'getCurrency'
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
        $this->container['budgetAmount'] = isset($data['budgetAmount']) ? $data['budgetAmount'] : null;
        $this->container['usedAmount'] = isset($data['usedAmount']) ? $data['usedAmount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
    * Gets budgetAmount
    *  初始预算金额。
    *
    * @return double|null
    */
    public function getBudgetAmount()
    {
        return $this->container['budgetAmount'];
    }

    /**
    * Sets budgetAmount
    *
    * @param double|null $budgetAmount 初始预算金额。
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
    *  已经使用的预算。该预算存在一定的时延和误差。
    *
    * @return double|null
    */
    public function getUsedAmount()
    {
        return $this->container['usedAmount'];
    }

    /**
    * Sets usedAmount
    *
    * @param double|null $usedAmount 已经使用的预算。该预算存在一定的时延和误差。
    *
    * @return $this
    */
    public function setUsedAmount($usedAmount)
    {
        $this->container['usedAmount'] = $usedAmount;
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
    * Gets currency
    *  币种。 USD：美金
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
    * @param string|null $currency 币种。 USD：美金
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
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

