<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodChargeInfoOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeriodChargeInfoOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodType  **参数解释**: 周期单位类型。 **约束限制**: 不涉及。 **取值范围**: - year：包年。 - month：包月。  **默认取值**: 不涉及。
    * periodNum  **参数解释**: 周期单位数量。 **约束限制**: 不涉及。 **取值范围**: - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。  当传入浮点型时，会自动截取为整型。 **默认取值**: 不涉及。
    * isAutoRenew  **参数解释**: 是否自动续费。 **约束限制**: 不涉及。 **取值范围**: - true：自动续订。 - false：不自动续订。  **默认取值**: false
    * isAutoPay  **参数解释**: 是否自动支付。 **约束限制**: 不涉及。 **取值范围**: - true：自动支付。 - false：手动支付。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodType' => 'string',
            'periodNum' => 'int',
            'isAutoRenew' => 'bool',
            'isAutoPay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodType  **参数解释**: 周期单位类型。 **约束限制**: 不涉及。 **取值范围**: - year：包年。 - month：包月。  **默认取值**: 不涉及。
    * periodNum  **参数解释**: 周期单位数量。 **约束限制**: 不涉及。 **取值范围**: - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。  当传入浮点型时，会自动截取为整型。 **默认取值**: 不涉及。
    * isAutoRenew  **参数解释**: 是否自动续费。 **约束限制**: 不涉及。 **取值范围**: - true：自动续订。 - false：不自动续订。  **默认取值**: false
    * isAutoPay  **参数解释**: 是否自动支付。 **约束限制**: 不涉及。 **取值范围**: - true：自动支付。 - false：手动支付。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodType' => null,
        'periodNum' => 'int32',
        'isAutoRenew' => null,
        'isAutoPay' => null
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
    * periodType  **参数解释**: 周期单位类型。 **约束限制**: 不涉及。 **取值范围**: - year：包年。 - month：包月。  **默认取值**: 不涉及。
    * periodNum  **参数解释**: 周期单位数量。 **约束限制**: 不涉及。 **取值范围**: - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。  当传入浮点型时，会自动截取为整型。 **默认取值**: 不涉及。
    * isAutoRenew  **参数解释**: 是否自动续费。 **约束限制**: 不涉及。 **取值范围**: - true：自动续订。 - false：不自动续订。  **默认取值**: false
    * isAutoPay  **参数解释**: 是否自动支付。 **约束限制**: 不涉及。 **取值范围**: - true：自动支付。 - false：手动支付。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodType  **参数解释**: 周期单位类型。 **约束限制**: 不涉及。 **取值范围**: - year：包年。 - month：包月。  **默认取值**: 不涉及。
    * periodNum  **参数解释**: 周期单位数量。 **约束限制**: 不涉及。 **取值范围**: - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。  当传入浮点型时，会自动截取为整型。 **默认取值**: 不涉及。
    * isAutoRenew  **参数解释**: 是否自动续费。 **约束限制**: 不涉及。 **取值范围**: - true：自动续订。 - false：不自动续订。  **默认取值**: false
    * isAutoPay  **参数解释**: 是否自动支付。 **约束限制**: 不涉及。 **取值范围**: - true：自动支付。 - false：手动支付。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $setters = [
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodType  **参数解释**: 周期单位类型。 **约束限制**: 不涉及。 **取值范围**: - year：包年。 - month：包月。  **默认取值**: 不涉及。
    * periodNum  **参数解释**: 周期单位数量。 **约束限制**: 不涉及。 **取值范围**: - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。  当传入浮点型时，会自动截取为整型。 **默认取值**: 不涉及。
    * isAutoRenew  **参数解释**: 是否自动续费。 **约束限制**: 不涉及。 **取值范围**: - true：自动续订。 - false：不自动续订。  **默认取值**: false
    * isAutoPay  **参数解释**: 是否自动支付。 **约束限制**: 不涉及。 **取值范围**: - true：自动支付。 - false：手动支付。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $getters = [
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'isAutoRenew' => 'getIsAutoRenew',
            'isAutoPay' => 'getIsAutoPay'
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
    const PERIOD_TYPE_YEAR = 'year';
    const PERIOD_TYPE_MONTH = 'month';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_YEAR,
            self::PERIOD_TYPE_MONTH,
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
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
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
    * Gets periodType
    *  **参数解释**: 周期单位类型。 **约束限制**: 不涉及。 **取值范围**: - year：包年。 - month：包月。  **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string|null $periodType **参数解释**: 周期单位类型。 **约束限制**: 不涉及。 **取值范围**: - year：包年。 - month：包月。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  **参数解释**: 周期单位数量。 **约束限制**: 不涉及。 **取值范围**: - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。  当传入浮点型时，会自动截取为整型。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int|null $periodNum **参数解释**: 周期单位数量。 **约束限制**: 不涉及。 **取值范围**: - 当“period_type”为“month”时，取值为1~9。 - 当“period_type”为“year”时，取值为1~3。  当传入浮点型时，会自动截取为整型。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  **参数解释**: 是否自动续费。 **约束限制**: 不涉及。 **取值范围**: - true：自动续订。 - false：不自动续订。  **默认取值**: false
    *
    * @return bool|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param bool|null $isAutoRenew **参数解释**: 是否自动续费。 **约束限制**: 不涉及。 **取值范围**: - true：自动续订。 - false：不自动续订。  **默认取值**: false
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  **参数解释**: 是否自动支付。 **约束限制**: 不涉及。 **取值范围**: - true：自动支付。 - false：手动支付。  **默认取值**: false
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay **参数解释**: 是否自动支付。 **约束限制**: 不涉及。 **取值范围**: - true：自动支付。 - false：手动支付。  **默认取值**: false
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

