<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClickHouseSlowLogSensitiveStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClickHouseSlowLogSensitiveStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * openSlowLogSwitch  慢日志脱敏开关。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'openSlowLogSwitch' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * openSlowLogSwitch  慢日志脱敏开关。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'openSlowLogSwitch' => null
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
    * openSlowLogSwitch  慢日志脱敏开关。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'openSlowLogSwitch' => 'open_slow_log_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * openSlowLogSwitch  慢日志脱敏开关。
    *
    * @var string[]
    */
    protected static $setters = [
            'openSlowLogSwitch' => 'setOpenSlowLogSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * openSlowLogSwitch  慢日志脱敏开关。
    *
    * @var string[]
    */
    protected static $getters = [
            'openSlowLogSwitch' => 'getOpenSlowLogSwitch'
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
        $this->container['openSlowLogSwitch'] = isset($data['openSlowLogSwitch']) ? $data['openSlowLogSwitch'] : null;
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
    * Gets openSlowLogSwitch
    *  慢日志脱敏开关。
    *
    * @return string|null
    */
    public function getOpenSlowLogSwitch()
    {
        return $this->container['openSlowLogSwitch'];
    }

    /**
    * Sets openSlowLogSwitch
    *
    * @param string|null $openSlowLogSwitch 慢日志脱敏开关。
    *
    * @return $this
    */
    public function setOpenSlowLogSwitch($openSlowLogSwitch)
    {
        $this->container['openSlowLogSwitch'] = $openSlowLogSwitch;
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

