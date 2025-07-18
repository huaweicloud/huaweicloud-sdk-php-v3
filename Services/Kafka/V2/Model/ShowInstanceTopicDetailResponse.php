<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceTopicDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceTopicDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及
    * partitions  **参数解释**： 分区列表。
    * groupSubscribed  **参数解释**： 订阅该Topic的消费组名称列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'partitions' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceTopicDetailRespPartitions[]',
            'groupSubscribed' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及
    * partitions  **参数解释**： 分区列表。
    * groupSubscribed  **参数解释**： 订阅该Topic的消费组名称列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'partitions' => null,
        'groupSubscribed' => null
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
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及
    * partitions  **参数解释**： 分区列表。
    * groupSubscribed  **参数解释**： 订阅该Topic的消费组名称列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'partitions' => 'partitions',
            'groupSubscribed' => 'group_subscribed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及
    * partitions  **参数解释**： 分区列表。
    * groupSubscribed  **参数解释**： 订阅该Topic的消费组名称列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'partitions' => 'setPartitions',
            'groupSubscribed' => 'setGroupSubscribed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及
    * partitions  **参数解释**： 分区列表。
    * groupSubscribed  **参数解释**： 订阅该Topic的消费组名称列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'partitions' => 'getPartitions',
            'groupSubscribed' => 'getGroupSubscribed'
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
        $this->container['partitions'] = isset($data['partitions']) ? $data['partitions'] : null;
        $this->container['groupSubscribed'] = isset($data['groupSubscribed']) ? $data['groupSubscribed'] : null;
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
    * Gets topic
    *  **参数解释**： Topic名称。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic **参数解释**： Topic名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets partitions
    *  **参数解释**： 分区列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceTopicDetailRespPartitions[]|null
    */
    public function getPartitions()
    {
        return $this->container['partitions'];
    }

    /**
    * Sets partitions
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowInstanceTopicDetailRespPartitions[]|null $partitions **参数解释**： 分区列表。
    *
    * @return $this
    */
    public function setPartitions($partitions)
    {
        $this->container['partitions'] = $partitions;
        return $this;
    }

    /**
    * Gets groupSubscribed
    *  **参数解释**： 订阅该Topic的消费组名称列表。
    *
    * @return string[]|null
    */
    public function getGroupSubscribed()
    {
        return $this->container['groupSubscribed'];
    }

    /**
    * Sets groupSubscribed
    *
    * @param string[]|null $groupSubscribed **参数解释**： 订阅该Topic的消费组名称列表。
    *
    * @return $this
    */
    public function setGroupSubscribed($groupSubscribed)
    {
        $this->container['groupSubscribed'] = $groupSubscribed;
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

