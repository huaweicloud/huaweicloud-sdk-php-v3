<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeResizeParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeResizeParams';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodePool  **参数解释**：节点池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  **参数解释**：步长。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodePool' => 'string',
            'flavor' => 'string',
            'creatingStep' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodePool  **参数解释**：节点池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  **参数解释**：步长。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodePool' => null,
        'flavor' => null,
        'creatingStep' => null
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
    * nodePool  **参数解释**：节点池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  **参数解释**：步长。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodePool' => 'nodePool',
            'flavor' => 'flavor',
            'creatingStep' => 'creatingStep'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodePool  **参数解释**：节点池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  **参数解释**：步长。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodePool' => 'setNodePool',
            'flavor' => 'setFlavor',
            'creatingStep' => 'setCreatingStep'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodePool  **参数解释**：节点池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * flavor  **参数解释**：规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * creatingStep  **参数解释**：步长。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodePool' => 'getNodePool',
            'flavor' => 'getFlavor',
            'creatingStep' => 'getCreatingStep'
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
        $this->container['nodePool'] = isset($data['nodePool']) ? $data['nodePool'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['creatingStep'] = isset($data['creatingStep']) ? $data['creatingStep'] : null;
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
    * Gets nodePool
    *  **参数解释**：节点池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getNodePool()
    {
        return $this->container['nodePool'];
    }

    /**
    * Sets nodePool
    *
    * @param string|null $nodePool **参数解释**：节点池。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNodePool($nodePool)
    {
        $this->container['nodePool'] = $nodePool;
        return $this;
    }

    /**
    * Gets flavor
    *  **参数解释**：规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor **参数解释**：规格。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets creatingStep
    *  **参数解释**：步长。 **约束限制**：不涉及。
    *
    * @return object|null
    */
    public function getCreatingStep()
    {
        return $this->container['creatingStep'];
    }

    /**
    * Sets creatingStep
    *
    * @param object|null $creatingStep **参数解释**：步长。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setCreatingStep($creatingStep)
    {
        $this->container['creatingStep'] = $creatingStep;
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

