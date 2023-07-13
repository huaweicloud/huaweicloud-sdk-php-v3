<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMessagesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMessagesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * messages  消息列表。
    * messagesCount  消息总数。
    * offsetsCount  总页数。
    * offset  当前页数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'messages' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowMessagesRespMessages[]',
            'messagesCount' => 'int',
            'offsetsCount' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * messages  消息列表。
    * messagesCount  消息总数。
    * offsetsCount  总页数。
    * offset  当前页数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'messages' => null,
        'messagesCount' => null,
        'offsetsCount' => null,
        'offset' => null
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
    * messages  消息列表。
    * messagesCount  消息总数。
    * offsetsCount  总页数。
    * offset  当前页数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'messages' => 'messages',
            'messagesCount' => 'messages_count',
            'offsetsCount' => 'offsets_count',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * messages  消息列表。
    * messagesCount  消息总数。
    * offsetsCount  总页数。
    * offset  当前页数。
    *
    * @var string[]
    */
    protected static $setters = [
            'messages' => 'setMessages',
            'messagesCount' => 'setMessagesCount',
            'offsetsCount' => 'setOffsetsCount',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * messages  消息列表。
    * messagesCount  消息总数。
    * offsetsCount  总页数。
    * offset  当前页数。
    *
    * @var string[]
    */
    protected static $getters = [
            'messages' => 'getMessages',
            'messagesCount' => 'getMessagesCount',
            'offsetsCount' => 'getOffsetsCount',
            'offset' => 'getOffset'
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
        $this->container['messages'] = isset($data['messages']) ? $data['messages'] : null;
        $this->container['messagesCount'] = isset($data['messagesCount']) ? $data['messagesCount'] : null;
        $this->container['offsetsCount'] = isset($data['offsetsCount']) ? $data['offsetsCount'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
    * Gets messages
    *  消息列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowMessagesRespMessages[]|null
    */
    public function getMessages()
    {
        return $this->container['messages'];
    }

    /**
    * Sets messages
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowMessagesRespMessages[]|null $messages 消息列表。
    *
    * @return $this
    */
    public function setMessages($messages)
    {
        $this->container['messages'] = $messages;
        return $this;
    }

    /**
    * Gets messagesCount
    *  消息总数。
    *
    * @return int|null
    */
    public function getMessagesCount()
    {
        return $this->container['messagesCount'];
    }

    /**
    * Sets messagesCount
    *
    * @param int|null $messagesCount 消息总数。
    *
    * @return $this
    */
    public function setMessagesCount($messagesCount)
    {
        $this->container['messagesCount'] = $messagesCount;
        return $this;
    }

    /**
    * Gets offsetsCount
    *  总页数。
    *
    * @return int|null
    */
    public function getOffsetsCount()
    {
        return $this->container['offsetsCount'];
    }

    /**
    * Sets offsetsCount
    *
    * @param int|null $offsetsCount 总页数。
    *
    * @return $this
    */
    public function setOffsetsCount($offsetsCount)
    {
        $this->container['offsetsCount'] = $offsetsCount;
        return $this;
    }

    /**
    * Gets offset
    *  当前页数。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 当前页数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

