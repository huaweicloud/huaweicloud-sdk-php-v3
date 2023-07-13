<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodOrderInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeriodOrderInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodType  订购周期类型。 取值范围： - 2：表示周期类型为月。 - 3：表示周期类型为年。
    * periodNum  订购周期数。 取值范围： - period_type=2（周期类型为月）时，取值为[1，9]。 - period_type=3（周期类型为年）时，取值为[1，3]。
    * isAutoRenew  是否自动续订。 取值范围： - 0：表示不自动续订。 - 1：表示自动续订。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodType' => 'int',
            'periodNum' => 'int',
            'isAutoRenew' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodType  订购周期类型。 取值范围： - 2：表示周期类型为月。 - 3：表示周期类型为年。
    * periodNum  订购周期数。 取值范围： - period_type=2（周期类型为月）时，取值为[1，9]。 - period_type=3（周期类型为年）时，取值为[1，3]。
    * isAutoRenew  是否自动续订。 取值范围： - 0：表示不自动续订。 - 1：表示自动续订。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'isAutoRenew' => 'int32'
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
    * periodType  订购周期类型。 取值范围： - 2：表示周期类型为月。 - 3：表示周期类型为年。
    * periodNum  订购周期数。 取值范围： - period_type=2（周期类型为月）时，取值为[1，9]。 - period_type=3（周期类型为年）时，取值为[1，3]。
    * isAutoRenew  是否自动续订。 取值范围： - 0：表示不自动续订。 - 1：表示自动续订。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'isAutoRenew' => 'is_auto_renew'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodType  订购周期类型。 取值范围： - 2：表示周期类型为月。 - 3：表示周期类型为年。
    * periodNum  订购周期数。 取值范围： - period_type=2（周期类型为月）时，取值为[1，9]。 - period_type=3（周期类型为年）时，取值为[1，3]。
    * isAutoRenew  是否自动续订。 取值范围： - 0：表示不自动续订。 - 1：表示自动续订。
    *
    * @var string[]
    */
    protected static $setters = [
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'isAutoRenew' => 'setIsAutoRenew'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodType  订购周期类型。 取值范围： - 2：表示周期类型为月。 - 3：表示周期类型为年。
    * periodNum  订购周期数。 取值范围： - period_type=2（周期类型为月）时，取值为[1，9]。 - period_type=3（周期类型为年）时，取值为[1，3]。
    * isAutoRenew  是否自动续订。 取值范围： - 0：表示不自动续订。 - 1：表示自动续订。
    *
    * @var string[]
    */
    protected static $getters = [
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
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
    const PERIOD_TYPE_2 = 2;
    const PERIOD_TYPE_3 = 3;
    const IS_AUTO_RENEW_0 = 0;
    const IS_AUTO_RENEW_1 = 1;
    

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
    public function getIsAutoRenewAllowableValues()
    {
        return [
            self::IS_AUTO_RENEW_0,
            self::IS_AUTO_RENEW_1,
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

            $allowedValues = $this->getIsAutoRenewAllowableValues();
                if (!is_null($this->container['isAutoRenew']) && !in_array($this->container['isAutoRenew'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isAutoRenew', must be one of '%s'",
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
    *  订购周期类型。 取值范围： - 2：表示周期类型为月。 - 3：表示周期类型为年。
    *
    * @return int|null
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int|null $periodType 订购周期类型。 取值范围： - 2：表示周期类型为月。 - 3：表示周期类型为年。
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
    *  订购周期数。 取值范围： - period_type=2（周期类型为月）时，取值为[1，9]。 - period_type=3（周期类型为年）时，取值为[1，3]。
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
    * @param int|null $periodNum 订购周期数。 取值范围： - period_type=2（周期类型为月）时，取值为[1，9]。 - period_type=3（周期类型为年）时，取值为[1，3]。
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
    *  是否自动续订。 取值范围： - 0：表示不自动续订。 - 1：表示自动续订。
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
    * @param int|null $isAutoRenew 是否自动续订。 取值范围： - 0：表示不自动续订。 - 1：表示自动续订。
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

