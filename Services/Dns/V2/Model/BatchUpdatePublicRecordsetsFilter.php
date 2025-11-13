<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdatePublicRecordsetsFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdatePublicRecordsetsFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relation  **参数解释：** 过滤条件之间的关系。 **约束限制：** 不涉及。 **取值范围：** - OR：或 - AND：与  **默认取值：** 不涉及。
    * conditions  **参数解释：** 条件列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relation' => 'string',
            'conditions' => '\HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsConditionvalue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relation  **参数解释：** 过滤条件之间的关系。 **约束限制：** 不涉及。 **取值范围：** - OR：或 - AND：与  **默认取值：** 不涉及。
    * conditions  **参数解释：** 条件列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relation' => null,
        'conditions' => null
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
    * relation  **参数解释：** 过滤条件之间的关系。 **约束限制：** 不涉及。 **取值范围：** - OR：或 - AND：与  **默认取值：** 不涉及。
    * conditions  **参数解释：** 条件列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relation' => 'relation',
            'conditions' => 'conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relation  **参数解释：** 过滤条件之间的关系。 **约束限制：** 不涉及。 **取值范围：** - OR：或 - AND：与  **默认取值：** 不涉及。
    * conditions  **参数解释：** 条件列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'relation' => 'setRelation',
            'conditions' => 'setConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relation  **参数解释：** 过滤条件之间的关系。 **约束限制：** 不涉及。 **取值范围：** - OR：或 - AND：与  **默认取值：** 不涉及。
    * conditions  **参数解释：** 条件列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'relation' => 'getRelation',
            'conditions' => 'getConditions'
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
        $this->container['relation'] = isset($data['relation']) ? $data['relation'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['relation'] === null) {
            $invalidProperties[] = "'relation' can't be null";
        }
            if (!preg_match("/OR|AND/", $this->container['relation'])) {
                $invalidProperties[] = "invalid value for 'relation', must be conform to the pattern /OR|AND/.";
            }
        if ($this->container['conditions'] === null) {
            $invalidProperties[] = "'conditions' can't be null";
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
    * Gets relation
    *  **参数解释：** 过滤条件之间的关系。 **约束限制：** 不涉及。 **取值范围：** - OR：或 - AND：与  **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getRelation()
    {
        return $this->container['relation'];
    }

    /**
    * Sets relation
    *
    * @param string $relation **参数解释：** 过滤条件之间的关系。 **约束限制：** 不涉及。 **取值范围：** - OR：或 - AND：与  **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRelation($relation)
    {
        $this->container['relation'] = $relation;
        return $this;
    }

    /**
    * Gets conditions
    *  **参数解释：** 条件列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsConditionvalue[]
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\BatchUpdatePublicRecordsetsConditionvalue[] $conditions **参数解释：** 条件列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
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

