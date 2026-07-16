<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchLockPoolNodesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchLockPoolNodesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeNames  **参数解释**：需要变更锁状态的节点名称列表。 **约束限制**：不涉及。
    * actions  **参数解释**：变更的功能类型。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeNames' => 'string[]',
            'actions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeNames  **参数解释**：需要变更锁状态的节点名称列表。 **约束限制**：不涉及。
    * actions  **参数解释**：变更的功能类型。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeNames' => null,
        'actions' => null
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
    * nodeNames  **参数解释**：需要变更锁状态的节点名称列表。 **约束限制**：不涉及。
    * actions  **参数解释**：变更的功能类型。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeNames' => 'nodeNames',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeNames  **参数解释**：需要变更锁状态的节点名称列表。 **约束限制**：不涉及。
    * actions  **参数解释**：变更的功能类型。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeNames' => 'setNodeNames',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeNames  **参数解释**：需要变更锁状态的节点名称列表。 **约束限制**：不涉及。
    * actions  **参数解释**：变更的功能类型。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeNames' => 'getNodeNames',
            'actions' => 'getActions'
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
        $this->container['nodeNames'] = isset($data['nodeNames']) ? $data['nodeNames'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeNames'] === null) {
            $invalidProperties[] = "'nodeNames' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
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
    * Gets nodeNames
    *  **参数解释**：需要变更锁状态的节点名称列表。 **约束限制**：不涉及。
    *
    * @return string[]
    */
    public function getNodeNames()
    {
        return $this->container['nodeNames'];
    }

    /**
    * Sets nodeNames
    *
    * @param string[] $nodeNames **参数解释**：需要变更锁状态的节点名称列表。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setNodeNames($nodeNames)
    {
        $this->container['nodeNames'] = $nodeNames;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释**：变更的功能类型。 **约束限制**：不涉及。
    *
    * @return string[]
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[] $actions **参数解释**：变更的功能类型。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

