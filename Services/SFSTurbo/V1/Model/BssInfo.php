<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BssInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BssInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAutoRenew  是否自动续费。0表示不自动续费，1表示自动续费。
    * periodNum  包周期订购的周期数
    * periodType  包周期的类型，可选包年或包月，2 表示包月，3 表示包年
    * isAutoPay  是否生成订单后自动扣款。0表示不自动续费，1表示自动续费。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAutoRenew' => 'int',
            'periodNum' => 'int',
            'periodType' => 'int',
            'isAutoPay' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAutoRenew  是否自动续费。0表示不自动续费，1表示自动续费。
    * periodNum  包周期订购的周期数
    * periodType  包周期的类型，可选包年或包月，2 表示包月，3 表示包年
    * isAutoPay  是否生成订单后自动扣款。0表示不自动续费，1表示自动续费。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAutoRenew' => 'int64',
        'periodNum' => 'int64',
        'periodType' => 'int64',
        'isAutoPay' => 'int64'
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
    * isAutoRenew  是否自动续费。0表示不自动续费，1表示自动续费。
    * periodNum  包周期订购的周期数
    * periodType  包周期的类型，可选包年或包月，2 表示包月，3 表示包年
    * isAutoPay  是否生成订单后自动扣款。0表示不自动续费，1表示自动续费。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAutoRenew' => 'is_auto_renew',
            'periodNum' => 'period_num',
            'periodType' => 'period_type',
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAutoRenew  是否自动续费。0表示不自动续费，1表示自动续费。
    * periodNum  包周期订购的周期数
    * periodType  包周期的类型，可选包年或包月，2 表示包月，3 表示包年
    * isAutoPay  是否生成订单后自动扣款。0表示不自动续费，1表示自动续费。
    *
    * @var string[]
    */
    protected static $setters = [
            'isAutoRenew' => 'setIsAutoRenew',
            'periodNum' => 'setPeriodNum',
            'periodType' => 'setPeriodType',
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAutoRenew  是否自动续费。0表示不自动续费，1表示自动续费。
    * periodNum  包周期订购的周期数
    * periodType  包周期的类型，可选包年或包月，2 表示包月，3 表示包年
    * isAutoPay  是否生成订单后自动扣款。0表示不自动续费，1表示自动续费。
    *
    * @var string[]
    */
    protected static $getters = [
            'isAutoRenew' => 'getIsAutoRenew',
            'periodNum' => 'getPeriodNum',
            'periodType' => 'getPeriodType',
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
    const IS_AUTO_RENEW_0 = 0;
    const IS_AUTO_RENEW_1 = 1;
    const PERIOD_TYPE_2 = 2;
    const PERIOD_TYPE_3 = 3;
    const IS_AUTO_PAY_0 = 0;
    const IS_AUTO_PAY_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsAutoRenewAllowableValues()
    {
        return [
            self::IS_AUTO_RENEW_0,
            self::IS_AUTO_RENEW_1,
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
            self::PERIOD_TYPE_2,
            self::PERIOD_TYPE_3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsAutoPayAllowableValues()
    {
        return [
            self::IS_AUTO_PAY_0,
            self::IS_AUTO_PAY_1,
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
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
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
            $allowedValues = $this->getIsAutoRenewAllowableValues();
                if (!is_null($this->container['isAutoRenew']) && !in_array($this->container['isAutoRenew'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isAutoRenew', must be one of '%s'",
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

            $allowedValues = $this->getIsAutoPayAllowableValues();
                if (!is_null($this->container['isAutoPay']) && !in_array($this->container['isAutoPay'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isAutoPay', must be one of '%s'",
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
    *  是否自动续费。0表示不自动续费，1表示自动续费。
    *
    * @return int|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int|null $isAutoRenew 是否自动续费。0表示不自动续费，1表示自动续费。
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
    *  包周期订购的周期数
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
    * @param int $periodNum 包周期订购的周期数
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
    *  包周期的类型，可选包年或包月，2 表示包月，3 表示包年
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType 包周期的类型，可选包年或包月，2 表示包月，3 表示包年
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
    *  是否生成订单后自动扣款。0表示不自动续费，1表示自动续费。
    *
    * @return int|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param int|null $isAutoPay 是否生成订单后自动扣款。0表示不自动续费，1表示自动续费。
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

