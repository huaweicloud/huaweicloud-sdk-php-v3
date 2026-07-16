<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChargingInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChargingInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  **参数解释**：付费类型。表示服务器的计费模式。 **约束限制**：不涉及。 **取值范围**： - COMMON：同时支持包周期和按需 - POST_PAID：后付费 - PRE_PAID：预付费 **默认取值**：不涉及。
    * isAutoPay  **参数解释**：是否自动支付。表示是否开启自动支付功能。 **约束限制**：不涉及。 **取值范围**： - true：自动支付 - false：不自动支付 **默认取值**：不涉及。
    * isAutoRenew  **参数解释**：是否自动续订。表示是否开启自动续订功能。 **约束限制**：不涉及。 **取值范围**： - true：自动续订 - false：不自动续订 **默认取值**：不涉及。
    * periodNum  **参数解释**：订购周期数量。表示订购周期的数量。 **约束限制**：不涉及。 **取值范围**：1 - 11 **默认取值**：不涉及。
    * periodType  **参数解释**：订购周期类型。表示订购周期的时间单位。 **约束限制**：不涉及。 **取值范围**： - ABSOLUTE - DAY：天 - HOUR：小时 - MONTH：月 - WEEK：周 - YEAR：年 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'string',
            'isAutoPay' => 'bool',
            'isAutoRenew' => 'bool',
            'periodNum' => 'int',
            'periodType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  **参数解释**：付费类型。表示服务器的计费模式。 **约束限制**：不涉及。 **取值范围**： - COMMON：同时支持包周期和按需 - POST_PAID：后付费 - PRE_PAID：预付费 **默认取值**：不涉及。
    * isAutoPay  **参数解释**：是否自动支付。表示是否开启自动支付功能。 **约束限制**：不涉及。 **取值范围**： - true：自动支付 - false：不自动支付 **默认取值**：不涉及。
    * isAutoRenew  **参数解释**：是否自动续订。表示是否开启自动续订功能。 **约束限制**：不涉及。 **取值范围**： - true：自动续订 - false：不自动续订 **默认取值**：不涉及。
    * periodNum  **参数解释**：订购周期数量。表示订购周期的数量。 **约束限制**：不涉及。 **取值范围**：1 - 11 **默认取值**：不涉及。
    * periodType  **参数解释**：订购周期类型。表示订购周期的时间单位。 **约束限制**：不涉及。 **取值范围**： - ABSOLUTE - DAY：天 - HOUR：小时 - MONTH：月 - WEEK：周 - YEAR：年 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => null,
        'isAutoPay' => null,
        'isAutoRenew' => null,
        'periodNum' => 'int32',
        'periodType' => null
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
    * chargingMode  **参数解释**：付费类型。表示服务器的计费模式。 **约束限制**：不涉及。 **取值范围**： - COMMON：同时支持包周期和按需 - POST_PAID：后付费 - PRE_PAID：预付费 **默认取值**：不涉及。
    * isAutoPay  **参数解释**：是否自动支付。表示是否开启自动支付功能。 **约束限制**：不涉及。 **取值范围**： - true：自动支付 - false：不自动支付 **默认取值**：不涉及。
    * isAutoRenew  **参数解释**：是否自动续订。表示是否开启自动续订功能。 **约束限制**：不涉及。 **取值范围**： - true：自动续订 - false：不自动续订 **默认取值**：不涉及。
    * periodNum  **参数解释**：订购周期数量。表示订购周期的数量。 **约束限制**：不涉及。 **取值范围**：1 - 11 **默认取值**：不涉及。
    * periodType  **参数解释**：订购周期类型。表示订购周期的时间单位。 **约束限制**：不涉及。 **取值范围**： - ABSOLUTE - DAY：天 - HOUR：小时 - MONTH：月 - WEEK：周 - YEAR：年 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'charging_mode',
            'isAutoPay' => 'is_auto_pay',
            'isAutoRenew' => 'is_auto_renew',
            'periodNum' => 'period_num',
            'periodType' => 'period_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  **参数解释**：付费类型。表示服务器的计费模式。 **约束限制**：不涉及。 **取值范围**： - COMMON：同时支持包周期和按需 - POST_PAID：后付费 - PRE_PAID：预付费 **默认取值**：不涉及。
    * isAutoPay  **参数解释**：是否自动支付。表示是否开启自动支付功能。 **约束限制**：不涉及。 **取值范围**： - true：自动支付 - false：不自动支付 **默认取值**：不涉及。
    * isAutoRenew  **参数解释**：是否自动续订。表示是否开启自动续订功能。 **约束限制**：不涉及。 **取值范围**： - true：自动续订 - false：不自动续订 **默认取值**：不涉及。
    * periodNum  **参数解释**：订购周期数量。表示订购周期的数量。 **约束限制**：不涉及。 **取值范围**：1 - 11 **默认取值**：不涉及。
    * periodType  **参数解释**：订购周期类型。表示订购周期的时间单位。 **约束限制**：不涉及。 **取值范围**： - ABSOLUTE - DAY：天 - HOUR：小时 - MONTH：月 - WEEK：周 - YEAR：年 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'isAutoPay' => 'setIsAutoPay',
            'isAutoRenew' => 'setIsAutoRenew',
            'periodNum' => 'setPeriodNum',
            'periodType' => 'setPeriodType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  **参数解释**：付费类型。表示服务器的计费模式。 **约束限制**：不涉及。 **取值范围**： - COMMON：同时支持包周期和按需 - POST_PAID：后付费 - PRE_PAID：预付费 **默认取值**：不涉及。
    * isAutoPay  **参数解释**：是否自动支付。表示是否开启自动支付功能。 **约束限制**：不涉及。 **取值范围**： - true：自动支付 - false：不自动支付 **默认取值**：不涉及。
    * isAutoRenew  **参数解释**：是否自动续订。表示是否开启自动续订功能。 **约束限制**：不涉及。 **取值范围**： - true：自动续订 - false：不自动续订 **默认取值**：不涉及。
    * periodNum  **参数解释**：订购周期数量。表示订购周期的数量。 **约束限制**：不涉及。 **取值范围**：1 - 11 **默认取值**：不涉及。
    * periodType  **参数解释**：订购周期类型。表示订购周期的时间单位。 **约束限制**：不涉及。 **取值范围**： - ABSOLUTE - DAY：天 - HOUR：小时 - MONTH：月 - WEEK：周 - YEAR：年 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'isAutoPay' => 'getIsAutoPay',
            'isAutoRenew' => 'getIsAutoRenew',
            'periodNum' => 'getPeriodNum',
            'periodType' => 'getPeriodType'
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
    const CHARGING_MODE_COMMON = 'COMMON';
    const CHARGING_MODE_POST_PAID = 'POST_PAID';
    const CHARGING_MODE_PRE_PAID = 'PRE_PAID';
    const PERIOD_TYPE_ABSOLUTE = 'ABSOLUTE';
    const PERIOD_TYPE_DAY = 'DAY';
    const PERIOD_TYPE_HOUR = 'HOUR';
    const PERIOD_TYPE_MONTH = 'MONTH';
    const PERIOD_TYPE_WEEK = 'WEEK';
    const PERIOD_TYPE_YEAR = 'YEAR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_COMMON,
            self::CHARGING_MODE_POST_PAID,
            self::CHARGING_MODE_PRE_PAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_ABSOLUTE,
            self::PERIOD_TYPE_DAY,
            self::PERIOD_TYPE_HOUR,
            self::PERIOD_TYPE_MONTH,
            self::PERIOD_TYPE_WEEK,
            self::PERIOD_TYPE_YEAR,
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
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 11)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 11.";
            }
            if (($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
            }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
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
    * Gets chargingMode
    *  **参数解释**：付费类型。表示服务器的计费模式。 **约束限制**：不涉及。 **取值范围**： - COMMON：同时支持包周期和按需 - POST_PAID：后付费 - PRE_PAID：预付费 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string $chargingMode **参数解释**：付费类型。表示服务器的计费模式。 **约束限制**：不涉及。 **取值范围**： - COMMON：同时支持包周期和按需 - POST_PAID：后付费 - PRE_PAID：预付费 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  **参数解释**：是否自动支付。表示是否开启自动支付功能。 **约束限制**：不涉及。 **取值范围**： - true：自动支付 - false：不自动支付 **默认取值**：不涉及。
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
    * @param bool|null $isAutoPay **参数解释**：是否自动支付。表示是否开启自动支付功能。 **约束限制**：不涉及。 **取值范围**： - true：自动支付 - false：不自动支付 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  **参数解释**：是否自动续订。表示是否开启自动续订功能。 **约束限制**：不涉及。 **取值范围**： - true：自动续订 - false：不自动续订 **默认取值**：不涉及。
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
    * @param bool|null $isAutoRenew **参数解释**：是否自动续订。表示是否开启自动续订功能。 **约束限制**：不涉及。 **取值范围**： - true：自动续订 - false：不自动续订 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets periodNum
    *  **参数解释**：订购周期数量。表示订购周期的数量。 **约束限制**：不涉及。 **取值范围**：1 - 11 **默认取值**：不涉及。
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum **参数解释**：订购周期数量。表示订购周期的数量。 **约束限制**：不涉及。 **取值范围**：1 - 11 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets periodType
    *  **参数解释**：订购周期类型。表示订购周期的时间单位。 **约束限制**：不涉及。 **取值范围**： - ABSOLUTE - DAY：天 - HOUR：小时 - MONTH：月 - WEEK：周 - YEAR：年 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param string $periodType **参数解释**：订购周期类型。表示订购周期的时间单位。 **约束限制**：不涉及。 **取值范围**： - ABSOLUTE - DAY：天 - HOUR：小时 - MONTH：月 - WEEK：周 - YEAR：年 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
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

