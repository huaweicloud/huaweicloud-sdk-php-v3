<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetAvailableZoneResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetAvailableZoneResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 可用区ID **取值范围**： 不涉及
    * name  **参数解释**： 可用区名称 **取值范围**： 不涉及
    * displayName  **参数解释**： 可用区按所在区域显示的名称 **取值范围**： 不涉及
    * azGroupIds  **参数解释**： 可用区所属的可用区组，一个可用区可能属于多个可用区组 **取值范围**： 不涉及
    * publicBorderGroup  **参数解释**： EIP所属的组，IES边缘场景为可用区ID，中心区统一为“center” **取值范围**： 不涉及
    * category  **参数解释**： 可用区分类 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区
    * alias  **参数解释**： 可用区名称别名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'displayName' => 'string',
            'azGroupIds' => 'string[]',
            'publicBorderGroup' => 'string',
            'category' => 'string',
            'alias' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 可用区ID **取值范围**： 不涉及
    * name  **参数解释**： 可用区名称 **取值范围**： 不涉及
    * displayName  **参数解释**： 可用区按所在区域显示的名称 **取值范围**： 不涉及
    * azGroupIds  **参数解释**： 可用区所属的可用区组，一个可用区可能属于多个可用区组 **取值范围**： 不涉及
    * publicBorderGroup  **参数解释**： EIP所属的组，IES边缘场景为可用区ID，中心区统一为“center” **取值范围**： 不涉及
    * category  **参数解释**： 可用区分类 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区
    * alias  **参数解释**： 可用区名称别名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'displayName' => null,
        'azGroupIds' => null,
        'publicBorderGroup' => null,
        'category' => null,
        'alias' => null
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
    * id  **参数解释**： 可用区ID **取值范围**： 不涉及
    * name  **参数解释**： 可用区名称 **取值范围**： 不涉及
    * displayName  **参数解释**： 可用区按所在区域显示的名称 **取值范围**： 不涉及
    * azGroupIds  **参数解释**： 可用区所属的可用区组，一个可用区可能属于多个可用区组 **取值范围**： 不涉及
    * publicBorderGroup  **参数解释**： EIP所属的组，IES边缘场景为可用区ID，中心区统一为“center” **取值范围**： 不涉及
    * category  **参数解释**： 可用区分类 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区
    * alias  **参数解释**： 可用区名称别名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'displayName' => 'displayName',
            'azGroupIds' => 'azGroupIds',
            'publicBorderGroup' => 'PublicBorderGroup',
            'category' => 'category',
            'alias' => 'alias'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 可用区ID **取值范围**： 不涉及
    * name  **参数解释**： 可用区名称 **取值范围**： 不涉及
    * displayName  **参数解释**： 可用区按所在区域显示的名称 **取值范围**： 不涉及
    * azGroupIds  **参数解释**： 可用区所属的可用区组，一个可用区可能属于多个可用区组 **取值范围**： 不涉及
    * publicBorderGroup  **参数解释**： EIP所属的组，IES边缘场景为可用区ID，中心区统一为“center” **取值范围**： 不涉及
    * category  **参数解释**： 可用区分类 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区
    * alias  **参数解释**： 可用区名称别名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'azGroupIds' => 'setAzGroupIds',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'category' => 'setCategory',
            'alias' => 'setAlias'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 可用区ID **取值范围**： 不涉及
    * name  **参数解释**： 可用区名称 **取值范围**： 不涉及
    * displayName  **参数解释**： 可用区按所在区域显示的名称 **取值范围**： 不涉及
    * azGroupIds  **参数解释**： 可用区所属的可用区组，一个可用区可能属于多个可用区组 **取值范围**： 不涉及
    * publicBorderGroup  **参数解释**： EIP所属的组，IES边缘场景为可用区ID，中心区统一为“center” **取值范围**： 不涉及
    * category  **参数解释**： 可用区分类 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区
    * alias  **参数解释**： 可用区名称别名 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'azGroupIds' => 'getAzGroupIds',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'category' => 'getCategory',
            'alias' => 'getAlias'
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
    const CATEGORY__DEFAULT = 'Default';
    const CATEGORY_IES = 'IES';
    const CATEGORY_HOME_ZONE = 'HomeZone';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY__DEFAULT,
            self::CATEGORY_IES,
            self::CATEGORY_HOME_ZONE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['azGroupIds'] = isset($data['azGroupIds']) ? $data['azGroupIds'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
    * Gets id
    *  **参数解释**： 可用区ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**： 可用区ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 可用区名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 可用区名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释**： 可用区按所在区域显示的名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName **参数解释**： 可用区按所在区域显示的名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets azGroupIds
    *  **参数解释**： 可用区所属的可用区组，一个可用区可能属于多个可用区组 **取值范围**： 不涉及
    *
    * @return string[]|null
    */
    public function getAzGroupIds()
    {
        return $this->container['azGroupIds'];
    }

    /**
    * Sets azGroupIds
    *
    * @param string[]|null $azGroupIds **参数解释**： 可用区所属的可用区组，一个可用区可能属于多个可用区组 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAzGroupIds($azGroupIds)
    {
        $this->container['azGroupIds'] = $azGroupIds;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  **参数解释**： EIP所属的组，IES边缘场景为可用区ID，中心区统一为“center” **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup **参数解释**： EIP所属的组，IES边缘场景为可用区ID，中心区统一为“center” **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释**： 可用区分类 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释**： 可用区分类 **取值范围**： - Default: 中心云可用区 - IES: 专属云可用区 - HomeZone: 智能边缘云可用区
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets alias
    *  **参数解释**： 可用区名称别名 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias **参数解释**： 可用区名称别名 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
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

