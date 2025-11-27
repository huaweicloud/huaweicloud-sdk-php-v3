<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MqttDeviceForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MqttDeviceForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  **参数说明**：消息重发布topic
    * ttl  **参数说明**：消息重发布过期时间，单位为分钟
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'ttl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  **参数说明**：消息重发布topic
    * ttl  **参数说明**：消息重发布过期时间，单位为分钟
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
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
    * topic  **参数说明**：消息重发布topic
    * ttl  **参数说明**：消息重发布过期时间，单位为分钟
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  **参数说明**：消息重发布topic
    * ttl  **参数说明**：消息重发布过期时间，单位为分钟
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  **参数说明**：消息重发布topic
    * ttl  **参数说明**：消息重发布过期时间，单位为分钟
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
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
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9\/{}$:.(),\\=@;!*%?_-]{1,128}$/", $this->container['topic'])) {
                $invalidProperties[] = "invalid value for 'topic', must be conform to the pattern /^[a-zA-Z0-9\/{}$:.(),\\=@;!*%?_-]{1,128}$/.";
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
    * Gets topic
    *  **参数说明**：消息重发布topic
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic **参数说明**：消息重发布topic
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets ttl
    *  **参数说明**：消息重发布过期时间，单位为分钟
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
    * @param int|null $ttl **参数说明**：消息重发布过期时间，单位为分钟
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

