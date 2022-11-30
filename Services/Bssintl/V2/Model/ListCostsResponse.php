<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCostsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCostsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currency  货币。 USD：美元
    * totalCount  总条数。
    * costData  按天或按月的明细金额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currency' => 'string',
            'totalCount' => 'int',
            'costData' => '\HuaweiCloud\SDK\Bssintl\V2\Model\CostDataByDimension[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currency  货币。 USD：美元
    * totalCount  总条数。
    * costData  按天或按月的明细金额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currency' => null,
        'totalCount' => 'int32',
        'costData' => null
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
    * currency  货币。 USD：美元
    * totalCount  总条数。
    * costData  按天或按月的明细金额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currency' => 'currency',
            'totalCount' => 'total_count',
            'costData' => 'cost_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currency  货币。 USD：美元
    * totalCount  总条数。
    * costData  按天或按月的明细金额。
    *
    * @var string[]
    */
    protected static $setters = [
            'currency' => 'setCurrency',
            'totalCount' => 'setTotalCount',
            'costData' => 'setCostData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currency  货币。 USD：美元
    * totalCount  总条数。
    * costData  按天或按月的明细金额。
    *
    * @var string[]
    */
    protected static $getters = [
            'currency' => 'getCurrency',
            'totalCount' => 'getTotalCount',
            'costData' => 'getCostData'
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
        $this->container['costData'] = isset($data['costData']) ? $data['costData'] : null;
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
    *  货币。 USD：美元
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
    * @param string|null $currency 货币。 USD：美元
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
    *  总条数。
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
    * @param int|null $totalCount 总条数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets costData
    *  按天或按月的明细金额。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\CostDataByDimension[]|null
    */
    public function getCostData()
    {
        return $this->container['costData'];
    }

    /**
    * Sets costData
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\CostDataByDimension[]|null $costData 按天或按月的明细金额。
    *
    * @return $this
    */
    public function setCostData($costData)
    {
        $this->container['costData'] = $costData;
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

