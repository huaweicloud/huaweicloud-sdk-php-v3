<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTopicsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTopicsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  DSC告警主题ID（非消息通知服务主题ID）
    * defaultTopicUrn  默认消息通知主题的唯一资源标识符
    * topicCount  已确认的消息通知主题数量
    * topics  已确认的消息通知主题列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'defaultTopicUrn' => 'string',
            'topicCount' => 'int',
            'topics' => '\HuaweiCloud\SDK\Dsc\V1\Model\TopicBean[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  DSC告警主题ID（非消息通知服务主题ID）
    * defaultTopicUrn  默认消息通知主题的唯一资源标识符
    * topicCount  已确认的消息通知主题数量
    * topics  已确认的消息通知主题列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'defaultTopicUrn' => null,
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
    * id  DSC告警主题ID（非消息通知服务主题ID）
    * defaultTopicUrn  默认消息通知主题的唯一资源标识符
    * topicCount  已确认的消息通知主题数量
    * topics  已确认的消息通知主题列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'defaultTopicUrn' => 'default_topic_urn',
            'topicCount' => 'topic_count',
            'topics' => 'topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  DSC告警主题ID（非消息通知服务主题ID）
    * defaultTopicUrn  默认消息通知主题的唯一资源标识符
    * topicCount  已确认的消息通知主题数量
    * topics  已确认的消息通知主题列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'defaultTopicUrn' => 'setDefaultTopicUrn',
            'topicCount' => 'setTopicCount',
            'topics' => 'setTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  DSC告警主题ID（非消息通知服务主题ID）
    * defaultTopicUrn  默认消息通知主题的唯一资源标识符
    * topicCount  已确认的消息通知主题数量
    * topics  已确认的消息通知主题列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'defaultTopicUrn' => 'getDefaultTopicUrn',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['defaultTopicUrn'] = isset($data['defaultTopicUrn']) ? $data['defaultTopicUrn'] : null;
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
    * Gets id
    *  DSC告警主题ID（非消息通知服务主题ID）
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id DSC告警主题ID（非消息通知服务主题ID）
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets defaultTopicUrn
    *  默认消息通知主题的唯一资源标识符
    *
    * @return string|null
    */
    public function getDefaultTopicUrn()
    {
        return $this->container['defaultTopicUrn'];
    }

    /**
    * Sets defaultTopicUrn
    *
    * @param string|null $defaultTopicUrn 默认消息通知主题的唯一资源标识符
    *
    * @return $this
    */
    public function setDefaultTopicUrn($defaultTopicUrn)
    {
        $this->container['defaultTopicUrn'] = $defaultTopicUrn;
        return $this;
    }

    /**
    * Gets topicCount
    *  已确认的消息通知主题数量
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
    * @param int|null $topicCount 已确认的消息通知主题数量
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
    *  已确认的消息通知主题列表
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\TopicBean[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\TopicBean[]|null $topics 已确认的消息通知主题列表
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

