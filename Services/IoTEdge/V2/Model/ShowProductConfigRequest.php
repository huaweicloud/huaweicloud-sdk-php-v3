<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProductConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProductConfigRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocolType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocolType' => null
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
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocolType' => 'protocol_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $setters = [
            'protocolType' => 'setProtocolType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocolType  协议类型
    *
    * @var string[]
    */
    protected static $getters = [
            'protocolType' => 'getProtocolType'
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
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protocolType'] === null) {
            $invalidProperties[] = "'protocolType' can't be null";
        }
            if ((mb_strlen($this->container['protocolType']) > 32)) {
                $invalidProperties[] = "invalid value for 'protocolType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['protocolType']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocolType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/(Modbus|ONVIF|MQTT|OPC-UA|OPC-DA)/", $this->container['protocolType'])) {
                $invalidProperties[] = "invalid value for 'protocolType', must be conform to the pattern /(Modbus|ONVIF|MQTT|OPC-UA|OPC-DA)/.";
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
    * Gets protocolType
    *  协议类型
    *
    * @return string
    */
    public function getProtocolType()
    {
        return $this->container['protocolType'];
    }

    /**
    * Sets protocolType
    *
    * @param string $protocolType 协议类型
    *
    * @return $this
    */
    public function setProtocolType($protocolType)
    {
        $this->container['protocolType'] = $protocolType;
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

