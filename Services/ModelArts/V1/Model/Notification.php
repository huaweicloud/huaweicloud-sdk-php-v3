<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Notification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Notification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  **参数解释**：消息通知服务中所选主题的URN唯一资源标识。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * events  **参数解释**：触发消息通知的训练事件。 **约束限制**：枚举值： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业卡死 - JobPreempted：作业抢占
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'events' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  **参数解释**：消息通知服务中所选主题的URN唯一资源标识。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * events  **参数解释**：触发消息通知的训练事件。 **约束限制**：枚举值： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业卡死 - JobPreempted：作业抢占
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
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
    * topicUrn  **参数解释**：消息通知服务中所选主题的URN唯一资源标识。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * events  **参数解释**：触发消息通知的训练事件。 **约束限制**：枚举值： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业卡死 - JobPreempted：作业抢占
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'events' => 'events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  **参数解释**：消息通知服务中所选主题的URN唯一资源标识。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * events  **参数解释**：触发消息通知的训练事件。 **约束限制**：枚举值： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业卡死 - JobPreempted：作业抢占
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'events' => 'setEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  **参数解释**：消息通知服务中所选主题的URN唯一资源标识。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * events  **参数解释**：触发消息通知的训练事件。 **约束限制**：枚举值： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业卡死 - JobPreempted：作业抢占
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
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
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
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
    * Gets topicUrn
    *  **参数解释**：消息通知服务中所选主题的URN唯一资源标识。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn **参数解释**：消息通知服务中所选主题的URN唯一资源标识。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets events
    *  **参数解释**：触发消息通知的训练事件。 **约束限制**：枚举值： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业卡死 - JobPreempted：作业抢占
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
    * @param string[]|null $events **参数解释**：触发消息通知的训练事件。 **约束限制**：枚举值： - JobStarted：作业开始 - JobCompleted：作业结束 - JobFailed：作业失败 - JobTerminated：作业终止 - JobRestarted：作业重启 - JobHanged：作业卡死 - JobPreempted：作业抢占
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

