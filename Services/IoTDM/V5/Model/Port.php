<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Port implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Port';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appHttpsPort  **参数说明**：应用接入HTTPS协议端口，默认值：443。
    * appAmqpsPort  **参数说明**：应用接入AMQP协议端口, 默认值：5671。
    * appMqttsPort  **参数说明**：应用接入MQTTS协议端口, 默认值：8883。
    * deviceCoapPort  **参数说明**：设备接入COAP协议端口, 默认值：5683。
    * deviceCoapsPort  **参数说明**：设备接入COAPS协议端口, 默认值：5684。
    * deviceMqttPort  **参数说明**：设备接入MQTT协议端口, 默认值：1883。
    * deviceMqttsPort  **参数说明**：设备接入MQTTS协议端口, 默认值：8883。
    * deviceHttpsPort  **参数说明**：设备接入HTTPS协议端口, 默认值：443。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appHttpsPort' => 'int',
            'appAmqpsPort' => 'int',
            'appMqttsPort' => 'int',
            'deviceCoapPort' => 'int',
            'deviceCoapsPort' => 'int',
            'deviceMqttPort' => 'int',
            'deviceMqttsPort' => 'int',
            'deviceHttpsPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appHttpsPort  **参数说明**：应用接入HTTPS协议端口，默认值：443。
    * appAmqpsPort  **参数说明**：应用接入AMQP协议端口, 默认值：5671。
    * appMqttsPort  **参数说明**：应用接入MQTTS协议端口, 默认值：8883。
    * deviceCoapPort  **参数说明**：设备接入COAP协议端口, 默认值：5683。
    * deviceCoapsPort  **参数说明**：设备接入COAPS协议端口, 默认值：5684。
    * deviceMqttPort  **参数说明**：设备接入MQTT协议端口, 默认值：1883。
    * deviceMqttsPort  **参数说明**：设备接入MQTTS协议端口, 默认值：8883。
    * deviceHttpsPort  **参数说明**：设备接入HTTPS协议端口, 默认值：443。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appHttpsPort' => 'int32',
        'appAmqpsPort' => 'int32',
        'appMqttsPort' => 'int32',
        'deviceCoapPort' => 'int32',
        'deviceCoapsPort' => 'int32',
        'deviceMqttPort' => 'int32',
        'deviceMqttsPort' => 'int32',
        'deviceHttpsPort' => 'int32'
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
    * appHttpsPort  **参数说明**：应用接入HTTPS协议端口，默认值：443。
    * appAmqpsPort  **参数说明**：应用接入AMQP协议端口, 默认值：5671。
    * appMqttsPort  **参数说明**：应用接入MQTTS协议端口, 默认值：8883。
    * deviceCoapPort  **参数说明**：设备接入COAP协议端口, 默认值：5683。
    * deviceCoapsPort  **参数说明**：设备接入COAPS协议端口, 默认值：5684。
    * deviceMqttPort  **参数说明**：设备接入MQTT协议端口, 默认值：1883。
    * deviceMqttsPort  **参数说明**：设备接入MQTTS协议端口, 默认值：8883。
    * deviceHttpsPort  **参数说明**：设备接入HTTPS协议端口, 默认值：443。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appHttpsPort' => 'app_https_port',
            'appAmqpsPort' => 'app_amqps_port',
            'appMqttsPort' => 'app_mqtts_port',
            'deviceCoapPort' => 'device_coap_port',
            'deviceCoapsPort' => 'device_coaps_port',
            'deviceMqttPort' => 'device_mqtt_port',
            'deviceMqttsPort' => 'device_mqtts_port',
            'deviceHttpsPort' => 'device_https_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appHttpsPort  **参数说明**：应用接入HTTPS协议端口，默认值：443。
    * appAmqpsPort  **参数说明**：应用接入AMQP协议端口, 默认值：5671。
    * appMqttsPort  **参数说明**：应用接入MQTTS协议端口, 默认值：8883。
    * deviceCoapPort  **参数说明**：设备接入COAP协议端口, 默认值：5683。
    * deviceCoapsPort  **参数说明**：设备接入COAPS协议端口, 默认值：5684。
    * deviceMqttPort  **参数说明**：设备接入MQTT协议端口, 默认值：1883。
    * deviceMqttsPort  **参数说明**：设备接入MQTTS协议端口, 默认值：8883。
    * deviceHttpsPort  **参数说明**：设备接入HTTPS协议端口, 默认值：443。
    *
    * @var string[]
    */
    protected static $setters = [
            'appHttpsPort' => 'setAppHttpsPort',
            'appAmqpsPort' => 'setAppAmqpsPort',
            'appMqttsPort' => 'setAppMqttsPort',
            'deviceCoapPort' => 'setDeviceCoapPort',
            'deviceCoapsPort' => 'setDeviceCoapsPort',
            'deviceMqttPort' => 'setDeviceMqttPort',
            'deviceMqttsPort' => 'setDeviceMqttsPort',
            'deviceHttpsPort' => 'setDeviceHttpsPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appHttpsPort  **参数说明**：应用接入HTTPS协议端口，默认值：443。
    * appAmqpsPort  **参数说明**：应用接入AMQP协议端口, 默认值：5671。
    * appMqttsPort  **参数说明**：应用接入MQTTS协议端口, 默认值：8883。
    * deviceCoapPort  **参数说明**：设备接入COAP协议端口, 默认值：5683。
    * deviceCoapsPort  **参数说明**：设备接入COAPS协议端口, 默认值：5684。
    * deviceMqttPort  **参数说明**：设备接入MQTT协议端口, 默认值：1883。
    * deviceMqttsPort  **参数说明**：设备接入MQTTS协议端口, 默认值：8883。
    * deviceHttpsPort  **参数说明**：设备接入HTTPS协议端口, 默认值：443。
    *
    * @var string[]
    */
    protected static $getters = [
            'appHttpsPort' => 'getAppHttpsPort',
            'appAmqpsPort' => 'getAppAmqpsPort',
            'appMqttsPort' => 'getAppMqttsPort',
            'deviceCoapPort' => 'getDeviceCoapPort',
            'deviceCoapsPort' => 'getDeviceCoapsPort',
            'deviceMqttPort' => 'getDeviceMqttPort',
            'deviceMqttsPort' => 'getDeviceMqttsPort',
            'deviceHttpsPort' => 'getDeviceHttpsPort'
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
        $this->container['appHttpsPort'] = isset($data['appHttpsPort']) ? $data['appHttpsPort'] : null;
        $this->container['appAmqpsPort'] = isset($data['appAmqpsPort']) ? $data['appAmqpsPort'] : null;
        $this->container['appMqttsPort'] = isset($data['appMqttsPort']) ? $data['appMqttsPort'] : null;
        $this->container['deviceCoapPort'] = isset($data['deviceCoapPort']) ? $data['deviceCoapPort'] : null;
        $this->container['deviceCoapsPort'] = isset($data['deviceCoapsPort']) ? $data['deviceCoapsPort'] : null;
        $this->container['deviceMqttPort'] = isset($data['deviceMqttPort']) ? $data['deviceMqttPort'] : null;
        $this->container['deviceMqttsPort'] = isset($data['deviceMqttsPort']) ? $data['deviceMqttsPort'] : null;
        $this->container['deviceHttpsPort'] = isset($data['deviceHttpsPort']) ? $data['deviceHttpsPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appHttpsPort']) && ($this->container['appHttpsPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'appHttpsPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['appHttpsPort']) && ($this->container['appHttpsPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'appHttpsPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appAmqpsPort']) && ($this->container['appAmqpsPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'appAmqpsPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['appAmqpsPort']) && ($this->container['appAmqpsPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'appAmqpsPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appMqttsPort']) && ($this->container['appMqttsPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'appMqttsPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['appMqttsPort']) && ($this->container['appMqttsPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'appMqttsPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceCoapPort']) && ($this->container['deviceCoapPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'deviceCoapPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['deviceCoapPort']) && ($this->container['deviceCoapPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'deviceCoapPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceCoapsPort']) && ($this->container['deviceCoapsPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'deviceCoapsPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['deviceCoapsPort']) && ($this->container['deviceCoapsPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'deviceCoapsPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceMqttPort']) && ($this->container['deviceMqttPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'deviceMqttPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['deviceMqttPort']) && ($this->container['deviceMqttPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'deviceMqttPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceMqttsPort']) && ($this->container['deviceMqttsPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'deviceMqttsPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['deviceMqttsPort']) && ($this->container['deviceMqttsPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'deviceMqttsPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceHttpsPort']) && ($this->container['deviceHttpsPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'deviceHttpsPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['deviceHttpsPort']) && ($this->container['deviceHttpsPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'deviceHttpsPort', must be bigger than or equal to 0.";
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
    * Gets appHttpsPort
    *  **参数说明**：应用接入HTTPS协议端口，默认值：443。
    *
    * @return int|null
    */
    public function getAppHttpsPort()
    {
        return $this->container['appHttpsPort'];
    }

    /**
    * Sets appHttpsPort
    *
    * @param int|null $appHttpsPort **参数说明**：应用接入HTTPS协议端口，默认值：443。
    *
    * @return $this
    */
    public function setAppHttpsPort($appHttpsPort)
    {
        $this->container['appHttpsPort'] = $appHttpsPort;
        return $this;
    }

    /**
    * Gets appAmqpsPort
    *  **参数说明**：应用接入AMQP协议端口, 默认值：5671。
    *
    * @return int|null
    */
    public function getAppAmqpsPort()
    {
        return $this->container['appAmqpsPort'];
    }

    /**
    * Sets appAmqpsPort
    *
    * @param int|null $appAmqpsPort **参数说明**：应用接入AMQP协议端口, 默认值：5671。
    *
    * @return $this
    */
    public function setAppAmqpsPort($appAmqpsPort)
    {
        $this->container['appAmqpsPort'] = $appAmqpsPort;
        return $this;
    }

    /**
    * Gets appMqttsPort
    *  **参数说明**：应用接入MQTTS协议端口, 默认值：8883。
    *
    * @return int|null
    */
    public function getAppMqttsPort()
    {
        return $this->container['appMqttsPort'];
    }

    /**
    * Sets appMqttsPort
    *
    * @param int|null $appMqttsPort **参数说明**：应用接入MQTTS协议端口, 默认值：8883。
    *
    * @return $this
    */
    public function setAppMqttsPort($appMqttsPort)
    {
        $this->container['appMqttsPort'] = $appMqttsPort;
        return $this;
    }

    /**
    * Gets deviceCoapPort
    *  **参数说明**：设备接入COAP协议端口, 默认值：5683。
    *
    * @return int|null
    */
    public function getDeviceCoapPort()
    {
        return $this->container['deviceCoapPort'];
    }

    /**
    * Sets deviceCoapPort
    *
    * @param int|null $deviceCoapPort **参数说明**：设备接入COAP协议端口, 默认值：5683。
    *
    * @return $this
    */
    public function setDeviceCoapPort($deviceCoapPort)
    {
        $this->container['deviceCoapPort'] = $deviceCoapPort;
        return $this;
    }

    /**
    * Gets deviceCoapsPort
    *  **参数说明**：设备接入COAPS协议端口, 默认值：5684。
    *
    * @return int|null
    */
    public function getDeviceCoapsPort()
    {
        return $this->container['deviceCoapsPort'];
    }

    /**
    * Sets deviceCoapsPort
    *
    * @param int|null $deviceCoapsPort **参数说明**：设备接入COAPS协议端口, 默认值：5684。
    *
    * @return $this
    */
    public function setDeviceCoapsPort($deviceCoapsPort)
    {
        $this->container['deviceCoapsPort'] = $deviceCoapsPort;
        return $this;
    }

    /**
    * Gets deviceMqttPort
    *  **参数说明**：设备接入MQTT协议端口, 默认值：1883。
    *
    * @return int|null
    */
    public function getDeviceMqttPort()
    {
        return $this->container['deviceMqttPort'];
    }

    /**
    * Sets deviceMqttPort
    *
    * @param int|null $deviceMqttPort **参数说明**：设备接入MQTT协议端口, 默认值：1883。
    *
    * @return $this
    */
    public function setDeviceMqttPort($deviceMqttPort)
    {
        $this->container['deviceMqttPort'] = $deviceMqttPort;
        return $this;
    }

    /**
    * Gets deviceMqttsPort
    *  **参数说明**：设备接入MQTTS协议端口, 默认值：8883。
    *
    * @return int|null
    */
    public function getDeviceMqttsPort()
    {
        return $this->container['deviceMqttsPort'];
    }

    /**
    * Sets deviceMqttsPort
    *
    * @param int|null $deviceMqttsPort **参数说明**：设备接入MQTTS协议端口, 默认值：8883。
    *
    * @return $this
    */
    public function setDeviceMqttsPort($deviceMqttsPort)
    {
        $this->container['deviceMqttsPort'] = $deviceMqttsPort;
        return $this;
    }

    /**
    * Gets deviceHttpsPort
    *  **参数说明**：设备接入HTTPS协议端口, 默认值：443。
    *
    * @return int|null
    */
    public function getDeviceHttpsPort()
    {
        return $this->container['deviceHttpsPort'];
    }

    /**
    * Sets deviceHttpsPort
    *
    * @param int|null $deviceHttpsPort **参数说明**：设备接入HTTPS协议端口, 默认值：443。
    *
    * @return $this
    */
    public function setDeviceHttpsPort($deviceHttpsPort)
    {
        $this->container['deviceHttpsPort'] = $deviceHttpsPort;
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

