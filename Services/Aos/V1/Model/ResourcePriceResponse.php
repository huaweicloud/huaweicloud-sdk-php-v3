<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourcePriceResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourcePriceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeMode  计费模式  * `PRE_PAID` - 包周期计费 * `POST_PAID` - 按需计费 * `FREE` - 免费
    * salePrice  该资源最终优惠后的金额（只考虑官网折扣、商务折扣以及伙伴折扣，不包含促销折扣及优惠券），保留小数点后2位，向上取整，默认单位是元。
    * discount  该资源的总优惠额，保留小数点后2位，向上取整，默认单位是元。
    * originalPrice  该资源的原价，保留小数点后2位，向上取整，默认单位是元。
    * periodType  计费单位  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * `HOUR` - 小时，按需计费的单位 * `DAY` - 天，按需计费的单位 * `MONTH` - 月，包周期计费的单位 * `YEAR` - 年，包周期计费的单位 * `BYTE` - 字节，按需计费的单位 * `MB` - 百万字节，包周期计费和按需计费的单位 * `GB` - 千兆字节，包周期计费和按需计费的单位
    * periodCount  该资源的计费数量，需要和period_type搭配使用  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * 对于按需计费资源，此值默认返回1，代表在1个计费单位下，该资源的价格 * 对于包周期计费资源，此值与模板中该资源的period字段保持一致
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeMode' => 'string',
            'salePrice' => 'double',
            'discount' => 'double',
            'originalPrice' => 'double',
            'periodType' => 'string',
            'periodCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeMode  计费模式  * `PRE_PAID` - 包周期计费 * `POST_PAID` - 按需计费 * `FREE` - 免费
    * salePrice  该资源最终优惠后的金额（只考虑官网折扣、商务折扣以及伙伴折扣，不包含促销折扣及优惠券），保留小数点后2位，向上取整，默认单位是元。
    * discount  该资源的总优惠额，保留小数点后2位，向上取整，默认单位是元。
    * originalPrice  该资源的原价，保留小数点后2位，向上取整，默认单位是元。
    * periodType  计费单位  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * `HOUR` - 小时，按需计费的单位 * `DAY` - 天，按需计费的单位 * `MONTH` - 月，包周期计费的单位 * `YEAR` - 年，包周期计费的单位 * `BYTE` - 字节，按需计费的单位 * `MB` - 百万字节，包周期计费和按需计费的单位 * `GB` - 千兆字节，包周期计费和按需计费的单位
    * periodCount  该资源的计费数量，需要和period_type搭配使用  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * 对于按需计费资源，此值默认返回1，代表在1个计费单位下，该资源的价格 * 对于包周期计费资源，此值与模板中该资源的period字段保持一致
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargeMode' => null,
        'salePrice' => 'double',
        'discount' => 'double',
        'originalPrice' => 'double',
        'periodType' => null,
        'periodCount' => null
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
    * chargeMode  计费模式  * `PRE_PAID` - 包周期计费 * `POST_PAID` - 按需计费 * `FREE` - 免费
    * salePrice  该资源最终优惠后的金额（只考虑官网折扣、商务折扣以及伙伴折扣，不包含促销折扣及优惠券），保留小数点后2位，向上取整，默认单位是元。
    * discount  该资源的总优惠额，保留小数点后2位，向上取整，默认单位是元。
    * originalPrice  该资源的原价，保留小数点后2位，向上取整，默认单位是元。
    * periodType  计费单位  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * `HOUR` - 小时，按需计费的单位 * `DAY` - 天，按需计费的单位 * `MONTH` - 月，包周期计费的单位 * `YEAR` - 年，包周期计费的单位 * `BYTE` - 字节，按需计费的单位 * `MB` - 百万字节，包周期计费和按需计费的单位 * `GB` - 千兆字节，包周期计费和按需计费的单位
    * periodCount  该资源的计费数量，需要和period_type搭配使用  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * 对于按需计费资源，此值默认返回1，代表在1个计费单位下，该资源的价格 * 对于包周期计费资源，此值与模板中该资源的period字段保持一致
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargeMode' => 'charge_mode',
            'salePrice' => 'sale_price',
            'discount' => 'discount',
            'originalPrice' => 'original_price',
            'periodType' => 'period_type',
            'periodCount' => 'period_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargeMode  计费模式  * `PRE_PAID` - 包周期计费 * `POST_PAID` - 按需计费 * `FREE` - 免费
    * salePrice  该资源最终优惠后的金额（只考虑官网折扣、商务折扣以及伙伴折扣，不包含促销折扣及优惠券），保留小数点后2位，向上取整，默认单位是元。
    * discount  该资源的总优惠额，保留小数点后2位，向上取整，默认单位是元。
    * originalPrice  该资源的原价，保留小数点后2位，向上取整，默认单位是元。
    * periodType  计费单位  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * `HOUR` - 小时，按需计费的单位 * `DAY` - 天，按需计费的单位 * `MONTH` - 月，包周期计费的单位 * `YEAR` - 年，包周期计费的单位 * `BYTE` - 字节，按需计费的单位 * `MB` - 百万字节，包周期计费和按需计费的单位 * `GB` - 千兆字节，包周期计费和按需计费的单位
    * periodCount  该资源的计费数量，需要和period_type搭配使用  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * 对于按需计费资源，此值默认返回1，代表在1个计费单位下，该资源的价格 * 对于包周期计费资源，此值与模板中该资源的period字段保持一致
    *
    * @var string[]
    */
    protected static $setters = [
            'chargeMode' => 'setChargeMode',
            'salePrice' => 'setSalePrice',
            'discount' => 'setDiscount',
            'originalPrice' => 'setOriginalPrice',
            'periodType' => 'setPeriodType',
            'periodCount' => 'setPeriodCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargeMode  计费模式  * `PRE_PAID` - 包周期计费 * `POST_PAID` - 按需计费 * `FREE` - 免费
    * salePrice  该资源最终优惠后的金额（只考虑官网折扣、商务折扣以及伙伴折扣，不包含促销折扣及优惠券），保留小数点后2位，向上取整，默认单位是元。
    * discount  该资源的总优惠额，保留小数点后2位，向上取整，默认单位是元。
    * originalPrice  该资源的原价，保留小数点后2位，向上取整，默认单位是元。
    * periodType  计费单位  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * `HOUR` - 小时，按需计费的单位 * `DAY` - 天，按需计费的单位 * `MONTH` - 月，包周期计费的单位 * `YEAR` - 年，包周期计费的单位 * `BYTE` - 字节，按需计费的单位 * `MB` - 百万字节，包周期计费和按需计费的单位 * `GB` - 千兆字节，包周期计费和按需计费的单位
    * periodCount  该资源的计费数量，需要和period_type搭配使用  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * 对于按需计费资源，此值默认返回1，代表在1个计费单位下，该资源的价格 * 对于包周期计费资源，此值与模板中该资源的period字段保持一致
    *
    * @var string[]
    */
    protected static $getters = [
            'chargeMode' => 'getChargeMode',
            'salePrice' => 'getSalePrice',
            'discount' => 'getDiscount',
            'originalPrice' => 'getOriginalPrice',
            'periodType' => 'getPeriodType',
            'periodCount' => 'getPeriodCount'
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
    const CHARGE_MODE_PRE_PAID = 'PRE_PAID';
    const CHARGE_MODE_POST_PAID = 'POST_PAID';
    const CHARGE_MODE_FREE = 'FREE';
    const PERIOD_TYPE_HOUR = 'HOUR';
    const PERIOD_TYPE_DAY = 'DAY';
    const PERIOD_TYPE_MONTH = 'MONTH';
    const PERIOD_TYPE_YEAR = 'YEAR';
    const PERIOD_TYPE_BYTE = 'BYTE';
    const PERIOD_TYPE_MB = 'MB';
    const PERIOD_TYPE_GB = 'GB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_PRE_PAID,
            self::CHARGE_MODE_POST_PAID,
            self::CHARGE_MODE_FREE,
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
            self::PERIOD_TYPE_HOUR,
            self::PERIOD_TYPE_DAY,
            self::PERIOD_TYPE_MONTH,
            self::PERIOD_TYPE_YEAR,
            self::PERIOD_TYPE_BYTE,
            self::PERIOD_TYPE_MB,
            self::PERIOD_TYPE_GB,
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
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['salePrice'] = isset($data['salePrice']) ? $data['salePrice'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['originalPrice'] = isset($data['originalPrice']) ? $data['originalPrice'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodCount'] = isset($data['periodCount']) ? $data['periodCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
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
    * Gets chargeMode
    *  计费模式  * `PRE_PAID` - 包周期计费 * `POST_PAID` - 按需计费 * `FREE` - 免费
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
    * @param string|null $chargeMode 计费模式  * `PRE_PAID` - 包周期计费 * `POST_PAID` - 按需计费 * `FREE` - 免费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets salePrice
    *  该资源最终优惠后的金额（只考虑官网折扣、商务折扣以及伙伴折扣，不包含促销折扣及优惠券），保留小数点后2位，向上取整，默认单位是元。
    *
    * @return double|null
    */
    public function getSalePrice()
    {
        return $this->container['salePrice'];
    }

    /**
    * Sets salePrice
    *
    * @param double|null $salePrice 该资源最终优惠后的金额（只考虑官网折扣、商务折扣以及伙伴折扣，不包含促销折扣及优惠券），保留小数点后2位，向上取整，默认单位是元。
    *
    * @return $this
    */
    public function setSalePrice($salePrice)
    {
        $this->container['salePrice'] = $salePrice;
        return $this;
    }

    /**
    * Gets discount
    *  该资源的总优惠额，保留小数点后2位，向上取整，默认单位是元。
    *
    * @return double|null
    */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
    * Sets discount
    *
    * @param double|null $discount 该资源的总优惠额，保留小数点后2位，向上取整，默认单位是元。
    *
    * @return $this
    */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;
        return $this;
    }

    /**
    * Gets originalPrice
    *  该资源的原价，保留小数点后2位，向上取整，默认单位是元。
    *
    * @return double|null
    */
    public function getOriginalPrice()
    {
        return $this->container['originalPrice'];
    }

    /**
    * Sets originalPrice
    *
    * @param double|null $originalPrice 该资源的原价，保留小数点后2位，向上取整，默认单位是元。
    *
    * @return $this
    */
    public function setOriginalPrice($originalPrice)
    {
        $this->container['originalPrice'] = $originalPrice;
        return $this;
    }

    /**
    * Gets periodType
    *  计费单位  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * `HOUR` - 小时，按需计费的单位 * `DAY` - 天，按需计费的单位 * `MONTH` - 月，包周期计费的单位 * `YEAR` - 年，包周期计费的单位 * `BYTE` - 字节，按需计费的单位 * `MB` - 百万字节，包周期计费和按需计费的单位 * `GB` - 千兆字节，包周期计费和按需计费的单位
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
    * @param string|null $periodType 计费单位  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * `HOUR` - 小时，按需计费的单位 * `DAY` - 天，按需计费的单位 * `MONTH` - 月，包周期计费的单位 * `YEAR` - 年，包周期计费的单位 * `BYTE` - 字节，按需计费的单位 * `MB` - 百万字节，包周期计费和按需计费的单位 * `GB` - 千兆字节，包周期计费和按需计费的单位
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodCount
    *  该资源的计费数量，需要和period_type搭配使用  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * 对于按需计费资源，此值默认返回1，代表在1个计费单位下，该资源的价格 * 对于包周期计费资源，此值与模板中该资源的period字段保持一致
    *
    * @return int|null
    */
    public function getPeriodCount()
    {
        return $this->container['periodCount'];
    }

    /**
    * Sets periodCount
    *
    * @param int|null $periodCount 该资源的计费数量，需要和period_type搭配使用  若该资源支持包周期计费或按需计费，则会返回该字段；若该资源为免费资源，则不返回该字段。  * 对于按需计费资源，此值默认返回1，代表在1个计费单位下，该资源的价格 * 对于包周期计费资源，此值与模板中该资源的period字段保持一致
    *
    * @return $this
    */
    public function setPeriodCount($periodCount)
    {
        $this->container['periodCount'] = $periodCount;
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

