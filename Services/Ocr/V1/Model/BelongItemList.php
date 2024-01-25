<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BelongItemList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BelongItemList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  货物或应税劳务、服务名称。
    * itemNumber  序号。
    * specification  规格型号。
    * unit  单位。
    * quantity  数量。
    * unitPrice  单价。
    * amount  金额。
    * taxRate  税率。
    * tax  税额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'itemNumber' => 'string',
            'specification' => 'string',
            'unit' => 'string',
            'quantity' => 'string',
            'unitPrice' => 'string',
            'amount' => 'string',
            'taxRate' => 'string',
            'tax' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  货物或应税劳务、服务名称。
    * itemNumber  序号。
    * specification  规格型号。
    * unit  单位。
    * quantity  数量。
    * unitPrice  单价。
    * amount  金额。
    * taxRate  税率。
    * tax  税额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'itemNumber' => null,
        'specification' => null,
        'unit' => null,
        'quantity' => null,
        'unitPrice' => null,
        'amount' => null,
        'taxRate' => null,
        'tax' => null
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
    * name  货物或应税劳务、服务名称。
    * itemNumber  序号。
    * specification  规格型号。
    * unit  单位。
    * quantity  数量。
    * unitPrice  单价。
    * amount  金额。
    * taxRate  税率。
    * tax  税额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'itemNumber' => 'item_number',
            'specification' => 'specification',
            'unit' => 'unit',
            'quantity' => 'quantity',
            'unitPrice' => 'unit_price',
            'amount' => 'amount',
            'taxRate' => 'tax_rate',
            'tax' => 'tax'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  货物或应税劳务、服务名称。
    * itemNumber  序号。
    * specification  规格型号。
    * unit  单位。
    * quantity  数量。
    * unitPrice  单价。
    * amount  金额。
    * taxRate  税率。
    * tax  税额。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'itemNumber' => 'setItemNumber',
            'specification' => 'setSpecification',
            'unit' => 'setUnit',
            'quantity' => 'setQuantity',
            'unitPrice' => 'setUnitPrice',
            'amount' => 'setAmount',
            'taxRate' => 'setTaxRate',
            'tax' => 'setTax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  货物或应税劳务、服务名称。
    * itemNumber  序号。
    * specification  规格型号。
    * unit  单位。
    * quantity  数量。
    * unitPrice  单价。
    * amount  金额。
    * taxRate  税率。
    * tax  税额。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'itemNumber' => 'getItemNumber',
            'specification' => 'getSpecification',
            'unit' => 'getUnit',
            'quantity' => 'getQuantity',
            'unitPrice' => 'getUnitPrice',
            'amount' => 'getAmount',
            'taxRate' => 'getTaxRate',
            'tax' => 'getTax'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['itemNumber'] = isset($data['itemNumber']) ? $data['itemNumber'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['taxRate'] = isset($data['taxRate']) ? $data['taxRate'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
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
    * Gets name
    *  货物或应税劳务、服务名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 货物或应税劳务、服务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets itemNumber
    *  序号。
    *
    * @return string|null
    */
    public function getItemNumber()
    {
        return $this->container['itemNumber'];
    }

    /**
    * Sets itemNumber
    *
    * @param string|null $itemNumber 序号。
    *
    * @return $this
    */
    public function setItemNumber($itemNumber)
    {
        $this->container['itemNumber'] = $itemNumber;
        return $this;
    }

    /**
    * Gets specification
    *  规格型号。
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 规格型号。
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets unit
    *  单位。
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 单位。
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets quantity
    *  数量。
    *
    * @return string|null
    */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
    * Sets quantity
    *
    * @param string|null $quantity 数量。
    *
    * @return $this
    */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;
        return $this;
    }

    /**
    * Gets unitPrice
    *  单价。
    *
    * @return string|null
    */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
    * Sets unitPrice
    *
    * @param string|null $unitPrice 单价。
    *
    * @return $this
    */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;
        return $this;
    }

    /**
    * Gets amount
    *  金额。
    *
    * @return string|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param string|null $amount 金额。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
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
    * Gets tax
    *  税额。
    *
    * @return string|null
    */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
    * Sets tax
    *
    * @param string|null $tax 税额。
    *
    * @return $this
    */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;
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

