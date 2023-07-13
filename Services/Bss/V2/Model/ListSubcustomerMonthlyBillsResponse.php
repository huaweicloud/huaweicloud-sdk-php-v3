<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubcustomerMonthlyBillsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubcustomerMonthlyBillsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * billSums  账单记录，具体参考表2。
    * count  总记录数。
    * currency  货币编码。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'billSums' => '\HuaweiCloud\SDK\Bss\V2\Model\BillSumInfoV2[]',
            'count' => 'int',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * billSums  账单记录，具体参考表2。
    * count  总记录数。
    * currency  货币编码。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'billSums' => null,
        'count' => 'int32',
        'currency' => null
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
    * billSums  账单记录，具体参考表2。
    * count  总记录数。
    * currency  货币编码。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'billSums' => 'bill_sums',
            'count' => 'count',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * billSums  账单记录，具体参考表2。
    * count  总记录数。
    * currency  货币编码。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $setters = [
            'billSums' => 'setBillSums',
            'count' => 'setCount',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * billSums  账单记录，具体参考表2。
    * count  总记录数。
    * currency  货币编码。 CNY：人民币。
    *
    * @var string[]
    */
    protected static $getters = [
            'billSums' => 'getBillSums',
            'count' => 'getCount',
            'currency' => 'getCurrency'
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
        $this->container['billSums'] = isset($data['billSums']) ? $data['billSums'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
    * Gets billSums
    *  账单记录，具体参考表2。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\BillSumInfoV2[]|null
    */
    public function getBillSums()
    {
        return $this->container['billSums'];
    }

    /**
    * Sets billSums
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\BillSumInfoV2[]|null $billSums 账单记录，具体参考表2。
    *
    * @return $this
    */
    public function setBillSums($billSums)
    {
        $this->container['billSums'] = $billSums;
        return $this;
    }

    /**
    * Gets count
    *  总记录数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 总记录数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets currency
    *  货币编码。 CNY：人民币。
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
    * @param string|null $currency 货币编码。 CNY：人民币。
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
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

