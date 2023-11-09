<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenIngressEipReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenIngressEipReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bandwidthSize  入公网带宽  单位：Mbit/s
    * bandwidthChargingMode  入公网带宽计费类型： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bandwidthSize' => 'int',
            'bandwidthChargingMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bandwidthSize  入公网带宽  单位：Mbit/s
    * bandwidthChargingMode  入公网带宽计费类型： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bandwidthSize' => 'int32',
        'bandwidthChargingMode' => null
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
    * bandwidthSize  入公网带宽  单位：Mbit/s
    * bandwidthChargingMode  入公网带宽计费类型： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bandwidthSize' => 'bandwidth_size',
            'bandwidthChargingMode' => 'bandwidth_charging_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bandwidthSize  入公网带宽  单位：Mbit/s
    * bandwidthChargingMode  入公网带宽计费类型： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $setters = [
            'bandwidthSize' => 'setBandwidthSize',
            'bandwidthChargingMode' => 'setBandwidthChargingMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bandwidthSize  入公网带宽  单位：Mbit/s
    * bandwidthChargingMode  入公网带宽计费类型： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @var string[]
    */
    protected static $getters = [
            'bandwidthSize' => 'getBandwidthSize',
            'bandwidthChargingMode' => 'getBandwidthChargingMode'
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
    const BANDWIDTH_CHARGING_MODE_BANDWIDTH = 'bandwidth';
    const BANDWIDTH_CHARGING_MODE_TRAFFIC = 'traffic';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBandwidthChargingModeAllowableValues()
    {
        return [
            self::BANDWIDTH_CHARGING_MODE_BANDWIDTH,
            self::BANDWIDTH_CHARGING_MODE_TRAFFIC,
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
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['bandwidthChargingMode'] = isset($data['bandwidthChargingMode']) ? $data['bandwidthChargingMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getBandwidthChargingModeAllowableValues();
                if (!is_null($this->container['bandwidthChargingMode']) && !in_array($this->container['bandwidthChargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bandwidthChargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets bandwidthSize
    *  入公网带宽  单位：Mbit/s
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 入公网带宽  单位：Mbit/s
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets bandwidthChargingMode
    *  入公网带宽计费类型： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @return string|null
    */
    public function getBandwidthChargingMode()
    {
        return $this->container['bandwidthChargingMode'];
    }

    /**
    * Sets bandwidthChargingMode
    *
    * @param string|null $bandwidthChargingMode 入公网带宽计费类型： - bandwidth：按带宽计费 - traffic：按流量计费
    *
    * @return $this
    */
    public function setBandwidthChargingMode($bandwidthChargingMode)
    {
        $this->container['bandwidthChargingMode'] = $bandwidthChargingMode;
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

