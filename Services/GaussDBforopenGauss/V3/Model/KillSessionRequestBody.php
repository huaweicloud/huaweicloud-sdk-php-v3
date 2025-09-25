<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KillSessionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KillSessionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sessionIds  **参数解释**: 查杀指定会话ID列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'nodeId' => 'string',
            'componentId' => 'string',
            'sessionIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sessionIds  **参数解释**: 查杀指定会话ID列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'nodeId' => null,
        'componentId' => null,
        'sessionIds' => null
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
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sessionIds  **参数解释**: 查杀指定会话ID列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'componentId' => 'component_id',
            'sessionIds' => 'session_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sessionIds  **参数解释**: 查杀指定会话ID列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'componentId' => 'setComponentId',
            'sessionIds' => 'setSessionIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * componentId  **参数解释**: 组件ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * sessionIds  **参数解释**: 查杀指定会话ID列表。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'componentId' => 'getComponentId',
            'sessionIds' => 'getSessionIds'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['sessionIds'] = isset($data['sessionIds']) ? $data['sessionIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['componentId'] === null) {
            $invalidProperties[] = "'componentId' can't be null";
        }
        if ($this->container['sessionIds'] === null) {
            $invalidProperties[] = "'sessionIds' can't be null";
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
    * Gets instanceId
    *  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: 节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**: 节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets componentId
    *  **参数解释**: 组件ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string $componentId **参数解释**: 组件ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets sessionIds
    *  **参数解释**: 查杀指定会话ID列表。 **约束限制**: 不涉及。
    *
    * @return string[]
    */
    public function getSessionIds()
    {
        return $this->container['sessionIds'];
    }

    /**
    * Sets sessionIds
    *
    * @param string[] $sessionIds **参数解释**: 查杀指定会话ID列表。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setSessionIds($sessionIds)
    {
        $this->container['sessionIds'] = $sessionIds;
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

