<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Relation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Relation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： 关系code。 **取值范围**： 不涉及。
    * categories  **参数解释**： 关联的工作项code列表。 **取值范围**： 不涉及。
    * linkFieldCode  **参数解释**： 工作流场景使用，前置校验中的关联关系校验字段。 **取值范围**： 不涉及。
    * relationName  **参数解释**： 关系名称，在工作项详情关联项下左侧显示。 **取值范围**： 不涉及。
    * description  **参数解释**： 关系描述。 **取值范围**： 不涉及。
    * displayScope  **参数解释**： 展示范围。 **取值范围**： 不涉及。
    * actions  **参数解释**： 动作行为。 **取值范围**： 不涉及。
    * relateType  **参数解释**： 动作行为。 **取值范围**： - ONE_TO_ONE 一对一 - ONE_TO_MANY 一对多 - MANY_TO_ONE 多对一 - MANY_TO_MANY 多对多
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'categories' => 'string[]',
            'linkFieldCode' => 'string',
            'relationName' => 'string',
            'description' => 'string',
            'displayScope' => 'string',
            'actions' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\RelateAction[]',
            'relateType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： 关系code。 **取值范围**： 不涉及。
    * categories  **参数解释**： 关联的工作项code列表。 **取值范围**： 不涉及。
    * linkFieldCode  **参数解释**： 工作流场景使用，前置校验中的关联关系校验字段。 **取值范围**： 不涉及。
    * relationName  **参数解释**： 关系名称，在工作项详情关联项下左侧显示。 **取值范围**： 不涉及。
    * description  **参数解释**： 关系描述。 **取值范围**： 不涉及。
    * displayScope  **参数解释**： 展示范围。 **取值范围**： 不涉及。
    * actions  **参数解释**： 动作行为。 **取值范围**： 不涉及。
    * relateType  **参数解释**： 动作行为。 **取值范围**： - ONE_TO_ONE 一对一 - ONE_TO_MANY 一对多 - MANY_TO_ONE 多对一 - MANY_TO_MANY 多对多
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'categories' => null,
        'linkFieldCode' => null,
        'relationName' => null,
        'description' => null,
        'displayScope' => null,
        'actions' => null,
        'relateType' => null
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
    * type  **参数解释**： 关系code。 **取值范围**： 不涉及。
    * categories  **参数解释**： 关联的工作项code列表。 **取值范围**： 不涉及。
    * linkFieldCode  **参数解释**： 工作流场景使用，前置校验中的关联关系校验字段。 **取值范围**： 不涉及。
    * relationName  **参数解释**： 关系名称，在工作项详情关联项下左侧显示。 **取值范围**： 不涉及。
    * description  **参数解释**： 关系描述。 **取值范围**： 不涉及。
    * displayScope  **参数解释**： 展示范围。 **取值范围**： 不涉及。
    * actions  **参数解释**： 动作行为。 **取值范围**： 不涉及。
    * relateType  **参数解释**： 动作行为。 **取值范围**： - ONE_TO_ONE 一对一 - ONE_TO_MANY 一对多 - MANY_TO_ONE 多对一 - MANY_TO_MANY 多对多
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'categories' => 'categories',
            'linkFieldCode' => 'link_field_code',
            'relationName' => 'relation_name',
            'description' => 'description',
            'displayScope' => 'display_scope',
            'actions' => 'actions',
            'relateType' => 'relate_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： 关系code。 **取值范围**： 不涉及。
    * categories  **参数解释**： 关联的工作项code列表。 **取值范围**： 不涉及。
    * linkFieldCode  **参数解释**： 工作流场景使用，前置校验中的关联关系校验字段。 **取值范围**： 不涉及。
    * relationName  **参数解释**： 关系名称，在工作项详情关联项下左侧显示。 **取值范围**： 不涉及。
    * description  **参数解释**： 关系描述。 **取值范围**： 不涉及。
    * displayScope  **参数解释**： 展示范围。 **取值范围**： 不涉及。
    * actions  **参数解释**： 动作行为。 **取值范围**： 不涉及。
    * relateType  **参数解释**： 动作行为。 **取值范围**： - ONE_TO_ONE 一对一 - ONE_TO_MANY 一对多 - MANY_TO_ONE 多对一 - MANY_TO_MANY 多对多
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'categories' => 'setCategories',
            'linkFieldCode' => 'setLinkFieldCode',
            'relationName' => 'setRelationName',
            'description' => 'setDescription',
            'displayScope' => 'setDisplayScope',
            'actions' => 'setActions',
            'relateType' => 'setRelateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： 关系code。 **取值范围**： 不涉及。
    * categories  **参数解释**： 关联的工作项code列表。 **取值范围**： 不涉及。
    * linkFieldCode  **参数解释**： 工作流场景使用，前置校验中的关联关系校验字段。 **取值范围**： 不涉及。
    * relationName  **参数解释**： 关系名称，在工作项详情关联项下左侧显示。 **取值范围**： 不涉及。
    * description  **参数解释**： 关系描述。 **取值范围**： 不涉及。
    * displayScope  **参数解释**： 展示范围。 **取值范围**： 不涉及。
    * actions  **参数解释**： 动作行为。 **取值范围**： 不涉及。
    * relateType  **参数解释**： 动作行为。 **取值范围**： - ONE_TO_ONE 一对一 - ONE_TO_MANY 一对多 - MANY_TO_ONE 多对一 - MANY_TO_MANY 多对多
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'categories' => 'getCategories',
            'linkFieldCode' => 'getLinkFieldCode',
            'relationName' => 'getRelationName',
            'description' => 'getDescription',
            'displayScope' => 'getDisplayScope',
            'actions' => 'getActions',
            'relateType' => 'getRelateType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['linkFieldCode'] = isset($data['linkFieldCode']) ? $data['linkFieldCode'] : null;
        $this->container['relationName'] = isset($data['relationName']) ? $data['relationName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['displayScope'] = isset($data['displayScope']) ? $data['displayScope'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['relateType'] = isset($data['relateType']) ? $data['relateType'] : null;
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
    * Gets type
    *  **参数解释**： 关系code。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： 关系code。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets categories
    *  **参数解释**： 关联的工作项code列表。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
    * Sets categories
    *
    * @param string[]|null $categories **参数解释**： 关联的工作项code列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }

    /**
    * Gets linkFieldCode
    *  **参数解释**： 工作流场景使用，前置校验中的关联关系校验字段。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLinkFieldCode()
    {
        return $this->container['linkFieldCode'];
    }

    /**
    * Sets linkFieldCode
    *
    * @param string|null $linkFieldCode **参数解释**： 工作流场景使用，前置校验中的关联关系校验字段。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLinkFieldCode($linkFieldCode)
    {
        $this->container['linkFieldCode'] = $linkFieldCode;
        return $this;
    }

    /**
    * Gets relationName
    *  **参数解释**： 关系名称，在工作项详情关联项下左侧显示。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRelationName()
    {
        return $this->container['relationName'];
    }

    /**
    * Sets relationName
    *
    * @param string|null $relationName **参数解释**： 关系名称，在工作项详情关联项下左侧显示。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRelationName($relationName)
    {
        $this->container['relationName'] = $relationName;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 关系描述。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释**： 关系描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets displayScope
    *  **参数解释**： 展示范围。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDisplayScope()
    {
        return $this->container['displayScope'];
    }

    /**
    * Sets displayScope
    *
    * @param string|null $displayScope **参数解释**： 展示范围。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDisplayScope($displayScope)
    {
        $this->container['displayScope'] = $displayScope;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释**： 动作行为。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\RelateAction[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\RelateAction[]|null $actions **参数解释**： 动作行为。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets relateType
    *  **参数解释**： 动作行为。 **取值范围**： - ONE_TO_ONE 一对一 - ONE_TO_MANY 一对多 - MANY_TO_ONE 多对一 - MANY_TO_MANY 多对多
    *
    * @return string|null
    */
    public function getRelateType()
    {
        return $this->container['relateType'];
    }

    /**
    * Sets relateType
    *
    * @param string|null $relateType **参数解释**： 动作行为。 **取值范围**： - ONE_TO_ONE 一对一 - ONE_TO_MANY 一对多 - MANY_TO_ONE 多对一 - MANY_TO_MANY 多对多
    *
    * @return $this
    */
    public function setRelateType($relateType)
    {
        $this->container['relateType'] = $relateType;
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

