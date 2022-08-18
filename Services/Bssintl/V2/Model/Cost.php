<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Cost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Cost';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeDimensionValue  时间维度值。 如按天维度，该值为yyyy-mm-dd如按月维度，该值为yyyy-mm
    * timeMeasureId  时间单位。 1：天2：月
    * amount  应付或实付的成本金额或均摊金额，具体取决于请求参数。
    * officialAmount  官网价金额。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeDimensionValue' => 'string',
            'timeMeasureId' => 'int',
            'amount' => 'string',
            'officialAmount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeDimensionValue  时间维度值。 如按天维度，该值为yyyy-mm-dd如按月维度，该值为yyyy-mm
    * timeMeasureId  时间单位。 1：天2：月
    * amount  应付或实付的成本金额或均摊金额，具体取决于请求参数。
    * officialAmount  官网价金额。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeDimensionValue' => null,
        'timeMeasureId' => 'int32',
        'amount' => null,
        'officialAmount' => null
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
    * timeDimensionValue  时间维度值。 如按天维度，该值为yyyy-mm-dd如按月维度，该值为yyyy-mm
    * timeMeasureId  时间单位。 1：天2：月
    * amount  应付或实付的成本金额或均摊金额，具体取决于请求参数。
    * officialAmount  官网价金额。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeDimensionValue' => 'time_dimension_value',
            'timeMeasureId' => 'time_measure_id',
            'amount' => 'amount',
            'officialAmount' => 'official_amount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeDimensionValue  时间维度值。 如按天维度，该值为yyyy-mm-dd如按月维度，该值为yyyy-mm
    * timeMeasureId  时间单位。 1：天2：月
    * amount  应付或实付的成本金额或均摊金额，具体取决于请求参数。
    * officialAmount  官网价金额。
    *
    * @var string[]
    */
    protected static $setters = [
            'timeDimensionValue' => 'setTimeDimensionValue',
            'timeMeasureId' => 'setTimeMeasureId',
            'amount' => 'setAmount',
            'officialAmount' => 'setOfficialAmount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeDimensionValue  时间维度值。 如按天维度，该值为yyyy-mm-dd如按月维度，该值为yyyy-mm
    * timeMeasureId  时间单位。 1：天2：月
    * amount  应付或实付的成本金额或均摊金额，具体取决于请求参数。
    * officialAmount  官网价金额。
    *
    * @var string[]
    */
    protected static $getters = [
            'timeDimensionValue' => 'getTimeDimensionValue',
            'timeMeasureId' => 'getTimeMeasureId',
            'amount' => 'getAmount',
            'officialAmount' => 'getOfficialAmount'
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
        $this->container['timeDimensionValue'] = isset($data['timeDimensionValue']) ? $data['timeDimensionValue'] : null;
        $this->container['timeMeasureId'] = isset($data['timeMeasureId']) ? $data['timeMeasureId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['officialAmount'] = isset($data['officialAmount']) ? $data['officialAmount'] : null;
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
    * Gets timeDimensionValue
    *  时间维度值。 如按天维度，该值为yyyy-mm-dd如按月维度，该值为yyyy-mm
    *
    * @return string|null
    */
    public function getTimeDimensionValue()
    {
        return $this->container['timeDimensionValue'];
    }

    /**
    * Sets timeDimensionValue
    *
    * @param string|null $timeDimensionValue 时间维度值。 如按天维度，该值为yyyy-mm-dd如按月维度，该值为yyyy-mm
    *
    * @return $this
    */
    public function setTimeDimensionValue($timeDimensionValue)
    {
        $this->container['timeDimensionValue'] = $timeDimensionValue;
        return $this;
    }

    /**
    * Gets timeMeasureId
    *  时间单位。 1：天2：月
    *
    * @return int|null
    */
    public function getTimeMeasureId()
    {
        return $this->container['timeMeasureId'];
    }

    /**
    * Sets timeMeasureId
    *
    * @param int|null $timeMeasureId 时间单位。 1：天2：月
    *
    * @return $this
    */
    public function setTimeMeasureId($timeMeasureId)
    {
        $this->container['timeMeasureId'] = $timeMeasureId;
        return $this;
    }

    /**
    * Gets amount
    *  应付或实付的成本金额或均摊金额，具体取决于请求参数。
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
    * @param string|null $amount 应付或实付的成本金额或均摊金额，具体取决于请求参数。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets officialAmount
    *  官网价金额。
    *
    * @return string|null
    */
    public function getOfficialAmount()
    {
        return $this->container['officialAmount'];
    }

    /**
    * Sets officialAmount
    *
    * @param string|null $officialAmount 官网价金额。
    *
    * @return $this
    */
    public function setOfficialAmount($officialAmount)
    {
        $this->container['officialAmount'] = $officialAmount;
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

