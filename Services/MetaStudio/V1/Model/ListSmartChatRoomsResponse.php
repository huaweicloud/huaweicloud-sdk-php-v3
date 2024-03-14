<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSmartChatRoomsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSmartChatRoomsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  智能交互对话总数。
    * countConcurrency  智能交互对话总并发路数。
    * smartChatRooms  智能交互对话列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'countConcurrency' => 'int',
            'smartChatRooms' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatRoomBaseInfo[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  智能交互对话总数。
    * countConcurrency  智能交互对话总并发路数。
    * smartChatRooms  智能交互对话列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int32',
        'countConcurrency' => 'int32',
        'smartChatRooms' => null,
        'xRequestId' => null
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
    * count  智能交互对话总数。
    * countConcurrency  智能交互对话总并发路数。
    * smartChatRooms  智能交互对话列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'countConcurrency' => 'count_concurrency',
            'smartChatRooms' => 'smart_chat_rooms',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  智能交互对话总数。
    * countConcurrency  智能交互对话总并发路数。
    * smartChatRooms  智能交互对话列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'countConcurrency' => 'setCountConcurrency',
            'smartChatRooms' => 'setSmartChatRooms',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  智能交互对话总数。
    * countConcurrency  智能交互对话总并发路数。
    * smartChatRooms  智能交互对话列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'countConcurrency' => 'getCountConcurrency',
            'smartChatRooms' => 'getSmartChatRooms',
            'xRequestId' => 'getXRequestId'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['countConcurrency'] = isset($data['countConcurrency']) ? $data['countConcurrency'] : null;
        $this->container['smartChatRooms'] = isset($data['smartChatRooms']) ? $data['smartChatRooms'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['countConcurrency']) && ($this->container['countConcurrency'] > 1024000)) {
                $invalidProperties[] = "invalid value for 'countConcurrency', must be smaller than or equal to 1024000.";
            }
            if (!is_null($this->container['countConcurrency']) && ($this->container['countConcurrency'] < 0)) {
                $invalidProperties[] = "invalid value for 'countConcurrency', must be bigger than or equal to 0.";
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
    * Gets count
    *  智能交互对话总数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 智能交互对话总数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets countConcurrency
    *  智能交互对话总并发路数。
    *
    * @return int|null
    */
    public function getCountConcurrency()
    {
        return $this->container['countConcurrency'];
    }

    /**
    * Sets countConcurrency
    *
    * @param int|null $countConcurrency 智能交互对话总并发路数。
    *
    * @return $this
    */
    public function setCountConcurrency($countConcurrency)
    {
        $this->container['countConcurrency'] = $countConcurrency;
        return $this;
    }

    /**
    * Gets smartChatRooms
    *  智能交互对话列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatRoomBaseInfo[]|null
    */
    public function getSmartChatRooms()
    {
        return $this->container['smartChatRooms'];
    }

    /**
    * Sets smartChatRooms
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\SmartChatRoomBaseInfo[]|null $smartChatRooms 智能交互对话列表。
    *
    * @return $this
    */
    public function setSmartChatRooms($smartChatRooms)
    {
        $this->container['smartChatRooms'] = $smartChatRooms;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

