<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleInstanceContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleInstanceContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释**： 分组名称。 **取值范围**： 不涉及。
    * editable  **参数解释**： 是否可编辑。 **取值范围**： 不涉及。
    * type  **参数解释**： 分组类型。 **取值范围**： 不涉及。
    * canModifyWhenInherit  **参数解释**： 继承后的子策略是否可以修改阈值。 **取值范围**： - true：可以修改阈值。 - false：不可以修改阈值。
    * properties  **参数解释**： 规则属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'editable' => 'bool',
            'type' => 'string',
            'canModifyWhenInherit' => 'bool',
            'properties' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstanceProperty[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释**： 分组名称。 **取值范围**： 不涉及。
    * editable  **参数解释**： 是否可编辑。 **取值范围**： 不涉及。
    * type  **参数解释**： 分组类型。 **取值范围**： 不涉及。
    * canModifyWhenInherit  **参数解释**： 继承后的子策略是否可以修改阈值。 **取值范围**： - true：可以修改阈值。 - false：不可以修改阈值。
    * properties  **参数解释**： 规则属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'editable' => null,
        'type' => null,
        'canModifyWhenInherit' => null,
        'properties' => null
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
    * groupName  **参数解释**： 分组名称。 **取值范围**： 不涉及。
    * editable  **参数解释**： 是否可编辑。 **取值范围**： 不涉及。
    * type  **参数解释**： 分组类型。 **取值范围**： 不涉及。
    * canModifyWhenInherit  **参数解释**： 继承后的子策略是否可以修改阈值。 **取值范围**： - true：可以修改阈值。 - false：不可以修改阈值。
    * properties  **参数解释**： 规则属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'editable' => 'editable',
            'type' => 'type',
            'canModifyWhenInherit' => 'can_modify_when_inherit',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释**： 分组名称。 **取值范围**： 不涉及。
    * editable  **参数解释**： 是否可编辑。 **取值范围**： 不涉及。
    * type  **参数解释**： 分组类型。 **取值范围**： 不涉及。
    * canModifyWhenInherit  **参数解释**： 继承后的子策略是否可以修改阈值。 **取值范围**： - true：可以修改阈值。 - false：不可以修改阈值。
    * properties  **参数解释**： 规则属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'editable' => 'setEditable',
            'type' => 'setType',
            'canModifyWhenInherit' => 'setCanModifyWhenInherit',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释**： 分组名称。 **取值范围**： 不涉及。
    * editable  **参数解释**： 是否可编辑。 **取值范围**： 不涉及。
    * type  **参数解释**： 分组类型。 **取值范围**： 不涉及。
    * canModifyWhenInherit  **参数解释**： 继承后的子策略是否可以修改阈值。 **取值范围**： - true：可以修改阈值。 - false：不可以修改阈值。
    * properties  **参数解释**： 规则属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'editable' => 'getEditable',
            'type' => 'getType',
            'canModifyWhenInherit' => 'getCanModifyWhenInherit',
            'properties' => 'getProperties'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['canModifyWhenInherit'] = isset($data['canModifyWhenInherit']) ? $data['canModifyWhenInherit'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
            if ((mb_strlen($this->container['groupName']) > 85)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 85.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
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
    * Gets groupName
    *  **参数解释**： 分组名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName **参数解释**： 分组名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets editable
    *  **参数解释**： 是否可编辑。 **取值范围**： 不涉及。
    *
    * @return bool|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param bool|null $editable **参数解释**： 是否可编辑。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 分组类型。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： 分组类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets canModifyWhenInherit
    *  **参数解释**： 继承后的子策略是否可以修改阈值。 **取值范围**： - true：可以修改阈值。 - false：不可以修改阈值。
    *
    * @return bool|null
    */
    public function getCanModifyWhenInherit()
    {
        return $this->container['canModifyWhenInherit'];
    }

    /**
    * Sets canModifyWhenInherit
    *
    * @param bool|null $canModifyWhenInherit **参数解释**： 继承后的子策略是否可以修改阈值。 **取值范围**： - true：可以修改阈值。 - false：不可以修改阈值。
    *
    * @return $this
    */
    public function setCanModifyWhenInherit($canModifyWhenInherit)
    {
        $this->container['canModifyWhenInherit'] = $canModifyWhenInherit;
        return $this;
    }

    /**
    * Gets properties
    *  **参数解释**： 规则属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstanceProperty[]
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RuleInstanceProperty[] $properties **参数解释**： 规则属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

