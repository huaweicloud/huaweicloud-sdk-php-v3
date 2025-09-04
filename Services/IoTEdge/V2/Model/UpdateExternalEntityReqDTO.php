<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateExternalEntityReqDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateExternalEntityReqDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'connectionType' => 'string',
            'mqttConnectionInfo' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\MqttConnectionInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'connectionType' => null,
        'mqttConnectionInfo' => null
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
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'connectionType' => 'connection_type',
            'mqttConnectionInfo' => 'mqtt_connection_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'connectionType' => 'setConnectionType',
            'mqttConnectionInfo' => 'setMqttConnectionInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  连接外部实体的协议类型
    * connectionType  连接类型
    * mqttConnectionInfo  mqttConnectionInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'connectionType' => 'getConnectionType',
            'mqttConnectionInfo' => 'getMqttConnectionInfo'
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['mqttConnectionInfo'] = isset($data['mqttConnectionInfo']) ? $data['mqttConnectionInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            if (!preg_match("/(MQTT|HTTPS)/", $this->container['protocol'])) {
                $invalidProperties[] = "invalid value for 'protocol', must be conform to the pattern /(MQTT|HTTPS)/.";
            }
        if ($this->container['connectionType'] === null) {
            $invalidProperties[] = "'connectionType' can't be null";
        }
            if (!preg_match("/(CLIENT|SERVER)/", $this->container['connectionType'])) {
                $invalidProperties[] = "invalid value for 'connectionType', must be conform to the pattern /(CLIENT|SERVER)/.";
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
    * Gets protocol
    *  连接外部实体的协议类型
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 连接外部实体的协议类型
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets connectionType
    *  连接类型
    *
    * @return string
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param string $connectionType 连接类型
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
        return $this;
    }

    /**
    * Gets mqttConnectionInfo
    *  mqttConnectionInfo
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\MqttConnectionInfo|null
    */
    public function getMqttConnectionInfo()
    {
        return $this->container['mqttConnectionInfo'];
    }

    /**
    * Sets mqttConnectionInfo
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\MqttConnectionInfo|null $mqttConnectionInfo mqttConnectionInfo
    *
    * @return $this
    */
    public function setMqttConnectionInfo($mqttConnectionInfo)
    {
        $this->container['mqttConnectionInfo'] = $mqttConnectionInfo;
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

