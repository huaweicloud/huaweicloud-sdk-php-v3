<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CostDataByDimension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CostDataByDimension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimensions  维度列表，具体请参见表 DimensionGroup。
    * costs  成本值，具体请参见表 Cost。
    * amountByCosts  此维度值对应整个时间跨度的成本汇总金额。
    * officialAmountByCosts  此维度值对应整个时间跨度的官网价汇总金额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimensions' => '\HuaweiCloud\SDK\Bss\V2\Model\DimensionGroup[]',
            'costs' => '\HuaweiCloud\SDK\Bss\V2\Model\Cost[]',
            'amountByCosts' => 'string',
            'officialAmountByCosts' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimensions  维度列表，具体请参见表 DimensionGroup。
    * costs  成本值，具体请参见表 Cost。
    * amountByCosts  此维度值对应整个时间跨度的成本汇总金额。
    * officialAmountByCosts  此维度值对应整个时间跨度的官网价汇总金额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimensions' => null,
        'costs' => null,
        'amountByCosts' => null,
        'officialAmountByCosts' => null
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
    * dimensions  维度列表，具体请参见表 DimensionGroup。
    * costs  成本值，具体请参见表 Cost。
    * amountByCosts  此维度值对应整个时间跨度的成本汇总金额。
    * officialAmountByCosts  此维度值对应整个时间跨度的官网价汇总金额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimensions' => 'dimensions',
            'costs' => 'costs',
            'amountByCosts' => 'amount_by_costs',
            'officialAmountByCosts' => 'official_amount_by_costs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimensions  维度列表，具体请参见表 DimensionGroup。
    * costs  成本值，具体请参见表 Cost。
    * amountByCosts  此维度值对应整个时间跨度的成本汇总金额。
    * officialAmountByCosts  此维度值对应整个时间跨度的官网价汇总金额。
    *
    * @var string[]
    */
    protected static $setters = [
            'dimensions' => 'setDimensions',
            'costs' => 'setCosts',
            'amountByCosts' => 'setAmountByCosts',
            'officialAmountByCosts' => 'setOfficialAmountByCosts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimensions  维度列表，具体请参见表 DimensionGroup。
    * costs  成本值，具体请参见表 Cost。
    * amountByCosts  此维度值对应整个时间跨度的成本汇总金额。
    * officialAmountByCosts  此维度值对应整个时间跨度的官网价汇总金额。
    *
    * @var string[]
    */
    protected static $getters = [
            'dimensions' => 'getDimensions',
            'costs' => 'getCosts',
            'amountByCosts' => 'getAmountByCosts',
            'officialAmountByCosts' => 'getOfficialAmountByCosts'
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
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['costs'] = isset($data['costs']) ? $data['costs'] : null;
        $this->container['amountByCosts'] = isset($data['amountByCosts']) ? $data['amountByCosts'] : null;
        $this->container['officialAmountByCosts'] = isset($data['officialAmountByCosts']) ? $data['officialAmountByCosts'] : null;
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
    * Gets dimensions
    *  维度列表，具体请参见表 DimensionGroup。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\DimensionGroup[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\DimensionGroup[]|null $dimensions 维度列表，具体请参见表 DimensionGroup。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets costs
    *  成本值，具体请参见表 Cost。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\Cost[]|null
    */
    public function getCosts()
    {
        return $this->container['costs'];
    }

    /**
    * Sets costs
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\Cost[]|null $costs 成本值，具体请参见表 Cost。
    *
    * @return $this
    */
    public function setCosts($costs)
    {
        $this->container['costs'] = $costs;
        return $this;
    }

    /**
    * Gets amountByCosts
    *  此维度值对应整个时间跨度的成本汇总金额。
    *
    * @return string|null
    */
    public function getAmountByCosts()
    {
        return $this->container['amountByCosts'];
    }

    /**
    * Sets amountByCosts
    *
    * @param string|null $amountByCosts 此维度值对应整个时间跨度的成本汇总金额。
    *
    * @return $this
    */
    public function setAmountByCosts($amountByCosts)
    {
        $this->container['amountByCosts'] = $amountByCosts;
        return $this;
    }

    /**
    * Gets officialAmountByCosts
    *  此维度值对应整个时间跨度的官网价汇总金额。
    *
    * @return string|null
    */
    public function getOfficialAmountByCosts()
    {
        return $this->container['officialAmountByCosts'];
    }

    /**
    * Sets officialAmountByCosts
    *
    * @param string|null $officialAmountByCosts 此维度值对应整个时间跨度的官网价汇总金额。
    *
    * @return $this
    */
    public function setOfficialAmountByCosts($officialAmountByCosts)
    {
        $this->container['officialAmountByCosts'] = $officialAmountByCosts;
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

