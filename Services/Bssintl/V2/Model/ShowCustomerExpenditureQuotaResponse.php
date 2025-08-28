<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCustomerExpenditureQuotaResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCustomerExpenditureQuotaResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * grantingAmount  |参数名称：消费配额| |参数约束及描述：当前授予额度，消费配额。|
    * grantingAmountUsed  |参数名称：已使用消费配额| |参数约束及描述：已使用消费配额。|
    * percentageGrantingAmountUsed  |参数名称：已使用消费配额占比| |参数约束及描述：已使用消费配额占比。|
    * measureId  |参数名称：金额的度量单位。| |参数约束及描述：1：元|
    * currency  |参数名称：币种。| |参数约束及描述：货币单位，USD：美元。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'grantingAmount' => 'float',
            'grantingAmountUsed' => 'float',
            'percentageGrantingAmountUsed' => 'float',
            'measureId' => 'int',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * grantingAmount  |参数名称：消费配额| |参数约束及描述：当前授予额度，消费配额。|
    * grantingAmountUsed  |参数名称：已使用消费配额| |参数约束及描述：已使用消费配额。|
    * percentageGrantingAmountUsed  |参数名称：已使用消费配额占比| |参数约束及描述：已使用消费配额占比。|
    * measureId  |参数名称：金额的度量单位。| |参数约束及描述：1：元|
    * currency  |参数名称：币种。| |参数约束及描述：货币单位，USD：美元。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'grantingAmount' => 'bigdecimal',
        'grantingAmountUsed' => 'bigdecimal',
        'percentageGrantingAmountUsed' => 'bigdecimal',
        'measureId' => null,
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
    * grantingAmount  |参数名称：消费配额| |参数约束及描述：当前授予额度，消费配额。|
    * grantingAmountUsed  |参数名称：已使用消费配额| |参数约束及描述：已使用消费配额。|
    * percentageGrantingAmountUsed  |参数名称：已使用消费配额占比| |参数约束及描述：已使用消费配额占比。|
    * measureId  |参数名称：金额的度量单位。| |参数约束及描述：1：元|
    * currency  |参数名称：币种。| |参数约束及描述：货币单位，USD：美元。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'grantingAmount' => 'granting_amount',
            'grantingAmountUsed' => 'granting_amount_used',
            'percentageGrantingAmountUsed' => 'percentage_granting_amount_used',
            'measureId' => 'measure_id',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * grantingAmount  |参数名称：消费配额| |参数约束及描述：当前授予额度，消费配额。|
    * grantingAmountUsed  |参数名称：已使用消费配额| |参数约束及描述：已使用消费配额。|
    * percentageGrantingAmountUsed  |参数名称：已使用消费配额占比| |参数约束及描述：已使用消费配额占比。|
    * measureId  |参数名称：金额的度量单位。| |参数约束及描述：1：元|
    * currency  |参数名称：币种。| |参数约束及描述：货币单位，USD：美元。|
    *
    * @var string[]
    */
    protected static $setters = [
            'grantingAmount' => 'setGrantingAmount',
            'grantingAmountUsed' => 'setGrantingAmountUsed',
            'percentageGrantingAmountUsed' => 'setPercentageGrantingAmountUsed',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * grantingAmount  |参数名称：消费配额| |参数约束及描述：当前授予额度，消费配额。|
    * grantingAmountUsed  |参数名称：已使用消费配额| |参数约束及描述：已使用消费配额。|
    * percentageGrantingAmountUsed  |参数名称：已使用消费配额占比| |参数约束及描述：已使用消费配额占比。|
    * measureId  |参数名称：金额的度量单位。| |参数约束及描述：1：元|
    * currency  |参数名称：币种。| |参数约束及描述：货币单位，USD：美元。|
    *
    * @var string[]
    */
    protected static $getters = [
            'grantingAmount' => 'getGrantingAmount',
            'grantingAmountUsed' => 'getGrantingAmountUsed',
            'percentageGrantingAmountUsed' => 'getPercentageGrantingAmountUsed',
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
        $this->container['grantingAmount'] = isset($data['grantingAmount']) ? $data['grantingAmount'] : null;
        $this->container['grantingAmountUsed'] = isset($data['grantingAmountUsed']) ? $data['grantingAmountUsed'] : null;
        $this->container['percentageGrantingAmountUsed'] = isset($data['percentageGrantingAmountUsed']) ? $data['percentageGrantingAmountUsed'] : null;
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
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 0)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 0.";
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
    * Gets grantingAmount
    *  |参数名称：消费配额| |参数约束及描述：当前授予额度，消费配额。|
    *
    * @return float|null
    */
    public function getGrantingAmount()
    {
        return $this->container['grantingAmount'];
    }

    /**
    * Sets grantingAmount
    *
    * @param float|null $grantingAmount |参数名称：消费配额| |参数约束及描述：当前授予额度，消费配额。|
    *
    * @return $this
    */
    public function setGrantingAmount($grantingAmount)
    {
        $this->container['grantingAmount'] = $grantingAmount;
        return $this;
    }

    /**
    * Gets grantingAmountUsed
    *  |参数名称：已使用消费配额| |参数约束及描述：已使用消费配额。|
    *
    * @return float|null
    */
    public function getGrantingAmountUsed()
    {
        return $this->container['grantingAmountUsed'];
    }

    /**
    * Sets grantingAmountUsed
    *
    * @param float|null $grantingAmountUsed |参数名称：已使用消费配额| |参数约束及描述：已使用消费配额。|
    *
    * @return $this
    */
    public function setGrantingAmountUsed($grantingAmountUsed)
    {
        $this->container['grantingAmountUsed'] = $grantingAmountUsed;
        return $this;
    }

    /**
    * Gets percentageGrantingAmountUsed
    *  |参数名称：已使用消费配额占比| |参数约束及描述：已使用消费配额占比。|
    *
    * @return float|null
    */
    public function getPercentageGrantingAmountUsed()
    {
        return $this->container['percentageGrantingAmountUsed'];
    }

    /**
    * Sets percentageGrantingAmountUsed
    *
    * @param float|null $percentageGrantingAmountUsed |参数名称：已使用消费配额占比| |参数约束及描述：已使用消费配额占比。|
    *
    * @return $this
    */
    public function setPercentageGrantingAmountUsed($percentageGrantingAmountUsed)
    {
        $this->container['percentageGrantingAmountUsed'] = $percentageGrantingAmountUsed;
        return $this;
    }

    /**
    * Gets measureId
    *  |参数名称：金额的度量单位。| |参数约束及描述：1：元|
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
    * @param int|null $measureId |参数名称：金额的度量单位。| |参数约束及描述：1：元|
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
    *  |参数名称：币种。| |参数约束及描述：货币单位，USD：美元。|
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
    * @param string|null $currency |参数名称：币种。| |参数约束及描述：货币单位，USD：美元。|
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

