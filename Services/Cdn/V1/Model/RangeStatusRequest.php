<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RangeStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RangeStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rangeStatus  range状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rangeStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rangeStatus  range状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rangeStatus' => null
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
    * rangeStatus  range状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rangeStatus' => 'range_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rangeStatus  range状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $setters = [
            'rangeStatus' => 'setRangeStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rangeStatus  range状态（\"off\"/\"on\"）
    *
    * @var string[]
    */
    protected static $getters = [
            'rangeStatus' => 'getRangeStatus'
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
    const RANGE_STATUS_OFF = 'off';
    const RANGE_STATUS_ON = 'on';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRangeStatusAllowableValues()
    {
        return [
            self::RANGE_STATUS_OFF,
            self::RANGE_STATUS_ON,
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
        $this->container['rangeStatus'] = isset($data['rangeStatus']) ? $data['rangeStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['rangeStatus'] === null) {
            $invalidProperties[] = "'rangeStatus' can't be null";
        }
            $allowedValues = $this->getRangeStatusAllowableValues();
                if (!is_null($this->container['rangeStatus']) && !in_array($this->container['rangeStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'rangeStatus', must be one of '%s'",
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
    * Gets rangeStatus
    *  range状态（\"off\"/\"on\"）
    *
    * @return string
    */
    public function getRangeStatus()
    {
        return $this->container['rangeStatus'];
    }

    /**
    * Sets rangeStatus
    *
    * @param string $rangeStatus range状态（\"off\"/\"on\"）
    *
    * @return $this
    */
    public function setRangeStatus($rangeStatus)
    {
        $this->container['rangeStatus'] = $rangeStatus;
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

