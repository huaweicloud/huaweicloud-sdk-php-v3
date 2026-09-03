<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSmnTopicsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSmnTopicsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * success  是否成功
    * requestId  请求的唯一标识ID
    * topicCount  返回的Topic个数
    * topics  主题列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'success' => 'bool',
            'requestId' => 'string',
            'topicCount' => 'int',
            'topics' => '\HuaweiCloud\SDK\Das\V3\Model\SmnTopicInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * success  是否成功
    * requestId  请求的唯一标识ID
    * topicCount  返回的Topic个数
    * topics  主题列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'success' => null,
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
    * success  是否成功
    * requestId  请求的唯一标识ID
    * topicCount  返回的Topic个数
    * topics  主题列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'success' => 'success',
            'requestId' => 'request_id',
            'topicCount' => 'topic_count',
            'topics' => 'topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * success  是否成功
    * requestId  请求的唯一标识ID
    * topicCount  返回的Topic个数
    * topics  主题列表
    *
    * @var string[]
    */
    protected static $setters = [
            'success' => 'setSuccess',
            'requestId' => 'setRequestId',
            'topicCount' => 'setTopicCount',
            'topics' => 'setTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * success  是否成功
    * requestId  请求的唯一标识ID
    * topicCount  返回的Topic个数
    * topics  主题列表
    *
    * @var string[]
    */
    protected static $getters = [
            'success' => 'getSuccess',
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
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
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
    * Gets success
    *  是否成功
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 是否成功
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets requestId
    *  请求的唯一标识ID
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
    * @param string|null $requestId 请求的唯一标识ID
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
    *  返回的Topic个数
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
    * @param int|null $topicCount 返回的Topic个数
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
    *  主题列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SmnTopicInfo[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SmnTopicInfo[]|null $topics 主题列表
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

