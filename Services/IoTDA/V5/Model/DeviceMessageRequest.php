<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceMessageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceMessageRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID），同一个设备下唯一， 如果用户填写的id在设备下不唯一， 则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：消息名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * message  **参数说明**：消息内容，支持string和json格式。
    * properties  properties
    * encoding  **参数说明**：消息内容编码格式。默认值none。 **取值范围**： - none  - base64
    * payloadFormat  **参数说明**：有效负载格式，在消息内容编码格式为none时有效。默认值standard（平台封装的标准格式）。 **取值范围**： - standard  - raw：直接将消息内容作为有效负载下发。
    * topic  **参数说明**：消息下行到设备的自定义topic后缀, 可选， 仅适用于MQTT协议接入的设备。 用户只能填写在租户产品界面配置的topic, 否则会校验不通过。 平台给消息topic添加的前缀为$oc/devices/{device_id}/user/， 用户可以在前缀的基础上增加自定义部分， 如增加messageDown，则平台拼接前缀后完整的topic为 $oc/devices/{device_id}/user/messageDown，其中device_id以实际设备的网关id替代。 如果用户指定该topic，消息会通过该topic下行到设备，如果用户不指定， 则消息通过系统默认的topic下行到设备,系统默认的topic格式为： $oc/devices/{device_id}/sys/messages/down。此字段与topic_full_name字段只可填写一个。
    * topicFullName  **参数说明**：消息下行到设备的完整topic名称, 可选。用户需要下发用户自定义的topic给设备时，可以使用该参数指定完整的topic名称，物联网平台不校验该topic是否在平台定义，直接透传给设备。设备需要提前订阅该topic。此字段与topic字段只可填写一个。
    * ttl  **参数说明**：下发消息在平台缓存的老化时间，时间单位是分钟，默认值1440；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'messageId' => 'string',
            'name' => 'string',
            'message' => 'object',
            'properties' => '\HuaweiCloud\SDK\IoTDA\V5\Model\PropertiesDTO',
            'encoding' => 'string',
            'payloadFormat' => 'string',
            'topic' => 'string',
            'topicFullName' => 'string',
            'ttl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID），同一个设备下唯一， 如果用户填写的id在设备下不唯一， 则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：消息名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * message  **参数说明**：消息内容，支持string和json格式。
    * properties  properties
    * encoding  **参数说明**：消息内容编码格式。默认值none。 **取值范围**： - none  - base64
    * payloadFormat  **参数说明**：有效负载格式，在消息内容编码格式为none时有效。默认值standard（平台封装的标准格式）。 **取值范围**： - standard  - raw：直接将消息内容作为有效负载下发。
    * topic  **参数说明**：消息下行到设备的自定义topic后缀, 可选， 仅适用于MQTT协议接入的设备。 用户只能填写在租户产品界面配置的topic, 否则会校验不通过。 平台给消息topic添加的前缀为$oc/devices/{device_id}/user/， 用户可以在前缀的基础上增加自定义部分， 如增加messageDown，则平台拼接前缀后完整的topic为 $oc/devices/{device_id}/user/messageDown，其中device_id以实际设备的网关id替代。 如果用户指定该topic，消息会通过该topic下行到设备，如果用户不指定， 则消息通过系统默认的topic下行到设备,系统默认的topic格式为： $oc/devices/{device_id}/sys/messages/down。此字段与topic_full_name字段只可填写一个。
    * topicFullName  **参数说明**：消息下行到设备的完整topic名称, 可选。用户需要下发用户自定义的topic给设备时，可以使用该参数指定完整的topic名称，物联网平台不校验该topic是否在平台定义，直接透传给设备。设备需要提前订阅该topic。此字段与topic字段只可填写一个。
    * ttl  **参数说明**：下发消息在平台缓存的老化时间，时间单位是分钟，默认值1440；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'messageId' => null,
        'name' => null,
        'message' => null,
        'properties' => null,
        'encoding' => null,
        'payloadFormat' => null,
        'topic' => null,
        'topicFullName' => null,
        'ttl' => 'int32'
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
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID），同一个设备下唯一， 如果用户填写的id在设备下不唯一， 则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：消息名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * message  **参数说明**：消息内容，支持string和json格式。
    * properties  properties
    * encoding  **参数说明**：消息内容编码格式。默认值none。 **取值范围**： - none  - base64
    * payloadFormat  **参数说明**：有效负载格式，在消息内容编码格式为none时有效。默认值standard（平台封装的标准格式）。 **取值范围**： - standard  - raw：直接将消息内容作为有效负载下发。
    * topic  **参数说明**：消息下行到设备的自定义topic后缀, 可选， 仅适用于MQTT协议接入的设备。 用户只能填写在租户产品界面配置的topic, 否则会校验不通过。 平台给消息topic添加的前缀为$oc/devices/{device_id}/user/， 用户可以在前缀的基础上增加自定义部分， 如增加messageDown，则平台拼接前缀后完整的topic为 $oc/devices/{device_id}/user/messageDown，其中device_id以实际设备的网关id替代。 如果用户指定该topic，消息会通过该topic下行到设备，如果用户不指定， 则消息通过系统默认的topic下行到设备,系统默认的topic格式为： $oc/devices/{device_id}/sys/messages/down。此字段与topic_full_name字段只可填写一个。
    * topicFullName  **参数说明**：消息下行到设备的完整topic名称, 可选。用户需要下发用户自定义的topic给设备时，可以使用该参数指定完整的topic名称，物联网平台不校验该topic是否在平台定义，直接透传给设备。设备需要提前订阅该topic。此字段与topic字段只可填写一个。
    * ttl  **参数说明**：下发消息在平台缓存的老化时间，时间单位是分钟，默认值1440；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'messageId' => 'message_id',
            'name' => 'name',
            'message' => 'message',
            'properties' => 'properties',
            'encoding' => 'encoding',
            'payloadFormat' => 'payload_format',
            'topic' => 'topic',
            'topicFullName' => 'topic_full_name',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID），同一个设备下唯一， 如果用户填写的id在设备下不唯一， 则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：消息名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * message  **参数说明**：消息内容，支持string和json格式。
    * properties  properties
    * encoding  **参数说明**：消息内容编码格式。默认值none。 **取值范围**： - none  - base64
    * payloadFormat  **参数说明**：有效负载格式，在消息内容编码格式为none时有效。默认值standard（平台封装的标准格式）。 **取值范围**： - standard  - raw：直接将消息内容作为有效负载下发。
    * topic  **参数说明**：消息下行到设备的自定义topic后缀, 可选， 仅适用于MQTT协议接入的设备。 用户只能填写在租户产品界面配置的topic, 否则会校验不通过。 平台给消息topic添加的前缀为$oc/devices/{device_id}/user/， 用户可以在前缀的基础上增加自定义部分， 如增加messageDown，则平台拼接前缀后完整的topic为 $oc/devices/{device_id}/user/messageDown，其中device_id以实际设备的网关id替代。 如果用户指定该topic，消息会通过该topic下行到设备，如果用户不指定， 则消息通过系统默认的topic下行到设备,系统默认的topic格式为： $oc/devices/{device_id}/sys/messages/down。此字段与topic_full_name字段只可填写一个。
    * topicFullName  **参数说明**：消息下行到设备的完整topic名称, 可选。用户需要下发用户自定义的topic给设备时，可以使用该参数指定完整的topic名称，物联网平台不校验该topic是否在平台定义，直接透传给设备。设备需要提前订阅该topic。此字段与topic字段只可填写一个。
    * ttl  **参数说明**：下发消息在平台缓存的老化时间，时间单位是分钟，默认值1440；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天
    *
    * @var string[]
    */
    protected static $setters = [
            'messageId' => 'setMessageId',
            'name' => 'setName',
            'message' => 'setMessage',
            'properties' => 'setProperties',
            'encoding' => 'setEncoding',
            'payloadFormat' => 'setPayloadFormat',
            'topic' => 'setTopic',
            'topicFullName' => 'setTopicFullName',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID），同一个设备下唯一， 如果用户填写的id在设备下不唯一， 则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：消息名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * message  **参数说明**：消息内容，支持string和json格式。
    * properties  properties
    * encoding  **参数说明**：消息内容编码格式。默认值none。 **取值范围**： - none  - base64
    * payloadFormat  **参数说明**：有效负载格式，在消息内容编码格式为none时有效。默认值standard（平台封装的标准格式）。 **取值范围**： - standard  - raw：直接将消息内容作为有效负载下发。
    * topic  **参数说明**：消息下行到设备的自定义topic后缀, 可选， 仅适用于MQTT协议接入的设备。 用户只能填写在租户产品界面配置的topic, 否则会校验不通过。 平台给消息topic添加的前缀为$oc/devices/{device_id}/user/， 用户可以在前缀的基础上增加自定义部分， 如增加messageDown，则平台拼接前缀后完整的topic为 $oc/devices/{device_id}/user/messageDown，其中device_id以实际设备的网关id替代。 如果用户指定该topic，消息会通过该topic下行到设备，如果用户不指定， 则消息通过系统默认的topic下行到设备,系统默认的topic格式为： $oc/devices/{device_id}/sys/messages/down。此字段与topic_full_name字段只可填写一个。
    * topicFullName  **参数说明**：消息下行到设备的完整topic名称, 可选。用户需要下发用户自定义的topic给设备时，可以使用该参数指定完整的topic名称，物联网平台不校验该topic是否在平台定义，直接透传给设备。设备需要提前订阅该topic。此字段与topic字段只可填写一个。
    * ttl  **参数说明**：下发消息在平台缓存的老化时间，时间单位是分钟，默认值1440；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天
    *
    * @var string[]
    */
    protected static $getters = [
            'messageId' => 'getMessageId',
            'name' => 'getName',
            'message' => 'getMessage',
            'properties' => 'getProperties',
            'encoding' => 'getEncoding',
            'payloadFormat' => 'getPayloadFormat',
            'topic' => 'getTopic',
            'topicFullName' => 'getTopicFullName',
            'ttl' => 'getTtl'
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
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : 'none';
        $this->container['payloadFormat'] = isset($data['payloadFormat']) ? $data['payloadFormat'] : 'standard';
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['topicFullName'] = isset($data['topicFullName']) ? $data['topicFullName'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : 1440;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['messageId']) && (mb_strlen($this->container['messageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'messageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['messageId']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['messageId'])) {
                $invalidProperties[] = "invalid value for 'messageId', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
            }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
            if (!is_null($this->container['encoding']) && !preg_match("/(none|base64)/", $this->container['encoding'])) {
                $invalidProperties[] = "invalid value for 'encoding', must be conform to the pattern /(none|base64)/.";
            }
            if (!is_null($this->container['payloadFormat']) && !preg_match("/(standard|raw)/", $this->container['payloadFormat'])) {
                $invalidProperties[] = "invalid value for 'payloadFormat', must be conform to the pattern /(standard|raw)/.";
            }
            if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) > 128)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['topicFullName']) && (mb_strlen($this->container['topicFullName']) > 128)) {
                $invalidProperties[] = "invalid value for 'topicFullName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['topicFullName']) && !preg_match("/^([$\/]?[a-zA-Z0-9(),\\-.:=@;_!*'%?+]*)([a-zA-Z0-9(),\\-.:=@;_!*'%?+]+\/)*([a-zA-Z0-9(),\\-.:=@;_!*'%?+]*|#)$/", $this->container['topicFullName'])) {
                $invalidProperties[] = "invalid value for 'topicFullName', must be conform to the pattern /^([$\/]?[a-zA-Z0-9(),\\-.:=@;_!*'%?+]*)([a-zA-Z0-9(),\\-.:=@;_!*'%?+]+\/)*([a-zA-Z0-9(),\\-.:=@;_!*'%?+]*|#)$/.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] > 1440)) {
                $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 1440.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] < 0)) {
                $invalidProperties[] = "invalid value for 'ttl', must be bigger than or equal to 0.";
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
    * Gets messageId
    *  **参数说明**：消息id，由用户生成（推荐使用UUID），同一个设备下唯一， 如果用户填写的id在设备下不唯一， 则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
    * Sets messageId
    *
    * @param string|null $messageId **参数说明**：消息id，由用户生成（推荐使用UUID），同一个设备下唯一， 如果用户填写的id在设备下不唯一， 则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
        return $this;
    }

    /**
    * Gets name
    *  **参数说明**：消息名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数说明**：消息名称。 **取值范围**：长度不超过128，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets message
    *  **参数说明**：消息内容，支持string和json格式。
    *
    * @return object
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param object $message **参数说明**：消息内容，支持string和json格式。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\PropertiesDTO|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\PropertiesDTO|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets encoding
    *  **参数说明**：消息内容编码格式。默认值none。 **取值范围**： - none  - base64
    *
    * @return string|null
    */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
    * Sets encoding
    *
    * @param string|null $encoding **参数说明**：消息内容编码格式。默认值none。 **取值范围**： - none  - base64
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
    * Gets payloadFormat
    *  **参数说明**：有效负载格式，在消息内容编码格式为none时有效。默认值standard（平台封装的标准格式）。 **取值范围**： - standard  - raw：直接将消息内容作为有效负载下发。
    *
    * @return string|null
    */
    public function getPayloadFormat()
    {
        return $this->container['payloadFormat'];
    }

    /**
    * Sets payloadFormat
    *
    * @param string|null $payloadFormat **参数说明**：有效负载格式，在消息内容编码格式为none时有效。默认值standard（平台封装的标准格式）。 **取值范围**： - standard  - raw：直接将消息内容作为有效负载下发。
    *
    * @return $this
    */
    public function setPayloadFormat($payloadFormat)
    {
        $this->container['payloadFormat'] = $payloadFormat;
        return $this;
    }

    /**
    * Gets topic
    *  **参数说明**：消息下行到设备的自定义topic后缀, 可选， 仅适用于MQTT协议接入的设备。 用户只能填写在租户产品界面配置的topic, 否则会校验不通过。 平台给消息topic添加的前缀为$oc/devices/{device_id}/user/， 用户可以在前缀的基础上增加自定义部分， 如增加messageDown，则平台拼接前缀后完整的topic为 $oc/devices/{device_id}/user/messageDown，其中device_id以实际设备的网关id替代。 如果用户指定该topic，消息会通过该topic下行到设备，如果用户不指定， 则消息通过系统默认的topic下行到设备,系统默认的topic格式为： $oc/devices/{device_id}/sys/messages/down。此字段与topic_full_name字段只可填写一个。
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic **参数说明**：消息下行到设备的自定义topic后缀, 可选， 仅适用于MQTT协议接入的设备。 用户只能填写在租户产品界面配置的topic, 否则会校验不通过。 平台给消息topic添加的前缀为$oc/devices/{device_id}/user/， 用户可以在前缀的基础上增加自定义部分， 如增加messageDown，则平台拼接前缀后完整的topic为 $oc/devices/{device_id}/user/messageDown，其中device_id以实际设备的网关id替代。 如果用户指定该topic，消息会通过该topic下行到设备，如果用户不指定， 则消息通过系统默认的topic下行到设备,系统默认的topic格式为： $oc/devices/{device_id}/sys/messages/down。此字段与topic_full_name字段只可填写一个。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets topicFullName
    *  **参数说明**：消息下行到设备的完整topic名称, 可选。用户需要下发用户自定义的topic给设备时，可以使用该参数指定完整的topic名称，物联网平台不校验该topic是否在平台定义，直接透传给设备。设备需要提前订阅该topic。此字段与topic字段只可填写一个。
    *
    * @return string|null
    */
    public function getTopicFullName()
    {
        return $this->container['topicFullName'];
    }

    /**
    * Sets topicFullName
    *
    * @param string|null $topicFullName **参数说明**：消息下行到设备的完整topic名称, 可选。用户需要下发用户自定义的topic给设备时，可以使用该参数指定完整的topic名称，物联网平台不校验该topic是否在平台定义，直接透传给设备。设备需要提前订阅该topic。此字段与topic字段只可填写一个。
    *
    * @return $this
    */
    public function setTopicFullName($topicFullName)
    {
        $this->container['topicFullName'] = $topicFullName;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数说明**：下发消息在平台缓存的老化时间，时间单位是分钟，默认值1440；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl **参数说明**：下发消息在平台缓存的老化时间，时间单位是分钟，默认值1440；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
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

