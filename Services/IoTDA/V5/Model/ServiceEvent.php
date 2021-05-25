<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceEvent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventType  设备事件类型。
    * paras  设备事件的参数列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventType' => 'string',
            'paras' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCommandPara[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventType  设备事件类型。
    * paras  设备事件的参数列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventType' => null,
        'paras' => null
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
    * eventType  设备事件类型。
    * paras  设备事件的参数列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventType' => 'event_type',
            'paras' => 'paras'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventType  设备事件类型。
    * paras  设备事件的参数列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventType' => 'setEventType',
            'paras' => 'setParas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventType  设备事件类型。
    * paras  设备事件的参数列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventType' => 'getEventType',
            'paras' => 'getParas'
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['paras'] = isset($data['paras']) ? $data['paras'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventType'] === null) {
            $invalidProperties[] = "'eventType' can't be null";
        }
            if (!preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/", $this->container['eventType'])) {
                $invalidProperties[] = "invalid value for 'eventType', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/.";
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
    * Gets eventType
    *  设备事件类型。
    *
    * @return string
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string $eventType 设备事件类型。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets paras
    *  设备事件的参数列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCommandPara[]|null
    */
    public function getParas()
    {
        return $this->container['paras'];
    }

    /**
    * Sets paras
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCommandPara[]|null $paras 设备事件的参数列表。
    *
    * @return $this
    */
    public function setParas($paras)
    {
        $this->container['paras'] = $paras;
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

