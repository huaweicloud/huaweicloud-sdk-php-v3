<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PropertiesDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PropertiesDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * correlationData  **参数说明**：MQTT 5.0版本请求和响应模式中的相关数据，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的相关数据。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * responseTopic  **参数说明**：MQTT 5.0版本请求和响应模式中的响应主题，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的响应主题。 **取值范围**：长度不超过128, 只允许字母、数字、以及_-?=$#+/等字符的组合。
    * userProperties  **参数说明**：用户自定义属性，可选。用户可以通过该参数配置用户自定义属性。可以配置的最大自定义属性数量为20。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'correlationData' => 'string',
            'responseTopic' => 'string',
            'userProperties' => '\HuaweiCloud\SDK\IoTDA\V5\Model\UserPropDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * correlationData  **参数说明**：MQTT 5.0版本请求和响应模式中的相关数据，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的相关数据。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * responseTopic  **参数说明**：MQTT 5.0版本请求和响应模式中的响应主题，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的响应主题。 **取值范围**：长度不超过128, 只允许字母、数字、以及_-?=$#+/等字符的组合。
    * userProperties  **参数说明**：用户自定义属性，可选。用户可以通过该参数配置用户自定义属性。可以配置的最大自定义属性数量为20。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'correlationData' => null,
        'responseTopic' => null,
        'userProperties' => null
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
    * correlationData  **参数说明**：MQTT 5.0版本请求和响应模式中的相关数据，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的相关数据。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * responseTopic  **参数说明**：MQTT 5.0版本请求和响应模式中的响应主题，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的响应主题。 **取值范围**：长度不超过128, 只允许字母、数字、以及_-?=$#+/等字符的组合。
    * userProperties  **参数说明**：用户自定义属性，可选。用户可以通过该参数配置用户自定义属性。可以配置的最大自定义属性数量为20。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'correlationData' => 'correlation_data',
            'responseTopic' => 'response_topic',
            'userProperties' => 'user_properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * correlationData  **参数说明**：MQTT 5.0版本请求和响应模式中的相关数据，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的相关数据。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * responseTopic  **参数说明**：MQTT 5.0版本请求和响应模式中的响应主题，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的响应主题。 **取值范围**：长度不超过128, 只允许字母、数字、以及_-?=$#+/等字符的组合。
    * userProperties  **参数说明**：用户自定义属性，可选。用户可以通过该参数配置用户自定义属性。可以配置的最大自定义属性数量为20。
    *
    * @var string[]
    */
    protected static $setters = [
            'correlationData' => 'setCorrelationData',
            'responseTopic' => 'setResponseTopic',
            'userProperties' => 'setUserProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * correlationData  **参数说明**：MQTT 5.0版本请求和响应模式中的相关数据，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的相关数据。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * responseTopic  **参数说明**：MQTT 5.0版本请求和响应模式中的响应主题，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的响应主题。 **取值范围**：长度不超过128, 只允许字母、数字、以及_-?=$#+/等字符的组合。
    * userProperties  **参数说明**：用户自定义属性，可选。用户可以通过该参数配置用户自定义属性。可以配置的最大自定义属性数量为20。
    *
    * @var string[]
    */
    protected static $getters = [
            'correlationData' => 'getCorrelationData',
            'responseTopic' => 'getResponseTopic',
            'userProperties' => 'getUserProperties'
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
        $this->container['correlationData'] = isset($data['correlationData']) ? $data['correlationData'] : null;
        $this->container['responseTopic'] = isset($data['responseTopic']) ? $data['responseTopic'] : null;
        $this->container['userProperties'] = isset($data['userProperties']) ? $data['userProperties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['correlationData']) && !preg_match("/^[a-zA-Z0-9_-]{0,128}$/", $this->container['correlationData'])) {
                $invalidProperties[] = "invalid value for 'correlationData', must be conform to the pattern /^[a-zA-Z0-9_-]{0,128}$/.";
            }
            if (!is_null($this->container['responseTopic']) && (mb_strlen($this->container['responseTopic']) > 128)) {
                $invalidProperties[] = "invalid value for 'responseTopic', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['responseTopic']) && !preg_match("/^[a-zA-Z0-9_?=$#+\/-]{0,128}$/", $this->container['responseTopic'])) {
                $invalidProperties[] = "invalid value for 'responseTopic', must be conform to the pattern /^[a-zA-Z0-9_?=$#+\/-]{0,128}$/.";
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
    * Gets correlationData
    *  **参数说明**：MQTT 5.0版本请求和响应模式中的相关数据，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的相关数据。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return string|null
    */
    public function getCorrelationData()
    {
        return $this->container['correlationData'];
    }

    /**
    * Sets correlationData
    *
    * @param string|null $correlationData **参数说明**：MQTT 5.0版本请求和响应模式中的相关数据，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的相关数据。 **取值范围**：长度不超过128，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setCorrelationData($correlationData)
    {
        $this->container['correlationData'] = $correlationData;
        return $this;
    }

    /**
    * Gets responseTopic
    *  **参数说明**：MQTT 5.0版本请求和响应模式中的响应主题，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的响应主题。 **取值范围**：长度不超过128, 只允许字母、数字、以及_-?=$#+/等字符的组合。
    *
    * @return string|null
    */
    public function getResponseTopic()
    {
        return $this->container['responseTopic'];
    }

    /**
    * Sets responseTopic
    *
    * @param string|null $responseTopic **参数说明**：MQTT 5.0版本请求和响应模式中的响应主题，可选。用户可以通过该参数配置MQTT协议请求和响应模式中的响应主题。 **取值范围**：长度不超过128, 只允许字母、数字、以及_-?=$#+/等字符的组合。
    *
    * @return $this
    */
    public function setResponseTopic($responseTopic)
    {
        $this->container['responseTopic'] = $responseTopic;
        return $this;
    }

    /**
    * Gets userProperties
    *  **参数说明**：用户自定义属性，可选。用户可以通过该参数配置用户自定义属性。可以配置的最大自定义属性数量为20。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\UserPropDTO[]|null
    */
    public function getUserProperties()
    {
        return $this->container['userProperties'];
    }

    /**
    * Sets userProperties
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\UserPropDTO[]|null $userProperties **参数说明**：用户自定义属性，可选。用户可以通过该参数配置用户自定义属性。可以配置的最大自定义属性数量为20。
    *
    * @return $this
    */
    public function setUserProperties($userProperties)
    {
        $this->container['userProperties'] = $userProperties;
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

