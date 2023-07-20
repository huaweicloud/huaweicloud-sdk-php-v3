<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNotificationTopicsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNotificationTopicsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  request_id
    * topicCount  topics数量
    * topics  主题信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'topicCount' => 'int',
            'topics' => '\HuaweiCloud\SDK\Lts\V2\Model\Topics[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  request_id
    * topicCount  topics数量
    * topics  主题信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'topicCount' => 'int32',
        'topics' => null
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
    * requestId  request_id
    * topicCount  topics数量
    * topics  主题信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'topicCount' => 'topic_count',
            'topics' => 'topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  request_id
    * topicCount  topics数量
    * topics  主题信息
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'topicCount' => 'setTopicCount',
            'topics' => 'setTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  request_id
    * topicCount  topics数量
    * topics  主题信息
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'topicCount' => 'getTopicCount',
            'topics' => 'getTopics'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['topicCount'] = isset($data['topicCount']) ? $data['topicCount'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 64)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 1)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['topicCount']) && ($this->container['topicCount'] > 1000)) {
                $invalidProperties[] = "invalid value for 'topicCount', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['topicCount']) && ($this->container['topicCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'topicCount', must be bigger than or equal to 0.";
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
    * Gets requestId
    *  request_id
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId request_id
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets topicCount
    *  topics数量
    *
    * @return int|null
    */
    public function getTopicCount()
    {
        return $this->container['topicCount'];
    }

    /**
    * Sets topicCount
    *
    * @param int|null $topicCount topics数量
    *
    * @return $this
    */
    public function setTopicCount($topicCount)
    {
        $this->container['topicCount'] = $topicCount;
        return $this;
    }

    /**
    * Gets topics
    *  主题信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Topics[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Topics[]|null $topics 主题信息
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
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

