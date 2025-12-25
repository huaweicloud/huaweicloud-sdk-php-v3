<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigResponseBodyCofingStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigResponseBody_cofing_statistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountNum  账号接入数量
    * dailyTraffic  每日流量，单位：Byte
    * logNum  已接入日志数量
    * productAllNum  云产品总数量
    * productInNum  接入云产品数量
    * vendorNum  云厂商数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountNum' => 'float',
            'dailyTraffic' => 'float',
            'logNum' => 'float',
            'productAllNum' => 'float',
            'productInNum' => 'float',
            'vendorNum' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountNum  账号接入数量
    * dailyTraffic  每日流量，单位：Byte
    * logNum  已接入日志数量
    * productAllNum  云产品总数量
    * productInNum  接入云产品数量
    * vendorNum  云厂商数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountNum' => null,
        'dailyTraffic' => null,
        'logNum' => null,
        'productAllNum' => null,
        'productInNum' => null,
        'vendorNum' => null
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
    * accountNum  账号接入数量
    * dailyTraffic  每日流量，单位：Byte
    * logNum  已接入日志数量
    * productAllNum  云产品总数量
    * productInNum  接入云产品数量
    * vendorNum  云厂商数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountNum' => 'account_num',
            'dailyTraffic' => 'daily_traffic',
            'logNum' => 'log_num',
            'productAllNum' => 'product_all_num',
            'productInNum' => 'product_in_num',
            'vendorNum' => 'vendor_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountNum  账号接入数量
    * dailyTraffic  每日流量，单位：Byte
    * logNum  已接入日志数量
    * productAllNum  云产品总数量
    * productInNum  接入云产品数量
    * vendorNum  云厂商数量
    *
    * @var string[]
    */
    protected static $setters = [
            'accountNum' => 'setAccountNum',
            'dailyTraffic' => 'setDailyTraffic',
            'logNum' => 'setLogNum',
            'productAllNum' => 'setProductAllNum',
            'productInNum' => 'setProductInNum',
            'vendorNum' => 'setVendorNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountNum  账号接入数量
    * dailyTraffic  每日流量，单位：Byte
    * logNum  已接入日志数量
    * productAllNum  云产品总数量
    * productInNum  接入云产品数量
    * vendorNum  云厂商数量
    *
    * @var string[]
    */
    protected static $getters = [
            'accountNum' => 'getAccountNum',
            'dailyTraffic' => 'getDailyTraffic',
            'logNum' => 'getLogNum',
            'productAllNum' => 'getProductAllNum',
            'productInNum' => 'getProductInNum',
            'vendorNum' => 'getVendorNum'
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
        $this->container['accountNum'] = isset($data['accountNum']) ? $data['accountNum'] : null;
        $this->container['dailyTraffic'] = isset($data['dailyTraffic']) ? $data['dailyTraffic'] : null;
        $this->container['logNum'] = isset($data['logNum']) ? $data['logNum'] : null;
        $this->container['productAllNum'] = isset($data['productAllNum']) ? $data['productAllNum'] : null;
        $this->container['productInNum'] = isset($data['productInNum']) ? $data['productInNum'] : null;
        $this->container['vendorNum'] = isset($data['vendorNum']) ? $data['vendorNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountNum']) && ($this->container['accountNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'accountNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['accountNum']) && ($this->container['accountNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'accountNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dailyTraffic']) && ($this->container['dailyTraffic'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'dailyTraffic', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['dailyTraffic']) && ($this->container['dailyTraffic'] < 0)) {
                $invalidProperties[] = "invalid value for 'dailyTraffic', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logNum']) && ($this->container['logNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'logNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['logNum']) && ($this->container['logNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'logNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productAllNum']) && ($this->container['productAllNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'productAllNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['productAllNum']) && ($this->container['productAllNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'productAllNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productInNum']) && ($this->container['productInNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'productInNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['productInNum']) && ($this->container['productInNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'productInNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vendorNum']) && ($this->container['vendorNum'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'vendorNum', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['vendorNum']) && ($this->container['vendorNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vendorNum', must be bigger than or equal to 0.";
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
    * Gets accountNum
    *  账号接入数量
    *
    * @return float|null
    */
    public function getAccountNum()
    {
        return $this->container['accountNum'];
    }

    /**
    * Sets accountNum
    *
    * @param float|null $accountNum 账号接入数量
    *
    * @return $this
    */
    public function setAccountNum($accountNum)
    {
        $this->container['accountNum'] = $accountNum;
        return $this;
    }

    /**
    * Gets dailyTraffic
    *  每日流量，单位：Byte
    *
    * @return float|null
    */
    public function getDailyTraffic()
    {
        return $this->container['dailyTraffic'];
    }

    /**
    * Sets dailyTraffic
    *
    * @param float|null $dailyTraffic 每日流量，单位：Byte
    *
    * @return $this
    */
    public function setDailyTraffic($dailyTraffic)
    {
        $this->container['dailyTraffic'] = $dailyTraffic;
        return $this;
    }

    /**
    * Gets logNum
    *  已接入日志数量
    *
    * @return float|null
    */
    public function getLogNum()
    {
        return $this->container['logNum'];
    }

    /**
    * Sets logNum
    *
    * @param float|null $logNum 已接入日志数量
    *
    * @return $this
    */
    public function setLogNum($logNum)
    {
        $this->container['logNum'] = $logNum;
        return $this;
    }

    /**
    * Gets productAllNum
    *  云产品总数量
    *
    * @return float|null
    */
    public function getProductAllNum()
    {
        return $this->container['productAllNum'];
    }

    /**
    * Sets productAllNum
    *
    * @param float|null $productAllNum 云产品总数量
    *
    * @return $this
    */
    public function setProductAllNum($productAllNum)
    {
        $this->container['productAllNum'] = $productAllNum;
        return $this;
    }

    /**
    * Gets productInNum
    *  接入云产品数量
    *
    * @return float|null
    */
    public function getProductInNum()
    {
        return $this->container['productInNum'];
    }

    /**
    * Sets productInNum
    *
    * @param float|null $productInNum 接入云产品数量
    *
    * @return $this
    */
    public function setProductInNum($productInNum)
    {
        $this->container['productInNum'] = $productInNum;
        return $this;
    }

    /**
    * Gets vendorNum
    *  云厂商数量
    *
    * @return float|null
    */
    public function getVendorNum()
    {
        return $this->container['vendorNum'];
    }

    /**
    * Sets vendorNum
    *
    * @param float|null $vendorNum 云厂商数量
    *
    * @return $this
    */
    public function setVendorNum($vendorNum)
    {
        $this->container['vendorNum'] = $vendorNum;
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

