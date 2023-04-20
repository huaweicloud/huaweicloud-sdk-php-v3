<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BroadcastMessageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BroadcastMessageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  **参数说明**：资源空间ID。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称
    * messageId  消息id，由物联网平台生成，用于标识该消息。
    * createdTime  消息的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'topicFullName' => 'string',
            'messageId' => 'string',
            'createdTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  **参数说明**：资源空间ID。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称
    * messageId  消息id，由物联网平台生成，用于标识该消息。
    * createdTime  消息的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'topicFullName' => null,
        'messageId' => null,
        'createdTime' => null
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
    * appId  **参数说明**：资源空间ID。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称
    * messageId  消息id，由物联网平台生成，用于标识该消息。
    * createdTime  消息的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'topicFullName' => 'topic_full_name',
            'messageId' => 'message_id',
            'createdTime' => 'created_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  **参数说明**：资源空间ID。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称
    * messageId  消息id，由物联网平台生成，用于标识该消息。
    * createdTime  消息的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'topicFullName' => 'setTopicFullName',
            'messageId' => 'setMessageId',
            'createdTime' => 'setCreatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  **参数说明**：资源空间ID。
    * topicFullName  **参数说明**：接收广播消息的完整Topic名称
    * messageId  消息id，由物联网平台生成，用于标识该消息。
    * createdTime  消息的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'topicFullName' => 'getTopicFullName',
            'messageId' => 'getMessageId',
            'createdTime' => 'getCreatedTime'
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
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['topicFullName']) && (mb_strlen($this->container['topicFullName']) > 128)) {
                $invalidProperties[] = "invalid value for 'topicFullName', the character length must be smaller than or equal to 128.";
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
    *  **参数说明**：资源空间ID。
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
    * @param string|null $appId **参数说明**：资源空间ID。
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
    *  **参数说明**：接收广播消息的完整Topic名称
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
    * @param string|null $topicFullName **参数说明**：接收广播消息的完整Topic名称
    *
    * @return $this
    */
    public function setTopicFullName($topicFullName)
    {
        $this->container['topicFullName'] = $topicFullName;
        return $this;
    }

    /**
    * Gets messageId
    *  消息id，由物联网平台生成，用于标识该消息。
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
    * @param string|null $messageId 消息id，由物联网平台生成，用于标识该消息。
    *
    * @return $this
    */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
        return $this;
    }

    /**
    * Gets createdTime
    *  消息的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 消息的创建时间，\"yyyyMMdd'T'HHmmss'Z'\"格式的UTC字符串。
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
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

