<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Cmd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CMD';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。
    * commandBody  **参数说明**：设备命令参数，Json格式。 使用LWM2M协议设备命令示例：{\"value\":\"1\"}，里面是一个个健值对，每个健都是产品模型中命令的参数名（paraName）。 使用MQTT协议设备命令示例：{\"header\": {\"mode\": \"ACK\",\"from\": \"/users/testUser\",\"method\": \"SET_TEMPERATURE_READ_PERIOD\",\"to\":\"/devices/{device_id}/services/{service_id}\"},\"body\": {\"value\" : \"1\"}}。 - mode：必选，设备收到命令后是否需要回复确认消息，默认为ACK模式。ACK表示需要回复确认消息，NOACK表示不需要回复确认消息，其它值无效。 - from：可选，命令发送方的地址。App发起请求时格式为/users/{userId} ，应用服务器发起请求时格式为/{serviceName}，物联网平台发起请求时格式为/cloud/{serviceName}。 - to：可选，命令接收方的地址，格式为/devices/{device_id}/services/{service_id}。 - method：可选，产品模型中定义的命令名称。 - body：可选，命令的消息体，里面是一个个键值对，每个键都是产品模型中命令的参数名（paraName）。具体格式需要应用和设备约定。
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * bufferTimeout  **参数说明**：设备命令的缓存时间，单位为秒，表示物联网平台在把命令下发给设备前缓存命令的有效时间，超过这个时间后命令将不再下发，默认值为172800s（48小时）。如果buffer_timeout设置为0，则无论物联网平台上设置的命令下发模式是什么，该命令都会立即下发给设备。
    * responseTimeout  **参数说明**：命令响应的有效时间，单位为秒，表示设备接收到命令后，在response_timeout时间内响应有效，超过这个时间未收到命令的响应，则认为命令响应超时，默认值为1800s。
    * mode  **参数说明**：设备命令的下发模式，仅当buffer_timeout的值大于0时有效。  - ACTIVE：主动模式，物联网平台主动将命令下发给设备。 - PASSIVE：被动模式，物联网平台创建设备命令后，会直接缓存命令。等到设备再次上线或者上报上一条命令的执行结果后才下发命令。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'commandName' => 'string',
            'commandBody' => 'object',
            'serviceId' => 'string',
            'bufferTimeout' => 'int',
            'responseTimeout' => 'int',
            'mode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。
    * commandBody  **参数说明**：设备命令参数，Json格式。 使用LWM2M协议设备命令示例：{\"value\":\"1\"}，里面是一个个健值对，每个健都是产品模型中命令的参数名（paraName）。 使用MQTT协议设备命令示例：{\"header\": {\"mode\": \"ACK\",\"from\": \"/users/testUser\",\"method\": \"SET_TEMPERATURE_READ_PERIOD\",\"to\":\"/devices/{device_id}/services/{service_id}\"},\"body\": {\"value\" : \"1\"}}。 - mode：必选，设备收到命令后是否需要回复确认消息，默认为ACK模式。ACK表示需要回复确认消息，NOACK表示不需要回复确认消息，其它值无效。 - from：可选，命令发送方的地址。App发起请求时格式为/users/{userId} ，应用服务器发起请求时格式为/{serviceName}，物联网平台发起请求时格式为/cloud/{serviceName}。 - to：可选，命令接收方的地址，格式为/devices/{device_id}/services/{service_id}。 - method：可选，产品模型中定义的命令名称。 - body：可选，命令的消息体，里面是一个个键值对，每个键都是产品模型中命令的参数名（paraName）。具体格式需要应用和设备约定。
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * bufferTimeout  **参数说明**：设备命令的缓存时间，单位为秒，表示物联网平台在把命令下发给设备前缓存命令的有效时间，超过这个时间后命令将不再下发，默认值为172800s（48小时）。如果buffer_timeout设置为0，则无论物联网平台上设置的命令下发模式是什么，该命令都会立即下发给设备。
    * responseTimeout  **参数说明**：命令响应的有效时间，单位为秒，表示设备接收到命令后，在response_timeout时间内响应有效，超过这个时间未收到命令的响应，则认为命令响应超时，默认值为1800s。
    * mode  **参数说明**：设备命令的下发模式，仅当buffer_timeout的值大于0时有效。  - ACTIVE：主动模式，物联网平台主动将命令下发给设备。 - PASSIVE：被动模式，物联网平台创建设备命令后，会直接缓存命令。等到设备再次上线或者上报上一条命令的执行结果后才下发命令。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'commandName' => null,
        'commandBody' => null,
        'serviceId' => null,
        'bufferTimeout' => 'int32',
        'responseTimeout' => 'int32',
        'mode' => null
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
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。
    * commandBody  **参数说明**：设备命令参数，Json格式。 使用LWM2M协议设备命令示例：{\"value\":\"1\"}，里面是一个个健值对，每个健都是产品模型中命令的参数名（paraName）。 使用MQTT协议设备命令示例：{\"header\": {\"mode\": \"ACK\",\"from\": \"/users/testUser\",\"method\": \"SET_TEMPERATURE_READ_PERIOD\",\"to\":\"/devices/{device_id}/services/{service_id}\"},\"body\": {\"value\" : \"1\"}}。 - mode：必选，设备收到命令后是否需要回复确认消息，默认为ACK模式。ACK表示需要回复确认消息，NOACK表示不需要回复确认消息，其它值无效。 - from：可选，命令发送方的地址。App发起请求时格式为/users/{userId} ，应用服务器发起请求时格式为/{serviceName}，物联网平台发起请求时格式为/cloud/{serviceName}。 - to：可选，命令接收方的地址，格式为/devices/{device_id}/services/{service_id}。 - method：可选，产品模型中定义的命令名称。 - body：可选，命令的消息体，里面是一个个键值对，每个键都是产品模型中命令的参数名（paraName）。具体格式需要应用和设备约定。
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * bufferTimeout  **参数说明**：设备命令的缓存时间，单位为秒，表示物联网平台在把命令下发给设备前缓存命令的有效时间，超过这个时间后命令将不再下发，默认值为172800s（48小时）。如果buffer_timeout设置为0，则无论物联网平台上设置的命令下发模式是什么，该命令都会立即下发给设备。
    * responseTimeout  **参数说明**：命令响应的有效时间，单位为秒，表示设备接收到命令后，在response_timeout时间内响应有效，超过这个时间未收到命令的响应，则认为命令响应超时，默认值为1800s。
    * mode  **参数说明**：设备命令的下发模式，仅当buffer_timeout的值大于0时有效。  - ACTIVE：主动模式，物联网平台主动将命令下发给设备。 - PASSIVE：被动模式，物联网平台创建设备命令后，会直接缓存命令。等到设备再次上线或者上报上一条命令的执行结果后才下发命令。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'commandName' => 'command_name',
            'commandBody' => 'command_body',
            'serviceId' => 'service_id',
            'bufferTimeout' => 'buffer_timeout',
            'responseTimeout' => 'response_timeout',
            'mode' => 'mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。
    * commandBody  **参数说明**：设备命令参数，Json格式。 使用LWM2M协议设备命令示例：{\"value\":\"1\"}，里面是一个个健值对，每个健都是产品模型中命令的参数名（paraName）。 使用MQTT协议设备命令示例：{\"header\": {\"mode\": \"ACK\",\"from\": \"/users/testUser\",\"method\": \"SET_TEMPERATURE_READ_PERIOD\",\"to\":\"/devices/{device_id}/services/{service_id}\"},\"body\": {\"value\" : \"1\"}}。 - mode：必选，设备收到命令后是否需要回复确认消息，默认为ACK模式。ACK表示需要回复确认消息，NOACK表示不需要回复确认消息，其它值无效。 - from：可选，命令发送方的地址。App发起请求时格式为/users/{userId} ，应用服务器发起请求时格式为/{serviceName}，物联网平台发起请求时格式为/cloud/{serviceName}。 - to：可选，命令接收方的地址，格式为/devices/{device_id}/services/{service_id}。 - method：可选，产品模型中定义的命令名称。 - body：可选，命令的消息体，里面是一个个键值对，每个键都是产品模型中命令的参数名（paraName）。具体格式需要应用和设备约定。
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * bufferTimeout  **参数说明**：设备命令的缓存时间，单位为秒，表示物联网平台在把命令下发给设备前缓存命令的有效时间，超过这个时间后命令将不再下发，默认值为172800s（48小时）。如果buffer_timeout设置为0，则无论物联网平台上设置的命令下发模式是什么，该命令都会立即下发给设备。
    * responseTimeout  **参数说明**：命令响应的有效时间，单位为秒，表示设备接收到命令后，在response_timeout时间内响应有效，超过这个时间未收到命令的响应，则认为命令响应超时，默认值为1800s。
    * mode  **参数说明**：设备命令的下发模式，仅当buffer_timeout的值大于0时有效。  - ACTIVE：主动模式，物联网平台主动将命令下发给设备。 - PASSIVE：被动模式，物联网平台创建设备命令后，会直接缓存命令。等到设备再次上线或者上报上一条命令的执行结果后才下发命令。
    *
    * @var string[]
    */
    protected static $setters = [
            'commandName' => 'setCommandName',
            'commandBody' => 'setCommandBody',
            'serviceId' => 'setServiceId',
            'bufferTimeout' => 'setBufferTimeout',
            'responseTimeout' => 'setResponseTimeout',
            'mode' => 'setMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * commandName  **参数说明**：设备命令名称，在设备关联的产品模型中定义。
    * commandBody  **参数说明**：设备命令参数，Json格式。 使用LWM2M协议设备命令示例：{\"value\":\"1\"}，里面是一个个健值对，每个健都是产品模型中命令的参数名（paraName）。 使用MQTT协议设备命令示例：{\"header\": {\"mode\": \"ACK\",\"from\": \"/users/testUser\",\"method\": \"SET_TEMPERATURE_READ_PERIOD\",\"to\":\"/devices/{device_id}/services/{service_id}\"},\"body\": {\"value\" : \"1\"}}。 - mode：必选，设备收到命令后是否需要回复确认消息，默认为ACK模式。ACK表示需要回复确认消息，NOACK表示不需要回复确认消息，其它值无效。 - from：可选，命令发送方的地址。App发起请求时格式为/users/{userId} ，应用服务器发起请求时格式为/{serviceName}，物联网平台发起请求时格式为/cloud/{serviceName}。 - to：可选，命令接收方的地址，格式为/devices/{device_id}/services/{service_id}。 - method：可选，产品模型中定义的命令名称。 - body：可选，命令的消息体，里面是一个个键值对，每个键都是产品模型中命令的参数名（paraName）。具体格式需要应用和设备约定。
    * serviceId  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    * bufferTimeout  **参数说明**：设备命令的缓存时间，单位为秒，表示物联网平台在把命令下发给设备前缓存命令的有效时间，超过这个时间后命令将不再下发，默认值为172800s（48小时）。如果buffer_timeout设置为0，则无论物联网平台上设置的命令下发模式是什么，该命令都会立即下发给设备。
    * responseTimeout  **参数说明**：命令响应的有效时间，单位为秒，表示设备接收到命令后，在response_timeout时间内响应有效，超过这个时间未收到命令的响应，则认为命令响应超时，默认值为1800s。
    * mode  **参数说明**：设备命令的下发模式，仅当buffer_timeout的值大于0时有效。  - ACTIVE：主动模式，物联网平台主动将命令下发给设备。 - PASSIVE：被动模式，物联网平台创建设备命令后，会直接缓存命令。等到设备再次上线或者上报上一条命令的执行结果后才下发命令。
    *
    * @var string[]
    */
    protected static $getters = [
            'commandName' => 'getCommandName',
            'commandBody' => 'getCommandBody',
            'serviceId' => 'getServiceId',
            'bufferTimeout' => 'getBufferTimeout',
            'responseTimeout' => 'getResponseTimeout',
            'mode' => 'getMode'
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
        $this->container['commandName'] = isset($data['commandName']) ? $data['commandName'] : null;
        $this->container['commandBody'] = isset($data['commandBody']) ? $data['commandBody'] : null;
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['bufferTimeout'] = isset($data['bufferTimeout']) ? $data['bufferTimeout'] : 172800;
        $this->container['responseTimeout'] = isset($data['responseTimeout']) ? $data['responseTimeout'] : 1800;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['commandName'] === null) {
            $invalidProperties[] = "'commandName' can't be null";
        }
            if ((mb_strlen($this->container['commandName']) > 128)) {
                $invalidProperties[] = "invalid value for 'commandName', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['commandBody'] === null) {
            $invalidProperties[] = "'commandBody' can't be null";
        }
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
            if ((mb_strlen($this->container['serviceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bufferTimeout']) && ($this->container['bufferTimeout'] > 31536000)) {
                $invalidProperties[] = "invalid value for 'bufferTimeout', must be smaller than or equal to 31536000.";
            }
            if (!is_null($this->container['bufferTimeout']) && ($this->container['bufferTimeout'] < 0)) {
                $invalidProperties[] = "invalid value for 'bufferTimeout', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['responseTimeout']) && ($this->container['responseTimeout'] > 31536000)) {
                $invalidProperties[] = "invalid value for 'responseTimeout', must be smaller than or equal to 31536000.";
            }
            if (!is_null($this->container['responseTimeout']) && ($this->container['responseTimeout'] < 1)) {
                $invalidProperties[] = "invalid value for 'responseTimeout', must be bigger than or equal to 1.";
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
    * Gets commandName
    *  **参数说明**：设备命令名称，在设备关联的产品模型中定义。
    *
    * @return string
    */
    public function getCommandName()
    {
        return $this->container['commandName'];
    }

    /**
    * Sets commandName
    *
    * @param string $commandName **参数说明**：设备命令名称，在设备关联的产品模型中定义。
    *
    * @return $this
    */
    public function setCommandName($commandName)
    {
        $this->container['commandName'] = $commandName;
        return $this;
    }

    /**
    * Gets commandBody
    *  **参数说明**：设备命令参数，Json格式。 使用LWM2M协议设备命令示例：{\"value\":\"1\"}，里面是一个个健值对，每个健都是产品模型中命令的参数名（paraName）。 使用MQTT协议设备命令示例：{\"header\": {\"mode\": \"ACK\",\"from\": \"/users/testUser\",\"method\": \"SET_TEMPERATURE_READ_PERIOD\",\"to\":\"/devices/{device_id}/services/{service_id}\"},\"body\": {\"value\" : \"1\"}}。 - mode：必选，设备收到命令后是否需要回复确认消息，默认为ACK模式。ACK表示需要回复确认消息，NOACK表示不需要回复确认消息，其它值无效。 - from：可选，命令发送方的地址。App发起请求时格式为/users/{userId} ，应用服务器发起请求时格式为/{serviceName}，物联网平台发起请求时格式为/cloud/{serviceName}。 - to：可选，命令接收方的地址，格式为/devices/{device_id}/services/{service_id}。 - method：可选，产品模型中定义的命令名称。 - body：可选，命令的消息体，里面是一个个键值对，每个键都是产品模型中命令的参数名（paraName）。具体格式需要应用和设备约定。
    *
    * @return object
    */
    public function getCommandBody()
    {
        return $this->container['commandBody'];
    }

    /**
    * Sets commandBody
    *
    * @param object $commandBody **参数说明**：设备命令参数，Json格式。 使用LWM2M协议设备命令示例：{\"value\":\"1\"}，里面是一个个健值对，每个健都是产品模型中命令的参数名（paraName）。 使用MQTT协议设备命令示例：{\"header\": {\"mode\": \"ACK\",\"from\": \"/users/testUser\",\"method\": \"SET_TEMPERATURE_READ_PERIOD\",\"to\":\"/devices/{device_id}/services/{service_id}\"},\"body\": {\"value\" : \"1\"}}。 - mode：必选，设备收到命令后是否需要回复确认消息，默认为ACK模式。ACK表示需要回复确认消息，NOACK表示不需要回复确认消息，其它值无效。 - from：可选，命令发送方的地址。App发起请求时格式为/users/{userId} ，应用服务器发起请求时格式为/{serviceName}，物联网平台发起请求时格式为/cloud/{serviceName}。 - to：可选，命令接收方的地址，格式为/devices/{device_id}/services/{service_id}。 - method：可选，产品模型中定义的命令名称。 - body：可选，命令的消息体，里面是一个个键值对，每个键都是产品模型中命令的参数名（paraName）。具体格式需要应用和设备约定。
    *
    * @return $this
    */
    public function setCommandBody($commandBody)
    {
        $this->container['commandBody'] = $commandBody;
        return $this;
    }

    /**
    * Gets serviceId
    *  **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    *
    * @return string
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string $serviceId **参数说明**：设备命令所属的设备服务ID，在设备关联的产品模型中定义。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets bufferTimeout
    *  **参数说明**：设备命令的缓存时间，单位为秒，表示物联网平台在把命令下发给设备前缓存命令的有效时间，超过这个时间后命令将不再下发，默认值为172800s（48小时）。如果buffer_timeout设置为0，则无论物联网平台上设置的命令下发模式是什么，该命令都会立即下发给设备。
    *
    * @return int|null
    */
    public function getBufferTimeout()
    {
        return $this->container['bufferTimeout'];
    }

    /**
    * Sets bufferTimeout
    *
    * @param int|null $bufferTimeout **参数说明**：设备命令的缓存时间，单位为秒，表示物联网平台在把命令下发给设备前缓存命令的有效时间，超过这个时间后命令将不再下发，默认值为172800s（48小时）。如果buffer_timeout设置为0，则无论物联网平台上设置的命令下发模式是什么，该命令都会立即下发给设备。
    *
    * @return $this
    */
    public function setBufferTimeout($bufferTimeout)
    {
        $this->container['bufferTimeout'] = $bufferTimeout;
        return $this;
    }

    /**
    * Gets responseTimeout
    *  **参数说明**：命令响应的有效时间，单位为秒，表示设备接收到命令后，在response_timeout时间内响应有效，超过这个时间未收到命令的响应，则认为命令响应超时，默认值为1800s。
    *
    * @return int|null
    */
    public function getResponseTimeout()
    {
        return $this->container['responseTimeout'];
    }

    /**
    * Sets responseTimeout
    *
    * @param int|null $responseTimeout **参数说明**：命令响应的有效时间，单位为秒，表示设备接收到命令后，在response_timeout时间内响应有效，超过这个时间未收到命令的响应，则认为命令响应超时，默认值为1800s。
    *
    * @return $this
    */
    public function setResponseTimeout($responseTimeout)
    {
        $this->container['responseTimeout'] = $responseTimeout;
        return $this;
    }

    /**
    * Gets mode
    *  **参数说明**：设备命令的下发模式，仅当buffer_timeout的值大于0时有效。  - ACTIVE：主动模式，物联网平台主动将命令下发给设备。 - PASSIVE：被动模式，物联网平台创建设备命令后，会直接缓存命令。等到设备再次上线或者上报上一条命令的执行结果后才下发命令。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode **参数说明**：设备命令的下发模式，仅当buffer_timeout的值大于0时有效。  - ACTIVE：主动模式，物联网平台主动将命令下发给设备。 - PASSIVE：被动模式，物联网平台创建设备命令后，会直接缓存命令。等到设备再次上线或者上报上一条命令的执行结果后才下发命令。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
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

