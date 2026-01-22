<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCesHierarchyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCesHierarchyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dimensions  **参数解释**： 监控维度。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceIds  **参数解释**： 实例信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nodes  **参数解释**： 节点信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topics  **参数解释**： 队列信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dlq  **参数解释**： 死信队列。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groups  **参数解释**： 消费组信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dimensions' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespDimensions[]',
            'instanceIds' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCesHierarchyRespInstanceIds[]',
            'nodes' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCesHierarchyRespNodes[]',
            'topics' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespTopics[]',
            'dlq' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespDlq[]',
            'groups' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dimensions  **参数解释**： 监控维度。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceIds  **参数解释**： 实例信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nodes  **参数解释**： 节点信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topics  **参数解释**： 队列信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dlq  **参数解释**： 死信队列。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groups  **参数解释**： 消费组信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dimensions' => null,
        'instanceIds' => null,
        'nodes' => null,
        'topics' => null,
        'dlq' => null,
        'groups' => null
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
    * dimensions  **参数解释**： 监控维度。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceIds  **参数解释**： 实例信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nodes  **参数解释**： 节点信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topics  **参数解释**： 队列信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dlq  **参数解释**： 死信队列。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groups  **参数解释**： 消费组信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dimensions' => 'dimensions',
            'instanceIds' => 'instance_ids',
            'nodes' => 'nodes',
            'topics' => 'topics',
            'dlq' => 'dlq',
            'groups' => 'groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dimensions  **参数解释**： 监控维度。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceIds  **参数解释**： 实例信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nodes  **参数解释**： 节点信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topics  **参数解释**： 队列信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dlq  **参数解释**： 死信队列。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groups  **参数解释**： 消费组信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'dimensions' => 'setDimensions',
            'instanceIds' => 'setInstanceIds',
            'nodes' => 'setNodes',
            'topics' => 'setTopics',
            'dlq' => 'setDlq',
            'groups' => 'setGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dimensions  **参数解释**： 监控维度。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceIds  **参数解释**： 实例信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * nodes  **参数解释**： 节点信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topics  **参数解释**： 队列信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * dlq  **参数解释**： 死信队列。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * groups  **参数解释**： 消费组信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'dimensions' => 'getDimensions',
            'instanceIds' => 'getInstanceIds',
            'nodes' => 'getNodes',
            'topics' => 'getTopics',
            'dlq' => 'getDlq',
            'groups' => 'getGroups'
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
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['dlq'] = isset($data['dlq']) ? $data['dlq'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
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
    * Gets dimensions
    *  **参数解释**： 监控维度。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespDimensions[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespDimensions[]|null $dimensions **参数解释**： 监控维度。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets instanceIds
    *  **参数解释**： 实例信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCesHierarchyRespInstanceIds[]|null
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCesHierarchyRespInstanceIds[]|null $instanceIds **参数解释**： 实例信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
        return $this;
    }

    /**
    * Gets nodes
    *  **参数解释**： 节点信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCesHierarchyRespNodes[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCesHierarchyRespNodes[]|null $nodes **参数解释**： 节点信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets topics
    *  **参数解释**： 队列信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespTopics[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespTopics[]|null $topics **参数解释**： 队列信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets dlq
    *  **参数解释**： 死信队列。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespDlq[]|null
    */
    public function getDlq()
    {
        return $this->container['dlq'];
    }

    /**
    * Sets dlq
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespDlq[]|null $dlq **参数解释**： 死信队列。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDlq($dlq)
    {
        $this->container['dlq'] = $dlq;
        return $this;
    }

    /**
    * Gets groups
    *  **参数解释**： 消费组信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespGroups[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\ShowCeshierarchyRespGroups[]|null $groups **参数解释**： 消费组信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
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

