<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreferredAffinity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreferredAffinity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeAffinity  **参数解释**：调度器会优先将Pod调度到满足该字段指定的亲和性表达式的节点上，但它也可能选择违反一个或多个表达式的节点。最优先选择的节点是权重总和最大的节点，即对于每个满足所有调度要求（资源请求、调度期间必需的亲和性表达式等）的节点，通过遍历该字段的元素并计算总和，如果节点匹配相应的匹配表达式，则将“权重”加到总和中；权重总和最高的节点即为最优先选择的节点。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeAffinity' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PreferredSchedulingTerm[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeAffinity  **参数解释**：调度器会优先将Pod调度到满足该字段指定的亲和性表达式的节点上，但它也可能选择违反一个或多个表达式的节点。最优先选择的节点是权重总和最大的节点，即对于每个满足所有调度要求（资源请求、调度期间必需的亲和性表达式等）的节点，通过遍历该字段的元素并计算总和，如果节点匹配相应的匹配表达式，则将“权重”加到总和中；权重总和最高的节点即为最优先选择的节点。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeAffinity' => null
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
    * nodeAffinity  **参数解释**：调度器会优先将Pod调度到满足该字段指定的亲和性表达式的节点上，但它也可能选择违反一个或多个表达式的节点。最优先选择的节点是权重总和最大的节点，即对于每个满足所有调度要求（资源请求、调度期间必需的亲和性表达式等）的节点，通过遍历该字段的元素并计算总和，如果节点匹配相应的匹配表达式，则将“权重”加到总和中；权重总和最高的节点即为最优先选择的节点。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeAffinity' => 'node_affinity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeAffinity  **参数解释**：调度器会优先将Pod调度到满足该字段指定的亲和性表达式的节点上，但它也可能选择违反一个或多个表达式的节点。最优先选择的节点是权重总和最大的节点，即对于每个满足所有调度要求（资源请求、调度期间必需的亲和性表达式等）的节点，通过遍历该字段的元素并计算总和，如果节点匹配相应的匹配表达式，则将“权重”加到总和中；权重总和最高的节点即为最优先选择的节点。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeAffinity' => 'setNodeAffinity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeAffinity  **参数解释**：调度器会优先将Pod调度到满足该字段指定的亲和性表达式的节点上，但它也可能选择违反一个或多个表达式的节点。最优先选择的节点是权重总和最大的节点，即对于每个满足所有调度要求（资源请求、调度期间必需的亲和性表达式等）的节点，通过遍历该字段的元素并计算总和，如果节点匹配相应的匹配表达式，则将“权重”加到总和中；权重总和最高的节点即为最优先选择的节点。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeAffinity' => 'getNodeAffinity'
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
        $this->container['nodeAffinity'] = isset($data['nodeAffinity']) ? $data['nodeAffinity'] : null;
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
    * Gets nodeAffinity
    *  **参数解释**：调度器会优先将Pod调度到满足该字段指定的亲和性表达式的节点上，但它也可能选择违反一个或多个表达式的节点。最优先选择的节点是权重总和最大的节点，即对于每个满足所有调度要求（资源请求、调度期间必需的亲和性表达式等）的节点，通过遍历该字段的元素并计算总和，如果节点匹配相应的匹配表达式，则将“权重”加到总和中；权重总和最高的节点即为最优先选择的节点。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PreferredSchedulingTerm[]|null
    */
    public function getNodeAffinity()
    {
        return $this->container['nodeAffinity'];
    }

    /**
    * Sets nodeAffinity
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PreferredSchedulingTerm[]|null $nodeAffinity **参数解释**：调度器会优先将Pod调度到满足该字段指定的亲和性表达式的节点上，但它也可能选择违反一个或多个表达式的节点。最优先选择的节点是权重总和最大的节点，即对于每个满足所有调度要求（资源请求、调度期间必需的亲和性表达式等）的节点，通过遍历该字段的元素并计算总和，如果节点匹配相应的匹配表达式，则将“权重”加到总和中；权重总和最高的节点即为最优先选择的节点。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setNodeAffinity($nodeAffinity)
    {
        $this->container['nodeAffinity'] = $nodeAffinity;
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

