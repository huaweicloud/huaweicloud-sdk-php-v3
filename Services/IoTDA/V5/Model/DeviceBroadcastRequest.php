<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceBroadcastRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceBroadcastRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定广播消息所属的资源空间，否则广播消息将会向[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下订阅指定topic的设备发送。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称, 必选。用户需要发布广播消息给设备时，可以使用该参数指定完整的topic名称，物联网平台会向指定资源空间下订阅了该topic的所有在线设备发送消息。广播的topic无需控制台创建，但topic的前缀必须为$oc/broadcast/
    * message  **参数说明**：广播消息的内容，用户需要将消息原文使用Base64编码，Base64编码后的长度不超过128KB。
    * ttl  **参数说明**：广播消息在平台缓存的老化时间，时间单位是分钟，默认值为0；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天；ttl>0时，一个topic订阅设备数限制为10，如果一个topic订阅设备数超过10，则接口返回错误。
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID）。ttl> 0时，平台会缓存消息，需确保message_id是唯一的， 否则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'topicFullName' => 'string',
            'message' => 'string',
            'ttl' => 'int',
            'messageId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定广播消息所属的资源空间，否则广播消息将会向[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下订阅指定topic的设备发送。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称, 必选。用户需要发布广播消息给设备时，可以使用该参数指定完整的topic名称，物联网平台会向指定资源空间下订阅了该topic的所有在线设备发送消息。广播的topic无需控制台创建，但topic的前缀必须为$oc/broadcast/
    * message  **参数说明**：广播消息的内容，用户需要将消息原文使用Base64编码，Base64编码后的长度不超过128KB。
    * ttl  **参数说明**：广播消息在平台缓存的老化时间，时间单位是分钟，默认值为0；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天；ttl>0时，一个topic订阅设备数限制为10，如果一个topic订阅设备数超过10，则接口返回错误。
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID）。ttl> 0时，平台会缓存消息，需确保message_id是唯一的， 否则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'topicFullName' => null,
        'message' => null,
        'ttl' => 'int32',
        'messageId' => null
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
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定广播消息所属的资源空间，否则广播消息将会向[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下订阅指定topic的设备发送。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称, 必选。用户需要发布广播消息给设备时，可以使用该参数指定完整的topic名称，物联网平台会向指定资源空间下订阅了该topic的所有在线设备发送消息。广播的topic无需控制台创建，但topic的前缀必须为$oc/broadcast/
    * message  **参数说明**：广播消息的内容，用户需要将消息原文使用Base64编码，Base64编码后的长度不超过128KB。
    * ttl  **参数说明**：广播消息在平台缓存的老化时间，时间单位是分钟，默认值为0；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天；ttl>0时，一个topic订阅设备数限制为10，如果一个topic订阅设备数超过10，则接口返回错误。
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID）。ttl> 0时，平台会缓存消息，需确保message_id是唯一的， 否则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'topicFullName' => 'topic_full_name',
            'message' => 'message',
            'ttl' => 'ttl',
            'messageId' => 'message_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定广播消息所属的资源空间，否则广播消息将会向[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下订阅指定topic的设备发送。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称, 必选。用户需要发布广播消息给设备时，可以使用该参数指定完整的topic名称，物联网平台会向指定资源空间下订阅了该topic的所有在线设备发送消息。广播的topic无需控制台创建，但topic的前缀必须为$oc/broadcast/
    * message  **参数说明**：广播消息的内容，用户需要将消息原文使用Base64编码，Base64编码后的长度不超过128KB。
    * ttl  **参数说明**：广播消息在平台缓存的老化时间，时间单位是分钟，默认值为0；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天；ttl>0时，一个topic订阅设备数限制为10，如果一个topic订阅设备数超过10，则接口返回错误。
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID）。ttl> 0时，平台会缓存消息，需确保message_id是唯一的， 否则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'topicFullName' => 'setTopicFullName',
            'message' => 'setMessage',
            'ttl' => 'setTtl',
            'messageId' => 'setMessageId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定广播消息所属的资源空间，否则广播消息将会向[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下订阅指定topic的设备发送。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称, 必选。用户需要发布广播消息给设备时，可以使用该参数指定完整的topic名称，物联网平台会向指定资源空间下订阅了该topic的所有在线设备发送消息。广播的topic无需控制台创建，但topic的前缀必须为$oc/broadcast/
    * message  **参数说明**：广播消息的内容，用户需要将消息原文使用Base64编码，Base64编码后的长度不超过128KB。
    * ttl  **参数说明**：广播消息在平台缓存的老化时间，时间单位是分钟，默认值为0；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天；ttl>0时，一个topic订阅设备数限制为10，如果一个topic订阅设备数超过10，则接口返回错误。
    * messageId  **参数说明**：消息id，由用户生成（推荐使用UUID）。ttl> 0时，平台会缓存消息，需确保message_id是唯一的， 否则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'topicFullName' => 'getTopicFullName',
            'message' => 'getMessage',
            'ttl' => 'getTtl',
            'messageId' => 'getMessageId'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['topicFullName'] = isset($data['topicFullName']) ? $data['topicFullName'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : 0;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
        if ($this->container['topicFullName'] === null) {
            $invalidProperties[] = "'topicFullName' can't be null";
        }
            if ((mb_strlen($this->container['topicFullName']) > 128)) {
                $invalidProperties[] = "invalid value for 'topicFullName', the character length must be smaller than or equal to 128.";
            }
            if (!preg_match("/^[a-zA-Z0-9_?=$#+\/-]{0,128}$/", $this->container['topicFullName'])) {
                $invalidProperties[] = "invalid value for 'topicFullName', must be conform to the pattern /^[a-zA-Z0-9_?=$#+\/-]{0,128}$/.";
            }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
            if ((mb_strlen($this->container['message']) > 131072)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 131072.";
            }
            if (!preg_match("/^([A-Za-z0-9+\/]{4})*([A-Za-z0-9+\/]{3}=|[A-Za-z0-9+\/]{2}==)?$/", $this->container['message'])) {
                $invalidProperties[] = "invalid value for 'message', must be conform to the pattern /^([A-Za-z0-9+\/]{4})*([A-Za-z0-9+\/]{3}=|[A-Za-z0-9+\/]{2}==)?$/.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] > 1440)) {
                $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 1440.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] < 0)) {
                $invalidProperties[] = "invalid value for 'ttl', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['messageId']) && (mb_strlen($this->container['messageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'messageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['messageId']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['messageId'])) {
                $invalidProperties[] = "invalid value for 'messageId', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
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
    * Gets appId
    *  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定广播消息所属的资源空间，否则广播消息将会向[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下订阅指定topic的设备发送。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定广播消息所属的资源空间，否则广播消息将会向[[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)](tag:hws)[[默认资源空间](https://support.huaweicloud.com/intl/zh-cn/usermanual-iothub/iot_01_0006.html#section0)](tag:hws_hk)下订阅指定topic的设备发送。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets topicFullName
    *  **参数说明**：接收广播消息的完整Topic名称, 必选。用户需要发布广播消息给设备时，可以使用该参数指定完整的topic名称，物联网平台会向指定资源空间下订阅了该topic的所有在线设备发送消息。广播的topic无需控制台创建，但topic的前缀必须为$oc/broadcast/
    *
    * @return string
    */
    public function getTopicFullName()
    {
        return $this->container['topicFullName'];
    }

    /**
    * Sets topicFullName
    *
    * @param string $topicFullName **参数说明**：接收广播消息的完整Topic名称, 必选。用户需要发布广播消息给设备时，可以使用该参数指定完整的topic名称，物联网平台会向指定资源空间下订阅了该topic的所有在线设备发送消息。广播的topic无需控制台创建，但topic的前缀必须为$oc/broadcast/
    *
    * @return $this
    */
    public function setTopicFullName($topicFullName)
    {
        $this->container['topicFullName'] = $topicFullName;
        return $this;
    }

    /**
    * Gets message
    *  **参数说明**：广播消息的内容，用户需要将消息原文使用Base64编码，Base64编码后的长度不超过128KB。
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message **参数说明**：广播消息的内容，用户需要将消息原文使用Base64编码，Base64编码后的长度不超过128KB。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数说明**：广播消息在平台缓存的老化时间，时间单位是分钟，默认值为0；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天；ttl>0时，一个topic订阅设备数限制为10，如果一个topic订阅设备数超过10，则接口返回错误。
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
    * @param int|null $ttl **参数说明**：广播消息在平台缓存的老化时间，时间单位是分钟，默认值为0；ttl参数数值必须是5的倍数，即以5分钟为粒度；指定为0时表示不缓存消息，最大缓存时间1440分钟，即缓存一天；ttl>0时，一个topic订阅设备数限制为10，如果一个topic订阅设备数超过10，则接口返回错误。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets messageId
    *  **参数说明**：消息id，由用户生成（推荐使用UUID）。ttl> 0时，平台会缓存消息，需确保message_id是唯一的， 否则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
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
    * @param string|null $messageId **参数说明**：消息id，由用户生成（推荐使用UUID）。ttl> 0时，平台会缓存消息，需确保message_id是唯一的， 否则接口返回错误。 **取值范围**：长度不超过100，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
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

