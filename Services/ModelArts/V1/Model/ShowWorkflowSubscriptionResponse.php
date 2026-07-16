<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWorkflowSubscriptionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWorkflowSubscriptionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createdAt  创建时间。
    * subscriptionId  订阅ID，唯一性标识。创建订阅时，后台自动生成。
    * topicUrns  订阅的主题。
    * entity  订阅的主体。
    * events  订阅的事件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createdAt' => 'string',
            'subscriptionId' => 'string',
            'topicUrns' => 'string[]',
            'entity' => 'string',
            'events' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createdAt  创建时间。
    * subscriptionId  订阅ID，唯一性标识。创建订阅时，后台自动生成。
    * topicUrns  订阅的主题。
    * entity  订阅的主体。
    * events  订阅的事件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createdAt' => null,
        'subscriptionId' => null,
        'topicUrns' => null,
        'entity' => null,
        'events' => null
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
    * createdAt  创建时间。
    * subscriptionId  订阅ID，唯一性标识。创建订阅时，后台自动生成。
    * topicUrns  订阅的主题。
    * entity  订阅的主体。
    * events  订阅的事件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createdAt' => 'created_at',
            'subscriptionId' => 'subscription_id',
            'topicUrns' => 'topic_urns',
            'entity' => 'entity',
            'events' => 'events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createdAt  创建时间。
    * subscriptionId  订阅ID，唯一性标识。创建订阅时，后台自动生成。
    * topicUrns  订阅的主题。
    * entity  订阅的主体。
    * events  订阅的事件。
    *
    * @var string[]
    */
    protected static $setters = [
            'createdAt' => 'setCreatedAt',
            'subscriptionId' => 'setSubscriptionId',
            'topicUrns' => 'setTopicUrns',
            'entity' => 'setEntity',
            'events' => 'setEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createdAt  创建时间。
    * subscriptionId  订阅ID，唯一性标识。创建订阅时，后台自动生成。
    * topicUrns  订阅的主题。
    * entity  订阅的主体。
    * events  订阅的事件。
    *
    * @var string[]
    */
    protected static $getters = [
            'createdAt' => 'getCreatedAt',
            'subscriptionId' => 'getSubscriptionId',
            'topicUrns' => 'getTopicUrns',
            'entity' => 'getEntity',
            'events' => 'getEvents'
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['subscriptionId'] = isset($data['subscriptionId']) ? $data['subscriptionId'] : null;
        $this->container['topicUrns'] = isset($data['topicUrns']) ? $data['topicUrns'] : null;
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
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
    * Gets createdAt
    *  创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets subscriptionId
    *  订阅ID，唯一性标识。创建订阅时，后台自动生成。
    *
    * @return string|null
    */
    public function getSubscriptionId()
    {
        return $this->container['subscriptionId'];
    }

    /**
    * Sets subscriptionId
    *
    * @param string|null $subscriptionId 订阅ID，唯一性标识。创建订阅时，后台自动生成。
    *
    * @return $this
    */
    public function setSubscriptionId($subscriptionId)
    {
        $this->container['subscriptionId'] = $subscriptionId;
        return $this;
    }

    /**
    * Gets topicUrns
    *  订阅的主题。
    *
    * @return string[]|null
    */
    public function getTopicUrns()
    {
        return $this->container['topicUrns'];
    }

    /**
    * Sets topicUrns
    *
    * @param string[]|null $topicUrns 订阅的主题。
    *
    * @return $this
    */
    public function setTopicUrns($topicUrns)
    {
        $this->container['topicUrns'] = $topicUrns;
        return $this;
    }

    /**
    * Gets entity
    *  订阅的主体。
    *
    * @return string|null
    */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
    * Sets entity
    *
    * @param string|null $entity 订阅的主体。
    *
    * @return $this
    */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;
        return $this;
    }

    /**
    * Gets events
    *  订阅的事件。
    *
    * @return string[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param string[]|null $events 订阅的事件。
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
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

