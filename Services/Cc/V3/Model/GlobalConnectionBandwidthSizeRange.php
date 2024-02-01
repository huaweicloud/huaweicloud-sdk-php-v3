<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalConnectionBandwidthSizeRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalConnectionBandwidthSizeRange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargeMode  描述计费类型，描述可选计费类型。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * min  全域互联带宽最小值，单位Mbit/s。
    * max  全域互联带宽最大值，单位Mbit/s。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargeMode' => 'string',
            'min' => 'int',
            'max' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargeMode  描述计费类型，描述可选计费类型。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * min  全域互联带宽最小值，单位Mbit/s。
    * max  全域互联带宽最大值，单位Mbit/s。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargeMode' => null,
        'min' => null,
        'max' => null
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
    * chargeMode  描述计费类型，描述可选计费类型。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * min  全域互联带宽最小值，单位Mbit/s。
    * max  全域互联带宽最大值，单位Mbit/s。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargeMode' => 'charge_mode',
            'min' => 'min',
            'max' => 'max'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargeMode  描述计费类型，描述可选计费类型。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * min  全域互联带宽最小值，单位Mbit/s。
    * max  全域互联带宽最大值，单位Mbit/s。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargeMode' => 'setChargeMode',
            'min' => 'setMin',
            'max' => 'setMax'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargeMode  描述计费类型，描述可选计费类型。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    * min  全域互联带宽最小值，单位Mbit/s。
    * max  全域互联带宽最大值，单位Mbit/s。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargeMode' => 'getChargeMode',
            'min' => 'getMin',
            'max' => 'getMax'
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
    const CHARGE_MODE_BWD = 'bwd';
    const CHARGE_MODE__95 = '95';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BWD,
            self::CHARGE_MODE__95,
        ];
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
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['min']) && ($this->container['min'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'min', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['min']) && ($this->container['min'] < 1)) {
                $invalidProperties[] = "invalid value for 'min', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['max']) && ($this->container['max'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'max', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['max']) && ($this->container['max'] < 1)) {
                $invalidProperties[] = "invalid value for 'max', must be bigger than or equal to 1.";
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
    * Gets chargeMode
    *  描述计费类型，描述可选计费类型。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 描述计费类型，描述可选计费类型。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets min
    *  全域互联带宽最小值，单位Mbit/s。
    *
    * @return int|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int|null $min 全域互联带宽最小值，单位Mbit/s。
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets max
    *  全域互联带宽最大值，单位Mbit/s。
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max 全域互联带宽最大值，单位Mbit/s。
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
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

