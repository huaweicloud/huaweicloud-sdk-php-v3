<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrepaidCreateOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrepaidCreateOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodType  订购周期类型，当前支持包月和包年： month：月； year：年；
    * periodNum  订购周期数，取值会随运营策略变化。 period_type为month时，为[1,9]， period_type为year时，为[1,3]
    * autoRenew  是否自动续订； true：自动续订 false：不自动续订
    * autoPay  下单订购后，是否自动从客户的账户中支付； true：自动支付； false：不自动支付。 自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodType' => 'string',
            'periodNum' => 'int',
            'autoRenew' => 'bool',
            'autoPay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodType  订购周期类型，当前支持包月和包年： month：月； year：年；
    * periodNum  订购周期数，取值会随运营策略变化。 period_type为month时，为[1,9]， period_type为year时，为[1,3]
    * autoRenew  是否自动续订； true：自动续订 false：不自动续订
    * autoPay  下单订购后，是否自动从客户的账户中支付； true：自动支付； false：不自动支付。 自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodType' => null,
        'periodNum' => 'int32',
        'autoRenew' => null,
        'autoPay' => null
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
    * periodType  订购周期类型，当前支持包月和包年： month：月； year：年；
    * periodNum  订购周期数，取值会随运营策略变化。 period_type为month时，为[1,9]， period_type为year时，为[1,3]
    * autoRenew  是否自动续订； true：自动续订 false：不自动续订
    * autoPay  下单订购后，是否自动从客户的账户中支付； true：自动支付； false：不自动支付。 自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'autoRenew' => 'auto_renew',
            'autoPay' => 'auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodType  订购周期类型，当前支持包月和包年： month：月； year：年；
    * periodNum  订购周期数，取值会随运营策略变化。 period_type为month时，为[1,9]， period_type为year时，为[1,3]
    * autoRenew  是否自动续订； true：自动续订 false：不自动续订
    * autoPay  下单订购后，是否自动从客户的账户中支付； true：自动支付； false：不自动支付。 自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。
    *
    * @var string[]
    */
    protected static $setters = [
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'autoRenew' => 'setAutoRenew',
            'autoPay' => 'setAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodType  订购周期类型，当前支持包月和包年： month：月； year：年；
    * periodNum  订购周期数，取值会随运营策略变化。 period_type为month时，为[1,9]， period_type为year时，为[1,3]
    * autoRenew  是否自动续订； true：自动续订 false：不自动续订
    * autoPay  下单订购后，是否自动从客户的账户中支付； true：自动支付； false：不自动支付。 自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。
    *
    * @var string[]
    */
    protected static $getters = [
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'autoRenew' => 'getAutoRenew',
            'autoPay' => 'getAutoPay'
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
    const PERIOD_TYPE_MONTH = 'month';
    const PERIOD_TYPE_YEAR = 'year';
    

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
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : 1;
        $this->container['autoRenew'] = isset($data['autoRenew']) ? $data['autoRenew'] : false;
        $this->container['autoPay'] = isset($data['autoPay']) ? $data['autoPay'] : false;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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

            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] > 9)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 9.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
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
    *  订购周期类型，当前支持包月和包年： month：月； year：年；
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
    * @param string $periodType 订购周期类型，当前支持包月和包年： month：月； year：年；
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
    *  订购周期数，取值会随运营策略变化。 period_type为month时，为[1,9]， period_type为year时，为[1,3]
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
    * @param int|null $periodNum 订购周期数，取值会随运营策略变化。 period_type为month时，为[1,9]， period_type为year时，为[1,3]
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets autoRenew
    *  是否自动续订； true：自动续订 false：不自动续订
    *
    * @return bool|null
    */
    public function getAutoRenew()
    {
        return $this->container['autoRenew'];
    }

    /**
    * Sets autoRenew
    *
    * @param bool|null $autoRenew 是否自动续订； true：自动续订 false：不自动续订
    *
    * @return $this
    */
    public function setAutoRenew($autoRenew)
    {
        $this->container['autoRenew'] = $autoRenew;
        return $this;
    }

    /**
    * Gets autoPay
    *  下单订购后，是否自动从客户的账户中支付； true：自动支付； false：不自动支付。 自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。
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
    * @param bool|null $autoPay 下单订购后，是否自动从客户的账户中支付； true：自动支付； false：不自动支付。 自动支付时，只能使用账户的现金支付；如果要使用代金券，请选择不自动支付，然后在用户费用中心，选择代金券支付。
    *
    * @return $this
    */
    public function setAutoPay($autoPay)
    {
        $this->container['autoPay'] = $autoPay;
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

