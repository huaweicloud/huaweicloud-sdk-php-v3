<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExcuteSQLNodeInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExcuteSQLNodeInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * role  **参数描述**: 节点角色。 **取值范围**: - master：主节点。 - slave：备节点。 - secondary：日志节点。 - readreplica：只读节点。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * componentType  **参数描述**: 组件类型。 **取值范围**: - CN：CN组件。 - DN：DN组件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'nodeName' => 'string',
            'role' => 'string',
            'instanceId' => 'string',
            'componentType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * role  **参数描述**: 节点角色。 **取值范围**: - master：主节点。 - slave：备节点。 - secondary：日志节点。 - readreplica：只读节点。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * componentType  **参数描述**: 组件类型。 **取值范围**: - CN：CN组件。 - DN：DN组件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'nodeName' => null,
        'role' => null,
        'instanceId' => null,
        'componentType' => null
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
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * role  **参数描述**: 节点角色。 **取值范围**: - master：主节点。 - slave：备节点。 - secondary：日志节点。 - readreplica：只读节点。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * componentType  **参数描述**: 组件类型。 **取值范围**: - CN：CN组件。 - DN：DN组件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'role' => 'role',
            'instanceId' => 'instance_id',
            'componentType' => 'component_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * role  **参数描述**: 节点角色。 **取值范围**: - master：主节点。 - slave：备节点。 - secondary：日志节点。 - readreplica：只读节点。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * componentType  **参数描述**: 组件类型。 **取值范围**: - CN：CN组件。 - DN：DN组件。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'role' => 'setRole',
            'instanceId' => 'setInstanceId',
            'componentType' => 'setComponentType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    * nodeName  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    * role  **参数描述**: 节点角色。 **取值范围**: - master：主节点。 - slave：备节点。 - secondary：日志节点。 - readreplica：只读节点。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * componentType  **参数描述**: 组件类型。 **取值范围**: - CN：CN组件。 - DN：DN组件。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'role' => 'getRole',
            'instanceId' => 'getInstanceId',
            'componentType' => 'getComponentType'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['componentType'] = isset($data['componentType']) ? $data['componentType'] : null;
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
    * Gets nodeId
    *  **参数解释**: 节点ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId **参数解释**: 节点ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  **参数解释**: 节点名称。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName **参数解释**: 节点名称。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets role
    *  **参数描述**: 节点角色。 **取值范围**: - master：主节点。 - slave：备节点。 - secondary：日志节点。 - readreplica：只读节点。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role **参数描述**: 节点角色。 **取值范围**: - master：主节点。 - slave：备节点。 - secondary：日志节点。 - readreplica：只读节点。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 实例ID。 **取值范围**: 不涉及。
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
    * @param string|null $instanceId **参数解释**: 实例ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets componentType
    *  **参数描述**: 组件类型。 **取值范围**: - CN：CN组件。 - DN：DN组件。
    *
    * @return string|null
    */
    public function getComponentType()
    {
        return $this->container['componentType'];
    }

    /**
    * Sets componentType
    *
    * @param string|null $componentType **参数描述**: 组件类型。 **取值范围**: - CN：CN组件。 - DN：DN组件。
    *
    * @return $this
    */
    public function setComponentType($componentType)
    {
        $this->container['componentType'] = $componentType;
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

