<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeProbeTimeoutConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeProbeTimeoutConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeout  超时时间
    * failureThreshold  失败阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeout' => 'int',
            'failureThreshold' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeout  超时时间
    * failureThreshold  失败阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeout' => 'int32',
        'failureThreshold' => 'int32'
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
    * timeout  超时时间
    * failureThreshold  失败阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeout' => 'timeout',
            'failureThreshold' => 'failure_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeout  超时时间
    * failureThreshold  失败阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'timeout' => 'setTimeout',
            'failureThreshold' => 'setFailureThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeout  超时时间
    * failureThreshold  失败阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'timeout' => 'getTimeout',
            'failureThreshold' => 'getFailureThreshold'
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
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['failureThreshold'] = isset($data['failureThreshold']) ? $data['failureThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] > 120)) {
                $invalidProperties[] = "invalid value for 'timeout', must be smaller than or equal to 120.";
            }
            if (!is_null($this->container['timeout']) && ($this->container['timeout'] < 5)) {
                $invalidProperties[] = "invalid value for 'timeout', must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['failureThreshold']) && ($this->container['failureThreshold'] > 100)) {
                $invalidProperties[] = "invalid value for 'failureThreshold', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['failureThreshold']) && ($this->container['failureThreshold'] < 1)) {
                $invalidProperties[] = "invalid value for 'failureThreshold', must be bigger than or equal to 1.";
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
    * Gets timeout
    *  超时时间
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 超时时间
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets failureThreshold
    *  失败阈值
    *
    * @return int|null
    */
    public function getFailureThreshold()
    {
        return $this->container['failureThreshold'];
    }

    /**
    * Sets failureThreshold
    *
    * @param int|null $failureThreshold 失败阈值
    *
    * @return $this
    */
    public function setFailureThreshold($failureThreshold)
    {
        $this->container['failureThreshold'] = $failureThreshold;
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

