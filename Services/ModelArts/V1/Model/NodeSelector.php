<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeSelector';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeSelectorTerms  **参数解释**：必填项。节点选择器项的列表。这些项是“或”的关系。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeSelectorTerms' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeSelectorTerm[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeSelectorTerms  **参数解释**：必填项。节点选择器项的列表。这些项是“或”的关系。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeSelectorTerms' => null
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
    * nodeSelectorTerms  **参数解释**：必填项。节点选择器项的列表。这些项是“或”的关系。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeSelectorTerms' => 'nodeSelectorTerms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeSelectorTerms  **参数解释**：必填项。节点选择器项的列表。这些项是“或”的关系。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeSelectorTerms' => 'setNodeSelectorTerms'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeSelectorTerms  **参数解释**：必填项。节点选择器项的列表。这些项是“或”的关系。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeSelectorTerms' => 'getNodeSelectorTerms'
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
        $this->container['nodeSelectorTerms'] = isset($data['nodeSelectorTerms']) ? $data['nodeSelectorTerms'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeSelectorTerms'] === null) {
            $invalidProperties[] = "'nodeSelectorTerms' can't be null";
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
    * Gets nodeSelectorTerms
    *  **参数解释**：必填项。节点选择器项的列表。这些项是“或”的关系。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeSelectorTerm[]
    */
    public function getNodeSelectorTerms()
    {
        return $this->container['nodeSelectorTerms'];
    }

    /**
    * Sets nodeSelectorTerms
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeSelectorTerm[] $nodeSelectorTerms **参数解释**：必填项。节点选择器项的列表。这些项是“或”的关系。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNodeSelectorTerms($nodeSelectorTerms)
    {
        $this->container['nodeSelectorTerms'] = $nodeSelectorTerms;
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

