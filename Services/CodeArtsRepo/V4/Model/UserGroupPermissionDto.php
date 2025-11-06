<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserGroupPermissionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserGroupPermissionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * canCreateGroup  **参数解释：** 是否可以创建代码组。
    * canCraeteProject  **参数解释：** 是否可以创建仓库。
    * canSetGroup  **参数解释：** 是否可以设置代码组。
    * groupId  **参数解释：** 代码组id。
    * groupVisibility  **参数解释：** 可见性, private public。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'canCreateGroup' => 'bool',
            'canCraeteProject' => 'bool',
            'canSetGroup' => 'bool',
            'groupId' => 'int',
            'groupVisibility' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * canCreateGroup  **参数解释：** 是否可以创建代码组。
    * canCraeteProject  **参数解释：** 是否可以创建仓库。
    * canSetGroup  **参数解释：** 是否可以设置代码组。
    * groupId  **参数解释：** 代码组id。
    * groupVisibility  **参数解释：** 可见性, private public。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'canCreateGroup' => null,
        'canCraeteProject' => null,
        'canSetGroup' => null,
        'groupId' => null,
        'groupVisibility' => null
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
    * canCreateGroup  **参数解释：** 是否可以创建代码组。
    * canCraeteProject  **参数解释：** 是否可以创建仓库。
    * canSetGroup  **参数解释：** 是否可以设置代码组。
    * groupId  **参数解释：** 代码组id。
    * groupVisibility  **参数解释：** 可见性, private public。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'canCreateGroup' => 'can_create_group',
            'canCraeteProject' => 'can_craete_project',
            'canSetGroup' => 'can_set_group',
            'groupId' => 'group_id',
            'groupVisibility' => 'group_visibility'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * canCreateGroup  **参数解释：** 是否可以创建代码组。
    * canCraeteProject  **参数解释：** 是否可以创建仓库。
    * canSetGroup  **参数解释：** 是否可以设置代码组。
    * groupId  **参数解释：** 代码组id。
    * groupVisibility  **参数解释：** 可见性, private public。
    *
    * @var string[]
    */
    protected static $setters = [
            'canCreateGroup' => 'setCanCreateGroup',
            'canCraeteProject' => 'setCanCraeteProject',
            'canSetGroup' => 'setCanSetGroup',
            'groupId' => 'setGroupId',
            'groupVisibility' => 'setGroupVisibility'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * canCreateGroup  **参数解释：** 是否可以创建代码组。
    * canCraeteProject  **参数解释：** 是否可以创建仓库。
    * canSetGroup  **参数解释：** 是否可以设置代码组。
    * groupId  **参数解释：** 代码组id。
    * groupVisibility  **参数解释：** 可见性, private public。
    *
    * @var string[]
    */
    protected static $getters = [
            'canCreateGroup' => 'getCanCreateGroup',
            'canCraeteProject' => 'getCanCraeteProject',
            'canSetGroup' => 'getCanSetGroup',
            'groupId' => 'getGroupId',
            'groupVisibility' => 'getGroupVisibility'
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
        $this->container['canCreateGroup'] = isset($data['canCreateGroup']) ? $data['canCreateGroup'] : null;
        $this->container['canCraeteProject'] = isset($data['canCraeteProject']) ? $data['canCraeteProject'] : null;
        $this->container['canSetGroup'] = isset($data['canSetGroup']) ? $data['canSetGroup'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupVisibility'] = isset($data['groupVisibility']) ? $data['groupVisibility'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && ($this->container['groupId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'groupId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['groupId']) && ($this->container['groupId'] < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupVisibility']) && (mb_strlen($this->container['groupVisibility']) > 1000)) {
                $invalidProperties[] = "invalid value for 'groupVisibility', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['groupVisibility']) && (mb_strlen($this->container['groupVisibility']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupVisibility', the character length must be bigger than or equal to 1.";
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
    * Gets canCreateGroup
    *  **参数解释：** 是否可以创建代码组。
    *
    * @return bool|null
    */
    public function getCanCreateGroup()
    {
        return $this->container['canCreateGroup'];
    }

    /**
    * Sets canCreateGroup
    *
    * @param bool|null $canCreateGroup **参数解释：** 是否可以创建代码组。
    *
    * @return $this
    */
    public function setCanCreateGroup($canCreateGroup)
    {
        $this->container['canCreateGroup'] = $canCreateGroup;
        return $this;
    }

    /**
    * Gets canCraeteProject
    *  **参数解释：** 是否可以创建仓库。
    *
    * @return bool|null
    */
    public function getCanCraeteProject()
    {
        return $this->container['canCraeteProject'];
    }

    /**
    * Sets canCraeteProject
    *
    * @param bool|null $canCraeteProject **参数解释：** 是否可以创建仓库。
    *
    * @return $this
    */
    public function setCanCraeteProject($canCraeteProject)
    {
        $this->container['canCraeteProject'] = $canCraeteProject;
        return $this;
    }

    /**
    * Gets canSetGroup
    *  **参数解释：** 是否可以设置代码组。
    *
    * @return bool|null
    */
    public function getCanSetGroup()
    {
        return $this->container['canSetGroup'];
    }

    /**
    * Sets canSetGroup
    *
    * @param bool|null $canSetGroup **参数解释：** 是否可以设置代码组。
    *
    * @return $this
    */
    public function setCanSetGroup($canSetGroup)
    {
        $this->container['canSetGroup'] = $canSetGroup;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释：** 代码组id。
    *
    * @return int|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param int|null $groupId **参数解释：** 代码组id。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupVisibility
    *  **参数解释：** 可见性, private public。
    *
    * @return string|null
    */
    public function getGroupVisibility()
    {
        return $this->container['groupVisibility'];
    }

    /**
    * Sets groupVisibility
    *
    * @param string|null $groupVisibility **参数解释：** 可见性, private public。
    *
    * @return $this
    */
    public function setGroupVisibility($groupVisibility)
    {
        $this->container['groupVisibility'] = $groupVisibility;
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

