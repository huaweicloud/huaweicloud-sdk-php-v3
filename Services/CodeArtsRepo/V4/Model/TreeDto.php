<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TreeDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TreeDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 提交ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 文件名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 文件结构。 **取值范围：** - commit, 子模块。 - tree, 目录。 - blob, 文件
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及
    * level  **参数解释：** 当前所在目录层级。 **取值范围：** 不涉及
    * isShownDropDown  **参数解释：** 是否下拉。 **取值范围：** - false, 不下拉。 - true, 下拉
    * folder  **参数解释：** 是否折叠。 **取值范围：** - false, 不折叠。 - true, 折叠。
    * children  子节点
    * submoduleLink  **参数解释：** 子模块连接。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'path' => 'string',
            'level' => 'int',
            'isShownDropDown' => 'bool',
            'folder' => 'bool',
            'children' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\TreeDto[]',
            'submoduleLink' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 提交ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 文件名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 文件结构。 **取值范围：** - commit, 子模块。 - tree, 目录。 - blob, 文件
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及
    * level  **参数解释：** 当前所在目录层级。 **取值范围：** 不涉及
    * isShownDropDown  **参数解释：** 是否下拉。 **取值范围：** - false, 不下拉。 - true, 下拉
    * folder  **参数解释：** 是否折叠。 **取值范围：** - false, 不折叠。 - true, 折叠。
    * children  子节点
    * submoduleLink  **参数解释：** 子模块连接。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'path' => null,
        'level' => 'int32',
        'isShownDropDown' => null,
        'folder' => null,
        'children' => null,
        'submoduleLink' => null
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
    * id  **参数解释：** 提交ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 文件名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 文件结构。 **取值范围：** - commit, 子模块。 - tree, 目录。 - blob, 文件
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及
    * level  **参数解释：** 当前所在目录层级。 **取值范围：** 不涉及
    * isShownDropDown  **参数解释：** 是否下拉。 **取值范围：** - false, 不下拉。 - true, 下拉
    * folder  **参数解释：** 是否折叠。 **取值范围：** - false, 不折叠。 - true, 折叠。
    * children  子节点
    * submoduleLink  **参数解释：** 子模块连接。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'path' => 'path',
            'level' => 'level',
            'isShownDropDown' => 'isShownDropDown',
            'folder' => 'folder',
            'children' => 'children',
            'submoduleLink' => 'submodule_link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 提交ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 文件名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 文件结构。 **取值范围：** - commit, 子模块。 - tree, 目录。 - blob, 文件
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及
    * level  **参数解释：** 当前所在目录层级。 **取值范围：** 不涉及
    * isShownDropDown  **参数解释：** 是否下拉。 **取值范围：** - false, 不下拉。 - true, 下拉
    * folder  **参数解释：** 是否折叠。 **取值范围：** - false, 不折叠。 - true, 折叠。
    * children  子节点
    * submoduleLink  **参数解释：** 子模块连接。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'path' => 'setPath',
            'level' => 'setLevel',
            'isShownDropDown' => 'setIsShownDropDown',
            'folder' => 'setFolder',
            'children' => 'setChildren',
            'submoduleLink' => 'setSubmoduleLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 提交ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 文件名称。 **取值范围：** 不涉及。
    * type  **参数解释：** 文件结构。 **取值范围：** - commit, 子模块。 - tree, 目录。 - blob, 文件
    * path  **参数解释：** 文件路径。 **取值范围：** 不涉及
    * level  **参数解释：** 当前所在目录层级。 **取值范围：** 不涉及
    * isShownDropDown  **参数解释：** 是否下拉。 **取值范围：** - false, 不下拉。 - true, 下拉
    * folder  **参数解释：** 是否折叠。 **取值范围：** - false, 不折叠。 - true, 折叠。
    * children  子节点
    * submoduleLink  **参数解释：** 子模块连接。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'path' => 'getPath',
            'level' => 'getLevel',
            'isShownDropDown' => 'getIsShownDropDown',
            'folder' => 'getFolder',
            'children' => 'getChildren',
            'submoduleLink' => 'getSubmoduleLink'
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
    const TYPE_COMMIT = 'commit';
    const TYPE_TREE = 'tree';
    const TYPE_BLOB = 'blob';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COMMIT,
            self::TYPE_TREE,
            self::TYPE_BLOB,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['isShownDropDown'] = isset($data['isShownDropDown']) ? $data['isShownDropDown'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['submoduleLink'] = isset($data['submoduleLink']) ? $data['submoduleLink'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    *  **参数解释：** 提交ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 提交ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 文件名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 文件名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 文件结构。 **取值范围：** - commit, 子模块。 - tree, 目录。 - blob, 文件
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
    * @param string|null $type **参数解释：** 文件结构。 **取值范围：** - commit, 子模块。 - tree, 目录。 - blob, 文件
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 文件路径。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 文件路径。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释：** 当前所在目录层级。 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level **参数解释：** 当前所在目录层级。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets isShownDropDown
    *  **参数解释：** 是否下拉。 **取值范围：** - false, 不下拉。 - true, 下拉
    *
    * @return bool|null
    */
    public function getIsShownDropDown()
    {
        return $this->container['isShownDropDown'];
    }

    /**
    * Sets isShownDropDown
    *
    * @param bool|null $isShownDropDown **参数解释：** 是否下拉。 **取值范围：** - false, 不下拉。 - true, 下拉
    *
    * @return $this
    */
    public function setIsShownDropDown($isShownDropDown)
    {
        $this->container['isShownDropDown'] = $isShownDropDown;
        return $this;
    }

    /**
    * Gets folder
    *  **参数解释：** 是否折叠。 **取值范围：** - false, 不折叠。 - true, 折叠。
    *
    * @return bool|null
    */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
    * Sets folder
    *
    * @param bool|null $folder **参数解释：** 是否折叠。 **取值范围：** - false, 不折叠。 - true, 折叠。
    *
    * @return $this
    */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;
        return $this;
    }

    /**
    * Gets children
    *  子节点
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\TreeDto[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\TreeDto[]|null $children 子节点
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets submoduleLink
    *  **参数解释：** 子模块连接。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getSubmoduleLink()
    {
        return $this->container['submoduleLink'];
    }

    /**
    * Sets submoduleLink
    *
    * @param string|null $submoduleLink **参数解释：** 子模块连接。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSubmoduleLink($submoduleLink)
    {
        $this->container['submoduleLink'] = $submoduleLink;
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

