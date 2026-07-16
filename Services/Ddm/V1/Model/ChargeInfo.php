<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChargeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChargeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeMode  付费模式。
    * periodNum  使用周期。
    * periodType  周期模式。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeMode' => 'string',
            'periodNum' => 'int',
            'periodType' => 'string',
            'isAutoPay' => 'bool',
            'isAutoRenew' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeMode  付费模式。
    * periodNum  使用周期。
    * periodType  周期模式。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargeMode' => null,
        'periodNum' => null,
        'periodType' => null,
        'isAutoPay' => null,
        'isAutoRenew' => null
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
    * chargeMode  付费模式。
    * periodNum  使用周期。
    * periodType  周期模式。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargeMode' => 'charge_mode',
            'periodNum' => 'period_num',
            'periodType' => 'period_type',
            'isAutoPay' => 'is_auto_pay',
            'isAutoRenew' => 'is_auto_renew'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargeMode  付费模式。
    * periodNum  使用周期。
    * periodType  周期模式。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargeMode' => 'setChargeMode',
            'periodNum' => 'setPeriodNum',
            'periodType' => 'setPeriodType',
            'isAutoPay' => 'setIsAutoPay',
            'isAutoRenew' => 'setIsAutoRenew'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargeMode  付费模式。
    * periodNum  使用周期。
    * periodType  周期模式。
    * isAutoPay  是否自动支付。
    * isAutoRenew  是否自动续费。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargeMode' => 'getChargeMode',
            'periodNum' => 'getPeriodNum',
            'periodType' => 'getPeriodType',
            'isAutoPay' => 'getIsAutoPay',
            'isAutoRenew' => 'getIsAutoRenew'
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
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['periodNum']) && ($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['periodType']) && (mb_strlen($this->container['periodType']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'periodType', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['periodType']) && (mb_strlen($this->container['periodType']) < 1)) {
                $invalidProperties[] = "invalid value for 'periodType', the character length must be bigger than or equal to 1.";
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
    * Gets chargeMode
    *  付费模式。
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 付费模式。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets periodNum
    *  使用周期。
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
    * @param int|null $periodNum 使用周期。
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
    *  周期模式。
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
    * @param string|null $periodType 周期模式。
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets isAutoPay
    *  是否自动支付。
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
    * @param bool|null $isAutoPay 是否自动支付。
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
    *  是否自动续费。
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
    * @param bool|null $isAutoRenew 是否自动续费。
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
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

