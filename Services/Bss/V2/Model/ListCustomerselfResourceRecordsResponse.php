<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCustomerselfResourceRecordsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCustomerselfResourceRecordsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * feeRecords  资源费用记录数据。 具体请参见表3。
    * totalCount  结果集数量，只有成功才返回这个参数。
    * currency  货币单位代码： CNY：人民币
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'feeRecords' => '\HuaweiCloud\SDK\Bss\V2\Model\ResFeeRecordV2[]',
            'totalCount' => 'int',
            'currency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * feeRecords  资源费用记录数据。 具体请参见表3。
    * totalCount  结果集数量，只有成功才返回这个参数。
    * currency  货币单位代码： CNY：人民币
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'feeRecords' => null,
        'totalCount' => 'int32',
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
    * feeRecords  资源费用记录数据。 具体请参见表3。
    * totalCount  结果集数量，只有成功才返回这个参数。
    * currency  货币单位代码： CNY：人民币
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'feeRecords' => 'fee_records',
            'totalCount' => 'total_count',
            'currency' => 'currency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * feeRecords  资源费用记录数据。 具体请参见表3。
    * totalCount  结果集数量，只有成功才返回这个参数。
    * currency  货币单位代码： CNY：人民币
    *
    * @var string[]
    */
    protected static $setters = [
            'feeRecords' => 'setFeeRecords',
            'totalCount' => 'setTotalCount',
            'currency' => 'setCurrency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * feeRecords  资源费用记录数据。 具体请参见表3。
    * totalCount  结果集数量，只有成功才返回这个参数。
    * currency  货币单位代码： CNY：人民币
    *
    * @var string[]
    */
    protected static $getters = [
            'feeRecords' => 'getFeeRecords',
            'totalCount' => 'getTotalCount',
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
        $this->container['feeRecords'] = isset($data['feeRecords']) ? $data['feeRecords'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets feeRecords
    *  资源费用记录数据。 具体请参见表3。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\ResFeeRecordV2[]|null
    */
    public function getFeeRecords()
    {
        return $this->container['feeRecords'];
    }

    /**
    * Sets feeRecords
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\ResFeeRecordV2[]|null $feeRecords 资源费用记录数据。 具体请参见表3。
    *
    * @return $this
    */
    public function setFeeRecords($feeRecords)
    {
        $this->container['feeRecords'] = $feeRecords;
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

