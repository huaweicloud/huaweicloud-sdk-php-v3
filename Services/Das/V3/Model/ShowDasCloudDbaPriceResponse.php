<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDasCloudDbaPriceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDasCloudDbaPriceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basePrice  基础费用
    * originalBasePrice  基础费用-原价
    * storagePrice  存储费用
    * originalStoragePrice  存储费用-原价
    * dumpPrice  转储费用
    * originalDumpPrice  转储费用-原价
    * measureId  度量单位标识,1:元
    * currency  币种，比如CNY
    * configurePrice  配置费用-当前为0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basePrice' => 'double',
            'originalBasePrice' => 'double',
            'storagePrice' => 'double',
            'originalStoragePrice' => 'double',
            'dumpPrice' => 'double',
            'originalDumpPrice' => 'double',
            'measureId' => 'int',
            'currency' => 'string',
            'configurePrice' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basePrice  基础费用
    * originalBasePrice  基础费用-原价
    * storagePrice  存储费用
    * originalStoragePrice  存储费用-原价
    * dumpPrice  转储费用
    * originalDumpPrice  转储费用-原价
    * measureId  度量单位标识,1:元
    * currency  币种，比如CNY
    * configurePrice  配置费用-当前为0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basePrice' => 'double',
        'originalBasePrice' => 'double',
        'storagePrice' => 'double',
        'originalStoragePrice' => 'double',
        'dumpPrice' => 'double',
        'originalDumpPrice' => 'double',
        'measureId' => null,
        'currency' => null,
        'configurePrice' => 'double'
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
    * basePrice  基础费用
    * originalBasePrice  基础费用-原价
    * storagePrice  存储费用
    * originalStoragePrice  存储费用-原价
    * dumpPrice  转储费用
    * originalDumpPrice  转储费用-原价
    * measureId  度量单位标识,1:元
    * currency  币种，比如CNY
    * configurePrice  配置费用-当前为0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basePrice' => 'base_price',
            'originalBasePrice' => 'original_base_price',
            'storagePrice' => 'storage_price',
            'originalStoragePrice' => 'original_storage_price',
            'dumpPrice' => 'dump_price',
            'originalDumpPrice' => 'original_dump_price',
            'measureId' => 'measure_id',
            'currency' => 'currency',
            'configurePrice' => 'configure_price'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basePrice  基础费用
    * originalBasePrice  基础费用-原价
    * storagePrice  存储费用
    * originalStoragePrice  存储费用-原价
    * dumpPrice  转储费用
    * originalDumpPrice  转储费用-原价
    * measureId  度量单位标识,1:元
    * currency  币种，比如CNY
    * configurePrice  配置费用-当前为0
    *
    * @var string[]
    */
    protected static $setters = [
            'basePrice' => 'setBasePrice',
            'originalBasePrice' => 'setOriginalBasePrice',
            'storagePrice' => 'setStoragePrice',
            'originalStoragePrice' => 'setOriginalStoragePrice',
            'dumpPrice' => 'setDumpPrice',
            'originalDumpPrice' => 'setOriginalDumpPrice',
            'measureId' => 'setMeasureId',
            'currency' => 'setCurrency',
            'configurePrice' => 'setConfigurePrice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basePrice  基础费用
    * originalBasePrice  基础费用-原价
    * storagePrice  存储费用
    * originalStoragePrice  存储费用-原价
    * dumpPrice  转储费用
    * originalDumpPrice  转储费用-原价
    * measureId  度量单位标识,1:元
    * currency  币种，比如CNY
    * configurePrice  配置费用-当前为0
    *
    * @var string[]
    */
    protected static $getters = [
            'basePrice' => 'getBasePrice',
            'originalBasePrice' => 'getOriginalBasePrice',
            'storagePrice' => 'getStoragePrice',
            'originalStoragePrice' => 'getOriginalStoragePrice',
            'dumpPrice' => 'getDumpPrice',
            'originalDumpPrice' => 'getOriginalDumpPrice',
            'measureId' => 'getMeasureId',
            'currency' => 'getCurrency',
            'configurePrice' => 'getConfigurePrice'
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
        $this->container['basePrice'] = isset($data['basePrice']) ? $data['basePrice'] : null;
        $this->container['originalBasePrice'] = isset($data['originalBasePrice']) ? $data['originalBasePrice'] : null;
        $this->container['storagePrice'] = isset($data['storagePrice']) ? $data['storagePrice'] : null;
        $this->container['originalStoragePrice'] = isset($data['originalStoragePrice']) ? $data['originalStoragePrice'] : null;
        $this->container['dumpPrice'] = isset($data['dumpPrice']) ? $data['dumpPrice'] : null;
        $this->container['originalDumpPrice'] = isset($data['originalDumpPrice']) ? $data['originalDumpPrice'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['configurePrice'] = isset($data['configurePrice']) ? $data['configurePrice'] : null;
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
    * Gets basePrice
    *  基础费用
    *
    * @return double|null
    */
    public function getBasePrice()
    {
        return $this->container['basePrice'];
    }

    /**
    * Sets basePrice
    *
    * @param double|null $basePrice 基础费用
    *
    * @return $this
    */
    public function setBasePrice($basePrice)
    {
        $this->container['basePrice'] = $basePrice;
        return $this;
    }

    /**
    * Gets originalBasePrice
    *  基础费用-原价
    *
    * @return double|null
    */
    public function getOriginalBasePrice()
    {
        return $this->container['originalBasePrice'];
    }

    /**
    * Sets originalBasePrice
    *
    * @param double|null $originalBasePrice 基础费用-原价
    *
    * @return $this
    */
    public function setOriginalBasePrice($originalBasePrice)
    {
        $this->container['originalBasePrice'] = $originalBasePrice;
        return $this;
    }

    /**
    * Gets storagePrice
    *  存储费用
    *
    * @return double|null
    */
    public function getStoragePrice()
    {
        return $this->container['storagePrice'];
    }

    /**
    * Sets storagePrice
    *
    * @param double|null $storagePrice 存储费用
    *
    * @return $this
    */
    public function setStoragePrice($storagePrice)
    {
        $this->container['storagePrice'] = $storagePrice;
        return $this;
    }

    /**
    * Gets originalStoragePrice
    *  存储费用-原价
    *
    * @return double|null
    */
    public function getOriginalStoragePrice()
    {
        return $this->container['originalStoragePrice'];
    }

    /**
    * Sets originalStoragePrice
    *
    * @param double|null $originalStoragePrice 存储费用-原价
    *
    * @return $this
    */
    public function setOriginalStoragePrice($originalStoragePrice)
    {
        $this->container['originalStoragePrice'] = $originalStoragePrice;
        return $this;
    }

    /**
    * Gets dumpPrice
    *  转储费用
    *
    * @return double|null
    */
    public function getDumpPrice()
    {
        return $this->container['dumpPrice'];
    }

    /**
    * Sets dumpPrice
    *
    * @param double|null $dumpPrice 转储费用
    *
    * @return $this
    */
    public function setDumpPrice($dumpPrice)
    {
        $this->container['dumpPrice'] = $dumpPrice;
        return $this;
    }

    /**
    * Gets originalDumpPrice
    *  转储费用-原价
    *
    * @return double|null
    */
    public function getOriginalDumpPrice()
    {
        return $this->container['originalDumpPrice'];
    }

    /**
    * Sets originalDumpPrice
    *
    * @param double|null $originalDumpPrice 转储费用-原价
    *
    * @return $this
    */
    public function setOriginalDumpPrice($originalDumpPrice)
    {
        $this->container['originalDumpPrice'] = $originalDumpPrice;
        return $this;
    }

    /**
    * Gets measureId
    *  度量单位标识,1:元
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 度量单位标识,1:元
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets currency
    *  币种，比如CNY
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
    * @param string|null $currency 币种，比如CNY
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets configurePrice
    *  配置费用-当前为0
    *
    * @return double|null
    */
    public function getConfigurePrice()
    {
        return $this->container['configurePrice'];
    }

    /**
    * Sets configurePrice
    *
    * @param double|null $configurePrice 配置费用-当前为0
    *
    * @return $this
    */
    public function setConfigurePrice($configurePrice)
    {
        $this->container['configurePrice'] = $configurePrice;
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

