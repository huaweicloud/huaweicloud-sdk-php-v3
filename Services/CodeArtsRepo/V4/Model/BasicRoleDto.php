<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasicRoleDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasicRoleDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 角色ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * relatedRoleId  **参数解释：**  关联角色ID。 **取值范围：** 不涉及。
    * chineseName  **参数解释：** 角色中文名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'relatedRoleId' => 'string',
            'chineseName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 角色ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * relatedRoleId  **参数解释：**  关联角色ID。 **取值范围：** 不涉及。
    * chineseName  **参数解释：** 角色中文名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'relatedRoleId' => null,
        'chineseName' => null
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
    * id  **参数解释：** 角色ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * relatedRoleId  **参数解释：**  关联角色ID。 **取值范围：** 不涉及。
    * chineseName  **参数解释：** 角色中文名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'relatedRoleId' => 'related_role_id',
            'chineseName' => 'chinese_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 角色ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * relatedRoleId  **参数解释：**  关联角色ID。 **取值范围：** 不涉及。
    * chineseName  **参数解释：** 角色中文名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'relatedRoleId' => 'setRelatedRoleId',
            'chineseName' => 'setChineseName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 角色ID。 **取值范围：** 1-2147483647
    * name  **参数解释：** 角色名称。 **取值范围：** 不涉及。
    * relatedRoleId  **参数解释：**  关联角色ID。 **取值范围：** 不涉及。
    * chineseName  **参数解释：** 角色中文名。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'relatedRoleId' => 'getRelatedRoleId',
            'chineseName' => 'getChineseName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['relatedRoleId'] = isset($data['relatedRoleId']) ? $data['relatedRoleId'] : null;
        $this->container['chineseName'] = isset($data['chineseName']) ? $data['chineseName'] : null;
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
    * Gets id
    *  **参数解释：** 角色ID。 **取值范围：** 1-2147483647
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 角色ID。 **取值范围：** 1-2147483647
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
    *  **参数解释：** 角色名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 角色名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets relatedRoleId
    *  **参数解释：**  关联角色ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRelatedRoleId()
    {
        return $this->container['relatedRoleId'];
    }

    /**
    * Sets relatedRoleId
    *
    * @param string|null $relatedRoleId **参数解释：**  关联角色ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRelatedRoleId($relatedRoleId)
    {
        $this->container['relatedRoleId'] = $relatedRoleId;
        return $this;
    }

    /**
    * Gets chineseName
    *  **参数解释：** 角色中文名。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getChineseName()
    {
        return $this->container['chineseName'];
    }

    /**
    * Sets chineseName
    *
    * @param string|null $chineseName **参数解释：** 角色中文名。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setChineseName($chineseName)
    {
        $this->container['chineseName'] = $chineseName;
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

