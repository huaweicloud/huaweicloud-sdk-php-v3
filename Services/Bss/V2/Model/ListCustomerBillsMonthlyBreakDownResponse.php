<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomerBillsMonthlyBreakDownResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomerBillsMonthlyBreakDownResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currency  货币单位代码： CNY：人民币
    * totalCount  结果集数量，只有成功才返回这个参数。
    * details  分摊成本记录数据。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currency' => 'string',
            'totalCount' => 'int',
            'details' => '\HuaweiCloud\SDK\Bss\V2\Model\NvlCostAnalysedBillDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currency  货币单位代码： CNY：人民币
    * totalCount  结果集数量，只有成功才返回这个参数。
    * details  分摊成本记录数据。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currency' => null,
        'totalCount' => 'int32',
        'details' => null
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
    * currency  货币单位代码： CNY：人民币
    * totalCount  结果集数量，只有成功才返回这个参数。
    * details  分摊成本记录数据。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currency' => 'currency',
            'totalCount' => 'total_count',
            'details' => 'details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currency  货币单位代码： CNY：人民币
    * totalCount  结果集数量，只有成功才返回这个参数。
    * details  分摊成本记录数据。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $setters = [
            'currency' => 'setCurrency',
            'totalCount' => 'setTotalCount',
            'details' => 'setDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currency  货币单位代码： CNY：人民币
    * totalCount  结果集数量，只有成功才返回这个参数。
    * details  分摊成本记录数据。 具体请参见表3。
    *
    * @var string[]
    */
    protected static $getters = [
            'currency' => 'getCurrency',
            'totalCount' => 'getTotalCount',
            'details' => 'getDetails'
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
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
    * Gets currency
    *  货币单位代码： CNY：人民币
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
    * @param string|null $currency 货币单位代码： CNY：人民币
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets totalCount
    *  结果集数量，只有成功才返回这个参数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 结果集数量，只有成功才返回这个参数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets details
    *  分摊成本记录数据。 具体请参见表3。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\NvlCostAnalysedBillDetail[]|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\NvlCostAnalysedBillDetail[]|null $details 分摊成本记录数据。 具体请参见表3。
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
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

