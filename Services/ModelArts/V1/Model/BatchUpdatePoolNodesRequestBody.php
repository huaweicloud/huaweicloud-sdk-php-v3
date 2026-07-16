<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdatePoolNodesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdatePoolNodesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeNames  **参数解释**：需要更新的节点名称列表。 **约束限制**：不涉及。
    * action  **参数解释**：节点更新的类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - openHaRedundant：开启节点的高可用冗余标签 - closeHaRedundant：关闭节点的高可用冗余标签 - createTags：批量添加节点资源标签 - deleteTags：批量删除节点资源标签 **默认取值**：不涉及。
    * haRedundantEffect  **参数解释**：高可用冗余标签效果。 **约束限制**：不涉及。 **取值范围**：可选值如下： - NoSchedule：禁止调度 - NoExecute：禁止执行。 **默认取值**：NoSchedule。
    * driver  driver
    * tags  **参数解释**：需要批量操作的资源标签列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeNames' => 'string[]',
            'action' => 'string',
            'haRedundantEffect' => 'string',
            'driver' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeDriver',
            'tags' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeNames  **参数解释**：需要更新的节点名称列表。 **约束限制**：不涉及。
    * action  **参数解释**：节点更新的类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - openHaRedundant：开启节点的高可用冗余标签 - closeHaRedundant：关闭节点的高可用冗余标签 - createTags：批量添加节点资源标签 - deleteTags：批量删除节点资源标签 **默认取值**：不涉及。
    * haRedundantEffect  **参数解释**：高可用冗余标签效果。 **约束限制**：不涉及。 **取值范围**：可选值如下： - NoSchedule：禁止调度 - NoExecute：禁止执行。 **默认取值**：NoSchedule。
    * driver  driver
    * tags  **参数解释**：需要批量操作的资源标签列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeNames' => null,
        'action' => null,
        'haRedundantEffect' => null,
        'driver' => null,
        'tags' => null
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
    * nodeNames  **参数解释**：需要更新的节点名称列表。 **约束限制**：不涉及。
    * action  **参数解释**：节点更新的类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - openHaRedundant：开启节点的高可用冗余标签 - closeHaRedundant：关闭节点的高可用冗余标签 - createTags：批量添加节点资源标签 - deleteTags：批量删除节点资源标签 **默认取值**：不涉及。
    * haRedundantEffect  **参数解释**：高可用冗余标签效果。 **约束限制**：不涉及。 **取值范围**：可选值如下： - NoSchedule：禁止调度 - NoExecute：禁止执行。 **默认取值**：NoSchedule。
    * driver  driver
    * tags  **参数解释**：需要批量操作的资源标签列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeNames' => 'nodeNames',
            'action' => 'action',
            'haRedundantEffect' => 'haRedundantEffect',
            'driver' => 'driver',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeNames  **参数解释**：需要更新的节点名称列表。 **约束限制**：不涉及。
    * action  **参数解释**：节点更新的类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - openHaRedundant：开启节点的高可用冗余标签 - closeHaRedundant：关闭节点的高可用冗余标签 - createTags：批量添加节点资源标签 - deleteTags：批量删除节点资源标签 **默认取值**：不涉及。
    * haRedundantEffect  **参数解释**：高可用冗余标签效果。 **约束限制**：不涉及。 **取值范围**：可选值如下： - NoSchedule：禁止调度 - NoExecute：禁止执行。 **默认取值**：NoSchedule。
    * driver  driver
    * tags  **参数解释**：需要批量操作的资源标签列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeNames' => 'setNodeNames',
            'action' => 'setAction',
            'haRedundantEffect' => 'setHaRedundantEffect',
            'driver' => 'setDriver',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeNames  **参数解释**：需要更新的节点名称列表。 **约束限制**：不涉及。
    * action  **参数解释**：节点更新的类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - openHaRedundant：开启节点的高可用冗余标签 - closeHaRedundant：关闭节点的高可用冗余标签 - createTags：批量添加节点资源标签 - deleteTags：批量删除节点资源标签 **默认取值**：不涉及。
    * haRedundantEffect  **参数解释**：高可用冗余标签效果。 **约束限制**：不涉及。 **取值范围**：可选值如下： - NoSchedule：禁止调度 - NoExecute：禁止执行。 **默认取值**：NoSchedule。
    * driver  driver
    * tags  **参数解释**：需要批量操作的资源标签列表。 **约束限制**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeNames' => 'getNodeNames',
            'action' => 'getAction',
            'haRedundantEffect' => 'getHaRedundantEffect',
            'driver' => 'getDriver',
            'tags' => 'getTags'
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
    const ACTION_TRUE = 'true';
    const ACTION_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_TRUE,
            self::ACTION_FALSE,
        ];
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['haRedundantEffect'] = isset($data['haRedundantEffect']) ? $data['haRedundantEffect'] : null;
        $this->container['driver'] = isset($data['driver']) ? $data['driver'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  **参数解释**：需要更新的节点名称列表。 **约束限制**：不涉及。
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
    * @param string[] $nodeNames **参数解释**：需要更新的节点名称列表。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setNodeNames($nodeNames)
    {
        $this->container['nodeNames'] = $nodeNames;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**：节点更新的类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - openHaRedundant：开启节点的高可用冗余标签 - closeHaRedundant：关闭节点的高可用冗余标签 - createTags：批量添加节点资源标签 - deleteTags：批量删除节点资源标签 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**：节点更新的类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - openHaRedundant：开启节点的高可用冗余标签 - closeHaRedundant：关闭节点的高可用冗余标签 - createTags：批量添加节点资源标签 - deleteTags：批量删除节点资源标签 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets haRedundantEffect
    *  **参数解释**：高可用冗余标签效果。 **约束限制**：不涉及。 **取值范围**：可选值如下： - NoSchedule：禁止调度 - NoExecute：禁止执行。 **默认取值**：NoSchedule。
    *
    * @return string|null
    */
    public function getHaRedundantEffect()
    {
        return $this->container['haRedundantEffect'];
    }

    /**
    * Sets haRedundantEffect
    *
    * @param string|null $haRedundantEffect **参数解释**：高可用冗余标签效果。 **约束限制**：不涉及。 **取值范围**：可选值如下： - NoSchedule：禁止调度 - NoExecute：禁止执行。 **默认取值**：NoSchedule。
    *
    * @return $this
    */
    public function setHaRedundantEffect($haRedundantEffect)
    {
        $this->container['haRedundantEffect'] = $haRedundantEffect;
        return $this;
    }

    /**
    * Gets driver
    *  driver
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeDriver|null
    */
    public function getDriver()
    {
        return $this->container['driver'];
    }

    /**
    * Sets driver
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeDriver|null $driver driver
    *
    * @return $this
    */
    public function setDriver($driver)
    {
        $this->container['driver'] = $driver;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：需要批量操作的资源标签列表。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeTag[]|null $tags **参数解释**：需要批量操作的资源标签列表。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

