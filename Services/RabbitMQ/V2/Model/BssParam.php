<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BssParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BssParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAutoRenew  是否自动续订。  取值范围：   - true: 自动续订。   - false: 不自动续订。  默认不自动续订。
    * chargingMode  计费模式。  功能说明：付费方式。  取值范围：   - prePaid：预付费，即包年包月；   - postPaid：后付费，即按需付费；  默认为postPaid。
    * isAutoPay  下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付。  取值范围：   - true：是（自动支付）   - false：否（需要客户手动支付）  默认为手动支付。
    * periodType  订购周期类型。  取值范围：   - month：月   - year：年  **chargingMode为prePaid时生效且为必选值。**
    * periodNum  订购周期数。  取值范围：   - periodType=month（周期类型为月）时，取值为[1，9]；  - periodType=year（周期类型为年）时，取值为[1，3]；  **chargingMode为prePaid时生效且为必选值。**
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAutoRenew' => 'bool',
            'chargingMode' => 'string',
            'isAutoPay' => 'bool',
            'periodType' => 'string',
            'periodNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAutoRenew  是否自动续订。  取值范围：   - true: 自动续订。   - false: 不自动续订。  默认不自动续订。
    * chargingMode  计费模式。  功能说明：付费方式。  取值范围：   - prePaid：预付费，即包年包月；   - postPaid：后付费，即按需付费；  默认为postPaid。
    * isAutoPay  下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付。  取值范围：   - true：是（自动支付）   - false：否（需要客户手动支付）  默认为手动支付。
    * periodType  订购周期类型。  取值范围：   - month：月   - year：年  **chargingMode为prePaid时生效且为必选值。**
    * periodNum  订购周期数。  取值范围：   - periodType=month（周期类型为月）时，取值为[1，9]；  - periodType=year（周期类型为年）时，取值为[1，3]；  **chargingMode为prePaid时生效且为必选值。**
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAutoRenew' => null,
        'chargingMode' => null,
        'isAutoPay' => null,
        'periodType' => null,
        'periodNum' => null
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
    * isAutoRenew  是否自动续订。  取值范围：   - true: 自动续订。   - false: 不自动续订。  默认不自动续订。
    * chargingMode  计费模式。  功能说明：付费方式。  取值范围：   - prePaid：预付费，即包年包月；   - postPaid：后付费，即按需付费；  默认为postPaid。
    * isAutoPay  下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付。  取值范围：   - true：是（自动支付）   - false：否（需要客户手动支付）  默认为手动支付。
    * periodType  订购周期类型。  取值范围：   - month：月   - year：年  **chargingMode为prePaid时生效且为必选值。**
    * periodNum  订购周期数。  取值范围：   - periodType=month（周期类型为月）时，取值为[1，9]；  - periodType=year（周期类型为年）时，取值为[1，3]；  **chargingMode为prePaid时生效且为必选值。**
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAutoRenew' => 'is_auto_renew',
            'chargingMode' => 'charging_mode',
            'isAutoPay' => 'is_auto_pay',
            'periodType' => 'period_type',
            'periodNum' => 'period_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAutoRenew  是否自动续订。  取值范围：   - true: 自动续订。   - false: 不自动续订。  默认不自动续订。
    * chargingMode  计费模式。  功能说明：付费方式。  取值范围：   - prePaid：预付费，即包年包月；   - postPaid：后付费，即按需付费；  默认为postPaid。
    * isAutoPay  下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付。  取值范围：   - true：是（自动支付）   - false：否（需要客户手动支付）  默认为手动支付。
    * periodType  订购周期类型。  取值范围：   - month：月   - year：年  **chargingMode为prePaid时生效且为必选值。**
    * periodNum  订购周期数。  取值范围：   - periodType=month（周期类型为月）时，取值为[1，9]；  - periodType=year（周期类型为年）时，取值为[1，3]；  **chargingMode为prePaid时生效且为必选值。**
    *
    * @var string[]
    */
    protected static $setters = [
            'isAutoRenew' => 'setIsAutoRenew',
            'chargingMode' => 'setChargingMode',
            'isAutoPay' => 'setIsAutoPay',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAutoRenew  是否自动续订。  取值范围：   - true: 自动续订。   - false: 不自动续订。  默认不自动续订。
    * chargingMode  计费模式。  功能说明：付费方式。  取值范围：   - prePaid：预付费，即包年包月；   - postPaid：后付费，即按需付费；  默认为postPaid。
    * isAutoPay  下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付。  取值范围：   - true：是（自动支付）   - false：否（需要客户手动支付）  默认为手动支付。
    * periodType  订购周期类型。  取值范围：   - month：月   - year：年  **chargingMode为prePaid时生效且为必选值。**
    * periodNum  订购周期数。  取值范围：   - periodType=month（周期类型为月）时，取值为[1，9]；  - periodType=year（周期类型为年）时，取值为[1，3]；  **chargingMode为prePaid时生效且为必选值。**
    *
    * @var string[]
    */
    protected static $getters = [
            'isAutoRenew' => 'getIsAutoRenew',
            'chargingMode' => 'getChargingMode',
            'isAutoPay' => 'getIsAutoPay',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum'
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
    const CHARGING_MODE_PRE_PAID = 'prePaid';
    const CHARGING_MODE_POST_PAID = 'postPaid';
    const PERIOD_TYPE_MONTH = 'month';
    const PERIOD_TYPE_YEAR = 'year';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PRE_PAID,
            self::CHARGING_MODE_POST_PAID,
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
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets isAutoRenew
    *  是否自动续订。  取值范围：   - true: 自动续订。   - false: 不自动续订。  默认不自动续订。
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
    * @param bool|null $isAutoRenew 是否自动续订。  取值范围：   - true: 自动续订。   - false: 不自动续订。  默认不自动续订。
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式。  功能说明：付费方式。  取值范围：   - prePaid：预付费，即包年包月；   - postPaid：后付费，即按需付费；  默认为postPaid。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 计费模式。  功能说明：付费方式。  取值范围：   - prePaid：预付费，即包年包月；   - postPaid：后付费，即按需付费；  默认为postPaid。
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
    *  下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付。  取值范围：   - true：是（自动支付）   - false：否（需要客户手动支付）  默认为手动支付。
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
    * @param bool|null $isAutoPay 下单订购后，是否自动从客户的账户中支付，而不需要客户手动去进行支付。  取值范围：   - true：是（自动支付）   - false：否（需要客户手动支付）  默认为手动支付。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
        return $this;
    }

    /**
    * Gets periodType
    *  订购周期类型。  取值范围：   - month：月   - year：年  **chargingMode为prePaid时生效且为必选值。**
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
    * @param string|null $periodType 订购周期类型。  取值范围：   - month：月   - year：年  **chargingMode为prePaid时生效且为必选值。**
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
    *  订购周期数。  取值范围：   - periodType=month（周期类型为月）时，取值为[1，9]；  - periodType=year（周期类型为年）时，取值为[1，3]；  **chargingMode为prePaid时生效且为必选值。**
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
    * @param int|null $periodNum 订购周期数。  取值范围：   - periodType=month（周期类型为月）时，取值为[1，9]；  - periodType=year（周期类型为年）时，取值为[1，3]；  **chargingMode为prePaid时生效且为必选值。**
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
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

