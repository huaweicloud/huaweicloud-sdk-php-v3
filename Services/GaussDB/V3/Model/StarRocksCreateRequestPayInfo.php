<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StarRocksCreateRequestPayInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StarRocksCreateRequest_pay_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * payModel  计费模式，默认0。包周期场景必填。 取值范围： - 0：按需计费 - 1：包周期
    * period  包周期周期。包周期场景必填。
    * periodType  包周期周期类型。包周期场景必填。 取值范围： - 2：包月 - 3：包年
    * isAutoRenew  包周期是否自动续费。包周期场景必填。 取值范围： - 1：自动续费 - 0：不自动续费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'payModel' => 'string',
            'period' => 'string',
            'periodType' => 'string',
            'isAutoRenew' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * payModel  计费模式，默认0。包周期场景必填。 取值范围： - 0：按需计费 - 1：包周期
    * period  包周期周期。包周期场景必填。
    * periodType  包周期周期类型。包周期场景必填。 取值范围： - 2：包月 - 3：包年
    * isAutoRenew  包周期是否自动续费。包周期场景必填。 取值范围： - 1：自动续费 - 0：不自动续费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'payModel' => null,
        'period' => null,
        'periodType' => null,
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
    * payModel  计费模式，默认0。包周期场景必填。 取值范围： - 0：按需计费 - 1：包周期
    * period  包周期周期。包周期场景必填。
    * periodType  包周期周期类型。包周期场景必填。 取值范围： - 2：包月 - 3：包年
    * isAutoRenew  包周期是否自动续费。包周期场景必填。 取值范围： - 1：自动续费 - 0：不自动续费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'payModel' => 'pay_model',
            'period' => 'period',
            'periodType' => 'period_type',
            'isAutoRenew' => 'is_auto_renew'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * payModel  计费模式，默认0。包周期场景必填。 取值范围： - 0：按需计费 - 1：包周期
    * period  包周期周期。包周期场景必填。
    * periodType  包周期周期类型。包周期场景必填。 取值范围： - 2：包月 - 3：包年
    * isAutoRenew  包周期是否自动续费。包周期场景必填。 取值范围： - 1：自动续费 - 0：不自动续费
    *
    * @var string[]
    */
    protected static $setters = [
            'payModel' => 'setPayModel',
            'period' => 'setPeriod',
            'periodType' => 'setPeriodType',
            'isAutoRenew' => 'setIsAutoRenew'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * payModel  计费模式，默认0。包周期场景必填。 取值范围： - 0：按需计费 - 1：包周期
    * period  包周期周期。包周期场景必填。
    * periodType  包周期周期类型。包周期场景必填。 取值范围： - 2：包月 - 3：包年
    * isAutoRenew  包周期是否自动续费。包周期场景必填。 取值范围： - 1：自动续费 - 0：不自动续费
    *
    * @var string[]
    */
    protected static $getters = [
            'payModel' => 'getPayModel',
            'period' => 'getPeriod',
            'periodType' => 'getPeriodType',
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
        $this->container['payModel'] = isset($data['payModel']) ? $data['payModel'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
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
    * Gets payModel
    *  计费模式，默认0。包周期场景必填。 取值范围： - 0：按需计费 - 1：包周期
    *
    * @return string|null
    */
    public function getPayModel()
    {
        return $this->container['payModel'];
    }

    /**
    * Sets payModel
    *
    * @param string|null $payModel 计费模式，默认0。包周期场景必填。 取值范围： - 0：按需计费 - 1：包周期
    *
    * @return $this
    */
    public function setPayModel($payModel)
    {
        $this->container['payModel'] = $payModel;
        return $this;
    }

    /**
    * Gets period
    *  包周期周期。包周期场景必填。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 包周期周期。包周期场景必填。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets periodType
    *  包周期周期类型。包周期场景必填。 取值范围： - 2：包月 - 3：包年
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
    * @param string|null $periodType 包周期周期类型。包周期场景必填。 取值范围： - 2：包月 - 3：包年
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  包周期是否自动续费。包周期场景必填。 取值范围： - 1：自动续费 - 0：不自动续费
    *
    * @return string|null
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param string|null $isAutoRenew 包周期是否自动续费。包周期场景必填。 取值范围： - 1：自动续费 - 0：不自动续费
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

