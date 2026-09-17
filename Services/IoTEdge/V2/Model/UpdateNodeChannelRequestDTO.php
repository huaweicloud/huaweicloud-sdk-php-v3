<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNodeChannelRequestDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNodeChannelRequestDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mqttChannelDetail  mqttChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mqttChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateMqttNodeChannelDetail',
            'pulsarChannelDetail' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\UpdatePulsarNodeChannelDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mqttChannelDetail  mqttChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mqttChannelDetail' => null,
        'pulsarChannelDetail' => null
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
    * mqttChannelDetail  mqttChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mqttChannelDetail' => 'mqtt_channel_detail',
            'pulsarChannelDetail' => 'pulsar_channel_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mqttChannelDetail  mqttChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'mqttChannelDetail' => 'setMqttChannelDetail',
            'pulsarChannelDetail' => 'setPulsarChannelDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mqttChannelDetail  mqttChannelDetail
    * pulsarChannelDetail  pulsarChannelDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'mqttChannelDetail' => 'getMqttChannelDetail',
            'pulsarChannelDetail' => 'getPulsarChannelDetail'
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
        $this->container['mqttChannelDetail'] = isset($data['mqttChannelDetail']) ? $data['mqttChannelDetail'] : null;
        $this->container['pulsarChannelDetail'] = isset($data['pulsarChannelDetail']) ? $data['pulsarChannelDetail'] : null;
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
    * Gets mqttChannelDetail
    *  mqttChannelDetail
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateMqttNodeChannelDetail|null
    */
    public function getMqttChannelDetail()
    {
        return $this->container['mqttChannelDetail'];
    }

    /**
    * Sets mqttChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdateMqttNodeChannelDetail|null $mqttChannelDetail mqttChannelDetail
    *
    * @return $this
    */
    public function setMqttChannelDetail($mqttChannelDetail)
    {
        $this->container['mqttChannelDetail'] = $mqttChannelDetail;
        return $this;
    }

    /**
    * Gets pulsarChannelDetail
    *  pulsarChannelDetail
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdatePulsarNodeChannelDetail|null
    */
    public function getPulsarChannelDetail()
    {
        return $this->container['pulsarChannelDetail'];
    }

    /**
    * Sets pulsarChannelDetail
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\UpdatePulsarNodeChannelDetail|null $pulsarChannelDetail pulsarChannelDetail
    *
    * @return $this
    */
    public function setPulsarChannelDetail($pulsarChannelDetail)
    {
        $this->container['pulsarChannelDetail'] = $pulsarChannelDetail;
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

