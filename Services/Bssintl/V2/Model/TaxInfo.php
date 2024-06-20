<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaxInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaxInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taxClass  税种。 VATISSWHTGST
    * taxRate  税率。
    * subTaxClass  税种子类。 PISCOFINSCGSTSGSTIGSTISSWHTVAT
    * taxAmount  税金金额。 单位：美元
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taxClass' => 'string',
            'taxRate' => 'string',
            'subTaxClass' => 'string',
            'taxAmount' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taxClass  税种。 VATISSWHTGST
    * taxRate  税率。
    * subTaxClass  税种子类。 PISCOFINSCGSTSGSTIGSTISSWHTVAT
    * taxAmount  税金金额。 单位：美元
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taxClass' => null,
        'taxRate' => null,
        'subTaxClass' => null,
        'taxAmount' => 'bigdecimal'
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
    * taxClass  税种。 VATISSWHTGST
    * taxRate  税率。
    * subTaxClass  税种子类。 PISCOFINSCGSTSGSTIGSTISSWHTVAT
    * taxAmount  税金金额。 单位：美元
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taxClass' => 'taxClass',
            'taxRate' => 'taxRate',
            'subTaxClass' => 'subTaxClass',
            'taxAmount' => 'taxAmount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taxClass  税种。 VATISSWHTGST
    * taxRate  税率。
    * subTaxClass  税种子类。 PISCOFINSCGSTSGSTIGSTISSWHTVAT
    * taxAmount  税金金额。 单位：美元
    *
    * @var string[]
    */
    protected static $setters = [
            'taxClass' => 'setTaxClass',
            'taxRate' => 'setTaxRate',
            'subTaxClass' => 'setSubTaxClass',
            'taxAmount' => 'setTaxAmount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taxClass  税种。 VATISSWHTGST
    * taxRate  税率。
    * subTaxClass  税种子类。 PISCOFINSCGSTSGSTIGSTISSWHTVAT
    * taxAmount  税金金额。 单位：美元
    *
    * @var string[]
    */
    protected static $getters = [
            'taxClass' => 'getTaxClass',
            'taxRate' => 'getTaxRate',
            'subTaxClass' => 'getSubTaxClass',
            'taxAmount' => 'getTaxAmount'
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
        $this->container['taxClass'] = isset($data['taxClass']) ? $data['taxClass'] : null;
        $this->container['taxRate'] = isset($data['taxRate']) ? $data['taxRate'] : null;
        $this->container['subTaxClass'] = isset($data['subTaxClass']) ? $data['subTaxClass'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taxClass']) && (mb_strlen($this->container['taxClass']) > 64)) {
                $invalidProperties[] = "invalid value for 'taxClass', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taxClass']) && (mb_strlen($this->container['taxClass']) < 0)) {
                $invalidProperties[] = "invalid value for 'taxClass', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taxRate']) && (mb_strlen($this->container['taxRate']) > 64)) {
                $invalidProperties[] = "invalid value for 'taxRate', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taxRate']) && (mb_strlen($this->container['taxRate']) < 0)) {
                $invalidProperties[] = "invalid value for 'taxRate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subTaxClass']) && (mb_strlen($this->container['subTaxClass']) > 64)) {
                $invalidProperties[] = "invalid value for 'subTaxClass', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subTaxClass']) && (mb_strlen($this->container['subTaxClass']) < 0)) {
                $invalidProperties[] = "invalid value for 'subTaxClass', the character length must be bigger than or equal to 0.";
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
    * Gets taxClass
    *  税种。 VATISSWHTGST
    *
    * @return string|null
    */
    public function getTaxClass()
    {
        return $this->container['taxClass'];
    }

    /**
    * Sets taxClass
    *
    * @param string|null $taxClass 税种。 VATISSWHTGST
    *
    * @return $this
    */
    public function setTaxClass($taxClass)
    {
        $this->container['taxClass'] = $taxClass;
        return $this;
    }

    /**
    * Gets taxRate
    *  税率。
    *
    * @return string|null
    */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
    * Sets taxRate
    *
    * @param string|null $taxRate 税率。
    *
    * @return $this
    */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;
        return $this;
    }

    /**
    * Gets subTaxClass
    *  税种子类。 PISCOFINSCGSTSGSTIGSTISSWHTVAT
    *
    * @return string|null
    */
    public function getSubTaxClass()
    {
        return $this->container['subTaxClass'];
    }

    /**
    * Sets subTaxClass
    *
    * @param string|null $subTaxClass 税种子类。 PISCOFINSCGSTSGSTIGSTISSWHTVAT
    *
    * @return $this
    */
    public function setSubTaxClass($subTaxClass)
    {
        $this->container['subTaxClass'] = $subTaxClass;
        return $this;
    }

    /**
    * Gets taxAmount
    *  税金金额。 单位：美元
    *
    * @return float|null
    */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
    * Sets taxAmount
    *
    * @param float|null $taxAmount 税金金额。 单位：美元
    *
    * @return $this
    */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;
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

