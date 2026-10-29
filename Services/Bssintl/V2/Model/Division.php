<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Division implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Division';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beginValue  阶梯起始值
    * endValue  阶梯结束值
    * beginUnit  阶梯起始单位
    * endUnit  阶梯结束单位
    * officialPrice  阶梯官网价
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beginValue' => 'float',
            'endValue' => 'float',
            'beginUnit' => 'int',
            'endUnit' => 'int',
            'officialPrice' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beginValue  阶梯起始值
    * endValue  阶梯结束值
    * beginUnit  阶梯起始单位
    * endUnit  阶梯结束单位
    * officialPrice  阶梯官网价
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beginValue' => 'bigdecimal',
        'endValue' => 'bigdecimal',
        'beginUnit' => 'int32',
        'endUnit' => 'int32',
        'officialPrice' => null
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
    * beginValue  阶梯起始值
    * endValue  阶梯结束值
    * beginUnit  阶梯起始单位
    * endUnit  阶梯结束单位
    * officialPrice  阶梯官网价
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beginValue' => 'begin_value',
            'endValue' => 'end_value',
            'beginUnit' => 'begin_unit',
            'endUnit' => 'end_unit',
            'officialPrice' => 'official_price'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beginValue  阶梯起始值
    * endValue  阶梯结束值
    * beginUnit  阶梯起始单位
    * endUnit  阶梯结束单位
    * officialPrice  阶梯官网价
    *
    * @var string[]
    */
    protected static $setters = [
            'beginValue' => 'setBeginValue',
            'endValue' => 'setEndValue',
            'beginUnit' => 'setBeginUnit',
            'endUnit' => 'setEndUnit',
            'officialPrice' => 'setOfficialPrice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beginValue  阶梯起始值
    * endValue  阶梯结束值
    * beginUnit  阶梯起始单位
    * endUnit  阶梯结束单位
    * officialPrice  阶梯官网价
    *
    * @var string[]
    */
    protected static $getters = [
            'beginValue' => 'getBeginValue',
            'endValue' => 'getEndValue',
            'beginUnit' => 'getBeginUnit',
            'endUnit' => 'getEndUnit',
            'officialPrice' => 'getOfficialPrice'
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
        $this->container['beginValue'] = isset($data['beginValue']) ? $data['beginValue'] : null;
        $this->container['endValue'] = isset($data['endValue']) ? $data['endValue'] : null;
        $this->container['beginUnit'] = isset($data['beginUnit']) ? $data['beginUnit'] : null;
        $this->container['endUnit'] = isset($data['endUnit']) ? $data['endUnit'] : null;
        $this->container['officialPrice'] = isset($data['officialPrice']) ? $data['officialPrice'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['officialPrice']) && (mb_strlen($this->container['officialPrice']) > 64)) {
                $invalidProperties[] = "invalid value for 'officialPrice', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['officialPrice']) && (mb_strlen($this->container['officialPrice']) < 0)) {
                $invalidProperties[] = "invalid value for 'officialPrice', the character length must be bigger than or equal to 0.";
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
    * Gets beginValue
    *  阶梯起始值
    *
    * @return float|null
    */
    public function getBeginValue()
    {
        return $this->container['beginValue'];
    }

    /**
    * Sets beginValue
    *
    * @param float|null $beginValue 阶梯起始值
    *
    * @return $this
    */
    public function setBeginValue($beginValue)
    {
        $this->container['beginValue'] = $beginValue;
        return $this;
    }

    /**
    * Gets endValue
    *  阶梯结束值
    *
    * @return float|null
    */
    public function getEndValue()
    {
        return $this->container['endValue'];
    }

    /**
    * Sets endValue
    *
    * @param float|null $endValue 阶梯结束值
    *
    * @return $this
    */
    public function setEndValue($endValue)
    {
        $this->container['endValue'] = $endValue;
        return $this;
    }

    /**
    * Gets beginUnit
    *  阶梯起始单位
    *
    * @return int|null
    */
    public function getBeginUnit()
    {
        return $this->container['beginUnit'];
    }

    /**
    * Sets beginUnit
    *
    * @param int|null $beginUnit 阶梯起始单位
    *
    * @return $this
    */
    public function setBeginUnit($beginUnit)
    {
        $this->container['beginUnit'] = $beginUnit;
        return $this;
    }

    /**
    * Gets endUnit
    *  阶梯结束单位
    *
    * @return int|null
    */
    public function getEndUnit()
    {
        return $this->container['endUnit'];
    }

    /**
    * Sets endUnit
    *
    * @param int|null $endUnit 阶梯结束单位
    *
    * @return $this
    */
    public function setEndUnit($endUnit)
    {
        $this->container['endUnit'] = $endUnit;
        return $this;
    }

    /**
    * Gets officialPrice
    *  阶梯官网价
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
    * @param string|null $officialPrice 阶梯官网价
    *
    * @return $this
    */
    public function setOfficialPrice($officialPrice)
    {
        $this->container['officialPrice'] = $officialPrice;
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

