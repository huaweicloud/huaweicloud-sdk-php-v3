<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrepaidUpdateOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrepaidUpdateOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoPay  **参数解释**：下单订购后，是否自动从客户的账户中支付。  **约束限制**：自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。  **取值范围**： - true：自动支付。 - false：不自动支付。  **默认取值**：不涉及
    * changeMode  **参数解释**：规格变更类型。  **约束限制**：不涉及  **取值范围**： - immediate：即时变更，规格变更立即生效。 - delay：续费变更，当前周期结束后变更为目标规格。  **默认取值**：不涉及
    * periodNum  **参数解释**：订购周期数，取值会随运营策略变化。  **约束限制**：仅在change_mode为delay时生效  **取值范围**： - period_type为month时，为[1,9] - period_type为year时，为[1,3]  **默认取值**：不涉及
    * periodType  **参数解释**：订购周期类型。  **约束限制**：仅在change_mode为delay时生效。  **取值范围**： - month：月 - year：年  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoPay' => 'bool',
            'changeMode' => 'string',
            'periodNum' => 'int',
            'periodType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoPay  **参数解释**：下单订购后，是否自动从客户的账户中支付。  **约束限制**：自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。  **取值范围**： - true：自动支付。 - false：不自动支付。  **默认取值**：不涉及
    * changeMode  **参数解释**：规格变更类型。  **约束限制**：不涉及  **取值范围**： - immediate：即时变更，规格变更立即生效。 - delay：续费变更，当前周期结束后变更为目标规格。  **默认取值**：不涉及
    * periodNum  **参数解释**：订购周期数，取值会随运营策略变化。  **约束限制**：仅在change_mode为delay时生效  **取值范围**： - period_type为month时，为[1,9] - period_type为year时，为[1,3]  **默认取值**：不涉及
    * periodType  **参数解释**：订购周期类型。  **约束限制**：仅在change_mode为delay时生效。  **取值范围**： - month：月 - year：年  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoPay' => null,
        'changeMode' => null,
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
    * autoPay  **参数解释**：下单订购后，是否自动从客户的账户中支付。  **约束限制**：自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。  **取值范围**： - true：自动支付。 - false：不自动支付。  **默认取值**：不涉及
    * changeMode  **参数解释**：规格变更类型。  **约束限制**：不涉及  **取值范围**： - immediate：即时变更，规格变更立即生效。 - delay：续费变更，当前周期结束后变更为目标规格。  **默认取值**：不涉及
    * periodNum  **参数解释**：订购周期数，取值会随运营策略变化。  **约束限制**：仅在change_mode为delay时生效  **取值范围**： - period_type为month时，为[1,9] - period_type为year时，为[1,3]  **默认取值**：不涉及
    * periodType  **参数解释**：订购周期类型。  **约束限制**：仅在change_mode为delay时生效。  **取值范围**： - month：月 - year：年  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoPay' => 'auto_pay',
            'changeMode' => 'change_mode',
            'periodNum' => 'period_num',
            'periodType' => 'period_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoPay  **参数解释**：下单订购后，是否自动从客户的账户中支付。  **约束限制**：自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。  **取值范围**： - true：自动支付。 - false：不自动支付。  **默认取值**：不涉及
    * changeMode  **参数解释**：规格变更类型。  **约束限制**：不涉及  **取值范围**： - immediate：即时变更，规格变更立即生效。 - delay：续费变更，当前周期结束后变更为目标规格。  **默认取值**：不涉及
    * periodNum  **参数解释**：订购周期数，取值会随运营策略变化。  **约束限制**：仅在change_mode为delay时生效  **取值范围**： - period_type为month时，为[1,9] - period_type为year时，为[1,3]  **默认取值**：不涉及
    * periodType  **参数解释**：订购周期类型。  **约束限制**：仅在change_mode为delay时生效。  **取值范围**： - month：月 - year：年  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'autoPay' => 'setAutoPay',
            'changeMode' => 'setChangeMode',
            'periodNum' => 'setPeriodNum',
            'periodType' => 'setPeriodType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoPay  **参数解释**：下单订购后，是否自动从客户的账户中支付。  **约束限制**：自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。  **取值范围**： - true：自动支付。 - false：不自动支付。  **默认取值**：不涉及
    * changeMode  **参数解释**：规格变更类型。  **约束限制**：不涉及  **取值范围**： - immediate：即时变更，规格变更立即生效。 - delay：续费变更，当前周期结束后变更为目标规格。  **默认取值**：不涉及
    * periodNum  **参数解释**：订购周期数，取值会随运营策略变化。  **约束限制**：仅在change_mode为delay时生效  **取值范围**： - period_type为month时，为[1,9] - period_type为year时，为[1,3]  **默认取值**：不涉及
    * periodType  **参数解释**：订购周期类型。  **约束限制**：仅在change_mode为delay时生效。  **取值范围**： - month：月 - year：年  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'autoPay' => 'getAutoPay',
            'changeMode' => 'getChangeMode',
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
    const CHANGE_MODE_IMMEDIATE = 'immediate';
    const CHANGE_MODE_DELAY = 'delay';
    const PERIOD_TYPE_MONTH = 'month';
    const PERIOD_TYPE_YEAR = 'year';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChangeModeAllowableValues()
    {
        return [
            self::CHANGE_MODE_IMMEDIATE,
            self::CHANGE_MODE_DELAY,
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
            self::PERIOD_TYPE_MONTH,
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
        $this->container['autoPay'] = isset($data['autoPay']) ? $data['autoPay'] : null;
        $this->container['changeMode'] = isset($data['changeMode']) ? $data['changeMode'] : null;
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
            $allowedValues = $this->getChangeModeAllowableValues();
                if (!is_null($this->container['changeMode']) && !in_array($this->container['changeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'changeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['changeMode']) && (mb_strlen($this->container['changeMode']) > 10)) {
                $invalidProperties[] = "invalid value for 'changeMode', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['changeMode']) && (mb_strlen($this->container['changeMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'changeMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] > 9)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
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
    * Gets autoPay
    *  **参数解释**：下单订购后，是否自动从客户的账户中支付。  **约束限制**：自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。  **取值范围**： - true：自动支付。 - false：不自动支付。  **默认取值**：不涉及
    *
    * @return bool|null
    */
    public function getAutoPay()
    {
        return $this->container['autoPay'];
    }

    /**
    * Sets autoPay
    *
    * @param bool|null $autoPay **参数解释**：下单订购后，是否自动从客户的账户中支付。  **约束限制**：自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。  **取值范围**： - true：自动支付。 - false：不自动支付。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAutoPay($autoPay)
    {
        $this->container['autoPay'] = $autoPay;
        return $this;
    }

    /**
    * Gets changeMode
    *  **参数解释**：规格变更类型。  **约束限制**：不涉及  **取值范围**： - immediate：即时变更，规格变更立即生效。 - delay：续费变更，当前周期结束后变更为目标规格。  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getChangeMode()
    {
        return $this->container['changeMode'];
    }

    /**
    * Sets changeMode
    *
    * @param string|null $changeMode **参数解释**：规格变更类型。  **约束限制**：不涉及  **取值范围**： - immediate：即时变更，规格变更立即生效。 - delay：续费变更，当前周期结束后变更为目标规格。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setChangeMode($changeMode)
    {
        $this->container['changeMode'] = $changeMode;
        return $this;
    }

    /**
    * Gets periodNum
    *  **参数解释**：订购周期数，取值会随运营策略变化。  **约束限制**：仅在change_mode为delay时生效  **取值范围**： - period_type为month时，为[1,9] - period_type为year时，为[1,3]  **默认取值**：不涉及
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
    * @param int|null $periodNum **参数解释**：订购周期数，取值会随运营策略变化。  **约束限制**：仅在change_mode为delay时生效  **取值范围**： - period_type为month时，为[1,9] - period_type为year时，为[1,3]  **默认取值**：不涉及
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
    *  **参数解释**：订购周期类型。  **约束限制**：仅在change_mode为delay时生效。  **取值范围**： - month：月 - year：年  **默认取值**：不涉及
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
    * @param string|null $periodType **参数解释**：订购周期类型。  **约束限制**：仅在change_mode为delay时生效。  **取值范围**： - month：月 - year：年  **默认取值**：不涉及
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

