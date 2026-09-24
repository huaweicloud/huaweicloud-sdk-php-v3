<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PriceItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PriceItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offeringId  商品Id
    * currency  币种，USD
    * officialPrice  官网价
    * chargingMode  计费模式，PERIOD：包年/包月、ON_DEMAND：按需、ONE_TIME：一次性、ON_DEMAND_PKG：按需套餐包
    * periodType  销售周期类型，0：天 2：月 3：年 4：小时
    * periodNums  销售周期数列表
    * billingUsageFactor  计费因子编码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offeringId' => 'string',
            'currency' => 'string',
            'officialPrice' => 'string',
            'chargingMode' => 'string',
            'periodType' => 'int',
            'periodNums' => 'int[]',
            'billingUsageFactor' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offeringId  商品Id
    * currency  币种，USD
    * officialPrice  官网价
    * chargingMode  计费模式，PERIOD：包年/包月、ON_DEMAND：按需、ONE_TIME：一次性、ON_DEMAND_PKG：按需套餐包
    * periodType  销售周期类型，0：天 2：月 3：年 4：小时
    * periodNums  销售周期数列表
    * billingUsageFactor  计费因子编码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offeringId' => null,
        'currency' => null,
        'officialPrice' => null,
        'chargingMode' => null,
        'periodType' => 'int32',
        'periodNums' => 'int32',
        'billingUsageFactor' => null
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
    * offeringId  商品Id
    * currency  币种，USD
    * officialPrice  官网价
    * chargingMode  计费模式，PERIOD：包年/包月、ON_DEMAND：按需、ONE_TIME：一次性、ON_DEMAND_PKG：按需套餐包
    * periodType  销售周期类型，0：天 2：月 3：年 4：小时
    * periodNums  销售周期数列表
    * billingUsageFactor  计费因子编码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offeringId' => 'offering_id',
            'currency' => 'currency',
            'officialPrice' => 'official_price',
            'chargingMode' => 'charging_mode',
            'periodType' => 'period_type',
            'periodNums' => 'period_nums',
            'billingUsageFactor' => 'billing_usage_factor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offeringId  商品Id
    * currency  币种，USD
    * officialPrice  官网价
    * chargingMode  计费模式，PERIOD：包年/包月、ON_DEMAND：按需、ONE_TIME：一次性、ON_DEMAND_PKG：按需套餐包
    * periodType  销售周期类型，0：天 2：月 3：年 4：小时
    * periodNums  销售周期数列表
    * billingUsageFactor  计费因子编码
    *
    * @var string[]
    */
    protected static $setters = [
            'offeringId' => 'setOfferingId',
            'currency' => 'setCurrency',
            'officialPrice' => 'setOfficialPrice',
            'chargingMode' => 'setChargingMode',
            'periodType' => 'setPeriodType',
            'periodNums' => 'setPeriodNums',
            'billingUsageFactor' => 'setBillingUsageFactor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offeringId  商品Id
    * currency  币种，USD
    * officialPrice  官网价
    * chargingMode  计费模式，PERIOD：包年/包月、ON_DEMAND：按需、ONE_TIME：一次性、ON_DEMAND_PKG：按需套餐包
    * periodType  销售周期类型，0：天 2：月 3：年 4：小时
    * periodNums  销售周期数列表
    * billingUsageFactor  计费因子编码
    *
    * @var string[]
    */
    protected static $getters = [
            'offeringId' => 'getOfferingId',
            'currency' => 'getCurrency',
            'officialPrice' => 'getOfficialPrice',
            'chargingMode' => 'getChargingMode',
            'periodType' => 'getPeriodType',
            'periodNums' => 'getPeriodNums',
            'billingUsageFactor' => 'getBillingUsageFactor'
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
        $this->container['offeringId'] = isset($data['offeringId']) ? $data['offeringId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['officialPrice'] = isset($data['officialPrice']) ? $data['officialPrice'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNums'] = isset($data['periodNums']) ? $data['periodNums'] : null;
        $this->container['billingUsageFactor'] = isset($data['billingUsageFactor']) ? $data['billingUsageFactor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offeringId']) && (mb_strlen($this->container['offeringId']) > 64)) {
                $invalidProperties[] = "invalid value for 'offeringId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['offeringId']) && (mb_strlen($this->container['offeringId']) < 1)) {
                $invalidProperties[] = "invalid value for 'offeringId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 16)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 1)) {
                $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['officialPrice']) && (mb_strlen($this->container['officialPrice']) > 64)) {
                $invalidProperties[] = "invalid value for 'officialPrice', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['officialPrice']) && (mb_strlen($this->container['officialPrice']) < 0)) {
                $invalidProperties[] = "invalid value for 'officialPrice', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['billingUsageFactor']) && (mb_strlen($this->container['billingUsageFactor']) > 64)) {
                $invalidProperties[] = "invalid value for 'billingUsageFactor', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['billingUsageFactor']) && (mb_strlen($this->container['billingUsageFactor']) < 1)) {
                $invalidProperties[] = "invalid value for 'billingUsageFactor', the character length must be bigger than or equal to 1.";
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
    * Gets offeringId
    *  商品Id
    *
    * @return string|null
    */
    public function getOfferingId()
    {
        return $this->container['offeringId'];
    }

    /**
    * Sets offeringId
    *
    * @param string|null $offeringId 商品Id
    *
    * @return $this
    */
    public function setOfferingId($offeringId)
    {
        $this->container['offeringId'] = $offeringId;
        return $this;
    }

    /**
    * Gets currency
    *  币种，USD
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency 币种，USD
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets officialPrice
    *  官网价
    *
    * @return string|null
    */
    public function getOfficialPrice()
    {
        return $this->container['officialPrice'];
    }

    /**
    * Sets officialPrice
    *
    * @param string|null $officialPrice 官网价
    *
    * @return $this
    */
    public function setOfficialPrice($officialPrice)
    {
        $this->container['officialPrice'] = $officialPrice;
        return $this;
    }

    /**
    * Gets chargingMode
    *  计费模式，PERIOD：包年/包月、ON_DEMAND：按需、ONE_TIME：一次性、ON_DEMAND_PKG：按需套餐包
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
    * @param string|null $chargingMode 计费模式，PERIOD：包年/包月、ON_DEMAND：按需、ONE_TIME：一次性、ON_DEMAND_PKG：按需套餐包
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets periodType
    *  销售周期类型，0：天 2：月 3：年 4：小时
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
    * @param int|null $periodType 销售周期类型，0：天 2：月 3：年 4：小时
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNums
    *  销售周期数列表
    *
    * @return int[]|null
    */
    public function getPeriodNums()
    {
        return $this->container['periodNums'];
    }

    /**
    * Sets periodNums
    *
    * @param int[]|null $periodNums 销售周期数列表
    *
    * @return $this
    */
    public function setPeriodNums($periodNums)
    {
        $this->container['periodNums'] = $periodNums;
        return $this;
    }

    /**
    * Gets billingUsageFactor
    *  计费因子编码
    *
    * @return string|null
    */
    public function getBillingUsageFactor()
    {
        return $this->container['billingUsageFactor'];
    }

    /**
    * Sets billingUsageFactor
    *
    * @param string|null $billingUsageFactor 计费因子编码
    *
    * @return $this
    */
    public function setBillingUsageFactor($billingUsageFactor)
    {
        $this->container['billingUsageFactor'] = $billingUsageFactor;
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

